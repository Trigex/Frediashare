			<script language="javascript" src="{$js_url}/ajaxresponder.js" type="text/javascript"></script>
			<input type="hidden" name="ldivx" id="ldivx" value="">
			<input type="hidden" name="thisDiv" id="thisDiv" value="">
			<div><a href="javascript:void(0)" onclick="ReverseContentDisplay('systools'); ReverseContentDisplay('systoolstxt'); changeclass_act('sys6');"><span id="sys6">{$adm_setsystools1}</span></a></div>
			<div class="pt5" id="systoolstxt" style="display: block;" align="center">{$adm_setsystools2}</div> 
			<div class="pt5" id="systools" style="display: none;">
			<form id="systoolsform">
			<table cellpadding=2 cellspacing=0 border=0 align=left>
			    <tr>
				<td align="left" width="150"><input type="button" name="clearcachebtn" class="fb" value="{$adm_setsystools3}" onclick="if (confirm('{$adm_setsystools4}')) {ldelim} thisDiv('yes'); ldiv('systoolsresp'); sys_clearcache(); {rdelim}" style="width: 140px;"></td>
				<td width="750">{$cache_dir_size} - {$cache_dir_files} file(s) and {$cache_dir_folder} folder(s)</td>
			    </tr>
			    <tr>
				<td align="left"><input type="button" name="cleartempbtn" class="fb" value="{$adm_setsystools7}" onclick="if (confirm('{$adm_setsystools4}')) {ldelim} thisDiv('yes'); ldiv('systoolsresp'); sys_cleartemp(); {rdelim}" style="width: 140px;"></td>
				<td>{$temp_dir_size} - {$temp_dir_files} file(s) and {$temp_dir_folder} folder(s)</td>
			    </tr>
			    <tr>
				<td align="left"><input type="button" name="clearuploadbtn" class="fb" value="{$adm_setsystools8}" onclick="if (confirm('{$adm_setsystools4}')) {ldelim} thisDiv('yes'); ldiv('systoolsresp'); sys_clearupload(); {rdelim}" style="width: 140px;"></td>
				<td>{$up_dir_size} - {$up_dir_files} file(s) and {$up_dir_folder} folder(s)</td>
			    </tr>
			    <tr>
				<td align="left"><input type="button" name="clearlogbtn" class="fb" value="{$adm_setsystools10}" onclick="if (confirm('{$adm_setsystools4}')) {ldelim} thisDiv('yes'); ldiv('systoolsresp'); sys_clearlogs(); {rdelim}" style="width: 140px;"></td>
				<td>{$log_dir_size} - {$log_dir_files} file(s) and {$log_dir_folder} folder(s)</td>
			    </tr>
			    <tr>
				<td align="left"><input type="button" name="diagtoolbtn" class="fb" value="{$adm_setsystools9}" onclick="{ldelim} thisDiv('yes'); ldiv('systoolsresp'); sys_analyze(); {rdelim}" style="width: 140px;"></td>
				<td>Run a system check on your site!</td>
			    </tr>
			    <tr>
				<td colspan="2" class="pt5">
				    <table cellpadding="0" cellspacing="0" align="left">
					<tr>
					    <td>
						<div id="loading" style="display: none;">
						    <table cellpadding=2 cellspacing=0 border=0>
							<tr><td>{$adm_setgen79}</td><td>{$loading_gif}</td></tr>
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
