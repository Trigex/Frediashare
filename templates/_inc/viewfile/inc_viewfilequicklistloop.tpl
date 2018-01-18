				    <div {if $ftotal gt 5}class="rel3"{/if} id="ctdivx" style="{if $vpage_fqlist_box eq "e"}display: block;{else}display: none;{/if} {if $ftotal gt 5}height: 260px; overflow-x: hidden;{/if}">
					<div class="p5"></div>
					<div id="qlistloading" style="display: none;"><table cellpadding=5 cellspacing=0 border=0><tr><td>{$adm_setgen79}</td><td>{$loading_gif}</td></tr></table></div>
					<div id="qloadme"></div>
					{section name=q loop=$qlist}
					{if $smarty.server.REMOTE_ADDR eq $qlist[q].quicklist_ip}
					    <table width="98%" cellpadding="1" cellspacing="1" border="0" {if $vidid eq $qlist[q].vid}{if $site_theme eq "black"}class="qact"{else}class="qact2"{/if}{/if} align="center">
						<tr>
						    <td width="8%" class="">{if $smarty.section.q.iteration lt 10}&nbsp;{/if}{$smarty.section.q.iteration}</td>
						    <td width="{$img_max_width/2}" valign="bottom">
							{if $btn eq "baudio"}{assign var=section value="audio"}{insert name=vid_to_rnda assign=rnd vid=$qlist[q].vid}{insert name=vid_to_rndvv assign=rndbn vid=$qlist[q].vid}{elseif $btn eq "bimage"}{assign var=section value="image"}{elseif $btn eq "bvideo"}{assign var=section value="video"}{insert name=vid_to_rndv assign=rnd vid=$qlist[q].vid}{insert name=vid_to_rndvv assign=rndbn vid=$qlist[q].vid}{/if}
							{insert name=getfield assign=fkey field=vkey table=files_$section qfield=vid qvalue=$qlist[q].vid}
							{insert name=getfield assign=ftitle field=vtitle table=files_$section qfield=vid qvalue=$qlist[q].vid}
							{insert name=getfield assign=fimg field=vflvname table=files_$section qfield=vid qvalue=$qlist[q].vid}
							{insert name=getfield assign=fduration field=vduration table=files_$section qfield=vid qvalue=$qlist[q].vid}
							{assign var=viddur value=$fduration}{math equation="$viddur/60" format="%0.0f" assign=minutes}{math equation="$viddur - ($minutes * 60)" format="%0.0f" assign=seconds}{if $seconds < 0}{math equation="$minutes - 1" assign=minutes}{math equation="$seconds + 60" assign=seconds}{/if}
							{if $btn eq "baudio"}{insert name=titlea assign=title vkey=$fkey}{elseif $btn eq "bimage"}{insert name=titlei assign=title vkey=$fkey}{elseif $btn eq "bvideo"}{insert name=titlev assign=title vkey=$fkey}{/if}
							{if $same_title_uploads eq "0"}<a href="{$base_url}/{$section}/{$title}">{else}<a href="{$base_url}/{$section}/{$smarty.request.id}">{/if}
							    {insert name=getfield assign=fuid field=uid table=files_$section qfield=vid qvalue=$qlist[q].vid}
							    {insert name=getfield assign=fviews field=views table=files_$section qfield=vid qvalue=$qlist[q].vid}
							    <img src="{if $section eq "image"}{$tmb_url}/user{$fuid}/{$fimg}{else}{$tmb_url}/user{$fuid}/{$rndbn}_{$rnd}.jpg{/if}" width="{$img_max_width/2}" height="{$img_max_height/2}" alt="{$ftitle}" title="{$ftitle}" class="thumb">
                                                        </a>
						    </td>
						    <td valign="top">
							{insert name=uid_to_names assign=names uid=$qlist[q].from_uid}
							<div class="p2">{if $same_title_uploads eq "0"}<a href="{$base_url}/{$section}/{$title}">{else}<a href="{$base_url}/{$section}/{$smarty.request.id}">{/if}<span class="bold">{$ftitle|truncate:$tr_titlelist:"..."}</span></a></div>
							{if $smarty.session.UID eq ""}<div class="p2">{$fileviews}{$fviews|viewnr}</div>{else}<div class="p2">{$inbox_mfrom} <a href="{$base_url}/profile/{if $special_characters eq "0"}{$names}{else}{$qlist[q].from_uid}{/if}">{$names}</a></div>{/if}
						    </td>
						    <td align="right">{$minutes}{$fileduration_min}{$seconds}{$fileduration_sec}</td>
						    <td align="right" width="5%" class=""><a href="javascript:void(0)" onclick="thisDiv('no'); ldiv('qloadme'); delqlistitem('{$section}', '{$qlist[q].vid}', '{$vidid}');">X&nbsp;</a></td>
						    <td width="1%">&nbsp;</td>
						</tr>
					    </table>
					{/if}
					{/section}
				    </div>
