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
if (isset($_REQUEST['url'])) $_REQUEST['url']=filter_descr($_REQUEST['url']);
if (isset($_REQUEST['position'])) $_REQUEST['position']=filter_title($_REQUEST['position']);
if (isset($_REQUEST['transparency'])) $_REQUEST['transparency']=filter_title($_REQUEST['transparency']);
if (isset($_REQUEST['rtransparency'])) $_REQUEST['rtransparency']=filter_title($_REQUEST['rtransparency']);
        
if($_REQUEST['action']=="edit")
{  
    $chid=$_REQUEST[id];;
    $sql ="select * from watermark where wid='$chid'";
    $rs=$conn->execute($sql);
    $watermark = $rs->getrows();
    $smarty->assign('watermark', $watermark[0]);
}	

if($_REQUEST['action']=="disable")
{  
    $chid=$_REQUEST['id'];
    $sql1 = "update watermark set active='0' where wid='$chid'";
    $rs=$conn->execute($sql1);
    header("Location: $config[admin_url]/watermark_main");
    exit;
}				
if($_REQUEST['action']=="enable")
{
    $chid=$_REQUEST['id'];
    $sql = "update watermark set active='1' where wid='$chid'";
    $rs=$conn->execute($sql);
    header("Location: $config[admin_url]/watermark_main");
    exit;
}
if($_REQUEST['cancel_wm']!="")
{
    header("Location: $config[admin_url]/watermark_main");
    exit;
}
if($_REQUEST['cancel_add']!="")
{
    header("Location: $config[admin_url]/watermark_main");
    exit;
}

		
if($_REQUEST['edit_wm']!="")
{
    if ($_REQUEST[name]=="") $err=$lang['adm_errplaylogo0'];
    elseif (strlen($_REQUEST[name])<3) $err=$lang['adm_errplaylogo1'];
    
    if ($_REQUEST[descrip]=="") $err=$lang['adm_errplaylogo3'];
    elseif (strlen($_REQUEST[descrip])<3) $err=$lang['adm_errplaylogo4'];
    
    if ($_REQUEST[url]=="") $err=$lang['adm_errplaylogo6'];
    elseif (strlen($_REQUEST[url])<3) $err=$lang['adm_errplaylogo7'];
    
    if ($_REQUEST[position]=="") $err=$lang['adm_errplaylogo8'];
    
    if ($_REQUEST[transparency]=="") $err=$lang['adm_errplaylogo9'];
    elseif (!is_numeric($_REQUEST[transparency])) $err=$lang['adm_errplaylogo10'];
    elseif (strlen($_REQUEST[transparency])>3) $err=$lang['adm_errplaylogo11'];
    
    if($_FILES[picture][tmp_name]!="")
    {
	$ext = strrchr($_FILES[picture]["name"], '.');
        if(strtolower($ext)=='.jpg' || strtolower($ext)=='.png' || strtolower($ext)=='.gif')
	{
	    $image_name="$_REQUEST[id]".$ext."";
	    $err = upload_swf($_FILES, 'picture',"/".$image_name."", 120, $config['dir_fp'].'/wms/');
	}
	elseif(strtolower($ext)=='.swf')
	{
	    $image_name="$_REQUEST[id]".$ext."";
	    $err = upload_swf($_FILES, 'picture',"/".$image_name."", 120, $config['dir_fp'].'/wms/');
	}
	else
	{
	    $sql="select image from watermark where wid='$_REQUEST[id]'";
	    $mrs=$conn->execute($sql);
	    $image_name=$mrs->fields[image];
	    $err=$lang['adm_errplaylogo15'];
	}
    }
    else
    {
	$sql="select image from watermark where wid='$_REQUEST[id]'";
	$mrs=$conn->execute($sql); 
	$image_name=$mrs->fields[image];
    }
    $smarty->assign('err',$err);				
    if ($err=="") 
    {
	$rqname=filter_title($_REQUEST[name]);
	$rqdesc=filter_descr($_REQUEST[descrip]);
	$sql = "update watermark set
                                name = '$rqname',
                                description = '$rqdesc',
				position = '$_REQUEST[position]',
				image = '$image_name',
				transparency = '$_REQUEST[transparency]',
				url = '$_REQUEST[url]' where wid='$_REQUEST[id]'";
        $rs=$conn->execute($sql);
	if (mysql_affected_rows()>0) { header("Location: $config[admin_url]/watermark/saved"); exit; }
    }
}

        
if($_REQUEST['add_wm'])
{
    if ($_REQUEST[transparency]=="") $err=$lang['adm_errplaylogo9'];
    elseif (!is_numeric($_REQUEST[transparency])) $err=$lang['adm_errplaylogo10'];
    elseif (strlen($_REQUEST[transparency])>3) $err=$lang['adm_errplaylogo11'];

    if ($_REQUEST[position]=="") $err=$lang['adm_errplaylogo8'];

    if ($_REQUEST[url]=="") $err=$lang['adm_errplaylogo6'];
    elseif (strlen($_REQUEST[url])<3) $err=$lang['adm_errplaylogo7'];

    if ($_REQUEST[descrip]=="") $err=$lang['adm_errplaylogo3'];
    elseif (strlen($_REQUEST[descrip])<3) $err=$lang['adm_errplaylogo4'];

    if ($_REQUEST[name]=="") $err=$lang['adm_errplaylogo0'];
    elseif (strlen($_REQUEST[name])<3) $err=$lang['adm_errplaylogo1'];
    
    if($err=="")
    {
	$sql="select * from watermark order by wid desc";
	$rs=$conn->execute($sql);
	if ($rs->recordcount()<1) { $mm="1"; }
	else { $mid=$rs->fields[wid][0]; $mm=$mid+1; }
	if($_FILES[picture]!="")
    	{
	    $ext = strrchr($_FILES[picture]["name"], '.');
            if(strtolower($ext)=='.jpg' || strtolower($ext)=='.png' || strtolower($ext)=='.gif')
	    {
		$image_name="$mm".$ext."";
		$err = upload_swf($_FILES, 'picture',"/".$image_name."", 120, $config['dir_fp'].'/wms/');
	    }
	    elseif(strtolower($ext)=='.swf')
    	    {
		$image_name="$mm".$ext."";
		$err = upload_swf($_FILES, 'picture',"/".$image_name."", 120, $config['dir_fp'].'/wms/');
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
    	    $sql = "insert watermark set
                                name = '$rqname',
                                description = '$rqdesc',
				position = '$_REQUEST[position]',
				image = '$image_name',
				transparency = $_REQUEST[transparency],
				url = '$_REQUEST[url]'";
    	    $conn->execute($sql);
	}		
    }		
    
    if($err == "")
    {
	header("Location: $config[admin_url]/watermark/saved");
	exit;
    }
}


$chid=$_REQUEST[id];
$sql ="select * from watermark where wid='$chid'";
$rs=$conn->execute($sql);
$img=$rs->fields[image];
$xt = strrchr($img, '.');
if (strtolower($xt)=='.swf') 
{ 
    $smarty->assign('xt',$xt); 
    $size = getimagesize("$config[dir_fp]/wms/$img");
    $width = $size[0];
    $height = $size[1];
    $smarty->assign('width',$width);
    $smarty->assign('height',$height);
}
$watermark = $rs->getrows();
$smarty->assign('watermark', $watermark[0]);

set_btn("adm_fp"); set_sbtn("wm");
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display("administration/main_header.tpl");
$smarty->display("administration/watermark_edit.tpl");
$smarty->display("administration/main_footer.tpl");
?>