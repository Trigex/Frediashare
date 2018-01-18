		    <fieldset>
			<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('file_res'); ReverseContentDisplay('file_restxt'); changeclass_act('sys5');"><span id="sys5">{$adm_setsysset5}</span></a></legend>
			<div id="file_restxt" style="display: block;" align="center">{$adm_setgen84}</div> 
			<div id="file_res" style="display: none;">
			<form id="fileresform">
			<table cellpadding=2 cellspacing=0 border=0 align=left width="100%">
			    <tr>
				<td colspan="2">
				    <table cellpadding=2 cellspacing=0 border=0 align=left>
					<tr>
					    <td colspan="2" class="nopad" style="padding-bottom: 10px;">
						<div class="p2">{$adm_setsysres7} {$upload_max_filesize}</div>
						<div class="p2">{$adm_setsysres8} {$post_max_size}</div>
					    </td>
					</tr>
					<tr>
					    <td align=left width="200">{$adm_setsysres1}</td>
					    <td align="left" class="lp1"><input type="text" style="width: 30px;" name="maxaudio" class="ff" size="5" value="{$max_audio_size}"> {$memyouhaveusedunit}</td>
					</tr>
					<tr>
					    <td align=left>{$adm_setsysres2}</td>
					    <td align="left" class="lp1"><input type="text" style="width: 30px;" name="maximage" class="ff" size="5" value="{$max_image_size}"> {$memyouhaveusedunit}</td>
					</tr>
					<tr>
					    <td align=left>{$adm_setsysres3}</td>
					    <td align="left" class="lp1"><input type="text" style="width: 30px;" name="maxvideo" class="ff" size="5" value="{$max_video_size}"> {$memyouhaveusedunit}</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td colspan="2" class="nopad" style="padding-top: 10px;">
				    <table cellpadding=2 cellspacing=0 border=0 align=left>
					<tr>
					    <td align=left width="150" valign="middle">{$adm_setsysres4}</td>
					    <td align="left" class="lp1"><textarea name="audioext" class="ff" rows="2" cols="38">{$allowed_audio_formats}</textarea></td>
					</tr>
					<tr>
					    <td align=left  valign="middle">{$adm_setsysres5}</td>
					    <td align="left" class="lp1"><textarea name="imageext" class="ff" rows="2" cols="38">{$allowed_image_formats}</textarea></td>
					</tr>
					<tr>
					    <td align=left  valign="middle">{$adm_setsysres6}</td>
					    <td align="left" class="lp1"><textarea name="videoext" class="ff" rows="2" cols="38">{$allowed_video_formats}</textarea></td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td width="1"><input type="checkbox" name="multi_categ_uploads" onclick="ReverseContentDisplay('categupnr');" {if $multi_categ_uploads eq "1"}checked{/if}></td>
				<td><div>{$adm_resopts1}</div></td>
			    </tr>
			    <tr>
				<td></td>
				<td>
				    <div id="categupnr" {if $multi_categ_uploads eq "0"}style="display: none;"{else}style="display: block;"{/if}>
					<div>{$adm_resopts2}<input type="text" style="width: 30px;" name="multi_categ_max" class="ff" size="3" value="{$multi_categ_max}">{$adm_resopts3}</div>
				    </div>
				</td>
			    </tr>
			    <tr>
				<td width="1"><input type="checkbox" name="same_title_uploads" {if $same_title_uploads eq "1"}checked{/if}></td>
				<td><div>{$adm_resopts5}</div></td>
			    </tr>
			    <tr>
				<td class="nopad"></td>
				<td class="nopad">{$adm_resopts6}</td>
			    </tr>
			    <tr>
				<td colspan="2" style="padding: 10px 0px 0px 0px;">
                                    <table cellpadding="2" cellspacing="0" align="left" border=0>
                                        <tr>
                                            <td align="left" width="10"><input type="button" name="savefilesetbtn" class="fb" value="{$adm_setgensave}" onclick="thisDiv('no'); setfileres_settings();"></td>
                                            <td align="left" width="300"><input type="button" name="savefilesetcancel" class="fb" value="{$adm_playcancelbtn}" onclick="ReverseContentDisplay('file_res'); ReverseContentDisplay('file_restxt'); changeclass_act('sys5');"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="left"><div id="fileresresp"></div></td>
                                        </tr>
                                    </table>
                                </td>
			    </tr>
			</form>
			</table>
			</div>
		    </fieldset>
