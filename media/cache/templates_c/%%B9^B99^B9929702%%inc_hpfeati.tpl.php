<?php /* Smarty version 2.6.26, created on 2009-11-10 15:17:50
         compiled from _inc/hpbox/inc_hpfeati.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lower', '_inc/hpbox/inc_hpfeati.tpl', 20, false),)), $this); ?>
<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
	<td>
	    <div align="center"><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/topcorners_hpl2.gif" width="640" height="6" alt=""><?php else: ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/topcorners_hpl1.gif" width="640" height="6" alt=""><?php endif; ?></div>
                <table border="0" cellpadding="0" cellspacing="0" align="center" <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>class="cborder2"<?php else: ?>class="cborder"<?php endif; ?> width="640">
                    <tr>
                        <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><td id="bgshp3" class="<?php if ($_SESSION['hpfeati'] == 'none'): ?>cbg2s-nb<?php else: ?>cbg2s<?php endif; ?>"><?php else: ?><td id="bgshp3" class="<?php if ($_SESSION['hpfeati'] == 'none'): ?>cbgs-nb<?php else: ?>cbgs<?php endif; ?>"><?php endif; ?>
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td valign="middle" class="pl5" width="18">
                                        <div id="cdownarrhp3" style="display: block;" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp3(); set_hpsess('feati');"><img src="<?php echo $this->_tpl_vars['chimg_url']; ?>
/hp_feat.gif" width="18" height="18" alt=""></a>
                                        </div>
                                        <div id="cleftarrhp3" style="display: none;" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp3(); set_hpsess('feati');"><img src="<?php echo $this->_tpl_vars['chimg_url']; ?>
/hp_feat.gif" width="18" height="18" alt=""></a>
                                        </div>
                                    </td>
                                    
                                    <td valign="middle" class="pl5" align="left"><a href="javascript:void(0)" <?php if ($_SESSION['UID'] != "" || $this->_tpl_vars['guests_file_sorting'] == '1'): ?>onclick="xajax_loadingi_('featured'); ShowContent('morelessfeati'); HideContent('morelessviewsi'); HideContent('morelessratingsi'); setclass_act('mmh1hp3'); changeclass_inact('trlinki'); changeclass_inact('mvlinki');"<?php else: ?>onclick="alert('<?php echo $this->_tpl_vars['msg_userlogin']; ?>
');"<?php endif; ?>><span class="mh1"><span id="mmh1hp3" class="act"><?php echo $this->_tpl_vars['recfeatured']; ?>
 <?php echo $this->_tpl_vars['images_main']; ?>
</span></span></a></td>
                                    <td valign="middle" class="f10 pr5" align="right"><?php echo $this->_tpl_vars['hpbox_otheri']; ?>
<a href="javascript:void(0)" <?php if ($_SESSION['UID'] != "" || $this->_tpl_vars['guests_file_sorting'] == '1'): ?>onclick="xajax_loadingi_('views'); ShowContent('morelessviewsi'); HideContent('morelessfeati'); HideContent('morelessratingsi'); setclass_act('mvlinki'); changeclass_inact('trlinki'); changeclass_inact('mmh1hp3');"<?php else: ?>onclick="alert('<?php echo $this->_tpl_vars['msg_userlogin']; ?>
');"<?php endif; ?>><span class="f10"><span id="mvlinki"><?php echo ((is_array($_tmp=$this->_tpl_vars['mostviewed'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
</span></span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<a href="javascript:void(0)" <?php if ($_SESSION['UID'] != "" || $this->_tpl_vars['guests_file_sorting'] == '1'): ?>onclick="<?php if ($this->_tpl_vars['file_ratings'] == '0'): ?>javascript:void(0)<?php else: ?>xajax_loadingi_('ratings'); ShowContent('morelessratingsi'); HideContent('morelessfeati'); HideContent('morelessviewsi'); setclass_act('trlinki'); changeclass_inact('mvlinki'); changeclass_inact('mmh1hp3');<?php endif; ?>"<?php else: ?>onclick="alert('<?php echo $this->_tpl_vars['msg_userlogin']; ?>
');"<?php endif; ?> <?php if ($this->_tpl_vars['file_ratings'] == '0'): ?>alt="<?php echo $this->_tpl_vars['hpbox_norate']; ?>
" title="<?php echo $this->_tpl_vars['hpbox_norate']; ?>
"<?php endif; ?>><span class="f10"><span id="trlinki"><?php echo ((is_array($_tmp=$this->_tpl_vars['toprated'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
</span></a></span></td>
                                </tr>
                            </table>
                            <div id="cspacerhp3" style="display: <?php echo $_SESSION['hpfeati']; ?>
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
	    <div id="mmenulisthp3" <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>class="hpbrdnotop2"<?php else: ?>class="hpbrdnotop"<?php endif; ?> style="display: <?php echo $_SESSION['hpfeati']; ?>
;">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/hpbox/inc_hpimages.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	    </div>
	    <div align="center" id="cbottomhp3" style="display: <?php if ($_SESSION['hpfeati'] == 'none'): ?>block<?php else: ?>none<?php endif; ?>;"><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners_hpl2.gif" width="640" height="6" alt=""><?php else: ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners_hpl1.gif" width="640" height="6" alt=""><?php endif; ?></div>
	</td>
    </tr>
</table>
<br>