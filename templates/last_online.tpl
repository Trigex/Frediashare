
<!-- BEGIN LAST USERS INFORMATION TABLE -->
	    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="grey">
	    {if $users[0].username eq ""}
		<tr><td align=center valign="bottom" class="pt10">{$last_nores}</td></tr>
	    {else}
		<tr>
		    <td class="pt15">
			<table width="100%" cellpadding="2" cellspacing="0" border=0>
			    {section name=i loop=$users}
			    <tr>
				<td width="48">
				{if $special_characters eq "0"}
				<a href="profile/{$users[i].username}">
				{else}
				<a href="profile/{$users[i].uid}">
				{/if}
				    <img src="{$usrimg_url}/{$users[i].photo}" width="48" height="48" class="{if $users[i].gender eq "M"}user_img{elseif $users[i].gender eq "F"}user_imgf{else}user_img{/if}" alt="{$users[i].username}" title="{$users[i].username}">
				</a>
				</td>
				<td class="pl5" valign=top>
				    <table width="100%" cellpadding="1" cellspacing="0" border=0>
					<tr>
					    <td>{if $special_characters eq "0"}<a href="profile/{$users[i].username}">{else}<a href="profile/{$users[i].uid}">{/if}{$users[i].username}</a></td>
					</tr>
					<tr>
					    <td valign="top">
						{if $smarty.get.type eq "online"}<div class="p1 italic">{$hpbox_statlg} {$users[i].last_login|date_format:"%H:%M %p"}</div>
						{else}<div class="p1 italic">{$search_ntxt2}{$users[i].last_login|date_format:"%b. %d, %Y"}</div>
						{/if}
						<div class="p1 italic">{$uch_txt8} <span class="bold">{$users[i].ch_views|viewnr}</span></div>
					    {insert name=audio_count assign=adocount uid=$users[i].uid}
					    {insert name=image_count assign=idocount uid=$users[i].uid}
					    {insert name=video_count assign=vdocount uid=$users[i].uid}
					    {insert name=fav_count assign=favcount uid=$users[i].uid}
					    {insert name=friend_count assign=frcount uid=$users[i].uid}
					    </td>
					</tr>
				    </table>
				</td>
			    </tr>
			    {/section}
			</table>
		    </td>
		</tr>
	    {/if}
		<tr>
                    <td class="nopad f10" align="right">
                        <a href="javascript:void(0)" onclick="HideContent('getusersresp'); {if $users_online eq "1"}changeclass_inact('pane1');{/if} {if $users_last eq "1"}changeclass_inact('pane2');{/if}">{$up_opt5}</a>
                    </td>
                </tr>
	    </table>
<!-- END LAST USERS INFORMATION TABLE -->
