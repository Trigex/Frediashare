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
require_once('configs/classes/phpthumb.class.php');

if ($config['enable_images']=="0") { header("Location: $config[base_url]/main"); exit; }
if ($config['image_uploads']=="0")
{
    $err=$lang['err_upimage1'];
    set_btn("bupload"); set_title($lang['title_upimages']); set_sbtn("2");
    $smarty->assign('err',$err);
    $smarty->display('main_header.tpl');
    $smarty->display('footer.tpl');
    exit;
}
check_login('upload_image');
if (isset($_REQUEST['vcancel'])) $_REQUEST['vcancel']=filter_title($_REQUEST['vcancel']); 
if (isset($_REQUEST['vnext'])) $_REQUEST['vnext']=filter_title($_REQUEST['vnext']); 
$smarty->assign('dmenu', 'mymsg');
$_SESSION['section'] = 'image';

require('ubr_ini.php');
require('ubr_lib.php');
require('ubr_finished_lib.php');

header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
    
require ('ubr_image_config.php');

$smarty->assign('UBR_path_to_link_script', $PATH_TO_LINK_SCRIPT);
$smarty->assign('UBR_path_to_js_script', $PATH_TO_JS_SCRIPT);
$smarty->assign('UBR_path_to_set_progress_script', $PATH_TO_SET_PROGRESS_SCRIPT);
$smarty->assign('UBR_path_to_get_progress_script', $PATH_TO_GET_PROGRESS_SCRIPT);
$smarty->assign('UBR_path_to_upload_script', $PATH_TO_UPLOAD_SCRIPT);
$smarty->assign('UBR_multi_configs_enabled', $MULTI_CONFIGS_ENABLED);
$smarty->assign('UBR_config_file', 'ubr_image_config');
$smarty->assign('UBR_check_allow_extensions_on_client', $_CONFIG['check_allow_extensions_on_client']);
$smarty->assign('UBR_check_disallow_extensions_on_client', $_CONFIG['check_disallow_extensions_on_client']);
$smarty->assign('UBR_allow_extensions', $_CONFIG['allow_extensions']);
$smarty->assign('UBR_disallow_extensions', $_CONFIG['disallow_extensions']);
$smarty->assign('UBR_check_file_name_format', $_CONFIG['check_file_name_format']);
$smarty->assign('UBR_check_null_file_count', $_CONFIG['check_null_file_count']);
$smarty->assign('UBR_check_duplicate_file_count', $_CONFIG['check_duplicate_file_count']);
$smarty->assign('UBR_max_upload_slots', $_CONFIG['max_upload_slots']);
$smarty->assign('UBR_cedric_progress_bar', $_CONFIG['cedric_progress_bar']);
$smarty->assign('UBR_cedric_hold_to_sync', $_CONFIG['cedric_hold_to_sync']);
$smarty->assign('UBR_progress_bar_width', $_CONFIG['progress_bar_width']);
$smarty->assign('UBR_show_percent_complete', $_CONFIG['show_percent_complete']);
$smarty->assign('UBR_show_files_uploaded', $_CONFIG['show_files_uploaded']);
$smarty->assign('UBR_show_current_position', $_CONFIG['show_current_position']);
$smarty->assign('UBR_show_elapsed_time', $_CONFIG['show_elapsed_time']);
$smarty->assign('UBR_show_est_time_left', $_CONFIG['show_est_time_left']);
$smarty->assign('UBR_show_est_speed', $_CONFIG['show_est_speed']);
$smarty->assign('UBR_embedded_upload_results', $_CONFIG['embedded_upload_results']);
$smarty->assign('UBR_opera_browser', $_CONFIG['opera_browser']);
$smarty->assign('UBR_safari_browser', $_CONFIG['safari_browser']);

set_btn("bupload");
set_sbtn("2");
$type="image";
$smarty->assign('type',$type);
$sql = "select * from categories where active='1' and image_uploads='yes' order by name asc";
$rs = $conn->execute($sql);
$categs = $rs->getrows();
$smarty->assign('categs',$categs);
$rs->Close();
    
//if Cancel button is pressed
if ($_REQUEST[vcancel]!="")
{
    header("Location: $config[base_url]/main");
    exit;
}

