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
check_login('my_friends');

if (isset($_REQUEST['action'])) $_REQUEST['action']=filter_title($_REQUEST['action']); 
if (isset($_REQUEST['page'])) $_REQUEST['page']=filter_title($_REQUEST['page']); 
if (isset($_REQUEST['fid'])) $_REQUEST['fid']=filter_title($_REQUEST['fid']); 
if (isset($_REQUEST['cancel'])) $_REQUEST['cancel']=filter_title($_REQUEST['cancel']); 
if (isset($_REQUEST['submit'])) $_REQUEST['submit']=filter_title($_REQUEST['submit']); 
if (isset($_REQUEST['fname'])) $_REQUEST['fname']=filter_title($_REQUEST['fname']); 
if (isset($_REQUEST['goact'])) $_REQUEST['goact']=filter_title($_REQUEST['goact']);
if (isset($_REQUEST['actions'])) $_REQUEST['actions']=filter_title($_REQUEST['actions']);

//if(isset($_REQUEST[action])) { if ($_REQUEST[action]!="disable" && $_REQUEST[action]!="enable" && $_REQUEST[action]!="delete" && $_REQUEST[action]!="invite") { illegal_op(); } }
$smarty->assign('dmenu', 'mymsg');
function get_fname($x)
{
    global $conn, $config;
    $sql="select username from members where uid='$x'";
    $rs=$conn->execute($sql);
    $fid=$rs->fields[username];
    return $fid;
}

$type=filter_title($_REQUEST[filter]);
$cmd="order by v.uid";
if ($type=="audio_files") $cmd="order by v.files_audio desc";
if ($type=="images_files") $cmd="order by v.files_image desc";
if ($type=="video_files") $cmd="order by v.files_video desc";
if ($type=="last_joined") $cmd="order by v.reg_on desc";
if ($type=="last_login") $cmd="order by v.last_login desc";
if ($type=="online") $cmd="and v.is_logged='1' order by v.uid";
if ($type=="offline") $cmd="and v.is_logged='0' order by v.uid";

