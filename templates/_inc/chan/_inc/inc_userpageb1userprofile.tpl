			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td class="tbody1" colspan="2">
				    <table cellpadding="0" cellspacing="0" width="100%" border=0 align="left">
					<tr>
					    <td valign="top" align="center" width="{$avatar_width}"><img class="{if $udetails[0].gender eq "M"}user_img{elseif $udetails[0].gender eq "F"}user_imgf{else}user_img{/if}" src="{$usrimg_url}/{$minfo[0].photo}" width="{$avatar_width}" height="{$avatar_height}" alt="{$minfo[0].username}"></td>
					    <td valign="top" width="100%">
						<div style="padding-left: 5px;">
						    <div class="p1 f14">{$minfo[0].username}</div>
						    <div class="p1 pt5"><span class="normal">{$uch_txt3}</span> <span class="bold">{$minfo[0].reg_on|date_format:"%B %d, %Y"}</span></div>
						    <div class="p1"><span class="normal">{$adm_memdetails7}</span> <span class="bold">{$minfo[0].last_login|date_format:"%B %d, %Y"}</span></div>
						    <div class="p1"><span class="normal">{$hpbox_mypv}</span> <span class="bold">{$minfo[0].ch_views|viewnr}</span></div>
						    {if $udetails[0].show_status eq "yes"}<div class="p1">({if $udetails[0].is_logged eq "1"}{$profile_online}{else}{$profile_offline}{/if})</div>{/if}
						</div>
					    </td>
					</tr>
					<tr>
					    <td colspan="2">
						{if $minfo[0].about_me ne ""}<div><br>{$minfo[0].about_me|nl2br|spchar}<br><br></div>{/if}
						{if $minfo[0].fname ne "" or $minfo[0].lname ne ""}<div class="p1"><span class="normal">{$profile_name}</span> <span class="bold">{$minfo[0].fname|nl2br|spchar} {$minfo[0].lname|nl2br|spchar}</span></div>{/if}
						{if $minfo[0].show_age eq "yes"}<div class="p1"><span class="normal">{$profile_age1}</span> <span class="bold">{$uage}</span></div>{/if}
						{if $minfo[0].inf_city ne ""}<div class="p1">{$pr_chinfom27}<span class="bold">{$minfo[0].inf_city|nl2br|spchar}</span></div>{/if}
						{if $minfo[0].inf_town ne ""}<div class="p1"><span class="normal">{$pr_chinfop31}</span> <span class="bold">{$minfo[0].inf_town|nl2br|spchar}</span></div>{/if}
						{if $minfo[0].from_country ne ""}<div class="p1"><span class="normal">{$uch_txt9}</span> <span class="bold">{$minfo[0].from_country}</span></div>{/if}
						{if $minfo[0].inf_occup ne ""}<div class="p1"><span class="normal">{$pr_chinfop17}</span> <span class="bold">{$minfo[0].inf_occup|nl2br|spchar}</span></div>{/if}
						{if $minfo[0].inf_comp ne ""}<div class="p1"><span class="normal">{$pr_chinfop18}</span> <span class="bold">{$minfo[0].inf_comp|nl2br|spchar}</span></div>{/if}
						{if $minfo[0].inf_interests ne ""}<div class="p1"><span class="normal">{$pr_chinfop22}</span> <span class="bold">{$minfo[0].inf_interests|nl2br|spchar}</span></div>{/if}
						{if $minfo[0].inf_movies ne ""}<div class="p1"><span class="normal">{$uch_txt10}</span> <span class="bold">{$minfo[0].inf_movies|nl2br|spchar}</span></div>{/if}
						{if $minfo[0].inf_music ne ""}<div class="p1"><span class="normal">{$uch_txt11}</span> <span class="bold">{$minfo[0].inf_music|nl2br|spchar}</span></div>{/if}
						{if $minfo[0].inf_books ne ""}<div class="p1"><span class="normal">{$uch_txt12}</span> <span class="bold">{$minfo[0].inf_books|nl2br|spchar}</span></div>{/if}
						{if $minfo[0].site ne ""}<div class="p1"><span class="normal">{$adm_memdetails14}</span> <span class="bold"><a href="{$minfo[0].site}" target="_blank">{$minfo[0].site}</a></span></div>{/if}
					    </td>
					</tr>
				    </table>
				</td>
			    </tr>
			</table>
