			<form id="sitemodulesform">
			    <fieldset>
				<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('sitemoddiv'); ReverseContentDisplay('sitemodtxt'); changeclass_act('set3');"><span id="set3">{$adm_setleg3}</span></a></legend>
				<div id="sitemodtxt" style="display: block;">{$adm_setleg4txt}</div>
				<div id="sitemoddiv" style="display: none;">
				    <table cellpadding=2 cellspacing=0 border=0 align=left>
					<tr><td align=left class="" width="140">{$adm_setgen7}</td>
					    <td align="left" class="lp1">
						<select name="amodule" class="selbox" onchange="ReverseContentDisplay('am1'); ReverseContentDisplay('am0');">
                                        	    <option value="1" {if $enable_audio eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        	    <option value="0" {if $enable_audio eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    		</select>
                                    	    </td>
                                    	    <td width="60">
                                    		<div id="am1" {if $enable_audio eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    		<div id="am0" {if $enable_audio eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                    	    </td>
                                    	</tr>
					<tr><td align=left class="">{$adm_setgen8}</td>
					    <td align="left" class="lp1">
						<select name="imodule" class="selbox" onchange="ReverseContentDisplay('im1'); ReverseContentDisplay('im0');">
                                        	    <option value="1" {if $enable_images eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        	    <option value="0" {if $enable_images eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    		</select>
                                    	    </td>
                                    	    <td>
                                    		<div id="im1" {if $enable_images eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    		<div id="im0" {if $enable_images eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                    	    </td>
                                    	</tr>
					<tr><td align=left class="">{$adm_setgen8x}</td>
					    <td align="left" class="lp1">
						<select name="vmodule" class="selbox" onchange="ReverseContentDisplay('vm1'); ReverseContentDisplay('vm0');">
                                        	    <option value="1" {if $enable_videos eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        	    <option value="0" {if $enable_videos eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    		</select>
                                    	    </td>
                                    	    <td>
                                    		<div id="vm1" {if $enable_videos eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    		<div id="vm0" {if $enable_videos eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                    	    </td>
                                    	</tr>
					<tr><td align=left class="">{$setgen_chtxt1}</td>
					    <td align="left" class="lp1">
						<select name="chmodule" class="selbox" onchange="ReverseContentDisplay('ch1'); ReverseContentDisplay('ch0');">
                                        	    <option value="1" {if $enable_channels eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        	    <option value="0" {if $enable_channels eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    		</select>
                                    	    </td>
                                    	    <td>
                                    		<div id="ch1" {if $enable_channels eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    		<div id="ch0" {if $enable_channels eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                    	    </td>
                                    	</tr>
                                    	
                                    	<tr><td align=left class="">{$adm_setgen9}</td>
					    <td align="left" class="lp1">
						<select name="msection" class="selbox" onchange="ReverseContentDisplay('mem1'); ReverseContentDisplay('mem0');">
                                        	    <option value="1" {if $members_section eq "1"}selected{/if}>{$adm_setgenenabled}</option>
                                        	    <option value="0" {if $members_section eq "0"}selected{/if}>{$adm_setgendisabled}</option>
                                    		</select>
                                    	    </td>
                                    	    <td>
                                    		<div id="mem1" {if $members_section eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    		<div id="mem0" {if $members_section eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                    	    </td>
                                    	</tr>
                                    	<tr><td align=left class="">{$adm_setgen10}</td>
					    <td align="left" class="lp1">
						<select name="inbox" class="selbox" onchange="ReverseContentDisplay('msgsettings'); ReverseContentDisplay('inb1'); ReverseContentDisplay('inb0');">
                                        	    <option value="1"{if $enable_inbox eq "1"}selected{/if}">{$adm_setgenenabled}</option>
                                        	    <option value="0"{if $enable_inbox eq "0"}selected{/if}">{$adm_setgendisabled}</option>
                                    		</select>
                                    	    </td>
                                    	    <td>
                                    		<div id="inb1" {if $enable_inbox eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    		<div id="inb0" {if $enable_inbox eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                    	    </td>
                                    	</tr>
                                    	<tr>
                                    	    <td class="nopad"></td>
                                    	    <td class="nopad">
                                    	    <div id="msgsettings" {if $enable_inbox eq "1"}style="display: block;"{else}style="display: none;"{/if}>
                                    		<table cellpadding="1" cellspacing="0" border=0 align="center">
                                    		    <tr>
                                    			<td class="pl4"><input type="checkbox" name="msgattach" {if $msg_attach eq "1"}checked{/if}></td>
                                    			<td class="pt2">{$adm_setgen31}</td>
                                    		    </tr>
                                    		    <tr>
                                    			<td class="pl4" width="5"><input type="checkbox" name="userblock" {if $msg_block eq "1"}checked{/if}></td>
                                    			<td class="pt2">{$adm_setgen32}</td>
                                    		    </tr>
                                    		    <tr>
                                    			<td class="pl4" width="5" valign="top"><input type="checkbox" name="msgmulti" {if $msg_multi eq "1"}checked{/if}></td>
                                    			<td class="pt2">{$adm_setgen33}</td>
                                    		    </tr>
                                    		</table>
                                    	    </div>
                                    	    </td>
                                    	</tr>
                                    	<tr><td align=left class="">{$adm_setgen28}</td>
					    <td align="left" class="lp1">
						<select name="lastusers" class="selbox" onchange="ReverseContentDisplay('lastopts'); ReverseContentDisplay('lu1'); ReverseContentDisplay('lu0');"">
                                        	    <option value="1"{if $last_users eq "1"}selected{/if}">{$adm_setgenenabled}</option>
                                        	    <option value="0"{if $last_users eq "0"}selected{/if}">{$adm_setgendisabled}</option>
                                    		</select>
                                    	    </td>
                                    	    <td>
                                    		<div id="lu1" {if $last_users eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    		<div id="lu0" {if $last_users eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                    	    </td>
                                    	</tr>
                                    	<tr>
                                    	    <td class="nopad"></td>
                                    	    <td class="nopad">
                                    	    <div id="lastopts" {if $last_users eq "1"}style="display: block;"{else}style="display: none;"{/if}>
                                    		<table cellpadding="1" cellspacing="0" border=0>
                                    		    <tr>
                                    			 <td class="pl4" width="5"><input type="checkbox" name="lastuserstab" {if $users_last eq "1"}checked{/if}></td>
                                    			 <td class="pt2">{$adm_setgen34}</td>
                                    		    </tr>
                                    		    <tr>
                                    			 <td class="pl4" width="5"><input type="checkbox" name="onlinenowtab" {if $users_online eq "1"}checked{/if}></td>
                                    			 <td class="pt2">{$adm_setgen35}</td>
                                    		    </tr>
                                    		</table>
                                    	    </div>
                                    	    </td>
                                    	    <td></td>
                                    	</tr>

                                    	<tr><td align=left class="">{$filtermod1}</td>
					    <td align="left" class="lp1">
						<select name="filtermod" class="selbox" onchange="ReverseContentDisplay('filteropts'); ReverseContentDisplay('fm1'); ReverseContentDisplay('fm0');"">
                                        	    <option value="1"{if $word_filters eq "1"}selected{/if}">{$adm_setgenenabled}</option>
                                        	    <option value="0"{if $word_filters eq "0"}selected{/if}">{$adm_setgendisabled}</option>
                                    		</select>
                                    	    </td>
                                    	    <td>
                                    		<div id="fm1" {if $word_filters eq "1"}style="display: block;"{else}style="display: none;"{/if}><img src="{$img_url}/sign_active.gif" width="16" height="16" alt="{$adm_setgenenabled}" title="{$adm_setgenenabled}"></div>
                                    		<div id="fm0" {if $word_filters eq "1"}style="display: none;"{else}style="display: block;"{/if}><img src="{$img_url}/sign_inactive.gif" width="16" height="16" alt="{$adm_setgendisabled}" title="{$adm_setgendisabled}"></div>
                                    	    </td>
                                    	</tr>
                                    	
                                    	<tr>
                                    	    <td class="nopad" colspan="2">
                                    	    <div id="filteropts" {if $word_filters eq "1"}style="display: block;"{else}style="display: none;"{/if}>
                                    		<table cellpadding="1" cellspacing="0" border=0>
                                    		    <tr>
                                    			<td width="156">{$filtermod2}</td>
                                    			<td class=""><textarea name="filteredwords" class="ff" cols="25" rows="10">{$file}</textarea></td>
                                    		    </tr>
                                    		    <tr>
                                    			<td>{$filtermod3}</td>
                                    			<td class=""><input type="text" name="repstr" class="ff" size="10" value="{$repl_string}"></td>
                                    		    </tr>
                                    		    <tr>
                                    			<td></td>
                                    			<td>{$filtermod4}</td>
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
                                                    <td align="left" width="10"><input type="button" name="savesitemodbtn" class="fb" value="{$adm_setgensave}" onclick="setsitemodule_settings();"></td>
                                                    <td align="left" width="300"><input type="button" name="savesitemodcancel" class="fb" value="{$adm_playcancelbtn}" onclick="ReverseContentDisplay('sitemoddiv'); ReverseContentDisplay('sitemodtxt'); changeclass_act('set3');"></td>
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
