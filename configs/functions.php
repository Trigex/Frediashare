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
include("rating_mod.php");

function set_btn($btn)
{
    global $smarty;
    $smarty->assign('btn',$btn);
    }
function set_sbtn($sbtn)
{
    global $smarty;
    $smarty->assign('sbtn',$sbtn);
}
function set_title($title)
{
    global $smarty;
    $smarty->assign('title',$title);
}
    
function check_active()
{
    global $conn;
    global $smarty;
    global $config;
    global $lang;
    
    $rs=$conn->execute("select is_active from members where uid='$_SESSION[UID]'");
    $active=$rs->fields[is_active];
    $rs->Close();
    
    if ($active=="0")
    {
	$rnd=time().rand(1,99999999);
	set_btn("bhome"); set_title($lang['title_signuperr']); $smarty->assign('dmenu', 'mymsg');
	$err=$lang['err_signup16']."<a href=\"$config[base_url]/signup/resend/$rnd\">$lang[err_signup16_1]</a>";
	$smarty->assign('err',$err);
	$smarty->display('main_header.tpl');
	$smarty->display('footer.tpl');
	exit;
    }
}
function check_login($s = '')
{
    global $conn;
    global $config;
    global $smarty;
    
    check_active();
    if ($_SESSION[UID]=="")
    {
        header("Location: $config[base_url]/login?next=".$s);
        exit;
    }
}
function check_admin_login()
{
    global $config;
    
    if($_SESSION['AUID']!=$config[admin_name] || $_SESSION['APASSWORD']!=$config[admin_pass])
    {
        header("Location: $config[base_url]/administration/main");
        exit;
    }
}
//language function starts
function checklang() {
    global $conn;
    global $config;
    global $smarty;
    
    $rs=$conn->execute("select * from languages where active='1' order by name;");
    $lang=$rs->getrows();
    $smarty->assign('langsel',$lang);
}
//language function ends
function check_email_address($email) 
{
    $result = true;
    if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)) 
    {
	$result = false;
    }
    return $result;
}
	    
function check_field_exists($fvalue,$field,$table)
{
        global $conn;
	
        $sql="select count(*) as cnt from $table where $field='$fvalue'";
	$res=$conn->execute($sql);
	if($res->fields[cnt]>0) return 1; else return 0;
}

function mailto($to,$name,$from,$subj,$body) 
{
    global $SERVER_NAME;
    global $config;
    
    $phpversion = substr((preg_replace('/[a-z-]/', '', phpversion())), 0, 1);
    
    if ($phpversion < 5) include_once($config['base_dir'].'/configs/classes/phpmailer/php4/class.phpmailer.php');
    else include_once($config['base_dir'].'/configs/classes/phpmailer/php5/class.phpmailer.php');
    
    $mail = new phpmailer();
    $mail->CharSet = "UTF-8";
//    $mail->Timeout = 20;
    if ($phpversion < 5) $mail->SetLanguage("en", $config['base_dir'].'/configs/classes/phpmailer/php4/language/');
    else $mail->SetLanguage("en", $config['base_dir'].'/configs/classes/phpmailer/php5/language/');
    $mail->IsMail();
    
    if ($config['mail_option'] == 'mail_sendmail') 
    {
	$mail->IsSendmail();
	$mail->Sendmail = $config['mail_pathsendmail'];
	$mail->From = $from;
	$mail->FromName = $name;
	$mail->Sender = $from;
	$mail->AddReplyTo($from, $name);
    }
    elseif ($config['mail_option'] == 'mail_smtp') 
    {
	$mail->IsSMTP();
	$mail->Host = $config['mail_smtpserver'];
	$mail->Port = $config['mail_smtp_port'];
	if ($config['mail_smtpauth'] == 1)
	{
	    $mail->SMTPAuth = true;
	    $mail->Username = $config['mail_smtpuser'];
	    $mail->Password = $config['mail_smtpkey'];
	}
	$mail->From = $config['mail_smtpfromemail'];
	$mail->FromName = $config['mail_smtpfromname'];
	$mail->Sender = $config['mail_smtpfromemail'];
	$mail->AddReplyTo($config['mail_smtpfromemail'], $config['mail_smtpfromname']);
	$mail->SMTPSecure = $config['mail_smtpsecure'];
    }
    else
    {
	$mail->From = $from;
	$mail->FromName = $name;
	$mail->Sender = $from;
	$mail->AddReplyTo($from, $name);
    }
    $mail->AddAddress($to);
    $mail->IsHTML(true);
//    if ($bcc) { $mail->AddAddress($bcc); }
    $mail->Subject = $subj;
    $mail->Body = $body;

    if(!$mail->Send()) $err=$mail->ErrorInfo;
    $mail->ClearAddresses();
    
    return $err;
}
function send_notification($email, $receiver, $sender='', $type, $id='', $file='')
{
    global $conn, $config, $smarty;
    
    $name=$config['site_name'];
    $from=$config['admin_email'];
    
    if ($type=='mail_not1') $rs = $conn->execute("select * from email_files where email_id='mail_not1'");
    if ($type=='mail_not2') $rs = $conn->execute("select * from email_files where email_id='mail_not2'");
    if ($type=='mail_not3') $rs = $conn->execute("select * from email_files where email_id='mail_not3'");
    if ($type=='mail_not4') $rs = $conn->execute("select * from email_files where email_id='mail_not4'");
    if ($type=='mail_not5') $rs = $conn->execute("select * from email_files where email_id='mail_not5'");
    if ($type=='mail_not6') $rs = $conn->execute("select * from email_files where email_id='mail_not6'");
    
    $subj = $rs->fields['email_subject'];
    
    if ($type == 'mail_not1') //private message notif.
    {
	$smarty->assign('rcv', $receiver);
	$smarty->assign('snd', $sender);
	$msb = $conn->execute("select subject, body, faudio, fimage, fvideo from pmessages where mid='$id'");
	$smarty->assign('subj', $msb->fields['subject']);
	$smarty->assign('body', $msb->fields['body']);
	
	if ($msb->fields['faudio'] != '0') $ax=1; else $ax=0;
	if ($msb->fields['fimage'] != '0') $ix=1; else $ix=0;
	if ($msb->fields['fvideo'] != '0') $vx=1; else $vx=0;
	$tx = $ax+$ix+$vx;
	$smarty->assign('tx', $tx);
	
	$subj = str_replace('$username',$receiver,$subj);
    }
    
    if ($type == 'mail_not2') //file comments notif.
    {
	$smarty->assign('rcv', $receiver);
	$smarty->assign('snd', $sender);
	
	if ($file == 'audio') { $ctbl = 'comm_audio'; $ftbl = 'files_audio'; }
	elseif ($file == 'image') { $ctbl = 'comm_img'; $ftbl = 'files_image'; }
	elseif ($file == 'video') { $ctbl = 'comm_vid'; $ftbl = 'files_video'; }
	$smarty->assign('ctype', $file);
	
	$msb = $conn->execute("select comment,vid from $ctbl where comid='$id'");
	$smarty->assign('body', $msb->fields['comment']);
	$mvid = $msb->fields['vid'];
	
	$mt = $conn->execute("select vtitle, vkey from $ftbl where vid='$mvid'");
	$mtitle = $mt->fields['vtitle'];
	$mkey = $mt->fields['vkey'];
	$mt->Close();
	
	$smarty->assign('srcfile', $mtitle);
	
	if ($config['special_characters'] == 0) { $smarty->assign('ctitle', str_replace(' ', '_', $mtitle)); }
	else { $smarty->assign('ctitle', $mkey); }
	
	$subj = str_replace('$username',$receiver,$subj);
    }
    
    if ($type == 'mail_not3') //profile comments notif.
    {
	$smarty->assign('rcv', $receiver);
	$smarty->assign('snd', $sender);
	$msb = $conn->execute("select comment,uid from comm_profile where comid='$id'");
	$smarty->assign('body', $msb->fields['comment']);
	if ($config['special_characters'] == 0) $smarty->assign('lnk',$receiver);
	else $smarty->assign('lnk',$msb->fields['uid']);
	$subj = str_replace('$username',$receiver,$subj);
    }
    
    if ($type == 'mail_not4') //new member notif.
    {
	$smarty->assign('rcv', $receiver);
	$smarty->assign('muid', $id);
	$msb = $conn->execute("select username,email,from_ip from members where uid='$id'");
	$smarty->assign('muser', $msb->fields['username']);
	$smarty->assign('memail', $msb->fields['email']);
	$smarty->assign('mip', $msb->fields['from_ip']);
	if ($config['special_characters'] == 0) $smarty->assign('lnk',$msb->fields['username']);
	else $smarty->assign('lnk', $id);
	$subj = str_replace('$admin',$receiver,$subj);
    }
    
    if ($type == 'mail_not5') //new files notif.
    {
	$smarty->assign('rcv', $receiver);
	$smarty->assign('snd', $sender);
	$smarty->assign('ctype', $file);
	$tbl='files_'.$file;
	$msb = $conn->execute("select vkey,vtitle,vdescr,vtags from $tbl where vid='$id'");
	$smarty->assign('fkey', $msb->fields['vkey']);
	$smarty->assign('ftitle', $msb->fields['vtitle']);
	$smarty->assign('fdesc', $msb->fields['vdescr']);
	$smarty->assign('ftags', $msb->fields['vtags']);
	if ($config['special_characters'] == 0) $smarty->assign('flnk', str_replace(' ', '_', $msb->fields['vtitle']));
	else $smarty->assign('flnk', $msb->fields['vkey']);
	
	$subj = str_replace('$admin',$receiver,$subj);
    }
    
    if ($type == 'mail_not6') //requests notif.
    {
	$reqi = 'inappropriate';
	$reqf = 'featured';
	$smarty->assign('rcv', $receiver);
	$smarty->assign('snd', $sender);
	$msb = $conn->execute("select reason, vid from $file where reqid='$id'");
	$smarty->assign('reason', $msb->fields['reason']);
	$mvid = $msb->fields['vid'];
	if ($file == 'request_video_I') { $smarty->assign('rqt', $reqi); $ctype = 'video'; }
	if ($file == 'request_video_F') { $smarty->assign('rqt', $reqf); $ctype = 'video'; }
	if ($file == 'request_image_I') { $smarty->assign('rqt', $reqi); $ctype = 'image'; }
	if ($file == 'request_image_F') { $smarty->assign('rqt', $reqf); $ctype = 'image'; }
	if ($file == 'request_audio_I') { $smarty->assign('rqt', $reqi); $ctype = 'audio'; }
	if ($file == 'request_audio_F') { $smarty->assign('rqt', $reqf); $ctype = 'audio'; }
	
	if ($ctype == 'video') { $ct = $conn->execute("select vtitle, vkey from files_video where vid='$mvid'"); $vt = $ct->fields['vtitle']; $vk = $ct->fields['vkey']; }
	if ($ctype == 'image') { $ct = $conn->execute("select vtitle, vkey from files_image where vid='$mvid'"); $vt = $ct->fields['vtitle']; $vk = $ct->fields['vkey']; }
	if ($ctype == 'audio') { $ct = $conn->execute("select vtitle, vkey from files_audio where vid='$mvid'"); $vt = $ct->fields['vtitle']; $vk = $ct->fields['vkey']; }
	
	$smarty->assign('ctype', $ctype);
	$smarty->assign('rfile', $vt);
	if ($config['special_characters'] == 0) { $smarty->assign('lnk', str_replace(' ', '_', $vt)); }
	else { $smarty->assign('lnk', $vk); }
	
	$subj = str_replace('$admin',$receiver,$subj);
    }
    
    $subj = str_replace('$config[site_name]',$config['site_name'],$subj);
    $email_path = $rs->fields['email_path']; 
    $mailbody=$smarty->fetch($email_path);

    if (mailto($email,$name,$from,$subj,$mailbody)=='') $msg = 1;
    else $msg = 0;
    
    return $msg;
}
function thumbs($infile, $outfile, $width, $height)
{
    global $config;
    require_once('classes/phpthumb.class.php');
    
    $phpThumb = new phpThumb(); 
    $phpThumb->setSourceFilename($infile);
    $phpThumb->setParameter('w', $width);
    $phpThumb->setParameter('h', $height);
    $phpThumb->setParameter('far', '1');
    $phpThumb->setParameter('bg', $config['thumb_bg']);
    
//    if ($config[site_theme]=="black") { $phpThumb->setParameter('bg', '111111'); }
//    elseif ($config[site_theme]=="blue") { $phpThumb->setParameter('bg', 'ebf6fd'); }
//    elseif ($config[site_theme]=="orange") { $phpThumb->setParameter('bg', 'efefef'); }
//    else { $phpThumb->setParameter('bg', 'ffffff'); }
    
    if ($phpThumb->GenerateThumbnail()) { $phpThumb->RenderToFile($outfile); }
}

function insert_thsortdate($str)
{
    global $smarty, $config, $lang;
    if($str[ts]=="" || $str[ts]=="all_time") $myfrom=$lang['thgtfrom'].$lang['time_all'];
    elseif($str[ts]=="today") $myfrom=$lang['thgtadded'].$lang['time_today'];
    elseif($str[ts]=="this_week") $myfrom=$lang['thgtadded'].$lang['time_thisweek'];
    elseif($str[ts]=="last_week") $myfrom=$lang['thgtadded'].$lang['time_lastweek'];
    elseif($str[ts]=="this_month") $myfrom=$lang['thgtadded'].$lang['time_thismonth'];
    elseif($str[ts]=="last_month") $myfrom=$lang['thgtadded'].$lang['time_lastmonth'];
    elseif($str[ts]=="this_year") $myfrom=$lang['thgtadded'].$lang['time_thisyear'];
    elseif($str[ts]=="last_year") $myfrom=$lang['thgtadded'].$lang['time_lastyear'];
    
    return $myfrom;
}

function insert_thsortfilters($str)
{
    global $smarty, $config, $lang;
    if($str[ts]=="" || $str[ts]=="all") $myflt=$lang['thgtorder'].$lang['thgtordertitle'];
    elseif($str[ts]=="active") $myflt=$lang['thgtmarked'].$lang['adm_sortactive'];
    elseif($str[ts]=="auditions") $myflt=$lang['thgtorder'].$lang['adm_sortauditions'];
    elseif($str[ts]=="views") $myflt=$lang['thgtorder'].$lang['adm_sortviews'];
    elseif($str[ts]=="comments") $myflt=$lang['thgtorder'].$lang['adm_sortcomm'];
    elseif($str[ts]=="responses") $myflt=$lang['thgtorder'].$lang['fresp_txt30'];
    elseif($str[ts]=="date") $myflt=$lang['thgtorder'].$lang['adm_sortdate'];
    elseif($str[ts]=="favorited") $myflt=$lang['thgtmarked'].$lang['adm_sortfav'];
    elseif($str[ts]=="featured") $myflt=$lang['thgtmarked'].$lang['adm_sortfeat'];
    elseif($str[ts]=="inactive") $myflt=$lang['thgtmarked'].$lang['adm_sortinactive'];
    elseif($str[ts]=="inappropriate") $myflt=$lang['thgtmarked'].$lang['adm_sortinapp'];
    elseif($str[ts]=="private") $myflt=$lang['thgtmarked'].$lang['adm_sortpriv'];
    elseif($str[ts]=="public") $myflt=$lang['thgtmarked'].$lang['adm_sortpub'];
    elseif($str[ts]=="ratings") $myflt=$lang['thgtorder'].$lang['adm_sortrate'];
    else $myflt=$lang['thgtorder'].$lang['thgtordertitle'];
    
    return $myflt;
}
function insert_video_channel($a)
{
    global $conn;
    global $smarty;
    
    if($a[tbl]=="") $sqlx="vcategs from files_video where vid='$a[vid]'";
    $sql="select $sqlx";
    $rs=$conn->execute($sql);
    $a=$rs->fields[vcategs];
    if($a!="")
    {
        $temp=explode(",",$a);
        if(count($temp)>=1) for($i=1;$i<count($temp);$i++) $list.=" or cid=".$temp[$i];
            $sql="select cid,name from categories where cid=$temp[0] $list";
	
        $rsx=$conn->execute($sql);
        $res=$rsx->getrows();
        return $res;
    }
}
function insert_audio_channel($a)
{
    global $conn;
    global $smarty;
    
    if($a[tbl]=="") $sqlx="vcategs from files_audio where vid='$a[vid]'";
    $sql="select $sqlx";
    $rs=$conn->execute($sql);
    $a=$rs->fields[vcategs];
    if($a!="")
    {
        $temp=explode(",",$a);
        if(count($temp)>=1) for($i=1;$i<count($temp);$i++) $list.=" or cid=".$temp[$i];
            $sql="select cid,name from categories where cid=$temp[0] $list";
	
        $rsx=$conn->execute($sql);
        $res=$rsx->getrows();
        return $res;
    }
}
function insert_image_channel($a)
{
    global $conn;
    global $smarty;
    
    if($a[tbl]=="") $sqlx="vcategs from files_image where vid='$a[vid]'";
    $sql="select $sqlx";
    $rs=$conn->execute($sql);
    $a=$rs->fields[vcategs];
    if($a!="")
    {
        $temp=explode(",",$a);
        if(count($temp)>=1) for($i=1;$i<count($temp);$i++) $list.=" or cid=".$temp[$i];
            $sql="select cid,name from categories where cid=$temp[0] $list";
	
        $rsx=$conn->execute($sql);
        $res=$rsx->getrows();
        return $res;
    }
}

