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

if (isset($_REQUEST['c'])) $c=filter_title($_REQUEST['c']);
if (isset($_REQUEST['l'])) $l=filter_title($_REQUEST['l']);
if (isset($_REQUEST['savesvideoconvbtn'])) $vconvbtn=filter_title($_REQUEST['savesvideoconvbtn']);
if (isset($_REQUEST['savesaudioconvbtn'])) $aconvbtn=filter_title($_REQUEST['savesaudioconvbtn']);
if (isset($_REQUEST['savesimageconvbtn'])) $iconvbtn=filter_title($_REQUEST['savesimageconvbtn']);
if (isset($_REQUEST['savefilesetbtn'])) $filesetbtn=filter_title($_REQUEST['savefilesetbtn']);
if (isset($_REQUEST['savefilesetbtn'])) $fileresbtn=filter_title($_REQUEST['savefilesetbtn']);
if (isset($_REQUEST['clearcachebtn'])) $clearcachebtn=filter_title($_REQUEST['clearcachebtn']);
if (isset($_REQUEST['cleartempbtn'])) $cleartempbtn=filter_title($_REQUEST['cleartempbtn']);
if (isset($_REQUEST['clearuploadbtn'])) $clearuploadbtn=filter_title($_REQUEST['clearuploadbtn']);
if (isset($_REQUEST['diagtoolbtn'])) $diagtoolbtn=filter_title($_REQUEST['diagtoolbtn']);
if (isset($_REQUEST['clearlogbtn'])) $clearlogbtn=filter_title($_REQUEST['clearlogbtn']);

