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

$activev = "and active = '1' and is_inapp='no'"; 
$activei = "and activei = '1' and is_inapp='no'"; 
$activea = "and activea = '1' and is_inapp='no'"; 

//$_REQUEST = array_map('filter_title', $_REQUEST);

if ( isset ( $_REQUEST['user'] ) ) $_REQUEST['user'] = filter_descr ( $_REQUEST['user'] );
if ( isset ( $_REQUEST['vtype'] ) ) $_REQUEST['vtype'] = filter_title ( $_REQUEST['vtype'] );
if ( isset ( $_REQUEST['itype'] ) ) $_REQUEST['itype'] = filter_title ( $_REQUEST['itype'] );
if ( isset ( $_REQUEST['atype'] ) ) $_REQUEST['atype'] = filter_title ( $_REQUEST['atype'] );
if ( isset ( $_REQUEST['page'] ) ) $_REQUEST['page'] = filter_title ( $_REQUEST['page'] );
if ( isset ( $_REQUEST['pagea'] ) ) $_REQUEST['pagea'] = filter_title ( $_REQUEST['pagea'] );
if ( isset ( $_REQUEST['pagei'] ) ) $_REQUEST['pagei'] = filter_title ( $_REQUEST['pagei'] );
$smarty->assign('dmenu', 'myfav');
if ($config[guests_profile_view] !="1") { check_login('user_favorites/'.$_REQUEST['user']); }
if ( $config['enable_videos'] == '1' ) $vl = "&sort=videos";
elseif ( $config['enable_images'] == '1' ) $vl = "&sort=images";
elseif ( $config['enable_audios'] == '1' ) $vl = "&sort=audios";
if ( $config['enable_channels'] == '1' ) { header("Location: $config[base_url]/user/$_REQUEST[user]&view=favorites$vl"); exit; }
if ($_REQUEST[user]!="")
{
    $user=$_REQUEST[user];
    if ($config[special_characters]=="0") $s1="select uid from members where username='$user' and is_active='1'";
    elseif ($config[special_characters]=="1") $s1="select uid,username from members where uid='$user' and is_active='1'";
    $r1=$conn->execute($s1);
    if ($r1->recordcount()!=0)
	{ $uid=$r1->fields[uid]; $un=$r1->fields[username]; }
    else { illegal_op(); }
    $r1->Close();
}
else { illegal_op(); }

$vtype=$_REQUEST[vtype];
if ($vtype=="all" || $vtype=="") { $qu2v="order by v.vtitle asc"; }
if ($vtype=="comments") { if ($config[file_comments]=="1") { $qu2v="order by v.comments desc"; } else { illegal_op(); } }
if ($vtype=="responses") { if ($config[file_responses]=="1") { $qu2v="order by v.responses desc"; } else { illegal_op(); } }
if ($vtype=="date") { $qu2v="order by v.addtime desc"; }
if ($vtype=="favorited") { $qu2v="order by v.vfav desc"; }
if ($vtype=="featured") { $qu2v="and v.is_featured='yes' order by v.vtitle asc"; }
if ($vtype=="ratings") { if ($config[file_ratings]=="1") { $qu2v="order by v.rate desc"; } else { illegal_op(); } }
if ($vtype=="views") { $qu2v="order by v.views desc"; }

$itype=$_REQUEST[itype];
if ($itype=="all" || $itype=="") { $qu2i="order by v.vtitle asc"; }
if ($itype=="comments") { if ($config[file_comments]=="1") { $qu2i="order by v.comments desc"; } else { illegal_op(); } }
if ($itype=="responses") { if ($config[file_responses]=="1") { $qu2i="order by v.responses desc"; } else { illegal_op(); } }
if ($itype=="date") { $qu2i="order by v.addtime desc"; }
if ($itype=="favorited") { $qu2i="order by v.vfav desc"; }
if ($itype=="featured") { $qu2i="and v.is_featured='yes' order by v.vtitle asc"; }
if ($itype=="ratings") { if ($config[file_ratings]=="1") { $qu2i="order by v.rate desc"; } else { illegal_op(); } }
if ($itype=="views") { $qu2i="order by v.views desc"; }

$atype=$_REQUEST[atype];
if ($atype=="all" || $atype=="") { $qu2a="order by v.vtitle asc"; }
if ($atype=="comments") { if ($config[file_comments]=="1") { $qu2a="order by v.comments desc"; } else { illegal_op(); } }
if ($atype=="responses") { if ($config[file_responses]=="1") { $qu2a="order by v.responses desc"; } else { illegal_op(); } }
if ($atype=="date") { $qu2a="order by v.addtime desc"; }
if ($atype=="favorited") { $qu2a="order by v.vfav desc"; }
if ($atype=="featured") { $qu2a="and v.is_featured='yes' order by v.vtitle asc"; }
if ($atype=="ratings") { if ($config[file_ratings]=="1") { $qu2a="order by v.rate desc"; } else { illegal_op(); } }
if ($atype=="views") { $qu2a="order by v.views desc"; }

