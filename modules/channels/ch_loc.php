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
check_login('my_profile_location');

$save_btn = filter_title ( $_POST['chsave_location'] );
if ( $save_btn != '' ) {
    $inf_town = filter_descr($_POST['ftown']);
    $inf_city = filter_descr($_POST['fcity']);
    $inf_zip = filter_descr($_POST['fzip']);
    $inf_country = filter_descr($_POST['fcountry']);
    
    if ( $inf_country == $lang['pr_chinfop36'] ) $err = $lang['pr_chinfop39']; 
    if ( $err == '' ) {
	$conn->execute("update members set inf_town='$inf_town', inf_city='$inf_city', inf_zip='$inf_zip', from_country='$inf_country' where uid='$_SESSION[UID]';");
	if ( mysql_affected_rows() > 0 ) $msg = $lang['not_myprofile'];
    }
}

$rs = $conn->execute("select * from members where uid = '$_SESSION[UID]';");
$country = $rs->fields['from_country'];
$smarty->assign('cinfo', $rs->getrows());
$smarty->assign('dmenu', 'mymsg');
set_btn('bhome'); set_sbtn('mpr'); set_title($lang['title_myprofile']);
$smarty->assign('msg', $msg); $smarty->assign('err', $err);
$smarty->assign('country', set_country_box($country));
$smarty->assign('chs', 's5');
$smarty->display('main_header.tpl');
$smarty->display('main_profilepage.tpl');
$smarty->display('footer.tpl');
?>