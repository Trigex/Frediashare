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
check_login('inbox');
if ($config[enable_inbox]=="0") { header("Location: $config[base_url]/main"); exit; }

if (isset($_REQUEST['page'])) $_REQUEST['page']=filter_title($_REQUEST['page']);
if (isset($_REQUEST['goact'])) $_REQUEST['goact']=filter_title($_REQUEST['goact']);
if (isset($_REQUEST['action'])) $_REQUEST['action']=filter_title($_REQUEST['action']);
if (isset($_REQUEST['actions'])) $_REQUEST['actions']=filter_title($_REQUEST['actions']);
$smarty->assign('dmenu', 'mymsg');
if ($_REQUEST[goact]!="" && $err=="")
{
    if ($_REQUEST['mid']=="") $err=$lang['err_msgcompose14']; //no messages selected
    elseif ($_REQUEST[actions]==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected
    if ($err=="")
    {
	if ($_REQUEST[actions]==$lang['inbox_itblact4']) //read selected
	{
	    foreach($_REQUEST['mid'] as $value) { $conn->execute("update pmessages set seen='1' where mid='".filter_title($value)."' and seen='0' and receiver='$_SESSION[USERNAME]'"); } 
	}
	if ($_REQUEST[actions]==$lang['inbox_itblact5']) //unread selected
	{
	    foreach($_REQUEST['mid'] as $value) { $conn->execute("update pmessages set seen='0' where mid='".filter_title($value)."' and seen='1' and receiver='$_SESSION[USERNAME]'"); }
	}
	if ($_REQUEST[actions]==$lang['inbox_itblact6']) //delete selected
	{
	    foreach($_REQUEST['mid'] as $value) { $conn->execute("update pmessages set inbox_track='1' where mid='".filter_title($value)."' and receiver='$_SESSION[USERNAME]'"); }
	}
	if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
    }
}

if ($_REQUEST[action]=="block")
{
    if ($config[special_characters]=="1")
    {
	$mid=filter_title($_REQUEST[mid]);
	if ($mid==$_SESSION[UID]) { illegal_op(); }

	$bn=$conn->execute("select username from members where uid='$mid'");
	if ($bn->recordcount()==0) { illegal_op(); } 
	$bname=$bn->fields[username];
    }
    else
    {
	$mn=filter_descr($_REQUEST[mid]);
	if ($mn==$_SESSION[USERNAME]) { illegal_op(); }
	
	$bn=$conn->execute("select uid from members where username='$mn'");
	if ($bn->recordcount()==0) { illegal_op(); }
	$mid=$bn->fields[uid];
	$bname=$mn;
    }

    $sql_up="update blocked_users set active='1' where blocker_uid='$_SESSION[UID]' and blocked_uid='$mid'";
    $sql_add="insert into blocked_users set blocker_uid='$_SESSION[UID]', blocker_name='$_SESSION[USERNAME]', blocked_uid='$mid', blocked_name='$bname', active='1'";
    
    $res_up=$conn->execute($sql_up);
    if($conn->Affected_Rows()==0) { $res_add=$conn->execute($sql_add); }
    if($conn->Affected_Rows()==0) $err=$lang['err_msgcompose16'];
    else $msg=$lang['not_inboxblock1'];
}
if ($_REQUEST[action]=="unblock")
{
    if ($config[special_characters]=="1")
    {
	$mid=filter_title($_REQUEST[mid]);
	if ($mid==$_SESSION[UID]) { illegal_op(); }
    }
    else
    {
	$mn=filter_descr($_REQUEST[mid]);
	if ($mn==$_SESSION[USERNAME]) { illegal_op(); }
	$bn=$conn->execute("select uid from members where username='$mn'");
	if ($bn->recordcount()==0) { illegal_op(); }
	$mid=$bn->fields[uid];
    }
    
    $sql_un="update blocked_users set active='0' where blocker_uid='$_SESSION[UID]' and blocked_uid='$mid'";
    $res_un=$conn->execute($sql_un);
    if($conn->Affected_Rows()==0) $err=$lang['err_msgcompose17'];
    else $msg=$lang['not_inboxblock2'];
}
if ($_REQUEST[action]=="mark")
{
    $mid=filter_title($_REQUEST[mid]);
    $sql="update pmessages set seen='1' where mid='$mid' and receiver='$_SESSION[USERNAME]'";
    $res=mysql_query($sql);
    if(mysql_affected_rows()==0) { illegal_op(); }
    header("Location: $config[base_url]/inbox");
    exit;
}
if ($_REQUEST[action]=="unmark")
{
    $mid=filter_title($_REQUEST[mid]);
    $sql="update pmessages set seen='0' where mid='$mid' and receiver='$_SESSION[USERNAME]'";
    $res=mysql_query($sql);
    if(mysql_affected_rows()==0) { illegal_op(); }
    header("Location: $config[base_url]/inbox");
    exit;
}
if ($_REQUEST[action]=="delete")
{
    $mid=filter_title($_REQUEST[mid]);
    $sql="update pmessages set inbox_track='1' where mid='$mid' and receiver='$_SESSION[USERNAME]'";
    $res=mysql_query($sql);
    if(mysql_affected_rows()==0) { illegal_op(); }
    $msg=$lang['not_inboxmsgdel'];
}
if ($_REQUEST[action]=="confirmation") { $msg=$lang['not_inboxsend']; }

//if (isset($_REQUEST[action])) { if ($_REQUEST[action]!="mark" && $_REQUEST[action]!="unmark" && $_REQUEST[action]!="delete" && $_REQUEST[action]!="confirmation" && $_REQUEST[action]!="selected") { illegal_op(); } }
if ($_REQUEST[timesort]!="")
{
    $ts=filter_title($_REQUEST[timesort]);
    $tstr="/sort/$ts";
    if ($ts=="all_time") { $tq=""; }
    elseif ($ts=="today") { $tq="and DAY(date) = DAY(CURRENT_DATE)"; }
    elseif ($ts=="this_week") { $tq="and YEARweek(date) = YEARweek(CURRENT_DATE)"; }
    elseif ($ts=="this_month") { $tq="and SUBSTRING(date FROM 1 FOR 7) = SUBSTRING(CURRENT_DATE - INTERVAL 0 MONTH FROM 1 FOR 7)"; }
    elseif ($ts=="this_year") { $tq="and YEAR(date) = YEAR(CURRENT_DATE)"; }
    elseif ($ts=="last_week") { $tq="and YEARweek(date) = YEARweek(CURRENT_DATE - INTERVAL 7 DAY)"; }
    elseif ($ts=="last_month") { $tq="and SUBSTRING(date FROM 1 FOR 7) = SUBSTRING(CURRENT_DATE - INTERVAL 1 MONTH FROM 1 FOR 7)"; }
    elseif ($ts=="last_year") { $tq="and YEAR(date) = YEAR(CURRENT_DATE - INTERVAL 1 YEAR)"; } 
    else { illegal_op(); }
} else $tstr="";
//paging
$listing_per_page = $config[paging_inbox];
if($_REQUEST[page]=="")
$page = 1;
else
$page = $_REQUEST[page];
$sql = "SELECT count(*) as total from pmessages where receiver='$_SESSION[USERNAME]' and inbox_track=2 $tq";
$ars = $conn->Execute($sql);
$total = $ars->fields['total'];
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
    else $page_no .= " <a href='$config[base_url]/inbox$tstr/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
}
if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";

if($tpage>1)
{
    $nextpage=$page+1;
    $prevpage=$page-1;
    $prevlink="<a href='$config[base_url]/inbox$tstr/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    $nextlink="<a href='$config[base_url]/inbox$tstr/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    if($page==$tpage) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link;
    elseif($tpage>$page && $page>1) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
    elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
}

$sql="SELECT * from pmessages where receiver='$_SESSION[USERNAME]' and inbox_track='2' $tq ORDER BY date DESC limit $startfrom, $listing_per_page";
$rs = $conn->Execute($sql);
$total = $rs->recordcount()+0;
$pms = $rs->getrows(); 
$smarty->assign('start_num',$startfrom+1);
$smarty->assign('end_num',$startfrom+$rs->recordcount());
$smarty->assign('total',$grandtotal);
$smarty->assign('link',$link);
$smarty->assign('page',$page+0);
$smarty->assign('pms',$pms);

set_btn("messages"); set_sbtn("inbox"); set_title($lang['title_inboxmain']);
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display('main_header.tpl');
$smarty->display('message_inbox.tpl');
$smarty->display('footer.tpl');
?>