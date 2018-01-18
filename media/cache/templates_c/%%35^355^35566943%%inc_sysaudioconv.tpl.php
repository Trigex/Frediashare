<?php /* Smarty version 2.6.26, created on 2009-11-10 15:25:17
         compiled from administration/_inc/inc_sysaudioconv.tpl */ ?>
		    <fieldset>
			<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('audio_conv'); ReverseContentDisplay('audio_convtxt'); changeclass_act('sys1');"><span id="sys1"><?php echo $this->_tpl_vars['adm_setsysset1']; ?>
</span></a></legend>
			<div id="audio_convtxt" style="display: block;" align="center"><?php echo $this->_tpl_vars['adm_setgen80']; ?>
</div>
			<div id="audio_conv" style="display: none;">
			<form id="audioconvform">
			<table cellpadding=2 cellspacing=0 border=0 align=left width="100%">
			    <tr><td class="" width="30%"><?php echo $this->_tpl_vars['adm_setsysaudio1']; ?>
</td><td><input type="text" name="lamepath" class="ff" size="35" value="<?php if ($_REQUEST['lamepath'] != ""): ?><?php echo $_REQUEST['lamepath']; ?>
<?php else: ?><?php echo $this->_tpl_vars['path_lame']; ?>
<?php endif; ?>"></td></tr>
			    <tr><td class=""><?php echo $this->_tpl_vars['adm_setsysaudio2']; ?>
</td><td><input type="text" name="lamebitrate" class="ff" size="3" value="<?php if ($_REQUEST['lamebitrate'] != ""): ?><?php echo $_REQUEST['lamebitrate']; ?>
<?php else: ?><?php echo $this->_tpl_vars['option_b']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['adm_setsysaudio3']; ?>
</td></tr>
			    <tr><td></td><td><?php echo $this->_tpl_vars['adm_setsysaudio4']; ?>
</td></tr>
			    <tr><td class=""><?php echo $this->_tpl_vars['adm_setsysaudio5']; ?>
</td><td><input type="text" name="lamesbitrate" class="ff" size="3" value="<?php if ($_REQUEST['lamesbitrate'] != ""): ?><?php echo $_REQUEST['lamesbitrate']; ?>
<?php else: ?><?php echo $this->_tpl_vars['option_s']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['adm_setsysaudio6']; ?>
</td></tr>
			    <tr><td></td><td><?php echo $this->_tpl_vars['adm_setsysaudio7']; ?>
</td></tr>
			    <tr><td align=right valign=top><input type="checkbox" name="hoption" value="1" <?php if ($this->_tpl_vars['option_h'] == '1'): ?>checked<?php endif; ?>></td><td align=left><?php echo $this->_tpl_vars['adm_setsysaudio8']; ?>
</td></tr>
			    <tr><td align=right valign=top><input type="checkbox" name="poption" value="1" <?php if ($this->_tpl_vars['option_p'] == '1'): ?>checked<?php endif; ?>></td><td align=left><?php echo $this->_tpl_vars['adm_setsysaudio9']; ?>
</td></tr>
			    <tr><td align=right valign=top><input type="checkbox" name="audiologs" value="1" <?php if ($this->_tpl_vars['audio_logs'] == '1'): ?>checked<?php endif; ?>></td><td align=left><?php echo $this->_tpl_vars['adm_setsysaudio10']; ?>
</td></tr>
			    <tr>
				<td colspan="2" style="padding: 10px 0px 0px 0px;">
                                    <table cellpadding="2" cellspacing="0" align="left" border=0>
                                        <tr>
                                            <td align="left" width="10"><input type="button" name="savesaudioconvbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setgensave']; ?>
" onclick="thisDiv('no'); setaudioconv_settings();"></td>
                                            <td align="left" width="300"><input type="button" name="savesaudioconvcancel" class="fb" value="<?php echo $this->_tpl_vars['adm_playcancelbtn']; ?>
" onclick="ReverseContentDisplay('audio_conv'); ReverseContentDisplay('audio_convtxt'); changeclass_act('sys1');"></td>
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