    {if $sbtn eq "mpl"}{assign var=ft value="my_history/image"}{elseif $sbtn eq "fav"}{assign var=ft value="my_favorites/image"}{elseif $sbtn eq "mql"}{assign var=ft value="my_quicklist/image"}{elseif $sbtn eq "mpl2"}{assign var=ft value="my_playlists/image"}{/if}
	{if $smarty.request.user eq ""}
	    {if $sbtn eq "mpl2"}
                    <li><a href="{if $smarty.request.iplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.iplkey}/all{/if}" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "" or $smarty.request.itype eq "all"}{/if}">{$adm_sortall}</span></a></li>
                    <li><a href="{if $smarty.request.iplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.iplkey}/date{/if}" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "date"}{/if}">{$mostrecent}</span></a></li>
                    <li><a href="{if $smarty.request.iplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.iplkey}/featured{/if}" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "featured"}{/if}">{$adm_sortfeat}</span></a></li>
                    <li><a href="{if $smarty.request.iplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.iplkey}/views{/if}" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "views"}{/if}">{$mostviewed}</span></a></li>
                    {if $file_comments eq "1"}<li><a href="{if $smarty.request.iplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.iplkey}/comments{/if}" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "comments"}{/if}">{$mostcomm}</span></a></li>{/if}
                    {if $file_responses eq "1"}<li><a href="{if $smarty.request.iplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.iplkey}/responses{/if}" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "responses"}{/if}">{$fresp_txt28}</span></a></li>{/if}
                    {if $file_ratings eq "1"}<li><a href="{if $smarty.request.iplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.iplkey}/ratings{/if}" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "ratings"}{/if}">{$toprated}</span></a></li>{/if}
                    <li><a href="{if $smarty.request.iplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.iplkey}/favorited{/if}" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "favorited"}{/if}">{$topfav}</span></a></li>
	    {else}
                    <li><a href="{$base_url}/{$ft}/all" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "" or $smarty.request.itype eq "all"}{/if}">{$adm_sortall}</span></a></li>
                    <li><a href="{$base_url}/{$ft}/date" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "date"}{/if}">{$mostrecent}</span></a></li>
                    <li><a href="{$base_url}/{$ft}/featured" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "featured"}{/if}">{$adm_sortfeat}</span></a></li>
                    <li><a href="{$base_url}/{$ft}/views" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "views"}{/if}">{$mostviewed}</span></a></li>
                    {if $file_comments eq "1"}<li><a href="{$base_url}/{$ft}/comments" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "comments"}{/if}">{$mostcomm}</span></a></li>{/if}
                    {if $file_responses eq "1"}<li><a href="{$base_url}/{$ft}/responses" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "responses"}{/if}">{$fresp_txt28}</span></a></li>{/if}
                    {if $file_ratings eq "1"}<li><a href="{$base_url}/{$ft}/ratings" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "ratings"}{/if}">{$toprated}</span></a></li>{/if}
                    <li><a href="{$base_url}/{$ft}/favorited" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "favorited"}{/if}">{$topfav}</span></a></li>
            {/if}
        {else}
            {assign var=ft1 value="user_favorites"}
	    {assign var=ft2 value="image"}
        	    <li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/all" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "" or $smarty.request.itype eq "all"}{/if}">{$adm_sortall}</span></a></li>
        	    <li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/date" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "date"}{/if}">{$mostrecent}</span></a></li>
        	    <li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/featured" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "featured"}{/if}">{$adm_sortfeat}</span></a></li>
        	    <li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/views" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "views"}{/if}">{$mostviewed}</span></a></li>
        	    {if $file_comments eq "1"}<li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/comments" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "comments"}{/if}">{$mostcomm}</span></a></li>{/if}
        	    {if $file_responses eq "1"}<li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/responses" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "responses"}{/if}">{$fresp_txt28}</span></a></li>{/if}
        	    {if $file_ratings eq "1"}<li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/ratings" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "ratings"}{/if}">{$toprated}</span></a></li>{/if}
        	    <li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/favorited" onclick="HideContent('hidem5');"><span class="{if $smarty.request.itype eq "favorited"}{/if}">{$topfav}</span></a></li>
	{/if}
