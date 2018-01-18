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
if ( $config['enable_channels'] == '0' ) { header('Location: '.$config['base_url'].'/my_profile_info'); exit; } 
check_login('my_profile_theme');

$cq = $conn->execute("select th_bgimage from member_theme where th_uid = '$_SESSION[UID]';");
$ct = $cq->fields['th_bgimage'];
$pbg = 's'.substr($ct, 0, -4).'.jpg';
$smarty->assign('pbg', $pbg);

if ( filter_title ( $_POST['thsave'] ) != '' ) {
    $rr = rand(10000000, 90000000); $smarty->assign('rr', $rr);
    $th_featvid = filter_title ( $_POST['th_featvid'] );
    $th_featsrc = filter_title ( $_POST['th_featsrc'] );
    $th_featvidlatest = filter_title ( $_POST['th_featvidlatest'] );
    $th_featvidurl = filter_descr ( $_POST['th_featvidurl'] );
    $th_subsbox = filter_title ( $_POST['th_subsbox'] );
    $th_subspos = filter_title ( $_POST['th_subspos'] );
    $th_playlist = filter_title ( $_POST['th_playlist'] );
    $th_mycomm = filter_title ( $_POST['th_mycomm'] );
    $th_vgrid = filter_title ( $_POST['th_vgrid'] );
    $th_vidview = filter_title ( $_POST['th_vidview'] );
    $th_vlog = filter_title ( $_POST['th_vlog'] );
    $th_fav = filter_title ( $_POST['th_fav'] );
    $th_favview = filter_title ( $_POST['th_favview'] );
    $th_usubsbox = filter_title ( $_POST['th_usubsbox'] );
    $th_usubspos = filter_title ( $_POST['th_usubspos'] );
    $th_frbox = filter_title ( $_POST['th_frbox'] );
    $th_frpos = filter_title ( $_POST['th_frpos'] ); 
    $th_commbox = filter_title ( $_POST['th_commbox'] );
    $th_commpos = filter_title ( $_POST['th_commpos'] );
    
    $th_bgcol = filter_descr ( $_POST['th_bgcol'] );
    $th_bgrpt = filter_title ( $_POST['th_bgrpt'] );
    $th_linkcol = filter_descr ( $_POST['th_linkcol'] );
    $th_linkun = filter_title ( $_POST['th_linkun'] );
    $th_labelcol = filter_descr ( $_POST['th_labelcol'] );
    $th_transp = filter_title ( $_POST['th_transp'] );
    $th_font = filter_title ( ucwords ( $_POST['th_font'] ) );
    $th_fontsize = filter_title ( $_POST['th_fontsize'] );
    $th_bbbordercol = filter_descr ( $_POST['th_bbbordercol'] );
    $th_bbtxt2 = filter_descr ( $_POST['th_bbtxt2'] );
    $th_bbtxt1 = filter_descr ( $_POST['th_bbtxt1'] );
    $bb_border = filter_descr ( $_POST['th_bb_border'] );
    $bb_bg = filter_descr ( $_POST['th_bb_bg'] );
    $bb_text1 = filter_descr ( $_POST['th_bb_text1'] );
    $bb_text2 = filter_descr ( $_POST['th_bb_text2'] );
    $th_vlbordercol = filter_descr ( $_POST['th_vlbordercol'] );
    $th_vlbg = filter_descr ( $_POST['th_vlbg'] );
    $th_vlptitle = filter_descr ( $_POST['th_vlptitle'] );
    $th_vltxt1 = filter_descr ( $_POST['th_vltxt1'] );
    $th_vltxt2 = filter_descr ( $_POST['th_vltxt2'] );
    
    if ( $th_featvidurl != '' and $th_featvidurl != 'last' ) {
	if ( substr ( $th_featvidurl, 0, 7 ) != 'http://' and substr ( $th_featvidurl, 0, 8 ) != 'https://' ) $th_featvidurl = 'http://'.$th_featvidurl;
	$this_url = parse_url ( $th_featvidurl );
	$site_url = parse_url ( $config['base_url'] );
	if ( $this_url[host] !== $site_url[host] ) $err = $lang['err_eurl'];
	elseif ( ( stripos ( $th_featvidurl, 'javascript' ) !== false ) or ( stripos ( $th_featvidurl, '.js' ) !== false ) or ( stripos ( $th_featvidurl, 'onclick' ) !== false ) or ( stripos ( $th_featvidurl, 'onmouse' ) !== false) )  $err = $lang['err_eurl'];
    }
    if ( $th_featvidlatest == 'vl' ) $th_featvidlatest = 'last'; elseif ( $th_featvidlatest == 'vu' ) $th_featvidlatest = $th_featvidurl;
    
    if ( $th_featvid == 'on' ) $a1 = ", th_featvid_type = '$th_featsrc', th_featvid_file = '$th_featvidlatest', "; else $a1 = ',';
    if ( $th_subsbox == 'on' ) $a2 = ", th_subspos = '$th_subspos',"; else $a2 = ',';
    if ( $th_vgrid == 'on' ) $a3 = ", th_vid_view = '$th_vidview',"; else $a3 = ',';
    if ( $th_fav == 'on' ) $a4 = ", th_fav_view = '$th_favview',"; else $a4 = ',';
    if ( $th_usubsbox == 'on' ) $a5 = ", th_usubs_pos = '$th_usubspos',"; else $a5 = ',';
    if ( $th_frbox == 'on' ) $a6 = ", th_friends_pos = '$th_frpos',"; else $a6 = ',';
    if ( $th_commbox == 'on' ) $a7 = ", th_comm_pos = '$th_commpos',"; else $a7 = ',';
    
    if ( $th_featvid == 'on' ) $th_featvid = '1'; else $th_featvid = '0';
    if ( $th_subsbox == 'on' ) $th_subsbox = '1'; else $th_subsbox = '0';
    if ( $th_playlist == 'on' ) $th_playlist = '1'; else $th_playlist = '0';
    if ( $th_mycomm == 'on' ) $th_mycomm = '1'; else $th_mycomm = '0';
    if ( $th_vgrid == 'on' ) $th_vgrid = '1'; else $th_vgrid = '0';
    if ( $th_vlog == 'on' ) $th_vlog = '1'; else $th_vlog = '0';
    if ( $th_fav == 'on' ) $th_fav = '1'; else $th_fav = '0';
    if ( $th_usubsbox == 'on' ) $th_usubsbox = '1'; else $th_usubsbox = '0';
    if ( $th_frbox == 'on' ) $th_frbox = '1'; else $th_frbox = '0';
    if ( $th_commbox == 'on' ) $th_commbox = '1'; else $th_commbox = '0';
    
    if ( $th_playlist == '1' ) {
	$vpl = $_POST['vpl']; $vpl_count = count ( $vpl );
	$ipl = $_POST['ipl']; $ipl_count = count ( $ipl );
	$apl = $_POST['apl']; $apl_count = count ( $apl );
	if ( ( $vpl_count + $ipl_count + $apl_count ) > 3 ) $err = $lang['pr_chinfom61'];
	
	if ( $vpl_count > 0 and $err == '' ) {
	    foreach ( $vpl as $vplkey ) { $vk.= $vplkey.','; }
	}
	if ( $ipl_count > 0 and $err == '' ) {
	    foreach ( $ipl as $iplkey ) { $ik.= $iplkey.','; }
	}
	if ( $apl_count > 0 and $err == '' ) {
	    foreach ( $apl as $aplkey ) { $ak.= $aplkey.','; }
	}
	$pl_keys = $vk.$ik.$ak;
	$mypl_keys = substr ( $pl_keys, 0, -1 );
	$qp = ", th_plistchan = '$mypl_keys', ";
    } else $qp = ',';
    
    if ( filter_descr($_FILES['th_bgfile']['tmp_name']) != '' ) {
	$up_filepath = filter_descr($_FILES['th_bgfile']['tmp_name']);
	$up_filename = filter_descr($_FILES['th_bgfile']['name']);
	$imagesize = filesize ( $up_filepath );
	$ext = explode ( '.', $up_filename );
	$ext = array_pop ( $ext );
	$dst_file = $config['base_dir'].'/media/files_user_bgimages/bg'.$rr.$_SESSION['UID'].'.'.$ext;
	$bgimage = 'bg'.$rr.$_SESSION['UID'].'.'.$ext;
        if ( strtoupper($ext) != 'GIF' and strtoupper($ext) != 'JPG' and strtoupper($ext) != 'PNG' and strtoupper($ext) != 'JPEG' ) $err = $lang['up_errmsg1']; 
	elseif ( $imagesize > $config['max_bgimage'] ) $err = $lang['up_errmsg2'];
	
	if ( $ct != 'none' ) {
	    if ( file_exists ( $config['base_dir'].'/media/files_user_bgimages/'.$ct ) ) { 
	        @unlink ( $config['base_dir'].'/media/files_user_bgimages/'.$ct );
	    }
	    if ( file_exists ( $config['base_dir'].'/media/files_user_bgimages/sbg'.$rr.$_SESSION['UID'].'.jpg' ) ) { 
	        @unlink ( $config['base_dir'].'/media/files_user_bgimages/sbg'.$rr.$_SESSION['UID'].'.jpg' );
	    }
	}

	if ( $err == '' ) {
	    if ( move_uploaded_file ( $up_filepath, $dst_file ) )  { 
		require_once($config['base_dir'].'/configs/classes/phpthumb.class.php');
		$phpThumb = new phpThumb();
		$phpThumb->setSourceFilename($dst_file);
		$thumbnail_width = 375;
		$thumbnail_height = 720;
		$phpThumb->setParameter('w', $thumbnail_width);
		$phpThumb->setParameter('h', $thumbnail_height);
		$phpThumb->setParameter('far', '1'); //don't edit this 
		$output1 = $config['base_dir'].'/media/files_user_bgimages/sbg'.$rr.$_SESSION['UID'].'.'.$phpThumb->config_output_format;
		if ($phpThumb->GenerateThumbnail()) { $phpThumb->RenderToFile($output1); }
	    }
	    else $err = $lang['up_errmsg3'];
	}
    } //else { $err = 'Error: No File!'; }

    if ( filter_title ( $_POST['th_delpic'] ) != 'on' ) { 
        if ( $bgimage != 'none' and $bgimage != '' ) $b1 = ", th_bgsrcname = '".$up_filename."', th_bgimage = '".mysql_real_escape_string($bgimage)."',"; else $b1 = ","; 
    } elseif ( filter_title ( $_POST['th_delpic'] ) == 'on' ) { 
        $b1 = ", th_bgsrcname = '', th_bgimage = 'none', "; 
        @unlink ($config['base_dir'].'/media/files_user_bgimages/'.$pbg); 
        @unlink ($config['base_dir'].'/media/files_user_bgimages/'.$ct); 
    } 

    if ( $err == '' ) {
	$tqadd = "th_featvid = '$th_featvid' $a1 th_subs = '$th_subsbox' $a2 
		th_plist = '$th_playlist' $qp th_vid = '$th_vgrid' $a3  th_vlog = '$th_vlog', th_fav = '$th_fav' $a4
		th_usubs = '$th_usubsbox' $a5 th_friends = '$th_frbox' $a6 th_comm = '$th_commbox' $a7 th_bgcol = '$th_bgcol' $b1 
		th_bgrpt = '$th_bgrpt', th_link = '$th_linkcol', th_link_dec = '$th_linkun', th_label = '$th_labelcol', 
		th_transp = '$th_transp', th_font_fam = '$th_font', th_font_size = '$th_fontsize', th_hb_bgcol = '$th_bbbordercol', th_hb_h1 = '$th_bbtxt2', th_hb_h2 = '$th_bbtxt1', 
		th_bb_border = '$bb_border', th_bb_bgcol = '$bb_bg', th_bb_h1 = '$bb_text1', th_bb_h2 = '$bb_text2', th_vl_border = '$th_vlbordercol', th_vl_bgcol = '$th_vlbg', 
		th_vl_post = '$th_vlptitle', th_vl_h1 = '$th_vltxt1', th_vl_h2 = '$th_vltxt2'";

	$tq = $conn->execute("update member_theme set $tqadd where th_uid = '$_SESSION[UID]';");
	if ( mysql_affected_rows() < 1 ) $tq = $conn->execute("insert into member_theme set th_uid = '$_SESSION[UID]', $tqadd , th_theme = '';");
	if ( mysql_affected_rows() > 0 ) $msg = $lang['up_errmsg4']; 
    }
}

$tq = $conn->execute("select * from member_theme where th_uid='$_SESSION[UID]';");
if ( $tq->recordcount() > 0 ) {
} else {
    $tq = $conn->execute("select * from member_theme where th_uid='0';");
}

$smarty->assign('maxbg', sizeFormat($config['max_bgimage']));
$ct = $tq->fields['th_bgimage'];
$pbg = 's'.substr($ct, 0, -4).'.jpg';
$smarty->assign('pbg', $pbg);
$smarty->assign('tinfo', $tq->getrows());
$smarty->assign('dmenu', 'mymsg');
set_btn('bhome'); set_sbtn('mpr'); set_title($lang['title_myprofile']);
$smarty->assign('chs', 's2'); $smarty->assign('err', $err); $smarty->assign('msg', $msg);
$smarty->display('main_header.tpl');
$smarty->display('main_profilepage.tpl');
$smarty->display('footer.tpl');
?>