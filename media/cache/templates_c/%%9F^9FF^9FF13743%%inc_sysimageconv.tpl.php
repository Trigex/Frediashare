<?php /* Smarty version 2.6.26, created on 2009-11-10 15:25:17
         compiled from administration/_inc/inc_sysimageconv.tpl */ ?>
		    <fieldset>
			<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('image_conv'); ReverseContentDisplay('image_convtxt'); changeclass_act('sys8');"><span id="sys8"><?php echo $this->_tpl_vars['adm_ictxt1']; ?>
</span></a></legend>
			<div id="image_convtxt" style="display: block;" align="center"><?php echo $this->_tpl_vars['adm_ictxt2']; ?>
</div>
			<div id="image_conv" style="display: none;">
			<form id="imageconvform">
			<table cellpadding=0 cellspacing=4 border=0 align=left width="100%">
			    <tr>
				<td valign="top"><input type="radio" name="imgconv" value="any" <?php if ($this->_tpl_vars['img_scale'] == 'any'): ?>checked<?php endif; ?>></td>
				<td><?php echo $this->_tpl_vars['adm_ictxt3']; ?>
</td>
			    </tr>
			    <tr><td colspan="2">&nbsp;</td></tr>
			    <tr>
				<td valign="top"><input type="radio" name="imgconv" value="deny" <?php if ($this->_tpl_vars['img_scale'] == 'deny'): ?>checked<?php endif; ?>></td>
				<td>
				    <table cellpadding="0" cellspacing="0">
					<tr>
					    <td><?php echo $this->_tpl_vars['adm_ictxt6']; ?>
&nbsp;&nbsp;</td>
					    <td><input type="text" name="maxw" class="ff" style="width: 30px;" value="<?php echo $this->_tpl_vars['conv_deny_w']; ?>
"></td>
					    <td align="center">&nbsp;x&nbsp;</td>
					    <td><input type="text" name="maxh" class="ff" style="width: 30px;" value="<?php echo $this->_tpl_vars['conv_deny_h']; ?>
"></td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr><td colspan="2">&nbsp;</td></tr>
			    <tr>
				<td valign="top"><input type="radio" name="imgconv" value="resize" <?php if ($this->_tpl_vars['img_scale'] == 'resize'): ?>checked<?php endif; ?>></td>
				<td>
				    <table cellpadding="0" cellspacing="0">
					<tr>
					    <td><?php echo $this->_tpl_vars['adm_ictxt4']; ?>
&nbsp;&nbsp;</td>
					    <td><input type="text" name="thanw" class="ff" style="width: 30px;" value="<?php echo $this->_tpl_vars['conv_resize_than_w']; ?>
"></td>
					    <td align="center">&nbsp;x&nbsp;</td>
					    <td><input type="text" name="thanh" class="ff" style="width: 30px;" value="<?php echo $this->_tpl_vars['conv_resize_than_h']; ?>
"></td>
					</tr>
					<tr>
					    <td></td><td></td><td style="height: 20px;">&nbsp;to&nbsp;</td><td></td>
					</tr>
					<tr>
					    <td></td>
					    <td><input type="text" name="tow" class="ff" style="width: 30px;" value="<?php echo $this->_tpl_vars['conv_resize_to_w']; ?>
"></td>
					    <td align="center">&nbsp;x&nbsp;</td>
					    <td><input type="text" name="toh" class="ff" style="width: 30px;" value="<?php echo $this->_tpl_vars['conv_resize_to_h']; ?>
"></td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td colspan="2" style="padding: 10px 0px 0px 0px;">
                                    <table cellpadding="2" cellspacing="0" align="left" border=0>
                                        <tr>
                                            <td align="left" width="10"><input type="button" name="savesimageconvbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setgensave']; ?>
" onclick="setimageconv_settings();"></td>
                                            <td align="left" width="300"><input type="button" name="savesimageconvcancel" class="fb" value="<?php echo $this->_tpl_vars['adm_playcancelbtn']; ?>
" onclick="ReverseContentDisplay('image_conv'); ReverseContentDisplay('image_convtxt'); changeclass_act('sys8');"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="left"><div id="imageconvresp"></div></td>
                                        </tr>
                                    </table>
                                </td>
			    </tr>
			</table>
			</form>
			</div>
		    </fieldset>			