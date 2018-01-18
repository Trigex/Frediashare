
<!-- BEGIN USER FRIENDS TABLE -->
<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
    <tr>
	<td colspan=2 class="p5"><table cellpadding="0" cellspacing="0" width="100%"><tr>{include file="_inc/inc_searchfilters.tpl"}<td align="right">{if $total ne "0"}{$userfr_nr} [{$start_num}-{$end_num}] {$userfr_of} [{$total}]{/if}</td></tr></table></td>
    </tr>
</table>
<table border="0" align="center" cellpadding="5" cellspacing="0" class="width950b">
    <tr>
	<td valign="top" colspan=2 class="nopad">
	    <table cellpadding=0 cellspacing=0 border="0" width="100%">
                <tr>
                    <td valign="top" class="nopad">
                        {include file="_inc/inc_listmembers.tpl"}
                    	<table cellpadding=0 cellspacing=2 border=0 width="100%">
			    <tr>
				<td align=center width="100%" class="pag_bg">{$link}</td>
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
<!-- END USER FRIENDS TABLE -->
