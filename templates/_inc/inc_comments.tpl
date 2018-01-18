	{if $section ne "profile" and $smarty.request.id eq ""}
	<form name="inboxmsg" method="post" action="">
	    <table border="0" cellpadding="5" cellspacing="1" width="100%">
		<tr>
		    <td class="th2" align="center">{if $comm[0].vid ne ""}<input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmsg(document.inboxmsg['mid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmsg(document.inboxmsg['mid[]']); HideContent('actdiv'); {rdelim}">{/if}</td>
		    <td class="th2">&nbsp;</td>
		    <td class="th2">{$comm_file}</td>
		    <td class="th2">{$comm_last}</td>
		</tr>
		{section name=i loop=$comm}
		<tr class="nbg">
		    <td width="3%" class="th1" align="center"><input type="checkbox" name="mid[]" value="{$comm[i].vid}" onclick="ShowContent('actdiv')"></td>
		    <td width="15%" class="th1" valign="middle" align="center">
			{$comm_txt1}{$myfiles_delim}{$comm[i].comments}{$adm_setunit1}{$myfiles_delim}<br><br><a href="{$base_url}/my_comments/{$section}/{$comm[i].vkey}/a0">{$comm_view}</a>
		    </td>
		    <td valign="top" width="50%" class="th1">
			<table width="100%" cellpadding="2" cellspacing="0">
			    <tr>
				<td width="{$img_max_width+6}" valign="top">
				{if $section eq "video"}
				    {assign var=qlv value="v"}
				    {insert name=titlev assign=title vkey=$comm[i].vkey}
				    {insert name=vid_to_rndv assign=rnd vid=$comm[i].vid}
				    {insert name=vid_to_rndvv assign=rndbn vid=$comm[i].vid}
				    {if $thumb_module eq "1"}
				    {insert name=check_img assign=isfile vid=$comm[i].vid uid=$comm[i].uid}
				    {insert name=gen_array assign=arra nr=$thumb_nr}
				    <script type="text/javascript">turl['{$rnd}']=0; timg['{$rnd}']=new Array(); thumbs['{$rnd}']=new Array({$arra});</script>
				    <input type="hidden" name="thnr{$rnd}" id="thnr{$rnd}" value="{if $isfile eq "yes"}{$thumb_nr}{else}3{/if}">
				    <input type="hidden" name="thdelay{$rnd}" id="thdelay{$rnd}" value="{$thumb_delay}">
				    {/if}
				{elseif $section eq "image"}
				    {assign var=qlv value="i"}
				    {insert name=titlei assign=title vkey=$comm[i].vkey}
				{elseif $section eq "audio"}
				    {assign var=qlv value="a"}
				    {insert name=titlea assign=title vkey=$comm[i].vkey}
				    {insert name=vid_to_rnda assign=rnd vid=$comm[i].vid}
				    {insert name=vid_to_rndvv assign=rndv vid=$comm[i].vid}
				{/if}
				    <div class="qlistadding bottomleft">
                                        <div id="{$qlv}qlistadd{$comm[i].vkey}" class="qlisticon">
                                            <a href="javascript:void(0)" alt="{$qlist_txt1}" title="{$qlist_txt1}" onmouseover="setqlicon('on', '{$section}', '{$comm[i].vkey}', 'grid');" onmouseout="setqlicon('off', '{$section}', '{$comm[i].vkey}', 'grid');" onclick="add2ql('{$section}', '{$section}', '{$comm[i].vkey}', 'grid');">
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                            </a>
                                        </div>
				    {if $same_title_uploads eq "0"}
                                    <a href="{$base_url}/{$section}/{$title}">
                                    {else}
                                    <a href="{$base_url}/{$section}/{$comm[i].vkey}">
                                    {/if}
					<img {if $section eq "video"}id="{$rnd}" name="{$rnd}" src="{$tmb_url}/user{$comm[i].uid}/{$rndbn}_{$rnd}.jpg" {if $thumb_module eq "1"}onmouseover="if (window.loaded == true) {ldelim} startslide('{$rnd}','{$tmb_url}/user{$comm[i].uid}/', '_{$rnd}.jpg'); {rdelim}" onmouseout="if (window.loaded == true) {ldelim} stopslide('{$rnd}'); this.src='{$tmb_url}/user{$comm[i].uid}/1_{$rnd}.jpg'; {rdelim}"{/if}{elseif $section eq "image"}src="{$tmb_url}/user{$comm[i].uid}/{$comm[i].vflvname}"{elseif $section eq "audio"}src="{$tmb_url}/user{$comm[i].uid}/{$rndv}_{$rnd}.jpg"{/if} width="{$img_max_width}" height="{$img_max_height}" alt="{$comm[i].vtitle}" title="{$comm[i].vtitle}" class="{if $comm[i].vtype eq "private"}thumbp{elseif $comm[i].is_featured eq 'yes'}thumbf{else}thumb{/if}">
				    </a>
				    </div>
				</td>
				<td align="left" valign="top">
				    {if $same_title_uploads eq "0"}<a href="{$base_url}/{$section}/{$title}" title="{$comm[i].vtitle}">{else}<a href="{$base_url}/{$section}/{$comm[i].vkey}" title="{$comm[i].vtitle}">{/if}
				    <span class="mvtitle">{$comm[i].vtitle|truncate:$tr_titlelist:"..."}</span></a><br>
				    <span class="vdescr">{$comm[i].vdescr|truncate:$tr_desclist:"..."|nl2br|spchar}</span>
				</td>
			    </tr>
			</table>
		    </td>
		    <td valign="top" width="25%" class="th1">{if $section eq "video"}{assign var=tbl value=comm_vid}{elseif $section eq "image"}{assign var=tbl value=comm_img}{elseif $section eq "audio"}{assign var=tbl value=comm_audio}{/if}
			{insert name=getfield assign=lm field=addtime table=$tbl qfield=vid qvalue=$comm[i].vid order="order by addtime desc"}
			{$lm|convertunix:"M d, Y, G:i A"}<br>
			{insert name=getfield assign=byc field=uid table=$tbl qfield=vid qvalue=$comm[i].vid order="order by addtime desc"}
			{$comm_by}{insert name=uid_to_names assign=names uid=$byc}<a href="{$base_url}/profile/{if $special_characters eq "0"}{$names}{else}{$byc}{/if}">{$names}</a>
		    </td>
		</tr>
		{/section}
		<tr>
		    <td colspan=4 class="nopad" valign="top">
			{include file="_inc/inc_selectactions.tpl"}
		    </td>
		</tr>
		<tr>
		    <td colspan=4 class="pag_bg" align="center" valign="top">{$link}</td>
		</tr>
	    </table>
	</form>
	{else}
	    {include file="_inc/inc_commp.tpl"}
	{/if}
