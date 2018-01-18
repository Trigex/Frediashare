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
include('../rating2.php');
check_admin_login();

if (isset($_REQUEST['id'])) $id=filter_title($_REQUEST['id']);
if (isset($_REQUEST['page'])) $_REQUEST['page']=filter_title($_REQUEST['page']);
if (isset($_REQUEST['type'])) $type=filter_title($_REQUEST['type']);
if (isset($_REQUEST['delete'])) $del=filter_title($_REQUEST['delete']);
if (isset($_REQUEST['user'])) $user=filter_title($_REQUEST['user']);
if (isset($_REQUEST['categ'])) $categ=filter_title($_REQUEST['categ']);
if (isset($_REQUEST['timesort'])) $ts=mysql_real_escape_string($_REQUEST['timesort']);
if (isset($_REQUEST['goact'])) $_REQUEST['goact']=filter_title($_REQUEST['goact']);

$tbl="files_image"; $qu="order by vtitle";

if ($_REQUEST['goact']!="" && $err=="")
{
    if ( $_SESSION['viewmode'] == 'list' ) { $farr = $_REQUEST['mid']; } elseif ( $_SESSION['viewmode'] == 'grid' ) { $farr = $_REQUEST['gmid']; }
    
    if ($farr=="") $err=$lang['err_msgcompose14']; //nothing selected
    elseif ($_REQUEST['actions']==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected
    if ($err=="")
    {
	if ($_REQUEST['actions'] == $lang['admact_mfeat']) //feature selected
	{
	    foreach($farr as $value) { $conn->execute("update $tbl set is_featured='yes' where vid='".filter_title($value)."' and is_featured='no'"); }
	}
	if ($_REQUEST['actions'] == $lang['admact_munfeat']) //unfeature selected
	{
	    foreach($farr as $value) { $conn->execute("update $tbl set is_featured='no' where vid='".filter_title($value)."' and is_featured='yes'"); }
	}
	if ($_REQUEST['actions'] == $lang['admact_mact']) //mark active
	{
	    foreach($farr as $value) { $conn->execute("update $tbl set active='1' where vid='".filter_title($value)."' and active='0'"); }
	}
	if ($_REQUEST['actions'] == $lang['admact_minact']) //mark inactive
	{
	    foreach($farr as $value) { $conn->execute("update $tbl set active='0' where vid='".filter_title($value)."' and active='1'"); }
	}
	if ($_REQUEST['actions'] == $lang['admact_mpub']) //mark public
	{
	    foreach($farr as $value) { $conn->execute("update $tbl set vtype='public' where vid='".filter_title($value)."' and vtype='private'"); }
	}
	if ($_REQUEST['actions'] == $lang['admact_mpriv']) //mark private
	{
	    foreach($farr as $value) { $conn->execute("update $tbl set vtype='private' where vid='".filter_title($value)."' and vtype='public'"); }
	}
	if ($_REQUEST['actions'] == $lang['admact_mapp']) //mark appropriate
	{
	    foreach($farr as $value) { $conn->execute("update $tbl set is_inapp='no' where vid='".filter_title($value)."' and is_inapp='yes'"); }
	}
	if ($_REQUEST['actions'] == $lang['admact_minapp']) //mark inappropriate
	{
	    foreach($farr as $value) { $conn->execute("update $tbl set is_inapp='yes' where vid='".filter_title($value)."' and is_inapp='no'"); }
	}
	if ($_REQUEST['actions'] == $lang['admact_mcomm']) //delete comments
	{
	    foreach($farr as $value) 
	    { 
		$conn->execute("delete from comm_img where vid='".filter_title($value)."'"); 
		$tr = $conn->Affected_Rows();
		if ($tr > 0)
		{
		    $conn->execute("update files_image set comments=comments-$tr where vid='".filter_title($value)."'"); 
		    $conn->execute("delete from comm_rates where vid='".filter_title($value)."' and type='image'"); 
		}
	    }
	}
	if ($_REQUEST['actions'] == $lang['admact_mrate']) //delete ratings
	{
	    foreach($farr as $value) { $conn->execute("update $tbl set rate='0', total_votes='0', total_value='0', used_ips='', vote_stats='' where vid='".filter_title($value)."' and rate!='0'"); }
	}
	if ($_REQUEST['actions'] == $lang['admact_mfav']) //reset favorited number
	{
	    foreach($farr as $value) { $conn->execute("update $tbl set vfav='0' where vid='".filter_title($value)."' and vfav!='0'"); }
	}
	if ($_REQUEST['actions'] == $lang['admact_mviews']) //reset views number
	{
	    foreach($farr as $value) { $conn->execute("update $tbl set views='0' where vid='".filter_title($value)."' and views!='0'"); }
	}
	if ($_REQUEST['actions'] == $lang['inbox_itblact6']) //delete selected
	{
	    foreach($farr as $value) 
	    { 
		$r = $conn->execute("select uid from files_image where vid='$value'");
		delete_img($value, $r->fields['uid']);
//		$conn->execute("update pmessages set fimage='0' where fimage='$value'");
//		$conn->execute("update members set files_image=files_image-1 where uid='".$r->fields['uid']."'");
	    }
	}
	if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
    }
}

if($user!="")
{
    $sq="select uid from members where uid='$user'";
    $rq=$conn->execute($sq);
    $userid=$rq->fields[uid];
    $qu="where uid='$userid'";
}
if ($categ!="")
{
    $catg = ereg_replace("_{1,}", " ", $categ);
    $sql="select cid,name from categories where cid='$catg'";
    $rs=$conn->execute($sql);
    if ($rs->recordcount()>0)
    {
	$cid=$rs->fields[cid];
	$cname=$rs->fields[name];
	$smarty->assign('cname',$cname);
	$nq="and v.vcategs like '%$cid%'";
	$qu="where vcategs like '%$cid%' order by vtitle";
    } else { illegal_opa(); }
}
if ($_REQUEST[timesort]!="")                                                                                                                                                                                   
{                                                                                                                                                                                                              
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

if($type!="")
{
    if ($type=="all") { if($user!="") $qu="where uid='$userid' $tq order by vtitle"; elseif($categ!="") $qu="where vcategs like '%$cid%' $tq order by vtitle"; else { $tq1 = str_replace("and", "where", $tq); $qu="$tq1 order by vtitle"; } $pg="all"; }
    elseif ($type=="active") { if($user!="") $qu="where active='1' and uid='$userid' $tq"; elseif($categ!="") $qu="where vcategs like '%$cid%' and active='1' $tq order by vtitle"; else $qu="where active='1' $tq order by vtitle"; $pg="active"; }
    elseif ($type=="comments") { if($user!="") $qu="where uid='$userid' $tq order by comments desc"; elseif($categ!="") $qu="where vcategs like '%$cid%' $tq order by comments desc"; else { $tq1 = str_replace("and", "where", $tq); $qu="$tq1 order by comments desc"; } $pg="comments"; }
    elseif ($type=="date") { if($user!="") $qu="where uid='$userid' $tq order by addtime desc"; elseif($categ!="") $qu="where vcategs like '%$cid%' $tq order by addtime desc"; else { $tq1 = str_replace("and", "where", $tq); $qu="$tq1 order by addtime desc"; } $pg="date"; }
    elseif ($type=="favorited") { if($user!="") $qu="where vfav!='0' and uid='$userid' $tq order by vfav desc"; elseif($categ!="") $qu="where vcategs like '%$cid%' and vfav!='0' $tq order by vfav desc"; else $qu="where vfav!='0' $tq order by vfav desc"; $pg="favorited"; }
    elseif ($type=="featured") { if($user!="") $qu="where is_featured='yes' and uid='$userid' $tq"; elseif($categ!="") $qu="where vcategs like '%$cid%' and is_featured='yes' $tq order by vtitle"; else $qu="where is_featured='yes' $tq order by vtitle"; $pg="featured"; }
    elseif ($type=="inactive") { if($user!="") $qu="where active='0' and uid='$userid' $tq"; elseif($categ!="") $qu="where vcategs like '%$cid%' and active='0' $tq order by vtitle"; else $qu="where active='0' $tq order by vtitle"; $pg="inactive"; }
    elseif ($type=="private") { if($user!="") $qu="where vtype='private' and uid='$userid' $tq"; elseif($categ!="") $qu="where vcategs like '%$cid%' and vtype='private' $tq order by vtitle"; else $qu="where vtype='private' $tq order by vtitle"; $pg="private"; }
    elseif ($type=="public") { if($user!="") $qu="where vtype='public' and uid='$userid' $tq"; elseif($categ!="") $qu="where vcategs like '%$cid%' and vtype='public' $tq order by vtitle"; else $qu="where vtype='public' $tq order by vtitle"; $pg="public"; }
    elseif ($type=="ratings") { if($user!="") $qu="where uid='$userid' $tq order by rate desc"; elseif($categ!="") $qu="where vcategs like '%$cid%' $tq order by rate desc"; else $qu="where rate!='0' $tq order by rate desc"; $pg="ratings"; }
    elseif ($type=="responses") { if($user!="") $qu="where uid='$userid' $tq order by responses desc"; elseif($categ!="") $qu="where vcategs like '%$cid%' $tq order by responses desc"; else $qu="where responses!='0' $tq order by responses desc"; $pg="responses"; }
    elseif ($type=="views") { if($user!="") $qu="where uid='$userid' $tq order by views desc"; elseif($categ!="") $qu="where vcategs like '%$cid%' $tq order by views desc"; else { $tq1 = str_replace("and", "where", $tq);  $qu="$tq1 order by views desc"; } $pg="views"; }
    elseif ($type=="inappropriate") { if($user!="") $qu="where is_inapp='yes' and uid='$userid' $tq"; elseif($categ!="") $qu="where vcategs like '%$cid%' and is_inapp='yes' $tq order by vtitle"; else $qu="where is_inapp='yes' $tq order by vtitle"; $pg="inappropriate"; }
    else { illegal_opa(); }
}

if ($del!="")
{
    if(!key_to_info_image($del)) $err=$lang['err_images2'];
    if($err=="")
    {
	$info=key_to_info_image($del);
	$vidid=$info[0];
	$vuid=$info[1];
	
	$msg=delete_img($vidid,$vuid);
	if ($msg=="yes") { $conn->execute("update members set files_image=files_image-1 where uid='$vuid'"); $msg=$lang['admnot_delete']; }
	else $err=$lang['admerr_delete'];
    }
}

if ($id!="")
{
    if (!key_to_info_image($id)) { $err=$lang['err_images2']; }
    if ($err=="")
    {
	$tbl="files_image";
	$list=key_to_info_image($id);
	$title=$list[2]; $smarty->assign('ftitle',$title);
	$descr=$list[4]; $smarty->assign('descr',$descr);
	$tags=$list[3]; $smarty->assign('tags',$tags);
	$vidid=$list[0]; $smarty->assign('vidid',$vidid);
	$is_active=$list[7]; $smarty->assign('is_active',$is_active);
	$is_feat=$list[13]; $smarty->assign('is_feat',$is_feat);
	$is_type=$list[6]; $smarty->assign('is_type',$is_type);
	$is_inapp=$list[14]; $smarty->assign('is_inapp',$is_inapp);
	$vuid=$list[1];  $smarty->assign('vuid',$vuid);
	$iname=$list[12]; $smarty->assign('iname',$iname);
//	$flvname=$list[12]; $smarty->assign('flvname',$flvname);
	
	$sql="select * from files_image where vkey='$id'";                                                                                                      
	$rs=$conn->execute($sql);                                                                                                                                                         
	$catid=explode(",",$rs->fields[vcategs]);                                                                                                                                         
	$smarty->assign('catid',$catid);
	
	$show="yes";
	$smarty->assign('show',$show);
    }
}

// paging
$listing_per_page = 12;
if($_REQUEST[page]=="")
$page = 1;
else
$page = $_REQUEST[page];
$sql = "SELECT count(*) as total from $tbl $qu limit $listing_per_page";
$ars = $conn->Execute($sql);
$total = $ars->fields['total'];
$grandtotal = $total;
$tpage = ceil($total/$listing_per_page);
if($tpage==0) $spage=$tpage+1;
else $spage = $tpage;
$startfrom = ($page-1)*$listing_per_page;
$start_num=$startfrom+1;
$page_no = ""; $smarty->assign('tpage',$tpage);
for($i=1; $i<=$tpage; $i++)
{
    if($i==$page) $page_no .= "<span class=\"pag_act\">$i</span>";
    else 
    {
	if ($type!="") 
	{ 
	    if($user!="") $page_no .= " <a href='$config[admin_url]/imageu/$user/$pg$tstr/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
	    elseif($categ!="") $page_no .= " <a href='$config[admin_url]/imagec/$categ/$pg$tstr/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
	    else $page_no .= " <a href='$config[admin_url]/images/$pg$tstr/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
	}
	else 
	{ 
	    if($user!="") $page_no .= " <a href='$config[admin_url]/imageu/$user$tstr/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
	    elseif($categ!="") $page_no .= " <a href='$config[admin_url]/imagec/$categ$tstr/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
	    else $page_no .= " <a href='$config[admin_url]/images$tstr/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
	}
    }
}
if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
else $link = $lang['adm_noimages'];

if($tpage>1)
{
    $nextpage=$page+1;
    $prevpage=$page-1;
    if ($type!="") 
    { 
	if($user!="") $prevlink="<a href='$config[admin_url]/imageu/$user/$pg$tstr/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>"; 	
	elseif($categ!="") $prevlink="<a href='$config[admin_url]/imagec/$categ/$pg$tstr/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>"; 	
	else $prevlink="<a href='$config[admin_url]/images/$pg$tstr/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>"; 	
    }
    else 
    { 
	if($user!="") $prevlink="<a href='$config[admin_url]/imageu/$user$tstr/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>"; 	
	elseif($categ!="") $prevlink="<a href='$config[admin_url]/imagec/$categ$tstr/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>"; 	
	else $prevlink="<a href='$config[admin_url]/images$tstr/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>"; 
    }


    if ($type!="") 
    { 
	if($user!="") $nextlink="<a href='$config[admin_url]/imageu/$user/$pg$tstr/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>"; 	
	elseif($categ!="") $nextlink="<a href='$config[admin_url]/imagec/$categ/$pg$tstr/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
	else $nextlink="<a href='$config[admin_url]/images/$pg$tstr/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    }
    else 
    { 
	if($user!="") $nextlink="<a href='$config[admin_url]/imageu/$user$tstr/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
	elseif($categ!="") $nextlink="<a href='$config[admin_url]/imagec/$categ$tstr/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
	else $nextlink="<a href='$config[admin_url]/images$tstr/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    }
    
    if($page==$tpage) $link.="$prevlink&nbsp;&nbsp;&nbsp;";
    elseif($tpage>$page && $page>1) $link=$link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
    elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
}

$sql="SELECT * from $tbl $qu limit $startfrom, $listing_per_page";

$rs = $conn->Execute($sql);
$total = $rs->recordcount()+0;
$vid = $rs->getrows(); 
$smarty->assign('start_num',$start_num);
$smarty->assign('end_num',$startfrom+$rs->recordcount());
$smarty->assign('total',$grandtotal);
$smarty->assign('link',$link);
$smarty->assign('page',$page+0);
$smarty->assign('imgs',$vid);

set_btn("adm_image"); set_sbtn("alli"); $smarty->assign('is_admin', '1');
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display('administration/main_header.tpl');
$smarty->display('administration/main_images.tpl');
$smarty->display('administration/main_footer.tpl');
?>