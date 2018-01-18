		{if $enable_videos eq "1"}
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
                                                    <div id="cdownarr2f" style="display: {if $smarty.session.menu_browsev eq "block" or $smarty.session.menu_browsev eq ""}block{else}none{/if};" class="pl2">
                                                        <a href="javascript:void(0)" onclick="c_m2f(); set_hpsess('menu_browsev');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
                                                    </div>
                                                    <div id="cleftarr2f" style="display: {if $smarty.session.menu_browsev eq "none"}block{else}none{/if};" class="pl2">
                                                        <a href="javascript:void(0)" onclick="c_m2f(); set_hpsess('menu_browsev');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>&nbsp;<a href="javascript:void(0)" onclick="c_m2f(); set_hpsess('menu_browsev');"><span id="mmh12f" class="{if $smarty.session.menu_browsev eq "none"}{else}act{/if}">{$mmenu_item5}</span></a></td>
                                            </tr>
                                        </table>
                                        <div id="cspacer2f" style="display: {$smarty.session.menu_browsev};"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        {if $smarty.request.user ne ""}{assign var=ulnk value="user_"}{assign var=rem value="user_videos/"}{else}{assign var=rem value=videos}{/if}
                        <div id="mmenulist2f" style="display: {$smarty.session.menu_browsev};">
                    	    <table border="0" cellpadding="3" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} {if $site_theme eq "black"}id="cmit2"{else}id="cmit"{/if}>
                    		<tr>{if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}<a href="{if $smarty.session.UID eq "" and $guests_file_sorting eq "0"}{$base_url}/login?next={$rem}{$smarty.request.user}/recent{else}{$base_url}/{if $smarty.request.category ne ""}categories/video/{$smarty.request.category}{else}{$ulnk}videos{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}/recent{/if}">{$mostrecent}</a></td></tr>
                    		<tr><td><a href="{if $smarty.session.UID eq "" and $guests_file_sorting eq "0"}{$base_url}/login?next={$rem}{$smarty.request.user}/featured{else}{$base_url}/{if $smarty.request.category ne ""}categories/video/{$smarty.request.category}{else}{$ulnk}videos{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}/featured{/if}">{$recfeatured}</a></td></tr>
                    		<tr><td><a href="{if $smarty.session.UID eq "" and $guests_file_sorting eq "0"}{$base_url}/login?next={$rem}{$smarty.request.user}/most_viewed{else}{$base_url}/{if $smarty.request.category ne ""}categories/video/{$smarty.request.category}{else}{$ulnk}videos{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}/most_viewed{/if}">{$mostviewed}</a></td></tr>
                    		{if $file_comments eq "1"}<tr><td><a href="{if $smarty.session.UID eq "" and $guests_file_sorting eq "0"}{$base_url}/login?next={$rem}{$smarty.request.user}/most_commented{else}{$base_url}/{if $smarty.request.category ne ""}categories/video/{$smarty.request.category}{else}{$ulnk}videos{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}/most_commented{/if}">{$mostcomm}</a></td></tr>{/if}
                    		{if $file_responses eq "1"}<tr><td><a href="{if $smarty.session.UID eq "" and $guests_file_sorting eq "0"}{$base_url}/login?next={$rem}{$smarty.request.user}/most_responded{else}{$base_url}/{if $smarty.request.category ne ""}categories/video/{$smarty.request.category}{else}{$ulnk}videos{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}/most_responded{/if}">{$fresp_txt28}</a></td></tr>{/if}
                    		{if $file_ratings eq "1"}<tr><td><a href="{if $smarty.session.UID eq "" and $guests_file_sorting eq "0"}{$base_url}/login?next={$rem}{$smarty.request.user}/top_rated{else}{$base_url}/{if $smarty.request.category ne ""}categories/video/{$smarty.request.category}{else}{$ulnk}videos{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}/top_rated{/if}">{$toprated}</a></td></tr>{/if}
                    		<tr><td><a href="{if $smarty.session.UID eq "" and $guests_file_sorting eq "0"}{$base_url}/login?next={$rem}{$smarty.request.user}/top_favorites{else}{$base_url}/{if $smarty.request.category ne ""}categories/video/{$smarty.request.category}{else}{$ulnk}videos{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}/top_favorites{/if}">{$topfav}</a></td></tr>
                    		<tr><td><a href="{if $smarty.session.UID eq "" and $guests_file_sorting eq "0"}{$base_url}/login?next={$rem}{$smarty.request.user}/random{else}{$base_url}/{if $smarty.request.category ne ""}categories/video/{$smarty.request.category}{else}{$ulnk}videos{/if}{if $smarty.request.user ne ""}/{$smarty.request.user}{/if}/random{/if}">{$random}</a></td></tr>
                    	    </table>
                        </div>
                        <div align="center" id="cbottom2f" style="display: {if $smarty.session.menu_browsev eq "none"}block{else}none{/if};">{if $site_theme eq "black"}<img src="{$img_url}/bottomcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/bottomcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
		    </td>
		</tr>
                {/if}