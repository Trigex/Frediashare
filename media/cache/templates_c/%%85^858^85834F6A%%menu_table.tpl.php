<?php /* Smarty version 2.6.26, created on 2009-11-10 15:17:50
         compiled from header/menu_table.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'footer_links', 'header/menu_table.tpl', 8, false),array('modifier', 'lower', 'header/menu_table.tpl', 48, false),array('modifier', 'capitalize', 'header/menu_table.tpl', 48, false),)), $this); ?>
<!-- BEGIN NAVMENU TABLE -->
<?php if ($this->_tpl_vars['site_theme'] == 'black' || $this->_tpl_vars['site_theme'] == 'blue'): ?>
<table cellpadding=0 cellspacing=0 border=0 align="center">
    <tr>
	<td colspan=3 class="headercolorfill" valign="top">
	    <table cellpadding="0" cellspacing="0" border="0" align=center class="width950">
		<tr>
		    <td><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'footer_links', 'assign' => 'logo', 'ff' => 'lt')), $this); ?>
<?php if ($this->_tpl_vars['logo'] == '1'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "static/logo_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
		    <td width="45%" valign="top"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header/search_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
		</tr>
	    </table>
	</td>
    </tr>
    <tr>
	<td class="headerbg_left">&nbsp;</td>
	<td valign="bottom" class="headerbg_fill" align="center">
	    <div id="container" align="center">
		<div id="header" align="center">				
		    <ul id="tnav">
			<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/main" <?php if ($this->_tpl_vars['btn'] == 'bhome' || $this->_tpl_vars['btn'] == 'messages'): ?>class="home"<?php endif; ?>><?php echo $this->_tpl_vars['navhome']; ?>
</a></li>
			<?php if ($this->_tpl_vars['enable_audio'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/audios" <?php if ($this->_tpl_vars['btn'] == 'baudio'): ?>class="home"<?php endif; ?>><?php echo $this->_tpl_vars['navaudio']; ?>
</a></li><?php endif; ?>
			<?php if ($this->_tpl_vars['enable_images'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/images" <?php if ($this->_tpl_vars['btn'] == 'bimage'): ?>class="home"<?php endif; ?>><?php echo $this->_tpl_vars['navimage']; ?>
</a></li><?php endif; ?>
			<?php if ($this->_tpl_vars['enable_videos'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/videos" <?php if ($this->_tpl_vars['btn'] == 'bvideo'): ?>class="home"<?php endif; ?>><?php echo $this->_tpl_vars['navvideo']; ?>
</a></li><?php endif; ?>
			<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/categories" <?php if ($this->_tpl_vars['btn'] == 'bcateg'): ?>class="home"<?php endif; ?>><?php echo $this->_tpl_vars['navcat']; ?>
</a></li>
			<?php if ($this->_tpl_vars['enable_channels'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/channels" <?php if ($this->_tpl_vars['btn'] == 'bchan'): ?>class="home"<?php endif; ?>><?php echo $this->_tpl_vars['navchan']; ?>
</a></li><?php endif; ?>
			<?php if ($this->_tpl_vars['members_section'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/members" <?php if ($this->_tpl_vars['btn'] == 'bmember'): ?>class="home"<?php endif; ?>><?php echo $this->_tpl_vars['navmem']; ?>
</a></li><?php endif; ?>
			<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/upload" <?php if ($this->_tpl_vars['btn'] == 'bupload'): ?>class="home"<?php endif; ?>><?php echo $this->_tpl_vars['navup']; ?>
</a></li>
		    </ul>
		</div>
	    </div>
	</td>
	<td class="headerbg_right">&nbsp;</td>	
    </tr>
</table>
<?php elseif ($this->_tpl_vars['site_theme'] == 'metube'): ?>
<table cellpadding=0 cellspacing=0 border=0 align="center" width="950">
    <tr>
	<td align="left"><div id="logo_c1"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'footer_links', 'assign' => 'logo', 'ff' => 'lt')), $this); ?>
<?php if ($this->_tpl_vars['logo'] == '1'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "static/logo_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></div></td>
	<td align="right"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header/search_tabletoplinks.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
    </tr>
</table>
<table cellpadding=0 cellspacing=0 border=0 align="center" width="950" style="border: 1px solid #c5d0d6;">
    <tr>
	<td align="left" valign="top">
	<div class="head_c1">
	    <table cellpadding="10" cellspacing="0" border="0">
		<tr>
	    	    <td id="m1" onmouseover="setactive('m1');" onmouseout="setinactive('m1');"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/main"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['navhome'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</a></td>
		    <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?><td id="m2" onmouseover="setactive('m2');" onmouseout="setinactive('m2');" class="mbrd_left"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/audios"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['navaudio'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</a></td><?php endif; ?>
		    <?php if ($this->_tpl_vars['enable_images'] == '1'): ?><td id="m3" onmouseover="setactive('m3');" onmouseout="setinactive('m3');" class="mbrd_left"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/images"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['navimage'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</a></td><?php endif; ?>
		    <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?><td id="m4" onmouseover="setactive('m4');" onmouseout="setinactive('m4');" class="mbrd_left"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/videos"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['navvideo'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</a></td><?php endif; ?>
		    <?php if ($this->_tpl_vars['enable_channels'] == '1'): ?><td id="m5" onmouseover="setactive('m5');" onmouseout="setinactive('m5');" class="mbrd_leftright"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/channels"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['navchan'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</a></td><?php else: ?><td id="m5" onmouseover="setactive('m5');" onmouseout="setinactive('m5');" class="mbrd_leftright"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/members"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['navmem'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</a></td><?php endif; ?>
		    <td class="nopad" style="padding-left: 70px;"><input type="text" name="search" class="search" id="boxS"></td>
		    <td class="nopad">&nbsp;&nbsp;<input type="button" name="searchbtn" value="<?php echo $this->_tpl_vars['btn_searchtext']; ?>
" class="fb" onclick="location.href='<?php echo $this->_tpl_vars['base_url']; ?>
/search/all/'+document.getElementById('boxS').value;"></td>
		</tr>
	    </table>
	</div>
	</td>
	<td align="center" class="head_c1" valign="middle">
	    <table cellpadding="0" cellspacing="0" border="0">
		<tr>
		    <td>
			<ul id="Menu_upload" class="MM_upload">
			    <li><a id="upload_menu" class="rollover" href="javascript:void(0)"><span class="alt"></span><img src="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/images/transparent.gif" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['navup'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
" width="92" height="25"></a>
				<ul>
				    <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/upload_audio"><?php echo $this->_tpl_vars['title_upaudios']; ?>
</a></li><?php endif; ?>
				    <?php if ($this->_tpl_vars['enable_images'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/upload_image"><?php echo $this->_tpl_vars['title_upimages']; ?>
</a></li><?php endif; ?>
				    <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/upload_video"><?php echo $this->_tpl_vars['title_upvideos']; ?>
</a></li><?php endif; ?>
				</ul>
			    </li>
			</ul>
		    </td>
		</tr>
	    </table>
	</td>
    </tr>
</table>
<?php else: ?>
<table cellpadding=0 cellspacing=0 border=0 align="center">
    <tr>
	<td colspan=3 class="headercolorfill">
	    <table cellpadding="0" cellspacing="0" border="0" align=center class="width950">
		<tr>
		    <td><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'footer_links', 'assign' => 'logo', 'ff' => 'lt')), $this); ?>
<?php if ($this->_tpl_vars['logo'] == '1'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "static/logo_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
		    <td width="45%" valign="bottom"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header/search_table.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
		</tr>
	    </table>
	</td>
    </tr>
    <tr>
	<td class="headerbg_left">&nbsp;</td>
	<td class="headerbg_fill" valign="top">
	    <div id="header">
	        <ul>
	    	    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/main"> <?php if ($this->_tpl_vars['btn'] == 'bhome' || $this->_tpl_vars['btn'] == 'messages'): ?><span><?php endif; ?><?php echo $this->_tpl_vars['navhome']; ?>
<?php if ($this->_tpl_vars['btn'] == 'bhome' || $this->_tpl_vars['btn'] == 'messages'): ?></span><?php endif; ?></a></li>
		    <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/audios"> <?php if ($this->_tpl_vars['btn'] == 'baudio'): ?><span><?php endif; ?><?php echo $this->_tpl_vars['navaudio']; ?>
<?php if ($this->_tpl_vars['btn'] == 'baudio'): ?></span><?php endif; ?></a></li><?php endif; ?>
		    <?php if ($this->_tpl_vars['enable_images'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/images"> <?php if ($this->_tpl_vars['btn'] == 'bimage'): ?><span><?php endif; ?><?php echo $this->_tpl_vars['navimage']; ?>
<?php if ($this->_tpl_vars['btn'] == 'bimage'): ?></span><?php endif; ?></a></li><?php endif; ?>
		    <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/videos"> <?php if ($this->_tpl_vars['btn'] == 'bvideo'): ?><span><?php endif; ?><?php echo $this->_tpl_vars['navvideo']; ?>
<?php if ($this->_tpl_vars['btn'] == 'bvideo'): ?></span><?php endif; ?></a></li><?php endif; ?>
		    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/categories"> <?php if ($this->_tpl_vars['btn'] == 'bcateg'): ?><span><?php endif; ?><?php echo $this->_tpl_vars['navcat']; ?>
<?php if ($this->_tpl_vars['btn'] == 'bcateg'): ?></span><?php endif; ?></a></li>
		    <?php if ($this->_tpl_vars['enable_channels'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/channels" <?php if ($this->_tpl_vars['btn'] == 'bchan'): ?> class="home"<?php endif; ?>><?php echo $this->_tpl_vars['navchan']; ?>
</a></li><?php endif; ?>
		    <?php if ($this->_tpl_vars['members_section'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/members"> <?php if ($this->_tpl_vars['btn'] == 'bmember'): ?><span><?php endif; ?><?php echo $this->_tpl_vars['navmem']; ?>
<?php if ($this->_tpl_vars['btn'] == 'bmember'): ?></span><?php endif; ?></a></li><?php endif; ?>
		    <li class="last"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/upload"> <?php if ($this->_tpl_vars['btn'] == 'bupload'): ?><span><?php endif; ?><?php echo $this->_tpl_vars['navup']; ?>
<?php if ($this->_tpl_vars['btn'] == 'bupload'): ?></span><?php endif; ?></a></li>
		</ul>
	    </div>
	</td>
	<td class="headerbg_right">&nbsp;</td>
    </tr>
</table>
<?php endif; ?>
<!-- END NAVMENU TABLE -->