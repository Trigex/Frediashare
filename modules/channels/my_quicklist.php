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
include('../../rating2.php');
//check_login('my_quicklist');

$ip = mysql_real_escape_string ( $_SERVER['REMOTE_ADDR'] ) ;
if ( $_SESSION['UID'] != '' ) $logged_in_ip = mysql_real_escape_string ( $_SERVER['REMOTE_ADDR'] ); else $logged_in_ip = '';

if ( isset ( $_REQUEST['action'] ) ) $_REQUEST['action'] = filter_descr ( $_REQUEST['action'] );
if ( isset ( $_REQUEST['goact'] ) ) $_REQUEST['goact'] = filter_descr ( $_REQUEST['goact'] );
if ( isset ( $_REQUEST['agoact'] ) ) $_REQUEST['agoact'] = filter_descr ( $_REQUEST['agoact'] );
if ( isset ( $_REQUEST['igoact'] ) ) $_REQUEST['igoact'] = filter_descr ( $_REQUEST['igoact'] );
if ( isset ( $_REQUEST['vactions'] ) ) $_REQUEST['vactions'] = filter_descr ( $_REQUEST['vactions'] );
if ( isset ( $_REQUEST['aactions'] ) ) $_REQUEST['aactions'] = filter_descr ( $_REQUEST['aactions'] );
if ( isset ( $_REQUEST['iactions'] ) ) $_REQUEST['iactions'] = filter_descr ( $_REQUEST['iactions'] );
if ( isset ( $_REQUEST['page'] ) ) $_REQUEST['page'] = filter_title ( $_REQUEST['page'] );
if ( isset ( $_REQUEST['pagea'] ) ) $_REQUEST['pagea'] = filter_title ( $_REQUEST['pagea'] );
if ( isset ( $_REQUEST['pagei'] ) ) $_REQUEST['pagei'] = filter_title ( $_REQUEST['pagei'] );
if ( isset ( $_REQUEST['type'] ) ) $_REQUEST['type'] = filter_title ( $_REQUEST['type'] );
$smarty->assign('dmenu', 'myfav');

//import quicklists
if ( ( $_GET['type'] == 'import_audio' or $_GET['type'] == 'all' ) and $config['enable_audio'] == '1' ) {
    $ru = $conn->execute("select vid from quicklist_audio where uid='0' and quicklist_ip='$logged_in_ip';");
    $ruid = $ru->getrows();
    foreach ( $ruid as $x ) {
	$vu = $conn->execute("select uid from files_audio where vid='".$x[0]."';");
	$vuid = $vu->fields['uid'];
	$conn->execute("update ignore quicklist_audio set uid='".$_SESSION['UID']."', from_uid='".$vuid."' where uid='0' and from_uid='0' and quicklist_ip='".$logged_in_ip."';");
    }
    //if ( $conn->Affected_Rows() > 0 ) { $conn->execute("delete from quicklist_audio where uid='0' and from_uid='0' and quicklist_ip='".$logged_in_ip."';"); }
    $conn->execute("delete from quicklist_audio where uid='0' and from_uid='0' and quicklist_ip='".$logged_in_ip."';");
}
if ( ( $_GET['type'] == 'import_image' or $_GET['type'] == 'all' ) and $config['enable_images'] == '1' ) {
    $ru = $conn->execute("select vid from quicklist_image where uid='0' and quicklist_ip='$logged_in_ip';");
    $ruid = $ru->getrows();
    foreach ( $ruid as $x ) {
	$vu = $conn->execute("select uid from files_image where vid='".$x[0]."';");
	$vuid = $vu->fields['uid'];
	$conn->execute("update ignore quicklist_image set uid='".$_SESSION['UID']."', from_uid='".$vuid."' where uid='0' and from_uid='0' and quicklist_ip='".$logged_in_ip."';");
    }
    //if ( $conn->Affected_Rows() > 0 ) { $conn->execute("delete from quicklist_image where uid='0' and from_uid='0' and quicklist_ip='".$logged_in_ip."';"); }
    $conn->execute("delete from quicklist_image where uid='0' and from_uid='0' and quicklist_ip='".$logged_in_ip."';");
} 
if ( ( $_GET['type'] == 'import_video' or $_GET['type'] == 'all' ) and $config['enable_videos'] == '1' ) {
    $ru = $conn->execute("select vid from quicklist_video where uid='0' and quicklist_ip='$logged_in_ip';");
    $ruid = $ru->getrows();
    foreach ( $ruid as $x ) {
	$vu = $conn->execute("select uid from files_video where vid='".$x[0]."';");
	$vuid = $vu->fields['uid'];
	$conn->execute("update ignore quicklist_video set uid='".$_SESSION['UID']."', from_uid='".$vuid."' where uid='0' and from_uid='0' and quicklist_ip='".$logged_in_ip."';");
    }
    //if ( $conn->Affected_Rows() > 0 ) { $conn->execute("delete from quicklist_video where uid='0' and from_uid='0' and quicklist_ip='".$logged_in_ip."';"); }
    $conn->execute("delete from quicklist_video where uid='0' and from_uid='0' and quicklist_ip='".$logged_in_ip."';");
}

