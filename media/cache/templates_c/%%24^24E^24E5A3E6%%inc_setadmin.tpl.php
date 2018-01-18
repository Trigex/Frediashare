<?php /* Smarty version 2.6.26, created on 2009-11-10 15:24:21
         compiled from administration/_inc/inc_setadmin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'administration/_inc/inc_setadmin.tpl', 38, false),array('insert', 'getfield', 'administration/_inc/inc_setadmin.tpl', 61, false),)), $this); ?>
			<form id="setadminform">
			    <fieldset>
				<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('adminsettingsdiv'); ReverseContentDisplay('adminsettingstxt'); changeclass_act('set1');"><span id="set1"><?php echo $this->_tpl_vars['adm_setleg1']; ?>
</span></a></legend>
				<div id="adminsettingstxt" style="display: block;"><?php echo $this->_tpl_vars['adm_setleg1txt']; ?>
</div>
				<div id="adminsettingsdiv" style="display: none;">
				<table cellpadding=2 cellspacing=0 border=0 align=center width="100%">
				    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen2']; ?>
</td><td class="lp1"><input type="text" name="adminmail" class="ff" value="<?php if ($_REQUEST['adminmail'] != ""): ?><?php echo $_REQUEST['adminmail']; ?>
<?php else: ?><?php echo $this->_tpl_vars['admin_email']; ?>
<?php endif; ?>"></td></tr>
				    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen3']; ?>
</td><td class="lp1"><input type="text" name="adminname" class="ff" value="<?php if ($_REQUEST['adminname'] != ""): ?><?php echo $_REQUEST['adminname']; ?>
<?php else: ?><?php echo $this->_tpl_vars['admin_name']; ?>
<?php endif; ?>"></td></tr>
				    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen4']; ?>
</td><td class="lp1"><input type="password" name="adminpass" class="ff" value="********" onclick="this.value='';" onKeyUp="updatePasswordStrength_new(this,'passwdRating',{ 'text':2 });"></td></tr>
				    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen6']; ?>
</td><td class="lp1"><input type="password" name="adminpass1" class="ff" value="********" onclick="this.value='';"></td></tr>
				    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen5']; ?>
</td>
					<td class="lp1" style="padding-bottom: 5px;">
					    <div id="passwdRating">
						<div id="pass_meter" class="pass_meter" style="height: 5px;">
						    <div class="pass_meter_base" style="height: 5px;"></div>
						</div>
						<div style="display:inline;" id="ps-rating"><?php echo $this->_tpl_vars['passmeter6']; ?>
</div>
					    </div>
					</td>
				    </tr>
				    <tr>
					<td colspan="2" class="dottbt" style="padding: 5px 0px 0px 2px;"><a href="javascript:void(0)" onclick="ReverseContentDisplay('adminpassrec'); changeclass_act('pr');"><span id="pr"><?php echo $this->_tpl_vars['adm_setgen43']; ?>
</span></a></td>
				    </tr>
				    <tr>
					<td colspan="2" style="padding: 5px 0px 0px 0px;" >
					<div id="adminpassrec" style="display: none;">
					    <table width="100%" cellpadding="1" cellspacing="0" align="center" border=0>
						<tr>
						    <td align="left" class=""><?php echo $this->_tpl_vars['adm_setgen39']; ?>
</td>
						    <td align="left" class="lp1">
							<select name="squestions" class="selbox" onchange="if(this.selectedIndex == '0'){HideContent('secansbox');ShowContent('secanstxt');HideContent('secansrowcustom');}else if (this.selectedIndex != '0' && this.selectedIndex != '6'){HideContent('secanstxt');ShowContent('secansbox');HideContent('secansrowcustom');}else{HideContent('secanstxt');ShowContent('secansrowcustom');ShowContent('secansbox');}">
							    <option value="<?php echo $this->_tpl_vars['adm_setgen40']; ?>
" onclick="HideContent('secansbox'); ShowContent('secanstxt');  HideContent('secansrowcustom');"><?php echo $this->_tpl_vars['adm_setgen40']; ?>
</option>
							    <option value="sec_q1" <?php if ($this->_tpl_vars['security_question'] == 'sec_q1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['sec_q1']; ?>
</option>
							    <option value="sec_q2" <?php if ($this->_tpl_vars['security_question'] == 'sec_q2'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['sec_q2']; ?>
</option>
							    <option value="sec_q3" <?php if ($this->_tpl_vars['security_question'] == 'sec_q3'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['sec_q3']; ?>
</option>
							    <option value="sec_q4" <?php if ($this->_tpl_vars['security_question'] == 'sec_q4'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['sec_q4']; ?>
</option>
							    <option value="sec_q5" <?php if ($this->_tpl_vars['security_question'] == 'sec_q5'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['sec_q5']; ?>
</option>
							    <option value="sec_q6" <?php if ($this->_tpl_vars['security_question'] == 'sec_q6'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['sec_q6'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option>
                                            		</select>
                                            	    </td>
						</tr>
						<tr>
						    <td colspan="2">
						    <div id="secansrowcustom" <?php if ($this->_tpl_vars['security_question'] != 'sec_q6'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>>
							<table cellpadding="1" cellspacing="0" width="100%">
							    <tr>
								<td align="left" class=""><?php echo $this->_tpl_vars['adm_setgen42']; ?>
</td>
								<td class="lp1">
								    <input type="text" name="secq_custom" class="ff" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sec_q6'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
								</td>
							    </tr>
							</table>
						    </div>
						    </td>
						</tr>
						<tr>
						    <td align="left" class=""><?php echo $this->_tpl_vars['adm_setgen41']; ?>
</td>
						    <td align="left" class="lp1">
							    <div id="secanstxt" <?php if ($this->_tpl_vars['security_answer'] == ""): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><?php echo $this->_tpl_vars['profile_name_notset']; ?>
</div>
							    <div id="secansbox" <?php if ($this->_tpl_vars['security_answer'] == ""): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>>
								<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'secretans', 'field' => 'value', 'table' => 'configurations', 'qfield' => "configurations.option", 'qvalue' => $this->_tpl_vars['security_answer'])), $this); ?>

								<input type="text" name="secans" class="ff" value="********" onclick="this.value='';">
							    </div>
						    </td>
						</tr>
					    </table>
					    <div class="pt5">
					    <table width="100%" cellpadding="2" cellspacing="0" align="center" border=0>
						<tr>
						    <td align=left class="" valign="top" style="padding-top: 5px;"><?php echo $this->_tpl_vars['adm_setgen44']; ?>
</td>
						    <td align="left" style="padding-left: 4px;">
							<table cellpadding="1" cellspacing="0">
							    <tr><td><input type="checkbox" name="empass" <?php if ($this->_tpl_vars['rec_pass_email'] == '1'): ?>checked<?php endif; ?>></td><td><?php echo $this->_tpl_vars['adm_setgen45']; ?>
</td></tr>
							    <tr><td><input type="checkbox" name="seepass" <?php if ($this->_tpl_vars['rec_pass_show'] == '1'): ?>checked<?php endif; ?>></td><td><?php echo $this->_tpl_vars['adm_setgen46']; ?>
</td></tr>
							</table>
						    </td>
						</tr>
					    </table>
					    </div>
					</div>
					</td>
				    </tr>
				    <tr>
					<td colspan="2" class="pt10" align="left">
					    <table cellpadding="2" cellspacing="0" align="left" border=0>
						<tr>
						    <td align="left" width="10"><input type="button" name="savesetadminbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setgensave']; ?>
" onclick="setadmin_settings();"></td>
						    <td align="left" width="300"><input type="button" name="savesetcancel" class="fb" value="<?php echo $this->_tpl_vars['adm_playcancelbtn']; ?>
" onclick="ReverseContentDisplay('adminsettingsdiv'); ReverseContentDisplay('adminsettingstxt'); changeclass_act('set1');"></td>
						</tr>
						<tr>
						    <td colspan="2" align="left"><div id="setadminresp" align="left"></div></td>
						</tr>
					    </table>
					</td>
				    </tr>
				</table>
			    </fieldset>
			</form>