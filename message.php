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
check_login();
if ($config['enable_inbox']=="0") { header("Location: $config[base_url]/main"); exit; }

if (isset($_REQUEST['type'])) $_REQUEST['type']=filter_title($_REQUEST['type']);
if (isset($_REQUEST['mid'])) $_REQUEST['mid']=filter_title($_REQUEST['mid']);
if (isset($_REQUEST['send_cancel'])) $_REQUEST['send_cancel']=filter_title($_REQUEST['send_cancel']);
$smarty->assign('dmenu', 'mymsg');
if ($_REQUEST[type]=="inbox")
{
    if($_REQUEST[send_cancel]) { header("Location: $config[base_url]/inbox"); exit; }
    
    $mid=$_REQUEST[mid];
    $sql="select * from pmessages where mid='$mid' and inbox_track='2' and receiver='$_SESSION[USERNAME]'";
    $rs=$conn->execute($sql);
    $snd=$rs->fields[sender];
    $md=$rs->getrows();
    if ($rs->recordcount()==0) { illegal_op(); }
    $smarty->assign('md',$md);
    
    $sql="select * from members where username='$snd'";
    $mrs=$conn->execute($sql);
    $photo=$mrs->fields[photo];
    $gender=$mrs->fields[gender];
    $smarty->assign('photo',$photo);
    $smarty->assign('gender',$gender);
    $conn->execute("update pmessages set seen='1' where mid='$mid'");
    set_btn("messages"); set_sbtn("inbox");
    $smarty->assign('mdi', "1");
    
    $backq = "SELECT * FROM pmessages WHERE mid < '$mid' and inbox_track='2' and receiver='$_SESSION[USERNAME]' order by mid desc LIMIT 1";
    $nextq = "SELECT * FROM pmessages WHERE mid > '$mid' and inbox_track='2' and receiver='$_SESSION[USERNAME]' order by mid asc LIMIT 1";
    $brs=$conn->execute($backq); if ($brs->recordcount()>0) { $back=$brs->fields[mid]; $brs->Close(); } else { $back="0"; } $smarty->assign('back',$back);
    $nrs=$conn->execute($nextq); if ($nrs->recordcount()>0) { $next=$nrs->fields[mid]; $nrs->Close(); } else { $next="0"; } $smarty->assign('next',$next);
}

if ($_REQUEST[type]=="outbox")
{
    if($_REQUEST[send_cancel]) { header("Location: $config[base_url]/outbox"); exit; }
    
    $mid=$_REQUEST[mid];
    $sql="select * from pmessages where mid='$mid' and outbox_track='2' and sender='$_SESSION[USERNAME]'";
    $rs=$conn->execute($sql);
    $rcv=$rs->fields[receiver];
    $md=$rs->getrows();
    if ($rs->recordcount()==0) { illegal_op(); }
    $smarty->assign('md',$md);
    
    $sql="select * from members where username='$rcv'";
    $mrs=$conn->execute($sql);
    $photo=$mrs->fields[photo];
    $gender=$mrs->fields[gender];
    $smarty->assign('photo',$photo);
    $smarty->assign('gender',$gender);
    set_btn("messages"); set_sbtn("outbox");
    $smarty->assign('mdo', "1");

    $backq = "SELECT * FROM pmessages WHERE mid < '$mid' and outbox_track='2' and sender='$_SESSION[USERNAME]' order by mid desc limit 1";
    $nextq = "SELECT * FROM pmessages WHERE mid > '$mid' and outbox_track='2' and sender='$_SESSION[USERNAME]' order by mid asc limit 1";
    $brs=$conn->execute($backq); if ($brs->recordcount()>0) { $back=$brs->fields[mid]; $brs->Close(); } else { $back="0"; } $smarty->assign('back',$back);
    $nrs=$conn->execute($nextq); if ($nrs->recordcount()>0) { $next=$nrs->fields[mid]; $nrs->Close(); } else { $next="0"; } $smarty->assign('next',$next);
    
}

$wto=$_REQUEST[wto];
$wto=filter_title($wto);
$wsub=$_REQUEST[wsub];
$wsub=filter_descr($wsub);
$wmsg=$_REQUEST[wmsg];
$wmsg=filter_descr($wmsg);
$aid=filter_title($_REQUEST[mya]);
$iid=filter_title($_REQUEST[myi]);
$vid=filter_title($_REQUEST[myv]);

