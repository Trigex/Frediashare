
<!-- BEGIN MAIN SIGNUP TABLE -->
<table border="0" align="center" cellpadding="2" cellspacing="0" class="width950">
    <tr>
	<td valign="top" width="40%">
	{insert name=footer_links assign=str ff=str}
	{if $str eq "1"}
	    {include file="static/signup_table_left.tpl"}
	{/if}

	{insert name=ad_status assign=check aname=login_ads2}
	{if $check eq "1"}
	    <br>
	    {include file="ads/login_ads2.tpl"}
	{else}
	    <br>
	{/if}
	</td>

	<td width="60%" valign="top" class="">
	    {include file="signup_table_right.tpl"}
	{insert name=ad_status assign=check aname=login_ads1}
	{if $check eq "1"}
	    {include file="ads/login_ads1.tpl"}
	{else}
	    <br>
	{/if}
	</td>
    </tr>
</table>
<!-- END MAIN SIGNUP TABLE -->
