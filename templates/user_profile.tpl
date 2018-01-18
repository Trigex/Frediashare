<!-- BEGIN USER PROFILE TABLE -->
<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
    <tr><td class="h3"></td></tr>
</table>
<table cellpadding="5" cellspacing="0" border=0 align=center class="width950b">
    <tr>
	<td width="35%" valign="top">
<!-- BEGIN USER DETAILS LEFT TABLE -->	
	    <table width="100%" cellpadding=0 cellspacing=0 border=0 class="ptbl1">
		<tr>
		    <td align="center">
			<table cellpadding=5 cellspacing=0 border=0 width="99%" align="center">
			    <tr>
				<td colspan=2 class=br align="left">
				    {include file="_inc/chan/_inc/inc_userpageb1userprofile.tpl"}
				</td>
			    </tr>
			    <tr>
				<td width="50%" class="nopad" valign=top align="center">
				{if $enable_audio eq "1"}
				    <table cellpadding=0 cellspacing=0 border=0 width="100%" class="ptbl">
					<tr>
					    <td width="32">{insert name=audio_count assign=adocount uid=$udetails[0].uid}<a {if $adocount ne "0"}href="{$base_url}/user_audios/{if $special_characters eq "0"}{$udetails[0].username}{else}{$udetails[0].uid}{/if}{else}href="javascript:void(0)"{/if}"><img src="{$img_url}/symbols/audio.png" width="32" height="32" alt="{$profile_audios}"></a></td>
					    <td align="left"><a {if $adocount ne "0"}href="{$base_url}/user_audios/{if $special_characters eq "0"}{$udetails[0].username}{else}{$udetails[0].uid}{/if}{else}href="javascript:void(0)"{/if}">{$profile_audios} ({$adocount})</a></td>
					</tr>
				    </table>
				{/if}
				{if $enable_images eq "1"}
				    <table cellpadding=0 cellspacing=0 border=0 width="100%" class="ptbl">
					<tr>
					    <td width="32">{insert name=image_count assign=idocount uid=$udetails[0].uid}<a {if $idocount ne "0"}href="{$base_url}/user_images/{if $special_characters eq "0"}{$udetails[0].username}{else}{$udetails[0].uid}{/if}{else}href="javascript:void(0)"{/if}"><img src="{$img_url}/symbols/image.png" width="32" height="32" alt="{$profile_images}"></a></td>
					    <td align="left"><a {if $idocount ne "0"}href="{$base_url}/user_images/{if $special_characters eq "0"}{$udetails[0].username}{else}{$udetails[0].uid}{/if}{else}href="javascript:void(0)"{/if}">{$profile_images} ({$idocount})</a></td>
					</tr>
				    </table>
				{/if}
				{if $enable_videos eq "1"}
				    <table cellpadding=0 cellspacing=0 border=0 width="100%" class="ptbl">
					<tr>
					    <td width="32">{insert name=video_count assign=vdocount uid=$udetails[0].uid}<a {if $vdocount ne "0"}href="{$base_url}/user_videos/{if $special_characters eq "0"}{$udetails[0].username}{else}{$udetails[0].uid}{/if}{else}href="javascript:void(0)"{/if}"><img src="{$img_url}/symbols/video.png" width="32" height="32" alt="{$profile_videos}"></a></td>
					    <td align="left"><a {if $vdocount ne "0"}href="{$base_url}/user_videos/{if $special_characters eq "0"}{$udetails[0].username}{else}{$udetails[0].uid}{/if}{else}href="javascript:void(0)"{/if}">{$profile_videos} ({$vdocount})</a></td>
					</tr>
				    </table>
				{/if}
				    <table cellpadding=0 cellspacing=0 border=0 width="100%" class="ptbl">
					<tr>
					    <td width="32">{insert name=fav_count assign=favcount uid=$udetails[0].uid}<a {if $favcount ne "0"}href="{$base_url}/user_favorites/{if $special_characters eq "0"}{$udetails[0].username}{else}{$udetails[0].uid}{/if}{else}href="javascript:void(0)"{/if}"><img src="{$img_url}/symbols/favorites.png" width="32" height="32" alt="{$profile_favorites}"></a></td>
					    <td align="left"><a {if $favcount ne "0"}href="{$base_url}/user_favorites/{if $special_characters eq "0"}{$udetails[0].username}{else}{$udetails[0].uid}{/if}{else}href="javascript:void(0)"{/if}">{$profile_favorites} ({$favcount})</a></td>
					</tr>
				    </table>
				    <table cellpadding=0 cellspacing=0 border=0 width="100%" class="ptbl">
					<tr>
					    <td width="32">{insert name=friend_count assign=frcount uid=$udetails[0].uid}<a {if $frcount ne "0"}href="{$base_url}/user_friends/{if $special_characters eq "0"}{$udetails[0].username}{else}{$udetails[0].uid}{/if}{else}href="javascript:void(0)"{/if}"><img src="{$img_url}/symbols/friends.png" width="32" height="32" alt="{$profile_friends}"></a></td>
					    <td align="left"><a {if $frcount ne "0"}href="{$base_url}/user_friends/{if $special_characters eq "0"}{$udetails[0].username}{else}{$udetails[0].uid}{/if}{else}href="javascript:void(0)"{/if}">{$profile_friends} ({$frcount})</a></td>
					</tr>
				    </table>
				</td>
				
				<td width="50%" class="nopad" valign=top align="left">
				{if $smarty.session.UID ne ""}
				    <table cellpadding=0 cellspacing=0 border=0 width="100%" class="ptbl">
					<tr>
					    <td width="32"><a class="cursor" onClick="if(confirm('Please confirm adding {$smarty.request.user} to your list of friends!!')) add2fr();"><img src="{$img_url}/symbols/add2friends.png" width="32" height="32" alt="{$profile_addfr}"></a></td>
					    <td><a class="cursor" onClick="if(confirm('Please confirm adding {$udetails[0].username} to your list of friends!!')) add2fr();">{$profile_addfr}</a></td>
					</tr>
				    </table>
				{/if}
				    {if $enable_inbox eq "1"}
				    <table cellpadding=0 cellspacing=0 border=0 width="100%" class="ptbl">
					<tr>
					    <td width="32"><a href="{$base_url}/inbox/compose/{$smarty.request.user}"><img src="{$img_url}/symbols/newmsg.png" width="32" height="32" alt="{$profile_wrmsg}"></a></td>
					    <td><a href="{$base_url}/inbox/compose/{$smarty.request.user}">{$profile_wrmsg}</a></td>
					</tr>
				    </table>
				    {/if}
				    <form id="setview"><input type="hidden" name="viewmode" value="{$smarty.session.viewmode}"></form>
				    <table cellpadding=0 cellspacing=0 border=0 width="100%" class="ptbl">
					<tr>
					    <td width="32"{if $udetails[0].site ne ""}<a href="{$udetails[0].site}" target="_blank"><img src="{$img_url}/symbols/website.png"></a>{else}<a><img src="{$img_url}/symbols/website.png" width="32" height="32" alt="{$profile_websiteyes}"></a>{/if}</td>
					    <td>{if $udetails[0].site ne ""}<a href="{$udetails[0].site}" target="_blank">{$profile_websiteyes}</a>{else}<a>{$profile_websiteno}</a>{/if}</td>
					</tr>
				    </table>
				    <br>
				    <table cellpadding=0 cellspacing=0 border=0 class="ptbl" align="left">
					{include file="_inc/inc_viewstags.tpl"}
				    </table>
				    <table cellpadding=5 cellspacing=0 border=0 class="ptbl">
					<tr>
					    <td>
						<div>
						<form id="frform">
						    <input type="hidden" name="fname" value="{$udetails[0].username}">
						    <input type="hidden" name="fuid" value="{$udetails[0].uid}">
						    <input type="hidden" name="fmail" value="{$udetails[0].email}">
						</form>
						</div>
					    </td>
					</tr>
				    </table>
				</td>
			    </tr>
			</table><br>
			<div id="frdiv"></div>
			{if $profile_comments eq "1"}
			    {include file="_inc/viewfile/inc_viewfilecomments.tpl"}
			{/if}
<!-- END USER DETAILS LEFT TABLE -->				
		    </td>
		</tr>
	    </table><br>
	</td>
	
	<td width="65%" valign="top" class="nopad_bg" class="ptbl">
	    {include file="_inc/inc_userprofile.tpl"}
	</td>
    </tr>
</table>
<!-- END USER PROFILE TABLE -->
