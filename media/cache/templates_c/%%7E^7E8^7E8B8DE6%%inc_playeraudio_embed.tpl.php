<?php /* Smarty version 2.6.26, created on 2009-11-10 15:26:37
         compiled from administration/_inc/inc_playeraudio_embed.tpl */ ?>
	    <fieldset>
	    <legend><?php echo $this->_tpl_vars['adm_vptxt9']; ?>
</legend>
	    <form action="<?php echo $this->_tpl_vars['admin_url']; ?>
/player_main_audio" method="post" enctype="multipart/form-data">
	    <table width="95%" align="center" cellpadding="0" cellspacing="0" border=0 id="pla_tbl">
		<tr>
		    <td class="types" valign="middle" width="33%"><?php echo $this->_tpl_vars['adm_playersize']; ?>
</td>
    		    <td>
			<table cellpadding=2 cellspacing=0 border=0>
			    <tr>
				<td><input type="text" name="epwidth" value="<?php if ($_REQUEST['epwidth'] == ""): ?><?php echo $this->_tpl_vars['esetting']['pwidth']; ?>
<?php else: ?><?php echo $_REQUEST['epwidth']; ?>
<?php endif; ?>" class="ff" size="5"></td>
				<td><?php echo $this->_tpl_vars['adm_playersize_width']; ?>
</td>
				<td width="25">&nbsp;</td>
				<td><input type="text" name="epheight" value="<?php if ($_REQUEST['epheight'] == ""): ?><?php echo $this->_tpl_vars['esetting']['pheight']; ?>
<?php else: ?><?php echo $_REQUEST['epheight']; ?>
<?php endif; ?>" class="ff" size="5"></td>
				<td><?php echo $this->_tpl_vars['adm_playersize_height']; ?>
</td>
			    </tr>
			</table>
    		    </td>
		</tr>
		<tr>
		    <td class="types" width="15%"><?php echo $this->_tpl_vars['adm_playerplayback_auto']; ?>
 </td>
    		    <td>
    			<table cellpadding=2 cellspacing=0 border=0 align=left>
                            <tr>
                                <td align="left" class="" width="200">
                                    <select name="eautoplay" class="selbox" onchange="ReverseContentDisplay('eap1'); ReverseContentDisplay('eap0');">
                                        <option value="1" <?php if ($this->_tpl_vars['esetting']['autoplay'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                        <option value="0" <?php if ($this->_tpl_vars['esetting']['autoplay'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                    </select>
                                </td>
                                <td width="60">
                                    <div id="eap1" <?php if ($this->_tpl_vars['esetting']['autoplay'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                    <div id="eap0" <?php if ($this->_tpl_vars['esetting']['autoplay'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                </td>
                            </tr>
                        </table>
    		    </td>
		</tr>
		<tr>
		    <td class="types" width="15%"><?php echo $this->_tpl_vars['adm_vptxt7']; ?>
 </td>
    		    <td>
    			<table cellpadding=2 cellspacing=0 border=0 align=left>
                            <tr>
                                <td align="left" class="" width="200">
                                    <select name="elogo" class="selbox" onchange="ReverseContentDisplay('epl1'); ReverseContentDisplay('epl0');">
                                        <option value="1" <?php if ($this->_tpl_vars['esetting']['logo'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                        <option value="0" <?php if ($this->_tpl_vars['esetting']['logo'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                    </select>
                                </td>
                                <td width="60">
                                    <div id="epl1" <?php if ($this->_tpl_vars['esetting']['logo'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                    <div id="epl0" <?php if ($this->_tpl_vars['esetting']['logo'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                </td>
                            </tr>
                        </table>
    		    </td>
		</tr>
		<tr>
		    <td class="types"><?php echo $this->_tpl_vars['adm_nfptxt6']; ?>
</td>
		    <td>
			<table cellpadding=2 cellspacing=0 border=0>
			    <tr>
				<td align="left" class="" width="200">
				    <select name="easkin" class="selbox">
					<option value="def" <?php if ($this->_tpl_vars['esetting']['skin'] == 'def'): ?>selected<?php endif; ?>>Default</option>
					<option value="rnd" <?php if ($this->_tpl_vars['esetting']['skin'] == 'rnd'): ?>selected<?php endif; ?>>Random</option>
				    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['askins']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<option value="<?php echo $this->_tpl_vars['askins'][$this->_sections['i']['index']]; ?>
" <?php if ($this->_tpl_vars['esetting']['skin'] == $this->_tpl_vars['askins'][$this->_sections['i']['index']]): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['askins'][$this->_sections['i']['index']]; ?>
</option>
				    <?php endfor; endif; ?>
				    </select>
				</td>
			    </tr>
			</table>
		    </td>
		</tr>
		<tr>
                    <td align="left" colspan="2"><table cellpadding="1" cellspacing="0"><tr><td><input type="checkbox" name="embedviews" <?php if ($this->_tpl_vars['inc_aplayer_count'] == '1'): ?>checked<?php endif; ?>></td><td><?php echo $this->_tpl_vars['plist_txt40']; ?>
</td></tr></table></td>
                </tr>
                <tr><td colspan="2"><hr></td></tr>
		<tr>
		    <td class="types" valign="middle"><?php echo $this->_tpl_vars['adm_playerbg']; ?>
</td>
    		    <td>
    			<input type="file" name="epicture" class="ff">
    		    </td>
		</tr>
<?php if ($this->_tpl_vars['esetting']['bgimage'] != ""): ?>
		<tr> 
		    <td valign="top" align="left">
			<table cellpadding=1 cellspacing=0><tr><td><?php echo $this->_tpl_vars['adm_playerdelbg']; ?>
</td><td><input type="checkbox" name="edelpic" value="1"></td></tr></table>
		    </td>
		    <td align="left"><img src="<?php echo $this->_tpl_vars['url_fp']; ?>
/wms_audio/<?php echo $this->_tpl_vars['esetting']['bgimage']; ?>
"></td>
		</tr>
<?php endif; ?>    
		<tr>
    		    <td colspan="2">&nbsp;</td>
		</tr>
		<tr>
		    <td></td>
    		    <td align="left"><input type="submit" name="eadd_setting" class="fb" value="<?php echo $this->_tpl_vars['adm_playerbtnsave']; ?>
"></td>
		</tr>
		<tr>
    		    <td colspan="2"></td>
		</tr>
	    </table>
	    </form>
	    </fieldset>