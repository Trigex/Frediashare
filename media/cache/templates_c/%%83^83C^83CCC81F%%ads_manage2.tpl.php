<?php /* Smarty version 2.6.26, created on 2009-11-10 15:26:43
         compiled from administration/ads_manage2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'administration/ads_manage2.tpl', 44, false),array('modifier', 'viewnr', 'administration/ads_manage2.tpl', 47, false),)), $this); ?>
<!-- BEGIN ADMIN AREA ADS MANAGEMENT TABLE -->
<br>
<table width="950" cellspacing="0" cellpadding="2" border="0" align="center">
    <tr>
	<td class=""><h1><?php echo $this->_tpl_vars['adm_vadsheading2']; ?>
</h1></td>
	<td class="" align=right><?php if ($this->_tpl_vars['total'] != '0'): ?><?php echo $this->_tpl_vars['adm_vadsnr']; ?>
 [<?php echo $this->_tpl_vars['start_num']; ?>
-<?php echo $this->_tpl_vars['end_num']; ?>
]<?php echo $this->_tpl_vars['adm_vadsof']; ?>
[<?php echo $this->_tpl_vars['grandtotal']; ?>
]<?php endif; ?></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr>
	<td colspan=2 class="grey">
	    <form name="inboxmsg" method="post" action="">
	    <table width="100%" cellpadding="5" cellspacing="1" border=0>
		<tr class="tablerow">
		    <td colspan=10 align=right>
			<table width="100%" cellpadding=0 cellspacing=0 border=0>
			    <tr>
				<td align="left" width="10%">
				    <input type="button" name="wadd" class="fb" value="<?php echo $this->_tpl_vars['adm_vadsaddbtn']; ?>
" onclick="location.href='<?php echo $this->_tpl_vars['admin_url']; ?>
/textads/add'; return false;">
				</td>
			    </tr>
			</table><br>
		    </td>
		</tr>
	    <?php if ($this->_tpl_vars['adsview'][0]['aid'] != ""): ?>
		<tr class="th">
		    <td align="center" width="3%"><input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) { checkAllmsg(document.inboxmsg['mid[]']); ShowContent('actdiv'); } else if (this.checked == false) { uncheckAllmsg(document.inboxmsg['mid[]']); HideContent('actdiv'); }"></td>
		    <td width="2%"><?php echo $this->_tpl_vars['adm_vadsth1']; ?>
</td>
    		    <td width="15%"><?php echo $this->_tpl_vars['adm_vadsth2']; ?>
</td>
		    <td width="15%"><?php echo $this->_tpl_vars['adm_vadsth3']; ?>
</td>
		    <td width="15%"><?php echo $this->_tpl_vars['adm_vadsth4']; ?>
</td>
		    <td width="6%"><?php echo $this->_tpl_vars['adm_vadsth5']; ?>
</td>
    		    <td width="6%"><?php echo $this->_tpl_vars['adm_vadsth7']; ?>
</td>
		    <td width="6%"><?php echo $this->_tpl_vars['adm_vadsth8']; ?>
</td>
		    <td width="8%"><?php echo $this->_tpl_vars['adm_vadsth9']; ?>
</td>
		    <td width="20%"><?php echo $this->_tpl_vars['adm_vadsth10']; ?>
</td>
		</tr>

		<?php unset($this->_sections['aa']);
$this->_sections['aa']['name'] = 'aa';
$this->_sections['aa']['loop'] = is_array($_loop=$this->_tpl_vars['adsview']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['aa']['show'] = true;
$this->_sections['aa']['max'] = $this->_sections['aa']['loop'];
$this->_sections['aa']['step'] = 1;
$this->_sections['aa']['start'] = $this->_sections['aa']['step'] > 0 ? 0 : $this->_sections['aa']['loop']-1;
if ($this->_sections['aa']['show']) {
    $this->_sections['aa']['total'] = $this->_sections['aa']['loop'];
    if ($this->_sections['aa']['total'] == 0)
        $this->_sections['aa']['show'] = false;
} else
    $this->_sections['aa']['total'] = 0;
if ($this->_sections['aa']['show']):

            for ($this->_sections['aa']['index'] = $this->_sections['aa']['start'], $this->_sections['aa']['iteration'] = 1;
                 $this->_sections['aa']['iteration'] <= $this->_sections['aa']['total'];
                 $this->_sections['aa']['index'] += $this->_sections['aa']['step'], $this->_sections['aa']['iteration']++):
$this->_sections['aa']['rownum'] = $this->_sections['aa']['iteration'];
$this->_sections['aa']['index_prev'] = $this->_sections['aa']['index'] - $this->_sections['aa']['step'];
$this->_sections['aa']['index_next'] = $this->_sections['aa']['index'] + $this->_sections['aa']['step'];
$this->_sections['aa']['first']      = ($this->_sections['aa']['iteration'] == 1);
$this->_sections['aa']['last']       = ($this->_sections['aa']['iteration'] == $this->_sections['aa']['total']);
?>
		<tr class="td">
		    <td align="center"><input type="checkbox" name="mid[]" value="<?php echo $this->_tpl_vars['adsview'][$this->_sections['aa']['index']]['aid']; ?>
" onclick="ShowContent('actdiv')"></td>
		    <td><?php echo $this->_tpl_vars['adsview'][$this->_sections['aa']['index']]['aid']; ?>
</td>
    		    <td><?php echo $this->_tpl_vars['adsview'][$this->_sections['aa']['index']]['name']; ?>
</td>
		    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['adsview'][$this->_sections['aa']['index']]['descrip'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...") : smarty_modifier_truncate($_tmp, 20, "...")); ?>
</td>
		    <td><a href="<?php echo $this->_tpl_vars['adsview'][$this->_sections['aa']['index']]['url']; ?>
"><?php echo $this->_tpl_vars['adsview'][$this->_sections['aa']['index']]['url']; ?>
</a></td>
		    <td><?php if ($this->_tpl_vars['adsview'][$this->_sections['aa']['index']]['active'] == '1'): ?><?php echo $this->_tpl_vars['adm_status_active']; ?>
<?php else: ?><?php echo $this->_tpl_vars['adm_status_inactive']; ?>
<?php endif; ?></td>
    		    <td align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['adsview'][$this->_sections['aa']['index']]['views'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</td>
		    <td align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['adsview'][$this->_sections['aa']['index']]['click'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</td>
		    <td align="center"><?php echo $this->_tpl_vars['ratio'][$this->_sections['aa']['index']]; ?>
%</td>
    		    <td align="center">
		    <?php if ($this->_tpl_vars['adsview'][$this->_sections['aa']['index']]['active'] == 0): ?> <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/textads/enable/<?php echo $this->_tpl_vars['adsview'][$this->_sections['aa']['index']]['aid']; ?>
"><?php echo $this->_tpl_vars['adm_vadsaction1']; ?>
</a> <?php else: ?><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/textads/disable/<?php echo $this->_tpl_vars['adsview'][$this->_sections['aa']['index']]['aid']; ?>
"><?php echo $this->_tpl_vars['adm_vadsaction2']; ?>
</a><?php endif; ?><?php echo $this->_tpl_vars['myfiles_delim']; ?>

		    <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/textads/edit/<?php echo $this->_tpl_vars['adsview'][$this->_sections['aa']['index']]['aid']; ?>
"><?php echo $this->_tpl_vars['adm_vadsaction3']; ?>
</a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

    		    <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/textads/delete/<?php echo $this->_tpl_vars['adsview'][$this->_sections['aa']['index']]['aid']; ?>
" onClick='Javascript:return confirm("<?php echo $this->_tpl_vars['adm_vadsdelmsg']; ?>
");'><?php echo $this->_tpl_vars['adm_vadsaction4']; ?>
</a>
    		    </td>
		</tr>
		<?php endfor; endif; ?>
		<tr>
                    <td colspan=4 class="nopad" valign="top">
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_selectactions.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </td>
                </tr>
            <?php endif; ?>
	    </table>
	    </form>
	</td>
    </tr>
</table>
<table cellpadding=2 cellspacing=1 border=0 width="100%">
    <tr>
        <td class="pag_bg" align="center" valign="top"><?php echo $this->_tpl_vars['link']; ?>
</td>
    </tr>
</table> 
<!-- END ADMIN AREA ADS MANAGEMENT TABLE -->