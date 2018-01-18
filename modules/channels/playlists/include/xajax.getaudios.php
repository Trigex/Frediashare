<?php

$config['pag_plt'] = 4;

if(empty($_SESSION['pnrshow'])) { $_SESSION['pnrshow'] = $config['pag_plt']; }
if(empty($_SESSION['ppagnr'])) { $_SESSION['ppagnr'] = 1; }

function loading_($keyword='') {
    $oRes = new xajaxResponse();
    $oRes->addAssign("preloader","style.display","block");
    return $oRes->getXML();
}

function choose_thumb($type, $vidid, $thnr, $vkey) {
    global $conn, $lang, $smarty; 
    include('../../configs/config.php');
    
    $fu = $conn->execute("select uid from files_".$type." where vid='".$vidid."'");
    $fuid = $fu->fields['uid'];
    $tt = "<img alt=\"\" title=\"\" class=\"thumb\" width=\"".$config['img_max_width']."\" height=\"".$config['img_max_height']."\" src=\"".$config['base_url']."/media/files_thumbnail/user".$fuid."/".$thnr."_".$vidid.substr(md5($vidid),11,7).".jpg\">";
    
    $oRes = new xajaxResponse();
    if ( $vidid != '' ) $fr = $conn->execute("update playlist_".$type." set thumb='".$vidid."' where vkey='".$vkey."';");
    if ( $conn->Affected_Rows() > 0 ) { 
	//$msgdiv = '<div id="newhide" style="padding: 5px; text-align: center; border: 1px solid green; color: green;">'.$lang['plist_txt52'].'<a href="javascript:void(0)" onclick="HideContent(&#39;getaplthumb&#39;); HideContent(&#39;newhide&#39;);">&nbsp;(X)</a></div>';
	$msgdiv = show_msg ( $lang['plist_txt52'] );
	$oRes->addAssign("preloader","style.display","block"); 
	$oRes->addAssign("aplthumb","innerHTML",$tt); 
	$oRes->addAssign("recipient","innerHTML", $msgdiv);
	$oRes->addAssign("preloader","style.display","none");
    } else { 
	$oRes->addAssign("preloader","style.display","none");
	//$oRes->addAssign("recipient","innerHTML", $lang['plist_txt36']);
	//$oRes->addScript("xajax_listare_resp('$_SESSION[ppagnr]', '$vkey');");
    }
    return $oRes->getXML();
}

