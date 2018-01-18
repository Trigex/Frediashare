    <table cellpadding=2 cellspacing=0 border=0 align="left" width="100%">
	<tr><td class="italic" colspan=2>{if $vpage_userdate eq "reg"}{$search_ntxt1}{$regon|date_format:"%d %B %Y"}{elseif $vpage_userdate eq "login"}{$search_ntxt2}{$logon|date_format:"%d %B %Y"}{/if}</td></tr>
	<tr>
	    <td valign="top">
		<table cellpadding=0 cellspacing=0 border=0 align="left">
		    <tr><td>{if $enable_audio eq "1"}<a {if $adocount ne "0"}href="{$base_url}/user_audios/{if $special_characters eq "0"}{$owner}{else}{$vuid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_audios}</span>({$adocount|viewnr})</a>{/if}</td></tr>
		    <tr><td>{if $enable_images eq "1"}<a {if $idocount ne "0"}href="{$base_url}/user_images/{if $special_characters eq "0"}{$owner}{else}{$vuid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_images}</span>({$idocount|viewnr})</a>{/if}</td></tr>
		    <tr><td>{if $enable_videos eq "1"}<a {if $vdocount ne "0"}href="{$base_url}/user_videos/{if $special_characters eq "0"}{$owner}{else}{$vuid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_videos}</span>({$vdocount|viewnr})</a>{/if}</td></tr>
		</table>
	    </td>
	    <td valign="top" class="pl10">
		<table cellpadding=0 cellspacing=0 border=0 align="left">
		    <tr><td><a {if $favcount ne "0"}href="{$base_url}/user_favorites/{if $special_characters eq "0"}{$owner}{else}{$vuid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_favorites}</span>({$favcount|viewnr})</a></td></tr>
		    <tr><td><a {if $frcount ne "0"}href="{$base_url}/user_friends/{if $special_characters eq "0"}{$owner}{else}{$vuid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_friends}</span>({$frcount|viewnr})</a></td></tr>
		    {if $enable_channels eq "1"}
    		    <tr>
        		<td>
            		    {insert name=subs_count assign=subscount uid=$vuid}
            		    <a {if $subscount ne "0"}href="{$base_url}/user/{$owner}&view=subscribers"{else}href="javascript:void(0)"{/if}><span class="gr">{$pr_chinfob28}: </span>({$subscount|viewnr})</a>
        		</td>
    		    </tr>
    		    {/if}
		</table>
	    </td>
	</tr>
    </table>
