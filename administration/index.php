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
//language check
if($_REQUEST[language]!="")
{
    $lrs=$conn->execute("select file from languages where name='$_REQUEST[language]'");
    $langs=$lrs->fields['file'];
    $_SESSION['lang']=$langs;
    include("$config[base_dir]/modules/languages/$langs");
}
else
{
    $rs1=$conn->execute("select file from languages where def='1'");
    $def=$rs1->fields['file'];
    if ($_SESSION['lang']=="") { include($config['base_dir'].'/modules/languages/'.$def); $_SESSION['lang']=$def; }
    else { include($config['base_dir'].'/modules/languages/'.$_SESSION[lang]); }
}
checklang();
set_btn('adm_login');
if (isset($_POST['logged']))
{
    $username = $_POST['user'];
    $password = $_POST['pass'];
    if($username=='') $err=$lang['err_login1'];
    elseif($password=='') $err=$lang['err_login2'];
    if($err=="")
    {
	$password=md5($password);
	if($username!=$config['admin_name'] || $password!=$config['admin_pass'])
	$err = $lang['err_login3'];
	
	if($err=="")
	{
	    session_register("AUID");
	    session_register("APASSWORD");
            $_SESSION['AUID'] = $config['admin_name'];
            $_SESSION['APASSWORD'] = $config['admin_pass'];
	    header("Location: $config[admin_url]/settings/general");
	    exit;
	}
    }
    $smarty->assign('err',$err);
    $smarty->display('administration/main_header.tpl');
    $smarty->display('administration/main_footer.tpl');
}
elseif($_SESSION[AUID]!="")
{
    header("Location: $config[admin_url]/settings/general");
    exit;
}
else 
{
    $smarty->display('administration/main_header.tpl');
    $smarty->display('administration/main_footer.tpl');
}
?>