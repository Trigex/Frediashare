
<!-- BEGIN SINGUP PAGE RIGHT TABLE -->
	    <table width="100%" border="0" cellspacing="0" cellpadding="2" id="" class="">
		<tr>
		    <td class="bold">{$signup_heading}</td>
		</tr>
	    </table>
	    
	    <table width="100%" border="0" cellspacing="5" cellpadding="0" id="" class="br1">
		<tr>
		<td>
		<table width="100%" border="0" cellspacing="5" cellpadding="0" id="signup_tbl" class="">
		<tr>
		    <td class=grey>
			<table cellpadding=10 cellspacing=0>
			    <tr>
				<td align=left valign=top class="p15"><img src="{$img_url}/warning.gif" alt="Warning!" width="46" height="40"></td>
				<td>
				    {$signup_txt1}
				    {$signup_txt2}
				</td>
			    </tr>
			</table>
		    </td>
		</tr>
    		<tr>
    		    <td class="grey" align="center">
			<form name="reg_form" action="{$base_url}/signup" method="post">
			<table border="0" cellspacing="0" cellpadding="5">
			    <tr>
				<td align="left">{$signup_email}</td>
				<td align="left"><input type="text" name="reg_email" class="ff" size="35" value="{$smarty.request.reg_email}"></td>
				<td></td>
			    </tr>
			    <tr>
				<td align="left">{$signup_pass}</td>
				<td align="left"><input type="password" name="reg_pass1" class="ff" size="35" onKeyUp="updatePasswordStrength_new(this,'passwdRating',{ldelim} 'text':2 {rdelim});"></td>
				<td></td>
			    </tr>
			    <tr>
				<td align="left" valign=top>&nbsp;{$signup_pass_strs}</td>
				<td align=left colspan=2 class="pt0">
				    <div id="passwdRating">
					<div id="pass_meter" class="pass_meter" style="height: 5px;">
					    <div class="pass_meter_base" style="height: 5px;"></div>
					</div>
					<div style="display:inline;" id="ps-rating">{$passmeter6}</div>
				    </div>
				</td>
			    </tr>
			    <tr>
				<td align="left">{$signup_pass_confirm}</td>
				<td align="left"><input type="password" name="reg_pass2" class="ff" size="35"></td>
				<td></td>
			    </tr>
			    <tr>
				<td align="left">{$signup_user}</td>
				<td align="left"><input type="text" name="reg_user" class="ff" size="35" value="{$smarty.request.reg_user}"></td>
				<td></td>
			    </tr>
			    <tr>
				<td align="left">{$pr_chinfop38}</td>
				<td align="left">{include file="countries.tpl"}</td>
				<td></td>
			    </tr>
			    <tr>
				<td align="left">{$signup_bdate}</td>
				<td align="left">
				    <table cellpadding=0 cellspacing=0>
					<tr>
					{if $date_selection eq "css"}
					    <td><input type="text" readonly class="ff" size="35" name="reg_bdate" {if $smarty.request.reg_bdate ne ""}value="{$smarty.request.reg_bdate}"{/if}></td>
					    <td valign="top" class="pl2"><img src="{$img_url}/calendar/cal.gif" width="16" height="16" border="0" alt="{$adm_setdatetxt}" title="{$adm_setdatetxt}" onclick="displayCalendar(document.forms[1].reg_bdate,'yyyy-mm-dd',this);"></td>
					{else}
					    <td>{html_select_date prefix="bd_" start_year="-109" end_year="+1" display_days=true all_extra='class="selbox"' month_extra='style="width: 113px;"' day_extra='style="width: 50px;"' year_extra='style="width: 65px;"'}</td>
					{/if}
					</tr>
				    </table>
				</td>
				<td></td>
			    </tr>
			    <tr>
				<td align="left">{$signup_gender}</td>
				<td align="left" class="p5">
				    <table cellpadding=0 cellspacing=0>
					<tr>
					    <td valign="middle">{$mypr_infotxt8}</td>
					    <td valign="top"><input type="radio" name="reg_gender" value="M" {if $smarty.request.reg_gender eq "M"}checked{/if}></td>
					    <td><input type="radio" name="reg_gender" value="F" {if $smarty.request.reg_gender eq "F"}checked{/if}></td>
					    <td valign="middle">{$mypr_infotxt9}</td>
					</tr>
				    </table>
				</td>
				<td></td>
			    </tr>
			    {if $signup_captcha eq "1"}
			    <tr>
				<td align="left">{$signup_captchatext}</td>
				<td align="left"><input name="reg_code" class="ff" size="35" type="text"></td>
				<td><img src="{$base_url}/captcha" alt="{$signup_captchatext}"></td>
			    </tr>
			    {/if}
			    <tr>
				<td align="left">&nbsp;{$signup_invite}</td>
				<td align="left"><input type="text" name="reg_icode" class="ff" size="35" value="{$smarty.request.reg_icode}"></td>
				<td></td>
			    </tr>
			    <tr>
				<td align="right">
				{if $smarty.request.reg_years eq ""}
				<input type="checkbox" name="reg_years">
				{else}
				<input type="checkbox" name="reg_years" checked>
				{/if}
				</td>
				<td align=left>{$signup_age}</td>
				<td></td>
			    </tr>
			    <tr>
				<td align="right">
				{if $smarty.request.reg_terms eq ""}
				<input type="checkbox" name="reg_terms">
				{else}
				<input type="checkbox" name="reg_terms" checked>
				{/if}
				</td>
				<td align=left colspan=2>{$signup_terms}</td>
			    </tr>
			    <tr><td colspan=3>&nbsp;</td></tr>
			    <tr>
				<td></td>
				<td colspan=2 align="left">
				    <input type="submit" value="{$signup_btnsend}" class="fb">&nbsp;&nbsp;
				    <input type="submit" value="{$signup_btncancel}" class="fb" name="scancel">
				    <input type="hidden" name="regged" value="regged">
				</td>
			    </tr>
			</table>
			</form>
		    </td>
		</tr>
		</table>
		</td>
		</tr>
	    </table>
<!-- END SIGNUP PAGE RIGHT TABLE -->
