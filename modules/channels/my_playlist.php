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
check_login('my_playlists');

$ip = mysql_real_escape_string ( $_SERVER['REMOTE_ADDR'] );
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

if ( isset ( $_REQUEST['vplname'] ) ) $_REQUEST['vplname'] = filter_descr ( $_REQUEST['vplname'] );
if ( isset ( $_REQUEST['iplname'] ) ) $_REQUEST['iplname'] = filter_descr ( $_REQUEST['iplname'] );
if ( isset ( $_REQUEST['aplname'] ) ) $_REQUEST['aplname'] = filter_descr ( $_REQUEST['aplname'] );
if ( isset ( $_REQUEST['setvpl'] ) ) $_REQUEST['setvpl'] = filter_title ( $_REQUEST['setvpl'] );
if ( isset ( $_REQUEST['setipl'] ) ) $_REQUEST['setipl'] = filter_title ( $_REQUEST['setipl'] );
if ( isset ( $_REQUEST['setapl'] ) ) $_REQUEST['setapl'] = filter_title ( $_REQUEST['setapl'] );
if ( isset ( $_REQUEST['vplkey'] ) ) $_REQUEST['vplkey'] = filter_title ( $_REQUEST['vplkey'] );
if ( isset ( $_REQUEST['iplkey'] ) ) $_REQUEST['iplkey'] = filter_title ( $_REQUEST['iplkey'] );
if ( isset ( $_REQUEST['aplkey'] ) ) $_REQUEST['aplkey'] = filter_title ( $_REQUEST['aplkey'] );

$smarty->assign('dmenu', 'myfav');
$link = $lang['plist_txt13']; $linka = $link; $linki = $link; $smarty->assign('link', $link); $smarty->assign('linka', $linka); $smarty->assign('linki', $linki);

//clear playlist
if ( filter_title ( $_POST['vplclearkey'] ) != '' ) {
    $conn->execute("update playlist_video set thumb='0' where vkey='".$_REQUEST['vplkey']."';");
    $conn->execute("delete from playlist_files where ptype='video' and vkey='".$_REQUEST['vplkey']."';");
    if ( $conn->Affected_Rows() > 0 ) $msg = $lang['plist_txt43'];
} elseif ( filter_title ( $_POST['iplclearkey'] ) != '' ) {
    $conn->execute("update playlist_image set thumb='0' where vkey='".$_REQUEST['iplkey']."';");
    $conn->execute("delete from playlist_files where ptype='image' and vkey='".$_REQUEST['iplkey']."';");
    if ( $conn->Affected_Rows() > 0 ) $msg = $lang['plist_txt43'];
} elseif ( filter_title ( $_POST['aplclearkey'] ) != '' ) {
    $conn->execute("update playlist_audio set thumb='0' where vkey='".$_REQUEST['aplkey']."';");
    $conn->execute("delete from playlist_files where ptype='audio' and vkey='".$_REQUEST['aplkey']."';");
    if ( $conn->Affected_Rows() > 0 ) $msg = $lang['plist_txt43'];
}

//remove playlist(s)
$vpldelkey = filter_title ( $_POST['vpldelkey'] );
$ipldelkey = filter_title ( $_POST['ipldelkey'] );
$apldelkey = filter_title ( $_POST['apldelkey'] );

if ( $vpldelkey != '' or $ipldelkey != '' or $apldelkey != '' )
{
    $pl_ch = $conn->execute("select th_plistchan from member_theme where th_uid='$_SESSION[UID]';");
    $plch = $pl_ch->fields['th_plistchan'];
    $pl_array = explode(",", $plch);
    
    if ($vpldelkey!="" && $config['enable_videos']=="1") { $sql="delete from playlist_video where vkey='".$vpldelkey."' and uid='".$_SESSION['UID']."';"; $sql2 = "delete from playlist_files where vkey='".$vpldelkey."';"; $sql3 = "delete from subscriptions where stype='plv".$vpldelkey."';"; }
    if ($apldelkey!="" && $config['enable_audio']=="1") { $sql="delete from playlist_audio where vkey='".$apldelkey."' and uid='".$_SESSION['UID']."';"; $sql2 = "delete from playlist_files where vkey='".$apldelkey."';";  $sql3 = "delete from subscriptions where stype='pla".$apldelkey."';"; }
    if ($ipldelkey!="" && $config['enable_images']=="1") { $sql="delete from playlist_image where vkey='".$ipldelkey."' and uid='".$_SESSION['UID']."';"; $sql2 = "delete from playlist_files where vkey='".$ipldelkey."';";  $sql3 = "delete from subscriptions where stype='pli".$ipldelkey."';"; }
    $rs=$conn->execute($sql);
    $rs2=$conn->execute($sql2);
    $rs3=$conn->execute($sql3);
    if ($vpldelkey!="") { 
	foreach ( $pl_array as $pl_key ) {
	    if ( $vpldelkey == $pl_key ) $npl_ch.= ''; else $npl_ch.=$pl_key.',';
	}
	$npl_ch = substr ( $npl_ch, 0, -1 );
	$conn->execute("update member_theme set th_plistchan='$npl_ch' where th_uid='$_SESSION[UID]';");
	header("Location: $config[base_url]/my_playlists/video"); exit; 
    }
    elseif ($ipldelkey!="") { 
	foreach ( $pl_array as $pl_key ) {
	    if ( $ipldelkey == $pl_key ) $npl_ch.= ''; else $npl_ch.=$pl_key.',';
	}
	$npl_ch = substr ( $npl_ch, 0, -1 );
	$conn->execute("update member_theme set th_plistchan='$npl_ch' where th_uid='$_SESSION[UID]';");
	header("Location: $config[base_url]/my_playlists/image"); exit; 
    }
    elseif ($apldelkey!="") { 
	foreach ( $pl_array as $pl_key ) {
	    if ( $apldelkey == $pl_key ) $npl_ch.= ''; else $npl_ch.=$pl_key.',';
	}
	$npl_ch = substr ( $npl_ch, 0, -1 );
	$conn->execute("update member_theme set th_plistchan='$npl_ch' where th_uid='$_SESSION[UID]';");
	header("Location: $config[base_url]/my_playlists/audio"); exit; 
    }
}

