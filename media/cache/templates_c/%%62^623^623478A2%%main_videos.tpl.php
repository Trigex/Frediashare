<?php /* Smarty version 2.6.26, created on 2009-11-10 15:41:22
         compiled from main_videos.tpl */ ?>

<!-- BEGIN VIDEOS TABLE -->
<table cellpadding="5" cellspacing="0" border=0 align=center width="950" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">                                                         
    <tr>
        <td class="" colspan="3">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_timefilters.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </td>
        <td width="20%" align="right"><?php if ($_SESSION['UID'] != "" || $this->_tpl_vars['guests_file_sorting'] == '1'): ?><?php if ($this->_tpl_vars['total'] != '0'): ?><?php echo $this->_tpl_vars['videos_nr']; ?>
[<?php echo $this->_tpl_vars['start_num']; ?>
-<?php echo $this->_tpl_vars['end_num']; ?>
]<?php echo $this->_tpl_vars['videos_of']; ?>
[<?php echo $this->_tpl_vars['total']; ?>
]<?php endif; ?><?php endif; ?></td>
    </tr>
</table> 
<table cellpadding="5" cellspacing="0" border=0 align=center class="width950b">
    <tr>
	<td class="nopad">
	    <form id="setview"><input type="hidden" name="viewmode" value="<?php echo $_SESSION['viewmode']; ?>
"></form>
	    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_listvideos.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</td>
    </tr>
</table>
<!-- END VIDEOS TABLE -->