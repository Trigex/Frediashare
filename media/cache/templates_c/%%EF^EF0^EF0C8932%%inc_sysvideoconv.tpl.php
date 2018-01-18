<?php /* Smarty version 2.6.26, created on 2009-11-10 15:25:17
         compiled from administration/_inc/inc_sysvideoconv.tpl */ ?>
		    <fieldset>
			<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('video_conv'); ReverseContentDisplay('video_convtxt'); changeclass_act('sys2');"><span id="sys2"><?php echo $this->_tpl_vars['adm_setsysset2']; ?>
</span></a></legend>
			<div id="video_convtxt" style="display: block;" align="center"><?php echo $this->_tpl_vars['adm_setgen81']; ?>
</div>
			<div id="video_conv" style="display: none;">
			<form id="videoconvform">
			<table cellpadding=2 cellspacing=0 border=0 align=left width="100%">
			    <tr>
				<td class="" width="30%"><?php echo $this->_tpl_vars['adm_convtool']; ?>
</td>
				<td>
				    <select name="conv_tool" class="selbox">
					<option value="mencoder" <?php if ($this->_tpl_vars['conv_tool'] == 'mencoder'): ?>selected<?php endif; ?>>MEncoder</option>
					<option value="ffmpeg" <?php if ($this->_tpl_vars['conv_tool'] == 'ffmpeg'): ?>selected<?php endif; ?>>FFmpeg</option>
				    </select>
				</td>
			    </tr>
			    <tr><td class="" width="30%"><?php echo $this->_tpl_vars['adm_setsysvideo1']; ?>
</td><td><input type="text" name="menpath" class="ff" size="35" value="<?php if ($_REQUEST['menpath'] != ""): ?><?php echo $_REQUEST['menpath']; ?>
<?php else: ?><?php echo $this->_tpl_vars['path_mencoder']; ?>
<?php endif; ?>"></td></tr>
			    <tr><td class=""><?php echo $this->_tpl_vars['adm_setsysvideo2']; ?>
</td><td><input type="text" name="mplpath" class="ff" size="35" value="<?php if ($_REQUEST['mplpath'] != ""): ?><?php echo $_REQUEST['mplpath']; ?>
<?php else: ?><?php echo $this->_tpl_vars['path_mplayer']; ?>
<?php endif; ?>"></td></tr>
			    <tr><td class="" width="30%"><?php echo $this->_tpl_vars['adm_ffm1']; ?>
</td><td><input type="text" name="ffmpath" class="ff" size="35" value="<?php if ($_REQUEST['ffmpath'] != ""): ?><?php echo $_REQUEST['ffmpath']; ?>
<?php else: ?><?php echo $this->_tpl_vars['path_ffmpeg']; ?>
<?php endif; ?>"></td></tr>
			    <tr><td class=""><?php echo $this->_tpl_vars['adm_setsysvideo3']; ?>
</td><td><input type="text" name="flvpath" class="ff" size="35" value="<?php if ($_REQUEST['flvpath'] != ""): ?><?php echo $_REQUEST['flvpath']; ?>
<?php else: ?><?php echo $this->_tpl_vars['path_flvtool2']; ?>
<?php endif; ?>"></td></tr>
			    <tr><td class=""><?php echo $this->_tpl_vars['adm_setsysvideo4']; ?>
</td><td><input type="text" name="phppath" class="ff" size="35" value="<?php if ($_REQUEST['phppath'] != ""): ?><?php echo $_REQUEST['phppath']; ?>
<?php else: ?><?php echo $this->_tpl_vars['path_php']; ?>
<?php endif; ?>"></td></tr>
			    <tr><td class=""><?php echo $this->_tpl_vars['adm_setsysvideo51']; ?>
