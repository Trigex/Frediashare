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
$send=filter_title($_POST['sendbutton']);
$cuid=filter_title($_POST['cuid']);
if (isset($_REQUEST['c'])) $c=filter_title($_REQUEST['c']);

// delete comments
if ($comid!="")
{
    $list=key_to_info_audio($key);
    $vuid=$list[1];
    if ($vuid!=$_SESSION[UID] && $cuid!=$_SESSION[UID]) 
	{ echo show_err ( $lang[adm_err_comm1] ); exit; }
    elseif ($vuid=$_SESSION[UID] or $cuid=$_SESSION[UID])
    {
	$sql="delete from comm_audio where comid='$comid'";	
	$rs=mysql_query($sql);
	if (mysql_affected_rows()>0)
	{
	    $sql1="update files_audio set comments=comments-1 where vkey='$key'";
	    $rs1=mysql_query($sql1);
	    if (mysql_affected_rows()>0)
	    {
		 $conn->execute("delete from comm_rates where type='audio' and comid='$comid';");
		echo show_msg ( $lang[not_comm1] ); exit;
	    }
	    else { echo show_err ( mysql_error() ); exit; }
	}
	else { echo show_err ( mysql_error() ); exit; }
    }
}

if ($send != '' and $c == '')
{
    if ($body=="" && $subject=="") { echo show_err ( $lang[err_comm2] ); exit; }
    elseif (strlen($subject)>$config[comm_max]) { echo show_err ( $lang[err_comm3] ); exit; }
    elseif ($subject !="" && strlen($subject)<$config[comm_min]) { echo "<font color=red>$lang[err_comm4]</font>"; exit; }
    elseif (strlen($body)>$config[comm_max]) { echo show_err ( $lang[err_comm5] ); exit; }
    elseif (strlen($body)<$config[comm_min]) { echo show_err ( $lang[err_comm6] ); exit; }

    $list=key_to_info_audio($key);
    $vidid=$list[0];
    $vuid=$list[1];
    $sql="select uid from comm_audio where active='1' and vid='$vidid' order by addtime desc";
    $rs11=mysql_query($sql);
    $rs21=$conn->execute($sql);
    if (mysql_affected_rows()>0) { if ($rs21->fields[uid] == $_SESSION[UID]) { echo show_err ( $lang[err_comm7] ); exit; } }

    $rq = $conn->execute("select is_comm from files_audio where vid='$vidid';");
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

    $sql="insert into comm_audio set $comapp vid='$vidid', uid='$_SESSION[UID]', subject='$subject', comment='$body', addtime='".time()."'";
    $rs=mysql_query($sql);
    $mid=mysql_insert_id();

    if (mysql_affected_rows()>0)
    {
	$sql1="update files_audio set comments=comments+1 where vkey='$key'";
	$rs1=mysql_query($sql1);
	if (mysql_affected_rows()>0)
	{
	    $rm = $conn->execute("select uid from files_audio where vid='$vidid';");
	    $muid = $rm->fields['uid'];
	    $rm1 = $conn->execute("select email, username from members where uid='$muid'");
	    $receiver = $rm1->fields['username'];
	    $fm = $rm1->fields['email'];
	    
	    if ($fm!='' and check_email_address($fm) and $config['mail_not2'] == '1' and $err == '')
	    {
		$mtype='mail_not2';
		$file='audio';
		send_notification($fm, $receiver, $_SESSION[USERNAME], $mtype, $mid, $file);
	    }
	        
	    echo show_msg ( $lang[not_comm2] ); exit;
	}
	else { echo show_err ( mysql_error() ); exit; }
    }
    else { echo show_err ( $lang[err_comm7] ); exit; }
}
?>