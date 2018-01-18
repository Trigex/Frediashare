<br>
<!-- BEGIN ADMIN AREA WATERMARK MAIN TABLE -->
<table cellspacing="0" cellpadding="2" width="950" border=0 align=center>
    <tr>
	<td class=""><h1>{$adm_play_vlogoheading}</h1></td>
	<td class="" align=right>{if $total ne "0"}{$adm_play_vlogonr} [{$start_num}-{$end_num}] {$adm_play_vlogoof} [{$total}]{/if}</td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr>
	<td class="grey" colspan=2>
	    <form name="inboxmsg" method="post" action="">
	    <table width="100%" cellpadding="4" cellspacing="1" border=0>
		<tr>
		    <td colspan=9 align=left>
			<table width="100%" cellpadding=0 cellspacing=0>
			    <tr>
				<td width="10%" align="left">
				    <input type="button" name="wadd" class="fb" value="{$adm_play_addbtn}" onclick="location.href='{$admin_url}/watermark/add'; return false;">
				</td>
			    </tr>
			</table><br>
		    </td>
		</tr>
	    {if $watermark[0].wid ne ""}
		<tr class="th">
		    <td align="center" width="3%"><input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmsg(document.inboxmsg['mid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmsg(document.inboxmsg['mid[]']); HideContent('actdiv'); {rdelim}"></td>
		    <td width="3%">{$adm_play_vlogoth1}</td>
    		    <td width="15%">{$adm_play_vlogoth2}</td>
    		    <td width="20%">{$adm_play_vlogoth3}</td>
    		    <td width="20%">{$adm_play_vlogoth4}</td>
		    <td width="6%">{$adm_play_vlogoth5}</td>
		    <td width="12%">{$adm_play_vlogoth6}</td>
		    <td>{$adm_play_vlogoth7}</td>
    		    <td width="16%">{$adm_play_vlogoth9}</td>
		</tr>

	        {section name=i loop=$watermark}
		<tr class="td">
		    <td align="center"><input type="checkbox" name="mid[]" value="{$watermark[i].wid}" onclick="ShowContent('actdiv')"></td>
		    <td>{$watermark[i].wid}</td>
    		    <td>{$watermark[i].name}</td>
    		    <td>{$watermark[i].description}</td>
    		    <td><a href="{$watermark[i].url}">{$watermark[i].url}</a></td>
		    <td>{if $watermark[i].active eq 1}{$adm_status_active}{else}{$adm_status_inactive}{/if}</td>
    		    <td>{$watermark[i].position}</td>
		    <td>{$watermark[i].transparency}</td>
    		    <td>
		    {if $watermark[i].active eq 0} <a href='{$admin_url}/watermark/enable/{$watermark[i].wid}'>{$adm_play_vlogoaction1}</a>{/if}
		    {if $watermark[i].active eq 1} <a href='{$admin_url}/watermark/disable/{$watermark[i].wid}'>{$adm_play_vlogoaction2}</a>{/if}{$myfiles_delim}
		    <a href="{$admin_url}/watermark/edit/{$watermark[i].wid}">{$adm_play_vlogoaction3}</a>{$myfiles_delim}
    		    <a href="{$admin_url}/watermark/delete/{$watermark[i].wid}" onClick='Javascript:return confirm("{$adm_play_delmsg}");'>{$adm_play_vlogoaction4}</a>
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
<!-- END ADMIN AREA WATERMARK MAIN TABLE -->