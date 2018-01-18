	    {if $mdi eq "1"}
	    <form name="msg_form" method="post" action="{$base_url}/inbox/{$smarty.request.mid}">
	    {elseif $mdo eq "1"}
	    <form name="msg_form" method="post" action="{$base_url}/outbox/{$smarty.request.mid}">
	    {elseif $sbtn eq "compose"}
	    <form name="msg_form" method="post" action="">
	    {/if}
	    <table cellpadding=3 cellspacing=0 border=0 id="msg_tbl" width="100%" align="center" class="pt15">
		<tr>
		    <td colspan=2 class="p10">{$inbox_txtrep1}</td>
		</tr>
		<tr>
		    <td align=left class="pr15">{$inbox_cto}</td>
		    <td>
		    {if $sbtn eq "inbox" or $sbtn eq "compose"}
			<input type="text" name="wto" {if $smarty.request.type eq "selected"}readonly{/if} class="ff" size="40" value="{if $md[0].sender ne ""}{$md[0].sender}{elseif $to ne ""}{$to}{elseif $memsel[0] ne ""}{section name=i loop=$memsel}{insert name=uid_to_names2 assign=names uid=$memsel[i]}{$names}{if !$smarty.section.i.last},{/if}{/section}{else}{$smarty.request.wto}{/if}">{$inbox_subjmem}</td>
		    {elseif $sbtn eq "outbox"}
			<input type="text" name="wto" class="ff" size="40" value="{if $md[0].receiver ne ""}{$md[0].receiver}{elseif $to ne ""}{$to}{else}{$smarty.request.wto}{/if}">{$inbox_subjmem}</td>
		    {/if}
		    {if $smarty.request.type ne "selected"}
		    <td valign="top" class="nopad">
			<table cellpadding=1 cellspacing=1 border=0 width="100%">
			    <tr>
				<td>{$inbox_corto}</td>
				<td valign=bottom>
				    <select name="friend_name" class="selbox">
					{html_options values=$friend_name output=$friend_name selected=$smarty.request.friend_name}
				    </select>
				</td>
			    </tr>
			</table>
		    </td>
		    {/if}
		</tr>
		<tr>
		    <td align=left>{$inbox_csubj}</td>
		    <td>
			<input type="text" name="wsub" class="ff" size="40" value="{if $md[0].subject ne ""}{if $sbtn ne "compose"}{$inbox_cre}{/if}{$md[0].subject}{else}{$smarty.request.wsub}{/if}">
			<!-- {if $nore eq "1" or $nore eq "2"}<input type="hidden" name="repto" value="{$md[0].mid}">{/if} -->
			{if $sbtn ne "compose"}<input type="hidden" name="repto" value="{$md[0].mid}">{/if}
		    </td>
		</tr>
		{if $msg_attach eq "1"}
		{if $enable_audio eq "1"}
		<tr>
		    <td align=left>{$inbox_addaudio}</td>
		    <td>
			<select name="mya" class="selbox">
			    {html_options values=$myaid output=$mya selected=$smarty.request.mya}
			</select>
		    </td>
		</tr>
		{/if}
		{if $enable_images eq "1"}
		<tr>
		    <td align=left>{$inbox_addimage}</td>
		    <td>
			<select name="myi" class="selbox">
			    {html_options values=$myiid output=$myi selected=$smarty.request.myi}
			</select>
		    </td>
		</tr>
		{/if}
		{if $enable_videos eq "1"}
		<tr>
		    <td align=left>{$inbox_addvideo}</td>
		    <td>
			<select name="myv" class="selbox">
			    {html_options values=$myvid output=$myv selected=$smarty.request.myv}
			</select>
		    </td>
		</tr>
		{/if}
		{/if}
		<tr>
		    <td align=left valign=top>{$inbox_cmsg}</td>
		    <td colspan=2><textarea name="wmsg" class="ff" size="50" rows=15 cols=75 class="fd_max_250">{$smarty.request.wmsg}</textarea></td>
		</tr>
		<tr>
		    <td align=left valign=top></td>
		    <td colspan=4><input type="submit" name="send_msg" class="fb" value="{$inbox_csend}">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="send_cancel" class="fb" value="{$inbox_ccancel}"></td>
		</tr>
	    </table>
	    </form>
	    