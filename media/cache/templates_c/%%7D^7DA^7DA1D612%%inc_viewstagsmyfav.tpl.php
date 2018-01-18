<?php /* Smarty version 2.6.26, created on 2009-11-10 15:21:42
         compiled from _inc/inc_viewstagsmyfav.tpl */ ?>
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
                                                    <div id="cdownarr9" style="display: <?php if ($_SESSION['menu_display'] == 'block' || $_SESSION['menu_display'] == ""): ?>block<?php else: ?>none<?php endif; ?>;" class="pl2">
                                                        <a href="javascript:void(0)" onclick="c_m9(); set_hpsess('menu_display');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowdown1.gif" width="9" height="5" alt=""></a>
                                                    </div>
                                                    <div id="cleftarr9" style="display: <?php if ($_SESSION['menu_display'] == 'none'): ?>block<?php else: ?>none<?php endif; ?>;" class="pl2">
                                                        <a href="javascript:void(0)" onclick="c_m9(); set_hpsess('menu_display');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowleft1.gif" width="5" height="9" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>&nbsp;<a href="javascript:void(0)" onclick="c_m9(); set_hpsess('menu_display');"><span id="mmh19" class="<?php if ($_SESSION['menu_display'] == 'none'): ?><?php else: ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['mmenu_item7']; ?>
</span></a></td>
                                            </tr>
                                        </table>
                                        <div id="cspacer9" style="display: <?php echo $_SESSION['menu_display']; ?>
;"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div id="mmenulist9" style="display: <?php echo $_SESSION['menu_display']; ?>
;">
                    	    <table border="0" cellpadding="3" cellspacing="0" align="center" <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>class="cborder2"<?php else: ?>class="cborder"<?php endif; ?> <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>id="cmit2"<?php else: ?>id="cmit"<?php endif; ?>>
                    		<tr>
                    		    <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><td class="cbg-bt2"><?php else: ?><td class="cbg-bt"><?php endif; ?>
                			<a href="javascript:void(0)" onclick="ReverseMyTags(); <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>ReverseContentDisplay('myfavvtags');<?php endif; ?> <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>ReverseContentDisplay('myfavatags');<?php endif; ?> <?php if ($this->_tpl_vars['enable_images'] == '1'): ?>ReverseContentDisplay('myfavitags');<?php endif; ?> <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>ReverseContentDisplay('favvhide'); ReverseContentDisplay('favvshow');<?php endif; ?> <?php if ($this->_tpl_vars['enable_images'] == '1'): ?>ReverseContentDisplay('favihide'); ReverseContentDisplay('favishow');<?php endif; ?> <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>ReverseContentDisplay('favahide'); ReverseContentDisplay('favashow');<?php endif; ?>">
                			    <span id="favvhide" <?php if ($_SESSION['mytags'] == 'on'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><?php echo $this->_tpl_vars['myfiles_hidetags']; ?>
</span>
                			    <span id="favvshow" <?php if ($_SESSION['mytags'] == 'off'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><?php echo $this->_tpl_vars['myfiles_showtags']; ?>
</span>
                			</a>
                    		    </td>
                    		</tr>
                    		<tr>
                    		    <td>
                			<a href="javascript:void(0)" onclick="ReverseViewMode(); <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>ReverseContentDisplay('agridview'); ReverseContentDisplay('alistview');<?php endif; ?> <?php if ($this->_tpl_vars['enable_images'] == '1'): ?>ReverseContentDisplay('igridview'); ReverseContentDisplay('ilistview');<?php endif; ?> <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>ReverseContentDisplay('vgridview'); ReverseContentDisplay('vlistview'); ReverseContentDisplay('vgview'); ReverseContentDisplay('vlview');<?php endif; ?> <?php if ($this->_tpl_vars['enable_images'] == '1'): ?>ReverseContentDisplay('igview'); ReverseContentDisplay('ilview');<?php endif; ?> <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>ReverseContentDisplay('agview'); ReverseContentDisplay('alview');<?php endif; ?>">
                			    <span id="vlview" <?php if ($_SESSION['viewmode'] == 'list'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><?php echo $this->_tpl_vars['files_listview']; ?>
</span>
                			    <span id="vgview" <?php if ($_SESSION['viewmode'] == 'grid'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><?php echo $this->_tpl_vars['files_gridview']; ?>
</span>
                			</a>
                    		    </td>
                    		</tr>
                    	    </table>
                        </div>
                        <div align="center" id="cbottom9" style="display: <?php if ($_SESSION['menu_display'] == 'none'): ?>block<?php else: ?>none<?php endif; ?>;"><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners2.gif" width="<?php echo $this->_tpl_vars['thimgwidth']; ?>
" height="6" alt=""><?php else: ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners.gif" width="<?php echo $this->_tpl_vars['thimgwidth']; ?>
" height="6" alt=""><?php endif; ?></div>
		    </td>
		</tr>