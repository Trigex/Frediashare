    		<table cellpadding="2" cellspacing="0" border=0 align="left">
    		    <tr>
    			<td width="1%"><input type="checkbox" {if $tinfo[0].th_featvid eq "1"}checked{/if} name="th_featvid" id="th_featvid" onclick="sh_featvid();"></td>
    			<td>
    			    <select name="th_featsrc" id="th_featsrc" class="selbox" {if $tinfo[0].th_featvid eq "0"}disabled{/if}>
    				{if $enable_videos eq "1"}<option value="v" {if $tinfo[0].th_featvid_type eq "v"}selected{/if}>{$pr_chinfop53}</option>{/if}
    				{if $enable_images eq "1"}<option value="i" {if $tinfo[0].th_featvid_type eq "i"}selected{/if}>{$pr_chinfop531}</option>{/if}
    				{if $enable_audio eq "1"}<option value="a" {if $tinfo[0].th_featvid_type eq "a"}selected{/if}>{$pr_chinfop532}</option>{/if}
    			    </select>
    			</td>
    		    </tr>
    		    <tr>
    			<td colspan="2" class="pl20">
    			    <table cellpadding="2" cellspacing="0" border=0>
    				<tr>
    				    <td valign="top" width="1"><input type="radio" name="th_featvidlatest" {if $tinfo[0].th_featvid_file eq "last"}checked{/if} {if $tinfo[0].th_featvid eq "0"}disabled{/if} value="vl" onclick="HideContent('vurl');"></td><td valign="bottom">{$pr_chinfop54}</td>
    				    <td valign="top" width="1"><input type="radio" name="th_featvidlatest" {if $tinfo[0].th_featvid_file ne "last"}checked{/if} {if $tinfo[0].th_featvid eq "0"}disabled{/if} value="vu" onclick="ShowContent('vurl');"></td><td valign="bottom">{$pr_chinfop55}</td>
    				</tr>
    			    </table>
    			    <table cellpadding="2" cellspacing="0" border=0>
    				<tr>
    				    <td>
    				    <div id="vurl" {if $tinfo[0].th_featvid_file ne "last"}style="display: block;"{else}style="display: none;"{/if}>
    					<table cellpadding="2" cellspacing="0">
    					    <tr><td>{$pr_chinfoc1}</td><td><input type="text" name="th_featvidurl" class="ff" size="30" value="{$tinfo[0].th_featvid_file}"></td></tr>
    					</table>
    				    </div>
    				    </td>
    				</tr>
    			    </table>
    			</td>
    		    </tr>
    		    <tr>
    			<td width="1%"><input type="checkbox" {if $tinfo[0].th_subs eq "1"}checked{/if} name="th_subsbox" id="th_subsbox" onclick="sh_subsbox();"></td><td>{$pr_chinfop56}</td>
    		    </tr>
    		    <tr>
    			<td colspan="2" class="pl20">
    			    <table cellpadding="2" cellspacing="0" border=0>
    				<tr>
    				    <td valign="top" width="1"><input type="radio" name="th_subspos" value="left" id="th_subsposleft" {if $tinfo[0].th_subs eq "0"}disabled{/if} {if $tinfo[0].th_subspos eq "left"}checked{/if} onclick="ShowContent('div_subsdivleft'); HideContent('div_subsdivright');"></td><td valign="bottom">{$pr_chinfop57}</td>
    				    <td valign="top" width="1"><input type="radio" name="th_subspos" value="right" id="th_subsposright" {if $tinfo[0].th_subs eq "0"}disabled{/if} {if $tinfo[0].th_subspos eq "right"}checked{/if} onclick="HideContent('div_subsdivleft'); ShowContent('div_subsdivright');"></td><td valign="bottom">{$pr_chinfop58}</td>
    				</tr>
    			    </table>
    			</td>
    		    </tr>
    		    <tr>
    			<td width="1%"><input type="checkbox" name="th_playlist" {if $tinfo[0].th_plist eq "1"}checked{/if} onclick="sh_playlistbox(); ReverseContentDisplay('my_plists');"></td><td>{$pr_chinfop60}</td>
    		    </tr>
    		    <tr>
    			<td colspan="2" class="nopad">
    			<div id="my_plists" style="display: {if $tinfo[0].th_plist eq "1"}block;{else}none;{/if}">
    			    <table cellpadding="2" cellspacing="0" border=0 width="100%">
    				<tr>
    				    <td class="pl5">{$pr_chinfom60}</td>
    				</tr>
    				<tr>
    				    <td class="nopad pt5">
    					{if $enable_videos eq "1"}{insert name=get_video_playlists assign=vpl}{/if}
    					{if $enable_images eq "1"}{insert name=get_image_playlists assign=ipl}{/if}
    					{if $enable_audio eq "1"}{insert name=get_audio_playlists assign=apl}{/if}
    					{insert name=keys_to_array assign=ch_pl arr=$tinfo[0].th_plistchan}
    					{if $enable_videos eq "1" and $vpl[0].vkey ne ""}
    					<fieldset><legend class="f10"><a href="javascript:void(0)">{$plist_txt4}</a></legend>
    					<table cellpadding="2" cellspacing="0" border=0 width="100%">
    					{section name=i loop=$vpl}
    					    <tr>
    						<td width="1%"><input type="checkbox" name="vpl[]" value="{$vpl[i].vkey}" {section name=x loop=$ch_pl}{if $vpl[i].vkey eq $ch_pl[x]}checked{/if}{/section}></td>
    						<td align="left" width="99%">{$vpl[i].pname|spchar}</td>
    					    </tr>
    					{/section}
    					</table>
    					</fieldset>
    					{/if}

    					{if $enable_images eq "1" and $ipl[0].vkey ne ""}
    					<fieldset><legend class="f10"><a href="javascript:void(0)">{$plist_txt3}</a></legend>
    					<table cellpadding="2" cellspacing="0" border=0 width="100%">
    					{section name=i loop=$ipl}
    					    <tr>
    						<td width="1%"><input type="checkbox" name="ipl[]" value="{$ipl[i].vkey}" {section name=x loop=$ch_pl}{if $ipl[i].vkey eq $ch_pl[x]}checked{/if}{/section}></td>
    						<td align="left" width="99%">{$ipl[i].pname|spchar}</td>
    					    </tr>
    					{/section}
    					</table>
    					</fieldset>
    					{/if}

    					{if $enable_audio eq "1" and $apl[0].vkey ne ""}
    					<fieldset><legend class="f10"><a href="javascript:void(0)">{$plist_txt2}</a></legend>
    					<table cellpadding="2" cellspacing="0" border=0 width="100%">
    					{section name=i loop=$apl}
    					    <tr>
    						<td width="1%"><input type="checkbox" name="apl[]" value="{$apl[i].vkey}" {section name=x loop=$ch_pl}{if $apl[i].vkey eq $ch_pl[x]}checked{/if}{/section}></td>
    						<td align="left" width="99%">{$apl[i].pname|spchar}</td>
    					    </tr>
    					{/section}
    					</table>
    					</fieldset>
    					{/if}
    				    </td>
    				</tr>
    			    </table>
    			</div>
    			</td>
    		    </tr>
    		    <tr>
    			<td width="1%"></td><td>{$pr_chinfop64}</td>
    		    </tr>
    		    <tr>
    			<td width="1%"><input type="checkbox" name="th_vgrid" id="th_vgrid" {if $tinfo[0].th_vid eq "1"}checked{/if} onclick="sh_vidbox();"></td><td>{$pr_chinfop65}</td>
    		    </tr>
    		    <tr>
    			<td colspan="2" class="pl20">
    			    <table cellpadding="2" cellspacing="0" border=0>
    				<tr>
    				    <td valign="top" width="1"><input type="radio" name="th_vidview" {if $tinfo[0].th_vid eq "0"}disabled{/if} {if $tinfo[0].th_vid_view eq "grid"}checked{/if} value="grid" id="th_vidviewgrid" onclick="ShowContent('div_videogrid'); HideContent('div_videocomp');"></td><td valign="bottom">{$pr_chinfop66}</td>
    				    <td valign="top" width="1"><input type="radio" name="th_vidview" {if $tinfo[0].th_vid eq "0"}disabled{/if} {if $tinfo[0].th_vid_view eq "compact"}checked{/if} value="compact" id="th_vidviewcomp" onclick="HideContent('div_videogrid'); ShowContent('div_videocomp');"></td><td valign="bottom">{$pr_chinfop67}</td>
    				</tr>
    			    </table>
    			</td>
    		    </tr>
    		    <tr>
    			<td width="1%"><input type="checkbox" name="th_vlog" id="th_vlog" {if $tinfo[0].th_vlog eq "1"}checked{/if} onclick="sh_vlogbox();"></td><td>{$pr_chinfop68}</td>
    		    </tr>
    		    <tr>
    			<td width="1%"><input type="checkbox" name="th_fav" id="th_fav" {if $tinfo[0].th_fav eq "1"}checked{/if} onclick="sh_favbox();"></td><td>{$pr_chinfop69}</td>
    		    </tr>
    		    <tr>
    			<td colspan="2" class="pl20">
    			    <table cellpadding="2" cellspacing="0" border=0>
    				<tr>
    				    <td valign="top" width="1"><input type="radio" name="th_favview" {if $tinfo[0].th_fav eq "0"}disabled{/if} {if $tinfo[0].th_fav_view eq "grid"}checked{/if} value="grid" id="th_favgrid" onclick="ShowContent('div_favgrid'); HideContent('div_favcomp');"></td><td valign="bottom">{$pr_chinfop66}</td>
    				    <td valign="top" width="1"><input type="radio" name="th_favview" {if $tinfo[0].th_fav eq "0"}disabled{/if} {if $tinfo[0].th_fav_view eq "compact"}checked{/if} value="compact" id="th_favcomp" onclick="HideContent('div_favgrid'); ShowContent('div_favcomp');"></td><td valign="bottom">{$pr_chinfop67}</td>
    				</tr>
    			    </table>
    			</td>
    		    </tr>
    		    <tr>
    			<td width="1%"><input type="checkbox" {if $tinfo[0].th_usubs eq "1"}checked{/if} name="th_usubsbox" id="th_usubsbox" onclick="sh_usubsbox();"></td><td>{$pr_chinfop70}</td>
    		    </tr>
    		    <tr>
    			<td colspan="2" class="pl20">
    			    <table cellpadding="2" cellspacing="0" border=0>
    				<tr>
    				    <td valign="top" width="1"><input type="radio" name="th_usubspos" {if $tinfo[0].th_usubs eq "0"}disabled{/if} {if $tinfo[0].th_usubs_pos eq "left"}checked{/if} value="left" id="th_usubsposleft" onclick="ShowContent('div_usubsdivleft'); HideContent('div_usubsdivright');"></td><td valign="bottom">{$pr_chinfop57}</td>
    				    <td valign="top" width="1"><input type="radio" name="th_usubspos" {if $tinfo[0].th_usubs eq "0"}disabled{/if} {if $tinfo[0].th_usubs_pos eq "right"}checked{/if} value="right" id="th_usubsposright" onclick="HideContent('div_usubsdivleft'); ShowContent('div_usubsdivright');"></td><td valign="bottom">{$pr_chinfop58}</td>
    				</tr>
    			    </table>
    			</td>
    		    </tr>
    		    <tr>
    			<td width="1%"><input type="checkbox" {if $tinfo[0].th_friends eq "1"}checked{/if} name="th_frbox" id="th_frbox" onclick="sh_frbox();"></td><td>{$pr_chinfop71}</td>
    		    </tr>
    		    <tr>
    			<td colspan="2" class="pl20">
    			    <table cellpadding="2" cellspacing="0" border=0>
    				<tr>
    				    <td valign="top" width="1"><input type="radio" name="th_frpos" {if $tinfo[0].th_friends eq "0"}disabled{/if} {if $tinfo[0].th_friends_pos eq "left"}checked{/if} value="left" id="th_frposleft" onclick="ShowContent('div_frdivleft'); HideContent('div_frdivright');"></td><td valign="bottom">{$pr_chinfop57}</td>
    				    <td valign="top" width="1"><input type="radio" name="th_frpos" {if $tinfo[0].th_friends eq "0"}disabled{/if} {if $tinfo[0].th_friends_pos eq "right"}checked{/if} value="right" id="th_frposright" onclick="HideContent('div_frdivleft'); ShowContent('div_frdivright');"></td><td valign="bottom">{$pr_chinfop58}</td>
    				</tr>
    			    </table>
    			</td>
    		    </tr>
    		    <tr>
    			<td width="1%"><input type="checkbox" {if $tinfo[0].th_comm eq "1"}checked{/if} name="th_commbox" id="th_commbox" onclick="sh_commbox();"></td><td>{$pr_chinfop72}</td>
    		    </tr>
    		    <tr>
    			<td colspan="2" class="pl20">
    			    <table cellpadding="2" cellspacing="0" border=0>
    				<tr>
    				    <td valign="top" width="1"><input type="radio" name="th_commpos" {if $tinfo[0].th_comm eq "0"}disabled{/if} {if $tinfo[0].th_comm_pos eq "left"}checked{/if} value="left" id="th_commposleft" onclick="ShowContent('div_commdivleft'); HideContent('div_commdivright');"></td><td valign="bottom">{$pr_chinfop57}</td>
    				    <td valign="top" width="1"><input type="radio" name="th_commpos" {if $tinfo[0].th_comm eq "0"}disabled{/if} {if $tinfo[0].th_comm_pos eq "right"}checked{/if} value="right" id="th_commposright" onclick="HideContent('div_commdivleft'); ShowContent('div_commdivright');"></td><td valign="bottom">{$pr_chinfop58}</td>
    				</tr>
    			    </table>
    			</td>
    		    </tr>
    		</table>
