<?php /* Smarty version 2.6.26, created on 2009-11-10 15:42:30
         compiled from _inc/chan/_inc/inc_userpageb2.tpl */ ?>
		    <div id="b2">
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td class="thead2" align="left"> <?php echo $this->_tpl_vars['uch_txt16']; ?>
<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
</td>
			    <tr>
			    <tr>
				<td class="tbody2">
				    <table cellpadding="0" cellspacing="0" width="100%" border="0" align="left">
					<tr>
					    <td valign="middle" align="right" width="90"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/user/<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
"><img class="pborder" src="<?php echo $this->_tpl_vars['usrimg_url']; ?>
/<?php echo $this->_tpl_vars['minfo'][0]['photo']; ?>
" width="55" height="55" alt="<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
"></a></td>
					    <td align="left">
						<div class="pl10">
						    <div class="p1">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
    							<?php if ($this->_tpl_vars['minfo'][0]['ch_type'] == 2): ?>
							    <tr>
								<td colspan="2" align="left"><div class="p5"><a href="<?php echo $this->_tpl_vars['minfo'][0]['inf_eurl']; ?>
"><b><?php echo $this->_tpl_vars['minfo'][0]['inf_etitle']; ?>
</b></a></div></td>
							    </tr>
							<?php endif; ?>
							    <tr>
								<td width="30"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/inbox/compose/<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
"><div class="btnmail" id="btnmail" onmouseover="set_chbtn('btnmail');" onmouseout="set_chbtn('btnmail');"></div></a></td>
								<td><div><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/inbox/compose/<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
" onmouseover="set_chbtn('btnmail');" onmouseout="set_chbtn('btnmail');"><?php echo $this->_tpl_vars['uch_txt17']; ?>
</a></div></td>
							    </tr>
							</table>
						    </div>
						    <?php if ($this->_tpl_vars['minfo'][0]['ch_comm'] == 'yes'): ?>
						    <div class="p1">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
							    <tr>
								<td width="30"><div class="btncomm" id="btncomm" onmouseover="set_chbtn('btncomm');" onmouseout="set_chbtn('btncomm');"></div></td>
								<td><div><a href="#add_comm" onmouseover="set_chbtn('btncomm');" onmouseout="set_chbtn('btncomm');"><?php echo $this->_tpl_vars['uch_txt18']; ?>
</a></div></td>
							    </tr>
							</table>
						    </div>
						    <?php endif; ?>
						    <div class="p1">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
							    <tr>
								<td width="30"><div class="btnshare" id="btnshare" onmouseover="set_chbtn('btnshare');" onmouseout="set_chbtn('btnshare');"></div></td>
								<td><div><a href="javascript:void(0)" onclick="ShowContent('divshare'); HideContent('divblock'); HideContent('divfriend');" onmouseover="set_chbtn('btnshare');" onmouseout="set_chbtn('btnshare');"><?php echo $this->_tpl_vars['uch_txt19']; ?>
</a></div></td>
							    </tr>
							</table>
						    </div>
						    <?php if ($this->_tpl_vars['msg_block'] == '1'): ?>
						    <div class="p1">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
							    <tr>
								<td width="30"><div class="btnblock" id="btnblock" onmouseover="set_chbtn('btnblock');" onmouseout="set_chbtn('btnblock');"></div></td>
								<td><div><a href="javascript:void(0)" onclick="ShowContent('divblock'); HideContent('divshare'); HideContent('divfriend');" onmouseover="set_chbtn('btnblock');" onmouseout="set_chbtn('btnblock');"><?php echo $this->_tpl_vars['uch_txt20']; ?>
</a></div></td>
							    </tr>
							</table>
						    </div>
						    <?php endif; ?>
						    <div class="p1">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
							    <tr>
								<td width="30"><div class="btnfriend" id="btnfriend" onmouseover="set_chbtn('btnfriend');" onmouseout="set_chbtn('btnfriend');"></div></td>
								<td><div><a href="javascript:void(0)" onclick="ShowContent('divfriend'); HideContent('divshare'); HideContent('divblock');" onmouseover="set_chbtn('btnfriend');" onmouseout="set_chbtn('btnfriend');"><?php echo $this->_tpl_vars['uch_txt21']; ?>
</a></div></td>
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
						    <div><?php echo $this->_tpl_vars['uch_shtxt1']; ?>
</div>
						    <div class="p1"><textarea name="ch_addr" cols="30" rows="3"></textarea></div>
						    <div class="p1">&nbsp;</div>
						    <div><?php echo $this->_tpl_vars['uch_shtxt2']; ?>
