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
if ( $config['enable_channels'] == '0' ) { header('Location:'.$config['base_url'].'/my_profile_info'); exit; }
check_login('my_profile');

$save_btn = filter_title ( $_REQUEST['chsave_submit'] );
if ( $save_btn ) {
    $ch_title = filter_descr ( $_REQUEST['ch_title'] );
    $ch_desc = filter_descr ( $_REQUEST['ch_desc'] );
    $ch_tags = filter_descr ( $_REQUEST['ch_tags'] );
    $ch_comm = filter_title ( $_REQUEST['ch_comm'] );
    $ch_comm_who = filter_title ( $_REQUEST['ch_comm_who'] );
    $ch_commrate = filter_title ( $_REQUEST['ch_commrate'] );
    $ch_type = filter_title ( $_REQUEST['ch_type'] );
    
    $r = $conn->execute("select ch_type from members where uid='$_SESSION[UID]';");
    $my_ch_type = $r->fields['ch_type'];

    if ( $ch_type != $my_ch_type ) {
        delete_performer_info();
        $conn->execute("update member_info set p_type='$ch_type' where p_uid='$_SESSION[UID]';");
    }
    if ( $config['profile_comments'] == '1' ) { $pr_q = "ch_comm='$ch_comm', ch_comm_who='$ch_comm_who', ch_commrate='$ch_commrate',"; } else $pr_q = '';
    
    $conn->execute("update members set ch_title='$ch_title', ch_desc='$ch_desc', ch_tags='$ch_tags', $pr_q ch_type='$ch_type' where uid='$_SESSION[UID]';");
    if ( mysql_affected_rows() > 0 ) { 
	$msg = $lang['not_myprofile']; 
    }
}

$rs = $conn->execute("select * from members where uid = '$_SESSION[UID]';");
$smarty->assign('cinfo', $rs->getrows());
$smarty->assign('dmenu', 'mymsg');
set_btn('bhome'); set_sbtn('mpr'); set_title($lang['title_myprofile']);
$smarty->assign('msg', $msg); $smarty->assign('err', $err);
$smarty->assign('chs', 's1');
$smarty->display('main_header.tpl');
$smarty->display('main_profilepage.tpl');
$smarty->display('footer.tpl');
?>