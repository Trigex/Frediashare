			<form id="setrecoverform">
			<fieldset>
			<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('recoversetdiv'); ReverseContentDisplay('recoversettxt'); changeclass_act('sys7');"><span id="sys7">{$passrecset1}</span></a></legend>
			<div id="recoversettxt" style="display: block;">{$passrecset3}</div>
			<div id="recoversetdiv" style="display: none;">
			<table cellpadding=2 cellspacing=0 border=0 align=left>
			    <tr><td align=left class="" width="140">{$passrecset2}</td>
				<td align="left" class="lp1">
				    <select name="urec" class="selbox" onchange="ReverseContentDisplay('ur1'); ReverseContentDisplay('ur0');">
                                        <option value="1" {if $username_recovery eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $username_recovery eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                            	    <div id="ur1" {if $username_recovery eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="ur0" {if $username_recovery eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
                            
			    <tr><td align=left class="">{$passrecset4}</td>
				<td align="left" class="lp1">
				    <select name="prec" class="selbox" onchange="ReverseContentDisplay('pr1'); ReverseContentDisplay('pr0'); if(this.selectedIndex == '1'){ldelim}HideContent('linkdurdiv');{rdelim}else{ldelim}ShowContent('linkdurdiv');{rdelim}">
                                        <option value="1" {if $password_recovery eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $password_recovery eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                            	    <div id="pr1" {if $password_recovery eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="pr0" {if $password_recovery eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
                            
                            <tr>
                        	<td colspan="3">
                        	<div id="linkdurdiv" {if $password_recovery eq "0"}style="display: none;"{else}style="display: block;"{/if};">
                        	    <table cellpadding="2" cellspacing="0" align="left" border=0 width="100%">
                        		<tr>
                        		    <td width="140">{$passrecset5}</td>
                        		    <td><input type="text" style="width: 30px;" name="linkdur" class="ff" size="3" value="{$recoverylinktime}">{$passrecset6}</td>
                        		</tr>
                        		<tr>
                        		    <td>{$passrecset8}</td>
                        		    <td><input type="checkbox" name="linktime" value="1" {if $recoverytimer eq "1"}checked{/if}></td>
                        		</tr>
                        	    </table>
                        	</div>
                        	</td>
                            </tr>
                            
                            <tr>
                                <td colspan="3" style="padding: 10px 0px 0px 0px;">
                                    <table cellpadding="2" cellspacing="0" align="left" border=0>
                                        <tr>
                                            <td align="left" width="10"><input type="button" name="saverecbtn" class="fb" value="{$adm_setgensave}" onclick="if ( document.forms.setrecoverform.linkdur.value > {$recoverylinktime} ) {ldelim}if ( confirm('{$passrecset9}') ) {ldelim}setrecovery_settings();{rdelim}{rdelim} else {ldelim}setrecovery_settings();{rdelim}"></td>
                                            <td align="left" width="300"><input type="button" name="savereccancel" class="fb" value="{$adm_playcancelbtn}" onclick="ReverseContentDisplay('recoversetdiv'); ReverseContentDisplay('recoversettxt'); changeclass_act('sys7');"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="left"><div id="filerecresp"></div></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
			</table>
			</div>
			</fieldset>
			</form>
