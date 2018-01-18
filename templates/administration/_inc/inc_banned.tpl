	<form id="banform">
	    <table cellpadding="0" cellspacing="0" width="100%">
		<tr>
		    <td width="100%">
			<div id="msgopts" style="display: block;">
			    <table border="0" cellpadding="2" cellspacing="1" align="center" width="100%">
				<tr>
				    <td width="20%">{$adm_membanmsg1}</td>
				    <td width="40%"><input type="text" class="ff width350" name="def_msg" value="{$def_ban_msg|spchar}"></td>
				    <td width="5%"><input type="button" class="fb" name="savedefmsg" value="{$comm_save}" onclick="setdefmsg();"></td>
				    <td width="%"><div id="mresp"></div></td>
				</tr>
				<tr>
				    <td>{$adm_membanmsg2}</td>
				    <td><input type="text" class="ff width350" name="def_url" value="{$def_ban_link}"></td>
				    <td><input type="button" class="fb" name="savedeflink" value="{$comm_save}" onclick="setdefurl();"></td>
				    <td><div id="lresp"></div></td>
				</tr>
			    </table>
			</div>
		    </td>
		    <td width="10%" align="right" valign="top">
			<img id="opts" class="cursor" src="{$theme_url}/{$site_theme}/images/sign_minus.gif" width="10" height="10" alt="{$adm_membanimgalt}" title="{$adm_membanimgalt}" onclick="ReverseContentDisplay('msgopts');">
		    </td>
		</tr>
	    </table>
	</form><br>
	<form name="filesel" method="post" action="" id="filesel">
	    <table border="0" cellpadding="5" cellspacing="1" width="100%" align="center">
	    {if $total ne "0"}
                <tr>
                    <td class="th2" align="center" width="3%"><input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmya(document.filesel['mid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmya(document.filesel['mid[]']); HideContent('actdiv'); {rdelim}"></td>
                    <td class="th2" align="center" width="3%">{$adm_memth1}</td>
                    <td class="th2" width="20%">{$blocked_th1}</td>
                    <td class="th2" width="25%">{$adm_membanth1}</td>
                    <td class="th2" width="25%">{$adm_membanth2}</td>
                    <td class="th2" align="center" width="6%">{$adm_setadth4}</td>
                    <td class="th2" align="center" width="5%">{$blocked_th2}</td>
                </tr>
                {section name=i loop=$bu}
            	<tr class="nbg">
            	    <td width="3%" class="th1" align="center"><input type="checkbox" name="mid[]" value="{$bu[i].ban_uid}" onclick="ShowContent('actdiv')"></td>
            	    <td class="th1" align="center">{$bu[i].ban_uid}</td>
            	    <td class="th1">
            		<table cellpadding=0 cellspacing=0 width="100%">
            		    <tr>
            			<td align="left">{insert name=getfield assign=uip field=from_ip table=members qfield=uid qvalue=$bu[i].ban_uid}
            			    <a href="{$admin_url}/members/{$bu[i].ban_uid}">{$bu[i].ban_name}</a> ({$uip})
            			</td>
                            </tr>
                        </table>
            	    </td>
            	    <td class="th1">
            		<div id="showmsg{$bu[i].bid}" style="display: block;">{$bu[i].ban_msg|spchar}</div>
            		<div id="editmsg{$bu[i].bid}" style="display: none;">
            		    <div><input type="text" name="nmsg{$bu[i].bid}" class="ff" value="{$bu[i].ban_msg|spchar}" size="46"></div>
            		    <div class="pt2">
            			<table cellpadding=0 cellspacing=0 border=0>
            			    <tr>
            				<td><input type="button" name="smsg" class="fb" value="{$comm_save}" onclick="savedefmsg('{$bu[i].bid}');"></td>
            				<td class="pl5"><div id="editmsgresp{$bu[i].bid}"></div></td>
            			    </tr>
            			</table>
            		    </div>
            		</div>
            	    </td>
            	    <td class="th1">
            		<div id="showurl{$bu[i].bid}" style="display: block;">{$bu[i].ban_url}</div>
            		<div id="editurl{$bu[i].bid}" style="display: none;">
            		    <div><input type="text" name="nurl{$bu[i].bid}" class="ff" value="{$bu[i].ban_url}" size="24"></div>
            		    <div class="pt2">
            			<table cellpadding=0 cellspacing=0 border=0>
            			    <tr>
            				<td><input type="button" name="surl" class="fb" value="{$comm_save}" onclick="savedefurl('{$bu[i].bid}');"></td>
            				<td class="pl5"><div id="editurlresp{$bu[i].bid}"></div></td>
            			    </tr>
            			</table>
            		    </div>
            		</div>
            	    </td>
            	    <td class="th1" align="center">{if $bu[i].active eq "1"}{$adm_status_active}{else}{$adm_status_inactive}{/if}</td>
            	    <td width="25%" class="th1" align="center">
            		{if $bu[i].active eq "0"}<a href="javascript:void(0)" onclick="location.href='{$admin_url}/members/banned/ban/{$bu[i].ban_uid}'; return false;">{$adm_memact4}</a>{else}<a href="javascript:void(0)" onclick="location.href='{$admin_url}/members/banned/unban/{$bu[i].ban_uid}'; return false;">{$adm_memact5}</a>{/if}{$myfiles_delim}
            		<a href="javascript:void(0)" onclick="ReverseContentDisplay('showmsg{$bu[i].bid}'); ReverseContentDisplay('editmsg{$bu[i].bid}'); ReverseContentDisplay('showurl{$bu[i].bid}'); ReverseContentDisplay('editurl{$bu[i].bid}');">{$adm_memact6}</a>{$myfiles_delim}
            		<a href="javascript:void(0)" onclick="if(confirm('{$adm_membandelmsg}')) location.href='{$admin_url}/members/banned/delete/{$bu[i].ban_uid}'; return false;">{$adm_memact3}</a>
            	    </td>
            	</tr>
                {/section}
                <tr>
            	    <td colspan=6>{include file="_inc/inc_selectactions.tpl"}</td>
                </tr>
            {/if}
            </table>
	</form>
