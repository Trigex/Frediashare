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
include("../configs/config.php");
include("../modules/aPlayer/skins.php");
check_admin_login();

if (isset($_POST['action'])) $_POST['action']=filter_title($_POST['action']);
if (isset($_POST['add_setting'])) $_POST['add_setting']=filter_title($_POST['add_setting']);
if (isset($_POST['eadd_setting'])) $_POST['eadd_setting']=filter_title($_POST['eadd_setting']);
if (isset($_POST['pwidth'])) $_POST['pwidth']=filter_title($_POST['pwidth']);
if (isset($_POST['epwidth'])) $_POST['epwidth']=filter_title($_POST['epwidth']);
if (isset($_POST['pheight'])) $_POST['pheight']=filter_title($_POST['pheight']);
if (isset($_POST['epheight'])) $_POST['epheight']=filter_title($_POST['epheight']);
if (isset($_POST['delpic'])) $_POST['delpic']=filter_title($_POST['delpic']);
if (isset($_POST['edelpic'])) $_POST['edelpic']=filter_title($_POST['edelpic']);
if (isset($_POST['autoplay'])) $_POST['autoplay']=filter_title($_POST['autoplay']);
if (isset($_POST['eautoplay'])) $_POST['eautoplay']=filter_title($_POST['eautoplay']);
if (isset($_POST['askin'])) $_POST['askin']=filter_descr($_POST['askin']);
if (isset($_POST['easkin'])) $_POST['easkin']=filter_descr($_POST['easkin']);
if (isset($_POST['logo'])) $_POST['logo']=filter_descr($_POST['logo']);
if (isset($_POST['elogo'])) $_POST['elogo']=filter_descr($_POST['elogo']);

if($_POST['add_setting']!="" or $_POST['eadd_setting']!="" )
{
    if($_FILES[picture][tmp_name]!="" or $_FILES[epicture][tmp_name]!="")
    {
	$ext = strrchr($_FILES[picture]["name"], '.');
	$eext = strrchr($_FILES[epicture]["name"], '.');
	
	if(strtolower($ext)=='.jpg' || strtolower($ext)=='.gif' || strtolower($ext)=='.png' || strtolower($eext)=='.jpg' || strtolower($eext)=='.gif' || strtolower($eext)=='.png')
	{
	
	    if($_POST['add_setting']!="") $rs=$conn->execute("select bgimage from playeraudio_settings where ID='1';");
	    elseif ($_POST['eadd_setting']!="" ) $rs=$conn->execute("select bgimage from playeraudio_settings where ID='2';");
	    $bgimage=$rs->fields[bgimage];
	    if ($bgimage!="")
	    {
		$rname=$config['dir_fp'].'/wms_audio/'.$bgimage;
		@chmod($rname, 0666);
		@unlink($rname);
	    }
	    if($_POST['add_setting']!="") $image_name_tmp="playerbg_tmp".strtolower($ext); elseif ($_POST['eadd_setting']!="" ) $image_name_tmp="eplayerbg_tmp".strtolower($eext);
	    if($_POST['add_setting']!="") $image_name="playerbg".strtolower($ext); elseif ($_POST['eadd_setting']!="" ) $image_name="eplayerbg".strtolower($eext);
	    
	    $rname_tmp=$config['dir_fp'].'/wms_audio/'.$image_name_tmp;
	    $rname=$config['dir_fp'].'/wms_audio/'.$image_name;
	    
	    if(rename($_FILES[picture][tmp_name],$rname_tmp) and $_POST['add_setting']!="")
	    {
		//thumbs($rname_tmp, $rname, $_POST[pwidth], $_POST[pheight]);
		rename($rname_tmp, $rname);
		@chmod($rname, 0666);
		@chmod($image_name, 0666);
		@unlink($rname_tmp);
	    } elseif (rename($_FILES[epicture][tmp_name],$rname_tmp) and $_POST['eadd_setting']!="") {
		//thumbs($rname_tmp, $rname, $_POST[epwidth], $_POST[epheight]);
		rename($rname_tmp, $rname);
		@chmod($rname, 0666);
		@chmod($image_name, 0666);
		@unlink($rname_tmp);
	    }
	    
	    $qu="bgimage='$image_name',";
	}
	else { $err = $lang['adm_errplaylogo15']; }
    } 
    elseif ($_POST[delpic]=="1" or $_POST[edelpic]=="1")
    {
	if($_POST['add_setting']!="") $rs=$conn->execute("select bgimage from playeraudio_settings where ID='1';");
	elseif ($_POST['eadd_setting']!="" ) $rs=$conn->execute("select bgimage from playeraudio_settings where ID='2';");
	$bgimage=$rs->fields[bgimage];
	if ($bgimage!="")
	{
	    $rname=$config['dir_fp'].'/wms_audio/'.$bgimage;
	    @chmod($rname, 0666);
	    @unlink($rname);
	}
	$image_name="";
	$qu="bgimage='$image_name',";
    }
    else
    {
	if($_POST['add_setting']!="") $rs=$conn->execute("select bgimage from playeraudio_settings  where ID='1';");
	elseif ($_POST['eadd_setting']!="" ) $rs=$conn->execute("select bgimage from playeraudio_settings  where ID='2';");
	$image_name=$rs->fields[bgimage];
	$qu="bgimage='$image_name',";
    }
    
    if ($err=="")
    { 
	if($_POST['add_setting']!="") {
	$sql = "update playeraudio_settings set 
				    autoplay='$_POST[autoplay]',
				    skin='$_POST[askin]',
				    logo='$_POST[logo]',
				    $qu
				    pwidth='$_POST[pwidth]',
				    pheight='$_POST[pheight]' where ID='1'";
	} elseif ($_POST['eadd_setting']!="" ) {
	    if ( $_POST['embedviews'] == 'on' ) $eviews = 1; else $eviews = 0;
	    $conn->execute("update configurations set value='$eviews' where configurations.option='inc_aplayer_count'");
	    if ( $conn->Affected_Rows() > 0 ) $msg = 'yes'; 
	    
	$sql = "update playeraudio_settings set 
				    autoplay='$_POST[eautoplay]',
				    skin='$_POST[easkin]',
				    logo='$_POST[elogo]',
				    $qu
				    pwidth='$_POST[epwidth]',
				    pheight='$_POST[epheight]' where ID='2'";
	}
				    
	$conn->execute($sql);
	if ( $conn->Affected_Rows() > 0 or $msg == 'yes' ) { $msg=$lang['admnot_playersave']; }
    }
}

$rs = $conn->execute("select * from playeraudio_settings where ID='1'");
$player_settings = $rs->getrows();
$smarty->assign('setting', $player_settings[0]);

$rs1 = $conn->execute("select * from playeraudio_settings where ID='2'");
$player_settings1 = $rs1->getrows();
$smarty->assign('esetting', $player_settings1[0]);

$sql = "select * from configurations where configurations.option = 'inc_aplayer_count';";
$rsc = $conn->Execute($sql);
if($rsc) {
    while(!$rsc->EOF) {
        $field = $rsc->fields['option'];
        $config[$field] = $rsc->fields['value'];
        $smarty->assign($field, $config[$field]);
        @$rsc->MoveNext();
    }
} 

set_btn("adm_fp"); set_sbtn("plaaudio");   
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display("administration/main_header.tpl");
$smarty->display("administration/player_main_audio.tpl");
$smarty->display("administration/main_footer.tpl");
?>