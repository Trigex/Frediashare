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
$config['section']="audio";
$smarty->assign('section',$config[section]);
include('rating2.php');

if ( isset ( $_REQUEST['type'] ) ) $_REQUEST['type'] = filter_descr ( $_REQUEST['type'] );
if ( isset ( $_REQUEST['user'] ) ) $_REQUEST['user'] = filter_descr ( $_REQUEST['user'] );
if ( isset ( $_REQUEST['category'] ) ) $_REQUEST['category'] = filter_descr ( $_REQUEST['category'] );
if ( isset ( $_REQUEST['timesort'] ) ) $_REQUEST['timesort'] = filter_descr ( $_REQUEST['timesort'] );
if ( isset ( $_REQUEST['page'] ) ) $_REQUEST['page'] = filter_descr ( $_REQUEST['page'] );
$smarty->assign('dmenu', 'myfiles');
if ($config['enable_audio']=="0") { header("Location: $config[base_url]/login"); exit; }
if (($_SESSION[UID]=="") && $config[guests_audio_view]=="0") { header("Location: $config[base_url]/login?next=audios"); exit; }
if (($_SESSION[UID]=="") && ($_REQUEST[type]!="" && $config[guests_file_sorting]=="0") && $_REQUEST['category'] == '') { header("Location: $config[base_url]/login?next=audios/$_REQUEST[type]"); exit; }
if (($_SESSION[UID]=="") && ($_REQUEST[type]!="" && $config[guests_file_sorting]=="0") && $_REQUEST['category'] != '') { header("Location: $config[base_url]/login?next=categories/audio/$_REQUEST[category]/recent"); exit; }
check_active();
$active = "and active='1' and is_inapp='no'";
$qu="";

if (filter_descr($_REQUEST[user])!="")
{
    if ($config[guests_profile_view] !="1") { check_login('user_audios/'.$_REQUEST['user']); }
    if ( $config['enable_channels'] == '1' ) { header("Location: $config[base_url]/user/$_REQUEST[user]&view=audios"); exit; }
    $user=filter_descr($_REQUEST[user]);
    if ($config[special_characters]=="0") $sql="select uid from members where (username='$user') and (is_active='1')";
    elseif ($config[special_characters]=="1") $sql="select uid from members where (uid='$user') and (is_active='1')";
    $rs=$conn->execute($sql);
    if ($rs->recordcount()>0)
    {
	$uid=$rs->fields[uid];
	$qu="and uid='$uid'";
	if ($uid==$_SESSION[UID]) $own="1";
    }
    else { illegal_op(); }
    $rs->Close();
}
if (filter_descr($_REQUEST[category])!="")
{
    if ($config[guests_categories_view]!="1" && $_SESSION[UID]=="") { header("Location: $config[base_url]/login?next=categories/audio/$_REQUEST[category]/recent"); exit; }
    $categ=filter_descr($_REQUEST[category]);
    $catg = ereg_replace("_{1,}", " ", $categ);
    if ($config[special_characters]=="0") $sql="select cid,name from categories where (name='$catg') and (active='1')";
    elseif ($config[special_characters]=="1") $sql="select cid,name from categories where (cid='$categ') and (active='1')";
    $rs=$conn->execute($sql);
    $cname=$rs->fields[name]; $smarty->assign('cname',$cname);
    if ($rs->recordcount()>0)
    {
	$cid=$rs->fields[cid];
	$qu="and vcategs like '%$cid%'";
    } else { illegal_op(); }
    $rs->Close();
}

$type="mr"; $cat="recent"; $cat1=$lang['mostrecent'];
$que="order by addtime desc"; 
$smarty->assign('type',$type); 

if (filter_descr($_REQUEST[type])=="most_played") { $type="mv"; $cat="most_played"; $cat1=$lang['mostvieweda']; $que="and views!='0' order by views desc"; $smarty->assign('type',$type); } 
if (filter_descr($_REQUEST[type])=="featured") { $type="rf"; $cat="featured"; $cat1=$lang['recfeatured']; $que="and is_featured='yes' order by addtime desc"; $smarty->assign('type',$type); } 
if (filter_descr($_REQUEST[type])=="most_commented" && $config[file_comments]=="1") { $type="md"; $cat="most_commented"; $cat1=$lang['mostcomm']; $que="and comments!='0' order by comments desc"; $smarty->assign('type',$type); } elseif (filter_descr($_REQUEST[type])=="most_discussed" && $config[file_comments]=="0") { illegal_op(); }
if (filter_descr($_REQUEST[type])=="most_responded" && $config[file_responses]=="1") { $type="mre"; $cat="most_responded"; $cat1=$lang['fresp_txt28']; $que="and responses!='0' order by responses desc"; $smarty->assign('type',$type); } elseif (filter_descr($_REQUEST[type])=="most_responded" && $config[file_responses]=="0") { illegal_op(); }
if (filter_descr($_REQUEST[type])=="top_favorites") { $type="tf"; $cat="top_favorites"; $cat1=$lang['topfav']; $que="and vfav!='0' order by vfav desc"; $smarty->assign('type',$type); } 
if (filter_descr($_REQUEST[type])=="top_rated" && $config[file_ratings]=="1") { $type="tr"; $cat="top_rated"; $cat1=$lang['toprated']; $que="and rate!='0' order by rate desc"; $smarty->assign('type',$type); } elseif (filter_descr($_REQUEST[type])=="top_rated" && $config[file_ratings]=="0") { illegal_op(); }
if (filter_descr($_REQUEST[type])=="random") { $type="ra"; $cat="random"; $cat1=$lang['random']; $que="order by rand()"; $smarty->assign('type',$type); } 

