<?php /* Smarty version 2.6.26, created on 2009-11-10 15:21:37
         compiled from main_login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'footer_links', 'main_login.tpl', 6, false),array('insert', 'ad_status', 'main_login.tpl', 10, false),)), $this); ?>

<!-- BEGIN MAIN LOGIN TABLE -->
<table border="0" align="center" cellpadding="2" cellspacing="0" class="width950">
    <tr>
	<td width="55%" valign="top" class="pr15">
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'footer_links', 'assign' => 'ltl', 'ff' => 'ltl')), $this); ?>
	
	<?php if ($this->_tpl_vars['ltl'] == '1'): ?>
	    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "static/login_table_left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ad_status', 'assign' => 'check', 'aname' => 'login_ads1')), $this); ?>

	<?php if ($this->_tpl_vars['check'] == '1'): ?>
	    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ads/login_ads1.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php else: ?>
	    <br>
	<?php endif; ?>
	</td>
	
	<td valign="top" width="45%">
	    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "auth_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ad_status', 'assign' => 'check', 'aname' => 'login_ads2')), $this); ?>

	<?php if ($this->_tpl_vars['check'] == '1'): ?>
	    <br>
	    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ads/login_ads2.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php else: ?>
	    <br>
	<?php endif; ?>
	</td>
    </tr>
</table>
<!-- END MAIN LOGIN TABLE -->