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
if (isset($_REQUEST['save_sys'])) $_REQUEST['save_sys']=filter_title($_REQUEST['save_sys']);
// get php values
$smarty->assign('post_max_size', ini_get('post_max_size'));
$smarty->assign('upload_max_filesize', ini_get('upload_max_filesize'));
//get dir sizes: cache dir
$cache_dir_size = getDirectorySize($config['cache_dir'].'/templates_c');
$smarty->assign('cache_dir_size', sizeFormat($cache_dir_size['size']));
$smarty->assign('cache_dir_files', $cache_dir_size['count']);
$smarty->assign('cache_dir_folder', $cache_dir_size['dircount']);
//get dir sizes: temp dir
$temp_dir_size = getDirectorySize($config['tmpimgpath']);
$smarty->assign('temp_dir_size', sizeFormat($temp_dir_size['size']));
$smarty->assign('temp_dir_files', $temp_dir_size['count']);
$smarty->assign('temp_dir_folder', $temp_dir_size['dircount']);
//get dir sizes: upload dir
$up_dir_size = getDirectorySize($config['dir_upload']);
$smarty->assign('up_dir_size', sizeFormat($up_dir_size['size']));
$smarty->assign('up_dir_files', $up_dir_size['count']);
$smarty->assign('up_dir_folder', $up_dir_size['dircount']);
//get dir sizes: log dir
$log_dir_size = getDirectorySize($config['logs_dir']);
$smarty->assign('log_dir_size', sizeFormat($log_dir_size['size']));
$smarty->assign('log_dir_files', $log_dir_size['count']);
$smarty->assign('log_dir_folder', $log_dir_size['dircount']);

