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

if (isset($_REQUEST['vtitle'])) $vtitle=filter_title($_REQUEST['vtitle']);
if (isset($_REQUEST['vdescr'])) $vdescr=filter_descr($_REQUEST['vdescr']);
if (isset($_REQUEST['vtags'])) $vtags=filter_title($_REQUEST['vtags']);
if (isset($_REQUEST['categlist'])) $vcategs=$_REQUEST['categlist'];
if ($vcategs!="") $listch=implode(",",$vcategs);
if (isset($_REQUEST['appr'])) $vappr=filter_title($_REQUEST['appr']);
if (isset($_REQUEST['feat'])) $vfeat=filter_title($_REQUEST['feat']);
if (isset($_REQUEST['type'])) $vtype=filter_title($_REQUEST['type']);
if (isset($_REQUEST['inapp'])) $vinapp=filter_title($_REQUEST['inapp']);
if (isset($_REQUEST['views'])) $views=filter_title($_REQUEST['views']);
if (isset($_REQUEST['favs'])) $favs=filter_title($_REQUEST['favs']);
if (isset($_REQUEST['vsave'])) $vsubmit=filter_title($_REQUEST['vsave']);
if (isset($_REQUEST['key'])) $vkey=filter_title($_REQUEST['key']);
if (isset($_REQUEST['solve'])) $solved=filter_title($_REQUEST['solve']);
if (isset($_REQUEST['solvei'])) $solvei=filter_title($_REQUEST['solvei']);
if ( $config['date_selection'] == 'css' ) $date=mysql_real_escape_string($_REQUEST['date']);
else {
    $bd_m = filter_descr ( $_POST['fd_Month'] );
    $bd_d = filter_descr ( $_POST['fd_Day'] );
    $bd_y = filter_descr ( $_POST['fd_Year'] );
    $date = $bd_y.'-'.$bd_m.'-'.$bd_d;
}


$list=key_to_info_image($vkey);
$vid=$list[0];

if ($vsubmit!="")
{
    if ($vtitle=="" || strlen($vtitle)<$config[fi_timin]) { echo show_err ( $lang['admerr_setoptions1'] ); exit; }
    elseif ($vdescr=="" || strlen($vdescr)<$config[fi_demin]) { echo show_err ( $lang['admerr_setoptions2'] ); exit; }
    elseif ($vtags=="" || strlen($vtags)<$config[fi_tamin]) { echo show_err ( $lang['admerr_setoptions3'] ); exit; }
    elseif ($listch=="") { echo show_err ( $lang['admerr_setoptions4'] ); exit; }
    elseif (($vrec=="yes" || $vfeat=="yes") && ($vtype=="private" || $vappr=="0" || $vinapp=="yes")) { echo show_err ( $lang['admerr_setoptions5'] ); exit; }
    elseif (!is_numeric($views) or $views < 0) { echo show_err ( $lang['admerr_setoptions5'] ); exit; }
    elseif (!is_numeric($favs) or $favs < 0) { echo show_err ( $lang['admerr_setoptions5'] ); exit; }
    elseif (strtotime($date) > strtotime(date("Y-m-d"))) { echo show_err ( $lang['admerr_setoptions5'] ); exit; }    
    
    if ($vfeat=="yes")
    {
	$q2="update request_image_F set active='1' where vid='$vid'";
	$r2=mysql_query($q2);
	{ $sql="update files_image set adddate='$date', addtime='".strtotime($date." ".date("H:i:s"))."', vfav='$favs', views='$views', vtitle='$vtitle', vdescr='$vdescr', vtags='$vtags', vcategs='0,$listch,0', active='$vappr', is_featured='$vfeat', vtype='$vtype', is_recommended='$vrec',is_inapp='$vinapp' where vkey='$vkey'"; }
    }
    else { $sql="update files_image set adddate='$date', addtime='".strtotime($date." ".date("H:i:s"))."', vfav='$favs', views='$views', vtitle='$vtitle', vdescr='$vdescr', vtags='$vtags', vcategs='0,$listch,0', active='$vappr', is_featured='$vfeat', vtype='$vtype', is_recommended='$vrec',is_inapp='$vinapp' where vkey='$vkey'"; }
    $res=mysql_query($sql);
    
    if ($solved=="1")
    {
	$sq="update request_image_F set solved='1' where vid='$vid'";
	$res=mysql_query($sq);
    }
    if ($solvei=="1")
    {
	$sq="update request_image_I set solved='1' where vid='$vid'";
	$res=mysql_query($sq);
    }
    if(mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setoptions1'] ); }
    
} else { echo show_msg ( $lang['admnot_setoptions2'] ); }
?>