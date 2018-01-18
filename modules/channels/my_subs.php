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
if ( $config['enable_channels'] == '0' ) { header("Location: $config[base_url]/main"); exit; }
check_login('my_subscriptions');

if (isset($_GET['user'])) $user=filter_title($_GET['user']);
if (isset($_GET['auser'])) $auser=filter_title($_GET['auser']);
if (isset($_GET['ftype'])) $ftype=filter_title($_GET['ftype']);
if (isset($_GET['filter'])) $filter=filter_title($_GET['filter']);
if (isset($_GET['act'])) $act=filter_title($_GET['act']);
if (isset($_GET['pkey'])) $pkey=filter_title($_GET['pkey']);
if (isset($_POST['btn_unsub'])) $btn_unsub=filter_title($_POST['btn_unsub']);

$active = "and active='1' and is_inapp='no' and vtype='public'";

if ( ( $ftype == 'audios' and $config['enable_audio'] == '0' ) or ( $ftype == 'images' and $config['enable_images'] == '0' ) or ( $ftype == 'videos' and $config['enable_videos'] == '0' ) or ( $ftype == 'audio_favorites' and $config['enable_audio'] == '0' ) or ( $ftype == 'image_favorites' and $config['enable_images'] == '0' ) or ( $ftype == 'video_favorites' and $config['enable_videos'] == '0' ) ) { illegal_op(); exit; }