if ($_REQUEST[goact]!="" && $err=="")
{
    if ($_REQUEST['mid']=="") $err=$lang['err_msgcompose14']; //nohing selected
    elseif ($_REQUEST[actions]==$lang['inbox_acts']) $err=$lang['err_msgcompose15']; //no actions selected
    if ($err=="")
    {
	if ($_REQUEST[actions]==$lang['act_frenable']) //enable selected
	{
	    foreach($_REQUEST['mid'] as $value) { $conn->execute("update friends set is_active='1' where fname='".filter_title($value)."' and uid='$_SESSION[UID]' and is_active='0'"); }
	}
	if ($_REQUEST[actions]==$lang['act_frdisable']) //disable selected
	{
	    foreach($_REQUEST['mid'] as $value) { $conn->execute("update friends set is_active='0' where fname='".filter_title($value)."' and uid='$_SESSION[UID]' and is_active='1'"); }
	}
	if ($_REQUEST[actions]==$lang['admact_memmsg']) //message selected
	{
	    header("Location: $config[base_url]/compose/selected");
	    session_register($_SESSION['mid']); $_SESSION['mid']=$_REQUEST['mid'];
	}
	if ($_REQUEST[actions]==$lang['act_rateenable'] && $config[file_ratings]=="1") //enable rating
	{
	    foreach($_REQUEST['mid'] as $value) { $conn->execute("update friends set can_rate='1' where fname='".filter_title($value)."' and uid='$_SESSION[UID]' and can_rate='0'"); }
	}
	if ($_REQUEST[actions]==$lang['act_ratedisable'] && $config[file_ratings]=="1") //disable rating
	{
	    foreach($_REQUEST['mid'] as $value) { $conn->execute("update friends set can_rate='0' where fname='".filter_title($value)."' and uid='$_SESSION[UID]' and can_rate='1'"); }
	}
	if ($_REQUEST[actions]==$lang['act_comenable'] && $config[file_comments]=="1") //enable comments
	{
	    foreach($_REQUEST['mid'] as $value) { $conn->execute("update friends set can_comment='1' where fname='".filter_title($value)."' and uid='$_SESSION[UID]' and can_comment='0'"); }
	}
	if ($_REQUEST[actions]==$lang['act_comdisable'] && $config[file_comments]=="1") //disable comments
	{
	    foreach($_REQUEST['mid'] as $value) { $conn->execute("update friends set can_comment='0' where fname='".filter_title($value)."' and uid='$_SESSION[UID]' and can_comment='1'"); }
	}
	if ($_REQUEST[actions]==$lang['inbox_itblact6'] && $config[file_comments]=="1") //remove selected
	{
	    foreach($_REQUEST['mid'] as $value) { $conn->execute("delete from friends where fname='".filter_title($value)."' and uid='$_SESSION[UID]'"); }
	}
	if ($_REQUEST[actions]==$lang['blocked_act4']) //block selected
        {
            foreach($_REQUEST['mid'] as $value) {
                if ( $value != $_SESSION['USERNAME'] ) {
                    $conn->execute("update blocked_users set active='1' where (blocker_uid='$_SESSION[UID]') and (blocked_name='".filter_title($value)."') and (active='0')");
                    if ($conn->Affected_Rows()<1) {
                        $bu = $conn->execute("select uid from members where username='$value';");
                        $buid = $bu->fields['uid'];
                        $conn->execute("insert into blocked_users set blocker_uid='$_SESSION[UID]', blocker_name='$_SESSION[USERNAME]', blocked_uid='$buid', blocked_name='$value', active='1'");
                    }
                }
            }
        }
        if ($_REQUEST[actions]==$lang['blocked_act5']) //unblock selected
        {
            foreach($_REQUEST['mid'] as $value) { if ( $value != $_SESSION['USERNAME'] ) $conn->execute("update blocked_users set active='0' where (blocker_uid='$_SESSION[UID]') and (blocked_name='".filter_title($value)."') and (active='1')"); }
        }
    }
    if ($conn->Affected_Rows()>0 && $err=="") $msg=$lang['not_inboxmsgmark']; 
}