function insert_list_categ_all_video()
{
    global $conn;
    $sql="select * from categories where active='1' and video_uploads='yes' order by name asc";
    $rs=$conn->execute($sql);
    $i=0;
    while(!$rs->EOF)
    {
	$list[$i]['ch']=$rs->fields[name];
	$list[$i]['id']=$rs->fields[cid];
	$i++;
	$rs->movenext();
    }
    return $list;
}
function insert_list_categ_all_audio()
{
    global $conn;
    $sql="select * from categories where active='1' and audio_uploads='yes' order by name asc";
    $rs=$conn->execute($sql);
    $i=0;
    while(!$rs->EOF)
    {
	$list[$i]['ch']=$rs->fields[name];
	$list[$i]['id']=$rs->fields[cid];
	$i++;
	$rs->movenext();
    }
    return $list;
}
function insert_list_categ_all_image()
{
    global $conn;
    $sql="select * from categories where active='1' and image_uploads='yes' order by name asc";
    $rs=$conn->execute($sql);
    $i=0;
    while(!$rs->EOF)
    {
	$list[$i]['ch']=$rs->fields[name];
	$list[$i]['id']=$rs->fields[cid];
	$i++;
	$rs->movenext();
    }
    return $list;
}
function insert_vid_count()
{
    global $conn;
    global $config;
    global $lang; 
    $active = "and active='1' and is_inapp='no'";

    $sql="select count(*) as lvt from files_video WHERE vtype='public' $active and rsource='local'";
    $rs=$conn->execute($sql); $list[0]=$rs->fields[lvt];
    $sql="select count(*) as dmt from files_video WHERE vtype='public' $active and rsource='DailyMotion'";
    $rs=$conn->execute($sql); $list[1]=$rs->fields[dmt];
    $sql="select count(*) as gvt from files_video WHERE vtype='public' $active and rsource='GoogleVideo'";
    $rs=$conn->execute($sql); $list[2]=$rs->fields[gvt];
    $sql="select count(*) as ytt from files_video WHERE vtype='public' $active and rsource='YouTube'";
    $rs=$conn->execute($sql); $list[3]=$rs->fields[ytt];
    $sql="select count(*) as rtt from files_video WHERE vtype='public' $active and rsource='RedTube'";
    $rs=$conn->execute($sql); $list[4]=$rs->fields[rtt];
    $sql="select count(*) as gt from files_video WHERE vtype='public' $active and rsource!=''";
    $rs=$conn->execute($sql); $list[5]=$rs->fields[gt];
    
    return $list;
}
function insert_categ_vid_count($a)
{
    global $conn;
    global $config;
    global $lang; 
    $active = "and active='1' and is_inapp='no'";
    
    if ($config[special_characters]=="0")
    {
	$rc=$conn->execute("select cid from categories where name='$a[categ]'");
	$cid=$rc->fields[cid];
	$qu="and vcategs like '%$cid%'";
    } else $qu="and vcategs like '%$a[categ]%'";
    

    //$sql="select count(*) as chtotal from files_video WHERE vtype='public' $active and vcategs like '%$a[cid]%'";
    $sql="select count(*) as lvt from files_video WHERE vtype='public' $active and rsource='local' $qu";
    $rs=$conn->execute($sql); $list[0]=$rs->fields[lvt];
    $sql="select count(*) as dmt from files_video WHERE vtype='public' $active and rsource='DailyMotion' $qu";
    $rs=$conn->execute($sql); $list[1]=$rs->fields[dmt];
    $sql="select count(*) as gvt from files_video WHERE vtype='public' $active and rsource='GoogleVideo' $qu";
    $rs=$conn->execute($sql); $list[2]=$rs->fields[gvt];
    $sql="select count(*) as ytt from files_video WHERE vtype='public' $active and rsource='YouTube' $qu";
    $rs=$conn->execute($sql); $list[3]=$rs->fields[ytt];
    $sql="select count(*) as rtt from files_video WHERE vtype='public' $active and rsource='RedTube' $qu";
    $rs=$conn->execute($sql); $list[4]=$rs->fields[rtt];
    $sql="select count(*) as gt from files_video WHERE vtype='public' $active and rsource!='' $qu";
    $rs=$conn->execute($sql); $list[5]=$rs->fields[gt];
    
    return $list;
}
function insert_user_vid_count($a)
{
    global $conn;
    global $config;
    global $lang; 
    $active = "and active='1' and is_inapp='no'";
    $vt="vtype='public'";
    if ($config[special_characters]=="0") 
    { 
	$ru=$conn->execute("select uid from members where username='$a[username]'");
	$uid=$ru->fields[uid];
	$qu="and uid='$uid'";
    } else { $qu="and uid=$a[username]"; $uid=$a[username]; } 
    
    $fsql="select * from friends where uid='$uid' and fname='$_SESSION[USERNAME]' and is_active='1'"; 
    $frs=$conn->execute($fsql);
    
    if ($frs->recordcount()>0) { $vt="vtype!=''"; }
    elseif ($uid==$_SESSION[UID]) { $vt="vtype!=''"; }
    else { $vt="vtype='public'"; }
    
    $sql="select count(*) as lvt from files_video WHERE $vt $qu $active and rsource='local'";
    $rs=$conn->execute($sql); $list[0]=$rs->fields[lvt];
    $sql="select count(*) as dmt from files_video WHERE $vt $qu $active and rsource='DailyMotion'";
    $rs=$conn->execute($sql); $list[1]=$rs->fields[dmt];
    $sql="select count(*) as gvt from files_video WHERE $vt $qu $active and rsource='GoogleVideo'";
    $rs=$conn->execute($sql); $list[2]=$rs->fields[gvt];
    $sql="select count(*) as ytt from files_video WHERE $vt $qu $active and rsource='YouTube'";
    $rs=$conn->execute($sql); $list[3]=$rs->fields[ytt];
    $sql="select count(*) as rtt from files_video WHERE $vt $qu $active and rsource='RedTube'";
    $rs=$conn->execute($sql); $list[4]=$rs->fields[rtt];
    $sql="select count(*) as gt from files_video WHERE $vt $qu $active and rsource!=''";
    $rs=$conn->execute($sql); $list[5]=$rs->fields[gt];
    
    return $list;
}
function insert_categ_count($a)
{
    global $conn;
    global $config;
    global $lang; 
    $active = "and active='1' and is_inapp='no'";
    
    $dt=date("Y-m-d");
    $sql="select count(*) as vtotal from files_video WHERE vtype='public' $active and vcategs like '%$a[cid]%' and adddate='$dt'";
    $rs=$conn->execute($sql);
    $list[0]=$rs->fields[vtotal];
    $sql="select count(*) as atotal from files_audio WHERE vtype='public' $active and vcategs like '%$a[cid]%' and adddate='$dt'";
    $rs=$conn->execute($sql);
    $list[4]=$rs->fields[atotal];
    $sql="select count(*) as itotal from files_image WHERE vtype='public' $active and vcategs like '%$a[cid]%' and adddate='$dt'";
    $rs=$conn->execute($sql);
    $list[5]=$rs->fields[itotal];
    
    $sql="select count(*) as chtotal from files_video WHERE vtype='public' $active and vcategs like '%$a[cid]%'";
    $rs=$conn->execute($sql);
    $list[1]=$rs->fields[chtotal];
    $sql="select count(*) as chtotali from files_image WHERE vtype='public' $active and vcategs like '%$a[cid]%'";
    $rs=$conn->execute($sql);
    $list[2]=$rs->fields[chtotali];
    $sql="select count(*) as chtotala from files_audio WHERE vtype='public' $active and vcategs like '%$a[cid]%'";
    $rs=$conn->execute($sql);
    $list[3]=$rs->fields[chtotala];
    
    return $list;
}
function insert_categ_count1($a)
{
    global $conn;
    global $config;
    
    $dt=date("Y-m-d");
    $sql="select count(*) as vtotal from files_video WHERE vcategs like '%$a[cid]%' and adddate='$dt'";
    $rs=$conn->execute($sql);
    $list[0]=$rs->fields[vtotal];
    $sql="select count(*) as atotal from files_audio WHERE  vcategs like '%$a[cid]%' and adddate='$dt'";
    $rs=$conn->execute($sql);
    $list[4]=$rs->fields[atotal];
    $sql="select count(*) as itotal from files_image WHERE vcategs like '%$a[cid]%' and adddate='$dt'";
    $rs=$conn->execute($sql);
    $list[5]=$rs->fields[itotal];
    
    $sql="select count(*) as chtotal from files_video WHERE vcategs like '%$a[cid]%'";
    $rs=$conn->execute($sql);
    $list[1]=$rs->fields[chtotal];
    $sql="select count(*) as chtotali from files_image WHERE vcategs like '%$a[cid]%'";
    $rs=$conn->execute($sql);
    $list[2]=$rs->fields[chtotali];
    $sql="select count(*) as chtotala from files_audio WHERE vcategs like '%$a[cid]%'";
    $rs=$conn->execute($sql);
    $list[3]=$rs->fields[chtotala];
    
    return $list;
}
function insert_categ_count_audio($a)
{
    global $conn;
    global $config;
    global $lang;
    $active = "and active='1' and is_inapp='no'";
    $dt=date("Y-m-d");
    $sql="select count(*) as dytotal from files_audio WHERE vtype='public' and vcategs like '%$a[cid]%' and adddate='$dt' $active";
    $rs=$conn->execute($sql);
    $list[0]=$rs->fields[dytotal];
    $sql="select count(*) as chtotal from files_audio WHERE vtype='public' and vcategs like '%$a[cid]%' $active";
    $rs=$conn->execute($sql);
    $list[1]=$rs->fields[chtotal];
    return $list;
}
function insert_categ_count_audio1($a)
{
    global $conn;
    global $config;
    $dt=date("Y-m-d");
    $sql="select count(*) as dytotal from files_audio WHERE vcategs like '%$a[cid]%' and adddate='$dt'";
    $rs=$conn->execute($sql);
    $list[0]=$rs->fields[dytotal];
    $sql="select count(*) as chtotal from files_audio WHERE vcategs like '%$a[cid]%'";
    $rs=$conn->execute($sql);
    $list[1]=$rs->fields[chtotal];
    return $list;
}
function insert_categ_count_image($a)
{
    global $conn;
    global $config;
    global $lang;
    $active = "and active='1' and is_inapp='no'";
    $dt=date("Y-m-d");
    $sql="select count(*) as dytotal from files_image WHERE vtype='public' and vcategs like '%$a[cid]%' and adddate='$dt' $active";
    $rs=$conn->execute($sql);
    $list[0]=$rs->fields[dytotal];
    $sql="select count(*) as chtotal from files_image WHERE vtype='public' and vcategs like '%$a[cid]%' $active";
    $rs=$conn->execute($sql);
    $list[1]=$rs->fields[chtotal];
    return $list;
}
function insert_categ_count_image1($a)
{
    global $conn;
    global $config;
    $dt=date("Y-m-d");
    $sql="select count(*) as dytotal from files_image WHERE vcategs like '%$a[cid]%' and adddate='$dt'";
    $rs=$conn->execute($sql);
    $list[0]=$rs->fields[dytotal];
    $sql="select count(*) as chtotal from files_image WHERE vcategs like '%$a[cid]%'";
    $rs=$conn->execute($sql);
    $list[1]=$rs->fields[chtotal];
    return $list;
}
function gen_thumb_alt($video,$vid,$count)
{
    global $config;
    global $conn;
    
    if (php_sapi_name() == 'cgi') gen_thumb($video,$vid);
    else
    {
    $sql="select uid from files_video where vid='$vid'";
    $mrs=$conn->execute($sql);
    $muid=$mrs->fields[uid];
    $sql1="select * from members where uid='$muid'";
    $mrs1=$conn->execute($sql1);
    $mdir=$mrs1->fields[folder];
    $mtmb_dir=$config['tmb_dir']."/".$mdir;
    $rnd=substr(md5($vid),13,7);
    $pq = $conn->execute("select pwidth, pheight from player_settings where ID='1';");
    $pw = $pq->fields['pwidth'];
    $ph = $pq->fields['pheight'];
    
    $mov = new ffmpeg_movie($video);
    
    $frcount=$mov->getFrameCount()-1;
    $try = 1;
    $fc = 1;
    $b1=round($frcount/$count);
    $b2=round($frcount-1);
    
    for ( $i = 1; $i <= $count; $i++ )
    {
	if ( $config['thumb_order'] == 'rnd' ) $p = rand ( $b1, $b2 );
	else $p = ($b1 + ( $i * ($b1 / 2) ));
	
        $ff_frame= $mov->getFrame($p);
        if($ff_frame==true)
        {
            $gd_image = $ff_frame->toGDImage();
            $ff=$config[tmpimgpath]."/".$vid.$rnd.".jpg";
            $fd=$mtmb_dir."/".$i."_".$vid.$rnd.".jpg";
            if ( imagejpeg($gd_image, $ff) ) { $err = 'Successfully created thumbnail: '.$fd; } else { $err= 'Error: Could not create thumbnail: '.$fd.' from frame: '.$p; }
            thumbs($ff,$fd,$config[img_max_width],$config[img_max_height]);
        } 
        if ( $config['video_logs'] == 1 and $err != '' ) log_files($config['logs_dir']. '/video_' .$vid. '.log', $err); 
    }
    $fd2=$mtmb_dir."/pl_".$vid.$rnd.".jpg";
    thumbs($ff,$fd2,$pw,$ph);
    }
}
function gen_thumb_ffmpeg($video, $vid, $thumbnr) {
    global $conn, $config;
    $pq = $conn->execute("select pwidth, pheight from player_settings where ID='1';");
    $pw = $pq->fields['pwidth'];
    $ph = $pq->fields['pheight'];
    $sql="select uid, vduration from files_video where vid='$vid'";
    $mrs=$conn->execute($sql);
    $dur=$mrs->fields[vduration]; 
    $mdur1 = floor($dur/$config['thumb_nr']);
    $mdur2 = floor($dur);
    $mdur = sec2hms( rand($mdur1, $mdur2) );
    $muid=$mrs->fields[uid];
	
    $sql1="select * from members where uid='$muid'";
    $mrs1=$conn->execute($sql1);
    $mdir=$mrs1->fields[folder];
    $mtmb_dir=$config['tmb_dir']."/".$mdir;
    $rnd=substr(md5($vid),13,7);
    
    //player thumb
    $cmd1 = $config['path_ffmpeg'].' -i '.$video.' -s 320x240 -ss '.$mdur.' -an -r 1 -vframes 1 -y '.$mtmb_dir.'/pl%d_'.$vid.$rnd.'.jpg';
    exec($cmd1.' 2>&1', $enc_output1);
    if ($config['video_logs'] == 1) log_files($config['logs_dir']. '/video_' .$vid. '.log', implode("\n", $enc_output1));
    if ( file_exists ($mtmb_dir.'/pl1_'.$vid.$rnd.'.jpg')) {
	rename ($mtmb_dir.'/pl1_'.$vid.$rnd.'.jpg', $mtmb_dir.'/pl_'.$vid.$rnd.'.jpg');
    }
    //rest
    $b1=round($dur/$thumbnr); $b2=round($dur-1);
    
    for ( $i = 1; $i <= $thumbnr; $i++ ) {
	if ( $config['thumb_order'] == 'rnd' ) $p = sec2hms (rand ( $b1, $b2 )); else $p = sec2hms ( ($b1 + ( $i * ($b1 / 2 ) )));
	
	$cmd = $config['path_ffmpeg'].' -i '.$video.' -s '.$config['img_max_width'].'x'.$config['img_max_height'].' -ss '.$p.' -an -r 1 -vframes 1 -y '.$mtmb_dir.'/'.'%d_'.$vid.$rnd.'.jpg';
	
	if ( exec($cmd.' 2>&1', $enc_output) ) { 
	    if ( $i == 1 and file_exists ($mtmb_dir.'/1_'.$vid.$rnd.'.jpg') ) { rename ($mtmb_dir.'/1_'.$vid.$rnd.'.jpg', $mtmb_dir.'/1x_'.$vid.$rnd.'.jpg'); }
	    elseif ( file_exists ($mtmb_dir.'/1_'.$vid.$rnd.'.jpg' )) { rename ($mtmb_dir.'/1_'.$vid.$rnd.'.jpg', $mtmb_dir.'/'.$i.'_'.$vid.$rnd.'.jpg'); }
	}
	if ($config['video_logs'] == 1) log_files($config['logs_dir']. '/video_' .$vid. '.log', implode("\n", $enc_output));
    }
    if ( file_exists ($mtmb_dir.'/1x_'.$vid.$rnd.'.jpg') ) { rename ( $mtmb_dir.'/1x_'.$vid.$rnd.'.jpg', $mtmb_dir.'/1_'.$vid.$rnd.'.jpg'); }
}
function gen_thumb($video, $vid, $count)
{
    global $config;
    global $conn;
    $pq = $conn->execute("select pwidth, pheight from player_settings where ID='1';");
    $pw = $pq->fields['pwidth'];
    $ph = $pq->fields['pheight'];
    $sql="select uid, vduration from files_video where vid='$vid'";
    $mrs=$conn->execute($sql);
    $muid=$mrs->fields[uid];
    $dur=$mrs->fields[vduration];
    
    $sql1="select * from members where uid='$muid'";
    $mrs1=$conn->execute($sql1);
    $mdir=$mrs1->fields[folder];
    $mtmb_dir=$config['tmb_dir']."/".$mdir;
    $rnd=substr(md5($vid),13,7);
    
    $b1=round($dur/$count); $b2=round($dur-1);
    $cmd = $config[path_mplayer]." $video -ss 3 -endpos ".sec2hms($b2)." -nosound -vo jpeg:quality=100:outdir=".$config[tmpimgpath]."/".$vid.$rnd." -frames ".$count;
    //$cmd = $config[path_mplayer]." $video -ss 5 -nosound -vo jpeg:quality=100:outdir=".$config[tmpimgpath]."/".$vid.$rnd." -frames ".$count;

    exec($cmd.' 2>&1', $enc_output);
    
    for ( $i = 1; $i <= $count; $i++ ) {
    	$ff[$i] = $config[tmpimgpath]."/".$vid.$rnd."/0000000".$i.".jpg";
	if(file_exists($ff[$i])) { $cf=$i; $fd=$mtmb_dir."/".$cf."_".$vid.$rnd.".jpg"; thumbs($ff[$i],$fd,$config[img_max_width],$config[img_max_height]); }
    }
    if ($config['video_logs'] == 1) log_files($config['logs_dir']. '/video_' .$vid. '.log', implode("\n", $enc_output));

    $ff2 = $config[tmpimgpath]."/".$vid.$rnd."/00000002.jpg";
    $fd2=$mtmb_dir."/pl_".$vid.$rnd.".jpg"; thumbs($ff2,$fd2,$pw,$ph);
}

function gen_temp_thumb($video, $vid)
{
    global $config;
    global $conn;
	
    $rnd=substr(md5($vid),13,7);
    $sql="select uid from files_video where vid='$vid'";
    $mrs=$conn->execute($sql);
    $muid=$mrs->fields[uid];
	
    $sql1="select * from members where uid='$muid'";
    $mrs1=$conn->execute($sql1);
    $mdir=$mrs1->fields[folder];
    $mtmb_dir=$config['tmb_dir']."/".$mdir;
	
    $fc = 0;
    for($i=1;$i<=27;$i+=8)
    {
	if($fc==0)
            $fd=$mtmb_dir."/".$vid.$rnd.".jpg";
        else
    	    $fd=$mtmb_dir."/".$fc."_".$vid.$rnd.".jpg";

        $ff = $config[img_dir]."/converting.gif";

	thumbs($ff,$fd,$config[img_max_width],$config[img_max_height]);
        $fc++;
    }
}  
function gen_temp_thumba($video, $vid)
{
    global $config;
    global $conn;
	
    $rnd=substr(md5($vid),11,7);
    $sql="select uid from files_audio where vid='$vid'";
    $mrs=$conn->execute($sql);
    $muid=$mrs->fields[uid];
	
    $sql1="select * from members where uid='$muid'";
    $mrs1=$conn->execute($sql1);
    $mdir=$mrs1->fields[folder];
    $mtmb_dir=$config['tmb_dir']."/".$mdir;
	
    $fc = 0;
    for($i=1;$i<=27;$i+=8)
    {
	if($fc==0)
    	    $fd=$mtmb_dir."/".$vid.$rnd.".jpg";
        else
            $fd=$mtmb_dir."/".$fc."_".$vid.$rnd.".jpg";

        $ff = $config[img_dir]."/convertinga.gif";

	thumbs($ff,$fd,$config[img_max_width],$config[img_max_height]);
        $fc++;
    }
}  
function gen_thumba($video, $vid)
{
    global $config;
    global $conn;
	
    $rnd=substr(md5($vid),11,7);
    $sql="select uid from files_audio where vid='$vid'";
    $mrs=$conn->execute($sql);
    $muid=$mrs->fields[uid];
	
    $sql1="select * from members where uid='$muid'";
    $mrs1=$conn->execute($sql1);
    $mdir=$mrs1->fields[folder];
    $mtmb_dir=$config['tmb_dir']."/".$mdir;
	
    $fc = 0;
	
    for($i=1;$i<=27;$i+=8)
    {
        if($fc==0)
	    $fd=$mtmb_dir."/".$vid.$rnd.".jpg";
        else
            $fd=$mtmb_dir."/".$fc."_".$vid.$rnd.".jpg";

        $ff = $config[img_dir]."/audio.gif";

	thumbs($ff,$fd,$config[img_max_width],$config[img_max_height]);
        $fc++;
    }
}  