//new playlists
function gen_plist_key() {
    $possible_chars = "23456789QWERTYUPADFGHJLZXCVBNMqwertyuiopasdfghjklzxcvbnm";
    $i = 0;
    while ( $i < 20 ) {
	$char=substr($possible_chars,mt_rand(0,strlen($possible_chars)-1),1);
	if (!strstr($lkey,$char)) {
	    $lkey.=$char;
	    $i++;
	}
    } 
    return $lkey;
}
if ( $_REQUEST['setvpl'] != '' and $_REQUEST['vtype'] == 'all') {
    $vplname = $_REQUEST['vplname'];
    if ( $vplname == '' ) $err = $lang['plist_txt11'];
    elseif ( strlen ( $vplname ) < $config['pltitle_min'] or strlen ( $vplname ) > $config['pltitle_max'] ) $err = $lang['plist_txt12'];

    if ( $err == '' ) {
	$vplkey = gen_plist_key();
	$conn->execute("insert into playlist_video set pname='".$vplname."', uid='".$_SESSION['UID']."', from_uid='1', vid='1', addtime='".time()."', descr='', vkey='".$vplkey."', tags='', privacy='public';");
	if ( $conn->Affected_Rows() > 0 ) $msg = $lang['plist_txt14']; else $err = $lang['plist_txt15'];
    }
} elseif ( $_REQUEST['setipl'] != '' and $_REQUEST['itype'] == 'all') {
    $iplname = $_REQUEST['iplname'];
    if ( $iplname == '' ) $err = $lang['plist_txt11'];
    elseif ( strlen ( $iplname ) < $config['pltitle_min'] or strlen ( $iplname ) > $config['pltitle_max'] ) $err = $lang['plist_txt12'];
    
    if ( $err == '' ) {
	$iplkey = gen_plist_key();
	$conn->execute("insert into playlist_image set pname='".$iplname."', uid='".$_SESSION['UID']."', from_uid='1', vid='1', addtime='".time()."', descr='', vkey='".$iplkey."', tags='', privacy='public';");
	if ( $conn->Affected_Rows() > 0 ) $msg = $lang['plist_txt14']; else $err = $lang['plist_txt15'];
    }
} elseif ( $_REQUEST['setapl'] != '' and $_REQUEST['atype'] == 'all') {
    $aplname = $_REQUEST['aplname'];
    if ( $aplname == '' ) $err = $lang['plist_txt11'];
    elseif ( strlen ( $aplname ) < $config['pltitle_min'] or strlen ( $aplname ) > $config['pltitle_max'] ) $err = $lang['plist_txt12'];
    
    if ( $err == '' ) {
	$aplkey = gen_plist_key();
	$conn->execute("insert into playlist_audio set pname='".$aplname."', uid='".$_SESSION['UID']."', from_uid='1', vid='1', addtime='".time()."', descr='', vkey='".$aplkey."', tags='', privacy='public';");
	if ( $conn->Affected_Rows() > 0 ) $msg = $lang['plist_txt14']; else $err = $lang['plist_txt15'];
    }
}

$vtype=filter_title($_REQUEST[vtype]);
if ($vtype=="all" || $vtype=="") { $qu2v="order by s.position asc"; }
if ($vtype=="comments") { if ($config[file_comments]=="1") { $qu2v="order by v.comments desc"; } else { illegal_op(); } }
if ($vtype=="responses") { if ($config[file_responses]=="1") { $qu2v="order by v.responses desc"; } else { illegal_op(); } }
if ($vtype=="date") { $qu2v="order by v.adddate desc"; }
if ($vtype=="favorited") { $qu2v="order by v.vfav desc"; }
if ($vtype=="featured") { $qu2v="and v.is_featured='yes' order by v.vtitle asc"; }
if ($vtype=="ratings") { if ($config[file_ratings]=="1") { $qu2v="order by v.rate desc"; } else { illegal_op(); } }
if ($vtype=="views") { $qu2v="order by v.views desc"; }
//if ($vtype=="") { $qu2v="order by s.addtime desc"; }

$itype=filter_title($_REQUEST[itype]);
if ($itype=="all" || $itype=="") { $qu2i="order by s.position asc"; }
if ($itype=="comments") { if ($config[file_comments]=="1") { $qu2i="order by v.comments desc"; } else { illegal_op(); } }
if ($itype=="responses") { if ($config[file_responses]=="1") { $qu2i="order by v.responses desc"; } else { illegal_op(); } }
if ($itype=="date") { $qu2i="order by v.adddate desc"; }
if ($itype=="favorited") { $qu2i="order by v.vfav desc"; }
if ($itype=="featured") {$qu2i="and v.is_featured='yes' order by v.vtitle asc"; }
if ($itype=="ratings") { if ($config[file_ratings]=="1") { $qu2i="order by v.rate desc"; } else { illegal_op(); } }
if ($itype=="views") { $qu2i="order by v.views desc"; }

$atype=filter_title($_REQUEST[atype]);
if ($atype=="all" || $atype=="") { $qu2a="order by s.position asc"; }
if ($atype=="comments") { if ($config[file_comments]=="1") { $qu2a="order by v.comments desc"; } else { illegal_op(); } }
if ($atype=="responses") { if ($config[file_responses]=="1") { $qu2a="order by v.responses desc"; } else { illegal_op(); } }
if ($atype=="date") { $qu2a="order by v.adddate desc"; }
if ($atype=="favorited") { $qu2a="order by v.vfav desc"; }
if ($atype=="featured") { $qu2a="and v.is_featured='yes' order by v.vtitle asc"; }
if ($atype=="ratings") { if ($config[file_ratings]=="1") { $qu2a="order by v.rate desc"; } else { illegal_op(); } }
if ($atype=="views") { $qu2a="order by v.views desc"; }

