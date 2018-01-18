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
//check_login();

if ( isset ( $_GET['a'] ) ) $act = filter_title ( $_GET['a'] );
if ( isset ( $_GET['type'] ) ) $type = filter_title ( $_GET['type'] );
if ( isset ( $_GET['key'] ) ) $key = filter_title ( $_GET['key'] );
$ip = mysql_real_escape_string ( $_SERVER['REMOTE_ADDR'] );

if ( $act == 'add' ) {
    $tbl = 'quicklist_'.$type;
    if ( $type == 'audio' ) $list = key_to_info_audio ( $key ); elseif ( $type == 'image' ) $list = key_to_info_image ( $key ); elseif ( $type == 'video' ) $list = key_to_info ( $key );
    $vidid = $list[0];
    $vuid = $list[1];
    if ( $_SESSION['UID'] == '' ) $conn->execute("insert into ".$tbl." set uid='0', vid='".$vidid."', from_uid='0', addtime='".time()."', quicklist_ip='".$ip."';");
    else $conn->execute("insert into ".$tbl." set uid='".$_SESSION['UID']."', vid='".$vidid."', from_uid='".$vuid."', addtime='".time()."', quicklist_ip='".$ip."';");
    if ( $conn->Affected_Rows() > 0 ) {
	echo '<div><img src="'.$config['base_url'].'/modules/channels/images/btnqlist_set.gif" width="15" height="15" alt=""></div>';
	exit;
    } else { 
	echo '<div><img src="'.$config['base_url'].'/modules/channels/images/btnqlist_set.gif" width="15" height="15" alt=""></div>';
	exit;
    }
}

//sleep(1);

if ( $act == 'tdel' or $act == 'tlist' or $act == 'clear' ) {
    $tbl = 'quicklist_'.$type;
    
    if ( isset ( $_GET['tid'] ) and $act == 'tdel' ) $vid = filter_title ( $_GET['tid'] );
    if ( isset ( $_GET['tvid'] ) and ( $act == 'tdel' or $act == 'tlist' or $act == 'clear' ) ) $tvid = filter_title ( $_GET['tvid'] );
    
    if ( is_numeric ( $vid ) and is_numeric ( $tvid ) and $act == 'tdel' ) {
	if ( $_SESSION['UID'] == '' ) $conn->execute("delete from ".$tbl." where uid='0' and vid='".$vid."' and quicklist_ip='".$ip."';");
	else $conn->execute("delete from ".$tbl." where uid='".$_SESSION['UID']."' and vid='".$vid."';");
	if ( $conn->Affected_Rows() > 0 ) $err = '';
    } elseif ( $act == 'tlist' ) { 
	if ( is_numeric ( $tvid ) ) $err = '';
    } elseif ( $act == 'clear' ) { 
	if ( $_SESSION['UID'] == '' ) $conn->execute("delete from ".$tbl." where uid='0' and quicklist_ip='".$ip."';");
	else $conn->execute("delete from ".$tbl." where uid='".$_SESSION['UID']."';");
	if ( $conn->Affected_Rows() > 0 ) $err = '';
    }
    
    if ( $err == '' ) {
	    if ( $_SESSION['UID'] == '' ) $vq = $conn->execute("select * from $tbl where uid='0' and quicklist_ip='".$ip."' order by addtime asc;");
	    else $vq = $conn->execute("select * from $tbl where uid='$_SESSION[UID]' and quicklist_ip='".$ip."' order by addtime asc;");
	    $qtotal = $vq->recordcount();
	    $qlist = $vq->getrows();
	    
	    for ( $q = 0; $q < $qtotal; $q++ ) { 
		if ( $qlist[$q][1] == $tvid ) $nextql = $qlist[$q+1][1]; 
	    }
	    
	    if ( $nextql == '' ) $nextql = $qlist[0][1];
	    
	    if ( $_SESSION['UID'] == '' ) {
		$at = $conn->execute("select * from quicklist_audio where uid='0' and quicklist_ip='".$ip."' order by addtime desc;"); $atotal = $at->recordcount(); 
		$it = $conn->execute("select * from quicklist_image where uid='0' and quicklist_ip='".$ip."' order by addtime desc;"); $itotal = $it->recordcount(); 
		$vt = $conn->execute("select * from quicklist_video where uid='0' and quicklist_ip='".$ip."' order by addtime desc;"); $vtotal = $vt->recordcount(); 
	    } else {
		$at = $conn->execute("select * from quicklist_audio where uid='$_SESSION[UID]' order by addtime desc;"); $atotal = $at->recordcount(); 
		$it = $conn->execute("select * from quicklist_image where uid='$_SESSION[UID]' order by addtime desc;"); $itotal = $it->recordcount(); 
		$vt = $conn->execute("select * from quicklist_video where uid='$_SESSION[UID]' order by addtime desc;"); $vtotal = $vt->recordcount(); 
	    }
	    
	    $smarty->assign('vpage_fqlist_box', 'e');
	    $smarty->assign('vidid', $tvid);
	    $smarty->assign('atotal', $atotal);
	    $smarty->assign('itotal', $itotal);
	    $smarty->assign('vtotal', $vtotal);
	    $smarty->assign('qlist', $qlist);
	    $smarty->assign('flist', $qtotal);
	    $smarty->assign('nextql', $nextql);
	    $smarty->assign('section', $type);
	    $smarty->assign('ftype', $type);
	    $smarty->assign('btn', 'b'.$type);
	    
	    $smarty->display('_inc/viewfile/inc_viewfilequicklist.tpl');
	}
    exit;
}

if ( $act == 'startautoplay' ) { 
    session_register ( 'startautoplay' ); 
    $_SESSION['startautoplay'] = 'on';
    exit;
}

if ( $act == 'stopautoplay' ) {
    $_SESSION['startautoplay'] = '';
    session_unregister ( 'startautoplay' );
    exit;
}

if ( $act == 'tupdate' ) { 
    //usleep(500000);
    //sleep ( 1 );
    if ( $_SESSION['UID'] == '' ) {
	$vt = $conn->execute("select count(*) as vtotal from quicklist_video where uid='0' and quicklist_ip='".$ip."';");
	$it = $conn->execute("select count(*) as itotal from quicklist_image where uid='0' and quicklist_ip='".$ip."';");
	$at = $conn->execute("select count(*) as atotal from quicklist_audio where uid='0' and quicklist_ip='".$ip."';");
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
    
    echo $qtotal;
    exit; 
}

?>