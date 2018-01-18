<?php /* Smarty version 2.6.26, created on 2009-11-10 15:39:35
         compiled from administration/main_members.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'viewnr', 'administration/main_members.tpl', 137, false),array('modifier', 'date_format', 'administration/main_members.tpl', 139, false),array('modifier', 'lower', 'administration/main_members.tpl', 158, false),array('modifier', 'capitalize', 'administration/main_members.tpl', 158, false),array('insert', 'getfield', 'administration/main_members.tpl', 147, false),array('insert', 'getcountrycode', 'administration/main_members.tpl', 158, false),array('insert', 'getarrayccode', 'administration/main_members.tpl', 158, false),)), $this); ?>

<!-- BEGIN ADMIN AREA MEMBERS TABLE -->
<br>
<table width="950" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
	<td class=""><h1><?php echo $this->_tpl_vars['adm_memheading']; ?>
</h1></td>
	<td class="" align="right"><?php if ($this->_tpl_vars['total'] != '0'): ?><?php echo $this->_tpl_vars['adm_memnr']; ?>
[<?php echo $this->_tpl_vars['start_num']; ?>
-<?php echo $this->_tpl_vars['end_num']; ?>
]<?php echo $this->_tpl_vars['adm_memof']; ?>
[<?php echo $this->_tpl_vars['total']; ?>
]<?php endif; ?></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr>
	<td class="p10" align="left">
	    <table cellpadding="0" cellspacing="0">
		<tr>
		    <td><a href="javascript:void(0)" onclick="ReverseSign('7'); ReverseContentDisplay('addnew');"><span id="memb7"><?php echo $this->_tpl_vars['adm_memnewacct']; ?>
</span></a></td>
		    <td valign="bottom" style="padding-bottom: 1px;" class="pl5"><img id="img7" class="cursor" src="<?php echo $this->_tpl_vars['theme_url']; ?>
/<?php echo $this->_tpl_vars['site_theme']; ?>
/images/sign_plus.gif" width="10" height="10" alt="<?php echo $this->_tpl_vars['adm_memnewacct']; ?>
" onclick="ReverseContentDisplay('addnew'); ReverseSign('7');"></td>
		</tr>
	    </table>
	</td>
	<td class="p10" align="right"><?php echo $this->_tpl_vars['adm_memtxt1']; ?>
</td>
    </tr>
    <tr>
	<td colspan="2" class="nopad_borderbottom">
	    <script language="javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/ajaxresponder.js" type="text/javascript"></script>
	    <input type="hidden" name="ldivx" id="ldivx" value="">
	    <input type="hidden" name="thisDiv" id="thisDiv" value="">
	    <div id="addnew" style="display: none;">
		<form id="addmemform">
		    <table cellpadding="0" cellspacing="0" border=0>
			<tr>
			    <td align="left" class="pl10" valign="top">
				<table cellpadding=2 cellspacing=0 border=0>
				    <tr>
					<td width="125"><?php echo $this->_tpl_vars['signup_user']; ?>
</td>
					<td align="left"><input type="text" name="reg_user" class="ff" size="25"></td> 
				    </tr>
				    <tr>
					<td><?php echo $this->_tpl_vars['signup_pass']; ?>
</td>
					<td align="left"><input type="password" name="reg_pass1" class="ff" size="25"></td>
				    </tr>
				    <tr>
					<td><?php echo $this->_tpl_vars['signup_pass_confirm']; ?>
</td>
					<td align="left"><input type="password" name="reg_pass2" class="ff" size="25"></td> 
				    </tr>
				    <tr>
					<td><?php echo $this->_tpl_vars['adm_memnewmail']; ?>
</td>
					<td align="left"><input type="text" name="reg_email" class="ff" size="25"></td>
				    </tr>
				</table>
				<table cellpadding=2 cellspacing=0 border=0>
                                    <tr>
                                        <td><input type="checkbox" name="sendemail"></td>
                                        <td class="pt3"><?php echo $this->_tpl_vars['adm_memnewsendmail']; ?>
</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="activemember" checked></td>
                                        <td class="pt3"><?php echo $this->_tpl_vars['adm_memnewactivemem']; ?>
</td>
                                    </tr>
                                </table>
				<table cellpadding="2" cellspacing="0" border=0>
				    <tr>
					<td><input type="button" class="fb" name="savebtn" value="<?php echo $this->_tpl_vars['adm_btnsave']; ?>
" onclick="thisDiv('yes'); ldiv('saverespdiv'); addmember('new');"></td>
					<td><input type="button" class="fb" name="cancelbtn" value="<?php echo $this->_tpl_vars['adm_memcancelbtn']; ?>
" onclick="ReverseContentDisplay('addnew'); ReverseSign('7');"></td>
				    </tr>
				</table>
				
				<table cellpadding="2" cellspacing="0" border=0 width="300">
				    <tr>
					<td align="left">
					    <div id="loading" style="display: none;">
						<table cellpadding=5 cellspacing=0 border=0>
						    <tr><td><?php echo $this->_tpl_vars['adm_setgen79']; ?>
</td><td><?php echo $this->_tpl_vars['loading_gif']; ?>
</td></tr>
						</table>
					    </div>
					    <div id="saverespdiv" style="display: block;"></div>
					</td>
				    </tr>
				</table>
			    </td>
			</tr>
		    </table>
		</form>
	    </div>
	</td>
    </tr>
    <tr>
	<td colspan="2" class="nopad_borderbottom p10">
	    <span class="gr"><?php echo $this->_tpl_vars['adm_memstxt1']; ?>
</span>
	    <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/registered"><span class="<?php if ($_GET['mtype'] == ""): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['ch_allchtxt']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

	    <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/registered?mtype=m1"><span class="<?php if ($_GET['mtype'] == 'm1'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['pr_chinfotype1s']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

	    <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/registered?mtype=m2"><span class="<?php if ($_GET['mtype'] == 'm2'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['pr_chinfotype2s']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

	    <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/registered?mtype=m3"><span class="<?php if ($_GET['mtype'] == 'm3'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['pr_chinfotype3s']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

	    <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/registered?mtype=m4"><span class="<?php if ($_GET['mtype'] == 'm4'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['pr_chinfotype4s']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

	    <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/registered?mtype=m5"><span class="<?php if ($_GET['mtype'] == 'm5'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['pr_chinfotype5s']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

	    <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/registered?mtype=m6"><span class="<?php if ($_GET['mtype'] == 'm6'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['pr_chinfotype6s']; ?>
</span></a>
	</td>
    </tr>
    <tr>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_searchfilters.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </tr>
    <tr>
	<td valign="top" colspan=2 class="p10">
	<form name="filesel" method="post" action="">
	    <table cellpadding=4 cellspacing=1 border=0 align=center class="cs1 rowstyle-alt no-arrow" id="stbl" width="100%">
		<tr>
		    <?php if ($this->_tpl_vars['members'][0]['uid'] != ""): ?><th class="th2" align="center" width="3%"><input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) { checkAllmya(document.filesel['mid[]']); ShowContent('actdiv'); } else if (this.checked == false) { uncheckAllmya(document.filesel['mid[]']); HideContent('actdiv'); }"></td><?php endif; ?>
		    <th class="sortable-numeric" width="4%"><?php echo $this->_tpl_vars['adm_memth1']; ?>
</th>
		    <th class="sortable-text"><?php echo $this->_tpl_vars['adm_memth2']; ?>
</th>
		    <?php if ($_GET['filter'] == 'most_subscribed'): ?><th class="sortable-numeric" width="11%"><?php echo $this->_tpl_vars['pr_chinfob28']; ?>
</th>
		    <?php elseif ($_GET['filter'] == 'most_viewed'): ?><th class="sortable-numeric" width="11%"><?php echo $this->_tpl_vars['adm_sortviews']; ?>
</th>
		    <?php elseif ($_GET['filter'] == 'last_login'): ?><th class="sortable-sortEnglishLonghandDateFormat" width="13%"><?php echo $this->_tpl_vars['adm_memth3']; ?>
</th>
		    <?php elseif ($_GET['filter'] == 'last_joined'): ?><th class="sortable-sortEnglishLonghandDateFormat" width="13%"><?php echo $this->_tpl_vars['myfr_th5']; ?>
</th>
		    <?php elseif ($_GET['filter'] == 'online' || $_GET['filter'] == 'offline'): ?><th class="sortable-text" width="10%"><?php echo $this->_tpl_vars['adm_memth5']; ?>

		    <?php else: ?>
		    <th class="sortable-numeric" width="11%"><?php echo $this->_tpl_vars['adm_sortviews']; ?>
</th>
		    <?php endif; ?>
		    <th class="sortable-text"><?php echo $this->_tpl_vars['adm_memth4']; ?>
</th>
		    <th class="sortable-text"><?php echo $this->_tpl_vars['adm_memupth']; ?>
</th>
		    <th class="sortable-text"><?php echo $this->_tpl_vars['adm_memth51']; ?>
</th>
		    <th class="sortable-numeric"><?php echo $this->_tpl_vars['adm_memth6']; ?>
</th>
		    <th class="sortable-numeric"><?php echo $this->_tpl_vars['adm_memth7']; ?>
</th>
		    <th class="sortable-numeric"><?php echo $this->_tpl_vars['adm_memth8']; ?>
</th>
		    <th width="18%"><?php echo $this->_tpl_vars['adm_memth9']; ?>
</th>
		    <?php if ($this->_tpl_vars['country_flags'] == '1'): ?><th class="sortable-sortImage"><?php echo $this->_tpl_vars['adm_memth10']; ?>
</th><?php endif; ?>
		</tr>
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['members']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<tr class="td">
		    <?php if ($this->_tpl_vars['members'][0]['uid'] != ""): ?><td class="th1" align="center"><input type="checkbox" name="mid[]" value="<?php echo $this->_tpl_vars['members'][$this->_sections['i']['index']]['uid']; ?>
" onclick="ShowContent('actdiv')"></td><?php endif; ?>
		    <td align=center><?php echo $this->_tpl_vars['members'][$this->_sections['i']['index']]['uid']; ?>
</td>
		    <td align=center>
			<a class="info" href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/<?php echo $this->_tpl_vars['members'][$this->_sections['i']['index']]['uid']; ?>
"><?php echo $this->_tpl_vars['members'][$this->_sections['i']['index']]['username']; ?>

			<span>
			    <img src="<?php echo $this->_tpl_vars['usrimg_url']; ?>
/<?php echo $this->_tpl_vars['members'][$this->_sections['i']['index']]['photo']; ?>
" width="<?php echo $this->_tpl_vars['avatar_width']; ?>
" height="<?php echo $this->_tpl_vars['avatar_height']; ?>
" alt="<?php echo $this->_tpl_vars['members'][$this->_sections['i']['index']]['username']; ?>
" class="<?php if ($this->_tpl_vars['members'][$this->_sections['i']['index']]['gender'] == 'M'): ?>user_img<?php elseif ($this->_tpl_vars['members'][$this->_sections['i']['index']]['gender'] == 'F'): ?>user_imgf<?php else: ?>user_img<?php endif; ?>">
			</span>
			</a>
		    </td>
		    <?php if ($_GET['filter'] == 'most_subscribed'): ?><td align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['members'][$this->_sections['i']['index']]['ch_subs'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</td>
		    <?php elseif ($_GET['filter'] == 'most_viewed'): ?><td align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['members'][$this->_sections['i']['index']]['ch_views'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</td>
		    <?php elseif ($_GET['filter'] == 'last_login'): ?><td align=center><?php echo ((is_array($_tmp=$this->_tpl_vars['members'][$this->_sections['i']['index']]['last_login'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B %e, %Y") : smarty_modifier_date_format($_tmp, "%B %e, %Y")); ?>
</td>
		    <?php elseif ($_GET['filter'] == 'last_joined'): ?><td align=center><?php echo ((is_array($_tmp=$this->_tpl_vars['members'][$this->_sections['i']['index']]['reg_on'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B %e, %Y") : smarty_modifier_date_format($_tmp, "%B %e, %Y")); ?>
</td>
		    <?php elseif ($_GET['filter'] == 'online' || $_GET['filter'] == 'offline'): ?><td align=center><?php if ($this->_tpl_vars['members'][$this->_sections['i']['index']]['is_logged'] == '1'): ?><?php echo $this->_tpl_vars['adm_memyes']; ?>
<?php else: ?><?php echo $this->_tpl_vars['adm_memno']; ?>
<?php endif; ?></td>
		    <?php else: ?><td align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['members'][$this->_sections['i']['index']]['ch_views'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</td>
		    <?php endif; ?>
		    <td align=center><?php if ($this->_tpl_vars['members'][$this->_sections['i']['index']]['is_active'] == '1'): ?><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/<?php echo $this->_tpl_vars['members'][$this->_sections['i']['index']]['uid']; ?>
/disable"><?php echo $this->_tpl_vars['adm_memyes']; ?>
</a><?php else: ?><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/<?php echo $this->_tpl_vars['members'][$this->_sections['i']['index']]['uid']; ?>
/enable"><?php echo $this->_tpl_vars['adm_memno']; ?>
</a><?php endif; ?></td>
		    <td align=center><?php if ($this->_tpl_vars['members'][$this->_sections['i']['index']]['can_upload'] == '1'): ?><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/up0/<?php echo $this->_tpl_vars['members'][$this->_sections['i']['index']]['uid']; ?>
"><?php echo $this->_tpl_vars['adm_memyes']; ?>
</a><?php else: ?><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/up1/<?php echo $this->_tpl_vars['members'][$this->_sections['i']['index']]['uid']; ?>
"><?php echo $this->_tpl_vars['adm_memno']; ?>
</a><?php endif; ?></td>
		    <td align=center>
			<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getfield', 'assign' => 'isban', 'field' => 'active', 'table' => 'banned_users', 'qfield' => 'ban_uid', 'qvalue' => $this->_tpl_vars['members'][$this->_sections['i']['index']]['uid'])), $this); ?>

			<?php if ($this->_tpl_vars['isban'] == '1'): ?><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/unban/<?php echo $this->_tpl_vars['members'][$this->_sections['i']['index']]['uid']; ?>
"><?php echo $this->_tpl_vars['adm_memact5']; ?>
</a>
			<?php else: ?><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/ban/<?php echo $this->_tpl_vars['members'][$this->_sections['i']['index']]['uid']; ?>
"><?php echo $this->_tpl_vars['adm_memact4']; ?>
</a><?php endif; ?>
		    </td>
		    <td align=center><a <?php if ($this->_tpl_vars['members'][$this->_sections['i']['index']]['files_audio'] > '0'): ?>href="<?php echo $this->_tpl_vars['admin_url']; ?>
/audiou/<?php echo $this->_tpl_vars['members'][$this->_sections['i']['index']]['uid']; ?>
/all/all_time"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['members'][$this->_sections['i']['index']]['files_audio'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</a></td>
		    <td align=center><a <?php if ($this->_tpl_vars['members'][$this->_sections['i']['index']]['files_image'] > '0'): ?>href="<?php echo $this->_tpl_vars['admin_url']; ?>
/imageu/<?php echo $this->_tpl_vars['members'][$this->_sections['i']['index']]['uid']; ?>
/all/all_time"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['members'][$this->_sections['i']['index']]['files_image'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</a></td>
		    <td align=center><a <?php if ($this->_tpl_vars['members'][$this->_sections['i']['index']]['files_video'] > '0'): ?>href="<?php echo $this->_tpl_vars['admin_url']; ?>
/videou/<?php echo $this->_tpl_vars['members'][$this->_sections['i']['index']]['uid']; ?>
/all/all_time"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['members'][$this->_sections['i']['index']]['files_video'])) ? $this->_run_mod_handler('viewnr', true, $_tmp) : smarty_modifier_viewnr($_tmp)); ?>
</a></td>
		    <td align=center> 
			<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/email/<?php echo $this->_tpl_vars['members'][$this->_sections['i']['index']]['uid']; ?>
"><?php echo $this->_tpl_vars['adm_memact1']; ?>
</a><?php if ($this->_tpl_vars['enable_inbox'] == '1'): ?><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/message/<?php echo $this->_tpl_vars['members'][$this->_sections['i']['index']]['uid']; ?>
"><?php echo $this->_tpl_vars['adm_memact2']; ?>
</a><?php endif; ?><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<a href="javascript:void(0)" onclick="if(confirm('<?php echo $this->_tpl_vars['adm_memdelmsg']; ?>
<?php echo $this->_tpl_vars['members'][$this->_sections['i']['index']]['username']; ?>
 ?!')) location.href='<?php echo $this->_tpl_vars['admin_url']; ?>
/members/delete/<?php echo $this->_tpl_vars['members'][$this->_sections['i']['index']]['uid']; ?>
'; return false;"><?php echo $this->_tpl_vars['adm_memact3']; ?>
</a></td>
		    <?php if ($this->_tpl_vars['country_flags'] == '1'): ?>
		    <td valign=middle align=center>
		    <?php if ($this->_tpl_vars['members'][$this->_sections['i']['index']]['from_country'] == ""): ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getcountrycode', 'assign' => 'ccode', 'ip' => $this->_tpl_vars['members'][$this->_sections['i']['index']]['from_ip'])), $this); ?>
<?php else: ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getarrayccode', 'assign' => 'ccode', 'country' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['members'][$this->_sections['i']['index']]['from_country'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)))), $this); ?>
<?php endif; ?>
			<img src="<?php echo $this->_tpl_vars['base_url']; ?>
/media/files_flags/<?php echo ((is_array($_tmp=$this->_tpl_vars['ccode'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
.gif" width="16" height="11" alt="<?php echo $this->_tpl_vars['members'][$this->_sections['i']['index']]['from_country']; ?>
" title="<?php echo $this->_tpl_vars['members'][$this->_sections['i']['index']]['from_country']; ?>
">
		    </td>
		    <?php endif; ?>
		</tr>
		<?php endfor; endif; ?>
	    </table>
	    <?php if ($this->_tpl_vars['members'][0]['uid'] != ""): ?>
	    <table cellpadding="5" cellspacing="0" align="left">
                <tr>
                    <td colspan=2><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_selectactions.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                </tr>
	    </table>
	    <?php endif; ?>
	</form>
	</td>
    </tr>
</table>
<table cellpadding=2 cellspacing=1 border=0 width="100%">
    <tr>
        <td class="pag_bg"><?php echo $this->_tpl_vars['link']; ?>
</td>
    </tr>
</table>
<!-- END ADMIN AREA MEMBERS TABLE -->