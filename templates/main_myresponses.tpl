{if $smarty.request.type eq "video"}{assign var=pv value=$videos_main}{elseif $smarty.request.type eq "image"}{assign var=pv value=$images_main}{elseif $smarty.request.type eq "audio"}{assign var=pv value=$audios_main}{/if}
<!-- BEGIN COMMENTS TABLE -->
<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
    <tr><td class="p5" align="right">{if $total ne "0"}{if $smarty.request.id eq ""}{$pv}{else}{$fresp_txt30}{/if} [{$start_num}-{$end_num}]{$blocked_of}[{$total}]{/if}</td></tr>
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
	
	<td width="80%" valign="top" class="pt15">
	    {include file="_inc/inc_responses.tpl"}
	</td>
    </tr>
</table>
<!-- END COMMENTS TABLE -->
