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

if (isset($_REQUEST['filter'])) $_REQUEST['filter']=filter_title($_REQUEST['filter']);
if (isset($_REQUEST['action'])) $_REQUEST['action']=filter_title($_REQUEST['action']);
if (isset($_REQUEST['type'])) $_REQUEST['type']=filter_title($_REQUEST['type']);
if (isset($_GET['mtype'])) $mtype=filter_title($_GET['mtype']);
if (isset($_REQUEST['member'])) $_REQUEST['member']=filter_title($_REQUEST['member']);
if (isset($_REQUEST['to'])) $_REQUEST['to']=filter_title($_REQUEST['to']);
if (isset($_REQUEST['tocancel'])) $_REQUEST['tocancel']=filter_title($_REQUEST['tocancel']);
if (isset($_REQUEST['tosend'])) $_REQUEST['tosend']=filter_title($_REQUEST['tosend']);
if (isset($_REQUEST['tosubj'])) $_REQUEST['tosubj']=filter_descr($_REQUEST['tosubj']);
if (isset($_REQUEST['submit'])) $_REQUEST['submit']=filter_title($_REQUEST['submit']);
if (isset($_REQUEST['page'])) $_REQUEST['page']=filter_title($_REQUEST['page']);
if (isset($_REQUEST['goact'])) $_REQUEST['goact']=filter_descr($_REQUEST['goact']);
if (isset($_REQUEST['action'])) { if ($_REQUEST['action']!="ban" && $_REQUEST[action]!="unban" && $_REQUEST[action]!="message" && $_REQUEST[action]!="email" && $_REQUEST[action]!="delete" && $_REQUEST[action]!="enable" && $_REQUEST[action]!="disable" && $_REQUEST[action]!="up0" && $_REQUEST[action]!="up1") { illegal_opa(); } }
if (isset($_REQUEST['type'])) { if ($_REQUEST['type']!="who") { illegal_opa(); } }
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
	
	if ($_REQUEST[actions]==$lang['act_frenable']) //enable selected
	{
	    foreach($_REQUEST['mid'] as $value) { $conn->execute("update members set is_active='1' where uid='".filter_title($value)."' and is_active='0';"); }
	    if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
	}
	
	if ($_REQUEST[actions]==$lang['act_frdisable']) //disable selected
	{
	    foreach($_REQUEST['mid'] as $value) { $conn->execute("update members set is_active='0' where uid='".filter_title($value)."' and is_active='1';"); }
	    if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
	}
	if ($_REQUEST[actions]==$lang['adm_memupact1']) //enable uploads
	{
	    foreach($_REQUEST['mid'] as $value) { $conn->execute("update members set can_upload='1' where uid='".filter_title($value)."' and can_upload='0';"); }
	    if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
	}
	
	if ($_REQUEST[actions]==$lang['adm_memupact2']) //disable uploads
	{
	    foreach($_REQUEST['mid'] as $value) { $conn->execute("update members set can_upload='0' where uid='".filter_title($value)."' and can_upload='1';"); }
	    if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
	}
	
	if ($_REQUEST[actions]==$lang['admact_memban']) //ban selected
	{
	    foreach($_REQUEST['mid'] as $value) 
	    { 
		$conn->execute("insert into banned_users set active='1', ban_uid='".filter_title($value)."', ban_name='".get_name(filter_title($value))."', ban_msg='$def_msg', ban_url='$def_url';"); 
		if ($conn->Affected_Rows() < 1) $conn->execute("update banned_users set active='1' where ban_uid='".filter_title($value)."' and active='0';");
	    }
	    if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
	}
	
	if ($_REQUEST[actions]==$lang['admact_memunban']) //unban selected
	{
	    foreach($_REQUEST['mid'] as $value) { $conn->execute("update banned_users set active='0' where ban_uid='".filter_title($value)."' and active='1';"); }
	    if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
	}
	
	if ($_REQUEST[actions]==$lang['admact_memdela']) //delete all audios
	{
	    foreach($_REQUEST['mid'] as $value)
	    {
		$sql="select vid from files_audio where uid='".filter_title($value)."'";
		$result = mysql_query($sql);
		while($row = mysql_fetch_assoc($result))
		{
		    $vid=$row['vid'];
		    delete_ado($vid, $value);
		}
	    }
	    if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
	}
	
	if ($_REQUEST[actions]==$lang['admact_memdeli']) //delete all images
	{
	    foreach($_REQUEST['mid'] as $value)
	    {
		$sql="select vid from files_image where uid='".filter_title($value)."'";
		$result = mysql_query($sql);
		while($row = mysql_fetch_assoc($result))
		{
		    $vid=$row['vid'];
		    delete_img($vid, $value);
		}
	    }
	    if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
	}
	
	if ($_REQUEST[actions]==$lang['admact_memdelv']) //delete all videos
	{
	    foreach($_REQUEST['mid'] as $value)
	    {
		$sql="select vid from files_video where uid='".filter_title($value)."'";
		$result = mysql_query($sql);
		while($row = mysql_fetch_assoc($result))
		{
		    $vid=$row['vid'];
		    delete_vdo($vid, $value);
		}
	    }
	    if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
	}
	
	if ($_REQUEST[actions]==$lang['admact_memdelm']) //delete selected
	{
	    foreach($_REQUEST['mid'] as $value)
	    {
		$del=delete_member(filter_title($value));
	    }
	    if ($del=='yes') $msg = $lang['adm_memdelnotice'];
		else $err = $lang['adm_errmem1'];
	    if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
	}
	
	if ($_REQUEST[actions]==$lang['admact_mememail']) //email selected
	{
	    $_REQUEST[action] = "email";
	    $_REQUEST[to] = "selected";
	}
	
	if ($_REQUEST[actions]==$lang['admact_memmsg']) //message selected
	{
	    $_REQUEST[action] = "message";
	    $_REQUEST[to] = "selected";
	}
    }
}

