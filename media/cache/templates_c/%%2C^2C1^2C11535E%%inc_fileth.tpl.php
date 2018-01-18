<?php /* Smarty version 2.6.26, created on 2009-11-10 15:26:45
         compiled from administration/_inc/inc_fileth.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'uid_to_names', 'administration/_inc/inc_fileth.tpl', 2, false),array('insert', 'thsortdate', 'administration/_inc/inc_fileth.tpl', 2, false),array('insert', 'thsortfilters', 'administration/_inc/inc_fileth.tpl', 2, false),)), $this); ?>
    <?php if ($this->_tpl_vars['sbtn'] == 'alla'): ?>
	<td class=""><h1><?php if ($_REQUEST['user'] == ""): ?><?php echo $this->_tpl_vars['adm_audiosheading1']; ?>
<span class="f12"><?php if ($_REQUEST['categ'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['adm_filesin']; ?>
<?php global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[categ]); $smarty->assign('rid',$rid);  ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php else: ?><?php if ($_REQUEST['req'] == ""): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'uid_to_names', 'assign' => 'uname', 'uid' => $_REQUEST['user'])), $this); ?>
<?php echo $this->_tpl_vars['uname']; ?>
<?php echo $this->_tpl_vars['adm_audiosuser']; ?>
<?php else: ?><?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortfilters', 'assign' => 'myflt', 'ts' => $_REQUEST['type'])), $this); ?>
<?php echo $this->_tpl_vars['myflt']; ?>
</span></h1></td>
        <td class="" align=right><?php if ($this->_tpl_vars['total'] != '0'): ?><?php echo $this->_tpl_vars['adm_audiosnr']; ?>
 [<?php echo $this->_tpl_vars['start_num']; ?>
-<?php echo $this->_tpl_vars['end_num']; ?>
] <?php echo $this->_tpl_vars['adm_filesof']; ?>
 [<?php echo $this->_tpl_vars['total']; ?>
]<?php endif; ?></td>
    <?php elseif ($this->_tpl_vars['sbtn'] == 'alli'): ?>
	<td class=""><h1><?php if ($_REQUEST['user'] == ""): ?><?php echo $this->_tpl_vars['adm_imagesheading1']; ?>
<span class="f12"><?php if ($_REQUEST['categ'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['adm_filesin']; ?>
<?php global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[categ]); $smarty->assign('rid',$rid);  ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php else: ?><?php if ($_REQUEST['req'] == ""): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'uid_to_names', 'assign' => 'uname', 'uid' => $_REQUEST['user'])), $this); ?>
<?php echo $this->_tpl_vars['uname']; ?>
<?php echo $this->_tpl_vars['adm_imagesuser']; ?>
<?php else: ?><?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortfilters', 'assign' => 'myflt', 'ts' => $_REQUEST['type'])), $this); ?>
<?php echo $this->_tpl_vars['myflt']; ?>
</span></h1></td>
        <td class="" align=right><?php if ($this->_tpl_vars['total'] != '0'): ?><?php echo $this->_tpl_vars['adm_imagesnr']; ?>
 [<?php echo $this->_tpl_vars['start_num']; ?>
-<?php echo $this->_tpl_vars['end_num']; ?>
] <?php echo $this->_tpl_vars['adm_filesof']; ?>
 [<?php echo $this->_tpl_vars['total']; ?>
]<?php endif; ?></td>
    <?php elseif ($this->_tpl_vars['sbtn'] == 'allv'): ?>
	<td class=""><h1><?php if ($_REQUEST['user'] == ""): ?><?php echo $this->_tpl_vars['adm_videosheading1']; ?>
<span class="f12"><?php if ($_REQUEST['categ'] != ""): ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php echo $this->_tpl_vars['adm_filesin']; ?>
<?php global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[categ]); $smarty->assign('rid',$rid);  ?><?php echo $this->_tpl_vars['cname']; ?>
<?php endif; ?><?php else: ?><?php if ($_REQUEST['req'] == ""): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'uid_to_names', 'assign' => 'uname', 'uid' => $_REQUEST['user'])), $this); ?>
<?php echo $this->_tpl_vars['uname']; ?>
<?php echo $this->_tpl_vars['adm_videosuser']; ?>
<?php else: ?><?php endif; ?><?php endif; ?><?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortdate', 'assign' => 'myfrom', 'ts' => $_REQUEST['timesort'])), $this); ?>
<?php echo $this->_tpl_vars['myfrom']; ?>
<?php echo $this->_tpl_vars['thgtsigns']; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thsortfilters', 'assign' => 'myflt', 'ts' => $_REQUEST['type'])), $this); ?>
<?php echo $this->_tpl_vars['myflt']; ?>
</span></h1></td>
        <td class="" align=right><?php if ($this->_tpl_vars['total'] != '0'): ?><?php echo $this->_tpl_vars['adm_videosnr']; ?>
 [<?php echo $this->_tpl_vars['start_num']; ?>
-<?php echo $this->_tpl_vars['end_num']; ?>
] <?php echo $this->_tpl_vars['adm_filesof']; ?>
 [<?php echo $this->_tpl_vars['total']; ?>
]<?php endif; ?></td>
    <?php elseif ($this->_tpl_vars['sbtn'] == 'adm_areq' || $this->_tpl_vars['sbtn'] == 'adm_ireq' || $this->_tpl_vars['sbtn'] == 'adm_vreq'): ?>
	<td class=""><h1><?php if ($_REQUEST['type'] == 'audio'): ?><?php echo $this->_tpl_vars['adm_reqaudio']; ?>
<?php elseif ($_REQUEST['type'] == 'image'): ?><?php echo $this->_tpl_vars['adm_reqimage']; ?>
<?php elseif ($_REQUEST['type'] == 'video'): ?><?php echo $this->_tpl_vars['adm_reqvideo']; ?>
<?php endif; ?><?php if ($_REQUEST['show'] == 'featured'): ?><?php echo $this->_tpl_vars['adm_reqfeature']; ?>
<?php elseif ($_REQUEST['show'] == 'inappropriate'): ?><?php echo $this->_tpl_vars['adm_reqinapp']; ?>
<?php endif; ?></h1></td>
        <td class="" align=right><?php if ($this->_tpl_vars['total'] != '0'): ?><?php echo $this->_tpl_vars['adm_reqnr']; ?>
 [<?php echo $this->_tpl_vars['start_num']; ?>
-<?php echo $this->_tpl_vars['end_num']; ?>
]<?php echo $this->_tpl_vars['adm_reqof']; ?>
[<?php echo $this->_tpl_vars['total']; ?>
]<?php endif; ?></td>
    <?php elseif ($this->_tpl_vars['btn'] == 'adm_members'): ?>
	<td class=""><h1><?php echo $this->_tpl_vars['adm_membanheading']; ?>
</h1></td>
        <td class="" align=right><?php if ($this->_tpl_vars['total'] != '0'): ?><?php echo $this->_tpl_vars['adm_membannr']; ?>
[<?php echo $this->_tpl_vars['start_num']; ?>
-<?php echo $this->_tpl_vars['end_num']; ?>
]<?php echo $this->_tpl_vars['adm_membanof']; ?>
[<?php echo $this->_tpl_vars['total']; ?>
]<?php endif; ?></td>
    <?php endif; ?>