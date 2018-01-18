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
if ( $config['enable_channels'] == '0' ) { header('Location: '.$config['base_url'].'/my_profile_info'); exit; }
check_login('my_profile_shows');

$save_btn = filter_title ( $_POST['chsave_events'] );
$update_btn = filter_title ( $_POST['chupdate_events'] );
$del_btn = filter_title ( $_POST['chdel_events'] );

if ( $_SESSION['UID'] != '' ) {
    $ct = $conn->execute("select ch_type from members where uid='$_SESSION[UID]';");
    $cht = $ct->fields['ch_type'];
    if ( $cht != '3' and $cht != '4' ) { illegal_op(); exit; }
}
$smarty->assign('sh_ubtn', '0');


if ( $del_btn != '' ) {
    $ch_upid = filter_title($_POST['ch_upid']);
    $conn->execute("delete from member_shows where s_uid='".$_SESSION['UID']."' and s_key='".$ch_upid."';");
    if ( $conn->Affected_Rows() > 0 ) { header ("Location: $config[base_url]/my_profile_shows"); $msg = $lang['pr_chinfom52']; } else $err = $lang['pr_chinfom53'];
}

if ( $update_btn != '' ) {
    $ch_upid = filter_title($_POST['ch_upid']);
    $p_ftimeh = filter_descr($_POST['ftimeh']);
    $p_ftimem = filter_descr($_POST['ftimem']);
    $p_fvenue = filter_descr($_POST['fvenue']);
    $p_faddr = filter_descr($_POST['faddr']);
    $p_fcity = filter_descr($_POST['fcity']);
    $p_fzip = filter_descr($_POST['fzip']);
    $p_fcountry = filter_descr($_POST['fcountry']);
    $p_fdescr = filter_descr($_POST['fdescr']);
    $p_ftickets = filter_descr($_POST['ftickets']);
    if ( $config['date_selection'] == 'css' ) $p_ffdate = filter_descr($_POST['ffdate']);
    else {
        $bd_m = filter_descr ( $_POST['ev_Month'] );
        $bd_d = filter_descr ( $_POST['ev_Day'] );
        $bd_y = filter_descr ( $_POST['ev_Year'] );
        $p_ffdate = $bd_y.'-'.$bd_m.'-'.$bd_d;
    }

    
    if ( $p_ffdate == '' ) $err = $lang['pr_chinfom41'];
    elseif ( $p_fvenue == '' ) $err = $lang['pr_chinfom42'];
    elseif ( $p_fcountry == '' or $p_fcountry == $lang['pr_chinfop36'] ) $err = $lang['pr_chinfom43'];
    elseif ( $p_fdescr == '' ) $err = $lang['pr_chinfom44'];
    elseif ( $p_ftickets != '' ) {
	if ( substr ( $p_ftickets, 0, 7 ) != 'http://' and substr ( $p_ftickets, 0, 8 ) != 'https://' ) $p_ftickets = 'http://'.$p_ftickets;
        if ( ( stripos ( $p_ftickets, 'javascript' ) !== false ) or ( stripos ( $p_ftickets, '.js' ) !== false ) or ( stripos ( $p_ftickets, 'onclick' ) !== false ) or ( stripos ( $p_ftickets, 'onmouse' ) !== false) ) $err = $lang['err_eurl'];
    } //elseif ( strtotime ( $p_ffdate ) > strtotime ( date ( "Y-m-d" ) ) ) $err = $lang['err_mypr14'];
    
    if ( $err == '' ) {
	$conn->execute("update member_shows set s_date='".$p_ffdate."', s_timeh='".$p_ftimeh."', s_timem='".$p_ftimem."', s_venue='".$p_fvenue."', s_addr='".$p_faddr."', s_city='".$p_fcity."', s_zip='".$p_fzip."', s_country='".$p_fcountry."', s_descr='".$p_fdescr."', s_ticket='".$p_ftickets."' where s_uid='".$_SESSION['UID']."' and s_key='".$ch_upid."' and active='1';");
	if ( $conn->Affected_Rows() > 0 ) { $msg = $lang['pr_chinfom46']; $smarty->assign('sh_ubtn', '1'); $smarty->assign('sh_ushow', $ch_upid); } else { /*$err = $lang['pr_chinfom47'];*/ $smarty->assign('sh_ubtn', '0'); }
    }
}

