<?php /* Smarty version 2.6.26, created on 2009-11-10 15:21:42
         compiled from _inc/inc_browseifav.tpl */ ?>
		<?php if ($this->_tpl_vars['enable_images'] == '1'): ?>
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
						    <div id="cdownarrf" style="display: <?php if ($_SESSION['menu_browsei'] == 'block' || $_SESSION['menu_browsei'] == ""): ?>block<?php else: ?>none<?php endif; ?>;" class="pl2">
							<a href="javascript:void(0)" onclick="c_m1f(); set_hpsess('menu_browsei');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowdown1.gif" width="9" height="5" alt=""></a>
						    </div>
						    <div id="cleftarrf" style="display: <?php if ($_SESSION['menu_browsei'] == 'none'): ?>block<?php else: ?>none<?php endif; ?>;" class="pl2">
							<a href="javascript:void(0)" onclick="c_m1f(); set_hpsess('menu_browsei');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowleft1.gif" width="5" height="9" alt=""></a>
						    </div>
						</td>
						<td>&nbsp;<a href="javascript:void(0)" onclick="c_m1f(); set_hpsess('menu_browsei');"><span id="mmh1f" class="<?php if ($_SESSION['menu_browsei'] == 'none'): ?><?php else: ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['mmenu_item4']; ?>
</span></a></td>
					    </tr>
					</table>
					<div id="cspacerf" style="display: <?php echo $_SESSION['menu_browsei']; ?>
;"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
				    </td>
				</tr>
			    </table>
			</div>
			<?php if ($_REQUEST['user'] != ""): ?><?php $this->assign('ulnk', 'user_'); ?><?php $this->assign('rem', "user_images/"); ?><?php else: ?><?php $this->assign('rem', 'images'); ?><?php endif; ?>
			<div id="mmenulistf" style="display: <?php echo $_SESSION['menu_browsei']; ?>
;">
			    <table border="0" cellpadding="3" cellspacing="0" align="center" <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>class="cborder2"<?php else: ?>class="cborder"<?php endif; ?> <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>id="cmit2"<?php else: ?>id="cmit"<?php endif; ?>>
				<tr><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><td class="cbg-bt2"><?php else: ?><td class="cbg-bt"><?php endif; ?><a href="<?php if ($_SESSION['UID'] == "" && $this->_tpl_vars['guests_file_sorting'] == '0'): ?><?php echo $this->_tpl_vars['base_url']; ?>
/login?next=<?php echo $this->_tpl_vars['rem']; ?>
<?php echo $_REQUEST['user']; ?>
/recent<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php if ($_REQUEST['category'] != ""): ?>categories/image/<?php echo $_REQUEST['category']; ?>
<?php else: ?><?php echo $this->_tpl_vars['ulnk']; ?>
images<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?>/recent<?php endif; ?>"><?php echo $this->_tpl_vars['mostrecent']; ?>
</a></td></tr>
				<tr><td><a href="<?php if ($_SESSION['UID'] == "" && $this->_tpl_vars['guests_file_sorting'] == '0'): ?><?php echo $this->_tpl_vars['base_url']; ?>
/login?next=<?php echo $this->_tpl_vars['rem']; ?>
<?php echo $_REQUEST['user']; ?>
/featured<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php if ($_REQUEST['category'] != ""): ?>categories/image/<?php echo $_REQUEST['category']; ?>
<?php else: ?><?php echo $this->_tpl_vars['ulnk']; ?>
images<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?>/featured<?php endif; ?>"><?php echo $this->_tpl_vars['recfeatured']; ?>
</a></td></tr>
				<tr><td><a href="<?php if ($_SESSION['UID'] == "" && $this->_tpl_vars['guests_file_sorting'] == '0'): ?><?php echo $this->_tpl_vars['base_url']; ?>
/login?next=<?php echo $this->_tpl_vars['rem']; ?>
<?php echo $_REQUEST['user']; ?>
/most_viewed<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php if ($_REQUEST['category'] != ""): ?>categories/image/<?php echo $_REQUEST['category']; ?>
<?php else: ?><?php echo $this->_tpl_vars['ulnk']; ?>
images<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?>/most_viewed<?php endif; ?>"><?php echo $this->_tpl_vars['mostviewed']; ?>
</a></td></tr>
				<?php if ($this->_tpl_vars['file_comments'] == '1'): ?><tr><td><a href="<?php if ($_SESSION['UID'] == "" && $this->_tpl_vars['guests_file_sorting'] == '0'): ?><?php echo $this->_tpl_vars['base_url']; ?>
