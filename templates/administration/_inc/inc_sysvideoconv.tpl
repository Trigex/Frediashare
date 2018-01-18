		    <fieldset>
			<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('video_conv'); ReverseContentDisplay('video_convtxt'); changeclass_act('sys2');"><span id="sys2">{$adm_setsysset2}</span></a></legend>
			<div id="video_convtxt" style="display: block;" align="center">{$adm_setgen81}</div>
			<div id="video_conv" style="display: none;">
			<form id="videoconvform">
			<table cellpadding=2 cellspacing=0 border=0 align=left width="100%">
			    <tr>
				<td class="" width="30%">{$adm_convtool}</td>
				<td>
				    <select name="conv_tool" class="selbox">
					<option value="mencoder" {if $conv_tool eq "mencoder"}selected{/if}>MEncoder</option>
					<option value="ffmpeg" {if $conv_tool eq "ffmpeg"}selected{/if}>FFmpeg</option>
				    </select>
				</td>
			    </tr>
			    <tr><td class="" width="30%">{$adm_setsysvideo1}</td><td><input type="text" name="menpath" class="ff" size="35" value="{if $smarty.request.menpath ne ""}{$smarty.request.menpath}{else}{$path_mencoder}{/if}"></td></tr>
			    <tr><td class="">{$adm_setsysvideo2}</td><td><input type="text" name="mplpath" class="ff" size="35" value="{if $smarty.request.mplpath ne ""}{$smarty.request.mplpath}{else}{$path_mplayer}{/if}"></td></tr>
			    <tr><td class="" width="30%">{$adm_ffm1}</td><td><input type="text" name="ffmpath" class="ff" size="35" value="{if $smarty.request.ffmpath ne ""}{$smarty.request.ffmpath}{else}{$path_ffmpeg}{/if}"></td></tr>
			    <tr><td class="">{$adm_setsysvideo3}</td><td><input type="text" name="flvpath" class="ff" size="35" value="{if $smarty.request.flvpath ne ""}{$smarty.request.flvpath}{else}{$path_flvtool2}{/if}"></td></tr>
			    <tr><td class="">{$adm_setsysvideo4}</td><td><input type="text" name="phppath" class="ff" size="35" value="{if $smarty.request.phppath ne ""}{$smarty.request.phppath}{else}{$path_php}{/if}"></td></tr>
			    <tr><td class="">{$adm_setsysvideo51}</td><td><input type="text" name="abitrate" class="ff" size="5" value="{if $smarty.request.abitrate ne ""}{$smarty.request.abitrate}{else}{$abrate}{/if}">{$adm_setsysaudio3}</td></tr>
			    <tr><td></td><td>{$adm_setsysaudio4}</td></tr>
			    <tr><td class="">{$adm_setsysvideo5}</td><td><input type="text" name="vbitrate" class="ff" size="5" value="{if $smarty.request.vbitrate ne ""}{$smarty.request.vbitrate}{else}{$vbrate}{/if}">{$adm_setsysaudio3}</td></tr>
			    <tr><td></td><td>{$adm_setsysvideo6}</td></tr>
			    <tr><td class="">{$adm_setsysaudio5}</td><td><input type="text" name="sbitrate" class="ff" size="5" value="{if $smarty.request.sbitrate ne ""}{$smarty.request.sbitrate}{else}{$sbrate}{/if}">{$adm_setsysvideo7}</td></tr>
			    <tr><td></td><td>{$adm_setsysvideo8}</td></tr>
			    <tr><td align="right"><input type="checkbox" name="vres" value="1" {if $resize eq "1"}checked{/if} onclick="ReverseContentDisplay('res_div')"></td><td class="">{$adm_setsysvideo9}</td></tr>
			    <tr>
				<td></td>
				<td align=center>
				<div id="res_div" style="display: {if $resize eq "1"}block;{else}none;{/if}">
				    <table cellpadding=1 cellspacing=0 border=0 align=left>
					<tr>
					    <td class="">{$adm_setsysvideo11}</td>
					    <td><input type="text" style="width: 30px;" name="resx" class="ff" size="3" value="{if $smarty.request.resx ne ""}{$smarty.request.resx}{else}{$resize_x}{/if}"></td>
					</tr>
					<tr>
					    <td class="">{$adm_setsysvideo12}</td>
					    <td><input type="text" style="width: 30px;" name="resy" class="ff" size="3" value="{if $smarty.request.resy ne ""}{$smarty.request.resy}{else}{$resize_y}{/if}"></td>
					</tr>
				    </table>
				</div>
				</td>
			    </tr>
			    <tr><td align="right" valign="top"><input type="checkbox" name="videologs" value="1" {if $video_logs eq "1"}checked{/if}></td><td align=left>{$adm_setsysvideo13}</td></tr>
			    <tr>
				<td colspan="2" style="padding: 10px 0px 0px 0px;">
                                    <table cellpadding="2" cellspacing="0" align="left" border=0>
                                        <tr>
                                            <td align="left" width="10"><input type="button" name="savesvideoconvbtn" class="fb" value="{$adm_setgensave}" onclick="thisDiv('no'); setvideoconv_settings();"></td>
                                            <td align="left" width="300"><input type="button" name="savesvideoconvcancel" class="fb" value="{$adm_playcancelbtn}" onclick="ReverseContentDisplay('video_conv'); ReverseContentDisplay('video_convtxt'); changeclass_act('sys2');"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="left"><div id="videoconvresp"></div></td>
                                        </tr>
                                    </table>
                                </td>
			    </tr>
			</table>
			</form>
			</div>
		    </fieldset>
