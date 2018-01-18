
	    <div class="cursor">
                <div align="center">{if $site_theme eq "black"}<img src="{$img_url}/topcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/topcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
                <table border="0" cellpadding="0" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} width="{$thimgwidth}">
                    <tr>
                        {if $site_theme eq "black"}<td id="bgspl" class="{if $smarty.session.menu_subspl eq "none"}cbg2s-nb{else}cbg2s{/if}">{else}<td id="bgspl" class="{if $smarty.session.menu_subspl eq "none"}cbgs-nb{else}cbgs{/if}">{/if}
                            <table cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td valign="middle" class="pl5" width="11">
                                        <div id="cdownarr10pls" style="display: {if $smarty.session.menu_subspl eq "block" or $smarty.session.menu_subspl eq ""}block{else}none{/if};" class="pl2">
                                            <a href="javascript:void(0)" onclick="c_m10pls(); set_hpsess('menu_subspl');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
                                        </div>
                                        <div id="cleftarr10pls" style="display: {if $smarty.session.menu_subspl eq "none"}block{else}none{/if};" class="pl2">
                                            <a href="javascript:void(0)" onclick="c_m10pls(); set_hpsess('menu_subspl');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
                                        </div>
                                    </td>
                                    <td>&nbsp;<a href="javascript:void(0)" onclick="c_m10pls(); set_hpsess('menu_subspl');"><span id="mmh110pls" class="{if $smarty.session.menu_subspl eq "none"}{else}act{/if}">{$mmenu_item11}</span></a></td>
                                </tr>
                            </table>
                            <div id="cspacer10pls" style="display: {$smarty.session.menu_subspl};"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="mmenulist10pls" style="display: {$smarty.session.menu_subspl};">
        	<table border="0" cellpadding="3" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} {if $site_theme eq "black"}id="cmit2"{else}id="cmit"{/if}>
        	{if $mysubs_pl[0].subscribed_name ne ""}
        	{section name=s loop=$mysubs_pl}
        	    {insert name=get_pchar assign=pchar from=$mysubs_pl[s].stype}
        	    {insert name=get_pkey assign=pkey from=$mysubs_pl[s].stype}
        	    {insert name=getfield assign=plname field=pname table=$pchar qfield=vkey qvalue=$pkey}
        		<tr><td {if $smarty.section.s.index eq "0"}{if $site_theme eq "black"}class=""{else}class=""{/if}{else}{/if}><a href="{$base_url}/my_subscriptions/{$mysubs_pl[s].subscribed_name}/{if $pchar eq "playlist_video"}videos{elseif $pchar eq "playlist_image"}images{elseif $pchar eq "playlist_audio"}audios{/if}/pl/{$pkey}"><span class="{if $smarty.request.pkey eq $pkey}act{/if}">[{$plname}]</span></a></td></tr>
        	{/section}
        	{else}
        	    <tr>{if $site_theme eq "black"}<td class="">{else}<td class="">{/if}{$plist_txt6}</td></tr>
        	{/if}
        	</table>
            </div>
            <div align="center" id="cbottom10pls" style="display: {if $smarty.session.menu_subspl eq "none"}block{else}none{/if};">{if $site_theme eq "black"}<img src="{$img_url}/bottomcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/bottomcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
