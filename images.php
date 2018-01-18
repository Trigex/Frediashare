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
$config[section]="image";
$smarty->assign('section',$config[section]);
include('rating2.php');

if ( isset ( $_REQUEST['type'] ) ) $_REQUEST['type'] = filter_descr ( $_REQUEST['type'] );
if ( isset ( $_REQUEST['user'] ) ) $_REQUEST['user'] = filter_descr ( $_REQUEST['user'] );
if ( isset ( $_REQUEST['category'] ) ) $_REQUEST['category'] = filter_descr ( $_REQUEST['category'] );
if ( isset ( $_REQUEST['timesort'] ) ) $_REQUEST['timesort'] = filter_descr ( $_REQUEST['timesort'] );
if ( isset ( $_REQUEST['page'] ) ) $_REQUEST['page'] = filter_title ( $_REQUEST['page'] );
$smarty->assign('dmenu', 'myfiles');
if ($config['enable_images']=="0") { header("Location: $config[base_url]/login"); exit; }
if (($_SESSION[UID]=="") && $config[guests_image_view]=="0") { header("Location: $config[base_url]/login?next=images"); exit; }
if (($_SESSION[UID]=="") && ($_REQUEST[type]!="" && $config[guests_file_sorting]=="0") && $_REQUEST['category'] == '') { header("Location: $config[base_url]/login?next=images/$_REQUEST[type]"); exit; }
if (($_SESSION[UID]=="") && ($_REQUEST[type]!="" && $config[guests_file_sorting]=="0") && $_REQUEST['category'] != '') { header("Location: $config[base_url]/login?next=categories/image/$_REQUEST[category]/recent"); exit; }
check_active();
$active = "and active='1' and is_inapp='no'";
$qu="";
//$_REQUEST = array_map('filter_title', $_REQUEST);

if ($_REQUEST[user]!="")
{
    if ($config[guests_profile_view]!="1") { check_login('user_images/'.$_REQUEST['user']); }
    if ( $config['enable_channels'] == '1' ) { header("Location: $config[base_url]/user/$_REQUEST[user]&view=images"); exit; }
    $user=$_REQUEST[user];
    if ($config[special_characters]=="0") $sql="select uid from members where username='$user' and is_active='1'";
    elseif ($config[special_characters]=="1") $sql="select uid from members where uid='$user' and is_active='1'";
    $rs=$conn->execute($sql);
    if ($rs->recordcount()>0)
    {
	$uid=$rs->fields[uid];
	$qu="and uid='$uid'";
	if ($uid==$_SESSION[UID]) $own="1";
	$rs->Close();
    }
    else { illegal_op(); }
}
if ($_REQUEST[category]!="")
{
    if ($config[guests_categories_view]!="1" && $_SESSION[UID]=="") { header("Location: $config[base_url]/login?next=categories/image/$_REQUEST[category]/recent"); exit; }
    $categ=$_REQUEST[category];
    $catg = ereg_replace("_{1,}", " ", $categ);
    if ($config[special_characters]=="0") $sql="select cid,name from categories where name='$catg' and active='1'";
    elseif ($config[special_characters]=="1") $sql="select cid,name from categories where cid='$_REQUEST[category]' and active='1'";
    $rs=$conn->execute($sql);
    $cname=$rs->fields[name]; $smarty->assign('cname',$cname);
    if ($rs->recordcount()>0)
    {
	$cid=$rs->fields[cid];
	$qu="and vcategs like '%$cid%'";
	$rs->Close();
    } else { illegal_op(); }
}

$type="mr"; $cat="recent"; $cat1=$lang['mostrecent'];
$que="order by addtime desc"; 
$smarty->assign('type',$type); 

if ($_REQUEST[type]=="most_viewed") { $type="mv"; $cat="most_viewed"; $cat1=$lang['mostviewed']; $que="and views!='0' order by views desc"; $smarty->assign('type',$type); } 
if ($_REQUEST[type]=="featured") { $type="rf"; $cat="featured"; $cat1=$lang['recfeatured']; $que="and is_featured='yes' order by addtime desc"; $smarty->assign('type',$type); } 
if ($_REQUEST[type]=="most_commented" && $config[file_comments]=="1") { $type="md"; $cat="most_commented"; $cat1=$lang['mostcomm']; $que="and comments!='0' order by comments desc"; $smarty->assign('type',$type); } elseif ($_REQUEST[type]=="most_discussed" && $config[file_comments]=="0") { illegal_op(); }
if ($_REQUEST[type]=="most_responded" && $config[file_responses]=="1") { $type="mre"; $cat="most_responded"; $cat1=$lang['fresp_txt28']; $que="and responses!='0' order by responses desc"; $smarty->assign('type',$type); } elseif ($_REQUEST[type]=="most_responded" && $config[file_responses]=="0") { illegal_op(); }
if ($_REQUEST[type]=="top_favorites") { $type="tf"; $cat="top_favorites"; $cat1=$lang['topfav']; $que="and vfav!='0' order by vfav desc"; $smarty->assign('type',$type); } 
if ($_REQUEST[type]=="top_rated" && $config[file_ratings]=="1") { $type="tr"; $cat="top_rated"; $cat1=$lang['toprated']; $que="and rate!='0' order by rate desc"; $smarty->assign('type',$type); } elseif ($_REQUEST[type]=="top_rated" && $config[file_ratings]=="0") { illegal_op(); }
if ($_REQUEST[type]=="random") { $type="ra"; $cat="random"; $cat1=$lang['random']; $que="order by rand()"; $smarty->assign('type',$type); } 