if (filter_descr($_REQUEST[timesort])!="")
{
    $ts=filter_descr($_REQUEST[timesort]);
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
$listing_per_page = $config[paging_audio];
if(filter_title($_REQUEST[page])=="")
$page = 1;
else
$page = filter_title($_REQUEST[page]);

//friend check
$sql="select * from friends where (uid='$uid') and (fname='$_SESSION[USERNAME]') and (is_active='1')";
$frs=$conn->execute($sql);

if ($frs->recordcount()>0) { $friend="yes"; $sql = "SELECT count(*) as total from files_audio where active='1' $tq $qu $que limit $listing_per_page"; }
elseif (($uid==$_SESSION[UID]) && $uid!="") { $sql = "SELECT count(*) as total from files_audio where active='1' $tq $qu $que limit $listing_per_page"; }
else { $sql = "SELECT count(*) as total from files_audio where vtype='public' $active $tq $qu $que limit $listing_per_page"; }
$frs->Close();

$ars = $conn->Execute($sql);
$total = $ars->fields['total'];
$ars->Close();
$grandtotal = $total;
$tpage = ceil($total/$listing_per_page);
if($tpage==0) $spage=$tpage+1;
else $spage = $tpage;
$startfrom = ($page-1)*$listing_per_page;
$start_num=$startfrom+1;
$page_no = "";
$smarty->assign('tpage',$tpage);
for($i=1; $i<=$tpage; $i++)
{
    if($i==$page) $page_no .= "<span class=\"pag_act\">$i</span>";
    else 
    {
	if (filter_descr($_REQUEST[user])!="") { $page_no .= " <a href='$config[base_url]/user_audios/$user/$cat$tstr/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> "; }	
	elseif (filter_descr($_REQUEST[category])!="") { $page_no .= " <a href='$config[base_url]/categories/audio/$categ/$cat$tstr/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> "; }	
	else { $page_no .= " <a href='$config[base_url]/audios/$cat$tstr/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> "; }
    }
}
if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
else $link = $lang['audios_none'];

if($tpage>1)
{
    $nextpage=$page+1;
    $prevpage=$page-1;
    if (filter_descr($_REQUEST[user])!="") { $prevlink="<a href='$config[base_url]/user_audios/$user/$cat$tstr/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>"; }
    elseif (filter_descr($_REQUEST[category])!="") { $prevlink="<a href='$config[base_url]/categories/audio/$categ/$cat$tstr/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>"; }    
    else { $prevlink="<a href='$config[base_url]/audios/$cat$tstr/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>"; }
    
    if (filter_descr($_REQUEST[user])!="") { $nextlink="<a href='$config[base_url]/user_audios/$user/$cat$tstr/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>"; }    
    elseif (filter_descr($_REQUEST[category])!="") { $nextlink="<a href='$config[base_url]/categories/audio/$categ/$cat$tstr/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>"; }    
    else { $nextlink="<a href='$config[base_url]/audios/$cat$tstr/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>"; }
    
    if($page==$tpage) $link.="$prevlink&nbsp;&nbsp;&nbsp;";
    elseif($tpage>$page && $page>1) $link=$link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
    elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
}
//get categories
$csql="select * from categories where active='1' and audio_uploads='yes' order by name asc";
$r1=$conn->execute($csql);
$smarty->assign('categs',$r1->getrows());
$result = mysql_query($csql);
while($row = mysql_fetch_assoc($result))
{
    $title[]=$row[name];
    $tit[] = ereg_replace(" {1,}", "_", $row[name]);
    $smarty->assign('tit',$tit);
}

//friend check
//if ($frs->recordcount()>0) 
if ($friend=="yes") { $sql="SELECT * from files_audio where active='1' $tq $qu $que limit $startfrom, $listing_per_page"; }
else 
{ 
    if ($_SESSION[UID]=="") { $sql="SELECT * from files_audio where vtype='public' $active $tq $qu $que limit $startfrom, $listing_per_page"; }
    else 
    { 
	if ($own=="1") { $active="active='1'"; $sql="SELECT * from files_audio where $active $tq $qu $que limit $startfrom, $listing_per_page";  }
	else $sql="SELECT * from files_audio where vtype='public' $active $tq $qu $que limit $startfrom, $listing_per_page"; 
    }
}
$asql="select vtags from files_audio where vtype='public' and active='1' and is_inapp='no' $tq $qu $que limit $startfrom, $listing_per_page";
$atags = tags($asql);
$smarty->assign('atags',$atags);

$rs = $conn->Execute($sql);
$auds = $rs->getrows(); 

$smarty->assign('start_num',$start_num);
$smarty->assign('end_num',$startfrom+$rs->recordcount());
$rs->Close();
$smarty->assign('total',$total);
$smarty->assign('link',$link);
$smarty->assign('page',$page+0);
$smarty->assign('auds',$auds);

$config[section]="audio";
set_btn("baudio"); set_sbtn("baudio"); set_title($cat1.$lang['title_viewaudios']);
$smarty->display('main_header.tpl');
$smarty->display('main_audios.tpl');
$smarty->display('footer.tpl');
?>