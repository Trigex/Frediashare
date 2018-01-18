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
check_login();

$vid=filter_descr($_REQUEST['thvid']);
$file1=filter_descr($_REQUEST['thfil1']);
$file2=filter_descr($_REQUEST['thfil2']);
$file3=filter_descr($_REQUEST['thfil3']);
$_REQUEST['f'] = filter_descr( $_REQUEST['f'] );
$rnd=substr(md5($vid),13,7);

/*
if ( php_sapi_name() == 'cgi' and $config['thumb_method'] == 'ffmpeg-php' ) 
{
    $err = 'Error: Cannot grab thumbnails from video while Server API is CGI. Please upload from file!';
    echo show_err ( $err );
    exit;
}
*/
$fl=$conn->execute("select vflvname, vduration from files_video where vid='$_REQUEST[vid]'");
$fs=$fl->fields[vflvname];
$vd=$fl->fields[vduration];
$movie_src=$config[flvdo_dir]."/user".$_SESSION[UID]."/".$fs;
$video=$movie_src;

if (filter_title($_REQUEST['f'])=="1")
{
    $vid=filter_title($_REQUEST[vid]);
    $rnd=substr(md5($vid),13,7);
    if(file_exists($ff)) { @unlink($ff); }
    if(!file_exists($video)) { $err=$lang['err_changeth4']; echo show_err ( $err ); exit; }

if ( $config['thumb_method'] == 'ffmpeg-php' ) {
    $mov = new ffmpeg_movie($video);
    $frcount=$mov->getFrameCount()-1;
    $b1=round($frcount/3);
    $b2=$frcount-1;
    $p = rand(1,$b1);
    $ff_frame= $mov->getFrame($p);

    if($ff_frame==true)
    {
	$gd_image = $ff_frame->toGDImage();
	$ff=$config[tmpimgpath]."/1_".$vid.$rnd.".jpg";
	imagejpeg($gd_image, $ff);
	$ff1=$config[tmpimgurl]."/1_".$vid.$rnd.".jpg"; 
	$ff3=$ff1."?stopcache=".date('ymdgisa', strtotime('-2 seconds'))."";
    } else { echo $lang['err_changeth5']; exit; }
} elseif ( $config['thumb_method'] == 'ffmpeg' ) { 
    $mdur = rand(1, floor(($vd/2)));
    $cmd = $config['path_ffmpeg'].' -i '.$video.' -s '.$config['img_max_width'].'x'.$config['img_max_height'].' -ss '.$mdur.' -an -r 1 -vframes 1 -y '.$config['tmpimgpath'].'/%d_'.$vid.$rnd.'.jpg';
    exec($cmd.' 2>&1');
    $ff1=$config[tmpimgurl]."/1_".$vid.$rnd.".jpg";
    $ff3=$ff1."?stopcache=".date('ymdgisa', strtotime('-2 seconds'));
} else {
    $mdur = rand(1, floor(($vd/3)));
    $cmd = $config[path_mplayer]." $video -sstep $mdur -nosound -vo jpeg:quality=100:outdir=".$config[tmpimgpath]."/".$vid.$rnd." -frames 1";
    exec($cmd.' 2>&1');
    $ff1 = $config[tmpimgpath]."/".$vid.$rnd."/00000001.jpg";
    if(file_exists($ff1)) { rename ( $ff1, $config['tmpimgpath'].'/1_'.$vid.$rnd.'.jpg' ); }
    $ff1=$config[tmpimgurl]."/1_".$vid.$rnd.".jpg";
    $ff3=$ff1."?stopcache=".date('ymdgisa', strtotime('-2 seconds'));
}    
    echo "<img src=\"$ff3\" width=\"$config[img_max_width]\" height=\"$config[img_max_height]>\" class=\"thumb\">";
}
if (filter_title($_REQUEST['f'])=="2")
{
    $vid=filter_title($_REQUEST[vid]);
    $rnd=substr(md5($vid),13,7);
    if(file_exists($ff)) { @unlink($ff); }
    if(!file_exists($video)) { $err=$lang['err_changeth4']; echo show_err ( $err ); exit; } 

if ( $config['thumb_method'] == 'ffmpeg-php' ) {
    $mov = new ffmpeg_movie($video);
    $frcount=$mov->getFrameCount()-1;
    $b1=round($frcount/3);
    $bx=$b1+$b1;
    $b2=$frcount-$b1;
    $p = rand($b1,$bx);
    $ff_frame= $mov->getFrame($p);
    
    if($ff_frame==true)
    {
	$gd_image = $ff_frame->toGDImage();
	$ff=$config[tmpimgpath]."/2_".$vid.$rnd.".jpg";
	imagejpeg($gd_image, $ff);
	$ff1=$config[tmpimgurl]."/2_".$vid.$rnd.".jpg"; 
	$ff3=$ff1."?stopcache=".date('ymdgisa', strtotime('-2 seconds'))."";
    } else { echo $lang['err_changeth5']; exit; }
} elseif ( $config['thumb_method'] == 'ffmpeg' ) {
    $mdur = rand(1, floor(($vd/2)));
    $cmd = $config['path_ffmpeg'].' -i '.$video.' -s '.$config['img_max_width'].'x'.$config['img_max_height'].' -ss '.$mdur.' -an -r 1 -vframes 1 -y '.$config['tmpimgpath'].'/%d_'.$vid.$rnd.'.jpg';
    exec($cmd.' 2>&1');
    if ( file_exists ( $config['tmpimgpath'].'/1_'.$vid.$rnd.'.jpg' ) ) { rename ( $config['tmpimgpath'].'/1_'.$vid.$rnd.'.jpg', $config['tmpimgpath'].'/2_'.$vid.$rnd.'.jpg' ); }
    $ff1=$config[tmpimgurl]."/2_".$vid.$rnd.".jpg";
    $ff3=$ff1."?stopcache=".date('ymdgisa', strtotime('-2 seconds'));
} else {
    $mdur = rand(1, floor(($vd/3)));
    $cmd = $config[path_mplayer]." $video -sstep $mdur -nosound -vo jpeg:quality=100:outdir=".$config[tmpimgpath]."/".$vid.$rnd." -frames ".$config['thumb_nr'];
    exec($cmd.' 2>&1');
    $ff1 = $config[tmpimgpath]."/".$vid.$rnd."/00000001.jpg";
    if(file_exists($ff1)) { rename ( $ff1, $config['tmpimgpath'].'/2_'.$vid.$rnd.'.jpg' ); }
    $ff1=$config[tmpimgurl]."/2_".$vid.$rnd.".jpg";
    $ff3=$ff1."?stopcache=".date('ymdgisa', strtotime('-2 seconds'));
}
    echo "<img src=\"$ff3\" width=\"$config[img_max_width]\" height=\"$config[img_max_height]>\" class=\"thumb\">";
}
if (filter_title($_REQUEST['f'])=="3")
{
    $vid=filter_title($_REQUEST[vid]);
    $rnd=substr(md5($vid),13,7);
    if(file_exists($ff)) { @unlink($ff); }
    if(!file_exists($video)) { $err=$lang['err_changeth4']; echo show_err ( $err ); exit; } 

if ( $config['thumb_method'] == 'ffmpeg-php' ) {
    $mov = new ffmpeg_movie($video);
    $frcount=$mov->getFrameCount()-1;
    $b1=round($frcount/3);
    $bx=$b1;
    $b2=$frcount;
    $p = rand($bx,$b2);
    $ff_frame= $mov->getFrame($p);

    if($ff_frame==true)
    {
	$gd_image = $ff_frame->toGDImage();
	$ff=$config[tmpimgpath]."/3_".$vid.$rnd.".jpg";
	imagejpeg($gd_image, $ff);
	$ff1=$config[tmpimgurl]."/3_".$vid.$rnd.".jpg"; 
	$ff3=$ff1."?stopcache=".date('ymdgisa', strtotime('-2 seconds'))."";
    } else { echo $lang['err_changeth5']; exit; }
} elseif ( $config['thumb_method'] == 'ffmpeg' ) {
    $mdur = rand(1, floor(($vd/2)));
    $cmd = $config['path_ffmpeg'].' -i '.$video.' -s '.$config['img_max_width'].'x'.$config['img_max_height'].' -ss '.$mdur.' -an -r 1 -vframes 1 -y '.$config['tmpimgpath'].'/%d_'.$vid.$rnd.'.jpg';
    exec($cmd.' 2>&1');
    if ( file_exists ( $config['tmpimgpath'].'/1_'.$vid.$rnd.'.jpg' ) ) { rename ( $config['tmpimgpath'].'/1_'.$vid.$rnd.'.jpg', $config['tmpimgpath'].'/3_'.$vid.$rnd.'.jpg' ); }
    $ff1=$config[tmpimgurl]."/3_".$vid.$rnd.".jpg";
    $ff3=$ff1."?stopcache=".date('ymdgisa', strtotime('-2 seconds'));
} else {
    $mdur = rand(1, floor(($vd/3)));
    $cmd = $config[path_mplayer]." $video -sstep $mdur -nosound -vo jpeg:quality=100:outdir=".$config[tmpimgpath]."/".$vid.$rnd." -frames ".$config['thumb_nr'];
    exec($cmd.' 2>&1');
    $ff1 = $config[tmpimgpath]."/".$vid.$rnd."/00000001.jpg";
    if(file_exists($ff1)) { rename ( $ff1, $config['tmpimgpath'].'/3_'.$vid.$rnd.'.jpg' ); }
    $ff1=$config[tmpimgurl]."/3_".$vid.$rnd.".jpg";
    $ff3=$ff1."?stopcache=".date('ymdgisa', strtotime('-2 seconds'));
}    
    echo "<img src=\"$ff3\" width=\"$config[img_max_width]\" height=\"$config[img_max_height]>\" class=\"thumb\">";
}
if (filter_title($_REQUEST['f'])=="grabth")
{

    $ff1=$config[tmpimgpath]."/1_".$vid.$rnd.".jpg";
    $ff2=$config[tmpimgpath]."/2_".$vid.$rnd.".jpg";
    $ff3=$config[tmpimgpath]."/3_".$vid.$rnd.".jpg";
    
    if(file_exists($ff1))
    { 
	$fc="1";
	$fd=$config[tmb_dir]."/user".$_SESSION[UID]."/".$fc."_".$vid.$rnd.".jpg";
	if(file_exists($fd)) @unlink($fd);
	thumbs($ff1,$fd,$config[img_max_width],$config[img_max_height]);
	if(file_exists($fd)) { @chmod($ff1, 0666); @unlink($ff1); if(!file_exists($ff1)) { $not=$lang['not_changeth1']; } else { $err=$lang['err_changeth6']; } }
	else { $err=$lang['err_changeth7']; }
    } /* else { $err="Error: No temp thumb 1!"; } */
    
    if(file_exists($ff2))
    { 
	$fc="2";
	$fd=$config[tmb_dir]."/user".$_SESSION[UID]."/".$fc."_".$vid.$rnd.".jpg";
	if(file_exists($fd)) @unlink($fd);
	thumbs($ff2,$fd,$config[img_max_width],$config[img_max_height]);
	if(file_exists($fd)) { @chmod($ff2, 0666); @unlink($ff2); if(!file_exists($ff2)) { $not=$lang['not_changeth1']; } else { $err=$lang['err_changeth6']; } }
	else { $err=$lang['err_changeth7']; }
    } //else { $err="Error: No temp thumb 2!"; } */
    
    if(file_exists($ff3))
    { 
	$fc="3";
	$fd=$config[tmb_dir]."/user".$_SESSION[UID]."/".$fc."_".$vid.$rnd.".jpg";
	if(file_exists($fd)) @unlink($fd);
	thumbs($ff3,$fd,$config[img_max_width],$config[img_max_height]);
	if(file_exists($fd)) { @chmod($ff3, 0666); @unlink($ff3); if(!file_exists($ff3)) { $not=$lang['not_changeth1']; } else { $err=$lang['err_changeth6']; } }
	else { $err=$lang['err_changeth7']; }
    } // else { $err="Error: No temp thumb 3!"; echo $ff3; } 
    
    if($err=="" and $not!='')
    {
	echo show_msg ( $not ); exit;
    } elseif ( $err!='') { echo show_err ( $err ); exit; }
}
if ( $err != '' )
{
    $err=$lang[err_illegalop];
    echo show_err ( $err ); exit; 
}
?>