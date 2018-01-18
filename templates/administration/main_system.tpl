<!-- BEGIN ADMIN AREA SYSTEM SETTINGS TABLE -->
<br>
<table align=center width="950" border=0 cellpadding=2 cellspacing=0>
    <tr>
	<td align="left" class=""><h1>{$adm_setsysheading}</h1></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="10" cellspacing="0" class="br1" id="sysset">
    <tr>
        <td class="p10">{$adm_setsystxt}</td>
        <td align="right" class="p10"><a href="javascript:void(0)" onclick="expandall_sys();">{$adm_setexpand}</a>{$myfiles_delim}<a href="javascript:void(0)" onclick="colapseall_sys();">{$adm_setcollapse}</a></td>
    </tr>
    <tr>
	<td colspan="2">
	    <table cellpadding=10 cellspacing=0 border=0 align=left>
		<tr>
		    <td valign=top>{include file="administration/_inc/inc_systools.tpl"}</td>
		</tr>
	    </table>
	</td>
    </tr>
    <tr>
	<td class=grey width="50%" valign="top">
	    <table cellpadding=10 cellspacing=0 border=0 align=left width="100%">
		<tr>
		    <td valign=top>{include file="administration/_inc/inc_sysaudioconv.tpl"}</td>
		</tr>
		<tr>
		    <td valign=top>{include file="administration/_inc/inc_sysimageconv.tpl"}</td>
		</tr>
		<tr>
		    <td valign=top>{include file="administration/_inc/inc_sysvideoconv.tpl"}</td>
		</tr>
	    </table>
	</td>

	<td width="50%" valign=top class="grey">
	    <table cellpadding=10 cellspacing=0 border=0 align=left width="100%">
		<tr>
		    <td valign=top>{include file="administration/_inc/inc_sysfilethumb.tpl"}</td>
		</tr>
		<tr>
		    <td valign=top>{include file="administration/_inc/inc_sysfileres.tpl"}</td>
		</tr>
		<tr>
		    <td valign=top>{include file="administration/_inc/inc_sysfiledel.tpl"}</td>
		</tr>
	    </table>
	</td>
    </tr>
</table>
<!-- END ADMIN AREA SYSTEM SETTINGS TABLE -->
