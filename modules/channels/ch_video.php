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

$v = filter_title( $_REQUEST['v'] );
$f = filter_title( $_REQUEST['f'] );

if ( $f == 'a' ) { check_login('my_profile_audios'); } elseif ( $f == 'i' ) { check_login('my_profile_images'); } elseif ( $f == 'v' ) { check_login('my_profile_videos'); }

$active = "and active='1' and is_inapp='no' and vtype='public'";
$save_btn = filter_title ( $_REQUEST['chsave_chvid'] );

if ( $f == 'a' ) {
    if ( $config['enable_audio'] == '0' ) { header('Location:'.$config['base_url'].'/my_profile_info'); exit; }
    $dbf_add = 'auds'; 
    $dbf_fav = 'afavs'; 
    $ftbl = 'files_audio'; $favtbl = 'fav_audio';
    $chs = 's32';
} elseif ( $f == 'i' ) { 
    if ( $config['enable_images'] == '0' ) { header('Location:'.$config['base_url'].'/my_profile_info'); exit; }
    $dbf_add = 'imgs'; 
    $dbf_fav = 'ifavs'; 
    $ftbl = 'files_image'; $favtbl = 'fav_image';
    $chs = 's31';
} elseif ( $f == 'v' ) { 
    if ( $config['enable_videos'] == '0' ) { header('Location:'.$config['base_url'].'/my_profile_info'); exit; }
    $dbf_add = 'vids'; 
    $dbf_fav = 'vfavs';
    $ftbl = 'files_video'; $favtbl = 'fav_video'; 
    $chs = 's3';
}

if ( $save_btn != '' and $_REQUEST['vid'] != '' ) {
    $ch_vids = $_REQUEST['vid'];
    if ( count ( $ch_vids ) > 9 ) $err = $lang['pr_chinfob43']; 
    if ( $err == '' ) {
	for ( $i = 0; $i <= 8; $i++ ) {
	    $m = 'k'.$i;
	    $c = ',';
	    $mm = filter_descr($_REQUEST[$m].$c);
	    if ( $_REQUEST[$m] != '' ) { $k.= $mm; }
	}
	$vid_ids = substr($k, 0, -1);
	
	if ( $v == '' or $v == 'mv' ) $dbf = 'ch_'.$dbf_add; elseif ( $v == 'mf' ) $dbf = 'ch_'.$dbf_fav; else $dbf = 'ch_'.$dbf_add;
	$conn->execute("update members set $dbf='$vid_ids' where uid='$_SESSION[UID]';");
	if ( mysql_affected_rows() > 0 ) { $msg = $lang['not_myprofile']; }
    }
} elseif ( $save_btn != '' and $_REQUEST['vid'] == '' ) {
    if ( $v == '' or $v == 'mv' ) $dbf = 'ch_'.$dbf_add; elseif ( $v == 'mf' ) $dbf = 'ch_'.$dbf_fav; else $dbf = 'ch_'.$dbf_add; 
    $conn->execute("update members set $dbf='' where uid='$_SESSION[UID]';");
    if ( mysql_affected_rows() > 0 ) $msg = $lang['not_myprofile'];
} else {
    if ( $v == '' or $v == 'mv' ) $dbf = 'ch_'.$dbf_add; elseif ( $v == 'mf' ) $dbf = 'ch_'.$dbf_fav; else $dbf = 'ch_'.$dbf_add; 
}

if ( $v == 'mv' ) $rs = $conn->execute("select * from $ftbl where uid='$_SESSION[UID]' $active order by addtime desc;");
elseif ( $v == 'mf' ) $rs = $conn->execute("select s.*,v.* from $ftbl v, $favtbl s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.uid='$_SESSION[UID]' order by v.addtime desc;");
$smarty->assign('vids', $rs->getrows());

$chv = $conn->execute("select $dbf from members where uid='$_SESSION[UID]';");
if ( $f == 'a' ) { $smarty->assign('chvids', $chv->fields['ch_auds']); } elseif ( $f == 'i' ) { $smarty->assign('chvids', $chv->fields['ch_imgs']); } elseif ( $f == 'v' ) { $smarty->assign('chvids', $chv->fields['ch_vids']); }
$chf = $conn->execute("select $dbf from members where uid='$_SESSION[UID]';");
if ( $f == 'a' ) { $smarty->assign('chfavs', $chv->fields['ch_afavs']); } elseif ( $f == 'i' ) { $smarty->assign('chfavs', $chv->fields['ch_ifavs']); } elseif ( $f == 'v' ) { $smarty->assign('chfavs', $chv->fields['ch_vfavs']); }

set_btn('bhome'); set_sbtn('mpr'); set_title($lang['title_myprofile']);
$smarty->assign('err', $err); $smarty->assign('msg', $msg);
$smarty->assign('dmenu', 'mymsg');
$smarty->assign('chs', $chs);
$smarty->display('main_header.tpl');
$smarty->display('main_profilepage.tpl');
$smarty->display('footer.tpl');
?>