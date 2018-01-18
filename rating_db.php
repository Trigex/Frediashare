<?php
/*
Page:           db.php
Created:        Aug 2006
Last Mod:       Mar 18 2007
This page handles the database update if the user
does NOT have Javascript enabled.	
--------------------------------------------------------- 
ryan masuga, masugadesign.com
ryan@masugadesign.com 
Licensed under a Creative Commons Attribution 3.0 License.
http://creativecommons.org/licenses/by/3.0/
See readme.txt for full credit details.
--------------------------------------------------------- */
session_start();
global $config;
global $smarty;

//if ($mode=="audio") 
//{ 
//    require('configs/config-rating-audio.php');
//    $mode="audio";
//    global $mode;
//}
//else require('configs/config-rating-video.php'); // get the db connection info

//getting the values
$vote_sent = preg_replace("/[^0-9]/","",$_REQUEST['j']);
$id_sent = preg_replace("/[^0-9a-zA-Z]/","",$_REQUEST['q']);
$ip_num = preg_replace("/[^0-9\.]/","",$_REQUEST['t']);
$units = preg_replace("/[^0-9]/","",$_REQUEST['c']);
$ip = $_SERVER['REMOTE_ADDR'];
$referer  = $_SERVER['HTTP_REFERER'];

if ( $config['views_delim'] == 'comma' ) $delim = ','; else $delim = '.'; 
if ($vote_sent > $units) die("Sorry, vote appears to be invalid."); // kill the script because normal users will never see this.

//connecting to the database to get some information
$query = mysql_query("SELECT vote_stats, total_votes, total_value, used_ips FROM $rating_dbname.$rating_tableName WHERE vkey='$id_sent';")or die(" Error: ".mysql_error());
$numbers = mysql_fetch_assoc($query);

$stats = $numbers['vote_stats'];
$checkIP = unserialize($numbers['used_ips']);
//$count = $numbers['total_votes']; //how many votes total
$count=number_format($numbers['total_votes'],0,",",$delim);
$current_rating = $numbers['total_value']; //total number of rating added together and stored
$sum = $vote_sent+$current_rating; // add together the current vote value and the total vote value
$tense = ($count==1) ? "vote" : "votes"; //plural form votes/vote

// checking to see if the first vote has been tallied
// or increment the current number of votes
($sum==0 ? $added=0 : $added=$count+1);

// if it is an array i.e. already has entries the push in another value
((is_array($checkIP)) ? array_push($checkIP,$ip_num) : $checkIP=array($ip_num));
$insertip=serialize($checkIP);

//IP check when voting

if ($config['rating_sameip'] == '0') $voted=mysql_num_rows(mysql_query("SELECT used_ips FROM $rating_dbname.$rating_tableName WHERE used_ips LIKE '%".$ip."%' AND vkey='$id_sent';"));
elseif ($config['rating_sameip'] == '1') $voted=mysql_num_rows(mysql_query("SELECT vote_stats FROM $rating_dbname.$rating_tableName WHERE vote_stats LIKE '%".$_SESSION[UID].":".$ip."%' AND vkey='".$id_sent."';"));
elseif ($config['rating_unlimited'] == '1') $voted = NULL;

if(!$voted) {     //if the user hasn't yet voted, then vote normally...
$delim=":";
$delim2=",";
if($stats!="") $mystr=$stats.$delim2.$_SESSION[UID].$delim.$ip.$delim.$vote_sent;
else $mystr=$_SESSION[UID].$delim.$ip.$delim.$vote_sent;

if (($vote_sent >= 1 && $vote_sent <= $units) && ($ip == $ip_num)) { // keep votes within range
	$rate=$sum/$added;
	$update = "UPDATE $rating_dbname.$rating_tableName SET vote_stats='".$mystr."', total_votes='".$added."', total_value='".$sum."', used_ips='".$insertip."', rate='".$rate."' WHERE vkey='$id_sent';";
	$result = mysql_query($update);		
} 
header("Location: $referer"); // go back to the page we came from 
exit;
} //end for the "if(!$voted)"
?>