//system settings
if ($_REQUEST[type]=="system")
{
    if ($_REQUEST[save_sys]!="")
    {
    //thumbnail settings
	$avatarw=mysql_real_escape_string($_REQUEST[avatarw]);
	$avatarh=mysql_real_escape_string($_REQUEST[avatarh]);
	$categw=mysql_real_escape_string($_REQUEST[categw]); 
	$categh=mysql_real_escape_string($_REQUEST[categh]); 
	$thumbw=mysql_real_escape_string($_REQUEST[thumbw]);
	$thumbh=mysql_real_escape_string($_REQUEST[thumbh]);
	$thumbdef=mysql_real_escape_string($_REQUEST[thumbdef]);
	$audioth=mysql_real_escape_string($_REQUEST[setaudioth]);
	$videoth=mysql_real_escape_string($_REQUEST[setvideoth]);
	$thumbgrab=mysql_real_escape_string($_REQUEST[thumbgrab]);
	$consth=mysql_real_escape_string($_REQUEST[c1]);
	$rndth=mysql_real_escape_string($_REQUEST[c2]);
	$thumbg=substr(mysql_real_escape_string($_REQUEST[thbg_col]),1);
	
//	echo $consth; exit;
	
	$thumbnr=mysql_real_escape_string($_REQUEST[mthumbnr]);
	$thumbms=mysql_real_escape_string($_REQUEST[mthumbms]);
	if (isset($_REQUEST['mthumb'])) $adm_thumb=mysql_real_escape_string($_REQUEST['mthumb']);
	
	if ($audioth == 'on') $audioth = '1'; else $audioth = '0';
	if ($videoth == 'on') $videoth = '1'; else $videoth = '0';
	
	if (!is_numeric($avatarw) || !is_numeric($avatarh)) $err=$lang['admerr_sys16'];
	elseif (!is_numeric($categw) || !is_numeric($categh)) $err=$lang['admerr_sys17'];
	elseif (!is_numeric($thumbw) || !is_numeric($thumbh)) $err=$lang['admerr_sys18'];
	elseif (!is_numeric($thumbnr) || !is_numeric($thumbms) or $thumbnr < 3) $err=$lang['adm_ffm11'];
	elseif ( $consth == '' and $rndth == '' ) $err = $lang['adm_ffm15'];
	
	if ( $thumbnr < $config['thumb_nr'] and $err == '' ) {
	    $diff = $config['thumb_nr'] - $thumbnr;
	    
	    $sql = "select folder from members where is_active='1';";
	    $result = mysql_query($sql);
	    
	    while($row = mysql_fetch_assoc($result)) {
	        $folder[] = $row['folder'];
	    }
	    
	    foreach ( $folder as $fol ) {
		for ( $i = $thumbnr+1; $i <= $config['thumb_nr']; $i++ ) {
		    $cmd = 'rm -rf '.$config['tmb_dir'].'/'.$fol.'/'.$i.'_*';
		    $cmd2= 'rm -rf '.$config['tmb_dir'].'/'.$fol.'/pl'.$i.'_*';
		    exec ( $cmd ); 
		    exec ( $cmd2 ); 
		}
	    }
	}
	
	if ($err=="")
	{
	    if($avatarw!=$config[avatar_width] || $avatarh!=$config[avatar_height])
	    {
		$sq1="update configurations set value='$avatarw' where configurations.option='avatar_width'"; $conn->execute($sq1);
		$sq2="update configurations set value='$avatarh' where configurations.option='avatar_height'"; $conn->execute($sq2);
	    }
	    if($categw!=$config[categwidth] || $categh!=$config[categheight])
	    {
		$sq1="update configurations set value='$categw' where configurations.option='categwidth'"; $conn->execute($sq1);
		$sq2="update configurations set value='$categh' where configurations.option='categheight'"; $conn->execute($sq2);
	    }
	    if($thumbw!=$config[img_max_width] || $thumbh!=$config[img_max_height])
	    {
		$sq1="update configurations set value='$thumbw' where configurations.option='img_max_width'"; $conn->execute($sq1);
		$sq2="update configurations set value='$thumbh' where configurations.option='img_max_height'"; $conn->execute($sq2);
	    }
	    if ( $consth != '' ) $thorder = $consth; elseif ( $rndth != '' ) $thorder = $rndth;
	    
	    $conn->execute("update configurations set value='$thumbdef' where configurations.option='def_thumb'");
	    $conn->execute("update configurations set value='$audioth' where configurations.option='allow_audio_thumbs'");
	    $conn->execute("update configurations set value='$videoth' where configurations.option='allow_video_thumbs'");
	    $conn->execute("update configurations set value='$thumbgrab' where configurations.option='thumb_method'");
	    if ($adm_thumb != $config['thumb_module']) { $conn->execute("update configurations set value='$adm_thumb' where configurations.option='thumb_module'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
	    if ($thumbnr != $config['thumb_nr']) { $conn->execute("update configurations set value='$thumbnr' where configurations.option='thumb_nr'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
	    if ($thumbg != $config['thumb_bg']) { $conn->execute("update configurations set value='$thumbg' where configurations.option='thumb_bg'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
	    if ($thumbms != $config['thumb_delay']) { $conn->execute("update configurations set value='$thumbms' where configurations.option='thumb_delay'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
	    if ($thorder != $config['thumb_order']) { $conn->execute("update configurations set value='$thorder' where configurations.option='thumb_order'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
	}
	//reload all the configurations
	$rsql = "SELECT * from configurations";
	$rsc = $conn->Execute($rsql);
	if($rsc)
	{
	    while(!$rsc->EOF)
	    {
		$field = $rsc->fields['option'];
		$config[$field] = $rsc->fields['value'];
		$smarty->assign($field, $config[$field]);
		@$rsc->MoveNext();
	    }
	}
	//end reload
	
	if($_FILES['audioav']['tmp_name']!="")
	{
	    $myfile="default";
	    $imagesize = getimagesize($_FILES['audioav']['tmp_name']);
	    if($imagesize[2] == 1) $myfile .= ".gif";
	    if($imagesize[2] == 2) $myfile .= ".jpg";
	    if($imagesize[2] == 3) $myfile .= ".png";
	    
	    if($myfile=="default.gif" || $myfile=="default.jpg" || $myfile=="default.png")
	    {
		$image=$_FILES[audioav][name];
		$dname=$config[usrimg_dir]."/default.gif";
		$dname1=$config[usrimg_dir]."/in_".$myfile;
		$rname=$config['usrimg_dir']."/".$myfile;
		$smarty->assign('dname',$dname);
		
		if (move_uploaded_file($_FILES['audioav']['tmp_name'], $dname1))
		{
		    if(file_exists($dname)) { @chmod($dname, 0777); @unlink($dname); }
		    thumbs($dname1, $dname, $config[avatar_width],$config[avatar_height]);
		    @unlink($dname1);
		    $msg=$lang['admnot_setavatar'];
		}
		
	    }
	    else { $err=$lang['admerr_sys19']; }
	}

	if($_FILES['audioth']['tmp_name']!="")
	{
	    $myfile="audio";
	    $imagesize = getimagesize($_FILES['audioth']['tmp_name']);
	    if($imagesize[2] == 1) $myfile .= ".gif";
	    if($imagesize[2] == 2) $myfile .= ".jpg";
	    if($imagesize[2] == 3) $myfile .= ".png";
	    
	    if($myfile=="audio.gif" || $myfile=="audio.jpg" || $myfile=="audio.png")
	    {
		$image=$_FILES[audioth][name];
		$dname=$config[img_dir]."/audio.gif";
		$dname1=$config[img_dir]."/in_".$myfile;
		$rname=$config['img_dir']."/".$myfile;
		$smarty->assign('dname',$dname);
		
		if (move_uploaded_file($_FILES['audioth']['tmp_name'], $dname1))
		{
		    if(file_exists($dname)) { @chmod($dname, 0777); @unlink($dname); }
		    thumbs($dname1, $dname, $config[img_max_width],$config[img_max_height]);
		    @unlink($dname1);
		    $msg=$lang['admnot_setthumb'];
		}
		
	    }
	    else { $err=$lang['admerr_sys19']; }
	}

	if($_FILES['aconvth']['tmp_name']!="")
	{
	    $myfile="convertinga";
	    $imagesize = getimagesize($_FILES['aconvth']['tmp_name']);
	    if($imagesize[2] == 1) $myfile .= ".gif";
	    if($imagesize[2] == 2) $myfile .= ".jpg";
	    if($imagesize[2] == 3) $myfile .= ".png";
	    
	    if($myfile=="convertinga.gif" || $myfile=="convertinga.jpg" || $myfile=="convertinga.png")
	    {
		$image=$_FILES[aconvth][name];
		$dname=$config[img_dir]."/convertinga.gif";
		$dname1=$config[img_dir]."/in_".$myfile;
		$rname=$config['img_dir']."/".$myfile;
		$smarty->assign('dname',$dname);
		
		if (move_uploaded_file($_FILES['aconvth']['tmp_name'], $dname1))
		{
		    if(file_exists($dname)) { @chmod($dname, 0777); @unlink($dname); }
		    thumbs($dname1, $dname, $config[img_max_width],$config[img_max_height]);
		    @unlink($dname1);
		    $msg=$lang['admnot_setthumb'];
		}
		
	    }
	    else { $err=$lang['admerr_sys19']; }
	}
	
	if($_FILES['vconvth']['tmp_name']!="")
	{
	    $myfile="converting";
	    $imagesize = getimagesize($_FILES['vconvth']['tmp_name']);
	    if($imagesize[2] == 1) $myfile .= ".gif";
	    if($imagesize[2] == 2) $myfile .= ".jpg";
	    if($imagesize[2] == 3) $myfile .= ".png";
	    
	    if($myfile=="converting.gif" || $myfile=="converting.jpg" || $myfile=="converting.png")
	    {
		$image=$_FILES[vconvth][name];
		$dname=$config[img_dir]."/converting.gif";
		$dname1=$config[img_dir]."/in_".$myfile;
		$rname=$config['img_dir']."/".$myfile;
		$smarty->assign('dname',$dname);
		
		if (move_uploaded_file($_FILES['vconvth']['tmp_name'], $dname1))
		{
		    if(file_exists($dname)) { @chmod($dname, 0777); @unlink($dname); }
		    thumbs($dname1, $dname, $config[img_max_width],$config[img_max_height]);
		    @unlink($dname1);
		    $msg=$lang['admnot_setthumb'];
		}
		
	    }
	    else { $err=$lang['admerr_sys19']; }
	}
	if (mysql_affected_rows()>0 && $err=="") $msg=$lang['admnot_setgensave'];
    }
    //end thumbnail settings
    
    set_btn("adm_set"); set_sbtn("sys");
    $smarty->assign('msg',$msg);
    $smarty->assign('err',$err);
    $smarty->display('administration/main_header.tpl');
    $smarty->display('administration/main_system.tpl');
    $smarty->display('administration/main_footer.tpl');
    exit;
}
?>