if ( $_GET['type'] == 'ignore' ) { session_register('ignore_quicklist'); $_SESSION['ignore_quicklist'] = '1'; exit; }

//related quicklist
if ( $logged_in_ip != '' and $_SESSION['UID'] != '' ) { 
    $vt = $conn->execute("select count(*) as vtotal from quicklist_video where uid='0' and quicklist_ip='".$logged_in_ip."';");
    $it = $conn->execute("select count(*) as itotal from quicklist_image where uid='0' and quicklist_ip='".$logged_in_ip."';");
    $at = $conn->execute("select count(*) as atotal from quicklist_audio where uid='0' and quicklist_ip='".$logged_in_ip."';");
    $vtotal1 = $vt->fields['vtotal'];
    $itotal1 = $it->fields['itotal'];
    $atotal1 = $at->fields['atotal'];
    $qtotal1 = $vtotal1 + $itotal1 + $atotal1;
    
    if ( $qtotal1 > 0 ) {
    $my_msg = "
    <div id=\"mainqdiv\">
    <table width=\"100%\" cellpadding=\"5\" cellspacing=\"0\" border=\"0\" style=\"border: 2px solid green;\"><tr><td>
    <div><span class=\"normal\">".$lang['qlist_txt16']." <a href=\"javascript:void(0)\" onclick=\"ReverseContentDisplay('qd');\">".$lang['qlist_txt17']."</a>".$lang['qlist_txt18']."</span></div> 
    <div id=\"qd\" style=\"display: none;\" class=\"pt10\">";
    if ( $config['enable_audio'] == '1' and $atotal1 > 0 ) $my_msg.="
    <div class=\"p2\">".$atotal1.$lang['qlist_txt19'].$logged_in_ip." - <a href=\"javascript:void(0)\" onclick=\"location.href='".$config['base_url']."/my_quicklist/import_audio_quicklist'\">".$lang['qlist_txt22']."</a> ".$lang['qlist_txt25']."</div>";
    if ( $config['enable_images'] == '1' and $itotal1 > 0 ) $my_msg.="
    <div class=\"p2\">".$itotal1.$lang['qlist_txt20'].$logged_in_ip." - <a href=\"javascript:void(0)\" onclick=\"location.href='".$config['base_url']."/my_quicklist/import_image_quicklist'\">".$lang['qlist_txt23']."</a> ".$lang['qlist_txt25']."</div>";
    if ( $config['enable_videos'] == '1' and $vtotal1 > 0 ) $my_msg.="
    <div class=\"p2\">".$vtotal1.$lang['qlist_txt21'].$logged_in_ip." - <a href=\"javascript:void(0)\" onclick=\"location.href='".$config['base_url']."/my_quicklist/import_video_quicklist'\">".$lang['qlist_txt24']."</a> ".$lang['qlist_txt25']."</div>";
    $my_msg.="
    <div class=\"p5\" style=\"padding-left: 40px;\"><a href=\"javascript:void(0)\" onclick=\"location.href='".$config['base_url']."/my_quicklist/import_quicklist'\">".$lang['qlist_txt26']."</a> - <a href=\"javascript:void(0)\" onclick=\"ignore_quicklist(); HideContent('mainqdiv');\">".$lang['qlist_txt27']."</a></div>
    </div><div id=\"qignore\"></div></td></tr></table></div>";
    } else $my_msg = '';
    $smarty->assign('my_msg', $my_msg);
}

