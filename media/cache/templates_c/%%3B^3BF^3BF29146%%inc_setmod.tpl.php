<?php /* Smarty version 2.6.26, created on 2009-11-10 15:24:21
         compiled from administration/_inc/inc_setmod.tpl */ ?>
			<form id="sitemodulesform">
			    <fieldset>
				<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('sitemoddiv'); ReverseContentDisplay('sitemodtxt'); changeclass_act('set3');"><span id="set3"><?php echo $this->_tpl_vars['adm_setleg3']; ?>
</span></a></legend>
				<div id="sitemodtxt" style="display: block;"><?php echo $this->_tpl_vars['adm_setleg4txt']; ?>
</div>
				<div id="sitemoddiv" style="display: none;">
				    <table cellpadding=2 cellspacing=0 border=0 align=left>
					<tr><td align=left class="" width="140"><?php echo $this->_tpl_vars['adm_setgen7']; ?>
</td>
					    <td align="left" class="lp1">
						<select name="amodule" class="selbox" onchange="ReverseContentDisplay('am1'); ReverseContentDisplay('am0');">
                                        	    <option value="1" <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                        	    <option value="0" <?php if ($this->_tpl_vars['enable_audio'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                    		</select>
                                    	    </td>
                                    	    <td width="60">
                                    		<div id="am1" <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                    		<div id="am0" <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                    	    </td>
                                    	</tr>
					<tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen8']; ?>
</td>
					    <td align="left" class="lp1">
						<select name="imodule" class="selbox" onchange="ReverseContentDisplay('im1'); ReverseContentDisplay('im0');">
                                        	    <option value="1" <?php if ($this->_tpl_vars['enable_images'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                        	    <option value="0" <?php if ($this->_tpl_vars['enable_images'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                    		</select>
                                    	    </td>
                                    	    <td>
                                    		<div id="im1" <?php if ($this->_tpl_vars['enable_images'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                    		<div id="im0" <?php if ($this->_tpl_vars['enable_images'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                    	    </td>
                                    	</tr>
					<tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen8x']; ?>
</td>
					    <td align="left" class="lp1">
						<select name="vmodule" class="selbox" onchange="ReverseContentDisplay('vm1'); ReverseContentDisplay('vm0');">
                                        	    <option value="1" <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                        	    <option value="0" <?php if ($this->_tpl_vars['enable_videos'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                    		</select>
                                    	    </td>
                                    	    <td>
                                    		<div id="vm1" <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                    		<div id="vm0" <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                    	    </td>
                                    	</tr>
					<tr><td align=left class=""><?php echo $this->_tpl_vars['setgen_chtxt1']; ?>
</td>
					    <td align="left" class="lp1">
						<select name="chmodule" class="selbox" onchange="ReverseContentDisplay('ch1'); ReverseContentDisplay('ch0');">
                                        	    <option value="1" <?php if ($this->_tpl_vars['enable_channels'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                        	    <option value="0" <?php if ($this->_tpl_vars['enable_channels'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                    		</select>
                                    	    </td>
                                    	    <td>
                                    		<div id="ch1" <?php if ($this->_tpl_vars['enable_channels'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                    		<div id="ch0" <?php if ($this->_tpl_vars['enable_channels'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                    	    </td>
                                    	</tr>
                                    	
                                    	<tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen9']; ?>
</td>
					    <td align="left" class="lp1">
						<select name="msection" class="selbox" onchange="ReverseContentDisplay('mem1'); ReverseContentDisplay('mem0');">
                                        	    <option value="1" <?php if ($this->_tpl_vars['members_section'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                        	    <option value="0" <?php if ($this->_tpl_vars['members_section'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                    		</select>
                                    	    </td>
                                    	    <td>
                                    		<div id="mem1" <?php if ($this->_tpl_vars['members_section'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                    		<div id="mem0" <?php if ($this->_tpl_vars['members_section'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                    	    </td>
                                    	</tr>
                                    	<tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen10']; ?>
</td>
					    <td align="left" class="lp1">
						<select name="inbox" class="selbox" onchange="ReverseContentDisplay('msgsettings'); ReverseContentDisplay('inb1'); ReverseContentDisplay('inb0');">
                                        	    <option value="1"<?php if ($this->_tpl_vars['enable_inbox'] == '1'): ?>selected<?php endif; ?>"><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                        	    <option value="0"<?php if ($this->_tpl_vars['enable_inbox'] == '0'): ?>selected<?php endif; ?>"><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                    		</select>
                                    	    </td>
                                    	    <td>
                                    		<div id="inb1" <?php if ($this->_tpl_vars['enable_inbox'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                    		<div id="inb0" <?php if ($this->_tpl_vars['enable_inbox'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                    	    </td>
                                    	</tr>
                                    	<tr>
                                    	    <td class="nopad"></td>
                                    	    <td class="nopad">
                                    	    <div id="msgsettings" <?php if ($this->_tpl_vars['enable_inbox'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>>
                                    		<table cellpadding="1" cellspacing="0" border=0 align="center">
                                    		    <tr>
                                    			<td class="pl4"><input type="checkbox" name="msgattach" <?php if ($this->_tpl_vars['msg_attach'] == '1'): ?>checked<?php endif; ?>></td>
                                    			<td class="pt2"><?php echo $this->_tpl_vars['adm_setgen31']; ?>
</td>
                                    		    </tr>
                                    		    <tr>
                                    			<td class="pl4" width="5"><input type="checkbox" name="userblock" <?php if ($this->_tpl_vars['msg_block'] == '1'): ?>checked<?php endif; ?>></td>
                                    			<td class="pt2"><?php echo $this->_tpl_vars['adm_setgen32']; ?>
</td>
                                    		    </tr>
                                    		    <tr>
                                    			<td class="pl4" width="5" valign="top"><input type="checkbox" name="msgmulti" <?php if ($this->_tpl_vars['msg_multi'] == '1'): ?>checked<?php endif; ?>></td>
                                    			<td class="pt2"><?php echo $this->_tpl_vars['adm_setgen33']; ?>
</td>
                                    		    </tr>
                                    		</table>
                                    	    </div>
                                    	    </td>
                                    	</tr>
                                    	<tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen28']; ?>
</td>
					    <td align="left" class="lp1">
						<select name="lastusers" class="selbox" onchange="ReverseContentDisplay('lastopts'); ReverseContentDisplay('lu1'); ReverseContentDisplay('lu0');"">
                                        	    <option value="1"<?php if ($this->_tpl_vars['last_users'] == '1'): ?>selected<?php endif; ?>"><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                        	    <option value="0"<?php if ($this->_tpl_vars['last_users'] == '0'): ?>selected<?php endif; ?>"><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                    		</select>
                                    	    </td>
                                    	    <td>
                                    		<div id="lu1" <?php if ($this->_tpl_vars['last_users'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                    		<div id="lu0" <?php if ($this->_tpl_vars['last_users'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                    	    </td>
                                    	</tr>
                                    	<tr>
                                    	    <td class="nopad"></td>
                                    	    <td class="nopad">
                                    	    <div id="lastopts" <?php if ($this->_tpl_vars['last_users'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>>
                                    		<table cellpadding="1" cellspacing="0" border=0>
                                    		    <tr>
                                    			 <td class="pl4" width="5"><input type="checkbox" name="lastuserstab" <?php if ($this->_tpl_vars['users_last'] == '1'): ?>checked<?php endif; ?>></td>
                                    			 <td class="pt2"><?php echo $this->_tpl_vars['adm_setgen34']; ?>
</td>
                                    		    </tr>
                                    		    <tr>
                                    			 <td class="pl4" width="5"><input type="checkbox" name="onlinenowtab" <?php if ($this->_tpl_vars['users_online'] == '1'): ?>checked<?php endif; ?>></td>
                                    			 <td class="pt2"><?php echo $this->_tpl_vars['adm_setgen35']; ?>
</td>
                                    		    </tr>
                                    		</table>
                                    	    </div>
                                    	    </td>
                                    	    <td></td>
                                    	</tr>

                                    	<tr><td align=left class=""><?php echo $this->_tpl_vars['filtermod1']; ?>
</td>
					    <td align="left" class="lp1">
						<select name="filtermod" class="selbox" onchange="ReverseContentDisplay('filteropts'); ReverseContentDisplay('fm1'); ReverseContentDisplay('fm0');"">
                                        	    <option value="1"<?php if ($this->_tpl_vars['word_filters'] == '1'): ?>selected<?php endif; ?>"><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                        	    <option value="0"<?php if ($this->_tpl_vars['word_filters'] == '0'): ?>selected<?php endif; ?>"><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                    		</select>
                                    	    </td>
                                    	    <td>
                                    		<div id="fm1" <?php if ($this->_tpl_vars['word_filters'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                    		<div id="fm0" <?php if ($this->_tpl_vars['word_filters'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                    	    </td>
                                    	</tr>
                                    	
                                    	<tr>
                                    	    <td class="nopad" colspan="2">
                                    	    <div id="filteropts" <?php if ($this->_tpl_vars['word_filters'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>>
                                    		<table cellpadding="1" cellspacing="0" border=0>
                                    		    <tr>
                                    			<td width="156"><?php echo $this->_tpl_vars['filtermod2']; ?>
</td>
                                    			<td class=""><textarea name="filteredwords" class="ff" cols="25" rows="10"><?php echo $this->_tpl_vars['file']; ?>
</textarea></td>
                                    		    </tr>
                                    		    <tr>
                                    			<td><?php echo $this->_tpl_vars['filtermod3']; ?>
</td>
                                    			<td class=""><input type="text" name="repstr" class="ff" size="10" value="<?php echo $this->_tpl_vars['repl_string']; ?>
"></td>
                                    		    </tr>
                                    		    <tr>
                                    			<td></td>
                                    			<td><?php echo $this->_tpl_vars['filtermod4']; ?>
</td>
                                    		    </tr>
                                    		</table>
                                    	    </div>
                                    	    </td>
                                    	    <td></td>
                                    	</tr>

                                    	<tr>                                                                                                                                                                       
                                        <td colspan="3" style="padding: 10px 0px 0px 0px;">
                                            <table cellpadding="2" cellspacing="0" align="left" border=0>
                                                <tr>
                                                    <td align="left" width="10"><input type="button" name="savesitemodbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setgensave']; ?>
" onclick="setsitemodule_settings();"></td>
                                                    <td align="left" width="300"><input type="button" name="savesitemodcancel" class="fb" value="<?php echo $this->_tpl_vars['adm_playcancelbtn']; ?>
" onclick="ReverseContentDisplay('sitemoddiv'); ReverseContentDisplay('sitemodtxt'); changeclass_act('set3');"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" align="left"><div id="setsitemodresp"></div></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
				    </table>
				</div>
			    </fieldset>
			</form>