{if $smarty.request.action eq "edit"}
<!-- BEGIN ADMIN AREA EDIT ADS TABLE -->
<form action="{$admin_url}/videoads/edit/{$ads.aid}" method="post" enctype="multipart/form-data">
<br>
<table width="950" align="center" cellpadding="0" cellspacing="0">
<tr>
<td>
    <table cellpadding=2 cellspacing=0 width="100%">
    <tr>
	<td colspan=3 class=""><h1>{$adm_vadseditheading}</h1></td>
    </tr>
    </table>
    <table width="950" border="0" align="center" cellpadding="2" cellspacing="0" class="br1">
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
        <td class="types">{$adm_vadsdur}</td>
        <td><input type="text" name="duration" class="ff" value="{$ads.duration}" size="3"> {$adm_vads_sec}</td>
    </tr>
    <tr>
	<td></td>
	<td class="types" valign="top">{$adm_vadsfile}</td>
        <td valign="top">
	    <input type="file" name="picture" class="ff" size="30"><br><br>
	    {if $type1 eq 1}
		<img src="{$url_fp}/ads/{$ads.image}">
	    {/if}
	    {if $type1 eq 2}
	    <object width="{$width}" height="{$height}" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">
		<param value="{$url_fp}/ads/{$ads.image}" name="movie"/>
		<param value="high" name="quality"/>
		<embed width="{$width}" height="{$height}" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" quality="high" src="{$url_fp}/ads/{$ads.image}"/>
	    </object>
	    {/if}
	    {if $type1 eq 3}
		{$ads.image}
	    {/if}<br><br>
        </td>
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
<form action="{$admin_url}/videoads/add" method="post" enctype="multipart/form-data">
<br>
<table width="950" align="center" cellpadding="0" cellspacing="0" id="ad_tbl">
<tr>
<td>
    <table width="100%" cellpadding=3 cellspacing=0 border=0>
    <tr>
	<td colspan=3 class=""><h1>{$adm_vadsaddheading}</h1></td>
    </tr>
    </table>
    <table width="950" border="0" align="center" cellpadding="2" cellspacing="0" class="br1">
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
        <td class="types">{$adm_vadsdur}</td>
        <td><input type="text" name="duration" class="ff" value="{$smarty.request.duration}" size="3"> {$adm_vads_sec}</td>
    </tr>
    <tr>
	<td></td>
	<td class="types" valign="top">{$adm_vadsfile}</td>
        <td valign="top"><input type="file" name="picture" class="ff" size="30"><br><br></td>
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
