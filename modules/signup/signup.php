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

$smarty->assign('country', set_country_box(filter_title($_REQUEST['fcountry'])));
//if somebody is logged in and active, we don't need to see the registration page
if ($_SESSION["USERNAME"]!="" && $_SESSION["IS_ACTIVE"]=="1")
{
    header("Location: $config[base_url]/main");
    exit;
}

//if Cancel is pressed
if (filter_descr($_REQUEST[scancel])!="")
{
    header("Location: $config[base_url]/main");
    exit;
}
//resend verification mail
if ($_REQUEST[resend]!="" && $config[email_verification]=="1")
{
    $rnd=filter_title($_REQUEST[resend]);
    $userid=$_SESSION[UID];
    $email=$_SESSION[EMAIL];
    $username=$_SESSION[USERNAME];
    $active=$_SESSION[IS_ACTIVE];
    
    $sql="update activation_codes as v, members as s set v.code='$rnd', s.is_active='$active' WHERE v.uid=s.uid and v.uid='$userid'";
    $conn->execute($sql);
    $smarty->assign('code',$rnd);
    
    $to=$email;
    $name=$config['site_name'];
    $from=$config['admin_email'];
    $rs = $conn->execute("select email_subject, email_path from email_files where email_id='verify_email'");
    
    $subj = $rs->fields['email_subject'];
    $subj = str_replace('$config[site_name]',$config[site_name],$subj);
    $email_path = $rs->fields['email_path'];
    
    $mailbody=$smarty->fetch($email_path);
    
    $msg=$lang['not_signup1'];
    $smarty->assign('msg',$msg);
    set_btn("bhome"); set_title($lang['title_signup']); set_sbtn("reg");

    mailto($to,$name,$from,$subj,$mailbody);
    header("Location: $config[base_url]/main");
    exit;
}
    
