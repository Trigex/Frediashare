	{if $sbtn eq "alla"}{if $smarty.request.user eq "" and $smarty.request.categ eq ""}{assign var=sect value="audios"}{elseif $smarty.request.user ne ""}{assign var=sect value="audiou"}{elseif $smarty.request.categ ne ""}{assign var=sect value="audioc"}{/if}
	{elseif $sbtn eq "alli"}{if $smarty.request.user eq "" and $smarty.request.categ eq ""}{assign var=sect value="images"}{elseif $smarty.request.user ne ""}{assign var=sect value="imageu"}{elseif $smarty.request.categ ne ""}{assign var=sect value="imagec"}{/if}
	{elseif $sbtn eq "allv"}{if $smarty.request.user eq "" and $smarty.request.categ eq ""}{assign var=sect value="videos"}{elseif $smarty.request.user ne ""}{assign var=sect value="videou"}{elseif $smarty.request.categ ne ""}{assign var=sect value="videoc"}{/if}
	{/if}
	{if $sbtn eq "alla" or $sbtn eq "alli" or $sbtn eq "allv"}
	    {if $smarty.request.type eq "" or $smarty.request.type eq "all"}{assign var=flt value="/all"}
	    {elseif $smarty.request.type eq "active"}{assign var=flt value="/active"}
	    {elseif $smarty.request.type eq "views"}{assign var=flt value="/views"}
	    {elseif $smarty.request.type eq "auditions"}{assign var=flt value="/auditions"}
	    {elseif $smarty.request.type eq "comments"}{assign var=flt value="/comments"}
	    {elseif $smarty.request.type eq "date"}{assign var=flt value="/date"}
	    {elseif $smarty.request.type eq "favorited"}{assign var=flt value="/favorited"}
	    {elseif $smarty.request.type eq "featured"}{assign var=flt value="/featured"}
	    {elseif $smarty.request.type eq "inactive"}{assign var=flt value="/inactive"}
	    {elseif $smarty.request.type eq "inappropriate"}{assign var=flt value="/inappropriate"}
	    {elseif $smarty.request.type eq "private"}{assign var=flt value="/private"}
	    {elseif $smarty.request.type eq "public"}{assign var=flt value="/public"}
	    {elseif $smarty.request.type eq "ratings"}{assign var=flt value="/ratings"}
	    {elseif $smarty.request.type eq "recommended"}{assign var=flt value="/recommended"}
	    {elseif $smarty.request.type eq "responses"}{assign var=flt value="/responses"}
	    {/if}
	{/if}
	    <table cellpadding=1 cellspacing=0 border=0 width="100%">
		<tr>
		    <td>{if $sbtn eq "inbox" or $sbtn eq "outbox"}{$time_msg}{else}{$time_msgfiles}{/if}</td>
		    <td>
		    {if $smarty.request.type eq "recommended"}
			<span class="{if $smarty.request.timesort eq "all_time" or $smarty.request.timesort eq ""}act{/if}">{$time_all}</span>{$myfiles_delim}
			<span class="{if $smarty.request.timesort eq "today"}act{/if}">{$time_today}</span>{$myfiles_delim}
			<span class="{if $smarty.request.timesort eq "this_week"}act{/if}">{$time_thisweek}</span>{$myfiles_delim}
			<span class="{if $smarty.request.timesort eq "last_week"}act{/if}">{$time_lastweek}</span>{$myfiles_delim}
			<span class="{if $smarty.request.timesort eq "this_month"}act{/if}">{$time_thismonth}</span>{$myfiles_delim}
			<span class="{if $smarty.request.timesort eq "last_month"}act{/if}">{$time_lastmonth}</span>{$myfiles_delim}
			<span class="{if $smarty.request.timesort eq "this_year"}act{/if}">{$time_thisyear}</span>{$myfiles_delim}
			<span class="{if $smarty.request.timesort eq "last_year"}act{/if}">{$time_lastyear}</span>
		    {else}
			<a href="{$admin_url}/{$sect}{if $smarty.request.categ ne ""}/{$smarty.request.categ}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/all_time"><span class="{if $smarty.request.timesort eq "all_time" or $smarty.request.timesort eq ""}act{/if}">{$time_all}</span></a>{$myfiles_delim}
			<a href="{$admin_url}/{$sect}{if $smarty.request.categ ne ""}/{$smarty.request.categ}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/today"><span class="{if $smarty.request.timesort eq "today"}act{/if}">{$time_today}</span></a>{$myfiles_delim}
			<a href="{$admin_url}/{$sect}{if $smarty.request.categ ne ""}/{$smarty.request.categ}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/this_week"><span class="{if $smarty.request.timesort eq "this_week"}act{/if}">{$time_thisweek}</span></a>{$myfiles_delim}
			<a href="{$admin_url}/{$sect}{if $smarty.request.categ ne ""}/{$smarty.request.categ}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/last_week"><span class="{if $smarty.request.timesort eq "last_week"}act{/if}">{$time_lastweek}</span></a>{$myfiles_delim}
			<a href="{$admin_url}/{$sect}{if $smarty.request.categ ne ""}/{$smarty.request.categ}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/this_month"><span class="{if $smarty.request.timesort eq "this_month"}act{/if}">{$time_thismonth}</span></a>{$myfiles_delim}
			<a href="{$admin_url}/{$sect}{if $smarty.request.categ ne ""}/{$smarty.request.categ}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/last_month"><span class="{if $smarty.request.timesort eq "last_month"}act{/if}">{$time_lastmonth}</span></a>{$myfiles_delim}
			<a href="{$admin_url}/{$sect}{if $smarty.request.categ ne ""}/{$smarty.request.categ}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/this_year"><span class="{if $smarty.request.timesort eq "this_year"}act{/if}">{$time_thisyear}</span></a>{$myfiles_delim}
			<a href="{$admin_url}/{$sect}{if $smarty.request.categ ne ""}/{$smarty.request.categ}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{$flt}/last_year"><span class="{if $smarty.request.timesort eq "last_year"}act{/if}">{$time_lastyear}</span></a>
		    {/if}
		    </td>
		    <td width="250"><form id="setview"><input type="hidden" name="viewmode" value="{$smarty.session.viewmode}"></form>
			<table width="100%" cellpadding=0 cellspacing=0>
			    <tr><td align="right"><a href="javascript:void(0)" onclick="ReverseViewMode(); ReverseContentDisplay('gridview'); ReverseContentDisplay('listview'); ReverseContentDisplay('gview'); ReverseContentDisplay('lview');"><span id="lview" {if $smarty.session.viewmode eq "list"}style="display: none;"{else}style="display: block;"{/if}>{$files_listview}</span><span id="gview" {if $smarty.session.viewmode eq "grid"}style="display: none;"{else}style="display: block;"{/if}>{$files_gridview}</span></a></td></tr>
			</table>
		    </td>
		</tr>
	    </table>