//delete playlist entry
if ($_REQUEST[action]=="delete") {
    $vid=filter_title($_REQUEST[vid]);
    $aid=filter_title($_REQUEST[aid]);
    $iid=filter_title($_REQUEST[iid]); 
    
    if ($vid!="" && $config['enable_videos']=="1") {
	$tt=ereg_replace("_{1,}", " ", $vid);
	if ($config[same_title_uploads]=="0") $tq="select vkey from files_video where vtitle='$tt'";
	elseif ($config[same_title_uploads]=="1") $tq="select vkey from files_video where vkey='$vid'";
	$rq=$conn->execute($tq);
	$vid=$rq->fields[vkey];
	$listv=key_to_info($vid);
	$rvid=$listv[0];
	$sql="delete from playlist_files where ptype='video' and uid='$_SESSION[UID]' and vid='$rvid' and vkey='$_REQUEST[vplkey]';";
	$rs=$conn->execute($sql);
    }
    if ($aid!="" && $config['enable_audio']=="1") {
	$tt=ereg_replace("_{1,}", " ", $aid);
	if ($config[same_title_uploads]=="0") $tq="select vkey from files_audio where vtitle='$tt'";
	elseif ($config[same_title_uploads]=="1") $tq="select vkey from files_audio where vkey='$aid'";
        $rq=$conn->execute($tq);
        $aid=$rq->fields[vkey];
        $lista=key_to_info_audio($aid);
        $raid=$lista[0];
        $sql="delete from playlist_files where ptype='audio' and uid='$_SESSION[UID]' and vid='$raid' and vkey='$_REQUEST[aplkey]';";
        $rs=$conn->execute($sql);
    }
    if ($iid!="" && $config['enable_images']=="1") {
	$tt=ereg_replace("_{1,}", " ", $iid);
        if ($config[same_title_uploads]=="0") $tq="select vkey from files_image where vtitle='$tt'";
        elseif ($config[same_title_uploads]=="1") $tq="select vkey from files_image where vkey='$iid'";
        $rq=$conn->execute($tq);
        $iid=$rq->fields[vkey];
        $listi=key_to_info_image($iid);
        $riid=$listi[0];
        $sql="delete from playlist_files where ptype='image' and uid='$_SESSION[UID]' and vid='$riid' and vkey='$_REQUEST[iplkey]';";
        $rs=$conn->execute($sql); 
    }
    if ( $conn->Affected_Rows() > 0 ) $msg = $lang['plist_txt43'];
}

// paging video
$listing_per_page = $config['paging_plist'];
$smarty->assign('total1', 0); 
$smarty->assign('total2', 0); 
$smarty->assign('total3', 0); 

if ($config['enable_videos']=="1" and $_REQUEST['vplkey'] != '')
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
        	$conn->execute("delete from playlist_files where ptype='video' and vid='".filter_title($value)."' and uid='$_SESSION[UID]' and vkey='".$_REQUEST['vplkey']."';");
    	    }
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_myaudio1'];
        }
        if ($acts==$lang['act_addfav']) //add to fav
        {
            foreach($farr as $value) { 
        	$fu = $conn->execute("select uid from files_video where vid='".filter_title($value)."'"); $fuid = $fu->fields['uid'];
        	$conn->execute("insert into fav_video set vid='".filter_title($value)."', uid='$_SESSION[UID]', from_uid='$fuid';"); 
        	if ( $conn->Affected_Rows() > 0 ) $conn->execute("update files_video set vfav=vfav+1 where vid='".filter_title($value)."'");
    	    }
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
        }
        if ($acts==$lang['qlist_txt1']) {//add to quicklist
                foreach($farr as $value) {
                    $afu = $conn->execute("select uid from files_video where vid='".filter_title($value)."';"); $afuid = $afu->fields['uid'];
                    $conn->execute("insert into quicklist_video set uid='".$_SESSION['UID']."', vid='".filter_title($value)."', addtime='".time()."', from_uid='".$afuid."';");
                }
                if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
        } 
    }
} 

if($_REQUEST[page]=="")
$page = 1;
else
$page = filter_title($_REQUEST[page]);
//$sql1="select s.*,v.* from files_video v, playlist_video s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.vkey='".$_REQUEST['vplkey']."' and s.uid='$_SESSION[UID]' $qu2v";
$sql1="select s.*,v.* from files_video v, playlist_files s where s.ptype='video' and v.active='1' and s.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.vkey='".$_REQUEST['vplkey']."' $qu2v";
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
	if($vtype!="") $page_no .= " <a href='$config[base_url]/my_playlists/video/$_REQUEST[vplkey]/$vtype/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
	else $page_no .= " <a href='$config[base_url]/my_playlists/video/$_REQUEST[vplkey]/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
    }
}
if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
else $link = $lang['plist_txt17'];
//else $link = $lang['mypl_videonone'];

if($tpage>1)
{
    $nextpage=$page+1;
    $prevpage=$page-1;
    if($vtype!="") $prevlink="<a href='$config[base_url]/my_playlists/video/$_REQUEST[vplkey]/$vtype/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    else $prevlink="<a href='$config[base_url]/my_playlists/video/$_REQUEST[vplkey]/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    
    if($vtype!="") $nextlink="<a href='$config[base_url]/my_playlists/video/$_REQUEST[vplkey]/$vtype/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    else $nextlink="<a href='$config[base_url]/my_playlists/video/$_REQUEST[vplkey]/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    if($page==$tpage) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link;
    elseif($tpage>$page && $page>1) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
    elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
}
//$sql="select s.*,v.* from files_video v, playlist_video s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.vkey='".$_REQUEST['vplkey']."' and s.uid='$_SESSION[UID]' $qu2v limit $startfrom, $listing_per_page";
$sql="select s.*,v.* from files_video v, playlist_files s where s.ptype='video' and v.active='1' and s.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.vkey='".$_REQUEST['vplkey']."' $qu2v limit $startfrom, $listing_per_page";
$rs = $conn->Execute($sql);
$plist = $rs->getrows(); 

