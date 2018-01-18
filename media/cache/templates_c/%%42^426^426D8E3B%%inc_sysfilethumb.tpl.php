<?php /* Smarty version 2.6.26, created on 2009-11-10 15:25:17
         compiled from administration/_inc/inc_sysfilethumb.tpl */ ?>
		    <fieldset>
			<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('thumb_set'); ReverseContentDisplay('thumb_settxt'); changeclass_act('sys4');"><span id="sys4" <?php if ($this->_tpl_vars['msg'] != "" || $this->_tpl_vars['err'] != ""): ?>class="act"<?php endif; ?>><?php echo $this->_tpl_vars['adm_setsysset4']; ?>
</span></a></legend>
			<div id="thumb_settxt" <?php if ($this->_tpl_vars['msg'] == "" && $this->_tpl_vars['err'] == ""): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?> align="center"><?php echo $this->_tpl_vars['adm_setgen83']; ?>
</div>
			<div id="thumb_set" <?php if ($this->_tpl_vars['msg'] == "" && $this->_tpl_vars['err'] == ""): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>>
			<form name="thumbform" method="post" action="" enctype="multipart/form-data">
			<table cellpadding=2 cellspacing=0 border=0 align=left width="100%">
                            <tr>
                        	<td colspan="3" align="left"><?php echo $this->_tpl_vars['adm_ffm12']; ?>
</td>
                            </tr>
			    <tr>
				<td align=left class="" style="width: 53%;"><?php echo $this->_tpl_vars['adm_ffm7']; ?>
