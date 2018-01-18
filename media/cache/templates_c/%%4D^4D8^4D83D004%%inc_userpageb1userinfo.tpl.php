<?php /* Smarty version 2.6.26, created on 2009-11-10 15:42:30
         compiled from _inc/chan/_inc/inc_userpageb1userinfo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'subs_count', '_inc/chan/_inc/inc_userpageb1userinfo.tpl', 4, false),array('insert', 'get_chtype', '_inc/chan/_inc/inc_userpageb1userinfo.tpl', 7, false),array('modifier', 'strtoupper', '_inc/chan/_inc/inc_userpageb1userinfo.tpl', 7, false),array('modifier', 'date_format', '_inc/chan/_inc/inc_userpageb1userinfo.tpl', 13, false),array('modifier', 'viewnr', '_inc/chan/_inc/inc_userpageb1userinfo.tpl', 15, false),array('modifier', 'nl2br', '_inc/chan/_inc/inc_userpageb1userinfo.tpl', 23, false),array('modifier', 'spchar', '_inc/chan/_inc/inc_userpageb1userinfo.tpl', 23, false),)), $this); ?>
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td class="tbody1" colspan="2" align="left" style="padding-right: 0px;">
				    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'subs_count', 'assign' => 'subscount', 'uid' => $this->_tpl_vars['minfo'][0]['uid'])), $this); ?>

				    <table cellpadding="0" cellspacing="0" width="100%" border=0 align="left">
					<tr>
					    <td valign="top" align="center" width="<?php echo $this->_tpl_vars['avatar_width']; ?>
"><img class="pborder" src="<?php echo $this->_tpl_vars['usrimg_url']; ?>
/<?php echo $this->_tpl_vars['minfo'][0]['photo']; ?>
" width="<?php echo $this->_tpl_vars['avatar_width']; ?>
" height="<?php echo $this->_tpl_vars['avatar_height']; ?>
" alt="<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
"><br>- <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_chtype', 'assign' => 'chtype', 'chnr' => $this->_tpl_vars['minfo'][0]['ch_type'])), $this); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['chtype'])) ? $this->_run_mod_handler('strtoupper', true, $_tmp) : strtoupper($_tmp)); ?>
 -</td>
					    <td valign="top" width="100%">
						<div style="padding-left: 5px;">
						    <div class="largetitle"><?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
 <?php if ($this->_tpl_vars['minfo'][0]['show_status'] == 'yes'): ?><span class="f10 normal">(<?php if ($this->_tpl_vars['minfo'][0]['is_logged'] == '1'): ?><?php echo $this->_tpl_vars['profile_online']; ?>
<?php else: ?><?php echo $this->_tpl_vars['profile_offline']; ?>
<?php endif; ?>)</span><?php endif; ?></div>
						    <?php if ($this->_tpl_vars['minfo2'][0]['p_style'] != ""): ?><div class="pt2"><span class="f11"><?php echo $this->_tpl_vars['uch_txt2']; ?>
</span><span class="bold"><?php echo $this->_tpl_vars['minfo2'][0]['p_style']; ?>
</span></div><?php endif; ?>
						    <?php if ($this->_tpl_vars['minfo'][0]['show_age'] == 'yes' && $this->_tpl_vars['uage'] > 0): ?><div><span class="f11"><?php echo $this->_tpl_vars['profile_age1']; ?>
</span><span class="bold"><?php echo $this->_tpl_vars['uage']; ?>
</span></div><?php endif; ?>
						    <div class=""><span class="f11"><?php echo $this->_tpl_vars['uch_txt3']; ?>
</span><span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['minfo'][0]['reg_on'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B %d, %Y") : smarty_modifier_date_format($_tmp, "%B %d, %Y")); ?>
</span></div>
						    <div class=""><span class="f11"><?php echo $this->_tpl_vars['adm_memdetails7']; ?>
</span> <span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['minfo'][0]['last_login'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B %d, %Y") : smarty_modifier_date_format($_tmp, "%B %d, %Y")); ?>
</span></div>
						    <div class=""><span class="f11"><?php echo $this->_tpl_vars['uch_thl10']; ?>
:</span> <span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['subscount'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span></div>
						    <div class=""><span class="f11"><?php echo $this->_tpl_vars['uch_txt8']; ?>
</span> <span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['minfo'][0]['ch_views'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span></div>
						</div>
					    </td>
					</tr>
					<tr>
					    <td colspan="2">
					    <?php if ($this->_tpl_vars['minfo'][0]['ch_type'] == 2 || $this->_tpl_vars['minfo'][0]['ch_type'] == 1 || $this->_tpl_vars['minfo'][0]['ch_type'] == 4 || $this->_tpl_vars['minfo'][0]['ch_type'] == 5 || $this->_tpl_vars['minfo'][0]['ch_type'] == 6): ?>
						<?php if ($this->_tpl_vars['minfo'][0]['ch_desc'] != ""): ?><div><br><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo'][0]['ch_desc'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
<br><br></div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo'][0]['fname'] != "" || $this->_tpl_vars['minfo'][0]['lname'] != ""): ?><div><span class="f11"><?php echo $this->_tpl_vars['profile_name']; ?>
</span><span class="bold"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo'][0]['fname'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo'][0]['lname'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</span></div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo'][0]['ch_type'] == 6): ?>
						    <?php if ($this->_tpl_vars['minfo2'][0]['p_infl'] != ""): ?><div class="p5"><span class="f11"><?php echo $this->_tpl_vars['pr_chinfob61']; ?>
</span> <span class="bold"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo2'][0]['p_infl'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</span></div><?php endif; ?>
						    <?php if ($this->_tpl_vars['minfo2'][0]['p_sim'] != ""): ?><div class="p1"><span class="f11"><?php echo $this->_tpl_vars['pr_chinfom40']; ?>
</span> <span class="bold"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo2'][0]['p_sim'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</span></div><?php endif; ?>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['minfo'][0]['about_me'] != ""): ?><div class="p5"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo'][0]['about_me'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo'][0]['inf_city'] != ""): ?><div class="p1"><span class="f11"><?php echo $this->_tpl_vars['pr_chinfom27']; ?>
</span><span class="bold"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo'][0]['inf_city'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</span></div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo'][0]['inf_town'] != ""): ?><div class="p1"><span class="f11"><?php echo $this->_tpl_vars['pr_chinfop31']; ?>
</span><span class="bold"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo'][0]['inf_town'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</span></div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo'][0]['from_country'] != ""): ?><div class="p1"><span class="f11"><?php echo $this->_tpl_vars['uch_txt9']; ?>
</span><span class="bold"><?php echo $this->_tpl_vars['minfo'][0]['from_country']; ?>
</span></div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo'][0]['inf_occup'] != ""): ?><div class="p1"><span class="f11"><?php echo $this->_tpl_vars['pr_chinfop17']; ?>
</span><span class="bold"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo'][0]['inf_occup'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</span></div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo'][0]['inf_comp'] != ""): ?><div class="p1"><span class="f11"><?php echo $this->_tpl_vars['pr_chinfop18']; ?>
</span><span class="bold"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo'][0]['inf_comp'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</span></div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo'][0]['inf_interests'] != ""): ?><div class="p1"><span class="f11"><?php echo $this->_tpl_vars['pr_chinfop22']; ?>
</span><span class="bold"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo'][0]['inf_interests'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</span></div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo'][0]['inf_movies'] != ""): ?><div class="p1"><span class="f11"><?php echo $this->_tpl_vars['uch_txt10']; ?>
</span><span class="bold"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo'][0]['inf_movies'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</span></div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo'][0]['inf_music'] != ""): ?><div class="p1"><span class="f11"><?php echo $this->_tpl_vars['uch_txt11']; ?>
</span><span class="bold"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo'][0]['inf_music'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</span></div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo'][0]['inf_books'] != ""): ?><div class="p1"><span class="f11"><?php echo $this->_tpl_vars['uch_txt12']; ?>
</span><span class="bold"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo'][0]['inf_books'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</span></div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo'][0]['site'] != ""): ?><div class="p1"><span class="f11"><?php echo $this->_tpl_vars['adm_memdetails14']; ?>
</span> <span class="bold"><a href="<?php echo $this->_tpl_vars['minfo'][0]['site']; ?>
" target="_blank"><?php echo $this->_tpl_vars['minfo'][0]['site']; ?>
</a></span></div><?php endif; ?>
					    <?php elseif ($this->_tpl_vars['minfo'][0]['ch_type'] == 3): ?>
						<?php if ($this->_tpl_vars['minfo'][0]['ch_desc'] != ""): ?><div class="p1"><br><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo'][0]['ch_desc'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
<br><br></div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo2'][0]['p_about'] != ""): ?><div class="p1"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo2'][0]['p_about'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
<br><br></div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo2'][0]['p_formdate'] != "0000-00-00"): ?><div class="p1"><span class="f11"><?php echo $this->_tpl_vars['pr_chinfom6']; ?>
</span> <span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['minfo2'][0]['p_formdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B %d, %Y") : smarty_modifier_date_format($_tmp, "%B %d, %Y")); ?>
</span></div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo2'][0]['p_reclabel'] != ""): ?><div class="p1"><span class="f11"><?php echo $this->_tpl_vars['pr_chinfom7']; ?>
</span> <span class="bold"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo2'][0]['p_reclabel'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</span></div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo2'][0]['p_labeltype'] != ""): ?><div class="p1"><span class="f11"><?php echo $this->_tpl_vars['pr_chinfom8']; ?>
</span> <span class="bold"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo2'][0]['p_labeltype'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</span></div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo2'][0]['p_bandmem'] != ""): ?><div class="p1"><span class="f11"><?php echo $this->_tpl_vars['pr_chinfom5']; ?>
</span> <span class="bold"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo2'][0]['p_bandmem'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</span></div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo2'][0]['p_infl'] != ""): ?><div class="p1"><span class="f11"><?php echo $this->_tpl_vars['pr_chinfob61']; ?>
</span> <span class="bold"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo2'][0]['p_infl'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</span></div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo2'][0]['p_sim'] != ""): ?><div class="p1"><span class="f11"><?php echo $this->_tpl_vars['pr_chinfom9']; ?>
</span> <span class="bold"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo2'][0]['p_sim'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</span></div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo'][0]['inf_city'] != ""): ?><div class="p1"><span class="f11"><?php echo $this->_tpl_vars['pr_chinfom27']; ?>
</span><span class="bold"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo'][0]['inf_city'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</span></div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo'][0]['inf_town'] != ""): ?><div class="p1"><span class="f11"><?php echo $this->_tpl_vars['pr_chinfop31']; ?>
</span><span class="bold"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['minfo'][0]['inf_town'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</span></div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo'][0]['from_country'] != ""): ?><div class="p1"><span class="f11"><?php echo $this->_tpl_vars['uch_txt9']; ?>
</span><span class="bold"><?php echo $this->_tpl_vars['minfo'][0]['from_country']; ?>
</span></div><?php endif; ?>
						<?php if ($this->_tpl_vars['minfo2'][0]['p_a1cover'] != "" || $this->_tpl_vars['minfo2'][0]['p_a2cover'] != "" || $this->_tpl_vars['minfo2'][0]['p_a3cover'] != ""): ?>
						    <div class="p1"><br>
							<table cellpadding="0" cellspacing="0" border=0>
							    <tr><td colspan="4"><?php echo $this->_tpl_vars['pr_chinfom30']; ?>
</td></tr>
							    <tr>
							    <?php if ($this->_tpl_vars['minfo2'][0]['p_a1cover'] != ""): ?>
								<td style="padding-left: 5px;">
								    <div class="p2" align="center"><a href="<?php echo $this->_tpl_vars['minfo2'][0]['p_a1order']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['minfo2'][0]['p_a1cover']; ?>
" alt="" width="40" height="40"></a></div>
								    <div class="p2" align="center"><a href="<?php echo $this->_tpl_vars['minfo2'][0]['p_a1order']; ?>
" target="_blank"><?php echo $this->_tpl_vars['pr_chinfom31']; ?>
</a></div>
								</td>
							    <?php endif; ?>
							    <?php if ($this->_tpl_vars['minfo2'][0]['p_a2cover'] != ""): ?>
								<td style="padding-left: 15px;">
								    <div class="p2" align="center"><a href="<?php echo $this->_tpl_vars['minfo2'][0]['p_a2order']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['minfo2'][0]['p_a2cover']; ?>
" alt="" width="40" height="40"></a></div>
								    <div class="p2" align="center"><a href="<?php echo $this->_tpl_vars['minfo2'][0]['p_a2order']; ?>
" target="_blank"><?php echo $this->_tpl_vars['pr_chinfom31']; ?>
</a></div>
								</td>
							    <?php endif; ?>
							    <?php if ($this->_tpl_vars['minfo2'][0]['p_a3cover'] != ""): ?>
								<td style="padding-left: 15px;">
								    <div class="p2" align="center"><a href="<?php echo $this->_tpl_vars['minfo2'][0]['p_a2order']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['minfo2'][0]['p_a2cover']; ?>
" alt="" width="40" height="40"></a></div>
								    <div class="p2" align="center"><a href="<?php echo $this->_tpl_vars['minfo2'][0]['p_a2order']; ?>
" target="_blank"><?php echo $this->_tpl_vars['pr_chinfom31']; ?>
</a></div>
								</td>
							    <?php endif; ?>
							    </tr>
							</table>
						    </div><br>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['minfo'][0]['site'] != ""): ?><div class="p1"><span class="f11"><?php echo $this->_tpl_vars['adm_memdetails14']; ?>
</span> <span class="bold"><a href="<?php echo $this->_tpl_vars['minfo'][0]['site']; ?>
" target="_blank"><?php echo $this->_tpl_vars['minfo'][0]['site']; ?>
</a></span></div><?php endif; ?>
					    <?php endif; ?>
					    </td>
					</tr>
					<?php if ($this->_tpl_vars['minfo'][0]['photo'] != "default.gif"): ?>
					<tr>
					    <td colspan="2" class="pt10" align="center">
						<table cellpadding="5" cellspacing="0" border="0" width="100%">
						    <tr>
							<td align="center">
							    <a href="javascript:void(0)" onclick="ReverseContentDisplay('reportdiv');"><?php echo $this->_tpl_vars['ch_reptxt1']; ?>
</a> <?php echo $this->_tpl_vars['ch_reptxt2']; ?>

							</td>
						    </tr>
						    <tr>
							<td>
							    <div id="reportdiv" style="display: none;">
							    <?php if ($_SESSION['UID'] != ""): ?>
								<div class="p1"><?php echo $this->_tpl_vars['ch_reptxt3']; ?>
</div>
								<form id="report_form">
								    <div><input type="hidden" name="ruid" value="<?php echo $this->_tpl_vars['minfo'][0]['uid']; ?>
"><input type="hidden" name="rfromuid" value="<?php if ($_SESSION['UID'] == ""): ?>0<?php else: ?><?php echo $_SESSION['UID']; ?>
<?php endif; ?>"></div>
								    <div class="pt4" align="left"><input type="button" value="<?php echo $this->_tpl_vars['up_btncontinue']; ?>
" name="continuebtn" onclick="ShowContent('respdiv1'); thisDiv('yes'); ldiv('repdiv'); report_submit('profileimage');">&nbsp;&nbsp;<input type="button" value="<?php echo $this->_tpl_vars['up_btncancel']; ?>
" name="cancelbtn" onclick="HideContent('reportdiv');"></div>
								</form>
							    <?php else: ?>
								<div class="p5" align="center"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/login?next=user/<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
"><?php echo $this->_tpl_vars['snavlogin']; ?>
</a> <?php echo $this->_tpl_vars['uch_shtxt8']; ?>
</div>
							    <?php endif; ?>
							    </div>
							</td>
						    </tr>
						    <tr>
							<td class="nopad">
							    <div id="respdiv1"></div>
							    <div id="loading_rep" style="display: none;"><table cellpadding=5 cellspacing=0 border=0><tr><td><?php echo $this->_tpl_vars['adm_setgen79']; ?>
</td></tr></table></div>
							</td>
						    </tr>
						</table>
					    </td>
					</tr>
					<?php endif; ?>
				    </table>
				</td>
			    </tr>
			</table>