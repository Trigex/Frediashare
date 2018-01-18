<?php /* Smarty version 2.6.26, created on 2009-11-10 15:21:42
         compiled from _inc/inc_listimages.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'ad_status', '_inc/inc_listimages.tpl', 4, false),array('insert', 'vid_to_key_image', '_inc/inc_listimages.tpl', 108, false),array('insert', 'titlei', '_inc/inc_listimages.tpl', 109, false),array('insert', 'get_image_playlists2', '_inc/inc_listimages.tpl', 135, false),array('insert', 'get_image_playlists', '_inc/inc_listimages.tpl', 135, false),array('modifier', 'spchar', '_inc/inc_listimages.tpl', 144, false),)), $this); ?>
<table border="0" align="center" cellpadding="5" cellspacing="0" class="width950">
    <tr>
	<td valign="top" width="20%" class="lm">
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ad_status', 'assign' => 'check', 'aname' => 'file_ads_right')), $this); ?>

	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ad_status', 'assign' => 'checkleft', 'aname' => 'file_ads_left')), $this); ?>

            <table cellpadding=2 cellspacing=0 class="pt5" border=0 align="center">
            <?php if ($this->_tpl_vars['btn'] == 'baudio' || $this->_tpl_vars['btn'] == 'bimage' || $this->_tpl_vars['btn'] == 'bvideo'): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_browsecateg.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
            </table><?php if ($this->_tpl_vars['btn'] == 'bvideo' || $this->_tpl_vars['btn'] == 'bimage' || $this->_tpl_vars['btn'] == 'baudio'): ?><br><?php endif; ?>
            <table cellpadding=2 cellspacing=0 class="<?php if ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'mql' || $this->_tpl_vars['sbtn'] == 'ufavs' || $this->_tpl_vars['sbtn'] == 'myaud' || $this->_tpl_vars['sbtn'] == 'myimg' || $this->_tpl_vars['sbtn'] == 'myvid'): ?>pt5<?php endif; ?>" border=0 align="center">
            <?php if ($_SESSION['UID'] != "" && $this->_tpl_vars['panel_mylinks'] == '1'): ?>
        	<?php if ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'ufavs' || $this->_tpl_vars['sbtn'] == 'mql'): ?>
        	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_mylinksfi.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        	<?php else: ?>
        	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_mylinks.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        	<?php endif; ?>
            <?php endif; ?>
            </table>
            <?php if ($this->_tpl_vars['checkleft'] == '1'): ?>
        	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ads/file_ads_left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
        </td> 
        
	<td valign="top" class="nopad_bg" <?php if ($this->_tpl_vars['check'] == '1' || $this->_tpl_vars['panel_rightlinks'] == '1'): ?>width="65%"<?php else: ?>width="80%"<?php endif; ?>>
	    <table width="100%" cellpadding="0" cellspacing="0" align="left">
	    <?php if ($_REQUEST['iplkey'] != ""): ?>
		<tr>
		    <td>
	    <table align="left" width="100%">
        	<tr><td align="left"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_listipl.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
    	    </table>
    		    </td>
    		</tr>
    	    <?php endif; ?>
        
    	    <?php if ($this->_tpl_vars['btn'] == 'bimage'): ?>
    		<tr>
    		    <td>
        <div id="imagetags" <?php if ($_SESSION['imagetags'] == 'off'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>>
            <table width="100%" cellpadding="5" cellspacing="0" border="0" align="left">
                <tr><td class="centered"><?php echo $this->_tpl_vars['itags']; ?>
</td></tr>
            </table>
        </div>
    		    </td>
    		</tr>
    	    <?php endif; ?>
    	    
    	    <?php if ($this->_tpl_vars['sbtn'] == 'myimg'): ?>
    		<tr>
    		    <td>
        <div id="mytags" <?php if ($_SESSION['mytags'] == 'off'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>>
            <table width="100%" cellpadding="5" cellspacing="0" border="0" align="left">
                <tr>
                    <td class="centered"><?php if ($this->_tpl_vars['mytags'] == ""): ?><?php echo $this->_tpl_vars['err_notags']; ?>
<?php else: ?><?php echo $this->_tpl_vars['mytags']; ?>
<?php endif; ?></td>
                </tr>
            </table>
        </div>
    		    </td>
    		</tr>
    	    <?php endif; ?>
    	    
	    <?php if ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'ufavs' || $this->_tpl_vars['sbtn'] == 'mql'): ?>
    		<tr>
    		    <td>
        <div id="myfavitags" <?php if ($_SESSION['mytags'] == 'off'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>>
            <table width="100%" cellpadding=5 cellspacing=0 border=0 align="left">
                <tr>
                    <td class="centered"><?php echo $this->_tpl_vars['itags']; ?>
</td>
                </tr>
            </table>
        </div>
    		    </td>
    		</tr>
    	    <?php endif; ?>
        
    		<tr>
    		    <td>
	<?php if ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'ufavs' || $this->_tpl_vars['sbtn'] == 'mql'): ?><?php if ($this->_tpl_vars['sbtn'] == 'fav'): ?><?php $this->assign('loc', 'my_favorites'); ?><?php elseif ($this->_tpl_vars['sbtn'] == 'mql'): ?><?php $this->assign('loc', 'my_quicklist'); ?><?php elseif ($this->_tpl_vars['sbtn'] == 'mpl2'): ?><?php $this->assign('loc', 'my_playlists'); ?><?php endif; ?>
	    <div id="ilistview" <?php if ($_SESSION['viewmode'] == 'list' || $_REQUEST['iaction'] != ""): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?> class="">
	    <form name="ifilesel" method="post" action="">
	<?php else: ?>
	    <div id="listview" <?php if ($_SESSION['viewmode'] == 'list'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?> class="">
	    <form name="filesel" method="post" action="">
	<?php endif; ?>
	
	    <table cellpadding=5 cellspacing=1 border=0 width="100%" align="left">
                <?php if ($this->_tpl_vars['sbtn'] == 'myimg' && $this->_tpl_vars['imgs'][0]['vid'] != ""): ?>
                    <tr>
                        <td class="" align="center" width="3%"><input type="checkbox" name="checkall" id="checkall" value="0" onclick="if (this.checked == true) { checkAllmya(document.filesel['mid[]']); ShowContent('actdiv'); } else if (this.checked == false) { uncheckAllmya(document.filesel['mid[]']); HideContent('actdiv'); }"></td>
                        <td><a href="javascript:void(0)" onclick="if (document.getElementById('checkall').checked == false) { document.getElementById('checkall').checked = true; checkAllmya(document.filesel['mid[]']); ShowContent('actdiv'); } else if (document.getElementById('checkall').checked == true) { document.getElementById('checkall').checked = false; uncheckAllmya(document.filesel['mid[]']); HideContent('actdiv'); }"><?php echo $this->_tpl_vars['grid_txt1']; ?>
</a></td>
                    </tr>
                <?php elseif (( $this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'mql' ) && $this->_tpl_vars['imgs'][0]['vid'] != ""): ?>
                    <tr>
                        <td class="" align="center" width="3%"><input type="checkbox" name="icheckall" id="icheckall" value="0" onclick="if (this.checked == true) { checkAllmyfi(document.ifilesel['imid[]']); ShowContent('iactdiv'); } else if (this.checked == false) { uncheckAllmyfi(document.ifilesel['imid[]']); HideContent('iactdiv'); }"></td>
                        <td><a href="javascript:void(0)" onclick="if (document.getElementById('icheckall').checked == false) { document.getElementById('icheckall').checked = true; checkAllmyfi(document.ifilesel['imid[]']); ShowContent('iactdiv'); } else if (document.getElementById('icheckall').checked == true) { document.getElementById('icheckall').checked = false; uncheckAllmyfi(document.ifilesel['imid[]']); HideContent('iactdiv'); }"><?php echo $this->_tpl_vars['grid_txt1']; ?>
</a></td>
                    </tr>
                <?php endif; ?>
            
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['imgs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
		    <tr class="nbg">
		    <?php if ($this->_tpl_vars['sbtn'] == 'myimg'): ?>
			<td class="th1" align="center"><input type="checkbox" name="mid[]" value="<?php echo $this->_tpl_vars['imgs'][$this->_sections['i']['index']]['vid']; ?>
" onclick="ShowContent('actdiv')"></td>
		    <?php elseif ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'mql'): ?>
			<td class="th1" align="center"><input type="checkbox" name="imid[]" value="<?php echo $this->_tpl_vars['imgs'][$this->_sections['i']['index']]['vid']; ?>
" onclick="ShowContent('iactdiv')"></td> 
		    <?php endif; ?>
			<td valign="top" class="th1" style="padding: 0px;">
			    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'vid_to_key_image', 'assign' => 'keyi', 'vid' => $this->_tpl_vars['imgs'][$this->_sections['i']['index']]['vid'])), $this); ?>

			    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'titlei', 'assign' => 'title', 'vkey' => $this->_tpl_vars['keyi'])), $this); ?>

			    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_listi.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</td>
		    </tr>
		<?php endfor; endif; ?>
		
		<?php if ($this->_tpl_vars['sbtn'] == 'myimg' && $this->_tpl_vars['imgs'][0]['vid'] != ""): ?>
		    <tr><td colspan=2><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_selectact1.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
		<?php elseif (( $this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'mql' ) && $this->_tpl_vars['imgs'][0]['vid'] != ""): ?>
		    <tr>
			<td colspan=2>
			<div id="iactdiv" style="display: none;">
                    	    <table cellpadding=0 cellspacing=0 border=0 align="left" width="100%">
                        	<tr>
                            	    <td class="" valign="top" width="185">
                                	<select name="iactions" class="selbox" <?php if ($_SESSION['UID'] != ""): ?>onchange="if(this.selectedIndex == '1') { HideContent('btn1il'); ShowContent('btn2il'); } else { ShowContent('btn1il'); HideContent('btn2il'); }"<?php endif; ?>>
                                	    <option value="<?php echo $this->_tpl_vars['inbox_acts']; ?>
"><?php echo $this->_tpl_vars['inbox_acts']; ?>
</option>
                                	    <?php if ($_SESSION['UID'] != ""): ?><option value="<?php echo $this->_tpl_vars['qlist_txt14']; ?>
"><?php echo $this->_tpl_vars['qlist_txt14']; ?>
</option><?php endif; ?>
                                	    <?php if ($this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'mql'): ?><option value="<?php echo $this->_tpl_vars['act_addfav']; ?>
"><?php echo $this->_tpl_vars['act_addfav']; ?>
</option><?php endif; ?>
                                	    <?php if ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2'): ?><option value="<?php echo $this->_tpl_vars['qlist_txt1']; ?>
"><?php echo $this->_tpl_vars['qlist_txt1']; ?>
</option><?php endif; ?>
                                	    <option value="<?php echo $this->_tpl_vars['inbox_itblact6']; ?>
"><?php echo $this->_tpl_vars['inbox_itblact6']; ?>
</option>
                                	</select>
                            	    </td>
                            	    <td class="pl5" valign="top">
                            		<div id="btn1il" style="display: block;"><input type="submit" name="igoact" value="<?php echo $this->_tpl_vars['btn_apply']; ?>
" class="fb"></div>
                                        <div id="btn2il" style="display: none;" class="p1">
                                    	    <?php if ($this->_tpl_vars['sbtn'] == 'mpl2'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_image_playlists2', 'assign' => 'ipl', 'vkey' => $_REQUEST['iplkey'])), $this); ?>
<?php else: ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_image_playlists', 'assign' => 'ipl')), $this); ?>
<?php endif; ?>
                                            <table cellpadding="0" cellspacing="0" border="0" align="left" width="100%">
                                        	<tr>
                                        	    <td>
                                        	    <?php if ($this->_tpl_vars['ipl'][0]['vkey'] != ""): ?>
                                            <table cellpadding="1" cellspacing="0" border="0" align="left" width="100%">
                                            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['ipl']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                                                <tr>
                                                    <td width="1%"><input type="checkbox" name="ilpl[]" value="<?php echo $this->_tpl_vars['ipl'][$this->_sections['i']['index']]['vkey']; ?>
"></td>
                                                    <td align="left" width="99%"><?php echo ((is_array($_tmp=$this->_tpl_vars['ipl'][$this->_sections['i']['index']]['pname'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</td>
                                                </tr>
                                            <?php endfor; endif; ?>
                                            </table>
                                        	    <?php else: ?><?php echo $this->_tpl_vars['plist_txt63']; ?>
<?php endif; ?>
                                        	    </td>
                                        	</tr>
                                        	<tr>
                                        	    <td>
                                        	    <?php if ($this->_tpl_vars['ipl'][0]['vkey'] != ""): ?>
                                            <table cellpadding="4" cellspacing="0" border="0" align="left" width="100%">
                                                <tr>
                                                    <td><input type="submit" name="igoact" value="<?php echo $this->_tpl_vars['btn_apply']; ?>
" class="fb"></td>
                                                </tr>
                                            </table>
                                        	    <?php endif; ?>
                                        	    </td>
                                        	</tr>
                                    	    </table>
                                        </div>
                            	    </td>
                        	</tr>
                    	    </table>
                	</div>
			</td>
		    </tr>
		<?php endif; ?>
		
	    </form>
		    <tr>
			<td colspan="2">
	    <table cellpadding=5 cellspacing=0 border=0 align="left" width="100%">
		<tr>
		    <td class="pag_bg">
		    <?php if ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'ufavs' || $this->_tpl_vars['sbtn'] == 'mql'): ?>
			<?php if ($this->_tpl_vars['totali'] == '0' && $this->_tpl_vars['sbtn'] != 'mpl2'): ?><?php echo $this->_tpl_vars['mypl_imagenone']; ?>
<?php else: ?><?php echo $this->_tpl_vars['linki']; ?>
<?php endif; ?>
		    <?php else: ?>
			<?php echo $this->_tpl_vars['link']; ?>

		    <?php endif; ?>
		    </td>
		</tr>
	    </table>
			</td>
		    </tr>
		</table>	
	    </div>
		    </td>
		</tr>
		<tr>
		    <td>    
        <?php if ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'ufavs' || $this->_tpl_vars['sbtn'] == 'mql'): ?>
            <div id="igridview" <?php if ($_SESSION['viewmode'] == 'grid'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>>
            <form name="gifilesel" method="post" action="">
        <?php else: ?>
    	    <div id="gridview" <?php if ($_SESSION['viewmode'] == 'grid'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>>
    	    <form name="gifilesel" method="post" action="">
        <?php endif; ?>
    	    <table cellpadding="0" cellspacing="0" align="center" border=0>
    	    <tr>
    	    <td>
	    <table cellpadding=5 cellspacing=1 border=0 align=left>
                <?php if ($this->_tpl_vars['imgs'][0]['vid'] != "" && $this->_tpl_vars['sbtn'] == 'myimg'): ?>
                    <tr>
                        <td align="left" width="1%"><input type="checkbox" id="gcheckall" name="gcheckall" value="0" onclick="if (this.checked == true) { icheckAllmya(document.gifilesel['gmid[]']); ShowContent('actdiv2'); } else if (this.checked == false) { iuncheckAllmya(document.gifilesel['gmid[]']); HideContent('actdiv2'); }"></td>
                        <td><a href="javascript:void(0)" onclick="if (document.getElementById('gcheckall').checked == false) { document.getElementById('gcheckall').checked = true; icheckAllmya(document.gifilesel['gmid[]']); ShowContent('actdiv2'); } else if (document.getElementById('gcheckall').checked == true) { document.getElementById('gcheckall').checked = false; iuncheckAllmya(document.gifilesel['gmid[]']); HideContent('actdiv2'); }"><?php echo $this->_tpl_vars['grid_txt1']; ?>
</a></td>
                    </tr>
                <?php elseif ($this->_tpl_vars['imgs'][0]['vid'] != "" && ( $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mql' )): ?>
                    <tr>
                        <td align="left" width="1%"><input type="checkbox" id="gicheckall" name="gicheckall" value="0" onclick="if (this.checked == true) { checkAllmyfig(document.gifilesel['gimid[]']); ShowContent('iactdiv2'); } else if (this.checked == false) { uncheckAllmyfig(document.gifilesel['gimid[]']); HideContent('iactdiv2'); }"></td>
                        <td><a href="javascript:void(0)" onclick="if (document.getElementById('gicheckall').checked == false) { document.getElementById('gicheckall').checked = true; checkAllmyfig(document.gifilesel['gimid[]']); ShowContent('iactdiv2'); } else if (document.getElementById('gicheckall').checked == true) { document.getElementById('gicheckall').checked = false; uncheckAllmyfig(document.gifilesel['gimid[]']); HideContent('iactdiv2'); }"><?php echo $this->_tpl_vars['grid_txt1']; ?>
</a></td>
                    </tr>
                <?php endif; ?>
            </table>
    	    </td>
    	    </tr>
    	    <tr>
    	    <td>
	    <table cellpadding=6 cellspacing=0 border=0>
		<tr>
		    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['imgs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
		    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ad_status', 'assign' => 'check', 'aname' => 'file_ads_right')), $this); ?>

                    <?php if ($this->_tpl_vars['check'] == '1' || $this->_tpl_vars['panel_rightlinks'] == '1'): ?><?php $this->assign('items', 4); ?><?php else: ?><?php $this->assign('items', 5); ?><?php endif; ?>
		    <?php if ($this->_sections['i']['index'] % $this->_tpl_vars['items'] == '0' && $this->_sections['i']['index'] > '0'): ?></tr><tr><?php endif; ?>
		    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'vid_to_key_image', 'assign' => 'keyi', 'vid' => $this->_tpl_vars['imgs'][$this->_sections['i']['index']]['vid'])), $this); ?>

		    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'titlei', 'assign' => 'title', 'vkey' => $this->_tpl_vars['keyi'])), $this); ?>

		    <td valign="top" class="nbg">
			<table cellpadding=0 cellspacing=1 border="0">
			    <tr>
				<td>
				    <table cellpadding=1 cellspacing=0 border=0>
					<tr>
					    <td>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_gridi.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					    </td>
					</tr>
				    </table>
				</td>
			    </tr>
			</table>
		    </td>
		    <?php endfor; endif; ?>
		</tr>
	    </table>
	    </td>
	    </tr>
	    <tr>
	    <td>
	    <?php if ($this->_tpl_vars['sbtn'] == 'myimg' && $this->_tpl_vars['imgs'][0]['vid'] != ""): ?>
	    <table cellpadding=5 cellspacing=0 border=0 align="left" width="100%">
		<tr><td colspan=2><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_selectact2.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
	    </table>
	    <?php elseif (( $this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'mql' ) && $this->_tpl_vars['imgs'][0]['vid'] != ""): ?>
	    <table cellpadding=5 cellspacing=0 border=0 align="left" width="100%">
		<tr>
		    <td colspan=2>
			<div id="iactdiv2" style="display: none;">
			    <table cellpadding=0 cellspacing=0 border=0 align="left" width="100%">
				<tr>
				    <td class="" valign="top" width="185">
					<select name="iactions2" class="selbox" <?php if ($_SESSION['UID'] != ""): ?>onchange="if(this.selectedIndex == '1') { HideContent('btn1ig'); ShowContent('btn2ig'); } else { ShowContent('btn1ig'); HideContent('btn2ig'); }"<?php endif; ?>>
					    <option value="<?php echo $this->_tpl_vars['inbox_acts']; ?>
"><?php echo $this->_tpl_vars['inbox_acts']; ?>
</option>
					    <?php if ($_SESSION['UID'] != ""): ?><option value="<?php echo $this->_tpl_vars['qlist_txt14']; ?>
"><?php echo $this->_tpl_vars['qlist_txt14']; ?>
</option><?php endif; ?>
					    <?php if ($this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'mql'): ?><option value="<?php echo $this->_tpl_vars['act_addfav']; ?>
"><?php echo $this->_tpl_vars['act_addfav']; ?>
</option><?php endif; ?>
					    <?php if ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2'): ?><option value="<?php echo $this->_tpl_vars['qlist_txt1']; ?>
"><?php echo $this->_tpl_vars['qlist_txt1']; ?>
</option><?php endif; ?>
					    <option value="<?php echo $this->_tpl_vars['inbox_itblact6']; ?>
"><?php echo $this->_tpl_vars['inbox_itblact6']; ?>
</option>
					</select>
				    </td>
                            	    <td class="pl5" valign="top">
                            		<div id="btn1ig" style="display: block;"><input type="submit" name="igoact2" value="<?php echo $this->_tpl_vars['btn_apply']; ?>
" class="fb"></div>
                                        <div id="btn2ig" style="display: none;" class="p1">
                                        <table cellpadding="0" cellspacing="0" border="0" align="left" width="100%">
                                    	    <tr>
                                    		<td>
                                    	    <?php if ($this->_tpl_vars['sbtn'] == 'mpl2'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_image_playlists2', 'assign' => 'ipl', 'vkey' => $_REQUEST['iplkey'])), $this); ?>
<?php else: ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_image_playlists', 'assign' => 'ipl')), $this); ?>
<?php endif; ?>
                                    	    <?php if ($this->_tpl_vars['ipl'][0]['vkey'] != ""): ?>
                                            <table cellpadding="1" cellspacing="0" border="0" align="left" width="100%">
                                            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['ipl']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                                                <tr>
                                                    <td width="1%"><input type="checkbox" name="igpl[]" value="<?php echo $this->_tpl_vars['ipl'][$this->_sections['i']['index']]['vkey']; ?>
"></td>
                                                    <td align="left" width="99%"><?php echo ((is_array($_tmp=$this->_tpl_vars['ipl'][$this->_sections['i']['index']]['pname'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</td>
                                                </tr>
                                            <?php endfor; endif; ?>
                                            </table>
                                    	    <?php else: ?><?php echo $this->_tpl_vars['plist_txt63']; ?>
<?php endif; ?>
                                        	</td>
                                    	    </tr>
                                    	    <tr>
                                    		<td>
                                    		<?php if ($this->_tpl_vars['ipl'][0]['vkey'] != ""): ?>
                                            <table cellpadding="4" cellspacing="0" border="0" align="left" width="100%">
                                                <tr>
                                                    <td><input type="submit" name="igoact2" value="<?php echo $this->_tpl_vars['btn_apply']; ?>
" class="fb"></td>
                                                </tr>
                                            </table>
                                        	<?php endif; ?>
                                        	</td>
                                    	    </tr>
                                    	</table>
                                        </div>
                            	    </td>
				</tr>
			    </table>
			</div>
		    </td>
		</tr>
	    </table>
	    <?php endif; ?>
	    </form>
	    </td>
	    </tr>
	    <tr>
	    <td>
	    <table cellpadding=5 cellspacing=0 border=0 align="left" width="100%">
		<tr>
		    <td class="pag_bg">
		    <?php if ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'ufavs' || $this->_tpl_vars['sbtn'] == 'mql'): ?>
			<?php if ($this->_tpl_vars['totali'] == '0' && $this->_tpl_vars['sbtn'] != 'mpl2'): ?><?php echo $this->_tpl_vars['mypl_imagenone']; ?>
<?php else: ?><?php echo $this->_tpl_vars['linki']; ?>
<?php endif; ?>
		    <?php else: ?>
			<?php echo $this->_tpl_vars['link']; ?>

		    <?php endif; ?>
		    </td>
		</tr>
	    </table>
	    </td>
	    </tr>
	    </table>
	    </div>
		    </td>
		</tr>
	    </table>
	</td>
        <td valign="top" width="20%" class="lm">
            <table cellpadding=2 cellspacing=0 class="pt5" border=0 align="center">
            <?php if ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'ufavs' || $this->_tpl_vars['sbtn'] == 'mql'): ?>
        	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_viewstagsmyfavi.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php else: ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_viewstags.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
            </table><br>
        <?php if ($this->_tpl_vars['panel_rightlinks'] == '1'): ?>
        <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>
    	    <table cellpadding="0" cellspacing="0" align="center" border=0>
        	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_browsea.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    	    </table>
    	    <br>
    	<?php endif; ?>
	<?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>
    	    <table cellpadding="0" cellspacing="0" align="center" border=0>
        	<?php if ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'ufavs' || $this->_tpl_vars['sbtn'] == 'mql'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_browsevfav.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php else: ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_browsev.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
            </table>
        <?php endif; ?>
        <?php endif; ?>
	<?php if ($this->_tpl_vars['check'] == '1'): ?>
    	    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ads/file_ads_right.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
        </td>
    </tr>
</table>