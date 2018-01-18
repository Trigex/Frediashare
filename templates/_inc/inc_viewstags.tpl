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
                                                    <div id="cdownarr6" style="display: {if $smarty.session.menu_display eq "block" or $smarty.session.menu_display eq ""}block{else}none{/if};" class="pl2">
                                                        <a href="javascript:void(0)" onclick="c_m6(); set_hpsess('menu_display');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
                                                    </div>
                                                    <div id="cleftarr6" style="display: {if $smarty.session.menu_display eq "none"}block{else}none{/if};" class="pl2">
                                                        <a href="javascript:void(0)" onclick="c_m6(); set_hpsess('menu_display');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>&nbsp;<a href="javascript:void(0)" onclick="c_m6(); set_hpsess('menu_display');"><span id="mmh16" class="{if $smarty.session.menu_display eq "none"}{else}act{/if}">{$mmenu_item7}</span></a></td>
                                            </tr>
                                        </table>
                                        <div id="cspacer6" style="display: {$smarty.session.menu_display};"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
                                    </td>
                                </tr>
                            </table>
                	</div>
                	{if $btn eq "bvideo" or $btn eq "bimage" or $btn eq "baudio" or $sbtn eq "mysubs"}
                        <div id="mmenulist6" style="display: {$smarty.session.menu_display};">
                    	    <table border="0" cellpadding="3" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} {if $site_theme eq "black"}id="cmit2"{else}id="cmit"{/if}>
                    		{if $sbtn eq "mysubs"}
				<tr>
                		    {if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}<a href="javascript:void(0)" onclick="ReverseViewMode(); ReverseContentDisplay('gridview'); ReverseContentDisplay('listview'); ReverseContentDisplay('gview'); ReverseContentDisplay('lview');"><span id="lview" {if $smarty.session.viewmode eq "list"}style="display: none;"{else}style="display: block;"{/if}>{$files_listview}</span><span id="gview" {if $smarty.session.viewmode eq "grid"}style="display: none;"{else}style="display: block;"{/if}>{$files_gridview}</span></a></td>
            			</tr>
            			{else}
                    		<tr>
                    		    {if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}
                    		    {if $btn eq "bvideo"}
                		    <a href="javascript:void(0)" onclick="ReverseVideoTags(); ReverseContentDisplay('videotags'); ReverseContentDisplay('showv'); ReverseContentDisplay('hidev');">
                    			<span id="showv" {if $smarty.session.videotags eq "off"}style="display: block;"{else}style="display: none;"{/if}>{$files_showvtags}</span>
                    			<span id="hidev" {if $smarty.session.videotags eq "on"}style="display: block;"{else}style="display: none;"{/if}>{$files_hidevtags}</span>
                		    </a>
                		    {elseif $btn eq "bimage"}
                		    <a href="javascript:void(0)" onclick="ReverseImageTags(); ReverseContentDisplay('imagetags'); ReverseContentDisplay('showi'); ReverseContentDisplay('hidei');">
                    			<span id="showi" {if $smarty.session.imagetags eq "off"}style="display: block;"{else}style="display: none;"{/if}>{$files_showitags}</span>
                    			<span id="hidei" {if $smarty.session.imagetags eq "on"}style="display: block;"{else}style="display: none;"{/if}>{$files_hideitags}</span>
                		    </a>
                		    {elseif $btn eq "baudio"}
                		    <a href="javascript:void(0)" onclick="ReverseAudioTags(); ReverseContentDisplay('audiotags'); ReverseContentDisplay('showa'); ReverseContentDisplay('hidea');">
                    			<span id="showa" {if $smarty.session.audiotags eq "off"}style="display: block;"{else}style="display: none;"{/if}>{$files_showatags}</span>
                    			<span id="hidea" {if $smarty.session.audiotags eq "on"}style="display: block;"{else}style="display: none;"{/if}>{$files_hideatags}</span>
                		    </a>
                		    {/if}
                		    </td>
                		</tr>
				<tr>
                		    <td class=""><a href="javascript:void(0)" onclick="ReverseViewMode(); ReverseContentDisplay('gridview'); ReverseContentDisplay('listview'); ReverseContentDisplay('gview'); ReverseContentDisplay('lview');"><span id="lview" {if $smarty.session.viewmode eq "list"}style="display: none;"{else}style="display: block;"{/if}>{$files_listview}</span><span id="gview" {if $smarty.session.viewmode eq "grid"}style="display: none;"{else}style="display: block;"{/if}>{$files_gridview}</span></a></td>
            			</tr>
            			{/if}
                	    </table>
                	</div>
                	{elseif $sbtn eq "myaud" or $sbtn eq "myimg" or $sbtn eq "myvid" or $sbtn eq "search" or $sbtn eq "adm_search"}
                        <div id="mmenulist6" style="display: {$smarty.session.menu_display};">
                    	    <table border="0" cellpadding="3" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} {if $site_theme eq "black"}id="cmit2"{else}id="cmit"{/if}>
                    		<tr>
                    		    {if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}
                    			<a href="javascript:void(0)" onclick="ReverseMyTags(); ReverseContentDisplay('mytags'); ReverseContentDisplay('shide'); ReverseContentDisplay('sshow');"><span id="shide" {if $smarty.session.mytags eq "on"}style="display: block;"{else}style="display: none;"{/if}>{$myfiles_hidetags}</span><span id="sshow" {if $smarty.session.mytags eq "off"}style="display: block;"{else}style="display: none;"{/if}>{$myfiles_showtags}</span></a>
                    		    </td>
                    		</tr>
                    		<tr>
                    		    <td>
                    			<a href="javascript:void(0)" onclick="ReverseViewMode(); ReverseContentDisplay('gridview'); ReverseContentDisplay('listview'); ReverseContentDisplay('gview'); ReverseContentDisplay('lview');"><span id="lview" {if $smarty.session.viewmode eq "list"}style="display: none;"{else}style="display: block;"{/if}>{$files_listview}</span><span id="gview" {if $smarty.session.viewmode eq "grid"}style="display: none;"{else}style="display: block;"{/if}>{$files_gridview}</span></a>
                    		    </td>
                    		</tr>
                    	    </table>
                	</div>
                	{/if}
                	<div align="center" id="cbottom6" style="display: {if $smarty.session.menu_display eq "none"}block{else}none{/if};">{if $site_theme eq "black"}<img src="{$img_url}/bottomcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/bottomcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
                    </td>
                </tr>
		{if $sbtn eq "profile"}
		<tr><td>
		{if $enable_channels eq "0"}
		    <script language="javascript" src="{$js_url}/ajaxresponder.js" type="text/javascript"></script>
		    <script language="javascript" src="{$js_url}/common.js" type="text/javascript"></script>
		    <input type="hidden" name="ldivx" id="ldivx" value="">
		    <input type="hidden" name="thisDiv" id="thisDiv" value="">
		{/if}
		<div id="mmenulist6" style="display: {$smarty.session.menu_display};">
		    <table border="0" cellpadding="3" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} {if $site_theme eq "black"}id="cmit2"{else}id="cmit"{/if}>
            		<tr>
            		    {if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}
                		<a href="javascript:void(0)" onclick="thisDiv('no'); ReverseMyTags(); {if $enable_audio eq "1"}ReverseContentDisplay('atags');{/if} {if $enable_images eq "1"}ReverseContentDisplay('itags');{/if} {if $enable_videos eq "1"}ReverseContentDisplay('vtags');{/if} ReverseContentDisplay('shide'); ReverseContentDisplay('sshow');"><span id="shide" {if $smarty.session.mytags eq "on"}style="display: block;"{else}style="display: none;"{/if}>{$myfiles_hidetags}</span><span id="sshow" {if $smarty.session.mytags eq "off"}style="display: block;"{else}style="display: none;"{/if}>{$myfiles_showtags}</span></a>
                	    </td>
            		</tr>
			<tr>
                	    <td class=""><a href="javascript:void(0)" onclick="thisDiv('no'); ReverseViewMode(); {if $enable_audio eq "1"}ReverseContentDisplay('gridviewa'); ReverseContentDisplay('listviewa');{/if} {if $enable_images eq "1"}ReverseContentDisplay('gridviewi'); ReverseContentDisplay('listviewi');{/if} {if $enable_videos eq "1"}ReverseContentDisplay('gridviewv'); ReverseContentDisplay('listviewv');{/if} ReverseContentDisplay('gview'); ReverseContentDisplay('lview');"><span id="lview" {if $smarty.session.viewmode eq "list"}style="display: none;"{else}style="display: block;"{/if}>{$files_listview}</span><span id="gview" {if $smarty.session.viewmode eq "grid"}style="display: none;"{else}style="display: block;"{/if}>{$files_gridview}</span></a></td>
            		</tr>
            	    </table>
            	</div>
            	</td></tr>
                {/if}
                