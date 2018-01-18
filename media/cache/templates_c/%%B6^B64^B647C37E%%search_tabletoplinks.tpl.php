<?php /* Smarty version 2.6.26, created on 2009-11-10 15:17:50
         compiled from header/search_tabletoplinks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'pmsg_count_new', 'header/search_tabletoplinks.tpl', 4, false),array('insert', 'pmsg_count_all', 'header/search_tabletoplinks.tpl', 5, false),array('insert', 'getfield', 'header/search_tabletoplinks.tpl', 29, false),array('insert', 'getarrayccode', 'header/search_tabletoplinks.tpl', 30, false),array('insert', 'selfURL', 'header/search_tabletoplinks.tpl', 37, false),array('modifier', 'viewnr', 'header/search_tabletoplinks.tpl', 8, false),array('modifier', 'lower', 'header/search_tabletoplinks.tpl', 33, false),)), $this); ?>

				    <table cellpadding="2" cellspacing="0" border=0 align="right" <?php if ($this->_tpl_vars['sbtn'] == 'userpage'): ?>class="secl"<?php endif; ?>>
					<tr>
				    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'pmsg_count_new', 'assign' => 'total_msg')), $this); ?>

				    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'pmsg_count_all', 'assign' => 'total_msg_all')), $this); ?>

				    <?php global $conn; global $smarty; $qu1="select * from static_files where ff='help'"; $rs1=$conn->execute($qu1); $static=$rs1->getrows(); $smarty->assign('shelp',$static);  ?>
					    <?php if ($_SESSION['UID'] != ""): ?>
					    <td valign="top"><span style="font-size: 11px;" id="newmsgnr">(<?php if ($this->_tpl_vars['total_msg'] > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['total_msg'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['total_msg_all'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
<?php endif; ?>)</span></td>
					    <td valign="top"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/inbox"><img id="newmsgicon" style="margin-top: -2px;" <?php if ($this->_tpl_vars['total_msg'] > 0): ?>src="<?php echo $this->_tpl_vars['img_url']; ?>
/message_new.gif"<?php else: ?>src="<?php echo $this->_tpl_vars['img_url']; ?>
/message.gif"<?php endif; ?> alt="<?php echo $this->_tpl_vars['msginbox']; ?>
" title="<?php echo $this->_tpl_vars['msginbox']; ?>
"></a></td>
					    <td valign="top">
						<ul id="<?php if ($this->_tpl_vars['site_theme'] == 'metube'): ?>Menu_tube<?php else: ?>Menu1<?php endif; ?>" class="<?php if ($this->_tpl_vars['site_theme'] == 'metube'): ?>MM_tube<?php else: ?>MM<?php endif; ?>" style="padding: 0px; margin: 0px; display: block;">
						    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/profile/<?php echo $_SESSION['USERNAME']; ?>
" onclick="HideContent('hidem1');">&nbsp;<span id="Menu1top"><?php echo $_SESSION['USERNAME']; ?>
</span>&nbsp;<img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowdown1.gif" width="9" height="6"></a>
							<ul id="hidem1">
							    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_profile" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['myprofile']; ?>
</a></li>
    							    <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_audios" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['myaudio']; ?>
</a></li><?php endif; ?>
    							    <?php if ($this->_tpl_vars['enable_images'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_images" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['myimage']; ?>
</a></li><?php endif; ?>
    							    <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_videos" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['myvideo']; ?>
</a></li><?php endif; ?>
    							    <?php if ($this->_tpl_vars['enable_inbox'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/inbox" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['msginbox']; ?>
</a></li><?php endif; ?>
    							    <?php if ($this->_tpl_vars['enable_channels'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_subscriptions" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['uch_thl11']; ?>
</a></li><?php endif; ?>
							</ul>
						    </li>
						</ul>
					    </td>
					    <?php endif; ?>
					    <td valign="top"><?php if ($_SESSION['UID'] != ""): ?><span class="black">&nbsp;|&nbsp;&nbsp;</span><?php endif; ?><?php if ($_SESSION['UID'] != ""): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/main"><?php echo $this->_tpl_vars['hp_menuhome']; ?>
</a><?php else: ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/signup"><?php echo $this->_tpl_vars['uch_shtxt18']; ?>
</a><?php endif; ?><span class="black"> | </span><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_quicklist"><?php echo $this->_tpl_vars['snav_mtxt2']; ?>
 (<span id="qlistadd"><?php echo ((is_array($_tmp=$this->_tpl_vars['qtotal'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</span>)</a><?php if ($this->_tpl_vars['shelp'][0]['active'] == '1'): ?><span class="black"> | </span><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/t/<?php echo $this->_tpl_vars['shelp'][0]['file']; ?>
"><?php echo $this->_tpl_vars['snavhelp']; ?>
</a><?php endif; ?><span class="black"> | </span><?php if ($_SESSION['UID'] != ""): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/logout"><?php echo $this->_tpl_vars['snavlogout']; ?>
</a><?php else: ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/login"><?php echo $this->_tpl_vars['snavlogin']; ?>
</a><?php endif; ?></td>
					    <?php if ($this->_tpl_vars['lang_box'] == '1'): ?>
					    <td class="" style="padding: 3px;" valign="top">
					    <form id="langform" name="langform" method="post" action="">
					    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'cflag2', 'field' => 'cflag', 'table' => 'languages', 'qfield' => 'file', 'qvalue' => $_SESSION['lang'])), $this); ?>

					    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getarrayccode', 'assign' => 'ccode', 'country' => $this->_tpl_vars['cflag2'])), $this); ?>

					    <div class="">
						<ul id="<?php if ($this->_tpl_vars['site_theme'] == 'metube'): ?>Menu_tube6<?php else: ?>Menu2<?php endif; ?>" class="<?php if ($this->_tpl_vars['site_theme'] == 'metube'): ?>MM_tube<?php else: ?>MM<?php endif; ?>">
						    <li><a href="javascript:void(0)"><img src="<?php echo $this->_tpl_vars['base_url']; ?>
/media/files_flags/<?php echo ((is_array($_tmp=$this->_tpl_vars['ccode'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
.gif" width="16" height="11" alt="<?php echo $this->_tpl_vars['cflag2']; ?>
" title="<?php echo $this->_tpl_vars['cflag2']; ?>
"></a>
							<ul id="hidem2">
							    <?php unset($this->_sections['l']);
$this->_sections['l']['name'] = 'l';
$this->_sections['l']['loop'] = is_array($_loop=$this->_tpl_vars['langsel']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['l']['show'] = true;
$this->_sections['l']['max'] = $this->_sections['l']['loop'];
$this->_sections['l']['step'] = 1;
$this->_sections['l']['start'] = $this->_sections['l']['step'] > 0 ? 0 : $this->_sections['l']['loop']-1;
if ($this->_sections['l']['show']) {
    $this->_sections['l']['total'] = $this->_sections['l']['loop'];
    if ($this->_sections['l']['total'] == 0)
        $this->_sections['l']['show'] = false;
} else
    $this->_sections['l']['total'] = 0;
if ($this->_sections['l']['show']):

            for ($this->_sections['l']['index'] = $this->_sections['l']['start'], $this->_sections['l']['iteration'] = 1;
                 $this->_sections['l']['iteration'] <= $this->_sections['l']['total'];
                 $this->_sections['l']['index'] += $this->_sections['l']['step'], $this->_sections['l']['iteration']++):
$this->_sections['l']['rownum'] = $this->_sections['l']['iteration'];
$this->_sections['l']['index_prev'] = $this->_sections['l']['index'] - $this->_sections['l']['step'];
$this->_sections['l']['index_next'] = $this->_sections['l']['index'] + $this->_sections['l']['step'];
$this->_sections['l']['first']      = ($this->_sections['l']['iteration'] == 1);
$this->_sections['l']['last']       = ($this->_sections['l']['iteration'] == $this->_sections['l']['total']);
?>
							    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getarrayccode', 'assign' => 'ccode', 'country' => $this->_tpl_vars['langsel'][$this->_sections['l']['index']]['cflag'])), $this); ?>

							    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'selfURL', 'assign' => 'selfURL')), $this); ?>

    								<li><a href="javascript:void(0);" onclick="HideContent('hidem2'); document.getElementById('hiddenlang').value = '<?php echo $this->_tpl_vars['langsel'][$this->_sections['l']['index']]['name']; ?>
'; langform.submit(); return false;"><img src="<?php echo $this->_tpl_vars['base_url']; ?>
/media/files_flags/<?php echo ((is_array($_tmp=$this->_tpl_vars['ccode'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
.gif" width="16" height="11" alt="<?php echo $this->_tpl_vars['langsel'][$this->_sections['i']['index']]['cflag']; ?>
"> <?php echo $this->_tpl_vars['langsel'][$this->_sections['l']['index']]['name']; ?>
</a></li>
    							    <?php endfor; endif; ?>
							</ul>
						    </li>
						</ul>
						<input type="hidden" id="hiddenlang" name="hiddenlang" value="">
					    </div>
					    </form>
					    </td>
					    <?php endif; ?>
					</tr>
				    </table>