//remove from quicklist
if ($_REQUEST[action]=="delete")
{
    $vid=filter_title($_REQUEST[vid]);
    $aid=filter_title($_REQUEST[aid]);
    $iid=filter_title($_REQUEST[iid]);
    //$listi=key_to_info_image($iid); $iiid=$listi[0];
    
    if ($vid!="" && $config['enable_videos']=="1") 
    {
	$tt=ereg_replace("_{1,}", " ", $vid);
	if ($config[same_title_uploads]=="0") $tq="select vkey from files_video where vtitle='$tt'";
	elseif ($config[same_title_uploads]=="1") $tq="select vkey from files_video where vkey='$vid'";
	$rq=$conn->execute($tq);
	$vid=$rq->fields[vkey];
	
	$listv=key_to_info($vid); 
	$viid=$listv[0]; 
	if ( $_SESSION['UID'] == '' ) $sql="delete from quicklist_video where uid='0' and vid='$viid' and quicklist_ip='$ip';"; 
	else $sql="delete from quicklist_video where uid='$_SESSION[UID]' and vid='$viid'"; 
	$rs=$conn->execute($sql);
	if (mysql_affected_rows()>0)
	    { header("Location: $config[base_url]/my_quicklist/video/confirmation"); exit; }
	else $err=$lang['err_mypl1'];
    }
    if ($aid!="" && $config['enable_audio']=="1") 
    {
	$tt=ereg_replace("_{1,}", " ", $aid);
	if ($config[same_title_uploads]=="0") $tq="select vkey from files_audio where vtitle='$tt'";
	elseif ($config[same_title_uploads]=="1") $tq="select vkey from files_audio where vkey='$aid'";
	$rq=$conn->execute($tq);
	$aid=$rq->fields[vkey];

	$lista=key_to_info_audio($aid);
	$aiid=$lista[0];
	if ( $_SESSION['UID'] == '' ) $sql="delete from quicklist_audio where uid='0' and vid='$aiid' and quicklist_ip='$ip';"; 
	else $sql="delete from quicklist_audio where uid='$_SESSION[UID]' and vid='$aiid'"; 
	$rs=$conn->execute($sql);
	if (mysql_affected_rows()>0)
	    { header("Location: $config[base_url]/my_quicklist/audio/confirmation"); exit; }
	else $err=$lang['err_mypl1'];
    }
    if ($iid!="" && $config['enable_images']=="1") 
    { 
	$tt=ereg_replace("_{1,}", " ", $iid);
	if ($config[same_title_uploads]=="0") $tq="select vkey from files_image where vtitle='$tt'";
	elseif ($config[same_title_uploads]=="1") $tq="select vkey from files_image where vkey='$iid'";
	$rq=$conn->execute($tq);
	$iid=$rq->fields[vkey];
    
    	$listi=key_to_info_image($iid); 
	$iiid=$listi[0];
	if ( $_SESSION['UID'] == '' ) $sql="delete from quicklist_image where uid='0' and vid='$iiid' and quicklist_ip='$ip';"; 
	else $sql="delete from quicklist_image where uid='$_SESSION[UID]' and vid='$iiid'"; 
	$rs=$conn->execute($sql);
	if (mysql_affected_rows()>0)
	    { header("Location: $config[base_url]/my_quicklist/image/confirmation"); exit; }
	else $err=$lang['err_mypl1'];
    }
}
$vtype=filter_title($_REQUEST[vtype]);
if ($vtype=="all" || $vtype=="") { $qu2v="order by s.addtime asc"; }
if ($vtype=="comments") { if ($config[file_comments]=="1") { $qu2v="order by v.comments desc"; } else { illegal_op(); } }
if ($vtype=="responses") { if ($config[file_responses]=="1") { $qu2v="order by v.responses desc"; } else { illegal_op(); } }
if ($vtype=="date") { $qu2v="order by v.adddate desc"; }
if ($vtype=="favorited") { $qu2v="order by v.vfav desc"; }
if ($vtype=="featured") { $qu2v="and v.is_featured='yes' order by v.vtitle asc"; }
if ($vtype=="ratings") { if ($config[file_ratings]=="1") { $qu2v="order by v.rate desc"; } else { illegal_op(); } }
if ($vtype=="views") { $qu2v="order by v.views desc"; }
//if ($vtype=="") { $qu2v="order by s.addtime desc"; }

