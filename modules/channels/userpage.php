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
//check_login();

$user = filter_descr ( $_GET['user'] );
$view = filter_title ( $_GET['view'] );
$sort = filter_title ( $_GET['sort'] );
$blog_sid = filter_title ( $_GET['sid'] );
$blog_id = filter_title ( $_GET['id'] );
$sq = filter_title ( $_GET['s'] );
if ( $sq == '1' ) $query = filter_descr ( $_POST['searchquery'] );


if ( $config['enable_channels'] == '0' ) { header("Location: $config[base_url]/profile/$user"); exit; }
elseif ( $view == 'audios' and $config['enable_audio'] == '0' ) { header("Location: $config[base_url]/profile/$user"); exit; }
elseif ( $view == 'images' and $config['enable_images'] == '0' ) { header("Location: $config[base_url]/profile/$user"); exit; }
elseif ( $view == 'videos' and $config['enable_videos'] == '0' ) { header("Location: $config[base_url]/profile/$user"); exit; }
elseif ( $config['guests_profile_view'] == '0' ) { check_login('profile/'.filter_title($user)); }

$tu = $conn->execute("select uid from members where username='$user';");
$tuid = $tu->fields['uid'];
if ( $tuid != '' ) $conn->execute("update members set ch_subs='".subs_count ( $tuid )."' where uid='".$tuid."';");
if ( $tuid == '' ) { illegal_op(); exit; }
if ( $tuid != '' ) {
    if ( filter_title ( $_POST['vlsubmit'] ) != '' ) { //edit log posts
	$vl_btn = filter_title ( $_POST['vlsubmit'] );
	$vl_types = filter_title ( $_POST['vl_types'] );
	for ( $j = 1; $j <= 5; $j++ ) {
	    $vt = 'vl_title'.$j;
	    $vl_t = filter_descr ( $_POST[$vt] );
	    $vd = 'vl_desc'.$j;
	    $vl_d = filter_descr ( $_POST[$vd] );
	    $vk = 'vl_key'.$j;
	    $vl_k = filter_title ( $_POST[$vk] );
	    $conn->execute("update files_".$vl_types." set vl_descr = '".$vl_d."', vl_title = '".$vl_t."' where vkey='".$vl_k."';");
	}
    }
    
    
    $bl = $conn->execute("select * from blocked_users where blocker_uid='$tuid' and blocked_uid='$_SESSION[UID]' and active='1'");
    if ( $bl->recordcount() > 0 ) { $smarty->assign('is_bl', 'yes'); }
    $tq = $conn->execute("select * from member_theme where th_uid='$tuid';");
    if ( $tq->recordcount() > 0 ) {  } else { $tq = $conn->execute("select * from member_theme where th_uid='0';"); }
    
    $th_subs = $tq->fields['th_subs'];
    $th_usubs = $tq->fields['th_usubs'];
    $th_comm = $tq->fields['th_comm'];
    $th_friends = $tq->fields['th_friends'];
    $th_plist = $tq->fields['th_plist'];
    $th_plistchan = $tq->fields['th_plistchan'];
    $th_vid = $tq->fields['th_vid'];
    $th_fav = $tq->fields['th_fav'];
    $th_featvid = $tq->fields['th_featvid'];
    $th_featvid_type = $tq->fields['th_featvid_type'];
    $th_featvid_file = $tq->fields['th_featvid_file'];
    $th_vlog = $tq->fields['th_vlog'];
    $ct = $tq->fields['th_bgimage'];
    
    $pbg = 's'.substr($ct, 0, -4).'.jpg';
    $smarty->assign('pbg', $pbg);
    $smarty->assign('tinfo', $tq->getrows());

    $mt = $conn->execute("select * from members where uid = '$tuid';");
    $bdate = $mt->fields['bdate'];
    $ch_vids = $mt->fields['ch_vids'];
    $ch_imgs = $mt->fields['ch_imgs'];
    $ch_auds = $mt->fields['ch_auds'];
    $ch_vfavs = $mt->fields['ch_vfavs'];
    $ch_ifavs = $mt->fields['ch_ifavs'];
    $ch_afavs = $mt->fields['ch_afavs'];
    
    $age = getAge($bdate); $smarty->assign('uage', $age);
    $smarty->assign('minfo', $mt->getrows());
    
    $mt2 = $conn->execute("select * from member_info where p_uid = '$tuid';");
    $smarty->assign('minfo2', $mt2->getrows());
    
    //build ids for rotating thumbs
    if ( $config['thumb_module'] == '1' ) {
	$bi=$conn->execute("select vid from files_video where vtype='public' and active='1' and is_inapp='no';");
	$smarty->assign('bid', $bi->getrows());
    }


if ( $view == 'video_blog' or $view == 'image_blog' or $view == 'audio_blog' ) $listing_per_page = 5;
elseif ( $view == 'friends' or $view == 'subscribers' or $view == 'subscriptions' ) $listing_per_page = 30;
else $listing_per_page = 20;
if(filter_title($_GET[page])=="")
$page = 1;
else
$page = filter_title($_GET[page]);


    if ( $th_vlog == '1' ) { //video log
	if ( ( $config['enable_videos'] == '1' and $view == '' ) or $view == 'video_blog' ) {
	    $vl = $conn->execute("select * from playlist_video where uid='$tuid' and privacy='public' and vlog='1' and active='1' limit 0,1;");
	    $pkv = $vl->fields['vkey']; $smarty->assign('pkv', $pkv);
	}
	if ( ( $config['enable_images'] == '1' and $view == '' ) or $view == 'image_blog' ) { 
	    $il = $conn->execute("select * from playlist_image where uid='$tuid' and privacy='public' and vlog='1' and active='1' limit 0,1;");
	    $pki = $il->fields['vkey']; $smarty->assign('pki', $pki);
	}
	if ( ( $config['enable_audio'] == '1' and $view == '' ) or $view == 'audio_blog' ) {
	    $al = $conn->execute("select * from playlist_audio where uid='$tuid' and privacy='public' and vlog='1' and active='1' limit 0,1;");
            $pka = $al->fields['vkey']; $smarty->assign('pka', $pka);
	}
	if ( $pkv != '' ) { 
	    if ( $blog_id != '' and $blog_sid != '' ) { $list = key_to_info ( $blog_id ); $b_vid = $list[0]; $b_q = " and vid='$b_vid'"; } else $b_q = '';
	    $vlog = $vl->getrows(); $smarty->assign('vlog', $vlog);
	    $pf = $conn->execute("select * from playlist_files where ptype='video' and active='1' and vkey='$pkv' $b_q;");
	    $vlt = $pf->getrows(); $vlog_total = count ( $vlt );
	    $tpage = ceil($vlog_total/$listing_per_page); if($tpage==0) $spage=$tpage+1; else $spage = $tpage; $startfrom = ($page-1)*$listing_per_page; $start_num=$startfrom+1; $smarty->assign('tpage',$tpage);
	    $pf = $conn->execute("select * from playlist_files where ptype='video' and active='1' and vkey='$pkv' $b_q limit $startfrom, $listing_per_page;");
	    $smarty->assign('vl_total', $pf->recordcount()); $smarty->assign('vl_files', $pf->getrows());
	} elseif ( $pki != '' ) {
	    if ( $blog_id != '' and $blog_sid != '' ) { $list = key_to_info_image ( $blog_id ); $b_vid = $list[0]; $b_q = " and vid='$b_vid'"; } else $b_q = '';
	    $vlog = $il->getrows(); $smarty->assign('vlog', $vlog);
	    $pf = $conn->execute("select * from playlist_files where ptype='image' and active='1' and vkey='$pki' $b_q;");
	    $vlt = $pf->getrows(); $ilog_total = count ( $vlt );
	    $tpage = ceil($ilog_total/$listing_per_page); if($tpage==0) $spage=$tpage+1; else $spage = $tpage; $startfrom = ($page-1)*$listing_per_page; $start_num=$startfrom+1; $smarty->assign('tpage',$tpage);
	    $pf = $conn->execute("select * from playlist_files where ptype='image' and active='1' and vkey='$pki' $b_q limit $startfrom, $listing_per_page;");
	    $smarty->assign('vl_total', $pf->recordcount()); $smarty->assign('vl_files', $pf->getrows());
	} elseif ( $pka != '' ) {
	    if ( $blog_id != '' and $blog_sid != '' ) { $list = key_to_info_audio ( $blog_id ); $b_vid = $list[0]; $b_q = " and vid='$b_vid'"; } else $b_q = '';
	    $vlog = $al->getrows(); $smarty->assign('vlog', $vlog);
	    $pf = $conn->execute("select * from playlist_files where ptype='audio' and active='1' and vkey='$pka' $b_q;");
	    $alog_total = $pf->recordcount();
	    $tpage = ceil($alog_total/$listing_per_page); if($tpage==0) $spage=$tpage+1; else $spage = $tpage; $startfrom = ($page-1)*$listing_per_page; $start_num=$startfrom+1; $smarty->assign('tpage',$tpage);
	    $pf = $conn->execute("select * from playlist_files where ptype='audio' and active='1' and vkey='$pka' $b_q limit $startfrom, $listing_per_page;");
	    $smarty->assign('vl_total', $pf->recordcount()); $smarty->assign('vl_files', $pf->getrows());
	    $rs = $conn->execute("select * from watermark_audio where (active='1') order by rand();");
            if ($rs->recordcount()>0) { $smarty->assign('audio_logo2',$rs->fields['image']); }
            $rs = $conn->execute("select * from playeraudio_settings where (ID='1');");
            $showeq = $rs->fields['skin']; $smarty->assign('showeq',$showeq);
            if ( $showeq == 'rnd' ) { include_once('../../modules/aPlayer/skins.php'); }
	}
    }
    if ( $th_featvid == '1' ) { //featured file
	if ( $th_featvid_type == 'v' and $config['enable_videos'] == '1' ) {
	    if ( $th_featvid_file == 'last' ) {
		$fv = $conn->execute("select vkey from files_video where vtype='public' and active='1' and is_inapp='no' and uid='$tuid' order by addtime desc limit 0,1;");
		$smarty->assign('f_key', $fv->fields['vkey']);
	    } elseif ( $th_featvid_file != 'last' ) {
		$u = parse_url($th_featvid_file);
		$nu = strstr ($u[path], "video");
		$nu = str_replace('video/', '', $nu);
		$vt = str_replace('_', ' ', $nu);
		$fv = $conn->execute("select vkey from files_video where vtype='public' and active='1' and is_inapp='no' and vtitle='$vt';");
		$smarty->assign('f_key', $fv->fields['vkey']);
	    }
	} elseif ( $th_featvid_type == 'i' and $config['enable_images'] == '1' ) {
	    if ( $th_featvid_file == 'last' ) {
		$fv = $conn->execute("select vkey from files_image where vtype='public' and active='1' and is_inapp='no' and uid='$tuid' order by addtime desc limit 0,1;");
		$smarty->assign('f_key', $fv->fields['vkey']);
	    } elseif ( $th_featvid_file != 'last' ) {
		$u = parse_url($th_featvid_file);
		$nu = strstr ($u[path], "image");
		$nu = str_replace('image/', '', $nu);
		$vt = str_replace('_', ' ', $nu);
		$fv = $conn->execute("select vkey from files_image where vtype='public' and active='1' and is_inapp='no' and vtitle='$vt';");
		$smarty->assign('f_key', $fv->fields['vkey']);
	    }
	} elseif ( $th_featvid_type == 'a' and $config['enable_audio'] == '1' ) {
	    if ( $th_featvid_file == 'last' ) {
		$fv = $conn->execute("select vkey from files_audio where vtype='public' and active='1' and is_inapp='no' and uid='$tuid' order by addtime desc limit 0,1;");
		$smarty->assign('f_key', $fv->fields['vkey']);
	    } elseif ( $th_featvid_file != 'last' ) {
		$u = parse_url($th_featvid_file);
		$nu = strstr ($u[path], "audio");
		$nu = str_replace('audio/', '', $nu);
		$vt = str_replace('_', ' ', $nu);
		$fv = $conn->execute("select vkey from files_audio where vtype='public' and active='1' and is_inapp='no' and vtitle='$vt';");
		$smarty->assign('f_key', $fv->fields['vkey']);
		$rs = $conn->execute("select * from watermark_audio where (active='1') order by rand();");
		if ($rs->recordcount()>0) { $smarty->assign('audio_logo',$rs->fields['image']); }
    		$rs = $conn->execute("select * from playeraudio_settings where (ID='1');");
    		$showeq = $rs->fields['skin']; $smarty->assign('showeq',$showeq);
    		if ( $showeq == 'rnd' ) { include_once('../../modules/aPlayer/skins.php'); }
	    }
	}
    }

    if ( $th_vid == '1' ) { //videos,images,audios
	if ( ( $config['enable_videos'] == '1' and $ch_vids == '' and $view == '' ) or ( $config['enable_videos'] == '1' and $view == 'videos' ) ) {
	    if ( $sort == '' or $sort == 'mr' ) $sr = "order by addtime desc"; elseif ( $sort == 'mv' ) $sr = "order by views desc"; elseif ( $sort == 'md' ) $sr = "order by comments desc";
	    if ( $sq == '1' and $query != '' ) { $query = explode(" ", $query); foreach ( $query as $queryterm ) { $search_v.= '%'.trim($queryterm).'%'; } $ss = " and ( UCASE(vtitle) like UCASE('".$search_v."') or UCASE(vdescr) like UCASE('".$search_v."') or UCASE(vtags) like UCASE('".$search_v."') ) "; } else $ss = '';
	    $rv = $conn->execute("select vkey from files_video where vtype='public' and active='1' and is_inapp='no' and uid='$tuid' $ss $sr;");
	    $rvk = $rv->getrows(); $vid_total = count ( $rvk );
	    $tpage = ceil($vid_total/$listing_per_page); if($tpage==0) $spage=$tpage+1; else $spage = $tpage; $startfrom = ($page-1)*$listing_per_page; $start_num=$startfrom+1; $smarty->assign('tpage',$tpage);
	    $rv = $conn->execute("select vkey from files_video where vtype='public' and active='1' and is_inapp='no' and uid='$tuid' $ss $sr limit $startfrom, $listing_per_page;");
	    $rvk = $rv->getrows();
	    foreach ( $rvk as $vk ) { $mvk.= $vk[vkey].','; }
	    $mvk = substr ( $mvk, 0, -1 );
	    $smarty->assign('varr2', $mvk); 
	} elseif ( ( $config['enable_images'] == '1' and $ch_imgs == '' and $view == '' ) or ( $config['enable_images'] == '1' and $view == 'images' ) ) {
	    if ( $sort == '' or $sort == 'mr' ) $sr = "order by addtime desc"; elseif ( $sort == 'mv' ) $sr = "order by views desc"; elseif ( $sort == 'md' ) $sr = "order by comments desc";
	    if ( $sq == '1' and $query != '' ) { $query = explode(" ", $query); foreach ( $query as $queryterm ) { $search_v.= '%'.trim($queryterm).'%'; } $ss = " and ( UCASE(vtitle) like UCASE('".$search_v."') or UCASE(vdescr) like UCASE('".$search_v."') or UCASE(vtags) like UCASE('".$search_v."') ) "; } else $ss = '';
	    $rv = $conn->execute("select vkey from files_image where vtype='public' and active='1' and is_inapp='no' and uid='$tuid' $ss $sr;");
	    $rvk = $rv->getrows(); $img_total = count ( $rvk );
	    $tpage = ceil($img_total/$listing_per_page); if($tpage==0) $spage=$tpage+1; else $spage = $tpage; $startfrom = ($page-1)*$listing_per_page; $start_num=$startfrom+1; $smarty->assign('tpage',$tpage);
	    $rv = $conn->execute("select vkey from files_image where vtype='public' and active='1' and is_inapp='no' and uid='$tuid' $ss $sr limit $startfrom, $listing_per_page;");
	    $rvk = $rv->getrows();
	    foreach ( $rvk as $vk ) { $mvk.= $vk[vkey].','; }
	    $mvk = substr ( $mvk, 0, -1 );
	    $smarty->assign('varr2', $mvk); 
	} elseif ( ( $config['enable_audio'] == '1' and $ch_auds == '' and $view == '' ) or ( $config['enable_audio'] == '1' and $view == 'audios' ) ) {
	    if ( $sort == '' or $sort == 'mr' ) $sr = "order by addtime desc"; elseif ( $sort == 'mv' ) $sr = "order by views desc"; elseif ( $sort == 'md' ) $sr = "order by comments desc";
	    if ( $sq == '1' and $query != '' ) { $query = explode(" ", $query); foreach ( $query as $queryterm ) { $search_v.= '%'.trim($queryterm).'%'; } $ss = " and ( UCASE(vtitle) like UCASE('".$search_v."') or UCASE(vdescr) like UCASE('".$search_v."') or UCASE(vtags) like UCASE('".$search_v."') ) "; } else $ss = '';
	    $rv = $conn->execute("select vkey from files_audio where vtype='public' and active='1' and is_inapp='no' and uid='$tuid' $ss $sr;");
	    $rvk = $rv->getrows(); $aud_total = count ( $rvk );
	    $tpage = ceil($aud_total/$listing_per_page); if($tpage==0) $spage=$tpage+1; else $spage = $tpage; $startfrom = ($page-1)*$listing_per_page; $start_num=$startfrom+1; $smarty->assign('tpage',$tpage);
	    $rv = $conn->execute("select vkey from files_audio where vtype='public' and active='1' and is_inapp='no' and uid='$tuid' $ss $sr limit $startfrom, $listing_per_page;");
	    $rvk = $rv->getrows();
	    foreach ( $rvk as $vk ) { $mvk.= $vk[vkey].','; }
	    $mvk = substr ( $mvk, 0, -1 );
	    $smarty->assign('varr2', $mvk);
	}
    }
    if ( $th_fav == '1' ) { //favorites
	if ( ( $config['enable_videos'] == '1' and $ch_vfavs == '' and $view == '' ) or ( $view == 'favorites' and $sort == 'videos' ) ) {
	    $qu2v="order by v.addtime desc";
	    $rf = $conn->execute("select v.vkey,s.vid from files_video v, fav_video s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.uid='$tuid' $qu2v;");
	    $rfk = $rf->getrows(); $vfav_total = count ( $rfk ); $smarty->assign('vfav_total', $vfav_total);
	    $tpage = ceil($vfav_total/$listing_per_page); if($tpage==0) $spage=$tpage+1; else $spage = $tpage; $startfrom = ($page-1)*$listing_per_page; $start_num=$startfrom+1; $smarty->assign('tpage',$tpage);
	    $rf = $conn->execute("select v.vkey,s.vid from files_video v, fav_video s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.uid='$tuid' $qu2v limit $startfrom, $listing_per_page;");
	    $rfk = $rf->getrows();	    
	    foreach ( $rfk as $fk ) { $mfk.= $fk[vkey].','; }
	    $mfk = substr ( $mfk, 0, -1 );
	    $smarty->assign('varr2fv', $mfk);
	} elseif ( ( $config['enable_images'] == '1' and $ch_ifavs == '' and $view == '' ) or ( $view == 'favorites' and $sort == 'images' ) ) {
	    $qu2v="order by v.addtime desc";
	    $rf = $conn->execute("select v.vkey,s.vid from files_image v, fav_image s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.uid='$tuid' $qu2v;");
	    $rfk = $rf->getrows(); $ifav_total = count ( $rfk ); $smarty->assign('ifav_total', $ifav_total);
	    $tpage = ceil($ifav_total/$listing_per_page); if($tpage==0) $spage=$tpage+1; else $spage = $tpage; $startfrom = ($page-1)*$listing_per_page; $start_num=$startfrom+1; $smarty->assign('tpage',$tpage);
	    $rf = $conn->execute("select v.vkey,s.vid from files_image v, fav_image s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.uid='$tuid' $qu2v limit $startfrom, $listing_per_page;");
	    $rfk = $rf->getrows();	    
	    foreach ( $rfk as $fk ) { $mfk.= $fk[vkey].','; }
	    $mfk = substr ( $mfk, 0, -1 );
	    $smarty->assign('varr2fv', $mfk);
	} elseif ( ( $config['enable_audio'] == '1' and $ch_afavs == '' and $view == '' ) or ( $view == 'favorites' and $sort == 'audios' ) ) {
	    $qu2v="order by v.addtime desc";
	    $rf = $conn->execute("select v.vkey,s.vid from files_audio v, fav_audio s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.uid='$tuid' $qu2v;");
	    $rfk = $rf->getrows(); $afav_total = count ( $rfk ); $smarty->assign('afav_total', $afav_total);
	    $tpage = ceil($afav_total/$listing_per_page); if($tpage==0) $spage=$tpage+1; else $spage = $tpage; $startfrom = ($page-1)*$listing_per_page; $start_num=$startfrom+1; $smarty->assign('tpage',$tpage);
	    $rf = $conn->execute("select v.vkey,s.vid from files_audio v, fav_audio s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.uid='$tuid' $qu2v limit $startfrom, $listing_per_page;");
	    $rfk = $rf->getrows();	    
	    foreach ( $rfk as $fk ) { $mfk.= $fk[vkey].','; }
	    $mfk = substr ( $mfk, 0, -1 );
	    $smarty->assign('varr2fv', $mfk);
	}
    }
    if ( $th_plist == '1' ) { //playlists
	if ( $config['enable_videos'] == '1' and ( $view == 'playlists' or $view == '' ) ) { 
	    
	    $pcv = $conn->execute("select vkey from playlist_video where uid='$tuid' and active='1' and privacy='public';");
	    $plv = $pcv->recordcount();
	    $tpage = ceil($plv/$listing_per_page); if($tpage==0) $spage=$tpage+1; else $spage = $tpage; $startfrom = ($page-1)*$listing_per_page; $start_num=$startfrom+1; $smarty->assign('tpage',$tpage);
	    if ( $view == 'playlists' ) {
		$pcv = $conn->execute("select vkey from playlist_video where uid='$tuid' and active='1' and privacy='public' limit $startfrom, $listing_per_page;");
	        $pk = $pcv->getrows();
		foreach ( $pk as $pkk ) { $cpk.= $pkk[vkey].','; }
	    }
	}
	if ( $config['enable_images'] == '1' and ( $view == 'playlists' or $view == '' ) ) {
	    $pci = $conn->execute("select vkey from playlist_image where uid='$tuid' and active='1' and privacy='public';");
	    $pli = $pci->recordcount();
	    $tpage = ceil($pli/$listing_per_page); if($tpage==0) $spage=$tpage+1; else $spage = $tpage; $startfrom = ($page-1)*$listing_per_page; $start_num=$startfrom+1; $smarty->assign('tpage',$tpage);
	    if ( $view == 'playlists' ) {
		$pci = $conn->execute("select vkey from playlist_image where uid='$tuid' and active='1' and privacy='public' limit $startfrom, $listing_per_page;");
		$pk = $pci->getrows();
		foreach ( $pk as $pkk ) { $cpk.= $pkk[vkey].','; }
	    }
	}
	if ( $config['enable_audio'] == '1' and ( $view == 'playlists' or $view == '' ) ) { 
	    $pca = $conn->execute("select * from playlist_audio where uid='$tuid' and active='1' and privacy='public';");
	    $pla = $pca->recordcount();
	    $tpage = ceil($pla/$listing_per_page); if($tpage==0) $spage=$tpage+1; else $spage = $tpage; $startfrom = ($page-1)*$listing_per_page; $start_num=$startfrom+1; $smarty->assign('tpage',$tpage);
	    if ( $view == 'playlists' ) {
		$pca = $conn->execute("select * from playlist_audio where uid='$tuid' and active='1' and privacy='public' limit $startfrom, $listing_per_page;");
		$pk = $pca->getrows();
		foreach ( $pk as $pkk ) { $cpk.= $pkk[vkey].','; }
	    }
	}
	if ( $view == 'playlists' ) { $cpk = substr ( $cpk, 0, -1 ); $smarty->assign('chpls2', $cpk); }
	$pl_t = $plv + $pli + $pla;
	$smarty->assign('pl_t', $pl_t);
    } 
    if ( $th_usubs == '1' and ( $view == '' or $view == 'subscribers' ) ) { //subscribers
	$ms = $conn->execute("select * from subscriptions where subscribed_uid = '$tuid' and stype='user' and active = '1';");
	$smarty->assign('subtocount', $ms->recordcount());
	$t_sb = $ms->recordcount();
	$tpage = ceil($t_sb/$listing_per_page); if($tpage==0) $spage=$tpage+1; else $spage = $tpage; $startfrom = ($page-1)*$listing_per_page; $start_num=$startfrom+1; $smarty->assign('tpage',$tpage);
	$ms = $conn->execute("select * from subscriptions where subscribed_uid = '$tuid' and stype='user' and active = '1' limit $startfrom, $listing_per_page;");
	$smarty->assign('subtoinfo', $ms->getrows());
	$ms1 = $conn->execute("select * from subscriptions where subscriber_uid = '$_SESSION[UID]' and subscribed_uid = '$tuid' and stype='user' and active = '1';");
	if ( $ms1->recordcount() > 0 ) $smarty->assign('is_sub', 'yes'); else $smarty->assign('is_sub', 'no');
    }
    if ( $th_subs == '1' and ( $view == '' or $view == 'subscriptions' ) ) { //subscriptions
	$mss = $conn->execute("select * from subscriptions where subscriber_uid = '$tuid' and stype='user' and active = '1';");
	$smarty->assign('subbycount', $mss->recordcount());
	$t_su = $mss->recordcount();
	$tpage = ceil($t_su/$listing_per_page); if($tpage==0) $spage=$tpage+1; else $spage = $tpage; $startfrom = ($page-1)*$listing_per_page; $start_num=$startfrom+1; $smarty->assign('tpage',$tpage);
	$mss = $conn->execute("select * from subscriptions where subscriber_uid = '$tuid' and stype='user' and active = '1' limit $startfrom, $listing_per_page;");
	$smarty->assign('subbyinfo', $mss->getrows());
    }
    if ( $th_friends == '1' and ( $view == '' or $view == 'friends' ) ) { //friends
	$trs = $conn->execute("select s.*,v.* from members v, friends s where v.is_active='1' and s.fname=v.username and s.uid='$tuid' order by v.uid;");
	$smarty->assign('myfrcount', $trs->recordcount());
	$t_fr = $trs->recordcount();
	$tpage = ceil($t_fr/$listing_per_page); if($tpage==0) $spage=$tpage+1; else $spage = $tpage; $startfrom = ($page-1)*$listing_per_page; $start_num=$startfrom+1; $smarty->assign('tpage',$tpage);
	$trs = $conn->execute("select s.*,v.* from members v, friends s where v.is_active='1' and s.fname=v.username and s.uid='$tuid' order by v.uid limit $startfrom, $listing_per_page;");
	$smarty->assign('myfrinfo', $trs->getrows());
//	$tfriends = $trs->getrows();
//	$total = count($tfriends);
    }
    if ( $th_comm == '1' and $config['profile_comments'] == '1' ) { //comments
        $sql="select * from members where uid='$tuid' and is_active='1';";
        $rs=$conn->execute($sql);
        if ($rs->recordcount() > 0) {

	$uip=$rs->fields[from_ip];
        $uid=$rs->fields[uid];
        $bdate=$rs->fields[bdate];
        $user1=$rs->fields[username];
        $ch_commrate=$rs->fields[ch_commrate];
        if ( $ch_commrate == '1' ) $ch_commrate = 'yes'; else $ch_commrate = 'no';
        $smarty->assign('file_comm_rate',$ch_commrate);
        $age = getAge($bdate); $smarty->assign('uage', $age);
        
        //friend check
        $fs="select * from friends where uid='$uid' and fname='$_SESSION[USERNAME]' and is_active='1'";
        $rfs=$conn->execute($fs);
        if ($rfs->recordcount()>0)
        {
            if($rfs->fields[can_rate]=="1") $smarty->assign('can_rate',$rfs->fields[can_rate]);
            if($rfs->fields[can_comment]=="1") $smarty->assign('can_comment',$rfs->fields[can_comment]);
            $friend="yes";
            $smarty->assign('friend',$friend);
        }

        $age=getAge($bdate);
        $smarty->assign('age',$age);
        $udetails=$rs->getrows();
        if ( $uid != $_SESSION[UID] ) check_block($uid, 'bl_chan'); $smarty->assign('errs', check_block($uid, 'bl_chcomm'));
        $smarty->assign('udetails',$udetails);
        $smarty->assign('minfo',$udetails);
        if ($config[special_characters]=="0") $smarty->assign('user',$user);
        elseif ($config[special_characters]=="1") $smarty->assign('user',$user1);

        $sqlc="select count(*) as total from comm_profile where uid='$tuid' and active='1' and approved='1';";
        $rsc=$conn->execute($sqlc);
        $tcc=$rsc->fields[total];
        $smarty->assign('tc',$tcc);
        $rsc->Close();
        $sql="select s.*,v.* from comm_profile v, members s where v.active='1' and v.approved='1' and v.uid='$tuid' and s.uid=v.cuid order by v.comid desc;";
        $rscc=$conn->execute($sql);
        $smarty->assign('comm',$rscc->getrows());
        }
        //subs, blocks
	$bl = $conn->execute("select * from blocked_users where blocker_uid='$tuid' and blocked_uid='$_SESSION[UID]' and active='1'");
	if ( $bl->recordcount() > 0 ) { $smarty->assign('is_bl', 'yes'); }
	$ms1 = $conn->execute("select * from subscriptions where subscriber_uid = '$_SESSION[UID]' and subscribed_uid = '$tuid' and stype='user' and active = '1';");
	if ( $ms1->recordcount() > 0 ) $smarty->assign('is_sub', 'yes'); else $smarty->assign('is_sub', 'no');
	$ms2 = $conn->execute("select * from subscriptions where subscriber_uid = '$_SESSION[UID]' and subscribed_uid = '$tuid' and stype='fav' and active = '1';");
	if ( $ms2->recordcount() > 0 ) $smarty->assign('is_sub_fav', 'yes'); else $smarty->assign('is_sub_fav', 'no');
    }

    if ( $sort != '' ) $sln = "&sort=$sort"; else $sln = '';
    for($i=1; $i<=$tpage; $i++)
    {
        if($i==$page) $page_no .= "<span class=\"pag_act\">$i</span>";
	else $page_no .= " <a href='$config[base_url]/user/$user&view=$view$sln&page=$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> "; 
    }

    if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
    //else $link = $lang['mem_none'];

    if($tpage>1)
    {
	$nextpage=$page+1;
        $prevpage=$page-1;
        $prevlink="<a href='$config[base_url]/user/$user&view=$view$sln&page=$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
        $nextlink="<a href='$config[base_url]/user/$user&view=$view$sln&page=$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";

        if($page==$tpage) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link;
        elseif($tpage>$page && $page>1) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
        elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
    }

    $smarty->assign('link',$link);
    $smarty->assign('tpage',$tpage);

    
    if ( $tuid != $_SESSION['UID'] ) $conn->execute("update members set ch_views = ch_views+1 where uid='$tuid';");
    // events/shows
    $rs = $conn->execute("select * from member_shows where s_uid = '$tuid' and active='1';");
    $smarty->assign('shows', $rs->getrows());

    set_btn('bhome'); set_sbtn('userpage'); //set_title($title);
    if ( $view == '' )  { $smarty->display('main_userpage.tpl'); }
    else {
	$smarty->display('main_userpageheader.tpl');
	if ( $view == 'audios' or $view == 'images' or $view == 'videos' ) $smarty->display('_inc/chan/_inc/inc_userpageb9.tpl');
	elseif ( $view == 'favorites' ) $smarty->display('_inc/chan/_inc/inc_userpageb10.tpl');
	elseif ( $view == 'playlists' ) $smarty->display('_inc/chan/_inc/inc_userpageb8.tpl');
	elseif ( $view == 'friends' ) $smarty->display('_inc/chan/_inc/inc_userpageb6.tpl');
	elseif ( $view == 'subscribers' ) $smarty->display('_inc/chan/_inc/inc_userpageb4.tpl');
	elseif ( $view == 'subscriptions' ) $smarty->display('_inc/chan/_inc/inc_userpageb3.tpl');
	elseif ( $view == 'video_blog' or $view == 'image_blog' or $view == 'audio_blog' ) $smarty->display('_inc/chan/_inc/inc_userpageb11.tpl');
	$smarty->display('main_userpagefooter.tpl');
    }
} else { illegal_op(); }

?>