    {if $sbtn eq "mpl"}{assign var=ft value="my_history/video"}{elseif $sbtn eq "fav"}{assign var=ft value="my_favorites/video"}{elseif $sbtn eq "mql"}{assign var=ft value="my_quicklist/video"}{elseif $sbtn eq "mpl2"}{assign var=ft value="my_playlists/video"}{/if}
	{if $smarty.request.user eq ""}
	    {if $sbtn eq "mpl2"}
                    <li><a href="{if $smarty.request.vplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.vplkey}/all{/if}" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "" or $smarty.request.vtype eq "all"}{/if}">{$adm_sortall}</span></a></li>
                    <li><a href="{if $smarty.request.vplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.vplkey}/date{/if}" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "date"}{/if}">{$mostrecent}</span></a></li>
                    <li><a href="{if $smarty.request.vplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.vplkey}/featured{/if}" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "featured"}{/if}">{$adm_sortfeat}</span></a></li>
                    <li><a href="{if $smarty.request.vplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.vplkey}/views{/if}" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "views"}{/if}">{$mostviewed}</span></a></li>
                    {if $file_comments eq "1"}<li><a href="{if $smarty.request.vplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.vplkey}/comments{/if}" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "comments"}{/if}">{$mostcomm}</span></a></li>{/if}
                    {if $file_responses eq "1"}<li><a href="{if $smarty.request.vplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.vplkey}/responses{/if}" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "responses"}{/if}">{$fresp_txt28}</span></a></li>{/if}
                    {if $file_ratings eq "1"}<li><a href="{if $smarty.request.vplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.vplkey}/ratings{/if}" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "ratings"}{/if}">{$toprated}</span></a></li>{/if}
                    <li><a href="{if $smarty.request.vplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.vplkey}/favorited{/if}" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "favorited"}{/if}">{$topfav}</span></a></li>
	    {else}
                    <li><a href="{$base_url}/{$ft}/all" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "" or $smarty.request.vtype eq "all"}{/if}">{$adm_sortall}</span></a></li>
                    <li><a href="{$base_url}/{$ft}/date" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "date"}{/if}">{$mostrecent}</span></a></li>
                    <li><a href="{$base_url}/{$ft}/featured" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "featured"}{/if}">{$adm_sortfeat}</span></a></li>
                    <li><a href="{$base_url}/{$ft}/views" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "views"}{/if}">{$mostviewed}</span></a></li>
                    {if $file_comments eq "1"}<li><a href="{$base_url}/{$ft}/comments" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "comments"}{/if}">{$mostcomm}</span></a></li>{/if}
                    {if $file_responses eq "1"}<li><a href="{$base_url}/{$ft}/responses" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "responses"}{/if}">{$fresp_txt28}</span></a></li>{/if}
                    {if $file_ratings eq "1"}<li><a href="{$base_url}/{$ft}/ratings" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "ratings"}{/if}">{$toprated}</span></a></li>{/if}
                    <li><a href="{$base_url}/{$ft}/favorited" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "favorited"}{/if}">{$topfav}</span></a></li>
            {/if}
        {else}
    	    {assign var=ft1 value="user_favorites"}
    	    {assign var=ft2 value="video"}
                    <li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/all" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "" or $smarty.request.vtype eq "all"}{/if}">{$adm_sortall}</span></a></li>
                    <li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/date" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "date"}{/if}">{$mostrecent}</span></a></li>
                    <li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/featured" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "featured"}{/if}">{$adm_sortfeat}</span></a></li>
                    <li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/views" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "views"}{/if}">{$mostvieweda}</span></a></li>
                    {if $file_comments eq "1"}<li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/comments" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "comments"}{/if}">{$mostcomm}</span></a></li>{/if}
                    {if $file_responses eq "1"}<li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/responses" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "responses"}{/if}">{$fresp_txt28}</span></a></li>{/if}
                    {if $file_ratings eq "1"}<li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/ratings" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "ratings"}{/if}">{$toprated}</span></a></li>{/if}
                    <li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/favorited" onclick="HideContent('hidem6');"><span class="{if $smarty.request.vtype eq "favorited"}{/if}">{$topfav}</span></a></li>
        {/if}
