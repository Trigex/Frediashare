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
include("../configs/config.php");
check_admin_login();

if (isset($_REQUEST['action'])) $_REQUEST['action']=filter_title($_REQUEST['action']);
if (isset($_REQUEST['id'])) $_REQUEST['id']=filter_title($_REQUEST['id']);
if (isset($_REQUEST['cancel_wm'])) $_REQUEST['cancel_wm']=filter_title($_REQUEST['cancel_wm']);
if (isset($_REQUEST['cancel_add'])) $_REQUEST['cancel_add']=filter_title($_REQUEST['cancel_add']);
if (isset($_REQUEST['edit_wm'])) $_REQUEST['edit_wm']=filter_title($_REQUEST['edit_wm']);
if (isset($_REQUEST['add_wm'])) $_REQUEST['add_wm']=filter_title($_REQUEST['add_wm']);
if (isset($_REQUEST['name'])) $_REQUEST['name']=filter_title($_REQUEST['name']);
if (isset($_REQUEST['descrip'])) $_REQUEST['descrip']=filter_descr($_REQUEST['descrip']);
        
if($_REQUEST['action']=="edit")
{  
    $chid=$_REQUEST[id];;
    $sql ="select * from watermark_audio where wid='$chid'";
    $rs=$conn->execute($sql);
    $watermark = $rs->getrows();
    $smarty->assign('watermark', $watermark[0]);
    $wrs=$conn->execute("select wwidth, wheight from playeraudio_settings where ID='1'");
    $wwidth=$wrs->fields[wwidth]; $smarty->assign('wwidth',$wwidth);
    $wheight=$wrs->fields[wheight]; $smarty->assign('wheight',$wheight);
}	

if($_REQUEST['action']=="disable")
{  
    $chid=$_REQUEST['id'];
    $sql1 = "update watermark_audio set active='0' where wid='$chid'";
    $rs=$conn->execute($sql1);
    header("Location: $config[admin_url]/watermark_main_audio");
    exit;
}				
if($_REQUEST['action']=="enable")
{
    $chid=$_REQUEST['id'];
    $sql = "update watermark_audio set active='1' where wid='$chid'";
    $rs=$conn->execute($sql);
    header("Location: $config[admin_url]/watermark_main_audio");
    exit;
}
if($_REQUEST['cancel_wm']!="")
{
    header("Location: $config[admin_url]/watermark_main_audio");
    exit;
}
if($_REQUEST['cancel_add']!="")
{
    header("Location: $config[admin_url]/watermark_main_audio");
    exit;
}

		
if($_REQUEST['edit_wm']!="")
{
    if ($_REQUEST[name]=="") $err=$lang['adm_errplaylogo0'];
    elseif (strlen($_REQUEST[name])<3) $err=$lang['adm_errplaylogo1'];
    
    if ($_REQUEST[descrip]=="") $err=$lang['adm_errplaylogo3'];
    elseif (strlen($_REQUEST[descrip])<3) $err=$lang['adm_errplaylogo4'];
    
    if($_FILES[picture][tmp_name]!="")
    {
	$wrs=$conn->execute("select wwidth, wheight from playeraudio_settings where ID='1'");
	$wwidth=$wrs->fields[wwidth]; $smarty->assign('wwidth',$wwidth);
	$wheight=$wrs->fields[wheight]; $smarty->assign('wheight',$wheight);
	
	$ext = strrchr($_FILES[picture]["name"], '.');
            if(strtolower($ext)=='.jpg' || strtolower($ext)=='.gif' || strtolower($ext)=='.png')
	    {
		$sql="select * from watermark_audio where wid='$_REQUEST[id]'";
		$mrs=$conn->execute($sql);
		$image_name=$mrs->fields[image];
		$mm=$mrs->fields[wid];
	    
		$image_tmp=$mm."_tmp".$ext;
		$rname_tmp=$config['dir_fp'].'/wms_audio/'.$image_tmp;
		$rname1=$config['dir_fp'].'/wms_audio/'.$mm.$ext;
		$rname=$config['dir_fp'].'/wms_audio/'.$image_name;
		
		if(rename($_FILES[picture][tmp_name],$rname_tmp))
		{
		    @chmod($rname_tmp, 0666);
		    @chmod($rname, 0666);
		    @copy($rname_tmp, $rname1);
		    //thumbs($rname_tmp, $rname1, $wwidth, $wheight);
		    
		    @unlink($rname);
		    @unlink($rname_tmp);
		    $image_name=$mm.$ext;
		}
	    }
	    else
	    {
		$sql="select image from watermark_audio where wid='$_REQUEST[id]'";
		$mrs=$conn->execute($sql);
		$image_name=$mrs->fields[image];
		$err=$lang['adm_errplaylogo15'];
	    }
    }
    else
    {
	$sql="select image from watermark_audio where wid='$_REQUEST[id]'";
	$mrs=$conn->execute($sql); 
	$image_name=$mrs->fields[image];
    }
    
    $smarty->assign('err',$err);				
    
    if ($err=="") 
    {
	$rqname=filter_title($_REQUEST[name]);
        $rqdesc=filter_descr($_REQUEST[descrip]);
	$sql = "update watermark_audio set
                                name = '$rqname',
                                description = '$rqdesc',
				image = '$image_name' where wid='$_REQUEST[id]'";
        $rs=$conn->execute($sql);
	header("Location: $config[admin_url]/watermark_audio/saved");
	exit;
    }
}