if ( $user != '' and $act != 'unsub' ) { 
    $ruid = $conn->execute("select uid from members where username='$user';");
    $uid = $ruid->fields['uid'];
    $cmd = "uid='$uid'";

    if ( $filter == 'f1' ) { $qu = "order by vtitle asc"; }
    if ( $filter == 'f2' ) { $qu = "order by vduration desc"; }
    if ( ( $filter == 'f3' or $filter == '' ) and $pkey == '' ) { $qu = "order by adddate desc"; }
    if ( $filter == 'f4' ) { $qu = "order by views desc"; }
    if ( $filter == 'f5' ) { $qu = "order by rate desc"; }

    if ( $ftype == 'audios' and $pkey == '' ) { $tbl = 'files_audio'; $tbl2 = 'quicklist_audio'; $tbl3 = 'fav_audio'; $xt = 'audio'; } 
    elseif ( $ftype == 'images' and $pkey == '' ) { $tbl = 'files_image'; $tbl2 = 'quicklist_image'; $tbl3 = 'fav_image'; $xt = 'image'; } 
    elseif ( $ftype == 'videos' and $pkey == '' ) { $tbl = 'files_video'; $tbl2 = 'quicklist_video'; $tbl3 = 'fav_video'; $xt = 'video'; }
    elseif ( $ftype == 'video_favorites' and $pkey == '' ) { $tbl = 'files_video'; $tbl2 = 'quicklist_video'; $tbl3 = 'fav_video'; $xt = 'video'; $fav_q = '1'; }
    elseif ( $ftype == 'image_favorites' and $pkey == '' ) { $tbl = 'files_image'; $tbl2 = 'quicklist_image'; $tbl3 = 'fav_image'; $xt = 'image'; $fav_q = '1'; }
    elseif ( $ftype == 'audio_favorites' and $pkey == '' ) { $tbl = 'files_audio'; $tbl2 = 'quicklist_audio'; $tbl3 = 'fav_audio'; $xt = 'audio'; $fav_q = '1'; }
    else { 
	$tbl = 'playlist_files';
	$c1 = $conn->execute("select * from playlist_video where vkey='".$pkey."';");
	if ( $c1->recordcount() > 0 ) { 
	    $pl = 'video'; 
	    $spl = 'plv'.$pkey;
	    $spq = " and stype='".$spl."' ";
	} else { 
	    $c1 = $conn->execute("select * from playlist_image where vkey='".$pkey."';");
	    if ( $c1->recordcount() > 0 ) { 
		$pl = 'image'; 
		$spl = 'pli'.$pkey;
		$spq = " and stype='".$spl."' ";
	    } else { 
		$c1 = $conn->execute("select * from playlist_audio where vkey='".$pkey."';");
		if ( $c1->recordcount() > 0 ) { 
		    $pl = 'audio'; 
		    $spl = 'pla'.$pkey;
		    $spq = " and stype='".$spl."' ";
		}
	    }
    	}
    	
	$cr = $conn->execute("select * from subscriptions where subscriber_uid='$_SESSION[UID]' and subscribed_name='$user' and active='1' $spq;");
        if ( $cr->recordcount() < 1 ) { illegal_op(); }
    	
    	$active = " ptype='".$pl."' and vkey='".$pkey."' and active='1' ";
    	$cmd = '';

	if ( $filter == 'f1' ) { $qu = "order by v.vtitle asc"; }
	if ( $filter == 'f2' ) { $qu = "order by v.vduration desc"; }
	if ( $filter == 'f3' or $filter == '' ) { $qu = "order by v.adddate desc"; }
	if ( $filter == 'f4' ) { $qu = "order by v.views desc"; }
	if ( $filter == 'f5' ) { $qu = "order by v.rate desc"; }
	if ( $filter == '' ) { $pf = ''; } else { $pf = '/'.$filter; }
    }

    if ( ( $ftype == 'video_favorites' ) or ( $ftype == 'image_favorites' ) or ( $ftype == 'audio_favorites' ) ) {
	if ( $filter == 'f1' ) { $qu = "order by v.vtitle asc"; }
	if ( $filter == 'f2' ) { $qu = "order by v.vduration desc"; }
	if ( $filter == 'f3' or $filter == '' ) { $qu = "order by v.adddate desc"; }
	if ( $filter == 'f4' ) { $qu = "order by v.views desc"; }
	if ( $filter == 'f5' ) { $qu = "order by v.rate desc"; }
	if ( $filter == '' ) { $pf = ''; } else { $pf = '/'.$filter; }
    }
    
    // paging
    $listing_per_page = $config['paging_mysubs'];
    if(filter_title($_REQUEST[page])=="") $page = 1; else $page = filter_title($_REQUEST[page]); $type = $ftype;
    if ( $pkey == '' and $fav_q != '1' ) $sql = "SELECT count(*) as total from $tbl where $cmd $active $qu limit $listing_per_page";
    elseif ( $fav_q == '1' ) $sql="select s.*,v.* from $tbl v, $tbl3 s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.uid='$uid' $qu;";
    else $sql = "select s.*,v.* from files_".$pl." v, $tbl s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.ptype='".$pl."' and s.vkey='".$pkey."' $qu;";
    $ars = $conn->Execute($sql); 
    if ( $pkey == '' and $fav_q != '1' ) $total = $ars->fields['total']; else $total = $ars->recordcount();
    $tpage = ceil($total/$listing_per_page);
    if($tpage==0) $spage=$tpage+1; else $spage = $tpage;
    $startfrom = ($page-1)*$listing_per_page; $start_num=$startfrom+1;
    $smarty->assign('tpage',$tpage);
    $page_no = "";

    for($i=1; $i<=$tpage; $i++) {
	if($i==$page) $page_no .= "<span class=\"pag_act\">$i</span>";
	else {
	    if ( $tbl == 'playlist_files' ) $page_no .= " <a href='$config[base_url]/my_subscriptions/$user/$type/pl/$pkey$pf/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
	    else $page_no .= " <a href='$config[base_url]/my_subscriptions/$user/$type/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
	}
    }
    if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]"; else $link = $lang['adm_setguestnoentry'];
    if($tpage>1) {
	$nextpage=$page+1; $prevpage=$page-1;
	if ($type!="") { 
	    if ( $tbl == 'playlist_files' ) $prevlink="<a href='$config[base_url]/my_subscriptions/$user/$type/pl/$pkey$pf/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
	    else $prevlink="<a href='$config[base_url]/my_subscriptions/$user/$type/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
	}
	if ($type!="") {
	    if ( $tbl == 'playlist_files' ) $nextlink="<a href='$config[base_url]/my_subscriptions/$user/$type/pl/$pkey$pf/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
	    else $nextlink="<a href='$config[base_url]/my_subscriptions/$user/$type/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
	}
	if($page==$tpage) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link;
	elseif($tpage>$page && $page>1) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
	elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
    }
    if ( $pkey == '' and $fav_q != '1' ) $rv = $conn->execute("select * from $tbl where $cmd $active $qu limit $startfrom, $listing_per_page;");
    elseif ( $fav_q == '1' ) $rv = $conn->execute("select s.*,v.* from $tbl v, $tbl3 s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.uid='$uid' $qu limit $startfrom, $listing_per_page;");
    else $rv = $conn->execute("select s.*,v.* from files_".$pl." v, $tbl s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.ptype='".$pl."' and s.vkey='".$pkey."' $qu limit $startfrom, $listing_per_page;");
    if ( $ftype == 'audios' ) $smarty->assign('auds', $rv->getrows());
    elseif ( $ftype == 'images' ) $smarty->assign('imgs', $rv->getrows());
    elseif ( $ftype == 'videos' ) $smarty->assign('vids', $rv->getrows());
    elseif ( $ftype == 'video_favorites' ) $smarty->assign('vids', $rv->getrows());
    elseif ( $ftype == 'image_favorites' ) $smarty->assign('imgs', $rv->getrows());
    elseif ( $ftype == 'audio_favorites' ) $smarty->assign('auds', $rv->getrows());
    
    $smarty->assign('start_num',$start_num); $smarty->assign('end_num',$startfrom+$rv->recordcount());
    $smarty->assign('total',$total); $smarty->assign('link',$link);

    if ( $_SESSION['viewmode'] == 'list' ) {
	$farr = $_POST['mid'];
	$acts = $_POST['lactions'];
	$plfarr = $_REQUEST['vlpl'];
    } elseif ( $_SESSION['viewmode'] == 'grid' ) {
	$farr = $_REQUEST['gmid'];
	$acts = $_REQUEST['actions'];
	$plfarr = $_REQUEST['vgpl'];
    }

    if ($acts==$lang['qlist_txt14']) {//add to playlist
        if ( $plfarr == '' ) $err = $lang['plist_txt36'];
        if ( $err == '' ) {
        foreach($farr as $value) {
    	    foreach($plfarr as $plvalue) {
        	$fu = $conn->execute("select uid from files_image where vid='".filter_title($value)."'"); $fuid = $fu->fields['uid'];
                $conn->execute("insert into playlist_files set ptype='".$xt."', vid='".filter_title($value)."', uid='".$_SESSION['UID']."', vkey='".filter_title($plvalue)."';");
            }
        }
        }
        if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
    }
    if ( $acts == $lang['qlist_txt1'] ) { //add to quicklist
        foreach ( $farr as $value ) {
            $fu = $conn->execute("select uid from $tbl where vid='".filter_title($value)."';");
            $fuid = $fu->fields['uid'];
            $conn->execute("insert into $tbl2 set uid='".$_SESSION['UID']."', vid='".filter_title($value)."', addtime='".time()."', from_uid='".$fuid."';");
        }
        if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
    }
    if ($acts==$lang['act_addfav']) {
        foreach ( $farr as $value ) { //add to favorites
            $fu = $conn->execute("select uid from $tbl where vid='".filter_title($value)."'"); $fuid = $fu->fields['uid'];
            $conn->execute("insert into $tbl3 set vid='".filter_title($value)."', uid='$_SESSION[UID]', from_uid='$fuid';");
            if ( $conn->Affected_Rows() > 0 ) $conn->execute("update $tbl set vfav=vfav+1 where vid='".filter_title($value)."'");
        }
        if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
    } 
    //quicklist count
    $rem_ip = $_SERVER['REMOTE_ADDR'];
    if ( $_SESSION['UID'] == '' ) {
	$vt = $conn->execute("select count(*) as vtotal from quicklist_video where uid='0' and quicklist_ip='".$rem_ip."';");
	$it = $conn->execute("select count(*) as itotal from quicklist_image where uid='0' and quicklist_ip='".$rem_ip."';");
	$at = $conn->execute("select count(*) as atotal from quicklist_audio where uid='0' and quicklist_ip='".$rem_ip."';");
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
} 