function listare_resp($afisare_pagina = 1, $vidid) {
    global $conn, $lang, $smarty; 
    include('../../configs/config.php');
    
    $vu = $conn->execute("select uid from playlist_files where vkey='$vidid' and ptype='audio';");
    $vuid = $vu->fields['uid'];
    
    mysql_connect($db_host, $db_user, $db_pass);
    @mysql_select_db($db_name) or die( "No db selected!");
    
    $bvsql = "select s.*,v.* from files_audio v, playlist_files s where v.active='1' and v.is_inapp='no' and v.vtype='public' and v.vid=s.vid and s.ptype='audio' and s.active='1' and s.vkey='$vidid' order by s.position asc;";
    
    //$result = mysql_query($bvsql) or die (mysql_error());
    $result = mysql_query($bvsql);
    while($row = mysql_fetch_assoc($result)) {
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
	$poze[$i] = "media/files_thumbnail/user".$uid[$i]."/".$bn."_".$vid[$i].substr(md5($vid[$i]),11,7).".jpg"; //thumbs
    }
    $oRes = new xajaxResponse();
    $_SESSION['rpcount'] = count($poze);
    $total_pagini = floor(count($poze) / $_SESSION['pnrshow']);
    $total_pagini += (count($poze) % $_SESSION['pnrshow'] > 0 ? 1 : 0);
    $_SESSION['ppagnr'] = ($afisare_pagina < 1 ? 1 : ($afisare_pagina > $total_pagini ? $total_pagini : $afisare_pagina));
    $start_to = (($_SESSION['ppagnr'] * $_SESSION['pnrshow']) - $_SESSION['pnrshow']);
    $end_to = ($start_to + $_SESSION['pnrshow'])-1;
    $ctr = 0;

    $html = '<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">';
    $html.= '<tr><td width="17" class="nopad">';
    $html.= '<div id="btnBack" style="display:inline;cursor:pointer;">';
    if($_SESSION['ppagnr'] > 1 ) { if ($_SESSION['UID'] != '' or $config['guests_file_sorting'] == 1) { $html.= '<img src="'.$config['base_url'].'/modules/channels/playlists/images/btn_prev.gif" width="17" height="17" border="0" onclick="javascript:prevId=null;sh(\'preloader\');xajax_listare_resp(&quot;'.($_SESSION['ppagnr']-1).'&quot;, &quot;'.$vidid.'&quot;);">'; } }
    $html.= '</div>';
    $html.= '</td><td align="left" valign="top" class="p5">'.$lang['plist_txt48'];
    $html.= '<table class="tblpic" border="0" cellpadding="0" cellspacing="0"><tr>';

// LIST CYCLE
    if ($end_to > 0)
    {
    for($k=$start_to; $k<=$end_to;$k++) 
    {
	if($config[special_characters]=="1") $ulink=$uid;
	else $ulink=$uname;
	$config['img_max_width'] = '90';
	$config['img_max_height'] = '60';
	
	if($poze[$k] != "") 
	{
	if($ctr > 3) { $html.= '</tr><tr>'; $ctr = 0; }
	
	$rnd = $vid[$k].substr(md5($vid[$k]),11,7);
	$js = 'onclick="changeBdr(&#39;pl'.$rnd.'&#39;); document.getElementById(&#39;thisthumb&#39;).value=&#39;'.$vid[$k].'&#39;; document.getElementById(&#39;thisthumbnr&#39;).value=&#39;'.$bn.'&#39;;" style="cursor: pointer; padding: 2px;"';
	
	$html.="<td valign=\"top\" class=\"p2\">
		    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"left\">
			<tr>
			    <td align=\"left\" class=\"\" valign=\"top\">
				<img id=\"pl$rnd\" name=\"$rnd\" class=\"\" width=\"".$config['img_max_width']."\" height=\"".$config['img_max_height']."\" src=\"".$config['base_url']."/".$poze[$k]."\" border=\"0\" alt=\"".$vtitle[$k]."\" ".$js.">
			    </td>
			</tr>
			<tr>
			    <td align=\"center\" class=\"pt5\">".$b."<div class=\"p5\"></div></td>
			</tr>
		";
		$html.="</table></td>";
	}
	$ctr += 1;
    }
    } else $html.="<td>".$lang['fresp_txt7']."</td></tr>";
    $html.= '</table><div><input type="button" class="fb" onclick="sh(&#39;preloader&#39;); xajax_choose_thumb(&#39;audio&#39;, document.getElementById(&#39;thisthumb&#39;).value, document.getElementById(&#39;thisthumbnr&#39;).value, &#39;'.$vidid.'&#39;);" value="'.$lang['plist_txt51'].'" style="width: 70px;">'.$lang['plist_txt10'].'<a href="javascript:void(0)" onclick="HideContent(&#39;getaplthumb&#39;);">'.$lang['comm_cancel'].'</a><input type="hidden" id="thisthumbnr" value=""><input type="hidden" id="thisthumb" value=""></div>';

    $html.= '</td><td width="17" align="right" class="nopad">';
    $html.= '<div id="btnNext" style="display:inline;cursor:pointer;">';

    if($_SESSION['ppagnr']+1 <= $total_pagini) { if ($_SESSION['UID'] != '' or $config['guests_file_sorting'] == 1) { $html.= '<img src="'.$config['base_url'].'/modules/channels/playlists/images/btn_next.gif" width="17" height="17" border="0" onclick="javascript:prevId=null;sh(\'preloader\');xajax_listare_resp(&quot;'.($_SESSION['ppagnr']+1).'&quot;, &quot;'.$vidid.'&quot;);">'; } }
    $html.= '</div>';
    $html.= '</td></tr></table>';
    $oRes->addAssign("recipient","innerHTML",$html);
    $oRes->addAssign("preloader","style.display","none");
    return $oRes->getXML();
}

$xajax->registerFunction("loading_");
$xajax->registerFunction("listare_resp");
$xajax->registerFunction("choose_thumb");
?>