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
$_SESSION['landed'] = '1';
include('configs/config.php');

$vname = $_SERVER['argv'][1]; 
$id    = $_SERVER['argv'][2]; 
$fname = $_SERVER['argv'][3]; 

if (preg_match("/[^a-zA-Z0-9 φόδΦάΔ!?\_\-\.]/", $vname)) { illegal_op(); }
if (preg_match("/[^a-zA-Z0-9 φόδΦάΔ!?\_\-\.]/", $id)) { illegal_op(); }
//if (preg_match("/[^a-zA-Z0-9/ φόδΦάΔ!?\_\-\.]/", $fname)) { illegal_op(); }

$sql="select uid from files_video where vid='$id'";
$mrs=$conn->execute($sql);
$muid=$mrs->fields[uid];

$ext = explode(".", $vname);  
$ext = array_pop($ext);
$flv = str_replace($ext,"flv",$vname);

$sql1="select * from members where uid='$muid'";
$mrs1=$conn->execute($sql1);
$mdir=$mrs1->fields['folder'];
$sender=$mrs1->fields['username'];
$mvdo_dir=$config['vdo_dir'].'/'.$mdir;
$mflvdo_dir=$config['flvdo_dir'].'/'.$mdir;

$out=$mflvdo_dir.'/'.$flv;

if ( ($vname!='') && ($id!='') && ($fname!='') )
{
    $menstr = 'MEncoder 1.0rc1';
    $cmd_mencoder = $config['path_mencoder'].' |grep rc |cut -c-15';
    exec($cmd_mencoder, $mencoder_ver);
    if ($mencoder_ver['0'] != '' and $mencoder_ver['0'] == $menstr) { $lavfopts = '-lavfopts i_certify_that_my_video_stream_does_not_use_b_frames'; $vop = ' -vop'; } else { $lavfopts = '-ofps 16'; $vop = ' -vf'; }
    if ($config['resize'] == '1') { 
	if ( $config['conv_tool'] == 'ffmpeg' ) { $vres = ' -s '.$config['resize_x'].'x'.$config['resize_y']; }
	else { $vres = $vop.' scale='.$config['resize_x'].':'.$config['resize_y']; } 
    } else { $vres = ''; }
    if ( $ext == 'wmv' ) { $fps = ' -ofps 25000/1001'; } else { $fps = ''; }
    if ( $ext == 'asf' or $ext == 'mov' ) { $fps = ' -ofps 30000/1001'; } else { $fps = ''; }

    if ( $config['conv_tool'] == 'ffmpeg' ) $conv = $config['path_ffmpeg'].' -i '.$fname.$vres.' -ab '.$config['abrate'].'k -ar '.$config['sbrate'].' -ac 1 -vcodec flv -b '.$config['vbrate'].'k -y '.$mflvdo_dir.'/'.$flv;
    else $conv = $config['path_mencoder'].' '.$fname.' -o '.$mflvdo_dir.'/'.$flv.' -of lavf -oac mp3lame -lameopts abr:br='.$config['abrate'].' -ovc lavc -lavcopts vcodec=flv:vbitrate='.$config['vbrate'].':mbd=2:mv0:trell:v4mv:keyint=10:cbp:last_pred=3 '.$lavfopts.$vres.' -srate '.$config['sbrate'].$fps;
    
    if($ext != 'flv' and exec($conv.' 2>&1', $enc_output))
    {
	if ($config['video_logs'] == 1) log_files($config['logs_dir']. '/video_' .$id. '.log', implode("\n", $enc_output));
	
	exec($config['path_flvtool2'].' -Uv '.$mflvdo_dir.'/'.$flv.' '.$mflvdo_dir.'/'.$flv);
	
	if ( $config['thumb_module'] == '0' ) $config['thumb_nr'] = '3';
	
	if ( $config['thumb_method'] == 'ffmpeg' ) gen_thumb_ffmpeg($fname, $id, $config['thumb_nr']);
	elseif ( $config['thumb_method'] == 'ffmpeg-php' ) gen_thumb_alt($fname, $id, $config['thumb_nr']);
	elseif ( $config['thumb_method'] == 'mplayer' ) gen_thumb($fname, $id, $config['thumb_nr']);
	
	if($config['delete_original_video']=='1')
	{ 
	    $del_upvid = $mvdo_dir.'/'.$vname; 
    	    @chmod($del_upvid, 0777); @unlink($del_upvid); 
	} 
    }
    elseif ($ext == 'flv')
    {
	exec($config['path_flvtool2'].' -Uv '.$fname.' '.$mflvdo_dir.'/'.$flv);
	
	if ( $config['thumb_module'] == '0' ) $config['thumb_nr'] = '3';
	
	if ( $config['thumb_method'] == 'ffmpeg' ) gen_thumb_ffmpeg($fname, $id, $config['thumb_nr']);
	elseif ( $config['thumb_method'] == 'ffmpeg-php' ) gen_thumb_alt($fname, $id, $config['thumb_nr']);
	elseif ( $config['thumb_method'] == 'mplayer' ) gen_thumb($fname, $id, $config['thumb_nr']);
	
	if($config['delete_original_video']=='1')
	{ 
	    $del_upvid = $mvdo_dir."/".$vname; 
    	    @chmod($del_upvid, 0777); @unlink($del_upvid); 
	} 
    }

    $fm = $config['admin_email'];
    $receiver = $config['admin_name'];
    if ($fm!='' and check_email_address($fm) and $config['mail_not5'] == '1' and $err == '')
    {
        $mtype='mail_not5';
        $file='video';
        send_notification($fm, $receiver, $sender, $mtype, $id, $file);
    }
}
?>