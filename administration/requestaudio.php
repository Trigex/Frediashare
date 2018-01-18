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
//innapropriate request from view audio page
$innap_btn=filter_title($_POST['innap_btn']);
//feature request from view audio page
$feat_btn=filter_title($_POST['feat_btn']);
//favorites request from view audio page
$fav_btn=filter_title($_POST['fav_btn']);
if (isset($_REQUEST['c'])) $c=filter_title($_REQUEST['c']);

//add to favorites
if ($fav_btn!='')
{
    $list=key_to_info_audio($key2);
//    if($_SESSION[UID]==$list[1]) { echo show_err ( $lang[err_addfav1] ); exit; } 
    
    $sql="insert into fav_audio set uid='$_SESSION[UID]', vid='$list[0]', from_uid='$list[1]'";
    $conn->execute($sql);
    if(mysql_affected_rows()>=1) 
    { 
	$sql1="update files_audio set vfav=vfav+1 where vid='$list[0]'";
	$conn->execute($sql1);
	if(mysql_affected_rows()>=1) 
	{
	    echo show_msg ( $lang[not_addfav1] ); exit; 
	}
	else { echo show_err ( $lang[err_up13] ); exit; }
    } else { echo show_err ( $lang[err_addfav2] ); exit; } 
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
        $list=key_to_info_audio($key);
	if($_SESSION[UID]==$list[1]) { echo show_err ( $lang[err_inapp4] ); exit; }
        $vidid=$list[0];
        $vuid=$list[1];
	
	$trs=$conn->execute("select * from request_audio_I where vid='$vidid' and solved='0'");
        if ($trs->recordcount()>0) { echo show_err ( $lang[err_inapp5] ); exit; }

        $sql="insert into request_audio_I set vid='$vidid', uid='$_SESSION[UID]', from_uid='$vuid', date='".date("Y-m-d H:i:s")."' ,reason='$reason'";
	$rs=mysql_query($sql);
	$mid=mysql_insert_id();

	if (mysql_affected_rows()>0)
	{
	    $fm = $config['admin_email'];
	    $receiver = $config['admin_name'];
	    if ($fm!='' and check_email_address($fm) and $config['mail_not6'] == '1' and $err == '')
	    {
		$mtype='mail_not6'; 
		$file='request_audio_I';
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
        $list=key_to_info_audio($key1);
        $vidid=$list[0];
        $vuid=$list[1];
	$feat=$list[13]; if($feat=="yes") { echo "<font color=red>$lang[err_inapp7]</font>"; exit; }
	
	$trs=$conn->execute("select * from request_audio_F where vid='$vidid'");
	if ($trs->recordcount()>0) { echo show_err ( $lang[err_inapp5] ); exit; }
	
        $sql="insert into request_audio_F set vid='$vidid', uid='$_SESSION[UID]', from_uid='$vuid', date='".date("Y-m-d H:i:s")."' ,reason='$reason'";
	$rs=mysql_query($sql);
	$mid=mysql_insert_id();

	if (mysql_affected_rows()>0)
	{
	    $fm = $config['admin_email'];
	    $receiver = $config['admin_name'];
	    if ($fm!='' and check_email_address($fm) and $config['mail_not6'] == '1' and $err == '')
	    {
		$mtype='mail_not6'; 
		$file='request_audio_F';
		send_notification($fm, $receiver, $_SESSION[USERNAME], $mtype, $mid, $file); 
	    }
    	    echo show_msg ( $lang[not_request] ); exit;
	}
	else { echo show_err ( $lang[err_inapp8] ); exit; }
    }
}
?>