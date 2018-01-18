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

if (isset($_REQUEST['msg'])) $_REQUEST['msg']=filter_title($_REQUEST['msg']);
if (isset($_REQUEST['page'])) $_REQUEST['page']=filter_title($_REQUEST['page']);
if (isset($_REQUEST['action'])) $_REQUEST['action']=filter_title($_REQUEST['action']); 
if (isset($_REQUEST['categ'])) $_REQUEST['categ']=filter_title($_REQUEST['categ']); 
if (isset($_REQUEST['categ_edit'])) $_REQUEST['categ_edit']=filter_title($_REQUEST['categ_edit']); 
if (isset($_REQUEST['catid'])) $_REQUEST['catid']=filter_title($_REQUEST['catid']); 
if (isset($_REQUEST['cname'])) $_REQUEST['cname']=filter_title($_REQUEST['cname']); 
if (isset($_REQUEST['cdescr'])) $_REQUEST['cdescr']=filter_descr($_REQUEST['cdescr']); 
if (isset($_REQUEST['categ_cancel'])) $_REQUEST['categ_cancel']=filter_title($_REQUEST['categ_cancel']); 
if (isset($_REQUEST['categ_save'])) $_REQUEST['categ_save']=filter_title($_REQUEST['categ_save']); 
if (isset($_REQUEST['categ_add'])) $_REQUEST['categ_add']=filter_title($_REQUEST['categ_add']); 

