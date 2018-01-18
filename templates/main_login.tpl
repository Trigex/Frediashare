
<!-- BEGIN MAIN LOGIN TABLE -->
<table border="0" align="center" cellpadding="2" cellspacing="0" class="width950">
    <tr>
	<td width="55%" valign="top" class="pr15">
	{insert name=footer_links assign=ltl ff=ltl}	
	{if $ltl eq "1"}
	    {include file="static/login_table_left.tpl"}
	{/if}
	{insert name=ad_status assign=check aname=login_ads1}
	{if $check eq "1"}
	    {include file="ads/login_ads1.tpl"}
	{else}
	    <br>
	{/if}
	</td>
	
	<td valign="top" width="45%">
	    {include file="auth_table.tpl"}
	{insert name=ad_status assign=check aname=login_ads2}
	{if $check eq "1"}
	    <br>
	    {include file="ads/login_ads2.tpl"}
	{else}
	    <br>
	{/if}
	</td>
    </tr>
</table>
<!-- END MAIN LOGIN TABLE -->
