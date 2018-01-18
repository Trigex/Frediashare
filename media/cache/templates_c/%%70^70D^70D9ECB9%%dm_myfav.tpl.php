<?php /* Smarty version 2.6.26, created on 2009-11-10 15:21:40
         compiled from _inc/dropmenu/dm_myfav.tpl */ ?>
<table cellpadding="0" cellspacing="0" border=0>
    <tr>
	<td>
	    <table cellpadding="0" cellspacing="0">
		<tr>
		    <td><span style="font-size: 14px;"><?php if ($this->_tpl_vars['sbtn'] == 'fav'): ?><?php echo $this->_tpl_vars['myfav']; ?>
<?php elseif ($this->_tpl_vars['sbtn'] == 'mpl'): ?><?php echo $this->_tpl_vars['myplist']; ?>
<?php elseif ($this->_tpl_vars['sbtn'] == 'mql'): ?><?php echo $this->_tpl_vars['qlist_txt4']; ?>
<?php elseif ($this->_tpl_vars['sbtn'] == 'ufavs'): ?><?php echo $this->_tpl_vars['ft']; ?>
<?php elseif ($this->_tpl_vars['sbtn'] == 'mpl2'): ?><?php echo $this->_tpl_vars['plist_txt1']; ?>
<?php endif; ?></span></td>
		</tr>
	    </table>
	</td>
	<td><span style="font-size: 14px;">&nbsp;&nbsp;/&nbsp;&nbsp;</span></td>
	<td>
	    <div id="sortfa" <?php if ($_REQUEST['page'] == "" && $_REQUEST['pagei'] == "" && $_REQUEST['vtype'] == "" && $_REQUEST['itype'] == ""): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>>
	    <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>
	    <ul id="<?php if ($this->_tpl_vars['site_theme'] == 'metube'): ?>Menu_tube3<?php else: ?>Menu4<?php endif; ?>" class="<?php if ($this->_tpl_vars['site_theme'] == 'metube'): ?>MM_tube<?php else: ?>MM2<?php endif; ?>" style="padding: 0px; margin: 0px; line-height: 15px;">
		<li>
		    <table cellpadding="0" cellspacing="0">
			<tr>
			    <td>
				<a href="javascript:void(0)">
				    <span style="font-size: 14px; margin-right: 3px;">
					<?php if ($_REQUEST['atype'] == "" || $_REQUEST['atype'] == 'all'): ?><?php echo $this->_tpl_vars['adm_sortall']; ?>
