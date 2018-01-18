<!-- BEGIN MAIN PROFILE TABLE -->
<table cellpadding="5" cellspacing="0" border=0 align="center" class="width950">
    <tr>
	<td colspan=2 align="right" class="pr30"><a href="{$base_url}/profile/{if $special_characters eq "0"}{$smarty.session.USERNAME}{else}{$smarty.session.UID}{/if}">{$mypr_view}</a></td>
    </tr>
    <tr>
	<form name="profile_form" method="post" action="{$base_url}/my_profile" enctype="multipart/form-data">
	<td width="50%" valign="top">
{include file="profile_avatar_table.tpl"}
{include file="profile_password_table.tpl"}
	</td>
	
	<td width="50%" valign="top">
{include file="profile_information_table.tpl}
	</td>
	</form>	
    </tr>
</table>
<!-- END MAIN PROFILE TABLE -->