//if Continue button is pressed
if ($_REQUEST[vnext]!="")
{
    $vtitle = filter_title($_REQUEST[vtitle]);
    $vdescr = filter_descr($_REQUEST[vdescr]);
    $vtags = filter_title($_REQUEST[vtags]);
    $vcategs = $_REQUEST[categlist];
    $smarty->assign('vcategs',$vcategs);
	
    if(count($vcategs)<1) $err = $lang['err_up1'];
    elseif ( ( $config['multi_categ_max'] != '0' and $config['multi_categ_max'] != '' ) and count ( $vcategs ) > $config['multi_categ_max'] ) $err = $lang['up_errup1'];
	
    if ($vtags=="") $err = $lang['err_up2'];
    elseif (strlen($vtags)<$config[fi_tamin] || strlen($vtags)>$config[fi_tamax]) $err = $lang['err_up3'];
	
    if ($vdescr=="") $err = $lang['err_up5'];
    elseif (strlen($vdescr)<$config[fi_demin] || strlen($vdescr)>$config[fi_demax]) $err = $lang['err_up6'];
	
    if ($vtitle=="") $err = $lang['err_up8'];
    elseif (strlen($vtitle)<$config[fi_timin] || strlen($vtitle)>$config[fi_timax]) $err = $lang['err_up9'];

    if ( $config['same_title_uploads'] == '0' ) {
	$csql="select * from files_image where vtitle='$vtitle'";
	$mcs=$conn->execute($csql);
	if($mcs->recordcount()>0) { $err=$lang['err_upimage2']; $mcs->Close(); }
    }
	
    if ($err=="")
    {
        $page = "second";
        $smarty->assign('secondpage',"second");
        if ( $config['multi_categ_uploads'] != '0' ) { $listch = mysql_real_escape_string(implode(",",$_REQUEST[categlist])); } else { $listch = mysql_real_escape_string($vcategs); }
        $smarty->assign('listch',$listch);
        $smarty->assign('upload_page', 'upload');	    
    }
}

