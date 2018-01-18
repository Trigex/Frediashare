<?php /* Smarty version 2.6.26, created on 2009-11-10 15:17:50
         compiled from main_index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'ad_status', 'main_index.tpl', 11, false),)), $this); ?>
<script type="text/javascript" src="modules/ajaxrows/js/panel.js"></script>
<script type="text/javascript" src="modules/ajaxrows/js/xajax.js"></script>
<style type="text/css">
    @import "modules/ajaxrows/css/styles.css";
</style> 
<!-- BEGIN INDEX PAGE BIG TABLE -->
<table align="center" cellpadding="6" cellspacing="0" border="0" width="950">
    <tr>
	<td valign="top">
	<?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>
	    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ad_status', 'assign' => 'check', 'aname' => 'home_ads_middle1')), $this); ?>

	    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/hpbox/inc_hpfeatv.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	    <?php if ($this->_tpl_vars['check'] == '1'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ads/home_ads_middle1.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br><?php endif; ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['enable_images'] == '1'): ?>
	    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ad_status', 'assign' => 'check', 'aname' => 'home_ads_middle2')), $this); ?>

	    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/hpbox/inc_hpfeati.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	    <?php if ($this->_tpl_vars['check'] == '1'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ads/home_ads_middle2.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br><?php endif; ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>
	    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ad_status', 'assign' => 'check', 'aname' => 'home_ads_middle3')), $this); ?>

	    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/hpbox/inc_hpfeata.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	    <?php if ($this->_tpl_vars['check'] == '1'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ads/home_ads_middle3.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br><?php endif; ?>
	<?php endif; ?>
	</td>
	<td valign="top">
	    <table width="100%" cellpadding=0 cellspacing=0>
		<tr>
		    <td>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/hpbox/inc_hpfeatvid.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br>
			<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ad_status', 'assign' => 'check', 'aname' => 'home_ads_right1')), $this); ?>
<?php if ($this->_tpl_vars['check'] == '1'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ads/home_ads_right1.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br><?php endif; ?>
		    <?php if ($_SESSION['UID'] != ""): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/hpbox/inc_hpinbox.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<br>
			<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ad_status', 'assign' => 'check', 'aname' => 'home_ads_right2')), $this); ?>

			<?php if ($this->_tpl_vars['check'] == '1'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ads/home_ads_right2.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br><?php else: ?><?php endif; ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/hpbox/inc_hpabout.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<br>
			<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ad_status', 'assign' => 'check', 'aname' => 'home_ads_right3')), $this); ?>

			<?php if ($this->_tpl_vars['check'] == '1'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ads/home_ads_right3.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br><?php else: ?><?php endif; ?>
		    <?php endif; ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/hpbox/inc_hpustat.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    			<?php if ($_SESSION['UID'] == ""): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ad_status', 'assign' => 'check', 'aname' => 'home_ads_right2')), $this); ?>
<?php else: ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ad_status', 'assign' => 'check', 'aname' => 'home_ads_right3')), $this); ?>
<?php endif; ?>
    			<?php if ($this->_tpl_vars['check'] == '1'): ?><br><?php if ($_SESSION['UID'] == ""): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ads/home_ads_right2.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br><?php else: ?><?php endif; ?><?php else: ?><?php endif; ?>
    			<?php if ($this->_tpl_vars['enable_videos'] == '1' && $_SESSION['UID'] == ""): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ad_status', 'assign' => 'check', 'aname' => 'home_ads_right3')), $this); ?>
<?php if ($this->_tpl_vars['check'] == '1'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ads/home_ads_right3.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br><?php else: ?><?php endif; ?><?php endif; ?>
    		    </td>
    		</tr>
    	    </table>
	</td>
    </tr>
</table>
<div id="sessdiv" style="display: none;"></div>
<!-- END INDEX PAGE BIG TABLE -->
	<script type="text/javascript">
	    var prev_onload = document.body.onload;
	    window.onload = function() {
    		if( prev_onload ) prev_onload();
    		<?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>sh('preloader'); xajax_listare_poze('1');<?php endif; ?>
    		<?php if ($this->_tpl_vars['enable_images'] == '1'): ?>sh('preloaderi'); xajax_listare_pozei('1');<?php endif; ?>
    		<?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>sh('preloadera'); xajax_listare_pozea('1');<?php endif; ?>
    		window.loaded = true;
	    }
	</script>
	<script language="javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/ajaxresponder.js" type="text/javascript"></script>
	<input type="hidden" name="ldivx" id="ldivx" value="">
	<input type="hidden" name="thisDiv" id="thisDiv" value="">