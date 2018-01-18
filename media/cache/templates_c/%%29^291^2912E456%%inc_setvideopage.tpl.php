<?php /* Smarty version 2.6.26, created on 2009-11-10 15:24:21
         compiled from administration/_inc/inc_setvideopage.tpl */ ?>
<script type="text/javascript">
<?php echo '
function setvpage_pcn() { if ( document.setvpageform.vpage_pcnbox.checked == false ) { document.setvpageform.vpage_pcnbox_pos[0].disabled = true; document.setvpageform.vpage_pcnbox_pos[1].disabled = true;  } else if ( document.setvpageform.vpage_pcnbox.checked == true ) { document.setvpageform.vpage_pcnbox_pos[0].disabled = false; document.setvpageform.vpage_pcnbox_pos[1].disabled = false; } }
function setvpage_ftabs() { 
    if ( document.setvpageform.vpage_ftabs.checked == false ) { 
	document.setvpageform.vpage_ftabslist[0].disabled = true; 
	document.setvpageform.vpage_ftabslist[1].disabled = true; 

	document.setvpageform.vpage_ftabs_t1.disabled = true; 
	if ( document.setvpageform.vpage_ftabs_t1.checked == true ) {
	    document.setvpageform.vpage_ftabs_t1_box[0].disabled = true; 
	    document.setvpageform.vpage_ftabs_t1_box[1].disabled = true; 
	}
	
	document.setvpageform.vpage_ftabs_t5.disabled = true; 
	if ( document.setvpageform.vpage_ftabs_t5.checked == true ) {
	    document.setvpageform.vpage_ftabs_t5_box[0].disabled = true; 
	    document.setvpageform.vpage_ftabs_t5_box[1].disabled = true; 
	}
    } else if ( document.setvpageform.vpage_ftabs.checked == true ) { 
	document.setvpageform.vpage_ftabslist[0].disabled = false; 
	document.setvpageform.vpage_ftabslist[1].disabled = false; 
	
	document.setvpageform.vpage_ftabs_t1.disabled = false; 
	if ( document.setvpageform.vpage_ftabs_t1.checked == true ) {
	    document.setvpageform.vpage_ftabs_t1_box[0].disabled = false; 
	    document.setvpageform.vpage_ftabs_t1_box[1].disabled = false; 
	}
	
	document.setvpageform.vpage_ftabs_t5.disabled = false; 
	if ( document.setvpageform.vpage_ftabs_t5.checked == true ) {
	    document.setvpageform.vpage_ftabs_t5_box[0].disabled = false; 
	    document.setvpageform.vpage_ftabs_t5_box[1].disabled = false; 
	}
    } 
}
function setvpage_tags() { if ( document.setvpageform.vpage_ftags.checked == false ) { document.setvpageform.vpage_ftags_box[0].disabled = true; document.setvpageform.vpage_ftags_box[1].disabled = true;  } else if ( document.setvpageform.vpage_ftags.checked == true ) { document.setvpageform.vpage_ftags_box[0].disabled = false; document.setvpageform.vpage_ftags_box[1].disabled = false; } }
function setvpage_ftabs_t1() { 
    if ( document.setvpageform.vpage_ftabs_t1.checked == false ) { 
	document.setvpageform.vpage_ftabs_t1_box[0].disabled = true; 
	document.setvpageform.vpage_ftabs_t1_box[1].disabled = true;  
    } else if ( document.setvpageform.vpage_ftabs_t1.checked == true ) { 
	document.setvpageform.vpage_ftabs_t1_box[0].disabled = false; 
	document.setvpageform.vpage_ftabs_t1_box[1].disabled = false; 
    } 
}
function setvpage_ftabs_t5() { 
    if ( document.setvpageform.vpage_ftabs_t5.checked == false ) { 
	document.setvpageform.vpage_ftabs_t5_box[0].disabled = true; 
	document.setvpageform.vpage_ftabs_t5_box[1].disabled = true;  
    } else if ( document.setvpageform.vpage_ftabs_t5.checked == true ) { 
	document.setvpageform.vpage_ftabs_t5_box[0].disabled = false; 
	document.setvpageform.vpage_ftabs_t5_box[1].disabled = false; 
    } 
}
'; ?>

</script>
			<form id="setvpageform" name="setvpageform">
			    <fieldset>
				<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('vpagesettingsdiv'); ReverseContentDisplay('vpagesettingstxt'); changeclass_act('set9');"><span id="set9"><?php echo $this->_tpl_vars['adm_avtxt1']; ?>
</span></a></legend>
				<div id="vpagesettingstxt" style="display: block;"><?php echo $this->_tpl_vars['adm_avtxt2']; ?>
