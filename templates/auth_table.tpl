{if $smarty.session.UID eq ""}
<!-- BEGIN MEMBER AUTHENTIFICATION TABLE -->
	    <table width="100%" border="0" cellspacing="0" cellpadding="2" align=center class="">
		<tr>
		    <td class="bold">{$memauth}</td>
		</tr>
	    </table>
	    <table width="100%" border="0" cellspacing="0" cellpadding="5" align=center class="br1">
		<tr>
		    <td>
			<table width="100%" cellpadding="0" cellspacing="0" border=0>
			    <tr>
				<td class="pt10">
				    <table border="0" cellspacing="2" cellpadding="1" id="login_tbl" align=center width="85%">
				    <form name="home_login" action="{if $sbtn eq "main" or $sbtn eq "reg"}{$base_url}/login{else}{/if}" method="post">
					<tr>
					    <td align="right" class="types">{$memusername}</td>
					    <td><input type="text" size="20" class="ff" name="user" value="{$smarty.request.user}"></td>
					</tr>
					<tr>
					    <td align="right" class="types">{$mempassword}</td>
					    <td><input type="password" size="20" class="ff" name="pass"></td>
					</tr>
					<tr>
					    <td></td>
					    <td align="left">
						<input type="hidden" name="logged" value="logged">
						<input type="submit" value="{$memloginbtn}" class="fb">
					    </td>
					</tr>
					<tr>
					    <td colspan="2" class="nopad">
						<table cellspacing="2" cellpadding="1" border="0" align="center">
						    <tr>
							<td>{if $username_recovery eq "1"}<a href="javascript:void(0)" onClick="ShowContent('recoveruser'); HideContent('recoverpass'); setclass_act('fptxt1'); {if $password_recovery eq "1"}changeclass_inact('fptxt');{/if}"><span id="fptxt1" class="">{$memuserforgot}</span></a> {if $password_recovery eq "1"}|{/if} {/if}</td>
							<td>{if $password_recovery eq "1"}<a href="javascript:void(0)" onClick="ShowContent('recoverpass'); HideContent('recoveruser'); setclass_act('fptxt'); {if $username_recovery eq "1"}changeclass_inact('fptxt1');{/if}"><span id="fptxt" class="">{$memforgot}</span></a>{/if}</td>
						    </tr>
						</table>
					    </td>
					</tr>
				    </form>
				    </table>
				    
				    {if $username_recovery eq "1" or $password_recovery eq "1"}
				    <table border="0" cellspacing="0" cellpadding="0" align=center width="95%">
					<tr>
					    <td>
						<form id="rec_pass">
						<div id="recoverpass" style="display: none; padding: 10px;" class="br1">
						{if $password_recovery eq "1"}
						    <table cellpadding=1 cellspacing=2 border=0 align=center>
							<tr>
							    <td colspan=2>{$memwhatusername}</td>
							</tr>
							<tr>
							    <td><input type="text" name="recuser" class="ff" size="20"></td>
							    <td><input type="button" name="recsend" class="fb" value="{$memrecoverbtn}" onclick="thisDiv('yes'); ldiv('recpass'); recoverpass('confirm');">&nbsp;<input type="button" name="reccancel" class="fb" value="{$memcancelbtn}" onclick="HideContent('recoverpass'); changeclass_inact('fptxt');"></td>
							</tr>
						    </table>
						    <div id="recpass" align="center" style="padding: 5px;"></div>
						{/if}
						</div>
						<div id="recoveruser" style="display: none; padding: 10px;" class="br1">
						{if $username_recovery eq "1"}
						    <table cellpadding=1 cellspacing=2 border=0 align=center>
							<tr>
							    <td colspan=2>{$memwhatemail}</td>
							</tr>
							<tr>
							    <td><input type="text" name="recemail" class="ff" size="20"></td>
							    <td><input type="button" name="recsendemail" class="fb" value="{$memrecoverbtn}" onclick="thisDiv('yes'); ldiv('recpass2'); recoverpass('user');">&nbsp;<input type="button" name="reccancel" class="fb" value="{$memcancelbtn}" onclick="HideContent('recoveruser'); changeclass_inact('fptxt1');"></td>
							</tr>
						    </table>
						    <div id="recpass2" align="center" style="padding: 5px;"></div>
						{/if}
						</div>
						<div id="loading_rec" style="display: none; margin-top: 5px;" align="center">
						    <table cellpadding=5 cellspacing=0 border=0>
							<tr><td>{$adm_setgen79}</td><td>{$loading_gif}</td></tr>
						    </table>
						</div>
						</form>
					    </td>
					</tr>
				    </table>
				    <script language="javascript" src="{$js_url}/ajaxresponder.js" type="text/javascript"></script>
				    <input type="hidden" name="ldivx" id="ldivx" value="">
				    <input type="hidden" name="thisDiv" id="thisDiv" value="">
				    {/if}
				    <table border="0" cellspacing="0" cellpadding="0" align=center>
					<tr>
					    <td align=center class="pt10">
						{$memtext1}{$memtext2}
					    </td>
					</tr>
				    </table>
				</td>
			    </tr>
			</table>
		    </td>
		</tr>
	    </table>
<!-- END MEMBER AUTHENTIFICATION TABLE -->	    
{/if}

