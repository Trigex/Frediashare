    {if $sbtn eq "mpl"}{assign var=ft value="my_history/audio"}{elseif $sbtn eq "fav"}{assign var=ft value="my_favorites/audio"}{elseif $sbtn eq "mql"}{assign var=ft value="my_quicklist/audio"}{elseif $sbtn eq "mpl2"}{assign var=ft value="my_playlists/audio"}{/if}
	{if $smarty.request.user eq ""}
	    {if $sbtn eq "mpl2"}
                    <li><a href="{if $smarty.request.aplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.aplkey}/all{/if}" onclick="HideContent('hidem4');"><span class="{if $smarty.request.atype eq "" or $smarty.request.atype eq "all"}{/if}">{$adm_sortall}</span></a></li>
                    <li><a href="{if $smarty.request.aplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.aplkey}/date{/if}" onclick="HideContent('hidem4');"><span class="{if $smarty.request.atype eq "date"}{/if}">{$mostrecent}</span></a></li>
                    <li><a href="{if $smarty.request.aplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.aplkey}/featured{/if}" onclick="HideContent('hidem4');"><span class="{if $smarty.request.atype eq "featured"}{/if}">{$adm_sortfeat}</span></a></li>
                    <li><a href="{if $smarty.request.aplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.aplkey}/views{/if}" onclick="HideContent('hidem4');"><span class="{if $smarty.request.atype eq "views"}{/if}">{$mostvieweda}</span></a></li>
                    {if $file_comments eq "1"}<li onclick="HideContent('hidem4');"><a href="{if $smarty.request.aplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.aplkey}/comments{/if}"><span class="{if $smarty.request.atype eq "comments"}{/if}">{$mostcomm}</span></a></li>{/if}
                    {if $file_responses eq "1"}<li onclick="HideContent('hidem4');"><a href="{if $smarty.request.aplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.aplkey}/responses{/if}"><span class="{if $smarty.request.atype eq "responses"}{/if}">{$fresp_txt28}</span></a></li>{/if}
                    {if $file_ratings eq "1"}<li onclick="HideContent('hidem4');"><a href="{if $smarty.request.aplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.aplkey}/ratings{/if}"><span class="{if $smarty.request.atype eq "ratings"}{/if}">{$toprated}</span></a></li>{/if}
                    <li><a href="{if $smarty.request.aplkey eq ""}javascript:void(0){else}{$base_url}/{$ft}/{$smarty.request.aplkey}/favorited{/if}" onclick="HideContent('hidem4');"><span class="{if $smarty.request.atype eq "favorited"}{/if}">{$topfav}</span></a></li>
	    {else}
                    <li><a href="{$base_url}/{$ft}/all" onclick="HideContent('hidem4');"><span class="{if $smarty.request.atype eq "" or $smarty.request.atype eq "all"}{/if}">{$adm_sortall}</span></a></li>
                    <li><a href="{$base_url}/{$ft}/date" onclick="HideContent('hidem4');"><span class="{if $smarty.request.atype eq "date"}{/if}">{$mostrecent}</span></a></li>
                    <li><a href="{$base_url}/{$ft}/featured" onclick="HideContent('hidem4');"><span class="{if $smarty.request.atype eq "featured"}{/if}">{$adm_sortfeat}</span></a></li>
                    <li><a href="{$base_url}/{$ft}/views" onclick="HideContent('hidem4');"><span class="{if $smarty.request.atype eq "views"}{/if}">{$mostvieweda}</span></a></li>
                    {if $file_comments eq "1"}<li onclick="HideContent('hidem4');"><a href="{$base_url}/{$ft}/comments"><span class="{if $smarty.request.atype eq "comments"}{/if}">{$mostcomm}</span></a></li>{/if}
                    {if $file_responses eq "1"}<li onclick="HideContent('hidem4');"><a href="{$base_url}/{$ft}/responses"><span class="{if $smarty.request.atype eq "responses"}{/if}">{$fresp_txt28}</span></a></li>{/if}
                    {if $file_ratings eq "1"}<li onclick="HideContent('hidem4');"><a href="{$base_url}/{$ft}/ratings"><span class="{if $smarty.request.atype eq "ratings"}{/if}">{$toprated}</span></a></li>{/if}
                    <li><a href="{$base_url}/{$ft}/favorited" onclick="HideContent('hidem4');"><span class="{if $smarty.request.atype eq "favorited"}{/if}">{$topfav}</span></a></li>
            {/if}
        {else}
    	    {assign var=ft1 value="user_favorites"}
	    {assign var=ft2 value="audio"}
        	    <li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/all" onclick="HideContent('hidem4');"><span class="{if $smarty.request.atype eq "" or $smarty.request.atype eq "all"}{/if}">{$adm_sortall}</span></a></li>
        	    <li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/date" onclick="HideContent('hidem4');"><span class="{if $smarty.request.atype eq "date"}{/if}">{$mostrecent}</span></a></li>
        	    <li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/featured" onclick="HideContent('hidem4');"><span class="{if $smarty.request.atype eq "featured"}{/if}">{$adm_sortfeat}</span></a></li>
        	    <li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/views" onclick="HideContent('hidem4');"><span class="{if $smarty.request.atype eq "views"}{/if}">{$mostvieweda}</span></a></li>
        	    {if $file_comments eq "1"}<li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/comments" onclick="HideContent('hidem4');"><span class="{if $smarty.request.atype eq "comments"}{/if}">{$mostcomm}</span></a></li>{/if}
        	    {if $file_responses eq "1"}<li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/responses" onclick="HideContent('hidem4');"><span class="{if $smarty.request.atype eq "responses"}{/if}">{$fresp_txt28}</span></a></li>{/if}
        	    {if $file_ratings eq "1"}<li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/ratings" onclick="HideContent('hidem4');"><span class="{if $smarty.request.atype eq "ratings"}{/if}">{$toprated}</span></a></li>{/if}
        	    <li><a href="{$base_url}/{$ft1}/{$smarty.request.user}/{$ft2}/favorited" onclick="HideContent('hidem4');"><span class="{if $smarty.request.atype eq "favorited"}{/if}">{$topfav}</span></a></li>
        {/if}