//disable uploads
if ( $_REQUEST['action'] == 'up0' ) {
    $mem=$_REQUEST[member];
    $sql2="update members set can_upload='0' where uid='$mem'";
    $rs2=$conn->execute($sql2);
    header("Location: $config[admin_url]/members/registered");
    exit;
}
//enable uploads
if ( $_REQUEST['action'] == 'up1' ) {
    $mem=$_REQUEST[member];
    $sql2="update members set can_upload='1' where uid='$mem'";
    $rs2=$conn->execute($sql2);
    header("Location: $config[admin_url]/members/registered");
    exit;
}
//ban member
if ($_REQUEST[action]=="ban")
{
    $def_msg = $config['def_ban_msg'];
    $def_lnk = $config['def_ban_link'];
    
    $mem=$_REQUEST[member];
    $rsm=$conn->execute("select username from members where uid='$mem'");
    $name=$rsm->fields['username'];
    
    $sql1="update banned_users set active='1' where ban_uid='$mem' and active='0'";
    $rs1=$conn->execute($sql1);
    
    if ($conn->Affected_Rows() < 1)
    {
	$conn->execute("insert into banned_users set ban_uid='$mem', ban_name='$name', ban_msg='$def_msg', ban_url='$def_lnk', active='1';");
    }
    header("Location: $config[admin_url]/members/registered");
    exit;
}
//unban user
if ($_REQUEST[action]=="unban")
{
    $mem=$_REQUEST[member];
    $rsm=$conn->execute("select username from members where uid='$mem'");
    $name=$rsm->fields['username'];
    
    $sql1="update banned_users set active='0' where ban_uid='$mem' and active='1'";
    $rs1=$conn->execute($sql1);
    header("Location: $config[admin_url]/members/registered");
    exit;
}
//disable member
if ($_REQUEST[action]=="disable")
{
    $mem=$_REQUEST[member];
    $sql1="update members set is_active='0' where uid='$mem'";
    $rs1=$conn->execute($sql1);
    header("Location: $config[admin_url]/members/registered");
    exit;
}
//enable member
if ($_REQUEST[action]=="enable")
{
    $mem=$_REQUEST[member];
    $sql2="update members set is_active='1' where uid='$mem'";
    $rs2=$conn->execute($sql2);
    header("Location: $config[admin_url]/members/registered");
    exit;
}
//delete member
if ($_REQUEST[action]=="delete")
{
    $user=$_REQUEST[member];
    
    if(delete_member($user) == 'yes') $msg = $lang['adm_memdelnotice'];
    else $err = $lang['adm_errmem1'];
}