</td>
                                <td align="left" class="lp1">
                                    <select name="mthumb" class="selbox" onchange="ReverseContentDisplay('d1'); ReverseContentDisplay('d2'); ReverseContentDisplay('d3'); ReverseContentDisplay('d4'); ReverseContentDisplay('d5'); ReverseContentDisplay('d6'); ReverseContentDisplay('d7'); ReverseContentDisplay('d8'); ReverseContentDisplay('th1'); ReverseContentDisplay('th0');">
                                        <option value="1" <?php if ($this->_tpl_vars['thumb_module'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                        <option value="0" <?php if ($this->_tpl_vars['thumb_module'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                    </select>
                                </td>
                                <td width="70">                                                                                                                                                                
                                    <div id="th1" <?php if ($this->_tpl_vars['thumb_module'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                    <div id="th0" <?php if ($this->_tpl_vars['thumb_module'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                </td>
                            </tr>
                            <tr>
                        	<td align=left class=""><div id="d1" <?php if ($this->_tpl_vars['thumb_module'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><?php echo $this->_tpl_vars['adm_ffm8']; ?>
</div></td>
                        	<td align="left" class="lp1"><div id="d2" <?php if ($this->_tpl_vars['thumb_module'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><input type="text" style="width: 30px;" class="ff" name="mthumbnr" size="3" value="<?php if ($_REQUEST['mthumbnr'] != ""): ?><?php echo $_REQUEST['mthumbnr']; ?>
<?php else: ?><?php echo $this->_tpl_vars['thumb_nr']; ?>
<?php endif; ?>"></div></td>
                        	<td>&nbsp;</td>
                            </tr>
                            <tr>
                        	<td align=left class=""><div id="d3" <?php if ($this->_tpl_vars['thumb_module'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><?php echo $this->_tpl_vars['adm_ffm9']; ?>
</div></td>
                        	<td align="left" class="lp1"><div id="d4" <?php if ($this->_tpl_vars['thumb_module'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><input type="text" style="width: 30px;" class="ff" name="mthumbms" size="3" value="<?php if ($_REQUEST['mthumbms'] != ""): ?><?php echo $_REQUEST['mthumbms']; ?>
<?php else: ?><?php echo $this->_tpl_vars['thumb_delay']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['adm_ffm10']; ?>
</div></td>
                        	<td>&nbsp;</td>
                            </tr>
                            <tr>
                        	<td align=left class=""><div id="d5" <?php if ($this->_tpl_vars['thumb_module'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><?php echo $this->_tpl_vars['adm_ffm13']; ?>
</div></td>
                        	<td align="left" class="lp1"><div id="d6" <?php if ($this->_tpl_vars['thumb_module'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><input type="checkbox" id="c1" name="c1" value="cons" <?php if ($this->_tpl_vars['thumb_order'] == 'cons'): ?>checked<?php endif; ?> onclick="document.getElementById('c2').checked = false;"></div></td>
                        	<td>&nbsp;</td>
                            </tr>
                            <tr>
                        	<td align=left class=""><div id="d7" <?php if ($this->_tpl_vars['thumb_module'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><?php echo $this->_tpl_vars['adm_ffm14']; ?>
</div></td>
                        	<td align="left" class="lp1"><div id="d8" <?php if ($this->_tpl_vars['thumb_module'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><input type="checkbox" id="c2" name="c2" value="rnd" <?php if ($this->_tpl_vars['thumb_order'] == 'rnd'): ?>checked<?php endif; ?> onclick="document.getElementById('c1').checked = false;"></div></td>
                        	<td>&nbsp;</td>
                            </tr>
                            <tr>
                        	<td colspan="3"><hr></td>
                            </tr>
			    <tr>
				<td align=left><?php echo $this->_tpl_vars['adm_ffm3']; ?>
</td>
				<td align="left" class="lp1">
				    <select name="thumbgrab" class="selbox">
					<option value="ffmpeg" <?php if ($this->_tpl_vars['thumb_method'] == 'ffmpeg'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_ffm4']; ?>
</option>
					<option value="ffmpeg-php" <?php if ($this->_tpl_vars['thumb_method'] == "ffmpeg-php"): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_ffm5']; ?>
</option>
					<option value="mplayer" <?php if ($this->_tpl_vars['thumb_method'] == 'mplayer'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_ffm6']; ?>
</option>
				    </select>
				</td>
				<td>&nbsp;</td>
			    </tr>
			    <tr>
				<td align=left><?php echo $this->_tpl_vars['adm_setsysthumb10']; ?>
</td>
				<td align="left" class="lp1">
				    <select name="thumbdef" class="selbox">
					<option value="1" <?php if ($this->_tpl_vars['def_thumb'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setsysthumb11']; ?>
</option>
					<option value="2" <?php if ($this->_tpl_vars['def_thumb'] == '2'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setsysthumb12']; ?>
</option>
					<option value="3" <?php if ($this->_tpl_vars['def_thumb'] == '3'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setsysthumb13']; ?>
</option>
					<option value="4" <?php if ($this->_tpl_vars['def_thumb'] == '4'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setsysthumb14']; ?>
</option>
				    </select>
				</td>
				<td>&nbsp;</td>
			    </tr>
			    <tr>
				<td align=left><?php echo $this->_tpl_vars['adm_tmbtxt1']; ?>
</td>
				<td class="lp1">
				    <table cellpadding="0" cellspacing="0">
					<tr>
					    <td><input type="text" name="thbg_col" value="<?php if ($_REQUEST['thbg_col'] == ""): ?><?php echo $this->_tpl_vars['thumb_bg']; ?>
<?php else: ?><?php echo $_REQUEST['thbg_col']; ?>
<?php endif; ?>" class="cp" size="10"></td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr><td align=left><?php echo $this->_tpl_vars['adm_setsysthumb7']; ?>
</td>
				<td align="left" class="lp1" colspan=2>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="text" style="width: 30px;" name="thumbw" class="ff" value="<?php if ($_REQUEST['thumbw'] != ""): ?><?php echo $_REQUEST['thumbw']; ?>
<?php else: ?><?php echo $this->_tpl_vars['img_max_width']; ?>
<?php endif; ?>" size="3"><?php echo $this->_tpl_vars['adm_setsysthumb2']; ?>
</td>
					    <td width="20">&nbsp;</td>
					    <td><input type="text" style="width: 30px;" name="thumbh" class="ff" value="<?php if ($_REQUEST['thumbh'] != ""): ?><?php echo $_REQUEST['thumbh']; ?>
<?php else: ?><?php echo $this->_tpl_vars['img_max_height']; ?>
<?php endif; ?>" size="3"><?php echo $this->_tpl_vars['adm_setsysthumb3']; ?>
</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr><td align=left"><?php echo $this->_tpl_vars['adm_setsysthumb1']; ?>
</td>
				<td align="left" class="lp1" colspan=2>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="text" style="width: 30px;" name="avatarw" class="ff" value="<?php if ($_REQUEST['avatarw'] != ""): ?><?php echo $_REQUEST['avatarw']; ?>
<?php else: ?><?php echo $this->_tpl_vars['avatar_width']; ?>
<?php endif; ?>" size="3"><?php echo $this->_tpl_vars['adm_setsysthumb2']; ?>
</td>
					    <td width="20">&nbsp;</td>
					    <td><input type="text" style="width: 30px;" name="avatarh" class="ff" value="<?php if ($_REQUEST['avatarh'] != ""): ?><?php echo $_REQUEST['avatarh']; ?>
<?php else: ?><?php echo $this->_tpl_vars['avatar_height']; ?>
<?php endif; ?>" size="3"><?php echo $this->_tpl_vars['adm_setsysthumb3']; ?>
</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr><td align=left width="220"><?php echo $this->_tpl_vars['adm_setsysthumb6']; ?>
</td>
				<td align="left" class="lp1" colspan=2>
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="text" style="width: 30px;" name="categw" class="ff" value="<?php if ($_REQUEST['categw'] != ""): ?><?php echo $_REQUEST['categw']; ?>
<?php else: ?><?php echo $this->_tpl_vars['categwidth']; ?>
<?php endif; ?>" size="3"><?php echo $this->_tpl_vars['adm_setsysthumb2']; ?>
</td>
					    <td width="20">&nbsp;</td>
					    <td><input type="text" style="width: 30px;" name="categh" class="ff" value="<?php if ($_REQUEST['categh'] != ""): ?><?php echo $_REQUEST['categh']; ?>
<?php else: ?><?php echo $this->_tpl_vars['categheight']; ?>
<?php endif; ?>" size="3"><?php echo $this->_tpl_vars['adm_setsysthumb3']; ?>
</td>					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td align="left"><?php echo $this->_tpl_vars['adm_setsysthumb16']; ?>
</td>
				<td align="left" class="pl4"><input type="checkbox" name="setvideoth" <?php if ($this->_tpl_vars['allow_video_thumbs'] == '1'): ?>checked<?php endif; ?>></td>
				<td>&nbsp;</td>
			    </tr>
			    <tr>
				<td align="left"><?php echo $this->_tpl_vars['adm_setsysthumb15']; ?>
</td>
				<td align="left" class="pl4"><input type="checkbox" name="setaudioth" <?php if ($this->_tpl_vars['allow_audio_thumbs'] == '1'): ?>checked<?php endif; ?>></td>
				<td>&nbsp;</td>
			    </tr>
			    <tr>
				<td colspan=3 class="grey" style="padding-top: 20px;">
				    <table cellpadding="5" cellspacing="0" border=0 align=center>
					<tr>
					    <td width="<?php echo $this->_tpl_vars['avatar_width']; ?>
" height="<?php echo $this->_tpl_vars['avatar_height']; ?>
">
						<img src="<?php echo $this->_tpl_vars['usrimg_url']; ?>
/default.gif" width="<?php echo $this->_tpl_vars['avatar_width']; ?>
" height="<?php echo $this->_tpl_vars['avatar_height']; ?>
" alt="<?php echo $this->_tpl_vars['adm_setsysthumb4']; ?>
" boder="0">
					    </td>
					    <td valign="top">
						<table cellpadding="3" cellspacing="0" border=0>
						    <tr>
							<td colspan=2><?php echo $this->_tpl_vars['adm_setsysthumb4']; ?>
</td>
						    </tr>
						    <tr>
							<td colspan=2><input type="file" name="audioav" class="ff" id="file" size="20"></td>
						    </tr>
						    <tr>
							<td colspan=2><?php echo $this->_tpl_vars['adm_setsysthumb5']; ?>
</td>
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
					    <td width="<?php echo $this->_tpl_vars['img_max_width']; ?>
" height="<?php echo $this->_tpl_vars['img_max_height']; ?>
">
						<img src="<?php echo $this->_tpl_vars['img_url']; ?>
/audio.gif" width="<?php echo $this->_tpl_vars['img_max_width']; ?>
" height="<?php echo $this->_tpl_vars['img_max_height']; ?>
" alt="<?php echo $this->_tpl_vars['adm_setsysthumb8']; ?>
" boder="0">
					    </td>
					    <td valign="top">
						<table cellpadding="3" cellspacing="0" border=0>
						    <tr>
							<td colspan=2><?php echo $this->_tpl_vars['adm_setsysthumb8']; ?>
</td>
						    </tr>
						    <tr>
							<td colspan=2><input type="file" name="audioth" class="ff" id="file" size="20"></td>
						    </tr>
						    <tr>
							<td colspan=2><?php echo $this->_tpl_vars['adm_setsysthumb9']; ?>
</td>
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
					    <td width="<?php echo $this->_tpl_vars['img_max_width']; ?>
" height="<?php echo $this->_tpl_vars['img_max_height']; ?>
">
						<img src="<?php echo $this->_tpl_vars['img_url']; ?>
/convertinga.gif" width="<?php echo $this->_tpl_vars['img_max_width']; ?>
" height="<?php echo $this->_tpl_vars['img_max_height']; ?>
" alt="<?php echo $this->_tpl_vars['adm_setsysthumb8']; ?>
" boder="0">
					    </td>
					    <td valign="top">
						<table cellpadding="3" cellspacing="0" border=0>
						    <tr>
							<td colspan=2><?php echo $this->_tpl_vars['adm_aconvtxt1']; ?>
</td>
						    </tr>
						    <tr>
							<td colspan=2><input type="file" name="aconvth" class="ff" id="file" size="20"></td>
						    </tr>
						    <tr>
							<td colspan=2><?php echo $this->_tpl_vars['adm_aconvtxt2']; ?>
</td>
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
					    <td width="<?php echo $this->_tpl_vars['img_max_width']; ?>
" height="<?php echo $this->_tpl_vars['img_max_height']; ?>
">
						<img src="<?php echo $this->_tpl_vars['img_url']; ?>
/converting.gif" width="<?php echo $this->_tpl_vars['img_max_width']; ?>
" height="<?php echo $this->_tpl_vars['img_max_height']; ?>
" alt="<?php echo $this->_tpl_vars['adm_setsysthumb8']; ?>
" boder="0">
					    </td>
					    <td valign="top">
						<table cellpadding="3" cellspacing="0" border=0>
						    <tr>
							<td colspan=2><?php echo $this->_tpl_vars['adm_vconvtxt1']; ?>
</td>
						    </tr>
						    <tr>
							<td colspan=2><input type="file" name="vconvth" class="ff" id="file" size="20"></td>
						    </tr>
						    <tr>
							<td colspan=2><?php echo $this->_tpl_vars['adm_vconvtxt2']; ?>
</td>
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
                                            <td align="left" width="10"><input type="submit" name="save_sys" class="fb" value="<?php echo $this->_tpl_vars['adm_setgensave']; ?>
"></td>
                                            <td align="left" width="300"><input type="button" name="cancelbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_playcancelbtn']; ?>
" onclick="ReverseContentDisplay('thumb_set'); ReverseContentDisplay('thumb_settxt'); changeclass_act('sys4');"></td>
                                        </tr>
                                    </table>
                                </td>
			    </tr>
			</table>
			</form>
			</div>
		    </fieldset>
		    <script language="JavaScript" src="<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/scripts/jscolor.js" type="text/javascript"></script>