if ( $save_btn != '' ) {
    //$p_ffdate = filter_descr($_POST['ffdate']);
    $p_ftimeh = filter_descr($_POST['ftimeh']);
    $p_ftimem = filter_descr($_POST['ftimem']);
    $p_fvenue = filter_descr($_POST['fvenue']);
    $p_faddr = filter_descr($_POST['faddr']);
    $p_fcity = filter_descr($_POST['fcity']);
    $p_fzip = filter_descr($_POST['fzip']);
    $p_fcountry = filter_descr($_POST['fcountry']);
    $p_fdescr = filter_descr($_POST['fdescr']);
    $p_ftickets = filter_descr($_POST['ftickets']);
    if ( $config['date_selection'] == 'css' ) $p_ffdate = filter_descr($_POST['ffdate']);
    else {
        $bd_m = filter_descr ( $_POST['ev_Month'] );
        $bd_d = filter_descr ( $_POST['ev_Day'] );
        $bd_y = filter_descr ( $_POST['ev_Year'] );
        $p_ffdate = $bd_y.'-'.$bd_m.'-'.$bd_d;
    }
    
    if ( $p_ffdate == '' ) $err = $lang['pr_chinfom41'];
    elseif ( $p_fvenue == '' ) $err = $lang['pr_chinfom42'];
    elseif ( $p_fcountry == '' or $p_fcountry == $lang['pr_chinfop36'] ) $err = $lang['pr_chinfom43'];
    elseif ( $p_fdescr == '' ) $err = $lang['pr_chinfom44'];
    elseif ( $p_ftickets != '' ) {
	if ( substr ( $p_ftickets, 0, 7 ) != 'http://' and substr ( $p_ftickets, 0, 8 ) != 'https://' ) $p_ftickets = 'http://'.$p_ftickets;
        if ( ( stripos ( $p_ftickets, 'javascript' ) !== false ) or ( stripos ( $p_ftickets, '.js' ) !== false ) or ( stripos ( $p_ftickets, 'onclick' ) !== false ) or ( stripos ( $p_ftickets, 'onmouse' ) !== false) ) $err = $lang['err_eurl'];
    } //elseif ( strtotime ( $p_ffdate ) > strtotime ( date ( "Y-m-d" ) ) ) $err = $lang['err_mypr14'];
    
    if ( $err == '' ) {
	$s_key = gen_show_key();
	$conn->execute("insert into member_shows set s_uid='".$_SESSION['UID']."', s_key='".$s_key."', s_date='".$p_ffdate."', s_timeh='".$p_ftimeh."', s_timem='".$p_ftimem."', s_venue='".$p_fvenue."', s_addr='".$p_faddr."', s_city='".$p_fcity."', s_zip='".$p_fzip."', s_country='".$p_fcountry."', s_descr='".$p_fdescr."', s_ticket='".$p_ftickets."';");
	if ( $conn->Affected_Rows() > 0 ) { $msg = $lang['pr_chinfom46']; $smarty->assign('sh_ubtn', '1'); $smarty->assign('sh_ushow', $s_key); } else { /*$err = $lang['pr_chinfom47'];*/ $smarty->assign('sh_ubtn', '0'); }
    }
}

$rs = $conn->execute("select * from member_shows where s_uid = '$_SESSION[UID]' and active='1';");
$smarty->assign('shows', $rs->getrows());

$rs = $conn->execute("select * from member_info where p_uid = '$_SESSION[UID]';");
$smarty->assign('uinfo', $rs->getrows());
if ( filter_title ( $_GET['edit_show'] != '' ) ) {
    $sk = filter_title ( $_GET['edit_show'] );
    $rs = $conn->execute("select * from member_shows where s_uid = '$_SESSION[UID]' and active='1' and s_key='".$sk."';");
    $smarty->assign('sinfo', $rs->getrows());
    $smarty->assign('sh_ushow', $sk);
}
$rs = $conn->execute("select * from members where uid = '$_SESSION[UID]';");
$p_type = $rs->fields['ch_type'];
$smarty->assign('minfo', $rs->getrows());
$smarty->assign('dmenu', 'mymsg');
set_btn('bhome'); set_sbtn('shows'); set_title($lang['title_myprofile']);
$smarty->assign('msg', $msg); $smarty->assign('err', $err);
$smarty->assign('chs', 's6');
$smarty->display('main_header.tpl');
$smarty->display('main_profilepage.tpl');
$smarty->display('footer.tpl');
?>