if ($wto==$_SESSION[USERNAME]) $err=$lang['err_msgcompose1'];
elseif (filter_descr($_REQUEST[send_msg])!="")
{
    $receiver=$wto;
    $rep=$_REQUEST[repto];

    if($wmsg=="") $err=$lang['err_msgcompose2'];
    elseif (strlen($wmsg)<$config[inbox_min]) $err = $lang['err_msgcompose3'];
    elseif (strlen($wmsg)>$config[inbox_max]) $err = $lang['err_msgcompose4'];
    
    if($wsub=="") $err=$lang['err_msgcompose6'];
    elseif (strlen($wsub)<$config[subj_min]) $err = $lang['err_msgcompose7'];
    elseif (strlen($wsub)>$config[subj_max]) $err = $lang['err_msgcompose8'];
    
    if ($wto=="" && filter_descr($_REQUEST[friend_name])==$lang['inbox_cselfr']) $err=$lang['err_msgcompose10'];
    elseif ($wto!="" && filter_descr($_REQUEST[friend_name])!=$lang['inbox_cselfr']) $err=$lang['err_msgcompose12'];
    elseif ($wto=="" && filter_descr($_REQUEST[friend_name])!=$lang['inbox_cselfr']) $receiver=$_REQUEST[friend_name];
    
    if ($err=='' && $config['msg_block'] == 1)
    {
	$ru = $conn->execute("select uid from members where username='$receiver';");
	$vuid = $ru->fields['uid'];
	$block = check_block($vuid, 'bl_msg'); 
	if ( $block == 'yes' ) $err=$lang['err_msgcompose18'];
        else $err="";
    }
    
    if ($err=='') 
    {
        if ($aid!="none") { $aq="faudio='$aid',"; } else { $aq=""; }
        if ($iid!="none") { $iq="fimage='$iid',"; } else { $iq=""; }
        if ($vid!="none") { $vq="fvideo='$vid',"; } else { $vq=""; }
        
	$rs_e = $conn->execute("select * from members where username='$receiver'");
	$fm=$rs_e->fields[email];
	
	$count = $rs_e->recordcount();
	if ($count>0) 
	{	
	    $conn->execute("insert pmessages set $aq $iq $vq subject='$wsub', body='$wmsg', sender='$_SESSION[USERNAME]', receiver='$receiver', reply_to='$rep', date='".date("Y-m-d H:i:s")."'"); 
	    $mid=mysql_insert_id(); 
	}
	else { $err = $lang['err_msgcompose13']; }
	
	if ($fm!='' and check_email_address($fm) and $config['mail_not1'] == '1' and $err == '')
	{
	    $mtype='mail_not1';
	    send_notification($fm, $receiver, $mtype, $_SESSION[USERNAME], $mid);
	}
	$rs_e->Close();
    }

    if ($err=='') 
    { 
	$sql="insert into friends set uid='$_SESSION[UID]', fname='$receiver', femail='$fm', fstatus='Confirmed', add_date='".date("Y-m-d H:i:s")."'";
	$rr=$conn->execute($sql);
	if (mysql_affected_rows()>0) $rr->Close();
	header("Location: $config[base_url]/inbox/confirmation"); exit;
    }
}

//audio list
if ($config[enable_audio]=="1")
{
    $sqla="select * from files_audio where uid='$_SESSION[UID]' and vtype='public' and is_inapp='no' and active='1' order by vtitle asc";
    $rsa=$conn->execute($sqla);
    $mya=array();
    $mya[]=$lang['inbox_aselfr'];
    $myaid[]="none";
    while(!$rsa->EOF)
    {
	$mya[]=$rsa->fields['vtitle'];
	$myaid[]=$rsa->fields['vid'];
	$rsa->movenext();
    }
    $smarty->assign('mya', $mya);
    $smarty->assign('myaid', $myaid);
    $rsa->Close();
}

//image list
if ($config[enable_images]=="1")
{
    $sqli="select * from files_image where uid='$_SESSION[UID]' and vtype='public' and is_inapp='no' and active='1' order by vtitle asc";
    $rsi=$conn->execute($sqli);
    $myi=array();
    $myi[]=$lang['inbox_iselfr'];
    $myiid[]="none";
    while(!$rsi->EOF)
    {
	$myi[]=$rsi->fields['vtitle'];
	$myiid[]=$rsi->fields['vid'];
	$rsi->movenext();
    }
    $smarty->assign('myi', $myi);
    $smarty->assign('myiid', $myiid);
    $rsi->Close();
}

//video list
if ($config[enable_videos]=="1")
{
    $sqlv="select * from files_video where uid='$_SESSION[UID]' and vtype='public' and is_inapp='no' and active='1' order by vtitle asc";
    $rsv=$conn->execute($sqlv);
    $myv=array();
    $myv[]=$lang['inbox_vselfr'];
    $myvid[]="none";
    while(!$rsv->EOF)
    {
	$myv[]=$rsv->fields['vtitle'];
	$myvid[]=$rsv->fields['vid'];
	$rsv->movenext();
    }
    $smarty->assign('myv', $myv);
    $smarty->assign('myvid', $myvid);
    $rsv->Close();
}

//friend's list
$fsql="select * from friends where uid='$_SESSION[UID]'";
$mrs=$conn->execute($fsql);
$friend_name=array();
$friend_name[]=$lang['inbox_cselfr'];
while(!$mrs->EOF)
{
    $friend_name[]=$mrs->fields['fname'];
    $mrs->movenext();
}
$smarty->assign('friend_name', $friend_name);
$mrs->Close();

if ($_REQUEST[type]!="inbox" && $_REQUEST[type]!="outbox") { illegal_op(); }
set_title($lang['title_inboxdetails']);
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display('main_header.tpl');
$smarty->display('message.tpl');
$smarty->display('footer.tpl');
?>