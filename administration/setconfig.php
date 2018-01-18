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

if (isset($_REQUEST['c'])) $c=filter_title($_REQUEST['c']);
if (isset($_REQUEST['savesetadminbtn'])) $saveadminbtn=filter_title($_REQUEST['savesetadminbtn']);
if (isset($_REQUEST['recbtn'])) $recbtn=filter_title($_REQUEST['recbtn']);
if (isset($_REQUEST['savesitesetbtn'])) $sitesetbtn=filter_title($_REQUEST['savesitesetbtn']);
if (isset($_REQUEST['savesitemodbtn'])) $sitemodbtn=filter_title($_REQUEST['savesitemodbtn']);
if (isset($_REQUEST['savesitepermbtn'])) $sitepermbtn=filter_title($_REQUEST['savesitepermbtn']);
if (isset($_REQUEST['saveothersetbtn'])) $siteotherbtn=filter_title($_REQUEST['saveothersetbtn']);
if (isset($_REQUEST['savestrsetbtn'])) $sitestrbtn=filter_title($_REQUEST['savestrsetbtn']);
if (isset($_REQUEST['savetrsetbtn'])) $truncbtn=filter_title($_REQUEST['savetrsetbtn']);
if (isset($_REQUEST['savemailsetbtn'])) $mailbtn=filter_title($_REQUEST['savemailsetbtn']);
if (isset($_REQUEST['savesetvpagebtn'])) $vpagebtn=filter_title($_REQUEST['savesetvpagebtn']);
if (isset($_REQUEST['saverecbtn'])) $saverecbtn=filter_title($_REQUEST['saverecbtn']);

if ( $c != 'recover' ) check_admin_login();

//username and password recovery
if ($saverecbtn != '' && $c == 'recovery')
{
    $urec = filter_title ( $_REQUEST['urec'] );
    $prec = filter_title ( $_REQUEST['prec'] );
    $linkdur = filter_descr ( round ( $_REQUEST['linkdur'] ) );
    $linkexp = filter_title ( $_REQUEST['linktime'] );

    if ( !is_numeric ( $linkdur ) or $linkdur == '0' ) $err = $lang['passrecset7'];
    if ( $linkexp != '1' ) $linkexp = '0'; else $linkexp = '1';
    
    if ( $err == '' ) {
        if ( $urec != $config['username_recovery'] ) { $conn->execute("update configurations set value='$urec' where configurations.option='username_recovery'"); if ( $conn->Affected_Rows() > 0 ) $msg = $lang[admnot_setoptions1]; }
        if ( $prec != $config['password_recovery'] ) { $conn->execute("update configurations set value='$prec' where configurations.option='password_recovery'"); if ( $conn->Affected_Rows() > 0 ) $msg = $lang[admnot_setoptions1]; }
        if ( $linkdur != $config['recoverylinktime'] ) { $conn->execute("update configurations set value='$linkdur' where configurations.option='recoverylinktime'"); if ( $conn->Affected_Rows() > 0 ) $msg =$lang[admnot_setoptions1]; }
        if ( $linkexp != $config['recoverytimer'] ) { $conn->execute("update configurations set value='$linkexp' where configurations.option='recoverytimer'"); if ( $conn->Affected_Rows() > 0 ) $msg = $lang[admnot_setoptions1]; }
        $smarty->assign('recoverytimer', $linkexp);
    }

    if ($err == '' && $msg != '') { echo show_msg ( $msg ); exit; }
    elseif ( $err != '' ) { echo show_err ( $err ); exit; }
}

//admin pass recovery
if ($recbtn != '' and $c == 'recover')
{
    if (isset($_REQUEST['ranswer'])) $answer=mysql_real_escape_string($_POST['ranswer']);
    $s = $config['security_answer'];
    $the_answer = mysql_real_escape_string($config[$s]);
    
    if ($answer == '' or strlen($answer) < 3) $err=$lang['adm_errsetadmin2'];
    elseif ($answer != $the_answer) $err=$lang['adm_errsetadmin2'];

    if ($err == '') 
    {
	$rnd=(substr(md5(rand(1,99999999)),6,6));
	$conn->execute("update configurations set value='".md5($rnd)."' where configurations.option='admin_pass'"); //set admin pass
	if ($conn->Affected_Rows() > 0)
	{
	    if ($config['rec_pass_email'] == 1)
	    {
		$from=$config['admin_email'];
		$name=$config['admin_name'];
		$smarty->assign('password', $rnd);
		$smarty->assign('receiver_name', 'admin');
		$smarty->assign('pass_ip_request', $_SERVER['REMOTE_ADDR']);
		
		$qu="select email_subject, email_path from email_files where email_id='admin_recover';";
		$rq=mysql_query($qu);
		if (mysql_affected_rows()>0)
		{
		    $rw=mysql_fetch_row($rq);
		    $subj=$rw[0];
		    $path=$rw[1];
		    $subj = str_replace('$config[site_name]',$config[site_name],$subj);
		    $body=$smarty->fetch($path);
		    
		    if (mailto($from,$name,$from,$subj,$body)=="")  { $msg.=$lang['adm_notsetadmin1']; }
		}
	    }
	    if ($config['rec_pass_show'] == 1) $msg.= $lang['adm_notsetadmin2'].$rnd.$lang['adm_notsetadmin3'];
	    if ($msg != '' and $err == '') { echo show_msg ( $msg ); exit; }
	}
    }
    elseif ( $err != '' ) { echo show_err ( $err ); }
    exit;
}

