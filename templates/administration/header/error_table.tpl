
<!-- BEGIN ERROR MESSAGE TABLE -->
{if $err ne ""}
<div id="emsgdiv" style="display: block;">
<br>
<table  border="0" align="center" cellpadding="0" cellspacing="0" id="err_tbl" width="950">
    <tr>
	<td align=center>
{$err}
	</td>
	<td align="right" width="3" style="padding: 0px;"><a href="javascript:void(0)" onclick="HideContent('emsgdiv');">{$plist_txt54}</a>&nbsp;</td>
    </tr>
</table>
</div>
{/if}
<!-- END ERROR MESSAGE TABLE -->
