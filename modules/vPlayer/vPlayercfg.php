<?php
include('../../configs/config.php');

if ( $_GET['idx'] != '' ) { $id = filter_title($_GET['idx']); $t = 'no'; $admin = 'no'; $rec = 'yes'; } //ho 
if ( $_GET['fid'] != '' ) { $id = filter_title($_GET['fid']); $t = 'no'; $admin = 'no'; $rec = 'no'; } 
elseif ( $_GET['aid'] != '' ) { $id = filter_title($_GET['aid']); $t = 'no'; $admin = 'yes'; $rec = 'no'; }
elseif ( $_GET['id'] != '' ) { $id = filter_title($_GET['id']); $t = 'yes'; $admin = 'no'; $rec = 'no'; }

//video info
$vi = $conn->execute("select active, vid, uid, vflvname, vtitle, vtype from files_video where vkey='$id';");
$vid  = $vi->fields['vid'];
$vuid = $vi->fields['uid'];
$vflv = $vi->fields['vflvname'];
$vtitle = $vi->fields['vtitle'];
$vtype = $vi->fields['vtype'];
$vactive = $vi->fields['active'];

$rnd = substr(md5($vid),13,7);
$bn  = insert_vid_to_rndvv();

//watermark info
$wm = $conn->execute("select url, position, image, transparency from watermark where active='1' order by wid asc limit 0,1;");
$wm_url = $wm->fields['url'];
$wm_pos = $wm->fields['position']; 
$wm_img = $wm->fields['image'];
$wm_alf = $wm->fields['transparency'];

switch ( $wm_pos ) {
    case 'Top Right': $wm_rpos = 'TR'; break;
    case 'Top Left': $wm_rpos = 'TL'; break;
    case 'Bottom Right': $wm_rpos = 'BR'; break;
    case 'Bottom Left': $wm_rpos = 'BL'; break;
    default: $wm_rpos = 'TR'; break;
}

//player configuration
if ( $_GET['fid'] != '' ) { 
    $tbl_id = "ID='2'";
} else { 
    $tbl_id = "ID='1'";
}
$id_comp = 'fid';

$pc = $conn->execute("select fullscreen, logo, pwidth, pheight, vads, tads, atime, btime, autoplay, share, repeats, advertisement, playlist, poption from player_settings where $tbl_id;");
$pc_run = $pc->fields['autoplay'];
$pc_sha = $pc->fields['share'];
$pc_rpt = $pc->fields['repeats'];
$pc_padv = $pc->fields['advertisement'];
$pc_plist = $pc->fields['playlist'];
$pc_btime = $pc->fields['btime'];
$pc_atime = $pc->fields['atime'];
$pc_tads = $pc->fields['tads'];
$pc_vads = $pc->fields['vads'];
$pc_pw = $pc->fields['pwidth'];
$pc_ph = $pc->fields['pheight'];
$pc_logo = $pc->fields['logo'];
$pc_fs = $pc->fields['fullscreen'];

switch ( $pc_run ) {
    case '0': $pc_autorun = 'false'; break;
    case '1': $pc_autorun = 'true'; break;
    default: $pc_autorun = 'false'; break;
}
switch ( $pc_fs ) {
    case '0': $pc_fs = 'false'; break;
    case '1': $pc_fs = 'true'; break;
    default: $pc_fs = 'false'; break;
}
switch ( $pc_padv ) {
    case '0': $pc_posadv = 'b'; break;
    case '1': $pc_posadv = 'e'; break;
    case '2': $pc_posadv = 'be'; break;
    case '3': $pc_posadv = 'none'; break;
    default: $pc_posadv = 'be'; break;
}
//views
$rfs = $conn->execute("select * from friends where uid='$vuid' and fname='$_SESSION[USERNAME]' and is_active='1'");
$name = $rfs->fields['fname'];
if ( $rfs->recordcount() > 0 and $vtype == 'private' and $rec == 'no' and $admin == 'no' ) {
    $conn->execute("update files_video set views=views+1, viewtime='".date("Y-m-d H:i:s")."' WHERE vkey='$id'");
}
if ( $vtype != 'private' and $vactive != '0' and $_SESSION['UID'] != $vuid and $rec == 'no' and $admin == 'no' ) {
    if ( filter_title ( $_GET['fid'] != '' ) and $config['inc_vplayer_count'] == '1' ) { $conn->execute("update files_video set views=views+1, viewtime='".date("Y-m-d H:i:s")."' WHERE vkey='$id'"); }
    elseif ( filter_title ( $_GET['fid'] == '' ) ) { $conn->execute("update files_video set views=views+1, viewtime='".date("Y-m-d H:i:s")."' WHERE vkey='$id'"); }
}

