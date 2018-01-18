			<form id="savesitesetform">
			    <fieldset>
				<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('sitesettingsdiv'); ReverseContentDisplay('sitesettingstxt'); changeclass_act('set2');"><span id="set2">{$adm_setleg2}</span></a></legend>
				<div id="sitesettingstxt" style="display: block;" class="nopad">{$adm_setleg2txt}</div>
				<div id="sitesettingsdiv" style="display: none;">
				<table cellpadding=2 cellspacing=0 border=0 align=center width="100%">
				    <tr><td align=left class="" width="140">{$adm_setgen1}</td><td class="lp1"><input type="text" name="sitename" class="ff" size="35" value="{$site_name|escape:'html'}"></td></tr>
				    <tr><td align=left class="">{$adm_setgen61x}</td><td class="lp1"><textarea name="metatags" class="ff" rows="3" cols="33">{$meta_tags|escape:'html'}</textarea></td></tr>
				    <tr><td align=left class="">{$adm_setgen62x}</td><td class="lp1"><textarea name="metadesc" class="ff" rows="3" cols="33">{$meta_desc|escape:'html'}</textarea></td></tr>
<!--				    
				    <tr>
					<td align=left class="">{$adm_setgen24}</td>
					<td class="lp1">
					    <select name="theme" class="selbox">
					        <option name="blue" value="black" {if $site_theme eq "black"}selected{/if}>{$adm_setgen25}</option>
						<option name="black" value="blue" {if $site_theme eq "blue"}selected{/if}>{$adm_setgen26}</option>
						<option name="orange" value="orange" {if $site_theme eq "orange"}selected{/if}>{$adm_setgen27}</option>
						<option name="metube" value="metube" {if $site_theme eq "metube"}selected{/if}>{$adm_themetube}</option>
					    </select>
					</td>
				    </tr>
-->				    
				    <tr>
					<td align=left class="">{$lp_txt5}</td>
                                        <td align="left" class="lp1" width="200">
                                            <select name="lpage" class="selbox" onchange="ReverseContentDisplay('lp1'); ReverseContentDisplay('lp0');">
                                                <option value="1" {if $landing_page eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                                <option value="0" {if $landing_page eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                            </select>
                                        </td>
                                        <td width="60">
                                            <div id="lp1" {if $landing_page eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                            <div id="lp0" {if $landing_page eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16"alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                        </td>
                                    </tr>

				    <tr>
                                        <td colspan="2" style="padding: 10px 0px 0px 0px;">
                                            <table cellpadding="2" cellspacing="0" align="left" border=0>
                                                <tr>
                                                    <td align="left" width="10"><input type="button" name="savesitesetbtn" class="fb" value="{$adm_setgensave}" onclick="setsite_settings();"></td>
                                                    <td align="left" width="300"><input type="button" name="savesitesetcancel" class="fb" value="{$adm_playcancelbtn}" onclick="ReverseContentDisplay('sitesettingsdiv'); ReverseContentDisplay('sitesettingstxt'); changeclass_act('set2');"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" align="left"><div id="setsiteresp"></div></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
				</table>
				</div>
			    </fieldset>
			</form>
