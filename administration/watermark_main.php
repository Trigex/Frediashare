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
include("../configs/config.php");
check_admin_login();

if (isset($_REQUEST['page'])) $_REQUEST['page']=filter_title($_REQUEST['page']);
if (isset($_REQUEST['action'])) $_REQUEST['action']=filter_title($_REQUEST['action']);
if (isset($_REQUEST['goact'])) $_REQUEST['goact']=filter_title($_REQUEST['goact']);
if (isset($_REQUEST['id'])) $_REQUEST['id']=filter_title($_REQUEST['id']);

function del_wm($id)
{
    global $conn, $config;
    
    $del = $conn->execute("select image from watermark WHERE wid='$id'");
    $del_pic = $del->fields['image'];
    $del_file = $config[dir_fp]."/wms/".$del_pic;
    if (file_exists($del_file)) 
    {
	if (@unlink($del_file))
	{
	    $conn->execute("delete from watermark where wid='$id'");
	}
    }
    else $err='no';
    
    if ($conn->Affected_Rows()>0 && $err=="") $msg='yes';
    else $msg='no';
    
    return $msg;
}

if ($_REQUEST[goact]!="" && $err=="")
{
    if ($_REQUEST['mid']=="") $err=$lang['err_msgcompose14']; //nothing selected
    elseif ($_REQUEST[actions]==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected
    if ($err=="")
    {
	if ($_REQUEST[actions]==$lang['act_frenable']) //enable selected
	{
	    foreach($_REQUEST['mid'] as $value) { $conn->execute("update watermark set active='1' where wid='$value' and active='0'"); }
	}
	if ($_REQUEST[actions]==$lang['act_frdisable']) //disable selected
	{
	    foreach($_REQUEST['mid'] as $value) { $conn->execute("update watermark set active='0' where wid='$value' and active='1'"); }
	}
	if ($_REQUEST[actions]==$lang['inbox_itblact6']) //delete selected
	{
	    foreach($_REQUEST['mid'] as $value) { del_wm($value); }
	}
	if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
    }
}

if($_REQUEST[action]=="added")
{
    $msg=$lang['admnot_playaddlogo'];
}
if($_REQUEST[action]=="delete")
{
    $ret=del_wm($_REQUEST['id']);
    if ($ret=='yes') { header("Location: $config[admin_url]/watermark/saved"); exit; }
    else illegal_opa();
}

$query.=" order by wid asc";

// paging
$listing_per_page = 10;
if($_REQUEST[page]=="")
$page = 1;
else
$page = $_REQUEST[page];
$sql = "SELECT count(*) as total from watermark $query";
$ars = $conn->Execute($sql);
$total = $ars->fields['total'];
$grandtotal = $total;
$tpage = ceil($total/$listing_per_page);
if($tpage==0) $spage=$tpage+1;
else $spage = $tpage;
$startfrom = ($page-1)*$listing_per_page;

$page_no = ""; $smarty->assign('tpage',$tpage);
for($i=1; $i<=$tpage; $i++)
{
    if($i==$page) $page_no .= "<span class=\"pag_act\">$i</span>";
    else $page_no .= " <a href='$config[admin_url]/watermark/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
}
if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
else $link = $lang['admerr_playnologo'];

if($tpage>1)
{
    $nextpage=$page+1;
    $prevpage=$page-1;
    $prevlink="<a href='$config[admin_url]/watermark/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    $nextlink="<a href='$config[admin_url]/watermark/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    if($page==$tpage) $link.="$prevlink&nbsp;&nbsp;&nbsp;";
    elseif($tpage>$page && $page>1) $link=$link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
    elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
}

$sql="SELECT * from watermark $query limit $startfrom, $listing_per_page";
$rs = $conn->Execute($sql);
$total = $rs->recordcount()+0;
$watermark = $rs->getrows(); 
$smarty->assign('total',$grandtotal);
$start_num=$startfrom+1;
$smarty->assign('start_num',$start_num);
$smarty->assign('end_num',$startfrom+$rs->recordcount());
$smarty->assign('link',$link);
$smarty->assign('page',$page+0);
$smarty->assign('watermark',$watermark);

set_btn("adm_fp"); set_sbtn("wm");
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display("administration/main_header.tpl");
$smarty->display("administration/watermark_main.tpl");
$smarty->display("administration/main_footer.tpl");
?>