// paging
$listing_per_page = $config[paging_ufav];

if ($config['enable_videos']=="1") 
{ 
if($_REQUEST[page]=="")
$page = 1;
else
$page = filter_title ( $_REQUEST[page] );
$sql1="select s.*,v.* from files_video v, fav_video s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.uid='$uid' $qu2v";
$rs1 = $conn->Execute($sql1);
$favorites1 = $rs1->getrows(); 
$rs1->Close();
$smarty->assign('total1',count($favorites1));
$total=count($favorites1);
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
	if($vtype!="") $page_no .= " <a href='$config[base_url]/user_favorites/$user/video/$vtype/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
	else $page_no .= " <a href='$config[base_url]/user_favorites/$user/video/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
    }
}
if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
else $link = $lang['userfav_novideos'];

if($tpage>1)
{
    $nextpage=$page+1;
    $prevpage=$page-1;
    if($vtype!="") $prevlink="<a href='$config[base_url]/user_favorites/$user/video/$vtype/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    else $prevlink="<a href='$config[base_url]/user_favorites/$user/video/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>"; 
    
    if($vtype!="") $nextlink="<a href='$config[base_url]/user_favorites/$user/video/$vtype/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    else $nextlink="<a href='$config[base_url]/user_favorites/$user/video/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    
    if($page==$tpage) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link;
    elseif($tpage>$page && $page>1) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
    elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
}

$sql="select s.*,v.* from files_video v, fav_video s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.uid='$uid' $qu2v limit $startfrom, $listing_per_page";
$rs = $conn->Execute($sql);
$favorites = $rs->getrows(); 

$smarty->assign('start_num',$start_num);
$smarty->assign('end_num',$startfrom+$rs->recordcount());
$smarty->assign('total',$grandtotal);
$smarty->assign('link',$link);
$smarty->assign('page',$page+0);
$smarty->assign('vids',$favorites);
$rs->Close();

$qv="select v.vtags,s.vid from files_video v, fav_video s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.uid='$uid' $qu2v limit $startfrom, $listing_per_page";
$vtags=tags($qv);
$smarty->assign('vtags',$vtags);
}


if ($config['enable_audio']=="1")
{
//paging audio
if(filter_title($_REQUEST[pagea])=="")
$pagea = 1;
else
$pagea = filter_title($_REQUEST[pagea]);
$sql2="select s.*,v.* from files_audio v, fav_audio s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.uid='$uid' $qu2a";
$rs2 = $conn->Execute($sql2);
$favorites2 = $rs2->getrows(); 
$smarty->assign('total2',count($favorites2));
$totala=count($favorites2);
$grandtotala = $totala;
$tpagea = ceil($totala/$listing_per_page);
if($tpagea==0) $spagea=$tpagea+1;
else $spagea = $tpagea;
$startfroma = ($pagea-1)*$listing_per_page;
$start_numa=$startfroma+1;
$smarty->assign('tpagea',$tpagea);
$page_noa = "";
for($ia=1; $ia<=$tpagea; $ia++)
{
    if($ia==$pagea) $page_noa .= "<span class=\"pag_act\">$ia</span>";
    else 
    {
	if($atype!="") $page_noa .= "<a href='$config[base_url]/user_favorites/$user/audio/$atype/page$ia'> <span class=\"pag\" id=\"pga$ia\"> ".$ia."</span> </a>";
	else $page_noa .= "<a href='$config[base_url]/user_favorites/$user/audio/page$ia'> <span class=\"pag\" id=\"pga$ia\"> ".$ia."</span> </a>";
    }
}
if($page_noa!="") $linka = "$lang[gen_page] $page_noa $lang[gen_pageof]";
else $linka = $lang['userfav_noaudios']; 

if($tpagea>1)
{
    $nextpagea=$pagea+1;
    $prevpagea=$pagea-1;
    
    if($atype!="") $prevlinka="<a href='$config[base_url]/user_favorites/$user/audio/$atype/page$prevpagea'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    else $prevlinka="<a href='$config[base_url]/user_favorites/$user/audio/page$prevpagea'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    
    if($atype!="") $nextlinka="<a href='$config[base_url]/user_favorites/$user/audio/$atype/page$nextpagea'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    else $nextlinka="<a href='$config[base_url]/user_favorites/$user/audio/page$nextpagea'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    
    if($pagea==$tpagea) $linka="$prevlinka&nbsp;&nbsp;&nbsp;".$linka;
    elseif($tpagea>$pagea && $pagea>1) $linka="$prevlinka&nbsp;&nbsp;&nbsp;".$linka."&nbsp;&nbsp;&nbsp;$nextlinka";
    elseif($tpagea>$pagea && $pagea<=1) $linka.="&nbsp;&nbsp;&nbsp;$nextlinka";
}
$sql="select s.*,v.* from files_audio v, fav_audio s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.uid='$uid' $qu2a limit $startfroma, $listing_per_page";
$rsa = $conn->Execute($sql);
$favoritesa = $rsa->getrows(); 

$smarty->assign('start_numa',$start_numa);
$smarty->assign('end_numa',$startfroma+$rsa->recordcount());
$smarty->assign('totala',$grandtotala);
$smarty->assign('linka',$linka);
$smarty->assign('pagea',$pagea+0);
$smarty->assign('auds',$favoritesa);
$rsa->Close();

$qa="select v.vtags,s.vid from files_audio v, fav_audio s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.uid='$uid' $qu2a limit $startfroma, $listing_per_page";
$atags=tags($qa);
$smarty->assign('atags',$atags);
}


