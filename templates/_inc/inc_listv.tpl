	    <table cellpadding=0 cellspacing=0 border=0 width="100%" {if $sbtn eq "profile"}class="dottb"{else}class="p5"{/if}>
		<tr class="nbg">
		    <td valign="top">
			<table cellpadding=0 cellspacing=0 border=0 width="{$img_max_width+6}">
			    <tr>
				<td>
				    {insert name=titlev assign=title vkey=$vids[i].vkey}
                		    {insert name=vid_to_rndv assign=rnd vid=$vids[i].vid}
                		    {insert name=vid_to_rndvv assign=rndbn vid=$vids[i].vid}
                		    {if $thumb_module eq "1"}
                		    {insert name=check_img assign=isfile vid=$vids[i].vid uid=$vids[i].uid}
                		    {insert name=gen_array assign=larra nr=$thumb_nr}
                		    <script type="text/javascript">lturl['l{$rnd}']=0; ltimg['l{$rnd}']=new Array(); lthumbs['l{$rnd}']=new Array({$larra});</script>
                		    <input type="hidden" name="lthnrl{$rnd}" id="lthnrl{$rnd}" value="{if $isfile eq "yes"}{$thumb_nr}{else}3{/if}">
                		    <input type="hidden" name="lthdelayl{$rnd}" id="lthdelayl{$rnd}" value="{$thumb_delay}">
                		    {/if}
                		    <div class="qlistadding bottomleft">
                		    {if $sbtn ne "mql" and $is_admin ne "1"}
                		    <div id="vlqlistadd{$vids[i].vkey}" class="qlisticon">
                			<a href="javascript:void(0)" alt="{$qlist_txt1}" title="{$qlist_txt1}" onmouseover="setqlicon('on', 'video', '{$vids[i].vkey}', 'list');" onmouseout="setqlicon('off', 'video', '{$vids[i].vkey}', 'list');" onclick="add2ql('video', 'video', '{$vids[i].vkey}', 'list'); add2ql('video', 'video', '{$vids[i].vkey}', 'grid');">
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                	</a>
                		    </div>
                		    {/if}
                		    {if $sbtn eq "allv"}
                		    {if $smarty.request.type eq "all"}{assign var=thetype value=all}{elseif $smarty.request.type eq "active"}{assign var=thetype value=active}{elseif $smarty.request.type eq "comments"}{assign var=thetype value=comments}{elseif $smarty.request.type eq "date"}{assign var=thetype value=date}{elseif $smarty.request.type eq "featured"}{assign var=thetype value=featured}{elseif $smarty.request.type eq "favorited"}{assign var=thetype value=favorited}{elseif $smarty.request.type eq "inactive"}{assign var=thetype value=inactive}{elseif $smarty.request.type eq "inappropriate"}{assign var=thetype value=inappropriate}{elseif $smarty.request.type eq "private"}{assign var=thetype value=private}{elseif $smarty.request.type eq "public"}{assign var=thetype value=public}{elseif $smarty.request.type eq "ratings"}{assign var=thetype value=ratings}{elseif $smarty.request.type eq "recommended"}{assign var=thetype value=recommended}{elseif $smarty.request.type eq "responses"}{assign var=thetype value=responses}{elseif $smarty.request.type eq "views"}{assign var=thetype value=views}{/if}
                                    <a href="{$admin_url}/{if $smarty.request.categ ne ""}videoc{elseif $smarty.request.user ne ""}videou{else}videos{/if}{if $smarty.request.categ ne ""}/{$smarty.request.categ}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{if $smarty.request.type ne ""}/{$thetype}{/if}{if $smarty.request.timesort eq ""}/all_time{else}/{$smarty.request.timesort}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/{$vids[i].vkey}">
                                    {elseif $sbtn eq "adm_vreq"}
                                    <a href="{$admin_url}/requests/{$smarty.request.type}/{$smarty.request.show}{if $smarty.request.filter ne ""}/{$smarty.request.filter}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/{$vids[i].vkey}">
                                    {else}
				    {if $same_title_uploads eq "0"}
				    <a href="{$base_url}/video/{$title}"> 
				    {else}
				    <a href="{$base_url}/video/{$vids[i].vkey}">
				    {/if}
				    {/if}
				    <img src="{$tmb_url}/user{$vids[i].uid}/{$rndbn}_{$rnd}.jpg" id="l{$rnd}" {if $thumb_module eq "1"}onmouseover="if (window.loaded == true) {ldelim} lstartslide('l{$rnd}','{$tmb_url}/user{$vids[i].uid}/', '_{$rnd}.jpg'); {rdelim}" onmouseout="if (window.loaded == true) {ldelim} lstopslide('l{$rnd}'); this.src='{$tmb_url}/user{$vids[i].uid}/1_{$rnd}.jpg'; {rdelim}"{/if} width="{$img_max_width}" height="{$img_max_height}" alt="{$vids[i].vtitle}" title="{$vids[i].vtitle}" class="{if $vids[i].vtype eq "private"}thumbp{elseif $vids[i].is_featured eq 'yes'}thumbf{else}thumb{/if}">
				    </a>
				    </div>
				</td>
			    </tr>
			    {if $sbtn eq "myvid"}
			    <tr>
				<td>
				    <table cellpadding=2 cellspacing=0 align="left" width="{$img_max_width}">
					<tr>
					    <td align="left">{if $same_title_uploads eq "0"}<a href="javascript:void(0)" onclick="location.href='{$base_url}/my_videos/edit/{$title}'; return false;">{else}<a href="javascript:void(0)" onclick="location.href='{$base_url}/my_videos/edit/{$vids[i].vkey}'; return false;">{/if}{$myfiles_edit}</a></td>
                                            <td align="right"><a href="javascript:void(0)" onclick="if(confirm('{$myvideos_del} {$vids[i].vtitle}?!')) {if $same_title_uploads eq "0"}location.href='{$base_url}/my_videos/delete/{$title}'{else}location.href='{$base_url}/my_videos/delete/{$vids[i].vkey}'{/if}; return false;">{$myfiles_delete}</a></td>
                                    	</tr>
                                    </table>
				</td>
			    </tr>
			    {elseif $sbtn eq "fav"}
			    <tr>
				<td>
				    <table cellpadding=2 cellspacing=0 border=0 align="left" width="{$img_max_width}">
                        		<tr>
                            		    <td class="centered"><a href="javascript:void(0);" title="{$myfiles_delete}" onclick="javascript:if(confirm('{$myfav_videodel}')) location.href='{$base_url}/my_favorites/video/delete/{if $same_title_uploads eq "0"}{$title}{else}{$key}{/if}'; return false;">{$myfiles_delete}</a></td>
                        		</tr>
                    		    </table>
				</td>
			    </tr>
			    {elseif $sbtn eq "mpl"}
			    <tr>
				<td>
				    <table cellpadding=2 cellspacing=0 border=0 align="left" width="{$img_max_width}">
                        		<tr>
                        		    <td class="centered"><a href="javascript:void(0);" title="{$myfiles_delete}" onclick="if(confirm('{$mypl_videodel}')) location.href='{$base_url}/my_history/video/delete/{if $same_title_uploads eq "0"}{$title}{else}{$key}{/if}'; return false;">{$myfiles_delete}</a></td>
                        		</tr>
                    		    </table>
				</td>
			    </tr>
			    {elseif $sbtn eq "mpl2"}
			    <tr>
				<td>
				    <table cellpadding=2 cellspacing=0 border=0 align="left" width="{$img_max_width}">
                        		<tr>
                        		    <td class="centered"><a href="javascript:void(0);" title="{$myfiles_delete}" onclick="if(confirm('{$plist_txt42}')) location.href='{$base_url}/my_playlists/video/{$smarty.request.vplkey}/delete/{if $same_title_uploads eq "0"}{$title}{else}{$key}{/if}'; return false;">{$myfiles_delete}</a></td>
                        		</tr>
                    		    </table>
				</td>
			    </tr>
			    {elseif $sbtn eq "mql"}
			    <tr>
				<td>
				    <table cellpadding=2 cellspacing=0 border=0 align="left" width="{$img_max_width}">
                        		<tr>
                        		    <td class="centered"><a href="javascript:void(0);" title="{$myfiles_delete}" onclick="if(confirm('{$qlist_txt7}')) location.href='{$base_url}/my_quicklist/video/delete/{if $same_title_uploads eq "0"}{$title}{else}{$key}{/if}'; return false;">{$myfiles_delete}</a></td>
                        		</tr>
                    		    </table>
				</td>
			    </tr>
			    {elseif $sbtn eq "allv"}
			    <tr>
				<td>
				    <table cellpadding=1 cellspacing=0 border=0 align="left" width="{$img_max_width}">
                        		<tr>
                            		    <td class="centered"><a href="javascript:void(0);" title="{$myfiles_delete}" onClick="if(confirm('{$adm_filedel}')) location.href='{$admin_url}/{if $smarty.request.categ ne ""}videoc{elseif $smarty.request.user ne ""}videou{else}videos{/if}{if $smarty.request.categ ne ""}/{$smarty.request.categ}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{if $smarty.request.type ne ""}/{$thetype}{/if}{if $smarty.request.timesort eq ""}/all_time{else}/{$smarty.request.timesort}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/delete/{$vids[i].vkey}'; return false;">{$myfiles_delete}</a></td>
                        		</tr>
                    		    </table>
				</td>
			    </tr>
			    {elseif $sbtn eq "adm_vreq"}
			    <tr>
				<td>
				    <table cellpadding=1 cellspacing=0 border=0 align="left" width="{$img_max_width}">
                        		<tr>
                            		    <td class="centered">
                                		<a href="javascript:void(0);" title="{$myfiles_delete}" onClick="if(confirm('{$adm_reqdel}')) location.href='{$admin_url}/requests/{$smarty.request.type}/{$smarty.request.show}{if $smarty.request.filter ne ""}/{$smarty.request.filter}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/delete/{$vids[i].vkey}'; return false;">{$myfiles_delete}</a>
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
                        	    {if $sbtn eq "allv"}
                                    <a href="{$admin_url}/{if $smarty.request.categ ne ""}videoc{elseif $smarty.request.user ne ""}videou{else}videos{/if}{if $smarty.request.categ ne ""}/{$smarty.request.categ}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{if $smarty.request.type ne ""}/{$thetype}{/if}{if $smarty.request.timesort eq ""}/all_time{else}/{$smarty.request.timesort}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/{$vids[i].vkey}">
                                    {elseif $sbtn eq "adm_vreq"}
                                    <a href="{$admin_url}/requests/{$smarty.request.type}/{$smarty.request.show}{if $smarty.request.filter ne ""}/{$smarty.request.filter}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/{$vids[i].vkey}">
                                    {else}
                        	    {if $same_title_uploads eq "0"}<a href="{$base_url}/video/{$title}" title="{$vids[i].vtitle}">{else}<a href="{$base_url}/video/{$vids[i].vkey}" title="{$vids[i].vtitle}">{/if}
                        	    {/if}
                        	    <span class="mvtitle">{$vids[i].vtitle|truncate:$tr_titlelist:"..."}</span></a>
                    		</td>
                    	    </tr>
                            <tr><td class="vdescr">{$vids[i].vdescr|truncate:$tr_desclist:"..."|nl2br|spchar}</td></tr>
                        </table>
                    </td>
		    <td valign="middle" width="45%" class="pl10">
			<table cellpadding=0 cellspacing=0 border=0 width="100%" class="bold">
			    <tr>
				<td align=left class="leftb">
				    <table cellpadding=1 cellspacing=0 border=0 width="100%">
					<tr>
					    <td align=left colspan=2>
					    {assign var=viddur value=$vids[i].vduration}
					    {math equation="$viddur/60" format="%0.0f" assign=minutes}
					    {math equation="$viddur - ($minutes * 60)" format="%0.0f" assign=seconds}
					    {if $seconds < 0}
				    		{math equation="$minutes - 1" assign=minutes}
				    		{math equation="$seconds + 60" assign=seconds}
					    {/if}
					    </td>
					</tr>
					{if $sbtn ne "myvid"}
					<tr>
					    <td colspan=2 class="normal">{if $sbtn eq "mpl"}{assign var=tbl value="history_video"}{elseif $sbtn eq "mql"}{assign var=tbl value="quicklist_video"}{else}{assign var=tbl value="files_video"}{/if}
						<span class="gr">{if $sbtn eq "mpl"}{$pr_chinfob41}{else}{$fileadded2}{/if}</span>{insert name=time_range assign=rtime field=addtime IDFR=vid id=$vids[i].vid tbl=$tbl}{$rtime} {$fileaddedago}
					    </td>
					</tr>
					<tr>
					    <td colspan=2>
						<span class="gr">{$fileaddedby}</span>
						{insert name=key_to_user assign=owner vkey=$vids[i].vkey}
						{if $btn eq "adm_audio" or $btn eq "adm_image" or $btn eq "adm_video"}
                                                <a href="{$admin_url}/members/{$vids[i].uid}">{$owner}</a>
                                                {else}
						<a href="{$base_url}/profile/{if $special_characters eq "0"}{$owner}{else}{$vids[i].uid}{/if}">{$owner}</a>
						{/if}
					    </td>
					</tr>
					{else}
					<tr>
					    <td colspan=2 class="normal"><span class="gr">{$fileadded2}</span>{insert name=time_range assign=rtime field=addtime IDFR=vid id=$vids[i].vid tbl=files_video}{$rtime} {$fileaddedago}</td>
					</tr>
					{/if}
					
					{if $type eq "mv" or $type eq "rf" or $type eq "tr" or $type eq "ra"}
					<tr>
					    <td colspan=2><span class="gr">{$fileviews}</span>{$vids[i].views|viewnr}</td>
					</tr>
					{elseif $type eq "md" or $smarty.request.vtype eq "comments" or $smarty.request.type eq "comments"}
					<tr>
					    <td colspan=2>
						{insert name=nappcount2 assign=napp2 vid=$vids[i].vid type=video}
						<span class="gr">{$filecomments}</span>{$vids[i].comments-$napp2}
					    </td>
					</tr>
					{elseif $type eq "tf" or $smarty.request.vtype eq "favorited" or $smarty.request.type eq "favorited"}
					<tr>
					    <td colspan=2><span class="gr">{$filefavorited}</span>{$vids[i].vfav|viewnr}</td>
					</tr>
					{elseif $type eq "mre" or $smarty.request.vtype eq "responses" or $smarty.request.type eq "responses"}
					<tr>
					    <td colspan=2>
						{insert name=nappcount assign=napp vid=$vids[i].vid type=video}
						<span class="gr">{$fresp_txt29}</span>{$vids[i].responses-$napp}
					    </td>
					</tr>
					{else}
					<tr>
					    <td colspan=2><span class="gr">{$fileviews}</span>{$vids[i].views|viewnr}</td>
					</tr>
					{/if}
					
					<tr>
					    <td class="normal">{$minutes}{$fileduration_min}{$seconds}{$fileduration_sec}</td>
					</tr>
					{if $file_ratings eq "1"}
					<tr>
					    <td>{insert name=key_to_rate assign=rate vkey=$vids[i].vkey}{$rate}</td>
					</tr>
					{/if}
					{if $sbtn eq "myvid"}
                    			<tr><td>{if $vids[i].vtype eq "private"}<span class="red">{$fileprivate}</span>{else}{$filepublic}{/if}, {if $vids[i].active eq "1"}{$fileapproved}{else}{$filepending}{/if}</td></tr>
                    			{/if}
				    </table>
				</td>
			    </tr>
			</table>
		    </td>
		</tr>
	    </table>

