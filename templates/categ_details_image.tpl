
<!-- BEGIN CATEGORIES DETAILS TABLE -->
<table border="0" align="center" cellpadding="5" cellspacing="0" class="width950b" style="border-bottom: 0px;">
    <tr>
        <td align="right"><span class="italic">{$categ_iheading1} {php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[id]); $smarty->assign('rid',$rid);{/php}{if $special_characters eq "0"}{$rid}{else}{$cname}{/if}</span></td>
    </tr>
</table>
<table border="0" align="center" cellpadding="5" cellspacing="0" class="width950b">
    <tr>
	<td class="nopad_bg">
	    <table cellpadding=3 cellspacing=0 align=center>
		<tr>
		{section name=i loop=$latest}
		    <td valign="top" class="nbg">
			<table cellpadding=1 cellspacing=0 align=center border=0 width="100%">
			    <tr>
				<td width="{$img_max_width}" valign="top" align="center">
				{insert name=vid_to_key_image assign=key vid=$latest[i].vid}
				{insert name=vid_to_folder_image assign=folder vid=$latest[i].vid}
				{insert name=vid_to_type_image assign=vtype vid=$latest[i].vid}
				{insert name=vid_to_title_image assign=vtitle vid=$latest[i].vid}
	                        {insert name=vid_to_featuredi assign=feati vid=$latest[i].vid}
				{insert name=titlei assign=title vkey=$key}
				<div class="qlistadding bottomleft">
				    <div id="iqlistadd{$key}" class="qlisticon">
					<a href="javascript:void(0)" alt="{$qlist_txt1}" title="{$qlist_txt1}" onmouseover="setqlicon('on', 'image', '{$key}', 'grid');" onmouseout="setqlicon('off', 'image', '{$key}', 'grid');" onclick="add2ql('image', 'image', '{$key}', 'grid'); {section name=j loop=$mostw}{if $latest[i].vid eq $mostw[j].vid}add2ql('image', 'image', '{$key}', 'list');{/if}{/section}">
					    &nbsp;&nbsp;&nbsp;&nbsp;
					</a>
				    </div>
				{if $same_title_uploads eq "0"}
				    <a href="{$base_url}/image/{$title}">
				{else}
				    <a href="{$base_url}/image/{$key}">
				{/if}
				    <img src="{$tmb_url}/user{$latest[i].uid}/{$latest[i].vflvname}" width="{$img_max_width}" height="{$img_max_height}" alt="{$vtitle}" title="{$vtitle}" class="{if $vtype eq "private"}thumbp{elseif $feati eq 'yes'}thumbf{else}thumb{/if}">
				    </a>
				</div>
				<div>{if $same_title_uploads eq "0"}<a href="{$base_url}/image/{$title}">{else}<a href="{$base_url}/image/{$key}">{/if}<span class="title">{$latest[i].vtitle|truncate:$tr_titlegrid:"..."}</span></a></div>
				</td>
			    </tr>
			    <tr><td class="centered"><span class="gr">{$fileaddedby} </span>{insert name=uid_to_name_image assign=uname vid=$latest[i].vid}<a href="{$base_url}/profile/{if $special_characters eq "0"}{$uname}{else}{$latest[i].uid}{/if}">{$uname}</a></td></tr>
			    <tr><td class="centered">{insert name=time_range assign=rtime field=addtime IDFR=vid id=$latest[i].vid tbl=files_image}{$rtime} {$fileaddedago}</td></tr>
			    <tr>
                                <td>
                                {assign var=viddur value=0}
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
                                        <td class="pl20">{insert name=key_to_rate_image assign=rate vkey=$latest[i].vkey}{$rate}</td>
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
		    <td align=center>{$categ_inone}</td>
		</tr>
		{/if}
		{if $latest[6].vtitle ne ""}
		<tr>
		    <td align="right" colspan=7 class="p5"><a href="{$base_url}/categories/image/{$smarty.request.id}/recent">{$categ_ishow}</a></td>
		</tr>
		{/if}
	    </table>
	</td>
    </tr>
</table>
<br>
<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="br2" style="border-top: 0px; border-left: 0px; border-right: 0px; border-bottom: 0px;">
    <tr>
	<td align="right"><span class="italic">{$categ_iheading2} {php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[id]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid}{else}{$cname}{/if}</span></td>
    </tr>
