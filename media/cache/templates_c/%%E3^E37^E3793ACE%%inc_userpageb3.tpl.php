<?php /* Smarty version 2.6.26, created on 2009-11-10 15:42:30
         compiled from _inc/chan/_inc/inc_userpageb3.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'viewnr', '_inc/chan/_inc/inc_userpageb3.tpl', 4, false),array('modifier', 'lower', '_inc/chan/_inc/inc_userpageb3.tpl', 30, false),array('insert', 'getfield', '_inc/chan/_inc/inc_userpageb3.tpl', 19, false),)), $this); ?>
		    <div id="b3">
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td align="left" class="thead2" width="60%"><?php echo $this->_tpl_vars['pr_chinfop56']; ?>
<a href="<?php echo $this->_tpl_vars['base_url']; ?>
/user/<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
&view=subscriptions">(<?php echo ((is_array($_tmp=$this->_tpl_vars['subbycount'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
)</a></td>
			    <tr>
			</table>
			
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td class="tbody2" colspan="2">
				    <table cellpadding="0" cellspacing="0" width="100%" border=0 align="center">
					<tr><?php if ($_GET['view'] == 'subscriptions'): ?><?php $this->assign('pagbr', 6); ?><?php $this->assign('maxloop', $this->_tpl_vars['subbycount']); ?><?php $this->assign('userimgw', 88); ?><?php $this->assign('userimgh', 88); ?><?php endif; ?>
					<?php if ($this->_tpl_vars['subbyinfo'][0]['subscribed_name'] == ""): ?>
					    <td align="center" class="p5 bodylabel"><?php echo $this->_tpl_vars['userpage_nosub2']; ?>
</td>
					<?php else: ?>
					<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['subbyinfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['start'] = (int)0;
$this->_sections['i']['max'] = (int)$this->_tpl_vars['maxloop'];
$this->_sections['i']['show'] = true;
if ($this->_sections['i']['max'] < 0)
    $this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
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
?>
					<?php if ($this->_sections['i']['index'] % $this->_tpl_vars['pagbr'] == '0' && $this->_sections['i']['index'] > '0'): ?></tr><tr><?php endif; ?>
					    <td align="center" class="p5">
					    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'photo', 'field' => 'photo', 'table' => 'members', 'qfield' => 'username', 'qvalue' => $this->_tpl_vars['subbyinfo'][$this->_sections['i']['index']]['subscribed_name'])), $this); ?>

						<table cellpadding="2" cellspacing="0">
						    <tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/user/<?php echo $this->_tpl_vars['subbyinfo'][$this->_sections['i']['index']]['subscribed_name']; ?>
"><img src="<?php echo $this->_tpl_vars['usrimg_url']; ?>
/<?php echo $this->_tpl_vars['photo']; ?>
" width="<?php echo $this->_tpl_vars['userimgw']; ?>
" height="<?php echo $this->_tpl_vars['userimgh']; ?>
" alt="<?php echo $this->_tpl_vars['subbyinfo'][$this->_sections['i']['index']]['subscribed_name']; ?>
" title="<?php echo $this->_tpl_vars['subbyinfo'][$this->_sections['i']['index']]['subscribed_name']; ?>
" class="pborder"></a></td></tr>
						    <tr><td align="center"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/user/<?php echo $this->_tpl_vars['subbyinfo'][$this->_sections['i']['index']]['subscribed_name']; ?>
"><?php echo $this->_tpl_vars['subbyinfo'][$this->_sections['i']['index']]['subscribed_name']; ?>
</a></td></tr>
						</table>
					    </td>
					<?php endfor; endif; ?>
					<?php endif; ?>
					</tr>
					<?php if ($this->_tpl_vars['subbycount'] > $this->_tpl_vars['maxloop'] && $_GET['view'] == ""): ?>
                                        <tr>
                                            <td colspan="<?php echo $this->_tpl_vars['pagbr']; ?>
" align="right"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/user/<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
&view=subscriptions"><span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['pr_chinfob31'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
</span></a></td>
                                        </tr>
                                        <?php endif; ?>
                                        <?php if ($_GET['view'] != "" && $this->_tpl_vars['link'] != "" && $this->_tpl_vars['tpage'] > 1): ?>
                                            <tr>
                                                <td colspan="6" align="right" class="bold nopad">
                                                    <?php echo $this->_tpl_vars['link']; ?>

                                                </td>
                                            </tr>
                                        <?php endif; ?>
				    </table>
				</td>
			    </tr>
			</table>
		    </div>