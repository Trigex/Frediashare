<?php /* Smarty version 2.6.26, created on 2009-11-10 15:24:21
         compiled from administration/_inc/inc_setemailset.tpl */ ?>
			<form id="setmailform">
			    <fieldset>
				<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('emailnotsettingsdiv'); ReverseContentDisplay('emailnotsettingstxt'); changeclass_act('set6');"><span id="set6"><?php echo $this->_tpl_vars['adm_setleg8']; ?>
</span></a></legend>
				<div id="emailnotsettingstxt" style="display: block;" class="nopad"><?php echo $this->_tpl_vars['adm_setleg8txt']; ?>
</div>
				<div id="emailnotsettingsdiv" style="display: none;">
				<table cellpadding=2 cellspacing=0 border=0 align=left>
				    <tr>
					<td align=left class="" width="140"><?php echo $this->_tpl_vars['adm_setgen60']; ?>
</td>
					<td class="lp1">
					    <select name="mailer" class="selbox" onchange="if (this.selectedIndex == '0') { HideContent('sendmaildiv'); HideContent('smtpdiv'); } else if (this.selectedIndex == '1') { HideContent('smtpdiv'); ShowContent('sendmaildiv');  } else if (this.selectedIndex == '2') { HideContent('sendmaildiv'); ShowContent('smtpdiv'); }">
                                    		<option value="mail_php" <?php if ($this->_tpl_vars['mail_option'] == 'mail_php'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgen61']; ?>
</option>
                                    		<option value="mail_sendmail" <?php if ($this->_tpl_vars['mail_option'] == 'mail_sendmail'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgen62']; ?>
</option>
                                    		<option value="mail_smtp" <?php if ($this->_tpl_vars['mail_option'] == 'mail_smtp'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgen63']; ?>
</option>
                                	    </select>
					</td>
					<td></td>
				    </tr>
				    <tr>
					<td colspan="3" class="nopad">
					<div id="sendmaildiv" <?php if ($this->_tpl_vars['mail_option'] == 'mail_sendmail'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>>
					    <table cellpadding="2" cellspacing="0" align="left" border=0>
						<tr>
						    <td align=left class="" width="140"><?php echo $this->_tpl_vars['adm_setgen64']; ?>
</td>
						    <td class="lp1"><input type="text" name="smpath" class="ff" value="<?php echo $this->_tpl_vars['mail_pathsendmail']; ?>
" size="35"></td>
						</tr>
					    </table>
					</div>
					<div id="smtpdiv" <?php if ($this->_tpl_vars['mail_option'] == 'mail_smtp'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>>
					    <table cellpadding="2" cellspacing="0" align="left" border=0>
						<tr>
						    <td align=left class="" width="140"><?php echo $this->_tpl_vars['adm_setgen65']; ?>
</td>
						    <td class="lp1"><input type="text" name="smserver" class="ff" value="<?php echo $this->_tpl_vars['mail_smtpserver']; ?>
" size="35"></td>
						</tr>
						<tr>
						    <td align=left><?php echo $this->_tpl_vars['adm_setgen66']; ?>
</td>
						    <td class="lp1"><input type="text" name="smport" class="ff" value="<?php echo $this->_tpl_vars['mail_smtp_port']; ?>
" size="35"></td>
						</tr>
						<tr>
						    <td align=left><?php echo $this->_tpl_vars['adm_setgen67']; ?>
</td>
						    <td class="lp1">
						    <select name="smauth" class="selbox" onchange="ReverseContentDisplay('smtpauthdiv');">
							<option value="1" <?php if ($this->_tpl_vars['mail_smtpauth'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
							<option value="0" <?php if ($this->_tpl_vars['mail_smtpauth'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
						    </select>
						    </td>
						</tr>
						<tr>
						    <td colspan="2" class="nopad">
						    <div id="smtpauthdiv" <?php if ($this->_tpl_vars['mail_smtpauth'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>>
							<table cellpadding="2" cellspacing="0" align="left" border=0>
							    <tr>
								<td align=left class="" width="140"><?php echo $this->_tpl_vars['adm_setgen68']; ?>
</td>
								<td class="lp1"><input type="text" name="smuser" class="ff" value="<?php echo $this->_tpl_vars['mail_smtpuser']; ?>
" size="35"></td>
							    </tr>
							    <tr>
								<td align=left><?php echo $this->_tpl_vars['adm_setgen69']; ?>
</td>
								<td class="lp1"><input type="password" name="smpass" class="ff" value="********" size="35" onclick="this.value='';"></td>
							    </tr>
							</table>
						    </div>
						    </td>
						</tr>
						<tr>
						    <td align=left><?php echo $this->_tpl_vars['adm_setgen74']; ?>
</td>
						    <td class="lp1"><input type="text" name="smfrommail" class="ff" value="<?php echo $this->_tpl_vars['mail_smtpfromemail']; ?>
" size="35"></td>
						</tr>
						<tr>
						    <td align=left><?php echo $this->_tpl_vars['adm_setgen75']; ?>
</td>
						    <td class="lp1"><input type="text" name="smfromname" class="ff" value="<?php echo $this->_tpl_vars['mail_smtpfromname']; ?>
" size="35"></td>
						</tr>
						<tr>
						    <td align=left><?php echo $this->_tpl_vars['adm_setgen70']; ?>
</td>
						    <td class="lp1">
							<select name="smsecure" class="selbox">
							    <option value="" <?php if ($this->_tpl_vars['mail_smtpsecure'] == ""): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgen71']; ?>
</option>
							    <option value="tls" <?php if ($this->_tpl_vars['mail_smtpsecure'] == 'tls'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgen73']; ?>
</option>
							    <option value="ssl" <?php if ($this->_tpl_vars['mail_smtpsecure'] == 'ssl'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgen72']; ?>
</option>
							</select>
						    </td>
						</tr>
						<tr>
						    <td></td>
						    <td class="lp1"><?php echo $this->_tpl_vars['adm_setgen76']; ?>
</td>
						</tr>
						<tr>
						    <td align=left><?php echo $this->_tpl_vars['adm_emtxt1']; ?>
</td>
						    <td class="lp1"><input type="text" style="width: 30px;" name="emph" class="ff" value="<?php echo $this->_tpl_vars['emails_per_hour']; ?>
" size="35"></td>
						</tr>
						<tr>
						    <td></td>
						    <td class="lp1"><?php echo $this->_tpl_vars['adm_emtxt2']; ?>
</td>
						</tr>
					    </table>
					</div>
					</td>
				    </tr>
				    <tr>
					<td colspan="3"><hr></td>
				    </tr>
				    <tr>
					<td colspan="3" class="nopad" style="padding-top: 10px;">
					    <table cellpadding="2" cellspacing="0" align="left" border=0>
				    <tr>
					<td width="5"></td>
					<td class="" style="padding-top: 1px;" valign="top" align="right"><input type="checkbox" name="not1" <?php if ($this->_tpl_vars['mail_not1'] == '1'): ?>checked<?php endif; ?>></td>
					<td class=""><?php echo $this->_tpl_vars['adm_setgen55']; ?>
</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="" style="padding-top: 1px;" valign="top" align="right"><input type="checkbox" name="not2" <?php if ($this->_tpl_vars['mail_not2'] == '1'): ?>checked<?php endif; ?>></td>
					<td class=""><?php echo $this->_tpl_vars['adm_setgen56']; ?>
</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="" style="padding-top: 1px;" valign="top" align="right"><input type="checkbox" name="not3" <?php if ($this->_tpl_vars['mail_not3'] == '1'): ?>checked<?php endif; ?>></td>
					<td class=""><?php echo $this->_tpl_vars['adm_setgen57']; ?>
</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="" style="padding-top: 1px;" valign="top" align="right"><input type="checkbox" name="not7" <?php if ($this->_tpl_vars['subscribe_files_not'] == '1'): ?>checked<?php endif; ?>></td>
					<td class=""><?php echo $this->_tpl_vars['adm_setgen61xx']; ?>
</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="" style="padding-top: 1px;" valign="top" align="right"><input type="checkbox" name="not8" <?php if ($this->_tpl_vars['file_response_not'] == '1'): ?>checked<?php endif; ?>></td>
					<td class=""><?php echo $this->_tpl_vars['fresp_txt31']; ?>
</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="" style="padding-top: 1px;" valign="top" align="right"><input type="checkbox" name="not4" <?php if ($this->_tpl_vars['mail_not4'] == '1'): ?>checked<?php endif; ?>></td>
					<td class=""><?php echo $this->_tpl_vars['adm_setgen58']; ?>
</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="" style="padding-top: 1px;" valign="top" align="right"><input type="checkbox" name="not5" <?php if ($this->_tpl_vars['mail_not5'] == '1'): ?>checked<?php endif; ?>></td>
					<td class=""><?php echo $this->_tpl_vars['adm_setgen59']; ?>
</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="" style="padding-top: 1px;" valign="top" align="right"><input type="checkbox" name="not6" <?php if ($this->_tpl_vars['mail_not6'] == '1'): ?>checked<?php endif; ?>></td>
					<td class=""><?php echo $this->_tpl_vars['adm_setgen60x']; ?>
</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="" style="padding-top: 1px;" valign="top" align="right"><input type="checkbox" name="not_ch" <?php if ($this->_tpl_vars['mail_not_ch'] == '1'): ?>checked<?php endif; ?>></td>
					<td class=""><?php echo $this->_tpl_vars['adm_notiftxt1']; ?>
</td>
				    </tr>
					    </table>
					</td>
				    </tr>
				    <tr>
                                        <td colspan="3" style="padding: 10px 0px 0px 0px;">
                                            <table cellpadding="2" cellspacing="0" align="left" border=0>
                                                <tr>
                                                    <td align="left" width="10"><input type="button" name="savemailsetbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setgensave']; ?>
" onclick="setemail_settings();"></td>
                                                    <td align="left" width="300"><input type="button" name="savemailsetcancel" class="fb" value="<?php echo $this->_tpl_vars['adm_playcancelbtn']; ?>
" onclick="ReverseContentDisplay('emailnotsettingsdiv'); ReverseContentDisplay('emailnotsettingstxt'); changeclass_act('set6');"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" align="left"><div id="setmailresp"></div></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
				</table>
				</div>
			    </fieldset>
			</form>