//if registration form button is pressed    
if (isset($_REQUEST['regged']) && $_REQUEST['resend']=="")
{
    if ($_REQUEST[reg_icode]!="") 
    {
	$icode=filter_title($_REQUEST[reg_icode]);
	$sql="select * from friends where code='$icode' and fstatus='Pending'";
	$rs=$conn->execute($sql);
	if (mysql_affected_rows()>0)
	    $ruid=$rs->fields[uid];
	else $err=$lang['err_signup1'];
    }
    
    $username = filter_descr($_REQUEST['reg_user']);
    $username = ereg_replace(" {1,}", "_", $username);
    $password1 = mysql_real_escape_string($_REQUEST['reg_pass1']);
    $password2 = mysql_real_escape_string($_REQUEST['reg_pass2']);
    $email = filter_descr($_REQUEST['reg_email']);
    $terms = filter_title($_REQUEST['reg_terms']);
    $gender = filter_title($_REQUEST['reg_gender']);
    if ($config[signup_captcha]=="1") $vcode = filter_title($_POST['reg_code']);
    $years = filter_title($_REQUEST['reg_years']);
    if ( $config['date_selection'] == 'css' ) $bdate = filter_title($_REQUEST['reg_bdate']); 
    else {
        $bd_m = filter_descr ( $_POST['bd_Month'] );
        $bd_d = filter_descr ( $_POST['bd_Day'] );
        $bd_y = filter_descr ( $_POST['bd_Year'] );
        $bdate = $bd_y.'-'.$bd_m.'-'.$bd_d;
    }
    
    if($username=='') $err=$lang['err_signup2'];
    elseif(strlen($username)<$config[sp_umin] || strlen($username)>$config[sp_umax]) $err=$lang['err_signup3'];
    elseif($password1=='') $err=$lang['err_signup4'];
    elseif($password2=='') $err=$lang['err_signup5'];
    elseif(strlen($password1)<$config[sp_pmin] || strlen($password2)<$config[sp_pmin] || strlen($password1)>$config[sp_pmax] || strlen($password2)>$config[sp_pmax]) $err=$lang['err_signup6'];
    elseif($email=='') $err=$lang['err_signup7'];
    elseif(( filter_title($_REQUEST['fcountry']) == $lang['pr_chinfop36'] )) $err = $lang['pr_chinfop39'];
    elseif(($bdate == '') or (strtotime($bdate) > strtotime(date("Y-m-d")))) $err = $lang['err_signup16_2'];
    elseif($gender == '') $err = $lang['err_mypr9'];                                                                                                                                                                     
    elseif($config[signup_captcha]=="1" && $vcode=='') $err=$lang['err_signup8'];
    elseif($password1!=$password2) $err=$lang['err_signup9'];
    elseif(!check_email_address($email)) $err=$lang['err_signup10'];
    elseif(check_field_exists($username,'username','members')==1) $err=$lang['err_signup11'];
    elseif(check_field_exists($email,'email','members')==1) $err=$lang['err_signup12'];
    elseif($config[signup_captcha]=="1" && $vcode!=$_SESSION['captcha']) $err=$lang['err_signup13'];
    elseif($years=='') $err=$lang['err_signup14'];
    elseif($terms=='') $err=$lang['err_signup14'];
    
    if($err=='')
    {
	$pass=md5($password1);
	$time = date("y-m-d H:i:s");
	$logged = '1';
	if ($config[email_verification]=="1") $active="0"; else $active="1";
	$ip = $_SERVER['REMOTE_ADDR'];
	$country = filter_title($_REQUEST['fcountry']);
	$time = date("y-m-d H:i:s");
	$sql = "insert into members set username='$username', password='$pass', gender='$gender', last_login='$time', email='$email', is_active='$active', is_logged='$logged', from_ip='$ip', from_country='$country', reg_on='$time', bdate='$bdate', photo='default.gif'";
	$conn->execute($sql);
	$userid=mysql_insert_id();

	SESSION_REGISTER("UID");$_SESSION[UID]=$userid;
	SESSION_REGISTER("EMAIL");$_SESSION[EMAIL]=$email;
	SESSION_REGISTER("USERNAME");$_SESSION[USERNAME]=$username;
	SESSION_REGISTER("IS_ACTIVE");$_SESSION[IS_ACTIVE]=$active;
	
	if ($config[email_verification]=="1")
	{
	$sql = "insert into activation_codes set uid='$userid'";
	$conn->execute($sql);
	
	$rnd=time().rand(1,99999999);
	if ($icode=="") { $sql="update activation_codes as v, members as s set v.code='$rnd', s.is_active='$active' WHERE v.uid=s.uid and v.uid='$userid'"; }
	elseif ($icode!="") { $sql="update activation_codes as v, members as s set v.code='$rnd', v.fcode='$icode', s.is_active='$active' WHERE v.uid=s.uid and v.uid='$userid'"; }
	$conn->execute($sql);
	$smarty->assign('code',$rnd);
	}
	
	elseif($config[email_verification]!="1" && $_REQUEST[reg_icode]!="")
	{
	    $icode=filter_title($_REQUEST[reg_icode]);
	
	    $sql="select * from friends as v,members as s WHERE v.code='$icode' and v.uid=s.uid";
    	    $rs=$conn->execute($sql);
	
	    $fcode=$rs->fields[code];
	    $ruid1=$rs->fields[uid];
	    $cs="select uid from friends where code='$fcode'";
	    $crs=$conn->execute($cs);
	    $fuid=$crs->fields[uid];
	
	    $cs1="select * from members where uid='$fuid'";
	    $crs1=$conn->execute($cs1);
	    $fm=$crs1->fields[email];
	    $fn=$crs1->fields[username];
	
	    if (strlen($fcode)>3)
	    {
		$fname=$username;
		$fsql="update friends set fname='$fname', fstatus='Confirmed' where code='$fcode'";
		$conn->execute($fsql);
		if (mysql_affected_rows()>0)
		{
		    $sql2="insert into friends set uid='$_SESSION[UID]', femail='$fm', fname='$fn', add_date='".date("Y-m-d H:i:s")."', fstatus='Confirmed'";
		    $rs2=$conn->execute($sql2);
		    if (mysql_affected_rows()==0) $err="Error";
		}
	    }
	}
	
	$to=$email;
	$name=$config['site_name'];
	$from=$config['admin_email'];
	if ($config[email_verification]=="1") $tblv="verify_email"; else $tblv="welcome_message";
	$rs = $conn->execute("select * from email_files where email_id='$tblv'");
	$subj = $rs->fields['email_subject'];
	$subj = str_replace('$username',$username,$subj);
	$subj = str_replace('$config[site_name]',$config[site_name],$subj);
	
	$email_path = $rs->fields['email_path'];
	$mailbody=$smarty->fetch($email_path);
	
	mailto($to,$name,$from,$subj,$mailbody);
	
	$user="user";
	$dir=$user.$_SESSION[UID];
	if (!is_dir("$config[vdo_dir]/$dir")) { mkdir("$config[vdo_dir]/$dir", 0777); @chmod("$config[vdo_dir]/$dir", 0777); }
	if (!is_dir("$config[tmb_dir]/$dir")) { mkdir("$config[tmb_dir]/$dir", 0777); @chmod("$config[tmb_dir]/$dir", 0777); }
	if (!is_dir("$config[pic_dir]/$dir")) { mkdir("$config[pic_dir]/$dir", 0777); @chmod("$config[pic_dir]/$dir", 0777); }
	if (!is_dir("$config[flvdo_dir]/$dir")) { mkdir("$config[flvdo_dir]/$dir", 0777); @chmod("$config[flvdo_dir]/$dir", 0777); }
	if (!is_dir("$config[ado_dir]/$dir")) { mkdir("$config[ado_dir]/$dir", 0777); @chmod("$config[ado_dir]/$dir", 0777); }
	
	$sql = "update members set folder='$dir' where uid='$_SESSION[UID]'";
	$conn->execute($sql);
	
	$fm = $config['admin_email'];
	$receiver = $config['admin_name'];
	if ($fm!='' and check_email_address($fm) and $config['mail_not4'] == '1' and $err == '') 
	{
	    $mtype='mail_not4';
	    send_notification($fm, $receiver, $_SESSION['USERNAME'], $mtype, $userid);
	}
	
	set_btn("bhome"); set_title($lang['title_signup']);
	$smarty->display('main_header.tpl');
	$smarty->display('signup_success.tpl'); 
	$smarty->display('footer.tpl'); 
	exit;
    }
    
    set_btn("bhome"); set_title($lang['title_signup']); set_sbtn("reg");
    $smarty->assign('err',$err);
    $smarty->display('main_header.tpl');
    $smarty->display('main_signup.tpl');
    $smarty->display('footer.tpl');
    exit;
}