function del_categ($id)
{
    global $conn, $config;
    $dcateg = $id;
    
    $del = $conn->execute("select image from categories where cid='$dcateg'");
    $del_pic = $del->fields['image'];
    $del_file = $config[catimg_dir]."/".$del_pic;
    if (file_exists($del_file)) { @chmod($del_file, 0777); @unlink("$del_file"); }
    $sql = "delete from categories where cid='$dcateg'";
    $drs = $conn->execute($sql);
    
    $tbls[]="files_audio";
    $tbls[]="files_image";
    $tbls[]="files_video";

    for($x=0; $tbls[$x]; $x++)
    {
	$quv="select * from $tbls[$x] where vcategs like '%$dcateg%'";
	$resultv = mysql_query($quv);
	$srv=$dcateg.",";
	if (mysql_affected_rows()>0)
	{
	    while($rowv = mysql_fetch_assoc($resultv))
	    {
		$ctsv[]=$rowv[vcategs];
	    }
	    for($iv=0; $ctsv[$iv]; $iv++)
	    {
		$conn->execute("update $tbls[$x] set vcategs='".str_replace($srv,'',$ctsv[$iv])."' where vcategs='$ctsv[$iv]'");
	    }
	}
    }
    if ($conn->Affected_Rows()>0 && $err=="") $msg='yes';
    else $msg='no';
    
    return $msg;
}
if ($_REQUEST[goact]!="" && $err=="")
{
    if ($_REQUEST['mid']=="") $err=$lang['err_msgcompose14']; //nothing selected
    elseif ($_REQUEST[actions]==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected
    if ($err=="")
    {
        if ($_REQUEST[actions]==$lang['act_frenable']) //enable selected
        {
            foreach($_REQUEST['mid'] as $value) { $conn->execute("update categories set active='1' where cid='$value' and active='0'"); }
        }
        if ($_REQUEST[actions]==$lang['act_frdisable']) //disable selected
        {
            foreach($_REQUEST['mid'] as $value) { $conn->execute("update categories set active='0' where cid='$value' and active='1'"); }
        }
        if ($_REQUEST[actions]==$lang['inbox_itblact6']) //delete selected
        {
            foreach($_REQUEST['mid'] as $value) { del_categ($value); }
        }
        if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
    }
} 

// get the number of categs
$total_sql = "SELECT count(*) as total from categories";
$ars = $conn->Execute($total_sql);
$total = $ars->fields['total'];
$smarty->assign('total',$total);
//confirmation
if ($_REQUEST[msg]=="confirmation")
{
    $msg=$lang['admnot_categdel'];
}
//disable audio uploads
if ($_REQUEST[action]=="a0")
{
    $dcateg = $_REQUEST[categ];
    $sql = "update categories set audio_uploads='no' where cid='$dcateg'";
    $drs = $conn->execute($sql);
    header("Location: $config[admin_url]/categories");
    exit;
}
//enable audio uploads
if ($_REQUEST[action]=="a1")
{
    $dcateg = $_REQUEST[categ];
    $sql = "update categories set audio_uploads='yes' where cid='$dcateg'";
    $drs = $conn->execute($sql);
    header("Location: $config[admin_url]/categories");
    exit;
}
//disable image uploads
if ($_REQUEST[action]=="i0")
{
    $dcateg = $_REQUEST[categ];
    $sql = "update categories set image_uploads='no' where cid='$dcateg'";
    $drs = $conn->execute($sql);
    header("Location: $config[admin_url]/categories");
    exit;
}
//enable image uploads
if ($_REQUEST[action]=="i1")
{
    $dcateg = $_REQUEST[categ];
    $sql = "update categories set image_uploads='yes' where cid='$dcateg'";
    $drs = $conn->execute($sql);
    header("Location: $config[admin_url]/categories");
    exit;
}
//disable video uploads
if ($_REQUEST[action]=="v0")
{
    $dcateg = $_REQUEST[categ];
    $sql = "update categories set video_uploads='no' where cid='$dcateg'";
    $drs = $conn->execute($sql);
    header("Location: $config[admin_url]/categories");
    exit;
}
//enable video uploads
if ($_REQUEST[action]=="v1")
{
    $dcateg = $_REQUEST[categ];
    $sql = "update categories set video_uploads='yes' where cid='$dcateg'";
    $drs = $conn->execute($sql);
    header("Location: $config[admin_url]/categories");
    exit;
}
//disable categories
if ($_REQUEST[action]=="disable")
{
    $dcateg = $_REQUEST[categ];
    $sql = "update categories set active='0' where cid='$dcateg'";
    $drs = $conn->execute($sql);
    header("Location: $config[admin_url]/categories");
    exit;
}
//enable categories
if ($_REQUEST[action]=="enable")
{
    $dcateg = $_REQUEST[categ];
    $sql = "update categories set active='1' where cid='$dcateg'";
    $drs = $conn->execute($sql);
    header("Location: $config[admin_url]/categories");
    exit;
}

//delete categories
if ($_REQUEST[action]=="delete")
{
    $ret=del_categ($_REQUEST['categ']);
    header("Location: $config[admin_url]/categories/saved");
    exit;
    //else illegal_opa();
}


// save edited categories
if ($_POST[categ_edit]!="")
{
    $cid = $_REQUEST[catid];
    set_btn("adm_categ");
    set_sbtn("manage");
    if ($_REQUEST[cdescr]=="") $err = $lang['adm_errcateg1'];
    if ($_REQUEST[cname]=="") $err = $lang['adm_errcateg2'];
    
    if ($err=="")
    {
	$cname=$_REQUEST[cname];
	$cdescr=$_REQUEST[cdescr];
		
	// if the name or description is changed, but the pictures is the same
	$sql="select * from categories where cid='$cid'";
	$crs=$conn->execute($sql);
	$oname=$crs->fields[name];
	$oimg=$crs->fields[image];
	
	if (($cname!=$oname) && ($_FILES['cimage']['tmp_name']==""))
	{
	    $pos = strrpos($oimg,".");
	    $ph = strtolower(substr($oimg,$pos+1,strlen($oimg)-$pos));
	    if ($ph=="png" || $ph=="gif" || $ph=="jpg")
	    {
		$ccname=str_replace(" ", "", $cname);
		$fid = substr($ccname,0,15);
		$fid2 = $fid.".".$ph;
		$uc = "categories";
		$fname = $uc."_".$fid2;
		$update = $conn->execute("update categories set image='$fname' where cid='$cid'");
		rename($config['catimg_dir']."/".$oimg, $config['catimg_dir']."/".$fname);
	    }
	}
	
	// if the picture is changed
	if ($_FILES['cimage']['tmp_name']!="")
	{
	$ccname=str_replace(" ", "", $cname);    
	$fid = substr($ccname,0,15);
	
	$uc = "categories";
	$fname = $uc."_".$fid;
	$MyLogo = $fname;
	$imagesize = getimagesize($_FILES['cimage']['tmp_name']);
	if($imagesize[2] == 1) $MyLogo .= ".gif";
	if($imagesize[2] == 2) $MyLogo .= ".jpg";
	if($imagesize[2] == 3) $MyLogo .= ".png";
	
	if($MyLogo == $uc."_".$fid.".gif" || $MyLogo == $uc."_".$fid.".jpg" || $MyLogo == $uc."_".$fid.".png")
	{
	    $UserImage = $_FILES[cimage][name];
	    if($MyLogo != "")
	    {
		$del = $conn->execute("select image from categories where cid='$cid'");
		$del_pic = $del->fields['image'];
		$del_file = $config[catimg_dir]."/".$del_pic;
		@unlink("$del_file");
	    
		if (move_uploaded_file($_FILES['cimage']['tmp_name'], $config['catimg_dir']."/in_".$MyLogo))
		{
		    $source_file = $config['catimg_dir']."/in_".$MyLogo;
		    $destination_file = $config['catimg_dir']."/".$MyLogo;
		    thumbs($source_file, $destination_file, $config['categwidth'], $config['categheight']);
		    @unlink($source_file);
		    $update = $conn->execute("update categories set name='$cname', descrip='$cdescr', image='$MyLogo' where cid='$cid'");
		    header("Location: $config[admin_url]/categories/saved");
		    exit;
		} else { $err=$lang['adm_errcateg3']; }
	    }
	}
	else
	{
	    $err=$lang['adm_errplaylogo15'];
	    $smarty->assign('err',$err);
	}
	} else 
	{
	    $update = $conn->execute("update categories set name='$cname', descrip='$cdescr' where cid='$cid'");
	    header("Location: $config[admin_url]/categories/saved");
	    exit;
	}
    }
    $dcateg = $_REQUEST[categ];
    $mrs = $conn->execute("select * from categories where cid='$dcateg'");
    $catname = $mrs->fields[name];
    $catdesc = $mrs->fields[descrip];
    $catimg = $mrs->fields[image];
    $catid = $mrs->fields[cid];
    $smarty->assign('catid',$catid);
    $smarty->assign('catname',$catname);
    $smarty->assign('catdesc',$catdesc);
    $smarty->assign('catimg',$catimg);

    $smarty->assign('err',$err);
    $smarty->display('administration/main_header.tpl');
    $smarty->display('administration/categories_edit.tpl');
    $smarty->display('administration/main_footer.tpl');
    exit;
}

//add categories - if cancel was pressed
if ($_POST[categ_cancel]!="")
{
    set_btn("adm_categ");
    set_sbtn("manage");
    header("Location: $config[admin_url]/categories");
    exit;
}

//save added categories
if ($_POST[categ_save]!="")
{
    set_btn("adm_categ");
    set_sbtn("manage");
    if ($_FILES['cimage']['tmp_name']=="") $err = $lang['adm_errcateg4']; 
    if ($_REQUEST[cdescr]=="") $err = $lang['adm_errcateg1'];
    if ($_REQUEST[cname]=="") $err = $lang['adm_errcateg2'];
    
    if ($err=="")
    {
	$cname=$_REQUEST[cname];
	$cdescr=$_REQUEST[cdescr];
	$ccname=str_replace(" ", "", $cname);    
	$fid = substr($ccname,0,15);
	
	$uc = "categories";
	$fname = $uc."_".$fid;
	$MyLogo = $fname;
	$imagesize = getimagesize($_FILES['cimage']['tmp_name']);
	if($imagesize[2] == 1) $MyLogo .= ".gif";
	if($imagesize[2] == 2) $MyLogo .= ".jpg";
	if($imagesize[2] == 3) $MyLogo .= ".png";
	
	if($MyLogo == $uc."_".$fid.".gif" || $MyLogo == $uc."_".$fid.".jpg" || $MyLogo == $uc."_".$fid.".png" || $MyLogo == "")
	{
	    $UserImage = $_FILES[cimage][name];
	    if($MyLogo != "")
	    {
		move_uploaded_file($_FILES['cimage']['tmp_name'], $config['catimg_dir']."/in_".$MyLogo);
		$source_file = $config['catimg_dir']."/in_".$MyLogo;
		$destination_file = $config['catimg_dir']."/".$MyLogo;
		thumbs($source_file, $destination_file, $config['categwidth'], $config['categheight']);
		@unlink($source_file); 
		$update = $conn->execute("insert into categories set name='$cname', descrip='$cdescr', active='1', image='$MyLogo'");
		header("Location: $config[admin_url]/categories/saved");
		exit;
	    }
	}
	else
	{
	    $err=$lang['adm_errplaylogo15'];
	    $smarty->assign('err',$err);
	}
    }
    $smarty->assign('err',$err);
    $smarty->display('administration/main_header.tpl');
    $smarty->display('administration/categories_add.tpl');
    $smarty->display('administration/main_footer.tpl');
    exit;
}
//add categories button is pressed
if ($_REQUEST[categ_add]!="")
{
    set_btn("adm_categ");
    set_sbtn("manage");
    $smarty->display('administration/main_header.tpl');
    $smarty->display('administration/categories_add.tpl');
    $smarty->display('administration/main_footer.tpl');
    exit;
}

//edit categories
if ($_REQUEST[action]=="edit")
{
    set_btn("adm_categ");
    set_sbtn("manage");
    $dcateg = $_REQUEST[categ];
    $mrs = $conn->execute("select * from categories where cid='$dcateg'");
    $catname = $mrs->fields[name];
    $catdesc = $mrs->fields[descrip];
    $catimg = $mrs->fields[image];
    $catid = $mrs->fields[cid];
    $smarty->assign('catid',$catid);
    $smarty->assign('catname',$catname);
    $smarty->assign('catdesc',$catdesc);
    $smarty->assign('catimg',$catimg);
    $smarty->display('administration/main_header.tpl');
    $smarty->display('administration/categories_edit.tpl');
    $smarty->display('administration/main_footer.tpl');
    exit;
}

//normal behaviour
set_btn("adm_categ"); set_sbtn("manage");

// paging
$listing_per_page = $config[paging_categ];
if($_REQUEST[page]=="")
$page = 1;
else
$page = $_REQUEST[page];
$sql = "SELECT count(*) as total from categories";
$ars = $conn->Execute($sql);
$total = $ars->fields['total'];
$grandtotal = $total;
$tpage = ceil($total/$listing_per_page);
if($tpage==0) $spage=$tpage+1;
else $spage = $tpage;
$startfrom = ($page-1)*$listing_per_page;

$page_no = ""; $smarty->assign('tpage',$tpage);
for($i=1; $i<=$tpage; $i++)
{
    if($i==$page) $page_no .= "<span class=\"pag_act\">$i</span>";
    else $page_no .= " <a href='$config[admin_url]/categories/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
}
if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
else $link = $lang['adm_categnone'];

if($tpage>1)
{
    $nextpage=$page+1;
    $prevpage=$page-1;
    $prevlink="<a href='$config[admin_url]/categories/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    $nextlink="<a href='$config[admin_url]/categories/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    if($page==$tpage) $link.="$prevlink&nbsp;&nbsp;&nbsp;";
    elseif($tpage>$page && $page>1) $link=$link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
    elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
}
$query = 'order by name';
$sql="SELECT * from categories $query limit $startfrom, $listing_per_page";
$rs = $conn->Execute($sql);
$total = $rs->recordcount()+0;
$categs = $rs->getrows(); 
$start_num=$startfrom+1;
$smarty->assign('start_num',$start_num);
$smarty->assign('end_num',$startfrom+$rs->recordcount());
$smarty->assign('link',$link);
$smarty->assign('page',$page+0);
$smarty->assign('categs',$categs);
$smarty->assign('msg',$msg);
$smarty->assign('err',$err);
$smarty->display('administration/main_header.tpl');
$smarty->display('administration/categories_main.tpl');
$smarty->display('administration/main_footer.tpl');
?>