                    <div id="actdiv2" style="display: none;"> 
                	<table cellpadding=0 cellspacing=0 border=0>
                	    <tr>
                		<td class="pt5" valign="top">
                		    <select name="actions" class="selbox">
                			<option value="{$inbox_acts}">{$inbox_acts}</option>
                			{if $smarty.request.filter eq "active"}<option value="{$admact_mclose}">{$admact_mclose}</option>{/if}
                			<option value="{$inbox_itblact6}">{$inbox_itblact6}</option>
                		    </select>
                		</td>
                		<td class="pt5" valign="bottom">&nbsp;<input type="submit" name="goact" value="{$btn_apply}" class="fb"></td>
                	    </tr>
                	</table>
                    </div>
                    
                    