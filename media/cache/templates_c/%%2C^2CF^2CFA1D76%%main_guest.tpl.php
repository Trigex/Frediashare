<?php /* Smarty version 2.6.26, created on 2009-11-10 15:26:18
         compiled from administration/main_guest.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'administration/main_guest.tpl', 217, false),)), $this); ?>
<!-- BEGIN ADMIN AREA GUEST SETTINGS TABLE -->
<br>
<table align=center width="950" border=0 cellpadding=2 cellspacing=0>
    <tr>
	<td align="left" class=""><h1><?php echo $this->_tpl_vars['adm_setguestheading']; ?>
</h1></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr>
	<td class=grey>
	    <table cellpadding=5 cellspacing=0 width="100%" border=0>
		<tr>
		    <td colspan=2><?php echo $this->_tpl_vars['adm_setguesttxt']; ?>
</td>
		</tr>
		<tr>
		    <td valign=top width="30%" class="pl0">
		    <form name="guest_form" method="post" action="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/guest">
			<br>
			<table cellpadding=4 cellspacing=0 width="100%" align=left border=0>
			    <tr>
				<td class="types" width="55%"><?php echo $this->_tpl_vars['adm_setguest1']; ?>
</td>
				<td>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="radio" name="audioacc" value="1" <?php if ($this->_tpl_vars['guests_audio_view'] == '1'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setguestyes']; ?>
</td>
					    <td>&nbsp;</td><td>&nbsp;</td>
					    <td><input type="radio" name="audioacc" value="0" <?php if ($this->_tpl_vars['guests_audio_view'] == '0'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setguestno']; ?>
</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td class="types" width="55%"><?php echo $this->_tpl_vars['adm_setguest2']; ?>
</td>
				<td>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="radio" name="imageacc" value="1" <?php if ($this->_tpl_vars['guests_image_view'] == '1'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setguestyes']; ?>
</td>
					    <td>&nbsp;</td><td>&nbsp;</td>
					    <td><input type="radio" name="imageacc" value="0" <?php if ($this->_tpl_vars['guests_image_view'] == '0'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setguestno']; ?>
</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td class="types" width="55%"><?php echo $this->_tpl_vars['adm_setguest3']; ?>
</td>
				<td>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="radio" name="videoacc" value="1" <?php if ($this->_tpl_vars['guests_video_view'] == '1'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setguestyes']; ?>
</td>
					    <td>&nbsp;</td><td>&nbsp;</td>
					    <td><input type="radio" name="videoacc" value="0" <?php if ($this->_tpl_vars['guests_video_view'] == '0'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setguestno']; ?>
</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    
			    <tr>
				<td class="types" width="55%"><?php echo $this->_tpl_vars['adm_setguest31']; ?>
</td>
				<td>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="radio" name="file_sort" value="1" <?php if ($this->_tpl_vars['guests_file_sorting'] == '1'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setguestyes']; ?>
</td>
					    <td>&nbsp;</td><td>&nbsp;</td>
					    <td><input type="radio" name="file_sort" value="0" <?php if ($this->_tpl_vars['guests_file_sorting'] == '0'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setguestno']; ?>
</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    
			    <tr>
				<td class="types" width="55%"><?php echo $this->_tpl_vars['adm_setguest32']; ?>
</td>
				<td>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="radio" name="file_access" value="1" <?php if ($this->_tpl_vars['guests_file_access'] == '1'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setguestyes']; ?>
</td>
					    <td>&nbsp;</td><td>&nbsp;</td>
					    <td><input type="radio" name="file_access" value="0" <?php if ($this->_tpl_vars['guests_file_access'] == '0'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setguestno']; ?>
</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    
			    <tr>
				<td class="types" width="55%"><?php echo $this->_tpl_vars['adm_setguest4']; ?>
</td>
				<td>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="radio" name="categacc" value="1" <?php if ($this->_tpl_vars['guests_categories_view'] == '1'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setguestyes']; ?>
</td>
					    <td>&nbsp;</td><td>&nbsp;</td>
					    <td><input type="radio" name="categacc" value="0" <?php if ($this->_tpl_vars['guests_categories_view'] == '0'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setguestno']; ?>
</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td class="types" width="55%"><?php echo $this->_tpl_vars['adm_setguest5']; ?>
</td>
				<td>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="radio" name="memsec" value="1" <?php if ($this->_tpl_vars['guests_members_view'] == '1'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setguestyes']; ?>
</td>
					    <td>&nbsp;</td><td>&nbsp;</td>
					    <td><input type="radio" name="memsec" value="0" <?php if ($this->_tpl_vars['guests_members_view'] == '0'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setguestno']; ?>
</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    
			    <tr>
				<td class="types" width="55%"><?php echo $this->_tpl_vars['ch_acctxt']; ?>
</td>
				<td>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="radio" name="chansec" value="1" <?php if ($this->_tpl_vars['guests_chan_access'] == '1'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setguestyes']; ?>
</td>
					    <td>&nbsp;</td><td>&nbsp;</td>
					    <td><input type="radio" name="chansec" value="0" <?php if ($this->_tpl_vars['guests_chan_access'] == '0'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setguestno']; ?>
</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    
			    <tr>
				<td class="types" width="55%"><?php echo $this->_tpl_vars['adm_setguest6']; ?>
</td>
				<td>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="radio" name="mempro" value="1" <?php if ($this->_tpl_vars['guests_profile_view'] == '1'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setguestyes']; ?>
</td>
					    <td>&nbsp;</td><td>&nbsp;</td>
					    <td><input type="radio" name="mempro" value="0" <?php if ($this->_tpl_vars['guests_profile_view'] == '0'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setguestno']; ?>
</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td class="types" width="55%"><?php echo $this->_tpl_vars['adm_setguest7']; ?>
</td>
				<td>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="radio" name="searchacc" value="1" <?php if ($this->_tpl_vars['guests_search_access'] == '1'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setguestyes']; ?>
</td>
					    <td>&nbsp;</td><td>&nbsp;</td>
					    <td><input type="radio" name="searchacc" value="0" <?php if ($this->_tpl_vars['guests_search_access'] == '0'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setguestno']; ?>
</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td class="types" width="55%"><?php echo $this->_tpl_vars['adm_setguest8']; ?>
</td>
				<td>
				    <table cellpadding=1 cellspacing=0 border=0>
					<tr>
					    <td valign=top><input type="text" class="ff" name="bwlimit" value="<?php if ($_REQUEST['bwlimit'] != ""): ?><?php echo $_REQUEST['bwlimit']; ?>
<?php else: ?><?php echo $this->_tpl_vars['guests_bw_limit']; ?>
<?php endif; ?>" size="6"><?php echo $this->_tpl_vars['adm_setguest_bw1']; ?>
</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr class="nopad">
				<td class="nopad"></td><td align=left class="nopad"><?php echo $this->_tpl_vars['adm_setguest_bw2']; ?>
</td>
			    </tr>
			    <tr>
				<td align=right class="pr5"><br><br><input type="submit" name="guest_save" class="fb" value="<?php echo $this->_tpl_vars['adm_setgensave']; ?>
"></td><td></td>
			    </tr>
			</table>
			</form>
		    </td>
		    
		    <td valign=top width="70%" class="pl0">
		    <form name="inboxmsg" method="post" action="">
			<table cellpadding=3 cellspacing=0 align=center border=0 width="100%">
			    <tr>
				<td width="31%"><a href="javascript:void(0)" onclick="ReverseContentDisplay('guest_stat')"><span id="opts_txt1">[Show/Hide] Guest Statistics</span></a></td>
				<td valign=middle><img id="opts" class="cursor" src="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/images/sign_minus.gif" width="10" height="10" alt="Guest Statistics" onclick="ReverseContentDisplay('guest_stat')"></td>
			    </tr>
			    <tr>
				<td colspan=2>
				<div id="guest_stat" style="display: block;">
				    <table cellpadding=4 cellspacing=1 border=0 width="100%" class="cs1 rowstyle-alt no-arrow" id="stbl">
				    <thead>
					<tr class="th">
					    <?php if ($this->_tpl_vars['ginfo'][0]['gid'] != ""): ?>
					    <th align="center"><input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) { checkAllmsg(document.inboxmsg['mid[]']); ShowContent('actdiv'); } else if (this.checked == false) { uncheckAllmsg(document.inboxmsg['mid[]']); HideContent('actdiv'); }"></th>
					    <?php endif; ?>
					    <th class="sortable-numeric" width="5%"><?php echo $this->_tpl_vars['adm_setgueststatth1']; ?>
</th>
					    <th class="sortable-sortIPAddress" width="9%"><?php echo $this->_tpl_vars['adm_setgueststatth2']; ?>
</th>
					    <th class="sortable-sortEnglishLonghandDateFormat" width="12%"><?php echo $this->_tpl_vars['adm_setgueststatth4']; ?>
</th>
					    <th class="sortable-sortByTwelveHourTimestamp" width="9%"><?php echo $this->_tpl_vars['adm_setgueststatth5']; ?>
</th>
					    <th class="sortable-numeric" width="10%"><?php echo $this->_tpl_vars['adm_setgueststatth6']; ?>
</th>
					    <th width="15%"><?php echo $this->_tpl_vars['adm_setgueststatth7']; ?>
</th>
					</tr>
				    </thead>
				    <tbody>
				    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['ginfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					    <?php if ($this->_tpl_vars['ginfo'][0]['gid'] != ""): ?>
					    <td width="3%" class="th1" align="center"><input type="checkbox" name="mid[]" value="<?php echo $this->_tpl_vars['ginfo'][$this->_sections['i']['index']]['gid']; ?>
" onclick="ShowContent('actdiv')"></td>
					    <?php endif; ?>
					    <td><?php echo $this->_tpl_vars['ginfo'][$this->_sections['i']['index']]['gid']; ?>
</td>
					    <td><?php echo $this->_tpl_vars['ginfo'][$this->_sections['i']['index']]['guest_ip']; ?>
</td>
					    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['ginfo'][$this->_sections['i']['index']]['log_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %e, %Y") : smarty_modifier_date_format($_tmp, "%b %e, %Y")); ?>
</td>
					    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['ginfo'][$this->_sections['i']['index']]['log_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M %p") : smarty_modifier_date_format($_tmp, "%H:%M %p")); ?>
</td>
					    <td><?php echo $this->_tpl_vars['ginfo'][$this->_sections['i']['index']]['used_bw']; ?>
</td>
					    <td>
						<a href="javascript:void(0)" onclick="if(confirm('<?php echo $this->_tpl_vars['adm_setguestdelmsg']; ?>
')) location.href='<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/guest/delete/<?php echo $this->_tpl_vars['ginfo'][$this->_sections['i']['index']]['gid']; ?>
'; return false;"><?php echo $this->_tpl_vars['adm_setgueststataction1']; ?>
</a> | 
						<a href="javascript:void(0)" onclick="if(confirm('<?php echo $this->_tpl_vars['adm_setguestresetmsg']; ?>
')) location.href='<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/guest/reset/<?php echo $this->_tpl_vars['ginfo'][$this->_sections['i']['index']]['gid']; ?>
'; return false;"><?php echo $this->_tpl_vars['adm_setgueststataction2']; ?>
</a>
					    </td>
					</tr>
				    <?php endfor; endif; ?>
				    </tbody>
				    </table>
				    <?php if ($this->_tpl_vars['ginfo'][0]['gid'] != ""): ?>
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
				    <table cellpadding=4 cellspacing=1 border=0 width="100%" align="left">
					<tr>
					    <td align=left width="25%"><?php echo $this->_tpl_vars['adm_setguestentry']; ?>
[<?php echo $this->_tpl_vars['start_num']; ?>
 - <?php echo $this->_tpl_vars['end_num']; ?>
]<?php echo $this->_tpl_vars['adm_setguestentryof']; ?>
<?php echo $this->_tpl_vars['total']; ?>
</td>
					    <td class="pag_bg"><?php echo $this->_tpl_vars['link']; ?>
</td>
					</tr>
				    </table>
				</div>
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
<!-- END ADMIN AREA GUEST SETTINGS TABLE -->