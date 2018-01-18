<?php
if(empty($_SESSION['nrshow'])) { $_SESSION['nrshow'] = 4; }
if(empty($_SESSION['pagnr'])) { $_SESSION['pagnr'] = 1; }

// ADD LINE
function add_line_($keyword)
{
    if($_SESSION['nrshow'] >= 4 && $_SESSION['nrshow'] < $_SESSION['pcount']) { $_SESSION['nrshow'] += 4; } 
    else { /* $_SESSION['nrshow'] = count($poze); */ }

    $oRes = new xajaxResponse();
    $oRes->addAssign("preloader","style.display","block");
    if ($keyword == 'featured') $oRes->addScript("xajax_listare_poze();");
    elseif ($keyword == 'views') $oRes->addScript("xajax_listare_poze_views();");
    elseif ($keyword == 'ratings') $oRes->addScript("xajax_listare_poze_ratings();");
    return $oRes->getXML();
}

// DELETE LINE
function del_line_($keyword) 
{
    if($_SESSION['nrshow'] > 4) { $_SESSION['nrshow'] -= 4; } 
    else { $_SESSION['nrshow'] = 4; }

    $oRes = new xajaxResponse();
    $oRes->addAssign("preloader","style.display","block");
    if ($keyword == 'featured') $oRes->addScript("xajax_listare_poze();");
    elseif ($keyword == 'views') $oRes->addScript("xajax_listare_poze_views();");
    elseif ($keyword == 'ratings') $oRes->addScript("xajax_listare_poze_ratings();");
    return $oRes->getXML();
}

function loading_($keyword='')
{
    $oRes = new xajaxResponse();
    $oRes->addAssign("preloader","style.display","block");
    if ($keyword == 'featured') $oRes->addScript("xajax_listare_poze();");
    elseif ($keyword == 'views') $oRes->addScript("xajax_listare_poze_views();");
    elseif ($keyword == 'ratings') $oRes->addScript("xajax_listare_poze_ratings();");
    return $oRes->getXML();
}

