<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
	<td>
	    <div align="center">{if $site_theme eq "black"}<img src="{$img_url}/topcorners_hpr2.gif" width="300" height="6" alt="">{else}<img src="{$img_url}/topcorners_hpr1.gif" width="300" height="6" alt="">{/if}</div>
                <table border="0" cellpadding="0" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} width="300">
                    <tr>
                        {if $site_theme eq "black"}<td id="bgshp5" class="{if $smarty.session.hpinbox eq "none"}cbg2s-nb{else}cbg2s{/if}">{else}<td id="bgshp5" class="{if $smarty.session.hpinbox eq "none"}cbgs-nb{else}cbgs{/if}">{/if}
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td valign="middle" class="pl5" width="18">
                                        <div id="cdownarrhp5" style="display: {if $smarty.session.hpinbox eq "block" or $smarty.session.hpinbox eq ""}block{else}none{/if};" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp5(); set_hpsess('inbox');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
                                        </div>
                                        <div id="cleftarrhp5" style="display: {if $smarty.session.hpinbox eq "none"}block{else}none{/if};" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp5(); set_hpsess('inbox');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
                                        </div>
                                    </td>
                                    <td valign="middle" class="pl5" align="left"><a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp5(); set_hpsess('inbox');"><span id="mmh1hp5" class="{if $smarty.session.hpinbox eq "none"}{else}act{/if}"><span class="mh2">{$msginbox}</span></span></a></td>
                                </tr>
                            </table>
                            <div id="cspacerhp5" style="display: {$smarty.session.hpinbox};"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
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
	    <div id="mmenulisthp5" {if $site_theme eq "black"}class="hpbrdnotop2"{else}class="hpbrdnotop"{/if} style="display: {$smarty.session.hpinbox};">
		<table width="90%" align="center" cellpadding="5" cellspacing="0" border="0">
                    <tr>
                        <td class="{if $site_theme eq "black"}cbg2snbg{else}cbgsnbg{/if}">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                            	    <td width="25"><img src="{$img_url}/message.gif" alt=""></td>
                                    <td class="pt2"><span class="normal">{$hpbox_inbpm}</span> {insert name=pmsg_count_all assign=pmsg}<span class="bold">{$pmsg|viewnr}</span></td>
                                    <td align="right" class="f10"><span class="f10">{if $enable_inbox eq "1"}<a href="{$base_url}/inbox"><span class="f10">{$plist_txt76}</span></a>{else}{$hpbox_statna|lower}{/if}</span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="{if $site_theme eq "black"}cbg2snbg{else}cbgsnbg{/if}">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                            	    <td width="25"><img src="{$img_url}/comment.gif" alt=""></td>
                                    <td><span class="normal">{if $enable_channels eq "1"}{$hpbox_inbch}{else}{$adm_setgen143}{/if}</span>{insert name=count_pmsg assign=chmsg} <span class="bold">{$chmsg|viewnr}</span></td>
                                    <td align="right"><span class="f10">{if $profile_comments eq "1"}<a href="{$base_url}/my_comments/profile"><span class="f10">{$plist_txt76}</span></a>{else}{$hpbox_statna|lower}{/if}</span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    {if $enable_videos eq "1"}
                    <tr>
                        <td class="{if $site_theme eq "black"}cbg2snbg{else}cbgsnbg{/if}">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                            	    <td width="25"><img src="{$img_url}/comment.gif" alt=""></td>
                                    <td><span class="normal">{$hpbox_inbvi}</span>{insert name=count_vcomm assign=vcomm} <span class="bold">{$vcomm|viewnr}</span></td>
                                    <td align="right"><span class="f10">{if $file_comments eq "1"}<a href="{$base_url}/my_comments/video"><span class="f10">{$plist_txt76}</span></a>{else}{$hpbox_statna}{/if}</span></td>
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
                            	    <td width="25"><img src="{$img_url}/response.gif" alt=""></td>
                                    <td><span class="normal">{$fresp_txt1}: </span>{insert name=count_vresp assign=vresp} <span class="bold">{$vresp|viewnr}</span></td>
                                    <td align="right"><span class="f10">{if $file_responses eq "1"}<a href="{$base_url}/responses/video"><span class="f10">{$plist_txt76}</span></a>{else}{$hpbox_statna}{/if}</span></td>
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
                            	    <td width="25"><img src="{$img_url}/comment.gif" alt=""></td>
                                    <td><span class="normal">{$hpbox_inbii}</span>{insert name=count_icomm assign=icomm} <span class="bold">{$icomm|viewnr}</span></td>
                                    <td align="right"><span class="f10">{if $file_comments eq "1"}<a href="{$base_url}/my_comments/image"><span class="f10">{$plist_txt76}</span></a>{else}{$hpbox_statna}{/if}</span></td>
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
                            	    <td width="25"><img src="{$img_url}/response.gif" alt=""></td>
                                    <td><span class="normal">{$fresp_txt2}: </span>{insert name=count_iresp assign=iresp} <span class="bold">{$iresp|viewnr}</span></td>
                                    <td align="right"><span class="f10">{if $file_responses eq "1"}<a href="{$base_url}/responses/image"><span class="f10">{$plist_txt76}</span></a>{else}{$hpbox_statna}{/if}</span></td>
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
                            	    <td width="25"><img src="{$img_url}/comment.gif" alt=""></td>
                                    <td><span class="normal">{$hpbox_inbai}</span>{insert name=count_acomm assign=acomm} <span class="bold">{$acomm|viewnr}</span></td>
                                    <td align="right"><span class="f10">{if $file_comments eq "1"}<a href="{$base_url}/my_comments/audio"><span class="f10">{$plist_txt76}</span></a>{else}{$hpbox_statna}{/if}</span></td>
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
                            	    <td width="25"><img src="{$img_url}/response.gif" alt=""></td>
                                    <td><span class="normal">{$fresp_txt3}: </span>{insert name=count_aresp assign=aresp} <span class="bold">{$aresp|viewnr}</span></td>
                                    <td align="right"><span class="f10">{if $file_responses eq "1"}<a href="{$base_url}/responses/audio"><span class="f10">{$plist_txt76}</span></a>{else}{$hpbox_statna}{/if}</span></td>
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
                                    <td></td>
                                    <td align="right"><span class="f10">{if $enable_inbox eq "1"}<a href="{$base_url}/compose"><span class="f10">{$uch_txt17|lower}</span></a>{else}{$hpbox_statna}{/if}</span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
		</table>
	    </div>
	    <div align="center" id="cbottomhp5" style="display: {if $smarty.session.hpinbox eq "none"}block{else}none{/if};">{if $site_theme eq "black"}<img src="{$img_url}/bottomcorners_hpr2.gif" width="300" height="6" alt="">{else}<img src="{$img_url}/bottomcorners_hpr1.gif" width="300" height="6" alt="">{/if}</div>
	</td>
    </tr>
</table>
