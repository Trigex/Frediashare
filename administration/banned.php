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

if (isset($_REQUEST[member])) $mem=filter_title($_REQUEST[member]);
if (isset($_REQUEST[action])) $_REQUEST[action]=filter_title($_REQUEST[action]);
if (isset($_REQUEST[goact])) $_REQUEST[goact]=filter_title($_REQUEST[goact]);
if (isset($_REQUEST[page])) $_REQUEST[page]=filter_title($_REQUEST[page]);

if ($_REQUEST[goact]!="" && $err=="")
{
    function get_name($uid)
    {
	global $conn, $config;
	$r1=$conn->execute("select username from members where uid='$uid';");
	return $r1->fields['username'];
    }
    
    if ($_REQUEST['mid']=="") $err=$lang['err_msgcompose14']; //nothing selected
    elseif ($_REQUEST[actions]==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected 
    if ($err=="")
    {
	$def_msg=$config['def_ban_msg'];
	$def_url=$config['def_ban_link'];
	
	if ($_REQUEST[actions]==$lang['admact_memban']) //ban selected
	{ 
	    foreach($_REQUEST['mid'] as $value) 
	    { 
		$conn->execute("update banned_users set active='1' where ban_uid='".filter_title($value)."' and active='0';");
	    }
	}
	if ($_REQUEST[actions]==$lang['admact_memunban']) //unban selected
	{
	    foreach($_REQUEST['mid'] as $value)
	    {
		$conn->execute("update banned_users set active='0' where ban_uid='".filter_title($value)."' and active='1';");
	    }
	}
	if ($_REQUEST[actions]==$lang['admact_memdelban']) //delete from ban list
	{
	    foreach($_REQUEST['mid'] as $value)
	    {
		$conn->execute("delete from banned_users where ban_uid='".filter_title($value)."';");
	    }
	}
	if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
    }
}

if ($_REQUEST[action]=="ban")
{
    $conn->execute("update banned_users set active='1' where ban_uid='$mem' and active='0'");
    header("Location: $config[admin_url]/members/banned");
    exit;
}
if ($_REQUEST[action]=="unban")
{ 
    $conn->execute("update banned_users set active='0' where ban_uid='$mem' and active='1'");
    header("Location: $config[admin_url]/members/banned");
    exit;
}
if ($_REQUEST[action]=="delete")
{ 
    $conn->execute("delete from banned_users where ban_uid='$mem'");
    if ($conn->Affected_Rows() > 0) $msg=$lang['blocked_delnotice'];
//    header("Location: $config[admin_url]/members/banned");
//    exit;
}

$qu="order by ban_uid asc";
// paging
$listing_per_page = 20;
if($_REQUEST[page]=="")
$page = 1;
else
$page = $_REQUEST[page];
$sql = "SELECT count(*) as total from banned_users $qu limit $listing_per_page";
$ars = $conn->Execute($sql);
$total = $ars->fields['total'];
$ars->Close();
$grandtotal = $total;
$tpage = ceil($total/$listing_per_page);
if($tpage==0) $spage=$tpage+1;
else $spage = $tpage;
$startfrom = ($page-1)*$listing_per_page;
$start_num=$startfrom+1;
$smarty->assign('tpage',$tpage);
$page_no = "";
for($i=1; $i<=$tpage; $i++)
{
    if($i==$page) $page_no .= "<span class=\"pag_act\">$i</span>";
    else $page_no .= " <a href='$config[admin_url]/members/banned/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
}
if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
else $link = $lang['banned_none'];

if($tpage>1)
{
    $nextpage=$page+1;
    $prevpage=$page-1;
    $prevlink="<a href='$config[admin_url]/members/banned/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    $nextlink="<a href='$config[admin_url]/members/banned/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    if($page==$tpage) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link;
    elseif($tpage>$page && $page>1) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
    elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
}

$sql="SELECT * from banned_users $qu limit $startfrom, $listing_per_page";
$rs = $conn->Execute($sql);
$bu = $rs->getrows(); 

$smarty->assign('start_num',$start_num);
$smarty->assign('end_num',$startfrom+$rs->recordcount());
$smarty->assign('total',$total);
$smarty->assign('link',$link);
$smarty->assign('page',$page+0);
$smarty->assign('bu',$bu);
$rs->Close();

set_btn("adm_members"); set_sbtn("adm_banned");
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display('administration/main_header.tpl');
$smarty->display('administration/members_banned.tpl');
$smarty->display('administration/main_footer.tpl');
?>