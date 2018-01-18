	<div id="gridview" {if $smarty.session.viewmode eq "grid"}style="display: block;"{else}style="display: none;"{/if}>
	<form name="gafilesel" method="post" action="">
	    <table cellpadding=0 cellspacing=0 border=0 align="center">
		<tr>
		    <td width="65%" valign=top>
			{if $auds[0].vid ne ""}
			<table cellpadding=9 cellspacing=0 border=0 align=center>
                	    <tr>
                    		<td align="left" width="1%"><input type="checkbox" id="gcheckall" name="gcheckall" value="0" onclick="if (this.checked == true) {ldelim} acheckAllmya(document.gafilesel['gmid[]']); ShowContent('actdiv2'); {rdelim} else if (this.checked == false) {ldelim} auncheckAllmya(document.gafilesel['gmid[]']); HideContent('actdiv2'); {rdelim}"></td>
                    		<td><a href="javascript:void(0)" onclick="if (document.getElementById('gcheckall').checked == false) {ldelim} document.getElementById('gcheckall').checked = true; acheckAllmya(document.gafilesel['gmid[]']); ShowContent('actdiv2'); {rdelim} else if (document.getElementById('gcheckall').checked == true) {ldelim} document.getElementById('gcheckall').checked = false; auncheckAllmya(document.gafilesel['gmid[]']); HideContent('actdiv2'); {rdelim}">{$grid_txt1}</td>
                	    </tr>
                	</table>
                	{/if}
                	<table cellpadding=9 cellspacing=0 border=0 align=center> 
			    <tr>
				{section name=i loop=$auds}
                		    {if $smarty.section.i.index mod 4 eq "0" and $smarty.section.i.index gt "0"}</tr><tr>{/if}
                		    {insert name=vid_to_key_audio assign=keya vid=$auds[i].vid}
                		    {insert name=titlea assign=title vkey=$keya}
                		    <td valign="top" class="nbg" colspan="2">
                			<table cellpadding=0 cellspacing=1 border=0" width="100%">
                        		    <tr>
                            			<td>
                                		    <table cellpadding=1 cellspacing=0 border=0>
                                    			<tr>
                                        		    <td>
                                            			{include file="_inc/inc_grida.tpl"}
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
			
			{if $auds[0].vid ne "" and $sbtn eq "alla"}
			<table cellpadding=9 cellspacing=0 border=0 align=left width="100%">
                            <tr>
                                <td>{include file="_inc/inc_selectact4.tpl"}</td>
                            </tr>
                        </table>
                        {elseif $auds[0].vid ne "" and $sbtn eq "adm_areq"}
			<table cellpadding=9 cellspacing=0 border=0 align=left width="100%">
                            <tr>
                                <td>{include file="_inc/inc_selectact6.tpl"}</td>
                            </tr>
                        </table>
                        {/if}
		    </td>
		</tr>
		<tr><td><table cellpadding=5 cellspacing=0 width="100%" border=0 align="left"><tr><td class="pag_bg">{$link}</td></tr></table></td></tr>
	    </table>
	</form>
	</div>
