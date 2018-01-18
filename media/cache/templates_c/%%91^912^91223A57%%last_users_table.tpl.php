<?php /* Smarty version 2.6.26, created on 2009-11-10 15:17:51
         compiled from last_users_table.tpl */ ?>

<!-- BEGIN LAST USERS TABLE -->
	<form id="getusersform">
	    <table border="0" cellspacing="0" cellpadding="0" class="" width="100%">
		<tr>
		    <td class="f10"><?php echo $this->_tpl_vars['hpbox_seealso']; ?>
</td>
		    <?php if ($this->_tpl_vars['users_last'] == '1'): ?>
		    <td class="f10">
			<a href="javascript:void(0)" onclick="thisDiv('yes'); ldiv('getusersresp'); getusers('last'); <?php if ($this->_tpl_vars['users_online'] == '1'): ?>setclass_act('pane1');<?php endif; ?> <?php if ($this->_tpl_vars['users_last'] == '1'): ?>changeclass_inact('pane2');<?php endif; ?>"><span id="pane1"><span class="f10"><?php echo $this->_tpl_vars['last_online']; ?>
</span></span></a>
		    </td>
		    <?php endif; ?>
		    <?php if ($this->_tpl_vars['users_online'] == '1'): ?>
		    <td class="f10" align="right">
			<a href="javascript:void(0)" onclick="thisDiv('yes'); ldiv('getusersresp'); getusers('online'); <?php if ($this->_tpl_vars['users_online'] == '1'): ?>setclass_act('pane2');<?php endif; ?> <?php if ($this->_tpl_vars['users_last'] == '1'): ?>changeclass_inact('pane1');<?php endif; ?>"><span id="pane2"><span class="f10"><?php echo $this->_tpl_vars['last_onlinenow']; ?>
</span></span></a>
		    </td>
		    <?php endif; ?>
		</tr>
		<tr>
		    <td class="nopad" colspan="3">
			<div id="getusersresp"></div>
			<div id="loading2" style="display: none; padding-top: 5px;" align="left" class="f10">
			    <table cellpadding=0 cellspacing=0 border=0>
				<tr><td class=""><?php echo $this->_tpl_vars['view_loading']; ?>
</td><td><?php echo $this->_tpl_vars['loading_gif']; ?>
</td></tr>
			    </table>
			</div>
		    </td>
		</tr>
	    </table>
	</form>
<!-- END LAST USERS TABLE -->