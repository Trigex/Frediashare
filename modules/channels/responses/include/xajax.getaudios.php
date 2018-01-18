<?php

$config['pag_resp'] = 4;

if(empty($_SESSION['rnrshow'])) { $_SESSION['rnrshow'] = $config['pag_resp']; }
if(empty($_SESSION['rpagnr'])) { $_SESSION['rpagnr'] = 1; }

function loading_($keyword='') {
    $oRes = new xajaxResponse();
    $oRes->addAssign("preloader","style.display","block");
    return $oRes->getXML();
}
function get_user($u) {
    global $config, $conn, $lang;
    $u=$conn->execute("select username from members where uid='$u';");
    return $u->fields['username'];
}
function del_resp($type, $vidid, $tovid) {
    global $config, $conn, $lang;
    $rs = $conn->execute("delete from file_responses where rtype='$type' and rvid='$vidid' and rtovid='$tovid' and ruid='$_SESSION[UID]';");
    if ( $conn->Affected_Rows() > 0 ) {
        $conn->execute("update files_".$type." set responses=responses-1 where vid='$tovid';");
        if ( $conn->Affected_Rows() > 0 ) { return true; }
            else return false;
    }
}
function listare_respdel($type, $vidid, $tovid) {
    global $config, $conn, $lang;
    $dl = del_resp($type, $vidid, $tovid);
    $fr = $conn->execute("select s.*,v.* from files_audio v, file_responses s where v.active='1' and v.is_inapp='no' and v.vtype='public' and s.rtovid='$tovid' and v.vid=s.rtovid and s.active='1' and s.approved='1' and s.rtype='audio' and (v.is_fileresp='yes' or v.is_fileresp='app') order by s.rtime desc;");
    $tt = '('.$fr->recordcount().')';
    
    $oRes = new xajaxResponse();
    if ( $fr->recordcount() > 0 ) $oRes->addScript("xajax_listare_resp('$_SESSION[rpagnr]', '$tovid');"); else $oRes->addAssign("recipient","innerHTML", $lang['fresp_txt7']);
    $oRes->addAssign("frcount","innerHTML",$tt);
    if ( $fr->recordcount() > 0 ) $oRes->addAssign("preloader","style.display","block"); else $oRes->addAssign("preloader","style.display","none");
    return $oRes->getXML();
}
function listare_resp($afisare_pagina = 1, $vidid) {
    global $config, $conn, $lang, $smarty; 
    include('configs/config.php');
    
    $vu = $conn->execute("select uid from files_audio where vid='$vidid';");
    $vuid = $vu->fields['uid'];
    
    mysql_connect($db_host, $db_user, $db_pass);
    @mysql_select_db($db_name) or die( "No db selected!");
    
    $bvsql = "select s.*,v.* from files_audio v, file_responses s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.rvid and s.rtovid='$vidid' and s.active='1' and s.approved='1' and s.rtype='audio' order by s.rtime desc;";
    
    $result = mysql_query($bvsql) or die (mysql_error());
    while($row = mysql_fetch_assoc($result))
    {
	$uid[]=$row[uid];
	$uname[]=$row[username];
	$vid[]=$row[vid];
	$title[]=truncate($row[vtitle],15);
	$vtitle[]=$row[vtitle];
	$key[]=$row[vkey];
	$views[]=$row[views];
	$len[]=$row[vduration];
	$rate[] = rating_bar2($row[vkey],'5','static','audio');
	$vlink[]=ereg_replace(" {1,}", "_", $row[vtitle]);
    }

    if ($config['def_thumb'] == '1') $bn=rand(1,1);
    elseif ($config['def_thumb'] == '2') $bn=rand(2,2);
    elseif ($config['def_thumb'] == '3') $bn=rand(3,3);
    elseif ($config['def_thumb'] == '4') $bn=rand(1,3);
    
    for($i=0;$i<mysql_num_rows($result);$i++) 
    {
	$poze[$i] = "media/files_thumbnail/user".$uid[$i]."/".$bn."_".$vid[$i].substr(md5($vid[$i]),11,7).".jpg";
	$info[$i] = $title[$i]; //titles
	if($config[same_title_uploads]=="0") $linkuri[$i] = $config[base_url]."/audio/".$vlink[$i]; //links
	else $linkuri[$i] = $config[base_url]."/audio/".$key[$i]; //links
    }

    $oRes = new xajaxResponse();
    $_SESSION['pcount'] = count($poze);
    $total_pagini = floor(count($poze) / $_SESSION['rnrshow']);
    $total_pagini += (count($poze) % $_SESSION['rnrshow'] > 0 ? 1 : 0);
    $_SESSION['rpagnr'] = ($afisare_pagina < 1 ? 1 : ($afisare_pagina > $total_pagini ? $total_pagini : $afisare_pagina));
    $start_to = (($_SESSION['rpagnr'] * $_SESSION['rnrshow']) - $_SESSION['rnrshow']);
    $end_to = ($start_to + $_SESSION['rnrshow'])-1;
    $ctr = 0;

    $html = '<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">';
    $html.= '<tr><td width="17" class="nopad">';
    $html.= '<div id="btnBack" style="display:inline;cursor:pointer;">';
    if($_SESSION['rpagnr'] > 1 ) { if ($_SESSION['UID'] != '' or $config['guests_file_sorting'] == 1) { $html.= '<img src="'.$config['base_url'].'/modules/channels/responses/images/btn_prev.gif" width="17" height="17" border="0" onclick="javascript:sh(\'preloader\');xajax_listare_resp('.($_SESSION['rpagnr']-1).', '.$vidid.');">'; } }
    $html.= '</div>';
    $html.= '</td><td align="center" valign="top">';
    $html.= '<table class="tblpic" border="0" cellpadding="0" cellspacing="0" width="100%"><tr>';

// LIST CYCLE
    if ($end_to > 0)
    {
    for($k=$start_to; $k<=$end_to;$k++) 
    {
	if($config[special_characters]=="1") $ulink=$uid;
	else $ulink=$uname;
	//$config['img_max_width'] = '110';
	//$config['img_max_height'] = '70';
	
	if(file_exists($poze[$k]) && $poze[$k] != "") 
	{
	if($ctr > 3) { $html.= '</tr><tr>'; $ctr = 0; }
	
	$js = '';
	    
	$html.="<td valign=\"top\" class=\"\">
		    <table class=\"\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">
			<tr>
			    <td align=\"center\" class=\"p3\">
				<div class=\"qlistadding2 bottomleft\">
                                <div id=\"alqlistadd".$key[$k]."\" class=\"qlisticon2\">
                                    <a href=\"javascript:void(0)\" alt=\"".$lang['qlist_txt1']."\" title=\"".$lang['qlist_txt1']."\" onmouseover=\"setqlicon('on', 'audio', '".$key[$k]."', 'list');\" onmouseout=\"setqlicon('off', 'audio', '".$key[$k]."', 'list');\" onclick=\"add2ql('audio', 'audio', '".$key[$k]."', 'list', '1', '".$vidid."');\">
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                    </a>
                                </div>
				<a href=\"".$linkuri[$k]."\" title=\"".$vtitle[$k]."\">
				    <img id=\"$rnd\" name=\"$rnd\" class=\"thumb\" width=\"".$config['img_max_width']."\" height=\"".$config['img_max_height']."\" src=\"".$config['base_url']."/".$poze[$k]."\" border=\"0\" alt=\"".$vtitle[$k]."\" ".$js.">
				</a>
			    </td>
			</tr>
			<tr>
			    <td class=\"centered\">
				<a href=\"".$linkuri[$k]."\" title=\"".$vtitle[$k]."\"><span class=\"title\">".$info[$k]."</span></a>
			    </td>
			</tr>
			<tr>
			    <td class=\"centered\">
				<span class=\"gr\">".$lang[fileaddedby]."</span><a href=\"profile/".get_user($uid[$k])."\">".get_user($uid[$k])."</a>
			    </td>
			</tr>
		";
		if ( $_SESSION['UID'] != '' and $_SESSION['UID'] == $vuid ) {
            $b = "<div><input style=\"font-size: 9px; padding: 1px;\" type=\"button\" class=\"fb\" name=\"delresp\" value=\"".$lang['fresp_txt26']."\" onclick=\"if ( confirm ( '".$lang['fresp_txt27']."' ) ) { sh('preloader'); xajax_listare_respdel('audio', '".$vid[$k]."', '".$vidid."'); }\"></div>";
        $html.="
                        <tr>
                            <td align=\"center\" class=\"pt5\">".$b."<div class=\"p5\"></div></td>
                        </tr>
                ";
        }
        else $html.="
                        <tr>
                            <td align=\"center\"><div class=\"nopad\">&nbsp;</div></td>
                        </tr>
                ";
		$html.="</table></td>";
	}
	$ctr += 1;
    }
    } else $html.="<td>".$lang['fresp_txt7']."</td></tr>";
    $html.= '</table>';

    $html.= '</td><td width="17" align="right" class="nopad">';
    $html.= '<div id="btnNext" style="display:inline;cursor:pointer;">';

    if($_SESSION['rpagnr']+1 <= $total_pagini) { if ($_SESSION['UID'] != '' or $config['guests_file_sorting'] == 1) { $html.= '<img src="'.$config['base_url'].'/modules/channels/responses/images/btn_next.gif" width="17" height="17" border="0" onclick="javascript:sh(\'preloader\');xajax_listare_resp('.($_SESSION['rpagnr']+1).', '.$vidid.');">'; } }
    $html.= '</div>';
    $html.= '</td></tr></table>';
    $oRes->addAssign("recipient","innerHTML",$html);
    $oRes->addAssign("preloader","style.display","none");
    return $oRes->getXML();
}

$xajax->registerFunction("loading_");
$xajax->registerFunction("listare_resp");
$xajax->registerFunction("listare_respdel");
?>