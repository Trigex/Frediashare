
<!-- BEGIN EDIT MY VIDEO TABLE -->
<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
    <tr><td class="h3"></td></tr>
</table>
<table cellpadding=0 cellspacing=0 border=0 align=center class="width950b">
    <tr>
	<td>
	    <table cellpadding=5 cellspacing=0 border=0 align=center width="100%">
		<tr><td class="grey" colspan=2>
		    <table cellpadding=10 cellspacing=0 border=0 id="vupd_tbl" align=center width="100%">
			<tr>
			    <form name="vupdate_form" action="{$base_url}/my_videos" method="post" encType="multipart/form-data">
			    <td valign=top>
				<fieldset>
				<legend>{$up_step1txt}</legend>
				<table width="100%" cellpadding=2 cellspacing=0 border=0>
				    <tr>
					<td width="20%" align="left">{$myfiles_edittitle} </td><td><input type="text" class="ff" size="53" name="vtitle" style="width: 300px;" value="{if $smarty.request.vtitle eq ""}{$vd[0].vtitle}{else}{$smarty.request.vtitle}{/if}"></td>
				    </tr>
				    <tr>
					<td align="left" valign="top">{$myfiles_editdescr}</td>
					<td><textarea class="ff" rows="7" name="vdescr" style="width: 300px;">{if $smarty.request.vdescr eq ""}{$vd[0].vdescr|spchar}{else}{$smarty.request.vdescr}{/if}</textarea></td>
				    </tr>
				    <tr>
					<td align="left">{$myfiles_edittags} </td><td><input type="text" class="ff" size="53" name="vtags" style="width: 300px;" value="{if $smarty.request.vtags eq ""}{$vd[0].vtags}{else}{$smarty.request.vtags}{/if}"></td>
				    </tr>
				    <tr>
					<td align="left" {if $multi_categ_uploads ne "0"}valign="top"{/if}>{$myfiles_editcateg} </td>
					<td>
					{if $multi_categ_uploads ne "0"}
					    <table cellpadding=1 cellspacing=0 border=0>
						<tr>
						{if $smarty.request.categlist eq ""}
						    {insert name=list_categ_all_video assign=chinfo vid=$VID}
						    {section name=i loop=$chinfo}
						    {if $smarty.section.i.index mod 1 eq "0" and $smarty.section.i.index gt "0"}</tr><tr>{/if}
						    <td width="5%">
						    {assign var="status" value=""}
						    {section name=j loop=$catid}
						    {if $catid[j] eq $chinfo[i].id}{assign var="status" value="checked"}{/if}
						    {/section}
						    <input type=checkbox name=categlist[] value="{$chinfo[i].id}" {$status}>
						    </td>
						    <td>{$chinfo[i].ch}
						    {/section}
						    </td>
						{else}
						    {insert name=list_categ_all_video assign=chinfo vid=$VID}
						    {section name=i loop=$chinfo}
						    {if $smarty.section.i.index mod 1 eq "0" and $smarty.section.i.index gt "0"}</tr><tr>{/if}
						    <td width="5%">
							<input type="checkbox" name="categlist[]" value="{$chinfo[i].id}" {section name=j loop=$vcategs}{if $vcategs[j] eq $chinfo[i].id}checked{else}{/if}{/section}>
						    </td>
						    <td>{$chinfo[i].ch}</td>
						    {/section}
						{/if}
						</tr>
					    </table>
					{else}
					    <table cellpadding=1 cellspacing=0 border=0>
                                                <tr>
                                                    {insert name=list_categ_all_video assign=chinfo vid=$VID}
                                                    <td>
                                                        <select name="categlist" class="selbox">
                                                            {section name=i loop=$chinfo}
                                                            {assign var="status" value=""}
                                                            {section name=j loop=$catid}{if $catid[j] eq $chinfo[i].id}{assign var=status value="selected"}{/if}{/section}
                                                            {insert name=getfield assign=cname field=name table=categories qfield=cid qvalue=$chinfo[i].id}
                                                            <option name="categlist[]" value="{$chinfo[i].id}" {$status}>{$cname}</option>
                                                            {/section}
                                                        </select>
                                                    </td>
                                                </tr>
                                            </table>
					{/if}
					</td>
				    </tr>
				</table>
				</fieldset><br>
				<table cellpadding=3 cellspacing=0>
				    <tr>
					<td>
					    <input type="submit" name="vsave" class="fb" value="{$myfiles_editbtnsave}">&nbsp;&nbsp;
					    <input type="submit" name="vcancel" class="fb" value="{$myfiles_editbtncancel}">
					    <input type="hidden" name="vid" value="{$vid}">
					</td>
				    </tr>
				</table>
			    </td>
			    <td valign=top width="70%">
				{include file="_inc/inc_upload.tpl"}
			    </td>
		    	</tr>
		    </table></td>
		    </form>
		</tr>
		<tr>
		    <td valign="top">
			{if $allow_video_thumbs eq "1"}{include file="_inc/inc_thumbedit.tpl"}{/if}
		    </td>
		</tr>
	    </table>
	</td>
    </tr>
</table>
<!-- END EDIT MY VIDEO TABLE -->