</div>
				<div id="vpagesettingsdiv" style="display: none;">
				<table cellpadding=2 cellspacing=0 border=0 align=center width="100%">
				
				    <tr>
					<td><input type="checkbox" name="vpage_fresp" checked disabled></td>
					<td><?php echo $this->_tpl_vars['adm_avtxt24']; ?>
</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="nopad">
					    <table cellpadding=2 cellspacing=0 border=0 align=left>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_fresp_box" value="c" <?php if ($this->_tpl_vars['vpage_fresp_box'] == 'c'): ?>checked<?php endif; ?>></div>
						    </td>
						    <td valign="bottom"><?php echo $this->_tpl_vars['adm_avtxt9']; ?>
</td>
						</tr>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_fresp_box" value="e" <?php if ($this->_tpl_vars['vpage_fresp_box'] == 'e'): ?>checked<?php endif; ?>></div>
						    </td>
						    <td valign="bottom"><?php echo $this->_tpl_vars['adm_avtxt10']; ?>
</td>
						</tr>
					    </table>
					</td>
				    </tr>
				    
				    <tr>
					<td><input type="checkbox" name="vpage_fcomm" checked disabled></td>
					<td><?php echo $this->_tpl_vars['adm_avtxt25']; ?>
</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="nopad">
					    <table cellpadding=2 cellspacing=0 border=0 align=left>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_fcomm_box" value="c" <?php if ($this->_tpl_vars['vpage_fcomm_box'] == 'c'): ?>checked<?php endif; ?>></div>
						    </td>
						    <td valign="bottom"><?php echo $this->_tpl_vars['adm_avtxt9']; ?>
</td>
						</tr>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_fcomm_box" value="e" <?php if ($this->_tpl_vars['vpage_fcomm_box'] == 'e'): ?>checked<?php endif; ?>></div>
						    </td>
						    <td valign="bottom"><?php echo $this->_tpl_vars['adm_avtxt10']; ?>
</td>
						</tr>
					    </table>
					</td>
				    </tr>
				    
				    <tr>
					<td width="10"><input type="checkbox" name="vpage_pcnbox" <?php if ($this->_tpl_vars['vpage_pcnbox'] == '1'): ?>checked<?php endif; ?> onclick="setvpage_pcn();"></td>
					<td><?php echo $this->_tpl_vars['adm_avtxt3']; ?>
</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="nopad">
					    <table cellpadding=2 cellspacing=0 border=0 align=left>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_pcnbox_pos" value="left" <?php if ($this->_tpl_vars['vpage_pcnbox_pos'] == 'left'): ?>checked<?php endif; ?> <?php if ($this->_tpl_vars['vpage_pcnbox'] == '0'): ?>disabled<?php endif; ?>></div>
						    </td>
						    <td valign="bottom"><?php echo $this->_tpl_vars['adm_avtxt20']; ?>
</td>
						</tr>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_pcnbox_pos" value="right" <?php if ($this->_tpl_vars['vpage_pcnbox_pos'] == 'right'): ?>checked<?php endif; ?> <?php if ($this->_tpl_vars['vpage_pcnbox'] == '0'): ?>disabled<?php endif; ?>></div>
						    </td>
						    <td valign="bottom"><?php echo $this->_tpl_vars['adm_avtxt21']; ?>
</td>
						</tr>
					    </table>
					</td>
				    </tr>
				    <tr>
					<td><input type="checkbox" name="vpage_userbox" disabled checked></td>
					<td><?php echo $this->_tpl_vars['adm_avtxt3x']; ?>
</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="nopad">
					    <table cellpadding=2 cellspacing=0 border=0 align=left>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_userdate" value="reg" <?php if ($this->_tpl_vars['vpage_userdate'] == 'reg'): ?>checked<?php endif; ?>></div>
						    </td>
						    <td valign="bottom"><?php echo $this->_tpl_vars['adm_avtxt4']; ?>
</td>
						</tr>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_userdate" value="login" <?php if ($this->_tpl_vars['vpage_userdate'] == 'login'): ?>checked<?php endif; ?>></div>
						    </td>
						    <td valign="bottom"><?php echo $this->_tpl_vars['adm_avtxt5']; ?>
</td>
						</tr>
						<tr>
						    <td><input type="checkbox" name="vpage_useronline" <?php if ($this->_tpl_vars['vpage_useronline'] == '1'): ?>checked<?php endif; ?>></td>
						    <td><?php echo $this->_tpl_vars['adm_avtxt6']; ?>
</td>
						</tr>
						<tr>
						    <td style="padding-top: 0px;"><input type="checkbox" name="vpage_userfcount" <?php if ($this->_tpl_vars['vpage_userfcount'] == '1'): ?>checked<?php endif; ?>></td>
						    <td><?php echo $this->_tpl_vars['adm_avtxt7']; ?>
