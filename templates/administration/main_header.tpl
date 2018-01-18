<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>{$adm_title}</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript">
    var baseurl = '{$base_url}/';
    var loaded = false;
</script>
<script type="text/javascript" src="{$js_url}/c_config.js"></script>
<script type="text/javascript" src="{$js_url}/c_smartmenus.js"></script>
<script type="text/javascript" src="{$js_url}/menus.js"></script>
<script type="text/javascript" src="{$js_url}/forms/thumbchangegrid.js"></script>
<script type="text/javascript" src="{$js_url}/forms/thumbchangelist.js"></script>
<script type="text/javascript" src="{$js_url}/forms/thumbchangeuser.js"></script>
<script type="text/javascript" src="{$js_url}/effects/prototype.js"></script>
<script type="text/javascript" src="{$js_url}/effects/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="{$js_url}/forms/forms.js"></script> 
<script type="text/javascript" src="{$js_url}/common.js"></script>
<script type="text/javascript" src="{$js_url}/forms/calendar.js?random=20060118"></script>
{if $sbtn eq "allv" or $sbtn eq "adm_vreq"}<script src="{$base_url}/modules/vPlayer/js/swfobject.js"></script>{/if}
<script type="text/javascript">
    var pass_strength_phrases = {ldelim}
	0: '{$passmeter1}', 10: '{$passmeter1}', 20: '{$passmeter2}', 30: '{$passmeter2}', 40: '{$passmeter2}', 50: '{$passmeter3}', 60: '{$passmeter3}', 70: '{$passmeter4}', 80: '{$passmeter4}', 90: '{$passmeter5}', 100: '{$passmeter5}'
    {rdelim};
</script>
<script type="text/javascript" src="{$js_url}/meter/meter.js"></script>
<link rel="stylesheet" type="text/css" href="{$css_url}/meter/meter.css" media="screen">
{if $btn ne "adm_members"}
<script type="text/javascript" src="{$js_url}/rating/behavior.js"></script>
<script type="text/javascript" src="{$js_url}/rating/rating.js"></script>
<link rel="stylesheet" type="text/css" href="{$theme_url}/{$site_theme}/styles/rating/rating.css" media="screen">
<link rel="stylesheet" type="text/css" href="{$theme_url}/{$site_theme}/styles/rating/rating2.css" media="screen">
{/if}
{if $btn eq "adm_image"}
<script type="text/javascript" src="{$js_url}/effects/ibox.js"></script>
<link rel="stylesheet" type="text/css" href="{$css_url}/ibox.css" media="screen">
{/if}
{if $sbtn eq "gen"}
<!--[if lte IE 8.0]>
<style>
    .pass_meter_base {ldelim}background-image:none;{rdelim}
    .pass_meter {ldelim}width: 166px;{rdelim}
</style>
<![endif]-->
{/if}
<script type="text/javascript" src="{$theme_url}/{$site_theme}/js/hiding.js"></script>
<script type="text/javascript" src="{$js_url}/forms/textarea.js"></script>
<link rel="stylesheet" type="text/css" href="{$theme_url}/{$site_theme}/styles/main.css">
<link rel="stylesheet" type="text/css" href="{$theme_url}/{$site_theme}/styles/menu.css">
<link rel="stylesheet" type="text/css" href="{$theme_url}/{$site_theme}/styles/forms/forms.css" media="screen">
<link rel="stylesheet" type="text/css" href="{$theme_url}/{$site_theme}/styles/tooltip.css">
<link rel="stylesheet" type="text/css" href="{$css_url}/common.css" media="screen">

{if $btn eq "adm_members" or $sbtn eq "guest"}
<script type="text/javascript" src="{$js_url}/forms/tablesort.js"></script>
<script type="text/javascript" src="{$js_url}/forms/customsort.js"></script>
<link rel="stylesheet" type="text/css" href="{$theme_url}/{$site_theme}/styles/tablesort.css">
{/if}
<link rel="stylesheet" type="text/css" href="{$css_url}/forms/calendar.css?random=20051112" media="screen">
<style type="text/css">
{include file="pagingcheck.tpl"}
.br1 {ldelim} border-left: 0px; border-right: 0px; {rdelim}
#genset .ff, #sysset .ff {ldelim} width: 200px; {rdelim}
#genset .selbox, #sysset .selbox {ldelim} width: 210px; {rdelim}
</style>

<!--[if lte IE 8.0]> <style> a.QLIcon {ldelim} display:block; position: absolute; float: left; margin: -23px 0 0 -58px; height:15px; width:15px; background:transparent url({$base_url}/modules/channels/images/btnqlist_off.gif) no-repeat scroll 0px 0px; cursor: pointer; {rdelim} </style> <![endif]-->
<!--[if IE]><![if !IE]><![endif]--> <style>body {ldelim} overflow-y: scroll; {rdelim} a.QLIcon {ldelim} display:block; position: absolute; float: left; margin: -20px 0 0 5px; height:15px; width:15px; background:transparent url({$base_url}/modules/channels/images/btnqlist_off.gif) no-repeat scroll 0px 0px; cursor: pointer; {rdelim} </style> <!--[if IE]><![endif]><![endif]-->
<style>a.QLIcon:hover {ldelim} background:transparent url({$base_url}/modules/channels/images/btnqlist_on.gif) no-repeat scroll 0px 0px; {rdelim}</style>
<link rel="stylesheet" type="text/css" href="{$css_url}/qlist.css" media="screen">
</head>
<body onLoad="window.loaded = true;"> 
{if $tpage eq "1"}{assign var=link value=""}{assign var=linka value=""}{assign var=linki value=""}{/if}
{if $smarty.session.AUID eq ""}
{include file="administration/header/menu_table.tpl"}
{include file="administration/header/subheader_table.tpl"}
{include file="administration/header/success_table.tpl"}
{include file="administration/header/error_table.tpl"}
{include file="administration/login_table.tpl"}
{else}
{include file="administration/header/menu_table.tpl"}
{if $sbtn ne "adm_search"}{include file="administration/header/subheader_table.tpl"}{/if}
{include file="administration/header/success_table.tpl"}
{include file="administration/header/error_table.tpl"}
{/if}
