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

if (isset($_REQUEST['type'])) $_REQUEST['type']=filter_title($_REQUEST['type']);
if (isset($_REQUEST['goact'])) $_REQUEST['goact']=filter_title($_REQUEST['goact']);
if (isset($_REQUEST['delete'])) $_REQUEST['delete']=filter_title($_REQUEST['delete']);
if (isset($_REQUEST['reset'])) $_REQUEST['reset']=filter_title($_REQUEST['reset']);
if (isset($_REQUEST['guest_save'])) $_REQUEST['guest_save']=filter_title($_REQUEST['guest_save']);

//guest account
if ($_REQUEST[type]=="guest")
{
    if ($_REQUEST[goact]!="" && $err=="")
    { 
	if ($_REQUEST['mid']=="") $err=$lang['err_msgcompose14']; //nothing selected
	elseif ($_REQUEST[actions]==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected 
	if ($err=="")
	{
	    if ($_REQUEST[actions]==$lang['admact_mreset']) //reset selected
	    {
		foreach($_REQUEST['mid'] as $value) { $conn->execute("update guest_account set used_bw='0' where gid='$value'"); }
	    }
	    if ($_REQUEST[actions]==$lang['inbox_itblact6']) //remove selected
	    {
		foreach($_REQUEST['mid'] as $value) { $conn->execute("delete from guest_account where gid='$value'"); }
	    }
	    if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
	}
    }
    
    if ($_REQUEST['delete']!="")
    {
	$conn->execute("delete from guest_account where gid='$_REQUEST[delete]'");
	header("Location: $config[admin_url]/settings/guest");
	exit;
    }
    if ($_REQUEST['reset']!="")
    {
	$conn->execute("update guest_account set used_bw='0' where gid='$_REQUEST[reset]'");
	header("Location: $config[admin_url]/settings/guest");
	exit;
    }
    if ($_REQUEST[guest_save]!="")
    {
	$audioacc=$_REQUEST[audioacc]; $chk[]=$audioacc;
	$imageacc=$_REQUEST[imageacc]; $chk[]=$imageacc;
	$videoacc=$_REQUEST[videoacc]; $chk[]=$videoacc;
	$filesort=$_REQUEST[file_sort]; $chk[]=$filesort;
	$fileacc=$_REQUEST[file_access]; $chk[]=$fileacc;
	$categacc=$_REQUEST[categacc]; $chk[]=$categacc;
	$memsec=$_REQUEST[memsec]; $chk[]=$memsec;
	$mempro=$_REQUEST[mempro]; $chk[]=$mempro;
	$searchacc=$_REQUEST[searchacc]; $chk[]=$searchacc;
	$bwlimit=$_REQUEST[bwlimit]; $chk[]=$bwlimit;
	$chansec=$_REQUEST[chansec]; $chk[]=$chansec;
	
	for($i=0;$chk[$i];$i++)
	{
	    if (preg_match("/[^a-zA-Z0-9@.: öüäÖÜÄ!?\_\-\.]/", $chk[$i])) { illegal_opa(); }
	}
	
	$sq1="update configurations set value='$audioacc' where configurations.option='guests_audio_view'"; $conn->execute($sq1);
	$sq2="update configurations set value='$imageacc' where configurations.option='guests_image_view'"; $conn->execute($sq2);
	$sq3="update configurations set value='$videoacc' where configurations.option='guests_video_view'"; $conn->execute($sq3);
	$sq3x="update configurations set value='$filesort' where configurations.option='guests_file_sorting'"; $conn->execute($sq3x);
	$sq4x="update configurations set value='$fileacc' where configurations.option='guests_file_access'"; $conn->execute($sq4x);
	$sq4="update configurations set value='$categacc' where configurations.option='guests_categories_view'"; $conn->execute($sq4);
	$sq5="update configurations set value='$memsec' where configurations.option='guests_members_view'"; $conn->execute($sq5);
	$sq6="update configurations set value='$mempro' where configurations.option='guests_profile_view'"; $conn->execute($sq6);
	$sq7="update configurations set value='$searchacc' where configurations.option='guests_search_access'"; $conn->execute($sq7);
	$sq8="update configurations set value='$bwlimit' where configurations.option='guests_bw_limit'"; $conn->execute($sq8);
	$sq9="update configurations set value='$chansec' where configurations.option='guests_chan_access'"; $conn->execute($sq9);
	$msg=$lang['admnot_setguestsave'];
    }
    // paging
    $listing_per_page = 20;
    if($_REQUEST[page]=="")
	$page = 1;
    else
	$page = $_REQUEST[page];
    $sql = "SELECT count(*) as total from guest_account limit $listing_per_page";
    $ars = $conn->Execute($sql);
    $total = $ars->fields['total'];
    $grandtotal = $total;
    $tpage = ceil($total/$listing_per_page);
    if($tpage==0) $spage=$tpage+1;
    else $spage = $tpage;
    $startfrom = ($page-1)*$listing_per_page;
    $start_num=$startfrom+1;
    $page_no = ""; $smarty->assign('tpage',$tpage);
    for($i=1; $i<=$tpage; $i++)
    {
	if($i==$page) $page_no .= "<span class=\"pag_act\">$i</span>";
	else $page_no .= " <a href='$config[admin_url]/settings/guest/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
    }
    if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
    else $link = $lang['adm_setguestnoentry'];

    if($tpage>1)
    {
	$nextpage=$page+1;
        $prevpage=$page-1;
        $prevlink="<a href='$config[admin_url]/settings/guest/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
        $nextlink="<a href='$config[admin_url]/settings/guest/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
        if($page==$tpage) $link.="$prevlink&nbsp;&nbsp;&nbsp;";
        elseif($tpage>$page && $page>1) $link=$link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
        elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
    }

    $csql = "SELECT * from configurations";
    $rsc = $conn->Execute($csql);
    if($rsc)
    {
        while(!$rsc->EOF)
        {
            $field = $rsc->fields['option'];
            $config[$field] = $rsc->fields['value'];
	    $smarty->assign($field, $config[$field]);
	    @$rsc->MoveNext();
	}
    }

    $gq="select * from guest_account order by log_date desc limit $startfrom, $listing_per_page";
    $rg=$conn->execute($gq);
    $ginfo=$rg->getrows();
    
    $smarty->assign('start_num',$start_num);
    $smarty->assign('end_num',$startfrom+$rg->recordcount());
    $smarty->assign('total',$total);
    $smarty->assign('link',$link);
    $smarty->assign('page',$page+0);
    
    $smarty->assign('ginfo',$ginfo);
    set_btn("adm_set"); set_sbtn("guest");
    $smarty->assign('msg',$msg);
    $smarty->display('administration/main_header.tpl');
    $smarty->display('administration/main_guest.tpl');
    $smarty->display('administration/main_footer.tpl');
    exit;
}
?>