if ($config['enable_images']=="1")
{
//paging images
if($_REQUEST[pagei]=="")
$pagei = 1;
else
$pagei = $_REQUEST[pagei];
$sql3="select s.*,v.* from files_image v, fav_image s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.uid='$uid' $qu2i";
$rs3 = $conn->Execute($sql3);
$favorites3 = $rs3->getrows(); 
$smarty->assign('total3',count($favorites3));
$totali=count($favorites3);
$grandtotali = $totali;
$tpagei = ceil($totali/$listing_per_page);
if($tpagei==0) $spagei=$tpagei+1;
else $spagei = $tpagei;
$startfromi = ($pagei-1)*$listing_per_page;
$start_numi=$startfromi+1;
$smarty->assign('tpagei',$tpagei);
$page_noi = "";
for($ii=1; $ii<=$tpagei; $ii++)
{
    if($ii==$pagei) $page_noi .= "<span class=\"pag_act\">$ii</span>";
    else 
    {
	if($itype!="") $page_noi .= "<a href='$config[base_url]/user_favorites/$user/image/$itype/page$ii'> <span class=\"pag\" id=\"pgi$ii\"> ".$ii."</span> </a>";
	else $page_noi .= "<a href='$config[base_url]/user_favorites/$user/image/page$ii'> <span class=\"pag\" id=\"pgi$ii\"> ".$ii."</span> </a>";
    }
}
if($page_noi!="") $linki = "$lang[gen_page] $page_noi $lang[gen_pageof]";
else $linki = $lang['userfav_noimages']; 

if($tpagei>1)
{
    $nextpagei=$pagei+1;
    $prevpagei=$pagei-1;
    if($itype!="") $prevlinki="<a href='$config[base_url]/user_favorites/$user/image/$itype/page$prevpagei'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    else $prevlinki="<a href='$config[base_url]/user_favorites/$user/image/page$prevpagei'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    
    if($itype!="") $nextlinki="<a href='$config[base_url]/user_favorites/$user/image/$itype/page$nextpagei'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    else $nextlinki="<a href='$config[base_url]/user_favorites/$user/image/page$nextpagei'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    
    if($pagei==$tpagei) $linki="$prevlinki&nbsp;&nbsp;&nbsp;".$linki;
    elseif($tpagei>$pagei && $pagei>1) $linki="$prevlinki&nbsp;&nbsp;&nbsp;".$linki."&nbsp;&nbsp;&nbsp;$nextlinki";
    elseif($tpagei>$pagei && $pagei<=1) $linki.="&nbsp;&nbsp;&nbsp;$nextlinki";
}

$sql="select s.*,v.* from files_image v, fav_image s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.uid='$uid' $qu2i limit $startfromi, $listing_per_page";
$rsi = $conn->Execute($sql);
$favoritesi = $rsi->getrows(); 

$smarty->assign('start_numi',$start_numi);
$smarty->assign('end_numi',$startfromi+$rsi->recordcount());
$smarty->assign('totali',$grandtotali);
$smarty->assign('linki',$linki);
$smarty->assign('pagei',$pagei+0);
$smarty->assign('imgs',$favoritesi);
$rsi->Close();

$qi="select v.vtags,s.vid from files_image v, fav_image s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.uid='$uid' $qu2i limit $startfromi, $listing_per_page";
$itags=tags($qi);
$smarty->assign('itags',$itags);
}

set_btn("bhome"); set_sbtn("ufavs"); if ($config[special_characters]=="0") { $ft = $user.$lang['title_userfav']; set_title($user.$lang['title_userfav']); } else { $ft = $un.$lang['title_userfav']; set_title($un.$lang['title_userfav']); }
$smarty->assign('ft', $ft);
$smarty->assign('err',$err);
$smarty->display('main_header.tpl');
$smarty->display('main_fav.tpl');
$smarty->display('footer.tpl');
?>