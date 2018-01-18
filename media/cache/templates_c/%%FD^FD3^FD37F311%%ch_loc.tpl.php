<?php /* Smarty version 2.6.26, created on 2009-11-10 15:43:24
         compiled from _inc/chan/ch_loc.tpl */ ?>
<form name="chloc" id="chloc" method="post" action="">
<?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?><fieldset><legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('chloc_txt'); ReverseContentDisplay('chloc_div'); setclass_act2('chloc_fs');"><span id="chloc_fs"><?php echo $this->_tpl_vars['pr_chlmitem5']; ?>
</span></a></legend><?php endif; ?>
<div id="chloc_txt" style="display: <?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?>block<?php else: ?>none<?php endif; ?>;"><center><?php echo $this->_tpl_vars['pr_chinfop30']; ?>
</center></div>
<div id="chloc_div" style="display: <?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?>none<?php else: ?>block<?php endif; ?>;">
    <table width="100%" border="0" cellpadding="2" cellspacing="1">
	<tr><td colspan="2"><?php echo $this->_tpl_vars['pr_chinfop30']; ?>
</td></tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr><td><?php echo $this->_tpl_vars['pr_chinfop31']; ?>
</td><td><input type="text" name="ftown" class="ff width400" value="<?php echo $this->_tpl_vars['cinfo'][0]['inf_town']; ?>
"></td></tr>
        <tr><td><?php echo $this->_tpl_vars['pr_chinfop32']; ?>
</td><td><input type="text" name="fcity" class="ff width400" value="<?php echo $this->_tpl_vars['cinfo'][0]['inf_city']; ?>
"></td></tr>
        <tr><td><?php echo $this->_tpl_vars['pr_chinfop33']; ?>
</td><td><input type="text" name="fzip" class="ff width400" value="<?php echo $this->_tpl_vars['cinfo'][0]['inf_zip']; ?>
"></td></tr>
        <tr>
    	    <td><?php echo $this->_tpl_vars['pr_chinfop34']; ?>
</td>
    	    <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "countries.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
    	</tr>
    	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr>
    	    <td></td>
    	    <td>
    		<?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?><input type="button" name="chsave_location" value="<?php echo $this->_tpl_vars['pr_chinfop35']; ?>
" class="fb" onclick="setuserinfo('chloc');">
    		<?php else: ?><input type="submit" name="chsave_location" value="<?php echo $this->_tpl_vars['pr_chinfop35']; ?>
" class="fb"><?php endif; ?>
    		<?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?><input type="hidden" name="chloc_uid" value="<?php echo $this->_tpl_vars['minfo'][0]['uid']; ?>
"><div id="chloc_resp" class="pt5"></div><?php endif; ?>
    	    </td>
    	</tr>
    </table>
</div>
<?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?></fieldset><?php endif; ?>
</form>