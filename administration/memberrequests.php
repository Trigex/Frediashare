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
check_admin_login();

$tbl = 'request_channel';
$rt = filter_title ( $_GET['rt'] );
if ( $rt == 'all' or $rt == '' ) { $qu = ''; $type = 'requests/all'; }
elseif ( $rt == 'active' ) { $qu = "and solved='0'"; $type = 'requests/active'; }
elseif ( $rt == 'closed' ) { $qu = "and solved='1'"; $type = 'requests/closed'; }

if ( isset ( $_POST['actions'] ) ) $_POST['actions'] = mysql_real_escape_string ( $_POST['actions'] );
if ( filter_descr ( $_POST['goact'] ) != '' and $err == '' ) { //multi actions
    $farr = $_POST['mid'];
    if ($farr=="") $err=$lang['err_nofilesel']; //no files selected
    elseif ($_POST['actions']==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected
    if ( $err == '' ) {
	if ($_POST['actions']==$lang['adm_memchreq12']) {//close requests
	    foreach($farr as $value) {
		$conn->execute("update $tbl set solved='1' where rid='$value' and solved='0';");
	    }
	    if ( $conn->Affected_Rows() > 0 ) $msg = $lang['adm_memmsg1']; else $err = $lang['adm_memchreq16'];
	}
	if ($_POST['actions']==$lang['adm_memchreq15']) {//reopen requests
	    foreach($farr as $value) {
		$conn->execute("update $tbl set solved='0' where rid='$value' and solved='1';");
	    }
	    if ( $conn->Affected_Rows() > 0 ) $msg = $lang['adm_memmsg1']; else $err = $lang['adm_memchreq17'];
	}
	if ($_POST['actions']==$lang['adm_memchreq13']) {//delete requests
	    foreach($farr as $value) {
		$conn->execute("delete from $tbl where rid='$value';");
	    }
	    if ( $conn->Affected_Rows() > 0 ) $msg = $lang['adm_memmsg1'];
	}
	if ($_POST['actions']==$lang['adm_memchreq14']) {//delete images from selected
    	    foreach($farr as $value) {
    		$cr = $conn->execute("select * from request_channel where rid='".$value."';");
		$r_type = $cr->fields['rtype'];
		$del_uid = $cr->fields['uid'];
		if ( $r_type == 'profileimage' ) {
    		    $del = $conn->execute("select photo from members WHERE uid='$del_uid';");
        	    $del_pic = $del->fields['photo'];
        	    $del_file = $config['usrimg_dir'].'/'.$del_pic;
        	    if ( $del_pic != 'default.gif' and @unlink($del_file) ) { $rem = $conn->execute("update members set photo='default.gif' WHERE uid='$del_uid';"); $msg = $lang['adm_memmsg1']; }
        	    elseif ( $del_pic == 'default.gif' ) $err = $lang['adm_memchreq11'];
    		} elseif ( $r_type == 'bgimage' ) {
    		    $del = $conn->execute("select th_bgimage from member_theme WHERE th_uid='$del_uid';");
    		    $del_pic = $del->fields['th_bgimage'];
    		    $del_file = $config['base_dir'].'/media/files_user_bgimages/'.$del_pic;
    		    if ( $del_pic != 'none' and @unlink($del_file) ) { $rem = $conn->execute("update member_theme set th_bgimage='none', th_bgsrcname='' WHERE th_uid='$del_uid';"); $msg = $lang['adm_memmsg1']; }
    		    elseif ( $del_pic == 'none' ) $err = $lang['title_illegalop'];
    		}
    	    }
	}
    }
}

if ( filter_title ( $_POST['req_id'] != '' ) and $err == '' ) { //single actions
    $req_id = filter_title ( $_POST['req_id'] );
    $delpic = 'delpic_'.$req_id;
    $closereq = 'closereq_'.$req_id;
    $delreq = 'delreq_'.$req_id;
    $delpic_id = filter_title ( $_POST[$delpic] );
    $closereq_id = filter_title ( $_POST[$closereq] );
    $delreq_id = filter_title ( $_POST[$delreq] );
    if ( $delpic_id == '' and $closereq_id == '' and $delreq_id == '' ) $err = $lang['err_msgcompose15'];
    if ( $err == '' ) { 
	if ( $delpic_id == '1' and $err == '' ) { //delete image
	    $cr = $conn->execute("select * from request_channel where rid='".$req_id."';");
	    $r_type = $cr->fields['rtype'];
	    $del_uid = $cr->fields['uid'];
	    if ( $r_type == 'profileimage' ) {
    		$del = $conn->execute("select photo from members WHERE uid='$del_uid';");
        	$del_pic = $del->fields['photo'];
        	$del_file = $config['usrimg_dir'].'/'.$del_pic;
        	if ( $del_pic != 'default.gif' and @unlink($del_file) ) { $rem = $conn->execute("update members set photo='default.gif' WHERE uid='$del_uid';"); $msg = $lang['adm_memmsg1']; }
        	elseif ( $del_pic == 'default.gif' ) $err = $lang['adm_memchreq11'];
    	    } elseif ( $r_type == 'bgimage' ) {
    		$del = $conn->execute("select th_bgimage from member_theme WHERE th_uid='$del_uid';");
    		$del_pic = $del->fields['th_bgimage'];
    		$del_file = $config['base_dir'].'/media/files_user_bgimages/'.$del_pic;
    		if ( $del_pic != 'none' and @unlink($del_file) ) { $rem = $conn->execute("update member_theme set th_bgimage='none', th_bgsrcname='' WHERE th_uid='$del_uid';"); $msg = $lang['adm_memmsg1']; }
    		elseif ( $del_pic == 'none' ) $err = $lang['title_illegalop'];
    	    }
	}
	if ( $closereq_id == '1' and $err == '' ) { //close request
	    $conn->execute("update $tbl set solved='1' where rid='$req_id';");
	    if ( $conn->Affected_Rows() > 0 ) $msg = $lang['adm_memmsg1']; else $err = $lang['adm_memchreq16'];
	}
	if ( $delreq_id == '1' and $err == '' ) { //delete request
	    $conn->execute("delete from $tbl where rid='$req_id';");
	    if ( $conn->Affected_Rows() > 0 ) $msg = $lang['adm_memmsg1'];
	}
	
    }
}

// paging
$listing_per_page = 10;
if(filter_title($_GET[page]==""))
$page = 1;
else
$page = filter_title ( $_GET[page] );

$sql = "SELECT count(*) as total from $tbl where rid!='' $qu;";
$ars = $conn->Execute($sql);
$total = $ars->fields['total'];
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
	if ($type!="") $page_no .= " <a href='$config[admin_url]/members/$type/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
    }
}

if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
else $link = $lang['admerr_noreq'];

if($tpage>1)
{
    $nextpage=$page+1;
    $prevpage=$page-1;
    if ($type!="") $prevlink="<a href='$config[admin_url]/members/$type/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    if ($type!="") $nextlink="<a href='$config[admin_url]/members/$type/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";

    if($page==$tpage) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link;
    elseif($tpage>$page && $page>1) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
    elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
}


//$sql="SELECT * from $tbl $qu limit $startfrom, $listing_per_page";
$sql="SELECT * from $tbl where rid!='' $qu limit $startfrom, $listing_per_page;";
            
$rs = $conn->Execute($sql);
$total = $rs->recordcount()+0;
$req = $rs->getrows();
$smarty->assign('start_num',$start_num);
$smarty->assign('end_num',$startfrom+$rs->recordcount());
$smarty->assign('total',$grandtotal);
$smarty->assign('link',$link);
$smarty->assign('page',$page+0);
$smarty->assign('req',$req);

set_btn("adm_members"); set_sbtn("adm_memreq");
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display('administration/main_header.tpl');
$smarty->display('administration/member_requests.tpl');
$smarty->display('administration/main_footer.tpl');

?>