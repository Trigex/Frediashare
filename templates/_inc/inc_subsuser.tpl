
	    <div class="cursor">
                <div align="center">{if $site_theme eq "black"}<img src="{$img_url}/topcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/topcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
                <table border="0" cellpadding="0" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} width="{$thimgwidth}">
                    <tr>
                        {if $site_theme eq "black"}<td id="bgs" class="{if $smarty.session.menu_subsuser eq "none"}cbg2s-nb{else}cbg2s{/if}">{else}<td id="bgs" class="{if $smarty.session.menu_subsuser eq "none"}cbgs-nb{else}cbgs{/if}">{/if}
                            <table cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td valign="middle" class="pl5" width="11">
                                        <div id="cdownarr10" style="display: {if $smarty.session.menu_subsuser eq "block" or $smarty.session.menu_subsuser eq ""}block{else}none{/if};" class="pl2">
                                            <a href="javascript:void(0)" onclick="c_m10(); set_hpsess('menu_subsuser');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
                                        </div>
                                        <div id="cleftarr10" style="display: {if $smarty.session.menu_subsuser eq "none"}block{else}none{/if};" class="pl2">
                                            <a href="javascript:void(0)" onclick="c_m10(); set_hpsess('menu_subsuser');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
                                        </div>
                                    </td>
                                    <td>&nbsp;<a href="javascript:void(0)" onclick="c_m10(); set_hpsess('menu_subsuser');"><span id="mmh110" class="{if $smarty.session.menu_subsuser eq "none"}{else}act{/if}">{$mmenu_item8}</span></a></td>
                                </tr>
                            </table>
                            <div id="cspacer10" style="display: {$smarty.session.menu_subsuser};"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="mmenulist10" style="display: {$smarty.session.menu_subsuser};">
        	<table border="0" cellpadding="3" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} {if $site_theme eq "black"}id="cmit2"{else}id="cmit"{/if}>
        	{if $mysubs_user[0].subscribed_name ne ""}
        	{section name=s loop=$mysubs_user}
        	    <tr><td {if $smarty.section.s.index eq "0"}{if $site_theme eq "black"}class=""{else}class=""{/if}{else}{/if}><a href="{$base_url}/my_subscriptions/{$mysubs_user[s].subscribed_name}/{if $enable_videos eq "1"}videos{elseif $enable_images eq "1"}images{elseif $enable_audio eq "1"}audios{/if}"><span {if $smarty.request.user eq $mysubs_user[s].subscribed_name and ( $mysubs_user[s].stype eq "user" and ($smarty.request.ftype ne "video_favorites" and $smarty.request.ftype ne "image_favorites" and $smarty.request.ftype ne "audio_favorites")) and $smarty.request.pkey eq ""}class="act"{/if}>{$mysubs_user[s].subscribed_name}</span></a></td></tr>
        	{/section}
        	{else}
        	    <tr>{if $site_theme eq "black"}<td class="">{else}<td class="">{/if}{$plist_txt6}</td></tr>
        	{/if}
        	</table>
            </div>
            <div align="center" id="cbottom10" style="display: {if $smarty.session.menu_subsuser eq "none"}block{else}none{/if};">{if $site_theme eq "black"}<img src="{$img_url}/bottomcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/bottomcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
