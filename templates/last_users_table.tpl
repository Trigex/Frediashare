
<!-- BEGIN LAST USERS TABLE -->
	<form id="getusersform">
	    <table border="0" cellspacing="0" cellpadding="0" class="" width="100%">
		<tr>
		    <td class="f10">{$hpbox_seealso}</td>
		    {if $users_last eq "1"}
		    <td class="f10">
			<a href="javascript:void(0)" onclick="thisDiv('yes'); ldiv('getusersresp'); getusers('last'); {if $users_online eq "1"}setclass_act('pane1');{/if} {if $users_last eq "1"}changeclass_inact('pane2');{/if}"><span id="pane1"><span class="f10">{$last_online}</span></span></a>
		    </td>
		    {/if}
		    {if $users_online eq "1"}
		    <td class="f10" align="right">
			<a href="javascript:void(0)" onclick="thisDiv('yes'); ldiv('getusersresp'); getusers('online'); {if $users_online eq "1"}setclass_act('pane2');{/if} {if $users_last eq "1"}changeclass_inact('pane1');{/if}"><span id="pane2"><span class="f10">{$last_onlinenow}</span></span></a>
		    </td>
		    {/if}
		</tr>
		<tr>
		    <td class="nopad" colspan="3">
			<div id="getusersresp"></div>
			<div id="loading2" style="display: none; padding-top: 5px;" align="left" class="f10">
			    <table cellpadding=0 cellspacing=0 border=0>
				<tr><td class="">{$view_loading}</td><td>{$loading_gif}</td></tr>
			    </table>
			</div>
		    </td>
		</tr>
	    </table>
	</form>
<!-- END LAST USERS TABLE -->
