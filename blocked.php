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
check_login('blocked_users');
if ($config['enable_inbox'] == 0) { header("Location: $config[base_url]/main"); exit; }
if ($config['msg_block'] == 0) { header("Location: $config[base_url]/main"); exit; }

if (isset($_REQUEST[user])) $bl=filter_title($_REQUEST[user]);
if (isset($_REQUEST[action])) $_REQUEST[action]=filter_title($_REQUEST[action]);
if (isset($_REQUEST[goact])) $_REQUEST[goact]=filter_title($_REQUEST[goact]);
if (isset($_REQUEST[page])) $_REQUEST[page]=filter_title($_REQUEST[page]);
$smarty->assign('dmenu', 'mymsg');
if ($_REQUEST[action]=="block")
{
    if ($config[special_characters]=="0") $conn->execute("update blocked_users set active='1' where (blocker_uid='$_SESSION[UID]') and (blocked_name='$bl')");
    elseif ($config[special_characters]=="1") $conn->execute("update blocked_users set active='1' where (blocker_uid='$_SESSION[UID]') and (blocked_uid='$bl')");
}
if ($_REQUEST[action]=="unblock")
{
    if ($config[special_characters]=="0") $conn->execute("update blocked_users set active='0' where (blocker_uid='$_SESSION[UID]') and (blocked_name='$bl')");
    elseif ($config[special_characters]=="1") $conn->execute("update blocked_users set active='0' where (blocker_uid='$_SESSION[UID]') and (blocked_uid='$bl')"); 
}
if ($_REQUEST[action]=="delete")
{
    if ($config[special_characters]=="0") $conn->execute("delete from blocked_users where (blocker_uid='$_SESSION[UID]') and (blocked_name='$bl')");
    elseif ($config[special_characters]=="1") $conn->execute("delete from blocked_users where (blocker_uid='$_SESSION[UID]') and (blocked_uid='$bl')"); 
    if ($conn->Affected_Rows()>0) $msg=$lang['blocked_delnotice'];
}
if ($_REQUEST[goact]!="" && $err=="")
{
    if ($_REQUEST['mid']=="") $err=$lang['err_msgcompose14']; //nothing selected
    elseif ($_REQUEST[actions]==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected
    if ($err=="")
    {
	if ($_REQUEST[actions]==$lang['blocked_act4']) //block selected
	{
	    foreach($_REQUEST['mid'] as $value) { $conn->execute("update blocked_users set active='1' where (blocker_uid='$_SESSION[UID]') and (blocked_uid='".filter_title($value)."') and (active='0')"); }
	}
	if ($_REQUEST[actions]==$lang['blocked_act5']) //unblock selected
	{
	    foreach($_REQUEST['mid'] as $value) { $conn->execute("update blocked_users set active='0' where (blocker_uid='$_SESSION[UID]') and (blocked_uid='".filter_title($value)."') and (active='1')"); }
	}
	if ($_REQUEST[actions]==$lang['inbox_itblact6']) //delete selected	
	{
	    foreach($_REQUEST['mid'] as $value) { $conn->execute("delete from blocked_users where (blocker_uid='$_SESSION[UID]') and (blocked_uid='".filter_title($value)."')"); }
	}
	if ($conn->Affected_Rows()>0) $msg=$lang['not_inboxmsgmark'];
    }
}
$qu="where (blocker_uid='$_SESSION[UID]') and (blocker_name='$_SESSION[USERNAME]')";
// paging
$listing_per_page = $config[paging_blocked];
if($_REQUEST[page]=="")
$page = 1;
else
$page = $_REQUEST[page];
$sql = "SELECT count(*) as total from blocked_users $qu limit $listing_per_page";
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
    else $page_no .= " <a href='$config[base_url]/blocked_users/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
}
if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
else $link = $lang['blocked_none'];

if($tpage>1)
{
    $nextpage=$page+1;
    $prevpage=$page-1;
    $prevlink="<a href='$config[base_url]/blocked_users/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    $nextlink="<a href='$config[base_url]/blocked_users/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    if($page==$tpage) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link;
    elseif($tpage>$page && $page>1) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
    elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
}

$sql="SELECT * from blocked_users $qu limit $startfrom, $listing_per_page";
$rs = $conn->Execute($sql);
$bu = $rs->getrows(); 

$smarty->assign('start_num',$start_num);
$smarty->assign('end_num',$startfrom+$rs->recordcount());
$smarty->assign('total',$total);
$smarty->assign('link',$link);
$smarty->assign('page',$page+0);
$smarty->assign('bu',$bu);
$rs->Close();

set_btn("messages"); set_sbtn("blocked"); set_title($lang['title_blocked']);
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display('main_header.tpl');
$smarty->display('message_blocked.tpl');
$smarty->display('footer.tpl');
?>