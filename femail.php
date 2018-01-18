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
include("configs/config.php");
//check_login();

$viewkey=filter_title($_GET['id']);
$viewkey1=filter_title($_GET['aid']);
$viewkey2=filter_title($_GET['iid']);

if ( isset ( $_POST['submitfile'] ) ) $_POST['submitfile'] = filter_descr ( $_POST['submitfile'] );
if ( isset ( $_POST['toemail'] ) ) $_POST['toemail'] = filter_descr ( $_POST['toemail'] );
//if ( isset ( $_POST['enotes'] ) ) $_POST['enotes'] = filter_descr ( $_POST['enotes'] );

if ($viewkey!="") { set_btn("bvideo"); set_sbtn("mvideo"); $tbl = 'files_video'; $vtitle = str_replace( '_', ' ', $viewkey ); $smarty->assign('xtype', 'video'); $smarty->assign('mkey', $viewkey); $vkey = $viewkey; }
if ($viewkey1!="") { set_btn("baudio"); set_sbtn("maudio"); $tbl = 'files_audio'; $vtitle = str_replace( '_', ' ', $viewkey1 ); $smarty->assign('xtype', 'audio'); $smarty->assign('mkey', $viewkey1); $vkey = $viewkey1; }
if ($viewkey2!="") { set_btn("bimage"); set_sbtn("mimage"); $tbl = 'files_image'; $vtitle = str_replace( '_', ' ', $viewkey2 ); $smarty->assign('xtype', 'image'); $smarty->assign('mkey', $viewkey2); $vkey = $viewkey2; }

//echo "aa".$tbl;
if ( $config['same_title_uploads'] == '0' ) $mrs = $conn->execute("select uid, vid, vflvname from $tbl where vtitle='$vtitle' and active='1' and is_inapp='no' and vtype='public';");
else $mrs = $conn->execute("select uid, vid, vflvname from $tbl where vkey='$vkey' and active='1' and is_inapp='no' and vtype='public';");
if ( $mrs->recordcount() < 1 ) { illegal_op(); }
$vid = $mrs->fields['vid'];
$uid = $mrs->fields['uid'];
$vflvname = $mrs->fields['vflvname'];

if ($viewkey!="") { $rnd=substr(md5($vid),13,7); $bn=rand(1,1); $photo = $config['tmb_url']."/user".$uid."/".$bn."_".$vid.$rnd.".jpg"; }
if ($viewkey1!="") { $rnd=substr(md5($vid),11,7); $bn=rand(1,1); $photo = $config['tmb_url']."/user".$uid."/".$bn."_".$vid.$rnd.".jpg"; }
if ($viewkey2!="") { $photo = $config['tmb_url']."/user".$uid."/".$vflvname; }
$smarty->assign('fthumb', $photo);

if ($viewkey!="" && $config['enable_videos']=="1") { $the_url="$config[base_url]/video/$viewkey"; } elseif ($viewkey!="" && $config['enable_videos']=="0") { illegal_op(); }
if ($viewkey1!="" && $config['enable_audio']=="1") { $the_url="$config[base_url]/audio/$viewkey1"; } elseif ($viewkey1!="" && $config['enable_audio']=="0") { illegal_op(); }
if ($viewkey2!="" && $config['enable_images']=="1") { $the_url="$config[base_url]/image/$viewkey2"; } elseif ($viewkey2!="" && $config['enable_images']=="0") { illegal_op(); }

$sub = filter_title ( $_GET['sub'] );

if($_POST[submitfile]!='' and $sub == '1')
{
    if ($_POST[toemail]=="") $err=$lang['err_femail4'];
    
    if ($err=="")
    {
	$emails = explode(",",$_POST['toemail']);
	if (count($emails)>3) $err=$lang['err_femail5'];
	if ($err=="")
	{
	    $smarty->assign('the_url',$the_url);
	    $smarty->assign('extra_msg',$_POST['enotes']);
	    $rs = $conn->execute("select * from email_files where email_id='media_email'");
	    $email_path = $rs->fields['email_path'];
	    $subj = $rs->fields['email_subject'];
	    $body=$smarty->fetch($email_path);
	    $rs->Close();
	    
	    for($i=0; $i<count($emails); $i++)
	    {
		$to=$emails[$i];
		$from=$_POST['fromemail'];
		$name=filter_title($_POST['fromname']);
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
				if ( mailto ( $to, $name, $from, $subj, $body ) == '' ) $msg=$lang['not_femail']; else $err=$lang['err_femail6'];
			    } else $err = $lang['uch_shtxt5'];
			}
		    }
		}
	    }
	}
    }
    if ( $err != '' ) echo show_err ( $err );
    elseif ( $msg != '' ) echo show_msg ( $msg );
}

$smarty->assign('the_url',$the_url);
$rs = $conn->execute("select * from email_files where email_id='media_email'");
$email_path = $rs->fields['email_path'];
$body=$smarty->fetch($email_path); 
$smarty->assign('body',$body);
$rs->Close();

$smarty->display('femail.tpl');
?>