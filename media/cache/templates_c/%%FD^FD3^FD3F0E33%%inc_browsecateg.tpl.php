<?php /* Smarty version 2.6.26, created on 2009-11-10 15:41:23
         compiled from _inc/inc_browsecateg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'categ_count', '_inc/inc_browsecateg.tpl', 31, false),array('insert', 'categ_count_image', '_inc/inc_browsecateg.tpl', 40, false),array('insert', 'categ_count_audio', '_inc/inc_browsecateg.tpl', 49, false),array('modifier', 'endconv', '_inc/inc_browsecateg.tpl', 33, false),array('modifier', 'viewnr', '_inc/inc_browsecateg.tpl', 33, false),)), $this); ?>
	    <?php if ($this->_tpl_vars['btn'] == 'bvideo' || $this->_tpl_vars['btn'] == 'bimage' || $this->_tpl_vars['btn'] == 'baudio'): ?>
		<tr>
		    <td class="nopad">
			<div class="cursor">
                            <div align="center"><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/topcorners2.gif" width="<?php echo $this->_tpl_vars['thimgwidth']; ?>
" height="6" alt=""><?php else: ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/topcorners.gif" width="<?php echo $this->_tpl_vars['thimgwidth']; ?>
" height="6" alt=""><?php endif; ?></div>
                            <table border="0" cellpadding="0" cellspacing="0" align="center" <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>class="cborder2"<?php else: ?>class="cborder"<?php endif; ?> width="<?php echo $this->_tpl_vars['thimgwidth']; ?>
">
                                <tr>
                                    <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><td class="cbg2"><?php else: ?><td class="cbg"><?php endif; ?>
                                        <table cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td valign="middle" class="pl5" width="11">
                                                    <div id="cdownarr5" style="display: <?php if ($_SESSION['menu_categ'] == 'block' || $_SESSION['menu_categ'] == ""): ?>block<?php else: ?>none<?php endif; ?>;" class="pl2">
                                                        <a href="javascript:void(0)" onclick="c_m5(); set_hpsess('menu_categ');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowdown1.gif" width="9" height="5" alt=""></a>
                                                    </div>
                                                    <div id="cleftarr5" style="display: <?php if ($_SESSION['menu_categ'] == 'none'): ?>block<?php else: ?>none<?php endif; ?>;" class="pl2">
                                                        <a href="javascript:void(0)" onclick="c_m5(); set_hpsess('menu_categ');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowleft1.gif" width="5" height="9" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>&nbsp;<a href="javascript:void(0)" onclick="c_m5(); set_hpsess('menu_categ');"><span id="mmh15" class="<?php if ($_SESSION['menu_categ'] == 'none'): ?><?php else: ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['mmenu_item12']; ?>
</span></a></td>
                                            </tr>
                                        </table>
                                        <div id="cspacer5" style="display: <?php echo $_SESSION['menu_categ']; ?>
;"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div id="mmenulist5" style="display: <?php echo $_SESSION['menu_categ']; ?>
;">
                    	    <table border="0" cellpadding="3" cellspacing="0" align="center" <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>class="cborder2"<?php else: ?>class="cborder"<?php endif; ?> <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>id="cmit2"<?php else: ?>id="cmit"<?php endif; ?>>
                    	    <?php if ($this->_tpl_vars['btn'] == 'bvideo'): ?>
                    	    <?php unset($this->_sections['c']);
$this->_sections['c']['name'] = 'c';
$this->_sections['c']['loop'] = is_array($_loop=$this->_tpl_vars['categs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    	    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'categ_count', 'assign' => 'count', 'cid' => $this->_tpl_vars['categs'][$this->_sections['c']['index']]['cid'])), $this); ?>

                    	    <?php if ($this->_sections['c']['index'] == '0'): ?>
                    		<tr><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><td class="cbg-bt2"><?php else: ?><td class="cbg-bt"><?php endif; ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/categories/video/<?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $this->_tpl_vars['tit'][$this->_sections['c']['index']]; ?>
<?php else: ?><?php echo $this->_tpl_vars['categs'][$this->_sections['c']['index']]['cid']; ?>
<?php endif; ?>/<?php if ($_REQUEST['type'] == ""): ?>recent<?php else: ?><?php echo $_REQUEST['type']; ?>
<?php endif; ?>"><span <?php if ($this->_tpl_vars['special_characters'] == '0'): ?>class="<?php if ($_REQUEST['category'] == $this->_tpl_vars['tit'][$this->_sections['c']['index']]): ?>act<?php endif; ?><?php else: ?>class="<?php if ($_REQUEST['category'] == $this->_tpl_vars['categs'][$this->_sections['c']['index']]['cid']): ?>act<?php endif; ?><?php endif; ?>"><span class=""><?php echo ((is_array($_tmp=$this->_tpl_vars['categs'][$this->_sections['c']['index']]['name'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
 </span><?php if ($this->_tpl_vars['categ_counts'] == '1'): ?>(<?php echo ((is_array($_tmp=$this->_tpl_vars['count'][1])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
)<?php endif; ?></span></a></td></tr>
                    	    <?php else: ?>
                    		<tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/categories/video/<?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $this->_tpl_vars['tit'][$this->_sections['c']['index']]; ?>
<?php else: ?><?php echo $this->_tpl_vars['categs'][$this->_sections['c']['index']]['cid']; ?>
<?php endif; ?>/<?php if ($_REQUEST['type'] == ""): ?>recent<?php else: ?><?php echo $_REQUEST['type']; ?>
<?php endif; ?>"><span <?php if ($this->_tpl_vars['special_characters'] == '0'): ?>class="<?php if ($_REQUEST['category'] == $this->_tpl_vars['tit'][$this->_sections['c']['index']]): ?>act<?php endif; ?><?php else: ?>class="<?php if ($_REQUEST['category'] == $this->_tpl_vars['categs'][$this->_sections['c']['index']]['cid']): ?>act<?php endif; ?><?php endif; ?>"><span class=""><?php echo ((is_array($_tmp=$this->_tpl_vars['categs'][$this->_sections['c']['index']]['name'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
 </span><?php if ($this->_tpl_vars['categ_counts'] == '1'): ?>(<?php echo ((is_array($_tmp=$this->_tpl_vars['count'][1])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
)<?php endif; ?></span></a></td></tr>
                    	    <?php endif; ?>
                    	    <?php endfor; endif; ?>
                    	    <?php elseif ($this->_tpl_vars['btn'] == 'bimage'): ?>
                    	    <?php unset($this->_sections['c']);
$this->_sections['c']['name'] = 'c';
$this->_sections['c']['loop'] = is_array($_loop=$this->_tpl_vars['categs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    	    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'categ_count_image', 'assign' => 'count', 'cid' => $this->_tpl_vars['categs'][$this->_sections['c']['index']]['cid'])), $this); ?>

                    	    <?php if ($this->_sections['c']['index'] == '0'): ?>
                    		<tr><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><td class="cbg-bt2"><?php else: ?><td class="cbg-bt"><?php endif; ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/categories/image/<?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $this->_tpl_vars['tit'][$this->_sections['c']['index']]; ?>
<?php else: ?><?php echo $this->_tpl_vars['categs'][$this->_sections['c']['index']]['cid']; ?>
<?php endif; ?>/<?php if ($_REQUEST['type'] == ""): ?>recent<?php else: ?><?php echo $_REQUEST['type']; ?>
<?php endif; ?>"><span <?php if ($this->_tpl_vars['special_characters'] == '0'): ?>class="<?php if ($_REQUEST['category'] == $this->_tpl_vars['tit'][$this->_sections['c']['index']]): ?>act<?php endif; ?><?php else: ?>class="<?php if ($_REQUEST['category'] == $this->_tpl_vars['categs'][$this->_sections['c']['index']]['cid']): ?>act<?php endif; ?><?php endif; ?>"><span class=""><?php echo ((is_array($_tmp=$this->_tpl_vars['categs'][$this->_sections['c']['index']]['name'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
 </span><?php if ($this->_tpl_vars['categ_counts'] == '1'): ?>(<?php echo ((is_array($_tmp=$this->_tpl_vars['count'][1])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
)<?php endif; ?></span></a></td></tr>
                    	    <?php else: ?>
                    		<tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/categories/image/<?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $this->_tpl_vars['tit'][$this->_sections['c']['index']]; ?>
<?php else: ?><?php echo $this->_tpl_vars['categs'][$this->_sections['c']['index']]['cid']; ?>
<?php endif; ?>/<?php if ($_REQUEST['type'] == ""): ?>recent<?php else: ?><?php echo $_REQUEST['type']; ?>
<?php endif; ?>"><span <?php if ($this->_tpl_vars['special_characters'] == '0'): ?>class="<?php if ($_REQUEST['category'] == $this->_tpl_vars['tit'][$this->_sections['c']['index']]): ?>act<?php endif; ?><?php else: ?>class="<?php if ($_REQUEST['category'] == $this->_tpl_vars['categs'][$this->_sections['c']['index']]['cid']): ?>act<?php endif; ?><?php endif; ?>"><span class=""><?php echo ((is_array($_tmp=$this->_tpl_vars['categs'][$this->_sections['c']['index']]['name'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
 </span><?php if ($this->_tpl_vars['categ_counts'] == '1'): ?>(<?php echo ((is_array($_tmp=$this->_tpl_vars['count'][1])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
)<?php endif; ?></span></a></td></tr>
                    	    <?php endif; ?>
                    	    <?php endfor; endif; ?>
                    	    <?php elseif ($this->_tpl_vars['btn'] == 'baudio'): ?>
                    	    <?php unset($this->_sections['c']);
$this->_sections['c']['name'] = 'c';
$this->_sections['c']['loop'] = is_array($_loop=$this->_tpl_vars['categs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    	    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'categ_count_audio', 'assign' => 'count', 'cid' => $this->_tpl_vars['categs'][$this->_sections['c']['index']]['cid'])), $this); ?>

                    	    <?php if ($this->_sections['c']['index'] == '0'): ?>
                    		<tr><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><td class="cbg-bt2"><?php else: ?><td class="cbg-bt"><?php endif; ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/categories/audio/<?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $this->_tpl_vars['tit'][$this->_sections['c']['index']]; ?>
<?php else: ?><?php echo $this->_tpl_vars['categs'][$this->_sections['c']['index']]['cid']; ?>
<?php endif; ?>/<?php if ($_REQUEST['type'] == ""): ?>recent<?php else: ?><?php echo $_REQUEST['type']; ?>
<?php endif; ?>"><span <?php if ($this->_tpl_vars['special_characters'] == '0'): ?>class="<?php if ($_REQUEST['category'] == $this->_tpl_vars['tit'][$this->_sections['c']['index']]): ?>act<?php endif; ?><?php else: ?>class="<?php if ($_REQUEST['category'] == $this->_tpl_vars['categs'][$this->_sections['c']['index']]['cid']): ?>act<?php endif; ?><?php endif; ?>"><span class=""><?php echo ((is_array($_tmp=$this->_tpl_vars['categs'][$this->_sections['c']['index']]['name'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
 </span><?php if ($this->_tpl_vars['categ_counts'] == '1'): ?>(<?php echo ((is_array($_tmp=$this->_tpl_vars['count'][1])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
)<?php endif; ?></span></a></td></tr>
                    	    <?php else: ?>
                    		<tr><td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/categories/audio/<?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $this->_tpl_vars['tit'][$this->_sections['c']['index']]; ?>
<?php else: ?><?php echo $this->_tpl_vars['categs'][$this->_sections['c']['index']]['cid']; ?>
<?php endif; ?>/<?php if ($_REQUEST['type'] == ""): ?>recent<?php else: ?><?php echo $_REQUEST['type']; ?>
<?php endif; ?>"><span <?php if ($this->_tpl_vars['special_characters'] == '0'): ?>class="<?php if ($_REQUEST['category'] == $this->_tpl_vars['tit'][$this->_sections['c']['index']]): ?>act<?php endif; ?><?php else: ?>class="<?php if ($_REQUEST['category'] == $this->_tpl_vars['categs'][$this->_sections['c']['index']]['cid']): ?>act<?php endif; ?><?php endif; ?>"><span class=""><?php echo ((is_array($_tmp=$this->_tpl_vars['categs'][$this->_sections['c']['index']]['name'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
 </span><?php if ($this->_tpl_vars['categ_counts'] == '1'): ?>(<?php echo ((is_array($_tmp=$this->_tpl_vars['count'][1])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
)<?php endif; ?></span></a></td></tr>
                    	    <?php endif; ?>
                    	    <?php endfor; endif; ?>
                    	    
                    	    <?php endif; ?>
                    	    </table>
                        </div>
                        <div align="center" id="cbottom5" style="display: <?php if ($_SESSION['menu_categ'] == 'none'): ?>block<?php else: ?>none<?php endif; ?>;"><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners2.gif" width="<?php echo $this->_tpl_vars['thimgwidth']; ?>
" height="6" alt=""><?php else: ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners.gif" width="<?php echo $this->_tpl_vars['thimgwidth']; ?>
" height="6" alt=""><?php endif; ?></div>
		    </td>
		</tr>
            <?php endif; ?>