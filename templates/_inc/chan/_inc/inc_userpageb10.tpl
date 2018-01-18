{if ($enable_videos eq "0" and $enable_images eq "1") or $smarty.get.sort eq "images"}
    {insert name=fav_count assign=favcount uid=$minfo[0].uid}
    {assign var=b9v1 value=$uch_thl7}
    {assign var=urlq value="favorites"}
    {assign var=b9v2 value=$userpage_subfav}
    {assign var=b9v3 value=$userpage_nosub3}
    {assign var=b9v4 value="files_image"}
    {assign var=b9v5 value="image"}
    {assign var=b9v6 value="i"}
{elseif ($enable_images eq "0" and $enable_videos eq "0") or $smarty.get.sort eq "audios"}
    {insert name=fav_count assign=favcount uid=$minfo[0].uid}
    {assign var=b9v1 value=$uch_thl7}
    {assign var=urlq value="favorites"}
    {assign var=b9v2 value=$userpage_subfav}
    {assign var=b9v3 value=$userpage_nosub3}
    {assign var=b9v4 value="files_audio"}
    {assign var=b9v5 value="audio"}
    {assign var=b9v6 value="a"}
{else}
    {insert name=fav_count assign=favcount uid=$minfo[0].uid}
    {assign var=b9v1 value=$uch_thl7}
    {assign var=urlq value="favorites"}
    {assign var=b9v2 value=$userpage_subfav}
    {assign var=b9v3 value=$userpage_nosub3}
    {assign var=b9v4 value="files_video"}
    {assign var=b9v5 value="video"}
    {assign var=b9v6 value="v"}
{/if}
    {assign var=b9v2u value=$userpage_unsubfav}
			{if $smarty.get.view ne ""}
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td colspan="2">
				    <form id="chsubsform"></form>
				    <div id="subsrespdiv3" style="display: none;" class=""></div>
				    <div id="loading_sub3" style="display: none;"><table cellpadding=5 cellspacing=0 border=0><tr><td>{$adm_setgen79}</td></tr></table></div>
				</td>
			    </tr>
			</table>
			{/if}
		    <div id="b10">
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td align="left" class="thead2">
                                    {if $enable_videos eq "1"}{assign var=viewlnk value="videos"}
                                    {elseif $enable_videos eq "0" and $enable_images eq "0"}{assign var=viewlnk value="audios"}
                                    {elseif $enable_videos eq "0" and $enable_images eq "1"}{assign var=viewlnk value="images"}
                                    {/if}
				
				    {$b9v1}<a href="{$base_url}/user/{$minfo[0].username}&view={$urlq}&sort={$viewlnk}">({$favcount|viewnr})</a>
				</td>
				{if $minfo[0].uid ne $smarty.session.UID and $smarty.session.UID ne "" and $favcount gt 0}
                                <td align="right" class="thead2">
                                    {if $smarty.session.UID ne "" and ($is_bl ne "yes" or $bl_sub eq "no")}
                                        <div id="slinkdiv3" style="{if $is_sub_fav eq "no"}display: block;{else}display: none;{/if}">
                                            <a href="javascript:void(0)" onclick="ShowContent('subsrespdiv3'); thisDiv('yes'); ldiv('subsrespdiv3'); set_subscription_fav('subs', '{$minfo[0].username}', '{$minfo[0].uid}', 'fav');">{$b9v2}</a>&nbsp;
                                        </div>
                                        <div id="uslinkdiv3" style="{if $is_sub_fav eq "yes"}display: block;{else}display: none;{/if}">
                                            <a id="unsubscribe" href="javascript:void(0)" onclick="ShowContent('subsrespdiv3'); ldiv('subsrespdiv3'); set_subscription_fav('unsubs', '{$minfo[0].username}', '{$minfo[0].uid}', 'fav');">{$b9v2u}</a>&nbsp;
                                        </div>
                                    {/if}
                                </td>
                                {/if}
			    <tr>
			</table>
			{if $smarty.get.view eq ""}
			<div id="subsrespdiv3" style="display: none;" class="p5"></div>
			<div id="loading_sub3" style="display: none;"><table cellpadding=5 cellspacing=0 border=0><tr><td>{$adm_setgen79}</td></tr></table></div>
			{/if}
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			{if $favcount eq 0}
			    <tr><td class="tbody2" align="center"><table cellpadding="0" cellspacing="0"><tr><td class="p5 bodylabel">{$b9v3}</span></td></tr></table></td></tr>
			{else}
			    <tr>
				<td class="tbody2" colspan="2">
				    {if $tinfo[0].th_fav_view eq "grid"}{assign var=maxloop value=9}{else}{assign var=maxloop value=3}{/if}
				    {if $smarty.get.view eq ""}
				    {if $minfo[0].ch_vfavs ne "" and $enable_videos eq "1"}
					{insert name=keys_to_array assign=varr arr=$minfo[0].ch_vfavs}
				    {elseif $minfo[0].ch_vfavs eq "" and $enable_videos eq "1"}
					{insert name=keys_to_array assign=varr arr=$varr2fv}
				    {elseif $minfo[0].ch_ifavs ne "" and $enable_images eq "1"}
					{insert name=keys_to_array assign=varr arr=$minfo[0].ch_ifavs}
				    {elseif $minfo[0].ch_ifavs eq "" and $enable_images eq "1"}
					{insert name=keys_to_array assign=varr arr=$varr2fv}
				    {elseif $minfo[0].ch_afavs ne "" and $enable_audio eq "1"}
					{insert name=keys_to_array assign=varr arr=$minfo[0].ch_afavs}
				    {elseif $minfo[0].ch_afavs eq "" and $enable_audio eq "1"}
					{insert name=keys_to_array assign=varr arr=$varr2fv}
				    {else}
					{insert name=keys_to_array assign=varr arr=$varr2fv}
				    {/if}
				    {else}
					{insert name=keys_to_array assign=varr arr=$varr2fv}
				    {/if}
					<table cellpadding="0" cellspacing="0" width="100%" border="0">
					
					    <tr>
						<td align="left" class="pl10 p5 bodylabel" colspan="3">
						    <table cellpadding="1" cellspacing="0" width="100%">
							<tr>
							    <td align="left">
								{if $enable_videos eq "1"}{if ($smarty.get.view eq $urlq and ($smarty.get.view eq "videos" or $smarty.get.sort eq "videos")) or $smarty.get.sort eq ""}{$userfav_headingv}{else}<a href="{$base_url}/user/{$minfo[0].username}&view={$urlq}&sort=videos">{$userfav_headingv}</a>{/if}{if $enable_images eq "1" or $enable_audio eq "1"} | {/if}{/if}
								{if $enable_images eq "1"}{if ($smarty.get.view eq $urlq and ($smarty.get.view eq "images" or $smarty.get.sort eq "images")) or ($smarty.get.sort eq "" and $enable_videos eq "0")}{$userfav_headingi}{else}<a href="{$base_url}/user/{$minfo[0].username}&view={$urlq}&sort=images">{$userfav_headingi}</a>{/if}{if $enable_audio eq "1"} | {/if}{/if}
								{if $enable_audio eq "1"}{if ($smarty.get.view eq $urlq and ($smarty.get.view eq "audios" or $smarty.get.sort eq "audios")) or ($smarty.get.sort eq "" and $enable_images eq "0" and $enable_videos eq "0")}{$userfav_headinga}{else}<a href="{$base_url}/user/{$minfo[0].username}&view={$urlq}&sort=audios">{$userfav_headinga}</a>{/if}{/if}
							    </td>
							</tr>
						    </table>
						</td>
					    </tr>
					    <tr>
					    {if $smarty.get.view eq "" and $varr2fv ne ""}
					    {section name=v loop=$varr start=0 max=$maxloop}
						{include file="_inc/chan/_inc/inc_userpagefiles.tpl"}
					    {/section}
					    {else}
					    {if ( $vfav_total eq 0 and ( $smarty.get.sort eq "videos" or $smarty.get.sort eq "" )) or ( $ifav_total eq 0 and ( $smarty.get.sort eq "images" or $smarty.get.sort eq "" )) or ( $afav_total eq 0 and ( $smarty.get.sort eq "audios" or $smarty.get.sort eq "" )) }
					    <tr>
						<td class="tbody2" align="center"><table cellpadding="0" cellspacing="0"><tr><td class="p5 bodylabel">{$b9v3}</span></td></tr></table></td>
					    </tr>
					    {else}
					    {section name=v loop=$varr}
						{include file="_inc/chan/_inc/inc_userpagefilesview.tpl"}
					    {/section}
					    {/if}
					    {/if}
					    </tr>
					    {if $favcount gt $maxloop and $smarty.get.view eq ""}
                                	    <tr>
                                    		<td colspan="3" align="right" class="bold nopad">
                                    		    {if $enable_videos eq "1"}{assign var=viewlnk value="videos"}
                                    		    {elseif $enable_videos eq "0" and $enable_images eq "0"}{assign var=viewlnk value="audios"}
                                    		    {elseif $enable_videos eq "0" and $enable_images eq "1"}{assign var=viewlnk value="images"}
                                    		    {/if}
                                    		    <a href="{$base_url}/user/{$minfo[0].username}&view={$urlq}&sort={$viewlnk}">{$pr_chinfob31|lower}</a>
                                    		</td>
                                	    </tr>
                                	    {/if}
                                	    {if $smarty.get.view ne "" and $link ne "" and $tpage gt 1}
                                            <tr>
                                                <td colspan="5" align="right" class="bold nopad">
                                                    {$link}
                                                </td>
                                            </tr>
                                            {/if}
					</table>
				</td>
			    </tr>
			{/if}
			</table>
		    </div>
