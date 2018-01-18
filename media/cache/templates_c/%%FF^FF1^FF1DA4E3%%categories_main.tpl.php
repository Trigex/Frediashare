<?php /* Smarty version 2.6.26, created on 2009-11-10 15:26:31
         compiled from administration/categories_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'categ_to_name2', 'administration/categories_main.tpl', 73, false),array('insert', 'categ_count_audio1', 'administration/categories_main.tpl', 75, false),array('insert', 'categ_count_image1', 'administration/categories_main.tpl', 79, false),array('insert', 'categ_count1', 'administration/categories_main.tpl', 83, false),)), $this); ?>
<!-- BEGIN ADMIN AREA MAIN CATEGORIES TABLE -->
<?php if ($_SESSION['AUID'] != ""): ?>
<br>
<table width="950" cellpadding=2 cellspacing=0 border=0 align=center>
    <tr>
	<td class=""><h1><?php echo $this->_tpl_vars['adm_categheading']; ?>
</h1></td>
	<td class="" align="right"><?php if ($this->_tpl_vars['total'] != '0'): ?><?php echo $this->_tpl_vars['adm_categnr']; ?>
[<?php echo $this->_tpl_vars['start_num']; ?>
-<?php echo $this->_tpl_vars['end_num']; ?>
]<?php echo $this->_tpl_vars['adm_categof']; ?>
[<?php echo $this->_tpl_vars['total']; ?>
]<?php endif; ?></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr>
	<td class="p10" colspan=2>
	<form name="inboxmsg" method="post" action="">
	    <table width="100%" cellpadding="2" cellspacing="1" border=0 id="cat_tbl">
		<tr>
		    <td width="10%">
			<input type="button" name="categ_add" value="<?php echo $this->_tpl_vars['adm_categaddbtn']; ?>
" class="fb" onclick="location.href='<?php echo $this->_tpl_vars['admin_url']; ?>
/categories/add'; return false;">
		    </td>
		</tr>
	    </table>
	    <br>
	    <table width="100%" cellpadding="4" cellspacing="1" border=0>
	    <?php if ($this->_tpl_vars['categs'][0]['cid'] != ""): ?>
		<tr class="th">
		    <td align="center" width="3%"><input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) { checkAllmsg(document.inboxmsg['mid[]']); ShowContent('actdiv'); } else if (this.checked == false) { uncheckAllmsg(document.inboxmsg['mid[]']); HideContent('actdiv'); }"></td>
		    <td width="4%" align=center valign="bottom"><?php echo $this->_tpl_vars['adm_categth1']; ?>
</td>
		    <td width="13%" class="pl15" valign="bottom"><?php echo $this->_tpl_vars['adm_categth2']; ?>
</td>
		    <td width="15%" class="pl15" valign="bottom"><?php echo $this->_tpl_vars['adm_categth3']; ?>
</td>
		    <td width="7%" align=center><?php echo $this->_tpl_vars['adm_categth4']; ?>
</td>
		    <td width="7%" align=center><?php echo $this->_tpl_vars['adm_categth5']; ?>
</td>
		    <td width="7%" align=center><?php echo $this->_tpl_vars['adm_categth6']; ?>
</td>
		    <td width="7%" align=center><?php echo $this->_tpl_vars['adm_categth7']; ?>
</td>
		    <td width="7%" align=center><?php echo $this->_tpl_vars['adm_categth8']; ?>
</td>
		    <td width="7%" align=center><?php echo $this->_tpl_vars['adm_categth9']; ?>
</td>
		    <td width="7%" align=center valign=bottom><?php echo $this->_tpl_vars['adm_categth10']; ?>
</td>
		    <td width="17%" align=center valign="bottom"><?php echo $this->_tpl_vars['adm_categth11']; ?>
</td>
		</tr>
		
		<?php unset($this->_sections['aa']);
$this->_sections['aa']['name'] = 'aa';
$this->_sections['aa']['loop'] = is_array($_loop=$this->_tpl_vars['categs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['aa']['show'] = true;
$this->_sections['aa']['max'] = $this->_sections['aa']['loop'];
$this->_sections['aa']['step'] = 1;
$this->_sections['aa']['start'] = $this->_sections['aa']['step'] > 0 ? 0 : $this->_sections['aa']['loop']-1;
if ($this->_sections['aa']['show']) {
    $this->_sections['aa']['total'] = $this->_sections['aa']['loop'];
    if ($this->_sections['aa']['total'] == 0)
        $this->_sections['aa']['show'] = false;
} else
    $this->_sections['aa']['total'] = 0;
if ($this->_sections['aa']['show']):

            for ($this->_sections['aa']['index'] = $this->_sections['aa']['start'], $this->_sections['aa']['iteration'] = 1;
                 $this->_sections['aa']['iteration'] <= $this->_sections['aa']['total'];
                 $this->_sections['aa']['index'] += $this->_sections['aa']['step'], $this->_sections['aa']['iteration']++):
$this->_sections['aa']['rownum'] = $this->_sections['aa']['iteration'];
$this->_sections['aa']['index_prev'] = $this->_sections['aa']['index'] - $this->_sections['aa']['step'];
$this->_sections['aa']['index_next'] = $this->_sections['aa']['index'] + $this->_sections['aa']['step'];
$this->_sections['aa']['first']      = ($this->_sections['aa']['iteration'] == 1);
$this->_sections['aa']['last']       = ($this->_sections['aa']['iteration'] == $this->_sections['aa']['total']);
?>
		<tr class="td">
		    <td align="center"><input type="checkbox" name="mid[]" value="<?php echo $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['cid']; ?>
" onclick="ShowContent('actdiv')"></td>
		    <td align=center><?php echo $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['cid']; ?>
</td>
		    <td class="pl15">
			<a class="info" href="<?php echo $this->_tpl_vars['admin_url']; ?>
/categories/edit/<?php echo $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['name']; ?>

			<span><img src="<?php echo $this->_tpl_vars['catimg_url']; ?>
/<?php echo $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['image']; ?>
" width="<?php echo $this->_tpl_vars['categwidth']; ?>
" height="<?php echo $this->_tpl_vars['categheight']; ?>
" alt="<?php echo $this->_tpl_vars['categs'][$this->_sections['i']['index']]['name']; ?>
 class="thumb"></span>
			</a>
		    </td>
		    <td class="pl15"><?php echo $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['descrip']; ?>
</td>
		    <td align=center>
			<?php if ($this->_tpl_vars['categs'][$this->_sections['aa']['index']]['audio_uploads'] == 'yes'): ?>
			    <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/categories/a0/<?php echo $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['adm_categ_yes']; ?>
</a></td>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['categs'][$this->_sections['aa']['index']]['audio_uploads'] == 'no'): ?>
			    <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/categories/a1/<?php echo $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['adm_categ_no']; ?>
</a></td>
			<?php endif; ?>
		    <td align=center>
			<?php if ($this->_tpl_vars['categs'][$this->_sections['aa']['index']]['image_uploads'] == 'yes'): ?>
			    <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/categories/i0/<?php echo $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['adm_categ_yes']; ?>
</a></td>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['categs'][$this->_sections['aa']['index']]['image_uploads'] == 'no'): ?>
			    <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/categories/i1/<?php echo $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['adm_categ_no']; ?>
</a></td>
			<?php endif; ?>
		    </td>
		    <td align=center>
			<?php if ($this->_tpl_vars['categs'][$this->_sections['aa']['index']]['video_uploads'] == 'yes'): ?>
			    <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/categories/v0/<?php echo $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['adm_categ_yes']; ?>
</a></td>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['categs'][$this->_sections['aa']['index']]['video_uploads'] == 'no'): ?>
			    <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/categories/v1/<?php echo $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['adm_categ_no']; ?>
</a></td>
			<?php endif; ?>
		    </td>
		    <td align=center>
		    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'categ_to_name2', 'assign' => 'cn', 'cid' => $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['cid'])), $this); ?>

		    
		    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'categ_count_audio1', 'assign' => 'counta', 'cid' => $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['cid'])), $this); ?>

		    <?php if ($this->_tpl_vars['counta'][1] != '0'): ?><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/audioc/<?php echo $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['cid']; ?>
/all/all_time"><?php echo $this->_tpl_vars['counta'][1]; ?>
<?php else: ?><a>0</a><?php endif; ?></a>
		    </td>
		    <td align=center>
		    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'categ_count_image1', 'assign' => 'counti', 'cid' => $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['cid'])), $this); ?>

		    <?php if ($this->_tpl_vars['counti'][1] != '0'): ?><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/imagec/<?php echo $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['cid']; ?>
/all/all_time"><?php echo $this->_tpl_vars['counti'][1]; ?>
<?php else: ?><a>0</a><?php endif; ?></a>
		    </td>
		    <td align=center>
		    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'categ_count1', 'assign' => 'countv', 'cid' => $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['cid'])), $this); ?>

		    <?php if ($this->_tpl_vars['countv'][1] != '0'): ?><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/videoc/<?php echo $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['cid']; ?>
/all/all_time"><?php echo $this->_tpl_vars['countv'][1]; ?>
<?php else: ?><a>0</a><?php endif; ?></a>
		    </td>
		    <td align=center><?php if ($this->_tpl_vars['categs'][$this->_sections['aa']['index']]['active'] == '1'): ?><?php echo $this->_tpl_vars['adm_status_active']; ?>
<?php else: ?><?php echo $this->_tpl_vars['adm_status_inactive']; ?>
<?php endif; ?></td>
		    <td align=center>
			<?php if ($this->_tpl_vars['categs'][$this->_sections['aa']['index']]['active'] == '1'): ?> <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/categories/disable/<?php echo $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['adm_categaction2']; ?>
</a><?php endif; ?> <?php if ($this->_tpl_vars['categs'][$this->_sections['aa']['index']]['active'] == '0'): ?> <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/categories/enable/<?php echo $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['adm_categaction1']; ?>
</a><?php endif; ?><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/categories/edit/<?php echo $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['adm_categaction3']; ?>
</a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/categories/delete/<?php echo $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['cid']; ?>
" onClick='Javascript:return confirm("<?php echo $this->_tpl_vars['adm_categdelmsg']; ?>
<?php echo $this->_tpl_vars['categs'][$this->_sections['aa']['index']]['name']; ?>
 ?!");'><?php echo $this->_tpl_vars['adm_categaction4']; ?>
</a>
		    </td>
		</tr>
		<?php endfor; endif; ?>
		<tr>
                    <td colspan=4 class="nopad" valign="top">
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_selectactions.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </td>
                </tr> 
            <?php endif; ?>
	    </table>
	</form>
	</td>
    </tr>
</table>
<table cellpadding=2 cellspacing=1 border=0 width="100%">
    <tr>
        <td class="pag_bg" align="center" valign="top"><?php echo $this->_tpl_vars['link']; ?>
</td>
    </tr>
</table> 
<?php endif; ?>
<!-- END ADMIN AREA MAIN CATEGORIES TABLE -->