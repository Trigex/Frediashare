<?php /* Smarty version 2.6.26, created on 2009-11-10 15:42:46
         compiled from main_profilepage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'getfield', 'main_profilepage.tpl', 36, false),)), $this); ?>
<!-- BEGIN PROFILE TABLE -->
<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
    <tr><td class="h3"></td></tr>
</table>
<table cellspacing="0" cellpadding="10" border="0" align="center" class="width950b">
    <tbody>
        <tr>
            <td valign="top" colspan="2" class="pl0">
            <table width="100%" cellspacing="0" cellpadding="5" border="0" align="center">
                <tbody>
                    <tr>
                        <td align="left" width="20%" valign="top" class="nopad">
                    	    <div class="cursor">
            			<div align="center"><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/topcorners2.gif" width="<?php echo $this->_tpl_vars['thimgwidth']; ?>
" height="6" alt=""><?php else: ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/topcorners.gif" width="<?php echo $this->_tpl_vars['thimgwidth']; ?>
" height="6" alt=""><?php endif; ?></div>
            			<table border="0" cellpadding="0" cellspacing="0" align="center" <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>class="cborder2"<?php else: ?>class="cborder"<?php endif; ?> width="<?php echo $this->_tpl_vars['thimgwidth']; ?>
">
                		    <tr>
                    			<?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><td class="cbg2"><?php else: ?><td class="cbg"><?php endif; ?>
                        		    <table cellpadding="0" cellspacing="0" border="0">
                            		        <tr>
                                		    <td valign="middle" class="pl5" width="11">
                                    			<div id="cdownarr11" style="display: <?php if ($_SESSION['menu_profile'] == 'block' || $_SESSION['menu_profile'] == ""): ?>block<?php else: ?>none<?php endif; ?>;" class="pl2">
                                        		    <a href="javascript:void(0)" onclick="c_m11(); set_hpsess('menu_profile');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowdown1.gif" width="9" height="5" alt=""></a>
                                    			</div>
                                    			<div id="cleftarr11" style="display: <?php if ($_SESSION['menu_profile'] == 'none'): ?>block<?php else: ?>none<?php endif; ?>;" class="pl2">
                                        		    <a href="javascript:void(0)" onclick="c_m11(); set_hpsess('menu_profile');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowleft1.gif" width="5" height="9" alt=""></a>
                                    			</div>
                                		    </td>
                                		    <td>&nbsp;<a href="javascript:void(0)" onclick="c_m11(); set_hpsess('menu_profile');"><span id="mmh111" class="<?php if ($_SESSION['menu_profile'] == 'none'): ?><?php else: ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['mmenu_item9']; ?>
</span></a></td>
                            			</tr>
                        		    </table>
                        		    <div id="cspacer11" style="display: <?php echo $_SESSION['menu_profile']; ?>
;"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'chtype', 'field' => 'ch_type', 'table' => 'members', 'qfield' => 'uid', 'qvalue' => $_SESSION['UID'])), $this); ?>

                            <div id="mmenulist11" style="display: <?php echo $_SESSION['menu_profile']; ?>
;">
                        	<table border="0" cellpadding="5" cellspacing="0" align="center" <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>class="cborder2"<?php else: ?>class="cborder"<?php endif; ?> <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>id="cmit2"<?php else: ?>id="cmit"<?php endif; ?>>
                        	<?php if ($this->_tpl_vars['enable_channels'] == '1'): ?>
                        	    <tr><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><td class="cbg-bt2"><?php else: ?><td class="cbg-bt"><?php endif; ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_profile"><span class="<?php if ($this->_tpl_vars['chs'] == 's1'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['pr_chlmitem1']; ?>
</span></a></td></tr>
                        	    <tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_profile_theme"><span class="<?php if ($this->_tpl_vars['chs'] == 's2'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['pr_chlmitem2']; ?>
</span></a></td></tr>
                        	    <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?><tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_profile_videos"><span class="<?php if ($this->_tpl_vars['chs'] == 's3'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['pr_chlmitem3']; ?>
</span></a></td></tr><?php endif; ?>
                        	    <?php if ($this->_tpl_vars['enable_images'] == '1'): ?><tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_profile_images"><span class="<?php if ($this->_tpl_vars['chs'] == 's31'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['pr_chlmitem31']; ?>
</span></a></td></tr><?php endif; ?>
                        	    <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?><tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_profile_audios"><span class="<?php if ($this->_tpl_vars['chs'] == 's32'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['pr_chlmitem32']; ?>
</span></a></td></tr><?php endif; ?>
                        	<?php endif; ?>
                        	<?php if ($this->_tpl_vars['enable_channels'] == '0'): ?>
                        	    <tr><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><td class="cbg-bt2"><?php else: ?><td class="cbg-bt"><?php endif; ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_profile_info"><span class="<?php if ($this->_tpl_vars['chs'] == 's4'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['pr_chlmitem4']; ?>
</span></a></td></tr>
                        	<?php else: ?>
                        	    <tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_profile_info"><span class="<?php if ($this->_tpl_vars['chs'] == 's4'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['pr_chlmitem4']; ?>
</span></a></td></tr>
                        	<?php endif; ?>
                        	<?php if (( $this->_tpl_vars['chtype'] == 2 || $this->_tpl_vars['chtype'] == 3 || $this->_tpl_vars['chtype'] == 4 || $this->_tpl_vars['chtype'] == 5 || $this->_tpl_vars['chtype'] == 6 ) && $this->_tpl_vars['enable_channels'] == '1'): ?>
                        	    <tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_profile_performer"><span class="<?php if ($this->_tpl_vars['chs'] == 's41'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['pr_chinfob58']; ?>
</span></a></td></tr>
                        	    <?php if ($this->_tpl_vars['chtype'] == 3 || $this->_tpl_vars['chtype'] == 4): ?><tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_profile_shows"><span class="<?php if ($this->_tpl_vars['chs'] == 's6'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['pr_chinfom18']; ?>
</span></a></td></tr><?php endif; ?>
                        	    <?php if ($this->_tpl_vars['chtype'] == 2): ?><tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_profile_url"><span class="<?php if ($this->_tpl_vars['chs'] == 's42'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['pr_chinfob65']; ?>
</span></a></td></tr><?php endif; ?>
                        	<?php endif; ?>
                        	    <tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_profile_location"><span class="<?php if ($this->_tpl_vars['chs'] == 's5'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['pr_chlmitem5']; ?>
</span></a></td></tr>
                        	</table>
                            </div>
                            <div align="center" id="cbottom11" style="display: <?php if ($_SESSION['menu_profile'] == 'none'): ?>block<?php else: ?>none<?php endif; ?>;"><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners2.gif" width="<?php echo $this->_tpl_vars['thimgwidth']; ?>
" height="6" alt=""><?php else: ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners.gif" width="<?php echo $this->_tpl_vars['thimgwidth']; ?>
" height="6" alt=""><?php endif; ?></div>
                        </td>
                        
                        <td align="left" width="80%" valign="top" class="br1">
                        <?php if ($this->_tpl_vars['chs'] == 's1'): ?>
                    	    <div style="padding-left: 40px;"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/ch_info.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
                    	<?php elseif ($this->_tpl_vars['chs'] == 's2'): ?>
                    	    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/ch_theme.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    	<?php elseif ($this->_tpl_vars['chs'] == 's3' || $this->_tpl_vars['chs'] == 's31' || $this->_tpl_vars['chs'] == 's32'): ?>
                    	    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/ch_video.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    	<?php elseif ($this->_tpl_vars['chs'] == 's4'): ?>
                    	    <div style="padding-left: 40px;"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/ch_profile.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
                    	<?php elseif ($this->_tpl_vars['chs'] == 's41'): ?>
                    	    <div style="padding-left: 40px;"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/ch_performer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
                    	<?php elseif ($this->_tpl_vars['chs'] == 's6'): ?>
                    	    <div style="padding-left: 40px;"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/ch_events.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
                    	<?php elseif ($this->_tpl_vars['chs'] == 's42'): ?>    
                    	    <div style="padding-left: 40px;"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/ch_url.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
                    	<?php elseif ($this->_tpl_vars['chs'] == 's5'): ?>
                    	    <div style="padding-left: 40px;"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/ch_loc.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
                    	<?php endif; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
    </tbody>
</table>
<!-- END PROFILE TABLE -->