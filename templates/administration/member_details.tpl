<br>
<!-- BEGIN ADMIN AREA MEMBER DETAILS TABLE -->
<table width="950" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
	<td class=""><h1>{insert name=uid_to_names assign=uname uid=$smarty.request.user}{$uname}{$adm_memdetailsheading}</h1></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr>
	<td class="pt10_bg" valign="top" width="25%">
	    <table cellpadding=3 cellspacing=1 border=0 align=center width="100%">
		<tr>
		    <td align="left">
			{$ltsigns}<a href="{if $back eq "0"}javascript:void(0){else}{$admin_url}/members/{$back}{/if}">{$gen_pageprev}</a>{$myfiles_delim}
			<a href="{if $next eq "0"}javascript:void(0){else}{$admin_url}/members/{$next}{/if}"">{$gen_pagenext}</a>{$gtsigns}
		    </td>
		</tr>
	    </table>
	    <br>
	    <table cellpadding=2 cellspacing=0 border=0>
		<tr>
		    <td><img src="{$usrimg_url}/{$details[0].photo}" width="96" height="96" alt="{$smarty.request.user}" class="{if $details[0].gender eq "M"}user_img{elseif $details[0].gender eq "F"}user_imgf{else}user_img{/if}"></td>
		</tr>
		<tr>
		    <td align=center>{insert name=audio_count assign=adocount uid=$details[0].uid}<a {if $adocount ne "0"}href="{$admin_url}/audiou/{$details[0].uid}/all/all_time"{/if}><span class="gr">{$user_audios} </span>({$adocount})</a></td>
		</tr>
		<tr>
		    <td align=center>{insert name=image_count assign=idocount uid=$details[0].uid}<a {if $idocount ne "0"}href="{$admin_url}/imageu/{$details[0].uid}/all/all_time"{/if}><span class="gr">{$user_images} </span>({$idocount})</a></td>
		</tr>
		<tr>
		    <td align=center>{insert name=video_count assign=vdocount uid=$details[0].uid}<a {if $vdocount ne "0"}href="{$admin_url}/videou/{$details[0].uid}/all/all_time"{/if}><span class="gr">{$user_videos} </span>({$vdocount})</a></td>
		</tr>
	    </table><br>
	    <table cellpadding=1 cellspacing=0 border=0 width="100%" align="left">
		<tr><td><span class="normal f11">{$adm_memdetails1}</span> {$minfo[0].uid}</td></tr>
		<tr><td><span class="normal f11">{$memusername}</span> {$minfo[0].username}</td></tr>
		<tr><td><span class="normal f11">{$adm_memdetails3}</span> {$minfo[0].email}</td></tr>
		<tr><td><span class="normal f11">{$uch_txt3}</span> {$minfo[0].reg_on|date_format:"%B %e, %Y"}</td></tr>
		<tr><td><span class="normal f11">{$adm_memdetails7}</span> {$minfo[0].last_login|date_format:"%B %e, %Y, %H:%M %p"}</td></tr>
		<tr><td><span class="normal f11">{$adm_memdetails8}</span> {$minfo[0].from_ip}</td></tr>
		<tr><td><span class="normal f11">{$adm_memdetails4}</span> {if $minfo[0].is_active eq "1"}{$adm_memyes}{else}{$adm_memno}{/if}</td></tr>
		<tr><td><span class="normal f11">{$mem_th5}: </span> {if $minfo[0].is_logged eq "1"}{$adm_memyes}{else}{$adm_memno}{/if}</td></tr>
		<tr><td style="padding-top: 10px;"><span class="normal f11">{$hpbox_inbpm}</span> {insert name=pmsg_count_all_admin assign=pmsg uid=$minfo[0].username}{$pmsg|viewnr}</td></tr>
		<tr><td><span class="normal f11">{if $enable_channels eq "1"}{$hpbox_inbch}{else}{$adm_setgen143}{/if}</span> {insert name=count_pmsg_admin assign=chmsg uid=$minfo[0].uid}{$chmsg|viewnr}</td></tr>
		<tr><td><span class="normal f11">{$hpbox_inbvi}</span> {insert name=count_vcomm_admin assign=vcomm uid=$minfo[0].uid} {$vcomm|viewnr}</td></tr>
		<tr><td><span class="normal f11">{$fresp_txt1}: </span> {insert name=count_vresp_admin assign=vresp uid=$minfo[0].uid} {$vresp|viewnr}</td></tr>
		<tr><td><span class="normal f11">{$hpbox_inbii}</span> {insert name=count_icomm_admin assign=icomm uid=$minfo[0].uid} {$icomm|viewnr}</td></tr>
		<tr><td><span class="normal f11">{$fresp_txt2}: </span> {insert name=count_iresp_admin assign=iresp uid=$minfo[0].uid} {$iresp|viewnr}</td></tr>
		<tr><td><span class="normal f11">{$hpbox_inbai}</span> {insert name=count_acomm_admin assign=acomm uid=$minfo[0].uid} {$acomm|viewnr}</td></tr>
		<tr><td><span class="normal f11">{$fresp_txt3}: </span> {insert name=count_aresp_admin assign=aresp uid=$minfo[0].uid} {$aresp|viewnr}</td></tr>
		<tr><td style="padding-top: 10px;"><span class="normal f11">{if $enable_channels eq "1"}{$uch_txt8}{else}{$hpbox_mypv}{/if}</span> {insert name=getfield assign=chview field=ch_views table=members qfield=uid qvalue=$minfo[0].uid}{$chview|viewnr}</td></tr>
		<tr><td><span class="normal f11">{$user_favorites}</span> {insert name=fav_count assign=favcount uid=$minfo[0].uid}{$favcount|viewnr}</td></tr>
		<tr><td><span class="normal f11">{$user_friends}</span> {insert name=friend_count assign=frcount uid=$minfo[0].uid}{$frcount|viewnr}</td></tr>
		<tr><td><span class="normal f11">{$pr_chinfob28}:</span> {insert name=subs_count assign=subscount uid=$minfo[0].uid}{$subscount|viewnr}</td></tr>
		<tr><td><span class="normal f11">{$pr_chinfop56}:</span> {insert name=subs_count_own_admin assign=subscountown uid=$minfo[0].uid}{$subscountown|viewnr}</td></tr>
		<tr><td><span class="normal f11">{$adm_setgen23}</span> {insert name=video_count assign=vcount uid=$minfo[0].uid}{$vcount|viewnr}</td></tr>
		<tr><td><span class="normal f11">{$adm_setgen22}</span> {insert name=image_count assign=icount uid=$minfo[0].uid}{$icount|viewnr}</td></tr>
		<tr><td><span class="normal f11">{$adm_setgen21}</span> {insert name=audio_count assign=acount uid=$minfo[0].uid}{$acount|viewnr}</td></tr>
		<tr><td><span class="normal f11">{$memyouhaveused}</span> {$mspace}</td></tr>
	    </table>
	</td>
	<td valign="top" class="grey" width="75%">
	<form name="member_btn" method="post" action="">
	    <table cellpadding="5" cellspacing="0" align="center">
		<tr>
		    <td><input type="button" name="mem_msg" class="fb width100" value="{$adm_memact2}" onclick="location.href='{$admin_url}/members/message/{$details[0].uid}'; return false;"></td>
		    <td><input type="button" name="mem_email" class="fb width100" value="{$adm_memact1}" onclick="location.href='{$admin_url}/members/email/{$details[0].uid}'; return false;"></td>
		    <td><input type="submit" name="mem_uploads" class="fb width100" value="{if $details[0].can_upload eq "1"}{$adm_memnoup}{else}{$adm_memallup}{/if}"></td>
		    <td><input type="submit" name="mem_active" class="fb width100" value="{if $details[0].is_active eq "1"}{$adm_memsuspend}{else}{$adm_memunsuspend}{/if}"></td>
		    <td>{insert name=getfield assign=isban field=active table=banned_users qfield=ban_uid qvalue=$details[0].uid}<input type="submit" name="mem_ban" class="fb width100" value="{if $isban eq "0" or $isban eq ""}{$adm_memact4}{else}{$adm_memact5}{/if}"></td>
		    <td><input type="submit" name="mem_del" class="fb width100" value="{$adm_memact3}" onclick="return confirm ('{$adm_memdelmsg}{$minfo[0].username}?' );"></td>
		</tr>
	    </table>
	</form>
	    {if $enable_channels eq "1"}
	    <br>
	    {include file="_inc/chan/ch_info.tpl"}
	    {/if}
	    <br>
	    {if $minfo[0].ch_type ne 1}
	    {include file="_inc/chan/ch_performer.tpl"}
	    <br>
	    {/if}
	    {include file="_inc/chan/ch_profile.tpl"}
	    <br>
	    {if $minfo[0].ch_type eq 3 or $minfo[0].ch_type eq 4}
	    <form id="cheventform">
	    {include file="_inc/chan/ch_eventslist.tpl"}
	    </form>
	    <br>
	    {/if}
	    {include file="_inc/chan/ch_loc.tpl"}
	    <br>
	    {if $minfo[0].ch_type eq 2}
	    {include file="_inc/chan/ch_url.tpl"}
	    {/if}
	    <br><table cellpadding="0" cellspacing="0" width="100%"><tr><td align="right"><a href="{$admin_url}/members/registered">{$adm_memback}</a>&nbsp;</td></tr></table>
	</td>
    </tr>
</table>
<!-- END ADMIN AREA MEMBER DETAILS TABLE -->
