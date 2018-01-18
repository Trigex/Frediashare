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
check_login('my_profile_info');

//if ( !is_array ( $_FILES ) ) $_FILES = array_map ( 'filter_title' , $_FILES );

$save_btn = filter_title ( $_POST['chsave_profileinfo'] );
if ( $save_btn != '' ) {
    $inf_fname = filter_descr($_POST['ffname']);
    $inf_lname = filter_descr($_POST['flname']);
    $inf_fgen = filter_descr($_POST['fgen']);
    $inf_frel = filter_descr($_POST['frel']);
    $inf_fage = filter_descr($_POST['fage']);
    $inf_fstatus = filter_descr($_POST['fstatus']);
    $inf_fabout = filter_descr($_POST['fabout']);
    $inf_furl = filter_descr($_POST['furl']);
    $inf_foccup = filter_descr($_POST['foccup']);
    $inf_fcomp = filter_descr($_POST['fcomp']);
    $inf_fschool = filter_descr($_POST['fschool']);
    $inf_finteres = filter_descr($_POST['finteres']);
    $inf_ffavmov = filter_descr($_POST['ffavmov']);
    $inf_ffavmus = filter_descr($_POST['ffavmus']);
    $inf_ffavbook = filter_descr($_POST['ffavbook']);
    if ( $config['date_selection'] == 'css' ) $inf_bdate = filter_descr($_POST['bdate']);
    else {
	$bd_m = filter_descr ( $_POST['bd_Month'] );
	$bd_d = filter_descr ( $_POST['bd_Day'] );
	$bd_y = filter_descr ( $_POST['bd_Year'] );
	$inf_bdate = $bd_y.'-'.$bd_m.'-'.$bd_d;
    }
    
    if ( strtotime ( $inf_bdate ) > strtotime ( date ( "Y-m-d" ) ) ) $err = $lang['err_mypr14'];
    
    if ( $config['enable_channels'] == '0' ) {
	$ch_comm = filter_title ( $_POST['ch_comm'] );
	$ch_comm_who = filter_title ( $_POST['ch_comm_who'] );
	$ch_commrate = filter_title ( $_POST['ch_commrate'] );
	$ch_str = "ch_comm='$ch_comm', ch_comm_who='$ch_comm_who', ch_commrate='$ch_commrate', ";
    } else $ch_str = '';
    
    if ( $inf_furl != '' ) {
        if ( substr ( $inf_furl, 0, 7 ) != 'http://' and substr ( $inf_furl, 0, 8 ) != 'https://' ) $inf_furl = 'http://'.$inf_furl;
        $url = parse_url ( $inf_furl );
        if ( $inf_furl != '' and $url[host] == '' ) $err = $lang['err_siteurl'];
        if ( $err == '' ) $inf_furl = $url[scheme].'://'.$url[host];
    }
    if ( $_POST['oldpass'] != '' and $err == '' ) {
	if ( $_POST['newpass1'] == '' or $_POST['newpass2'] == '' ) $err = $lang['err_mypr2'];
	if ( $err == '' ) {
	    $pass = md5 ( mysql_real_escape_string ( $_POST['oldpass'] ) );
	    $res = $conn->execute("SELECT * from members WHERE password='$pass';");
	    if ( $res->recordcount() < 1 ) $err = $lang['err_mypr3'];
	    else {
		$pass1 = mysql_real_escape_string ( $_POST['newpass1'] );
		$pass2 = mysql_real_escape_string ( $_POST['newpass2'] );
		if ( $pass1 != $pass2 ) $err = $lang['err_mypr4'];
		elseif ( strlen ( $pass1 ) < $config['pp_pmin'] or strlen ( $pass2 ) < $config['pp_pmin'] or strlen ( $pass1 ) > $config['pp_pmax'] or strlen ( $pass2 ) > $config['pp_pmax'] ) $err = $lang['err_mypr5'];
		if ( $err == '' ) {
		    $newpass = md5($pass1);
		    $rp = $conn->execute("update members set password='$newpass' where uid='$_SESSION[UID]';");
		    if ( $conn->Affected_Rows() > 0 ) $msg = $lang['not_myprofile'];
		    else illegal_op();
		}
	    }
	}
    }
    
    if ( filter_descr($_FILES['userpic']['tmp_name']) != '' and $err == '') {
	if ( $_POST['delpic'] == '1' ) { $err = $lang['err_mypr11']; }
	
	if ( $err == '' ) { 
	    $un = 'photo'; $un1 = $_SESSION['USERNAME']; $fname = $un.'_'.$un1; $MyLogo = $fname;
	    $imagesize = getimagesize( filter_descr($_FILES['userpic']['tmp_name']) );
	    if ( $imagesize[2] == 1 ) $MyLogo .= '.gif';
	    if ( $imagesize[2] == 2 ) $MyLogo .= '.jpg';
	    if ( $imagesize[2] == 3 ) $MyLogo .= '.png';
	    
	    if ( $MyLogo == $un.'_'.$_SESSION['USERNAME'].'.gif' or $MyLogo == $un.'_'.$_SESSION['USERNAME'].'.jpg' or $MyLogo == $un.'_'.$_SESSION['USERNAME'].'.png' or $MyLogo == '' ) {
		$UserImage = filter_descr($_FILES['userpic']['name']);
		if( $MyLogo != '' ) {
		    $del = $conn->execute("select * from members WHERE uid='$_SESSION[UID]'");
		    $del_pic = $del->fields['photo'];
		    
		    if ( $del_pic != '' and $del_pic != 'default.gif' ) { @chmod($config['usrimg_dir'].'/'.$del_pic, 0777); @unlink($config['usrimg_dir'].'/'.$del_pic); }
		    move_uploaded_file ( filter_descr($_FILES['userpic']['tmp_name']), $config['usrimg_dir'].'/in_'.$MyLogo );
		    $source_file = $config['usrimg_dir'].'/in_'.$MyLogo;
		    $destination_file = $config['usrimg_dir'].'/'.$MyLogo;
		    thumbs($source_file, $destination_file, $config['avatar_width'], $config['avatar_height']);
		    @unlink($source_file);
		    
		    $update = $conn->execute("update members set photo='".mysql_real_escape_string($MyLogo)."' where uid='$_SESSION[UID]'");
		    $msg = $lang['not_myprofile'];
		}
	    } else $err=$lang['err_mypr12'];
	}
    }
    
    if ( $_POST['delpic'] == '1' and empty($UserImage) && $err == '' ) {
	$del = $conn->execute("select photo from members WHERE uid='$_SESSION[UID]'");
	$del_pic = $del->fields['photo'];
	$del_file = $config['usrimg_dir'].'/'.$del_pic;
	if ( $del_pic != 'default.gif' and @unlink($del_file) ) {
	    //@unlink($del_file);
	    $rem = $conn->execute("update members set photo='default.gif' WHERE uid='$_SESSION[UID]'");
	    $msg = $lang['not_myprofile'];
	}
    }
    
    if ( $err == '' ) {
	$rs = $conn->execute("update members set $ch_str fname='$inf_fname', lname='$inf_lname', bdate='$inf_bdate', gender='$inf_fgen', rel_status='$inf_frel', show_age='$inf_fage', show_status='$inf_fstatus', about_me='$inf_fabout', site='$inf_furl', inf_occup='$inf_foccup', inf_comp='$inf_fcomp', inf_schools='$inf_fschool', inf_interests='$inf_finteres', inf_movies='$inf_ffavmov', inf_music='$inf_ffavmus', inf_books='$inf_ffavbook' where uid='$_SESSION[UID]';");
	if ( mysql_affected_rows() > 0 ) $msg = $lang['not_myprofile']; //else $err = $lang['err_up13'];
    }
}

$rs = $conn->execute("select * from members where uid='$_SESSION[UID]';");
$uinfo = $rs->getrows();
$smarty->assign('uinfo', $uinfo); $smarty->assign('fields', $uinfo);
$smarty->assign('dmenu', 'mymsg');
set_btn('bhome'); set_sbtn('mpr'); set_title($lang['title_myprofile']);
$smarty->assign('msg', $msg); $smarty->assign('err', $err);
$smarty->assign('chs', 's4');
$smarty->display('main_header.tpl');
$smarty->display('main_profilepage.tpl');
$smarty->display('footer.tpl');
?>