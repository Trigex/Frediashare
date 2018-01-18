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

if ( isset ( $_REQUEST['type'] ) ) $_REQUEST['type'] = filter_title ( $_REQUEST['type'] );

if ($_REQUEST[type]=="last") $lusql="select * from members where is_active='1' order by members.last_login desc limit 0, $config[paging_bestfiles]";
elseif ($_REQUEST[type]=="online") $lusql="select * from members where is_active='1' and is_logged='1' order by members.last_login desc limit 0,$config[paging_featured]";

$lurs=$conn->execute($lusql);
$users=$lurs->getrows();
$smarty->assign('users',$users);

$smarty->display('last_online.tpl');
?>