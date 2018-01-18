<!-- BEGIN ADMIN AREA ADS SETTINGS TABLE -->
<br>
<table align=center width="950" border=0 cellpadding=5 cellspacing=0>
    <tr>
	<td align="left"><h1>{$adm_setadheading}</h1></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr>
	<td class=grey>
	<form name="inboxmsg" method="post" action="">
	    <table cellpadding=10 cellspacing=0 width="100%" border=0>
		<tr>
		    <td colspan=2>{$adm_setadtxt}</td>
		</tr>
		<tr>
		    <td width="100%" valign=top>
			<table cellpadding=4 cellspacing=1 border=0 align=center width="100%">
			    <tr class="th">
				<td align="center" width="3%"><input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmsg(document.inboxmsg['mid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmsg(document.inboxmsg['mid[]']); HideContent('actdiv'); {rdelim}"></td>
				<td align=center width="2%">{$adm_setadth1}</td>
				<td align=center width="10%">{$adm_setadth2}</td>
				<td align=center width="30%">{$adm_setadth3}</td>
				<td align=center width="10%">{$adm_setadth4}</td>
				<td align=center width="10%">{$adm_setadth5}</td>
			    </tr>
			    {section name=i loop=$ads}
			    <tr class="td">
				<td align="center"><input type="checkbox" name="mid[]" value="{$ads[i].aid}" onclick="ShowContent('actdiv')"></td>
				<td align=center>{$ads[i].aid}</td>
				<td align=center>{$ads[i].aname}</td>
				<td align=center>{$ads[i].adescr}</td>
				<td align=center>{if $ads[i].astatus eq "1"}{$adm_status_active}{else}{$adm_status_inactive}{/if}</td>
				<td align=center><a href="{$admin_url}/settings/ads/edit/{$ads[i].aid}">{$adm_setadact1}</a> | {if $ads[i].astatus eq "1"}
				<a href="{$admin_url}/settings/ads/disable/{$ads[i].aid}">{$adm_setadact3}</a>{else}<a href="{$admin_url}/settings/ads/enable/{$ads[i].aid}">{$adm_setadact2}</a>{/if}</td>
			    </tr>
			    {/section}
			    <tr>
                		<td colspan=4 class="nopad" valign="top">
                    		    {include file="_inc/inc_selectactions.tpl"}
                		</td>
            		    </tr>
			</table>
		    </td>
		</tr>
	    </table>
	</form>
	</td>
    </tr>
</table>
<!-- END ADMIN AREA ADS SETTINGS TABLE -->
