<?php /* Smarty version 2.6.26, created on 2009-11-10 15:26:36
         compiled from administration/player_main_audio.tpl */ ?>
<!-- BEGIN ADMIN AREA FLASH PLAYER SETTINGS TABLE -->
<br>
<table cellspacing="0" cellpadding="5"  width="950" border=0 align=center>
    <tr>
	<td class="" colspan="2"><h1><?php echo $this->_tpl_vars['adm_playeraheading']; ?>
</h1></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr>
	<td class="grey" align="left" valign="top">
	    <br>
	    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/_inc/inc_playeraudio_site.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</td>
	<td class="grey" align="left" valign="top">
	    <br>
	    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administration/_inc/inc_playeraudio_embed.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</td>
    </tr>
</table>
<!-- END ADMIN AREA FLASH PLAYER SETTINGS TABLE -->