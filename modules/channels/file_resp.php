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
check_login();

if ( $config['file_responses'] == '0' ) { header("Location: $config[base_url]/main"); exit; }

if ( isset ( $_GET['rtype'] ) ) $rtype = filter_title ( $_GET['rtype'] );
if ( isset ( $_GET['rto'] ) ) $rto = filter_title ( $_GET['rto'] );
if ( isset ( $_POST['submitresp'] ) ) $submitresp = filter_title ( $_POST['submitresp'] );
if ( isset ( $_POST['submitnew'] ) ) $submitnew = filter_title ( $_POST['submitnew'] );
if ( isset ( $_POST['myv'] ) ) $myv = filter_title ( $_POST['myv'] );

if ( $submitresp != '' and ( $mya == 'none' or $myi == 'none' or $myv == 'none' ) ) { $err = $lang['err_nofilesel']; }

$vi = $conn->execute("select vid,uid,vtitle,is_fileresp from files_".$rtype." where vkey='$rto';");
$vid = $vi->fields['vid'];
$vuid = $vi->fields['uid'];
$vtitle1 = $vi->fields['vtitle'];
$vtitle = ereg_replace(" {1,}", "_", $vtitle1);
$is_fileresp = $vi->fields['is_fileresp'];
$smarty->assign('vid', $vid);
$smarty->assign('vuid', $vuid);

if ( $is_fileresp == 'yes' ) $app = ''; elseif ( $is_fileresp == 'app' ) $app = ", approved='0'"; elseif ( $is_fileresp == 'no' ) $err = $lang['fresp_txt22'];
//add response
if ( $err == '' ) { 
    if ( ( $rtype == 'video' and $myv == $vid ) or ( $rtype == 'image' and $myi == $vid ) or ( $rtype == 'audio' and $mya == $vid ) ) { $err = $lang['fresp_txt18']; }
    if ( $err == '' and $submitresp != '' ) {
	if ( $myv != 'none' ) $rvid = $myv; 
	
	$cr = $conn->execute("select rvid, rtovid from file_responses where rtype='$rtype' and rvid='$rvid';");
	if ( $cr->recordcount() > 0 ) {
	    $rto2 = $cr->fields['rtovid'];
	    $conn->execute("delete from file_responses where rtype='$rtype' and rvid='$rvid';");
	    if ( $conn->Affected_Rows() > 0 && $err == '' ) { $conn->execute("update files_".$rtype." set responses=responses-1 where vid='$rto2';"); }
	}
	$conn->execute("insert into file_responses set rtype='$rtype', rvid='$rvid', rtovid='$vid', ruid='$vuid', resuid='$_SESSION[UID]', rtime='".time()."' $app;");
	if ( $conn->Affected_Rows() > 0 && $err == '' ) { 
	    $conn->execute("update files_".$rtype." set responses=responses+1 where vkey='$rto';");

	    if ( $is_fileresp == 'yes' ) $msg = $lang['fresp_txt19']; 
	    if ( $is_fileresp == 'app' ) $msg = $lang['fresp_txt20'];
	    send_response_notice( $vuid, $rvid, $rtype, $vtitle1 );
	} else $err = $lang['fresp_txt21'];
    }
}

//own file list
if ( ( $config['enable_audio'] == '1' and $rtype == 'audio' ) or ( $config['enable_images'] == '1' and $rtype == 'image' ) or ( $config['enable_videos'] == '1' and $rtype == 'video' ) ) {
    $sqlv="select * from files_".$rtype." where (uid='$_SESSION[UID]') and (vtype='public') and (is_inapp='no') and (active='1') and (vid!='$vid') order by vtitle asc;";
    $rsv=$conn->execute($sqlv);
    $myvid=$rsv->getrows();
    if ( $rtype == 'audio' ) $myv=$lang['inbox_aselfr']; elseif ( $rtype == 'image' ) $myv=$lang['inbox_iselfr']; elseif ( $rtype == 'video' ) $myv=$lang['inbox_vselfr'];
    $smarty->assign('myv', $myv);
    $smarty->assign('myvid', $myvid);
    $rsv->Close();
}

//$smarty->assign('dmenu','mysubs');
$smarty->assign('dmenu', 'mymsg');
$smarty->assign('rtype', $rtype);
$smarty->assign('rkey', $rto);
set_btn("bhome"); set_sbtn("resp"); set_title($lang['fresp_txt6']);
$smarty->assign('err',$err); $smarty->assign('msg',$msg);
$smarty->display('main_header.tpl');
if ( ( $err != '' and $err != $lang['fresp_txt22'] ) or $err == '' ) $smarty->display('main_fileresp.tpl');
$smarty->display('footer.tpl');
?>