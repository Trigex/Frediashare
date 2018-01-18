
<!-- BEGIN INBOX MESSAGES TABLE -->
<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
    <tr>
	<td colspan=2 class="p5"><table cellpadding="0" cellspacing="0" width="100%"><tr><td>{include file="_inc/inc_timefilters.tpl"}</td><td align=right>{if $total ne "0"}{$inbox_onr}[{$start_num}-{$end_num}]{$inbox_oof}[{$total}]{/if}</td></tr></table></td>
    </tr>
</table>
<table cellpadding="5" cellspacing="0" border=0 align=center class="width950b">
    <tr>
	<td width="20%" valign="top" class="pt15" align="left">
	    {include file="_inc/inc_msgmenu.tpl"}
	    {insert name=ad_status assign=checkleft aname=file_ads_left}
	    {if $checkleft eq "1"}
                {include file="ads/file_ads_left.tpl"}
            {/if}
	</td>
	<td width="80%" valign="top" class="nopad">
	{if $total ne "0"}<div class="pt15"><div class="pr10">{include file="_inc/inc_msgs.tpl"}</div></div>
	{else}
	    <table width="100%" cellpadding=5 cellspacing=0>
		<tr>
		    <td align=center>{$inbox_onomsg}</td>
		</tr>
	    </table>
	{/if}
	</td>
    </tr>
</table>
<!-- END INBOX MESSAGES TABLE -->