if($_REQUEST['add_wm'])
{
    if ($_REQUEST[descrip]=="") $err=$lang['adm_errplaylogo3'];
    elseif (strlen($_REQUEST[descrip])<3) $err=$lang['adm_errplaylogo4'];

    if ($_REQUEST[name]=="") $err=$lang['adm_errplaylogo0'];
    elseif (strlen($_REQUEST[name])<3) $err=$lang['adm_errplaylogo1'];

	$wrs=$conn->execute("select wwidth, wheight from playeraudio_settings where ID='1'");
	$wwidth=$wrs->fields[wwidth]; $smarty->assign('wwidth',$wwidth);
	$wheight=$wrs->fields[wheight]; $smarty->assign('wheight',$wheight);
    
    if($err=="")
    {
	$sql="select * from watermark_audio order by wid desc";
	$rs=$conn->execute($sql);
	if ($rs->recordcount()<1) { $mm="1"; }
	else { $mid=$rs->fields[wid]; $mm=$mid+1; }
	if($_FILES[picture]!="")
    	{
	    $ext = strrchr($_FILES[picture]["name"], '.');
            if(strtolower($ext)=='.jpg' || strtolower($ext)=='.gif' || strtolower($ext)=='.png')
	    {
		$image_tmp=$mm."_tmp".$ext;
		$image_name=$mm.$ext;
		$rname_tmp=$config['dir_fp'].'/wms_audio/'.$image_tmp;
		$rname=$config['dir_fp'].'/wms_audio/'.$image_name;
		
		if(rename($_FILES[picture][tmp_name],$rname_tmp))
		{
		    @chmod($rname_tmp, 0666);
		    @copy($rname_tmp, $rname);
		    //thumbs($rname_tmp, $rname, $wwidth, $wheight);
		    @unlink($rname_tmp);
		}
	    }
	    else
	    {
		$err = $lang['adm_errplaylogo15'];
	    }
        }
  
	if($err=="")
	{
	    $rqname=filter_title($_REQUEST[name]);
    	    $rqdesc=filter_descr($_REQUEST[descrip]);
    	    $sql = "insert watermark_audio set
                                name = '$rqname',
                                description = '$rqdesc',
				image = '$image_name'";
    	    $conn->execute($sql);
	}		
    }		
    
    if($err == "")
    {
	header("Location: $config[admin_url]/watermark_audio/saved");
	exit;
    }
}


$chid=$_REQUEST[id];
$sql ="select * from watermark_audio where wid='$chid'";
$rs=$conn->execute($sql);
$img=$rs->fields[image];
$watermark = $rs->getrows();
$smarty->assign('watermark', $watermark[0]);

set_btn("adm_fp"); set_sbtn("wmaudio");
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display("administration/main_header.tpl");
$smarty->display("administration/watermark_edit_audio.tpl");
$smarty->display("administration/main_footer.tpl");
?>