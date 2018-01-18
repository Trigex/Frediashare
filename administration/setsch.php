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
//$_REQUEST = array_map('filter_descr', $_REQUEST);
if ( isset ( $_GET['v'] ) ) $_GET['v'] = filter_descr ( $_GET['v'] );
if ( isset ( $_REQUEST['f'] ) ) $_REQUEST['f'] = filter_descr ( $_REQUEST['f'] );
if ( isset ( $_REQUEST['blocked'] ) ) $_REQUEST['blocked'] = filter_descr ( $_REQUEST['blocked'] );

if($_GET['v']=="viewmode")
{
    if($_SESSION[viewmode]=="list") $_SESSION[viewmode]="grid";
    elseif($_SESSION[viewmode]=="grid") $_SESSION[viewmode]="list";
    exit;
} 
elseif($_GET['v']=="videotags")
{
    if($_SESSION[videotags]=="off") $_SESSION[videotags]="on";
    elseif($_SESSION[videotags]=="on") $_SESSION[videotags]="off";
    exit;
} 
elseif($_GET['v']=="imagetags")
{
    if($_SESSION[imagetags]=="off") $_SESSION[imagetags]="on";
    elseif($_SESSION[imagetags]=="on") $_SESSION[imagetags]="off";
    exit;
} 
elseif($_GET['v']=="audiotags")
{
    if($_SESSION[audiotags]=="off") $_SESSION[audiotags]="on";
    elseif($_SESSION[audiotags]=="on") $_SESSION[audiotags]="off";
    exit;
} 
elseif($_GET['v']=="mytags")
{
    if($_SESSION[mytags]=="off") $_SESSION[mytags]="on";
    elseif($_SESSION[mytags]=="on") $_SESSION[mytags]="off";
    exit;
}
elseif($_GET['v']=="block")
{
    $cd = '<a href="javascript:void(0)" onclick="HideContent(\'frmsgdiv'.time().'\');">'.$lang['plist_txt54'].'</a>';
    if ( isset ( $_GET['uid'] ) ) $mid=filter_title($_GET['uid']); else $mid=filter_title($_REQUEST['blocked']);
    if ($mid==$_SESSION[UID]) { $err = $lang['uch_shtxt9']; }
    if ( $err == '' ) {
    $bn=$conn->execute("select username from members where uid='$mid'");
    if ($bn->recordcount()==0) { exit; }
    $bname=$bn->fields[username];
    $sql_up="update blocked_users set active='1' where blocker_uid='$_SESSION[UID]' and blocked_uid='$mid'";
    $sql_add="insert into blocked_users set blocker_uid='$_SESSION[UID]', blocker_name='$_SESSION[USERNAME]', blocked_uid='$mid', blocked_name='$bname', active='1'";
    $res_up=$conn->execute($sql_up);
    if($conn->Affected_Rows()==0) { $res_add=$conn->execute($sql_add); }
    if($conn->Affected_Rows()==0) $err=$lang['err_msgcompose16'];
    else $msg=$lang['not_inboxblock1'];
    }
//    $errtbl = "<div id=\"frmsgdiv".time()."\" style=\"display: block;\"><table cellpadding=0 cellspacing=0 width=\"100%\" border=0><tr><td><center><font color=red><b>$err</b></font></center></td><td>".$cd."</td></tr></table></div>";
//    $msgtbl = "<div id=\"frmsgdiv".time()."\" style=\"display: block;\"><table cellpadding=0 cellspacing=0 width=\"100%\" border=0><tr><td><center><font color=green><b>$msg</b></font></center></td><td>".$cd."</td></tr></table></div>";
    if($err!="") { echo show_err ( $err ); exit; }
    if($msg!="") { echo show_msg ( $msg ); exit; }
    exit;
}
elseif($_GET['v']=="unblock")
{
    $cd = '<a href="javascript:void(0)" onclick="HideContent(\'frmsgdiv'.time().'\');">'.$lang['plist_txt54'].'</a>';
    if ( isset ( $_GET['uid'] ) ) $mid=filter_title($_GET['uid']); else $mid=filter_title($_REQUEST['blocked']);
    if ($mid==$_SESSION[UID]) { $err = $lang['uch_shtxt9']; }
    if ( $err == '' ) {    
    $sql_un="update blocked_users set active='0' where blocker_uid='$_SESSION[UID]' and blocked_uid='$mid'";
    $res_un=$conn->execute($sql_un);
    if($conn->Affected_Rows()==0) $err=$lang['err_msgcompose17'];
    else $msg=$lang['not_inboxblock2'];
    }
//    $errtbl = "<div id=\"frmsgdiv".time()."\" style=\"display: block;\"><table cellpadding=0 cellspacing=0 width=\"100%\" border=0><tr><td><center><font color=red><b>$err</b></font></center></td><td>".$cd."</td></tr></table></div>";
//    $msgtbl = "<div id=\"frmsgdiv".time()."\" style=\"display: block;\"><table cellpadding=0 cellspacing=0 width=\"100%\" border=0><tr><td><center><font color=green><b>$msg</b></font></center></td><td>".$cd."</td></tr></table></div>";

//    if($err!="") { echo $errtbl; }
//    if($msg!="") { echo $msgtbl; }
    if($err!="") { echo show_err ( $err ); exit; }
    if($msg!="") { echo show_msg ( $msg ); exit; }
    exit;
}
elseif($_GET['v']=="commrate")
{
    $comid = filter_descr($_REQUEST['comid']);
    $vidid = filter_descr($_REQUEST['vidid']);
    $type = filter_descr($_REQUEST['type']);
    $c = filter_descr($_REQUEST['c']);
    
    $rst=$conn->execute("select SUM(total) as total from comm_rates where (comid='$comid') and (vid='$vidid') and (uid='$_SESSION[UID]') and (type='$type');");
    
    if ($rst->recordcount() > 0) 
    {
	$total=$rst->fields[total];
	if ($total > 0 && $c == 'up') $thetotal = $total + 1;
	elseif ($total < 0 && $c == 'down') $thetotal = $total - 1;
	else { if ($c == 'up') $thetotal = '1'; elseif ($c == 'down') $thetotal = '-1'; }
    } else { if ($c == 'up') $thetotal = '1'; elseif ($c == 'down') $thetotal = '-1'; }
    
    if ($type == 'audio') { $tbl = 'comm_audio'; $active = ''; }
    elseif ($type == 'image') { $tbl = 'comm_img'; $active = ''; }
    elseif ($type == 'video') { $tbl = 'comm_vid'; $active = ''; }
    elseif ($type == 'profile') { $tbl = 'comm_profile'; $vidid = '0'; $active = 'and active=\'1\''; }
    
    $cc=$conn->execute("select comid from $tbl where comid='$comid' $active;");
    if ($cc->recordcount() > 0) 
    { $conn->execute("insert into comm_rates set comid='$comid', uid='$_SESSION[UID]', vid='$vidid', type='$type', total='$thetotal'"); }
    
    if ($conn->Affected_Rows()>0)
    {
        $rst=$conn->execute("select SUM(total) as ctotal from comm_rates where (comid='$comid') and (vid='$vidid') and (type='$type');");
        $total=$rst->fields[ctotal];
        if ($total > 0) echo "(<span class=green>+$total</span>)";
        elseif ($total < 0) echo "(<span class=red>$total</span>)";
        else echo "(0)";
        exit;
    }
    else
    {
        $rst=$conn->execute("select SUM(total) as ctotal from comm_rates where (comid='$comid') and (vid='$vidid') and (type='$type');");
        $total=$rst->fields[ctotal];
        if ($total > 0) echo "(<span class=green>+$total</span>)";
        elseif ($total < 0) echo "(<span class=red>$total</span>)";
        else echo "(0)";
        exit;
    }
}
elseif($_GET['v']=="defmsg")
{
    $msg = filter_descr($_REQUEST['def_msg']);
    if ($msg != $config['def_ban_msg'])
    {
	$conn->execute("update configurations set value='$msg' where configurations.option='def_ban_msg'");
	if ($conn->Affected_Rows() > 0) 
	{ 
	    $conn->execute("update banned_users set ban_msg='$msg' where ban_msg='$config[def_ban_msg]'");
	    echo show_msg ( $lang['admnot_setpagsave'] ); exit; 
	}
	else { echo show_err ( $lang['admerr_pag2'] ); exit; }
    }
}
elseif($_GET['v']=="defurl")
{
    $url = filter_descr($_REQUEST['def_url']);
    if ($url != $config['def_ban_link'])
    {
	$conn->execute("update configurations set value='$url' where configurations.option='def_ban_link'");
	if ($conn->Affected_Rows() > 0) 
	{ 
	    $conn->execute("update banned_users set ban_url='$url' where ban_url='$config[def_ban_link]'");
	    echo show_msg ( $lang['admnot_setpagsave'] ); exit; 
	}
	else { echo show_err ( $lang['admerr_pag2'] ); exit; }
    }
}
elseif($_GET['v']=="editdefmsg")
{
    $bid = filter_title($_REQUEST['id']);
    $msg = filter_descr($_REQUEST['nmsg'.$bid]);
    
    $conn->execute("update banned_users set ban_msg='$msg' where bid='$bid'");
    if ($conn->Affected_Rows() > 0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
}
elseif($_GET['v']=="editdefurl")
{
    $bid = filter_title($_REQUEST['id']);
    $url = filter_descr($_REQUEST['nurl'.$bid]);
    
    $conn->execute("update banned_users set ban_url='$url' where bid='$bid'");
    if ($conn->Affected_Rows() > 0) { echo show_msg ( $lang['admnot_setpagsave'] ); exit; }
}
elseif($_GET['v']=="lblock")
{
    $f = filter_descr ( $_GET[f] );
    $conn->execute("update members set $f='yes' where uid='$_SESSION[UID]';");
    exit;
}
elseif($_GET['v']=="lunblock")
{
    $f = filter_descr ( $_GET[f] );
    $conn->execute("update members set $f='no' where uid='$_SESSION[UID]';");
    exit;
}
elseif($_GET['v']=="pagenumon") {
    $_SESSION['pagenumbering'] = 'on';
    exit;
} elseif($_GET['v']=="pagenumoff") {
    $_SESSION['pagenumbering'] = 'off';
    exit;
}
elseif($_GET['v']=="startplay") {
    $sw = filter_title ( $_GET['sw'] );
    $type = filter_title ( $_GET['type'] );
    $plk = filter_title ( $_GET['plk'] );
    if ( $type == 'ql' ) {
        if ( $sw == 'off' ) { $_SESSION['ql_autoplay'] = '0'; }
        elseif ( $sw == 'on' ) { $_SESSION['ql_autoplay'] = '1'; $_SESSION['pl_autoplay'] = '0'; $_SESSION['plk'] = ''; }

    } elseif ( $type == 'pl' ) {
        if ( $sw == 'off' ) { $_SESSION['pl_autoplay'] = '0'; }
        elseif ( $sw == 'on' ) { $_SESSION['pl_autoplay'] = '1'; $_SESSION['ql_autoplay'] = '0'; $_SESSION['plk'] = $plk; }
    }
    exit;
}
else
{
    check_admin_login();
    $sch=filter_title($_REQUEST[schar]);
    if ($sch!="") $sq1="update configurations set value='1' where configurations.option='special_characters'";
    else $sq1="update configurations set value='0' where configurations.option='special_characters'";
    $conn->execute($sq1);
}
?>