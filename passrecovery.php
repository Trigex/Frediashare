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
check_active();

$user=filter_title($_POST['recuser']);
$email=filter_descr($_POST['recemail']);
$send=filter_title($_POST['recsend']);
$senduser=filter_title($_POST['recrecsendemail']);
if (isset($_GET['step'])) $c=filter_title($_GET['step']);
if (isset($_REQUEST['pid'])) $pid=filter_title($_REQUEST['pid']);

if ( isset ( $senduser ) and $c == 'user' ) {
    if ( $config['username_recovery'] == '0' ) { illegal_op(); exit; }
    
    if ( !check_email_address ( $email ) ) $err = $lang['err_signup10'];
    elseif ( !check_field_exists($email,'email','members') == 1 ) $err = $lang['usererr'];
    
    if ( $err == '' ) {
	$rs = $conn->execute("select uid, username, email, is_active from members where email='$email';");
	if ( $rs->recordcount() > 0 ) {
	    $from = $config['admin_email'];
	    $name = $config['admin_name'];
	    $smarty->assign('pass_ip_request', $_SERVER['REMOTE_ADDR']);
	    $smarty->assign('reg_user', $rs->fields['username']);
	    $ru = $conn->execute("select email_subject, email_path from email_files where email_id='user_recover'");
	    
	    if ( $ru->recordcount() > 0 ) {
		$subj = $ru->fields['email_subject']; 
		$subj = str_replace('$config[site_name]',$config[site_name],$subj);
		$path = $ru->fields['email_path'];
		$body = $smarty->fetch($path);
	    
		if ( mailto ($email, $name, $from, $subj, $body ) == '' )  { echo show_msg ( $lang['notusendforgot'] ); exit; }
	    }
	} else $err = $lang['usererr'];
    }
    
    //if ( $err != '' ) { echo '<font color="red"><b>'.$err.'</b></font>'; exit; }
    if ( $err != '' ) { echo show_err ( $err ); exit; }
}

if ( isset ( $send ) and $c == 'confirm' ) {
    if ( $config['password_recovery'] == '0' ) { illegal_op(); exit; }
    
    if (strlen($user)<3) { echo show_err ( $lang['err_meminvalid'] ); exit; }
    elseif (strlen($user)>15) { echo show_err ( $lang['err_meminvalid'] ); exit; }
    
    $rs = $conn->execute("select uid, username, email, is_active from members where username='$user';");
    if ( $rs->recordcount() > 0 ) {
	$email = $rs->fields['email'];
	$act = $rs->fields['is_active'];
	$uid = $rs->fields['uid'];
	$from = $config['admin_email'];
	$name = $config['admin_name'];
	
	if( $act == '0' ) { echo show_err ( $lang['err_meminactive'] ); exit; }
	elseif ( $act == '1' ) {
	    $rc = $conn->execute("select * from activation_codes where uid='$uid' and fcode='reset';");
	    if ( $rc->recordcount() > 0 ) { $conn->execute("delete from activation_codes where uid='$uid' and fcode='reset';"); }
	    
	    $randstr="23456789QWERTYUPADFGHJLZXCVBNMqwertyuiopasdfghjklzxcvbnm-_";
	    while ( $i < 30 ) {
		$char = substr($randstr,mt_rand(0,strlen($randstr)-1),1);
		if (!strstr($rnd,$char)) {
		    $rnd.=$char;
		    $i++;
		}
	    } 
	    
	    $smarty->assign('pass_reset_link', $config['base_url'].'/reset_password/'.$rnd);
	    $smarty->assign('pass_ip_request', $_SERVER['REMOTE_ADDR']);
	    $ru = $conn->execute("select email_subject, email_path from email_files where email_id='pass_recover'");
	    if ( $ru->recordcount() > 0 ) {
		$act_time = time();
		$subj = $ru->fields['email_subject'];
		$subj = str_replace('$config[site_name]',$config[site_name],$subj);
		$path = $ru->fields['email_path'];
		$body = $smarty->fetch($path);
		
		mysql_query("insert into activation_codes set uid='$uid', code='$rnd', fcode='reset', photo='$act_time';");
		if ( mysql_affected_rows() > 0 ) {
		    if ( mailto ($email, $name, $from, $subj, $body ) == '' )  { echo show_msg ( $lang['notsendforgot'] ); exit; }
		}
	    } else echo show_err ( $lang['err_memdb'] );
	}
    } else { echo show_err ( $lang['err_memnotreg'] ); exit; }
}


if ( $c == 'reset' ) {
    if ( $config['password_recovery'] == '0' ) { illegal_op(); exit; }
    
    if ( isset ( $_REQUEST['resetme'] ) ) $reset = filter_title($_REQUEST['resetme']);
    if ( isset ( $_REQUEST['newpass1'] ) ) $newpass1 = mysql_real_escape_string ( $_REQUEST['newpass1'] );
    if ( isset ( $_REQUEST['newpass2'] ) ) $newpass2 = mysql_real_escape_string ( $_REQUEST['newpass2'] );
    
    $rs = $conn->execute("select uid from activation_codes where code='$pid' and fcode='reset';");
    if ( $rs->recordcount() > 0 ) { $ruid = $rs->fields['uid']; } else { $err = $lang['err_illegalop']; }
    
    if ( $reset != '' and $err == '' ) {
	if ( $_REQUEST['newpass1'] == '' or $_REQUEST['newpass2'] == '' ) $err = $lang['passerr'];
	elseif ( strlen ( $newpass1 ) < $config['pp_pmin'] or strlen ( $newpass2 ) < $config['pp_pmin'] or strlen ( $newpass1 ) > $config['pp_pmax'] or strlen ( $newpass2 ) > $config['pp_pmax'] ) $err = $lang['err_mypr5'];
	elseif ( $newpass1 != $newpass2 ) $err = $lang['err_mypr4'];
    }
    
    if ( $reset != '' and $err == '' ) {
	$newpass = md5 ( $newpass1 );
	$prs = $conn->execute("update members set password='$newpass' where uid='$ruid';");
	if ( mysql_affected_rows() > 0 ) {
	    $conn->execute("delete from activation_codes where code='$pid' and fcode='reset';");
	    $msg = $lang['adm_memmsg2'];
	}
    }
    
    set_btn("bhome"); set_sbtn("reg"); set_title($config['site_name']);
    $smarty->assign('err', $err); $smarty->assign('msg', $msg);
    $smarty->display('main_header.tpl');
    $smarty->display('reset_password.tpl');
    $smarty->display('footer.tpl');
    exit;
}

?>