//image conversion settings
if ($iconvbtn != '' && $c == 'imageconv') {
    $conv_type = filter_title ( $_POST['imgconv'] );
    $conv_deny_w = filter_title ( $_POST['maxw'] );
    $conv_deny_h = filter_title ( $_POST['maxh'] );
    $conv_resize_than_w = filter_title ( $_POST['thanw'] );
    $conv_resize_than_h = filter_title ( $_POST['thanh'] );
    $conv_resize_to_w = filter_title ( $_POST['tow'] );
    $conv_resize_to_h = filter_title ( $_POST['toh'] );
    
    if ( $conv_type == 'any' ) {
	$conn->execute("update configurations set value='any' where configurations.option='img_scale'");
    } elseif ( $conv_type == 'deny' ) {
	if ( ( ( !is_numeric ( $conv_deny_w ) and !is_numeric ( $conv_deny_h ) ) or ( ( $conv_deny_w < 1 ) or ( $conv_deny_h < 1 ) ) ) ) $err = $lang['adm_ffm11'];
	if ( $err == '' ) {
	    $conn->execute("update configurations set value='deny' where configurations.option='img_scale'");
	    $conn->execute("update configurations set value='$conv_deny_w' where configurations.option='conv_deny_w'");
	    $conn->execute("update configurations set value='$conv_deny_h' where configurations.option='conv_deny_h'");
	}
    } elseif ( $conv_type == 'resize' ) {
	if ( ( ( !is_numeric ( $conv_resize_than_w ) and !is_numeric ( $conv_resize_than_h ) ) or ( ( $conv_resize_than_w < 1 ) or ( $conv_resize_than_h < 1 ) ) ) ) $err = $lang['adm_ffm11'];
	elseif ( ( ( !is_numeric ( $conv_resize_to_w ) and !is_numeric ( $conv_resize_to_h ) ) or ( ( $conv_resize_to_w < 1 ) or ( $conv_resize_to_h < 1 ) ) ) ) $err = $lang['adm_ffm11'];
	if ( $err == '' ) {
	    $conn->execute("update configurations set value='resize' where configurations.option='img_scale'");
	    $conn->execute("update configurations set value='$conv_resize_than_w' where configurations.option='conv_resize_than_w'");
	    $conn->execute("update configurations set value='$conv_resize_than_h' where configurations.option='conv_resize_than_h'");
	    $conn->execute("update configurations set value='$conv_resize_to_w' where configurations.option='conv_resize_to_w'");
	    $conn->execute("update configurations set value='$conv_resize_to_h' where configurations.option='conv_resize_to_h'");
	}
    }
    if ( $err == '' ) {
	$msg=$lang['admnot_setoptions1'];
	echo show_msg ( $msg ); exit;
    } elseif ( $err != '' ) { echo show_err ( $err ); exit; }
    exit;
}
//audio conversion settings
if ($aconvbtn != '' && $c == 'audioconv')
{    
    if (isset($_REQUEST['lamepath'])) $adm_lamepath=mysql_real_escape_string($_REQUEST['lamepath']);
    if (isset($_REQUEST['lamebitrate'])) $adm_lamebitrate=mysql_real_escape_string($_REQUEST['lamebitrate']);
    if (isset($_REQUEST['lamesbitrate'])) $adm_lamesbitrate=mysql_real_escape_string($_REQUEST['lamesbitrate']);
    if (isset($_REQUEST['hoption'])) $adm_hoption=mysql_real_escape_string($_REQUEST['hoption']);
    if (isset($_REQUEST['poption'])) $adm_poption=mysql_real_escape_string($_REQUEST['poption']);
    if (isset($_REQUEST['audiologs'])) $adm_audiologs=mysql_real_escape_string($_REQUEST['audiologs']);
    
    if ($adm_lamepath=="") $err=$lang['admerr_sys1'];
    elseif (ini_get('open_basedir') == 0 and !file_exists($adm_lamepath)) $err=$lang['admerr_sys2'].$adm_lamepath;
    if ($adm_lamebitrate=="") $err=$lang['admerr_sys3'];
    elseif ($adm_lamebitrate!="32" && $adm_lamebitrate!="40" && $adm_lamebitrate!="48" && $adm_lamebitrate!="56" && $adm_lamebitrate!="64" && $adm_lamebitrate!="80" && $adm_lamebitrate!="96" && $adm_lamebitrate!="112" && $adm_lamebitrate!="128" && $adm_lamebitrate!="160" && $adm_lamebitrate!="192" && $adm_lamebitrate!="224" && $adm_lamebitrate!="256" && $adm_lamebitrate!="320") $err=$lang['admerr_sys20'];
    if ($adm_lamesbitrate=="") $err=$lang['admerr_sys4'];
    elseif ($adm_lamesbitrate!="32" && $adm_lamesbitrate!="44.1" && $adm_lamesbitrate!="48") $err=$lang['admerr_sys5'];
        
    if ($adm_hoption!="1") { $adm_hoption="0"; }
    if ($adm_poption!="1") { $adm_poption="0"; }
    if ($adm_audiologs!="1") { $adm_audiologs="0"; }
    
    if ($err == '')
    {
	$conn->execute("update configurations set value='$adm_lamepath' where configurations.option='path_lame'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
	$conn->execute("update configurations set value='$adm_lamebitrate' where configurations.option='option_b'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
	$conn->execute("update configurations set value='$adm_lamesbitrate' where configurations.option='option_s'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
	$conn->execute("update configurations set value='$adm_hoption' where configurations.option='option_h'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
	$conn->execute("update configurations set value='$adm_poption' where configurations.option='option_p'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
	$conn->execute("update configurations set value='$adm_audiologs' where configurations.option='audio_logs'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    }
    if ($err == '' && $msg != '')
    {
	$msg=$lang['admnot_setoptions1'];
	echo show_msg ( $msg ); exit;
    }
    elseif ( $err != '' ) { echo show_err ( $err ); exit; }
}

//video conversion settings
if ($vconvbtn != '' && $c == 'videoconv')
{
    if (isset($_REQUEST['menpath'])) $adm_menpath=mysql_real_escape_string($_REQUEST['menpath']);
    if (isset($_REQUEST['mplpath'])) $adm_mplpath=mysql_real_escape_string($_REQUEST['mplpath']);
    if (isset($_REQUEST['flvpath'])) $adm_flvpath=mysql_real_escape_string($_REQUEST['flvpath']);
    if (isset($_REQUEST['phppath'])) $adm_phppath=mysql_real_escape_string($_REQUEST['phppath']);
    if (isset($_REQUEST['abitrate'])) $adm_abitrate=mysql_real_escape_string($_REQUEST['abitrate']);
    if (isset($_REQUEST['vbitrate'])) $adm_vbitrate=mysql_real_escape_string($_REQUEST['vbitrate']);
    if (isset($_REQUEST['sbitrate'])) $adm_sbitrate=mysql_real_escape_string($_REQUEST['sbitrate']);
    if (isset($_REQUEST['vres'])) $adm_vres=mysql_real_escape_string($_REQUEST['vres']);
    if (isset($_REQUEST['resx'])) $adm_resx=mysql_real_escape_string($_REQUEST['resx']);
    if (isset($_REQUEST['resy'])) $adm_resy=mysql_real_escape_string($_REQUEST['resy']);
    if (isset($_REQUEST['videologs'])) $adm_videologs=mysql_real_escape_string($_REQUEST['videologs']); 
    if (isset($_REQUEST['ffmpath'])) $adm_ffmpath=mysql_real_escape_string($_REQUEST['ffmpath']);
    if (isset($_REQUEST['conv_tool'])) $adm_conv_tool=mysql_real_escape_string($_REQUEST['conv_tool']);
    if ($adm_videologs!="1") { $adm_videologs="0"; }
    
    if ($adm_menpath=="") $err=$lang['admerr_sys6'];
        elseif ( (ini_get('open_basedir') == '0' or ini_get('open_basedir') == '' ) and !file_exists($adm_menpath)) $err=$lang['admerr_sys2'].$adm_menpath;
    if ($adm_mplpath=="") $err=$lang['admerr_sys7'];
        elseif ( (ini_get('open_basedir') == '0' or ini_get('open_basedir') == '' ) and !file_exists($adm_mplpath)) $err=$lang['admerr_sys2'].$adm_mplpath;
    if ($adm_flvpath=="") $err=$lang['admerr_sys8'];
        elseif ( (ini_get('open_basedir') == '0' or ini_get('open_basedir') == '' ) and !file_exists($adm_flvpath)) $err=$lang['admerr_sys2'].$adm_flvpath;
    if ($adm_phppath=="") $err=$lang['admerr_sys9'];
        elseif ( (ini_get('open_basedir') == '0' or ini_get('open_basedir') == '' ) and !file_exists($adm_phppath)) $err=$lang['admerr_sys2'].$adm_phppath;
    if ($adm_ffmpath=="") $err=$lang['adm_ffm2'];
        elseif ( (ini_get('open_basedir') == '0' or ini_get('open_basedir') == '' ) and !file_exists($adm_ffmpath)) $err=$lang['admerr_sys2'].$adm_ffmpath;
        
    if ($adm_vres=="1" && ($adm_resx=="" || $adm_resy=="")) $err=$lang['admerr_sys10'];
        elseif ($adm_vres=="1" && (!is_numeric($adm_resx) || !is_numeric($adm_resy))) $err=$lang['admerr_sys11'];
    if ($adm_vbitrate=="") $err=$lang['admerr_sys12'];
        elseif ($adm_vbitrate=="0" || $adm_vbitrate>9800 || !is_numeric($adm_vbitrate)) $err=$lang['admerr_sys13'];
    if ($adm_abitrate=="") $err=$lang['admerr_sys12'];
        elseif ($adm_abitrate=="0" || ($adm_abitrate!="32" && $adm_abitrate!="40" && $adm_abitrate!="48" && $adm_abitrate!="56" && $adm_abitrate!="64" && $adm_abitrate!="80" && $adm_abitrate!="96" && $adm_abitrate!="112" && $adm_abitrate!="128" && $adm_abitrate!="160" && $adm_abitrate!="192" && $adm_abitrate!="224" && $adm_abitrate!="256" && $adm_abitrate!="320") || !is_numeric($adm_abitrate)) $err=$lang['admerr_sys20'];
    if ($adm_sbitrate=="") $err=$lang['admerr_sys14'];
        elseif ($adm_sbitrate!="22050" && $adm_sbitrate!="44100" && $adm_sbitrate!="48000") $err=$lang['admerr_sys15'];

    if ($err == '')
    {
	if ($adm_menpath!=$config[path_mencoder]) { $conn->execute("update configurations set value='$adm_menpath' where configurations.option='path_mencoder'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];}
        if ($adm_mplpath!=$config[path_mplayer]) { $conn->execute("update configurations set value='$adm_mplpath' where configurations.option='path_mplayer'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];}
	if ($adm_flvpath!=$config[path_flvtool2]) { $conn->execute("update configurations set value='$adm_flvpath' where configurations.option='path_flvtool2'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];}
	if ($adm_ffmpath!=$config[path_ffmpeg]) { $conn->execute("update configurations set value='$adm_ffmpath' where configurations.option='path_ffmpeg'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];}
        if ($adm_phppath!=$config[path_php]) { $conn->execute("update configurations set value='$adm_phppath' where configurations.option='path_php'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];}
        if ($adm_sbitrate!=$config[sbrate]) { $conn->execute("update configurations set value='$adm_sbitrate' where configurations.option='sbrate'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];}
        if ($adm_vbitrate!=$config[vbrate]) { $conn->execute("update configurations set value='$adm_vbitrate' where configurations.option='vbrate'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];}
        if ($adm_abitrate!=$config[abrate]) { $conn->execute("update configurations set value='$adm_abitrate' where configurations.option='abrate'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];}
        if ($adm_vres!=$config[resize]) { if ($adm_vres!="1") { $adm_vres="0"; } $conn->execute("update configurations set value='$adm_vres' where configurations.option='resize'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];}
        if ($adm_resx!=$config[resize_x]) { $conn->execute("update configurations set value='$adm_resx' where configurations.option='resize_x'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];}
        if ($adm_resy!=$config[resize_y]) { $conn->execute("update configurations set value='$adm_resy' where configurations.option='resize_y'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];}
        $conn->execute("update configurations set value='$adm_videologs' where configurations.option='video_logs'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
        $conn->execute("update configurations set value='$adm_conv_tool' where configurations.option='conv_tool'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    }

    if ($err == '' && $msg != '')
    {
	$msg=$lang['admnot_setoptions1'];
	echo show_msg ( $msg ); exit;
    }
    elseif ( $err != '' ) { echo show_err ( $err ); exit; }
}
//file delete settings
if ($filesetbtn != '' && $c == 'file')
{
    if (isset($_REQUEST['delaudio'])) $adm_delaudio=mysql_real_escape_string($_REQUEST['delaudio']);
    if (isset($_REQUEST['delimage'])) $adm_delimage=mysql_real_escape_string($_REQUEST['delimage']);
    if (isset($_REQUEST['delvideo'])) $adm_delvideo=mysql_real_escape_string($_REQUEST['delvideo']);
    if (isset($_REQUEST['delmethod'])) $adm_delmethod=mysql_real_escape_string($_REQUEST['delmethod']);
    
    $conn->execute("update configurations set value='$adm_delaudio' where configurations.option='delete_original_audio'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    $conn->execute("update configurations set value='$adm_delimage' where configurations.option='delete_original_image'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    $conn->execute("update configurations set value='$adm_delvideo' where configurations.option='delete_original_video'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    $conn->execute("update configurations set value='$adm_delmethod' where configurations.option='delete_files'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    
    if ($err == '' && $msg != '')
    {
	$msg=$lang['admnot_setoptions1'];
	echo show_msg ( $msg ); exit;
    }
    elseif ( $err != '' ) { echo show_err ( $err ); exit; }
}
//file restr. settings
if ($filesetbtn != '' && $c == 'fileres')
{
    $post_max_size = str_replace('M', '', ini_get('post_max_size'));
    $upload_max_filesize = str_replace('M', '', ini_get('upload_max_filesize')); 
    if (isset($_REQUEST['maxaudio'])) $adm_maxaudio=mysql_real_escape_string($_REQUEST['maxaudio']);
    if (isset($_REQUEST['maximage'])) $adm_maximage=mysql_real_escape_string($_REQUEST['maximage']);
    if (isset($_REQUEST['maxvideo'])) $adm_maxvideo=mysql_real_escape_string($_REQUEST['maxvideo']);
    if (isset($_REQUEST['audioext'])) $adm_audioext=mysql_real_escape_string($_REQUEST['audioext']);
    if (isset($_REQUEST['imageext'])) $adm_imageext=mysql_real_escape_string($_REQUEST['imageext']);
    if (isset($_REQUEST['videoext'])) $adm_videoext=mysql_real_escape_string($_REQUEST['videoext']);
    if (isset($_REQUEST['multi_categ_uploads'])) { $adm_multi_categ_uploads=mysql_real_escape_string($_REQUEST['multi_categ_uploads']); $adm_multi_categ_uploads = '1'; } else { $adm_multi_categ_uploads = '0'; }
    if (isset($_REQUEST['multi_categ_max'])) $adm_multi_categ_max=mysql_real_escape_string($_REQUEST['multi_categ_max']);
    if (isset($_REQUEST['same_title_uploads'])) { $adm_same_title_uploads=mysql_real_escape_string($_REQUEST['same_title_uploads']); $adm_same_title_uploads = '1'; } else { $adm_same_title_uploads = '0'; }
    
    $adm_audioext = str_replace("\r", '', $adm_audioext); $adm_audioext = str_replace("\n", '', $adm_audioext);
    $adm_imageext = str_replace("\r", '', $adm_imageext); $adm_imageext = str_replace("\n", '', $adm_imageext);
    $adm_videoext = str_replace("\r", '', $adm_videoext); $adm_videoext = str_replace("\n", '', $adm_videoext);
    
    if ($adm_maxaudio == '' or !is_numeric($adm_maxaudio)) $err = $lang['admerr_sys21'];
    elseif ($adm_maximage == '' or !is_numeric($adm_maximage)) $err = $lang['admerr_sys22'];
    elseif ($adm_maxvideo == '' or !is_numeric($adm_maxvideo)) $err = $lang['admerr_sys23'];
    elseif (!is_numeric($adm_multi_categ_max) or $adm_multi_categ_max < 0 or $adm_multi_categ_max == '1' ) $err = $lang['adm_resopts4'];
    elseif ($adm_audioext == '' or (!preg_match('/^[a-zA-Z0-9, ]*$/', $adm_audioext))) $err = $lang['admerr_sys24'];
    elseif ($adm_imageext == '' or (!preg_match('/^[a-zA-Z0-9, ]*$/', $adm_imageext))) $err = $lang['admerr_sys25'];
    elseif ($adm_videoext == '' or (!preg_match('/^[a-zA-Z0-9, ]*$/', $adm_videoext))) $err = $lang['admerr_sys26'];
    elseif ($adm_maxaudio > $post_max_size or $adm_maxaudio > $upload_max_filesize) $err = $lang['admerr_sys27'];
    elseif ($adm_maximage > $post_max_size or $adm_maximage > $upload_max_filesize) $err = $lang['admerr_sys28'];
    elseif ($adm_maxvideo > $post_max_size or $adm_maxvideo > $upload_max_filesize) $err = $lang['admerr_sys29'];
    
    if ($err == '')
    {
	$conn->execute("update configurations set value='$adm_maxaudio' where configurations.option='max_audio_size'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
	$conn->execute("update configurations set value='$adm_maximage' where configurations.option='max_image_size'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
	$conn->execute("update configurations set value='$adm_maxvideo' where configurations.option='max_video_size'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
	$conn->execute("update configurations set value='$adm_audioext' where configurations.option='allowed_audio_formats'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
	$conn->execute("update configurations set value='$adm_imageext' where configurations.option='allowed_image_formats'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
	$conn->execute("update configurations set value='$adm_videoext' where configurations.option='allowed_video_formats'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
	$conn->execute("update configurations set value='$adm_multi_categ_max' where configurations.option='multi_categ_max'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
	$conn->execute("update configurations set value='$adm_multi_categ_uploads' where configurations.option='multi_categ_uploads'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
	$conn->execute("update configurations set value='$adm_same_title_uploads' where configurations.option='same_title_uploads'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    }
    
    if ($err == '' && $msg != '')
    {
	$msg=$lang['admnot_setoptions1'];
	echo show_msg ( $msg ); exit;
    }
    elseif ( $err != '' ) { echo show_err ( $err ); exit; }
}
//system tools - clear cache
if ($clearcachebtn != '' && $c == 'clearcache')
{
    //if (php_sapi_name() == 'cgi') $err = 'Error: Cache cannot be cleaned while server API is CGI. Please clean manually!';
    if ($err == '')
    {
	$cm = 'rm -rf '.$config['base_dir'].'/media/cache/templates_c/*.php';
	
	exec($cm);
	$msg = $lang['adm_setsystools6']; 
	echo show_msg ( $msg ); exit;
    }
}
//system tools - clear temp dir
if ($cleartempbtn != '' && $c == 'cleartemp')
{
    @rmdir_rf($config['tmpimgpath']);
    if (@mkdir($config['tmpimgpath'], 0777))
    {
	if(@chmod($config['tmpimgpath'], 0777)) $msg = $lang['adm_setsystools6'];
	else $err = 'chmod error';
    } //else $err = 'mkdir err';
    $msg = $lang['adm_setsystools6'];
    if ($err == '' && $msg != '')
    {
	echo show_msg ( $msg ); exit;
    }
    elseif ( $err != '' ) { echo show_err ( $err ); exit; }
}
//system tools - clear upload dir
if ($clearuploadbtn != '' && $c == 'clearupload')
{
    @rmdir_rf($config['dir_upload']);
    if (@mkdir($config['dir_upload'], 0777))
    {
	if (@chmod($config['dir_upload'], 0777)) $msg = $lang['adm_setsystools6'];
	else $err = 'chmod error';
    } //else $err = 'mkdir error!';
    $msg = $lang['adm_setsystools6'];
    if ($err == '' && $msg != '')
    {
	echo show_msg ( $msg ); exit;
    }
    elseif ( $err != '' ) { echo show_err ( $err ); exit; }
}
//system tools - clear log dir
if ($clearlogbtn != '' && $c == 'clearlogs')
{
    @rmdir_rf($config['logs_dir']);
    if (@mkdir($config['logs_dir'], 0777))
    {
	if (@chmod($config['logs_dir'], 0777)) $msg = $lang['adm_setsystools6'];
	else $err = 'chmod error';
    } //else $err = 'mkdir error!';
    $msg = $lang['adm_setsystools6'];
    if ($err == '' && $msg != '')
    {
	echo show_msg ( $msg ); exit;
    }
    elseif ( $err != '' ) { echo show_err ( $err ); exit; }
}
//system tools - system diagnostics
if ($diagtoolbtn != '' && $c == 'diag' && $l == '')
{
    function file_perms($file, $octal = false)
    {
	if(!file_exists($file)) return false;
	$perms = fileperms($file);
	$cut = $octal ? 0 : 1;
	return substr(decoct($perms), $cut);
    }
    
    $d1perm = file_perms($config['cache_dir'].'/templates_c');
    if ($d1perm == '0777') { $sc = 'green'; } else { $sc = 'red'; }
    $d2perm = file_perms($config['tmpimgpath']);
    if ($d2perm == '0777') { $sc = 'green'; } else { $sc = 'red'; }
    $d3perm = file_perms($config['dir_upload']);
    if ($d3perm == '0777') { $sc = 'green'; } else { $sc = 'red'; }
    $d4perm = file_perms($config['ado_dir']);
    if ($d4perm == '0777') { $sc = 'green'; } else { $sc = 'red'; }
    $d5perm = file_perms($config['pic_dir']);
    if ($d5perm == '0777') { $sc = 'green'; } else { $sc = 'red'; }
    $d6perm = file_perms($config['vdo_dir']);
    if ($d6perm == '0777') { $sc = 'green'; } else { $sc = 'red'; }
    $d7perm = file_perms($config['catimg_dir']);
    if ($d7perm == '0777') { $sc = 'green'; } else { $sc = 'red'; }
    $d8perm = file_perms($config['flvdo_dir']);
    if ($d8perm == '0777') { $sc = 'green'; } else { $sc = 'red'; }
    $d9perm = file_perms($config['dir_fp'].'/ads');
    if ($d9perm == '0777') { $sc = 'green'; } else { $sc = 'red'; }
    $d10perm = file_perms($config['dir_fp'].'/wms');
    if ($d10perm == '0777') { $sc = 'green'; } else { $sc = 'red'; }
    $d11perm = file_perms($config['dir_fp'].'/wms_audio');
    if ($d11perm == '0777') { $sc = 'green'; } else { $sc = 'red'; }
    $d12perm = file_perms($config['tmb_dir']);
    if ($d12perm == '0777') { $sc = 'green'; } else { $sc = 'red'; }
    $d13perm = file_perms($config['usrimg_dir']);
    if ($d13perm == '0777') { $sc = 'green'; } else { $sc = 'red'; }
    $d14perm = file_perms($config['img_dir']);
    if ($d14perm == '0777') { $sc = 'green'; } else { $sc = 'red'; }
    $d15perm = file_perms($config['admin_dir'].'/fckeditor/uploaded_files');
    if ($d15perm == '0777') { $sc = 'green'; } else { $sc = 'red'; }
    $d16perm = file_perms($config['base_dir'].'/modules/languages');
    if ($d16perm == '0777') { $sc = 'green'; } else { $sc = 'red'; }
    $d17perm = file_perms($config['tpl_dir'].'/ads');
    if ($d17perm == '0777') { $sc = 'green'; } else { $sc = 'red'; }
    $d18perm = file_perms($config['tpl_dir'].'/emails');
    if ($d18perm == '0777') { $sc = 'green'; } else { $sc = 'red'; }
    $d19perm = file_perms($config['tpl_dir'].'/static');
    if ($d19perm == '0777') { $sc = 'green'; } else { $sc = 'red'; }
    $d20perm = file_perms($config['logs_dir']);
    if ($d20perm == '0777') { $sc = 'green'; } else { $sc = 'red'; }
    $d21perm = file_perms($config['base_dir'].'/media/files_user_bgimages');
    if ($d21perm == '0777') { $sc = 'green'; } else { $sc = 'red'; }
    $d22perm = file_perms($config['base_dir'].'/modules/wordfiltering');
    if ($d22perm == '0777') { $sc = 'green'; } else { $sc = 'red'; }

    $adm_dir_size = getDirectorySize($config['admin_dir'].'/fckeditor/uploaded_files');
    $str0 = '<span class="act">'.sizeFormat($adm_dir_size['size']).'</span> - '.$adm_dir_size['count'].' file(s) and '.$adm_dir_size['dircount'].' folder(s)';
    $cache_dir_size = getDirectorySize($config['cache_dir'].'/templates_c');
    $str1 = '<span class="act">'.sizeFormat($cache_dir_size['size']).'</span> - '.$cache_dir_size['count'].' file(s) and '.$cache_dir_size['dircount'].' folder(s)';
    $temp_dir_size = getDirectorySize($config['tmpimgpath']);
    $str2 = '<span class="act">'.sizeFormat($temp_dir_size['size']).'</span> - '.$temp_dir_size['count'].' file(s) and '.$temp_dir_size['dircount'].' folder(s)';
    $up_dir_size = getDirectorySize($config['dir_upload']);
    $str3 = '<span class="act">'.sizeFormat($up_dir_size['size']).'</span> - '.$up_dir_size['count'].' file(s) and '.$up_dir_size['dircount'].' folder(s)';
    $ado_dir_size = getDirectorySize($config['ado_dir']);
    $str4 = '<span class="act">'.sizeFormat($ado_dir_size['size']).'</span> - '.$ado_dir_size['count'].' file(s) and '.$ado_dir_size['dircount'].' folder(s)';
    $catimg_dir_size = getDirectorySize($config['catimg_dir']);
    $str5 = '<span class="act">'.sizeFormat($catimg_dir_size['size']).'</span> - '.$catimg_dir_size['count'].' file(s) and '.$catimg_dir_size['dircount'].' folder(s)';
    $dir_fpads_size = getDirectorySize($config['dir_fp'].'/ads');
    $str6 = '<span class="act">'.sizeFormat($dir_fpads_size['size']).'</span> - '.$dir_fpads_size['count'].' file(s) and '.$dir_fpads_size['dircount'].' folder(s)';
    $dir_fpwms_size = getDirectorySize($config['dir_fp'].'/wms');
    $str7 = '<span class="act">'.sizeFormat($dir_fpwms_size['size']).'</span> - '.$dir_fpwms_size['count'].' file(s) and '.$dir_fpwms_size['dircount'].' folder(s)';
    $dir_fpwmsaudio_size = getDirectorySize($config['dir_fp'].'/wms_audio');
    $str8 = '<span class="act">'.sizeFormat($dir_fpwmsaudio_size['size']).'</span> - '.$dir_fpwmsaudio_size['count'].' file(s) and '.$dir_fpwmsaudio_size['dircount'].' folder(s)';
    $flvdo_dir_size = getDirectorySize($config['flvdo_dir']);
    $str9 = '<span class="act">'.sizeFormat($flvdo_dir_size['size']).'</span> - '.$flvdo_dir_size['count'].' file(s) and '.$flvdo_dir_size['dircount'].' folder(s)';
    $pic_dir_size = getDirectorySize($config['pic_dir']);
    $str10 = '<span class="act">'.sizeFormat($pic_dir_size['size']).'</span> - '.$pic_dir_size['count'].' file(s) and '.$pic_dir_size['dircount'].' folder(s)';
    $tmb_dir_size = getDirectorySize($config['tmb_dir']);
    $str11 = '<span class="act">'.sizeFormat($tmb_dir_size['size']).'</span> - '.$tmb_dir_size['count'].' file(s) and '.$tmb_dir_size['dircount'].' folder(s)';
    $usrimg_dir_size = getDirectorySize($config['usrimg_dir']);
    $str12 ='<span class="act">'. sizeFormat($usrimg_dir_size['size']).'</span> - '.$usrimg_dir_size['count'].' file(s) and '.$usrimg_dir_size['dircount'].' folder(s)';
    $usrchimg_dir_size = getDirectorySize($config['base_dir'].'/media/files_user_bgimages');
    $str12x ='<span class="act">'. sizeFormat($usrchimg_dir_size['size']).'</span> - '.$usrchimg_dir_size['count'].' file(s) and '.$usrchimg_dir_size['dircount'].' folder(s)';
    $wf_dir_size = getDirectorySize($config['base_dir'].'/modules/wordfiltering');
    $str13x ='<span class="act">'. sizeFormat($wf_dir_size['size']).'</span> - '.$wf_dir_size['count'].' file(s) and '.$wf_dir_size['dircount'].' folder(s)';
    $vdo_dir_size = getDirectorySize($config['vdo_dir']);
    $str13 = '<span class="act">'.sizeFormat($vdo_dir_size['size']).'</span> - '.$vdo_dir_size['count'].' file(s) and '.$vdo_dir_size['dircount'].' folder(s)';
    $img_dir_size = getDirectorySize($config['img_dir']);
    $str14 = '<span class="act">'.sizeFormat($img_dir_size['size']).'</span> - '.$img_dir_size['count'].' file(s) and '.$img_dir_size['dircount'].' folder(s)';
    $lang_dir_size = getDirectorySize($config['base_dir'].'/modules/languages');
    $str15 = '<span class="act">'.sizeFormat($lang_dir_size['size']).'</span> - '.$lang_dir_size['count'].' file(s) and '.$lang_dir_size['dircount'].' folder(s)';
    $tpl1_dir_size = getDirectorySize($config['tpl_dir'].'/ads');
    $str16 = '<span class="act">'.sizeFormat($tpl1_dir_size['size']).'</span> - '.$tpl1_dir_size['count'].' file(s) and '.$tpl1_dir_size['dircount'].' folder(s)';
    $tpl2_dir_size = getDirectorySize($config['tpl_dir'].'/emails');
    $str17 = '<span class="act">'.sizeFormat($tpl2_dir_size['size']).'</span> - '.$tpl2_dir_size['count'].' file(s) and '.$tpl2_dir_size['dircount'].' folder(s)';
    $tpl3_dir_size = getDirectorySize($config['tpl_dir'].'/static');
    $str18 = '<span class="act">'.sizeFormat($tpl3_dir_size['size']).'</span> - '.$tpl3_dir_size['count'].' file(s) and '.$tpl3_dir_size['dircount'].' folder(s)';
    $logs_dir_size = getDirectorySize($config['logs_dir']);
    $str19 = '<span class="act">'.sizeFormat($logs_dir_size['size']).'</span> - '.$logs_dir_size['count'].' file(s) and '.$logs_dir_size['dircount'].' folder(s)';
    
    $html = "<fieldset><legend><a href=\"javascript: void(0)\" onclick=\"ReverseContentDisplay('filepermdiv'); ReverseContentDisplay('filepermtxt'); changeclass_act('d1');\"><span id=\"d1\" class=\"\">Folder Information</span></a></legend>";
    $html.= "<div id=\"filepermtxt\" style=\"display: block;\">View auto-detected folder permission information and statistics</div>";
    $html.= "<div id=\"filepermdiv\" style=\"display: none;\">";
    $html.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td width=\"250\">".$str0."</td><td><span class=\"act\">".$config['admin_dir']."/fckeditor/uploaded_files&nbsp;&nbsp;-&nbsp;&nbsp;<span class=".$sc.">".$d15perm."</span> </span></td></tr></table></div>";
    $html.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td width=\"250\">".$str1."</td><td><span class=\"act\">".$config['cache_dir']."/templates_c&nbsp;&nbsp;-&nbsp;&nbsp;<span class=".$sc.">".$d1perm."</span> </span></td></tr></table></div>";
    $html.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td width=\"250\">".$str19."</td><td><span class=\"act\">".$config['logs_dir']."&nbsp;&nbsp;-&nbsp;&nbsp;<span class=".$sc.">".$d20perm."</span> </span></td></tr></table></div>";
    $html.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td width=\"250\">".$str2."</td><td><span class=\"act\">".$config['tmpimgpath']."&nbsp;&nbsp;-&nbsp;&nbsp;<span class=".$sc.">".$d2perm."</span> </span></td></tr></table></div>";
    $html.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td width=\"250\">".$str3."</td><td><span class=\"act\">".$config['dir_upload']."&nbsp;&nbsp;-&nbsp;&nbsp;<span class=".$sc.">".$d3perm."</span> </span></td></tr></table></div>";
    $html.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td width=\"250\">".$str4."</td><td><span class=\"act\">".$config['ado_dir']."&nbsp;&nbsp;-&nbsp;&nbsp;<span class=".$sc.">".$d4perm."</span> </span></td></tr></table></div>";
    $html.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td width=\"250\">".$str5."</td><td><span class=\"act\">".$config['catimg_dir']."&nbsp;&nbsp;-&nbsp;&nbsp;<span class=".$sc.">".$d7perm."</span> </span></td></tr></table></div>";
    $html.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td width=\"250\">".$str6."</td><td><span class=\"act\">".$config['dir_fp']."/ads&nbsp;&nbsp;-&nbsp;&nbsp;<span class=".$sc.">".$d9perm."</span> </span></td></tr></table></div>";
    $html.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td width=\"250\">".$str7."</td><td><span class=\"act\">".$config['dir_fp']."/wms&nbsp;&nbsp;-&nbsp;&nbsp;<span class=".$sc.">".$d10perm."</span> </span></td></tr></table></div>";
    $html.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td width=\"250\">".$str8."</td><td><span class=\"act\">".$config['dir_fp']."/wms_audio&nbsp;&nbsp;-&nbsp;&nbsp;<span class=".$sc.">".$d11perm."</span> </span></td></tr></table></div>";
    $html.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td width=\"250\">".$str9."</td><td><span class=\"act\">".$config['flvdo_dir']."&nbsp;&nbsp;-&nbsp;&nbsp;<span class=".$sc.">".$d8perm."</span> </span></td></tr></table></div>";
    $html.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td width=\"250\">".$str10."</td><td><span class=\"act\">".$config['pic_dir']."&nbsp;&nbsp;-&nbsp;&nbsp;<span class=".$sc.">".$d5perm."</span> </span></td></tr></table></div>";
    $html.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td width=\"250\">".$str11."</td><td><span class=\"act\">".$config['tmb_dir']."&nbsp;&nbsp;-&nbsp;&nbsp;<span class=".$sc.">".$d12perm."</span> </span></td></tr></table></div>";
    $html.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td width=\"250\">".$str12."</td><td><span class=\"act\">".$config['usrimg_dir']."&nbsp;&nbsp;-&nbsp;&nbsp;<span class=".$sc.">".$d12perm."</span> </span></td></tr></table></div>";
    $html.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td width=\"250\">".$str12x."</td><td><span class=\"act\">".$config['base_dir'].'/media/files_user_bgimages'."&nbsp;&nbsp;-&nbsp;&nbsp;<span class=".$sc.">".$d21perm."</span> </span></td></tr></table></div>";
    $html.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td width=\"250\">".$str13."</td><td><span class=\"act\">".$config['vdo_dir']."&nbsp;&nbsp;-&nbsp;&nbsp;<span class=".$sc.">".$d6perm."</span> </span></td></tr></table></div>";
    $html.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td width=\"250\">".$str14."</td><td><span class=\"act\">".$config['img_dir']."&nbsp;&nbsp;-&nbsp;&nbsp;<span class=".$sc.">".$d14perm."</span> </span></td></tr></table></div>";
    $html.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td width=\"250\">".$str15."</td><td><span class=\"act\">".$config['base_dir']."/modules/languages&nbsp;&nbsp;-&nbsp;&nbsp;<span class=".$sc.">".$d16perm."</span> </span></td></tr></table></div>";
    $html.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td width=\"250\">".$str13x."</td><td><span class=\"act\">".$config['base_dir']."/modules/wordfiltering&nbsp;&nbsp;-&nbsp;&nbsp;<span class=".$sc.">".$d22perm."</span> </span></td></tr></table></div>";
    $html.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td width=\"250\">".$str16."</td><td><span class=\"act\">".$config['tpl_dir']."/ads&nbsp;&nbsp;-&nbsp;&nbsp;<span class=".$sc.">".$d17perm."</span> </span></td></tr></table></div>";
    $html.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td width=\"250\">".$str17."</td><td><span class=\"act\">".$config['tpl_dir']."/emails&nbsp;&nbsp;-&nbsp;&nbsp;<span class=".$sc.">".$d18perm."</span> </span></td></tr></table></div>";
    $html.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td width=\"250\">".$str18."</td><td><span class=\"act\">".$config['tpl_dir']."/static&nbsp;&nbsp;-&nbsp;&nbsp;<span class=".$sc.">".$d19perm."</span> </span></td></tr></table></div>";
    $html.= "</div>";
    $html.= "</fieldset>";
    
    $cmd_lame = $config['path_lame'].' --help|grep vers|cut -c-25';
    $cmd_mplayer = $config['path_mplayer'].' |grep MPlayer|cut -c-24';
    $cmd_mencoder = $config['path_mencoder'].' |grep MEncoder|cut -c-25';
    $cmd_flvtool = $config['path_flvtool2'].' grep FLVT |cut -c-15';
    $cmd_ffmpeg = $config['path_ffmpeg'].' -version';
    $cmd_jpeg = 'ldd '.$config['path_mencoder'].' |grep libjpeg';
    $cmd_lamespt = 'ldd '.$config['path_mencoder'].' |grep lame';
    $cmd_theora = 'ldd '.$config['path_mencoder'].' |grep theora';
    $cmd_faac = 'ldd '.$config['path_mencoder'].' |grep faac';
    $cmd_xvid = 'ldd '.$config['path_mencoder'].' |grep xvid';
    $cmd_x264 = 'ldd '.$config['path_mencoder'].' |grep x264';
    
    exec($cmd_lame, $lame_ver); if ($lame_ver[0] != '') $lame_version = $lame_ver[0]; else $lame_version = '<span class="red">not found</span>';
    exec($cmd_mplayer, $mplayer_ver); if ($mplayer_ver[0] != '') $mplayer_version = $mplayer_ver[0]; else $mplayer_version = '<span class="red">not found</span>';
    exec($cmd_mencoder, $mencoder_ver); $mencoder_ver[0]; if ($mencoder_ver[0] != '') $mencoder_version = $mencoder_ver[0]; else $mencoder_version = '<span class="red">not found</span>';
    exec($cmd_flvtool, $flvtool_ver); if ($flvtool_ver[0] != '') $flvtool_version = $flvtool_ver[0]; else $flvtool_version = '<span class="red">not found</span>';
    exec($cmd_ffmpeg.' 2>&1', $enc_output);
    $ffmpeg_ver = implode("<br>", $enc_output);
    exec($cmd_jpeg, $jpeg_spt); if ($jpeg_spt[0] != '') $jpeg_support = $jpeg_spt[0]; else $jpeg_support = '<span class="red">not found</span>';
    exec($cmd_lamespt, $lame_spt); if ($lame_spt[0] != '') $lame_support = $lame_spt[0]; else $lame_support = '<span class="red">not found</span>';
    exec($cmd_theora, $theora_spt); if ($theora_spt[0] != '') $theora_support = $theora_spt[0]; else $theora_support = '<span class="red">not found</span>';
    exec($cmd_faac, $faac_spt); if ($faac_spt[0] != '') $faac_support = $faac_spt[0]; else $faac_support = '<span class="red">not found</span>';
    exec($cmd_xvid, $xvid_spt); if ($xvid_spt[0] != '') $xvid_support = $xvid_spt[0]; else $xvid_support = '<span class="red">not found</span>';
    exec($cmd_x264, $x264_spt); if ($x264_spt[0] != '') $x264_support = $x264_spt[0]; else $x264_support = '<span class="red">not found</span>';
    
    $extension = "ffmpeg";
    $extension_soname = $extension . "." . PHP_SHLIB_SUFFIX;
    $extension_fullname = PHP_EXTENSION_DIR . "/" . $extension_soname;
    if (!extension_loaded($extension)) { $ffmpeg_php = '<span class="red">not loaded or not installed</span>'; } else $ffmpeg_php = 'ffmpeg-php '.FFMPEG_PHP_VERSION_STRING;

    $html2 = "<fieldset><legend><a href=\"javascript: void(0)\" onclick=\"ReverseContentDisplay('encdiv'); ReverseContentDisplay('encdivtxt'); changeclass_act('d2');\"><span id=\"d2\" class=\"\">Encoder Information</span></a></legend>";
    $html2.= "<div id=\"encdivtxt\" style=\"display: block;\">View auto-detected encoder information</div>";
    $html2.= "<div id=\"encdiv\" style=\"display: none;\">";
    $html2.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td class=\"gr1\">Lame Version: </td><td><span class=\"act\">".$lame_version."</span></td></tr></table></div>";
    $html2.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td class=\"gr1\">MPlayer Version: </td><td><span class=\"act\">".$mplayer_version."</span></td></tr></table></div>";
    $html2.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td class=\"gr1\">MEncoder Version: </td><td><span class=\"act\">".$mencoder_version."</span></td></tr></table></div>";
    $html2.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td class=\"gr1\">FLVTool2 Version: </td><td><span class=\"act\">".$flvtool_version."</span></td></tr></table></div>";
    $html2.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0><tr><td class=\"gr1\">ffmpeg-php Version: </td><td><span class=\"act\">".$ffmpeg_php."</span></td></tr></table></div>";
    $html2.= "<div class=\"nopad\">&nbsp;</div>";
    $html2.= "<div class=\"dottbt\"></div>";
    $html2.= "<div class=\"p10\"><table cellpadding=0 cellspacing=0 border=0><tr><td width=\"100\"><a href=\"javascript:void(0)\" onclick=\"ShowContent('mpinfo'); HideContent('ffinfo'); changeclass_act('mpi');\"><span id=\"mpi\" class=\"act\">MEncoder Info: </span></a></td><td width=\"200\" align=\"left\"><a href=\"javascript:void(0)\" onclick=\"ShowContent('ffinfo'); HideContent('mpinfo'); changeclass_act('ffi');\"><span id=\"ffi\" class=\"\">FFmpeg Info: </span></a></td></tr></table></div>";
    $html2.= "<div id=\"mpinfo\" style=\"display: block;\">";
    $html2.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"50\">JPEG: </td><td><span class=\"act\">".$jpeg_support."</span></td></tr></table></div>";
    $html2.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"50\">LAME: </td><td><span class=\"act\">".$lame_support."</span></td></tr></table></div>";
    $html2.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"50\">Theora: </td><td><span class=\"act\">".$theora_support."</span></td></tr></table></div>";
    $html2.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"50\">FAAC: </td><td><span class=\"act\">".$faac_support."</span></td></tr></table></div>";
    $html2.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"50\">Xvid: </td><td><span class=\"act\">".$xvid_support."</span></td></tr></table></div>";
    $html2.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"50\">x264: </td><td><span class=\"act\">".$x264_support."</span></td></tr></table></div>";
    $html2.= "</div>";
    $html2.= "<div id=\"ffinfo\" style=\"display: none;\">";
    $html2.= $ffmpeg_ver;
    $html2.= "</div>";
    $html2.= "</div>";
    $html2.= "</fieldset><br>";
    
    $max_execution_time = ini_get('max_execution_time');
    $max_input_time = ini_get('max_input_time');
    $memory_limit = ini_get('memory_limit');
    $post_max_size = ini_get('post_max_size');
    $upload_max_filesize = ini_get('upload_max_filesize');
    $session_gc_maxlifetime = ini_get('session.gc_maxlifetime');
    $output_buffering = ini_get('output_buffering'); if ($output_buffering == '1') $output_buffering = 'on'; else $output_buffering = 'off';
    $short_open_tag = ini_get('short_open_tag'); if ($short_open_tag == '1') $short_open_tag = 'on'; else $short_open_tag = 'off';
    $safe_mode = ini_get('safe_mode'); if ($safe_mode == '1') $safe_mode = '<span class="red">on</span>'; else $safe_mode = 'off';
    $open_basedir = ini_get('open_basedir'); if ($open_basedir == '' or $open_basedir == '0') $open_basedir = 'off';
    $disable_functions = ini_get('disable_functions'); if ($disable_functions == '' or $disable_functions == '0') $disable_functions = 'off';
    $disable_classes = ini_get('disable_classes'); if ($disable_classes == '' or $disable_classes == '0') $disable_classes = 'off';
    $register_globals = ini_get('register_globals'); if ($register_globals == '1') $register_globals = 'on'; else $register_globals = 'off';
    $register_argc_argv = ini_get('register_argc_argv'); if ($register_argc_argv == '1') $register_argc_argv = 'on'; else $register_argc_argv = 'off';
    $magic_quotes_gpc = ini_get('magic_quotes_gpc'); if ($magic_quotes_gpc == '1') $magic_quotes_gpc = 'on'; else $magic_quotes_gpc = 'off';
    $file_uploads = ini_get('file_uploads'); if ($file_uploads == '1') $file_uploads = 'on'; else $file_uploads = '<span class="red">off</span>';
    $allow_url_fopen = ini_get('allow_url_fopen'); if ($allow_url_fopen == '1') $allow_url_fopen = 'on'; else $allow_url_fopen = 'off';
//    $ = ini_get('');

    $html3 = "<fieldset><legend><a href=\"javascript: void(0)\" onclick=\"ReverseContentDisplay('phpdiv'); ReverseContentDisplay('phpdivtxt'); changeclass_act('d3');\"><span id=\"d3\" class=\"\">PHP Information</span></a></legend>";
    $html3.= "<div id=\"phpdivtxt\" style=\"display: block;\">View auto-detected PHP environment information</div>";
    $html3.= "<div id=\"phpdiv\" style=\"display: none;\">";
    $html3.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"150\">PHP version:&nbsp;</td><td><span class=\"act\">".phpversion()."</span></td></tr></table></div>";
    $html3.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"150\">short_open_tag:&nbsp;</td><td><span class=\"act\">".$short_open_tag."</span></td></tr></table></div>";
    $html3.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"150\">output_buffering:&nbsp;</td><td><span class=\"act\">".$output_buffering."</span></td></tr></table></div>";
    $html3.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"150\">safe_mode:&nbsp;</td><td><span class=\"act\">".$safe_mode."</span></td></tr></table></div>";
    $html3.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"150\">open_basedir:&nbsp;</td><td><span class=\"act\">".$open_basedir."</span></td></tr></table></div>";
    $html3.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"150\">disable_functions:&nbsp;</td><td><span class=\"act\">".$disable_functions."</span></td></tr></table></div>";
    $html3.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"150\">disable_classes:&nbsp;</td><td><span class=\"act\">".$disable_classes."</span></td></tr></table></div>";
    $html3.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"150\">max_execution_time:&nbsp;</td><td><span class=\"act\">".$max_execution_time."</span></td></tr></table></div>";
    $html3.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"150\">max_input_time:&nbsp;</td><td><span class=\"act\">".$max_input_time."</span></td></tr></table></div>";
    $html3.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"150\">memory_limit:&nbsp;</td><td><span class=\"act\">".$memory_limit."</span></td></tr></table></div>";
    $html3.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"150\">register_globals:&nbsp;</td><td><span class=\"act\">".$register_globals."</span></td></tr></table></div>";
    $html3.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"150\">register_argc_argv:&nbsp;</td><td><span class=\"act\">".$register_argc_argv."</span></td></tr></table></div>";
    $html3.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"150\">post_max_size:&nbsp;</td><td><span class=\"act\">".$post_max_size."</span></td></tr></table></div>";
    $html3.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"150\">magic_quotes_gpc:&nbsp;</td><td><span class=\"act\">".$magic_quotes_gpc."</span></td></tr></table></div>";
    $html3.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"150\">file_uploads:&nbsp;</td><td><span class=\"act\">".$file_uploads."</span></td></tr></table></div>";
    $html3.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"150\">upload_max_filesize:&nbsp;</td><td><span class=\"act\">".$upload_max_filesize."</span></td></tr></table></div>";
    $html3.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"150\">allow_url_fopen:&nbsp;</td><td><span class=\"act\">".$allow_url_fopen."</span></td></tr></table></div>";
    $html3.= "<div class=\"p2\"><table cellpadding=0 cellspacing=0 border=0 width=\"100%\"><tr><td width=\"150\">session.gc_maxlifetime:&nbsp;</td><td><span class=\"act\">".$session_gc_maxlifetime."</span></td></tr></table></div>";
    $html3.= "</div>";
    $html3.= "</fieldset><br>";
    
    echo $html2.$html3.$html;
    exit;
}
?>