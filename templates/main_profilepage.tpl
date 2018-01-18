<!-- BEGIN PROFILE TABLE -->
<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
    <tr><td class="h3"></td></tr>
</table>
<table cellspacing="0" cellpadding="10" border="0" align="center" class="width950b">
    <tbody>
        <tr>
            <td valign="top" colspan="2" class="pl0">
            <table width="100%" cellspacing="0" cellpadding="5" border="0" align="center">
                <tbody>
                    <tr>
                        <td align="left" width="20%" valign="top" class="nopad">
                    	    <div class="cursor">
            			<div align="center">{if $site_theme eq "black"}<img src="{$img_url}/topcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/topcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
            			<table border="0" cellpadding="0" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} width="{$thimgwidth}">
                		    <tr>
                    			{if $site_theme eq "black"}<td class="cbg2">{else}<td class="cbg">{/if}
                        		    <table cellpadding="0" cellspacing="0" border="0">
                            		        <tr>
                                		    <td valign="middle" class="pl5" width="11">
                                    			<div id="cdownarr11" style="display: {if $smarty.session.menu_profile eq "block" or $smarty.session.menu_profile eq ""}block{else}none{/if};" class="pl2">
                                        		    <a href="javascript:void(0)" onclick="c_m11(); set_hpsess('menu_profile');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
                                    			</div>
                                    			<div id="cleftarr11" style="display: {if $smarty.session.menu_profile eq "none"}block{else}none{/if};" class="pl2">
                                        		    <a href="javascript:void(0)" onclick="c_m11(); set_hpsess('menu_profile');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
                                    			</div>
                                		    </td>
                                		    <td>&nbsp;<a href="javascript:void(0)" onclick="c_m11(); set_hpsess('menu_profile');"><span id="mmh111" class="{if $smarty.session.menu_profile eq "none"}{else}act{/if}">{$mmenu_item9}</span></a></td>
                            			</tr>
                        		    </table>
                        		    <div id="cspacer11" style="display: {$smarty.session.menu_profile};"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            {insert name=getfield assign=chtype field=ch_type table=members qfield=uid qvalue=$smarty.session.UID}
                            <div id="mmenulist11" style="display: {$smarty.session.menu_profile};">
                        	<table border="0" cellpadding="5" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} {if $site_theme eq "black"}id="cmit2"{else}id="cmit"{/if}>
                        	{if $enable_channels eq "1"}
                        	    <tr>{if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}<a href="{$base_url}/my_profile"><span class="{if $chs eq "s1"}act{/if}">{$pr_chlmitem1}</span></a></td></tr>
                        	    <tr><td><a href="{$base_url}/my_profile_theme"><span class="{if $chs eq "s2"}act{/if}">{$pr_chlmitem2}</span></a></td></tr>
                        	    {if $enable_videos eq "1"}<tr><td><a href="{$base_url}/my_profile_videos"><span class="{if $chs eq "s3"}act{/if}">{$pr_chlmitem3}</span></a></td></tr>{/if}
                        	    {if $enable_images eq "1"}<tr><td><a href="{$base_url}/my_profile_images"><span class="{if $chs eq "s31"}act{/if}">{$pr_chlmitem31}</span></a></td></tr>{/if}
                        	    {if $enable_audio eq "1"}<tr><td><a href="{$base_url}/my_profile_audios"><span class="{if $chs eq "s32"}act{/if}">{$pr_chlmitem32}</span></a></td></tr>{/if}
                        	{/if}
                        	{if $enable_channels eq "0"}
                        	    <tr>{if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}<a href="{$base_url}/my_profile_info"><span class="{if $chs eq "s4"}act{/if}">{$pr_chlmitem4}</span></a></td></tr>
                        	{else}
                        	    <tr><td><a href="{$base_url}/my_profile_info"><span class="{if $chs eq "s4"}act{/if}">{$pr_chlmitem4}</span></a></td></tr>
                        	{/if}
                        	{if ( $chtype eq 2 or $chtype eq 3 or $chtype eq 4 or $chtype eq 5 or $chtype eq 6 ) and $enable_channels eq "1"}
                        	    <tr><td><a href="{$base_url}/my_profile_performer"><span class="{if $chs eq "s41"}act{/if}">{$pr_chinfob58}</span></a></td></tr>
                        	    {if $chtype eq 3 or $chtype eq 4}<tr><td><a href="{$base_url}/my_profile_shows"><span class="{if $chs eq "s6"}act{/if}">{$pr_chinfom18}</span></a></td></tr>{/if}
                        	    {if $chtype eq 2}<tr><td><a href="{$base_url}/my_profile_url"><span class="{if $chs eq "s42"}act{/if}">{$pr_chinfob65}</span></a></td></tr>{/if}
                        	{/if}
                        	    <tr><td><a href="{$base_url}/my_profile_location"><span class="{if $chs eq "s5"}act{/if}">{$pr_chlmitem5}</span></a></td></tr>
                        	</table>
                            </div>
                            <div align="center" id="cbottom11" style="display: {if $smarty.session.menu_profile eq "none"}block{else}none{/if};">{if $site_theme eq "black"}<img src="{$img_url}/bottomcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/bottomcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
                        </td>
                        
                        <td align="left" width="80%" valign="top" class="br1">
                        {if $chs eq "s1"}
                    	    <div style="padding-left: 40px;">{include file="_inc/chan/ch_info.tpl"}</div>
                    	{elseif $chs eq "s2"}
                    	    {include file="_inc/chan/ch_theme.tpl"}
                    	{elseif $chs eq "s3" or $chs eq "s31" or $chs eq "s32"}
                    	    {include file="_inc/chan/ch_video.tpl"}
                    	{elseif $chs eq "s4"}
                    	    <div style="padding-left: 40px;">{include file="_inc/chan/ch_profile.tpl"}</div>
                    	{elseif $chs eq "s41"}
                    	    <div style="padding-left: 40px;">{include file="_inc/chan/ch_performer.tpl"}</div>
                    	{elseif $chs eq "s6"}
                    	    <div style="padding-left: 40px;">{include file="_inc/chan/ch_events.tpl"}</div>
                    	{elseif $chs eq "s42"}    
                    	    <div style="padding-left: 40px;">{include file="_inc/chan/ch_url.tpl"}</div>
                    	{elseif $chs eq "s5"}
                    	    <div style="padding-left: 40px;">{include file="_inc/chan/ch_loc.tpl"}</div>
                    	{/if}
                        </td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
    </tbody>
</table>
<!-- END PROFILE TABLE -->