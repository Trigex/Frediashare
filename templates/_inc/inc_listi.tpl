	    <table cellpadding=0 cellspacing=0 border=0 width="100%" {if $sbtn eq "profile"}class="dottb"{else}class="p5"{/if}>
		<tr class="nbg">
		    <td valign="top">
			<table cellpadding=0 cellspacing=0 border=0 width="{$img_max_width+6}">
			    <tr>
				<td>
                    		    {insert name=titlei assign=title vkey=$imgs[i].vkey}
                    		    <div class="qlistadding bottomleft">
                    		    {if $sbtn ne "mql" and $is_admin ne "1"}
                                    <div id="ilqlistadd{$imgs[i].vkey}" class="qlisticon">
                                        <a href="javascript:void(0)" alt="{$qlist_txt1}" title="{$qlist_txt1}" onmouseover="setqlicon('on', 'image', '{$imgs[i].vkey}', 'list');" onmouseout="setqlicon('off', 'image', '{$imgs[i].vkey}', 'list');" onclick="add2ql('image', 'image', '{$imgs[i].vkey}', 'list'); add2ql('image', 'image', '{$imgs[i].vkey}', 'grid');">
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        </a>                                                                                                                                                                   
                                    </div>
                                    {/if}
                    		    {if $sbtn eq "alli"}
                                    {if $smarty.request.type eq "all"}{assign var=thetype value=all}{elseif $smarty.request.type eq "active"}{assign var=thetype value=active}{elseif $smarty.request.type eq "comments"}{assign var=thetype value=comments}{elseif $smarty.request.type eq "date"}{assign var=thetype value=date}{elseif $smarty.request.type eq "featured"}{assign var=thetype value=featured}{elseif $smarty.request.type eq "favorited"}{assign var=thetype value=favorited}{elseif $smarty.request.type eq "inactive"}{assign var=thetype value=inactive}{elseif $smarty.request.type eq "inappropriate"}{assign var=thetype value=inappropriate}{elseif $smarty.request.type eq "private"}{assign var=thetype value=private}{elseif $smarty.request.type eq "public"}{assign var=thetype value=public}{elseif $smarty.request.type eq "ratings"}{assign var=thetype value=ratings}{elseif $smarty.request.type eq "responses"}{assign var=thetype value=responses}{elseif $smarty.request.type eq "views"}{assign var=thetype value=views}{/if}
                                    <a href="{$admin_url}/{if $smarty.request.categ ne ""}imagec{elseif $smarty.request.user ne ""}imageu{else}images{/if}{if $smarty.request.categ ne ""}/{$smarty.request.categ}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{if $smarty.request.type ne ""}/{$thetype}{/if}{if $smarty.request.timesort eq ""}/all_time{else}/{$smarty.request.timesort}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/{$imgs[i].vkey}">
                                    {elseif $sbtn eq "adm_ireq"}
                                    <a href="{$admin_url}/requests/{$smarty.request.type}/{$smarty.request.show}{if $smarty.request.filter ne ""}/{$smarty.request.filter}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/{$imgs[i].vkey}">
                                    {else}
                    		    {if $same_title_uploads eq "0"}
                    		    <a href="{$base_url}/image/{$title}">
                    		    {else}
                    		    <a href="{$base_url}/image/{$imgs[i].vkey}">
                    		    {/if}
                    		    {/if}
                    		    <img src="{$tmb_url}/user{$imgs[i].uid}/{$imgs[i].vflvname}" width="{$img_max_width}" height="{$img_max_height}" alt="{$imgs[i].vtitle}" title="{$imgs[i].vtitle}" class="{if $imgs[i].vtype eq "private"}thumbp{elseif $imgs[i].is_featured eq 'yes'}thumbf{else}thumb{/if}">
                    		    </a>
                    		    </div>
                		</td>
                	    </tr>
                	    {if $sbtn eq "myimg"}
                	    <tr>
                		<td>
                		    <table cellpadding=2 cellspacing=0 align="left" width="{$img_max_width}">
                			<tr>
                			    <td align="left">{if $same_title_uploads eq "0"}<a href="javascript:void(0)" onclick="location.href='{$base_url}/my_images/edit/{$title}'; return false;">{else}<a href="javascript:void(0)" onclick="location.href='{$base_url}/my_images/edit/{$imgs[i].vkey}'; return false;">{/if}{$myfiles_edit}</a></td>
                            		    <td align="right"><a href="javascript:void(0)" onclick="if(confirm('{$myimages_del} {$imgs[i].vtitle}?!')) {if $same_title_uploads eq "0"}location.href='{$base_url}/my_images/delete/{$title}'{else}location.href='{$base_url}/my_images/delete/{$imgs[i].vkey}'{/if}; return false;">{$myfiles_delete}</a></td>
                            		</tr>
                            	    </table>
                            	</td>
                	    </tr>
                	    {elseif $sbtn eq "fav"}
                	    <tr>
                		<td>
                		    <table cellpadding=2 cellspacing=0 border=0 align="left" width="{$img_max_width}">
                        		<tr>
                            		    <td class="centered"><a href="javascript:void(0);" title="{$myfiles_delete}" onclick="javascript:if(confirm('{$myfav_imagedel}')) location.href='{$base_url}/my_favorites/image/delete/{if $same_title_uploads eq "0"}{$title}{else}{$keyi}{/if}'; return false;">{$myfiles_delete}</a></td>
                        		</tr>
                    		    </table>
                		</td>
                	    </tr>
                	    {elseif $sbtn eq "mpl"}
                	    <tr>
                		<td>
                		    <table cellpadding=2 cellspacing=0 border=0 align="left" width="{$img_max_width}">
                        		<tr>
                        		    <td class="centered"><a href="javascript:void(0);" title="{$myfiles_delete}" onclick="if(confirm('{$mypl_imagedel}')) location.href='{$base_url}/my_history/image/delete/{if $same_title_uploads eq "0"}{$title}{else}{$keyi}{/if}'; return false;">{$myfiles_delete}</a></td>
                        		</tr>
                    		    </table>
                		</td>
                	    </tr>
                	    {elseif $sbtn eq "mpl2"}
                	    <tr>
                		<td>
                		    <table cellpadding=2 cellspacing=0 border=0 align="left" width="{$img_max_width}">
                        		<tr>
                        		    <td class="centered"><a href="javascript:void(0);" title="{$myfiles_delete}" onclick="if(confirm('{$plist_txt42}')) location.href='{$base_url}/my_playlists/image/{$smarty.request.iplkey}/delete/{if $same_title_uploads eq "0"}{$title}{else}{$keyi}{/if}'; return false;">{$myfiles_delete}</a></td>
                        		</tr>
                    		    </table>
                		</td>
                	    </tr>
                	    {elseif $sbtn eq "mql"}
                	    <tr>
                		<td>
                		    <table cellpadding=2 cellspacing=0 border=0 align="left" width="{$img_max_width}">
                        		<tr>
                        		    <td class="centered"><a href="javascript:void(0);" title="{$myfiles_delete}" onclick="if(confirm('{$qlist_txt6}')) location.href='{$base_url}/my_quicklist/image/delete/{if $same_title_uploads eq "0"}{$title}{else}{$keyi}{/if}'; return false;">{$myfiles_delete}</a></td>
                        		</tr>
                    		    </table>
                		</td>
                	    </tr>
                	    {elseif $sbtn eq "alli"}
                            <tr>
                                <td>
                                    <table cellpadding=1 cellspacing=0 border=0 align="left" width="{$img_max_width}">
                                        <tr>
                                            <td class="centered"><a href="javascript:void(0);" title="{$myfiles_delete}" onClick="if(confirm('{$adm_filedel}')) location.href='{$admin_url}/{if $smarty.request.categ ne ""}imagec{elseif $smarty.request.user ne ""}imageu{else}images{/if}{if $smarty.request.categ ne ""}/{$smarty.request.categ}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{if $smarty.request.type ne ""}/{$thetype}{/if}{if $smarty.request.timesort eq ""}/all_time{else}/{$smarty.request.timesort}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/delete/{$imgs[i].vkey}'; return false;">{$myfiles_delete}</a></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            {elseif $sbtn eq "adm_ireq"}
                            <tr>
                                <td>
                                    <table cellpadding=1 cellspacing=0 border=0 align="left" width="{$img_max_width}">
                                        <tr>
                                            <td class="centered">
                                                <a href="javascript:void(0);" title="{$myfiles_delete}" onClick="if(confirm('{$adm_reqdel}')) location.href='{$admin_url}/requests/{$smarty.request.type}/{$smarty.request.show}{if $smarty.request.filter ne ""}/{$smarty.request.filter}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/delete/{$imgs[i].vkey}'; return false;">{$myfiles_delete}</a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                	    {/if}
                	</table>
            	    </td>
		    <td valign="top" class="pl10" width="55%">
                        <table cellpadding=1 cellspacing=0 border=0 width="100%">
                            <tr>
                        	<td>
                    		    {if $sbtn eq "alli"}
                                    <a href="{$admin_url}/{if $smarty.request.categ ne ""}imagec{elseif $smarty.request.user ne ""}imageu{else}images{/if}{if $smarty.request.categ ne ""}/{$smarty.request.categ}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{if $smarty.request.type ne ""}/{$thetype}{/if}{if $smarty.request.timesort eq ""}/all_time{else}/{$smarty.request.timesort}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/{$imgs[i].vkey}">
                                    {elseif $sbtn eq "adm_ireq"}
                                    <a href="{$admin_url}/requests/{$smarty.request.type}/{$smarty.request.show}{if $smarty.request.filter ne ""}/{$smarty.request.filter}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/{$imgs[i].vkey}">
                                    {else}
                        	    {if $same_title_uploads eq "0"}<a href="{$base_url}/image/{$title}" title="{$imgs[i].vtitle}">{else}<a href="{$base_url}/image/{$imgs[i].vkey}" title="{$imgs[i].vtitle}">{/if}
                        	    {/if}
                        	    <span class="mvtitle">{$imgs[i].vtitle|truncate:$tr_titlelist:"..."}</span></a>
                        	</td>
                    	    </tr>
                            <tr><td class="vdescr">{$imgs[i].vdescr|truncate:$tr_desclist:"..."|nl2br|spchar}</td></tr>
                        </table>
                    </td>
		    <td valign="middle" width="45%" class="pl10">
			<table cellpadding=0 cellspacing=0 border=0 width="100%">
			    <tr>
				<td align=left class="leftb">
				    <table cellpadding=1 cellspacing=0 border=0 width="100%" class="bold">
					<tr>
					    <td align=left colspan=2>
					    {assign var=viddur value=$imgs[i].vduration}
					    {math equation="$viddur/60" format="%0.0f" assign=minutes}
					    {math equation="$viddur - ($minutes * 60)" format="%0.0f" assign=seconds}
					    {if $seconds < 0}
				    		{math equation="$minutes - 1" assign=minutes}
				    		{math equation="$seconds + 60" assign=seconds}
					    {/if}
					    </td>
					</tr>
					{if $sbtn ne "myimg"}
					<tr>
					    <td colspan=2 class="normal"><span class="gr">{$fileadded2}</span>{insert name=time_range assign=rtime field=addtime IDFR=vid id=$imgs[i].vid tbl=files_image}{$rtime} {$fileaddedago}</td>
					</tr>
					<tr>
					    <td colspan=2>
						<span class="gr">{$fileaddedby}</span>
						{insert name=key_to_user_image assign=owner vkey=$imgs[i].vkey}
						{if $btn eq "adm_audio" or $btn eq "adm_image" or $btn eq "adm_video"}
                                                <a href="{$admin_url}/members/{$imgs[i].uid}">{$owner}</a>
                                                {else}
						<a href="{$base_url}/profile/{if $special_characters eq "0"}{$owner}{else}{$imgs[i].uid}{/if}">{$owner}</a>
						{/if}
					    </td>
					</tr>
					{else}
					<tr>
					    <td colspan=2 class="normal"><span class="gr">{$fileadded2}</span>{insert name=time_range assign=rtime field=addtime IDFR=vid id=$imgs[i].vid tbl=files_image}{$rtime} {$fileaddedago}</td>
					</tr>
					{/if}
					{if $type eq "mv" or $type eq "rf" or $type eq "tr" or $type eq "ra"}
					<tr>
					    <td colspan=2><span class="gr">{$fileviews}</span>{$imgs[i].views|viewnr}</td>
					</tr>
					{elseif $type eq "md" or $smarty.request.itype eq "comments" or $smarty.request.vtype eq "comments" or $smarty.request.type eq "comments"}
					<tr>
					    <td colspan=2>
						{insert name=nappcount2 assign=napp2 vid=$imgs[i].vid type=image}
						<span class="gr">{$filecomments}</span>{$imgs[i].comments-$napp2}
					    </td>
					</tr>
					{elseif $type eq "tf" or $smarty.request.itype eq "favorited" or $smarty.request.vtype eq "favorited" or $smarty.request.type eq "favorited"}
					<tr>
					    <td colspan=2><span class="gr">{$filefavorited}</span>{$imgs[i].vfav|viewnr}</td>
					</tr>
					{elseif $type eq "mre" or $smarty.request.itype eq "responses" or $smarty.request.vtype eq "responses" or $smarty.request.type eq "responses"}
					<tr>
					    <td colspan=2>
						{insert name=nappcount assign=napp vid=$imgs[i].vid type=image}
						<span class="gr">{$fresp_txt29}</span>{$imgs[i].responses-$napp}
					    </td>
					</tr>
					{else}
					<tr>
					    <td colspan=2><span class="gr">{$fileviews}</span>{$imgs[i].views|viewnr}</td>
					</tr>
					{/if}
					
					<tr>
					    <td class="normal">{$minutes}{$fileduration_min}{$seconds}{$fileduration_sec}</td>
					</tr>
					{if $file_ratings eq "1"}
					<tr>
					    <td>{insert name=key_to_rate_image assign=rate vkey=$imgs[i].vkey}{$rate}</td>
					</tr>
					{/if}
					{if $sbtn eq "myimg"}
					<tr>
					    <td>{if $imgs[i].vtype eq "private"}{$fileprivate}{else}{$filepublic}{/if}, {if $imgs[i].active eq "1"}{$fileapproved}{else}{$filepending}{/if}</td>
					</tr>
					{/if}
				    </table>
				</td>
			    </tr>
			</table>
		    </td>
		</tr>
	    </table>

