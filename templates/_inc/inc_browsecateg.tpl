	    {if $btn eq "bvideo" or $btn eq "bimage" or $btn eq "baudio"}
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
                                                    <div id="cdownarr5" style="display: {if $smarty.session.menu_categ eq "block" or $smarty.session.menu_categ eq ""}block{else}none{/if};" class="pl2">
                                                        <a href="javascript:void(0)" onclick="c_m5(); set_hpsess('menu_categ');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
                                                    </div>
                                                    <div id="cleftarr5" style="display: {if $smarty.session.menu_categ eq "none"}block{else}none{/if};" class="pl2">
                                                        <a href="javascript:void(0)" onclick="c_m5(); set_hpsess('menu_categ');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>&nbsp;<a href="javascript:void(0)" onclick="c_m5(); set_hpsess('menu_categ');"><span id="mmh15" class="{if $smarty.session.menu_categ eq "none"}{else}act{/if}">{$mmenu_item12}</span></a></td>
                                            </tr>
                                        </table>
                                        <div id="cspacer5" style="display: {$smarty.session.menu_categ};"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div id="mmenulist5" style="display: {$smarty.session.menu_categ};">
                    	    <table border="0" cellpadding="3" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} {if $site_theme eq "black"}id="cmit2"{else}id="cmit"{/if}>
                    	    {if $btn eq "bvideo"}
                    	    {section name=c loop=$categs}
                    	    {insert name=categ_count assign=count cid=$categs[c].cid}
                    	    {if $smarty.section.c.index eq "0"}
                    		<tr>{if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}<a href="{$base_url}/categories/video/{if $special_characters eq "0"}{$tit[c]}{else}{$categs[c].cid}{/if}/{if $smarty.request.type eq ""}recent{else}{$smarty.request.type}{/if}"><span {if $special_characters eq "0"}class="{if $smarty.request.category eq $tit[c]}act{/if}{else}class="{if $smarty.request.category eq $categs[c].cid}act{/if}{/if}"><span class="">{$categs[c].name|endconv} </span>{if $categ_counts eq "1"}({$count[1]|viewnr}){/if}</span></a></td></tr>
                    	    {else}
                    		<tr><td><a href="{$base_url}/categories/video/{if $special_characters eq "0"}{$tit[c]}{else}{$categs[c].cid}{/if}/{if $smarty.request.type eq ""}recent{else}{$smarty.request.type}{/if}"><span {if $special_characters eq "0"}class="{if $smarty.request.category eq $tit[c]}act{/if}{else}class="{if $smarty.request.category eq $categs[c].cid}act{/if}{/if}"><span class="">{$categs[c].name|endconv} </span>{if $categ_counts eq "1"}({$count[1]|viewnr}){/if}</span></a></td></tr>
                    	    {/if}
                    	    {/section}
                    	    {elseif $btn eq "bimage"}
                    	    {section name=c loop=$categs}
                    	    {insert name=categ_count_image assign=count cid=$categs[c].cid}
                    	    {if $smarty.section.c.index eq "0"}
                    		<tr>{if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}<a href="{$base_url}/categories/image/{if $special_characters eq "0"}{$tit[c]}{else}{$categs[c].cid}{/if}/{if $smarty.request.type eq ""}recent{else}{$smarty.request.type}{/if}"><span {if $special_characters eq "0"}class="{if $smarty.request.category eq $tit[c]}act{/if}{else}class="{if $smarty.request.category eq $categs[c].cid}act{/if}{/if}"><span class="">{$categs[c].name|endconv} </span>{if $categ_counts eq "1"}({$count[1]|viewnr}){/if}</span></a></td></tr>
                    	    {else}
                    		<tr><td><a href="{$base_url}/categories/image/{if $special_characters eq "0"}{$tit[c]}{else}{$categs[c].cid}{/if}/{if $smarty.request.type eq ""}recent{else}{$smarty.request.type}{/if}"><span {if $special_characters eq "0"}class="{if $smarty.request.category eq $tit[c]}act{/if}{else}class="{if $smarty.request.category eq $categs[c].cid}act{/if}{/if}"><span class="">{$categs[c].name|endconv} </span>{if $categ_counts eq "1"}({$count[1]|viewnr}){/if}</span></a></td></tr>
                    	    {/if}
                    	    {/section}
                    	    {elseif $btn eq "baudio"}
                    	    {section name=c loop=$categs}
                    	    {insert name=categ_count_audio assign=count cid=$categs[c].cid}
                    	    {if $smarty.section.c.index eq "0"}
                    		<tr>{if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}<a href="{$base_url}/categories/audio/{if $special_characters eq "0"}{$tit[c]}{else}{$categs[c].cid}{/if}/{if $smarty.request.type eq ""}recent{else}{$smarty.request.type}{/if}"><span {if $special_characters eq "0"}class="{if $smarty.request.category eq $tit[c]}act{/if}{else}class="{if $smarty.request.category eq $categs[c].cid}act{/if}{/if}"><span class="">{$categs[c].name|endconv} </span>{if $categ_counts eq "1"}({$count[1]|viewnr}){/if}</span></a></td></tr>
                    	    {else}
                    		<tr><td><a href="{$base_url}/categories/audio/{if $special_characters eq "0"}{$tit[c]}{else}{$categs[c].cid}{/if}/{if $smarty.request.type eq ""}recent{else}{$smarty.request.type}{/if}"><span {if $special_characters eq "0"}class="{if $smarty.request.category eq $tit[c]}act{/if}{else}class="{if $smarty.request.category eq $categs[c].cid}act{/if}{/if}"><span class="">{$categs[c].name|endconv} </span>{if $categ_counts eq "1"}({$count[1]|viewnr}){/if}</span></a></td></tr>
                    	    {/if}
                    	    {/section}
                    	    
                    	    {/if}
                    	    </table>
                        </div>
                        <div align="center" id="cbottom5" style="display: {if $smarty.session.menu_categ eq "none"}block{else}none{/if};">{if $site_theme eq "black"}<img src="{$img_url}/bottomcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/bottomcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
		    </td>
		</tr>
            {/if}