			<form id="setotherform">
			<fieldset>
			<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('othersetdiv'); ReverseContentDisplay('othersettxt'); changeclass_act('set5');"><span id="set5">{$adm_setleg5}</span></a></legend>
			<div id="othersettxt" style="display: block;">{$adm_setleg5txt}</div>
			<div id="othersetdiv" style="display: none;">
			<table cellpadding=2 cellspacing=0 border=0 align=left>
			    <tr><td align=left class="" width="140">{$adm_setgen11}</td>
				<td align="left" class="lp1">
				    <select name="rss" class="selbox" onchange="ReverseContentDisplay('rss1'); ReverseContentDisplay('rss0');">
                                        <option value="1" {if $rss_feeds eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $rss_feeds eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                            	    <div id="rss1" {if $rss_feeds eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="rss0" {if $rss_feeds eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
			    <tr><td align=left class="">{$adm_setgen12}</td>
				<td align="left" class="lp1">
				    <select name="cflags" class="selbox" onchange="ReverseContentDisplay('cf1'); ReverseContentDisplay('cf0');">
                                        <option value="1" {if $country_flags eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $country_flags eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td>
                            	    <div id="cf1" {if $country_flags eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="cf0" {if $country_flags eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
			    <tr><td align=left class="">{$adm_setgen142}</td>
				<td align="left" class="lp1">
				    <select name="langbox" class="selbox" onchange="ReverseContentDisplay('lb1'); ReverseContentDisplay('lb0');">
                                        <option value="1" {if $lang_box eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $lang_box eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td>
                            	    <div id="lb1" {if $lang_box eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="lb0" {if $lang_box eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
			    <tr><td align=left class="">{$adm_setgen13}</td>
				<td align="left" class="lp1">
				    <select name="captcha" class="selbox" onchange="ReverseContentDisplay('sc1'); ReverseContentDisplay('sc0');">
                                        <option value="1" {if $signup_captcha eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $signup_captcha eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td>
                            	    <div id="sc1" {if $signup_captcha eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="sc0" {if $signup_captcha eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
                            <tr>
                        	<td align=left class="">{$adm_setgen14}</td>
                                <td align="left" class="lp1">
                                    <select name="emailver" class="selbox" onchange="ReverseContentDisplay('emv1'); ReverseContentDisplay('emv0');">
                                        <option value="1" {if $email_verification eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $email_verification eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td>
                                    <div id="emv1" {if $email_verification eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="emv0" {if $email_verification eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                            	</td>
                    	    </tr>
			    <tr><td align=left class="">{$adm_setgen29}</td>
				<td align="left" class="lp1">
				    <select name="mylinks" class="selbox" onchange="ReverseContentDisplay('ml1'); ReverseContentDisplay('ml0');">
                                        <option value="1" {if $panel_mylinks eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $panel_mylinks eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td>
                            	    <div id="ml1" {if $panel_mylinks eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="ml0" {if $panel_mylinks eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
			    <tr><td align=left class="">{$adm_setgen30}</td>
				<td align="left" class="lp1">
				    <select name="rightlinks" class="selbox" onchange="ReverseContentDisplay('rl1'); ReverseContentDisplay('rl0');">
                                        <option value="1" {if $panel_rightlinks eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $panel_rightlinks eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td>
                            	    <div id="rl1" {if $panel_rightlinks eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="rl0" {if $panel_rightlinks eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
			    <tr><td align=left class="">{$categcounts}</td>
				<td align="left" class="lp1">
				    <select name="categcounts" class="selbox" onchange="ReverseContentDisplay('cc1'); ReverseContentDisplay('cc0');">
                                        <option value="1" {if $categ_counts eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $categ_counts eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td>
                            	    <div id="cc1" {if $categ_counts eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="cc0" {if $categ_counts eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
			    <tr><td align=left class="">{$adm_chtypecount1}</td>
				<td align="left" class="lp1">
				    <select name="chancounts" class="selbox" onchange="ReverseContentDisplay('chc1'); ReverseContentDisplay('chc0');">
                                        <option value="1" {if $channel_counts eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $channel_counts eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td>
                            	    <div id="chc1" {if $channel_counts eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="chc0" {if $channel_counts eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
			    <tr><td align=left class="">{$pr_chinfob44}</td>
				<td align="left" class="lp1">
				    <select name="viewdelim" class="selbox">
                                        <option value="dott" {if $views_delim eq "dott"}selected{/if}>{$pr_chinfob45}</option>
                                        <option value="comma" {if $views_delim eq "comma"}selected{/if}>{$pr_chinfob46}</option>
                                    </select>
                                </td>
                                <td></td>
                            </tr>
                            <tr>                                                                                                                                                                       
                                <td colspan="3" style="padding: 10px 0px 0px 0px;">
                                    <table cellpadding="2" cellspacing="0" align="left" border=0>
                                        <tr>
                                            <td align="left" width="10"><input type="button" name="saveothersetbtn" class="fb" value="{$adm_setgensave}" onclick="setother_settings();"></td>
                                            <td align="left" width="300"><input type="button" name="saveothersetcancel" class="fb" value="{$adm_playcancelbtn}" onclick="ReverseContentDisplay('othersetdiv'); ReverseContentDisplay('othersettxt'); changeclass_act('set5');"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="left"><div id="setotherresp"></div></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr> 
			</table>
			</div>
			</fieldset>
			</form>
