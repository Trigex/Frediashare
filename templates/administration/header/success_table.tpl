
<!-- BEGIN SUCCESS MESSAGE TABLE -->
{if $msg ne ""}
<div id="smsgdiv" style="display: block;">
<br>
<table  border="0" align="center" cellpadding="0" cellspacing="0" id="succ_tbl" width="950">
    <tr>
	<td align=center>
{$msg}
	</td>
	<td align="right" width="3" style="padding: 0px;"><a href="javascript:void(0)" onclick="HideContent('smsgdiv');">{$plist_txt54}</a>&nbsp;</td>
    </tr>
</table>
</div>
{/if}
<!-- END SUCCESS MESSAGE TABLE -->
