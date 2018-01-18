	    {if $btn eq "adm_members"}<fieldset><legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('cheven_txt'); ReverseContentDisplay('cheven_div'); setclass_act2('cheven_fs');"><span id="cheven_fs">{$pr_chinfom18}</span></a></legend>{/if}
	    <div id="cheven_txt" style="display: {if $btn eq "adm_members"}block{else}none{/if};"><center><h1>{$pr_chinfom18}</h1></center></div>
	    <div id="cheven_div" style="display: {if $btn eq "adm_members"}none{else}block{/if};">
		{if $btn eq "adm_members"}<input type="hidden" name="cheven_sid" id="cheven_sid" value="">{/if}
    		<table cellpadding="5" cellspacing="0" width="100%" class="br2" border=0>
    		{if $shows[0].s_uid eq ""}
    		    <tr><td>{$pr_chinfom45}</td></tr>
    		{else}
    		{section name=s loop=$shows}
    		    <tr>
    			<td class="{if $sbtn ne "userpage"}nopad{if !$smarty.section.s.last}_borderbottom{/if}{else}{if !$smarty.section.s.last}borderbottom{/if}{/if}">
    			    <table cellpadding="10" cellspacing="0" width="100%" border=0>
    				<tr>
    				    <td width="55%" align="left" valign="top">
    					<div class="p1 bold">{$shows[s].s_date|date_format:"%B %d, %Y"}<br><span class="normal">{$pr_chinfom59}{$shows[s].s_timeh}:{$shows[s].s_timem} {if $shows[s].s_timeh gt -1 and $shows[s].s_timeh lt 12}{$pr_chinfom57}{else}{$pr_chinfom58}{/if}</span></div>
    					{if $btn ne "adm_members"}
    					<div class="p1 {if $sbtn eq "userpage"}p5{else}pt5{/if}"><a href="{$shows[s].s_ticket}" target="_blank">{$pr_chinfom54}</a></div>
    					{if $sbtn ne "userpage"}<div class="p1"><a href="{$base_url}/my_profile_shows?edit_show={$shows[s].s_key}">{$pr_chinfom55}</a></div>{/if}
    					{elseif $btn eq "adm_members"}
    					<div class="pt10"><a href="javascript:void(0)" onclick="if ( confirm ('{$pr_chinfom51}') ) {ldelim} document.getElementById('cheven_sid').value = '{$shows[s].s_key}'; setuserinfo('cheven', '{$smarty.section.s.iteration}'); return false; {rdelim}">{$pr_chinfom49}</a></div>
    					<input type="hidden" name="cheven_uid" value="{$minfo[0].uid}"><div id="cheven_resp{$smarty.section.s.iteration}" class="pt5"></div>
    					{/if}
    				    </td>
    				    <td width="45%" align="left">
    					<div class="p1 bold">{$shows[s].s_venue|spchar}</div>
    					{if $shows[s].s_addr ne ""}<div class="p1 normal">{$shows[s].s_addr|spchar}</div>{/if}
    					<div class="p1 normal">{if $shows[s].s_city ne ""}{$shows[s].s_city|spchar}{/if} {if $shows[s].s_zip ne ""}{$shows[s].s_zip|spchar}{/if}</div>
    					<div class="p1 normal">{if $shows[s].s_country ne ""}{$shows[s].s_country|spchar}{/if}</div>
    					{if $sbtn ne "userpage"}
    					<br>
    					{if $shows[s].s_descr ne ""}<div class="p1 normal">{$shows[s].s_descr|nl2br|spchar}</div>{/if}
    					{/if}
    				    </td>
    				</tr>
    				{if $sbtn eq "userpage"}
    				<tr>
    				    <td colspan="2" class="p0" align="left">{if $shows[s].s_descr ne ""}<div class="p1 normal">{$shows[s].s_descr|nl2br|spchar}</div>{/if}</td>
    				</tr>
    				{/if}
    			    </table>
    			</td>
    		    </tr>
    		{/section}
    		{/if}
    		</table>
    	    </div>
    	    {if $btn eq "adm_members"}</fieldset>{/if}
