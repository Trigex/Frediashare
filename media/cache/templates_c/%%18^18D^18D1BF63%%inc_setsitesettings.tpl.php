<?php /* Smarty version 2.6.26, created on 2009-11-10 15:24:21
         compiled from administration/_inc/inc_setsitesettings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'administration/_inc/inc_setsitesettings.tpl', 7, false),)), $this); ?>
			<form id="savesitesetform">
			    <fieldset>
				<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('sitesettingsdiv'); ReverseContentDisplay('sitesettingstxt'); changeclass_act('set2');"><span id="set2"><?php echo $this->_tpl_vars['adm_setleg2']; ?>
</span></a></legend>
				<div id="sitesettingstxt" style="display: block;" class="nopad"><?php echo $this->_tpl_vars['adm_setleg2txt']; ?>
</div>
				<div id="sitesettingsdiv" style="display: none;">
				<table cellpadding=2 cellspacing=0 border=0 align=center width="100%">
				    <tr><td align=left class="" width="140"><?php echo $this->_tpl_vars['adm_setgen1']; ?>
</td><td class="lp1"><input type="text" name="sitename" class="ff" size="35" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['site_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"></td></tr>
				    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen61x']; ?>
</td><td class="lp1"><textarea name="metatags" class="ff" rows="3" cols="33"><?php echo ((is_array($_tmp=$this->_tpl_vars['meta_tags'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</textarea></td></tr>
				    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen62x']; ?>
</td><td class="lp1"><textarea name="metadesc" class="ff" rows="3" cols="33"><?php echo ((is_array($_tmp=$this->_tpl_vars['meta_desc'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</textarea></td></tr>
<!--				    
				    <tr>
					<td align=left class=""><?php echo $this->_tpl_vars['adm_setgen24']; ?>
</td>
					<td class="lp1">
					    <select name="theme" class="selbox">
					        <option name="blue" value="black" <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgen25']; ?>
</option>
						<option name="black" value="blue" <?php if ($this->_tpl_vars['site_theme'] == 'blue'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgen26']; ?>
</option>
						<option name="orange" value="orange" <?php if ($this->_tpl_vars['site_theme'] == 'orange'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgen27']; ?>
</option>
						<option name="metube" value="metube" <?php if ($this->_tpl_vars['site_theme'] == 'metube'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_themetube']; ?>
</option>
					    </select>
					</td>
				    </tr>
-->				    
				    <tr>
					<td align=left class=""><?php echo $this->_tpl_vars['lp_txt5']; ?>
</td>
                                        <td align="left" class="lp1" width="200">
                                            <select name="lpage" class="selbox" onchange="ReverseContentDisplay('lp1'); ReverseContentDisplay('lp0');">
                                                <option value="1" <?php if ($this->_tpl_vars['landing_page'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                                <option value="0" <?php if ($this->_tpl_vars['landing_page'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                            </select>
                                        </td>
                                        <td width="60">
                                            <div id="lp1" <?php if ($this->_tpl_vars['landing_page'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                            <div id="lp0" <?php if ($this->_tpl_vars['landing_page'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16"alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                        </td>
                                    </tr>

				    <tr>
                                        <td colspan="2" style="padding: 10px 0px 0px 0px;">
                                            <table cellpadding="2" cellspacing="0" align="left" border=0>
                                                <tr>
                                                    <td align="left" width="10"><input type="button" name="savesitesetbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setgensave']; ?>
" onclick="setsite_settings();"></td>
                                                    <td align="left" width="300"><input type="button" name="savesitesetcancel" class="fb" value="<?php echo $this->_tpl_vars['adm_playcancelbtn']; ?>
" onclick="ReverseContentDisplay('sitesettingsdiv'); ReverseContentDisplay('sitesettingstxt'); changeclass_act('set2');"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" align="left"><div id="setsiteresp"></div></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
				</table>
				</div>
			    </fieldset>
			</form>