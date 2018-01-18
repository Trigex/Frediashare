{if $smarty.request.edit ne ""}
<!-- BEGIN ADMIN AREA EDIT LANGUAGE TABLE -->
<form action="{$admin_url}/settings/languages/edit/{$smarty.request.edit}" method="post" enctype="multipart/form-data">
<br>
<table width="950" align="center" cellpadding="0" cellspacing="0">
<tr>
<td>
    <table width="100%" cellpadding=2 cellspacing=0 border=0>
    <tr>
	<td class=""><h1>{$adm_setlangeditheading}</h1></td>
    </tr>
    </table>
    <table width="950" border="0" align="center" cellpadding="3" cellspacing="0" class="br1">
    <tr>
	<td colspan=3>&nbsp;</td>
    </tr>
    <tr>
	<td width="150">&nbsp;</td>
        <td class="types" width="20%">{$adm_setlangname}</td>
        <td><input type="text" name="lname" class="ff" value="{if $smarty.request.lname ne ""}{$smarty.request.lname}{else}{$lng[0].name}{/if}" size="30"></td>
    </tr>
    <tr>
	<td></td>
        <td class="types">{$adm_setlangfile}</td>
        <td><input type="text" name="lfile" class="ff" value="{if $smarty.request.lfile ne ""}{$smarty.request.lfile}{else}{$lng[0].file}{/if}" size="30"></td>
    </tr>
    <tr>
	<td></td>
        <td class="types">{$adm_setlangfilex}</td>
        <td><table><tr><td>{include file="countries.tpl"}</td><td>{if $lng[0].cflag ne ""}{insert name=getarrayccode assign=ccode country=$lng[0].cflag}<img src="{$base_url}/media/files_flags/{$ccode|lower}.gif" width="16" height="11" alt="{$lng[0].cflag}">{/if}</td></tr></table></td>
    </tr>
    <tr>
	<td></td>
	<td align="right"><input type="checkbox" name="deflang" value="1" {if $lng[0].def eq "1"}checked{/if} {if $lng[0].def eq "1"}onclick="return false"{/if}></td>
	<td valign="middle">{$adm_setlangdef}</td>
    </tr>
    <tr>
	<td colspan="3" align="center"><textarea name="lang_edit" style="width: 90%; height: 480px; font-size: 14px; padding: 2px;">{$file}</textarea></td>
    </tr>
    <tr>
	<td></td>
	<td></td>
	<td align="left">
	    <input type="submit" name="save_lang" class="fb" value="{$adm_vadssave}">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="fb" name="lang_cancel" value="{$adm_vadscancel}">
	</td>
    </tr>
    <tr>
        <td colspan="3"></td>
    </tr>
    </table>
</td>
</tr>

</table>
</form>
<!-- END ADMIN AREA EDIT LANGUAGE TABLE -->			
			
{elseif $smarty.request.action eq "add"}
<!-- BEGIN ADMIN AREA ADD LANGUAGE TABLE -->
<form action="{$admin_url}/settings/languages/add" method="post" enctype="multipart/form-data">
<br>
<table width="950" align="center" cellpadding="0" cellspacing="0">
<tr>
<td>
    <table width="100%" cellpadding=2 cellspacing=0 >
    <tr>
	<td class=""><h1>{$adm_setlangaddheading}</h1></td>
    </tr>
    </table>
    <table width="950" border="0" align="center" cellpadding="3" cellspacing="0" class="br1">
    <tr>
	<td colspan=3>&nbsp;</td>
    </tr>
    <tr>
	<td width="150">&nbsp;</td>
        <td class="types" width="25%">{$adm_setlangname}</td>
        <td><input type="text" name="lname" class="ff" value="{$smarty.request.lname}" size="30"></td>
    </tr>
    <tr>
	<td></td>
        <td class="types">{$adm_setlangfile}</td>
        <td><input type="text" name="lfile" class="ff" value="{$smarty.request.lfile}" size="30"></td>
    </tr>
    <tr>
	<td></td>
        <td class="types">{$adm_setlangfilex}</td>
        <td>{include file="countries.tpl"}</td>
    </tr>
    <tr>
	<td></td>
	<td></td>
	<td align="left">
	    <input type="submit" name="save_lang" class="fb" value="{$adm_vadssave}">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="fb" name="lang_cancel" value="{$adm_vadscancel}">
	</td>
    </tr>
    <tr>
        <td colspan="3"></td>
    </tr>
    </table>
</td>
</tr>
</table>
</form>
<!-- END ADMIN AREA ADD LANGUAGE TABLE -->			
{/if}