if ($_REQUEST[action]=="enable")
{
    if ($config[special_characters]=="0") { $fid=$_REQUEST[fname]; } else { $fid=get_fname($_REQUEST[fname]); }
    $sql="update friends set is_active='1' where fname='$fid' and uid='$_SESSION[UID]'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()==0) { illegal_op(); }
    header("Location:$config[base_url]/my_friends");
    exit;
}
if ($_REQUEST[action]=="disable")
{ 
    //$fid=$_REQUEST[fname];
    if ($config[special_characters]=="0") { $fid=$_REQUEST[fname]; } else { $fid=get_fname($_REQUEST[fname]); }
    $sql="update friends set is_active='0' where fname='$fid' and uid='$_SESSION[UID]'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()==0) { illegal_op(); }
    header("Location:$config[base_url]/my_friends");
    exit;
}
if ($_REQUEST[action]=="er" && $config[file_ratings]=="1")
{
    //$fid=$_REQUEST[fname];
    if ($config[special_characters]=="0") { $fid=$_REQUEST[fname]; } else { $fid=get_fname($_REQUEST[fname]); }
    $sql="update friends set can_rate='1' where fname='$fid' and uid='$_SESSION[UID]'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()==0) { illegal_op(); }
    header("Location:$config[base_url]/my_friends");
    exit;
}
if ($_REQUEST[action]=="dr" && $config[file_ratings]=="1")
{
    //$fid=$_REQUEST[fname];
    if ($config[special_characters]=="0") { $fid=$_REQUEST[fname]; } else { $fid=get_fname($_REQUEST[fname]); }
    $sql="update friends set can_rate='0' where fname='$fid' and uid='$_SESSION[UID]'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()==0) { illegal_op(); }
    header("Location:$config[base_url]/my_friends");
    exit;
}
if ($_REQUEST[action]=="ec" && $config[file_comments]=="1")
{
    //$fid=$_REQUEST[fname];
    if ($config[special_characters]=="0") { $fid=$_REQUEST[fname]; } else { $fid=get_fname($_REQUEST[fname]); }
    $sql="update friends set can_comment='1' where fname='$fid' and uid='$_SESSION[UID]'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()==0) { illegal_op(); }
    header("Location:$config[base_url]/my_friends");
    exit;
}
if ($_REQUEST[action]=="dc" && $config[file_comments]=="1")
{
    //$fid=$_REQUEST[fname];
    if ($config[special_characters]=="0") { $fid=$_REQUEST[fname]; } else { $fid=get_fname($_REQUEST[fname]); }
    $sql="update friends set can_comment='0' where fname='$fid' and uid='$_SESSION[UID]'";
    $res=mysql_query($sql);
    if (mysql_affected_rows()==0) { illegal_op(); }
    header("Location:$config[base_url]/my_friends");
    exit;
}
if ($_REQUEST[action]=="delete")
{
    //$fid=$_REQUEST[fname];
    if ($config[special_characters]=="0") { $fid=$_REQUEST[fname]; } else { $fid=get_fname($_REQUEST[fname]); }
    $sql="delete from friends where fname='$fid' and uid='$_SESSION[UID]'";
    $res=mysql_query($sql);
    if(mysql_affected_rows()>0) $msg=$lang['myfr_notdelmsg'];
    else $err=$lang['myfr_errdelmsg'];
//    if (mysql_affected_rows()==0) { illegal_op(); }
    //header("Location:$config[base_url]/my_friends");
    //exit;
}
if ($_REQUEST[cancel]!="")
{
    header("Location: $config[base_url]/my_friends");
    exit;
}

if ($_REQUEST[action]=="invite")
{
    $act="invite";
    $smarty->assign('act',$act);
    $rnd=strtoupper(substr(md5(rand(1,99999999)),7,7));
    $smarty->assign('code',$rnd);

    if ($_REQUEST[submit]!="")
    {

	$rnd=strtoupper(substr(md5(rand(1,99999999)),7,7));
	$smarty->assign('code',$rnd);

        $to=$_REQUEST[fmail];
        $fname=filter_title($_REQUEST[fname]);
	$smarty->assign('fname',$fname);
        $from=$_REQUEST[mymail];
        $name=filter_title($_REQUEST[myname]);
        $smarty->assign('name',$name);
    
    	$rs = $conn->execute("select * from email_files where email_id='invite_email'");
	$subj = $rs->fields[email_subject];
	$subj = str_replace('$name',$name,$subj);
	$subj = str_replace('$config[site_name]',$config[site_name],$subj);
        $email_path = $rs->fields['email_path'];
        $body=$smarty->fetch($email_path);
	$body = str_replace('$smarty.session.NAME','{$smarty.session.NAME}',$body);
	
        if ($to=="") $err=$lang['err_myfr1'];
        elseif ($fname=="") $err=$lang['err_myfr2'];
        elseif ($from=="") $err=$lang['err_myfr3'];
        elseif ($name=="") $err=$lang['err_myfr4'];
        elseif(!check_email_address($to)) $err=$lang['err_myfr5'];
        elseif(!check_email_address($from)) $err=$lang['err_myfr5'];
        elseif(check_field_exists($to,'femail','friends')==1) $err=$lang['err_myfr6'];
        elseif(check_field_exists($to,'email','members')==1) $err=$lang['err_myfr6'];
        elseif(check_field_exists($fname,'fname','friends')==1) $err=$lang['err_myfr6'];
    
        if ($err=="")
        {
	    if (mailto($to,$name,$from,$subj,$body)=="")
	    {
		$sql="insert into friends set uid='$_SESSION[UID]', fname='$fname', femail='$to', add_date='".date("Y-m-d H:i:s")."', code='$rnd'";
    		$conn->execute($sql);
		if (mysql_affected_rows()>0)
		{
			$msg=$lang['not_myfrinvite'];
		}
	    }
	}
    }

    $rs1 = $conn->execute("select * from email_files where email_id='invite_email'");
    $email_path = $rs1->fields['email_path'];
    $message=$smarty->fetch($email_path);
    $smarty->assign('message',$message);
    
    set_btn("bhome"); set_sbtn("friends"); set_title($lang['title_myfrinvite']);
    $smarty->assign('err',$err);
    $smarty->assign('msg',$msg);
    $smarty->display('main_header.tpl');
    $smarty->display('main_myfriends.tpl');
    $smarty->display('footer.tpl');
    exit;
}