function insert_resp_check_current($info) {
    global $lang; global $config,$conn;
    $sql="select $info[field] from file_responses where rtype='$info[type]' and active='1' and resuid='$_SESSION[UID]' and rtovid='$info[IDFR]' and rvid='$info[id]';";
    $rs=$conn->execute($sql);
    if ( $rs->recordcount() > 0 ) return 'yes'; else return 'no';
    //return $sql;
}
function insert_resp_check_other($info) {
    global $lang; global $config,$conn;
    $sql="select $info[field] from file_responses where rtype='$info[type]' and active='1' and resuid='$_SESSION[UID]' and rtovid!='$info[IDFR]' and rvid='$info[id]';";
    $rs=$conn->execute($sql);
    if ( $rs->recordcount() > 0 ) return 'yes'; else return 'no';
    //return $sql;
}
function insert_time_range($info)
{
	global $lang;
        global $config,$conn;
        $present=time();
        $sql="select $info[field] from $info[tbl] where $info[IDFR]='$info[id]'";
        $rs=$conn->execute($sql);
        $addtime=$rs->fields[$info[field]];
        $interval=$present-$addtime;
        if($interval>0)
        {
        $day=$interval/(60*60*24);
        if($day>=1) {$range=floor($day).$lang['fileadded_days'];$interval=$interval-(60*60*24*floor($day));}
        if($interval>0 && $range=="")
        {
        $hour=$interval/(60*60);
        if($hour>=1) {$range=floor($hour).$lang['fileadded_hours'];$interval=$interval-(60*60*floor($hour));}
        }
        if($interval>0 && $range=="")
	{
        $min=$interval/(60);
        if($min>=1) {$range=floor($min).$lang['fileadded_minutes'];$interval=$interval-(60*floor($min));}
        }
        if($interval>0 && $range=="")
	{
        $scn=$interval;
        if($scn>=1) {$range=$scn.$lang['fileadded_seconds'];}
        }
        if($range!="")$range=$range." "; else $range=$lang['fileadded_now'];
        return $range;
        }
}
function insert_global_time_range2($addtime) {
    $at = "at";
    return date("d M Y H:m:s A", $addtime[addtime]);
}
function insert_global_time_range($addtime)
{
    global $lang;
        $present=time();
        $interval=$present-$addtime[addtime];
        if($interval>0)
        {
        $day=$interval/(60*60*24);
        if($day>=1) {$range=floor($day).$lang['fileadded_days'];$interval=$interval-(60*60*24*floor($day));}
        if($interval>0 && $range=="")
        {
        $hour=$interval/(60*60);
        if($hour>=1) {$range=floor($hour).$lang['fileadded_hours'];$interval=$interval-(60*60*floor($hour));}
        }
        if($interval>0 && $range=="")
	{
        $min=$interval/(60);
        if($min>=1) {$range=floor($min).$lang['fileadded_minutes'];$interval=$interval-(60*floor($min));}
        }
        if($interval>0 && $range=="")
	{
        $scn=$interval;
        if($scn>=1) {$range=$scn.$lang['fileadded_seconds'];}
        }
        if($range!="")$range=$range." "; else $range=$lang['fileadded_now'];
        return $range;
        }
}
function insert_video_tags($a)
{
    global $conn;
    $sql="select vtags from files_video where vid='$a[vid]'";
    $rs=$conn->execute($sql);
    $a=$rs->fields[vtags];
    $list=explode(" ",$a);
    return $list;
}
function insert_image_tags($a)
{
    global $conn;
    $sql="select vtags from files_image where vid='$a[vid]'";
    $rs=$conn->execute($sql);
    $a=$rs->fields[vtags];
    $list=explode(" ",$a);
    return $list;
}
function insert_audio_tags($a)
{
    global $conn;
    $sql="select vtags from files_audio where vid='$a[vid]'";
    $rs=$conn->execute($sql);
    $a=$rs->fields[vtags];
    $list=explode(" ",$a);
    return $list;
}
function tags($cloudquery, $section='public')
{
    global $config;
    global $conn;
    
    $tags  = array();
    $cloud = array();
    
    $query = mysql_query($cloudquery);
		
    while($t = mysql_fetch_array($query))
    {
	$db = explode(' ', $t[0]);
    	while(list($key, $value) = each($db))
	{
	    $keyword[$value] += 1;
	}
    }
    
    if ($section=='public') $turl = $config['base_url'];
    else $turl = $config['admin_url'];
    //if ($_SESSION['AUID'] != '') $turl = $config['admin_url'];
    //else $turl = $config['base_url'];
    
    if (is_array($keyword))
    {
	$minFont=12;
        $maxFont=24;
	
	$min = min(array_values($keyword));
	$max = max(array_values($keyword));
	$fix = ($max - $min == 0) ? 1 : $max - $min;

	foreach ($keyword as $tag => $count) 
	{
	    $size = $minFont + ($count - $min) * ($maxFont - $minFont) / $fix;
	    $cloud[] = '<a class=cloudtags style="font-size: '. floor($size) .'px;" href="'.$turl.'/search/tags/' . $tag .'" title="The tag '. $tag .' was found '. $count .' time(s)"><span>'. htmlspecialchars(stripslashes($tag)) . '</span></a>';
	}
	$shown = join("\n", $cloud) . "\n";
	return $shown;
    }
}

function delete_vdo($aid,$bid)
{
    global $config,$conn;
    
    $sql1="select * from members where uid='$bid'";
    $mrs1=$conn->execute($sql1);
    $mdir=$mrs1->fields[folder];
    $mvdo_dir=$config['vdo_dir']."/".$mdir;
    $mflvdo_dir=$config['flvdo_dir']."/".$mdir;
    $mtmb_dir=$config['tmb_dir']."/".$mdir;
    $ch_vids = $mrs1->fields['ch_vids'];
    
    $sql = "SELECT vkey, vid, uid, vname, vflvname from files_video WHERE vid = '$aid'";
    $rs = $conn->execute($sql);
    $tmp_uid = $rs->fields[uid];
    $tmp_vdo = $rs->fields[vname];
    $vid = $rs->fields[vid];
    $flv = $rs->fields[vflvname];
    
    $vkey = $rs->fields[vkey];
    $mys = $vkey.',';
    $mys2 = ','.$vkey;
    $mystr = str_replace($mys, '', $ch_vids);
    $mystr = str_replace($mys2, '', $mystr);
    $mystr = str_replace($vkey, '', $mystr);
    $conn->execute("update members set ch_vids='$mystr' where uid='$bid';");
    
    $result = mysql_query("select uid, ch_vfavs from members where ch_vfavs like '%$vkey%';");
    while($row = mysql_fetch_assoc($result)) {
	$ch_vfavs[] = $row['ch_vfavs'];
	$uid[] = $row['uid'];
    }
    $j = 0;
    if ( count ( $ch_vfavs ) > 0 ) {
    foreach ( $ch_vfavs as $myfstr ) {
	$myfstr = str_replace($mys, '', $myfstr);
	$myfstr = str_replace($mys2, '', $myfstr);
	$myfstr = str_replace($vkey, '', $myfstr);
	$conn->execute("update members set ch_vfavs='$myfstr' where uid='$uid[$j]';");
	$j++;
    }
    }
    
    if ($config[delete_files]=="1") {
    $path1 = $mflvdo_dir."/".$flv;
    @chmod($path1, 0777);
    if(file_exists($path1)) @unlink($path1);
    $path2 = $mvdo_dir."/".$tmp_vdo;
    @chmod($path2, 0777);
    if(file_exists($path2)) @unlink($path2);
    }
    
    if($tmp_uid == $bid)
    {
	$table[] = "files_video";
	$table[] = "history_video";
	$table[] = "fav_video";
	$table[] = "request_video_F";
	$table[] = "request_video_I";
	$table[] = "comm_vid";
	$table[] = "quicklist_video";
	
	for($i=0;$table[$i];$i++)
	{
	    $sql = "DELETE from ";
	    $sql.= $table[$i];
	    $sql.= " where vid='$aid'";
	    $conn->Execute($sql);
	}
	$conn->execute("delete from comm_rates where vid='$aid' and type='video';");
	$rc = $conn->execute("select rtovid from file_responses where rtype='video' and rvid='$aid';");
	if ( $rc->recordcount() > 0 ) { $del_res = $rc->fields['rtovid']; } else { $del_res = '0'; }
	$conn->execute("delete from file_responses where rtype='video' and ( rvid='$aid' or rtovid='$aid' );");
	if ( $del_res != '0' ) { $conn->execute("update files_video set responses=responses-1 where vid='$del_res'"); }
	$conn->execute("delete from playlist_files where ptype='video' and vid='$aid';");
	$conn->execute("update pmessages set fvideo='0' where fvideo='$aid'");
	$conn->execute("update members set files_video=files_video-1 where uid='$bid'");
	
	if ($config[delete_files]=="1") {
	$rnd=substr(md5($vid),13,7);

	for ( $i = 1; $i <= $config['thumb_nr']; $i++ )
	{
	    $pic[$i] = $mtmb_dir."/".$i."_".$vid.$rnd.".jpg";
	    if(file_exists($pic[$i])) @unlink($pic[$i]);
	    
	    $tpic[$i] = $config['tmpimgpath']."/".$vid.$rnd."/0000000".$i.".jpg";
	    if(file_exists($tpic[$i])) @unlink($tpic[$i]);
	}
	
	$pic0 = $mtmb_dir."/".$vid.$rnd.".jpg"; if(file_exists($pic0)) @unlink($pic0);
	$pic6 = $mtmb_dir."/pl_".$vid.$rnd.".jpg"; if(file_exists($pic6)) @unlink($pic6);
	$pic7 = $config['logs_dir']. '/video_' .$vid. '.log'; if(file_exists($pic7)) @unlink($pic7);
	$pic8 = $config['tmpimgpath']."/".$vid.$rnd.".jpg"; if(file_exists($pic8)) @unlink($pic8);
	
	@rmdir($config['tmpimgpath']."/".$vid.$rnd);
	}
	return "yes";
    } else {
	return "no";
    }
}
function delete_ado($aid,$bid)
{
    global $config,$conn;
    
    $sql1="select * from members where uid='$bid'";
    $mrs1=$conn->execute($sql1);
    $mdir=$mrs1->fields[folder];
    $mado_dir=$config['ado_dir']."/".$mdir;
    $mflvdo_dir=$config['flvdo_dir']."/".$mdir;
    $ch_vids = $mrs1->fields['ch_auds'];
    
    $sql = "SELECT vkey, uid, vid, vname, vflvname from files_audio WHERE vid='$aid'";
    $rs = $conn->execute($sql);
    
    $tmp_uid = $rs->fields[uid];
    $tmp_vdo = $rs->fields[vname];
    $vid = $rs->fields[vid];
    $flv = $rs->fields[vflvname];
    $mtmb_dir=$config['tmb_dir']."/".$mdir;

    $vkey = $rs->fields[vkey];
    $mys = $vkey.',';
    $mys2 = ','.$vkey;
    $mystr = str_replace($mys, '', $ch_vids);
    $mystr = str_replace($mys2, '', $mystr);
    $mystr = str_replace($vkey, '', $mystr);
    $conn->execute("update members set ch_auds='$mystr' where uid='$bid';");
    
    $result = mysql_query("select uid, ch_afavs from members where ch_afavs like '%$vkey%';");
    while($row = mysql_fetch_assoc($result)) {
	$ch_vfavs[] = $row['ch_afavs'];
	$uid[] = $row['uid'];
    }
    $j = 0;
    if ( count ( $ch_vfavs ) > 0 ) {
    foreach ( $ch_vfavs as $myfstr ) {
	$myfstr = str_replace($mys, '', $myfstr);
	$myfstr = str_replace($mys2, '', $myfstr);
	$myfstr = str_replace($vkey, '', $myfstr);
	$conn->execute("update members set ch_afavs='$myfstr' where uid='$uid[$j]';");
	$j++;
    }
    }
    
    if ($config[delete_files]=="1") {
    $path1 = $mado_dir."/".$flv;
    @chmod($path1, 0777);
    if(file_exists($path1)) @unlink($path1);
    $path2 = $mado_dir."/".$tmp_vdo;
    @chmod($path2, 0777);
    if(file_exists($path2)) @unlink($path2);
    $path3 = $mflvdo_dir."/".$flv;
    @chmod($path3, 0777);
    if(file_exists($path3)) @unlink($path3);
    }
    
    if($tmp_uid == $bid)
    {
	$table[] = "files_audio";
	$table[] = "history_audio";
	$table[] = "fav_audio";
	$table[] = "request_audio_F";
	$table[] = "request_audio_I";
	$table[] = "comm_audio";
	$table[] = "quicklist_audio";
	
	for($i=0;$table[$i];$i++)
	{
	    $sql = "DELETE from ";
	    $sql.= $table[$i];
	    $sql.= " where vid='$aid'";
	    $conn->Execute($sql);
	}
	$conn->execute("delete from comm_rates where vid='$aid' and type='audio';");
	$rc = $conn->execute("select rtovid from file_responses where rtype='audio' and rvid='$aid';");
	if ( $rc->recordcount() > 0 ) { $del_res = $rc->fields['rtovid']; } else { $del_res = '0'; }
	$conn->execute("delete from file_responses where rtype='audio' and ( rvid='$aid' or rtovid='$aid' );");
	if ( $del_res != '0' ) { $conn->execute("update files_audio set responses=responses-1 where vid='$del_res'"); }
	$conn->execute("delete from playlist_files where ptype='audio' and vid='$aid';");
	$conn->execute("update pmessages set faudio='0' where faudio='$aid'");
	$conn->execute("update members set files_audio=files_audio-1 where uid='$bid'");

	if ($config[delete_files]=="1") {	
	$rnd=substr(md5($vid),11,7);
	$pic0 = $mtmb_dir."/".$vid.$rnd.".jpg";
	$pic1 = $mtmb_dir."/1_".$vid.$rnd.".jpg";
	$pic2 = $mtmb_dir."/2_".$vid.$rnd.".jpg";
	$pic3 = $mtmb_dir."/3_".$vid.$rnd.".jpg";
	$pic4 = $config['logs_dir']. '/audio_' .$vid. '.log';
	if(file_exists($pic0)) @unlink($pic0);
	if(file_exists($pic1)) @unlink($pic1);
	if(file_exists($pic2)) @unlink($pic2);
	if(file_exists($pic3)) @unlink($pic3);
	if(file_exists($pic4)) @unlink($pic4);
	
	$picA = $config['tmpimgpath']."/".$vid.$rnd."/00000001.jpg";
        $picB = $config['tmpimgpath']."/".$vid.$rnd."/00000002.jpg";
        $picC = $config['tmpimgpath']."/".$vid.$rnd."/00000003.jpg";
        $picD = $config['tmpimgpath']."/".$vid.$rnd."/00000004.jpg";
        if(file_exists($picA)) @unlink($picA);
        if(file_exists($picB)) @unlink($picB);
        if(file_exists($picC)) @unlink($picC);
        if(file_exists($picD)) @unlink($picD);
	@rmdir($config['tmpimgpath']."/".$vid.$rnd);
	}
	
	return "yes";
    } else {
	return "no";
    }
}
function delete_img($aid,$bid)
{
    global $config,$conn;
    
    $sql1="select * from members where uid='$bid'";
    $mrs1=$conn->execute($sql1);
    $mdir=$mrs1->fields[folder];
    $mvdo_dir=$config['pic_dir']."/".$mdir;
    $mtmb_dir=$config['tmb_dir']."/".$mdir;
    $ch_vids = $mrs1->fields['ch_imgs'];

    $sql = "SELECT vkey, uid, vid, vname, vflvname from files_image WHERE vid = '$aid'";
    $rs = $conn->execute($sql);
    $tmp_uid = $rs->fields[uid];
    $tmp_vdo = $rs->fields[vname];
    $vid = $rs->fields[vid];
    $flv = $rs->fields[vflvname];

    $vkey = $rs->fields[vkey];
    $mys = $vkey.',';
    $mys2 = ','.$vkey;
    $mystr = str_replace($mys, '', $ch_vids);
    $mystr = str_replace($mys2, '', $mystr);
    $mystr = str_replace($vkey, '', $mystr);
    $conn->execute("update members set ch_imgs='$mystr' where uid='$bid';");
    
    $result = mysql_query("select uid, ch_ifavs from members where ch_ifavs like '%$vkey%';");
    while($row = mysql_fetch_assoc($result)) {
	$ch_vfavs[] = $row['ch_ifavs'];
	$uid[] = $row['uid'];
    }
    $j = 0;
    if ( count ( $ch_vfavs ) > 0 ) {
    foreach ( $ch_vfavs as $myfstr ) {
	$myfstr = str_replace($mys, '', $myfstr);
	$myfstr = str_replace($mys2, '', $myfstr);
	$myfstr = str_replace($vkey, '', $myfstr);
	$conn->execute("update members set ch_ifavs='$myfstr' where uid='$uid[$j]';");
	$j++;
    }
    }

    if ($config[delete_files]=="1") {
    $path1 = $mvdo_dir."/".$flv;
    if(file_exists($path1)) { @chmod($path1, 0777); @unlink($path1); }
    $path2 = $mvdo_dir."/".$tmp_vdo;
    if(file_exists($path2)) { @chmod($path2, 0777); @unlink($path2); }
    $path3 = $mtmb_dir."/".$vid."v1.jpg";
    if(file_exists($path3)) { @chmod($path3, 0777); @unlink($path3); }
    $path4 = $mtmb_dir."/".$vid."v2.jpg";    
    if(file_exists($path4)) { @chmod($path4, 0777); @unlink($path4); }
    }
    if($tmp_uid == $bid)
    {
	$table[] = "files_image";
	$table[] = "history_image";
	$table[] = "fav_image";
	$table[] = "request_image_F";
	$table[] = "request_image_I";
	$table[] = "comm_img";
	$table[] = "quicklist_image";
	
	for($i=0;$table[$i];$i++)
	{
	    $sql = "DELETE from ";
	    $sql.= $table[$i];
	    $sql.= " where vid='$aid'";
	    $conn->Execute($sql);
	}
	$conn->execute("delete from comm_rates where vid='$aid' and type='image';");
	$rc = $conn->execute("select rtovid from file_responses where rtype='image' and rvid='$aid';");
	if ( $rc->recordcount() > 0 ) { $del_res = $rc->fields['rtovid']; } else { $del_res = '0'; }
	$conn->execute("delete from file_responses where rtype='image' and ( rvid='$aid' or rtovid='$aid' );");
	if ( $del_res != '0' ) { $conn->execute("update files_image set responses=responses-1 where vid='$del_res'"); }
	$conn->execute("delete from playlist_files where ptype='image' and vid='$aid';");
	$conn->execute("update pmessages set fimage='0' where fimage='$aid'");
	$conn->execute("update members set files_image=files_image-1 where uid='$bid'");
	
	if ($config[delete_files]=="1"){
	$rnd=substr(md5($vid),12,7);
	$pic0 = $mtmb_dir."/".$vid.$rnd.".jpg";
	$pic1 = $mtmb_dir."/1_".$vid.$rnd.".jpg";
	$pic2 = $mtmb_dir."/2_".$vid.$rnd.".jpg";
	$pic3 = $mtmb_dir."/3_".$vid.$rnd.".jpg";
	if(file_exists($pic0)) @unlink($pic0);
	if(file_exists($pic1)) @unlink($pic1);
	if(file_exists($pic2)) @unlink($pic2);
	if(file_exists($pic3)) @unlink($pic3);
	$picA = $config['tmpimgpath']."/".$vid.$rnd."/00000001.jpg";
        $picB = $config['tmpimgpath']."/".$vid.$rnd."/00000002.jpg";
        $picC = $config['tmpimgpath']."/".$vid.$rnd."/00000003.jpg";
        $picD = $config['tmpimgpath']."/".$vid.$rnd."/00000004.jpg";
        if(file_exists($picA)) @unlink($picA);
        if(file_exists($picB)) @unlink($picB);
        if(file_exists($picC)) @unlink($picC);
        if(file_exists($picD)) @unlink($picD);
	@rmdir($config['tmpimgpath']."/".$vid.$rnd);
	}
	return "yes";
    } else {
	return "no";
    }
}