//adv. info
$ad = $conn->execute("select * from adv_video where active='1' order by rand();");
$adv_dur = $ad->fields['duration'];
$adv_url = $ad->fields['url'];
$adv_image = $ad->fields['image'];
$adv_key = $ad->fields['adkey'];
if ($ad->recordcount() < 1) $pc_posadv = 'none';
//if ($config['same_title_uploads']  == '0') { $mlink = $config['base_url'].'/video/email/'.urlencode(ereg_replace(" {1,}", "_", $vtitle)); } else { $mlink = $config['base_url'].'/video/email/'.$id; }

$tad = $conn->execute("select * from adv_text where active='1' order by rand();");

if ( $pc_tads == '1' ) {
    $tads = $config['base_url'].'/modules/vPlayer/vPlayertextAdv.php';
    if ( $t == 'yes' ) $conn->execute("update adv_text set views=views+1 where active='1'");
}
else { 
    $tads = ''; $pc_atime=''; 
}

if ( $pc_vads == '1' and $admin != 'yes' ) {
    if ( $pc_posadv == 'be' ) $i = 2; else $i = 1;
    $vads = $config['url_fp'].'/ads/'.$adv_image; 
    $adlink = $config['base_url'].'/fadclick.php?id='.$adv_key;
    if ( $adv_key != '' and $t == 'yes' ) $conn->execute("update adv_video set views=views+$i where adkey='$adv_key';");
}
else { 
    $vads = ''; $pc_posadv = 'none'; $adv_dur = ''; $adlink = '';
}

if ( is_file( $config['tmb_dir'].'/user'.$vuid.'/pl_'.$vid.$rnd.'.jpg' ) ) $pc_image = $config['tmb_url'].'/user'.$vuid.'/pl_'.$vid.$rnd.'.jpg';
else $pc_image = $config['tmb_url'].'/user'.$vuid.'/'.$bn.'_'.$vid.$rnd.'.jpg';

if ( $t == 'yes' ) $skin_url = $config['base_url'].'/modules/vPlayer/vPlayerskin.php?id='.$id;
else $skin_url = $config['base_url'].'/modules/vPlayer/vPlayerskin.php?fid='.$id;

if ( $admin == 'yes' ) $list_url = $config['base_url'].'/modules/vPlayer/vPlayerlist.php?aid='.$id;
else { 
    if ( $t == 'yes' ) $list_url = $config['base_url'].'/modules/vPlayer/vPlayerlist.php?id='.$id;
    else $list_url = $config['base_url'].'/modules/vPlayer/vPlayerlist.php?fid='.$id;
}

if ( $admin == 'no' and $pc_logo == '1' ) $wm_image = $config['url_fp'].'/wms/'.$wm_img;
else $wm_image = '';

$embed_code = '<embed width="'.$pc_pw.'" height="'.$pc_ph.'" quality="high" bgcolor="#000000" name="main" id="main" allowscriptaccess="always" allowfullscreen="'.$pc_fs.'" src="'.$config['base_url'].'/modules/vPlayer/vPlayer.swf?f='.$config['base_url'].'/modules/vPlayer/vPlayercfg.php?'.$id_comp.'='.$id.'" type="application/x-shockwave-flash"/></embed>';
if ($config['same_title_uploads']  == '0') { $v_title = ereg_replace(" {1,}", "_", $vtitle); } else { $v_title = $id; }
//echo $pc_image;

//BEGIN XML CONFIG FILE
header('Content-Type: text/xml; charset=utf-8');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
?>
<xml>
  <logo>
    <image><?php echo $wm_image; ?></image>
    <position><?php echo $wm_rpos; ?></position>
    <link><?php echo $wm_url; ?></link>
    <alpha><?php echo $wm_alf; ?></alpha>
  </logo>
  <video>
    <autorun><?php echo $pc_autorun; ?></autorun>
    <image><?php echo $pc_image; ?></image>
    <bufferTime><?php echo $pc_btime; ?></bufferTime>
    <src><?php echo $config['flvdo_url'].'/user'.$vuid.'/'.$vflv; ?></src>
    <related><?php echo $list_url; ?></related>
  </video>
  <mediaAdv>
    <src><?php echo $vads; ?></src>
    <mode><?php echo $pc_posadv; ?></mode>
    <duration><?php echo $adv_dur; ?></duration>
    <link><?php echo $adlink; ?></link>
  </mediaAdv>
  <textAdv enable="true">
    <src><?php echo $tads; ?></src>
    <delay><?php echo $pc_atime; ?></delay>
  </textAdv>
  <share><?php echo $config['base_url'].'/video/'.$v_title; ?></share>
  <embed><![CDATA[<?php echo $embed_code; ?>]]></embed>
  <skin><?php echo $skin_url; ?></skin>
  <playlist> 
    <enable>true</enable> 
    <src><?php echo $config['base_url'].'/modules/vPlayer/vPlayerlink.php?id='.$id; ?></src> 
  </playlist> 
</xml>