$smarty->assign('start_num',$start_num);
$smarty->assign('end_num',$startfrom+$rs->recordcount());
$smarty->assign('total',$total);
$smarty->assign('link',$link);
$smarty->assign('page',$page+0);
$smarty->assign('vids',$plist);

//$qv="select v.vtags,s.vid from files_video v, playlist_video s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.vkey='".$_REQUEST['vplkey']."' and s.uid='$_SESSION[UID]' $qu2v limit $startfrom, $listing_per_page";
$qv="select v.vtags,s.vid from files_video v, playlist_files s where s.ptype='video' and v.active='1' and s.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.vkey='".$_REQUEST['vplkey']."' $qu2v limit $startfrom, $listing_per_page";
$vtags=tags($qv);
$smarty->assign('vtags',$vtags);
//save playlist info
if ( isset ( $_POST['vplsave'] ) ) $_POST['vplsave'] = filter_descr ( $_POST['vplsave'] );
if ( $_POST['vplsave'] != '' ) {
    $vpltitle = filter_descr ( $_POST['vpltitle'] );
    $vpldesc = filter_descr ( $_POST['vpldesc'] );
    $vplembed = filter_title ( $_POST['vplembed_allow'] );
    if ( $vplembed == 'on' ) $vplembed = '1'; else $vplembed = '0';
    $vpltags = filter_descr ( $_POST['vpltags'] );
    $vplpriv = filter_title ( $_POST['vplpriv'] );
    if ( $config['enable_channels'] == '1' ) {
	$vplog = filter_title ( $_POST['vlog_set'] );
	if ( $vplog == 'on' ) $vplog = '1'; else $vplog = '0';
	$vl_q = ", vlog='".$vplog."'";
    } else $vl_q = '';
    if ( $vpltitle == '' ) $err = $lang['plist_txt11'];
    elseif ( strlen ( $vpltitle ) < $config['pltitle_min'] or strlen ( $vpltitle ) > $config['pltitle_max'] ) $err = $lang['plist_txt12']; 
    elseif ( $vplog == '1' and $vplpriv == 'private' ) $err = $lang['err_plpriv'];
    
    if ( $err == '' ) {
	if ( $vplog == '1' ) {
	    $conn->execute("update playlist_video set vlog='0' where vlog!='0';");
	    $conn->execute("update playlist_video set vlog='1', vlog_time='".time()."' where vkey='".$_REQUEST['vplkey']."';");
	    if ( $conn->Affected_Rows() > 0 ) $msg = $lang['plist_txt34'];
	}
	$conn->execute("update playlist_video set pname='".$vpltitle."', descr='".$vpldesc."', embed='".$vplembed."', tags='".$vpltags."', privacy='".$vplpriv."' ".$vl_q." where vkey='".$_REQUEST['vplkey']."';");
	if ( $conn->Affected_Rows() > 0 ) $msg = $lang['plist_txt34']; //else $err = $lang['plist_txt35'];
    }
}
}

if ($config['enable_audio']=="1" and $_REQUEST['aplkey'] != '')
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
                $conn->execute("delete from playlist_files where ptype='audio' and vid='".filter_title($value)."' and uid='$_SESSION[UID]' and vkey='".$_REQUEST['aplkey']."';");
            }
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_myaudio1'];
        } 
        if ($aacts==$lang['act_addfav']) //add to fav
        {
            foreach($afarr as $value) { 
        	$fu = $conn->execute("select uid from files_audio where vid='".filter_title($value)."'"); $fuid = $fu->fields['uid'];
        	$conn->execute("insert into fav_audio set vid='".filter_title($value)."', uid='$_SESSION[UID]', from_uid='$fuid';"); 
        	if ( $conn->Affected_Rows() > 0 ) $conn->execute("update files_audio set vfav=vfav+1 where vid='".filter_title($value)."'");
    	    }
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
        }
        if ($aacts==$lang['qlist_txt1']) {//add to quicklist
                foreach($afarr as $value) {
                    $afu = $conn->execute("select uid from files_audio where vid='".filter_title($value)."';"); $afuid = $afu->fields['uid'];
                    $conn->execute("insert into quicklist_audio set uid='".$_SESSION['UID']."', vid='".filter_title($value)."', addtime='".time()."', from_uid='".$afuid."';");
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
//$sql2="select s.*,v.* from files_audio v, playlist_audio s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.vkey='".$_REQUEST['aplkey']."' and s.uid='$_SESSION[UID]' $qu2a";
$sql2="select s.*,v.* from files_audio v, playlist_files s where s.ptype='audio' and v.active='1' and s.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.vkey='".$_REQUEST['aplkey']."' $qu2a";
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
	if($atype!="") $page_noa .= " <a href='$config[base_url]/my_playlists/audio/$_REQUEST[aplkey]/$atype/page$ia'><span class=\"pag\" id=\"pga$ia\">".$ia."</span></a> ";
	else $page_noa .= " <a href='$config[base_url]/my_playlists/audio/$_REQUEST[aplkey]/page$ia'><span class=\"pag\" id=\"pga$ia\">".$ia."</span></a> ";
    }
}
if($page_noa!="") $linka = "$lang[gen_page] $page_noa $lang[gen_pageof]";
else $linka = $lang['plist_txt19'];

