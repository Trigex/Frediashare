				<div id="thecomments" style="display: block;">
				    {section name=c loop=$comm}
					<table cellpadding=0 cellspacing=0 width="100%">
					    <tr>
						<td>
						<div id="tcomm{$comm[c].comid}" style="display: block;">
						    <table width="100%" cellpadding=5 cellspacing=0 border=0>
							<tr>
							    <td valign="top" class="dottc">
								<table cellpadding=0 cellspacing=0 border=0 width="100%">
								    <tr>
									<td>
									{if $btn eq "baudio"}
									    {insert name=time_range assign=ctime field=addtime IDFR=comid id=$comm[c].comid tbl=comm_audio}
									{elseif $btn eq "bimage"}
									    {insert name=time_range assign=ctime field=addtime IDFR=comid id=$comm[c].comid tbl=comm_img}
									{elseif $btn eq "bvideo"}
									    {insert name=time_range assign=ctime field=addtime IDFR=comid id=$comm[c].comid tbl=comm_vid}
									{elseif $sbtn eq "profile" or $sbtn eq "userpage"}
									    {insert name=time_range assign=ctime field=addtime IDFR=comid id=$comm[c].comid tbl=comm_profile}
									{/if}
								    {if $sbtn ne "profile" and $sbtn ne "userpage"}
									{if $same_title_uploads eq "0"}
									{if $btn eq "baudio"}
									    {insert name=titlea_to_key assign=key vtitle=$smarty.request.id}
									{elseif $btn eq "bimage"}
									    {insert name=titlei_to_key assign=key vtitle=$smarty.request.id}
									{elseif $btn eq "bvideo"}
									    {insert name=titlev_to_key assign=key vtitle=$smarty.request.id}
									{/if}
									{else}{assign var=key value=$smarty.request.id}{/if}
								    {/if}
									    <table cellpadding=0 cellspacing=0 border=0 width="100%">
										<tr>
										    <td valign="bottom" align="left">
											{if $sbtn eq "userpage" and $comm_pos eq "right"}
											{assign var=userimgw value=60}{assign var=userimgh value=60}
											    <table cellpadding="0" cellspacing="0">
												<tr>
												    <td valign="top">
													{insert name=getfield assign=photo field=photo table=members qfield=username qvalue=$comm[c].username}
													<a href="{$base_url}/profile/{if $special_characters eq "0"}{$comm[c].username}{else}{$comm[c].uid}{/if}">
													    <img src="{$usrimg_url}/{$photo}" width="{$userimgw}" height="{$userimgh}" alt="{$comm[c].username}" title="{$comm[c].username}" class="pborder">
													</a>
												    </td>
												    <td valign="top" class="pl10">
													<div>
													    <a href="{$base_url}/profile/{if $special_characters eq "0"}{$comm[c].username}{else}{$comm[c].uid}{/if}"><span class="bold">{$comm[c].username}</span></a>
													    <span class="label">{$myfiles_delim}{$ctime}<span class="gr">{$fileaddedago}</span> {if $comm[c].approved eq "0"}&nbsp;<span class="italic" style="font-size: 11px;">({$filepending})</span>{/if}
													</div>
													<div class="p5">
													    <span class="bodylabel"><span class="comments">{$comm[c].comment|nl2br|spchar}</span></span>
													</div>
												    </td>
												</tr>
											    </table>
											{else}
											    <a href="{$base_url}/profile/{if $special_characters eq "0"}{$comm[c].username}{else}{$comm[c].uid}{/if}">{$comm[c].username}</a>
											{/if}
											{if ($comm_pos ne "right" and ( $sbtn eq "profile" or $sbtn eq "userpage" )) or ( $btn ne "bhome" or $sbtn eq "profile")}{if $sbtn eq "userpage" and $comm_pos ne "right"}<span class="label">{/if}{$myfiles_delim}{$ctime}<span class="gr">{$fileaddedago}</span>{if $sbtn eq "userpage" and $comm_pos ne "right"}</span>{/if} {if $comm[c].approved eq "0"}&nbsp;<span class="italic" style="font-size: 11px;">({$filepending})</span>{/if}{/if}
										    </td>
										    <td valign="bottom" class="pl5" align="right">
										    {if $smarty.session.UID ne ""}
										    {if $sbtn ne "profile" and $sbtn ne "userpage"}
											<div id="comdiv{$comm[c].comid}">
											    <form id="delcomment{$comm[c].comid}">
										    {elseif $sbtn eq "profile" or $sbtn eq "userpage"}
											<div id="comdivp">
											    <form id="delcommentp{$comm[c].comid}">
										    {/if}
											    {if $btn eq "baudio"}
												{if $smarty.session.UID eq $vuid or $comm[c].uid eq $smarty.session.UID}
												    <a href="javascript:void(0)" title="{$inbox_itblact1}" onClick="if(confirm('{$view_comm_del}')) {ldelim} thisDiv('no'); delcom_audio({$comm[c].comid}); HideContent('tcomm{$comm[c].comid}'); {rdelim}">{$inbox_itblact1}</a>
												{/if}
											    {elseif $btn eq "bimage"}
												{if $smarty.session.UID eq $vuid or $comm[c].uid eq $smarty.session.UID}
												    <a href="javascript:void(0)" title="{$inbox_itblact1}" onClick="if(confirm('{$view_comm_del}')) {ldelim} thisDiv('no'); delcom_image({$comm[c].comid}); HideContent('tcomm{$comm[c].comid}'); {rdelim}">{$inbox_itblact1}</a>
												{/if}
											    {elseif $btn eq "bvideo"}
											    	{if $smarty.session.UID eq $vuid or $comm[c].uid eq $smarty.session.UID}
											    	    <a href="javascript:void(0)" title="{$inbox_itblact1}" onClick="if(confirm('{$view_comm_del}')) {ldelim} thisDiv('no'); delcom({$comm[c].comid}); HideContent('tcomm{$comm[c].comid}'); {rdelim}">{$inbox_itblact1}</a>
											    	{/if}
											    {elseif $sbtn eq "profile" or $sbtn eq "userpage"}
												{if $comm[c].cuid eq $smarty.session.UID or $comm[c].uid eq $smarty.session.UID}
												    <a href="javascript:void(0)" title="{$inbox_itblact1}" onClick="if(confirm('{$view_comm_del}')) {ldelim} thisDiv('no'); delcomp('{$comm[c].comid}'); HideContent('tcomm{$comm[c].comid}'); {rdelim}">{$inbox_itblact1}</a>
												{/if}
												<input type="hidden" name="comidc" value="{$comm[c].comid}">
												<input type="hidden" name="comid" value="{$comm[c].comid}">
											    {/if}
											    {if $sbtn ne "profile" and $sbtn ne "userpage"}
												<input type="hidden" name="comid" value="{$comm[c].comid}">
												<input type="hidden" name="cuid" value="{$comm[c].uid}">
												<input type="hidden" name="fkey" value="{$fkey}">
											    {/if}
											    </form>
											</div>
										    {/if}
										    </td>
										    
										{if $comment_rating eq "1" and $file_comm_rate eq "yes"}
										{if $btn eq "baudio"}{insert name=ctotal assign=ctotal comid=$comm[c].comid vid=$vidid type=audio}
										    <td valign="bottom" align="right" width="16" class="pl5"><img src="{$img_url}/symbols/thumbsdown.gif" width="16" height="19" class="cursor" alt="{$poor_comment}" title="{$poor_comment}" {if $smarty.session.UID eq ""}onclick="javascript:alert('{$msg_usercomm}')"{else}onclick="thisDiv('no'); aratedown('{$comm[c].comid}');"{/if}></td>
										    <td valign="bottom" align="right" width="16" class="pl5"><img src="{$img_url}/symbols/thumbsup.gif" width="16" height="19" class="cursor" alt="{$good_comment}" title="{$good_comment}" {if $smarty.session.UID eq ""}onclick="javascript:alert('{$msg_usercomm}')"{else}onclick="thisDiv('no'); arateup('{$comm[c].comid}');"{/if}></td>
										{elseif $btn eq "bimage"}{insert name=ctotal assign=ctotal comid=$comm[c].comid vid=$vidid type=image}
										    <td valign="bottom" align="right" width="16" class="pl5"><img src="{$img_url}/symbols/thumbsdown.gif" width="16" height="19" class="cursor" alt="{$poor_comment}" title="{$poor_comment}" {if $smarty.session.UID eq ""}onclick="javascript:alert('{$msg_usercomm}')"{else}onclick="thisDiv('no'); iratedown('{$comm[c].comid}');"{/if}></td>
										    <td valign="bottom" align="right" width="16" class="pl5"><img src="{$img_url}/symbols/thumbsup.gif" width="16" height="19" class="cursor" alt="{$good_comment}" title="{$good_comment}" {if $smarty.session.UID eq ""}onclick="javascript:alert('{$msg_usercomm}')"{else}onclick="thisDiv('no'); irateup('{$comm[c].comid}');"{/if}></td>
										{elseif $btn eq "bvideo"}{insert name=ctotal assign=ctotal comid=$comm[c].comid vid=$vidid type=video}
										    <td valign="bottom" align="right" width="16" class="pl5"><img src="{$img_url}/symbols/thumbsdown.gif" width="16" height="19" class="cursor" alt="{$poor_comment}" title="{$poor_comment}" {if $smarty.session.UID eq ""}onclick="javascript:alert('{$msg_usercomm}')"{else}onclick="thisDiv('no'); vratedown('{$comm[c].comid}');"{/if}></td>
										    <td valign="bottom" align="right" width="16" class="pl5"><img src="{$img_url}/symbols/thumbsup.gif" width="16" height="19" class="cursor" alt="{$good_comment}" title="{$good_comment}" {if $smarty.session.UID eq ""}onclick="javascript:alert('{$msg_usercomm}')"{else}onclick="thisDiv('no'); vrateup('{$comm[c].comid}');"{/if}></td>
										{elseif $btn eq "bhome"}{assign var=vidid value="0"}{insert name=ctotal assign=ctotal comid=$comm[c].comid vid=$vidid type=profile}
										    <td valign="bottom" align="right" width="16" class="pl5"><img src="{$img_url}/symbols/thumbsdown.gif" width="16" height="19" class="cursor" alt="{$poor_comment}" title="{$poor_comment}" {if $smarty.session.UID eq ""}onclick="javascript:alert('{$msg_usercomm}')"{else}onclick="thisDiv('no'); pratedown('{$comm[c].comid}');"{/if}></td>
										    <td valign="bottom" align="right" width="16" class="pl5"><img src="{$img_url}/symbols/thumbsup.gif" width="16" height="19" class="cursor" alt="{$good_comment}" title="{$good_comment}" {if $smarty.session.UID eq ""}onclick="javascript:alert('{$msg_usercomm}')"{else}onclick="thisDiv('no'); prateup('{$comm[c].comid}');"{/if}></td>
										{/if}
										    <td valign="bottom" align="right" width="26" class="pl5">{$udetails[0].uid}
											<form id="commratediv{$comm[c].comid}"><input type="hidden" name="comid" value="{$comm[c].comid}"><input type="hidden" name="vidid" value="{$vidid}"></form>
											<div id="thetotal{$comm[c].comid}" {if $sbtn eq "userpage"}class="green"{/if}>{if $sbtn eq "userpage"}<span class="bodylabel">{/if}({if $ctotal eq "" or $ctotal eq "0"}0{else}{if $ctotal gt "0"}<span class="{if $sbtn ne "userpage"}green{/if}">+{elseif $ctotal lt "0"}<span class="{if $sbtn ne "userpage"}red{/if}">{/if}{$ctotal}</span>{/if})</span></div>
										    </td>
										{/if}
										</tr>
									    </table>
									</td>
								    </tr>
								    {if ($comm_pos ne "right" and ( $sbtn eq "profile" or $sbtn eq "userpage" )) or ( $btn ne "bhome" or $sbtn eq "profile")}
								    <tr>
									<td class="pt5" align="left">
									    {if $sbtn eq "userpage"}<span class="bodylabel">{/if}<span class="comments">{$comm[c].comment|nl2br|spchar}</span>{if $sbtn eq "userpage"}</span>{/if}
									</td>
								    </tr>
								    {/if}
								    {if $sbtn eq "profile" or $sbtn eq "userpage"}
								    <tr>
									<td class="pt5"><div id="commdelp{$comm[c].comid}"></div></td>
								    </tr>
								    {/if}
								</table>
							    </td>
							</tr>
						    </table>
						</div>
						</td>
					    </tr>
					</table>
				    {/section}
				    <table cellpadding="5" cellspacing="0" width="100%" border=0>
					<tr>
					    <td align="left" valign="top" width=><div id="pnum" {if $smarty.session.pagenumbering eq "on" or $smarty.session.pagenumbering eq ""}style="display: block;"{else}style="display: none;"{/if}>{$link}</div></td>
					    {if $comm[0].comid ne ""}
					    <td align="right" valign="top">
						<div class="p5">{$nextprevlinks}</div>
						<div id="phide" {if $smarty.session.pagenumbering eq "on" or $smarty.session.pagenumbering eq ""}style="display: block;"{else}style="display: none;"{/if}><a href="javascript:void(0)" onclick="thisDiv('no'); setpagenumbering('off'); HideContent('pnum'); ShowContent('pshow'); HideContent('phide');">{$comm_hide1}</a></div>
						<div id="pshow" {if $smarty.session.pagenumbering eq "off"}style="display: block;"{else}style="display: none;"{/if}><a href="javascript:void(0)" onclick="thisDiv('no'); setpagenumbering('on'); ShowContent('pnum'); ShowContent('phide'); HideContent('pshow');">{$comm_hide2}</a></div>
					    </td>
					    {/if}
					</tr>
				    </table>
				</div>
