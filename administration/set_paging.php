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

$myaudio_btn=$_POST['pag_myaudiobtn'];
$myaudio_val=$_POST['pag_myaudio'];
$myimages_btn=$_POST['pag_myimagesbtn'];
$myimages_val=$_POST['pag_myimages'];
$myvideos_btn=$_POST['pag_myvideosbtn'];
$myvideos_val=$_POST['pag_myvideos'];
$inbox_btn=$_POST['pag_inboxbtn'];
$inbox_val=$_POST['pag_inbox'];
$outbox_btn=$_POST['pag_outboxbtn'];
$outbox_val=$_POST['pag_outbox'];
$blocked_btn=$_POST['pag_blockedbtn'];
$blocked_val=$_POST['pag_blocked'];
$myfav_btn=$_POST['pag_myfavbtn'];
$myfav_val=$_POST['pag_myfav'];
$myfri_btn=$_POST['pag_myfribtn'];
$myfri_val=$_POST['pag_myfri'];
$mypla_btn=$_POST['pag_myplabtn'];
$mypla_val=$_POST['pag_mypla'];
$mysubs_btn=$_POST['pag_mysubsbtn'];
$mysubs_val=$_POST['pag_mysubs'];
$myusubs_btn=$_POST['pag_myusubsbtn'];
$myusubs_val=$_POST['pag_myusubs'];
$audio_btn=$_POST['pag_audiobtn'];
$audio_val=$_POST['pag_audio'];
$images_btn=$_POST['pag_imagesbtn'];
$images_val=$_POST['pag_images'];
$videos_btn=$_POST['pag_videosbtn'];
$videos_val=$_POST['pag_videos'];
$categ_btn=$_POST['pag_categbtn'];
$categ_val=$_POST['pag_categ'];
$member_btn=$_POST['pag_memberbtn'];
$member_val=$_POST['pag_member'];
$ufav_btn=$_POST['pag_ufavbtn'];
$ufav_val=$_POST['pag_ufav'];
$ufri_btn=$_POST['pag_ufribtn'];
$ufri_val=$_POST['pag_ufri'];
$search_btn=$_POST['pag_searchbtn'];
$search_val=$_POST['pag_search'];
$feat_btn=$_POST['pag_featbtn'];
$feat_val=$_POST['pag_feat'];
$bestfiles_btn=$_POST['pag_bestbtn'];
$bestfiles_val=$_POST['pag_bestfiles'];
$comm_btn=$_POST['pag_commbtn'];
$comm_val=$_POST['pag_comm'];
$resp_btn=$_POST['pag_respbtn'];
$resp_val=$_POST['pag_resp'];
$qlist_btn=$_POST['pag_qlistbtn'];
$qlist_val=$_POST['pag_qlist'];
$plist_btn=$_POST['pag_plistbtn'];
$plist_val=$_POST['pag_plist'];
$plist_btn2=$_POST['pag_plistbtn2'];
$plist_val2=$_POST['pag_plist2'];
$chan_btn=$_POST['pag_chanbtn'];
$chan_val=$_POST['pag_chan'];

