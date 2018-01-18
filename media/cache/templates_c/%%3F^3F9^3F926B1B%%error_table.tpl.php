<?php /* Smarty version 2.6.26, created on 2009-11-10 15:24:15
         compiled from administration/header/error_table.tpl */ ?>

<!-- BEGIN ERROR MESSAGE TABLE -->
<?php if ($this->_tpl_vars['err'] != ""): ?>
<div id="emsgdiv" style="display: block;">
<br>
<table  border="0" align="center" cellpadding="0" cellspacing="0" id="err_tbl" width="950">
    <tr>
	<td align=center>
<?php echo $this->_tpl_vars['err']; ?>

	</td>
	<td align="right" width="3" style="padding: 0px;"><a href="javascript:void(0)" onclick="HideContent('emsgdiv');"><?php echo $this->_tpl_vars['plist_txt54']; ?>
</a>&nbsp;</td>
    </tr>
</table>
</div>
<?php endif; ?>
<!-- END ERROR MESSAGE TABLE -->