//save admin settings
if ($saveadminbtn != '' && $c == 'admin')
{
	if (isset($_REQUEST['adminmail'])) $adm_mail=mysql_real_escape_string($_REQUEST['adminmail']);
	if (isset($_REQUEST['adminname'])) $adm_name=mysql_real_escape_string($_REQUEST['adminname']);
	if (isset($_REQUEST['adminpass'])) $adm_pass1=mysql_real_escape_string($_REQUEST['adminpass']);
	if (isset($_REQUEST['adminpass1'])) $adm_pass2=mysql_real_escape_string($_REQUEST['adminpass1']); 
	if (isset($_REQUEST['squestions'])) $adm_quest=mysql_real_escape_string($_REQUEST['squestions']);
	if (isset($_REQUEST['secq_custom'])) $adm_cquest=mysql_real_escape_string($_REQUEST['secq_custom']);
	if (isset($_REQUEST['secans'])) $adm_answer=mysql_real_escape_string($_REQUEST['secans']);
	if (isset($_REQUEST['empass'])) $adm_emailpass=mysql_real_escape_string($_REQUEST['empass']);
	if (isset($_REQUEST['seepass'])) $adm_seepass=mysql_real_escape_string($_REQUEST['seepass']);
	
	if (!check_email_address($adm_mail)) $err=$lang['err_signup10'];
	elseif (($adm_pass1!='' or $adm_pass2!='') and ($adm_pass1!=$adm_pass2)) $err=$lang['err_signup9'];
	elseif ($adm_quest!=$lang['adm_setgen40'])
	{
	    if ($adm_quest=='sec_q6')
	    {
		if ($adm_cquest=='' or strlen($adm_cquest) < 3) $err=$lang['adm_errsetadmin1'];
	    }
	    if ($adm_answer=='' or strlen($adm_answer) < 3) $err=$lang['adm_errsetadmin2'];
	}
	if ($adm_name == '') $err=$lang['adm_errsetadmin8'];
	if ($adm_emailpass=='' && $adm_seepass=='') $err=$lang['adm_errsetadmin3'];
	if ($adm_answer == '********') { $a = $config['security_answer']; $adm_answer = $config[$a]; }
	
	if ($err=='')
	{
	    $new_pass=md5($adm_pass1);
	    if ($adm_mail != $config['admin_email']) { $conn->execute("update configurations set value='$adm_mail' where configurations.option='admin_email'"); if ($conn->Affected_Rows() > 0) $msg=$lang['admnot_setoptions1']; }
	    if ($adm_name != $config['admin_name'])
	    { 
		$conn->execute("update configurations set value='$adm_name' where configurations.option='admin_name'"); //set admin name 
		$_SESSION['AUID'] = $adm_name;
		if ($conn->Affected_Rows() > 0) $msg=$lang['admnot_setoptions1']; 
	    }
	    if (($adm_pass1 != '' || $adm_pass2 != '') && ($adm_pass1 == $adm_pass2) && (md5($adm_pass1) != $config['admin_pass']) && ($adm_pass1 != '********' && $adm_pass2 != '********'))
	    {
		$conn->execute("update configurations set value='$new_pass' where configurations.option='admin_pass'"); //set admin pass
		$_SESSION['APASSWORD'] = $new_pass;
		if ($conn->Affected_Rows() > 0) $msg=$lang['admnot_setoptions1']; 
	    }
	    if ($adm_quest!=$lang['adm_setgen40'])
	    {
		if ($adm_quest == 'sec_q1')
		{
		    $conn->execute("update configurations set value='$adm_quest' where configurations.option='security_question'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		    $conn->execute("update configurations set value='$adm_answer' where configurations.option='sec_a1'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		    $conn->execute("update configurations set value='sec_a1' where configurations.option='security_answer'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		    
		}
		elseif ($adm_quest == 'sec_q2')
		{
		    $conn->execute("update configurations set value='$adm_quest' where configurations.option='security_question'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		    $conn->execute("update configurations set value='$adm_answer' where configurations.option='sec_a2'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		    $conn->execute("update configurations set value='sec_a2' where configurations.option='security_answer'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		    if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		}
		elseif ($adm_quest == 'sec_q3')
		{
		    $conn->execute("update configurations set value='$adm_quest' where configurations.option='security_question'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		    $conn->execute("update configurations set value='$adm_answer' where configurations.option='sec_a3'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		    $conn->execute("update configurations set value='sec_a3' where configurations.option='security_answer'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		    if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		}
		elseif ($adm_quest == 'sec_q4')
		{
		    $conn->execute("update configurations set value='$adm_quest' where configurations.option='security_question'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		    $conn->execute("update configurations set value='$adm_answer' where configurations.option='sec_a4'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		    $conn->execute("update configurations set value='sec_a4' where configurations.option='security_answer'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		    if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		}
		elseif ($adm_quest == 'sec_q5')
		{
		    $conn->execute("update configurations set value='$adm_quest' where configurations.option='security_question'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		    $conn->execute("update configurations set value='$adm_answer' where configurations.option='sec_a5'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		    $conn->execute("update configurations set value='sec_a5' where configurations.option='security_answer'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		    if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		}
		elseif ($adm_quest == 'sec_q6')
		{
		    $conn->execute("update configurations set value='$adm_quest' where configurations.option='security_question'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		    $conn->execute("update configurations set value='sec_a6' where configurations.option='security_answer'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		    $conn->execute("update configurations set value='$adm_cquest' where configurations.option='sec_q6'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		    $conn->execute("update configurations set value='$adm_answer' where configurations.option='sec_a6'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		}
	    }
	    else
	    {
		if ($config['security_question'] != '' and $config['security_answer'] != '')
		{
		    $conn->execute("update configurations set value='' where configurations.option='security_question'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		    $conn->execute("update configurations set value='' where configurations.option='security_answer'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; 
		}
	    }
	    if ($adm_emailpass != '') $adm_emailpass='1'; else $adm_emailpass='0'; 
	    if ($adm_seepass != '') $adm_seepass='1'; else $adm_seepass='0';  
	    
	    if (isset($adm_emailpass)) { $conn->execute("update configurations set value='$adm_emailpass' where configurations.option='rec_pass_email'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];  }
	    if (isset($adm_seepass)) { $conn->execute("update configurations set value='$adm_seepass' where configurations.option='rec_pass_show'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
	    
	    if ($err == '' && $msg != '') 
	    { 
		$msg=$lang['admnot_setoptions1']; 
		echo show_msg ( $msg ); exit; 
	    }
	}
	elseif ( $err != '' ) { echo show_err ( $err ); exit; }
}
//site settings
if ($sitesetbtn != '' && $c == 'settings')
{
    if (isset($_REQUEST['sitename'])) $adm_sitename=mysql_real_escape_string($_REQUEST['sitename']);
    if (isset($_REQUEST['metatags'])) $adm_metatags=mysql_real_escape_string($_REQUEST['metatags']);
    if (isset($_REQUEST['metadesc'])) $adm_metadesc=mysql_real_escape_string($_REQUEST['metadesc']);
//    if (isset($_REQUEST['theme'])) $adm_theme=mysql_real_escape_string($_REQUEST['theme']);
    if (isset($_REQUEST['lpage'])) $adm_lpage=mysql_real_escape_string($_REQUEST['lpage']);
    
    if ($adm_sitename == '') $err = $lang['adm_errsetadmin4'];
    elseif ($adm_metatags == '') $err = $lang['adm_errsetadmin5'];
    elseif ($adm_metadesc == '') $err = $lang['adm_errsetadmin6'];
    
    if ($err == '')
    {
	$conn->execute("update configurations set value='$adm_sitename' where configurations.option='site_name'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
	$conn->execute("update configurations set value='$adm_metatags' where configurations.option='meta_tags'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
	$conn->execute("update configurations set value='$adm_metadesc' where configurations.option='meta_desc'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
//	$conn->execute("update configurations set value='$adm_theme' where configurations.option='site_theme'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
	$conn->execute("update configurations set value='$adm_lpage' where configurations.option='landing_page'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    }
    if ($err == '' && $msg != '')
    {
	$msg=$lang['admnot_setoptions1'];
	echo show_msg ( $msg ); exit;
    }
    elseif ( $err != '' ) { echo show_err ( $err ); exit; }
}
//site modules
if ($sitemodbtn != '' && $c == 'sitemodules')
{
    function file_perms($file, $octal = false)
    {
        if(!file_exists($file)) return false;
        $perms = fileperms($file);
        $cut = $octal ? 0 : 1;
        return substr(decoct($perms), $cut);
    }
    if (isset($_REQUEST['amodule'])) $adm_amodule=mysql_real_escape_string($_REQUEST['amodule']);
    if (isset($_REQUEST['imodule'])) $adm_imodule=mysql_real_escape_string($_REQUEST['imodule']);
    if (isset($_REQUEST['vmodule'])) $adm_vmodule=mysql_real_escape_string($_REQUEST['vmodule']);
    if (isset($_REQUEST['chmodule'])) $adm_chmodule=mysql_real_escape_string($_REQUEST['chmodule']);
    if (isset($_REQUEST['msection'])) $adm_msection=mysql_real_escape_string($_REQUEST['msection']);
    if (isset($_REQUEST['inbox'])) $adm_inbox=mysql_real_escape_string($_REQUEST['inbox']);
    if (isset($_REQUEST['msgattach'])) $adm_msgattach=mysql_real_escape_string($_REQUEST['msgattach']);
    if (isset($_REQUEST['userblock'])) $adm_userblock=mysql_real_escape_string($_REQUEST['userblock']);
    if (isset($_REQUEST['msgmulti'])) $adm_msgmulti=mysql_real_escape_string($_REQUEST['msgmulti']);
    if (isset($_REQUEST['lastusers'])) $adm_lastusers=mysql_real_escape_string($_REQUEST['lastusers']);
    if (isset($_REQUEST['lastuserstab'])) $adm_lastuserstab=mysql_real_escape_string($_REQUEST['lastuserstab']);
    if (isset($_REQUEST['onlinenowtab'])) $adm_onlinenowtab=mysql_real_escape_string($_REQUEST['onlinenowtab']);
    if (isset($_REQUEST['filtermod'])) $adm_filtermod=mysql_real_escape_string($_REQUEST['filtermod']);
    if (isset($_REQUEST['filteredwords'])) $adm_filteredwords=$_REQUEST['filteredwords'];
    if (isset($_REQUEST['repstr'])) $adm_repstr=$_REQUEST['repstr'];
    
    if (($adm_vmodule==0) && ($adm_imodule==0) && ($adm_amodule==0)) $err=$lang['admerr_setgen5'];
    if (($adm_lastuserstab=='' && $adm_onlinenowtab=='') && $adm_lastusers!=$lang['adm_setgendisabled']) $err=$lang['adm_errsetadmin7'];
    
    $thefile = 'words.txt';
    $file_path = $config['base_dir'].'/modules/wordfiltering/'.$thefile;
	
    $d1perm = file_perms ( $file_path );
    if ($d1perm != '0666') { $err = 'Error: Bad word file is not writable!'; }
    $d2perm = file_perms ( $config['base_dir'].'/modules/wordfiltering' );
    if ($d2perm != '0777') { $err = 'Error: '.$config['base_dir'].'/modules/wordfiltering'.' is not writable!'; }

    if ($err == '')
    {
	if ($adm_msgattach != '') $adm_msgattach='1'; else $adm_msgattach='0'; 
	if ($adm_userblock != '') $adm_userblock='1'; else $adm_userblock='0';  
	if ($adm_msgmulti != '') $adm_msgmulti='1'; else $adm_msgmulti='0';  
	if ($adm_lastuserstab != '') $adm_lastuserstab='1'; else $adm_lastuserstab='0';  
	if ($adm_onlinenowtab != '') $adm_onlinenowtab='1'; else $adm_onlinenowtab='0';
	
	if ($adm_amodule != $config['enable_audio']) { $conn->execute("update configurations set value='$adm_amodule' where configurations.option='enable_audio'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
	if ($adm_imodule != $config['enable_images']) { $conn->execute("update configurations set value='$adm_imodule' where configurations.option='enable_images'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
	if ($adm_vmodule != $config['enable_videos']) { $conn->execute("update configurations set value='$adm_vmodule' where configurations.option='enable_videos'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
	if ($adm_chmodule != $config['enable_channels']) { $conn->execute("update configurations set value='$adm_chmodule' where configurations.option='enable_channels'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
	if ($adm_msection != $config['members_section']) { $conn->execute("update configurations set value='$adm_msection' where configurations.option='members_section'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
	if ($adm_inbox != $config['enable_inbox']) { $conn->execute("update configurations set value='$adm_inbox' where configurations.option='enable_inbox'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
	if (isset($adm_msgattach)) { $conn->execute("update configurations set value='$adm_msgattach' where configurations.option='msg_attach'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
	if (isset($adm_userblock)) { $conn->execute("update configurations set value='$adm_userblock' where configurations.option='msg_block'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
	if (isset($adm_msgmulti)) { $conn->execute("update configurations set value='$adm_msgmulti' where configurations.option='msg_multi'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
	if ($adm_lastusers != $config['last_users']) { $conn->execute("update configurations set value='$adm_lastusers' where configurations.option='last_users'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
	if (isset($adm_lastuserstab)) { $conn->execute("update configurations set value='$adm_lastuserstab' where configurations.option='users_last'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
	if (isset($adm_onlinenowtab)) { $conn->execute("update configurations set value='$adm_onlinenowtab' where configurations.option='users_online'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
	if ($adm_filtermod != $config['word_filters']) { $conn->execute("update configurations set value='$adm_filtermod' where configurations.option='word_filters'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
	if ($adm_repstr != $config['repl_string']) { $conn->execute("update configurations set value='$adm_repstr' where configurations.option='repl_string'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
	
	$handle = fopen($file_path, "w");
	if ( get_magic_quotes_gpc() ) { if ( fwrite ( $handle, stripslashes ( $adm_filteredwords ) ) ) $msg = $lang['admnot_setoptions1']; else $err = $lang['filtermod5']; }
	else { if  ( fwrite ( $handle, $adm_filteredwords ) ) $msg = $lang['admnot_setoptions1']; else $err = $lang['filtermod5']; }
	fclose($handle);
    }
    
    if ($err == '' && $msg != '')
    {
	$msg=$lang['admnot_setoptions1'];
	echo show_msg ( $msg ); 
	exit;
    }
    elseif ( $err != '' ) { echo show_err ( $err ); exit; }
}
//site permissions
if ($sitepermbtn != '' and $c == 'siteperm')
{
    if (isset($_REQUEST['pcomm'])) $adm_pcomm=mysql_real_escape_string($_REQUEST['pcomm']);
    if (isset($_REQUEST['fcomm'])) $adm_fcomm=mysql_real_escape_string($_REQUEST['fcomm']);
    if (isset($_REQUEST['fcommrate'])) $adm_fcommrate=mysql_real_escape_string($_REQUEST['fcommrate']);
    if (isset($_REQUEST['fresp'])) $adm_fresp=mysql_real_escape_string($_REQUEST['fresp']);
    if (isset($_REQUEST['fvotes'])) $adm_fvotes=mysql_real_escape_string($_REQUEST['fvotes']);
    if (isset($_REQUEST['ratesameip'])) $adm_ratesameip=mysql_real_escape_string($_REQUEST['ratesameip']);
    if (isset($_REQUEST['femb'])) $adm_femb=mysql_real_escape_string($_REQUEST['femb']);
    if (isset($_REQUEST['file_down'])) $adm_file_down=mysql_real_escape_string($_REQUEST['file_down']);
    if (isset($_REQUEST['down_src'])) $adm_down_src=mysql_real_escape_string($_REQUEST['down_src']);
    if (isset($_REQUEST['down_conv'])) $adm_down_conv=mysql_real_escape_string($_REQUEST['down_conv']);
    if (isset($_REQUEST['down_guest'])) $adm_down_guest=mysql_real_escape_string($_REQUEST['down_guest']);
    if (isset($_REQUEST['fbm'])) $adm_fbm=mysql_real_escape_string($_REQUEST['fbm']);
    if (isset($_REQUEST['audioup'])) $adm_audioup=mysql_real_escape_string($_REQUEST['audioup']);
    if (isset($_REQUEST['imageup'])) $adm_imageup=mysql_real_escape_string($_REQUEST['imageup']);
    if (isset($_REQUEST['videoup'])) $adm_videoup=mysql_real_escape_string($_REQUEST['videoup']);
    if (isset($_REQUEST['audioapp'])) $adm_audioapp=mysql_real_escape_string($_REQUEST['audioapp']);
    if (isset($_REQUEST['imageapp'])) $adm_imageapp=mysql_real_escape_string($_REQUEST['imageapp']);
    if (isset($_REQUEST['videoapp'])) $adm_videoapp=mysql_real_escape_string($_REQUEST['videoapp']);

    if ($adm_ratesameip != '') $adm_ratesameip='1'; else $adm_ratesameip='0'; 
    if ($adm_down_src != '') $adm_down_src='1'; else $adm_down_src='0';  
    if ($adm_down_conv != '') $adm_down_conv='1'; else $adm_down_conv='0';  
    if ($adm_down_guest != '') $adm_down_guest='1'; else $adm_down_guest='0';
    
    if ($adm_pcomm != $config['profile_comments']) { $conn->execute("update configurations set value='$adm_pcomm' where configurations.option='profile_comments'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if ($adm_fcomm != $config['file_comments']) { $conn->execute("update configurations set value='$adm_fcomm' where configurations.option='file_comments'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if ($adm_fcommrate != $config['comment_rating']) { $conn->execute("update configurations set value='$adm_fcommrate' where configurations.option='comment_rating'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if ($adm_fresp != $config['file_responses']) { $conn->execute("update configurations set value='$adm_fresp' where configurations.option='file_responses'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if ($adm_fvotes != $config['file_ratings']) { $conn->execute("update configurations set value='$adm_fvotes' where configurations.option='file_ratings'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if (isset($adm_ratesameip)) { $conn->execute("update configurations set value='$adm_ratesameip' where configurations.option='rating_sameip'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if ($adm_femb != $config['file_embed']) { $conn->execute("update configurations set value='$adm_femb' where configurations.option='file_embed'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if ($adm_file_down != $config['file_download']) { $conn->execute("update configurations set value='$adm_file_down' where configurations.option='file_download'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if (isset($adm_down_src)) { $conn->execute("update configurations set value='$adm_down_src' where configurations.option='file_download_src'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if (isset($adm_down_conv)) { $conn->execute("update configurations set value='$adm_down_conv' where configurations.option='file_download_conv'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if (isset($adm_down_guest)) { $conn->execute("update configurations set value='$adm_down_guest' where configurations.option='file_download_guest'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if ($adm_fbm != $config['file_bookmark']) { $conn->execute("update configurations set value='$adm_fbm' where configurations.option='file_bookmark'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if ($adm_audioup != $config['audio_uploads']) { $conn->execute("update configurations set value='$adm_audioup' where configurations.option='audio_uploads'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if ($adm_imageup != $config['image_uploads']) { $conn->execute("update configurations set value='$adm_imageup' where configurations.option='image_uploads'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if ($adm_videoup != $config['video_uploads']) { $conn->execute("update configurations set value='$adm_videoup' where configurations.option='video_uploads'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if ($adm_audioapp != $config['audio_approval']) { $conn->execute("update configurations set value='$adm_audioapp' where configurations.option='audio_approval'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if ($adm_imageapp != $config['image_approval']) { $conn->execute("update configurations set value='$adm_imageapp' where configurations.option='image_approval'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if ($adm_videoapp != $config['video_approval']) { $conn->execute("update configurations set value='$adm_videoapp' where configurations.option='video_approval'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }

    if ($err == '' && $msg != '')
    {
	$msg=$lang['admnot_setoptions1'];
	echo show_msg ( $msg ); 
	exit;
    }
    elseif ( $err != '' ) { echo show_err ( $err ); exit; }
}
//other settings
if ($siteotherbtn != '' and $c == 'other')
{
    if (isset($_REQUEST['rss'])) $adm_rss=mysql_real_escape_string($_REQUEST['rss']);
    if (isset($_REQUEST['cflags'])) $adm_cflags=mysql_real_escape_string($_REQUEST['cflags']);
    if (isset($_REQUEST['langbox'])) $adm_langbox=mysql_real_escape_string($_REQUEST['langbox']);
    if (isset($_REQUEST['captcha'])) $adm_captcha=mysql_real_escape_string($_REQUEST['captcha']);
    if (isset($_REQUEST['emailver'])) $adm_emailver=mysql_real_escape_string($_REQUEST['emailver']);
//    if (isset($_REQUEST['sitestat'])) $adm_sitestat=mysql_real_escape_string($_REQUEST['sitestat']);
    if (isset($_REQUEST['mylinks'])) $adm_mylinks=mysql_real_escape_string($_REQUEST['mylinks']);
    if (isset($_REQUEST['rightlinks'])) $adm_rightlinks=mysql_real_escape_string($_REQUEST['rightlinks']);
    if (isset($_REQUEST['categcounts'])) $adm_categcount=mysql_real_escape_string($_REQUEST['categcounts']);
    if (isset($_REQUEST['chancounts'])) $adm_chancount=mysql_real_escape_string($_REQUEST['chancounts']);
    if (isset($_REQUEST['viewdelim'])) $adm_viewdelim=mysql_real_escape_string($_REQUEST['viewdelim']);
//    if (isset($_REQUEST['dateselect'])) $adm_dateselect=mysql_real_escape_string($_REQUEST['dateselect']);
    
    if ($adm_rss != $config['rss_feeds']) { $conn->execute("update configurations set value='$adm_rss' where configurations.option='rss_feeds'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if ($adm_cflags != $config['country_flags']) { $conn->execute("update configurations set value='$adm_cflags' where configurations.option='country_flags'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if ($adm_langbox != $config['lang_box']) { $conn->execute("update configurations set value='$adm_langbox' where configurations.option='lang_box'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if ($adm_captcha != $config['signup_captcha']) { $conn->execute("update configurations set value='$adm_captcha' where configurations.option='signup_captcha'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if ($adm_emailver != $config['email_verification']) { $conn->execute("update configurations set value='$adm_emailver' where configurations.option='email_verification'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
//    if ($adm_sitestat != $config['site_stats']) { $conn->execute("update configurations set value='$adm_sitestat' where configurations.option='site_stats'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if ($adm_mylinks != $config['panel_mylinks']) { $conn->execute("update configurations set value='$adm_mylinks' where configurations.option='panel_mylinks'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if ($adm_rightlinks != $config['panel_rightlinks']) { $conn->execute("update configurations set value='$adm_rightlinks' where configurations.option='panel_rightlinks'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if ($adm_categcount != $config['categ_counts']) { $conn->execute("update configurations set value='$adm_categcount' where configurations.option='categ_counts'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if ($adm_chancount != $config['channel_counts']) { $conn->execute("update configurations set value='$adm_chancount' where configurations.option='channel_counts'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    if ($adm_viewdelim != $config['views_delim']) { $conn->execute("update configurations set value='$adm_viewdelim' where configurations.option='views_delim'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
//    if ($adm_dateselect != $config['date_selection']) { $conn->execute("update configurations set value='$adm_dateselect' where configurations.option='date_selection'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }

    if ($err == '' && $msg != '')
    {
	$msg=$lang['admnot_setoptions1'];
	echo show_msg ( $msg ); 
	exit;
    }
    elseif ( $err != '' ) { echo show_err ( $err ); exit; }
}
//email settings
if ($mailbtn != '' and $c == 'email')
{
    if (isset($_REQUEST['mailer'])) $adm_mailer=mysql_real_escape_string($_REQUEST['mailer']);
    if (isset($_REQUEST['smpath'])) $adm_mail_pathsendmail=mysql_real_escape_string($_REQUEST['smpath']);
    if (isset($_REQUEST['smserver'])) $adm_mail_smtpserver=mysql_real_escape_string($_REQUEST['smserver']);
    if (isset($_REQUEST['smport'])) $adm_mail_smtp_port=mysql_real_escape_string($_REQUEST['smport']);
    if (isset($_REQUEST['smauth'])) $adm_smauth=mysql_real_escape_string($_REQUEST['smauth']);
    if (isset($_REQUEST['smuser'])) $adm_mail_smtpuser=mysql_real_escape_string($_REQUEST['smuser']);
    if (isset($_REQUEST['smpass'])) $adm_mail_smtpkey=mysql_real_escape_string($_REQUEST['smpass']);
    if (isset($_REQUEST['smfrommail'])) $adm_smfrommail=mysql_real_escape_string($_REQUEST['smfrommail']);
    if (isset($_REQUEST['smfromname'])) $adm_smfromname=mysql_real_escape_string($_REQUEST['smfromname']);
    if (isset($_REQUEST['smsecure'])) $adm_smsecure=mysql_real_escape_string($_REQUEST['smsecure']);
    if (isset($_REQUEST['emph'])) $adm_emph=mysql_real_escape_string($_REQUEST['emph']);
    if (isset($_REQUEST['not1'])) $adm_not1=mysql_real_escape_string($_REQUEST['not1']);
    if (isset($_REQUEST['not2'])) $adm_not2=mysql_real_escape_string($_REQUEST['not2']);
    if (isset($_REQUEST['not3'])) $adm_not3=mysql_real_escape_string($_REQUEST['not3']);
    if (isset($_REQUEST['not4'])) $adm_not4=mysql_real_escape_string($_REQUEST['not4']);
    if (isset($_REQUEST['not5'])) $adm_not5=mysql_real_escape_string($_REQUEST['not5']);
    if (isset($_REQUEST['not6'])) $adm_not6=mysql_real_escape_string($_REQUEST['not6']);
    if (isset($_REQUEST['not7'])) $adm_not7=mysql_real_escape_string($_REQUEST['not7']);
    if (isset($_REQUEST['not8'])) $adm_not8=mysql_real_escape_string($_REQUEST['not8']);
    if (isset($_REQUEST['not_ch'])) $adm_not_ch=mysql_real_escape_string($_REQUEST['not_ch']);
    
    if ($adm_not1 != '') $adm_not1='1'; else $adm_not1='0';
    if ($adm_not2 != '') $adm_not2='1'; else $adm_not2='0';
    if ($adm_not3 != '') $adm_not3='1'; else $adm_not3='0';
    if ($adm_not4 != '') $adm_not4='1'; else $adm_not4='0';    
    if ($adm_not5 != '') $adm_not5='1'; else $adm_not5='0';
    if ($adm_not6 != '') $adm_not6='1'; else $adm_not6='0';
    if ($adm_not7 != '') $adm_not7='1'; else $adm_not7='0';
    if ($adm_not8 != '') $adm_not8='1'; else $adm_not8='0';
    if ($adm_not_ch != '') $adm_not_ch='1'; else $adm_not_ch='0';
    
    if ($adm_mailer == 'mail_sendmail' and $adm_mail_pathsendmail == '') $err = $lang['adm_errsetadmin10'];
    elseif ($adm_mailer == 'mail_sendmail' and ini_get('open_basedir') == NULL and !@file_exists($adm_mail_pathsendmail)) $err = $lang['adm_errsetadmin11'];
    elseif ($adm_mailer == 'mail_smtp' and $adm_mail_smtpserver == '') $err = $lang['adm_errsetadmin12'];
    elseif ($adm_mailer == 'mail_smtp' and ($adm_mail_smtp_port == '' or !is_numeric($adm_mail_smtp_port))) $err = $lang['adm_errsetadmin13'];
    elseif ($adm_mailer == 'mail_smtp' and ($adm_smauth == 1 and $adm_mail_smtpuser == '')) $err = $lang['adm_errsetadmin14'];
    elseif ($adm_mailer == 'mail_smtp' and ($adm_smauth == 1 and $adm_mail_smtpkey == '')) $err = $lang['adm_errsetadmin15'];
    elseif ($adm_mailer == 'mail_smtp' and ($adm_smfrommail == '' or !check_email_address($adm_smfrommail))) $err = $lang['adm_errsetadmin16'];
    elseif ($adm_mailer == 'mail_smtp' and $adm_smfromname == '') $err = $lang['adm_errsetadmin17'];
    elseif (!is_numeric($adm_emph) or $adm_emph < 1) $err = $lang['adm_errsetadmin19'];
    if ($adm_mail_smtpkey == '********') $adm_mail_smtpkey = $config['mail_smtpkey'];
    
    if ($err == '')
    {
	if ($adm_mailer != $config['mail_option']) { $conn->execute("update configurations set value='$adm_mailer' where configurations.option='mail_option'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
	if ($adm_mailer != $config['mail_option'] and $adm_mailer == 'mail_sendmail') { $conn->execute("update configurations set value='$adm_mail_pathsendmail' where configurations.option='mail_pathsendmail'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
	
	$conn->execute("update configurations set value='$adm_mail_smtpserver' where configurations.option='mail_smtpserver'"); { if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];  }
	$conn->execute("update configurations set value='$adm_mail_smtp_port' where configurations.option='mail_smtp_port'"); { if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];  }
	$conn->execute("update configurations set value='$adm_smauth' where configurations.option='mail_smtpauth'"); { if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];  }
	$conn->execute("update configurations set value='$adm_mail_smtpuser' where configurations.option='mail_smtpuser'"); { if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];  }
	$conn->execute("update configurations set value='$adm_mail_smtpkey' where configurations.option='mail_smtpkey'"); { if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];  }
	$conn->execute("update configurations set value='$adm_smfrommail' where configurations.option='mail_smtpfromemail'"); { if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];  }
	$conn->execute("update configurations set value='$adm_smfromname' where configurations.option='mail_smtpfromname'"); { if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];  }
	$conn->execute("update configurations set value='$adm_emph' where configurations.option='emails_per_hour'"); { if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];  }
	$conn->execute("update configurations set value='$adm_not1' where configurations.option='mail_not1'"); { if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];  }
	$conn->execute("update configurations set value='$adm_not2' where configurations.option='mail_not2'"); { if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];  }
	$conn->execute("update configurations set value='$adm_not3' where configurations.option='mail_not3'"); { if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];  }
	$conn->execute("update configurations set value='$adm_not4' where configurations.option='mail_not4'"); { if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];  }
	$conn->execute("update configurations set value='$adm_not5' where configurations.option='mail_not5'"); { if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];  }
	$conn->execute("update configurations set value='$adm_not6' where configurations.option='mail_not6'"); { if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];  }
	$conn->execute("update configurations set value='$adm_not7' where configurations.option='subscribe_files_not'"); { if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];  }
	$conn->execute("update configurations set value='$adm_not8' where configurations.option='file_response_not'"); { if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];  }
	$conn->execute("update configurations set value='$adm_not_ch' where configurations.option='mail_not_ch'"); { if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];  }
	
	if ($adm_smsecure != $config['mail_smtpsecure']) $conn->execute("update configurations set value='$adm_smsecure' where configurations.option='mail_smtpsecure'"); { if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];  }
    }
    
    if ($err == '' && $msg != '')
    {
	$msg=$lang['admnot_setoptions1'];
	echo show_msg ( $msg ); 
	exit;
    }
    elseif ( $err != '' ) { echo show_err ( $err ); exit; }
}
//truncate settings
if ($truncbtn != '' and $c == 'truncate')
{
    if (isset($_REQUEST['tr1'])) { $adm_tr1=mysql_real_escape_string($_REQUEST['tr1']); $cfg_val[]=$adm_tr1+3; $cfg_tbl[]='tr_titlegrid'; }
    if (isset($_REQUEST['tr2'])) { $adm_tr2=mysql_real_escape_string($_REQUEST['tr2']); $cfg_val[]=$adm_tr2+3; $cfg_tbl[]='tr_titlelist'; }
    if (isset($_REQUEST['tr3'])) { $adm_tr3=mysql_real_escape_string($_REQUEST['tr3']); $cfg_val[]=$adm_tr3+3; $cfg_tbl[]='tr_desclist'; }
    if (isset($_REQUEST['tr4'])) { $adm_tr4=mysql_real_escape_string($_REQUEST['tr4']); $cfg_val[]=$adm_tr4+3; $cfg_tbl[]='tr_msgs'; }
    
    for($j=0;$cfg_val[$j];$j++) 
    {
	if (!is_numeric($cfg_val[$j])) $err=$lang['adm_errsetadmin9'];
	$conn->execute("update configurations set value='".$cfg_val[$j]."' where configurations.option='".$cfg_tbl[$j]."'");
	if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    }

    if ($err == '' && $msg != '')
    {
	$msg=$lang['admnot_setoptions1'];
	echo show_msg ( $msg ); 
	exit;
    }
    elseif ( $err != '' ) { echo show_err ( $err ); exit; }
}
//string settings
if ($sitestrbtn != '' and $c == 'string')
{
    if (isset($_REQUEST['pp_pmin'])) { $adm_pp_pmin=mysql_real_escape_string($_REQUEST['pp_pmin']); $cfg_val[]=$adm_pp_pmin; $cfg_tbl[]='pp_pmin'; }
    if (isset($_REQUEST['pp_pmax'])) { $adm_pp_pmax=mysql_real_escape_string($_REQUEST['pp_pmax']); $cfg_val[]=$adm_pp_pmax; $cfg_tbl[]='pp_pmax'; }
    if (isset($_REQUEST['sp_umin'])) { $adm_sp_umin=mysql_real_escape_string($_REQUEST['sp_umin']); $cfg_val[]=$adm_sp_umin; $cfg_tbl[]='sp_umin'; }
    if (isset($_REQUEST['sp_umax'])) { $adm_sp_umax=mysql_real_escape_string($_REQUEST['sp_umax']); $cfg_val[]=$adm_sp_umax; $cfg_tbl[]='sp_umax'; }
    if (isset($_REQUEST['sp_pmin'])) { $adm_sp_pmin=mysql_real_escape_string($_REQUEST['sp_pmin']); $cfg_val[]=$adm_sp_pmin; $cfg_tbl[]='sp_pmin'; }
    if (isset($_REQUEST['sp_pmax'])) { $adm_sp_pmax=mysql_real_escape_string($_REQUEST['sp_pmax']); $cfg_val[]=$adm_sp_pmax; $cfg_tbl[]='sp_pmax'; }
    if (isset($_REQUEST['se_min'])) { $adm_se_min=mysql_real_escape_string($_REQUEST['se_min']); $cfg_val[]=$adm_se_min; $cfg_tbl[]='se_min'; }
    if (isset($_REQUEST['se_max'])) { $adm_se_max=mysql_real_escape_string($_REQUEST['se_max']); $cfg_val[]=$adm_se_max; $cfg_tbl[]='se_max'; }
    if (isset($_REQUEST['fi_timin'])) { $adm_fi_timin=mysql_real_escape_string($_REQUEST['fi_timin']); $cfg_val[]=$adm_fi_timin; $cfg_tbl[]='fi_timin'; }
    if (isset($_REQUEST['fi_timax'])) { $adm_fi_timax=mysql_real_escape_string($_REQUEST['fi_timax']); $cfg_val[]=$adm_fi_timax; $cfg_tbl[]='fi_timax'; }
    if (isset($_REQUEST['fi_demin'])) { $adm_fi_demin=mysql_real_escape_string($_REQUEST['fi_demin']); $cfg_val[]=$adm_fi_demin; $cfg_tbl[]='fi_demin'; }
    if (isset($_REQUEST['fi_demax'])) { $adm_fi_demax=mysql_real_escape_string($_REQUEST['fi_demax']); $cfg_val[]=$adm_fi_demax; $cfg_tbl[]='fi_demax'; }
    if (isset($_REQUEST['fi_tamin'])) { $adm_fi_tamin=mysql_real_escape_string($_REQUEST['fi_tamin']); $cfg_val[]=$adm_fi_tamin; $cfg_tbl[]='fi_tamin'; }
    if (isset($_REQUEST['fi_tamax'])) { $adm_fi_tamax=mysql_real_escape_string($_REQUEST['fi_tamax']); $cfg_val[]=$adm_fi_tamax; $cfg_tbl[]='fi_tamax'; }
    if (isset($_REQUEST['ir_min'])) { $adm_ir_min=mysql_real_escape_string($_REQUEST['ir_min']); $cfg_val[]=$adm_ir_min; $cfg_tbl[]='ir_min'; }
    if (isset($_REQUEST['ir_max'])) { $adm_ir_max=mysql_real_escape_string($_REQUEST['ir_max']); $cfg_val[]=$adm_ir_max; $cfg_tbl[]='ir_max'; }
    if (isset($_REQUEST['fr_min'])) { $adm_fr_min=mysql_real_escape_string($_REQUEST['fr_min']); $cfg_val[]=$adm_fr_min; $cfg_tbl[]='fr_min'; }
    if (isset($_REQUEST['fr_max'])) { $adm_fr_max=mysql_real_escape_string($_REQUEST['fr_max']); $cfg_val[]=$adm_fr_max; $cfg_tbl[]='fr_max'; }
    if (isset($_REQUEST['comm_min'])) { $adm_comm_min=mysql_real_escape_string($_REQUEST['comm_min']); $cfg_val[]=$adm_comm_min; $cfg_tbl[]='comm_min'; }
    if (isset($_REQUEST['comm_max'])) { $adm_comm_max=mysql_real_escape_string($_REQUEST['comm_max']); $cfg_val[]=$adm_comm_max; $cfg_tbl[]='comm_max'; }
    if (isset($_REQUEST['subj_min'])) { $adm_subj_min=mysql_real_escape_string($_REQUEST['subj_min']); $cfg_val[]=$adm_subj_min; $cfg_tbl[]='subj_min'; }
    if (isset($_REQUEST['subj_max'])) { $adm_subj_max=mysql_real_escape_string($_REQUEST['subj_max']); $cfg_val[]=$adm_subj_max; $cfg_tbl[]='subj_max'; }
    if (isset($_REQUEST['inbox_min'])) { $adm_inbox_min=mysql_real_escape_string($_REQUEST['inbox_min']); $cfg_val[]=$adm_inbox_min; $cfg_tbl[]='inbox_min'; }
    if (isset($_REQUEST['inbox_max'])) { $adm_inbox_max=mysql_real_escape_string($_REQUEST['inbox_max']); $cfg_val[]=$adm_inbox_max; $cfg_tbl[]='inbox_max'; }
    if (isset($_REQUEST['pltitle_min'])) { $adm_pltitle_min=mysql_real_escape_string($_REQUEST['pltitle_min']); $cfg_val[]=$adm_pltitle_min; $cfg_tbl[]='pltitle_min'; }
    if (isset($_REQUEST['pltitle_max'])) { $adm_pltitle_max=mysql_real_escape_string($_REQUEST['pltitle_max']); $cfg_val[]=$adm_pltitle_max; $cfg_tbl[]='pltitle_max'; }
    
    for($j=0;$cfg_val[$j];$j++) 
    {
	if (!is_numeric($cfg_val[$j])) $err=$lang['adm_errsetadmin9'];
	$conn->execute("update configurations set value='".$cfg_val[$j]."' where configurations.option='".$cfg_tbl[$j]."'");
	if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    }

    if ($err == '' && $msg != '')
    {
	$msg=$lang['admnot_setoptions1'];
	echo show_msg ( $msg ); 
	exit;
    }
    elseif ( $err != '' ) { echo show_err ( $err ); exit; }
}
//audio/image/video page settings
if ($vpagebtn != '' and $c == 'vpage') {
    if (isset($_REQUEST['vpage_pcnbox'])) { $vpage_pcnbox = 1; $cfg_val[]=$vpage_pcnbox; $cfg_tbl[]='vpage_pcnbox'; } else { $vpage_pcnbox = 0; $cfg_val[]=$vpage_pcnbox; $cfg_tbl[]='vpage_pcnbox'; }
    if (isset($_REQUEST['vpage_pcnbox_pos']) and $vpage_pcnbox == '1' ) { $vpage_pcnbox_pos = mysql_real_escape_string($_REQUEST['vpage_pcnbox_pos']); $cfg_val[]=$vpage_pcnbox_pos; $cfg_tbl[]='vpage_pcnbox_pos'; }
    if (isset($_REQUEST['vpage_userdate'])) { $vpage_userdate = mysql_real_escape_string($_REQUEST['vpage_userdate']); $cfg_val[]=$vpage_userdate; $cfg_tbl[]='vpage_userdate'; }
    if (isset($_REQUEST['vpage_useronline'])) { $vpage_useronline = 1; $cfg_val[]=$vpage_useronline; $cfg_tbl[]='vpage_useronline'; } else { $vpage_useronline = 0; $cfg_val[]=$vpage_useronline; $cfg_tbl[]='vpage_useronline'; }
    if (isset($_REQUEST['vpage_userfcount'])) { $vpage_userfcount = 1; $cfg_val[]=$vpage_userfcount; $cfg_tbl[]='vpage_userfcount'; } else { $vpage_userfcount = 0; $cfg_val[]=$vpage_userfcount; $cfg_tbl[]='vpage_userfcount'; }
    if (isset($_REQUEST['vpage_fdesc'])) { $vpage_fdesc = mysql_real_escape_string($_REQUEST['vpage_fdesc']); $cfg_val[]=$vpage_fdesc; $cfg_tbl[]='vpage_fdesc'; }
    if (isset($_REQUEST['vpage_fresp'])) { $vpage_fresp = mysql_real_escape_string($_REQUEST['vpage_fresp']); $cfg_val[]=$vpage_fresp; $cfg_tbl[]='vpage_fresp'; }
    if (isset($_REQUEST['vpage_fcomm'])) { $vpage_fcomm = mysql_real_escape_string($_REQUEST['vpage_fcomm']); $cfg_val[]=$vpage_fcomm; $cfg_tbl[]='vpage_fcomm'; }
    if (isset($_REQUEST['vpage_ftabs'])) { $vpage_ftabs = 1; $cfg_val[]=$vpage_ftabs; $cfg_tbl[]='vpage_ftabs'; } else { $vpage_ftabs = 0; $cfg_val[]=$vpage_ftabs; $cfg_tbl[]='vpage_ftabs'; }
    if ( $vpage_ftabs == '1' ) {
	if (isset($_REQUEST['vpage_ftabslist']) and $vpage_ftabs == '1' ) { $vpage_ftabslist = mysql_real_escape_string($_REQUEST['vpage_ftabslist']); $cfg_val[]=$vpage_ftabslist; $cfg_tbl[]='vpage_ftabslist'; }
	if (isset($_REQUEST['vpage_ftabs_t1'])) { $vpage_ftabs_t1 = 1; $cfg_val[]=$vpage_ftabs_t1; $cfg_tbl[]='vpage_ftabs_t1'; } else { $vpage_ftabs_t1 = 0; $cfg_val[]=$vpage_ftabs_t1; $cfg_tbl[]='vpage_ftabs_t1'; }
	if (isset($_REQUEST['vpage_ftabs_t5'])) { $vpage_ftabs_t5 = 1; $cfg_val[]=$vpage_ftabs_t5; $cfg_tbl[]='vpage_ftabs_t5'; } else { $vpage_ftabs_t5 = 0; $cfg_val[]=$vpage_ftabs_t1; $cfg_tbl[]='vpage_ftabs_t5'; }
    }
    if (isset($_REQUEST['vpage_ftags'])) { $vpage_ftags = 1; $cfg_val[]=$vpage_ftags; $cfg_tbl[]='vpage_ftags'; } else { $vpage_ftags = 0; $cfg_val[]=$vpage_ftags; $cfg_tbl[]='vpage_ftags'; }
    if (isset($_REQUEST['vpage_ftags_box'])) { $vpage_ftags_box = mysql_real_escape_string($_REQUEST['vpage_ftags_box']); $cfg_val[]=$vpage_ftags_box; $cfg_tbl[]='vpage_ftags_box'; }
    if (isset($_REQUEST['vpage_fresp_box'])) { $vpage_fresp_box = mysql_real_escape_string($_REQUEST['vpage_fresp_box']); $cfg_val[]=$vpage_fresp_box; $cfg_tbl[]='vpage_fresp_box'; }
    if (isset($_REQUEST['vpage_fcomm_box'])) { $vpage_fcomm_box = mysql_real_escape_string($_REQUEST['vpage_fcomm_box']); $cfg_val[]=$vpage_fcomm_box; $cfg_tbl[]='vpage_fcomm_box'; }
    if (isset($_REQUEST['vpage_fqlist_box'])) { $vpage_fqlist_box = mysql_real_escape_string($_REQUEST['vpage_fqlist_box']); $cfg_val[]=$vpage_fqlist_box; $cfg_tbl[]='vpage_fqlist_box'; }
    if (isset($_REQUEST['vpage_fplist_box'])) { $vpage_fplist_box = mysql_real_escape_string($_REQUEST['vpage_fplist_box']); $cfg_val[]=$vpage_fplist_box; $cfg_tbl[]='vpage_fplist_box'; }
    if (isset($_REQUEST['vpage_ftabs_t1_box'])) { $vpage_ftabs_t1_box = mysql_real_escape_string($_REQUEST['vpage_ftabs_t1_box']); $cfg_val[]=$vpage_ftabs_t1_box; $cfg_tbl[]='vpage_ftabs_t1_box'; }
    if (isset($_REQUEST['vpage_ftabs_t5_box'])) { $vpage_ftabs_t5_box = mysql_real_escape_string($_REQUEST['vpage_ftabs_t5_box']); $cfg_val[]=$vpage_ftabs_t5_box; $cfg_tbl[]='vpage_ftabs_t5_box'; }
//    if (isset($_REQUEST['vpage_ftabs_t1_box'])) { $vpage_ftabs_t1_box = 1; } else { $vpage_ftabs_t1_box = 0; }
//    if (isset($_REQUEST['vpage_ftabs_t5_box'])) { $vpage_ftabs_t5_box = 1; } else { $vpage_ftabs_t5_box = 0; }
    
    if ( $vpage_pcnbox == '1' ) {
	$conn->execute("update configurations set value='$vpage_pcnbox' where configurations.option='vpage_pcnbox'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
	$conn->execute("update configurations set value='$vpage_pcnbox_pos' where configurations.option='vpage_pcnbox_pos'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    } else { $conn->execute("update configurations set value='$vpage_pcnbox' where configurations.option='vpage_pcnbox'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    $conn->execute("update configurations set value='$vpage_userdate' where configurations.option='vpage_userdate'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    $conn->execute("update configurations set value='$vpage_useronline' where configurations.option='vpage_useronline'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    $conn->execute("update configurations set value='$vpage_userfcount' where configurations.option='vpage_userfcount'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    $conn->execute("update configurations set value='$vpage_fdesc' where configurations.option='vpage_fdesc'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    $conn->execute("update configurations set value='$vpage_fresp' where configurations.option='vpage_fresp'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    $conn->execute("update configurations set value='$vpage_fcomm' where configurations.option='vpage_fcomm'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    if ( $vpage_ftabs == '1' ) {
	$conn->execute("update configurations set value='$vpage_ftabs' where configurations.option='vpage_ftabs'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
	$conn->execute("update configurations set value='$vpage_ftabslist' where configurations.option='vpage_ftabslist'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
	$conn->execute("update configurations set value='$vpage_ftabs_t1' where configurations.option='vpage_ftabs_t1'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
	$conn->execute("update configurations set value='$vpage_ftabs_t5' where configurations.option='vpage_ftabs_t5'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
	if ( $vpage_ftabs_t1 == '1' ) $conn->execute("update configurations set value='$vpage_ftabs_t1_box' where configurations.option='vpage_ftabs_t1_box'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
	if ( $vpage_ftabs_t5 == '1' ) $conn->execute("update configurations set value='$vpage_ftabs_t5_box' where configurations.option='vpage_ftabs_t5_box'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    } else { $conn->execute("update configurations set value='$vpage_ftabs' where configurations.option='vpage_ftabs'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1]; }
    $conn->execute("update configurations set value='$vpage_ftags' where configurations.option='vpage_ftags'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    if ( $vpage_ftags == '1' ) {
	$conn->execute("update configurations set value='$vpage_ftags_box' where configurations.option='vpage_ftags_box'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    }
    $conn->execute("update configurations set value='$vpage_fresp_box' where configurations.option='vpage_fresp_box'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    $conn->execute("update configurations set value='$vpage_fcomm_box' where configurations.option='vpage_fcomm_box'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    $conn->execute("update configurations set value='$vpage_fqlist_box' where configurations.option='vpage_fqlist_box'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    $conn->execute("update configurations set value='$vpage_fplist_box' where configurations.option='vpage_fplist_box'"); if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
/*    
    for($j=0;$cfg_val[$j];$j++) {
//	$conn->execute("update configurations set value='".$cfg_val[$j]."' where configurations.option='".$cfg_tbl[$j]."'");
	echo "update configurations set value='".$cfg_val[$j]."' where configurations.option='".$cfg_tbl[$j]."'"."<br>";
//	if ($conn->Affected_Rows() > 0) $msg=$lang[admnot_setoptions1];
    }
*/    

    if ($err == '' && $msg != '') {
	$msg=$lang['admnot_setoptions1'];
	echo show_msg ( $msg ); 
	exit;
    }
    elseif ( $err != '' ) { echo show_err ( $err ); exit; }
    exit;
}
?>