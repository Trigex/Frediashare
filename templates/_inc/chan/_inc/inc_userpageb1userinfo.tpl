			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td class="tbody1" colspan="2" align="left" style="padding-right: 0px;">
				    {insert name=subs_count assign=subscount uid=$minfo[0].uid}
				    <table cellpadding="0" cellspacing="0" width="100%" border=0 align="left">
					<tr>
					    <td valign="top" align="center" width="{$avatar_width}"><img class="pborder" src="{$usrimg_url}/{$minfo[0].photo}" width="{$avatar_width}" height="{$avatar_height}" alt="{$minfo[0].username}"><br>- {insert name=get_chtype assign=chtype chnr=$minfo[0].ch_type}{$chtype|strtoupper} -</td>
					    <td valign="top" width="100%">
						<div style="padding-left: 5px;">
						    <div class="largetitle">{$minfo[0].username} {if $minfo[0].show_status eq "yes"}<span class="f10 normal">({if $minfo[0].is_logged eq "1"}{$profile_online}{else}{$profile_offline}{/if})</span>{/if}</div>
						    {if $minfo2[0].p_style ne ""}<div class="pt2"><span class="f11">{$uch_txt2}</span><span class="bold">{$minfo2[0].p_style}</span></div>{/if}
						    {if $minfo[0].show_age eq "yes" and $uage gt 0}<div><span class="f11">{$profile_age1}</span><span class="bold">{$uage}</span></div>{/if}
						    <div class=""><span class="f11">{$uch_txt3}</span><span class="bold">{$minfo[0].reg_on|date_format:"%B %d, %Y"}</span></div>
						    <div class=""><span class="f11">{$adm_memdetails7}</span> <span class="bold">{$minfo[0].last_login|date_format:"%B %d, %Y"}</span></div>
						    <div class=""><span class="f11">{$uch_thl10}:</span> <span class="bold">{$subscount|viewnr}</span></div>
						    <div class=""><span class="f11">{$uch_txt8}</span> <span class="bold">{$minfo[0].ch_views|viewnr}</span></div>
						</div>
					    </td>
					</tr>
					<tr>
					    <td colspan="2">
					    {if $minfo[0].ch_type eq 2 or $minfo[0].ch_type eq 1 or $minfo[0].ch_type eq 4 or $minfo[0].ch_type eq 5 or $minfo[0].ch_type eq 6}
						{if $minfo[0].ch_desc ne ""}<div><br>{$minfo[0].ch_desc|nl2br|spchar}<br><br></div>{/if}
						{if $minfo[0].fname ne "" or $minfo[0].lname ne ""}<div><span class="f11">{$profile_name}</span><span class="bold">{$minfo[0].fname|nl2br|spchar} {$minfo[0].lname|nl2br|spchar}</span></div>{/if}
						{if $minfo[0].ch_type eq 6}
						    {if $minfo2[0].p_infl ne ""}<div class="p5"><span class="f11">{$pr_chinfob61}</span> <span class="bold">{$minfo2[0].p_infl|nl2br|spchar}</span></div>{/if}
						    {if $minfo2[0].p_sim ne ""}<div class="p1"><span class="f11">{$pr_chinfom40}</span> <span class="bold">{$minfo2[0].p_sim|nl2br|spchar}</span></div>{/if}
						{/if}
						{if $minfo[0].about_me ne ""}<div class="p5">{$minfo[0].about_me|nl2br|spchar}</div>{/if}
						{if $minfo[0].inf_city ne ""}<div class="p1"><span class="f11">{$pr_chinfom27}</span><span class="bold">{$minfo[0].inf_city|nl2br|spchar}</span></div>{/if}
						{if $minfo[0].inf_town ne ""}<div class="p1"><span class="f11">{$pr_chinfop31}</span><span class="bold">{$minfo[0].inf_town|nl2br|spchar}</span></div>{/if}
						{if $minfo[0].from_country ne ""}<div class="p1"><span class="f11">{$uch_txt9}</span><span class="bold">{$minfo[0].from_country}</span></div>{/if}
						{if $minfo[0].inf_occup ne ""}<div class="p1"><span class="f11">{$pr_chinfop17}</span><span class="bold">{$minfo[0].inf_occup|nl2br|spchar}</span></div>{/if}
						{if $minfo[0].inf_comp ne ""}<div class="p1"><span class="f11">{$pr_chinfop18}</span><span class="bold">{$minfo[0].inf_comp|nl2br|spchar}</span></div>{/if}
						{if $minfo[0].inf_interests ne ""}<div class="p1"><span class="f11">{$pr_chinfop22}</span><span class="bold">{$minfo[0].inf_interests|nl2br|spchar}</span></div>{/if}
						{if $minfo[0].inf_movies ne ""}<div class="p1"><span class="f11">{$uch_txt10}</span><span class="bold">{$minfo[0].inf_movies|nl2br|spchar}</span></div>{/if}
						{if $minfo[0].inf_music ne ""}<div class="p1"><span class="f11">{$uch_txt11}</span><span class="bold">{$minfo[0].inf_music|nl2br|spchar}</span></div>{/if}
						{if $minfo[0].inf_books ne ""}<div class="p1"><span class="f11">{$uch_txt12}</span><span class="bold">{$minfo[0].inf_books|nl2br|spchar}</span></div>{/if}
						{if $minfo[0].site ne ""}<div class="p1"><span class="f11">{$adm_memdetails14}</span> <span class="bold"><a href="{$minfo[0].site}" target="_blank">{$minfo[0].site}</a></span></div>{/if}
					    {elseif $minfo[0].ch_type eq 3}
						{if $minfo[0].ch_desc ne ""}<div class="p1"><br>{$minfo[0].ch_desc|nl2br|spchar}<br><br></div>{/if}
						{if $minfo2[0].p_about ne ""}<div class="p1">{$minfo2[0].p_about|nl2br|spchar}<br><br></div>{/if}
						{if $minfo2[0].p_formdate ne "0000-00-00"}<div class="p1"><span class="f11">{$pr_chinfom6}</span> <span class="bold">{$minfo2[0].p_formdate|date_format:"%B %d, %Y"}</span></div>{/if}
						{if $minfo2[0].p_reclabel ne ""}<div class="p1"><span class="f11">{$pr_chinfom7}</span> <span class="bold">{$minfo2[0].p_reclabel|nl2br|spchar}</span></div>{/if}
						{if $minfo2[0].p_labeltype ne ""}<div class="p1"><span class="f11">{$pr_chinfom8}</span> <span class="bold">{$minfo2[0].p_labeltype|nl2br|spchar}</span></div>{/if}
						{if $minfo2[0].p_bandmem ne ""}<div class="p1"><span class="f11">{$pr_chinfom5}</span> <span class="bold">{$minfo2[0].p_bandmem|nl2br|spchar}</span></div>{/if}
						{if $minfo2[0].p_infl ne ""}<div class="p1"><span class="f11">{$pr_chinfob61}</span> <span class="bold">{$minfo2[0].p_infl|nl2br|spchar}</span></div>{/if}
						{if $minfo2[0].p_sim ne ""}<div class="p1"><span class="f11">{$pr_chinfom9}</span> <span class="bold">{$minfo2[0].p_sim|nl2br|spchar}</span></div>{/if}
						{if $minfo[0].inf_city ne ""}<div class="p1"><span class="f11">{$pr_chinfom27}</span><span class="bold">{$minfo[0].inf_city|nl2br|spchar}</span></div>{/if}
						{if $minfo[0].inf_town ne ""}<div class="p1"><span class="f11">{$pr_chinfop31}</span><span class="bold">{$minfo[0].inf_town|nl2br|spchar}</span></div>{/if}
						{if $minfo[0].from_country ne ""}<div class="p1"><span class="f11">{$uch_txt9}</span><span class="bold">{$minfo[0].from_country}</span></div>{/if}
						{if $minfo2[0].p_a1cover ne "" or $minfo2[0].p_a2cover ne "" or $minfo2[0].p_a3cover ne ""}
						    <div class="p1"><br>
							<table cellpadding="0" cellspacing="0" border=0>
							    <tr><td colspan="4">{$pr_chinfom30}</td></tr>
							    <tr>
							    {if $minfo2[0].p_a1cover ne ""}
								<td style="padding-left: 5px;">
								    <div class="p2" align="center"><a href="{$minfo2[0].p_a1order}" target="_blank"><img src="{$minfo2[0].p_a1cover}" alt="" width="40" height="40"></a></div>
								    <div class="p2" align="center"><a href="{$minfo2[0].p_a1order}" target="_blank">{$pr_chinfom31}</a></div>
								</td>
							    {/if}
							    {if $minfo2[0].p_a2cover ne ""}
								<td style="padding-left: 15px;">
								    <div class="p2" align="center"><a href="{$minfo2[0].p_a2order}" target="_blank"><img src="{$minfo2[0].p_a2cover}" alt="" width="40" height="40"></a></div>
								    <div class="p2" align="center"><a href="{$minfo2[0].p_a2order}" target="_blank">{$pr_chinfom31}</a></div>
								</td>
							    {/if}
							    {if $minfo2[0].p_a3cover ne ""}
								<td style="padding-left: 15px;">
								    <div class="p2" align="center"><a href="{$minfo2[0].p_a2order}" target="_blank"><img src="{$minfo2[0].p_a2cover}" alt="" width="40" height="40"></a></div>
								    <div class="p2" align="center"><a href="{$minfo2[0].p_a2order}" target="_blank">{$pr_chinfom31}</a></div>
								</td>
							    {/if}
							    </tr>
							</table>
						    </div><br>
						{/if}
						{if $minfo[0].site ne ""}<div class="p1"><span class="f11">{$adm_memdetails14}</span> <span class="bold"><a href="{$minfo[0].site}" target="_blank">{$minfo[0].site}</a></span></div>{/if}
					    {/if}
					    </td>
					</tr>
					{if $minfo[0].photo ne "default.gif"}
					<tr>
					    <td colspan="2" class="pt10" align="center">
						<table cellpadding="5" cellspacing="0" border="0" width="100%">
						    <tr>
							<td align="center">
							    <a href="javascript:void(0)" onclick="ReverseContentDisplay('reportdiv');">{$ch_reptxt1}</a> {$ch_reptxt2}
							</td>
						    </tr>
						    <tr>
							<td>
							    <div id="reportdiv" style="display: none;">
							    {if $smarty.session.UID ne ""}
								<div class="p1">{$ch_reptxt3}</div>
								<form id="report_form">
								    <div><input type="hidden" name="ruid" value="{$minfo[0].uid}"><input type="hidden" name="rfromuid" value="{if $smarty.session.UID eq ""}0{else}{$smarty.session.UID}{/if}"></div>
								    <div class="pt4" align="left"><input type="button" value="{$up_btncontinue}" name="continuebtn" onclick="ShowContent('respdiv1'); thisDiv('yes'); ldiv('repdiv'); report_submit('profileimage');">&nbsp;&nbsp;<input type="button" value="{$up_btncancel}" name="cancelbtn" onclick="HideContent('reportdiv');"></div>
								</form>
							    {else}
								<div class="p5" align="center"><a href="{$base_url}/login?next=user/{$minfo[0].username}">{$snavlogin}</a> {$uch_shtxt8}</div>
							    {/if}
							    </div>
							</td>
						    </tr>
						    <tr>
							<td class="nopad">
							    <div id="respdiv1"></div>
							    <div id="loading_rep" style="display: none;"><table cellpadding=5 cellspacing=0 border=0><tr><td>{$adm_setgen79}</td></tr></table></div>
							</td>
						    </tr>
						</table>
					    </td>
					</tr>
					{/if}
				    </table>
				</td>
			    </tr>
			</table>
