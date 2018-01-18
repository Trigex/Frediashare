<!-- BEGIN PROFILE AVATAR TABLE -->	
	    <table width="90%" cellpadding=5 cellspacing=0 align="left" border=0 id="av_tbl">
		<tr>
		    <td class="grey">
			<table width="100%" cellpadding="5" cellspacing="0" border=0>
			    <tr>
				<td width="{$avatar_width}" height="{$avatar_height}">
				    <img src="{$usrimg_url}/{if $fields[0].photo eq ""}default.gif{else}{$fields[0].photo}{/if}" width="{$avatar_width}" height="{$avatar_height}" alt="my profile image" class="{if $fields[0].gender eq "M"}user_img{elseif $fields[0].gender eq "F"}user_imgf{else}user_img{/if}" boder="0">
				</td>
				<td valign="top">
				    <table cellpadding="5" cellspacing="0" border=0>
				    {if $btn ne "adm_members"}
					<tr>
					    <td colspan=2>{$mypr_avtxt2}</td>
					</tr>
					<tr>
					    <td colspan=2><input type="file" name="userpic" class="ff" id="file" size="25"></td>
					</tr>
					<tr>
					    <td colspan=2>{$mypr_avtxt3}</td>
					</tr>
				    {/if}
					<tr>
					    <td width="5%"><input type="checkbox" name="delpic" value="1"></td>
					    <td>{if $btn eq "adm_members"}{$adm_memdelimg}{else}{$mypr_avtxt4}{/if}</td>
					</tr>
				    </table>
				</td>
			    </tr>
			</table>
		    </td>
		</tr>
	    </table>
<!-- END PROFILE AVATAR TABLE -->	    
