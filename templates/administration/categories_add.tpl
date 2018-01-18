<!-- BEGIN ADMIN AREA ADD CATEGORIES TABLE -->
<br>
<table width="950" cellpadding=2 cellspacing=0 border=0 align=center>
    <tr>
	<td class=""><h1>{$adm_categaddheading}</h1></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="3" cellspacing="0" class="br1">
    <tr>
	<td class="grey"><br>
	    <form name="categ_add" method="post" action="" enctype="multipart/form-data">
	    <table width="80%" cellpadding="3" cellspacing="0" border=0 align=center id="cat_tbl_form">
		<tr>
		    <td width="20%" align="right" class="types">{$adm_categname}</td>
		    <td><input type="text" name="cname" class="ff" size="30" value="{$smarty.request.cname}"></td>
		</tr>
		<tr>
		    <td align="right" class="types" valign=top>{$adm_categdescr}</td>
		    <td valign=top><input name="cdescr" class="ff" size="30" value="{$smarty.request.cdescr}"></td>
		</tr>
		<tr>
		    <td align="right" class="types">{$adm_categimage}</td>
		    <td><input type="file" name="cimage" class="ff" size="35"></td>
		</tr>
	    </table><br>
	    <table width="46%" cellpadding="3" cellspacing="1" border=0 id="cat_tbl" align=center>
		<tr>
		    <td width="7%">
			<input type="submit" name="categ_save" class="fb" value="{$adm_categsavebtn}">
		    </td>
		    <td width="10">
			<input type="submit" name="categ_cancel" class="fb" value="{$adm_categcancelbtn}">
		    </td>
		</tr>
	    </table>
	    </form>
	</td>
    </tr>
</table>
<!-- END ADMIN AREA ADD CATEGORIES TABLE -->