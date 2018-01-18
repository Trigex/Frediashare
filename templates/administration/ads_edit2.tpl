{if $smarty.request.action eq "edit"}
<!-- BEGIN ADMIN AREA EDIT ADS TABLE -->
<form action="{$admin_url}/textads/edit/{$ads.aid}" method="post" enctype="multipart/form-data">
<br>
<table width="950" align="center" cellpadding="2" cellspacing="0">
<tr>
<td>
    <table cellpadding=2 cellspacing=0 width="100%">
    <tr>
	<td colspan=3 class=""><h1>{$adm_vadseditheading}</h1></td>
    </tr>
    </table>
    <table width="950" border="0" align="center" cellpadding="3" cellspacing="0" class="br1">
    <tr>
	<td colspan=3>&nbsp;</td>
    </tr>
    <tr>
	<td width="150">&nbsp;</td>
        <td class="types" width="15%">{$adm_vadsname}</td>
        <td><input type="text" name="name" class="ff" value="{$ads.name}" size="40"></td>
    </tr>
    <tr>
	<td></td>
        <td class="types">{$adm_vadsdescr}</td>
        <td><input type="text" name="descrip" class="ff" value="{$ads.descrip}" size="40"></td>
    </tr>
    <tr>
	<td></td>
        <td class="types">{$adm_vadsurl}</td>
        <td><input type="text" name="url" class="ff" value="{$ads.url}" size="40"></td>
    </tr>
    <tr>
	<td></td>
	<td></td>
	<td align="left">
	    <input type="submit" name="edit_add" class="fb" value="{$adm_vadssave}">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="fb" name="add_cancel" value="{$adm_vadscancel}">
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
<!-- END ADMIN AREA EDIT ADS TABLE -->			
			
{elseif $smarty.request.action eq "add"}
<!-- BEGIN ADMIN AREA ADD ADS TABLE -->
<form action="{$admin_url}/textads/add" method="post" enctype="multipart/form-data">
<br>
<table width="950" align="center" cellpadding="0" cellspacing="0" id="ad_tbl">
<tr>
<td>
    <table width="100%" cellpadding=2 cellspacing=0 border=0>
    <tr>
	<td colspan=3 class=""><h1>{$adm_vadsaddheading2}</h1></td>
    </tr>
    </table>
    <table width="950" border="0" align="center" cellpadding="3" cellspacing="0" class="br1">
    <tr>
	<td colspan=3>&nbsp;</td>
    </tr>
    <tr>
	<td width="150">&nbsp;</td>
        <td class="types" width="15%">{$adm_vadsname}</td>
        <td><input type="text" name="name" class="ff" value="{$smarty.request.name}" size="40"></td>
    </tr>
    <tr>
	<td></td>
        <td class="types">{$adm_vadsdescr}</td>
        <td><input type="text" name="descrip" class="ff" value="{$smarty.request.descrip}" size="40"></td>
    </tr>
    <tr>
	<td></td>
        <td class="types">{$adm_vadsurl}</td>
        <td><input type="text" name="url" class="ff" value="{$smarty.request.url}" size="40"></td>
    </tr>
    <tr>
	<td></td>
	<td></td>
	<td align="left">
	    <input type="submit" name="save_add" class="fb" value="{$adm_vadssave}">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="fb" name="add_cancel" value="{$adm_vadscancel}">
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
<!-- END ADMIN AREA ADD ADS TABLE -->			
{/if}
