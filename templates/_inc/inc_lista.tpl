	    <table cellpadding="0" cellspacing="0" border="0" width="100%" {if $sbtn eq "profile"}class="dottb"{else}class="p5"{/if}>
		<tr class="nbg">
		    <td valign="top">
			<table cellpadding=0 cellspacing=0 border=0 width="{$img_max_width+6}">
			    <tr>
				<td>
                    		    {insert name=titlea assign=title vkey=$auds[i].vkey}
                    		    {insert name=vid_to_rnda assign=rnd vid=$auds[i].vid}
                            	    {insert name=vid_to_rndvv assign=rndv vid=$auds[i].vid}
                            	    <div class="qlistadding bottomleft">
                            	    {if $sbtn ne "mql" and $is_admin ne "1"}
                                    <div id="alqlistadd{$auds[i].vkey}" class="qlisticon">
                                        <a href="javascript:void(0)" alt="{$qlist_txt1}" title="{$qlist_txt1}" onmouseover="setqlicon('on', 'audio', '{$auds[i].vkey}', 'list');" onmouseout="setqlicon('off', 'audio', '{$auds[i].vkey}', 'list');" onclick="add2ql('audio', 'audio', '{$auds[i].vkey}', 'list'); add2ql('audio', 'audio', '{$auds[i].vkey}', 'grid');">
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        </a>
                                    </div>
                                    {/if}
                            	    {if $sbtn eq "alla"}
                                    {if $smarty.request.type eq "all"}{assign var=thetype value=all}{elseif $smarty.request.type eq "active"}{assign var=thetype value=active}{elseif $smarty.request.type eq "comments"}{assign var=thetype value=comments}{elseif $smarty.request.type eq "date"}{assign var=thetype value=date}{elseif $smarty.request.type eq "featured"}{assign var=thetype value=featured}{elseif $smarty.request.type eq "favorited"}{assign var=thetype value=favorited}{elseif $smarty.request.type eq "inactive"}{assign var=thetype value=inactive}{elseif $smarty.request.type eq "inappropriate"}{assign var=thetype value=inappropriate}{elseif $smarty.request.type eq "private"}{assign var=thetype value=private}{elseif $smarty.request.type eq "public"}{assign var=thetype value=public}{elseif $smarty.request.type eq "ratings"}{assign var=thetype value=ratings}{elseif $smarty.request.type eq "responses"}{assign var=thetype value=responses}{elseif $smarty.request.type eq "auditions"}{assign var=thetype value=auditions}{/if}
                                    <a href="{$admin_url}/{if $smarty.request.categ ne ""}audioc{elseif $smarty.request.user ne ""}audiou{else}audios{/if}{if $smarty.request.categ ne ""}/{$smarty.request.categ}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{if $smarty.request.type ne ""}/{$thetype}{/if}{if $smarty.request.timesort eq ""}/all_time{else}/{$smarty.request.timesort}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/{$auds[i].vkey}">
                                    {elseif $sbtn eq "adm_areq"}
                                    <a href="{$admin_url}/requests/{$smarty.request.type}/{$smarty.request.show}{if $smarty.request.filter ne ""}/{$smarty.request.filter}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/{$auds[i].vkey}">
                                    {else}
                    		    {if $same_title_uploads eq "0"}
                    		    <a href="{$base_url}/audio/{$title}">
                    		    {else}
                    		    <a href="{$base_url}/audio/{$auds[i].vkey}">
                    		    {/if}
                    		    {/if}
                    		    <img src="{$tmb_url}/user{$auds[i].uid}/{$rndv}_{$rnd}.jpg" width="{$img_max_width}" height="{$img_max_height}" alt="{$auds[i].vtitle}" title="{$auds[i].vtitle}" class="{if $auds[i].vtype eq "private"}thumbp{elseif $auds[i].is_featured eq 'yes'}thumbf{else}thumb{/if}">
                    		    </a>
                    		    </div>
                    		</td>
                    	    </tr>
                    	    {if $sbtn eq "myaud"}
                    	    <tr>
                    		<td>
                    		    <table cellpadding=2 cellspacing=0 align="left" border=0 width="{$img_max_width}">
                    			<tr>
                    			    <td align="left">{if $same_title_uploads eq "0"}<a href="javascript:void(0)" onclick="location.href='{$base_url}/my_audios/edit/{$title}'; return false;">{else}<a href="javascript:void(0)" onclick="location.href='{$base_url}/my_audios/edit/{$auds[i].vkey}'; return false;">{/if}{$myfiles_edit}</a></td>
                    			    <td align="right"><a href="javascript:void(0)" onclick="if(confirm('{$myaudios_del} {$auds[i].vtitle}?!')) {if $same_title_uploads eq "0"}location.href='{$base_url}/my_audios/delete/{$title}'{else}location.href='{$base_url}/my_audios/delete/{$auds[i].vkey}'{/if}; return false;">{$myfiles_delete}</a></td>
                    			</tr>
                    		    </table>
                    		</td>
                    	    </tr>
                    	    {elseif $sbtn eq "fav"}
                    	    <tr>
                    		<td>
                    		    <table cellpadding=2 cellspacing=0 border=0 align="left" width="{$img_max_width}">
                        		<tr>
                            		    <td class="centered"><a href="javascript:void(0);" title="{$myfiles_delete}" onclick="javascript:if(confirm('{$myfav_audiodel}')) location.href='{$base_url}/my_favorites/audio/delete/{if $same_title_uploads eq "0"}{$title}{else}{$keya}{/if}'; return false;">{$myfiles_delete}</a></td>
                        		</tr>
                    		    </table>
                    		</td>
                    	    </tr>
                    	    {elseif $sbtn eq "mpl"}
                    	    <tr>
                    		<td>
                    		    <table cellpadding=2 cellspacing=0 border=0 align="left" width="{$img_max_width}">
                        		<tr>
                        		    <td class="centered"><a href="javascript:void(0);" title="{$myfiles_delete}" onclick="if(confirm('{$mypl_audiodel}')) location.href='{$base_url}/my_history/audio/delete/{if $same_title_uploads eq "0"}{$title}{else}{$keya}{/if}'; return false;">{$myfiles_delete}</a></td>
                        		</tr>
                    		    </table>
                    		</td>
                    	    </tr>
                    	    {elseif $sbtn eq "mpl2"}
                    	    <tr>
                    		<td>
                    		    <table cellpadding=2 cellspacing=0 border=0 align="left" width="{$img_max_width}">
                        		<tr>
                        		    <td class="centered"><a href="javascript:void(0);" title="{$myfiles_delete}" onclick="if(confirm('{$plist_txt42}')) location.href='{$base_url}/my_playlists/audio/{$smarty.request.aplkey}/delete/{if $same_title_uploads eq "0"}{$title}{else}{$keya}{/if}'; return false;">{$myfiles_delete}</a></td>
                        		</tr>
                    		    </table>
                    		</td>
                    	    </tr>
                    	    {elseif $sbtn eq "mql"}
                    	    <tr>
                    		<td>
                    		    <table cellpadding=2 cellspacing=0 border=0 align="left" width="{$img_max_width}">
                        		<tr>
                        		    <td class="centered"><a href="javascript:void(0);" title="{$myfiles_delete}" onclick="if(confirm('{$qlist_txt5}')) location.href='{$base_url}/my_quicklist/audio/delete/{if $same_title_uploads eq "0"}{$title}{else}{$keya}{/if}'; return false;">{$myfiles_delete}</a></td>
                        		</tr>
                    		    </table>
                    		</td>
                    	    </tr>
                    	    {elseif $sbtn eq "alla"}
                            <tr>
                                <td>
                                    <table cellpadding=2 cellspacing=0 border=0 align="left" width="{$img_max_width}">
                                        <tr>
                                            <td class="centered"><a href="javascript:void(0);" title="{$myfiles_delete}" onClick="if(confirm('{$adm_filedel}')) location.href='{$admin_url}/{if $smarty.request.categ ne ""}audioc{elseif $smarty.request.user ne ""}audiou{else}audios{/if}{if $smarty.request.categ ne ""}/{$smarty.request.categ}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{if $smarty.request.type ne ""}/{$thetype}{/if}{if $smarty.request.timesort eq ""}/all_time{else}/{$smarty.request.timesort}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/delete/{$auds[i].vkey}'; return false;">{$myfiles_delete}</a></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            {elseif $sbtn eq "adm_areq"}
                            <tr>
                                <td>
                                    <table cellpadding=2 cellspacing=0 border=0 align="left" width="{$img_max_width}">
                                        <tr>
                                            <td class="centered">
                                                <a href="javascript:void(0);" title="{$myfiles_delete}" onClick="if(confirm('{$adm_reqdel}')) location.href='{$admin_url}/requests/{$smarty.request.type}/{$smarty.request.show}{if $smarty.request.filter ne ""}/{$smarty.request.filter}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/delete/{$auds[i].vkey}'; return false;">{$myfiles_delete}</a>
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
                        	    {if $sbtn eq "alla"}
                                    <a href="{$admin_url}/{if $smarty.request.categ ne ""}audioc{elseif $smarty.request.user ne ""}audiou{else}audios{/if}{if $smarty.request.categ ne ""}/{$smarty.request.categ}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{if $smarty.request.type ne ""}/{$thetype}{/if}{if $smarty.request.timesort eq ""}/all_time{else}/{$smarty.request.timesort}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/{$auds[i].vkey}">
                                    {elseif $sbtn eq "adm_areq"}
                                    <a href="{$admin_url}/requests/{$smarty.request.type}/{$smarty.request.show}{if $smarty.request.filter ne ""}/{$smarty.request.filter}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/{$auds[i].vkey}">
				    {else}
                        	    {if $same_title_uploads eq "0"}<a href="{$base_url}/audio/{$title}" title="{$auds[i].vtitle}">{else}<a href="{$base_url}/audio/{$auds[i].vkey}" title="{$auds[i].vtitle}">{/if}
                        	    {/if}
                        	    <span class="mvtitle">{$auds[i].vtitle|truncate:$tr_titlelist:"..."}</span></a>
                        	</td>
                	    </tr>
                            <tr><td class="vdescr">{$auds[i].vdescr|truncate:$tr_desclist:"..."|nl2br|spchar}</td></tr>
                        </table>
                    </td>
		    <td valign="middle" width="40%" class="pl10">
			<table cellpadding=0 cellspacing=0 border=0 width="100%" class="bold">
			    <tr>
				<td align=left class="leftb">
				    <table cellpadding=1 cellspacing=0 border=0 width="100%">
					<tr>
					    <td align=left colspan=2>
					    {assign var=viddur value=$auds[i].vduration}
					    {math equation="$viddur/60" format="%0.0f" assign=minutes}
					    {math equation="$viddur - ($minutes * 60)" format="%0.0f" assign=seconds}
					    {if $seconds < 0}
				    		{math equation="$minutes - 1" assign=minutes}
				    		{math equation="$seconds + 60" assign=seconds}
					    {/if}
					    </td>
					</tr>
					{if $sbtn ne "myaud"}
					<tr>
					    <td colspan=2 class="normal"><span class="gr">{$fileadded2}</span>{insert name=time_range assign=rtime field=addtime IDFR=vid id=$auds[i].vid tbl=files_audio}{$rtime} {$fileaddedago}</td>
					</tr>
					<tr>
					    <td colspan=2>
						<span class="gr">{$fileaddedby}</span>
						{insert name=key_to_user_audio assign=owner vkey=$auds[i].vkey}
						{if $btn eq "adm_audio" or $btn eq "adm_image" or $btn eq "adm_video"}
                                                <a href="{$admin_url}/members/{$auds[i].uid}">{$owner}</a>
                                                {else}
						<a href="{$base_url}/profile/{if $special_characters eq "0"}{$owner}{else}{$auds[i].uid}{/if}">{$owner}</a>
						{/if}
					    </td>
					</tr>
					{else}
					<tr>
					    <td colspan=2 class="normal"><span class="gr">{$fileadded2}</span>{insert name=time_range assign=rtime field=addtime IDFR=vid id=$auds[i].vid tbl=files_audio}{$rtime} {$fileaddedago}</td>
					</tr>
					{/if}
					{if $type eq "mv" or $type eq "rf" or $type eq "tr" or $type eq "ra"}
					<tr>
					    <td colspan=2><span class="gr">{$fileauditions}</span>{$auds[i].views|viewnr}</td>
					</tr>
					{elseif $type eq "md" or $smarty.request.atype eq "comments" or $smarty.request.vtype eq "comments" or $smarty.request.type eq "comments"}
					<tr>
					    <td colspan=2>
						{insert name=nappcount2 assign=napp2 vid=$auds[i].vid type=audio}
						<span class="gr">{$filecomments}</span>{$auds[i].comments-$napp2}
					    </td>
					</tr>
					{elseif $type eq "tf" or $smarty.request.atype eq "favorited" or $smarty.request.vtype eq "favorited" or $smarty.request.type eq "favorited"}
					<tr>
					    <td colspan=2><span class="gr">{$filefavorited}</span>{$auds[i].vfav|viewnr}</td>
					</tr>
					{elseif $type eq "mre" or $smarty.request.atype eq "responses" or $smarty.request.vtype eq "responses" or $smarty.request.type eq "responses"}
					<tr>
					    <td colspan=2>
						{insert name=nappcount assign=napp vid=$auds[i].vid type=audio}
						<span class="gr">{$fresp_txt29}</span>{$auds[i].responses-$napp}
					    </td>
					</tr>
					{else}
					<tr>
					    <td colspan=2><span class="gr">{$fileauditions}</span>{$auds[i].views|viewnr}</td>
					</tr>
					{/if}
					
					<tr>
					    <td class="normal">{$minutes}{$fileduration_min}{$seconds}{$fileduration_sec}</td>
					</tr>
					{if $file_ratings eq "1"}
					<tr>
					    <td>{insert name=key_to_rate_audio assign=rate vkey=$auds[i].vkey}{$rate}</td>
					</tr>
					{/if}
					{if $sbtn eq "myaud"}
					<tr><td>{if $auds[i].vtype eq "private"}<span class="red">{$fileprivate}</span>{else}{$filepublic}{/if}, {if $auds[i].active eq "1"}{$fileapproved}{else}{$filepending}{/if}</td></tr>
					{/if}
				    </table>
				</td>
			    </tr>
			</table>
		    </td>
		</tr>
	    </table>