if ( $act == 'unsub' ) {

    if (isset($_GET['pl'])) $plk=filter_title($_GET['pl']);
    if (isset($_GET['fav'])) $fav=filter_title($_GET['fav']);
    
    if ( $plk == '' and $fav == '') {
	$dq = $conn->execute("delete from subscriptions where subscriber_name = '$_SESSION[USERNAME]' and subscribed_name = '$auser' and stype='user';");
	if ( mysql_affected_rows() > 0 ) $msg = $lang['uch_shtxt111']; else $err = $lang['uch_shtxt13'];
    } elseif ( $fav != '' ) {
	$dq = $conn->execute("delete from subscriptions where subscriber_name = '$_SESSION[USERNAME]' and subscribed_name = '$fav' and stype='fav';");
	if ( mysql_affected_rows() > 0 ) $msg = $lang['uch_shtxt111']; else $err = $lang['uch_shtxt13'];
    } elseif ( $plk != '' ) {
	$tbl = 'playlist_files';
	$c1 = $conn->execute("select * from playlist_video where vkey='".$plk."';");
	if ( $c1->recordcount() > 0 ) { 
	    $pl = 'v'; 
	} else { 
	    $c1 = $conn->execute("select * from playlist_image where vkey='".$plk."';");
	    if ( $c1->recordcount() > 0 ) { 
		$pl = 'i'; 
	    } else { 
		$c1 = $conn->execute("select * from playlist_audio where vkey='".$plk."';");
		if ( $c1->recordcount() > 0 ) { 
		    $pl = 'a'; 
		}
	    }
    	}
    	$r = $conn->execute("delete from subscriptions where subscriber_name = '$_SESSION[USERNAME]' and stype='pl".$pl.$plk."';");
    	if ( mysql_affected_rows() > 0 ) $msg = $lang['uch_shtxt111']; else $err = $lang['uch_shtxt13'];
//    	$active = " ptype='".$pl."' and vkey='".$pkey."' and active='1' ";
//    	$cmd = '';
    }
}


$sql="SELECT * from subscriptions where subscriber_uid='$_SESSION[UID]' and stype='user';";
$subsrs = $conn->Execute($sql); $mysubs_user = $subsrs->getrows(); 
$smarty->assign('mysubs_user',$mysubs_user);
$sql="SELECT * from subscriptions where subscriber_uid='$_SESSION[UID]' and stype='fav';";
$subsrs = $conn->Execute($sql); $mysubs_fav = $subsrs->getrows(); 
$smarty->assign('mysubs_fav',$mysubs_fav);
$sql="SELECT * from subscriptions where subscriber_uid='$_SESSION[UID]' and stype!='fav' and stype!='user';";
$subsrs = $conn->Execute($sql); $mysubs_pl = $subsrs->getrows(); 
$smarty->assign('mysubs_pl',$mysubs_pl);

$smarty->assign('dmenu','mysubs');
set_btn("bhome"); set_sbtn("mysubs"); set_title($lang['mysubs_heading']);
$smarty->assign('err',$err); $smarty->assign('msg',$msg);
$smarty->display('main_header.tpl');
$smarty->display('main_mysubs.tpl');
$smarty->display('footer.tpl');
?>