// paging
$listing_per_page = $config[paging_myfri];
if($_REQUEST[page]=="")
$page = 1;
else
$page = $_REQUEST[page];
$tsql="select s.*,v.* from members v, friends s where v.is_active='1' and s.fname=v.username and s.uid='$_SESSION[UID]' $cmd";
$trs = $conn->Execute($tsql);
$tfriends = $trs->getrows();
$total=count($tfriends);
$grandtotal = $total;
$tpage = ceil($total/$listing_per_page);
if($tpage==0) $spage=$tpage+1;
else $spage = $tpage;
$startfrom = ($page-1)*$listing_per_page;
$smarty->assign('tpage',$tpage);
$page_no = "";
for($i=1; $i<=$tpage; $i++)
{
    if($i==$page) $page_no .= "<span class=\"pag_act\">$i</span>";
    else 
    {
	if($type!="") $page_no .= " <a href='$config[base_url]/my_friends/$type/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
	else $page_no .= " <a href='$config[base_url]/my_friends/page$i'><span class=\"pag\" id=\"pg$i\">".$i."</span></a> ";
    }
}
if($page_no!="") $link = "$lang[gen_page] $page_no $lang[gen_pageof]";
else $link=$lang['myfr_none'];

if($tpage>1)
{
    $nextpage=$page+1;
    $prevpage=$page-1;
    if($type!="") $prevlink="<a href='$config[base_url]/my_friends/$type/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    else $prevlink="<a href='$config[base_url]/my_friends/page$prevpage'><span class=\"pag_prev\">$lang[gen_pageprev]</span></a>";
    
    if($type!="") $nextlink="<a href='$config[base_url]/my_friends/$type/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    else $nextlink="<a href='$config[base_url]/my_friends/page$nextpage'><span class=\"pag_prev\">$lang[gen_pagenext]</span></a>";
    
    if($page==$tpage) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link;
    elseif($tpage>$page && $page>1) $link="$prevlink&nbsp;&nbsp;&nbsp;".$link."&nbsp;&nbsp;&nbsp;$nextlink";
    elseif($tpage>$page && $page<=1) $link.="&nbsp;&nbsp;&nbsp;$nextlink";
}

$sql="select s.*,v.* from members v, friends s where v.is_active='1' and s.fname=v.username and s.uid='$_SESSION[UID]' $cmd limit $startfrom, $listing_per_page";
$rs = $conn->Execute($sql);
$friends = $rs->getrows();

$smarty->assign('link',$link);
$smarty->assign('page',$page+0);
$smarty->assign('res',$friends);
$smarty->assign('start_num',$startfrom+1);
$smarty->assign('end_num',$startfrom+$rs->recordcount());
$smarty->assign('total',$grandtotal);

set_btn("bhome"); set_sbtn("friends"); set_title($lang['title_myfriends']);
$smarty->assign('err',$err);
$smarty->assign('msg',$msg);
$smarty->display('main_header.tpl');
$smarty->display('main_myfriends.tpl');
$smarty->display('footer.tpl');
?>