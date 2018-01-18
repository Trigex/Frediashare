			{if $sbtn eq "myvid" or $sbtn eq "mysubs"}
                        {insert name=titlev assign=title vkey=$vids[i].vkey}
                        <table cellpadding=1 cellspacing=0 border=0 align="center">
                    	    <tr>
                    		<td align="left" width="1"><input type="checkbox" name="gmid[]" value="{$vids[i].vid}" onclick="ShowContent('actdiv2')"></td>
                        	<td class="centered" width="{$img_max_width-15}">
                        	{if $sbtn eq "myvid"}
                        	    {if $same_title_uploads eq "0"}<a href="javascript:void(0)" onclick="location.href='{$base_url}/my_videos/edit/{$title}'; return false;">{else}<a href="javascript:void(0)" onclick="location.href='{$base_url}/my_videos/edit/{$vids[i].vkey}'; return false;">{/if}{$myfiles_edit}</a>{$myfiles_delim}
                        	    <a href="javascript:void(0)" onclick="if(confirm('{$myvideos_del} {$vids[i].vtitle}?!')) {if $same_title_uploads eq "0"}location.href='{$base_url}/my_videos/delete/{$title}'{else}location.href='{$base_url}/my_videos/delete/{$vids[i].vkey}'{/if}; return false;">{$myfiles_delete}</a>
                        	{/if}
                        	</td>
                    	    </tr>
                        </table>
                        {elseif $sbtn eq "fav"}
                        <table cellpadding=1 cellspacing=0 border=0 align="center">
                    	    <tr>
                    		<td align="left" width="1"><input type="checkbox" name="gvmid[]" value="{$vids[i].vid}" onclick="ShowContent('vactdiv2')"></td>
                    		<td class="centered" width="{$img_max_width-15}"><a href="javascript:void(0);" title="{$myfiles_delete}" onclick="javascript:if(confirm('{$myfav_videodel}')) location.href='{$base_url}/my_favorites/video/delete/{if $same_title_uploads eq "0"}{$title}{else}{$key}{/if}'; return false;">{$myfiles_delete}</a></td>
                    	    </tr>
                        </table>
                        {elseif $sbtn eq "mpl"}
                        <table cellpadding=1 cellspacing=0 border=0 align="center">
                    	    <tr>
                    		<td align="left" width="1"><input type="checkbox" name="gvmid[]" value="{$vids[i].vid}" onclick="ShowContent('vactdiv2')"></td>
                    		<td class="centered" width="{$img_max_width-15}"><a href="javascript:void(0);" title="{$myfiles_delete}" onclick="if(confirm('{$mypl_videodel}')) location.href='{$base_url}/my_history/video/delete/{if $same_title_uploads eq "0"}{$title}{else}{$key}{/if}'; return false;">{$myfiles_delete}</a></td>
                    	    </tr>
                        </table>
                        {elseif $sbtn eq "mpl2"}
                        <table cellpadding=1 cellspacing=0 border=0 align="center">
                    	    <tr>
                    		<td align="left" width="1"><input type="checkbox" name="gvmid[]" value="{$vids[i].vid}" onclick="ShowContent('vactdiv2')"></td>
                    		<td class="centered" width="{$img_max_width-15}"><a href="javascript:void(0);" title="{$myfiles_delete}" onclick="if(confirm('{$plist_txt42}')) location.href='{$base_url}/my_playlists/video/{$smarty.request.vplkey}/delete/{if $same_title_uploads eq "0"}{$title}{else}{$key}{/if}'; return false;">{$myfiles_delete}</a></td>
                    	    </tr>
                        </table>
                        {elseif $sbtn eq "mql"}
                        <table cellpadding=1 cellspacing=0 border=0 align="center">
                    	    <tr>
                    		<td align="left" width="1"><input type="checkbox" name="gvmid[]" value="{$vids[i].vid}" onclick="ShowContent('vactdiv2')"></td>
                    		<td class="centered" width="{$img_max_width-15}"><a href="javascript:void(0);" title="{$myfiles_delete}" onclick="if(confirm('{$qlist_txt7}')) location.href='{$base_url}/my_quicklist/video/delete/{if $same_title_uploads eq "0"}{$title}{else}{$key}{/if}'; return false;">{$myfiles_delete}</a></td>
                    	    </tr>
                        </table>
                        {elseif $sbtn eq "allv"}
                        {if $smarty.request.type eq "all"}{assign var=thetype value=all}{elseif $smarty.request.type eq "active"}{assign var=thetype value=active}{elseif $smarty.request.type eq "comments"}{assign var=thetype value=comments}{elseif $smarty.request.type eq "date"}{assign var=thetype value=date}{elseif $smarty.request.type eq "featured"}{assign var=thetype value=featured}{elseif $smarty.request.type eq "favorited"}{assign var=thetype value=favorited}{elseif $smarty.request.type eq "inactive"}{assign var=thetype value=inactive}{elseif $smarty.request.type eq "inappropriate"}{assign var=thetype value=inappropriate}{elseif $smarty.request.type eq "private"}{assign var=thetype value=private}{elseif $smarty.request.type eq "public"}{assign var=thetype value=public}{elseif $smarty.request.type eq "ratings"}{assign var=thetype value=ratings}{elseif $smarty.request.type eq "recommended"}{assign var=thetype value=recommended}{elseif $smarty.request.type eq "responses"}{assign var=thetype value=responses}{elseif $smarty.request.type eq "views"}{assign var=thetype value=views}{/if}
                        <table cellpadding=1 cellspacing=0 border=0 align="center">
                            <tr>
                        	<td align="left" width="1"><input type="checkbox" name="gmid[]" value="{$vids[i].vid}" onclick="ShowContent('actdiv2')"></td>
                                <td class="centered" width="{$img_max_width-15}"><a href="javascript:void(0);" title="{$myfiles_delete}" onClick="if(confirm('{$adm_filedel}')) location.href='{$admin_url}/{if $smarty.request.categ ne ""}videoc{elseif $smarty.request.user ne ""}videou{else}videos{/if}{if $smarty.request.categ ne ""}/{$smarty.request.categ}{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}{if $smarty.request.type ne ""}/{$thetype}{/if}{if $smarty.request.timesort eq ""}/all_time{else}/{$smarty.request.timesort}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/delete/{$vids[i].vkey}'; return false;">{$myfiles_delete}</a></td>
                            </tr>
                        </table>
                        {elseif $sbtn eq "adm_vreq"}
                        <table cellpadding=1 cellspacing=0 border=0 align="center">
                            <tr>
                        	<td align="left" width="1"><input type="checkbox" name="gmid[]" value="{$vids[i].vid}" onclick="ShowContent('actdiv2')"></td>
                                <td class="centered" width="{$img_max_width-15}"> 
                                    <a href="javascript:void(0);" title="{$myfiles_delete}" onClick="if(confirm('{$adm_reqdel}')) location.href='{$admin_url}/requests/{$smarty.request.type}/{$smarty.request.show}{if $smarty.request.filter ne ""}/{$smarty.request.filter}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/delete/{$vids[i].vkey}'; return false;">{$myfiles_delete}</a>
                                </td>
                            </tr>
                        </table>
                        {/if}
                        
			<table cellpadding=1 cellspacing=0 border=0 width="{$img_max_width+8}">
			    <tr>
				<td valign=top align="center">
				{insert name=titlev assign=title vkey=$vids[i].vkey}
				{insert name=vid_to_rndv assign=rnd vid=$vids[i].vid}
				{insert name=vid_to_rndvv assign=rndbn vid=$vids[i].vid}
				{if $thumb_module eq "1"}
				{insert name=check_img assign=isfile vid=$vids[i].vid uid=$vids[i].uid}
				{insert name=gen_array assign=arra nr=$thumb_nr}
				    <script type="text/javascript">turl['{$rnd}']=0; timg['{$rnd}']=new Array(); thumbs['{$rnd}']=new Array({$arra});</script>
				    <input type="hidden" name="thnr{$rnd}" id="thnr{$rnd}" value="{if $isfile eq "yes"}{$thumb_nr}{else}3{/if}">
				    <input type="hidden" name="thdelay{$rnd}" id="thdelay{$rnd}" value="{$thumb_delay}">
				{/if}
				
				<div class="qlistadding bottomleft">
				{if $sbtn ne "mql" and $is_admin ne "1"}
				<div id="vqlistadd{$vids[i].vkey}" class="qlisticon">
				    <a href="javascript:void(0)" alt="{$qlist_txt1}" title="{$qlist_txt1}" onmouseover="setqlicon('on', 'video', '{$vids[i].vkey}', 'grid');" onmouseout="setqlicon('off', 'video', '{$vids[i].vkey}', 'grid');" onclick="add2ql('video', 'video', '{$vids[i].vkey}', 'grid'); add2ql('video', 'video', '{$vids[i].vkey}', 'list');">
				        &nbsp;&nbsp;&nbsp;&nbsp;
				    </a>
				</div>
				{/if}
				    {if $sbtn eq "allv"}
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
					<img id="{$rnd}" name="{$rnd}" src="{$tmb_url}/user{$vids[i].uid}/{$rndbn}_{$rnd}.jpg" {if $thumb_module eq "1"}onmouseover="if (window.loaded == true) {ldelim} startslide('{$rnd}','{$tmb_url}/user{$vids[i].uid}/', '_{$rnd}.jpg'); {rdelim}" onmouseout="if (window.loaded == true) {ldelim} stopslide('{$rnd}'); this.src='{$tmb_url}/user{$vids[i].uid}/1_{$rnd}.jpg'; {rdelim}"{/if} width="{$img_max_width}" height="{$img_max_height}" alt="{$vids[i].vtitle}" title="{$vids[i].vtitle}" class="{if $vids[i].vtype eq "private"}thumbp{elseif $vids[i].is_featured eq 'yes'}thumbf{else}thumb{/if}">
				    </a>
				</div>
				<div>{if $same_title_uploads eq "0"}<a href="{$base_url}/video/{$title}">{else}<a href="{$base_url}/video/{$vids[i].vkey}">{/if}<span class="bold">{$vids[i].vtitle|truncate:$tr_titlegrid:"..."}</span></a></div>
				</td>
			    </tr>
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
			    <tr>
				<td align=left colspan=2>
				    <table cellpadding=0 cellspacing=0 border=0 width="100%" class="bold">
					{if $sbtn ne "myvid"}
					<tr>
					    <td class=centered colspan=2>
						<span class="gr">{$fileaddedby}</span>
						{insert name=key_to_user assign=owner vkey=$vids[i].vkey}
						{if $btn eq "adm_audio" or $btn eq "adm_image" or $btn eq "adm_video"}
                                                <a href="{$admin_url}/members/{$vids[i].uid}">{$owner}</a>
                                                {else}
						<a href="{$base_url}/profile/{if $special_characters eq "0"}{$owner}{else}{$vids[i].uid}{/if}">{$owner}</a>
						{/if}
					    </td>
					</tr>
					{/if}
					{if $type eq "mr" or $smarty.request.vtype eq "date" or $smarty.request.type eq "date" or $smarty.request.filter eq "f3"}
					<tr>
					    <td class="centered normal" colspan=2><span class="gr">{$fileadded}</span>{insert name=time_range assign=rtime field=addtime IDFR=vid id=$vids[i].vid tbl=files_video}{$rtime} {$fileaddedago}</td>
					</tr>
					{elseif $type eq "mv" or $type eq "rf" or $type eq "tr" or $type eq "ra"}
					<tr>
					    <td class=centered colspan=2><span class="gr">{$fileviews}</span>{$vids[i].views|viewnr}</td>
					</tr>
					{elseif $type eq "md" or $smarty.request.vtype eq "comments" or $smarty.request.vtype eq "comments" or $smarty.request.type eq "comments"}
					<tr>
					    <td class=centered colspan=2>
						{insert name=nappcount2 assign=napp2 vid=$vids[i].vid type=video}
						<span class="gr">{$filecomments}</span>{$vids[i].comments-$napp2}
					    </td>
					</tr>
					{elseif $type eq "tf" or $smarty.request.vtype eq "favorited" or $smarty.request.vtype eq "favorited" or $smarty.request.type eq "favorited"}
					<tr>
					    <td class=centered colspan=2><span class="gr">{$filefavorited}</span>{$vids[i].vfav|viewnr}</td>
					</tr>
					{elseif $type eq "mre" or $smarty.request.vtype eq "responses" or $smarty.request.vtype eq "responses" or $smarty.request.type eq "responses"}
					<tr>
					    <td class=centered colspan=2>
						{insert name=nappcount assign=napp vid=$vids[i].vid type=video}
						<span class="gr">{$fresp_txt29}</span>{$vids[i].responses-$napp}
					    </td>
					</tr>
					{else}
					<tr>
					    <td class=centered colspan=2><span class="gr">{$fileviews}</span>{$vids[i].views|viewnr}</td>
					</tr>
					{/if}
					{if $file_ratings eq "1"}
					<tr>
					    <td class="pt2 normal">{$minutes}{$fileduration_min}{$seconds}{$fileduration_sec}</td>
					    <td class="pl20">{insert name=key_to_rate assign=rate vkey=$vids[i].vkey}{$rate}</td>
					</tr>
					{/if}
					{if $sbtn eq "myvid"}
                                        <tr><td class="centered" colspan=2>{if $vids[i].vtype eq "private"}<span class="red">{$fileprivate}</span>{else}{$filepublic}{/if}, {if $vids[i].active eq "1"}{$fileapproved}{else}{$filepending}{/if}</td></tr>
                                        {/if}
				    </table>
				</td>
			    </tr>
			</table>
