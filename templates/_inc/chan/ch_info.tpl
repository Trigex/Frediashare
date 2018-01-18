<script type="text/javascript">
{literal}
    function disableme() {
	var rads = document.cinfo.ch_wcomm;
	for(var i=0; i < rads.length;i++ ) {
	    document.cinfo.ch_wcomm[i].disabled = true;
	}
	
	var rads2 = document.cinfo.ch_wcommrate;
	for(var j=0; j < rads2.length;j++ ) {
	    document.cinfo.ch_wcommrate[j].disabled = true;
	}
    } 
    function enableme() {
	var rads = document.cinfo.ch_wcomm;
	for(var i=0; i < rads.length;i++ ) {
	    document.cinfo.ch_wcomm[i].disabled = false;
	}
	
	var rads2 = document.cinfo.ch_wcommrate;
	for(var j=0; j < rads2.length;j++ ) {
	    document.cinfo.ch_wcommrate[j].disabled = false;
	}
    }
    function setval(d) { document.getElementById('ch_comm_who').value = d; }
    function setval2(d) { document.getElementById('ch_commrate').value = d; }
    function swto_def() { HideContent('t1'); HideContent('t2'); HideContent('t3'); HideContent('t4'); HideContent('t5'); }
    function swto_dir() { ShowContent('t1'); HideContent('t2'); HideContent('t3'); HideContent('t4'); HideContent('t5'); }
    function swto_mus() { ShowContent('t2'); HideContent('t1'); HideContent('t3'); HideContent('t4'); HideContent('t5'); }
    function swto_com() { ShowContent('t3'); HideContent('t1'); HideContent('t2'); HideContent('t4'); HideContent('t5'); }
    function swto_gur() { ShowContent('t4'); HideContent('t1'); HideContent('t2'); HideContent('t3'); HideContent('t5'); }
    function swto_rep() { ShowContent('t5'); HideContent('t1'); HideContent('t2'); HideContent('t3'); HideContent('t4'); }
{/literal}    
</script>

