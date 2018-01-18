<?php /* Smarty version 2.6.26, created on 2009-11-10 15:15:00
         compiled from static/lpage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'spchar', 'static/lpage.tpl', 6, false),array('function', 'html_select_date', 'static/lpage.tpl', 31, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
	<title><?php echo $this->_tpl_vars['site_name']; ?>
</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['meta_desc'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
" />
	<meta name="keywords" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['meta_tags'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
" />
	<meta name="revisit-after" content="1" />
	<style type="text/css">
	    body { background-color: #ffffff; margin: 0px 20px 0px 20px; }
	    #main { width: 750px; margin-left: auto; margin-right: auto; }
	    #logo { margin: 75px 0 30px 0; }
	    #logo img { border: 0px; }
	    #w1 { font: 26px normal Arial,Helvetica,sans-serif; color: #173778; letter-spacing: -1px; padding-top: 30px; text-align: center; }
	    #w2 { margin: 20px 0 0 0; font: 16px normal Arial,Helvetica,sans-serif; color: #555; float: left; }
	    #in { float: left; margin: 50px 0 0 50px; }
	    #in a, #out a { display: block; width: 100px; height: 34px; background: transparent url(<?php echo $this->_tpl_vars['base_url']; ?>
/media/site_images/btn_lpage.gif) no-repeat; font: 20px/32px normal Arial,Helvetica,sans-serif; color: #173778; text-decoration: none; text-align: center; }
	    #out { float: right; margin: 50px 50px 0 0px; }
	    .centered { text-align: center; }
	</style>
    </head>
    <body>
	<div id="main">
	    <div id="logo" class="centered"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "static/logo_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
	    <div>&nbsp;</div>
	    <div>&nbsp;</div>
	    <div>&nbsp;</div>
	    <div>&nbsp;</div>
	    <div id="w1" class="centered"><?php echo $this->_tpl_vars['lp_txt1']; ?>
</div>
	    <form name="udate" method="post" action="">
		<div id="w2" class="centered"><?php echo $this->_tpl_vars['lp_txt2']; ?>
<?php echo smarty_function_html_select_date(array('prefix' => 'StartDate','time' => $this->_tpl_vars['time'],'start_year' => "-109",'end_year' => "+1",'display_days' => true), $this);?>
</div>
		<div id="in"><a href="javascript:void(0)" onclick="document.udate.submit(); return false;"><?php echo $this->_tpl_vars['lp_txt3']; ?>
</a></div>
		<div id="out"><a href="javascript:void(0)" onclick="location.href='http://www.google.com'; return false;"><?php echo $this->_tpl_vars['lp_txt4']; ?>
</a></div>
	    </form>
	</div>
    </body>
</html>