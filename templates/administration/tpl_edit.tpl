<br>
<!-- BEGIN ADMIN AREA EDIT TEMPLATES TABLE -->
<table width="950" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
	<td class=""><h1>{$adm_settpleditheading}{if $showsubj eq "yes"}{$tpl[0].email_id}{else}{$tpl1[0].fname}{/if}</h1></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr><td class="grey" colspan=2></td></tr>
    <tr>
	<td valign="top" class="grey">
	    <table cellpadding=5 cellspacing=5 border=0 width="100%">
	    <form method="post" action="{$admin_url}/settings/templates/edit/{$smarty.request.edit}" encType="multipart/form-data">
	    {if $showsubj eq "yes"}
		<tr>
		    <td align=right valign=top><img src="{$img_url}/warning.gif" width="46" height="40" alt="Template Information"></td>
		    <td valign=top>
			{$adm_settpledittxt1}
			{$adm_settpledittxt2}
		    {if $smarty.request.edit eq "verify_email"}
			{$adm_settpledittxt3}
			{$adm_settpledittxt4}
			{$adm_settpledittxt5}
		    {/if}
		    {if $smarty.request.edit eq "invite_email"}
			{$adm_settpledittxt6}
			{$adm_settpledittxt3}
			{$adm_settpledittxt7}
			{$adm_settpledittxt8}
			{$adm_settpledittxt9}
			{$adm_settpledittxt10}
			{$adm_settpledittxt11}
		    {/if}
		    {if $smarty.request.edit eq "welcome_message"}
			{$adm_settpledittxt12}
			{$adm_settpledittxt3}
			{$adm_settpledittxt13}
			{$adm_settpledittxt9}
			{$adm_settpledittxt10}
		    {/if}
		    {if $smarty.request.edit eq "media_email"}
			{$adm_settpledittxt9}
			{$adm_settpledittxt10}
			{$adm_settpledittxt14}
			{$adm_settpledittxt15}
		    {/if}
		    <br>
		    </td>
		</tr>
		<tr>
		    <td valign="middle" class="types">Description: </td>
		    <td><input type="text" name="tpl_descr" class="ff" size="60" value="{$tpl[0].comment}"></td>
		</tr>
		<tr>
		    <td valign="middle" class="types">Subject: </td>
		    <td><input type="text" name="tpl_subj" class="ff" size="60" value="{$tpl[0].email_subject}"></td>
		</tr>
	    {else}
		{if $tpl1[0].ff ne "lpage"}
		<tr>
		    <td align=right valign=top><img src="{$img_url}/warning.gif" width="46" height="40" alt="Static Pages Information"></td>
		    <td valign=top>
			{$adm_settpledittxt1}
			{if $smarty.request.edit eq "ltl" or $smarty.request.edit eq "str"}
			    {$adm_settpledittxt9}
			    {$adm_settpledittxt10}<br>
			{/if}
		    </td>
		</tr>
		{/if}
		{if $smarty.request.edit ne "ltl" and $smarty.request.edit ne "str" and $smarty.request.edit ne "lt"}
		<tr>
		    <td class="types">{$adm_settplth3}</td><td><input type="text" name="renameit" class="ff" size="35" value="{if $smarty.request.renameit ne ""}{$smarty.request.renameit}{else}{$tpl1[0].fname}{/if}"></td>
		</tr>
		<tr>
		    <td class="types">{$adm_settplth4}</td><td><input type="text" name="renamefi" class="ff" size="35" value="{if $smarty.request.renamefi ne ""}{$smarty.request.renamefi}{else}{$tpl1[0].file}{/if}"></td>
		</tr>
		{/if}
		<tr>
		    <td class="types">{$adm_setadedit2}</td><td><input type="text" name="tdescr" class="ff" size="35" value="{if $smarty.request.tdescr ne ""}{$smarty.request.tdescr}{else}{$tpl1[0].fdescr}{/if}"></td>
		</tr>
		{/if}
		<tr>
		    <td valign="top" width="9%" align=right class="types">{$adm_setadedit1}</td>
		    <td class="">
			{$tpl_edit}
		    </td>
		</tr>
		<tr>
		    <td></td>
		    <td><input type="submit" name="submit" class="fb" value="{$adm_setadeditsave}">&nbsp;&nbsp;&nbsp;<input type="submit" name="tocancel" class="fb" value="{$adm_setadeditcancel}"></td>
		</tr>
	    </form>
	    </table>
	</td>
    </tr>
</table>
<!-- END ADMIN AREA EDIT TEMPLATES TABLE -->
