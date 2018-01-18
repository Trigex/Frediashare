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
if (isset($_REQUEST['action'])) $_REQUEST['action']=filter_title($_REQUEST['action']);
if (isset($_REQUEST['enable'])) $_REQUEST['enable']=filter_title($_REQUEST['enable']);
if (isset($_REQUEST['disable'])) $_REQUEST['disable']=filter_title($_REQUEST['disable']);
if (isset($_REQUEST['edit'])) $_REQUEST['edit']=filter_title($_REQUEST['edit']);
if (isset($_REQUEST['delete'])) $_REQUEST['delete']=filter_title($_REQUEST['delete']);
if (isset($_REQUEST['page'])) $_REQUEST['page']=filter_title($_REQUEST['page']);
if (isset($_REQUEST['goact'])) $_REQUEST['goact']=filter_title($_REQUEST['goact']); 

//language settings
if ($_REQUEST[type]=="languages")
{
    if ($_REQUEST[goact]!="" && $err=="")
    {
	if ($_REQUEST['mid']=="") $err=$lang['err_msgcompose14']; //nothing selected 
	elseif ($_REQUEST[actions]==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected
	if ($err=="")
	{
	    if ($_REQUEST[actions]==$lang['act_frenable']) //enable selected 
	    {
		foreach($_REQUEST['mid'] as $value) { $conn->execute("update languages set active='1' where id='$value' and active='0'"); }
	    }
	    if ($_REQUEST[actions]==$lang['act_frdisable']) //disable selected 
	    {
		if ($err=="")
		{
		    foreach($_REQUEST['mid'] as $value) 
		    { 
			$rs1=$conn->execute("select def from languages where id='$value'");
			$df=$rs1->fields[def];
			if ($df=="1") $err=$lang['admerr_setlang8'];
		    
			if ($err=='') $conn->execute("update languages set active='0' where id='$value' and active='1'"); 
		    }
		}
	    }
	    if ($_REQUEST[actions]==$lang['inbox_itblact6']) //delete selected
	    {
		if ($err=="")
		{
		    foreach($_REQUEST['mid'] as $value)
		    {
		    
	$rs1=$conn->execute("select def from languages where id='$value'");
	$df=$rs1->fields[def];
	if ($df=="1") $err=$lang['admerr_setlang9'];
	
	if ($err=='')
	{
	    $df=$conn->execute("select file from languages where id='$value'");
	    $delfile=$df->fields['file'];
	    $thefile="$config[base_dir]/modules/languages/$delfile";
	    @chmod($thefile,0666);
	    if(@unlink($thefile))
	    {
    		$conn->execute("delete from languages where id='$value'");
    		//if(mysql_affected_rows()>0) { header("Location: $config[admin_url]/settings/languages/saved"); exit; }
    	    } else $err=$lang['admerr_setlang1'];
	}
		    
		    }
		}
	    }
	    if ($conn->Affected_Rows()>0 and $err=='') $msg=$lang['not_inboxmsgmark'];
	}
    }
    if ($_REQUEST[action]=="saved" || $_REQUEST[action]=="deleted") 
    {
	$msg=$lang['admnot_setlangsave'];
	set_btn("adm_set"); set_sbtn("langs");
	$smarty->assign('msg',$msg); $smarty->assign('err',$err); 
    }
    if ($_REQUEST[disable]!="")
    {
	$rs1=$conn->execute("select def from languages where id='$_REQUEST[disable]'");
	$df=$rs1->fields[def];
	if ($df=="1") $err=$lang['admerr_setlang8'];
	else 
	{
	    $conn->execute("update languages set active='0' where id='$_REQUEST[disable]'");
	    header("$config[admin_url]/settings/languages");
	}
    }
    if ($_REQUEST[enable]!="")
    {
	$conn->execute("update languages set active='1' where id='$_REQUEST[enable]'");
	header("$config[admin_url]/settings/languages");
    }
    if ($_REQUEST['delete']!="")
    {
	$rs1=$conn->execute("select def from languages where id='$_REQUEST[delete]'");
	$df=$rs1->fields[def];
	if ($df=="1") $err=$lang['admerr_setlang9'];
	else
	{
	    $df=$conn->execute("select file from languages where id='$_REQUEST[delete]'");
	    $delfile=$df->fields['file'];
	    $thefile="$config[base_dir]/modules/languages/$delfile";
	    @chmod($thefile,0666);
	    if(@unlink($thefile))
	    {
    		$conn->execute("delete from languages where id='$_REQUEST[delete]'");
    		if(mysql_affected_rows()>0) { header("Location: $config[admin_url]/settings/languages/saved"); exit; }
    	    } else $err=$lang['admerr_setlang1'];
	}
    }

    if ($_REQUEST[edit]!="")
    {
	if ($_REQUEST[lang_cancel]!="") { header("Location: $config[admin_url]/settings/languages"); exit; }
	if ($_REQUEST[save_lang]!="")
	{
	    $lname=filter_title($_REQUEST[lname]);
	    $lfile=filter_descr($_REQUEST[lfile]);
	    $cflag=filter_title($_REQUEST['fcountry']);
	    //if (preg_match("/[\r\n\t\f]/", $_REQUEST[lname])) { illegal_opa(); }
	    //if (preg_match("/[\r\n\t\f]/", $_REQUEST[lfile])) { illegal_opa(); }
	    if ($lname=="" || strlen($lname)<3) $err=$lang['admerr_setlang2'];
	    elseif ($lfile=="" || strlen($lfile)<3) $err=$lang['admerr_setlang3'];
	    elseif(( filter_title($_REQUEST['fcountry']) == $lang['pr_chinfop36'] )) $err = $lang['pr_chinfop39'];
	    else
	    {
		$ext = explode(".", $lfile);
		$ext = array_pop($ext);
		if ($ext!="php") $err=$lang['admerr_setlang4'];
	    }
	    
	    if ($err=="")
	    {
		$rs=$conn->execute("select name, file from languages where id='$_REQUEST[edit]'");
		$ofile=$rs->fields['file'];
		if ($lfile!=$ofile)
		{
		    $mainfile="$config[base_dir]/modules/languages/$lfile";
		    $oldfile="$config[base_dir]/modules/languages/$ofile";
		    @chmod($oldfile,0666);
		    if(!rename($oldfile, $mainfile)) { $err=$lang['admerr_setlang5']; }
		    else @chmod($mainfile,0666);
		}
		if ($err=="")
		{
		    $file_path="$config[base_dir]/modules/languages/$lfile";
		    $handle = fopen($file_path, "w");
		    //if (fwrite($handle,stripslashes($_REQUEST[lang_edit]))) { $saved="yes"; }
		    if (get_magic_quotes_gpc()) { if (fwrite($handle,stripslashes($_REQUEST[lang_edit]))) { $saved="yes"; } }
		    else { if (fwrite($handle,$_REQUEST[lang_edit])) { $saved="yes"; } }
		    fclose($handle);
		    
		    if ($_REQUEST[deflang]!="") 
		    {
			$def=$_REQUEST[deflang];
			$conn->execute("update languages set def='0' where def='1'");
			$conn->execute("update languages set def='1' where id='$_REQUEST[edit]'");
		    }
		    
		    $conn->execute("update languages set name='$lname', file='$lfile', cflag='$cflag' where id='$_REQUEST[edit]'");
		    if(mysql_affected_rows()>0 || $saved="yes") { $msg=$lang['admnot_setlangsave']; }
		    else $err=$lang['admerr_setlang6'];
		}
	    }
	}

	$rs=$conn->execute("select * from languages where id='$_REQUEST[edit]'");
	$thefile=$rs->fields['file'];
	$lng=$rs->getrows();
	$smarty->assign('lng',$lng);
	$smarty->assign('cinfo',$lng);
	
	$file_path="$config[base_dir]/modules/languages/$thefile";
	
	$handle = fopen($file_path, "rb");
	$theData = fread($handle, filesize($file_path));
	fclose($handle);
	$file=$theData;
	$smarty->assign('file',$file);
	
	set_btn("adm_set"); set_sbtn("langs");
	$smarty->assign('msg',$msg); $smarty->assign('err',$err); 
	$smarty->display('administration/main_header.tpl');
	$smarty->display('administration/languages_add.tpl');
	$smarty->display('administration/main_footer.tpl');
	exit;
    }
    if ($_REQUEST[action]=="add")
    {
	if ($_REQUEST[lang_cancel]!="") { header("Location: $config[admin_url]/settings/languages"); exit; }
	if ($_REQUEST[save_lang]!="")
	{
	    $lname=filter_title($_REQUEST[lname]);
	    $lfile=filter_descr($_REQUEST[lfile]);
	    $cflag=filter_title($_REQUEST['fcountry']);
	    //if (preg_match("/[\r\n\t\f]/", $_REQUEST[lname])) { illegal_opa(); }
	    //if (preg_match("/[\r\n\t\f]/", $_REQUEST[lfile])) { illegal_opa(); }
//	    $lname=htmlentities(strip_tags($_POST_DATA[field_myvideo_title]),ENT_QUOTES,'UTF-8')
	    if ($lname=="" || strlen($lname)<3) $err=$lang['admerr_setlang2'];
	    elseif ($lfile=="" || strlen($lfile)<3) $err=$lang['admerr_setlang3'];
	    elseif(( filter_title($_REQUEST['fcountry']) == $lang['pr_chinfop36'] )) $err = $lang['pr_chinfop39'];
	    else
	    {
		$ext = explode(".", $lfile);
		$ext = array_pop($ext);
		if ($ext!="php") $err=$lang['admerr_setlang4'];
	    }
	    
	    if ($err=="")
	    {
		$mainfile="$config[base_dir]/modules/languages/english.php";
		$newfile="$config[base_dir]/modules/languages/$lfile";
		if (!copy($mainfile, $newfile)) { $err=$lang['admerr_setlang7']; }
		else
		{
		    @chmod($newfile,0666);
		    $conn->execute("insert into languages set name='$lname', file='$lfile', cflag='$cflag';");
		    if(mysql_affected_rows()>0) { header("Location: $config[admin_url]/settings/languages/saved"); exit; }
		    else $err=$lang['admerr_setlang6'];
		}
	    }
	}
	set_btn("adm_set"); set_sbtn("langs");
	$smarty->assign('msg',$msg); $smarty->assign('err',$err); 
	$smarty->display('administration/main_header.tpl');
	$smarty->display('administration/languages_add.tpl');
	$smarty->display('administration/main_footer.tpl');
	exit;
    }

    //paging
    $listing_per_page = 20;
    if($_REQUEST[page]=="") $page = 1;
    else $page = $_REQUEST[page];
    $sql = "SELECT count(*) as total from languages limit $listing_per_page";
    $ars = $conn->Execute($sql);
    $total = $ars->fields['total'];
    $grandtotal = $total;
    $tpage = ceil($total/$listing_per_page);
    if($tpage==0) $spage=$tpage+1;
    else $spage = $tpage;
    $startfrom = ($page-1)*$listing_per_page;
    $start_num=$startfrom+1;
    $page_no = ""; $smarty->assign('tpage',$tpage);
    for($i=1; $i<=$tpage; $i++)
    {
	if($i==$page) $page_no .= "<span class=\"pag_act\">$i</span>";
    	    else $page_no .= " <a href='$config[admin_url]/settings/languages/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
    }
    if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
    else $link = $lang['adm_setlangnolang'];
    
    if($tpage>1)
    {
	$nextpage=$page+1;
	$prevpage=$page-1;
	$prevlink="<a href='$config[admin_url]/settings/languages/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
	$nextlink="<a href='$config[admin_url]/settings/languages/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
	if($page==$tpage) $link.="$prevlink&nbsp;&nbsp;&nbsp;";
	elseif($tpage>$page && $page>1) $link=$link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
	elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
    }
    $qu="select * from languages order by name limit $startfrom, $listing_per_page";
    $rs=$conn->execute($qu);
    $langs=$rs->getrows();
    $smarty->assign('langs',$langs);
    
    $smarty->assign('start_num',$start_num);
    $smarty->assign('end_num',$startfrom+$rs->recordcount());
    $smarty->assign('total',$total);
    $smarty->assign('link',$link);
    $smarty->assign('page',$page+0);
    
    set_btn("adm_set"); set_sbtn("langs");
    $smarty->assign('msg',$msg);    
    $smarty->assign('err',$err);
    $smarty->display('administration/main_header.tpl');
    $smarty->display('administration/main_languages.tpl');
    $smarty->display('administration/main_footer.tpl');
    exit;
}
?>