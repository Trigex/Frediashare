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

if (isset($_GET['user'])) { $_GET['user']=filter_title($_GET['user']); $user = filter_title ( $_GET['user'] ); }
if (isset($_GET['c'])) $c=filter_title($_GET['c']);

if ( filter_descr ( $_POST['mem_uploads'] ) == $lang['adm_memallup'] ) { $conn->execute("update members set can_upload='1' where uid='$user';"); if ( $conn->Affected_Rows() > 0 ) $msg = $lang['admnot_setoptions1']; } //all uploads
elseif ( filter_descr ( $_POST['mem_uploads'] ) == $lang['adm_memnoup'] ) { $conn->execute("update members set can_upload='0' where uid='$user';"); if ( $conn->Affected_Rows() > 0 ) $msg = $lang['admnot_setoptions1']; } //no uploads
elseif ( filter_descr ( $_POST['mem_active'] ) == $lang['adm_memunsuspend'] ) { $conn->execute("update members set is_active='1' where uid='$user';"); if ( $conn->Affected_Rows() > 0 ) $msg = $lang['admnot_setoptions1']; } //unsuspend
elseif ( filter_descr ( $_POST['mem_active'] ) == $lang['adm_memsuspend'] ) { $conn->execute("update members set is_active='0' where uid='$user';"); if ( $conn->Affected_Rows() > 0 ) $msg = $lang['admnot_setoptions1']; } //suspend
elseif ( filter_descr ( $_POST['mem_ban'] ) == $lang['adm_memact4'] ) { //ban
    $def_msg = $config['def_ban_msg'];
    $def_lnk = $config['def_ban_link'];

    $rsm=$conn->execute("select username from members where uid='$user'");
    $name=$rsm->fields['username'];

    $conn->execute("update banned_users set active='1' where ban_uid='$user' and active='0';");
    if ( $conn->Affected_Rows() > 0 ) $msg = $lang['admnot_setoptions1'];
    if ($conn->Affected_Rows() < 1) {
        $conn->execute("insert into banned_users set ban_uid='$user', ban_name='$name', ban_msg='$def_msg', ban_url='$def_lnk', active='1';");
        if ( $conn->Affected_Rows() > 0 ) $msg = $lang['admnot_setoptions1'];
    }
} elseif ( filter_descr ( $_POST['mem_ban'] ) == $lang['adm_memact5'] ) { //unban
    $rsm=$conn->execute("select username from members where uid='$user';");
    $name=$rsm->fields['username'];

    $conn->execute("update banned_users set active='0' where ban_uid='$user' and active='1';");
    if ( $conn->Affected_Rows() > 0 ) $msg = $lang['admnot_setoptions1'];
} elseif ( filter_descr ( $_POST['mem_del'] ) == $lang['adm_memact3'] ) { //delete
    if ( delete_member ( $user ) == 'yes' ) $msg = $lang['admnot_setoptions1'];
    else $err = $lang['adm_errmem1'];
    if ( $msg != '' ) { header("Location: $config[admin_url]/members/registered"); exit; }
}