$itype=filter_title($_REQUEST[itype]);
if ($itype=="all" || $itype=="") { $qu2i="order by s.addtime asc"; }
if ($itype=="comments") { if ($config[file_comments]=="1") { $qu2i="order by v.comments desc"; } else { illegal_op(); } }
if ($itype=="responses") { if ($config[file_responses]=="1") { $qu2i="order by v.responses desc"; } else { illegal_op(); } }
if ($itype=="date") { $qu2i="order by v.adddate desc"; }
if ($itype=="favorited") { $qu2i="order by v.vfav desc"; }
if ($itype=="featured") {$qu2i="and v.is_featured='yes' order by v.vtitle asc"; }
if ($itype=="ratings") { if ($config[file_ratings]=="1") { $qu2i="order by v.rate desc"; } else { illegal_op(); } }
if ($itype=="views") { $qu2i="order by v.views desc"; }

$atype=filter_title($_REQUEST[atype]);
if ($atype=="all" || $atype=="") { $qu2a="order by s.addtime asc"; }
if ($atype=="comments") { if ($config[file_comments]=="1") { $qu2a="order by v.comments desc"; } else { illegal_op(); } }
if ($atype=="responses") { if ($config[file_responses]=="1") { $qu2a="order by v.responses desc"; } else { illegal_op(); } }
if ($atype=="date") { $qu2a="order by v.adddate desc"; }
if ($atype=="favorited") { $qu2a="order by v.vfav desc"; }
if ($atype=="featured") { $qu2a="and v.is_featured='yes' order by v.vtitle asc"; }
if ($atype=="ratings") { if ($config[file_ratings]=="1") { $qu2a="order by v.rate desc"; } else { illegal_op(); } }
if ($atype=="views") { $qu2a="order by v.views desc"; }

// paging video
$listing_per_page = $config[paging_qlist];
if ($config['enable_videos']=="1")
{

if ( $_SESSION['viewmode'] == 'list' ) { 
    $farr = $_REQUEST['vmid']; 
    $sbtn = $_REQUEST['goact'];
    $acts = $_REQUEST['vactions'];
    $plfarr = $_REQUEST['vlpl']; 
} elseif ( $_SESSION['viewmode'] == 'grid' ) { 
    $farr = $_REQUEST['gvmid']; 
    $sbtn = $_REQUEST['goact2'];
    $acts = $_REQUEST['vactions2'];
    $plfarr = $_REQUEST['vgpl']; 
}

if ($sbtn!="" && $err=="")
{
    if ($farr=="") $err=$lang['err_nofilesel']; //no files selected
    elseif ($acts==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected

    if ($err=="")
    {
	if ($acts==$lang['qlist_txt14']) {//add to playlist
            if ( $plfarr == '' ) $err = $lang['plist_txt36'];
            if ( $err == '' ) {
                foreach($farr as $value) {
                    foreach($plfarr as $plvalue) {
                        $fu = $conn->execute("select uid from files_video where vid='".filter_title($value)."'"); $fuid = $fu->fields['uid'];
                        $conn->execute("insert into playlist_files set ptype='video', vid='".filter_title($value)."', uid='".$_SESSION['UID']."', vkey='".filter_title($plvalue)."';");
                    }
                }
            }
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
        }
        if ($acts==$lang['inbox_itblact6']) //delete selected
        {
            foreach($farr as $value) { 
        	if ( $_SESSION['UID'] == '' ) $conn->execute("delete from quicklist_video where vid='".filter_title($value)."' and uid='0' and quicklist_ip='".$ip."';"); 
        	else $conn->execute("delete from quicklist_video where vid='".filter_title($value)."' and uid='$_SESSION[UID]'"); 
    	    }
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['qlist_txt28'];
        }
        if ($acts==$lang['act_addfav']) //add to favorites
        {
    	    check_login('my_quicklist');
            foreach($farr as $value) { 
        	$fu = $conn->execute("select uid from files_video where vid='".filter_title($value)."'"); $fuid = $fu->fields['uid'];
        	$conn->execute("insert into fav_video set vid='".filter_title($value)."', uid='$_SESSION[UID]', from_uid='$fuid';"); 
        	if ( $conn->Affected_Rows() > 0 ) $conn->execute("update files_video set vfav=vfav+1 where vid='".filter_title($value)."'");
    	    }
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
        }
    }
    
} 

if($_REQUEST[page]=="")
$page = 1;
else
$page = filter_title($_REQUEST[page]);
if ( $_SESSION['UID'] == '' ) $sql1="select s.*,v.* from files_video v, quicklist_video s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.uid='0' and s.quicklist_ip='$ip' $qu2v";
else $sql1="select s.*,v.* from files_video v, quicklist_video s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.uid='$_SESSION[UID]' $qu2v";
$rs1 = $conn->Execute($sql1);
$plist1 = $rs1->getrows(); 
$smarty->assign('total1', count($plist1));
$total=count($plist1);
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
	if($vtype!="") $page_no .= " <a href='$config[base_url]/my_quicklist/video/$vtype/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
	else $page_no .= " <a href='$config[base_url]/my_quicklist/video/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
    }
}
if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
else $link = $lang['mypl_videonone'];