if($tpagea>1)
{
    $nextpagea=$pagea+1;
    $prevpagea=$pagea-1;
    if($atype!="") $prevlinka="<a href='$config[base_url]/my_playlists/audio/$_REQUEST[aplkey]/$atype/page$prevpagea'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    else $prevlinka="<a href='$config[base_url]/my_playlists/audio/$_REQUEST[aplkey]/page$prevpagea'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    
    if($atype!="") $nextlinka="<a href='$config[base_url]/my_playlists/audio/$_REQUEST[aplkey]/$atype/page$nextpagea'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    else $nextlinka="<a href='$config[base_url]/my_playlists/audio/$_REQUEST[aplkey]/page$nextpagea'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    
    if($pagea==$tpagea) $linka="$prevlinka&nbsp;&nbsp;&nbsp;".$linka;
    elseif($tpagea>$pagea && $pagea>1) $linka="$prevlinka&nbsp;&nbsp;&nbsp;".$linka."&nbsp;&nbsp;&nbsp;$nextlinka";
    elseif($tpagea>$pagea && $pagea<=1) $linka.="&nbsp;&nbsp;&nbsp;$nextlinka";
}
//$sqla="select s.*,v.* from files_audio v, playlist_audio s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.vkey='".$_REQUEST['aplkey']."' and s.uid='$_SESSION[UID]' $qu2a limit $startfroma, $listing_per_page";
$sqla="select s.*,v.* from files_audio v, playlist_files s where s.ptype='audio' and v.active='1' and s.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.vkey='".$_REQUEST['aplkey']."' $qu2a limit $startfroma, $listing_per_page";
$rsa = $conn->Execute($sqla);
$plista = $rsa->getrows(); 

$smarty->assign('start_numa',$start_numa);
$smarty->assign('end_numa',$startfroma+$rsa->recordcount());
$smarty->assign('totala',$totala);
$smarty->assign('linka',$linka);
$smarty->assign('pagea',$pagea+0);
$smarty->assign('auds',$plista);

//$qa="select v.vtags,s.vid from files_audio v, playlist_audio s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.vkey='".$_REQUEST['aplkey']."' and s.uid='$_SESSION[UID]' $qu2a limit $startfroma, $listing_per_page";
$qa="select v.vtags,s.vid from files_audio v, playlist_files s where s.ptype='audio' and v.active='1' and s.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.vkey='".$_REQUEST['aplkey']."' $qu2a limit $startfroma, $listing_per_page";
$atags=tags($qa);
$smarty->assign('atags',$atags);

if ( isset ( $_POST['aplsave'] ) ) $_POST['aplsave'] = filter_descr ( $_POST['aplsave'] );

if ( $_POST['aplsave'] != '' ) {
    $apltitle = filter_descr ( $_POST['apltitle'] );
    $apldesc = filter_descr ( $_POST['apldesc'] );
    $aplembed = filter_title ( $_POST['aplembed_allow'] );
    if ( $aplembed == 'on' ) $aplembed = '1'; else $aplembed = '0';
    $apltags = filter_descr ( $_POST['apltags'] );
    $aplpriv = filter_title ( $_POST['aplpriv'] );
    if ( $config['enable_channels'] == '1' ) {
	$aplog = filter_title ( $_POST['alog_set'] );
	if ( $aplog == 'on' ) $aplog = '1'; else $aplog = '0';
	$al_q = ", vlog='".$aplog."'";
    } else $al_q = '';
    if ( $apltitle == '' ) $err = $lang['plist_txt11'];
    elseif ( strlen ( $apltitle ) < $config['pltitle_min'] or strlen ( $apltitle ) > $config['pltitle_max'] ) $err = $lang['plist_txt12']; 
    elseif ( $aplog == '1' and $aplpriv == 'private' ) $err = $lang['err_plpriv'];

    if ( $err == '' ) {
	if ( $aplog == '1' ) {
	    $conn->execute("update playlist_audio set vlog='0' where vlog!='0';");
	    $conn->execute("update playlist_audio set vlog='1', vlog_time='".time()."' where vkey='".$_REQUEST['aplkey']."';");
	    if ( $conn->Affected_Rows() > 0 ) $msg = $lang['plist_txt34'];
	}
	$conn->execute("update playlist_audio set pname='".$apltitle."', descr='".$apldesc."', embed='".$aplembed."', tags='".$apltags."', privacy='".$aplpriv."' ".$al_q." where vkey='".$_REQUEST['aplkey']."';");
	if ( $conn->Affected_Rows() > 0 ) $msg = $lang['plist_txt34']; //else $err = $lang['plist_txt35'];
    }
}

}


if ($config['enable_images']=="1" and $_REQUEST['iplkey'] != '')
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
                $conn->execute("delete from playlist_files where ptype='image' and vid='".filter_title($value)."' and uid='$_SESSION[UID]' and vkey='".$_REQUEST['iplkey']."';");
            }
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_myaudio1'];
        }
        if ($iacts==$lang['act_addfav']) //add to fav
        {
            foreach($ifarr as $value) { 
        	$fu = $conn->execute("select uid from files_image where vid='".filter_title($value)."'"); $fuid = $fu->fields['uid'];
        	$conn->execute("insert into fav_image set vid='".filter_title($value)."', uid='$_SESSION[UID]', from_uid='$fuid';"); 
        	if ( $conn->Affected_Rows() > 0 ) $conn->execute("update files_image set vfav=vfav+1 where vid='".filter_title($value)."'");
    	    }
            if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
        }
        if ($iacts==$lang['qlist_txt1']) {//add to quicklist
                foreach($ifarr as $value) {
                    $afu = $conn->execute("select uid from files_image where vid='".filter_title($value)."';"); $afuid = $afu->fields['uid'];
                    $conn->execute("insert into quicklist_image set uid='".$_SESSION['UID']."', vid='".filter_title($value)."', addtime='".time()."', from_uid='".$afuid."';");
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
//$sql3="select s.*,v.* from files_image v, playlist_image s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.vkey='".$_REQUEST['iplkey']."' and s.uid='$_SESSION[UID]' $qu2i";
$sql3="select s.*,v.* from files_image v, playlist_files s where s.ptype='image' and v.active='1' and s.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.vkey='".$_REQUEST['iplkey']."' $qu2i";
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
	if($itype!="") $page_noi.= " <a href='$config[base_url]/my_playlists/image/$_REQUEST[iplkey]/$itype/page$ii'><span class=\"pag\" id=\"pgi$ii\">".$ii."</span></a> ";
	else $page_noi.= " <a href='$config[base_url]/my_playlists/image/$_REQUEST[iplkey]/page$ii'><span class=\"pag\" id=\"pgi$ii\">".$ii."</span></a> ";
    }
}
if($page_noi!="") $linki = "$lang[gen_page] $page_noi $lang[gen_pageof]";
else $linki = $lang['plist_txt18'];