function rmdir_rf($dirname)
{
    if ($dirHandle = opendir($dirname)) 
    {
	chdir($dirname);
	while ($file = readdir($dirHandle)) {
	    if ($file == '.' || $file == '..' || $file == '.htaccess') continue;
	    if (is_dir($file)) rmdir_rf($file);
	    else unlink($file);
	}
	chdir('..');
	rmdir($dirname);
	closedir($dirHandle);
    }
}

function delete_member($uid)
{
    global $conn, $config;
    $user=$uid;
    
    $sql="select uid,username,photo,folder from members where uid='$user'";
    $rs=$conn->execute($sql);
    $folder=$rs->fields[folder];
    $photo=$rs->fields[photo];
    $uid=$rs->fields[uid];
    $usr=$rs->fields[username];
    if($rs->recordcount()>0)
    {
	$fa=$config[ado_dir]."/".$folder; @rmdir_rf($fa);
	$ff=$config[flvdo_dir]."/".$folder; @rmdir_rf($ff);
	$fi=$config[pic_dir]."/".$folder; @rmdir_rf($fi);
	$ft=$config[tmb_dir]."/".$folder; @rmdir_rf($ft);
	$fv=$config[vdo_dir]."/".$folder; @rmdir_rf($fv);
	if($photo!="default.gif") { $av=$config[usrimg_dir]."/".$photo; @rmdir_rf($av); }
	
	$table[]="comm_audio";
	$table[]="comm_img";
	$table[]="comm_vid";
	$table[]="comm_rates";
	$table[]="comm_profile";
	$table[]="fav_audio"; $table1[]="fav_audio";
	$table[]="fav_image"; $table1[]="fav_image";
	$table[]="fav_video"; $table1[]="fav_video";
	$table[]="files_audio";
	$table[]="files_image";
	$table[]="files_video";
	$table[]="playlist_audio";
	$table[]="playlist_image";
	$table[]="playlist_video";
	$table[]="playlist_files";
	$table[]="history_audio"; $table1[]="history_audio";
	$table[]="history_image"; $table1[]="history_image";
	$table[]="history_video"; $table1[]="history_video";
	$table[]="quicklist_audio"; $table1[]="quicklist_audio";
	$table[]="quicklist_image"; $table1[]="quicklist_image";
	$table[]="quicklist_video"; $table1[]="quicklist_video";
	$table[]="request_audio_F"; $table1[]="request_audio_F";
	$table[]="request_audio_I"; $table1[]="request_audio_I";
	$table[]="request_image_F"; $table1[]="request_image_F";
	$table[]="request_image_I"; $table1[]="request_image_I";
	$table[]="request_video_F"; $table1[]="request_video_F";
	$table[]="request_video_I"; $table1[]="request_video_I";
	
	
	for($i=0;$table[$i];$i++)
	{
	    $sq="delete from ";
	    $sq.=$table[$i];
	    $sq.=" where uid='$uid'";
	    $conn->execute($sq);
	}
	
	for($j=0;$table1[$j];$j++)
	{
	    $sq1="delete from ";
	    $sq1.=$table1[$j];
	    $sq1.=" where from_uid='$uid'";
	    $conn->execute($sq1);
	}
	
	$conn->execute("update pmessages set inbox_track='1', outbox_track='1' where sender='$usr' or receiver='$usr';");
	$conn->execute("delete from friends where uid='$uid' or fname='$usr';");
	$conn->execute("delete from blocked_users where blocker_uid='$uid' or blocked_uid='$uid';");
	$conn->execute("delete from banned_users where ban_uid='$uid';");
	$conn->execute("delete from subscriptions where subscriber_uid='$uid' or subscribed_uid='$uid';");
	$conn->execute("delete from member_theme where th_uid='$uid';");
	$conn->execute("delete from member_info where p_uid='$uid';");
	$conn->execute("delete from member_shows where s_uid='$uid';");
	$conn->execute("delete from file_responses where ruid='$uid' or resuid='$uid';");
	$conn->execute("delete from request_channel where uid='$uid' or from_uid='$uid';");
	
    }
    
    $sql="delete from members where uid='$user'";
    $rs=$conn->execute($sql);
    if (mysql_affected_rows()>0) $msg='yes';
    else $msg='no';

    return $msg;
}
function insert_friend_count($a)
{
    global $conn;
    global $config;
    $sql="select count(*) as ttl from friends where uid=$a[uid]";
    $rs=$conn->execute($sql);
    return $rs->fields[ttl];
}
function insert_fav_count($a)
{
    global $conn;
    global $config;
    $active = "and active='1' and is_inapp='no'";
    if ($config[enable_videos]=="1")
    {
	$sqlv="select s.*,v.* from files_video v, fav_video s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and s.uid='$a[uid]'";
	$rsv=$conn->execute($sqlv);
	$tv=$rsv->getrows();
	$ttlv=count($tv);
    }
    if ($config[enable_audio]=="1")
    {
	$sqla="select s.*,v.* from files_audio v, fav_audio s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and s.uid='$a[uid]'";    
	$rsa=$conn->execute($sqla);
	$ta=$rsa->getrows();
	$ttla=count($ta);
    }
    if ($config[enable_images]=="1")
    {
	$sqli="select s.*,v.* from files_image v, fav_image s where v.active='1' and v.is_inapp='no' and v.vid=s.vid and s.uid='$a[uid]'";        
	$rsi=$conn->execute($sqli);
	$ti=$rsi->getrows();
	$ttli=count($ti);
    }
    $tfav=$ttla+$ttli+$ttlv;
    return $tfav;
}
function insert_video_count($a)
{
    global $conn;
    global $config;
    $active = "and active='1' and is_inapp='no' and vtype='public'";
    $sql="select count(*) as ttl from files_video where uid=$a[uid] $active";
    $rs=$conn->execute($sql);
    return $rs->fields[ttl];
}
function insert_audio_count($a)
{
    global $conn;
    global $config;
    $active = "and active='1' and is_inapp='no' and vtype='public'";
    $sql="select count(*) as ttl from files_audio where uid=$a[uid] $active";
    $rs=$conn->execute($sql);
    return $rs->fields[ttl];
}
function insert_image_count($a)
{
    global $conn;
    global $config;
    $active = "and active='1' and is_inapp='no' and vtype='public'";
    $sql="select count(*) as ttl from files_image where uid=$a[uid] $active";
    $rs=$conn->execute($sql);
    return $rs->fields[ttl];
}

function insert_pmsg_count_new()
{
    global $conn;
    $sql="select count(*) as ttl from pmessages where receiver='$_SESSION[USERNAME]' and seen=0 and inbox_track='2'";
    $rs=$conn->execute($sql);
    return $rs->fields[ttl]+0;
}
function insert_pmsg_count_all()
{
    global $conn;
    $sql="select count(*) as ttl from pmessages where receiver='$_SESSION[USERNAME]' and inbox_track='2'";
    $rs=$conn->execute($sql);
    return $rs->fields[ttl]+0;
}
function insert_pmsg_count_all_admin($uid)
{
    global $conn;
    $sql="select count(*) as ttl from pmessages where receiver='".$uid[uid]."' and inbox_track='2';";
    $rs=$conn->execute($sql);
    return $rs->fields[ttl]+0;
}
function insert_pmsg_count_outb()
{
    global $conn;
    $sql="select count(*) as ttl from pmessages where sender='$_SESSION[USERNAME]' and outbox_track='2'";
    $rs=$conn->execute($sql);
    return $rs->fields[ttl];
}
function insert_ctotal($v)
{
    global $conn;
    $sql = "select SUM(total) as ctotal from comm_rates where comid='$v[comid]' and vid='$v[vid]' and type='$v[type]'";
    $rs=$conn->execute($sql);
    return $rs->fields[ctotal];
}
function insert_getfield($v)
{
    global $conn;
    $sql = "select $v[field] from $v[table] where $v[qfield]='$v[qvalue]' $v[order]";
    $rs = $conn->execute($sql);
    return $rs->fields[ $v[field] ];
}
function insert_getfield2($v)
{
    global $conn;
    $sql = "select $v[field] from $v[table] where $v[qfield]='$v[qvalue]' and uid='$v[uid]'";
    $rs = $conn->execute($sql);
    return $rs->fields[ $v[field] ];
}
function insert_vid_to_title($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select vtitle from files_video where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $vtitle=$rs->fields[vtitle];
    return $vtitle;
}
function insert_vid_to_title_image($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select vtitle from files_image where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $vtitle=$rs->fields[vtitle];
    return $vtitle;
}
function insert_vid_to_inapp($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select is_inapp from files_video where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $vinapp=$rs->fields[is_inapp];
    return $vinapp;
}
function insert_vid_to_flv_image($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select vflvname from files_image where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $iname=$rs->fields[vflvname];
    return $iname;
}
function insert_vid_to_type($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select vtype from files_video where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $vtype=$rs->fields[vtype];
    return $vtype;
}
function insert_vid_to_type_audio($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select vtype from files_audio where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $vtype=$rs->fields[vtype];
    return $vtype;
}
function insert_vid_to_type_image($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select vtype from files_image where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $vtype=$rs->fields[vtype];
    return $vtype;
}
function insert_vid_to_title_audio($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select vtitle from files_audio where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $vtitle=$rs->fields[vtitle];
    return $vtitle;
}

function insert_vid_to_descr($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select vdescr from files_video where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $vdescr=$rs->fields[vdescr];
    return $vdescr;
}
function insert_vid_to_descr_audio($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select vdescr from files_audio where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $vdescr=$rs->fields[vdescr];
    return $vdescr;
}
function insert_vid_to_descr_image($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select vdescr from files_image where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $vdescr=$rs->fields[vdescr];
    return $vdescr;
}
function insert_vid_to_uid($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select uid from files_video where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $uid=$rs->fields[uid];
    return $uid;
}
function insert_vid_to_uid_image($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select uid from files_image where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $uid=$rs->fields[uid];
    return $uid;
}
function insert_vid_to_tags($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select vtags from files_video where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $vtags=$rs->fields[vtags];
    return $vtags;
}
function insert_vid_to_views($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select views from files_video where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $views=$rs->fields[views];
    return $views;
}
function insert_vid_to_views_audio($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select views from files_audio where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $views=$rs->fields[views];
    return $views;
}
function insert_vid_to_views_image($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select views from files_image where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $views=$rs->fields[views];
    return $views;
}
function insert_name_to_uid($k)
{
    global $conn;
    global $smarty;
    global $config;
    //$sql="select uid from members where username='".htmlentities(strip_tags($k[username]),ENT_QUOTES,'UTF-8')."'";
    $sql="select uid from members where username='$k[username]'";
    $rs=$conn->execute($sql);
    $uid=$rs->fields[uid];
    return $uid;
}
function insert_name_to_uid2($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select uid from members where username='".$k[username]."'";
    $rs=$conn->execute($sql);
    $uid=$rs->fields[uid];
    return $uid;
}
function insert_vid_to_rndv($k)
{
    $rnd=substr(md5($k[vid]),13,7);
    return $k[vid].$rnd;
}
function insert_vid_to_rndv2($k)
{
    $rnd=substr(md5($k[vid]),12,7);
    return $k[vid].$rnd;
}
function insert_vid_to_rnda($k)
{
    $rnd=substr(md5($k[vid]),11,7);
    return $k[vid].$rnd;
}
function insert_vid_to_rndvv()
{
    global $conn, $config;
    $rs = $conn->execute("select configurations.value from configurations where configurations.option='def_thumb';");
    $dt = $rs->fields['value'];
    $config['def_thumb'] = $dt;

    if ($config['def_thumb'] == '1') $bn=rand(1,1);
    elseif ($config['def_thumb'] == '2') $bn=rand(2,2);
    elseif ($config['def_thumb'] == '3') $bn=rand(3,3);
    elseif ($config['def_thumb'] == '4') $bn=rand(1,3);
    
    return $bn;
}
function insert_name_to_pic($k)
{
    global $conn;
    global $smarty;
    global $config;
    //$sqll="select photo from members where username='".htmlentities(strip_tags($k[username]),ENT_QUOTES,'UTF-8')."'";
    $sqll="select photo from members where username='$k[username]'";
    $rsl=$conn->execute($sqll);
    $photo=$rsl->fields[photo];
    return $photo;
}
function insert_vid_to_comm($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select comments from files_video where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $comments=$rs->fields[comments];
    return $comments;
}
function insert_vid_to_comm_audio($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select comments from files_audio where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $comments=$rs->fields[comments];
    return $comments;
}
function insert_vid_to_comm_image($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select comments from files_image where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $comments=$rs->fields[comments];
    return $comments;
}
function insert_vid_to_rate($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select rate from files_video where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $rate=$rs->fields[rate];
    return $rate;
}
function insert_vid_to_rates($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select total_votes from files_video where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $rates=$rs->fields[total_votes];
    return $rates;
}
function insert_vid_to_rates_audio($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select total_votes from files_audio where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $rates=$rs->fields[total_votes];
    return $rates;
}
function insert_vid_to_rates_image($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select total_votes from files_image where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $rates=$rs->fields[total_votes];
    return $rates;
}
function insert_vid_to_key($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select vkey from files_video where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $key=$rs->fields[vkey];
    return $key;
}
function insert_vid_to_key_audio($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select vkey from files_audio where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $key=$rs->fields[vkey];
    return $key;
}
function insert_vid_to_key_image($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select vkey from files_image where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $key=$rs->fields[vkey];
    return $key;
}
function insert_vid_to_duration($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select vduration from files_video where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $duration=$rs->fields[vduration];
    return $duration;
}
function insert_vid_to_duration_audio($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select vduration from files_audio where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $duration=$rs->fields[vduration];
    return $duration;
}
function insert_name_to_utf($k)
{    
    global $conn;
    $sql="select vtitle from files_video where vkey='$k[vkey]'";    
    $rs=$conn->execute($sql);    
    $tt=$rs->fields[vtitle];    
    $title = stripslashes($tt);    
    $title = utf8_decode($title);    
    //$tt=utf8_decode(htmlentities($tt));    
    return $title;
}
function insert_uid_to_friend($k)
{
    global $conn;
    global $smarty;
    global $config;
    global $lang;
    $sql="select * from friends where uid='$k[uid]' and fname='$_SESSION[USERNAME]' and is_active='1'";
    $rs=$conn->execute($sql);
    if ($rs->recordcount()>0) $friend="yes";
	else $friend="no";
    return $friend;
}
function insert_uid_to_names($k)
{
    global $conn;
    $sql="select username from members where uid='$k[uid]'";
    $rs=$conn->execute($sql);
    $uname=$rs->fields[username];
    return $uname;
}
function insert_uid_to_names2($k)
{
    global $conn;
    $sql="select username from members where username='$k[uid]'";
    $rs=$conn->execute($sql);
    $uname=$rs->fields[username];
    return $uname;
}
function insert_uid_to_name($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select uid from files_video where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $uid=$rs->fields[uid];
    $sql1="select username from members where uid='$uid'";
    $rs1=$conn->execute($sql1);
    $uname=$rs1->fields[username];
    return $uname;
}
function insert_uid_to_name_audio($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select uid from files_audio where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $uid=$rs->fields[uid];
    $sql1="select username from members where uid='$uid'";
    $rs1=$conn->execute($sql1);
    $uname=$rs1->fields[username];
    return $uname;
}
function insert_uid_to_name_image($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select uid from files_image where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $uid=$rs->fields[uid];
    $sql1="select username from members where uid='$uid'";
    $rs1=$conn->execute($sql1);
    $uname=$rs1->fields[username];
    return $uname;
}
function insert_vid_to_folder($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select uid from files_video where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $uid=$rs->fields[uid];
    $sql1="select folder from members where uid='$uid'";
    $rs1=$conn->execute($sql1);
    $folder=$rs1->fields[folder];
    return $folder;
}
function insert_vid_to_featured($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql1="select is_featured from files_video where vid='$k[vid]'";
    $rs1=$conn->execute($sql1);
    $feat=$rs1->fields[is_featured];
    return $feat;
}
function insert_vid_to_featureda($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql1="select is_featured from files_audio where vid='$k[vid]'";
    $rs1=$conn->execute($sql1);
    $feat=$rs1->fields[is_featured];
    return $feat;
}
function insert_vid_to_featuredi($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql1="select is_featured from files_image where vid='$k[vid]'";
    $rs1=$conn->execute($sql1);
    $feat=$rs1->fields[is_featured];
    return $feat;
}

