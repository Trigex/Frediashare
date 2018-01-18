	<div id="listview" {if $smarty.session.viewmode eq "list"}style="display: block;"{else}style="display: none;"{/if}>
	    <table cellpadding=5 cellspacing=0 border=0 width="100%">
	    {if $smarty.request.searchall eq "" and $smarty.request.searcht eq ""}
		<tr>
		    <td colspan="5">
			<table cellpadding=0 cellspacing=0 border=0>
			    <tr>
                    		<td class="" align="center" width="3%"><input type="checkbox" name="checkall" id="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmya(document.filesel['mid[]']); ShowContent('actdiv2'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmya(document.filesel['mid[]']); HideContent('actdiv2'); {rdelim}"></td>
                    		<td><a href="javascript:void(0)" onclick="if (document.getElementById('checkall').checked == false) {ldelim} document.getElementById('checkall').checked = true; checkAllmya(document.filesel['mid[]']); ShowContent('actdiv2'); {rdelim} else if (document.getElementById('checkall').checked == true) {ldelim} document.getElementById('checkall').checked = false; uncheckAllmya(document.filesel['mid[]']); HideContent('actdiv2'); {rdelim}">{$grid_txt1}</td>
                	    </tr>
			</table>
		    </td>
		</tr>
	    {/if}
		<tr>
		    <td valign="top" class="nopad">
                        {section name=x loop=$res}
			{insert name=vid_to_rndvv assign=rndbn vid=$res[x].vid}
                	{insert name=vid_to_rnda assign=rnda vid=$res[x].vid}
                	{insert name=vid_to_rndvv assign=rndv vid=$res[x].vid}
                        {insert name=key_to_type assign=xtype vkey=$res[x].vkey}
                        {if $xtype eq "audio"}{insert name=titlea assign=title vkey=$res[x].vkey}{assign var=tbl value="files_audio"}{insert name=key_to_user_audio assign=owner vkey=$res[x].vkey}{insert name=key_to_rate_audio assign=rate vkey=$res[x].vkey}{assign var=fcomp value="a"}
                        {elseif $xtype eq "image"}{insert name=titlei assign=title vkey=$res[x].vkey}{assign var=tbl value="files_image"}{insert name=key_to_user_image assign=owner vkey=$res[x].vkey}{insert name=key_to_rate_image assign=rate vkey=$res[x].vkey}{assign var=fcomp value="i"}
                        {elseif $xtype eq "video"}{insert name=vid_to_rndv assign=rnd vid=$res[x].vid}{insert name=titlev assign=title vkey=$res[x].vkey}{assign var=tbl value="files_video"}{insert name=key_to_user assign=owner vkey=$res[x].vkey}{insert name=key_to_rate assign=rate vkey=$res[x].vkey}{assign var=fcomp value="v"}
                        {/if}
                    	    {if $thumb_module eq "1" and $xtype eq "video"}
                    	    {insert name=check_img assign=isfile vid=$res[x].vid uid=$res[x].uid}
                    	    {insert name=gen_array assign=larra nr=$thumb_nr}
                    	    <script type="text/javascript">lturl['l{$rnd}']=0; ltimg['l{$rnd}']=new Array(); lthumbs['l{$rnd}']=new Array({$larra});</script>
                    	    <input type="hidden" name="lthnrl{$rnd}" id="lthnrl{$rnd}" value="{if $isfile eq "yes"}{$thumb_nr}{else}3{/if}">
                    	    <input type="hidden" name="lthdelayl{$rnd}" id="lthdelayl{$rnd}" value="{$thumb_delay}">
                    	    {/if}
                    	    
                    	    <table cellpadding=0 cellspacing=0 border=0 width="100%" class="dottb">
                    		<tr>
                    		    <td valign="top" width="{$img_max_width+20}">
                    			<table cellpadding=0 cellspacing=0 border=0 width="100%">
                    			    <tr>
                    				{if $smarty.request.searchall eq "" and $smarty.request.searcht eq ""}<td class="" width="1%" align="center" valign="top"><input type="checkbox" name="mid[]" value="{$res[x].vid}" onclick="ShowContent('actdiv2')"></td>{/if}
                    				<td width="{$img_max_width}">
                    				<div class="qlistadding bottomleft">
                    				{if $btn ne "adm_search"}
                    				    <div id="{$fcomp}lqlistadd{$res[x].vkey}" class="qlisticon">
                    					<a href="javascript:void(0)" alt="{$qlist_txt1}" title="{$qlist_txt1}" onmouseover="setqlicon('on', '{$xtype}', '{$res[x].vkey}', 'list');" onmouseout="setqlicon('off', '{$xtype}', '{$res[x].vkey}', 'list');" onclick="add2ql('{$xtype}', '{$xtype}', '{$res[x].vkey}', 'list'); add2ql('{$xtype}', '{$xtype}', '{$res[x].vkey}', 'grid');">
                    					    &nbsp;&nbsp;&nbsp;&nbsp;
                    					</a>
                    				    </div>
                    				{/if}
                    				{if $sbtn eq "adm_search"}                                                                                                                                                 
                                		    <a href="{$admin_url}/{$xtype}s/{if $smarty.request.filter eq "most_commented"}comments{elseif $smarty.request.filter eq "most_played"}{if $xtype eq "audio"}auditions{else}views{/if}{elseif $smarty.request.filter eq "most_recent"}date{elseif $smarty.request.filter eq "top_rated"}ratings{elseif $smarty.request.filter eq "featured"}featured{else}all{/if}/all_time/{$res[x].vkey}">
                                		{else}
						{if $same_title_uploads eq "0"}
						    <a href="{$base_url}/{$xtype}/{$title}">
						{else}
						    <a href="{$base_url}/{$xtype}/{$res[x].vkey}">
						{/if}
						{/if}
						    <img {if $xtype eq "video"}id="l{$rnd}" name="l{$rnd}"{/if} src="{if $xtype eq "audio"}{$tmb_url}/user{$res[x].uid}/{$rndv}_{$rnda}.jpg{elseif $xtype eq "image"}{$tmb_url}/user{$res[x].uid}/{$res[x].vflvname}{elseif $xtype eq "video"}{$tmb_url}/user{$res[x].uid}/{$rndbn}_{$rnd}.jpg{/if}" width="{$img_max_width}" height="{$img_max_height}" alt="{$res[x].vtitle}" title="{$res[x].vtitle}" class="{if $res[x].vtype eq "private"}thumbp{elseif $res[x].is_featured eq "yes"}thumbf{else}thumb{/if}" {if $xtype eq "video"}{if $thumb_module eq "1"}onmouseover="if (window.loaded == true) {ldelim} lstartslide('l{$rnd}','{$tmb_url}/user{$res[x].uid}/', '_{$rnd}.jpg'); {rdelim}" onmouseout="if (window.loaded == true) {ldelim} lstopslide('l{$rnd}'); this.src='{$tmb_url}/user{$res[x].uid}/1_{$rnd}.jpg'; {rdelim}"{/if}{/if}>
						    </a>
						</div>
                    				</td>
                    			    </tr>
                    			</table>
                    		    </td>
                    		    <td valign="top" class="pl5">
                    			<table cellpadding=0 cellspacing=0 border=0 width="100%">
                    			    <tr>
                    				<td>
                    				{if $sbtn eq "adm_search"}                                                                                                                                                 
                                		    <a href="{$admin_url}/{$xtype}s/{if $smarty.request.filter eq "most_commented"}comments{elseif $smarty.request.filter eq "most_played"}{if $xtype eq "audio"}auditions{else}views{/if}{elseif $smarty.request.filter eq "most_recent"}date{elseif $smarty.request.filter eq "top_rated"}ratings{elseif $smarty.request.filter eq "featured"}featured{else}all{/if}/all_time/{$res[x].vkey}">
                                		{else}
                    				    {if $same_title_uploads eq "0"}<a href="{$base_url}/{$xtype}/{$title}" title="{$res[x].vtitle}">{else}<a href="{$base_url}/{$xtype}/{$res[x].vkey}" title="{$res[x].vtitle}">{/if}
                    				{/if}
                    					<span class="mvtitle">{$res[x].vtitle|truncate:$tr_titlelist:"..."}</span>
                    				    </a>
                    				</td>
                    			    </tr>
                    			    <tr><td class="vdescr">{$res[x].vdescr|truncate:$tr_desclist:"..."|nl2br|spchar}</td></tr>
                    			</table>
                    		    </td>
                    		    <td valign="middle" width="30%" class="nopad">
                    			<table cellpadding=0 cellspacing=0 border=0 width="100%" class="leftb">
                    			    <tr>
                    				<td class="pl5">
                    				    <table cellpadding=1 cellspacing=0 border=0>
                    			    <tr>
                    				<td>
						    {assign var=viddur value=$res[x].vduration}
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
                                        	<td colspan=2><span class="gr">{$fileadded2}</span>{insert name=time_range assign=rtime field=addtime IDFR=vid id=$res[x].vid tbl=$tbl}{$rtime} {$fileaddedago}</td>
                                    	    </tr>
                                    	    <tr>
                                        	<td colspan=2>
                                        	    <span class="gr">{$fileaddedby}</span>
                                        	    {if $sbtn eq "adm_search"}<a href="{$admin_url}/members/{$res[x].uid}">{$owner}</a>{else}<a href="{$base_url}/profile/{$owner}">{$owner}</a>{/if}
                                        	</td>
                                    	    </tr>
                                    	    {else}
                                    	    <tr>
                                        	<td colspan=2><span class="gr">{$fileadded2}</span>{insert name=time_range assign=rtime field=addtime IDFR=vid id=$res[x].vid tbl=$tbl}{$rtime} {$fileaddedago}</td>
                                    	    </tr>
                                    	    {/if}
                                    	    {if $type eq "mv" or $type eq "rf" or $type eq "tr" or $type eq "ra" or $smarty.request.filter eq "most_played"}
                                    	    <tr>
                                        	<td colspan=2><span class="gr">{if $xtype ne "audio"}{$fileviews}{else}{$fileauditions}{/if}</span>{$res[x].views|viewnr}</td>
                                    	    </tr>
                                            {elseif $type eq "md" or $smarty.request.vtype eq "comments" or $smarty.request.vtype eq "comments" or $smarty.request.filter eq "most_commented"}
                                            <tr>
                                                <td colspan=2>{insert name=nappcount2 assign=napp2 vid=$res[x].vid type=$xtype}<span class="gr">{$filecomments}</span>{$res[x].comments-$napp2}</td>
                                            </tr>
                                            {elseif $type eq "mre" or $smarty.request.vtype eq "responses" or $smarty.request.vtype eq "responses" or $smarty.request.filter eq "most_responded"}
                                            <tr>
                                                <td colspan=2>{insert name=nappcount assign=napp vid=$res[x].vid type=$xtype}<span class="gr">{$fresp_txt29}</span>{$res[x].responses-$napp}</td>
                                            </tr>
                                            {elseif $type eq "tf" or $smarty.request.vtype eq "favorited" or $smarty.request.vtype eq "favorited"}
                                            <tr>
                                                <td colspan=2><span class="gr">{$filefavorited}</span>{$res[x].vfav}</td>
                                            </tr>
                                            {else}
                                            <tr>
                                                <td colspan=2><span class="gr">{$fileviews}</span>{$res[x].views|viewnr}</td>
                                            </tr>
                                            {/if}
                                            <tr>
                                        	<td>{$minutes}{$fileduration_min}{$seconds}{$fileduration_sec}</td>
                                            </tr>
                                            {if $file_ratings eq "1"}
                                            <tr>
                                        	<td>{$rate}</td>
                                    	    </tr>
                                    	    {/if}
                                    		    </table>
                                    		</td>
                                    	    </tr>
                    			</table>
                    		    </td>
                    		</tr>
                    	    </table>
                        {/section}
                    </td> 
		</tr>
		<tr>
		    <td colspan="5">{include file="_inc/inc_searchactlist.tpl"}</td>
		</tr>
	    </table>
	</div>
