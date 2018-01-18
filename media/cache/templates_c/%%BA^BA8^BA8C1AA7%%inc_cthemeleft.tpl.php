<?php /* Smarty version 2.6.26, created on 2009-11-10 15:42:49
         compiled from _inc/chan/_inc/inc_cthemeleft.tpl */ ?>
    <table width="100%" border="0" cellpadding="2" cellspacing="1">
        <tr>
    	    <td colspan=2 class="nopad">
    		<table width="100%" border="0" cellpadding="2" cellspacing="0">
    		    <tr>
    			<td align="left"><a href="javascript:void(0)" onclick="ShowContent('layoutdiv'); HideContent('designdiv'); setclass_act('lay_pr'); changeclass_inact('des_pr');"><span id="lay_pr" class="act"><?php echo $this->_tpl_vars['pr_chinfop51']; ?>
</span></a></td>
    			<td align="right"><a href="javascript:void(0)" onclick="ShowContent('designdiv'); HideContent('layoutdiv'); setclass_act('des_pr'); changeclass_inact('lay_pr');"><span id="des_pr"><?php echo $this->_tpl_vars['pr_chinfop73']; ?>
</span></a></td></tr>
    		</table>
    	    </td>
    	</tr>
    </table>
    <div id="layoutdiv" style="display: block;">
    <table width="100%" border="0" cellpadding="2" cellspacing="1">
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr><td colspan=2><?php echo $this->_tpl_vars['pr_chinfop52']; ?>
</td></tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr>
    	    <td colspan="2">
    		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_cthemelayout.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    	    </td>
        </tr>
    </table>
    </div>
    <div id="designdiv" style="display: none;">
    <table width="100%" border="0" cellpadding="2" cellspacing="1">
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr><td colspan=2><?php echo $this->_tpl_vars['pr_chinfop74']; ?>
</td></tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr>
    	    <td width="35%"><?php echo $this->_tpl_vars['pr_chinfop76']; ?>
</td>
    	    <td valign="bottom"><input type="text" id="th_bgcol" name="th_bgcol" size="10" maxlength="7" class="cp" value="<?php echo $this->_tpl_vars['tinfo'][0]['th_bgcol']; ?>
" onchange="set_bb_pagebg(this.value);"></td>
    	</tr>
    	<tr>
    	    <td valign="top"><?php echo $this->_tpl_vars['pr_chinfop77']; ?>
</td>
    	    <td><?php if ($this->_tpl_vars['tinfo'][0]['th_bgsrcname'] != ""): ?><span class="italic"><?php echo $this->_tpl_vars['tinfo'][0]['th_bgsrcname']; ?>
</span><?php else: ?><input type="file" class="ff" size="10" name="th_bgfile"><?php echo $this->_tpl_vars['pr_chinfob39']; ?>
<?php endif; ?><br><input type="checkbox" name="th_delpic"><?php echo $this->_tpl_vars['mypr_avtxt4']; ?>
</td>
    	</tr>
    	<tr>
    	    <td><?php echo $this->_tpl_vars['pr_chinfop78']; ?>
</td>
    	    <td>
    		<table cellpadding="2" cellspacing="0" border=0>
    		    <tr>
    		        <td valign="top" width="1"><input type="radio" name="th_bgrpt" value="1" <?php if ($this->_tpl_vars['tinfo'][0]['th_bgrpt'] == '1'): ?>checked<?php endif; ?> onclick="set_rpt('on');"></td><td valign="bottom"><?php echo $this->_tpl_vars['adm_fileyes']; ?>
</td>
    		        <td valign="top" width="1"><input type="radio" name="th_bgrpt" value="0" <?php if ($this->_tpl_vars['tinfo'][0]['th_bgrpt'] == '0'): ?>checked<?php endif; ?> onclick="set_rpt('off');"></td><td valign="bottom"><?php echo $this->_tpl_vars['adm_fileno']; ?>
</td>
    		    </tr>
    	        </table>
    	    </td>
    	</tr>
        <tr>
    	    <td><?php echo $this->_tpl_vars['pr_chinfop79']; ?>
</td>
    	    <td valign="bottom"><input type="text" id="th_linkcol" name="th_linkcol" size="10" maxlength="7" class="cp" value="<?php echo $this->_tpl_vars['tinfo'][0]['th_link']; ?>
" onchange="set_bb_linkcol(this.value);"></td>
    	</tr>
    	<tr>
    	    <td><?php echo $this->_tpl_vars['pr_chinfob40']; ?>
</td>
    	    <td>
    		<table cellpadding="2" cellspacing="0" border=0>
    		    <tr>
    		        <td valign="top" width="1"><input type="radio" name="th_linkun" id="th_linkunyes" <?php if ($this->_tpl_vars['tinfo'][0]['th_link_dec'] == '1'): ?>checked<?php endif; ?> value="1" onclick="set_bb_linkunderlineon();"></td><td valign="bottom"><?php echo $this->_tpl_vars['adm_fileyes']; ?>
