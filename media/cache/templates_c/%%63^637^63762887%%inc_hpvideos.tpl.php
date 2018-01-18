<?php /* Smarty version 2.6.26, created on 2009-11-10 15:17:50
         compiled from _inc/hpbox/inc_hpvideos.tpl */ ?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="">
    <tr> 
    <td>
	<div id="bv" style="display: block;">
	    <table width="100%" cellpadding="0" cellspacing="0">
		<tr>
		    <td class="recipbg" height="30">
			<div id="recipient" style="display:block;">
			</div>
		    </td>
		</tr>
		<tr>
		    <td align="center" class="nopad">
			<table width="97%" cellpadding=1 cellspacing=0 border=0 align="center">
			    <tr>
				<td align="left" class="nopad">
        			    <div id="preloader" style="display:none;" class="f10">
        				<?php echo $this->_tpl_vars['view_loading']; ?>
<?php echo $this->_tpl_vars['loading_gif']; ?>

        			    </div>
				</td>
				<td align="right" class="f10">
				<div id="morelessfeat" style="display: block;">
				    <table border="0" cellspacing="1" cellpadding="1">
    					<tr>
        				    <td><a href="javascript:void(0)" <?php if ($_SESSION['UID'] != "" || $this->_tpl_vars['guests_file_sorting'] == '1'): ?>onclick="xajax_add_line_('featured');"<?php else: ?>onclick="alert('<?php echo $this->_tpl_vars['msg_userlogin']; ?>
');"<?php endif; ?>><?php echo $this->_tpl_vars['act_more']; ?>
</a></td>
        				    <td><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>
        				    <td><a href="javascript:void(0)" <?php if ($_SESSION['UID'] != "" || $this->_tpl_vars['guests_file_sorting'] == '1'): ?>onclick="xajax_del_line_('featured');"<?php else: ?>onclick="alert('<?php echo $this->_tpl_vars['msg_userlogin']; ?>
');"<?php endif; ?>><?php echo $this->_tpl_vars['act_less']; ?>
</a></td>
    					</tr>
    				    </table>
    				</div>
				<div id="morelessviews" style="display: none;">
				    <table border="0" cellspacing="1" cellpadding="1">
    					<tr>
        				    <td><a href="javascript:void(0)" <?php if ($_SESSION['UID'] != "" || $this->_tpl_vars['guests_file_sorting'] == '1'): ?>onclick="xajax_add_line_('views');"<?php else: ?>onclick="alert('<?php echo $this->_tpl_vars['msg_userlogin']; ?>
');"<?php endif; ?>><?php echo $this->_tpl_vars['act_more']; ?>
</a></td>
        				    <td><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>
        				    <td><a href="javascript:void(0)" <?php if ($_SESSION['UID'] != "" || $this->_tpl_vars['guests_file_sorting'] == '1'): ?>onclick="xajax_del_line_('views');"<?php else: ?>onclick="alert('<?php echo $this->_tpl_vars['msg_userlogin']; ?>
');"<?php endif; ?>><?php echo $this->_tpl_vars['act_less']; ?>
</a></td>
    					</tr>
    				    </table>
    				</div>
				<div id="morelessratings" style="display: none;">
				    <table border="0" cellspacing="1" cellpadding="1">
    					<tr>
        				    <td><a href="javascript:void(0)" <?php if ($_SESSION['UID'] != "" || $this->_tpl_vars['guests_file_sorting'] == '1'): ?>onclick="xajax_add_line_('ratings');"<?php else: ?>onclick="alert('<?php echo $this->_tpl_vars['msg_userlogin']; ?>
');"<?php endif; ?>><?php echo $this->_tpl_vars['act_more']; ?>
</a></td>
        				    <td><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>
        				    <td><a href="javascript:void(0)" <?php if ($_SESSION['UID'] != "" || $this->_tpl_vars['guests_file_sorting'] == '1'): ?>onclick="xajax_del_line_('ratings');"<?php else: ?>onclick="alert('<?php echo $this->_tpl_vars['msg_userlogin']; ?>
');"<?php endif; ?>><?php echo $this->_tpl_vars['act_less']; ?>
</a></td>
    					</tr>
    				    </table>
    				</div>
				</td>
			    </tr>
			</table>
		    </td>
		</tr>
	    </table>
	</div>
    </td>
    </tr>
</table>