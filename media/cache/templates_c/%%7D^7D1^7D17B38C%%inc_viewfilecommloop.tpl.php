<?php /* Smarty version 2.6.26, created on 2009-11-10 15:42:31
         compiled from _inc/viewfile/inc_viewfilecommloop.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'time_range', '_inc/viewfile/inc_viewfilecommloop.tpl', 14, false),array('insert', 'titlea_to_key', '_inc/viewfile/inc_viewfilecommloop.tpl', 25, false),array('insert', 'titlei_to_key', '_inc/viewfile/inc_viewfilecommloop.tpl', 27, false),array('insert', 'titlev_to_key', '_inc/viewfile/inc_viewfilecommloop.tpl', 29, false),array('insert', 'getfield', '_inc/viewfile/inc_viewfilecommloop.tpl', 41, false),array('insert', 'ctotal', '_inc/viewfile/inc_viewfilecommloop.tpl', 101, false),array('modifier', 'nl2br', '_inc/viewfile/inc_viewfilecommloop.tpl', 52, false),array('modifier', 'spchar', '_inc/viewfile/inc_viewfilecommloop.tpl', 52, false),)), $this); ?>
				<div id="thecomments" style="display: block;">
				    <?php unset($this->_sections['c']);
$this->_sections['c']['name'] = 'c';
$this->_sections['c']['loop'] = is_array($_loop=$this->_tpl_vars['comm']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['c']['show'] = true;
$this->_sections['c']['max'] = $this->_sections['c']['loop'];
$this->_sections['c']['step'] = 1;
$this->_sections['c']['start'] = $this->_sections['c']['step'] > 0 ? 0 : $this->_sections['c']['loop']-1;
if ($this->_sections['c']['show']) {
    $this->_sections['c']['total'] = $this->_sections['c']['loop'];
    if ($this->_sections['c']['total'] == 0)
        $this->_sections['c']['show'] = false;
} else
    $this->_sections['c']['total'] = 0;
if ($this->_sections['c']['show']):

            for ($this->_sections['c']['index'] = $this->_sections['c']['start'], $this->_sections['c']['iteration'] = 1;
                 $this->_sections['c']['iteration'] <= $this->_sections['c']['total'];
                 $this->_sections['c']['index'] += $this->_sections['c']['step'], $this->_sections['c']['iteration']++):
$this->_sections['c']['rownum'] = $this->_sections['c']['iteration'];
$this->_sections['c']['index_prev'] = $this->_sections['c']['index'] - $this->_sections['c']['step'];
$this->_sections['c']['index_next'] = $this->_sections['c']['index'] + $this->_sections['c']['step'];
$this->_sections['c']['first']      = ($this->_sections['c']['iteration'] == 1);
$this->_sections['c']['last']       = ($this->_sections['c']['iteration'] == $this->_sections['c']['total']);
?>
					<table cellpadding=0 cellspacing=0 width="100%">
					    <tr>
						<td>
						<div id="tcomm<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
" style="display: block;">
						    <table width="100%" cellpadding=5 cellspacing=0 border=0>
							<tr>
							    <td valign="top" class="dottc">
								<table cellpadding=0 cellspacing=0 border=0 width="100%">
								    <tr>
									<td>
									<?php if ($this->_tpl_vars['btn'] == 'baudio'): ?>
									    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'ctime', 'field' => 'addtime', 'IDFR' => 'comid', 'id' => $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid'], 'tbl' => 'comm_audio')), $this); ?>

									<?php elseif ($this->_tpl_vars['btn'] == 'bimage'): ?>
									    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'ctime', 'field' => 'addtime', 'IDFR' => 'comid', 'id' => $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid'], 'tbl' => 'comm_img')), $this); ?>

									<?php elseif ($this->_tpl_vars['btn'] == 'bvideo'): ?>
									    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'ctime', 'field' => 'addtime', 'IDFR' => 'comid', 'id' => $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid'], 'tbl' => 'comm_vid')), $this); ?>

									<?php elseif ($this->_tpl_vars['sbtn'] == 'profile' || $this->_tpl_vars['sbtn'] == 'userpage'): ?>
									    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'ctime', 'field' => 'addtime', 'IDFR' => 'comid', 'id' => $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid'], 'tbl' => 'comm_profile')), $this); ?>

									<?php endif; ?>
								    <?php if ($this->_tpl_vars['sbtn'] != 'profile' && $this->_tpl_vars['sbtn'] != 'userpage'): ?>
									<?php if ($this->_tpl_vars['same_title_uploads'] == '0'): ?>
									<?php if ($this->_tpl_vars['btn'] == 'baudio'): ?>
									    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'titlea_to_key', 'assign' => 'key', 'vtitle' => $_REQUEST['id'])), $this); ?>

									<?php elseif ($this->_tpl_vars['btn'] == 'bimage'): ?>
									    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'titlei_to_key', 'assign' => 'key', 'vtitle' => $_REQUEST['id'])), $this); ?>

									<?php elseif ($this->_tpl_vars['btn'] == 'bvideo'): ?>
									    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'titlev_to_key', 'assign' => 'key', 'vtitle' => $_REQUEST['id'])), $this); ?>

									<?php endif; ?>
									<?php else: ?><?php $this->assign('key', $_REQUEST['id']); ?><?php endif; ?>
								    <?php endif; ?>
									    <table cellpadding=0 cellspacing=0 border=0 width="100%">
										<tr>
										    <td valign="bottom" align="left">
											<?php if ($this->_tpl_vars['sbtn'] == 'userpage' && $this->_tpl_vars['comm_pos'] == 'right'): ?>
											<?php $this->assign('userimgw', 60); ?><?php $this->assign('userimgh', 60); ?>
											    <table cellpadding="0" cellspacing="0">
												<tr>
												    <td valign="top">
													<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'photo', 'field' => 'photo', 'table' => 'members', 'qfield' => 'username', 'qvalue' => $this->_tpl_vars['comm'][$this->_sections['c']['index']]['username'])), $this); ?>

													<a href="<?php echo $this->_tpl_vars['base_url']; ?>
/profile/<?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['username']; ?>
<?php else: ?><?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['uid']; ?>
<?php endif; ?>">
													    <img src="<?php echo $this->_tpl_vars['usrimg_url']; ?>
/<?php echo $this->_tpl_vars['photo']; ?>
" width="<?php echo $this->_tpl_vars['userimgw']; ?>
" height="<?php echo $this->_tpl_vars['userimgh']; ?>
" alt="<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['username']; ?>
" title="<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['username']; ?>
" class="pborder">
													</a>
												    </td>
												    <td valign="top" class="pl10">
													<div>
													    <a href="<?php echo $this->_tpl_vars['base_url']; ?>
/profile/<?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['username']; ?>
<?php else: ?><?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['uid']; ?>
<?php endif; ?>"><span class="bold"><?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['username']; ?>
</span></a>
													    <span class="label"><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php echo $this->_tpl_vars['ctime']; ?>
<span class="gr"><?php echo $this->_tpl_vars['fileaddedago']; ?>
</span> <?php if ($this->_tpl_vars['comm'][$this->_sections['c']['index']]['approved'] == '0'): ?>&nbsp;<span class="italic" style="font-size: 11px;">(<?php echo $this->_tpl_vars['filepending']; ?>
)</span><?php endif; ?>
													</div>
													<div class="p5">
													    <span class="bodylabel"><span class="comments"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comm'][$this->_sections['c']['index']]['comment'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</span></span>
													</div>
												    </td>
												</tr>
											    </table>
											<?php else: ?>
											    <a href="<?php echo $this->_tpl_vars['base_url']; ?>
/profile/<?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['username']; ?>
<?php else: ?><?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['uid']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['username']; ?>
</a>
											<?php endif; ?>
											<?php if (( $this->_tpl_vars['comm_pos'] != 'right' && ( $this->_tpl_vars['sbtn'] == 'profile' || $this->_tpl_vars['sbtn'] == 'userpage' ) ) || ( $this->_tpl_vars['btn'] != 'bhome' || $this->_tpl_vars['sbtn'] == 'profile' )): ?><?php if ($this->_tpl_vars['sbtn'] == 'userpage' && $this->_tpl_vars['comm_pos'] != 'right'): ?><span class="label"><?php endif; ?><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php echo $this->_tpl_vars['ctime']; ?>
<span class="gr"><?php echo $this->_tpl_vars['fileaddedago']; ?>
</span><?php if ($this->_tpl_vars['sbtn'] == 'userpage' && $this->_tpl_vars['comm_pos'] != 'right'): ?></span><?php endif; ?> <?php if ($this->_tpl_vars['comm'][$this->_sections['c']['index']]['approved'] == '0'): ?>&nbsp;<span class="italic" style="font-size: 11px;">(<?php echo $this->_tpl_vars['filepending']; ?>
)</span><?php endif; ?><?php endif; ?>
										    </td>
										    <td valign="bottom" class="pl5" align="right">
										    <?php if ($_SESSION['UID'] != ""): ?>
										    <?php if ($this->_tpl_vars['sbtn'] != 'profile' && $this->_tpl_vars['sbtn'] != 'userpage'): ?>
											<div id="comdiv<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
">
											    <form id="delcomment<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
">
										    <?php elseif ($this->_tpl_vars['sbtn'] == 'profile' || $this->_tpl_vars['sbtn'] == 'userpage'): ?>
											<div id="comdivp">
											    <form id="delcommentp<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
">
										    <?php endif; ?>
											    <?php if ($this->_tpl_vars['btn'] == 'baudio'): ?>
												<?php if ($_SESSION['UID'] == $this->_tpl_vars['vuid'] || $this->_tpl_vars['comm'][$this->_sections['c']['index']]['uid'] == $_SESSION['UID']): ?>
												    <a href="javascript:void(0)" title="<?php echo $this->_tpl_vars['inbox_itblact1']; ?>
" onClick="if(confirm('<?php echo $this->_tpl_vars['view_comm_del']; ?>
')) { thisDiv('no'); delcom_audio(<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
); HideContent('tcomm<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
'); }"><?php echo $this->_tpl_vars['inbox_itblact1']; ?>
</a>
												<?php endif; ?>
											    <?php elseif ($this->_tpl_vars['btn'] == 'bimage'): ?>
												<?php if ($_SESSION['UID'] == $this->_tpl_vars['vuid'] || $this->_tpl_vars['comm'][$this->_sections['c']['index']]['uid'] == $_SESSION['UID']): ?>
												    <a href="javascript:void(0)" title="<?php echo $this->_tpl_vars['inbox_itblact1']; ?>
" onClick="if(confirm('<?php echo $this->_tpl_vars['view_comm_del']; ?>
')) { thisDiv('no'); delcom_image(<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
); HideContent('tcomm<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
'); }"><?php echo $this->_tpl_vars['inbox_itblact1']; ?>
</a>
												<?php endif; ?>
											    <?php elseif ($this->_tpl_vars['btn'] == 'bvideo'): ?>
											    	<?php if ($_SESSION['UID'] == $this->_tpl_vars['vuid'] || $this->_tpl_vars['comm'][$this->_sections['c']['index']]['uid'] == $_SESSION['UID']): ?>
											    	    <a href="javascript:void(0)" title="<?php echo $this->_tpl_vars['inbox_itblact1']; ?>
" onClick="if(confirm('<?php echo $this->_tpl_vars['view_comm_del']; ?>
')) { thisDiv('no'); delcom(<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
); HideContent('tcomm<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
'); }"><?php echo $this->_tpl_vars['inbox_itblact1']; ?>
</a>
											    	<?php endif; ?>
											    <?php elseif ($this->_tpl_vars['sbtn'] == 'profile' || $this->_tpl_vars['sbtn'] == 'userpage'): ?>
												<?php if ($this->_tpl_vars['comm'][$this->_sections['c']['index']]['cuid'] == $_SESSION['UID'] || $this->_tpl_vars['comm'][$this->_sections['c']['index']]['uid'] == $_SESSION['UID']): ?>
												    <a href="javascript:void(0)" title="<?php echo $this->_tpl_vars['inbox_itblact1']; ?>
" onClick="if(confirm('<?php echo $this->_tpl_vars['view_comm_del']; ?>
')) { thisDiv('no'); delcomp('<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
'); HideContent('tcomm<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
'); }"><?php echo $this->_tpl_vars['inbox_itblact1']; ?>
</a>
												<?php endif; ?>
												<input type="hidden" name="comidc" value="<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
">
												<input type="hidden" name="comid" value="<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
">
											    <?php endif; ?>
											    <?php if ($this->_tpl_vars['sbtn'] != 'profile' && $this->_tpl_vars['sbtn'] != 'userpage'): ?>
												<input type="hidden" name="comid" value="<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
">
												<input type="hidden" name="cuid" value="<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['uid']; ?>
">
												<input type="hidden" name="fkey" value="<?php echo $this->_tpl_vars['fkey']; ?>
">
											    <?php endif; ?>
											    </form>
											</div>
										    <?php endif; ?>
										    </td>
										    
										<?php if ($this->_tpl_vars['comment_rating'] == '1' && $this->_tpl_vars['file_comm_rate'] == 'yes'): ?>
										<?php if ($this->_tpl_vars['btn'] == 'baudio'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ctotal', 'assign' => 'ctotal', 'comid' => $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid'], 'vid' => $this->_tpl_vars['vidid'], 'type' => 'audio')), $this); ?>

										    <td valign="bottom" align="right" width="16" class="pl5"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/symbols/thumbsdown.gif" width="16" height="19" class="cursor" alt="<?php echo $this->_tpl_vars['poor_comment']; ?>
" title="<?php echo $this->_tpl_vars['poor_comment']; ?>
" <?php if ($_SESSION['UID'] == ""): ?>onclick="javascript:alert('<?php echo $this->_tpl_vars['msg_usercomm']; ?>
')"<?php else: ?>onclick="thisDiv('no'); aratedown('<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
');"<?php endif; ?>></td>
										    <td valign="bottom" align="right" width="16" class="pl5"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/symbols/thumbsup.gif" width="16" height="19" class="cursor" alt="<?php echo $this->_tpl_vars['good_comment']; ?>
" title="<?php echo $this->_tpl_vars['good_comment']; ?>
" <?php if ($_SESSION['UID'] == ""): ?>onclick="javascript:alert('<?php echo $this->_tpl_vars['msg_usercomm']; ?>
')"<?php else: ?>onclick="thisDiv('no'); arateup('<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
');"<?php endif; ?>></td>
										<?php elseif ($this->_tpl_vars['btn'] == 'bimage'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ctotal', 'assign' => 'ctotal', 'comid' => $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid'], 'vid' => $this->_tpl_vars['vidid'], 'type' => 'image')), $this); ?>

										    <td valign="bottom" align="right" width="16" class="pl5"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/symbols/thumbsdown.gif" width="16" height="19" class="cursor" alt="<?php echo $this->_tpl_vars['poor_comment']; ?>
" title="<?php echo $this->_tpl_vars['poor_comment']; ?>
" <?php if ($_SESSION['UID'] == ""): ?>onclick="javascript:alert('<?php echo $this->_tpl_vars['msg_usercomm']; ?>
')"<?php else: ?>onclick="thisDiv('no'); iratedown('<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
');"<?php endif; ?>></td>
										    <td valign="bottom" align="right" width="16" class="pl5"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/symbols/thumbsup.gif" width="16" height="19" class="cursor" alt="<?php echo $this->_tpl_vars['good_comment']; ?>
" title="<?php echo $this->_tpl_vars['good_comment']; ?>
" <?php if ($_SESSION['UID'] == ""): ?>onclick="javascript:alert('<?php echo $this->_tpl_vars['msg_usercomm']; ?>
')"<?php else: ?>onclick="thisDiv('no'); irateup('<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
');"<?php endif; ?>></td>
										<?php elseif ($this->_tpl_vars['btn'] == 'bvideo'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ctotal', 'assign' => 'ctotal', 'comid' => $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid'], 'vid' => $this->_tpl_vars['vidid'], 'type' => 'video')), $this); ?>

										    <td valign="bottom" align="right" width="16" class="pl5"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/symbols/thumbsdown.gif" width="16" height="19" class="cursor" alt="<?php echo $this->_tpl_vars['poor_comment']; ?>
" title="<?php echo $this->_tpl_vars['poor_comment']; ?>
" <?php if ($_SESSION['UID'] == ""): ?>onclick="javascript:alert('<?php echo $this->_tpl_vars['msg_usercomm']; ?>
')"<?php else: ?>onclick="thisDiv('no'); vratedown('<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
');"<?php endif; ?>></td>
										    <td valign="bottom" align="right" width="16" class="pl5"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/symbols/thumbsup.gif" width="16" height="19" class="cursor" alt="<?php echo $this->_tpl_vars['good_comment']; ?>
" title="<?php echo $this->_tpl_vars['good_comment']; ?>
" <?php if ($_SESSION['UID'] == ""): ?>onclick="javascript:alert('<?php echo $this->_tpl_vars['msg_usercomm']; ?>
')"<?php else: ?>onclick="thisDiv('no'); vrateup('<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
');"<?php endif; ?>></td>
										<?php elseif ($this->_tpl_vars['btn'] == 'bhome'): ?><?php $this->assign('vidid', '0'); ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ctotal', 'assign' => 'ctotal', 'comid' => $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid'], 'vid' => $this->_tpl_vars['vidid'], 'type' => 'profile')), $this); ?>

										    <td valign="bottom" align="right" width="16" class="pl5"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/symbols/thumbsdown.gif" width="16" height="19" class="cursor" alt="<?php echo $this->_tpl_vars['poor_comment']; ?>
" title="<?php echo $this->_tpl_vars['poor_comment']; ?>
" <?php if ($_SESSION['UID'] == ""): ?>onclick="javascript:alert('<?php echo $this->_tpl_vars['msg_usercomm']; ?>
')"<?php else: ?>onclick="thisDiv('no'); pratedown('<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
');"<?php endif; ?>></td>
										    <td valign="bottom" align="right" width="16" class="pl5"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/symbols/thumbsup.gif" width="16" height="19" class="cursor" alt="<?php echo $this->_tpl_vars['good_comment']; ?>
" title="<?php echo $this->_tpl_vars['good_comment']; ?>
" <?php if ($_SESSION['UID'] == ""): ?>onclick="javascript:alert('<?php echo $this->_tpl_vars['msg_usercomm']; ?>
')"<?php else: ?>onclick="thisDiv('no'); prateup('<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
');"<?php endif; ?>></td>
										<?php endif; ?>
										    <td valign="bottom" align="right" width="26" class="pl5"><?php echo $this->_tpl_vars['udetails'][0]['uid']; ?>

											<form id="commratediv<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
"><input type="hidden" name="comid" value="<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
"><input type="hidden" name="vidid" value="<?php echo $this->_tpl_vars['vidid']; ?>
"></form>
											<div id="thetotal<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
" <?php if ($this->_tpl_vars['sbtn'] == 'userpage'): ?>class="green"<?php endif; ?>><?php if ($this->_tpl_vars['sbtn'] == 'userpage'): ?><span class="bodylabel"><?php endif; ?>(<?php if ($this->_tpl_vars['ctotal'] == "" || $this->_tpl_vars['ctotal'] == '0'): ?>0<?php else: ?><?php if ($this->_tpl_vars['ctotal'] > '0'): ?><span class="<?php if ($this->_tpl_vars['sbtn'] != 'userpage'): ?>green<?php endif; ?>">+<?php elseif ($this->_tpl_vars['ctotal'] < '0'): ?><span class="<?php if ($this->_tpl_vars['sbtn'] != 'userpage'): ?>red<?php endif; ?>"><?php endif; ?><?php echo $this->_tpl_vars['ctotal']; ?>
</span><?php endif; ?>)</span></div>
										    </td>
										<?php endif; ?>
										</tr>
									    </table>
									</td>
								    </tr>
								    <?php if (( $this->_tpl_vars['comm_pos'] != 'right' && ( $this->_tpl_vars['sbtn'] == 'profile' || $this->_tpl_vars['sbtn'] == 'userpage' ) ) || ( $this->_tpl_vars['btn'] != 'bhome' || $this->_tpl_vars['sbtn'] == 'profile' )): ?>
								    <tr>
									<td class="pt5" align="left">
									    <?php if ($this->_tpl_vars['sbtn'] == 'userpage'): ?><span class="bodylabel"><?php endif; ?><span class="comments"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comm'][$this->_sections['c']['index']]['comment'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</span><?php if ($this->_tpl_vars['sbtn'] == 'userpage'): ?></span><?php endif; ?>
									</td>
								    </tr>
								    <?php endif; ?>
								    <?php if ($this->_tpl_vars['sbtn'] == 'profile' || $this->_tpl_vars['sbtn'] == 'userpage'): ?>
								    <tr>
									<td class="pt5"><div id="commdelp<?php echo $this->_tpl_vars['comm'][$this->_sections['c']['index']]['comid']; ?>
"></div></td>
								    </tr>
								    <?php endif; ?>
								</table>
							    </td>
							</tr>
						    </table>
						</div>
						</td>
					    </tr>
					</table>
				    <?php endfor; endif; ?>
				    <table cellpadding="5" cellspacing="0" width="100%" border=0>
					<tr>
					    <td align="left" valign="top" width=><div id="pnum" <?php if ($_SESSION['pagenumbering'] == 'on' || $_SESSION['pagenumbering'] == ""): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><?php echo $this->_tpl_vars['link']; ?>
</div></td>
					    <?php if ($this->_tpl_vars['comm'][0]['comid'] != ""): ?>
					    <td align="right" valign="top">
						<div class="p5"><?php echo $this->_tpl_vars['nextprevlinks']; ?>
</div>
						<div id="phide" <?php if ($_SESSION['pagenumbering'] == 'on' || $_SESSION['pagenumbering'] == ""): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><a href="javascript:void(0)" onclick="thisDiv('no'); setpagenumbering('off'); HideContent('pnum'); ShowContent('pshow'); HideContent('phide');"><?php echo $this->_tpl_vars['comm_hide1']; ?>
</a></div>
						<div id="pshow" <?php if ($_SESSION['pagenumbering'] == 'off'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><a href="javascript:void(0)" onclick="thisDiv('no'); setpagenumbering('on'); ShowContent('pnum'); ShowContent('phide'); HideContent('pshow');"><?php echo $this->_tpl_vars['comm_hide2']; ?>
</a></div>
					    </td>
					    <?php endif; ?>
					</tr>
				    </table>
				</div>