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
                                                    <div id="cdownarr5x" style="display: {if $smarty.session.menu_ch eq "block" or $smarty.session.menu_ch eq ""}block{else}none{/if};" class="pl2">
                                                        <a href="javascript:void(0)" onclick="c_m5x(); set_hpsess('menu_ch');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
                                                    </div>
                                                    <div id="cleftarr5x" style="display: {if $smarty.session.menu_ch eq "none"}block{else}none{/if};" class="pl2">
                                                        <a href="javascript:void(0)" onclick="c_m5x(); set_hpsess('menu_ch');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>&nbsp;<a href="javascript:void(0)" onclick="c_m5x(); set_hpsess('menu_ch');"><span id="mmh15x" class="{if $smarty.session.menu_ch eq "none"}{else}act{/if}">&nbsp;{$uch_thl4}</span></a></td>
                                            </tr>
                                        </table>
                                        <div id="cspacer5x" style="display: {$smarty.session.menu_ch};"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div id="mmenulist5x" style="display: {$smarty.session.menu_ch};">
                        {if $channel_counts eq "1"}
                    	{insert name=chtype_count assign=c1count chtype=1}{insert name=chtype_count assign=c2count chtype=2}
                    	{insert name=chtype_count assign=c3count chtype=3}{insert name=chtype_count assign=c4count chtype=4}
                    	{insert name=chtype_count assign=c5count chtype=5}{insert name=chtype_count assign=c6count chtype=6}{insert name=chtype_count assign=allcount chtype=all}
                    	{/if}
                    	    <table border="0" cellpadding="3" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} {if $site_theme eq "black"}id="cmit2"{else}id="cmit"{/if}>
                    		<tr>{if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}<a href="{$base_url}/channels"><span class="{if $smarty.get.chtype eq ""}act{/if}">{$ch_allchtxt} {if $channel_counts eq "1"}({$allcount|viewnr}){/if}</span></a></td></tr>
                    		<tr><td><a href="{$base_url}/channels/{if $smarty.get.sort eq "" or $smarty.get.sort eq "mv"}mv{else}ms{/if}/c1"><span class="{if $smarty.get.chtype eq "c1"}act{/if}">{$pr_chinfotype1s} {if $channel_counts eq "1"}({$c1count|viewnr}){/if}</span></a></td></tr>
                    		<tr><td><a href="{$base_url}/channels/{if $smarty.get.sort eq "" or $smarty.get.sort eq "mv"}mv{else}ms{/if}/c2"><span class="{if $smarty.get.chtype eq "c2"}act{/if}">{$pr_chinfotype2s} {if $channel_counts eq "1"}({$c2count|viewnr}){/if}</span></a></td></tr>
                    		<tr><td><a href="{$base_url}/channels/{if $smarty.get.sort eq "" or $smarty.get.sort eq "mv"}mv{else}ms{/if}/c3"><span class="{if $smarty.get.chtype eq "c3"}act{/if}">{$pr_chinfotype3s} {if $channel_counts eq "1"}({$c3count|viewnr}){/if}</span></a></td></tr>
                    		<tr><td><a href="{$base_url}/channels/{if $smarty.get.sort eq "" or $smarty.get.sort eq "mv"}mv{else}ms{/if}/c4"><span class="{if $smarty.get.chtype eq "c4"}act{/if}">{$pr_chinfotype4s} {if $channel_counts eq "1"}({$c4count|viewnr}){/if}</span></a></td></tr>
                    		<tr><td><a href="{$base_url}/channels/{if $smarty.get.sort eq "" or $smarty.get.sort eq "mv"}mv{else}ms{/if}/c5"><span class="{if $smarty.get.chtype eq "c5"}act{/if}">{$pr_chinfotype5s} {if $channel_counts eq "1"}({$c5count|viewnr}){/if}</span></a></td></tr>
                    		<tr><td><a href="{$base_url}/channels/{if $smarty.get.sort eq "" or $smarty.get.sort eq "mv"}mv{else}ms{/if}/c6"><span class="{if $smarty.get.chtype eq "c6"}act{/if}">{$pr_chinfotype6s} {if $channel_counts eq "1"}({$c6count|viewnr}){/if}</span></a></td></tr>
                    	    </table>
                        </div>
                        <div align="center" id="cbottom5x" style="display: {if $smarty.session.menu_ch eq "none"}block{else}none{/if};">{if $site_theme eq "black"}<img src="{$img_url}/bottomcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/bottomcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
		    </td>
		</tr>
