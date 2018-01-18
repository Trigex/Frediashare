<?php /* Smarty version 2.6.26, created on 2009-11-10 15:21:37
         compiled from auth_table.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'pmsg_count_new', 'auth_table.tpl', 109, false),array('insert', 'audio_count', 'auth_table.tpl', 110, false),array('insert', 'image_count', 'auth_table.tpl', 111, false),array('insert', 'video_count', 'auth_table.tpl', 112, false),array('insert', 'friend_count', 'auth_table.tpl', 113, false),)), $this); ?>
<?php if ($_SESSION['UID'] == ""): ?>
<!-- BEGIN MEMBER AUTHENTIFICATION TABLE -->
	    <table width="100%" border="0" cellspacing="0" cellpadding="2" align=center class="">
		<tr>
		    <td class="bold"><?php echo $this->_tpl_vars['memauth']; ?>
</td>
		</tr>
	    </table>
	    <table width="100%" border="0" cellspacing="0" cellpadding="5" align=center class="br1">
		<tr>
		    <td>
			<table width="100%" cellpadding="0" cellspacing="0" border=0>
			    <tr>
				<td class="pt10">
				    <table border="0" cellspacing="2" cellpadding="1" id="login_tbl" align=center width="85%">
				    <form name="home_login" action="<?php if ($this->_tpl_vars['sbtn'] == 'main' || $this->_tpl_vars['sbtn'] == 'reg'): ?><?php echo $this->_tpl_vars['base_url']; ?>
/login<?php else: ?><?php endif; ?>" method="post">
					<tr>
					    <td align="right" class="types"><?php echo $this->_tpl_vars['memusername']; ?>
</td>
					    <td><input type="text" size="20" class="ff" name="user" value="<?php echo $_REQUEST['user']; ?>
"></td>
					</tr>
					<tr>
					    <td align="right" class="types"><?php echo $this->_tpl_vars['mempassword']; ?>
</td>
					    <td><input type="password" size="20" class="ff" name="pass"></td>
					</tr>
					<tr>
					    <td></td>
					    <td align="left">
						<input type="hidden" name="logged" value="logged">
						<input type="submit" value="<?php echo $this->_tpl_vars['memloginbtn']; ?>
" class="fb">
					    </td>
					</tr>
					<tr>
					    <td colspan="2" class="nopad">
						<table cellspacing="2" cellpadding="1" border="0" align="center">
						    <tr>
							<td><?php if ($this->_tpl_vars['username_recovery'] == '1'): ?><a href="javascript:void(0)" onClick="ShowContent('recoveruser'); HideContent('recoverpass'); setclass_act('fptxt1'); <?php if ($this->_tpl_vars['password_recovery'] == '1'): ?>changeclass_inact('fptxt');<?php endif; ?>"><span id="fptxt1" class=""><?php echo $this->_tpl_vars['memuserforgot']; ?>
</span></a> <?php if ($this->_tpl_vars['password_recovery'] == '1'): ?>|<?php endif; ?> <?php endif; ?></td>
							<td><?php if ($this->_tpl_vars['password_recovery'] == '1'): ?><a href="javascript:void(0)" onClick="ShowContent('recoverpass'); HideContent('recoveruser'); setclass_act('fptxt'); <?php if ($this->_tpl_vars['username_recovery'] == '1'): ?>changeclass_inact('fptxt1');<?php endif; ?>"><span id="fptxt" class=""><?php echo $this->_tpl_vars['memforgot']; ?>
</span></a><?php endif; ?></td>
						    </tr>
						</table>
					    </td>
					</tr>
				    </form>
				    </table>
				    
				    <?php if ($this->_tpl_vars['username_recovery'] == '1' || $this->_tpl_vars['password_recovery'] == '1'): ?>
				    <table border="0" cellspacing="0" cellpadding="0" align=center width="95%">
					<tr>
					    <td>
						<form id="rec_pass">
						<div id="recoverpass" style="display: none; padding: 10px;" class="br1">
						<?php if ($this->_tpl_vars['password_recovery'] == '1'): ?>
						    <table cellpadding=1 cellspacing=2 border=0 align=center>
							<tr>
							    <td colspan=2><?php echo $this->_tpl_vars['memwhatusername']; ?>
</td>
							</tr>
							<tr>
							    <td><input type="text" name="recuser" class="ff" size="20"></td>
							    <td><input type="button" name="recsend" class="fb" value="<?php echo $this->_tpl_vars['memrecoverbtn']; ?>
" onclick="thisDiv('yes'); ldiv('recpass'); recoverpass('confirm');">&nbsp;<input type="button" name="reccancel" class="fb" value="<?php echo $this->_tpl_vars['memcancelbtn']; ?>
" onclick="HideContent('recoverpass'); changeclass_inact('fptxt');"></td>
							</tr>
						    </table>
						    <div id="recpass" align="center" style="padding: 5px;"></div>
						<?php endif; ?>
						</div>
						<div id="recoveruser" style="display: none; padding: 10px;" class="br1">
						<?php if ($this->_tpl_vars['username_recovery'] == '1'): ?>
						    <table cellpadding=1 cellspacing=2 border=0 align=center>
							<tr>
							    <td colspan=2><?php echo $this->_tpl_vars['memwhatemail']; ?>
</td>
							</tr>
							<tr>
							    <td><input type="text" name="recemail" class="ff" size="20"></td>
							    <td><input type="button" name="recsendemail" class="fb" value="<?php echo $this->_tpl_vars['memrecoverbtn']; ?>
" onclick="thisDiv('yes'); ldiv('recpass2'); recoverpass('user');">&nbsp;<input type="button" name="reccancel" class="fb" value="<?php echo $this->_tpl_vars['memcancelbtn']; ?>
" onclick="HideContent('recoveruser'); changeclass_inact('fptxt1');"></td>
							</tr>
						    </table>
						    <div id="recpass2" align="center" style="padding: 5px;"></div>
						<?php endif; ?>
						</div>
						<div id="loading_rec" style="display: none; margin-top: 5px;" align="center">
						    <table cellpadding=5 cellspacing=0 border=0>
							<tr><td><?php echo $this->_tpl_vars['adm_setgen79']; ?>
</td><td><?php echo $this->_tpl_vars['loading_gif']; ?>
</td></tr>
						    </table>
						</div>
						</form>
					    </td>
					</tr>
				    </table>
				    <script language="javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/ajaxresponder.js" type="text/javascript"></script>
				    <input type="hidden" name="ldivx" id="ldivx" value="">
				    <input type="hidden" name="thisDiv" id="thisDiv" value="">
				    <?php endif; ?>
				    <table border="0" cellspacing="0" cellpadding="0" align=center>
					<tr>
					    <td align=center class="pt10">
						<?php echo $this->_tpl_vars['memtext1']; ?>
<?php echo $this->_tpl_vars['memtext2']; ?>

					    </td>
					</tr>
				    </table>
				</td>
			    </tr>
			</table>
		    </td>
		</tr>
	    </table>
<!-- END MEMBER AUTHENTIFICATION TABLE -->	    
<?php endif; ?>

<?php if ($_SESSION['UID'] != ""): ?>
<!-- BEGIN AUTHENTIFIED MEMBER STATUS TABLE -->
	<?php if ($this->_tpl_vars['site_theme'] == 'blue'): ?><div class="br2"><?php else: ?><div class="br1"><?php endif; ?>
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'pmsg_count_new', 'assign' => 'total_msg')), $this); ?>

	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'audio_count', 'assign' => 'adocount', 'uid' => $_SESSION['UID'])), $this); ?>

	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'image_count', 'assign' => 'idocount', 'uid' => $_SESSION['UID'])), $this); ?>

	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'video_count', 'assign' => 'vdocount', 'uid' => $_SESSION['UID'])), $this); ?>

	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'friend_count', 'assign' => 'frcount', 'uid' => $_SESSION['UID'])), $this); ?>

	    <table width="100%" border="0" cellspacing="1" cellpadding="1" class="grey">
		<?php if ($this->_tpl_vars['site_stats'] == '1'): ?>
		<tr>
		    <td colspan="2" class="lp">
		    <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>
			<table cellpadding=0 cellspacing=0 border=0 width="100%">
			    <tr>
				<td width="35%"><a href="javascript:void(0)" onclick="ReverseContentDisplay('site_statsa')"><span id="sitestatsa"><?php echo $this->_tpl_vars['memas']; ?>
</span></a></td>
				<td class="pt2">&nbsp;<img id="statsa" src="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/images/sign_plus.gif" width="10" height="10" alt="<?php echo $this->_tpl_vars['memas']; ?>
" onclick="ReverseContentDisplay('site_statsa')"></td>
			    </tr>
			</table>
			<div id="site_statsa" style="display: none;">
			    <table cellpadding=1 cellspacing=0>
				<tr><td><a href="javascript:void(0)" onclick="location.href='<?php echo $this->_tpl_vars['base_url']; ?>
/audios/featured'; return false;"><span class="gr1"><?php echo $this->_tpl_vars['mems1']; ?>
</span>(<?php echo $this->_tpl_vars['ta1']; ?>
)</a></td></tr>
				<tr><td><a href="javascript:void(0)" onclick="location.href='<?php echo $this->_tpl_vars['base_url']; ?>
/audios'; return false;"><span class="gr1"><?php echo $this->_tpl_vars['mems2']; ?>
</span>(<?php echo $this->_tpl_vars['ta2']; ?>
)</a></td></tr>
				<tr><td><a href="javascript:void(0)"><span class="gr1"><?php echo $this->_tpl_vars['mems3']; ?>
</span>(<?php echo $this->_tpl_vars['ta3']; ?>
)</a></td></tr>
				<tr><td><a href="javascript:void(0)"><span class="gr1"><?php echo $this->_tpl_vars['mems4']; ?>
</span>(<?php echo $this->_tpl_vars['ta4']; ?>
)</a></td></tr>
				<tr><td><a href="javascript:void(0)"><span class="gr1"><?php echo $this->_tpl_vars['mems5']; ?>
</span>(<?php echo $this->_tpl_vars['ta5']; ?>
)</a> <span class="gr1"><?php echo $this->_tpl_vars['mems51']; ?>
</span></td></tr>
			    </table>
			</div>
		    <?php endif; ?>
		    <?php if ($this->_tpl_vars['enable_images'] == '1'): ?>
			<table cellpadding=0 cellspacing=0 border=0 width="100%">
			    <tr>
				<td width="35%" class="pt2"><a href="javascript:void(0)" onclick="ReverseContentDisplay('site_statsi')"><span id="sitestatsi"><?php echo $this->_tpl_vars['memis']; ?>
</span></a></td>
				<td class="pt2">&nbsp;<img id="statsi" src="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/images/sign_plus.gif" width="10" height="10" alt="<?php echo $this->_tpl_vars['memis']; ?>
" onclick="ReverseContentDisplay('site_statsi')"></td>
			    </tr>
			</table>
			<div id="site_statsi" style="display: none;">
			    <table cellpadding=1 cellspacing=0>
				<tr><td><a href="javascript:void(0)" onclick="location.href='<?php echo $this->_tpl_vars['base_url']; ?>
/images/featured'; return false;"><span class="gr1"><?php echo $this->_tpl_vars['mems1']; ?>
</span>(<?php echo $this->_tpl_vars['ti1']; ?>
)</a></td></tr>
				<tr><td><a href="javascript:void(0)" onclick="location.href='<?php echo $this->_tpl_vars['base_url']; ?>
/images'; return false;"><span class="gr1"><?php echo $this->_tpl_vars['mems2']; ?>
</span>(<?php echo $this->_tpl_vars['ti2']; ?>
)</a></td></tr>
				<tr><td><a href="javascript:void(0)"><span class="gr1"><?php echo $this->_tpl_vars['mems3']; ?>
</span>(<?php echo $this->_tpl_vars['ti3']; ?>
)</a></td></tr>
				<tr><td><a href="javascript:void(0)"><span class="gr1"><?php echo $this->_tpl_vars['mems4']; ?>
</span>(<?php echo $this->_tpl_vars['ti4']; ?>
)</a></td></tr>
				<tr><td><a href="javascript:void(0)"><span class="gr1"><?php echo $this->_tpl_vars['mems5']; ?>
</span>(<?php echo $this->_tpl_vars['ti5']; ?>
)</a> <span class="gr1"><?php echo $this->_tpl_vars['mems51']; ?>
</span></td></tr>
			    </table>
			</div>
		    <?php endif; ?>
		    <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>
			<table cellpadding=0 cellspacing=0 border=0 width="100%">
			    <tr>
				<td width="35%" class="pt2"><a href="javascript:void(0)" onclick="ReverseContentDisplay('site_statsv')"><span id="sitestatsv"><?php echo $this->_tpl_vars['memvs']; ?>
</span></a></td>
				<td class="pt2">&nbsp;<img id="statsv" src="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/images/sign_plus.gif" width="10" height="10" alt="<?php echo $this->_tpl_vars['memvs']; ?>
" onclick="ReverseContentDisplay('site_statsv')"></td>
			    </tr>
			</table>
			<div id="site_statsv" style="display: none;">
			    <table cellpadding=1 cellspacing=0>
				<tr><td><a href="javascript:void(0)" onclick="location.href='<?php echo $this->_tpl_vars['base_url']; ?>
/videos/featured'; return false;"><span class="gr1"><?php echo $this->_tpl_vars['mems1']; ?>
</span>(<?php echo $this->_tpl_vars['tv1']; ?>
)</a></td></tr>
				<tr><td><a href="javascript:void(0)" onclick="location.href='<?php echo $this->_tpl_vars['base_url']; ?>
/videos'; return false;"><span class="gr1"><?php echo $this->_tpl_vars['mems2']; ?>
</span>(<?php echo $this->_tpl_vars['tv2']; ?>
)</a></td></tr>
				<tr><td><a href="javascript:void(0)"><span class="gr1"><?php echo $this->_tpl_vars['mems3']; ?>
</span>(<?php echo $this->_tpl_vars['tv3']; ?>
)</a></td></tr>
				<tr><td><a href="javascript:void(0)"><span class="gr1"><?php echo $this->_tpl_vars['mems4']; ?>
</span>(<?php echo $this->_tpl_vars['tv4']; ?>
)</a></td></tr>
				<tr><td><a href="javascript:void(0)"><span class="gr1"><?php echo $this->_tpl_vars['mems5']; ?>
</span>(<?php echo $this->_tpl_vars['tv5']; ?>
)</a> <span class="gr1"><?php echo $this->_tpl_vars['mems51']; ?>
</span></td></tr>
			    </table>
			</div>
		    <?php endif; ?>
		    </td>
		</tr>
		<?php endif; ?>
		<tr>
		    <td colspan=2 align=right class="prb"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/logout"><?php echo $this->_tpl_vars['snavlogout']; ?>
</a>
		</tr>
	    </table>
	</div>
<!-- END AUTHENTIFIED MEMBER STATUS TABLE -->	    
<?php endif; ?>