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
include("configs/config.php");
include("rating2.php");
include("modules/ajaxrows/include/xajax.inc.php");
//$_REQUEST = array_map('mysql_real_escape_string', $_REQUEST);
$active = "and active='1' and is_inapp='no'";
$xajax = new xajax();

if ($config[enable_videos]=="1") { include("modules/ajaxrows/include/xajax.getvideos.php"); }
if ($config[enable_images]=="1") { include("modules/ajaxrows/include/xajax.getimages.php"); }
if ($config[enable_audio]=="1") { include("modules/ajaxrows/include/xajax.getaudios.php"); }

$xajax->processRequests();
//if ( !isset ( $_SESSION['hpfeat'] ) and $_SESSION['hpfeat'] == '' ) { session_register("hpfeat"); $_SESSION['hpfeat'] = 'none'; }

if ($_SESSION['UID'] != '') {
    $d1 = $config['ado_dir'].'/user'.$_SESSION['UID'];
    $d2 = $config['vdo_dir'].'/user'.$_SESSION['UID'];
    $d3 = $config['pic_dir'].'/user'.$_SESSION['UID'];
    $d4 = $config['flvdo_dir'].'/user'.$_SESSION['UID'];
    $d5 = $config['tmb_dir'].'/user'.$_SESSION['UID'];

    $s1 = getDirectorySize ( $d1 ); 
    $s2 = getDirectorySize ( $d2 ); 
    $s3 = getDirectorySize ( $d3 ); 
    $s4 = getDirectorySize ( $d4 ); 
    $s5 = getDirectorySize ( $d5 ); 
    $m = $s1['size'] + $s2['size'] + $s3['size'] + $s4['size'] + $s5['size'];
    $smarty->assign('mspace', sizeFormat ( $m ));
}

$fs1 = "SELECT count(*) as total1 from members where is_active='1'";
$fs2 = "SELECT count(*) as total2 from members where is_logged='1'";
$fs3 = "SELECT count(*) as total3 from members";
$fs1r = $conn->Execute($fs1); $tg1 = $fs1r->fields['total1']; $smarty->assign('tg1',$tg1);
$fs2r = $conn->Execute($fs2); $tg2 = $fs2r->fields['total2']; $smarty->assign('tg2',$tg2);
$fs3r = $conn->Execute($fs3); $tg3 = $fs3r->fields['total3']; $smarty->assign('tg3',$tg3);
$bn = $conn->execute("select count(*) as bntotal from banned_users where active='1';");
$smarty->assign('banr', $bn->fields['bntotal']);
$bl = $conn->execute("select count(*) as bltotal from blocked_users where active='1' and blocker_uid='$_SESSION[UID]';");
$smarty->assign('blnr', $bl->fields['bltotal']);

//recommended movie
$rsql="select * from files_video where vtype='public' $active and is_recommended='yes'";
$rrs=$conn->execute($rsql);
$key = $rrs->fields['vkey'];
$smarty->assign('key', $key);
$res=$rrs->getrows();
$smarty->assign('res',$res);
$rrs->Close();

//build ids for rotating thumbs
$bi=$conn->execute("select * from files_video where vtype='public' $active");
$smarty->assign('bid', $bi->getrows());

set_btn("bhome"); set_sbtn("main"); set_title($lang['title_index']);
$smarty->display('main_header.tpl');
$xajax->printJavascript("modules/ajaxrows/js","xajax.js");
$smarty->display('main_index.tpl');
$smarty->display('footer.tpl');
?>