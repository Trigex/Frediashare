<?php /* Smarty version 2.6.26, created on 2009-11-10 15:25:17
         compiled from administration/_inc/inc_systools.tpl */ ?>
			<script language="javascript" src="<?php echo $this->_tpl_vars['js_url']; ?>
/ajaxresponder.js" type="text/javascript"></script>
			<input type="hidden" name="ldivx" id="ldivx" value="">
			<input type="hidden" name="thisDiv" id="thisDiv" value="">
			<div><a href="javascript:void(0)" onclick="ReverseContentDisplay('systools'); ReverseContentDisplay('systoolstxt'); changeclass_act('sys6');"><span id="sys6"><?php echo $this->_tpl_vars['adm_setsystools1']; ?>
</span></a></div>
			<div class="pt5" id="systoolstxt" style="display: block;" align="center"><?php echo $this->_tpl_vars['adm_setsystools2']; ?>
</div> 
			<div class="pt5" id="systools" style="display: none;">
			<form id="systoolsform">
			<table cellpadding=2 cellspacing=0 border=0 align=left>
			    <tr>
				<td align="left" width="150"><input type="button" name="clearcachebtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setsystools3']; ?>
" onclick="if (confirm('<?php echo $this->_tpl_vars['adm_setsystools4']; ?>
')) { thisDiv('yes'); ldiv('systoolsresp'); sys_clearcache(); }" style="width: 140px;"></td>
				<td width="750"><?php echo $this->_tpl_vars['cache_dir_size']; ?>
 - <?php echo $this->_tpl_vars['cache_dir_files']; ?>
 file(s) and <?php echo $this->_tpl_vars['cache_dir_folder']; ?>
 folder(s)</td>
			    </tr>
			    <tr>
				<td align="left"><input type="button" name="cleartempbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setsystools7']; ?>
" onclick="if (confirm('<?php echo $this->_tpl_vars['adm_setsystools4']; ?>
')) { thisDiv('yes'); ldiv('systoolsresp'); sys_cleartemp(); }" style="width: 140px;"></td>
				<td><?php echo $this->_tpl_vars['temp_dir_size']; ?>
 - <?php echo $this->_tpl_vars['temp_dir_files']; ?>
 file(s) and <?php echo $this->_tpl_vars['temp_dir_folder']; ?>
 folder(s)</td>
			    </tr>
			    <tr>
				<td align="left"><input type="button" name="clearuploadbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setsystools8']; ?>
" onclick="if (confirm('<?php echo $this->_tpl_vars['adm_setsystools4']; ?>
')) { thisDiv('yes'); ldiv('systoolsresp'); sys_clearupload(); }" style="width: 140px;"></td>
				<td><?php echo $this->_tpl_vars['up_dir_size']; ?>
 - <?php echo $this->_tpl_vars['up_dir_files']; ?>
 file(s) and <?php echo $this->_tpl_vars['up_dir_folder']; ?>
 folder(s)</td>
			    </tr>
			    <tr>
				<td align="left"><input type="button" name="clearlogbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setsystools10']; ?>
" onclick="if (confirm('<?php echo $this->_tpl_vars['adm_setsystools4']; ?>
')) { thisDiv('yes'); ldiv('systoolsresp'); sys_clearlogs(); }" style="width: 140px;"></td>
				<td><?php echo $this->_tpl_vars['log_dir_size']; ?>
 - <?php echo $this->_tpl_vars['log_dir_files']; ?>
 file(s) and <?php echo $this->_tpl_vars['log_dir_folder']; ?>
 folder(s)</td>
			    </tr>
			    <tr>
				<td align="left"><input type="button" name="diagtoolbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setsystools9']; ?>
" onclick="{ thisDiv('yes'); ldiv('systoolsresp'); sys_analyze(); }" style="width: 140px;"></td>
				<td>Run a system check on your site!</td>
			    </tr>
			    <tr>
				<td colspan="2" class="pt5">
				    <table cellpadding="0" cellspacing="0" align="left">
					<tr>
					    <td>
						<div id="loading" style="display: none;">
						    <table cellpadding=2 cellspacing=0 border=0>
							<tr><td><?php echo $this->_tpl_vars['adm_setgen79']; ?>
</td><td><?php echo $this->_tpl_vars['loading_gif']; ?>
</td></tr>
						    </table>
						</div>
						<div id="systoolsresp"></div>
					    </td>
					</tr>
				    </table>
				</td>
			    </tr>
			</table>
			</form>
			</div>