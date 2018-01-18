<!-- BEGIN ADMIN AREA MAIN CATEGORIES TABLE -->
{if $smarty.session.AUID ne ""}
<br>
<table width="950" cellpadding=2 cellspacing=0 border=0 align=center>
    <tr>
	<td class=""><h1>{$adm_categheading}</h1></td>
	<td class="" align="right">{if $total ne "0"}{$adm_categnr}[{$start_num}-{$end_num}]{$adm_categof}[{$total}]{/if}</td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr>
	<td class="p10" colspan=2>
	<form name="inboxmsg" method="post" action="">
	    <table width="100%" cellpadding="2" cellspacing="1" border=0 id="cat_tbl">
		<tr>
		    <td width="10%">
			<input type="button" name="categ_add" value="{$adm_categaddbtn}" class="fb" onclick="location.href='{$admin_url}/categories/add'; return false;">
		    </td>
		</tr>
	    </table>
	    <br>
	    <table width="100%" cellpadding="4" cellspacing="1" border=0>
	    {if $categs[0].cid ne ""}
		<tr class="th">
		    <td align="center" width="3%"><input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmsg(document.inboxmsg['mid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmsg(document.inboxmsg['mid[]']); HideContent('actdiv'); {rdelim}"></td>
		    <td width="4%" align=center valign="bottom">{$adm_categth1}</td>
		    <td width="13%" class="pl15" valign="bottom">{$adm_categth2}</td>
		    <td width="15%" class="pl15" valign="bottom">{$adm_categth3}</td>
		    <td width="7%" align=center>{$adm_categth4}</td>
		    <td width="7%" align=center>{$adm_categth5}</td>
		    <td width="7%" align=center>{$adm_categth6}</td>
		    <td width="7%" align=center>{$adm_categth7}</td>
		    <td width="7%" align=center>{$adm_categth8}</td>
		    <td width="7%" align=center>{$adm_categth9}</td>
		    <td width="7%" align=center valign=bottom>{$adm_categth10}</td>
		    <td width="17%" align=center valign="bottom">{$adm_categth11}</td>
		</tr>
		
		{section name=aa loop=$categs}
		<tr class="td">
		    <td align="center"><input type="checkbox" name="mid[]" value="{$categs[aa].cid}" onclick="ShowContent('actdiv')"></td>
		    <td align=center>{$categs[aa].cid}</td>
		    <td class="pl15">
			<a class="info" href="{$admin_url}/categories/edit/{$categs[aa].cid}">{$categs[aa].name}
			<span><img src="{$catimg_url}/{$categs[aa].image}" width="{$categwidth}" height="{$categheight}" alt="{$categs[i].name} class="thumb"></span>
			</a>
		    </td>
		    <td class="pl15">{$categs[aa].descrip}</td>
		    <td align=center>
			{if $categs[aa].audio_uploads eq "yes"}
			    <a href="{$admin_url}/categories/a0/{$categs[aa].cid}">{$adm_categ_yes}</a></td>
			{/if}
			{if $categs[aa].audio_uploads eq "no"}
			    <a href="{$admin_url}/categories/a1/{$categs[aa].cid}">{$adm_categ_no}</a></td>
			{/if}
		    <td align=center>
			{if $categs[aa].image_uploads eq "yes"}
			    <a href="{$admin_url}/categories/i0/{$categs[aa].cid}">{$adm_categ_yes}</a></td>
			{/if}
			{if $categs[aa].image_uploads eq "no"}
			    <a href="{$admin_url}/categories/i1/{$categs[aa].cid}">{$adm_categ_no}</a></td>
			{/if}
		    </td>
		    <td align=center>
			{if $categs[aa].video_uploads eq "yes"}
			    <a href="{$admin_url}/categories/v0/{$categs[aa].cid}">{$adm_categ_yes}</a></td>
			{/if}
			{if $categs[aa].video_uploads eq "no"}
			    <a href="{$admin_url}/categories/v1/{$categs[aa].cid}">{$adm_categ_no}</a></td>
			{/if}
		    </td>
		    <td align=center>
		    {insert name=categ_to_name2 assign=cn cid=$categs[aa].cid}
		    
		    {insert name=categ_count_audio1 assign=counta cid=$categs[aa].cid}
		    {if $counta[1] ne "0"}<a href="{$admin_url}/audioc/{$categs[aa].cid}/all/all_time">{$counta[1]}{else}<a>0</a>{/if}</a>
		    </td>
		    <td align=center>
		    {insert name=categ_count_image1 assign=counti cid=$categs[aa].cid}
		    {if $counti[1] ne "0"}<a href="{$admin_url}/imagec/{$categs[aa].cid}/all/all_time">{$counti[1]}{else}<a>0</a>{/if}</a>
		    </td>
		    <td align=center>
		    {insert name=categ_count1 assign=countv cid=$categs[aa].cid}
		    {if $countv[1] ne "0"}<a href="{$admin_url}/videoc/{$categs[aa].cid}/all/all_time">{$countv[1]}{else}<a>0</a>{/if}</a>
		    </td>
		    <td align=center>{if $categs[aa].active eq "1"}{$adm_status_active}{else}{$adm_status_inactive}{/if}</td>
		    <td align=center>
			{if $categs[aa].active eq "1"} <a href="{$admin_url}/categories/disable/{$categs[aa].cid}">{$adm_categaction2}</a>{/if} {if $categs[aa].active eq "0"} <a href="{$admin_url}/categories/enable/{$categs[aa].cid}">{$adm_categaction1}</a>{/if}{$myfiles_delim}
			<a href="{$admin_url}/categories/edit/{$categs[aa].cid}">{$adm_categaction3}</a>{$myfiles_delim}
			<a href="{$admin_url}/categories/delete/{$categs[aa].cid}" onClick='Javascript:return confirm("{$adm_categdelmsg}{$categs[aa].name} ?!");'>{$adm_categaction4}</a>
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
{/if}
<!-- END ADMIN AREA MAIN CATEGORIES TABLE -->