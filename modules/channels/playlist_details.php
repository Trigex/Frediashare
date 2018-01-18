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
include '../../configs/config.php';
include '../../rating2.php';
//check_login();

$vkey = filter_title ( $_GET['vkey'] );
$type = filter_title ( $_GET['type'] );
if ( $type == 'audio' ) { $tbl = 'files_audio'; $tbl1 = 'playlist_audio'; $pt = 'a'; }
elseif ( $type == 'image' ) { $tbl = 'files_image'; $tbl1 = 'playlist_image'; $pt = 'i'; }
elseif ( $type == 'video' ) { $tbl = 'files_video'; $tbl1 = 'playlist_video'; $pt = 'v'; }

//playlist details
$pd = $conn->execute("select * from $tbl1 where vkey='$vkey' and active='1';");
$ptitle = $pd->fields['pname'];
$vuid = $pd->fields['uid'];
$priv = $pd->fields['privacy'];
$smarty->assign('pd', $pd->getrows());
//friend check                                                                                                                                                                                         
$fs="select * from friends where uid='$vuid' and fname='$_SESSION[USERNAME]' and is_active='1'";
$rfs=$conn->execute($fs);
if ($rfs->recordcount()>0) {
    if($rfs->fields[can_rate]=="1") $smarty->assign('can_rate',$rfs->fields[can_rate]);
    if($rfs->fields[can_comment]=="1") $smarty->assign('can_comment',$rfs->fields[can_comment]);
    $friend = 'yes';
    $smarty->assign('friend',$friend);
} else { $friend = 'no'; }

if ( $priv == 'private' ) { 
    if ( $vuid == $_SESSION['UID'] ) $err == '';
    else { if ( $friend == 'yes' ) $err == ''; else $err = $lang['plist_txt65']; }
}

if ( $err == '' ) {
//view count
if ( $vuid != $_SESSION['UID'] ) { $conn->execute("update $tbl1 set views=views+1 where vkey='$vkey' and active='1';"); }
//subs, blocks
$bl = $conn->execute("select * from blocked_users where blocker_uid='$vuid' and blocked_uid='$_SESSION[UID]' and active='1'");
if ( $bl->recordcount() > 0 ) { $smarty->assign('is_bl', 'yes'); }
$ms1 = $conn->execute("select * from subscriptions where subscriber_uid = '$_SESSION[UID]' and subscribed_uid = '$vuid' and stype='pl".$pt.$vkey."' and active = '1';");
if ( $ms1->recordcount() > 0 ) $smarty->assign('is_sub', 'yes'); else $smarty->assign('is_sub', 'no');
//paging
$listing_per_page = $config[paging_plist2];
if(filter_title($_REQUEST[page])=="")
$page = 1;
else
$page = filter_title($_REQUEST[page]);

$sql = "SELECT count(*) as total from playlist_files where ptype='$type' and vkey='$vkey' and active='1' limit $listing_per_page";
$ars = $conn->Execute($sql);
$total = $ars->fields['total'];
$grandtotal = $total;
$tpage = ceil($total/$listing_per_page);
if($tpage==0) $spage=$tpage+1;
else $spage = $tpage;
$startfrom = ($page-1)*$listing_per_page;
$start_num=$startfrom+1;
$smarty->assign('tpage',$tpage);
$page_no = "";
for($i=1; $i<=$tpage; $i++)
{
    if($i==$page) $page_no .= "<span class=\"pag_act\">$i</span>";
    else 
    {
	if ($type!="") $page_no .= " <a href='$config[base_url]/".$type."_playlist/$vkey/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> "; 
    }
}

if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
else { 
    if ( $type == 'audio' ) { $link = $lang['plist_txt19']; }
    elseif ( $type == 'image' ) { $link = $lang['plist_txt18']; }
    elseif ( $type == 'video' ) { $link = $lang['plist_txt17']; }
}
if($tpage>1)
{
    $nextpage=$page+1;
    $prevpage=$page-1;
    if ($type!="") $prevlink="<a href='$config[base_url]/".$type."_playlist/$vkey/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    
    if ($type!="") $nextlink="<a href='$config[base_url]/".$type."_playlist/$vkey/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";

    if($page==$tpage) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link;
    elseif($tpage>$page && $page>1) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
    elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
}

//playlist entries
$pe = $conn->execute("select * from playlist_files where ptype='$type' and vkey='$vkey' and active='1' order by position asc limit $startfrom, $listing_per_page;");
$smarty->assign('pcount', $total);
$smarty->assign('pe', $pe->getrows());

$smarty->assign('start_num',$start_num);
$smarty->assign('end_num',$startfrom+$pe->recordcount());
$smarty->assign('total',$total);
$smarty->assign('link',$link);
}

set_btn('bhome'); set_sbtn('pd'); set_title($ptitle);
$smarty->assign('dmenu', 'mymsg');
$smarty->assign('ptype', $type);
$smarty->assign('ptitle', $ptitle);
$smarty->assign('err', $err); $smarty->assign('msg', $msg);
$smarty->display('main_header.tpl');
if ( $err == '' ) $smarty->display('main_playlistdetails.tpl');
$smarty->display('footer.tpl');
?>