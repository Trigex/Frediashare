<?php /* Smarty version 2.6.26, created on 2009-11-10 15:26:27
         compiled from administration/main_ads.tpl */ ?>
<!-- BEGIN ADMIN AREA ADS SETTINGS TABLE -->
<br>
<table align=center width="950" border=0 cellpadding=5 cellspacing=0>
    <tr>
	<td align="left"><h1><?php echo $this->_tpl_vars['adm_setadheading']; ?>
</h1></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr>
	<td class=grey>
	<form name="inboxmsg" method="post" action="">
	    <table cellpadding=10 cellspacing=0 width="100%" border=0>
		<tr>
		    <td colspan=2><?php echo $this->_tpl_vars['adm_setadtxt']; ?>
</td>
		</tr>
		<tr>
		    <td width="100%" valign=top>
			<table cellpadding=4 cellspacing=1 border=0 align=center width="100%">
			    <tr class="th">
				<td align="center" width="3%"><input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) { checkAllmsg(document.inboxmsg['mid[]']); ShowContent('actdiv'); } else if (this.checked == false) { uncheckAllmsg(document.inboxmsg['mid[]']); HideContent('actdiv'); }"></td>
				<td align=center width="2%"><?php echo $this->_tpl_vars['adm_setadth1']; ?>
</td>
				<td align=center width="10%"><?php echo $this->_tpl_vars['adm_setadth2']; ?>
</td>
				<td align=center width="30%"><?php echo $this->_tpl_vars['adm_setadth3']; ?>
</td>
				<td align=center width="10%"><?php echo $this->_tpl_vars['adm_setadth4']; ?>
</td>
				<td align=center width="10%"><?php echo $this->_tpl_vars['adm_setadth5']; ?>
</td>
			    </tr>
			    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['ads']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<td align="center"><input type="checkbox" name="mid[]" value="<?php echo $this->_tpl_vars['ads'][$this->_sections['i']['index']]['aid']; ?>
" onclick="ShowContent('actdiv')"></td>
				<td align=center><?php echo $this->_tpl_vars['ads'][$this->_sections['i']['index']]['aid']; ?>
</td>
				<td align=center><?php echo $this->_tpl_vars['ads'][$this->_sections['i']['index']]['aname']; ?>
</td>
				<td align=center><?php echo $this->_tpl_vars['ads'][$this->_sections['i']['index']]['adescr']; ?>
</td>
				<td align=center><?php if ($this->_tpl_vars['ads'][$this->_sections['i']['index']]['astatus'] == '1'): ?><?php echo $this->_tpl_vars['adm_status_active']; ?>
<?php else: ?><?php echo $this->_tpl_vars['adm_status_inactive']; ?>
<?php endif; ?></td>
				<td align=center><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/ads/edit/<?php echo $this->_tpl_vars['ads'][$this->_sections['i']['index']]['aid']; ?>
"><?php echo $this->_tpl_vars['adm_setadact1']; ?>
</a> | <?php if ($this->_tpl_vars['ads'][$this->_sections['i']['index']]['astatus'] == '1'): ?>
				<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/ads/disable/<?php echo $this->_tpl_vars['ads'][$this->_sections['i']['index']]['aid']; ?>
"><?php echo $this->_tpl_vars['adm_setadact3']; ?>
</a><?php else: ?><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/ads/enable/<?php echo $this->_tpl_vars['ads'][$this->_sections['i']['index']]['aid']; ?>
"><?php echo $this->_tpl_vars['adm_setadact2']; ?>
</a><?php endif; ?></td>
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
			</table>
		    </td>
		</tr>
	    </table>
	</form>
	</td>
    </tr>
</table>
<!-- END ADMIN AREA ADS SETTINGS TABLE -->