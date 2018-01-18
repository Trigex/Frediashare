<!-- BEGIN SIGNUP SUCCESS TABLE -->
<table border="0" align="center" cellpadding="2" cellspacing="0" class="width950">
{if $msg eq ""}
    <tr>
	<td width="60%" valign="top" class="pr15" align="center">
	    <h3>Welcome to {$site_name}, {$smarty.session.USERNAME}!</h3>
	    {$signup_success2}
	    {$signup_success3} {$site_name} {$signup_success4}<br><br>
	    {if $email_verification eq "1"}
	    {$signup_success5}
	    {/if}
	</td>
    </tr>
{elseif $msg ne ""}
{/if}
    <tr>
	<td height="30"></td>
    </tr>
    <tr>
	<td align="center">
	    <table cellpadding="5" cellspacing="0" class="br" width="70%" border=0>
		<tr>
		    <td colspan=2 class="bg" align="center"><h2>{$signup_success6}</h2></td>
		</tr>
		<tr>
		    <td colspan=2 height="20"></td>
		</tr>
		<tr>
		    <td width="50%" align="center" class="pad"><a href="{$base_url}/my_profile">{$signup_success7}</a>{$signup_success8}</td>
		    <td width="50%" align="center" class="pad"><a href="{$base_url}/categories">{$signup_success9}</a>{$signup_success10}</td>
		</tr>
		<tr>
		    <td colspan=2 height="30"></td>
		</tr>
		<tr>
		    <td width="50%" align="center" class="pad"><a href="{$base_url}/upload">{$signup_success11}</a>{$signup_success12}</td>
		    <td width="50%" align="center" class="pad">
		    {if $enable_videos eq "1"}
			{assign var=types value=videos}
		    {elseif $enable_images eq "1"}
			{assign var=types value=images}
		    {elseif $enable_audio eq "1"}
			{assign var=types value=audios}
		    {/if}
		    <a href="{$base_url}/{$types}">{$signup_success13}</a>{$signup_success14}</td>
		</tr>
		<tr>
		    <td colspan=2 height="20"></td>
		</tr>
	    </table>
	</td>
    </tr>
    <tr>
	<td height="50"></td>
    </tr>
</table>
<!-- END SIGNUP SUCCESS TABLE -->
