{if $smarty.request.action eq "edit"}
<!-- BEGIN ADMIN AREA EDIT WATERMARK TABLE -->
<form action="{$admin_url}/watermark_audio/edit/{$watermark.wid}" method="post" enctype="multipart/form-data">
<br>
<table width="950" align="center" cellpadding="2" cellspacing="0" border=0 id="wmedit_tbl">
<tr>
<td>
    <table cellpadding=2 cellspacing=0 width="100%">
    <tr>
	<td colspan=3 class=""><h1>{$adm_playeditalogo}</h1></td>
    </tr>
    </table>
    <table width="950" border="0" align="center" cellpadding="3" cellspacing="0" class="br1">
    <tr>
	<td colspan=3>&nbsp;</td>
    </tr>
    <tr>
	<td width="150"></td>
        <td class="types">{$adm_playeditv1}</td>
        <td><input type="text" name="name" class="ff" value="{$watermark.name}" size="40"></td>
    </tr>
    <tr>
	<td></td>
        <td class="types">{$adm_playeditv2}</td>
	<td><input type="text" name="descrip" class="ff" value="{$watermark.description}" size="40"></td>
    </tr>
    <tr>
	<td></td>
        <td class="types" valign="top">{$adm_playeditv7a}</td>
	<td valign="top"><input type="file" name="picture" class="ff" size="30"></td>
    </tr>
    <tr>
	<td colspan=3 align=center>
	    {if $watermark.image ne ""}
		<img src="{$url_fp}/wms_audio/{$watermark.image}">
	    {else}
		{$adm_playnoimage}
	    {/if}
	    <br><br>
	</td>
    </tr>
    <tr>
        <td colspan="3" align="center">
	    <input type="submit" name="edit_wm" class="fb" value="{$adm_playsavebtn}">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="fb" name="cancel_wm" value="{$adm_playcancelbtn}">
	</td>
    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    </table>
</td>
</tr>
</table>
</form>
<!-- END ADMIN AREA EDIT WATERMARK TABLE -->

{elseif $smarty.request.action eq "add"}
<form action="{$admin_url}/watermark_audio/add" method="post" enctype="multipart/form-data">
<!-- BEGIN ADMIN AREA ADD WATERMARK TABLE -->
<br>
<table width="950" align="center" cellpadding="2" cellspacing="0" border=0 id="wmedit_tbl">
<tr>
<td>
    <table cellpadding=2 cellspacing=0 width="100%">
    <tr>
	<td colspan=3 class=""><h1>{$adm_playaddalogo}</h1></td>
    </tr>
    </table>
    <table width="950" border="0" align="center" cellpadding="3" cellspacing="0" class="br1">
    <tr>
	<td colspan=3>&nbsp;</td>
    </tr>
    <tr>
	<td width="150">&nbsp;</td>
        <td class="types">{$adm_playeditv1}</td>
        <td><input type="text" name="name" class="ff" value="{$smarty.request.name}" size="40"></td>
    </tr>
    <tr>
	<td></td>
        <td class="types">{$adm_playeditv2}</td>
        <td><input type="text" name="descrip" class="ff" value="{$smarty.request.descrip}" size="40"></td>
    </tr>
    <tr>
	<td></td>
        <td valign="top" class="types">{$adm_playeditv7a}</td>
        <td valign="top"><input type="file" name="picture" class="ff" size="30"></td>
    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="3" align="center"><input type="submit" name="add_wm" class="fb" value="{$adm_playsavebtn}">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="fb" name="cancel_add" value="{$adm_playcancelbtn}"></td>
    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    </table>
</td>
</tr>
</table>
<!-- END ADMIN AREA ADD WATERMARK TABLE -->
</form>
{/if}
