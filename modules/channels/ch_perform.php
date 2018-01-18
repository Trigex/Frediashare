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
check_login('my_profile_performer');

$save_btn = filter_title ( $_POST['chsave_performer'] );

if ( $save_btn != '' ) {
    $ch_type = filter_descr ( $_POST['ch_type'] );
    
    if ( $ch_type == '2' or $ch_type == '4' or $ch_type == '5' or $ch_type == '6' ) {
	$p_about = filter_descr ( $_POST['fabout'] );
	$p_style = filter_descr ( $_POST['fstyle'] );
	$p_infl = filter_descr ( $_POST['finfl'] );
	$p_sim = filter_descr ( $_POST['fsim'] );
    } elseif ( $ch_type == '3' ) {
	$p_about = filter_descr ( $_POST['fabout'] );
	$p_style = filter_descr ( $_POST['fstyle'] );
	$p_bandmem = filter_descr ( $_POST['fbandmem'] );
	$p_reclabel = filter_descr ( $_POST['freclabel'] );
	$p_labeltype = filter_descr ( $_POST['flabeltype'] );
	$p_infl = filter_descr ( $_POST['finfl'] );
	$p_like = filter_descr ( $_POST['flike'] );
	$p_cover1 = filter_descr ( $_POST['fcover1'] );
	$p_link1 = filter_descr ( $_POST['flink1'] );
	$p_cover2 = filter_descr ( $_POST['fcover2'] );
	$p_link2 = filter_descr ( $_POST['flink2'] );
	$p_cover3 = filter_descr ( $_POST['fcover3'] );
	$p_link3 = filter_descr ( $_POST['flink3'] );
	if ( $config['date_selection'] == 'css' ) $p_formdate = filter_descr ( $_POST['ffdate'] );
	else {
	    $bd_m = filter_descr ( $_POST['pi_Month'] );
	    $bd_d = filter_descr ( $_POST['pi_Day'] );
	    $bd_y = filter_descr ( $_POST['pi_Year'] );
	    $p_formdate = $bd_y.'-'.$bd_m.'-'.$bd_d;
	}
	
	if ( $p_cover1 != '' ) {
    	    if ( substr ( $p_cover1, 0, 7 ) != 'http://' and substr ( $p_cover1, 0, 8 ) != 'https://' ) $p_cover1 = 'http://'.$p_cover1;
	    if ( substr ( $p_cover1, -4 ) != '.jpg' and substr ( $p_cover1, -5 ) != '.jpeg' and substr ( $p_cover1, -4 ) != '.gif' and substr ( $p_cover1, -4 ) != '.png' ) $err = $lang['err_coverurl'];
	    if ( ( stripos ( $p_cover1, 'javascript' ) !== false ) or ( stripos ( $p_cover1, '.php' ) !== false ) or ( stripos ( $p_cover1, '.html' ) !== false ) or ( stripos ( $p_cover1, '.asp' ) !== false ) or ( stripos ( $p_cover1, '.aspx' ) !== false ) or ( stripos ( $p_cover1, '.cgi' ) !== false ) or ( stripos ( $p_cover1, '.pl' ) !== false ) or ( stripos ( $p_cover1, '.js' ) !== false ) or ( stripos ( $p_cover1, '.py' ) !== false ) or ( stripos ( $p_cover1, '.shtml' ) !== false ) or ( stripos ( $p_cover1, '.phtml' ) !== false ) ) $err = $lang['err_coverurl'];
	} if ( $p_cover2 != '' ) {
    	    if ( substr ( $p_cover2, 0, 7 ) != 'http://' and substr ( $p_cover2, 0, 8 ) != 'https://' ) $p_cover2 = 'http://'.$p_cover2;
	    if ( substr ( $p_cover2, -4 ) != '.jpg' and substr ( $p_cover2, -5 ) != '.jpeg' and substr ( $p_cover2, -4 ) != '.gif' and substr ( $p_cover2, -4 ) != '.png' ) $err = $lang['err_coverurl'];
	    if ( ( stripos ( $p_cover2, 'javascript' ) !== false ) or ( stripos ( $p_cover2, '.php' ) !== false ) or ( stripos ( $p_cover2, '.html' ) !== false ) or ( stripos ( $p_cover2, '.asp' ) !== false ) or ( stripos ( $p_cover2, '.aspx' ) !== false ) or ( stripos ( $p_cover2, '.cgi' ) !== false ) or ( stripos ( $p_cover2, '.pl' ) !== false ) or ( stripos ( $p_cover2, '.js' ) !== false ) or ( stripos ( $p_cover2, '.py' ) !== false ) or ( stripos ( $p_cover2, '.shtml' ) !== false ) or ( stripos ( $p_cover2, '.phtml' ) !== false ) ) $err = $lang['err_coverurl'];
	} if ( $p_cover3 != '' ) {
    	    if ( substr ( $p_cover3, 0, 7 ) != 'http://' and substr ( $p_cover3, 0, 8 ) != 'https://' ) $p_cover3 = 'http://'.$p_cover3;
	    if ( substr ( $p_cover3, -4 ) != '.jpg' and substr ( $p_cover3, -5 ) != '.jpeg' and substr ( $p_cover3, -4 ) != '.gif' and substr ( $p_cover3, -4 ) != '.png' ) $err = $lang['err_coverurl'];
	    if ( ( stripos ( $p_cover3, 'javascript' ) !== false ) or ( stripos ( $p_cover3, '.php' ) !== false ) or ( stripos ( $p_cover3, '.html' ) !== false ) or ( stripos ( $p_cover3, '.asp' ) !== false ) or ( stripos ( $p_cover3, '.aspx' ) !== false ) or ( stripos ( $p_cover3, '.cgi' ) !== false ) or ( stripos ( $p_cover3, '.pl' ) !== false ) or ( stripos ( $p_cover3, '.js' ) !== false ) or ( stripos ( $p_cover3, '.py' ) !== false ) or ( stripos ( $p_cover3, '.shtml' ) !== false ) or ( stripos ( $p_cover3, '.phtml' ) !== false ) ) $err = $lang['err_coverurl'];
	}
	if ( $p_link1 != '' ) {
	    if ( substr ( $p_link1, 0, 7 ) != 'http://' and substr ( $p_link1, 0, 8 ) != 'https://' ) $p_link1 = 'http://'.$p_link1;
	    if ( ( stripos ( $p_link1, 'javascript' ) !== false ) or ( stripos ( $p_link1, '.js' ) !== false ) or ( stripos ( $p_link1, 'onclick' ) !== false ) or ( stripos ( $p_link1, 'onmouse' ) !== false ) )  $err = $lang['err_eurl'];
	} if ( $p_link2 != '' ) {
	    if ( substr ( $p_link2, 0, 7 ) != 'http://' and substr ( $p_link2, 0, 8 ) != 'https://' ) $p_link2 = 'http://'.$p_link2;
	    if ( ( stripos ( $p_link2, 'javascript' ) !== false ) or ( stripos ( $p_link2, '.js' ) !== false ) or ( stripos ( $p_link2, 'onclick' ) !== false ) or ( stripos ( $p_link2, 'onmouse' ) !== false ) ) $err = $lang['err_eurl'];
	} if ( $p_link3 != '' ) {
	    if ( substr ( $p_link3, 0, 7 ) != 'http://' and substr ( $p_link3, 0, 8 ) != 'https://' ) $p_link3 = 'http://'.$p_link3;
	    if ( ( stripos ( $p_link3, 'javascript' ) !== false ) or ( stripos ( $p_link3, '.js' ) !== false ) or ( stripos ( $p_link3, 'onclick' ) !== false ) or ( stripos ( $p_link3, 'onmouse' ) !== false ) ) $err = $lang['err_eurl'];
	}
	if ( strtotime ( $p_formdate ) > strtotime ( date ( "Y-m-d" ) ) ) $err = $lang['err_mypr14'];
    }
    
    if ( $p_style == '' ) $err = $lang['pr_chinfom29'];
    
    if ( $err == '' ) {
	$conn->execute("update members set about_me='$p_about' where uid='$_SESSION[UID]';");
	if ( $ch_type == '1' or $ch_type == '2' or $ch_type == '4' or $ch_type == '5' or $ch_type == '6' ) {
	    $conn->execute("update member_info set member_info.p_about='$p_about', member_info.p_style='$p_style', member_info.p_infl='$p_infl', member_info.p_sim='$p_sim' where member_info.p_uid='$_SESSION[UID]';");
	} elseif ( $ch_type == '3' ) {
	    $conn->execute("update member_info set member_info.p_about='$p_about', member_info.p_style='$p_style', member_info.p_bandmem='$p_bandmem', member_info.p_formdate='$p_formdate', member_info.p_reclabel='$p_reclabel', member_info.p_labeltype='$p_labeltype', member_info.p_infl='$p_infl', member_info.p_sim='$p_like', member_info.p_a1cover='$p_cover1', member_info.p_a1order='$p_link1', member_info.p_a2cover='$p_cover2', member_info.p_a2order='$p_link2', member_info.p_a3cover='$p_cover3', member_info.p_a3order='$p_link3' where member_info.p_uid='$_SESSION[UID]';");
	}
	if ( mysql_affected_rows() > 0 ) $msg = $lang['not_myprofile'];
	else { 
	    $conn->execute("update members set about_me='$p_about' where uid='$_SESSION[UID]';");
	    if ( $ch_type == '1' or $ch_type == '2' or $ch_type == '4' or $ch_type == '5' or $ch_type == '6' ) {
		$conn->execute("insert into member_info set p_uid='$_SESSION[UID]', p_type='$ch_type', p_about='$p_about', p_style='$p_style', p_infl='$p_infl', p_sim='$p_sim';"); 
	    } elseif ( $ch_type == '3' ) {
		$conn->execute("insert into member_info set p_uid='$_SESSION[UID]', p_type='$ch_type', p_about='$p_about', p_style='$p_style', p_bandmem='$p_bandmem', p_formdate='$p_formdate', p_reclabel='$p_reclabel', p_labeltype='$p_labeltype', p_infl='$p_infl', p_sim='$p_like', p_a1cover='$p_cover1', p_a1order='$p_link1', p_a2cover='$p_cover2', p_a2order='$p_link2', p_a3cover='$p_cover3', p_a3order='$p_link3'");
	    }
	    
	    if ( mysql_affected_rows() > 0 ) $msg = $lang['not_myprofile']; 
	}
    }
}

$rs = $conn->execute("select * from member_info where p_uid = '$_SESSION[UID]';");
$smarty->assign('uinfo', $rs->getrows());
$rs = $conn->execute("select * from members where uid = '$_SESSION[UID]';");
//$p_about = $rs->fields['about_me'];
$p_type = $rs->fields['ch_type'];
$smarty->assign('minfo', $rs->getrows());
$smarty->assign('dmenu', 'mymsg');
set_btn('bhome'); set_sbtn('mpr'); set_title($lang['title_myprofile']);
$smarty->assign('msg', $msg); $smarty->assign('err', $err);
$smarty->assign('chs', 's41');
$smarty->display('main_header.tpl');
$smarty->display('main_profilepage.tpl');
$smarty->display('footer.tpl');
?>