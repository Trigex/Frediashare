	    <fieldset>
	    <legend>{$adm_vptxt9}</legend>
	    <form action="{$admin_url}/player_main_audio" method="post" enctype="multipart/form-data">
	    <table width="95%" align="center" cellpadding="0" cellspacing="0" border=0 id="pla_tbl">
		<tr>
		    <td class="types" valign="middle" width="33%">{$adm_playersize}</td>
    		    <td>
			<table cellpadding=2 cellspacing=0 border=0>
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
		    <td class="types" width="15%">{$adm_playerplayback_auto} </td>
    		    <td>
    			<table cellpadding=2 cellspacing=0 border=0 align=left>
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
		    <td class="types" width="15%">{$adm_vptxt7} </td>
    		    <td>
    			<table cellpadding=2 cellspacing=0 border=0 align=left>
                            <tr>
                                <td align="left" class="" width="200">
                                    <select name="elogo" class="selbox" onchange="ReverseContentDisplay('epl1'); ReverseContentDisplay('epl0');">
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
		    <td class="types">{$adm_nfptxt6}</td>
		    <td>
			<table cellpadding=2 cellspacing=0 border=0>
			    <tr>
				<td align="left" class="" width="200">
				    <select name="easkin" class="selbox">
					<option value="def" {if $esetting.skin eq "def"}selected{/if}>Default</option>
					<option value="rnd" {if $esetting.skin eq "rnd"}selected{/if}>Random</option>
				    {section name=i loop=$askins}
					<option value="{$askins[i]}" {if $esetting.skin eq $askins[i]}selected{/if}>{$askins[i]}</option>
				    {/section}
				    </select>
				</td>
			    </tr>
			</table>
		    </td>
		</tr>
		<tr>
                    <td align="left" colspan="2"><table cellpadding="1" cellspacing="0"><tr><td><input type="checkbox" name="embedviews" {if $inc_aplayer_count eq "1"}checked{/if}></td><td>{$plist_txt40}</td></tr></table></td>
                </tr>
                <tr><td colspan="2"><hr></td></tr>
		<tr>
		    <td class="types" valign="middle">{$adm_playerbg}</td>
    		    <td>
    			<input type="file" name="epicture" class="ff">
    		    </td>
		</tr>
{if $esetting.bgimage ne ""}
		<tr> 
		    <td valign="top" align="left">
			<table cellpadding=1 cellspacing=0><tr><td>{$adm_playerdelbg}</td><td><input type="checkbox" name="edelpic" value="1"></td></tr></table>
		    </td>
		    <td align="left"><img src="{$url_fp}/wms_audio/{$esetting.bgimage}"></td>
		</tr>
{/if}    
		<tr>
    		    <td colspan="2">&nbsp;</td>
		</tr>
		<tr>
		    <td></td>
    		    <td align="left"><input type="submit" name="eadd_setting" class="fb" value="{$adm_playerbtnsave}"></td>
		</tr>
		<tr>
    		    <td colspan="2"></td>
		</tr>
	    </table>
	    </form>
	    </fieldset>