</div>
						    <div class="p1"><textarea name="ch_text" cols="30" rows="3"><?php echo $this->_tpl_vars['uch_shtxt3']; ?>
</textarea></div>
						    <div class="p1">
							<table cellpadding="3" cellspacing="0">
							    <tr>
								<td><?php echo $this->_tpl_vars['signup_captchatext']; ?>
 <br><input type="text" name="ch_vcode"></td>
							    </tr>
							    <tr>
								<td style="padding-top: 1px;"><img src="<?php echo $this->_tpl_vars['base_url']; ?>
/captcha" alt="asd"></td>
							    </tr>
							    <tr>
								<td><input type="button" name="ch_send" value="<?php echo $this->_tpl_vars['adm_memsendbtn']; ?>
" onclick="thisDiv('yes'); ldiv('chshareresp'); ch_share();"></td>
							    </tr>
							    <tr>
								<td>
								    
								    <div id="loading_sh" style="display: none;">
									<table cellpadding=5 cellspacing=0 border=0>
									    <tr><td><?php echo $this->_tpl_vars['last_loading']; ?>
</td><td><?php echo $this->_tpl_vars['loading_gif']; ?>
</td></tr>
									</table>
								    </div>
								    <input type="hidden" name="ch_name" value="<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
">
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
					<?php if ($_SESSION['UID'] != ""): ?>
					    <tr>
						<td width="100%"><?php echo $this->_tpl_vars['uch_shtxt6']; ?>
</td>
						<td valign="top"><a href="javascript:void(0)" onclick="HideContent('divblock');">x</a></td>
					    </tr>
					    <tr>
						<td><input type="button" name="ch_blockbtn" value="<?php echo $this->_tpl_vars['up_btncontinue']; ?>
" onclick="thisDiv('no'); ch_act('block');">&nbsp;&nbsp;<input type="button" name="ch_cancelbtn" value="<?php echo $this->_tpl_vars['up_btncancel']; ?>
" onclick="HideContent('divblock');"></td>
						<td><input type="hidden" name="ch_blockeduid" value="<?php echo $this->_tpl_vars['minfo'][0]['uid']; ?>
"><input type="hidden" name="ch_blockedname" value="<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
"></td>
					    </tr>
					<?php else: ?>
					    <tr>
						<td width="100%"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/login?next=user/<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
"><?php echo $this->_tpl_vars['snavlogin']; ?>
</a> <?php echo $this->_tpl_vars['uch_shtxt8']; ?>
</td>
						<td valign="top"><a href="javascript:void(0)" onclick="HideContent('divblock');">x</a></td>
					    </tr>
					<?php endif; ?>
					    <tr><td colspan="2"><div id="chblockresp" class="p5"></div></td></tr>
					</table>
				    </form>
				    </div>
				    
				    <div id="divfriend" style="display: none;">
				    <form id="chfriendform">	
					<table cellpadding="5" cellspacing="0" width="100%" border="0" align="left" class="border">
					<?php if ($_SESSION['UID'] != ""): ?>
					    <tr>
						<td width="100%"><?php echo $this->_tpl_vars['uch_shtxt7']; ?>
</td>
						<td valign="top"><a href="javascript:void(0)" onclick="HideContent('divfriend');">x</a></td>
					    </tr>
					    <tr>
						<td><input type="button" value="<?php echo $this->_tpl_vars['up_btncontinue']; ?>
" name="ch_friendbtn" onclick="thisDiv('no'); ch_act('friend');">&nbsp;&nbsp;<input type="button" value="<?php echo $this->_tpl_vars['up_btncancel']; ?>
" name="ch_cancelbtn2" onclick="HideContent('divfriend');"></td>
						<td><input type="hidden" name="ch_frienduid" value="<?php echo $this->_tpl_vars['minfo'][0]['uid']; ?>
"><input type="hidden" name="ch_friendname" value="<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
"></td>
					    </tr>
					<?php else: ?>
					    <tr>
						<td width="100%"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/login?next=user/<?php echo $this->_tpl_vars['minfo'][0]['username']; ?>
"><?php echo $this->_tpl_vars['snavlogin']; ?>
</a> <?php echo $this->_tpl_vars['uch_shtxt8']; ?>
</td>
						<td valign="top"><a href="javascript:void(0)" onclick="HideContent('divfriend');">x</a></td>
					    </tr>
					<?php endif; ?>
					    <tr><td colspan="2" class="nopad"><div id="chfriendresp" class="p5"></div></td></tr>
					</table>
				    </form>
				    </div>
				</td>
			    </tr>
			</table>
		    </div>