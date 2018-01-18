		    <div id="b12">
			<table cellpadding="0" cellspacing="0" border="0" width="100%">
			    <tr>
				<td align="left">
				    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                        <tr>
                                    	    <td align="left">
                                    	    {if $tinfo[0].th_featvid_type eq "v" and $enable_videos eq "1"}
                                    		{assign var=key value=$f_key}{assign var=ftype value="video"}
                                    		{insert name=getfield assign=ftitle field=vtitle table=files_video qfield=vkey qvalue=$key}
                                    		{insert name=getfield assign=fviews field=views table=files_video qfield=vkey qvalue=$key}
                                    		{insert name=getfield assign=fcomm field=comments table=files_video qfield=vkey qvalue=$key}
                                    		{insert name=key_to_user assign=fuser vkey=$key}
                                    		{insert name=titlev assign=ltitle vkey=$key}
                                    		{assign var=btn value="bvideo"}{assign var=key value=$key}{assign var=ftype value="video"}
                                                    {insert name=getfield assign=pfscreen field=fullscreen table=player_settings qfield=ID qvalue=1}
                                                    {assign var=pfs value=$pfscreen}
                                                    {insert name=getfield assign=pwidth field=pwidth table=player_settings qfield=ID qvalue=1}
                                                    {insert name=getfield assign=pheight field=pheight table=player_settings qfield=ID qvalue=1}
                                                    {insert name=getfield assign=pb field=autoplay table=player_settings qfield=ID qvalue=1}
                                                	{assign var=bgc value=$tinfo[0].th_bb_bgcol}
                                                        {assign var=key value=$f_key}
                                                        {if $pfscreen eq "1"}{assign var=pfs value="true"}{else}{assign var=pfs value="false"}{/if}
                                                        <object type="application/x-shockwave-flash" data="{$base_url}/modules/vPlayer/vPlayer.swf?f={$base_url}/modules/vPlayer/vPlayercfg.php?id={$f_key}" width="{$pwidth}" height="{$pheight}" id="main">
                                                            <param name="movie" value="{$base_url}/modules/vPlayer/vPlayer.swf?f={$base_url}/modules/vPlayer/vPlayercfg.php?id={$f_key}">
                                                            <param name="allowScriptAccess" value="always">
                                                            <param name="allowfullscreen" value="{$pfs}">
                                                            <param name="quality" value="best">
                                                            <param name="bgcolor" value="{$bgc}">
                                                            <param name="wmode" value="opaque">
                                                            <param name="FlashVars" value="playerMode=embedded">
                                                        </object>
                                    	    {elseif $tinfo[0].th_featvid_type eq "i" and $enable_images eq "1"}
                                    		{assign var=btn value="bimage"}{assign var=key value=$f_key}{assign var=ftype value="image"}
                                    		{insert name=getfield assign=vidid field=vid table=files_image qfield=vkey qvalue=$key}
                                    		{insert name=getfield assign=vuid field=uid table=files_image qfield=vkey qvalue=$key}
                                    		{insert name=getfield assign=iname field=vflvname table=files_image qfield=vkey qvalue=$key}
                                    		{insert name=getfield assign=title field=vtitle table=files_image qfield=vkey qvalue=$key}
                                    		{assign var=ftitle value=$title}
                                    		{insert name=titlei assign=ltitle vkey=$key}
                                    		{insert name=getfield assign=descr field=vdescr table=files_image qfield=vkey qvalue=$key}
                                    		{insert name=key_to_user_image assign=fuser vkey=$key}
                                    		{insert name=getfield assign=fviews field=views table=files_image qfield=vkey qvalue=$key}
                                    		{insert name=getfield assign=fcomm field=comments table=files_image qfield=vkey qvalue=$key}
                                    		{include file="_inc/viewfile/inc_viewfileplayers.tpl"}
                                    	    {elseif $tinfo[0].th_featvid_type eq "a" and $enable_audio eq "1"}
                                    		{assign var=btn value="baudio"}{assign var=key value=$f_key}{assign var=ftype value="audio"}
                                    		{insert name=getfield assign=title field=vtitle table=files_audio qfield=vkey qvalue=$key}
                                    		{assign var=ftitle value=$title}
                                    		{insert name=titlea assign=ltitle vkey=$key}
                                    		{insert name=key_to_user_audio assign=fuser vkey=$key}
                                    		{insert name=getfield assign=fviews field=views table=files_audio qfield=vkey qvalue=$key}
                                    		{insert name=getfield assign=fcomm field=comments table=files_audio qfield=vkey qvalue=$key}
                                    		{insert name=getfield assign=pwidth field=pwidth table=playeraudio_settings qfield=ID qvalue=1}
                                    		{insert name=getfield assign=pheight field=pheight table=playeraudio_settings qfield=ID qvalue=1}
                                    		{insert name=getfield assign=plogo field=logo table=playeraudio_settings qfield=ID qvalue=1}
                                    		{insert name=getfield assign=play field=autoplay table=playeraudio_settings qfield=ID qvalue=1}
                                    		{if $audio_logo ne "" and $plogo eq "1"}{assign var=logo value="&logo=$url_fp/wms_audio/$audio_logo"}{/if}
                                    		{if $play eq "1"}{assign var=autoplay value="&autostart=true"}{else}{assign var=autoplay value="&autostart=false"}{/if}
                                    		{if $showeq eq "def"}{assign var=showeq value=""}{elseif $showeq eq "rnd"}{assign var=showeq value="&skin=$base_url/modules/aPlayer/skins/$rnd_skin"}{else}{assign var=showeq value="&skin=$base_url/modules/aPlayer/skins/$showeq"}{/if}
                                    		{include file="_inc/viewfile/inc_viewfileplayers.tpl"}
                                    	    {/if}
                                    	    </td>
                                    	</tr>
                                    	<tr><td style="height: 10px;"></td></tr>
                                    	<tr>
                                    	    <td id="b12b" class="p5" valign="top">
                                    		<table cellpadding="0" cellspacing="0" border="0" width="100%">
                                    		    <tr>
                                    			<td align="left">
                                    			    <div class="p1">&nbsp;&nbsp;<a href="{$base_url}/{$ftype}/{if $same_title_uploads eq "0"}{$ltitle}{else}{$key}{/if}"><span class="bold">{$ftitle}</span></a></div>
                                    			    <div class="pt4 bodylabel f11">&nbsp;&nbsp;{$inbox_mfrom} <a href="{$base_url}/user/{$fuser}">{$fuser}</a></div>
                                    			    <div class="nopad bodylabel f11">&nbsp;&nbsp;{$fileviews} {$fviews|viewnr}</div>
                                    			    {if $fcomm gt 0}<div class="nopad bodylabel f11">&nbsp;&nbsp;{$filecomments} {$fcomm|viewnr}</div>{/if}
                                    			</td>
                                    			{if $minfo[0].uid eq $smarty.session.UID}
                                    			<td align="right" valign="top">
                                    			    <a href="{$base_url}/my_profile_theme">{$myfiles_edit|lower}</a>&nbsp;&nbsp;
                                    			</td>
                                    			{/if}
                                    		    </tr>
                                    		</table>
                                    	    </td>
                                    	</tr>
                                    </table>
				</td>
			    </tr>
			</table>
		    </div>
