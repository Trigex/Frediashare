
<!-- BEGIN ADMIN AREA MEMBERS TABLE -->
<br>
<table width="950" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
	<td class=""><h1>{$adm_memheading}</h1></td>
	<td class="" align="right">{if $total ne "0"}{$adm_memnr}[{$start_num}-{$end_num}]{$adm_memof}[{$total}]{/if}</td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="5" cellspacing="0" class="br1">
    <tr>
	<td class="p10" align="left">
	    <table cellpadding="0" cellspacing="0">
		<tr>
		    <td><a href="javascript:void(0)" onclick="ReverseSign('7'); ReverseContentDisplay('addnew');"><span id="memb7">{$adm_memnewacct}</span></a></td>
		    <td valign="bottom" style="padding-bottom: 1px;" class="pl5"><img id="img7" class="cursor" src="{$theme_url}/{$site_theme}/images/sign_plus.gif" width="10" height="10" alt="{$adm_memnewacct}" onclick="ReverseContentDisplay('addnew'); ReverseSign('7');"></td>
		</tr>
	    </table>
	</td>
	<td class="p10" align="right">{$adm_memtxt1}</td>
    </tr>
    <tr>
	<td colspan="2" class="nopad_borderbottom">
	    <script language="javascript" src="{$js_url}/ajaxresponder.js" type="text/javascript"></script>
	    <input type="hidden" name="ldivx" id="ldivx" value="">
	    <input type="hidden" name="thisDiv" id="thisDiv" value="">
	    <div id="addnew" style="display: none;">
		<form id="addmemform">
		    <table cellpadding="0" cellspacing="0" border=0>
			<tr>
			    <td align="left" class="pl10" valign="top">
				<table cellpadding=2 cellspacing=0 border=0>
				    <tr>
					<td width="125">{$signup_user}</td>
					<td align="left"><input type="text" name="reg_user" class="ff" size="25"></td> 
				    </tr>
				    <tr>
					<td>{$signup_pass}</td>
					<td align="left"><input type="password" name="reg_pass1" class="ff" size="25"></td>
				    </tr>
				    <tr>
					<td>{$signup_pass_confirm}</td>
					<td align="left"><input type="password" name="reg_pass2" class="ff" size="25"></td> 
				    </tr>
				    <tr>
					<td>{$adm_memnewmail}</td>
					<td align="left"><input type="text" name="reg_email" class="ff" size="25"></td>
				    </tr>
				</table>
				<table cellpadding=2 cellspacing=0 border=0>
                                    <tr>
                                        <td><input type="checkbox" name="sendemail"></td>
                                        <td class="pt3">{$adm_memnewsendmail}</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="activemember" checked></td>
                                        <td class="pt3">{$adm_memnewactivemem}</td>
                                    </tr>
                                </table>
				<table cellpadding="2" cellspacing="0" border=0>
				    <tr>
					<td><input type="button" class="fb" name="savebtn" value="{$adm_btnsave}" onclick="thisDiv('yes'); ldiv('saverespdiv'); addmember('new');"></td>
					<td><input type="button" class="fb" name="cancelbtn" value="{$adm_memcancelbtn}" onclick="ReverseContentDisplay('addnew'); ReverseSign('7');"></td>
				    </tr>
				</table>
				
				<table cellpadding="2" cellspacing="0" border=0 width="300">
				    <tr>
					<td align="left">
					    <div id="loading" style="display: none;">
						<table cellpadding=5 cellspacing=0 border=0>
						    <tr><td>{$adm_setgen79}</td><td>{$loading_gif}</td></tr>
						</table>
					    </div>
					    <div id="saverespdiv" style="display: block;"></div>
					</td>
				    </tr>
				</table>
			    </td>
			</tr>
		    </table>
		</form>
	    </div>
	</td>
    </tr>
    <tr>
	<td colspan="2" class="nopad_borderbottom p10">
	    <span class="gr">{$adm_memstxt1}</span>
	    <a href="{$admin_url}/members/registered"><span class="{if $smarty.get.mtype eq ""}act{/if}">{$ch_allchtxt}</span></a>{$myfiles_delim}
	    <a href="{$admin_url}/members/registered?mtype=m1"><span class="{if $smarty.get.mtype eq "m1"}act{/if}">{$pr_chinfotype1s}</span></a>{$myfiles_delim}
	    <a href="{$admin_url}/members/registered?mtype=m2"><span class="{if $smarty.get.mtype eq "m2"}act{/if}">{$pr_chinfotype2s}</span></a>{$myfiles_delim}
	    <a href="{$admin_url}/members/registered?mtype=m3"><span class="{if $smarty.get.mtype eq "m3"}act{/if}">{$pr_chinfotype3s}</span></a>{$myfiles_delim}
	    <a href="{$admin_url}/members/registered?mtype=m4"><span class="{if $smarty.get.mtype eq "m4"}act{/if}">{$pr_chinfotype4s}</span></a>{$myfiles_delim}
	    <a href="{$admin_url}/members/registered?mtype=m5"><span class="{if $smarty.get.mtype eq "m5"}act{/if}">{$pr_chinfotype5s}</span></a>{$myfiles_delim}
	    <a href="{$admin_url}/members/registered?mtype=m6"><span class="{if $smarty.get.mtype eq "m6"}act{/if}">{$pr_chinfotype6s}</span></a>
	</td>
    </tr>
    <tr>
	{include file="_inc/inc_searchfilters.tpl"}
    </tr>
    <tr>
	<td valign="top" colspan=2 class="p10">
	<form name="filesel" method="post" action="">
	    <table cellpadding=4 cellspacing=1 border=0 align=center class="cs1 rowstyle-alt no-arrow" id="stbl" width="100%">
		<tr>
		    {if $members[0].uid ne ""}<th class="th2" align="center" width="3%"><input type="checkbox" name="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmya(document.filesel['mid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmya(document.filesel['mid[]']); HideContent('actdiv'); {rdelim}"></td>{/if}
		    <th class="sortable-numeric" width="4%">{$adm_memth1}</th>
		    <th class="sortable-text">{$adm_memth2}</th>
		    {if $smarty.get.filter eq "most_subscribed"}<th class="sortable-numeric" width="11%">{$pr_chinfob28}</th>
		    {elseif $smarty.get.filter eq "most_viewed"}<th class="sortable-numeric" width="11%">{$adm_sortviews}</th>
		    {elseif $smarty.get.filter eq "last_login"}<th class="sortable-sortEnglishLonghandDateFormat" width="13%">{$adm_memth3}</th>
		    {elseif $smarty.get.filter eq "last_joined"}<th class="sortable-sortEnglishLonghandDateFormat" width="13%">{$myfr_th5}</th>
		    {elseif $smarty.get.filter eq "online" or $smarty.get.filter eq "offline"}<th class="sortable-text" width="10%">{$adm_memth5}
		    {else}
		    <th class="sortable-numeric" width="11%">{$adm_sortviews}</th>
		    {/if}
		    <th class="sortable-text">{$adm_memth4}</th>
		    <th class="sortable-text">{$adm_memupth}</th>
		    <th class="sortable-text">{$adm_memth51}</th>
		    <th class="sortable-numeric">{$adm_memth6}</th>
		    <th class="sortable-numeric">{$adm_memth7}</th>
		    <th class="sortable-numeric">{$adm_memth8}</th>
		    <th width="18%">{$adm_memth9}</th>
		    {if $country_flags eq "1"}<th class="sortable-sortImage">{$adm_memth10}</th>{/if}
		</tr>
		{section name=i loop=$members}
		<tr class="td">
		    {if $members[0].uid ne ""}<td class="th1" align="center"><input type="checkbox" name="mid[]" value="{$members[i].uid}" onclick="ShowContent('actdiv')"></td>{/if}
		    <td align=center>{$members[i].uid}</td>
		    <td align=center>
			<a class="info" href="{$admin_url}/members/{$members[i].uid}">{$members[i].username}
			<span>
			    <img src="{$usrimg_url}/{$members[i].photo}" width="{$avatar_width}" height="{$avatar_height}" alt="{$members[i].username}" class="{if $members[i].gender eq "M"}user_img{elseif $members[i].gender eq "F"}user_imgf{else}user_img{/if}">
			</span>
			</a>
		    </td>
		    {if $smarty.get.filter eq "most_subscribed"}<td align="center">{$members[i].ch_subs|viewnr}</td>
		    {elseif $smarty.get.filter eq "most_viewed"}<td align="center">{$members[i].ch_views|viewnr}</td>
		    {elseif $smarty.get.filter eq "last_login"}<td align=center>{$members[i].last_login|date_format:"%B %e, %Y"}</td>
		    {elseif $smarty.get.filter eq "last_joined"}<td align=center>{$members[i].reg_on|date_format:"%B %e, %Y"}</td>
		    {elseif $smarty.get.filter eq "online" or $smarty.get.filter eq "offline"}<td align=center>{if $members[i].is_logged eq "1"}{$adm_memyes}{else}{$adm_memno}{/if}</td>
		    {else}<td align="center">{$members[i].ch_views|viewnr}</td>
		    {/if}
		    <td align=center>{if $members[i].is_active eq "1"}<a href="{$admin_url}/members/{$members[i].uid}/disable">{$adm_memyes}</a>{else}<a href="{$admin_url}/members/{$members[i].uid}/enable">{$adm_memno}</a>{/if}</td>
		    <td align=center>{if $members[i].can_upload eq "1"}<a href="{$admin_url}/members/up0/{$members[i].uid}">{$adm_memyes}</a>{else}<a href="{$admin_url}/members/up1/{$members[i].uid}">{$adm_memno}</a>{/if}</td>
		    <td align=center>
			{insert name=getfield assign=isban field=active table=banned_users qfield=ban_uid qvalue=$members[i].uid}
			{if $isban eq "1"}<a href="{$admin_url}/members/unban/{$members[i].uid}">{$adm_memact5}</a>
			{else}<a href="{$admin_url}/members/ban/{$members[i].uid}">{$adm_memact4}</a>{/if}
		    </td>
		    <td align=center><a {if $members[i].files_audio gt "0"}href="{$admin_url}/audiou/{$members[i].uid}/all/all_time"{/if}>{$members[i].files_audio|viewnr}</a></td>
		    <td align=center><a {if $members[i].files_image gt "0"}href="{$admin_url}/imageu/{$members[i].uid}/all/all_time"{/if}>{$members[i].files_image|viewnr}</a></td>
		    <td align=center><a {if $members[i].files_video gt "0"}href="{$admin_url}/videou/{$members[i].uid}/all/all_time"{/if}>{$members[i].files_video|viewnr}</a></td>
		    <td align=center> 
			<a href="{$admin_url}/members/email/{$members[i].uid}">{$adm_memact1}</a>{if $enable_inbox eq "1"}{$myfiles_delim}<a href="{$admin_url}/members/message/{$members[i].uid}">{$adm_memact2}</a>{/if}{$myfiles_delim}<a href="javascript:void(0)" onclick="if(confirm('{$adm_memdelmsg}{$members[i].username} ?!')) location.href='{$admin_url}/members/delete/{$members[i].uid}'; return false;">{$adm_memact3}</a></td>
		    {if $country_flags eq "1"}
		    <td valign=middle align=center>
		    {if $members[i].from_country eq ""}{insert name=getcountrycode assign=ccode ip=$members[i].from_ip}{else}{insert name=getarrayccode assign=ccode country=$members[i].from_country|lower|capitalize}{/if}
			<img src="{$base_url}/media/files_flags/{$ccode|lower}.gif" width="16" height="11" alt="{$members[i].from_country}" title="{$members[i].from_country}">
		    </td>
		    {/if}
		</tr>
		{/section}
	    </table>
	    {if $members[0].uid ne ""}
	    <table cellpadding="5" cellspacing="0" align="left">
                <tr>
                    <td colspan=2>{include file="_inc/inc_selectactions.tpl"}</td>
                </tr>
	    </table>
	    {/if}
	</form>
	</td>
    </tr>
</table>
<table cellpadding=2 cellspacing=1 border=0 width="100%">
    <tr>
        <td class="pag_bg">{$link}</td>
    </tr>
</table>
<!-- END ADMIN AREA MEMBERS TABLE -->
