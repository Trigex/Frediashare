<?php /* Smarty version 2.6.26, created on 2009-11-10 15:26:25
         compiled from administration/main_templates.tpl */ ?>
<!-- BEGIN ADMIN AREA EDITABLE TEMPLATES TABLE -->
<br>
<table align=center width="950" border=0 cellpadding=2 cellspacing=0>
    <tr>
	<td align="left" class=""><h1><?php echo $this->_tpl_vars['adm_settplemailheading']; ?>
</h1></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr>
	<td class=grey>
	    <table cellpadding=5 cellspacing=0 width="100%" border=0>
		<tr>
		    <td><?php echo $this->_tpl_vars['adm_settplemailtxt']; ?>
</td>
		</tr>
		<tr>
		    <td valign=top>
			<table cellpadding=4 cellspacing=1 align=center width="100%">
			    <tr class="th">
				<td width="2%"><?php echo $this->_tpl_vars['adm_setadth1']; ?>
</td>
				<td><?php echo $this->_tpl_vars['adm_setadth2']; ?>
</td>
				<td><?php echo $this->_tpl_vars['adm_setadth3']; ?>
</td>
				<td><?php echo $this->_tpl_vars['adm_settplth1']; ?>
</td>
				<td width="7%"><?php echo $this->_tpl_vars['adm_setadth5']; ?>
</td>
			    </tr>
			    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['emails']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<td align=center><?php echo $this->_sections['i']['iteration']; ?>
</td>
				<td align=center><?php echo $this->_tpl_vars['emails'][$this->_sections['i']['index']]['email_id']; ?>
</td>
				<td align=center><?php echo $this->_tpl_vars['emails'][$this->_sections['i']['index']]['comment']; ?>
</td>
				<td align=center><?php echo $this->_tpl_vars['emails'][$this->_sections['i']['index']]['email_subject']; ?>
</td>
				<td align=center><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/templates/edit/<?php echo $this->_tpl_vars['emails'][$this->_sections['i']['index']]['email_id']; ?>
"><?php echo $this->_tpl_vars['adm_setadact1']; ?>
</a></td>
			    </tr>
			    <?php endfor; endif; ?>
			</table>
		    </td>
		</tr>
	    </table>
	</td>
    </tr>
</table>
<br>
<table align=center width="950" border=0 cellpadding=5 cellspacing=0>
    <tr>
	<td align="" class=""><h1><?php echo $this->_tpl_vars['adm_settplstaticheading']; ?>
</h1></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr>
	<td class=grey>
	    <table cellpadding=5 cellspacing=0 width="100%" border=0>
		<tr>
		    <td><?php echo $this->_tpl_vars['adm_settplstatictxt']; ?>
</td>
		</tr>
		<tr>
		    <td valign=top>
		    <form name="inboxmsg" method="post" action="">
			<table cellpadding=4 cellspacing=1 align=center width="100%">
			    <tr class="th">
				<td align="center" width="3%"><input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) { checkAllmsg(document.inboxmsg['mid[]']); ShowContent('actdiv'); } else if (this.checked == false) { uncheckAllmsg(document.inboxmsg['mid[]']); HideContent('actdiv'); }"></td>
				<td width="2%"><?php echo $this->_tpl_vars['adm_setadth1']; ?>
</td>
				<td><?php echo $this->_tpl_vars['adm_setadth2']; ?>
</td>
				<td><?php echo $this->_tpl_vars['adm_setadth3']; ?>
</td>
				<td><?php echo $this->_tpl_vars['adm_settplth2']; ?>
</td>
				<td width="10%"><?php echo $this->_tpl_vars['adm_setadth4']; ?>
</td>
				<td width="12%"><?php echo $this->_tpl_vars['adm_setadth5']; ?>
</td>
			    </tr>
			    <?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['static']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>
			    <tr class="td">
				<td align="center"><input type="checkbox" name="mid[]" value="<?php echo $this->_tpl_vars['static'][$this->_sections['j']['index']]['fid']; ?>
" onclick="ShowContent('actdiv')"></td> 
				<td><?php echo $this->_tpl_vars['static'][$this->_sections['j']['index']]['fid']; ?>
</td>
				<td><?php echo $this->_tpl_vars['static'][$this->_sections['j']['index']]['fname']; ?>
</td>
				<td><?php echo $this->_tpl_vars['static'][$this->_sections['j']['index']]['fdescr']; ?>
</td>
				<td><?php echo $this->_tpl_vars['static'][$this->_sections['j']['index']]['file']; ?>
</td>
				<td><?php if ($this->_tpl_vars['static'][$this->_sections['j']['index']]['active'] == '1'): ?><?php echo $this->_tpl_vars['adm_status_active']; ?>
<?php else: ?><?php echo $this->_tpl_vars['adm_status_inactive']; ?>
<?php endif; ?></td>
				<td align=center><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/templates/edit/<?php echo $this->_tpl_vars['static'][$this->_sections['j']['index']]['ff']; ?>
"><?php echo $this->_tpl_vars['adm_setadact1']; ?>
</a> | <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/templates/<?php if ($this->_tpl_vars['static'][$this->_sections['j']['index']]['active'] == '1'): ?>disable<?php else: ?>enable<?php endif; ?>/<?php echo $this->_tpl_vars['static'][$this->_sections['j']['index']]['ff']; ?>
"><?php if ($this->_tpl_vars['static'][$this->_sections['j']['index']]['active'] == '1'): ?><?php echo $this->_tpl_vars['adm_setadact3']; ?>
<?php else: ?><?php echo $this->_tpl_vars['adm_setadact2']; ?>
<?php endif; ?></a></td>
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
		    </form>
		    </td>
		</tr>
	    </table>
	</td>
    </tr>
</table>
<!-- END ADMIN AREA EDITABLE TEMPLATES TABLE -->