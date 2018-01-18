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
include('../../configs/config.php');

if (isset($_REQUEST['goact'])) $_REQUEST['goact']=filter_title($_REQUEST['goact']);
if (isset($_REQUEST['action'])) $_REQUEST['action']=filter_title($_REQUEST['action']);
if (isset($_REQUEST['actions'])) $_REQUEST['actions']=filter_title($_REQUEST['actions']);
if (isset($_REQUEST['type'])) $type=filter_title($_REQUEST['type']);
if (isset($_REQUEST['id'])) $vkey=filter_title($_REQUEST['id']);

check_login('responses/'.$_REQUEST['type']);

$smarty->assign('dmenu', 'mymsg');
$tbl = "file_responses";
if ($type == 'audio' && ( $config['enable_audio'] == 0 or $config['file_responses'] == 0 )) { header("Location: $config[base_url]/main"); exit; }
if ($type == 'image' && ( $config['enable_images'] == 0 or $config['file_responses'] == 0 )) { header("Location: $config[base_url]/main"); exit; }
if ($type == 'video' && ( $config['enable_videos'] == 0 or $config['file_responses'] == 0 )) { header("Location: $config[base_url]/main"); exit; }
$smarty->assign('section',$type);
if ( $type == 'audio' ) $ftbl = 'files_audio'; elseif ( $type == 'image' ) $ftbl = 'files_image'; elseif ( $type == 'video' ) $ftbl = 'files_video'; 

if ( isset ( $_GET['app'] ) ) $app = filter_title ( $_GET['app'] );
if ( isset ( $_GET['cm'] ) ) $respid = filter_title ( substr ( $_GET['cm'], 1 ) );
if ( isset ( $_GET['st'] ) ) $st = filter_title ( $_GET['st'] );

if ( $st == 'a0' ) { $sact = "and active='1'"; }
elseif ( $st == 'a1' ) { $sact = "and active='1' and approved='1'"; }
elseif ( $st == 'a2' ) { $sact = "and active='1' and approved='0'"; }
else { $sact = "and active='1'"; }

if ( $app == '1' ) { $conn->execute("update $tbl set approved='1' where rid='$respid' and approved='0' and rtype='$type' and ruid='$_SESSION[UID]';"); }
elseif ( $app == '0' ) { $conn->execute("update $tbl set approved='0' where rid='$respid' and approved='1' and rtype='$type' and ruid='$_SESSION[UID]';"); }
elseif ( $app == '2' ) { 
    $conn->execute("delete from $tbl where rid='$respid' and active='1' and rtype='$type' and ruid='$_SESSION[UID]';");
    if ($conn->Affected_Rows()>0) { $conn->execute("update ".$ftbl." set responses=responses-1 where vkey='".$vkey."';"); }
}

