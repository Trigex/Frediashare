			<form id="setmailform">
			    <fieldset>
				<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('emailnotsettingsdiv'); ReverseContentDisplay('emailnotsettingstxt'); changeclass_act('set6');"><span id="set6">{$adm_setleg8}</span></a></legend>
				<div id="emailnotsettingstxt" style="display: block;" class="nopad">{$adm_setleg8txt}</div>
				<div id="emailnotsettingsdiv" style="display: none;">
				<table cellpadding=2 cellspacing=0 border=0 align=left>
				    <tr>
					<td align=left class="" width="140">{$adm_setgen60}</td>
					<td class="lp1">
					    <select name="mailer" class="selbox" onchange="if (this.selectedIndex == '0') {ldelim} HideContent('sendmaildiv'); HideContent('smtpdiv'); {rdelim} else if (this.selectedIndex == '1') {ldelim} HideContent('smtpdiv'); ShowContent('sendmaildiv');  {rdelim} else if (this.selectedIndex == '2') {ldelim} HideContent('sendmaildiv'); ShowContent('smtpdiv'); {rdelim}">
                                    		<option value="mail_php" {if $mail_option eq "mail_php"}selected{/if}>{$adm_setgen61}</option>
                                    		<option value="mail_sendmail" {if $mail_option eq "mail_sendmail"}selected{/if}>{$adm_setgen62}</option>
                                    		<option value="mail_smtp" {if $mail_option eq "mail_smtp"}selected{/if}>{$adm_setgen63}</option>
                                	    </select>
					</td>
					<td></td>
				    </tr>
				    <tr>
					<td colspan="3" class="nopad">
					<div id="sendmaildiv" {if $mail_option eq "mail_sendmail"}style="display: block;"{else}style="display: none;"{/if}>
					    <table cellpadding="2" cellspacing="0" align="left" border=0>
						<tr>
						    <td align=left class="" width="140">{$adm_setgen64}</td>
						    <td class="lp1"><input type="text" name="smpath" class="ff" value="{$mail_pathsendmail}" size="35"></td>
						</tr>
					    </table>
					</div>
					<div id="smtpdiv" {if $mail_option eq "mail_smtp"}style="display: block;"{else}style="display: none;"{/if}>
					    <table cellpadding="2" cellspacing="0" align="left" border=0>
						<tr>
						    <td align=left class="" width="140">{$adm_setgen65}</td>
						    <td class="lp1"><input type="text" name="smserver" class="ff" value="{$mail_smtpserver}" size="35"></td>
						</tr>
						<tr>
						    <td align=left>{$adm_setgen66}</td>
						    <td class="lp1"><input type="text" name="smport" class="ff" value="{$mail_smtp_port}" size="35"></td>
						</tr>
						<tr>
						    <td align=left>{$adm_setgen67}</td>
						    <td class="lp1">
						    <select name="smauth" class="selbox" onchange="ReverseContentDisplay('smtpauthdiv');">
							<option value="1" {if $mail_smtpauth eq "1"}selected{/if}>{$adm_setgenenabled}</option>
							<option value="0" {if $mail_smtpauth eq "0"}selected{/if}>{$adm_setgendisabled}</option>
						    </select>
						    </td>
						</tr>
						<tr>
						    <td colspan="2" class="nopad">
						    <div id="smtpauthdiv" {if $mail_smtpauth eq "1"}style="display: block;"{else}style="display: none;"{/if}>
							<table cellpadding="2" cellspacing="0" align="left" border=0>
							    <tr>
								<td align=left class="" width="140">{$adm_setgen68}</td>
								<td class="lp1"><input type="text" name="smuser" class="ff" value="{$mail_smtpuser}" size="35"></td>
							    </tr>
							    <tr>
								<td align=left>{$adm_setgen69}</td>
								<td class="lp1"><input type="password" name="smpass" class="ff" value="********" size="35" onclick="this.value='';"></td>
							    </tr>
							</table>
						    </div>
						    </td>
						</tr>
						<tr>
						    <td align=left>{$adm_setgen74}</td>
						    <td class="lp1"><input type="text" name="smfrommail" class="ff" value="{$mail_smtpfromemail}" size="35"></td>
						</tr>
						<tr>
						    <td align=left>{$adm_setgen75}</td>
						    <td class="lp1"><input type="text" name="smfromname" class="ff" value="{$mail_smtpfromname}" size="35"></td>
						</tr>
						<tr>
						    <td align=left>{$adm_setgen70}</td>
						    <td class="lp1">
							<select name="smsecure" class="selbox">
							    <option value="" {if $mail_smtpsecure eq ""}selected{/if}>{$adm_setgen71}</option>
							    <option value="tls" {if $mail_smtpsecure eq "tls"}selected{/if}>{$adm_setgen73}</option>
							    <option value="ssl" {if $mail_smtpsecure eq "ssl"}selected{/if}>{$adm_setgen72}</option>
							</select>
						    </td>
						</tr>
						<tr>
						    <td></td>
						    <td class="lp1">{$adm_setgen76}</td>
						</tr>
						<tr>
						    <td align=left>{$adm_emtxt1}</td>
						    <td class="lp1"><input type="text" style="width: 30px;" name="emph" class="ff" value="{$emails_per_hour}" size="35"></td>
						</tr>
						<tr>
						    <td></td>
						    <td class="lp1">{$adm_emtxt2}</td>
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
					<td class="" style="padding-top: 1px;" valign="top" align="right"><input type="checkbox" name="not1" {if $mail_not1 eq "1"}checked{/if}></td>
					<td class="">{$adm_setgen55}</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="" style="padding-top: 1px;" valign="top" align="right"><input type="checkbox" name="not2" {if $mail_not2 eq "1"}checked{/if}></td>
					<td class="">{$adm_setgen56}</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="" style="padding-top: 1px;" valign="top" align="right"><input type="checkbox" name="not3" {if $mail_not3 eq "1"}checked{/if}></td>
					<td class="">{$adm_setgen57}</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="" style="padding-top: 1px;" valign="top" align="right"><input type="checkbox" name="not7" {if $subscribe_files_not eq "1"}checked{/if}></td>
					<td class="">{$adm_setgen61xx}</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="" style="padding-top: 1px;" valign="top" align="right"><input type="checkbox" name="not8" {if $file_response_not eq "1"}checked{/if}></td>
					<td class="">{$fresp_txt31}</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="" style="padding-top: 1px;" valign="top" align="right"><input type="checkbox" name="not4" {if $mail_not4 eq "1"}checked{/if}></td>
					<td class="">{$adm_setgen58}</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="" style="padding-top: 1px;" valign="top" align="right"><input type="checkbox" name="not5" {if $mail_not5 eq "1"}checked{/if}></td>
					<td class="">{$adm_setgen59}</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="" style="padding-top: 1px;" valign="top" align="right"><input type="checkbox" name="not6" {if $mail_not6 eq "1"}checked{/if}></td>
					<td class="">{$adm_setgen60x}</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="" style="padding-top: 1px;" valign="top" align="right"><input type="checkbox" name="not_ch" {if $mail_not_ch eq "1"}checked{/if}></td>
					<td class="">{$adm_notiftxt1}</td>
				    </tr>
					    </table>
					</td>
				    </tr>
				    <tr>
                                        <td colspan="3" style="padding: 10px 0px 0px 0px;">
                                            <table cellpadding="2" cellspacing="0" align="left" border=0>
                                                <tr>
                                                    <td align="left" width="10"><input type="button" name="savemailsetbtn" class="fb" value="{$adm_setgensave}" onclick="setemail_settings();"></td>
                                                    <td align="left" width="300"><input type="button" name="savemailsetcancel" class="fb" value="{$adm_playcancelbtn}" onclick="ReverseContentDisplay('emailnotsettingsdiv'); ReverseContentDisplay('emailnotsettingstxt'); changeclass_act('set6');"></td>
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
