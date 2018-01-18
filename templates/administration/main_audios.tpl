<br>
<!-- BEGIN ADMIN AREA AUDIOS TABLE -->
<table width="950" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
	{include file="administration/_inc/inc_fileth.tpl"}
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0" class="br1">
    <tr>
	{include file="administration/_inc/inc_filefilters.tpl"}
    </tr>
    {if $sbtn ne "adm_areq"}
    <tr>
        <td colspan=2 class="pad_borderbottom">{include file="administration/_inc/inc_timefilters.tpl"}</td>
    </tr>
    {/if}
    <tr>
	<td valign="top" colspan=2 class="nopad_bg">
	    <table cellpadding=0 cellspacing=0 width="100%" border=0>
		<tr>
		    <td width="65%" valign="top">
			{include file="administration/_inc/inc_grida.tpl"}
			{include file="administration/_inc/inc_lista.tpl"}
		    </td>
		    
		    <td width="35%" valign=top class="p10">
			{include file="administration/_inc/inc_previewfiles.tpl"}
		    </td>
		</tr>
	    </table>
	</td>
    </tr>
</table>
<!-- END ADMIN AREA AUDIOS TABLE -->
