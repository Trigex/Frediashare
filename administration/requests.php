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
if (isset($_REQUEST['type'])) $type=filter_title($_REQUEST['type']);
if (isset($_REQUEST['show'])) $show=filter_title($_REQUEST['show']);
if (isset($_REQUEST['filter'])) $sort=filter_title($_REQUEST['filter']);
if (isset($_REQUEST['delete'])) $del=filter_title($_REQUEST['delete']);
if (isset($_REQUEST['goact'])) $_REQUEST['goact']=filter_title($_REQUEST['goact']);

if ($_REQUEST['goact']!="" && $err=="")
{
    if ($show == "featured") $tbl = 'request_'. $type .'_F';
    elseif ($show == "inappropriate") $tbl = 'request_'. $type .'_I';
    
    if ( $_SESSION['viewmode'] == 'list' ) { $farr = $_REQUEST['mid']; } elseif ( $_SESSION['viewmode'] == 'grid' ) { $farr = $_REQUEST['gmid']; }
    
    if ($farr=="") $err=$lang['err_msgcompose14']; //nothing selected
    elseif ($_REQUEST['actions']==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected
    if ($err=="")
    {
	if ($_REQUEST['actions'] == $lang['admact_mclose']) //close requests
	{
	    foreach($farr as $value) { $conn->execute("update $tbl set solved='1' where vid='".filter_title($value)."' and solved='0'"); }
	}
	if ($_REQUEST['actions'] == $lang['inbox_itblact6']) //remove requests
	{
	    foreach($farr as $value) { $conn->execute("delete from $tbl where vid='".filter_title($value)."'"); }
	}
	if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
    }
}

if($del!="")
{
    if($show=="featured")
    {
	if ($type=="audio") { $info=key_to_info_audio($del); $vidid=$info[0]; $conn->execute("delete from request_audio_F where vid='$vidid'"); }
	elseif ($type=="image") { $info=key_to_info_image($del); $vidid=$info[0]; $conn->execute("delete from request_image_F where vid='$vidid'"); }
	elseif ($type=="video") { $info=key_to_info($del); $vidid=$info[0]; $conn->execute("delete from request_video_F where vid='$vidid'"); }
	else { illegal_opa(); }
	
	if (mysql_affected_rows()>0) $msg=$lang['admnot_reqdel'];
	else $err=$lang['admerr_req1'];
    }
    elseif($show=="inappropriate")
    {
	if ($type=="audio") { $info=key_to_info_audio($del); $vidid=$info[0]; $conn->execute("delete from request_audio_I where vid='$vidid'"); }
	elseif ($type=="image") { $info=key_to_info_image($del); $vidid=$info[0]; $conn->execute("delete from request_image_I where vid='$vidid'"); }
	elseif ($type=="video") { $info=key_to_info($del); $vidid=$info[0]; $conn->execute("delete from request_video_I where vid='$vidid'"); }
	else { illegal_opa(); }
	
	if (mysql_affected_rows()>0) $msg=$lang['admnot_reqdel'];
	else $err=$lang['admerr_req1'];
    }
    
}
if($show=="featured") 
{ 
    if ($type=="audio") { $tbl="request_audio_F"; $tbl2="files_audio"; }
    elseif ($type=="image") { $tbl="request_image_F"; $tbl2="files_image"; }
    elseif ($type=="video") { $tbl="request_video_F"; $tbl2="files_video"; }
}
elseif($show=="inappropriate") 
{ 
    if ($type=="audio") { $tbl="request_audio_I"; $tbl2="files_audio"; }
    elseif ($type=="image") { $tbl="request_image_I"; $tbl2="files_image"; }
    elseif ($type=="video") { $tbl="request_video_I"; $tbl2="files_video"; }
}
//else { set_sbtn("allv"); }    

if ($sort=="all") { $qu=""; $nq=""; $pagx="&filter=all"; $pag="all"; }
elseif ($sort=="active") { $qu="where solved='0'"; $nq="and s.solved='0'"; $pagx="&filter=active"; $pag="active"; }
elseif ($sort=="closed") { $qu="where solved='1'"; $nq="and s.solved='1'"; $pagx="&filter=closed"; $pag="closed"; }
else { $qu="where solved='0'"; $nq="and s.solved='0'"; }

if ($id!="")
{
    if ($type=="audio") { if (!key_to_info_audio($id)) { $err=$lang['err_audios2']; } }
    elseif ($type=="image") { if (!key_to_info_image($id)) { $err=$lang['err_images2']; } }
    elseif ($type=="video") { if (!key_to_info($id)) { $err=$lang['err_videos2']; } }
    else { illegal_opa(); }
    
    if ($err=="")
    {
        if ($type=="audio") $list=key_to_info_audio($id);
	elseif ($type=="image") $list=key_to_info_image($id);
	elseif ($type=="video") $list=key_to_info($id);

        $title=$list[2]; $smarty->assign('ftitle',$title);
        $descr=$list[4]; $smarty->assign('descr',$descr);
        $tags=$list[3]; $smarty->assign('tags',$tags);
        $vidid=$list[0]; $smarty->assign('vidid',$vidid);
        $is_active=$list[7]; $smarty->assign('is_active',$is_active);
	if ($type=="audio" || $type=="image") { $is_feat=$list[13]; $smarty->assign('is_feat',$is_feat); $iname=$list[12]; $smarty->assign('iname',$iname); }
	elseif ($type=="video") { $is_feat=$list[12]; $smarty->assign('is_feat',$is_feat); }

        $is_type=$list[6]; $smarty->assign('is_type',$is_type);
        $is_inapp=$list[14]; $smarty->assign('is_inapp',$is_inapp);
        $vuid=$list[1];  $smarty->assign('vuid',$vuid);
        $flvname=$list[12]; $smarty->assign('flvname',$flvname);
        $sqlx="select * from $tbl2 where vkey='$id'";
        $rsx=$conn->execute($sqlx);
        $catid=explode(",",$rsx->fields[vcategs]);
        $smarty->assign('catid',$catid);
        $play="yes";
        $smarty->assign('show',$play);

	if ($sort=="all") { $pagx="&filter=all"; $pag="all"; $rq="select * from $tbl where vid='$vidid'"; }
	elseif ($sort=="active") { $pagx="&filter=active"; $pag="active"; $rq="select * from $tbl where vid='$vidid' and solved='0'"; }
	elseif ($sort=="closed") { $pagx="&filter=closed"; $pag="closed"; $rq="select * from $tbl where vid='$vidid' and solved='1'"; }
        else { $qu="where solved='0'"; $rq="select * from $tbl where vid='$vidid'"; }

        $mrq=$conn->execute($rq);
        $reason=$mrq->fields[reason];
        $solved=$mrq->fields[solved];
        $smarty->assign('reason',$reason);
        $smarty->assign('solved',$solved);
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
    else { if ($pag!="") { $tpag="$pag/"; } $page_no .= " <a href='$config[admin_url]/requests/$type/$show/$tpag"."page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> "; }
}
if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
else $link = $lang['admerr_noreq'];

if($tpage>1)
{
    $nextpage=$page+1;
    $prevpage=$page-1;
    if ($pag!="") { $tpag="$pag/"; }
	$prevlink="<a href='$config[admin_url]/requests/$type/$show/$tpag"."page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
	$nextlink="<a href='$config[admin_url]/requests/$type/$show/$tpag"."page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";    
    if($page==$tpage) $link.="$prevlink&nbsp;&nbsp;&nbsp;";
    elseif($tpage>$page && $page>1) $link=$link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
    elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
}
$sql="select s.*,v.* from $tbl2 v, $tbl s where v.vid=s.vid $nq order by v.vtitle limit $startfrom, $listing_per_page";
$rs = $conn->execute($sql);
$vid = $rs->getrows(); 

$smarty->assign('start_num',$start_num);
$smarty->assign('end_num',$startfrom+$rs->recordcount());
$smarty->assign('total',$grandtotal);
$smarty->assign('link',$link);
$smarty->assign('page',$page+0);

if ($type=="audio") { $smarty->assign('auds',$vid); set_btn("adm_audio"); set_sbtn("adm_areq"); }
elseif ($type=="image") { $smarty->assign('imgs',$vid); set_btn("adm_image"); set_sbtn("adm_ireq"); }
elseif ($type=="video") { $smarty->assign('vids',$vid); set_btn("adm_video"); set_sbtn("adm_vreq"); }

$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display('administration/main_header.tpl');

if ($type=="audio") $smarty->display('administration/main_audios.tpl');
elseif ($type=="image") $smarty->display('administration/main_images.tpl');
elseif ($type=="video") $smarty->display('administration/main_videos.tpl');
$smarty->display('administration/main_footer.tpl');
?>