//email member
if ($_REQUEST[action]=="email")
{
    include('fckeditor/fckeditor.php');
    if ($_REQUEST[tocancel]!="")
    {
	header("Location: $config[admin_url]/members/registered");
	exit;
    }
    $to=$_REQUEST[to];
    
    if ($to=="all")
    {
	$toe=$lang['adm_sendallmem'];
    }
    elseif ($to=="selected")
    {
	$smarty->assign('memsel',$_REQUEST['mid']);
	$un = $lang['adm_mememailheadingsel'];
    }
    else
    {
	$sql="select email,username from members where uid='$to'";
	$rs=$conn->execute($sql);
	$toe=$rs->fields[email];
	$un=$rs->fields[username];
    }
    
    if ($_REQUEST['submit']!="" && ($to!="all" && $to!="selected"))
    {
        $tosubj=$_REQUEST[tosubj];
        if ($tosubj=="") $err=$lang['adm_errmem2'];
        elseif ($_REQUEST['message']=="") $err=$lang['adm_errmem3'];
        if ($err=="")
        {
	    $name=$config['site_name'];
	    $from=$config['admin_email'];
	    $body=$_REQUEST['message'];
	    
	    if (mailto($toe,$name,$from,$tosubj,$body)=="") $msg=$lang['admnot_mememail'];
	    else $err=$lang['adm_errmem4'];
	    //$err = mailto($toe,$name,$from,$tosubj,$body);
	} 
    }
	
    elseif ($_REQUEST['submit']!="" && $to=="selected")
    {
	function get_email($user)
	{
	    global $config, $conn;
	    $r=$conn->execute("select email from members where username='$user';");
	    return $r->fields['email'];
	}
	
	$tosubj=$_REQUEST[tosubj]; 
	if ($tosubj=="") $err=$lang['adm_errmem2'];
	elseif ($_REQUEST['message']=="") $err=$lang['adm_errmem3'];
	if ($err=="")
	{
	    $name=$config['site_name'];
	    $from=$config['admin_email'];
	    $body=$_REQUEST['message'];
	    
	    $listmem=explode(",",$_REQUEST['mids']);
	    foreach ($listmem as $value)
	    {
		if (@mailto(get_email($value), $name, $from, $tosubj, $body)=="") $msg=$lang['admnot_mememailall'];
		else $err=$lang['adm_errmem4'];
		if ( $_SESSION['mid'] != '' ) { $_SESSION['mid'] = ''; session_unregister ( $_SESSION['mid'] ); }
	    }
	}
    }
    
    elseif ($_REQUEST['submit']!="" && $to=="all")
    {
	$tosubj=$_REQUEST[tosubj]; 
	if ($tosubj=="") $err=$lang['adm_errmem2'];
	elseif ($_REQUEST['message']=="") $err=$lang['adm_errmem3'];
	if ($err=="")
	{
	    $name=$config['site_name'];
	    $from=$config['admin_email'];
	    $body=$_REQUEST['message'];
	    
	    $sql="select email from members where is_active='1'";
	    $rs=$conn->execute($sql);
	    while(!$rs->EOF)
	    {
		if (@mailto($rs->fields[email], $name, $from, $tosubj, $body)=="") $msg=$lang['admnot_mememailall'];
		else $err=$lang['adm_errmem4'];
		$rs->movenext();
	    }
	}
    }
    
    $sBasePath = "$config[admin_url]/fckeditor/";
    $oFCKeditor = new FCKeditor('message');
    $oFCKeditor->BasePath = $sBasePath;
    $oFCKeditor->CustomConfigurationsPath = "fckconfig.js";        
    if ($body=="") $oFCKeditor->Value  = $lang['adm_sendboxmsg'];
    else $oFCKeditor->Value  = "$body";
    
    $oFCKeditor->Width  = '100%' ;
    $oFCKeditor->Height = '300' ;
    $edit = $oFCKeditor->CreateHtml() ;

    set_btn("adm_members"); if ($to=="all") { set_sbtn("mailall"); } elseif ($to!="all") { set_sbtn("mail"); }
    $smarty->assign('to',$un);
    $smarty->assign('toe',$toe);
    $smarty->assign('err',$err);
    $smarty->assign('msg',$msg); 
    $smarty->assign('edit',$edit); 
    $smarty->display('administration/main_header.tpl');
    $smarty->display('administration/member_email.tpl'); 
    $smarty->display('administration/main_footer.tpl');
    exit;
}
//message member
if ($_REQUEST[action]=="message")
{
    include('fckeditor/fckeditor.php');
    if ($_REQUEST[tocancel]!="")
    {
	header("Location: $config[admin_url]/members/registered");
	exit;
    }
    $to=$_REQUEST[to];
    
    if ($to=="all")
    {
	$toe=$lang['adm_sendallmem'];
    }
    elseif ($to=="selected")
    {
	$smarty->assign('memsel',$_REQUEST['mid']);
	$un = $lang['adm_mememailheadingsel'];
    }
    else
    {
	$sql="select username from members where uid='$to'";
	$rs=$conn->execute($sql);
	$toe=$rs->fields[username];
    }
    
    if ($_REQUEST['submit']!="" && ($to!="all" && $to!="selected"))
    {
        $tosubj=$_REQUEST[tosubj];
        if ($tosubj=="") $err=$lang['adm_errmem2'];
        elseif ($_REQUEST['message']=="") $err=$lang['adm_errmem3'];
        if ($err=="")
        {
	    $name=$config['site_name'];
	    $from=$config['admin_email'];
	    $body=$_REQUEST['message'];
	    
	    $conn->execute("insert pmessages set subject='$tosubj', body='$body', sender='$name', receiver='$toe', date='".date("Y-m-d H:i:s")."'");
	    if(mysql_affected_rows()>0) $msg=$lang['admnot_memmsg'];
	    else $err=$lang['adm_errmem5'];
	} 
    }

    elseif ($_REQUEST['submit']!="" && $to=="selected")
    {
	$tosubj=$_REQUEST[tosubj]; 
	if ($tosubj=="") $err=$lang['adm_errmem2'];
	elseif ($_REQUEST['message']=="") $err=$lang['adm_errmem3'];
	if ($err=="")
	{
	    $name=$config['site_name'];
	    $from=$config['admin_email'];
	    $body=$_REQUEST['message'];
	    
	    $listmem=explode(",",$_REQUEST['mids']);
	    foreach ($listmem as $value)
	    {
		$conn->execute("insert into pmessages set subject='$tosubj', body='$body', sender='$name', receiver='".filter_title($value)."', date='".date("Y-m-d H:i:s")."'");
	    }
	    if ($conn->Affected_Rows() > 0) $msg=$lang['admnot_memmsgall'];
	    else $err=$lang['adm_errmem5'];
	    if ( $_SESSION['mid'] != '' ) { $_SESSION['mid'] = ''; session_unregister ( $_SESSION['mid'] ); }
	}
    }
	
    elseif ($_REQUEST['submit']!="" && $to=="all")
    {
	$tosubj=$_REQUEST[tosubj]; 
	if ($tosubj=="") $err=$lang['adm_errmem2'];
	elseif ($_REQUEST['message']=="") $err=$lang['adm_errmem3'];
	if ($err=="")
	{
	    $name=$config['site_name'];
	    $from=$config['admin_email'];
	    $body=$_REQUEST['message'];
	    
	    $sql="select username from members where is_active='1'";
	    $rs=$conn->execute($sql);
	    while(!$rs->EOF)
	    {
		$rcv=$rs->fields[username];
		$conn->execute("insert into pmessages set subject='$tosubj', body='$body', sender='$name', receiver='$rcv', date='".date("Y-m-d H:i:s")."'");
		if(mysql_affected_rows()>0) $msg=$lang['admnot_memmsgall'];
		else $err=$lang['adm_errmem5'];
		$rs->movenext();
	    }
	}
    }
    
    $sBasePath = "$config[admin_url]/fckeditor/";
    $oFCKeditor = new FCKeditor('message');
    $oFCKeditor->BasePath = $sBasePath;
    $oFCKeditor->CustomConfigurationsPath = "fckconfig.js";    
    if ($body=="") $oFCKeditor->Value  = $lang['adm_sendboxmsg'];
    else $oFCKeditor->Value  = "$body";
    
    $oFCKeditor->Width  = '100%' ;
    $oFCKeditor->Height = '300' ;
    $edit = $oFCKeditor->CreateHtml() ;

    set_btn("adm_members"); if ($to=="all") { set_sbtn("msgall"); } elseif ($to!="all") { set_sbtn("mail"); }
    $smarty->assign('to',$un);
    $smarty->assign('toe',$toe);
    $smarty->assign('err',$err);
    $smarty->assign('msg',$msg); 
    $smarty->assign('edit',$edit); 
    $smarty->display('administration/main_header.tpl');
    $smarty->display('administration/member_message.tpl'); 
    $smarty->display('administration/main_footer.tpl');
    exit;
}

