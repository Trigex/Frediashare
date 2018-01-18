<table border="0" align="center" cellpadding="5" cellspacing="0" class="width950">
    <tr>
	<td valign="top" width="20%" class="lm">
	{insert name=ad_status assign=check aname=file_ads_right}
	{insert name=ad_status assign=checkleft aname=file_ads_left}
	    <table cellpadding="1" cellspacing="0">
		<tr>
		    <td>{$uch_thl11}</td>
		</tr>
		<tr>
		    <td class="pl10">
            <div>
            {section name=s loop=$mysubs}
        	<div><a href="{$base_url}/my_subscriptions/{$mysubs[s].subscribed_name}">{$mysubs[s].subscribed_name}</a></div>
            {/section}
            </div>
	
            {if $checkleft eq "1"}
        	{include file="ads/file_ads_left.tpl"}
            {/if}
        	    </td>
        	</tr>
    	    </table>
        </td> 
        
	<td valign="top" class="nopad_bg" {if $check eq "1" or $panel_rightlinks eq "1"}width="65%"{else}width="80%"{/if}>
	{include file="_inc/inc_listvideos.tpl"}
	</td>
        
        <td valign="top" width="20%" class="lm">
        {if $panel_rightlinks eq "1"}
    	    <table cellpadding="0" cellspacing="0" align="center" border=0>
                {include file="_inc/inc_browsea.tpl"}
                {include file="_inc/inc_browsei.tpl"}
            </table>
        {/if}
    	{if $check eq "1"}
    	    {include file="ads/file_ads_right.tpl"}
        {/if}
        </td>
    </tr>
</table>
