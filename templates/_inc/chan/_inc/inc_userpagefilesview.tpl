						{if $smarty.section.v.index mod 5 eq "0" and $smarty.section.v.index gt "0"}</tr><tr>{/if}
						{if $enable_videos eq "1" and $thumb_module eq "1" and $smarty.get.view ne "audios" and $smarty.get.view ne "images" and $smarty.get.view ne "video_blog" and $smarty.get.view ne "image_blog" and $smarty.get.view ne "audio_blog"}
                                                    <script type="text/javascript">
                                                        {insert name=gen_array assign=larra nr=$thumb_nr}
                                                        {insert name=getfield assign=tmbvid field=vid table=files_video qfield=vkey qvalue=$varr[v]}
                                                        {insert name=vid_to_rndv assign=rnd vid=$tmbvid}
                                                        lturl['l{$rnd}']=0; ltimg['l{$rnd}']=new Array(); lthumbs['l{$rnd}']=new Array({$larra});
                                                        turl['{$rnd}']=0; timg['{$rnd}']=new Array(); thumbs['{$rnd}']=new Array({$larra});
                                                    </script>
                                                {/if}
						<td align="center" class="p5" valign="top" width="20%">
						    <table cellpadding="1" cellspacing="0" border="0">
							<tr>
							    <td valign=top align="center">
								{if $smarty.get.view eq "videos" or $smarty.get.sort eq "videos"}{insert name=titlev assign=title vkey=$varr[v]}
								{elseif $smarty.get.view eq "images" or $smarty.get.sort eq "images"}{insert name=titlei assign=title vkey=$varr[v]}
								{elseif $smarty.get.view eq "audios" or $smarty.get.sort eq "audios"}{insert name=titlea assign=title vkey=$varr[v]}
								{/if}
								{insert name=getfield assign=vvid field=vid table=$b9v4 qfield=vkey qvalue=$varr[v]}
								{insert name=getfield assign=vuid field=uid table=$b9v4 qfield=vkey qvalue=$varr[v]}
								{insert name=getfield assign=vtitle field=vtitle table=$b9v4 qfield=vkey qvalue=$varr[v]}
								{insert name=getfield assign=vviews field=views table=$b9v4 qfield=vkey qvalue=$varr[v]}
								{insert name=getfield assign=vcomm field=comments table=$b9v4 qfield=vkey qvalue=$varr[v]}
								{insert name=getfield assign=vrate field=rate table=$b9v4 qfield=vkey qvalue=$varr[v]}
								{insert name=getfield assign=vduration field=vduration table=$b9v4 qfield=vkey qvalue=$varr[v]}
								{if $smarty.get.view eq "videos" or $smarty.get.sort eq "videos"}
								{insert name=key_to_user assign=owner vkey=$varr[v]}
								{insert name=vid_to_rndv assign=rnd vid=$vvid}
				                                {insert name=vid_to_rndvv assign=rndbn vid=$vvid}
				                                {elseif $smarty.get.view eq "images" or $smarty.get.sort eq "images"}
				                                {insert name=key_to_user_image assign=owner vkey=$varr[v]}
				                                {insert name=getfield assign=vimg field=vflvname table=$b9v4 qfield=vkey qvalue=$varr[v]}
				                                {elseif $smarty.get.view eq "audios" or $smarty.get.sort eq "audios"}
				                                {insert name=key_to_user_audio assign=owner vkey=$varr[v]}
				                                {insert name=vid_to_rnda assign=rnd vid=$vvid}
				                                {insert name=vid_to_rndvv assign=rndbn vid=$vvid}
				                                {/if}
				                                {assign var=vid_uid value=$vuid}
				                                {if $thumb_module eq "1" and $smarty.get.view eq "videos" or $smarty.get.sort eq "videos"}
				                                    {insert name=check_img assign=isfile vid=$vvid uid=$vid_uid}
				                                    <input type="hidden" name="thnr{$rnd}" id="thnr{$rnd}" value="{if $isfile eq "yes"}{$thumb_nr}{else}3{/if}">
				                                    <input type="hidden" name="thdelay{$rnd}" id="thdelay{$rnd}" value="{$thumb_delay}">
				                                {/if}
				                                
				                                <div class="qlistadding bottomleft">
				                                <div id="{$b9v6}qlistadd{$varr[v]}" class="qlisticon">
				                            	    <a href="javascript:void(0)" alt="{$qlist_txt1}" title="{$qlist_txt1}" onmouseover="setqlicon('on', '{$b9v5}', '{$varr[v]}', 'grid');" onmouseout="setqlicon('off', '{$b9v5}', '{$varr[v]}', 'grid');" onclick="add2ql('{$b9v5}', '{$b9v5}', '{$varr[v]}', 'grid');"><div>&nbsp;</div></a>
				                            	</div>
				                            	{if $same_title_uploads eq "0"}
				                            	    <a href="{$base_url}/{$b9v5}/{$title}">
				                            	{else}
				                            	    <a href="{$base_url}/{$b9v5}/{$varr[v]}">
				                            	{/if}
				                            	{if $smarty.get.view eq "videos" or $smarty.get.sort eq "videos"}
				                            	        <img id="{$rnd}" name="{$rnd}" src="{$tmb_url}/user{$vuid}/{$rndbn}_{$rnd}.jpg" {if $thumb_module eq "1"}onmouseover="if (window.loaded == true) {ldelim} startslide('{$rnd}','{$tmb_url}/user{$vuid}/', '_{$rnd}.jpg'); {rdelim}" onmouseout="if (window.loaded == true) {ldelim} stopslide('{$rnd}'); this.src='{$tmb_url}/user{$vuid}/1_{$rnd}.jpg'; {rdelim}"{/if} width="{$img_max_width}" height="{$img_max_height}" alt="{$vtitle}" title="{$vtitle}" class="pborder">
				                            	{elseif $smarty.get.view eq "images" or $smarty.get.sort eq "images"}
				                            		<img src="{$tmb_url}/user{$vuid}/{$vimg}" width="{$img_max_width}" height="{$img_max_height}" alt="{$vtitle}" title="{$vtitle}" class="pborder">
				                            	{elseif $smarty.get.view eq "audios" or $smarty.get.sort eq "audios"}
				                            		<img src="{$tmb_url}/user{$vuid}/{$rndbn}_{$rnd}.jpg" width="{$img_max_width}" height="{$img_max_height}" alt="{$vtitle}" title="{$vtitle}" class="pborder">
				                            	{/if}
				                            	    </a>
				                            	</div>
				                            </td>
				                        </tr>
				                        <tr>
				                    	    <td align="left" class="nopad">
				                            	<div class="f12 bold">
				                            	{if $same_title_uploads eq "0"}
				                            	    <a href="{$base_url}/{$b9v5}/{$title}">
				                            	{else}
				                            	    <a href="{$base_url}/{$b9v5}/{$varr[v]}">
				                            	{/if}
				                            		{$vtitle|truncate:$tr_titlegrid:"..."}
				                            	    </a>
				                            	</div>
				                            	<div class="pt4"></div>
							    </td>
							</tr>
							<tr>
							    <td align="left" class="nopad"><span class="bodylabel f11">{insert name=time_range assign=rtime field=addtime IDFR=vid id=$vvid tbl=$b9v4}{$rtime} {$fileaddedago}</span></td>
							</tr>
							{if $smarty.get.sort eq "" or $smarty.get.sort eq "mv"}
							<tr>
							    <td align="left" class="nopad"><span class="bodylabel f11">{$vviews|viewnr}{if $vviews eq 0 or $vviews gt 1}{$plist_txt61}{else}{$plist_txt611}{/if}</span></td>
							</tr>
							{elseif $smarty.get.sort eq "md"}
							<tr>
							    <td align="left" class="nopad"><span class="bodylabel f11">{$vcomm|viewnr}{if $vcomm eq 0 or $vcomm gt 1}{$count_multicomm}{else}{$count_singlecomm}{/if}</span></td>
							</tr>
							{/if}
							<tr>
							    <td align="left" class="nopad" style="padding-bottom: 3px;"><span class="bodylabel f11"><a href="{$base_url}/user/{$owner}">{$owner}</a></span></td>
							</tr>
							<tr>
							    <td align="left" class="nopad">
								<table width="100%" cellpadding="0" cellspacing="0">
								    <tr>
									{if $file_ratings eq "1"}
									<td align="left">
									    {if $smarty.get.view eq "videos" or $smarty.get.sort eq "videos"}{insert name=key_to_rate assign=rate vkey=$varr[v]}
									    {elseif $smarty.get.view eq "images" or $smarty.get.sort eq "images"}{insert name=key_to_rate_image assign=rate vkey=$varr[v]}
									    {elseif $smarty.get.view eq "audios" or $smarty.get.sort eq "audios"}{insert name=key_to_rate_audio assign=rate vkey=$varr[v]}
									    {/if}{if $vrate gt 0}{$rate}{else}<span class="bodylabel f11">{$ch_norate}</span>{/if}
									</td>
									{/if}
									<td align="{if $file_ratings eq "1"}right{else}left{/if}" {if $file_ratings eq "0"}class="nopad"{/if}>
									    {assign var=viddur value=$vduration}
									    {math equation="$viddur/60" format="%0.0f" assign=minutes}
									    {math equation="$viddur - ($minutes * 60)" format="%0.0f" assign=seconds}
									    {if $seconds < 0}
										{math equation="$minutes - 1" assign=minutes}
										{math equation="$seconds + 60" assign=seconds}
									    {/if}
									    {if $smarty.get.view eq "videos" or $smarty.get.sort eq "videos" or $smarty.get.view eq "audios" or $smarty.get.sort eq "audios"}<span class="bodylabel f11">{$minutes}{$fileduration_min}{$seconds}{$fileduration_sec}</span>{/if}
									</td>
								    </tr>
								</table>
							    </td>
							</tr>
							{if !$smarty.section.v.last}
							    <tr>
								<td class="nopad">&nbsp;</td>
							    </tr>
							{/if}
						    </table>
						</td>
