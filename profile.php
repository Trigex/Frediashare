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
if ($config[guests_profile_view] !="1") { check_login('profile/'.filter_title($_REQUEST['user'])); }
$active = "and active='1' and is_inapp='no'";

if ($_REQUEST[user]!="")
{
    $user=filter_descr($_REQUEST[user]);
    if ( $config['enable_channels'] == '1' ) { header("Location: $config[base_url]/user/$user"); exit; }
    
    if ($config[special_characters]=="0") { if ($user==$_SESSION[USERNAME]) { set_sbtn("mpr"); } }
    elseif ($config[special_characters]=="1") { if ($user==$_SESSION[UID]) { set_sbtn("mpr"); } }
    //user details
    if ($config[special_characters]=="0") $sql="select * from members where username='$user' and is_active='1'";
    elseif ($config[special_characters]=="1") $sql="select * from members where uid='$user' and is_active='1'";
    $rs=$conn->execute($sql);
    if ($rs->recordcount()>0)
    {
	$uip=$rs->fields[from_ip];
	$uid=$rs->fields[uid];
	$bdate=$rs->fields[bdate];
	$user1=$rs->fields[username];
	$ch_commrate=$rs->fields[ch_commrate];
	if ( $ch_commrate == '1' ) $ch_commrate = 'yes'; else $ch_commrate = 'no';
	$smarty->assign('file_comm_rate',$ch_commrate);
	$age = getAge($bdate); $smarty->assign('uage', $age);
	
	//friend check
        $fs="select * from friends where uid='$uid' and fname='$_SESSION[USERNAME]' and is_active='1'";
        $rfs=$conn->execute($fs);
        if ($rfs->recordcount()>0)
        {
            if($rfs->fields[can_rate]=="1") $smarty->assign('can_rate',$rfs->fields[can_rate]);
            if($rfs->fields[can_comment]=="1") $smarty->assign('can_comment',$rfs->fields[can_comment]);
            $friend="yes";
            $smarty->assign('friend',$friend);
        } 
        
	$age=getAge($bdate);
	$smarty->assign('age',$age);
	$udetails=$rs->getrows();
	if ( $uid != $_SESSION[UID] ) check_block($uid, 'bl_chan'); $smarty->assign('errs', check_block($uid, 'bl_chcomm'));
	$smarty->assign('udetails',$udetails);
	$smarty->assign('minfo',$udetails);
	$smarty->assign('uinfo',$udetails);
	if ($config[special_characters]=="0") $smarty->assign('user',$user);
	elseif ($config[special_characters]=="1") $smarty->assign('user',$user1);
	
	//comments                                                                                                                                                                                             
        $sqlc="select count(*) as total from comm_profile where uid='$uid' and active='1' and approved='1';";
        $rsc=$conn->execute($sqlc);
        $tcc=$rsc->fields[total];
        $smarty->assign('tc',$tcc);
        $rsc->Close();
        //$sql="select * from comm_profile where uid='$uid' and active='1'";
        $sql="select s.*,v.* from comm_profile v, members s where v.active='1' and v.approved='1' and v.uid='$uid' and s.uid=v.cuid order by v.comid desc";
        $rs=$conn->execute($sql);
        $smarty->assign('comm',$rs->getrows());
        $rs->Close();
        //profile views
        if ( $uid != $_SESSION['UID'] ) $conn->execute("update members set ch_views = ch_views+1 where uid='$uid';");
    }
    else 
    { 
	$err="Error: The username '$user' does not have an active profile!"; 
	set_btn("bhome");
	$smarty->assign('err',$err);
	$smarty->display('main_header.tpl');
//	$smarty->display('user_profile.tpl');
	$smarty->display('footer.tpl');
	exit;
    }

    //user videos and friends check
    $sql="select * from friends where uid='$uid' and fname='$_SESSION[USERNAME]' and is_active='1'";
    $frs=$conn->execute($sql);
    
    if ($config['enable_videos']=="1")
    {
	if ($frs->recordcount()>0) { $sql = "SELECT * from files_video where uid='$uid' $active order by views desc limit 4"; }
	elseif ($uid==$_SESSION[UID]) { $sql = "SELECT * from files_video where uid='$uid' $active order by views desc limit 4"; }
	else { $sql="SELECT * from files_video where uid='$uid' and vtype='public' $active order by views desc limit 4"; }
    
	$rs = $conn->Execute($sql);
	$vids = $rs->getrows();
	$smarty->assign('vids',$vids);
	$tbl="files_video";
	$tq="select vtags from $tbl where uid='$uid' $active order by views desc limit 10";
	$vt=tags($tq);
	$smarty->assign('vtags',$vt);
    }
    
    
    if ($config['enable_audio']=="1")
    {
    //user audio
	if ($frs->recordcount()>0) { $sqla="SELECT * from files_audio where uid='$uid' $active order by views desc limit 4"; }
	elseif ($uid==$_SESSION[UID]) { $sqla="SELECT * from files_audio where uid='$uid' $active order by views desc limit 4"; }
	else { $sqla="SELECT * from files_audio where uid='$uid' and vtype='public' $active order by views desc limit 4"; }
    
	$rsa = $conn->Execute($sqla);
	$auds = $rsa->getrows();
	$smarty->assign('auds',$auds);
	$tbl="files_audio";
	$tq="select vtags from $tbl where uid='$uid' $active order by views desc limit 10";
	$at=tags($tq);
	$smarty->assign('atags',$at);
    }


    if ($config['enable_images']=="1")
    {
    //user images
	if ($frs->recordcount()>0) { $sqli="SELECT * from files_image where uid='$uid' $active order by views desc limit 4"; }
	elseif ($uid==$_SESSION[UID]) { $sqli="SELECT * from files_image where uid='$uid' $active order by views desc limit 4"; }
	else { $sqli="SELECT * from files_image where uid='$uid' and vtype='public' $active order by views desc limit 4"; }

	$rsi = $conn->Execute($sqli);
	$imgs = $rsi->getrows();
	$smarty->assign('imgs',$imgs);
	$tbl="files_image";
	$tq="select vtags from $tbl where uid='$uid' $active order by views desc limit 10";
	$it=tags($tq);
	$smarty->assign('itags',$it);
    }
    
} else { illegal_op(); }
if ($config[special_characters]=="1") $user=$user1;
$smarty->assign('dmenu','mymsg');
set_btn("bhome"); 
set_sbtn("profile");
set_title($user.$lang['title_userprofile']);
$smarty->assign('err',$err);
$smarty->display('main_header.tpl');
$smarty->display('user_profile.tpl');
$smarty->display('footer.tpl');
?>