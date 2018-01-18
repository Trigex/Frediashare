<?php /* Smarty version 2.6.26, created on 2009-11-10 15:40:01
         compiled from _inc/hpbox/inc_hpinbox.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'pmsg_count_all', '_inc/hpbox/inc_hpinbox.tpl', 40, false),array('insert', 'count_pmsg', '_inc/hpbox/inc_hpinbox.tpl', 51, false),array('insert', 'count_vcomm', '_inc/hpbox/inc_hpinbox.tpl', 63, false),array('insert', 'count_vresp', '_inc/hpbox/inc_hpinbox.tpl', 76, false),array('insert', 'count_icomm', '_inc/hpbox/inc_hpinbox.tpl', 89, false),array('insert', 'count_iresp', '_inc/hpbox/inc_hpinbox.tpl', 102, false),array('insert', 'count_acomm', '_inc/hpbox/inc_hpinbox.tpl', 115, false),array('insert', 'count_aresp', '_inc/hpbox/inc_hpinbox.tpl', 128, false),array('modifier', 'viewnr', '_inc/hpbox/inc_hpinbox.tpl', 40, false),array('modifier', 'lower', '_inc/hpbox/inc_hpinbox.tpl', 41, false),)), $this); ?>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
	<td>
	    <div align="center"><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/topcorners_hpr2.gif" width="300" height="6" alt=""><?php else: ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/topcorners_hpr1.gif" width="300" height="6" alt=""><?php endif; ?></div>
                <table border="0" cellpadding="0" cellspacing="0" align="center" <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>class="cborder2"<?php else: ?>class="cborder"<?php endif; ?> width="300">
                    <tr>
                        <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><td id="bgshp5" class="<?php if ($_SESSION['hpinbox'] == 'none'): ?>cbg2s-nb<?php else: ?>cbg2s<?php endif; ?>"><?php else: ?><td id="bgshp5" class="<?php if ($_SESSION['hpinbox'] == 'none'): ?>cbgs-nb<?php else: ?>cbgs<?php endif; ?>"><?php endif; ?>
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td valign="middle" class="pl5" width="18">
                                        <div id="cdownarrhp5" style="display: <?php if ($_SESSION['hpinbox'] == 'block' || $_SESSION['hpinbox'] == ""): ?>block<?php else: ?>none<?php endif; ?>;" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp5(); set_hpsess('inbox');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowdown1.gif" width="9" height="5" alt=""></a>
                                        </div>
                                        <div id="cleftarrhp5" style="display: <?php if ($_SESSION['hpinbox'] == 'none'): ?>block<?php else: ?>none<?php endif; ?>;" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp5(); set_hpsess('inbox');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowleft1.gif" width="5" height="9" alt=""></a>
                                        </div>
                                    </td>
                                    <td valign="middle" class="pl5" align="left"><a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp5(); set_hpsess('inbox');"><span id="mmh1hp5" class="<?php if ($_SESSION['hpinbox'] == 'none'): ?><?php else: ?>act<?php endif; ?>"><span class="mh2"><?php echo $this->_tpl_vars['msginbox']; ?>
</span></span></a></td>
                                </tr>
                            </table>
                            <div id="cspacerhp5" style="display: <?php echo $_SESSION['hpinbox']; ?>
;"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
                        </td>
                    </tr>
                </table>
            </div>
	</td>
    </tr>
</table>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="0" class="">
    <tr> 
	<td class="">
	    <div id="mmenulisthp5" <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>class="hpbrdnotop2"<?php else: ?>class="hpbrdnotop"<?php endif; ?> style="display: <?php echo $_SESSION['hpinbox']; ?>
;">
		<table width="90%" align="center" cellpadding="5" cellspacing="0" border="0">
                    <tr>
                        <td class="<?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>cbg2snbg<?php else: ?>cbgsnbg<?php endif; ?>">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                            	    <td width="25"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/message.gif" alt=""></td>
                                    <td class="pt2"><span class="normal"><?php echo $this->_tpl_vars['hpbox_inbpm']; ?>
</span> <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'pmsg_count_all', 'assign' => 'pmsg')), $this); ?>
<span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['pmsg'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span></td>
                                    <td align="right" class="f10"><span class="f10"><?php if ($this->_tpl_vars['enable_inbox'] == '1'): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/inbox"><span class="f10"><?php echo $this->_tpl_vars['plist_txt76']; ?>
</span></a><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['hpbox_statna'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
<?php endif; ?></span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="<?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>cbg2snbg<?php else: ?>cbgsnbg<?php endif; ?>">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                            	    <td width="25"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/comment.gif" alt=""></td>
                                    <td><span class="normal"><?php if ($this->_tpl_vars['enable_channels'] == '1'): ?><?php echo $this->_tpl_vars['hpbox_inbch']; ?>
<?php else: ?><?php echo $this->_tpl_vars['adm_setgen143']; ?>
<?php endif; ?></span><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'count_pmsg', 'assign' => 'chmsg')), $this); ?>
 <span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['chmsg'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span></td>
                                    <td align="right"><span class="f10"><?php if ($this->_tpl_vars['profile_comments'] == '1'): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_comments/profile"><span class="f10"><?php echo $this->_tpl_vars['plist_txt76']; ?>
</span></a><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['hpbox_statna'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
<?php endif; ?></span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>
                    <tr>
                        <td class="<?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>cbg2snbg<?php else: ?>cbgsnbg<?php endif; ?>">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                            	    <td width="25"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/comment.gif" alt=""></td>
                                    <td><span class="normal"><?php echo $this->_tpl_vars['hpbox_inbvi']; ?>
</span><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'count_vcomm', 'assign' => 'vcomm')), $this); ?>
 <span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['vcomm'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span></td>
                                    <td align="right"><span class="f10"><?php if ($this->_tpl_vars['file_comments'] == '1'): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_comments/video"><span class="f10"><?php echo $this->_tpl_vars['plist_txt76']; ?>
</span></a><?php else: ?><?php echo $this->_tpl_vars['hpbox_statna']; ?>
<?php endif; ?></span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>
                    <tr>
                        <td class="<?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>cbg2snbg<?php else: ?>cbgsnbg<?php endif; ?>">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                            	    <td width="25"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/response.gif" alt=""></td>
                                    <td><span class="normal"><?php echo $this->_tpl_vars['fresp_txt1']; ?>
: </span><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'count_vresp', 'assign' => 'vresp')), $this); ?>
 <span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['vresp'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span></td>
                                    <td align="right"><span class="f10"><?php if ($this->_tpl_vars['file_responses'] == '1'): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/responses/video"><span class="f10"><?php echo $this->_tpl_vars['plist_txt76']; ?>
</span></a><?php else: ?><?php echo $this->_tpl_vars['hpbox_statna']; ?>
<?php endif; ?></span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['enable_images'] == '1'): ?>
                    <tr>
                        <td class="<?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>cbg2snbg<?php else: ?>cbgsnbg<?php endif; ?>">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                            	    <td width="25"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/comment.gif" alt=""></td>
                                    <td><span class="normal"><?php echo $this->_tpl_vars['hpbox_inbii']; ?>
</span><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'count_icomm', 'assign' => 'icomm')), $this); ?>
 <span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['icomm'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span></td>
                                    <td align="right"><span class="f10"><?php if ($this->_tpl_vars['file_comments'] == '1'): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_comments/image"><span class="f10"><?php echo $this->_tpl_vars['plist_txt76']; ?>
</span></a><?php else: ?><?php echo $this->_tpl_vars['hpbox_statna']; ?>
<?php endif; ?></span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['enable_images'] == '1'): ?>
                    <tr>
                        <td class="<?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>cbg2snbg<?php else: ?>cbgsnbg<?php endif; ?>">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                            	    <td width="25"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/response.gif" alt=""></td>
                                    <td><span class="normal"><?php echo $this->_tpl_vars['fresp_txt2']; ?>
: </span><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'count_iresp', 'assign' => 'iresp')), $this); ?>
 <span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['iresp'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span></td>
                                    <td align="right"><span class="f10"><?php if ($this->_tpl_vars['file_responses'] == '1'): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/responses/image"><span class="f10"><?php echo $this->_tpl_vars['plist_txt76']; ?>
</span></a><?php else: ?><?php echo $this->_tpl_vars['hpbox_statna']; ?>
<?php endif; ?></span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>
                    <tr>
                        <td class="<?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>cbg2snbg<?php else: ?>cbgsnbg<?php endif; ?>">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                            	    <td width="25"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/comment.gif" alt=""></td>
                                    <td><span class="normal"><?php echo $this->_tpl_vars['hpbox_inbai']; ?>
</span><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'count_acomm', 'assign' => 'acomm')), $this); ?>
 <span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['acomm'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span></td>
                                    <td align="right"><span class="f10"><?php if ($this->_tpl_vars['file_comments'] == '1'): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_comments/audio"><span class="f10"><?php echo $this->_tpl_vars['plist_txt76']; ?>
</span></a><?php else: ?><?php echo $this->_tpl_vars['hpbox_statna']; ?>
<?php endif; ?></span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>
                    <tr>
                        <td class="<?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>cbg2snbg<?php else: ?>cbgsnbg<?php endif; ?>">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                            	    <td width="25"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/response.gif" alt=""></td>
                                    <td><span class="normal"><?php echo $this->_tpl_vars['fresp_txt3']; ?>
: </span><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'count_aresp', 'assign' => 'aresp')), $this); ?>
 <span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['aresp'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span></td>
                                    <td align="right"><span class="f10"><?php if ($this->_tpl_vars['file_responses'] == '1'): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/responses/audio"><span class="f10"><?php echo $this->_tpl_vars['plist_txt76']; ?>
</span></a><?php else: ?><?php echo $this->_tpl_vars['hpbox_statna']; ?>
<?php endif; ?></span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <?php endif; ?>
                    <tr>
                        <td class="">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                            	    <td width="25"></td>
                                    <td></td>
                                    <td align="right"><span class="f10"><?php if ($this->_tpl_vars['enable_inbox'] == '1'): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/compose"><span class="f10"><?php echo ((is_array($_tmp=$this->_tpl_vars['uch_txt17'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
</span></a><?php else: ?><?php echo $this->_tpl_vars['hpbox_statna']; ?>
<?php endif; ?></span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
		</table>
	    </div>
	    <div align="center" id="cbottomhp5" style="display: <?php if ($_SESSION['hpinbox'] == 'none'): ?>block<?php else: ?>none<?php endif; ?>;"><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners_hpr2.gif" width="300" height="6" alt=""><?php else: ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners_hpr1.gif" width="300" height="6" alt=""><?php endif; ?></div>
	</td>
    </tr>
</table>