//if a verification code is present
if(filter_title($_REQUEST['code'])!="" && $config[email_verification]=="1")
{
    $_REQUEST[code] = filter_title($_REQUEST[code]);
    
    $sql="select * from activation_codes as v,members as s WHERE v.code='$_REQUEST[code]' and v.uid=s.uid";
    
    $rs=$conn->execute($sql);
    if($rs->recordcount()<1) $err=$lang['err_signup15'];
    
    else 
    {
	$fcode=$rs->fields[fcode];
	$ruid1=$rs->fields[uid];
	$cs="select uid from friends where code='$fcode'";
	$crs=$conn->execute($cs);
	$fuid=$crs->fields[uid];
	
	$cs1="select * from members where uid='$fuid'";
	$crs1=$conn->execute($cs1);
	$fm=$crs1->fields[email];
	$fn=$crs1->fields[username];
	
	if (strlen($fcode)>3)
	{
	    $fname=$rs->fields[username];
	    $fsql="update friends set fname='$fname', fstatus='Confirmed' where code='$fcode'";
	    $conn->execute($fsql);
	    if (mysql_affected_rows()>0)
	    {
		$sql2="insert into friends set uid='$ruid1', femail='$fm', fname='$fn', add_date='".date("Y-m-d H:i:s")."', fstatus='Confirmed'";
		$rs2=$conn->execute($sql2);
		if (mysql_affected_rows()==0) $err="Error";
	    }
	}
	
	$ip = $_SERVER['REMOTE_ADDR'];
	$sql="update members set is_active='1', from_ip='$ip' where uid=".$rs->fields[uid];
	$conn->execute($sql);
	SESSION_REGISTER("UID");$_SESSION[UID]=$rs->fields[uid];
	SESSION_REGISTER("EMAIL");$_SESSION[EMAIL]=$rs->fields[email];
	SESSION_REGISTER("USERNAME");$_SESSION[USERNAME]=$rs->fields[username];
	SESSION_REGISTER("IS_ACTIVE");$_SESSION[IS_ACTIVE]="1";
	
	if(mysql_affected_rows()>=1) $msg=$lang['not_signup2'];
	else $msg = $lang['not_signup3'];
	$smarty->assign('msg',$msg);
	$user="user";
	$dir=$user.$rs->fields[uid];	
	if (!is_dir("$config[vdo_dir]/$dir")) { mkdir("$config[vdo_dir]/$dir", 0777); @chmod("$config[vdo_dir]/$dir", 0777); }
	if (!is_dir("$config[tmb_dir]/$dir")) { mkdir("$config[tmb_dir]/$dir", 0777); @chmod("$config[tmb_dir]/$dir", 0777); }
	if (!is_dir("$config[pic_dir]/$dir")) { mkdir("$config[pic_dir]/$dir", 0777); @chmod("$config[pic_dir]/$dir", 0777); }
	if (!is_dir("$config[flvdo_dir]/$dir")) { mkdir("$config[flvdo_dir]/$dir", 0777); @chmod("$config[flvdo_dir]/$dir", 0777); }
	if (!is_dir("$config[ado_dir]/$dir")) { mkdir("$config[ado_dir]/$dir", 0777); @chmod("$config[ado_dir]/$dir", 0777); }
	
	$sql = "update members set folder='$dir' where uid='$_SESSION[UID]'";
	$conn->execute($sql);

	set_btn("bhome"); set_title($lang['title_signup']); set_sbtn("reg");
	$smarty->display('main_header.tpl'); 
	$smarty->display('signup_success.tpl');
	$smarty->display('footer.tpl');
	exit;
    }
    set_btn("bhome"); set_title($lang['title_signup']); set_sbtn("reg");
    $smarty->assign('err',$err);
    $smarty->display('main_header.tpl');
    $smarty->display('signup_success.tpl');
    $smarty->display('footer.tpl');
}
//normal behaviour
else 
{
set_btn("bhome"); set_sbtn("reg"); set_title($lang['title_signup']);
$smarty->display('main_header.tpl');
$smarty->display('main_signup.tpl');
$smarty->display('footer.tpl');
}
?>