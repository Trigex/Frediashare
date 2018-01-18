		    <fieldset>
			<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('thumb_set'); ReverseContentDisplay('thumb_settxt'); changeclass_act('sys4');"><span id="sys4" {if $msg ne "" or $err ne ""}class="act"{/if}>{$adm_setsysset4}</span></a></legend>
			<div id="thumb_settxt" {if $msg eq "" and $err eq ""}style="display: block;"{else}style="display: none;"{/if} align="center">{$adm_setgen83}</div>
			<div id="thumb_set" {if $msg eq "" and $err eq ""}style="display: none;"{else}style="display: block;"{/if}>
			<form name="thumbform" method="post" action="" enctype="multipart/form-data">
			<table cellpadding=2 cellspacing=0 border=0 align=left width="100%">
                            <tr>
                        	<td colspan="3" align="left">{$adm_ffm12}</td>
                            </tr>
			    <tr>
				<td align=left class="" style="width: 53%;">{$adm_ffm7}</td>
                                <td align="left" class="lp1">
                                    <select name="mthumb" class="selbox" onchange="ReverseContentDisplay('d1'); ReverseContentDisplay('d2'); ReverseContentDisplay('d3'); ReverseContentDisplay('d4'); ReverseContentDisplay('d5'); ReverseContentDisplay('d6'); ReverseContentDisplay('d7'); ReverseContentDisplay('d8'); ReverseContentDisplay('th1'); ReverseContentDisplay('th0');">
                                        <option value="1" {if $thumb_module eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        <option value="0" {if $thumb_module eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    </select>
                                </td>
                                <td width="70">                                                                                                                                                                
                                    <div id="th1" {if $thumb_module eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    <div id="th0" {if $thumb_module eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                </td>
                            </tr>
                            <tr>
                        	<td align=left class=""><div id="d1" {if $thumb_module eq "1"}style="display: block;"{else}style="display: none;"{/if}>{$adm_ffm8}</div></td>
                        	<td align="left" class="lp1"><div id="d2" {if $thumb_module eq "1"}style="display: block;"{else}style="display: none;"{/if}><input type="text" style="width: 30px;" class="ff" name="mthumbnr" size="3" value="{if $smarty.request.mthumbnr ne ""}{$smarty.request.mthumbnr}{else}{$thumb_nr}{/if}"></div></td>
                        	<td>&nbsp;</td>
                            </tr>
                            <tr>
                        	<td align=left class=""><div id="d3" {if $thumb_module eq "1"}style="display: block;"{else}style="display: none;"{/if}>{$adm_ffm9}</div></td>
                        	<td align="left" class="lp1"><div id="d4" {if $thumb_module eq "1"}style="display: block;"{else}style="display: none;"{/if}><input type="text" style="width: 30px;" class="ff" name="mthumbms" size="3" value="{if $smarty.request.mthumbms ne ""}{$smarty.request.mthumbms}{else}{$thumb_delay}{/if}">{$adm_ffm10}</div></td>
                        	<td>&nbsp;</td>
                            </tr>
                            <tr>
                        	<td align=left class=""><div id="d5" {if $thumb_module eq "1"}style="display: block;"{else}style="display: none;"{/if}>{$adm_ffm13}</div></td>
                        	<td align="left" class="lp1"><div id="d6" {if $thumb_module eq "1"}style="display: block;"{else}style="display: none;"{/if}><input type="checkbox" id="c1" name="c1" value="cons" {if $thumb_order eq "cons"}checked{/if} onclick="document.getElementById('c2').checked = false;"></div></td>
                        	<td>&nbsp;</td>
                            </tr>
                            <tr>
                        	<td align=left class=""><div id="d7" {if $thumb_module eq "1"}style="display: block;"{else}style="display: none;"{/if}>{$adm_ffm14}</div></td>
                        	<td align="left" class="lp1"><div id="d8" {if $thumb_module eq "1"}style="display: block;"{else}style="display: none;"{/if}><input type="checkbox" id="c2" name="c2" value="rnd" {if $thumb_order eq "rnd"}checked{/if} onclick="document.getElementById('c1').checked = false;"></div></td>
                        	<td>&nbsp;</td>
                            </tr>
                            <tr>
                        	<td colspan="3"><hr></td>
                            </tr>
			    <tr>
				<td align=left>{$adm_ffm3}</td>
				<td align="left" class="lp1">
				    <select name="thumbgrab" class="selbox">
					<option value="ffmpeg" {if $thumb_method eq "ffmpeg"}selected{/if}>{$adm_ffm4}</option>
					<option value="ffmpeg-php" {if $thumb_method eq "ffmpeg-php"}selected{/if}>{$adm_ffm5}</option>
					<option value="mplayer" {if $thumb_method eq "mplayer"}selected{/if}>{$adm_ffm6}</option>
				    </select>
				</td>
				<td>&nbsp;</td>
			    </tr>
			    <tr>
				<td align=left>{$adm_setsysthumb10}</td>
				<td align="left" class="lp1">
				    <select name="thumbdef" class="selbox">
					<option value="1" {if $def_thumb eq "1"}selected{/if}>{$adm_setsysthumb11}</option>
					<option value="2" {if $def_thumb eq "2"}selected{/if}>{$adm_setsysthumb12}</option>
					<option value="3" {if $def_thumb eq "3"}selected{/if}>{$adm_setsysthumb13}</option>
					<option value="4" {if $def_thumb eq "4"}selected{/if}>{$adm_setsysthumb14}</option>
				    </select>
				</td>
				<td>&nbsp;</td>
			    </tr>
			    <tr>
				<td align=left>{$adm_tmbtxt1}</td>
				<td class="lp1">
				    <table cellpadding="0" cellspacing="0">
					<tr>
					    <td><input type="text" name="thbg_col" value="{if $smarty.request.thbg_col eq ""}{$thumb_bg}{else}{$smarty.request.thbg_col}{/if}" class="cp" size="10"></td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr><td align=left>{$adm_setsysthumb7}</td>
				<td align="left" class="lp1" colspan=2>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="text" style="width: 30px;" name="thumbw" class="ff" value="{if $smarty.request.thumbw ne ""}{$smarty.request.thumbw}{else}{$img_max_width}{/if}" size="3">{$adm_setsysthumb2}</td>
					    <td width="20">&nbsp;</td>
					    <td><input type="text" style="width: 30px;" name="thumbh" class="ff" value="{if $smarty.request.thumbh ne ""}{$smarty.request.thumbh}{else}{$img_max_height}{/if}" size="3">{$adm_setsysthumb3}</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr><td align=left">{$adm_setsysthumb1}</td>
				<td align="left" class="lp1" colspan=2>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="text" style="width: 30px;" name="avatarw" class="ff" value="{if $smarty.request.avatarw ne ""}{$smarty.request.avatarw}{else}{$avatar_width}{/if}" size="3">{$adm_setsysthumb2}</td>
					    <td width="20">&nbsp;</td>
					    <td><input type="text" style="width: 30px;" name="avatarh" class="ff" value="{if $smarty.request.avatarh ne ""}{$smarty.request.avatarh}{else}{$avatar_height}{/if}" size="3">{$adm_setsysthumb3}</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr><td align=left width="220">{$adm_setsysthumb6}</td>
				<td align="left" class="lp1" colspan=2>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="text" style="width: 30px;" name="categw" class="ff" value="{if $smarty.request.categw ne ""}{$smarty.request.categw}{else}{$categwidth}{/if}" size="3">{$adm_setsysthumb2}</td>
					    <td width="20">&nbsp;</td>
					    <td><input type="text" style="width: 30px;" name="categh" class="ff" value="{if $smarty.request.categh ne ""}{$smarty.request.categh}{else}{$categheight}{/if}" size="3">{$adm_setsysthumb3}</td>					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td align="left">{$adm_setsysthumb16}</td>
				<td align="left" class="pl4"><input type="checkbox" name="setvideoth" {if $allow_video_thumbs eq "1"}checked{/if}></td>
				<td>&nbsp;</td>
			    </tr>
			    <tr>
				<td align="left">{$adm_setsysthumb15}</td>
				<td align="left" class="pl4"><input type="checkbox" name="setaudioth" {if $allow_audio_thumbs eq "1"}checked{/if}></td>
				<td>&nbsp;</td>
			    </tr>
			    <tr>
				<td colspan=3 class="grey" style="padding-top: 20px;">
				    <table cellpadding="5" cellspacing="0" border=0 align=center>
					<tr>
					    <td width="{$avatar_width}" height="{$avatar_height}">
						<img src="{$usrimg_url}/default.gif" width="{$avatar_width}" height="{$avatar_height}" alt="{$adm_setsysthumb4}" boder="0">
					    </td>
					    <td valign="top">
						<table cellpadding="3" cellspacing="0" border=0>
						    <tr>
							<td colspan=2>{$adm_setsysthumb4}</td>
						    </tr>
						    <tr>
							<td colspan=2><input type="file" name="audioav" class="ff" id="file" size="20"></td>
						    </tr>
						    <tr>
							<td colspan=2>{$adm_setsysthumb5}</td>
						    </tr>
						</table>
					    </td>
					</tr>
				    </table><br>
				</td>
			    </tr>
			    <tr>
				<td class="grey" colspan=3>
				    <table width="100%" cellpadding="5" cellspacing="0" border=0>
					<tr>
					    <td width="{$img_max_width}" height="{$img_max_height}">
						<img src="{$img_url}/audio.gif" width="{$img_max_width}" height="{$img_max_height}" alt="{$adm_setsysthumb8}" boder="0">
					    </td>
					    <td valign="top">
						<table cellpadding="3" cellspacing="0" border=0>
						    <tr>
							<td colspan=2>{$adm_setsysthumb8}</td>
						    </tr>
						    <tr>
							<td colspan=2><input type="file" name="audioth" class="ff" id="file" size="20"></td>
						    </tr>
						    <tr>
							<td colspan=2>{$adm_setsysthumb9}</td>
						    </tr>
						</table>
					    </td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td class="grey" colspan=3>
				    <table width="100%" cellpadding="5" cellspacing="0" border=0>
					<tr>
					    <td width="{$img_max_width}" height="{$img_max_height}">
						<img src="{$img_url}/convertinga.gif" width="{$img_max_width}" height="{$img_max_height}" alt="{$adm_setsysthumb8}" boder="0">
					    </td>
					    <td valign="top">
						<table cellpadding="3" cellspacing="0" border=0>
						    <tr>
							<td colspan=2>{$adm_aconvtxt1}</td>
						    </tr>
						    <tr>
							<td colspan=2><input type="file" name="aconvth" class="ff" id="file" size="20"></td>
						    </tr>
						    <tr>
							<td colspan=2>{$adm_aconvtxt2}</td>
						    </tr>
						</table>
					    </td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td class="grey" colspan=3>
				    <table width="100%" cellpadding="5" cellspacing="0" border=0>
					<tr>
					    <td width="{$img_max_width}" height="{$img_max_height}">
						<img src="{$img_url}/converting.gif" width="{$img_max_width}" height="{$img_max_height}" alt="{$adm_setsysthumb8}" boder="0">
					    </td>
					    <td valign="top">
						<table cellpadding="3" cellspacing="0" border=0>
						    <tr>
							<td colspan=2>{$adm_vconvtxt1}</td>
						    </tr>
						    <tr>
							<td colspan=2><input type="file" name="vconvth" class="ff" id="file" size="20"></td>
						    </tr>
						    <tr>
							<td colspan=2>{$adm_vconvtxt2}</td>
						    </tr>
						</table>
					    </td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td colspan="3" style="padding: 10px 0px 0px 0px;">
                                    <table cellpadding="2" cellspacing="0" align="left" border=0>
                                        <tr>
                                            <td align="left" width="10"><input type="submit" name="save_sys" class="fb" value="{$adm_setgensave}"></td>
                                            <td align="left" width="300"><input type="button" name="cancelbtn" class="fb" value="{$adm_playcancelbtn}" onclick="ReverseContentDisplay('thumb_set'); ReverseContentDisplay('thumb_settxt'); changeclass_act('sys4');"></td>
                                        </tr>
                                    </table>
                                </td>
			    </tr>
			</table>
			</form>
			</div>
		    </fieldset>
		    <script language="JavaScript" src="{$base_url}/modules/channels/scripts/jscolor.js" type="text/javascript"></script>