	    <form name="inboxmsg" method="post" action="">
	    <table border="0" cellpadding="5" cellspacing="1" width="100%">
		<tr>
		    <td class="th2" align="center"><input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmsg(document.inboxmsg['mid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmsg(document.inboxmsg['mid[]']); HideContent('actdiv'); {rdelim}"></td>
		    <td class="th2">{if $sbtn eq "inbox"}{$inbox_itblh3}{else}{$inbox_otblh2}{/if}</td>
		    <td class="th2">{$inbox_itblh2}</td>
		    <td class="th2">{if $sbtn eq "inbox"}{$inbox_itblh4}{else}{$inbox_itblh41}{/if}</td>
		</tr>
		{section name=i loop=$pms}
		<tr class="nbg">
		    <td width="3%" class="th1" align="center"><input type="checkbox" name="mid[]" value="{$pms[i].mid}" onclick="ShowContent('actdiv')"></td>
		    <td width="10%" class="th1" valign="top">
		    <div class="p5">
			{if $sbtn eq "inbox"}
			    {insert name=getfield assign=suid field=uid table=members qfield=username qvalue=$pms[i].sender}
			    {insert name=getfield assign=photo field=photo table=members qfield=username qvalue=$pms[i].sender}
			    {insert name=getfield assign=gender field=gender table=members qfield=username qvalue=$pms[i].sender}
			    {if $pms[i].sender ne $site_name}<a href="{$base_url}/profile/{if $special_characters eq "0"}{$pms[i].sender}{else}{$suid}{/if}">{else}{$pms[i].sender}{/if}
				{if $pms[i].sender ne $site_name}<img src="{$usrimg_url}/{$photo}" width="75" height="75" alt="{$pms[i].sender}" title="{$pms[i].sender}" class="{if $gender eq "M"}user_img{elseif $gender eq "F"}user_imgf{else}user_img{/if}"><br><center>{$pms[i].sender}</center>{/if}
			    </a>
			{elseif $sbtn eq "outbox"}
			    {insert name=getfield assign=suid field=uid table=members qfield=username qvalue=$pms[i].receiver}
			    {insert name=getfield assign=photo field=photo table=members qfield=username qvalue=$pms[i].receiver}
			    {insert name=getfield assign=gender field=gender table=members qfield=username qvalue=$pms[i].receiver}
			    <a href="{$base_url}/profile/{if $special_characters eq "0"}{$pms[i].receiver}{else}{$suid}{/if}">
				<img src="{$usrimg_url}/{$photo}" width="75" height="75" alt="{$pms[i].receiver}" title="{$pms[i].receiver}" class="{if $gender eq "M"}user_img{elseif $gender eq "F"}user_imgf{else}user_img{/if}"><br>
				<center>{$pms[i].receiver}</center>
			    </a>
			{/if}
		    </div>
		    </td>
		    <td valign="top" width="55%" class="th1">
			<table width="100%" cellpadding=1 cellspacing=0 border=0>
			    <tr>
				<td valign="top">
				    {if $sbtn eq "inbox"}
					<a href="{$base_url}/inbox/{$pms[i].mid}">{$pms[i].subject|spchar}</a>
				    {elseif $sbtn eq "outbox"}
					<a href="{$base_url}/outbox/{$pms[i].mid}">{$pms[i].subject|spchar}</a>
				    {/if}
				    {if $pms[i].seen eq "0" and $sbtn eq "inbox"}{$inbox_msgnew}{/if}&nbsp;
				    {if $msg_attach eq "1"}<span class="italic">{if $pms[i].faudio ne "0" and $enable_audio eq "1"}{assign var=ata value=1}{else}{assign var=ata value=0}{/if}{if $pms[i].fimage ne "0" and $enable_images eq "1"}{assign var=ati value=1}{else}{assign var=ati value=0}{/if}{if $pms[i].fvideo ne "0" and $enable_videos eq "1"}{assign var=atv value=1}{else}{assign var=atv value=0}{/if}{if $ata+$ati+$atv ne "0"}{$ata+$ati+$atv}{$inbox_txtatt}{/if}</span>{/if}
				</td>
			    </tr>
			    <tr>
				<td>{$pms[i].body|truncate:$tr_msgs:"..."|nl2br|spchar}</td>
			    </tr>
			    {if $pms[i].reply_to ne ""}
			    <tr>
				<td class="pt10">{insert name=getfield assign=body field=body table=pmessages qfield=mid qvalue=$pms[i].reply_to}
				    <span class="italic">{$inbox_msgbody}</span>{$body|truncate:$tr_msgs:"..."|nl2br|spchar}
				</td>
			    </tr>
			    {/if}
			</table>
			<table width="100%" cellpadding=1 cellspacing=0 border=0>
			    <tr>
				<td align="right" class="pt5">
				    {if $sbtn eq "inbox"}<a href="javascript:void(0)" {if $pms[i].sender ne $site_name}onclick="location.href='{$base_url}/inbox/{$pms[i].mid}'; return false;"{/if}>{$inbox_mreply}</a>{$myfiles_delim}{/if}
				    {if $sbtn eq "inbox"}<a href="javascript:void(0)" onclick="if(confirm('{$inbox_delmsg}'))location.href='{$base_url}/inbox/delete/{$pms[i].mid}'; return false;">{$inbox_itblact1}</a>
					{elseif $sbtn eq "outbox"}<a href="javascript:void(0)" onclick="if(confirm('{$inbox_delmsg}')) location.href='{$base_url}/outbox/delete/{$pms[i].mid}'; return false;">{$inbox_otblact}</a>{/if}
				{if $msg_block eq "1"}{$myfiles_delim}
				    {insert name=bstatus assign=bstatus blocked_uid=$suid}
				    {if $special_characters eq "0"}
					{insert name=getfield assign=suid field=username table=members qfield=uid qvalue=$suid}
				    {/if}
				    {if $pms[i].sender ne $site_name}
				    {if $bstatus eq "0" and $sbtn eq "inbox"}
					<a href="javascript:void(0)" onclick="location.href='{$base_url}/inbox/block/{$suid}'; return false;">{$inbox_mblock}</a>
				    {elseif $bstatus eq "1" and $sbtn eq "inbox"}
					<a href="javascript:void(0)" onclick="location.href='{$base_url}/inbox/unblock/{$suid}'; return false;">{$inbox_munblock}</a>
				    {elseif $bstatus eq "0" and $sbtn eq "outbox"}
					<a href="javascript:void(0)" onclick="location.href='{$base_url}/outbox/block/{$suid}'; return false;">{$inbox_mblock}</a>
				    {elseif $bstatus eq "1" and $sbtn eq "outbox"}
					<a href="javascript:void(0)" onclick="location.href='{$base_url}/outbox/unblock/{$suid}'; return false;">{$inbox_munblock}</a>
				    {elseif $bstatus eq "" and $sbtn eq "inbox"}
					<a href="javascript:void(0)" onclick="location.href='{$base_url}/inbox/block/{$suid}'; return false;">{$inbox_mblock}</a>
				    {elseif $bstatus eq "" and $sbtn eq "outbox"}
					<a href="javascript:void(0)" onclick="location.href='{$base_url}/outbox/block/{$suid}'; return false;">{$inbox_mblock}</a>
				    {/if}
				    {else}
					<a href="javascript:void(0)">{$inbox_mblock}</a>
				    {/if}
				{/if}
				    {if $sbtn eq "inbox"}{$myfiles_delim}
				    {if $pms[i].seen eq "0"}
				    <a href="javascript:void(0)" onclick="location.href='{$base_url}/inbox/mark/{$pms[i].mid}'; return false;">{$inbox_itblact2}</a>
				    {else}
				    <a href="javascript:void(0)" onclick="location.href='{$base_url}/inbox/unmark/{$pms[i].mid}'; return false;">{$inbox_itblact3}</a>
				    {/if}
				    {/if}
				</td>
			    </tr>
			</table>
		    </td>
		    <td valign="top" width="25%" class="th1">
			<div class="plt10">{$pms[i].date|date_format:"%B %e, %Y"}, {$pms[i].date|date_format:"%H:%M %p"}</div>
		    </td>
		</tr>
		{/section}
		<tr>
		    <td colspan=4 class="nopad" valign="top">
			{include file="_inc/inc_selectactions.tpl"}
		    </td>
		</tr>
		<tr>
		    <td colspan=4 class="pag_bg" align="center" valign="top">{$link}</td>
		</tr>
	    </table>
	</form>
