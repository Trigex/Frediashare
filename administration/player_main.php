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
check_admin_login();

//if (isset($_POST['action'])) $_POST['action']=filter_title($_POST['action']);
if (isset($_POST['add_setting'])) $_POST['add_setting']=filter_title($_POST['add_setting']);
if (isset($_POST['eadd_setting'])) $_POST['eadd_setting']=filter_title($_POST['eadd_setting']);
if (isset($_POST['pwidth'])) $_POST['pwidth']=filter_title($_POST['pwidth']);
if (isset($_POST['epwidth'])) $_POST['epwidth']=filter_title($_POST['epwidth']);
if (isset($_POST['pheight'])) $_POST['pheight']=filter_title($_POST['pheight']);
if (isset($_POST['epheight'])) $_POST['epheight']=filter_title($_POST['epheight']);
if (isset($_POST['btime'])) $_POST['btime']=filter_title($_POST['btime']);
if (isset($_POST['ebtime'])) $_POST['ebtime']=filter_title($_POST['ebtime']);
if (isset($_POST['playerskin'])) $_POST['playerskin']=filter_title($_POST['playerskin']);
if (isset($_POST['eplayerskin'])) $_POST['eplayerskin']=filter_title($_POST['eplayerskin']);
if (isset($_POST['autoplay'])) $_POST['autoplay']=filter_title($_POST['autoplay']);
if (isset($_POST['eautoplay'])) $_POST['eautoplay']=filter_title($_POST['eautoplay']);
if (isset($_POST['fullscreen'])) $_POST['fullscreen']=filter_title($_POST['fullscreen']);
if (isset($_POST['efullscreen'])) $_POST['efullscreen']=filter_title($_POST['efullscreen']);
if (isset($_POST['plogo'])) $_POST['plogo']=filter_title($_POST['plogo']);
if (isset($_POST['eplogo'])) $_POST['eplogo']=filter_title($_POST['eplogo']);
if (isset($_POST['plist'])) $_POST['plist']=filter_title($_POST['plist']);
if (isset($_POST['eplist'])) $_POST['eplist']=filter_title($_POST['eplist']);
if (isset($_POST['embed'])) $_POST['embed']=filter_title($_POST['embed']);
if (isset($_POST['eembed'])) $_POST['eembed']=filter_title($_POST['eembed']);
if (isset($_POST['share'])) $_POST['share']=filter_title($_POST['share']);
if (isset($_POST['eshare'])) $_POST['eshare']=filter_title($_POST['eshare']);
if (isset($_POST['mail'])) $_POST['mail']=filter_title($_POST['mail']);
if (isset($_POST['email'])) $_POST['email']=filter_title($_POST['email']);
if (isset($_POST['repeat'])) $_POST['repeat']=filter_title($_POST['repeat']);
if (isset($_POST['erepeat'])) $_POST['erepeat']=filter_title($_POST['erepeat']);
if (isset($_POST['textads'])) $_POST['textads']=filter_title($_POST['textads']);
if (isset($_POST['etextads'])) $_POST['etextads']=filter_title($_POST['etextads']);
if (isset($_POST['atime'])) $_POST['atime']=filter_title($_POST['atime']);
if (isset($_POST['eatime'])) $_POST['eatime']=filter_title($_POST['eatime']);
if (isset($_POST['videoads'])) $_POST['videoads']=filter_title($_POST['videoads']);
if (isset($_POST['evideoads'])) $_POST['evideoads']=filter_title($_POST['evideoads']);
if (isset($_POST['showad'])) $_POST['showad']=filter_title($_POST['showad']);
if (isset($_POST['eshowad'])) $_POST['eshowad']=filter_title($_POST['eshowad']);
if (isset($_POST['pbutton'])) $_POST['pbutton']=filter_title($_POST['pbutton']);
if (isset($_POST['epbutton'])) $_POST['epbutton']=filter_title($_POST['epbutton']);

if (isset($_POST['scolor_related'])) $_POST['scolor_related']=filter_title($_POST['scolor_related']);
if (isset($_POST['ecolor_related'])) $_POST['ecolor_related']=filter_title($_POST['ecolor_related']);
if (isset($_POST['scolor_embed'])) $_POST['scolor_embed']=filter_title($_POST['scolor_embed']);
if (isset($_POST['ecolor_embed'])) $_POST['ecolor_embed']=filter_title($_POST['ecolor_embed']);
if (isset($_POST['scolor_share'])) $_POST['scolor_share']=filter_title($_POST['scolor_share']);
if (isset($_POST['ecolor_share'])) $_POST['ecolor_share']=filter_title($_POST['ecolor_share']);
if (isset($_POST['scolor_mail'])) $_POST['scolor_mail']=filter_title($_POST['scolor_mail']);
if (isset($_POST['ecolor_mail'])) $_POST['ecolor_mail']=filter_title($_POST['ecolor_mail']);
if (isset($_POST['scolor_replay'])) $_POST['scolor_replay']=filter_title($_POST['scolor_replay']);
if (isset($_POST['ecolor_replay'])) $_POST['ecolor_replay']=filter_title($_POST['ecolor_replay']);
if (isset($_POST['scolor_time'])) $_POST['scolor_time']=filter_title($_POST['scolor_time']);
if (isset($_POST['ecolor_time'])) $_POST['ecolor_time']=filter_title($_POST['ecolor_time']);
if (isset($_POST['scolor_copy'])) $_POST['scolor_copy']=filter_title($_POST['scolor_copy']);
if (isset($_POST['ecolor_copy'])) $_POST['ecolor_copy']=filter_title($_POST['ecolor_copy']);
if (isset($_POST['scolor_ta2'])) $_POST['scolor_ta2']=filter_title($_POST['scolor_ta2']);
if (isset($_POST['ecolor_ta2'])) $_POST['ecolor_ta2']=filter_title($_POST['ecolor_ta2']);
if (isset($_POST['scolor_ta3'])) $_POST['scolor_ta3']=filter_title($_POST['scolor_ta3']);
if (isset($_POST['ecolor_ta3'])) $_POST['ecolor_ta3']=filter_title($_POST['ecolor_ta3']);
if (isset($_POST['scolor_ta4'])) $_POST['scolor_ta4']=filter_title($_POST['scolor_ta4']);
if (isset($_POST['ecolor_ta4'])) $_POST['ecolor_ta4']=filter_title($_POST['ecolor_ta4']);
if (isset($_POST['embedviews'])) $_POST['embedviews']=filter_title($_POST['embedviews']);

