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

include("../configs/config.php");
check_admin_login();

if (isset($_REQUEST['page'])) $_REQUEST['page']=filter_title($_REQUEST['page']);
if (isset($_REQUEST['action'])) $_REQUEST['action']=filter_title($_REQUEST['action']);
if (isset($_REQUEST['goact'])) $_REQUEST['goact']=filter_title($_REQUEST['goact']);
if (isset($_REQUEST['id'])) $_REQUEST['id']=filter_title($_REQUEST['id']);

function del_tadv($id)
{
    global $conn, $config;
    
    $conn->execute("DELETE from adv_text where aid='$id'");
    
    if ($conn->Affected_Rows()>0 && $err=="") $msg='yes';
    else $msg='no';
    
    return $msg;
}

if ($_REQUEST[goact]!="" && $err=="")
{
    if ($_REQUEST['mid']=="") $err=$lang['err_msgcompose14']; //nothing selected
    elseif ($_REQUEST[actions]==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected
    if ($err=="")
    {
        if ($_REQUEST[actions]==$lang['act_frenable']) //enable selected
        {
            foreach($_REQUEST['mid'] as $value) { $conn->execute("update adv_text set active='1' where aid='$value' and active='0'"); }
        }
        if ($_REQUEST[actions]==$lang['act_frdisable']) //disable selected
        {
            foreach($_REQUEST['mid'] as $value) { $conn->execute("update adv_text set active='0' where aid='$value' and active='1'"); }
        }
        if ($_REQUEST[actions]==$lang['inbox_itblact6']) //delete selected
        {
            foreach($_REQUEST['mid'] as $value) { del_tadv($value); }
        }
        if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
    }
}
        
if($_REQUEST[action]=="confirmation")
{
    $msg=$lang['not_inboxmsgmark'];
}
if($_REQUEST[action]=="enable")  
{
    $aid=$_REQUEST[id];
    $sql="update adv_text set active='1' where aid='$aid'";
    $rs=$conn->execute($sql);
    header("Location: $config[admin_url]/textads");
    exit;
}
if($_REQUEST[action]=="disable")  
{
    $aid=$_REQUEST[id];
    $sql="update adv_text set active='0' where aid='$aid'";
    $rs=$conn->execute($sql);
    header("Location: $config[admin_url]/textads");
    exit;
}

if($_REQUEST[action]=="delete")
{
    $ret=del_tadv($_REQUEST['id']);
    if ($ret=='yes') { header("Location: $config[admin_url]/textads/saved"); exit; }
    else illegal_opa();
}

$query.=" order by aid asc";

    //PAGING
    $listing_per_page = 10;
    if($_REQUEST[page]=="")
    $page = 1;
    else
    $page = $_REQUEST[page];
    $sql = "SELECT count(*) as total from adv_text $query";
    $ars = $conn->Execute($sql);
    $total = $ars->fields['total'];
    $grandtotal = $total;
    $tpage = ceil($total/$listing_per_page);
    if($tpage==0) $spage=$tpage+1;
    else $spage = $tpage;
    $startfrom = ($page-1)*$listing_per_page;

    $page_no = ""; $smarty->assign('tpage',$tpage);
    for($i=1; $i<=$tpage; $i++)
    {
        if($i==$page)
            $page_no .= "<span class=\"pag_act\">$i</span> ";
        else
            $page_no .= " <a href='$config[admin_url]/textads/page$i'> <span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
    }
    
    if($page_no!="")
        $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
    else
        $link = $lang['adm_errvadsnone2'];

    if($tpage>1)
    {
        $nextpage=$page+1;
        $prevpage=$page-1;
        $prevlink="<a href='$config[admin_url]/textads/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
        $nextlink="<a href='$config[admin_url]/textads/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
        
	if($page==$tpage) $link.="$prevlink&nbsp;&nbsp;&nbsp;";
        elseif($tpage>$page && $page>1) $link=$link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
        elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
    }

    $sql="SELECT * from adv_text $query limit $startfrom, $listing_per_page";
    $rs = $conn->Execute($sql);
    $total = $rs->recordcount()+0;
    $adsview = $rs->getrows();
				
    for($i=0;$i<count($adsview);$i++)
    {
    	$exp=$adsview[$i]["views"];
	$click=$adsview[$i]["click"];
	if($exp!=0 and $click !=0)
	{
	    $temp=($click/$exp)*100;
	    $ratio[$i]=round($temp,2);
	}
	else
	    $ratio[$i]=0;
				 
    }
    
    $start_num=$startfrom+1;
    $smarty->assign('start_num',$start_num);
    $smarty->assign('end_num',$startfrom+$rs->recordcount());
    $smarty->assign('link',$link);
    $smarty->assign('grandtotal',$grandtotal+0);
    $smarty->assign('total',$total+0);
    $smarty->assign('page',$page+0);
    $smarty->assign('ratio',$ratio);
    $smarty->assign('adsview',$adsview);

set_btn("adm_fp"); set_sbtn("tads");
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display("administration/main_header.tpl");
$smarty->display("administration/ads_manage2.tpl");
$smarty->display("administration/main_footer.tpl");
?>