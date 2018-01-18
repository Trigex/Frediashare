<?php /* Smarty version 2.6.26, created on 2009-11-10 15:17:51
         compiled from footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'ad_status', 'footer.tpl', 2, false),array('insert', 'pmsg_count_new', 'footer.tpl', 46, false),)), $this); ?>
<!-- BEGIN FOOTER ADS TOP -->
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ad_status', 'assign' => 'check', 'aname' => 'footer_ads_top')), $this); ?>

<?php if ($this->_tpl_vars['check'] == '1'): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ads/footer_ads_top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
<br><br>
<?php endif; ?>
<!-- END FOOTER ADS TOP -->
<!-- BEGIN FOOTER -->
<?php 
global $conn;
global $smarty;
$qu1="select * from static_files where ff!='str' and ff!='ltl' and ff!='lt' and active='1'";
$rs1=$conn->execute($qu1);
$static=$rs1->getrows();
$smarty->assign('static',$static);
 ?>
<div id="footerOutside">
    <div id="footer">
	<table cellpadding="0" cellspacing="0" border=0 align=center>
	    <tr>
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['static']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
		    <td><?php if ($this->_tpl_vars['static'][$this->_sections['i']['index']]['active'] == '1' && $this->_tpl_vars['static'][$this->_sections['i']['index']]['ff'] != 'offline'): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/t/<?php echo $this->_tpl_vars['static'][$this->_sections['i']['index']]['file']; ?>
"><span class="<?php if ($this->_tpl_vars['sbtn'] == $this->_tpl_vars['static'][$this->_sections['i']['index']]['ff']): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['static'][$this->_sections['i']['index']]['fname']; ?>
</span></a><?php endif; ?></td>
		<?php endfor; endif; ?>
		<?php if ($this->_tpl_vars['rss_feeds'] == '1'): ?>
		    <td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/rss_feeds"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'feeds'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['footer_rss']; ?>
</span></a></td>
		<?php endif; ?>
	    </tr>
	</table>
        <p><?php echo $this->_tpl_vars['footer_text']; ?>
 Powered by <a href="http://www.mediasharesuite.com">MediaShareSuite &reg; Version <?php  echo MSS_VERSION, '.', MSS_PATCHLEVEL  ?></a></p>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN FOOTER ADS BOTTOM -->
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'ad_status', 'assign' => 'check', 'aname' => 'footer_ads_bottom')), $this); ?>

<?php if ($this->_tpl_vars['check'] == '1'): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ads/footer_ads_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
<?php endif; ?>
<!-- END FOOTER ADS BOTTOM -->
<?php if ($this->_tpl_vars['tres'] > 0): ?>
<script type="text/javascript">
    sh('preloader'); xajax_listare_resp('1', '<?php echo $this->_tpl_vars['vidid']; ?>
');
</script>
<?php endif; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'pmsg_count_new', 'assign' => 'total_msg')), $this); ?>

<?php if ($this->_tpl_vars['total_msg'] > 0): ?><script type="text/javascript">blinkId('newmsgicon'); blinkId('newmsgnr');</script><?php endif; ?>
</body>
</html>