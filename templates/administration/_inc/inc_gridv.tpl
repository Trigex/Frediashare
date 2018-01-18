	<div id="gridview" {if $smarty.session.viewmode eq "grid"}style="display: block;"{else}style="display: none;"{/if}>
	<form name="gvfilesel" method="post" action="">
	    <table cellpadding=0 cellspacing=0 border=0 align="center">
		<tr>
		    <td width="65%" valign=top>
			{if $vids[0].vid ne ""}
                        <table cellpadding=9 cellspacing=0 border=0 align=center>
                            <tr>
                                <td align="left" width="1%"><input type="checkbox" id="gcheckall" name="gcheckall" value="0" onclick="if (this.checked == true) {ldelim} vcheckAllmya(document.gvfilesel['gmid[]']); ShowContent('actdiv2'); {rdelim} else if (this.checked == false) {ldelim} vuncheckAllmya(document.gvfilesel['gmid[]']); HideContent('actdiv2'); {rdelim}"></td>
                                <td><a href="javascript:void(0)" onclick="if (document.getElementById('gcheckall').checked == false) {ldelim} document.getElementById('gcheckall').checked = true; vcheckAllmya(document.gvfilesel['gmid[]']); ShowContent('actdiv2'); {rdelim} else if (document.getElementById('gcheckall').checked == true) {ldelim} document.getElementById('gcheckall').checked = false; vuncheckAllmya(document.gvfilesel['gmid[]']); HideContent('actdiv2'); {rdelim}">{$grid_txt1}</td>
                            </tr>
                        </table>
                        {/if}
			<table cellpadding=9 cellspacing=0 border=0 align=center>
			    <tr>
				{section name=i loop=$vids}
                		    {if $smarty.section.i.index mod 4 eq "0" and $smarty.section.i.index gt "0"}</tr><tr>{/if}
                		    {insert name=vid_to_key assign=keyv vid=$vids[i].vid}
                		    {insert name=titlev assign=title vkey=$keyv}
                		    <td valign="top" class="nbg">
                			<table cellpadding=0 cellspacing=1 border=0" width="100%">
                        		    <tr>
                            			<td>
                                		    <table cellpadding=1 cellspacing=0 border=0>
                                    			<tr>
                                        		    <td>
                                            			{include file="_inc/inc_gridv.tpl"}
                                        		    </td>
                                    			</tr>
                                		    </table>
                            			</td>
                        		    </tr>
                    			</table>
                		    </td>
                		{/section}
			    </tr>
			</table>
			
			{if $vids[0].vid ne "" and $sbtn eq "allv"}
			<table cellpadding=9 cellspacing=0 border=0 align=left width="100%">
                            <tr>
                                <td colspan=2>{include file="_inc/inc_selectact4.tpl"}</td>
                            </tr>
			</table>
			{elseif $vids[0].vid ne "" and $sbtn eq "adm_vreq"}
			<table cellpadding=9 cellspacing=0 border=0 align=left width="100%">
                            <tr>
                                <td colspan=2>{include file="_inc/inc_selectact6.tpl"}</td>
                            </tr>
			</table>
			{/if}
		    </td>
		</tr>
		<tr><td><table cellpadding=5 cellspacing=0 width="100%" border=0 align="left"><tr><td class="pag_bg">{$link}</td></tr></table></td></tr>
	    </table>
	</form>
	</div>
