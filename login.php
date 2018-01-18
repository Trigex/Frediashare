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

// If somebody is logged in, we don't need to see the login page
if ($_SESSION["USERNAME"]!="") {
    header("Location: $config[base_url]/main"); 
    exit;
}

// Action if Go (log in) button is pressed
if (isset($_REQUEST['logged'])) {
    $next = filter_descr($_REQUEST['next']);
    $_REQUEST['logged']=filter_title($_REQUEST[logged]);
    $username = mysql_real_escape_string($_REQUEST['user']);
    $password = mysql_real_escape_string($_REQUEST['pass']);
    
    if($username=='') $err=$lang['err_login1'];
    elseif($password=='') $err=$lang['err_login2'];
    
    if($err=="")
    {
	$pass=md5($password);
	$sql="SELECT * from members WHERE (username='$username') and (password='$pass')";
	$res=$conn->execute($sql);
	if($res->recordcount()<1) $err=$lang['err_login3'];
	elseif($res->fields['is_active']=='0') $err = $lang['err_login4'];

	if($err=="")
	{
	    $ip = $_SERVER['REMOTE_ADDR'];
	    $time = date("y-m-d H:i:s");
	    $logged = "1";
	    $sql="update members set last_login='$time', is_logged='$logged', from_ip='$ip' WHERE username='$username'";
	    $conn->execute($sql);
	    SESSION_REGISTER("UID");$_SESSION[UID]=$res->fields[uid];
	    SESSION_REGISTER("EMAIL");$_SESSION[EMAIL]=$res->fields[email];
	    SESSION_REGISTER("USERNAME");$_SESSION[USERNAME]=$res->fields[username];
	    SESSION_REGISTER("IS_ACTIVE");$_SESSION[IS_ACTIVE]=$res->fields[is_active];

	    if ( $next == '' ) { header("Location: $config[base_url]/main"); exit; } else { header("Location: $config[base_url]/".$next); exit; }
	}
    }
    
    set_btn("bhome"); set_sbtn("login"); set_title($lang['title_login']);
    $smarty->assign('err',$err);
    $smarty->display('main_header.tpl');
    $smarty->display('main_login.tpl');
    $smarty->display('footer.tpl');
}
// normal behaviour
else
{
set_btn("bhome"); set_sbtn("login"); set_title($lang['title_login']);
$smarty->display('main_header.tpl');
$smarty->display('main_login.tpl');
$smarty->display('footer.tpl');
}
?>