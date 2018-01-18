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
include('configs/config.php');
check_login();

//if (isset($_REQUEST['page'])) $_REQUEST['page']=filter_title($_REQUEST['page']);
if (isset($_REQUEST['goact'])) $_REQUEST['goact']=filter_title($_REQUEST['goact']);
if (isset($_REQUEST['action'])) $_REQUEST['action']=filter_title($_REQUEST['action']);
if (isset($_REQUEST['actions'])) $_REQUEST['actions']=filter_title($_REQUEST['actions']);
if (isset($_REQUEST['type'])) $type=filter_title($_REQUEST['type']);
if (isset($_REQUEST['id'])) $vkey=filter_title($_REQUEST['id']);
$smarty->assign('dmenu', 'mymsg');
if ($type == 'audio' && $config['enable_audio'] == 0) { header("Location: $config[base_url]/main"); exit; }
if ($type == 'image' && $config['enable_images'] == 0) { header("Location: $config[base_url]/main"); exit; }
if ($type == 'video' && $config['enable_videos'] == 0) { header("Location: $config[base_url]/main"); exit; }

if ($config['file_comments'] == 0 && ($type!='profile')) { header("Location: $config[base_url]/main"); exit; }
if ($config['file_comments'] == 1 && ($type=='profile' && $config['profile_comments'] == 0)) { header("Location: $config[base_url]/main"); exit; }
if ($config['file_comments'] == 0 && $config['profile_comments'] == 0) { header("Location: $config[base_url]/main"); exit; }

$active = "and active='1' and is_inapp='no'";

if ($type=='audio') { $tbl2='comm_audio'; $tbl='files_audio'; if ($vkey!='') { $r=$conn->execute("select vid,uid from $tbl where vkey='$vkey'"); $id=$r->fields['vid']; $muid=$r->fields['uid']; } }
elseif ($type=='image') { $tbl2='comm_img'; $tbl='files_image'; if ($vkey!='') { $r=$conn->execute("select vid,uid from $tbl where vkey='$vkey'"); $id=$r->fields['vid']; $muid=$r->fields['uid']; } }
elseif ($type=='video') { $tbl2='comm_vid'; $tbl='files_video'; if ($vkey!='') { $r=$conn->execute("select vid,uid from $tbl where vkey='$vkey'"); $id=$r->fields['vid']; $muid=$r->fields['uid']; } }
elseif ($type=='profile') { $tbl='comm_profile'; $tbl2=$tbl; }
$smarty->assign('section',$type);

if ($vkey!='')
{ 
    if ( $muid != $_SESSION['UID'] ) { illegal_op(); exit; }
    $backq = "SELECT * FROM $tbl WHERE vid < '$id' and uid='$_SESSION[UID]' and comments!='0' $active order by vid desc LIMIT 1";
    $nextq = "SELECT * FROM $tbl WHERE vid > '$id' and uid='$_SESSION[UID]' and comments!='0' $active order by vid asc LIMIT 1";
    $brs=$conn->execute($backq); if ($brs->recordcount()>0) { $back=$brs->fields[vkey]; $brs->Close(); } else { $back="0"; } $smarty->assign('back',$back);
    $nrs=$conn->execute($nextq); if ($nrs->recordcount()>0) { $next=$nrs->fields[vkey]; $nrs->Close(); } else { $next="0"; } $smarty->assign('next',$next); 
}

