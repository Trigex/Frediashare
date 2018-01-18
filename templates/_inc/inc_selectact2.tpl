                    
		    <div id="actdiv2" style="display: none;">
			<table cellpadding=0 cellspacing=0 border=0 align="left" width="100%">
			    <tr>
				<td class="" valign="top" align="left" width="185">
				    <select name="actions" class="selbox" onchange="if(this.selectedIndex == '1') {ldelim} HideContent('btn1'); ShowContent('btn2'); {rdelim} else {ldelim} ShowContent('btn1'); HideContent('btn2'); {rdelim}">
					<option value="{$inbox_acts}">{$inbox_acts}</option>
					<option value="{$qlist_txt14}">{$qlist_txt14}</option>
                                        <option value="{$act_addfav}">{$act_addfav}</option>
                                        <option value="{$qlist_txt1}">{$qlist_txt1}</option>
					<option value="{$act_markpub}">{$act_markpub}</option>
					<option value="{$act_markpriv}">{$act_markpriv}</option>
					{if $file_comments eq "1"}
					<option value="{$act_mark1comm}">{$act_mark1comm}</option>
					<option value="{$act_mark0comm}">{$act_mark0comm}</option>
					{/if}
					{if $comment_rating eq "1"}
                                        <option value="{$macts1}">{$macts1}</option>
                                        <option value="{$macts2}">{$macts2}</option>
                                        {/if}
                                        {if $file_responses eq "1"}
                                        <option value="{$macts3}">{$macts3}</option>
                                        <option value="{$macts4}">{$macts4}</option>
                                        {/if}
					{if $file_ratings eq "1"}
					<option value="{$act_mark1rate}">{$act_mark1rate}</option>
					<option value="{$act_mark0rate}">{$act_mark0rate}</option>
					{/if}
					{if $file_embed eq "1" and $sbtn ne "myimg"}
					<option value="{$act_mark1emb}">{$act_mark1emb}</option>
					<option value="{$act_mark0emb}">{$act_mark0emb}</option>
					{/if}
					{if $file_bookmark eq "1"}
					<option value="{$act_mark1bm}">{$act_mark1bm}</option>
					<option value="{$act_mark0bm}">{$act_mark0bm}</option>
					{/if}
					<option value="{$inbox_itblact6}">{$inbox_itblact6}</option>
				    </select>
				</td>
				<td class="pl5" valign="top" align="left">
				    <div id="btn1" style="display: block;"><input type="submit" name="goact" value="{$btn_apply}" class="fb"></div>
				    <div id="btn2" style="display: none;" class="">
					{if $sbtn eq "myaud"}{insert name=get_audio_playlists assign=upl}{elseif $sbtn eq "myimg"}{insert name=get_image_playlists assign=upl}{elseif $sbtn eq "myvid"}{insert name=get_video_playlists assign=upl}{/if}
					<table cellpadding="0" cellspacing="0" border="0" align="left" width="100%">
					    <tr>
						<td>
						{if $upl[0].vkey ne ""}
					    <table cellpadding="1" cellspacing="0" border="0" align="left" width="100%">
					    {section name=i loop=$upl}
						<tr>
						    <td width="1%"><input type="checkbox" name="gpl[]" value="{$upl[i].vkey}"></td>
						    <td align="left" width="99%">{$upl[i].pname|spchar}</td>
						</tr>
					    {/section}
					    </table>
						{else}{$plist_txt63}{/if}
						</td>
					    </tr>
					    <tr>
						<td>
						{if $upl[0].vkey ne ""}
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
                    