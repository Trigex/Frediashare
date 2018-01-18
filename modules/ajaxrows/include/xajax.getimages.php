<?php
if(empty($_SESSION['nrshowi'])) { $_SESSION['nrshowi'] = 4; }
if(empty($_SESSION['pagnri'])) { $_SESSION['pagnri'] = 1; }

// ADD LINE
function add_iline_($keyword)
{
    if($_SESSION['nrshowi'] >= 4 && $_SESSION['nrshowi'] < $_SESSION['pcounti']) { $_SESSION['nrshowi'] += 4; } 
    else { /* $_SESSION['nrshowi'] = count($poze); */ }

    $oRes = new xajaxResponse();
    $oRes->addAssign("preloaderi","style.display","block");
    if ($keyword == 'featured') $oRes->addScript("xajax_listare_pozei();");
    elseif ($keyword == 'views') $oRes->addScript("xajax_listare_pozei_views();");
    elseif ($keyword == 'ratings') $oRes->addScript("xajax_listare_pozei_ratings();");
    return $oRes->getXML();
}

// DELETE LINE
function del_iline_($keyword) 
{
    if($_SESSION['nrshowi'] > 4) { $_SESSION['nrshowi'] -= 4; } 
    else { $_SESSION['nrshowi'] = 4; }

    $oRes = new xajaxResponse();
    $oRes->addAssign("preloaderi","style.display","block");
    if ($keyword == 'featured') $oRes->addScript("xajax_listare_pozei();");
    elseif ($keyword == 'views') $oRes->addScript("xajax_listare_pozei_views();");
    elseif ($keyword == 'ratings') $oRes->addScript("xajax_listare_pozei_ratings();");
    return $oRes->getXML();
}

function loadingi_($keyword='')
{
    $oRes = new xajaxResponse();
    $oRes->addAssign("preloaderi","style.display","block");
    if ($keyword == 'featured') $oRes->addScript("xajax_listare_pozei();");
    elseif ($keyword == 'views') $oRes->addScript("xajax_listare_pozei_views();");
    elseif ($keyword == 'ratings') $oRes->addScript("xajax_listare_pozei_ratings();");
    return $oRes->getXML();
}

// LISTARE POZELOR
function listare_pozei($afisare_pagina = 1)
{
    global $conn, $lang, $smarty; 
    include('configs/config.php');
    mysql_connect($db_host, $db_user, $db_pass);
    @mysql_select_db($db_name) or die( "No db selected!");
    
    $config['section'] = "image";
    
    $active = "v.is_featured='yes' and v.vtype='public' and v.active='1' and v.is_inapp='no' and v.uid=s.uid order by v.vtitle limit 0,50";
    $bvsql = "select s.*, v.* from files_image v, members s where $active";
    
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
	$rate[] = rating_bar2($row[vkey],'5','static','image');
	$vlink[]=ereg_replace(" {1,}", "_", $row[vtitle]);
	$fname[]=$row[vflvname];
    }

    //$bn=rand(1,3);
    $bn="1";
    for($i=0;$i<mysql_num_rows($result);$i++) 
    {
	$poze[$i] = "media/files_thumbnail/user".$uid[$i]."/".$fname[$i];
	$info[$i] = $title[$i]; //titles
	if($config[same_title_uploads]=="0") $linkuri[$i] = $config[base_url]."/image/".$vlink[$i]; //links
	else $linkuri[$i] = $config[base_url]."/image/".$key[$i]; //links
    }

    $oRes = new xajaxResponse();
    $_SESSION['pcounti'] = count($poze);
    $total_pagini = floor(count($poze) / $_SESSION['nrshowi']);
    $total_pagini += (count($poze) % $_SESSION['nrshowi'] > 0 ? 1 : 0);
    $_SESSION['pagnri'] = ($afisare_pagina < 1 ? 1 : ($afisare_pagina > $total_pagini ? $total_pagini : $afisare_pagina));
    $start_to = (($_SESSION['pagnri'] * $_SESSION['nrshowi']) - $_SESSION['nrshowi']);
    $end_to = ($start_to + $_SESSION['nrshowi'])-1;
    $ctr = 0;

    $html = '<table width="100%" border="0" cellpadding="0" cellspacing="0">';
    $html.= '<tr><td width="17" class="nopad">';
    $html.= '<div id="btnBacki" style="display:inline;cursor:pointer;">';
    if($_SESSION['pagnri'] > 1 ) { if ($_SESSION['UID'] != '' or $config['guests_file_sorting'] == 1) { $html.= '<img src="modules/ajaxrows/images/btn_prev.gif" width="17" height="17" border="0" onclick="javascript:sh(\'preloaderi\');xajax_listare_pozei('.($_SESSION['pagnri']-1).');">'; } }
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
	
	$html.="<td valign=\"top\" class=\"nbg\">
		    <table class=\"pb10\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">
			<tr>
			    <td align=\"center\" class=\"p10\">
				<div class=\"qlistadding2 bottomleft\">
				<div id=\"ilqlistadd".$key[$k]."\" class=\"qlisticon2\">
				    <a href=\"javascript:void(0)\" alt=\"".$lang['qlist_txt1']."\" title=\"".$lang['qlist_txt1']."\" onmouseover=\"setqlicon('on', 'image', '".$key[$k]."', 'list');\" onmouseout=\"setqlicon('off', 'image', '".$key[$k]."', 'list');\" onclick=\"add2ql('image', 'image', '".$key[$k]."', 'list', '1', '".$vidid."');\">
					&nbsp;&nbsp;&nbsp;&nbsp;
				    </a>
				</div>
				<a href=\"".$linkuri[$k]."\" title=\"".$vtitle[$k]."\">
				    <img class=\"thumb\" width=\"".$config['img_max_width']."\" height=\"".$config['img_max_height']."\" src=\"".$poze[$k]."\" border=\"0\" alt=\"".$vtitle[$k]."\">
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
    $html.= '<div id="btnNexti" style="display:inline;cursor:pointer;">';

    if($_SESSION['pagnri']+1 <= $total_pagini) { if ($_SESSION['UID'] != '' or $config['guests_file_sorting'] == 1) { $html.= '<img src="modules/ajaxrows/images/btn_next.gif" width="17" height="17" border="0" onclick="javascript:sh(\'preloaderi\');xajax_listare_pozei('.($_SESSION['pagnri']+1).');">'; } }
    $html.= '</div>';
    $html.= '</td></tr></table>';
