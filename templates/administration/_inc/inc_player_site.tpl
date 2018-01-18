	    <form name="inc_player_site" method="post" action="" enctype="multipart/form-data">
	    <fieldset>
	    <legend>{$adm_vptxt8}</legend>
	    <table align="center" cellpadding="1" cellspacing="0" border=0 width="95%">
		<tr>
		    <td class="types" valign="middle" width="33%">{$adm_vptxt1}</td>
		    <td>
    			<table cellpadding=1 cellspacing=0 border=0 align=left>
    			    <tr>
                                <td align="left" class="" width="200">
                            	    <select name="playerskin" class="selbox">
                            		<option value="black" {if $wsetting.theme eq "black"}selected{/if}>{$adm_setgen25}</option>
                                        <option value="blue" {if $wsetting.theme eq "blue"}selected{/if}>{$adm_vptxt2}</option>
                                        <option value="green" {if $wsetting.theme eq "green"}selected{/if}>{$adm_vptxt3}</option>
                                        <option value="orange" {if $wsetting.theme eq "orange"}selected{/if}>{$adm_vptxt4}</option>
                                        <option value="red" {if $wsetting.theme eq "red"}selected{/if}>{$adm_vptxt5}</option>
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
				<td><input type="text" name="btime" value="{if $smarty.request.btime eq ""}{$wsetting.btime}{else}{$smarty.request.btime}{/if}" class="ff" size="5"></td>
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
				<td><input type="text" name="pwidth" value="{if $smarty.request.pwidth eq ""}{$wsetting.pwidth}{else}{$smarty.request.pwidth}{/if}" class="ff" size="5"></td>
				<td>{$adm_playersize_width}</td>
				<td width="25">&nbsp;</td>
				<td><input type="text" name="pheight" value="{if $smarty.request.pheight eq ""}{$wsetting.pheight}{else}{$smarty.request.pheight}{/if}" class="ff" size="5"></td>
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
                            	    <select name="fullscreen" class="selbox" onchange="ReverseContentDisplay('fs1'); ReverseContentDisplay('fs0');">
                                        <option value="1" {if $wsetting.fullscreen eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $wsetting.fullscreen eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                                    <div id="fs1" {if $wsetting.fullscreen eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="fs0" {if $wsetting.fullscreen eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
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
                            	    <select name="autoplay" class="selbox" onchange="ReverseContentDisplay('ap1'); ReverseContentDisplay('ap0');">
                                        <option value="1" {if $wsetting.autoplay eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $wsetting.autoplay eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                                    <div id="ap1" {if $wsetting.autoplay eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="ap0" {if $wsetting.autoplay eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
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
                            	    <select name="plist" class="selbox">
                                        <option value="rel" {if $wsetting.playlist eq "rel"}selected{/if}>{$adm_vpl1}</option>
                                        <option value="feat" {if $wsetting.playlist eq "feat"}selected{/if}>{$adm_vpl2}</option>
                                        <option value="comm" {if $wsetting.playlist eq "comm"}selected{/if}>{$adm_vpl3}</option>
                                        <option value="tr" {if $wsetting.playlist eq "tr"}selected{/if}>{$adm_vpl4}</option>
                                        <option value="mv" {if $wsetting.playlist eq "mv"}selected{/if}>{$adm_vpl5}</option>
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
                            	    <select name="pbuttons" class="selbox" onchange="ReverseContentDisplay('pb1'); ReverseContentDisplay('pb0');">
                                        <option value="1" {if $wsetting.pb eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $wsetting.pb eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                                    <div id="pb1" {if $wsetting.pb eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="pb0" {if $wsetting.pb eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
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
                            	    <select name="embed" class="selbox" onchange="ReverseContentDisplay('oe1'); ReverseContentDisplay('oe0');">
                                        <option value="1" {if $wsetting.embed eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $wsetting.embed eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                                    <div id="oe1" {if $wsetting.embed eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="oe0" {if $wsetting.embed eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
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
                            	    <select name="share" class="selbox" onchange="ReverseContentDisplay('os1'); ReverseContentDisplay('os0');">
                                        <option value="1" {if $wsetting.share eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $wsetting.share eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                                    <div id="os1" {if $wsetting.share eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="os0" {if $wsetting.share eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
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
                            	    <select name="mail" class="selbox" onchange="ReverseContentDisplay('om1'); ReverseContentDisplay('om0');">
                                        <option value="1" {if $wsetting.mail eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $wsetting.mail eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                                    <div id="om1" {if $wsetting.mail eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="om0" {if $wsetting.mail eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
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
                            	    <select name="repeat" class="selbox" onchange="ReverseContentDisplay('or1'); ReverseContentDisplay('or0');">
                                        <option value="1" {if $wsetting.repeats eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $wsetting.repeats eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                                    <div id="or1" {if $wsetting.repeats eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="or0" {if $wsetting.repeats eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
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
                            	    <select name="plogo" class="selbox" onchange="ReverseContentDisplay('pl1'); ReverseContentDisplay('pl0');">
                                        <option value="1" {if $wsetting.logo eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $wsetting.logo eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                                    <div id="pl1" {if $wsetting.logo eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="pl0" {if $wsetting.logo eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
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
                            	    <select name="textads" class="selbox" onchange="ReverseContentDisplay('ota1'); ReverseContentDisplay('ota0'); ReverseContentDisplay('tdl');">
                                        <option value="1" {if $wsetting.tads eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $wsetting.tads eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                                    <div id="ota1" {if $wsetting.tads eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="ota0" {if $wsetting.tads eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
                            <tr>
                        	<td class="nopad">
                        	    <div id="tdl" class="p5" {if $wsetting.tads eq "1"}style="display: block;"{else}style="display: none;"{/if}>{$adm_vpdelay}&nbsp;<input type="text" name="atime" value="{$wsetting.atime}" class="ff" size="2">&nbsp;{$adm_vpbuffsec}</div>
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
                            	    <select name="videoads" class="selbox" onchange="ReverseContentDisplay('ova1'); ReverseContentDisplay('ova0'); ReverseContentDisplay('vads');">
                                        <option value="1" {if $wsetting.vads eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $wsetting.vads eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="60">
                                    <div id="ova1" {if $wsetting.vads eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="ova0" {if $wsetting.vads eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
                        </table>
    		    </td>
		</tr>
		<tr>
		    <td></td>
    		    <td>
    			<div id="vads" style="{if $wsetting.vads eq "1"}display: block;{else}display: none;{/if}">
			<table cellpadding=1 cellspacing=0 border=0>
			    <tr>
				<td>
                            	    <select name="showad" class="selbox">
                                        <option value="0" {if $wsetting.advertisement eq "0"}selected{/if}>{$adm_playerads_beg}</option>
                                        <option value="1" {if $wsetting.advertisement eq "1"}selected{/if}>{$adm_playerads_end}</option>
                                        <option value="2" {if $wsetting.advertisement eq "2"}selected{/if}>{$adm_playerads_both}</option>
                                    </select>
                                </td>
			    </tr>
			</table>
			</div>
    		    </td>
		</tr>
		<tr>
		    <td align="left" colspan="2"><table cellpadding="1" cellspacing="0"><tr><td><input type="checkbox" name="localviews" disabled checked></td><td>{$plist_txt39}</td></tr></table></td>
		</tr>
		<tr>
    		    <td colspan="2"><hr></td>
		</tr>
		<tr>
                    <td colspan="2">{include file="administration/_inc/inc_player_sitecolors.tpl"}</td>
                </tr>
		<tr>
    		    <td colspan="2"></td>
		</tr>
		<tr>
		    <td align="left"><input type="submit" name="add_setting" class="fb" value="{$adm_playerbtnsave}"></td>
		    <td></td>
		</tr>
		<tr>
    		    <td colspan="2"></td>
		</tr>
	    </table>
	    </fieldset>
	    </form>