<?php elseif ($_REQUEST['atype'] == 'date'): ?><?php echo $this->_tpl_vars['mostrecent']; ?>
<?php elseif ($_REQUEST['atype'] == 'featured'): ?><?php echo $this->_tpl_vars['adm_sortfeat']; ?>
<?php elseif ($_REQUEST['atype'] == 'views'): ?><?php echo $this->_tpl_vars['mostvieweda']; ?>
<?php elseif ($_REQUEST['atype'] == 'comments'): ?><?php echo $this->_tpl_vars['mostcomm']; ?>
<?php elseif ($_REQUEST['atype'] == 'responses'): ?><?php echo $this->_tpl_vars['fresp_txt28']; ?>
<?php elseif ($_REQUEST['atype'] == 'ratings'): ?><?php echo $this->_tpl_vars['toprated']; ?>
<?php elseif ($_REQUEST['atype'] == 'favorited'): ?><?php echo $this->_tpl_vars['topfav']; ?>
<?php endif; ?>
				    </span>
				</a>
			    </td>
			</tr>
		    </table>
		    <ul id="hidem4">
            		<?php if ($this->_tpl_vars['enable_audio'] == '1'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_sortmyfilesfava.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
            	    </ul>
		</li>
	    </ul>
	    <?php endif; ?>
	    </div>
	    <div id="sortfi" style="<?php if ($this->_tpl_vars['enable_audio'] == '1' && ( $_REQUEST['pagei'] == "" && $_REQUEST['itype'] == "" )): ?>display: none;<?php elseif ($this->_tpl_vars['enable_audio'] == '0' && $this->_tpl_vars['enable_images'] == '0'): ?>display: none;<?php elseif ($this->_tpl_vars['enable_audio'] == '0' && $_REQUEST['vtype'] != ""): ?>display: none;<?php else: ?>display: block;<?php endif; ?>">
	    <?php if ($this->_tpl_vars['enable_images'] == '1'): ?>
	    <ul id="<?php if ($this->_tpl_vars['site_theme'] == 'metube'): ?>Menu_tube4<?php else: ?>Menu5<?php endif; ?>" class="<?php if ($this->_tpl_vars['site_theme'] == 'metube'): ?>MM_tube<?php else: ?>MM2<?php endif; ?>" style="padding: 0px; margin: 0px; line-height: 15px;">
		<li>
		    <table cellpadding="0" cellspacing="0">
			<tr>
			    <td>
				<a href="javascript:void(0)">
				    <span style="font-size: 14px; margin-right: 3px;">
					<?php if ($_REQUEST['itype'] == "" || $_REQUEST['itype'] == 'all'): ?><?php echo $this->_tpl_vars['adm_sortall']; ?>
<?php elseif ($_REQUEST['itype'] == 'date'): ?><?php echo $this->_tpl_vars['mostrecent']; ?>
<?php elseif ($_REQUEST['itype'] == 'featured'): ?><?php echo $this->_tpl_vars['adm_sortfeat']; ?>
<?php elseif ($_REQUEST['itype'] == 'views'): ?><?php echo $this->_tpl_vars['mostviewed']; ?>
<?php elseif ($_REQUEST['itype'] == 'comments'): ?><?php echo $this->_tpl_vars['mostcomm']; ?>
<?php elseif ($_REQUEST['itype'] == 'responses'): ?><?php echo $this->_tpl_vars['fresp_txt28']; ?>
<?php elseif ($_REQUEST['itype'] == 'ratings'): ?><?php echo $this->_tpl_vars['toprated']; ?>
<?php elseif ($_REQUEST['itype'] == 'favorited'): ?><?php echo $this->_tpl_vars['topfav']; ?>
<?php endif; ?>
				    </span>
				</a>
			    </td>
			</tr>
		    </table>
		    <ul id="hidem5">
            		<?php if ($this->_tpl_vars['enable_images'] == '1'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_sortmyfilesfavi.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
            	    </ul>
		</li>
	    </ul>
	    <?php endif; ?>
	    </div>
	    <div id="sortfv" style="<?php if ($this->_tpl_vars['enable_audio'] != '1' && $this->_tpl_vars['enable_images'] != '1'): ?>display: block;<?php elseif ($_REQUEST['page'] != "" || $_REQUEST['vtype'] != ""): ?>display: block;<?php else: ?>display: none;<?php endif; ?>">
	    <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>
	    <ul id="<?php if ($this->_tpl_vars['site_theme'] == 'metube'): ?>Menu_tube5<?php else: ?>Menu6<?php endif; ?>" class="<?php if ($this->_tpl_vars['site_theme'] == 'metube'): ?>MM_tube<?php else: ?>MM2<?php endif; ?>" style="padding: 0px; margin: 0px; line-height: 15px;">
		<li>
		    <table cellpadding="0" cellspacing="0">
			<tr>
			    <td>
				<a href="javascript:void(0)">
				    <span style="font-size: 14px; margin-right: 3px;">
					<?php if ($_REQUEST['vtype'] == "" || $_REQUEST['vtype'] == 'all'): ?><?php echo $this->_tpl_vars['adm_sortall']; ?>
<?php elseif ($_REQUEST['vtype'] == 'date'): ?><?php echo $this->_tpl_vars['mostrecent']; ?>
<?php elseif ($_REQUEST['vtype'] == 'featured'): ?><?php echo $this->_tpl_vars['adm_sortfeat']; ?>
<?php elseif ($_REQUEST['vtype'] == 'views'): ?><?php echo $this->_tpl_vars['mostviewed']; ?>
<?php elseif ($_REQUEST['vtype'] == 'comments'): ?><?php echo $this->_tpl_vars['mostcomm']; ?>
<?php elseif ($_REQUEST['vtype'] == 'responses'): ?><?php echo $this->_tpl_vars['fresp_txt28']; ?>
<?php elseif ($_REQUEST['vtype'] == 'ratings'): ?><?php echo $this->_tpl_vars['toprated']; ?>
<?php elseif ($_REQUEST['vtype'] == 'favorited'): ?><?php echo $this->_tpl_vars['topfav']; ?>
<?php endif; ?>
				    </span>
				</a>
			    </td>
			</tr>
		    </table>
		    <ul id="hidem6">
            		<?php if ($this->_tpl_vars['enable_videos'] == '1'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_sortmyfilesfav.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
            	    </ul>
		</li>
	    </ul>
	    <?php endif; ?>
	    </div>
	</td>
    </tr>
</table>