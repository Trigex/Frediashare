{literal}
<script type="text/javascript">
    function disableme2() {
        var rads = document.owninfo.ch_wcomm;
        for(var i=0; i < rads.length;i++ ) {
            document.owninfo.ch_wcomm[i].disabled = true;
        }
        var rads2 = document.owninfo.ch_wcommrate;
        for(var j=0; j < rads2.length;j++ ) {
            document.owninfo.ch_wcommrate[j].disabled = true;
        }
    }
    function enableme2() {
        var rads = document.owninfo.ch_wcomm;
        for(var i=0; i < rads.length;i++ ) {
            document.owninfo.ch_wcomm[i].disabled = false;
        }
        var rads2 = document.owninfo.ch_wcommrate;
        for(var j=0; j < rads2.length;j++ ) {
            document.owninfo.ch_wcommrate[j].disabled = false;
        }
    }
    function setval_p(d) { document.getElementById('ch_comm_who').value = d; }
    function setval2_p(d) { document.getElementById('ch_commrate').value = d; }
</script>
{/literal}    
<form name="owninfo" method="post" action="" enctype="multipart/form-data" id="owninfo">
{if $btn eq "adm_members"}<fieldset><legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('chprof_txt'); ReverseContentDisplay('chprof_div'); setclass_act2('chprof_fs');"><span id="chprof_fs">{$pr_chlmitem4}</span></a></legend>{/if}
<div id="chprof_txt" style="display: {if $btn eq "adm_members"}block{else}none{/if};"><center><h1>{$pr_chlmitem4}</h1></center></div>
<div id="chprof_div" style="display: {if $btn eq "adm_members"}none{else}block{/if};">
    <table width="100%" border="0" cellpadding="2" cellspacing="1" align="center">
	<tr><td colspan=2 class="nopad">{include file="profile_password_table.tpl"}</td></tr>
    {if $enable_channels eq "0"}
	<tr><td colspan=2>{$pr_chinfop0}</td></tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr>
	    <td valign="top">{$pr_chinfoc6}</td>
	    <td class="nopad">
		<table cellpadding="3" cellspacing="0" border=0>
		    <tr><td><input type="radio" name="ch_comm" value="yes" {if $uinfo[0].ch_comm eq "yes"}checked{/if} onclick="enableme2()"></td><td valign="bottom">{$pr_chinfoc7}</td></tr>
		    <tr><td><input type="radio" name="ch_comm" value="no" {if $uinfo[0].ch_comm eq "no"}checked{/if} onclick="disableme2()"></td><td valign="bottom">{$pr_chinfoc8}</td></tr>
		</table>
	    </td>
	</tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr>
	    <td valign="top">{$pr_chinfoc9}</td>
	    <td class="nopad">
		<table cellpadding="3" cellspacing="0" border=0>
		    <tr><td><input type="radio" {if $uinfo[0].ch_comm eq "no"}disabled{/if} name="ch_wcomm" value="0" onclick="setval_p(0);" {if $uinfo[0].ch_comm_who eq "0" or $uinfo[0].ch_comm_who eq ""}checked{/if}></td><td valign="bottom">{$pr_chinfoc10}</td></tr>
		    <tr><td><input type="radio" {if $uinfo[0].ch_comm eq "no"}disabled{/if} name="ch_wcomm" value="1" onclick="setval_p(1);" {if $uinfo[0].ch_comm_who eq "1"}checked{/if}></td><td valign="bottom">{$pr_chinfoc11}</td></tr>
		    <tr><td><input type="radio" {if $uinfo[0].ch_comm eq "no"}disabled{/if} name="ch_wcomm" value="2" onclick="setval_p(2);" {if $uinfo[0].ch_comm_who eq "2"}checked{/if}></td><td valign="bottom">{$pr_chinfoc12}</td></tr>
		    <tr><td><input type="radio" {if $uinfo[0].ch_comm eq "no"}disabled{/if} name="ch_wcomm" value="3" onclick="setval_p(3);" {if $uinfo[0].ch_comm_who eq "3"}checked{/if}></td><td valign="bottom">{$pr_chinfoc13}</td></tr>
		</table>
		<div><input type="hidden" name="ch_comm_who" id="ch_comm_who" value="{$uinfo[0].ch_comm_who}"></div>
	    </td>
	</tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr>
	    <td valign="top">{$up_opt16}</td>
	    <td class="nopad">
		<table cellpadding="3" cellspacing="0" border=0>
		    <tr><td><input type="radio" {if $uinfo[0].ch_comm eq "no"}disabled{/if} name="ch_wcommrate" value="0" onclick="setval2_p(1);" {if $uinfo[0].ch_commrate eq "1"}checked{/if}></td><td valign="bottom">{$up_opt17}</td></tr>
		    <tr><td><input type="radio" {if $uinfo[0].ch_comm eq "no"}disabled{/if} name="ch_wcommrate" value="1" onclick="setval2_p(0);" {if $uinfo[0].ch_commrate eq "0"}checked{/if}></td><td valign="bottom">{$up_opt18}</td></tr>
		</table>
		<div><input type="hidden" name="ch_commrate" id="ch_commrate" value="{$uinfo[0].ch_commrate}"></div>
	    </td>
	</tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
    {/if}
	<tr><td colspan=2>{$pr_chinfop1}</td></tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr>
	    <td width="30%" valign="top">{$pr_chinfop2}</td>
	    <td>
		{if $btn ne "adm_members"}<div id="xavt"><a href="javascript:void(0)" onclick="setclass_act2('ccx'); ReverseContentDisplay('avt');"><span id="ccx">{$pr_chinfoc0}</span></a></div>{/if}
		<div id="avt" style="display: {if $btn eq "adm_members"}block{else}none{/if};">{include file="profile_avatar_table.tpl"}</div>
	    </td>
	</tr>
	<tr><td>{$pr_chinfop3}</td><td><input type="text" name="ffname" class="ff width400" value="{$uinfo[0].fname|spchar}"></td></tr>
	<tr><td>{$pr_chinfop4}</td><td><input type="text" name="flname" class="ff width400" value="{$uinfo[0].lname|spchar}"></td></tr>
	<tr>
	    <td align="left">{$mypr_infotxt10}</td>
            <td>
                <table cellpadding="0" cellspacing="0" border=0>
        	    <tr>
        		{if $date_selection eq "css"}
                        <td><input type="text" readonly class="ff width175" name="bdate" value="{if $uinfo[0].bdate eq "0000-00-00"}{$smarty.now|date_format:'%Y-%m-%d'}{else}{$uinfo[0].bdate}{/if}"></td>
                        <td>&nbsp;</td>
                        <td valign="top">
                    	    {if $btn eq "adm_members"}
                    		{if $minfo[0].ch_type eq 1}{assign var=fnr value=3}
                    		{else}{assign var=fnr value=4}{/if}
                    	    {else}
                    		{assign var=fnr value=1}
                    	    {/if}
                    	    <img src="{$img_url}/calendar/cal.gif" width="16" height="16" border="0" alt="{$adm_setdatetxt}" title="{$adm_setdatetxt}" onclick="displayCalendar(document.forms[{$fnr}].bdate,'yyyy-mm-dd',this);">
                    	</td>
                    	{else}
                    	    <td>{html_select_date prefix="bd_" time=$uinfo[0].bdate start_year="-109" end_year="+1" display_days=true all_extra='class="selbox"' month_extra='style="width: 113px;"' day_extra='style="width: 50px;"' year_extra='style="width: 65px;"'}</td>
                    	{/if}
                    </tr>
                </table>
            </td>
	</tr>
	<tr>
	    <td>{$pr_chinfop5}</td>
	    <td>
		<select name="fgen" class="selbox" style="width: 80px;">
		    <option value="">{$pr_chinfop7}</option>
		    <option value="M" {if $uinfo[0].gender eq "M"}selected{/if}>{$pr_chinfop28}</option>
		    <option value="F" {if $uinfo[0].gender eq "F"}selected{/if}>{$pr_chinfop29}</option>
		</select>
	    </td>
	</tr>
	<tr>
	    <td>{$pr_chinfop6}</td>
	    <td>
		<select name="frel" class="selbox" style="width: 80px;">
		    <option value="">{$pr_chinfop7}</option>
		    <option value="{$pr_chinfop8}" {if $uinfo[0].rel_status eq $pr_chinfop8}selected{/if}>{$pr_chinfop8}</option>
		    <option value="{$pr_chinfop9}" {if $uinfo[0].rel_status eq $pr_chinfop9}selected{/if}>{$pr_chinfop9}</option>
		    <option value="{$pr_chinfop10}" {if $uinfo[0].rel_status eq $pr_chinfop10}selected{/if}>{$pr_chinfop10}</option>
		</select>
	    </td>
	</tr>
	<tr>
	    <td valign="top">{$pr_chinfopr1}</td>
	    <td class="nopad" valign="top">
		<table width="100%" border="0" cellpadding="2" cellspacing="1">
		    <tr>
			<td width="4%"><input type="radio" name="fstatus" value="yes" {if $uinfo[0].show_status eq "yes"}checked{/if}></td>
			<td valign="bottom">{$pr_chinfopr2}</td>
		    </tr>
		    <tr>
			<td><input type="radio" name="fstatus" value="no" {if $uinfo[0].show_status eq "no"}checked{/if}></td>
			<td valign="bottom">{$pr_chinfopr3}</td>
		    </tr>
		</table>
	    </td>
	</tr>
	<tr>
	    <td valign="top">{$pr_chinfop11}</td>
	    <td class="nopad" valign="top">
		<table width="100%" border="0" cellpadding="2" cellspacing="1">
		    <tr>
			<td width="4%"><input type="radio" name="fage" value="yes" {if $uinfo[0].show_age eq "yes"}checked{/if}></td>
			<td valign="bottom">{$pr_chinfop12}</td>
		    </tr>
		    <tr>
			<td><input type="radio" name="fage" value="no" {if $uinfo[0].show_age eq "no"}checked{/if}></td>
			<td valign="bottom">{$pr_chinfop13}</td>
		    </tr>
		</table>
	    </td>
	</tr>
	<tr><td valign="top">{$pr_chinfop14}</td><td><textarea name="fabout" class="ff width400" rows="7">{$uinfo[0].about_me|spchar}</textarea></td></tr>
	<tr><td>{$pr_chinfop15}</td><td><input type="text" name="furl" class="ff width400" value="{$uinfo[0].site|spchar}"></td></tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr><td colspan=2>{$pr_chinfop16}</td></tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr><td>{$pr_chinfop17}</td><td><input type="text" name="foccup" class="ff width400" value="{$uinfo[0].inf_occup|spchar}"></td></tr>
	<tr><td>{$pr_chinfop18}</td><td><input type="text" name="fcomp" class="ff width400" value="{$uinfo[0].inf_comp|spchar}"></td></tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr><td colspan=2>{$pr_chinfop19}</td></tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr><td>{$pr_chinfop20}</td><td><input type="text" name="fschool" class="ff width400" value="{$uinfo[0].inf_schools|spchar}"></td></tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr><td colspan=2>{$pr_chinfop21}</td></tr>
	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr><td valign="top">{$pr_chinfop22}</td><td><textarea name="finteres" class="ff width400" rows="7">{$uinfo[0].inf_interests|spchar}</textarea></td></tr>
	<tr><td valign="top">{$pr_chinfop23}</td><td><textarea name="ffavmov" class="ff width400" rows="7">{$uinfo[0].inf_movies|spchar}</textarea></td></tr>
	<tr><td valign="top">{$pr_chinfop24}</td><td><textarea name="ffavmus" class="ff width400" rows="7">{$uinfo[0].inf_music|spchar}</textarea></td></tr>
	<tr><td valign="top">{$pr_chinfop25}</td><td><textarea name="ffavbook" class="ff width400" rows="7">{$uinfo[0].inf_books|spchar}</textarea></td></tr>
	<tr>
	    <td></td>
	    <td>
		{if $btn eq "adm_members"}<input type="button" name="chsave_profileinfo" value="{$pr_chinfop37}" class="fb" onclick="setuserinfo('chprof')">{else}<input type="submit" name="chsave_profileinfo" value="{$pr_chinfop37}" class="fb">{/if}
		{if $btn eq "adm_members"}<input type="hidden" name="chprof_uid" value="{$minfo[0].uid}"><div id="chprof_resp" class="pt5"></div>{/if}
	    </td>
	</tr>
    </table>
</div>
{if $btn eq "adm_members"}</fieldset>{/if}
</form>