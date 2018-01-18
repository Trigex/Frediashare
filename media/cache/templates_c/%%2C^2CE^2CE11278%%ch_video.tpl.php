<?php /* Smarty version 2.6.26, created on 2009-11-10 15:43:30
         compiled from _inc/chan/ch_video.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'keys_to_array', '_inc/chan/ch_video.tpl', 9, false),array('insert', 'vid_to_rndv', '_inc/chan/ch_video.tpl', 36, false),array('insert', 'getfield', '_inc/chan/ch_video.tpl', 39, false),array('insert', 'vid_to_rnda', '_inc/chan/ch_video.tpl', 41, false),array('insert', 'keys_to_thumbs', '_inc/chan/ch_video.tpl', 75, false),array('modifier', 'truncate', '_inc/chan/ch_video.tpl', 50, false),)), $this); ?>
<script language="JavaScript" src="<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/scripts/ctheme.js" type="text/javascript"></script>
<script type="text/javascript">
function setchvcol ( td_id ) {
    if ( document.getElementById ( td_id ).style.backgroundColor == 'rgb(204, 204, 204)' || document.getElementById ( td_id ).style.backgroundColor == '#cccccc' ) document.getElementById ( td_id ).style.backgroundColor = '';
    else document.getElementById ( td_id ).style.backgroundColor = '#cccccc';
}
</script>
<?php if ($_REQUEST['v'] == "" || $_REQUEST['v'] == 'mv'): ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'keys_to_array', 'assign' => 'keys', 'arr' => $this->_tpl_vars['chvids'])), $this); ?>

<?php else: ?>
<?php if ($this->_tpl_vars['chfavs'] != ""): ?>
    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'keys_to_array', 'assign' => 'keys', 'arr' => $this->_tpl_vars['chfavs'])), $this); ?>

<?php endif; ?>
<?php endif; ?>
<form id="ch_addvidform" name="ch_addvidform" method="post" action="">
    <table width="100%" border="0" cellpadding="2" cellspacing="1">
        <tr>
    	    <td><?php if ($_REQUEST['v'] == 'mf'): ?><?php echo $this->_tpl_vars['pr_chinfop47']; ?>
<?php else: ?><?php if ($this->_tpl_vars['chs'] == 's3'): ?><?php echo $this->_tpl_vars['pr_chinfop40']; ?>
<?php elseif ($this->_tpl_vars['chs'] == 's31'): ?><?php echo $this->_tpl_vars['pr_chinfop401']; ?>
<?php elseif ($this->_tpl_vars['chs'] == 's32'): ?><?php echo $this->_tpl_vars['pr_chinfop402']; ?>
<?php endif; ?><?php endif; ?></td>
    	    <td align="right">
    		<?php echo $this->_tpl_vars['pr_chinfop45']; ?>
<a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_profile_<?php if ($this->_tpl_vars['chs'] == 's3'): ?>videos<?php elseif ($this->_tpl_vars['chs'] == 's31'): ?>images<?php elseif ($this->_tpl_vars['chs'] == 's32'): ?>audios<?php endif; ?>/mv">
    		<span class="<?php if ($_REQUEST['v'] == 'mv' || $_REQUEST['v'] == ""): ?>act<?php endif; ?>"><?php if ($this->_tpl_vars['chs'] == 's3'): ?><?php echo $this->_tpl_vars['myvideo']; ?>
<?php elseif ($this->_tpl_vars['chs'] == 's31'): ?><?php echo $this->_tpl_vars['myimage']; ?>
<?php elseif ($this->_tpl_vars['chs'] == 's32'): ?><?php echo $this->_tpl_vars['myaudio']; ?>
<?php endif; ?></span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_profile_<?php if ($this->_tpl_vars['chs'] == 's3'): ?>videos<?php elseif ($this->_tpl_vars['chs'] == 's31'): ?>images<?php elseif ($this->_tpl_vars['chs'] == 's32'): ?>audios<?php endif; ?>/mf"><span class="<?php if ($_REQUEST['v'] == 'mf'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['myfav']; ?>
</span></a>
    	    </td>
    	</tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr><td colspan="2"><?php if ($_REQUEST['v'] == 'mf'): ?><?php if ($this->_tpl_vars['chs'] == 's3'): ?><?php echo $this->_tpl_vars['pr_chinfop46']; ?>
<?php elseif ($this->_tpl_vars['chs'] == 's31'): ?><?php echo $this->_tpl_vars['pr_chinfop461']; ?>
<?php elseif ($this->_tpl_vars['chs'] == 's32'): ?><?php echo $this->_tpl_vars['pr_chinfop462']; ?>
<?php endif; ?><?php else: ?><?php if ($this->_tpl_vars['chs'] == 's3'): ?><?php echo $this->_tpl_vars['pr_chinfop41']; ?>
<?php elseif ($this->_tpl_vars['chs'] == 's31'): ?><?php echo $this->_tpl_vars['pr_chinfop411']; ?>
<?php elseif ($this->_tpl_vars['chs'] == 's32'): ?><?php echo $this->_tpl_vars['pr_chinfop412']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['pr_chinfob57']; ?>
</td></tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr><td><?php if ($this->_tpl_vars['chs'] == 's3'): ?><?php echo $this->_tpl_vars['pr_chinfop42']; ?>
<?php elseif ($this->_tpl_vars['chs'] == 's31'): ?><?php echo $this->_tpl_vars['pr_chinfop421']; ?>
<?php elseif ($this->_tpl_vars['chs'] == 's32'): ?><?php echo $this->_tpl_vars['pr_chinfop422']; ?>
<?php endif; ?></td><td><?php if ($_REQUEST['v'] == 'mf'): ?><?php echo $this->_tpl_vars['pr_chinfop48']; ?>
<?php else: ?><?php if ($this->_tpl_vars['chs'] == 's3'): ?><?php echo $this->_tpl_vars['pr_chinfop43']; ?>
<?php elseif ($this->_tpl_vars['chs'] == 's31'): ?><?php echo $this->_tpl_vars['pr_chinfop431']; ?>
<?php elseif ($this->_tpl_vars['chs'] == 's32'): ?><?php echo $this->_tpl_vars['pr_chinfop432']; ?>
<?php endif; ?><?php endif; ?></td></tr>
        <tr>
    	    <td width="60%" class="" valign="top">
    		<table cellpadding="2" cellspacing="3" align="center" border=0 width="100%">
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
    		    <?php if ($this->_sections['i']['index'] % 4 == '0'): ?></tr><tr><?php endif; ?>
    			<td valign="top" width="80" height="130" class="nopad br1 nbg" id="td<?php echo $this->_sections['i']['iteration']; ?>
" <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['keys']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?><?php if ($this->_tpl_vars['vids'][$this->_sections['i']['index']]['vkey'] == $this->_tpl_vars['keys'][$this->_sections['k']['index']]): ?>style="background-color: rgb(204, 204, 204);"<?php endif; ?><?php endfor; endif; ?>>
    			<?php if ($this->_tpl_vars['chs'] == 's3'): ?>
    			    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'vid_to_rndv', 'assign' => 'rnd', 'vid' => $this->_tpl_vars['vids'][$this->_sections['i']['index']]['vid'])), $this); ?>

    			    <?php $this->assign('rndbn', '1'); ?>
    			<?php elseif ($this->_tpl_vars['chs'] == 's31'): ?>
    			    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'photo', 'field' => 'vflvname', 'table' => 'files_image', 'qfield' => 'vid', 'qvalue' => $this->_tpl_vars['vids'][$this->_sections['i']['index']]['vid'])), $this); ?>

    			<?php elseif ($this->_tpl_vars['chs'] == 's32'): ?>
    			    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'vid_to_rnda', 'assign' => 'rnd', 'vid' => $this->_tpl_vars['vids'][$this->_sections['i']['index']]['vid'])), $this); ?>

    			    <?php $this->assign('rndbn', '1'); ?>
    			<?php endif; ?>
    			    <table cellpadding="0" cellspacing="0" border=0 style="width: 80px; height: 130px;">
    				<tr>
    				    <td valign="top" width="<?php echo $this->_tpl_vars['img_max_width']/2; ?>
" height="<?php echo $this->_tpl_vars['img_max_height']/2; ?>
" align="center">
    					<img src="<?php echo $this->_tpl_vars['tmb_url']; ?>
/user<?php echo $this->_tpl_vars['vids'][$this->_sections['i']['index']]['uid']; ?>
/<?php if ($this->_tpl_vars['chs'] == 's31'): ?><?php echo $this->_tpl_vars['photo']; ?>
<?php else: ?><?php echo $this->_tpl_vars['rndbn']; ?>
_<?php echo $this->_tpl_vars['rnd']; ?>
.jpg<?php endif; ?>" width="<?php echo $this->_tpl_vars['img_max_width']/2; ?>
" height="<?php echo $this->_tpl_vars['img_max_height']/2; ?>
" alt="<?php echo $this->_tpl_vars['vids'][$this->_sections['i']['index']]['vtitle']; ?>
" title="<?php echo $this->_tpl_vars['vids'][$this->_sections['i']['index']]['vtitle']; ?>
" class="thumb">
    				    </td>
    				</tr>
    				<tr><td align="center" class="pt0"><span class="f10"><?php echo ((is_array($_tmp=$this->_tpl_vars['vids'][$this->_sections['i']['index']]['vtitle'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, "...") : smarty_modifier_truncate($_tmp, 25, "...")); ?>
</span></td></tr>
    				<tr>
    				    <td align="center" valign="bottom">
    					<table cellpadding="2" cellspacing="0">
    					    <tr>
    						<td><input type="checkbox" name="vid[]" id="c<?php echo $this->_sections['i']['iteration']; ?>
" <?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['keys']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php if ($this->_tpl_vars['vids'][$this->_sections['i']['index']]['vkey'] == $this->_tpl_vars['keys'][$this->_sections['j']['index']]): ?>checked<?php endif; ?><?php endfor; endif; ?> value="<?php echo $this->_tpl_vars['vids'][$this->_sections['i']['index']]['vkey']; ?>
" onclick="setchvcol('td<?php echo $this->_sections['i']['iteration']; ?>
'); addvid('<?php echo $this->_tpl_vars['tmb_url']; ?>
/user<?php echo $this->_tpl_vars['vids'][$this->_sections['i']['index']]['uid']; ?>
/<?php if ($this->_tpl_vars['chs'] == 's31'): ?><?php echo $this->_tpl_vars['photo']; ?>
<?php else: ?><?php echo $this->_tpl_vars['rndbn']; ?>
_<?php echo $this->_tpl_vars['rnd']; ?>
.jpg<?php endif; ?>', 'c<?php echo $this->_sections['i']['iteration']; ?>
', 'fl0', '<?php echo $this->_tpl_vars['vids'][$this->_sections['i']['index']]['vkey']; ?>
');"></td>
    						<td valign="middle" class="pt5">
    						    <a href="javascript:void(0)" onclick="setchvcol('td<?php echo $this->_sections['i']['iteration']; ?>
'); addvid('<?php echo $this->_tpl_vars['tmb_url']; ?>
/user<?php echo $this->_tpl_vars['vids'][$this->_sections['i']['index']]['uid']; ?>
/<?php if ($this->_tpl_vars['chs'] == 's31'): ?><?php echo $this->_tpl_vars['photo']; ?>
<?php else: ?><?php echo $this->_tpl_vars['rndbn']; ?>
_<?php echo $this->_tpl_vars['rnd']; ?>
.jpg<?php endif; ?>', 'c<?php echo $this->_sections['i']['iteration']; ?>
', 'fl1', '<?php echo $this->_tpl_vars['vids'][$this->_sections['i']['index']]['vkey']; ?>
');"><?php echo $this->_tpl_vars['pr_chinfop44']; ?>
</a>
    						    <input type="hidden" value="<?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['keys']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?><?php if ($this->_tpl_vars['vids'][$this->_sections['i']['index']]['vkey'] == $this->_tpl_vars['keys'][$this->_sections['k']['index']]): ?>c<?php echo $this->_sections['i']['iteration']; ?>
<?php else: ?><?php endif; ?><?php endfor; endif; ?>" name="hf<?php echo $this->_sections['i']['iteration']; ?>
" id="it<?php echo $this->_sections['i']['iteration']; ?>
">
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
    		<div id="saverespdiv"></div>
    	    </td>
    	    <td width="40%" class="br1" valign="top">
    		<table cellpadding="2" cellspacing="15" border=0 align="center">
    		    <tr>
    			<td>
    			    <div id="div1" style="width: <?php echo $this->_tpl_vars['img_max_width']/2; ?>
px; height: <?php echo $this->_tpl_vars['img_max_height']/2; ?>
px; <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'keys_to_thumbs', 'assign' => 't1', 'arr' => $this->_tpl_vars['keys'][0])), $this); ?>
<?php echo $this->_tpl_vars['t1']; ?>
" class="br1"></div>
    			    <input type="hidden" id="k0" name="k0" value="<?php echo $this->_tpl_vars['keys'][0]; ?>
">
    			</td>
    			<td>
    			    <div id="div2" style="width: <?php echo $this->_tpl_vars['img_max_width']/2; ?>
px; height: <?php echo $this->_tpl_vars['img_max_height']/2; ?>
px; <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'keys_to_thumbs', 'assign' => 't2', 'arr' => $this->_tpl_vars['keys'][1])), $this); ?>
<?php echo $this->_tpl_vars['t2']; ?>
" class="br1"></div>
    			    <input type="hidden" id="k1" name="k1" value="<?php echo $this->_tpl_vars['keys'][1]; ?>
">
    			</td>
    			<td>
    			    <div id="div3" style="width: <?php echo $this->_tpl_vars['img_max_width']/2; ?>
px; height: <?php echo $this->_tpl_vars['img_max_height']/2; ?>
px; <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'keys_to_thumbs', 'assign' => 't3', 'arr' => $this->_tpl_vars['keys'][2])), $this); ?>
<?php echo $this->_tpl_vars['t3']; ?>
" class="br1"></div>
    			    <input type="hidden" id="k2" name="k2" value="<?php echo $this->_tpl_vars['keys'][2]; ?>
">
    			</td>
    		    </tr>
    		    <tr>
    			<td>
    			    <div id="div4" style="width: <?php echo $this->_tpl_vars['img_max_width']/2; ?>
px; height: <?php echo $this->_tpl_vars['img_max_height']/2; ?>
px; <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'keys_to_thumbs', 'assign' => 't4', 'arr' => $this->_tpl_vars['keys'][3])), $this); ?>
<?php echo $this->_tpl_vars['t4']; ?>
" class="br1"></div>
    			    <input type="hidden" id="k3" name="k3" value="<?php echo $this->_tpl_vars['keys'][3]; ?>
">
    			</td>
    			<td>
    			    <div id="div5" style="width: <?php echo $this->_tpl_vars['img_max_width']/2; ?>
px; height: <?php echo $this->_tpl_vars['img_max_height']/2; ?>
px; <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'keys_to_thumbs', 'assign' => 't5', 'arr' => $this->_tpl_vars['keys'][4])), $this); ?>
<?php echo $this->_tpl_vars['t5']; ?>
" class="br1"></div>
    			    <input type="hidden" id="k4" name="k4" value="<?php echo $this->_tpl_vars['keys'][4]; ?>
">
    			</td>
    			<td>
    			    <div id="div6" style="width: <?php echo $this->_tpl_vars['img_max_width']/2; ?>
px; height: <?php echo $this->_tpl_vars['img_max_height']/2; ?>
px; <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'keys_to_thumbs', 'assign' => 't6', 'arr' => $this->_tpl_vars['keys'][5])), $this); ?>
<?php echo $this->_tpl_vars['t6']; ?>
" class="br1"></div>
    			    <input type="hidden" id="k5" name="k5" value="<?php echo $this->_tpl_vars['keys'][5]; ?>
">
    			</td>
    		    </tr>
    		    <tr>
    			<td>
    			    <div id="div7" style="width: <?php echo $this->_tpl_vars['img_max_width']/2; ?>
px; height: <?php echo $this->_tpl_vars['img_max_height']/2; ?>
px; <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'keys_to_thumbs', 'assign' => 't7', 'arr' => $this->_tpl_vars['keys'][6])), $this); ?>
<?php echo $this->_tpl_vars['t7']; ?>
" class="br1"></div>
    			    <input type="hidden" id="k6" name="k6" value="<?php echo $this->_tpl_vars['keys'][6]; ?>
">
    			</td>
    			<td>
    			    <div id="div8" style="width: <?php echo $this->_tpl_vars['img_max_width']/2; ?>
px; height: <?php echo $this->_tpl_vars['img_max_height']/2; ?>
px; <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'keys_to_thumbs', 'assign' => 't8', 'arr' => $this->_tpl_vars['keys'][7])), $this); ?>
<?php echo $this->_tpl_vars['t8']; ?>
" class="br1"></div>
    			    <input type="hidden" id="k7" name="k7" value="<?php echo $this->_tpl_vars['keys'][7]; ?>
">
    			</td>
    			<td>
    			    <div id="div9" style="width: <?php echo $this->_tpl_vars['img_max_width']/2; ?>
px; height: <?php echo $this->_tpl_vars['img_max_height']/2; ?>
px; <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'keys_to_thumbs', 'assign' => 't9', 'arr' => $this->_tpl_vars['keys'][8])), $this); ?>
<?php echo $this->_tpl_vars['t9']; ?>
" class="br1"></div>
    			    <input type="hidden" id="k8" name="k8" value="<?php echo $this->_tpl_vars['keys'][8]; ?>
">
    			</td>
    		    </tr>
    		</table>
    	    </td>
        </tr>
        <tr><td><input type="submit" name="chsave_chvid" value="<?php echo $this->_tpl_vars['pr_chinfoc22']; ?>
" class="fb"></td><td></td></tr> 
    </table>
</form>