
<!-- BEGIN UPLOAD PAGE PRESENTATION TABLE -->
	    <table width="100%" cellpadding=10 cellspacing=4 border=0>
		<tr>
		    <td colspan=2>
			{$up_txt13} {if $smarty.session.USERNAME ne ""}{$smarty.session.USERNAME}!{else}{$sguest}!{/if}<br><br>
			{if $smarty.session.USERNAME ne ""}
			{$up_txt14}
			{else}
			{$up_txt15}
			{/if}
		    </td>
		</tr>
		<tr>
		    <td width="2%" valign="top">
			<img src="{$img_url}/warning.gif" alt="Warning!" width="46" height="40">
		    </td>
		    <td valign="top">
			{$up_txt16}
			{$up_txt17}
			{$up_txt11}{$site_name}{$up_txt12}
		    </td>
		</tr>
		<tr>
		    <td colspan=2></td>
		</tr>
	    </table>
<!-- END UPLOAD PAGE PRESENTATION TABLE -->	    
