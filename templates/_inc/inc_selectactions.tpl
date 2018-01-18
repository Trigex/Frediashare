		    {if $btn eq "messages"}
		    <div id="actdiv" style="display: none;">
			<table cellpadding=0 cellspacing=0 border=0>
			    <tr>
				<td class="pt5" valign="top">
				    <select name="actions" class="selbox">
					<option value="{$inbox_acts}">{$inbox_acts}</option>
					{if $sbtn eq "blocked"}
					<option value="{$blocked_act4}">{$blocked_act4}</option>
					<option value="{$blocked_act5}">{$blocked_act5}</option>
					{/if}
					{if $sbtn eq "inbox"}
					<option value="{$inbox_itblact4}">{$inbox_itblact4}</option>
					<option value="{$inbox_itblact5}">{$inbox_itblact5}</option>
					{/if}
					<option value="{$inbox_itblact6}">{$inbox_itblact6}</option>
				    </select>
				</td>
				<td class="pt5" valign="bottom">&nbsp;<input type="submit" name="goact" value="{$btn_apply}" class="fb"></td>
			    </tr>
                        </table>
                    </div>
                    {/if}
                    
                    {if $sbtn eq "friends"}
            	    <div id="actdiv" style="display: none;">
            		<table cellpadding=0 cellspacing=0 border=0>
            		    <tr>
            			<td class="pt5" valign="top">
            			    <select name="actions" class="selbox">
            				<option value="{$inbox_acts}">{$inbox_acts}</option>
            				<option value="{$act_frenable}">{$act_frenable}</option>
            				<option value="{$act_frdisable}">{$act_frdisable}</option>
            				{if $msg_multi eq "1"}
            				<option value="{$admact_memmsg}">{$admact_memmsg}</option>
            				{/if}
            				{if $file_ratings eq "1"}
            				<option value="{$act_rateenable}">{$act_rateenable}</option>
            				<option value="{$act_ratedisable}">{$act_ratedisable}</option>
            				{/if}
            				{if $file_comments eq "1"}
            				<option value="{$act_comenable}">{$act_comenable}</option>
            				<option value="{$act_comdisable}">{$act_comdisable}</option>
            				{/if}
            				{if $msg_block eq "1"}<option value="{$blocked_act4}">{$blocked_act4}</option><option value="{$blocked_act5}">{$blocked_act5}</option>{/if}
            				<option value="{$inbox_itblact6}">{$inbox_itblact6}</option>
            			    </select>
            			</td>
            			<td class="pt5" valign="bottom">&nbsp;<input type="submit" name="goact" value="{$btn_apply}" class="fb"></td>
            		    </tr>
            		</table>
            	    </div>	
                    {/if}
                    
                    {if $sbtn eq "bmember" or $sbtn eq "search" or $sbtn eq "ufr" or $sbtn eq "myusubs"}
            	    <div id="actdiv" style="display: none;">
            		<table cellpadding=0 cellspacing=0 border=0>
            		    <tr>
            			<td class="pt5" valign="top"> 
            			    <select name="actions" class="selbox">
            				<option value="{$inbox_acts}">{$inbox_acts}</option>
            				<option value="{$admact_memaddfr}">{$admact_memaddfr}</option>
            				{if $msg_multi eq "1"}<option value="{$admact_memmsg}">{$admact_memmsg}</option>{/if}
            				{if $msg_block eq "1"}<option value="{$blocked_act4}">{$blocked_act4}</option><option value="{$blocked_act5}">{$blocked_act5}</option>{/if}
            				{if $sbtn eq "myusubs"}<option value="{$uch_txt15x}">{$uch_txt15x}</option>{/if}
            			    </select>
            			</td>
            			<td class="pt5" valign="bottom">&nbsp;<input type="submit" name="goact" value="{$btn_apply}" class="fb"></td>
            		    </tr>
            		</table>
            	    </div>
                    {/if}
                    
                    {if $btn eq "adm_members" or ( $sbtn eq "adm_search" and $smarty.request.searchm ne "" )}
                    <div id="actdiv" style="display: none;">
                	<table cellpadding=0 cellspacing=0 border=0>
                	    <tr>
                		<td class="pt5" valign="top">
                		    <select name="actions" class="selbox">
                			<option value="{$inbox_acts}">{$inbox_acts}</option>
                			{if $sbtn ne "adm_banned"}
                			<option value="{$act_frenable}">{$act_frenable}</option>
                			<option value="{$act_frdisable}">{$act_frdisable}</option>
                			<option value="{$adm_memupact1}">{$adm_memupact1}</option>
                			<option value="{$adm_memupact2}">{$adm_memupact2}</option>
                			{/if}
                			<option value="{$admact_memban}">{$admact_memban}</option>
                			<option value="{$admact_memunban}">{$admact_memunban}</option>
                			{if $sbtn ne "adm_banned"}
                			<option value="{$admact_mememail}">{$admact_mememail}</option>
                			<option value="{$admact_memmsg}">{$admact_memmsg}</option>
					<option value="{$admact_memdela}">{$admact_memdela}</option>
					<option value="{$admact_memdeli}">{$admact_memdeli}</option>
					<option value="{$admact_memdelv}">{$admact_memdelv}</option>
					<option value="{$admact_memdelm}">{$admact_memdelm}</option>
					{/if}
					{if $sbtn eq "adm_banned"}
					<option value="{$admact_memdelban}">{$admact_memdelban}</option>
					{/if}
                		    </select>
                		</td>
                		<td class="pt5" valign="bottom">&nbsp;<input type="submit" name="goact" value="{$btn_apply}" class="fb"></td>
                	    </tr>
                	</table>
                    </div>
                    {/if}
                    
                    {if $sbtn eq "comments"}
                    <div id="actdiv" style="display: none;">
                	<table cellpadding=0 cellspacing=0 border=0>
                	    <tr>
                		<td class="pt5" valign="top">
                		    <select name="actions" class="selbox">
                			<option value="{$inbox_acts}">{$inbox_acts}</option>
                			{if $section eq "profile"}
                			<option value="{$comm_app3}">{$comm_app3}</option>
                			<option value="{$comm_app4}">{$comm_app4}</option>
                			<option value="{$act_delrescomm}">{$act_delrescomm}</option>
                			<option value="{$act_delselcomm}">{$act_delselcomm}</option>
                			{else}
                			    {if $smarty.request.id eq ""}
                			<option value="{$act_delcomm}">{$act_delcomm}</option>
                			    {else}
                			<option value="{$comm_app3}">{$comm_app3}</option>
                			<option value="{$comm_app4}">{$comm_app4}</option>
                			<option value="{$act_delrescomm}">{$act_delrescomm}</option>
                			<option value="{$act_delselcomm}">{$act_delselcomm}</option>
                			    {/if}
                			{/if}
                		    </select>
                		</td>
                		<td class="pt5" valign="bottom">&nbsp;<input type="submit" name="goact" value="{$btn_apply}" class="fb"></td>
                	    </tr>
                	</table>
                    </div>
                    {/if}
                    
                    {if $sbtn eq "wm" or $sbtn eq "ads" or $sbtn eq "wmaudio" or $sbtn eq "manage" or $sbtn eq "siteads" or $sbtn eq "tpl" or $sbtn eq "tads"}
                    <div id="actdiv" style="display: none;">
                	<table cellpadding=0 cellspacing=0 border=0>
                	    <tr>
                		<td class="pt5" valign="top">
                		    <select name="actions" class="selbox">
                			<option value="{$inbox_acts}">{$inbox_acts}</option>
                			<option value="{$act_frenable}">{$act_frenable}</option>
                                        <option value="{$act_frdisable}">{$act_frdisable}</option>
                                        {if $sbtn ne "siteads" and $sbtn ne "tpl"}<option value="{$inbox_itblact6}">{$inbox_itblact6}</option>{/if}
                		    </select>
                		</td>
                		<td class="pt5" valign="bottom">&nbsp;<input type="submit" name="goact" value="{$btn_apply}" class="fb"></td>
                	    </tr>
                	</table>
                    </div>
                    {/if}
                    
                    {if $sbtn eq "guest"}
                    <div id="actdiv" style="display: none;">
                	<table cellpadding=0 cellspacing=0 border=0>
                	    <tr>
                		<td class="pt5" valign="top">
                		    <select name="actions" class="selbox">
                			<option value="{$inbox_acts}">{$inbox_acts}</option>
                			<option value="{$admact_mreset}">{$admact_mreset}</option>
                			<option value="{$inbox_itblact6}">{$inbox_itblact6}</option>
                		    </select>
                		</td>
                		<td class="pt5" valign="bottom">&nbsp;<input type="submit" name="goact" value="{$btn_apply}" class="fb"></td>
                	    </tr>
                	</table>
                    </div>
                    {/if}
                    
                    {if $sbtn eq "langs"}
                    <div id="actdiv" style="display: none;">
                	<table cellpadding=0 cellspacing=0 border=0>
                	    <tr>
                		<td class="pt5" valign="top">
                		    <select name="actions" class="selbox">
                			<option value="{$inbox_acts}">{$inbox_acts}</option>
                			<option value="{$act_frenable}">{$act_frenable}</option>
                                        <option value="{$act_frdisable}">{$act_frdisable}</option>
                			<option value="{$inbox_itblact6}">{$inbox_itblact6}</option>
                		    </select>
                		</td>
                		<td class="pt5" valign="bottom">&nbsp;<input type="submit" name="goact" value="{$btn_apply}" class="fb"></td>
                	    </tr>
                	</table>
                    </div>
                    {/if}
                    
                    {if $sbtn eq "resp"}
                    <div id="actdiv" style="display: none;">
                	<table cellpadding=0 cellspacing=0 border=0>
                	    <tr>
                		<td class="pt5" valign="top">
                		    <select name="actions" class="selbox">
                		    {if $smarty.request.st eq ""}
                			<option value="{$inbox_acts}">{$inbox_acts}</option>
                			<option value="{$fresp_txt39}">{$fresp_txt39}</option>
                		    {else}
                			<option value="{$inbox_acts}">{$inbox_acts}</option>
                			<option value="{$fresp_txt40}">{$fresp_txt40}</option>
                			<option value="{$fresp_txt400}">{$fresp_txt400}</option>
                			<option value="{$fresp_txt41}">{$fresp_txt41}</option>
                		    {/if}
                		    </select>
                		</td>
                		<td class="pt5" valign="bottom">&nbsp;<input type="submit" name="goact" value="{$btn_apply}" class="fb"></td>
                	    </tr>
                	</table>
                    </div>
                    {/if}
                    
                    