//my audios paging
if (isset($myaudio_btn))
{
    if (!is_numeric(mysql_real_escape_string($myaudio_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$myaudio_val' where configurations.option='paging_myaudio'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//my images paging
if (isset($myimages_btn))
{
    if (!is_numeric(mysql_real_escape_string($myimages_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$myimages_val' where configurations.option='paging_myimages'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//my videos paging
if (isset($myvideos_btn))
{
    if (!is_numeric(mysql_real_escape_string($myvideos_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$myvideos_val' where configurations.option='paging_myvideos'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//inbox paging
if (isset($inbox_btn))
{
    if (!is_numeric(mysql_real_escape_string($inbox_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$inbox_val' where configurations.option='paging_inbox'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//outbox paging
if (isset($outbox_btn))
{
    if (!is_numeric(mysql_real_escape_string($outbox_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$outbox_val' where configurations.option='paging_outbox'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//blocked users paging
if (isset($blocked_btn))
{
    if (!is_numeric(mysql_real_escape_string($blocked_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$blocked_val' where configurations.option='paging_blocked'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//my favorites paging
if (isset($myfav_btn))
{
    if (!is_numeric(mysql_real_escape_string($myfav_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$myfav_val' where configurations.option='paging_myfav'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//my friends paging
if (isset($myfri_btn))
{
    if (!is_numeric(mysql_real_escape_string($myfri_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$myfri_val' where configurations.option='paging_myfri'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//my playlists paging
if (isset($mypla_btn))
{
    if (!is_numeric(mysql_real_escape_string($mypla_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$mypla_val' where configurations.option='paging_mypla'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//my subscriptions paging
if (isset($mysubs_btn))
{
    if (!is_numeric(mysql_real_escape_string($mysubs_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$mysubs_val' where configurations.option='paging_mysubs'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//my subscribers paging
if (isset($myusubs_btn))
{
    if (!is_numeric(mysql_real_escape_string($myusubs_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$myusubs_val' where configurations.option='paging_myusubs'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//audios paging
if (isset($audio_btn))
{
    if (!is_numeric(mysql_real_escape_string($audio_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$audio_val' where configurations.option='paging_audio'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//images paging
if (isset($images_btn))
{
    if (!is_numeric(mysql_real_escape_string($images_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$images_val' where configurations.option='paging_images'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//videos paging
if (isset($videos_btn))
{
    if (!is_numeric(mysql_real_escape_string($videos_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$videos_val' where configurations.option='paging_videos'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//categories paging
if (isset($categ_btn))
{
    if (!is_numeric(mysql_real_escape_string($categ_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$categ_val' where configurations.option='paging_categ'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//members paging
if (isset($member_btn))
{
    if (!is_numeric(mysql_real_escape_string($member_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$member_val' where configurations.option='paging_member'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//user favorites paging
if (isset($ufav_btn))
{
    if (!is_numeric(mysql_real_escape_string($ufav_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$ufav_val' where configurations.option='paging_ufav'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//user friends paging
if (isset($ufri_btn))
{
    if (!is_numeric(mysql_real_escape_string($ufri_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$ufri_val' where configurations.option='paging_ufri'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//search results paging
if (isset($search_btn))
{
    if (!is_numeric(mysql_real_escape_string($search_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$search_val' where configurations.option='paging_search'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//featured files paging
if (isset($feat_btn))
{
    if (!is_numeric(mysql_real_escape_string($feat_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$feat_val' where configurations.option='paging_featured'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//best files paging
if (isset($bestfiles_btn))
{
    if (!is_numeric(mysql_real_escape_string($bestfiles_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$bestfiles_val' where configurations.option='paging_bestfiles'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//comments paging
if (isset($comm_btn))
{
    if (!is_numeric(mysql_real_escape_string($comm_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$comm_val' where configurations.option='paging_comments'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//responses paging
if (isset($resp_btn))
{
    if (!is_numeric(mysql_real_escape_string($resp_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$resp_val' where configurations.option='paging_fileresp'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//quicklist paging
if (isset($qlist_btn))
{
    if (!is_numeric(mysql_real_escape_string($qlist_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$qlist_val' where configurations.option='paging_qlist'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//playlist paging
if (isset($plist_btn))
{
    if (!is_numeric(mysql_real_escape_string($plist_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$plist_val' where configurations.option='paging_plist'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//playlist details paging
if (isset($plist_btn2))
{
    if (!is_numeric(mysql_real_escape_string($plist_val2))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$plist_val2' where configurations.option='paging_plist2'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
//channels paging
if (isset($chan_btn))
{
    if (!is_numeric(mysql_real_escape_string($chan_val))) { echo show_err ( $lang['admerr_pag2'] ); exit; }
    $sql="update configurations set value='$chan_val' where configurations.option='paging_chan'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()>0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
//    else { echo show_err ( $lang['admerr_pag2'] ); exit; }
}
?>