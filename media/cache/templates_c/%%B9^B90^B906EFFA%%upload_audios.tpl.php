<?php /* Smarty version 2.6.26, created on 2009-11-10 15:40:06
         compiled from upload_audios.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'list_categ_all_audio', 'upload_audios.tpl', 28, false),array('insert', 'getfield', 'upload_audios.tpl', 45, false),)), $this); ?>
<!-- BEGIN UPLOAD PAGE STEPS TABLES -->
	    <?php if ($this->_tpl_vars['secondpage'] != 'second' && $_REQUEST['upload_final'] == ""): ?>
	    <table width="100%" cellpadding=5 cellspacing=0 border=0>
		<tr><td>
<!-- BEGIN UPLOAD PAGE STEP1 TABLE -->
		    <form name="vupload" action="" method="post" encType="multipart/form-data">
		    <table width="100%" cellpadding=10 cellspacing=0 border=0 id="vup_tbl">
			<tr>
			    <td valign="top">
				<fieldset>
				<legend><?php echo $this->_tpl_vars['up_step1txt']; ?>
</legend>
				<table width="100%" cellpadding=2 cellspacing=0 border=0>
				    <tr>
					<td width="20%" align="left"><?php echo $this->_tpl_vars['up_title']; ?>
</td><td><input type="text" class="ff" style="width: 280px;" name="vtitle" value="<?php echo $_REQUEST['vtitle']; ?>
"></td>
				    </tr>
				    <tr>
					<td align="left" valign="top"><?php echo $this->_tpl_vars['up_descr']; ?>
</td><td><textarea class="ff" rows="7" name="vdescr" style="width: 280px;"><?php echo $_REQUEST['vdescr']; ?>
</textarea></td>
				    </tr>
				    <tr>
					<td align="left"><?php echo $this->_tpl_vars['up_tags']; ?>
</td><td><input type="text" class="ff" style="width: 280px;" name="vtags" value="<?php echo $_REQUEST['vtags']; ?>
"></td>
				    </tr>
				    <tr>
					<td align="left" valign="top"><?php echo $this->_tpl_vars['up_categs']; ?>
</td>
					<td class="nopad">
					<?php if ($this->_tpl_vars['multi_categ_uploads'] != '0'): ?>
					    <table cellpadding=1 cellspacing=0 border=0>
						<tr>
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
						    <?php if ($this->_sections['i']['index'] % 1 == '0' && $this->_sections['i']['index'] > '0'): ?></tr><tr><?php endif; ?>
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
						    <td><?php echo $this->_tpl_vars['chinfo'][$this->_sections['i']['index']]['ch']; ?>
</td>
						    <?php endfor; endif; ?>
						</tr>
					    </table>
					<?php else: ?>
					    <table cellpadding=1 cellspacing=0 border=0>
                                                <tr>
                                                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'list_categ_all_audio', 'assign' => 'chinfo', 'vid' => $this->_tpl_vars['VID'])), $this); ?>

                                                    <td>
                                                        <select name="categlist" class="selbox">
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
                                                        <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'cname', 'field' => 'name', 'table' => 'categories', 'qfield' => 'cid', 'qvalue' => $this->_tpl_vars['chinfo'][$this->_sections['i']['index']]['id'])), $this); ?>

                                                        <option name="categlist[]" value="<?php echo $this->_tpl_vars['chinfo'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['cname']; ?>
</option>
                                                        <?php endfor; endif; ?>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </table>
					<?php endif; ?>
					</td>
				    </tr>
				</table>
				</fieldset>
				<table cellpadding=15 cellspacing=0>
				    <tr>
					<td>
					    <input type="submit" name="vnext" class="fb" value="<?php echo $this->_tpl_vars['up_btncontinue']; ?>
">&nbsp;&nbsp;
					    <input type="submit" name="vcancel" class="fb" value="<?php echo $this->_tpl_vars['up_btncancel']; ?>
">
					</td>
				    </tr>
				</table>
			    </td>
			    
			    <td width="70%" valign="top">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_upload.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			    </td>
		    	</tr>
		    </table>
		    </form>
		    </td>
<!-- END UPLOAD PAGE STEP1 TABLE -->    
		</tr>
		<tr>
		    <td></td>
		</tr>
	    </table>
	    
	    <?php else: ?>
<!-- BEGIN UPLOAD PAGE STEP2 TABLE -->	    
	    <table width="100%" cellpadding=5 cellspacing=0 border=0>
		<tr>
		    <td><?php echo $this->_tpl_vars['up_txt19']; ?>
</td>
		</tr>
		<tr><td>
		    <table width="100%" cellpadding=10 cellspacing=0 border=0 id="vup_tbl">
			<tr>
			    <td width="50%" valign="top">
			    <?php if ($this->_tpl_vars['UBR_embedded_upload_results'] == 1 || $this->_tpl_vars['UBR_opera_browser'] == 1 || $this->_tpl_vars['UBR_safari_browser'] == 1): ?>
                                <div id="upload_div" style="display:none;"><iframe name="upload_iframe" frameborder="0" width="800" height="200" scrolling="auto"></iframe></div>
                            <?php endif; ?>
                            <form name="form_upload" id="form_upload"<?php if ($this->_tpl_vars['UBR_embedded_upload_results'] == 1 || $this->_tpl_vars['UBR_opera_browser'] == 1 || $this->_tpl_vars['UBR_safari_browser'] == 1): ?> target="upload_iframe"<?php endif; ?> method="post" enctype="multipart/form-data" action="#">
				<fieldset>
				<legend><?php echo $this->_tpl_vars['up_step2txt']; ?>
</legend>
				<table width="100%" cellpadding=5 cellspacing=0 border=0>
				    <tr>
					<td width="15%" align="right"><?php echo $this->_tpl_vars['up_file']; ?>
</td>
					<td>
					    <div>
						<input type="hidden" name="upload_range" value="1">
						<noscript>
						    <input type="hidden" name="no_script" value="1">
						</noscript>
						<input type="hidden" name="vtags" value="<?php echo $_REQUEST['vtags']; ?>
">
						<input type="hidden" name="vtitle" value="<?php echo $_REQUEST['vtitle']; ?>
">
						<input type="hidden" name="vdescr" value="<?php echo $_REQUEST['vdescr']; ?>
">
						<input type="hidden" name="listch" value="<?php echo $this->_tpl_vars['listch']; ?>
">
						<input type="hidden" name="vpriv" value="<?php echo $_REQUEST['vpriv']; ?>
">
                                                <input type="hidden" name="vcomm" value="<?php echo $_REQUEST['vcomm']; ?>
">
                                                <input type="hidden" name="vcommrate" value="<?php echo $_REQUEST['vcommrate']; ?>
">
                                                <input type="hidden" name="vresp" value="<?php echo $_REQUEST['vresp']; ?>
">
                                                <input type="hidden" name="vrate" value="<?php echo $_REQUEST['vrate']; ?>
">
                                                <input type="hidden" name="vemb" value="<?php echo $_REQUEST['vemb']; ?>
">
                                                <input type="hidden" name="vbm" value="<?php echo $_REQUEST['vbm']; ?>
">
                                                <input type="hidden" name="rto" value="<?php echo $_GET['r']; ?>
">
						<div id="upload_slots">
						    <input type="file" class="ff" name="upfile_0" size="40" <?php if ($this->_tpl_vars['multi_upload_slots'] == '1'): ?>onChange="addUploadSlot(0)"<?php endif; ?> value="">
						</div>
					    </div>
					</td>
				    </tr>
				</table>    
			    </form>
				<table width="100%" cellpadding=5 cellspacing=0 border=0>
				    <tr>
					<!-- Start Progress Bar -->
					<td align="right" width="15%"></td>
					<td width="85%">
					    <div class="alert" id="ubr_alert"></div>
					    <div id="progress_bar" style="display:none;">
						<div class="bar1" id="upload_status_wrap" align="center">
						    <div class="bar2" id="upload_status"></div>
						</div>
						<br>
						<table class="data" cellpadding="5" cellspacing="1" border=0>
						    <tr>
							<td align="left"><?php echo $this->_tpl_vars['upbar_complete']; ?>
</td>
							<td align="center"><span id="percent">0%</span></td>
						    </tr>
						    <tr>
							<td><?php echo $this->_tpl_vars['upbar_files']; ?>
</td>
							<td align="center"><span id="uploaded_files">0</span> of <span id="total_uploads"></span></td>
						    </tr>
						    <tr>
							<td align="left"><?php echo $this->_tpl_vars['upbar_position']; ?>
</td>
							<td align="center"><span id="current">0</span> / <span id="total_kbytes"></span> KBytes</td>
						    </tr>
						    <tr>
							<td align="left"><?php echo $this->_tpl_vars['upbar_elapsed']; ?>
</td>
							<td align="center"><span id="time">0</span></td>
						    </tr>
						    <tr>
							<td align="left"><?php echo $this->_tpl_vars['upbar_remain']; ?>
</td>
							<td align="center"><span id="remain">0</span></td>
						    </tr>
						    <tr>
							<td align="left"><?php echo $this->_tpl_vars['upbar_speed']; ?>
</td>
							<td align="center"><span id="speed">0</span> KB/s.</td>
						    </tr>
						</table>
					    </div>
					</td>
					<!-- End Progres Bar -->
				    </tr>
				    
				    <tr>
					<td align="right">&nbsp;</td>
					<td>
					    <input type="button" class="fb" id="upload_button" name="upload_button" value="<?php echo $this->_tpl_vars['up_btnupload']; ?>
" onClick="linkUpload();">&nbsp;&nbsp;
					    <input type="button" class="fb" id="reset_button" name="reset_button" value="<?php echo $this->_tpl_vars['up_btncancel']; ?>
" onClick="resetForm();"> 
					</td>
				    </tr>
				</table>
				</fieldset>
			    </td>
			    
			    <td width="50%" valign="top">
				<fieldset>
				<legend><?php echo $this->_tpl_vars['up_stepinfo']; ?>
</legend>
				<table cellpadding=8 cellspacing=0 border=0>
				    <tr>
					<td>
					    <?php echo $this->_tpl_vars['up_txt21']; ?>

					    <?php echo $this->_tpl_vars['allowed_audio_formats']; ?>

					</td>
				    </tr>
				</table>
				</fieldset>
			    </td>
			</tr>
		    </table></td>
<!-- END UPLOAD PAGE STEP2 TABLE -->		    
		</tr>
		<tr>
		    <td></td>
		</tr>
	    </table>
	    <?php endif; ?>
<!-- END UPLOAD PAGE STEPS TABLES -->