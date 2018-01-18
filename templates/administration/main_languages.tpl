<br>
<!-- BEGIN ADMIN AREA MEMBERS TABLE -->
<table width="950" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
	<td class=""><h1>{$adm_setlangheading}</h1></td>
	<td class="" align="right">{if $total ne "0"}{$adm_setlangnr}[{$start_num}-{$end_num}]{$adm_setlangof}[{$total}]{/if}</td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr>
	<td valign="top" colspan=2 class="pt5">
	<form id="schform">
	    <table cellpadding=2 cellspacing=1 border=0 width="100%">
                <tr>
            	    <td align="left" width="20%"><input type="button" name="langadd" class="fb" value="{$adm_setlangadd}" onclick="location.href='{$admin_url}/settings/languages/add'; return false;"></td>
                    <td align="right" valign="top" width="50%"></td>
                    <td valign="middle" width="30%"></td>
                </tr>
                <tr>
                    <td colspan=3><div id="schdiv"></div></td>
                </tr>
            </table>
        </form>
	<form name="inboxmsg" method="post" action="">
	    <table cellpadding=4 cellspacing=1 border=0 align=center class="cs1 rowstyle-alt no-arrow" id="stbl" width="100%">
		<tr class="th">
		    {if $langs[0].id ne ""}<td align="center"><input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmsg(document.inboxmsg['mid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmsg(document.inboxmsg['mid[]']); HideContent('actdiv'); {rdelim}"></td>{/if}
		    <td class="sortable-numeric" width="5%">{$adm_setlangth1}</td>
		    <td class="sortable-text" width="15%">{$adm_setlangth2}</td>
		    <td class="sortable-text" width="15%">{$adm_setlangth3}</td>
		    <td class="sortable-text" width="15%">{$adm_setlangth4}</td>
		    <td class="sortable-text" width="15%">{$adm_setlangth6}</td>
		    <td>&nbsp;</td>
		    <td width="20%">{$adm_setlangth5}</td>
		</tr>
		{section name=i loop=$langs}
		<tr class="td">
		    {if $langs[0].id ne ""}<td width="3%" class="th1" align="center"><input type="checkbox" name="mid[]" value="{$langs[i].id}" onclick="ShowContent('actdiv')"></td>{/if}
		    <td>{$langs[i].id}</td>
		    <td>{$langs[i].name}</td>
		    <td>{$langs[i].file}</td>
		    <td>{if $langs[i].active eq "0"}{$adm_status_inactive}{else}{$adm_status_active}{/if}</td>
		    <td>{if $langs[i].def eq "0"}{$adm_setlangno}{else}{$adm_setlangyes}{/if}</td>
		    <td>{if $langs[i].cflag ne ""}{insert name=getarrayccode assign=ccode country=$langs[i].cflag}<img src="{$base_url}/media/files_flags/{$ccode|lower}.gif" width="16" height="11" alt="{$langs[i].cflag}">{/if}</td>
		    <td>{if $langs[i].active eq "1"}<a href="{$admin_url}/settings/languages/disable/{$langs[i].id}">{$adm_setlangact2}</a>{elseif $langs[i].active eq "0"}<a href="{$admin_url}/settings/languages/enable/{$langs[i].id}">{$adm_setlangact1}</a>{/if} | <a href="{$admin_url}/settings/languages/edit/{$langs[i].id}">{$adm_setlangact3}</a> | <a href="javascript:void(0)" onclick="if(confirm('{$adm_setlangdelmsg}')) location.href='{$admin_url}/settings/languages/delete/{$langs[i].id}'; return false;">{$adm_setlangact4}</a></td>
		</tr>
		{/section}
	    </table>
	    {if $langs[0].id ne ""}
                <table cellpadding="5" cellspacing="0" align="left" width="100%">
                    <tr>
                        <td colspan=2>{include file="_inc/inc_selectactions.tpl"}</td>
                    </tr>
                </table>
            {/if}
	</form>
	<table cellpadding=2 cellspacing=1 border=0 width="100%" align="left">
	    <tr>
		<td class="pag_bg">{$link}</td>
	    </tr>
	</table>
	</td>
    </tr>
</table>
<!-- END ADMIN AREA MEMBERS TABLE -->
