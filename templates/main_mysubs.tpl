
<!-- BEGIN VIDEOS TABLE -->
{insert name=ad_status assign=check aname=file_ads_right}
{insert name=ad_status assign=checkleft aname=file_ads_left}
<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
    <tr>
	<td colspan=2 class="p5"><table cellpadding="0" cellspacing="0" width="100%"><tr><td>{include file="_inc/inc_timefilters.tpl"}</td><td align="right">{if $total ne "0" and $smarty.request.user ne ""}{if $smarty.request.ftype eq "videos" or $smarty.request.ftype eq "video_favorites"}{$videos_main}{elseif $smarty.request.ftype eq "images" or $smarty.request.ftype eq "image_favorites"}{$images_main}{elseif $smarty.request.ftype eq "audios" or $smarty.request.ftype eq "audio_favorites"}{$audios_main}{/if} [{$start_num}-{$end_num}]{$blocked_of}[{$total}]{/if}</td></tr></table></td>
    </tr>
</table>
<table cellpadding="5" cellspacing="0" border=0 align=center class="width950b">
    <tr>
	<td valign="top" width="15%" class="" style="padding-top: 10px;">
	    {include file="_inc/inc_subsuser.tpl"}
	    <br>
	    {include file="_inc/inc_subsfav.tpl"}
	    <br>
	    {include file="_inc/inc_subspl.tpl"}
	    {if $checkleft eq "1"}{include file="ads/file_ads_left.tpl"}{/if}
	</td>
	
	<td width="70%" valign="top" class="" style="padding-top: 10px;">
	    {if $smarty.request.user eq ""}
		{$uch_shtxt14}
	    {else}
		{if $smarty.request.ftype eq "videos" or $smarty.request.ftype eq "video_favorites"}{include file="_inc/chan/ch_fileloopv.tpl"}
		{elseif $smarty.request.ftype eq "images" or $smarty.request.ftype eq "image_favorites"}{include file="_inc/chan/ch_fileloopi.tpl"}
		{elseif $smarty.request.ftype eq "audios" or $smarty.request.ftype eq "audio_favorites"}{include file="_inc/chan/ch_fileloopa.tpl"}
		{/if}
	    {/if}
	</td>
	
	<td valign="top" width="15%">
	    {if $smarty.request.ftype ne ""}<table cellpadding="0" cellspacing="0" align="center" class="pt5">{include file="_inc/inc_viewstags.tpl"}</table><br>{/if}
	    {if $panel_rightlinks eq "1"}
	    {if $enable_videos eq "1"}
            <table cellpadding="0" cellspacing="0" align="center" border=0 class="{if $smarty.request.ftype eq ""}pt5{/if}">
        	{include file="_inc/inc_browsev.tpl"}
    	    </table><br>
    	    {/if}
    	    {if $enable_images eq "1"}
    	    <table cellpadding="0" cellspacing="0" align="center" border=0 class="{if $enable_videos eq "0"}pt5{/if}">
        	{include file="_inc/inc_browsei.tpl"}
    	    </table><br>
    	    {/if}
    	    {if $enable_audio eq "1"}
    	    <table cellpadding="0" cellspacing="0" align="center" border=0 class="{if $enable_videos eq "0" and $enable_images eq "0"}pt5{/if}">
                {include file="_inc/inc_browsea.tpl"}
            </table>
            {/if}
        {/if}
        {if $check eq "1"}
            {include file="ads/file_ads_right.tpl"}
        {/if}
	</td>
    </tr>
</table>
<form id="setview"><input type="hidden" name="viewmode" value="{$smarty.session.viewmode}"></form>
<!-- END VIDEOS TABLE -->
