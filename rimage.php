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

include("configs/config.php");
include("rating2.php");
//$_REQUEST = array_map('filter_title', $_REQUEST);
if ( isset ( $_REQUEST['rel'] ) ) $_REQUEST['rel'] = filter_descr ( $_REQUEST['rel'] );
if ( isset ( $_REQUEST['user'] ) ) $_REQUEST['user'] = filter_descr ( $_REQUEST['user'] );

if ($_REQUEST[rel]!="")
{
    $key=$_REQUEST[rel];
    $list=key_to_info_image($key);

    $relv=explode(" ",$list[3]);
    if(count($relv)>1)
	for($i=1;$i<count($relv);$i++) { $chnl.="or vtags like '%$relv[$i]%'"; }
    $sql="SELECT * from files_image where vtype='public' and vkey!='$key' and active='1' and is_inapp='no' and (vtags like '%$relv[0]%' $chnl) order by views desc limit 0,50";
    $smarty->assign('let', 'l');
    $smarty->assign('vidid', $list[0]);
}
elseif ($_REQUEST[user]!="")
{
    $key=$_REQUEST[user];
    $list=key_to_info_image($key);
    $uid=$list[1];
    $sql="select * from files_image where vtype='public' and vkey!='$key' and active='1' and is_inapp='no' and uid='$uid' order by views desc limit 0,50";
    $smarty->assign('let', 'u');
    $smarty->assign('vidid', $list[0]);
}

$mrs=$conn->execute($sql);
$vid=$mrs->getrows();
$count=count($vid);
$smarty->assign('count',$count);
$smarty->assign('vid',$vid);
$smarty->display('rimage.tpl');
?>