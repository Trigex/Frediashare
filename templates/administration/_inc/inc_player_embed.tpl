	    <form name="inc_player_embed" method="post" action="">
	    <fieldset>
	    <legend>{$adm_vptxt9}</legend>
	    <table align="center" cellpadding="1" cellspacing="0" border=0 width="95%">
		<tr>
		    <td class="types" valign="middle" width="33%">{$adm_vptxt1}</td>
		    <td>
    			<table cellpadding=1 cellspacing=0 border=0 align=left>
    			    <tr>
                                <td align="left" class="" width="200">
                            	    <select name="eplayerskin" class="selbox">
                            		<option value="black" {if $wsetting.theme eq "black"}selected{/if}>{$adm_setgen25}</option>
                                        <option value="blue" {if $esetting.theme eq "blue"}selected{/if}>{$adm_vptxt2}</option>
                                        <option value="green" {if $esetting.theme eq "green"}selected{/if}>{$adm_vptxt3}</option>
                                        <option value="orange" {if $esetting.theme eq "orange"}selected{/if}>{$adm_vptxt4}</option>
                                        <option value="red" {if $esetting.theme eq "red"}selected{/if}>{$adm_vptxt5}</option>
                                    </select>
                                </td>
                                <td></td>
                            </tr>
                        </table>
    		    </td>
		</tr>
	    
		<tr>
		    <td class="types" valign="middle">{$adm_vpbuff} </td>
    		    <td>
			<table cellpadding=1 cellspacing=0 border=0>
			    <tr>
				<td><input type="text" name="ebtime" value="{if $smarty.request.ebtime eq ""}{$esetting.btime}{else}{$smarty.request.ebtime}{/if}" class="ff" size="5"></td>
				<td>{$adm_vpbuffsec}</td>
			    </tr>
			</table>
    		    </td>
		</tr>
		<tr>
		    <td class="types" valign="middle">{$adm_playersize} </td>
    		    <td>
			<table cellpadding=1 cellspacing=0 border=0>
			    <tr>
				<td><input type="text" name="epwidth" value="{if $smarty.request.epwidth eq ""}{$esetting.pwidth}{else}{$smarty.request.epwidth}{/if}" class="ff" size="5"></td>
				<td>{$adm_playersize_width}</td>
				<td width="25">&nbsp;</td>
				<td><input type="text" name="epheight" value="{if $smarty.request.epheight eq ""}{$esetting.pheight}{else}{$smarty.request.epheight}{/if}" class="ff" size="5"></td>
				<td>{$adm_playersize_height}</td>
			    </tr>
			</table>
    		    </td>
		</tr>
		<tr>
		    <td class="types" width="15%">{$adm_vptxt6}</td>
    		    <td>
    			<table cellpadding=1 cellspacing=0 border=0 align=left>
    			    <tr>
                                <td align="left" class="" width="200">
                            	    <select name="efullscreen" class="selbox" onchange="ReverseContentDisplay('efs1'); ReverseContentDisplay('efs0');">
                                        <option value="1" {if $esetting.fullscreen eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $esetting.fullscreen eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                                    <div id="efs1" {if $esetting.fullscreen eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="efs0" {if $esetting.fullscreen eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
                        </table>
    		    </td>
		</tr>
		
		<tr>
		    <td class="types" width="15%">{$adm_playerplayback_auto}</td>
    		    <td>
    			<table cellpadding=1 cellspacing=0 border=0 align=left>
    			    <tr>
                                <td align="left" class="" width="200">
                            	    <select name="eautoplay" class="selbox" onchange="ReverseContentDisplay('eap1'); ReverseContentDisplay('eap0');">
                                        <option value="1" {if $esetting.autoplay eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $esetting.autoplay eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                                    <div id="eap1" {if $esetting.autoplay eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="eap0" {if $esetting.autoplay eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
                        </table>
    		    </td>
		</tr>
		<tr>
    		    <td class="types">{$adm_playerplaylist}</td>
    		    <td>
			<table cellpadding=1 cellspacing=0 border=0>
			    <tr>
                                <td align="left" class="" width="200">
                            	    <select name="eplist" class="selbox">
                                        <option value="rel" {if $esetting.playlist eq "rel"}selected{/if}>{$adm_vpl1}</option>
                                        <option value="feat" {if $esetting.playlist eq "feat"}selected{/if}>{$adm_vpl2}</option>
                                        <option value="comm" {if $esetting.playlist eq "comm"}selected{/if}>{$adm_vpl3}</option>
                                        <option value="tr" {if $esetting.playlist eq "tr"}selected{/if}>{$adm_vpl4}</option>
                                        <option value="mv" {if $esetting.playlist eq "mv"}selected{/if}>{$adm_vpl5}</option>
                                    </select>
                                </td>
			    </tr>
			</table>
    		    </td>
		</tr>
		<tr>
    		    <td class="types" valign="middle">{$adm_vptxt10}</td>
    		    <td>
    			<table cellpadding=1 cellspacing=0 border=0 align=left>
    			    <tr>
                                <td align="left" class="" width="200">
                            	    <select name="epbuttons" class="selbox" onchange="ReverseContentDisplay('epb1'); ReverseContentDisplay('epb0');">
                                        <option value="1" {if $esetting.pb eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $esetting.pb eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                                    <div id="epb1" {if $esetting.pb eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="epb0" {if $esetting.pb eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
                        </table>
    		    </td>
		</tr>
		<tr>
    		    <td class="types" valign="middle">{$adm_vpembed}</td>
    		    <td>
    			<table cellpadding=1 cellspacing=0 border=0 align=left>
    			    <tr>
                                <td align="left" class="" width="200">
                            	    <select name="eembed" class="selbox" onchange="ReverseContentDisplay('eoe1'); ReverseContentDisplay('eoe0');">
                                        <option value="1" {if $esetting.embed eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $esetting.embed eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                                    <div id="eoe1" {if $esetting.embed eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="eoe0" {if $esetting.embed eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
                        </table>
    		    </td>
		</tr>
		<tr>
    		    <td class="types" valign="middle">{$adm_playershare}</td>
    		    <td>
    			<table cellpadding=1 cellspacing=0 border=0 align=left>
    			    <tr>
                                <td align="left" class="" width="200">
                            	    <select name="eshare" class="selbox" onchange="ReverseContentDisplay('eos1'); ReverseContentDisplay('eos0');">
                                        <option value="1" {if $esetting.share eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $esetting.share eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                                    <div id="eos1" {if $esetting.share eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="eos0" {if $esetting.share eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
                        </table>
    		    </td>
		</tr>
		<tr>
    		    <td class="types" valign="middle">{$adm_vpmail}</td>
    		    <td>
    			<table cellpadding=1 cellspacing=0 border=0 align=left>
    			    <tr>
                                <td align="left" class="" width="200">
                            	    <select name="email" class="selbox" onchange="ReverseContentDisplay('eom1'); ReverseContentDisplay('eom0');">
                                        <option value="1" {if $esetting.mail eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $esetting.mail eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                                    <div id="eom1" {if $esetting.mail eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="eom0" {if $esetting.mail eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
                        </table>
    		    </td>
		</tr>
		<tr>
    		    <td class="types" valign="middle">{$adm_playerrepeat}</td>
    		    <td>
    			<table cellpadding=1 cellspacing=0 border=0 align=left>
    			    <tr>
                                <td align="left" class="" width="200">
                            	    <select name="erepeat" class="selbox" onchange="ReverseContentDisplay('eor1'); ReverseContentDisplay('eor0');">
                                        <option value="1" {if $esetting.repeats eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $esetting.repeats eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                                    <div id="eor1" {if $esetting.repeats eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="eor0" {if $esetting.repeats eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
                        </table>
    		    </td>
		</tr>
		<tr>
		    <td class="types" width="15%">{$adm_vptxt7}</td>
    		    <td>
    			<table cellpadding=1 cellspacing=0 border=0 align=left>
    			    <tr>
                                <td align="left" class="" width="200">
                            	    <select name="eplogo" class="selbox" onchange="ReverseContentDisplay('epl1'); ReverseContentDisplay('epl0');">
                                        <option value="1" {if $esetting.logo eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $esetting.logo eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                                    <div id="epl1" {if $esetting.logo eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="epl0" {if $esetting.logo eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
                        </table>
    		    </td>
		</tr>
		<tr>
    		    <td class="types" valign="top" style="padding-top: 6px;">{$adm_vpads2}</td>
    		    <td>
    			<table cellpadding=1 cellspacing=0 border=0 align=left>
    			    <tr>
                                <td align="left" class="" width="200">
                            	    <select name="etextads" class="selbox" onchange="ReverseContentDisplay('eota1'); ReverseContentDisplay('eota0'); ReverseContentDisplay('etdl');">
                                        <option value="1" {if $esetting.tads eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $esetting.tads eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                                    <div id="eota1" {if $esetting.tads eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="eota0" {if $esetting.tads eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
                            <tr>
                        	<td class="nopad">
                        	    <div id="etdl" class="p5" {if $esetting.tads eq "1"}style="display: block;"{else}style="display: none;"{/if}>{$adm_vpdelay}&nbsp;<input type="text" name="eatime" value="{$esetting.atime}" class="ff" size="2">&nbsp;{$adm_vpbuffsec}</div>
                        	</td>
                            </tr>
                        </table>
    		    </td>
		</tr>
		<tr>
    		    <td class="types" valign="middle">{$adm_vpads1}</td>
    		    <td>
    			<table cellpadding=1 cellspacing=0 border=0 align=left>
    			    <tr>
                                <td align="left" class="" width="200">
                            	    <select name="evideoads" class="selbox" onchange="ReverseContentDisplay('eova1'); ReverseContentDisplay('eova0'); ReverseContentDisplay('evads');">
                                        <option value="1" {if $esetting.vads eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $esetting.vads eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                                    <div id="eova1" {if $esetting.vads eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="eova0" {if $esetting.vads eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
                        </table>
    		    </td>
		</tr>
		<tr>
		    <td></td>
    		    <td>
    			<div id="evads" style="{if $esetting.vads eq "1"}display: block;{else}display: none;{/if}">
			<table cellpadding=1 cellspacing=0 border=0>
			    <tr>
				<td>
                            	    <select name="eshowad" class="selbox">
                                        <option value="0" {if $esetting.advertisement eq "0"}selected{/if}>{$adm_playerads_beg}</option>
                                        <option value="1" {if $esetting.advertisement eq "1"}selected{/if}>{$adm_playerads_end}</option>
                                        <option value="2" {if $esetting.advertisement eq "2"}selected{/if}>{$adm_playerads_both}</option>
                                    </select>
                                </td>
			    </tr>
			</table>
			</div>
    		    </td>
		</tr>
		<tr>
		    <td align="left" colspan="2"><table cellpadding="1" cellspacing="0"><tr><td><input type="checkbox" name="embedviews" {if $inc_vplayer_count eq "1"}checked{/if}></td><td>{$plist_txt38}</td></tr></table></td>
		</tr>
		<tr>
    		    <td colspan="2"><hr></td>
		</tr>
		<tr>
		    <td colspan="2">{include file="administration/_inc/inc_player_embedcolors.tpl"}</td>
		</tr>
		<tr>
		    <td align="left"><input type="submit" name="eadd_setting" class="fb" value="{$adm_playerbtnsave}"></td>
		    <td></td>
		</tr>
		<tr>
    		    <td colspan="2"></td>
		</tr>
	    </table>
	    </fieldset>
	    </form>
