	    {if $sbtn eq "friends" or $sbtn eq "bmember" or $sbtn eq "ufr" or $sbtn eq "search" or $sbtn eq "myusubs" or $sbtn eq "adm_search"}<form id="frform" name="filesel" method="post" action="">{/if}
	    <table cellpadding=0 cellspacing=1 align=center border=0 width="100%">
		<tr>
		    <td colspan="2">
			<div id="subsrespdiv" style="display: block;" class=""></div>
			<div id="loading_sub" style="display: none;"><table cellpadding=5 cellspacing=0 border=0><tr><td>{$adm_setgen79}</td></tr></table></div>
		    </td>
		</tr>
		{if (($sbtn eq "friends" or $sbtn eq "bmember" or $sbtn eq "ufr" or $sbtn eq "myusubs" or $sbtn eq "search") and $res[0].username ne "" and $smarty.session.UID ne "" ) or ( $sbtn eq "adm_search" and $res[0].username ne "" )}
		<tr>
		    <td class="th2" align="center" width="3%"><input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmya(document.filesel['mid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmya(document.filesel['mid[]']); HideContent('actdiv'); {rdelim}"></td>
		    <td class="th2">&nbsp;</td>
		</tr>
		{/if}
		{section name=i loop=$res}
		<tr class="nbg">
		    {if (($sbtn eq "friends" or $sbtn eq "bmember" or $sbtn eq "ufr" or $sbtn eq "myusubs" or $sbtn eq "search") and $smarty.session.UID ne "") or $sbtn eq "adm_search"}<td class="th1" align="center"><input type="checkbox" name="mid[]" value="{$res[i].username}" onclick="ShowContent('actdiv')"></td>{/if}
		    {if ( $smarty.section.i.index mod $paging_member eq "0" and $smarty.section.i.index ne 20 ) and $smarty.section.i.index gt "0"}</tr><tr>{/if}
		    <td valign=top class="th1">
			{insert name=audio_count assign=adocount uid=$res[i].uid}
			{insert name=image_count assign=idocount uid=$res[i].uid}
			{insert name=video_count assign=vdocount uid=$res[i].uid}
			{insert name=fav_count assign=favcount uid=$res[i].uid}
			{insert name=friend_count assign=frcount uid=$res[i].uid}
			<table cellpadding=5 cellspacing=0 border=0 width="100%">
			    <tr>
				<td align=center valign="top">
				    {if $res[i].username ne "" or ($sbtn eq "friends" or $sbtn eq "bmember" or $sbtn eq "ufr" or $sbtn eq "myusubs")}
					{if $sbtn eq "friends"}{insert name=getfield assign=photo field=photo table=members qfield=username qvalue=$res[i].username}
					{else}{insert name=getfield assign=photo field=photo table=members qfield=username qvalue=$res[i].username}{/if}
					<table cellpadding="0" cellspacing="0">
					    <tr>
						<td>
				    {if $sbtn eq "adm_search"}<a href="{$admin_url}/members/{$res[i].uid}">{else}<a href="{$base_url}/profile/{if $special_characters eq "0"}{$res[i].username}{else}{$res[i].uid}{/if}">{/if}
				        <img src="{$usrimg_url}/{$res[i].photo}" width="{$avatar_width/1.5}" height="{$avatar_height/1.5}" alt="{$res[i].username}" title="{$res[i].username}" class="{if $res[i].gender eq "M"}user_img{elseif $res[i].gender eq "F"}user_imgf{else}user_img{/if}">
				    </a>
						</td>
					    </tr>
					</table>
				    {/if}
				</td>
				<td valign=top class="nopad">
				    <table cellpadding=0 cellspacing=0 border=0 class="width191">
					<tr>
					    <td class="pt5"><span class="vtitle"></span>
						{if $sbtn eq "adm_search"}<a href="{$admin_url}/members/{$res[i].uid}">{else}<a href="{$base_url}/profile/{if $special_characters eq "0"}{$res[i].username}{else}{$res[i].uid}{/if}">{/if}<span class="mvtitle">{$res[i].username}</span></a>&nbsp;
						{if $res[i].show_status eq "yes"}({if $res[i].is_logged eq "1"}{$profile_online}{else}{$profile_offline}{/if}){/if}
					    </td>
					    <td align="right" valign="middle">
						{if $country_flags eq "1"}
						    {if $res[i].from_country eq ""}{insert name=getcountrycode assign=ccode ip=$res[i].from_ip}{else}{insert name=getarrayccode assign=ccode country=$res[i].from_country|lower|capitalize}{/if}
						    <img src="{$base_url}/media/files_flags/{$ccode|lower}.gif" width="16" height="11" alt="{$res[i].from_country}" title="{$res[i].from_country}">
						{/if}
					    </td>
					</tr>
					{if $btn eq "bmember" or $sbtn eq "search" or $sbtn eq "ufr" or $sbtn eq "adm_search" or $sbtn eq "myusubs"}
					{if $enable_channels eq "1" and ( $sbtn eq "search" or $sbtn eq "adm_search" )}
					<tr>
					    <td colspan="2" class="">
						<div class="p1">{$res[i].ch_title|spchar} - {$res[i].ch_desc|nl2br|spchar}</div>
						{if $smarty.request.filter eq "last_joined"}<div class="p1 italic">{$myfr_th5}: {$res[i].reg_on|date_format:"%b. %d, %Y"}</div>{/if}
						{if $smarty.request.filter eq "last_login"}<div class="p1 italic">{$search_ntxt2}{$res[i].last_login|date_format:"%b. %d, %Y"}</div>{/if}
						{if $smarty.request.filter eq "ch_views"}<div class="p1 italic">{$uch_txt8} <span class="bold">{$res[i].ch_views|viewnr}</span></div>{/if}
						{if $smarty.request.filter eq "ch_subs"}<div class="p1 italic">{$pr_chinfob28}: <span class="bold">{$res[i].ch_subs|viewnr}</span></div>{/if}
					    </td>
					</tr>
					{else}
					<tr>
					    <td class="italic" colspan=2>
						{if $sbtn eq "myusubs"}{$mysubs_txt2}{insert name=global_time_range assign=rtime addtime=$res[i].subscription_time}{$rtime} {$fileaddedago}
						{else}{$search_ntxt1}{$res[i].reg_on|date_format:"%b. %d, %Y"}
						{/if}
					    </td>
					</tr>
					<tr>
					    <td class="italic" colspan=2>{$search_ntxt2}{$res[i].last_login|date_format:"%b. %d, %Y"}</td>
					</tr>
					{/if}
					{elseif $sbtn eq "friends"}
					<tr>
					    <td class="italic" colspan=2>{$myfr_th5}: {$res[i].add_date|date_format:"%b. %d, %Y"}</td>
					</tr>
					<tr>
					    <td colspan=2>{insert name=getfield2 assign=fact field=is_active table=friends qfield=fname qvalue=$res[i].username uid=$smarty.session.UID}
						({if $res[i].fstatus eq "Confirmed"}{$myfr_response1}{elseif $res[i].fstatus eq "DENIED"}{$myfr_response2}{else}{$myfr_response3}{/if}, {if $fact eq "0"}{$myfr_status2}{else}{$myfr_status1}{/if})
					    </td>
					</tr>
					<tr>
					    <td colspan=2>
					    {if $file_ratings eq "1" or $file_comments eq "1"}	({if $file_ratings eq "1"}{if $res[i].can_rate eq "1"}{$myfr_canrate}{else}{$myfr_cantrate}{/if}{/if}{if $file_ratings eq "1" and $file_comments eq "1"}, {/if}{if $file_comments eq "1"}{if $res[i].can_comment eq "1"}{$myfr_cancomm}{else}{$myfr_cantcomm}{/if}{/if}){/if}
					    </td>
					</tr>
					{/if}
					<tr>
					    <td class="pt5" colspan=2 valign="bottom">
						<table cellpadding=0 cellspacing=0 border=0><tr>
						    <td class="pl0">
							<a href="javascript:void(0)" onclick="ReverseContentDisplay('memstat{$res[i].uid}{$smarty.section.i.iteration}'); ReverseSign('{$res[i].uid}{$smarty.section.i.iteration}');">
							    <span id="memb{$res[i].uid}{$smarty.section.i.iteration}">{$search_ntxt3}</span>
							</a>
						    </td>
						    <td class="plb1" valign="bottom">
							<img class="cursor" id="img{$res[i].uid}{$smarty.section.i.iteration}" src="{$theme_url}/{$site_theme}/images/sign_plus.gif" width="10" height="10" alt="{$search_ntxt3}" onclick="ReverseContentDisplay('memstat{$res[i].uid}{$smarty.section.i.iteration}'); ReverseSign('{$res[i].uid}{$smarty.section.i.iteration}');">
						    </td>
						</tr></table>
						<div id="memstat{$res[i].uid}{$smarty.section.i.iteration}" style="display: none;" class="pt5">
						    {include file="_inc/inc_filecount.tpl"}
						</div>
					    </td>
					</tr>
				    </table>
				</td>
				<td valign="top" class="">
				    {insert name=getfield assign=atitle field=vtitle table=files_audio qfield=uid qvalue=$res[i].uid order="and vtype='public' and is_inapp='no' order by addtime desc"}
				    {insert name=getfield assign=ititle field=vtitle table=files_image qfield=uid qvalue=$res[i].uid order="and vtype='public' and is_inapp='no' order by addtime desc"}
				    {insert name=getfield assign=vtitle field=vtitle table=files_video qfield=uid qvalue=$res[i].uid order="and vtype='public' and is_inapp='no' order by addtime desc"}
				    <table cellpadding=2 cellspacing=0 border=0 align="center" width="90">
					<tr>
					{if $enable_audio eq "1" or $sbtn eq "adm_search"}
					    <td align="center" valign="top">
						{if $atitle ne ""}
						    {insert name=getfield assign=akey field=vkey table=files_audio qfield=uid qvalue=$res[i].uid order="and vtype='public' and is_inapp='no' order by addtime desc"}
						    {insert name=getfield assign=avid field=vid table=files_audio qfield=uid qvalue=$res[i].uid order="and vtype='public' and is_inapp='no' order by addtime desc"}
						    {insert name=titlea assign=titlea vkey=$akey}
						    {insert name=vid_to_rnda assign=rnd vid=$avid}
						    {insert name=vid_to_rndvv assign=rndv vid=$avid}
						    {if $sbtn eq "adm_search"}
							<a href="{$admin_url}/audiou/{$res[i].uid}/all/all_time/{$akey}">
						    {else}
						    {if $same_title_uploads eq "0"}
                                			<a href="{$base_url}/audio/{$titlea}">
                            			    {else}
                                			<a href="{$base_url}/audio/{$akey}">
                            			    {/if}
                            			    {/if}
                                			    <img src="{$tmb_url}/user{$res[i].uid}/{$rndv}_{$rnd}.jpg" width="90" height="60" alt="{$atitle}" title="{$atitle}" class="thumb">
                                			</a>
                                			<div>{if $same_title_uploads eq "0"}<a href="{$base_url}/audio/{$titlea}">{else}<a href="{$base_url}/audio/{$akey}">{/if}<span class="title">{$atitle|truncate:$tr_titlegrid:"..."}</span></a></div>
						{else}
						    <div class="memd">{$search_ntxt4}</div>
						{/if}
					    </td>
					{/if}
					{if $enable_images eq "1" or $sbtn eq "adm_search"}
					    <td align="center" valign="top">
						{if $ititle ne ""}
						    {insert name=getfield assign=ikey field=vkey table=files_image qfield=uid qvalue=$res[i].uid order="and vtype='public' and is_inapp='no' order by addtime desc"}
						    {insert name=getfield assign=ivid field=vid table=files_image qfield=uid qvalue=$res[i].uid order="and vtype='public' and is_inapp='no' order by addtime desc"}
						    {insert name=getfield assign=tmb field=vflvname table=files_image qfield=uid qvalue=$res[i].uid order="and vtype='public' and is_inapp='no' order by addtime desc"}
						    {insert name=titlei assign=titlei vkey=$ikey}
						    {if $sbtn eq "adm_search"}
							<a href="{$admin_url}/imageu/{$res[i].uid}/all/all_time/{$ikey}">
						    {else}
						    {if $same_title_uploads eq "0"}
                                			<a href="{$base_url}/image/{$titlei}">
                            			    {else}
                                			<a href="{$base_url}/image/{$ikey}">
                            			    {/if}
                            			    {/if}
                                			    <img src="{$tmb_url}/user{$res[i].uid}/{$tmb}" width="90" height="60" alt="{$ititle}" title="{$ititle}" class="thumb">
                                			</a>
                                			<div>{if $same_title_uploads eq "0"}<a href="{$base_url}/image/{$titlei}">{else}<a href="{$base_url}/image/{$ikey}">{/if}<span class="title">{$ititle|truncate:$tr_titlegrid:"..."}</span></a></div>
						{else}
						    <div class="memd">{$search_ntxt5}</div>
						{/if}
					    </td>
					{/if}
					{if $enable_videos eq "1" or $sbtn eq "adm_search"}
					    <td align="center" valign="top">
						{if $vtitle ne ""}
						    {insert name=getfield assign=vkey field=vkey table=files_video qfield=uid qvalue=$res[i].uid order="and vtype='public' and is_inapp='no' order by addtime desc"}
						    {insert name=getfield assign=vvid field=vid table=files_video qfield=uid qvalue=$res[i].uid order="and vtype='public' and is_inapp='no' order by addtime desc"}
						    {insert name=titlev assign=titlev vkey=$vkey}
						    {insert name=vid_to_rndv assign=rnd vid=$vvid}
						    {insert name=vid_to_rndvv assign=rndv vid=$vvid}
						    {if $sbtn eq "adm_search"}
							<a href="{$admin_url}/videou/{$res[i].uid}/all/all_time/{$vkey}">
						    {else}
						    {if $same_title_uploads eq "0"}
                                			<a href="{$base_url}/video/{$titlev}">
                            			    {else}
                                			<a href="{$base_url}/video/{$vkey}">
                            			    {/if}
                            			    {/if}
                                			    <img src="{$tmb_url}/user{$res[i].uid}/{$rndv}_{$rnd}.jpg" width="90" height="60" alt="{$vtitle}" title="{$vtitle}" class="thumb">
                                			</a>
                                			<div>{if $same_title_uploads eq "0"}<a href="{$base_url}/video/{$titlev}">{else}<a href="{$base_url}/video/{$vkey}">{/if}<span class="title">{$vtitle|truncate:$tr_titlegrid:"..."}</span></a></div>
						{else}
						    <div class="memd">{$search_ntxt6}</div>
						{/if}
					    </td>
					{/if}
					</tr>
					{if $sbtn ne "friends"}
					<tr>
					    <td colspan=3 class="centered">
						    <input type="hidden" name="fname{$res[i].uid}" value="{$res[i].username}">
						    <input type="hidden" name="fuid{$res[i].uid}" value="{$res[i].uid}">
						    <input type="hidden" name="fmail{$res[i].uid}" value="{$res[i].email}">
						<div id="{if $sbtn eq "myusubs" or $sbtn eq "search"}frdiv{$smarty.section.i.iteration}{else}frdiv{$res[i].uid}{/if}" style="display: block;"></div>
					    </td>
					</tr>
					{/if}
				    </table>
				</td>
				<td valign="top" class="">
				    <table cellpadding=1 cellspacing=0 border=0 class="width100">
				    {if $btn eq "bmember" or $sbtn eq "search" or $sbtn eq "ufr" or $sbtn eq "myusubs"}
					{if $smarty.session.UID ne ""}<tr><td><a href="javascript:void(0)" onclick="{if $smarty.session.UID eq ""}location.href='{$base_url}/login'; return false;{else}if(confirm('{$search_ntxt7}')) {if $sbtn eq "myusubs" or $sbtn eq "search"}add2fr2x('{$res[i].uid}', '{$smarty.section.i.iteration}');{else}add2fr2('{$res[i].uid}');{/if}{/if}">{$profile_addfr}</a></td></tr>{/if}
					{if $enable_inbox eq "1"}
					    <tr><td><a href="javascript:void(0)" onclick="location.href='{$base_url}/inbox/compose/{if $special_characters eq "0"}{$res[i].username}{else}{$res[i].uid}{/if}'; return false;">{$profile_wrmsg}</a></td></tr>
					    {if $enable_inbox eq "1" and $msg_block eq "1" and $smarty.session.UID ne ""}
					    <tr>
						<td>
                            				<table cellpadding=0 cellspacing=0 border=0>
                                			    <tr>
                                    				<td>
                                    				{insert name=bstatus assign=bstatus blocked_uid=$res[i].uid}
                                    				{if $bstatus eq "0"}
                                        			    <a href="javascript:void(0)" onclick="{if $sbtn eq "myusubs" or $sbtn eq "search"}block_user2x('{$res[i].uid}', '{$smarty.section.i.iteration}');{else}block_user2('{$res[i].uid}');{/if}">{$inbox_mblock}</a>
                                    				{elseif $bstatus eq "1"}
                                    				    <a href="javascript:void(0)" onclick="{if $sbtn eq "myusubs" or $sbtn eq "search"}unblock_user2x('{$res[i].uid}', '{$smarty.section.i.iteration}');{else}unblock_user2('{$res[i].uid}');{/if}">{$inbox_munblock}</a>
                                    				{else}
                                    				    <a href="javascript:void(0)" onclick="{if $sbtn eq "myusubs" or $sbtn eq "search"}block_user2x('{$res[i].uid}', '{$smarty.section.i.iteration}');{else}block_user2('{$res[i].uid}');{/if}">{$inbox_mblock}</a>
                                    				{/if}
                                        			    <input type="hidden" name="blocked" value="{$res[i].uid}">
                                    				</td>
                                			    </tr>
                            				</table>
						</td>
					    </tr>
					    {/if}
					{/if}
					
					{if $enable_channels eq "1" and $sbtn ne "ufr" and $btn ne "bmember" and $smarty.session.UID ne ""}
					    <tr>
						<td>
					{insert name=get_pchar assign=pchar from=$res[i].stype}
					{insert name=get_pkey assign=pkey from=$res[i].stype}
					{insert name=getfield assign=pname field=pname table=$pchar qfield=vkey qvalue=$pkey}
					{insert name=getfield assign=puid field=uid table=$pchar qfield=vkey qvalue=$pkey}
					{insert name=getfield assign=puser field=username table=members qfield=uid qvalue=$puid}
					{if $pchar eq "playlist_audio"}{assign var=pchar2 value=$plsub_txt1}{assign var=plt value="a"}
					{elseif $pchar eq "playlist_image"}{assign var=pchar2 value=$plsub_txt2}{assign var=plt value="i"}
					{elseif $pchar eq "playlist_video"}{assign var=pchar2 value=$plsub_txt3}{assign var=plt value="v"}
					{/if}
						{if $res[i].uid ne $smarty.session.UID}
						    {if $res[i].stype eq "user"}{insert name=is_sub2 assign=is_sub uid=$res[i].uid}
						    {elseif $res[i].stype eq "fav"}{insert name=is_sub_fav2 assign=is_sub uid=$res[i].uid}
						    {else}{insert name=is_sub_pl2 assign=is_sub plt=$plt plk=$pkey uid=$res[i].uid}
						    {/if}
						    {if $is_sub eq "yes"}
						    <a href="javascript:void(0)" onclick="if(confirm('{$uch_txt16x}')) {ldelim} thisDiv('no'); ldiv('subsrespdiv'); ShowContent('frdiv{$smarty.section.i.iteration}'); set_subscription2('unsubs', '{$res[i].username}', '{$res[i].uid}', '{if $sbtn eq "search"}user{else}{if $res[i].stype eq "user"}user{elseif $res[i].stype eq "fav"}fav{else}pl{$plt}{$pkey}{/if}{/if}', '{$smarty.section.i.iteration}'{if $sbtn eq "search"}, '1'{/if}); {rdelim}">{$uch_txt15}</a>
						    {else}
						    <a href="javascript:void(0)" onclick="if(confirm('{$uch_txt17x}')) {ldelim} thisDiv('yes'); ldiv('subsrespdiv'); ShowContent('frdiv{$smarty.section.i.iteration}'); set_subscription2('subs', '{$res[i].username}', '{$res[i].uid}', '{if $sbtn eq "search"}user{else}{if $res[i].stype eq "user"}user{elseif $res[i].stype eq "fav"}fav{else}pl{$plt}{$pkey}{/if}{/if}', '{$smarty.section.i.iteration}'); {rdelim}">{$uch_txt14}</a>
						    {/if}
						{/if}
						</td>
					</tr>
					{/if}
					
				    {elseif $sbtn eq "friends"}
					<tr>
					    <td>
					    {if $fact eq "1"}<a href="javascript:void(0)" onclick="location.href='{$base_url}/my_friends/disable/{if $special_characters eq "0"}{$res[i].username}{else}{$res[i].uid}{/if}'; return false;">{$myfr_act2}</a>{/if}
					    {if $fact eq "0"}<a href="javascript:void(0)" onclick="location.href='{$base_url}/my_friends/enable/{if $special_characters eq "0"}{$res[i].username}{else}{$res[i].uid}{/if}'; return false;">{$myfr_act1}</a>{/if}
					    </td>
					</tr>
					{if $file_ratings eq "1"}
					<tr>
					    <td>
						{if $res[i].fstatus eq "Confirmed" and $fact eq "1"}
						    {if $res[i].can_rate eq "1"}
							<a href="javascript:void(0)" onclick="location.href='{$base_url}/my_friends/disable-ratings/{if $special_characters eq "0"}{$res[i].username}{else}{$res[i].uid}{/if}'; return false;">{$myfr_cantrate1}</a>
						    {else}
							<a href="javascript:void(0)" onclick="location.href='{$base_url}/my_friends/enable-ratings/{if $special_characters eq "0"}{$res[i].username}{else}{$res[i].uid}{/if}'; return false;">{$myfr_canrate1}</a>
						    {/if}
						{else}
						    {if $res[i].can_rate eq "1"}{$myfr_cantrate1}{else}{$myfr_canrate1}{/if}
						{/if}
					    </td>
					</tr>
					{/if}
					{if $file_comments eq "1"}
					<tr>
					    <td>
						{if $res[i].fstatus eq "Confirmed" and $fact eq "1"}
						    {if $res[i].can_comment eq "1"}
							<a href="javascript:void(0)" onclick="location.href='{$base_url}/my_friends/disable-comments/{if $special_characters eq "0"}{$res[i].username}{else}{$res[i].uid}{/if}'; return false;">{$myfr_cantcomm1}</a>
						    {else}
							<a href="javascript:void(0)" onclick="location.href='{$base_url}/my_friends/enable-comments/{if $special_characters eq "0"}{$res[i].username}{else}{$res[i].uid}{/if}'; return false;">{$myfr_cancomm1}</a>
						    {/if}
						{else}
						    {if $res[i].can_comment eq "1"}{$myfr_cantcomm1}{else}{$myfr_cancomm1}{/if}
						{/if}
					    </td>
					</tr>
					{/if}
					{if $enable_inbox eq "1"}<tr><td><a href="javascript:void(0)" onclick="location.href='{$base_url}/inbox/compose/{if $special_characters eq "0"}{$res[i].username}{else}{$res[i].uid}{/if}'; return false;">{$profile_wrmsg}</a></td></tr>{/if}
					<tr><td><a href="javascript:void(0)" onclick="if(confirm('{$myfr_del}{$res[i].username}?!')) location.href='{$base_url}/my_friends/delete/{if $special_characters eq "0"}{$res[i].username}{else}{$res[i].uid}{/if}'; return false;">{$myfr_act4}</a></td></tr>
				    {/if}
				    </table>
				</td>
			    </tr>
			    {if $sbtn eq "myusubs"}
			    <tr>
				<td class="pt0" colspan="6">
				    {if $res[i].stype eq "user"}{$plsub_txt}
				    {elseif $res[i].stype eq "fav"}{$plsub_txt4}
				    {else}
					{$pchar2} - "<span class="bold">{$pname}</span>"
				    {/if}
				</td>
			    </tr>
			    {/if}
			</table>
		    </td>
		</tr>
		{/section}
		{if $sbtn eq "friends" or $sbtn eq "bmember" or $sbtn eq "ufr" or $sbtn eq "myusubs" or $sbtn eq "search" or $sbtn eq "adm_search"}
		<tr>
		    <td colspan=2>{include file="_inc/inc_selectactions.tpl"}</td>
		</tr>
		{/if}
	    </table>
	    {if $sbtn eq "friends" or $sbtn eq "bmember" or $sbtn eq "ufr" or $sbtn eq "search" or $sbtn eq "myusubs" or $sbtn eq "search" or $sbtn eq "adm_search"}</form>{/if}
	    {if $sbtn eq "search" or $sbtn eq "myusubs"}
		<script language="javascript" src="{$js_url}/ajaxresponder.js" type="text/javascript"></script>
		<input type="hidden" name="ldivx" id="ldivx" value="">
		<input type="hidden" name="thisDiv" id="thisDiv" value="">
	    {/if}