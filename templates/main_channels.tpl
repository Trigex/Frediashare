
<!-- BEGIN CHANNELS TABLE -->
<table cellpadding="5" cellspacing="0" border=0 align=center width="950" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">                                                         
    <tr>
        <td class="" colspan="3">
            {include file="_inc/inc_timefilters.tpl"}
        </td>
        <td width="20%" align="right">{if $total ne "0"}{$uch_thl4} [{$start_num}-{$end_num}]{$videos_of}[{$total}]{/if}</td>
    </tr>
</table> 
<table cellpadding="5" cellspacing="0" border=0 align=center class="width950b">
    <tr>
	<td class="nopad">
	    <form id="setview"><input type="hidden" name="viewmode" value="{$smarty.session.viewmode}"></form>
	    {include file="_inc/inc_listch.tpl"}
	</td>
    </tr>
</table>
<!-- END CHANNELS TABLE -->
