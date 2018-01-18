<?php /* Smarty version 2.6.26, created on 2009-11-10 15:25:17
         compiled from administration/main_system.tpl */ ?>
<!-- BEGIN ADMIN AREA SYSTEM SETTINGS TABLE -->
<br>
<table align=center width="950" border=0 cellpadding=2 cellspacing=0>
    <tr>
	<td align="left" class=""><h1><?php echo $this->_tpl_vars['adm_setsysheading']; ?>
</h1></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="10" cellspacing="0" class="br1" id="sysset">
    <tr>
        <td class="p10"><?php echo $this->_tpl_vars['adm_setsystxt']; ?>
</td>
        <td align="right" class="p10"><a href="javascript:void(0)" onclick="expandall_sys();"><?php echo $this->_tpl_vars['adm_setexpand']; ?>
</a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<a href="javascript:void(0)" onclick="colapseall_sys();"><?php echo $this->_tpl_vars['adm_setcollapse']; ?>
</a></td>
    </tr>
    <tr>
	<td colspan="2">
	    <table cellpadding=10 cellspacing=0 border=0 align=left>
		<tr>
		    <td valign=top><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/_inc/inc_systools.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
		</tr>
	    </table>
	</td>
    </tr>
    <tr>
	<td class=grey width="50%" valign="top">
	    <table cellpadding=10 cellspacing=0 border=0 align=left width="100%">
		<tr>
		    <td valign=top><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/_inc/inc_sysaudioconv.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
		</tr>
		<tr>
		    <td valign=top><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/_inc/inc_sysimageconv.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
		</tr>
		<tr>
		    <td valign=top><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/_inc/inc_sysvideoconv.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
		</tr>
	    </table>
	</td>

	<td width="50%" valign=top class="grey">
	    <table cellpadding=10 cellspacing=0 border=0 align=left width="100%">
		<tr>
		    <td valign=top><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/_inc/inc_sysfilethumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
		</tr>
		<tr>
		    <td valign=top><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/_inc/inc_sysfileres.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
		</tr>
		<tr>
		    <td valign=top><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/_inc/inc_sysfiledel.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
		</tr>
	    </table>
	</td>
    </tr>
</table>
<!-- END ADMIN AREA SYSTEM SETTINGS TABLE -->