if ( $c == '1' ) {
    $t = filter_title ( $_GET['type'] );
    if ( $t == 'chinfo' ) { //channel info
	$ch_uid = filter_title ( $_POST['chinfo_uid'] );
        $ch_title = filter_descr ( $_POST['ch_title'] );
        $ch_desc = filter_descr ( $_POST['ch_desc'] );
        $ch_tags = filter_descr ( $_POST['ch_tags'] );
        $ch_comm = filter_title ( $_POST['ch_comm'] );
        $ch_comm_who = filter_title ( $_POST['ch_comm_who'] );
        $ch_commrate = filter_title ( $_POST['ch_commrate'] );
	$ch_type = filter_title ( $_POST['ch_type'] );
	
	$r = $conn->execute("select ch_type from members where uid='$ch_uid';");
	$my_ch_type = $r->fields['ch_type'];
	
	if ( $ch_type != $my_ch_type ) {
	    delete_performer_info( $ch_uid );
	    $conn->execute("update member_info set p_type='$ch_type' where p_uid='$ch_uid';");
	    $rel_msg = $lang['adm_chtypemsg1'].'<a href="javascript:void(0)" onclick="window.location.reload();">'.$lang['qlist_txt17'].'</a>'.$lang['adm_chtypemsg2'];
	}
	if ( $config['profile_comments'] == '1' ) { $pr_q = "ch_comm='$ch_comm', ch_comm_who='$ch_comm_who', ch_commrate='$ch_commrate',"; } else $pr_q = '';
	
	$conn->execute("update members set ch_title='$ch_title', ch_desc='$ch_desc', ch_tags='$ch_tags', $pr_q ch_type='$ch_type' where uid='$ch_uid';");
	if ( mysql_affected_rows() > 0 ) { echo show_msg ( $lang['admnot_setoptions1'].$rel_msg ); }
	exit;
    } elseif ( $t == 'chperf' ) { //performer info
	$ch_uid = filter_title ( $_POST['chperf_uid'] );
	$ch_type = filter_descr ( $_POST['ch_type'] );
	if ( $ch_type == '2' or $ch_type == '4' or $ch_type == '5' or $ch_type == '6' ) {
            $p_about = filter_descr ( $_POST['fabout'] );
            $p_style = filter_descr ( $_POST['fstyle'] );
            $p_infl = filter_descr ( $_POST['finfl'] );
            $p_sim = filter_descr ( $_POST['fsim'] );
	} elseif ( $ch_type == '3' ) {
            $p_about = filter_descr ( $_POST['fabout'] );
            $p_style = filter_descr ( $_POST['fstyle'] );
            $p_bandmem = filter_descr ( $_POST['fbandmem'] );
            //$p_formdate = filter_descr ( $_POST['ffdate'] );
            $p_reclabel = filter_descr ( $_POST['freclabel'] );
            $p_labeltype = filter_descr ( $_POST['flabeltype'] );
            $p_infl = filter_descr ( $_POST['finfl'] );
            $p_like = filter_descr ( $_POST['flike'] );
            $p_cover1 = filter_descr ( $_POST['fcover1'] );
            $p_link1 = filter_descr ( $_POST['flink1'] );
            $p_cover2 = filter_descr ( $_POST['fcover2'] );
            $p_link2 = filter_descr ( $_POST['flink2'] );
            $p_cover3 = filter_descr ( $_POST['fcover3'] );
            $p_link3 = filter_descr ( $_POST['flink3'] );
            if ( $config['date_selection'] == 'css' ) $p_formdate = filter_descr ( $_POST['ffdate'] );
    	    else {
        	$bd_m = filter_descr ( $_POST['pi_Month'] );
        	$bd_d = filter_descr ( $_POST['pi_Day'] );
        	$bd_y = filter_descr ( $_POST['pi_Year'] );
        	$p_formdate = $bd_y.'-'.$bd_m.'-'.$bd_d;
    	    }

            
            if ( $p_cover1 != '' ) {
                if ( substr ( $p_cover1, 0, 7 ) != 'http://' and substr ( $p_cover1, 0, 8 ) != 'https://' ) $p_cover1 = 'http://'.$p_cover1;
                if ( substr ( $p_cover1, -4 ) != '.jpg' and substr ( $p_cover1, -5 ) != '.jpeg' and substr ( $p_cover1, -4 ) != '.gif' and substr ( $p_cover1, -4 ) != '.png' ) $err = $lang['err_coverurl'];
                if ( ( stripos ( $p_cover1, 'javascript' ) !== false ) or ( stripos ( $p_cover1, '.php' ) !== false ) or ( stripos ( $p_cover1, '.html' ) !== false ) or ( stripos ( $p_cover1, '.asp' ) !== false) or ( stripos ( $p_cover1, '.aspx' ) !== false ) or ( stripos ( $p_cover1, '.cgi' ) !== false ) or ( stripos ( $p_cover1, '.pl' ) !== false ) or ( stripos ( $p_cover1, '.js' ) !== false ) or ( stripos ( $p_cover1, '.py' ) !== false ) or ( stripos ( $p_cover1, '.shtml' ) !== false ) or ( stripos ( $p_cover1, '.phtml' ) !== false ) ) $err = $lang['err_coverurl'];
	    } if ( $p_cover2 != '' ) {
                if ( substr ( $p_cover2, 0, 7 ) != 'http://' and substr ( $p_cover2, 0, 8 ) != 'https://' ) $p_cover2 = 'http://'.$p_cover2;
                if ( substr ( $p_cover2, -4 ) != '.jpg' and substr ( $p_cover2, -5 ) != '.jpeg' and substr ( $p_cover2, -4 ) != '.gif' and substr ( $p_cover2, -4 ) != '.png' ) $err = $lang['err_coverurl'];
                if ( ( stripos ( $p_cover2, 'javascript' ) !== false ) or ( stripos ( $p_cover2, '.php' ) !== false ) or ( stripos ( $p_cover2, '.html' ) !== false ) or ( stripos ( $p_cover2, '.asp' ) !== false) or ( stripos ( $p_cover2, '.aspx' ) !== false ) or ( stripos ( $p_cover2, '.cgi' ) !== false ) or ( stripos ( $p_cover2, '.pl' ) !== false ) or ( stripos ( $p_cover2, '.js' ) !== false ) or ( stripos ( $p_cover2, '.py' ) !== false ) or ( stripos ( $p_cover2, '.shtml' ) !== false ) or ( stripos ( $p_cover2, '.phtml' ) !== false ) ) $err = $lang['err_coverurl'];
	    } if ( $p_cover3 != '' ) {
                if ( substr ( $p_cover3, 0, 7 ) != 'http://' and substr ( $p_cover3, 0, 8 ) != 'https://' ) $p_cover3 = 'http://'.$p_cover3;
                if ( substr ( $p_cover3, -4 ) != '.jpg' and substr ( $p_cover3, -5 ) != '.jpeg' and substr ( $p_cover3, -4 ) != '.gif' and substr ( $p_cover3, -4 ) != '.png' ) $err = $lang['err_coverurl'];
                if ( ( stripos ( $p_cover3, 'javascript' ) !== false ) or ( stripos ( $p_cover3, '.php' ) !== false ) or ( stripos ( $p_cover3, '.html' ) !== false ) or ( stripos ( $p_cover3, '.asp' ) !== false) or ( stripos ( $p_cover3, '.aspx' ) !== false ) or ( stripos ( $p_cover3, '.cgi' ) !== false ) or ( stripos ( $p_cover3, '.pl' ) !== false ) or ( stripos ( $p_cover3, '.js' ) !== false ) or ( stripos ( $p_cover3, '.py' ) !== false ) or ( stripos ( $p_cover3, '.shtml' ) !== false ) or ( stripos ( $p_cover3, '.phtml' ) !== false ) ) $err = $lang['err_coverurl'];
    	    }
    	    
    	    if ( $p_link1 != '' ) {
                if ( substr ( $p_link1, 0, 7 ) != 'http://' and substr ( $p_link1, 0, 8 ) != 'https://' ) $p_link1 = 'http://'.$p_link1;
                if ( ( stripos ( $p_link1, 'javascript' ) !== false ) or ( stripos ( $p_link1, '.js' ) !== false ) or ( stripos ( $p_link1, 'onclick' ) !== false ) or ( stripos ( $p_link1, 'onmouse' ) !== false) )  $err = $lang['err_eurl'];
            } if ( $p_link2 != '' ) {
                if ( substr ( $p_link2, 0, 7 ) != 'http://' and substr ( $p_link2, 0, 8 ) != 'https://' ) $p_link2 = 'http://'.$p_link2;
                if ( ( stripos ( $p_link2, 'javascript' ) !== false ) or ( stripos ( $p_link2, '.js' ) !== false ) or ( stripos ( $p_link2, 'onclick' ) !== false ) or ( stripos ( $p_link2, 'onmouse' ) !== false) ) $err = $lang['err_eurl'];
            } if ( $p_link3 != '' ) {
                if ( substr ( $p_link3, 0, 7 ) != 'http://' and substr ( $p_link3, 0, 8 ) != 'https://' ) $p_link3 = 'http://'.$p_link3;
                if ( ( stripos ( $p_link3, 'javascript' ) !== false ) or ( stripos ( $p_link3, '.js' ) !== false ) or ( stripos ( $p_link3, 'onclick' ) !== false ) or ( stripos ( $p_link3, 'onmouse' ) !== false) ) $err = $lang['err_eurl'];
            }
            if ( strtotime ( $p_formdate ) > strtotime ( date ( "Y-m-d" ) ) ) $err = $lang['err_mypr14'];
        }
        if ( $p_style == '' ) $err = $lang['pr_chinfom29'];
        
        if ( $err == '' ) {
            $conn->execute("update members set about_me='$p_about' where uid='$ch_uid';");
            if ( $ch_type == '1' or $ch_type == '2' or $ch_type == '4' or $ch_type == '5' or $ch_type == '6' ) {
                $conn->execute("update member_info set member_info.p_about='$p_about', member_info.p_style='$p_style', member_info.p_infl='$p_infl', member_info.p_sim='$p_sim' where member_info.p_uid='$ch_uid';");
            } elseif ( $ch_type == '3' ) {
                $conn->execute("update member_info set member_info.p_about='$p_about', member_info.p_style='$p_style', member_info.p_bandmem='$p_bandmem', member_info.p_formdate='$p_formdate', member_info.p_reclabel='$p_reclabel', member_info.p_labeltype='$p_labeltype', member_info.p_infl='$p_infl', member_info.p_sim='$p_like', member_info.p_a1cover='$p_cover1', member_info.p_a1order='$p_link1', member_info.p_a2cover='$p_cover2', member_info.p_a2order='$p_link2', member_info.p_a3cover='$p_cover3', member_info.p_a3order='$p_link3' where member_info.p_uid='$ch_uid';");
            }
            if ( mysql_affected_rows() > 0 ) $msg = $lang['not_myprofile'];
            else {
                $conn->execute("update members set about_me='$p_about' where uid='$ch_uid';");
                if ( $ch_type == '1' or $ch_type == '2' or $ch_type == '4' or $ch_type == '5' or $ch_type == '6' ) {
                    $conn->execute("insert into member_info set p_uid='$ch_uid', p_type='$ch_type', p_about='$p_about', p_style='$p_style', p_infl='$p_infl', p_sim='$p_sim';");
                } elseif ( $ch_type == '3' ) {
                    $conn->execute("insert into member_info set p_uid='$ch_uid', p_type='$ch_type', p_about='$p_about', p_style='$p_style', p_bandmem='$p_bandmem', p_formdate='$p_formdate', p_reclabel='$p_reclabel', p_labeltype='$p_labeltype', p_infl='$p_infl', p_sim='$p_like', p_a1cover='$p_cover1', p_a1order='$p_link1', p_a2cover='$p_cover2', p_a2order='$p_link2', p_a3cover='$p_cover3', p_a3order='$p_link3'");
                }

                if ( mysql_affected_rows() > 0 ) $msg = $lang['not_myprofile'];
            }
        }
        if ( $err == '' and $msg != '' ) { echo show_msg ( $lang['admnot_setoptions1'] ); } elseif ( $err != '' ) { echo show_err ( $err ); }
	exit;
    } elseif ( $t == 'chprof' ) { //personal profile
	$ch_uid = filter_title($_POST['chprof_uid']);
        $inf_fname = filter_descr($_POST['ffname']);
        $inf_lname = filter_descr($_POST['flname']);
        //$inf_bdate = filter_descr($_POST['bdate']);
        $inf_fgen = filter_descr($_POST['fgen']);
        $inf_frel = filter_descr($_POST['frel']);
        $inf_fage = filter_descr($_POST['fage']);
        $inf_fstatus = filter_descr($_POST['fstatus']);
        $inf_fabout = filter_descr($_POST['fabout']);
        $inf_furl = filter_descr($_POST['furl']);
        $inf_foccup = filter_descr($_POST['foccup']);
        $inf_fcomp = filter_descr($_POST['fcomp']);
        $inf_fschool = filter_descr($_POST['fschool']);
        $inf_finteres = filter_descr($_POST['finteres']);
        $inf_ffavmov = filter_descr($_POST['ffavmov']);
        $inf_ffavmus = filter_descr($_POST['ffavmus']);
        $inf_ffavbook = filter_descr($_POST['ffavbook']);
        if ( $config['date_selection'] == 'css' ) $inf_bdate = filter_descr($_POST['bdate']);
        else {
            $bd_m = filter_descr ( $_POST['bd_Month'] );
            $bd_d = filter_descr ( $_POST['bd_Day'] );
            $bd_y = filter_descr ( $_POST['bd_Year'] );
            $inf_bdate = $bd_y.'-'.$bd_m.'-'.$bd_d;
        }

        
        if ( strtotime ( $inf_bdate ) > strtotime ( date ( "Y-m-d" ) ) ) $err = $lang['err_mypr14'];
        
        if ( $config['enable_channels'] == '0' ) {
            $ch_comm = filter_title ( $_POST['ch_comm'] );
            $ch_comm_who = filter_title ( $_POST['ch_comm_who'] );
            $ch_commrate = filter_title ( $_POST['ch_commrate'] );
	    $ch_str = "ch_comm='$ch_comm', ch_comm_who='$ch_comm_who', ch_commrate='$ch_commrate', ";
        } else $ch_str = '';
	
	if ( $inf_furl != '' ){
	    if ( substr ( $inf_furl, 0, 7 ) != 'http://' and substr ( $inf_furl, 0, 8 ) != 'https://' ) $inf_furl = 'http://'.$inf_furl;
            $url = parse_url ( $inf_furl );
            if ( $inf_furl != '' and $url[host] == '' ) $err = $lang['err_siteurl'];
            if ( $err == '' ) $inf_furl = $url[scheme].'://'.$url[host];
        }
        if ( ( $_POST['newpass1'] != '' or $_POST['newpass2'] != '' ) and $err == '' ) {
            if ( $err == '' ) {
                $pass1 = mysql_real_escape_string ( $_POST['newpass1'] );
                $pass2 = mysql_real_escape_string ( $_POST['newpass2'] );
                if ( $pass1 != $pass2 ) $err = $lang['err_mypr4'];
                elseif ( strlen ( $pass1 ) < $config['pp_pmin'] or strlen ( $pass2 ) < $config['pp_pmin'] or strlen ( $pass1 ) > $config['pp_pmax'] or strlen ( $pass2 ) > $config['pp_pmax'] ) $err = $lang['err_mypr5'];
                if ( $err == '' ) {
                    $newpass = md5($pass1);
                    $rp = $conn->execute("update members set password='$newpass' where uid='$ch_uid';");
                    if ( $conn->Affected_Rows() > 0 ) $msg = $lang['not_myprofile'];
                }
            }
        }
        if ( $_POST['delpic'] == '1' and $err == '' ) {
    	    $del = $conn->execute("select photo from members WHERE uid='$ch_uid';");
    	    $del_pic = $del->fields['photo'];
    	    $del_file = $config['usrimg_dir'].'/'.$del_pic;
    	    if ( $del_pic != 'default.gif' and @unlink($del_file) ) { $rem = $conn->execute("update members set photo='default.gif' WHERE uid='$ch_uid';"); $msg = $lang['not_myprofile']; }
        }
	if ( $err == '' ) {
            $rs = $conn->execute("update members set $ch_str fname='$inf_fname', lname='$inf_lname', bdate='$inf_bdate', gender='$inf_fgen', rel_status='$inf_frel', show_age='$inf_fage', show_status='$inf_fstatus', about_me='$inf_fabout', site='$inf_furl', inf_occup='$inf_foccup', inf_comp='$inf_fcomp', inf_schools='$inf_fschool', inf_interests='$inf_finteres', inf_movies='$inf_ffavmov', inf_music='$inf_ffavmus', inf_books='$inf_ffavbook' where uid='$ch_uid';");
            if ( mysql_affected_rows() > 0 ) $msg = $lang['not_myprofile']; //else $err = $lang['err_up13'];
        }
	if ( $msg != '' and $err == '' ) { echo show_msg ( $lang['admnot_setoptions1'] ); } elseif ( $err != '' ) { echo show_err ( $err ); }
	exit;
    } elseif ( $t == 'cheven' ) { //events/shows
	$ch_uid = filter_title ( $_POST['cheven_uid'] );
	$ch_sid = filter_title ( $_POST['cheven_sid'] );
	$conn->execute("delete from member_shows where s_uid='".$ch_uid."' and s_key='".$ch_sid."';");
	if ( $conn->Affected_Rows() > 0 ) { $msg = $lang['pr_chinfom52']; }
	if ( $msg != '' and $err == '' ) { echo show_msg ( $msg ); }
	exit;
    } elseif ( $t == 'chloc' ) { //location 
	$ch_uid = filter_title ( $_POST['chloc_uid'] );
	$inf_town = filter_descr($_POST['ftown']);
	$inf_city = filter_descr($_POST['fcity']);
	$inf_zip = filter_descr($_POST['fzip']);
	$inf_country = filter_descr($_POST['fcountry']);
	
	if ( $inf_country == $lang['pr_chinfop36'] ) $err = $lang['pr_chinfop39'];
	if ( $err == '' ) {
	    $conn->execute("update members set inf_town='$inf_town', inf_city='$inf_city', inf_zip='$inf_zip', from_country='$inf_country' where uid='$ch_uid';");
    	    if ( mysql_affected_rows() > 0 ) $msg = $lang['not_myprofile'];
	}
	if ( $msg != '' and $err == '' ) { echo show_msg ( $lang['admnot_setoptions1'] ); } elseif ( $err != '' ) { echo show_err ( $err ); }
	exit;
    } elseif ( $t == 'churl' ) { //external url
	$ch_uid = filter_title ( $_POST['churl_uid'] );
	$inf_etitle = filter_descr($_POST['fetitle']);
        $inf_eurl = filter_descr($_POST['feurl']);
        if ( $inf_eurl != '' ) {
            if ( substr ( $inf_eurl, 0, 7 ) != 'http://' and substr ( $inf_eurl, 0, 8 ) != 'https://' ) $inf_eurl = 'http://'.$inf_eurl;
            if ( ( stripos ( $inf_eurl, 'javascript' ) !== false ) or ( stripos ( $inf_eurl, '.js' ) !== false ) or ( stripos ( $inf_eurl, 'onclick' ) !== false ) )  $err = $lang['err_eurl'];
        }

        if ( $err == '' ) {
            $conn->execute("update members set inf_eurl='$inf_eurl', inf_etitle='$inf_etitle' where uid='$ch_uid';");
            if ( mysql_affected_rows() > 0 ) $msg = $lang['not_myprofile'];
        }
        if ( $msg != '' and $err == '' ) { echo show_msg ( $lang['admnot_setoptions1'] ); } elseif ( $err != '' ) { echo show_err ( $err ); }
	exit;
    }
}

