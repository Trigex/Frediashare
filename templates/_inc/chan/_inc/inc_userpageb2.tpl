		    <div id="b2">
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td class="thead2" align="left"> {$uch_txt16}{$minfo[0].username}</td>
			    <tr>
			    <tr>
				<td class="tbody2">
				    <table cellpadding="0" cellspacing="0" width="100%" border="0" align="left">
					<tr>
					    <td valign="middle" align="right" width="90"><a href="{$base_url}/user/{$minfo[0].username}"><img class="pborder" src="{$usrimg_url}/{$minfo[0].photo}" width="55" height="55" alt="{$minfo[0].username}"></a></td>
					    <td align="left">
						<div class="pl10">
						    <div class="p1">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
    							{if $minfo[0].ch_type eq 2}
							    <tr>
								<td colspan="2" align="left"><div class="p5"><a href="{$minfo[0].inf_eurl}"><b>{$minfo[0].inf_etitle}</b></a></div></td>
							    </tr>
							{/if}
							    <tr>
								<td width="30"><a href="{$base_url}/inbox/compose/{$minfo[0].username}"><div class="btnmail" id="btnmail" onmouseover="set_chbtn('btnmail');" onmouseout="set_chbtn('btnmail');"></div></a></td>
								<td><div><a href="{$base_url}/inbox/compose/{$minfo[0].username}" onmouseover="set_chbtn('btnmail');" onmouseout="set_chbtn('btnmail');">{$uch_txt17}</a></div></td>
							    </tr>
							</table>
						    </div>
						    {if $minfo[0].ch_comm eq "yes"}
						    <div class="p1">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
							    <tr>
								<td width="30"><div class="btncomm" id="btncomm" onmouseover="set_chbtn('btncomm');" onmouseout="set_chbtn('btncomm');"></div></td>
								<td><div><a href="#add_comm" onmouseover="set_chbtn('btncomm');" onmouseout="set_chbtn('btncomm');">{$uch_txt18}</a></div></td>
							    </tr>
							</table>
						    </div>
						    {/if}
						    <div class="p1">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
							    <tr>
								<td width="30"><div class="btnshare" id="btnshare" onmouseover="set_chbtn('btnshare');" onmouseout="set_chbtn('btnshare');"></div></td>
								<td><div><a href="javascript:void(0)" onclick="ShowContent('divshare'); HideContent('divblock'); HideContent('divfriend');" onmouseover="set_chbtn('btnshare');" onmouseout="set_chbtn('btnshare');">{$uch_txt19}</a></div></td>
							    </tr>
							</table>
						    </div>
						    {if $msg_block eq "1"}
						    <div class="p1">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
							    <tr>
								<td width="30"><div class="btnblock" id="btnblock" onmouseover="set_chbtn('btnblock');" onmouseout="set_chbtn('btnblock');"></div></td>
								<td><div><a href="javascript:void(0)" onclick="ShowContent('divblock'); HideContent('divshare'); HideContent('divfriend');" onmouseover="set_chbtn('btnblock');" onmouseout="set_chbtn('btnblock');">{$uch_txt20}</a></div></td>
							    </tr>
							</table>
						    </div>
						    {/if}
						    <div class="p1">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
							    <tr>
								<td width="30"><div class="btnfriend" id="btnfriend" onmouseover="set_chbtn('btnfriend');" onmouseout="set_chbtn('btnfriend');"></div></td>
								<td><div><a href="javascript:void(0)" onclick="ShowContent('divfriend'); HideContent('divshare'); HideContent('divblock');" onmouseover="set_chbtn('btnfriend');" onmouseout="set_chbtn('btnfriend');">{$uch_txt21}</a></div></td>
							    </tr>
							</table>
						    </div>
						    
						</div>
					    </td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td style="padding: 5px;" class="tbody2 bodylabel">
				    <div id="divshare" style="display: none;">
				    <form id="chshareform">
					<table cellpadding="2" cellspacing="0" width="90%" border="0" align="left" class="border">
					    <tr>
						<td align="left">
						    <div>{$uch_shtxt1}</div>
						    <div class="p1"><textarea name="ch_addr" cols="30" rows="3"></textarea></div>
						    <div class="p1">&nbsp;</div>
						    <div>{$uch_shtxt2}</div>
						    <div class="p1"><textarea name="ch_text" cols="30" rows="3">{$uch_shtxt3}</textarea></div>
						    <div class="p1">
							<table cellpadding="3" cellspacing="0">
							    <tr>
								<td>{$signup_captchatext} <br><input type="text" name="ch_vcode"></td>
							    </tr>
							    <tr>
								<td style="padding-top: 1px;"><img src="{$base_url}/captcha" alt="asd"></td>
							    </tr>
							    <tr>
								<td><input type="button" name="ch_send" value="{$adm_memsendbtn}" onclick="thisDiv('yes'); ldiv('chshareresp'); ch_share();"></td>
							    </tr>
							    <tr>
								<td>
								    
								    <div id="loading_sh" style="display: none;">
									<table cellpadding=5 cellspacing=0 border=0>
									    <tr><td>{$last_loading}</td><td>{$loading_gif}</td></tr>
									</table>
								    </div>
								    <input type="hidden" name="ch_name" value="{$minfo[0].username}">
								</td>
							    </tr>
							</table>
						    </div>
						</td>
						<td valign="top"><a href="javascript:void(0)" onclick="HideContent('divshare');">x</a></td>
					    </tr>
					    <tr><td colspan="2"><div id="chshareresp" class="p5"></div></td></tr>
					</table>
				    </form>
				    </div>
				    
				    <div id="divblock" style="display: none;">
				    <form id="chblockform">
					<table cellpadding="5" cellspacing="0" width="100%" border="0" align="left" class="border">
					{if $smarty.session.UID ne ""}
					    <tr>
						<td width="100%">{$uch_shtxt6}</td>
						<td valign="top"><a href="javascript:void(0)" onclick="HideContent('divblock');">x</a></td>
					    </tr>
					    <tr>
						<td><input type="button" name="ch_blockbtn" value="{$up_btncontinue}" onclick="thisDiv('no'); ch_act('block');">&nbsp;&nbsp;<input type="button" name="ch_cancelbtn" value="{$up_btncancel}" onclick="HideContent('divblock');"></td>
						<td><input type="hidden" name="ch_blockeduid" value="{$minfo[0].uid}"><input type="hidden" name="ch_blockedname" value="{$minfo[0].username}"></td>
					    </tr>
					{else}
					    <tr>
						<td width="100%"><a href="{$base_url}/login?next=user/{$minfo[0].username}">{$snavlogin}</a> {$uch_shtxt8}</td>
						<td valign="top"><a href="javascript:void(0)" onclick="HideContent('divblock');">x</a></td>
					    </tr>
					{/if}
					    <tr><td colspan="2"><div id="chblockresp" class="p5"></div></td></tr>
					</table>
				    </form>
				    </div>
				    
				    <div id="divfriend" style="display: none;">
				    <form id="chfriendform">	
					<table cellpadding="5" cellspacing="0" width="100%" border="0" align="left" class="border">
					{if $smarty.session.UID ne ""}
					    <tr>
						<td width="100%">{$uch_shtxt7}</td>
						<td valign="top"><a href="javascript:void(0)" onclick="HideContent('divfriend');">x</a></td>
					    </tr>
					    <tr>
						<td><input type="button" value="{$up_btncontinue}" name="ch_friendbtn" onclick="thisDiv('no'); ch_act('friend');">&nbsp;&nbsp;<input type="button" value="{$up_btncancel}" name="ch_cancelbtn2" onclick="HideContent('divfriend');"></td>
						<td><input type="hidden" name="ch_frienduid" value="{$minfo[0].uid}"><input type="hidden" name="ch_friendname" value="{$minfo[0].username}"></td>
					    </tr>
					{else}
					    <tr>
						<td width="100%"><a href="{$base_url}/login?next=user/{$minfo[0].username}">{$snavlogin}</a> {$uch_shtxt8}</td>
						<td valign="top"><a href="javascript:void(0)" onclick="HideContent('divfriend');">x</a></td>
					    </tr>
					{/if}
					    <tr><td colspan="2" class="nopad"><div id="chfriendresp" class="p5"></div></td></tr>
					</table>
				    </form>
				    </div>
				</td>
			    </tr>
			</table>
		    </div>
