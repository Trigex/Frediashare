		    <div id="b11">
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td align="left" class="thead1vl"><table cellpadding="0" cellspacing="0" width="100%" border="0"><tr><td align="left">&nbsp;{if $smarty.get.view eq "video_blog"}{$plist_txt25}: {elseif $smarty.get.view eq "image_blog"}{$plist_txt26}: {elseif $smarty.get.view eq "audio_blog"}{$plist_txt27}: {/if}{$vlog[0].pname|spchar}</td>{if $smarty.session.UID ne "" and $smarty.session.UID eq $minfo[0].uid and $smarty.get.view ne ""}<td align="right"><a href="{$base_url}/my_playlists/{if $smarty.get.view eq "video_blog"}video{elseif $smarty.get.view eq "image_blog"}image{elseif $smarty.get.view eq "audio_blog"}audio{/if}/{$vlog[0].vkey}">{$userpage_mgpost}</a>&nbsp;</td>{/if}</tr></table></td>
			    <tr>
			    <tr>
				<td class="tbody1vl">
				    <table cellpadding="0" cellspacing="0" width="100%" border="0">
				    {if $smarty.get.view eq ""}{assign var=vll value="2"}{else}{assign var=vll value=$vl_total}{/if}
				    {section name=v loop=$vl_files start=0 max=$vll}
					<tr>
					    <td width="300" height="250" valign="top">
						<div id="flash_{$smarty.section.v.iteration}">
						{if $pkv eq "" and ( $pki ne "" or $pka ne "" )}
						{if $pki ne ""}
						    {assign var=btn value="bimage"}{assign var=istyle value="1"}
				                    {insert name=getfield assign=v_key field=vkey table=files_image qfield=vid qvalue=$vl_files[v].vid}
				                    {insert name=getfield assign=vidid field=vid table=files_image qfield=vkey qvalue=$v_key}
				                    {assign var=key value=$v_key}
				                    {insert name=getfield assign=vuid field=uid table=files_image qfield=vkey qvalue=$key}
				                    {insert name=getfield assign=iname field=vflvname table=files_image qfield=vkey qvalue=$key}
				                    {insert name=getfield assign=title field=vtitle table=files_image qfield=vkey qvalue=$key}
				                    {insert name=getfield assign=descr field=vdescr table=files_image qfield=vkey qvalue=$key}
				                {elseif $pka ne ""}
				                    {assign var=btn value="baudio"}
				                    {assign var=pwidth value=300}{assign var=pheight value=250}
				                    {insert name=getfield assign=v_key field=vkey table=files_audio qfield=vid qvalue=$vl_files[v].vid}
				                    {insert name=getfield assign=vidid field=vid table=files_image qfield=vkey qvalue=$v_key}
				                    {assign var=key value=$v_key}
				                    {insert name=getfield assign=vuid field=uid table=files_audio qfield=vkey qvalue=$key}
				                    {insert name=getfield assign=title field=vtitle table=files_audio qfield=vkey qvalue=$key}
				                    {assign var=ftitle value=$title}
				                    {insert name=titlea assign=ltitle vkey=$key}
				                    {insert name=key_to_user_audio assign=fuser vkey=$key}
				                    {insert name=getfield assign=plogo field=logo table=playeraudio_settings qfield=ID qvalue=1}
				                    {insert name=getfield assign=play field=autoplay table=playeraudio_settings qfield=ID qvalue=1}
				                    {if $audio_logo2 ne "" and $plogo eq "1"}{assign var=logo value="&logo=$url_fp/wms_audio/$audio_logo"}{/if}
				                    {if $play eq "1"}{assign var=autoplay value="&autostart=true"}{else}{assign var=autoplay value="&autostart=false"}{/if}
				                    {if $showeq eq "def"}{assign var=showeq value=""}{elseif $showeq eq "rnd"}{assign var=showeq value="&skin=$base_url/modules/aPlayer/skins/$rnd_skin"}{assign var=showeq value="&skin=$base_url/modules/aPlayer/skins/$showeq"}{/if}
            					{/if}
						    {include file="_inc/viewfile/inc_viewfileplayers.tpl"}
						{elseif $pkv ne ""}
						    {insert name=getfield assign=v_key field=vkey table=files_video qfield=vid qvalue=$vl_files[v].vid}
                                                    {assign var=btn value="bvideo"}{assign var=key value=$v_key}{assign var=ftype value="video"}
                                                    {insert name=getfield assign=pfscreen field=fullscreen table=player_settings qfield=ID qvalue=1}
                                                    {assign var=pwidth value=300}{assign var=pheight value=250}
                                                    {insert name=getfield assign=pb field=autoplay table=player_settings qfield=ID qvalue=1}
                                                    {assign var=bgc value=$tinfo[0].th_vl_border}
                                                    {if $pfscreen eq "1"}{assign var=pfs value="true"}{else}{assign var=pfs value="false"}{/if}
                                                    <object type="application/x-shockwave-flash" data="{$base_url}/modules/vPlayer/vPlayer.swf?f={$base_url}/modules/vPlayer/vPlayercfg.php?id={$v_key}" width="{$pwidth}" height="{$pheight}" id="main">
                                                        <param name="movie" value="{$base_url}/modules/vPlayer/vPlayer.swf?f={$base_url}/modules/vPlayer/vPlayercfg.php?id={$v_key}">
                                                        <param name="allowScriptAccess" value="always">
                                                        <param name="allowfullscreen" value="{$pfs}">
                                                        <param name="quality" value="best">
                                                        <param name="bgcolor" value="{$bgc}">
                                                        <param name="wmode" value="opaque">
                                                        <param name="FlashVars" value="playerMode=embedded">
                                                    </object>
						{/if}
						</div>
					    </td>
						{if $pkv ne ""}
						    {insert name=getfield assign=vl_key field=vkey table=files_video qfield=vid qvalue=$vl_files[v].vid}
						    {insert name=titlev assign=title vkey=$vl_key}
						    {insert name=vid_to_title assign=vl_title vid=$vl_files[v].vid}
						    {insert name=getfield assign=vl_dur field=vduration table=files_video qfield=vid qvalue=$vl_files[v].vid}
						    {insert name=getfield assign=vl_desc field=vdescr table=files_video qfield=vid qvalue=$vl_files[v].vid}
						    {insert name=getfield assign=vlog_desc field=vl_descr table=files_video qfield=vid qvalue=$vl_files[v].vid}
						    {insert name=getfield assign=vlog_title field=vl_title table=files_video qfield=vid qvalue=$vl_files[v].vid}
						    {assign var=v_link value="video"}
						{elseif $pki ne ""}
						    {insert name=getfield assign=vl_key field=vkey table=files_image qfield=vid qvalue=$vl_files[v].vid}
						    {insert name=titlei assign=title vkey=$vl_key}
						    {insert name=vid_to_title_image assign=vl_title vid=$vl_files[v].vid}
						    {insert name=getfield assign=vl_dur field=vduration table=files_image qfield=vid qvalue=$vl_files[v].vid}
						    {insert name=getfield assign=vl_desc field=vdescr table=files_image qfield=vid qvalue=$vl_files[v].vid}
						    {insert name=getfield assign=vlog_desc field=vl_descr table=files_image qfield=vid qvalue=$vl_files[v].vid}
						    {insert name=getfield assign=vlog_title field=vl_title table=files_image qfield=vid qvalue=$vl_files[v].vid}
						    {assign var=v_link value="image"}
						{elseif $pka ne ""}
						    {insert name=getfield assign=vl_key field=vkey table=files_audio qfield=vid qvalue=$vl_files[v].vid}
						    {insert name=titlea assign=title vkey=$vl_key}
						    {insert name=vid_to_title_audio assign=vl_title vid=$vl_files[v].vid}
						    {insert name=getfield assign=vl_dur field=vduration table=files_audio qfield=vid qvalue=$vl_files[v].vid}
						    {insert name=getfield assign=vl_desc field=vdescr table=files_audio qfield=vid qvalue=$vl_files[v].vid}
						    {insert name=getfield assign=vlog_desc field=vl_descr table=files_audio qfield=vid qvalue=$vl_files[v].vid}
						    {insert name=getfield assign=vlog_title field=vl_title table=files_audio qfield=vid qvalue=$vl_files[v].vid}
						    {assign var=v_link value="audio"}
						{/if}
					    
					    <td align="left" valign="top">
					    <form name="vl_form" method="post" action="">
						<div id="vl_title{$smarty.section.v.iteration}" class="vlpost f16 bold" style="display: block;">
						    {if $vlog_title eq ""}{$vl_title|spchar}{else}{$vlog_title|spchar}{/if}
						</div>
						<div id="vl_titleset{$smarty.section.v.iteration}" style="display: none;" class="vlpost"><input type="text" name="vl_title{$smarty.section.v.iteration}" value="{if $vlog_title eq ""}{$vl_title}{else}{$vlog_title}{/if}"></div>
						<div id="vl_date{$smarty.section.v.iteration}" style="display: block;"class="vlpost f12">{if $vlog[0].vlog_time ne ""}{$vlog[0].vlog_time|convertunix:"M d, Y, G:i A"}{/if}</div>
						<div id="vl_desc{$smarty.section.v.iteration}" class="vltext f12" style="display: block;">{if $vlog_desc eq ""}{$vl_desc|nl2br|spchar}{else}{$vlog_desc|nl2br|spchar}{/if}</div>
						<div id="vl_descset{$smarty.section.v.iteration}" style="display: none;" class="vlpost"><textarea name="vl_desc{$smarty.section.v.iteration}" rows="12">{if $vlog_desc eq ""}{$vl_desc}{else}{$vlog_desc}{/if}</textarea></div>
						<div id="vl_links{$smarty.section.v.iteration}" class="vltext f10" style="display: block;">{if $minfo[0].uid eq $smarty.session.UID} <a href="javascript:void(0);" onclick="ReverseContentDisplay('vl_btn{$smarty.section.v.iteration}'); ReverseContentDisplay('vl_links{$smarty.section.v.iteration}'); ReverseContentDisplay('vl_title{$smarty.section.v.iteration}'); ReverseContentDisplay('vl_titleset{$smarty.section.v.iteration}'); ReverseContentDisplay('vl_date{$smarty.section.v.iteration}'); ReverseContentDisplay('vl_desc{$smarty.section.v.iteration}'); ReverseContentDisplay('vl_descset{$smarty.section.v.iteration}');">{$userpage_vlpost}</a> | {/if}<a href="{$base_url}/user/{$smarty.request.user}&view={$v_link}_blog&sid={if $pkv ne ""}{$pkv}{elseif $pki ne ""}{$pki}{elseif $pka ne ""}{$pka}{/if}&id={$vl_key}">{$userpage_vlperma}</a> </div>
						<div id="vl_btn{$smarty.section.v.iteration}" class="vltext" style="display: none;"><input type="submit" name="vlsubmit" value="{$qlist_txt11}">&nbsp;&nbsp;<input type="button" name="vlcancel" value="{$myfiles_editbtncancel}" onclick="ReverseContentDisplay('vl_btn{$smarty.section.v.iteration}'); ReverseContentDisplay('vl_links{$smarty.section.v.iteration}'); ReverseContentDisplay('vl_title{$smarty.section.v.iteration}'); ReverseContentDisplay('vl_titleset{$smarty.section.v.iteration}'); ReverseContentDisplay('vl_date{$smarty.section.v.iteration}'); ReverseContentDisplay('vl_desc{$smarty.section.v.iteration}'); ReverseContentDisplay('vl_descset{$smarty.section.v.iteration}');"><input type="hidden" name="vl_types" value="{$v_link}"><input type="hidden" name="vl_key{$smarty.section.v.iteration}" value="{$vl_key}"></div>
					    </form>
					    </td>
					</tr>
					<tr>
					    <td align="left">
						<div class="bold f12"><a href="{$base_url}/{$v_link}/{$title}">{$vl_title}</a></div>
						{if $pki eq ""}
						<div class="bold f12 label">
						{assign var=viddur value=$vl_dur}
		                                {math equation="$viddur/60" format="%0.0f" assign=minutes}
		                                {math equation="$viddur - ($minutes * 60)" format="%0.0f" assign=seconds}
		                                {if $seconds < 0}
		                                    {math equation="$minutes - 1" assign=minutes}
		                                    {math equation="$seconds + 60" assign=seconds}
		                                {/if}
		                                {if $enable_videos eq "1" or ( $enable_videos eq "0" and $enable_images eq "0")}{$minutes}{$fileduration_min}{$seconds}{$fileduration_sec}{/if}
		                                {/if}
		                                </div>
		                                <div class="f12 label">
		                            	{if $pkv ne ""}{insert name=time_range assign=rtime field=addtime IDFR=vid id=$vl_files[v].vid tbl=files_video}
		                            	{elseif $pki ne ""}{insert name=time_range assign=rtime field=addtime IDFR=vid id=$vl_files[v].vid tbl=files_image}
		                            	{elseif $pka ne ""}{insert name=time_range assign=rtime field=addtime IDFR=vid id=$vl_files[v].vid tbl=files_audio}
		                            	{/if}		                            	
		                            	{$fileadded2} {$rtime} {$fileaddedago}
		                                </div>
		                                <div class="f12 label">
		                            	    {if $pkv ne ""}{insert name=key_to_user assign=vl_owner vkey=$vl_key}
		                            	    {elseif $pki ne ""}{insert name=key_to_user_image assign=vl_owner vkey=$vl_key}
		                            	    {elseif $pka ne ""}{insert name=key_to_user_audio assign=vl_owner vkey=$vl_key}
		                            	    {/if}
		                            	    {$inbox_mfrom} <a href="{$base_url}/profile/{$vl_owner}">{$vl_owner}</a>
		                                </div>
		                                <div class="f12 label">
		                            	    {if $pkv ne ""}{insert name=getfield assign=vl_comm field=comments table=files_video qfield=vid qvalue=$vl_files[v].vid}
		                            	    {elseif $pki ne ""}{insert name=getfield assign=vl_comm field=comments table=files_image qfield=vid qvalue=$vl_files[v].vid}
		                            	    {elseif $pka ne ""}{insert name=getfield assign=vl_comm field=comments table=files_audio qfield=vid qvalue=$vl_files[v].vid}
		                            	    {/if}
		                            	    {$filecomments} {$vl_comm|viewnr}
		                                </div>
		                                <div class="f12 label">
		                            	    {if $pkv ne ""}{insert name=getfield assign=vl_views field=views table=files_video qfield=vid qvalue=$vl_files[v].vid}
		                            	    {elseif $pki ne ""}{insert name=getfield assign=vl_views field=views table=files_image qfield=vid qvalue=$vl_files[v].vid}
		                            	    {elseif $pka ne ""}{insert name=getfield assign=vl_views field=views table=files_audio qfield=vid qvalue=$vl_files[v].vid}
		                            	    {/if}
		                            	    {$fileviews} {$vl_views|viewnr}
		                                </div>
					    </td>
					    <td></td>
					</tr>
					{if !$smarty.section.v.last}<tr><td colspan="2">&nbsp;</td></tr>{/if}
				    {/section}
					{if $vl_total gt 2 and $smarty.get.view eq ""}
                                    	<tr>
                                            <td colspan="2" align="right" class="bold nopad"><a href="{$base_url}/user/{$minfo[0].username}&view={if $enable_videos eq "1"}video_blog{elseif $enable_images eq "1"}image_blog{elseif $enable_audio eq "1"}audio_blog{/if}">{$pr_chinfob31|lower}</a></td>
                                        </tr>
                                        {/if}
                                        {if $smarty.get.view ne "" and $link ne "" and $tpage gt 1}
                                        <tr>
                                            <td colspan="2" align="right" class="bold nopad">
                                                {$link}
                                            </td>
                                        </tr>
                                        {/if}
				    </table>
				</td>
			    </tr>
			</table>
		    </div>
