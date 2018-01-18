	{if $smarty.request.id eq ""}
	<form name="inboxmsg" method="post" action="">
	    <table border="0" cellpadding="5" cellspacing="1" width="100%">
		<tr>
		    <td class="th2" align="center">{if $resp[0].rtovid ne ""}<input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmsg(document.inboxmsg['mid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmsg(document.inboxmsg['mid[]']); HideContent('actdiv'); {rdelim}">{/if}</td>
		    <td class="th2">&nbsp;</td>
		    <td class="th2">{$fresp_txt34}</td>
		    <td class="th2">{$fresp_txt35}</td>
		</tr>
		{section name=i loop=$resp}
		<tr class="nbg">
		    <td width="3%" class="th1" align="center"><input type="checkbox" name="mid[]" value="{$resp[i].rtovid}" onclick="ShowContent('actdiv')"></td>
		    <td width="15%" class="th1" valign="middle" align="center">
		    {if $smarty.request.type eq "video"}{insert name=getfield assign=vkey field=vkey table=files_video qfield=vid qvalue=$resp[i].rtovid}{insert name=getfield assign=tresp field=responses table=files_video qfield=vid qvalue=$resp[i].rtovid}
		    {elseif $smarty.request.type eq "image"}{insert name=getfield assign=vkey field=vkey table=files_image qfield=vid qvalue=$resp[i].rtovid}{insert name=getfield assign=tresp field=responses table=files_image qfield=vid qvalue=$resp[i].rtovid}
		    {elseif $smarty.request.type eq "audio"}{insert name=getfield assign=vkey field=vkey table=files_audio qfield=vid qvalue=$resp[i].rtovid}{insert name=getfield assign=tresp field=responses table=files_audio qfield=vid qvalue=$resp[i].rtovid}
		    {/if}
			{$fresp_txt37}{$myfiles_delim}{$tresp} {$fresp_txt38}{$myfiles_delim}<br><br><a href="{$base_url}/responses/{$section}/{$vkey}/a0">{$fresp_txt36}</a>
		    </td>
		    <td valign="top" width="50%" class="th1">
			<table width="100%" cellpadding="2" cellspacing="0">
			    <tr>
				<td width="{$img_max_width+6}" valign="top">
				{if $section eq "video"}
				    {assign var=qlv value="v"}
				    {insert name=getfield assign=ftitle field=vtitle table=files_video qfield=vkey qvalue=$vkey}
				    {insert name=getfield assign=fdescr field=vdescr table=files_video qfield=vkey qvalue=$vkey}
				    {insert name=titlev assign=title vkey=$vkey}
				    {insert name=vid_to_rndv assign=rnd vid=$resp[i].rtovid}
				    {insert name=vid_to_rndvv assign=rndbn vid=$resp[i].rtovid}
				    {if $thumb_module eq "1"}
				    {insert name=check_img assign=isfile vid=$resp[i].rtovid uid=$resp[i].ruid}
				    {insert name=gen_array assign=arra nr=$thumb_nr}
				    <script type="text/javascript">turl['{$rnd}']=0; timg['{$rnd}']=new Array(); thumbs['{$rnd}']=new Array({$arra});</script>
				    <input type="hidden" name="thnr{$rnd}" id="thnr{$rnd}" value="{if $isfile eq "yes"}{$thumb_nr}{else}3{/if}">
				    <input type="hidden" name="thdelay{$rnd}" id="thdelay{$rnd}" value="{$thumb_delay}">
				    {/if}
				{elseif $section eq "image"}
				    {insert name=getfield assign=ftitle field=vtitle table=files_image qfield=vkey qvalue=$vkey}
				    {insert name=getfield assign=fdescr field=vdescr table=files_image qfield=vkey qvalue=$vkey}
				    {insert name=getfield assign=fvflvname field=vflvname table=files_image qfield=vkey qvalue=$vkey}
				    {assign var=qlv value="i"}
				    {insert name=titlei assign=title vkey=$vkey}
				{elseif $section eq "audio"}
				    {insert name=getfield assign=ftitle field=vtitle table=files_audio qfield=vkey qvalue=$vkey}
				    {insert name=getfield assign=fdescr field=vdescr table=files_audio qfield=vkey qvalue=$vkey}
				    {assign var=qlv value="a"}
				    {insert name=titlea assign=title vkey=$vkey}
				    {insert name=vid_to_rnda assign=rnd vid=$resp[i].rtovid}
				    {insert name=vid_to_rndvv assign=rndv vid=$resp[i].rtovid}
				{/if}
				    <div class="qlistadding bottomleft">
                            		<div id="{$qlv}qlistadd{$vkey}" class="qlisticon">
                                	    <a href="javascript:void(0)" alt="{$qlist_txt1}" title="{$qlist_txt1}" onmouseover="setqlicon('on', '{$section}', '{$vkey}', 'grid');" onmouseout="setqlicon('off', '{$section}', '{$vkey}', 'grid');" onclick="add2ql('{$section}', '{$section}', '{$vkey}', 'grid');">
                                    		&nbsp;&nbsp;&nbsp;&nbsp;
                                	    </a>
                            		</div>
				    {if $same_title_uploads eq "0"}
                                    <a href="{$base_url}/{$section}/{$title}">
                                    {else}
                                    <a href="{$base_url}/{$section}/{$vkey}">
                                    {/if}
                                    
					{if $section eq "video"}<img {if $section eq "video"}id="{$rnd}" name="{$rnd}" src="{$tmb_url}/user{$resp[i].ruid}/{$rndbn}_{$rnd}.jpg" {if $thumb_module eq "1"}onmouseover="if (window.loaded == true) {ldelim} startslide('{$rnd}','{$tmb_url}/user{$resp[i].ruid}/', '_{$rnd}.jpg'); {rdelim}" onmouseout="if (window.loaded == true) {ldelim} stopslide('{$rnd}'); this.src='{$tmb_url}/user{$resp[i].ruid}/1_{$rnd}.jpg'; {rdelim}"{/if}{elseif $section eq "image"}src="{$tmb_url}/user{$resp[i].uid}/{$resp[i].vflvname}"{elseif $section eq "audio"}src="{$tmb_url}/user{$resp[i].uid}/{$rndv}_{$rnd}.jpg"{/if} width="{$img_max_width}" height="{$img_max_height}" alt="{$ftitle}" title="{$ftitle}" class="thumb">
					{elseif $section eq "image"}<img src="{$tmb_url}/user{$resp[i].ruid}/{$fvflvname}" width="{$img_max_width}" height="{$img_max_height}" alt="{$ftitle}" title="{$ftitle}" class="thumb">
					{elseif $section eq "audio"}<img src="{$tmb_url}/user{$resp[i].ruid}/{$rndv}_{$rnd}.jpg" width="{$img_max_width}" height="{$img_max_height}" alt="{$ftitle}" title="{$ftitle}" class="thumb">
					{/if}
				    </a>
				    </div>
				</td>
				<td align="left" valign="top">
				    {if $same_title_uploads eq "0"}<a href="{$base_url}/{$section}/{$title}" title="{$ftitle}">{else}<a href="{$base_url}/{$section}/{$vkey}" title="{$ftitle}">{/if}
				    <span class="mvtitle">{$ftitle|truncate:$tr_titlelist:"..."}</span></a><br>
				    <span class="vdescr">{$fdescr|truncate:$tr_desclist:"..."|nl2br|spchar}</span>
				</td>
			    </tr>
			</table>
		    </td>
		    <td valign="top" width="25%" class="th1">{if $section eq "video"}{assign var=tbl value=files_video}{elseif $section eq "image"}{assign var=tbl value=files_image}{elseif $section eq "audio"}{assign var=tbl value=files_audio}{/if}
			{insert name=getfield assign=lm field=rtime table=file_responses qfield=rtovid qvalue=$resp[i].rtovid order="order by rtime desc"}
			{$lm|convertunix:"M d, Y, G:i A"}<br>
			{insert name=getfield assign=byc field=uid table=$tbl qfield=vid qvalue=$resp[i].rtovid}
			
			{insert name=getfield assign=resuid field=resuid table=file_responses qfield=rtovid qvalue=$resp[i].rtovid order="and rtype='$section' order by rtime desc"}
			{$comm_by}{insert name=uid_to_names assign=names uid=$resuid}<a href="{$base_url}/profile/{if $special_characters eq "0"}{$names}{else}{$byc}{/if}">{$names}</a>
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
            {include file="_inc/inc_resp.tpl"}
        {/if}