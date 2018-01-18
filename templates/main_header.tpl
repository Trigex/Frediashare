<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>{$site_name|spchar} | {$title|spchar}</title>
{if $flag eq "1"}{insert name=video_tags assign=tags vid=$vidid}{elseif $flag eq "2"}{insert name=audio_tags assign=tags vid=$vidid}{elseif $flag eq "3"}{insert name=image_tags assign=tags vid=$vidid}{/if}
{if $cdesc ne ""}
<meta name="description" content="{$cdesc|spchar}">
{elseif $descr ne ""}
<meta name="description" content="{$descr|spchar}">
{else}
<meta name="description" content="{$meta_desc|spchar}">
{/if}
{if $flag eq "1" or $flag eq "2" or $flag eq "3"}
<meta name="keywords" content="{section name=i loop=$tags}{$tags[i]}{if !$smarty.section.i.last}, {/if}{/section}, {$meta_tags|spchar}">
{else}
<meta name="keywords" content="{$meta_tags|spchar}">
{/if}
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript">
    var baseurl = '{$base_url}/';
    var loaded = false;
</script>
{if $btn eq "messages" or $btn eq "bvideo" or $btn eq "bimage" or $btn eq "baudio" or $sbtn eq "myimg" or $sbtn eq "myvid" or $sbtn eq "myaud" or $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "profile" or $btn eq "bmember" or $sbtn eq "search" or $sbtn eq "ufavs" or $sbtn eq "reg" or $sbtn eq "login" or $sbtn eq "main" or $sbtn eq "comments" or $sbtn eq "ufr" or $sbtn eq "mpr" or $sbtn eq "mysubs" or $sbtn eq "myusubs" or $btn eq "bcateg" or $sbtn eq "resp" or $sbtn eq "mql" or $sbtn eq "mpl2" or $sbtn eq "pd" or $sbtn eq "bchan"}
<script type="text/javascript" src="{$js_url}/effects/prototype.js"></script>
{/if}
{if $flag eq "1" or $flag eq "2" or $flag eq "3" or $sbtn eq "profile" or $sbtn eq "comments"}<script type="text/javascript" src="{$js_url}/effects/scriptaculous.js?load=effects,builder"></script>{/if}
<script type="text/javascript" src="{$js_url}/forms/forms.js"></script>
<script type="text/javascript" src="{$js_url}/common.js"></script>
<script type="text/javascript" src="{$js_url}/c_config.js"></script>
<script type="text/javascript" src="{$js_url}/c_smartmenus.js"></script>
<script type="text/javascript" src="{$js_url}/menus.js"></script>
<script type="text/javascript" src="{$js_url}/forms/thumbchangelist.js"></script>
<script type="text/javascript" src="{$js_url}/forms/thumbchangegrid.js"></script>
<script type="text/javascript" src="{$js_url}/forms/thumbchangeuser.js"></script>
{if $sbtn eq "mpr" or $sbtn eq "reg" or $sbtn eq "shows"}<script type="text/javascript" src="{$js_url}/forms/calendar.js?random=20060118"></script>{/if}
{if $btn eq "bupload"}<script type="text/javascript" src="{$js_url}/forms/uploader.js"></script>{/if}
{if $flag eq "1" or $flag eq "2" or $flag eq "3" or $sbtn eq "profile"}<script type="text/javascript" src="{$js_url}/tabs/paging.js"></script>{/if}
{if $sbtn eq "reg" or $sbtn eq "mpr"}
<script type="text/javascript">
    var pass_strength_phrases = {ldelim}
	0: '{$passmeter1}', 10: '{$passmeter1}', 20: '{$passmeter2}', 30: '{$passmeter2}', 40: '{$passmeter2}', 50: '{$passmeter3}', 60: '{$passmeter3}', 70: '{$passmeter4}', 80: '{$passmeter4}', 90: '{$passmeter5}', 100: '{$passmeter5}'
    {rdelim};
