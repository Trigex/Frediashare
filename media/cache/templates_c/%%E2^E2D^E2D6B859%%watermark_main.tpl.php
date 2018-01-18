<?php /* Smarty version 2.6.26, created on 2009-11-10 15:26:30
         compiled from administration/watermark_main.tpl */ ?>
<br>
<!-- BEGIN ADMIN AREA WATERMARK MAIN TABLE -->
<table cellspacing="0" cellpadding="2" width="950" border=0 align=center>
    <tr>
	<td class=""><h1><?php echo $this->_tpl_vars['adm_play_vlogoheading']; ?>
</h1></td>
	<td class="" align=right><?php if ($this->_tpl_vars['total'] != '0'): ?><?php echo $this->_tpl_vars['adm_play_vlogonr']; ?>
 [<?php echo $this->_tpl_vars['start_num']; ?>
-<?php echo $this->_tpl_vars['end_num']; ?>
] <?php echo $this->_tpl_vars['adm_play_vlogoof']; ?>
 [<?php echo $this->_tpl_vars['total']; ?>
]<?php endif; ?></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr>
	<td class="grey" colspan=2>
	    <form name="inboxmsg" method="post" action="">
	    <table width="100%" cellpadding="4" cellspacing="1" border=0>
		<tr>
		    <td colspan=9 align=left>
			<table width="100%" cellpadding=0 cellspacing=0>
			    <tr>
				<td width="10%" align="left">
				    <input type="button" name="wadd" class="fb" value="<?php echo $this->_tpl_vars['adm_play_addbtn']; ?>
" onclick="location.href='<?php echo $this->_tpl_vars['admin_url']; ?>
/watermark/add'; return false;">
				</td>
			    </tr>
			</table><br>
		    </td>
		</tr>
	    <?php if ($this->_tpl_vars['watermark'][0]['wid'] != ""): ?>
		<tr class="th">
		    <td align="center" width="3%"><input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) { checkAllmsg(document.inboxmsg['mid[]']); ShowContent('actdiv'); } else if (this.checked == false) { uncheckAllmsg(document.inboxmsg['mid[]']); HideContent('actdiv'); }"></td>
		    <td width="3%"><?php echo $this->_tpl_vars['adm_play_vlogoth1']; ?>
</td>
    		    <td width="15%"><?php echo $this->_tpl_vars['adm_play_vlogoth2']; ?>
</td>
    		    <td width="20%"><?php echo $this->_tpl_vars['adm_play_vlogoth3']; ?>
</td>
    		    <td width="20%"><?php echo $this->_tpl_vars['adm_play_vlogoth4']; ?>
</td>
		    <td width="6%"><?php echo $this->_tpl_vars['adm_play_vlogoth5']; ?>
</td>
		    <td width="12%"><?php echo $this->_tpl_vars['adm_play_vlogoth6']; ?>
</td>
		    <td><?php echo $this->_tpl_vars['adm_play_vlogoth7']; ?>
</td>
    		    <td width="16%"><?php echo $this->_tpl_vars['adm_play_vlogoth9']; ?>
</td>
		</tr>

	        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['watermark']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		    <td align="center"><input type="checkbox" name="mid[]" value="<?php echo $this->_tpl_vars['watermark'][$this->_sections['i']['index']]['wid']; ?>
" onclick="ShowContent('actdiv')"></td>
		    <td><?php echo $this->_tpl_vars['watermark'][$this->_sections['i']['index']]['wid']; ?>
</td>
    		    <td><?php echo $this->_tpl_vars['watermark'][$this->_sections['i']['index']]['name']; ?>
</td>
    		    <td><?php echo $this->_tpl_vars['watermark'][$this->_sections['i']['index']]['description']; ?>
</td>
    		    <td><a href="<?php echo $this->_tpl_vars['watermark'][$this->_sections['i']['index']]['url']; ?>
"><?php echo $this->_tpl_vars['watermark'][$this->_sections['i']['index']]['url']; ?>
</a></td>
		    <td><?php if ($this->_tpl_vars['watermark'][$this->_sections['i']['index']]['active'] == 1): ?><?php echo $this->_tpl_vars['adm_status_active']; ?>
<?php else: ?><?php echo $this->_tpl_vars['adm_status_inactive']; ?>
<?php endif; ?></td>
    		    <td><?php echo $this->_tpl_vars['watermark'][$this->_sections['i']['index']]['position']; ?>
</td>
		    <td><?php echo $this->_tpl_vars['watermark'][$this->_sections['i']['index']]['transparency']; ?>
</td>
    		    <td>
		    <?php if ($this->_tpl_vars['watermark'][$this->_sections['i']['index']]['active'] == 0): ?> <a href='<?php echo $this->_tpl_vars['admin_url']; ?>
/watermark/enable/<?php echo $this->_tpl_vars['watermark'][$this->_sections['i']['index']]['wid']; ?>
'><?php echo $this->_tpl_vars['adm_play_vlogoaction1']; ?>
</a><?php endif; ?>
		    <?php if ($this->_tpl_vars['watermark'][$this->_sections['i']['index']]['active'] == 1): ?> <a href='<?php echo $this->_tpl_vars['admin_url']; ?>
/watermark/disable/<?php echo $this->_tpl_vars['watermark'][$this->_sections['i']['index']]['wid']; ?>
'><?php echo $this->_tpl_vars['adm_play_vlogoaction2']; ?>
</a><?php endif; ?><?php echo $this->_tpl_vars['myfiles_delim']; ?>

		    <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/watermark/edit/<?php echo $this->_tpl_vars['watermark'][$this->_sections['i']['index']]['wid']; ?>
"><?php echo $this->_tpl_vars['adm_play_vlogoaction3']; ?>
</a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

    		    <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/watermark/delete/<?php echo $this->_tpl_vars['watermark'][$this->_sections['i']['index']]['wid']; ?>
" onClick='Javascript:return confirm("<?php echo $this->_tpl_vars['adm_play_delmsg']; ?>
");'><?php echo $this->_tpl_vars['adm_play_vlogoaction4']; ?>
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
<!-- END ADMIN AREA WATERMARK MAIN TABLE -->