<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
	<td>
	    <div align="center">{if $site_theme eq "black"}<img src="{$img_url}/topcorners_hpr2.gif" width="300" height="6" alt="">{else}<img src="{$img_url}/topcorners_hpr1.gif" width="300" height="6" alt="">{/if}</div>
                <table border="0" cellpadding="0" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} width="300">
                    <tr>
                        {if $site_theme eq "black"}<td id="bgshp7" class="{if $smarty.session.hpustat eq "none"}cbg2s-nb{else}cbg2s{/if}">{else}<td id="bgshp7" class="{if $smarty.session.hpustat eq "none"}cbgs-nb{else}cbgs{/if}">{/if}
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td valign="middle" class="pl5" width="18">
                                        <div id="cdownarrhp7" style="display: {if $smarty.session.hpustat eq "block" or $smarty.session.hpustat eq ""}block{else}none{/if};" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp7(); set_hpsess('ustat');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
                                        </div>
                                        <div id="cleftarrhp7" style="display: {if $smarty.session.hpustat eq "none"}block{else}none{/if};" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp7(); set_hpsess('ustat');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
                                        </div>
                                    </td>
                                    <td valign="middle" class="pl5" align="left"><a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp7(); set_hpsess('ustat');"><span id="mmh1hp7" class="{if $smarty.session.hpustat eq "none"}{else}act{/if}"><span class="mh2">{$plist_txt78}</span></span></a></td>
                                </tr>
                            </table>
                            <div id="cspacerhp7" style="display: {$smarty.session.hpustat};"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
                        </td>
                    </tr>
                </table>
            </div>
	</td>
    </tr>
</table>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="0" class="">
    <tr> 
	<td class="">
	    <div id="mmenulisthp7" {if $site_theme eq "black"}class="hpbrdnotop2"{else}class="hpbrdnotop"{/if} style="display: {$smarty.session.hpustat};">
		<table width="90%" align="center" cellpadding="5" cellspacing="0" border="0">
		    <tr>
			<td class="{if $site_theme eq "black"}cbg2snbg{else}cbgsnbg{/if}">
			    <table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr>
				    <td width="25"><img src="{$img_url}/user.gif" alt=""></td>
				    <td><span class="normal">{$mems7}</span> <span class="bold">{$tg3|viewnr}</span></td>
				    <td align="right"><span class="f10">{$hpbox_statna}</span></td>
				</tr>
			    </table>
			</td>
		    </tr>
		    <tr>
			<td class="{if $site_theme eq "black"}cbg2snbg{else}cbgsnbg{/if}">
			    <table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr>
				    <td width="25"><img src="{$img_url}/user.gif" alt=""></td>
				    <td><span class="normal">{$mems6}</span> <span class="bold">{$tg1|viewnr}</span></td>
				    <td align="right"><span class="f10">{if $members_section eq "1"}<a href="{$base_url}/members"><span class="f10">{$plist_txt76}</span></a>{else}{$hpbox_statna|lower}{/if}</span></td>
				</tr>
			    </table>
			</td>
		    </tr>
		    <tr>
			<td class="{if $site_theme eq "black"}cbg2snbg{else}cbgsnbg{/if}">
			    <table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr>
				    <td width="25"><img src="{$img_url}/user.gif" alt=""></td>
				    <td><span class="normal">{$mems8}</span> <span class="bold">{$tg2|viewnr}</span></td>
				    <td align="right"><span class="f10">{if $members_section eq "1"}<a href="{$base_url}/members/online"><span class="f10">{$plist_txt76}</span></a>{else}{$hpbox_statna|lower}{/if}</span></td>
				</tr>
			    </table>
			</td>
		    </tr>
		    {if $smarty.session.UID ne ""}
		    <tr>
			<td class="{if $site_theme eq "black"}cbg2snbg{else}cbgsnbg{/if}">
			    <table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr>
				    <td width="25"><img src="{$img_url}/user.gif" alt=""></td>
				    <td><span class="normal">{$mems10}</span> <span class="bold">{$blnr|viewnr}</span></td>
				    <td align="right"><span class="f10">{if $enable_inbox eq "1" and $msg_block eq "1"}<a href="{$base_url}/blocked_users"><span class="f10">{$plist_txt76}</span></a>{else}{$hpbox_statna|lower}{/if}</span></td>
				</tr>
			    </table>
			</td>
		    </tr>
		    {/if}
		    <tr>
			<td class="{if $last_users eq "1"}{if $site_theme eq "black"}cbg2snbg{else}cbgsnbg{/if}{else}{/if}">
			    <table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr>
				    <td width="25"><img src="{$img_url}/user.gif" alt=""></td>
				    <td><span class="normal">{$mems9}</span> <span class="bold">{$banr|viewnr}</span></td>
				    <td align="right"><span class="f10">{$hpbox_statna}</span></td>
				</tr>
			    </table>
			</td>
		    </tr>
		    {if $last_users eq "1"}
		    <tr>
			<td class=""><br>
			    {if $last_users eq "1" and ($users_online eq "1" or $users_last eq "1")}{include file="last_users_table.tpl"}{/if}
			</td>
		    </tr>
		    {/if}
		</table>
	    </div>
	    <div align="center" id="cbottomhp7" style="display: {if $smarty.session.hpustat eq "none"}block{else}none{/if};">{if $site_theme eq "black"}<img src="{$img_url}/bottomcorners_hpr2.gif" width="300" height="6" alt="">{else}<img src="{$img_url}/bottomcorners_hpr1.gif" width="300" height="6" alt="">{/if}</div>
	</td>
    </tr>
</table>
