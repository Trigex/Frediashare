
<!-- BEGIN CATEGORIES DETAILS TABLE -->
<table border="0" align="center" cellpadding="5" cellspacing="0" class="width950b" style="border-bottom: 0px;">
    <tr>
        <td align="right"><span class="italic">{$categ_aheading1} {php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[id]); $smarty->assign('rid',$rid);{/php}{if $special_characters eq "0"}{$rid}{else}{$cname}{/if}</span></td>
    </tr>
</table>
<table border="0" align="center" cellpadding="5" cellspacing="0" class="width950b">
    <tr>
	<td class="nopad_bg">
	    <table cellpadding=3 cellspacing=0 align=center>
		<tr>
		{section name=i loop=$latest}
		    <td valign=top class="nbg">
			<table cellpadding=1 cellspacing=0 align=center>
			    <tr>
				<td valign=top width="{$img_max_width}" align="center">
				{insert name=vid_to_key_audio assign=key vid=$latest[i].vid}
				{insert name=vid_to_folder_audio assign=folder vid=$latest[i].vid}
				{insert name=vid_to_type_audio assign=vtype vid=$latest[i].vid}
				{insert name=vid_to_title_audio assign=vtitle vid=$latest[i].vid}
				{insert name=vid_to_featureda assign=feata vid=$latest[i].vid}
				{insert name=titlea assign=title vkey=$key}
				{insert name=vid_to_rnda assign=rnd vid=$latest[i].vid}
                                {insert name=vid_to_rndvv assign=rndv vid=$latest[i].vid}
                                <div class="qlistadding bottomleft">
                            	    <div id="aqlistadd{$key}" class="qlisticon">
                            		<a href="javascript:void(0)" alt="{$qlist_txt1}" title="{$qlist_txt1}" onmouseover="setqlicon('on', 'audio', '{$key}', 'grid');" onmouseout="setqlicon('off', 'audio', '{$key}', 'grid');" onclick="add2ql('audio', 'audio', '{$key}', 'grid'); {section name=j loop=$mostw}{if $latest[i].vid eq $mostw[j].vid}add2ql('audio', 'audio', '{$key}', 'list');{/if}{/section}">
                            		    &nbsp;&nbsp;&nbsp;&nbsp;
                            		</a>
                            	    </div>
				{if $same_title_uploads eq "0"}
				    <a href="{$base_url}/audio/{$title}">
				{else}
				    <a href="{$base_url}/audio/{$key}">
				{/if}
					<img src="{$tmb_url}/user{$latest[i].uid}/{$rndv}_{$rnd}.jpg" width="{$img_max_width}" height="{$img_max_height}" alt="{$vtitle}" title="{$vtitle}" class="{if $vtype eq "private"}thumbp{elseif $feata eq 'yes'}thumbf{else}thumb{/if}">
				    </a>
				</div>
				<div>{if $same_title_uploads eq "0"}<a href="{$base_url}/audio/{$title}">{else}<a href="{$base_url}/audio/{$key}">{/if}<span class="title">{$latest[i].vtitle|truncate:$tr_titlegrid:"..."}</span></a></div>
				</td>
			    </tr>
			    <tr><td class="centered"><span class="gr">{$fileaddedby} </span>{insert name=uid_to_name_audio assign=uname vid=$latest[i].vid}<a href="{$base_url}/profile/{if $special_characters eq "0"}{$uname}{else}{$latest[i].uid}{/if}">{$uname}</a></td></tr>
			    <tr><td class="centered">{insert name=time_range assign=rtime field=addtime IDFR=vid id=$latest[i].vid tbl=files_audio}{$rtime} {$fileaddedago}</td></tr>
			    <tr>
                                <td>
                                {insert name=vid_to_duration_audio assign=duration vid=$latest[i].vid}
                                {assign var=viddur value=$duration}
                                {math equation="$viddur/60" format="%0.0f" assign=minutes}
                                {math equation="$viddur - ($minutes * 60)" format="%0.0f" assign=seconds}
                                {if $seconds < 0}
                                    {math equation="$minutes - 1" assign=minutes}
                                    {math equation="$seconds + 60" assign=seconds}
                                {/if}
                                {if $file_ratings eq "1"}
                                <table cellpadding=0 cellspacing=0 border=0 width="100%">
                                    <tr>
                                        <td>{$minutes}{$fileduration_min}{$seconds}{$fileduration_sec}</td>
                                        <td class="pl20">{insert name=key_to_rate_audio assign=rate vkey=$latest[i].vkey}{$rate}</td>
                                    </tr>
                                </table>
                                {/if}
                                </td>
                            </tr>
			</table>
		    </td>
		{/section}
		</tr>
		{if $latest[0].vtitle eq ""}
		<tr>
		    <td align=center>{$categ_anone}</td>
		</tr>
		{/if}
		{if $latest[6].vtitle ne ""}
		<tr>
		    <td align="right" colspan=7 class="p5"><a href="{$base_url}/categories/audio/{$smarty.request.id}/recent">{$categ_ashow}</a></td>
		</tr>
		{/if}
	    </table>
	</td>
    </tr>
