<?php /* Smarty version 2.6.26, created on 2009-11-10 15:24:21
         compiled from administration/_inc/inc_setsiteperm.tpl */ ?>
			<form id="sitepermform">
			    <fieldset>
				<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('sitepermdiv'); ReverseContentDisplay('sitepermtxt'); changeclass_act('set4');"><span id="set4"><?php echo $this->_tpl_vars['adm_setleg4']; ?>
</span></a></legend>
				<div id="sitepermtxt" style="display: block;"><?php echo $this->_tpl_vars['adm_setleg3txt']; ?>
</div>
				<div id="sitepermdiv" style="display: none;">
				<table cellpadding=2 cellspacing=0 border=0 align=left>
				    <tr><td align=left class="" width="140"><?php echo $this->_tpl_vars['adm_setgen143']; ?>
</td>
                            		<td align="left" class="lp1">
					<select name="pcomm" class="selbox" onchange="ReverseContentDisplay('pc1'); ReverseContentDisplay('pc0');">
					    <option value="1" <?php if ($this->_tpl_vars['profile_comments'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
					    <option value="0" <?php if ($this->_tpl_vars['profile_comments'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
					</select>
                            		</td>
                            		<td width="60">
                            		    <div id="pc1" <?php if ($this->_tpl_vars['profile_comments'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                            <div id="pc0" <?php if ($this->_tpl_vars['profile_comments'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                        </td>
                            	    </tr>
                            	    
				    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setcomm']; ?>
</td>
                            		<td align="left" class="lp1">
					<select name="fcomm" class="selbox" onchange="ReverseContentDisplay('fc1'); ReverseContentDisplay('fc0');">
					    <option value="1" <?php if ($this->_tpl_vars['file_comments'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
					    <option value="0" <?php if ($this->_tpl_vars['file_comments'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
					</select>
                            		</td>
                            		<td>
                            		    <div id="fc1" <?php if ($this->_tpl_vars['file_comments'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                            <div id="fc0" <?php if ($this->_tpl_vars['file_comments'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                        </td>
                            	    </tr>
				    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setcommrate']; ?>
</td>
                            		<td align="left" class="lp1">
					<select name="fcommrate" class="selbox" onchange="ReverseContentDisplay('fcr1'); ReverseContentDisplay('fcr0');">
					    <option value="1" <?php if ($this->_tpl_vars['comment_rating'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
					    <option value="0" <?php if ($this->_tpl_vars['comment_rating'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
					</select>
                            		</td>
                            		<td>
                            		    <div id="fcr1" <?php if ($this->_tpl_vars['comment_rating'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                            <div id="fcr0" <?php if ($this->_tpl_vars['comment_rating'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                        </td>
                            	    </tr>
				    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setfileresp']; ?>
: </td>
                            		<td align="left" class="lp1">
					<select name="fresp" class="selbox" onchange="ReverseContentDisplay('fre1'); ReverseContentDisplay('fre0');">
					    <option value="1" <?php if ($this->_tpl_vars['file_responses'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
					    <option value="0" <?php if ($this->_tpl_vars['file_responses'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
					</select>
                            		</td>
                            		<td>
                            		    <div id="fre1" <?php if ($this->_tpl_vars['file_responses'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                            <div id="fre0" <?php if ($this->_tpl_vars['file_responses'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                        </td>
                            	    </tr>
                            	    
				    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setbm']; ?>
</td>
                            		<td align="left" class="lp1">
					<select name="fbm" class="selbox" onchange="ReverseContentDisplay('fbm1'); ReverseContentDisplay('fbm0');">
					    <option value="1" <?php if ($this->_tpl_vars['file_bookmark'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
					    <option value="0" <?php if ($this->_tpl_vars['file_bookmark'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
					</select>
                            		</td>
                            		<td>
                            		    <div id="fbm1" <?php if ($this->_tpl_vars['file_bookmark'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                            <div id="fbm0" <?php if ($this->_tpl_vars['file_bookmark'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                        </td>
                            	    </tr>
				    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setemb']; ?>
</td>
                            		<td align="left" class="lp1">
					<select name="femb" class="selbox" onchange="ReverseContentDisplay('fe1'); ReverseContentDisplay('fe0');">
					    <option value="1" <?php if ($this->_tpl_vars['file_embed'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
					    <option value="0" <?php if ($this->_tpl_vars['file_embed'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
					</select>
                            		</td>
                            		<td>
                            		    <div id="fe1" <?php if ($this->_tpl_vars['file_embed'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                            <div id="fe0" <?php if ($this->_tpl_vars['file_embed'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                        </td>
                            	    </tr>
                            	    
				    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setvotes']; ?>
</td>
                            		<td align="left" class="lp1">
					<select name="fvotes" class="selbox" onchange="ReverseContentDisplay('filerate'); ReverseContentDisplay('fr1'); ReverseContentDisplay('fr0');">
					    <option value="1"<?php if ($this->_tpl_vars['file_ratings'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
					    <option value="0"<?php if ($this->_tpl_vars['file_ratings'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
					</select>
                            		</td>
                            		<td>
                            		    <div id="fr1" <?php if ($this->_tpl_vars['file_ratings'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                            <div id="fr0" <?php if ($this->_tpl_vars['file_ratings'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                        </td>
                            	    </tr>
                            	    <tr>
                            		<td class="nopad"></td>
                            		<td class="nopad">
                            		    <div id="filerate" <?php if ($this->_tpl_vars['file_ratings'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>>
                            			<table cellpadding="1" cellspacing="0" border=0>
                            			    <tr>
                            				<td class="pl4" width="5" valign="top"><input type="checkbox" name="ratesameip" <?php if ($this->_tpl_vars['rating_sameip'] == '1'): ?>checked<?php endif; ?>></td>
                            				<td class="pt2"><?php echo $this->_tpl_vars['adm_setgen48']; ?>
</td>
                            			    </tr>
                            			</table>
                            		    </div>
                            		</td>
                            		<td class="nopad"></td>
                            	    </tr>
                            	    
				    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setdown']; ?>
</td>
                            		<td align="left" class="lp1">
					<select name="file_down" class="selbox" onchange="ReverseContentDisplay('filedown'); ReverseContentDisplay('fd1'); ReverseContentDisplay('fd0');">
					    <option value="1" <?php if ($this->_tpl_vars['file_download'] == '1'): ?>selected<?php endif; ?>"><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
					    <option value="0" <?php if ($this->_tpl_vars['file_download'] == '0'): ?>selected<?php endif; ?>"><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
					</select>
                            		</td>
                            		<td>
                            		    <div id="fd1" <?php if ($this->_tpl_vars['file_download'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                            <div id="fd0" <?php if ($this->_tpl_vars['file_download'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                        </td>
                            	    </tr>
                            	    
                            	    <tr>
                            		<td class="nopad"></td>
                            		<td class="nopad">
                            		<div id="filedown" <?php if ($this->_tpl_vars['file_download'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>>
                            		    <table cellpadding="1" cellspacing="0" border=0 align="left"> 
                                                <tr>
                                                     <td class="pl4" width="5"><input type="checkbox" name="down_src" <?php if ($this->_tpl_vars['file_download_src'] == '1'): ?>checked<?php endif; ?>></td>
                                                     <td class="pt2"><?php echo $this->_tpl_vars['adm_setgen36']; ?>
</td>
                                                </tr>
                                                <tr>
                                                     <td class="pl4" width="5"><input type="checkbox" name="down_conv" <?php if ($this->_tpl_vars['file_download_conv'] == '1'): ?>checked<?php endif; ?>></td>
                                                     <td class="pt2"><?php echo $this->_tpl_vars['adm_setgen37']; ?>
</td>
                                                </tr>
                                                <tr>
                                                     <td class="pl4" width="5" valign="top"><input type="checkbox" name="down_guest" <?php if ($this->_tpl_vars['file_download_guest'] == '1'): ?>checked<?php endif; ?>></td>
                                                     <td class="pt2"><?php echo $this->_tpl_vars['adm_setgen37x']; ?>
</td>
                                                </tr>
                                            </table>
                            		</div>
                            		</td>
                            		<td></td>
                            	    </tr>
                            	    
				    <tr><td colspan=3>&nbsp;</td></tr>
				    
				    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen21']; ?>
</td>
					<td align="left" class="lp1">
					<select name="audioup" class="selbox" onchange="ReverseContentDisplay('aup1'); ReverseContentDisplay('aup0');">
					    <option value="1" <?php if ($this->_tpl_vars['audio_uploads'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
					    <option value="0" <?php if ($this->_tpl_vars['audio_uploads'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
					</select>
					</td>
                            		<td>
                            		    <div id="aup1" <?php if ($this->_tpl_vars['audio_uploads'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                            <div id="aup0" <?php if ($this->_tpl_vars['audio_uploads'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                        </td>
				    </tr>
				    
				    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen22']; ?>
</td>
					<td align="left" class="lp1">
					<select name="imageup" class="selbox" onchange="ReverseContentDisplay('iup1'); ReverseContentDisplay('iup0');">
					    <option value="1" <?php if ($this->_tpl_vars['image_uploads'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
					    <option value="0" <?php if ($this->_tpl_vars['image_uploads'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
					</select>
					</td>
                            		<td>
                            		    <div id="iup1" <?php if ($this->_tpl_vars['image_uploads'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                            <div id="iup0" <?php if ($this->_tpl_vars['image_uploads'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                        </td>
				    </tr>
				    
				    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen23']; ?>
</td>
					<td align="left" class="lp1">
					<select name="videoup" class="selbox" onchange="ReverseContentDisplay('vup1'); ReverseContentDisplay('vup0');">
					    <option value="1" <?php if ($this->_tpl_vars['video_uploads'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
					    <option value="0" <?php if ($this->_tpl_vars['video_uploads'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
					</select>
					</td>
                            		<td>
                            		    <div id="vup1" <?php if ($this->_tpl_vars['video_uploads'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                            <div id="vup0" <?php if ($this->_tpl_vars['video_uploads'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                        </td>
				    </tr>
				    <tr><td colspan=3>&nbsp;</td></tr>
				    
				    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen18']; ?>
</td>
					<td align="left" class="lp1">
					<select name="audioapp" class="selbox" onchange="ReverseContentDisplay('auap1'); ReverseContentDisplay('auap0');">
					    <option value="1" <?php if ($this->_tpl_vars['audio_approval'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
					    <option value="0" <?php if ($this->_tpl_vars['audio_approval'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
					</select>
					</td>
                            		<td>
                            		    <div id="auap1" <?php if ($this->_tpl_vars['audio_approval'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                            <div id="auap0" <?php if ($this->_tpl_vars['audio_approval'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                        </td>
				    </tr>
				    
				    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen19']; ?>
</td>
					<td align="left" class="lp1">
					<select name="imageapp" class="selbox" onchange="ReverseContentDisplay('imap1'); ReverseContentDisplay('imap0');">
					    <option value="1" <?php if ($this->_tpl_vars['image_approval'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
					    <option value="0" <?php if ($this->_tpl_vars['image_approval'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
					</select>
					</td>
                            		<td>
                            		    <div id="imap1" <?php if ($this->_tpl_vars['image_approval'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                            <div id="imap0" <?php if ($this->_tpl_vars['image_approval'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                        </td>
				    </tr>
				    
				    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen20']; ?>
</td>
					<td align="left" class="lp1">
					<select name="videoapp" class="selbox" onchange="ReverseContentDisplay('viap1'); ReverseContentDisplay('viap0');">
					    <option value="1" <?php if ($this->_tpl_vars['video_approval'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
					    <option value="0" <?php if ($this->_tpl_vars['video_approval'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
					</select>
					</td>
                            		<td>
                            		    <div id="viap1" <?php if ($this->_tpl_vars['video_approval'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                            <div id="viap0" <?php if ($this->_tpl_vars['video_approval'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                        </td>
				    </tr>
				    <tr>
                                        <td colspan="3" style="padding: 10px 0px 0px 0px;">
                                            <table cellpadding="2" cellspacing="0" align="left" border=0>
                                                <tr>
                                                    <td align="left" width="10"><input type="button" name="savesitepermbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setgensave']; ?>
" onclick="setsiteperm_settings();"></td>
                                                    <td align="left" width="300"><input type="button" name="savesitepermcancel" class="fb" value="<?php echo $this->_tpl_vars['adm_playcancelbtn']; ?>
" onclick="ReverseContentDisplay('sitepermdiv'); ReverseContentDisplay('sitepermtxt'); changeclass_act('set4');"></td>
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