// uploading starts    
if(isset($_GET['upload_id']) && preg_match('/^[a-zA-Z0-9]{32}$/', $_GET['upload_id']))
{
    $smarty->assign('upload_page', 'upload');
    $UPLOAD_ID = trim($_GET['upload_id']);
    $_XML_DATA = array();
    $_CONFIG_DATA = array();
    $_POST_DATA = array();
    $_FILE_DATA = array();
    $_FILE_DATA_TABLE = '';
    $_FILE_DATA_EMAIL = '';
    
    $xml_parser = new XML_Parser;
    $xml_parser->setXMLFile($TEMP_DIR, filter_descr($_REQUEST['upload_id']));
    $xml_parser->setXMLFileDelete($DELETE_REDIRECT_FILE);
    $xml_parser->parseFeed();

    if ( $xml_parser->getError() ) $err = 'Application Error While Retrieving Upload File Data! Aborting!';
    if ( $err == '' )
    {
	$_XML_DATA = $xml_parser->getXMLData();
        $_CONFIG_DATA = getConfigData($_XML_DATA);
        $_POST_DATA = getPostData($_XML_DATA);
        $_FILE_DATA = getFileData($_XML_DATA);
        
        $upload_dir = $_CONFIG_DATA['upload_dir'];
        $upload_file = $_FILE_DATA['0']->name;
        $upload_file_path = $upload_dir . $upload_file;
        $upload_file_size = filesize($upload_file_path);
        
        if ( !is_file($upload_file_path) || filesize($upload_file_path) < 10 ) { $err = $lang['err_up11']; }
        if ( $err == '' ) 
        {
    	    $pos = strrpos($upload_file, '.');
            $ext = strtolower(substr($upload_file, $pos+1, strlen($upload_file)-$pos));
            $space = round($upload_file_size/(1024*1024));
            $allowed_extensions = explode(',', $config['allowed_image_formats']);
            if ( !in_array($ext, $allowed_extensions) ) $err = $lang['err_upimage3'];
            if ( $space > $config['max_image_size'] ) $err = 'Invalid Size!';
        }
    }
    
    if ( $err == '' ) {
	if ( $config['img_scale'] == 'deny' ) {
	    list($width, $height, $type, $attr) = getimagesize($upload_file_path);
	    if ( $width > $config['conv_deny_w'] or $height > $config['conv_deny_h'] )
	    $err = $lang['adm_ictxt7'].$config['conv_deny_w'].'x'.$config['conv_deny_h']; 
	}
    }
    
    if ( $err == '' ) {
	if($config['image_approval'] == 1) $active="active='0'";
	    else $active="active='1'";
	
	$v_title = filter_title($_POST_DATA[vtitle]);
        $v_descr = filter_descr($_POST_DATA[vdescr]);
        $v_tags = filter_title($_POST_DATA[vtags]);
        $v_priv = filter_title($_POST_DATA[vpriv]);
        $v_comm = filter_title($_POST_DATA[vcomm]);
        $v_commrate = filter_title($_POST_DATA[vcommrate]);
        $v_resp = filter_title($_POST_DATA[vresp]);
        $v_rate = filter_title($_POST_DATA[vrate]);
        $v_emb = filter_title($_POST_DATA[vemb]);
        $v_bm = filter_title($_POST_DATA[vbm]);
        $v_rto = filter_title($_POST_DATA[rto]);

        if ( $config['file_comments'] == '1' and isset ( $v_comm ) ) { $fc = "is_comm='$v_comm', "; } else $fc = '';
        if ( $config['comment_rating'] == '1' and isset ( $v_commrate ) ) { $fc .= "is_commrate='$v_commrate', "; } else $fc .= '';
        if ( $config['file_responses'] == '1' and isset ( $v_resp ) ) { $fc .= "is_fileresp='$v_resp', "; } else $fc .= '';
        if ( $config['file_ratings'] == '1' and isset ( $v_rate ) ) { $fc .= "is_rated='$v_rate', "; } else $fc .= '';
        if ( $config['file_embed'] == '1' and isset ( $v_emb ) ) { $fc .= "is_embed='$v_emb', "; } else $fc .= '';
        if ( $config['file_bookmark'] == '1' and isset ( $v_bm ) ) { $fc .= "is_bm='$v_bm', "; } else $fc .= '';
                    
	$mdate = date("Y-m-d");
	$mtime = time();
	    
	$sql = "insert into files_image set $fc uid='$_SESSION[UID]', vtitle='$v_title', vdescr='$v_descr', vtags='$v_tags', vcategs='0,$_POST_DATA[listch],0', vtype='$_POST_DATA[vpriv]', adddate='$mdate', addtime='$mtime', $active";
	$x=$conn->execute($sql);
	$id=mysql_insert_id();
	$rnd=substr(md5($id),12,7);
	$key=substr(md5($id),12,20);
	if ($ext=="jpeg") { $ext="jpg"; }
	$vname=$id."$rnd.".$ext;
	//$x->Close();
	
	$sql="select * from members where uid='$_SESSION[UID]'";
	$mrs=$conn->execute($sql);
	$mdir=$mrs->fields[folder];
	$mado_dir=$config['pic_dir']."/".$mdir;
	$mrs->Close();

	$fname = "$config[pic_dir]/$vname";
	$rname = "$mado_dir/$vname";
	
	if(rename($upload_file_path,$rname))
	{
	    $picSize = @getimagesize($rname);
	    $w=$picSize[0];
	    $h=$picSize[1];
	    if ( $config['img_scale'] == 'resize' ) {
		if ( $w > $config['conv_resize_than_w'] or $h > $config['conv_resize_than_h'] ) {
		    $w = $config['conv_resize_to_w'];
		    $h = $config['conv_resize_to_h'];
	        }
	    }
	    if ($err=="")
	    {
		$phpThumb = new phpThumb();
		$phpThumb1 = new phpThumb();
		$phpThumb2 = new phpThumb();
		$phpThumb3 = new phpThumb();
		
		$phpThumb->setSourceFilename($rname);
		$phpThumb1->setSourceFilename($rname);
		$phpThumb2->setSourceFilename($rname);
		$phpThumb3->setSourceFilename($rname);
		
		$thumbnail_width=$config[img_max_width];
		$thumbnail_height=$config[img_max_height];
		$th1_width="630";
		$th1_height="385";
		$th2_width="320";
		$th2_height="240";
		
		$phpThumb->setParameter('w', $thumbnail_width);
		$phpThumb->setParameter('h', $thumbnail_height);
		$phpThumb->setParameter('far', '1'); //don't edit this
		$phpThumb->setParameter('bg', $config['thumb_bg']);
		
		$phpThumb1->setParameter('w', $th1_width);
		$phpThumb1->setParameter('h', $th1_height);
		$phpThumb1->setParameter('far', '1'); //don't edit this
		$phpThumb1->setParameter('bg', $config['thumb_bg']);
		
		$phpThumb2->setParameter('w', $th2_width);
		$phpThumb2->setParameter('h', $th2_height);
		$phpThumb2->setParameter('far', '1'); //don't edit this
		$phpThumb2->setParameter('bg', $config['thumb_bg']);
		
		$phpThumb3->setParameter('w', $w);
		$phpThumb3->setParameter('h', $h);
		$phpThumb3->setParameter('far', '1'); //don't edit this
		
		/*
		if ($config[site_theme]=="black") { $phpThumb->setParameter('bg', '111111'); $phpThumb1->setParameter('bg', '111111'); $phpThumb2->setParameter('bg', '111111'); }
		elseif ($config[site_theme]=="blue") { $phpThumb->setParameter('bg', 'ebf6fd'); $phpThumb1->setParameter('bg', 'ebf6fd'); $phpThumb2->setParameter('bg', 'ebf6fd'); }
		elseif ($config[site_theme]=="orange") { $phpThumb->setParameter('bg', 'efefef'); $phpThumb1->setParameter('bg', 'efefef'); $phpThumb2->setParameter('bg', 'efefef'); }
		else { $phpThumb->setParameter('bg', 'ffffff'); $phpThumb1->setParameter('bg', 'ffffff'); $phpThumb2->setParameter('bg', 'ffffff'); }
		*/
		
		$output1 = $config[tmb_dir]."/".$mdir."/".$id.$rnd.".".$phpThumb->config_output_format;
		$output11 = $config[pic_dir]."/".$mdir."/".$id.$rnd.".".$phpThumb->config_output_format;
		$output2 = $config[tmb_dir]."/".$mdir."/".$id."v1.".$phpThumb->config_output_format;
		$output3 = $config[tmb_dir]."/".$mdir."/".$id."v2.".$phpThumb->config_output_format;
		
		if ($phpThumb->GenerateThumbnail()) { $phpThumb->RenderToFile($output1); }
		if ($phpThumb1->GenerateThumbnail()) { $phpThumb1->RenderToFile($output2); }
		if ($phpThumb2->GenerateThumbnail()) { $phpThumb2->RenderToFile($output3); }
		if ($phpThumb3->GenerateThumbnail()) { if ($ph!="jpeg" && $ph!="jpg") { $phpThumb3->RenderToFile($output11); } }
		
		if (($ext!="jpeg" && $ext!="jpg") && $config[delete_original_image]=="1")
		{
	    	    @chmod($rname, 0777);
	    	    @unlink($rname);
		}
	    }
	}
	else { $err = $lang['err_up12']; }
    }
    
    if($err=="")
    {
if ( $v_rto != '' ) {
    $rtype = 'image';
    $resp = $v_rto;
    $resp_time = time();
    $vi = $conn->execute("select vid,uid,is_fileresp,vtitle from files_".$rtype." where vkey='$resp';");
    $vid = $vi->fields['vid'];
    $vuid = $vi->fields['uid'];
    $vtitle1 = $vi->fields['vtitle'];
    $is_fileresp = $vi->fields['is_fileresp'];
    if ( $is_fileresp == 'yes' ) $app = ''; elseif ( $is_fileresp == 'app' ) $app = ", approved='0'"; elseif ( $is_fileresp == 'no' ) $err = $lang['fresp_txt22'];
    if ( $err == '' ) {
        $conn->execute("insert into file_responses set rtype='$rtype', rvid='$id', rtovid='$vid', ruid='$vuid', resuid='$_SESSION[UID]', rtime='".$resp_time."' $app;");
        if ( $conn->Affected_Rows() > 0 && $err == '' ) {
            $conn->execute("update files_".$rtype." set responses=responses+1 where vid='$vid';");
            send_response_notice( $vuid, $id, $rtype, $vtitle1 );
        }
    }
}	
	if ($ph=="jpg" || $ext=="jpeg") $ext="jpg";
	    else $ext=$ext;
        $conn->execute("update file_responses set rvid='$id' where rvid='0' and rtype='image';");
        $sql="update files_image set vname='$vname', vflvname='".$id."$rnd.jpg', vduration='0', vspace='$space', vkey='$key' where vid='$id';";
        $conn->execute($sql);
        if (mysql_affected_rows()>0)
	{
	    $fm = $config['admin_email'];
	    $receiver = $config['admin_name'];
	    if ($fm!='' and check_email_address($fm) and $config['mail_not5'] == '1' and $err == '')
	    {
		$mtype='mail_not5';
		$file='image';
		send_notification($fm, $receiver, $_SESSION['USERNAME'], $mtype, $id, $file);
	    }
	    $conn->execute("update members set files_image=files_image+1 where uid='$_SESSION[UID]'");
	    header("Location: $config[base_url]/upload_image/confirmation"); exit;
	} else { $err=$lang['err_up13']; }
    }

    $smarty->assign('err',$err);
    $smarty->assign('type',$type);
    $smarty->display('main_header.tpl');
    $smarty->display('main_upload.tpl');
    $smarty->display('footer.tpl');
    exit;
}

//normal bahaviour
set_btn("bupload"); set_title($lang['title_upimages']);
if($type=="") $type="general";
$smarty->assign('err',$err);
$smarty->assign('type',$type);
$smarty->display('main_header.tpl');
$smarty->display('main_upload.tpl');
$smarty->display('footer.tpl');
?>