</table>
<br>
<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="br2" style="border-top: 0px; border-left: 0px; border-right: 0px; border-bottom: 0px;"> 
    <tr>
	<td align="right"><span class="italic">{$categ_aheading2} {php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[id]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid}{else}{$cname}{/if}</span></td>
    </tr>
</table>
<table border="0" align="center" cellpadding="5" cellspacing="0" class="width950b">
    <tr>
	<td class="nopad_bg">
	    <table cellpadding=3 cellspacing=0 align=center>
		<tr>
		{section name=i loop=$mostw}
		    <td valign=top class="nbg">
			<table cellpadding=1 cellspacing=0 align=center border=0 width="100%">
			    <tr>
				<td valign=top width="{$img_max_width}" align="center">
				{insert name=vid_to_key_audio assign=key vid=$mostw[i].vid}
				{insert name=vid_to_folder_audio assign=folder vid=$mostw[i].vid}
				{insert name=vid_to_type_audio assign=vtype vid=$mostw[i].vid}
				{insert name=vid_to_title_audio assign=vtitle vid=$mostw[i].vid}
				{insert name=vid_to_featureda assign=feata vid=$mostw[i].vid}
				{insert name=vid_to_rnda assign=rnd vid=$mostw[i].vid}
                                {insert name=vid_to_rndvv assign=rndv vid=$mostw[i].vid}
				{insert name=titlea assign=title vkey=$key}
				<div class="qlistadding bottomleft">
				    <div id="alqlistadd{$key}" class="qlisticon">
					<a href="javascript:void(0)" alt="{$qlist_txt1}" title="{$qlist_txt1}" onmouseover="setqlicon('on', 'audio', '{$key}', 'list');" onmouseout="setqlicon('off', 'audio', '{$key}', 'list');" onclick="add2ql('audio', 'audio', '{$key}', 'list'); {section name=j loop=$latest}{if $latest[j].vid eq $mostw[i].vid}add2ql('audio', 'audio', '{$key}', 'grid');{/if}{/section}">
					    &nbsp;&nbsp;&nbsp;&nbsp;
					</a>
				    </div>
				{if $same_title_uploads eq "0"}
				    <a href="{$base_url}/audio/{$title}">
				{else}
				    <a href="{$base_url}/audio/{$key}">
				{/if}
				    <img src="{$tmb_url}/user{$mostw[i].uid}/{$rndv}_{$rnd}.jpg" width="{$img_max_width}" height="{$img_max_height}" alt="{$vtitle}" title="{$vtitle}" class="{if $vtype eq "private"}thumbp{elseif $feata eq 'yes'}thumbf{else}thumb{/if}">
				    </a>
				</div>
				<div>{if $same_title_uploads eq "0"}<a href="{$base_url}/audio/{$title}">{else}<a href="{$base_url}/audio/{$key}">{/if}<span class="title">{$mostw[i].vtitle|truncate:$tr_titlegrid:"..."}</span></a></div>
				</td>
			    </tr>
			    <tr><td class="centered"><span class="gr">{$fileaddedby} </span>{insert name=uid_to_name_audio assign=uname vid=$mostw[i].vid}<a href="{$base_url}/profile/{if $special_characters eq "0"}{$uname}{else}{$mostw[i].uid}{/if}">{$uname}</a></td></tr>
			    <tr><td class="centered">{insert name=vid_to_views_audio assign=views vid=$mostw[i].vid}<span class="gr">{$fileauditions} </span>{$views|viewnr}</td></tr>
			    <tr>
                                <td>
                                {insert name=vid_to_duration_audio assign=duration vid=$mostw[i].vid}
                                {assign var=viddur value=$duration}
                                {math equation="$viddur/60" format="%0.0f" assign=minutes}
                                {math equation="$viddur - ($minutes * 60)" format="%0.0f" assign=seconds}
                                {if $seconds < 0}
                                    {math equation="$minutes - 1" assign=minutes}
                                    {math equation="$seconds + 60" assign=seconds}
                                {/if}
                                {if $file_ratings eq "1"}
                                <table cellpadding=0 cellspacing=0 border=0 width="100%">
                                    <tr>
                                        <td>{$minutes}{$fileduration_min}{$seconds}{$fileduration_sec}</td>
                                        <td class="pl20">{insert name=key_to_rate_audio assign=rate vkey=$mostw[i].vkey}{$rate}</td>
                                    </tr>
                                </table>
                                {/if}
                                </td>
                            </tr>
			</table>
		    </td>
		{/section}
		</tr>
		{if $mostw[0].vtitle eq ""}
		<tr>
		    <td align=center>{$categ_anone}</td>
		</tr>
		{/if}
		{if $mostw[6].vtitle ne ""}
		<tr>
		    <td align="right" colspan=7 class="p5"><a href="{$base_url}/categories/audio/{$smarty.request.id}/most_played">{$categ_ashow}</a></td>
		</tr>
		{/if}
	    </table>
	</td>
    </tr>
