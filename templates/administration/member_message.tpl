<br>
<!-- BEGIN ADMIN AREA EMAIL MEMBER TABLE -->
<table width="950" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
	<td class=""><h1>{$adm_memmsgheading}{if $to eq "all"}{$adm_mememailheadingall}{else}{$toe}{/if}</h1></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="3" cellspacing="0" class="br1">
    <tr><td class="grey" colspan=2></td></tr>
    <tr>
	<td valign="top" class="grey" align=center>
	    <table cellpadding=5 cellspacing=0 border=0 align=left width="100%">
	    <form method="post" action="{$admin_url}/members/message/{$smarty.request.to}" encType="multipart/form-data">
		<tr>
		    <td class="types">{$adm_memsendto}</td>
		    <td align=left>
		    {if $smarty.session.mid eq ""}
			<input type="text" readonly name="toe" class="ff" value="{if $smarty.request.toe eq ""}{if $memsel[0] ne ""}{section name=i loop=$memsel}{insert name=uid_to_names assign=names uid=$memsel[i]}{$names}{if !$smarty.section.i.last},{/if}{/section}{else}{$toe}{/if}{else}{$smarty.request.toe}{/if}" size="55">
			<input type="hidden" name="mids" value="{if $smarty.request.toe eq ""}{section name=i loop=$memsel}{insert name=uid_to_names assign=names uid=$memsel[i]}{$names}{if !$smarty.section.i.last},{/if}{/section}{else}{$smarty.request.toe}{/if}">
		    {else}
			<input type="text" readonly name="toe" class="ff" value="{section name=i loop=$smarty.session.mid}{insert name=uid_to_names2 assign=names uid=$smarty.session.mid[i]}{$names}{if !$smarty.section.i.last},{/if}{/section}" size="55">
			<input type="hidden" name="mids" value="{section name=i loop=$smarty.session.mid}{insert name=uid_to_names2 assign=names uid=$smarty.session.mid[i]}{$names}{if !$smarty.section.i.last},{/if}{/section}">
		    {/if}
		    </td>
		    <td align="right"><a href="{$admin_url}/members/registered">{$adm_memback}</a></td>
		</tr>
		<tr>
		    <td class="types">{$adm_memsendsubj}</td>
		    <td colspan=2 align=left><input type="text" name="tosubj" class="ff" value="{$smarty.request.tosubj}" size="55"></td>
		</tr>
		<tr>
		    <td class="types" valign="top">{$adm_memsendmsg}</td>
		    <td colspan=2 class="">
			{$edit}
		    </td>
		</tr>
		<tr>
		    <td></td>
		    <td colspan=2><input type="submit" name="submit" class="fb" value="{$adm_memsendbtn}">&nbsp;&nbsp;&nbsp;<input type="submit" name="tocancel" class="fb" value="{$adm_memcancelbtn}"></td>
		</tr>
	    </form>
	    </table>
	</td>
    </tr>
</table>
<!-- END ADMIN AREA EMAIL MEMBER TABLE -->
