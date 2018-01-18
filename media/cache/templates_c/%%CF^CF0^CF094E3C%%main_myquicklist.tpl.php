<?php /* Smarty version 2.6.26, created on 2009-11-10 15:21:41
         compiled from main_myquicklist.tpl */ ?>

<!-- BEGIN MY QUICKLIST TABLE -->
<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
    <tr>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_myfilestabs.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </tr>
</table>
<table border="0" align="center" cellpadding="5" cellspacing="0" class="width900b">
<?php if ($this->_tpl_vars['my_msg'] != "" && $_SESSION['ignore_quicklist'] != '1'): ?>
    <tr>
	<td colspan="2" class=""><?php echo $this->_tpl_vars['my_msg']; ?>
</td>
    </tr>
<?php endif; ?>
    <tr>
        <td colspan=2 class="nopad">
            <form id="setview"><input type="hidden" name="viewmode" value="<?php echo $_SESSION['viewmode']; ?>
"></form>
            <div id="plaudio" <?php if ($_REQUEST['page'] == "" && $_REQUEST['pagei'] == "" && $_REQUEST['vtype'] == "" && $_REQUEST['itype'] == ""): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>>
                <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_listaudios.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php endif; ?>
            </div>
            <div id="plimage" style="<?php if ($this->_tpl_vars['enable_audio'] == '1' && ( $_REQUEST['pagei'] == "" && $_REQUEST['itype'] == "" )): ?>display: none;<?php elseif ($this->_tpl_vars['enable_audio'] == '0' && $this->_tpl_vars['enable_images'] == '0'): ?>display: none;<?php elseif ($this->_tpl_vars['enable_audio'] == '0' && $_REQUEST['vtype'] != ""): ?>display: none;<?php else: ?>display: block;<?php endif; ?>">
                <?php if ($this->_tpl_vars['enable_images'] == '1'): ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_listimages.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php endif; ?>
            </div>
            <div id="plvideo" style="<?php if ($this->_tpl_vars['enable_audio'] != '1' && $this->_tpl_vars['enable_images'] != '1'): ?>display: block;<?php elseif ($_REQUEST['page'] != "" || $_REQUEST['vtype'] != ""): ?>display: block;<?php else: ?>display: none;<?php endif; ?>">
                <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_listvideos.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php endif; ?>
            </div>
        </td>
    </tr>
</table>
<!-- END MY QUICKLIST TABLE -->