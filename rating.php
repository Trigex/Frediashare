<?php
/*
Page:           _drawrating.php
Created:        Aug 2006
Last Mod:       Mar 18 2007
The function that draws the rating bar.
--------------------------------------------------------- 
ryan masuga, masugadesign.com
ryan@masugadesign.com 
Licensed under a Creative Commons Attribution 3.0 License.
http://creativecommons.org/licenses/by/3.0/
See readme.txt for full credit details.
--------------------------------------------------------- */
session_start();
$_SESSION['landed'] = '1';
function rating_bar($id,$units='',$static='',$section='') { 
global $smarty;
include 'configs/config.php';
if ( $section != '' ) $config['section'] = $section;
if ($config[section]=="audio") require("$config[base_dir]/configs/config-rating-audio.php");
elseif ($config[section]=="image") require("$config[base_dir]/configs/config-rating-image.php");
else require("$config[base_dir]/configs/config-rating-video.php");
if ( $config['views_delim'] == 'comma' ) $delim = ','; else $delim = '.';

//set some variables
$ip = $_SERVER['REMOTE_ADDR'];
if (!$units) {$units = 10;}
if (!$static) {$static = FALSE;}
//if($static) { $smarty->assign('static',"1"); }
// get votes, values, ips for the current rating bar
$query=mysql_query("SELECT total_votes, total_value, used_ips FROM $rating_dbname.$rating_tableName WHERE vkey='$id'")or die(" Error: ".mysql_error());


// insert the id in the DB if it doesn't exist already
// see: http://www.masugadesign.com/the-lab/scripts/unobtrusive-ajax-star-rating-bar/#comment-121
/*
if (mysql_num_rows($query) == 0) {
$sql = "INSERT INTO $rating_dbname.$rating_tableName (`id`,`total_votes`, `total_value`, `used_ips`) VALUES ('$id', '0', '0', '')";
$result = mysql_query($sql);
}
*/
$numbers=mysql_fetch_assoc($query);


if ($numbers['total_votes'] < 1) {
	$count = 0;
} else {
	$count=number_format($numbers['total_votes'],0,",",$delim); //how many votes total
}
$current_rating=$numbers['total_value']; //total number of rating added together and stored
$tense=($count==1) ? "vote" : "votes"; //plural form votes/vote

// determine whether the user has voted, so we know how to draw the ul/li
if ($config['rating_sameip'] == '0') $voted=mysql_num_rows(mysql_query("SELECT used_ips FROM $rating_dbname.$rating_tableName WHERE used_ips LIKE '%".$ip."%' AND vkey='".$id."' ")); 
else $voted=mysql_num_rows(mysql_query("SELECT vote_stats FROM $rating_dbname.$rating_tableName WHERE vote_stats LIKE '%".$_SESSION[UID].":".$ip."%' AND vkey='".$id."' ")); 

// now draw the rating bar
$rating_width = @number_format($current_rating/$count,2)*$rating_unitwidth;
$rating1 = @number_format($current_rating/$count,1);
$rating2 = @number_format($current_rating/$count,2);


if ($static == 'static') {
		$smarty->assign('static',"1");
		$static_rater = array();
		$static_rater[] .= "\n".'<div class="ratingblock">';
		$static_rater[] .= '<div id="unit_long'.$id.'">';
		$static_rater[] .= '<ul id="unit_ul'.$id.'" class="unit-rating" style="width:'.$rating_unitwidth*$units.'px;">';
		$static_rater[] .= '<li class="current-rating" style="width:'.$rating_width.'px;">Currently '.$rating2.'/'.$units.'</li>';
		$static_rater[] .= '</ul>';
		$static_rater[] .= '<p class="static">&nbsp;&nbsp;&nbsp;&nbsp;Rating: <strong> '.$rating1.'</strong>/'.$units.' ('.$count.' '.$tense.')</p>';
		$static_rater[] .= '</div>';
		$static_rater[] .= '</div>'."\n\n";

		return join("\n", $static_rater);


} else {
      $rater ='';
      $rater.='<div class="ratingblock">';

      $rater.='<div id="unit_long'.$id.'">';
      $rater.='  <ul id="unit_ul'.$id.'" class="unit-rating" style="width:'.$rating_unitwidth*$units.'px;">';
      $rater.='     <li class="current-rating" style="width:'.$rating_width.'px;">Currently '.$rating2.'/'.$units.'</li>';

      if ($config['rating_unlimited'] == '1') $voted = NULL;
      for ($ncount = 1; $ncount <= $units; $ncount++) { // loop from 1 to the number of units
           if(!$voted) { // if the user hasn't yet voted, draw the voting stars
              $rater.='<li><a href="rating_db.php?j='.$ncount.'&amp;q='.$id.'&amp;t='.$ip.'&amp;c='.$units.'" title="'.$ncount.' out of '.$units.'" class="r'.$ncount.'-unit rater" rel="nofollow">'.$ncount.'</a></li>';
           }
      }
      $ncount=0; // resets the count

      $rater.='  </ul>';
      $rater.='  <p';
      if($voted){ $rater.=' class="voted"'; }
      $rater.='>&nbsp;&nbsp;&nbsp;&nbsp;Rating: <strong> '.$rating1.'</strong>/'.$units.' ('.$count.' '.$tense.')';
      $rater.='  </p>';
      $rater.='</div>';
      $rater.='</div>';
      return $rater;
 }
}
?>