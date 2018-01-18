<?php /* Smarty version 2.6.26, created on 2009-11-10 15:42:29
         compiled from main_userpageheader.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'spchar', 'main_userpageheader.tpl', 4, false),array('modifier', 'comrep', 'main_userpageheader.tpl', 7, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
	<title><?php if ($this->_tpl_vars['minfo'][0]['ch_title'] == ""): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['site_name'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
 | <?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['minfo'][0]['ch_title'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
<?php endif; ?></title>
	<meta name="title" content="<?php if ($this->_tpl_vars['minfo'][0]['ch_title'] == ""): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['site_name'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
 | <?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['minfo'][0]['ch_title'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
<?php endif; ?>">
	<meta name="description" content="<?php if ($this->_tpl_vars['minfo'][0]['ch_desc'] == ""): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['meta_desc'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['minfo'][0]['ch_desc'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
<?php endif; ?>">
	<meta name="keywords" content="<?php if ($this->_tpl_vars['minfo'][0]['ch_tags'] == ""): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['meta_tags'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo'][0]['ch_tags'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)))) ? $this->_run_mod_handler('comrep', true, $_tmp) : smarty_modifier_comrep($_tmp)); ?>
<?php endif; ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style>
	    body { 
		margin: 0px; color: <?php echo $this->_tpl_vars['tinfo'][0]['th_hb_h2']; ?>
;
		background-color: <?php echo $this->_tpl_vars['tinfo'][0]['th_bgcol']; ?>
; 
		<?php if ($this->_tpl_vars['tinfo'][0]['th_bgimage'] != 'none'): ?>background-position: top center; background-image: url(../media/files_user_bgimages/<?php echo $this->_tpl_vars['tinfo'][0]['th_bgimage']; ?>
); <?php if ($this->_tpl_vars['tinfo'][0]['th_bgrpt'] == '1'): ?>background-repeat: repeat<?php else: ?>background-repeat: no-repeat<?php endif; ?>;<?php endif; ?>
		font-family: <?php echo $this->_tpl_vars['tinfo'][0]['th_font_fam']; ?>
; font-size: <?php echo $this->_tpl_vars['tinfo'][0]['th_font_size']; ?>
px;
	    }
	    form { padding: 0px; margin: 0px; }
	    img { border: 0px; }
	    a.mainl:link, a.mainl:visited, a.mainl:hover, a.mainl:active { color: #0033CC; font-family: Arial,Helvetica,sans-serif; font-size: 11px; }
	    a:link, a:visited { color: <?php echo $this->_tpl_vars['tinfo'][0]['th_link']; ?>
; }
	    a { text-decoration: <?php if ($this->_tpl_vars['tinfo'][0]['th_link_dec'] == '1'): ?>underline<?php else: ?>none<?php endif; ?>; }
	    a:hover { text-decoration: underline; }
	    #mainlinks { text-align: left; padding-left: 5px; padding-top: 5px; font-size: 11px; color: #0033CC; }
	    #mainsublinks { margin-bottom: 15px; text-align:center; font-size: <?php echo $this->_tpl_vars['tinfo'][0]['th_font_size']; ?>
px; }
	    #thesublinks { color: <?php echo $this->_tpl_vars['tinfo'][0]['th_link']; ?>
; }
	    #thesublinks ul { list-style: none; padding: 0; margin: 0; } 
	    #thesublinks li { float: left; margin: 0 0.15em; } 
	    #thesublinks a { color: <?php echo $this->_tpl_vars['tinfo'][0]['th_link']; ?>
; text-decoration: <?php if ($this->_tpl_vars['tinfo'][0]['th_link_dec'] == '1'): ?>underline<?php else: ?>none<?php endif; ?>; padding: 0px 10px; font-size: 13px; }
	    #thesublinks a:hover { text-decoration: underline; }
	    #leftcol { width: 300px; }
	    #rightcol { width: 640px; }
	    .cursor { cursor:pointer; }
	    .label { color: <?php echo $this->_tpl_vars['tinfo'][0]['th_label']; ?>
; }
	    .bodylabel, .pag_act, .red, .green { color: <?php echo $this->_tpl_vars['tinfo'][0]['th_bb_h2']; ?>
; }
	    
	    .topcbg { width: 960px; height: 11px; background: url(<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/images/chcornerbg.png) no-repeat; }
	    .bgwhite { background-color: white; }
	    table { font-family: <?php echo $this->_tpl_vars['tinfo'][0]['th_font_fam']; ?>
; font-size: <?php echo $this->_tpl_vars['tinfo'][0]['th_font_size']; ?>
px; }
	    #b1 #err_tbl, #b1 #not_tbl, #b1 #succ_tbl, #b1 .green, #b1 .red { color: <?php echo $this->_tpl_vars['tinfo'][0]['th_hb_h2']; ?>
; }
	    #err_tbl { border: 2px solid <?php echo $this->_tpl_vars['tinfo'][0]['th_bb_border']; ?>
; padding: 5px; color: <?php echo $this->_tpl_vars['tinfo'][0]['th_hb_h1']; ?>
; font-size: 12px; }
	    #not_tbl, #succ_tbl { border: 2px solid <?php echo $this->_tpl_vars['tinfo'][0]['th_bb_border']; ?>
; padding: 5px; color: <?php echo $this->_tpl_vars['tinfo'][0]['th_hb_h1']; ?>
; font-size: 12px; }
	    #slinkdiv a, #uslinkdiv a { color: #994700; font-size: 12px; }
	    input, textarea, #b1, #b5 { color: <?php echo $this->_tpl_vars['tinfo'][0]['th_hb_h2']; ?>
; border: 1px solid <?php echo $this->_tpl_vars['tinfo'][0]['th_bb_border']; ?>
; background: <?php echo $this->_tpl_vars['tinfo'][0]['th_hb_bgcol']; ?>
; font-size: <?php echo $this->_tpl_vars['tinfo'][0]['th_font_size']; ?>
px; font-family: <?php echo $this->_tpl_vars['tinfo'][0]['th_font_fam']; ?>
; }
	    #b2, #b3, #b4, #b6, #b7, #b8, #b9, #b10, #b12b, .brep { color: <?php echo $this->_tpl_vars['tinfo'][0]['th_hb_h2']; ?>
; border: 1px solid <?php echo $this->_tpl_vars['tinfo'][0]['th_bb_border']; ?>
; background: <?php echo $this->_tpl_vars['tinfo'][0]['th_bb_bgcol']; ?>
; font-size: <?php echo $this->_tpl_vars['tinfo'][0]['th_font_size']; ?>
px; font-family: <?php echo $this->_tpl_vars['tinfo'][0]['th_font_fam']; ?>
; }
	    #b11 { padding: 0px; margin: 0px; background: <?php echo $this->_tpl_vars['tinfo'][0]['th_vl_border']; ?>
; }
	    #b9 input { font-size: 11px; }
	    .thead1 { font-size:13px; font-weight:bold; background: <?php echo $this->_tpl_vars['tinfo'][0]['th_bb_border']; ?>
; color: <?php echo $this->_tpl_vars['tinfo'][0]['th_bb_h1']; ?>
; padding-left: 5px; }
	    .thead2, .thead2 a { font-size:13px; font-weight:bold; height: 25px; background: <?php echo $this->_tpl_vars['tinfo'][0]['th_bb_border']; ?>
; color: <?php echo $this->_tpl_vars['tinfo'][0]['th_bb_h1']; ?>
; padding-left: 5px; }
	    .thead1vl, .thead1vl a { font-size:13px; font-weight:bold; height: 25px; background: <?php echo $this->_tpl_vars['tinfo'][0]['th_vl_border']; ?>
; border: 1px solid <?php echo $this->_tpl_vars['tinfo'][0]['th_vl_border']; ?>
; color: <?php echo $this->_tpl_vars['tinfo'][0]['th_vl_h1']; ?>
; padding-left: 5px; }
	    .thead1btn { width: 94px; height: 33px; font-size:14px; font-weight:bold; background: url(<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/images/cbutton.gif) <?php echo $this->_tpl_vars['tinfo'][0]['th_bb_border']; ?>
 no-repeat; background-position: center; color: <?php echo $this->_tpl_vars['tinfo'][0]['th_bb_h1']; ?>
; }
	    .thead1btn a { color: #994700; font-size: 11px; padding-right: 0px; text-decoration: none; font-family: <?php echo $this->_tpl_vars['tinfo'][0]['th_font_fam']; ?>
; }
	    .thead1btn a:hover { text-decoration: underline; }
	    .tbody1 { background: <?php echo $this->_tpl_vars['tinfo'][0]['th_hb_bgcol']; ?>
; font-size: <?php echo $this->_tpl_vars['tinfo'][0]['th_font_size']; ?>
px; font-family: <?php echo $this->_tpl_vars['tinfo'][0]['th_font_fam']; ?>
; padding: 5px; }
	    .tbody1vl { background: <?php echo $this->_tpl_vars['tinfo'][0]['th_vl_bgcol']; ?>
; font-size: <?php echo $this->_tpl_vars['tinfo'][0]['th_font_size']; ?>
px; font-family: <?php echo $this->_tpl_vars['tinfo'][0]['th_font_fam']; ?>
; padding: 15px 5px 5px 5px; border: 1px solid <?php echo $this->_tpl_vars['tinfo'][0]['th_vl_border']; ?>
; }
	    .tbody2 { background: <?php echo $this->_tpl_vars['tinfo'][0]['th_bb_bgcol']; ?>
; font-size: <?php echo $this->_tpl_vars['tinfo'][0]['th_font_size']; ?>
px; font-family: <?php echo $this->_tpl_vars['tinfo'][0]['th_font_fam']; ?>
; padding: 5px; }
	    .vlpost { color: <?php echo $this->_tpl_vars['tinfo'][0]['th_vl_post']; ?>
; padding-bottom: 10px; padding-left: 10px; }
	    .vlpost input, .vlpost textarea { font-size: 11px; width: 250px; }
	    .vltext { color: <?php echo $this->_tpl_vars['tinfo'][0]['th_vl_h2']; ?>
; padding-bottom: 10px; padding-left: 10px; }
	    
	    .dottc { border-bottom:1px dashed <?php echo $this->_tpl_vars['tinfo'][0]['th_bb_border']; ?>
; padding:10px; }
	    .pborder { border: 3px double <?php echo $this->_tpl_vars['tinfo'][0]['th_bb_border']; ?>
; padding: 0px; }
	    .border { border: 1px solid <?php echo $this->_tpl_vars['tinfo'][0]['th_bb_border']; ?>
; }
	    .borderbottom { border-bottom: 1px solid <?php echo $this->_tpl_vars['tinfo'][0]['th_bb_border']; ?>
; }
	    .largetitle { font-size:14px; font-weight:bold; color: <?php echo $this->_tpl_vars['tinfo'][0]['th_hb_h2']; ?>
; padding: 2px 0px; }
	    .bold { font-weight: bold; } .normal { font-weight: normal; }
	    .f10 { font-size: 10px; }
	    .f11 { font-size: 11px; }
	    .f13 { font-size: 13px; }
	    .f14 { font-size: 14px; }
	    .f16 { font-size: 16px; }
	    .p1 { padding: 1px 0px; } .p2 { padding: 2px 0px; } .p5 { padding: 5px 0px; } .p5x { padding: 5px; }
	    .pt4 { padding-top: 4px; }
	    .pl5 { padding-left: 5px; } .pl10 { padding-left: 10px; } .pt10 { padding-top: 10px; } .p0 { padding: 0px 10px; }  .nopad { padding: 0px; } 
	    .btnmail { padding: 0px; height: 16px; background: url(<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/images/btnmail_off.png) no-repeat center; cursor: pointer; }
	    .btncomm { padding: 0px; height: 16px; background: url(<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/images/btncomm_off.png) no-repeat center; cursor: pointer; }
	    .btncommx { padding: 0px; height: 16px; background: url(<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/images/btncomm_on.png) no-repeat center; cursor: pointer; }
	    .btnshare { padding: 0px; height: 16px; background: url(<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/images/btnshare_off.png) no-repeat center; cursor: pointer; }
	    .btnsharex { padding: 0px; height: 16px; background: url(<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/images/btnshare_on.png) no-repeat center; cursor: pointer; }
	    .btnblock { padding: 0px; height: 16px; background: url(<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/images/btnblock_off.png) no-repeat center; cursor: pointer; }
	    .btnblockx { padding: 0px; height: 16px; background: url(<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/images/btnblock_on.png) no-repeat center; cursor: pointer; }
	    .btnfriend { padding: 0px; height: 16px; background: url(<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/images/btnfriend_off.png) no-repeat center; cursor: pointer; }
	    .btnfriendx { padding: 0px; height: 16px; background: url(<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/images/btnfriend_on.png) no-repeat center; cursor: pointer; }
	</style>
	
	<!--[if lte IE 8.0]> <style> .btnmailx { padding: 0px; margin-left: -1px; height: 16px; background: url(<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/images/btnmail_on.png) no-repeat center; cursor: pointer; } </style> <![endif]-->
	<!--[if IE]><![if !IE]><![endif]--> <style> .btnmailx { padding: 0px; height: 16px; background: url(<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/images/btnmail_on.png) no-repeat center; cursor: pointer; } </style> <!--[if IE]><![endif]><![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['css_url']; ?>
/qlist.css" media="screen">
	<script type="text/javascript">	var baseurl = '<?php echo $this->_tpl_vars['base_url']; ?>
/'; </script>
	<script language="JavaScript" src="<?php echo $this->_tpl_vars['base_url']; ?>
/modules/themes/<?php echo $this->_tpl_vars['site_theme']; ?>
/js/hiding.js" type="text/javascript"></script>
	<script language="JavaScript" src="<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/scripts/ctheme.js" type="text/javascript"></script>
	<script language="JavaScript" src="<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/scripts/cscript.js" type="text/javascript"></script>
	<script language="JavaScript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/effects/prototype.js" type="text/javascript"></script>
	<script language="JavaScript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/effects/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script language="JavaScript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/forms/thumbchangelist.js" type="text/javascript"></script>
	<script language="JavaScript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/forms/thumbchangegrid.js" type="text/javascript"></script>
	<script language="JavaScript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/forms/thumbchangeuser.js" type="text/javascript"></script>
	<script language="JavaScript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/rating/behavior.js" type="text/javascript"></script>
	<script language="JavaScript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/rating/rating.js" type="text/javascript"></script>
	<script language="javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/common.js" type="text/javascript"></script>
	<script language="javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/forms/forms.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/styles/rating/rating.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/styles/rating/rating2.css" media="screen">
	<script language="JavaScript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/effects/ibox.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/c_config.js"></script>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/c_smartmenus.js"></script>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/menus.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['css_url']; ?>
/ibox.css" media="screen">
	<style type="text/css">
	    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pagingcheck.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	    .secl, .secl a, .secl li a, .secl input, .secl a:visited { font-size: 11px; color: #0033CC; background: none; border-color: #0033CC; }
	    #Menu1top { font-weight: normal; }
	    a.secl:link, a.secl:visited, a.secl:hover, a.secl:active { color: #0033CC; font-family: Arial,Helvetica,sans-serif; font-size: 11px; }
	</style>
    </head>
    <body onLoad="window.loaded = true;">
	    <table border=0 width="960" cellpadding="0" cellspacing="0" align="center">
		<tr>
		    <td width="110" valign="absmiddle" class="bgwhite" style="padding-right: 10px;"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "static/logo_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
		    <td valign="top" class="bgwhite" align="center" nowrap="">
			<div id="mainlinks">
			    <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?><a class="mainl" href="<?php echo $this->_tpl_vars['base_url']; ?>
/audios"><?php echo $this->_tpl_vars['uch_thl1']; ?>
</a> | <?php endif; ?>
			    <?php if ($this->_tpl_vars['enable_images'] == '1'): ?><a class="mainl" href="<?php echo $this->_tpl_vars['base_url']; ?>
/images"><?php echo $this->_tpl_vars['uch_thl2']; ?>
</a> | <?php endif; ?>
			    <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?><a class="mainl" href="<?php echo $this->_tpl_vars['base_url']; ?>
/videos"><?php echo $this->_tpl_vars['uch_thl3']; ?>
</a> | <?php endif; ?>
			    <a class="mainl" href="<?php echo $this->_tpl_vars['base_url']; ?>
/channels"><?php echo $this->_tpl_vars['uch_thl4']; ?>
</a> | 
			    <a class="mainl" href="<?php echo $this->_tpl_vars['base_url']; ?>
/members"><?php echo $this->_tpl_vars['uch_thl5']; ?>
</a> | 
			    <a class="mainl" href="<?php echo $this->_tpl_vars['base_url']; ?>
/upload"><?php echo $this->_tpl_vars['uch_thl6']; ?>
</a>
			</div>
		    </td>
		    <td width="100%" valign="middle" class="bgwhite" align="right">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header/search_tabletoplinks.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br>
			<table width="100%" cellpadding="5" cellspacing="0" class="secl">
			    <tr>
				<td align="right">
				    <input type="text" id="boxL" name="searchall">&nbsp;
				    <input type="button" value="<?php echo $this->_tpl_vars['title_search']; ?>
" name="searchbtn" class="fb" style="padding: 0px; width: 60px;" onclick="location.href='<?php echo $this->_tpl_vars['base_url']; ?>
/search/all/'+document.getElementById('boxL').value; return false;">
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
						<?php if ($_GET['view'] != ""): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/user/<?php echo $_REQUEST['user']; ?>
"><?php echo $this->_tpl_vars['userpage_mchan']; ?>
</a></li><?php endif; ?>
						<?php if ($this->_tpl_vars['enable_audio'] == '1'): ?><?php if ($this->_tpl_vars['tinfo'][0]['th_vid'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/user/<?php echo $_REQUEST['user']; ?>
&view=audios"><span class="<?php if ($_GET['view'] == 'audios'): ?>bold<?php endif; ?>"><?php echo $this->_tpl_vars['uch_thl1']; ?>
</span></a></li><?php endif; ?><?php endif; ?>
						<?php if ($this->_tpl_vars['enable_images'] == '1'): ?><?php if ($this->_tpl_vars['tinfo'][0]['th_vid'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/user/<?php echo $_REQUEST['user']; ?>
&view=images"><span class="<?php if ($_GET['view'] == 'images'): ?>bold<?php endif; ?>"><?php echo $this->_tpl_vars['uch_thl2']; ?>
</span></a></li><?php endif; ?><?php endif; ?>
						<?php if ($this->_tpl_vars['enable_videos'] == '1'): ?><?php if ($this->_tpl_vars['tinfo'][0]['th_vid'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/user/<?php echo $_REQUEST['user']; ?>
&view=videos"><span class="<?php if ($_GET['view'] == 'videos'): ?>bold<?php endif; ?>"><?php echo $this->_tpl_vars['uch_thl3']; ?>
</span></a></li><?php endif; ?><?php endif; ?>
						<?php if ($this->_tpl_vars['tinfo'][0]['th_fav'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/user/<?php echo $_REQUEST['user']; ?>
&view=favorites&sort=<?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>videos<?php elseif ($this->_tpl_vars['enable_images'] == '1'): ?>images<?php elseif ($this->_tpl_vars['enable_audio'] == '1'): ?>audio<?php endif; ?>"><span class="<?php if ($_GET['view'] == 'favorites'): ?>bold<?php endif; ?>"><?php echo $this->_tpl_vars['uch_thl7']; ?>
</a></span></li><?php endif; ?>
						<?php if ($this->_tpl_vars['tinfo'][0]['th_plist'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/user/<?php echo $_REQUEST['user']; ?>
&view=playlists"><span class="<?php if ($_GET['view'] == 'playlists'): ?>bold<?php endif; ?>"><?php echo $this->_tpl_vars['uch_thl8']; ?>
</a></span></li><?php endif; ?>
						<?php if ($this->_tpl_vars['tinfo'][0]['th_friends'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/user/<?php echo $_REQUEST['user']; ?>
&view=friends"><span class="<?php if ($_GET['view'] == 'friends'): ?>bold<?php endif; ?>"><?php echo $this->_tpl_vars['uch_thl9']; ?>
</a></span></li><?php endif; ?>
						<?php if ($this->_tpl_vars['tinfo'][0]['th_usubs'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/user/<?php echo $_REQUEST['user']; ?>
&view=subscribers"><span class="<?php if ($_GET['view'] == 'subscribers'): ?>bold<?php endif; ?>"><?php echo $this->_tpl_vars['uch_thl10']; ?>
</a></span></li><?php endif; ?>
						<?php if ($this->_tpl_vars['tinfo'][0]['th_subs'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/user/<?php echo $_REQUEST['user']; ?>
&view=subscriptions"><span class="<?php if ($_GET['view'] == 'subscriptions'): ?>bold<?php endif; ?>"><?php echo $this->_tpl_vars['uch_thl11']; ?>
</a></span></li><?php endif; ?>
					    </ul>
					</div>
				    </td>
				</tr>
			    </table>