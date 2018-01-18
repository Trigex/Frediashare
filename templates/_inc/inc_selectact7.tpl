                    <div id="actdiv" style="display: none;"> 
                	<table cellpadding=0 cellspacing=0 border=0 align="left" width="100%">
                	    <tr>
                		<td width="185" valign="top">
                		    <select name="lactions" class="selbox" onchange="if(this.selectedIndex == '1') {ldelim} HideContent('btn1vl'); ShowContent('btn2vl'); {rdelim} else {ldelim} ShowContent('btn1vl'); HideContent('btn2vl'); {rdelim}">
                			<option value="{$inbox_acts}">{$inbox_acts}</option>
                			<option value="{$qlist_txt14}">{$qlist_txt14}</option>
                			<option value="{$act_addfav}">{$act_addfav}</option>
                			<option value="{$qlist_txt1}">{$qlist_txt1}</option>
                		    </select>
                		</td>
                		<td class="pl5" valign="top">
                                            <div id="btn1vl" style="display: block;"><input type="submit" name="goact" value="{$btn_apply}" class="fb"></div>
                                            <div id="btn2vl" style="display: none;" class="p1">
                                            {if $smarty.request.ftype eq "audios" or $smarty.request.ftype eq "audio_favorites"}{insert name=get_audio_playlists assign=vpl}
                                            {elseif $smarty.request.ftype eq "images" or $smarty.request.ftype eq "image_favorites"}{insert name=get_image_playlists assign=vpl}
                                            {elseif $smarty.request.ftype eq "videos" or $smarty.request.ftype eq "video_favorites"}{insert name=get_video_playlists assign=vpl}
                                            {/if}
                                            <table cellpadding="0" cellspacing="0" border="0" align="left" width="100%">
                                        	<tr>
                                        	    <td>
                                        	    {if $vpl[0].vkey ne ""}
                                            <table cellpadding="1" cellspacing="0" border="0" align="left" width="100%">
                                            {section name=i loop=$vpl}
                                                <tr>
                                                    <td width="1%"><input type="checkbox" name="vlpl[]" value="{$vpl[i].vkey}"></td>
                                                    <td align="left" width="99%">{$vpl[i].pname|spchar}</td>
                                                </tr>
                                            {/section}
                                            </table>
                                        	    {else}{$plist_txt63}
                                        	    {/if}
                                        	    </td>
                                        	</tr>
                                        	<tr>
                                        	    <td>
                                        	    {if $vpl[0].vkey ne ""}
                                            <table cellpadding="4" cellspacing="0" border="0" align="left" width="100%">
                                                <tr>
                                                    <td><input type="submit" name="goact" value="{$btn_apply}" class="fb"></td>
                                                </tr>
                                            </table>
                                        	    {/if}
                                        	    </td>
                                        	</tr>
                                    	    </table>
                                            </div>
                                </td>
                	    </tr>
                	</table>
                    </div>
                    
                    