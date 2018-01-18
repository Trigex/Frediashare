	<div id="gridview" {if $smarty.session.viewmode eq "grid"}style="display: block;"{else}style="display: none;"{/if}>
	<form name="gifilesel" method="post" action="">
	    <table cellpadding=0 cellspacing=0 border=0 align="center">
		<tr>
		    <td width="65%" valign=top>
			{if $imgs[0].vid ne ""}
                        <table cellpadding=9 cellspacing=0 border=0 align=center>
                            <tr>
                                <td align="left" width="1%"><input type="checkbox" id="gcheckall" name="gcheckall" value="0" onclick="if (this.checked == true) {ldelim} icheckAllmya(document.gifilesel['gmid[]']); ShowContent('actdiv2'); {rdelim} else if (this.checked == false) {ldelim} iuncheckAllmya(document.gifilesel['gmid[]']); HideContent('actdiv2'); {rdelim}"></td>
                                <td><a href="javascript:void(0)" onclick="if (document.getElementById('gcheckall').checked == false) {ldelim} document.getElementById('gcheckall').checked = true; icheckAllmya(document.gifilesel['gmid[]']); ShowContent('actdiv2'); {rdelim} else if (document.getElementById('gcheckall').checked == true) {ldelim} document.getElementById('gcheckall').checked = false; iuncheckAllmya(document.gifilesel['gmid[]']); HideContent('actdiv2'); {rdelim}">{$grid_txt1}</td>
                            </tr>
                        </table>
                        {/if}
			<table cellpadding=9 cellspacing=0 border=0 align=center>
			    <tr>
				{section name=i loop=$imgs}
                		    {if $smarty.section.i.index mod 4 eq "0" and $smarty.section.i.index gt "0"}</tr><tr>{/if}
                		    {insert name=vid_to_key_image assign=keyi vid=$imgs[i].vid}
                		    {insert name=titlei assign=title vkey=$keyi}
                		    <td valign="top" class="nbg">
                			<table cellpadding=0 cellspacing=1 border=0" width="100%">
                        		    <tr>
                            			<td>
                                		    <table cellpadding=1 cellspacing=0 border=0>
                                    			<tr>
                                        		    <td>
                                            			{include file="_inc/inc_gridi.tpl"}
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
			
			{if $imgs[0].vid ne "" and $sbtn eq "alli"}
			<table cellpadding=9 cellspacing=0 border=0 align=left width="100%">    
                            <tr>
                                <td colspan=2>{include file="_inc/inc_selectact4.tpl"}</td>
                            </tr>
			</table>
			{elseif $imgs[0].vid ne "" and $sbtn eq "adm_ireq"}
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
