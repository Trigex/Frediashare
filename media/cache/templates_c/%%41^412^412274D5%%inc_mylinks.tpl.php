<?php /* Smarty version 2.6.26, created on 2009-11-10 15:41:23
         compiled from _inc/inc_mylinks.tpl */ ?>
    <tr>
	<td class="nopad">
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
                                        <div id="cdownarr4" style="display: <?php if ($_SESSION['menu_myacct'] == 'block' || $_SESSION['menu_myacct'] == ""): ?>block<?php else: ?>none<?php endif; ?>;" class="pl2">
                                            <a href="javascript:void(0)" onclick="c_m4(); set_hpsess('menu_myacct');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowdown1.gif" width="9" height="5" alt=""></a>
                                        </div>
                                        <div id="cleftarr4" style="display: <?php if ($_SESSION['menu_myacct'] == 'none'): ?>block<?php else: ?>none<?php endif; ?>;" class="pl2">
                                            <a href="javascript:void(0)" onclick="c_m4(); set_hpsess('menu_myacct');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowleft1.gif" width="5" height="9" alt=""></a>
                                        </div>
                                    </td>
                                    <td>&nbsp;<a href="javascript:void(0)" onclick="c_m4(); set_hpsess('menu_myacct');"><span id="mmh14" class="<?php if ($_SESSION['menu_myacct'] == 'none'): ?><?php else: ?>act<?php endif; ?>">&nbsp;<?php echo $this->_tpl_vars['snav_mtxt1']; ?>
</span></a></td>
                                </tr>
                            </table>
                            <div id="cspacer4" style="display: <?php echo $_SESSION['menu_myacct']; ?>
;"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
                        </td>
                    </tr>
                </table>
    	    </div>
    	    <div id="mmenulist4" style="display: <?php echo $_SESSION['menu_myacct']; ?>
;">
    		<table border="0" cellpadding="3" cellspacing="0" align="center" <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>class="cborder2"<?php else: ?>class="cborder"<?php endif; ?> <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>id="cmit2"<?php else: ?>id="cmit"<?php endif; ?>>
    		    <tr><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><td class="cbg-bt2"><?php else: ?><td class="cbg-bt"><?php endif; ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_profile"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'mpr'): ?>act<?php else: ?><?php endif; ?>"><?php if ($this->_tpl_vars['enable_channels'] == '0'): ?><?php echo $this->_tpl_vars['myprofile']; ?>
<?php else: ?><?php echo $this->_tpl_vars['mypchan']; ?>
<?php endif; ?></span></a></td></tr>
    		    <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?><tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_audios"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'myaud'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['myaudio']; ?>
</a></td></tr><?php endif; ?>
    		    <?php if ($this->_tpl_vars['enable_images'] == '1'): ?><tr><?php if ($this->_tpl_vars['enable_audio'] == '0'): ?><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><td class="cbg-bt2"><?php else: ?><td class="cbg-bt"><?php endif; ?><?php else: ?><td><?php endif; ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_images"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'myimg'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['myimage']; ?>
</a></td></tr><?php endif; ?>
    		    <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?><tr><?php if ($this->_tpl_vars['enable_audio'] == '0' && $this->_tpl_vars['enable_images'] == '0'): ?><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><td class="cbg-bt2"><?php else: ?><td class="cbg-bt"><?php endif; ?><?php else: ?><td><?php endif; ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_videos"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'myvid'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['myvideo']; ?>
</a></td></tr><?php endif; ?>
    		    <tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_playlists" onclick="HideContent('hidem3');"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'mpl2'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['plist_txt1']; ?>
</span></a></td></tr>
    		    <tr><td><?php if ($this->_tpl_vars['enable_inbox'] == '1'): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/inbox"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'inbox'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['myinbox']; ?>
</a><?php else: ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_comments/profile"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'comments'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['mycomm']; ?>
</a><?php endif; ?></td></tr>
    		    <?php if ($this->_tpl_vars['msg_block'] == '1'): ?><tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/blocked_users" onclick="HideContent('hidem3');"><?php echo $this->_tpl_vars['blocked_msglink']; ?>
</a></td></tr><?php endif; ?>
    		    <?php if ($this->_tpl_vars['file_responses'] == '1'): ?><tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/responses/<?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>video<?php elseif ($this->_tpl_vars['enable_images'] == '1'): ?>image<?php elseif ($this->_tpl_vars['enable_audio'] == '1'): ?>audio<?php endif; ?>" onclick="HideContent('hidem3');"><?php echo $this->_tpl_vars['adm_setfileresp']; ?>
</a></td></tr><?php endif; ?>
    		    <tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_quicklist"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'mql'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['qlist_txt4x']; ?>
</a></td></tr>
    		    <tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_favorites"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'fav'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['myfav']; ?>
</a></td></tr>
    		    <tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_friends"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'friends'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['myfriends']; ?>
</a></td></tr>
    		    <?php if ($this->_tpl_vars['enable_channels'] == '1'): ?><tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_subscriptions"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'mysubs'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['mysubs_heading']; ?>
</span></a></td></tr><?php endif; ?>
    		    <?php if ($this->_tpl_vars['enable_channels'] == '1'): ?><tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_subscribers"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'myusubs'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['myusubs_heading']; ?>
</span></a></td></tr><?php endif; ?>
    		    <tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_history"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'mpl'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['myplist']; ?>
</span></a></td></tr>
		</table>
    	    </div>
    	    <div align="center" id="cbottom4" style="display: <?php if ($_SESSION['menu_myacct'] == 'none'): ?>block<?php else: ?>none<?php endif; ?>;"><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners2.gif" width="<?php echo $this->_tpl_vars['thimgwidth']; ?>
" height="6" alt=""><?php else: ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners.gif" width="<?php echo $this->_tpl_vars['thimgwidth']; ?>
" height="6" alt=""><?php endif; ?></div>
	</td>
    </tr>