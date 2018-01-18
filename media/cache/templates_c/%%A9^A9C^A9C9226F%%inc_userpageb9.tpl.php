<?php /* Smarty version 2.6.26, created on 2009-11-10 15:42:30
         compiled from _inc/chan/_inc/inc_userpageb9.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'image_count', '_inc/chan/_inc/inc_userpageb9.tpl', 2, false),array('insert', 'audio_count', '_inc/chan/_inc/inc_userpageb9.tpl', 12, false),array('insert', 'video_count', '_inc/chan/_inc/inc_userpageb9.tpl', 22, false),array('insert', 'keys_to_array', '_inc/chan/_inc/inc_userpageb9.tpl', 74, false),array('modifier', 'viewnr', '_inc/chan/_inc/inc_userpageb9.tpl', 48, false),array('modifier', 'lower', '_inc/chan/_inc/inc_userpageb9.tpl', 141, false),)), $this); ?>
<?php if (( $this->_tpl_vars['enable_videos'] == '0' && $this->_tpl_vars['enable_images'] == '1' ) || $_GET['view'] == 'images'): ?>
    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'image_count', 'assign' => 'vdocount', 'uid' => $this->_tpl_vars['minfo'][0]['uid'])), $this); ?>

    <?php $this->assign('b9v1', $this->_tpl_vars['images_main']); ?>
    <?php $this->assign('urlq', 'images'); ?>
    <?php $this->assign('b9v2', $this->_tpl_vars['userpage_subimg']); ?>
    <?php $this->assign('b9v2u', $this->_tpl_vars['uch_txt15']); ?>
    <?php $this->assign('b9v3', $this->_tpl_vars['userpage_nosub6']); ?>
    <?php $this->assign('b9v4', 'files_image'); ?>
    <?php $this->assign('b9v5', 'image'); ?>
    <?php $this->assign('b9v6', 'i'); ?>
<?php elseif (( $this->_tpl_vars['enable_images'] == '0' && $this->_tpl_vars['enable_videos'] == '0' ) || $_GET['view'] == 'audios'): ?>
    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'audio_count', 'assign' => 'vdocount', 'uid' => $this->_tpl_vars['minfo'][0]['uid'])), $this); ?>

    <?php $this->assign('b9v1', $this->_tpl_vars['audios_main']); ?>
    <?php $this->assign('urlq', 'audios'); ?>
    <?php $this->assign('b9v2', $this->_tpl_vars['userpage_subaud']); ?>
    <?php $this->assign('b9v2u', $this->_tpl_vars['uch_txt15']); ?>
    <?php $this->assign('b9v3', $this->_tpl_vars['userpage_nosub7']); ?>
    <?php $this->assign('b9v4', 'files_audio'); ?>
    <?php $this->assign('b9v5', 'audio'); ?>
    <?php $this->assign('b9v6', 'a'); ?>
<?php else: ?>
    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'video_count', 'assign' => 'vdocount', 'uid' => $this->_tpl_vars['minfo'][0]['uid'])), $this); ?>

    <?php $this->assign('b9v1', $this->_tpl_vars['videos_main']); ?>
    <?php $this->assign('urlq', 'videos'); ?>
    <?php $this->assign('b9v2', $this->_tpl_vars['userpage_subvid']); ?>
    <?php $this->assign('b9v2u', $this->_tpl_vars['uch_txt15']); ?>
    <?php $this->assign('b9v3', $this->_tpl_vars['userpage_nosub4']); ?>
    <?php $this->assign('b9v4', 'files_video'); ?>
    <?php $this->assign('b9v5', 'video'); ?>
    <?php $this->assign('b9v6', 'v'); ?>
<?php endif; ?>
			<?php if ($_GET['view'] != ""): ?>
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td colspan="2">
				    <form id="chsubsform"></form>
				    <div id="subsrespdiv" style="display: none;"></div>
				    <div id="loading_sub" style="display: none;"><table cellpadding=5 cellspacing=0 border=0><tr><td><?php echo $this->_tpl_vars['adm_setgen79']; ?>
</td></tr></table></div>
				</td>
			    </tr>
			</table>
			<?php endif; ?>

		    <div id="b9">
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td align="left" class="thead2">
				    <?php echo $this->_tpl_vars['b9v1']; ?>
<a href="<?php echo $this->_tpl_vars['base_url']; ?>
/user/<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
&view=<?php echo $this->_tpl_vars['urlq']; ?>
">(<?php echo ((is_array($_tmp=$this->_tpl_vars['vdocount'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
)</a>
				</td>
				<?php if ($this->_tpl_vars['minfo'][0]['uid'] != $_SESSION['UID'] && $_SESSION['UID'] != "" && $this->_tpl_vars['vdocount'] > 0): ?>
				<td align="right" class="thead2">
				    <?php if ($_SESSION['UID'] != "" && ( $this->_tpl_vars['is_bl'] != 'yes' || $this->_tpl_vars['bl_sub'] == 'no' )): ?>
					<div id="slinkdiv2" style="<?php if ($this->_tpl_vars['is_sub'] == 'no'): ?>display: block;<?php else: ?>display: none;<?php endif; ?>">
					    <?php if ($_GET['view'] == ""): ?><a href="#subscribe"><?php echo $this->_tpl_vars['b9v2']; ?>
</a>&nbsp;<?php else: ?><a href="javascript:void(0)" onclick="ShowContent('subsrespdiv'); thisDiv('yes'); ldiv('subsrespdiv'); set_subscription('subs', '<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
', '<?php echo $this->_tpl_vars['minfo'][0]['uid']; ?>
', 'user');"><?php echo $this->_tpl_vars['b9v2']; ?>
</a>&nbsp;<?php endif; ?>
					</div>
					<div id="uslinkdiv2" style="<?php if ($this->_tpl_vars['is_sub'] == 'yes'): ?>display: block;<?php else: ?>display: none;<?php endif; ?>">
					    <?php if ($_GET['view'] == ""): ?><a href="#unsubscribe"><?php echo $this->_tpl_vars['b9v2u']; ?>
</a>&nbsp;<?php else: ?><a href="javascript:void(0)" onclick="ShowContent('subsrespdiv'); set_subscription('unsubs', '<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
', '<?php echo $this->_tpl_vars['minfo'][0]['uid']; ?>
', 'user');"><?php echo $this->_tpl_vars['b9v2u']; ?>
</a>&nbsp;<?php endif; ?>
					</div>
				    <?php endif; ?>
				</td>
				<?php endif; ?>
			    <tr>
			</table>
			
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			<?php if ($this->_tpl_vars['vdocount'] == 0): ?>
			    <tr><td class="tbody2" align="center"><table cellpadding="0" cellspacing="0"><tr><td class="p5 bodylabel"><?php echo $this->_tpl_vars['b9v3']; ?>
</span></td></tr></table></td></tr>
			<?php else: ?>
			    <tr>
				<td class="tbody2" colspan="2">
				    <?php if ($this->_tpl_vars['tinfo'][0]['th_vid_view'] == 'grid'): ?><?php $this->assign('maxloop', 9); ?><?php else: ?><?php $this->assign('maxloop', 3); ?><?php endif; ?>
				    <?php if ($_GET['view'] == ""): ?>
				    <?php if ($this->_tpl_vars['minfo'][0]['ch_vids'] != "" && $this->_tpl_vars['enable_videos'] == '1'): ?>
					<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'keys_to_array', 'assign' => 'varr', 'arr' => $this->_tpl_vars['minfo'][0]['ch_vids'])), $this); ?>

				    <?php elseif ($this->_tpl_vars['minfo'][0]['ch_vids'] == "" && $this->_tpl_vars['enable_videos'] == '1'): ?>
					<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'keys_to_array', 'assign' => 'varr', 'arr' => $this->_tpl_vars['varr2'])), $this); ?>

				    <?php elseif ($this->_tpl_vars['minfo'][0]['ch_imgs'] != "" && $this->_tpl_vars['enable_images'] == '1'): ?>
					<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'keys_to_array', 'assign' => 'varr', 'arr' => $this->_tpl_vars['minfo'][0]['ch_imgs'])), $this); ?>

				    <?php elseif ($this->_tpl_vars['minfo'][0]['ch_imgs'] == "" && $this->_tpl_vars['enable_images'] == '1'): ?>
					<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'keys_to_array', 'assign' => 'varr', 'arr' => $this->_tpl_vars['varr2'])), $this); ?>

				    <?php elseif ($this->_tpl_vars['minfo'][0]['ch_auds'] != "" && $this->_tpl_vars['enable_audio'] == '1'): ?>
					<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'keys_to_array', 'assign' => 'varr', 'arr' => $this->_tpl_vars['minfo'][0]['ch_auds'])), $this); ?>

				    <?php elseif ($this->_tpl_vars['minfo'][0]['ch_auds'] == "" && $this->_tpl_vars['enable_audio'] == '1'): ?>
					<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'keys_to_array', 'assign' => 'varr', 'arr' => $this->_tpl_vars['varr2'])), $this); ?>

				    <?php else: ?>
					<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'keys_to_array', 'assign' => 'varr', 'arr' => $this->_tpl_vars['varr2'])), $this); ?>

				    <?php endif; ?>
				    <?php else: ?>
					<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'keys_to_array', 'assign' => 'varr', 'arr' => $this->_tpl_vars['varr2'])), $this); ?>

				    <?php endif; ?>
					<table cellpadding="0" cellspacing="0" width="100%" border="0">
					    <tr>
						<td align="left" class="pl10 p5 bodylabel" colspan="<?php if ($_GET['view'] == ""): ?>3<?php else: ?>5<?php endif; ?>">
						    <table cellpadding="5" cellspacing="0" width="100%">
							<tr>
							    <td align="left">
								<?php if ($_GET['sort'] == "" && $_GET['s'] != '1'): ?><?php echo $this->_tpl_vars['b9v1']; ?>
<?php else: ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/user/<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
&view=<?php echo $this->_tpl_vars['urlq']; ?>
"><?php echo $this->_tpl_vars['b9v1']; ?>
</a><?php endif; ?> | 
								<?php if ($_GET['sort'] == 'mv'): ?><?php echo $this->_tpl_vars['mostviewed']; ?>
<?php else: ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/user/<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
&view=<?php echo $this->_tpl_vars['urlq']; ?>
&sort=mv"><?php echo $this->_tpl_vars['mostviewed']; ?>
</a><?php endif; ?> | 
								<?php if ($_GET['sort'] == 'md'): ?><?php echo $this->_tpl_vars['mostcomm']; ?>
<?php else: ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/user/<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
&view=<?php echo $this->_tpl_vars['urlq']; ?>
&sort=md"><?php echo $this->_tpl_vars['mostcomm']; ?>
</a><?php endif; ?>
								<?php if ($_GET['s'] == '1'): ?> | <?php echo $this->_tpl_vars['dm_search1']; ?>
<?php endif; ?>
							    </td>
							    <td align="right">
							    <form name="fsform" method="post" action="<?php echo $this->_tpl_vars['base_url']; ?>
/user/<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
&view=<?php echo $this->_tpl_vars['urlq']; ?>
&s=1">
								<input type="text" name="searchquery">&nbsp;<input type="submit" name="search" value="<?php echo $this->_tpl_vars['title_search']; ?>
">
							    </form>
							    </td>
							</tr>
						    </table>
						</td>
					    </tr>
					    <tr>
					    <?php if ($_GET['view'] == ""): ?>
					    <?php unset($this->_sections['v']);
$this->_sections['v']['name'] = 'v';
$this->_sections['v']['loop'] = is_array($_loop=$this->_tpl_vars['varr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['v']['start'] = (int)0;
$this->_sections['v']['max'] = (int)$this->_tpl_vars['maxloop'];
$this->_sections['v']['show'] = true;
if ($this->_sections['v']['max'] < 0)
    $this->_sections['v']['max'] = $this->_sections['v']['loop'];
$this->_sections['v']['step'] = 1;
if ($this->_sections['v']['start'] < 0)
    $this->_sections['v']['start'] = max($this->_sections['v']['step'] > 0 ? 0 : -1, $this->_sections['v']['loop'] + $this->_sections['v']['start']);
else
    $this->_sections['v']['start'] = min($this->_sections['v']['start'], $this->_sections['v']['step'] > 0 ? $this->_sections['v']['loop'] : $this->_sections['v']['loop']-1);
if ($this->_sections['v']['show']) {
    $this->_sections['v']['total'] = min(ceil(($this->_sections['v']['step'] > 0 ? $this->_sections['v']['loop'] - $this->_sections['v']['start'] : $this->_sections['v']['start']+1)/abs($this->_sections['v']['step'])), $this->_sections['v']['max']);
    if ($this->_sections['v']['total'] == 0)
        $this->_sections['v']['show'] = false;
} else
    $this->_sections['v']['total'] = 0;
if ($this->_sections['v']['show']):

            for ($this->_sections['v']['index'] = $this->_sections['v']['start'], $this->_sections['v']['iteration'] = 1;
                 $this->_sections['v']['iteration'] <= $this->_sections['v']['total'];
                 $this->_sections['v']['index'] += $this->_sections['v']['step'], $this->_sections['v']['iteration']++):
$this->_sections['v']['rownum'] = $this->_sections['v']['iteration'];
$this->_sections['v']['index_prev'] = $this->_sections['v']['index'] - $this->_sections['v']['step'];
$this->_sections['v']['index_next'] = $this->_sections['v']['index'] + $this->_sections['v']['step'];
$this->_sections['v']['first']      = ($this->_sections['v']['iteration'] == 1);
$this->_sections['v']['last']       = ($this->_sections['v']['iteration'] == $this->_sections['v']['total']);
?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_userpagefiles.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					    <?php endfor; endif; ?>
					    <?php else: ?>
					    <?php if ($this->_tpl_vars['varr'][0] == "" || ( $_GET['s'] == '1' && $_POST['searchquery'] == "" )): ?>
						<?php $this->assign('merr', '1'); ?>
						<td class="bodylabel"><?php if ($_GET['view'] == 'videos'): ?><?php echo $this->_tpl_vars['userpage_novres']; ?>
<?php elseif ($_GET['view'] == 'images'): ?><?php echo $this->_tpl_vars['userpage_noires']; ?>
<?php elseif ($_GET['view'] == 'audios'): ?><?php echo $this->_tpl_vars['userpage_noares']; ?>
<?php endif; ?>&nbsp;&#39;<?php echo $_POST['searchquery']; ?>
&#39;</td>
					    <?php else: ?>
					    <?php unset($this->_sections['v']);
$this->_sections['v']['name'] = 'v';
$this->_sections['v']['loop'] = is_array($_loop=$this->_tpl_vars['varr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['v']['show'] = true;
$this->_sections['v']['max'] = $this->_sections['v']['loop'];
$this->_sections['v']['step'] = 1;
$this->_sections['v']['start'] = $this->_sections['v']['step'] > 0 ? 0 : $this->_sections['v']['loop']-1;
if ($this->_sections['v']['show']) {
    $this->_sections['v']['total'] = $this->_sections['v']['loop'];
    if ($this->_sections['v']['total'] == 0)
        $this->_sections['v']['show'] = false;
} else
    $this->_sections['v']['total'] = 0;
if ($this->_sections['v']['show']):

            for ($this->_sections['v']['index'] = $this->_sections['v']['start'], $this->_sections['v']['iteration'] = 1;
                 $this->_sections['v']['iteration'] <= $this->_sections['v']['total'];
                 $this->_sections['v']['index'] += $this->_sections['v']['step'], $this->_sections['v']['iteration']++):
$this->_sections['v']['rownum'] = $this->_sections['v']['iteration'];
$this->_sections['v']['index_prev'] = $this->_sections['v']['index'] - $this->_sections['v']['step'];
$this->_sections['v']['index_next'] = $this->_sections['v']['index'] + $this->_sections['v']['step'];
$this->_sections['v']['first']      = ($this->_sections['v']['iteration'] == 1);
$this->_sections['v']['last']       = ($this->_sections['v']['iteration'] == $this->_sections['v']['total']);
?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_userpagefilesview.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					    <?php endfor; endif; ?>
					    <?php endif; ?>
					    <?php endif; ?>
					    </tr>
					    <?php if ($_GET['view'] != "" && $this->_tpl_vars['link'] != "" && $this->_tpl_vars['tpage'] > 1 && $this->_tpl_vars['merr'] != 1): ?>
                                	    <tr>
                                    		<td colspan="5" align="right" class="bold nopad">
                                    		    <?php echo $this->_tpl_vars['link']; ?>

						</td>
					    </tr>
					    <?php endif; ?>
					    <?php if ($this->_tpl_vars['vdocount'] > $this->_tpl_vars['maxloop'] && $_GET['view'] == ""): ?>
                                	    <tr>
                                    		<td colspan="3" align="right" class="bold nopad">
                                    		    <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?><?php $this->assign('viewlnk', 'videos'); ?>
                                                    <?php elseif ($this->_tpl_vars['enable_videos'] == '0' && $this->_tpl_vars['enable_images'] == '0'): ?><?php $this->assign('viewlnk', 'audios'); ?>
                                                    <?php elseif ($this->_tpl_vars['enable_videos'] == '0' && $this->_tpl_vars['enable_images'] == '1'): ?><?php $this->assign('viewlnk', 'images'); ?>
                                                    <?php endif; ?>
                                    		    <a href="<?php echo $this->_tpl_vars['base_url']; ?>
/user/<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
&view=<?php echo $this->_tpl_vars['viewlnk']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['pr_chinfob31'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
</a>
                                    		</td>
                                	    </tr>
                                	    <?php endif; ?>
					</table>
				</td>
			    </tr>
			<?php endif; ?>
			</table>
		    </div>