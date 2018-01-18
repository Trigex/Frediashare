<?php /* Smarty version 2.6.26, created on 2009-11-10 15:43:26
         compiled from profile_password_table.tpl */ ?>

<!-- BEGIN PROFILE PASSWORD TABLE -->
	    <table width="100%" cellpadding=0 cellspacing=0 align="center" border=0>
		<tr>
		    <td class="p3"><h1><?php echo $this->_tpl_vars['mypr_passheading']; ?>
</h1></td>
		</tr>
		<tr><td class="nopad">&nbsp;</td></tr>
		<tr>
		    <td class="grey">
			<table width="100%" cellpadding="2" cellspacing="1" border=0>
			<?php if ($this->_tpl_vars['btn'] != 'adm_members'): ?>
			    <tr>
				<td align="left" width="30%"><?php echo $this->_tpl_vars['mypr_passtxt2']; ?>
</td><td><input type="password" name="oldpass" class="ff width400"></td>
			    </tr>
			<?php endif; ?>
			    <tr>
				<td align="left" width="30%"><?php echo $this->_tpl_vars['mypr_passtxt3']; ?>
</td><td><input type="password" name="newpass1" class="ff width400" onKeyUp="updatePasswordStrength_new(this,'passwdRating',{ 'text':2 });"></td>
			    </tr>
			    <tr>
				<td align="left" valign=top><?php echo $this->_tpl_vars['mypr_passtxt4']; ?>
</td>
				<td>
				    <div id="passwdRating">
					<div id="pass_meter" class="pass_meter" style="height: 5px;">
					    <div class="pass_meter_base" style="height: 5px;"></div>
					</div>
					<div style="display:inline;" id="ps-rating" style="height: 5px;"><?php echo $this->_tpl_vars['passmeter6']; ?>
</div>
				    </div>
				</td>
			    </tr>
			    <tr>
				<td align="left"><?php echo $this->_tpl_vars['mypr_passtxt6']; ?>
</td><td><input type="password" name="newpass2" class="ff width400"></td>
			    </tr>
			</table>
		    </td>
		</tr>
		<tr><td class="nopad">&nbsp;</td></tr>
	    </table>
<!-- END PROFILE PASSWORD TABLE -->