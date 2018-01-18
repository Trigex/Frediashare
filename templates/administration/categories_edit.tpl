<!-- BEGIN ADMIN AREA EDIT CATEGORIES TABLE -->
<br>
<table width="950" cellpadding=5 cellspacing=0 border=0 align=center>
    <tr>
	<td class=""><h1>{$adm_categeditheading}</h1></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="2" cellspacing="0" class="br1">
    <tr>
	<td class="grey"><br>
	    <form name="categ_edit" method="post" action="" enctype="multipart/form-data">
	    <table width="80%" cellpadding="3" cellspacing="0" border=0 align=center id="cat_tbl_form">
		<tr>
		    <td width="20%" align="right" class="types">{$adm_categname}</td>
		    <td colspan=2><input type="text" name="cname" class="ff" size="30" value="{$catname}"></td>
		</tr>
		<tr>
		    <td align="right" class="types">{$adm_categdescr}</td>
		    <td valign=top colspan=2><input name="cdescr" class="ff" size="30" value="{$catdesc}"></td>
		</tr>
		<tr>
		    <td align="right" class="types">{$adm_categimage}</td>
		    <td width="40%"><input type="file" name="cimage" class="ff"></td>
		    <td><img src="{$catimg_url}/{$catimg}" width="{$categwidth}" height="{$categheight}" alt="{$catname}"></td>
		</tr>
	    </table><br>
	    <table width="46%" cellpadding="3" cellspacing="1" border=0 id="cat_tbl" align=center>
		<tr>
		    <td width="7%">
			<input type="submit" name="categ_edit" value="{$adm_categsavebtn}" class="fb">
			<input type="hidden" name="catid" value="{$catid}">
		    </td>
		    <td width="10">
			<input type="submit" name="categ_cancel" value="{$adm_categcancelbtn}" class="fb">
		    </td>
		</tr>
	    </table>
	    </form>
	</td>
    </tr>
</table>
<!-- END ADMIN AREA EDIT CATEGORIES TABLE -->