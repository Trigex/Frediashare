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
include('rating2.php');
check_active();

$active="active='1'";
$activev = "(vtype='public') and (active='1') and (is_inapp='no')";
$smarty->assign('dmenu', 'mymsg');
if ( isset ( $_REQUEST['page'] ) ) $_REQUEST['page'] = filter_title ( $_REQUEST['page'] );
if ( isset ( $_REQUEST['id'] ) ) $_REQUEST['id'] = filter_descr ( $_REQUEST['id'] );
if ( isset ( $_REQUEST['view'] ) ) $_REQUEST['view'] = filter_title ( $_REQUEST['view'] );
$view = $_REQUEST['view'];
$id = $_REQUEST['id'];
if ($_REQUEST[id]!="")
{
if ($config[guests_categories_view]!="1" && $_SESSION[UID]=="") { header("Location: $config[base_url]/login?next=categories/".$_REQUEST['view']."/".$_REQUEST['id']); exit; }
else
{    
    set_title($lang['title_categdetails']);
    $rid = ereg_replace("_{1,}", " ", $id);
    
    if ($config[special_characters]=="0") $sq="select * from categories where (name='$rid') and ($active)";
    else $sq="select * from categories where (cid='$id') and ($active)";
    $r=$conn->execute($sq);
    $cid=$r->fields[cid];
    $cname=$r->fields[name]; $smarty->assign('cname',$cname);
    $cdesc = $r->fields['descrip']; $smarty->assign('cdesc',$cdesc);
    $au=$r->fields[audio_uploads];
    $iu=$r->fields[image_uploads];
    $vu=$r->fields[video_uploads];
    $r->Close();
    $smarty->assign('au',$au);
    $smarty->assign('iu',$iu);
    $smarty->assign('vu',$vu);

    if ($view=="video" && $config['enable_videos']=="1")
    {
	if ($vu=="yes")
	{
	    //latest videos
	    $sql="select * from files_video WHERE $activev and (vcategs like '%,$cid,%') order by addtime desc limit 7";
	    $rs = $conn->execute($sql);
	    $latest = $rs->getrows();
	    $smarty->assign('latest',$latest);
	    $rs->Close();
	    //most watched videos
	    $sql1="select * from files_video WHERE $activev and (vcategs like '%,$cid,%') order by views desc limit 7";
	    $rs1 = $conn->execute($sql1);
	    $mostw = $rs1->getrows();
	    $smarty->assign('mostw',$mostw);
	    $rs1->Close();
	    //most active users
	    $sql2="select count(vid) as total, vid, vkey, uid from files_video where $activev and (vcategs like '%,$cid,%') group by uid order by total desc limit 4";
	    $rs2 = $conn->execute($sql2);
	    $mosta = $rs2->getrows();
	    $smarty->assign('mosta',$mosta);
	    $rs2->Close();
    
	    set_btn("bcateg"); set_sbtn("vid");
	    $smarty->display('main_header.tpl');
	    $smarty->display('categ_details.tpl');
	    $smarty->display('footer.tpl');
	    exit;
	}
    }

    if ($view=="audio" && $config['enable_audio']=="1")
    {
	if ($au=="yes")
	{
	    $config[section]="audio";
	    //latest audios
	    $sql="select * from files_audio WHERE $activev and (vcategs like '%,$cid,%') order by addtime desc limit 7";
	    $rs = $conn->execute($sql);
	    $latest = $rs->getrows();
	    $smarty->assign('latest',$latest);
	    $rs->Close();
	    //most watched audios
	    $sql1="select * from files_audio WHERE $activev and (vcategs like '%,$cid,%') order by views desc limit 7";
	    $rs1 = $conn->execute($sql1);
	    $mostw = $rs1->getrows();
	    $smarty->assign('mostw',$mostw);
	    $rs1->Close();
	    //most active users
	    $sql2="select count(vid) as total, vid, vkey, uid from files_audio where (vcategs like '%,$cid,%') and $activev group by uid order by total desc limit 4";
	    $rs2 = $conn->execute($sql2);
	    $mosta = $rs2->getrows();
	    $smarty->assign('mosta',$mosta);
	    $rs2->Close();
    
	    set_btn("bcateg"); set_sbtn("aud");
	    $smarty->display('main_header.tpl');
	    $smarty->display('categ_details_audio.tpl');
	    $smarty->display('footer.tpl');
	    exit;
	}
    }
    
    if ($view=="image" && $config['enable_images']=="1")
    {
	if ($iu=="yes")
	{
	    $config[section]="image";
	    //latest images
	    $sql="select * from files_image WHERE $activev and (vcategs like '%,$cid,%') order by addtime desc limit 7";
	    $rs = $conn->execute($sql);
	    $latest = $rs->getrows();
	    $smarty->assign('latest',$latest);
	    $rs->Close();
	    //most watched images
	    $sql1="select * from files_image WHERE $activev and (vcategs like '%,$cid,%') order by views desc limit 7";
	    $rs1 = $conn->execute($sql1);
	    $mostw = $rs1->getrows();
	    $smarty->assign('mostw',$mostw);
	    $rs1->Close();
	    //most active users
	    $sql2="select count(vid) as total, vid, vkey, uid from files_image where $activev and (vcategs like '%,$cid,%') group by uid order by total desc limit 4";
	    $rs2 = $conn->execute($sql2);
	    $mosta = $rs2->getrows();
	    $smarty->assign('mosta',$mosta);
	    $rs2->Close();
    
	    set_btn("bcateg"); set_sbtn("img");
	    $smarty->display('main_header.tpl');
	    $smarty->display('categ_details_image.tpl');
	    $smarty->display('footer.tpl');
	    exit;
	}
    }
    }
}

// paging
$listing_per_page = $config[paging_categ];
if($_REQUEST[page]=="")
$page = 1;
else
$page = $_REQUEST[page];
$sql = "SELECT count(*) as total from categories where $active limit $listing_per_page";
$ars = $conn->Execute($sql);
$total = $ars->fields['total'];
$ars->Close();
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
    else $page_no .= " <a href='$config[base_url]/categories/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
}
if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
else $link = $lang['categ_none'];

if($tpage>1)
{
    $nextpage=$page+1;
    $prevpage=$page-1;
    $prevlink="<a href='$config[base_url]/categories/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    $nextlink="<a href='$config[base_url]/categories/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    if($page==$tpage) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link;
    elseif($tpage>$page && $page>1) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
    elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
}

$sql="SELECT * from categories where $active order by name asc limit $startfrom, $listing_per_page";
$rs = $conn->Execute($sql);
$result = mysql_query($sql);
while($row = mysql_fetch_assoc($result))
{
    $title[]=$row[name];
    $tit[] = ereg_replace(" {1,}", "_", $row[name]);
    $smarty->assign('tit',$tit);
}
$categs = $rs->getrows(); 

$smarty->assign('start_num',$start_num);
$smarty->assign('end_num',$startfrom+$rs->recordcount());
$rs->Close();
$smarty->assign('total',$total);
$smarty->assign('link',$link);
$smarty->assign('page',$page+0);
$smarty->assign('categs',$categs);

set_btn("bcateg"); set_sbtn("gen"); set_title($lang['title_categavail']);
$smarty->display('main_header.tpl');
$smarty->display('main_categories.tpl');
$smarty->display('footer.tpl');
?>