// LISTARE POZELOR
function listare_poze($afisare_pagina = 1)
{
    global $conn, $lang, $smarty; 
    include('configs/config.php');
    mysql_connect($db_host, $db_user, $db_pass);
    @mysql_select_db($db_name) or die( "No db selected!");
    
    $config['section'] = "video";
    
    $active = "v.is_featured='yes' and v.vtype='public' and v.active='1' and v.is_inapp='no' and v.uid=s.uid order by v.vtitle limit 0,50";
    $bvsql = "select s.*, v.* from files_video v, members s where $active";
    
    $result = mysql_query($bvsql) or die (mysql_error());
    if ( $config['views_delim'] == 'comma' ) $x = ','; else $x = '.';
    while($row = mysql_fetch_assoc($result))
    {
	$uid[]=$row[uid];
	$uname[]=$row[username];
	$vid[]=$row[vid];
	$title[]=truncate($row[vtitle],15);
	$vtitle[]=$row[vtitle];
	$key[]=$row[vkey];
	$views[]=number_format($row[views],0,$x,$x);
	$len[]=$row[vduration];
	$rate[] = rating_bar2($row[vkey],'5','static','video');
	$vlink[]=ereg_replace(" {1,}", "_", $row[vtitle]);
    }

    if ($config['def_thumb'] == '1') $bn=rand(1,1);
    elseif ($config['def_thumb'] == '2') $bn=rand(2,2);
    elseif ($config['def_thumb'] == '3') $bn=rand(3,3);
    elseif ($config['def_thumb'] == '4') $bn=rand(1,3);
    
    for($i=0;$i<mysql_num_rows($result);$i++) 
    {
	$poze[$i] = "media/files_thumbnail/user".$uid[$i]."/".$bn."_".$vid[$i].substr(md5($vid[$i]),13,7).".jpg"; //thumbs
	$info[$i] = $title[$i]; //titles
	if($config[same_title_uploads]=="0") $linkuri[$i] = $config[base_url]."/video/".$vlink[$i]; //links
	else $linkuri[$i] = $config[base_url]."/video/".$key[$i]; //links
    }

    $oRes = new xajaxResponse();
    $_SESSION['pcount'] = count($poze);
    $total_pagini = floor(count($poze) / $_SESSION['nrshow']);
    $total_pagini += (count($poze) % $_SESSION['nrshow'] > 0 ? 1 : 0);
    $_SESSION['pagnr'] = ($afisare_pagina < 1 ? 1 : ($afisare_pagina > $total_pagini ? $total_pagini : $afisare_pagina));
    $start_to = (($_SESSION['pagnr'] * $_SESSION['nrshow']) - $_SESSION['nrshow']);
    $end_to = ($start_to + $_SESSION['nrshow'])-1;
    $ctr = 0;

    $html = '<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">';
    $html.= '<tr><td width="17" class="nopad">';
    $html.= '<div id="btnBack" style="display:inline;cursor:pointer;">';
    if($_SESSION['pagnr'] > 1 ) { if ($_SESSION['UID'] != '' or $config['guests_file_sorting'] == 1) { $html.= '<img src="modules/ajaxrows/images/btn_prev.gif" width="17" height="17" border="0" onclick="javascript:sh(\'preloader\');xajax_listare_poze('.($_SESSION['pagnr']-1).');">'; } }
    $html.= '</div>';
    $html.= '</td><td align="center" valign="top">';
    $html.= '<table class="tblpic" border="0" cellpadding="0" cellspacing="0"><tr>';

// LIST CYCLE
    if ($end_to > 0)
    {
    for($k=$start_to; $k<=$end_to;$k++) 
    {
	if($config[special_characters]=="1") $ulink=$uid;
	else $ulink=$uname;
	
	if(file_exists($poze[$k]) && $poze[$k] != "") 
	{
	if($ctr > 3) { $html.= '</tr><tr>'; $ctr = 0; }
	
	$rnd = $vid[$k].substr(md5($vid[$k]),13,7);
	if(check_img($uid[$k], $vid[$k]) == 'yes') $thumb_nr = $config['thumb_nr']; else $thumb_nr = 3;
	if($config['thumb_module'] == '1') $js = "onmouseover=\"if (window.loaded == true) { startslide('$rnd','$config[tmb_url]/user$uid[$k]/', '_$rnd.jpg'); }\" onmouseout=\"if (window.loaded == true) { stopslide('$rnd'); this.src='$config[tmb_url]/user$uid[$k]/1_$rnd.jpg'; }\"";
	else $js = '';
	    
	$html.="<td valign=\"top\" class=\"nbg\">
		    <input type=\"hidden\" name=\"thnr$rnd\" id=\"thnr$rnd\" value=\"$thumb_nr\">
		    <input type=\"hidden\" name=\"thdelay$rnd\" id=\"thdelay$rnd\" value=\"$config[thumb_delay]\">
		    <table class=\"pb10\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">
			<tr>
			    <td align=\"center\" class=\"p10\">
				<div class=\"qlistadding2 bottomleft\">
				<div id=\"vlqlistadd".$key[$k]."\" class=\"qlisticon2\">
				    <a href=\"javascript:void(0)\" alt=\"".$lang['qlist_txt1']."\" title=\"".$lang['qlist_txt1']."\" onmouseover=\"setqlicon('on', 'video', '".$key[$k]."', 'list');\" onmouseout=\"setqlicon('off', 'video', '".$key[$k]."', 'list');\" onclick=\"add2ql('video', 'video', '".$key[$k]."', 'list', '1', '".$vidid."');\">
					&nbsp;&nbsp;&nbsp;&nbsp;
				    </a>
				</div>
				<a href=\"".$linkuri[$k]."\" title=\"".$vtitle[$k]."\">
				    <img id=\"$rnd\" name=\"$rnd\" class=\"thumb\" width=\"".$config['img_max_width']."\" height=\"".$config['img_max_height']."\" src=\"".$poze[$k]."\" border=\"0\" alt=\"".$vtitle[$k]."\" ".$js.">
				</a>
				</div>
			    </td>
			</tr>
			<tr> 
                            <td class=\"centered\"> 
                                <a href=\"".$linkuri[$k]."\" title=\"".$vtitle[$k]."\"><span class=\"title\">".$info[$k]."</span></a>
                            </td> 
                        </tr>
			<tr><td class=\"pt2\"></td></tr>
			<tr>
			    <td class=\"centered\">
				<span class=\"gr\">".$lang[fileaddedby]."</span><a href=\"profile/$ulink[$k]\">".$uname[$k]."</a>
			    </td>
			</tr>
			<tr>
			    <td class=\"centered\" colspan=\"2\"><span class=\"gr\">".$lang[fileviews]."</span><span class=\"bold\">".$views[$k]."</span></td>
			</tr>
		";
		if ($config[file_ratings]=="1") 
		{ 
		$html.="<tr>
			    <td align=\"left\">
				<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\">
				    <tr>
					<td class=\"pl19\">".floor($len[$k]/60).$lang[fileduration_min].($len[$k]%60).$lang[fileduration_sec]."</td>
					<td class=\"pl5\">".$rate[$k]."</td>
				    </tr>
				</table>
			    </td>
			</tr>
		    ";
		}
		
		$html.="</table></td>";
	}
	$ctr += 1;
    }
    } else $html.="<td>".$lang['last_nores']."</td></tr>";
    $html.= '</table>';

    $html.= '</td><td width="17" align="right" class="nopad">';
    $html.= '<div id="btnNext" style="display:inline;cursor:pointer;">';

    if($_SESSION['pagnr']+1 <= $total_pagini) { if ($_SESSION['UID'] != '' or $config['guests_file_sorting'] == 1) { $html.= '<img src="modules/ajaxrows/images/btn_next.gif" width="17" height="17" border="0" onclick="javascript:sh(\'preloader\');xajax_listare_poze('.($_SESSION['pagnr']+1).');">'; } }
    $html.= '</div>';
    $html.= '</td></tr></table>';
/*
    $mesaj_debug = " ===================== <b>INFO - DEBUG</b> =====================<br>";
    $mesaj_debug.= "Total poze: ".count($poze)."<br>";
    $mesaj_debug.= "Poze per pagina: ".$_SESSION['nrshow']."<br>";
    $mesaj_debug.= "Total pagini: ".$total_pagini."<br>";
    $mesaj_debug.= "Pagina curenta: ".$_SESSION['pagnr']."<br>";
    $mesaj_debug.= "Pozitia: ".$start_to." pana la: ".$end_to;

    $oRes->addAssign("debug_info","innerHTML",$mesaj_debug);
*/
    $oRes->addAssign("recipient","innerHTML",$html);
    $oRes->addAssign("preloader","style.display","none");
    return $oRes->getXML();
}

