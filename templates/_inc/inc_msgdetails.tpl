    <table cellpadding="1" cellspacing="0" width="100%">
	<tr>
	    <td align="right" class="p5">
	    {if $sbtn eq "inbox"}
		{$ltsigns}<a href="{if $back eq "0"}javascript:void(0){else}{$base_url}/inbox/{$back}{/if}">{$gen_pageprev}</a>{$myfiles_delim}<a href="{if $next eq "0"}javascript:void(0){else}{$base_url}/inbox/{$next}{/if}"">{$gen_pagenext}</a>{$gtsigns}
	    {elseif $sbtn eq "outbox"}
		{$ltsigns}<a href="{if $back eq "0"}javascript:void(0){else}{$base_url}/outbox/{$back}{/if}">{$gen_pageprev}</a>{$myfiles_delim}<a href="{if $next eq "0"}javascript:void(0){else}{$base_url}/outbox/{$next}{/if}"">{$gen_pagenext}</a>{$gtsigns}
	    {/if}
	    </td>
	</tr>
	<tr>
	    <td>
		<table cellpadding="3" cellspacing="0" width="100%" align="center" border=0>
		    <tr>
			<td width="10%" align="left" class="pr15">{if $sbtn eq "inbox"}{$inbox_mfrom}{else}{$inbox_cto}{/if}</td>
			<td>
			    <table cellpadding=1 cellspacing=0 width="100%" border=0>
				<tr>
				    <td>
					{if $sbtn eq "inbox"}<a {if $md[0].sender ne $site_name}href="{$base_url}/profile/{if $special_characters eq "0"}{$md[0].sender}{else}{insert name=name_to_uid2 assign=uid username=$md[0].sender}{$uid}{/if}"{/if}>{$md[0].sender}</a>{elseif $sbtn eq "outbox"}<a href="{$base_url}/profile/{if $special_characters eq "0"}{$md[0].receiver}{else}{insert name=name_to_uid2 assign=uid username=$md[0].receiver}{$uid}{/if}">{$md[0].receiver}</a>{/if}
				    </td>
				    {if $md[0].sender ne $site_name}
				    <td>
					{if $sbtn eq "inbox"}{insert name=name_to_uid2 assign=uid username=$md[0].sender}{elseif $sbtn eq "outbox"}{insert name=name_to_uid2 assign=uid username=$md[0].receiver}{/if}
					{insert name=audio_count assign=adocount uid=$uid}
					{insert name=image_count assign=idocount uid=$uid}
					{insert name=video_count assign=vdocount uid=$uid}
					{insert name=fav_count assign=favcount uid=$uid}
					{insert name=friend_count assign=frcount uid=$uid}
					
					[{if $enable_audio eq "1"}<a {if $adocount ne "0"}href="{$base_url}/user_audios/{if $special_characters eq "0"}{if $sbtn eq "inbox"}{$md[0].sender}{elseif $sbtn eq "outbox"}{$md[0].receiver}{/if}{else}{$uid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_audios}</span>({$adocount})</a>{$myfiles_delim}{/if}
					{if $enable_images eq "1"}<a {if $idocount ne "0"}href="{$base_url}/user_images/{if $special_characters eq "0"}{if $sbtn eq "inbox"}{$md[0].sender}{elseif $sbtn eq "outbox"}{$md[0].receiver}{/if}{else}{$uid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_images}</span>({$idocount})</a>{$myfiles_delim}{/if}
					{if $enable_videos eq "1"}<a {if $vdocount ne "0"}href="{$base_url}/user_videos/{if $special_characters eq "0"}{if $sbtn eq "inbox"}{$md[0].sender}{elseif $sbtn eq "outbox"}{$md[0].receiver}{/if}{else}{$uid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_videos}</span>({$vdocount})</a>{$myfiles_delim}{/if}
					<a {if $favcount ne "0"}href="{$base_url}/user_favorites/{if $special_characters eq "0"}{if $sbtn eq "inbox"}{$md[0].sender}{elseif $sbtn eq "outbox"}{$md[0].receiver}{/if}{else}{$uid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_favorites}</span>({$favcount})</a>{$myfiles_delim}
					<a {if $frcount ne "0"}href="{$base_url}/user_friends/{if $special_characters eq "0"}{if $sbtn eq "inbox"}{$md[0].sender}{elseif $sbtn eq "outbox"}{$md[0].receiver}{/if}{else}{$uid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_friends}</span>({$frcount})</a>]
				    </td>
				    {/if}
				</tr>
			    </table>
			</td>
		    </tr>
		    {if $md[0].sender ne $site_name and ($msg_block eq "1" and $enable_inbox eq "1")}
		    <tr>
			<td></td>
			<td class="pl0">
			    <form id="blockform">
				<table cellpadding=1 cellspacing=0 border=0>
				    <tr>
					<td>
					{insert name=bstatus assign=bstatus blocked_uid=$uid}
					{if $bstatus eq "0"}
					    <input type="button" class="fb" name="useract" value="{$inbox_mblock}" onclick="block_user();">
					{elseif $bstatus eq "1"}
					    <input type="button" class="fb" name="useract" value="{$inbox_munblock}" onclick="unblock_user();">
					{else}
					    <input type="button" class="fb" name="useract" value="{$inbox_mblock}" onclick="block_user();">
					{/if}
					    <input type="hidden" name="blocked" value="{$uid}">
					</td>
					<td class="pl10"><div id="bresp"></div></td>
				    </tr>
				</table>
			    </form>
			</td>
		    </tr>
		    {/if}
		    <tr>
			<td align="left" class="pr15">{if $sbtn eq "inbox"}{$inbox_mrcvd}{elseif $sbtn eq "outbox"}{$inbox_msent}{/if}</td>
			<td><span class="normal">{if $sbtn eq "inbox"}{$md[0].date|date_format:"%A, %B %e, at %H:%M %p"}{elseif $sbtn eq "outbox"}{$md[0].date|date_format:"%A, %B %e, at %H:%M %p"}{/if}</span></td>
		    </tr>
		    <tr>
			<td align="left" class="pr15">{$inbox_msubj}</td>
			<td>{$md[0].subject}</td>
		    </tr>
		    {if $md[0].sender ne $site_name and $msg_attach eq "1"}
		    <tr>
			<td align="left" class="pr15" valign="top">{$inbox_addedfiles}</td>
			<td>
			    {if $md[0].faudio eq "0" and $md[0].fimage eq "0" and $md[0].fvideo eq "0"}
				{$inbox_addednone}
			    {else}
				{if $md[0].faudio ne "0" and $enable_audio eq "1"}
				    {insert name=getfield assign=atitle field=vtitle table=files_audio qfield=vid qvalue=$md[0].faudio}
				    {insert name=getfield assign=akey field=vkey table=files_audio qfield=vid qvalue=$md[0].faudio}
				    {insert name=getfield assign=auid field=uid table=files_audio qfield=vid qvalue=$md[0].faudio}
				    {insert name=titlea assign=titlea vkey=$akey}
				    {insert name=vid_to_rnda assign=rnd vid=$md[0].faudio}
				    {insert name=vid_to_rndvv assign=rndv vid=$md[0].faudio}
				
				    {if $same_title_uploads eq "0"} 
					<a href="{$base_url}/audio/{$titlea}">
				    {else}
					<a href="{$base_url}/audio/{$akey}">
				    {/if}
					<img src="{$tmb_url}/user{$auid}/{$rndv}_{$rnd}.jpg" width="{$img_max_width/2}" height="{$img_max_height/2}" alt="{$atitle}" title="{$atitle}" class="thumb">
					</a>
				{/if}
				{if $md[0].fimage ne "0" and $enable_images eq "1"}
				    {insert name=getfield assign=ititle field=vtitle table=files_image qfield=vid qvalue=$md[0].fimage}
				    {insert name=getfield assign=ikey field=vkey table=files_image qfield=vid qvalue=$md[0].fimage}
				    {insert name=getfield assign=iuid field=uid table=files_image qfield=vid qvalue=$md[0].fimage}
				    {insert name=getfield assign=vpic field=vflvname table=files_image qfield=vid qvalue=$md[0].fimage}
				    {insert name=titlei assign=titlei vkey=$ikey}
				
				    {if $same_title_uploads eq "0"} 
					<a href="{$base_url}/image/{$titlei}">
				    {else}
					<a href="{$base_url}/image/{$ikey}">
				    {/if}
					<img src="{$tmb_url}/user{$iuid}/{$vpic}" width="{$img_max_width/2}" height="{$img_max_height/2}" alt="{$ititle}" title="{$ititle}" class="thumb">
					</a>
				{/if}
				{if $md[0].fvideo ne "0" and $enable_videos eq "1"}
				    {insert name=getfield assign=vtitle field=vtitle table=files_video qfield=vid qvalue=$md[0].fvideo}
				    {insert name=getfield assign=vkey field=vkey table=files_video qfield=vid qvalue=$md[0].fvideo}
				    {insert name=getfield assign=vuid field=uid table=files_video qfield=vid qvalue=$md[0].fvideo}
				    {insert name=getfield assign=vpic field=vflvname table=files_video qfield=vid qvalue=$md[0].fvideo}
				    {insert name=titlev assign=titlev vkey=$vkey}
				    {insert name=vid_to_rndv assign=rnd vid=$md[0].fvideo}
				    {insert name=vid_to_rndvv assign=rndv vid=$md[0].fvideo}
				
				    {if $same_title_uploads eq "0"} 
					<a href="{$base_url}/video/{$titlev}">
				    {else}
					<a href="{$base_url}/video/{$vkey}">
				    {/if}
					<img src="{$tmb_url}/user{$vuid}/{$rndv}_{$rnd}.jpg" width="{$img_max_width/2}" height="{$img_max_height/2}" alt="{$vtitle}" title="{$vtitle}" class="thumb">
					</a>
				{/if}
			    {/if}
			</td>
		    </tr>
		    {/if}
		    <tr>
			<td valign="top" align="left" class="pr15">{$inbox_mmsg}</td>
			<td class="dotted">
			    <table cellpadding=0 cellspacing=0 border=0>
				<tr>
				    <td>{$md[0].body|nl2br|spchar}</td>
				</tr>
				{if $md[0].reply_to ne ""}
                        	<tr>
                            	    <td class="pt10">{insert name=getfield assign=body field=body table=pmessages qfield=mid qvalue=$md[0].reply_to}
                                	{$inbox_msgbody}{$body|nl2br|spchar}
                            	    </td>
                        	</tr>
                        	{/if}
                    	    </table>
			</td>
		    </tr>
		    <tr>
			<td></td>
			<td class="pt10">
			{if $sbtn eq "inbox"}
			    <input type="button" class="fb" name="delact" value="{$inbox_itblact1}" onclick="if(confirm('{$inbox_delmsg}'))location.href='{$base_url}/inbox/delete/{$md[0].mid}'; return false;"></td>
			{elseif $sbtn eq "outbox"}
			    <input type="button" class="fb" name="delact" value="{$inbox_itblact1}" onclick="if(confirm('{$inbox_delmsg}'))location.href='{$base_url}/outbox/delete/{$md[0].mid}'; return false;"></td>
			{/if}
		    </tr>
		</table>
		{if $sbtn eq "inbox" and $md[0].sender ne $site_name}
		    {include file="_inc/inc_msgnew.tpl"}
		{/if}
	    </td>
	</tr>
    </table>