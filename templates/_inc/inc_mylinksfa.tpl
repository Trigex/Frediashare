    {if $sbtn eq "mpl2"}
    <tr>
	<td class="nopad">
        <form name="apladdform" method="post" action="{$base_url}/my_playlists/audio">
            <div class="p5" align="left" style="padding-top: 0px;"><a href="javascript:void(0)" onclick="ReverseContentDisplay('newapl'); setclass_act2('aplink');"><span id="aplink" {if $smarty.request.setapl ne ""}class="act"{/if}>{$plist_txt5}</span></a></div>
            <div id="newapl" style="{if $smarty.request.setapl eq ""}display: none;{else}display: block;{/if}" class="p5" align="left">
                <div>{$plist_txt8}</div>
                <div><input type="text" class="ff" name="aplname" size="15" value="{if $smarty.request.aplname ne "" and $msg eq ""}{$smarty.request.aplname|spchar}{/if}"></div>
                <div class="p2"><input type="submit" name="setapl" value="{$plist_txt9}" class="fb">{$plist_txt10}<a href="javascript:void(0)" onclick="HideContent('newapl'); setclass_act2('aplink');">{$comm_cancel}</a></div>
            </div>
        </form>
            <br>
        </td>
    </tr>
    <tr>
	<td class="nopad">
	    <div class="cursor">
                <div align="center">{if $site_theme eq "black"}<img src="{$img_url}/topcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/topcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
                <table border="0" cellpadding="0" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} width="{$thimgwidth}">
                    <tr>
                        {if $site_theme eq "black"}<td class="cbg2">{else}<td class="cbg">{/if}
                            <table cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td valign="middle" class="pl5" width="11">
                                        <div id="cdownarr10pl" style="display: {if $smarty.session.menu_apl eq "block" or $smarty.session.menu_apl eq ""}block{else}none{/if};" class="pl2">
                                            <a href="javascript:void(0)" onclick="c_m10pl(); set_hpsess('menu_apl');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
                                        </div>
                                        <div id="cleftarr10pl" style="display: {if $smarty.session.menu_apl eq "none"}block{else}none{/if};" class="pl2">
                                            <a href="javascript:void(0)" onclick="c_m10pl(); set_hpsess('menu_apl');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
                                        </div>
                                    </td>
                                    <td>&nbsp;<a href="javascript:void(0)" onclick="c_m10pl(); set_hpsess('menu_apl');"><span id="mmh110pl" class="{if $smarty.session.menu_apl eq "none"}{else}act{/if}">&nbsp;{$adm_reqaudio}{$plist_txt7}</span></a></td>
                                </tr>
                            </table>
                            <div id="cspacer10pl" style="display: {$smarty.session.menu_apl};"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="mmenulist10pl" style="display: {$smarty.session.menu_apl};">
        	<table border="0" cellpadding="3" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} {if $site_theme eq "black"}id="cmit2"{else}id="cmit"{/if}>
        	{if $pauds[0].uid ne ""}
        	{section name=s loop=$pauds}
        	    {if $smarty.section.s.index eq "0"}<tr>{if $site_theme eq "black"}<td class="cbg-bt2" style="padding-left: 10px;">{else}<td class="cbg-bt" style="padding-left: 10px;">{/if}<a href="{$base_url}/my_playlists/audio/{$pauds[s].vkey}"><span {if $smarty.request.aplkey eq $pauds[s].vkey}class="act"{/if}>{$pauds[s].pname|spchar}</span></a>{if $pauds[s].privacy eq "private"}<span class="red">{$plist_txt66}</span>{/if}</td></tr>
        	    {else}
        	    <tr><td style="padding-left: 10px;"><a href="{$base_url}/my_playlists/audio/{$pauds[s].vkey}"><span {if $smarty.request.aplkey eq $pauds[s].vkey}class="act"{/if}>{$pauds[s].pname|spchar}</span></a>{if $pauds[s].privacy eq "private"}<span class="red">{$plist_txt66}</span>{/if}</td></tr>
        	    {/if}
        	{/section}
        	{else}
        	    <tr>{if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}{$plist_txt6}</td></tr>
        	{/if}
        	    <tr><td>{$plist_txt67}</td></tr>
        	</table>
            </div>
            <div align="center" id="cbottom10pl" style="display: {if $smarty.session.menu_apl eq "none"}block{else}none{/if};">{if $site_theme eq "black"}<img src="{$img_url}/bottomcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/bottomcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
	</td>
    </tr>
    <tr><td class="nopad"><br></td></tr>
    {/if}
    <tr>
	<td class="nopad">
	    <div class="cursor">
                <div align="center">{if $site_theme eq "black"}<img src="{$img_url}/topcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/topcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
                <table border="0" cellpadding="0" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} width="{$thimgwidth}">
                    <tr>
                        {if $site_theme eq "black"}<td class="cbg2">{else}<td class="cbg">{/if}
                            <table cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td valign="middle" class="pl5" width="11">
                                        <div id="cdownarr4a" style="display: {if $smarty.session.menu_myacct eq "block" or $smarty.session.menu_myacct eq ""}block{else}none{/if};" class="pl2">
                                            <a href="javascript:void(0)" onclick="c_m4a(); set_hpsess('menu_myacct');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
                                        </div>
                                        <div id="cleftarr4a" style="display: {if $smarty.session.menu_myacct eq "none"}block{else}none{/if};" class="pl2">
                                            <a href="javascript:void(0)" onclick="c_m4a(); set_hpsess('menu_myacct');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
                                        </div>
                                    </td>
                                    <td>&nbsp;<a href="javascript:void(0)" onclick="c_m4a(); set_hpsess('menu_myacct');"><span id="mmh14a" class="{if $smarty.session.menu_myacct eq "none"}{else}act{/if}">&nbsp;{$snav_mtxt1}</span></a></td>
                                </tr>
                            </table>
                            <div id="cspacer4a" style="display: {$smarty.session.menu_myacct};"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
                        </td>
                    </tr>
                </table>
    	    </div>
    	    <div id="mmenulist4a" style="display: {$smarty.session.menu_myacct};">
    		<table border="0" cellpadding="3" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} {if $site_theme eq "black"}id="cmit2"{else}id="cmit"{/if}>
    		    <tr>{if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}<a href="{$base_url}/my_profile"><span class="{if $sbtn eq "mpr"}act{else}{/if}">{if $enable_channels eq "0"}{$myprofile}{else}{$mypchan}{/if}</span></a></td></tr>
    		    {if $enable_audio eq "1" }<tr><td><a href="{$base_url}/my_audios"><span class="{if $sbtn eq "myaud"}act{else}{/if}">{$myaudio}</a></td></tr>{/if}
    		    {if $enable_images eq "1"}<tr>{if $enable_audio eq "0"}{if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}{else}<td>{/if}<a href="{$base_url}/my_images"><span class="{if $sbtn eq "myimg"}act{else}{/if}">{$myimage}</a></td></tr>{/if}
    		    {if $enable_videos eq "1"}<tr>{if $enable_audio eq "0" and $enable_images eq "0"}{if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}{else}<td>{/if}<a href="{$base_url}/my_videos"><span class="{if $sbtn eq "myvid"}act{else}{/if}">{$myvideo}</a></td></tr>{/if}
    		    <tr><td><a href="{$base_url}/my_playlists" onclick="HideContent('hidem3');"><span class="{if $sbtn eq "mpl2"}act{else}{/if}">{$plist_txt1}</span></a></td></tr>
    		    <tr><td>{if $enable_inbox eq "1"}<a href="{$base_url}/inbox"><span class="{if $sbtn eq "inbox"}act{else}{/if}">{$myinbox}</a>{else}<a href="{$base_url}/my_comments/profile"><span class="{if $sbtn eq "comments"}act{else}{/if}">{$mycomm}</a>{/if}</td></tr>
    		    {if $msg_block eq "1"}<tr><td><a href="{$base_url}/blocked_users" onclick="HideContent('hidem3');">{$blocked_msglink}</a></td></tr>{/if}
    		    {if $file_responses eq "1"}<tr><td><a href="{$base_url}/responses/audio" onclick="HideContent('hidem3');">{$adm_setfileresp}</a></td></tr>{/if}
    		    <tr><td><a href="{$base_url}/my_quicklist"><span class="{if $sbtn eq "mql"}act{else}{/if}">{$qlist_txt4x}</a></td></tr>
    		    <tr><td><a href="{$base_url}/my_favorites"><span class="{if $sbtn eq "fav"}act{else}{/if}">{$myfav}</a></td></tr>
    		    <tr><td><a href="{$base_url}/my_friends"><span class="{if $sbtn eq "friends"}act{else}{/if}">{$myfriends}</a></td></tr>
    		    {if $enable_channels eq "1"}<tr><td><a href="{$base_url}/my_subscriptions"><span class="{if $sbtn eq "mysubs"}act{else}{/if}">{$mysubs_heading}</span></a></td></tr>{/if}
    		    {if $enable_channels eq "1"}<tr><td><a href="{$base_url}/my_subscribers"><span class="{if $sbtn eq "myusubs"}act{else}{/if}">{$myusubs_heading}</span></a></td></tr>{/if}
    		    <tr><td><a href="{$base_url}/my_history"><span class="{if $sbtn eq "mpl"}act{else}{/if}">{$myplist}</span></a></td></tr>
		</table>
    	    </div>
    	    <div align="center" id="cbottom4a" style="display: {if $smarty.session.menu_myacct eq "none"}block{else}none{/if};">{if $site_theme eq "black"}<img src="{$img_url}/bottomcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/bottomcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
	</td>
    </tr>
