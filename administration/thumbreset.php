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
$type = filter_title($_REQUEST['type']);
$vid = filter_title($_REQUEST['vid']);
$method = filter_title($_REQUEST['met']);

if ( $vid != '' ) {
    $vi = $conn->execute("select * from files_video where vkey='$vid';");
    $vkey = $vid;
    $vuid = $vi->fields['uid'];
    $vflv = $vi->fields['vflvname'];
    $vid = $vi->fields['vid'];
    $fname = $config['flvdo_dir'].'/user'.$vuid.'/'.$vflv;
    $t=$lang['adm_setgen77'].$lang['loading_gif'];
    $smarty->assign('loadgif', $t);
    $smarty->assign('vkey', $vid);
}

if ( $type == 'main' ) {
    if ( $method == 'ffmpeg' ) gen_thumb_ffmpeg($fname, $vid, 3);
    elseif ( $method == 'ffmpeg-php' ) gen_thumb_alt($fname, $vid, 3);
    elseif ( $method == 'mplayer' ) gen_thumb($fname, $vid, 3);
    echo $lang['adm_threset6'];
    $smarty->assign('vkey', $vkey);
    $smarty->display('administration/_inc/inc_thumbsloop.tpl');
    exit;
} elseif ( $type == 'all' ) {
    if ( $method == 'ffmpeg' ) gen_thumb_ffmpeg($fname, $vid, $config['thumb_nr']);
    elseif ( $method == 'ffmpeg-php' ) gen_thumb_alt($fname, $vid, $config['thumb_nr']);
    elseif ( $method == 'mplayer' ) gen_thumb($fname, $vid, $config['thumb_nr']);
    echo $lang['adm_threset6']; 
    $smarty->assign('vkey', $vkey);
    $smarty->display('administration/_inc/inc_thumbsloop.tpl');
    exit;
}

?>