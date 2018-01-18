<?php /* Smarty version 2.6.26, created on 2009-11-10 15:24:14
         compiled from administration/main_header.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?php echo $this->_tpl_vars['adm_title']; ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript">
    var baseurl = '<?php echo $this->_tpl_vars['base_url']; ?>
/';
    var loaded = false;
</script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/c_config.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/c_smartmenus.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/menus.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/forms/thumbchangegrid.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/forms/thumbchangelist.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/forms/thumbchangeuser.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/effects/prototype.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/effects/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/forms/forms.js"></script> 
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/common.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/forms/calendar.js?random=20060118"></script>
<?php if ($this->_tpl_vars['sbtn'] == 'allv' || $this->_tpl_vars['sbtn'] == 'adm_vreq'): ?><script src="<?php echo $this->_tpl_vars['base_url']; ?>
/modules/vPlayer/js/swfobject.js"></script><?php endif; ?>
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
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['css_url']; ?>
/meter/meter.css" media="screen">
<?php if ($this->_tpl_vars['btn'] != 'adm_members'): ?>
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
<?php if ($this->_tpl_vars['btn'] == 'adm_image'): ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/effects/ibox.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['css_url']; ?>
/ibox.css" media="screen">
<?php endif; ?>
<?php if ($this->_tpl_vars['sbtn'] == 'gen'): ?>
<!--[if lte IE 8.0]>
<style>
    .pass_meter_base {background-image:none;}
    .pass_meter {width: 166px;}
</style>
<![endif]-->
<?php endif; ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/js/hiding.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/forms/textarea.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/styles/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/styles/menu.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/styles/forms/forms.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/styles/tooltip.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['css_url']; ?>
/common.css" media="screen">

<?php if ($this->_tpl_vars['btn'] == 'adm_members' || $this->_tpl_vars['sbtn'] == 'guest'): ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/forms/tablesort.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/forms/customsort.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/styles/tablesort.css">
<?php endif; ?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['css_url']; ?>
/forms/calendar.css?random=20051112" media="screen">
<style type="text/css">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pagingcheck.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
.br1 { border-left: 0px; border-right: 0px; }
#genset .ff, #sysset .ff { width: 200px; }
#genset .selbox, #sysset .selbox { width: 210px; }
</style>

<!--[if lte IE 8.0]> <style> a.QLIcon { display:block; position: absolute; float: left; margin: -23px 0 0 -58px; height:15px; width:15px; background:transparent url(<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/images/btnqlist_off.gif) no-repeat scroll 0px 0px; cursor: pointer; } </style> <![endif]-->
<!--[if IE]><![if !IE]><![endif]--> <style>body { overflow-y: scroll; } a.QLIcon { display:block; position: absolute; float: left; margin: -20px 0 0 5px; height:15px; width:15px; background:transparent url(<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/images/btnqlist_off.gif) no-repeat scroll 0px 0px; cursor: pointer; } </style> <!--[if IE]><![endif]><![endif]-->
<style>a.QLIcon:hover { background:transparent url(<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/images/btnqlist_on.gif) no-repeat scroll 0px 0px; }</style>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['css_url']; ?>
/qlist.css" media="screen">
</head>
<body onLoad="window.loaded = true;"> 
<?php if ($this->_tpl_vars['tpage'] == '1'): ?><?php $this->assign('link', ""); ?><?php $this->assign('linka', ""); ?><?php $this->assign('linki', ""); ?><?php endif; ?>
<?php if ($_SESSION['AUID'] == ""): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/header/menu_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/header/subheader_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/header/success_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/header/error_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/login_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/header/menu_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->_tpl_vars['sbtn'] != 'adm_search'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/header/subheader_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/header/success_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/header/error_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>