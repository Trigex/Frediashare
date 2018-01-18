<br>
<!-- BEGIN ADMIN AREA MEMBER REQUESTS TABLE -->
<table width="950" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
	<td class="" align="left"><h1>{$adm_memchreq1}</h1></td>
	<td align="right">{if $total gt 0}{$adm_reqnr} [{$start_num}-{$end_num}] {$adm_reqof} [{$total}]{/if}</td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr>
	<td class="pt10_bg" valign="top" align=center>
	    <form name="inboxmsg" method="post" action="">
            <table border="0" cellpadding="5" cellspacing="1" width="100%">
                <tr>
                    <td class="th2" align="center">{if $req[0].uid ne ""}<input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmsg(document.inboxmsg['mid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmsg(document.inboxmsg['mid[]']); HideContent('actdiv'); {rdelim}">{/if}</td>
                    <td class="th2">
                	<a href="{$admin_url}/members/requests/all"><span class="{if $smarty.get.rt eq "" or $smarty.get.rt eq "all"}act{/if}">{$adm_reqsort2}</span></a>{$myfiles_delim}
                	<a href="{$admin_url}/members/requests/active"><span class="{if $smarty.get.rt eq "active"}act{/if}">{$adm_reqsort3}</span></a>{$myfiles_delim}
                	<a href="{$admin_url}/members/requests/closed"><span class="{if $smarty.get.rt eq "closed"}act{/if}">{$adm_reqsort4}</span></a>
            	    </td>
                </tr>
                {section name=i loop=$req}
                <tr class="nbg">
            	    <td width="3%" class="th1" align="center" valign="top" style="padding-top: 15px;"><input type="checkbox" name="mid[]" value="{$req[i].rid}" onclick="ShowContent('actdiv')"></td>
            	    <td class="th1">
            	    <div id="req_gen{$smarty.section.i.iteration}" class="cursor" onclick="ReverseContentDisplay('req_det{$smarty.section.i.iteration}');">
            		<table width="100%" cellpadding="0" cellspacing="0">
            		    <tr>
            			<td align="left">
	                	    <div class="p2"><span class="normal">{$adm_memchreq2}</span>{insert name=getfield assign=suser field=username table=members qfield=uid qvalue=$req[i].from_uid}<a href="{$admin_url}/members/{$req[i].from_uid}">{$suser}</a></div>
	                	    <div class="p2"><span class="normal">{$adm_memchreq4}</span>{if $req[i].rtype eq "profileimage"}{$ch_reptxt2}{else}{$ch_reptxt4}{/if}</div>
            			</td>
            			<td align="right">
            			    <div class="p2"><span class="normal">{$adm_memchreq3}</span>{$req[i].date|date_format:"%B %e, %Y, %H:%M %p"}</div>
				</td>
			    </tr>
			</table>
		    </div>
		    <div id="req_det{$smarty.section.i.iteration}" style="display: {if $smarty.post.req_it eq $smarty.section.i.iteration}block{else}none{/if};">
			<table width="100%" cellpadding="0" cellspacing="0" class="pt10">
			    <tr>
				<td width="{$avatar_width}">
				    <a href="{$admin_url}/members/{$req[i].uid}">
				    {if $req[i].rtype eq "profileimage"}
					{insert name=getfield assign=sphoto field=photo table=members qfield=uid qvalue=$req[i].uid}
					{insert name=getfield assign=sgen field=gender table=members qfield=uid qvalue=$req[i].uid}
					<img src="{$usrimg_url}/{$sphoto}" width="{$avatar_width}" height="{$avatar_height}" alt="" class="{if $sgen eq "M" or $sgen eq ""}user_img{elseif $sgen eq "F"}user_imgf{/if}">
				    {else}
					{insert name=getfield assign=sphoto field=th_bgimage table=member_theme qfield=th_uid qvalue=$req[i].uid}
					{insert name=getimgdim assign=swidth imgname=$sphoto scale="w"}
					{insert name=getimgdim assign=sheight imgname=$sphoto scale="h"}
					{if $sphoto eq "none"}
					<div style="width: 320px; height: 120px;">{$adm_memchreq10}</div>
					{else}
					<img src="{$base_url}/media/files_user_bgimages/{$sphoto}" width="{if $swidth gt 640}640{else}{$swidth}{/if}" height="{if $swidth gt 480}480{else}{$sheight}{/if}" alt="">
					{/if}
				    {/if}
				    </a>
				</td>
				<td valign="top" class="plt5" align="left">
				    <table cellpadding="0" cellspacing="0">
					<tr>
	    				    <td width="1%" valign="top"><input type="checkbox" name="delpic_{$req[i].rid}" value="1" {if $sphoto eq "none" or $sphoto eq "default.gif"}disabled{/if}></td>
                            		    <td valign="top" class="pt3">{if $btn eq "adm_members"}{$adm_memdelimg}{else}{$mypr_avtxt4}{/if}</td>
                            		</tr>
					<tr>
	    				    <td width="1%" valign="top"><input type="checkbox" name="closereq_{$req[i].rid}" value="1" {if $req[i].solved eq "1"}disabled{/if}></td>
                            		    <td valign="top" class="pt3">{$adm_memchreq7}</td>
                            		</tr>
					<tr>
	    				    <td width="1%" valign="top"><input type="checkbox" name="delreq_{$req[i].rid}" value="1"></td>
                            		    <td valign="top" class="pt3">{$adm_memchreq8}</td>
                            		</tr>
                            		<tr>
                            		    <td class="pt10"></td>
                            		    <td class="pt10">
                            			<input type="button" name="req_apply_{$req[i].rid}" class="fb" value="{$btn_apply}" onclick="document.getElementById('req_id').value='{$req[i].rid}'; document.getElementById('req_it').value='{$smarty.section.i.iteration}'; document.inboxmsg.submit(); return false;">&nbsp;&nbsp;
                            		    </td>
                            		</tr>
                            	    </table>
                            	</td>
			    </tr>
			    <tr><td align="left" colspan="3"><a href="{$admin_url}/members/{$req[i].uid}">{insert name=getfield assign=suserfrom field=username table=members qfield=uid qvalue=$req[i].uid}{$suserfrom}</a>{if $req[i].rtype eq "bgimage"}{$adm_memchreq9}{/if}</td></tr>
			</table>
		    </div>
		    <input type="hidden" name="reqapply_{$req[i].rid}" value="{$smarty.section.i.iteration}">
            	    </td>
		</tr>
		{/section}
		<tr>
                    <td colspan=2 class="nopad" valign="top" align="left">
                    <div id="actdiv" style="display: none;">
                        <table cellpadding=0 cellspacing=0 border=0>
                            <tr>
                                <td class="pt5" valign="top">
                                    <select name="actions" class="selbox">
                                        <option value="{$inbox_acts}">{$inbox_acts}</option>
                                        <option value="{$adm_memchreq12}">{$adm_memchreq12}</option>
                                        <option value="{$adm_memchreq15}">{$adm_memchreq15}</option>
                                        <option value="{$adm_memchreq13}">{$adm_memchreq13}</option>
                                        <option value="{$adm_memchreq14}">{$adm_memchreq14}</option>
                                    </select>
                                </td>
                                <td class="pt5" valign="bottom">&nbsp;<input type="submit" name="goact" value="{$btn_apply}" class="fb"></td>
                            </tr>
                        </table>
                    </div>
                    </td>
                </tr>
	    </table>
	    <input type="hidden" id="req_id" name="req_id" value="">
	    <input type="hidden" id="req_it" name="req_it" value="">
	    </form>
	</td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr><td class="pag_bg" align="center">{$link}</td></tr>
</table>
<!-- END ADMIN AREA MEMBER REQUESTS TABLE -->
