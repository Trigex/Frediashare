<?php /* Smarty version 2.6.26, created on 2009-11-10 15:41:23
         compiled from _inc/inc_viewstags.tpl */ ?>
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
                                                    <div id="cdownarr6" style="display: <?php if ($_SESSION['menu_display'] == 'block' || $_SESSION['menu_display'] == ""): ?>block<?php else: ?>none<?php endif; ?>;" class="pl2">
                                                        <a href="javascript:void(0)" onclick="c_m6(); set_hpsess('menu_display');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowdown1.gif" width="9" height="5" alt=""></a>
                                                    </div>
                                                    <div id="cleftarr6" style="display: <?php if ($_SESSION['menu_display'] == 'none'): ?>block<?php else: ?>none<?php endif; ?>;" class="pl2">
                                                        <a href="javascript:void(0)" onclick="c_m6(); set_hpsess('menu_display');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowleft1.gif" width="5" height="9" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>&nbsp;<a href="javascript:void(0)" onclick="c_m6(); set_hpsess('menu_display');"><span id="mmh16" class="<?php if ($_SESSION['menu_display'] == 'none'): ?><?php else: ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['mmenu_item7']; ?>
</span></a></td>
                                            </tr>
                                        </table>
                                        <div id="cspacer6" style="display: <?php echo $_SESSION['menu_display']; ?>
;"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
                                    </td>
                                </tr>
                            </table>
                	</div>
                	<?php if ($this->_tpl_vars['btn'] == 'bvideo' || $this->_tpl_vars['btn'] == 'bimage' || $this->_tpl_vars['btn'] == 'baudio' || $this->_tpl_vars['sbtn'] == 'mysubs'): ?>
                        <div id="mmenulist6" style="display: <?php echo $_SESSION['menu_display']; ?>
