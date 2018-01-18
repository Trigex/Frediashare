<!-- BEGIN ADMIN AREA GUEST SETTINGS TABLE -->
<br>
<table align=center width="950" border=0 cellpadding=2 cellspacing=0>
    <tr>
	<td align="left" class=""><h1>{$adm_setguestheading}</h1></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr>
	<td class=grey>
	    <table cellpadding=5 cellspacing=0 width="100%" border=0>
		<tr>
		    <td colspan=2>{$adm_setguesttxt}</td>
		</tr>
		<tr>
		    <td valign=top width="30%" class="pl0">
		    <form name="guest_form" method="post" action="{$admin_url}/settings/guest">
			<br>
			<table cellpadding=4 cellspacing=0 width="100%" align=left border=0>
			    <tr>
				<td class="types" width="55%">{$adm_setguest1}</td>
				<td>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="radio" name="audioacc" value="1" {if $guests_audio_view eq "1"}checked{/if}></td>
					    <td>{$adm_setguestyes}</td>
					    <td>&nbsp;</td><td>&nbsp;</td>
					    <td><input type="radio" name="audioacc" value="0" {if $guests_audio_view eq "0"}checked{/if}></td>
					    <td>{$adm_setguestno}</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td class="types" width="55%">{$adm_setguest2}</td>
				<td>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="radio" name="imageacc" value="1" {if $guests_image_view eq "1"}checked{/if}></td>
					    <td>{$adm_setguestyes}</td>
					    <td>&nbsp;</td><td>&nbsp;</td>
					    <td><input type="radio" name="imageacc" value="0" {if $guests_image_view eq "0"}checked{/if}></td>
					    <td>{$adm_setguestno}</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td class="types" width="55%">{$adm_setguest3}</td>
				<td>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="radio" name="videoacc" value="1" {if $guests_video_view eq "1"}checked{/if}></td>
					    <td>{$adm_setguestyes}</td>
					    <td>&nbsp;</td><td>&nbsp;</td>
					    <td><input type="radio" name="videoacc" value="0" {if $guests_video_view eq "0"}checked{/if}></td>
					    <td>{$adm_setguestno}</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    
			    <tr>
				<td class="types" width="55%">{$adm_setguest31}</td>
				<td>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="radio" name="file_sort" value="1" {if $guests_file_sorting eq "1"}checked{/if}></td>
					    <td>{$adm_setguestyes}</td>
					    <td>&nbsp;</td><td>&nbsp;</td>
					    <td><input type="radio" name="file_sort" value="0" {if $guests_file_sorting eq "0"}checked{/if}></td>
					    <td>{$adm_setguestno}</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    
			    <tr>
				<td class="types" width="55%">{$adm_setguest32}</td>
				<td>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="radio" name="file_access" value="1" {if $guests_file_access eq "1"}checked{/if}></td>
					    <td>{$adm_setguestyes}</td>
					    <td>&nbsp;</td><td>&nbsp;</td>
					    <td><input type="radio" name="file_access" value="0" {if $guests_file_access eq "0"}checked{/if}></td>
					    <td>{$adm_setguestno}</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    
			    <tr>
				<td class="types" width="55%">{$adm_setguest4}</td>
				<td>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="radio" name="categacc" value="1" {if $guests_categories_view eq "1"}checked{/if}></td>
					    <td>{$adm_setguestyes}</td>
					    <td>&nbsp;</td><td>&nbsp;</td>
					    <td><input type="radio" name="categacc" value="0" {if $guests_categories_view eq "0"}checked{/if}></td>
					    <td>{$adm_setguestno}</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td class="types" width="55%">{$adm_setguest5}</td>
				<td>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="radio" name="memsec" value="1" {if $guests_members_view eq "1"}checked{/if}></td>
					    <td>{$adm_setguestyes}</td>
					    <td>&nbsp;</td><td>&nbsp;</td>
					    <td><input type="radio" name="memsec" value="0" {if $guests_members_view eq "0"}checked{/if}></td>
					    <td>{$adm_setguestno}</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    
			    <tr>
				<td class="types" width="55%">{$ch_acctxt}</td>
				<td>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="radio" name="chansec" value="1" {if $guests_chan_access eq "1"}checked{/if}></td>
					    <td>{$adm_setguestyes}</td>
					    <td>&nbsp;</td><td>&nbsp;</td>
					    <td><input type="radio" name="chansec" value="0" {if $guests_chan_access eq "0"}checked{/if}></td>
					    <td>{$adm_setguestno}</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    
			    <tr>
				<td class="types" width="55%">{$adm_setguest6}</td>
				<td>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="radio" name="mempro" value="1" {if $guests_profile_view eq "1"}checked{/if}></td>
					    <td>{$adm_setguestyes}</td>
					    <td>&nbsp;</td><td>&nbsp;</td>
					    <td><input type="radio" name="mempro" value="0" {if $guests_profile_view eq "0"}checked{/if}></td>
					    <td>{$adm_setguestno}</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td class="types" width="55%">{$adm_setguest7}</td>
				<td>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="radio" name="searchacc" value="1" {if $guests_search_access eq "1"}checked{/if}></td>
					    <td>{$adm_setguestyes}</td>
					    <td>&nbsp;</td><td>&nbsp;</td>
					    <td><input type="radio" name="searchacc" value="0" {if $guests_search_access eq "0"}checked{/if}></td>
					    <td>{$adm_setguestno}</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td class="types" width="55%">{$adm_setguest8}</td>
				<td>
				    <table cellpadding=1 cellspacing=0 border=0>
					<tr>
					    <td valign=top><input type="text" class="ff" name="bwlimit" value="{if $smarty.request.bwlimit ne ""}{$smarty.request.bwlimit}{else}{$guests_bw_limit}{/if}" size="6">{$adm_setguest_bw1}</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr class="nopad">
				<td class="nopad"></td><td align=left class="nopad">{$adm_setguest_bw2}</td>
			    </tr>
			    <tr>
				<td align=right class="pr5"><br><br><input type="submit" name="guest_save" class="fb" value="{$adm_setgensave}"></td><td></td>
			    </tr>
			</table>
			</form>
		    </td>
		    
		    <td valign=top width="70%" class="pl0">
		    <form name="inboxmsg" method="post" action="">
			<table cellpadding=3 cellspacing=0 align=center border=0 width="100%">
			    <tr>
				<td width="31%"><a href="javascript:void(0)" onclick="ReverseContentDisplay('guest_stat')"><span id="opts_txt1">[Show/Hide] Guest Statistics</span></a></td>
				<td valign=middle><img id="opts" class="cursor" src="{$theme_url}/{$site_theme}/images/sign_minus.gif" width="10" height="10" alt="Guest Statistics" onclick="ReverseContentDisplay('guest_stat')"></td>
			    </tr>
			    <tr>
				<td colspan=2>
				<div id="guest_stat" style="display: block;">
				    <table cellpadding=4 cellspacing=1 border=0 width="100%" class="cs1 rowstyle-alt no-arrow" id="stbl">
				    <thead>
					<tr class="th">
					    {if $ginfo[0].gid ne ""}
					    <th align="center"><input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmsg(document.inboxmsg['mid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmsg(document.inboxmsg['mid[]']); HideContent('actdiv'); {rdelim}"></th>
					    {/if}
					    <th class="sortable-numeric" width="5%">{$adm_setgueststatth1}</th>
					    <th class="sortable-sortIPAddress" width="9%">{$adm_setgueststatth2}</th>
					    <th class="sortable-sortEnglishLonghandDateFormat" width="12%">{$adm_setgueststatth4}</th>
					    <th class="sortable-sortByTwelveHourTimestamp" width="9%">{$adm_setgueststatth5}</th>
					    <th class="sortable-numeric" width="10%">{$adm_setgueststatth6}</th>
					    <th width="15%">{$adm_setgueststatth7}</th>
					</tr>
				    </thead>
				    <tbody>
				    {section name=i loop=$ginfo}
					<tr class="td">
					    {if $ginfo[0].gid ne ""}
					    <td width="3%" class="th1" align="center"><input type="checkbox" name="mid[]" value="{$ginfo[i].gid}" onclick="ShowContent('actdiv')"></td>
					    {/if}
					    <td>{$ginfo[i].gid}</td>
					    <td>{$ginfo[i].guest_ip}</td>
					    <td>{$ginfo[i].log_date|date_format:"%b %e, %Y"}</td>
					    <td>{$ginfo[i].log_date|date_format:"%H:%M %p"}</td>
					    <td>{$ginfo[i].used_bw}</td>
					    <td>
						<a href="javascript:void(0)" onclick="if(confirm('{$adm_setguestdelmsg}')) location.href='{$admin_url}/settings/guest/delete/{$ginfo[i].gid}'; return false;">{$adm_setgueststataction1}</a> | 
						<a href="javascript:void(0)" onclick="if(confirm('{$adm_setguestresetmsg}')) location.href='{$admin_url}/settings/guest/reset/{$ginfo[i].gid}'; return false;">{$adm_setgueststataction2}</a>
					    </td>
					</tr>
				    {/section}
				    </tbody>
				    </table>
				    {if $ginfo[0].gid ne ""}
        				<table cellpadding="5" cellspacing="0" align="left" width="100%">
            				    <tr>
                				<td colspan=2>{include file="_inc/inc_selectactions.tpl"}</td>
            				    </tr>
        				</table>
        			    {/if}
				    <table cellpadding=4 cellspacing=1 border=0 width="100%" align="left">
					<tr>
					    <td align=left width="25%">{$adm_setguestentry}[{$start_num} - {$end_num}]{$adm_setguestentryof}{$total}</td>
					    <td class="pag_bg">{$link}</td>
					</tr>
				    </table>
				</div>
				</td>
			    </tr>
			</table>
		    </form>
		    </td>
		</tr>
	    </table>
	</td>
    </tr>
</table>
<!-- END ADMIN AREA GUEST SETTINGS TABLE -->
