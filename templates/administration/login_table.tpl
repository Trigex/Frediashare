
<!-- BEGIN ADMIN AREA AUTHENTIFICATION TABLE -->
	    <table width="35%" border="0" cellspacing="0" cellpadding="5" class="pt10" align="center">
		<tr>
		    <td class="bold">{$adm_loginheading}</td>
		</tr>
	    </table>
	    <table width="35%" border="0" cellspacing="0" cellpadding="5" class="br1" align="center">
		<tr>
		    <td class="grey">
			<table width="100%" cellpadding="5" cellspacing="0" border=0>
			    <tr>
				<td>
				<form name="home_login" action="{$admin_url}/main" method="post">
				    <table width="80%" border="0" cellspacing="0" cellpadding="2" id="login_tbl" align="center">
					<tr>
					    <td align="right" class="types">{$memusername}</td>
					    <td><input type="text" size="25" class="ff" name="user" value="{$smarty.request.user}"></td>
					</tr>
					<tr>
					    <td align="right" class="types">{$mempassword}</td>
					    <td><input type="password" size="25" class="ff" name="pass"></td>
					</tr>
					<tr>
					    <td></td>
					    <td align="left">
						<input type="hidden" name="logged" value="logged">
						<input type="submit" value="{$memloginbtn}" class="fb">
					    </td>
					</tr>
					{if $security_question ne "" and $security_answer ne ""}
					<tr>
					    <td></td>
					    <td class="pt5"><a href="javascript:void(0)" onClick="ReverseContentDisplay('recoverpass')"><span id="fptxt">{$memforgot}</span></a></td>
					</tr>
					{/if}
				    </table>
				</form>
				{if $security_question ne "" and $security_answer ne ""}
				    <script language="javascript" src="{$js_url}/ajaxresponder.js" type="text/javascript"></script>
				    <input type="hidden" name="ldivx" id="ldivx" value="">
				    <input type="hidden" name="thisDiv" id="thisDiv" value="">
				    <form id="adminpassrecform">
				    <div id="recoverpass" style="display: none;" class="pt10">
					<table width="80%" border="0" cellspacing="2" cellpadding="0" align="center">
					    <tr>
						<td colspan="3">
						    {insert name=getfield assign=question field=value table=configurations qfield=configurations.option qvalue=$security_question}
						    {$question}
						</td>
					    </tr>
					    <tr>
						<td width="20"><input type="text" name="ranswer" class="ff" size="30"></td>
						<td>
						    <input type="button" name="recbtn" class="fb" value="{$memrecoverbtn}" onclick="thisDiv('yes'); ldiv('adminpassrecresp'); recadminpass();">
						</td>
						<td>
						    <input type="button" name="cencelbtn" class="fb" value="{$adm_playcancelbtn}" onclick="ReverseContentDisplay('recoverpass');">
						</td>
					    </tr>
					    <tr>
						<td align="left" colspan="3">
						    <div id="loading" style="display: none;">
							<table cellpadding=5 cellspacing=0 border=0>
							    <tr><td>{$adm_setgen79}</td><td>{$loading_gif}</td></tr>
							</table>
						    </div>
						    <div id="adminpassrecresp"></div>
						</td>
					    </tr>
					</table>
				    </div>
				    </form>
				{/if}
				</td>
			    </tr>
			</table>
		    </td>
		</tr>
	    </table>
<!-- END ADMIN AREA AUTHENTIFICATION TABLE -->	    
