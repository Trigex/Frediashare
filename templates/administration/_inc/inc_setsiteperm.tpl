			<form id="sitepermform">
			    <fieldset>
				<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('sitepermdiv'); ReverseContentDisplay('sitepermtxt'); changeclass_act('set4');"><span id="set4">{$adm_setleg4}</span></a></legend>
				<div id="sitepermtxt" style="display: block;">{$adm_setleg3txt}</div>
				<div id="sitepermdiv" style="display: none;">
				<table cellpadding=2 cellspacing=0 border=0 align=left>
				    <tr><td align=left class="" width="140">{$adm_setgen143}</td>
                            		<td align="left" class="lp1">
					<select name="pcomm" class="selbox" onchange="ReverseContentDisplay('pc1'); ReverseContentDisplay('pc0');">
					    <option value="1" {if $profile_comments eq "1"}selected{/if}>{$adm_setgenenabled}</option>
					    <option value="0" {if $profile_comments eq "0"}selected{/if}>{$adm_setgendisabled}</option>
					</select>
                            		</td>
                            		<td width="60">
                            		    <div id="pc1" {if $profile_comments eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                            <div id="pc0" {if $profile_comments eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                        </td>
                            	    </tr>
                            	    
				    <tr><td align=left class="">{$adm_setcomm}</td>
                            		<td align="left" class="lp1">
					<select name="fcomm" class="selbox" onchange="ReverseContentDisplay('fc1'); ReverseContentDisplay('fc0');">
					    <option value="1" {if $file_comments eq "1"}selected{/if}>{$adm_setgenenabled}</option>
					    <option value="0" {if $file_comments eq "0"}selected{/if}>{$adm_setgendisabled}</option>
					</select>
                            		</td>
                            		<td>
                            		    <div id="fc1" {if $file_comments eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                            <div id="fc0" {if $file_comments eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                        </td>
                            	    </tr>
				    <tr><td align=left class="">{$adm_setcommrate}</td>
                            		<td align="left" class="lp1">
					<select name="fcommrate" class="selbox" onchange="ReverseContentDisplay('fcr1'); ReverseContentDisplay('fcr0');">
					    <option value="1" {if $comment_rating eq "1"}selected{/if}>{$adm_setgenenabled}</option>
					    <option value="0" {if $comment_rating eq "0"}selected{/if}>{$adm_setgendisabled}</option>
					</select>
                            		</td>
                            		<td>
                            		    <div id="fcr1" {if $comment_rating eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                            <div id="fcr0" {if $comment_rating eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                        </td>
                            	    </tr>
				    <tr><td align=left class="">{$adm_setfileresp}: </td>
                            		<td align="left" class="lp1">
					<select name="fresp" class="selbox" onchange="ReverseContentDisplay('fre1'); ReverseContentDisplay('fre0');">
					    <option value="1" {if $file_responses eq "1"}selected{/if}>{$adm_setgenenabled}</option>
					    <option value="0" {if $file_responses eq "0"}selected{/if}>{$adm_setgendisabled}</option>
					</select>
                            		</td>
                            		<td>
                            		    <div id="fre1" {if $file_responses eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                            <div id="fre0" {if $file_responses eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                        </td>
                            	    </tr>
                            	    
				    <tr><td align=left class="">{$adm_setbm}</td>
                            		<td align="left" class="lp1">
					<select name="fbm" class="selbox" onchange="ReverseContentDisplay('fbm1'); ReverseContentDisplay('fbm0');">
					    <option value="1" {if $file_bookmark eq "1"}selected{/if}>{$adm_setgenenabled}</option>
					    <option value="0" {if $file_bookmark eq "0"}selected{/if}>{$adm_setgendisabled}</option>
					</select>
                            		</td>
                            		<td>
                            		    <div id="fbm1" {if $file_bookmark eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                            <div id="fbm0" {if $file_bookmark eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                        </td>
                            	    </tr>
				    <tr><td align=left class="">{$adm_setemb}</td>
                            		<td align="left" class="lp1">
					<select name="femb" class="selbox" onchange="ReverseContentDisplay('fe1'); ReverseContentDisplay('fe0');">
					    <option value="1" {if $file_embed eq "1"}selected{/if}>{$adm_setgenenabled}</option>
					    <option value="0" {if $file_embed eq "0"}selected{/if}>{$adm_setgendisabled}</option>
					</select>
                            		</td>
                            		<td>
                            		    <div id="fe1" {if $file_embed eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                            <div id="fe0" {if $file_embed eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                        </td>
                            	    </tr>
                            	    
				    <tr><td align=left class="">{$adm_setvotes}</td>
                            		<td align="left" class="lp1">
					<select name="fvotes" class="selbox" onchange="ReverseContentDisplay('filerate'); ReverseContentDisplay('fr1'); ReverseContentDisplay('fr0');">
					    <option value="1"{if $file_ratings eq "1"}selected{/if}>{$adm_setgenenabled}</option>
					    <option value="0"{if $file_ratings eq "0"}selected{/if}>{$adm_setgendisabled}</option>
					</select>
                            		</td>
                            		<td>
                            		    <div id="fr1" {if $file_ratings eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                            <div id="fr0" {if $file_ratings eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                        </td>
                            	    </tr>
                            	    <tr>
                            		<td class="nopad"></td>
                            		<td class="nopad">
                            		    <div id="filerate" {if $file_ratings eq "1"}style="display: block;"{else}style="display: none;"{/if}>
                            			<table cellpadding="1" cellspacing="0" border=0>
                            			    <tr>
                            				<td class="pl4" width="5" valign="top"><input type="checkbox" name="ratesameip" {if $rating_sameip eq "1"}checked{/if}></td>
                            				<td class="pt2">{$adm_setgen48}</td>
                            			    </tr>
                            			</table>
                            		    </div>
                            		</td>
                            		<td class="nopad"></td>
                            	    </tr>
                            	    
				    <tr><td align=left class="">{$adm_setdown}</td>
                            		<td align="left" class="lp1">
					<select name="file_down" class="selbox" onchange="ReverseContentDisplay('filedown'); ReverseContentDisplay('fd1'); ReverseContentDisplay('fd0');">
					    <option value="1" {if $file_download eq "1"}selected{/if}">{$adm_setgenenabled}</option>
					    <option value="0" {if $file_download eq "0"}selected{/if}">{$adm_setgendisabled}</option>
					</select>
                            		</td>
                            		<td>
                            		    <div id="fd1" {if $file_download eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                            <div id="fd0" {if $file_download eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                        </td>
                            	    </tr>
                            	    
                            	    <tr>
                            		<td class="nopad"></td>
                            		<td class="nopad">
                            		<div id="filedown" {if $file_download eq "1"}style="display: block;"{else}style="display: none;"{/if}>
                            		    <table cellpadding="1" cellspacing="0" border=0 align="left"> 
                                                <tr>
                                                     <td class="pl4" width="5"><input type="checkbox" name="down_src" {if $file_download_src eq "1"}checked{/if}></td>
                                                     <td class="pt2">{$adm_setgen36}</td>
                                                </tr>
                                                <tr>
                                                     <td class="pl4" width="5"><input type="checkbox" name="down_conv" {if $file_download_conv eq "1"}checked{/if}></td>
                                                     <td class="pt2">{$adm_setgen37}</td>
                                                </tr>
                                                <tr>
                                                     <td class="pl4" width="5" valign="top"><input type="checkbox" name="down_guest" {if $file_download_guest eq "1"}checked{/if}></td>
                                                     <td class="pt2">{$adm_setgen37x}</td>
                                                </tr>
                                            </table>
                            		</div>
                            		</td>
                            		<td></td>
                            	    </tr>
                            	    
				    <tr><td colspan=3>&nbsp;</td></tr>
				    
				    <tr><td align=left class="">{$adm_setgen21}</td>
					<td align="left" class="lp1">
					<select name="audioup" class="selbox" onchange="ReverseContentDisplay('aup1'); ReverseContentDisplay('aup0');">
					    <option value="1" {if $audio_uploads eq "1"}selected{/if}>{$adm_setgenenabled}</option>
					    <option value="0" {if $audio_uploads eq "0"}selected{/if}>{$adm_setgendisabled}</option>
					</select>
					</td>
                            		<td>
                            		    <div id="aup1" {if $audio_uploads eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                            <div id="aup0" {if $audio_uploads eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                        </td>
				    </tr>
				    
				    <tr><td align=left class="">{$adm_setgen22}</td>
					<td align="left" class="lp1">
					<select name="imageup" class="selbox" onchange="ReverseContentDisplay('iup1'); ReverseContentDisplay('iup0');">
					    <option value="1" {if $image_uploads eq "1"}selected{/if}>{$adm_setgenenabled}</option>
					    <option value="0" {if $image_uploads eq "0"}selected{/if}>{$adm_setgendisabled}</option>
					</select>
					</td>
                            		<td>
                            		    <div id="iup1" {if $image_uploads eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                            <div id="iup0" {if $image_uploads eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                        </td>
				    </tr>
				    
				    <tr><td align=left class="">{$adm_setgen23}</td>
					<td align="left" class="lp1">
					<select name="videoup" class="selbox" onchange="ReverseContentDisplay('vup1'); ReverseContentDisplay('vup0');">
					    <option value="1" {if $video_uploads eq "1"}selected{/if}>{$adm_setgenenabled}</option>
					    <option value="0" {if $video_uploads eq "0"}selected{/if}>{$adm_setgendisabled}</option>
					</select>
					</td>
                            		<td>
                            		    <div id="vup1" {if $video_uploads eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                            <div id="vup0" {if $video_uploads eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                        </td>
				    </tr>
				    <tr><td colspan=3>&nbsp;</td></tr>
				    
				    <tr><td align=left class="">{$adm_setgen18}</td>
					<td align="left" class="lp1">
					<select name="audioapp" class="selbox" onchange="ReverseContentDisplay('auap1'); ReverseContentDisplay('auap0');">
					    <option value="1" {if $audio_approval eq "1"}selected{/if}>{$adm_setgenenabled}</option>
					    <option value="0" {if $audio_approval eq "0"}selected{/if}>{$adm_setgendisabled}</option>
					</select>
					</td>
                            		<td>
                            		    <div id="auap1" {if $audio_approval eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                            <div id="auap0" {if $audio_approval eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                        </td>
				    </tr>
				    
				    <tr><td align=left class="">{$adm_setgen19}</td>
					<td align="left" class="lp1">
					<select name="imageapp" class="selbox" onchange="ReverseContentDisplay('imap1'); ReverseContentDisplay('imap0');">
					    <option value="1" {if $image_approval eq "1"}selected{/if}>{$adm_setgenenabled}</option>
					    <option value="0" {if $image_approval eq "0"}selected{/if}>{$adm_setgendisabled}</option>
					</select>
					</td>
                            		<td>
                            		    <div id="imap1" {if $image_approval eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                            <div id="imap0" {if $image_approval eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                        </td>
				    </tr>
				    
				    <tr><td align=left class="">{$adm_setgen20}</td>
					<td align="left" class="lp1">
					<select name="videoapp" class="selbox" onchange="ReverseContentDisplay('viap1'); ReverseContentDisplay('viap0');">
					    <option value="1" {if $video_approval eq "1"}selected{/if}>{$adm_setgenenabled}</option>
					    <option value="0" {if $video_approval eq "0"}selected{/if}>{$adm_setgendisabled}</option>
					</select>
					</td>
                            		<td>
                            		    <div id="viap1" {if $video_approval eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                            <div id="viap0" {if $video_approval eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                        </td>
				    </tr>
				    <tr>
                                        <td colspan="3" style="padding: 10px 0px 0px 0px;">
                                            <table cellpadding="2" cellspacing="0" align="left" border=0>
                                                <tr>
                                                    <td align="left" width="10"><input type="button" name="savesitepermbtn" class="fb" value="{$adm_setgensave}" onclick="setsiteperm_settings();"></td>
                                                    <td align="left" width="300"><input type="button" name="savesitepermcancel" class="fb" value="{$adm_playcancelbtn}" onclick="ReverseContentDisplay('sitepermdiv'); ReverseContentDisplay('sitepermtxt'); changeclass_act('set4');"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" align="left"><div id="setsitepermresp"></div></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
				</table>
				</div>
			    </fieldset>
			</form>
