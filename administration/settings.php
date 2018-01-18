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
include('../configs/config.php');
check_admin_login();

//settings confirmation message
if ($_REQUEST[type]=="saved")
{
    $msg=$lang['admnot_setgensave'];
    $smarty->assign('err',$err);
    $smarty->assign('msg',$msg);
    set_btn("adm_set"); set_sbtn("gen");
    $smarty->display('administration/main_header.tpl');
    $smarty->display('administration/main_general.tpl');
    $smarty->display('administration/main_footer.tpl');
    exit;
}
//paging setting
if ($_REQUEST[type]=="paging")
{
    set_btn("adm_set"); set_sbtn("pag");
    $smarty->display('administration/main_header.tpl');
    $smarty->display('administration/main_paging.tpl');
    $smarty->display('administration/main_footer.tpl');
    exit;
}
//general settings
if ($_REQUEST[type]=="general")
{
    $thefile = 'words.txt';
    $file_path = $config['base_dir'].'/modules/wordfiltering/'.$thefile;
    $handle = fopen($file_path, "rb");
    $theData = fread($handle, filesize($file_path));
    fclose($handle);
    $smarty->assign('file', $theData);
    
    $smarty->assign('msg',$msg);
    $smarty->assign('err',$err);
    set_btn("adm_set"); set_sbtn("gen");
    $smarty->display('administration/main_header.tpl');
    $smarty->display('administration/main_general.tpl');
    $smarty->display('administration/main_footer.tpl');
    exit;
}

set_btn("adm_set");
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display('administration/main_header.tpl');
$smarty->display('administration/main_footer.tpl');
?>