<?php /* Smarty version 2.6.26, created on 2009-11-10 15:17:51
         compiled from _inc/hpbox/inc_hpustat.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'viewnr', '_inc/hpbox/inc_hpustat.tpl', 40, false),array('modifier', 'lower', '_inc/hpbox/inc_hpustat.tpl', 52, false),)), $this); ?>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
	<td>
	    <div align="center"><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/topcorners_hpr2.gif" width="300" height="6" alt=""><?php else: ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/topcorners_hpr1.gif" width="300" height="6" alt=""><?php endif; ?></div>
                <table border="0" cellpadding="0" cellspacing="0" align="center" <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>class="cborder2"<?php else: ?>class="cborder"<?php endif; ?> width="300">
                    <tr>
                        <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><td id="bgshp7" class="<?php if ($_SESSION['hpustat'] == 'none'): ?>cbg2s-nb<?php else: ?>cbg2s<?php endif; ?>"><?php else: ?><td id="bgshp7" class="<?php if ($_SESSION['hpustat'] == 'none'): ?>cbgs-nb<?php else: ?>cbgs<?php endif; ?>"><?php endif; ?>
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td valign="middle" class="pl5" width="18">
                                        <div id="cdownarrhp7" style="display: <?php if ($_SESSION['hpustat'] == 'block' || $_SESSION['hpustat'] == ""): ?>block<?php else: ?>none<?php endif; ?>;" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp7(); set_hpsess('ustat');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowdown1.gif" width="9" height="5" alt=""></a>
                                        </div>
                                        <div id="cleftarrhp7" style="display: <?php if ($_SESSION['hpustat'] == 'none'): ?>block<?php else: ?>none<?php endif; ?>;" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp7(); set_hpsess('ustat');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowleft1.gif" width="5" height="9" alt=""></a>
                                        </div>
                                    </td>
                                    <td valign="middle" class="pl5" align="left"><a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp7(); set_hpsess('ustat');"><span id="mmh1hp7" class="<?php if ($_SESSION['hpustat'] == 'none'): ?><?php else: ?>act<?php endif; ?>"><span class="mh2"><?php echo $this->_tpl_vars['plist_txt78']; ?>
</span></span></a></td>
                                </tr>
                            </table>
                            <div id="cspacerhp7" style="display: <?php echo $_SESSION['hpustat']; ?>
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
	    <div id="mmenulisthp7" <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>class="hpbrdnotop2"<?php else: ?>class="hpbrdnotop"<?php endif; ?> style="display: <?php echo $_SESSION['hpustat']; ?>
;">
		<table width="90%" align="center" cellpadding="5" cellspacing="0" border="0">
		    <tr>
			<td class="<?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>cbg2snbg<?php else: ?>cbgsnbg<?php endif; ?>">
			    <table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr>
				    <td width="25"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/user.gif" alt=""></td>
				    <td><span class="normal"><?php echo $this->_tpl_vars['mems7']; ?>
</span> <span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['tg3'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
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
/user.gif" alt=""></td>
				    <td><span class="normal"><?php echo $this->_tpl_vars['mems6']; ?>
</span> <span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['tg1'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span></td>
				    <td align="right"><span class="f10"><?php if ($this->_tpl_vars['members_section'] == '1'): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/members"><span class="f10"><?php echo $this->_tpl_vars['plist_txt76']; ?>
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
/user.gif" alt=""></td>
				    <td><span class="normal"><?php echo $this->_tpl_vars['mems8']; ?>
</span> <span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['tg2'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span></td>
				    <td align="right"><span class="f10"><?php if ($this->_tpl_vars['members_section'] == '1'): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/members/online"><span class="f10"><?php echo $this->_tpl_vars['plist_txt76']; ?>
</span></a><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['hpbox_statna'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
<?php endif; ?></span></td>
				</tr>
			    </table>
			</td>
		    </tr>
		    <?php if ($_SESSION['UID'] != ""): ?>
		    <tr>
			<td class="<?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>cbg2snbg<?php else: ?>cbgsnbg<?php endif; ?>">
			    <table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr>
				    <td width="25"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/user.gif" alt=""></td>
				    <td><span class="normal"><?php echo $this->_tpl_vars['mems10']; ?>
</span> <span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['blnr'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span></td>
				    <td align="right"><span class="f10"><?php if ($this->_tpl_vars['enable_inbox'] == '1' && $this->_tpl_vars['msg_block'] == '1'): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/blocked_users"><span class="f10"><?php echo $this->_tpl_vars['plist_txt76']; ?>
</span></a><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['hpbox_statna'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
<?php endif; ?></span></td>
				</tr>
			    </table>
			</td>
		    </tr>
		    <?php endif; ?>
		    <tr>
			<td class="<?php if ($this->_tpl_vars['last_users'] == '1'): ?><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>cbg2snbg<?php else: ?>cbgsnbg<?php endif; ?><?php else: ?><?php endif; ?>">
			    <table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr>
				    <td width="25"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/user.gif" alt=""></td>
				    <td><span class="normal"><?php echo $this->_tpl_vars['mems9']; ?>
</span> <span class="bold"><?php echo ((is_array($_tmp=$this->_tpl_vars['banr'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span></td>
				    <td align="right"><span class="f10"><?php echo $this->_tpl_vars['hpbox_statna']; ?>
</span></td>
				</tr>
			    </table>
			</td>
		    </tr>
		    <?php if ($this->_tpl_vars['last_users'] == '1'): ?>
		    <tr>
			<td class=""><br>
			    <?php if ($this->_tpl_vars['last_users'] == '1' && ( $this->_tpl_vars['users_online'] == '1' || $this->_tpl_vars['users_last'] == '1' )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "last_users_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
			</td>
		    </tr>
		    <?php endif; ?>
		</table>
	    </div>
	    <div align="center" id="cbottomhp7" style="display: <?php if ($_SESSION['hpustat'] == 'none'): ?>block<?php else: ?>none<?php endif; ?>;"><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners_hpr2.gif" width="300" height="6" alt=""><?php else: ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners_hpr1.gif" width="300" height="6" alt=""><?php endif; ?></div>
	</td>
    </tr>
</table>