<?php /* Smarty version 2.6.26, created on 2009-11-10 15:24:15
         compiled from administration/login_table.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'getfield', 'administration/login_table.tpl', 48, false),)), $this); ?>

<!-- BEGIN ADMIN AREA AUTHENTIFICATION TABLE -->
	    <table width="35%" border="0" cellspacing="0" cellpadding="5" class="pt10" align="center">
		<tr>
		    <td class="bold"><?php echo $this->_tpl_vars['adm_loginheading']; ?>
</td>
		</tr>
	    </table>
	    <table width="35%" border="0" cellspacing="0" cellpadding="5" class="br1" align="center">
		<tr>
		    <td class="grey">
			<table width="100%" cellpadding="5" cellspacing="0" border=0>
			    <tr>
				<td>
				<form name="home_login" action="<?php echo $this->_tpl_vars['admin_url']; ?>
/main" method="post">
				    <table width="80%" border="0" cellspacing="0" cellpadding="2" id="login_tbl" align="center">
					<tr>
					    <td align="right" class="types"><?php echo $this->_tpl_vars['memusername']; ?>
</td>
					    <td><input type="text" size="25" class="ff" name="user" value="<?php echo $_REQUEST['user']; ?>
"></td>
					</tr>
					<tr>
					    <td align="right" class="types"><?php echo $this->_tpl_vars['mempassword']; ?>
</td>
					    <td><input type="password" size="25" class="ff" name="pass"></td>
					</tr>
					<tr>
					    <td></td>
					    <td align="left">
						<input type="hidden" name="logged" value="logged">
						<input type="submit" value="<?php echo $this->_tpl_vars['memloginbtn']; ?>
" class="fb">
					    </td>
					</tr>
					<?php if ($this->_tpl_vars['security_question'] != "" && $this->_tpl_vars['security_answer'] != ""): ?>
					<tr>
					    <td></td>
					    <td class="pt5"><a href="javascript:void(0)" onClick="ReverseContentDisplay('recoverpass')"><span id="fptxt"><?php echo $this->_tpl_vars['memforgot']; ?>
</span></a></td>
					</tr>
					<?php endif; ?>
				    </table>
				</form>
				<?php if ($this->_tpl_vars['security_question'] != "" && $this->_tpl_vars['security_answer'] != ""): ?>
				    <script language="javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/ajaxresponder.js" type="text/javascript"></script>
				    <input type="hidden" name="ldivx" id="ldivx" value="">
				    <input type="hidden" name="thisDiv" id="thisDiv" value="">
				    <form id="adminpassrecform">
				    <div id="recoverpass" style="display: none;" class="pt10">
					<table width="80%" border="0" cellspacing="2" cellpadding="0" align="center">
					    <tr>
						<td colspan="3">
						    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'question', 'field' => 'value', 'table' => 'configurations', 'qfield' => "configurations.option", 'qvalue' => $this->_tpl_vars['security_question'])), $this); ?>

						    <?php echo $this->_tpl_vars['question']; ?>

						</td>
					    </tr>
					    <tr>
						<td width="20"><input type="text" name="ranswer" class="ff" size="30"></td>
						<td>
						    <input type="button" name="recbtn" class="fb" value="<?php echo $this->_tpl_vars['memrecoverbtn']; ?>
" onclick="thisDiv('yes'); ldiv('adminpassrecresp'); recadminpass();">
						</td>
						<td>
						    <input type="button" name="cencelbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_playcancelbtn']; ?>
" onclick="ReverseContentDisplay('recoverpass');">
						</td>
					    </tr>
					    <tr>
						<td align="left" colspan="3">
						    <div id="loading" style="display: none;">
							<table cellpadding=5 cellspacing=0 border=0>
							    <tr><td><?php echo $this->_tpl_vars['adm_setgen79']; ?>
</td><td><?php echo $this->_tpl_vars['loading_gif']; ?>
</td></tr>
							</table>
						    </div>
						    <div id="adminpassrecresp"></div>
						</td>
					    </tr>
					</table>
				    </div>
				    </form>
				<?php endif; ?>
				</td>
			    </tr>
			</table>
		    </td>
		</tr>
	    </table>
<!-- END ADMIN AREA AUTHENTIFICATION TABLE -->	    