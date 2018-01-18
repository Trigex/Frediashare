<?php /* Smarty version 2.6.26, created on 2009-11-10 15:17:50
         compiled from main_header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'spchar', 'main_header.tpl', 4, false),array('insert', 'video_tags', 'main_header.tpl', 5, false),array('insert', 'audio_tags', 'main_header.tpl', 5, false),array('insert', 'image_tags', 'main_header.tpl', 5, false),array('insert', 'ad_status', 'main_header.tpl', 141, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?php echo ((is_array($_tmp=$this->_tpl_vars['site_name'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
 | <?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</title>
<?php if ($this->_tpl_vars['flag'] == '1'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'video_tags', 'assign' => 'tags', 'vid' => $this->_tpl_vars['vidid'])), $this); ?>
<?php elseif ($this->_tpl_vars['flag'] == '2'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'audio_tags', 'assign' => 'tags', 'vid' => $this->_tpl_vars['vidid'])), $this); ?>
<?php elseif ($this->_tpl_vars['flag'] == '3'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'image_tags', 'assign' => 'tags', 'vid' => $this->_tpl_vars['vidid'])), $this); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['cdesc'] != ""): ?>
<meta name="description" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['cdesc'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
">
<?php elseif ($this->_tpl_vars['descr'] != ""): ?>
<meta name="description" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['descr'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
">
<?php else: ?>
<meta name="description" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['meta_desc'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
">
<?php endif; ?>
<?php if ($this->_tpl_vars['flag'] == '1' || $this->_tpl_vars['flag'] == '2' || $this->_tpl_vars['flag'] == '3'): ?>
<meta name="keywords" content="<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['tags']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?><?php echo $this->_tpl_vars['tags'][$this->_sections['i']['index']]; ?>
<?php if (! $this->_sections['i']['last']): ?>, <?php endif; ?><?php endfor; endif; ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['meta_tags'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
">
<?php else: ?>
<meta name="keywords" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['meta_tags'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
">
<?php endif; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript">
    var baseurl = '<?php echo $this->_tpl_vars['base_url']; ?>
/';
    var loaded = false;
</script>
<?php if ($this->_tpl_vars['btn'] == 'messages' || $this->_tpl_vars['btn'] == 'bvideo' || $this->_tpl_vars['btn'] == 'bimage' || $this->_tpl_vars['btn'] == 'baudio' || $this->_tpl_vars['sbtn'] == 'myimg' || $this->_tpl_vars['sbtn'] == 'myvid' || $this->_tpl_vars['sbtn'] == 'myaud' || $this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'profile' || $this->_tpl_vars['btn'] == 'bmember' || $this->_tpl_vars['sbtn'] == 'search' || $this->_tpl_vars['sbtn'] == 'ufavs' || $this->_tpl_vars['sbtn'] == 'reg' || $this->_tpl_vars['sbtn'] == 'login' || $this->_tpl_vars['sbtn'] == 'main' || $this->_tpl_vars['sbtn'] == 'comments' || $this->_tpl_vars['sbtn'] == 'ufr' || $this->_tpl_vars['sbtn'] == 'mpr' || $this->_tpl_vars['sbtn'] == 'mysubs' || $this->_tpl_vars['sbtn'] == 'myusubs' || $this->_tpl_vars['btn'] == 'bcateg' || $this->_tpl_vars['sbtn'] == 'resp' || $this->_tpl_vars['sbtn'] == 'mql' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'pd' || $this->_tpl_vars['sbtn'] == 'bchan'): ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/effects/prototype.js"></script>
<?php endif; ?>
<?php if ($this->_tpl_vars['flag'] == '1' || $this->_tpl_vars['flag'] == '2' || $this->_tpl_vars['flag'] == '3' || $this->_tpl_vars['sbtn'] == 'profile' || $this->_tpl_vars['sbtn'] == 'comments'): ?><script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/effects/scriptaculous.js?load=effects,builder"></script><?php endif; ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/forms/forms.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/common.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/c_config.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/c_smartmenus.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/menus.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/forms/thumbchangelist.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/forms/thumbchangegrid.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/forms/thumbchangeuser.js"></script>
<?php if ($this->_tpl_vars['sbtn'] == 'mpr' || $this->_tpl_vars['sbtn'] == 'reg' || $this->_tpl_vars['sbtn'] == 'shows'): ?><script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/forms/calendar.js?random=20060118"></script><?php endif; ?>
<?php if ($this->_tpl_vars['btn'] == 'bupload'): ?><script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/forms/uploader.js"></script><?php endif; ?>
<?php if ($this->_tpl_vars['flag'] == '1' || $this->_tpl_vars['flag'] == '2' || $this->_tpl_vars['flag'] == '3' || $this->_tpl_vars['sbtn'] == 'profile'): ?><script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/tabs/paging.js"></script><?php endif; ?>
<?php if ($this->_tpl_vars['sbtn'] == 'reg' || $this->_tpl_vars['sbtn'] == 'mpr'): ?>
<script type="text/javascript">
    var pass_strength_phrases = {
	0: '<?php echo $this->_tpl_vars['passmeter1']; ?>
', 10: '<?php echo $this->_tpl_vars['passmeter1']; ?>
', 20: '<?php echo $this->_tpl_vars['passmeter2']; ?>
', 30: '<?php echo $this->_tpl_vars['passmeter2']; ?>
', 40: '<?php echo $this->_tpl_vars['passmeter2']; ?>
', 50: '<?php echo $this->_tpl_vars['passmeter3']; ?>
', 60: '<?php echo $this->_tpl_vars['passmeter3']; ?>
', 70: '<?php echo $this->_tpl_vars['passmeter4']; ?>
', 80: '<?php echo $this->_tpl_vars['passmeter4']; ?>
', 90: '<?php echo $this->_tpl_vars['passmeter5']; ?>
', 100: '<?php echo $this->_tpl_vars['passmeter5']; ?>
'
    };
</script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/meter/meter.js"></script>
<?php endif; ?>
<?php if ($this->_tpl_vars['btn'] == 'bhome' || $this->_tpl_vars['btn'] == 'bvideo' || $this->_tpl_vars['btn'] == 'bimage' || $this->_tpl_vars['btn'] == 'baudio' || $this->_tpl_vars['btn'] == 'bcateg' || $this->_tpl_vars['sbtn'] == 'myvid' || $this->_tpl_vars['sbtn'] == 'myaud' || $this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpr' || $this->_tpl_vars['sbtn'] == 'profile'): ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/rating/behavior.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/rating/rating.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/styles/rating/rating.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/styles/rating/rating2.css" media="screen">
<?php endif; ?>
<?php if ($this->_tpl_vars['flag'] == '3'): ?><script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/effects/ibox.js"></script><?php endif; ?>
<?php if ($this->_tpl_vars['flag'] == '3'): ?><link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['css_url']; ?>
/ibox.css" media="screen"><?php endif; ?>
<?php if ($this->_tpl_vars['flag'] == '1' || $this->_tpl_vars['flag'] == '2' || $this->_tpl_vars['flag'] == '3' || $this->_tpl_vars['sbtn'] == 'profile' || $this->_tpl_vars['sbtn'] == 'main'): ?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/styles/tabs/tabs.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/styles/tabs/paging.css" media="screen">
<?php endif; ?>
<?php if ($this->_tpl_vars['sbtn'] == 'mpr' || $this->_tpl_vars['sbtn'] == 'reg' || $this->_tpl_vars['sbtn'] == 'shows'): ?><link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['css_url']; ?>
/forms/calendar.css?random=20051112" media="screen"><?php endif; ?>
<?php if ($this->_tpl_vars['sbtn'] == 'reg' || $this->_tpl_vars['sbtn'] == 'mpr'): ?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['css_url']; ?>
/meter/meter.css" media="screen">
<!--[if lte IE 8.0]>
<style>
    .pass_meter_base {background-image:none;}
    .pass_meter {width: 166px;}
</style>
<![endif]-->
<?php endif; ?>
<?php if ($this->_tpl_vars['rss_feeds'] == '1'): ?>
<?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>
<link rel="alternate" type="application/rss+xml" title="RSS - 20 Newest Audios" href="<?php echo $this->_tpl_vars['base_url']; ?>
/rss/audios/newest">
<link rel="alternate" type="application/rss+xml" title="RSS - 20 Most Played Audios" href="<?php echo $this->_tpl_vars['base_url']; ?>
/rss/audios/most_played">
<link rel="alternate" type="application/rss+xml" title="RSS - 20 Top Rated Audios" href="<?php echo $this->_tpl_vars['base_url']; ?>
/rss/audios/top_rated">
<?php endif; ?>
<?php if ($this->_tpl_vars['enable_images'] == '1'): ?>
<link rel="alternate" type="application/rss+xml" title="RSS - 20 Newest Images" href="<?php echo $this->_tpl_vars['base_url']; ?>
/rss/images/newest">
<link rel="alternate" type="application/rss+xml" title="RSS - 20 Most Viewed Images" href="<?php echo $this->_tpl_vars['base_url']; ?>
/rss/images/most_viewed">
<link rel="alternate" type="application/rss+xml" title="RSS - 20 Top Rated Images" href="<?php echo $this->_tpl_vars['base_url']; ?>
/rss/images/top_rated">
<?php endif; ?>
<?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>
<link rel="alternate" type="application/rss+xml" title="RSS - 20 Newest Videos" href="<?php echo $this->_tpl_vars['base_url']; ?>
/rss/videos/newest">
<link rel="alternate" type="application/rss+xml" title="RSS - 20 Most Viewed Videos" href="<?php echo $this->_tpl_vars['base_url']; ?>
/rss/videos/most_viewed">
<link rel="alternate" type="application/rss+xml" title="RSS - 20 Top Rated Videos" href="<?php echo $this->_tpl_vars['base_url']; ?>
/rss/videos/top_rated">
<?php endif; ?>
<?php endif; ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/js/hiding.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/styles/main.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/styles/menu.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/styles/forms/forms.css" media="screen">
<?php if ($this->_tpl_vars['btn'] == 'bupload'): ?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/styles/forms/upload.css" media="screen">
<?php endif; ?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['css_url']; ?>
/common.css" media="screen">
<style type="text/css">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pagingcheck.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</style>
<!--[if lte IE 8.0]> <style> .menu_up {position: absolute; top: 78px; right: 331px; width: 125px; border: 1px solid #ecc101; background: #ffffcc;} .vvpad {padding:0px 3px 0px 0px;} a.QLIcon { display:block; position: absolute; float: left; margin: -23px 0 0 -58px; height:15px; width:15px; background:transparent url(<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/images/btnqlist_off.gif) no-repeat scroll 0px 0px; cursor: pointer; } </style> <![endif]-->
<!--[if IE]><![if !IE]><![endif]--> <style>body { overflow-y: scroll; } .menu_up {position: absolute; top: 79px; right: 333px; width: 125px; border: 1px solid #ecc101; background: #ffffcc;} .vvpad {padding:0px 8px 0px 0px;} a.QLIcon { display:block; position: absolute; float: left; margin: -20px 0 0 5px; height:15px; width:15px; background:transparent url(<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/images/btnqlist_off.gif) no-repeat scroll 0px 0px; cursor: pointer; } </style> <!--[if IE]><![endif]><![endif]-->
<style>a.QLIcon:hover { text-decoration: none; background:transparent url(<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/images/btnqlist_on.gif) no-repeat scroll 0px 0px; }</style>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['css_url']; ?>
/qlist.css" media="screen">

<?php if ($this->_tpl_vars['upload_page'] == 'upload'): ?>
<script type="text/javascript">
    var path_to_link_script = "<?php echo $this->_tpl_vars['UBR_path_to_link_script']; ?>
";
    var path_to_set_progress_script = "<?php echo $this->_tpl_vars['UBR_path_to_set_progress_script']; ?>
";
    var path_to_get_progress_script = "<?php echo $this->_tpl_vars['UBR_path_to_get_progress_script']; ?>
";
    var path_to_upload_script = "<?php echo $this->_tpl_vars['UBR_path_to_upload_script']; ?>
";
    var multi_configs_enabled = "<?php echo $this->_tpl_vars['UBR_multi_configs_enabled']; ?>
";
    var config_file = "<?php echo $this->_tpl_vars['UBR_config_file']; ?>
";
    var check_allow_extensions_on_client = "<?php echo $this->_tpl_vars['UBR_check_allow_extensions_on_client']; ?>
";
    var check_disallow_extensions_on_client = "<?php echo $this->_tpl_vars['UBR_check_disallow_extensions_on_client']; ?>
";
    var allow_extensions = /<?php echo $this->_tpl_vars['UBR_allow_extensions']; ?>
$/i;
    var disallow_extensions = /<?php echo $this->_tpl_vars['UBR_disallow_extensions']; ?>
$/i;
    var check_file_name_format = "<?php echo $this->_tpl_vars['UBR_check_file_name_format']; ?>
";
    var check_null_file_count = "<?php echo $this->_tpl_vars['UBR_check_null_file_count']; ?>
";
    var check_duplicate_file_count = "<?php echo $this->_tpl_vars['UBR_check_duplicate_file_count']; ?>
";
    var max_upload_slots = "<?php echo $this->_tpl_vars['UBR_max_upload_slots']; ?>
";
    var cedric_progress_bar = "<?php echo $this->_tpl_vars['UBR_cedric_progress_bar']; ?>
";
    var cedric_hold_to_sync = "<?php echo $this->_tpl_vars['UBR_cedric_hold_to_sync']; ?>
";
    var progress_bar_width = "<?php echo $this->_tpl_vars['UBR_progress_bar_width']; ?>
";
    var show_percent_complete = "<?php echo $this->_tpl_vars['UBR_show_percent_complete']; ?>
";
    var show_files_uploaded = "<?php echo $this->_tpl_vars['UBR_show_files_uploaded']; ?>
";
    var show_current_position = "<?php echo $this->_tpl_vars['UBR_show_current_position']; ?>
";
    var show_elapsed_time = "<?php echo $this->_tpl_vars['UBR_show_elapsed_time']; ?>
";
    var show_est_time_left = "<?php echo $this->_tpl_vars['UBR_show_est_time_left']; ?>
";
    var show_est_speed = "<?php echo $this->_tpl_vars['UBR_show_est_speed']; ?>
";
</script>
<?php endif; ?>
<style>
    .rel, .rel3, .reldiv, .tabbed-container { width: 100%; }
    .rel, .rel3 { position: relative; overflow: auto; height: 411px; width: 100%; overflow-x: hidden; }
    .thead1 { font-size:14px; font-weight:bold; line-height: 30px; background: <?php echo $this->_tpl_vars['tinfo'][0]['th_bb_border']; ?>
; color: <?php echo $this->_tpl_vars['tinfo'][0]['th_bb_h1']; ?>
; padding-left: 5px; }
    .thead1btn { width: 94px; height: 25px; font-size:14px; font-weight:bold; background: url(<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/images/cbutton.gif) <?php echo $this->_tpl_vars['tinfo'][0]['th_bb_border']; ?>
 no-repeat; background-position: center; color: <?php echo $this->_tpl_vars['tinfo'][0]['th_bb_h1']; ?>
; }
    .thead1btn a { color: #994700; font-size: 12px; padding: 5px; text-decoration: none; }
    .thead1btn a:hover { text-decoration: underline; }
    .width950b, .width900b { border-left: 0px; border-right: 0px; }
</style>
</head>
<body <?php if ($this->_tpl_vars['flag'] != '1' && $this->_tpl_vars['flag'] != '2' && $this->_tpl_vars['flag'] != '3'): ?>onLoad="window.loaded = true;"<?php endif; ?>>
<?php if ($this->_tpl_vars['tpage'] == '1'): ?><?php $this->assign('link', ""); ?><?php $this->assign('linka', ""); ?><?php $this->assign('linki', ""); ?><?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header/menu_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ad_status', 'assign' => 'check', 'aname' => 'ads_top')), $this); ?>

<?php if ($this->_tpl_vars['check'] == '1'): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ads/ads_top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
    <br>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "success_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "error_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "dmenu_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>