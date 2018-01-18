<?php /* Smarty version 2.6.26, created on 2009-11-10 15:26:16
         compiled from administration/main_languages.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'getarrayccode', 'administration/main_languages.tpl', 44, false),array('modifier', 'lower', 'administration/main_languages.tpl', 44, false),)), $this); ?>
<br>
<!-- BEGIN ADMIN AREA MEMBERS TABLE -->
<table width="950" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
	<td class=""><h1><?php echo $this->_tpl_vars['adm_setlangheading']; ?>
</h1></td>
	<td class="" align="right"><?php if ($this->_tpl_vars['total'] != '0'): ?><?php echo $this->_tpl_vars['adm_setlangnr']; ?>
[<?php echo $this->_tpl_vars['start_num']; ?>
-<?php echo $this->_tpl_vars['end_num']; ?>
]<?php echo $this->_tpl_vars['adm_setlangof']; ?>
[<?php echo $this->_tpl_vars['total']; ?>
]<?php endif; ?></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr>
	<td valign="top" colspan=2 class="pt5">
	<form id="schform">
	    <table cellpadding=2 cellspacing=1 border=0 width="100%">
                <tr>
            	    <td align="left" width="20%"><input type="button" name="langadd" class="fb" value="<?php echo $this->_tpl_vars['adm_setlangadd']; ?>
" onclick="location.href='<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/languages/add'; return false;"></td>
                    <td align="right" valign="top" width="50%"></td>
                    <td valign="middle" width="30%"></td>
                </tr>
                <tr>
                    <td colspan=3><div id="schdiv"></div></td>
                </tr>
            </table>
        </form>
	<form name="inboxmsg" method="post" action="">
	    <table cellpadding=4 cellspacing=1 border=0 align=center class="cs1 rowstyle-alt no-arrow" id="stbl" width="100%">
		<tr class="th">
		    <?php if ($this->_tpl_vars['langs'][0]['id'] != ""): ?><td align="center"><input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) { checkAllmsg(document.inboxmsg['mid[]']); ShowContent('actdiv'); } else if (this.checked == false) { uncheckAllmsg(document.inboxmsg['mid[]']); HideContent('actdiv'); }"></td><?php endif; ?>
		    <td class="sortable-numeric" width="5%"><?php echo $this->_tpl_vars['adm_setlangth1']; ?>
</td>
		    <td class="sortable-text" width="15%"><?php echo $this->_tpl_vars['adm_setlangth2']; ?>
</td>
		    <td class="sortable-text" width="15%"><?php echo $this->_tpl_vars['adm_setlangth3']; ?>
</td>
		    <td class="sortable-text" width="15%"><?php echo $this->_tpl_vars['adm_setlangth4']; ?>
</td>
		    <td class="sortable-text" width="15%"><?php echo $this->_tpl_vars['adm_setlangth6']; ?>
</td>
		    <td>&nbsp;</td>
		    <td width="20%"><?php echo $this->_tpl_vars['adm_setlangth5']; ?>
</td>
		</tr>
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['langs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<tr class="td">
		    <?php if ($this->_tpl_vars['langs'][0]['id'] != ""): ?><td width="3%" class="th1" align="center"><input type="checkbox" name="mid[]" value="<?php echo $this->_tpl_vars['langs'][$this->_sections['i']['index']]['id']; ?>
" onclick="ShowContent('actdiv')"></td><?php endif; ?>
		    <td><?php echo $this->_tpl_vars['langs'][$this->_sections['i']['index']]['id']; ?>
</td>
		    <td><?php echo $this->_tpl_vars['langs'][$this->_sections['i']['index']]['name']; ?>
</td>
		    <td><?php echo $this->_tpl_vars['langs'][$this->_sections['i']['index']]['file']; ?>
</td>
		    <td><?php if ($this->_tpl_vars['langs'][$this->_sections['i']['index']]['active'] == '0'): ?><?php echo $this->_tpl_vars['adm_status_inactive']; ?>
<?php else: ?><?php echo $this->_tpl_vars['adm_status_active']; ?>
<?php endif; ?></td>
		    <td><?php if ($this->_tpl_vars['langs'][$this->_sections['i']['index']]['def'] == '0'): ?><?php echo $this->_tpl_vars['adm_setlangno']; ?>
<?php else: ?><?php echo $this->_tpl_vars['adm_setlangyes']; ?>
<?php endif; ?></td>
		    <td><?php if ($this->_tpl_vars['langs'][$this->_sections['i']['index']]['cflag'] != ""): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getarrayccode', 'assign' => 'ccode', 'country' => $this->_tpl_vars['langs'][$this->_sections['i']['index']]['cflag'])), $this); ?>
<img src="<?php echo $this->_tpl_vars['base_url']; ?>
/media/files_flags/<?php echo ((is_array($_tmp=$this->_tpl_vars['ccode'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
.gif" width="16" height="11" alt="<?php echo $this->_tpl_vars['langs'][$this->_sections['i']['index']]['cflag']; ?>
"><?php endif; ?></td>
		    <td><?php if ($this->_tpl_vars['langs'][$this->_sections['i']['index']]['active'] == '1'): ?><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/languages/disable/<?php echo $this->_tpl_vars['langs'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['adm_setlangact2']; ?>
</a><?php elseif ($this->_tpl_vars['langs'][$this->_sections['i']['index']]['active'] == '0'): ?><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/languages/enable/<?php echo $this->_tpl_vars['langs'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['adm_setlangact1']; ?>
</a><?php endif; ?> | <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/languages/edit/<?php echo $this->_tpl_vars['langs'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['adm_setlangact3']; ?>
</a> | <a href="javascript:void(0)" onclick="if(confirm('<?php echo $this->_tpl_vars['adm_setlangdelmsg']; ?>
')) location.href='<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/languages/delete/<?php echo $this->_tpl_vars['langs'][$this->_sections['i']['index']]['id']; ?>
'; return false;"><?php echo $this->_tpl_vars['adm_setlangact4']; ?>
</a></td>
		</tr>
		<?php endfor; endif; ?>
	    </table>
	    <?php if ($this->_tpl_vars['langs'][0]['id'] != ""): ?>
                <table cellpadding="5" cellspacing="0" align="left" width="100%">
                    <tr>
                        <td colspan=2><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_selectactions.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                    </tr>
                </table>
            <?php endif; ?>
	</form>
	<table cellpadding=2 cellspacing=1 border=0 width="100%" align="left">
	    <tr>
		<td class="pag_bg"><?php echo $this->_tpl_vars['link']; ?>
</td>
	    </tr>
	</table>
	</td>
    </tr>
</table>
<!-- END ADMIN AREA MEMBERS TABLE -->