// paging
switch ( $mtype ) {
    case 'm1': $cm1 = " where uid!='' and ch_type='1' "; break;
    case 'm2': $cm1 = " where uid!='' and ch_type='2' "; break;
    case 'm3': $cm1 = " where uid!='' and ch_type='3' "; break;
    case 'm4': $cm1 = " where uid!='' and ch_type='4' "; break;
    case 'm5': $cm1 = " where uid!='' and ch_type='5' "; break;
    case 'm6': $cm1 = " where uid!='' and ch_type='6' "; break;
    default: $cm1 = " where uid!='' and ch_type!='' "; break;
}
switch ( $_REQUEST['filter'] ) {
    case 'most_subscribed': $cmd = $cm1.'order by ch_subs desc'; break;
    case 'most_viewed': $cmd = $cm1.'order by ch_views desc'; break;
    case 'audio_files': $cmd = $cm1.'order by files_audio desc'; break;
    case 'image_files': $cmd = $cm1.'order by files_image desc'; break;
    case 'video_files': $cmd = $cm1.'order by files_video desc'; break;
    case 'last_joined': $cmd = $cm1.'order by reg_on desc'; break;
    case 'last_login': $cmd = $cm1.'order by last_login desc'; break;
    case 'online': $cmd = $cm1." and is_logged='1' order by username"; break;
    case 'offline': $cmd = $cm1." and is_logged='0' order by username"; break;
    default: $cmd = $cm1.'order by username'; break;
}
if ( $mtype != '' ) $f1 = "&mtype=$mtype"; else $f1 = '';
if ( $_REQUEST['filter'] != '' ) $filter = $_REQUEST['filter'].'/'; else $filter = '';

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
$page_no = ""; $smarty->assign('tpage',$tpage);
for($i=1; $i<=$tpage; $i++)
{
    if($i==$page) $page_no .= "<span class=\"pag_act\">$i</span>";
	else { $page_no .= " <a href='$config[base_url]/administration/members/registered/".$filter."page$i$f1'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> "; }
}
if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
else $link = $lang['adm_memnone'];

if($tpage>1)
{
    $nextpage=$page+1;
    $prevpage=$page-1;
    $prevlink="<a href='$config[base_url]/administration/members/registered/".$filter."page$prevpage$f1'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    $nextlink="<a href='$config[base_url]/administration/members/registered/".$filter."page$nextpage$f1'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    
    if($page==$tpage) $link.="$prevlink&nbsp;&nbsp;&nbsp;";
    elseif($tpage>$page && $page>1) $link=$link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
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
$smarty->assign('members',$members);

set_btn("adm_members"); set_sbtn("main");
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display('administration/main_header.tpl');
$smarty->display('administration/main_members.tpl');
$smarty->display('administration/main_footer.tpl');
?>