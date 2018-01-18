<!-- BEGIN ADMIN AREA ADS MANAGEMENT TABLE -->
<br>
<table width="950" cellspacing="0" cellpadding="2" border="0" align="center">
    <tr>
	<td class=""><h1>{$adm_vadsheading}</h1></td>
	<td class="" align=right><h2>{if $total ne "0"}{$adm_vadsnr} [{$start_num}-{$end_num}]{$adm_vadsof}[{$grandtotal}]{/if}</h2></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr>
	<td colspan=2 class="grey">
	    <form name="inboxmsg" method="post" action="">
	    <table width="100%" cellpadding="5" cellspacing="1" border=0>
		<tr class="tablerow">
		    <td colspan=10 align=right>
			<table width="100%" cellpadding=0 cellspacing=0 border=0>
			    <tr>
				<td align="left" width="10%">
				    <input type="button" name="wadd" class="fb" value="{$adm_vadsaddbtn}" onclick="location.href='{$admin_url}/videoads/add'; return false;">
				</td>
			    </tr>
			</table><br>
		    </td>
		</tr>
	    {if $adsview[0].aid ne ""}
		<tr class="th">
		    <td align="center" width="3%"><input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmsg(document.inboxmsg['mid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmsg(document.inboxmsg['mid[]']); HideContent('actdiv'); {rdelim}"></td>
		    <td width="2%">{$adm_vadsth1}</td>
    		    <td width="15%">{$adm_vadsth2}</td>
		    <td width="15%">{$adm_vadsth3}</td>
		    <td width="15%">{$adm_vadsth4}</td>
		    <td width="6%">{$adm_vadsth5}</td>
    		    <td width="6%">{$adm_vadsth6}</td>
    		    <td width="6%">{$adm_vadsth7}</td>
		    <td width="6%">{$adm_vadsth8}</td>
		    <td width="8%">{$adm_vadsth9}</td>
		    <td width="20%">{$adm_vadsth10}</td>
		</tr>

		{section name=aa loop=$adsview}
		<tr class="td">
		    <td align="center"><input type="checkbox" name="mid[]" value="{$adsview[aa].aid}" onclick="ShowContent('actdiv')"></td>
		    <td>{$adsview[aa].aid}</td>
    		    <td>{$adsview[aa].name}</td>
		    <td>{$adsview[aa].descrip}</td>
		    <td><a href="{$adsview[aa].url}">{$adsview[aa].url}</a></td>
		    <td>{if $adsview[aa].active eq "1"}{$adm_status_active}{else}{$adm_status_inactive}{/if}</td>
		    <td align="center">{$adsview[aa].duration}{$adm_vads_duration}</td>
    		    <td align="center">{$adsview[aa].views|viewnr}</td>
		    <td align="center">{$adsview[aa].click|viewnr}</td>
		    <td align="center">{$ratio[aa]}%</td>
    		    <td align="center">
		    {if $adsview[aa].active eq 0} <a href="{$admin_url}/videoads/enable/{$adsview[aa].aid}">{$adm_vadsaction1}</a> {else}<a href="{$admin_url}/videoads/disable/{$adsview[aa].aid}">{$adm_vadsaction2}</a>{/if}{$myfiles_delim}
		    <a href="{$admin_url}/videoads/edit/{$adsview[aa].aid}">{$adm_vadsaction3}</a>{$myfiles_delim}
    		    <a href="{$admin_url}/videoads/delete/{$adsview[aa].aid}" onClick='Javascript:return confirm("{$adm_vadsdelmsg}");'>{$adm_vadsaction4}</a>
    		    </td>
		</tr>
		{/section}
		<tr>
                    <td colspan=4 class="nopad" valign="top">
                        {include file="_inc/inc_selectactions.tpl"}
                    </td>
                </tr>
            {/if}
	    </table>
	    </form>
	</td>
    </tr>
</table>
<table cellpadding=2 cellspacing=1 border=0 width="100%">
    <tr>
        <td class="pag_bg" align="center" valign="top">{$link}</td>
    </tr>
</table> 
<!-- END ADMIN AREA ADS MANAGEMENT TABLE -->
