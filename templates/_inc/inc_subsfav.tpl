
	    <div class="cursor">
                <div align="center">{if $site_theme eq "black"}<img src="{$img_url}/topcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/topcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
                <table border="0" cellpadding="0" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} width="{$thimgwidth}">
                    <tr>
                        {if $site_theme eq "black"}<td id="bgsfav" class="{if $smarty.session.menu_subsfav eq "none"}cbg2s-nb{else}cbg2s{/if}">{else}<td id="bgsfav" class="{if $smarty.session.menu_subsfav eq "none"}cbgs-nb{else}cbgs{/if}">{/if}
                            <table cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td valign="middle" class="pl5" width="11">
                                        <div id="cdownarr10fav" style="display: {if $smarty.session.menu_subsfav eq "block" or $smarty.session.menu_subsfav eq ""}block{else}none{/if};" class="pl2">
                                            <a href="javascript:void(0)" onclick="c_m10fav(); set_hpsess('menu_subsfav');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
                                        </div>
                                        <div id="cleftarr10fav" style="display: {if $smarty.session.menu_subsfav eq "none"}block{else}none{/if};" class="pl2">
                                            <a href="javascript:void(0)" onclick="c_m10fav(); set_hpsess('menu_subsfav');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
                                        </div>
                                    </td>
                                    <td>&nbsp;<a href="javascript:void(0)" onclick="c_m10fav(); set_hpsess('menu_subsfav');"><span id="mmh110fav" class="{if $smarty.session.menu_subsfav eq "none"}{else}act{/if}">{$mmenu_item10}</span></a></td>
                                </tr>
                            </table>
                            <div id="cspacer10fav" style="display: {$smarty.session.menu_subsfav};"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="mmenulist10fav" style="display: {$smarty.session.menu_subsfav};">
        	<table border="0" cellpadding="3" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} {if $site_theme eq "black"}id="cmit2"{else}id="cmit"{/if}>
        	{if $mysubs_fav[0].subscribed_name ne ""}
        	{section name=s loop=$mysubs_fav}
        	    <tr><td {if $smarty.section.s.index eq "0"}{if $site_theme eq "black"}class=""{else}class=""{/if}{else}{/if}><a href="{$base_url}/my_subscriptions/{$mysubs_fav[s].subscribed_name}/{if $enable_videos eq "1"}video_favorites{elseif $enable_images eq "1"}image_favorites{elseif $enable_audio eq "1"}audio_favorites{/if}"><span class="{if ($smarty.request.ftype eq "audio_favorites" or $smarty.request.ftype eq "image_favorites" or $smarty.request.ftype eq "video_favorites") and $smarty.request.user eq $mysubs_fav[s].subscribed_name}act{/if}">{$mysubs_fav[s].subscribed_name}</span></a></td></tr>
        	{/section}
        	{else}
        	    <tr>{if $site_theme eq "black"}<td class="">{else}<td class="">{/if}{$plist_txt6}</td></tr>
        	{/if}
        	</table>
            </div>
            <div align="center" id="cbottom10fav" style="display: {if $smarty.session.menu_subsfav eq "none"}block{else}none{/if};">{if $site_theme eq "black"}<img src="{$img_url}/bottomcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/bottomcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
