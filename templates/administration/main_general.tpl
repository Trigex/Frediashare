<!-- BEGIN ADMIN AREA GENERAL SETTINGS TABLE -->
<br>
<table align=center width="950" border=0 cellpadding=2 cellspacing=0>
    <tr>
	<td align="left"><h1>{$adm_setgenheading}</h1></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="10" cellspacing="0" class="br1" id="genset">
    <tr>
	<td class=grey>
	    <table cellpadding=10 cellspacing=0 width="100%" border=0>
		<tr>
		    <td>{$adm_setgentxt}</td>
		    <td align="right">
			<a href="javascript:void(0)" onclick="expandall();">{$adm_setexpand}</a>{$myfiles_delim}
			<a href="javascript:void(0)" onclick="colapseall();">{$adm_setcollapse}</a>
		    </td>
		</tr>
		<tr>
		    <td width="50%" valign=top>
			{include file="administration/_inc/inc_setadmin.tpl"}
			<br>
			{include file="administration/_inc/inc_setsitesettings.tpl"}
			<br>
			{include file="administration/_inc/inc_setmod.tpl"}
			<br>
			{include file="administration/_inc/inc_setsiteperm.tpl"}
			<br>
			{include file="administration/_inc/inc_setvideopage.tpl"}
		    </td>
		    <td width="50%" valign=top>
			{include file="administration/_inc/inc_setrecovery.tpl"}
			<br>
			{include file="administration/_inc/inc_setemailset.tpl"}
			<br>
			{include file="administration/_inc/inc_settruncate.tpl"}
			<br>
			{include file="administration/_inc/inc_setstrings.tpl"}
			<br>
			{include file="administration/_inc/inc_setother.tpl"}
		    </td>
		</tr>
	    </table>
	</td>
    </tr>
</table>
<!-- END ADMIN AREA GENERAL SETTINGS TABLE -->
