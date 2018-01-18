	{if $sbtn eq "inbox"}{assign var=sect value="inbox/sort"}
	{elseif $sbtn eq "outbox"}{assign var=sect value="outbox/sort"}
	{elseif $sbtn eq "myaud"}{assign var=sect value="my_audios"}
	{elseif $sbtn eq "myimg"}{assign var=sect value="my_images"}
	{elseif $sbtn eq "myvid"}{assign var=sect value="my_videos"}
	{elseif $sbtn eq "baudio"}{if $smarty.request.user eq "" and $smarty.request.category eq ""}{assign var=sect value="audios"}{elseif $smarty.request.user ne ""}{assign var=sect value="user_audios"}{elseif $smarty.request.category ne ""}{assign var=sect value="categories/audio"}{/if}
	{elseif $sbtn eq "bimage"}{if $smarty.request.user eq "" and $smarty.request.category eq ""}{assign var=sect value="images"}{elseif $smarty.request.user ne ""}{assign var=sect value="user_images"}{elseif $smarty.request.category ne ""}{assign var=sect value="categories/image"}{/if}
	{elseif $sbtn eq "bvideo"}{if $smarty.request.user eq "" and $smarty.request.category eq ""}{assign var=sect value="videos"}{elseif $smarty.request.user ne ""}{assign var=sect value="user_videos"}{elseif $smarty.request.category ne ""}{assign var=sect value="categories/video"}{/if}
	{/if}
	{if $sbtn eq "myaud" or $sbtn eq "myimg" or $sbtn eq "myvid"}
	    {if $smarty.request.vtype eq "" or $smarty.request.vtype eq "all"}{assign var=flt value="/all"}
	    {elseif $smarty.request.vtype eq "active"}{assign var=flt value="/active"}
	    {elseif $smarty.request.vtype eq "views"}{assign var=flt value="/views"}
	    {elseif $smarty.request.vtype eq "auditions"}{assign var=flt value="/auditions"}
	    {elseif $smarty.request.vtype eq "comments"}{assign var=flt value="/comments"}
	    {elseif $smarty.request.vtype eq "responses"}{assign var=flt value="/responses"}
	    {elseif $smarty.request.vtype eq "date"}{assign var=flt value="/date"}
	    {elseif $smarty.request.vtype eq "favorited"}{assign var=flt value="/favorited"}
	    {elseif $smarty.request.vtype eq "featured"}{assign var=flt value="/featured"}
	    {elseif $smarty.request.vtype eq "inactive"}{assign var=flt value="/inactive"}
	    {elseif $smarty.request.vtype eq "private"}{assign var=flt value="/private"}
	    {elseif $smarty.request.vtype eq "public"}{assign var=flt value="/public"}
	    {elseif $smarty.request.vtype eq "ratings"}{assign var=flt value="/ratings"}
	    {/if}
	{elseif $sbtn eq "baudio" or $sbtn eq "bimage" or $sbtn eq "bvideo"}
	    {if $smarty.request.type eq "" or $smarty.request.type eq "recent"}{assign var=flt value="/recent"}
	    {elseif $smarty.request.type eq "most_played"}{assign var=flt value="/most_played"}
	    {elseif $smarty.request.type eq "most_viewed"}{assign var=flt value="/most_viewed"}
	    {elseif $smarty.request.type eq "featured"}{assign var=flt value="/featured"}
	    {elseif $smarty.request.type eq "most_commented"}{assign var=flt value="/most_commented"}
	    {elseif $smarty.request.type eq "most_responded"}{assign var=flt value="/most_responded"}
	    {elseif $smarty.request.type eq "top_favorites"}{assign var=flt value="/top_favorites"}
	    {elseif $smarty.request.type eq "top_rated"}{assign var=flt value="/top_rated"}
	    {elseif $smarty.request.type eq "random"}{assign var=flt value="/random"}
	    {/if}
	{/if}
	    <table cellpadding=0 cellspacing=0 border=0>
		<tr>
		    <td>{if $sbtn eq "inbox" or $sbtn eq "outbox"}{$time_msg}{elseif $sbtn eq "mysubs"}<span class="gr">{$mysubs_txt1}</span>{elseif $sbtn eq "bchan"}<span class="gr">{$ch_sortxt1}</span>{else}{$time_msgfiles}{/if}</td>
		    <td class="pl5">
		    {if $sbtn eq "mysubs"}
			<table cellpadding="0" cellspacing="0" border=0 align="left">
			    <tr><td>
			{if $enable_audio eq "1"}<a {if $smarty.request.user eq "" or $smarty.request.pkey ne ""}href="javascript:void(0)"{else}href="{$base_url}/my_subscriptions/{$smarty.request.user}/{if $smarty.request.ftype eq "video_favorites" or $smarty.request.ftype eq "image_favorites" or $smarty.request.ftype eq "audio_favorites"}{assign var=r_lnk value="audio_favorites"}{elseif $smarty.request.ftype eq "audios"}{assign var=r_lnk value="audios"}{else}{assign var=r_lnk value="audios"}{/if}{$r_lnk}"{/if}><span class="{if $smarty.request.ftype eq "audios" or $smarty.request.ftype eq "audio_favorites"}act{/if}">{$audios_main}</span></a>{/if}
			{if $enable_images eq "1"}{if $enable_audio eq "1"}{$myfiles_delim}{/if}<a {if $smarty.request.user eq "" or $smarty.request.pkey ne ""}href="javascript:void(0)"{else}href="{$base_url}/my_subscriptions/{$smarty.request.user}/{if $smarty.request.ftype eq "image_favorites" or $smarty.request.ftype eq "audio_favorites" or $smarty.request.ftype eq "video_favorites"}{assign var=r_lnk value="image_favorites"}{elseif $smarty.request.ftype eq "images"}{assign var=r_lnk value="images"}{else}{assign var=r_lnk value="images"}{/if}{$r_lnk}"{/if}><span class="{if $smarty.request.ftype eq "images" or $smarty.request.ftype eq "image_favorites"}act{/if}">{$images_main}</span></a>{/if}
			{if $enable_videos eq "1"}{if $enable_images eq "1" or $enable_audio eq "1"}{$myfiles_delim}{/if}<a {if $smarty.request.user eq "" or $smarty.request.pkey ne ""}href="javascript:void(0)"{else}href="{$base_url}/my_subscriptions/{$smarty.request.user}/{if $smarty.request.ftype eq "audio_favorites" or $smarty.request.ftype eq "video_favorites" or $smarty.request.ftype eq "image_favorites"}{assign var=r_lnk value="video_favorites"}{elseif $smarty.request.ftype eq "videos"}{assign var=r_lnk value="videos"}{else}{assign var=r_lnk value="videos"}{/if}{$r_lnk}"{/if}><span class="{if $smarty.request.ftype eq "videos" or $smarty.request.ftype eq "video_favorites"}act{/if}">{$videos_main}</span></a>{/if}
			    </td></tr>
			</table>
		    {elseif $sbtn eq "bchan"}
			<table cellpadding="0" cellspacing="0" border=0 align="left">
			    <tr>
				<td><a href="{$base_url}/channels/ms{if $smarty.get.chtype ne ""}/{$smarty.get.chtype}{/if}"><span class="{if $smarty.get.sort eq "ms"}act{/if}">{$plist_txt75}</span></a>{$myfiles_delim}<a href="{$base_url}/channels/mv{if $smarty.get.chtype ne ""}/{$smarty.get.chtype}{/if}"><span class="{if $smarty.get.sort eq "" or $smarty.get.sort eq "mv"}act{/if}">{$mostviewed}</span></a></td>
			    </tr>
			</table>
		    {else}
			<a href="{$base_url}/{if $guests_file_sorting eq "0" and $smarty.session.UID eq ""}login?next={$sect}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/all_time{else}{$sect}{if $smarty.request.category ne ""}/{$smarty.request.category}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/all_time{/if}"><span class="{if $smarty.request.timesort eq "all_time" or $smarty.request.timesort eq ""}act{/if}">{$time_all}</span></a>{$myfiles_delim}
			<a href="{$base_url}/{if $guests_file_sorting eq "0" and $smarty.session.UID eq ""}login?next={$sect}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/today{else}{$sect}{if $smarty.request.category ne ""}/{$smarty.request.category}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/today{/if}"><span class="{if $smarty.request.timesort eq "today"}act{/if}">{$time_today}</span></a>{$myfiles_delim}
			<a href="{$base_url}/{if $guests_file_sorting eq "0" and $smarty.session.UID eq ""}login?next={$sect}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/this_week{else}{$sect}{if $smarty.request.category ne ""}/{$smarty.request.category}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/this_week{/if}"><span class="{if $smarty.request.timesort eq "this_week"}act{/if}">{$time_thisweek}</span></a>{$myfiles_delim}
			<a href="{$base_url}/{if $guests_file_sorting eq "0" and $smarty.session.UID eq ""}login?next={$sect}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/last_week{else}{$sect}{if $smarty.request.category ne ""}/{$smarty.request.category}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/last_week{/if}"><span class="{if $smarty.request.timesort eq "last_week"}act{/if}">{$time_lastweek}</span></a>{$myfiles_delim}
			<a href="{$base_url}/{if $guests_file_sorting eq "0" and $smarty.session.UID eq ""}login?next={$sect}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/this_month{else}{$sect}{if $smarty.request.category ne ""}/{$smarty.request.category}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/this_month{/if}"><span class="{if $smarty.request.timesort eq "this_month"}act{/if}">{$time_thismonth}</span></a>{$myfiles_delim}
			<a href="{$base_url}/{if $guests_file_sorting eq "0" and $smarty.session.UID eq ""}login?next={$sect}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/last_month{else}{$sect}{if $smarty.request.category ne ""}/{$smarty.request.category}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/last_month{/if}"><span class="{if $smarty.request.timesort eq "last_month"}act{/if}">{$time_lastmonth}</span></a>{$myfiles_delim}
			<a href="{$base_url}/{if $guests_file_sorting eq "0" and $smarty.session.UID eq ""}login?next={$sect}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/this_year{else}{$sect}{if $smarty.request.category ne ""}/{$smarty.request.category}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/this_year{/if}"><span class="{if $smarty.request.timesort eq "this_year"}act{/if}">{$time_thisyear}</span></a>{$myfiles_delim}
			<a href="{$base_url}/{if $guests_file_sorting eq "0" and $smarty.session.UID eq ""}login?next={$sect}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/last_year{else}{$sect}{if $smarty.request.category ne ""}/{$smarty.request.category}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/last_year{/if}"><span class="{if $smarty.request.timesort eq "last_year"}act{/if}">{$time_lastyear}</span></a>
		    {/if}
		    </td>
		</tr>
	    </table>