function insert_vid_to_folder_audio($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select uid from files_audio where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $uid=$rs->fields[uid];
    $sql1="select folder from members where uid='$uid'";
    $rs1=$conn->execute($sql1);
    $folder=$rs1->fields[folder];
    return $folder;
}
function insert_vid_to_folder_image($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select uid from files_image where vid='$k[vid]'";
    $rs=$conn->execute($sql);
    $uid=$rs->fields[uid];
    $sql1="select folder from members where uid='$uid'";
    $rs1=$conn->execute($sql1);
    $folder=$rs1->fields[folder];
    return $folder;
}
function insert_key_to_rate($k)
{
    global $conn;
    global $smarty;
    global $config;
    $config[section]="video";
    $sql="select vkey from files_video where vkey='$k[vkey]'";
    $rs=$conn->execute($sql);
    $key=$rs->fields[vkey];
    $rate = rating_bar2($key,'5','static','video');
    return $rate;
}
function insert_key_to_rate_audio($k)
{
    global $conn;
    global $smarty;
    global $config;
    $config[section]="audio";
    $sql="select vkey from files_audio where vkey='$k[vkey]'";
    $rs=$conn->execute($sql);
    $key=$rs->fields[vkey];
    $rate = rating_bar2($key,'5','static','audio');
    return $rate;
}
function insert_key_to_rate_image($k)
{
    global $conn;
    global $smarty;
    global $config;
    $config[section]="image";
    $sql="select vkey from files_image where vkey='$k[vkey]'";
    $rs=$conn->execute($sql);
    $key=$rs->fields[vkey];
    $rate = rating_bar2($key,'5','static','image');
    return $rate;
}
function insert_key_to_user($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select uid from files_video where vkey='$k[vkey]'";
    $rs=$conn->execute($sql);
    $uid=$rs->fields[uid];
    $sql1="select username from members where uid='$uid'";
    $mrs=$conn->execute($sql1);
    $uname=$mrs->fields[username];
    return $uname;
}
function insert_key_to_user_audio($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select uid from files_audio where vkey='$k[vkey]'";
    $rs=$conn->execute($sql);
    $uid=$rs->fields[uid];
    $sql1="select username from members where uid='$uid'";
    $mrs=$conn->execute($sql1);
    $uname=$mrs->fields[username];
    return $uname;
}
function insert_key_to_user_image($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select uid from files_image where vkey='$k[vkey]'";
    $rs=$conn->execute($sql);
    $uid=$rs->fields[uid];
    $sql1="select username from members where uid='$uid'";
    $mrs=$conn->execute($sql1);
    $uname=$mrs->fields[username];
    return $uname;
}
function insert_key_to_embed($k)
{
    global $conn;
    global $smarty;
    global $config;
    global $lang;
    $sql="select is_embed from files_video where vkey='$k[vkey]' and vtype='public'";
    $rs=$conn->execute($sql);
    $embed=$rs->fields[is_embed];
    return $embed;
}
function insert_key_to_embed_audio($k)
{
    global $conn;
    global $smarty;
    global $config;
    global $lang;
    $sql="select is_embed from files_audio where vkey='$k[vkey]' and vtype='public'";
    $rs=$conn->execute($sql);
    $embed=$rs->fields[is_embed];
    return $embed;
}
function insert_key_to_folder($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select uid from files_video where vkey='$k[vkey]'";
    $rs=$conn->execute($sql);
    $uid=$rs->fields[uid];
    $sql1="select folder from members where uid='$uid'";
    $mrs=$conn->execute($sql1);
    $folder=$mrs->fields[folder];
    return $folder;
}
function insert_key_to_image($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select uid from files_video where vkey='$k[vkey]'";
    $rs=$conn->execute($sql);
    $uid=$rs->fields[uid];
    $sql1="select photo from members where uid='$uid'";
    $mrs=$conn->execute($sql1);
    $images=$mrs->fields[photo];
    return $images;
}
function insert_key_to_image_audio($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select uid from files_audio where vkey='$k[vkey]'";
    $rs=$conn->execute($sql);
    $uid=$rs->fields[uid];
    $sql1="select photo from members where uid='$uid'";
    $mrs=$conn->execute($sql1);
    $images=$mrs->fields[photo];
    return $images;
}
function insert_key_to_image_image($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select uid from files_image where vkey='$k[vkey]'";
    $rs=$conn->execute($sql);
    $uid=$rs->fields[uid];
    $sql1="select photo from members where uid='$uid'";
    $mrs=$conn->execute($sql1);
    $images=$mrs->fields[photo];
    return $images;
}
function insert_key_to_views($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select views from files_video where vkey='$k[vkey]'";
    $rs=$conn->execute($sql);
    $views=$rs->fields[views];
    return $views;
}
function insert_uid_to_gender($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select gender from members where uid='$k[uid]'";
    $rs=$conn->execute($sql);
    $gender=$rs->fields[gender];
    return $gender;
}
function insert_categ_to_name($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select name from categories where cid='$k[cid]'";
    $rs=$conn->execute($sql);
    $cname=$rs->fields[name];
    return $cname;
}
function insert_categ_to_name2($k)
{
    global $conn;
    global $smarty;
    global $config;
    $sql="select name from categories where cid='$k[cid]'";
    $rs=$conn->execute($sql);
    $cname=$rs->fields[name];
    $name=ereg_replace(" {1,}", "_", $cname);
    return $name;
}
function insert_ad_status($k)
{
    global $config;
    global $conn;
    global $smarty;
    $sql="select astatus from adv_site where aname='$k[aname]'";
    $rs=$conn->execute($sql);
    $status=$rs->fields[astatus];
    return $status;
}

function insert_footer_links($k)
{
    global $config;
    global $conn;
    global $smarty;
    $sql="select active from static_files where ff='$k[ff]'";
    $rs=$conn->execute($sql);
    $status=$rs->fields[active];
    return $status;
}
function insert_titlea($k)
{
    global $config;
    global $conn;
    global $smarty;
    $sql="select vtitle from files_audio where vkey='$k[vkey]'";
    $rs=$conn->execute($sql);
    $title=$rs->fields[vtitle];
    $title2=ereg_replace(" {1,}", "_", $title);
    return $title2;
}
function insert_titlei($k)
{
    global $config;
    global $conn;
    global $smarty;
    $sql="select vtitle from files_image where vkey='$k[vkey]'";
    $rs=$conn->execute($sql);
    $title=$rs->fields[vtitle];
    $title2=ereg_replace(" {1,}", "_", $title);
    return $title2;
}
function insert_titlev($k)
{
    global $config;
    global $conn;
    global $smarty;
    $sql="select vtitle from files_video where vkey='$k[vkey]'";
    $rs=$conn->execute($sql);
    $title=$rs->fields[vtitle];
    $title2=ereg_replace(" {1,}", "_", $title);
    return $title2;
}
function insert_titlea_to_key($k)
{
    global $config;
    global $conn;
    global $smarty;
    $tt=ereg_replace("_{1,}", " ", $k[vtitle]);
    $sql="select vkey from files_audio where vtitle='$tt'";
    $rs=$conn->execute($sql);
    $key=$rs->fields[vkey];
    return $key;
}
function insert_titlei_to_key($k)
{
    global $config;
    global $conn;
    global $smarty;
    $tt=ereg_replace("_{1,}", " ", $k[vtitle]);
    $sql="select vkey from files_image where vtitle='$tt'";
    $rs=$conn->execute($sql);
    $key=$rs->fields[vkey];
    return $key;
}
function insert_titlev_to_key($k)
{
    global $config;
    global $conn;
    global $smarty;
    $tt=ereg_replace("_{1,}", " ", $k[vtitle]);
    $sql="select vkey from files_video where vtitle='$tt'";
    $rs=$conn->execute($sql);
    $key=$rs->fields[vkey];
    return $key;
}
function insert_bstatus($k)
{
    global $config;
    global $conn;
    global $smarty;
    $sql="select active from blocked_users where blocked_uid='$k[blocked_uid]' and blocker_uid='$_SESSION[UID]'";
    $rs=$conn->execute($sql);
    $bstatus=$rs->fields[active];
    return $bstatus;
}
function insert_latest_video_addition($cid)
{
    global $conn;
    $activev = "(vtype='public') and (active='1') and (is_inapp='no')";
    $sql="select vid from files_video WHERE $activev and (vcategs like '%,$cid[cid],%') order by addtime desc limit 1";
    $rs=$conn->execute($sql);
    if($rs->recordcount()>0) { $lv=$rs->fields[vid]; } 
    return $lv;
}
function insert_latest_image_addition($cid)
{
    global $conn;
    $activev = "(vtype='public') and (active='1') and (is_inapp='no')";
    $sql="select vid from files_image WHERE $activev and (vcategs like '%,$cid[cid],%') order by addtime desc limit 1";
    $rs=$conn->execute($sql);
    if($rs->recordcount()>0) { $lv=$rs->fields[vid]; } 
    return $lv;
}
function insert_latest_audio_addition($cid)
{
    global $conn;
    $activev = "(vtype='public') and (active='1') and (is_inapp='no')";
    $sql="select vid from files_audio WHERE $activev and (vcategs like '%,$cid[cid],%') order by addtime desc limit 1";
    $rs=$conn->execute($sql);
    if($rs->recordcount()>0) { $lv=$rs->fields[vid]; } 
    return $lv;
}
function insert_extconv($file)
{
    $file = $file['file'];
    $pos = strrpos($file, '.');
    $ext = strtoupper(substr($file, $pos+1, strlen($file)-$pos));
    return $ext;
}
function key_to_info($key)
{
    global $config,$conn;
    $sql="select vid,uid,vtitle,vtags,vdescr,views,vtype,active,is_rated,comments,is_comm,is_bm,is_featured,is_recommended,is_inapp from files_video where vkey='$key'";
    $rs=$conn->execute($sql);
    if($rs->recordcount()>0)
    {
        $list[]=$rs->fields[vid]; //0
        $list[]=$rs->fields[uid]; //1
	$list[]=$rs->fields[vtitle]; //2
        $list[]=$rs->fields[vtags]; //3
	$list[]=$rs->fields[vdescr]; //4
        $list[]=$rs->fields[views]; //5
	$list[]=$rs->fields[vtype]; //6
	$list[]=$rs->fields[active]; //7
	$list[]=$rs->fields[is_rated]; //8
	$list[]=$rs->fields[comments]; //9
	$list[]=$rs->fields[is_comm]; //10
	$list[]=$rs->fields[is_bm]; //11
	$list[]=$rs->fields[is_featured]; //12
	$list[]=$rs->fields[is_recommended]; //13
	$list[]=$rs->fields[is_inapp]; //14
        return $list;
    }
    else return false;
}
function key_to_info_audio($key)
{
    global $config,$conn;
    $sql="select vid,uid,vtitle,vtags,vdescr,views,vtype,active,is_rated,comments,is_comm,is_bm,vflvname,is_featured,is_inapp from files_audio where vkey='$key'";
    $rs=$conn->execute($sql);
    if($rs->recordcount()>0)
    {
        $list[]=$rs->fields[vid]; //0
        $list[]=$rs->fields[uid]; //1
	$list[]=$rs->fields[vtitle]; //2
        $list[]=$rs->fields[vtags]; //3
	$list[]=$rs->fields[vdescr]; //4
        $list[]=$rs->fields[views]; //5
	$list[]=$rs->fields[vtype]; //6
	$list[]=$rs->fields[active]; //7
	$list[]=$rs->fields[is_rated]; //8
	$list[]=$rs->fields[comments]; //9
	$list[]=$rs->fields[is_comm]; //10
	$list[]=$rs->fields[is_bm]; //11
	$list[]=$rs->fields[vflvname]; //12
	$list[]=$rs->fields[is_featured]; //13
	$list[]=$rs->fields[is_inapp]; //14
        return $list;
    }
    else return false;
}
function key_to_info_image($key)
{
    global $config,$conn;
    $sql="select vid,uid,vtitle,vtags,vdescr,views,vtype,active,is_rated,comments,is_comm,is_bm,vflvname,is_featured,is_inapp from files_image where vkey='$key'";
    $rs=$conn->execute($sql);
    if($rs->recordcount()>0)
    {
        $list[]=$rs->fields[vid]; //0
        $list[]=$rs->fields[uid]; //1
	$list[]=$rs->fields[vtitle]; //2
        $list[]=$rs->fields[vtags]; //3
	$list[]=$rs->fields[vdescr]; //4
        $list[]=$rs->fields[views]; //5
	$list[]=$rs->fields[vtype]; //6
	$list[]=$rs->fields[active]; //7
	$list[]=$rs->fields[is_rated]; //8
	$list[]=$rs->fields[comments]; //9
	$list[]=$rs->fields[is_comm]; //10
	$list[]=$rs->fields[is_bm]; //11
	$list[]=$rs->fields[vflvname]; //12
	$list[]=$rs->fields[is_featured]; //13
	$list[]=$rs->fields[is_inapp]; //14
        return $list;
    }
    else return false;
}
function insert_key_to_type($key)
{
    global $conn;
    global $smarty;
    
    $s1="select * from files_audio where vkey='$key[vkey]'";
    $s2="select * from files_image where vkey='$key[vkey]'";
    $s3="select * from files_video where vkey='$key[vkey]'";
    
    $r1=$conn->execute($s1);
    $r2=$conn->execute($s2);
    $r3=$conn->execute($s3);
    
    if ($r1->recordcount()>0) $type="audio";
    elseif ($r2->recordcount()>0) $type="image";
    elseif ($r3->recordcount()>0) $type="video";
    
    return $type;
}
function upload_jpg($HTTP_POST_FILES, $var_name, $file_name, $img_width=120, $dir, $rename="")
{
    if($HTTP_POST_FILES[$var_name]["name"])
    {	
	global $config;
	$img_width=$config[img_max_width];
	$pic_name = $dir. $file_name;
	if(file_exists($pic_name))
	    unlink($pic_name);
    	$file_url = $dir . uniqid("").tmp;
        $ext = strrchr($HTTP_POST_FILES[$var_name]["name"], '.');
        move_uploaded_file($HTTP_POST_FILES[$var_name]["tmp_name"], $file_url);

        if($HTTP_POST_FILES[$var_name]["error"]>0)
        {
            $err = "There was an error while uploading!";
        }
        elseif(strtolower($ext)=='.jpg' || strtolower($ext)=='.gif' || strtolower($ext)=='.png')
        {
            if(strtolower($ext)=='.jpg') $img = @imagecreatefromjpeg($file_url);
            if(strtolower($ext)=='.gif') $img = @imagecreatefromgif($file_url);
            if(strtolower($ext)=='.png') $img = @imagecreatefrompng($file_url);
            
            $size = @getimagesize($file_url);
            $width= $size[0];
    	    $height= $size[1];						
    	    $img_width1=$config[img_max_width];
	    
            if ($width>$img_width1)
            {
		if($width > 450)
		{
		    $percentage = 1;
		    $width=450;
		    $width *= $percentage;
		}
		else
		{
		    $percentage = 1;
            	    $width *= $percentage;
            	    $height *= $percentage;
		}
		
		if($height > 275)
		{
		    $percentage = 1;
		    $height=275;
		    $height *= $percentage;
		}
		
                $img_r = @imagecreatetruecolor ($width, $height);
                @imagecopyresampled($img_r, $img, 0, 0, 0, 0, $width, $height, $size[0], $size[1]);
            }
            else
            {
                $img_r = $img;
            }

            $pic_name = $dir. $file_name;
            @ImageJpeg($img_r, $pic_name, 100);
            @unlink($file_url);
        }
        else
        {
    	    @unlink($file_url);
            $err = "Unknown format!";
        }
    }
    return $err;
}

function upload_swf($HTTP_POST_FILES, $var_name, $file_name, $img_width=120, $dir, $rename="")
{
    if($HTTP_POST_FILES[$var_name]["name"])
    {         
	global $config;
	$img_width=$config[img_max_width];
	$pic_name = $dir. $file_name;
	if(file_exists($pic_name))
	    unlink($pic_name);
        $file_url = $dir . uniqid("").tmp;
        $ext = strrchr($HTTP_POST_FILES[$var_name]["name"], '.');
				
        if(!move_uploaded_file($HTTP_POST_FILES[$var_name]["tmp_name"], $pic_name))
	{
	    $err = "There was an error while uploading!";
	}
        
	if($HTTP_POST_FILES[$var_name]["error"]>0)
        {
    	    $err = "There was an error while uploading!";
        }
    }
    
    return $err;
}

function upload_flv($HTTP_POST_FILES, $var_name, $file_name, $img_width=120, $dir, $rename="")
{
    if($HTTP_POST_FILES[$var_name]["name"])
	{ 
	    $pic_name = $dir. $file_name;
	    if(file_exists($pic_name))
		unlink($pic_name);
            $file_url = $dir . uniqid("").tmp;
            $ext = strrchr($HTTP_POST_FILES[$var_name]["name"], '.');
				
            if(!move_uploaded_file($HTTP_POST_FILES[$var_name]["tmp_name"], $pic_name))
    	    {
		$err = "There was an error while uploading!";
	    }
            
	    if($HTTP_POST_FILES[$var_name]["error"]>0)
            {
                $err = "There was an error while uploading!";
            }
	}
    return $err;
}
/*
function upload_avi($HTTP_POST_FILES, $var_name, $file_name, $img_width=120, $dir, $rename="")
{
    global $config;
    if($HTTP_POST_FILES[$var_name]["name"])
	{ 
	    $pic_name = $dir. $file_name;
	    if(file_exists($pic_name))
		unlink($pic_name);
            $file_url = $dir . uniqid("").tmp;
            $ext = strrchr($HTTP_POST_FILES[$var_name]["name"], '.');
				
            if(!move_uploaded_file($HTTP_POST_FILES[$var_name]["tmp_name"], $pic_name))
    	    {
		$err = "There was an error while uploading!";
	    }
	    if($HTTP_POST_FILES[$var_name]["error"]>0)
            {
                $err = "There was an error while uploading!";
            }
	    if($err=="")
	    {
//		if(strtolower($ext)=='.avi')
		$out=str_replace($ext,".flv",$file_name);
		$conv="$config[mencoder] $pic_name -o ".$dir."/".$out." -of lavf -oac mp3lame -lameopts abr:br=56 -ovc lavc -lavcopts vcodec=flv:vbitrate=$config[vbrate]:mbd=2:mv0:trell:v4mv:keyint=10:cbp:last_pred=3 -lavfopts i_certify_that_my_video_stream_does_not_use_b_frames -srate $config[sbrate]";
		if(exec("$conv"))
		{
		    if(exec("$config[flvtool] -Uv ".$dir."/".$out." ".$dir."/".$out.""))
		    {
			if(file_exists("".$dir."/".$out.""))
			{
			    @unlink($pic_name);
			}
		    }
		}
	    }
	}
    return $err;
}
*/
function getAge($dateOfBirth) 
{
    if (!ereg ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $dateOfBirth, $regs))
	return false;
    $age = date("Y") - $regs[1];
    if ($regs[2] > date("m"))
	$age--;
    elseif ($regs[2] == date("m"))
	if ($regs[3] > date("d"))
	    $age--;
    return $age;
}
function repacc($str)
{
    $str = htmlentities($str, ENT_COMPAT, "UTF-8");
    $str = preg_replace('/&([a-zA-Z])(uml|acute|elig|grave|circ|tilde|cedil|ring|quest|slash|caron);/', '$1', $str);
    return html_entity_decode($str);
}
function cinput($str)
{
    $newstr = ereg_replace("[^a-zA-Z0-9]", ' ', $str);
    return $newstr;
}

function censor ( $m ) { 
    global $config;
    return str_repeat ( $config['repl_string'], strlen( $m[0]) );
}

function filterBadWords2 ( $str ) {
    global $config;
    $lines = file ( $config['base_dir'].'/modules/wordfiltering/words.txt', FILE_IGNORE_NEW_LINES );
    $words = array();
    foreach ( $lines as $line_num => $line ) {
	$wo.= $line.',';
	//$wo.= urlencode($line).',';
    }
    $words = substr ( $wo, 0, -1 );
    $words = explode (',' , $wo); 
    
    return preg_replace_callback ( '/(?:' . join( $words, '|' ) . ')\b/i' , 'censor' , $str ); //precise filtering
    //return urldecode(preg_replace_callback ( '/(?:' . join( $words, '|' ) . ')\b/i' , 'censor' , $str ));
}

