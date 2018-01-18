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

$subject=filter_descr($_POST['subject']);
$body=filter_descr($_POST['body']);
$key=filter_title($_POST['fkey']);
$comid=filter_title($_POST['comid']);
$comidc=filter_title($_POST['comidc']);
$send=filter_title($_POST['sendbutton']);
$cbody = filter_descr($_POST['comms']);
$cuid=filter_title($_POST['cuid']);
if (isset($_REQUEST['c'])) $c=filter_title($_REQUEST['c']);

// delete profile comments
if ($comidc!="")
{
    $sql="delete from comm_profile where comid='$comidc'";	
    $rs=mysql_query($sql);
    if (mysql_affected_rows()>0)
    {
	$conn->execute("delete from comm_rates where type='profile' and comid='$comidc';");
	echo show_msg ( $lang[not_comm1] ); exit;
    } else { echo show_err ( $lang[adm_errsetcomm1] ); exit; }
}
// delete video comments
if ($comid!="")
{ 
    $list=key_to_info($key);
    $vuid=$list[1];
    if ($vuid!=$_SESSION[UID] && $cuid!=$_SESSION[UID])
	{ echo show_err ( $lang[adm_err_comm1] ); exit; }
    elseif ($vuid=$_SESSION[UID] or $cuid=$_SESSION[UID])
    {
	$sql="delete from comm_vid where comid='$comid'";	
	$rs=mysql_query($sql);
	if (mysql_affected_rows()>0)
	{
	    $sql1="update files_video set comments=comments-1 where vkey='$key'";
	    $rs1=mysql_query($sql1);
	    if (mysql_affected_rows()>0)
	    {
		$conn->execute("delete from comm_rates where type='video' and comid='$comid';");
		echo show_msg ( $lang[not_comm1] ); exit;
	    }
	    else { echo show_err ( mysql_error() ); exit; }
	}
	else { echo show_err ( mysql_error() ); exit; }
    }
}

