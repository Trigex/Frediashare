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

if ( isset ( $_REQUEST['code'] ) ) $_REQUEST['code'] = filter_title ( $_REQUEST['code'] );

$sql="update friends set fstatus='DENIED' where code='$_REQUEST[code]'";
$rs=$conn->execute($sql);

if (mysql_affected_rows()>0)
{
    $msg=$lang['not_friendreq'];
} else $err=$lang['err_illegalop'];

set_btn("bhome");
$smarty->assign('msg',$msg);
$smarty->assign('err',$err);
$smarty->display('main_header.tpl');
$smarty->display('footer.tpl');
?>