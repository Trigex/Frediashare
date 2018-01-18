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
$rname   = $_SERVER['argv'][3]; 

$ext = explode(".", $vname);
$ext = array_pop($ext);
$flv = str_replace($ext,"mp3",$vname);

$sql="select uid from files_audio where vid='$id'";
$mrs=$conn->execute($sql);
$muid=$mrs->fields[uid];
$mrs->Close();

$sql1="select * from members where uid='$muid'";
$mrs1=$conn->execute($sql1);
$mdir=$mrs1->fields['folder'];
$sender=$mrs1->fields['username'];
$mrs1->Close();

$mvdo_dir=$config['ado_dir']."/".$mdir;
$mflvdo_dir=$config['flvdo_dir']."/".$mdir;

if(($vname!="")&&($id!="")&&($rname!=""))
{
    $ex = explode(".", $vname);
    $ex = array_pop($ex);

    if($ex=="wma" || $ex=="vqf" || $ex=="ogg" || $ex=="mp4" || $ex=="flac" || $ex=="m4a" || $ex=="rm")
    {
	$ext=str_replace($ext,"wav",$vname);
	$rname1=$mvdo_dir."/".$ext;
	$cwma="$config[path_mplayer] $rname -ao pcm:file=$rname1";
	$rname=$rname1;
	if (exec("$cwma"))
	{
	    @chmod($rname, 0777);
	}
    }
    if ($config[option_h]=="1") $h="-h";
    if ($config[option_p]=="1") $p="-p";
    
    $conv="$config[path_lame] -b $config[option_b] -s $config[option_s] $h $p -T $rname $mflvdo_dir/$flv";
    
    if(exec($conv.' 2>&1', $enc_output))
    {
	if ($config['audio_logs'] == 1) log_files($config['logs_dir']. '/audio_' .$id. '.log', implode("\n", $enc_output));
	exec("$config[path_mplayer] -vo null -ao null -frames 0 -identify $mflvdo_dir/$flv", $p);
	while(list($k,$v)=each($p))
        {
            if($length=strstr($v,'ID_LENGTH='))
            break;
        }
        $lx = explode("=",$length);
        $duration = $lx[1];
        
	$sql="update files_audio set vduration='$duration' where vid='$id'";
	$rr=$conn->execute($sql);
	$rr->Close();
	
	gen_thumba($rname,$id);
	
	if ($ex=="ogg" || $ex=="wma" || $ex=="vqf" || $ex=="mp4" || $ex=="flac" || $ex=="m4a" || $ex=="rm")
	{
	    @unlink($rname);
	}
	
	if($config[delete_original_audio]=="1") 
	{ 
	    $ex = explode(".", $vname);
	    $ex = array_pop($ex);
	    if(file_exists("$mvdo_dir/$flv"))
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
    	    $file='audio';
    	    send_notification($fm, $receiver, $sender, $mtype, $id, $file);
	}
    }
}
?>