    <table cellpadding=0 cellspacing=0 border=0 align="left">
	{if $sbtn eq "adm_search"}
	<tr><td><a {if $adocount ne "0"}href="{$admin_url}/audiou/{$res[i].uid}/all/all_time{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_audios}</span>({$adocount|viewnr})</a></td></tr>
	<tr><td><a {if $idocount ne "0"}href="{$admin_url}/imageu/{$res[i].uid}/all/all_time{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_images}</span>({$idocount|viewnr})</a></td></tr>
	<tr><td><a {if $vdocount ne "0"}href="{$admin_url}/videou/{$res[i].uid}/all/all_time{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_videos}</span>({$vdocount|viewnr})</a></td></tr>
	{else}
	<tr><td>{if $enable_audio eq "1"}<a {if $adocount ne "0"}href="{$base_url}/user_audios/{if $special_characters eq "0"}{$res[i].username}{else}{$res[i].uid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_audios}</span>({$adocount|viewnr})</a>{/if}</td></tr>
	<tr><td>{if $enable_images eq "1"}<a {if $idocount ne "0"}href="{$base_url}/user_images/{if $special_characters eq "0"}{$res[i].username}{else}{$res[i].uid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_images}</span>({$idocount|viewnr})</a>{/if}</td></tr>
	<tr><td>{if $enable_videos eq "1"}<a {if $vdocount ne "0"}href="{$base_url}/user_videos/{if $special_characters eq "0"}{$res[i].username}{else}{$res[i].uid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_videos}</span>({$vdocount|viewnr})</a>{/if}</td></tr>
	{/if}
	{if $sbtn ne "adm_search"}
	<tr><td><a {if $favcount ne "0"}href="{$base_url}/user_favorites/{if $special_characters eq "0"}{$res[i].username}{else}{$res[i].uid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_favorites}</span>({$favcount|viewnr})</a></td></tr>
	<tr><td><a {if $frcount ne "0"}href="{$base_url}/user_friends/{if $special_characters eq "0"}{$res[i].username}{else}{$res[i].uid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_friends}</span>({$frcount|viewnr})</a></td></tr>
	{if $enable_channels eq "1"}
	<tr>
	    <td class="pb5">
		{insert name=subs_count assign=subscount uid=$res[i].uid}
		<a {if $subscount ne "0"}href="{$base_url}/user/{$res[i].username}&view=subscribers"{else}href="javascript:void(0)"{/if}><span class="gr">{$pr_chinfob28}: </span>({$subscount|viewnr})</a>
	    </td>
	</tr>
	{/if}
	{/if}
    </table>
