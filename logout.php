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
$sql = "update members set is_logged='0' where uid='$_SESSION[UID]'";
$conn->Execute($sql);
$_SESSION["UID"]		= ''; session_unregister("UID");
$_SESSION["EMAIL"]		= ''; session_unregister("EMAIL");
$_SESSION["USERNAME"]		= ''; session_unregister("USERNAME");
$_SESSION["IS_ACTIVE"]		= ''; session_unregister("IS_ACTIVE");
$_SESSION["captcha"]		= ''; session_unregister("captcha");
$_SESSION["section"]		= ''; session_unregister("section");
$_SESSION["lang"]		= ''; session_unregister("lang");
$_SESSION["viewmode"]		= ''; session_unregister("viewmode");
$_SESSION["videotags"]		= ''; session_unregister("videotags");
$_SESSION["imagetags"]		= ''; session_unregister("imagetags");
$_SESSION["audiotags"]		= ''; session_unregister("audiotags");
$_SESSION["mytags"]		= ''; session_unregister("mytags");
$_SESSION["ignore_quicklist"]	= ''; session_unregister("ignore_quicklist");
$_SESSION["rnrshow"]		= ''; session_unregister("rnrshow");
$_SESSION["rpagnr"]		= ''; session_unregister("rpagnr");
$_SESSION["pnrshow"]		= ''; session_unregister("pnrshow");
$_SESSION["ppagnr"]		= ''; session_unregister("ppagnr");
$_SESSION["pcount"]		= ''; session_unregister("pcount");
$_SESSION["respondto"]		= ''; session_unregister("respondto");
$_SESSION["hpfeatv"]		= ''; session_unregister("hpfeatv");
$_SESSION["hpfeati"]		= ''; session_unregister("hpfeati");
$_SESSION["hpfeata"]		= ''; session_unregister("hpfeata");
$_SESSION["hpfeatvid"]		= ''; session_unregister("hpfeatvid");
$_SESSION["hpustat"]		= ''; session_unregister("hpustat");
$_SESSION["hpinbox"]		= ''; session_unregister("hpinbox");
$_SESSION["hpabout"]		= ''; session_unregister("hpabout");
$_SESSION["menu_myacct"]	= ''; session_unregister("menu_myacct");
$_SESSION["menu_apl"]		= ''; session_unregister("menu_apl");
$_SESSION["menu_ipl"]		= ''; session_unregister("menu_ipl");
$_SESSION["menu_vpl"]		= ''; session_unregister("menu_vpl");
$_SESSION["menu_display"]	= ''; session_unregister("menu_display");
$_SESSION["menu_browsea"]	= ''; session_unregister("menu_browsea");
$_SESSION["menu_browsei"]	= ''; session_unregister("menu_browsei");
$_SESSION["menu_browsev"]	= ''; session_unregister("menu_browsev");
$_SESSION["menu_profile"]	= ''; session_unregister("menu_profile");
$_SESSION["menu_inbox"]		= ''; session_unregister("menu_inbox");
$_SESSION["menu_comm"]		= ''; session_unregister("menu_comm");
$_SESSION["menu_resp"]		= ''; session_unregister("menu_resp");
$_SESSION["menu_categ"]		= ''; session_unregister("menu_categ");
$_SESSION["menu_ch"]		= ''; session_unregister("menu_ch");
$_SESSION["menu_subsuser"]	= ''; session_unregister("menu_subsuser");
$_SESSION["menu_subsfav"]	= ''; session_unregister("menu_subsfav");
$_SESSION["menu_subspl"]	= ''; session_unregister("menu_subspl");
$_SESSION["landed"]		= ''; session_unregister("landed");
$_SESSION["pl_autoplay"]        = ''; session_unregister("pl_autoplay");
$_SESSION["ql_autoplay"]        = ''; session_unregister("ql_autoplay");
$_SESSION["plk"]                = ''; session_unregister("plk");
/*
$_SESSION[""]= ''; session_unregister("");
$_SESSION[""]= ''; session_unregister("");
$_SESSION[""]= ''; session_unregister("");
*/
//session_destroy();
header("Location: $config[base_url]/main");
exit;
?>