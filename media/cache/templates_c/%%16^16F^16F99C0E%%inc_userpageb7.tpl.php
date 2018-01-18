<?php /* Smarty version 2.6.26, created on 2009-11-10 15:42:30
         compiled from _inc/chan/_inc/inc_userpageb7.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'viewnr', '_inc/chan/_inc/inc_userpageb7.tpl', 5, false),array('modifier', 'lower', '_inc/chan/_inc/inc_userpageb7.tpl', 9, false),)), $this); ?>
		    <div id="b7">
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td align="left" class="thead2 nopad">
				    <table cellpadding="0" cellspacing="0" border="0"><tr><td class="thead2"><?php echo $this->_tpl_vars['userpage_chcomm']; ?>
</td><td class="thead2"><div id="commcount">(<?php echo ((is_array($_tmp=$this->_tpl_vars['tc'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
)</div></td></tr></table>
				</td>
				<?php if ($this->_tpl_vars['minfo'][0]['uid'] == $_SESSION['UID']): ?>
				<td align="right" class="thead2 nopad">
				    <a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_comments/profile"><?php echo ((is_array($_tmp=$this->_tpl_vars['comm_edit'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
</a>&nbsp;
				</td>
				<?php endif; ?>
			    <tr>
			</table>
			
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td class="tbody2 bodylabel" colspan="2">
				    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/viewfile/inc_viewfilecomments.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</td>
			    </tr>
			</table>
		    </div>