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
check_admin_login();

if (isset($_REQUEST['type'])) $_REQUEST['type']=filter_title($_REQUEST['type']);
if (isset($_REQUEST['edit'])) $_REQUEST['edit']=filter_title($_REQUEST['edit']);
if (isset($_REQUEST['enable'])) $_REQUEST['enable']=filter_title($_REQUEST['enable']);
if (isset($_REQUEST['disable'])) $_REQUEST['disable']=filter_title($_REQUEST['disable']);
if (isset($_REQUEST['tocancel'])) $_REQUEST['tocancel']=filter_title($_REQUEST['tocancel']);
if (isset($_REQUEST['submit'])) $_REQUEST['submit']=filter_title($_REQUEST['submit']);
if (isset($_REQUEST['goact'])) $_REQUEST['goact']=filter_title($_REQUEST['goact']);

// ad settings
if ($_REQUEST[type]=="ads")
{
if ($_REQUEST[goact]!="" && $err=="")
{
    if ($_REQUEST['mid']=="") $err=$lang['err_msgcompose14']; //nothing selected
    elseif ($_REQUEST[actions]==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected
    if ($err=="")
    {
        if ($_REQUEST[actions]==$lang['act_frenable']) //enable selected
        {
            foreach($_REQUEST['mid'] as $value) { $conn->execute("update adv_site set astatus='1' where aid='$value' and astatus='0'"); }
        }
        if ($_REQUEST[actions]==$lang['act_frdisable']) //disable selected
        {
            foreach($_REQUEST['mid'] as $value) { $conn->execute("update adv_site set astatus='0' where aid='$value' and astatus='1'"); }
        }
        if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
    }
}

    if ($_REQUEST[disable]!="") 
    { 
	$qu="update adv_site set astatus='0' where aid='$_REQUEST[disable]'";
	$conn->execute($qu);
	header("Location: $config[admin_url]/settings/ads");
	exit;
    }
    if ($_REQUEST[enable]!="") 
    {
	$qu="update adv_site set astatus='1' where aid='$_REQUEST[enable]'";
	$conn->execute($qu);
	header("Location: $config[admin_url]/settings/ads");	
	exit;
    }
    if ($_REQUEST[edit]!="")
    {
	if ($_REQUEST[tocancel]!="")
	{
	    header("Location: $config[admin_url]/settings/ads");
	    exit;
	}
	if ($_REQUEST[submit]!="")
	{
	    $mq="select afilename from adv_site where aid='$_REQUEST[edit]'";
	    $mrs=$conn->execute($mq);
	    $file=$mrs->fields[afilename];
	    $file_path = $config['base_dir']."/templates/".$file;
	    
	    if(file_exists($file_path))
	    {
		$handle = fopen($file_path, "w");
		if (get_magic_quotes_gpc()) fwrite($handle,stripslashes($_REQUEST[ads_edit]));
		else fwrite($handle,$_REQUEST[ads_edit]);
		fclose($handle);
		$msg=$lang['admnot_setadsave'];
		$adesc=filter_descr($_REQUEST[adescr]);
		$conn->execute("update adv_site set adescr='$adesc' where aid='$_REQUEST[edit]'");
	    } else illegal_opa();
    	    
	}
	
	$qu="select * from adv_site where aid='$_REQUEST[edit]'";
	$rs=$conn->execute($qu);
	if ($rs->recordcount()>0) {
	    $filename=$rs->fields[afilename];
	    $file_path = $config['base_dir']."/templates/".$filename;
	    $smarty->assign('ads', $rs->getrows());
	    if(file_exists($file_path)) {
		@chmod($file_path, 0666); $handle = fopen($file_path, "rb"); $theData = fread($handle, filesize($file_path)); fclose($handle); $file=$theData;
	    }
	}
	
	
	include('fckeditor/fckeditor.php');
	
	$sBasePath = "$config[admin_url]/fckeditor/";
	$oFCKeditor = new FCKeditor('ads_edit');
	$oFCKeditor->BasePath = $sBasePath;
	$oFCKeditor->CustomConfigurationsPath = "fckconfig.js";
	$oFCKeditor->FontSizes = "7px";
	if ($body=="") $oFCKeditor->Value  = $file;
	else $oFCKeditor->Value  = $body;
	
	$oFCKeditor->Width  = '100%';
	$oFCKeditor->Height = '400';
	$ads_edit = $oFCKeditor->CreateHtml() ;
	$smarty->assign('ads_edit',$ads_edit);
	
	set_btn("adm_set"); set_sbtn("siteads");
	$smarty->assign('msg',$msg);
	$smarty->display('administration/main_header.tpl'); 
	$smarty->display('administration/ads2_edit.tpl');
	$smarty->display('administration/main_footer.tpl');
	exit;
    }
    
    $sql="select * from adv_site order by aid asc";
    $rs=$conn->execute($sql);
    $ads=$rs->getrows();
    $smarty->assign('ads',$ads);
    $smarty->assign('msg',$msg);
    $smarty->assign('err',$err);
    set_btn("adm_set"); set_sbtn("siteads");
    $smarty->display('administration/main_header.tpl');
    $smarty->display('administration/main_ads.tpl');
    $smarty->display('administration/main_footer.tpl');
}
?>