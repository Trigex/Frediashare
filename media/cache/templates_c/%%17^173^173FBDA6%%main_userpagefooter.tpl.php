<?php /* Smarty version 2.6.26, created on 2009-11-10 15:42:30
         compiled from main_userpagefooter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'pmsg_count_new', 'main_userpagefooter.tpl', 43, false),)), $this); ?>
			<br>
			<?php if ($this->_tpl_vars['tinfo'][0]['th_bgimage'] != 'none'): ?>
                            <table border="0" width="960" cellpadding="0" cellspacing="0" class="brep" align="center">
                                <tr>
                                    <td align="center" class="p5"><a href="#brep" onclick="ReverseContentDisplay('reportbg'); ShowContent('respdiv2');"><?php echo $this->_tpl_vars['ch_reptxt1']; ?>
</a> <?php echo $this->_tpl_vars['adm_memchreq5']; ?>
</td>
                                </tr>
                                
                                <tr>
                                    <td align="center">
                                        <div id="reportbg" style="display: none; width: 450px;">
                                    	    <?php if ($_SESSION['UID'] != ""): ?>
                                            <div class="p1"><?php echo $this->_tpl_vars['ch_reptxt3']; ?>
</div>
                                            <form id="reportbg_form">
                                                <div><input type="hidden" name="rbguid" value="<?php echo $this->_tpl_vars['minfo'][0]['uid']; ?>
"><input type="hidden" name="rbgfromuid" value="<?php if ($_SESSION['UID'] == ""): ?>0<?php else: ?><?php echo $_SESSION['UID']; ?>
<?php endif; ?>"></div>
                                                <div class="pt4" align="center" style="padding-bottom: 4px;"><input type="button" value="<?php echo $this->_tpl_vars['up_btncontinue']; ?>
" name="continuebgbtn" onclick="ShowContent('respdiv2'); thisDiv('yes'); ldiv('repbgdiv'); report_submit('bgimage'); location.href='#brep';">&nbsp;&nbsp;<input type="button" value="<?php echo $this->_tpl_vars['up_btncancel']; ?>
" name="cancelbtn" onclick="HideContent('reportbg');"></div>
                                            </form>
                                            <?php else: ?>
                                        	<div class="p5"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/login?next=user/<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
"><?php echo $this->_tpl_vars['snavlogin']; ?>
</a> <?php echo $this->_tpl_vars['uch_shtxt8']; ?>
</div>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <div id="respdiv2" style="display: none;"></div>
                                        <div id="loading_bgrep" style="display: none;"><table cellpadding=5 cellspacing=0 border=0><tr><td><?php echo $this->_tpl_vars['adm_setgen79']; ?>
</td></tr></table></div>
                                    </td>
                                </tr>
                                
                            </table>
                            <table border="0" width="960" cellpadding="0" cellspacing="0" align="center">
                        	<tr>
                        	    <td><a id="brep"></a></td>
                        	</tr>
                            </table>
                        <?php endif; ?>

	    <script language="javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/ajaxresponder.js" type="text/javascript"></script>
	    <input type="hidden" name="ldivx" id="ldivx" value="">
    	    <input type="hidden" name="thisDiv" id="thisDiv" value="">
	    <div style="clear: both;"></div>
	    <script type="text/javascript"> set_bb_transpmaintbl(<?php echo $this->_tpl_vars['tinfo'][0]['th_transp']-50; ?>
); </script>
	    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'pmsg_count_new', 'assign' => 'total_msg')), $this); ?>

	    <?php if ($this->_tpl_vars['total_msg'] > 0): ?><script type="text/javascript">blinkId('newmsgicon'); blinkId('newmsgnr');</script><?php endif; ?>
    </body>
</html>