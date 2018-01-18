<?php /* Smarty version 2.6.26, created on 2009-11-10 15:42:29
         compiled from _inc/chan/_inc/inc_userpageb1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'getfield', '_inc/chan/_inc/inc_userpageb1.tpl', 3, false),array('modifier', 'spchar', '_inc/chan/_inc/inc_userpageb1.tpl', 6, false),)), $this); ?>
		    <form id="chsubsform"></form>
		    <div id="b1">
		    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'bl_sub', 'field' => 'bl_sub', 'table' => 'members', 'qfield' => 'uid', 'qvalue' => $this->_tpl_vars['minfo'][0]['uid'])), $this); ?>

			<table cellpadding="5" cellspacing="0" border="0" width="100%">
			    <tr>
				<td align="left" class="<?php if ($_SESSION['UID'] == ""): ?>thead2<?php else: ?>thead1<?php endif; ?>"><?php if ($this->_tpl_vars['minfo'][0]['ch_title'] != ""): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['minfo'][0]['ch_title'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
<?php echo $this->_tpl_vars['uch_txt1']; ?>
<?php endif; ?></td>
				<td <?php if ($_SESSION['UID'] != "" && ( $this->_tpl_vars['is_bl'] != 'yes' || $this->_tpl_vars['bl_sub'] == 'no' )): ?>class="thead1btn"<?php else: ?>class="thead1"<?php endif; ?> align="center" style="padding: 0px 5px;">
				    <?php if (( ( $this->_tpl_vars['tinfo'][0]['th_uid'] == $_SESSION['UID'] ) && $_SESSION['UID'] != "" ) || ( $this->_tpl_vars['minfo'][0]['uid'] == $_SESSION['UID'] )): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_profile"><?php echo $this->_tpl_vars['uch_txt13']; ?>
</a>
				    <?php else: ?>
				    <?php if ($_SESSION['UID'] != "" && ( $this->_tpl_vars['is_bl'] != 'yes' || $this->_tpl_vars['bl_sub'] == 'no' )): ?>
					<div id="slinkdiv" style="<?php if ($this->_tpl_vars['is_sub'] == 'no'): ?>display: block;<?php else: ?>display: none;<?php endif; ?>">
					    <a id="subscribe" href="javascript:void(0)" onclick="ShowContent('subsrespdiv'); thisDiv('yes'); ldiv('subsrespdiv'); set_subscription('subs', '<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
', '<?php echo $this->_tpl_vars['minfo'][0]['uid']; ?>
', 'user');"><?php echo $this->_tpl_vars['uch_txt14']; ?>
</a>
					</div>
					<div id="uslinkdiv" style="<?php if ($this->_tpl_vars['is_sub'] == 'yes'): ?>display: block;<?php else: ?>display: none;<?php endif; ?>">
					    <a id="unsubscribe" href="javascript:void(0)" onclick="ShowContent('subsrespdiv'); set_subscription('unsubs', '<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
', '<?php echo $this->_tpl_vars['minfo'][0]['uid']; ?>
', 'user');"><?php echo $this->_tpl_vars['uch_txt15']; ?>
</a>
					</div>
				    <?php endif; ?>
				    <?php endif; ?>
				</td>
			    <tr>
			</table>
			<div id="subsrespdiv" style="display: block;" class="p5"></div>
			<div id="loading_sub" style="display: none;"><table cellpadding=5 cellspacing=0 border=0><tr><td><?php echo $this->_tpl_vars['adm_setgen79']; ?>
</td></tr></table></div>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_userpageb1userinfo.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		    </div>