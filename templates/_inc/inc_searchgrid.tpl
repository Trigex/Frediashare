	<div id="gridview" {if $smarty.session.viewmode eq "grid"}style="display: block;"{else}style="display: none;"{/if}>
	    <table cellpadding=5 cellspacing=0 align=center border=0>
	    {if $smarty.request.searchall eq "" and $smarty.request.searcht eq ""}
		<tr>
		    <td colspan="5">
			<table cellpadding=0 cellspacing=0 align=center border=0>
			    <tr>
                    		<td align="left" width="1%"><input type="checkbox" id="gcheckall" name="gcheckall" value="0" onclick="if (this.checked == true) {ldelim} vcheckAllmya(document.gvfilesel['gmid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} vuncheckAllmya(document.gvfilesel['gmid[]']); HideContent('actdiv'); {rdelim}"></td>
                    		<td><a href="javascript:void(0)" onclick="if (document.getElementById('gcheckall').checked == false) {ldelim} document.getElementById('gcheckall').checked = true; vcheckAllmya(document.gvfilesel['gmid[]']); ShowContent('actdiv'); {rdelim} else if (document.getElementById('gcheckall').checked == true) {ldelim} document.getElementById('gcheckall').checked = false; vuncheckAllmya(document.gvfilesel['gmid[]']); HideContent('actdiv'); {rdelim}">{$grid_txt1}</td>
                	    </tr>
			</table>
		    </td>
		</tr>
	    {/if}
		<tr>
		    {section name=x loop=$res}
		    {insert name=vid_to_rndv assign=rnd vid=$res[x].vid}
		    {insert name=vid_to_rndvv assign=rndbn vid=$res[x].vid}
                    {insert name=vid_to_rnda assign=rnda vid=$res[x].vid}
                    {insert name=vid_to_rndvv assign=rndv vid=$res[x].vid}
                    {insert name=ad_status assign=check aname=file_ads_right}
                    {if ($check eq "1" and $sbtn ne "adm_search") or ($check eq "0" and $sbtn ne "adm_search")}{assign var=items value=4}{else}{assign var=items value=5}{/if}
		    {if $smarty.section.x.index mod $items eq "0" and $smarty.section.x.index gt "0"}</tr><tr>{/if}
		    <td valign="top" class="nbg">
			<table cellpadding=1 cellspacing=0 border=0 width="{$img_max_width+8}">
			{if $smarty.request.searchall eq "" and $smarty.request.searcht eq ""}
			    <tr>
				<td class="nopad">
				    <table cellpadding=0 cellspacing=0 border=0>
					<tr>
					    <td align="left" width="1"><input type="checkbox" name="gmid[]" value="{$res[x].vid}" onclick="ShowContent('actdiv')"></td>
                            		    <td class="centered" width="{$img_max_width-15}"></td>
					</tr>
				    </table>
				</td>
			    </tr>
			{/if}
			    <tr>
				<td valign=top>
				    {insert name=key_to_type assign=xtype vkey=$res[x].vkey}
				    {if $xtype eq "audio"}{insert name=titlea assign=title vkey=$res[x].vkey}{assign var=fcomp value="a"}
				    {elseif $xtype eq "image"}{insert name=titlei assign=title vkey=$res[x].vkey}{assign var=fcomp value="i"}
				    {elseif $xtype eq "video"}{insert name=titlev assign=title vkey=$res[x].vkey}{assign var=fcomp value="v"}
					{if $thumb_module eq "1" and $xtype eq "video"}
					{insert name=check_img assign=isfile vid=$res[x].vid uid=$res[x].uid}{insert name=gen_array assign=arra nr=$thumb_nr}
					<script type="text/javascript">turl['{$rnd}']=0; timg['{$rnd}']=new Array(); thumbs['{$rnd}']=new Array({$arra});</script>
					<input type="hidden" name="thnr{$rnd}" id="thnr{$rnd}" value="{if $isfile eq "yes"}{$thumb_nr}{else}3{/if}">
					<input type="hidden" name="thdelay{$rnd}" id="thdelay{$rnd}" value="{$thumb_delay}">
					{/if}
				    {/if}
				    <div class="qlistadding bottomleft">
				    {if $btn ne "adm_search"}
					<div id="{$fcomp}qlistadd{$res[x].vkey}" class="qlisticon">
					    <a href="javascript:void(0)" alt="{$qlist_txt1}" title="{$qlist_txt1}" onmouseover="setqlicon('on', '{$xtype}', '{$res[x].vkey}', 'grid');" onmouseout="setqlicon('off', '{$xtype}', '{$res[x].vkey}', 'grid');" onclick="add2ql('{$xtype}', '{$xtype}', '{$res[x].vkey}', 'grid'); add2ql('{$xtype}', '{$xtype}', '{$res[x].vkey}', 'list');">
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
					<img {if $xtype eq "video"}id="{$rnd}" name="{$rnd}"{/if} src="{if $xtype eq "audio"}{$tmb_url}/user{$res[x].uid}/{$rndv}_{$rnda}.jpg{elseif $xtype eq "image"}{$tmb_url}/user{$res[x].uid}/{$res[x].vflvname}{elseif $xtype eq "video"}{$tmb_url}/user{$res[x].uid}/{$rndbn}_{$rnd}.jpg{/if}" width="{$img_max_width}" height="{$img_max_height}" alt="{$res[x].vtitle}" title="{$res[x].vtitle}" class="{if $res[x].vtype eq "private"}thumbp{elseif $res[x].is_featured eq "yes"}thumbf{else}thumb{/if}" {if $xtype eq "video"}{if $thumb_module eq "1"}onmouseover="if (window.loaded == true) {ldelim} startslide('{$rnd}','{$tmb_url}/user{$res[x].uid}/', '_{$rnd}.jpg'); {rdelim}" onmouseout="if (window.loaded == true) {ldelim} stopslide('{$rnd}'); this.src='{$tmb_url}/user{$res[x].uid}/1_{$rnd}.jpg'; {rdelim}"{/if}{/if}>
				    </a>
				    </div>
				</td>
			    </tr>
			    <tr>
				<td class="title" valign=top>{if $same_title_uploads eq "0"}<a href="{$base_url}/{$xtype}/{$title}">{else}<a href="{$base_url}/{$xtype}/{$res[x].vkey}">{/if}<span class="bold">{$res[x].vtitle|truncate:$tr_titlegrid:"..."}</span></a></td>
			    </tr>
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
			    <tr>
				<td>
				    <table cellpadding=0 cellspacing=0 width="100%">
					<tr>
					    <td class="centered" colspan="2">
						<span class="gr">{$fileaddedby}</span>
						{if $xtype eq "audio"}{insert name=key_to_user_audio assign=owner vkey=$res[x].vkey}{/if}
						{if $xtype eq "image"}{insert name=key_to_user_image assign=owner vkey=$res[x].vkey}{/if}
						{if $xtype eq "video"}{insert name=key_to_user assign=owner vkey=$res[x].vkey}{/if}
						{if $sbtn eq "adm_search"}<a href="{$admin_url}/members/{$res[x].uid}">{$owner}</a>{else}<a href="{$base_url}/profile/{if $special_characters eq "0"}{$owner}{else}{$res[x].uid}{/if}">{$owner}</a>{/if}
					    </td>
					</tr>
					{if $smarty.request.filter eq "most_recent"}
					<tr>
					    <td class="centered" colspan="2"><span class="gr">{$fileadded}</span>{insert name=time_range assign=rtime field=addtime IDFR=vid id=$res[x].vid tbl=files_$xtype}{$rtime} {$fileaddedago}</td>
					</tr>
					{/if}
					{if $smarty.request.filter eq "most_played" || $smarty.request.filter eq "" || $smarty.request.filter eq "top_rated"}
					<tr>
					    <td class="centered" colspan="2"><span class="gr">{if $xtype eq "audio"}{$fileauditions}{elseif $xtype eq "image" or $xtype eq "video"}{$fileviews}{/if}</span>{$res[x].views|viewnr}</td>
					</tr>
					{/if}
					{if $smarty.request.filter eq "most_commented"}
					<tr>
					    <td class="centered" colspan="2">
						{insert name=nappcount2 assign=napp2 vid=$res[x].vid type=$xtype}
						<span class="gr">{if $xtype eq "audio"}{$filecomments}{elseif $xtype eq "image" or $xtype eq "video"}{$filecomments}{/if}</span>{$res[x].comments-$napp2}
					    </td>
					</tr>
					{/if}
					{if $smarty.request.filter eq "most_responded"}
					<tr>
					    <td class="centered" colspan="2">{insert name=nappcount assign=napp vid=$res[x].vid type=$xtype}<span class="gr">{$fresp_txt29}</span>{$res[x].responses-$napp}</td>
					</tr>
					{/if}
					{if $file_ratings eq "1"}
					<tr>
					    <td>{$minutes}{$fileduration_min}{$seconds}{$fileduration_sec}</td>
					    <td class="pl20">
						{if $xtype eq "audio"}
						{insert name=key_to_rate_audio assign=ratea vkey=$res[x].vkey}{$ratea}
						{elseif $xtype eq "image"}
						{insert name=key_to_rate_image assign=ratei vkey=$res[x].vkey}{$ratei}
						{elseif $xtype eq "video"}
						{insert name=key_to_rate assign=ratev vkey=$res[x].vkey}{$ratev}
						{/if}
					    </td>
					</tr>
					{/if}
				    </table>
				</td>
			    </tr>
			</table>
		    </td>
		    {/section}
		</tr>
		<tr>
                    <td colspan="5">{include file="_inc/inc_searchactgrid.tpl"}</td>
                </tr>
	    </table>
	</div>
