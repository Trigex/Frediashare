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

if (!isset($_SESSION['lang'])) session_start();
if (!isset($_SESSION['viewmode'])) $_SESSION['viewmode']="grid";
if (!isset($_SESSION['videotags'])) $_SESSION['videotags']="off";
if (!isset($_SESSION['imagetags'])) $_SESSION['imagetags']="off";
if (!isset($_SESSION['audiotags'])) $_SESSION['audiotags']="off";
if (!isset($_SESSION['mytags'])) $_SESSION['mytags']="off";

ini_set('error_reporting', E_ALL & ~E_NOTICE);
ini_set('display_errors', '1');

require 'config.main.php';

$config['config_dir']  = $config['base_dir'] . '/configs';
$config['include_dir'] = $config['base_dir'] . '/includes';
$config['cache_dir']   = $config['base_dir'] . '/media/cache';
$config['class_dir']   = $config['base_dir'] . '/configs/classes';
$config['admin_url']   = $config['base_url'] . '/administration';
$config['admin_dir']   = $config['base_dir'] . '/administration';

include $config['config_dir'] . '/dirs.php';
require_once $config['config_dir'] . '/version.php';
require_once $config['config_dir'] . '/countries.php';
require_once $config['config_dir'] . '/smarty.php';
require_once $config['config_dir'] . '/functions.php';
require_once $config['class_dir'].'/adodb/adodb.inc.php';

$conn = &ADONewConnection ( $db_type );
$conn->Connect( $db_host, $db_user, $db_pass, $db_name );

$sql = "select * from configurations";
$rsc = $conn->Execute($sql);
if($rsc) {
    while(!$rsc->EOF) {
	$field = $rsc->fields['option'];
	$config[$field] = $rsc->fields['value'];
	$smarty->assign($field, $config[$field]);
	@$rsc->MoveNext();
    }
}

//language check
if ( $_POST['hiddenlang'] != '' ) $_POST['hiddenlang'] = mysql_real_escape_string ( $_POST['hiddenlang'] );
if ( $_POST['hiddenlang'] != '' ) { 
    $lrs = $conn->execute("select file,cflag from languages where name='".mysql_real_escape_string($_POST['hiddenlang'])."'");
    $langs = $lrs->fields['file'];
    session_unregister ( $_SESSION['lang'] );
    session_register ( $_SESSION['lang'] );
    $_SESSION['lang'] = $langs;
    include("$config[base_dir]/modules/languages/$langs");
}
else {
    $rs1 = $conn->execute("select file,cflag from languages where def='1'");                                                                                            
    $def = $rs1->fields['file'];
    if ( $_SESSION['lang'] == '' ) { include $config['base_dir'].'/modules/languages/'.$def; $_SESSION['lang'] = $def; }
    else { include $config['base_dir'].'/modules/languages/'.$_SESSION[lang]; }
}
checklang();

$cf = $conn->execute("select cflag from languages where file='".$_SESSION['lang']."';");
$lang_flag = $cf->fields['cflag'];
$arr_cc = getarrayccode($lang_flag);
$locale = getarraylocale($arr_cc).'.UTF8';

setlocale(LC_ALL, $locale);
setlocale(LC_TIME, $locale);

if ( $config['landing_page'] == '1' ) { //landing page
    if ( !isset ( $_SESSION['landed'] ) or $_SESSION['landed'] != '1' ) {
	$year = $_POST['StartDateYear'];
	$month = $_POST['StartDateMonth'];
	$day = $_POST['StartDateDay'];
	$udate = $year.'-'.$month.'-'.$day;
	$yeardiff = getage($udate);
	
	if ( $yeardiff < 18 and ( strpos ( $_SERVER[REQUEST_URI], 'administration' ) === false and strpos ( $_SERVER[REQUEST_URI], 'vPlayer' ) === false ) ) { 
    	    $_SESSION['landed'] = '0'; 
    	    set_btn('bhome'); set_sbtn('lpage'); set_title($title);
	    $smarty->display('static/lpage.tpl');
	    exit; 
	} elseif ( $yeardiff < 18 and ( strpos ( $_SERVER[REQUEST_URI], 'administration' ) === true ) ) { } 
	elseif ( $yeardiff > 17 ) { 
	    $_SESSION['landed'] = '1'; 
	}
    }
}

if ( $config['thumb_bg'] == '' ) {
    if ( $config['site_theme'] == 'black' ) $thbg = '111111';
    elseif ( $config['site_theme'] == 'blue' ) $thbg = 'ebf6fd';
    elseif ( $config['site_theme'] == 'orange' ) $thbg = 'efefef';
    $conn->execute("update configurations set value='$thbg' where configurations.option='thumb_bg';");
}

if ( !is_array ( $_SESSION ) ) $_SESSION = array_map ( 'mysql_real_escape_string', $_SESSION );