</td><td><input type="text" name="abitrate" class="ff" size="5" value="<?php if ($_REQUEST['abitrate'] != ""): ?><?php echo $_REQUEST['abitrate']; ?>
<?php else: ?><?php echo $this->_tpl_vars['abrate']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['adm_setsysaudio3']; ?>
</td></tr>
			    <tr><td></td><td><?php echo $this->_tpl_vars['adm_setsysaudio4']; ?>
</td></tr>
			    <tr><td class=""><?php echo $this->_tpl_vars['adm_setsysvideo5']; ?>
</td><td><input type="text" name="vbitrate" class="ff" size="5" value="<?php if ($_REQUEST['vbitrate'] != ""): ?><?php echo $_REQUEST['vbitrate']; ?>
<?php else: ?><?php echo $this->_tpl_vars['vbrate']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['adm_setsysaudio3']; ?>
</td></tr>
			    <tr><td></td><td><?php echo $this->_tpl_vars['adm_setsysvideo6']; ?>
</td></tr>
			    <tr><td class=""><?php echo $this->_tpl_vars['adm_setsysaudio5']; ?>
</td><td><input type="text" name="sbitrate" class="ff" size="5" value="<?php if ($_REQUEST['sbitrate'] != ""): ?><?php echo $_REQUEST['sbitrate']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sbrate']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['adm_setsysvideo7']; ?>
</td></tr>
			    <tr><td></td><td><?php echo $this->_tpl_vars['adm_setsysvideo8']; ?>
</td></tr>
			    <tr><td align="right"><input type="checkbox" name="vres" value="1" <?php if ($this->_tpl_vars['resize'] == '1'): ?>checked<?php endif; ?> onclick="ReverseContentDisplay('res_div')"></td><td class=""><?php echo $this->_tpl_vars['adm_setsysvideo9']; ?>
</td></tr>
			    <tr>
				<td></td>
				<td align=center>
				<div id="res_div" style="display: <?php if ($this->_tpl_vars['resize'] == '1'): ?>block;<?php else: ?>none;<?php endif; ?>">
				    <table cellpadding=1 cellspacing=0 border=0 align=left>
					<tr>
					    <td class=""><?php echo $this->_tpl_vars['adm_setsysvideo11']; ?>
</td>
					    <td><input type="text" style="width: 30px;" name="resx" class="ff" size="3" value="<?php if ($_REQUEST['resx'] != ""): ?><?php echo $_REQUEST['resx']; ?>
<?php else: ?><?php echo $this->_tpl_vars['resize_x']; ?>
<?php endif; ?>"></td>
					</tr>
					<tr>
					    <td class=""><?php echo $this->_tpl_vars['adm_setsysvideo12']; ?>
</td>
					    <td><input type="text" style="width: 30px;" name="resy" class="ff" size="3" value="<?php if ($_REQUEST['resy'] != ""): ?><?php echo $_REQUEST['resy']; ?>
<?php else: ?><?php echo $this->_tpl_vars['resize_y']; ?>
<?php endif; ?>"></td>
					</tr>
				    </table>
				</div>
				</td>
			    </tr>
			    <tr><td align="right" valign="top"><input type="checkbox" name="videologs" value="1" <?php if ($this->_tpl_vars['video_logs'] == '1'): ?>checked<?php endif; ?>></td><td align=left><?php echo $this->_tpl_vars['adm_setsysvideo13']; ?>
</td></tr>
			    <tr>
				<td colspan="2" style="padding: 10px 0px 0px 0px;">
                                    <table cellpadding="2" cellspacing="0" align="left" border=0>
                                        <tr>
                                            <td align="left" width="10"><input type="button" name="savesvideoconvbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setgensave']; ?>
" onclick="thisDiv('no'); setvideoconv_settings();"></td>
                                            <td align="left" width="300"><input type="button" name="savesvideoconvcancel" class="fb" value="<?php echo $this->_tpl_vars['adm_playcancelbtn']; ?>
" onclick="ReverseContentDisplay('video_conv'); ReverseContentDisplay('video_convtxt'); changeclass_act('sys2');"></td>
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