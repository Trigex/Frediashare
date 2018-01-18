<?php /* Smarty version 2.6.26, created on 2009-11-10 15:40:01
         compiled from _inc/hpbox/inc_hpabout.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'getfield', '_inc/hpbox/inc_hpabout.tpl', 40, false),array('insert', 'fav_count', '_inc/hpbox/inc_hpabout.tpl', 51, false),array('insert', 'friend_count', '_inc/hpbox/inc_hpabout.tpl', 62, false),array('insert', 'subs_count', '_inc/hpbox/inc_hpabout.tpl', 74, false),array('insert', 'subs_count_own', '_inc/hpbox/inc_hpabout.tpl', 85, false),array('insert', 'video_count', '_inc/hpbox/inc_hpabout.tpl', 98, false),array('insert', 'image_count', '_inc/hpbox/inc_hpabout.tpl', 111, false),array('insert', 'audio_count', '_inc/hpbox/inc_hpabout.tpl', 124, false),array('modifier', 'viewnr', '_inc/hpbox/inc_hpabout.tpl', 40, false),)), $this); ?>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
	<td>
	    <div align="center"><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/topcorners_hpr2.gif" width="300" height="6" alt=""><?php else: ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/topcorners_hpr1.gif" width="300" height="6" alt=""><?php endif; ?></div>
                <table border="0" cellpadding="0" cellspacing="0" align="center" <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>class="cborder2"<?php else: ?>class="cborder"<?php endif; ?> width="300">
                    <tr>
                        <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><td id="bgshp6" class="<?php if ($_SESSION['hpabout'] == 'none'): ?>cbg2s-nb<?php else: ?>cbg2s<?php endif; ?>"><?php else: ?><td id="bgshp6" class="<?php if ($_SESSION['hpabout'] == 'none'): ?>cbgs-nb<?php else: ?>cbgs<?php endif; ?>"><?php endif; ?>
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td valign="middle" class="pl5" width="18">
                                        <div id="cdownarrhp6" style="display: <?php if ($_SESSION['hpabout'] == 'block' || $_SESSION['hpabout'] == ""): ?>block<?php else: ?>none<?php endif; ?>;" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp6(); set_hpsess('about');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowdown1.gif" width="9" height="5" alt=""></a>
                                        </div>
                                        <div id="cleftarrhp6" style="display: <?php if ($_SESSION['hpabout'] == 'none'): ?>block<?php else: ?>none<?php endif; ?>;" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp6(); set_hpsess('about');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowleft1.gif" width="5" height="9" alt=""></a>
                                        </div>
                                    </td>
                                    <td valign="middle" class="pl5" align="left"><a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp6(); set_hpsess('about');"><span id="mmh1hp6" class="<?php if ($_SESSION['hpabout'] == 'none'): ?><?php else: ?>act<?php endif; ?>"><span class="mh2"><?php echo $this->_tpl_vars['plist_txt77']; ?>
</span></span></a></td>
                                </tr>
                            </table>
                            <div id="cspacerhp6" style="display: <?php echo $_SESSION['hpabout']; ?>
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
	    <div id="mmenulisthp6" <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>class="hpbrdnotop2"<?php else: ?>class="hpbrdnotop"<?php endif; ?> style="display: <?php echo $_SESSION['hpabout']; ?>
;">
		<table width="90%" align="center" cellpadding="5" cellspacing="0" border="0">
                    <tr>
                        <td class="<?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>cbg2snbg<?php else: ?>cbgsnbg<?php endif; ?>">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td width="25"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/view.gif" alt=""></td>
                                    <td><span class="normal"><?php if ($this->_tpl_vars['enable_channels'] == '1'): ?><?php echo $this->_tpl_vars['uch_txt8']; ?>
<?php else: ?><?php echo $this->_tpl_vars['hpbox_mypv']; ?>
<?php endif; ?></span><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'chview', 'field' => 'ch_views', 'table' => 'members', 'qfield' => 'uid', 'qvalue' => $_SESSION['UID'])), $this); ?>
<span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['chview'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span></td>
                                    <td align="right"><span class="f10"><?php echo $this->_tpl_vars['hpbox_statna']; ?>
</span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="<?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>cbg2snbg<?php else: ?>cbgsnbg<?php endif; ?>">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td width="25"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/favorite.gif" alt=""></td>
                                    <td><span class="normal"><?php echo $this->_tpl_vars['user_favorites']; ?>
</span><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'fav_count', 'assign' => 'favcount', 'uid' => $_SESSION['UID'])), $this); ?>
<span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['favcount'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span></td>
                                    <td align="right"><span class="f10"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_favorites"><span class="f10"><?php echo $this->_tpl_vars['plist_txt76']; ?>
</span></a></span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="<?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>cbg2snbg<?php else: ?>cbgsnbg<?php endif; ?>">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td width="25"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/user.gif" alt=""></td>
                                    <td><span class="normal"><?php echo $this->_tpl_vars['user_friends']; ?>
</span><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'friend_count', 'assign' => 'frcount', 'uid' => $_SESSION['UID'])), $this); ?>
<span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['frcount'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span></td>
                                    <td align="right"><span class="f10"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_friends"><span class="f10"><?php echo $this->_tpl_vars['plist_txt76']; ?>
</span></a></span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <?php if ($this->_tpl_vars['enable_channels'] == '1'): ?>
                    <tr>
                        <td class="<?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>cbg2snbg<?php else: ?>cbgsnbg<?php endif; ?>">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td width="25"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/user.gif" alt=""></td>
                                    <td><span class="normal"><?php echo $this->_tpl_vars['pr_chinfob28']; ?>
: </span><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'subs_count', 'assign' => 'subscount', 'uid' => $_SESSION['UID'])), $this); ?>
<span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['subscount'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span></td>
                                    <td align="right"><span class="f10"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_subscribers"><span class="f10"><?php echo $this->_tpl_vars['plist_txt76']; ?>
</span></a></span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="<?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>cbg2snbg<?php else: ?>cbgsnbg<?php endif; ?>">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td width="25"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/subscribe.gif" alt=""></td>
                                    <td><span class="normal"><?php echo $this->_tpl_vars['pr_chinfop56']; ?>
: </span><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'subs_count_own', 'assign' => 'subscountown', 'uid' => $_SESSION['UID'])), $this); ?>
<span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['subscountown'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span></td>
                                    <td align="right"><span class="f10"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_subscriptions"><span class="f10"><?php echo $this->_tpl_vars['plist_txt76']; ?>
</span></a></span></td>
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
/upload.gif" alt=""></td>
                                    <td><span class="normal"><?php echo $this->_tpl_vars['adm_setgen23']; ?>
 </span><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'video_count', 'assign' => 'vcount', 'uid' => $_SESSION['UID'])), $this); ?>
<span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['vcount'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span></td>
                                    <td align="right"><span class="f10"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_videos"><span class="f10"><?php echo $this->_tpl_vars['plist_txt76']; ?>
</span></a></span></td>
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
/upload.gif" alt=""></td>
                                    <td><span class="normal"><?php echo $this->_tpl_vars['adm_setgen22']; ?>
 </span><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'image_count', 'assign' => 'icount', 'uid' => $_SESSION['UID'])), $this); ?>
<span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['icount'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span></td>
                                    <td align="right"><span class="f10"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_images"><span class="f10"><?php echo $this->_tpl_vars['plist_txt76']; ?>
</span></a></span></td>
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
/upload.gif" alt=""></td>
                                    <td><span class="normal"><?php echo $this->_tpl_vars['adm_setgen21']; ?>
 </span><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'audio_count', 'assign' => 'acount', 'uid' => $_SESSION['UID'])), $this); ?>
<span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['acount'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span></td>
                                    <td align="right"><span class="f10"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_audios"><span class="f10"><?php echo $this->_tpl_vars['plist_txt76']; ?>
</span></a></span></td>
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
                                    <td><span class="normal"><?php echo $this->_tpl_vars['memyouhaveused']; ?>
 </span><span class="bold"><?php echo $this->_tpl_vars['mspace']; ?>
</span></td>
                                    <td align="right"><span class="f10"><?php echo $this->_tpl_vars['hpbox_statna']; ?>
</span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
		</table>
	    </div>
	    <div align="center" id="cbottomhp6" style="display: <?php if ($_SESSION['hpabout'] == 'none'): ?>block<?php else: ?>none<?php endif; ?>;"><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners_hpr2.gif" width="300" height="6" alt=""><?php else: ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners_hpr1.gif" width="300" height="6" alt=""><?php endif; ?></div>
	</td>
    </tr>
</table>