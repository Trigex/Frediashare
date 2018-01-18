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
if ($config[members_section] !="1") { header("Location: $config[base_url]/main"); exit; }
if ($_REQUEST[actions]==$lang['inbox_acts'] && $config['msg_multi'] == 0) { header("Location: $config[base_url]/main"); exit; }
if ($config[guests_members_view] !="1") { check_login('members'); }

if (isset($_REQUEST['page'])) $_REQUEST['page']=filter_title($_REQUEST['page']);
if (isset($_REQUEST['type'])) $_REQUEST['type']=filter_title($_REQUEST['type']);
if (isset($_REQUEST['goact'])) $_REQUEST['goact']=filter_title($_REQUEST['goact']);
if (isset($_REQUEST['actions'])) $_REQUEST['actions']=filter_title($_REQUEST['actions']);
$smarty->assign('dmenu', 'mymsg'); 
$type=filter_title($_REQUEST['filter']);
$cmd="order by uid";
if ($type=="audio_files") $cmd="order by files_audio desc";
if ($type=="image_files") $cmd="order by files_image desc";
if ($type=="video_files") $cmd="order by files_video desc";
if ($type=="last_joined") $cmd="order by reg_on desc";
if ($type=="last_login") $cmd="order by last_login desc";
if ($type=="online") $cmd="where is_logged='1' order by uid";
if ($type=="offline") $cmd="where is_logged='0' order by uid";

if ($_REQUEST[goact]!="" && $err=="")
{
    check_login();
    if ($_REQUEST['mid']=="") $err=$lang['err_msgcompose14']; //nohing selected
    elseif ($_REQUEST[actions]==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected
    if ($err=="")
    {
	if ($_REQUEST[actions]==$lang['admact_memmsg']) //message selected
	{
	    header("Location: $config[base_url]/compose/selected");
	    session_register($_SESSION['mid']); $_SESSION['mid']=$_REQUEST['mid'];
	}
	if ($_REQUEST[actions]==$lang['admact_memaddfr']) //add selected to friends
	{
	    foreach($_REQUEST['mid'] as $value)
	    {
		if ($value != $_SESSION['USERNAME'])
		{
		    $fm=$conn->execute("select email from members where username='$value'");
		    $fmail=$fm->fields['email'];
		    $conn->execute("insert into friends set uid='$_SESSION[UID]', fname='$value', femail='$fmail', add_date='".date("Y-m-d H:i:s")."', fstatus='Confirmed'"); 
		}
	    }
	    if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
	}
	if ($_REQUEST[actions]==$lang['blocked_act4']) //block selected
        {
            foreach($_REQUEST['mid'] as $value) { 
        	if ( $value != $_SESSION['USERNAME'] ) { 
        	    $conn->execute("update blocked_users set active='1' where (blocker_uid='$_SESSION[UID]') and (blocked_name='".filter_title($value)."') and (active='0')"); 
        	    if ($conn->Affected_Rows()<1) {
        		$bu = $conn->execute("select uid from members where username='$value';");
        		$buid = $bu->fields['uid'];
        		$conn->execute("insert into blocked_users set blocker_uid='$_SESSION[UID]', blocker_name='$_SESSION[USERNAME]', blocked_uid='$buid', blocked_name='$value', active='1'");
        	    }
        	}
    	    }
        }
        if ($_REQUEST[actions]==$lang['blocked_act5']) //unblock selected
        {
            foreach($_REQUEST['mid'] as $value) { if ( $value != $_SESSION['USERNAME'] ) $conn->execute("update blocked_users set active='0' where (blocker_uid='$_SESSION[UID]') and (blocked_name='".filter_title($value)."') and (active='1')"); }
        }
        if ($conn->Affected_Rows()>0) $msg=$lang['not_inboxmsgmark'];
    }
}

// paging
$listing_per_page = $config[paging_member];
if($_REQUEST[page]=="")
$page = 1;
else
$page = $_REQUEST[page];

$sql = "SELECT count(*) as total from members $cmd limit $listing_per_page";
$ars = $conn->Execute($sql);
$total = $ars->fields['total'];
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
    else 
    {
	if ($type!="") $page_no .= " <a href='$config[base_url]/members/$type/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> "; 
	else $page_no .= " <a href='$config[base_url]/members/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> "; 
    }
}

if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
else $link = $lang['mem_none'];

if($tpage>1)
{
    $nextpage=$page+1;
    $prevpage=$page-1;
    if ($type!="") $prevlink="<a href='$config[base_url]/members/$type/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    else $prevlink="<a href='$config[base_url]/members/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    
    if ($type!="") $nextlink="<a href='$config[base_url]/members/$type/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    else $nextlink="<a href='$config[base_url]/members/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";

    if($page==$tpage) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link;
    elseif($tpage>$page && $page>1) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
    elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
}

$sql="SELECT * from members $cmd limit $startfrom, $listing_per_page";
$rs = $conn->Execute($sql);
$members = $rs->getrows(); 

$smarty->assign('start_num',$start_num);
$smarty->assign('end_num',$startfrom+$rs->recordcount());
$smarty->assign('total',$total);
$smarty->assign('link',$link);
$smarty->assign('page',$page+0);
$smarty->assign('res',$members);
set_btn("bmember"); set_sbtn("bmember"); set_title($lang['title_members']);
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display('main_header.tpl');
$smarty->display('main_members.tpl');
$smarty->display('footer.tpl');
?>