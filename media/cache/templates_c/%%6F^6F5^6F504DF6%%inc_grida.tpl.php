<?php /* Smarty version 2.6.26, created on 2009-11-10 15:26:45
         compiled from administration/_inc/inc_grida.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'vid_to_key_audio', 'administration/_inc/inc_grida.tpl', 18, false),array('insert', 'titlea', 'administration/_inc/inc_grida.tpl', 19, false),)), $this); ?>
	<div id="gridview" <?php if ($_SESSION['viewmode'] == 'grid'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>>
	<form name="gafilesel" method="post" action="">
	    <table cellpadding=0 cellspacing=0 border=0 align="center">
		<tr>
		    <td width="65%" valign=top>
			<?php if ($this->_tpl_vars['auds'][0]['vid'] != ""): ?>
			<table cellpadding=9 cellspacing=0 border=0 align=center>
                	    <tr>
                    		<td align="left" width="1%"><input type="checkbox" id="gcheckall" name="gcheckall" value="0" onclick="if (this.checked == true) { acheckAllmya(document.gafilesel['gmid[]']); ShowContent('actdiv2'); } else if (this.checked == false) { auncheckAllmya(document.gafilesel['gmid[]']); HideContent('actdiv2'); }"></td>
                    		<td><a href="javascript:void(0)" onclick="if (document.getElementById('gcheckall').checked == false) { document.getElementById('gcheckall').checked = true; acheckAllmya(document.gafilesel['gmid[]']); ShowContent('actdiv2'); } else if (document.getElementById('gcheckall').checked == true) { document.getElementById('gcheckall').checked = false; auncheckAllmya(document.gafilesel['gmid[]']); HideContent('actdiv2'); }"><?php echo $this->_tpl_vars['grid_txt1']; ?>
</td>
                	    </tr>
                	</table>
                	<?php endif; ?>
                	<table cellpadding=9 cellspacing=0 border=0 align=center> 
			    <tr>
				<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['auds']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
                		    <?php if ($this->_sections['i']['index'] % 4 == '0' && $this->_sections['i']['index'] > '0'): ?></tr><tr><?php endif; ?>
                		    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'vid_to_key_audio', 'assign' => 'keya', 'vid' => $this->_tpl_vars['auds'][$this->_sections['i']['index']]['vid'])), $this); ?>

                		    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'titlea', 'assign' => 'title', 'vkey' => $this->_tpl_vars['keya'])), $this); ?>

                		    <td valign="top" class="nbg" colspan="2">
                			<table cellpadding=0 cellspacing=1 border=0" width="100%">
                        		    <tr>
                            			<td>
                                		    <table cellpadding=1 cellspacing=0 border=0>
                                    			<tr>
                                        		    <td>
                                            			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_grida.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                        		    </td>
                                    			</tr>
                                		    </table>
                            			</td>
                        		    </tr>
                    			</table>
                		    </td>
                		<?php endfor; endif; ?>
			    </tr>
			</table>
			
			<?php if ($this->_tpl_vars['auds'][0]['vid'] != "" && $this->_tpl_vars['sbtn'] == 'alla'): ?>
			<table cellpadding=9 cellspacing=0 border=0 align=left width="100%">
                            <tr>
                                <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_selectact4.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                            </tr>
                        </table>
                        <?php elseif ($this->_tpl_vars['auds'][0]['vid'] != "" && $this->_tpl_vars['sbtn'] == 'adm_areq'): ?>
			<table cellpadding=9 cellspacing=0 border=0 align=left width="100%">
                            <tr>
                                <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_selectact6.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                            </tr>
                        </table>
                        <?php endif; ?>
		    </td>
		</tr>
		<tr><td><table cellpadding=5 cellspacing=0 width="100%" border=0 align="left"><tr><td class="pag_bg"><?php echo $this->_tpl_vars['link']; ?>
</td></tr></table></td></tr>
	    </table>
	</form>
	</div>