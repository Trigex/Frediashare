<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
	<title>{if $minfo[0].ch_title eq ""}{$site_name|spchar} | {$minfo[0].username}{else}{$minfo[0].ch_title|spchar}{/if}</title>
	<meta name="title" content="{if $minfo[0].ch_title eq ""}{$site_name|spchar} | {$minfo[0].username}{else}{$minfo[0].ch_title|spchar}{/if}">
	<meta name="description" content="{if $minfo[0].ch_desc eq ""}{$meta_desc|spchar}{else}{$minfo[0].ch_desc|spchar}{/if}">
	<meta name="keywords" content="{if $minfo[0].ch_tags eq ""}{$meta_tags|spchar}{else}{$minfo[0].ch_tags|spchar|comrep}{/if}">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style>
	    body {ldelim} 
		margin: 0px; color: {$tinfo[0].th_hb_h2};
		background-color: {$tinfo[0].th_bgcol}; 
		{if $tinfo[0].th_bgimage ne "none"}background-position: top center; background-image: url(../media/files_user_bgimages/{$tinfo[0].th_bgimage}); {if $tinfo[0].th_bgrpt eq "1"}background-repeat: repeat{else}background-repeat: no-repeat{/if};{/if}
		font-family: {$tinfo[0].th_font_fam}; font-size: {$tinfo[0].th_font_size}px;
	    {rdelim}
	    form {ldelim} padding: 0px; margin: 0px; {rdelim}
	    img {ldelim} border: 0px; {rdelim}
	    a.mainl:link, a.mainl:visited, a.mainl:hover, a.mainl:active {ldelim} color: #0033CC; font-family: Arial,Helvetica,sans-serif; font-size: 11px; {rdelim}
	    a:link, a:visited {ldelim} color: {$tinfo[0].th_link}; {rdelim}
	    a {ldelim} text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if}; {rdelim}
	    a:hover {ldelim} text-decoration: underline; {rdelim}
	    #mainlinks {ldelim} text-align: left; padding-left: 5px; padding-top: 5px; font-size: 11px; color: #0033CC; {rdelim}
	    #mainsublinks {ldelim} margin-bottom: 15px; text-align:center; font-size: {$tinfo[0].th_font_size}px; {rdelim}
	    #thesublinks {ldelim} color: {$tinfo[0].th_link}; {rdelim}
	    #thesublinks ul {ldelim} list-style: none; padding: 0; margin: 0; {rdelim} 
	    #thesublinks li {ldelim} float: left; margin: 0 0.15em; {rdelim} 
	    #thesublinks a {ldelim} color: {$tinfo[0].th_link}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if}; padding: 0px 10px; font-size: 13px; {rdelim}
	    #thesublinks a:hover {ldelim} text-decoration: underline; {rdelim}
	    #leftcol {ldelim} width: 300px; {rdelim}
	    #rightcol {ldelim} width: 640px; {rdelim}
	    .cursor {ldelim} cursor:pointer; {rdelim}
	    .label {ldelim} color: {$tinfo[0].th_label}; {rdelim}
	    .bodylabel, .pag_act, .red, .green {ldelim} color: {$tinfo[0].th_bb_h2}; {rdelim}
	    
	    .topcbg {ldelim} width: 960px; height: 11px; background: url({$base_url}/modules/channels/images/chcornerbg.png) no-repeat; {rdelim}
	    .bgwhite {ldelim} background-color: white; {rdelim}
	    table {ldelim} font-family: {$tinfo[0].th_font_fam}; font-size: {$tinfo[0].th_font_size}px; {rdelim}
	    #b1 #err_tbl, #b1 #not_tbl, #b1 #succ_tbl, #b1 .green, #b1 .red {ldelim} color: {$tinfo[0].th_hb_h2}; {rdelim}
	    #err_tbl {ldelim} border: 2px solid {$tinfo[0].th_bb_border}; padding: 5px; color: {$tinfo[0].th_hb_h1}; font-size: 12px; {rdelim}
	    #not_tbl, #succ_tbl {ldelim} border: 2px solid {$tinfo[0].th_bb_border}; padding: 5px; color: {$tinfo[0].th_hb_h1}; font-size: 12px; {rdelim}
	    #slinkdiv a, #uslinkdiv a {ldelim} color: #994700; font-size: 12px; {rdelim}
	    input, textarea, #b1, #b5 {ldelim} color: {$tinfo[0].th_hb_h2}; border: 1px solid {$tinfo[0].th_bb_border}; background: {$tinfo[0].th_hb_bgcol}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; {rdelim}
	    #b2, #b3, #b4, #b6, #b7, #b8, #b9, #b10, #b12b, .brep {ldelim} color: {$tinfo[0].th_hb_h2}; border: 1px solid {$tinfo[0].th_bb_border}; background: {$tinfo[0].th_bb_bgcol}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; {rdelim}
	    #b11 {ldelim} padding: 0px; margin: 0px; background: {$tinfo[0].th_vl_border}; {rdelim}
	    #b9 input {ldelim} font-size: 11px; {rdelim}
	    .thead1 {ldelim} font-size:13px; font-weight:bold; background: {$tinfo[0].th_bb_border}; color: {$tinfo[0].th_bb_h1}; padding-left: 5px; {rdelim}
	    .thead2, .thead2 a {ldelim} font-size:13px; font-weight:bold; height: 25px; background: {$tinfo[0].th_bb_border}; color: {$tinfo[0].th_bb_h1}; padding-left: 5px; {rdelim}
	    .thead1vl, .thead1vl a {ldelim} font-size:13px; font-weight:bold; height: 25px; background: {$tinfo[0].th_vl_border}; border: 1px solid {$tinfo[0].th_vl_border}; color: {$tinfo[0].th_vl_h1}; padding-left: 5px; {rdelim}
	    .thead1btn {ldelim} width: 94px; height: 33px; font-size:14px; font-weight:bold; background: url({$base_url}/modules/channels/images/cbutton.gif) {$tinfo[0].th_bb_border} no-repeat; background-position: center; color: {$tinfo[0].th_bb_h1}; {rdelim}
	    .thead1btn a {ldelim} color: #994700; font-size: 11px; padding-right: 0px; text-decoration: none; font-family: {$tinfo[0].th_font_fam}; {rdelim}
	    .thead1btn a:hover {ldelim} text-decoration: underline; {rdelim}
	    .tbody1 {ldelim} background: {$tinfo[0].th_hb_bgcol}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; padding: 5px; {rdelim}
	    .tbody1vl {ldelim} background: {$tinfo[0].th_vl_bgcol}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; padding: 15px 5px 5px 5px; border: 1px solid {$tinfo[0].th_vl_border}; {rdelim}
	    .tbody2 {ldelim} background: {$tinfo[0].th_bb_bgcol}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; padding: 5px; {rdelim}
	    .vlpost {ldelim} color: {$tinfo[0].th_vl_post}; padding-bottom: 10px; padding-left: 10px; {rdelim}
	    .vlpost input, .vlpost textarea {ldelim} font-size: 11px; width: 250px; {rdelim}
	    .vltext {ldelim} color: {$tinfo[0].th_vl_h2}; padding-bottom: 10px; padding-left: 10px; {rdelim}
	    
	    .dottc {ldelim} border-bottom:1px dashed {$tinfo[0].th_bb_border}; padding:10px; {rdelim}
	    .pborder {ldelim} border: 3px double {$tinfo[0].th_bb_border}; padding: 0px; {rdelim}
	    .border {ldelim} border: 1px solid {$tinfo[0].th_bb_border}; {rdelim}
	    .borderbottom {ldelim} border-bottom: 1px solid {$tinfo[0].th_bb_border}; {rdelim}
	    .largetitle {ldelim} font-size:14px; font-weight:bold; color: {$tinfo[0].th_hb_h2}; padding: 2px 0px; {rdelim}
	    .bold {ldelim} font-weight: bold; {rdelim} .normal {ldelim} font-weight: normal; {rdelim}
	    .f10 {ldelim} font-size: 10px; {rdelim}
	    .f11 {ldelim} font-size: 11px; {rdelim}
	    .f13 {ldelim} font-size: 13px; {rdelim}
	    .f14 {ldelim} font-size: 14px; {rdelim}
	    .f16 {ldelim} font-size: 16px; {rdelim}
	    .p1 {ldelim} padding: 1px 0px; {rdelim} .p2 {ldelim} padding: 2px 0px; {rdelim} .p5 {ldelim} padding: 5px 0px; {rdelim} .p5x {ldelim} padding: 5px; {rdelim}
	    .pt4 {ldelim} padding-top: 4px; {rdelim}
	    .pl5 {ldelim} padding-left: 5px; {rdelim} .pl10 {ldelim} padding-left: 10px; {rdelim} .pt10 {ldelim} padding-top: 10px; {rdelim} .p0 {ldelim} padding: 0px 10px; {rdelim}  .nopad {ldelim} padding: 0px; {rdelim} 
	    .btnmail {ldelim} padding: 0px; height: 16px; background: url({$base_url}/modules/channels/images/btnmail_off.png) no-repeat center; cursor: pointer; {rdelim}
	    .btncomm {ldelim} padding: 0px; height: 16px; background: url({$base_url}/modules/channels/images/btncomm_off.png) no-repeat center; cursor: pointer; {rdelim}
	    .btncommx {ldelim} padding: 0px; height: 16px; background: url({$base_url}/modules/channels/images/btncomm_on.png) no-repeat center; cursor: pointer; {rdelim}
	    .btnshare {ldelim} padding: 0px; height: 16px; background: url({$base_url}/modules/channels/images/btnshare_off.png) no-repeat center; cursor: pointer; {rdelim}
	    .btnsharex {ldelim} padding: 0px; height: 16px; background: url({$base_url}/modules/channels/images/btnshare_on.png) no-repeat center; cursor: pointer; {rdelim}
	    .btnblock {ldelim} padding: 0px; height: 16px; background: url({$base_url}/modules/channels/images/btnblock_off.png) no-repeat center; cursor: pointer; {rdelim}
	    .btnblockx {ldelim} padding: 0px; height: 16px; background: url({$base_url}/modules/channels/images/btnblock_on.png) no-repeat center; cursor: pointer; {rdelim}
	    .btnfriend {ldelim} padding: 0px; height: 16px; background: url({$base_url}/modules/channels/images/btnfriend_off.png) no-repeat center; cursor: pointer; {rdelim}
	    .btnfriendx {ldelim} padding: 0px; height: 16px; background: url({$base_url}/modules/channels/images/btnfriend_on.png) no-repeat center; cursor: pointer; {rdelim}
	</style>
	
	<!--[if lte IE 8.0]> <style> .btnmailx {ldelim} padding: 0px; margin-left: -1px; height: 16px; background: url({$base_url}/modules/channels/images/btnmail_on.png) no-repeat center; cursor: pointer; {rdelim} </style> <![endif]-->
	<!--[if IE]><![if !IE]><![endif]--> <style> .btnmailx {ldelim} padding: 0px; height: 16px; background: url({$base_url}/modules/channels/images/btnmail_on.png) no-repeat center; cursor: pointer; {rdelim} </style> <!--[if IE]><![endif]><![endif]-->
	<link rel="stylesheet" type="text/css" href="{$css_url}/qlist.css" media="screen">
	<script type="text/javascript">	var baseurl = '{$base_url}/'; </script>
	<script language="JavaScript" src="{$base_url}/modules/themes/{$site_theme}/js/hiding.js" type="text/javascript"></script>
	<script language="JavaScript" src="{$base_url}/modules/channels/scripts/ctheme.js" type="text/javascript"></script>
	<script language="JavaScript" src="{$base_url}/modules/channels/scripts/cscript.js" type="text/javascript"></script>
	<script language="JavaScript" src="{$js_url}/effects/prototype.js" type="text/javascript"></script>
	<script language="JavaScript" src="{$js_url}/effects/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script language="JavaScript" src="{$js_url}/forms/thumbchangelist.js" type="text/javascript"></script>
	<script language="JavaScript" src="{$js_url}/forms/thumbchangegrid.js" type="text/javascript"></script>
	<script language="JavaScript" src="{$js_url}/forms/thumbchangeuser.js" type="text/javascript"></script>
	<script language="JavaScript" src="{$js_url}/rating/behavior.js" type="text/javascript"></script>
	<script language="JavaScript" src="{$js_url}/rating/rating.js" type="text/javascript"></script>
	<script language="javascript" src="{$js_url}/common.js" type="text/javascript"></script>
	<script language="javascript" src="{$js_url}/forms/forms.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="{$theme_url}/{$site_theme}/styles/rating/rating.css" media="screen">
	<link rel="stylesheet" type="text/css" href="{$theme_url}/{$site_theme}/styles/rating/rating2.css" media="screen">
	<script language="JavaScript" src="{$js_url}/effects/ibox.js" type="text/javascript"></script>
	<script type="text/javascript" src="{$js_url}/c_config.js"></script>
	<script type="text/javascript" src="{$js_url}/c_smartmenus.js"></script>
	<script type="text/javascript" src="{$js_url}/menus.js"></script>
	<link rel="stylesheet" type="text/css" href="{$css_url}/ibox.css" media="screen">
	<style type="text/css">
	    {include file="pagingcheck.tpl"}
	    .secl, .secl a, .secl li a, .secl input, .secl a:visited {ldelim} font-size: 11px; color: #0033CC; background: none; border-color: #0033CC; {rdelim}
	    #Menu1top {ldelim} font-weight: normal; {rdelim}
	    a.secl:link, a.secl:visited, a.secl:hover, a.secl:active {ldelim} color: #0033CC; font-family: Arial,Helvetica,sans-serif; font-size: 11px; {rdelim}
	</style>
    </head>
    <body onLoad="window.loaded = true;">
	    <table border=0 width="960" cellpadding="0" cellspacing="0" align="center">
		<tr>
		    <td width="110" valign="absmiddle" class="bgwhite" style="padding-right: 10px;">{include file="static/logo_table.tpl"}</td>
		    <td valign="top" class="bgwhite" align="center" nowrap="">
			<div id="mainlinks">
			    {if $enable_audio eq "1"}<a class="mainl" href="{$base_url}/audios">{$uch_thl1}</a> | {/if}
			    {if $enable_images eq "1"}<a class="mainl" href="{$base_url}/images">{$uch_thl2}</a> | {/if}
			    {if $enable_videos eq "1"}<a class="mainl" href="{$base_url}/videos">{$uch_thl3}</a> | {/if}
			    <a class="mainl" href="{$base_url}/channels">{$uch_thl4}</a> | 
			    <a class="mainl" href="{$base_url}/members">{$uch_thl5}</a> | 
			    <a class="mainl" href="{$base_url}/upload">{$uch_thl6}</a>
			</div>
		    </td>
		    <td width="100%" valign="middle" class="bgwhite" align="right">
			{include file="header/search_tabletoplinks.tpl"}<br>
			<table width="100%" cellpadding="5" cellspacing="0" class="secl">
			    <tr>
				<td align="right">
				    <input type="text" id="boxL" name="searchall">&nbsp;
				    <input type="button" value="{$title_search}" name="searchbtn" class="fb" style="padding: 0px; width: 60px;" onclick="location.href='{$base_url}/search/all/'+document.getElementById('boxL').value; return false;">
				</td>
			    </tr>
			</table>
		    </td>
		</tr>
		<tr>
		    <td colspan="3" class="topcbg">&nbsp;</td>
		</tr>
	    </table>
	    <table border=0 width="960" cellpadding="0" cellspacing="0" align="center" id="pmaintbl">
		<tr>
		    <td>
			<div id="mainsublinks" align="center">
			    <table border=0 cellpadding="10" cellspacing="0" align="center">
				<tr>
				    <td align="center">
					<div id="thesublinks">
					    <ul>
						{if $smarty.get.view ne ""}<li><a href="{$base_url}/user/{$smarty.request.user}">{$userpage_mchan}</a></li>{/if}
						{if $enable_audio eq "1"}{if $tinfo[0].th_vid eq "1"}<li><a href="{$base_url}/user/{$smarty.request.user}&view=audios"><span class="{if $smarty.get.view eq "audios"}bold{/if}">{$uch_thl1}</span></a></li>{/if}{/if}
						{if $enable_images eq "1"}{if $tinfo[0].th_vid eq "1"}<li><a href="{$base_url}/user/{$smarty.request.user}&view=images"><span class="{if $smarty.get.view eq "images"}bold{/if}">{$uch_thl2}</span></a></li>{/if}{/if}
						{if $enable_videos eq "1"}{if $tinfo[0].th_vid eq "1"}<li><a href="{$base_url}/user/{$smarty.request.user}&view=videos"><span class="{if $smarty.get.view eq "videos"}bold{/if}">{$uch_thl3}</span></a></li>{/if}{/if}
						{if $tinfo[0].th_fav eq "1"}<li><a href="{$base_url}/user/{$smarty.request.user}&view=favorites&sort={if $enable_videos eq "1"}videos{elseif $enable_images eq "1"}images{elseif $enable_audio eq "1"}audio{/if}"><span class="{if $smarty.get.view eq "favorites"}bold{/if}">{$uch_thl7}</a></span></li>{/if}
						{if $tinfo[0].th_plist eq "1"}<li><a href="{$base_url}/user/{$smarty.request.user}&view=playlists"><span class="{if $smarty.get.view eq "playlists"}bold{/if}">{$uch_thl8}</a></span></li>{/if}
						{if $tinfo[0].th_friends eq "1"}<li><a href="{$base_url}/user/{$smarty.request.user}&view=friends"><span class="{if $smarty.get.view eq "friends"}bold{/if}">{$uch_thl9}</a></span></li>{/if}
						{if $tinfo[0].th_usubs eq "1"}<li><a href="{$base_url}/user/{$smarty.request.user}&view=subscribers"><span class="{if $smarty.get.view eq "subscribers"}bold{/if}">{$uch_thl10}</a></span></li>{/if}
						{if $tinfo[0].th_subs eq "1"}<li><a href="{$base_url}/user/{$smarty.request.user}&view=subscriptions"><span class="{if $smarty.get.view eq "subscriptions"}bold{/if}">{$uch_thl11}</a></span></li>{/if}
					    </ul>
					</div>
				    </td>
				</tr>
			    </table>