{if $smarty.session.UID ne ""}
<!-- BEGIN AUTHENTIFIED MEMBER STATUS TABLE -->
	{if $site_theme eq "blue"}<div class="br2">{else}<div class="br1">{/if}
	{insert name="pmsg_count_new" assign=total_msg}
	{insert name=audio_count assign=adocount uid=$smarty.session.UID}
	{insert name=image_count assign=idocount uid=$smarty.session.UID}
	{insert name=video_count assign=vdocount uid=$smarty.session.UID}
	{insert name=friend_count assign=frcount uid=$smarty.session.UID}
	    <table width="100%" border="0" cellspacing="1" cellpadding="1" class="grey">
		{if $site_stats eq "1"}
		<tr>
		    <td colspan="2" class="lp">
		    {if $enable_audio eq "1"}
			<table cellpadding=0 cellspacing=0 border=0 width="100%">
			    <tr>
				<td width="35%"><a href="javascript:void(0)" onclick="ReverseContentDisplay('site_statsa')"><span id="sitestatsa">{$memas}</span></a></td>
				<td class="pt2">&nbsp;<img id="statsa" src="{$theme_url}/{$site_theme}/images/sign_plus.gif" width="10" height="10" alt="{$memas}" onclick="ReverseContentDisplay('site_statsa')"></td>
			    </tr>
			</table>
			<div id="site_statsa" style="display: none;">
			    <table cellpadding=1 cellspacing=0>
				<tr><td><a href="javascript:void(0)" onclick="location.href='{$base_url}/audios/featured'; return false;"><span class="gr1">{$mems1}</span>({$ta1})</a></td></tr>
				<tr><td><a href="javascript:void(0)" onclick="location.href='{$base_url}/audios'; return false;"><span class="gr1">{$mems2}</span>({$ta2})</a></td></tr>
				<tr><td><a href="javascript:void(0)"><span class="gr1">{$mems3}</span>({$ta3})</a></td></tr>
				<tr><td><a href="javascript:void(0)"><span class="gr1">{$mems4}</span>({$ta4})</a></td></tr>
				<tr><td><a href="javascript:void(0)"><span class="gr1">{$mems5}</span>({$ta5})</a> <span class="gr1">{$mems51}</span></td></tr>
			    </table>
			</div>
		    {/if}
		    {if $enable_images eq "1"}
			<table cellpadding=0 cellspacing=0 border=0 width="100%">
			    <tr>
				<td width="35%" class="pt2"><a href="javascript:void(0)" onclick="ReverseContentDisplay('site_statsi')"><span id="sitestatsi">{$memis}</span></a></td>
				<td class="pt2">&nbsp;<img id="statsi" src="{$theme_url}/{$site_theme}/images/sign_plus.gif" width="10" height="10" alt="{$memis}" onclick="ReverseContentDisplay('site_statsi')"></td>
			    </tr>
			</table>
			<div id="site_statsi" style="display: none;">
			    <table cellpadding=1 cellspacing=0>
				<tr><td><a href="javascript:void(0)" onclick="location.href='{$base_url}/images/featured'; return false;"><span class="gr1">{$mems1}</span>({$ti1})</a></td></tr>
				<tr><td><a href="javascript:void(0)" onclick="location.href='{$base_url}/images'; return false;"><span class="gr1">{$mems2}</span>({$ti2})</a></td></tr>
				<tr><td><a href="javascript:void(0)"><span class="gr1">{$mems3}</span>({$ti3})</a></td></tr>
				<tr><td><a href="javascript:void(0)"><span class="gr1">{$mems4}</span>({$ti4})</a></td></tr>
				<tr><td><a href="javascript:void(0)"><span class="gr1">{$mems5}</span>({$ti5})</a> <span class="gr1">{$mems51}</span></td></tr>
			    </table>
			</div>
		    {/if}
		    {if $enable_videos eq "1"}
			<table cellpadding=0 cellspacing=0 border=0 width="100%">
			    <tr>
				<td width="35%" class="pt2"><a href="javascript:void(0)" onclick="ReverseContentDisplay('site_statsv')"><span id="sitestatsv">{$memvs}</span></a></td>
				<td class="pt2">&nbsp;<img id="statsv" src="{$theme_url}/{$site_theme}/images/sign_plus.gif" width="10" height="10" alt="{$memvs}" onclick="ReverseContentDisplay('site_statsv')"></td>
			    </tr>
			</table>
			<div id="site_statsv" style="display: none;">
			    <table cellpadding=1 cellspacing=0>
				<tr><td><a href="javascript:void(0)" onclick="location.href='{$base_url}/videos/featured'; return false;"><span class="gr1">{$mems1}</span>({$tv1})</a></td></tr>
				<tr><td><a href="javascript:void(0)" onclick="location.href='{$base_url}/videos'; return false;"><span class="gr1">{$mems2}</span>({$tv2})</a></td></tr>
				<tr><td><a href="javascript:void(0)"><span class="gr1">{$mems3}</span>({$tv3})</a></td></tr>
				<tr><td><a href="javascript:void(0)"><span class="gr1">{$mems4}</span>({$tv4})</a></td></tr>
				<tr><td><a href="javascript:void(0)"><span class="gr1">{$mems5}</span>({$tv5})</a> <span class="gr1">{$mems51}</span></td></tr>
			    </table>
			</div>
		    {/if}
		    </td>
		</tr>
		{/if}
		<tr>
		    <td colspan=2 align=right class="prb"><a href="{$base_url}/logout">{$snavlogout}</a>
		</tr>
	    </table>
	</div>
<!-- END AUTHENTIFIED MEMBER STATUS TABLE -->	    
{/if}