/*
    $mesaj_debug = " ===================== <b>INFO - DEBUG</b> =====================<br>";
    $mesaj_debug.= "Total poze: ".count($poze)."<br>";
    $mesaj_debug.= "Poze per pagina: ".$_SESSION['nrshowi']."<br>";
    $mesaj_debug.= "Total pagini: ".$total_pagini."<br>";
    $mesaj_debug.= "Pagina curenta: ".$_SESSION['pagnri']."<br>";
    $mesaj_debug.= "Pozitia: ".$start_to." pana la: ".$end_to;

    $oRes->addAssign("debug_info","innerHTML",$mesaj_debug);
*/
    $oRes->addAssign("recipienti","innerHTML",$html);
    $oRes->addAssign("preloaderi","style.display","none");
    return $oRes->getXML();
}

function listare_pozei_views($afisare_pagina = 1)
{
    global $conn, $lang, $smarty;
    include('configs/config.php');
    mysql_connect($db_host, $db_user, $db_pass);
    @mysql_select_db($db_name) or die( "No db selected!");
    
    $config['section'] = "image";
    $active = "v.vtype='public' and v.active='1' and v.is_inapp='no' and v.uid=s.uid and v.views!='0' order by v.views desc limit 0,50";
    $bvsql = "select s.*, v.* from files_image v, members s where $active";
    
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
	$rate[] = rating_bar2($row[vkey],'5','static','image');
	$vlink[]=ereg_replace(" {1,}", "_", $row[vtitle]);
	$fname[]=$row[vflvname];
    }
    
    //$bn=rand(1,3);
    $bn="1";
    for($i=0;$i<mysql_num_rows($result);$i++) 
    {
	$poze[$i] = "media/files_thumbnail/user".$uid[$i]."/".$fname[$i];
	$info[$i] = $title[$i]; //titles
	if($config[same_title_uploads]=="0") $linkuri[$i] = $config[base_url]."/image/".$vlink[$i]; //links
	else $linkuri[$i] = $config[base_url]."/image/".$key[$i]; //links
    }

    $_SESSION['pcounti'] = count($poze);
    $oRes = new xajaxResponse();
    $total_pagini = floor(count($poze) / $_SESSION['nrshowi']);
    $total_pagini += (count($poze) % $_SESSION['nrshowi'] > 0 ? 1 : 0);
    $_SESSION['pagnri'] = ($afisare_pagina < 1 ? 1 : ($afisare_pagina > $total_pagini ? $total_pagini : $afisare_pagina));
    $start_to = (($_SESSION['pagnri'] * $_SESSION['nrshowi']) - $_SESSION['nrshowi']);
    $end_to = ($start_to + $_SESSION['nrshowi'])-1;
    $ctr = 0;

    $html = '<table width="100%" border="0" cellpadding="0" cellspacing="0">';
    $html.= '<tr><td width="17" class="nopad">';
    $html.= '<div id="btnBacki" style="display:inline;cursor:pointer;">';
    if($_SESSION['pagnri'] > 1 ) { if ($_SESSION['UID'] != '' or $config['guests_file_sorting'] == 1) { $html.= '<img src="modules/ajaxrows/images/btn_prev.gif" width="17" height="17" border="0" onclick="javascript:sh(\'preloaderi\');xajax_listare_pozei_views('.($_SESSION['pagnri']-1).');">'; } }
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
	
	$html.="<td valign=\"top\" class=\"nbg\">
		    <table class=\"pb10\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">
			<tr>
			    <td align=\"center\" class=\"p10\">
				<div class=\"qlistadding2 bottomleft\">
				<div id=\"ilqlistadd".$key[$k]."\" class=\"qlisticon2\">
				    <a href=\"javascript:void(0)\" alt=\"".$lang['qlist_txt1']."\" title=\"".$lang['qlist_txt1']."\" onmouseover=\"setqlicon('on', 'image', '".$key[$k]."', 'list');\" onmouseout=\"setqlicon('off', 'image', '".$key[$k]."', 'list');\" onclick=\"add2ql('image', 'image', '".$key[$k]."', 'list', '1', '".$vidid."');\">
					&nbsp;&nbsp;&nbsp;&nbsp;
				    </a>
				</div>
				<a href=\"".$linkuri[$k]."\" title=\"".$vtitle[$k]."\">
				    <img class=\"thumb\" width=\"".$config['img_max_width']."\" height=\"".$config['img_max_height']."\" src=\"".$poze[$k]."\" border=\"0\" alt=\"".$vtitle[$k]."\">
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
    $html.= '<div id="btnNexti" style="display:inline;cursor:pointer;">';

    if($_SESSION['pagnri']+1 <= $total_pagini) { if ($_SESSION['UID'] != '' or $config['guests_file_sorting'] == 1) { $html.= '<img src="modules/ajaxrows/images/btn_next.gif" width="17" height="17" border="0" onclick="javascript:sh(\'preloaderi\');xajax_listare_pozei_views('.($_SESSION['pagnri']+1).');">'; } }
    $html.= '</div>';
    $html.= '</td></tr></table>';
