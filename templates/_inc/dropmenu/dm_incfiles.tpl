				{if $smarty.session.USERNAME ne "" or $guests_file_sorting eq "1"}
				    {if $btn eq "bvideo" or $btn eq "baudio" or $btn eq "bimage"}
					{if $btn eq "bvideo"}{assign var=s1 value="categories/video"}{assign var=s2 value="videos"}{assign var=s3 value="user_videos"}
					    {elseif $btn eq "bimage"}{assign var=s1 value="categories/image"}{assign var=s2 value="images"}{assign var=s3 value="user_images"}
					    {elseif $btn eq "baudio"}{assign var=s1 value="categories/audio"}{assign var=s2 value="audios"}{assign var=s3 value="user_audios"}
					{/if}
					
					{if $smarty.request.user eq ""}
					    {if $smarty.request.category ne ""}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s1}/{$smarty.request.category}/recent"><span class="{if $type eq "mr"}{else}{/if}">{$mostrecent}</span></a></li>
					    {else}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s2}/recent"><span class="{if $type eq "mr"}{else}{/if}">{$mostrecent}</span></a></li>
					    {/if}
					{else}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s3}/{$smarty.request.user}/recent"><span class="{if $type eq "mr"}{else}{/if}">{$mostrecent}</span></a></li>
					{/if}

					{if $smarty.request.user eq ""}
					    {if $smarty.request.category ne ""}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s1}/{$smarty.request.category}/featured"><span class="{if $type eq "rf"}{else}{/if}">{$recfeatured}</span></a></li>
					    {else}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s2}/featured"><span class="{if $type eq "rf"}{else}{/if}">{$recfeatured}</span></a></li>
					    {/if}
					{else}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s3}/{$smarty.request.user}/featured"><span class="{if $type eq "rf"}{else}{/if}">{$recfeatured}</span></a></li>
					{/if}

					{if $smarty.request.user eq ""}
					    {if $smarty.request.category ne ""}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s1}/{$smarty.request.category}/most_viewed"><span class="{if $type eq "mv"}{else}{/if}">{$mostviewed}</span></a></li>
					    {else}
					    {if $sbtn ne "baudio"}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s2}/most_viewed"><span class="{if $type eq "mv"}{else}{/if}">{$mostviewed}</span></a></li>
					    {elseif $sbtn eq "baudio"}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s2}/most_played"><span class="{if $type eq "mv"}{else}{/if}">{$mostvieweda}</span></a></li>
					    {/if}
					    {/if}
					{else}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s3}/{$smarty.request.user}/most_viewed"><span class="{if $type eq "mv"}{else}{/if}">{$mostviewed}</span></a></li>
					{/if}
					
					
				{if $file_comments eq "1"}
					{if $smarty.request.user eq ""}
					    {if $smarty.request.category ne ""}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s1}/{$smarty.request.category}/most_commented"><span class="{if $type eq "md"}{else}{/if}">{$mostcomm}</span></a></li>
					    {else}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s2}/most_commented"><span class="{if $type eq "md"}{else}{/if}">{$mostcomm}</span></a></li>
					    {/if}
					{else}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s3}/{$smarty.request.user}/most_commented"><span class="{if $type eq "md"}{else}{/if}">{$mostcomm}</span></a></li>					
					{/if}
				{/if}
				
				{if $file_responses eq "1"}
					{if $smarty.request.user eq ""}
					    {if $smarty.request.category ne ""}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s1}/{$smarty.request.category}/most_responded"><span class="{if $type eq "mre"}{else}{/if}">{$fresp_txt28}</span></a></li>
					    {else}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s2}/most_responded"><span class="{if $type eq "mre"}{else}{/if}">{$fresp_txt28}</span></a></li>
					    {/if}
					{else}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s3}/{$smarty.request.user}/most_responded"><span class="{if $type eq "mre"}{else}{/if}">{$fresp_txt28}</span></a></li>					
					{/if}
				{/if}
				
				{if $file_ratings eq "1"}
					{if $smarty.request.user eq ""}
					    {if $smarty.request.category ne ""}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s1}/{$smarty.request.category}/top_rated"><span class="{if $type eq "tr"}{else}{/if}">{$toprated}</span></a></li>
					    {else}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s2}/top_rated"><span class="{if $type eq "tr"}{else}{/if}">{$toprated}</span></a></li>
					    {/if}
					{else}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s3}/{$smarty.request.user}/top_rated"><span class="{if $type eq "tr"}{else}{/if}">{$toprated}</span></a></li>
					{/if}
				{/if}
				
					{if $smarty.request.user eq ""}
					    {if $smarty.request.category ne ""}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s1}/{$smarty.request.category}/top_favorites"><span class="{if $type eq "tf"}{else}{/if}">{$topfav}</span></a></li>
					    {else}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s2}/top_favorites"><span class="{if $type eq "tf"}{else}{/if}">{$topfav}</span></a></li>
					    {/if}
					{else}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s3}/{$smarty.request.user}/top_favorites"><span class="{if $type eq "tf"}{else}{/if}">{$topfav}</span></a></li>
					{/if}
					
					{if $smarty.request.user eq ""}
					    {if $smarty.request.category ne ""} 
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s1}/{$smarty.request.category}/random"><span class="{if $type eq "ra"}{else}{/if}">{$random}</a></span></li>
					    {else}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s2}/random"><span class="{if $type eq "ra"}{else}{/if}">{$random}</span></a></li>
					    {/if}
					{else}
				<li><a onclick="HideContent('hidem3');" href="{$base_url}/{$s3}/{$smarty.request.user}/random"><span class="{if $type eq "ra"}{else}{/if}">{$random}</span></a></li>
					{/if}
				    {/if}

				    {/if}
				    