function listare_poze_views($afisare_pagina = 1)
{
    global $conn, $lang, $smarty;
    include('configs/config.php');
    mysql_connect($db_host, $db_user, $db_pass);
    @mysql_select_db($db_name) or die( "No db selected!");
    
    $config['section'] = "video";
    $active = "v.vtype='public' and v.active='1' and v.is_inapp='no' and v.uid=s.uid and v.views!='0' order by v.views desc limit 0,50";
    $bvsql = "select s.*, v.* from files_video v, members s where $active";
    
    $result = mysql_query($bvsql) or die (mysql_error());
    if ( $config['views_delim'] == 'comma' ) $x = ','; else $x = '.';
    while($row = mysql_fetch_assoc($result))
    {
	$uid[]=$row[uid];
	$uname[]=$row[username];
	$vid[]=$row[vid];
	$title[]=truncate($row[vtitle],15);
	$vtitle[]=$row[vtitle];
	$key[]=$row[vkey];
	$views[]=number_format($row[views],0,$x,$x);
	$len[]=$row[vduration];
	$rate[] = rating_bar2($row[vkey],'5','static','video');
	$vlink[]=ereg_replace(" {1,}", "_", $row[vtitle]);
    }
    
    if ($config['def_thumb'] == '1') $bn=rand(1,1);
    elseif ($config['def_thumb'] == '2') $bn=rand(2,2);
    elseif ($config['def_thumb'] == '3') $bn=rand(3,3);
    elseif ($config['def_thumb'] == '4') $bn=rand(1,3);
    
    for($i=0;$i<mysql_num_rows($result);$i++) 
    {
	$poze[$i] = "media/files_thumbnail/user".$uid[$i]."/".$bn."_".$vid[$i].substr(md5($vid[$i]),13,7).".jpg"; //thumbs
	$info[$i] = $title[$i]; //titles
	if($config[same_title_uploads]=="0") $linkuri[$i] = $config[base_url]."/video/".$vlink[$i]; //links
	else $linkuri[$i] = $config[base_url]."/video/".$key[$i]; //links
    }

    $_SESSION['pcount'] = count($poze);
    $oRes = new xajaxResponse();
    $total_pagini = floor(count($poze) / $_SESSION['nrshow']);
    $total_pagini += (count($poze) % $_SESSION['nrshow'] > 0 ? 1 : 0);
    $_SESSION['pagnr'] = ($afisare_pagina < 1 ? 1 : ($afisare_pagina > $total_pagini ? $total_pagini : $afisare_pagina));
    $start_to = (($_SESSION['pagnr'] * $_SESSION['nrshow']) - $_SESSION['nrshow']);
    $end_to = ($start_to + $_SESSION['nrshow'])-1;
    $ctr = 0;

    $html = '<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">';
    $html.= '<tr><td width="17" class="nopad">';
    $html.= '<div id="btnBack" style="display:inline;cursor:pointer;">';
    if($_SESSION['pagnr'] > 1 ) { if ($_SESSION['UID'] != '' or $config['guests_file_sorting'] == 1) { $html.= '<img src="modules/ajaxrows/images/btn_prev.gif" width="17" height="17" border="0" onclick="javascript:sh(\'preloader\');xajax_listare_poze_views('.($_SESSION['pagnr']-1).');">'; } }
    $html.= '</div>';
    $html.= '</td><td align="center" valign="top">';

    $html.= '<table class="tblpic" border="0" cellpadding="0" cellspacing="0"><tr>';


// LIST CYCLE
    if ($end_to > 0)
    {
    for($k=$start_to; $k<=$end_to;$k++) 
    {
	if($config[special_characters]=="1") $ulink=$uid;
	else $ulink=$uname;
    
	if(file_exists($poze[$k]) && $poze[$k] != "") 
	{
	if($ctr > 3) { $html.= '</tr><tr>'; $ctr = 0; }
	
	$rnd = $vid[$k].substr(md5($vid[$k]),13,7);
	if(check_img($uid[$k], $vid[$k]) == 'yes') $thumb_nr = $config['thumb_nr']; else $thumb_nr = 3;
	if($config['thumb_module'] == '1') $js = "onmouseover=\"if (window.loaded == true) { startslide('$rnd','$config[tmb_url]/user$uid[$k]/', '_$rnd.jpg'); }\" onmouseout=\"if (window.loaded == true) { stopslide('$rnd'); this.src='$config[tmb_url]/user$uid[$k]/1_$rnd.jpg'; }\"";
	else $js = '';
	
	$html.="<td valign=\"top\" class=\"nbg\">
		    <input type=\"hidden\" name=\"thnr$rnd\" id=\"thnr$rnd\" value=\"$thumb_nr\">
		    <input type=\"hidden\" name=\"thdelay$rnd\" id=\"thdelay$rnd\" value=\"$config[thumb_delay]\">
		    <table class=\"pb10\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">
			<tr>
			    <td align=\"center\" class=\"p10\">
				<div class=\"qlistadding2 bottomleft\">
				<div id=\"vlqlistadd".$key[$k]."\" class=\"qlisticon2\">
				    <a href=\"javascript:void(0)\" alt=\"".$lang['qlist_txt1']."\" title=\"".$lang['qlist_txt1']."\" onmouseover=\"setqlicon('on', 'video', '".$key[$k]."', 'list');\" onmouseout=\"setqlicon('off', 'video', '".$key[$k]."', 'list');\" onclick=\"add2ql('video', 'video', '".$key[$k]."', 'list', '1', '".$vidid."');\">
					&nbsp;&nbsp;&nbsp;&nbsp;
				    </a>
				</div>
				<a href=\"".$linkuri[$k]."\" title=\"".$vtitle[$k]."\">
				    <img id=\"$rnd\" name=\"$rnd\" class=\"thumb\" width=\"".$config['img_max_width']."\" height=\"".$config['img_max_height']."\" src=\"".$poze[$k]."\" border=\"0\" alt=\"".$vtitle[$k]."\" ".$js.">
				</a>
				</div>
			    </td>
			</tr>
			<tr> 
                            <td class=\"centered\"> 
                                <a href=\"".$linkuri[$k]."\" title=\"".$vtitle[$k]."\"><span class=\"title\">".$info[$k]."</span></a>
                            </td> 
                        </tr>
			<tr><td class=\"pt2\"></td></tr>
			<tr>
			    <td class=\"centered\">
				<span class=\"gr\">".$lang[fileaddedby]."</span><a href=\"profile/$ulink[$k]\">".$uname[$k]."</a>
			    </td>
			</tr>
			<tr>
			    <td class=\"centered\" colspan=\"2\"><span class=\"gr\">".$lang[fileviews]."</span><span class=\"bold\">".$views[$k]."</span></td>
			</tr>
		";
		if ($config[file_ratings]=="1") 
		{ 
		$html.="<tr>
			    <td align=\"left\">
				<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\">
				    <tr>
					<td class=\"pl19\">".floor($len[$k]/60).$lang[fileduration_min].($len[$k]%60).$lang[fileduration_sec]."</td>
					<td class=\"pl5\">".$rate[$k]."</td>
				    </tr>
				</table>
			    </td>
			</tr>
		    ";
		}
		
		$html.="</table></td>";
	}
	$ctr += 1;
    }
    } else $html.="<td>".$lang['last_nores']."</td></tr>";
    $html.= '</table>';

    $html.= '</td><td width="17" align="right" class="nopad">';
    $html.= '<div id="btnNext" style="display:inline;cursor:pointer;">';

    if($_SESSION['pagnr']+1 <= $total_pagini) { if ($_SESSION['UID'] != '' or $config['guests_file_sorting'] == 1) { $html.= '<img src="modules/ajaxrows/images/btn_next.gif" width="17" height="17" border="0" onclick="javascript:sh(\'preloader\');xajax_listare_poze_views('.($_SESSION['pagnr']+1).');">'; } }
    $html.= '</div>';
    $html.= '</td></tr></table>';
/*
    $mesaj_debug = " ===================== <b>INFO - DEBUG</b> =====================<br>";
    $mesaj_debug.= "Total poze: ".count($poze)."<br>";
    $mesaj_debug.= "Poze per pagina: ".$_SESSION['nrshow']."<br>";
    $mesaj_debug.= "Total pagini: ".$total_pagini."<br>";
    $mesaj_debug.= "Pagina curenta: ".$_SESSION['pagnr']."<br>";
    $mesaj_debug.= "Pozitia: ".$start_to." pana la: ".$end_to;

    $oRes->addAssign("debug_info","innerHTML",$mesaj_debug);
*/
    $oRes->addAssign("recipient","innerHTML",$html);
    $oRes->addAssign("preloader","style.display","none");
    return $oRes->getXML();
}