if ($_REQUEST[timesort]!="")
{
    $ts=$_REQUEST[timesort];
    $tstr="/$ts";
    if ($ts=="all_time") { $tq=""; }
    elseif ($ts=="today") { $tq="and adddate = CURDATE()"; }
    elseif ($ts=="this_week") { $tq="and YEARweek(adddate) = YEARweek(CURRENT_DATE)"; }
    elseif ($ts=="this_month") { $tq="and SUBSTRING(adddate FROM 1 FOR 7) = SUBSTRING(CURRENT_DATE - INTERVAL 0 MONTH FROM 1 FOR 7)"; }
    elseif ($ts=="this_year") { $tq="and YEAR(adddate) = YEAR(CURRENT_DATE)"; }
    elseif ($ts=="last_week") { $tq="and YEARweek(adddate) = YEARweek(CURRENT_DATE - INTERVAL 7 DAY)"; }
    elseif ($ts=="last_month") { $tq="and SUBSTRING(adddate FROM 1 FOR 7) = SUBSTRING(CURRENT_DATE - INTERVAL 1 MONTH FROM 1 FOR 7)"; }
    elseif ($ts=="last_year") { $tq="and YEAR(adddate) = YEAR(CURRENT_DATE - INTERVAL 1 YEAR)"; }
    else { illegal_op(); }
} else $tstr="";

// paging
$listing_per_page = $config[paging_images];
if($_REQUEST[page]=="")
$page = 1;
else
$page = $_REQUEST[page];

//friend check
$sql="select * from friends where uid='$uid' and fname='$_SESSION[USERNAME]' and is_active='1'";
$frs=$conn->execute($sql);

if ($frs->recordcount()>0) { $friend="yes"; $sql = "SELECT count(*) as total from files_image where active='1' $tq $qu $que limit $listing_per_page"; }
elseif (($uid==$_SESSION[UID]) && $uid!="") { $sql = "SELECT count(*) as total from files_image where active='1' $tq $qu $que limit $listing_per_page"; }
else { 
$sql = "SELECT count(*) as total from files_image where vtype='public' $active $tq $qu $que limit $listing_per_page"; 
}
$frs->Close();

$ars = $conn->Execute($sql);
$total = $ars->fields['total'];
$grandtotal = $total;
$ars->Close();
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
	if ($_REQUEST[user]!="") { $page_no .= " <a href='$config[base_url]/user_images/$user/$cat$tstr/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> "; }
	elseif ($_REQUEST[category]!="") { $page_no .= " <a href='$config[base_url]/categories/image/$categ/$cat$tstr/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> "; }
	else { $page_no .= " <a href='$config[base_url]/images/$cat$tstr/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> "; }
    }
}
if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
else $link = $lang['images_none'];

if($tpage>1)
{
    $nextpage=$page+1;
    $prevpage=$page-1;
    if ($_REQUEST[user]!="") { $prevlink="<a href='$config[base_url]/user_images/$user/$cat$tstr/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>"; }    
    elseif ($_REQUEST[category]!="") { $prevlink="<a href='$config[base_url]/categories/image/$categ/$cat$tstr/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>"; }    
    else { $prevlink="<a href='$config[base_url]/images/$cat$tstr/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>"; }
    
    if ($_REQUEST[user]!="") { $nextlink="<a href='$config[base_url]/user_images/$user/$cat$tstr/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>"; }
    elseif ($_REQUEST[category]!="") { $nextlink="<a href='$config[base_url]/categories/image/$categ/$cat$tstr/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>"; }    
    else { $nextlink="<a href='$config[base_url]/images/$cat$tstr/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>"; }
    
    if($page==$tpage) $link.="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$prevlink";
    elseif($tpage>$page && $page>1) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
    elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
}
//get categories
$csql="select * from categories where active='1' and image_uploads='yes' order by name asc";
$r1=$conn->execute($csql);
$smarty->assign('categs',$r1->getrows());
$result = mysql_query($csql);
while($row = mysql_fetch_assoc($result))
{
    $title[]=$row[name];
    $tit[] = ereg_replace(" {1,}", "_", $row[name]);
    $smarty->assign('tit',$tit);
}

//friend check + image tags
if ($friend=="yes") { $sql="SELECT * from files_image where active='1' $tq $qu $que limit $startfrom, $listing_per_page"; }
else 
{ 
    if ($_SESSION[UID]=="") { $sql="SELECT * from files_image where vtype='public' $active $tq $qu $que limit $startfrom, $listing_per_page"; }
    else 
    { 
	if ($own=="1") { $active="active='1'"; $sql="SELECT * from files_image where $active $tq $qu $que limit $startfrom, $listing_per_page";  }
	else $sql="SELECT * from files_image where vtype='public' $active $tq $qu $que limit $startfrom, $listing_per_page"; 
    }
}
$isql="select vtags from files_image where vtype='public' and active='1' and is_inapp='no' $tq $qu $que limit $startfrom, $listing_per_page";
$itags = tags($isql);
$smarty->assign('itags',$itags);

$rs = $conn->Execute($sql);
$imgs = $rs->getrows(); 

$smarty->assign('start_num',$start_num);
$smarty->assign('end_num',$startfrom+$rs->recordcount());
$rs->Close();
$smarty->assign('total',$total);
$smarty->assign('link',$link);
$smarty->assign('page',$page+0);
$smarty->assign('imgs',$imgs);

set_btn("bimage"); set_sbtn("bimage"); set_title($cat1.$lang['title_viewimages']);
$smarty->display('main_header.tpl');
$smarty->display('main_images.tpl');
$smarty->display('footer.tpl');
?>