if($tpagei>1)
{
    $nextpagei=$pagei+1;
    $prevpagei=$pagei-1;
    if($itype!="") $prevlinki="<a href='$config[base_url]/my_playlists/image/$_REQUEST[iplkey]/$itype/page$prevpagei'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    else $prevlinki="<a href='$config[base_url]/my_playlists/image/$_REQUEST[iplkey]/page$prevpagei'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    
    if($itype!="") $nextlinki="<a href='$config[base_url]/my_playlists/image/$_REQUEST[iplkey]/$itype/page$nextpagei'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    else $nextlinki="<a href='$config[base_url]/my_playlists/image/$_REQUEST[iplkey]/page$nextpagei'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    
    if($pagei==$tpagei) $linki="$prevlinki&nbsp;&nbsp;&nbsp;".$linki;
    elseif($tpagei>$pagei && $pagei>1) $linki="$prevlinki&nbsp;&nbsp;&nbsp;".$linki."&nbsp;&nbsp;&nbsp;$nextlinki";
    elseif($tpagei>$pagei && $pagei<=1) $linki.="&nbsp;&nbsp;&nbsp;$nextlinki";
}

//$sqli="select s.*,v.* from files_image v, playlist_image s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.vkey='".$_REQUEST['iplkey']."' and s.uid='$_SESSION[UID]' $qu2i limit $startfromi, $listing_per_page";
$sqli="select s.*,v.* from files_image v, playlist_files s where s.ptype='image' and v.active='1' and s.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.vkey='".$_REQUEST['iplkey']."' $qu2i limit $startfromi, $listing_per_page";
$rsi = $conn->Execute($sqli);
$plisti = $rsi->getrows(); 

$smarty->assign('start_numi',$start_numi);
$smarty->assign('end_numi',$startfromi+$rsi->recordcount());
$smarty->assign('totali',$totali);
$smarty->assign('linki',$linki);
$smarty->assign('pagei',$pagei+0);
$smarty->assign('imgs',$plisti);

//$qi="select v.vtags,s.vid from files_image v, playlist_image s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and v.vtype='public' and s.vkey='".$_REQUEST['iplkey']."' and s.uid='$_SESSION[UID]' $qu2i limit $startfromi, $listing_per_page";
$qi="select v.vtags,s.vid from files_image v, playlist_files s where s.ptype='image' and v.active='1' and s.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.vkey='".$_REQUEST['iplkey']."' $qu2i limit $startfromi, $listing_per_page";
$itags=tags($qi);
$smarty->assign('itags',$itags);

//save playlist info
if ( isset ( $_POST['iplsave'] ) ) $_POST['iplsave'] = filter_descr ( $_POST['iplsave'] );
if ( $_POST['iplsave'] != '' ) {
    $ipltitle = filter_descr ( $_POST['ipltitle'] );
    $ipldesc = filter_descr ( $_POST['ipldesc'] );
    $iplembed = filter_title ( $_POST['iplembed_allow'] );
    if ( $iplembed == 'on' ) $iplembed = '1'; else $iplembed = '0';
    $ipltags = filter_descr ( $_POST['ipltags'] );
    $iplpriv = filter_title ( $_POST['iplpriv'] );
    if ( $config['enable_channels'] == '1' ) {
	$iplog = filter_title ( $_POST['ilog_set'] );
	if ( $iplog == 'on' ) $iplog = '1'; else $iplog = '0';
	$al_q = ", vlog='".$iplog."'";
    } else $il_q = '';
    if ( $ipltitle == '' ) $err = $lang['plist_txt11'];
    elseif ( strlen ( $ipltitle ) < $config['pltitle_min'] or strlen ( $ipltitle ) > $config['pltitle_max'] ) $err = $lang['plist_txt12']; 
    elseif ( $iplog == '1' and $iplpriv == 'private' ) $err = $lang['err_plpriv'];

    if ( $err == '' ) {
	if ( $iplog == '1' ) {
	    $conn->execute("update playlist_image set vlog='0' where vlog!='0';");
	    $conn->execute("update playlist_image set vlog='1', vlog_time='".time()."' where vkey='".$_REQUEST['iplkey']."';");
	    if ( $conn->Affected_Rows() > 0 ) $msg = $lang['plist_txt34'];
	}
	$conn->execute("update playlist_image set pname='".$ipltitle."', descr='".$ipldesc."', embed='".$iplembed."', tags='".$ipltags."', privacy='".$iplpriv."' ".$il_q." where vkey='".$_REQUEST['iplkey']."';");
	if ( $conn->Affected_Rows() > 0 ) $msg = $lang['plist_txt34']; //else $err = $lang['plist_txt35'];
    }
}

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

