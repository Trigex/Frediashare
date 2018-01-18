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
include('rating2.php');
if ($config['enable_images']=="0") { header("Location: $config[base_url]/main"); exit; }
check_login('my_images');

if (isset($_REQUEST['action'])) $_REQUEST['action']=mysql_real_escape_string($_REQUEST['action']);
if (isset($_REQUEST['actions'])) $_REQUEST['actions']=mysql_real_escape_string($_REQUEST['actions']);
if (isset($_REQUEST['page'])) $_REQUEST['page']=mysql_real_escape_string($_REQUEST['page']);
if (isset($_REQUEST['type'])) $_REQUEST['type']=mysql_real_escape_string($_REQUEST['type']);
if (isset($_REQUEST['vtype'])) $_REQUEST['vtype']=mysql_real_escape_string($_REQUEST['vtype']);
if (isset($_REQUEST['vcancel'])) $_REQUEST['vcancel']=mysql_real_escape_string($_REQUEST['vcancel']);
if (isset($_REQUEST['vsave'])) $_REQUEST['vsave']=mysql_real_escape_string($_REQUEST['vsave']);
if (isset($_REQUEST['vpriv'])) $_REQUEST['vpriv']=mysql_real_escape_string($_REQUEST['vpriv']);
if (isset($_REQUEST['vcomm'])) $_REQUEST['vcomm']=mysql_real_escape_string($_REQUEST['vcomm']);
if (isset($_REQUEST['vrate'])) $_REQUEST['vrate']=mysql_real_escape_string($_REQUEST['vrate']);
if (isset($_REQUEST['vid'])) $_REQUEST['vid']=mysql_real_escape_string($_REQUEST['vid']);
if (isset($_REQUEST['timesort'])) $_REQUEST['timesort']=mysql_real_escape_string($_REQUEST['timesort']);
if (isset($_REQUEST['goact'])) $_REQUEST['goact']=mysql_real_escape_string($_REQUEST['goact']);
$smarty->assign('dmenu', 'myfiles'); 

    if ($_REQUEST[vcancel]) { header("Location: $config[base_url]/my_images"); exit; } 

    if ($_REQUEST[goact]!="" && $err=="")
    {
	if ( $_SESSION['viewmode'] == 'list' ) { $farr = $_REQUEST['mid']; $plfarr = $_REQUEST['lpl']; } elseif ( $_SESSION['viewmode'] == 'grid' ) { $farr = $_REQUEST['gmid']; $plfarr = $_REQUEST['gpl']; }
	
	if ($farr=="") $err=$lang['err_nofilesel']; //no files selected
	elseif ($_REQUEST[actions]==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected
	
	if ($err=="")
	{
	    if ($_REQUEST[actions]==$lang['qlist_txt14']) {//add to playlist
	    if ( $plfarr == '' ) $err = $lang['plist_txt36'];
	    if ( $err == '' ) {
                foreach($farr as $value) {
                    foreach($plfarr as $plvalue) {
                        //$fu = $conn->execute("select uid from files_image where vid='".filter_title($value)."'"); $fuid = $fu->fields['uid'];
                        $conn->execute("insert into playlist_files set ptype='image', vid='".filter_title($value)."', uid='".$_SESSION['UID']."', vkey='".filter_title($plvalue)."';");
                    }
                }
            }
            }
            if ($_REQUEST[actions]==$lang['act_addfav']) {//add to favorites
                foreach($farr as $value) {
                    //$fu = $conn->execute("select uid from files_image where vid='".filter_title($value)."'"); $fuid = $fu->fields['uid'];
                    $conn->execute("insert into fav_image set vid='".filter_title($value)."', uid='$_SESSION[UID]', from_uid='$_SESSION[UID]';");
                    if ( $conn->Affected_Rows() > 0 ) $conn->execute("update files_image set vfav=vfav+1 where vid='".filter_title($value)."'");
                }
            }
            if ($_REQUEST[actions]==$lang['qlist_txt1']) {//add to quicklist
                foreach($farr as $value) {
                    //$afu = $conn->execute("select uid from files_image where vid='".filter_title($value)."';"); $afuid = $afu->fields['uid'];
                    $conn->execute("insert into quicklist_image set uid='".$_SESSION['UID']."', vid='".filter_title($value)."', addtime='".time()."', from_uid='".$_SESSION['UID']."';");
                }
            }
	    if ($_REQUEST[actions]==$lang['act_markpub']) //mark public
	    {
		foreach($farr as $value) { $conn->execute("update files_image set vtype='public' where vtype='private' and vid='".filter_title($value)."' and uid='$_SESSION[UID]'"); }
	    }
	    if ($_REQUEST[actions]==$lang['act_markpriv']) //mark private
	    {
		foreach($farr as $value) { $conn->execute("update files_image set vtype='private' where vtype='public' and vid='".filter_title($value)."' and uid='$_SESSION[UID]'"); }
	    }
	    if ($_REQUEST[actions]==$lang['act_mark1comm']) //enable comments
	    {
		foreach($farr as $value) { $conn->execute("update files_image set is_comm='yes' where is_comm!='' and vid='".filter_title($value)."' and uid='$_SESSION[UID]'"); }
	    }
	    if ($_REQUEST[actions]==$lang['act_mark0comm']) //disable comments
	    {
		foreach($farr as $value) { $conn->execute("update files_image set is_comm='no' where is_comm!='' and vid='".filter_title($value)."' and uid='$_SESSION[UID]'"); }
	    }
	    if ($_REQUEST[actions]==$lang['macts1']) //enable comment rating
            {
                foreach($farr as $value) { $conn->execute("update files_image set is_commrate='yes' where is_commrate!='' and vid='".filter_title($value)."' and uid='$_SESSION[UID]'"); }
            }
            if ($_REQUEST[actions]==$lang['macts2']) //disable comment rating
            {
                foreach($farr as $value) { $conn->execute("update files_image set is_commrate='no' where is_commrate!='' and vid='".filter_title($value)."' and uid='$_SESSION[UID]'"); }
            }
            if ($_REQUEST[actions]==$lang['macts3']) //enable file responses
            {
                foreach($farr as $value) { $conn->execute("update files_image set is_fileresp='yes' where is_fileresp!='' and vid='".filter_title($value)."' and uid='$_SESSION[UID]'"); }
            }
            if ($_REQUEST[actions]==$lang['macts4']) //disable file responses
            {
                foreach($farr as $value) { $conn->execute("update files_image set is_fileresp='no' where is_fileresp!='' and vid='".filter_title($value)."' and uid='$_SESSION[UID]'"); }
            }
	    if ($_REQUEST[actions]==$lang['act_mark1rate']) //enable ratings
	    {
		foreach($farr as $value) { $conn->execute("update files_image set is_rated='yes' where is_rated!='' and vid='".filter_title($value)."' and uid='$_SESSION[UID]'"); }
	    }
	    if ($_REQUEST[actions]==$lang['act_mark0rate']) //disable ratings
	    {
		foreach($farr as $value) { $conn->execute("update files_image set is_rated='no' where is_rated!='' and vid='".filter_title($value)."' and uid='$_SESSION[UID]'"); }
	    }
	    if ($_REQUEST[actions]==$lang['act_mark1bm']) //enable bookmarking
	    {
		foreach($farr as $value) { $conn->execute("update files_image set is_bm='yes' where is_bm!='' and vid='".filter_title($value)."' and uid='$_SESSION[UID]'"); }
	    }
	    if ($_REQUEST[actions]==$lang['act_mark0bm']) //disable bookmarking
	    {
		foreach($farr as $value) { $conn->execute("update files_image set is_bm='no' where is_bm!='' and vid='".filter_title($value)."' and uid='$_SESSION[UID]'"); }
	    }
	    if ($_REQUEST[actions]==$lang['inbox_itblact6']) //delete selected
	    {
		foreach($farr as $value)
		{
		    delete_img(filter_title($value),$_SESSION[UID]); 
		    /*
		    if ($config[delete_files]=="0")
		    {
			$conn->execute("delete from history_image where vid='".filter_title($value)."'");
			$conn->execute("delete from fav_image where vid='".filter_title($value)."'");
			$conn->execute("delete from request_image_F where vid='".filter_title($value)."'");
			$conn->execute("delete from request_image_I where vid='".filter_title($value)."'");
			$conn->execute("delete from comm_img where vid='".filter_title($value)."'");
			$conn->execute("delete from comm_rates where vid='".filter_title($value)."' and type='image'");
			$conn->execute("delete from files_image where vid='".filter_title($value)."' and uid='$_SESSION[UID]'");
			$conn->execute("update pmessages set fimage='0' where fimage='$value'");
			$conn->execute("update members set files_image=files_image-1 where uid='$_SESSION[UID]'");
		    }
		    if ($config[delete_files]=="1") 
		    { 
			delete_img($value,$_SESSION[UID]); 
			$conn->execute("update pmessages set fimage='0' where fimage='$value'");
			$conn->execute("update members set files_image=files_image-1 where uid='$_SESSION[UID]'");
		    }
		    */
		}
	    }
	    if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark'];
	}
    }
    
    $sql1="select * from members where uid='$_SESSION[UID]'";
    $mrs1=$conn->execute($sql1);
    $mdir=$mrs1->fields[folder];
    $mtmb_dir=$config['tmb_url']."/".$mdir;
    $smarty->assign('mtmb_dir',$mtmb_dir);
    
    $type=$_REQUEST[vtype];
    if($type=="all") $qu="order by vtitle";
    elseif($type=="active") $qu="and active='1' order by vtitle";
    elseif($type=="comments") { if ($config[file_comments]=="1") $qu="order by comments desc"; else illegal_op(); }
    elseif($type=="responses") { if ($config[file_responses]=="1") $qu="order by responses desc"; else illegal_op(); }
    elseif($type=="date") $qu="order by addtime desc";
    elseif($type=="favorited") $qu="order by vfav desc";
    elseif($type=="featured") $qu="and is_featured='yes'";
    elseif($type=="inactive") $qu="and active='0'";
    elseif($type=="private") $qu="and vtype='private'";
    elseif($type=="public") $qu="and vtype='public'";
    elseif($type=="ratings") { if ($config[file_ratings]=="1") $qu="order by rate desc"; else illegal_op(); }
    elseif($type=="views") $qu="order by views desc";
    else $qu="order by vtitle";
    
    if ($_REQUEST[timesort]!="")
    {
    $ts=$_REQUEST[timesort];
    $tstr="/$ts";
    if ($ts=="all_time") { $tq=""; }
    elseif ($ts=="today") { $tq="and adddate = CURDATE()"; }
    elseif ($ts=="this_week") { $tq="and YEARweek(adddate) = YEARweek(CURRENT_DATE)"; }
    elseif ($ts=="this_month") { $tq="and SUBSTRING(adddate FROM 1 FOR 7) = SUBSTRING(CURRENT_DATE - INTERVAL 0 MONTH FROM 1 FOR 7)"; }
    elseif ($ts=="this_year") { $tq="and YEAR(adddate) = YEAR(CURRENT_DATE)"; }
    elseif ($ts=="last_week") { $tq="and YEARweek(adddate) = YEARweek(CURRENT_DATE - INTERVAL 7 DAY)"; }
    elseif ($ts=="last_month") { $tq="and SUBSTRING(adddate FROM 1 FOR 7) = SUBSTRING(CURRENT_DATE - INTERVAL 1 MONTH FROM 1 FOR 7)"; }
    elseif ($ts=="last_year") { $tq="and YEAR(adddate) = YEAR(CURRENT_DATE - INTERVAL 1 YEAR)"; }
    else { illegal_op(); }
    } else $tstr="";
    
    // paging begins
    $listing_per_page = $config[paging_myimages];
    if($_REQUEST[page]=="") $page = 1;
    else $page = $_REQUEST[page];
    $sql = "SELECT count(*) as total from files_image where uid='$_SESSION[UID]' $tq $qu";
    $ars = $conn->Execute($sql);
    $total = $ars->fields['total'];
    $grandtotal = $total;
    $tpage = ceil($total/$listing_per_page);
    if($tpage==0) $spage=$tpage+1;
    else $spage = $tpage;
    $startfrom = ($page-1)*$listing_per_page;

    $sql="select * from files_image WHERE uid='$_SESSION[UID]' $tq $qu limit $startfrom, $listing_per_page";
    $rs=$conn->execute($sql);
    if($rs->recordcount()>0)$vdo = $rs->getrows();
    $start_num=$startfrom+1;
    $end_num=$startfrom+$rs->recordcount();
    $page_no = "";
    $smarty->assign('tpage',$tpage);
    for($i=1; $i<=$tpage; $i++)
    {
	if($i==$page) $page_no .= "<span class=\"pag_act\">$i</span>";
	else 
	{
	    if ($type!="") $page_no .= " <a href='$config[base_url]/my_images/$type$tstr/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
	    else $page_no .= " <a href='$config[base_url]/my_images/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
	}
    }
    if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
    else $link = $lang['myimages_none'];
//    else $link = "<br><br><br><center>There are no videos uploaded!</center><br>";
    if($tpage>1)
    {
	$nextpage=$page+1;
	$prevpage=$page-1;
	
	if ($type!="") $prevlink="<a href='$config[base_url]/my_images/$type$tstr/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
	else $prevlink="<a href='$config[base_url]/my_images/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
	
	if ($type!="") $nextlink="<a href='$config[base_url]/my_images/$type$tstr/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
	else $nextlink="<a href='$config[base_url]/my_images/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
	
	if($page==$tpage) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link;
	elseif($tpage>$page && $page>1) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
	elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
    }

    $sql="SELECT * from files_image where uid='$_SESSION[UID]' $tq $qu limit $startfrom, $listing_per_page";
    $rs = $conn->Execute($sql);
    $vdo = $rs->getrows(); 
    $smarty->assign('link',$link);
    $smarty->assign('page',$page+0);
    $smarty->assign('imgs',$vdo);
    $smarty->assign('start_num',$start_num);
    $smarty->assign('end_num',$end_num);
    $smarty->assign('total',$total);
    
    //my tags                                                                                                                                                                                                  
    $mt="select vtags from files_image where uid='$_SESSION[UID]' $tq $qu limit $startfrom, $listing_per_page";
    $tags=tags($mt);
    $smarty->assign('mytags',$tags);

    $sql="select * from files_image where vkey='$vid' and uid='$_SESSION[UID]'";
    $rs=$conn->execute($sql);
    $catid=explode(",",$rs->fields[vcategs]);
    $smarty->assign('catid',$catid);
    $vd=$rs->getrows();
    $smarty->assign('vd',$vd);
    
    if($_REQUEST[type]=="dy")
    {
	set_btn("bhome"); set_sbtn("myimg");
	$msg = $lang['not_myimage1'];
	$smarty->assign('msg',$msg);
	set_title($lang['title_myfilesconfirm']);
	$smarty->display('main_header.tpl'); $smarty->display('main_myimages.tpl'); $smarty->display('footer.tpl'); exit;
    }
    if($_REQUEST[type]=="dn")
    {
	set_btn("bhome"); set_sbtn("myimg");
	$err = $lang['err_myimage1'];
	$smarty->assign('err',$err);
	set_title($lang['title_myfileserror']);
	$smarty->display('main_header.tpl'); $smarty->display('main_myimages.tpl'); $smarty->display('footer.tpl'); exit;
    }
    
    //actions
    if ($_REQUEST[action]=="delete")
    {
	if ($config[same_title_uploads]=="0")
	{
	$tt=ereg_replace("_{1,}", " ", $_REQUEST[vid]);
	$tq="select vkey from files_image where vtitle='$tt'";
	$rq=$conn->execute($tq);
	$vid=$rq->fields[vkey];
	} else { $vid=$_REQUEST[vid]; }
	
	$list=key_to_info_image($vid);
	$vidid=$list[0];
	
	$conn->execute("delete from history_image where vid='$vidid'");
	$conn->execute("delete from fav_image where vid='$vidid'");
	$conn->execute("delete from request_image_F where vid='$vidid'");
	$conn->execute("delete from request_image_I where vid='$vidid'");
	$conn->execute("delete from comm_img where vid='$vidid'");
	
	if ($config[delete_files]=="0")
	{
//	    $conn->execute("update members set files_video='files_video-1' where uid='$_SESSION[UID]'");
	    $sql="delete from files_image where vkey='$vid' and uid='$_SESSION[UID]'";
	    $res=$conn->execute($sql);
	    if (mysql_affected_rows()>0) 
	    {
		header("Location: $config[base_url]/my_images/confirmation");
		exit;
	    }
	    else
	    {
		$err=$lang['err_myimage1'];
	    }
	}
	if ($config[delete_files]=="1")
	{
	    $msg = delete_img($vidid,$_SESSION[UID]);
	    if ($msg=="yes") 
	    { 
		header("Location: $config[base_url]/my_images/confirmation");
		exit; 
	    }
	    if ($msg=="no") { header("Location: $config[base_url]/my_images/error"); exit; }
	}
	
    }
    if ($_REQUEST[action]=="edit")
    {
	if ($config[same_title_uploads]=="0")
	{
	$tt=ereg_replace("_{1,}", " ", $_REQUEST[vid]);
	$tq="select vkey from files_image where vtitle='$tt'";
	$rq=$conn->execute($tq);
	$vid=$rq->fields[vkey];
	} else { $vid=$_REQUEST[vid]; }
	
	$sql="select * from files_image where vkey='$vid' and uid='$_SESSION[UID]'";
	$rs=$conn->execute($sql);
	$catid=explode(",",$rs->fields[vcategs]);
	$smarty->assign('catid',$catid);
	$vd=$rs->getrows();
	$smarty->assign('vd',$vd);
	set_btn("bhome");
	set_sbtn("myimg");
	$smarty->assign('dmenu', 'mymsg');
	set_title($lang['title_myfilesediti']);
	$smarty->assign('vid',$vid);
	$smarty->display('main_header.tpl');
	$smarty->display('myimage_edit.tpl');
	$smarty->display('footer.tpl');
	exit;
    }
    
    if ($_REQUEST[vsave])
    {
	$vtitle = filter_title($_REQUEST[vtitle]);
	$vdescr = filter_descr($_REQUEST[vdescr]);
	$vtags = filter_title($_REQUEST[vtags]);
	$vcategs = $_REQUEST[categlist];
	$vtype = filter_title($_REQUEST[vpriv]);
        $vcomm = filter_title($_REQUEST[vcomm]);
        $vcommrate = filter_title($_REQUEST[vcommrate]);
        $vresp = filter_title($_REQUEST[vresp]);
        $vrate = filter_title($_REQUEST[vrate]);
        $vemb = filter_title($_REQUEST[vemb]);
        $vbm = filter_title($_REQUEST[vbm]);
        
	$vid = $_REQUEST[vid];
	$smarty->assign('vid',$vid);
	$smarty->assign('vcategs',$vcategs);
	
	if(count($_REQUEST[categlist])<1) $err = $lang['err_myimage2'];
	elseif ( ( $config['multi_categ_max'] != '0' and $config['multi_categ_max'] != '' ) and count ( $vcategs ) > $config['multi_categ_max'] ) $err = $lang['up_errup1'];
	
	if ($vtags=="") $err = $lang['err_myimage3'];
	elseif (strlen($vtags)<$config[fi_tamin] || strlen($vtags)>$config[fi_tamax]) $err = $lang['err_myimage4'];

        if ($vdescr=="") $err = $lang['err_myimage6'];
        elseif (strlen($vdescr)<$config[fi_demin] || strlen($vdescr)>$config[fi_demax]) $err = $lang['err_myimage7'];

        if ($vtitle=="") $err = $lang['err_myimage9'];
        elseif (strlen($vtitle)<$config[fi_timin] || strlen($vtitle)>$config[fi_timax]) $err = $lang['err_myimage10'];

	if ( $config['same_title_uploads'] == '0' ) {
	    $sql="select * from files_image where vtitle='$vtitle' and vkey!='$vid'";
	    $rs=$conn->execute($sql);
	    if($rs->recordcount()>0) $err=$lang['err_upimage2'];
	}
	
	if ($err=="")
	{
	    //$listch=implode(",",$_REQUEST[categlist]);
	    if ( $config['multi_categ_uploads'] != '0' ) { $listch = implode(",",$_REQUEST[categlist]); } else { $listch = $vcategs; }

	    if ( $config['file_comments'] == '1' and isset ( $vcomm ) ) { $fc = "is_comm='$vcomm', "; } else $fc = '';
            if ( $config['comment_rating'] == '1' and isset ( $vcommrate ) ) { $fc.= "is_commrate='$vcommrate', "; } else $fc.= '';
            if ( $config['file_responses'] == '1' and isset ( $vresp ) ) { $fc.= "is_fileresp='$vresp', "; } else $fc.= '';
            if ( $config['file_ratings'] == '1' and isset ( $vrate ) ) { $fc.= "is_rated='$vrate', "; } else $fc.= '';
            if ( $config['file_embed'] == '1' and isset ( $vemb ) ) { $fc.= "is_embed='$vemb', "; } else $fc.= '';
            if ( $config['file_bookmark'] == '1' and isset ( $vbm ) ) { $fc.= "is_bm='$vbm', "; } else $fc.= '';
            
	    $sql = "update files_image set $fc vtitle='$vtitle', vdescr='$vdescr', vtags='$vtags', vcategs='0,$listch,0', vtype='$vtype' where vkey='$vid' and uid='$_SESSION[UID]'";
	    $mrs=$conn->execute($sql);
	    $msg = $lang['not_myimage2'];
	    $smarty->assign('msg',$msg);

	    // paging begins
	    $listing_per_page = $config[paging_myimages];
	    if($_REQUEST[page]=="") $page = 1;
	    else $page = $_REQUEST[page];
	    $sql = "SELECT count(*) as total from files_image where uid='$_SESSION[UID]'";
	    $ars = $conn->Execute($sql);
	    $total = $ars->fields['total'];
	    $grandtotal = $total;
	    $tpage = ceil($total/$listing_per_page);
	    if($tpage==0) $spage=$tpage+1;
	    else $spage = $tpage;
	    $startfrom = ($page-1)*$listing_per_page;

	    $sql="select * from files_image WHERE uid='$_SESSION[UID]' limit $startfrom, $listing_per_page";
	    $rs=$conn->execute($sql);
	    if($rs->recordcount()>0)$vdo = $rs->getrows();
	    $start_num=$startfrom+1;
	    $end_num=$startfrom+$rs->recordcount();

	    $page_no = "";
	    for($i=1; $i<=$tpage; $i++)
	    {
		if($i==$page) $page_no .= "<span class=\"pag_act\">$i</span>";
		else $page_no .= " <a href='$config[base_url]/my_images/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
	    }
	    if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
	    else $link = $lang['myimages_none'];

	    if($tpage>1)
	    {
		$nextpage=$page+1;
		$prevpage=$page-1;
		$prevlink="<a href='$config[base_url]/my_images/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
		$nextlink="<a href='$config[base_url]/my_images/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
		if($page==$tpage) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link;
		elseif($tpage>$page && $page>1) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
		elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
	    }

	    $sql="SELECT * from files_image where uid='$_SESSION[UID]' order by vtitle limit $startfrom, $listing_per_page";
	    $rs = $conn->Execute($sql);
	    $vdo = $rs->getrows();
	    $smarty->assign('link',$link);
	    $smarty->assign('page',$page+0);
	    $smarty->assign('imgs',$vdo);
	    $smarty->assign('start_num',$start_num);
	    $smarty->assign('end_num',$end_num);
	    $smarty->assign('total',$total);
	    $config[section]="image";
	    set_btn("bhome");
	    set_sbtn("myimg");
	    $smarty->assign('err',$err);
	    set_title($lang['title_myfilesimage']);
	    $smarty->display('main_header.tpl');
	    $smarty->display('main_myimages.tpl');
	    $smarty->display('footer.tpl');
	    exit;
	}
    
	set_btn("bhome");
	set_sbtn("myimg");
	set_title($lang['title_myfilesediti']);
	$smarty->assign('err',$err);
	$smarty->display('main_header.tpl');
	$smarty->display('myimage_edit.tpl');
	$smarty->display('footer.tpl');
	exit;
    }
//quicklist count
$vt = $conn->execute("select count(*) as vtotal from quicklist_video where uid='".$_SESSION['UID']."';");
$it = $conn->execute("select count(*) as itotal from quicklist_image where uid='".$_SESSION['UID']."';");
$at = $conn->execute("select count(*) as atotal from quicklist_audio where uid='".$_SESSION['UID']."';");
$vtotal = $vt->fields['vtotal'];
$itotal = $it->fields['itotal'];
$atotal = $at->fields['atotal'];
$qtotal = $vtotal + $itotal + $atotal;
$smarty->assign('qtotal', $qtotal); $smarty->assign('atotal', $atotal); $smarty->assign('itotal', $itotal); $smarty->assign('vtotal', $vtotal);
    $config[section]="image";
    set_btn("bhome");
    set_sbtn("myimg");
    set_title($lang['title_myfilesimage']);
    $smarty->assign('err',$err);
    $smarty->assign('msg',$msg);
    $smarty->display('main_header.tpl');
    $smarty->display('main_myimages.tpl');
    $smarty->display('footer.tpl');
?>