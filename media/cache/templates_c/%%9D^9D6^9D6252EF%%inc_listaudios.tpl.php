<?php /* Smarty version 2.6.26, created on 2009-11-10 15:21:41
         compiled from _inc/inc_listaudios.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'ad_status', '_inc/inc_listaudios.tpl', 4, false),array('insert', 'vid_to_key_audio', '_inc/inc_listaudios.tpl', 105, false),array('insert', 'titlea', '_inc/inc_listaudios.tpl', 106, false),array('insert', 'get_audio_playlists2', '_inc/inc_listaudios.tpl', 132, false),array('insert', 'get_audio_playlists', '_inc/inc_listaudios.tpl', 132, false),array('modifier', 'spchar', '_inc/inc_listaudios.tpl', 141, false),)), $this); ?>
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
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_mylinksfa.tpl", 'smarty_include_vars' => array()));
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
        
	<td valign="top" class="nopad_bg" <?php if ($this->_tpl_vars['check'] == '1' || $this->_tpl_vars['panel_rightlinks'] == '1'): ?>width="65%"<?php else: ?>width="80%"<?php endif; ?> align="left">
	    <table width="100%" cellpadding="0" cellspacing="0" align="left">
	    <?php if ($_REQUEST['aplkey'] != ""): ?>
		<tr>
		    <td>
			<table align="left" width="100%" cellpadding="0" cellspacing="0">
    			    <tr><td align="left"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_listapl.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
    			</table>
    		    </td>
    		</tr>
    	    <?php endif; ?>
	    <?php if ($this->_tpl_vars['btn'] == 'baudio'): ?>
		<tr>
		    <td>
		    <div id="audiotags" <?php if ($_SESSION['audiotags'] == 'off'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>>
        		<table cellpadding="5" cellspacing="0" border="0" align="left" width="100%">
            		    <tr><td class="centered"><?php echo $this->_tpl_vars['atags']; ?>
</td></tr>
        		</table>
        	    </div>
        	    </td>
        	</tr>
    	    <?php endif; ?>
    	    <?php if ($this->_tpl_vars['sbtn'] == 'myaud'): ?>
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
    			<div id="myfavatags" <?php if ($_SESSION['mytags'] == 'off'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>>
        		    <table width="100%" cellpadding=5 cellspacing=0 border=0 align="left">
            			<tr>
                		    <td class="centered"><?php echo $this->_tpl_vars['atags']; ?>
</td>
        			</tr>
        		    </table>
    			</div>
    		    </td>
    		</tr>
    	    <?php endif; ?>
    		<tr>
    		    <td>
    			<table cellpadding="0" cellspacing="0" border="0" align="left" width="100%">
    			    <tr>
    				<td>
				<?php if ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'ufavs' || $this->_tpl_vars['sbtn'] == 'mql' || $this->_tpl_vars['sbtn'] == 'mpl2'): ?><?php if ($this->_tpl_vars['sbtn'] == 'fav'): ?><?php $this->assign('loc', 'my_favorites'); ?><?php elseif ($this->_tpl_vars['sbtn'] == 'mpl2'): ?><?php $this->assign('loc', 'my_playlists'); ?><?php elseif ($this->_tpl_vars['sbtn'] == 'mql'): ?><?php $this->assign('loc', 'my_quicklist'); ?><?php endif; ?>
				    <div id="alistview" <?php if ($_SESSION['viewmode'] == 'list'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?> class="">
					<form name="afilesel" method="post" action="">
				<?php else: ?>
				    <div id="listview" <?php if ($_SESSION['viewmode'] == 'list'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?> class="">
					<form name="filesel" method="post" action="">
				<?php endif; ?>
            				    <table cellpadding=5 cellspacing=1 border=0 align="left" width="100%">
            				    <?php if ($this->_tpl_vars['sbtn'] == 'myaud' && $this->_tpl_vars['auds'][0]['vid'] != ""): ?>
            					<tr>
            					    <td class="" align="center" width="3%"><input type="checkbox" id="checkall" name="checkall" value="0" onclick="if (this.checked == true) { checkAllmya(document.filesel['mid[]']); ShowContent('actdiv'); } else if (this.checked == false) { uncheckAllmya(document.filesel['mid[]']); HideContent('actdiv'); }"></td>
            					    <td><a href="javascript:void(0)" onclick="if (document.getElementById('checkall').checked == false) { document.getElementById('checkall').checked = true; checkAllmya(document.filesel['mid[]']); ShowContent('actdiv'); } else if (document.getElementById('checkall').checked == true) { document.getElementById('checkall').checked = false; auncheckAllmya(document.filesel['mid[]']); HideContent('actdiv'); }"><?php echo $this->_tpl_vars['grid_txt1']; ?>
</a></td>
            					</tr>
            				    <?php elseif (( $this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'mql' ) && $this->_tpl_vars['auds'][0]['vid'] != ""): ?>
            					<tr>
            					    <td class="" align="center" width="3%"><input type="checkbox" name="acheckall" id="acheckall" value="0" onclick="if (this.checked == true) { checkAllmyfa(document.afilesel['amid[]']); ShowContent('aactdiv'); } else if (this.checked == false) { uncheckAllmyfa(document.afilesel['amid[]']); HideContent('aactdiv'); }"></td>
            					    <td><a href="javascript:void(0)" onclick="if (document.getElementById('acheckall').checked == false) { document.getElementById('acheckall').checked = true; checkAllmyfa(document.afilesel['amid[]']); ShowContent('aactdiv'); } else if (document.getElementById('acheckall').checked == true) { document.getElementById('acheckall').checked = false; uncheckAllmyfa(document.afilesel['amid[]']); HideContent('aactdiv'); }"><?php echo $this->_tpl_vars['grid_txt1']; ?>
</a></td>
            					</tr>
            				    <?php endif; ?>
            				    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['auds']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                				<?php if ($this->_tpl_vars['sbtn'] == 'myaud'): ?>
                				    <td class="th1" align="center"><input type="checkbox" name="mid[]" value="<?php echo $this->_tpl_vars['auds'][$this->_sections['i']['index']]['vid']; ?>
" onclick="ShowContent('actdiv')"></td>
            					<?php elseif ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'mql'): ?>
            					    <td class="th1" align="center"><input type="checkbox" name="amid[]" value="<?php echo $this->_tpl_vars['auds'][$this->_sections['i']['index']]['vid']; ?>
" onclick="ShowContent('aactdiv')"></td>
            					<?php endif; ?>
                    				    <td valign="top" class="th1" style="padding: 0px;">
							<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'vid_to_key_audio', 'assign' => 'keya', 'vid' => $this->_tpl_vars['auds'][$this->_sections['i']['index']]['vid'])), $this); ?>

							<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'titlea', 'assign' => 'title', 'vkey' => $this->_tpl_vars['keya'])), $this); ?>

                        				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_lista.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    				    </td>
                				</tr>
            				    <?php endfor; endif; ?>
                
            				    <?php if ($this->_tpl_vars['sbtn'] == 'myaud' && $this->_tpl_vars['auds'][0]['vid'] != ""): ?>
            					<tr><td colspan=2><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_selectact1.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
					    <?php elseif (( $this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'mql' ) && $this->_tpl_vars['auds'][0]['vid'] != ""): ?>
            					<tr>
            					    <td colspan=2>
            						<div id="aactdiv" style="display: none;">
            						    <table cellpadding=0 cellspacing=0 border=0 align="left" width="100%">
            							<tr>
            							    <td class="" valign="top" width="185">
            								<select name="aactions" class="selbox" <?php if ($_SESSION['UID'] != ""): ?>onchange="if(this.selectedIndex == '1') { HideContent('btn1al'); ShowContent('btn2al'); } else { ShowContent('btn1al'); HideContent('btn2al'); }"<?php endif; ?>>
            								    <option value="<?php echo $this->_tpl_vars['inbox_acts']; ?>
"><?php echo $this->_tpl_vars['inbox_acts']; ?>
</option>
            								    <?php if ($_SESSION['UID'] != ""): ?><option value="<?php echo $this->_tpl_vars['qlist_txt14']; ?>
"><?php echo $this->_tpl_vars['qlist_txt14']; ?>
</option><?php endif; ?>
            								    <?php if ($this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'mql'): ?><option value="<?php echo $this->_tpl_vars['act_addfav']; ?>
"><?php echo $this->_tpl_vars['act_addfav']; ?>
</option><?php endif; ?>
            								    <?php if ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'mpl'): ?><option value="<?php echo $this->_tpl_vars['qlist_txt1']; ?>
"><?php echo $this->_tpl_vars['qlist_txt1']; ?>
</option><?php endif; ?>
            								    <option value="<?php echo $this->_tpl_vars['inbox_itblact6']; ?>
"><?php echo $this->_tpl_vars['inbox_itblact6']; ?>
</option>
            								</select>
            							    </td>
            							    <td class="pl5">
            								<div id="btn1al" style="display: block;"><input type="submit" name="agoact" value="<?php echo $this->_tpl_vars['btn_apply']; ?>
" class="fb"></div>
                                					<div id="btn2al" style="display: none;" class="p1">
                                					<?php if ($this->_tpl_vars['sbtn'] == 'mpl2'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_audio_playlists2', 'assign' => 'upl', 'vkey' => $_REQUEST['aplkey'])), $this); ?>
<?php else: ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_audio_playlists', 'assign' => 'upl')), $this); ?>
<?php endif; ?>
                                    					<table cellpadding="0" cellspacing="0" border="0" align="left" width="100%">
                                    					    <tr>
                                    						<td>
                                    						<?php if ($this->_tpl_vars['upl'][0]['vkey'] != ""): ?>
                                        				    <table cellpadding="1" cellspacing="0" border="0" align="left" width="100%">
                                        				    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['upl']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                                				    <td width="1%"><input type="checkbox" name="alpl[]" value="<?php echo $this->_tpl_vars['upl'][$this->_sections['i']['index']]['vkey']; ?>
"></td>
                                                				    <td align="left" width="99%"><?php echo ((is_array($_tmp=$this->_tpl_vars['upl'][$this->_sections['i']['index']]['pname'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
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
                                    						<?php if ($this->_tpl_vars['upl'][0]['vkey'] != ""): ?>
                                    					    <table cellpadding="4" cellspacing="0" border="0" align="left" width="100%">
                                        					<tr>
                                            					    <td><input type="submit" name="agoact" value="<?php echo $this->_tpl_vars['btn_apply']; ?>
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
						<?php if ($this->_tpl_vars['totala'] == '0' && $this->_tpl_vars['sbtn'] != 'mpl2'): ?><?php echo $this->_tpl_vars['mypl_audionone']; ?>
<?php else: ?><?php echo $this->_tpl_vars['linka']; ?>
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
        			    </form>

        			</div>
    			    </td>
        		</tr>
        	    </table>
        	</td>
    	    </tr>
    	    
	    <tr>
		<td align="left">
    		<?php if ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'ufavs' || $this->_tpl_vars['sbtn'] == 'mql'): ?>
        	    <div id="agridview" <?php if ($_SESSION['viewmode'] == 'grid'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>>
        		<form name="gafilesel" method="post" action="">
    		<?php else: ?>
    		    <div id="gridview" <?php if ($_SESSION['viewmode'] == 'grid'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>>
    			<form name="gafilesel" method="post" action="">
    		<?php endif; ?>
    			<table cellpadding="0" cellspacing="0" align="center">
    			    <tr>
    			    <td>
			    <table cellpadding=5 cellspacing=1 border=0 align=center>
            		    <?php if ($this->_tpl_vars['auds'][0]['vid'] != "" && $this->_tpl_vars['sbtn'] == 'myaud'): ?>
            			<tr>
            			    <td align="left" width="1%"><input type="checkbox" id="gcheckall" name="gcheckall" value="0" onclick="if (this.checked == true) { acheckAllmya(document.gafilesel['gmid[]']); ShowContent('actdiv2'); } else if (this.checked == false) { auncheckAllmya(document.gafilesel['gmid[]']); HideContent('actdiv2'); }"></td>
            			    <td><a href="javascript:void(0)" onclick="if (document.getElementById('gcheckall').checked == false) { document.getElementById('gcheckall').checked = true; acheckAllmya(document.gafilesel['gmid[]']); ShowContent('actdiv2'); } else if (document.getElementById('gcheckall').checked == true) { document.getElementById('gcheckall').checked = false; auncheckAllmya(document.gafilesel['gmid[]']); HideContent('actdiv2'); }"><?php echo $this->_tpl_vars['grid_txt1']; ?>
</a></td>
            			</tr>
            		    <?php elseif ($this->_tpl_vars['auds'][0]['vid'] != "" && ( $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mql' )): ?>
            			<tr>
            			    <td align="left" width="1%"><input type="checkbox" id="gacheckall" name="gacheckall" value="0" onclick="if (this.checked == true) { checkAllmyfag(document.gafilesel['gamid[]']); ShowContent('aactdiv2'); } else if (this.checked == false) { uncheckAllmyfag(document.gafilesel['gamid[]']); HideContent('aactdiv2'); }"></td>
            			    <td><a href="javascript:void(0)" onclick="if (document.getElementById('gacheckall').checked == false) { document.getElementById('gacheckall').checked = true; checkAllmyfag(document.gafilesel['gamid[]']); ShowContent('aactdiv2'); } else if (document.getElementById('gacheckall').checked == true) { document.getElementById('gacheckall').checked = false; uncheckAllmyfag(document.gafilesel['gamid[]']); HideContent('aactdiv2'); }"><?php echo $this->_tpl_vars['grid_txt1']; ?>
</a></td>
            			</tr>
            		    <?php endif; ?>
        		    </table>
        		    </td>
        		    </tr>
        		    <tr>
        		    <td>
        		    <table cellpadding=5 cellspacing=0 border=0 align=center>
				<tr>
				<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['auds']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
echo smarty_core_run_insert_handler(array('args' => array('name' => 'vid_to_key_audio', 'assign' => 'keya', 'vid' => $this->_tpl_vars['auds'][$this->_sections['i']['index']]['vid'])), $this); ?>

				<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'titlea', 'assign' => 'title', 'vkey' => $this->_tpl_vars['keya'])), $this); ?>

				    <td valign="top" class="nbg">
					<table cellpadding=0 cellspacing=1 border=0">
					    <tr>
						<td>
						    <table cellpadding=1 cellspacing=0 border=0>
							<tr>
							    <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_grida.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
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
			    <td align="center">
			    <?php if ($this->_tpl_vars['sbtn'] == 'myaud' && $this->_tpl_vars['auds'][0]['vid'] != ""): ?>
			    <table cellpadding=5 cellspacing=0 border=0 align="left" width="100%">
				<tr><td colspan=2><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_selectact2.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
			    </table>
			    <?php elseif (( $this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'mql' ) && $this->_tpl_vars['auds'][0]['vid'] != ""): ?>
			    <table cellpadding=5 cellspacing=0 border=0 align="left" width="100%">
            			<tr>
            			    <td>
            				<div id="aactdiv2" style="display: none;">
            				    <table cellpadding=0 cellspacing=0 border=0 align="left" width="100%">
            					<tr>
            					    <td class="" width="185" valign="top">
            						<select name="aactions2" class="selbox" <?php if ($_SESSION['UID'] != ""): ?>onchange="if(this.selectedIndex == '1') { HideContent('btn1ag'); ShowContent('btn2ag'); } else { ShowContent('btn1ag'); HideContent('btn2ag'); }"<?php endif; ?>>
            						    <option value="<?php echo $this->_tpl_vars['inbox_acts']; ?>
"><?php echo $this->_tpl_vars['inbox_acts']; ?>
</option>
            						    <?php if ($_SESSION['UID'] != ""): ?><option value="<?php echo $this->_tpl_vars['qlist_txt14']; ?>
"><?php echo $this->_tpl_vars['qlist_txt14']; ?>
</option><?php endif; ?>
            						    <?php if ($this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'mql'): ?><option value="<?php echo $this->_tpl_vars['act_addfav']; ?>
"><?php echo $this->_tpl_vars['act_addfav']; ?>
</option><?php endif; ?>
            						    <?php if ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'mpl'): ?><option value="<?php echo $this->_tpl_vars['qlist_txt1']; ?>
"><?php echo $this->_tpl_vars['qlist_txt1']; ?>
</option><?php endif; ?>
            						    <option value="<?php echo $this->_tpl_vars['inbox_itblact6']; ?>
"><?php echo $this->_tpl_vars['inbox_itblact6']; ?>
</option>
            						</select>
            					    </td>
            					    <td class="pl5" align="left" valign="top">
            						<table cellpadding="0" cellspacing="0" border="0" align="left" width="100%">
            						    <tr>
            							<td>
            							    <div id="btn1ag" style="display: block;"><input type="submit" name="agoact2" value="<?php echo $this->_tpl_vars['btn_apply']; ?>
" class="fb"></div>
            							</td>
            						    </tr>
            						    <tr>
            							<td>
                                				    <div id="btn2ag" style="display: none;" class="p1">
                                				    <?php if ($this->_tpl_vars['sbtn'] == 'mpl2'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_audio_playlists2', 'assign' => 'upl', 'vkey' => $_REQUEST['aplkey'])), $this); ?>
<?php else: ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_audio_playlists', 'assign' => 'upl')), $this); ?>
<?php endif; ?>
                                        				<table cellpadding="1" cellspacing="0" border="0" align="left" width="100%">
                                        				<?php if ($this->_tpl_vars['upl'][0]['vkey'] != ""): ?>
                                        				<?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['upl']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>
                                            				    <tr>
                                                				<td width="1%"><input type="checkbox" name="agpl[]" value="<?php echo $this->_tpl_vars['upl'][$this->_sections['j']['index']]['vkey']; ?>
"></td>
                                                				<td align="left" width="99%"><?php echo ((is_array($_tmp=$this->_tpl_vars['upl'][$this->_sections['j']['index']]['pname'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</td>
                                            				    </tr>
                                            				<?php endfor; endif; ?>
                                            				<?php else: ?>
                                            				    <tr><td><?php echo $this->_tpl_vars['plist_txt63']; ?>
</td></tr>
                                            				<?php endif; ?>
                                            				    <tr>
                                            					<td colspan="2">
                                            					<?php if ($this->_tpl_vars['upl'][0]['vkey'] != ""): ?>
                                    						    <table cellpadding="0" cellspacing="0" border="0" align="left" width="100%">
                                        						<tr>
                                            						    <td><input type="submit" name="agoact2" value="<?php echo $this->_tpl_vars['btn_apply']; ?>
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

			<table cellpadding=5 cellspacing=0 border=0 width="100%" align="left">
			    <tr>
				<td class="pag_bg">
				<?php if ($this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'mpl2' || $this->_tpl_vars['sbtn'] == 'ufavs' || $this->_tpl_vars['sbtn'] == 'mql'): ?>
				    <?php if ($this->_tpl_vars['totala'] == '0' && $this->_tpl_vars['sbtn'] != 'mpl2'): ?><?php echo $this->_tpl_vars['mypl_audionone']; ?>
<?php else: ?><?php echo $this->_tpl_vars['linka']; ?>
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
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_viewstagsmyfava.tpl", 'smarty_include_vars' => array()));
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
        <?php if ($this->_tpl_vars['enable_images'] == '1'): ?>
    	    <table cellpadding="0" cellspacing="0" align="center" border=0>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_browsei.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </table>
            <br>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>
            <table cellpadding="0" cellspacing="0" align="center" border=0>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_browsev.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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