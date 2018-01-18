	{if $total ne "0" or $stbn ne "friends"}
	    {if $sbtn eq "search" or $btn eq "bmember" or $sbtn eq "friends" or $sbtn eq "ufr" or $sbtn eq "myusubs"}{assign var=turl value=$base_url}{elseif $sbtn eq "adm_search" or $btn eq "adm_members"}{assign var=turl value=$admin_url}
	{/if}
	<td colspan=2 class="">
	{if $site_theme eq "metube" and ($sbtn eq "search" or $sbtn eq "adm_search")}
	    <table cellpadding=0 cellspacing=0 width="100%" border=0>
		<tr>
		    <td {if $btn eq "adm_members"}class="plt10"{/if}>
			<table cellpadding="0" cellspacing="0" width="100%">
			    <tr>
				<td align="left">
				{if $smarty.request.searchall ne ""}{assign var=searchin value=$smarty.request.searchall}
				{elseif $smarty.request.searcha ne ""}{assign var=searchin value=$smarty.request.searcha}
				{elseif $smarty.request.searchi ne ""}{assign var=searchin value=$smarty.request.searchi}
				{elseif $smarty.request.searchv ne ""}{assign var=searchin value=$smarty.request.searchv}
				{elseif $smarty.request.searchm ne ""}{assign var=searchin value=$smarty.request.searchm}
				{elseif $smarty.request.searchp ne ""}{assign var=searchin value=$smarty.request.searchp}
				{elseif $smarty.request.searcht ne ""}{assign var=searchin value=$smarty.request.searcht}
				{/if}
				
				    <span class="gr">{$search_filter}</span>
				    <a href="{$turl}/search/all/{$searchin}"><span class="{if $smarty.request.searchall ne ""}act{/if}">{$adm_searchmixed}</span></a>{$myfiles_delim}
				    {if $enable_audio eq "1"}<a href="{$turl}/search/audios/{$searchin}"><span class="{if $smarty.request.searcha ne ""}act{/if}">{$saudios}</span></a>{$myfiles_delim}{/if}
				    {if $enable_images eq "1"}<a href="{$turl}/search/images/{$searchin}"><span class="{if $smarty.request.searchi ne ""}act{/if}">{$simages}</span></a>{$myfiles_delim}{/if}
				    {if $enable_videos eq "1"}<a href="{$turl}/search/videos/{$searchin}"><span class="{if $smarty.request.searchv ne ""}act{/if}">{$svideos}</span></a>{$myfiles_delim}{/if}
				    {if $enable_channels eq "1"}<a href="{$turl}/search/{if $enable_channels eq "1"}channels{else}members{/if}/{$searchin}"><span class="{if $smarty.request.searchm ne ""}act{/if}">{if $enable_channels eq "1"}{$uch_thl4}{else}{$smembers}{/if}</span></a>{if $sbtn ne "adm_search"}{$myfiles_delim}{/if}{/if}
				    {if $sbtn ne "adm_search"}<a href="{$turl}/search/playlists/{$searchin}"><span class="{if $smarty.request.searchp ne ""}act{/if}">{$uch_thl8}</span></a>{/if}
				</td>
				<td align="right">
			{if $smarty.request.searchm eq "" and ($sbtn eq "search" or $sbtn eq "adm_search")}
			{if $smarty.request.searchp eq ""}
			    <a href="{$turl}/search/{$lnk}/{$stype1}/featured"><span class="{if $smarty.request.filter eq "featured"}act{else}{/if}">{$adm_sortfeat}</span></a>{$myfiles_delim}
			    <a href="{$turl}/search/{$lnk}/{$stype1}/most_recent"><span class="{if $smarty.request.filter eq "most_recent"}act{else}{/if}">{$search_filter3}</span></a>{$myfiles_delim}
			    <a href="{$turl}/search/{$lnk}/{$stype1}/most_played"><span class="{if $smarty.request.filter eq "most_played"}act{else}{/if}">{$search_filter2}</span></a>{$myfiles_delim}
			    {if $file_comments eq "1"}<a href="{$turl}/search/{$lnk}/{$stype1}/most_commented"><span class="{if $smarty.request.filter eq "most_commented"}act{else}{/if}">{$search_filter1}</span></a>{$myfiles_delim}{/if}
			    {if $file_responses eq "1"}<a href="{$turl}/search/{$lnk}/{$stype1}/most_responded"><span class="{if $smarty.request.filter eq "most_responded"}act{else}{/if}">{$fresp_txt28}</span></a>{/if}
			    {if $file_ratings eq "1"}{$myfiles_delim}<a href="{$turl}/search/{$lnk}/{$stype1}/top_rated"><span class="{if $smarty.request.filter eq "top_rated"}act{else}{/if}">{$search_filter4}</span></a>{/if}
			{else}
			    <a href="{$turl}/search/{$lnk}/{$stype1}/mr"><span class="{if $smarty.request.filter eq "mr"}act{/if}">{$search_filter3}</span></a>{$myfiles_delim}
			    <a href="{$turl}/search/{$lnk}/{$stype1}/mv"><span class="{if $smarty.request.filter eq "mv"}act{/if}">{$mostviewed}</span></a>
			{/if}
			{else}
				{if $enable_channels eq "1"}<a href="{$turl}/search/{$lnk}/{$stype1}/ch_views"><span class="{if $smarty.request.filter eq "ch_views"}act{else}{/if}">{$mostviewed}</span></a>{$myfiles_delim}{/if}
				{if $enable_channels eq "1"}<a href="{$turl}/search/{$lnk}/{$stype1}/ch_subs"><span class="{if $smarty.request.filter eq "ch_subs"}act{else}{/if}">{$plist_txt75}</span></a>{$myfiles_delim}{/if}
				{if $enable_audio eq "1"}<a href="{$turl}/search/{$lnk}/{$stype1}/audio_files"><span class="{if $smarty.request.filter eq "audio_files"}act{else}{/if}">{$search_filter5}</span></a>{$myfiles_delim}{/if}
				{if $enable_images eq "1"}<a href="{$turl}/search/{$lnk}/{$stype1}/image_files"><span class="{if $smarty.request.filter eq "image_files"}act{else}{/if}">{$search_filter6}</span></a>{$myfiles_delim}{/if}
				{if $enable_videos eq "1"}<a href="{$turl}/search/{$lnk}/{$stype1}/video_files"><span class="{if $smarty.request.filter eq "video_files"}act{else}{/if}">{$search_filter7}</span></a>{$myfiles_delim}{/if}
				<a href="{$turl}/search/{$lnk}/{$stype1}/online"><span class="{if $smarty.request.filter eq "online"}act{else}{/if}">{$search_filter10}</span></a>{$myfiles_delim}
				<a href="{$turl}/search/{$lnk}/{$stype1}/offline"><span class="{if $smarty.request.filter eq "offline"}act{else}{/if}">{$search_filter11}</span></a>
			{/if}
				</td>
			    </tr>
			</table>
		    </td>
		</tr>
	    </table>
	{else}
	    <table cellpadding=0 cellspacing=0 width="100%" border=0>
		<tr>
		    <td {if $btn eq "adm_members"}class="plt10"{/if}>
			<span class="gr">{$search_filter}</span>
			{if $smarty.request.searchm eq "" and ($sbtn eq "search" or $sbtn eq "adm_search")}
			{if $smarty.request.searchp eq ""}
			    <a href="{$turl}/search/{$lnk}/{$stype1}/featured"><span class="{if $smarty.request.filter eq "featured"}act{else}{/if}">{$adm_sortfeat}</span></a>{$myfiles_delim}
			    <a href="{$turl}/search/{$lnk}/{$stype1}/most_recent"><span class="{if $smarty.request.filter eq "most_recent"}act{else}{/if}">{$search_filter3}</span></a>{$myfiles_delim}
			    <a href="{$turl}/search/{$lnk}/{$stype1}/most_played"><span class="{if $smarty.request.filter eq "most_played"}act{else}{/if}">{$search_filter2}</span></a>{$myfiles_delim}
			    {if $file_comments eq "1"}<a href="{$turl}/search/{$lnk}/{$stype1}/most_commented"><span class="{if $smarty.request.filter eq "most_commented"}act{else}{/if}">{$search_filter1}</span></a>{$myfiles_delim}{/if}
			    {if $file_responses eq "1"}<a href="{$turl}/search/{$lnk}/{$stype1}/most_responded"><span class="{if $smarty.request.filter eq "most_responded"}act{else}{/if}">{$fresp_txt28}</span></a>{/if}
			    {if $file_ratings eq "1"}{$myfiles_delim}<a href="{$turl}/search/{$lnk}/{$stype1}/top_rated"><span class="{if $smarty.request.filter eq "top_rated"}act{else}{/if}">{$search_filter4}</span></a>{/if}
			{else}
			    <a href="{$turl}/search/{$lnk}/{$stype1}/mr"><span class="{if $smarty.request.filter eq "mr"}act{/if}">{$search_filter3}</span></a>{$myfiles_delim}
			    <a href="{$turl}/search/{$lnk}/{$stype1}/mv"><span class="{if $smarty.request.filter eq "mv"}act{/if}">{$mostviewed}</span></a>
			{/if}
			{else}
			    {if $sbtn eq "search" or $sbtn eq "adm_search"}
				{if $enable_channels eq "1"}<a href="{$turl}/search/{$lnk}/{$stype1}/ch_views"><span class="{if $smarty.request.filter eq "ch_views"}act{else}{/if}">{$mostviewed}</span></a>{$myfiles_delim}{/if}
				{if $enable_channels eq "1"}<a href="{$turl}/search/{$lnk}/{$stype1}/ch_subs"><span class="{if $smarty.request.filter eq "ch_subs"}act{else}{/if}">{$plist_txt75}</span></a>{$myfiles_delim}{/if}
				{if $enable_audio eq "1"}<a href="{$turl}/search/{$lnk}/{$stype1}/audio_files"><span class="{if $smarty.request.filter eq "audio_files"}act{else}{/if}">{$search_filter5}</span></a>{$myfiles_delim}{/if}
				{if $enable_images eq "1"}<a href="{$turl}/search/{$lnk}/{$stype1}/image_files"><span class="{if $smarty.request.filter eq "image_files"}act{else}{/if}">{$search_filter6}</span></a>{$myfiles_delim}{/if}
				{if $enable_videos eq "1"}<a href="{$turl}/search/{$lnk}/{$stype1}/video_files"><span class="{if $smarty.request.filter eq "video_files"}act{else}{/if}">{$search_filter7}</span></a>{$myfiles_delim}{/if}
				<a href="{$turl}/search/{$lnk}/{$stype1}/last_joined"><span class="{if $smarty.request.filter eq "last_joined"}act{else}{/if}">{$search_filter8}</span></a>{$myfiles_delim}
				<a href="{$turl}/search/{$lnk}/{$stype1}/last_login"><span class="{if $smarty.request.filter eq "last_login"}act{else}{/if}">{$search_filter9}</span></a>{$myfiles_delim}
				<a href="{$turl}/search/{$lnk}/{$stype1}/online"><span class="{if $smarty.request.filter eq "online"}act{else}{/if}">{$search_filter10}</span></a>{$myfiles_delim}
				<a href="{$turl}/search/{$lnk}/{$stype1}/offline"><span class="{if $smarty.request.filter eq "offline"}act{else}{/if}">{$search_filter11}</span></a>
			    {elseif $btn eq "bmember" or $sbtn eq "friends" or $sbtn eq "ufr" or $btn eq "adm_members" or $sbtn eq "myusubs"}
				{if $btn eq "bmember"}{assign var=sect value="members"}{elseif $sbtn eq "myusubs"}{assign var=sect value="my_subscribers"}{elseif $btn eq "adm_members"}{assign var=admreg value="members/registered"}{elseif $sbtn eq "friends"}{assign var=sect value="my_friends"}{elseif $sbtn eq "ufr"}{assign var=sect value="user_friends"}{/if}
				{if $btn eq "adm_members"}
				    <a href="{$turl}/{$sect}{$admreg}/most_subscribed{if $smarty.get.mtype ne ""}&mtype={$smarty.get.mtype}{/if}"><span class="{if $smarty.request.filter eq "most_subscribed"}act{else}{/if}">{$plist_txt75}</span></a>{$myfiles_delim}
				    <a href="{$turl}/{$sect}{$admreg}/most_viewed{if $smarty.get.mtype ne ""}&mtype={$smarty.get.mtype}{/if}"><span class="{if $smarty.request.filter eq "most_viewed"}act{else}{/if}">{$mostviewed}</span></a>{$myfiles_delim}
				{/if}
				{if $enable_audio eq "1" or $btn eq "adm_members"}<a href="{$turl}/{$sect}{$admreg}/{if $sbtn eq "ufr"}{$smarty.request.user}/{/if}audio_files{if $smarty.get.mtype ne ""}&mtype={$smarty.get.mtype}{/if}"><span class="{if $smarty.request.filter eq "audio_files"}act{else}{/if}">{$search_filter5}</span></a>{$myfiles_delim}{/if}
				{if $enable_images eq "1" or $btn eq "adm_members"}<a href="{$turl}/{$sect}{$admreg}/{if $sbtn eq "ufr"}{$smarty.request.user}/{/if}image_files{if $smarty.get.mtype ne ""}&mtype={$smarty.get.mtype}{/if}"><span class="{if $smarty.request.filter eq "image_files"}act{else}{/if}">{$search_filter6}</span></a>{$myfiles_delim}{/if}
				{if $enable_videos eq "1" or $btn eq "adm_members"}<a href="{$turl}/{$sect}{$admreg}/{if $sbtn eq "ufr"}{$smarty.request.user}/{/if}video_files{if $smarty.get.mtype ne ""}&mtype={$smarty.get.mtype}{/if}"><span class="{if $smarty.request.filter eq "video_files"}act{else}{/if}">{$search_filter7}</span></a>{$myfiles_delim}{/if}
				<a href="{$turl}/{$sect}{$admreg}/{if $sbtn eq "ufr"}{$smarty.request.user}/{/if}last_joined{if $smarty.get.mtype ne ""}&mtype={$smarty.get.mtype}{/if}"><span class="{if $smarty.request.filter eq "last_joined"}act{else}{/if}">{$search_filter8}</span></a>{$myfiles_delim}
				<a href="{$turl}/{$sect}{$admreg}/{if $sbtn eq "ufr"}{$smarty.request.user}/{/if}last_login{if $smarty.get.mtype ne ""}&mtype={$smarty.get.mtype}{/if}"><span class="{if $smarty.request.filter eq "last_login"}act{else}{/if}">{$search_filter9}</span></a>{$myfiles_delim}
				<a href="{$turl}/{$sect}{$admreg}/{if $sbtn eq "ufr"}{$smarty.request.user}/{/if}online{if $smarty.get.mtype ne ""}&mtype={$smarty.get.mtype}{/if}"><span class="{if $smarty.request.filter eq "online"}act{else}{/if}">{$search_filter10}</span></a>{$myfiles_delim}
				<a href="{$turl}/{$sect}{$admreg}/{if $sbtn eq "ufr"}{$smarty.request.user}/{/if}offline{if $smarty.get.mtype ne ""}&mtype={$smarty.get.mtype}{/if}"><span class="{if $smarty.request.filter eq "offline"}act{else}{/if}">{$search_filter11}</span></a>
			    {/if}
			{/if}
		    </td>
		</tr>
	    </table>
	{/if}
	</td>
	{/if}
