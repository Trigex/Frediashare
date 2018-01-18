<!-- BEGIN DETAILS TABLE -->
			<table cellpadding="0" cellspacing="0" border=0 {if $site_theme eq "blue"}class="br2"{else}class="br1"{/if} width="100%">
			    <tr>
				<td>
				    <table cellpadding=0 cellspacing=0 border=0 align="left" class="dottc" width="100%">
					<tr>
					    <td align=left valign="top" width="48">
						{if $btn eq "baudio"}{insert name=key_to_user_audio assign=owner vkey=$key}{elseif $btn eq "bimage"}{insert name=key_to_user_image assign=owner vkey=$key}{elseif $btn eq "bvideo"}{insert name=key_to_user assign=owner vkey=$key}{/if}
						{insert name=getfield assign=photo field=photo table=members qfield=username qvalue=$owner}
						{insert name=getfield assign=gender field=gender table=members qfield=username qvalue=$owner}
						{insert name=getfield assign=regon field=reg_on table=members qfield=username qvalue=$owner}
						{insert name=getfield assign=logon field=last_login table=members qfield=username qvalue=$owner}
						<a href="{$base_url}/profile/{if $special_characters eq "0"}{$owner}{else}{$vuid}{/if}">
                                        	    <img src="{$usrimg_url}/{$photo}" width="48" height="48" alt="{$owner}" title="{$owner}" class="{if $gender eq "F"}user_imgf{else}user_img{/if}">
                                        	</a>
                                    	    </td>
                                    	    <td valign="top" class="pl5" {if $enable_channels eq "1"}width="45%"{/if}>
                                    		<table cellpadding=1 cellspacing=0 border=0 width="100%" align="left">
                                    		    <tr>
                                    			<td>
                                    			    <a href="{$base_url}/profile/{if $special_characters eq "0"}{$owner}{else}{$vuid}{/if}"><span class="gr">{$fileaddedby}</span>{$owner}</a><br>
                                    			    {if $btn eq "baudio"}{insert name=time_range assign=rtime field=addtime IDFR=vid id=$vidid tbl=files_audio}{elseif $btn eq "bimage"}{insert name=time_range assign=rtime field=addtime IDFR=vid id=$vidid tbl=files_image}{elseif $btn eq "bvideo"}{insert name=time_range assign=rtime field=addtime IDFR=vid id=$vidid tbl=files_video}{/if}{$rtime}{$fileaddedago}
                                    			</td>
                                    		    </tr>
                                    		    {if $vpage_useronline eq "1"}
                                    		    <tr>
                                    			<td>
                                    			    {insert name=getfield assign=show_status field=show_status table=members qfield=uid qvalue=$vuid}
                                    			    {if $show_status eq "yes"}
                                    			    {insert name=getfield assign=is_logged field=is_logged table=members qfield=uid qvalue=$vuid}
                                    			    <span class="italic">({if $is_logged eq "1"}{$profile_online}{else}{$profile_offline}{/if})</span>
                                    			    {/if}
                                    			</td>
                                    		    </tr>
                                    		    {/if}
                                    		</table>
                                    	    </td>
                                    	    {if $enable_channels eq "1"}
                                    	    <td valign="top" align="right">
                                    		<form id="chsubsform"></form>
                                    		{insert name=getfield assign=bl_sub field=bl_sub table=members qfield=uid qvalue=$vuid}
                                    		{insert name=getfield assign=muser field=username table=members qfield=uid qvalue=$vuid}
                                    		<table cellpadding="0" cellspacing="0" border="0" align="right" width="110">
                                    		    <tr>
                                    			<td {if $smarty.session.UID ne "" and ($is_bl ne "yes" or $bl_sub eq "no")}class="fb"{else}class=""{/if} align="center" style="padding: 4px 0px;">
                                    			    {if (($vuid eq $smarty.session.UID) and $smarty.session.UID ne "") or ($vuid eq $smarty.session.UID) }<a href="{$base_url}/my_profile">{$uch_txt13}</a>
                                    			    {else}
                                    			    {if $smarty.session.UID ne "" and ($is_bl ne "yes" or $bl_sub eq "no")}
                                    				<div id="slinkdiv" style="{if $is_sub eq "no"}display: block;{else}display: none;{/if}">
                                    				    <a href="javascript:void(0)" onclick="ShowContent('subsrespdiv'); thisDiv('yes'); ldiv('subsrespdiv'); set_subscription('subs', '{$muser}', '{$vuid}', 'user');">{$uch_txt14}</a>
                                    				</div>
                                    				<div id="uslinkdiv" style="{if $is_sub eq "yes"}display: block;{else}display: none;{/if}">
                                    				    <a href="javascript:void(0)" onclick="ShowContent('subsrespdiv'); set_subscription('unsubs', '{$muser}', '{$vuid}', 'user');">{$uch_txt15}</a>
                                    				</div>
                                    			    {/if}
                                    			    {/if}
                                    			</td>
                                    		    </tr>
                                    		</table>
                                    	    </td>
                                    	    {/if}
					</tr>
					{if $vpage_userfcount eq "1"}
                                    	<tr>
                                    	    <td></td>
                                    	    <td align="left" {if $enable_channels eq "1"}colspan="2"{/if} class="pl5">
                                	    {insert name=audio_count assign=adocount uid=$vuid}
                                    	    {insert name=image_count assign=idocount uid=$vuid}
                                    	    {insert name=video_count assign=vdocount uid=$vuid}
                                    	    {insert name=fav_count assign=favcount uid=$vuid}
                                    	    {insert name=friend_count assign=frcount uid=$vuid}
                                    		<table cellpadding=0 cellspacing=0 border=0 width="100%"><tr>
                                                    <td class="pl0" width="50%">
                                                        <a href="javascript:void(0)" onclick="ReverseContentDisplay('memstat{$vuid}'); ReverseSign('{$vuid}');">
                                                            <span id="memb{$vuid}">{$search_ntxt3}</span>
                                                        </a>
                                                    </td>
                                                    <td class="plb1" valign="bottom">
                                                        <img class="cursor" id="img{$vuid}" src="{$theme_url}/{$site_theme}/images/sign_plus.gif" width="10" height="10" alt="{$search_ntxt3}" onclick="ReverseContentDisplay('memstat{$vuid}'); ReverseSign('{$vuid}');">
                                                    </td>
                                                </tr></table>
                                                <div id="memstat{$vuid}" style="display: none;" class="pt2">
                                                    {include file="_inc/inc_filecount2.tpl"}
                                                </div>
                                    	    </td>
                                        </tr>
                                        {/if}
				    </table>
				    {if $enable_channels eq "1"}
				    <table cellpadding="5" cellspacing="0" width="100%" align="left">
					<tr>
					    <td align="left">
                                    		<div id="subsrespdiv" style="display: block;" class=""></div>
                                    		<div id="loading_sub" style="display: none;"><table cellpadding=5 cellspacing=0 border=0><tr><td>{$adm_setgen79}</td></tr></table></div>
                                    	    </td>
                                    	</tr>
                                    </table>
                                    {/if}
				</td>
			    </tr>
			    <tr>
				<td class="nopad">
				    <table cellpadding="5" cellspacing="0" border="0" width="100%">
					<tr>
					    <td>
						<div id="shortdesc" style="display: {if $vpage_fdesc eq "c"}block{else}none{/if};">
						    <span class="vdescr">{$descr|truncate:60:"..."|nl2br|spchar}</span>
						    &nbsp;<a href="javascript:void(0)" onclick="ReverseContentDisplay('fdetails'); ReverseContentDisplay('longdesc'); ReverseContentDisplay('shortdesc'); ">{$act_more}</a>
						</div>
						
						<div id="longdesc" style="display: {if $vpage_fdesc eq "e"}block{else}none{/if};">
						    <span class="vdescr">{$descr|nl2br|spchar}</span>
						    &nbsp;<a href="javascript:void(0)" onclick="ReverseContentDisplay('fdetails'); ReverseContentDisplay('longdesc'); ReverseContentDisplay('shortdesc'); ">{$act_less}</a>
						</div>
					    </td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td>
				    <div id="fdetails" style="display: {if $vpage_fdesc eq "e"}block{else}none{/if};">
				    <table cellpadding=1 cellspacing=0 border=0 align=left width="100%">
					<tr>
					    <td align=left class="pl5" valign="top" width="20%"><span class="gr">{$adm_avtxt22}</span></td>
					    <td align=left>
						{if $btn eq "baudio"}{insert name=audio_channel assign=channel vid=$vidid}{elseif $btn eq "bimage"}{insert name=image_channel assign=channel vid=$vidid}{elseif $btn eq "bvideo"}{insert name=video_channel assign=channel vid=$vidid}{/if}
						{if $btn eq "baudio"}{assign var=xtype value="audio"}{elseif $btn eq "bimage"}{assign var=xtype value="image"}{elseif $btn eq "bvideo"}{assign var=xtype value="video"}{/if}
						{section name=k loop=$channel}
						{insert name=categ_to_name2 assign=cn cid=$channel[k].cid}
						    <a href="{$base_url}/categories/{$xtype}/{if $special_characters eq "0"}{$cn}{else}{$channel[k].cid}{/if}">{$channel[k].name}{if !$smarty.section.k.last},{/if}</a>
						{/section}
					    </td>
					</tr>
					<tr>
					    <td valign="top" class="pl5" valign="top"><span class="gr">{$filetags}</span></td>
					    <td align="left">
						{if $btn eq "baudio"}{insert name=audio_tags assign=tags vid=$vidid}{elseif $btn eq "bimage"}{insert name=image_tags assign=tags vid=$vidid}{elseif $btn eq "bvideo"}{insert name=video_tags assign=tags vid=$vidid}{/if}
						{section name=j loop=$tags}
						    <a href="{$base_url}/search/tags/{$tags[j]}">{$tags[j]}</a>
						{/section}
					    </td>
					</tr>
					<tr>
					    <td class="p5" colspan="2">
						{$view_permalink}
						{if $type eq "private"}
						    <input type="text" class="ff" style="width: {$rwidth-30}px;" name="vidlink" value="{$view_disabled}" DISABLED>
						{else}
						    <input type="text" class="ff" style="width: {$rwidth-30}px;" name="vidlink" value="{$base_url}/{$xtype}/{$smarty.request.id}" onclick="this.select(); this.focus();">
						{/if}
					    </td>
					</tr>
				    </table>
				    </div>
				</td>
			    </tr>
			    
			    {if $file_embed eq "1" and $btn ne "bimage"}
			    <tr>
				<td class="p5">
				    {$view_embed}
				    {if $btn eq "baudio"}{insert name=key_to_embed_audio assign=embed vkey=$key}{elseif $btn eq "bvideo"}{insert name=key_to_embed assign=embed vkey=$key}{/if}
				    
				    {if $embed eq "no"}
					<input type="text" class="ff" style="width: {$rwidth-30}px;" name="emblink" value="{$view_disabled}" DISABLED>
				    {/if}
				    {if $embed eq "yes"}
				    {if $btn eq "baudio"}
					<input type="text" class="ff" style="width: {$rwidth-30}px;" name="emblink" value='<div><object width="{$pwidth2}" height="{$pheight2}" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0"><param name="movie" value="{$base_url}/modules/aPlayer/fmp3player.swf"><param name="menu" value="false"><param name="quality" value="high"><param name="bgcolor" value="#ffffff"><param name="flashvars" value="file={$base_url}/modules/aPlayer/fmp3player.php?fid={$key}{$autoplay2}{$logo2}{$showeq2}"><embed src="{$base_url}/modules/aPlayer/fmp3player.swf" width="{$pwidth2}" height="{$pheight2}" flashvars="file={$base_url}/modules/aPlayer/fmp3player.php?fid={$key}{$autoplay2}{$logo2}{$showeq2}"></embed></object></div>' onclick="this.select(); this.focus();">
				    {elseif $btn eq "bvideo"}
					{if $epfscreen eq "1"}{assign var=epfs value="true"}{else}{assign var=epfs value="false"}{/if}
					<input type="text" class="ff" style="width: {$rwidth-30}px;" name="emblink" value='<div><embed width="{$epwidth}" height="{$epheight}" quality="high" bgcolor="#000000" name="main" id="main" src="{$base_url}/modules/vPlayer/vPlayer.swf?f={$base_url}/modules/vPlayer/vPlayercfg.php?fid={$key}" allowscriptaccess="always" allowfullscreen="{$epfs}" type="application/x-shockwave-flash"/></embed></div>' onclick="this.select(); this.focus();">
				    {/if}
				    {/if}
				    {if $type eq "private"}
					<input type="text" class="ff" style="width: {$rwidth-30}px;" name="emblink" value="{$view_disabled}" DISABLED>
				    {/if}
				</td>
			    </tr>
			    {/if}
			</table>
<!-- END DETAILS TABLE -->