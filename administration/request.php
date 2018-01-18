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
check_login();

$key=filter_title($_POST['key']);
$key1=filter_title($_POST['key1']);
$key2=filter_title($_POST['key2']);
//innapropriate request from view video page
$innap_btn=filter_title($_POST['innap_btn']);
//feature request from view video page
$feat_btn=filter_title($_POST['feat_btn']);
//favorites request from view video page
$fav_btn=filter_title($_POST['fav_btn']);
//add to friends from profile page request
$myfuid = filter_title($_REQUEST['fr']);
$myunsub = filter_title($_REQUEST['unsub']);
$fname=filter_title($_POST['fname'.$myfuid]);
$fuid=filter_title($_POST['fuid'.$myfuid]);
$fmail=filter_descr($_POST['fmail'.$myfuid]);
$uid=filter_title($_POST['uid']);
if (isset($_REQUEST['c'])) $c=filter_title($_REQUEST['c']);

//add to favorites
if ($fav_btn!='')
{
    $list=key_to_info($key2);
//    if($_SESSION[UID]==$list[1]) { echo show_err ( $lang[err_addfav1] ); exit; } 
    
    $sql="insert into fav_video set uid='$_SESSION[UID]',vid='$list[0]',from_uid='$list[1]'";
    $conn->execute($sql);
    if(mysql_affected_rows()>=1) 
    { 
	$sql1="update files_video set vfav=vfav+1 where vid='$list[0]'";
	$conn->execute($sql1);
	if(mysql_affected_rows()>=1) 
	{
	    echo show_msg ( $lang[not_addfav1] ); exit; 
	}
	else { echo show_err ( $lang[err_up13] ); exit; }
    } else { echo show_err ( $lang[err_addfav2] ); exit; } 
}
//report profileimage/bgimage
if ( $_GET['action'] == 'report' and $_GET['type'] != '' ) {
    $act = filter_title ( $_GET['action'] );
    $atype = filter_title ( $_GET['type'] );
    if ( $atype == 'profileimage' ) {
	$ruid = filter_title ( $_POST['ruid'] );
	$rfromuid = filter_title ( $_POST['rfromuid'] );
    } else {
	$ruid = filter_title ( $_POST['rbguid'] );
	$rfromuid = filter_title ( $_POST['rbgfromuid'] );
    }
    
    if ( $atype == 'profileimage' or $atype == 'bgimage' ) {
	$trs=$conn->execute("select * from request_channel where uid='$ruid' and from_uid='$rfromuid' and rtype='$atype' and solved='0'");
	if ($trs->recordcount()>0) { echo show_err ( $lang[err_chreq] ); exit; }
	if ( $ruid == $_SESSION['UID'] ) { echo show_err ( $lang[err_chnorep] ); exit; }
	$date = date("Y-m-d H:i:s");
	$sql="insert into request_channel set uid='$ruid', from_uid='$rfromuid', date='".$date."', rtype='$atype';";
	$rs=mysql_query($sql);
	if (mysql_affected_rows()>0) {
	if ( $config['mail_not_ch'] == '1' ) {
	    if ( $atype == 'profileimage' ) $a_type = $lang['ch_reptxt2']; else $a_type = $lang['ch_reptxt4'];
	    $rf = $conn->execute("select username from members where uid='$rfromuid';"); $rfu = $rf->fields['username'];
	    $to = $config['admin_email'];
	    $from = $config['admin_email'];
	    $name = $config['admin_name'];
	    $smarty->assign('admin', $config['admin_name']);
	    $smarty->assign('rtype', $a_type);
	    $smarty->assign('snd', $rfu);
	    $smarty->assign('stime', $date);
	    $smarty->assign('ip_request', $_SERVER['REMOTE_ADDR']);
	    $smarty->assign('ctype', 'profile');
	    
	    $ru = $conn->execute("select email_subject, email_path from email_files where email_id='report_channel'");
	    if ( $ru->recordcount() > 0 ) {
		$subj = $ru->fields['email_subject'];
		$subj = str_replace('$rtype',$a_type,$subj);
		$path = $ru->fields['email_path'];
		$body = $smarty->fetch($path);
		if ( mailto ($to, $name, $from, $subj, $body ) == '' ) { $msg = $lang['not_request']; } else { $err = $lang['err_inapp5']; }
	    }
	} else $msg = $lang['not_request'];
	}
	if ( $msg != '' ) { echo show_msg ( $msg ); exit; }
	if ( $err != '' ) { echo show_err ( $err ); exit; }
    } else { exit; }
}
//innapropriate request
if ($innap_btn != '' and $c == '')
{ 
    $rep = preg_replace("/[^0-9a-zA-Z ]/","",$_POST['innap']); 
    if ($rep=="") { echo show_err ( $lang[err_inapp1] ); exit; }
    if (strlen($rep)>$config[ir_max]) { echo show_err ( $lang[err_inapp2] ); exit; }
    if (strlen($rep)<$config[ir_min]) { echo show_err ( $lang[err_inapp3] ); exit; }    

    if ($rep!="")
    {
	$reason=$rep;
        $list=key_to_info($key);
	if($_SESSION[UID]==$list[1]) { echo show_err ( $lang[err_inapp4] ); exit; }
        $vidid=$list[0];
        $vuid=$list[1];

	$trs=$conn->execute("select * from request_video_I where vid='$vidid' and solved='0'");
	if ($trs->recordcount()>0) { echo show_err ( $lang[err_inapp5] ); exit; }

        $sql="insert into request_video_I set vid='$vidid', uid='$_SESSION[UID]', from_uid='$vuid', date='".date("Y-m-d H:i:s")."' ,reason='$reason'";
	$rs=mysql_query($sql);
	$mid=mysql_insert_id();

	if (mysql_affected_rows()>0)
	{
	    $fm = $config['admin_email'];
	    $receiver = $config['admin_name'];
	    if ($fm!='' and check_email_address($fm) and $config['mail_not6'] == '1' and $err == '')
	    {
		$mtype='mail_not6';
		$file='request_video_I';
		send_notification($fm, $receiver, $_SESSION[USERNAME], $mtype, $mid, $file);
	    }
    	    echo show_msg ( $lang[not_request] ); exit;
	}
	else { echo show_err ( $lang[err_inapp6] ); exit; }
    }
}
//feature request
if ($feat_btn != '' and $c == '')
{ 
    $feat = preg_replace("/[^0-9a-zA-Z ]/","",$_POST['feat']); 
    if ($feat=="") { echo show_err ( $lang[err_inapp1] ); exit; }
    if (strlen($feat)>$config[fr_max]) { echo show_err ( $lang[err_inapp2] ); exit; }
    if (strlen($feat)<$config[fr_min]) { echo show_err ( $lang[err_inapp3] ); exit; }    

    if ($feat!="")
    {
	$reason=$feat;
        $list=key_to_info($key1);
        $vidid=$list[0]; 
        $vuid=$list[1];
	$feat=$list[12]; if($feat=="yes") { echo "<font color=red>$lang[err_inapp7]</font>"; exit; }
	
	$trs=$conn->execute("select * from request_video_F where vid='$vidid' and solved='0'");
	if ($trs->recordcount()>0) { echo show_err ( $lang[err_inapp5] ); exit; }
	
        $sql="insert into request_video_F set vid='$vidid', uid='$_SESSION[UID]', from_uid='$vuid', date='".date("Y-m-d H:i:s")."' ,reason='$reason'";
	$rs=mysql_query($sql);
	$mid=mysql_insert_id(); 

	if (mysql_affected_rows()>0)
	{
	    $fm = $config['admin_email'];
	    $receiver = $config['admin_name'];
	    if ($fm!='' and check_email_address($fm) and $config['mail_not6'] == '1' and $err == '')
	    {
		$mtype='mail_not6';
		$file='request_video_F';
		send_notification($fm, $receiver, $_SESSION[USERNAME], $mtype, $mid, $file);
	    }
    	    echo show_msg ( $lang[not_request] ); exit;
	}
	else { echo show_err ( $lang[err_inapp8] ); exit; }
    }
}

