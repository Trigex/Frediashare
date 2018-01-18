		    <div id="b7">
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td align="left" class="thead2 nopad">
				    <table cellpadding="0" cellspacing="0" border="0"><tr><td class="thead2">{$userpage_chcomm}</td><td class="thead2"><div id="commcount">({$tc|viewnr})</div></td></tr></table>
				</td>
				{if $minfo[0].uid eq $smarty.session.UID}
				<td align="right" class="thead2 nopad">
				    <a href="{$base_url}/my_comments/profile">{$comm_edit|lower}</a>&nbsp;
				</td>
				{/if}
			    <tr>
			</table>
			
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td class="tbody2 bodylabel" colspan="2">
				    {include file="_inc/viewfile/inc_viewfilecomments.tpl"}
				</td>
			    </tr>
			</table>
		    </div>
