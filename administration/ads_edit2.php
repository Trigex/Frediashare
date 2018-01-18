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

if($_REQUEST['add_cancel']!="")
{
    header("Location: $config[admin_url]/textads");
    exit;
}
	
if($_REQUEST['action']=="edit")
{  
    $chid=$_REQUEST['id'];
    $sql ="select * from adv_text where aid=$chid";
    $rs=$conn->execute($sql);
    $ads = $rs->getrows();
    $smarty->assign('ads', $ads[0]);
    $smarty->assign('chid', $chid);
}				
        
if($_REQUEST['edit_add']!="")
{
    $chid=$_REQUEST['id'];
    if ($_REQUEST[name]=="") $err=$lang['adm_errplaylogo0'];
	elseif (strlen($_REQUEST[name])<3) $err=$lang['adm_errplaylogo1'];
    if ($_REQUEST[descrip]=="") $err=$lang['adm_errplaylogo3']; 
	elseif (strlen($_REQUEST[descrip])<3) $err=$lang['adm_errplaylogo4'];
    if ($_REQUEST[url]=="") $err=$lang['adm_errplaylogo6'];
	elseif (strlen($_REQUEST[url])<3) $err=$lang['adm_errplaylogo7'];
				
    if($err=="")
    {
	$conn->execute("update adv_text set adcount='0' where aid='$chid'");
	$rqname=filter_title($_REQUEST[name]);
        $rqdesc=filter_descr($_REQUEST[descrip]);
        
	$sql = "update adv_text set
    		    name = '$rqname',
                    descrip = '$rqdesc',
		    url = '$_REQUEST[url]' where aid='$_REQUEST[id]'";
		
	mysql_query($sql);
    }
    if($err == "") { header("Location: $config[admin_url]/textads/saved"); exit; }
}
        

if($_REQUEST['save_add']!="")
{
    if($_REQUEST[name]=="") $err = $lang['adm_errplaylogo0'];
	elseif (strlen($_REQUEST[name])<3) $err=$lang['adm_errplaylogo1'];
    if($_REQUEST[descrip]=="") $err = $lang['adm_errplaylogo3'];
	elseif (strlen($_REQUEST[descrip])<3) $err=$lang['adm_errplaylogo4'];
    if($_REQUEST[url]=="") $err = $lang['adm_errplaylogo6'];
	elseif (strlen($_REQUEST[url])<3) $err=$lang['adm_errplaylogo7'];
    
    if($err=="")
    {
	if ($err=="")
	{
	    $rqname=filter_title($_REQUEST[name]);
    	    $rqdesc=filter_descr($_REQUEST[descrip]);
	
	    $sql = "insert adv_text set
    		    name = '$rqname',
                    descrip = '$rqdesc',
		    url = '$_REQUEST[url]',
		    adkey='".mt_rand()."'";
    	    $conn->execute($sql);
    	    header("Location: $config[admin_url]/textads/saved");
    	    exit;
	}
    }
}    

set_btn("adm_fp"); set_sbtn("tads");
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display("administration/main_header.tpl");
$smarty->display("administration/ads_edit2.tpl");
$smarty->display("administration/main_footer.tpl");
?>