//ban check
$rem_ip = $_SERVER['REMOTE_ADDR']; 
$br1 = $conn->execute("select v.*, s.* from members v, banned_users s where v.is_active='1' and s.active='1' and v.from_ip='$rem_ip' and (s.ban_uid='$_SESSION[UID]' or s.ban_name='$_SESSION[USERNAME]');");
if ( $conn->Affected_Rows() > 0 ) { echo "<script type=\"text/javascript\">alert('".$br1->fields['ban_msg']."'); location='".$br1->fields['ban_url']."';</script>"; exit; }
else {
    $br = $conn->execute("select v.*, s.* from members v, banned_users s where v.is_active='1' and s.active='1' and (s.ban_uid='$_SESSION[UID]' or s.ban_name='$_SESSION[USERNAME]');"); 
    if ( $conn->Affected_Rows() > 0 ) { echo "<script type=\"text/javascript\">alert('".$br->fields['ban_msg']."'); location='".$br->fields['ban_url']."';</script>"; exit; }
}
//delete password recovery requests older than X hours
if ( isset ( $_REQUEST['pid'] ) ) $pid = filter_title ( $_REQUEST['pid'] );
$pq = $conn->execute("select photo from activation_codes where fcode='reset';");
if ( $pq->recordcount() > 0 ) {
    $ptime = strtotime("-".$config['recoverylinktime']." hours");
    $conn->execute("delete from activation_codes where fcode='reset' and photo < '$ptime';");
}
$rq = $conn->execute("select photo from activation_codes where code='$pid';");
if ( $rq->recordcount() > 0 ) {
    $now = time();
    $due = substr ( $now - ( $rq->fields['photo'] + ( $config['recoverylinktime'] * 3600 ) ), 1 );
    $smarty->assign('due', $due);
}
//delete email sendings older than 1 hour
$ct = $conn->execute("select e_try, e_time from email_usage where e_ip = '$rem_ip' order by e_try asc limit 0,1;");
$ctry = $ct->fields['e_try'];
$ctime = $ct->fields['e_time'];
if ( $ctime > strtotime ( "-60 minutes" ) ) {  /* echo "not passed"; */  } else { $conn->execute("delete from email_usage where e_ip = '$rem_ip' and e_try = '$ctry';"); }
//delete null responses older than 20 min
$rt = $conn->execute("select rtime from file_responses where rvid='0' limit 0,1;");
$rtime = $rt->fields['rtime'];
if ( $rtime > strtotime ( "-20 minutes" ) ) {  /* echo "not passed"; */  } else { $conn->execute("delete from file_responses where rvid='0' and rtime='$rtime';"); }
//delete any null image entries
$conn->execute("delete from files_image where vname='' and vduration='0';");
//session activity
if ( $_SESSION['UID'] != '' ) {
    $last_act=time(); $conn->execute("update members set is_logged='1', last_activity='$last_act' where uid='$_SESSION[UID]'"); 
}
$mtime = strtotime("-15 minutes");
$qu = "select * from members where is_logged='1' and last_activity < '$mtime'";
$rs = $conn->execute($qu);
if($rs) {
    while(!$rs->EOF) {
	$user = $rs->fields['username'];
	$conn->execute("update members set is_logged='0' where username='$user'");
	@$rs->MoveNext();
    }
}
//quicklist count
if ( $_SESSION['UID'] == '' ) { 
    $vt = $conn->execute("select count(*) as vtotal from quicklist_video where uid='0' and quicklist_ip='".$rem_ip."';");
    $it = $conn->execute("select count(*) as itotal from quicklist_image where uid='0' and quicklist_ip='".$rem_ip."';");
    $at = $conn->execute("select count(*) as atotal from quicklist_audio where uid='0' and quicklist_ip='".$rem_ip."';");
} else {
    $vt = $conn->execute("select count(*) as vtotal from quicklist_video where uid='".$_SESSION['UID']."';");
    $it = $conn->execute("select count(*) as itotal from quicklist_image where uid='".$_SESSION['UID']."';");
    $at = $conn->execute("select count(*) as atotal from quicklist_audio where uid='".$_SESSION['UID']."';");
}
$vtotal = $vt->fields['vtotal'];
$itotal = $it->fields['itotal'];
$atotal = $at->fields['atotal'];
$qtotal = $vtotal + $itotal + $atotal;
$smarty->assign('qtotal', $qtotal); $smarty->assign('atotal', $atotal); $smarty->assign('itotal', $itotal); $smarty->assign('vtotal', $vtotal);
//subscribers update
$conn->execute("update members set ch_subs='".subs_count ( $_SESSION['UID'] )."' where uid='".$_SESSION['UID']."';");
$smarty->assign('base_url',$config['base_url']);
$smarty->assign('base_dir',$config['base_dir']);
$smarty->assign('admin_url',$config['admin_url']);
?>