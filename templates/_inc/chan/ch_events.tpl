<form name="cheventform" method="post" action="{if $sh_ubtn eq "0"}{else}{$base_url}/my_profile_shows?edit_show={$sh_ushow}{/if}">
    <table width="100%" border="0" cellpadding="2" cellspacing="1" align="center">
	<tr><td></td><td align="right"><a href="javascript:void(0)" onclick="ReverseContentDisplay('m_shows'); ReverseContentDisplay('m_addshow'); setclass_act2('m_shows_lnk');"><span id="m_shows_lnk">{$pr_chinfom28}</span></a></td></tr>
        <tr>
    	    <td colspan="2" class="nopad">
    	    <div id="m_shows" style="display: none;">
    		{include file="_inc/chan/ch_eventslist.tpl"}
    	    </div>
    	    </td>
    	</tr>
	
	<tr>
	    <td colspan="2" class="nopad">
	    <div id="m_addshow" style="display: block;">
		<table cellpadding="2" cellspacing="1" width="100%">
	
		    <tr><td align="left">{if $sh_ubtn eq "0" and $smarty.request.edit_show eq ""}{$pr_chinfom20}{else}{$pr_chinfom50}{/if}</td><td align="right"></td></tr>
	            <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
	            <tr>
	        	<td>{$pr_chinfom21}</td>
	        	<td>
	        	    <table cellpadding="0" cellspacing="0">
	        		<tr>
	        		{if $date_selection eq "css"}
	        		    <td><input type="text" readonly class="ff width175" name="ffdate" value="{if $smarty.request.ffdate ne ""}{$smarty.request.ffdate}{else}{$sinfo[0].s_date}{/if}"></td><td valign="top" class="pl2"><img src="{$img_url}/calendar/cal.gif" width="16" height="16" border="0" alt="{$adm_setdatetxt}" title="{$adm_setdatetxt}" onclick="displayCalendar(document.forms[1].ffdate,'yyyy-mm-dd',this);"></td>
	        		{else}
	        		    <td>{html_select_date prefix="ev_" time=$sinfo[0].s_date start_year="-109" end_year="+1" display_days=true all_extra='class="selbox"' month_extra='style="width: 113px;"' day_extra='style="width: 50px;"' year_extra='style="width: 65px;"'}</td>
	        		{/if}
	        		</tr>
	        	    </table>
	        	</td>
	    	    </tr>
	            <tr>
	    	        <td>{$pr_chinfom22}</td>
	        	<td>
	        	    <select name="ftimeh" class="selbox" style="width: 50px;">
	        		{section name=i start=0 loop=24}
	        		    <option value="{$smarty.section.i.index}" {if $smarty.section.i.index eq $smarty.request.ftimeh or $smarty.section.i.index eq $sinfo[0].s_timeh}selected{/if}>{$smarty.section.i.index}</option>
	        		{/section}
	        	    </select>&nbsp:&nbsp;
	        	    <select name="ftimem" class="selbox" style="width: 50px;">
	        		{section name=i start=0 loop=60}
	        		    <option value="{$smarty.section.i.index}" {if $smarty.section.i.index eq $smarty.request.ftimem or $smarty.section.i.index eq $sinfo[0].s_timem}selected{/if}>{$smarty.section.i.index}</option>
	        		{/section}
	    		    </select>
    			</td>
    		    </tr>
	            <tr><td>{$pr_chinfom23}</td><td><input type="text" name="fvenue" class="ff width400" value="{if $smarty.request.fvenue ne ""}{$smarty.request.fvenue}{else}{$sinfo[0].s_venue}{/if}"></td></tr>
	            <tr><td>{$pr_chinfom26}</td><td><input type="text" name="faddr" class="ff width400" value="{if $smarty.request.faddr ne ""}{$smarty.request.faddr}{else}{$sinfo[0].s_addr}{/if}"></td></tr>
	            <tr><td>{$pr_chinfom27}</td><td><input type="text" name="fcity" class="ff width400" value="{if $smarty.request.fcity ne ""}{$smarty.request.fcity}{else}{$sinfo[0].s_city}{/if}"></td></tr>
	            <tr><td>{$pr_chinfop33}</td><td><input type="text" name="fzip" class="ff width400" value="{if $smarty.request.fzip ne ""}{$smarty.request.fzip}{else}{$sinfo[0].s_zip}{/if}"></td></tr>
	            <tr>
	                <td>{$pr_chinfop34}</td>
	                <td>{include file="countries.tpl"}</td>
	            </tr>
	            <tr><td valign="top">{$pr_chinfoc3}</td><td><textarea name="fdescr" class="ff width400" rows="7">{if $smarty.request.fdescr ne ""}{$smarty.request.fdescr}{else}{$sinfo[0].s_descr}{/if}</textarea></td></tr>
	            <tr><td>{$pr_chinfom24}</td><td><input type="text" name="ftickets" class="ff width400" value="{if $smarty.request.ftickets ne ""}{$smarty.request.ftickets}{else}{$sinfo[0].s_ticket}{/if}"></td></tr>
	            <tr><td></td><td class="pt0">{$pr_chinfom25}</td></tr>
		    <tr><td colspan="2" class="">&nbsp;</td></tr>
		    <tr>
			<td></td>
			<td>
			    {if $sh_ubtn eq "0" and $smarty.request.edit_show eq ""}<input type="submit" name="chsave_events" value="{$pr_chinfom19}" class="fb">
			    {else}
				<input type="hidden" name="ch_upid" value="{$sh_ushow}">
				<input type="submit" name="chupdate_events" value="{$pr_chinfom48}" class="fb">&nbsp;&nbsp;&nbsp;<input type="submit" name="chdel_events" value="{$pr_chinfom49}" class="fb" onclick="return confirm ('{$pr_chinfom51}');">
			    {/if}
			</td>
		    </tr>
		</table>
	    </div>
	    </td>
	</tr>
    </table>
</div>
</form>