</td>
						</tr>
					    </table>
					</td>
				    </tr>
				    
				    <tr>
					<td><input type="checkbox" name="nextprevbox" disabled checked></td>
					<td><?php echo $this->_tpl_vars['adm_avtxt8']; ?>
</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="nopad">
					    <table cellpadding=2 cellspacing=0 border=0 align=left>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_fdesc" value="c" <?php if ($this->_tpl_vars['vpage_fdesc'] == 'c'): ?>checked<?php endif; ?>></div>
						    </td>
						    <td valign="bottom"><?php echo $this->_tpl_vars['adm_avtxt9']; ?>
</td>
						</tr>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_fdesc" value="e" <?php if ($this->_tpl_vars['vpage_fdesc'] == 'e'): ?>checked<?php endif; ?>></div>
						    </td>
						    <td valign="bottom"><?php echo $this->_tpl_vars['adm_avtxt10']; ?>
</td>
						</tr>
					    </table>
					</td>
				    </tr>
				    
				    <tr>
					<td><input type="checkbox" name="vpage_ql" disabled checked></td>
					<td><?php echo $this->_tpl_vars['adm_avtxt26']; ?>
</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="nopad">
					    <table cellpadding=2 cellspacing=0 border=0 align=left>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_fqlist_box" value="c" <?php if ($this->_tpl_vars['vpage_fqlist_box'] == 'c'): ?>checked<?php endif; ?>></div>
						    </td>
						    <td valign="bottom"><?php echo $this->_tpl_vars['adm_avtxt9']; ?>
</td>
						</tr>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_fqlist_box" value="e" <?php if ($this->_tpl_vars['vpage_fqlist_box'] == 'e'): ?>checked<?php endif; ?>></div>
						    </td>
						    <td valign="bottom"><?php echo $this->_tpl_vars['adm_avtxt10']; ?>
</td>
						</tr>
					    </table>
					</td>
				    </tr>
				    
				    <tr>
					<td><input type="checkbox" name="vpage_pl" disabled checked></td>
					<td><?php echo $this->_tpl_vars['pr_chinfob36']; ?>
:</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="nopad">
					    <table cellpadding=2 cellspacing=0 border=0 align=left>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_fplist_box" value="c" <?php if ($this->_tpl_vars['vpage_fplist_box'] == 'c'): ?>checked<?php endif; ?>></div>
						    </td>
						    <td valign="bottom"><?php echo $this->_tpl_vars['adm_avtxt9']; ?>
</td>
						</tr>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_fplist_box" value="e" <?php if ($this->_tpl_vars['vpage_fplist_box'] == 'e'): ?>checked<?php endif; ?>></div>
						    </td>
						    <td valign="bottom"><?php echo $this->_tpl_vars['adm_avtxt10']; ?>
</td>
						</tr>
					    </table>
					</td>
				    </tr>
				    
				    <tr>
					<td><input type="checkbox" name="vpage_ftabs" <?php if ($this->_tpl_vars['vpage_ftabs'] == '1'): ?>checked<?php endif; ?> onclick="setvpage_ftabs();"></td>
					<td><?php echo $this->_tpl_vars['adm_avtxt11']; ?>
</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="nopad">
					    <table cellpadding=2 cellspacing=0 border=0 align=left>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_ftabslist" value="1" <?php if ($this->_tpl_vars['vpage_ftabslist'] == '1'): ?>checked<?php endif; ?> <?php if ($this->_tpl_vars['vpage_ftabs'] == '0'): ?>disabled<?php endif; ?>></div>
						    </td>
						    <td valign="bottom"><?php echo $this->_tpl_vars['adm_avtxt12']; ?>
</td>
						</tr>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_ftabslist" value="2" <?php if ($this->_tpl_vars['vpage_ftabslist'] == '2'): ?>checked<?php endif; ?> <?php if ($this->_tpl_vars['vpage_ftabs'] == '0'): ?>disabled<?php endif; ?>></div>
						    </td>
						    <td valign="bottom"><?php echo $this->_tpl_vars['adm_avtxt13']; ?>
</td>
						</tr>
						<tr>
						    <td><input type="checkbox" name="vpage_ftabs_t1" <?php if ($this->_tpl_vars['vpage_ftabs_t1'] == '1'): ?>checked<?php endif; ?> <?php if ($this->_tpl_vars['vpage_ftabs'] == '0'): ?>disabled<?php endif; ?> onclick="setvpage_ftabs_t1();"></td>
						    <td><?php echo $this->_tpl_vars['adm_avtxt14']; ?>
</td>
						</tr>
						<tr>
						    <td class="nopad"></td>
						    <td class="nopad">
							<table cellpadding=2 cellspacing=0 border=0 align=left>
							    <tr>
								<td>
								    <div><input type="radio" name="vpage_ftabs_t1_box" value="c" <?php if ($this->_tpl_vars['vpage_ftabs_t1_box'] == 'c'): ?>checked<?php endif; ?> <?php if ($this->_tpl_vars['vpage_ftabs_t1'] == '0'): ?>disabled<?php endif; ?>></div>
								</td>
								<td valign="bottom"><?php echo $this->_tpl_vars['adm_avtxt9']; ?>
