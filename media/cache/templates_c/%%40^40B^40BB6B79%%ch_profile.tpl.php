<?php /* Smarty version 2.6.26, created on 2009-11-10 15:43:26
         compiled from _inc/chan/ch_profile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'spchar', '_inc/chan/ch_profile.tpl', 80, false),array('modifier', 'date_format', '_inc/chan/ch_profile.tpl', 88, false),array('function', 'html_select_date', '_inc/chan/ch_profile.tpl', 100, false),)), $this); ?>
<?php echo '
<script type="text/javascript">
    function disableme2() {
        var rads = document.owninfo.ch_wcomm;
        for(var i=0; i < rads.length;i++ ) {
            document.owninfo.ch_wcomm[i].disabled = true;
        }
        var rads2 = document.owninfo.ch_wcommrate;
        for(var j=0; j < rads2.length;j++ ) {
            document.owninfo.ch_wcommrate[j].disabled = true;
        }
    }
    function enableme2() {
        var rads = document.owninfo.ch_wcomm;
        for(var i=0; i < rads.length;i++ ) {
            document.owninfo.ch_wcomm[i].disabled = false;
        }
        var rads2 = document.owninfo.ch_wcommrate;
        for(var j=0; j < rads2.length;j++ ) {
            document.owninfo.ch_wcommrate[j].disabled = false;
        }
    }
    function setval_p(d) { document.getElementById(\'ch_comm_who\').value = d; }
    function setval2_p(d) { document.getElementById(\'ch_commrate\').value = d; }
</script>
'; ?>
    
<form name="owninfo" method="post" action="" enctype="multipart/form-data" id="owninfo">
<?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?><fieldset><legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('chprof_txt'); ReverseContentDisplay('chprof_div'); setclass_act2('chprof_fs');"><span id="chprof_fs"><?php echo $this->_tpl_vars['pr_chlmitem4']; ?>
</span></a></legend><?php endif; ?>
<div id="chprof_txt" style="display: <?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?>block<?php else: ?>none<?php endif; ?>;"><center><h1><?php echo $this->_tpl_vars['pr_chlmitem4']; ?>
</h1></center></div>
<div id="chprof_div" style="display: <?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?>none<?php else: ?>block<?php endif; ?>;">
    <table width="100%" border="0" cellpadding="2" cellspacing="1" align="center">
	<tr><td colspan=2 class="nopad"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "profile_password_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
    <?php if ($this->_tpl_vars['enable_channels'] == '0'): ?>
	<tr><td colspan=2><?php echo $this->_tpl_vars['pr_chinfop0']; ?>
</td></tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr>
	    <td valign="top"><?php echo $this->_tpl_vars['pr_chinfoc6']; ?>
</td>
	    <td class="nopad">
		<table cellpadding="3" cellspacing="0" border=0>
		    <tr><td><input type="radio" name="ch_comm" value="yes" <?php if ($this->_tpl_vars['uinfo'][0]['ch_comm'] == 'yes'): ?>checked<?php endif; ?> onclick="enableme2()"></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfoc7']; ?>
</td></tr>
		    <tr><td><input type="radio" name="ch_comm" value="no" <?php if ($this->_tpl_vars['uinfo'][0]['ch_comm'] == 'no'): ?>checked<?php endif; ?> onclick="disableme2()"></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfoc8']; ?>
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
		    <tr><td><input type="radio" <?php if ($this->_tpl_vars['uinfo'][0]['ch_comm'] == 'no'): ?>disabled<?php endif; ?> name="ch_wcomm" value="0" onclick="setval_p(0);" <?php if ($this->_tpl_vars['uinfo'][0]['ch_comm_who'] == '0' || $this->_tpl_vars['uinfo'][0]['ch_comm_who'] == ""): ?>checked<?php endif; ?>></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfoc10']; ?>
</td></tr>
		    <tr><td><input type="radio" <?php if ($this->_tpl_vars['uinfo'][0]['ch_comm'] == 'no'): ?>disabled<?php endif; ?> name="ch_wcomm" value="1" onclick="setval_p(1);" <?php if ($this->_tpl_vars['uinfo'][0]['ch_comm_who'] == '1'): ?>checked<?php endif; ?>></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfoc11']; ?>
</td></tr>
		    <tr><td><input type="radio" <?php if ($this->_tpl_vars['uinfo'][0]['ch_comm'] == 'no'): ?>disabled<?php endif; ?> name="ch_wcomm" value="2" onclick="setval_p(2);" <?php if ($this->_tpl_vars['uinfo'][0]['ch_comm_who'] == '2'): ?>checked<?php endif; ?>></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfoc12']; ?>
</td></tr>
		    <tr><td><input type="radio" <?php if ($this->_tpl_vars['uinfo'][0]['ch_comm'] == 'no'): ?>disabled<?php endif; ?> name="ch_wcomm" value="3" onclick="setval_p(3);" <?php if ($this->_tpl_vars['uinfo'][0]['ch_comm_who'] == '3'): ?>checked<?php endif; ?>></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfoc13']; ?>
</td></tr>
		</table>
		<div><input type="hidden" name="ch_comm_who" id="ch_comm_who" value="<?php echo $this->_tpl_vars['uinfo'][0]['ch_comm_who']; ?>
"></div>
	    </td>
	</tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr>
	    <td valign="top"><?php echo $this->_tpl_vars['up_opt16']; ?>
</td>
	    <td class="nopad">
		<table cellpadding="3" cellspacing="0" border=0>
		    <tr><td><input type="radio" <?php if ($this->_tpl_vars['uinfo'][0]['ch_comm'] == 'no'): ?>disabled<?php endif; ?> name="ch_wcommrate" value="0" onclick="setval2_p(1);" <?php if ($this->_tpl_vars['uinfo'][0]['ch_commrate'] == '1'): ?>checked<?php endif; ?>></td><td valign="bottom"><?php echo $this->_tpl_vars['up_opt17']; ?>
</td></tr>
		    <tr><td><input type="radio" <?php if ($this->_tpl_vars['uinfo'][0]['ch_comm'] == 'no'): ?>disabled<?php endif; ?> name="ch_wcommrate" value="1" onclick="setval2_p(0);" <?php if ($this->_tpl_vars['uinfo'][0]['ch_commrate'] == '0'): ?>checked<?php endif; ?>></td><td valign="bottom"><?php echo $this->_tpl_vars['up_opt18']; ?>
</td></tr>
		</table>
		<div><input type="hidden" name="ch_commrate" id="ch_commrate" value="<?php echo $this->_tpl_vars['uinfo'][0]['ch_commrate']; ?>
"></div>
	    </td>
	</tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
    <?php endif; ?>
	<tr><td colspan=2><?php echo $this->_tpl_vars['pr_chinfop1']; ?>
</td></tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr>
	    <td width="30%" valign="top"><?php echo $this->_tpl_vars['pr_chinfop2']; ?>
</td>
	    <td>
		<?php if ($this->_tpl_vars['btn'] != 'adm_members'): ?><div id="xavt"><a href="javascript:void(0)" onclick="setclass_act2('ccx'); ReverseContentDisplay('avt');"><span id="ccx"><?php echo $this->_tpl_vars['pr_chinfoc0']; ?>
</span></a></div><?php endif; ?>
		<div id="avt" style="display: <?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?>block<?php else: ?>none<?php endif; ?>;"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "profile_avatar_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
	    </td>
	</tr>
	<tr><td><?php echo $this->_tpl_vars['pr_chinfop3']; ?>
</td><td><input type="text" name="ffname" class="ff width400" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['uinfo'][0]['fname'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
"></td></tr>
	<tr><td><?php echo $this->_tpl_vars['pr_chinfop4']; ?>
</td><td><input type="text" name="flname" class="ff width400" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['uinfo'][0]['lname'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
"></td></tr>
	<tr>
	    <td align="left"><?php echo $this->_tpl_vars['mypr_infotxt10']; ?>
</td>
            <td>
                <table cellpadding="0" cellspacing="0" border=0>
        	    <tr>
        		<?php if ($this->_tpl_vars['date_selection'] == 'css'): ?>
                        <td><input type="text" readonly class="ff width175" name="bdate" value="<?php if ($this->_tpl_vars['uinfo'][0]['bdate'] == "0000-00-00"): ?><?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
<?php else: ?><?php echo $this->_tpl_vars['uinfo'][0]['bdate']; ?>
<?php endif; ?>"></td>
                        <td>&nbsp;</td>
                        <td valign="top">
                    	    <?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?>
                    		<?php if ($this->_tpl_vars['minfo'][0]['ch_type'] == 1): ?><?php $this->assign('fnr', 3); ?>
                    		<?php else: ?><?php $this->assign('fnr', 4); ?><?php endif; ?>
                    	    <?php else: ?>
                    		<?php $this->assign('fnr', 1); ?>
                    	    <?php endif; ?>
                    	    <img src="<?php echo $this->_tpl_vars['img_url']; ?>
/calendar/cal.gif" width="16" height="16" border="0" alt="<?php echo $this->_tpl_vars['adm_setdatetxt']; ?>
" title="<?php echo $this->_tpl_vars['adm_setdatetxt']; ?>
" onclick="displayCalendar(document.forms[<?php echo $this->_tpl_vars['fnr']; ?>
].bdate,'yyyy-mm-dd',this);">
                    	</td>
                    	<?php else: ?>
                    	    <td><?php echo smarty_function_html_select_date(array('prefix' => 'bd_','time' => $this->_tpl_vars['uinfo'][0]['bdate'],'start_year' => "-109",'end_year' => "+1",'display_days' => true,'all_extra' => 'class="selbox"','month_extra' => 'style="width: 113px;"','day_extra' => 'style="width: 50px;"','year_extra' => 'style="width: 65px;"'), $this);?>
</td>
                    	<?php endif; ?>
                    </tr>
                </table>
            </td>
	</tr>
	<tr>
	    <td><?php echo $this->_tpl_vars['pr_chinfop5']; ?>
</td>
	    <td>
		<select name="fgen" class="selbox" style="width: 80px;">
		    <option value=""><?php echo $this->_tpl_vars['pr_chinfop7']; ?>
</option>
		    <option value="M" <?php if ($this->_tpl_vars['uinfo'][0]['gender'] == 'M'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['pr_chinfop28']; ?>
</option>
		    <option value="F" <?php if ($this->_tpl_vars['uinfo'][0]['gender'] == 'F'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['pr_chinfop29']; ?>
</option>
		</select>
	    </td>
	</tr>
	<tr>
	    <td><?php echo $this->_tpl_vars['pr_chinfop6']; ?>
</td>
	    <td>
		<select name="frel" class="selbox" style="width: 80px;">
		    <option value=""><?php echo $this->_tpl_vars['pr_chinfop7']; ?>
</option>
		    <option value="<?php echo $this->_tpl_vars['pr_chinfop8']; ?>
" <?php if ($this->_tpl_vars['uinfo'][0]['rel_status'] == $this->_tpl_vars['pr_chinfop8']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['pr_chinfop8']; ?>
</option>
		    <option value="<?php echo $this->_tpl_vars['pr_chinfop9']; ?>
" <?php if ($this->_tpl_vars['uinfo'][0]['rel_status'] == $this->_tpl_vars['pr_chinfop9']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['pr_chinfop9']; ?>
</option>
		    <option value="<?php echo $this->_tpl_vars['pr_chinfop10']; ?>
" <?php if ($this->_tpl_vars['uinfo'][0]['rel_status'] == $this->_tpl_vars['pr_chinfop10']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['pr_chinfop10']; ?>
</option>
		</select>
	    </td>
	</tr>
	<tr>
	    <td valign="top"><?php echo $this->_tpl_vars['pr_chinfopr1']; ?>
</td>
	    <td class="nopad" valign="top">
		<table width="100%" border="0" cellpadding="2" cellspacing="1">
		    <tr>
			<td width="4%"><input type="radio" name="fstatus" value="yes" <?php if ($this->_tpl_vars['uinfo'][0]['show_status'] == 'yes'): ?>checked<?php endif; ?>></td>
			<td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfopr2']; ?>
</td>
		    </tr>
		    <tr>
			<td><input type="radio" name="fstatus" value="no" <?php if ($this->_tpl_vars['uinfo'][0]['show_status'] == 'no'): ?>checked<?php endif; ?>></td>
			<td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfopr3']; ?>
</td>
		    </tr>
		</table>
	    </td>
	</tr>
	<tr>
	    <td valign="top"><?php echo $this->_tpl_vars['pr_chinfop11']; ?>
</td>
	    <td class="nopad" valign="top">
		<table width="100%" border="0" cellpadding="2" cellspacing="1">
		    <tr>
			<td width="4%"><input type="radio" name="fage" value="yes" <?php if ($this->_tpl_vars['uinfo'][0]['show_age'] == 'yes'): ?>checked<?php endif; ?>></td>
			<td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfop12']; ?>
</td>
		    </tr>
		    <tr>
			<td><input type="radio" name="fage" value="no" <?php if ($this->_tpl_vars['uinfo'][0]['show_age'] == 'no'): ?>checked<?php endif; ?>></td>
			<td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfop13']; ?>
</td>
		    </tr>
		</table>
	    </td>
	</tr>
	<tr><td valign="top"><?php echo $this->_tpl_vars['pr_chinfop14']; ?>
</td><td><textarea name="fabout" class="ff width400" rows="7"><?php echo ((is_array($_tmp=$this->_tpl_vars['uinfo'][0]['about_me'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</textarea></td></tr>
	<tr><td><?php echo $this->_tpl_vars['pr_chinfop15']; ?>
</td><td><input type="text" name="furl" class="ff width400" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['uinfo'][0]['site'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
"></td></tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr><td colspan=2><?php echo $this->_tpl_vars['pr_chinfop16']; ?>
</td></tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr><td><?php echo $this->_tpl_vars['pr_chinfop17']; ?>
</td><td><input type="text" name="foccup" class="ff width400" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['uinfo'][0]['inf_occup'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
"></td></tr>
	<tr><td><?php echo $this->_tpl_vars['pr_chinfop18']; ?>
</td><td><input type="text" name="fcomp" class="ff width400" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['uinfo'][0]['inf_comp'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
"></td></tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr><td colspan=2><?php echo $this->_tpl_vars['pr_chinfop19']; ?>
</td></tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr><td><?php echo $this->_tpl_vars['pr_chinfop20']; ?>
</td><td><input type="text" name="fschool" class="ff width400" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['uinfo'][0]['inf_schools'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
"></td></tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr><td colspan=2><?php echo $this->_tpl_vars['pr_chinfop21']; ?>
</td></tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr><td valign="top"><?php echo $this->_tpl_vars['pr_chinfop22']; ?>
</td><td><textarea name="finteres" class="ff width400" rows="7"><?php echo ((is_array($_tmp=$this->_tpl_vars['uinfo'][0]['inf_interests'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</textarea></td></tr>
	<tr><td valign="top"><?php echo $this->_tpl_vars['pr_chinfop23']; ?>
</td><td><textarea name="ffavmov" class="ff width400" rows="7"><?php echo ((is_array($_tmp=$this->_tpl_vars['uinfo'][0]['inf_movies'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</textarea></td></tr>
	<tr><td valign="top"><?php echo $this->_tpl_vars['pr_chinfop24']; ?>
</td><td><textarea name="ffavmus" class="ff width400" rows="7"><?php echo ((is_array($_tmp=$this->_tpl_vars['uinfo'][0]['inf_music'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</textarea></td></tr>
	<tr><td valign="top"><?php echo $this->_tpl_vars['pr_chinfop25']; ?>
</td><td><textarea name="ffavbook" class="ff width400" rows="7"><?php echo ((is_array($_tmp=$this->_tpl_vars['uinfo'][0]['inf_books'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</textarea></td></tr>
	<tr>
	    <td></td>
	    <td>
		<?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?><input type="button" name="chsave_profileinfo" value="<?php echo $this->_tpl_vars['pr_chinfop37']; ?>
" class="fb" onclick="setuserinfo('chprof')"><?php else: ?><input type="submit" name="chsave_profileinfo" value="<?php echo $this->_tpl_vars['pr_chinfop37']; ?>
" class="fb"><?php endif; ?>
		<?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?><input type="hidden" name="chprof_uid" value="<?php echo $this->_tpl_vars['minfo'][0]['uid']; ?>
"><div id="chprof_resp" class="pt5"></div><?php endif; ?>
	    </td>
	</tr>
    </table>
</div>
<?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?></fieldset><?php endif; ?>
</form>