if($tpage>1)
{
    $nextpage=$page+1;
    $prevpage=$page-1;
    if($vtype!="") $prevlink="<a href='$config[base_url]/my_quicklist/video/$vtype/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    else $prevlink="<a href='$config[base_url]/my_quicklist/video/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    
    if($vtype!="") $nextlink="<a href='$config[base_url]/my_quicklist/video/$vtype/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    else $nextlink="<a href='$config[base_url]/my_quicklist/video/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    if($page==$tpage) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link;
    elseif($tpage>$page && $page>1) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
    elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
}
if ( $_SESSION['UID'] == '' ) $sql="select s.*,v.* from files_video v, quicklist_video s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.uid='0' and s.quicklist_ip='$ip' $qu2v limit $startfrom, $listing_per_page";
else $sql="select s.*,v.* from files_video v, quicklist_video s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.uid='$_SESSION[UID]' $qu2v limit $startfrom, $listing_per_page";
$rs = $conn->Execute($sql);
$plist = $rs->getrows(); 

$smarty->assign('start_num',$start_num);
$smarty->assign('end_num',$startfrom+$rs->recordcount());
$smarty->assign('total',$total);
$smarty->assign('link',$link);
$smarty->assign('page',$page+0);
$smarty->assign('vids',$plist);

if ( $_SESSION['UID'] == '' ) $qv="select v.vtags,s.vid from files_video v, quicklist_video s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.uid='0' and s.quicklist_ip='$ip' $qu2v limit $startfrom, $listing_per_page";
else $qv="select v.vtags,s.vid from files_video v, quicklist_video s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.uid='$_SESSION[UID]' $qu2v limit $startfrom, $listing_per_page";
$vtags=tags($qv);
$smarty->assign('vtags',$vtags);
}