//add to friends from profile page
if ( ($fname!="" && $_SESSION[UID]!="") or $myunsub != '' )
{
    $cd = '<a href="javascript:void(0)" onclick="HideContent(\'frmsgdiv'.time().'\');">'.$lang['plist_txt54'].'</a>';
    if ($_SESSION[UID]=="") { echo "<div id=\"frmsgdiv".time()."\" style=\"display: block;\"><table cellpadding=0 cellspacing=0 width=\"100%\" border=0><tr><td><center><font color=red><b>$lang[err_pr1]</b></font></center></td><td>".$cd."</td></tr></table></div>"; exit; }
    elseif ($fuid==$_SESSION[UID]) { echo "<div id=\"frmsgdiv".time()."\" style=\"display: block;\"><table cellpadding=0 cellspacing=0 width=\"100%\" border=0><tr><td><center><font color=red><b>$lang[err_pr2]</b></font></center></td><td>".$cd."</td></tr></table></div>"; exit; }
    else
    {
	if ( $myunsub == '' ) $sql="insert into friends set uid='$_SESSION[UID]', fname='$fname', femail='$fmail', add_date='".date("Y-m-d H:i:s")."', fstatus='Confirmed'";
	else $sql = "delete from subscriptions where subscriber_uid = '$myunsub' and subscribed_uid = '$_SESSION[UID]';";
	
	$rs=mysql_query($sql);
	if (mysql_affected_rows()>0)
	{
	    if ( $myunsub == '' ) $msg = $lang['not_prfriends']; else $msg = $lang['uch_shtxt111'];
	    echo "<div id=\"frmsgdiv".time()."\" style=\"display: block;\"><table cellpadding=0 cellspacing=0 width=\"100%\" border=0><tr><td><center><font color=green><b>$msg</b></font></center></td><td>".$cd."</td></tr></table></div>"; exit;
	}
	else { 
	    if ( $myunsub == '' ) $err = $lang['err_pr3']; else $err = $lang['uch_shtxt13'];
	    echo "<div id=\"frmsgdiv".time()."\" style=\"display: block;\"><table cellpadding=0 cellspacing=0 width=\"100%\" border=0><tr><td><center><font color=red><b>$err</b></font></center></td><td>".$cd."</td></tr></table></div>"; exit; 
	}
    }
} 
//else { echo "<center><font color=red><b>$lang[err_pr1]</b></font></center><br>"; exit; }

?>