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
include('configs/config.php');
$config['section'] = 'audio';
$smarty->assign('section',$config['section']);
include('rating.php');
include('rating2.php');
if ($config['enable_audio'] == 0) { header('Location: ' .$config['base_url']. '/main'); exit; }

check_active();
//$_REQUEST = array_map('mysql_real_escape_string', $_REQUEST);
if ( isset ( $_REQUEST['type'] ) ) $_REQUEST['type'] = filter_title ( $_REQUEST['type'] );
if ( isset ( $_REQUEST['id'] ) ) $_REQUEST['id'] = filter_descr ( $_REQUEST['id'] );

if (filter_title($_REQUEST['type']) == 'na')
{
    $err=$lang['err_audios1'];
    set_btn('baudio'); set_title($lang['err_audios1']);
    $smarty->assign('err',$err);
    $smarty->display('main_header.tpl');
    $smarty->display('footer.tpl');
    exit;
}
if (filter_title($_REQUEST['id']) != '')
{
    if ($_SESSION['UID'] == '' and $config['guests_file_access'] == 0) { header('Location: ' .$config['base_url']. '/login?next=audio/'.$_REQUEST['id']); exit; }
    if ($config['same_title_uploads'] == 0)
    {
	$tt = $_REQUEST['id'];
	$tt = filter_title(ereg_replace("_{1,}", " ", $tt));
	$tq = "select vkey from files_audio where (vtitle='$tt')";
	$rq = $conn->execute($tq);
	$key = $rq->fields['vkey'];
	$rq->Close();
    } else { $key = filter_title($_REQUEST['id']); }

    if (!key_to_info_audio($key)) { $err=$lang['err_audios2']; }
    
    $vt=key_to_info_audio($key);
    $vidtype=$vt[6];
    $vuid=$vt[1];
    check_block($vuid, 'bl_files');
    $smarty->assign('errs', check_block($vuid, 'bl_chcomm'));
    
    $rfs = $conn->execute("select * from friends where uid='$vuid' and fname='$_SESSION[USERNAME]' and is_active='1'");
    if ( $rfs->recordcount() > 0 ) $friend = 'yes'; else $friend = 'no';
    if ( $vidtype == 'private' and $vuid != $_SESSION['UID'] and $friend == 'no' ) { $err = $lang['fp_txt13']; }
    $smarty->assign('friend', $friend);
    //audio playlist
    if ( filter_title ( $_GET['pl'] ) != '' ) {
	$plkey = filter_title ( $_GET['pl'] );
	$pq = $conn->execute("select * from playlist_files where ptype='audio' and vkey='".$plkey."' and active='1' order by position asc;");
	$plist = $pq->getrows();
        $smarty->assign('plcount', $pq->recordcount());
	$smarty->assign('plist', $plist);

        $ptot = $pq->recordcount(); if ( $ptot < 1 ) { illegal_op(); exit; }
	for ( $q = 0; $q < $ptot; $q++ ) {
    	    if ( $plist[$q][2] == $vt[0] ) $nextpl = $plist[$q+1][2];
	}
	if ( $nextpl == '' ) $nextpl = $plist[0][2];
	$smarty->assign('nextpl', $nextpl);
	
	$pr = $conn->execute("select privacy from playlist_audio where vkey='".$plkey."' and active='1';");
        $plistpriv = $pr->fields['privacy'];
        if ( $plistpriv == 'private' and $vuid != $_SESSION['UID'] and $friend == 'no' ) { $err = $lang['plist_txt65']; }
    }
    
    if ($err == '')
    {
	$sql = "select * from watermark_audio where (active='1') order by rand()";
	$rs = $conn->execute($sql);
	if ($rs->recordcount()>0)
	{
	    $image = $rs->fields['image'];
	    $smarty->assign('audio_logo',$image);
	    $rs->Close();
	}
	
	$sql1 = "select * from playeraudio_settings where (ID='1')";
        $rs = $conn->execute($sql1);
        $play = $rs->fields['autoplay']; $smarty->assign('play',$play);
        $showeq = $rs->fields['skin']; $smarty->assign('showeq',$showeq);
        if ( $showeq == 'rnd' ) {
    	    include_once('modules/aPlayer/skins.php');
        }
        $pwidth = $rs->fields['pwidth']; $smarty->assign('pwidth',$pwidth);
        $pheight = $rs->fields['pheight']; $smarty->assign('pheight',$pheight);
        $plogo = $rs->fields['logo']; $smarty->assign('plogo',$plogo);
        $rs->Close();
        
	$sql2 = "select * from playeraudio_settings where (ID='2')";
        $rs2 = $conn->execute($sql2);
        $play2 = $rs2->fields['autoplay']; $smarty->assign('play2',$play2);
        $showeq2 = $rs2->fields['skin']; $smarty->assign('showeq2',$showeq2);
        if ( $showeq2 == 'rnd' ) {
    	    include_once('modules/aPlayer/skins.php');
        }
        $pwidth2 = $rs2->fields['pwidth']; $smarty->assign('pwidth2',$pwidth2);
        $pheight2 = $rs2->fields['pheight']; $smarty->assign('pheight2',$pheight2);
        $plogo2 = $rs2->fields['logo']; $smarty->assign('plogo2',$plogo2);
        $rs2->Close();
        
    	if ($_SESSION['UID'] == '' && $config['guests_bw_limit'] != 0)
	{
	    $guest_ip = $_SERVER['REMOTE_ADDR'];
	    $datetime = date('y-m-d H:i:s');
	    $guest_date = date('y-m-d');
	    
	    $sql = "select * from  guest_account where (guest_ip='$guest_ip') and (log_date like '%$guest_date%')";
	    $rs = $conn->execute($sql);
	    $mybw = $rs->fields['used_bw'];
	    $guest_row = $rs->recordcount($sql);
	    
	    if ($mybw >= $config['guests_bw_limit'])
	    {
		$err = $lang['err_guestlimit'];
		$smarty->assign('err',$err); set_title($lang['title_guestlimit']);
		$smarty->display('main_header.tpl');
		$smarty->display('footer.tpl');
		exit;
	    }
	    
	    $sql = "select vspace from files_audio where (vkey='$key')";
	    $rs = $conn->execute($sql);
	    $movspace = $rs->fields['vspace'];
	    
	    if ($guest_row > 0)
	    {
		$movspace = $movspace + $mybw;
		$sql = "update guest_account set used_bw='$movspace' where (guest_ip='$guest_ip') and (log_date like '%$guest_date%')";
		$rs = $conn->execute($sql);
	    }
	    else
	    {
		$sql = "INSERT into guest_account set guest_ip='$guest_ip', log_date='$datetime', used_bw='$movspace'";
		$rs = $conn->execute($sql);
	    }
	    $rs->Close();
	}

	$list = key_to_info_audio($key);

	$act = $list[7];
	if ($act == 0 && $list[1] != $_SESSION['UID']) { header('Location: ' .$config['base_url']. '/audio/not_approved'); exit; }
	
	$vidid=$list[0]; $smarty->assign('vidid',$vidid);
	$vuid=$list[1];  $smarty->assign('vuid',$vuid);
	$title=$list[2]; $smarty->assign('title',$title);  
	$descr=$list[4]; $smarty->assign('descr',$descr);
	$views=$list[5]; $smarty->assign('views',$views);
	$type=$list[6];  $smarty->assign('type',$type);
			 $smarty->assign('act',$act);    
	$is_rated=$list[8]; $smarty->assign('is_rated',$is_rated);
	$comments=$list[9]; $smarty->assign('comments',$comments);
	$is_comm=$list[10]; $smarty->assign('is_comm',$is_comm);
	$is_bm=$list[11]; $smarty->assign('is_bm',$is_bm);
	$flvname=$list[12]; $smarty->assign('flvname',$flvname);
	$inap=$list[14]; $smarty->assign('inap',$inap);
	
	$crq = $conn->execute("select is_commrate from files_audio where vid='$vidid' and vkey='$key';");
        $smarty->assign('file_comm_rate', $crq->fields['is_commrate']); 
	
	//add to history
	if($_SESSION['UID'] != '')
	{
	    if ($_SESSION['UID'] != $vuid)
	    {
		$psql="insert into history_audio set uid='$_SESSION[UID]', vid='$vidid', from_uid='$vuid', addtime='".time()."'";
		$prs=$conn->execute($psql);
	    }
	}
	
	//friend check
	$frsql="select * from files_audio where vkey='$key'";
	$frs=$conn->execute($frsql);
	$muid = $frs->fields[uid];
	$frs->Close();
	$fs="select * from friends where (uid='$muid') and (fname='$_SESSION[USERNAME]') and (is_active='1')";
	$rfs=$conn->execute($fs);
	$name=$rfs->fields[fname];
	if ($rfs->recordcount()>0 && $type=="private")
	{
	    if($rfs->fields[can_rate]=="1") $smarty->assign('can_rate',$rfs->fields[can_rate]);
	    if($rfs->fields[can_comment]=="1") $smarty->assign('can_comment',$rfs->fields[can_comment]);
	    
	    $conn->execute("update files_audio set views=views+1, viewtime='".date("Y-m-d H:i:s")."' WHERE vkey='$key'");
	    $friend="yes";
	    $smarty->assign('friend',$friend);
	}
	$rfs->Close();
	//increase view count
	if($_SESSION[UID]!="")
	{
	    if ($_SESSION[UID]!=$vuid && $type!="private")
	    {
		$vsql="update files_audio set views=views+1, viewtime='".date("Y-m-d H:i:s")."' WHERE vkey='$key'";
		$vrs=$conn->execute($vsql);
		$vrs->Close();
	    }
	} else 
	    {
		$vsql="update files_audio set views=views+1, viewtime='".date("Y-m-d H:i:s")."' WHERE vkey='$key'";
		$vrs=$conn->execute($vsql);
		$vrs->Close();
	    }
	
	//related tags
	$ch=explode(" ",$list[3]);
	if(count($ch)>1)
	    for($i=1;$i<count($ch);$i++)
		$chnl.="or vtags like '%$ch[$i]%'";
		
	if ($config[enable_audio]=="1")
	{
	    $reltags=tags("select vtags from files_audio where (vtype='public') and (active='1') and (is_inapp='no') and (vkey!='$key') and (vtags like '%$ch[0]%' $chnl) order by addtime desc limit 0,20");
	    $smarty->assign('reltags',$reltags);
	}
	
	//ratings
	if ( $config['file_ratings'] == '1' ) { 
	$smarty->assign('section',$config[section]);
	
	$ratebar = rating_bar($key,'5','','audio');
	$ratebar1 = rating_bar($key,'5','static','audio');
	$ratebar2 = rating_bar2($key,'5','static','audio');
	$smarty->assign('ratebar',$ratebar);
	$smarty->assign('ratebar1',$ratebar1);
	$smarty->assign('ratebar2',$ratebar2);
	}
	$smarty->assign('flvurl',$config['flvdo_url']);
    }
    //comments
    if ( $config['file_comments'] == '1' ) {
    $csql="select s.*,v.* from comm_audio v,members s where v.approved='1' and (v.active='1') and (v.vid='$vidid') and (v.uid=s.uid) order by comid desc";
    $crs=$conn->execute($csql);
    $smarty->assign('comm',$crs->getrows());
    $smarty->assign('comments', $crs->recordcount() );
    }
    //next, prev audio
    if ( $config['vpage_pcnbox'] == '1' ) {
    $nq = $conn->execute("select * from files_audio where vid > $vidid and vtype='public' $active limit 0,1;");
    $smarty->assign('next', $nq->getrows());
    $pq = $conn->execute("select * from files_audio where vid < $vidid and vtype='public' $active order by vid desc limit 0,1;");
    $smarty->assign('prev', $pq->getrows());
    $cq = $conn->execute("select * from files_audio where vkey='".filter_title($key)."';");
    $smarty->assign('curr', $cq->getrows());
    }
    //subs, blocks
    $bl = $conn->execute("select * from blocked_users where blocker_uid='$vuid' and blocked_uid='$_SESSION[UID]' and active='1'");
    if ( $bl->recordcount() > 0 ) { $smarty->assign('is_bl', 'yes'); }
    $ms1 = $conn->execute("select * from subscriptions where subscriber_uid = '$_SESSION[UID]' and subscribed_uid = '$vuid' and stype='user' and active = '1';");
    if ( $ms1->recordcount() > 0 ) $smarty->assign('is_sub', 'yes'); else $smarty->assign('is_sub', 'no');
    //responses
    if ( $config['file_responses'] == '1' ) {
    $cr = $conn->execute("select * from file_responses where approved='1' and active='1' and rtype='audio' and rvid='$vidid'");
    $smarty->assign('cr', $cr->getrows());
    
    $fr = $conn->execute("select s.*,v.* from files_audio v, file_responses s where v.active='1' and v.is_inapp='no' and v.vtype='public' and s.rtovid='$vidid' and v.vid=s.rtovid and s.active='1' and s.approved='1' and s.rtype='audio' and (v.is_fileresp='yes' or v.is_fileresp='app');");
    $smarty->assign('fres', $fr->getrows());
    $tt = $fr->recordcount();
    $smarty->assign('tres', $fr->recordcount());
    if ( $fr->recordcount() > 0 ) {
        include("modules/channels/responses/include/xajax.inc.php");
        $xajax = new xajax();
        include("modules/channels/responses/include/xajax.getaudios.php");
        $xajax->processRequests();
    }
    }
    //audio quicklist
    if ( $_SESSION['UID'] == '' ) $qq = " and quicklist_ip='".mysql_real_escape_string($_SERVER['REMOTE_ADDR'])."'"; else $qq = '';
    $vq = $conn->execute("select * from quicklist_audio where uid='$_SESSION[UID]' $qq order by addtime asc;");
    $qlist = $vq->getrows(); 
    $smarty->assign('qlist', $qlist); 
    
    $qtot = $vq->recordcount();
    for ( $q = 0; $q < $qtot; $q++ ) {
	if ( $qlist[$q][1] == $vidid ) $nextql = $qlist[$q+1][1];
    }
    if ( $nextql == '' ) $nextql = $qlist[0][1];
    $smarty->assign('nextql', $nextql);
}
else { illegal_op(); }
$pw = $conn->execute("select pwidth from player_settings where ID='1';"); $pwidth = $pw->fields['pwidth']; $rw = ( 950 - $pwidth ); $smarty->assign('rwidth', $rw);
$smarty->assign('flag',"2");
set_btn("baudio"); 
$smarty->assign('err',$err);
$smarty->display('main_header.tpl');
if ( $tt > 0 and $config['file_responses'] == '1' ) { $xajax->printJavascript("modules/channels/responses/js","xajax.js"); }
$smarty->display('view_file.tpl');
$smarty->display('footer.tpl');
?>