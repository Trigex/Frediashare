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

session_start();
include('../configs/config.php');
check_admin_login();
//$_REQUEST = array_map('mysql_real_escape_string', $_REQUEST);

$del=filter_descr($_REQUEST['del']); //delete string
$key=filter_descr($_REQUEST['vkey']);

if(key_to_info($key)!="") $tbl="files_video";
elseif(key_to_info_audio($key)!="") $tbl="files_audio";
elseif(key_to_info_image($key)!="") $tbl="files_image";
else { $err=$lang['adm_errsetrate1']; echo "<span class=red>$err</span>"; exit; }

$vr=$conn->execute("select vote_stats,rate,total_votes,total_value,used_ips from $tbl where vkey='$key'");
$votes=$vr->fields[vote_stats];
$used=$vr->fields[used_ips];
$total_votes=$vr->fields[total_votes];
$total_value=$vr->fields[total_value];
$rate=$vr->fields[rate];

//check
$ch=$conn->execute("select vote_stats from $tbl where vote_stats like '%$del%'");
if(mysql_affected_rows()<1) { $err=$lang['adm_errsetrate2']; echo "<span class=red>$err</span>"; exit; }

//mad string processing begins
$before = substr($votes, 0, strpos($votes, $del)); //splitting vote_stats: return data before delete string
$after=strstr($votes, $del); //splitting vote_stats: return data after delete string
$after=str_replace($del, '', $after); //removing delete string from $after

if($after[0]==",") { $after = substr($after, 1); } //if the first characters is a comma, remove it
$all=$before.$after; //vote_stats after joining $before and $after

if(substr($all, -1, 1)==',') { $all=substr($all, 0, -1); } //if the last characters is a comma, remove that as well

//getting the ip 
$ip=strstr($del, ":"); //geting the ip from the delete string: return data before ":"
$ip = substr($ip, 1); //remove first characters from $ip
$ips = substr($ip, 0, strpos($ip, ":")); //geting the ip from the delete string: return data after ":"

//getting the vote (last char. of delete string
$the_vote=substr($del,-1);

//building string to remove from used_ips
$mystr=';s:14:"'.$ips.'";'; //build string te be removed from used_ips
$f1=substr($used, 0, strpos($used, $mystr)); //get data before $mystr
$f2=strstr($used, $mystr); //get all data before $mystr and including
$f3=strstr($f2, "i"); //get data before "i"

$string1 = substr($f1, 0,-3); //cut last 3 characters from $f1
$string2 = substr($f1, 0,-4); //cut last 4 characters from $f1
$string3 = substr($f1, 0,-5); //cut last 5 characters from $f1
$string4 = substr($f1, 0,-6); //cut last 6 characters from $f1

if (substr($string1, -1)==";") $good1="yes"; //if the last characters is ";" then we're good
elseif (substr($string2, -1)==";") $good2="yes";
elseif (substr($string3, -1)==";") $good3="yes";
elseif (substr($string4, -1)==";") $good4="yes";
else $good="no";

if ($f3=="") $f3.="}";
if ($good1=="yes") { $all2=$string1.$f3; }
elseif ($good2=="yes") { $all2=$string2.$f3; }
elseif ($good3=="yes") { $all2=$string3.$f3; }
elseif ($good4=="yes") { $all2=$string4.$f3; }
else $all2=$string1.$f3;

$ns1 = substr($all2, 0, strpos($all2, "{")); //remove all characters before {
$ns = substr($ns1,0,-1); //remove last character
$ns = strstr($ns, ":"); //remove characters after
$ns = substr($ns, 1); //remove the first character

$new_vote_stats=$all;
if ($new_vote_stats=="") $new_used_ips="";
else $new_used_ips=str_replace($ns, $ns-1, $all2);

if ($new_vote_stats!="") 
{
    $new_total_votes=$total_votes-1;
    $new_total_value=$total_value-$the_vote;
    $new_rate=$new_total_value/$new_total_votes;
}
/*
echo "used_ips: ".$new_used_ips."<br>";
echo "vote_stats: ".$new_vote_stats."<br>";
echo "total_votes: ".$new_total_votes."<br>";
echo "total_value: ".$new_total_value."<br>";
echo "rate: ".$new_rate."<br>";
*/
//echo $used.'<br>';
//echo $new_used_ips.'<br>'; 
//echo $new_vote_stats;
//exit;
//finally updating database
$sql="update $tbl set vote_stats='$new_vote_stats', rate='$new_rate', total_votes='$new_total_votes', total_value='$new_total_value', used_ips='$new_used_ips' where vkey='$key'";
$res=$conn->execute($sql);
if(mysql_affected_rows()>0) { 
    $not=$lang['adm_notdelvote1']; 
    echo "<span class=green>$not</span>"; 
    $smarty->assign('mykey', filter_descr($_REQUEST['id']));
    $smarty->display('administration/ratingsload.tpl');
}
else echo mysql_error();
exit;
?>