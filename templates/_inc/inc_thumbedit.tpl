				{if $sbtn ne "myaud"}{insert name=vid_to_rndv assign=rnd vid=$vd[0].vid}
				{else}{insert name=vid_to_rnda assign=rnd vid=$vd[0].vid}{/if}
				<table cellpadding=10 cellspacing=0 align="left" width="100%" border=0>
				    <tr>
				    {if $sbtn ne "myaud"}
					<td valign="top" width="50%">{insert name=vid_to_rndv assign=rnd vid=$vd[0].vid}
					<script language="javascript" src="{$js_url}/ajaxresponder.js" type="text/javascript"></script>
					<input type="hidden" name="ldivx" id="ldivx" value="">
					<input type="hidden" name="thisDiv" id="thisDiv" value="">
					<form id="grabthumb">
					<fieldset><legend>{$myvideos_selth}</legend>
					    <table cellpadding=1 cellspacing=1 border=0 align="center" width="100%">
						<tr>
						{if $def_thumb eq "1" or $def_thumb eq "4"}
						    <td><div id="thnr_1">
							<img src="{$tmb_url}/user{$smarty.session.UID}/1_{$rnd}.jpg" width="{$img_max_width}" height="{$img_max_height}" alt="{$vd[0].vtitle}" title="{$vd[0].vtitle}" class="thumb"></div>
						    </td>
						{/if}
						{if $def_thumb eq "2" or $def_thumb eq "4"}
						    <td><div id="thnr_2">
							<img src="{$tmb_url}/user{$smarty.session.UID}/2_{$rnd}.jpg" width="{$img_max_width}" height="{$img_max_height}" alt="{$vd[0].vtitle}" title="{$vd[0].vtitle}" class="thumb"></div>
						    </td>
						{/if}
						{if $def_thumb eq "3" or $def_thumb eq "4"}
						    <td><div id="thnr_3">
							<img src="{$tmb_url}/user{$smarty.session.UID}/3_{$rnd}.jpg" width="{$img_max_width}" height="{$img_max_height}" alt="{$vd[0].vtitle}" title="{$vd[0].vtitle}" class="thumb"></div>
						    </td>
						{/if}
						</tr>
						<tr>
						{if $def_thumb eq "1" or $def_thumb eq "4"}
						    <td valign="top">
						        <input type="hidden" name="thvid" value="{$vd[0].vid}">
							<input type="hidden" name="thkey" value="{$vd[0].vkey}">
							<input type="hidden" name="thfil1" value="{$tmb_url}/user{$smarty.session.UID}/1_{$rnd}.jpg"
							<input type="hidden" name="thfil2" value="{$tmb_url}/user{$smarty.session.UID}/2_{$rnd}.jpg"
							<input type="hidden" name="thfil3" value="{$tmb_url}/user{$smarty.session.UID}/3_{$rnd}.jpg"
							<div class="">
							    <table cellpadding=1 cellspacing=1 width="100%">
								<tr><td class="pl15" valign="top"><a href="javascript:void(0)" onclick="thisDiv('yes'); ldiv('cth1'); grabframe('1', '{$vd[0].vid}');">{$myvideos_changethv}</a></td></tr>
							    </table>
							</div>
						    </td>
						{/if}
						{if $def_thumb eq "2" or $def_thumb eq "4"}
						    <td valign="top">
						        <input type="hidden" name="thvid" value="{$vd[0].vid}">
							<input type="hidden" name="thkey" value="{$vd[0].vkey}">
							<input type="hidden" name="thfil1" value="{$tmb_url}/user{$smarty.session.UID}/1_{$rnd}.jpg"
							<input type="hidden" name="thfil2" value="{$tmb_url}/user{$smarty.session.UID}/2_{$rnd}.jpg"
							<input type="hidden" name="thfil3" value="{$tmb_url}/user{$smarty.session.UID}/3_{$rnd}.jpg"
							<div class="tabbed-pane">
							    <table cellpadding=1 cellspacing=1 width="100%">
								<tr><td class="pl15" valign="top"><a href="javascript:void(0)" onclick="thisDiv('yes'); ldiv('cth2'); grabframe('2', '{$vd[0].vid}');">{$myvideos_changethv}</a></td></tr>
							    </table>
							</div>
						    </td>
						{/if}
						{if $def_thumb eq "3" or $def_thumb eq "4"}
						    <td valign="top">
						        <input type="hidden" name="thvid" value="{$vd[0].vid}">
							<input type="hidden" name="thkey" value="{$vd[0].vkey}">
							<input type="hidden" name="thfil1" value="{$tmb_url}/user{$smarty.session.UID}/1_{$rnd}.jpg"
							<input type="hidden" name="thfil2" value="{$tmb_url}/user{$smarty.session.UID}/2_{$rnd}.jpg"
							<input type="hidden" name="thfil3" value="{$tmb_url}/user{$smarty.session.UID}/3_{$rnd}.jpg"
							<div class="tabbed-pane">
							    <table cellpadding=1 cellspacing=1 width="100%">
								<tr><td class="pl15" valign="top"><a href="javascript:void(0)" onclick="thisDiv('yes'); ldiv('cth3'); grabframe('3', '{$vd[0].vid}');">{$myvideos_changethv}</a></td></tr>
							    </table>
							</div>
						    </td>
						{/if}
						</tr>
						<tr>
						    <td colspan="3">
							    <div id="change_th1" style="display: none;">
                        					<table cellpadding=5 cellspacing=0 border=0>
                                                        	    <tr><td>{$adm_setgen79}</td><td>{$loading_gif}</td></tr>
                                                    		</table>
                    					    </div>
						    
							    <div id="change_th2" style="display: none;">
                        					<table cellpadding=5 cellspacing=0 border=0>
                                                        	    <tr><td>{$adm_setgen79}</td><td>{$loading_gif}</td></tr>
                                                    		</table>
                    					    </div>
						    
							    <div id="change_th3" style="display: none;">
                        					<table cellpadding=5 cellspacing=0 border=0>
                                                        	    <tr><td>{$adm_setgen79}</td><td>{$loading_gif}</td></tr>
                                                    		</table>
                    					    </div>
						    </td>
						</tr>
					    </table>
					    
					    <table cellpading=0 cellspacing=0 width="100%" align="center">
						<tr>
						    <td colspan=3 class="pt5">
							<table cellpadding=1 cellspacing=1 width="100%">
							    <tr><td><input type="button" name="saveth" value="{$myvideos_saveth}" onclick="grabthumbs()" class="fb"></td></tr>
							    <tr><td><div id="thumbresponsediv"></div></td></tr>
							</table>
						    </td>
						</tr>
					    </table>
					</fieldset>
					</form>
					</td>
				    {/if}
				    
					<td valign="top" width="50%">
					    <div id="thumb_fsel" style="display: block;">
					    <form name="vupdate_form2" action="{$base_url}/{if $sbtn eq "myaud"}my_audios{else}my_videos{/if}/edit/{$smarty.request.vid}" method="post" encType="multipart/form-data">
					    <fieldset><legend>{$myvideos_selfh}</legend> 
						<table cellpadding=1 cellspacing=1 border=0 align="center" width="100%">
						    <tr>
						    {if $def_thumb eq "1" or $def_thumb eq "4"}
							<td><div id="p1">
							    <img src="{$tmb_url}/user{$smarty.session.UID}/1_{$rnd}.jpg" width="{$img_max_width}" height="{$img_max_height}" alt="{$vd[0].vtitle}" title="{$vd[0].vtitle}" class="thumb"></div>
							</td>
						    {/if}
						    {if $def_thumb eq "2" or $def_thumb eq "4"}
							<td><div id="p2">
							    <img src="{$tmb_url}/user{$smarty.session.UID}/2_{$rnd}.jpg" width="{$img_max_width}" height="{$img_max_height}" alt="{$vd[0].vtitle}" title="{$vd[0].vtitle}" class="thumb"></div>
							</td>
						    {/if}
						    {if $def_thumb eq "3" or $def_thumb eq "4"}
							<td><div id="p3">
							    <img src="{$tmb_url}/user{$smarty.session.UID}/3_{$rnd}.jpg" width="{$img_max_width}" height="{$img_max_height}" alt="{$vd[0].vtitle}" title="{$vd[0].vtitle}" class="thumb"></div>
							</td>
						    {/if}
						    </tr>
						    <tr>
							{if $def_thumb eq "1" or $def_thumb eq "4"}<td class="p4"><a href="javascript:void(0)" onclick="ReverseContentDisplay('th1')"><span class="pl15">{$myvideos_changethf}</span></a></td>{/if}
							{if $def_thumb eq "2" or $def_thumb eq "4"}<td class="p4"><a href="javascript:void(0)" onclick="ReverseContentDisplay('th2')"><span class="pl15">{$myvideos_changethf}</span></a></td>{/if}
							{if $def_thumb eq "3" or $def_thumb eq "4"}<td class="p4"><a href="javascript:void(0)" onclick="ReverseContentDisplay('th3')"><span class="pl15">{$myvideos_changethf}</span></a></td>{/if}
						    </tr>
						</table>
						<table cellpadding=1 cellspacing=1 border=0 align="center" width="100%">
						    <tr>
							<td colspan=3 class="pt5">
							    <input type="submit" name="savefh" value="{$myvideos_savefh}" class="fb">
							</td>
						    </tr>
						</table>
						<table cellpadding=1 cellspacing=1 border=0 align="center" width="100%">
						    <tr>
							<td colspan=3 class="nopad">
							    <div id="th1" style="display: none;">
							    {if $def_thumb eq "1" or $def_thumb eq "4"}
								<table cellpadding=1 cellspacing=1 width="100%"> 
								    <tr><td>{$myvideos_changeth1}</td></tr>
								    <tr>
									<td><input type="file" class="ff" name="upfile_1" size="30" value=""></td>
								    </tr>
								</table>
							    {/if}
							    </div>
							    <div id="th2" style="display: none;">
							    {if $def_thumb eq "2" or $def_thumb eq "4"}
								<table cellpadding=1 cellspacing=1 width="100%"> 
								    <tr><td>{$myvideos_changeth2}</td></tr>
								    <tr>
									<td><input type="file" class="ff" name="upfile_2" size="30" value=""></td>
								    </tr>
								</table>
							    {/if}
							    </div>
							    <div id="th3" style="display: none;">
							    {if $def_thumb eq "3" or $def_thumb eq "4"}
								<table cellpadding=1 cellspacing=1 width="100%"> 
								    <tr><td>{$myvideos_changeth3}</td></tr>
								    <tr>
									<td><input type="file" class="ff" name="upfile_3" size="30" value=""></td>
								    </tr>
								</table>
							    {/if}
							    </div>
							</td>
						    </tr>
						</table>
					    </form>
					    </fieldset>
					    </div>
					</td>
				    </tr>
				</table>
