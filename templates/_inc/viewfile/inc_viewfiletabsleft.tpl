<!-- BEGIN ACTIONS TABLE --><br>
			<table cellpadding="10" cellspacing="0" border="0" align="center" width="100%" class="br2">
			    <tr>
				<td>
				    <table cellpadding=0 cellspacing="0" border=0 width="100%">
					<tr>
					    <td width="50%">
					    {if $file_ratings eq "1"}
						{if $smarty.session.UID eq ""}
						    {if $type eq "private" or $is_rated eq "no"}
							{if $btn eq "baudio"}{$viewaudio_norate}{elseif $btn eq "bimage"}{$viewimage_norate}{elseif $btn eq "bvideo"}{$viewvideo_norate}{/if}
						    {else}
							&nbsp;&nbsp;{if $btn eq "baudio"}<a href="{$base_url}/login?next={$ftype}/{$smarty.request.id}">{$snavlogin}</a>{$viewaudio_ratelogin}{elseif $btn eq "bimage"}<a href="{$base_url}/login?next={$ftype}/{$smarty.request.id}">{$snavlogin}</a>{$viewimage_ratelogin}{elseif $btn eq "bvideo"}<a href="{$base_url}/login?next={$ftype}/{$smarty.request.id}">{$snavlogin}</a>{$viewvideo_ratelogin}{/if}
							{$ratebar1}
						    {/if}
						{else}
						    {if $type eq "private" or $is_rated eq "no"}
							{if $type eq "private" and $vuid eq $smarty.session.UID}
							    {$ratebar1}
							{else}
							    {if $friend eq "yes" and $can_rate eq "1"}
								{$ratebar}
							    {elseif $friend eq "yes" and $can_rate ne "1"}
								{if $btn eq "baudio"}{$viewaudio_norate}{elseif $btn eq "bimage"}{$viewimage_norate}{elseif $btn eq "bvideo"}{$viewvideo_norate}{/if}
							    {else}
								{if $btn eq "baudio"}{$viewaudio_norate}{elseif $btn eq "bimage"}{$viewimage_norate}{elseif $btn eq "bvideo"}{$viewvideo_norate}{/if}
							    {/if}
							{/if}
						    {else}
							{if $vuid eq $smarty.session.UID}
							    {$ratebar1}
							{else}
							    {$ratebar}
							{/if}
						    {/if}
						{/if}
					    {/if}
					    </td>
					    <td width="50%" align="right" valign="top">
						<table width="100%" cellpadding="1" cellspacing="0" border=0>
						    <tr>
							<td width="75">&nbsp;</td>
							<td align="right">{if ($type eq "public") or ($vuid eq $smarty.session.UID) or ($friend eq "yes")}<h3>{$views|viewnr} {if $views eq "1"}{if $btn eq "baudio"}{$viewaudio_audition1}{else}{$view_view1}{/if}{else}{if $btn eq "baudio"}{$viewaudio_audition2}{else}{$view_view2}{/if}{/if}</h3>{/if}</td>
						    </tr>
						{if ($smarty.session.UID eq "" and $file_download_guest eq "1" and $file_download eq "1") or ($file_download eq "1" and $smarty.session.UID ne "") or ($type eq "private" and $friend eq "yes" and $file_download eq "1" and $smarty.session.UID ne "")}
						    <tr>
							<td></td>
							<td align="right">
							{if ($delete_original_video ne "1" and $btn eq "bvideo") or ($delete_original_audio ne "1" and $btn eq "baudio") or ($delete_original_image ne "1" and $btn eq "bimage")}
							    {if $file_download_src eq "1"}
								{if $btn eq "baudio"}{insert name=getfield assign=sfilename field=vname table=files_audio qfield=vkey qvalue=$key}
								{elseif $btn eq "bimage"}{insert name=getfield assign=sfilename field=vname table=files_image qfield=vkey qvalue=$key}
								{elseif $btn eq "bvideo"}{insert name=getfield assign=sfilename field=vname table=files_video qfield=vkey qvalue=$key}
								{/if}
								{insert name=extconv assign=sext file=$sfilename}
								{if ($btn eq "bvideo" and $sext ne "FLV") or ($btn eq "baudio" and $sext ne "MP3") or ($btn eq "bimage" and ($sext ne "JPG" and $sext ne "JPEG"))}
								    {if $btn eq "baudio"}<a href="javascript:void(0)" onclick="location.href='{$ado_url}/user{$vuid}/{$sfilename}'; return false;">{$adm_setgen38}{$sext}</a><br>
								    {elseif $btn eq "bimage"}<a href="javascript:void(0)" onclick="location.href='{$pic_url}/user{$vuid}/{$sfilename}'; return false;">{$adm_setgen38}{$sext}</a><br>
								    {elseif $btn eq "bvideo"}<a href="javascript:void(0)" onclick="location.href='{$vdo_url}/user{$vuid}/{$sfilename}'; return false;">{$adm_setgen38}{$sext}</a><br>
								    {/if}
								{/if}
							    {/if}
							{/if}
							
							{if $file_download_conv eq "1"}
							    {if $btn eq "baudio"}{insert name=getfield assign=filename field=vflvname table=files_audio qfield=vkey qvalue=$key}
							    {elseif $btn eq "bimage"}{insert name=getfield assign=filename field=vflvname table=files_image qfield=vkey qvalue=$key}
							    {elseif $btn eq "bvideo"}{insert name=getfield assign=filename field=vflvname table=files_video qfield=vkey qvalue=$key}
							    {/if}
							    {insert name=extconv assign=ext file=$filename}
							    {if $btn eq "baudio" or $btn eq "bvideo"}<a href="javascript:void(0)" onclick="location.href='{$flvdo_url}/user{$vuid}/{$filename}'; return false;">{$adm_setgen38}{$ext}</a>
							    {else}<a href="javascript:void(0)" onclick="location.href='{$pic_url}/user{$vuid}/{$filename}'; return false;">{$adm_setgen38}{$ext}</a>
							    {/if}
							{/if}
							</td>
						    </tr>
						{/if}
						</table>
					    </td>
					</tr>
				    </table>
				</td>
			    </tr>
			</table><br>
			{literal}
			<script type="text/javascript">
			    function set_b1() { setclass_act('b1'); changeclass_inact('b2'); changeclass_inact('b3'); changeclass_inact('b4'); }
			    function set_b2() { setclass_act('b2'); changeclass_inact('b1'); changeclass_inact('b3'); changeclass_inact('b4'); }
			    function set_b3() { setclass_act('b3'); changeclass_inact('b1'); changeclass_inact('b2'); changeclass_inact('b4'); }
			    function set_b4() { setclass_act('b4'); changeclass_inact('b1'); changeclass_inact('b2'); changeclass_inact('b3'); }
			</script>
			{/literal}
			<table cellpadding="10" cellspacing="0" border=0 align=center width="100%" class="br2" style="border-bottom: 0px;">
			    <tr>
				<td width="25%" id="t1" class="br2b" align="center" onmouseout="setficon('fav', 'off');" onmouseover="setficon('fav', 'on');" onclick="set_b1(); ShowContent('favdivx'); ShowContent('fvx'); HideContent('shx'); HideContent('flx'); HideContent('plx');"><table cellpadding=0 cellspacing=0><tr><td class="fav_off" id="favico">&nbsp;</td><td>&nbsp;<span id="b1" class="">{$view_btn1}</span></td></tr></table></td>
				<td width="25%" id="t2" class="br2l" align="center" onmouseout="setficon('share', 'off');" onmouseover="setficon('share', 'on');" onclick="set_b2(); ShowContent('shx'); HideContent('fvx'); HideContent('flx'); HideContent('plx');"><table cellpadding=0 cellspacing=0><tr><td class="share_off" id="shareico">&nbsp;</td><td>&nbsp;<span id="b2" class="">{$view_btn2}</span></td></tr></table></td>
				<td width="25%" id="t4" class="br2l" align="center" onmouseout="setficon('pl', 'off');" onmouseover="setficon('pl', 'on');" onclick="set_b3(); ShowContent('plx'); HideContent('fvx'); HideContent('shx'); HideContent('flx');"><table cellpadding=0 cellspacing=0><tr><td class="pl_off" id="plico">&nbsp;</td><td>&nbsp;<span id="b3" class="">{$plist_txt7}</span></td></tr></table></td>
				<td width="25%" id="t3" class="br2l" align="center" onmouseout="setficon('flag', 'off');" onmouseover="setficon('flag', 'on');" onclick="set_b4(); ShowContent('flx'); HideContent('fvx'); HideContent('shx'); HideContent('plx');"><table cellpadding=0 cellspacing=0><tr><td class="flag_off" id="flagico">&nbsp;</td><td>&nbsp;<span id="b4" class="">{$view_btn3}</span></td></tr></table></td>
			    </tr>
			</table>
			<table cellpadding="10" cellspacing="0" border=0 align=center width="100%">
			    <tr>
				<td colspan=4 class="nopad">
				<div id="fvx" style="display: none; border-top: 0px;" class="br2">
				    <div id="favdivx" style="display: none;">
				    {if $smarty.session.UID eq ""}
					<table cellpadding=5 cellspacing=0 border=0 align="center" width="100%">
					    <tr>
						<td align="center"><div class="p10"><center><a href="{$base_url}/login?next={$ftype}/{$smarty.request.id}">{$snavlogin}</a>{$view_addfavorite_login}</center></div></td>
						<td align="right" valign="top" class="nopad"><a href="javascript:void(0)" onclick="HideContent('fvx'); changeclass_inact('b1');">{$plist_txt54}</a></td>
					    </tr>
					</table>
				    {else}
				    <form id="favform">
					<table cellpadding=5 cellspacing=0 border=0 align="center" width="100%">
					    <tr>
						<td align="center">{$view_addfav_txt}</td>
						<td align="right" valign="top" class="nopad"><a href="javascript:void(0)" onclick="HideContent('fvx'); changeclass_inact('b1');">{$plist_txt54}</a></td>
					    </tr>
					    <tr>
						<td align="center" class="nopad" width="95%">
						{if $btn eq "baudio"}
						    <input type="button" name="fav_btn" class="fb" value="{$view_addfav_btn}" onClick="thisDiv('no'); add2fav_audio();">&nbsp;&nbsp;
						{elseif $btn eq "bimage"}
						    <input type="button" name="fav_btn" class="fb" value="{$view_addfav_btn}" onClick="thisDiv('no'); add2fav_image();">&nbsp;&nbsp;
						{elseif $btn eq "bvideo"}
						    <input type="button" name="fav_btn" class="fb" value="{$view_addfav_btn}" onClick="thisDiv('no'); add2fav();">&nbsp;&nbsp;
						{/if}
						    <input type="button" name="cfav" class="fb" value="{$view_reqbtncancel}" onClick="HideContent('fvx'); changeclass_inact('b1');">
						    <input type="hidden" name="key2" value="{$key}">
						</td>
					    </tr>
					    <tr>
						<td align=left class="nopad" colspan="2"><div id="favdiv2" style="text-align: left;" class="p5"></div></td>
					    </tr>
					</table>
				    </form>
				    {/if}
				    </div>
				</div>
				
				<div id="shx" style="display: none; border-top: 0px;" class="br2">
				    {include file="_inc/viewfile/inc_viewfileshare.tpl"}
				</div>

				<div id="plx" style="display: none; border-top: 0px;" class="br2">
				<form id="playlistform">
				    {if $smarty.session.UID eq ""}
					<table cellpadding=5 cellspacing=0 border=0 align="center" width="100%">
					    <tr>
						<td align="center"><div class="p10"><center><a href="{$base_url}/login?next={$ftype}/{$smarty.request.id}">{$snavlogin}</a>{$plist_txt58}</center></div></td>
						<td align="right" valign="top" class="nopad"><a href="javascript:void(0)" onclick="HideContent('plx'); changeclass_inact('b3');">{$plist_txt54}</a></td>
					    </tr>
					</table>
				    {else}
				    {if $btn eq "baudio"}{insert name=get_audio_playlists assign=xpl}{assign var=pl_type value=$adm_audiosheading1}{assign var=pl_db value="audio"}
				    {elseif $btn eq "bimage"}{insert name=get_image_playlists assign=xpl}{assign var=pl_type value=$adm_imagesheading1}{assign var=pl_db value="image"}
				    {elseif $btn eq "bvideo"}{insert name=get_video_playlists assign=xpl}{assign var=pl_type value=$adm_videosheading1}{assign var=pl_db value="video"}{/if}
				    <table cellpadding="1" cellspacing="0" border="0" align="center" width="100%">
					<tr>
					    <td align="center">
						<table cellpadding="2" cellspacing="0" border="0" align="center">
						    <tr>
							<td></td>
							<td align="left" class="p5">{$plist_txt56}</td>
						    </tr>
                                		{section name=i loop=$xpl}
                                    		    <tr>
                                        		<td align="right"><input type="checkbox" name="xpl[]" value="{$xpl[i].vkey}"></td>
                                        		<td align="left">{$xpl[i].pname|spchar}&nbsp;
							{if $btn eq "baudio"}{insert name=get_audio_playlist_count assign=pl_count vkey=$xpl[i].vkey}
							{elseif $btn eq "bimage"}{insert name=get_image_playlist_count assign=pl_count vkey=$xpl[i].vkey}
							{elseif $btn eq "bvideo"}{insert name=get_video_playlist_count assign=pl_count vkey=$xpl[i].vkey}{/if}
							<span class="italic">({$pl_count} {$pl_type})</span>
							</td>
                                    		    </tr>
                                		{/section}
                                		    <tr>
                                			<td></td>
                                			<td align="left">
                                			    <input type="button" name="savetopl" class="fb" onclick="thisDiv('yes'); ldiv('playlistdiv'); save2pl('{$pl_db}','{$vidid}');" value="{$plist_txt55}">&nbsp;&nbsp;<input type="button" name="cpl" class="fb" value="{$view_reqbtncancel}" onClick="HideContent('plx'); changeclass_inact('b3');">
                                			</td>
                                		    </tr>
                                		</table>
                                	    </td>
                                	    <td align="right" valign="top" class="nopad"><a href="javascript:void(0)" onclick="HideContent('plx'); changeclass_inact('b3');">{$plist_txt54}</a></td>
                                	</tr>
                                	<tr>
                                	    <td colspan="2">
					        <div id="ploading" style="display: none;">
						    <table cellpadding=5 cellspacing=0 border=0 width="100%">
							<tr><td>{$adm_setgen79}</td><td>{$loading_gif}</td></tr>
						    </table>
						</div>
                                		<div id="playlistdiv" class="p5"></div>
                                	    </td>
                                	</tr>
                                    </table>
                                </form>
                        	{/if}
				</div>
				
				<div id="flx" style="display: none; border-top: 0px;" class="br2">
				    <table cellpadding="0" cellspacing="0" align="center" width="100%" border=0>
					<tr>
					    <td width="45%" align="center" class="p10">
					    {if $smarty.session.UID ne ""}
						{if $type ne "private" or $vuid eq $smarty.session.UID}
						    <a href="javascript:void(0);" class="" onClick="setclass_act2('fea_vid'); ReverseContentDisplay('featdiv');"><span id="fea_vid">{$view_feature}</span></a>
						{else}
						    <a>{$view_feature}</a>
						{/if}
					    {elseif $smarty.session.UID eq ""}
						<a href="{$base_url}/login?next={$ftype}/{$smarty.request.id}">{$snavlogin}</a>{$view_feature_login}
					    {/if}
					    </td>
					    <td width="45%" align="center" class="p10">
					    {if $smarty.session.UID ne ""}
						{if $smarty.session.UID eq $vuid}
						    <a href="javascript:void(0);" class="" onClick="setclass_act2('rep_vid'); ReverseContentDisplay('ownrepdiv');"><span id="rep_vid">{$view_report}</span></a>
						{else}
						    {if $type ne "private"}
							<a href="javascript:void(0);" class="" onClick="setclass_act2('rep_vid'); ReverseContentDisplay('repdiv');"><span id="rep_vid">{$view_report}</span></a>
						    {else}
							<a>{$view_report}</a>
						    {/if}
						{/if}
					    {elseif $smarty.session.UID eq ""}
						<a href="{$base_url}/login?next={$ftype}/{$smarty.request.id}">{$snavlogin}</a>{$view_report_login}
					    {/if}
					    </td>
					    <td align="right" valign="top"><a href="javascript:void(0)" onclick="HideContent('flx'); changeclass_inact('b4');">{$plist_txt54}</a></td>
					</tr>
				    </table>
				    {if $smarty.session.UID ne ""}
				    <div id="featdiv" style="display: none;">
				    <form id="featform">
					<table cellpadding=0 cellspacing=0 border=0 align="center" width="100%">
					    <tr>
						<td align="left" class="pl5" width="35%">{$view_feature_txt}</td>
						<td><input type="text" name="feat" class="ff width191" size="32"><input type="hidden" name="key1" value="{$key}"></td>
						<td align="left">
						{if $btn eq "baudio"}
						    <input type="button" name="feat_btn" class="fb" value="{$view_reqbtnsend}" onClick="thisDiv('yes'); ldiv('featdiv2'); feature_audio();">
						{elseif $btn eq "bimage"}
						    <input type="button" name="feat_btn" class="fb" value="{$view_reqbtnsend}" onClick="thisDiv('yes'); ldiv('featdiv2'); feature_image();">
						{elseif $btn eq "bvideo"}
						    <input type="button" name="feat_btn" class="fb" value="{$view_reqbtnsend}" onClick="thisDiv('yes'); ldiv('featdiv2'); feature();">
						{/if}
						    &nbsp;<input type="button" name="cancel_btn" class="fb" value="{$view_reqbtncancel}" onClick="setclass_act2('fea_vid'); HideContent('featdiv');">
						</td>
					    </tr>
					    <tr>
						<td colspan=3 align="left" class="p5">
						    <div id="floading" style="display: none;">
							<table cellpadding=5 cellspacing=0 border=0>
							    <tr><td>{$adm_setgen79}</td><td>{$loading_gif}</td></tr>
							</table>
						    </div>
						    <div id="featdiv2" class=""></div>
						</td>
					    </tr>
					</table>
				    </form>
				    </div>
				    
				    <div id="repdiv" style="display: none;">
				    <form id="repform">
					<table cellpadding=0 cellspacing=0 border=0 align="center" width="100%">
					    <tr>
						<td align="left" class="pl5" width="35%">{$view_inapp_txt}</td>
						<td class=""><input type="text" name="innap" class="ff width191" size="32"><input type="hidden" name="key" value="{$key}"></td>
						<td align="left">
						{if $btn eq "baudio"}
						    <input type="button" name="innap_btn" class="fb" value="{$view_reqbtnsend}" onClick="thisDiv('yes'); ldiv('repdiv2'); report_audio();">
						{elseif $btn eq "bimage"}
						    <input type="button" name="innap_btn" class="fb" value="{$view_reqbtnsend}" onClick="thisDiv('yes'); ldiv('repdiv2'); report_image();">
						{elseif $btn eq "bvideo"}
						    <input type="button" name="innap_btn" class="fb" value="{$view_reqbtnsend}" onClick="thisDiv('yes'); ldiv('repdiv2'); report();">
						{/if}
						    &nbsp;<input type="button" name="cancel_btn" class="fb" value="{$view_reqbtncancel}" onClick="setclass_act2('rep_vid'); HideContent('repdiv');">
						</td>
					    </tr>
					    <tr>
						<td colspan=3 align="left" class="">
						    <div id="loading2" style="display: none;">
							<table cellpadding=5 cellspacing=0 border=0>
							    <tr><td>{$adm_setgen79}</td><td>{$loading_gif}</td></tr>
							</table>
						    </div>
						    <div id="repdiv2" class="p5"></div>
						</td>
					    </tr>
					</table>
				    </form>
				    </div>
				    
				    <div id="ownrepdiv" style="display: none;">
					<hr>
					<table cellpadding=5 cellspacing=0 border=0 align="center" width="100%">
					    <tr>
						<td align=center>{$view_noreport}</td>
					    </tr>
					</table>
				    </div>
				    {/if}
				</div>
				</td>
			    </tr>
			</table>
<!-- END ACTIONS TABLE -->
