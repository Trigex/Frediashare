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
                                		    <td valign="top" align="right" colspan=4>
                                			{$ltsigns}<a href="{if $back eq "0"}javascript:void(0){else}{$base_url}/my_comments/{$section}/{$back}/a0{/if}">{$gen_pageprev}</a>{$myfiles_delim}
                                			<a href="{if $next eq "0"}javascript:void(0){else}{$base_url}/my_comments/{$section}/{$next}/a0{/if}"">{$gen_pagenext}</a>{$gtsigns}
                                		    </td>
						</tr>
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
						{if $tc eq "1"}<span class="gr"><span class="red">{$tc}</span> {$view_comm_txt1}</span>
						{else}<span class="gr"><span class="red">{$tc}</span> {$view_comm_txt2}</span> 
						{/if}
					    </td>
					</tr>
				    </table>
				    
				    <form name="inboxmsg" method="post" action="">
				    <table cellpadding=5 cellspacing=1 width="100%" border=0>
					    <tr>
						<td class="th2" align="center">{if $myt ne "0"}<input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmsg(document.inboxmsg['mid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmsg(document.inboxmsg['mid[]']); HideContent('actdiv'); {rdelim}">{/if}</td>
						<td class="th2">
						    <a href="{$base_url}/my_comments/{$section}{if $section ne "profile"}/{$smarty.request.id}{/if}/a0"><span class="{if $smarty.request.st eq "" or $smarty.request.st eq "a0"}act{/if}">{$comm_app5}</span></a>{$myfiles_delim}
						    <a href="{$base_url}/my_comments/{$section}{if $section ne "profile"}/{$smarty.request.id}{/if}/a1"><span class="{if $smarty.request.st eq "a1"}act{/if}">{$comm_app6}</span></a>{$myfiles_delim}
						    <a href="{$base_url}/my_comments/{$section}{if $section ne "profile"}/{$smarty.request.id}{/if}/a2"><span class="{if $smarty.request.st eq "a2"}act{/if}">{$comm_app7}</span></a>
						</td>
						<td class="th2">{$comm_app1}</td>
						<td class="th2">{$comm_app2}</td>
					    </tr>
					{section name=c loop=$comm}
					    <tr class="nbg">
						<td width="3%" class="th1" align="center"><input type="checkbox" name="mid[]" value="{$comm[c].comid}" onclick="ShowContent('actdiv')"></td>
						<td class="th1">
						    <table width="100%" cellpadding=5 cellspacing=0 border=0>
							<tr>
							    <td valign="top" class="">
								<table cellpadding=0 cellspacing=0 border=0 width="100%">
								    <tr>
									<td>
									{if $section eq "audio"}
									    {insert name=time_range assign=ctime field=addtime IDFR=comid id=$comm[c].comid tbl=comm_audio}
									{elseif $section eq "image"}
									    {insert name=time_range assign=ctime field=addtime IDFR=comid id=$comm[c].comid tbl=comm_img}
									{elseif $section eq "video"}
									    {insert name=time_range assign=ctime field=addtime IDFR=comid id=$comm[c].comid tbl=comm_vid}
									{elseif $section eq "profile"}
									    {insert name=time_range assign=ctime field=addtime IDFR=comid id=$comm[c].comid tbl=comm_profile}
									{/if}
									    <table cellpadding=0 cellspacing=0 border=0 width="100%">
										<tr>
										    <td valign="bottom" align="left">
											{if $section eq "profile"}{insert name=uid_to_names assign=names uid=$comm[c].cuid}{else}{insert name=uid_to_names assign=names uid=$comm[c].uid}{/if}
											<a href="{$base_url}/profile/{if $special_characters eq "0"}{$names}{else}{if $section eq "profile"}{$comm[c].cuid}{else}{$comm[c].uid}{/if}{/if}">{$names}</a>{$myfiles_delim}
											{$ctime}<span class="gr">{$fileaddedago}</span>
										    </td>
										</tr>
									    </table>
									</td>
								    </tr>
								    <tr>
									<td class="pt5" align="left">
									    <span class="comments">{$comm[c].comment|nl2br|spchar}</span>
									</td>
								    </tr>
								</table>
							    </td>
							</tr>
						    </table>
						</td>
						<td width="7%" class="th1" align="center">
						    {if $comm[c].approved eq "1"}<a href="{$base_url}/my_comments/{$section}{if $section ne "profile"}/{$smarty.request.id}{/if}/{if $smarty.request.st eq ""}a0{else}{$smarty.request.st}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/app0/c{$comm[c].comid}">{$adm_fileyes}</a>{else}<a href="{$base_url}/my_comments/{$section}{if $section ne "profile"}/{$smarty.request.id}{/if}/{if $smarty.request.st eq ""}a0{else}{$smarty.request.st}{/if}{if $smarty.request.page ne ""}/page{$smarty.request.page}{/if}/app1/c{$comm[c].comid}">{$adm_fileno}</a>{/if}
						</td>
						<td width="7%" class="th1" align="center">
						    {if $section eq "profile"}
							{assign var=vidid value="0"}{insert name=ctotal assign=ctotal comid=$comm[c].comid vid=$vidid type=profile}
						    {elseif $section eq "audio"}
							{insert name=ctotal assign=ctotal comid=$comm[c].comid vid=$vidid type=audio}
						    {elseif $section eq "image"}
							{insert name=ctotal assign=ctotal comid=$comm[c].comid vid=$vidid type=image}
						    {elseif $section eq "video"}
							{insert name=ctotal assign=ctotal comid=$comm[c].comid vid=$vidid type=video}
						    {/if}
                                                    <div id="thetotal{$comm[c].comid}">({if $ctotal eq "" or $ctotal eq "0"}0{else}{if $ctotal gt "0"}<span class="green">+{elseif $ctotal lt "0"}<span class="red">{/if}{$ctotal}</span>{/if})</div>
						</td>
					    </tr>
					{/section}
					{if $myt eq "0"}
					    <tr>
						<td colspan="2">{$comm_nomsg}</td>
					    </tr>
					{/if}
					    <tr>
                				<td colspan=2 class="nopad" valign="top">
                    				    {include file="_inc/inc_selectactions.tpl"}
                				</td>
            				    </tr>
				    </table>
				    </form>
				    <table cellpadding=5 cellspacing=0 width="100%">
				        <tr><td class="pag_bg" align="center" valign="top">{$link}</td></tr>
				    </table>
