{if $smarty.request.action eq "edit"}
<!-- BEGIN ADMIN AREA EDIT WATERMARK TABLE -->
<form action="{$admin_url}/watermark/edit/{$watermark.wid}" method="post" enctype="multipart/form-data">
<br>
<table width="950" align="center" cellpadding="2" cellspacing="0" border=0 id="wmedit_tbl">
<tr>
<td>
    <table cellpadding=3 cellspacing=0 width="100%" border=0>
    <tr>
	<td colspan=3 class=""><h1>{$adm_playeditvlogo}</h1></td>
    </tr>
    </table>
    <table cellpadding=3 cellspacing=0 width="100%" border=0 class="br1">
    <tr>
	<td colspan=3>&nbsp;</td>
    </tr>
    <tr>
	<td width="120"></td>
        <td class="types" width="150">{$adm_playeditv1}</td>
        <td><input type="text" name="name" class="ff" value="{$watermark.name}" size="40"></td>
    </tr>
    <tr>
	<td></td>
        <td class="types">{$adm_playeditv2}</td>
	<td><input type="text" name="descrip" class="ff" value="{$watermark.description}" size="40"></td>
    </tr>
    <tr>
	<td></td>
        <td class="types">{$adm_playeditv3}</td>
        <td><input type="text" name="url" class="ff" value="{$watermark.url}" size="40"></td>
    </tr>
    <tr>
	<td></td>
	<td class="types">{$adm_playeditv4}</td>
	<td>
	    <table cellpadding=2 cellspacing=1 border=0>
		<tr>
		    <td><input type="radio" name="position" value="Top Left" {if $watermark.position eq "Top Left"}checked{else}{/if}></td><td valign="bottom">{$adm_playpos1}</td>
		    <td><input type="radio" name="position" value="Bottom Left" {if $watermark.position eq "Bottom Left"}checked{else}{/if}></td><td valign="bottom">{$adm_playpos3}</td>
		</tr>
		<tr>
		    <td><input type="radio" name="position" value="Top Right" {if $watermark.position eq "Top Right"}checked{else}{/if}></td><td valign="bottom">{$adm_playpos2}&nbsp;&nbsp;&nbsp;&nbsp;</td>
		    <td><input type="radio" name="position" value="Bottom Right" {if $watermark.position eq "Bottom Right"}checked{else}{/if}></td><td valign="bottom">{$adm_playpos4}</td>
		</tr>
	    </table>
	</td>
    </tr>
    <tr>
	<td></td>
        <td class="types">{$adm_playeditv5}</td>
        <td><input type="text" name="transparency" class="ff" value="{$watermark.transparency}" size="5"></td>
    </tr>
    <tr>
	<td></td>
        <td class="types" valign="top">{$adm_playeditv7}</td>
	<td valign="top"><input type="file" name="picture" class="ff" size="30"></td>
    </tr>
    <tr>
	<td></td>
	<td colspan=2 align=center>
	    {if $watermark.image ne ""}
		{if $xt eq ""}
		    <img src="{$url_fp}/wms/{$watermark.image}">
		{else}
		    <object width="{$width}" height="{$height}" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">
			<param value="{$url_fp}/wms/{$watermark.image}" name="movie"/>
			<param value="high" name="quality"/>
			<embed width="{$width}" height="{$height}" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" quality="high" src="{$url_fp}/wms/{$watermark.image}"/>
		    </object>
		{/if}
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
<form action="{$admin_url}/watermark/add" method="post" enctype="multipart/form-data">
<!-- BEGIN ADMIN AREA ADD WATERMARK TABLE -->
<br>
<table width="950" align="center" cellpadding="2" cellspacing="0" border=0 id="wmedit_tbl">
<tr>
<td>
    <table cellpadding=3 cellspacing=0 class="" width="100%">
    <tr>
	<td colspan=3 class=""><h1>{$adm_playaddvlogo}</h1></td>
    </tr>
    </table>
    <table cellpadding=3 cellspacing=0 class="br1" width="100%">
    <tr>
	<td colspan=3>&nbsp;</td>
    </tr>
    <tr>
	<td width="120"></td>
        <td class="types" width="150">{$adm_playeditv1}</td>
        <td><input type="text" name="name" class="ff" value="{$smarty.request.name}" size="40"></td>
    </tr>
    <tr>
	<td></td>
        <td class="types">{$adm_playeditv2}</td>
        <td><input type="text" name="descrip" class="ff" value="{$smarty.request.descrip}" size="40"></td>
    </tr>
    <tr>
	<td></td>
        <td class="types">{$adm_playeditv3}</td>
        <td><input type="text" name="url" class="ff" value="{$smarty.request.url}" size="40"></td>
    </tr>
    <tr>
	<td></td>
        <td class="types">{$adm_playeditv4}</td>
	<td>
	    <table cellpadding=2 cellspacing=1 border=0>
		<tr>
		    <td><input type="radio" name="position" value="Top Left" {if $watermark.position eq "Top Left"}checked{else}{/if}></td><td valign="bottom">{$adm_playpos1}</td>
		    <td><input type="radio" name="position" value="Bottom Left" {if $watermark.position eq "Bottom Left"}checked{else}{/if}></td><td valign="bottom">{$adm_playpos3}</td>
		</tr>
		<tr>
		    <td><input type="radio" name="position" value="Top Right" {if $watermark.position eq "Top Right"}checked{else}{/if}></td><td valign="bottom">{$adm_playpos2}&nbsp;&nbsp;&nbsp;&nbsp;</td>
		    <td><input type="radio" name="position" value="Bottom Right" {if $watermark.position eq "Bottom Right"}checked{else}{/if}></td><td valign="bottom">{$adm_playpos4}</td>
		</tr>
	    </table>
	</td>
    </tr>
    <tr>
	<td></td>
        <td valign="middle" class="types">{$adm_playeditv5}</td>
        <td><input type="text" name="transparency" class="ff" value="{$smarty.request.transparency}" size="5"></td>
    </tr>
    <tr>
	<td></td>
        <td valign="top" class="types">{$adm_playeditv7}</td>
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