function listare_poze_ratings($afisare_pagina = 1)
{
    global $conn, $lang, $smarty;
    include('configs/config.php');
    mysql_connect($db_host, $db_user, $db_pass);
    @mysql_select_db($db_name) or die( "No db selected!");
    $config['section'] = "video";
    
    $active = "v.vtype='public' and v.active='1' and v.is_inapp='no' and v.uid=s.uid and v.rate!='0' order by v.rate desc limit 0,50";
    $bvsql = "select s.*, v.* from files_video v, members s where $active";
    
    $result = mysql_query($bvsql) or die (mysql_error());
    if ( $config['views_delim'] == 'comma' ) $x = ','; else $x = '.';
    while($row = mysql_fetch_assoc($result))
    {
	$uid[]=$row[uid];
	$uname[]=$row[username];
	$vid[]=$row[vid];
	$title[]=truncate($row[vtitle],15);
	$vtitle[]=$row[vtitle];
	$key[]=$row[vkey];
	$views[]=number_format($row[views],0,$x,$x);
	$len[]=$row[vduration];
	$rate[] = rating_bar2($row[vkey],'5','static','video');
	$vlink[]=ereg_replace(" {1,}", "_", $row[vtitle]);
    }

    if ($config['def_thumb'] == '1') $bn=rand(1,1);
    elseif ($config['def_thumb'] == '2') $bn=rand(2,2);
    elseif ($config['def_thumb'] == '3') $bn=rand(3,3);
    elseif ($config['def_thumb'] == '4') $bn=rand(1,3);

    for($i=0;$i<mysql_num_rows($result);$i++) 
    {
	$poze[$i] = "media/files_thumbnail/user".$uid[$i]."/".$bn."_".$vid[$i].substr(md5($vid[$i]),13,7).".jpg"; //thumbs
	$info[$i] = $title[$i]; //titles
	if($config[same_title_uploads]=="0") $linkuri[$i] = $config[base_url]."/video/".$vlink[$i]; //links
	else $linkuri[$i] = $config[base_url]."/video/".$key[$i]; //links
    }

    $_SESSION['pcount'] = count($poze);
    $oRes = new xajaxResponse();
    $total_pagini = floor(count($poze) / $_SESSION['nrshow']);
    $total_pagini += (count($poze) % $_SESSION['nrshow'] > 0 ? 1 : 0);
    $_SESSION['pagnr'] = ($afisare_pagina < 1 ? 1 : ($afisare_pagina > $total_pagini ? $total_pagini : $afisare_pagina));
    $start_to = (($_SESSION['pagnr'] * $_SESSION['nrshow']) - $_SESSION['nrshow']);
    $end_to = ($start_to + $_SESSION['nrshow'])-1;
    $ctr = 0;

    $html = '<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">';
    $html.= '<tr><td width="17" class="nopad">';
    $html.= '<div id="btnBack" style="display:inline;cursor:pointer;">';
    if($_SESSION['pagnr'] > 1 ) { if ($_SESSION['UID'] != '' or $config['guests_file_sorting'] == 1) { $html.= '<img src="modules/ajaxrows/images/btn_prev.gif" width="17" height="17" border="0" onclick="javascript:sh(\'preloader\');xajax_listare_poze_ratings('.($_SESSION['pagnr']-1).');">'; } }
    $html.= '</div>';
    $html.= '</td><td align="center" valign="top">';

    $html.= '<table class="tblpic" border="0" cellpadding="0" cellspacing="0"><tr>';

// LIST CYCLE
    if ($end_to > 0)
    {
    for($k=$start_to; $k<=$end_to;$k++) 
    {
	if($config[special_characters]=="1") $ulink=$uid;
	else $ulink=$uname;
    
	if(file_exists($poze[$k]) && $poze[$k] != "") 
	{
	if($ctr > 3) { $html.= '</tr><tr>'; $ctr = 0; }

	$rnd = $vid[$k].substr(md5($vid[$k]),13,7);
	if(check_img($uid[$k], $vid[$k]) == 'yes') $thumb_nr = $config['thumb_nr']; else $thumb_nr = 3;
	if($config['thumb_module'] == '1') $js = "onmouseover=\"if (window.loaded == true) { startslide('$rnd','$config[tmb_url]/user$uid[$k]/', '_$rnd.jpg'); }\" onmouseout=\"if (window.loaded == true) { stopslide('$rnd'); this.src='$config[tmb_url]/user$uid[$k]/1_$rnd.jpg'; }\"";
	else $js = '';
	
	
	$html.="<td valign=\"top\" class=\"nbg\">
		    <input type=\"hidden\" name=\"thnr$rnd\" id=\"thnr$rnd\" value=\"$thumb_nr\">
		    <input type=\"hidden\" name=\"thdelay$rnd\" id=\"thdelay$rnd\" value=\"$config[thumb_delay]\">
		    <table class=\"pb10\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">
			<tr>
			    <td align=\"center\" class=\"p10\">
				<div class=\"qlistadding2 bottomleft\">
				<div id=\"vlqlistadd".$key[$k]."\" class=\"qlisticon2\">
				    <a href=\"javascript:void(0)\" alt=\"".$lang['qlist_txt1']."\" title=\"".$lang['qlist_txt1']."\" onmouseover=\"setqlicon('on', 'video', '".$key[$k]."', 'list');\" onmouseout=\"setqlicon('off', 'video', '".$key[$k]."', 'list');\" onclick=\"add2ql('video', 'video', '".$key[$k]."', 'list', '1', '".$vidid."');\">
					&nbsp;&nbsp;&nbsp;&nbsp;
				    </a>
				</div>
				<a href=\"".$linkuri[$k]."\" title=\"".$vtitle[$k]."\">
				    <img id=\"$rnd\" name=\"$rnd\" class=\"thumb\" width=\"".$config['img_max_width']."\" height=\"".$config['img_max_height']."\" src=\"".$poze[$k]."\" border=\"0\" alt=\"".$vtitle[$k]."\" ".$js.">
				</a>
				</div>
			    </td>
			</tr>
			<tr> 
                            <td class=\"centered\"> 
                                <a href=\"".$linkuri[$k]."\" title=\"".$vtitle[$k]."\"><span class=\"title\">".$info[$k]."</span></a>
                            </td> 
                        </tr>
			<tr><td class=\"pt2\"></td></tr>
			<tr>
			    <td class=\"centered\">
				<span class=\"gr\">".$lang[fileaddedby]."</span><a href=\"profile/$ulink[$k]\">".$uname[$k]."</a>
			    </td>
			</tr>
			<tr>
			    <td class=\"centered\" colspan=\"2\"><span class=\"gr\">".$lang[fileviews]."</span><span class=\"bold\">".$views[$k]."</span></td>
			</tr>
		";
		if ($config[file_ratings]=="1") 
		{ 
		$html.="<tr>
			    <td align=\"left\">
				<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\">
				    <tr>
					<td class=\"pl19\">".floor($len[$k]/60).$lang[fileduration_min].($len[$k]%60).$lang[fileduration_sec]."</td>
					<td class=\"pl5\">".$rate[$k]."</td>
				    </tr>
				</table>
			    </td>
			</tr>
		    ";
		}
		
		$html.="</table></td>";
	}
	$ctr += 1;
    }
    } else $html.="<td>".$lang['last_nores']."</td></tr>";
    $html.= '</table>';

    $html.= '</td><td width="17" align="right" class="nopad">';
    $html.= '<div id="btnNext" style="display:inline;cursor:pointer;">';

    if($_SESSION['pagnr']+1 <= $total_pagini) { if ($_SESSION['UID'] != '' or $config['guests_file_sorting'] == 1) { $html.= '<img src="modules/ajaxrows/images/btn_next.gif" width="17" height="17" border="0" onclick="javascript:sh(\'preloader\');xajax_listare_poze_ratings('.($_SESSION['pagnr']+1).');">'; } }
    $html.= '</div>';
    $html.= '</td></tr></table>';
/*
    $mesaj_debug = " ===================== <b>INFO - DEBUG</b> =====================<br>";
    $mesaj_debug.= "Total poze: ".count($poze)."<br>";
    $mesaj_debug.= "Poze per pagina: ".$_SESSION['nrshow']."<br>";
    $mesaj_debug.= "Total pagini: ".$total_pagini."<br>";
    $mesaj_debug.= "Pagina curenta: ".$_SESSION['pagnr']."<br>";
    $mesaj_debug.= "Pozitia: ".$start_to." pana la: ".$end_to;

    $oRes->addAssign("debug_info","innerHTML",$mesaj_debug);
*/
    $oRes->addAssign("recipient","innerHTML",$html);
    $oRes->addAssign("preloader","style.display","none");
    return $oRes->getXML();
}

$xajax->registerFunction("loading_");
$xajax->registerFunction("add_line_");
$xajax->registerFunction("del_line_");
$xajax->registerFunction("listare_poze");
$xajax->registerFunction("listare_poze_views");
$xajax->registerFunction("listare_poze_ratings");
?>