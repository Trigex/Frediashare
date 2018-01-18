<?php /* Smarty version 2.6.26, created on 2009-11-10 15:42:49
         compiled from _inc/chan/_inc/inc_cthemelayout.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'get_video_playlists', '_inc/chan/_inc/inc_cthemelayout.tpl', 58, false),array('insert', 'get_image_playlists', '_inc/chan/_inc/inc_cthemelayout.tpl', 59, false),array('insert', 'get_audio_playlists', '_inc/chan/_inc/inc_cthemelayout.tpl', 60, false),array('insert', 'keys_to_array', '_inc/chan/_inc/inc_cthemelayout.tpl', 61, false),array('modifier', 'spchar', '_inc/chan/_inc/inc_cthemelayout.tpl', 68, false),)), $this); ?>
    		<table cellpadding="2" cellspacing="0" border=0 align="left">
    		    <tr>
    			<td width="1%"><input type="checkbox" <?php if ($this->_tpl_vars['tinfo'][0]['th_featvid'] == '1'): ?>checked<?php endif; ?> name="th_featvid" id="th_featvid" onclick="sh_featvid();"></td>
    			<td>
    			    <select name="th_featsrc" id="th_featsrc" class="selbox" <?php if ($this->_tpl_vars['tinfo'][0]['th_featvid'] == '0'): ?>disabled<?php endif; ?>>
    				<?php if ($this->_tpl_vars['enable_videos'] == '1'): ?><option value="v" <?php if ($this->_tpl_vars['tinfo'][0]['th_featvid_type'] == 'v'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['pr_chinfop53']; ?>
</option><?php endif; ?>
    				<?php if ($this->_tpl_vars['enable_images'] == '1'): ?><option value="i" <?php if ($this->_tpl_vars['tinfo'][0]['th_featvid_type'] == 'i'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['pr_chinfop531']; ?>
</option><?php endif; ?>
    				<?php if ($this->_tpl_vars['enable_audio'] == '1'): ?><option value="a" <?php if ($this->_tpl_vars['tinfo'][0]['th_featvid_type'] == 'a'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['pr_chinfop532']; ?>
</option><?php endif; ?>
    			    </select>
    			</td>
    		    </tr>
    		    <tr>
    			<td colspan="2" class="pl20">
    			    <table cellpadding="2" cellspacing="0" border=0>
    				<tr>
    				    <td valign="top" width="1"><input type="radio" name="th_featvidlatest" <?php if ($this->_tpl_vars['tinfo'][0]['th_featvid_file'] == 'last'): ?>checked<?php endif; ?> <?php if ($this->_tpl_vars['tinfo'][0]['th_featvid'] == '0'): ?>disabled<?php endif; ?> value="vl" onclick="HideContent('vurl');"></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfop54']; ?>
</td>
    				    <td valign="top" width="1"><input type="radio" name="th_featvidlatest" <?php if ($this->_tpl_vars['tinfo'][0]['th_featvid_file'] != 'last'): ?>checked<?php endif; ?> <?php if ($this->_tpl_vars['tinfo'][0]['th_featvid'] == '0'): ?>disabled<?php endif; ?> value="vu" onclick="ShowContent('vurl');"></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfop55']; ?>
</td>
    				</tr>
    			    </table>
    			    <table cellpadding="2" cellspacing="0" border=0>
    				<tr>
    				    <td>
    				    <div id="vurl" <?php if ($this->_tpl_vars['tinfo'][0]['th_featvid_file'] != 'last'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>>
    					<table cellpadding="2" cellspacing="0">
    					    <tr><td><?php echo $this->_tpl_vars['pr_chinfoc1']; ?>
</td><td><input type="text" name="th_featvidurl" class="ff" size="30" value="<?php echo $this->_tpl_vars['tinfo'][0]['th_featvid_file']; ?>
"></td></tr>
    					</table>
    				    </div>
    				    </td>
    				</tr>
    			    </table>
    			</td>
    		    </tr>
    		    <tr>
    			<td width="1%"><input type="checkbox" <?php if ($this->_tpl_vars['tinfo'][0]['th_subs'] == '1'): ?>checked<?php endif; ?> name="th_subsbox" id="th_subsbox" onclick="sh_subsbox();"></td><td><?php echo $this->_tpl_vars['pr_chinfop56']; ?>
</td>
    		    </tr>
    		    <tr>
    			<td colspan="2" class="pl20">
    			    <table cellpadding="2" cellspacing="0" border=0>
    				<tr>
    				    <td valign="top" width="1"><input type="radio" name="th_subspos" value="left" id="th_subsposleft" <?php if ($this->_tpl_vars['tinfo'][0]['th_subs'] == '0'): ?>disabled<?php endif; ?> <?php if ($this->_tpl_vars['tinfo'][0]['th_subspos'] == 'left'): ?>checked<?php endif; ?> onclick="ShowContent('div_subsdivleft'); HideContent('div_subsdivright');"></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfop57']; ?>
</td>
    				    <td valign="top" width="1"><input type="radio" name="th_subspos" value="right" id="th_subsposright" <?php if ($this->_tpl_vars['tinfo'][0]['th_subs'] == '0'): ?>disabled<?php endif; ?> <?php if ($this->_tpl_vars['tinfo'][0]['th_subspos'] == 'right'): ?>checked<?php endif; ?> onclick="HideContent('div_subsdivleft'); ShowContent('div_subsdivright');"></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfop58']; ?>
</td>
    				</tr>
    			    </table>
    			</td>
    		    </tr>
    		    <tr>
    			<td width="1%"><input type="checkbox" name="th_playlist" <?php if ($this->_tpl_vars['tinfo'][0]['th_plist'] == '1'): ?>checked<?php endif; ?> onclick="sh_playlistbox(); ReverseContentDisplay('my_plists');"></td><td><?php echo $this->_tpl_vars['pr_chinfop60']; ?>
</td>
    		    </tr>
    		    <tr>
    			<td colspan="2" class="nopad">
    			<div id="my_plists" style="display: <?php if ($this->_tpl_vars['tinfo'][0]['th_plist'] == '1'): ?>block;<?php else: ?>none;<?php endif; ?>">
    			    <table cellpadding="2" cellspacing="0" border=0 width="100%">
    				<tr>
    				    <td class="pl5"><?php echo $this->_tpl_vars['pr_chinfom60']; ?>
</td>
    				</tr>
    				<tr>
    				    <td class="nopad pt5">
    					<?php if ($this->_tpl_vars['enable_videos'] == '1'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_video_playlists', 'assign' => 'vpl')), $this); ?>
<?php endif; ?>
    					<?php if ($this->_tpl_vars['enable_images'] == '1'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_image_playlists', 'assign' => 'ipl')), $this); ?>
<?php endif; ?>
    					<?php if ($this->_tpl_vars['enable_audio'] == '1'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_audio_playlists', 'assign' => 'apl')), $this); ?>
<?php endif; ?>
    					<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'keys_to_array', 'assign' => 'ch_pl', 'arr' => $this->_tpl_vars['tinfo'][0]['th_plistchan'])), $this); ?>

    					<?php if ($this->_tpl_vars['enable_videos'] == '1' && $this->_tpl_vars['vpl'][0]['vkey'] != ""): ?>
    					<fieldset><legend class="f10"><a href="javascript:void(0)"><?php echo $this->_tpl_vars['plist_txt4']; ?>
</a></legend>
    					<table cellpadding="2" cellspacing="0" border=0 width="100%">
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
    						<td width="1%"><input type="checkbox" name="vpl[]" value="<?php echo $this->_tpl_vars['vpl'][$this->_sections['i']['index']]['vkey']; ?>
" <?php unset($this->_sections['x']);
$this->_sections['x']['name'] = 'x';
$this->_sections['x']['loop'] = is_array($_loop=$this->_tpl_vars['ch_pl']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['x']['show'] = true;
$this->_sections['x']['max'] = $this->_sections['x']['loop'];
$this->_sections['x']['step'] = 1;
$this->_sections['x']['start'] = $this->_sections['x']['step'] > 0 ? 0 : $this->_sections['x']['loop']-1;
if ($this->_sections['x']['show']) {
    $this->_sections['x']['total'] = $this->_sections['x']['loop'];
    if ($this->_sections['x']['total'] == 0)
        $this->_sections['x']['show'] = false;
} else
    $this->_sections['x']['total'] = 0;
if ($this->_sections['x']['show']):

            for ($this->_sections['x']['index'] = $this->_sections['x']['start'], $this->_sections['x']['iteration'] = 1;
                 $this->_sections['x']['iteration'] <= $this->_sections['x']['total'];
                 $this->_sections['x']['index'] += $this->_sections['x']['step'], $this->_sections['x']['iteration']++):
$this->_sections['x']['rownum'] = $this->_sections['x']['iteration'];
$this->_sections['x']['index_prev'] = $this->_sections['x']['index'] - $this->_sections['x']['step'];
$this->_sections['x']['index_next'] = $this->_sections['x']['index'] + $this->_sections['x']['step'];
$this->_sections['x']['first']      = ($this->_sections['x']['iteration'] == 1);
$this->_sections['x']['last']       = ($this->_sections['x']['iteration'] == $this->_sections['x']['total']);
?><?php if ($this->_tpl_vars['vpl'][$this->_sections['i']['index']]['vkey'] == $this->_tpl_vars['ch_pl'][$this->_sections['x']['index']]): ?>checked<?php endif; ?><?php endfor; endif; ?>></td>
    						<td align="left" width="99%"><?php echo ((is_array($_tmp=$this->_tpl_vars['vpl'][$this->_sections['i']['index']]['pname'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</td>
    					    </tr>
    					<?php endfor; endif; ?>
    					</table>
    					</fieldset>
    					<?php endif; ?>

    					<?php if ($this->_tpl_vars['enable_images'] == '1' && $this->_tpl_vars['ipl'][0]['vkey'] != ""): ?>
    					<fieldset><legend class="f10"><a href="javascript:void(0)"><?php echo $this->_tpl_vars['plist_txt3']; ?>
</a></legend>
    					<table cellpadding="2" cellspacing="0" border=0 width="100%">
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
    						<td width="1%"><input type="checkbox" name="ipl[]" value="<?php echo $this->_tpl_vars['ipl'][$this->_sections['i']['index']]['vkey']; ?>
" <?php unset($this->_sections['x']);
$this->_sections['x']['name'] = 'x';
$this->_sections['x']['loop'] = is_array($_loop=$this->_tpl_vars['ch_pl']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['x']['show'] = true;
$this->_sections['x']['max'] = $this->_sections['x']['loop'];
$this->_sections['x']['step'] = 1;
$this->_sections['x']['start'] = $this->_sections['x']['step'] > 0 ? 0 : $this->_sections['x']['loop']-1;
if ($this->_sections['x']['show']) {
    $this->_sections['x']['total'] = $this->_sections['x']['loop'];
    if ($this->_sections['x']['total'] == 0)
        $this->_sections['x']['show'] = false;
} else
    $this->_sections['x']['total'] = 0;
if ($this->_sections['x']['show']):

            for ($this->_sections['x']['index'] = $this->_sections['x']['start'], $this->_sections['x']['iteration'] = 1;
                 $this->_sections['x']['iteration'] <= $this->_sections['x']['total'];
                 $this->_sections['x']['index'] += $this->_sections['x']['step'], $this->_sections['x']['iteration']++):
$this->_sections['x']['rownum'] = $this->_sections['x']['iteration'];
$this->_sections['x']['index_prev'] = $this->_sections['x']['index'] - $this->_sections['x']['step'];
$this->_sections['x']['index_next'] = $this->_sections['x']['index'] + $this->_sections['x']['step'];
$this->_sections['x']['first']      = ($this->_sections['x']['iteration'] == 1);
$this->_sections['x']['last']       = ($this->_sections['x']['iteration'] == $this->_sections['x']['total']);
?><?php if ($this->_tpl_vars['ipl'][$this->_sections['i']['index']]['vkey'] == $this->_tpl_vars['ch_pl'][$this->_sections['x']['index']]): ?>checked<?php endif; ?><?php endfor; endif; ?>></td>
    						<td align="left" width="99%"><?php echo ((is_array($_tmp=$this->_tpl_vars['ipl'][$this->_sections['i']['index']]['pname'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</td>
    					    </tr>
    					<?php endfor; endif; ?>
    					</table>
    					</fieldset>
    					<?php endif; ?>

    					<?php if ($this->_tpl_vars['enable_audio'] == '1' && $this->_tpl_vars['apl'][0]['vkey'] != ""): ?>
    					<fieldset><legend class="f10"><a href="javascript:void(0)"><?php echo $this->_tpl_vars['plist_txt2']; ?>
</a></legend>
    					<table cellpadding="2" cellspacing="0" border=0 width="100%">
    					<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['apl']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    						<td width="1%"><input type="checkbox" name="apl[]" value="<?php echo $this->_tpl_vars['apl'][$this->_sections['i']['index']]['vkey']; ?>
" <?php unset($this->_sections['x']);
$this->_sections['x']['name'] = 'x';
$this->_sections['x']['loop'] = is_array($_loop=$this->_tpl_vars['ch_pl']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['x']['show'] = true;
$this->_sections['x']['max'] = $this->_sections['x']['loop'];
$this->_sections['x']['step'] = 1;
$this->_sections['x']['start'] = $this->_sections['x']['step'] > 0 ? 0 : $this->_sections['x']['loop']-1;
if ($this->_sections['x']['show']) {
    $this->_sections['x']['total'] = $this->_sections['x']['loop'];
    if ($this->_sections['x']['total'] == 0)
        $this->_sections['x']['show'] = false;
} else
    $this->_sections['x']['total'] = 0;
if ($this->_sections['x']['show']):

            for ($this->_sections['x']['index'] = $this->_sections['x']['start'], $this->_sections['x']['iteration'] = 1;
                 $this->_sections['x']['iteration'] <= $this->_sections['x']['total'];
                 $this->_sections['x']['index'] += $this->_sections['x']['step'], $this->_sections['x']['iteration']++):
$this->_sections['x']['rownum'] = $this->_sections['x']['iteration'];
$this->_sections['x']['index_prev'] = $this->_sections['x']['index'] - $this->_sections['x']['step'];
$this->_sections['x']['index_next'] = $this->_sections['x']['index'] + $this->_sections['x']['step'];
$this->_sections['x']['first']      = ($this->_sections['x']['iteration'] == 1);
$this->_sections['x']['last']       = ($this->_sections['x']['iteration'] == $this->_sections['x']['total']);
?><?php if ($this->_tpl_vars['apl'][$this->_sections['i']['index']]['vkey'] == $this->_tpl_vars['ch_pl'][$this->_sections['x']['index']]): ?>checked<?php endif; ?><?php endfor; endif; ?>></td>
    						<td align="left" width="99%"><?php echo ((is_array($_tmp=$this->_tpl_vars['apl'][$this->_sections['i']['index']]['pname'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
</td>
    					    </tr>
    					<?php endfor; endif; ?>
    					</table>
    					</fieldset>
    					<?php endif; ?>
    				    </td>
    				</tr>
    			    </table>
    			</div>
    			</td>
    		    </tr>
    		    <tr>
    			<td width="1%"></td><td><?php echo $this->_tpl_vars['pr_chinfop64']; ?>
</td>
    		    </tr>
    		    <tr>
    			<td width="1%"><input type="checkbox" name="th_vgrid" id="th_vgrid" <?php if ($this->_tpl_vars['tinfo'][0]['th_vid'] == '1'): ?>checked<?php endif; ?> onclick="sh_vidbox();"></td><td><?php echo $this->_tpl_vars['pr_chinfop65']; ?>
</td>
    		    </tr>
    		    <tr>
    			<td colspan="2" class="pl20">
    			    <table cellpadding="2" cellspacing="0" border=0>
    				<tr>
    				    <td valign="top" width="1"><input type="radio" name="th_vidview" <?php if ($this->_tpl_vars['tinfo'][0]['th_vid'] == '0'): ?>disabled<?php endif; ?> <?php if ($this->_tpl_vars['tinfo'][0]['th_vid_view'] == 'grid'): ?>checked<?php endif; ?> value="grid" id="th_vidviewgrid" onclick="ShowContent('div_videogrid'); HideContent('div_videocomp');"></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfop66']; ?>
</td>
    				    <td valign="top" width="1"><input type="radio" name="th_vidview" <?php if ($this->_tpl_vars['tinfo'][0]['th_vid'] == '0'): ?>disabled<?php endif; ?> <?php if ($this->_tpl_vars['tinfo'][0]['th_vid_view'] == 'compact'): ?>checked<?php endif; ?> value="compact" id="th_vidviewcomp" onclick="HideContent('div_videogrid'); ShowContent('div_videocomp');"></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfop67']; ?>
</td>
    				</tr>
    			    </table>
    			</td>
    		    </tr>
    		    <tr>
    			<td width="1%"><input type="checkbox" name="th_vlog" id="th_vlog" <?php if ($this->_tpl_vars['tinfo'][0]['th_vlog'] == '1'): ?>checked<?php endif; ?> onclick="sh_vlogbox();"></td><td><?php echo $this->_tpl_vars['pr_chinfop68']; ?>
</td>
    		    </tr>
    		    <tr>
    			<td width="1%"><input type="checkbox" name="th_fav" id="th_fav" <?php if ($this->_tpl_vars['tinfo'][0]['th_fav'] == '1'): ?>checked<?php endif; ?> onclick="sh_favbox();"></td><td><?php echo $this->_tpl_vars['pr_chinfop69']; ?>
</td>
    		    </tr>
    		    <tr>
    			<td colspan="2" class="pl20">
    			    <table cellpadding="2" cellspacing="0" border=0>
    				<tr>
    				    <td valign="top" width="1"><input type="radio" name="th_favview" <?php if ($this->_tpl_vars['tinfo'][0]['th_fav'] == '0'): ?>disabled<?php endif; ?> <?php if ($this->_tpl_vars['tinfo'][0]['th_fav_view'] == 'grid'): ?>checked<?php endif; ?> value="grid" id="th_favgrid" onclick="ShowContent('div_favgrid'); HideContent('div_favcomp');"></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfop66']; ?>
</td>
    				    <td valign="top" width="1"><input type="radio" name="th_favview" <?php if ($this->_tpl_vars['tinfo'][0]['th_fav'] == '0'): ?>disabled<?php endif; ?> <?php if ($this->_tpl_vars['tinfo'][0]['th_fav_view'] == 'compact'): ?>checked<?php endif; ?> value="compact" id="th_favcomp" onclick="HideContent('div_favgrid'); ShowContent('div_favcomp');"></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfop67']; ?>
</td>
    				</tr>
    			    </table>
    			</td>
    		    </tr>
    		    <tr>
    			<td width="1%"><input type="checkbox" <?php if ($this->_tpl_vars['tinfo'][0]['th_usubs'] == '1'): ?>checked<?php endif; ?> name="th_usubsbox" id="th_usubsbox" onclick="sh_usubsbox();"></td><td><?php echo $this->_tpl_vars['pr_chinfop70']; ?>
</td>
    		    </tr>
    		    <tr>
    			<td colspan="2" class="pl20">
    			    <table cellpadding="2" cellspacing="0" border=0>
    				<tr>
    				    <td valign="top" width="1"><input type="radio" name="th_usubspos" <?php if ($this->_tpl_vars['tinfo'][0]['th_usubs'] == '0'): ?>disabled<?php endif; ?> <?php if ($this->_tpl_vars['tinfo'][0]['th_usubs_pos'] == 'left'): ?>checked<?php endif; ?> value="left" id="th_usubsposleft" onclick="ShowContent('div_usubsdivleft'); HideContent('div_usubsdivright');"></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfop57']; ?>
</td>
    				    <td valign="top" width="1"><input type="radio" name="th_usubspos" <?php if ($this->_tpl_vars['tinfo'][0]['th_usubs'] == '0'): ?>disabled<?php endif; ?> <?php if ($this->_tpl_vars['tinfo'][0]['th_usubs_pos'] == 'right'): ?>checked<?php endif; ?> value="right" id="th_usubsposright" onclick="HideContent('div_usubsdivleft'); ShowContent('div_usubsdivright');"></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfop58']; ?>
</td>
    				</tr>
    			    </table>
    			</td>
    		    </tr>
    		    <tr>
    			<td width="1%"><input type="checkbox" <?php if ($this->_tpl_vars['tinfo'][0]['th_friends'] == '1'): ?>checked<?php endif; ?> name="th_frbox" id="th_frbox" onclick="sh_frbox();"></td><td><?php echo $this->_tpl_vars['pr_chinfop71']; ?>
</td>
    		    </tr>
    		    <tr>
    			<td colspan="2" class="pl20">
    			    <table cellpadding="2" cellspacing="0" border=0>
    				<tr>
    				    <td valign="top" width="1"><input type="radio" name="th_frpos" <?php if ($this->_tpl_vars['tinfo'][0]['th_friends'] == '0'): ?>disabled<?php endif; ?> <?php if ($this->_tpl_vars['tinfo'][0]['th_friends_pos'] == 'left'): ?>checked<?php endif; ?> value="left" id="th_frposleft" onclick="ShowContent('div_frdivleft'); HideContent('div_frdivright');"></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfop57']; ?>
</td>
    				    <td valign="top" width="1"><input type="radio" name="th_frpos" <?php if ($this->_tpl_vars['tinfo'][0]['th_friends'] == '0'): ?>disabled<?php endif; ?> <?php if ($this->_tpl_vars['tinfo'][0]['th_friends_pos'] == 'right'): ?>checked<?php endif; ?> value="right" id="th_frposright" onclick="HideContent('div_frdivleft'); ShowContent('div_frdivright');"></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfop58']; ?>
</td>
    				</tr>
    			    </table>
    			</td>
    		    </tr>
    		    <tr>
    			<td width="1%"><input type="checkbox" <?php if ($this->_tpl_vars['tinfo'][0]['th_comm'] == '1'): ?>checked<?php endif; ?> name="th_commbox" id="th_commbox" onclick="sh_commbox();"></td><td><?php echo $this->_tpl_vars['pr_chinfop72']; ?>
</td>
    		    </tr>
    		    <tr>
    			<td colspan="2" class="pl20">
    			    <table cellpadding="2" cellspacing="0" border=0>
    				<tr>
    				    <td valign="top" width="1"><input type="radio" name="th_commpos" <?php if ($this->_tpl_vars['tinfo'][0]['th_comm'] == '0'): ?>disabled<?php endif; ?> <?php if ($this->_tpl_vars['tinfo'][0]['th_comm_pos'] == 'left'): ?>checked<?php endif; ?> value="left" id="th_commposleft" onclick="ShowContent('div_commdivleft'); HideContent('div_commdivright');"></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfop57']; ?>
</td>
    				    <td valign="top" width="1"><input type="radio" name="th_commpos" <?php if ($this->_tpl_vars['tinfo'][0]['th_comm'] == '0'): ?>disabled<?php endif; ?> <?php if ($this->_tpl_vars['tinfo'][0]['th_comm_pos'] == 'right'): ?>checked<?php endif; ?> value="right" id="th_commposright" onclick="HideContent('div_commdivleft'); ShowContent('div_commdivright');"></td><td valign="bottom"><?php echo $this->_tpl_vars['pr_chinfop58']; ?>
</td>
    				</tr>
    			    </table>
    			</td>
    		    </tr>
    		</table>