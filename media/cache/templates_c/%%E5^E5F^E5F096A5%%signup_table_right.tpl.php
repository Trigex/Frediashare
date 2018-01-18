<?php /* Smarty version 2.6.26, created on 2009-11-10 15:21:13
         compiled from signup_table_right.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_select_date', 'signup_table_right.tpl', 75, false),)), $this); ?>

<!-- BEGIN SINGUP PAGE RIGHT TABLE -->
	    <table width="100%" border="0" cellspacing="0" cellpadding="2" id="" class="">
		<tr>
		    <td class="bold"><?php echo $this->_tpl_vars['signup_heading']; ?>
</td>
		</tr>
	    </table>
	    
	    <table width="100%" border="0" cellspacing="5" cellpadding="0" id="" class="br1">
		<tr>
		<td>
		<table width="100%" border="0" cellspacing="5" cellpadding="0" id="signup_tbl" class="">
		<tr>
		    <td class=grey>
			<table cellpadding=10 cellspacing=0>
			    <tr>
				<td align=left valign=top class="p15"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/warning.gif" alt="Warning!" width="46" height="40"></td>
				<td>
				    <?php echo $this->_tpl_vars['signup_txt1']; ?>

				    <?php echo $this->_tpl_vars['signup_txt2']; ?>

				</td>
			    </tr>
			</table>
		    </td>
		</tr>
    		<tr>
    		    <td class="grey" align="center">
			<form name="reg_form" action="<?php echo $this->_tpl_vars['base_url']; ?>
/signup" method="post">
			<table border="0" cellspacing="0" cellpadding="5">
			    <tr>
				<td align="left"><?php echo $this->_tpl_vars['signup_email']; ?>
</td>
				<td align="left"><input type="text" name="reg_email" class="ff" size="35" value="<?php echo $_REQUEST['reg_email']; ?>
"></td>
				<td></td>
			    </tr>
			    <tr>
				<td align="left"><?php echo $this->_tpl_vars['signup_pass']; ?>
</td>
				<td align="left"><input type="password" name="reg_pass1" class="ff" size="35" onKeyUp="updatePasswordStrength_new(this,'passwdRating',{ 'text':2 });"></td>
				<td></td>
			    </tr>
			    <tr>
				<td align="left" valign=top>&nbsp;<?php echo $this->_tpl_vars['signup_pass_strs']; ?>
</td>
				<td align=left colspan=2 class="pt0">
				    <div id="passwdRating">
					<div id="pass_meter" class="pass_meter" style="height: 5px;">
					    <div class="pass_meter_base" style="height: 5px;"></div>
					</div>
					<div style="display:inline;" id="ps-rating"><?php echo $this->_tpl_vars['passmeter6']; ?>
</div>
				    </div>
				</td>
			    </tr>
			    <tr>
				<td align="left"><?php echo $this->_tpl_vars['signup_pass_confirm']; ?>
</td>
				<td align="left"><input type="password" name="reg_pass2" class="ff" size="35"></td>
				<td></td>
			    </tr>
			    <tr>
				<td align="left"><?php echo $this->_tpl_vars['signup_user']; ?>
</td>
				<td align="left"><input type="text" name="reg_user" class="ff" size="35" value="<?php echo $_REQUEST['reg_user']; ?>
"></td>
				<td></td>
			    </tr>
			    <tr>
				<td align="left"><?php echo $this->_tpl_vars['pr_chinfop38']; ?>
</td>
				<td align="left"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "countries.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
				<td></td>
			    </tr>
			    <tr>
				<td align="left"><?php echo $this->_tpl_vars['signup_bdate']; ?>
</td>
				<td align="left">
				    <table cellpadding=0 cellspacing=0>
					<tr>
					<?php if ($this->_tpl_vars['date_selection'] == 'css'): ?>
					    <td><input type="text" readonly class="ff" size="35" name="reg_bdate" <?php if ($_REQUEST['reg_bdate'] != ""): ?>value="<?php echo $_REQUEST['reg_bdate']; ?>
"<?php endif; ?>></td>
					    <td valign="top" class="pl2"><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/calendar/cal.gif" width="16" height="16" border="0" alt="<?php echo $this->_tpl_vars['adm_setdatetxt']; ?>
" title="<?php echo $this->_tpl_vars['adm_setdatetxt']; ?>
" onclick="displayCalendar(document.forms[1].reg_bdate,'yyyy-mm-dd',this);"></td>
					<?php else: ?>
					    <td><?php echo smarty_function_html_select_date(array('prefix' => 'bd_','start_year' => "-109",'end_year' => "+1",'display_days' => true,'all_extra' => 'class="selbox"','month_extra' => 'style="width: 113px;"','day_extra' => 'style="width: 50px;"','year_extra' => 'style="width: 65px;"'), $this);?>
</td>
					<?php endif; ?>
					</tr>
				    </table>
				</td>
				<td></td>
			    </tr>
			    <tr>
				<td align="left"><?php echo $this->_tpl_vars['signup_gender']; ?>
</td>
				<td align="left" class="p5">
				    <table cellpadding=0 cellspacing=0>
					<tr>
					    <td valign="middle"><?php echo $this->_tpl_vars['mypr_infotxt8']; ?>
</td>
					    <td valign="top"><input type="radio" name="reg_gender" value="M" <?php if ($_REQUEST['reg_gender'] == 'M'): ?>checked<?php endif; ?>></td>
					    <td><input type="radio" name="reg_gender" value="F" <?php if ($_REQUEST['reg_gender'] == 'F'): ?>checked<?php endif; ?>></td>
					    <td valign="middle"><?php echo $this->_tpl_vars['mypr_infotxt9']; ?>
</td>
					</tr>
				    </table>
				</td>
				<td></td>
			    </tr>
			    <?php if ($this->_tpl_vars['signup_captcha'] == '1'): ?>
			    <tr>
				<td align="left"><?php echo $this->_tpl_vars['signup_captchatext']; ?>
</td>
				<td align="left"><input name="reg_code" class="ff" size="35" type="text"></td>
				<td><img src="<?php echo $this->_tpl_vars['base_url']; ?>
/captcha" alt="<?php echo $this->_tpl_vars['signup_captchatext']; ?>
"></td>
			    </tr>
			    <?php endif; ?>
			    <tr>
				<td align="left">&nbsp;<?php echo $this->_tpl_vars['signup_invite']; ?>
</td>
				<td align="left"><input type="text" name="reg_icode" class="ff" size="35" value="<?php echo $_REQUEST['reg_icode']; ?>
"></td>
				<td></td>
			    </tr>
			    <tr>
				<td align="right">
				<?php if ($_REQUEST['reg_years'] == ""): ?>
				<input type="checkbox" name="reg_years">
				<?php else: ?>
				<input type="checkbox" name="reg_years" checked>
				<?php endif; ?>
				</td>
				<td align=left><?php echo $this->_tpl_vars['signup_age']; ?>
</td>
				<td></td>
			    </tr>
			    <tr>
				<td align="right">
				<?php if ($_REQUEST['reg_terms'] == ""): ?>
				<input type="checkbox" name="reg_terms">
				<?php else: ?>
				<input type="checkbox" name="reg_terms" checked>
				<?php endif; ?>
				</td>
				<td align=left colspan=2><?php echo $this->_tpl_vars['signup_terms']; ?>
</td>
			    </tr>
			    <tr><td colspan=3>&nbsp;</td></tr>
			    <tr>
				<td></td>
				<td colspan=2 align="left">
				    <input type="submit" value="<?php echo $this->_tpl_vars['signup_btnsend']; ?>
" class="fb">&nbsp;&nbsp;
				    <input type="submit" value="<?php echo $this->_tpl_vars['signup_btncancel']; ?>
" class="fb" name="scancel">
				    <input type="hidden" name="regged" value="regged">
				</td>
			    </tr>
			</table>
			</form>
		    </td>
		</tr>
		</table>
		</td>
		</tr>
	    </table>
<!-- END SIGNUP PAGE RIGHT TABLE -->