if($_POST['add_setting']!="" or $_POST['eadd_setting']!="")
{
//    $rpt = $_POST[repeats];
//    $smarty->assign('rpt',$rpt);
    $col_qu = "color_related='$_POST[scolor_related]', color_embed = '$_POST[scolor_embed]', color_share = '$_POST[scolor_share]', color_mail = '$_POST[scolor_mail]', color_replay = '$_POST[scolor_replay]', color_time = '$_POST[scolor_time]', color_copy = '$_POST[scolor_copy]', color_ta2 = '$_POST[scolor_ta2]',  color_ta3 = '$_POST[scolor_ta3]',  color_ta4 = '$_POST[scolor_ta4]', ";
    if ($_POST['add_setting']!="") {
    $sql = "update player_settings set 
		    pwidth='$_POST[pwidth]', 
		    pheight='$_POST[pheight]', 
		    theme='$_POST[playerskin]', 
		    fullscreen='$_POST[fullscreen]', 
		    logo='$_POST[plogo]', 
		    btime='$_POST[btime]', 
		    autoplay='$_POST[autoplay]', 
		    playlist='$_POST[plist]', 
		    embed='$_POST[embed]', 
		    pb='$_POST[pbuttons]', 
		    share='$_POST[share]', 
		    mail='$_POST[mail]', 
		    repeats='$_POST[repeat]', 
		    tads='$_POST[textads]', 
		    atime='$_POST[atime]', 
		    vads='$_POST[videoads]', 
		    $col_qu
		    advertisement='$_POST[showad]' where ID='1';";
    } elseif ( $_POST['eadd_setting']!="" ) {
    if ( $_POST['embedviews'] == 'on' ) $eviews = 1; else $eviews = 0;
    $conn->execute("update configurations set value='$eviews' where configurations.option='inc_vplayer_count'");
    if ( $conn->Affected_Rows() > 0 ) $msg = 'yes';
    
    $col_qu = "color_related = '$_POST[ecolor_related]', color_embed = '$_POST[ecolor_embed]', color_share = '$_POST[ecolor_share]', color_mail = '$_POST[ecolor_mail]', color_replay = '$_POST[ecolor_replay]', color_time = '$_POST[ecolor_time]', color_copy = '$_POST[ecolor_copy]', color_ta2 = '$_POST[ecolor_ta2]',  color_ta3 = '$_POST[ecolor_ta3]',  color_ta4 = '$_POST[ecolor_ta4]', ";
    $sql = "update player_settings set 
		    pwidth='$_POST[epwidth]', 
		    pheight='$_POST[epheight]', 
		    theme='$_POST[eplayerskin]', 
		    fullscreen='$_POST[efullscreen]', 
		    logo='$_POST[eplogo]', 
		    btime='$_POST[ebtime]', 
		    autoplay='$_POST[eautoplay]', 
		    playlist='$_POST[eplist]', 
		    embed='$_POST[eembed]', 
		    pb='$_POST[epbuttons]', 
		    share='$_POST[eshare]', 
		    mail='$_POST[email]', 
		    repeats='$_POST[erepeat]', 
		    tads='$_POST[etextads]', 
		    atime='$_POST[eatime]', 
		    vads='$_POST[evideoads]', 
		    $col_qu
		    advertisement='$_POST[eshowad]' where ID='2';";
    }
    $conn->execute($sql);
    if ( $conn->Affected_Rows() > 0 or $msg == 'yes' ) { $msg=$lang['admnot_playersave']; }
}
$rs1 = $conn->execute("select * from player_settings where ID='1';");
$wplayer_settings = $rs1->getrows();
$smarty->assign('wsetting', $wplayer_settings[0]);

$rs2 = $conn->execute("select * from player_settings where ID='2';");
$eplayer_settings = $rs2->getrows();
$smarty->assign('esetting', $eplayer_settings[0]);

$sql = "select * from configurations where configurations.option = 'inc_vplayer_count';";
$rsc = $conn->Execute($sql);
if($rsc) {
    while(!$rsc->EOF) {
        $field = $rsc->fields['option'];
        $config[$field] = $rsc->fields['value'];
        $smarty->assign($field, $config[$field]);
        @$rsc->MoveNext();
    }
}

set_btn("adm_fp"); set_sbtn("pla");        
$smarty->assign('msg',$msg);
$smarty->assign('err',$err);
$smarty->display("administration/main_header.tpl");
$smarty->display("administration/player_main.tpl");
$smarty->display("administration/main_footer.tpl");
?>