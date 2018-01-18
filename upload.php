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

if (filter_title($_REQUEST[type])=="vconfirmation") { check_login(); $type="vconfirmation"; }
if (filter_title($_REQUEST[type])=="aconfirmation") { check_login(); $type="aconfirmation"; }
if (filter_title($_REQUEST[type])=="iconfirmation") { check_login(); $type="iconfirmation"; }

$cu = $conn->execute("select can_upload from members where uid='$_SESSION[UID]';");
$can_up = $cu->fields['can_upload'];
if ( $can_up == '0' )
{
    $err=$lang['adm_memnouperr'];
    set_btn("bupload"); set_title($lang['title_upgeneral']); set_sbtn("3");
    $smarty->assign('err',$err);
    $smarty->display('main_header.tpl');
    $smarty->display('footer.tpl');
    exit;
}

$smarty->assign('dmenu', 'mymsg');
//normal bahaviour
set_btn("bupload"); set_sbtn("bupload"); set_title($lang['title_upgeneral']);
if($type=="") $type="general";
$smarty->assign('err',$err);
$smarty->assign('type',$type);
$smarty->display('main_header.tpl');
$smarty->display('main_upload.tpl');
$smarty->display('footer.tpl');
?>