	    {if $enable_inbox eq "1"}
		<div class="cursor">
		<div align="center">{if $site_theme eq "black"}<img src="{$img_url}/topcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/topcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
		<table border="0" cellpadding="0" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} width="{$thimgwidth}">
		    <tr>
			{if $site_theme eq "black"}<td class="cbg2">{else}<td class="cbg">{/if}
			    <table cellpadding="0" cellspacing="0" border="0">
				<tr>
				    <td valign="middle" class="pl5" width="11">
					<div id="cdownarr" style="display: {if $smarty.session.menu_inbox eq "block" or $smarty.session.menu_inbox eq ""}block{else}none{/if};" class="pl2">
					    <a href="javascript:void(0)" onclick="c_m1(); set_hpsess('menu_inbox');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
					</div>
					<div id="cleftarr" style="display: {if $smarty.session.menu_inbox eq "none"}block{else}none{/if};" class="pl2">
					    <a href="javascript:void(0)" onclick="c_m1(); set_hpsess('menu_inbox');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
					</div>
				    </td>
				    <td>&nbsp;<a href="javascript:void(0)" onclick="c_m1(); set_hpsess('menu_inbox');"><span id="mmh1" class="{if $smarty.session.menu_inbox eq "none"}{else}act{/if}">{$mmenu_item1}</span></a></td>
				</tr>
			    </table>
			    <div id="cspacer" style="display: {$smarty.session.menu_inbox};"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
			</td>
		    </tr>
		</table>
		</div>
		
		<div id="mmenulist" style="display: {$smarty.session.menu_inbox};">
		<table border="0" cellpadding="5" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} {if $site_theme eq "black"}id="cmit2"{else}id="cmit"{/if}>
            	    <tr>{if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}<a href="{$base_url}/inbox"><span class="{if $sbtn eq "inbox"}act{/if}">{$inbox_item1}</span></a></td></tr>
            	    <tr><td><a href="{$base_url}/outbox"><span class="{if $sbtn eq "outbox"}act{/if}">{$inbox_item2}</span></a></td></tr>
            	    <tr><td><a href="{$base_url}/compose"><span class="{if $sbtn eq "compose"}act{/if}">{$inbox_item4}</span></a></td></tr>
            	    {if $msg_block eq "1"}<tr><td><a href="{$base_url}/blocked_users"><span class="{if $sbtn eq "blocked"}act{/if}">{$blocked_msglink}</span></a></td></tr>{/if}
        	</table>
        	</div>
        	<div align="center" id="cbottom" style="display: {if $smarty.session.menu_inbox eq "none"}block{else}none{/if};">{if $site_theme eq "black"}<img src="{$img_url}/bottomcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/bottomcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
    	    <br>
            {/if}
            
            <div class="cursor">
            <div align="center">{if $site_theme eq "black"}<img src="{$img_url}/topcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/topcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
            <table border="0" cellpadding="0" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} width="{$thimgwidth}">
        	<tr>
        	    {if $site_theme eq "black"}<td class="cbg2">{else}<td class="cbg">{/if}
        		<table cellpadding="0" cellspacing="0" border="0">
        		    <tr>
        			<td valign="middle" class="pl5" width="11">
        			    <div id="cdownarr2" style="display: {if $smarty.session.menu_comm eq "block" or $smarty.session.menu_comm eq ""}block{else}none{/if};" class="pl2">
        				<a href="javascript:void(0)" onclick="c_m2(); set_hpsess('menu_comm');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
        			    </div>
        			    <div id="cleftarr2" style="display: {if $smarty.session.menu_comm eq "none"}block{else}none{/if};" class="pl2">
        				<a href="javascript:void(0)" onclick="c_m2(); set_hpsess('menu_comm');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
        			    </div>
        			</td>
        			<td>&nbsp;<a href="javascript:void(0)" onclick="c_m2(); set_hpsess('menu_comm');"><span id="mmh12" class="{if $smarty.session.menu_comm eq "none"}{else}act{/if}">{$mmenu_item2}</span></a></td>
        		    </tr>
        		</table>
        		<div id="cspacer2" style="display: {$smarty.session.menu_comm};"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
        	    </td>
        	</tr>
    	    </table>
    	    </div>
    	    <div id="mmenulist2" style="display: {$smarty.session.menu_comm};">
    	    <table border="0" cellpadding="5" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} {if $site_theme eq "black"}id="cmit2x"{else}id="cmitx"{/if}>
            {if $profile_comments eq "1"}
        	<tr>{if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}<a href="{$base_url}/my_comments/profile"><span class="{if $section eq "profile" and $sbtn eq "comments"}act{/if}">{$inbox_item8}</span></a></td></tr>
    	    {/if}
	    {if $file_comments eq "1"}
                {if $enable_audio eq "1"}<tr>{if $profile_comments eq "0"}{if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}{else}<td class="">{/if}<a href="{$base_url}/my_comments/audio"><span class="{if $section eq "audio" and $sbtn eq "comments"}act{/if}">{$inbox_item5}</span></a></td></tr>{/if}
                {if $enable_images eq "1"}<tr>{if $enable_audio eq "0"}{if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}{else}<td class="">{/if}<a href="{$base_url}/my_comments/image"><span class="{if $section eq "image" and $sbtn eq "comments"}act{/if}">{$inbox_item6}</span></a></td></tr>{/if}
                {if $enable_videos eq "1"}<tr>{if $enable_images eq "0" and $enable_audio eq "0"}{if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}{else}<td class="">{/if}<a href="{$base_url}/my_comments/video"><span class="{if $section eq "video" and $sbtn eq "comments"}act{/if}">{$inbox_item7}</span></a></td></tr>{/if}
            {/if}
            </table>
	    </div>
	    <div align="center" id="cbottom2" style="display: {if $smarty.session.menu_comm eq "none"}block{else}none{/if};">{if $site_theme eq "black"}<img src="{$img_url}/bottomcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/bottomcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
	    <br>

	    {if $file_responses eq "1"}
            <div class="cursor">
            <div align="center">{if $site_theme eq "black"}<img src="{$img_url}/topcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/topcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
            <table border="0" cellpadding="0" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} width="{$thimgwidth}">
        	<tr>
        	    {if $site_theme eq "black"}<td class="cbg2">{else}<td class="cbg">{/if}
        		<table cellpadding="0" cellspacing="0" border="0">
        		    <tr>
        			<td valign="middle" class="pl5" width="11">
        			    <div id="cdownarr2x" style="display: {if $smarty.session.menu_resp eq "block" or $smarty.session.menu_resp eq ""}block{else}none{/if};" class="pl2">
        				<a href="javascript:void(0)" onclick="c_m2x(); set_hpsess('menu_resp');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
        			    </div>
        			    <div id="cleftarr2x" style="display: {if $smarty.session.menu_resp eq "none"}block{else}none{/if};" class="pl2">
        				<a href="javascript:void(0)" onclick="c_m2x(); set_hpsess('menu_resp');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
        			    </div>
        			</td>
        			<td>&nbsp;<a href="javascript:void(0)" onclick="c_m2x(); set_hpsess('menu_resp');"><span id="mmh12x" class="{if $smarty.session.menu_resp eq "none"}{else}act{/if}">{$fresp_txt32}</span></a></td>
        		    </tr>
        		</table>
        		<div id="cspacer2x" style="display: {$smarty.session.menu_resp};"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
        	    </td>
        	</tr>
    	    </table>
    	    </div>
    	    <div id="mmenulist2x" style="display: {$smarty.session.menu_resp};">
    	    <table border="0" cellpadding="5" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} {if $site_theme eq "black"}id="cmit2xx"{else}id="cmitxx"{/if}>
                {if $enable_audio eq "1"}<tr>{if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}<a href="{$base_url}/responses/audio"><span class="{if $section eq "audio" and $sbtn eq "resp"}act{/if}">{$fresp_txt3}</span></a></td></tr>{/if}
                {if $enable_images eq "1"}<tr>{if $enable_audio eq "0"}{if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}{else}<td class="">{/if}<a href="{$base_url}/responses/image"><span class="{if $section eq "image" and $sbtn eq "resp"}act{/if}">{$fresp_txt2}</span></a></td></tr>{/if}
                {if $enable_videos eq "1"}<tr>{if $enable_images eq "0" and $enable_audio eq "0"}{if $site_theme eq "black"}<td class="cbg-bt2">{else}<td class="cbg-bt">{/if}{else}<td class="">{/if}<a href="{$base_url}/responses/video"><span class="{if $section eq "video" and $sbtn eq "resp"}act{/if}">{$fresp_txt1}</span></a></td></tr>{/if}
            </table>
	    </div>
	    <div align="center" id="cbottom2x" style="display: {if $smarty.session.menu_resp eq "none"}block{else}none{/if};">{if $site_theme eq "black"}<img src="{$img_url}/bottomcorners2.gif" width="{$thimgwidth}" height="6" alt="">{else}<img src="{$img_url}/bottomcorners.gif" width="{$thimgwidth}" height="6" alt="">{/if}</div>
	    {/if}