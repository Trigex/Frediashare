<!-- BEGIN SEND VIDEO LINK TABLE -->
<hr>
<table border="0" cellspacing="0" cellpadding="0" align="center" class="">
    <tr>
	<td class="grey">
	    <table width="100%" border="0" cellpadding="0" cellspacing="0">
    		<tr>
    		    <td>
			<table width="100%" border="0" align="center" cellpadding="1" cellspacing="0" id="femail_tbl">
			    <tr>
				<td class="types" width="30%">{$femail_txt3}</td>
				<td><input name="toemail" class="ff width350" size="40" value="{$smarty.request.toemail}"></td>
			    </tr>
			    <tr>
				<td class="types" valign="top">{$femail_heading3}</td>
				<td><textarea name="enotes" class="ff width350" rows="7" cols="38">{$smarty.request.enotes}</textarea></td>
			    </tr>
			    <tr>
				<td class="types" valign="top">{$femail_txt4}</td>
				<td>{$body}</td>
			    </tr>
			    <tr><td colspan="2">&nbsp;</td></tr>
			    <tr>
				<td></td>
				<td align="left"><input type="button" class="fb" name="submitfile" onclick="sharefile('{$xtype}', '{$mkey}', '1'); return false;" value="{$pr_chinfob2}&nbsp;">&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="fb" name="cancel" value="{$femail_btncancel}" onclick="HideContent('fshare');"></td>
			    </tr>
			</table>
		    </td>
    		</tr>
	    </table>
	</td>
	<td align="right" valign="top"><a href="javascript:void(0)" onclick="HideContent('fshare');">{$up_opt5}</a></td>
    </tr>
</table>
<!-- END SEND VIDEO LINK TABLE -->
