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

if (isset($_GET['searcha'])) $searcha=filter_title($_GET['searcha']); 
if (isset($_GET['searchi'])) $searchi=filter_title($_GET['searchi']);
if (isset($_GET['searchv'])) $searchv=filter_title($_GET['searchv']);
if (isset($_GET['searchm'])) $searchm=filter_title($_GET['searchm']);
if (isset($_GET['searcht'])) $searcht=filter_title($_GET['searcht']);
if (isset($_GET['searchp'])) $searchp=filter_title($_GET['searchp']);
if (isset($_GET['searchall'])) $searchall=filter_title($_GET['searchall']);
if (isset($_GET['filter'])) $filter=filter_title($_GET['filter']);
if (isset($_POST['goact'])) $_POST['goact']=filter_descr($_POST['goact']);
if (isset($_POST['actions'])) $_POST['actions']=filter_title($_POST['actions']);
if ( $config['enable_channels'] == '0' ) $mstr = 'members'; else $mstr = 'channels';

if ( $searcha != '' ) { $s_tbl='files_audio'; $comm_tbl = 'comm_audio'; $ct = 'audio'; }
elseif ( $searchi != '' ) { $s_tbl='files_image'; $comm_tbl = 'comm_img'; $ct = 'image'; }
elseif ( $searchv != '' ) { $s_tbl='files_video'; $comm_tbl = 'comm_vid'; $ct = 'video'; }
elseif ( $searchm != '' ) { $ct = 'members'; }
$qu='order by vtitle';

$therr=$lang['err_search'];

if ($searcha!="" or $searchi!="" or $searchv!="" or $searchm!="" or $searcht!="" or $searchall!="" or $searchp!="")
{
    if ($searcha!="" && (strlen($searcha)<$config[se_min] || strlen($searcha)>$config[se_max])) $err=$therr;
    elseif ($searchi!="" && (strlen($searchi)<$config[se_min] || strlen($searchi)>$config[se_max])) $err=$therr;
    elseif ($searchv!="" && (strlen($searchv)<$config[se_min] || strlen($searchv)>$config[se_max])) $err=$therr;
    elseif ($searchm!="" && (strlen($searchm)<$config[se_min] || strlen($searchm)>$config[se_max])) $err=$therr;
    elseif ($searcht!="" && (strlen($searcht)<$config[se_min] || strlen($searcht)>$config[se_max])) $err=$therr;
    elseif ($searchp!="" && (strlen($searchp)<$config[se_min] || strlen($searchp)>$config[se_max])) $err=$therr;
    elseif ($searchall!="" && (strlen($searchall)<$config[se_min] || strlen($searchall)>$config[se_max])) $err=$therr;
    elseif ($searcha=="" && $searchi=="" && $searchv=="" && $searchm=="" && $searcht=="" && $searchall=="" && $searchp=="") $err=$therr;
    elseif ($searcha==$lang['search_t2'] and $searchi==$lang['search_t3'] and $searchv==$lang['search_t4'] and ( $searchm==$lang['search_t5'] or $searchm==$lang['search_t7'] ) and $searchp==$lang['search_t6'] and $searchall==$lang['search_t1']) $err=$therr;
}
elseif ($searcha=="" && $searchi=="" && $searchv=="" && $searchm=="" && $searcht=="" && $searchall=="" && $searchp=="") $err=$therr;

