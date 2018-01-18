		    <fieldset>
			<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('audio_conv'); ReverseContentDisplay('audio_convtxt'); changeclass_act('sys1');"><span id="sys1">{$adm_setsysset1}</span></a></legend>
			<div id="audio_convtxt" style="display: block;" align="center">{$adm_setgen80}</div>
			<div id="audio_conv" style="display: none;">
			<form id="audioconvform">
			<table cellpadding=2 cellspacing=0 border=0 align=left width="100%">
			    <tr><td class="" width="30%">{$adm_setsysaudio1}</td><td><input type="text" name="lamepath" class="ff" size="35" value="{if $smarty.request.lamepath ne ""}{$smarty.request.lamepath}{else}{$path_lame}{/if}"></td></tr>
			    <tr><td class="">{$adm_setsysaudio2}</td><td><input type="text" name="lamebitrate" class="ff" size="3" value="{if $smarty.request.lamebitrate ne ""}{$smarty.request.lamebitrate}{else}{$option_b}{/if}">{$adm_setsysaudio3}</td></tr>
			    <tr><td></td><td>{$adm_setsysaudio4}</td></tr>
			    <tr><td class="">{$adm_setsysaudio5}</td><td><input type="text" name="lamesbitrate" class="ff" size="3" value="{if $smarty.request.lamesbitrate ne ""}{$smarty.request.lamesbitrate}{else}{$option_s}{/if}">{$adm_setsysaudio6}</td></tr>
			    <tr><td></td><td>{$adm_setsysaudio7}</td></tr>
			    <tr><td align=right valign=top><input type="checkbox" name="hoption" value="1" {if $option_h eq "1"}checked{/if}></td><td align=left>{$adm_setsysaudio8}</td></tr>
			    <tr><td align=right valign=top><input type="checkbox" name="poption" value="1" {if $option_p eq "1"}checked{/if}></td><td align=left>{$adm_setsysaudio9}</td></tr>
			    <tr><td align=right valign=top><input type="checkbox" name="audiologs" value="1" {if $audio_logs eq "1"}checked{/if}></td><td align=left>{$adm_setsysaudio10}</td></tr>
			    <tr>
				<td colspan="2" style="padding: 10px 0px 0px 0px;">
                                    <table cellpadding="2" cellspacing="0" align="left" border=0>
                                        <tr>
                                            <td align="left" width="10"><input type="button" name="savesaudioconvbtn" class="fb" value="{$adm_setgensave}" onclick="thisDiv('no'); setaudioconv_settings();"></td>
                                            <td align="left" width="300"><input type="button" name="savesaudioconvcancel" class="fb" value="{$adm_playcancelbtn}" onclick="ReverseContentDisplay('audio_conv'); ReverseContentDisplay('audio_convtxt'); changeclass_act('sys1');"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="left"><div id="audioconvresp"></div></td>
                                        </tr>
                                    </table>
                                </td>
			    </tr>
			</table>
			</form>
			</div>
		    </fieldset>			