;">
                    	    <table border="0" cellpadding="3" cellspacing="0" align="center" <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>class="cborder2"<?php else: ?>class="cborder"<?php endif; ?> <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>id="cmit2"<?php else: ?>id="cmit"<?php endif; ?>>
                    		<?php if ($this->_tpl_vars['sbtn'] == 'mysubs'): ?>
				<tr>
                		    <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><td class="cbg-bt2"><?php else: ?><td class="cbg-bt"><?php endif; ?><a href="javascript:void(0)" onclick="ReverseViewMode(); ReverseContentDisplay('gridview'); ReverseContentDisplay('listview'); ReverseContentDisplay('gview'); ReverseContentDisplay('lview');"><span id="lview" <?php if ($_SESSION['viewmode'] == 'list'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><?php echo $this->_tpl_vars['files_listview']; ?>
</span><span id="gview" <?php if ($_SESSION['viewmode'] == 'grid'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><?php echo $this->_tpl_vars['files_gridview']; ?>
</span></a></td>
            			</tr>
            			<?php else: ?>
                    		<tr>
                    		    <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><td class="cbg-bt2"><?php else: ?><td class="cbg-bt"><?php endif; ?>
                    		    <?php if ($this->_tpl_vars['btn'] == 'bvideo'): ?>
                		    <a href="javascript:void(0)" onclick="ReverseVideoTags(); ReverseContentDisplay('videotags'); ReverseContentDisplay('showv'); ReverseContentDisplay('hidev');">
                    			<span id="showv" <?php if ($_SESSION['videotags'] == 'off'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><?php echo $this->_tpl_vars['files_showvtags']; ?>
</span>
                    			<span id="hidev" <?php if ($_SESSION['videotags'] == 'on'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><?php echo $this->_tpl_vars['files_hidevtags']; ?>
</span>
                		    </a>
                		    <?php elseif ($this->_tpl_vars['btn'] == 'bimage'): ?>
                		    <a href="javascript:void(0)" onclick="ReverseImageTags(); ReverseContentDisplay('imagetags'); ReverseContentDisplay('showi'); ReverseContentDisplay('hidei');">
                    			<span id="showi" <?php if ($_SESSION['imagetags'] == 'off'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><?php echo $this->_tpl_vars['files_showitags']; ?>
</span>
                    			<span id="hidei" <?php if ($_SESSION['imagetags'] == 'on'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><?php echo $this->_tpl_vars['files_hideitags']; ?>
</span>
                		    </a>
                		    <?php elseif ($this->_tpl_vars['btn'] == 'baudio'): ?>
                		    <a href="javascript:void(0)" onclick="ReverseAudioTags(); ReverseContentDisplay('audiotags'); ReverseContentDisplay('showa'); ReverseContentDisplay('hidea');">
                    			<span id="showa" <?php if ($_SESSION['audiotags'] == 'off'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><?php echo $this->_tpl_vars['files_showatags']; ?>
</span>
                    			<span id="hidea" <?php if ($_SESSION['audiotags'] == 'on'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><?php echo $this->_tpl_vars['files_hideatags']; ?>
</span>
                		    </a>
                		    <?php endif; ?>
                		    </td>
                		</tr>
				<tr>
                		    <td class=""><a href="javascript:void(0)" onclick="ReverseViewMode(); ReverseContentDisplay('gridview'); ReverseContentDisplay('listview'); ReverseContentDisplay('gview'); ReverseContentDisplay('lview');"><span id="lview" <?php if ($_SESSION['viewmode'] == 'list'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><?php echo $this->_tpl_vars['files_listview']; ?>
</span><span id="gview" <?php if ($_SESSION['viewmode'] == 'grid'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><?php echo $this->_tpl_vars['files_gridview']; ?>
</span></a></td>
            			</tr>
            			<?php endif; ?>
                	    </table>
                	</div>
                	<?php elseif ($this->_tpl_vars['sbtn'] == 'myaud' || $this->_tpl_vars['sbtn'] == 'myimg' || $this->_tpl_vars['sbtn'] == 'myvid' || $this->_tpl_vars['sbtn'] == 'search' || $this->_tpl_vars['sbtn'] == 'adm_search'): ?>
                        <div id="mmenulist6" style="display: <?php echo $_SESSION['menu_display']; ?>
;">
                    	    <table border="0" cellpadding="3" cellspacing="0" align="center" <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>class="cborder2"<?php else: ?>class="cborder"<?php endif; ?> <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>id="cmit2"<?php else: ?>id="cmit"<?php endif; ?>>
                    		<tr>
                    		    <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><td class="cbg-bt2"><?php else: ?><td class="cbg-bt"><?php endif; ?>
                    			<a href="javascript:void(0)" onclick="ReverseMyTags(); ReverseContentDisplay('mytags'); ReverseContentDisplay('shide'); ReverseContentDisplay('sshow');"><span id="shide" <?php if ($_SESSION['mytags'] == 'on'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><?php echo $this->_tpl_vars['myfiles_hidetags']; ?>
</span><span id="sshow" <?php if ($_SESSION['mytags'] == 'off'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><?php echo $this->_tpl_vars['myfiles_showtags']; ?>
</span></a>
                    		    </td>
                    		</tr>
                    		<tr>
                    		    <td>
                    			<a href="javascript:void(0)" onclick="ReverseViewMode(); ReverseContentDisplay('gridview'); ReverseContentDisplay('listview'); ReverseContentDisplay('gview'); ReverseContentDisplay('lview');"><span id="lview" <?php if ($_SESSION['viewmode'] == 'list'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><?php echo $this->_tpl_vars['files_listview']; ?>
</span><span id="gview" <?php if ($_SESSION['viewmode'] == 'grid'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><?php echo $this->_tpl_vars['files_gridview']; ?>
</span></a>
                    		    </td>
                    		</tr>
                    	    </table>
                	</div>
                	<?php endif; ?>
                	<div align="center" id="cbottom6" style="display: <?php if ($_SESSION['menu_display'] == 'none'): ?>block<?php else: ?>none<?php endif; ?>;"><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners2.gif" width="<?php echo $this->_tpl_vars['thimgwidth']; ?>
" height="6" alt=""><?php else: ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners.gif" width="<?php echo $this->_tpl_vars['thimgwidth']; ?>
" height="6" alt=""><?php endif; ?></div>
                    </td>
                </tr>
		<?php if ($this->_tpl_vars['sbtn'] == 'profile'): ?>
		<tr><td>
		<?php if ($this->_tpl_vars['enable_channels'] == '0'): ?>
		    <script language="javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/ajaxresponder.js" type="text/javascript"></script>
		    <script language="javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/common.js" type="text/javascript"></script>
		    <input type="hidden" name="ldivx" id="ldivx" value="">
		    <input type="hidden" name="thisDiv" id="thisDiv" value="">
		<?php endif; ?>
		<div id="mmenulist6" style="display: <?php echo $_SESSION['menu_display']; ?>
;">
		    <table border="0" cellpadding="3" cellspacing="0" align="center" <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>class="cborder2"<?php else: ?>class="cborder"<?php endif; ?> <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>id="cmit2"<?php else: ?>id="cmit"<?php endif; ?>>
            		<tr>
            		    <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><td class="cbg-bt2"><?php else: ?><td class="cbg-bt"><?php endif; ?>
                		<a href="javascript:void(0)" onclick="thisDiv('no'); ReverseMyTags(); <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>ReverseContentDisplay('atags');<?php endif; ?> <?php if ($this->_tpl_vars['enable_images'] == '1'): ?>ReverseContentDisplay('itags');<?php endif; ?> <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>ReverseContentDisplay('vtags');<?php endif; ?> ReverseContentDisplay('shide'); ReverseContentDisplay('sshow');"><span id="shide" <?php if ($_SESSION['mytags'] == 'on'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><?php echo $this->_tpl_vars['myfiles_hidetags']; ?>
</span><span id="sshow" <?php if ($_SESSION['mytags'] == 'off'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><?php echo $this->_tpl_vars['myfiles_showtags']; ?>
</span></a>
                	    </td>
            		</tr>
			<tr>
                	    <td class=""><a href="javascript:void(0)" onclick="thisDiv('no'); ReverseViewMode(); <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>ReverseContentDisplay('gridviewa'); ReverseContentDisplay('listviewa');<?php endif; ?> <?php if ($this->_tpl_vars['enable_images'] == '1'): ?>ReverseContentDisplay('gridviewi'); ReverseContentDisplay('listviewi');<?php endif; ?> <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>ReverseContentDisplay('gridviewv'); ReverseContentDisplay('listviewv');<?php endif; ?> ReverseContentDisplay('gview'); ReverseContentDisplay('lview');"><span id="lview" <?php if ($_SESSION['viewmode'] == 'list'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><?php echo $this->_tpl_vars['files_listview']; ?>
</span><span id="gview" <?php if ($_SESSION['viewmode'] == 'grid'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><?php echo $this->_tpl_vars['files_gridview']; ?>
</span></a></td>
            		</tr>
            	    </table>
            	</div>
            	</td></tr>
                <?php endif; ?>
                