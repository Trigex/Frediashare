<?php /* Smarty version 2.6.26, created on 2009-11-10 15:24:21
         compiled from administration/_inc/inc_setother.tpl */ ?>
			<form id="setotherform">
			<fieldset>
			<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('othersetdiv'); ReverseContentDisplay('othersettxt'); changeclass_act('set5');"><span id="set5"><?php echo $this->_tpl_vars['adm_setleg5']; ?>
</span></a></legend>
			<div id="othersettxt" style="display: block;"><?php echo $this->_tpl_vars['adm_setleg5txt']; ?>
</div>
			<div id="othersetdiv" style="display: none;">
			<table cellpadding=2 cellspacing=0 border=0 align=left>
			    <tr><td align=left class="" width="140"><?php echo $this->_tpl_vars['adm_setgen11']; ?>
</td>
				<td align="left" class="lp1">
				    <select name="rss" class="selbox" onchange="ReverseContentDisplay('rss1'); ReverseContentDisplay('rss0');">
                                        <option value="1" <?php if ($this->_tpl_vars['rss_feeds'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                        <option value="0" <?php if ($this->_tpl_vars['rss_feeds'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                    </select>
                                </td>
                                <td width="60">
                            	    <div id="rss1" <?php if ($this->_tpl_vars['rss_feeds'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                    <div id="rss0" <?php if ($this->_tpl_vars['rss_feeds'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                </td>
                            </tr>
			    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen12']; ?>
</td>
				<td align="left" class="lp1">
				    <select name="cflags" class="selbox" onchange="ReverseContentDisplay('cf1'); ReverseContentDisplay('cf0');">
                                        <option value="1" <?php if ($this->_tpl_vars['country_flags'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                        <option value="0" <?php if ($this->_tpl_vars['country_flags'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                    </select>
                                </td>
                                <td>
                            	    <div id="cf1" <?php if ($this->_tpl_vars['country_flags'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                    <div id="cf0" <?php if ($this->_tpl_vars['country_flags'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                </td>
                            </tr>
			    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen142']; ?>
</td>
				<td align="left" class="lp1">
				    <select name="langbox" class="selbox" onchange="ReverseContentDisplay('lb1'); ReverseContentDisplay('lb0');">
                                        <option value="1" <?php if ($this->_tpl_vars['lang_box'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                        <option value="0" <?php if ($this->_tpl_vars['lang_box'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                    </select>
                                </td>
                                <td>
                            	    <div id="lb1" <?php if ($this->_tpl_vars['lang_box'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                    <div id="lb0" <?php if ($this->_tpl_vars['lang_box'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                </td>
                            </tr>
			    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen13']; ?>
</td>
				<td align="left" class="lp1">
				    <select name="captcha" class="selbox" onchange="ReverseContentDisplay('sc1'); ReverseContentDisplay('sc0');">
                                        <option value="1" <?php if ($this->_tpl_vars['signup_captcha'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                        <option value="0" <?php if ($this->_tpl_vars['signup_captcha'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                    </select>
                                </td>
                                <td>
                            	    <div id="sc1" <?php if ($this->_tpl_vars['signup_captcha'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                    <div id="sc0" <?php if ($this->_tpl_vars['signup_captcha'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                </td>
                            </tr>
                            <tr>
                        	<td align=left class=""><?php echo $this->_tpl_vars['adm_setgen14']; ?>
</td>
                                <td align="left" class="lp1">
                                    <select name="emailver" class="selbox" onchange="ReverseContentDisplay('emv1'); ReverseContentDisplay('emv0');">
                                        <option value="1" <?php if ($this->_tpl_vars['email_verification'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                        <option value="0" <?php if ($this->_tpl_vars['email_verification'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                    </select>
                                </td>
                                <td>
                                    <div id="emv1" <?php if ($this->_tpl_vars['email_verification'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                    <div id="emv0" <?php if ($this->_tpl_vars['email_verification'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                            	</td>
                    	    </tr>
			    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen29']; ?>
</td>
				<td align="left" class="lp1">
				    <select name="mylinks" class="selbox" onchange="ReverseContentDisplay('ml1'); ReverseContentDisplay('ml0');">
                                        <option value="1" <?php if ($this->_tpl_vars['panel_mylinks'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                        <option value="0" <?php if ($this->_tpl_vars['panel_mylinks'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                    </select>
                                </td>
                                <td>
                            	    <div id="ml1" <?php if ($this->_tpl_vars['panel_mylinks'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                    <div id="ml0" <?php if ($this->_tpl_vars['panel_mylinks'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                </td>
                            </tr>
			    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_setgen30']; ?>
</td>
				<td align="left" class="lp1">
				    <select name="rightlinks" class="selbox" onchange="ReverseContentDisplay('rl1'); ReverseContentDisplay('rl0');">
                                        <option value="1" <?php if ($this->_tpl_vars['panel_rightlinks'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                        <option value="0" <?php if ($this->_tpl_vars['panel_rightlinks'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                    </select>
                                </td>
                                <td>
                            	    <div id="rl1" <?php if ($this->_tpl_vars['panel_rightlinks'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                    <div id="rl0" <?php if ($this->_tpl_vars['panel_rightlinks'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                </td>
                            </tr>
			    <tr><td align=left class=""><?php echo $this->_tpl_vars['categcounts']; ?>
</td>
				<td align="left" class="lp1">
				    <select name="categcounts" class="selbox" onchange="ReverseContentDisplay('cc1'); ReverseContentDisplay('cc0');">
                                        <option value="1" <?php if ($this->_tpl_vars['categ_counts'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                        <option value="0" <?php if ($this->_tpl_vars['categ_counts'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                    </select>
                                </td>
                                <td>
                            	    <div id="cc1" <?php if ($this->_tpl_vars['categ_counts'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                    <div id="cc0" <?php if ($this->_tpl_vars['categ_counts'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                </td>
                            </tr>
			    <tr><td align=left class=""><?php echo $this->_tpl_vars['adm_chtypecount1']; ?>
</td>
				<td align="left" class="lp1">
				    <select name="chancounts" class="selbox" onchange="ReverseContentDisplay('chc1'); ReverseContentDisplay('chc0');">
                                        <option value="1" <?php if ($this->_tpl_vars['channel_counts'] == '1'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
</option>
                                        <option value="0" <?php if ($this->_tpl_vars['channel_counts'] == '0'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
</option>
                                    </select>
                                </td>
                                <td>
                            	    <div id="chc1" <?php if ($this->_tpl_vars['channel_counts'] == '1'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_active.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgenenabled']; ?>
"></div>
                                    <div id="chc0" <?php if ($this->_tpl_vars['channel_counts'] == '1'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/sign_inactive.gif" width="16" height="16" alt="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
" title="<?php echo $this->_tpl_vars['adm_setgendisabled']; ?>
"></div>
                                </td>
                            </tr>
			    <tr><td align=left class=""><?php echo $this->_tpl_vars['pr_chinfob44']; ?>
</td>
				<td align="left" class="lp1">
				    <select name="viewdelim" class="selbox">
                                        <option value="dott" <?php if ($this->_tpl_vars['views_delim'] == 'dott'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['pr_chinfob45']; ?>
</option>
                                        <option value="comma" <?php if ($this->_tpl_vars['views_delim'] == 'comma'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['pr_chinfob46']; ?>
</option>
                                    </select>
                                </td>
                                <td></td>
                            </tr>
                            <tr>                                                                                                                                                                       
                                <td colspan="3" style="padding: 10px 0px 0px 0px;">
                                    <table cellpadding="2" cellspacing="0" align="left" border=0>
                                        <tr>
                                            <td align="left" width="10"><input type="button" name="saveothersetbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setgensave']; ?>
" onclick="setother_settings();"></td>
                                            <td align="left" width="300"><input type="button" name="saveothersetcancel" class="fb" value="<?php echo $this->_tpl_vars['adm_playcancelbtn']; ?>
" onclick="ReverseContentDisplay('othersetdiv'); ReverseContentDisplay('othersettxt'); changeclass_act('set5');"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="left"><div id="setotherresp"></div></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr> 
			</table>
			</div>
			</fieldset>
			</form>