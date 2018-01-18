
<!-- BEGIN CATEGORIES TABLE -->
<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
    <tr><td class="p5" align="right">{if $total ne "0"}{$categ_nr}[{$start_num}-{$end_num}]{$categ_of}[{$total}]{/if}</td></tr>
</table>
<table cellpadding="5" cellspacing="0" border=0 align=center class="width950b">
    <tr>
	<td class="nopad" colspan=2>
	    <table cellpadding="10" cellspacing="0" border=0 align="center">
		<tr>
		{section name=i loop=$categs}
		{if $smarty.section.i.index mod 3 eq "0" and $smarty.section.i.index gt "0"}</tr><tr>{/if}
		    <td valign="top">
			<table cellpadding="10" cellspacing="0" border=0 width="280" class="br">
			    <tr>
				<td class="nbg">
				    <table cellpadding="3" cellspacing="0" border=0 width="100%">
					<tr>
					    <td colspan=2>
						{if $categs[i].video_uploads eq "yes" and $enable_videos eq "1"}<a href="{$base_url}/categories/video/{if $special_characters eq "0"}{$tit[i]}{else}{$categs[i].cid}{/if}"><span class="large">{$categs[i].name}</span></a>
						{elseif $categs[i].audio_uploads eq "yes" and $enable_audio eq "1"} <a href="{$base_url}/categories/audio/{if $special_characters eq "0"}{$tit[i]}{else}{$categs[i].cid}{/if}"><span class="large">{$categs[i].name}</span></a>
						{elseif $categs[i].image_uploads eq "yes" and $enable_images eq "1"} <a href="{$base_url}/categories/image/{if $special_characters eq "0"}{$tit[i]}{else}{$categs[i].cid}{/if}"><span class="large">{$categs[i].name}</span></a>
						{/if}
					    </td>
					</tr>
					<tr>
					    <td width="{$categwidth}" class="pb10">
						<table width="100%" cellpadding="0" cellspacing="0"><tr><td>
						{if $categs[i].video_uploads eq "yes" and $enable_videos eq "1"}<a href="{$base_url}/categories/video/{if $special_characters eq "0"}{$tit[i]}{else}{$categs[i].cid}{/if}"><img src="{$catimg_url}/{$categs[i].image}" width="{$categwidth}" height="{$categheight}" alt="{$categs[i].name}" class="thumb"></a>
						{elseif $categs[i].audio_uploads eq "yes" and $enable_audio eq "1"} <a href="{$base_url}/categories/audio/{if $special_characters eq "0"}{$tit[i]}{else}{$categs[i].cid}{/if}"><img src="{$catimg_url}/{$categs[i].image}" width="{$categwidth}" height="{$categheight}" alt="{$categs[i].name}" class="thumb"></a>
						{elseif $categs[i].image_uploads eq "yes" and $enable_images eq "1"} <a href="{$base_url}/categories/image/{if $special_characters eq "0"}{$tit[i]}{else}{$categs[i].cid}{/if}"><img src="{$catimg_url}/{$categs[i].image}" width="{$categwidth}" height="{$categheight}" alt="{$categs[i].name}" class="thumb"></a>
						{/if}
						</td></tr></table>
					    </td>    
					    <td valign="top" align="left" width="100%">
						<table cellpadding=0 cellspacing=0 width="100%" border=0>
						    <tr>
							<td align="left">{$categs[i].descrip|nl2br|spchar}</td>
							<td valign="top" align="right" class="pt3"><span id="memb{$categs[i].cid}"></span><img class="cursor" id="img{$categs[i].cid}" src="{$theme_url}/{$site_theme}/images/sign_plus.gif" width="10" height="10" alt="{$search_ntxt3}" onclick="ReverseContentDisplay('cstat{$categs[i].cid}'); ReverseSign('{$categs[i].cid}');"></td>
						    </tr>
						</table>
					    </td>
					</tr>
				    </table>
				    <table cellpadding="3" cellspacing="0" border=0 width="100%">
					<tr>
					    <td align="left" class="dottbt">
						<div id="cstat{$categs[i].cid}" style="display: none;" class="pt5">
						    <table width="100%" cellpadding="0" cellspacing="0" border=0>
							<tr>
							    <td width="65%" valign="top">
								{if $enable_videos eq "1"}
								<div class="p2">
								<table cellpadding="0" cellspacing="0">
								    <tr>
									{insert name=latest_video_addition assign=lvid cid=$categs[i].cid}
									{if $lvid ne ""}
									<td valign="top">
									    {insert name=vid_to_key assign=vkey vid=$lvid}
									    {insert name=titlev assign=title vkey=$vkey}
									    {insert name=vid_to_rndv assign=rnd vid=$lvid}
									    {insert name=vid_to_rndvv assign=rndbn vid=$lvid}
									    {insert name=getfield assign=vuid field=uid table=files_video qfield=vid qvalue=$lvid}
									    {insert name=getfield assign=vtitle field=vtitle table=files_video qfield=vid qvalue=$lvid}
									    {insert name=getfield assign=views field=views table=files_video qfield=vid qvalue=$lvid}
									    {if $special_characters eq "0"}<a href="{$base_url}/video/{$title}">{else}<a href="{$base_url}/video/{$vkey}">{/if}
									        <img src="{$tmb_url}/user{$vuid}/{$rndbn}_{$rnd}.jpg" width="{$img_max_width/2}" height="{$img_max_height/2}" alt="{$vtitle}" title="{$vtitle}" class="thumb">
									    </a>
									</td>
									<td valign="middle">
									    <table cellpadding=0 cellspacing=0>
										<tr>
										    <td>&nbsp;{if $special_characters eq "0"}<a href="{$base_url}/video/{$title}" title="{$vtitle}">{else}<a href="{$base_url}/video/{$vkey}" title="{$vtitle}">{/if}<span class="bold">{$vtitle|truncate:$tr_titlegrid:"..."}</span></a></td>
										</tr>
										{if $file_ratings eq "1"}
										<tr>
										    <td class="pl2">{insert name=key_to_rate assign=rate vkey=$vkey}{$rate}</td>
										</tr>
										{/if}
									    </table>
									    {elseif $lvid eq ""}
									<td class="p2">{$categ_norecv}</td>
									    {/if}
								    </tr>
								</table>
								</div>
								{/if}
								
								{if $enable_images eq "1"}
								<div class="p2">
								<table cellpadding="0" cellspacing="0">
								    <tr>
								    {insert name=latest_image_addition assign=limg cid=$categs[i].cid}
								    {if $limg ne ""}
								    <td valign="top">
									{insert name=getfield assign=ititle field=vtitle table=files_image qfield=vid qvalue=$limg}
                                					{insert name=getfield assign=ikey field=vkey table=files_image qfield=vid qvalue=$limg}
                                					{insert name=getfield assign=iuid field=uid table=files_image qfield=vid qvalue=$limg}
                                					{insert name=getfield assign=vpic field=vflvname table=files_image qfield=vid qvalue=$limg}
                                					{insert name=titlei assign=titlei vkey=$ikey}
                                					{insert name=getfield assign=iviews field=views table=files_image qfield=vid qvalue=$limg}
								    {if $special_characters eq "0"}
									<a href="{$base_url}/image/{$titlei}">
								    {else}
									<a href="{$base_url}/image/{$ikey}">
								    {/if}
									<img src="{$tmb_url}/user{$iuid}/{$vpic}" width="{$img_max_width/2}" height="{$img_max_height/2}" alt="{$ititle}" title="{$ititle}" class="thumb">
									</a>
								    </td>
								    <td valign="middle">
									<table cellpadding=0 cellspacing=0>
									    <tr>
									        <td>&nbsp;{if $special_characters eq "0"}<a href="{$base_url}/image/{$titlei}" title="{$ititle}">{else}<a href="{$base_url}/image/{$ikey}" title="{$ititle}">{/if}<span class="bold">{$ititle|truncate:$tr_titlegrid:"..."}</span></a></td>
									    </tr>
									    {if $file_ratings eq "1"}
									    <tr>
									        <td class="pl2">{insert name=key_to_rate_image assign=irate vkey=$ikey}{$irate}</td>
									    </tr>
									    {/if}
									</table>
								    {elseif $limg eq ""}
									<td class="p2">{$categ_noreci}</td>
								    {/if}
								    </tr>
								</table>
								</div>
								{/if}
								
								{if $enable_audio eq "1"}
								<div class="p2">
								<table cellpadding="0" cellspacing="0">
								    <tr>
								    {insert name=latest_audio_addition assign=laud cid=$categs[i].cid}
								    {if $laud ne ""}
								    <td valign="top">
									{insert name=getfield assign=atitle field=vtitle table=files_audio qfield=vid qvalue=$laud}
                                					{insert name=getfield assign=akey field=vkey table=files_audio qfield=vid qvalue=$laud}
                                					{insert name=getfield assign=auid field=uid table=files_audio qfield=vid qvalue=$laud}
                                					{insert name=titlea assign=titlea vkey=$akey}
                                					{insert name=vid_to_rnda assign=rnd vid=$laud}
                                					{insert name=vid_to_rndvv assign=rndv vid=$laud}
                                					{insert name=getfield assign=aviews field=views table=files_audio qfield=vid qvalue=$laud}
								    {if $special_characters eq "0"}
									<a href="{$base_url}/audio/{$titlea}">
								    {else}
									<a href="{$base_url}/audio/{$akey}">
								    {/if}
									<img src="{$tmb_url}/user{$auid}/{$rndv}_{$rnd}.jpg" width="{$img_max_width/2}" height="{$img_max_height/2}" alt="{$atitle}" title="{$atitle}" class="thumb">
									</a>
								    </td>
								    <td valign="middle">
									<table cellpadding=0 cellspacing=0>
									    <tr>
									        <td>&nbsp;{if $special_characters eq "0"}<a href="{$base_url}/audio/{$titlea}" title="{$atitle}">{else}<a href="{$base_url}/audio/{$akey}" title="{$atitle}">{/if}<span class="bold">{$atitle|truncate:$tr_titlegrid:"..."}</span></a></td>
									    </tr>
									    {if $file_ratings eq "1"}
									    <tr>
									        <td class="pt2">{insert name=key_to_rate_audio assign=arate vkey=$akey}{$arate}</td>
									    </tr>
									    {/if}
									</table>
								    {elseif $laud eq ""}
									<td class="p2">{$categ_noreca}</td>
								    {/if}
								    </tr>
								</table>
								</div>
								{/if}
							    </td>
							    <td width="35%" valign="top" align="right">
								{if $enable_videos eq "1"}{insert name=categ_count assign=count cid=$categs[i].cid}<div class="p2"><a href="{$base_url}/categories/video/{if $special_characters eq "0"}{$tit[i]}{else}{$categs[i].cid}{/if}/recent"><span class="gr">{$user_videos}</span>({$count[1]|viewnr})</a></div>{/if}
								{if $enable_images eq "1"}{insert name=categ_count_image assign=counti cid=$categs[i].cid}<div class="p2"><a href="{$base_url}/categories/image/{if $special_characters eq "0"}{$tit[i]}{else}{$categs[i].cid}{/if}/recent"><span class="gr">{$user_images}</span>({$counti[1]|viewnr})</a></div>{/if}
								{if $enable_audio eq "1"}{insert name=categ_count_audio assign=counta cid=$categs[i].cid}<div class="p2"><a href="{$base_url}/categories/audio/{if $special_characters eq "0"}{$tit[i]}{else}{$categs[i].cid}{/if}/recent"><span class="gr">{$user_audios}</span>({$counta[1]|viewnr})</a></div>{/if}
							    </td>
							</tr>
						    </table>
						</div>
					    </td>
					</tr>
				    </table>
				</td>
			    </tr>
			</table>
		    </td>
		{/section}		    
		</tr>
	    </table>
	</td>
    </tr>
    <tr>
        <td colspan="4" class="pag_bg">{$link}</td>
    </tr>
</table>
<!-- END CATEGORIES TABLE -->

