<?php /* Smarty version 2.6.26, created on 2009-11-10 15:39:18
         compiled from signup_success.tpl */ ?>
<!-- BEGIN SIGNUP SUCCESS TABLE -->
<table border="0" align="center" cellpadding="2" cellspacing="0" class="width950">
<?php if ($this->_tpl_vars['msg'] == ""): ?>
    <tr>
	<td width="60%" valign="top" class="pr15" align="center">
	    <h3>Welcome to <?php echo $this->_tpl_vars['site_name']; ?>
, <?php echo $_SESSION['USERNAME']; ?>
!</h3>
	    <?php echo $this->_tpl_vars['signup_success2']; ?>

	    <?php echo $this->_tpl_vars['signup_success3']; ?>
 <?php echo $this->_tpl_vars['site_name']; ?>
 <?php echo $this->_tpl_vars['signup_success4']; ?>
<br><br>
	    <?php if ($this->_tpl_vars['email_verification'] == '1'): ?>
	    <?php echo $this->_tpl_vars['signup_success5']; ?>

	    <?php endif; ?>
	</td>
    </tr>
<?php elseif ($this->_tpl_vars['msg'] != ""): ?>
<?php endif; ?>
    <tr>
	<td height="30"></td>
    </tr>
    <tr>
	<td align="center">
	    <table cellpadding="5" cellspacing="0" class="br" width="70%" border=0>
		<tr>
		    <td colspan=2 class="bg" align="center"><h2><?php echo $this->_tpl_vars['signup_success6']; ?>
</h2></td>
		</tr>
		<tr>
		    <td colspan=2 height="20"></td>
		</tr>
		<tr>
		    <td width="50%" align="center" class="pad"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_profile"><?php echo $this->_tpl_vars['signup_success7']; ?>
</a><?php echo $this->_tpl_vars['signup_success8']; ?>
</td>
		    <td width="50%" align="center" class="pad"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/categories"><?php echo $this->_tpl_vars['signup_success9']; ?>
</a><?php echo $this->_tpl_vars['signup_success10']; ?>
</td>
		</tr>
		<tr>
		    <td colspan=2 height="30"></td>
		</tr>
		<tr>
		    <td width="50%" align="center" class="pad"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/upload"><?php echo $this->_tpl_vars['signup_success11']; ?>
</a><?php echo $this->_tpl_vars['signup_success12']; ?>
</td>
		    <td width="50%" align="center" class="pad">
		    <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>
			<?php $this->assign('types', 'videos'); ?>
		    <?php elseif ($this->_tpl_vars['enable_images'] == '1'): ?>
			<?php $this->assign('types', 'images'); ?>
		    <?php elseif ($this->_tpl_vars['enable_audio'] == '1'): ?>
			<?php $this->assign('types', 'audios'); ?>
		    <?php endif; ?>
		    <a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['types']; ?>
"><?php echo $this->_tpl_vars['signup_success13']; ?>
</a><?php echo $this->_tpl_vars['signup_success14']; ?>
</td>
		</tr>
		<tr>
		    <td colspan=2 height="20"></td>
		</tr>
	    </table>
	</td>
    </tr>
    <tr>
	<td height="50"></td>
    </tr>
</table>
<!-- END SIGNUP SUCCESS TABLE -->