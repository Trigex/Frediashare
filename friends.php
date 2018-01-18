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
include('rating2.php');

//$_REQUEST = array_map('filter_title', $_REQUEST);
if ( isset ( $_REQUEST['filter'] ) ) $_REQUEST['filter'] = filter_descr ( $_REQUEST['filter'] );
if ( isset ( $_REQUEST['user'] ) ) $_REQUEST['user'] = filter_descr ( $_REQUEST['user'] );
if ( isset ( $_REQUEST['page'] ) ) $_REQUEST['page'] = filter_title ( $_REQUEST['page'] );
if ( isset ( $_REQUEST['fid'] ) ) $_REQUEST['fid']=filter_title($_REQUEST['fid']);
if ( isset ( $_REQUEST['cancel'] ) ) $_REQUEST['cancel']=filter_title($_REQUEST['cancel']);
if ( isset ( $_REQUEST['submit'] ) ) $_REQUEST['submit']=filter_title($_REQUEST['submit']);
if ( isset ( $_REQUEST['fname'] ) ) $_REQUEST['fname']=filter_title($_REQUEST['fname']);
if ( isset ( $_REQUEST['goact'] ) ) $_REQUEST['goact']=filter_title($_REQUEST['goact']);
if ( isset ( $_REQUEST['actions'] ) ) $_REQUEST['actions']=filter_title($_REQUEST['actions']);

if ($config[guests_profile_view] !="1") { check_login('user_friends/'.$_REQUEST['user']); }
if ( $config['enable_channels'] == '1' ) { header("Location: $config[base_url]/user/$_REQUEST[user]&view=friends"); exit; }
function get_fname($x) {
    global $conn, $config;
    $sql="select username from members where uid='$x'";
    $rs=$conn->execute($sql);
    $fid=$rs->fields[username];
    return $fid;
}

$type=$_REQUEST['filter'];
$cmd="order by v.uid";
if ($type=="audio_files") $cmd="order by v.files_audio desc";
if ($type=="images_files") $cmd="order by v.files_image desc";
if ($type=="video_files") $cmd="order by v.files_video desc";
if ($type=="last_joined") $cmd="order by v.reg_on desc";
if ($type=="last_login") $cmd="order by v.last_login desc";
if ($type=="online") $cmd="and v.is_logged='1' order by v.uid";
if ($type=="offline") $cmd="and v.is_logged='0' order by v.uid";
$smarty->assign('dmenu', 'mymsg');

if ($_REQUEST[user]!="")
{
    $user=$_REQUEST[user];
    if ($config[special_characters]=="0") $sql="select uid,username from members where username='$user' and is_active='1'";
    elseif ($config[special_characters]=="1") $sql="select uid,username from members where uid='$user' and is_active='1'";
    $rs=$conn->execute($sql);
    if ($rs->recordcount()>0)
    {
	$uid=$rs->fields[uid];
	$un=$rs->fields[username];
	$smarty->assign('uname',$un);
	$qu="where uid='$uid'";
	if ($uid==$_SESSION[UID]) $own="1";
	$rs->Close();
    }
    else { illegal_op(); }
} else { illegal_op(); }

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
        if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
    }
} 

// paging
$listing_per_page = $config[paging_ufri];
if($_REQUEST[page]=="")
$page = 1;
else
$page = $_REQUEST[page];
//$sql = "SELECT count(*) as total from friends $qu limit $listing_per_page";
$tsql="select s.*,v.* from members v, friends s where v.is_active='1' and s.fname=v.username and s.uid='$uid' $cmd"; 
$trs = $conn->Execute($tsql);
$tfriends = $trs->getrows();
$total=count($tfriends);
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
	if ($type!="") $page_no .= " <a href='$config[base_url]/user_friends/$user/$type/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
	else $page_no .= " <a href='$config[base_url]/user_friends/$user/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
    }
}
if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
else $link = $lang['userfr_none'];

if($tpage>1)
{
    $nextpage=$page+1;
    $prevpage=$page-1;
    if ($type!="") $prevlink="<a href='$config[base_url]/user_friends/$user/$type/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    else $prevlink="<a href='$config[base_url]/user_friends/$user/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    if ($type!="") $nextlink="<a href='$config[base_url]/user_friends/$user/$type/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    else $nextlink="<a href='$config[base_url]/user_friends/$user/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    if($page==$tpage) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link;
    elseif($tpage>$page && $page>1) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
    elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
}

//$sql="SELECT * from friends $qu limit $startfrom, $listing_per_page";
$sql="select s.*,v.* from members v, friends s where v.is_active='1' and s.fname=v.username and s.uid='$uid' $cmd limit $startfrom, $listing_per_page"; 
$rs = $conn->Execute($sql);
$fri = $rs->getrows(); 

$smarty->assign('start_num',$start_num);
$smarty->assign('end_num',$startfrom+$rs->recordcount());
$smarty->assign('total',$total);
$smarty->assign('link',$link);
$smarty->assign('page',$page+0);
$smarty->assign('res',$fri);
$rs->Close();

set_btn("bhome"); set_sbtn("ufr"); if ($config[special_characters]=="0") set_title($_REQUEST[user].$lang['title_userfri']); else set_title($un.$lang['title_userfri']);
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display('main_header.tpl');
$smarty->display('main_friends.tpl');
$smarty->display('footer.tpl');
?>