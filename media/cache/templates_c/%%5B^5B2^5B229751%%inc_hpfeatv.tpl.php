<?php /* Smarty version 2.6.26, created on 2009-11-10 15:17:50
         compiled from _inc/hpbox/inc_hpfeatv.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lower', '_inc/hpbox/inc_hpfeatv.tpl', 20, false),array('insert', 'gen_array', '_inc/hpbox/inc_hpfeatv.tpl', 36, false),array('insert', 'vid_to_rndv', '_inc/hpbox/inc_hpfeatv.tpl', 39, false),)), $this); ?>
<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
	<td>
	    <div align="center"><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/topcorners_hpl2.gif" width="640" height="6" alt=""><?php else: ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/topcorners_hpl1.gif" width="640" height="6" alt=""><?php endif; ?></div>
                <table border="0" cellpadding="0" cellspacing="0" align="center" <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>class="cborder2"<?php else: ?>class="cborder"<?php endif; ?> width="640">
                    <tr>
                        <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><td id="bgshp2" class="<?php if ($_SESSION['hpfeatv'] == 'none'): ?>cbg2s-nb<?php else: ?>cbg2s<?php endif; ?>"><?php else: ?><td id="bgshp2" class="<?php if ($_SESSION['hpfeatv'] == 'none'): ?>cbgs-nb<?php else: ?>cbgs<?php endif; ?>"><?php endif; ?>
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td valign="middle" class="pl5" width="18">
                                        <div id="cdownarrhp2" style="display: block;" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp2(); set_hpsess('featv');"><img src="<?php echo $this->_tpl_vars['chimg_url']; ?>
/hp_feat.gif" width="18" height="18" alt=""></a>
                                        </div>
                                        <div id="cleftarrhp2" style="display: none;" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp2(); set_hpsess('featv');"><img src="<?php echo $this->_tpl_vars['chimg_url']; ?>
/hp_feat.gif" width="18" height="18" alt=""></a>
                                        </div>
                                    </td>
                                    
                                    <td valign="middle" class="pl5" align="left"><a href="javascript:void(0)" <?php if ($_SESSION['UID'] != "" || $this->_tpl_vars['guests_file_sorting'] == '1'): ?>onclick="xajax_loading_('featured'); ShowContent('morelessfeat'); HideContent('morelessviews'); HideContent('morelessratings'); setclass_act('mmh1hp2'); changeclass_inact('trlinkv'); changeclass_inact('mvlinkv');"<?php else: ?>onclick="alert('<?php echo $this->_tpl_vars['msg_userlogin']; ?>
');"<?php endif; ?>><span class="mh1"><span id="mmh1hp2" class="act"><?php echo $this->_tpl_vars['recfeatured']; ?>
 <?php echo $this->_tpl_vars['videos_main']; ?>
</span></span></a></td>
                                    <td valign="middle" class="f10 pr5" align="right"><?php echo $this->_tpl_vars['hpbox_otherv']; ?>
<a href="javascript:void(0)" <?php if ($_SESSION['UID'] != "" || $this->_tpl_vars['guests_file_sorting'] == '1'): ?>onclick="xajax_loading_('views'); ShowContent('morelessviews'); HideContent('morelessfeat'); HideContent('morelessratings'); setclass_act('mvlinkv'); changeclass_inact('trlinkv'); changeclass_inact('mmh1hp2');"<?php else: ?>onclick="alert('<?php echo $this->_tpl_vars['msg_userlogin']; ?>
');"<?php endif; ?>><span class="f10"><span id="mvlinkv"><?php echo ((is_array($_tmp=$this->_tpl_vars['mostviewed'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
</span></span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<a href="javascript:void(0)" <?php if ($_SESSION['UID'] != "" || $this->_tpl_vars['guests_file_sorting'] == '1'): ?>onclick="<?php if ($this->_tpl_vars['file_ratings'] == '0'): ?>javascript:void(0)<?php else: ?>xajax_loading_('ratings'); ShowContent('morelessratings'); HideContent('morelessfeat'); HideContent('morelessviews'); setclass_act('trlinkv'); changeclass_inact('mvlinkv'); changeclass_inact('mmh1hp2');<?php endif; ?>"<?php else: ?>onclick="alert('<?php echo $this->_tpl_vars['msg_userlogin']; ?>
');"<?php endif; ?> <?php if ($this->_tpl_vars['file_ratings'] == '0'): ?>alt="<?php echo $this->_tpl_vars['hpbox_norate']; ?>
" title="<?php echo $this->_tpl_vars['hpbox_norate']; ?>
"<?php endif; ?>><span class="f10"><span id="trlinkv"><?php echo ((is_array($_tmp=$this->_tpl_vars['toprated'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
</span></a></span></td>
                                </tr>
                            </table>
                            <div id="cspacerhp2" style="display: <?php echo $_SESSION['hpfeatv']; ?>
;"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
                        </td>
                    </tr>
                </table>
            </div>
	</td>
    </tr>
</table>

<table width="640" border="0" align="center" cellpadding="0" cellspacing="0" class="">
    <tr> 
	<td class="">
	    <?php if ($this->_tpl_vars['thumb_module'] == '1'): ?>
            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'gen_array', 'assign' => 'arra', 'nr' => $this->_tpl_vars['thumb_nr'])), $this); ?>

            <script type="text/javascript">
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['bid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
echo smarty_core_run_insert_handler(array('args' => array('name' => 'vid_to_rndv', 'assign' => 'rnd', 'vid' => $this->_tpl_vars['bid'][$this->_sections['i']['index']]['vid'])), $this); ?>

                turl['<?php echo $this->_tpl_vars['rnd']; ?>
']=0; timg['<?php echo $this->_tpl_vars['rnd']; ?>
']=new Array(); thumbs['<?php echo $this->_tpl_vars['rnd']; ?>
']=new Array(<?php echo $this->_tpl_vars['arra']; ?>
);
            <?php endfor; endif; ?>
            </script>
            <?php endif; ?>
	    <div id="mmenulisthp2" <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>class="hpbrdnotop2"<?php else: ?>class="hpbrdnotop"<?php endif; ?> style="display: <?php echo $_SESSION['hpfeatv']; ?>
;">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/hpbox/inc_hpvideos.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	    </div>
	    <div align="center" id="cbottomhp2" style="display: <?php if ($_SESSION['hpfeatv'] == 'none'): ?>block<?php else: ?>none<?php endif; ?>;"><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners_hpl2.gif" width="640" height="6" alt=""><?php else: ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners_hpl1.gif" width="640" height="6" alt=""><?php endif; ?></div>
	</td>
    </tr>
</table>
<br>