if ( $_REQUEST['goact'] != '' and $err == '' and $vkey == '' ) {
    if ($_REQUEST['mid']=="") $err=$lang['err_msgcompose14']; //no messages selected
    elseif ($_REQUEST[actions]==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected
    if ($err=="")
    {
	if ( $_REQUEST['actions'] == $lang['fresp_txt39'] && $type != '' && $vkey == '' ) { //delete responses from selected
	    foreach($_REQUEST['mid'] as $value) {
		$conn->execute("delete from file_responses where rtype='".$type."' and rtovid='".$value."';");
		$conn->execute("update ".$ftbl." set responses='0' where vid='".$value."';");
	    }
	    if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
	}
    }
} 

if ($vkey!='') { 
if ( $_REQUEST['goact'] != '' and $err == '' and $vkey != '' ) {
    if ($_REQUEST['mid']=="") $err=$lang['err_msgcompose14']; //no messages selected
    elseif ($_REQUEST[actions]==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected
    if ($err=="")
    {
	if ( $_REQUEST['actions'] == $lang['fresp_txt40'] && $type != '' && $vkey != '' ) { //approve selected
	    foreach($_REQUEST['mid'] as $value) {
		$conn->execute("update ".$tbl." set approved='1' where rvid='".$value."' and rtype='".$type."' and ruid='".$_SESSION['UID']."' and approved='0';");
	    }
	}
	if ( $_REQUEST['actions'] == $lang['fresp_txt400'] && $type != '' && $vkey != '' ) { //unapprove selected
	    foreach($_REQUEST['mid'] as $value) {
		$conn->execute("update ".$tbl." set approved='0' where rvid='".$value."' and rtype='".$type."' and ruid='".$_SESSION['UID']."' and approved='1';");
	    }
	}
	if ( $_REQUEST['actions'] == $lang['fresp_txt41'] && $type != '' && $vkey != '' ) { //ignore selected
	    foreach($_REQUEST['mid'] as $value) {
		$conn->execute("delete from ".$tbl." where rvid='".$value."' and rtype='".$type."' and ruid='".$_SESSION['UID']."' and active='1';");
		$conn->execute("update ".$ftbl." set responses=responses-1 where vkey='".$vkey."';");
	    }
	}
	if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
    }
    }

    if ( $type == 'audio' ) $list=key_to_info_audio($vkey); elseif ( $type == 'image' ) $list=key_to_info_image($vkey); elseif ( $type == 'video' ) $list=key_to_info($vkey);
    $vidid = $list[0];
    $rti = $conn->execute("select rid, rtime from ".$tbl." where rtype='".$type."' and rtovid='".$vidid."' and ruid='".$_SESSION['UID']."';");
    $rtime = $rti->fields['rtime'];
    $rid = $rti->fields['rid'];
}


//paging
$listing_per_page = $config['paging_fileresp'];
//$listing_per_page = 2;
if ($vkey!='') { $pg='/'.$vkey; $rtovid = "and rtovid='".$vidid."'"; } else { $pg=''; $rtovid = ''; }
if ($st!='') { $st='/'.$st; } else { $st=''; }

if(filter_title($_GET[page])=="") $page = 1; else $page = filter_title($_GET[page]);
if ( $vkey == '' ) { $sql = "select distinct rtovid, ruid from $tbl where ruid='$_SESSION[UID]' and rtype='$type' $sact"; }
elseif ( $vkey != '' ) { $sql = "select * from $tbl where rtype='$type' and rtovid='$vidid' and ruid='$_SESSION[UID]' $sact"; }

$ars = $conn->Execute($sql);
$total = $ars->recordcount();
$smarty->assign('totalz', $total);
$tpage = ceil($total/$listing_per_page);
if($tpage==0) $spage=$tpage+1;
else $spage = $tpage;
$startfrom = ($page-1)*$listing_per_page;
$smarty->assign('tpage',$tpage);
$page_no = "";
for($i=1; $i<=$tpage; $i++)
{
    if($i==$page) $page_no .= "<span class=\"pag_act\">$i</span>";
    else $page_no .= " <a href='$config[base_url]/responses/$type$pg$st/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
}
if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";

if($tpage>1)
{
    $nextpage=$page+1;
    $prevpage=$page-1;
    $prevlink="<a href='$config[base_url]/responses/$type$pg$st/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    $nextlink="<a href='$config[base_url]/responses/$type$pg$st/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    if($page==$tpage) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link;
    elseif($tpage>$page && $page>1) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
    elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
}
if ( $vkey == '' ) { $fsql = "select distinct rtovid, ruid from $tbl where ruid='$_SESSION[UID]' and rtype='$type' $sact order by rtime desc limit $startfrom, $listing_per_page;"; }
elseif ( $vkey != '' ) { $fsql = "select * from $tbl where rtype='$type' and rtovid='$vidid' and ruid='$_SESSION[UID]' $sact order by rtime desc limit $startfrom, $listing_per_page;"; }

$rs = $conn->Execute($fsql);
$totalz = $rs->recordcount();
$pms = $rs->getrows(); 
$smarty->assign('myt', count($pms));
$smarty->assign('start_num',$startfrom+1);
$smarty->assign('end_num',$startfrom+$rs->recordcount());
$smarty->assign('total',$totalz);
$smarty->assign('link',$link);
$smarty->assign('page',$page+0);
$smarty->assign('resp',$pms);

set_btn("bhome"); set_sbtn("resp"); set_title($lang['fresp_txt33']);
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display('main_header.tpl');
$smarty->display('main_myresponses.tpl');
$smarty->display('footer.tpl');
?>