function filterBadWords ( $str ) {
    global $config;
    $lines = file ( $config['base_dir'].'/modules/wordfiltering/words.txt', FILE_IGNORE_NEW_LINES );
    $words = array();
    foreach ( $lines as $line_num => $line ) {
	$rep=str_repeat('*', strlen($line));
	$str=str_replace_word($line, $rep, $str);
    }
    return mysql_real_escape_string($str);
}

function str_replace_word($needle,$replacement,$haystack){
    $pattern = '/\b'.$needle.'\b/i';
    $haystack = preg_replace($pattern, $replacement, $haystack);
    return $haystack;
}


function filter_title($str)
{
    global $config;
    
    if ( $config['word_filters'] == '1' ) { $str = filterBadWords ( $str ); }
    if ( $config['word_filters'] == '0' ) { $str=mysql_real_escape_string($str); }
    //if ( $config['word_filters'] == '1' ) { $str = filterBadWords ( urlencode($str) ); }
    
    //$newstr=str_replace('"',"'",$str);
    $pats1 ='\'';  $repls1 ="";
    $pat[] ='\"';  $repl[] ="";
    $pat[] ='\&';  $repl[] =" and ";
    $pat[] ='\~';  $repl[] ="";
    $pat[] ='\@';  $repl[] ="";
    $pat[] ='\#';  $repl[] ="";
    $pat[] ='\$';  $repl[] ="";
    $pat[] ='\%';  $repl[] ="";
    $pat[] ='\^';  $repl[] ="";
    $pat[]='\*';  $repl[]="";
    $pat[]='\(';  $repl[]="";
    $pat[]='\)';  $repl[]="";
    $pat[]='\+';  $repl[]=" ";
    $pat[]='\`';  $repl[]="";
    $pat[]='\=';  $repl[]="";
    $pat[]='\!';  $repl[]="";
    $pat[]='\[';  $repl[]="";
    $pat[]='\]';  $repl[]="";
    $pat[]='\{';  $repl[]="";
    $pat[]='\}';  $repl[]="";
    $pat[]='\;';  $repl[]="";
    $pat[]='\:';  $repl[]="";
    $pat[]='\.';  $repl[]="";
    $pat[]='\/';  $repl[]="";
    $pat[]='\?';  $repl[]="";
    $pat[]='\<';  $repl[]="";
    $pat[]='\>';  $repl[]="";
    //$pat[]='\_';  $repl[]=" ";
    $pat[]="\\\\"; $repl[]="";
    $pat[]='\|';  $repl[]="";
    $pat[]='\,';  $repl[]="";
    $pat[]='\0x';  $repl[]="";
    
    $newstr = ereg_replace($pats1, $repls1, $str);
    
    for($i=0;$pat[$i];$i++) {
	$newstr=ereg_replace($pat[$i], $repl[$i], $newstr);
    }
    
    $newstr = preg_replace('/\s\s+/', ' ', $newstr); 
    
    return trim ( $newstr );
}
function filter_descr($str)
{
    //$str=mysql_real_escape_string($str);
    global $config;
    
    if ( $config['word_filters'] == '1' ) { $str = filterBadWords ( $str ); }
    if ( $config['word_filters'] == '0' ) { $str = mysql_real_escape_string($str); }
    //if ( $config['word_filters'] == '1' ) { $str = filterBadWords ( urlencode ( $str ) ); }
    
    //$newstr=str_replace('"',"'",$str);
    $pats1 = "\'";  $repls1 ="&#39;";
    $pat[] = '\"';  $repl[] ="&#34;";
    $pat[] = '\&';  $repl[] ="&amp;";
    //$pat[] ='\~';  $repl[] ="";
    //$pat[] ='\@';  $repl[] ="";
    //$pat[] ='\#';  $repl[] ="";
    $pat[] = '\$';  $repl[] ="";
    $pat[] = '\%';  $repl[] ="";
    $pat[] = '\{';  $repl[] ="";
    $pat[] = '\}';  $repl[]="";
    $pat[] = '\`';  $repl[]="";
    //$pat[]='\/';  $repl[]="";
    $pat[] = '\<';  $repl[]="";
    $pat[] = '\>';  $repl[]="";
    //$pat[]="\\\\"; $repl[]="";
    $pat[] = '\|';  $repl[]="";
    //$pat[]="\n";  $repl[]="<br>";
    //$pat[]='\r';  $repl[]="<br>";
    $pat[] = '\0x';  $repl[]="";
    
    $newstr = ereg_replace($pats1, $repls1, $str);
    
    for($i=0;$pat[$i];$i++) {
	$newstr=ereg_replace($pat[$i], $repl[$i], $newstr);
    }
    
    $newstr = preg_replace('/\s\s+/', ' ', $newstr);
    
    return trim ( $newstr );
}

function illegal_op()
{
    global $config;
    global $smarty;
    global $lang;
    
//    checklang();
    set_btn("bhome");
    set_title($lang['title_illegalop']);
    $err=$lang['err_illegalop'];
    $smarty->assign('err',$err);
    $smarty->display('main_header.tpl');
    $smarty->display('footer.tpl');
    exit;
}
function illegal_opa()
{
    global $config;
    global $smarty;
    global $lang;
    
    $err=$lang['err_illegalop'];
    $smarty->assign('err',$err);
    $smarty->display('administration/main_header.tpl');
    $smarty->display('administration/main_footer.tpl');
    exit;
}

function safe_sql_insert($variable) {
$variable = htmlentities($variable);
return $variable;
}

function show_sql($variable) {
$variable = stripslashes($variable);
return $variable;
}

function truncate($text,$numb) {
    $text = html_entity_decode($text, ENT_QUOTES,'UTF-8');
    if (strlen($text) > $numb) {
    $text = substr($text, 0, $numb);
    $text = substr($text,0,strrpos($text," "));
    //This strips the full stop:
//    if ((substr($text, -1)) == ".") {
//        $text = substr($text,0,(strrpos($text,".")));
//    }
    $etc = "...";
    $text = $text.$etc;
    }
    $text = htmlentities($text, ENT_QUOTES,'UTF-8');
    return $text;
}
//function truncate2( $str, $num = 10 ) {
//    $str = preg_replace("/(>)([[:print:]]{".$num.",})(<)/e", "'\\1'.substr_replace('\\2 ', '...', '".$num."').'\\3'", $str);
    
//  if( strlen( $str ) > $num ) $str = substr( $str, 0, $num ) . "...";
//    return $str;
//}
    
function getDirectorySize($path)
{
  $totalsize = 0;
  $totalcount = 0;
  $dircount = 0;
  if ($handle = opendir ($path))
  {
    while (false !== ($file = readdir($handle)))
    {
      $nextpath = $path . '/' . $file;
      if ($file != '.' && $file != '..' && !is_link ($nextpath))
      {
        if (is_dir ($nextpath))
        {
          $dircount++;
          $result = getDirectorySize($nextpath);
          $totalsize += $result['size'];
          $totalcount += $result['count'];
          $dircount += $result['dircount'];
        }
        elseif (is_file ($nextpath))
        {
          $totalsize += filesize ($nextpath);
          $totalcount++;
        }
      }
    }
  }
  closedir ($handle);
  $total['size'] = $totalsize;
  $total['count'] = $totalcount;
  $total['dircount'] = $dircount;
  return $total;
}

