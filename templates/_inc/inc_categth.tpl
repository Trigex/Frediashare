<table border="0" align="right" cellpadding="0" cellspacing="0">
    <tr>
	<td align="right"><table cellpadding="2" cellspacing="0" border=0><tr>
	{if $btn eq "bcateg"}
            {if $sbtn ne "gen"}
                {if $enable_audio eq "1"}
                    {if $au eq "yes"}
                        <td><a href="{$base_url}/categories/audio/{$smarty.request.id}"><span class="{if $sbtn eq "aud"}act{else}{/if}">{$dm_categ1}</span></a>{if $enable_images eq "1"}{$myfiles_delim}{/if}</td>
                    {/if}
                {/if}
                {if $enable_images eq "1"}
                    {if $iu eq "yes"}
                        <td><a href="{$base_url}/categories/image/{$smarty.request.id}"><span class="{if $sbtn eq "img"}act{else}{/if}">{$dm_categ2}</span></a>{if $enable_videos eq "1"}{$myfiles_delim}{/if}</td>
                    {/if}
                {/if}
                {if $enable_videos eq "1"}
                    {if $vu eq "yes"}
                        <td>{if $enable_images eq "0" and $enable_audio eq "1"}{$myfiles_delim}{/if}<a href="{$base_url}/categories/video/{$smarty.request.id}"><span class="{if $sbtn eq "vid"}act{else}{/if}">{$dm_categ3}</span></a></td>
            	    {/if}
        	{/if}
    	    {/if}
        {/if}
        </tr></table></td>
    </tr>
</table>
