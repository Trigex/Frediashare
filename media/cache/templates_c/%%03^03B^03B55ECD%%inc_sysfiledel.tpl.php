<?php /* Smarty version 2.6.26, created on 2009-11-10 15:25:17
         compiled from administration/_inc/inc_sysfiledel.tpl */ ?>
		    <fieldset>
			<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('file_set'); ReverseContentDisplay('file_settxt'); changeclass_act('sys3');"><span id="sys3"><?php echo $this->_tpl_vars['adm_setsysset3']; ?>
</span></a></legend>
			<div id="file_settxt" style="display: block;" align="center"><?php echo $this->_tpl_vars['adm_setgen82']; ?>
</div> 
			<div id="file_set" style="display: none;">
			<form id="filesetform">
			<table cellpadding=3 cellspacing=1 border=0 align=left>
			    <tr><td align=left width="170"><?php echo $this->_tpl_vars['adm_setsysfile1']; ?>
</td>
				<td align="left" class="lp1">
				    <table cellpadding=1 cellspacing=0 border=0>
					<tr>
					    <td><input type="radio" name="delaudio" value="1" <?php if ($this->_tpl_vars['delete_original_audio'] == '1'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setsysfile5']; ?>
</td>
					    <td width="50">&nbsp;</td>
					    <td><input type="radio" name="delaudio" value="0" <?php if ($this->_tpl_vars['delete_original_audio'] == '0'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setsysfile6']; ?>
</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr><td align=left><?php echo $this->_tpl_vars['adm_setsysfile2']; ?>
</td>
				<td align="left" class="lp1">
				    <table cellpadding=1 cellspacing=0 border=0>
					<tr>
					    <td><input type="radio" name="delimage" value="1" <?php if ($this->_tpl_vars['delete_original_image'] == '1'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setsysfile5']; ?>
</td>
					    <td width="50">&nbsp;</td>
					    <td><input type="radio" name="delimage" value="0" <?php if ($this->_tpl_vars['delete_original_image'] == '0'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setsysfile6']; ?>
</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr><td align=left><?php echo $this->_tpl_vars['adm_setsysfile3']; ?>
</td>
				<td align="left" class="lp1">
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="radio" name="delvideo" value="1" <?php if ($this->_tpl_vars['delete_original_video'] == '1'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setsysfile5']; ?>
</td>
					    <td width="50">&nbsp;</td>
					    <td><input type="radio" name="delvideo" value="0" <?php if ($this->_tpl_vars['delete_original_video'] == '0'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setsysfile6']; ?>
</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr><td align=left><?php echo $this->_tpl_vars['adm_setsysfile4']; ?>
</td>
				<td align="left" class="lp1">
				    <table cellpadding=1 cellspacing=0>
					<tr>
					    <td><input type="radio" name="delmethod" value="1" <?php if ($this->_tpl_vars['delete_files'] == '1'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setsysfile7']; ?>
</td>
					    <td width="25">&nbsp;</td>
					    <td><input type="radio" name="delmethod" value="0" <?php if ($this->_tpl_vars['delete_files'] == '0'): ?>checked<?php endif; ?>></td>
					    <td><?php echo $this->_tpl_vars['adm_setsysfile8']; ?>
</td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td colspan="2" style="padding: 10px 0px 0px 0px;">
                                    <table cellpadding="2" cellspacing="0" align="left" border=0>
                                        <tr>
                                            <td align="left" width="10"><input type="button" name="savefilesetbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setgensave']; ?>
" onclick="thisDiv('no'); setfile_settings();"></td>
                                            <td align="left" width="300"><input type="button" name="savefilesetcancel" class="fb" value="<?php echo $this->_tpl_vars['adm_playcancelbtn']; ?>
" onclick="ReverseContentDisplay('file_set'); ReverseContentDisplay('file_settxt'); changeclass_act('sys3');"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="left"><div id="filesetresp"></div></td>
                                        </tr>
                                    </table>
                                </td>
			    </tr>
			</form>
			</table>
			</div>
		    </fieldset>