if ($config['enable_audio']=="1")
{

if ( $_SESSION['viewmode'] == 'list' ) { 
    $afarr = $_REQUEST['amid']; 
    $asbtn = $_REQUEST['agoact'];
    $aacts = $_REQUEST['aactions'];
    $plfarr = $_REQUEST['alpl'];
} elseif ( $_SESSION['viewmode'] == 'grid' ) { 
    $afarr = $_REQUEST['gamid']; 
    $asbtn = $_REQUEST['agoact2'];
    $aacts = $_REQUEST['aactions2'];
    $plfarr = $_REQUEST['agpl'];
}

if ($asbtn!="" && $err=="")
{
    if ($afarr=="") $err=$lang['err_nofilesel']; //no files selected
    elseif ($aacts==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected
    
    if ($err=="")
    {
	if ($aacts==$lang['qlist_txt14']) {//add to playlist
            if ( $plfarr == '' ) $err = $lang['plist_txt36'];
            if ( $err == '' ) {
                foreach($afarr as $value) {
                    foreach($plfarr as $plvalue) {
                        $fu = $conn->execute("select uid from files_audio where vid='".filter_title($value)."'"); $fuid = $fu->fields['uid'];
                        $conn->execute("insert into playlist_files set ptype='audio', vid='".filter_title($value)."', uid='".$_SESSION['UID']."', vkey='".filter_title($plvalue)."';");
                    }
                }
            }
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
        } 
        if ($aacts==$lang['inbox_itblact6']) //delete selected
        {
            foreach($afarr as $value) { 
        	if ( $_SESSION['UID'] == '' ) $conn->execute("delete from quicklist_audio where vid='".filter_title($value)."' and uid='0' and quicklist_ip='$ip';"); 
        	else $conn->execute("delete from quicklist_audio where vid='".filter_title($value)."' and uid='$_SESSION[UID]'"); 
    	    }
            if (mysql_affected_rows()>0) $msg=$lang['qlist_txt28'];
        }
        if ($aacts==$lang['act_addfav'])
        {
    	    check_login('my_quicklist');
            foreach($afarr as $value) { //add to fav
        	$fu = $conn->execute("select uid from files_audio where vid='".filter_title($value)."'"); $fuid = $fu->fields['uid'];
        	$conn->execute("insert into fav_audio set vid='".filter_title($value)."', uid='$_SESSION[UID]', from_uid='$fuid';"); 
        	if ( $conn->Affected_Rows() > 0 ) $conn->execute("update files_audio set vfav=vfav+1 where vid='".filter_title($value)."'");
    	    }
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
        }
    }
}

// paging audio
if($_REQUEST[pagea]=="")
$pagea = 1;
else
$pagea = filter_title($_REQUEST[pagea]);
if ( $_SESSION['UID'] == '' ) $sql2="select s.*,v.* from files_audio v, quicklist_audio s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.uid='0' and s.quicklist_ip='$ip' $qu2a";
else $sql2="select s.*,v.* from files_audio v, quicklist_audio s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.uid='$_SESSION[UID]' $qu2a";
$rs2 = $conn->Execute($sql2);
$plist2 = $rs2->getrows(); 
$smarty->assign('total2', count($plist2));
$totala=count($plist2);
$grandtotala = $totala;
$tpagea = ceil($totala/$listing_per_page);
if($tpagea==0) $spagea=$tpagea+1;
else $spagea = $tpagea;
$startfroma = ($pagea-1)*$listing_per_page;
$start_numa=$startfroma+1;
$page_noa = "";
$smarty->assign('tpagea',$tpagea);
for($ia=1; $ia<=$tpagea; $ia++)
{
    if($ia==$pagea) $page_noa .= "<span class=\"pag_act\">$ia</span>";
    else 
    {
	if($atype!="") $page_noa .= " <a href='$config[base_url]/my_quicklist/audio/$atype/page$ia'><span class=\"pag\" id=\"pga$ia\">".$ia."</span></a> ";
	else $page_noa .= " <a href='$config[base_url]/my_quicklist/audio/page$ia'><span class=\"pag\" id=\"pga$ia\">".$ia."</span></a> ";
    }
}
if($page_noa!="") $linka = "$lang[gen_page] $page_noa $lang[gen_pageof]";
else $linka = $lang['mypl_audionone'];

if($tpagea>1)
{
    $nextpagea=$pagea+1;
    $prevpagea=$pagea-1;
    if($atype!="") $prevlinka="<a href='$config[base_url]/my_quicklist/audio/$atype/page$prevpagea'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    else $prevlinka="<a href='$config[base_url]/my_quicklist/audio/page$prevpagea'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    
    if($atype!="") $nextlinka="<a href='$config[base_url]/my_quicklist/audio/$atype/page$nextpagea'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    else $nextlinka="<a href='$config[base_url]/my_quicklist/audio/page$nextpagea'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    
    if($pagea==$tpagea) $linka="$prevlinka&nbsp;&nbsp;&nbsp;".$linka;
    elseif($tpagea>$pagea && $pagea>1) $linka="$prevlinka&nbsp;&nbsp;&nbsp;".$linka."&nbsp;&nbsp;&nbsp;$nextlinka";
    elseif($tpagea>$pagea && $pagea<=1) $linka.="&nbsp;&nbsp;&nbsp;$nextlinka";
}
if ( $_SESSION['UID'] == '' ) $sqla="select s.*,v.* from files_audio v, quicklist_audio s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.uid='0' and s.quicklist_ip='$ip' $qu2a limit $startfroma, $listing_per_page";
else $sqla="select s.*,v.* from files_audio v, quicklist_audio s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.uid='$_SESSION[UID]' $qu2a limit $startfroma, $listing_per_page";
$rsa = $conn->Execute($sqla);
$plista = $rsa->getrows(); 

$smarty->assign('start_numa',$start_numa);
$smarty->assign('end_numa',$startfroma+$rsa->recordcount());
$smarty->assign('totala',$totala);
$smarty->assign('linka',$linka);
$smarty->assign('pagea',$pagea+0);
$smarty->assign('auds',$plista);

if ( $_SESSION['UID'] == '' ) $qa="select v.vtags,s.vid from files_audio v, quicklist_audio s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.uid='$_SESSION[UID]' $qu2a limit $startfroma, $listing_per_page";
else $qa="select v.vtags,s.vid from files_audio v, quicklist_audio s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.uid='0' and s.quicklist_ip='$ip' $qu2a limit $startfroma, $listing_per_page";
$atags=tags($qa);
$smarty->assign('atags',$atags);
}


if ($config['enable_images']=="1")
{

if ( $_SESSION['viewmode'] == 'list' ) { 
    $ifarr = $_REQUEST['imid']; 
    $isbtn = $_REQUEST['igoact'];
    $iacts = $_REQUEST['iactions'];
    $plfarr = $_REQUEST['ilpl'];
} elseif ( $_SESSION['viewmode'] == 'grid' ) { 
    $ifarr = $_REQUEST['gimid']; 
    $isbtn = $_REQUEST['igoact2'];
    $iacts = $_REQUEST['iactions2'];
    $plfarr = $_REQUEST['igpl'];
}

if ($isbtn!="" && $err=="")
{
    if ($ifarr=="") $err=$lang['err_nofilesel']; //no files selected
    elseif ($iacts==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected
    
    if ($err=="")
    {
	if ($iacts==$lang['qlist_txt14']) {//add to playlist
            if ( $plfarr == '' ) $err = $lang['plist_txt36'];
            if ( $err == '' ) {
                foreach($ifarr as $value) {
                    foreach($plfarr as $plvalue) {
                        $fu = $conn->execute("select uid from files_image where vid='".filter_title($value)."'"); $fuid = $fu->fields['uid'];
                        $conn->execute("insert into playlist_files set ptype='image', vid='".filter_title($value)."', uid='".$_SESSION['UID']."', vkey='".filter_title($plvalue)."';");
                    }
                }
            }
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
        } 
        if ($iacts==$lang['inbox_itblact6']) //delete selected
        {
            foreach($ifarr as $value) { 
        	if ( $_SESSION['UID'] == '' ) $conn->execute("delete from quicklist_image where vid='".filter_title($value)."' and uid='0' and quicklist_ip='$ip';"); 
        	else $conn->execute("delete from quicklist_image where vid='".filter_title($value)."' and uid='$_SESSION[UID]'"); 
    	    }
            if (mysql_affected_rows()>0) $msg=$lang['qlist_txt28'];
        }
        if ($iacts==$lang['act_addfav']) //add to fav
        {
    	    check_login('my_quicklist');
            foreach($ifarr as $value) { 
        	$fu = $conn->execute("select uid from files_image where vid='".filter_title($value)."'"); $fuid = $fu->fields['uid'];
        	$conn->execute("insert into fav_image set vid='".filter_title($value)."', uid='$_SESSION[UID]', from_uid='$fuid';"); 
        	if ( $conn->Affected_Rows() > 0 ) $conn->execute("update files_image set vfav=vfav+1 where vid='".filter_title($value)."'");
    	    }
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
        }
    }
}
// paging images
if($_REQUEST[pagei]=="")
$pagei = 1;
else
$pagei = filter_title($_REQUEST[pagei]);
if ( $_SESSION['UID'] == '' ) $sql3="select s.*,v.* from files_image v, quicklist_image s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.uid='0' and s.quicklist_ip='$ip' $qu2i";
else $sql3="select s.*,v.* from files_image v, quicklist_image s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.uid='$_SESSION[UID]' $qu2i";
$rs3 = $conn->Execute($sql3);
$plist3 = $rs3->getrows(); 
$smarty->assign('total3', count($plist3));
$totali=count($plist3);
$grandtotali = $totali;
$tpagei = ceil($totali/$listing_per_page);
if($tpagei==0) $spagei=$tpagei+1;
else $spagei = $tpagei;
$startfromi = ($pagei-1)*$listing_per_page;
$start_numi=$startfromi+1;
$page_noi = "";
$smarty->assign('tpagei',$tpagei);
for($ii=1; $ii<=$tpagei; $ii++)
{
    if($ii==$pagei) $page_noi.= "<span class=\"pag_act\">$ii</span>";
    else 
    {
	if($itype!="") $page_noi.= " <a href='$config[base_url]/my_quicklist/image/$itype/page$ii'><span class=\"pag\" id=\"pgi$ii\">".$ii."</span></a> ";
	else $page_noi.= " <a href='$config[base_url]/my_quicklist/image/page$ii'><span class=\"pag\" id=\"pgi$ii\">".$ii."</span></a> ";
    }
}
if($page_noi!="") $linki = "$lang[gen_page] $page_noi $lang[gen_pageof]";
else $linki = $lang['mypl_imagenone'];

if($tpagei>1)
{
    $nextpagei=$pagei+1;
    $prevpagei=$pagei-1;
    if($itype!="") $prevlinki="<a href='$config[base_url]/my_quicklist/image/$itype/page$prevpagei'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    else $prevlinki="<a href='$config[base_url]/my_quicklist/image/page$prevpagei'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    
    if($itype!="") $nextlinki="<a href='$config[base_url]/my_quicklist/image/$itype/page$nextpagei'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    else $nextlinki="<a href='$config[base_url]/my_quicklist/image/page$nextpagei'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    
    if($pagei==$tpagei) $linki="$prevlinki&nbsp;&nbsp;&nbsp;".$linki;
    elseif($tpagei>$pagei && $pagei>1) $linki="$prevlinki&nbsp;&nbsp;&nbsp;".$linki."&nbsp;&nbsp;&nbsp;$nextlinki";
    elseif($tpagei>$pagei && $pagei<=1) $linki.="&nbsp;&nbsp;&nbsp;$nextlinki";
}

if ( $_SESSION['UID'] == '' ) $sqli="select s.*,v.* from files_image v, quicklist_image s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.uid='0' and s.quicklist_ip='$ip' $qu2i limit $startfromi, $listing_per_page";
else $sqli="select s.*,v.* from files_image v, quicklist_image s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.uid='$_SESSION[UID]' $qu2i limit $startfromi, $listing_per_page";
$rsi = $conn->Execute($sqli);
$plisti = $rsi->getrows(); 

$smarty->assign('start_numi',$start_numi);
$smarty->assign('end_numi',$startfromi+$rsi->recordcount());
$smarty->assign('totali',$totali);
$smarty->assign('linki',$linki);
$smarty->assign('pagei',$pagei+0);
$smarty->assign('imgs',$plisti);

if ( $_SESSION['UID'] == '' ) $qi="select v.vtags,s.vid from files_image v, quicklist_image s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.uid='0' and s.quicklist_ip='$ip' $qu2i limit $startfromi, $listing_per_page";
else $qi="select v.vtags,s.vid from files_image v, quicklist_image s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.uid='$_SESSION[UID]' $qu2i limit $startfromi, $listing_per_page";
$itags=tags($qi);
$smarty->assign('itags',$itags);
}

//quicklist count
if ( $_SESSION['UID'] == '' ) {
    $vt = $conn->execute("select count(*) as vtotal from quicklist_video where uid='0' and quicklist_ip='$ip';");
    $it = $conn->execute("select count(*) as itotal from quicklist_image where uid='0' and quicklist_ip='$ip';");
    $at = $conn->execute("select count(*) as atotal from quicklist_audio where uid='0' and quicklist_ip='$ip';");
} else {
    $vt = $conn->execute("select count(*) as vtotal from quicklist_video where uid='".$_SESSION['UID']."';");
    $it = $conn->execute("select count(*) as itotal from quicklist_image where uid='".$_SESSION['UID']."';");
    $at = $conn->execute("select count(*) as atotal from quicklist_audio where uid='".$_SESSION['UID']."';");
}

$vtotal = $vt->fields['vtotal'];
$itotal = $it->fields['itotal'];
$atotal = $at->fields['atotal'];
$qtotal = $vtotal + $itotal + $atotal;
$smarty->assign('qtotal', $qtotal); $smarty->assign('atotal', $atotal); $smarty->assign('itotal', $itotal); $smarty->assign('vtotal', $vtotal);

if($_REQUEST[type]=="dy")
{
    set_btn("bhome"); set_sbtn("mql");
    $msg = $lang['qlist_txt28'];
    $smarty->assign('msg',$msg);
    set_title($lang['title_myfilesconfirm']);
    $smarty->display('main_header.tpl'); $smarty->display('main_myquicklist.tpl'); $smarty->display('footer.tpl'); exit;
}

set_btn("bhome"); set_sbtn("mql"); set_title($lang['qlist_txt4']);
$smarty->assign('msg',$msg);
$smarty->assign('err',$err);
$smarty->display('main_header.tpl');
$smarty->display('main_myquicklist.tpl');
$smarty->display('footer.tpl');
?>