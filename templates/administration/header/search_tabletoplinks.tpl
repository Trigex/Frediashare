
				    <table cellpadding="2" cellspacing="0" border=0 align="right" {if $sbtn eq "userpage"}class="secl"{/if}>
					<tr>
					{if $smarty.session.AUID ne ""}
					    <td valign="top">
						<ul id="{if $site_theme eq "metube"}Menu_tube_admin{else}Menu_admin{/if}" class="{if $site_theme eq "metube"}MM_tube{else}MM{/if}" style="padding: 0px; margin: 0px; display: block;">
						    <li><a href="{$base_url}/profile/{$smarty.session.USERNAME}" onclick="HideContent('hidem1');">&nbsp;<span id="Menu1top">{$smarty.session.AUID}</span>&nbsp;&nbsp;<img src="{$img_url}/arrowdown1.gif" width="9" height="6"></a>
							<ul id="hidem1">
							    <li><a href="{$admin_url}/audios/all/all_time" onclick="HideContent('hidem1');">&nbsp;&nbsp;{$navaudio}</a>
								<ul>
								    <li class="pl5"><a href="{$admin_url}/audios/all/all_time" onclick="HideContent('hidem1');">{$snav_allaudios}</a></li>
								    <li><a href="{$admin_url}/requests/audio/featured/active" onclick="HideContent('hidem1');">{$snav_featreq}</a></li>
								    <li><a href="{$admin_url}/requests/audio/inappropriate/active" onclick="HideContent('hidem1');">{$snav_inappreq}</a></li>
								</ul>
							    </li>
							    <li><a href="{$admin_url}/images/all/all_time" onclick="HideContent('hidem1');">&nbsp;&nbsp;{$navimage}</a>
								<ul>
								    <li><a href="{$admin_url}/images/all/all_time" onclick="HideContent('hidem1');">{$snav_allimages}</a></li>
								    <li><a href="{$admin_url}/requests/image/featured/active" onclick="HideContent('hidem1');">{$snav_featreq}</a></li>
								    <li><a href="{$admin_url}/requests/image/inappropriate/active" onclick="HideContent('hidem1');">{$snav_inappreq}</a></li>
								</ul>
							    </li>
							    <li><a href="{$admin_url}/videos/all/all_time" onclick="HideContent('hidem1');">&nbsp;&nbsp;{$navvideo}</a>
								<ul>
								    <li><a href="{$admin_url}/videos/all/all_time" onclick="HideContent('hidem1');">{$snav_allvideos}</a></li>
								    <li><a href="{$admin_url}/requests/video/featured/active" onclick="HideContent('hidem1');">{$snav_featreq}</a></li>
								    <li><a href="{$admin_url}/requests/video/inappropriate/active" onclick="HideContent('hidem1');">{$snav_inappreq}</a></li>
								</ul>
							    </li>
							    <li><a href="{$admin_url}/player_main" onclick="HideContent('hidem1');">&nbsp;&nbsp;{$navplayers}</a>
								<ul>
								    <li><a href="{$admin_url}/player_main_audio" onclick="HideContent('hidem1');">{$snav_aplayer}</a></li>
								    <li><a href="{$admin_url}/watermark_main_audio" onclick="HideContent('hidem1');">{$snav_awm}</a></li>
								    <li><a href="{$admin_url}/textads" onclick="HideContent('hidem1');">{$adm_nfptxt5}</a></li>
								    <li><a href="{$admin_url}/videoads" onclick="HideContent('hidem1');">{$snav_vads}</a></li>
								    <li><a href="{$admin_url}/player_main" onclick="HideContent('hidem1');">{$snav_vplayer}</a></li>
								    <li><a href="{$admin_url}/watermark_main" onclick="HideContent('hidem1');">{$snav_vwm}</a></li>
								</ul>
							    </li>
							    <li><a href="{$admin_url}/categories" onclick="HideContent('hidem1');">&nbsp;&nbsp;{$navcat}</a></li>
							    <li><a href="{$admin_url}/members/registered" onclick="HideContent('hidem1');">&nbsp;&nbsp;{$navmem}</a>
								<ul>
								    <li><a href="{$admin_url}/members/email/all" onclick="HideContent('hidem1');">{$snav_mememailall}</a></li>
								    <li><a href="{$admin_url}/members/message/all" onclick="HideContent('hidem1');">{$snav_memmsgall}</a></li>
								    <li><a href="{$admin_url}/members/banned" onclick="HideContent('hidem1');">{$snav_membanned}</a></li>
								    <li><a href="{$admin_url}/members/registered" onclick="HideContent('hidem1');">{$snav_memregged}</a></li>
								    <li><a href="{$admin_url}/members/requests" onclick="HideContent('hidem1');">{$adm_memchreq1}</a></li>
								</ul>
							    </li>
							    <li><a href="{$admin_url}/settings/general" onclick="HideContent('hidem1');">&nbsp;&nbsp;{$navsettings}</a>
								<ul>
								    <li><a href="{$admin_url}/settings/ads" onclick="HideContent('hidem1');">{$snav_setad}</a></li>
								    <li><a href="{$admin_url}/settings/templates" onclick="HideContent('hidem1');">{$snav_settpl}</a></li>
								    <li><a href="{$admin_url}/settings/general" onclick="HideContent('hidem1');">{$snav_setgen}</a></li>
								    <li><a href="{$admin_url}/settings/guest" onclick="HideContent('hidem1');">{$snav_setguest}</a></li>
								    <li><a href="{$admin_url}/settings/languages" onclick="HideContent('hidem1');">{$snav_setlang}</a></li>
								    <li><a href="{$admin_url}/settings/paging" onclick="HideContent('hidem1');">{$snav_setpag}</a></li>
								    <li><a href="{$admin_url}/settings/system" onclick="HideContent('hidem1');">{$snav_setsys}</a></li>
								</ul>
							    </li>
							</ul>
						    </li>
						</ul>
					    </td>
					{/if}
					    <td valign="top">{if $smarty.session.AUID ne ""}<span class="black">&nbsp;|&nbsp;&nbsp;</span><a href="{$admin_url}/logout">{$snavlogout}</a>{else}<a href="{$admin_url}/login">{$snavlogin}</a>{/if}</td>
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
    								<li><a href="javascript:void(0);" onclick="HideContent('hidem2'); document.getElementById('hiddenlang').value = '{$langsel[l].name}'; langform.submit(); return false;"><img src="{$base_url}/media/files_flags/{$ccode|lower}.gif" width="16" height="11" alt="{$langsel[i].cflag}">&nbsp;&nbsp;{$langsel[l].name}</a></li>
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
