		    <table cellpadding=5 cellspacing=0 border=0 align=left width="100%">
				<tr>
				    <td align=center class="nopad">
				    {if $show ne "yes"}
					<div align="center">
					    {$adm_fileaccess}
					</div>
				    {else}
					{if $sbtn eq "alla" or $sbtn eq "adm_areq"}
					<div>
					    <object width="320" height="20" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0">
						<param name="movie" value="{$base_url}/modules/aPlayer/fmp3player.swf">
						<param name="menu" value="false">
						<param name="quality" value="high">
						<param name="bgcolor" value="#ffffff"> 
						<param name="flashvars" value="file={$flvdo_url}/user{$vuid}/{$flvname}&autostart=false">
						<embed src="{$base_url}/modules/aPlayer/fmp3player.swf" width="300" height="20" menu="false" quality="high" bgcolor="#ffffff" flashvars="file={$flvdo_url}/user{$vuid}/{$flvname}&autostart=false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
					    </object>
					</div>
					{elseif $sbtn eq "alli" or $sbtn eq "adm_ireq"}
					<div>
                                    	    {insert name=time_range assign=rtime field=addtime IDFR=vid id=$vidid tbl=files_image}
                                            {insert name=key_to_user_image assign=owner vkey=$smarty.request.id}
                                            <a href="{$pic_url}/user{$vuid}/{$iname}" rel="lightbox" title="{$ftitle}&lt;br&gt;{$descr}&lt;br&gt;{$fileadded}{$rtime}{$fileaddedago}&lt;br&gt;{$fileaddedby} &lt;a href=&quot;{$admin_url}/members/{$vuid}&quot;&gt;{$owner}&lt;/a&gt;&lt;br&gt;&lt;br&gt;" onMouseOver="window.status=''; return true;">
                                        	<img width="320" height="240" src="{$tmb_url}/user{$vuid}/{$vidid}v2.jpg" alt="{$ftitle}" title="{$ftitle}">
                                            </a>                                                                                                                                                               
                                        </div>
					{elseif $sbtn eq "allv" or $sbtn eq "adm_vreq"}
					{assign var=pwidth value=320}{assign var=pheight value=240}
					{assign var=pfs value="true"}
					<div align="center">
                        		    <div id="vPlayer" class="br2">Macromedia Flash Player 9 is required to access this object!<br> To get the most recent version of Flash player available for your browser, visit the <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" target="_blank">Adobe Flash download page</a>.</div>
                            		    <script type="text/javascript">
	                                    // <![CDATA[
		                                var so = new SWFObject('{$base_url}/modules/vPlayer/vPlayer.swf?f={$base_url}/modules/vPlayer/vPlayercfg.php?aid={$smarty.request.id}', 'main', '{$pwidth}', '{$pheight}', '9', '{$bgc}');
		                                so.addParam('allowfullscreen','{$pfs}');
		                                so.addParam('allowscriptaccess','always');
		                                so.addParam('quality','high');
		                                so.addParam('bgcolor','{$bgc}');
		                                so.write("vPlayer");
	                                    // ]]>
		                            </script>
		                    	    </div>
					</div>
					
					{/if}
					<div class="pt10">
					{if $sbtn eq "alla" or $sbtn eq "adm_areq"}<form id="admin_asave">{elseif $sbtn eq "alli" or $sbtn eq "adm_ireq"}<form id="admin_isave">{elseif $sbtn eq "allv" or $sbtn eq "adm_vreq"}<form id="admin_vsave">{/if}
					    <table cellpadding=3 cellspacing=1 border=0>
						<tr>
						    <td align="left" width="30%">{$myfiles_edittitle} </td><td align=left><input type="text" class="ff width175" name="vtitle" value="{if $smarty.request.vtitle eq ""}{$ftitle}{else}{$smarty.request.vtitle}{/if}"></td>
						</tr>
						<tr>
						    <td align="left" valign="top">{$myfiles_editdescr} </td><td align=left><textarea name="vdescr" rows="5" class="ff width175">{if $smarty.request.vdescr eq ""}{$descr|spchar}{else}{$smarty.request.vdescr}{/if}</textarea></td>
						</tr>
						<tr>
						    <td align="left">{$myfiles_edittags} </td><td align=left><input type="text" class="ff width175" name="vtags" value="{if $smarty.request.vtags eq ""}{$tags}{else}{$smarty.request.vtags}{/if}"></td>
						</tr>
						<tr>
						    <td align="left" valign=top>{$myfiles_editcateg} </td>
						    <td>
							<table cellpadding=0 cellspacing=0 border=0>
							    <tr>
							    {if $smarty.request.categlist eq ""}
								{if $sbtn eq "alla" or $sbtn eq "adm_areq"}{insert name=list_categ_all_audio assign=chinfo vid=$vidid}
								{elseif $sbtn eq "alli" or $sbtn eq "adm_ireq"}{insert name=list_categ_all_image assign=chinfo vid=$vidid}
								{elseif $sbtn eq "allv" or $sbtn eq "adm_vreq"}{insert name=list_categ_all_video assign=chinfo vid=$vidid}
								{/if}
								{section name=i loop=$chinfo}
								{if $smarty.section.i.index mod 1 eq "0" and $smarty.section.i.index gt "0"}</tr><tr>{/if}
								    <td width="5%">
								    {assign var="status" value=""}
								    {section name=j loop=$catid}
									{if $catid[j] eq $chinfo[i].id}{assign var="status" value="checked"}{/if}
								    {/section}
								    <input type=checkbox name=categlist[] value="{$chinfo[i].id}" {$status}>
								    </td>
								    <td align=left>{$chinfo[i].ch}
								{/section}
								    </td>
							    {else}
								{if $sbtn eq "alla" or $sbtn eq "adm_areq"}{insert name=list_categ_all_audio assign=chinfo vid=$vidid}
								{elseif $sbtn eq "alli" or $sbtn eq "adm_ireq"}{insert name=list_categ_all_image assign=chinfo vid=$vidid}
								{elseif $sbtn eq "allv" or $sbtn eq "adm_vreq"}{insert name=list_categ_all_video assign=chinfo vid=$vidid}
								{/if}
								{insert name=list_categ_all_audio assign=chinfo vid=$VID}
								{section name=i loop=$chinfo}
								{if $smarty.section.i.index mod 4 eq "0" and $smarty.section.i.index gt "0"}</tr><tr>{/if}
							    <td width="5%">
								<input type="checkbox" name="categlist[]" value="{$chinfo[i].id}" {section name=j loop=$vcategs}{if $vcategs[j] eq $chinfo[i].id}checked{else}{/if}{/section}>
							    </td>
							    <td align=left>{$chinfo[i].ch}</td>
							    {/section}
							    {/if}
							    </tr>
							</table>
						    </td>
						    </tr>
						    <tr>
							<td align="left" class="dottbt">{$myfiles_editprivacy}</td>
							<td align="left" class="dottbt">
							    <table cellpadding=0 cellspacing=0 border=0>
								<tr>
								    <td><input type="radio" name="type" value="public" {if $is_type eq "public"}checked{/if}></td>
								    <td valign=bottom>{$filepublic}</td>
								    <td class="pl10"></td>
								    <td><input type="radio" name="type" value="private" {if $is_type ne "public"}checked{/if}></td>
								    <td valign=bottom>{$fileprivate}</td>
								</tr>
							    </table>
							</td>
						    </tr>
						    <tr>
							<td align="left">{$adm_fileapproved}</td>
							<td align="left">
							    <table cellpadding=0 cellspacing=0 border=0>
								<tr>
								    <td><input type="radio" name="appr" value="1" {if $is_active eq "1"}checked{/if}></td>
								    <td valign=bottom >{$adm_fileyes}</td>
								    <td class="pl10"></td>
								    <td><input type="radio" name="appr" value="0" {if $is_active ne "1"}checked{/if}></td>
								    <td valign=bottom>{$adm_fileno}</td>
								</tr>
							    </table>
							</td>
						    </tr>
						    <tr>
							<td align="left">{$adm_filefeatured}</td>
							<td align="left">
							    <table cellpadding=0 cellspacing=0 border=0>
								<tr>
								    <td><input type="radio" name="feat" value="yes" {if $is_feat eq "yes"}checked{/if}></td>
								    <td valign=bottom>{$adm_fileyes}</td>
								    <td class="pl10"></td>
								    <td><input type="radio" name="feat" value="no" {if $is_feat ne "yes"}checked{/if}></td>
								    <td valign=bottom>{$adm_fileno}</td>
								</tr>
							    </table>
							</td>
						    </tr>
						    {if $sbtn eq "allv" or $sbtn eq "adm_vreq"}
						    <tr>
                                                        <td align=left>{$adm_filerecomm}</td>
                                                        <td align=left>
                                                            <table cellpadding=0 cellspacing=0 border=0>
                                                                <tr>
                                                                    <td><input type="radio" name="rec" value="yes" {if $is_rec eq "yes"}checked{/if}></td>
                                                                    <td valign=bottom>{$adm_fileyes}</td>
                                                                    <td class="pl10"></td>
                                                                    <td><input type="radio" name="rec" value="no" {if $is_rec ne "yes"}checked{/if}></td>
                                                                    <td valign=bottom>{$adm_fileno}</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
						    {/if}
						    <tr>
							<td align="left">{$adm_fileinapp}</td>
							<td align="left">
							    <table cellpadding=0 cellspacing=0 border=0>
								<tr>
								    <td><input type="radio" name="inapp" value="yes" {if $is_inapp eq "yes"}checked{/if}></td>
								    <td valign=bottom>{$adm_fileyes}</td>
								    <td class="pl10"></td>
								    <td><input type="radio" name="inapp" value="no" {if $is_inapp ne "yes"}checked{/if}></td>
								    <td valign=bottom>{$adm_fileno}</td>
								</tr>
							    </table>
							</td>
						    </tr>
						    <tr>
                                                        <td align="left" class="dottbt">{if $sbtn eq "alla" or $sbtn eq "adm_areq"}{$adm_setauditions}{else}{$adm_setviews}{/if}</td>
                                                        <td align="left" class="dottbt">
                                                    	    {if $sbtn eq "alla" or $sbtn eq "adm_areq"}{insert name=getfield assign=views field=views table=files_audio qfield=vkey qvalue=$smarty.request.id}
                                                    	    {elseif $sbtn eq "alli" or $sbtn eq "adm_ireq"}{insert name=getfield assign=views field=views table=files_image qfield=vkey qvalue=$smarty.request.id}
                                                    	    {elseif $sbtn eq "allv" or $sbtn eq "adm_vreq"}{insert name=getfield assign=views field=views table=files_video qfield=vkey qvalue=$smarty.request.id}
                                                    	    {/if}
                                                        <input type="text" name="views" class="ff" value="{$views}" size="10">{$adm_setunit1}</td>
                                                    </tr>
						    <tr>
                                                        <td align="left">{$adm_setfav}</td>
                                                        <td align="left">
                                                    	    {if $sbtn eq "alla" or $sbtn eq "adm_areq"}{insert name=getfield assign=fav field=vfav table=files_audio qfield=vkey qvalue=$smarty.request.id}
                                                    	    {elseif $sbtn eq "alli" or $sbtn eq "adm_ireq"}{insert name=getfield assign=fav field=vfav table=files_image qfield=vkey qvalue=$smarty.request.id}
                                                    	    {elseif $sbtn eq "allv" or $sbtn eq "adm_vreq"}{insert name=getfield assign=fav field=vfav table=files_video qfield=vkey qvalue=$smarty.request.id}
                                                    	    {/if}
                                                        <input type="text" name="favs" class="ff" value="{$fav}" size="10">{$adm_setunit1}</td>
                                                    </tr>
                                                    {if $btn ne "adm_image"}
						    <tr>
                                                        <td align="left">{$adm_setdur}</td>
                                                        <td align="left">
                                                    	    {if $sbtn eq "alla" or $sbtn eq "adm_areq"}{insert name=getfield assign=dur field=vduration table=files_audio qfield=vkey qvalue=$smarty.request.id}
                                                    	    {elseif $sbtn eq "alli" or $sbtn eq "adm_ireq"}{insert name=getfield assign=dur field=vduration table=files_image qfield=vkey qvalue=$smarty.request.id}
                                                    	    {elseif $sbtn eq "allv" or $sbtn eq "adm_vreq"}{insert name=getfield assign=dur field=vduration table=files_video qfield=vkey qvalue=$smarty.request.id}
                                                    	    {/if}
                                                        <input type="text" name="duration" class="ff" value="{$dur}" size="10">{$adm_setunit2}</td>
                                                    </tr>
                                                    {/if}
						    <tr>
                                                        <td align="left">{$adm_setdate}</td>
                                                        <td align="left">
                                                    			{if $sbtn eq "alla" or $sbtn eq "adm_areq"}{insert name=getfield assign=date field=adddate table=files_audio qfield=vkey qvalue=$smarty.request.id}
                                                    			{elseif $sbtn eq "alli" or $sbtn eq "adm_ireq"}{insert name=getfield assign=date field=adddate table=files_image qfield=vkey qvalue=$smarty.request.id}
                                                    			{elseif $sbtn eq "allv" or $sbtn eq "adm_vreq"}{insert name=getfield assign=date field=adddate table=files_video qfield=vkey qvalue=$smarty.request.id}
                                                    			{/if}
                                                    	    <table cellpadding=0 cellspacing=0 border=0>
                                                    		<tr>
                                                    		{if $date_selection eq "css"}
                                                    		    <td>
                                                    			<input type="text" readonly name="date" class="ff" value="{$date}" size="10">
                                                    		    </td>
                                                    		    <td valign="top">&nbsp;<img src="{$img_url}/calendar/cal.gif" width="16" height="16" border="0" alt="{$adm_setdatetxt}" title="{$adm_setdatetxt}" onclick="displayCalendar(document.forms[4].date,'yyyy-mm-dd',this);"></td>
                                                    		{else}
                                                    		    <td>{html_select_date prefix="fd_" time=$date start_year="-109" end_year="+1" display_days=true all_extra='class="selbox"' month_extra='style="width: 70px;"' day_extra='style="width: 45px;"' year_extra='style="width: 60px;"'}</td>
                                                    		{/if}
                                                    		</tr>
                                                    	    </table>
                                                    	</td>
                                                    </tr>
                                                    {if $reason ne ""}
                                                    <tr>
                                                        <td align=left class="dottbt"><span class="gr">{$adm_reqtext}</span></td>
                                                        <td align=left class="dottbt"><span class="gr">{$reason}</span></td>
                                                    </tr>
                                                        {if $solved eq "0"}
                                                    <tr>
                                                        <td align=left><span class="gr">{$adm_reqclose}</span></td>
                                                        <td align=left>
                                                        {if $smarty.request.show eq "featured"}
                                                            <input type="checkbox" name="solve" value="1">
                                                        {elseif $smarty.request.show eq "inappropriate"}
                                                            <input type="checkbox" name="solvei" value="1">
                                                        {/if}
                                                        </td>
                                                    </tr>
                                                        {/if}
                                                    {/if}
						    <tr>
							<td align="left" colspan=2 class="dottbt">
							    <script language="javascript" src="{$js_url}/ajaxresponder.js" type="text/javascript"></script>
							    <input type="hidden" name="ldivx" id="ldivx" value="">
							    <input type="hidden" name="thisDiv" id="thisDiv" value="">
							    <table cellpadding=2 cellspacing=0 border=0 width="100%">
								<tr>
								    <td width="10%" align="left" valign="top">
									<input type="hidden" name="key" value="{$smarty.request.id}">
									{if $sbtn eq "alla" or $sbtn eq "adm_areq"}<input type="button" name="vsave" class="fb" value="{$adm_btnsave}" onclick="document.getElementById('thisDiv').value = 'yes'; ldiv('asavea'); asaveit();">
									{elseif $sbtn eq "alli" or $sbtn eq "adm_ireq"}<input type="button" name="vsave" class="fb" value="{$adm_btnsave}" onclick="document.getElementById('thisDiv').value = 'yes'; ldiv('isavei'); isaveit();">
									{elseif $sbtn eq "allv" or $sbtn eq "adm_vreq"}<input type="button" name="vsave" class="fb" value="{$adm_btnsave}" onclick="document.getElementById('thisDiv').value = 'yes'; ldiv('vsavev'); vsaveit();">
									{/if}
								    </td>
								    <td width="90%" align="left" class="p5">
									<div id="loading_fd" style="display: none;">
									    <table cellpadding=2 cellspacing=0 border=0>
										<tr><td>{$adm_setgen79}</td><td>{$loading_gif}</td></tr>
									    </table>
									</div>
									{if $sbtn eq "alla" or $sbtn eq "adm_areq"}<div id="asave"></div>
									{elseif $sbtn eq "alli" or $sbtn eq "adm_ireq"}<div id="isave"></div>
									{elseif $sbtn eq "allv" or $sbtn eq "adm_vreq"}<div id="vsave"></div>
									{/if}
								    </td>
								</tr>
							    </table>
							</td>
						    </tr>
						</table>
					    </form><br>
					    {if $sbtn eq "allv" or $sbtn eq "adm_vreq"}
					    {include file="administration/_inc/inc_thumbs.tpl"}
					    <br>
					    {/if}
					    {include file="administration/ratings.tpl"}
					    </div>
					</td>
					{/if}
				    </tr>
				    </table>
			        </td>
			    </tr>
			</table>
