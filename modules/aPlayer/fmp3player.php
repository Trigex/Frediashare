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

include('../../configs/config.php');

//$viewkey=filter_title($_REQUEST['id']);
//$viewkeyf=filter_title($_REQUEST['fid']);

if ($_REQUEST['id'] != '') $viewkey=filter_title($_REQUEST['id']); elseif ($_REQUEST['fid'] != '') $viewkey=filter_title($_REQUEST['fid']); 

$sql = "select * from files_audio where vkey='$viewkey'";
$rs = $conn->execute($sql);
$info = $rs->getrows();
$smarty->assign('info',$info);
$rs->Close();

$vi = $conn->execute("select vtype, uid from files_audio where vkey='$viewkey';");
$vtype  = $vi->fields['vtype'];
$vuid = $vi->fields['uid'];

if ($_REQUEST['fid'] != '' and $config['inc_aplayer_count'] == '1' ) $conn->execute("update files_audio set views=views+1, viewtime='".date("Y-m-d H:i:s")."' WHERE vkey='$viewkey'");

if ($_REQUEST['id'] != '') $sql = "select bgimage from playeraudio_settings where ID='1';"; elseif ($_REQUEST['fid'] != '') $sql = "select bgimage from playeraudio_settings where ID='2';";
$rs = $conn->execute($sql);
if ($rs->recordcount()>0)
{
    $bgimage=$rs->fields['bgimage'];
    $smarty->assign('bgimage',$bgimage);
}
header('Content-type: text/xml');
$smarty->display('fmp3player.tpl');
?>