//add comments
if ($send!="" and $c=='')
{ 
    //profile comments
    if ($cbody!="")
    {
	if (strlen($cbody)>$config[comm_max]) { echo show_err ( $lang[err_comm5] ); exit; }
	if (strlen($cbody)<$config[comm_min]) { echo show_err ( $lang[err_comm6] ); exit; }
	
	$useruid=filter_title($_POST['useruid']);
	$sql="select cuid from comm_profile where uid='$useruid' and active='1' order by addtime desc";
	$rs1=mysql_query($sql);
	$rs2=$conn->execute($sql);
	if (mysql_affected_rows()>0) { if ($rs2->fields[cuid] == $_SESSION[UID]) { echo show_err ( $lang[err_comm7] ); exit; } }

	$pq = $conn->execute("select ch_comm, ch_comm_who from members where uid='$useruid';");
	$ch_comm = $pq->fields['ch_comm'];
	$ch_comm_who = $pq->fields['ch_comm_who'];
	if ( $ch_comm == 'yes' ) {
	    if ( $ch_comm_who == '0' ) {
		$comapp = '';
	    } elseif ( $ch_comm_who == '1' ) {
		$fs="select * from friends where uid='$useruid' and fname='$_SESSION[USERNAME]' and is_active='1'";
		$rfs=$conn->execute($fs);
		if ( $rfs->recordcount() > 0 ) {
		    $friend = 'yes';
		    $comapp = "approved='1', ";
		} else { $friend = 'no'; $comapp = "approved='0', "; }
		if ( $useruid == $_SESSION['UID'] ) $comapp = '';
	    } elseif ( $ch_comm_who == '2' ) {
		$comapp = '';
	    } elseif ( $ch_comm_who == '3' ) {
		$comapp = "approved='0', ";
		if ( $useruid == $_SESSION['UID'] ) $comapp = '';
	    }
	}
	
	if ( ( $ch_comm_who == '1' and $friend == 'no' ) or ( $ch_comm_who == '3' ) ) $qmsg = $lang['comm_approvedtxt']; else $qmsg = '';
	
	$sql="insert into comm_profile set $comapp comment='$cbody', uid='$useruid', cuid='$_SESSION[UID]', addtime='".time()."'";
	$rs=mysql_query($sql);
	$mid=mysql_insert_id();
	
	if (mysql_affected_rows()>0)
	{
	    $rm = $conn->execute("select username, email from members where uid='$useruid';");
	    $fm = $rm->fields['email'];
	    $receiver = $rm->fields['username'];
	    
	    if ($fm!='' and check_email_address($fm) and $config['mail_not3'] == '1' and $err == '')
	    { 
		$mtype='mail_not3';
		send_notification($fm, $receiver, $_SESSION[USERNAME], $mtype, $mid);
	    }
	    echo show_msg ( $lang[not_comm2].$qmsg ); exit;
	    mysql_close($rs);
	    
	} else { echo show_err ( mysql_error() ); exit; }
    }

    if ($body=="" && $subject=="") { echo show_err ( $lang[err_comm2] ); exit; }
    if (strlen($subject)>$config[comm_max]) { echo show_err ( $lang[err_comm3] ); exit; }
    if ($subject !="" && strlen($subject)<$config[comm_min]) { echo "<font color=red>$lang[err_comm4]</font>"; exit; } 
    if (strlen($body)>$config[comm_max]) { echo show_err ( $lang[err_comm5] ); exit; }
    if (strlen($body)<$config[comm_min]) { echo show_err ( $lang[err_comm6] ); exit; } 

    //video comments
    $list=key_to_info($key);
    $vidid=$list[0];
    $vuid=$list[1];
    $sql="select uid from comm_vid where active='1' and vid='$vidid' order by addtime desc";
    $rs11=mysql_query($sql);
    $rs21=$conn->execute($sql);
    if (mysql_affected_rows()>0) { if ($rs21->fields[uid] == $_SESSION[UID]) { echo show_err ( $lang[err_comm7] ); exit; } }
    
    $rq = $conn->execute("select is_comm from files_video where vid='$vidid';");
    $comm = $rq->fields['is_comm'];
    
    if ( $comm == 'app' ) { 
	if ( $vuid == $_SESSION['UID'] ) $comapp = ''; else $comapp = "approved='0', "; 
    } elseif ( $comm == 'appfr' ) {
	$fs="select * from friends where uid='$vuid' and fname='$_SESSION[USERNAME]' and is_active='1'";
	$rfs=$conn->execute($fs);
	if ( $rfs->recordcount() > 0 ) {
	    $friend = 'yes';
	    $comapp = "approved='1', ";
	} else { $friend = 'no'; $comapp = "approved='0', "; }
	if ( $vuid == $_SESSION['UID'] ) $comapp = '';
    } else $comapp = '';
    
    $sql="insert into comm_vid set $comapp vid='$vidid', uid='$_SESSION[UID]', subject='$subject', comment='$body', addtime='".time()."'";
    $rs=mysql_query($sql);
    $mid=mysql_insert_id();
    
    if (mysql_affected_rows()>0)
    {
	$sql1="update files_video set comments=comments+1 where vkey='$key'";
	$rs1=mysql_query($sql1);
	if (mysql_affected_rows()>0)
	{
	    $rm = $conn->execute("select uid from files_video where vid='$vidid';");
	    $muid = $rm->fields['uid'];
	    $rm1 = $conn->execute("select email, username from members where uid='$muid'");
	    $receiver = $rm1->fields['username'];
	    $fm = $rm1->fields['email'];
	    
	    if ($fm!='' and check_email_address($fm) and $config['mail_not2'] == '1' and $err == '')
	    {
		$mtype='mail_not2';
		$file='video';
		send_notification($fm, $receiver, $_SESSION[USERNAME], $mtype, $mid, $file);
	    }
	    echo show_msg ( $lang[not_comm2] ); exit;
	}
	else { echo show_err ( mysql_error() ); exit; }
    }
    else { echo show_err ( $lang[err_comm7] ); exit; }
}
?>