
    <table cellpadding="0" cellspacing="0" border="0">
	<tr>
	    <td>
	    <ul id="{if $site_theme eq "metube"}Menu_tube2{else}Menu3{/if}" class="{if $site_theme eq "metube"}MM_tube{else}MM2{/if}" style="padding: 0px; margin: 0px; line-height: 15px;">
		<li>
		    <table cellpadding="0" cellspacing="0">
			<tr>
			    <td><a href="javascript:void(0)"><span style="font-size: 14px;">{$snav_mtxt1}&nbsp;</span></a></td>
			</tr>
		    </table>
		    <ul id="hidem3">
			<li><a href="{$base_url}/my_profile" onclick="HideContent('hidem3');">{if $enable_channels eq "0"}{$myprofile}{else}{$mypchan}{/if}</a></li>
			{if $enable_audio eq "1"}<li><a href="{$base_url}/my_audios" onclick="HideContent('hidem3');">{$myaudio}</a></li>{/if}
			{if $enable_images eq "1"}<li><a href="{$base_url}/my_images" onclick="HideContent('hidem3');">{$myimage}</a></li>{/if}
			{if $enable_videos eq "1"}<li><a href="{$base_url}/my_videos" onclick="HideContent('hidem3');">{$myvideo}</a></li>{/if}
			{if $enable_channels eq "1"}<li><a href="{$base_url}/my_playlists" onclick="HideContent('hidem3');">{$plist_txt1}</a></li>{/if}
			{if $enable_inbox eq "1"}<li><a href="{$base_url}/inbox" onclick="HideContent('hidem3');">{$myinbox}</a></li>{else}<li>{if $profile_comments eq "1"}<a href="{$base_url}/my_comments/profile">{elseif $enable_videos eq "1"}<a href="{$base_url}/my_comments/video">{elseif $enable_images eq "1"}<a href="{$base_url}/my_comments/image">{elseif $enable_audio eq "1"}<a href="{$base_url}/my_comments/audio">{/if}{$mycomm}</a></li>{/if}
			{if $msg_block eq "1"}<li><a href="{$base_url}/blocked_users" onclick="HideContent('hidem3');">{$blocked_msglink}</a></li>{/if}
			{if $file_responses eq "1"}<li><a href="{$base_url}/responses/{if $enable_videos eq "1"}video{elseif $enable_images eq "1"}image{elseif $enable_audio eq "1"}audio{/if}" onclick="HideContent('hidem3');">{$adm_setfileresp}</a></li>{/if}
			<li><a href="{$base_url}/my_quicklist" onclick="HideContent('hidem3');">{$qlist_txt4x}</a></li>
			<li><a href="{$base_url}/my_favorites" onclick="HideContent('hidem3');">{$myfav}</a></li>
			<li><a href="{$base_url}/my_friends" onclick="HideContent('hidem3');">{$myfriends}</a></li>
			{if $enable_channels eq "1"}<li><a href="{$base_url}/my_subscriptions" onclick="HideContent('hidem3');">{$mysubs_heading}</a></li>{/if}
			{if $enable_channels eq "1"}<li><a href="{$base_url}/my_subscribers" onclick="HideContent('hidem3');">{$myusubs_heading}</a></li>{/if}
			<li><a href="{$base_url}/my_history" onclick="HideContent('hidem3');">{$myplist}</a></li>
		    </ul>
		</li>
	    </ul>
	</td>
	<td>
	    <span style="font-size: 14px;">&nbsp;&nbsp;/&nbsp;
		{if $sbtn eq "inbox" and $mdi eq ""}{$inbox_iheading}
		    {elseif $sbtn eq "outbox" and $mdo eq ""}{$inbox_oheading}
		    {elseif $sbtn eq "compose"}{$inbox_cheading}
		    {elseif $mdi eq "1" or $mdo eq "1"}{$inbox_mheading}
		    {elseif $sbtn eq "blocked"}{$blocked_heading}
		    {elseif $sbtn eq "comments"}{$comm_heading}
		    {elseif $sbtn eq "friends"}{$myfr_heading2}
		    {elseif $sbtn eq "mysubs"}{$mysubs_heading}
		    {elseif $sbtn eq "mpr"}{if $chs eq "s1"}{$pr_chlmitem1}{elseif $chs eq "s2"}{$pr_chlmitem2}{elseif $chs eq "s3"}{$pr_chlmitem3}{elseif $chs eq "s31"}{$pr_chlmitem31}{elseif $chs eq "s32"}{$pr_chlmitem32}{elseif $chs eq "s4"}{$pr_chlmitem4}{elseif $chs eq "s41"}{$pr_chinfob58}{elseif $chs eq "s42"}{$pr_chinfob65}{elseif $chs eq "s5"}{$pr_chlmitem5}{/if}
		    {elseif $sbtn eq "ufr"}{if $special_characters eq "0"}{$smarty.request.user}{else}{$uname}{/if}{$userfr_heading}
		    {elseif $sbtn eq "gen"}{$categ_heading}
		    {elseif $sbtn eq "vid"}{$dm_categ3}
		    {elseif $sbtn eq "img"}{$dm_categ2}
		    {elseif $sbtn eq "aud"}{$dm_categ1}
		    {elseif $sbtn eq "bmember"}{$mem_heading}
		    {elseif $sbtn eq "bupload"}{if $type eq "vconfirmation"}{$up_th1}{/if}{if $type eq "aconfirmation"}{$up_th2}{/if}{if $type eq "iconfirmation"}{$up_th3}{/if}{if $type eq "general"}{$up_th4}{/if}{if $type eq "audio"}{$up_th5}{/if}{if $type eq "image"}{$up_th6}{/if}{if $type eq "video"}{$up_th7}{/if}
		    {elseif $sbtn eq "3"}{$up_th7}
		    {elseif $sbtn eq "2"}{$up_th6}
		    {elseif $sbtn eq "1"}{$up_th5}
		    {elseif $sbtn eq "btags"}{$tags_text}
		    {elseif $sbtn eq "search"}{$dm_search1}
		    {elseif $sbtn eq "myusubs"}{$myusubs_heading}
		    {elseif $sbtn eq "myaud"}{$viewaudio_heading}: {$vd[0].vtitle}
		    {elseif $sbtn eq "myimg"}{$viewimage_heading}: {$vd[0].vtitle}
		    {elseif $sbtn eq "myvid"}{$viewvideo_heading}: {$vd[0].vtitle}
		    {elseif $sbtn eq "resp"}{if $rtype eq "audio"}{$fresp_txt4}{elseif $rtype eq "image"}{$fresp_txt5}{elseif $rtype eq "video"}{$fresp_txt6}{else}{$fresp_txt33}{/if}
		    {elseif $sbtn eq "maudio"}{$femail_heading1}
		    {elseif $sbtn eq "mimage"}{$femail_heading2}
		    {elseif $sbtn eq "mvideo"}{$femail_heading}
		    {elseif $sbtn eq "feeds"}{$rss_heading}
		    {elseif $sbtn eq "profile"}{$user}{$profile_heading}
		    {elseif $sbtn eq "pd"}{$plist_txt60}
		    {elseif $sbtn eq "shows"}{if $sh_ubtn eq "0" and $smarty.request.edit_show eq ""}{$pr_chinfom19}{else}{$pr_chinfom56}{/if}
		    {elseif $sbtn eq "bchan"}{$uch_thl4}
	        {/if}
	    </span>
	</td>
    </tr>
</table>
