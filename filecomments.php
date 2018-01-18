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
include('configs/config.php');
//check_login();

$ftype = filter_title( $_GET['ftype'] );
$key = filter_title( $_GET['key'] );
$mt = filter_title( $_GET['total'] );


if ( $ftype == 'audio' ) {
    set_btn ( 'baudio' ); $tbl = 'comm_audio'; $list = key_to_info_audio ( $key ); $vidid = $list[0]; $vuid=$list[1];  
} elseif ( $ftype == 'image' ) { 
    set_btn ( 'bimage' ); $tbl = 'comm_img'; $list = key_to_info_image ( $key ); $vidid = $list[0]; $vuid=$list[1];  
} elseif ( $ftype == 'video' ) { 
    set_btn ( 'bvideo' ); $tbl = 'comm_vid'; $list = key_to_info ( $key ); $vidid = $list[0]; $vuid=$list[1];  
} elseif ( $ftype == 'profile' ) { 
    set_btn ( 'bhome' ); $tbl = 'comm_profile'; $vuid = $key; 
    if ( $config['enable_channels'] == '0' ) set_sbtn ( 'profile' ); else set_sbtn ( 'userpage' );
}

if ( $ftype != 'profile' ) {
    set_sbtn ( 'noprofile' );
    $crq = $conn->execute("select is_commrate from files_$ftype where vid='$vidid' and vkey='$key';");
    $smarty->assign('file_comm_rate', $crq->fields['is_commrate']);
} else {
    if ( $config['enable_channels'] == '0' ) set_sbtn ( 'profile' ); else set_sbtn ( 'userpage' );
    //set_sbtn ( 'profile' );
    $crq = $conn->execute("select ch_commrate from members where uid='$vuid';");
    $ch_commrate=$crq->fields[ch_commrate];
    if ( $ch_commrate == '1' ) $ch_commrate = 'yes'; else $ch_commrate = 'no';
    $smarty->assign('file_comm_rate',$ch_commrate);
}

$smarty->assign( 'vuid', $vuid );
$smarty->assign( 'vidid', $vidid );
$smarty->assign( 'fkey', $key );

// paging
$listing_per_page = $config['paging_comments'];
$page = filter_title( $_GET['page'] );

if ( $ftype != 'profile' ) { $sql = "select s.*,v.* from $tbl v,members s where v.active='1' and v.approved='1' and v.vid='$vidid' and v.uid=s.uid order by comid desc"; }
else { $sql = "select s.*,v.* from comm_profile v, members s where v.active='1' and v.approved='1' and v.uid='$vuid' and s.uid=v.cuid order by v.comid desc"; }
//if ( $ftype != 'profile' ) { $sql = "select s.*,v.* from $tbl v,members s where v.active='1' and v.vid='$vidid' and v.uid=s.uid order by comid desc"; }
//else { $sql = "select s.*,v.* from comm_profile v, members s where v.active='1' and v.uid='$vuid' and s.uid=v.cuid order by v.comid desc"; }

$ars = $conn->Execute($sql);
$total = count ( $ars->getrows() );
if ( $mt == '1' ) { echo '('.$total.')'; exit; }

$grandtotal = $total;
$tpage = ceil ( $total / $listing_per_page );
if ( $tpage == 0 ) $spage = $tpage+1;
else $spage = $tpage;
$startfrom = ( $page - 1 ) * $listing_per_page;

$page_no = "";

if ( $config['enable_channels'] == '1' ) $p_br = 10; else $p_br = 5;

for ( $i = 1; $i <= $tpage; $i++ )
{
    if ( $ftype != 'profile' ) { if ( $i % 10 == 0 ) $br = '<br>'; else $br = ''; } else { if ( $i % $p_br == 0 ) $br = '<br>'; else $br = ''; } 
    if($i==$page) $page_no .= "<span class=\"pag_act\">$i</span>".$br;
	else $page_no .= " <a href=\"javascript:void(0)\" onclick=\"thisDiv('yes'); ldiv('loadme'); comm_load('".$ftype."', '".$key."', ".$i.");\"><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ".$br;
}

if ( $page_no != '' ) $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
else $link = '<span class="p5 bodylabel">'.$lang['comm_none'].$_REQUEST['user'];'</span>';

if ( $tpage > 1 ) {
    $nextpage = $page + 1;
    $prevpage = $page - 1;

    if ( $page == 1 ) { $onclickp = ''; $onclickn = "onclick=\"thisDiv('yes'); ldiv('loadme'); comm_load('".$ftype."', '".$key."', ".$nextpage.");\""; }
    elseif ( $page == $tpage ) { $onclickp = "onclick=\"thisDiv('yes'); ldiv('loadme'); comm_load('".$ftype."', '".$key."', ".$prevpage.");\""; $onclickn = ''; }
    else { $onclickn = "onclick=\"thisDiv('yes'); ldiv('loadme'); comm_load('".$ftype."', '".$key."', ".$nextpage.");\""; $onclickp = "onclick=\"thisDiv('yes'); ldiv('loadme'); comm_load('".$ftype."', '".$key."', ".$prevpage.");\""; }
    
    $prevlink = "<a href=\"javascript:void(0)\" $onclickp><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    $nextlink = "<a href=\"javascript:void(0)\" $onclickn><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";

    if($page==$tpage) $link=$link;
    elseif($tpage>$page && $page>1) $link=$link;
    elseif($tpage>$page && $page<=1) $link=$link;
    
    $nextprevlinks = $prevlink.'&nbsp;&nbsp;'.$nextlink;
    $smarty->assign('nextprevlinks', $nextprevlinks);
}

if ( $ftype != 'profile' ) { $sql="select s.*,v.* from $tbl v,members s where v.active='1' and v.approved='1' and v.vid='$vidid' and v.uid=s.uid order by comid desc limit $startfrom, $listing_per_page"; }
else { $sql = "select s.*,v.* from comm_profile v, members s where v.active='1' and v.approved='1' and v.uid='$vuid' and s.uid=v.cuid order by v.comid desc limit $startfrom, $listing_per_page"; }
$rs = $conn->Execute($sql);
$comm = $rs->getrows(); 

$cp = $conn->execute("select th_comm_pos from member_theme where th_uid = '$vuid';");
if ( $cp->recordcount() > 0 ) { $smarty->assign('comm_pos', $cp->fields['th_comm_pos']); }
else { $cp = $conn->execute("select th_comm_pos from member_theme where th_uid = '0';"); $smarty->assign('comm_pos', $cp->fields['th_comm_pos']); }

$smarty->assign('link',$link);
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->assign('comm',$comm);
$smarty->display('_inc/viewfile/inc_viewfilecommloop.tpl');
?>