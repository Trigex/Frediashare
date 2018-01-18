				<form id="inboxmsg" name="inboxmsg" method="post" action="">
				{if $section eq "audio"}{assign var=tbl value=files_audio}{elseif $section eq "image"}{assign var=tbl value=files_image}{elseif $section eq "video"}{assign var=tbl value=files_video}{/if}
				{if $section ne "profile" and $smarty.request.id ne ""}
				    {insert name=getfield assign=vidid field=vid table=$tbl qfield=vkey qvalue=$smarty.request.id}
				    {insert name=getfield assign=vuid field=uid table=$tbl qfield=vkey qvalue=$smarty.request.id}
				    {insert name=getfield assign=vtitle field=vtitle table=$tbl qfield=vkey qvalue=$smarty.request.id}
				    {insert name=getfield assign=vdescr field=vdescr table=$tbl qfield=vkey qvalue=$smarty.request.id}
				    {insert name=getfield assign=vduration field=vduration table=$tbl qfield=vkey qvalue=$smarty.request.id}
				    {insert name=getfield assign=views field=views table=$tbl qfield=vkey qvalue=$smarty.request.id}
				    {insert name=getfield assign=vflvname field=vflvname table=$tbl qfield=vkey qvalue=$smarty.request.id}
				    <table cellpadding=5 cellspacing=1 width="100%" border=0>
					<tr>
					    <td class="nopad" align="left">
					    <table cellpadding=2 cellspacing=0 border=0 width="100%">
						<tr>
						{if $section eq "video"}
                                		    {insert name=titlev assign=title vkey=$smarty.request.id}
                                		    {insert name=vid_to_rndv assign=rnd vid=$vidid}
                                		    {insert name=vid_to_rndvv assign=rndbn vid=$vidid}
                            			{elseif $section eq "image"}
                                		    {insert name=titlei assign=title vkey=$smarty.request.id}
                            			{elseif $section eq "audio"}
                                		    {insert name=titlea assign=title vkey=$smarty.request.id}
                                		    {insert name=vid_to_rnda assign=rnd vid=$vidid}
                                		    {insert name=vid_to_rndvv assign=rndv vid=$vidid}
                            			{/if}
                            			
                                		{if $section eq "video"}
                                		    {section name=t start=1 loop=4}
                                    			<td width="{$img_max_width}" valign="top">
                                    			    {if $same_title_uploads eq "0"}<a href="{$base_url}/{$section}/{$title}">{else}<a href="{$base_url}/{$section}/{$smarty.request.id}">{/if}
                                    				<img src="{$tmb_url}/user{$vuid}/{$smarty.section.t.index}_{$rnd}.jpg" width="{$img_max_width}" height="{$img_max_height}" alt="{$vtitle}" title="{$vtitle}" class="thumb">
                                    			    </a>
                                    			</td>
                                    		    {/section}
                                    		    
                                    		{elseif $section eq "image"}
                                    			<td width="{$img_max_width}" valign="top">
                                    		    	    {if $same_title_uploads eq "0"}<a href="{$base_url}/{$section}/{$title}">{else}<a href="{$base_url}/{$section}/{$smarty.request.id}">{/if}
                                    				<img src="{$tmb_url}/user{$vuid}/{$vflvname}" width="{$img_max_width}" height="{$img_max_height}" alt="{$vtitle}" title="{$vtitle}" class="thumb">
                                    			    </a>
                                    			</td>
                                    		{elseif $section eq "audio"}
                                    		    {section name=u start=1 loop=4}
                                    			<td width="{$img_max_width}" valign="top">
                                    			    {if $same_title_uploads eq "0"}<a href="{$base_url}/{$section}/{$title}">{else}<a href="{$base_url}/{$section}/{$smarty.request.id}">{/if}
                                    				<img src="{$tmb_url}/user{$vuid}/{$smarty.section.u.index}_{$rnd}.jpg" width="{$img_max_width}" height="{$img_max_height}" alt="{$vtitle}" title="{$vtitle}" class="thumb">
                                    			    </a>
                                    			</td>
                                    		    {/section}
                                    		{/if}
                                		    <td valign="top">
                                			<table cellpadding="0" cellspacing="0" width="100%">
                                			    <tr>
                                				<td>
                                				    {if $same_title_uploads eq "0"}<a href="{$base_url}/{$section}/{$title}" title="{$vtitle}">{else}<a href="{$base_url}/{$section}/{$smarty.request.id}" title="{$vtitle}">{/if}
                                					<span class="mvtitle">{$vtitle|truncate:$tr_titlelist:"..."}</span>
                                				    </a>
                                				</td>
                                			    </tr>
                                			    <tr>
                                				<td class="vdescr">{$vdescr|truncate:$tr_desclist:"..."|nl2br|spchar}</td>
                                			    </tr>
                                			</table>
                                			<table cellpadding=1 cellspacing=0 border=0 width="100%">                                                                                                                  
                                    			    <tr>                                                                                                                                                                   
                                        			<td colspan=2><span class="gr">{$fileadded2}</span>{insert name=time_range assign=rtime field=addtime IDFR=vid id=$vidid tbl=$tbl}{$rtime} {$fileaddedago}</td>
                                    			    </tr>
                                    			    <tr>
                                    				<td colspan=2><span class="gr">{$fileviews}</span>{$views|viewnr}</td>
                                    			    </tr>
                                    			    <tr>
                                        			<td align=left colspan=2>
                                        			    {assign var=viddur value=$vduration}
                                        			    {math equation="$viddur/60" format="%0.0f" assign=minutes}
                                        			    {math equation="$viddur - ($minutes * 60)" format="%0.0f" assign=seconds}
                                        			    {if $seconds < 0}
                                            				{math equation="$minutes - 1" assign=minutes}
                                            				{math equation="$seconds + 60" assign=seconds}
                                        			    {/if}
                                        			    {$minutes}{$fileduration_min}{$seconds}{$fileduration_sec}
                                        			</td>
                                    			    </tr>
                                    			</table>
                                		    </td>
                                		</tr>
                                	    </table>
					    </td>
					</tr>
				    </table>
				    <br>
				    {/if}
				    
				    <table cellpadding=10 cellspacing=0 border=0 width="100%" align="center">
					<tr>
					    <td align="left">
						<span class="gr">{$fresp_txt29}</span><span class="red">{$totalz}</span>
					    </td>
					</tr>
				    </table>
				    
				    <form name="inboxmsg" method="post" action="">
				    <table cellpadding=5 cellspacing=1 width="100%" border=0>
					    <tr>
						<td class="th2" align="center">{if $myt ne "0"}<input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmsg(document.inboxmsg['mid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmsg(document.inboxmsg['mid[]']); HideContent('actdiv'); {rdelim}">{/if}</td>
						<td class="th2">
						    <a href="{$base_url}/responses/{$section}/{$smarty.request.id}/a0"><span class="{if $smarty.request.st eq "" or $smarty.request.st eq "a0"}act{/if}">{$comm_app5}</span></a>{$myfiles_delim}
						    <a href="{$base_url}/responses/{$section}/{$smarty.request.id}/a1"><span class="{if $smarty.request.st eq "a1"}act{/if}">{$comm_app6}</span></a>{$myfiles_delim}
						    <a href="{$base_url}/responses/{$section}/{$smarty.request.id}/a2"><span class="{if $smarty.request.st eq "a2"}act{/if}">{$comm_app7}</span></a>
						</td>
						<td class="th2">{$comm_app1}</td>
					    </tr>
					{section name=c loop=$resp}
					    <tr class="nbg">
						<td width="3%" class="th1" align="center" valign="top" style="padding-top: 20px;"><input type="checkbox" name="mid[]" value="{$resp[c].rvid}" onclick="ShowContent('actdiv')"></td>
						<td class="th1">
						    <table width="100%" cellpadding=5 cellspacing=0 border=0>
							<tr>
							    <td valign="top" class="">
							    
								<table cellpadding=0 cellspacing=0 border=0 width="100%">
								    <tr>
									<td>
									    {insert name=getfield assign=lm field=rtime table=file_responses qfield=rvid qvalue=$resp[c].rvid order="and rtype='$section'"}
									    {insert name=getfield assign=ftitle field=vtitle table=files_$section qfield=vid qvalue=$resp[c].rvid}
									    {insert name=getfield assign=fdesc field=vdescr table=files_$section qfield=vid qvalue=$resp[c].rvid}
									    {insert name=getfield assign=rtitle field=vtitle table=files_$section qfield=vid qvalue=$resp[c].rtovid}
									    {insert name=getfield assign=fkey field=vkey table=files_$section qfield=vid qvalue=$resp[c].rvid}
									    {insert name=getfield assign=fkey2 field=vkey table=files_$section qfield=vid qvalue=$resp[c].rtovid}
									    {insert name=getfield assign=fphoto field=photo table=members qfield=uid qvalue=$resp[c].resuid}
									    {insert name=getfield assign=fgender field=gender table=members qfield=uid qvalue=$resp[c].resuid}

									{if $section eq "video"}
									    {assign var=fcomp value="v"}
									    {insert name=vid_to_rndv assign=rnd vid=$resp[c].rvid}
									    {insert name=vid_to_rndvv assign=rndbn vid=$resp[c].rvid}
									    {insert name=titlev assign=title vkey=$fkey}
									    {insert name=titlev assign=title2 vkey=$fkey2}
									    {assign var=frtype value=$fresp_txt1x}
									    {assign var=frtxt1 value=$fresp_txt43}
									    {assign var=frtxt2 value=$fresp_txt46}
									    {if $thumb_module eq "1"}
									    {insert name=check_img assign=isfile vid=$resp[c].rvid uid=$resp[c].resuid}
									    {insert name=gen_array assign=arra nr=$thumb_nr}
									    <script type="text/javascript">turl['{$rnd}']=0; timg['{$rnd}']=new Array(); thumbs['{$rnd}']=new Array({$arra});</script>
									    <input type="hidden" name="thnr{$rnd}" id="thnr{$rnd}" value="{if $isfile eq "yes"}{$thumb_nr}{else}3{/if}">
									    <input type="hidden" name="thdelay{$rnd}" id="thdelay{$rnd}" value="{$thumb_delay}">
									    {/if}
									{elseif $section eq "image"}
									    {assign var=fcomp value="i"}
									    {insert name=getfield assign=fimg field=vflvname table=files_$section qfield=vid qvalue=$resp[c].rvid}
									    {assign var=frtype value=$fresp_txt2x}
									    {insert name=titlei assign=title vkey=$fkey}
									    {insert name=titlei assign=title2 vkey=$fkey2}
									    {assign var=frtxt1 value=$fresp_txt44}
									    {assign var=frtxt2 value=$fresp_txt47}
									{elseif $section eq "audio"}
									    {assign var=fcomp value="a"}
									    {insert name=vid_to_rnda assign=rnd vid=$resp[c].rvid}
									    {insert name=vid_to_rndvv assign=rndbn vid=$resp[c].rvid}
									    {assign var=frtype value=$fresp_txt3x}
									    {assign var=frtxt1 value=$fresp_txt45}
									    {insert name=titlea assign=title vkey=$fkey}
									    {insert name=titlea assign=title2 vkey=$fkey2}
									    {assign var=frtxt2 value=$fresp_txt48}
									{/if}
									    
									<div class="cursor" id="flist{$resp[c].rid}" onclick="ReverseContentDisplay('fdetails{$resp[c].rid}'); ReverseContentDisplay('flist{$resp[c].rid}');">
									    <table cellpadding=0 cellspacing=0 border=0 width="100%">
										<tr>
										    <td>
											<table cellpadding="1" cellspacing="0" border="0">
											    <tr>
												<td>
												    <img src="{if $section eq "image"}{$tmb_url}/user{$resp[c].resuid}/{$fimg}{else}{$tmb_url}/user{$resp[c].resuid}/{$rndbn}_{$rnd}.jpg{/if}" width="{$img_max_width/2}" height="{$img_max_height/2}" alt="{$ftitle}" title="{$ftitle}" class="thumb">
												</td>
												<td valign="top">
												    <div class="p2">&nbsp;{$inbox_mfrom} {insert name=uid_to_names assign=names uid=$resp[c].resuid}<a href="{$base_url}/profile/{if $special_characters eq "0"}{$names}{else}{$resp[c].resuid}{/if}">{$names}</a></div>
												    <div class="p2">&nbsp;{$frtype}<a href="{$base_url}/{$section}/{$title}">{$ftitle}</a></div>
												</td>
											    </tr>
											</table>
										    </td>
										    <td valign="middle" align="right">
											{$lm|convertunix:"M d, Y, G:i A"}
										    </td>
										</tr>
									    </table>
									</div>
									
									<div id="fdetails{$resp[c].rid}" style="display: none">
									    <table cellpadding=0 cellspacing=0 border=0 width="100%" align="left">
										<tr>
										    <td width="20%" valign="top">
											<div><a href="{$base_url}/profile/{if $special_characters eq "0"}{$names}{else}{$resp[c].resuid}{/if}"><img src="{$usrimg_url}/{$fphoto}" width="60" height="60" alt="" title="" class="{if $fgender eq "M"}user_img{elseif $fgender eq "F"}user_imgf{else}user_img{/if}"></a></div>
											<div align="left" class="pl5"><a href="{$base_url}/profile/{if $special_characters eq "0"}{$names}{else}{$resp[c].resuid}{/if}">{$names}</a></div>
										    </td>
										    <td width="80%" valign="top">
											<table cellpadding="0" cellspacing="0" border="0" align="left">
											    <tr>
												<td>
												
										    <div class="cursor" onclick="ReverseContentDisplay('fdetails{$resp[c].rid}'); ReverseContentDisplay('flist{$resp[c].rid}');">
											<table cellpadding=2 cellspacing=0 border=0 align="left" width="100%">
											    <tr>
												<td class="nopad">
												    <table cellpadding=2 cellspacing=0 border=0 align="left">
													<tr>
													    <td><div class="p2"><a href="javascript:void(0)"><span id="al{$resp[c].rid}" class="act">{$frtype}{$ftitle}</a></div></td>
													    <td><div id="cdownarr{$resp[c].resuid}" style="display: block;" class="pl2"><a href="javascript:void(0)"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a></div></td>
													</tr>
												    </table>
												</td>
											    </tr>
											    <tr><td class="nopad">&nbsp;</td></tr>
											</table>
										    </div>
											    </tr>
											    <tr>
												<td>
										    <div align="left">
											<table cellpadding=2 cellspacing=0 border=0 align="left" width="100%">
											    <tr>
												<td></td>
												<td>
												    <table cellpadding="0" cellspacing="0" border="0">
													<tr><td><div class="p1"><a href="{$base_url}/profile/{if $special_characters eq "0"}{$names}{else}{$resp[c].resuid}{/if}">{$names}</a>{$frtxt1}{if $same_title_uploads eq "0"}<a href="{$base_url}/{$section}/{$title2}">{else}<a href="{$base_url}/{$section}/{$smarty.request.id}">{/if}{$rtitle}</a>{$frtxt2}</div></td></tr>
													<tr>
													    <td>
														<div class="qlistadding bottomleft">
                                    										    <div id="{$fcomp}qlistadd{$fkey}" class="qlisticon">
                                        										<a href="javascript:void(0)" alt="{$qlist_txt1}" title="{$qlist_txt1}" onmouseover="setqlicon('on', '{$section}', '{$fkey}', 'grid');" onmouseout="setqlicon('off', '{$section}', '{$fkey}', 'grid');" onclick="add2ql('{$section}', '{$section}', '{$fkey}', 'grid');">
                                            										    &nbsp;&nbsp;&nbsp;&nbsp;
                                        										</a>
                                    										    </div>
														    <a href="{$base_url}/{$section}/{$title}"><img id="{$rnd}" {if $section eq "image"}src="{$tmb_url}/user{$resp[c].resuid}/{$fimg}"{else}src="{$tmb_url}/user{$resp[c].resuid}/{$rndbn}_{$rnd}.jpg"{/if} width="{$img_max_width}" height="{$img_max_height}" alt="{$ftitle}" title="{$ftitle}" class="thumb" {if $section eq "video" and $thumb_module eq "1"}onmouseover="if (window.loaded == true) {ldelim} startslide('{$rnd}','{$tmb_url}/user{$resp[c].resuid}/', '_{$rnd}.jpg'); {rdelim}" onmouseout="if (window.loaded == true) {ldelim} stopslide('{$rnd}'); this.src='{$tmb_url}/user{$resp[c].resuid}/1_{$rnd}.jpg'; {rdelim}"{/if}></a>
														</div>
													    </td>
													</tr>
												    </table>
												</td>
											    </tr>
											    <tr>
												<td></td>
												<td>
												    <div class="p2">
													<div class="p2"><a href="{$base_url}/{$section}/{$title}">{$ftitle}</a></div>
													<div class="p2">{$fdesc|nl2br|spchar}</div>
													<div>&nbsp;</div>
													<div>
													    <table cellpadding="0" cellspacing="0" border="0" width="100%">
														<tr>
														    <td align="left">
															<input type="button" class="fb" value="{if $resp[c].approved eq "0"}{$fresp_txt40x}{else}{$fresp_txt42x}{/if}" onclick="{if $resp[c].approved eq "0"}location.href='{$base_url}/responses/{$section}/{$smarty.request.id}/{$smarty.request.st}/app1/r{$resp[c].rid}'; return false;{else}location.href='{$base_url}/responses/{$section}/{$smarty.request.id}/{$smarty.request.st}/app0/r{$resp[c].rid}'; return false;{/if}">
															&nbsp;&nbsp;&nbsp;
															<input type="button" class="fb" value="{$fresp_txt41x}" onclick="location.href='{$base_url}/responses/{$section}/{$smarty.request.id}/{$smarty.request.st}/app2/r{$resp[c].rid}'; return false;">
														    </td>
														    <td align="right">
															{insert name=bstatus assign=bstatus blocked_uid=$resp[c].resuid}
															{if $bstatus eq "0"}(<a href="javascript:void(0)" onclick="block_user3('{$resp[c].resuid}', '{$resp[c].rid}');">{$fresp_txt49}</a>)
															{elseif $bstatus eq "1"}(<a href="javascript:void(0)" onclick="unblock_user3('{$resp[c].resuid}', '{$resp[c].rid}');">{$fresp_txt49x}</a>)
															{else}(<a href="javascript:void(0)" onclick="block_user3('{$resp[c].resuid}', '{$resp[c].rid}');">{$fresp_txt49}</a>)
															{/if}
															<input type="hidden" name="blocked" value="{$resp[c].resuid}">
														    </td>
														</tr>
													    </table>
													</div>
												    </div>
												</td>
											    </tr>
											    <tr>
												<td></td>
												<td colspan="2" class="nopad">
												    <table cellpadding="0" cellspacing="0" border="0" width="100%">
													<tr>
													    <td><div id="frdiv{$resp[c].rid}"></div></td>
													</tr>
												    </table>
												</td>
											    </tr>
											</table>
										    </div>
												</td>
											    </tr>
											</table>
										    </td>
										</tr>
									    </table>
									</div>
									</td>
								    </tr>
								</table>
							    </td>
							</tr>
						    </table>
						</td>
						<td width="7%" class="th1" align="center" valign="top" style="padding-top: 20px;">
						    {if $resp[c].approved eq "1"}<a href="{$base_url}/responses/{$section}/{$smarty.request.id}/{if $smarty.request.st eq ""}a0{else}{$smarty.request.st}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/app0/r{$resp[c].rid}">{$adm_fileyes}</a>{else}<a href="{$base_url}/responses/{$section}{if $section ne "profile"}/{$smarty.request.id}{/if}/{if $smarty.request.st eq ""}a0{else}{$smarty.request.st}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/app1/r{$resp[c].rid}">{$adm_fileno}</a>{/if}
						</td>
					    </tr>
					{/section}
					{if $myt eq "0"}
					    <tr>
						<td colspan="2">{$fresp_txt50}</td>
					    </tr>
					{/if}
					    <tr>
                				<td colspan=2 class="nopad" valign="top">
                    				    {include file="_inc/inc_selectactions.tpl"}
                				</td>
            				    </tr>
				    </table>
				    <table cellpadding=5 cellspacing=0 width="100%">
				        <tr><td class="pag_bg" align="center" valign="top">{$link}</td></tr>
				    </table>
				    </form>
