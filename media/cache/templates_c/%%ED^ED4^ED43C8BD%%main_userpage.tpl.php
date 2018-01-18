<?php /* Smarty version 2.6.26, created on 2009-11-10 15:42:29
         compiled from main_userpage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'keys_to_array', 'main_userpage.tpl', 32, false),)), $this); ?>
		    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_userpageheader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			    <table border=0 width="100%" cellpadding="0" cellspacing="0">
				<tr>
				    <td id="leftcol" valign="top" class="p5">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_userpageb1.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_userpageb2.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br>
					
					<?php if ($this->_tpl_vars['tinfo'][0]['th_subs'] == '1' && $this->_tpl_vars['tinfo'][0]['th_subspos'] == 'left'): ?>
					    <?php $this->assign('userimgw', 60); ?><?php $this->assign('userimgh', 60); ?><?php $this->assign('maxloop', 6); ?><?php $this->assign('pagbr', 3); ?>
					    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_userpageb3.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['tinfo'][0]['th_usubs'] == '1' && $this->_tpl_vars['tinfo'][0]['th_usubs_pos'] == 'left'): ?>
					    <?php $this->assign('userimgw', 60); ?><?php $this->assign('userimgh', 60); ?><?php $this->assign('maxloop', 6); ?><?php $this->assign('pagbr', 3); ?>
					    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_userpageb4.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['tinfo'][0]['th_friends'] == '1' && $this->_tpl_vars['tinfo'][0]['th_friends_pos'] == 'left'): ?>
					    <?php $this->assign('userimgw', 60); ?><?php $this->assign('userimgh', 60); ?><?php $this->assign('maxloop', 6); ?><?php $this->assign('pagbr', 3); ?>
					    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_userpageb6.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['shows'][0]['s_uid'] != "" && ( $this->_tpl_vars['minfo'][0]['ch_type'] == $this->_tpl_vars['pr_chinfotype3'] || $this->_tpl_vars['minfo'][0]['ch_type'] == $this->_tpl_vars['pr_chinfotype4'] )): ?>
					    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_userpageb5.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['tinfo'][0]['th_comm'] == '1' && $this->_tpl_vars['tinfo'][0]['th_comm_pos'] == 'left' && $this->_tpl_vars['minfo'][0]['ch_comm'] == 'yes' && $this->_tpl_vars['profile_comments'] == '1'): ?>
					    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_userpageb7.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br>
					<?php endif; ?>
				    </td>
				    
				    <td id="rightcol" valign="top" style="padding: 5px 0px 0px 20px;">
					<?php if ($this->_tpl_vars['tinfo'][0]['th_featvid'] == '1' && $this->_tpl_vars['f_key'] != ""): ?>
					    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_userpageb12.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br>
					<?php endif; ?>
					<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'keys_to_array', 'assign' => 'chpls', 'arr' => $this->_tpl_vars['tinfo'][0]['th_plistchan'])), $this); ?>

					<?php if ($this->_tpl_vars['tinfo'][0]['th_plist'] == '1' && $this->_tpl_vars['chpls'][0] != ""): ?>
					    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_userpageb8.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['tinfo'][0]['th_vid'] == '1' && ( $this->_tpl_vars['enable_videos'] == '1' || $this->_tpl_vars['enable_images'] == '1' || $this->_tpl_vars['enable_audio'] == '1' )): ?>
					    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_userpageb9.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['tinfo'][0]['th_vlog'] == '1' && $this->_tpl_vars['vlog'][0]['uid'] != ""): ?>
					    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_userpageb11.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['tinfo'][0]['th_fav'] == '1' && ( $this->_tpl_vars['enable_videos'] == '1' || $this->_tpl_vars['enable_images'] == '1' || $this->_tpl_vars['enable_audio'] == '1' )): ?>
					    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_userpageb10.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['tinfo'][0]['th_subs'] == '1' && $this->_tpl_vars['tinfo'][0]['th_subspos'] == 'right'): ?>
					    <?php $this->assign('userimgw', 90); ?><?php $this->assign('userimgh', 90); ?><?php $this->assign('maxloop', 4); ?><?php $this->assign('pagbr', 4); ?>
					    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_userpageb3.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['tinfo'][0]['th_usubs'] == '1' && $this->_tpl_vars['tinfo'][0]['th_usubs_pos'] == 'right'): ?>
					    <?php $this->assign('userimgw', 90); ?><?php $this->assign('userimgh', 90); ?><?php $this->assign('maxloop', 4); ?><?php $this->assign('pagbr', 4); ?>
					    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_userpageb4.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['tinfo'][0]['th_friends'] == '1' && $this->_tpl_vars['tinfo'][0]['th_friends_pos'] == 'right'): ?>
					    <?php $this->assign('userimgw', 90); ?><?php $this->assign('userimgh', 90); ?><?php $this->assign('maxloop', 4); ?><?php $this->assign('pagbr', 4); ?>
					    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_userpageb6.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['tinfo'][0]['th_comm'] == '1' && $this->_tpl_vars['tinfo'][0]['th_comm_pos'] == 'right' && $this->_tpl_vars['minfo'][0]['ch_comm'] == 'yes' && $this->_tpl_vars['profile_comments'] == '1'): ?>
					    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_userpageb7.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br>
					<?php endif; ?>
				    </td>
				</tr>
			    </table>
			</div>
		    </td>
		</tr>
	    </table>
	    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_userpagefooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>