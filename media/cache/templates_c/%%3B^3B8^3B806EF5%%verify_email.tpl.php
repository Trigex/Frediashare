<?php /* Smarty version 2.6.26, created on 2009-11-10 15:39:16
         compiled from emails/verify_email.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'spchar', 'emails/verify_email.tpl', 11, false),)), $this); ?>
<div>DO NOT REPLY TO THIS EMAIL!</div>
<div>********************************</div>
<div>&nbsp;</div>
<div>Click the following link to get your account verified:</div>
<div>&nbsp;</div>
<div><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/signup/<?php echo $this->_tpl_vars['code']; ?>
"><?php echo $this->_tpl_vars['base_url']; ?>
/signup/<?php echo $this->_tpl_vars['code']; ?>
</a></div>
<div>&nbsp;</div>
<div>Again, please do not reply to this email. You must activate your account using the provided link!</div>
<div><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/signup/<?php echo $this->_tpl_vars['code']; ?>
"><?php echo $this->_tpl_vars['base_url']; ?>
/signup/<?php echo $this->_tpl_vars['code']; ?>
</a></div>
<div>&nbsp;</div>
<div><em>-The <?php echo ((is_array($_tmp=$this->_tpl_vars['site_name'])) ? $this->_run_mod_handler('spchar', true, $_tmp) : smarty_modifier_spchar($_tmp)); ?>
 Team!-</em></div>