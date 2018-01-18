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

if ($config['enable_inbox']=="0") { header("Location: $config[base_url]/main"); exit; }

if (isset($_REQUEST['send_cancel'])) $_REQUEST['send_cancel']=filter_title($_REQUEST['send_cancel']);
if (isset($_REQUEST['type'])) $_REQUEST['type']=filter_title($_REQUEST['type']);
if (isset($_REQUEST['to'])) $_REQUEST['to']=filter_descr($_REQUEST['to']);
if (isset($_REQUEST['send_msg'])) $_REQUEST['send_msg']=filter_title($_REQUEST['send_msg']);
if (isset($_REQUEST['friend_name'])) $_REQUEST['friend_name']=filter_descr($_REQUEST['friend_name']);
$smarty->assign('dmenu', 'mymsg');
if ( $_REQUEST['to'] != '' ) check_login('inbox/compose/'.$_REQUEST['to']); else check_login('compose');

if($_REQUEST[send_cancel]) { header("Location: $config[base_url]/inbox"); exit; }

if ($_REQUEST[type]=="new")
{
    $to=$_REQUEST[to];
    if ($config[special_characters]=="1")
    {
	$sql="select username from members where uid='$to'";
	$rs1=$conn->execute($sql);
	$to=$rs1->fields[username];
    }
    $smarty->assign('to',$to);
}
elseif ($_REQUEST[type]=="selected")
{
    if ($config['msg_multi'] == 0) { header("Location: $config[base_url]/main"); exit; } 
    $smarty->assign('memsel',$_SESSION['mid']);
}
$wto=$_REQUEST[wto];
$wto=filter_descr($wto);
$wsub=$_REQUEST[wsub];
$wsub=filter_descr($wsub);
$wmsg=$_REQUEST[wmsg];
$wmsg=filter_descr($wmsg);
$aid=filter_title($_REQUEST[mya]);
$iid=filter_title($_REQUEST[myi]);
$vid=filter_title($_REQUEST[myv]);

if ($wto==$_SESSION[USERNAME]) $err=$lang['err_msgcompose1'];
elseif ($_REQUEST[send_msg])
{
    $receiver=$wto;
    $rep=filter_descr($_REQUEST[repto]);
    
    if($wmsg=="") $err=$lang['err_msgcompose2'];
    elseif (strlen($wmsg)<$config[inbox_min]) $err = $lang['err_msgcompose3'];
    elseif (strlen($wmsg)>$config[inbox_max]) $err = $lang['err_msgcompose4'];
    
    if($wsub=="") $err=$lang['err_msgcompose6'];
    elseif (strlen($wsub)<$config[subj_min]) $err = $lang['err_msgcompose7'];
    elseif (strlen($wsub)>$config[subj_max]) $err = $lang['err_msgcompose8'];
    
    if ($wto=="" && $_REQUEST[friend_name]==$lang['inbox_cselfr']) $err=$lang['err_msgcompose10'];
    elseif ($wto!="" && (isset($_REQUEST[friend_name]) && $_REQUEST[friend_name]!=$lang['inbox_cselfr'])) $err=$lang['err_msgcompose12'];
    elseif ($wto=="" && $_REQUEST[friend_name]!=$lang['inbox_cselfr']) $receiver=$_REQUEST[friend_name];
    
    if ($err=="" && $config['msg_block'] == 1)
    {
	$ru = $conn->execute("select uid from members where username='$receiver';");
	$vuid = $ru->fields['uid'];
	$block = check_block($vuid, 'bl_msg');
	if ( $block == 'yes' ) $err=$lang['err_msgcompose18'];
	else $err="";
    }
    
    if ($err=="" && $_REQUEST['type']!='selected') 
    {
	if ($config['msg_attach'] == 0) { $aq=$iq=$vq=''; }
	else
	{
    	    if ($aid!="none") { $aq="faudio='$aid',"; } else { $aq=""; }
    	    if ($iid!="none") { $iq="fimage='$iid',"; } else { $iq=""; }
    	    if ($vid!="none") { $vq="fvideo='$vid',"; } else { $vq=""; }
    	}
        
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
	    send_notification($fm, $receiver, $_SESSION['USERNAME'], $mtype, $mid);
	}
	$rs_e->Close();
    }
    elseif ($err=="" && $_REQUEST['type']=='selected') //message selected
    {
	if ($config['msg_attach'] == 0) { $aq=$iq=$vq=''; }
	else
	{
    	    if ($aid!="none") { $aq="faudio='$aid',"; } else { $aq=""; }
    	    if ($iid!="none") { $iq="fimage='$iid',"; } else { $iq=""; }
    	    if ($vid!="none") { $vq="fvideo='$vid',"; } else { $vq=""; }
    	}
    
	$listmem=explode(",",$_REQUEST['wto']); 
	foreach ($listmem as $value)
	{
	    if ($_SESSION['USERNAME'] != $value) 
	    {
		$rs_e = $conn->execute("select * from members where username='".filter_descr($value)."'");
		$fm=$rs_e->fields[email];
		
		$conn->execute("insert pmessages set $aq $iq $vq subject='$wsub', body='$wmsg', sender='$_SESSION[USERNAME]', receiver='".filter_descr($value)."', reply_to='$rep', date='".date("Y-m-d H:i:s")."'");
		$mid=mysql_insert_id();
	    
		if ($fm!='' and check_email_address($fm) and $config['mail_not1'] == '1')
		{
		    $mtype='mail_not1';
		    send_notification($fm, $value, $mtype, $_SESSION[USERNAME], $mid);
	        }
	    }
	}
	if ($conn->Affected_Rows() > 0) $msg=$lang['admnot_memmsgall'];
	if ($err=='') { session_unregister($_SESSION['mid']); }
    }
    
    if ($err=="" && $_REQUEST['type']!='selected') 
    { 
	$sql="insert into friends set uid='$_SESSION[UID]', fname='$receiver', femail='$fm', fstatus='Confirmed', add_date='".date("Y-m-d H:i:s")."'";
	$rr=$conn->execute($sql);
	if (mysql_affected_rows()>0) $rr->Close();
	header("Location: $config[base_url]/inbox/confirmation"); exit;
    }
}

if ($config['msg_attach'] == 1) {
//audio list
if ($config[enable_audio]=="1")
{
    $sqla="select * from files_audio where (uid='$_SESSION[UID]') and (vtype='public') and (is_inapp='no') and (active='1') order by vtitle asc";
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
    $sqli="select * from files_image where (uid='$_SESSION[UID]') and (vtype='public') and (is_inapp='no') and (active='1') order by vtitle asc";
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
    $sqlv="select * from files_video where (uid='$_SESSION[UID]') and (vtype='public') and (is_inapp='no') and (active='1') order by vtitle asc";
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
}
if ($_REQUEST['type'] != 'selected')
{
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
$friends=$mrs->getrows();
$smarty->assign('friends',$friends);
$mrs->Close();
}
set_btn("messages"); set_sbtn("compose"); set_title($lang['title_inboxcompose']);
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display('main_header.tpl');
$smarty->display('message_compose.tpl');
$smarty->display('footer.tpl');
?>