<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="">
    <tr> 
    <td>
	<div id="ba" style="display: block;">
	    <table width="100%" cellpadding="0" cellspacing="0">
		<tr>
		    <td class="recipbg" height="30">
			<div id="recipienta" style="display:block;">
			</div>
		    </td>
		</tr>
		<tr>
		    <td align="center" class="nopad">
			<table width="97%" cellpadding=1 cellspacing=0 border=0 align="center">
			    <tr>
				<td align="left" class="nopad">
        			    <div id="preloadera" style="display:none;" class="f10">
        				{$view_loading}{$loading_gif}
        			    </div>
				</td>
				<td align="right" class="f10">
				<div id="morelessfeata" style="display: block;">
				    <table border="0" cellspacing="1" cellpadding="1">
    					<tr>
        				    <td><a href="javascript:void(0)" {if $smarty.session.UID ne "" or $guests_file_sorting eq "1"}onclick="xajax_add_aline_('featured');"{else}onclick="alert('{$msg_userlogin}');"{/if}>{$act_more}</a></td>
        				    <td>{$myfiles_delim}</td>
        				    <td><a href="javascript:void(0)" {if $smarty.session.UID ne "" or $guests_file_sorting eq "1"}onclick="xajax_del_aline_('featured');"{else}onclick="alert('{$msg_userlogin}');"{/if}>{$act_less}</a></td>
    					</tr>
    				    </table>
    				</div>
				<div id="morelessviewsa" style="display: none;">
				    <table border="0" cellspacing="1" cellpadding="1">
    					<tr>
        				    <td><a href="javascript:void(0)" {if $smarty.session.UID ne "" or $guests_file_sorting eq "1"}onclick="xajax_add_aline_('views');"{else}onclick="alert('{$msg_userlogin}');"{/if}>{$act_more}</a></td>
        				    <td>{$myfiles_delim}</td>
        				    <td><a href="javascript:void(0)" {if $smarty.session.UID ne "" or $guests_file_sorting eq "1"}onclick="xajax_del_aline_('views');"{else}onclick="alert('{$msg_userlogin}');"{/if}>{$act_less}</a></td>
    					</tr>
    				    </table>
    				</div>
				<div id="morelessratingsa" style="display: none;">
				    <table border="0" cellspacing="1" cellpadding="1">
    					<tr>
        				    <td><a href="javascript:void(0)" {if $smarty.session.UID ne "" or $guests_file_sorting eq "1"}onclick="xajax_add_aline_('ratings');"{else}onclick="alert('{$msg_userlogin}');"{/if}>{$act_more}</a></td>
        				    <td>{$myfiles_delim}</td>
        				    <td><a href="javascript:void(0)" {if $smarty.session.UID ne "" or $guests_file_sorting eq "1"}onclick="xajax_del_aline_('ratings');"{else}onclick="alert('{$msg_userlogin}');"{/if}>{$act_less}</a></td>
    					</tr>
    				    </table>
    				</div>
				</td>
			    </tr>
			</table>
		    </td>
		</tr>
	    </table>
	</div>
    </td>
    </tr>
</table>
