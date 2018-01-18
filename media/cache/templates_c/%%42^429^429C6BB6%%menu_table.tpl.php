<?php /* Smarty version 2.6.26, created on 2009-11-10 15:24:15
         compiled from administration/header/menu_table.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'footer_links', 'administration/header/menu_table.tpl', 8, false),array('modifier', 'lower', 'administration/header/menu_table.tpl', 47, false),array('modifier', 'capitalize', 'administration/header/menu_table.tpl', 47, false),)), $this); ?>
<!-- BEGIN NAVMENU TABLE -->
<?php if ($this->_tpl_vars['site_theme'] == 'black' || $this->_tpl_vars['site_theme'] == 'blue'): ?>
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
		    <td width="45%" valign="middle"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/header/search_table.tpl", 'smarty_include_vars' => array()));
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
                	<li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/audios/all/all_time" <?php if ($this->_tpl_vars['btn'] == 'adm_audio'): ?>class="home"<?php endif; ?>><?php echo $this->_tpl_vars['navaudio']; ?>
</a></li>                                                       
                        <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/images/all/all_time" <?php if ($this->_tpl_vars['btn'] == 'adm_image'): ?>class="home"<?php endif; ?>><?php echo $this->_tpl_vars['navimage']; ?>
</a></li>                                                       
                        <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/videos/all/all_time" <?php if ($this->_tpl_vars['btn'] == 'adm_video'): ?>class="home"<?php endif; ?>><?php echo $this->_tpl_vars['navvideo']; ?>
</a></li>                                                       
                        <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/player" <?php if ($this->_tpl_vars['btn'] == 'adm_fp'): ?>class="home"<?php endif; ?>><?php echo $this->_tpl_vars['navplayers']; ?>
</a></li>                                                            
                        <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/categories" <?php if ($this->_tpl_vars['btn'] == 'adm_categ'): ?>class="home"<?php endif; ?>><?php echo $this->_tpl_vars['navcat']; ?>
</a></li>                                                         
                        <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/registered" <?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?>class="home"<?php endif; ?>><?php echo $this->_tpl_vars['navmem']; ?>
</a></li>                                                          
                        <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/general" <?php if ($this->_tpl_vars['btn'] == 'adm_set'): ?>class="home"<?php endif; ?>><?php echo $this->_tpl_vars['navsettings']; ?>
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
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/header/search_tabletoplinks.tpl", 'smarty_include_vars' => array()));
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
                    <td id="m2" onmouseover="setactive('m2');" onmouseout="setinactive('m2');" class=""><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/audios/all/all_time"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['navaudio'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</a></td>
                    <td id="m3" onmouseover="setactive('m3');" onmouseout="setinactive('m3');" class="mbrd_left"><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/images/all/all_time"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['navimage'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</a></td>
                    <td id="m4" onmouseover="setactive('m4');" onmouseout="setinactive('m4');" class="mbrd_left"><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/videos/all/all_time"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['navvideo'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</a></td>
                    <td id="m1" onmouseover="setactive('m1');" onmouseout="setinactive('m1');" class="mbrd_left"><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/player"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['navplayers'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</a></td>
                    <td id="m6" onmouseover="setactive('m6');" onmouseout="setinactive('m6');" class="mbrd_left"><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/categories"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['navcat'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</a></td>
                    <td id="m7" onmouseover="setactive('m7');" onmouseout="setinactive('m7');" class="mbrd_left"><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/registered"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['navmem'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</a></td>
                    <td id="m5" onmouseover="setactive('m5');" onmouseout="setinactive('m5');" class="mbrd_leftright"><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/general"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['navsettings'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</a></td>
                    <td class="nopad" style="padding-left: 50px;"><input type="text" name="search" class="search" id="boxS"></td>
                    <td class="nopad">&nbsp;&nbsp;<input type="button" name="searchbtn" value="<?php echo $this->_tpl_vars['btn_searchtext']; ?>
" class="fb" onclick="location.href='<?php echo $this->_tpl_vars['admin_url']; ?>
/search/all/'+document.getElementById('boxS').value;"></td>
                </tr>
            </table>
        </div>
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
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/header/search_table.tpl", 'smarty_include_vars' => array()));
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
                    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/audios/all/all_time"><?php if ($this->_tpl_vars['btn'] == 'adm_audio'): ?><span><?php endif; ?><?php echo $this->_tpl_vars['navaudio']; ?>
<?php if ($this->_tpl_vars['btn'] == 'adm_audio'): ?></span><?php endif; ?></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/images/all/all_time"><?php if ($this->_tpl_vars['btn'] == 'adm_image'): ?><span><?php endif; ?><?php echo $this->_tpl_vars['navimage']; ?>
<?php if ($this->_tpl_vars['btn'] == 'adm_image'): ?></span><?php endif; ?></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/videos/all/all_time"><?php if ($this->_tpl_vars['btn'] == 'adm_video'): ?><span><?php endif; ?><?php echo $this->_tpl_vars['navvideo']; ?>
<?php if ($this->_tpl_vars['btn'] == 'adm_video'): ?></span><?php endif; ?></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/player"><?php if ($this->_tpl_vars['btn'] == 'adm_fp'): ?><span><?php endif; ?><?php echo $this->_tpl_vars['navplayers']; ?>
<?php if ($this->_tpl_vars['btn'] == 'adm_fp'): ?></span><?php endif; ?></a></li>
	            <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/categories"><?php if ($this->_tpl_vars['btn'] == 'adm_categ'): ?><span><?php endif; ?><?php echo $this->_tpl_vars['navcat']; ?>
<?php if ($this->_tpl_vars['btn'] == 'adm_categ'): ?></span><?php endif; ?></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/registered"><?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?><span><?php endif; ?><?php echo $this->_tpl_vars['navmem']; ?>
<?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?></span><?php endif; ?></a></li>
                    <li class="last"><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/general"><?php if ($this->_tpl_vars['btn'] == 'adm_set'): ?><span><?php endif; ?><?php echo $this->_tpl_vars['navsettings']; ?>
<?php if ($this->_tpl_vars['btn'] == 'adm_set'): ?></span><?php endif; ?></a></li>
		</ul>
	    </div>
	</td>
	<td class="headerbg_right">&nbsp;</td>
    </tr>
</table>
<?php endif; ?>		    
<!-- END NAVMENU TABLE -->