/*
    $mesaj_debug = " ===================== <b>INFO - DEBUG</b> =====================<br>";
    $mesaj_debug.= "Total poze: ".count($poze)."<br>";
    $mesaj_debug.= "Poze per pagina: ".$_SESSION['nrshowi']."<br>";
    $mesaj_debug.= "Total pagini: ".$total_pagini."<br>";
    $mesaj_debug.= "Pagina curenta: ".$_SESSION['pagnri']."<br>";
    $mesaj_debug.= "Pozitia: ".$start_to." pana la: ".$end_to;

    $oRes->addAssign("debug_info","innerHTML",$mesaj_debug);
*/
    $oRes->addAssign("recipienti","innerHTML",$html);
    $oRes->addAssign("preloaderi","style.display","none");
    return $oRes->getXML();
}

function listare_pozei_ratings($afisare_pagina = 1)
{
    global $conn, $lang, $smarty;
    include('configs/config.php');
    mysql_connect($db_host, $db_user, $db_pass);
    @mysql_select_db($db_name) or die( "No db selected!");
    $config['section'] = "image";
    
    $active = "v.vtype='public' and v.active='1' and v.is_inapp='no' and v.uid=s.uid and v.rate!='0' order by v.rate desc limit 0,50";
    $bvsql = "select s.*, v.* from files_image v, members s where $active";
    
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
	$rate[] = rating_bar2($row[vkey],'5','static','image');
	$vlink[]=ereg_replace(" {1,}", "_", $row[vtitle]);
	$fname[]=$row[vflvname];
    }
    //$bn=rand(1,3);
    $bn="1";
    for($i=0;$i<mysql_num_rows($result);$i++) 
    {
	$poze[$i] = "media/files_thumbnail/user".$uid[$i]."/".$fname[$i];
	$info[$i] = $title[$i]; //titles
	if($config[same_title_uploads]=="0") $linkuri[$i] = $config[base_url]."/image/".$vlink[$i]; //links
	else $linkuri[$i] = $config[base_url]."/image/".$key[$i]; //links
    }

    $_SESSION['pcounti'] = count($poze);
    $oRes = new xajaxResponse();
    $total_pagini = floor(count($poze) / $_SESSION['nrshowi']);
    $total_pagini += (count($poze) % $_SESSION['nrshowi'] > 0 ? 1 : 0);
    $_SESSION['pagnri'] = ($afisare_pagina < 1 ? 1 : ($afisare_pagina > $total_pagini ? $total_pagini : $afisare_pagina));
    $start_to = (($_SESSION['pagnri'] * $_SESSION['nrshowi']) - $_SESSION['nrshowi']);
    $end_to = ($start_to + $_SESSION['nrshowi'])-1;
    $ctr = 0;

    $html = '<table width="100%" border="0" cellpadding="0" cellspacing="0">';
    $html.= '<tr><td width="17" class="nopad">';
    $html.= '<div id="btnBacki" style="display:inline;cursor:pointer;">';
    if($_SESSION['pagnri'] > 1 ) { if ($_SESSION['UID'] != '' or $config['guests_file_sorting'] == 1) { $html.= '<img src="modules/ajaxrows/images/btn_prev.gif" width="17" height="17" border="0" onclick="javascript:sh(\'preloaderi\');xajax_listare_pozei_ratings('.($_SESSION['pagnri']-1).');">'; } }
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
	
	$html.="<td valign=\"top\" class=\"nbg\">
		    <table class=\"pb10\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">
			<tr>
			    <td align=\"center\" class=\"p10\">
				<div class=\"qlistadding2 bottomleft\">
				<div id=\"ilqlistadd".$key[$k]."\" class=\"qlisticon2\">
				    <a href=\"javascript:void(0)\" alt=\"".$lang['qlist_txt1']."\" title=\"".$lang['qlist_txt1']."\" onmouseover=\"setqlicon('on', 'image', '".$key[$k]."', 'list');\" onmouseout=\"setqlicon('off', 'image', '".$key[$k]."', 'list');\" onclick=\"add2ql('image', 'image', '".$key[$k]."', 'list', '1', '".$vidid."');\">
					&nbsp;&nbsp;&nbsp;&nbsp;
				    </a>
				</div>
				<a href=\"".$linkuri[$k]."\" title=\"".$vtitle[$k]."\">
				    <img class=\"thumb\" width=\"".$config['img_max_width']."\" height=\"".$config['img_max_height']."\" src=\"".$poze[$k]."\" border=\"0\" alt=\"".$vtitle[$k]."\">
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
    $html.= '<div id="btnNexti" style="display:inline;cursor:pointer;">';

    if($_SESSION['pagnri']+1 <= $total_pagini) { if ($_SESSION['UID'] != '' or $config['guests_file_sorting'] == 1) { $html.= '<img src="modules/ajaxrows/images/btn_next.gif" width="17" height="17" border="0" onclick="javascript:sh(\'preloaderi\');xajax_listare_pozei_ratings('.($_SESSION['pagnri']+1).');">'; } }
    $html.= '</div>';
    $html.= '</td></tr></table>';
/*
    $mesaj_debug = " ===================== <b>INFO - DEBUG</b> =====================<br>";
    $mesaj_debug.= "Total poze: ".count($poze)."<br>";
    $mesaj_debug.= "Poze per pagina: ".$_SESSION['nrshowi']."<br>";
    $mesaj_debug.= "Total pagini: ".$total_pagini."<br>";
    $mesaj_debug.= "Pagina curenta: ".$_SESSION['pagnri']."<br>";
    $mesaj_debug.= "Pozitia: ".$start_to." pana la: ".$end_to;

    $oRes->addAssign("debug_info","innerHTML",$mesaj_debug);
*/
    $oRes->addAssign("recipienti","innerHTML",$html);
    $oRes->addAssign("preloaderi","style.display","none");
    return $oRes->getXML();
}

$xajax->registerFunction("loadingi_");
$xajax->registerFunction("add_iline_");
$xajax->registerFunction("del_iline_");
$xajax->registerFunction("listare_pozei");
$xajax->registerFunction("listare_pozei_views");
$xajax->registerFunction("listare_pozei_ratings");
?>