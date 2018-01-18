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

include("../configs/config.php");
check_admin_login();

if($config['video_approval'] == 1) $active="active='0'";
    else $active="active='1'";
    
if(isset($_REQUEST['id']))
{
    $viewkey=$_REQUEST['id'];
    if (preg_match("/[^a-zA-Z0-9 öüäÖÜÄ!?\_\-\.]/", $viewkey)) { illegal_opa(); }
    
    if (substr($viewkey,0,4)=="feat")
    {
	$feat="yes";
	$viewkey=substr_replace($viewkey, $newstring, 0, 4);
    }
    
    $msq = "select * from files_video where vkey='$viewkey'";
    $mrs = $conn->execute($msq);
    $muid = $mrs->fields[uid];
    $mtype = $mrs->fields[vtype];
    $mact = $mrs->fields[active];
    
    $sql=$msq;
    $rs = $conn->Execute($sql);
    $movi_name=$rs->fields['vflvname'];
    $chan=$rs->fields['vcategs'];
    $video_name=$rs->fields['vtitle'];
    $chann=explode(",",$chan);		
    $channel=$chann[1];

    $search_channels = explode(",",$channel);
    foreach ($chann as $keys)
    {
        $channel_like .= "categories like $keys or ";
    }
    
    $channel_like = substr($channel_like,0,strlen($channel_like)-3);
    
    $qry = "select poption from player_settings where id=1";
    $red = $conn->Execute($qry);
    $search_by=$red->fields['poption'];
		
    if($search_by==0)
    {
	$sql = "select vtags from files_video where vkey='$viewkey'";
	$rs = $conn->Execute($sql);
	$search_id=$rs->fields['tags'];
	
	$qry="select * from files_video where vkey!='$viewkey' and (vtitle like '$search_id' or vtags like '$search_id' or vdescr like '$search_id')";		
	$res=$conn->Execute($qry);
	$total=$res->recordcount();
		  
	$result=$res->getrows();
    }
    else if($search_by==1)
    {
	$sql = "select vcategs from files_video where vkey='$viewkey'";
	$rs = $conn->Execute($sql);
	$search_id=$rs->fields['categs'];
	
	$qry="select * from files_video where vkey!='%$viewkey%' and ( vcategs like '%$search_id%')";
	$res=$conn->Execute($qry);
	$total=$res->recordcount();
	
	$result=$res->getrows();
    }
    else if($search_by==2)
    {
	$sql = "select vtags from files_video order by rand() limit 1";
	$rs = $conn->Execute($sql);
	$search_id=$rs->fields['vtags'];
	
	$qry="select * from files_video where vkey!='$viewkey' and (vtitle like '$search_id' or vtags like '$search_id' or vdescr like '$search_id')";
	$res=$conn->Execute($qry);
	$total=$res->recordcount();						  
	
	$result=$res->getrows();			
    }
    
    if($total <1) 
    {
	$myplaylist = 1;				
    }

		 
    $sql1 = "select * from watermark where active=1";
    $rs1 = $conn->Execute($sql1);
    $logo=$rs1->fields['wid'];
    $logourl=$rs1->fields['url'];
    $logoimage=$rs1->fields['image'];
    $position=$rs1->fields['position'];
    $transparency=$rs1->fields['transparency'];
    $rtransparency=$rs1->fields['rtransparency'];
		
    $sql6 = "select * from player_settings where id=1";
    $rs6 = $conn->Execute($sql6);
    $advs=$rs6->fields['advertisement'];		
	
    $flg1 = false;
    $flg2 = false;	

    $autoplay=$rs6->fields['autoplay'];		
    $adv=$rs6->fields['advertisement'];	
    $title=$rs6->fields['title'];
    $skin=$rs6->fields['theme'];
    $share=$rs6->fields['share'];
    $repeat=$rs6->fields['repeats'];	
    if($myplaylist==1)
    {
    	$playlist=1;		
    }
    else
    {
	$playlist=$rs6->fields['playlist'];
    }
    $external= yes;
}		

$admin="yes";
$smarty->assign('admin',$admin);

$msql="select folder from members where uid='$muid'";
$mrs=$conn->execute($msql);
$folder=$mrs->fields[folder];
$smarty->assign('folder',$folder);

header('Content-type: text/xml');	
$smarty->assign('feat',$feat);
$smarty->assign('movi_name',$movi_name);		
$smarty->assign('viewkey',$viewkey);	
$smarty->assign('logo',$logo);	
$smarty->assign('logourl',$logourl);	
$smarty->assign('begining',$begining);
$smarty->assign('beg_url',$beg_url);	
$smarty->assign('beg_duration',$beg_duration);	
$smarty->assign('ending',$ending);	
$smarty->assign('end_url',$end_url);	
$smarty->assign('image2',$beg_image);	
$smarty->assign('end_duration',$end_duration);
$smarty->assign('adkey',$adkey);
$smarty->assign('adkey1',$adkey1);
$smarty->assign('act1',$act1);

$smarty->assign('autoplay',$autoplay);
$smarty->assign('playlist',$playlist);
$smarty->assign('adv',$adv);	
$smarty->assign('title',$title);	
$smarty->assign('position',$position);	
$smarty->assign('transparency',$transparency);	
$smarty->assign('rtransparency',$rtransparency);	
$smarty->assign('base_url',$config[base_url]);
$smarty->assign('flvdo_url', $config[flvdo_url]);
$smarty->assign('url_fp', $config[url_fp]);
$smarty->assign('folder',$folder);
$smarty->assign('share',$share);	
$smarty->assign('repeat',$repeat);	
$smarty->assign('video_name',$video_name);	
$smarty->assign('image1',$logoimage);	
$smarty->assign('image3',$end_image);	
$smarty->assign('type1',$beg_type);	
$smarty->assign('type2',$end_type);	
$smarty->assign('flg1',$flg1);
$smarty->assign('flg2',$flg2);
$smarty->assign('external',$external);
$smarty->display('fplayer.tpl');
?>