	    {if $sbtn eq "myaud"}{assign var=ft value="my_audios"}{elseif $sbtn eq "myimg"}{assign var=ft value="my_images"}{elseif $sbtn eq "myvid"}{assign var=ft value="my_videos"}{/if}
	    {if $smarty.request.timesort ne ""}{assign var=ts value=$smarty.request.timesort}{assign var=sla value="/"}{/if}
	    <table cellpadding="0" cellspacing="0" border=0 class="width950" align="center">
		<tr>
		    <td>
			<table cellpadding="0" cellspacing="0" border=0>
			    <tr>
				<td><span style="font-size: 14px;">{if $smarty.request.user ne ""}{$smarty.request.user}'s&nbsp;{/if}{if $sbtn eq "myaud"}{$myaudio}{elseif $sbtn eq "myimg"}{$myimage}{elseif $sbtn eq "myvid"}{$myvideo}{elseif $sbtn eq "baudio"}{$snavcategaudio}{elseif $sbtn eq "bimage"}{$snavcategimage}{elseif $sbtn eq "bvideo"}{$snavcategvideo}{/if}&nbsp;&nbsp;/&nbsp;&nbsp;</span></td>
				<td>
				{if $sbtn eq "myaud" or $sbtn eq "myimg" or $sbtn eq "myvid"}
				    <ul id="{if $site_theme eq "metube"}Menu_tube2{else}Menu3{/if}" class="{if $site_theme eq "metube"}MM_tube{else}MM2{/if}" style="padding: 0px; margin: 0px; line-height: 15px;">
					<li>
					    <table cellpadding="0" cellspacing="0">
						<tr>
						    <td>
							<a href="javascript:void(0)"><span style="font-size: 14px;">{if $smarty.request.vtype eq "all" or $smarty.request.vtype eq ""}{$adm_sortall}{elseif $smarty.request.vtype eq "active"}{$adm_sortactive}{elseif $smarty.request.vtype eq "inactive"}{$adm_sortinactive}{elseif $smarty.request.vtype eq "public"}{$adm_sortpub}{elseif $smarty.request.vtype eq "private"}{$adm_sortpriv}{elseif $smarty.request.vtype eq "featured"}{$adm_sortfeat}{elseif $smarty.request.vtype eq "date"}{$search_filter3}{elseif $smarty.request.vtype eq "auditions"}{$mostvieweda}{elseif $smarty.request.vtype eq "views"}{$mostviewed}{elseif $smarty.request.vtype eq "comments"}{$mostcomm}{elseif $smarty.request.vtype eq "responses"}{$fresp_txt28}{elseif $smarty.request.vtype eq "ratings"}{$toprated}{elseif $smarty.request.vtype eq "favorited"}{$topfav}{/if}&nbsp;</span></a>
						    </td>
						</tr>
					    </table>
					    <ul id="hidem3">
						<li><a href="{$base_url}/{$ft}/all{$sla}{$ts}" onclick="HideContent('hidem3');"><span class="{if $smarty.request.vtype eq "all" or $smarty.request.vtype eq ""}{/if}">{$adm_sortall}</span></a></li>
						<li><a href="{$base_url}/{$ft}/active{$sla}{$ts}" onclick="HideContent('hidem3');"><span class="{if $smarty.request.vtype eq "active"}{/if}">{$adm_sortactive}</span></a></li>
						<li><a href="{$base_url}/{$ft}/inactive{$sla}{$ts}" onclick="HideContent('hidem3');"><span class="{if $smarty.request.vtype eq "inactive"}{/if}">{$adm_sortinactive}</span></a></li>
						<li><a href="{$base_url}/{$ft}/public{$sla}{$ts}" onclick="HideContent('hidem3');"><span class="{if $smarty.request.vtype eq "public"}{/if}">{$adm_sortpub}</span></a></li>
						<li><a href="{$base_url}/{$ft}/private{$sla}{$ts}" onclick="HideContent('hidem3');"><span class="{if $smarty.request.vtype eq "private"}{/if}">{$adm_sortpriv}</span></a></li>
						<li><a href="{$base_url}/{$ft}/featured{$sla}{$ts}" onclick="HideContent('hidem3');"><span class="{if $smarty.request.vtype eq "featured"}{/if}">{$adm_sortfeat}</span></a></li>
						<li><a href="{$base_url}/{$ft}/date{$sla}{$ts}" onclick="HideContent('hidem3');"><span class="{if $smarty.request.vtype eq "date"}{/if}">{$search_filter3}</span></a></li>
						<li>{if $sbtn eq "myaud"}<a href="{$base_url}/{$ft}/auditions{$sla}{$ts}" onclick="HideContent('hidem3');"><span class="{if $smarty.request.vtype eq "auditions"}{/if}">{$mostvieweda}</span></a>{else}<a href="{$base_url}/{$ft}/views{$sla}{$ts}" onclick="HideContent('hidem3');"><span class="{if $smarty.request.vtype eq "views"}{/if}">{$mostviewed}</span></a>{/if}</li>
						{if $file_comments eq "1"}<li><a href="{$base_url}/{$ft}/comments{$sla}{$ts}" onclick="HideContent('hidem3');"><span class="{if $smarty.request.vtype eq "comments"}{/if}">{$mostcomm}</span></a></li>{/if}
						{if $file_responses eq "1"}<li><a href="{$base_url}/{$ft}/responses{$sla}{$ts}" onclick="HideContent('hidem3');"><span class="{if $smarty.request.vtype eq "responses"}{/if}">{$fresp_txt28}</span></a></li>{/if}
						{if $file_ratings eq "1"}<li><a href="{$base_url}/{$ft}/ratings{$sla}{$ts}" onclick="HideContent('hidem3');"><span class="{if $smarty.request.vtype eq "ratings"}{/if}">{$toprated}</span></a></li>{/if}
						<li><a href="{$base_url}/{$ft}/favorited{$sla}{$ts}" onclick="HideContent('hidem3');"><span class="{if $smarty.request.vtype eq "favorited"}{/if}">{$topfav}</span></a></li>
					    </ul>
					</li>
				    </ul>
				{else}
				    <ul id="{if $site_theme eq "metube"}Menu_tube2{else}Menu3{/if}" class="{if $site_theme eq "metube"}MM_tube{else}MM2{/if}" style="padding: 0px; margin: 0px; line-height: 15px;">
					<li>
					    <table cellpadding="0" cellspacing="0">
						<tr>
						    <td>
							<a href="javascript:void(0)"><span style="font-size: 14px;">
							{if $type eq "" or $type eq "mr"}{$videos_mr}
							{elseif $type eq "mv"}{$videos_mp}
							{elseif $type eq "rf"}{$videos_rf}
							{elseif $type eq "md"}{$videos_md}
							{elseif $type eq "mre"}{$fresp_txt28}
							{elseif $type eq "tf"}{$videos_tf}
							{elseif $type eq "tr"}{$videos_tr}
							{elseif $type eq "ra"}{$videos_rnd}
							{/if}&nbsp;</span></a>
						    </td>
						</tr>
					    </table>
					    {if $smarty.session.USERNAME ne "" or $guests_file_sorting eq "1"}
					    <ul id="hidem3">
						{include file="_inc/dropmenu/dm_incfiles.tpl"}
					    </ul>
					    {/if}
					</li>
				    </ul>
				{/if}
				</td>
			    <tr>
			</table>
		    </td>
		    <td align="right">{include file="_inc/inc_fileth.tpl"}</td>
		</tr>
	    </table>
