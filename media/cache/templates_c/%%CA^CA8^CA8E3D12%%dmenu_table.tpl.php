<?php /* Smarty version 2.6.26, created on 2009-11-10 15:17:50
         compiled from dmenu_table.tpl */ ?>
<table width="950" cellpadding="0" cellspacing="0" align="center" border=0>
    <tr>
	<td>
	<?php if ($this->_tpl_vars['dmenu'] == 'myfiles'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/dropmenu/dm_myfiles.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php elseif ($this->_tpl_vars['dmenu'] == 'mymsg' || $this->_tpl_vars['dmenu'] == 'mysubs'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/dropmenu/dm_myacct.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php elseif ($this->_tpl_vars['dmenu'] == 'myfav'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/dropmenu/dm_myfav.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	</td>
	<?php if ($this->_tpl_vars['sbtn'] == 'friends'): ?><td align="right"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_friends/invite"><span class="<?php if ($this->_tpl_vars['act'] == 'invite'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['myfr_invbtn']; ?>
</span></a></td><?php endif; ?>
	<?php if ($this->_tpl_vars['btn'] == 'bcateg' && ( $this->_tpl_vars['sbtn'] == 'img' || $this->_tpl_vars['sbtn'] == 'aud' || $this->_tpl_vars['sbtn'] == 'vid' )): ?><td align="right"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_categth.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td><?php endif; ?>
	<?php if ($this->_tpl_vars['sbtn'] == 'search'): ?><td align="right"><span class="italic"><?php echo $this->_tpl_vars['search_th1']; ?>
 '<?php echo $this->_tpl_vars['in']; ?>
' <?php echo $this->_tpl_vars['search_th2']; ?>
 '<?php echo $this->_tpl_vars['stype']; ?>
' <?php echo $this->_tpl_vars['search_th3']; ?>
 <?php echo $this->_tpl_vars['total']; ?>
 <?php if ($this->_tpl_vars['total'] == '1'): ?><?php echo $this->_tpl_vars['search_th4']; ?>
<?php else: ?><?php echo $this->_tpl_vars['search_th5']; ?>
<?php endif; ?></span> <?php if ($this->_tpl_vars['total'] != '0'): ?>[<?php echo $this->_tpl_vars['start_num']; ?>
-<?php echo $this->_tpl_vars['end_num']; ?>
] <?php echo $this->_tpl_vars['search_of']; ?>
 [<?php echo $this->_tpl_vars['total']; ?>
]<?php else: ?>&nbsp;<?php endif; ?></td><?php endif; ?>
    </tr>
    <tr>
	<td height="5"></td>
    </tr>
</table>