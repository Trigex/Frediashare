
<!-- BEGIN MEMBERS TABLE -->
<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
    <tr>
        <td colspan=2 class="p5"><table cellpadding="0" cellspacing="0" width="100%"><tr>{if $act ne "invite"}{include file="_inc/inc_searchfilters.tpl"}{/if}<td align="right">{if $total ne "0"}{if $sbtn eq "myusubs"}{$uch_thl10} {else}{$mem_nr}{/if}[{$start_num}-{$end_num}]{$mem_of}[{$total}]{/if}</td></tr></table></td>
    </tr>
</table>
<table border="0" align="center" cellpadding="5" cellspacing="0" class="width950b">
    <tr>
	<td valign="top" colspan=2 class="nopad_bg">
	    <table cellpadding=0 cellspacing=0 border="0" width="100%">
        	<tr>
            	    <td valign="top">
                	{include file="_inc/inc_listmembers.tpl"}
			<table cellpadding=5 cellspacing=0 border=0 align="center">
			    <tr>
				<td class="pag_bg">{$link}</td>
			    </tr>
			</table>
            	    </td>
            	    {insert name=ad_status assign=check aname=file_ads_right}
            	    {if $check eq "1"}
            	    <td valign="top" width="20%" class="nopad">
                	{include file="ads/file_ads_right.tpl"}
            	    </td>
            	    {/if}
        	</tr>
    	    </table>
	</td>
    </tr>
</table>
<!-- END MEMBERS TABLE -->