if ($_REQUEST[goact]!="" && $err=="")
{
    if ($_REQUEST['mid']=="") $err=$lang['err_msgcompose14']; //no messages selected
    elseif ($_REQUEST[actions]==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected
    if ($err=="")
    {
	if ($_REQUEST[actions]==$lang['comm_app3'] && $type!='') { //approve selected
	    foreach($_REQUEST['mid'] as $value) {
		$conn->execute("update $tbl2 set approved='1' where comid='".filter_title($value)."';");
	    }
	    if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
	}
	if ($_REQUEST[actions]==$lang['comm_app4'] && $type!='') { //disapprove selected
	    foreach($_REQUEST['mid'] as $value) {
		$conn->execute("update $tbl2 set approved='0' where comid='".filter_title($value)."';");
	    }
	    if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
	}
	
	if ($_REQUEST[actions]==$lang['act_delcomm'] && $type!='profile') //delete selected (not profile, from all files)
	{
	    foreach($_REQUEST['mid'] as $value) 
	    {  
		$conn->execute("delete from $tbl2 where vid='".filter_title($value)."'");
		$tr = $conn->Affected_Rows();
		if ($tr > 0)
		{
		    $conn->execute("delete from comm_rates where vid='".filter_title($value)."' and type='$type'"); 
		    $conn->execute("update $tbl set comments=comments-$tr where vid='".filter_title($value)."'");
		}
	    }
	    if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
	}
	
	if ($_REQUEST[actions]==$lang['act_delselcomm'] && $type=='profile') //Delete Selected Comments - profile
	{
	    foreach($_REQUEST['mid'] as $value)
	    {
		$conn->execute("delete from comm_rates where type='profile' and comid='".filter_title($value)."';");
		//$conn->execute("update comm_profile set active='0' where comid='".filter_title($value)."'");
		$conn->execute("delete from comm_profile where comid='".filter_title($value)."'");
	    }
	    if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
	}
	
	if ($_REQUEST[actions]==$lang['act_delselcomm'] && $type!='profile') //Delete Selected Comments - not profile
	{
	    foreach($_REQUEST['mid'] as $value)
	    {
		//$conn->execute("update $tbl2 set active='0' where comid='".filter_title($value)."'");
		$conn->execute("delete from $tbl2 where comid='".filter_title($value)."'");
		$conn->execute("update $tbl set comments=comments-1 where vkey='$vkey'");
	    }
	    if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
	}
	
	if ($_REQUEST[actions]==$lang['act_delrescomm'] && $type=='profile') //reset votes - profile
	{
	    foreach($_REQUEST['mid'] as $value)
	    {
		$conn->execute("delete from comm_rates where type='profile' and comid='".filter_title($value)."';");
	    }
	    if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
	}
	
	if ($_REQUEST[actions]==$lang['act_delrescomm'] && $type!='profile') //reset votes - not profile
	{
	    foreach($_REQUEST['mid'] as $value)
	    {
		$conn->execute("delete from comm_rates where type='$type' and comid='".filter_title($value)."';");
	    }
	    if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
	}
    }
}

if ( isset ( $_GET['app'] ) ) $app = filter_title ( $_GET['app'] );
if ( isset ( $_GET['cm'] ) ) $comid = filter_title ( substr ( $_GET['cm'], 1 ) );
if ( isset ( $_GET['st'] ) ) $st = filter_title ( $_GET['st'] );

if ( $type != 'profile' ) {
    if ( $app == '1' ) { $conn->execute("update $tbl2 set approved='1' where vid='$id' and comid='$comid';"); }
    elseif ( $app == '0' ) { $conn->execute("update $tbl2 set approved='0' where vid='$id' and comid='$comid';"); }
} elseif ( $type == 'profile' ) {
    if ( $app == '1' ) { $conn->execute("update $tbl2 set approved='1' where comid='$comid';"); }
    elseif ( $app == '0' ) { $conn->execute("update $tbl2 set approved='0' where comid='$comid';"); }
}

if ( $st == 'a0' ) { $sact = "and active='1'"; }
elseif ( $st == 'a1' ) { $sact = "and active='1' and approved='1'"; }
elseif ( $st == 'a2' ) { $sact = "and active='1' and approved='0'"; }
else { $sact = "and active='1'"; }

//paging
if ($vkey!='') { $pg='/'.$vkey; } else { $pg=''; }
if ($st!='') { $st='/'.$st; } else { $st=''; }
$listing_per_page = $config[paging_comments];
if(filter_title($_GET[page])=="")
$page = 1;
else
$page = filter_title($_GET[page]);
if ($type=='profile') { $sql = "SELECT count(*) as total from $tbl where uid='$_SESSION[UID]' $sact"; }
else 
{ 
    if ($id!='') $sql = "select count(*) as total from $tbl2 where vid='$id' $sact";
    else $sql = "SELECT count(*) as total from $tbl where uid='$_SESSION[UID]' and comments!='0' $active"; 
}

$ars = $conn->Execute($sql);
$total = $ars->fields['total'];
$smarty->assign('tc',$total);
$grandtotal = $total;
$tpage = ceil($total/$listing_per_page);
if($tpage==0) $spage=$tpage+1;
else $spage = $tpage;
$startfrom = ($page-1)*$listing_per_page;
$smarty->assign('tpage',$tpage);
$page_no = "";
for($i=1; $i<=$tpage; $i++)
{
    if($i==$page) $page_no .= "<span class=\"pag_act\">$i</span>";
    else $page_no .= " <a href='$config[base_url]/my_comments/$type$pg$st/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
}
if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";

if($tpage>1)
{
    $nextpage=$page+1;
    $prevpage=$page-1;
    $prevlink="<a href='$config[base_url]/my_comments/$type$pg$st/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    $nextlink="<a href='$config[base_url]/my_comments/$type$pg$st/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    if($page==$tpage) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link;
    elseif($tpage>$page && $page>1) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
    elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
}
if ($type=='profile') 
{ 
    $sql="SELECT * from $tbl where uid='$_SESSION[UID]' $sact order by addtime desc limit $startfrom, $listing_per_page"; 
    $rs=$conn->execute("select * from members where uid='$_SESSION[UID]'");
    $mrs=$rs->getrows();
    $smarty->assign('udetails',$mrs);
}
else 
{ 
    if ($id!='') $sql="select * from $tbl2 where vid='$id' $sact order by addtime desc limit $startfrom, $listing_per_page";
    else $sql="SELECT * from $tbl where uid='$_SESSION[UID]' and comments!='0' $active order by vid limit $startfrom, $listing_per_page"; 
}

$rs = $conn->Execute($sql);
$total = $rs->recordcount()+0;
$pms = $rs->getrows(); 
$smarty->assign('myt', count($pms));
$smarty->assign('start_num',$startfrom+1);
$smarty->assign('end_num',$startfrom+$rs->recordcount());
$smarty->assign('total',$grandtotal);
$smarty->assign('link',$link);
$smarty->assign('page',$page+0);
$smarty->assign('comm',$pms);

set_btn("bhome"); set_sbtn("comments"); set_title($lang['comm_heading']);
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display('main_header.tpl');
$smarty->display('message_comments.tpl');
$smarty->display('footer.tpl');
?>