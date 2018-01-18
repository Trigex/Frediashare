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

include("../configs/config.php");
check_admin_login();

if($_REQUEST['add_cancel']!="")
{
    header("Location: $config[admin_url]/videoads");
    exit;
}
	
if($_REQUEST['action']=="edit")
{  
    $chid=$_REQUEST['id'];
    $sql ="select * from adv_video where aid=$chid";
    $rs=$conn->execute($sql);
    
    $img=$rs->fields['image'];	
    $ads = $rs->getrows();
			
    $ext = strrchr($img, '.');
    if(strtolower($ext)=='.jpg')
	$type1=1;
    elseif(strtolower($ext)=='.swf')
	$type1=2;
    $smarty->assign('type1', $type1);
    $smarty->assign('ads', $ads[0]);
    $smarty->assign('chid', $chid);
}				
        
if($_REQUEST['edit_add']!="")
{
    $chid=$_REQUEST['id'];
    if ($_REQUEST[name]=="") $err=$lang['adm_errplaylogo0'];
	elseif (strlen($_REQUEST[name])<3) $err=$lang['adm_errplaylogo1'];
    if ($_REQUEST[descrip]=="") $err=$lang['adm_errplaylogo3']; 
	elseif (strlen($_REQUEST[descrip])<3) $err=$lang['adm_errplaylogo4'];
    if ($_REQUEST[url]=="") $err=$lang['adm_errplaylogo6'];
	elseif (strlen($_REQUEST[url])<3) $err=$lang['adm_errplaylogo7'];
    if ($_REQUEST[duration]=="") $err=$lang['adm_errvads1'];
	elseif (!is_numeric($_REQUEST[duration])) $err=$lang['adm_errvads2'];
	elseif (strlen($_REQUEST[duration])>2) $err=$lang['adm_errvads3'];
	
    if($_FILES[picture][name]!="")
    {
	$ext = strrchr($_FILES[picture]["name"], '.');
	$exte=explode(".",$ext);
	$type=$exte[1];
        if(strtolower($ext)=='.jpg')
	{
	    $image_name="$_REQUEST[id]".$ext."";
	    $err = upload_swf($_FILES, 'picture',"/".$image_name."", 120, $config['dir_fp'].'/ads/'); 
	}
	elseif(strtolower($ext)=='.swf')
	{
	    $image_name="$_REQUEST[id]".$ext."";
	    $err = upload_swf($_FILES, 'picture',"/".$image_name."", 120, $config['dir_fp'].'/ads/');
	}
	elseif(strtolower($ext)=='.flv')
	{
	    $image_name=$conn->Insert_ID().".flv";
	    $err = upload_flv($_FILES, 'picture',$conn->Insert_ID().".flv", $config[img_max_width], $config['dir_fp'].'/ads/');
	}
	else
	{
	    $sql="select * from adv_video where aid='$_REQUEST[id]'";
	    $mrs=$conn->execute($sql); 
	    $image_name=$mrs->fields[image];
	    $type=$mrs->fields[ext];
	    $err=$lang['adm_errplaylogo15']; 
	}
    }
    else
    {
	$sql="select * from adv_video where aid='$_REQUEST[id]'";
	$mrs=$conn->execute($sql);
	$image_name=$mrs->fields[image];
	$type=$mrs->fields[ext];
    }
				
    if($err=="")
    {
	$conn->execute("update adv_video set adcount=0 where aid=$chid");
	$rqname=filter_title($_REQUEST[name]);
        $rqdesc=filter_descr($_REQUEST[descrip]);
        
	$sql = "update adv_video set
    		    name = '$rqname',
                    descrip = '$rqdesc',
		    url = '$_REQUEST[url]',
		    duration = $_REQUEST[duration],
		    image = '$image_name',
		    ext='$type' 
                where aid='$_REQUEST[id]'";
		
	mysql_query($sql);
    }
    if($err == "") { header("Location: $config[admin_url]/videoads/saved"); exit; }
}
        

if($_REQUEST['save_add']!="")
{
    if($_REQUEST[name]=="") $err = $lang['adm_errplaylogo0'];
	elseif (strlen($_REQUEST[name])<3) $err=$lang['adm_errplaylogo1'];
    if($_REQUEST[descrip]=="") $err = $lang['adm_errplaylogo3'];
	elseif (strlen($_REQUEST[descrip])<3) $err=$lang['adm_errplaylogo4'];
    if($_REQUEST[url]=="") $err = $lang['adm_errplaylogo6'];
	elseif (strlen($_REQUEST[url])<3) $err=$lang['adm_errplaylogo7'];
    if($_REQUEST[duration]=="") $err = $lang['adm_errvads1'];
	elseif (!is_numeric($_REQUEST[duration])) $err=$lang['adm_errvads2'];
	elseif (strlen($_REQUEST[duration])>2) $err=$lang['adm_errvads3'];
    
    if($_FILES['picture']['name']=="") $err = $lang['adm_errvads4'];

    if($err=="")
    {
	if($_FILES[picture]!="")
        {
	    $ext = strrchr($_FILES[picture]["name"], '.');
            if(strtolower($ext)=='.jpg')
	    {
		$image_name=$conn->Insert_ID().".jpg";
		$err = upload_swf($_FILES, 'picture',$conn->Insert_ID().".jpg", $config[img_max_width], $config['dir_fp'].'/ads/'); 
	    }
	    elseif(strtolower($ext)=='.swf')
	    {
		$image_name=$conn->Insert_ID().".swf";
		$err = upload_swf($_FILES, 'picture',$conn->Insert_ID().".swf", $config[img_max_width], $config['dir_fp'].'/ads/');
	    }
	    elseif(strtolower($ext)=='.flv')
	    {
		$image_name=$conn->Insert_ID().".flv";
		$err = upload_flv($_FILES, 'picture',$conn->Insert_ID().".flv", $config[img_max_width], $config['dir_fp'].'/ads/');
	    }
	    else
	    { $err=$lang['adm_errplaylogo15']; }
	
        }
	
	if ($err=="")
	{
	    $rqname=filter_title($_REQUEST[name]);
    	    $rqdesc=filter_descr($_REQUEST[descrip]);
	
	    $sql = "insert adv_video set
    		    name = '$rqname',
                    descrip = '$rqdesc',
		    url = '$_REQUEST[url]',
		    duration = $_REQUEST[duration],
		    adkey='".mt_rand()."'";
    	    $conn->execute($sql);
	    
	    $exte=explode(".",$ext);
	    $type=$exte[1];
	    $conn->execute("update adv_video set image='$image_name', ext='$type' where aid=".$conn->Insert_ID());
    	    header("Location: $config[admin_url]/videoads/saved");
    	    exit;
	}
    }
}    

$chid=$_REQUEST[id];
$sql ="select image from adv_video where aid='$chid'";
$rs=$conn->execute($sql);
$img=$rs->fields[image];
$xt = strrchr($img, '.');
if (strtolower($xt)=='.swf')
{
    $size = getimagesize("$config[dir_fp]/ads/$img");
    $width = $size[0];
    $height = $size[1];
    $smarty->assign('width',$width);
    $smarty->assign('height',$height);
}

set_btn("adm_fp"); set_sbtn("ads");
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display("administration/main_header.tpl");
$smarty->display("administration/ads_edit.tpl");
$smarty->display("administration/main_footer.tpl");
?>