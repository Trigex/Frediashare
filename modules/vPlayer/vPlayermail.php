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
include("../../configs/config.php");

$viewkey=filter_title($_GET['id']);

if ( isset ( $_POST['me'] ) ) $_POST['me'] = filter_descr ( $_POST['me'] );
if ( isset ( $_POST['to'] ) ) $_POST['to'] = filter_descr ( $_POST['to'] );
if ( isset ( $_POST['message'] ) ) $_POST['message'] = filter_descr ( $_POST['message'] );

if ($viewkey!="") { 
    $tbl = 'files_video'; 
    $list = key_to_info ( $viewkey );
    $vt = $list[2];
    $vtitle = str_replace( ' ', '_', $vt ); 
}

$mrs = $conn->execute("select uid, vid, vflvname from $tbl where vkey='$viewkey' and active='1' and is_inapp='no' and vtype='public';");
if ( $mrs->recordcount() < 1 ) { illegal_op(); }
$vid = $mrs->fields['vid'];
$uid = $mrs->fields['uid'];
$vflvname = $mrs->fields['vflvname'];

if ($viewkey!="") { $rnd=substr(md5($vid),13,7); $bn=rand(1,1); $photo = $config['tmb_url']."/user".$uid."/".$bn."_".$vid.$rnd.".jpg"; }
$smarty->assign('fthumb', $photo);

if ($viewkey!="" && $config['enable_videos']=="1") { $the_url="$config[base_url]/video/$vtitle"; } elseif ($viewkey!="" && $config['enable_videos']=="0") { exit; }

if ( isset($_POST['me']) && isset($_POST['to']) && isset($_POST['message']) ) { 
    if ($_POST['me']=="") $err=$lang['err_femail1'];
	elseif(!check_email_address($_POST['me'])) $err=$lang['err_femail2'];
	//elseif(!check_email_address($_POST['to'])) $err=$lang['err_femail2'];
    if ($_POST['message']=="") $err=$lang['err_femail3'];
    if ($_POST['to']=="") $err=$lang['err_femail4'];
    
    if ($err=="")
    {
	$emails = explode(",",$_POST['to']);
	if (count($emails)>3) $err=$lang['err_femail5'];
	if ($err=="")
	{
	    $smarty->assign('the_url',$the_url);
	    $smarty->assign('extra_msg',$_POST['message']);
	    $rs = $conn->execute("select * from email_files where email_id='media_email'");
	    $email_path = $rs->fields['email_path'];
	    $subj = $rs->fields['email_subject'];
	    $body=$smarty->fetch($email_path);
	    $rs->Close();
	    
	    for($i=0; $i<count($emails); $i++)
	    {
		$to=$emails[$i];
		$from=$_POST['me'];
		$name = $_SESSION['USERNAME'];
		if (!check_email_address($to)) $err=$lang['err_femail2'];
		if ( $err == '' ) {
		    $ip = $_SERVER['REMOTE_ADDR'];
		    $ct = $conn->execute("select e_try, e_time from email_usage where e_ip = '$ip' order by e_try desc limit 0,1;");
		    $ct1 = $conn->execute("SELECT count(*) as total from email_usage where e_ip = '$ip';");
		    $ctotal = $ct1->fields['total'];
		    $ctry = $ct->fields['e_try'];
		    $ctime = $ct->fields['e_time'];
		    
		    if ( $ctry == '' ) $ctry = 1; else $ctry = $ctry + 1; 
		    if ( $ctime > strtotime ( "-60 minutes" ) and ( $ctotal == $config['emails_per_hour'] ) ) $err = $lang['uch_shtxt5'];
		    if ( $err == '' ) {
			if ( $ctotal <= $config['emails_per_hour'] ) {
			    $c1 = $conn->execute("insert into email_usage set e_ip = '$ip', e_try = '".$ctry."', e_time = '".time()."';");
			    if ( mysql_affected_rows() > 0 ) {
				if (mailto($to,$name,$from,$subj,$body)=="") $msg=$lang['not_femail']; else $err=$lang['err_femail6'];
			    } else $err = $lang['uch_shtxt5'];
			}
		    }
		}
	    }
	}
    }
}
?>