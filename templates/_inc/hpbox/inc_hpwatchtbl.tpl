<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="">
    <tr> 
    <td>
	<div id="bv" style="display: block;">
	    <table width="100%" cellpadding="0" cellspacing="0">
		<tr>
		    <td class="recipbg" height="30">
			<div id="recipient_watch" style="display:block;">
			</div>
		    </td>
		</tr>
		<tr>
		    <td align="center" class="nopad">
			<table width="97%" cellpadding=1 cellspacing=0 border=0 align="center">
			    <tr>
				<td align="left" class="nopad">
        			    <div id="preloader_watch" style="display:none;" class="f10">
        				{$view_loading}{$loading_gif}
        			    </div>
				</td>
				<td align="right" class="f10">
				<div id="morelesswatch" style="display: block;">
				    <table border="0" cellspacing="1" cellpadding="1">
    					<tr>
        				    <td><a href="javascript:void(0)" {if $smarty.session.UID ne "" or $guests_file_sorting eq "1"}onclick="xajax_add_line_('watch');"{else}onclick="alert('{$msg_userlogin}');"{/if}>{$act_more}</a></td>
        				    <td>{$myfiles_delim}</td>
        				    <td><a href="javascript:void(0)" {if $smarty.session.UID ne "" or $guests_file_sorting eq "1"}onclick="xajax_del_line_('watch');"{else}onclick="alert('{$msg_userlogin}');"{/if}>{$act_less}</a></td>
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
