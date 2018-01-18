<?php 
/**************************************************************************************************
| Software Name        : MediaShare - Audio, Image and Video Sharing Script
| Software Author      : MediaShare Development Team
| Website              : http://www.mediasharesuite.com
| E-mail               : mediasharesuite@gmail.com
|**************************************************************************************************
|
|**************************************************************************************************
| This source file is subject to the MediaShare End-User License Agreement, available online at:
| http://www.mediasharesuite.com/products/mediashare/eula/
| By using this software, you acknowledge having read this Agreement and agree to be bound thereby.
|**************************************************************************************************
| Copyright (c) 2007-2009 mediasharesuite.com. All rights reserved.
|**************************************************************************************************/
include("configs/config.php");
if($config[rss_feeds]=="0") { header("Location: $config[base_url]/main"); exit; }
header("Content-Type: text/xml"); 
header("Expires: 0"); 
print "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"; 
//print "<!DOCTYPE rss >\n"; 
$show=filter_title($_GET[show]);
$type=filter_title($_GET[type]);

if ($type=="audios") { $tbl="files_audio"; $tit="audios"; $file="audio"; $act="played"; $act1=$lang['rss_act1']; }
elseif ($type=="images") { $tbl="files_image"; $tit="images"; $file="image"; $act="viewed"; $act1=$lang['rss_act2']; }
elseif ($type=="videos") { $tbl="files_video"; $tit="videos"; $file="video"; $act="viewed"; $act1=$lang['rss_act2']; }
else { illegal_op(); }

if ($show == "newest") 
{
    $see="1";
    $query = "SELECT A.*,B.uid,B.username FROM ".$tbl." A, members B WHERE A.uid=B.uid AND A.vtype='public' and A.active='1' and A.is_inapp='no' ORDER BY A.vid desc LIMIT 0,20"; 
    if ($type=="audios") { $title = $lang['rss_audio1_title1']; }
    elseif ($type=="images") { $title = $lang['rss_image1_title1']; }
    elseif ($type=="videos") { $title = $lang['rss_video1_title1']; }
    $url   = $config['base_url']."/rss/".$tit."/".$show.""; 
} 
elseif ($show == "most_played") 
{ 
    $see="1";
    $query = "SELECT A.*,B.uid,B.username FROM files_audio A, members B WHERE A.uid=B.uid AND A.vtype='public' and A.active='1' and A.is_inapp='no' ORDER BY A.views desc LIMIT 0,20"; 
    if ($type=="audios") { $title = $lang['rss_audio2_title2']; }
    elseif ($type=="images") { $title = $lang['rss_image2_title2']; }
    elseif ($type=="videos") { $title = $lang['rss_video2_title2']; }
    $url   = $config['base_url']."/rss/".$tit."/".$show."";
} 
elseif ($show == "most_viewed") 
{
    $see="1"; 
    $query = "SELECT A.*,B.uid,B.username FROM ".$tbl." A, members B WHERE A.uid=B.uid AND A.vtype='public' and A.active='1' and A.is_inapp='no' ORDER BY A.views desc LIMIT 0,20"; 
    if ($type=="audios") { $title = $lang['rss_audio2_title2']; }
    elseif ($type=="images") { $title = $lang['rss_image2_title2']; }
    elseif ($type=="videos") { $title = $lang['rss_video2_title2']; }
    $url   = $config['base_url']."/rss/".$tit."/".$show."";
} 
elseif ($show == "top_rated") 
{ 
    $see="0";
    $query = "SELECT A.*,B.uid,B.username FROM ".$tbl." A, members B WHERE A.uid=B.uid AND A.vtype='public' and A.active='1' and A.is_inapp='no' ORDER BY A.rate desc LIMIT 0,20"; 
    if ($type=="audios") { $title = $lang['rss_audio3_title3']; }
    elseif ($type=="images") { $title = $lang['rss_image3_title3']; }
    elseif ($type=="videos") { $title = $lang['rss_video3_title3']; }
    $url   = $config['base_url']."/rss/".$tit."/".$show."";
}
else { illegal_op(); } 

print "<rss version=\"2.0\" xmlns:media=\"http://anonym.to/?http://search.yahoo.com/mrss\">\n"; 
print "<channel>\n"; 
print "<title>".$title."</title>\n"; 
print "<link>".$url."</link>\n"; 
print "<copyright>".$lang['rss_copyright']."</copyright>\n";
  
$db=mysql_connect ($db_host,$db_user,$db_pass) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($db_name); 
  
$num_rows = mysql_num_rows(mysql_query("select * from ".$tbl." where vtype='public' and active='1' and is_inapp='no'")); 
  
