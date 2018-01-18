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

// template settings
if ($_REQUEST[type]=="templates")
{
if ($_REQUEST[goact]!="" && $err=="")
{
    if ($_REQUEST['mid']=="") $err=$lang['err_msgcompose14']; //nothing selected
    elseif ($_REQUEST[actions]==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected
    if ($err=="")
    {
        if ($_REQUEST[actions]==$lang['act_frenable']) //enable selected
        {
            foreach($_REQUEST['mid'] as $value) { $conn->execute("update static_files set active='1' where fid='$value' and active='0'"); }
        }
        if ($_REQUEST[actions]==$lang['act_frdisable']) //disable selected
        {
            foreach($_REQUEST['mid'] as $value) { $conn->execute("update static_files set active='0' where fid='$value' and active='1'"); }
        }
    }
} 
    if ($_REQUEST[edit]!="")
    {
    
	if ($_REQUEST[tocancel]!="")
	{
	    header("Location: $config[admin_url]/settings/templates");
	    exit;
	}
	if ($_REQUEST[submit]!="")
	{
	    function cutline($filename,$line_no=-1) 
	    {
		$strip_return=FALSE; 
		$data=file($filename);
		$pipe=fopen($filename,'w');
		$size=count($data); 
		
		if($line_no==-1) $skip=$size-1;
		    else $skip=$line_no-1;
		    
		for($line=0;$line<$size;$line++)
		    if($line!=$skip)
			fputs($pipe,$data[$line]);
		    else 
			$strip_return=TRUE;
		return $strip_return; 
	    }
	    
	    $mq="select email_path from email_files where email_id='$_REQUEST[edit]'";
	    $mrs=$conn->execute($mq);
	    if ($mrs->recordcount()>0)
	    {
		$file=$mrs->fields[email_path];
		$file_path = $config['base_dir']."/templates/".$file;
	    
		if(file_exists($file_path))
		{
		    $handle = fopen($file_path, "w");
		    if (get_magic_quotes_gpc()) fwrite($handle,stripslashes($_REQUEST[tpl_edit]));
		    else fwrite($handle,$_REQUEST[tpl_edit]);
		    fclose($handle);
		    cutline ($file_path,1);
		    cutline ($file_path,1);
		    $email_subject=$_REQUEST[tpl_subj];
		    $comment=filter_descr($_REQUEST[tpl_descr]);
		    $conn->execute("update email_files set email_subject='$email_subject', comment='$comment' where email_id='$_REQUEST[edit]'");
		    $msg=$lang['admnot_settplsave'];
		} //else illegal_opa();
	    }
	    
	    $nq="select * from static_files where ff='$_REQUEST[edit]'";
	    $nrs=$conn->execute($nq);
	    if ($nrs->recordcount()>0)
	    {
		$ff=$nrs->fields['file'];
		$file=$nrs->fields[fpath];
		$file_path = $config['base_dir']."/templates/".$file;
		
		if ($ff!="-")
		{
		$ren=filter_descr($_REQUEST[renameit]);
		$fil=filter_descr($_REQUEST[renamefi]);
		$des=filter_descr($_REQUEST[tdescr]);
		
		if ($ren=="") $err=$lang['admerr_edittpl1'];
		elseif (strlen($ren)<3 || strlen($ren)>50) $err=$lang['admerr_edittpl2'];
		else $conn->execute("update static_files set fname='$ren' where ff='$_REQUEST[edit]'");

		if ($des=="") $err=$lang['admerr_edittpl3'];
		elseif (strlen($des)<3 || strlen($des)>50) $err=$lang['admerr_edittpl4'];
		else $conn->execute("update static_files set fdescr='$des' where ff='$_REQUEST[edit]'");

		if ($fil=="") $err=$lang['admerr_edittpl5'];
		elseif (strlen($fil)<3 || strlen($fil)>50) $err=$lang['admerr_edittpl6'];
		else 
		{
		    if($err=="")
		    {
			$xrs=$conn->execute("select file from static_files where ff='$_REQUEST[edit]'");
			$of=$xrs->fields['file'];
			if ($of!=$fil)
			{
			    @chmod($config[base_dir]."/".$of, 0666);
			    if (rename($config[base_dir]."/".$of, $config[base_dir]."/".$fil))
				$conn->execute("update static_files set file='$fil' where ff='$_REQUEST[edit]'");
			    else $err=$lang['adm_errcateg3'];
			}
		    }
		}
		} 
		else { $conn->execute("update static_files set fdescr='$_REQUEST[tdescr]' where ff='$_REQUEST[edit]'"); }
		
		if(file_exists($file_path) && $err=="")
		{
		    $handle = fopen($file_path, "w");
		    if (get_magic_quotes_gpc()) fwrite($handle,stripslashes($_REQUEST[tpl_edit]));
		    else fwrite($handle,$_REQUEST[tpl_edit]);
		    fclose($handle);
		    cutline ($file_path,1);
		    cutline ($file_path,1);
		    $msg=$lang['admnot_settplsave'];
		} //else illegal_opa();
	    }
	    
	}
	
	$qu="select * from email_files where email_id='$_REQUEST[edit]'";
	$rs=$conn->execute($qu);
	if ($rs->recordcount()>0)
	{
	    $smarty->assign('showsubj',"yes");
	    $str="<link rel=\"stylesheet\" type=\"text/css\" href=\"$config[theme_url]/$config[site_theme]/styles/main.css\" media=\"screen\">\n";
	    $filename=$rs->fields[email_path];
	    $file_path = $config['base_dir']."/templates/".$filename;
	    $smarty->assign('tpl', $rs->getrows());
	    if(file_exists($file_path))
	    {
		$handle = fopen($file_path, "rb");
		$theData = fread($handle, filesize($file_path));
		fclose($handle);
		$file=$theData;
	    }
	}
	
	$sq="select * from static_files where ff='$_REQUEST[edit]'";
	$res=$conn->execute($sq);
	if ($res->recordcount()>0)
	{
	    if ( $_REQUEST['edit'] != 'lpage' ) $str="<link rel=\"stylesheet\" type=\"text/css\" href=\"$config[theme_url]/$config[site_theme]/styles/main.css\" media=\"screen\">\n"; else $str = '';
	    $filename=$res->fields[fpath];
	    $file_path = $config['base_dir']."/templates/".$filename;
	    if(file_exists($file_path))
	    {
		@chmod($file_path, 0666);
		$handle = fopen($file_path, "rb");
		$theData = fread($handle, filesize($file_path));
		fclose($handle);
		$file=$theData;
//		$conn->execute("update static_files set fdescr='$_REQUEST[tdescr]' where ff='$_REQUEST[edit]'");
	    }
	}
	
	include('fckeditor/fckeditor.php');
	
	$sBasePath = "$config[admin_url]/fckeditor/";
	$oFCKeditor = new FCKeditor('tpl_edit');
	$oFCKeditor->BasePath = $sBasePath;
	$oFCKeditor->CustomConfigurationsPath = "fckconfig.js";
	
	$nf=$str.$file;

	if ($body=="") $oFCKeditor->Value  = "$nf";
	else $oFCKeditor->Value  = "$body";
	
	$oFCKeditor->Width  = '100%';
	$oFCKeditor->Height = '400';
	$tpl_edit = $oFCKeditor->CreateHtml();
	$smarty->assign('tpl_edit',$tpl_edit);
	
	$smarty->assign('tpl1', $res->getrows());
	set_btn("adm_set"); set_sbtn("tpl");
	$smarty->assign('msg',$msg);
	$smarty->assign('err',$err);
	$smarty->display('administration/main_header.tpl'); 
	$smarty->display('administration/tpl_edit.tpl');
	$smarty->display('administration/main_footer.tpl');
	exit;
    }
    
    if ($_REQUEST[disable]!="")
    {
	$conn->execute("update static_files set active='0' where ff='$_REQUEST[disable]'");
	header("$config[admin_url]/settings/templates");
    }
    if ($_REQUEST[enable]!="")
    {
	$conn->execute("update static_files set active='1' where ff='$_REQUEST[enable]'");
	header("$config[admin_url]/settings/templates");
    }
    
    $qu="select * from email_files";
    $rs=$conn->execute($qu);
    $emails=$rs->getrows();
    $smarty->assign('emails',$emails);
    
    $qu1="select * from static_files";
    $rs1=$conn->execute($qu1);
    $static=$rs1->getrows();
    $smarty->assign('static',$static);
    
    set_btn("adm_set"); set_sbtn("tpl");
    $smarty->display('administration/main_header.tpl');
    $smarty->display('administration/main_templates.tpl');
    $smarty->display('administration/main_footer.tpl');
}
?>