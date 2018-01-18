<?php /* Smarty version 2.6.26, created on 2009-11-10 15:17:50
         compiled from success_table.tpl */ ?>

<!-- BEGIN SUCCESS MESSAGE TABLE -->
<?php if ($this->_tpl_vars['msg'] != ""): ?>
<div id="smsgdiv" style="display: block;">
<table  border="0" align="center" cellpadding="0" cellspacing="0" id="succ_tbl" width="950">
    <tr>
	<td align=center>
<?php echo $this->_tpl_vars['msg']; ?>

	</td>
	<td align="right" width="3" style="padding: 0px;"><a href="javascript:void(0)" onclick="HideContent('smsgdiv');"><?php echo $this->_tpl_vars['plist_txt54']; ?>
</a>&nbsp;</td>
    </tr>
</table>
</div>
<?php endif; ?>
<!-- END SUCCESS MESSAGE TABLE -->