//share playlist
if ( filter_title ( $_GET['action'] == 'plshare' ) ) {
    if ( $_GET['vkey'] != '' ) {
	$share_vkey = filter_title ( $_GET['vkey'] );
	$tbl = 'playlist_video'; $tbl2 = 'files_video'; $xtype = 'video';
	$c1 = 'share_video_playlist/';
    } elseif ( $_GET['ikey'] != '' ) { 
	$share_vkey = filter_title ( $_GET['ikey'] );
	$tbl = 'playlist_image'; $tbl2 = 'files_image'; $xtype = 'image';
	$c1 = 'share_image_playlist/';
    } elseif ( $_GET['akey'] != '' ) { 
	$share_vkey = filter_title ( $_GET['akey'] );
	$tbl = 'playlist_audio'; $tbl2 = 'files_audio'; $xtype = 'audio';
	$c1 = 'share_audio_playlist/';
    }    
    check_login( $c1.$share_vkey );
    
    if ( filter_title ( $_POST['sendpl'] != '' ) ) {
	
	if ( $_POST['sendto'] != '' ) $ch_addr = explode (",", mysql_real_escape_string ( trim($_POST['sendto']) )); else $err = $lang['err_myfr1'];
	$ch_text = filter_descr ( $_POST['sendmsg'] );
	
	if ( count ( $ch_addr ) > 3 ) $err = $lang['err_femail5'];
	elseif ( strlen ( $ch_text ) > 300 ) $err = $lang['uch_shtxt4'];
	
	if ( $err == '' ) {
	    if ($config['def_thumb'] == '1') $bn=rand(1,1);
	    elseif ($config['def_thumb'] == '2') $bn=rand(2,2);
	    elseif ($config['def_thumb'] == '3') $bn=rand(3,3);
	    elseif ($config['def_thumb'] == '4') $bn=rand(1,3);
	    
	    $pt = $conn->execute("select pname,thumb from ".$tbl." where vkey='".$share_vkey."';");
	    $ptitle = $pt->fields['pname'];
	    $pthumb = $pt->fields['thumb'];
	    
	    if ( $pthumb == '0' ) {
		$xpt = $conn->execute("select vid from playlist_files where ptype='".$xtype."' and vkey='".$share_vkey."' order by position asc limit 0,1;");
		$pthumb = $xpt->fields['vid'];
	    }
	    $fu = $conn->execute("select uid from ".$tbl2." where vid='".$pthumb."'");
	    $fuid = $fu->fields['uid'];
	    
	    if ( $_GET['akey'] != '' ) {
		$thumb = $config['base_url']."/media/files_thumbnail/user".$fuid."/".$bn."_".$pthumb.substr(md5($pthumb),11,7).".jpg";
	    } elseif ( $_GET['vkey'] != '' ) {
		$thumb = $config['base_url']."/media/files_thumbnail/user".$fuid."/".$bn."_".$pthumb.substr(md5($pthumb),13,7).".jpg";
	    } elseif ( $_GET['ikey'] != '' ) { 
		$fv = $conn->execute("select vflvname from files_image where vid='".$pthumb."';");
		$flv = $fv->fields['vflvname'];
		$thumb = $config['base_url']."/media/files_thumbnail/user".$fuid."/".$flv;
	    }
	    $rs = $conn->execute("select * from email_files where email_id='share_playlist';");
	    $email_path = $rs->fields['email_path'];
	    $subj = $rs->fields['email_subject'];
	    $subj = str_replace('$username',$_SESSION['USERNAME'],$subj);
	    $subj = str_replace('$title',$ptitle,$subj);
	    $smarty->assign('sndr', $_SESSION['USERNAME']);
	    $smarty->assign('chmsg', $_POST['sendmsg']);
	    $smarty->assign('pthumb', $thumb);
	    $smarty->assign('ptitle', $ptitle);
	    $smarty->assign('ptype', $xtype);
	    $smarty->assign('pkey', $share_vkey);
	    
	    $body = $smarty->fetch($email_path);
	    
	    for ( $i = 0; $i < count ( $ch_addr ); $i++ ) {
		$to = trim($ch_addr[$i]);
		if ( !check_email_address ( $to ) ) $err = $lang['err_signup10'];
		$from = $config['admin_email'];
		$name = $config['admin_name']; 
		
		if ( $err == '' ) {
		    $ip = $_SERVER['REMOTE_ADDR'];
		    $ct = $conn->execute("select e_try, e_time from email_usage where e_ip = '$ip' order by e_try desc limit 0,1;");
		    $ct1 = $conn->execute("SELECT count(*) as total from email_usage where e_ip = '$ip';"); 
		    $ctotal = $ct1->fields['total'];
		    $ctry = $ct->fields['e_try'];
		    $ctime = $ct->fields['e_time']; 
		    
		    if ( $ctry == '' ) $ctry = 1; else $ctry = $ctry + 1; 
		    if ( $ctime > strtotime ( "-60 minutes" ) and ( $ctotal == $config['emails_per_hour'] ) ) $err = $lang['uch_shtxt5'];
		    
		    if ( $err == '' ) {
			if ( $ctotal <= $config['emails_per_hour'] ) {
			    $c1 = $conn->execute("insert into email_usage set e_ip = '$ip', e_try = '".$ctry."', e_time = '".time()."';");
			    if ( mysql_affected_rows() > 0 ) { 
				if ( mailto ($to, $name, $from, $subj, $body ) == '' ) { $msg = $lang['plist_txt47']; } else { $err = $lang['adm_errmem4']; }
			    } else $err = $lang['uch_shtxt5'];
			}
		    }
		}
	    }
	}
    }
    
    $smarty->assign('err', $err); $smarty->assign('msg', $msg);
    $smarty->display('share_playlist.tpl');
    exit;
}
//add to playlist from view-file-page
if ( filter_title ( $_GET['action'] == 'pladd' ) ) {
    $ptype = filter_title ( $_GET['type'] );
    $pid = filter_title ( $_GET['vid'] );
    $plto = $_POST['xpl'];
    if ( !is_numeric ( $pid ) or ( $ptype != 'audio' and $ptype != 'image' and $ptype != 'video' ) ) $err = 'What !?';
    if ( $plto == '' ) $err = $lang['plist_txt36'];
    if ( $err == '' ) {
	foreach($plto as $value) {
    	    $fu = $conn->execute("select uid from files_".$ptype." where vid='".filter_title($pid)."'"); $fuid = $fu->fields['uid'];
    	    $conn->execute("insert into playlist_files set ptype='".$ptype."', vid='".filter_title($pid)."', uid='".$_SESSION['UID']."', vkey='".filter_title($value)."';");
	}
	if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['plist_txt34']; else $err = $lang['plist_txt57'];
    }
    if ( $err != '' ) echo show_err ( $err );
    if ( $msg != '' ) echo show_msg ( $msg );
    exit;
}
//save quicklist files to playlist
if ( filter_title ( $_GET['action'] == 'savepl' ) ) {
    $qtype = filter_title ( $_GET['type'] );
    $qplsubmit = filter_title ( $_POST['qplsubmit'] );
    if ( $qplsubmit != '' ) {
	$qplname = filter_descr ( $_POST['qplname'] );
	if ( $qplname == '' ) $err = $lang['plist_txt11'];
	elseif ( strlen ( $qplname ) < $config['pltitle_min'] or strlen ( $qplname ) > $config['pltitle_max'] ) $err = $lang['plist_txt12'];

	if ( $err == '' ) {
	    $sql = "select * from quicklist_".$qtype." where uid='$_SESSION[UID]' and quicklist_ip='none';";
	    $rs = $conn->Execute($sql);
	    $result = mysql_query($sql);
	    while($row = mysql_fetch_assoc($result)) { $qpvid[]=$row[vid]; }
	    if ( count ( $qpvid ) > 0 ) {
		$vplkey = gen_plist_key();
		$conn->execute("insert into playlist_".$qtype." set pname='".$qplname."', uid='".$_SESSION['UID']."', from_uid='1', vid='1', addtime='".time()."', descr='', vkey='".$vplkey."', tags='', privacy='public';");
		if ( $conn->Affected_Rows() > 0 ) $msg = $lang['plist_txt14']; else $err = $lang['plist_txt15'];
	    
		if ( $err == '' ) {
	    	    foreach ( $qpvid as $qpvalue ) {
    			$fu = $conn->execute("select uid from files_".$qtype." where vid='".$qpvalue."'"); $fuid = $fu->fields['uid'];
    			$conn->execute("insert into playlist_files set ptype='".$qtype."', vid='".$qpvalue."', uid='".$_SESSION['UID']."', vkey='".$vplkey."';");
		    }
		} 
		if ( $conn->Affected_Rows() > 0 ) $msg = $lang['plist_txt14']; else $err = $lang['plist_txt15'];
	    } else $err = $lang['plist_txt35'];
	}
    }
    if ( $err != '' ) echo show_err ( $err );
    if ( $msg != '' ) echo show_msg ( $msg );
    exit;
}
//playlist thumbs
if ( $_REQUEST['vplkey'] != '' ) {
    $bvsql = "select s.*,v.* from files_video v, playlist_files s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.ptype='video' and s.active='1' and s.vkey='".$_REQUEST['vplkey']."' order by s.position asc;";
    $fr = $conn->execute($bvsql);
    $smarty->assign('fres', $fr->getrows());                                                                                                                                                                   
    $tt = $fr->recordcount();
    $smarty->assign('tres', $tt);
    if ( $tt > 0 ) {
	include("playlists/include/xajax.inc.php");
	$xajax = new xajax();
	include("playlists/include/xajax.getvideos.php");
	$xajax->processRequests();
    }
} elseif ( $_REQUEST['iplkey'] != '' ) {
    $bvsql = "select s.*,v.* from files_image v, playlist_files s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.ptype='image' and s.active='1' and s.vkey='".$_REQUEST['iplkey']."' order by s.position asc;";
    $fr = $conn->execute($bvsql);
    $smarty->assign('fres', $fr->getrows());                                                                                                                                                                   
    $tt = $fr->recordcount();
    $smarty->assign('tres', $tt);
    if ( $tt > 0 ) {
	include("playlists/include/xajax.inc.php");
	$xajax = new xajax();
	include("playlists/include/xajax.getimages.php");
	$xajax->processRequests();
    }
} elseif ( $_REQUEST['aplkey'] != '' ) {
    $bvsql = "select s.*,v.* from files_audio v, playlist_files s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.ptype='audio' and s.active='1' and s.vkey='".$_REQUEST['aplkey']."' order by s.position asc;";
    $fr = $conn->execute($bvsql);
    $smarty->assign('fres', $fr->getrows());                                                                                                                                                                   
    $tt = $fr->recordcount();
    $smarty->assign('tres', $tt);
    if ( $tt > 0 ) {
	include("playlists/include/xajax.inc.php");
	$xajax = new xajax();
	include("playlists/include/xajax.getaudios.php");
	$xajax->processRequests();
    }
}

//playlist entries
$vp = $conn->execute("select distinct(pname),uid,vid,vkey,privacy from playlist_video where uid='".$_SESSION['UID']."' and active='1' order by addtime desc;");
$smarty->assign('pvids', $vp->getrows());
$ip = $conn->execute("select distinct(pname),uid,vid,vkey,privacy from playlist_image where uid='".$_SESSION['UID']."' and active='1' order by addtime desc;");
$smarty->assign('pimgs', $ip->getrows());
$ap = $conn->execute("select distinct(pname),uid,vid,vkey,privacy from playlist_audio where uid='".$_SESSION['UID']."' and active='1' order by addtime desc;");
$smarty->assign('pauds', $ap->getrows());


set_btn("bhome"); set_sbtn("mpl2"); set_title($lang['plist_txt1']);
$smarty->assign('msg',$msg);
$smarty->assign('err',$err);
$smarty->display('main_header.tpl');
if ( $tt > 0 ) { $xajax->printJavascript($config['base_dir']."/modules/channels/playlists/js","xajax.js"); }
$smarty->display('main_myplaylist.tpl');
$smarty->display('footer.tpl');
?>