<?php
include('../../configs/config.php');

$rip = mysql_real_escape_string ( $_SERVER['REMOTE_ADDR'] );
$vkey = filter_title ( $_GET['id'] );
if ( $_SESSION['ql_autoplay'] == '1' or $_SESSION['pl_autoplay'] == '1' ) $rdr = 'true'; else $rdr = 'false';
if ( $_SESSION['ql_autoplay'] == '1' ) { //quicklist autoplay
    $list = key_to_info ( $vkey );
    $vidid = $list[0];
    $vq = $conn->execute("select * from quicklist_video where uid='$_SESSION[UID]' and quicklist_ip='$rip' order by addtime asc;");
    $qlist = $vq->getrows();
    $qtot = $vq->recordcount();
    for ( $q = 0; $q < $qtot; $q++ ) {
	if ( $qlist[$q][1] == $vidid ) $nextql = $qlist[$q+1][1];
    }
    if ( $nextql == '' ) $nextql = $qlist[0][1];
    $vu = $conn->execute("select vtitle,vkey from files_video where vid='$nextql';");
    $v_title = $vu->fields['vtitle'];
    $v_key = $vu->fields['vkey'];
    $vtitle = ereg_replace(" {1,}", "_", $v_title);
    if ( $config['same_title_uploads']  == '0' ) $v_link = urlencode ( $vtitle ); else $v_link = $v_key;
    $vurl = $config['base_url'].'/video/'.$v_link;
} elseif ( $_SESSION['pl_autoplay'] == '1' ) { //playlist autoplay
    $list = key_to_info ( $vkey );
    $vidid = $list[0];
    $plkey = filter_title ( $_SESSION['plk'] );
    $pq = $conn->execute("select * from playlist_files where ptype='video' and vkey='".$plkey."' and active='1' order by position asc;");
    $plist = $pq->getrows();
    $ptot = $pq->recordcount(); if ( $ptot < 1 ) { illegal_op(); exit; }
    for ( $q = 0; $q < $ptot; $q++ ) {
	if ( $plist[$q][2] == $vidid ) $nextpl = $plist[$q+1][2];
    }
    if ( $nextpl == '' ) $nextpl = $plist[0][2];
    $vu = $conn->execute("select vtitle,vkey from files_video where vid='$nextpl';");
    $v_title = $vu->fields['vtitle'];
    $v_key = $vu->fields['vkey'];
    $vtitle = ereg_replace(" {1,}", "_", $v_title);
    if ( $config['same_title_uploads']  == '0' ) $v_link = urlencode ( $vtitle.'&pl='.$plkey ); else $v_link = $v_key.'&pl='.$plkey;
    $vurl = $config['base_url'].'/video/'.$v_link;
}

//BEGIN XML TEXT ADS FILE
header('Content-Type: text/xml; charset=utf-8');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
?>  
<xml> 
    <redirect><?php echo $rdr; ?></redirect> 
    <url><?php echo $vurl; ?></url> 
</xml>
	