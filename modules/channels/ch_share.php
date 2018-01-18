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
include('../../configs/config.php');
//check_login();

$save_btn = filter_title ( $_POST['ch_send'] );
$ch_text = $_POST['ch_text'];
$ch_name = filter_descr ( $_POST['ch_name'] );
$ch_addr = explode (",", mysql_real_escape_string ( $_POST['ch_addr'] ));
$ch_code = filter_title ( $_POST['ch_vcode'] );

if ( $ch_code=='') $err=$lang['err_signup13'];
elseif ( $ch_code!=$_SESSION['captcha']) $err=$lang['err_signup13'];
elseif ( count ( $ch_addr ) > 3 or count ( $ch_addr ) < 1 ) $err = $lang['err_femail5'];
elseif ( strlen ( $ch_text ) > 300 ) $err = $lang['uch_shtxt4'];

if ( $err == '' ) {
    $rs = $conn->execute("select * from email_files where email_id='share_channel'");
    $email_path = $rs->fields['email_path']; 
    $subj = $rs->fields['email_subject'];
    $subj = str_replace('$config[site_name]',$config[site_name],$subj);
    $smarty->assign('sndr', $_SESSION['USERNAME']);
    $smarty->assign('chmsg', $ch_text);
    $smarty->assign('chname', $ch_name);
    $body = $smarty->fetch($email_path);
    $rs->Close();
    
    for ( $i = 0; $i < count ( $ch_addr ); $i++ ) {
	$to = trim($ch_addr[$i]);
	if ( !check_email_address ( $to ) ) $err = $lang['err_signup10'];
	$from = $config['admin_email'];
	$name = $config['admin_name'];
	if ( $err == '' ) { 
	    $ip = $_SERVER['REMOTE_ADDR'];
		
	    $ct = $conn->execute("select e_try, e_time from email_usage where e_ip = '$ip' order by e_try desc limit 0,1;");
	    $ct1 = $conn->execute("SELECT count(*) as total from email_usage where e_ip = '$ip';");
	    $ctotal = $ct1->fields['total'];
	    $ctry = $ct->fields['e_try'];
	    $ctime = $ct->fields['e_time'];
	    
	    if ( $ctry == '' ) $ctry = 1; else $ctry = $ctry + 1;
	    if ( $ctime > strtotime ( "-60 minutes" ) and ( $ctotal == $config['emails_per_hour'] ) ) $err = $lang['uch_shtxt5'];
	
	    if ( $err == '' ) {
	        if ( $ctotal <= $config['emails_per_hour'] ) {
	    	    $c1 = $conn->execute("insert into email_usage set e_ip = '$ip', e_try = '".$ctry."', e_time = '".time()."';");
	    	    if ( mysql_affected_rows() > 0 ) { 
	    		if ( mailto ($to, $name, $from, $subj, $body ) == '' ) { $msg = $lang['admnot_memmsg']; } else { $err = $lang['adm_errmem4']; }
	    	    } else $err = $lang['uch_shtxt5'];
	        }
	    }
	}
    }
}
if ( $err == '' ) { echo show_msg ( $msg ); } else { echo show_err ( $err ); }
exit;
?>