</script>
<script type="text/javascript" src="{$js_url}/meter/meter.js"></script>
{/if}
{if $btn eq "bhome" or $btn eq "bvideo" or $btn eq "bimage" or $btn eq "baudio" or $btn eq "bcateg" or $sbtn eq "myvid" or $sbtn eq "myaud" or $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpr" or $sbtn eq "profile"}
<script type="text/javascript" src="{$js_url}/rating/behavior.js"></script>
<script type="text/javascript" src="{$js_url}/rating/rating.js"></script>
<link rel="stylesheet" type="text/css" href="{$theme_url}/{$site_theme}/styles/rating/rating.css" media="screen">
<link rel="stylesheet" type="text/css" href="{$theme_url}/{$site_theme}/styles/rating/rating2.css" media="screen">
{/if}
{if $flag eq "3"}<script type="text/javascript" src="{$js_url}/effects/ibox.js"></script>{/if}
{if $flag eq "3"}<link rel="stylesheet" type="text/css" href="{$css_url}/ibox.css" media="screen">{/if}
{if $flag eq "1" or $flag eq "2" or $flag eq "3" or $sbtn eq "profile" or $sbtn eq "main"}
<link rel="stylesheet" type="text/css" href="{$theme_url}/{$site_theme}/styles/tabs/tabs.css" media="screen">
<link rel="stylesheet" type="text/css" href="{$theme_url}/{$site_theme}/styles/tabs/paging.css" media="screen">
{/if}
{if $sbtn eq "mpr" or $sbtn eq "reg" or $sbtn eq "shows"}<link rel="stylesheet" type="text/css" href="{$css_url}/forms/calendar.css?random=20051112" media="screen">{/if}
{if $sbtn eq "reg" or $sbtn eq "mpr"}
<link rel="stylesheet" type="text/css" href="{$css_url}/meter/meter.css" media="screen">
<!--[if lte IE 8.0]>
<style>
    .pass_meter_base {ldelim}background-image:none;{rdelim}
    .pass_meter {ldelim}width: 166px;{rdelim}
</style>
<![endif]-->
{/if}
{if $rss_feeds eq "1"}
{if $enable_audio eq "1"}
<link rel="alternate" type="application/rss+xml" title="RSS - 20 Newest Audios" href="{$base_url}/rss/audios/newest">
<link rel="alternate" type="application/rss+xml" title="RSS - 20 Most Played Audios" href="{$base_url}/rss/audios/most_played">
<link rel="alternate" type="application/rss+xml" title="RSS - 20 Top Rated Audios" href="{$base_url}/rss/audios/top_rated">
{/if}
{if $enable_images eq "1"}
<link rel="alternate" type="application/rss+xml" title="RSS - 20 Newest Images" href="{$base_url}/rss/images/newest">
<link rel="alternate" type="application/rss+xml" title="RSS - 20 Most Viewed Images" href="{$base_url}/rss/images/most_viewed">
<link rel="alternate" type="application/rss+xml" title="RSS - 20 Top Rated Images" href="{$base_url}/rss/images/top_rated">
{/if}
{if $enable_videos eq "1"}
<link rel="alternate" type="application/rss+xml" title="RSS - 20 Newest Videos" href="{$base_url}/rss/videos/newest">
<link rel="alternate" type="application/rss+xml" title="RSS - 20 Most Viewed Videos" href="{$base_url}/rss/videos/most_viewed">
<link rel="alternate" type="application/rss+xml" title="RSS - 20 Top Rated Videos" href="{$base_url}/rss/videos/top_rated">
{/if}
{/if}
<script type="text/javascript" src="{$theme_url}/{$site_theme}/js/hiding.js"></script>
<link rel="stylesheet" type="text/css" href="{$theme_url}/{$site_theme}/styles/main.css" media="screen">
<link rel="stylesheet" type="text/css" href="{$theme_url}/{$site_theme}/styles/menu.css" media="screen">
<link rel="stylesheet" type="text/css" href="{$theme_url}/{$site_theme}/styles/forms/forms.css" media="screen">
{if $btn eq "bupload"}
<link rel="stylesheet" type="text/css" href="{$theme_url}/{$site_theme}/styles/forms/upload.css" media="screen">
{/if}
<link rel="stylesheet" type="text/css" href="{$css_url}/common.css" media="screen">
<style type="text/css">
{include file="pagingcheck.tpl"}
</style>
<!--[if lte IE 8.0]> <style> .menu_up {ldelim}position: absolute; top: 78px; right: 331px; width: 125px; border: 1px solid #ecc101; background: #ffffcc;{rdelim} .vvpad {ldelim}padding:0px 3px 0px 0px;{rdelim} a.QLIcon {ldelim} display:block; position: absolute; float: left; margin: -23px 0 0 -58px; height:15px; width:15px; background:transparent url({$base_url}/modules/channels/images/btnqlist_off.gif) no-repeat scroll 0px 0px; cursor: pointer; {rdelim} </style> <![endif]-->
<!--[if IE]><![if !IE]><![endif]--> <style>body {ldelim} overflow-y: scroll; {rdelim} .menu_up {ldelim}position: absolute; top: 79px; right: 333px; width: 125px; border: 1px solid #ecc101; background: #ffffcc;{rdelim} .vvpad {ldelim}padding:0px 8px 0px 0px;{rdelim} a.QLIcon {ldelim} display:block; position: absolute; float: left; margin: -20px 0 0 5px; height:15px; width:15px; background:transparent url({$base_url}/modules/channels/images/btnqlist_off.gif) no-repeat scroll 0px 0px; cursor: pointer; {rdelim} </style> <!--[if IE]><![endif]><![endif]-->
<style>a.QLIcon:hover {ldelim} text-decoration: none; background:transparent url({$base_url}/modules/channels/images/btnqlist_on.gif) no-repeat scroll 0px 0px; {rdelim}</style>
<link rel="stylesheet" type="text/css" href="{$css_url}/qlist.css" media="screen">

{if $upload_page eq "upload"}
<script type="text/javascript">
    var path_to_link_script = "{$UBR_path_to_link_script}";
    var path_to_set_progress_script = "{$UBR_path_to_set_progress_script}";
    var path_to_get_progress_script = "{$UBR_path_to_get_progress_script}";
    var path_to_upload_script = "{$UBR_path_to_upload_script}";
    var multi_configs_enabled = "{$UBR_multi_configs_enabled}";
    var config_file = "{$UBR_config_file}";
    var check_allow_extensions_on_client = "{$UBR_check_allow_extensions_on_client}";
    var check_disallow_extensions_on_client = "{$UBR_check_disallow_extensions_on_client}";
    var allow_extensions = /{$UBR_allow_extensions}$/i;
    var disallow_extensions = /{$UBR_disallow_extensions}$/i;
    var check_file_name_format = "{$UBR_check_file_name_format}";
    var check_null_file_count = "{$UBR_check_null_file_count}";
    var check_duplicate_file_count = "{$UBR_check_duplicate_file_count}";
    var max_upload_slots = "{$UBR_max_upload_slots}";
    var cedric_progress_bar = "{$UBR_cedric_progress_bar}";
    var cedric_hold_to_sync = "{$UBR_cedric_hold_to_sync}";
    var progress_bar_width = "{$UBR_progress_bar_width}";
    var show_percent_complete = "{$UBR_show_percent_complete}";
    var show_files_uploaded = "{$UBR_show_files_uploaded}";
    var show_current_position = "{$UBR_show_current_position}";
    var show_elapsed_time = "{$UBR_show_elapsed_time}";
    var show_est_time_left = "{$UBR_show_est_time_left}";
    var show_est_speed = "{$UBR_show_est_speed}";
</script>
{/if}
<style>
    .rel, .rel3, .reldiv, .tabbed-container {ldelim} width: 100%; {rdelim}
    .rel, .rel3 {ldelim} position: relative; overflow: auto; height: 411px; width: 100%; overflow-x: hidden; {rdelim}
    .thead1 {ldelim} font-size:14px; font-weight:bold; line-height: 30px; background: {$tinfo[0].th_bb_border}; color: {$tinfo[0].th_bb_h1}; padding-left: 5px; {rdelim}
    .thead1btn {ldelim} width: 94px; height: 25px; font-size:14px; font-weight:bold; background: url({$base_url}/modules/channels/images/cbutton.gif) {$tinfo[0].th_bb_border} no-repeat; background-position: center; color: {$tinfo[0].th_bb_h1}; {rdelim}
    .thead1btn a {ldelim} color: #994700; font-size: 12px; padding: 5px; text-decoration: none; {rdelim}
    .thead1btn a:hover {ldelim} text-decoration: underline; {rdelim}
    .width950b, .width900b {ldelim} border-left: 0px; border-right: 0px; {rdelim}
</style>
</head>
<body {if $flag ne "1" and $flag ne "2" and $flag ne "3"}onLoad="window.loaded = true;"{/if}>
{if $tpage eq "1"}{assign var=link value=""}{assign var=linka value=""}{assign var=linki value=""}{/if}
{include file="header/menu_table.tpl"}
{insert name=ad_status assign=check aname=ads_top}
{if $check eq "1"}
{include file="ads/ads_top.tpl"}
{else}
    <br>
{/if}
{include file="success_table.tpl"}
{include file="error_table.tpl"}
{include file="dmenu_table.tpl"}