</table>
<table border="0" align="center" cellpadding="5" cellspacing="0" class="width950b">
    <tr>
	<td class="nopad_bg">
	    <table cellpadding=3 cellspacing=0 align=center>
		<tr>
		{section name=i loop=$mostw}
		    <td valign="top" class="nbg">
			<table cellpadding=1 cellspacing=0 align=center width="100%">
			    <tr>
				<td width="{$img_max_width}" valign="top" align="center">
				{insert name=vid_to_key_image assign=key vid=$mostw[i].vid}
				{insert name=vid_to_folder_image assign=folder vid=$mostw[i].vid}
				{insert name=vid_to_type_image assign=vtype vid=$mostw[i].vid}
				{insert name=vid_to_title_image assign=vtitle vid=$mostw[i].vid}
	                        {insert name=vid_to_featuredi assign=feati vid=$mostw[i].vid}
				{insert name=titlei assign=title vkey=$key}
				<div class="qlistadding bottomleft">
				    <div id="ilqlistadd{$key}" class="qlisticon">
					<a href="javascript:void(0)" alt="{$qlist_txt1}" title="{$qlist_txt1}" onmouseover="setqlicon('on', 'image', '{$key}', 'list');" onmouseout="setqlicon('off', 'image', '{$key}', 'list');" onclick="add2ql('image', 'image', '{$key}', 'list'); {section name=j loop=$latest}{if $latest[j].vid eq $mostw[i].vid}add2ql('image', 'image', '{$key}', 'grid');{/if}{/section}">
					    &nbsp;&nbsp;&nbsp;&nbsp;
					</a>
				    </div>
				{if $same_title_uploads eq "0"}
				    <a href="{$base_url}/image/{$title}">
				{else}
				    <a href="{$base_url}/image/{$key}">
				{/if}
				    <img src="{$tmb_url}/user{$mostw[i].uid}/{$mostw[i].vflvname}" width="{$img_max_width}" height="{$img_max_height}" alt="{$vtitle}" title="{$vtitle}" class="{if $vtype eq "private"}thumbp{elseif $feati eq 'yes'}thumbf{else}thumb{/if}">
				    </a>
				</div>
				<div>{if $same_title_uploads eq "0"}<a href="{$base_url}/image/{$title}">{else}<a href="{$base_url}/image/{$key}">{/if}<span class="title">{$mostw[i].vtitle|truncate:$tr_titlegrid:"..."}</span></a></div>
				</td>
			    </tr>
			    <tr><td class="centered"><span class="gr">{$fileaddedby} </span>{insert name=uid_to_name_image assign=uname vid=$mostw[i].vid}<a href="{$base_url}/profile/{if $special_characters eq "0"}{$uname}{else}{$mostw[i].uid}{/if}">{$uname}</a></td></tr>
			    <tr><td class="centered">{insert name=vid_to_views_image assign=views vid=$mostw[i].vid}<span class="gr">{$fileviews} </span>{$views|viewnr}</td></tr>
			    <tr>                                                                                                                                                                               
                                <td>
                                {assign var=viddur value=0}
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
                                        <td class="pl20">{insert name=key_to_rate_image assign=rate vkey=$mostw[i].vkey}{$rate}</td>
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
		    <td align=center>{$categ_inone}</td>
		</tr>
		{/if}
		{if $mostw[6].vtitle ne ""}
		<tr>
		    <td align="right" colspan=7 class="p5"><a href="{$base_url}/categories/image/{$smarty.request.id}/most_viewed">{$categ_ishow}</a></td>
		</tr>
		{/if}
	    </table>
	</td>
    </tr>
</table>
<br>
<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="br2" style="border-top: 0px; border-left: 0px; border-right: 0px; border-bottom: 0px;">
    <tr>
	<td align="right"><span class="italic">{$categ_iheading3} {php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[id]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid}{else}{$cname}{/if}</span></td>
    </tr>
</table>
<table border="0" align="center" cellpadding="5" cellspacing="0" class="width950b">
    <tr>
	<td class=grey>
	    <table cellpadding=10 cellspacing=0 align=center width="100%">
		<tr>
		{section name=j loop=$mosta}
		    <td valign="top">
			<table cellpadding=0 cellspacing=1 align=center>
			    <tr>
				<td valign=top>
				    <table cellpadding=0 cellspacing=0 border=0>
					<tr>
					    <td align=center valign=top>
					    {insert name=uid_to_name_image assign=uname vid=$mosta[j].vid}
					    {insert name=key_to_image_image assign=image vkey=$mosta[j].vkey}
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
		    <td align=center class="p10">{$categ_inousers}</td>
		</tr>
		{/if}
	    </table>
	</td>
    </tr>
</table>
<!-- END CATEGORIES DETAILS TABLE -->
