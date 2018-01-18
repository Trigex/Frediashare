<?php /* Smarty version 2.6.26, created on 2009-11-10 15:24:21
         compiled from administration/_inc/inc_setrecovery.tpl */ ?>
			<form id="setrecoverform">
			<fieldset>
			<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('recoversetdiv'); ReverseContentDisplay('recoversettxt'); changeclass_act('sys7');"><span id="sys7"><?php echo $this->_tpl_vars['passrecset1']; ?>
</span></a></legend>
			<div id="recoversettxt" style="display: block;"><?php echo $this->_tpl_vars['passrecset3']; ?>
</div>
			<div id="recoversetdiv" style="display: none;">
			<table cellpadding=2 cellspacing=0 border=0 align=left>
			    <tr><td align=left class="" width="140"><?php echo $this->_tpl_vars['passrecset2']; ?>
</td>
				<td align="left" class="lp1">
				    <select name="urec" class="selbox" onchange="ReverseContentDisplay('ur1'); ReverseContentDisplay('ur0');">
                                        <option value="1" <?php if ($this->_tpl_vars['username_recovery'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                        <option value="0" <?php if ($this->_tpl_vars['username_recovery'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                    </select>
                                </td>
                                <td width="60">
                            	    <div id="ur1" <?php if ($this->_tpl_vars['username_recovery'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                    <div id="ur0" <?php if ($this->_tpl_vars['username_recovery'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                </td>
                            </tr>
                            
			    <tr><td align=left class=""><?php echo $this->_tpl_vars['passrecset4']; ?>
</td>
				<td align="left" class="lp1">
				    <select name="prec" class="selbox" onchange="ReverseContentDisplay('pr1'); ReverseContentDisplay('pr0'); if(this.selectedIndex == '1'){HideContent('linkdurdiv');}else{ShowContent('linkdurdiv');}">
                                        <option value="1" <?php if ($this->_tpl_vars['password_recovery'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                        <option value="0" <?php if ($this->_tpl_vars['password_recovery'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                    </select>
                                </td>
                                <td width="60">
                            	    <div id="pr1" <?php if ($this->_tpl_vars['password_recovery'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                    <div id="pr0" <?php if ($this->_tpl_vars['password_recovery'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                </td>
                            </tr>
                            
                            <tr>
                        	<td colspan="3">
                        	<div id="linkdurdiv" <?php if ($this->_tpl_vars['password_recovery'] == '0'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>;">
                        	    <table cellpadding="2" cellspacing="0" align="left" border=0 width="100%">
                        		<tr>
                        		    <td width="140"><?php echo $this->_tpl_vars['passrecset5']; ?>
</td>
                        		    <td><input type="text" style="width: 30px;" name="linkdur" class="ff" size="3" value="<?php echo $this->_tpl_vars['recoverylinktime']; ?>
"><?php echo $this->_tpl_vars['passrecset6']; ?>
</td>
                        		</tr>
                        		<tr>
                        		    <td><?php echo $this->_tpl_vars['passrecset8']; ?>
</td>
                        		    <td><input type="checkbox" name="linktime" value="1" <?php if ($this->_tpl_vars['recoverytimer'] == '1'): ?>checked<?php endif; ?>></td>
                        		</tr>
                        	    </table>
                        	</div>
                        	</td>
                            </tr>
                            
                            <tr>
                                <td colspan="3" style="padding: 10px 0px 0px 0px;">
                                    <table cellpadding="2" cellspacing="0" align="left" border=0>
                                        <tr>
                                            <td align="left" width="10"><input type="button" name="saverecbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setgensave']; ?>
" onclick="if ( document.forms.setrecoverform.linkdur.value > <?php echo $this->_tpl_vars['recoverylinktime']; ?>
 ) {if ( confirm('<?php echo $this->_tpl_vars['passrecset9']; ?>
') ) {setrecovery_settings();}} else {setrecovery_settings();}"></td>
                                            <td align="left" width="300"><input type="button" name="savereccancel" class="fb" value="<?php echo $this->_tpl_vars['adm_playcancelbtn']; ?>
" onclick="ReverseContentDisplay('recoversetdiv'); ReverseContentDisplay('recoversettxt'); changeclass_act('sys7');"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="left"><div id="filerecresp"></div></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
			</table>
			</div>
			</fieldset>
			</form>