$result = mysql_query($query) or die ('Query Error: ' . mysql_error()); 
if ( $config['views_delim'] == 'comma' ) $delim = ','; else $delim = '.';

if ($config['def_thumb'] == '1') $bn=rand(1,1);
elseif ($config['def_thumb'] == '2') $bn=rand(2,2);
elseif ($config['def_thumb'] == '3') $bn=rand(3,3);
elseif ($config['def_thumb'] == '4') $bn=rand(1,3);

while ($results = mysql_fetch_array($result)) 
{ 
  if ($type=="audios") { $rnd=substr(md5($results['vid']),11,7); $photo = $config['tmb_url']."/user".$results['uid']."/".$bn."_".$results['vid'].$rnd.".jpg"; if ($see=="1") $seen = $act1."".number_format($results['views'],0,",",$delim)."".$lang['rss_times'].""; elseif ($see=="0") { if ($results['rate']=="0") $seen=$lang['rss_notrated']; else $seen = "".$lang['rss_rated']."".$results['rate']."".$lang['rss_rated_outof']."".$results['total_votes']."".$lang['rss_votes'].""; }}
  elseif ($type=="images") { $photo = $config['tmb_url']."/user".$results['uid']."/".$results['vflvname']; if ($see=="1") $seen = $act1."".number_format($results['views'],0,",",$delim)."".$lang['rss_times'].""; elseif ($see=="0") { if ($results['rate']=="0") $seen=$lang['rss_notrated']; else $seen = "".$lang['rss_rated']."".$results['rate']."".$lang['rss_rated_outof']."".$results['total_votes']."".$lang['rss_votes'].""; }}
  elseif ($type=="videos") { $rnd=substr(md5($results['vid']),13,7); $photo = $config['tmb_url']."/user".$results['uid']."/".$bn."_".$results['vid'].$rnd.".jpg"; if ($see=="1") $seen = $act1."".number_format($results['views'],0,",",$delim)."".$lang['rss_times'].""; elseif ($see=="0") { if ($results['rate']=="0") $seen=$lang['rss_notrated']; else $seen = "".$lang['rss_rated']."".$results['rate']."".$lang['rss_rated_outof']."".$results['total_votes']."".$lang['rss_votes'].""; }}
  if ($config[special_characters]=="0") $title       = ereg_replace(" {1,}", "_", $results['vtitle']);  
  else $title = $results['vkey'];
  $video       = $config['base_url']."/".$file."/".$title;
  $description = modifier_spchar($results['vdescr']);
  $photo       = str_replace ("&amp","&amp",htmlspecialchars(stripslashes($photo))); 

print "<item>\n"; 
print "  <title>".$results['vtitle']."</title>\n";
print "  <link>".$video."</link>\n"; 
print "  <description>\n"; 
print "    <![CDATA["; 
if ($config[special_characters]=="0") {
print "<a href=\"$video\"><img src=\"$photo\" align=\"left\" border=\"0\" width=\"$config[img_max_width]\" height=\"$config[img_max_height]\" vspace=\"0\" hspace=\"10\" /></a>
       <p>".$lang['rss_descr']." ".$description."</p>
       <p>".$lang['rss_addedby']." <a href=\"$config[base_url]/profile/".$results['username']."\">".$results['username']."</a><br/>".$seen."<br/></p><br /> 
       ".$lang['rss_tags']." "; 
}
else {
print "<a href=\"$video\"><img src=\"$photo\" align=\"left\" border=\"0\" width=\"$config[img_max_width]\" height=\"$config[img_max_height]\" vspace=\"0\" hspace=\"10\" /></a>
       <p>".$lang['rss_descr']." ".$description."</p>
       <p>".$lang['rss_addedby']." <a href=\"$config[base_url]/profile/".$results['uid']."\">".$results['username']."</a><br/>".$seen."<br/></p><br /> 
       ".$lang['rss_tags']." "; 
}
  $tok = strtok($results['vtags'], " "); 
  while ($tok !== false) 
  { 
    print "<a href=\"$config[base_url]/search/tags/".$tok."\">".$tok."</a> "; 
    $tok = strtok(" "); 
  } 
print "<br />".$lang['rss_addedon']."".$results['adddate']."<br/></p><br /><hr>";   
print "    ]]>\n"; 
print "  </description>\n"; 
print "  <author>".addslashes(htmlentities(strip_tags($results[username]),ENT_QUOTES,'UTF-8'))."</author>\n"; 
print "</item>\n"; 
} 
mysql_close(); 
print "</channel>"; 
print "</rss>"; 
?> 