<?php /* Smarty version 2.6.26, created on 2009-11-10 15:42:46
         compiled from _inc/chan/ch_info.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'spchar', '_inc/chan/ch_info.tpl', 44, false),array('insert', 'get_chtype', '_inc/chan/ch_info.tpl', 84, false),)), $this); ?>
<script type="text/javascript">
<?php echo '
    function disableme() {
	var rads = document.cinfo.ch_wcomm;
	for(var i=0; i < rads.length;i++ ) {
	    document.cinfo.ch_wcomm[i].disabled = true;
	}
	
	var rads2 = document.cinfo.ch_wcommrate;
	for(var j=0; j < rads2.length;j++ ) {
	    document.cinfo.ch_wcommrate[j].disabled = true;
	}
    } 
    function enableme() {
	var rads = document.cinfo.ch_wcomm;
	for(var i=0; i < rads.length;i++ ) {
	    document.cinfo.ch_wcomm[i].disabled = false;
	}
	
	var rads2 = document.cinfo.ch_wcommrate;
	for(var j=0; j < rads2.length;j++ ) {
	    document.cinfo.ch_wcommrate[j].disabled = false;
	}
    }
    function setval(d) { document.getElementById(\'ch_comm_who\').value = d; }
    function setval2(d) { document.getElementById(\'ch_commrate\').value = d; }
    function swto_def() { HideContent(\'t1\'); HideContent(\'t2\'); HideContent(\'t3\'); HideContent(\'t4\'); HideContent(\'t5\'); }
    function swto_dir() { ShowContent(\'t1\'); HideContent(\'t2\'); HideContent(\'t3\'); HideContent(\'t4\'); HideContent(\'t5\'); }
    function swto_mus() { ShowContent(\'t2\'); HideContent(\'t1\'); HideContent(\'t3\'); HideContent(\'t4\'); HideContent(\'t5\'); }
    function swto_com() { ShowContent(\'t3\'); HideContent(\'t1\'); HideContent(\'t2\'); HideContent(\'t4\'); HideContent(\'t5\'); }
    function swto_gur() { ShowContent(\'t4\'); HideContent(\'t1\'); HideContent(\'t2\'); HideContent(\'t3\'); HideContent(\'t5\'); }
    function swto_rep() { ShowContent(\'t5\'); HideContent(\'t1\'); HideContent(\'t2\'); HideContent(\'t3\'); HideContent(\'t4\'); }
'; ?>
    
</script>

<form name="cinfo" method="post" action="" id="cinfo">
<?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?><fieldset><legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('chinfo_txt'); ReverseContentDisplay('chinfo_div'); setclass_act2('chinfo_fs');"><span id="chinfo_fs"><?php echo $this->_tpl_vars['pr_chlmitem1']; ?>
</span></a></legend><?php endif; ?>
<div id="chinfo_txt" style="display: <?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?>block<?php else: ?>none<?php endif; ?>;"><center><?php echo $this->_tpl_vars['pr_chinfoc24']; ?>
</center></div>
<div id="chinfo_div" style="display: <?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?>none<?php else: ?>block<?php endif; ?>;">
    <table width="100%" border="0" cellpadding="2" cellspacing="1" align="center">
	<tr><td colspan="2"><?php echo $this->_tpl_vars['pr_chinfoc24']; ?>
</td></tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr><td width="30%"><?php echo $this->_tpl_vars['pr_chinfoc1']; ?>
</td><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/user/<?php echo $this->_tpl_vars['cinfo'][0]['username']; ?>
"><?php echo $this->_tpl_vars['base_url']; ?>
/user/<?php echo $this->_tpl_vars['cinfo'][0]['username']; ?>
</a></td></tr>
	<tr><td><?php echo $this->_tpl_vars['pr_chinfoc2']; ?>
</td><td><input type="text" class="ff width400" name="ch_title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['cinfo'][0]['ch_title'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
"></td></tr>
	<tr><td valign="top"><?php echo $this->_tpl_vars['pr_chinfoc3']; ?>
</td><td><textarea class="ff width400" rows="7" name="ch_desc"><?php echo ((is_array($_tmp=$this->_tpl_vars['cinfo'][0]['ch_desc'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</textarea></td></tr>
	
	<tr><td><?php echo $this->_tpl_vars['pr_chinfoc4']; ?>
</td><td><input type="text" class="ff width400" name="ch_tags" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['cinfo'][0]['ch_tags'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
"></td></tr>
	<tr><td></td><td class="pt0"><?php echo $this->_tpl_vars['pr_chinfoc5']; ?>
</td></tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr>
	    <td valign="top"><?php echo $this->_tpl_vars['pr_chinfoc6']; ?>
</td>
	    <td class="nopad">
		<table cellpadding="3" cellspacing="0" border=0>
		    <tr><td><input type="radio" <?php if ($this->_tpl_vars['profile_comments'] == '0'): ?>disabled<?php endif; ?> name="ch_comm" value="yes" <?php if ($this->_tpl_vars['cinfo'][0]['ch_comm'] == 'yes'): ?>checked<?php endif; ?> onclick="enableme()"></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfoc7']; ?>
</td></tr>
		    <tr><td><input type="radio" <?php if ($this->_tpl_vars['profile_comments'] == '0'): ?>disabled<?php endif; ?> name="ch_comm" value="no" <?php if ($this->_tpl_vars['cinfo'][0]['ch_comm'] == 'no'): ?>checked<?php endif; ?> onclick="disableme()"></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfoc8']; ?>
</td></tr>
		</table>
	    </td>
	</tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr>
	    <td valign="top"><?php echo $this->_tpl_vars['pr_chinfoc9']; ?>
</td>
	    <td class="nopad">
		<table cellpadding="3" cellspacing="0" border=0>
		    <tr><td><input type="radio" <?php if ($this->_tpl_vars['profile_comments'] == '0'): ?>disabled<?php endif; ?> <?php if ($this->_tpl_vars['cinfo'][0]['ch_comm'] == 'no'): ?>disabled<?php endif; ?> name="ch_wcomm" value="0" onclick="setval(0);" <?php if ($this->_tpl_vars['cinfo'][0]['ch_comm_who'] == '0'): ?>checked<?php endif; ?>></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfoc10']; ?>
</td></tr>
		    <tr><td><input type="radio" <?php if ($this->_tpl_vars['profile_comments'] == '0'): ?>disabled<?php endif; ?> <?php if ($this->_tpl_vars['cinfo'][0]['ch_comm'] == 'no'): ?>disabled<?php endif; ?> name="ch_wcomm" value="1" onclick="setval(1);" <?php if ($this->_tpl_vars['cinfo'][0]['ch_comm_who'] == '1'): ?>checked<?php endif; ?>></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfoc11']; ?>
</td></tr>
		    <tr><td><input type="radio" <?php if ($this->_tpl_vars['profile_comments'] == '0'): ?>disabled<?php endif; ?> <?php if ($this->_tpl_vars['cinfo'][0]['ch_comm'] == 'no'): ?>disabled<?php endif; ?> name="ch_wcomm" value="2" onclick="setval(2);" <?php if ($this->_tpl_vars['cinfo'][0]['ch_comm_who'] == '2'): ?>checked<?php endif; ?>></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfoc12']; ?>
</td></tr>
		    <tr><td><input type="radio" <?php if ($this->_tpl_vars['profile_comments'] == '0'): ?>disabled<?php endif; ?> <?php if ($this->_tpl_vars['cinfo'][0]['ch_comm'] == 'no'): ?>disabled<?php endif; ?> name="ch_wcomm" value="3" onclick="setval(3);" <?php if ($this->_tpl_vars['cinfo'][0]['ch_comm_who'] == '3'): ?>checked<?php endif; ?>></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfoc13']; ?>
</td></tr>
		</table>
		<div><input type="hidden" name="ch_comm_who" id="ch_comm_who" value="<?php echo $this->_tpl_vars['cinfo'][0]['ch_comm_who']; ?>
"></div>
	    </td>
	</tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr>
	    <td valign="top"><?php echo $this->_tpl_vars['up_opt16']; ?>
</td>
	    <td class="nopad">
		<table cellpadding="3" cellspacing="0" border=0>
		    <tr><td><input type="radio" <?php if ($this->_tpl_vars['profile_comments'] == '0'): ?>disabled<?php endif; ?> <?php if ($this->_tpl_vars['cinfo'][0]['ch_comm'] == 'no'): ?>disabled<?php endif; ?> name="ch_wcommrate" value="0" onclick="setval2(1);" <?php if ($this->_tpl_vars['cinfo'][0]['ch_commrate'] == '1'): ?>checked<?php endif; ?>></td><td valign="bottom"><?php echo $this->_tpl_vars['up_opt17']; ?>
</td></tr>
		    <tr><td><input type="radio" <?php if ($this->_tpl_vars['profile_comments'] == '0'): ?>disabled<?php endif; ?> <?php if ($this->_tpl_vars['cinfo'][0]['ch_comm'] == 'no'): ?>disabled<?php endif; ?> name="ch_wcommrate" value="1" onclick="setval2(0);" <?php if ($this->_tpl_vars['cinfo'][0]['ch_commrate'] == '0'): ?>checked<?php endif; ?>></td><td valign="bottom"><?php echo $this->_tpl_vars['up_opt18']; ?>
</td></tr>
		</table>
		<div><input type="hidden" name="ch_commrate" id="ch_commrate" value="<?php echo $this->_tpl_vars['cinfo'][0]['ch_commrate']; ?>
"></div>
	    </td>
	</tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr><td><?php echo $this->_tpl_vars['pr_chinfoc14']; ?>
</td><td><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_chtype', 'assign' => 'chtype', 'chnr' => $this->_tpl_vars['cinfo'][0]['ch_type'])), $this); ?>
<?php echo $this->_tpl_vars['chtype']; ?>
<span class="pl20"><a href="javascript:void(0)" onclick="ReverseContentDisplay('nch'); setclass_act2('cchtype');"><span id="cchtype"><?php echo $this->_tpl_vars['pr_chinfoc15']; ?>
</span></a></span></td></tr>
	<tr>
	    <td colspan="2" align="left" class="nopad">
	    <div id="nch" style="display: none;">
		<table width="100%" border="0" cellpadding="2" cellspacing="1">
		    <tr>
			<td width="30%" valign="top" class="pt5"><?php echo $this->_tpl_vars['pr_chinfoc23']; ?>
</td>
			<td width="70%" align="left" valign="top">
			<div>
			    <select name="ch_type" class="selbox" onchange="if(this.selectedIndex == '0'){ swto_def(); } else if (this.selectedIndex == '1'){ swto_dir(); } else if (this.selectedIndex == '2'){ swto_mus(); } else if (this.selectedIndex == '3'){ swto_com(); } else if (this.selectedIndex == '4'){ swto_gur(); } else if (this.selectedIndex == '5'){ swto_rep(); } ">
				<option value="1" <?php if ($this->_tpl_vars['cinfo'][0]['ch_type'] == 1): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['pr_chinfotype1']; ?>
</option>
				<option value="2" <?php if ($this->_tpl_vars['cinfo'][0]['ch_type'] == 2): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['pr_chinfotype2']; ?>
</option>
				<option value="3" <?php if ($this->_tpl_vars['cinfo'][0]['ch_type'] == 3): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['pr_chinfotype3']; ?>
</option>
				<option value="4" <?php if ($this->_tpl_vars['cinfo'][0]['ch_type'] == 4): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['pr_chinfotype4']; ?>
</option>
				<option value="5" <?php if ($this->_tpl_vars['cinfo'][0]['ch_type'] == 5): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['pr_chinfotype5']; ?>
</option>
				<option value="6" <?php if ($this->_tpl_vars['cinfo'][0]['ch_type'] == 6): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['pr_chinfotype6']; ?>
</option>
			    </select>
			</div>
			<div id="t1" class="p5" style="display: none;"><?php echo $this->_tpl_vars['pr_chinfoc17']; ?>
</div>
			<div id="t2" class="p5" style="display: none;"><?php echo $this->_tpl_vars['pr_chinfoc18']; ?>
</div>
			<div id="t3" class="p5" style="display: none;"><?php echo $this->_tpl_vars['pr_chinfoc19']; ?>
</div>
			<div id="t4" class="p5" style="display: none;"><?php echo $this->_tpl_vars['pr_chinfoc20']; ?>
</div>
			<div id="t5" class="p5" style="display: none;"><?php echo $this->_tpl_vars['pr_chinfoc21']; ?>
</div>
			<div class="p5"><?php echo $this->_tpl_vars['pr_chinfoc16']; ?>
</div>
			</td>
		    </tr>
		</table>
	    </div>
	    </td>
	</tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr>
	    <td>
		<script type="text/javascript">
		    function checktype() {
			if ( document.cinfo.ch_type.value != "1" && document.cinfo.ch_type.value != "<?php echo $this->_tpl_vars['cinfo'][0]['ch_type']; ?>
" ) {
			    if ( "<?php echo $this->_tpl_vars['cinfo'][0]['ch_type']; ?>
" != "1" ) {
				if ( confirm ( '<?php echo $this->_tpl_vars['pr_chinfob42']; ?>
' ) ) <?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?>setuserinfo('chinfo');<?php else: ?>document.cinfo.submit();<?php endif; ?>
			    } else <?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?>setuserinfo('chinfo');<?php else: ?>document.cinfo.submit();<?php endif; ?>
			} else {
			    if ( "<?php echo $this->_tpl_vars['cinfo'][0]['ch_type']; ?>
" != "1" && document.cinfo.ch_type.value != "<?php echo $this->_tpl_vars['cinfo'][0]['ch_type']; ?>
" ) {
				if ( confirm ( '<?php echo $this->_tpl_vars['pr_chinfob42']; ?>
' ) ) <?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?>setuserinfo('chinfo');<?php else: ?>document.cinfo.submit();<?php endif; ?>
			    } else <?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?>setuserinfo('chinfo');<?php else: ?>document.cinfo.submit();<?php endif; ?>
			}
		    }
		</script>
	    </td>
	    <td>
		<input type="button" name="chsave_setup" value="<?php echo $this->_tpl_vars['pr_chinfoc22']; ?>
" class="fb" onclick="checktype();"><input type="hidden" name="chsave_submit" value="1">
		<?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?><input type="hidden" name="chinfo_uid" value="<?php echo $this->_tpl_vars['minfo'][0]['uid']; ?>
"><div id="chinfo_resp" class="pt5"></div><?php endif; ?>
	    </td>
	</tr>
    </table>
</div>
<?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?></fieldset><?php endif; ?>
</form>