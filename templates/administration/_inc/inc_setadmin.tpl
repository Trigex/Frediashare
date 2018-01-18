			<form id="setadminform">
			    <fieldset>
				<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('adminsettingsdiv'); ReverseContentDisplay('adminsettingstxt'); changeclass_act('set1');"><span id="set1">{$adm_setleg1}</span></a></legend>
				<div id="adminsettingstxt" style="display: block;">{$adm_setleg1txt}</div>
				<div id="adminsettingsdiv" style="display: none;">
				<table cellpadding=2 cellspacing=0 border=0 align=center width="100%">
				    <tr><td align=left class="">{$adm_setgen2}</td><td class="lp1"><input type="text" name="adminmail" class="ff" value="{if $smarty.request.adminmail ne ""}{$smarty.request.adminmail}{else}{$admin_email}{/if}"></td></tr>
				    <tr><td align=left class="">{$adm_setgen3}</td><td class="lp1"><input type="text" name="adminname" class="ff" value="{if $smarty.request.adminname ne ""}{$smarty.request.adminname}{else}{$admin_name}{/if}"></td></tr>
				    <tr><td align=left class="">{$adm_setgen4}</td><td class="lp1"><input type="password" name="adminpass" class="ff" value="********" onclick="this.value='';" onKeyUp="updatePasswordStrength_new(this,'passwdRating',{ldelim} 'text':2 {rdelim});"></td></tr>
				    <tr><td align=left class="">{$adm_setgen6}</td><td class="lp1"><input type="password" name="adminpass1" class="ff" value="********" onclick="this.value='';"></td></tr>
				    <tr><td align=left class="">{$adm_setgen5}</td>
					<td class="lp1" style="padding-bottom: 5px;">
					    <div id="passwdRating">
						<div id="pass_meter" class="pass_meter" style="height: 5px;">
						    <div class="pass_meter_base" style="height: 5px;"></div>
						</div>
						<div style="display:inline;" id="ps-rating">{$passmeter6}</div>
					    </div>
					</td>
				    </tr>
				    <tr>
					<td colspan="2" class="dottbt" style="padding: 5px 0px 0px 2px;"><a href="javascript:void(0)" onclick="ReverseContentDisplay('adminpassrec'); changeclass_act('pr');"><span id="pr">{$adm_setgen43}</span></a></td>
				    </tr>
				    <tr>
					<td colspan="2" style="padding: 5px 0px 0px 0px;" >
					<div id="adminpassrec" style="display: none;">
					    <table width="100%" cellpadding="1" cellspacing="0" align="center" border=0>
						<tr>
						    <td align="left" class="">{$adm_setgen39}</td>
						    <td align="left" class="lp1">
							<select name="squestions" class="selbox" onchange="if(this.selectedIndex == '0'){ldelim}HideContent('secansbox');ShowContent('secanstxt');HideContent('secansrowcustom');{rdelim}else if (this.selectedIndex != '0' && this.selectedIndex != '6'){ldelim}HideContent('secanstxt');ShowContent('secansbox');HideContent('secansrowcustom');{rdelim}else{ldelim}HideContent('secanstxt');ShowContent('secansrowcustom');ShowContent('secansbox');{rdelim}">
							    <option value="{$adm_setgen40}" onclick="HideContent('secansbox'); ShowContent('secanstxt');  HideContent('secansrowcustom');">{$adm_setgen40}</option>
							    <option value="sec_q1" {if $security_question eq "sec_q1"}selected{/if}>{$sec_q1}</option>
							    <option value="sec_q2" {if $security_question eq "sec_q2"}selected{/if}>{$sec_q2}</option>
							    <option value="sec_q3" {if $security_question eq "sec_q3"}selected{/if}>{$sec_q3}</option>
							    <option value="sec_q4" {if $security_question eq "sec_q4"}selected{/if}>{$sec_q4}</option>
							    <option value="sec_q5" {if $security_question eq "sec_q5"}selected{/if}>{$sec_q5}</option>
							    <option value="sec_q6" {if $security_question eq "sec_q6"}selected{/if}>{$sec_q6|escape:'html'}</option>
                                            		</select>
                                            	    </td>
						</tr>
						<tr>
						    <td colspan="2">
						    <div id="secansrowcustom" {if $security_question ne "sec_q6"}style="display: none;"{else}style="display: block;"{/if}>
							<table cellpadding="1" cellspacing="0" width="100%">
							    <tr>
								<td align="left" class="">{$adm_setgen42}</td>
								<td class="lp1">
								    <input type="text" name="secq_custom" class="ff" value="{$sec_q6|escape:'html'}">
								</td>
							    </tr>
							</table>
						    </div>
						    </td>
						</tr>
						<tr>
						    <td align="left" class="">{$adm_setgen41}</td>
						    <td align="left" class="lp1">
							    <div id="secanstxt" {if $security_answer eq ""}style="display: block;"{else}style="display: none;"{/if}>{$profile_name_notset}</div>
							    <div id="secansbox" {if $security_answer eq ""}style="display: none;"{else}style="display: block;"{/if}>
								{insert name=getfield assign=secretans field=value table=configurations qfield=configurations.option qvalue=$security_answer}
								<input type="text" name="secans" class="ff" value="********" onclick="this.value='';">
							    </div>
						    </td>
						</tr>
					    </table>
					    <div class="pt5">
					    <table width="100%" cellpadding="2" cellspacing="0" align="center" border=0>
						<tr>
						    <td align=left class="" valign="top" style="padding-top: 5px;">{$adm_setgen44}</td>
						    <td align="left" style="padding-left: 4px;">
							<table cellpadding="1" cellspacing="0">
							    <tr><td><input type="checkbox" name="empass" {if $rec_pass_email eq "1"}checked{/if}></td><td>{$adm_setgen45}</td></tr>
							    <tr><td><input type="checkbox" name="seepass" {if $rec_pass_show eq "1"}checked{/if}></td><td>{$adm_setgen46}</td></tr>
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
						    <td align="left" width="10"><input type="button" name="savesetadminbtn" class="fb" value="{$adm_setgensave}" onclick="setadmin_settings();"></td>
						    <td align="left" width="300"><input type="button" name="savesetcancel" class="fb" value="{$adm_playcancelbtn}" onclick="ReverseContentDisplay('adminsettingsdiv'); ReverseContentDisplay('adminsettingstxt'); changeclass_act('set1');"></td>
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