//show member details
if ( $_GET['user'] != '' and $c == '' )
{
    $user=filter_title($_GET['user']);
    $sql="select * from members where uid='$user'";
    $rs=$conn->execute($sql);
    if ($rs->recordcount()>0)
    {
	$smarty->assign('userage', getage($rs->fields['bdate']));
	$details=$rs->getrows();
    } else { $err=$lang['adm_errmem1']; }
    
    if ($err=="")
    {
	$rs = $conn->execute("select * from members where uid = '$user';");
	$cinfo = $rs->getrows();
	$smarty->assign('cinfo', $cinfo);
	$smarty->assign('minfo', $cinfo);
	$smarty->assign('fields', $cinfo);
	if ( $config['enable_channels'] == '1' ) $rs1 = $conn->execute("select v.*,s.* from members v, member_info s where v.uid='$user' or s.p_uid='$user';");
	else $rs1 = $conn->execute("select * from members where uid = '$user';");
	$smarty->assign('uinfo', $rs1->getrows());
	$rs2 = $conn->execute("select * from member_shows where s_uid = '$user';");
	$smarty->assign('shows', $rs2->getrows());

	$backq = "SELECT * FROM members WHERE uid < '$user' order by uid desc LIMIT 1";
	$nextq = "SELECT * FROM members WHERE uid > '$user' order by uid asc LIMIT 1";
	$brs=$conn->execute($backq); if ($brs->recordcount()>0) { $back=$brs->fields[uid]; $brs->Close(); } else { $back="0"; } $smarty->assign('back',$back);
	$nrs=$conn->execute($nextq); if ($nrs->recordcount()>0) { $next=$nrs->fields[uid]; $nrs->Close(); } else { $next="0"; } $smarty->assign('next',$next);
	
        $d1 = $config['ado_dir'].'/user'.$user;
        $d2 = $config['vdo_dir'].'/user'.$user;
        $d3 = $config['pic_dir'].'/user'.$user;
        $d4 = $config['flvdo_dir'].'/user'.$user;
        $d5 = $config['tmb_dir'].'/user'.$user;
    
        $s1 = getDirectorySize ( $d1 );
        $s2 = getDirectorySize ( $d2 );
        $s3 = getDirectorySize ( $d3 );
        $s4 = getDirectorySize ( $d4 );
        $s5 = getDirectorySize ( $d5 );
        $m = $s1['size'] + $s2['size'] + $s3['size'] + $s4['size'] + $s5['size'];
        $smarty->assign('mspace', sizeFormat ( $m ));
	
	$smarty->assign('details',$details);
	set_btn("adm_members"); set_sbtn("dtl");
	$smarty->assign('err',$err);
	$smarty->assign('msg',$msg);
	$smarty->display('administration/main_header.tpl');
	$smarty->display('administration/member_details.tpl');
	$smarty->display('administration/main_footer.tpl');
	exit;
    }
}
?>