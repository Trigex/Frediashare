	<form name="filesel" id="filesel" method="post" action="{$base_url}/blocked_users{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}">
	    <table border="0" cellpadding="5" cellspacing="0" width="100%" align="center">
		<tr>
		    <td width="170"><a href="javascript:void(0)" onclick="ReverseContentDisplay('opts_div'); ReverseSign('7');"><span id="memb7">{$pr_chinfob52}</span></a></td>
		    <td align="left" valign="middle" style="padding-bottom: 2px;" class="pl5"><img id="img7" class="cursor" src="{$theme_url}/{$site_theme}/images/sign_plus.gif" width="10" height="10" alt="{$pr_chinfob52}" onclick="ReverseContentDisplay('opts_div'); ReverseSign('7');">
		</tr>
	    </table>
	    <div id="opts_div" style="display: none;">
	    {insert name=getfield assign=bl_files field=bl_files table=members qfield=uid qvalue=$smarty.session.UID}
	    {insert name=getfield assign=bl_chcomm field=bl_chcomm table=members qfield=uid qvalue=$smarty.session.UID}
	    {insert name=getfield assign=bl_chan field=bl_chan table=members qfield=uid qvalue=$smarty.session.UID}
	    {insert name=getfield assign=bl_fr field=bl_fr table=members qfield=uid qvalue=$smarty.session.UID}
	    {insert name=getfield assign=bl_msg field=bl_msg table=members qfield=uid qvalue=$smarty.session.UID}
	    {if $enable_channels eq "1"}{insert name=getfield assign=bl_sub field=bl_sub table=members qfield=uid qvalue=$smarty.session.UID}{/if}
	    <table border="0" cellpadding="5" cellspacing="1" width="100%" align="center">
		<tr>
		    <td class="nopad" align="center"><input type="checkbox" name="bl1" {if $bl_files eq "yes"}checked{/if} onclick="if (this.checked) {ldelim} set_bl('bl_files'); {rdelim} else {ldelim} set_unbl('bl_files'); {rdelim}"></td>
		    <td class="nopad" colspan=2>{$pr_chinfob47}</td>
		</tr>
		<tr>
		    <td class="nopad" align="center"><input type="checkbox" name="bl3" {if $bl_chan eq "yes"}checked{/if} onclick="if (this.checked) {ldelim} set_bl('bl_chan'); {rdelim} else {ldelim} set_unbl('bl_chan'); {rdelim}"></td>
		    <td class="nopad">{$pr_chinfob49}</td><td class="nopad"></td>
		</tr>
		<tr>
		    <td class="nopad" align="center"><input type="checkbox" name="bl2" {if $bl_chcomm eq "yes"}checked{/if} onclick="if (this.checked) {ldelim} set_bl('bl_chcomm'); {rdelim} else {ldelim} set_unbl('bl_chcomm'); {rdelim}"></td>
		    <td class="nopad">{$pr_chinfob48}</td><td class="nopad"></td>
		</tr>
		<tr>
		    <td class="nopad" align="center"><input type="checkbox" name="bl4" {if $bl_msg eq "yes"}checked{/if} onclick="if (this.checked) {ldelim} set_bl('bl_msg'); {rdelim} else {ldelim} set_unbl('bl_msg'); {rdelim}"></td>
		    <td class="nopad">{$pr_chinfob50}</td><td class="nopad"></td>
		</tr>
		{if $enable_channels eq "1"}
		<tr>
		    <td class="nopad" align="center"><input type="checkbox" name="bl5" {if $bl_sub eq "yes"}checked{/if} onclick="if (this.checked) {ldelim} set_bl('bl_sub'); {rdelim} else {ldelim} set_unbl('bl_sub'); {rdelim}"></td>
		    <td class="nopad">{$pr_chinfob51}</td><td class="nopad"></td>
		</tr>
		{/if}
	    </table>
	    <div id="opts_divresp" class="p5"></div>
	    </div>
	    <table border="0" cellpadding="5" cellspacing="1" width="100%" align="center">
	    {if $total ne "0"}
                <tr>
                    <td class="th2" align="center" width="3%"><input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmya(document.filesel['mid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmya(document.filesel['mid[]']); HideContent('actdiv'); {rdelim}"></td>
                    <td class="th2">{$blocked_th1}</td>
                    <td class="th2" align="center">{$blocked_th2}</td>
                </tr>
                {section name=i loop=$bu}
            	<tr class="nbg">
            	    <td width="3%" class="th1" align="center"><input type="checkbox" name="mid[]" value="{$bu[i].blocked_uid}" onclick="ShowContent('actdiv')"></td>
            	    <td class="th1">
            		<table cellpadding=0 cellspacing=0 width="100%">
            		    <tr>
            			<td align="left">
            			    <a href="{$base_url}/profile/{if $special_characters eq "0"}{$bu[i].blocked_name}{else}{$bu[i].blocked_uid}{/if}">{$bu[i].blocked_name}</a>
            			</td>
            			<td align="right">
            			<div id="more{$bu[i].bid}" style="display: block;">
            			    {insert name=audio_count assign=adocount uid=$bu[i].blocked_uid}
                                    {insert name=image_count assign=idocount uid=$bu[i].blocked_uid}
                                    {insert name=video_count assign=vdocount uid=$bu[i].blocked_uid}
                                    {insert name=fav_count assign=favcount uid=$bu[i].blocked_uid}
                                    {insert name=friend_count assign=frcount uid=$bu[i].blocked_uid}
                                    [{if $enable_audio eq "1"}<a {if $adocount ne "0"}href="{$base_url}/user_audios/{if $special_characters eq "0"}{$bu[i].blocked_name}{else}{$bu[i].blocked_uid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_audios}</span>({$adocount})</a>{$myfiles_delim}{/if}
                                    {if $enable_images eq "1"}<a {if $idocount ne "0"}href="{$base_url}/user_images/{if $special_characters eq "0"}{$bu[i].blocked_name}{else}{$bu[i].blocked_uid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_images}</span>({$idocount})</a>{$myfiles_delim}{/if}
                                    {if $enable_videos eq "1"}<a {if $vdocount ne "0"}href="{$base_url}/user_videos/{if $special_characters eq "0"}{$bu[i].blocked_name}{else}{$bu[i].blocked_uid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_videos}</span>({$vdocount})</a>{$myfiles_delim}{/if}
                                    <a {if $favcount ne "0"}href="{$base_url}/user_favorites/{if $special_characters eq "0"}{$bu[i].blocked_name}{else}{$bu[i].blocked_uid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_favorites}</span>({$favcount})</a>{$myfiles_delim}
                                    <a {if $frcount ne "0"}href="{$base_url}/user_friends/{if $special_characters eq "0"}{$bu[i].blocked_name}{else}{$bu[i].blocked_uid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_friends}</span>({$frcount})</a>]
                                </td>
                            </tr>
                        </table>
            	    </td>
            	    <td width="25%" class="th1" align="center">
            		{if $bu[i].active eq "0"}<a href="javascript:void(0)" onclick="location.href='{$base_url}/blocked_users{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/block/{if $special_characters eq "0"}{$bu[i].blocked_name}{else}{$bu[i].blocked_uid}{/if}'; return false;">{$blocked_act1}</a>{else}<a href="javascript:void(0)" onclick="location.href='{$base_url}/blocked_users{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/unblock/{if $special_characters eq "0"}{$bu[i].blocked_name}{else}{$bu[i].blocked_uid}{/if}'; return false;">{$blocked_act2}</a>{/if}{$myfiles_delim}<a href="javascript:void(0)" onclick="if(confirm('{$blocked_del}')) location.href='{$base_url}/blocked_users/delete/{if $special_characters eq "0"}{$bu[i].blocked_name}{else}{$bu[i].blocked_uid}{/if}'; return false;">{$blocked_act3}</a>
            	    </td>
            	</tr>
                {/section}
                <tr>
            	    <td colspan=3>{include file="_inc/inc_selectactions.tpl"}</td>
                </tr>
            {/if}
                <tr>
                    <td colspan=3 class="pag_bg" align="center" valign="top">{$link}</td>
                </tr>
            </table>
        </form>