
<!-- BEGIN NEW MESSAGE TABLE -->
<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
    <tr><td class="h3"></td></tr>
</table> 
<table border="0" align="center" cellpadding="5" cellspacing="0" class="width950b">
    <tr>
	<td width="20%" valign="top" class="pt15" align="left">
	    {include file="_inc/inc_msgmenu.tpl"}
	    {insert name=ad_status assign=checkleft aname=file_ads_left}
	    {if $checkleft eq "1"}
                {include file="ads/file_ads_left.tpl"}
            {/if}
	</td>
	<td width="80%" valign="top" class="">
	    {include file="_inc/inc_msgnew.tpl"}
	</td>
    </tr>
</table>
<!-- END NEW MESSAGE TABLE -->