</table>
<br>
<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="br2" style="border-top: 0px; border-left: 0px; border-right: 0px; border-bottom: 0px;">
    <tr>
	<td align="right"><span class="italic">{$categ_aheading3} {php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[id]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid}{else}{$cname}{/if}</span></td>
    </tr>
</table>
<table border="0" align="center" cellpadding="5" cellspacing="0" class="width950b">
    <tr>
	<td class=grey>
	    <table cellpadding=10 cellspacing=0 align=center width="100%">
		<tr>
		{section name=j loop=$mosta}
		    <td>
			<table cellpadding=0 cellspacing=1 align=center>
			    <tr>
				<td valign=top>
				    <table cellpadding=0 cellspacing=0 border=0>
					<tr>
					    <td align=center valign=top>
					    {insert name=uid_to_name_audio assign=uname vid=$mosta[j].vid}
					    {insert name=key_to_image_audio assign=image vkey=$mosta[j].vkey}
					    {insert name=uid_to_gender assign=gender uid=$mosta[j].uid}
					    <div>
					    <a href="{$base_url}/profile/{if $special_characters eq "0"}{$uname}{else}{$mosta[j].uid}{/if}">
						<img src="{$usrimg_url}/{$image}" width="72" height="72" alt="{$uname}" title="{$uname}" class="{if $gender eq "M"}user_img{elseif $gender eq "F"}user_imgf{else}user_img{/if}">
					    </a>
					    </div>
					    <div>
					    <center>
					    <a href="{$base_url}/profile/{if $special_characters eq "0"}{$uname}{else}{$mosta[j].uid}{/if}">
						{$uname}
					    </a>
					    </center>
					    </div>
					    </td>
					    
					    <td valign=top class="pl5">
					    {insert name=audio_count assign=adocount uid=$mosta[j].uid}
					    {insert name=image_count assign=idocount uid=$mosta[j].uid}
					    {insert name=video_count assign=vdocount uid=$mosta[j].uid}
					    {insert name=fav_count assign=favcount uid=$mosta[j].uid}
					    {insert name=friend_count assign=frcount uid=$mosta[j].uid}
						<table cellpadding=0 cellspacing=0 border=0>
						    <tr><td>{if $enable_audio eq "1"}<a {if $adocount ne "0"}href="{$base_url}/user_audios/{if $special_characters eq "0"}{$uname}{else}{$mosta[j].uid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_audios}</span>({$adocount})</a>{/if}</td></tr>
						    <tr><td>{if $enable_images eq "1"}<a {if $idocount ne "0"}href="{$base_url}/user_images/{if $special_characters eq "0"}{$uname}{else}{$mosta[j].uid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_images}</span>({$idocount})</a>{/if}</td></tr>
						    <tr><td>{if $enable_videos eq "1"}<a {if $vdocount ne "0"}href="{$base_url}/user_videos/{if $special_characters eq "0"}{$uname}{else}{$mosta[j].uid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_videos}</span>({$vdocount})</a>{/if}</td></tr>
						    <tr><td><a {if $favcount ne "0"}href="{$base_url}/user_favorites/{if $special_characters eq "0"}{$uname}{else}{$mosta[j].uid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_favorites}</span>({$favcount})</a></td></tr>
						    <tr><td><a {if $frcount ne "0"}href="{$base_url}/user_friends/{if $special_characters eq "0"}{$uname}{else}{$mosta[j].uid}{/if}{else}href="javascript:void(0)"{/if}"><span class="gr">{$user_friends}</span>({$frcount})</a></td></tr>
						    {if $enable_channels eq "1"}
    						    <tr>
        						<td>
            						{insert name=subs_count assign=subscount uid=$mosta[j].uid}
            						    <a {if $subscount ne "0"}href="{$base_url}/user/{$uname}&view=subscribers"{else}href="javascript:void(0)"{/if}><span class="gr">{$pr_chinfob28}: </span>({$subscount|viewnr})</a>
        						</td>
    						    </tr>
    						    {/if}
						</table>
					    </td>
					</tr>
				    </table>
				</td>
			    </tr>
			</table>
		    </td>
		{/section}
		</tr>
		{if $uname eq ""}
		<tr>
		    <td align=center class="p10">{$categ_anousers}</td>
		</tr>
		{/if}
	    </table>
	</td>
    </tr>
</table>
<!-- END CATEGORIES DETAILS TABLE -->
