<!-- BEGIN ADMIN AREA EDITABLE TEMPLATES TABLE -->
<br>
<table align=center width="950" border=0 cellpadding=2 cellspacing=0>
    <tr>
	<td align="left" class=""><h1>{$adm_settplemailheading}</h1></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr>
	<td class=grey>
	    <table cellpadding=5 cellspacing=0 width="100%" border=0>
		<tr>
		    <td>{$adm_settplemailtxt}</td>
		</tr>
		<tr>
		    <td valign=top>
			<table cellpadding=4 cellspacing=1 align=center width="100%">
			    <tr class="th">
				<td width="2%">{$adm_setadth1}</td>
				<td>{$adm_setadth2}</td>
				<td>{$adm_setadth3}</td>
				<td>{$adm_settplth1}</td>
				<td width="7%">{$adm_setadth5}</td>
			    </tr>
			    {section name=i loop=$emails}
			    <tr class="td">
				<td align=center>{$smarty.section.i.iteration}</td>
				<td align=center>{$emails[i].email_id}</td>
				<td align=center>{$emails[i].comment}</td>
				<td align=center>{$emails[i].email_subject}</td>
				<td align=center><a href="{$admin_url}/settings/templates/edit/{$emails[i].email_id}">{$adm_setadact1}</a></td>
			    </tr>
			    {/section}
			</table>
		    </td>
		</tr>
	    </table>
	</td>
    </tr>
</table>
<br>
<table align=center width="950" border=0 cellpadding=5 cellspacing=0>
    <tr>
	<td align="" class=""><h1>{$adm_settplstaticheading}</h1></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr>
	<td class=grey>
	    <table cellpadding=5 cellspacing=0 width="100%" border=0>
		<tr>
		    <td>{$adm_settplstatictxt}</td>
		</tr>
		<tr>
		    <td valign=top>
		    <form name="inboxmsg" method="post" action="">
			<table cellpadding=4 cellspacing=1 align=center width="100%">
			    <tr class="th">
				<td align="center" width="3%"><input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmsg(document.inboxmsg['mid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmsg(document.inboxmsg['mid[]']); HideContent('actdiv'); {rdelim}"></td>
				<td width="2%">{$adm_setadth1}</td>
				<td>{$adm_setadth2}</td>
				<td>{$adm_setadth3}</td>
				<td>{$adm_settplth2}</td>
				<td width="10%">{$adm_setadth4}</td>
				<td width="12%">{$adm_setadth5}</td>
			    </tr>
			    {section name=j loop=$static}
			    <tr class="td">
				<td align="center"><input type="checkbox" name="mid[]" value="{$static[j].fid}" onclick="ShowContent('actdiv')"></td> 
				<td>{$static[j].fid}</td>
				<td>{$static[j].fname}</td>
				<td>{$static[j].fdescr}</td>
				<td>{$static[j].file}</td>
				<td>{if $static[j].active eq "1"}{$adm_status_active}{else}{$adm_status_inactive}{/if}</td>
				<td align=center><a href="{$admin_url}/settings/templates/edit/{$static[j].ff}">{$adm_setadact1}</a> | <a href="{$admin_url}/settings/templates/{if $static[j].active eq "1"}disable{else}enable{/if}/{$static[j].ff}">{if $static[j].active eq "1"}{$adm_setadact3}{else}{$adm_setadact2}{/if}</a></td>
			    </tr>
			    {/section}
			    <tr>
                		<td colspan=4 class="nopad" valign="top">
                    		    {include file="_inc/inc_selectactions.tpl"}
                		</td>
            		    </tr>
			</table>
		    </form>
		    </td>
		</tr>
	    </table>
	</td>
    </tr>
</table>
<!-- END ADMIN AREA EDITABLE TEMPLATES TABLE -->
