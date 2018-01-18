    		{if $sbtn ne "adm_search"}
    		    <div id="actdiv2" style="display: none;">
    		    {if $smarty.request.searchall eq ""}
    			<table cellpadding=5 cellspacing=0 align="left" width="100%">
    			    <tr>
    				<td class="" width="185" valign="top">
    				    <select name="actions" class="selbox" {if $smarty.session.UID ne ""}onchange="if(this.selectedIndex == '1') {ldelim} HideContent('btn1vl'); ShowContent('btn2vl'); {rdelim} else {ldelim} ShowContent('btn1vl'); HideContent('btn2vl'); {rdelim}"{/if}>
    					<option value="{$inbox_acts}">{$inbox_acts}</option>
    					{if $smarty.session.UID ne ""}<option value="{$qlist_txt14}">{$qlist_txt14}</option>{/if}
    					{if $smarty.session.UID ne ""}<option value="{$act_addfav}">{$act_addfav}</option>{/if}
    					<option value="{$qlist_txt1}">{$qlist_txt1}</option>
    				    </select>
    				</td>
    				<td class="pl5">
    				    {if $smarty.request.searchv ne ""}{insert name=get_video_playlists assign=vpl}{elseif $smarty.request.searchi ne ""}{insert name=get_image_playlists assign=vpl}{elseif $smarty.request.searcha ne ""}{insert name=get_audio_playlists assign=vpl}{/if}
    				    <div id="btn1vl" style="display: block;"><input type="submit" name="goact1" value="{$btn_apply}" class="fb"></div>
    				    <div id="btn2vl" style="display: none;" class="p1">
    					<table cellpadding="0" cellspacing="0" border="0" align="left" width="100%">
    					    <tr>
    						<td>
    						    {if $vpl[0].vkey ne ""}
    							<table cellpadding="1" cellspacing="0" border="0" align="left" width="100%">
    							    {section name=i loop=$vpl}
    								<tr>
    								    <td width="1%"><input type="checkbox" name="lpl[]" value="{$vpl[i].vkey}"></td>
    								    <td align="left" width="99%">{$vpl[i].pname|spchar}</td>
    								</tr>
    							    {/section}
    							</table>
    						    {else}{$plist_txt63}
    						    {/if}
    						</td>
    					    </tr>
    					    <tr>
    						<td class="pl5">{if $vpl[0].vkey ne ""}<input type="submit" name="goact1" value="{$btn_apply}" class="fb">{/if}</td>
    					    </tr>
    					</table>
    				    </div>
    				</td>
    			</table>
    		    {/if}
    		    </div>
    		{elseif $sbtn eq "adm_search"}
    		    <table cellpadding=5 cellspacing=0 align="left" width="100%">
                        <tr>
                            <td class="" width="185" valign="top">
                                {include file="_inc/inc_selectact4.tpl"}
                            </td>
                        </tr>
                    </table>
    		{/if}
