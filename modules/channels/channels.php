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
include('../../configs/config.php');
check_active();
if ($config[enable_channels] !="1") { header("Location: $config[base_url]/main"); exit; }
if ( $config['guests_chan_access'] != '1' ) { check_login('channels'); }

$smarty->assign('dmenu', 'mymsg'); 

$sort = filter_title ( $_GET['sort'] ); $type = $sort;
$chtype = filter_title ( $_GET['chtype'] );

if ( $chtype == 'c1' ) { $cmd = " and ch_type = '1' "; $type.= '/c1'; }
elseif ( $chtype == 'c2' ) { $cmd = " and ch_type = '2' "; $type.= '/c2'; }
elseif ( $chtype == 'c3' ) { $cmd = " and ch_type = '3' "; $type.= '/c3'; }
elseif ( $chtype == 'c4' ) { $cmd = " and ch_type = '4' "; $type.= '/c4'; }
elseif ( $chtype == 'c5' ) { $cmd = " and ch_type = '5' "; $type.= '/c5'; }
elseif ( $chtype == 'c6' ) { $cmd = " and ch_type = '6' "; $type.= '/c6'; }

if ( $sort == '' or $sort == 'mv' or $sort != 'ms' ) $cmd.= "order by ch_views desc"; else $cmd.= "order by ch_subs desc";

// paging
$listing_per_page = $config['paging_chan'];
if(filter_title($_GET[page])=="")
$page = 1;
else
$page = filter_title($_GET[page]);

$sql = "SELECT count(*) as total from members where is_active='1' $cmd limit $listing_per_page";
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
	if ($type!="") $page_no .= " <a href='$config[base_url]/channels/$type/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
	else $page_no .= " <a href='$config[base_url]/channels/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
    }
}

if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
else $link = $lang['ch_errtxt1'];

if($tpage>1)
{
    $nextpage=$page+1;
    $prevpage=$page-1;
    if ($type!="") $prevlink="<a href='$config[base_url]/channels/$type/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    else $prevlink="<a href='$config[base_url]/channels/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    
    if ($type!="") $nextlink="<a href='$config[base_url]/channels/$type/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    else $nextlink="<a href='$config[base_url]/channels/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";

    if($page==$tpage) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link;
    elseif($tpage>$page && $page>1) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
    elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
}

$sql="SELECT * from members where is_active='1' $cmd limit $startfrom, $listing_per_page";
$rs = $conn->Execute($sql);
$members = $rs->getrows(); 

$smarty->assign('start_num',$start_num);
$smarty->assign('end_num',$startfrom+$rs->recordcount());
$smarty->assign('total',$total);
$smarty->assign('link',$link);
$smarty->assign('page',$page+0);
$smarty->assign('res',$members);
set_btn("bchan"); set_sbtn("bchan"); set_title($lang['uch_thl4']);
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display('main_header.tpl');
$smarty->display('main_channels.tpl');
$smarty->display('footer.tpl');
?>