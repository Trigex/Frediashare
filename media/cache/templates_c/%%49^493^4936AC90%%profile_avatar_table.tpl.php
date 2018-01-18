<?php /* Smarty version 2.6.26, created on 2009-11-10 15:43:26
         compiled from profile_avatar_table.tpl */ ?>
<!-- BEGIN PROFILE AVATAR TABLE -->	
	    <table width="90%" cellpadding=5 cellspacing=0 align="left" border=0 id="av_tbl">
		<tr>
		    <td class="grey">
			<table width="100%" cellpadding="5" cellspacing="0" border=0>
			    <tr>
				<td width="<?php echo $this->_tpl_vars['avatar_width']; ?>
" height="<?php echo $this->_tpl_vars['avatar_height']; ?>
">
				    <img src="<?php echo $this->_tpl_vars['usrimg_url']; ?>
/<?php if ($this->_tpl_vars['fields'][0]['photo'] == ""): ?>default.gif<?php else: ?><?php echo $this->_tpl_vars['fields'][0]['photo']; ?>
<?php endif; ?>" width="<?php echo $this->_tpl_vars['avatar_width']; ?>
" height="<?php echo $this->_tpl_vars['avatar_height']; ?>
" alt="my profile image" class="<?php if ($this->_tpl_vars['fields'][0]['gender'] == 'M'): ?>user_img<?php elseif ($this->_tpl_vars['fields'][0]['gender'] == 'F'): ?>user_imgf<?php else: ?>user_img<?php endif; ?>" boder="0">
				</td>
				<td valign="top">
				    <table cellpadding="5" cellspacing="0" border=0>
				    <?php if ($this->_tpl_vars['btn'] != 'adm_members'): ?>
					<tr>
					    <td colspan=2><?php echo $this->_tpl_vars['mypr_avtxt2']; ?>
</td>
					</tr>
					<tr>
					    <td colspan=2><input type="file" name="userpic" class="ff" id="file" size="25"></td>
					</tr>
					<tr>
					    <td colspan=2><?php echo $this->_tpl_vars['mypr_avtxt3']; ?>
</td>
					</tr>
				    <?php endif; ?>
					<tr>
					    <td width="5%"><input type="checkbox" name="delpic" value="1"></td>
					    <td><?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?><?php echo $this->_tpl_vars['adm_memdelimg']; ?>
<?php else: ?><?php echo $this->_tpl_vars['mypr_avtxt4']; ?>
<?php endif; ?></td>
					</tr>
				    </table>
				</td>
			    </tr>
			</table>
		    </td>
		</tr>
	    </table>
<!-- END PROFILE AVATAR TABLE -->	    