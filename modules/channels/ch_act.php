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

$blocksave_btn = filter_title ( $_POST['ch_blockbtn'] );
$friendsave_btn = filter_title ( $_POST['ch_friendbtn'] );
$type = filter_title ( $_GET['type'] );

if ( $type == 'block' ) { //block user
    $ch_blockeduid = filter_title ( $_POST['ch_blockeduid'] );
    $ch_blockedname = filter_title ( $_POST['ch_blockedname'] );
    if ( $ch_blockeduid == $_SESSION['UID'] ) $err = $lang['uch_shtxt9'];
    if ( $err == '' ) {
	$sql_up="update blocked_users set active='1' where blocker_uid='$_SESSION[UID]' and blocked_uid='$ch_blockeduid'";
	$sql_add="insert into blocked_users set blocker_uid='$_SESSION[UID]', blocker_name='$_SESSION[USERNAME]', blocked_uid='$ch_blockeduid', blocked_name='$ch_blockedname', active='1'";
	
	$res_up=$conn->execute($sql_up);
	if($conn->Affected_Rows()==0) { $res_add=$conn->execute($sql_add); }
	if($conn->Affected_Rows()==0) $err=$lang['err_msgcompose16'];
	else $msg=$lang['not_inboxblock1']; 
    }
} elseif ( $type == 'friend' ) { //add to friends
    $ch_frienduid = filter_title ( $_POST['ch_frienduid'] );
    $ch_friendname = filter_descr ( $_POST['ch_friendname'] );
    $che = $conn->execute("select email from members where username='$ch_friendname';");
    $ch_email = $che->fields['email'];
    if ( $ch_frienduid == $_SESSION['UID'] ) { $err = $lang[err_pr2]; }
    if ( $err == '' ) {
	$sql="insert into friends set uid='$_SESSION[UID]', fname='$ch_friendname', femail='$ch_email', add_date='".date("Y-m-d H:i:s")."', fstatus='Confirmed'";
	$rs = mysql_query($sql);
	if ( mysql_affected_rows() > 0 ) { $msg = $lang['not_prfriends']; } else $err = $lang['err_pr3'];
    }
} elseif ( $type == 'subs' or $type == 'unsubs' ) { //subscribe,unsubscribe
    if ( $_SESSION['UID'] == '' ) { die; }
    $stype = filter_title ( $_GET['stype'] );
    if ( $stype == '' ) $stype = 'user';
    $subto_uid = filter_title ( $_GET['userid'] );
    $subto_user = filter_title ( $_GET['username'] );
    $subfrom_uid = filter_title ( $_SESSION['UID'] );
    $subfrom_name = filter_title ( $_SESSION['USERNAME'] );
    $itt = filter_title ( $_GET['itt'] );

    if ( $stype == 'user' ) $subtypes = $lang['plist_txt68']; elseif ( $stype == 'fav' ) $subtypes = $lang['plist_txt69']; else $subtypes = $lang['plist_txt70'];
    if ( $stype != 'user' and $stype != 'fav' ) { 
	$skey = substr ( $stype, 3 );
	$stype2 = substr ( $stype, 2 );
	$stype2 = $stype2[0];
	$stype = 'pl'.$stype2.$skey;
    }
    
    if ( $subto_uid == $_SESSION['UID'] or $subto_user == $_SESSION['USERNAME'] ) $err = $lang['uch_shtxt10'];
    $sto = $conn->execute("select uid from members where uid = '$subto_uid';");
    if ( $sto->recordcount() > 0 ) {
	if ( $type == 'subs' ) $rsu = $conn->execute("insert into subscriptions set stype = '".$stype."', subscription_time = '". time() ."', subscriber_uid = '$subfrom_uid', subscriber_name = '$subfrom_name', subscribed_uid = '$subto_uid', subscribed_name = '$subto_user';");
	if ( $type == 'unsubs' ) { 
	    if ( $itt != '' ) { 
		if ( filter_title ( $_GET['iss'] == '1' ) ) {
		    $rsu = $conn->execute("delete from subscriptions where stype = '".$stype."' and subscriber_uid = '$subfrom_uid' and subscriber_name = '$subfrom_name' and subscribed_uid = '$subto_uid' and subscribed_name = '$subto_user';");
		}
		else $rsu = $conn->execute("delete from subscriptions where stype = '".$stype."' and subscribed_uid = '$_SESSION[UID]' and subscribed_name = '$_SESSION[USERNAME]';"); 
	    }
	    else $rsu = $conn->execute("delete from subscriptions where stype = '".$stype."' and subscriber_uid = '$subfrom_uid' and subscriber_name = '$subfrom_name' and subscribed_uid = '$subto_uid' and subscribed_name = '$subto_user';");
	}
	
	if ( mysql_affected_rows() > 0 ) { 
	    if ( $type == 'subs' ) { 
		if ( $itt != '' ) $msg = $lang['uch_shtxt11'];
		else $msg = $lang['uch_shtxt11'];
	    }
	    elseif ( $type == 'unsubs' ) { 
		if ( $itt != '' ) $msg = $lang['uch_shtxt111'];
		else $msg = $lang['uch_shtxt111'];
	    }
	} else {
	    if ( $type == 'subs' ) { 
		if ( $itt != '' ) $err = $lang['uch_shtxt12']; 
		else $err = $lang['uch_shtxt12']; 
	    }
	    elseif ( $type == 'unsubs' ) { 
		if ( $itt != '' ) $err = $lang['uch_shtxt13']; 
		else $err = $lang['uch_shtxt13']; 
	    }
	}
    } else { die; }
}

if ( $err == '' ) { 
    if ( $type == 'subs' and $config['subscribe_files_not'] == '1' ) {
	$re = $conn->execute("select email from members where uid = '$subto_uid';");
	$email = $re->fields['email'];
	$from = $config['admin_email'];
	$name = $config['admin_name'];
	$smarty->assign('username', $subto_user);
	$smarty->assign('sender', $subfrom_name);
	if ( $subtypes == $lang['plist_txt70'] ) {
	    if ( $stype2 == 'a' ) { $t1 = 'playlist_audio'; $t2 = $lang['plist_txt71']; } elseif ( $stype2 == 'i' ) { $t1 = 'playlist_image'; $t2 = $lang['plist_txt72']; } elseif ( $stype2 == 'v' ) { $t1 = 'playlist_video'; $t2 = $lang['plist_txt73']; }
	    $vp = $conn->execute("select pname from ".$t1." where vkey='".$skey."'");
	    $vpname = $vp->fields['pname'];
	    $subtypes = $t2.'"'.$vpname.'"';
	}
	$smarty->assign('subtypes', $subtypes);
	
	$ru = $conn->execute("select email_subject, email_path from email_files where email_id='subscribe_files'");
	if ( $ru->recordcount() > 0 ) {
	    $subj = $ru->fields['email_subject'];
	    $subj = str_replace('$username',$subfrom_name,$subj);
	    $subj = str_replace('$subtypes',$subtypes,$subj);
	    $path = $ru->fields['email_path'];
	    $body = $smarty->fetch($path);
	    mailto ($email, $name, $from, $subj, $body);
	}
    }
    echo show_msg ( $msg );
} else { echo show_err ( $err ); }
exit;
?>