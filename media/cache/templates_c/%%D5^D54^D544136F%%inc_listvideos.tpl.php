<?php /* Smarty version 2.6.26, created on 2009-11-10 15:21:42
         compiled from _inc/inc_listvideos.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'ad_status', '_inc/inc_listvideos.tpl', 4, false),array('insert', 'vid_to_key', '_inc/inc_listvideos.tpl', 104, false),array('insert', 'titlev', '_inc/inc_listvideos.tpl', 105, false),array('insert', 'get_video_playlists2', '_inc/inc_listvideos.tpl', 131, false),array('insert', 'get_video_playlists', '_inc/inc_listvideos.tpl', 131, false),array('modifier', 'spchar', '_inc/inc_listvideos.tpl', 140, false),)), $this); ?>
<table border="0" align="center" cellpadding="5" cellspacing="0" class="width950">
    <tr>
	<td valign="top" width="20%" class="lm">
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ad_status', 'assign' => 'check', 'aname' => 'file_ads_right')), $this); ?>

	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ad_status', 'assign' => 'checkleft', 'aname' => 'file_ads_left')), $this); ?>

    	    <table cellpadding=2 cellspacing=0 class="pt5" border=0 align="center">
            <?php if ($this->_tpl_vars['btn'] == 'bvideo' || $this->_tpl_vars['btn'] == 'bimage' || $this->_tpl_vars['btn'] == 'bvideo'): ?>
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
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_mylinksfv.tpl", 'smarty_include_vars' => array()));
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
	    <?php if ($_REQUEST['vplkey'] != ""): ?>
		<tr>
		    <td>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_listvpl.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		    </td>
		</tr>
	    <?php endif; ?>
	    
	    <?php if ($this->_tpl_vars['btn'] == 'bvideo'): ?>
		<tr>
		    <td>
        <div id="videotags" <?php if ($_SESSION['videotags'] == 'off'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>>
            <table width="100%" cellpadding="5" cellspacing="0" border="0" align="left">
                <tr><td class="centered"><?php echo $this->_tpl_vars['vtags']; ?>
</td></tr>
            </table>
        </div>
    		    </td>
    		</tr>
    	    <?php endif; ?>
    	    
    	    <?php if ($this->_tpl_vars['sbtn'] == 'myvid'): ?>
    		<tr>
    		    <td>
        <div id="mytags" <?php if ($_SESSION['mytags'] == 'off'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>>
            <table width="100%" cellpadding=5 cellspacing=0 border=0 align="left">
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
        <div id="myfavvtags" <?php if ($_SESSION['mytags'] == 'off'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>>
            <table width="100%" cellpadding=5 cellspacing=0 border=0 align="left">
                <tr>
                    <td class="centered"><?php echo $this->_tpl_vars['vtags']; ?>
</td>
                </tr>
            </table>
        </div>
    		    </td>
    		</tr>
    	    <?php endif; ?>
    	    
    		<tr>
    		    <td>
	<?php if ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'ufavs' || $this->_tpl_vars['sbtn'] == 'mql'): ?><?php if ($this->_tpl_vars['sbtn'] == 'fav'): ?><?php $this->assign('loc', 'my_favorites'); ?><?php elseif ($this->_tpl_vars['sbtn'] == 'mpl2'): ?><?php $this->assign('loc', 'my_playlists'); ?><?php elseif ($this->_tpl_vars['sbtn'] == 'mql'): ?><?php $this->assign('loc', 'my_quicklist'); ?><?php endif; ?>
	    <div id="vlistview" <?php if ($_SESSION['viewmode'] == 'list'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?> class="">
	    <form name="vfilesel" method="post" action="">
	<?php else: ?>
	    <div id="listview" <?php if ($_SESSION['viewmode'] == 'list'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?> class="">
	    <form name="filesel" method="post" action="">
	<?php endif; ?>
                <table cellpadding=5 cellspacing=1 border=0 width="100%" align="left">
            	<?php if ($this->_tpl_vars['sbtn'] == 'myvid' && $this->_tpl_vars['vids'][0]['vid'] != ""): ?>
            	    <tr>
            		<td class="" align="center" width="3%"><input type="checkbox" name="checkall" id="checkall" value="0" onclick="if (this.checked == true) { checkAllmya(document.filesel['mid[]']); ShowContent('actdiv'); } else if (this.checked == false) { uncheckAllmya(document.filesel['mid[]']); HideContent('actdiv'); }"></td>
            		<td><a href="javascript:void(0)" onclick="if (document.getElementById('checkall').checked == false) { document.getElementById('checkall').checked = true; checkAllmya(document.filesel['mid[]']); ShowContent('actdiv'); } else if (document.getElementById('checkall').checked == true) { document.getElementById('checkall').checked = false; uncheckAllmya(document.filesel['mid[]']); HideContent('actdiv'); }"><?php echo $this->_tpl_vars['grid_txt1']; ?>
</a></td>
            	    </tr>
            	<?php elseif (( $this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'mql' ) && $this->_tpl_vars['vids'][0]['vid'] != ""): ?>
            	    <tr>
            		<td class="" align="center" width="3%"><input type="checkbox" name="vcheckall" id="vcheckall" value="0" onclick="if (this.checked == true) { checkAllmyfv(document.vfilesel['vmid[]']); ShowContent('vactdiv'); } else if (this.checked == false) { uncheckAllmyfv(document.vfilesel['vmid[]']); HideContent('vactdiv'); }"></td>
            		<td><a href="javascript:void(0)" onclick="if (document.getElementById('vcheckall').checked == false) { document.getElementById('vcheckall').checked = true; checkAllmyfv(document.vfilesel['vmid[]']); ShowContent('vactdiv'); } else if (document.getElementById('vcheckall').checked == true) { document.getElementById('vcheckall').checked = false; uncheckAllmyfv(document.vfilesel['vmid[]']); HideContent('vactdiv'); }"><?php echo $this->_tpl_vars['grid_txt1']; ?>
</a></td>
            	    </tr>
            	<?php endif; ?>
            	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['vids']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <?php if ($this->_tpl_vars['sbtn'] == 'myvid'): ?>
                	<td class="th1" align="center"><input type="checkbox" name="mid[]" value="<?php echo $this->_tpl_vars['vids'][$this->_sections['i']['index']]['vid']; ?>
" onclick="ShowContent('actdiv')"></td>
            	    <?php elseif ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'mql'): ?>
            		<td class="th1" align="center"><input type="checkbox" name="vmid[]" value="<?php echo $this->_tpl_vars['vids'][$this->_sections['i']['index']]['vid']; ?>
" onclick="ShowContent('vactdiv')"></td>
            	    <?php endif; ?>
                        <td valign="top" class="th1" style="padding: 0px;">
			    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'vid_to_key', 'assign' => 'key', 'vid' => $this->_tpl_vars['vids'][$this->_sections['i']['index']]['vid'])), $this); ?>

			    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'titlev', 'assign' => 'title', 'vkey' => $this->_tpl_vars['key'])), $this); ?>

                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_listv.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </td>
                    </tr>
                <?php endfor; endif; ?>
                
		<?php if ($this->_tpl_vars['sbtn'] == 'myvid' && $this->_tpl_vars['vids'][0]['vid'] != ""): ?>
		    <tr><td colspan=2><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_selectact1.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
		<?php elseif (( $this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'mql' ) && $this->_tpl_vars['vids'][0]['vid'] != ""): ?>
            	    <tr>
            		<td colspan=2>
            		    <div id="vactdiv" style="display: none;">
            			<table cellpadding=0 cellspacing=0 border=0 align="left" width="100%">
            			    <tr>
            				<td class="" valign="top" width="185">
            				    <select name="vactions" class="selbox" <?php if ($_SESSION['UID'] != ""): ?>onchange="if(this.selectedIndex == '1') { HideContent('btn1vl'); ShowContent('btn2vl'); } else { ShowContent('btn1vl'); HideContent('btn2vl'); }"<?php endif; ?>>
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
            				<td class="pl5">
                                            <div id="btn1vl" style="display: block;"><input type="submit" name="goact" value="<?php echo $this->_tpl_vars['btn_apply']; ?>
" class="fb"></div>
                                            <div id="btn2vl" style="display: none;" class="p1">
                                            <?php if ($this->_tpl_vars['sbtn'] == 'mpl2'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_video_playlists2', 'assign' => 'vpl', 'vkey' => $_REQUEST['vplkey'])), $this); ?>
<?php else: ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_video_playlists', 'assign' => 'vpl')), $this); ?>
<?php endif; ?>
                                            <table cellpadding="0" cellspacing="0" border="0" align="left" width="100%">
                                        	<tr>
                                        	    <td>
                                        	    <?php if ($this->_tpl_vars['vpl'][0]['vkey'] != ""): ?>
                                            <table cellpadding="1" cellspacing="0" border="0" align="left" width="100%">
                                            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['vpl']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                                    <td width="1%"><input type="checkbox" name="vlpl[]" value="<?php echo $this->_tpl_vars['vpl'][$this->_sections['i']['index']]['vkey']; ?>
"></td>
                                                    <td align="left" width="99%"><?php echo ((is_array($_tmp=$this->_tpl_vars['vpl'][$this->_sections['i']['index']]['pname'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
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
                                        	    <?php if ($this->_tpl_vars['vpl'][0]['vkey'] != ""): ?>
                                            <table cellpadding="4" cellspacing="0" border="0" align="left" width="100%">
                                                <tr>
                                                    <td><input type="submit" name="goact" value="<?php echo $this->_tpl_vars['btn_apply']; ?>
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
        	    <tr>
        		<td colspan="2">
	    <table cellpadding=5 cellspacing=0 border=0 align="left" width="100%">
		<tr>
		    <td class="pag_bg">
		    <?php if ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'ufavs' || $this->_tpl_vars['sbtn'] == 'mql'): ?>
			<?php if ($this->_tpl_vars['total'] == '0' && $this->_tpl_vars['sbtn'] != 'mpl2'): ?><?php echo $this->_tpl_vars['mypl_videonone']; ?>
<?php else: ?><?php echo $this->_tpl_vars['link']; ?>
<?php endif; ?>
		    <?php else: ?>
			<?php echo $this->_tpl_vars['link']; ?>

		    <?php endif; ?>
		    </td>
		</tr>
		    
                </table>
            </form>
        		</td>
        	    </tr>
	    </table>
	    </div>
			</td>
		    </tr>
        	    <tr>
        		<td>
            
        <?php if ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'ufavs' || $this->_tpl_vars['sbtn'] == 'mql'): ?>
            <div id="vgridview" <?php if ($_SESSION['viewmode'] == 'grid'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>>
            <form name="gvfilesel" method="post" action="">
        <?php else: ?>
    	    <div id="gridview" <?php if ($_SESSION['viewmode'] == 'grid'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>>
    	    <form name="gvfilesel" method="post" action="">
        <?php endif; ?>
    	    <table cellpadding="0" cellspacing="0" align="center">
    	    <tr>
    	    <td>
	    <table cellpadding=5 cellspacing=1 border=0 align="center">
            	<?php if ($this->_tpl_vars['vids'][0]['vid'] != "" && $this->_tpl_vars['sbtn'] == 'myvid'): ?>
            	    <tr>
            		<td align="left" width="1%"><input type="checkbox" id="gcheckall" name="gcheckall" value="0" onclick="if (this.checked == true) { vcheckAllmya(document.gvfilesel['gmid[]']); ShowContent('actdiv2'); } else if (this.checked == false) { vuncheckAllmya(document.gvfilesel['gmid[]']); HideContent('actdiv2'); }"></td>
            		<td><a href="javascript:void(0)" onclick="if (document.getElementById('gcheckall').checked == false) { document.getElementById('gcheckall').checked = true; vcheckAllmya(document.gvfilesel['gmid[]']); ShowContent('actdiv2'); } else if (document.getElementById('gcheckall').checked == true) { document.getElementById('gcheckall').checked = false; vuncheckAllmya(document.gvfilesel['gmid[]']); HideContent('actdiv2'); }"><?php echo $this->_tpl_vars['grid_txt1']; ?>
</a></td>
            	    </tr>
            	<?php elseif ($this->_tpl_vars['vids'][0]['vid'] != "" && ( $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mql' )): ?>
            	    <tr>
            		<td align="left" width="1%"><input type="checkbox" id="gvcheckall" name="gvcheckall" value="0" onclick="if (this.checked == true) { checkAllmyfvg(document.gvfilesel['gvmid[]']); ShowContent('vactdiv2'); } else if (this.checked == false) { uncheckAllmyfvg(document.gvfilesel['gvmid[]']); HideContent('vactdiv2'); }"></td>
            		<td><a href="javascript:void(0)" onclick="if (document.getElementById('gvcheckall').checked == false) { document.getElementById('gvcheckall').checked = true; checkAllmyfvg(document.gvfilesel['gvmid[]']); ShowContent('vactdiv2'); } else if (document.getElementById('gvcheckall').checked == true) { document.getElementById('gvcheckall').checked = false; uncheckAllmyfvg(document.gvfilesel['gvmid[]']); HideContent('vactdiv2'); }"><?php echo $this->_tpl_vars['grid_txt1']; ?>
</a></td>
            	    </tr>
            	<?php endif; ?>
            </table>
            </td>
            </tr>
            <tr>
            <td>
            <table cellpadding=5 cellspacing=0 border=0>
		<tr>
		    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['vids']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
echo smarty_core_run_insert_handler(array('args' => array('name' => 'vid_to_key', 'assign' => 'key', 'vid' => $this->_tpl_vars['vids'][$this->_sections['i']['index']]['vid'])), $this); ?>

		    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'titlev', 'assign' => 'title', 'vkey' => $this->_tpl_vars['key'])), $this); ?>

		    <td valign="top" class="nbg">
			<table cellpadding=0 cellspacing=1 border=0">
			    <tr>
				<td>
				    <table cellpadding=1 cellspacing=0 border=0>
					<tr>
					    <td>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_gridv.tpl", 'smarty_include_vars' => array()));
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
	    <?php if ($this->_tpl_vars['sbtn'] == 'myvid' && $this->_tpl_vars['vids'][0]['vid'] != ""): ?>
	    <table cellpadding=5 cellspacing=0 border=0 align="left" width="100%">
		<tr><td colspan=2><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_selectact2.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
	    </table>
	    <?php elseif (( $this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'mql' ) && $this->_tpl_vars['vids'][0]['vid'] != ""): ?>
		<table cellpadding=5 cellspacing=0 border=0 align="left" width="100%">
            	    <tr>
            		<td colspan=2>
            		    <div id="vactdiv2" style="display: none;">
            			<table cellpadding=0 cellspacing=0 border=0 align="left" width="100%">
            			    <tr>
            				<td class="" width="185" valign="top">
            				    <select name="vactions2" class="selbox" <?php if ($_SESSION['UID'] != ""): ?>onchange="if(this.selectedIndex == '1') { HideContent('btn1vg'); ShowContent('btn2vg'); } else { ShowContent('btn1vg'); HideContent('btn2vg'); }"<?php endif; ?>>
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
            				<td class="pl5">
                                            <div id="btn1vg" style="display: block;"><input type="submit" name="goact2" value="<?php echo $this->_tpl_vars['btn_apply']; ?>
" class="fb"></div>
                                            <div id="btn2vg" style="display: none;" class="p1">
                                            <?php if ($this->_tpl_vars['sbtn'] == 'mpl2'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_video_playlists2', 'assign' => 'vpl', 'vkey' => $_REQUEST['vplkey'])), $this); ?>
<?php else: ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_video_playlists', 'assign' => 'vpl')), $this); ?>
<?php endif; ?>
                                            <table cellpadding="0" cellspacing="0" border="0" align="left" width="100%">
                                        	<tr>
                                        	    <td>
                                        	    <?php if ($this->_tpl_vars['vpl'][0]['vkey'] != ""): ?>
                                            <table cellpadding="1" cellspacing="0" border="0" align="left" width="100%">
                                            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['vpl']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                                    <td width="1%"><input type="checkbox" name="vgpl[]" value="<?php echo $this->_tpl_vars['vpl'][$this->_sections['i']['index']]['vkey']; ?>
"></td>
                                                    <td align="left" width="99%"><?php echo ((is_array($_tmp=$this->_tpl_vars['vpl'][$this->_sections['i']['index']]['pname'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
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
                                        	    <?php if ($this->_tpl_vars['vpl'][0]['vkey'] != ""): ?>
                                            <table cellpadding="4" cellspacing="0" border="0" align="left" width="100%">
                                                <tr>
                                                    <td><input type="submit" name="goact2" value="<?php echo $this->_tpl_vars['btn_apply']; ?>
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
			<td align="center">
			
	    <table cellpadding=5 cellspacing=0 border=0 align="left" width="100%">
		<tr>
		    <td class="pag_bg">
		    <?php if ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'ufavs' || $this->_tpl_vars['sbtn'] == 'mql'): ?>
			<?php if ($this->_tpl_vars['total'] == '0' && $this->_tpl_vars['sbtn'] != 'mpl2'): ?><?php echo $this->_tpl_vars['mypl_videonone']; ?>
<?php else: ?><?php echo $this->_tpl_vars['link']; ?>
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
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_viewstagsmyfav.tpl", 'smarty_include_vars' => array()));
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
    		<?php if ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'ufavs' || $this->_tpl_vars['sbtn'] == 'mql'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_browseafav.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php else: ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_browsea.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
            </table>
            <br>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['enable_images'] == '1'): ?>
            <table cellpadding="0" cellspacing="0" align="center" border=0>
                <?php if ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'ufavs' || $this->_tpl_vars['sbtn'] == 'mql'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_browseifav.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php else: ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_browsei.tpl", 'smarty_include_vars' => array()));
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