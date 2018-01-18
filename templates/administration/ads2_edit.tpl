
<!-- BEGIN ADMIN AREA EDIT ADS TABLE -->
<br>
<table border="0" align="center" cellpadding="2" cellspacing="0" width="950">
    <tr>
	<td><h1>{$adm_setadeditheading}{$ads[0].aname}</h1></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr><td class="grey" colspan=2></td></tr>
    <tr>
	<td valign="top" class="grey" align=center>
	    <table cellpadding=5 cellspacing=5 border=0 align=left width="100%">
	    <form method="post" action="{$admin_url}/settings/ads/edit/{$smarty.request.edit}" encType="multipart/form-data">
		<tr>
		    <td valign="top" width="5%" align=right class="types">{$adm_setadedit2}</td>
		    <td class="nopad"><input type="text" name="adescr" class="ff" size="50" value="{$ads[0].adescr}"></td>
		</tr>
		<tr>
		    <td valign="top" width="5%" align=right class="types">{$adm_setadedit1}</td>
		    <td class="nopad">
			{$ads_edit}
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
<!-- END ADMIN AREA EDIT ADS TABLE -->
