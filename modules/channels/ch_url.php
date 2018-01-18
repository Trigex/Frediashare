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
check_login('my_profile_url');

$save_btn = filter_title ( $_POST['chsave_url'] );
if ( $save_btn != '' ) {
    $inf_etitle = filter_descr($_POST['fetitle']);
    $inf_eurl = filter_descr($_POST['feurl']);
    if ( $inf_eurl != '' ) {
        if ( substr ( $inf_eurl, 0, 7 ) != 'http://' and substr ( $inf_eurl, 0, 8 ) != 'https://' ) $inf_eurl = 'http://'.$inf_eurl;
        if ( ( stripos ( $inf_eurl, 'javascript' ) !== false ) or ( stripos ( $inf_eurl, '.js' ) !== false ) or ( stripos ( $inf_eurl, 'onclick' ) !== false ) )  $err = $lang['err_eurl'];
    }
    
    if ( $err == '' ) {
	$conn->execute("update members set inf_eurl='$inf_eurl', inf_etitle='$inf_etitle' where uid='$_SESSION[UID]';");
	if ( mysql_affected_rows() > 0 ) $msg = $lang['not_myprofile'];
    }
}

$rs = $conn->execute("select * from members where uid = '$_SESSION[UID]';");
$country = $rs->fields['from_country'];
$smarty->assign('cinfo', $rs->getrows());
$smarty->assign('dmenu', 'mymsg');
set_btn('bhome'); set_sbtn('mpr'); set_title($lang['title_myprofile']);
$smarty->assign('msg', $msg); $smarty->assign('err', $err);
$smarty->assign('chs', 's42');
$smarty->display('main_header.tpl');
$smarty->display('main_profilepage.tpl');
$smarty->display('footer.tpl');
?>