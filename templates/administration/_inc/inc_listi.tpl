	<div id="listview" {if $smarty.session.viewmode eq "list"}style="display: block;"{else}style="display: none;"{/if}>
	    <form name="filesel" method="post" action="">
		<table cellpadding=0 cellspacing=0 border=0 width="100%">
		    <tr>
			<td width="65%" valign=top>
			    <table cellpadding=5 cellspacing=1 border=0 width="100%">
				{if $imgs[0].vid ne ""}
				<tr>                                                                                                                                                                                       
                    		    <td class="" align="center" width="3%"><input type="checkbox" id="checkall" name="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmya(document.filesel['mid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmya(document.filesel['mid[]']); HideContent('actdiv'); {rdelim}"></td>
                    		    <td class=""><a href="javascript:void(0)" onclick="if (document.getElementById('checkall').checked == false) {ldelim} document.getElementById('checkall').checked = true; checkAllmya(document.filesel['mid[]']); ShowContent('actdiv'); {rdelim} else if (document.getElementById('checkall').checked == true) {ldelim} document.getElementById('checkall').checked = false; uncheckAllmya(document.filesel['mid[]']); HideContent('actdiv'); {rdelim}">{$grid_txt1}</a></td>
                		</tr>
                		{/if}
                		{section name=i loop=$imgs}
                		<tr class="nbg">
                		    <td class="th1" align="center"><input type="checkbox" name="mid[]" value="{$imgs[i].vid}" onclick="ShowContent('actdiv')"></td>
                		    <td valign="top" class="th1" style="padding: 0px;">
                        		{insert name=vid_to_key_image assign=key vid=$imgs[i].vid}
                        		{insert name=titlei assign=title vkey=$key}
                        		{include file="_inc/inc_listi.tpl"}
                        		<input type="hidden" name="owuid" value="{$imgs[i].uid}">
                    		    </td>
                		</tr>
                		{/section}
                	    </table>
                	    
                	    {if $imgs[0].vid ne "" and $sbtn eq "alli"}
                	    <table cellpadding=9 cellspacing=0 border=0 align=left width="100%">
                		<tr>
                    		    <td>{include file="_inc/inc_selectact3.tpl"}</td>
                		</tr>
                	    </table>
                	    {elseif $imgs[0].vid ne "" and $sbtn eq "adm_ireq"}
                	    <table cellpadding=9 cellspacing=0 border=0 align=left width="100%">
                		<tr>
                    		    <td>{include file="_inc/inc_selectact5.tpl"}</td>
                		</tr>
                	    </table>
                	    {/if}
                	</td>
                    </tr>
                    <tr><td><table cellpadding=5 cellspacing=0 width="100%" border=0><tr><td class="pag_bg">{$link}</td></tr></table></td></tr>
		</table>
	    </form>
	</div>
