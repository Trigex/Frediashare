<?php /* Smarty version 2.6.26, created on 2009-11-10 15:24:15
         compiled from administration/header/search_tabletoplinks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'getfield', 'administration/header/search_tabletoplinks.tpl', 70, false),array('insert', 'getarrayccode', 'administration/header/search_tabletoplinks.tpl', 71, false),array('insert', 'selfURL', 'administration/header/search_tabletoplinks.tpl', 78, false),array('modifier', 'lower', 'administration/header/search_tabletoplinks.tpl', 74, false),)), $this); ?>

				    <table cellpadding="2" cellspacing="0" border=0 align="right" <?php if ($this->_tpl_vars['sbtn'] == 'userpage'): ?>class="secl"<?php endif; ?>>
					<tr>
					<?php if ($_SESSION['AUID'] != ""): ?>
					    <td valign="top">
						<ul id="<?php if ($this->_tpl_vars['site_theme'] == 'metube'): ?>Menu_tube_admin<?php else: ?>Menu_admin<?php endif; ?>" class="<?php if ($this->_tpl_vars['site_theme'] == 'metube'): ?>MM_tube<?php else: ?>MM<?php endif; ?>" style="padding: 0px; margin: 0px; display: block;">
						    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/profile/<?php echo $_SESSION['USERNAME']; ?>
" onclick="HideContent('hidem1');">&nbsp;<span id="Menu1top"><?php echo $_SESSION['AUID']; ?>
</span>&nbsp;&nbsp;<img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowdown1.gif" width="9" height="6"></a>
							<ul id="hidem1">
							    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/audios/all/all_time" onclick="HideContent('hidem1');">&nbsp;&nbsp;<?php echo $this->_tpl_vars['navaudio']; ?>
</a>
								<ul>
								    <li class="pl5"><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/audios/all/all_time" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_allaudios']; ?>
</a></li>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/requests/audio/featured/active" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_featreq']; ?>
</a></li>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/requests/audio/inappropriate/active" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_inappreq']; ?>
</a></li>
								</ul>
							    </li>
							    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/images/all/all_time" onclick="HideContent('hidem1');">&nbsp;&nbsp;<?php echo $this->_tpl_vars['navimage']; ?>
</a>
								<ul>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/images/all/all_time" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_allimages']; ?>
</a></li>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/requests/image/featured/active" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_featreq']; ?>
</a></li>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/requests/image/inappropriate/active" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_inappreq']; ?>
</a></li>
								</ul>
							    </li>
							    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/videos/all/all_time" onclick="HideContent('hidem1');">&nbsp;&nbsp;<?php echo $this->_tpl_vars['navvideo']; ?>
</a>
								<ul>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/videos/all/all_time" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_allvideos']; ?>
</a></li>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/requests/video/featured/active" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_featreq']; ?>
</a></li>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/requests/video/inappropriate/active" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_inappreq']; ?>
</a></li>
								</ul>
							    </li>
							    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/player_main" onclick="HideContent('hidem1');">&nbsp;&nbsp;<?php echo $this->_tpl_vars['navplayers']; ?>
</a>
								<ul>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/player_main_audio" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_aplayer']; ?>
</a></li>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/watermark_main_audio" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_awm']; ?>
</a></li>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/textads" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['adm_nfptxt5']; ?>
</a></li>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/videoads" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_vads']; ?>
</a></li>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/player_main" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_vplayer']; ?>
</a></li>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/watermark_main" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_vwm']; ?>
</a></li>
								</ul>
							    </li>
							    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/categories" onclick="HideContent('hidem1');">&nbsp;&nbsp;<?php echo $this->_tpl_vars['navcat']; ?>
</a></li>
							    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/registered" onclick="HideContent('hidem1');">&nbsp;&nbsp;<?php echo $this->_tpl_vars['navmem']; ?>
</a>
								<ul>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/email/all" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_mememailall']; ?>
</a></li>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/message/all" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_memmsgall']; ?>
</a></li>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/banned" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_membanned']; ?>
</a></li>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/registered" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_memregged']; ?>
</a></li>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/requests" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['adm_memchreq1']; ?>
</a></li>
								</ul>
							    </li>
							    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/general" onclick="HideContent('hidem1');">&nbsp;&nbsp;<?php echo $this->_tpl_vars['navsettings']; ?>
</a>
								<ul>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/ads" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_setad']; ?>
</a></li>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/templates" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_settpl']; ?>
</a></li>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/general" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_setgen']; ?>
</a></li>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/guest" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_setguest']; ?>
</a></li>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/languages" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_setlang']; ?>
</a></li>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/paging" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_setpag']; ?>
</a></li>
								    <li><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/system" onclick="HideContent('hidem1');"><?php echo $this->_tpl_vars['snav_setsys']; ?>
</a></li>
								</ul>
							    </li>
							</ul>
						    </li>
						</ul>
					    </td>
					<?php endif; ?>
					    <td valign="top"><?php if ($_SESSION['AUID'] != ""): ?><span class="black">&nbsp;|&nbsp;&nbsp;</span><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/logout"><?php echo $this->_tpl_vars['snavlogout']; ?>
</a><?php else: ?><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
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
">&nbsp;&nbsp;<?php echo $this->_tpl_vars['langsel'][$this->_sections['l']['index']]['name']; ?>
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