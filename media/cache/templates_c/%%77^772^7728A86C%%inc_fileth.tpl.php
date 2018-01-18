<?php /* Smarty version 2.6.26, created on 2009-11-10 15:41:22
         compiled from _inc/inc_fileth.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'uid_to_names', '_inc/inc_fileth.tpl', 4, false),array('insert', 'thsortdate', '_inc/inc_fileth.tpl', 7, false),array('insert', 'thsortfilters', '_inc/inc_fileth.tpl', 78, false),array('modifier', 'endconv', '_inc/inc_fileth.tpl', 7, false),)), $this); ?>
	<?php if ($this->_tpl_vars['btn'] == 'bvideo'): ?>
	    <table width="100%" cellpadding=0 cellspacing=0 border=0>
                <tr>
                    <td align="right"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'uid_to_names', 'assign' => 'auser', 'uid' => $_REQUEST['user'])), $this); ?>

                        <span class="italic">
                        <?php if ($_SESSION['UID'] != "" || $this->_tpl_vars['guests_categories_view'] == '1' || $this->_tpl_vars['guests_file_sorting'] == '1'): ?>
                            <?php if ($this->_tpl_vars['type'] == 'mr'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['videos_mr']; ?>
 <?php echo $this->_tpl_vars['videos_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['videos_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['type'] == 'mv'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['videos_mv']; ?>
 <?php echo $this->_tpl_vars['videos_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['videos_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['type'] == 'rf'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['videos_rf']; ?>
 <?php echo $this->_tpl_vars['videos_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['videos_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['type'] == 'md'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['videos_md']; ?>
 <?php echo $this->_tpl_vars['videos_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['videos_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['type'] == 'mre'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['fresp_txt28']; ?>
 <?php echo $this->_tpl_vars['videos_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['videos_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['type'] == 'tf'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['videos_tf']; ?>
 <?php echo $this->_tpl_vars['videos_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['videos_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['type'] == 'tr'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['videos_tr']; ?>
 <?php echo $this->_tpl_vars['videos_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['videos_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['type'] == 'ra'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['videos_rnd']; ?>
 <?php echo $this->_tpl_vars['videos_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['videos_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                        <?php else: ?>
                            <?php if ($_REQUEST['user'] != ""): ?><?php echo $_REQUEST['user']; ?>

                                <?php echo $this->_tpl_vars['videos_user']; ?>

                            <?php else: ?>
                                <?php echo $this->_tpl_vars['videos_mr']; ?>
 <?php echo $this->_tpl_vars['videos_main']; ?>

                            <?php endif; ?>
                        <?php endif; ?>
                        </span>
                    </td>
                </tr>
            </table> 
        <?php elseif ($this->_tpl_vars['btn'] == 'bimage'): ?>
	    <table width="100%" cellpadding=0 cellspacing=0 border=0>
                <tr>
                    <td align="right"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'uid_to_names', 'assign' => 'auser', 'uid' => $_REQUEST['user'])), $this); ?>

                        <span class="italic">
                        <?php if ($_SESSION['UID'] != "" || $this->_tpl_vars['guests_categories_view'] == '1' || $this->_tpl_vars['guests_file_sorting'] == '1'): ?>
                            <?php if ($this->_tpl_vars['type'] == 'mr'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['videos_mr']; ?>
 <?php echo $this->_tpl_vars['images_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['images_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['type'] == 'mv'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['videos_mv']; ?>
 <?php echo $this->_tpl_vars['images_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['images_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['type'] == 'rf'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['videos_rf']; ?>
 <?php echo $this->_tpl_vars['images_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['images_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['type'] == 'md'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['videos_md']; ?>
 <?php echo $this->_tpl_vars['images_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['images_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['type'] == 'mre'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['fresp_txt28']; ?>
 <?php echo $this->_tpl_vars['images_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['images_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['type'] == 'tf'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['videos_tf']; ?>
 <?php echo $this->_tpl_vars['images_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['images_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['type'] == 'tr'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['videos_tr']; ?>
 <?php echo $this->_tpl_vars['images_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['images_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['type'] == 'ra'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['videos_rnd']; ?>
 <?php echo $this->_tpl_vars['images_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['images_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                        <?php else: ?>
                            <?php if ($_REQUEST['user'] != ""): ?><?php echo $_REQUEST['user']; ?>

                                <?php echo $this->_tpl_vars['images_user']; ?>

                            <?php else: ?>
                                <?php echo $this->_tpl_vars['videos_mr']; ?>
 <?php echo $this->_tpl_vars['images_main']; ?>

                            <?php endif; ?>
                        <?php endif; ?>
                        </span>
                    </td>
                </tr>
            </table>
        <?php elseif ($this->_tpl_vars['btn'] == 'baudio'): ?>
    	    <table width="100%" cellpadding=0 cellspacing=0 border=0>
                <tr>
                    <td align="right"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'uid_to_names', 'assign' => 'auser', 'uid' => $_REQUEST['user'])), $this); ?>
<span class="italic">
                        <?php if ($_SESSION['UID'] != "" || $this->_tpl_vars['guests_categories_view'] == '1' || $this->_tpl_vars['guests_file_sorting'] == '1'): ?>
                            <?php if ($this->_tpl_vars['type'] == 'mr'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['videos_mr']; ?>
 <?php echo $this->_tpl_vars['audios_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['audios_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['type'] == 'mv'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['videos_mp']; ?>
 <?php echo $this->_tpl_vars['audios_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['audios_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['type'] == 'rf'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['videos_rf']; ?>
 <?php echo $this->_tpl_vars['audios_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['audios_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['type'] == 'md'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['videos_md']; ?>
 <?php echo $this->_tpl_vars['audios_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['audios_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['type'] == 'mre'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['fresp_txt28']; ?>
 <?php echo $this->_tpl_vars['audios_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['audios_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['type'] == 'tf'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['videos_tf']; ?>
 <?php echo $this->_tpl_vars['audios_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['audios_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['type'] == 'tr'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['videos_tr']; ?>
 <?php echo $this->_tpl_vars['audios_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['audios_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['type'] == 'ra'): ?><?php if ($_REQUEST['user'] != ""): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
's<?php else: ?><?php echo $this->_tpl_vars['auser']; ?>
's<?php endif; ?> <?php endif; ?><?php echo $this->_tpl_vars['videos_rnd']; ?>
 <?php echo $this->_tpl_vars['audios_main']; ?>
<?php if ($_REQUEST['category'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['audios_in']; ?>
<?php  global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);  ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rid'])) ? $this->_run_mod_handler('endconv', true, $_tmp) : smarty_modifier_endconv($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php endif; ?>
                        <?php else: ?>
                            <?php if ($_REQUEST['user'] != ""): ?><?php echo $_REQUEST['user']; ?>

                                <?php echo $this->_tpl_vars['audios_user']; ?>

                            <?php else: ?>
                                <?php echo $this->_tpl_vars['videos_mr']; ?>
 <?php echo $this->_tpl_vars['audios_main']; ?>

                            <?php endif; ?>
                        <?php endif; ?>
                        </span>
                    </td>
                </tr>
            </table>
        <?php elseif ($this->_tpl_vars['sbtn'] == 'myaud'): ?>
    	    <table width="100%" cellpadding=0 cellspacing=0 border=0>
                <tr>
                    <td width="80%" align="right"><span class="italic"><?php echo $this->_tpl_vars['myaudios_heading']; ?>
<?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortfilters', 'assign' => 'myflt', 'ts' => $_REQUEST['vtype'])), $this); ?>
<?php echo $this->_tpl_vars['myflt']; ?>
</span>
                </tr>
            </table>
        <?php elseif ($this->_tpl_vars['sbtn'] == 'myimg'): ?>
    	    <table width="100%" cellpadding=0 cellspacing=0 border=0>
                <tr>
                    <td width="80%" align="right"><span class="italic"><?php echo $this->_tpl_vars['myimages_heading']; ?>
<?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortfilters', 'assign' => 'myflt', 'ts' => $_REQUEST['vtype'])), $this); ?>
<?php echo $this->_tpl_vars['myflt']; ?>
</span>
                </tr>
            </table>
        <?php elseif ($this->_tpl_vars['sbtn'] == 'myvid'): ?>
    	    <table width="100%" cellpadding=0 cellspacing=0 border=0>
                <tr>
                    <td width="80%" align="right"><span class="italic"><?php echo $this->_tpl_vars['myvideos_heading']; ?>
<?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortfilters', 'assign' => 'myflt', 'ts' => $_REQUEST['vtype'])), $this); ?>
<?php echo $this->_tpl_vars['myflt']; ?>
</span>
                </tr>
            </table>
        <?php elseif ($this->_tpl_vars['sbtn'] == 'adm_search'): ?>
    	    <td class=bg><h2><?php echo $this->_tpl_vars['search_th1']; ?>
 '<?php echo $this->_tpl_vars['in']; ?>
' <?php echo $this->_tpl_vars['search_th2']; ?>
 '<?php echo $this->_tpl_vars['stype']; ?>
' <?php echo $this->_tpl_vars['search_th3']; ?>
 <?php echo $this->_tpl_vars['total']; ?>
 <?php if ($this->_tpl_vars['total'] == '1'): ?><?php echo $this->_tpl_vars['search_th4']; ?>
<?php else: ?><?php echo $this->_tpl_vars['search_th5']; ?>
<?php endif; ?></h2></td>
    	    <td class=bg align=right><h2><?php if ($this->_tpl_vars['total'] != '0'): ?> <?php echo $this->_tpl_vars['search_nr']; ?>
 [<?php echo $this->_tpl_vars['start_num']; ?>
-<?php echo $this->_tpl_vars['end_num']; ?>
] <?php echo $this->_tpl_vars['search_of']; ?>
 [<?php echo $this->_tpl_vars['total']; ?>
]<?php endif; ?></h2></td>
    	<?php endif; ?>