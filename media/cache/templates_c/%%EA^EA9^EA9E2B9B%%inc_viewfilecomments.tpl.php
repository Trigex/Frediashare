<?php /* Smarty version 2.6.26, created on 2009-11-10 15:42:30
         compiled from _inc/viewfile/inc_viewfilecomments.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'titlea_to_key', '_inc/viewfile/inc_viewfilecomments.tpl', 2, false),array('insert', 'titlei_to_key', '_inc/viewfile/inc_viewfilecomments.tpl', 2, false),array('insert', 'titlev_to_key', '_inc/viewfile/inc_viewfilecomments.tpl', 2, false),array('insert', 'getfield', '_inc/viewfile/inc_viewfilecomments.tpl', 101, false),array('modifier', 'viewnr', '_inc/viewfile/inc_viewfilecomments.tpl', 25, false),)), $this); ?>
<!-- BEGIN COMMENTS TABLE -->
    			<?php if ($this->_tpl_vars['same_title_uploads'] == '0'): ?><?php if ($this->_tpl_vars['btn'] == 'baudio'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'titlea_to_key', 'assign' => 'key', 'vtitle' => $_REQUEST['id'])), $this); ?>
<?php $this->assign('ftype', 'audio'); ?><?php elseif ($this->_tpl_vars['btn'] == 'bimage'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'titlei_to_key', 'assign' => 'key', 'vtitle' => $_REQUEST['id'])), $this); ?>
<?php $this->assign('ftype', 'image'); ?><?php elseif ($this->_tpl_vars['btn'] == 'bvideo'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'titlev_to_key', 'assign' => 'key', 'vtitle' => $_REQUEST['id'])), $this); ?>
<?php $this->assign('ftype', 'video'); ?><?php elseif ($this->_tpl_vars['btn'] == 'bhome'): ?><?php $this->assign('ftype', 'profile'); ?><?php endif; ?><?php else: ?><?php $this->assign('key', $_REQUEST['id']); ?><?php endif; ?>
    			<?php if ($this->_tpl_vars['file_comments'] == '1' || ( ( $this->_tpl_vars['sbtn'] == 'profile' || $this->_tpl_vars['sbtn'] == 'userpage' ) && $this->_tpl_vars['profile_comments'] == '1' )): ?>
			<table width="100%" cellpadding="10" cellspacing="0" border=0 class="br2" align="left">
			    <tr>
				<td colspan=2>
				<?php if ($this->_tpl_vars['sbtn'] != 'profile' && $this->_tpl_vars['sbtn'] != 'userpage'): ?>
				<?php if (( $this->_tpl_vars['is_comm'] == 'yes' || $this->_tpl_vars['is_comm'] == 'appfr' || $this->_tpl_vars['is_comm'] == 'app' ) || ( $this->_tpl_vars['friend'] == 'yes' && $this->_tpl_vars['can_comment'] == '1' )): ?>
				<table width="100%" cellpadding="0" cellspacing="0" border=0>
				    <tr>
				    <?php if ($this->_tpl_vars['type'] != 'private'): ?>
					<td>
					<div id="clink_on" style="display: block;">
					    <table cellpadding="0" cellspacing="0" border=0>
						<tr>
						    <td valign="middle" class="" width="11">
							<div id="cdownarr4" style="<?php if ($this->_tpl_vars['vpage_fcomm_box'] == 'e'): ?>display: block;<?php else: ?>display: none;<?php endif; ?>" class="pl2">
                                                	    <a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr4'); ReverseContentDisplay('cdownarr4'); ReverseContentDisplay('commloopdiv'); ReverseContentDisplay('reload_on'); setclass_act2('scadd');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowdown1.gif" width="9" height="5" alt=""></a>
                                            		</div>
                                            		<div id="cleftarr4" style="<?php if ($this->_tpl_vars['vpage_fcomm_box'] == 'c'): ?>display: block;<?php else: ?>display: none;<?php endif; ?>" class="pl2">
                                                	    <a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr4'); ReverseContentDisplay('cdownarr4'); ReverseContentDisplay('commloopdiv'); ReverseContentDisplay('reload_on'); setclass_act2('scadd');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowleft1.gif" width="5" height="9" alt=""></a>
                                            		</div>
						    </td>
						    <td class="pl5"><a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr4'); ReverseContentDisplay('cdownarr4'); ReverseContentDisplay('commloopdiv'); ReverseContentDisplay('reload_on'); setclass_act2('scadd');"><span id="scadd" class="<?php if ($this->_tpl_vars['vpage_fcomm_box'] == 'e'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['mcommtxt1']; ?>
</span></a></td>
						    <td class="pl5"><div id="commcount">(<?php echo ((is_array($_tmp=$this->_tpl_vars['comments'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
)</div></td>
						    <td width="120" align="right">
							<div id="reload_on" style="<?php if ($this->_tpl_vars['vpage_fcomm_box'] == 'e'): ?>display: block;<?php else: ?>display: none;<?php endif; ?>">
							    <a href="javascript:void(0)" onclick="thisDiv('yes'); ldiv('loadme'); comm_load('<?php echo $this->_tpl_vars['ftype']; ?>
', '<?php echo $this->_tpl_vars['key']; ?>
', '1'); total_load('<?php echo $this->_tpl_vars['ftype']; ?>
', '<?php echo $this->_tpl_vars['key']; ?>
', '1');"><?php echo $this->_tpl_vars['comm_reload']; ?>
</a>
							</div>
						    </td>
						</tr>
					    </table>
					</div>
					</td>
					
					<td align="right" valign="top">
					    <?php if ($_SESSION['UID'] != ""): ?>
						<a href="javascript:void(0);" onclick="ReverseContentDisplay('div<?php echo $this->_tpl_vars['vidid']; ?>
'); setclass_act2('cadd');"><span id="cadd"><?php echo $this->_tpl_vars['view_comm_add']; ?>
</span></a>
					    <?php endif; ?>
					    <?php if ($_SESSION['UID'] == ""): ?>
						<a href="<?php echo $this->_tpl_vars['base_url']; ?>
/login?next=<?php echo $this->_tpl_vars['ftype']; ?>
/<?php echo $_REQUEST['id']; ?>
"><?php echo $this->_tpl_vars['snavlogin']; ?>
</a><?php echo $this->_tpl_vars['fresp_txt9']; ?>

					    <?php endif; ?>
					</td>
					
				    <?php else: ?>
					
					<?php if (( $this->_tpl_vars['friend'] == 'yes' && $this->_tpl_vars['can_comment'] == '1' ) || ( $this->_tpl_vars['vuid'] == $_SESSION['UID'] )): ?>
					<td>
					<div id="clink_on" style="display: block;">
					    <table cellpadding="0" cellspacing="0" border=0>
						<tr>
						    <td valign="middle" class="" width="11">
							<div id="cdownarr4" style="<?php if ($this->_tpl_vars['vpage_fcomm_box'] == 'e'): ?>display: block;<?php else: ?>display: none;<?php endif; ?>" class="pl2">
                                                	    <a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr4'); ReverseContentDisplay('cdownarr4'); ReverseContentDisplay('commloopdiv'); ReverseContentDisplay('reload_on'); setclass_act2('scadd');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowdown1.gif" width="9" height="5" alt=""></a>
                                            		</div>
                                            		<div id="cleftarr4" style="<?php if ($this->_tpl_vars['vpage_fcomm_box'] == 'c'): ?>display: block;<?php else: ?>display: none;<?php endif; ?>" class="pl2">
                                                	    <a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr4'); ReverseContentDisplay('cdownarr4'); ReverseContentDisplay('commloopdiv'); ReverseContentDisplay('reload_on'); setclass_act2('scadd');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowleft1.gif" width="5" height="9" alt=""></a>
                                            		</div>
						    </td>
						    <td class="pl5"><a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr4'); ReverseContentDisplay('cdownarr4'); ReverseContentDisplay('commloopdiv'); ReverseContentDisplay('reload_on'); setclass_act2('scadd');"><span id="scadd" class="<?php if ($this->_tpl_vars['vpage_fcomm_box'] == 'e'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['mcommtxt1']; ?>
</span></a></td>
						    <td class="pl5"><div id="commcount">(<?php echo ((is_array($_tmp=$this->_tpl_vars['comments'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
)</div></td>
						    <td width="120" align="right">
							<div id="reload_on" style="<?php if ($this->_tpl_vars['vpage_fcomm_box'] == 'e'): ?>display: block;<?php else: ?>display: none;<?php endif; ?>">
							    <a href="javascript:void(0)" onclick="thisDiv('yes'); ldiv('loadme'); comm_load('<?php echo $this->_tpl_vars['ftype']; ?>
', '<?php echo $this->_tpl_vars['key']; ?>
', '1'); total_load('<?php echo $this->_tpl_vars['ftype']; ?>
', '<?php echo $this->_tpl_vars['key']; ?>
', '1');"><?php echo $this->_tpl_vars['comm_reload']; ?>
</a>
							</div>
						    </td>
						</tr>
					    </table>
					</div>
					</td>
					
					<td align="right" valign="top">
					    <?php if ($_SESSION['UID'] != ""): ?>
						<a href="javascript:void(0);" onclick="ReverseContentDisplay('div<?php echo $this->_tpl_vars['vidid']; ?>
'); setclass_act2('cadd');"><span id="cadd"><?php echo $this->_tpl_vars['view_comm_add']; ?>
</span></a>
					    <?php endif; ?>
					    <?php if ($_SESSION['UID'] == ""): ?>
						<a href="<?php echo $this->_tpl_vars['base_url']; ?>
/login?next=<?php echo $this->_tpl_vars['ftype']; ?>
/<?php echo $_REQUEST['id']; ?>
"><?php echo $this->_tpl_vars['snavlogin']; ?>
</a><?php echo $this->_tpl_vars['fresp_txt9']; ?>

					    <?php endif; ?>
					</td>
					
					<?php else: ?>
					    <?php echo $this->_tpl_vars['view_comm_not']; ?>

					<?php endif; ?>
				    <?php endif; ?>
				    </tr>
				</table>
				<?php else: ?>
				    <?php echo $this->_tpl_vars['view_comm_not']; ?>

				<?php endif; ?>
				
				<?php if ($this->_tpl_vars['act'] == '0'): ?>
				    <?php echo $this->_tpl_vars['view_appr_not']; ?>

				<?php endif; ?>
				
				<?php elseif ($this->_tpl_vars['sbtn'] == 'profile' || $this->_tpl_vars['sbtn'] == 'userpage'): ?>
				    <?php if ($this->_tpl_vars['errs'] != ""): ?>
					<?php echo $this->_tpl_vars['errs']; ?>

				    <?php elseif (( $this->_tpl_vars['udetails'][0]['ch_comm'] == 'no' ) || ( $this->_tpl_vars['udetails'][0]['ch_comm_who'] == '2' && $this->_tpl_vars['friend'] != 'yes' && $this->_tpl_vars['udetails'][0]['uid'] != $_SESSION['UID'] )): ?>
					<?php echo $this->_tpl_vars['comm_disabletxt1']; ?>

				    <?php else: ?>
                                    <?php if ($this->_tpl_vars['ftype'] == 'profile'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'suid', 'field' => 'uid', 'table' => 'members', 'qfield' => 'username', 'qvalue' => $_REQUEST['user'])), $this); ?>
<?php $this->assign('key', $this->_tpl_vars['suid']); ?><?php endif; ?>
				    <table cellpadding=0 cellspacing=0 border=0 width="100%" align="center">
					<tr>
					<td align="left" valign="top">
					    <?php if ($_SESSION['UID'] != ""): ?>
						<a id="add_comm" href="javascript:void(0);" onclick="ReverseContentDisplay('div_comm'); setclass_act2('cadd');"><span id="cadd"><?php echo $this->_tpl_vars['view_comm_add']; ?>
</span></a>
					    <?php endif; ?>
					    <?php if ($_SESSION['UID'] == ""): ?>
						<a id="add_comm" href="<?php echo $this->_tpl_vars['base_url']; ?>
/login?next=<?php echo $this->_tpl_vars['ftype']; ?>
/<?php echo $_REQUEST['user']; ?>
"><?php echo $this->_tpl_vars['snavlogin']; ?>
</a><?php echo $this->_tpl_vars['fresp_txt9']; ?>

					    <?php endif; ?>
					</td>
					
					<td>
					<div id="clink_on" style="display: block;">
					<?php if ($_SESSION['UID'] != ""): ?>
					    <table cellpadding="0" cellspacing="0" border=0 width="100%">
						<tr>
						    <td align="right">
							<div id="reload_on" style="display: block;">
							    <a href="javascript:void(0)" onclick="thisDiv('yes'); ldiv('loadme'); comm_load('<?php echo $this->_tpl_vars['ftype']; ?>
', '<?php echo $this->_tpl_vars['key']; ?>
', '1'); <?php if ($this->_tpl_vars['sbtn'] == 'userpage'): ?>total_load('<?php echo $this->_tpl_vars['ftype']; ?>
', '<?php echo $this->_tpl_vars['key']; ?>
', '1');<?php endif; ?>"><?php echo $this->_tpl_vars['comm_reload']; ?>
</a>
							</div>
						    </td>
						</tr>
					    </table>
					<?php endif; ?>
					</div>
					</td>
					</tr>
					
					<tr>
					    <td colspan=2 align="left">
						<div id="div_comm" style="display: none;">
						    <form id="pcommentsForm">
							<table cellpadding=0 cellspacing=0 align="left" border=0 width="100%">
							    <tr>
								<td>
								    <textarea name="comms" rows="4" style="<?php if ($this->_tpl_vars['tinfo'][0]['th_comm_pos'] == 'right'): ?>width: 450px;<?php else: ?>width: 200px;<?php endif; ?>"></textarea>
								    <input type="hidden" name="useruid" value="<?php echo $this->_tpl_vars['udetails'][0]['uid']; ?>
">
								</td>
							    </tr>
							    <tr>
								<td><input name="sendbutton" type="button" value="<?php echo $this->_tpl_vars['view_commbtn']; ?>
" class="fb" onclick="thisDiv('yes'); ldiv('commdiv'); send_pc();">&nbsp;<input type="button" class="fb" value="<?php echo $this->_tpl_vars['view_reqbtncancel']; ?>
" onclick="setclass_act2('cadd'); HideContent('div_comm');"></td>
							    </tr>
							    <tr>
								<td>
								    <div id="loading5" style="display: none;">
									<table cellpadding=5 cellspacing=0 border=0><tr><td><?php echo $this->_tpl_vars['adm_setgen79']; ?>
</td><td><?php echo $this->_tpl_vars['loading_gif']; ?>
</td></tr></table>
								    </div>
								    <div id="commdiv" class="p5"></div>
								</td>
							    </tr>
							</table>
						    </form>
						</div>
					    </td>
					</tr>
				    </table>
				    <?php endif; ?>
				<?php endif; ?>
				</td>
			    </tr>
			    <?php if ($this->_tpl_vars['sbtn'] != 'profile' && $this->_tpl_vars['sbtn'] != 'userpage'): ?>
			    <tr>
				<td align=right colspan=2 class="nopad">
				<div id="updateDiv1">
				    <div id="div<?php echo $this->_tpl_vars['vidid']; ?>
" style="display: none;">
					<form id="commentsForm">
					<table cellpadding=0 cellspacing=0 border=0>
					    <tr>
						<td align="right" valign="top" class="pl10"><?php echo $this->_tpl_vars['view_comm_text']; ?>
&nbsp;</td>
						<td class="pr10">
						    <textarea name="body" class="ff" rows="3" cols="40"></textarea><br>
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
						    <?php else: ?>
							<?php $this->assign('key', $_REQUEST['id']); ?>
						    <?php endif; ?>
						    <input type="hidden" name="fkey" value="<?php echo $this->_tpl_vars['key']; ?>
">
						</td>
					    </tr>
					    <tr>
						<td></td>
						<td>
						<?php if ($this->_tpl_vars['btn'] == 'baudio'): ?>
						    <input name="sendbutton" type="button" value="<?php echo $this->_tpl_vars['view_commbtn']; ?>
" class="fb" onClick="thisDiv('yes'); ldiv('updateDiv'); send_audio();">
						<?php elseif ($this->_tpl_vars['btn'] == 'bimage'): ?>
						    <input name="sendbutton" type="button" value="<?php echo $this->_tpl_vars['view_commbtn']; ?>
" class="fb" onClick="thisDiv('yes'); ldiv('updateDiv'); send_image();">
						<?php elseif ($this->_tpl_vars['btn'] == 'bvideo'): ?>
						    <input name="sendbutton" type="button" value="<?php echo $this->_tpl_vars['view_commbtn']; ?>
" class="fb" onClick="thisDiv('yes'); ldiv('updateDiv'); send();">
						<?php endif; ?>
						    <input type="button" class="fb" value="<?php echo $this->_tpl_vars['view_reqbtncancel']; ?>
" onClick="HideContent('div<?php echo $this->_tpl_vars['vidid']; ?>
'); setclass_act2('cadd');">
						</td>
					    </tr>
					    
					    <tr>
						<td></td>
						<td align="left">
						    <div id="loading3" style="display: none;">
							<table cellpadding=5 cellspacing=0 border=0><tr><td><?php echo $this->_tpl_vars['adm_setgen79']; ?>
</td><td><?php echo $this->_tpl_vars['loading_gif']; ?>
</td></tr></table>
						    </div>
						    <div id="updateDiv" class="p5" style="text-align: left; padding-left: 0px;"></div>
						</td>
					    </tr>
					</table>
					</form>
				    </div>
				</div>
				</td>
			    </tr>
			    <?php endif; ?>

			    <?php if (( ( $this->_tpl_vars['is_comm'] == 'yes' || $this->_tpl_vars['is_comm'] == 'appfr' || $this->_tpl_vars['is_comm'] == 'app' ) && $this->_tpl_vars['type'] != 'private' ) || $this->_tpl_vars['ftype'] == 'profile'): ?>
			    <tr>
				<td colspan=2 class="nopad" align="left">
				    <?php if ($this->_tpl_vars['ftype'] == 'profile'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'suid', 'field' => 'uid', 'table' => 'members', 'qfield' => 'username', 'qvalue' => $_REQUEST['user'])), $this); ?>
<?php $this->assign('key', $this->_tpl_vars['suid']); ?><?php endif; ?>
				    <form id="commloopform"></form>
				    <div id="commloopdiv" style="<?php if ($this->_tpl_vars['vpage_fcomm_box'] == 'e' || ( $this->_tpl_vars['sbtn'] == 'profile' || $this->_tpl_vars['sbtn'] == 'userpage' )): ?>display: block;<?php else: ?>display: none;<?php endif; ?>"><script type="text/javascript"> comm_load('<?php echo $this->_tpl_vars['ftype']; ?>
', '<?php echo $this->_tpl_vars['key']; ?>
', '1'); </script></div>
				    <div id="hiddenresponsediv" style="display: none;"></div>
				    <div id="loading4" style="display: none;"><table cellpadding=5 cellspacing=0 border=0><tr><td><?php echo $this->_tpl_vars['adm_setgen79']; ?>
</td><td><?php echo $this->_tpl_vars['loading_gif']; ?>
</td></tr></table></div>
				    <div id="loadme"></div>
                                </td>
			    </tr>
			    
			    <?php elseif (( ( $this->_tpl_vars['is_comm'] == 'yes' || $this->_tpl_vars['is_comm'] == 'appfr' || $this->_tpl_vars['is_comm'] == 'app' ) && $this->_tpl_vars['type'] == 'private' )): ?>
			    <?php if ($this->_tpl_vars['vuid'] == $_SESSION['UID'] || $this->_tpl_vars['can_comment'] == '1'): ?>
			    <tr>
				<td colspan=2 class="nopad" align="left">
				    <?php if ($this->_tpl_vars['ftype'] == 'profile'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'suid', 'field' => 'uid', 'table' => 'members', 'qfield' => 'username', 'qvalue' => $_REQUEST['user'])), $this); ?>
<?php $this->assign('key', $this->_tpl_vars['suid']); ?><?php endif; ?>
				    <form id="commloopform"></form>
				    <div id="commloopdiv" style="<?php if ($this->_tpl_vars['vpage_fcomm_box'] == 'e' || ( $this->_tpl_vars['sbtn'] == 'profile' || $this->_tpl_vars['sbtn'] == 'userpage' )): ?>display: block;<?php else: ?>display: none;<?php endif; ?>"><script type="text/javascript"> comm_load('<?php echo $this->_tpl_vars['ftype']; ?>
', '<?php echo $this->_tpl_vars['key']; ?>
', '1'); </script></div>
				    <div id="hiddenresponsediv" style="display: none;"></div>
				    <div id="loading4" style="display: none;"><table cellpadding=5 cellspacing=0 border=0><tr><td><?php echo $this->_tpl_vars['adm_setgen79']; ?>
</td><td><?php echo $this->_tpl_vars['loading_gif']; ?>
</td></tr></table></div>
				    <div id="loadme"></div>
				</td>
			    </tr>
			    <?php endif; ?>
			    <?php endif; ?>
			</table>
			<?php endif; ?>
<!-- END COMMENTS TABLE -->