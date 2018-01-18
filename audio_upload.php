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
if ($config['enable_audio']=="0") { header("Location: $config[base_url]/main"); exit; }
if ($config['audio_uploads']=="0")
{
    $err=$lang['err_upaudio1'];
    set_btn("bupload"); set_title($lang['title_upaudios']); set_sbtn("1");
    $smarty->assign('err',$err);
    $smarty->display('main_header.tpl');
    $smarty->display('footer.tpl');
    exit;
}
check_login('upload_audio');
if (isset($_REQUEST[vcancel])) $_REQUEST[vcancel]=filter_title($_REQUEST[vcancel]);
if (isset($_REQUEST[vnext])) $_REQUEST[vnext]=filter_title($_REQUEST[vnext]);
$smarty->assign('dmenu', 'mymsg'); $smarty->assign('sbtn', 'aup');
$_SESSION['section'] = 'audio';

require('ubr_ini.php');
require('ubr_lib.php');
require('ubr_finished_lib.php');

header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

require('ubr_audio_config.php');

$smarty->assign('UBR_path_to_link_script', $PATH_TO_LINK_SCRIPT);
$smarty->assign('UBR_path_to_js_script', $PATH_TO_JS_SCRIPT);
$smarty->assign('UBR_path_to_set_progress_script', $PATH_TO_SET_PROGRESS_SCRIPT);
$smarty->assign('UBR_path_to_get_progress_script', $PATH_TO_GET_PROGRESS_SCRIPT);
$smarty->assign('UBR_path_to_upload_script', $PATH_TO_UPLOAD_SCRIPT);
$smarty->assign('UBR_multi_configs_enabled', $MULTI_CONFIGS_ENABLED);
$smarty->assign('UBR_config_file', 'ubr_audio_config');
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
set_sbtn("1");
$type="audio";    
$smarty->assign('type',$type);
$sql = "select * from categories where (active='1') and (audio_uploads='yes') order by name asc";
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
	$csql="select * from files_audio where vtitle='$vtitle'";
	$mcs=$conn->execute($csql);
	if($mcs->recordcount()>0) { $err=$lang['err_upaudio2']; $mcs->Close(); }
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
            $allowed_extensions = explode(',', $config['allowed_audio_formats']);
            if ( !in_array($ext, $allowed_extensions) ) $err = $lang['err_upaudio3'];
            if ( $space > $config['max_audio_size'] ) $err = 'Invalid Size!';
        }
    }

    if($err == "")
    {
	if($config['audio_approval'] == 1) $active="active='0'";
	    else $active="active='1'";
	
	$v_title = filter_title($_POST_DATA[vtitle]);
	$v_descr = filter_descr($_POST_DATA[vdescr]);
	$v_tags = filter_title($_POST_DATA[vtags]);
	$v_chlist = filter_descr($_POST_DATA[listch]);
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
	    
	$sql = "insert into files_audio set $fc uid='$_SESSION[UID]', vtitle='$v_title', vdescr='$v_descr', vtags='$v_tags', vcategs='0,$v_chlist,0', vtype='$v_priv', adddate='$mdate', addtime='$mtime', $active";
	$rr=$conn->execute($sql);
	$id=mysql_insert_id();
	$rnd=substr(md5($id),11,7);
	$key=substr(md5($id),11,20);
	$vname=$id."$rnd.".$ext;
	
	$sql="select * from members where uid='$_SESSION[UID]'";
	$mrs=$conn->execute($sql);
	$mdir=$mrs->fields[folder];
	$mrs->Close();
	$mado_dir=$config['ado_dir']."/".$mdir;

	$fname = "$config[ado_dir]/$vname";
	$rname = "$mado_dir/$vname";
	
	if(rename($upload_file_path,$rname))
	{
	    gen_temp_thumba($rname, $id);
	    $php_cgi = (strpos(php_sapi_name(), 'cgi')) ? 'env -i ' : NULL;
	    $cmd = $php_cgi.$config['path_php'].' '.$config['base_dir'].'/audio_conversion.php '.$vname.' '.$id.' '.$rname.'> /dev/null &';
	    exec($cmd);
	} 
	else { $err = $lang['err_up12']; }
    }
    
    if($err=="")
    {
if ( $v_rto != '' ) {
    $rtype = 'audio';
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
	if ($ext=="mp3") $ext="mp3";
	    else $ext=$ext;
        $flvname = $id.$rnd.".mp3";
        $conn->execute("update file_responses set rvid='$id' where rvid='0' and rtype='audio';");
        $sql="update files_audio set vname='$vname', vflvname='$flvname', vspace='$space', vkey='$key' where vid='$id'";	
        $rr1=$conn->execute($sql);
        if (mysql_affected_rows()>0)
	{
	    $rr2=$conn->execute("update members set files_audio=files_audio+1 where uid='$_SESSION[UID]'");
	    $rr1->Close();
	    $rr2->Close();
	    
	    header("Location: $config[base_url]/upload_audio/confirmation");
	    exit;
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
set_btn("bupload"); set_title($lang['title_upaudios']);
if($type=="") $type="general";
$smarty->assign('err',$err);
$smarty->assign('type',$type);
$smarty->display('main_header.tpl');
$smarty->display('main_upload.tpl');
$smarty->display('footer.tpl');
?>