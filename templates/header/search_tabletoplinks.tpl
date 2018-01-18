
				    <table cellpadding="2" cellspacing="0" border=0 align="right" {if $sbtn eq "userpage"}class="secl"{/if}>
					<tr>
				    {insert name=pmsg_count_new assign=total_msg}
				    {insert name=pmsg_count_all assign=total_msg_all}
				    {php}global $conn; global $smarty; $qu1="select * from static_files where ff='help'"; $rs1=$conn->execute($qu1); $static=$rs1->getrows(); $smarty->assign('shelp',$static); {/php}
					    {if $smarty.session.UID ne ""}
					    <td valign="top"><span style="font-size: 11px;" id="newmsgnr">({if $total_msg gt 0}{$total_msg|viewnr}{else}{$total_msg_all|viewnr}{/if})</span></td>
					    <td valign="top"><a href="{$base_url}/inbox"><img id="newmsgicon" style="margin-top: -2px;" {if $total_msg gt 0}src="{$img_url}/message_new.gif"{else}src="{$img_url}/message.gif"{/if} alt="{$msginbox}" title="{$msginbox}"></a></td>
					    <td valign="top">
						<ul id="{if $site_theme eq "metube"}Menu_tube{else}Menu1{/if}" class="{if $site_theme eq "metube"}MM_tube{else}MM{/if}" style="padding: 0px; margin: 0px; display: block;">
						    <li><a href="{$base_url}/profile/{$smarty.session.USERNAME}" onclick="HideContent('hidem1');">&nbsp;<span id="Menu1top">{$smarty.session.USERNAME}</span>&nbsp;<img src="{$img_url}/arrowdown1.gif" width="9" height="6"></a>
							<ul id="hidem1">
							    <li><a href="{$base_url}/my_profile" onclick="HideContent('hidem1');">{$myprofile}</a></li>
    							    {if $enable_audio eq "1"}<li><a href="{$base_url}/my_audios" onclick="HideContent('hidem1');">{$myaudio}</a></li>{/if}
    							    {if $enable_images eq "1"}<li><a href="{$base_url}/my_images" onclick="HideContent('hidem1');">{$myimage}</a></li>{/if}
    							    {if $enable_videos eq "1"}<li><a href="{$base_url}/my_videos" onclick="HideContent('hidem1');">{$myvideo}</a></li>{/if}
    							    {if $enable_inbox eq "1"}<li><a href="{$base_url}/inbox" onclick="HideContent('hidem1');">{$msginbox}</a></li>{/if}
    							    {if $enable_channels eq "1"}<li><a href="{$base_url}/my_subscriptions" onclick="HideContent('hidem1');">{$uch_thl11}</a></li>{/if}
							</ul>
						    </li>
						</ul>
					    </td>
					    {/if}
					    <td valign="top">{if $smarty.session.UID ne ""}<span class="black">&nbsp;|&nbsp;&nbsp;</span>{/if}{if $smarty.session.UID ne ""}<a href="{$base_url}/main">{$hp_menuhome}</a>{else}<a href="{$base_url}/signup">{$uch_shtxt18}</a>{/if}<span class="black"> | </span><a href="{$base_url}/my_quicklist">{$snav_mtxt2} (<span id="qlistadd">{$qtotal|viewnr}</span>)</a>{if $shelp[0].active eq "1"}<span class="black"> | </span><a href="{$base_url}/t/{$shelp[0].file}">{$snavhelp}</a>{/if}<span class="black"> | </span>{if $smarty.session.UID ne ""}<a href="{$base_url}/logout">{$snavlogout}</a>{else}<a href="{$base_url}/login">{$snavlogin}</a>{/if}</td>
					    {if $lang_box eq "1"}
					    <td class="" style="padding: 3px;" valign="top">
					    <form id="langform" name="langform" method="post" action="">
					    {insert name=getfield assign=cflag2 field=cflag table=languages qfield=file qvalue=$smarty.session.lang}
					    {insert name=getarrayccode assign=ccode country=$cflag2}
					    <div class="">
						<ul id="{if $site_theme eq "metube"}Menu_tube6{else}Menu2{/if}" class="{if $site_theme eq "metube"}MM_tube{else}MM{/if}">
						    <li><a href="javascript:void(0)"><img src="{$base_url}/media/files_flags/{$ccode|lower}.gif" width="16" height="11" alt="{$cflag2}" title="{$cflag2}"></a>
							<ul id="hidem2">
							    {section name=l loop=$langsel}
							    {insert name=getarrayccode assign=ccode country=$langsel[l].cflag}
							    {insert name=selfURL assign=selfURL}
    								<li><a href="javascript:void(0);" onclick="HideContent('hidem2'); document.getElementById('hiddenlang').value = '{$langsel[l].name}'; langform.submit(); return false;"><img src="{$base_url}/media/files_flags/{$ccode|lower}.gif" width="16" height="11" alt="{$langsel[i].cflag}"> {$langsel[l].name}</a></li>
    							    {/section}
							</ul>
						    </li>
						</ul>
						<input type="hidden" id="hiddenlang" name="hiddenlang" value="">
					    </div>
					    </form>
					    </td>
					    {/if}
					</tr>
				    </table>
