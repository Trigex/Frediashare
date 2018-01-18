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

if (isset($_REQUEST['reg_user'])) { $reg_user=filter_descr($_REQUEST['reg_user']); $reg_user = ereg_replace(" {1,}", "_", $reg_user); }
if (isset($_REQUEST['reg_pass1'])) $reg_pass1=mysql_real_escape_string($_REQUEST['reg_pass1']);
if (isset($_REQUEST['reg_pass2'])) $reg_pass2=mysql_real_escape_string($_REQUEST['reg_pass2']);
if (isset($_REQUEST['reg_email'])) $reg_email=mysql_real_escape_string($_REQUEST['reg_email']);
if (isset($_REQUEST['reg_name'])) $reg_name=filter_title($_REQUEST['reg_name']);
if (isset($_REQUEST['reg_desc'])) $reg_desc=filter_descr($_REQUEST['reg_desc']);
if (isset($_REQUEST['reg_loc'])) $reg_loc=filter_title($_REQUEST['reg_loc']);
if (isset($_REQUEST['reg_country'])) $reg_country=strtoupper(filter_title($_REQUEST['reg_country']));
if (isset($_REQUEST['reg_web'])) $reg_web=filter_descr($_REQUEST['reg_web']);
if (isset($_REQUEST['reg_phone'])) $reg_phone=filter_descr($_REQUEST['reg_phone']);
if (isset($_REQUEST['reg_bdate'])) $reg_bdate=mysql_real_escape_string($_REQUEST['reg_bdate']);
if (isset($_REQUEST['gender'])) $gender=filter_title($_REQUEST['gender']);
if (isset($_REQUEST['sendemail'])) $sendemail=filter_title($_REQUEST['sendemail']);
if (isset($_REQUEST['activemember'])) $activemember=filter_title($_REQUEST['activemember']);
if (isset($_REQUEST['savebtn'])) $savebtn=filter_title($_REQUEST['savebtn']);
if (isset($_REQUEST['action'])) $act=filter_title($_REQUEST['action']);
if (isset($_REQUEST['reg_uid'])) $reg_uid=filter_title($_REQUEST['reg_uid']);

if($savebtn && $act=='add') //add member (admin)
{
    
    if($reg_user=='') $err=$lang['err_signup2'];
    elseif(strlen($reg_user)<$config[sp_umin] || strlen($reg_user)>$config[sp_umax]) $err=$lang['err_signup3'];
    elseif($reg_pass1=='') $err=$lang['err_signup4'];
    elseif($reg_pass2=='') $err=$lang['err_signup5'];
    elseif(strlen($reg_pass1)<$config[sp_pmin] || strlen($reg_pass2)<$config[sp_pmin] || strlen($reg_pass1)>$config[sp_pmax] || strlen($reg_pass2)>$config[sp_pmax]) $err=$lang['err_signup6'];
    elseif($reg_pass1!=$reg_pass2) $err=$lang['err_signup9'];
    elseif(check_field_exists($reg_user,'username','members')==1) $err=$lang['err_signup11'];
    elseif(check_field_exists($reg_email,'email','members')==1 && $reg_email!='') $err=$lang['err_signup12'];
    elseif($reg_email!='' && !check_email_address($reg_email)) $err=$lang['err_signup10'];
    elseif($sendemail) { if(!$reg_email && !check_email_address($reg_email)) $err=$lang['err_signup10']; }
    
    if($err=='')
    {
	$pass=md5($reg_pass1);
	$time = date("y-m-d H:i:s");
	$rem_ip = $_SERVER['REMOTE_ADDR'];
	$logged = '0';
	
	if(!$reg_bdate) $reg_bdate="1980-01-01";
	if($activemember) $active='1'; else $active='0';
	
	$conn->execute("insert into members set 
	    username='$reg_user', 
	    password='$pass', 
	    email='$reg_email', 
	    is_active='$active',
	    from_ip='$rem_ip',
	    reg_on='$time', 
	    photo='default.gif'");
	$userid=mysql_insert_id();
	
	if ($conn->Affected_Rows() > 0)
	{
	    $msg=$lang['adm_memnewm1'];
	    
	    if($sendemail)
	    {
		$name=$config['site_name'];
		$from=$config['admin_email'];
		$rs = $conn->execute("select * from email_files where email_id='welcome_message'");
		$subj = $rs->fields['email_subject'];
		$subj = str_replace('$username',$reg_user,$subj);
		$subj = str_replace('$config[site_name]',$config['site_name'],$subj);
		$email_path = $rs->fields['email_path'];
		$mailbody=$smarty->fetch($email_path); 
		
		if (mailto($reg_email,$name,$from,$subj,$mailbody)=='') $msg.=$lang['adm_memnewm3'];
		    else $msg.=$lang['adm_memnewm4'];
	    }
	
	    if ($err=='')
	    {
		$u='user';
		$dir=$u.$userid;

		if (!is_dir("$config[vdo_dir]/$dir"))
		{
		    if (@mkdir("$config[ado_dir]/$dir", 0777)) $msg.=$lang['adm_memnewm5']; else $msg.=$lang['adm_memnewm6'];
		    if (@chmod("$config[ado_dir]/$dir", 0777)) $msg.=$lang['adm_memnewm7']; else $msg.=$lang['adm_memnewm8'];
		}
		if (!is_dir("$config[pic_dir]/$dir"))
		{
		    if (@mkdir("$config[pic_dir]/$dir", 0777)) $msg.=$lang['adm_memnewm9'];  else $msg.=$lang['adm_memnewm10'];
		    if (@chmod("$config[pic_dir]/$dir", 0777)) $msg.=$lang['adm_memnewm11']; else $msg.=$lang['adm_memnewm12'];
		}
		if (!is_dir("$config[vdo_dir]/$dir"))
		{
		    if (@mkdir("$config[vdo_dir]/$dir", 0777)) $msg.=$lang['adm_memnewm13']; else $msg.=$lang['adm_memnewm14'];
		    if (@chmod("$config[vdo_dir]/$dir", 0777)) $msg.=$lang['adm_memnewm15']; else $msg.=$lang['adm_memnewm16'];
		}
		if (!is_dir("$config[flvdo_dir]/$dir"))
		{
		    if (@mkdir("$config[flvdo_dir]/$dir", 0777)) $msg.=$lang['adm_memnewm17']; else $msg.=$lang['adm_memnewm18'];
		    if (@chmod("$config[flvdo_dir]/$dir", 0777)) $msg.=$lang['adm_memnewm19']; else $msg.=$lang['adm_memnewm20'];
		}
		if (!is_dir("$config[tmb_dir]/$dir"))
		{
		    if (@mkdir("$config[tmb_dir]/$dir", 0777)) $msg.=$lang['adm_memnewm21']; else $msg.=$lang['adm_memnewm22'];
		    if (@chmod("$config[tmb_dir]/$dir", 0777)) $msg.=$lang['adm_memnewm23']; else $msg.=$lang['adm_memnewm24'];
		}
		
		$conn->execute("update members set folder='$dir' where uid='$userid'");
		if ($conn->Affected_Rows() > 0) $msg.=$lang['adm_memnewm25'];
		else $msg.=$lang['adm_memnewm26'];
	    }
	} else $msg=$lang['adm_memnewm2'];
    }
    if ($err=='') { echo show_msg ( $msg ); exit; }
    else { echo show_err ( $err ); exit; }
}
?>