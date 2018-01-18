<?php /* Smarty version 2.6.26, created on 2009-11-10 15:17:51
         compiled from _inc/hpbox/inc_hpfeatvid.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'uid_to_name', '_inc/hpbox/inc_hpfeatvid.tpl', 57, false),array('insert', 'time_range', '_inc/hpbox/inc_hpfeatvid.tpl', 58, false),array('insert', 'key_to_rate', '_inc/hpbox/inc_hpfeatvid.tpl', 61, false),)), $this); ?>
	    <table width="100%" border="0" cellspacing="0" cellpadding="0 align=center">
		<tr>
		    <td valign="top">
			<div align="center"><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/topcorners_hpr2.gif" width="300" height="6" alt=""><?php else: ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/topcorners_hpr1.gif" width="300" height="6" alt=""><?php endif; ?></div>
                <table border="0" cellpadding="0" cellspacing="0" align="center" <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?>class="cborder2"<?php else: ?>class="cborder"<?php endif; ?> width="300">
                    <tr>
                        <?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><td id="bgshp8" class="<?php if ($_SESSION['hpfeatvid'] == 'none'): ?>cbg2s-nb<?php else: ?>cbg2s<?php endif; ?>"><?php else: ?><td id="bgshp8" class="<?php if ($_SESSION['hpfeatvid'] == 'none'): ?>cbgs-nb<?php else: ?>cbgs<?php endif; ?>"><?php endif; ?>
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td valign="middle" class="pl5" width="18">
                                        <div id="cdownarrhp8" style="display: <?php if ($_SESSION['hpfeatvid'] == 'block' || $_SESSION['hpfeatvid'] == ""): ?>block<?php else: ?>none<?php endif; ?>;" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp8(); set_hpsess('featvid');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowdown1.gif" width="9" height="5" alt=""></a>
                                        </div>
                                        <div id="cleftarrhp8" style="display: <?php if ($_SESSION['hpfeatvid'] == 'none'): ?>block<?php else: ?>none<?php endif; ?>;" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp8(); set_hpsess('featvid');"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/arrowleft1.gif" width="5" height="9" alt=""></a>
                                        </div>
                                    </td>
                                    <td valign="middle" class="pl5" align="left"><a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp8(); set_hpsess('featvid');"><span class="mh2"><span id="mmh1hp8" class="<?php if ($_SESSION['hpfeatvid'] == 'none'): ?><?php else: ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['hpbox_trec']; ?>
</span></span></a></td>
                                </tr>
                            </table>
                            <div id="cspacerhp8" style="display: <?php echo $_SESSION['hpfeatvid']; ?>
;"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
                        </td>
                    </tr>
                </table>
            </div>
		    </td>
		</tr>
		<tr>
		    <td valign="top">
		    <div id="mmenulisthp8" style="display: <?php echo $_SESSION['hpfeatvid']; ?>
;">
			<table width="100%" cellpadding=0 cellspacing=0 border=0>
			    <tr>
				<td align="center">
				    <div align="center">
                        		<script type="text/javascript" src="<?php echo $this->_tpl_vars['base_url']; ?>
/modules/vPlayer/js/swfobject.js"></script>                                                                                         
                        		<div id="flash" class="<?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><?php else: ?><?php endif; ?>">Macromedia Flash Player 9 is required to access this object!<br> To get the most recent version of Flash player available for your browser, visit the <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" target="_blank">Adobe Flash download page</a>.</div>
                            		    <script type="text/javascript">
                            		    // <![CDATA[
                            			var so = new SWFObject("<?php echo $this->_tpl_vars['base_url']; ?>
/modules/vPlayer/vPlayer.swf?f=<?php echo $this->_tpl_vars['base_url']; ?>
/modules/vPlayer/vPlayercfg.php?idx=<?php echo $this->_tpl_vars['key']; ?>
", "main", "300", "260", "9", "<?php echo $this->_tpl_vars['bgc']; ?>
");
                            			so.addParam('allowfullscreen','true');
                            			so.addParam('quality','high');
                            			so.addParam('wmode','opaque');
                            			so.addParam('bgcolor','<?php echo $this->_tpl_vars['bgc']; ?>
');
                            			so.write("flash");
                            		    // ]]>
                        		</script>
                    		    </div>
                		</td>
			    </tr>
			</table>
			<table width="100%" cellpadding=3 cellspacing=0 border=0>
			    <tr>
				<td colspan=2><span class="vtitle"><?php echo $this->_tpl_vars['res'][0]['vtitle']; ?>
</span></td>
			    </tr>
			    <tr>
				<td>
				    <span class="gr"><?php echo $this->_tpl_vars['fileaddedby']; ?>
 </span><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'uid_to_name', 'assign' => 'uname', 'vid' => $this->_tpl_vars['res'][0]['vid'])), $this); ?>
<?php if ($this->_tpl_vars['special_characters'] == '0'): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/profile/<?php echo $this->_tpl_vars['uname']; ?>
"><?php else: ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/profile/<?php echo $this->_tpl_vars['res'][0]['uid']; ?>
"><?php endif; ?><?php echo $this->_tpl_vars['uname']; ?>
</a>
				    ,&nbsp;<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'rtime', 'field' => 'addtime', 'IDFR' => 'vid', 'id' => $this->_tpl_vars['res'][0]['vid'], 'tbl' => 'files_video')), $this); ?>
<?php echo $this->_tpl_vars['rtime']; ?>
 <?php echo $this->_tpl_vars['fileaddedago']; ?>

				</td>
				<td valign=top width="5%">
				    <?php if ($this->_tpl_vars['file_ratings'] == '1'): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'key_to_rate', 'assign' => 'rate', 'vkey' => $this->_tpl_vars['res'][0]['vkey'])), $this); ?>
<?php echo $this->_tpl_vars['rate']; ?>
<?php endif; ?>
				</td>
			    </tr>
			</table><br>
		    </div>
		    <div align="center" id="cbottomhp8" style="display: <?php if ($_SESSION['hpfeatvid'] == 'none'): ?>block<?php else: ?>none<?php endif; ?>;"><?php if ($this->_tpl_vars['site_theme'] == 'black'): ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners_hpr2.gif" width="300" height="6" alt=""><?php else: ?><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/bottomcorners_hpr1.gif" width="300" height="6" alt=""><?php endif; ?></div>
		    </td>
		</tr>
	    </table>