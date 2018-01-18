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
//check_login();

$rs=$conn->execute("select fname, active from static_files where (ff='terms')");
$title=$rs->fields[fname];
$active = $rs->fields['active'];
$rs->Close();

if ( $active == '0' ) { header('Location: '.$config['base_url'].'/main'); exit; }

set_btn("bhome"); set_sbtn("terms"); set_title($title);
$smarty->display('main_header.tpl');
$smarty->display('static/terms.tpl');
$smarty->display('footer.tpl');
?>