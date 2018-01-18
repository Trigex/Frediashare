			<br>
			{if $tinfo[0].th_bgimage ne "none"}
                            <table border="0" width="960" cellpadding="0" cellspacing="0" class="brep" align="center">
                                <tr>
                                    <td align="center" class="p5"><a href="#brep" onclick="ReverseContentDisplay('reportbg'); ShowContent('respdiv2');">{$ch_reptxt1}</a> {$adm_memchreq5}</td>
                                </tr>
                                
                                <tr>
                                    <td align="center">
                                        <div id="reportbg" style="display: none; width: 450px;">
                                    	    {if $smarty.session.UID ne ""}
                                            <div class="p1">{$ch_reptxt3}</div>
                                            <form id="reportbg_form">
                                                <div><input type="hidden" name="rbguid" value="{$minfo[0].uid}"><input type="hidden" name="rbgfromuid" value="{if $smarty.session.UID eq ""}0{else}{$smarty.session.UID}{/if}"></div>
                                                <div class="pt4" align="center" style="padding-bottom: 4px;"><input type="button" value="{$up_btncontinue}" name="continuebgbtn" onclick="ShowContent('respdiv2'); thisDiv('yes'); ldiv('repbgdiv'); report_submit('bgimage'); location.href='#brep';">&nbsp;&nbsp;<input type="button" value="{$up_btncancel}" name="cancelbtn" onclick="HideContent('reportbg');"></div>
                                            </form>
                                            {else}
                                        	<div class="p5"><a href="{$base_url}/login?next=user/{$minfo[0].username}">{$snavlogin}</a> {$uch_shtxt8}</div>
                                            {/if}
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <div id="respdiv2" style="display: none;"></div>
                                        <div id="loading_bgrep" style="display: none;"><table cellpadding=5 cellspacing=0 border=0><tr><td>{$adm_setgen79}</td></tr></table></div>
                                    </td>
                                </tr>
                                
                            </table>
                            <table border="0" width="960" cellpadding="0" cellspacing="0" align="center">
                        	<tr>
                        	    <td><a id="brep"></a></td>
                        	</tr>
                            </table>
                        {/if}

	    <script language="javascript" src="{$js_url}/ajaxresponder.js" type="text/javascript"></script>
	    <input type="hidden" name="ldivx" id="ldivx" value="">
    	    <input type="hidden" name="thisDiv" id="thisDiv" value="">
	    <div style="clear: both;"></div>
	    <script type="text/javascript"> set_bb_transpmaintbl({$tinfo[0].th_transp-50}); </script>
	    {insert name=pmsg_count_new assign=total_msg}
	    {if $total_msg gt 0}<script type="text/javascript">blinkId('newmsgicon'); blinkId('newmsgnr');</script>{/if}
    </body>
</html>