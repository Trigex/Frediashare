<!-- BEGIN COMMENTS TABLE -->
    			{if $same_title_uploads eq "0"}{if $btn eq "baudio"}{insert name=titlea_to_key assign=key vtitle=$smarty.request.id}{assign var=ftype value="audio"}{elseif $btn eq "bimage"}{insert name=titlei_to_key assign=key vtitle=$smarty.request.id}{assign var=ftype value="image"}{elseif $btn eq "bvideo"}{insert name=titlev_to_key assign=key vtitle=$smarty.request.id}{assign var=ftype value="video"}{elseif $btn eq "bhome"}{assign var=ftype value="profile"}{/if}{else}{assign var=key value=$smarty.request.id}{/if}
    			{if $file_comments eq "1" or ( ( $sbtn eq "profile" or $sbtn eq "userpage" ) and $profile_comments eq "1")}
			<table width="100%" cellpadding="10" cellspacing="0" border=0 class="br2" align="left">
			    <tr>
				<td colspan=2>
				{if $sbtn ne "profile" and $sbtn ne "userpage"}
				{if ($is_comm eq "yes" or $is_comm eq "appfr" or $is_comm eq "app") or ($friend eq "yes" and $can_comment eq "1")}
				<table width="100%" cellpadding="0" cellspacing="0" border=0>
				    <tr>
				    {if $type ne "private"}
					<td>
					<div id="clink_on" style="display: block;">
					    <table cellpadding="0" cellspacing="0" border=0>
						<tr>
						    <td valign="middle" class="" width="11">
							<div id="cdownarr4" style="{if $vpage_fcomm_box eq "e"}display: block;{else}display: none;{/if}" class="pl2">
                                                	    <a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr4'); ReverseContentDisplay('cdownarr4'); ReverseContentDisplay('commloopdiv'); ReverseContentDisplay('reload_on'); setclass_act2('scadd');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
                                            		</div>
                                            		<div id="cleftarr4" style="{if $vpage_fcomm_box eq "c"}display: block;{else}display: none;{/if}" class="pl2">
                                                	    <a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr4'); ReverseContentDisplay('cdownarr4'); ReverseContentDisplay('commloopdiv'); ReverseContentDisplay('reload_on'); setclass_act2('scadd');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
                                            		</div>
						    </td>
						    <td class="pl5"><a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr4'); ReverseContentDisplay('cdownarr4'); ReverseContentDisplay('commloopdiv'); ReverseContentDisplay('reload_on'); setclass_act2('scadd');"><span id="scadd" class="{if $vpage_fcomm_box eq "e"}act{/if}">{$mcommtxt1}</span></a></td>
						    <td class="pl5"><div id="commcount">({$comments|viewnr})</div></td>
						    <td width="120" align="right">
							<div id="reload_on" style="{if $vpage_fcomm_box eq "e"}display: block;{else}display: none;{/if}">
							    <a href="javascript:void(0)" onclick="thisDiv('yes'); ldiv('loadme'); comm_load('{$ftype}', '{$key}', '1'); total_load('{$ftype}', '{$key}', '1');">{$comm_reload}</a>
							</div>
						    </td>
						</tr>
					    </table>
					</div>
					</td>
					
					<td align="right" valign="top">
					    {if $smarty.session.UID ne ""}
						<a href="javascript:void(0);" onclick="ReverseContentDisplay('div{$vidid}'); setclass_act2('cadd');"><span id="cadd">{$view_comm_add}</span></a>
					    {/if}
					    {if $smarty.session.UID eq ""}
						<a href="{$base_url}/login?next={$ftype}/{$smarty.request.id}">{$snavlogin}</a>{$fresp_txt9}
					    {/if}
					</td>
					
				    {else}
					
					{if ($friend eq "yes" and $can_comment eq "1") or ($vuid eq $smarty.session.UID)}
					<td>
					<div id="clink_on" style="display: block;">
					    <table cellpadding="0" cellspacing="0" border=0>
						<tr>
						    <td valign="middle" class="" width="11">
							<div id="cdownarr4" style="{if $vpage_fcomm_box eq "e"}display: block;{else}display: none;{/if}" class="pl2">
                                                	    <a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr4'); ReverseContentDisplay('cdownarr4'); ReverseContentDisplay('commloopdiv'); ReverseContentDisplay('reload_on'); setclass_act2('scadd');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
                                            		</div>
                                            		<div id="cleftarr4" style="{if $vpage_fcomm_box eq "c"}display: block;{else}display: none;{/if}" class="pl2">
                                                	    <a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr4'); ReverseContentDisplay('cdownarr4'); ReverseContentDisplay('commloopdiv'); ReverseContentDisplay('reload_on'); setclass_act2('scadd');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
                                            		</div>
						    </td>
						    <td class="pl5"><a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr4'); ReverseContentDisplay('cdownarr4'); ReverseContentDisplay('commloopdiv'); ReverseContentDisplay('reload_on'); setclass_act2('scadd');"><span id="scadd" class="{if $vpage_fcomm_box eq "e"}act{/if}">{$mcommtxt1}</span></a></td>
						    <td class="pl5"><div id="commcount">({$comments|viewnr})</div></td>
						    <td width="120" align="right">
							<div id="reload_on" style="{if $vpage_fcomm_box eq "e"}display: block;{else}display: none;{/if}">
							    <a href="javascript:void(0)" onclick="thisDiv('yes'); ldiv('loadme'); comm_load('{$ftype}', '{$key}', '1'); total_load('{$ftype}', '{$key}', '1');">{$comm_reload}</a>
							</div>
						    </td>
						</tr>
					    </table>
					</div>
					</td>
					
					<td align="right" valign="top">
					    {if $smarty.session.UID ne ""}
						<a href="javascript:void(0);" onclick="ReverseContentDisplay('div{$vidid}'); setclass_act2('cadd');"><span id="cadd">{$view_comm_add}</span></a>
					    {/if}
					    {if $smarty.session.UID eq ""}
						<a href="{$base_url}/login?next={$ftype}/{$smarty.request.id}">{$snavlogin}</a>{$fresp_txt9}
					    {/if}
					</td>
					
					{else}
					    {$view_comm_not}
					{/if}
				    {/if}
				    </tr>
				</table>
				{else}
				    {$view_comm_not}
				{/if}
				
				{if $act eq "0"}
				    {$view_appr_not}
				{/if}
				
				{elseif $sbtn eq "profile" or $sbtn eq "userpage"}
				    {if $errs ne ""}
					{$errs}
				    {elseif ($udetails[0].ch_comm eq "no") or ($udetails[0].ch_comm_who eq "2" and $friend ne "yes" and $udetails[0].uid ne $smarty.session.UID)}
					{$comm_disabletxt1}
				    {else}
                                    {if $ftype eq "profile"}{insert name=getfield assign=suid field=uid table=members qfield=username qvalue=$smarty.request.user}{assign var=key value=$suid}{/if}
				    <table cellpadding=0 cellspacing=0 border=0 width="100%" align="center">
					<tr>
					<td align="left" valign="top">
					    {if $smarty.session.UID ne ""}
						<a id="add_comm" href="javascript:void(0);" onclick="ReverseContentDisplay('div_comm'); setclass_act2('cadd');"><span id="cadd">{$view_comm_add}</span></a>
					    {/if}
					    {if $smarty.session.UID eq ""}
						<a id="add_comm" href="{$base_url}/login?next={$ftype}/{$smarty.request.user}">{$snavlogin}</a>{$fresp_txt9}
					    {/if}
					</td>
					
					<td>
					<div id="clink_on" style="display: block;">
					{if $smarty.session.UID ne ""}
					    <table cellpadding="0" cellspacing="0" border=0 width="100%">
						<tr>
						    <td align="right">
							<div id="reload_on" style="display: block;">
							    <a href="javascript:void(0)" onclick="thisDiv('yes'); ldiv('loadme'); comm_load('{$ftype}', '{$key}', '1'); {if $sbtn eq "userpage"}total_load('{$ftype}', '{$key}', '1');{/if}">{$comm_reload}</a>
							</div>
						    </td>
						</tr>
					    </table>
					{/if}
					</div>
					</td>
					</tr>
					
					<tr>
					    <td colspan=2 align="left">
						<div id="div_comm" style="display: none;">
						    <form id="pcommentsForm">
							<table cellpadding=0 cellspacing=0 align="left" border=0 width="100%">
							    <tr>
								<td>
								    <textarea name="comms" rows="4" style="{if $tinfo[0].th_comm_pos eq "right"}width: 450px;{else}width: 200px;{/if}"></textarea>
								    <input type="hidden" name="useruid" value="{$udetails[0].uid}">
								</td>
							    </tr>
							    <tr>
								<td><input name="sendbutton" type="button" value="{$view_commbtn}" class="fb" onclick="thisDiv('yes'); ldiv('commdiv'); send_pc();">&nbsp;<input type="button" class="fb" value="{$view_reqbtncancel}" onclick="setclass_act2('cadd'); HideContent('div_comm');"></td>
							    </tr>
							    <tr>
								<td>
								    <div id="loading5" style="display: none;">
									<table cellpadding=5 cellspacing=0 border=0><tr><td>{$adm_setgen79}</td><td>{$loading_gif}</td></tr></table>
								    </div>
								    <div id="commdiv" class="p5"></div>
								</td>
							    </tr>
							</table>
						    </form>
						</div>
					    </td>
					</tr>
				    </table>
				    {/if}
				{/if}
				</td>
			    </tr>
			    {if $sbtn ne "profile" and $sbtn ne "userpage"}
			    <tr>
				<td align=right colspan=2 class="nopad">
				<div id="updateDiv1">
				    <div id="div{$vidid}" style="display: none;">
					<form id="commentsForm">
					<table cellpadding=0 cellspacing=0 border=0>
					    <tr>
						<td align="right" valign="top" class="pl10">{$view_comm_text}&nbsp;</td>
						<td class="pr10">
						    <textarea name="body" class="ff" rows="3" cols="40"></textarea><br>
						    {if $same_title_uploads eq "0"}
							{if $btn eq "baudio"}
							    {insert name=titlea_to_key assign=key vtitle=$smarty.request.id}
							{elseif $btn eq "bimage"}
							    {insert name=titlei_to_key assign=key vtitle=$smarty.request.id}
							{elseif $btn eq "bvideo"}
							    {insert name=titlev_to_key assign=key vtitle=$smarty.request.id}
							{/if}
						    {else}
							{assign var=key value=$smarty.request.id}
						    {/if}
						    <input type="hidden" name="fkey" value="{$key}">
						</td>
					    </tr>
					    <tr>
						<td></td>
						<td>
						{if $btn eq "baudio"}
						    <input name="sendbutton" type="button" value="{$view_commbtn}" class="fb" onClick="thisDiv('yes'); ldiv('updateDiv'); send_audio();">
						{elseif $btn eq "bimage"}
						    <input name="sendbutton" type="button" value="{$view_commbtn}" class="fb" onClick="thisDiv('yes'); ldiv('updateDiv'); send_image();">
						{elseif $btn eq "bvideo"}
						    <input name="sendbutton" type="button" value="{$view_commbtn}" class="fb" onClick="thisDiv('yes'); ldiv('updateDiv'); send();">
						{/if}
						    <input type="button" class="fb" value="{$view_reqbtncancel}" onClick="HideContent('div{$vidid}'); setclass_act2('cadd');">
						</td>
					    </tr>
					    
					    <tr>
						<td></td>
						<td align="left">
						    <div id="loading3" style="display: none;">
							<table cellpadding=5 cellspacing=0 border=0><tr><td>{$adm_setgen79}</td><td>{$loading_gif}</td></tr></table>
						    </div>
						    <div id="updateDiv" class="p5" style="text-align: left; padding-left: 0px;"></div>
						</td>
					    </tr>
					</table>
					</form>
				    </div>
				</div>
				</td>
			    </tr>
			    {/if}

			    {if (($is_comm eq "yes" or $is_comm eq "appfr" or $is_comm eq "app") and $type ne "private") or $ftype eq "profile"}
			    <tr>
				<td colspan=2 class="nopad" align="left">
				    {if $ftype eq "profile"}{insert name=getfield assign=suid field=uid table=members qfield=username qvalue=$smarty.request.user}{assign var=key value=$suid}{/if}
				    <form id="commloopform"></form>
				    <div id="commloopdiv" style="{if $vpage_fcomm_box eq "e" or ( $sbtn eq "profile" or $sbtn eq "userpage") }display: block;{else}display: none;{/if}"><script type="text/javascript"> comm_load('{$ftype}', '{$key}', '1'); </script></div>
				    <div id="hiddenresponsediv" style="display: none;"></div>
				    <div id="loading4" style="display: none;"><table cellpadding=5 cellspacing=0 border=0><tr><td>{$adm_setgen79}</td><td>{$loading_gif}</td></tr></table></div>
				    <div id="loadme"></div>
                                </td>
			    </tr>
			    
			    {elseif (($is_comm eq "yes" or $is_comm eq "appfr" or $is_comm eq "app") and $type eq "private")}
			    {if $vuid eq $smarty.session.UID or $can_comment eq "1"}
			    <tr>
				<td colspan=2 class="nopad" align="left">
				    {if $ftype eq "profile"}{insert name=getfield assign=suid field=uid table=members qfield=username qvalue=$smarty.request.user}{assign var=key value=$suid}{/if}
				    <form id="commloopform"></form>
				    <div id="commloopdiv" style="{if $vpage_fcomm_box eq "e" or ( $sbtn eq "profile" or $sbtn eq "userpage" )}display: block;{else}display: none;{/if}"><script type="text/javascript"> comm_load('{$ftype}', '{$key}', '1'); </script></div>
				    <div id="hiddenresponsediv" style="display: none;"></div>
				    <div id="loading4" style="display: none;"><table cellpadding=5 cellspacing=0 border=0><tr><td>{$adm_setgen79}</td><td>{$loading_gif}</td></tr></table></div>
				    <div id="loadme"></div>
				</td>
			    </tr>
			    {/if}
			    {/if}
			</table>
			{/if}
<!-- END COMMENTS TABLE -->
