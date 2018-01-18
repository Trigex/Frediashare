<?php /* Smarty version 2.6.26, created on 2009-11-10 15:42:49
         compiled from _inc/chan/ch_theme.tpl */ ?>
<script language="JavaScript" src="<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/scripts/jscolor.js" type="text/javascript"></script>
<script language="JavaScript" src="<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/scripts/ctheme.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['base_url']; ?>
/modules/channels/scripts/ctheme.css" media="screen">
<form name="ctheme" method="post" action="" enctype="multipart/form-data">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_chthemetop.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <table width="100%" border="0" cellpadding="5" cellspacing="1">
	<tr>
	    <td width="50%" class="nopad" valign="top">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_cthemeleft.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    	    </td>
    	    <td width="50%" valign="top">
    		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/chan/_inc/inc_cthemeright.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    	    </td>
    	</tr>
    </table>
</form>