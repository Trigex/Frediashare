<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
	<td>
	    <div align="center">{if $site_theme eq "black"}<img src="{$img_url}/topcorners_hpr2.gif" width="300" height="6" alt="">{else}<img src="{$img_url}/topcorners_hpr1.gif" width="300" height="6" alt="">{/if}</div>
                <table border="0" cellpadding="0" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} width="300">
                    <tr>
                        {if $site_theme eq "black"}<td id="bgshp6" class="{if $smarty.session.hpabout eq "none"}cbg2s-nb{else}cbg2s{/if}">{else}<td id="bgshp6" class="{if $smarty.session.hpabout eq "none"}cbgs-nb{else}cbgs{/if}">{/if}
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td valign="middle" class="pl5" width="18">
                                        <div id="cdownarrhp6" style="display: {if $smarty.session.hpabout eq "block" or $smarty.session.hpabout eq ""}block{else}none{/if};" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp6(); set_hpsess('about');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
                                        </div>
                                        <div id="cleftarrhp6" style="display: {if $smarty.session.hpabout eq "none"}block{else}none{/if};" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp6(); set_hpsess('about');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
                                        </div>
                                    </td>
                                    <td valign="middle" class="pl5" align="left"><a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp6(); set_hpsess('about');"><span id="mmh1hp6" class="{if $smarty.session.hpabout eq "none"}{else}act{/if}"><span class="mh2">{$plist_txt77}</span></span></a></td>
                                </tr>
                            </table>
                            <div id="cspacerhp6" style="display: {$smarty.session.hpabout};"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
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
	    <div id="mmenulisthp6" {if $site_theme eq "black"}class="hpbrdnotop2"{else}class="hpbrdnotop"{/if} style="display: {$smarty.session.hpabout};">
		<table width="90%" align="center" cellpadding="5" cellspacing="0" border="0">
                    <tr>
                        <td class="{if $site_theme eq "black"}cbg2snbg{else}cbgsnbg{/if}">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td width="25"><img src="{$img_url}/view.gif" alt=""></td>
                                    <td><span class="normal">{if $enable_channels eq "1"}{$uch_txt8}{else}{$hpbox_mypv}{/if}</span>{insert name=getfield assign=chview field=ch_views table=members qfield=uid qvalue=$smarty.session.UID}<span class="bold">{$chview|viewnr}</span></td>
                                    <td align="right"><span class="f10">{$hpbox_statna}</span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="{if $site_theme eq "black"}cbg2snbg{else}cbgsnbg{/if}">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td width="25"><img src="{$img_url}/favorite.gif" alt=""></td>
                                    <td><span class="normal">{$user_favorites}</span>{insert name=fav_count assign=favcount uid=$smarty.session.UID}<span class="bold">{$favcount|viewnr}</span></td>
                                    <td align="right"><span class="f10"><a href="{$base_url}/my_favorites"><span class="f10">{$plist_txt76}</span></a></span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="{if $site_theme eq "black"}cbg2snbg{else}cbgsnbg{/if}">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td width="25"><img src="{$img_url}/user.gif" alt=""></td>
                                    <td><span class="normal">{$user_friends}</span>{insert name=friend_count assign=frcount uid=$smarty.session.UID}<span class="bold">{$frcount|viewnr}</span></td>
                                    <td align="right"><span class="f10"><a href="{$base_url}/my_friends"><span class="f10">{$plist_txt76}</span></a></span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    {if $enable_channels eq "1"}
                    <tr>
                        <td class="{if $site_theme eq "black"}cbg2snbg{else}cbgsnbg{/if}">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td width="25"><img src="{$img_url}/user.gif" alt=""></td>
                                    <td><span class="normal">{$pr_chinfob28}: </span>{insert name=subs_count assign=subscount uid=$smarty.session.UID}<span class="bold">{$subscount|viewnr}</span></td>
                                    <td align="right"><span class="f10"><a href="{$base_url}/my_subscribers"><span class="f10">{$plist_txt76}</span></a></span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="{if $site_theme eq "black"}cbg2snbg{else}cbgsnbg{/if}">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td width="25"><img src="{$img_url}/subscribe.gif" alt=""></td>
                                    <td><span class="normal">{$pr_chinfop56}: </span>{insert name=subs_count_own assign=subscountown uid=$smarty.session.UID}<span class="bold">{$subscountown|viewnr}</span></td>
                                    <td align="right"><span class="f10"><a href="{$base_url}/my_subscriptions"><span class="f10">{$plist_txt76}</span></a></span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    {/if}
                    {if $enable_videos eq "1"}
                    <tr>
                        <td class="{if $site_theme eq "black"}cbg2snbg{else}cbgsnbg{/if}">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td width="25"><img src="{$img_url}/upload.gif" alt=""></td>
                                    <td><span class="normal">{$adm_setgen23} </span>{insert name=video_count assign=vcount uid=$smarty.session.UID}<span class="bold">{$vcount|viewnr}</span></td>
                                    <td align="right"><span class="f10"><a href="{$base_url}/my_videos"><span class="f10">{$plist_txt76}</span></a></span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    {/if}
                    {if $enable_images eq "1"}
                    <tr>
                        <td class="{if $site_theme eq "black"}cbg2snbg{else}cbgsnbg{/if}">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td width="25"><img src="{$img_url}/upload.gif" alt=""></td>
                                    <td><span class="normal">{$adm_setgen22} </span>{insert name=image_count assign=icount uid=$smarty.session.UID}<span class="bold">{$icount|viewnr}</span></td>
                                    <td align="right"><span class="f10"><a href="{$base_url}/my_images"><span class="f10">{$plist_txt76}</span></a></span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    {/if}
                    {if $enable_audio eq "1"}
                    <tr>
                        <td class="{if $site_theme eq "black"}cbg2snbg{else}cbgsnbg{/if}">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td width="25"><img src="{$img_url}/upload.gif" alt=""></td>
                                    <td><span class="normal">{$adm_setgen21} </span>{insert name=audio_count assign=acount uid=$smarty.session.UID}<span class="bold">{$acount|viewnr}</span></td>
                                    <td align="right"><span class="f10"><a href="{$base_url}/my_audios"><span class="f10">{$plist_txt76}</span></a></span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    {/if}
                    <tr>
                        <td class="">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td width="25"></td>
                                    <td><span class="normal">{$memyouhaveused} </span><span class="bold">{$mspace}</span></td>
                                    <td align="right"><span class="f10">{$hpbox_statna}</span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
		</table>
	    </div>
	    <div align="center" id="cbottomhp6" style="display: {if $smarty.session.hpabout eq "none"}block{else}none{/if};">{if $site_theme eq "black"}<img src="{$img_url}/bottomcorners_hpr2.gif" width="300" height="6" alt="">{else}<img src="{$img_url}/bottomcorners_hpr1.gif" width="300" height="6" alt="">{/if}</div>
	</td>
    </tr>
</table>
