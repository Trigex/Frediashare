<form name="chperf" method="post" action="" id="chperf">
{if $btn eq "adm_members"}<fieldset><legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('chperf_txt'); ReverseContentDisplay('chperf_div'); setclass_act2('chperf_fs');"><span id="chperf_fs">{$pr_chinfob58}</span></a></legend>{/if}
<div id="chperf_txt" style="display: {if $btn eq "adm_members"}block{else}none{/if};"><center>{if $minfo[0].ch_type eq 2}{$pr_chinfob59}{elseif $minfo[0].ch_type eq 3}{$pr_chinfom1}{elseif $minfo[0].ch_type eq 4}{$pr_chinfom32}{elseif $minfo[0].ch_type eq 5}{$pr_chinfom35}{elseif $minfo[0].ch_type eq 6}{$pr_chinfom37}{/if}</center></div>
<div id="chperf_div" style="display: {if $btn eq "adm_members"}none{else}block{/if};">
    <table width="100%" border="0" cellpadding="2" cellspacing="1" align="center">
    {if $minfo[0].ch_type eq 2 or $minfo[0].ch_type eq 4 or $minfo[0].ch_type eq 5 or $minfo[0].ch_type eq 6}
	<tr><td colspan="2">{if $minfo[0].ch_type eq 2}{$pr_chinfob59}{elseif $minfo[0].ch_type eq 4}{$pr_chinfom32}{elseif $minfo[0].ch_type eq 5}{$pr_chinfom35}{elseif $minfo[0].ch_type eq 6}{$pr_chinfom37}{/if}</td></tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr><td valign="top">{if $minfo[0].ch_type eq 2 or $minfo[0].ch_type eq 5 or $minfo[0].ch_type eq 6}{$pr_chinfob60}{elseif $minfo[0].ch_type eq 4}{$pr_chinfop27}{/if}</td><td><textarea name="fabout" class="ff width400" rows="7">{$minfo[0].about_me|spchar}</textarea></td></tr>
        <tr>
    	    <td>{if $minfo[0].ch_type eq 6}{$pr_chinfom38}{else}{$pr_chinfob63}{/if}</td>
    	    <td>
    		{if $minfo[0].ch_type eq 2}{insert name=keys_to_array assign=styles arr=$pr_chinfob64}{elseif $minfo[0].ch_type eq 4}{insert name=keys_to_array assign=styles arr=$pr_chinfom34}{elseif $minfo[0].ch_type eq 5}{insert name=keys_to_array assign=styles arr=$pr_chinfom36}{elseif $minfo[0].ch_type eq 6}{insert name=keys_to_array assign=styles arr=$pr_chinfom39}{/if}
    		<select name="fstyle" class="selbox">
    		    <option value="">{$pr_chinfop7}</option>
    		    {section name=j loop=$styles}
    		    <option value="{$styles[j]}" {if $uinfo[0].p_style eq $styles[j]}selected{/if}>{$styles[j]}</option>
    		    {/section}
    		</select>
    	    </td>
    	</tr>
        <tr><td valign="top">{$pr_chinfob61}</td><td><textarea name="finfl" class="ff width400" rows="7">{$uinfo[0].p_infl|spchar}</textarea></td></tr>
        <tr><td valign="top">{if $minfo[0].ch_type eq 6}{$pr_chinfom40}{else}{$pr_chinfob62}{/if}</td><td><textarea name="fsim" class="ff width400" rows="7">{$uinfo[0].p_sim|spchar}</textarea></td></tr>
    {elseif $minfo[0].ch_type eq 3}
	<tr><td colspan="2">{$pr_chinfom1}</td></tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr><td valign="top">{$pr_chinfom3}</td><td><textarea name="fabout" class="ff width400" rows="7">{$uinfo[0].p_about|spchar}</textarea></td></tr>
        <tr>
    	    <td>{$pr_chinfob63}</td>
    	    <td>
    		{insert name=keys_to_array assign=styles arr=$pr_chinfom4}
    		<select name="fstyle" class="selbox">
    		    <option value="">{$pr_chinfop7}</option>
    		    {section name=i loop=$styles}
    		    <option value="{$styles[i]}" {if $styles[i] eq $uinfo[0].p_style}selected{/if}>{$styles[i]}</option>
    		    {/section}
    		</select>
    	    </td>
    	</tr>
    	<tr><td>{$pr_chinfom5}</td><td><input type="text" name="fbandmem" class="ff width400" value="{$uinfo[0].p_bandmem|spchar}"></td></tr>
    	<tr>
    	    <td>{$pr_chinfom6}</td>
    	    <td>
    		<table cellpadding="0" cellspacing="0">
    		    <tr>
    		    {if $date_selection eq "css"}
    			<td>{if $btn eq "adm_members"}{assign var=fnr value=3}{else}{assign var=fnr value=1}{/if}<input type="text" readonly class="ff width175" name="ffdate" {if $smarty.request.ffdate ne ""}value="{$smarty.request.ffdate}"{else}value="{if $uinfo[0].p_formdate eq "0000-00-00"}{$smarty.now|date_format:"%Y-%m-%d"}{else}{$uinfo[0].p_formdate}{/if}"{/if}></td><td valign="top" class="pl2"><img src="{$img_url}/calendar/cal.gif" width="16" height="16" border="0" alt="{$adm_setdatetxt}" title="{$adm_setdatetxt}" onclick="displayCalendar(document.forms[{$fnr}].ffdate,'yyyy-mm-dd',this);"></td>
    		    {else}
    			<td>
    			    {html_select_date prefix="pi_" time=$uinfo[0].p_formdate start_year="-109" end_year="+1" display_days=true all_extra='class="selbox"' month_extra='style="width: 113px;"' day_extra='style="width: 50px;"' year_extra='style="width: 65px;"'}
    			</td>
    		    {/if}
    		    </tr>
    		</table>
    	    </td>
    	</tr>
    	<tr><td>{$pr_chinfom7}</td><td><input type="text" name="freclabel" class="ff width400" value="{$uinfo[0].p_reclabel|spchar}"></td></tr>
        <tr>
    	    <td>{$pr_chinfom8}</td>
    	    <td>
    		{insert name=keys_to_array assign=labels arr=$pr_chinfom17}
    		<select name="flabeltype" class="selbox">
    		    <option value="">{$pr_chinfop7}</option>
    		    {section name=i loop=$labels}
    		    <option value="{$labels[i]}" {if $labels[i] eq $uinfo[0].p_labeltype}selected{/if}>{$labels[i]}</option>
    		    {/section}
    		</select>
    	    </td>
    	</tr>
    	<tr><td valign="top">{$pr_chinfob61}</td><td><textarea name="finfl" class="ff width400" rows="7">{$uinfo[0].p_infl|spchar}</textarea></td></tr>
    	<tr><td valign="top">{$pr_chinfom9}</td><td><textarea name="flike" class="ff width400" rows="7">{$uinfo[0].p_sim|spchar}</textarea></td></tr>
    	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	<tr><td colspan="2">{$pr_chinfom2}</td></tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr><td>{$pr_chinfom10}</td><td></td></tr>
        <tr><td>{$pr_chinfom11}</td><td><input type="text" name="fcover1" class="ff width400" value="{$uinfo[0].p_a1cover|spchar}"></td></tr>
        <tr><td></td><td class="pt0">{$pr_chinfom12}</td></tr>
        <tr><td colspan="2" class="pt5"></td></tr>
        <tr><td>{$pr_chinfom13}</td><td><input type="text" name="flink1" class="ff width400" value="{$uinfo[0].p_a1order|spchar}"></td></tr>
        <tr><td></td><td class="pt0">{$pr_chinfom14}</td></tr>
        <tr><td colspan="2" class="">&nbsp;</td></tr>
        <tr><td colspan="2" class="">&nbsp;</td></tr>
        <tr><td>{$pr_chinfom15}</td><td></td></tr>
        <tr><td>{$pr_chinfom11}</td><td><input type="text" name="fcover2" class="ff width400" value="{$uinfo[0].p_a2cover|spchar}"></td></tr>
        <tr><td></td><td class="pt0">{$pr_chinfom12}</td></tr>
        <tr><td colspan="2" class="pt5"></td></tr>
        <tr><td>{$pr_chinfom13}</td><td><input type="text" name="flink2" class="ff width400" value="{$uinfo[0].p_a2order|spchar}"></td></tr>
        <tr><td></td><td class="pt0">{$pr_chinfom14}</td></tr>
        <tr><td colspan="2" class="">&nbsp;</td></tr>
        <tr><td colspan="2" class="">&nbsp;</td></tr>
        <tr><td>{$pr_chinfom16}</td><td></td></tr>
        <tr><td>{$pr_chinfom11}</td><td><input type="text" name="fcover3" class="ff width400" value="{$uinfo[0].p_a3cover|spchar}"></td></tr>
        <tr><td></td><td class="pt0">{$pr_chinfom12}</td></tr>
        <tr><td colspan="2" class="pt5"></td></tr>
        <tr><td>{$pr_chinfom13}</td><td><input type="text" name="flink3" class="ff width400" value="{$uinfo[0].p_a3order|spchar}"></td></tr>
        <tr><td></td><td class="pt0">{$pr_chinfom14}</td></tr>
    {/if}
	<tr><td colspan="2" class=""><input type="hidden" name="ch_type" value="{$minfo[0].ch_type}"></td></tr>
	<tr>
	    <td></td>
	    <td>
		{if $btn eq "adm_members"}<input type="button" name="chsave_performer" value="{$pr_chinfop37}" class="fb" onclick="setuserinfo('chperf');"><input type="hidden" name="chperf_uid" value="{$minfo[0].uid}"><div id="chperf_resp" class="pt5"></div>
		{else}<input type="submit" name="chsave_performer" value="{$pr_chinfop37}" class="fb">{/if}
	    </td>
	</tr>
    </table>
</div>
{if $btn eq "adm_members"}</fieldset>{/if}
</form>