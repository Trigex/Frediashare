{if ($enable_videos eq "0" and $enable_images eq "1") or $smarty.get.view eq "images"}
    {insert name=image_count assign=vdocount uid=$minfo[0].uid}
    {assign var=b9v1 value=$images_main}
    {assign var=urlq value="images"}
    {assign var=b9v2 value=$userpage_subimg}
    {assign var=b9v2u value=$uch_txt15}
    {assign var=b9v3 value=$userpage_nosub6}
    {assign var=b9v4 value="files_image"}
    {assign var=b9v5 value="image"}
    {assign var=b9v6 value="i"}
{elseif ($enable_images eq "0" and $enable_videos eq "0") or $smarty.get.view eq "audios"}
    {insert name=audio_count assign=vdocount uid=$minfo[0].uid}
    {assign var=b9v1 value=$audios_main}
    {assign var=urlq value="audios"}
    {assign var=b9v2 value=$userpage_subaud}
    {assign var=b9v2u value=$uch_txt15}
    {assign var=b9v3 value=$userpage_nosub7}
    {assign var=b9v4 value="files_audio"}
    {assign var=b9v5 value="audio"}
    {assign var=b9v6 value="a"}
{else}
    {insert name=video_count assign=vdocount uid=$minfo[0].uid}
    {assign var=b9v1 value=$videos_main}
    {assign var=urlq value="videos"}
    {assign var=b9v2 value=$userpage_subvid}
    {assign var=b9v2u value=$uch_txt15}
    {assign var=b9v3 value=$userpage_nosub4}
    {assign var=b9v4 value="files_video"}
    {assign var=b9v5 value="video"}
    {assign var=b9v6 value="v"}
{/if}
			{if $smarty.get.view ne ""}
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td colspan="2">
				    <form id="chsubsform"></form>
				    <div id="subsrespdiv" style="display: none;"></div>
				    <div id="loading_sub" style="display: none;"><table cellpadding=5 cellspacing=0 border=0><tr><td>{$adm_setgen79}</td></tr></table></div>
				</td>
			    </tr>
			</table>
			{/if}

		    <div id="b9">
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td align="left" class="thead2">
				    {$b9v1}<a href="{$base_url}/user/{$minfo[0].username}&view={$urlq}">({$vdocount|viewnr})</a>
				</td>
				{if $minfo[0].uid ne $smarty.session.UID and $smarty.session.UID ne "" and $vdocount gt 0}
				<td align="right" class="thead2">
				    {if $smarty.session.UID ne "" and ($is_bl ne "yes" or $bl_sub eq "no")}
					<div id="slinkdiv2" style="{if $is_sub eq "no"}display: block;{else}display: none;{/if}">
					    {if $smarty.get.view eq ""}<a href="#subscribe">{$b9v2}</a>&nbsp;{else}<a href="javascript:void(0)" onclick="ShowContent('subsrespdiv'); thisDiv('yes'); ldiv('subsrespdiv'); set_subscription('subs', '{$minfo[0].username}', '{$minfo[0].uid}', 'user');">{$b9v2}</a>&nbsp;{/if}
					</div>
					<div id="uslinkdiv2" style="{if $is_sub eq "yes"}display: block;{else}display: none;{/if}">
					    {if $smarty.get.view eq ""}<a href="#unsubscribe">{$b9v2u}</a>&nbsp;{else}<a href="javascript:void(0)" onclick="ShowContent('subsrespdiv'); set_subscription('unsubs', '{$minfo[0].username}', '{$minfo[0].uid}', 'user');">{$b9v2u}</a>&nbsp;{/if}
					</div>
				    {/if}
				</td>
				{/if}
			    <tr>
			</table>
			
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			{if $vdocount eq 0}
			    <tr><td class="tbody2" align="center"><table cellpadding="0" cellspacing="0"><tr><td class="p5 bodylabel">{$b9v3}</span></td></tr></table></td></tr>
			{else}
			    <tr>
				<td class="tbody2" colspan="2">
				    {if $tinfo[0].th_vid_view eq "grid"}{assign var=maxloop value=9}{else}{assign var=maxloop value=3}{/if}
				    {if $smarty.get.view eq ""}
				    {if $minfo[0].ch_vids ne "" and $enable_videos eq "1"}
					{insert name=keys_to_array assign=varr arr=$minfo[0].ch_vids}
				    {elseif $minfo[0].ch_vids eq "" and $enable_videos eq "1"}
					{insert name=keys_to_array assign=varr arr=$varr2}
				    {elseif $minfo[0].ch_imgs ne "" and $enable_images eq "1"}
					{insert name=keys_to_array assign=varr arr=$minfo[0].ch_imgs}
				    {elseif $minfo[0].ch_imgs eq "" and $enable_images eq "1"}
					{insert name=keys_to_array assign=varr arr=$varr2}
				    {elseif $minfo[0].ch_auds ne "" and $enable_audio eq "1"}
					{insert name=keys_to_array assign=varr arr=$minfo[0].ch_auds}
				    {elseif $minfo[0].ch_auds eq "" and $enable_audio eq "1"}
					{insert name=keys_to_array assign=varr arr=$varr2}
				    {else}
					{insert name=keys_to_array assign=varr arr=$varr2}
				    {/if}
				    {else}
					{insert name=keys_to_array assign=varr arr=$varr2}
				    {/if}
					<table cellpadding="0" cellspacing="0" width="100%" border="0">
					    <tr>
						<td align="left" class="pl10 p5 bodylabel" colspan="{if $smarty.get.view eq ""}3{else}5{/if}">
						    <table cellpadding="5" cellspacing="0" width="100%">
							<tr>
							    <td align="left">
								{if $smarty.get.sort eq "" and $smarty.get.s ne "1"}{$b9v1}{else}<a href="{$base_url}/user/{$minfo[0].username}&view={$urlq}">{$b9v1}</a>{/if} | 
								{if $smarty.get.sort eq "mv"}{$mostviewed}{else}<a href="{$base_url}/user/{$minfo[0].username}&view={$urlq}&sort=mv">{$mostviewed}</a>{/if} | 
								{if $smarty.get.sort eq "md"}{$mostcomm}{else}<a href="{$base_url}/user/{$minfo[0].username}&view={$urlq}&sort=md">{$mostcomm}</a>{/if}
								{if $smarty.get.s eq "1"} | {$dm_search1}{/if}
							    </td>
							    <td align="right">
							    <form name="fsform" method="post" action="{$base_url}/user/{$minfo[0].username}&view={$urlq}&s=1">
								<input type="text" name="searchquery">&nbsp;<input type="submit" name="search" value="{$title_search}">
							    </form>
							    </td>
							</tr>
						    </table>
						</td>
					    </tr>
					    <tr>
					    {if $smarty.get.view eq ""}
					    {section name=v loop=$varr start=0 max=$maxloop}
						{include file="_inc/chan/_inc/inc_userpagefiles.tpl"}
					    {/section}
					    {else}
					    {if $varr[0] eq "" or ( $smarty.get.s eq "1" and $smarty.post.searchquery eq "" )}
						{assign var=merr value="1"}
						<td class="bodylabel">{if $smarty.get.view eq "videos"}{$userpage_novres}{elseif $smarty.get.view eq "images"}{$userpage_noires}{elseif $smarty.get.view eq "audios"}{$userpage_noares}{/if}&nbsp;&#39;{$smarty.post.searchquery}&#39;</td>
					    {else}
					    {section name=v loop=$varr}
						{include file="_inc/chan/_inc/inc_userpagefilesview.tpl"}
					    {/section}
					    {/if}
					    {/if}
					    </tr>
					    {if $smarty.get.view ne "" and $link ne "" and $tpage gt 1 and $merr ne 1}
                                	    <tr>
                                    		<td colspan="5" align="right" class="bold nopad">
                                    		    {$link}
						</td>
					    </tr>
					    {/if}
					    {if $vdocount gt $maxloop and $smarty.get.view eq ""}
                                	    <tr>
                                    		<td colspan="3" align="right" class="bold nopad">
                                    		    {if $enable_videos eq "1"}{assign var=viewlnk value="videos"}
                                                    {elseif $enable_videos eq "0" and $enable_images eq "0"}{assign var=viewlnk value="audios"}
                                                    {elseif $enable_videos eq "0" and $enable_images eq "1"}{assign var=viewlnk value="images"}
                                                    {/if}
                                    		    <a href="{$base_url}/user/{$minfo[0].username}&view={$viewlnk}">{$pr_chinfob31|lower}</a>
                                    		</td>
                                	    </tr>
                                	    {/if}
					</table>
				</td>
			    </tr>
			{/if}
			</table>
		    </div>