</td>
    		        <td valign="top" width="1"><input type="radio" name="th_linkun" id="th_linkunno" <?php if ($this->_tpl_vars['tinfo'][0]['th_link_dec'] == '0'): ?>checked<?php endif; ?> value="0" onclick="set_bb_linkunderlineoff();"></td><td valign="bottom"><?php echo $this->_tpl_vars['adm_fileno']; ?>
</td>
    		    </tr>
    	        </table>
    	    </td>
    	</tr>
        <tr>
    	    <td><?php echo $this->_tpl_vars['pr_chinfop80']; ?>
</td>
    	    <td valign="bottom"><input type="text" id="th_labelcol" name="th_labelcol" size="10" maxlength="7" class="cp" value="<?php echo $this->_tpl_vars['tinfo'][0]['th_label']; ?>
" onchange="set_bb_labelcol(this.value);"></td>
    	</tr>
    	<tr>
    	    <td><?php echo $this->_tpl_vars['pr_chinfop81']; ?>
</td>
    	    <td>
    		<select name="th_transp" id="th_transp" class="selbox" style="width: 63px;" onchange="set_bb_transp(this.selectedIndex);">
    		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['start'] = (int)50;
$this->_sections['i']['loop'] = is_array($_loop=101) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
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
    		    <option value="<?php echo $this->_sections['i']['index']; ?>
" <?php if ($this->_sections['i']['index'] == $this->_tpl_vars['tinfo'][0]['th_transp']): ?>selected<?php endif; ?>><?php echo $this->_sections['i']['index']; ?>
</option>
    		<?php endfor; endif; ?>
    		</select>&nbsp;%
    	    </td>
    	</tr>
    	<tr>
    	    <td><?php echo $this->_tpl_vars['pr_chinfop82']; ?>