</td>
							    </tr>
							    <tr>
								<td>
								    <div><input type="radio" name="vpage_ftabs_t1_box" value="e" <?php if ($this->_tpl_vars['vpage_ftabs_t1_box'] == 'e'): ?>checked<?php endif; ?> <?php if ($this->_tpl_vars['vpage_ftabs_t1'] == '0'): ?>disabled<?php endif; ?>></div>
								</td>
								<td valign="bottom"><?php echo $this->_tpl_vars['adm_avtxt10']; ?>
</td>
							    </tr>
							</table>
						    </td>
						</tr>
						<tr>
						    <td style="padding-top: 0px;"><input type="checkbox" name="vpage_ftabs_t5" <?php if ($this->_tpl_vars['vpage_ftabs_t5'] == '1'): ?>checked<?php endif; ?> <?php if ($this->_tpl_vars['vpage_ftabs'] == '0'): ?>disabled<?php endif; ?> onclick="setvpage_ftabs_t5();"></td>
						    <td><?php echo $this->_tpl_vars['adm_avtxt18']; ?>
</td>
						</tr>
						<tr>
						    <td class="nopad"></td>
						    <td class="nopad">
							<table cellpadding=2 cellspacing=0 border=0 align=left>
							    <tr>
								<td>
								    <div><input type="radio" name="vpage_ftabs_t5_box" value="c" <?php if ($this->_tpl_vars['vpage_ftabs_t5_box'] == 'c'): ?>checked<?php endif; ?> <?php if ($this->_tpl_vars['vpage_ftabs_t5'] == '0'): ?>disabled<?php endif; ?>></div>
								</td>
								<td valign="bottom"><?php echo $this->_tpl_vars['adm_avtxt9']; ?>
</td>
							    </tr>
							    <tr>
								<td>
								    <div><input type="radio" name="vpage_ftabs_t5_box" value="e" <?php if ($this->_tpl_vars['vpage_ftabs_t5_box'] == 'e'): ?>checked<?php endif; ?> <?php if ($this->_tpl_vars['vpage_ftabs_t5'] == '0'): ?>disabled<?php endif; ?>></div>
								</td>
								<td valign="bottom"><?php echo $this->_tpl_vars['adm_avtxt10']; ?>
</td>
							    </tr>
							</table>
						    </td>
						</tr>
					    </table>
					</td>
				    </tr>
				    <tr>
					<td><input type="checkbox" name="vpage_ftags" <?php if ($this->_tpl_vars['vpage_ftags'] == '1'): ?>checked<?php endif; ?> onclick="setvpage_tags();"></td>
					<td><?php echo $this->_tpl_vars['adm_avtxt19']; ?>
</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="nopad">
					    <table cellpadding=2 cellspacing=0 border=0 align=left>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_ftags_box" value="c" <?php if ($this->_tpl_vars['vpage_ftags_box'] == 'c'): ?>checked<?php endif; ?> <?php if ($this->_tpl_vars['vpage_ftags'] == '0'): ?>disabled<?php endif; ?>></div>
						    </td>
						    <td valign="bottom"><?php echo $this->_tpl_vars['adm_avtxt9']; ?>
</td>
						</tr>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_ftags_box" value="e" <?php if ($this->_tpl_vars['vpage_ftags_box'] == 'e'): ?>checked<?php endif; ?> <?php if ($this->_tpl_vars['vpage_ftags'] == '0'): ?>disabled<?php endif; ?>></div>
						    </td>
						    <td valign="bottom"><?php echo $this->_tpl_vars['adm_avtxt10']; ?>
</td>
						</tr>
					    </table>
					</td>
				    </tr>
				    
				    <tr>
					<td colspan="2" class="pt10" align="left">
					    <table cellpadding="2" cellspacing="0" align="left" border=0>
						<tr>
						    <td align="left" width="10"><input type="button" name="savesetvpagebtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setgensave']; ?>
" onclick="setvpage_settings();"></td>
						    <td align="left" width="300"><input type="button" name="savesetcancel" class="fb" value="<?php echo $this->_tpl_vars['adm_playcancelbtn']; ?>
" onclick="ReverseContentDisplay('vpagesettingsdiv'); ReverseContentDisplay('vpagesettingstxt'); changeclass_act('set9');"></td>
						</tr>
						<tr>
						    <td colspan="2" align="left"><div id="setvpageresp" align="left"></div></td>
						</tr>
					    </table>
					</td>
				    </tr>
				</table>
			    </fieldset>
			</form>