if ( $searcha != '' ) $ptype = 'audio'; elseif ( $searchi != '' ) $ptype = 'image'; elseif ( $searchv != '' ) $ptype = 'video'; else $ptype = '';
if ( $_POST['goact'] != '' and $err == '' and $ct != 'members' ) { //files actions
    if ( $_SESSION['viewmode'] == 'list' ) { $farr = $_POST['mid']; $plfarr = $_POST['lpl']; } elseif ( $_SESSION['viewmode'] == 'grid' ) { $farr = $_POST['gmid']; $plfarr = $_POST['gpl']; }
    if ($farr=="") $err=$lang['err_msgcompose14']; //nothing selected
    elseif ($_POST['actions']==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected
    if ($err=="") {
        if ($_POST['actions'] == $lang['admact_mfeat']) { //feature selected
            foreach($farr as $value) { $conn->execute("update $s_tbl set is_featured='yes' where vid='".filter_title($value)."' and is_featured='no'"); }
        }
	if ($_POST['actions'] == $lang['admact_munfeat']) { //unfeature selected
            foreach($farr as $value) { $conn->execute("update $s_tbl set is_featured='no' where vid='".filter_title($value)."' and is_featured='yes'"); }
        }
        if ($_POST['actions'] == $lang['admact_mact']) { //mark active
            foreach($farr as $value) { $conn->execute("update $s_tbl set active='1' where vid='".filter_title($value)."' and active='0'"); }
        }
        if ($_POST['actions'] == $lang['admact_minact']) { //mark inactive
            foreach($farr as $value) { $conn->execute("update $s_tbl set active='0' where vid='".filter_title($value)."' and active='1'"); }
        }
        if ($_POST['actions'] == $lang['admact_mpub']) { //mark public
            foreach($farr as $value) { $conn->execute("update $s_tbl set vtype='public' where vid='".filter_title($value)."' and vtype='private'"); }
        }
        if ($_POST['actions'] == $lang['admact_mpriv']) { //mark private
            foreach($farr as $value) { $conn->execute("update $s_tbl set vtype='private' where vid='".filter_title($value)."' and vtype='public'"); }
        }
        if ($_POST['actions'] == $lang['admact_mapp']) { //mark appropriate
            foreach($farr as $value) { $conn->execute("update $s_tbl set is_inapp='no' where vid='".filter_title($value)."' and is_inapp='yes'"); }
        }
        if ($_POST['actions'] == $lang['admact_minapp']) { //mark inappropriate
            foreach($farr as $value) { $conn->execute("update $s_tbl set is_inapp='yes' where vid='".filter_title($value)."' and is_inapp='no'"); }
        }
	if ($_POST['actions'] == $lang['admact_mcomm']) { //delete comments
            foreach($farr as $value) {
                $conn->execute("delete from $comm_tbl where vid='".filter_title($value)."'");
                $tr = $conn->Affected_Rows();
                if ($tr > 0) {
                    $conn->execute("update $s_tbl set comments=comments-$tr where vid='".filter_title($value)."'");
                    $conn->execute("delete from comm_rates where vid='".filter_title($value)."' and type='$ct'");
                }
            }
        }
	if ($_POST['actions'] == $lang['admact_mrate']) { //delete ratings
            foreach($farr as $value) { $conn->execute("update $s_tbl set rate='0', total_votes='0', total_value='0', used_ips='', vote_stats='' where vid='".filter_title($value)."' and rate!='0'"); }
        }
        if ($_POST['actions'] == $lang['admact_mfav']) { //reset favorited number
            foreach($farr as $value) { $conn->execute("update $s_tbl set vfav='0' where vid='".filter_title($value)."' and vfav!='0'"); }
        }
        if ($_POST['actions'] == $lang['admact_mviews']) { //reset views number
            foreach($farr as $value) { $conn->execute("update $s_tbl set views='0' where vid='".filter_title($value)."' and views!='0'"); }
        }
	if ($_POST['actions'] == $lang['inbox_itblact6']) { //delete selected
            foreach($farr as $value) {
                $r = $conn->execute("select uid from $s_tbl where vid='$value'");
                if ( $ct == 'audio' ) delete_ado($value, $r->fields['uid']);
                elseif ( $ct == 'image' ) delete_img($value, $r->fields['uid']);
                elseif ( $ct == 'video' ) delete_vdo($value, $r->fields['uid']);
            }
        }
        if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
    }
}

if ( $_POST['goact'] != '' and $err == '' and $ct == 'members' ) { //members/channels actions
    if ($_POST['mid']=="") $err=$lang['err_msgcompose14']; //nothing selected
    elseif ($_POST[actions]==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected 
    if ( $err == '' ) {
	$def_msg=$config['def_ban_msg'];
	$def_url=$config['def_ban_link'];
	if ($_POST[actions]==$lang['act_frenable']) { //enable selected
            foreach($_POST['mid'] as $value) { $conn->execute("update $ct set is_active='1' where uid='".filter_title($value)."' and is_active='0';"); }
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
        }
	if ($_POST[actions]==$lang['act_frdisable']) { //disable selected
            foreach($_POST['mid'] as $value) { $conn->execute("update $ct set is_active='0' where uid='".filter_title($value)."' and is_active='1';"); }
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
        }
        if ($_POST[actions]==$lang['adm_memupact1']) { //enable uploads
            foreach($_POST['mid'] as $value) { $conn->execute("update $ct set can_upload='1' where uid='".filter_title($value)."' and can_upload='0';"); }
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
        }
        if ($_POST[actions]==$lang['adm_memupact2']) { //disable uploads
            foreach($_POST['mid'] as $value) { $conn->execute("update $ct set can_upload='0' where uid='".filter_title($value)."' and can_upload='1';"); }
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
        }
        if ($_POST[actions]==$lang['admact_memban']) { //ban selected
            foreach($_POST['mid'] as $value) {
                $conn->execute("insert into banned_users set active='1', ban_uid='".filter_title($value)."', ban_name='".get_name(filter_title($value))."', ban_msg='$def_msg', ban_url='$def_url';");
                if ($conn->Affected_Rows() < 1) $conn->execute("update banned_users set active='1' where ban_uid='".filter_title($value)."' and active='0';");
            }
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
        }
        if ($_POST[actions]==$lang['admact_memunban']) { //unban selected
            foreach($_POST['mid'] as $value) { $conn->execute("update banned_users set active='0' where ban_uid='".filter_title($value)."' and active='1';"); }
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
        }
	if ($_POST[actions]==$lang['admact_memdela']) { //delete all audios
            foreach($_POST['mid'] as $value) {
                $sql="select vid from files_audio where uid='".filter_title($value)."'";
                $result = mysql_query($sql);
                while($row = mysql_fetch_assoc($result)) {
                    $vid=$row['vid'];
                    delete_ado($vid, $value);
                }
            }
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
        }
        if ($_POST[actions]==$lang['admact_memdeli']) { //delete all images
            foreach($_POST['mid'] as $value) {
                $sql="select vid from files_image where uid='".filter_title($value)."'";
                $result = mysql_query($sql);
                while($row = mysql_fetch_assoc($result)) {
                    $vid=$row['vid'];
                    delete_img($vid, $value);
                }
            }
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
        }
        if ($_POST[actions]==$lang['admact_memdelv']) { //delete all videos
            foreach($_POST['mid'] as $value) {
                $sql="select vid from files_video where uid='".filter_title($value)."'";
                $result = mysql_query($sql);
                while($row = mysql_fetch_assoc($result)) {
                    $vid=$row['vid'];
                    delete_vdo($vid, $value);
                }
            }
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
        }
	if ($_POST[actions]==$lang['admact_memdelm']) { //delete selected
            foreach($_POST['mid'] as $value) {
                $del=delete_member(filter_title($value));
            }
            if ($del=='yes') $msg = $lang['adm_memdelnotice'];
                else $err = $lang['adm_errmem1'];
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
        }
	if ($_POST[actions]==$lang['admact_mememail']) { //email selected
    	    header("Location: $config[admin_url]/members/email/selected");
            session_unregister($_SESSION['mid']); $_SESSION['mid'] = ''; session_register($_SESSION['mid']); $_SESSION['mid'] = $_POST['mid'];
        }
        if ($_POST[actions]==$lang['admact_memmsg']) { //message selected
    	    header("Location: $config[admin_url]/members/message/selected");
    	    session_unregister($_SESSION['mid']); $_SESSION['mid'] = ''; session_register($_SESSION['mid']); $_SESSION['mid'] = $_POST['mid'];
        }
    }
}

if ($err=="") {
    if ($filter=="") $qu="vid"; if ($searchm!="") $qu="uid asc";
    if ($filter=="most_commented") { $qu="comments"; $flt="most_commented"; }
    if ($filter=="most_responded") { $qu="responses"; $flt="most_responded"; }
    if ($filter=="most_played") { $qu="views"; $flt="most_played"; }
    if ($filter=="most_recent") { $qu="addtime"; $flt="most_recent"; }
    if ($filter=="top_rated") { $qu="rate"; $flt="top_rated"; }
    if ($filter=="featured") { $qu="vtitle"; $flt="featured"; $fq="and is_featured='yes'"; }
    else { $fq=""; }
    
    if ($filter=="ch_views") { $qu="ch_views desc"; $flt="ch_views"; $on=""; }
    if ($filter=="ch_subs") { $qu="ch_subs desc"; $flt="ch_subs"; $on=""; }
    if ($filter=="audio_files") { $qu="files_audio desc"; $flt="audio_files"; $on=""; }
    if ($filter=="image_files") { $qu="files_image desc"; $flt="image_files"; $on=""; }
    if ($filter=="video_files") { $qu="files_video desc"; $flt="video_files"; $on=""; }
    if ($filter=="last_joined") { $qu="reg_on desc"; $flt="last_joined"; $on=""; }
    if ($filter=="last_login") { $qu="last_login desc"; $flt="last_login"; $on=""; }
    if ($filter=="online") { $qu="username"; $flt="online"; $on="and is_logged='1'"; }
    if ($filter=="offline") { $qu="username"; $flt="offline"; $on="and is_logged='0'"; }
    
    if ($searcha!="") { $searcha=ereg_replace("_{1,}", " ", $searcha); $in=$lang['saudios']; $stype = ereg_replace("_{1,}", " ", $searcha); $smarty->assign('stype',$stype); $stype1 = ereg_replace(" {1,}", "_", $searcha); $smarty->assign('stype1',$stype1); $smarty->assign('in', $in); $tbl="files_audio"; }
    if ($searchi!="") { $searchi=ereg_replace("_{1,}", " ", $searchi); $in=$lang['simages']; $stype = ereg_replace("_{1,}", " ", $searchi); $smarty->assign('stype',$stype); $stype1 = ereg_replace(" {1,}", "_", $searchi); $smarty->assign('stype1',$stype1); $smarty->assign('in', $in); $tbl="files_image"; }
    if ($searchv!="") { $searchv=ereg_replace("_{1,}", " ", $searchv); $in=$lang['svideos']; $stype = ereg_replace("_{1,}", " ", $searchv); $smarty->assign('stype',$stype); $stype1 = ereg_replace(" {1,}", "_", $searchv); $smarty->assign('stype1',$stype1); $smarty->assign('in', $in); $tbl="files_video"; }
    if ($searchp!="") { $searchp=ereg_replace("_{1,}", " ", $searchp); $in=$lang['uch_thl8']; $stype = ereg_replace("_{1,}", " ", $searchp); $smarty->assign('stype',$stype); $stype1 = ereg_replace(" {1,}", "_", $searchp); $smarty->assign('stype1',$stype1); $smarty->assign('in', $in); $tbl=""; }
    if ($searchm!="") { $searchm=ereg_replace("_{1,}", " ", $searchm); if ( $config['enable_channels'] == '0' ) { $in=$lang['smembers']; } else { $in=$lang['uch_thl4']; } $stype = ereg_replace("_{1,}", " ", $searchm); $smarty->assign('stype',$stype); $stype1 = ereg_replace(" {1,}", "_", $searchm); $smarty->assign('stype1',$stype1); $smarty->assign('in', $in); $tbl="members"; }
    if ($searcht!="") { $searcht=ereg_replace("_{1,}", " ", $searcht); $in=$lang['stags']; $stype = ereg_replace("_{1,}", " ", $searcht); $smarty->assign('stype',$stype); $stype1 = ereg_replace(" {1,}", "_", $searcht); $smarty->assign('stype1',$stype1); $smarty->assign('in', $in); }
    if ($searchall!="") { $searchall=ereg_replace("_{1,}", " ", $searchall); $in="$config[site_name]"; $stype = ereg_replace("_{1,}", " ", $searchall); $smarty->assign('stype',$stype); $stype1 = ereg_replace(" {1,}", "_", $searchall); $smarty->assign('stype1',$stype1); $smarty->assign('in', $in); }

    // paging
    $listing_per_page = $config[paging_search];

    if(filter_title($_GET[page])=="")
	$page = 1;
    else
	$page = filter_title($_GET[page]);

    if ($searcha!="") { 
	$searcha1 = $searcha;
	$searcha = explode(" ", $searcha);
	foreach ( $searcha as $searchterm ) {
	    $search_a.= '%'.$searchterm.'%';
	}
	$sql="SELECT count(*) as total from $tbl where vtype!='' $fq and is_inapp!='' and active!='' and (UCASE(vtitle) like UCASE('".$search_a."') or UCASE(vtags) like UCASE('".$search_a."') or UCASE(vdescr) like UCASE('".$search_a."')) order by $qu"; 
    }
    if ($searchi!="") { 
	$searchi1 = $searchi;
	$searchi = explode(" ", $searchi);
	foreach ( $searchi as $searchterm ) {
	    $search_i.= '%'.$searchterm.'%';
	}
	$sql="SELECT count(*) as total from $tbl where vtype!='' $fq and is_inapp!='' and active!='' and (UCASE(vtitle) like UCASE('".$search_i."') or UCASE(vtags) like UCASE('".$search_i."') or UCASE(vdescr) like UCASE('".$search_i."')) order by $qu"; 
    }
    if ($searchv!="") { 
	$searchv1 = $searchv;
	$searchv = explode(" ", $searchv);
	foreach ( $searchv as $searchterm ) {
	    $search_v.= '%'.$searchterm.'%';
	}
	$sql="SELECT count(*) as total from $tbl where vtype!='' $fq and is_inapp!='' and active!='' and (UCASE(vtitle) like UCASE('".$search_v."') or UCASE(vtags) like UCASE('".$search_v."') or UCASE(vdescr) like UCASE('".$search_v."')) order by $qu"; 
    }
    if ($searchm!="") { 
	$searchm1 = $searchm;
	$searchm = explode(" ", $searchm);
	foreach ( $searchm as $searchterm ) {
	    $search_m.= '%'.$searchterm.'%';
	}
	if ( $config['enable_channels'] == '1' ) $sql="SELECT count(*) as total from $tbl where is_active!='' $on and ( UCASE(username) like UCASE('".$search_m."') or UCASE(ch_title) like UCASE('".$search_m."') or UCASE(ch_desc) like UCASE('".$search_m."') or UCASE(ch_tags) like UCASE('".$search_m."') ) order by $qu"; 
	else $sql="SELECT count(*) as total from $tbl where is_active!='' $on and UCASE(username) like UCASE('".$search_m."') order by $qu"; 
    }
    if ($searchp!="") 
    { 
	if ( $filter == 'mr' ) { $qu = 'order by addtime desc';	$flt = 'mr'; } elseif ( $filter == 'mv' ) { $qu = 'order by views desc'; $flt = 'mv'; } else { $qu = ''; $flt = ''; }
	$searchp1 = $searchp;
	$searchp = explode(" ", $searchp);
	foreach ( $searchp as $searchterm ) {
	    $searchpl.= '%'.$searchterm.'%';
	}
//	if ($config[enable_audio]=="1") {
		$sqla="SELECT count(*) as totala from playlist_audio where privacy!='' $fq and active!='' and ( UCASE(pname) like UCASE('".$searchpl."') or UCASE(descr) like UCASE('".$searchpl."') or UCASE(tags) like UCASE('".$searchpl."') ) $qu"; 
		$ra=$conn->execute($sqla); $totala = $ra->fields[totala];
//	}
//	if ($config[enable_images]=="1") {
		$sqli="SELECT count(*) as totali from playlist_image where privacy!='' $fq and active!='' and ( UCASE(pname) like UCASE('".$searchpl."') or UCASE(descr) like UCASE('".$searchpl."') or UCASE(tags) like UCASE('".$searchpl."') ) $qu"; 
		$ri=$conn->execute($sqli); $totali = $ri->fields[totali];
//	}
//	if ($config[enable_videos]=="1") {
		$sqlv="SELECT count(*) as totalv from playlist_video where privacy!='' $fq and active!='' and ( UCASE(pname) like UCASE('".$searchpl."') or UCASE(descr) like UCASE('".$searchpl."') or UCASE(tags) like UCASE('".$searchpl."') ) $qu"; 
		$rv=$conn->execute($sqlv); $totalv = $rv->fields[totalv];
//	}
	$total=$totala+$totali+$totalv; $smarty->assign('total',$total);
    }
    if ($searcht!="") 
    { 
	$searcht1 = $searcht;
	$searcht = explode(" ", $searcht);
	foreach ( $searcht as $searchterm ) {
	    $search_t.= '%'.$searchterm.'%';
	}
//	if ($config[enable_audio]=="1") 
//	{
	    $sqla="SELECT count(*) as totala from files_audio where vtype!='' $fq and is_inapp!='' and active!='' and UCASE(vtags) like UCASE('".$search_t."') order by $qu"; 
	    $ra=$conn->execute($sqla); $totala=$ra->fields[totala];
//	}
//	if ($config[enable_images]=="1")
//	{
	    $sqli="SELECT count(*) as totali from files_image where vtype!='' $fq and is_inapp!='' and active!='' and UCASE(vtags) like UCASE('".$search_t."') order by $qu"; 
	    $ri=$conn->execute($sqli); $totali=$ri->fields[totali];
//	}
//	if ($config[enable_videos]=="1")
//	{
	    $sqlv="SELECT count(*) as totalv from files_video where vtype!='' $fq and is_inapp!='' and active!='' and UCASE(vtags) like UCASE('".$search_t."') order by $qu"; 
	    $rv=$conn->execute($sqlv); $totalv=$rv->fields[totalv];
//	}
	$total=$totala+$totali+$totalv; $smarty->assign('total',$total);
    }
    if ($searchall!="")
    {
	$searchall1 = $searchall;
	$searchall = explode(" ", $searchall);
	foreach ( $searchall as $searchterm ) {
	    $search_all.= '%'.$searchterm.'%';
	}
//	if ($config[enable_audio]=="1") 
//	{
	    $sqla="SELECT count(*) as totala from files_audio where vtype!='' $fq and is_inapp!='' and active!='' and (UCASE(vtitle) like UCASE('".$search_all."') or UCASE(vtags) like UCASE('".$search_all."') or UCASE(vdescr) like UCASE('".$search_all."')) order by $qu";
	    $ra=$conn->execute($sqla); $totala=$ra->fields[totala];
//	}
//	if ($config[enable_images]=="1") 
//	{
	    $sqli="SELECT count(*) as totali from files_image where vtype!='' $fq and is_inapp!='' and active!='' and (UCASE(vtitle) like UCASE('".$search_all."') or UCASE(vtags) like UCASE('".$search_all."') or UCASE(vdescr) like UCASE('".$search_all."')) order by $qu";
	    $ri=$conn->execute($sqli); $totali=$ri->fields[totali];
//	}
//	if ($config[enable_videos]=="1")
//	{
	    $sqlv="SELECT count(*) as totalv from files_video where vtype!='' $fq and is_inapp!='' and active!='' and (UCASE(vtitle) like UCASE('".$search_all."') or UCASE(vtags) like UCASE('".$search_all."') or UCASE(vdescr) like UCASE('".$search_all."')) order by $qu";
	    $rv=$conn->execute($sqlv); $totalv=$rv->fields[totalv]; 
//	}
	$total=$totala+$totali+$totalv+$totalm; $smarty->assign('total',$total);
    }
    if ($searcht=="" && $searchall=="" && $searchp=="")
    {
	$ars = $conn->Execute($sql);
	$total = $ars->fields['total'];
    }
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
	    if ($searcha!="") { $searcha1=ereg_replace(" {1,}", "_", $searcha1); if ($filter!="") { $page_no .= " <a href='$config[admin_url]/search/audios/$searcha1/$flt/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";  } else { $page_no .= " <a href='$config[admin_url]/search/audios/$searcha1/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> "; }}
	    elseif ($searchi!="") { $searchi1=ereg_replace(" {1,}", "_", $searchi1); if ($filter!="") { $page_no .= " <a href='$config[admin_url]/search/images/$searchi1/$flt/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";  } else { $page_no .= " <a href='$config[admin_url]/search/images/$searchi1/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> "; }}
	    elseif ($searchv!="") { $searchv1=ereg_replace(" {1,}", "_", $searchv1); if ($filter!="") { $page_no .= " <a href='$config[admin_url]/search/videos/$searchv1/$flt/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";  } else { $page_no .= " <a href='$config[admin_url]/search/videos/$searchv1/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> "; }}
	    elseif ($searchm!="") { $searchm1=ereg_replace(" {1,}", "_", $searchm1); if ($filter!="") { $page_no .= " <a href='$config[admin_url]/search/".$mstr."/$searchm1/$flt/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";  } else { $page_no .= " <a href='$config[admin_url]/search/".$mstr."/$searchm1/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> "; }}
	    elseif ($searcht!="") { $searcht1=ereg_replace(" {1,}", "_", $searcht1); if ($filter!="") { $page_no .= " <a href='$config[admin_url]/search/tags/$searcht1/$flt/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";  } else { $page_no .= " <a href='$config[admin_url]/search/tags/$searcht1/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> "; }}
	    elseif ($searchp!="") { $searchp1=ereg_replace(" {1,}", "_", $searchp1); if ($filter!="") { $page_no .= " <a href='$config[admin_url]/search/playlists/$searchp1/$flt/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";  } else { $page_no .= " <a href='$config[admin_url]/search/playlists/$searchp1/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> "; }}
	    elseif ($searchall!="") { $searchall1=ereg_replace(" {1,}", "_", $searchall1); if ($filter!="") { $page_no .= " <a href='$config[admin_url]/search/all/$searchall1/$flt/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";  } else { $page_no .= " <a href='$config[admin_url]/search/all/$searchall1/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> "; }}
	}
    }

    if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
    else $link = $lang['search_nores'];

    if($tpage>1)
    {
	$nextpage=$page+1;
	$prevpage=$page-1;
	if ($searcha!="") 
	{
	    $searcha1=ereg_replace(" {1,}", "_", $searcha1);
	    if ($filter!="")
	    {
		$prevlink="<a href='$config[admin_url]/search/audios/$searcha1/$flt/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
		$nextlink="<a href='$config[admin_url]/search/audios/$searcha1/$flt/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
	    }
	    else
	    {
		$prevlink="<a href='$config[admin_url]/search/audios/$searcha1/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
		$nextlink="<a href='$config[admin_url]/search/audios/$searcha1/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
	    }
	}
	elseif ($searchi!="")
	{
	    $searchi1=ereg_replace(" {1,}", "_", $searchi1);
	    if ($filter!="")
	    {
		$prevlink="<a href='$config[admin_url]/search/images/$searchi1/$flt/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
		$nextlink="<a href='$config[admin_url]/search/images/$searchi1/$flt/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
	    }
	    else
	    {
		$prevlink="<a href='$config[admin_url]/search/images/$searchi1/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
		$nextlink="<a href='$config[admin_url]/search/images/$searchi1/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
	    }
	}
	elseif ($searchv!="")
	{
	    $searchv1=ereg_replace(" {1,}", "_", $searchv1);
	    if ($filter!="")
	    {
		$prevlink="<a href='$config[admin_url]/search/videos/$searchv1/$flt/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    		$nextlink="<a href='$config[admin_url]/search/videos/$searchv1/$flt/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
	    }
	    else
	    {
		$prevlink="<a href='$config[admin_url]/search/videos/$searchv1/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    		$nextlink="<a href='$config[admin_url]/search/videos/$searchv1/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
	    }
	}
	elseif ($searchm!="")
	{
	    $searchm1=ereg_replace(" {1,}", "_", $searchm1);
	    if ($filter!="")
	    {
		$prevlink="<a href='$config[admin_url]/search/".$mstr."/$searchm1/$flt/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
		$nextlink="<a href='$config[admin_url]/search/".$mstr."/$searchm1/$flt/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
	    }
	    else
	    {
		$prevlink="<a href='$config[admin_url]/search/".$mstr."/$searchm1/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
		$nextlink="<a href='$config[admin_url]/search/".$mstr."/$searchm1/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
	    }
	}
	elseif ($searcht!="")
	{
	    $searcht1=ereg_replace(" {1,}", "_", $searcht1);
	    if ($filter!="")
	    {
		$prevlink="<a href='$config[admin_url]/search/tags/$searcht1/$flt/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
		$nextlink="<a href='$config[admin_url]/search/tags/$searcht1/$flt/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
	    }
	    else
	    {
		$prevlink="<a href='$config[admin_url]/search/tags/$searcht1/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
		$nextlink="<a href='$config[admin_url]/search/tags/$searcht1/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
	    }
	}
	elseif ($searchp!="")
	{
	    $searchp1=ereg_replace(" {1,}", "_", $searchp1);
	    if ($filter!="")
	    {
		$prevlink="<a href='$config[admin_url]/search/playlists/$searchp1/$flt/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
		$nextlink="<a href='$config[admin_url]/search/playlists/$searchp1/$flt/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
	    }
	    else
	    {
		$prevlink="<a href='$config[admin_url]/search/playlists/$searchp1/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
		$nextlink="<a href='$config[admin_url]/search/playlists/$searchp1/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
	    }
	}
	elseif ($searchall!="")
	{
	    $searchall1=ereg_replace(" {1,}", "_", $searchall1);
	    if ($filter!="")
	    {
		$prevlink="<a href='$config[admin_url]/search/all/$searchall1/$flt/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
		$nextlink="<a href='$config[admin_url]/search/all/$searchall1/$flt/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
	    }
	    else
	    {
		$prevlink="<a href='$config[admin_url]/search/all/$searchall1/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
		$nextlink="<a href='$config[admin_url]/search/all/$searchall1/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
	    }
	}
	if($page==$tpage) $link.="$prevlink&nbsp;&nbsp;&nbsp;";
	elseif($tpage>$page && $page>1) $link=$link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
	elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
    }
    if ($searcha!="") 
	{ 
	    $sql="SELECT * from $tbl where vtype!='' $fq and is_inapp!='' and active!='' and (UCASE(vtitle) like UCASE('".$search_a."') or UCASE(vtags) like UCASE('".$search_a."') or UCASE(vdescr) like UCASE('".$search_a."')) order by $qu desc limit $startfrom, $listing_per_page"; 
	    $sql1="SELECT vtags from $tbl where vtype!='' $fq and is_inapp!='' and active!='' and (UCASE(vtitle) like UCASE('".$search_a."') or UCASE(vtags) like UCASE('".$search_a."') or UCASE(vdescr) like UCASE('".$search_a."')) order by $qu desc limit $startfrom, $listing_per_page"; 
	}
    if ($searchi!="") 
	{ 
	    $sql="SELECT * from $tbl where vtype!='' $fq and is_inapp!='' and active!='' and (UCASE(vtitle) like UCASE('".$search_i."') or UCASE(vtags) like UCASE('".$search_i."') or UCASE(vdescr) like UCASE('".$search_i."')) order by $qu desc limit $startfrom, $listing_per_page"; 
	    $sql1="SELECT vtags from $tbl where vtype!='' $fq and is_inapp!='' and active!='' and (UCASE(vtitle) like UCASE('".$search_i."') or UCASE(vtags) like UCASE('".$search_i."') or UCASE(vdescr) like UCASE('".$search_i."')) order by $qu desc limit $startfrom, $listing_per_page"; 
	}
    if ($searchv!="") 
	{ 
	    $sql="SELECT * from $tbl where vtype!='' $fq and is_inapp!='' and active!='' and (UCASE(vtitle) like UCASE('".$search_v."') or UCASE(vtags) like UCASE('".$search_v."') or UCASE(vdescr) like UCASE('".$search_v."')) order by $qu desc limit $startfrom, $listing_per_page"; 
	    $sql1="SELECT vtags from $tbl where vtype!='' $fq and is_inapp!='' and active!='' and (UCASE(vtitle) like UCASE('".$search_v."') or UCASE(vtags) like UCASE('".$search_v."') or UCASE(vdescr) like UCASE('".$search_v."')) order by $qu desc limit $startfrom, $listing_per_page"; 
	}
    if ($searchm!="") { 
	 $sql="SELECT * from $tbl where is_active!='' $on and ( UCASE(username) like UCASE('".$search_m."') or UCASE(ch_title) like UCASE('".$search_m."') or UCASE(ch_desc) like UCASE('".$search_m."') or UCASE(ch_tags) like UCASE('".$search_m."') ) order by $qu limit $startfrom, $listing_per_page";
    }
    if ($searcht!="") 
    { 
	$unqa='UNION ALL'; $unqi='UNION ALL';	
	    $q1="$unqa (SELECT vtags, vtitle, vdescr, vkey, uid, vflvname, vduration, vid, comments, views, responses, addtime, rate from files_audio where vtype!='' $fq and is_inapp!='' and active!='' and UCASE(vtags) like UCASE('".$search_t."'))";
	    $q2="$unqi (SELECT vtags, vtitle, vdescr, vkey, uid, vflvname, vduration, vid, comments, views, responses, addtime, rate from files_image where vtype!='' $fq and is_inapp!='' and active!='' and UCASE(vtags) like UCASE('".$search_t."'))"; 
	    $q3="(SELECT vtags, vtitle, vdescr, vkey, uid, vflvname, vduration, vid, comments, views, responses, addtime, rate from files_video where vtype!='' $fq and is_inapp!='' and active!='' and UCASE(vtags) like UCASE('".$search_t."'))";
	
	$sql1="$q3 $q2 $q1 order by $qu desc limit $startfrom, $listing_per_page"; 
	
	$rr=$conn->execute($sql1);
	$res=$rr->getrows();
	$smarty->assign('res',$res);
	$mt=tags($sql1, 'admin');
	$smarty->assign('mytags',$mt);
    }
    if ($searchall!="")
    {
	$unqa='UNION ALL'; $unqi='UNION ALL';	
	    $q1="$unqa (SELECT vtags, vtitle, vdescr, vkey, uid, vflvname, vduration, vid, comments, views, responses, addtime, rate from files_audio where vtype!='' $fq and is_inapp!='' and active!='' and (UCASE(vtags) like UCASE('".$search_all."') or UCASE(vtitle) like UCASE('".$search_all."') or UCASE(vdescr) like UCASE('".$search_all."')))";
	    $q2="$unqi (SELECT vtags, vtitle, vdescr, vkey, uid, vflvname, vduration, vid, comments, views, responses, addtime, rate from files_image where vtype!='' $fq and is_inapp!='' and active!='' and (UCASE(vtags) like UCASE('".$search_all."') or UCASE(vtitle) like UCASE('".$search_all."') or UCASE(vdescr) like UCASE('".$search_all."')))";
	    $q3="(SELECT vtags, vtitle, vdescr, vkey, uid, vflvname, vduration, vid, comments, views, responses, addtime, rate from files_video where vtype!='' $fq and is_inapp!='' and active!='' and (UCASE(vtags) like UCASE('".$search_all."') or UCASE(vtitle) like UCASE('".$search_all."') or UCASE(vdescr) like UCASE('".$search_all."')))";
	
	$sql2="$q3 $q2 $q1 order by $qu desc limit $startfrom, $listing_per_page";
	$rr=$conn->execute($sql2);
	$res=$rr->getrows();
	$smarty->assign('res',$res);
	$mt=tags($sql2, 'admin');
	$smarty->assign('mytags',$mt);
    }
    if ($searchp!="")
    {
	$unqa='UNION ALL'; $unqi='UNION ALL';	
	    $q1="$unqa (SELECT pname, uid, addtime, descr, vkey, embed, tags, privacy, vlog, views, thumb from playlist_audio where privacy!='' $fq and active!='' and (UCASE(pname) like UCASE('".$searchpl."') or UCASE(descr) like UCASE('".$searchpl."') or UCASE(tags) like UCASE('".$searchpl."')))";
    	    $q2="$unqi (SELECT pname, uid, addtime, descr, vkey, embed, tags, privacy, vlog, views, thumb from playlist_image where privacy!='' $fq and active!='' and (UCASE(pname) like UCASE('".$searchpl."') or UCASE(descr) like UCASE('".$searchpl."') or UCASE(tags) like UCASE('".$searchpl."')))";
	    $q3="(SELECT pname, uid, addtime, descr, vkey, embed, tags, privacy, vlog, views, thumb from playlist_video where privacy!='' $fq and active!='' and (UCASE(pname) like UCASE('".$searchpl."') or UCASE(descr) like UCASE('".$searchpl."') or UCASE(tags) like UCASE('".$searchpl."')))";
	$sql2="$q3 $q2 $q1 $qu limit $startfrom, $listing_per_page";
	$rr=$conn->execute($sql2);
	$res=$rr->getrows();
	$smarty->assign('res',$res);
    }
    if ($searcht=="" && $searchall=="" and $searchp=="")
    {
	$rr = $conn->Execute($sql);
	$res = $rr->getrows(); 
	$smarty->assign('total',$total);
	if ($searchm=="")
	{
	    $mt=tags($sql1, 'admin');
	    $smarty->assign('mytags',$mt);
	}
    }
    $smarty->assign('start_num',$start_num);
    $smarty->assign('end_num',$startfrom+$rr->recordcount());
    $smarty->assign('link',$link);
    $smarty->assign('page',$page+0);
    $smarty->assign('res',$res);
}

set_btn("adm_search"); set_sbtn("adm_search");
set_title($lang['title_search'].$in);
$smarty->assign('msg',$msg);
$smarty->assign('err',$err);
$smarty->display('administration/main_header.tpl');
$smarty->display('administration/main_search.tpl');
$smarty->display('administration/main_footer.tpl');
?>