<form name="cinfo" method="post" action="" id="cinfo">
{if $btn eq "adm_members"}<fieldset><legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('chinfo_txt'); ReverseContentDisplay('chinfo_div'); setclass_act2('chinfo_fs');"><span id="chinfo_fs">{$pr_chlmitem1}</span></a></legend>{/if}
<div id="chinfo_txt" style="display: {if $btn eq "adm_members"}block{else}none{/if};"><center>{$pr_chinfoc24}</center></div>
<div id="chinfo_div" style="display: {if $btn eq "adm_members"}none{else}block{/if};">
    <table width="100%" border="0" cellpadding="2" cellspacing="1" align="center">
	<tr><td colspan="2">{$pr_chinfoc24}</td></tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr><td width="30%">{$pr_chinfoc1}</td><td><a href="{$base_url}/user/{$cinfo[0].username}">{$base_url}/user/{$cinfo[0].username}</a></td></tr>
	<tr><td>{$pr_chinfoc2}</td><td><input type="text" class="ff width400" name="ch_title" value="{$cinfo[0].ch_title|spchar}"></td></tr>
	<tr><td valign="top">{$pr_chinfoc3}</td><td><textarea class="ff width400" rows="7" name="ch_desc">{$cinfo[0].ch_desc|spchar}</textarea></td></tr>
	
	<tr><td>{$pr_chinfoc4}</td><td><input type="text" class="ff width400" name="ch_tags" value="{$cinfo[0].ch_tags|spchar}"></td></tr>
	<tr><td></td><td class="pt0">{$pr_chinfoc5}</td></tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr>
	    <td valign="top">{$pr_chinfoc6}</td>
	    <td class="nopad">
		<table cellpadding="3" cellspacing="0" border=0>
		    <tr><td><input type="radio" {if $profile_comments eq "0"}disabled{/if} name="ch_comm" value="yes" {if $cinfo[0].ch_comm eq "yes"}checked{/if} onclick="enableme()"></td><td valign="bottom">{$pr_chinfoc7}</td></tr>
		    <tr><td><input type="radio" {if $profile_comments eq "0"}disabled{/if} name="ch_comm" value="no" {if $cinfo[0].ch_comm eq "no"}checked{/if} onclick="disableme()"></td><td valign="bottom">{$pr_chinfoc8}</td></tr>
		</table>
	    </td>
	</tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr>
	    <td valign="top">{$pr_chinfoc9}</td>
	    <td class="nopad">
		<table cellpadding="3" cellspacing="0" border=0>
		    <tr><td><input type="radio" {if $profile_comments eq "0"}disabled{/if} {if $cinfo[0].ch_comm eq "no"}disabled{/if} name="ch_wcomm" value="0" onclick="setval(0);" {if $cinfo[0].ch_comm_who eq "0"}checked{/if}></td><td valign="bottom">{$pr_chinfoc10}</td></tr>
		    <tr><td><input type="radio" {if $profile_comments eq "0"}disabled{/if} {if $cinfo[0].ch_comm eq "no"}disabled{/if} name="ch_wcomm" value="1" onclick="setval(1);" {if $cinfo[0].ch_comm_who eq "1"}checked{/if}></td><td valign="bottom">{$pr_chinfoc11}</td></tr>
		    <tr><td><input type="radio" {if $profile_comments eq "0"}disabled{/if} {if $cinfo[0].ch_comm eq "no"}disabled{/if} name="ch_wcomm" value="2" onclick="setval(2);" {if $cinfo[0].ch_comm_who eq "2"}checked{/if}></td><td valign="bottom">{$pr_chinfoc12}</td></tr>
		    <tr><td><input type="radio" {if $profile_comments eq "0"}disabled{/if} {if $cinfo[0].ch_comm eq "no"}disabled{/if} name="ch_wcomm" value="3" onclick="setval(3);" {if $cinfo[0].ch_comm_who eq "3"}checked{/if}></td><td valign="bottom">{$pr_chinfoc13}</td></tr>
		</table>
		<div><input type="hidden" name="ch_comm_who" id="ch_comm_who" value="{$cinfo[0].ch_comm_who}"></div>
	    </td>
	</tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr>
	    <td valign="top">{$up_opt16}</td>
	    <td class="nopad">
		<table cellpadding="3" cellspacing="0" border=0>
		    <tr><td><input type="radio" {if $profile_comments eq "0"}disabled{/if} {if $cinfo[0].ch_comm eq "no"}disabled{/if} name="ch_wcommrate" value="0" onclick="setval2(1);" {if $cinfo[0].ch_commrate eq "1"}checked{/if}></td><td valign="bottom">{$up_opt17}</td></tr>
		    <tr><td><input type="radio" {if $profile_comments eq "0"}disabled{/if} {if $cinfo[0].ch_comm eq "no"}disabled{/if} name="ch_wcommrate" value="1" onclick="setval2(0);" {if $cinfo[0].ch_commrate eq "0"}checked{/if}></td><td valign="bottom">{$up_opt18}</td></tr>
		</table>
		<div><input type="hidden" name="ch_commrate" id="ch_commrate" value="{$cinfo[0].ch_commrate}"></div>
	    </td>
	</tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr><td>{$pr_chinfoc14}</td><td>{insert name=get_chtype assign=chtype chnr=$cinfo[0].ch_type}{$chtype}<span class="pl20"><a href="javascript:void(0)" onclick="ReverseContentDisplay('nch'); setclass_act2('cchtype');"><span id="cchtype">{$pr_chinfoc15}</span></a></span></td></tr>
	<tr>
	    <td colspan="2" align="left" class="nopad">
	    <div id="nch" style="display: none;">
		<table width="100%" border="0" cellpadding="2" cellspacing="1">
		    <tr>
			<td width="30%" valign="top" class="pt5">{$pr_chinfoc23}</td>
			<td width="70%" align="left" valign="top">
			<div>
			    <select name="ch_type" class="selbox" onchange="if(this.selectedIndex == '0'){ldelim} swto_def(); {rdelim} else if (this.selectedIndex == '1'){ldelim} swto_dir(); {rdelim} else if (this.selectedIndex == '2'){ldelim} swto_mus(); {rdelim} else if (this.selectedIndex == '3'){ldelim} swto_com(); {rdelim} else if (this.selectedIndex == '4'){ldelim} swto_gur(); {rdelim} else if (this.selectedIndex == '5'){ldelim} swto_rep(); {rdelim} ">
				<option value="1" {if $cinfo[0].ch_type eq 1}selected{/if}>{$pr_chinfotype1}</option>
				<option value="2" {if $cinfo[0].ch_type eq 2}selected{/if}>{$pr_chinfotype2}</option>
				<option value="3" {if $cinfo[0].ch_type eq 3}selected{/if}>{$pr_chinfotype3}</option>
				<option value="4" {if $cinfo[0].ch_type eq 4}selected{/if}>{$pr_chinfotype4}</option>
				<option value="5" {if $cinfo[0].ch_type eq 5}selected{/if}>{$pr_chinfotype5}</option>
				<option value="6" {if $cinfo[0].ch_type eq 6}selected{/if}>{$pr_chinfotype6}</option>
			    </select>
			</div>
			<div id="t1" class="p5" style="display: none;">{$pr_chinfoc17}</div>
			<div id="t2" class="p5" style="display: none;">{$pr_chinfoc18}</div>
			<div id="t3" class="p5" style="display: none;">{$pr_chinfoc19}</div>
			<div id="t4" class="p5" style="display: none;">{$pr_chinfoc20}</div>
			<div id="t5" class="p5" style="display: none;">{$pr_chinfoc21}</div>
			<div class="p5">{$pr_chinfoc16}</div>
			</td>
		    </tr>
		</table>
	    </div>
	    </td>
	</tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr>
	    <td>
		<script type="text/javascript">
		    function checktype() {ldelim}
			if ( document.cinfo.ch_type.value != "1" && document.cinfo.ch_type.value != "{$cinfo[0].ch_type}" ) {ldelim}
			    if ( "{$cinfo[0].ch_type}" != "1" ) {ldelim}
				if ( confirm ( '{$pr_chinfob42}' ) ) {if $btn eq "adm_members"}setuserinfo('chinfo');{else}document.cinfo.submit();{/if}
			    {rdelim} else {if $btn eq "adm_members"}setuserinfo('chinfo');{else}document.cinfo.submit();{/if}
			{rdelim} else {ldelim}
			    if ( "{$cinfo[0].ch_type}" != "1" && document.cinfo.ch_type.value != "{$cinfo[0].ch_type}" ) {ldelim}
				if ( confirm ( '{$pr_chinfob42}' ) ) {if $btn eq "adm_members"}setuserinfo('chinfo');{else}document.cinfo.submit();{/if}
			    {rdelim} else {if $btn eq "adm_members"}setuserinfo('chinfo');{else}document.cinfo.submit();{/if}
			{rdelim}
		    {rdelim}
		</script>
	    </td>
	    <td>
		<input type="button" name="chsave_setup" value="{$pr_chinfoc22}" class="fb" onclick="checktype();"><input type="hidden" name="chsave_submit" value="1">
		{if $btn eq "adm_members"}<input type="hidden" name="chinfo_uid" value="{$minfo[0].uid}"><div id="chinfo_resp" class="pt5"></div>{/if}
	    </td>
	</tr>
    </table>
</div>
{if $btn eq "adm_members"}</fieldset>{/if}
</form>