/login?next=<?php echo $this->_tpl_vars['rem']; ?>
<?php echo $_REQUEST['user']; ?>
/most_commented<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php if ($_REQUEST['category'] != ""): ?>categories/image/<?php echo $_REQUEST['category']; ?>
<?php else: ?><?php echo $this->_tpl_vars['ulnk']; ?>
images<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?>/most_commented<?php endif; ?>"><?php echo $this->_tpl_vars['mostcomm']; ?>
</a></td></tr><?php endif; ?>
				<?php if ($this->_tpl_vars['file_responses'] == '1'): ?><tr><td><a href="<?php if ($_SESSION['UID'] == "" && $this->_tpl_vars['guests_file_sorting'] == '0'): ?><?php echo $this->_tpl_vars['base_url']; ?>
/login?next=<?php echo $this->_tpl_vars['rem']; ?>
<?php echo $_REQUEST['user']; ?>
/most_responded<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php if ($_REQUEST['category'] != ""): ?>categories/image/<?php echo $_REQUEST['category']; ?>
<?php else: ?><?php echo $this->_tpl_vars['ulnk']; ?>
images<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?>/most_responded<?php endif; ?>"><?php echo $this->_tpl_vars['fresp_txt28']; ?>
</a></td></tr><?php endif; ?>
				<?php if ($this->_tpl_vars['file_ratings'] == '1'): ?><tr><td><a href="<?php if ($_SESSION['UID'] == "" && $this->_tpl_vars['guests_file_sorting'] == '0'): ?><?php echo $this->_tpl_vars['base_url']; ?>
/login?next=<?php echo $this->_tpl_vars['rem']; ?>
<?php echo $_REQUEST['user']; ?>
/top_rated<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php if ($_REQUEST['category'] != ""): ?>categories/image/<?php echo $_REQUEST['category']; ?>
<?php else: ?><?php echo $this->_tpl_vars['ulnk']; ?>
images<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?>/top_rated<?php endif; ?>"><?php echo $this->_tpl_vars['toprated']; ?>
</a></td></tr><?php endif; ?>
				<tr><td><a href="<?php if ($_SESSION['UID'] == "" && $this->_tpl_vars['guests_file_sorting'] == '0'): ?><?php echo $this->_tpl_vars['base_url']; ?>
/login?next=<?php echo $this->_tpl_vars['rem']; ?>
<?php echo $_REQUEST['user']; ?>
/top_favorites<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php if ($_REQUEST['category'] != ""): ?>categories/image/<?php echo $_REQUEST['category']; ?>
<?php else: ?><?php echo $this->_tpl_vars['ulnk']; ?>
images<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?>/top_favorites<?php endif; ?>"><?php echo $this->_tpl_vars['topfav']; ?>
</a></td></tr>
				<tr><td><a href="<?php if ($_SESSION['UID'] == "" && $this->_tpl_vars['guests_file_sorting'] == '0'): ?><?php echo $this->_tpl_vars['base_url']; ?>
/login?next=<?php echo $this->_tpl_vars['rem']; ?>
<?php echo $_REQUEST['user']; ?>
/random<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php if ($_REQUEST['category'] != ""): ?>categories/image/<?php echo $_REQUEST['category']; ?>
<?php else: ?><?php echo $this->_tpl_vars['ulnk']; ?>
images<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?>/random<?php endif; ?>"><?php echo $this->_tpl_vars['random']; ?>
</a></td></tr>
			    </table>
			</div>
			<div align="center" id="cbottomf" style="display: <?php if ($_SESSION['menu_browsei'] == 'none'): ?>block<?php else: ?>none<?php endif; ?>;"><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners2.gif" width="<?php echo $this->_tpl_vars['thimgwidth']; ?>
" height="6" alt=""><?php else: ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners.gif" width="<?php echo $this->_tpl_vars['thimgwidth']; ?>
" height="6" alt=""><?php endif; ?></div>
		    </td>
		</tr>
                <?php endif; ?>