</td>
    	    <td>
    		<select name="th_font" id="th_font" class="selbox" style="width: 130px;" onchange="set_bb_font(this.value);">
    		    <option value="arial" <?php if ($this->_tpl_vars['tinfo'][0]['th_font_fam'] == 'Arial'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['pr_chinfop83']; ?>
</option>
    		    <option value="times New Roman" <?php if ($this->_tpl_vars['tinfo'][0]['th_font_fam'] == 'Times New Roman'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['pr_chinfop84']; ?>
</option>
    		    <option value="georgia" <?php if ($this->_tpl_vars['tinfo'][0]['th_font_fam'] == 'Georgia'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['pr_chinfop85']; ?>
</option>
    		    <option value="verdana" <?php if ($this->_tpl_vars['tinfo'][0]['th_font_fam'] == 'Verdana'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['pr_chinfop86']; ?>
</option>
    		    <option value="comic Sans MS" <?php if ($this->_tpl_vars['tinfo'][0]['th_font_fam'] == 'Comic Sans MS'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['pr_chinfop86x']; ?>
</option>
    		</select>
    	    </td>
    	</tr>
    	<tr>
    	    <td><?php echo $this->_tpl_vars['pr_chinfop89']; ?>
</td>
    	    <td>
    		<select name="th_fontsize" id="th_fontsize" class="selbox" style="width: 63px;" onchange="set_bb_fontsize(this.value);">
    		<?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['start'] = (int)7;
$this->_sections['j']['loop'] = is_array($_loop=15) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
if ($this->_sections['j']['start'] < 0)
    $this->_sections['j']['start'] = max($this->_sections['j']['step'] > 0 ? 0 : -1, $this->_sections['j']['loop'] + $this->_sections['j']['start']);
else
    $this->_sections['j']['start'] = min($this->_sections['j']['start'], $this->_sections['j']['step'] > 0 ? $this->_sections['j']['loop'] : $this->_sections['j']['loop']-1);
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = min(ceil(($this->_sections['j']['step'] > 0 ? $this->_sections['j']['loop'] - $this->_sections['j']['start'] : $this->_sections['j']['start']+1)/abs($this->_sections['j']['step'])), $this->_sections['j']['max']);
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
    		    <option value="<?php echo $this->_sections['j']['index']; ?>
" <?php if ($this->_sections['j']['index'] == $this->_tpl_vars['tinfo'][0]['th_font_size']): ?>selected<?php endif; ?>><?php echo $this->_sections['j']['index']; ?>
</option>
    		<?php endfor; endif; ?>
    		</select>&nbsp;px
    	    </td>
    	</tr>
    	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr><td colspan=2><?php echo $this->_tpl_vars['pr_chinfop91']; ?>
</td></tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr>
    	    <td><?php echo $this->_tpl_vars['pr_chinfop76']; ?>
</td>
    	    <td valign="bottom"><input type="text" id="th_bbbordercol" name="th_bbbordercol" size="10" maxlength="7" class="cp" value="<?php echo $this->_tpl_vars['tinfo'][0]['th_hb_bgcol']; ?>
" onchange="set_bb_bg2(this.value);"></td>
    	</tr>
        <tr>
    	    <td><?php echo $this->_tpl_vars['pr_chinfop90']; ?>
</td>
    	    <td valign="bottom"><input type="text" id="th_bbtxt2" name="th_bbtxt2" size="10" maxlength="7" class="cp" value="<?php echo $this->_tpl_vars['tinfo'][0]['th_hb_h1']; ?>
" onchange="set_bb_text3(this.value);"></td>
    	</tr>
        <tr>
    	    <td><?php echo $this->_tpl_vars['pr_chinfop98']; ?>
</td>
    	    <td valign="bottom"><input type="text" id="th_bbtxt1" name="th_bbtxt1" size="10" maxlength="7" class="cp" value="<?php echo $this->_tpl_vars['tinfo'][0]['th_hb_h2']; ?>
" onchange="set_bb_text4(this.value);"></td>
    	</tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr><td colspan=2><?php echo $this->_tpl_vars['pr_chinfop87']; ?>
</td></tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr>
    	    <td><?php echo $this->_tpl_vars['pr_chinfop88']; ?>
</td>
    	    <td valign="bottom"><input type="text" id="bb_border" name="th_bb_border" size="10" maxlength="7" class="cp" value="<?php echo $this->_tpl_vars['tinfo'][0]['th_bb_border']; ?>
" onchange="set_bb_border(this.value);"></td>
    	</tr>
        <tr>
    	    <td><?php echo $this->_tpl_vars['pr_chinfop76']; ?>
</td>
    	    <td valign="bottom"><input type="text" id="bb_bg" name="th_bb_bg" size="10" maxlength="7" class="cp" value="<?php echo $this->_tpl_vars['tinfo'][0]['th_bb_bgcol']; ?>
" onchange="set_bb_bg(this.value);"></td>
    	</tr>
        <tr>
    	    <td><?php echo $this->_tpl_vars['pr_chinfop90']; ?>
</td>
    	    <td valign="bottom"><input type="text" id="bb_text1" name="th_bb_text1" size="10" maxlength="7" class="cp" value="<?php echo $this->_tpl_vars['tinfo'][0]['th_bb_h1']; ?>
" onchange="set_bb_text1(this.value);"></td>
    	</tr>
        <tr>
    	    <td><?php echo $this->_tpl_vars['pr_chinfop98']; ?>
</td>
    	    <td valign="bottom"><input type="text" id="bb_text2" name="th_bb_text2" size="10" maxlength="7" class="cp" value="<?php echo $this->_tpl_vars['tinfo'][0]['th_bb_h2']; ?>
" onchange="set_bb_text2(this.value);"></td>
    	</tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr><td colspan=2><?php echo $this->_tpl_vars['pr_chinfop93']; ?>
</td></tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr>
    	    <td><?php echo $this->_tpl_vars['pr_chinfop88']; ?>
</td>
    	    <td valign="bottom"><input type="text" id="th_vlbordercol" name="th_vlbordercol" size="10" maxlength="7" class="cp" value="<?php echo $this->_tpl_vars['tinfo'][0]['th_vl_border']; ?>
" onchange="set_vl_border(this.value);"></td>
    	</tr>
        <tr>
    	    <td><?php echo $this->_tpl_vars['pr_chinfop76']; ?>
</td>
    	    <td valign="bottom"><input type="text" id="th_vlbg" name="th_vlbg" size="10" maxlength="7" class="cp" value="<?php echo $this->_tpl_vars['tinfo'][0]['th_vl_bgcol']; ?>
" onchange="set_vl_bg(this.value);"></td>
    	</tr>
        <tr>
    	    <td><?php echo $this->_tpl_vars['pr_chinfop92']; ?>
</td>
    	    <td valign="bottom"><input type="text" id="th_vlptitle" name="th_vlptitle" size="10" maxlength="7" class="cp" value="<?php echo $this->_tpl_vars['tinfo'][0]['th_vl_post']; ?>
" onchange="set_vl_post(this.value);"></td>
    	</tr>
        <tr>
    	    <td><?php echo $this->_tpl_vars['pr_chinfop90']; ?>
</td>
    	    <td valign="bottom"><input type="text" id="th_vltxt1" name="th_vltxt1" size="10" maxlength="7" class="cp" value="<?php echo $this->_tpl_vars['tinfo'][0]['th_vl_h1']; ?>
" onchange="set_vl_text1(this.value);"></td>
    	</tr>
        <tr>
    	    <td><?php echo $this->_tpl_vars['pr_chinfop98']; ?>
</td>
    	    <td valign="bottom"><input type="text" id="th_vltxt2" name="th_vltxt2" size="10" maxlength="7" class="cp" value="<?php echo $this->_tpl_vars['tinfo'][0]['th_vl_h2']; ?>
" onchange="set_vl_text2(this.value);"></td>
    	</tr>
    </table>
    </div>