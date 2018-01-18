<?php /* Smarty version 2.6.26, created on 2009-11-10 15:26:46
         compiled from administration/_inc/inc_previewfiles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'time_range', 'administration/_inc/inc_previewfiles.tpl', 22, false),array('insert', 'key_to_user_image', 'administration/_inc/inc_previewfiles.tpl', 23, false),array('insert', 'list_categ_all_audio', 'administration/_inc/inc_previewfiles.tpl', 65, false),array('insert', 'list_categ_all_image', 'administration/_inc/inc_previewfiles.tpl', 66, false),array('insert', 'list_categ_all_video', 'administration/_inc/inc_previewfiles.tpl', 67, false),array('insert', 'getfield', 'administration/_inc/inc_previewfiles.tpl', 174, false),array('modifier', 'spchar', 'administration/_inc/inc_previewfiles.tpl', 54, false),array('function', 'html_select_date', 'administration/_inc/inc_previewfiles.tpl', 215, false),)), $this); ?>
		    <table cellpadding=5 cellspacing=0 border=0 align=left width="100%">
				<tr>
				    <td align=center class="nopad">
				    <?php if ($this->_tpl_vars['show'] != 'yes'): ?>
					<div align="center">
					    <?php echo $this->_tpl_vars['adm_fileaccess']; ?>

					</div>
				    <?php else: ?>
					<?php if ($this->_tpl_vars['sbtn'] == 'alla' || $this->_tpl_vars['sbtn'] == 'adm_areq'): ?>
					<div>
					    <object width="320" height="20" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0">
						<param name="movie" value="<?php echo $this->_tpl_vars['base_url']; ?>
/modules/aPlayer/fmp3player.swf">
						<param name="menu" value="false">
						<param name="quality" value="high">
						<param name="bgcolor" value="#ffffff"> 
						<param name="flashvars" value="file=<?php echo $this->_tpl_vars['flvdo_url']; ?>
/user<?php echo $this->_tpl_vars['vuid']; ?>
/<?php echo $this->_tpl_vars['flvname']; ?>
&autostart=false">
						<embed src="<?php echo $this->_tpl_vars['base_url']; ?>
/modules/aPlayer/fmp3player.swf" width="300" height="20" menu="false" quality="high" bgcolor="#ffffff" flashvars="file=<?php echo $this->_tpl_vars['flvdo_url']; ?>
/user<?php echo $this->_tpl_vars['vuid']; ?>
/<?php echo $this->_tpl_vars['flvname']; ?>
&autostart=false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
					    </object>
					</div>
					<?php elseif ($this->_tpl_vars['sbtn'] == 'alli' || $this->_tpl_vars['sbtn'] == 'adm_ireq'): ?>
					<div>
                                    	    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'rtime', 'field' => 'addtime', 'IDFR' => 'vid', 'id' => $this->_tpl_vars['vidid'], 'tbl' => 'files_image')), $this); ?>

                                            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'key_to_user_image', 'assign' => 'owner', 'vkey' => $_REQUEST['id'])), $this); ?>

                                            <a href="<?php echo $this->_tpl_vars['pic_url']; ?>
/user<?php echo $this->_tpl_vars['vuid']; ?>
/<?php echo $this->_tpl_vars['iname']; ?>
" rel="lightbox" title="<?php echo $this->_tpl_vars['ftitle']; ?>
&lt;br&gt;<?php echo $this->_tpl_vars['descr']; ?>
&lt;br&gt;<?php echo $this->_tpl_vars['fileadded']; ?>
<?php echo $this->_tpl_vars['rtime']; ?>
<?php echo $this->_tpl_vars['fileaddedago']; ?>
&lt;br&gt;<?php echo $this->_tpl_vars['fileaddedby']; ?>
 &lt;a href=&quot;<?php echo $this->_tpl_vars['admin_url']; ?>
/members/<?php echo $this->_tpl_vars['vuid']; ?>
&quot;&gt;<?php echo $this->_tpl_vars['owner']; ?>
&lt;/a&gt;&lt;br&gt;&lt;br&gt;" onMouseOver="window.status=''; return true;">
                                        	<img width="320" height="240" src="<?php echo $this->_tpl_vars['tmb_url']; ?>
/user<?php echo $this->_tpl_vars['vuid']; ?>
/<?php echo $this->_tpl_vars['vidid']; ?>
v2.jpg" alt="<?php echo $this->_tpl_vars['ftitle']; ?>
" title="<?php echo $this->_tpl_vars['ftitle']; ?>
">
                                            </a>                                                                                                                                                               
                                        </div>
					<?php elseif ($this->_tpl_vars['sbtn'] == 'allv' || $this->_tpl_vars['sbtn'] == 'adm_vreq'): ?>
					<?php $this->assign('pwidth', 320); ?><?php $this->assign('pheight', 240); ?>
					<?php $this->assign('pfs', 'true'); ?>
					<div align="center">
                        		    <div id="vPlayer" class="br2">Macromedia Flash Player 9 is required to access this object!<br> To get the most recent version of Flash player available for your browser, visit the <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" target="_blank">Adobe Flash download page</a>.</div>
                            		    <script type="text/javascript">
	                                    // <![CDATA[
		                                var so = new SWFObject('<?php echo $this->_tpl_vars['base_url']; ?>
/modules/vPlayer/vPlayer.swf?f=<?php echo $this->_tpl_vars['base_url']; ?>
/modules/vPlayer/vPlayercfg.php?aid=<?php echo $_REQUEST['id']; ?>
', 'main', '<?php echo $this->_tpl_vars['pwidth']; ?>
', '<?php echo $this->_tpl_vars['pheight']; ?>
', '9', '<?php echo $this->_tpl_vars['bgc']; ?>
');
		                                so.addParam('allowfullscreen','<?php echo $this->_tpl_vars['pfs']; ?>
');
		                                so.addParam('allowscriptaccess','always');
		                                so.addParam('quality','high');
		                                so.addParam('bgcolor','<?php echo $this->_tpl_vars['bgc']; ?>
');
		                                so.write("vPlayer");
	                                    // ]]>
		                            </script>
		                    	    </div>
					</div>
					
					<?php endif; ?>
					<div class="pt10">
					<?php if ($this->_tpl_vars['sbtn'] == 'alla' || $this->_tpl_vars['sbtn'] == 'adm_areq'): ?><form id="admin_asave"><?php elseif ($this->_tpl_vars['sbtn'] == 'alli' || $this->_tpl_vars['sbtn'] == 'adm_ireq'): ?><form id="admin_isave"><?php elseif ($this->_tpl_vars['sbtn'] == 'allv' || $this->_tpl_vars['sbtn'] == 'adm_vreq'): ?><form id="admin_vsave"><?php endif; ?>
					    <table cellpadding=3 cellspacing=1 border=0>
						<tr>
						    <td align="left" width="30%"><?php echo $this->_tpl_vars['myfiles_edittitle']; ?>
 </td><td align=left><input type="text" class="ff width175" name="vtitle" value="<?php if ($_REQUEST['vtitle'] == ""): ?><?php echo $this->_tpl_vars['ftitle']; ?>
<?php else: ?><?php echo $_REQUEST['vtitle']; ?>
<?php endif; ?>"></td>
						</tr>
						<tr>
						    <td align="left" valign="top"><?php echo $this->_tpl_vars['myfiles_editdescr']; ?>
 </td><td align=left><textarea name="vdescr" rows="5" class="ff width175"><?php if ($_REQUEST['vdescr'] == ""): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['descr'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
<?php else: ?><?php echo $_REQUEST['vdescr']; ?>
<?php endif; ?></textarea></td>
						</tr>
						<tr>
						    <td align="left"><?php echo $this->_tpl_vars['myfiles_edittags']; ?>
 </td><td align=left><input type="text" class="ff width175" name="vtags" value="<?php if ($_REQUEST['vtags'] == ""): ?><?php echo $this->_tpl_vars['tags']; ?>
<?php else: ?><?php echo $_REQUEST['vtags']; ?>
<?php endif; ?>"></td>
						</tr>
						<tr>
						    <td align="left" valign=top><?php echo $this->_tpl_vars['myfiles_editcateg']; ?>
 </td>
						    <td>
							<table cellpadding=0 cellspacing=0 border=0>
							    <tr>
							    <?php if ($_REQUEST['categlist'] == ""): ?>
								<?php if ($this->_tpl_vars['sbtn'] == 'alla' || $this->_tpl_vars['sbtn'] == 'adm_areq'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'list_categ_all_audio', 'assign' => 'chinfo', 'vid' => $this->_tpl_vars['vidid'])), $this); ?>

								<?php elseif ($this->_tpl_vars['sbtn'] == 'alli' || $this->_tpl_vars['sbtn'] == 'adm_ireq'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'list_categ_all_image', 'assign' => 'chinfo', 'vid' => $this->_tpl_vars['vidid'])), $this); ?>

								<?php elseif ($this->_tpl_vars['sbtn'] == 'allv' || $this->_tpl_vars['sbtn'] == 'adm_vreq'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'list_categ_all_video', 'assign' => 'chinfo', 'vid' => $this->_tpl_vars['vidid'])), $this); ?>

								<?php endif; ?>
								<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['chinfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
								<?php if ($this->_sections['i']['index'] % 1 == '0' && $this->_sections['i']['index'] > '0'): ?></tr><tr><?php endif; ?>
								    <td width="5%">
								    <?php $this->assign('status', ""); ?>
								    <?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['catid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<?php if ($this->_tpl_vars['catid'][$this->_sections['j']['index']] == $this->_tpl_vars['chinfo'][$this->_sections['i']['index']]['id']): ?><?php $this->assign('status', 'checked'); ?><?php endif; ?>
								    <?php endfor; endif; ?>
								    <input type=checkbox name=categlist[] value="<?php echo $this->_tpl_vars['chinfo'][$this->_sections['i']['index']]['id']; ?>
" <?php echo $this->_tpl_vars['status']; ?>
>
								    </td>
								    <td align=left><?php echo $this->_tpl_vars['chinfo'][$this->_sections['i']['index']]['ch']; ?>

								<?php endfor; endif; ?>
								    </td>
							    <?php else: ?>
								<?php if ($this->_tpl_vars['sbtn'] == 'alla' || $this->_tpl_vars['sbtn'] == 'adm_areq'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'list_categ_all_audio', 'assign' => 'chinfo', 'vid' => $this->_tpl_vars['vidid'])), $this); ?>

								<?php elseif ($this->_tpl_vars['sbtn'] == 'alli' || $this->_tpl_vars['sbtn'] == 'adm_ireq'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'list_categ_all_image', 'assign' => 'chinfo', 'vid' => $this->_tpl_vars['vidid'])), $this); ?>

								<?php elseif ($this->_tpl_vars['sbtn'] == 'allv' || $this->_tpl_vars['sbtn'] == 'adm_vreq'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'list_categ_all_video', 'assign' => 'chinfo', 'vid' => $this->_tpl_vars['vidid'])), $this); ?>

								<?php endif; ?>
								<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'list_categ_all_audio', 'assign' => 'chinfo', 'vid' => $this->_tpl_vars['VID'])), $this); ?>

								<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['chinfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
								<?php if ($this->_sections['i']['index'] % 4 == '0' && $this->_sections['i']['index'] > '0'): ?></tr><tr><?php endif; ?>
							    <td width="5%">
								<input type="checkbox" name="categlist[]" value="<?php echo $this->_tpl_vars['chinfo'][$this->_sections['i']['index']]['id']; ?>
" <?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['vcategs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php if ($this->_tpl_vars['vcategs'][$this->_sections['j']['index']] == $this->_tpl_vars['chinfo'][$this->_sections['i']['index']]['id']): ?>checked<?php else: ?><?php endif; ?><?php endfor; endif; ?>>
							    </td>
							    <td align=left><?php echo $this->_tpl_vars['chinfo'][$this->_sections['i']['index']]['ch']; ?>
</td>
							    <?php endfor; endif; ?>
							    <?php endif; ?>
							    </tr>
							</table>
						    </td>
						    </tr>
						    <tr>
							<td align="left" class="dottbt"><?php echo $this->_tpl_vars['myfiles_editprivacy']; ?>
</td>
							<td align="left" class="dottbt">
							    <table cellpadding=0 cellspacing=0 border=0>
								<tr>
								    <td><input type="radio" name="type" value="public" <?php if ($this->_tpl_vars['is_type'] == 'public'): ?>checked<?php endif; ?>></td>
								    <td valign=bottom><?php echo $this->_tpl_vars['filepublic']; ?>
</td>
								    <td class="pl10"></td>
								    <td><input type="radio" name="type" value="private" <?php if ($this->_tpl_vars['is_type'] != 'public'): ?>checked<?php endif; ?>></td>
								    <td valign=bottom><?php echo $this->_tpl_vars['fileprivate']; ?>
</td>
								</tr>
							    </table>
							</td>
						    </tr>
						    <tr>
							<td align="left"><?php echo $this->_tpl_vars['adm_fileapproved']; ?>
</td>
							<td align="left">
							    <table cellpadding=0 cellspacing=0 border=0>
								<tr>
								    <td><input type="radio" name="appr" value="1" <?php if ($this->_tpl_vars['is_active'] == '1'): ?>checked<?php endif; ?>></td>
								    <td valign=bottom ><?php echo $this->_tpl_vars['adm_fileyes']; ?>
</td>
								    <td class="pl10"></td>
								    <td><input type="radio" name="appr" value="0" <?php if ($this->_tpl_vars['is_active'] != '1'): ?>checked<?php endif; ?>></td>
								    <td valign=bottom><?php echo $this->_tpl_vars['adm_fileno']; ?>
</td>
								</tr>
							    </table>
							</td>
						    </tr>
						    <tr>
							<td align="left"><?php echo $this->_tpl_vars['adm_filefeatured']; ?>
</td>
							<td align="left">
							    <table cellpadding=0 cellspacing=0 border=0>
								<tr>
								    <td><input type="radio" name="feat" value="yes" <?php if ($this->_tpl_vars['is_feat'] == 'yes'): ?>checked<?php endif; ?>></td>
								    <td valign=bottom><?php echo $this->_tpl_vars['adm_fileyes']; ?>
</td>
								    <td class="pl10"></td>
								    <td><input type="radio" name="feat" value="no" <?php if ($this->_tpl_vars['is_feat'] != 'yes'): ?>checked<?php endif; ?>></td>
								    <td valign=bottom><?php echo $this->_tpl_vars['adm_fileno']; ?>
</td>
								</tr>
							    </table>
							</td>
						    </tr>
						    <?php if ($this->_tpl_vars['sbtn'] == 'allv' || $this->_tpl_vars['sbtn'] == 'adm_vreq'): ?>
						    <tr>
                                                        <td align=left><?php echo $this->_tpl_vars['adm_filerecomm']; ?>
</td>
                                                        <td align=left>
                                                            <table cellpadding=0 cellspacing=0 border=0>
                                                                <tr>
                                                                    <td><input type="radio" name="rec" value="yes" <?php if ($this->_tpl_vars['is_rec'] == 'yes'): ?>checked<?php endif; ?>></td>
                                                                    <td valign=bottom><?php echo $this->_tpl_vars['adm_fileyes']; ?>
</td>
                                                                    <td class="pl10"></td>
                                                                    <td><input type="radio" name="rec" value="no" <?php if ($this->_tpl_vars['is_rec'] != 'yes'): ?>checked<?php endif; ?>></td>
                                                                    <td valign=bottom><?php echo $this->_tpl_vars['adm_fileno']; ?>
</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
						    <?php endif; ?>
						    <tr>
							<td align="left"><?php echo $this->_tpl_vars['adm_fileinapp']; ?>
</td>
							<td align="left">
							    <table cellpadding=0 cellspacing=0 border=0>
								<tr>
								    <td><input type="radio" name="inapp" value="yes" <?php if ($this->_tpl_vars['is_inapp'] == 'yes'): ?>checked<?php endif; ?>></td>
								    <td valign=bottom><?php echo $this->_tpl_vars['adm_fileyes']; ?>
</td>
								    <td class="pl10"></td>
								    <td><input type="radio" name="inapp" value="no" <?php if ($this->_tpl_vars['is_inapp'] != 'yes'): ?>checked<?php endif; ?>></td>
								    <td valign=bottom><?php echo $this->_tpl_vars['adm_fileno']; ?>
</td>
								</tr>
							    </table>
							</td>
						    </tr>
						    <tr>
                                                        <td align="left" class="dottbt"><?php if ($this->_tpl_vars['sbtn'] == 'alla' || $this->_tpl_vars['sbtn'] == 'adm_areq'): ?><?php echo $this->_tpl_vars['adm_setauditions']; ?>
<?php else: ?><?php echo $this->_tpl_vars['adm_setviews']; ?>
<?php endif; ?></td>
                                                        <td align="left" class="dottbt">
                                                    	    <?php if ($this->_tpl_vars['sbtn'] == 'alla' || $this->_tpl_vars['sbtn'] == 'adm_areq'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'views', 'field' => 'views', 'table' => 'files_audio', 'qfield' => 'vkey', 'qvalue' => $_REQUEST['id'])), $this); ?>

                                                    	    <?php elseif ($this->_tpl_vars['sbtn'] == 'alli' || $this->_tpl_vars['sbtn'] == 'adm_ireq'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'views', 'field' => 'views', 'table' => 'files_image', 'qfield' => 'vkey', 'qvalue' => $_REQUEST['id'])), $this); ?>

                                                    	    <?php elseif ($this->_tpl_vars['sbtn'] == 'allv' || $this->_tpl_vars['sbtn'] == 'adm_vreq'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'views', 'field' => 'views', 'table' => 'files_video', 'qfield' => 'vkey', 'qvalue' => $_REQUEST['id'])), $this); ?>

                                                    	    <?php endif; ?>
                                                        <input type="text" name="views" class="ff" value="<?php echo $this->_tpl_vars['views']; ?>
" size="10"><?php echo $this->_tpl_vars['adm_setunit1']; ?>
</td>
                                                    </tr>
						    <tr>
                                                        <td align="left"><?php echo $this->_tpl_vars['adm_setfav']; ?>
</td>
                                                        <td align="left">
                                                    	    <?php if ($this->_tpl_vars['sbtn'] == 'alla' || $this->_tpl_vars['sbtn'] == 'adm_areq'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'fav', 'field' => 'vfav', 'table' => 'files_audio', 'qfield' => 'vkey', 'qvalue' => $_REQUEST['id'])), $this); ?>

                                                    	    <?php elseif ($this->_tpl_vars['sbtn'] == 'alli' || $this->_tpl_vars['sbtn'] == 'adm_ireq'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'fav', 'field' => 'vfav', 'table' => 'files_image', 'qfield' => 'vkey', 'qvalue' => $_REQUEST['id'])), $this); ?>

                                                    	    <?php elseif ($this->_tpl_vars['sbtn'] == 'allv' || $this->_tpl_vars['sbtn'] == 'adm_vreq'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'fav', 'field' => 'vfav', 'table' => 'files_video', 'qfield' => 'vkey', 'qvalue' => $_REQUEST['id'])), $this); ?>

                                                    	    <?php endif; ?>
                                                        <input type="text" name="favs" class="ff" value="<?php echo $this->_tpl_vars['fav']; ?>
" size="10"><?php echo $this->_tpl_vars['adm_setunit1']; ?>
</td>
                                                    </tr>
                                                    <?php if ($this->_tpl_vars['btn'] != 'adm_image'): ?>
						    <tr>
                                                        <td align="left"><?php echo $this->_tpl_vars['adm_setdur']; ?>
</td>
                                                        <td align="left">
                                                    	    <?php if ($this->_tpl_vars['sbtn'] == 'alla' || $this->_tpl_vars['sbtn'] == 'adm_areq'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'dur', 'field' => 'vduration', 'table' => 'files_audio', 'qfield' => 'vkey', 'qvalue' => $_REQUEST['id'])), $this); ?>

                                                    	    <?php elseif ($this->_tpl_vars['sbtn'] == 'alli' || $this->_tpl_vars['sbtn'] == 'adm_ireq'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'dur', 'field' => 'vduration', 'table' => 'files_image', 'qfield' => 'vkey', 'qvalue' => $_REQUEST['id'])), $this); ?>

                                                    	    <?php elseif ($this->_tpl_vars['sbtn'] == 'allv' || $this->_tpl_vars['sbtn'] == 'adm_vreq'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'dur', 'field' => 'vduration', 'table' => 'files_video', 'qfield' => 'vkey', 'qvalue' => $_REQUEST['id'])), $this); ?>

                                                    	    <?php endif; ?>
                                                        <input type="text" name="duration" class="ff" value="<?php echo $this->_tpl_vars['dur']; ?>
" size="10"><?php echo $this->_tpl_vars['adm_setunit2']; ?>
</td>
                                                    </tr>
                                                    <?php endif; ?>
						    <tr>
                                                        <td align="left"><?php echo $this->_tpl_vars['adm_setdate']; ?>
</td>
                                                        <td align="left">
                                                    			<?php if ($this->_tpl_vars['sbtn'] == 'alla' || $this->_tpl_vars['sbtn'] == 'adm_areq'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'date', 'field' => 'adddate', 'table' => 'files_audio', 'qfield' => 'vkey', 'qvalue' => $_REQUEST['id'])), $this); ?>

                                                    			<?php elseif ($this->_tpl_vars['sbtn'] == 'alli' || $this->_tpl_vars['sbtn'] == 'adm_ireq'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'date', 'field' => 'adddate', 'table' => 'files_image', 'qfield' => 'vkey', 'qvalue' => $_REQUEST['id'])), $this); ?>

                                                    			<?php elseif ($this->_tpl_vars['sbtn'] == 'allv' || $this->_tpl_vars['sbtn'] == 'adm_vreq'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'date', 'field' => 'adddate', 'table' => 'files_video', 'qfield' => 'vkey', 'qvalue' => $_REQUEST['id'])), $this); ?>

                                                    			<?php endif; ?>
                                                    	    <table cellpadding=0 cellspacing=0 border=0>
                                                    		<tr>
                                                    		<?php if ($this->_tpl_vars['date_selection'] == 'css'): ?>
                                                    		    <td>
                                                    			<input type="text" readonly name="date" class="ff" value="<?php echo $this->_tpl_vars['date']; ?>
" size="10">
                                                    		    </td>
                                                    		    <td valign="top">&nbsp;<img src="<?php echo $this->_tpl_vars['img_url']; ?>
/calendar/cal.gif" width="16" height="16" border="0" alt="<?php echo $this->_tpl_vars['adm_setdatetxt']; ?>
" title="<?php echo $this->_tpl_vars['adm_setdatetxt']; ?>
" onclick="displayCalendar(document.forms[4].date,'yyyy-mm-dd',this);"></td>
                                                    		<?php else: ?>
                                                    		    <td><?php echo smarty_function_html_select_date(array('prefix' => 'fd_','time' => $this->_tpl_vars['date'],'start_year' => "-109",'end_year' => "+1",'display_days' => true,'all_extra' => 'class="selbox"','month_extra' => 'style="width: 70px;"','day_extra' => 'style="width: 45px;"','year_extra' => 'style="width: 60px;"'), $this);?>
</td>
                                                    		<?php endif; ?>
                                                    		</tr>
                                                    	    </table>
                                                    	</td>
                                                    </tr>
                                                    <?php if ($this->_tpl_vars['reason'] != ""): ?>
                                                    <tr>
                                                        <td align=left class="dottbt"><span class="gr"><?php echo $this->_tpl_vars['adm_reqtext']; ?>
</span></td>
                                                        <td align=left class="dottbt"><span class="gr"><?php echo $this->_tpl_vars['reason']; ?>
</span></td>
                                                    </tr>
                                                        <?php if ($this->_tpl_vars['solved'] == '0'): ?>
                                                    <tr>
                                                        <td align=left><span class="gr"><?php echo $this->_tpl_vars['adm_reqclose']; ?>
</span></td>
                                                        <td align=left>
                                                        <?php if ($_REQUEST['show'] == 'featured'): ?>
                                                            <input type="checkbox" name="solve" value="1">
                                                        <?php elseif ($_REQUEST['show'] == 'inappropriate'): ?>
                                                            <input type="checkbox" name="solvei" value="1">
                                                        <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
						    <tr>
							<td align="left" colspan=2 class="dottbt">
							    <script language="javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/ajaxresponder.js" type="text/javascript"></script>
							    <input type="hidden" name="ldivx" id="ldivx" value="">
							    <input type="hidden" name="thisDiv" id="thisDiv" value="">
							    <table cellpadding=2 cellspacing=0 border=0 width="100%">
								<tr>
								    <td width="10%" align="left" valign="top">
									<input type="hidden" name="key" value="<?php echo $_REQUEST['id']; ?>
">
									<?php if ($this->_tpl_vars['sbtn'] == 'alla' || $this->_tpl_vars['sbtn'] == 'adm_areq'): ?><input type="button" name="vsave" class="fb" value="<?php echo $this->_tpl_vars['adm_btnsave']; ?>
" onclick="document.getElementById('thisDiv').value = 'yes'; ldiv('asavea'); asaveit();">
									<?php elseif ($this->_tpl_vars['sbtn'] == 'alli' || $this->_tpl_vars['sbtn'] == 'adm_ireq'): ?><input type="button" name="vsave" class="fb" value="<?php echo $this->_tpl_vars['adm_btnsave']; ?>
" onclick="document.getElementById('thisDiv').value = 'yes'; ldiv('isavei'); isaveit();">
									<?php elseif ($this->_tpl_vars['sbtn'] == 'allv' || $this->_tpl_vars['sbtn'] == 'adm_vreq'): ?><input type="button" name="vsave" class="fb" value="<?php echo $this->_tpl_vars['adm_btnsave']; ?>
" onclick="document.getElementById('thisDiv').value = 'yes'; ldiv('vsavev'); vsaveit();">
									<?php endif; ?>
								    </td>
								    <td width="90%" align="left" class="p5">
									<div id="loading_fd" style="display: none;">
									    <table cellpadding=2 cellspacing=0 border=0>
										<tr><td><?php echo $this->_tpl_vars['adm_setgen79']; ?>
</td><td><?php echo $this->_tpl_vars['loading_gif']; ?>
</td></tr>
									    </table>
									</div>
									<?php if ($this->_tpl_vars['sbtn'] == 'alla' || $this->_tpl_vars['sbtn'] == 'adm_areq'): ?><div id="asave"></div>
									<?php elseif ($this->_tpl_vars['sbtn'] == 'alli' || $this->_tpl_vars['sbtn'] == 'adm_ireq'): ?><div id="isave"></div>
									<?php elseif ($this->_tpl_vars['sbtn'] == 'allv' || $this->_tpl_vars['sbtn'] == 'adm_vreq'): ?><div id="vsave"></div>
									<?php endif; ?>
								    </td>
								</tr>
							    </table>
							</td>
						    </tr>
						</table>
					    </form><br>
					    <?php if ($this->_tpl_vars['sbtn'] == 'allv' || $this->_tpl_vars['sbtn'] == 'adm_vreq'): ?>
					    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/_inc/inc_thumbs.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					    <br>
					    <?php endif; ?>
					    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/ratings.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					    </div>
					</td>
					<?php endif; ?>
				    </tr>
				    </table>
			        </td>
			    </tr>
			</table>