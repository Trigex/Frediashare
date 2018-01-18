<?php /* Smarty version 2.6.26, created on 2009-11-10 15:26:45
         compiled from administration/main_audios.tpl */ ?>
<br>
<!-- BEGIN ADMIN AREA AUDIOS TABLE -->
<table width="950" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/_inc/inc_fileth.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0" class="br1">
    <tr>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/_inc/inc_filefilters.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </tr>
    <?php if ($this->_tpl_vars['sbtn'] != 'adm_areq'): ?>
    <tr>
        <td colspan=2 class="pad_borderbottom"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/_inc/inc_timefilters.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
    </tr>
    <?php endif; ?>
    <tr>
	<td valign="top" colspan=2 class="nopad_bg">
	    <table cellpadding=0 cellspacing=0 width="100%" border=0>
		<tr>
		    <td width="65%" valign="top">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/_inc/inc_grida.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/_inc/inc_lista.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		    </td>
		    
		    <td width="35%" valign=top class="p10">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/_inc/inc_previewfiles.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		    </td>
		</tr>
	    </table>
	</td>
    </tr>
</table>
<!-- END ADMIN AREA AUDIOS TABLE -->