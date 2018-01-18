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
                                            	    <div id="cdownarr8" style="display: {if $smarty.session.menu_display eq "block" or $smarty.session.menu_display eq ""}block{else}none{/if};" class="pl2">
                                                        <a href="javascript:void(0)" onclick="c_m8(); set_hpsess('menu_display');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
                                                    </div>
                                                    <div id="cleftarr8" style="display: {if $smarty.session.menu_display eq "none"}block{else}none{/if};" class="pl2">
                                                        <a href="javascript:void(0)" onclick="c_m8(); set_hpsess('menu_display');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>&nbsp;<a href="javascript:void(0)" onclick="c_m8(); set_hpsess('menu_display');"><span id="mmh18" class="{if $smarty.session.menu_display eq "none"}{else}act{/if}">{$mmenu_item7}</span></a></td>
                                            </tr>
                                        </table>
                                        <div id="cspacer8" style="display: {$smarty.session.menu_display};"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div id="mmenulist8" style="display: {$smarty.session.menu_display};">
                    	    <table border="0" cellpadding="3" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} {if $site_theme eq "black"}id="cmit2"{else}id="cmit"{/if}>
            			<tr>                                                                                                                                                                                           
                		    {if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}
                    			<a href="javascript:void(0)" onclick="ReverseMyTags(); {if $enable_videos eq "1"}ReverseContentDisplay('myfavvtags');{/if} {if $enable_audios eq "1"}ReverseContentDisplay('myfavatags');{/if} {if $enable_images eq "1"}ReverseContentDisplay('myfavitags');{/if} {if $enable_videos eq "1"}ReverseContentDisplay('favvhide'); ReverseContentDisplay('favvshow');{/if} {if $enable_images eq "1"}ReverseContentDisplay('favihide'); ReverseContentDisplay('favishow');{/if} {if $enable_audio eq "1"}ReverseContentDisplay('favahide'); ReverseContentDisplay('favashow');{/if}">
                        		    <span id="favihide" {if $smarty.session.mytags eq "on"}style="display: block;"{else}style="display: none;"{/if}>{$myfiles_hidetags}</span>
                        		    <span id="favishow" {if $smarty.session.mytags eq "off"}style="display: block;"{else}style="display: none;"{/if}>{$myfiles_showtags}</span>
                    			</a>
                		    </td>
            			</tr>
				<tr>
                		    <td class="">
                			<a href="javascript:void(0)" onclick="ReverseViewMode(); {if $enable_audio eq "1"}ReverseContentDisplay('agridview'); ReverseContentDisplay('alistview');{/if} {if $enable_images eq "1"}ReverseContentDisplay('igridview'); ReverseContentDisplay('ilistview');{/if} {if $enable_videos eq "1"}ReverseContentDisplay('vgridview'); ReverseContentDisplay('vlistview');{/if} {if $enable_images eq "1"}ReverseContentDisplay('igview'); ReverseContentDisplay('ilview');{/if} {if $enable_videos eq "1"}ReverseContentDisplay('vgview'); ReverseContentDisplay('vlview');{/if} {if $enable_audio eq "1"}ReverseContentDisplay('agview'); ReverseContentDisplay('alview');{/if}">
                			    <span id="ilview" {if $smarty.session.viewmode eq "list"}style="display: none;"{else}style="display: block;"{/if}>{$files_listview}</span>
                			    <span id="igview" {if $smarty.session.viewmode eq "grid"}style="display: none;"{else}style="display: block;"{/if}>{$files_gridview}</span>
                			</a>
            			    </td>
            			</tr>
                    	    </table>
                        </div>
                        <div align="center" id="cbottom8" style="display: {if $smarty.session.menu_display eq "none"}block{else}none{/if};">{if $site_theme eq "black"}<img src="{$img_url}/bottomcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/bottomcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
		    </td>
		</tr>
