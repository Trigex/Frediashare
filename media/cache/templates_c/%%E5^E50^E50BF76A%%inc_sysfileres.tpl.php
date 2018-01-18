<?php /* Smarty version 2.6.26, created on 2009-11-10 15:25:17
         compiled from administration/_inc/inc_sysfileres.tpl */ ?>
		    <fieldset>
			<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('file_res'); ReverseContentDisplay('file_restxt'); changeclass_act('sys5');"><span id="sys5"><?php echo $this->_tpl_vars['adm_setsysset5']; ?>
</span></a></legend>
			<div id="file_restxt" style="display: block;" align="center"><?php echo $this->_tpl_vars['adm_setgen84']; ?>
</div> 
			<div id="file_res" style="display: none;">
			<form id="fileresform">
			<table cellpadding=2 cellspacing=0 border=0 align=left width="100%">
			    <tr>
				<td colspan="2">
				    <table cellpadding=2 cellspacing=0 border=0 align=left>
					<tr>
					    <td colspan="2" class="nopad" style="padding-bottom: 10px;">
						<div class="p2"><?php echo $this->_tpl_vars['adm_setsysres7']; ?>
 <?php echo $this->_tpl_vars['upload_max_filesize']; ?>
</div>
						<div class="p2"><?php echo $this->_tpl_vars['adm_setsysres8']; ?>
 <?php echo $this->_tpl_vars['post_max_size']; ?>
</div>
					    </td>
					</tr>
					<tr>
					    <td align=left width="200"><?php echo $this->_tpl_vars['adm_setsysres1']; ?>
</td>
					    <td align="left" class="lp1"><input type="text" style="width: 30px;" name="maxaudio" class="ff" size="5" value="<?php echo $this->_tpl_vars['max_audio_size']; ?>
"> <?php echo $this->_tpl_vars['memyouhaveusedunit']; ?>
</td>
					</tr>
					<tr>
					    <td align=left><?php echo $this->_tpl_vars['adm_setsysres2']; ?>
</td>
					    <td align="left" class="lp1"><input type="text" style="width: 30px;" name="maximage" class="ff" size="5" value="<?php echo $this->_tpl_vars['max_image_size']; ?>
"> <?php echo $this->_tpl_vars['memyouhaveusedunit']; ?>
</td>
					</tr>
					<tr>
					    <td align=left><?php echo $this->_tpl_vars['adm_setsysres3']; ?>
</td>
					    <td align="left" class="lp1"><input type="text" style="width: 30px;" name="maxvideo" class="ff" size="5" value="<?php echo $this->_tpl_vars['max_video_size']; ?>
"> <?php echo $this->_tpl_vars['memyouhaveusedunit']; ?>
</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td colspan="2" class="nopad" style="padding-top: 10px;">
				    <table cellpadding=2 cellspacing=0 border=0 align=left>
					<tr>
					    <td align=left width="150" valign="middle"><?php echo $this->_tpl_vars['adm_setsysres4']; ?>
</td>
					    <td align="left" class="lp1"><textarea name="audioext" class="ff" rows="2" cols="38"><?php echo $this->_tpl_vars['allowed_audio_formats']; ?>
</textarea></td>
					</tr>
					<tr>
					    <td align=left  valign="middle"><?php echo $this->_tpl_vars['adm_setsysres5']; ?>
</td>
					    <td align="left" class="lp1"><textarea name="imageext" class="ff" rows="2" cols="38"><?php echo $this->_tpl_vars['allowed_image_formats']; ?>
</textarea></td>
					</tr>
					<tr>
					    <td align=left  valign="middle"><?php echo $this->_tpl_vars['adm_setsysres6']; ?>
</td>
					    <td align="left" class="lp1"><textarea name="videoext" class="ff" rows="2" cols="38"><?php echo $this->_tpl_vars['allowed_video_formats']; ?>
</textarea></td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td width="1"><input type="checkbox" name="multi_categ_uploads" onclick="ReverseContentDisplay('categupnr');" <?php if ($this->_tpl_vars['multi_categ_uploads'] == '1'): ?>checked<?php endif; ?>></td>
				<td><div><?php echo $this->_tpl_vars['adm_resopts1']; ?>
</div></td>
			    </tr>
			    <tr>
				<td></td>
				<td>
				    <div id="categupnr" <?php if ($this->_tpl_vars['multi_categ_uploads'] == '0'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>>
					<div><?php echo $this->_tpl_vars['adm_resopts2']; ?>
<input type="text" style="width: 30px;" name="multi_categ_max" class="ff" size="3" value="<?php echo $this->_tpl_vars['multi_categ_max']; ?>
"><?php echo $this->_tpl_vars['adm_resopts3']; ?>
</div>
				    </div>
				</td>
			    </tr>
			    <tr>
				<td width="1"><input type="checkbox" name="same_title_uploads" <?php if ($this->_tpl_vars['same_title_uploads'] == '1'): ?>checked<?php endif; ?>></td>
				<td><div><?php echo $this->_tpl_vars['adm_resopts5']; ?>
</div></td>
			    </tr>
			    <tr>
				<td class="nopad"></td>
				<td class="nopad"><?php echo $this->_tpl_vars['adm_resopts6']; ?>
</td>
			    </tr>
			    <tr>
				<td colspan="2" style="padding: 10px 0px 0px 0px;">
                                    <table cellpadding="2" cellspacing="0" align="left" border=0>
                                        <tr>
                                            <td align="left" width="10"><input type="button" name="savefilesetbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setgensave']; ?>
" onclick="thisDiv('no'); setfileres_settings();"></td>
                                            <td align="left" width="300"><input type="button" name="savefilesetcancel" class="fb" value="<?php echo $this->_tpl_vars['adm_playcancelbtn']; ?>
" onclick="ReverseContentDisplay('file_res'); ReverseContentDisplay('file_restxt'); changeclass_act('sys5');"></td>
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