function sizeFormat($size) {
    global $config, $lang;
    if ( $config['views_delim'] == 'comma' ) $x = ','; else $x = '.';
    if($size<1024) { return number_format($size,1,$x,$x).$lang['sizeformat_bytes']; }
    else if($size<(1024*1024)) { $size2=round($size/1024,1); return number_format(($size/1024),1,$x,$x).$lang['sizeformat_kb']; }
    else if($size<(1024*1024*1024)) { return number_format(($size/(1024*1024)),1,$x,$x).$lang['sizeformat_mb']; }
    else { $size2=round($size/(1024*1024*1024),1); return number_format(($size/(1024*1024*1024)),1,$x,$x).$lang['sizeformat_gb']; }
}
function sizeFormat2($size) {
    global $config, $lang;
    $lang['sizeformat_bytes'] = ' bytes';
    $lang['sizeformat_kb'] = ' KB';
    $lang['sizeformat_mb'] = ' MB';
    $lang['sizeformat_gb'] = ' GB';
    
    if ( $config['views_delim'] == 'comma' ) $x = ','; else $x = '.';
    if($size<1024) { return number_format($size,0,$x,$x).$lang['sizeformat_bytes']; }
    else if($size<(1024*1024)) { $size2=round($size/1024,1); return number_format(($size/1024),0,$x,$x).$lang['sizeformat_kb']; }
    else if($size<(1024*1024*1024)) { return number_format(($size/(1024*1024)),0,$x,$x).$lang['sizeformat_mb']; }
    else { $size2=round($size/(1024*1024*1024),1); return number_format(($size/(1024*1024*1024)),0,$x,$x).$lang['sizeformat_gb']; }
}
function log_files($path, $str) {
    $file_dir = dirname($path);
    if (!is_dir($file_dir) or !is_writable($file_dir)) return false;
    $wm = 'w';
    if(is_file($path) && is_writable($path)) $wm = 'a';
    if(!$handle = fopen($path, $wm)) return false;
    if(fwrite($handle, $str. "\n") == FALSE) return false;
    @fclose($handle);
}
function set_country_box($sel=""){                                                                                                                                                                                 
    $coun="";                                                                                                                                                                                              
    $country=array("United States","Afghanistan","Albania","Algeria","American Samoa","Andorra","Angola","Anguilla","Antartica","Antigua and Barbuda","Argentina","Armenia","Aruba","Ascension Island","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Botswana","Bouvet Island","Brazil","Brunei Darussalam","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde Islands","Cayman Islands","Chad","Chile","China","Christmas Island","Colombia","Comoros","Cook Islands","Costa Rica","Cote d Ivoire","Croatia/Hrvatska","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","East Timor","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Guiana","French Polynesia","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guadeloupe","Guam","Guatemala","Guernsey","Guinea","Guinea-Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Ireland","Isle of Man","Israel","Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte Island", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn Island", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion Island", "Romania", "Russian Federation", "Rwanda", "Saint Helena", "Saint Lucia", "San Marino", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovak Republic", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia", "Spain", "Sri Lanka", "Suriname", "Svalbard", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tokelau", "Tonga Islands", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Kingdom", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Western Sahara", "Western Samoa", "Yemen", "Yugoslavia", "Zambia","Zimbabwe");
    for($i=0;$i<count($country);$i++) {
        if($sel==$country[$i])
             $coun .="<option value='$country[$i]' selected>$country[$i]</option>";
        else
            $coun .="<option value='$country[$i]'>$country[$i]</option>";
    }
    return $coun;
}
function modifier_spchar($string) {
    $s = '"';
    $new_string = str_replace('&amp;', "&", $string);
    $new_string = str_replace('&#39;', "'", $new_string);
    $new_string = str_replace('&#34;', $s, $new_string);
    return $new_string;
}

function check_block($uid, $type) {
    global $conn, $config, $smarty, $lang;
    
    $bn = $conn->execute("select blocked_name from blocked_users where blocked_name='$_SESSION[USERNAME]' and blocker_uid='$uid' and active='1';");
    if ( $bn->recordcount() > 0 ) $bn = 'yes'; else $bn = 'no';
    
    $bs = $conn->execute("select * from members where uid='$uid';");
    $bl_files = $bs->fields['bl_files'];
    $bl_chcomm = $bs->fields['bl_chcomm'];
    $bl_chan = $bs->fields['bl_chan'];
    $bl_msg = $bs->fields['bl_msg'];
    
    if ( $bn == 'yes' and $bl_files == 'yes' and $type == 'bl_files' ) { $err = $lang['pr_chinfob53']; set_title($lang['pr_chinfob53']); $smarty->assign('err', $err); $smarty->display('main_header.tpl'); $smarty->display('footer.tpl'); exit; }
    if ( $bn == 'yes' and $bl_chan == 'yes' and $type == 'bl_chan' ) { $err = $lang['pr_chinfob55']; set_title($lang['pr_chinfob55']); $smarty->assign('err', $err); $smarty->display('main_header.tpl'); $smarty->display('footer.tpl'); exit; }
    if ( $bn == 'yes' and $bl_chcomm == 'yes' and $type == 'bl_chcomm' ) { $errs = $lang['pr_chinfob56']; }
    if ( $bn == 'yes' and $bl_msg == 'yes' and $type == 'bl_msg' ) { $errs = 'yes'; }
    
    return $errs;
}
function insert_keys_to_array($a) {
    $array = explode(",", $a[arr]);
    return $array;
}
function insert_keys_to_thumbs($a) { 
    global $conn, $config, $smarty;

    $s1="select vkey from files_audio where vkey='$a[arr]'";
    $s2="select vkey from files_image where vkey='$a[arr]'";
    $s3="select vkey from files_video where vkey='$a[arr]'";
    
    $r1=$conn->execute($s1); $r2=$conn->execute($s2); $r3=$conn->execute($s3);
    if ($r1->fields['vkey']!='') $type="audio"; elseif ($r2->fields['vkey']!='') $type="image"; elseif ($r3->fields['vkey']!='') $type="video";
    $tbl = 'files_'.$type;
    
    if ( $a['arr'] != '' ) {
	$rs = $conn->execute("select vid, uid, vflvname from $tbl where vkey='$a[arr]';");
	$vid = $rs->fields['vid'];
	$uid = $rs->fields['uid'];
	$img = $rs->fields['vflvname'];
	
	//$rn1 = insert_vid_to_rndvv();
	$rn1 = '1';
	
	if ( $type == 'audio' ) { $rnd = substr(md5($vid),11,7); }
	elseif ( $type == 'image' ) { $rnd = substr(md5($vid),12,7); } 
	elseif ( $type == 'video' ) { $rnd = substr(md5($vid),13,7); }
	$rn2 = $vid.$rnd;
	
	if ( $type == 'audio' or $type == 'video' ) $img_url = $rn1.'_'.$rn2.'.jpg';
	elseif ( $type == 'image' ) $img_url = $img;
	
	$style = 'background: url('.$config['tmb_url'].'/user'.$uid.'/'.$img_url.')';
    } else $style=''; 

    return $style;
}
function insert_check_img($a) {
    global $conn, $config;
    $rn1 = ($config['thumb_nr'] - 1);
    $rnd = substr(md5($a[vid]),13,7); $rn2 = $a[vid].$rnd;
    $img_url = $rn1.'_'.$rn2.'.jpg';
    $cmd = 'ls '.$config['tmb_dir'].'/user'.$a[uid].'/'.$img_url;
    exec( $cmd.' 2>&1', $output );
    if ( $output[0] == $config['tmb_dir'].'/user'.$a[uid].'/'.$img_url ) $file = 'yes'; else $file = 'no';
    
    return $file;
}
function check_img($uid, $vid) {
    global $conn, $config;
    $rn1 = ($config['thumb_nr'] - 1);
    $rnd = substr(md5($vid),13,7); $rn2 = $vid.$rnd;
    $img_url = $rn1.'_'.$rn2.'.jpg';
    $cmd = 'ls '.$config['tmb_dir'].'/user'.$uid.'/'.$img_url;
    exec( $cmd.' 2>&1', $output );
    if ( $output[0] == $config['tmb_dir'].'/user'.$uid.'/'.$img_url ) $file = 'yes'; else $file = 'no';
    
    return $file;
}
function insert_gen_array($a) {
    for ( $i = 1; $i <= $a[nr]; $i++ ) {
	if ( $i == $a[nr] ) $ad = ''; else $ad = ',';
	$str.= '1'.$ad;
    }
    return $str;
}
function key_to_type($key)
{
    global $conn;
    global $smarty;
    
    $s1="select vkey from files_audio where vkey='$key'";
    $s2="select vkey from files_image where vkey='$key'";
    $s3="select vkey from files_video where vkey='$key'";
    
    $r1=$conn->execute($s1);
    $r2=$conn->execute($s2);
    $r3=$conn->execute($s3);
    
    if ($r1->recordcount()>0) $type="audio";
    elseif ($r2->recordcount()>0) $type="image";
    elseif ($r3->recordcount()>0) $type="video";
    
    return $type;
}
function sec2hms($sec, $padHours = true) 
  {
    $hms = "";
    $hours = intval(intval($sec) / 3600); 
    $hms .= ($padHours) 
          ? str_pad($hours, 2, "0", STR_PAD_LEFT). ':'
          : $hours. ':';
     
    $minutes = intval(($sec / 60) % 60); 
    $hms .= str_pad($minutes, 2, "0", STR_PAD_LEFT). ':';
    $seconds = intval($sec % 60); 
    $hms .= str_pad($seconds, 2, "0", STR_PAD_LEFT);

    return $hms;
  }
function insert_getcountrycode($ip) {
    global $config;
    require_once($config['base_dir'].'/modules/geoplugin/geoplugin.class.php'); 
    $geoplugin = new geoPlugin();
    $geoplugin->locate($ip[ip]);
    return $geoplugin->countryCode;
}
function insert_getarrayccode($c) {
    $countries = array("GB" => "United Kingdom","US" => "United States","AF" => "Afghanistan","AL" => "Albania","DZ" => "Algeria","AS" => "American Samoa","AD" => "Andorra","AO" => "Angola","AI" => "Anguilla",  "AQ" => "Antarctica",  "AG" => "Antigua and Barbuda",  "AR" => "Argentina",  "AM" => "Armenia",  "AW" => "Aruba",  "AU" => "Australia",  "AT" => "Austria",  "AZ" => "Azerbaijan",  "BS" => "Bahamas",  "BH" => "Bahrain",  "BD" => "Bangladesh",  "BB" => "Barbados",  "BY" => "Belarus",  "BE" => "Belgium",  "BZ" => "Belize",  "BJ" => "Benin",  "BM" => "Bermuda",  "BT" => "Bhutan",  "BO" => "Bolivia",  "BA" => "Bosnia and Herzegovina",  "BW" => "Botswana",  "BV" => "Bouvet Island",  "BR" => "Brazil",  "IO" => "British Indian Ocean Territory",  "BN" => "Brunei Darussalam",  "BG" => "Bulgaria",  "BF" => "Burkina Faso",  "BI" => "Burundi",  "KH" => "Cambodia",  "CM" => "Cameroon",  "CA" => "Canada",  "CV" => "Cape Verde",  "KY" => "Cayman Islands",  "CF" => "Central African Republic",  "TD" => "Chad",  "CL" => "Chile",  "CN" => "China",  "CX" => "Christmas Island",  "CC" => "Cocos (Keeling) Islands",  "CO" => "Colombia",  "KM" => "Comoros",  "CG" => "Congo",  "CD" => "Congo, The Democratic Republic of The",  "CK" => "Cook Islands",  "CR" => "Costa Rica",  "CI" => "Cote D'Ivoire",  "HR" => "Croatia",  "CU" => "Cuba",  "CY" => "Cyprus",  "CZ" => "Czech Republic",  "DK" => "Denmark",  "DJ" => "Djibouti",  "DM" => "Dominica",  "DO" => "Dominican Republic",  "TP" => "East Timor",  "EC" => "Ecuador",  "EG" => "Egypt",  "SV" => "El Salvador",  "GQ" => "Equatorial Guinea",  "ER" => "Eritrea",  "EE" => "Estonia",  "ET" => "Ethiopia",  "FK" => "Falkland Islands (Malvinas)",  "FO" => "Faroe Islands",  "FJ" => "Fiji",  "FI" => "Finland",  "FR" => "France",  "FX" => "France, Metropolitan",  "GF" => "French Guiana",  "PF" => "French Polynesia",  "TF" => "French Southern Territories",  "GA" => "Gabon",  "GM" => "Gambia",  "GE" => "Georgia",  "DE" => "Germany",  "GH" => "Ghana",  "GI" => "Gibraltar",  "GR" => "Greece",  "GL" => "Greenland",  "GD" => "Grenada",  "GP" => "Guadeloupe","GU" => "Guam","GT" => "Guatemala","GN" => "Guinea","GW" => "Guinea-Bissau","GY" => "Guyana","HT" => "Haiti","HM" => "Heard And Mc Donald Islands","VA" => "Holy See (Vatican City State)","HN" => "Honduras","HK" => "Hong Kong","HU" => "Hungary","IS" => "Iceland","IN" => "India","ID" => "Indonesia","IR" => "Iran, Islamic Republic of","IQ" => "Iraq","IE" => "Ireland","IL" => "Israel","IT" => "Italy","JM" => "Jamaica","JP" => "Japan","JO" => "Jordan","KZ" => "Kazakhstan","KE" => "Kenya","KI" => "Kiribati","KP" => "Korea, Democratic People's Republic of","KR" => "Korea, Republic of","KW" => "Kuwait","KG" => "Kyrgyzstan","LA" => "Lao People's Democratic Republic","LV" => "Latvia","LB" => "Lebanon","LS" => "Lesotho","LR" => "Liberia","LY" => "Libyan Arab Jamahiriya","LI" => "Liechtenstein","LT" => "Lithuania","LU" => "Luxembourg","MO" => "Macao","MK" => "Macedonia, Former Yugoslav Republic of","MG" => "Madagascar","MW" => "Malawi","MY" => "Malaysia","MV" => "Maldives","ML" => "Mali","MT" => "Malta","MH" => "Marshall Islands","MQ" => "Martinique","MR" => "Mauritania","MU" => "Mauritius","YT" => "Mayotte","MX" => "Mexico","FM" => "Micronesia, Federated States of","MD" => "Moldova, Republic of","MC" => "Monaco","MN" => "Mongolia","MS" => "Montserrat","MA" => "Morocco","MZ" => "Mozambique","MM" => "Myanmar","NA" => "Namibia","NR" => "Nauru","NP" => "Nepal","NL" => "Netherlands","AN" => "Netherlands Antilles","NC" => "New Caledonia","NZ" => "New Zealand","NI" => "Nicaragua","NE" => "Niger","NG" => "Nigeria","NU" => "Niue","NF" => "Norfolk Island","MP" => "Northern Mariana Islands","NO" => "Norway","OM" => "Oman","PK" => "Pakistan","PW" => "Palau","PA" => "Panama","PG" => "Papua New Guinea","PY" => "Paraguay","PE" => "Peru","PH" => "Philippines","PN" => "Pitcairn","PL" => "Poland","PT" => "Portugal","PR" => "Puerto Rico","QA" => "Qatar","RE" => "Reunion","RO" => "Romania","RU" => "Russian Federation","RW" => "Rwanda","KN" => "Saint Kitts and Nevis","LC" => "Saint Lucia","VC" => "Saint Vincent and The Grenadines","WS2" => "Samoa","SM" => "San Marino","ST" => "Sao Tome and Principe","SA" => "Saudi Arabia","SN" => "Senegal","RS" => "Serbia and Montenegro","SC" => "Seychelles","SL" => "Sierra Leone","SG" => "Singapore","SK" => "Slovakia","SI" => "Slovenia","SB" => "Solomon Islands","SO" => "Somalia","ZA" => "South Africa","GS" => "South Georgia, South Sandwich Islands","ES" => "Spain","LK" => "Sri Lanka","SH" => "St. Helena","PM" => "St. Pierre And Miquelon","SD" => "Sudan","SR" => "Suriname","SJ" => "Svalbard and Jan Mayen Islands","SZ" => "Swaziland","SE" => "Sweden","CH" => "Switzerland","SY" => "Syrian Arab Republic","TW" => "Taiwan","TJ" => "Tajikistan","TZ" => "Tanzania, United Republic of","TH" => "Thailand","TG" => "Togo","TK" => "Tokelau","TO" => "Tonga","TT" => "Trinidad And Tobago","TN" => "Tunisia","TR" => "Turkey","TM" => "Turkmenistan","TC" => "Turks and Caicos Islands","TV" => "Tuvalu","UG" => "Uganda","UA" => "Ukraine","AE" => "United Arab Emirates","UM" => "United States Minor Outlying Islands","UY" => "Uruguay","UZ" => "Uzbekistan","VU" => "Vanuatu","VE" => "Venezuela","VN" => "Viet Nam","VG" => "Virgin Islands, British","VI" => "Virgin Islands, U.S.","WF" => "Wallis And Futuna Islands","EH" => "Western Sahara","YE" => "Yemen","YU" => "Yugoslavia","ZM" => "Zambia","ZW" => "Zimbabwe");
    return array_search($c[country], $countries);
}
function getarrayccode($c) {
    $countries = array("GB" => "United Kingdom","US" => "United States","AF" => "Afghanistan","AL" => "Albania","DZ" => "Algeria","AS" => "American Samoa","AD" => "Andorra","AO" => "Angola","AI" => "Anguilla",  "AQ" => "Antarctica",  "AG" => "Antigua and Barbuda",  "AR" => "Argentina",  "AM" => "Armenia",  "AW" => "Aruba",  "AU" => "Australia",  "AT" => "Austria",  "AZ" => "Azerbaijan",  "BS" => "Bahamas",  "BH" => "Bahrain",  "BD" => "Bangladesh",  "BB" => "Barbados",  "BY" => "Belarus",  "BE" => "Belgium",  "BZ" => "Belize",  "BJ" => "Benin",  "BM" => "Bermuda",  "BT" => "Bhutan",  "BO" => "Bolivia",  "BA" => "Bosnia and Herzegovina",  "BW" => "Botswana",  "BV" => "Bouvet Island",  "BR" => "Brazil",  "IO" => "British Indian Ocean Territory",  "BN" => "Brunei Darussalam",  "BG" => "Bulgaria",  "BF" => "Burkina Faso",  "BI" => "Burundi",  "KH" => "Cambodia",  "CM" => "Cameroon",  "CA" => "Canada",  "CV" => "Cape Verde",  "KY" => "Cayman Islands",  "CF" => "Central African Republic",  "TD" => "Chad",  "CL" => "Chile",  "CN" => "China",  "CX" => "Christmas Island",  "CC" => "Cocos (Keeling) Islands",  "CO" => "Colombia",  "KM" => "Comoros",  "CG" => "Congo",  "CD" => "Congo, The Democratic Republic of The",  "CK" => "Cook Islands",  "CR" => "Costa Rica",  "CI" => "Cote D'Ivoire",  "HR" => "Croatia",  "CU" => "Cuba",  "CY" => "Cyprus",  "CZ" => "Czech Republic",  "DK" => "Denmark",  "DJ" => "Djibouti",  "DM" => "Dominica",  "DO" => "Dominican Republic",  "TP" => "East Timor",  "EC" => "Ecuador",  "EG" => "Egypt",  "SV" => "El Salvador",  "GQ" => "Equatorial Guinea",  "ER" => "Eritrea",  "EE" => "Estonia",  "ET" => "Ethiopia",  "FK" => "Falkland Islands (Malvinas)",  "FO" => "Faroe Islands",  "FJ" => "Fiji",  "FI" => "Finland",  "FR" => "France",  "FX" => "France, Metropolitan",  "GF" => "French Guiana",  "PF" => "French Polynesia",  "TF" => "French Southern Territories",  "GA" => "Gabon",  "GM" => "Gambia",  "GE" => "Georgia",  "DE" => "Germany",  "GH" => "Ghana",  "GI" => "Gibraltar",  "GR" => "Greece",  "GL" => "Greenland",  "GD" => "Grenada",  "GP" => "Guadeloupe","GU" => "Guam","GT" => "Guatemala","GN" => "Guinea","GW" => "Guinea-Bissau","GY" => "Guyana","HT" => "Haiti","HM" => "Heard And Mc Donald Islands","VA" => "Holy See (Vatican City State)","HN" => "Honduras","HK" => "Hong Kong","HU" => "Hungary","IS" => "Iceland","IN" => "India","ID" => "Indonesia","IR" => "Iran, Islamic Republic of","IQ" => "Iraq","IE" => "Ireland","IL" => "Israel","IT" => "Italy","JM" => "Jamaica","JP" => "Japan","JO" => "Jordan","KZ" => "Kazakhstan","KE" => "Kenya","KI" => "Kiribati","KP" => "Korea, Democratic People's Republic of","KR" => "Korea, Republic of","KW" => "Kuwait","KG" => "Kyrgyzstan","LA" => "Lao People's Democratic Republic","LV" => "Latvia","LB" => "Lebanon","LS" => "Lesotho","LR" => "Liberia","LY" => "Libyan Arab Jamahiriya","LI" => "Liechtenstein","LT" => "Lithuania","LU" => "Luxembourg","MO" => "Macao","MK" => "Macedonia, Former Yugoslav Republic of","MG" => "Madagascar","MW" => "Malawi","MY" => "Malaysia","MV" => "Maldives","ML" => "Mali","MT" => "Malta","MH" => "Marshall Islands","MQ" => "Martinique","MR" => "Mauritania","MU" => "Mauritius","YT" => "Mayotte","MX" => "Mexico","FM" => "Micronesia, Federated States of","MD" => "Moldova, Republic of","MC" => "Monaco","MN" => "Mongolia","MS" => "Montserrat","MA" => "Morocco","MZ" => "Mozambique","MM" => "Myanmar","NA" => "Namibia","NR" => "Nauru","NP" => "Nepal","NL" => "Netherlands","AN" => "Netherlands Antilles","NC" => "New Caledonia","NZ" => "New Zealand","NI" => "Nicaragua","NE" => "Niger","NG" => "Nigeria","NU" => "Niue","NF" => "Norfolk Island","MP" => "Northern Mariana Islands","NO" => "Norway","OM" => "Oman","PK" => "Pakistan","PW" => "Palau","PA" => "Panama","PG" => "Papua New Guinea","PY" => "Paraguay","PE" => "Peru","PH" => "Philippines","PN" => "Pitcairn","PL" => "Poland","PT" => "Portugal","PR" => "Puerto Rico","QA" => "Qatar","RE" => "Reunion","RO" => "Romania","RU" => "Russian Federation","RW" => "Rwanda","KN" => "Saint Kitts and Nevis","LC" => "Saint Lucia","VC" => "Saint Vincent and The Grenadines","WS2" => "Samoa","SM" => "San Marino","ST" => "Sao Tome and Principe","SA" => "Saudi Arabia","SN" => "Senegal","RS" => "Serbia and Montenegro","SC" => "Seychelles","SL" => "Sierra Leone","SG" => "Singapore","SK" => "Slovakia","SI" => "Slovenia","SB" => "Solomon Islands","SO" => "Somalia","ZA" => "South Africa","GS" => "South Georgia, South Sandwich Islands","ES" => "Spain","LK" => "Sri Lanka","SH" => "St. Helena","PM" => "St. Pierre And Miquelon","SD" => "Sudan","SR" => "Suriname","SJ" => "Svalbard and Jan Mayen Islands","SZ" => "Swaziland","SE" => "Sweden","CH" => "Switzerland","SY" => "Syrian Arab Republic","TW" => "Taiwan","TJ" => "Tajikistan","TZ" => "Tanzania, United Republic of","TH" => "Thailand","TG" => "Togo","TK" => "Tokelau","TO" => "Tonga","TT" => "Trinidad And Tobago","TN" => "Tunisia","TR" => "Turkey","TM" => "Turkmenistan","TC" => "Turks and Caicos Islands","TV" => "Tuvalu","UG" => "Uganda","UA" => "Ukraine","AE" => "United Arab Emirates","UM" => "United States Minor Outlying Islands","UY" => "Uruguay","UZ" => "Uzbekistan","VU" => "Vanuatu","VE" => "Venezuela","VN" => "Viet Nam","VG" => "Virgin Islands, British","VI" => "Virgin Islands, U.S.","WF" => "Wallis And Futuna Islands","EH" => "Western Sahara","YE" => "Yemen","YU" => "Yugoslavia","ZM" => "Zambia","ZW" => "Zimbabwe");
    return array_search($c, $countries);
}
function getarraylocale($c) {
    $countries = array("GB" => "en_GB","US" => "en_US","AF" => "fa_AF","AL" => "sq_AL","DZ" => "ar_DZ","AS" => "en_AS","AD" => "ca_AD","AO" => "en_AO","AI" => "en_AI","AQ" => "en_AQ","AG" => "en_AG","AR" => "es_AR","AM" => "hy_AM","AW" => "nl_AW","AU" => "en_AU","AT" => "de_AT","AZ" => "az_AZ","BS" => "en_BS","BH" => "ar_BH","BD" => "bn_BD","BB" => "en_BB","BY" => "be_BY","BE" => "nl_BE","BZ" => "en_BZ","BJ" => "fr_BJ","BM" => "en_BM","BT" => "dz_BT","BO" => "es_BO","BA" => "hr_BA","BW" => "tn_BW","BV" => "pt_BV","BR" => "pt_BR","IO" => "en_IO","BN" => "ms_BN","BG" => "bg_BG","BF" => "fr_BF","BI" => "fr_BI","KH" => "km_KH","CM" => "fr_CM","CA" => "en_CA","CV" => "pt_CV","KY" => "en_KY","CF" => "fr_CF","TD" => "ar_TD","CL" => "es_CL","CN" => "zh_CN","CX" => "en_CX","CC" => "en_CC","CO" => "es_CO","KM" => "fr_KM","CG" => "ln_CG","CD" => "ln_CD","CK" => "en_CK","CR" => "es_CR","CI" => "fr_CI","HR" => "hr_HR","CU" => "es_CU","CY" => "el_CY","CZ" => "cs_CZ","DK" => "da_DK","DJ" => "ar_DJ","DM" => "en_DM","DO" => "es_DO","TP" => "en_TP","EC" => "es_EC","EG" => "ar_EG","SV" => "es_SV","GQ" => "es_GQ","ER" => "ti_ER","EE" => "et_EE","ET" => "am_ET","FK" => "en_FK","FO" => "fo_FO","FJ" => "en_FJ","FI" => "fi_FI","FR" => "fr_FR","FX" => "fr_FX","GF" => "fr_GF","PF" => "fr_PF","TF" => "fr_TF","GA" => "fr_GA","GM" => "en_GM","GE" => "ka_GE","DE" => "de_DE","GH" => "en_GH","GI" => "en_GI","GR" => "el_GR","GL" => "kl_GL","GD" => "en_GD","GP" => "fr_GP","GU" => "ch_GU","GT" => "es_GT","GN" => "fr_GN","GW" => "pt_GW","GY" => "en_GY","HT" => "fr_HT","HM" => "en_HM","VA" => "en_VA","HN" => "es_HN","HK" => "zh_HK","HU" => "hu_HU","IS" => "is_IS","IN" => "hi_IN","ID" => "id_ID","IR" => "fa_IR","IQ" => "ar_IQ","IE" => "en_IS","IL" => "he_IL","IT" => "it_IT","JM" => "en_JM","JP" => "ja_JP","JO" => "ar_JO","KZ" => "kk_KZ","KE" => "sw_KE","KI" => "en_KI","KP" => "ko_KP","KR" => "ko_KR","KW" => "ar_KW","KG" => "ky_KG","LA" => "lo_LA","LV" => "lv_LV","LB" => "ar_LB","LS" => "en_LS","LR" => "en_LR","LY" => "ar_LY","LI" => "de_LI","LT" => "lt_LT","LU" => "fr_LU","MO" => "zh_MO","MK" => "mk_MK","MG" => "fr_MG","MW" => "en_MW","MY" => "ms_MY","MV" => "dv_MV","ML" => "fr_ML","MT" => "mt_MT","MH" => "en_MH","MQ" => "fr_MQ","MR" => "ar_MR","MU" => "en_MU","YT" => "fr_YT","MX" => "es_MX","FM" => "en_FM","MD" => "ro_MD","MC" => "fr_MC","MN" => "mn_MN","MS" => "en_MS","MA" => "ar_MA","MZ" => "pt_MZ","MM" => "my_MN","NA" => "en_NA","NR" => "en_NR","NP" => "ne_NP","NL" => "nl_NL","AN" => "nl_AN","NC" => "fr_NC","NZ" => "en_NZ","NI" => "es_NI","NE" => "ha_NE","NG" => "en_NG","NU" => "en_NU","NF" => "en_NF","MP" => "ch_MP","NO" => "nb_NO","OM" => "ar_OM","PK" => "ur_PK","PW" => "en_PW","PA" => "es_PA","PG" => "en_PG","PY" => "es_PY","PE" => "es_PE","PH" => "en_PH","PN" => "en_PN","PL" => "pl_PL","PT" => "pt_PT","PR" => "es_PR","QA" => "ar_QA","RE" => "fr_RE","RO" => "ro_RO","RU" => "ru_RU","RW" => "en_RW","KN" => "en_KN","LC" => "en_LC","VC" => "en_VC","WS2" => "en_WS","SM" => "it_SM","ST" => "pt_ST","SA" => "ar_SA","SN" => "fr_SN","RS" => "sr_RS","SC" => "fr_SC","SL" => "sl_SL","SG" => "zh_SG","SK" => "sk_SK","SI" => "sl_SI","SB" => "en_SB","SO" => "ar_SO","ZA" => "af_ZA","GS" => "en_GS","ES" => "es_ES","LK" => "si_LK","SH" => "en_SH","PM" => "fr_PM","SD" => "ar_SD","SR" => "nl_SR","SJ" => "sw_SJ","SZ" => "en_SZ","SE" => "sw_SE","CH" => "de_CH","SY" => "ar_SY","TW" => "zh_TW","TJ" => "tg_TJ","TZ" => "sw_TZ","TH" => "th_TH","TG" => "fr_TG","TK" => "en_TK","TO" => "en_TO","TT" => "en_TT","TN" => "ar_TN","TR" => "tr_TR","TM" => "tr_TM","TC" => "en_TC","TV" => "en_TV","UG" => "en_UG","UA" => "uk_UA","AE" => "ar_AE","UM" => "en_UM","UY" => "es_UY","UZ" => "uz_UZ","VU" => "en_VU","VE" => "es_VE","VN" => "vi_VN","VG" => "en_VG","VI" => "en_VI","WF" => "fr_WF","EH" => "en_EH","YE" => "ar_YE","YU" => "sr_YU","ZM" => "en_ZM","ZW" => "en_ZW");
    foreach($countries as $key=> $val){
	if ( $key == $c ) return $val;
    }
}

function insert_nappcount($v) {
    global $config, $conn, $smarty;
    $rs = $conn->execute("select * from file_responses where rtovid='".$v['vid']."' and rtype='".$v['type']."' and ruid='".$_SESSION['UID']."' and approved='0';");
    return $rs->recordcount();
}
function insert_nappcount2($v) {
    global $config, $conn, $smarty;
    
    if ($v['type']=='audio') { $tbl2='comm_audio'; $tbl='files_audio'; }
    elseif ($v['type']=='image') { $tbl2='comm_img'; $tbl='files_image'; }
    elseif ($v['type']=='video') { $tbl2='comm_vid'; $tbl='files_video'; }
    
    $sql = "select * from $tbl2 where vid='".$v['vid']."' and approved='0';";
    $rs = $conn->execute($sql);
    return $rs->recordcount();
}
function insert_get_audio_playlists() {
    global $config, $conn, $smarty;
    $rs = $conn->execute("select * from playlist_audio where active='1' and uid='$_SESSION[UID]' order by addtime desc;");
    return $rs->getrows();
}
function insert_get_image_playlists() {
    global $config, $conn, $smarty;
    $rs = $conn->execute("select * from playlist_image where active='1' and uid='$_SESSION[UID]' order by addtime desc;");
    return $rs->getrows();
}
function insert_get_video_playlists() {
    global $config, $conn, $smarty;
    $rs = $conn->execute("select * from playlist_video where active='1' and uid='$_SESSION[UID]' order by addtime desc;");
    return $rs->getrows();
}

function insert_get_audio_playlist_count($k) {
    global $config, $conn, $smarty;
    $rs = $conn->execute("select * from playlist_files where ptype='audio' and active='1' and uid='$_SESSION[UID]' and vkey='$k[vkey]' order by position asc;");
    return $rs->recordcount();
}
function insert_get_image_playlist_count($k) {
    global $config, $conn, $smarty;
    $rs = $conn->execute("select * from playlist_files where ptype='image' and active='1' and uid='$_SESSION[UID]' and vkey='$k[vkey]' order by position asc;");
    return $rs->recordcount();
}
function insert_get_video_playlist_count($k) {
    global $config, $conn, $smarty;
    $rs = $conn->execute("select * from playlist_files where ptype='video' and active='1' and uid='$_SESSION[UID]' and vkey='$k[vkey]' order by position asc;");
    return $rs->recordcount();
    
}

function insert_get_video_playlists2($vkey) {
    global $config, $conn, $smarty;
    $rs = $conn->execute("select * from playlist_video where active='1' and uid='$_SESSION[UID]' and vkey != '$vkey[vkey]' order by addtime desc;");
    return $rs->getrows();
}
function insert_get_image_playlists2($vkey) {
    global $config, $conn, $smarty;
    $rs = $conn->execute("select * from playlist_image where active='1' and uid='$_SESSION[UID]' and vkey != '$vkey[vkey]' order by addtime desc;");
    return $rs->getrows();
}
function insert_get_audio_playlists2($vkey) {
    global $config, $conn, $smarty;
    $rs = $conn->execute("select * from playlist_audio where active='1' and uid='$_SESSION[UID]' and vkey != '$vkey[vkey]' order by addtime desc;");
    return $rs->getrows();
}
function send_response_notice( $vuid, $rvid, $rtype, $vtitle1 ) {
    global $config, $conn, $smarty;

	    if ( $config['file_response_not'] == '1' ) {
		$re = $conn->execute("select email,username from members where uid = '$vuid';");
		$email = $re->fields['email'];
		$subto_user = $re->fields['username'];
		$from = $config['admin_email'];
		$name = $config['admin_name'];
		$the_url = $config['base_url'].'/'.$rtype.'/'.ereg_replace(" {1,}", "_", $vtitle1);
		$smarty->assign('username', $subto_user);
		$smarty->assign('sender', $_SESSION['USERNAME']);
		$smarty->assign('ftitle', $vtitle1);
		$smarty->assign('the_url', $the_url);

		$vi2 = $conn->execute("select vid,uid,vtitle,vdescr,vflvname from files_".$rtype." where vid='$rvid';");
		$vid2 = $vi2->fields['vid'];
		$vuid2 = $vi2->fields['uid'];
		$vflv = $vi2->fields['vflvname'];
		$vdesc = $vi2->fields['vdescr'];
		$vtitle2x = $vi2->fields['vtitle'];
		$vtitle2 = ereg_replace(" {1,}", "_", $vtitle2x);
		$the_url2 = $config['base_url'].'/'.$rtype.'/'.$vtitle2;
		$smarty->assign('the_url2', $the_url2);
		$smarty->assign('ftitle2', $vtitle2x);
		$smarty->assign('fdesc', $vdesc);
		$smarty->assign('ftype', $rtype);
		
		if ( $rtype == 'video' ) { $fthumb = $config['base_url']."/media/files_thumbnail/user".$vuid2."/1_".$vid2.substr(md5($vid2),13,7).".jpg"; }
		elseif ( $rtype == 'image' ) { $fthumb = $config['base_url']."/media/files_thumbnail/user".$vuid2."/".$vflv; }
		elseif ( $rtype == 'audio' ) { $fthumb = $config['base_url']."/media/files_thumbnail/user".$vuid2."/1_".$vid2.substr(md5($vid2),11,7).".jpg"; }
		
		$smarty->assign('fthumb', $fthumb);
		
		$ru = $conn->execute("select email_subject, email_path from email_files where email_id='file_responses'");
		if ( $ru->recordcount() > 0 ) {
		    $subj = $ru->fields['email_subject'];
		    $subj = str_replace('$rtype',$rtype,$subj);
		    $subj = str_replace('$title',$vtitle1,$subj);
		    
		    $path = $ru->fields['email_path'];
		    $body = $smarty->fetch($path);
		    mailto ($email, $name, $from, $subj, $body);
		    $m = '1';
		} else $m = '0';
	    }
    return $m;
}
function show_err ( $err_msg ) {
    global $lang;
    $rnd = rand(1,99999999);
    $err_tbl = '<div id="emsgdiv'.$rnd.'" style="display: block;"><table border="0" align="center" cellpadding="0" cellspacing="0" id="err_tbl" width="100%" style="padding-left: 0px; padding-right: 0px; margin: 0px;"><tr><td align="center" width="95%">'.$err_msg.'</td><td align="right" width="3" style="padding: 0px;"><a href="javascript:void(0)" onclick="HideContent(&#39;emsgdiv'.$rnd.'&#39;);">'.$lang['plist_txt54'].'</a>&nbsp;</td></tr></table></div>';
    return $err_tbl;
}
function show_msg ( $not_msg ) {
    global $lang;
    $rnd = rand(1,99999999);
    $msg_tbl = '<div id="smsgdiv'.$rnd.'" style="display: block;"><table border="0" align="center" cellpadding="0" cellspacing="0" id="succ_tbl" width="100%" style="padding-left: 0px; padding-right: 0px; margin: 0px;"><tr><td align="center" width="95%">'.$not_msg.'</td><td align="right" width="3" style="padding: 0px;"><a href="javascript:void(0)" onclick="HideContent(&#39;smsgdiv'.$rnd.'&#39;);">'.$lang['plist_txt54'].'</a>&nbsp;</td></tr></table></div>';
    return $msg_tbl;
}
function insert_get_pchar ( $s ) {
    $m = substr ( $s[from], 2 );
    if ( $m[0] == 'a' ) return 'playlist_audio';
    elseif ( $m[0] == 'i' ) return 'playlist_image';
    elseif ( $m[0] == 'v' ) return 'playlist_video';
}
function insert_get_pkey ( $s ) {
    return substr ( $s[from], 3 );
}
function insert_selfURL() { 
    $s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : ""; 
    $protocol = strleft(strtolower($_SERVER["SERVER_PROTOCOL"]), "/").$s; 
    $port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]); 
    if ( mysql_real_escape_string ( $_GET['language'] ) == '' ) return $string = $protocol."://".$_SERVER['SERVER_NAME'].$port.$_SERVER['REQUEST_URI']; 
    elseif ( mysql_real_escape_string ( $_GET['language'] ) != '' ) { 
	$string = $protocol."://".$_SERVER['SERVER_NAME'].$port.$_SERVER['REQUEST_URI']; 
	return $newstring = substr($string, 0, strpos($string, "/?"));
    }
} 
function strleft($s1, $s2) { 
    return substr($s1, 0, strpos($s1, $s2)); 
}
function insert_is_sub ( $uid ) {
    global $conn, $config; 
    $r = $conn->execute("select * from subscriptions where stype='user' and active='1' and subscriber_uid='".$_SESSION['UID']."' and subscribed_uid='".$uid[uid]."';");
    if ( $r->recordcount() > 0 ) return 'yes'; else return 'no';
}
function insert_is_sub2 ( $uid ) {
    global $conn, $config; 
    $r = $conn->execute("select * from subscriptions where stype='user' and active='1' and subscribed_uid='".$_SESSION['UID']."' and subscriber_uid='".$uid[uid]."';");
    if ( $r->recordcount() > 0 ) return 'yes'; else return 'no';
}
function insert_is_sub_fav ( $uid ) {
    global $conn, $config; 
    $r = $conn->execute("select * from subscriptions where stype='fav' and active='1' and subscriber_uid='".$_SESSION['UID']."' and subscribed_uid='".$uid[uid]."';");
    if ( $r->recordcount() > 0 ) return 'yes'; else return 'no';
}
function insert_is_sub_fav2 ( $uid ) {
    global $conn, $config; 
    $r = $conn->execute("select * from subscriptions where stype='fav' and active='1' and subscribed_uid='".$_SESSION['UID']."' and subscriber_uid='".$uid[uid]."';");
    if ( $r->recordcount() > 0 ) return 'yes'; else return 'no';
}
function insert_is_sub_pl ( $info ) {
    global $conn, $config; 
    $r = $conn->execute("select * from subscriptions where stype='pl".$info[plt].$info[plk]."' and active='1' and subscriber_uid='".$_SESSION['UID']."' and subscribed_uid='".$info[uid]."';");
    if ( $r->recordcount() > 0 ) return 'yes'; else return 'no';
}
function insert_is_sub_pl2 ( $info ) {
    global $conn, $config; 
    $r = $conn->execute("select * from subscriptions where stype='pl".$info[plt].$info[plk]."' and active='1' and subscribed_uid='".$_SESSION['UID']."' and subscriber_uid='".$info[uid]."';");
    if ( $r->recordcount() > 0 ) return 'yes'; else return 'no';
}
function insert_subs_count ( $uid ) {
    global $conn, $config;
    $r = $conn->execute("select * from subscriptions where stype='user' and active='1' and subscribed_uid='".$uid[uid]."';");
    return $r->recordcount();
}
function subs_count ( $uid ) {
    global $conn, $config;
    $r = $conn->execute("select * from subscriptions where stype='user' and active='1' and subscribed_uid='".$uid."';");
    return $r->recordcount();
}
function insert_subs_count_own () {
    global $conn, $config;
    $r = $conn->execute("select * from subscriptions where active='1' and subscriber_uid='".$_SESSION['UID']."';");
    return $r->recordcount();
}
function insert_subs_count_own_admin ($uid) {
    global $conn, $config;
    $r = $conn->execute("select * from subscriptions where active='1' and subscriber_uid='".$uid[uid]."';");
    return $r->recordcount();
}
function insert_pl_count ( $vkey ) {
    global $conn, $config;
    $r = $conn->execute("select * from playlist_files where vkey='".$vkey[vkey]."' and active='1';");
    return $r->recordcount();
}
function insert_plvids ( $vkey ) {
    global $conn, $config;
    $tbl = 'playlist_files';
    //$sql="select s.*,v.* from playlist_".$vkey[ptype]." v, playlist_files s where s.ptype='".$vkey[ptype]."' and v.active='1' and s.active='1' and s.vkey='".$vkey[vkey]."' and v.vkey='".$vkey[vkey]."';";
    $sql = "select * from playlist_files where ptype='".$vkey[ptype]."' and vkey='".$vkey[vkey]."' and active='1'";
    $c1 = $conn->execute($sql);
    return $c1->getrows();
}
function insert_plkey_type ( $vkey ) {
    global $conn, $config;
    $tbl = 'playlist_files';
    $c1 = $conn->execute("select * from playlist_video where vkey='".$vkey[vkey]."';");
    if ( $c1->recordcount() > 0 ) {
        $pl = 'video';
    } else {
        $c1 = $conn->execute("select * from playlist_image where vkey='".$vkey[vkey]."';");
        if ( $c1->recordcount() > 0 ) {
            $pl = 'image';
        } else {
            $c1 = $conn->execute("select * from playlist_audio where vkey='".$vkey[vkey]."';");
            if ( $c1->recordcount() > 0 ) {
                $pl = 'audio';
            }
        }
    }
    return $pl;
}
function insert_count_pmsg() {
    global $conn, $config;
    $r = $conn->execute("select * from comm_profile where uid='$_SESSION[UID]' and active='1';");
    return $r->recordcount();
}
function insert_count_pmsg_admin($uid) {
    global $conn, $config;
    $r = $conn->execute("select * from comm_profile where uid='$uid[uid]' and active='1';");
    return $r->recordcount();
}
function insert_count_vcomm() {
    global $conn, $config;
    $r = $conn->execute("select s.*,v.* from files_video v, comm_vid s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.uid='$_SESSION[UID]' and s.active='1' and v.vid=s.vid");
    return $r->recordcount();
}
function insert_count_vcomm_admin($uid) {
    global $conn, $config;
    $r = $conn->execute("select s.*,v.* from files_video v, comm_vid s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.uid='$uid[uid]' and s.active='1' and v.vid=s.vid");
    return $r->recordcount();
}
function insert_count_vresp() {
    global $conn, $config;
    $r = $conn->execute("select * from file_responses where rtype='video' and ruid='$_SESSION[UID]' and active='1';");
    return $r->recordcount();
}
function insert_count_vresp_admin($uid) {
    global $conn, $config;
    $r = $conn->execute("select * from file_responses where rtype='video' and ruid='$uid[uid]' and active='1';");
    return $r->recordcount();
}
function insert_count_icomm() {
    global $conn, $config;
    $r = $conn->execute("select s.*,v.* from files_image v, comm_img s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.uid='$_SESSION[UID]' and s.active='1' and v.vid=s.vid");
    return $r->recordcount();
}
function insert_count_icomm_admin($uid) {
    global $conn, $config;
    $r = $conn->execute("select s.*,v.* from files_image v, comm_img s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.uid='$uid[uid]' and s.active='1' and v.vid=s.vid");
    return $r->recordcount();
}
function insert_count_iresp() {
    global $conn, $config;
    $r = $conn->execute("select * from file_responses where rtype='image' and ruid='$_SESSION[UID]' and active='1';");
    return $r->recordcount();
}
function insert_count_iresp_admin($uid) {
    global $conn, $config;
    $r = $conn->execute("select * from file_responses where rtype='image' and ruid='$uid[uid]' and active='1';");
    return $r->recordcount();
}
function insert_count_acomm() {
    global $conn, $config;
    $r = $conn->execute("select s.*,v.* from files_audio v, comm_audio s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.uid='$_SESSION[UID]' and s.active='1' and v.vid=s.vid");
    return $r->recordcount();
}
function insert_count_acomm_admin($uid) {
    global $conn, $config;
    $r = $conn->execute("select s.*,v.* from files_audio v, comm_audio s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.uid='$uid[uid]' and s.active='1' and v.vid=s.vid");
    return $r->recordcount();
}
function insert_count_aresp() {
    global $conn, $config;
    $r = $conn->execute("select * from file_responses where rtype='audio' and ruid='$_SESSION[UID]' and active='1';");
    return $r->recordcount();
}
function insert_count_aresp_admin($uid) {
    global $conn, $config;
    $r = $conn->execute("select * from file_responses where rtype='audio' and ruid='$uid[uid]' and active='1';");
    return $r->recordcount();
}
function delete_performer_info($uid='') {
    global $conn, $config;
    if ( $uid == '' ) $update_uid = $_SESSION['UID']; else $update_uid = $uid;
    $conn->execute("update members set about_me='' where uid='$update_uid';");
    $conn->execute("update member_info set p_about='', p_style='', p_infl='', p_sim='', p_bandmem='', p_formdate='', p_reclabel='', p_labeltype='', p_a1cover='', p_a1order='', p_a2cover='', p_a2order='', p_a3cover='', p_a3order='' where p_uid='$update_uid';");
    if ( $conn->Affected_Rows() > 0 ) return '1'; else return '0';
}
function gen_show_key() {
    $possible_chars = "23456789QWERTYUPADFGHJLZXCVBNMqwertyuiopasdfghjklzxcvbnm";
    $i = 0;
    while ( $i < 7 ) {
        $char=substr($possible_chars,mt_rand(0,strlen($possible_chars)-1),1);
        if (!strstr($lkey,$char)) {
            $lkey.=$char;
            $i++;
        }
    }
    return $lkey;
}
function insert_count_type($info) {
    global $lang;
    
    if ( $info[nr] == 1 ) { 
	if ( $info[tp] == 'audio' ) $v_type = $lang['count_singleaudio'];
	if ( $info[tp] == 'image' ) $v_type = $lang['count_singleimage'];
	if ( $info[tp] == 'video' ) $v_type = $lang['count_singlevideo'];
    } else {
	if ( $info[tp] == 'audio' ) $v_type = strtolower ( $lang['audios_main'] );
	if ( $info[tp] == 'image' ) $v_type = strtolower ( $lang['images_main'] );
	if ( $info[tp] == 'video' ) $v_type = strtolower ( $lang['videos_main'] );
    }
    return $v_type;
}
function insert_get_chtype ( $i ) {
    global $lang;
    if ( $i[chnr] == '1' ) return $lang['pr_chinfotype1'];
    elseif ( $i[chnr] == '2' ) return $lang['pr_chinfotype2'];
    elseif ( $i[chnr] == '3' ) return $lang['pr_chinfotype3'];
    elseif ( $i[chnr] == '4' ) return $lang['pr_chinfotype4'];
    elseif ( $i[chnr] == '5' ) return $lang['pr_chinfotype5'];
    elseif ( $i[chnr] == '6' ) return $lang['pr_chinfotype6'];
}
function insert_getimgdim ( $img ) {
    global $conn, $config;
    $imgfile = $config['base_url'].'/media/files_user_bgimages/'.$img[imgname];
    $size = getimagesize($imgfile, $info);
    if ( $img[scale] == 'w' ) return $size[0];
    else return $size[1];
}
function insert_chtype_count ( $info ) {
    global $conn, $config;
    if ( $info[chtype] == 'all' ) $rs=$conn->execute("select count(*) as total from members where ch_type!='' and is_active='1';");
    else $rs=$conn->execute("select count(*) as total from members where ch_type='".$info[chtype]."' and is_active='1';");
    return $rs->fields['total'];
}
?>