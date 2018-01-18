<table border="0" align="center" cellpadding="5" cellspacing="0" class="width950">
    <tr>
	<td valign="top" width="20%" class="lm">
	{insert name=ad_status assign=check aname=file_ads_right}
	{insert name=ad_status assign=checkleft aname=file_ads_left}
    	    <table cellpadding=2 cellspacing=0 class="pt5" border=0 align="center">
            {if $btn eq "bvideo" or $btn eq "bimage" or $btn eq "bvideo"}
                {include file="_inc/inc_browsecateg.tpl"}
            {/if}
            </table>{if $btn eq "bvideo" or $btn eq "bimage" or $btn eq "baudio"}<br>{/if}
            <table cellpadding=2 cellspacing=0 class="{if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "mql" or $sbtn eq "ufavs" or $sbtn eq "myaud" or $sbtn eq "myimg" or $sbtn eq "myvid"}pt5{/if}" border=0 align="center">
            {if $smarty.session.UID ne "" and $panel_mylinks eq "1"}
        	{if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "ufavs" or $sbtn eq "mql"}
                {include file="_inc/inc_mylinksfv.tpl"}
                {else}
                {include file="_inc/inc_mylinks.tpl"}
                {/if}
            {/if}
            </table>
            {if $checkleft eq "1"}
        	{include file="ads/file_ads_left.tpl"}
            {/if}
        </td> 
        
	<td valign="top" class="nopad_bg" {if $check eq "1" or $panel_rightlinks eq "1"}width="65%"{else}width="80%"{/if}>
	    <table width="100%" cellpadding="0" cellspacing="0" align="left">
	    {if $smarty.request.vplkey ne ""}
		<tr>
		    <td>
			{include file="_inc/inc_listvpl.tpl"}
		    </td>
		</tr>
	    {/if}
	    
	    {if $btn eq "bvideo"}
		<tr>
		    <td>
        <div id="videotags" {if $smarty.session.videotags eq "off"}style="display: none;"{else}style="display: block;"{/if}>
            <table width="100%" cellpadding="5" cellspacing="0" border="0" align="left">
                <tr><td class="centered">{$vtags}</td></tr>
            </table>
        </div>
    		    </td>
    		</tr>
    	    {/if}
    	    
    	    {if $sbtn eq "myvid"}
    		<tr>
    		    <td>
        <div id="mytags" {if $smarty.session.mytags eq "off"}style="display: none;"{else}style="display: block;"{/if}>
            <table width="100%" cellpadding=5 cellspacing=0 border=0 align="left">
                <tr>
                    <td class="centered">{if $mytags eq ""}{$err_notags}{else}{$mytags}{/if}</td>
                </tr>
            </table>
        </div>
    		    </td>
    		</tr>
    	    {/if}
    	    
    	    {if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "ufavs" or $sbtn eq "mql"}
    		<tr>
    		    <td>
        <div id="myfavvtags" {if $smarty.session.mytags eq "off"}style="display: none;"{else}style="display: block;"{/if}>
            <table width="100%" cellpadding=5 cellspacing=0 border=0 align="left">
                <tr>
                    <td class="centered">{$vtags}</td>
                </tr>
            </table>
        </div>
    		    </td>
    		</tr>
    	    {/if}
    	    
    		<tr>
    		    <td>
	{if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "ufavs" or $sbtn eq "mql"}{if $sbtn eq "fav"}{assign var=loc value="my_favorites"}{elseif $sbtn eq "mpl2"}{assign var=loc value="my_playlists"}{elseif $sbtn eq "mql"}{assign var=loc value="my_quicklist"}{/if}
	    <div id="vlistview" {if $smarty.session.viewmode eq "list"}style="display: block;"{else}style="display: none;"{/if} class="">
	    <form name="vfilesel" method="post" action="">
	{else}
	    <div id="listview" {if $smarty.session.viewmode eq "list"}style="display: block;"{else}style="display: none;"{/if} class="">
	    <form name="filesel" method="post" action="">
	{/if}
                <table cellpadding=5 cellspacing=1 border=0 width="100%" align="left">
            	{if $sbtn eq "myvid" and $vids[0].vid ne ""}
            	    <tr>
            		<td class="" align="center" width="3%"><input type="checkbox" name="checkall" id="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmya(document.filesel['mid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmya(document.filesel['mid[]']); HideContent('actdiv'); {rdelim}"></td>
            		<td><a href="javascript:void(0)" onclick="if (document.getElementById('checkall').checked == false) {ldelim} document.getElementById('checkall').checked = true; checkAllmya(document.filesel['mid[]']); ShowContent('actdiv'); {rdelim} else if (document.getElementById('checkall').checked == true) {ldelim} document.getElementById('checkall').checked = false; uncheckAllmya(document.filesel['mid[]']); HideContent('actdiv'); {rdelim}">{$grid_txt1}</a></td>
            	    </tr>
            	{elseif ($sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "mql") and $vids[0].vid ne ""}
            	    <tr>
            		<td class="" align="center" width="3%"><input type="checkbox" name="vcheckall" id="vcheckall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmyfv(document.vfilesel['vmid[]']); ShowContent('vactdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmyfv(document.vfilesel['vmid[]']); HideContent('vactdiv'); {rdelim}"></td>
            		<td><a href="javascript:void(0)" onclick="if (document.getElementById('vcheckall').checked == false) {ldelim} document.getElementById('vcheckall').checked = true; checkAllmyfv(document.vfilesel['vmid[]']); ShowContent('vactdiv'); {rdelim} else if (document.getElementById('vcheckall').checked == true) {ldelim} document.getElementById('vcheckall').checked = false; uncheckAllmyfv(document.vfilesel['vmid[]']); HideContent('vactdiv'); {rdelim}">{$grid_txt1}</a></td>
            	    </tr>
            	{/if}
            	{section name=i loop=$vids}
                    <tr class="nbg">
                    {if $sbtn eq "myvid"}
                	<td class="th1" align="center"><input type="checkbox" name="mid[]" value="{$vids[i].vid}" onclick="ShowContent('actdiv')"></td>
            	    {elseif $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "mql"}
            		<td class="th1" align="center"><input type="checkbox" name="vmid[]" value="{$vids[i].vid}" onclick="ShowContent('vactdiv')"></td>
            	    {/if}
                        <td valign="top" class="th1" style="padding: 0px;">
			    {insert name=vid_to_key assign=key vid=$vids[i].vid}
			    {insert name=titlev assign=title vkey=$key}
                            {include file="_inc/inc_listv.tpl"}
                        </td>
                    </tr>
                {/section}
                
		{if $sbtn eq "myvid" and $vids[0].vid ne ""}
		    <tr><td colspan=2>{include file="_inc/inc_selectact1.tpl"}</td></tr>
		{elseif ($sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "mql") and $vids[0].vid ne ""}
            	    <tr>
            		<td colspan=2>
            		    <div id="vactdiv" style="display: none;">
            			<table cellpadding=0 cellspacing=0 border=0 align="left" width="100%">
            			    <tr>
            				<td class="" valign="top" width="185">
            				    <select name="vactions" class="selbox" {if $smarty.session.UID ne ""}onchange="if(this.selectedIndex == '1') {ldelim} HideContent('btn1vl'); ShowContent('btn2vl'); {rdelim} else {ldelim} ShowContent('btn1vl'); HideContent('btn2vl'); {rdelim}"{/if}>
            					<option value="{$inbox_acts}">{$inbox_acts}</option>
            					{if $smarty.session.UID ne ""}<option value="{$qlist_txt14}">{$qlist_txt14}</option>{/if}
            					{if $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "mql"}<option value="{$act_addfav}">{$act_addfav}</option>{/if}
            					{if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2"}<option value="{$qlist_txt1}">{$qlist_txt1}</option>{/if}
            					<option value="{$inbox_itblact6}">{$inbox_itblact6}</option>
            				    </select>
            				</td>
            				<td class="pl5">
                                            <div id="btn1vl" style="display: block;"><input type="submit" name="goact" value="{$btn_apply}" class="fb"></div>
                                            <div id="btn2vl" style="display: none;" class="p1">
                                            {if $sbtn eq "mpl2"}{insert name=get_video_playlists2 assign=vpl vkey=$smarty.request.vplkey}{else}{insert name=get_video_playlists assign=vpl}{/if}
                                            <table cellpadding="0" cellspacing="0" border="0" align="left" width="100%">
                                        	<tr>
                                        	    <td>
                                        	    {if $vpl[0].vkey ne ""}
                                            <table cellpadding="1" cellspacing="0" border="0" align="left" width="100%">
                                            {section name=i loop=$vpl}
                                                <tr>
                                                    <td width="1%"><input type="checkbox" name="vlpl[]" value="{$vpl[i].vkey}"></td>
                                                    <td align="left" width="99%">{$vpl[i].pname|spchar}</td>
                                                </tr>
                                            {/section}
                                            </table>
                                        	    {else}{$plist_txt63}{/if}
                                        	    </td>
                                        	</tr>
                                        	<tr>
                                        	    <td>
                                        	    {if $vpl[0].vkey ne ""}
                                            <table cellpadding="4" cellspacing="0" border="0" align="left" width="100%">
                                                <tr>
                                                    <td><input type="submit" name="goact" value="{$btn_apply}" class="fb"></td>
                                                </tr>
                                            </table>
                                        	    {/if}
                                        	    </td>
                                        	</tr>
                                    	    </table>
                                            </div>
                                        </td>
            			    </tr>
            			</table>
            		    </div>
            		</td>
            	    </tr>
		{/if}
        	    <tr>
        		<td colspan="2">
	    <table cellpadding=5 cellspacing=0 border=0 align="left" width="100%">
		<tr>
		    <td class="pag_bg">
		    {if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "ufavs" or $sbtn eq "mql"}
			{if $total eq "0" and $sbtn ne "mpl2"}{$mypl_videonone}{else}{$link}{/if}
		    {else}
			{$link}
		    {/if}
		    </td>
		</tr>
		    
                </table>
            </form>
        		</td>
        	    </tr>
	    </table>
	    </div>
			</td>
		    </tr>
        	    <tr>
        		<td>
            
        {if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "ufavs" or $sbtn eq "mql"}
            <div id="vgridview" {if $smarty.session.viewmode eq "grid"}style="display: block;"{else}style="display: none;"{/if}>
            <form name="gvfilesel" method="post" action="">
        {else}
    	    <div id="gridview" {if $smarty.session.viewmode eq "grid"}style="display: block;"{else}style="display: none;"{/if}>
    	    <form name="gvfilesel" method="post" action="">
        {/if}
    	    <table cellpadding="0" cellspacing="0" align="center">
    	    <tr>
    	    <td>
	    <table cellpadding=5 cellspacing=1 border=0 align="center">
            	{if $vids[0].vid ne "" and $sbtn eq "myvid"}
            	    <tr>
            		<td align="left" width="1%"><input type="checkbox" id="gcheckall" name="gcheckall" value="0" onclick="if (this.checked == true) {ldelim} vcheckAllmya(document.gvfilesel['gmid[]']); ShowContent('actdiv2'); {rdelim} else if (this.checked == false) {ldelim} vuncheckAllmya(document.gvfilesel['gmid[]']); HideContent('actdiv2'); {rdelim}"></td>
            		<td><a href="javascript:void(0)" onclick="if (document.getElementById('gcheckall').checked == false) {ldelim} document.getElementById('gcheckall').checked = true; vcheckAllmya(document.gvfilesel['gmid[]']); ShowContent('actdiv2'); {rdelim} else if (document.getElementById('gcheckall').checked == true) {ldelim} document.getElementById('gcheckall').checked = false; vuncheckAllmya(document.gvfilesel['gmid[]']); HideContent('actdiv2'); {rdelim}">{$grid_txt1}</a></td>
            	    </tr>
            	{elseif $vids[0].vid ne "" and ($sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "fav" or $sbtn eq "mql")}
            	    <tr>
            		<td align="left" width="1%"><input type="checkbox" id="gvcheckall" name="gvcheckall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmyfvg(document.gvfilesel['gvmid[]']); ShowContent('vactdiv2'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmyfvg(document.gvfilesel['gvmid[]']); HideContent('vactdiv2'); {rdelim}"></td>
            		<td><a href="javascript:void(0)" onclick="if (document.getElementById('gvcheckall').checked == false) {ldelim} document.getElementById('gvcheckall').checked = true; checkAllmyfvg(document.gvfilesel['gvmid[]']); ShowContent('vactdiv2'); {rdelim} else if (document.getElementById('gvcheckall').checked == true) {ldelim} document.getElementById('gvcheckall').checked = false; uncheckAllmyfvg(document.gvfilesel['gvmid[]']); HideContent('vactdiv2'); {rdelim}">{$grid_txt1}</a></td>
            	    </tr>
            	{/if}
            </table>
            </td>
            </tr>
            <tr>
            <td>
            <table cellpadding=5 cellspacing=0 border=0>
		<tr>
		    {section name=i loop=$vids}
		    {insert name=ad_status assign=check aname=file_ads_right}
                    {if $check eq "1" or $panel_rightlinks eq "1"}{assign var=items value=4}{else}{assign var=items value=5}{/if}
		    {if $smarty.section.i.index mod $items eq "0" and $smarty.section.i.index gt "0"}</tr><tr>{/if}
		    {insert name=vid_to_key assign=key vid=$vids[i].vid}
		    {insert name=titlev assign=title vkey=$key}
		    <td valign="top" class="nbg">
			<table cellpadding=0 cellspacing=1 border=0">
			    <tr>
				<td>
				    <table cellpadding=1 cellspacing=0 border=0>
					<tr>
					    <td>
						{include file="_inc/inc_gridv.tpl"}
					    </td>
					</tr>
				    </table>
				</td>
			    </tr>
			</table>
		    </td>
		    {/section}
		</tr>
	    </table>
	    </td>
	    </tr>
	    <tr>
	    <td>
	    {if $sbtn eq "myvid" and $vids[0].vid ne ""}
	    <table cellpadding=5 cellspacing=0 border=0 align="left" width="100%">
		<tr><td colspan=2>{include file="_inc/inc_selectact2.tpl"}</td></tr>
	    </table>
	    {elseif ($sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "mql") and $vids[0].vid ne ""}
		<table cellpadding=5 cellspacing=0 border=0 align="left" width="100%">
            	    <tr>
            		<td colspan=2>
            		    <div id="vactdiv2" style="display: none;">
            			<table cellpadding=0 cellspacing=0 border=0 align="left" width="100%">
            			    <tr>
            				<td class="" width="185" valign="top">
            				    <select name="vactions2" class="selbox" {if $smarty.session.UID ne ""}onchange="if(this.selectedIndex == '1') {ldelim} HideContent('btn1vg'); ShowContent('btn2vg'); {rdelim} else {ldelim} ShowContent('btn1vg'); HideContent('btn2vg'); {rdelim}"{/if}>
            					<option value="{$inbox_acts}">{$inbox_acts}</option>
            					{if $smarty.session.UID ne ""}<option value="{$qlist_txt14}">{$qlist_txt14}</option>{/if}
            					{if $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "mql"}<option value="{$act_addfav}">{$act_addfav}</option>{/if}
            					{if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2"}<option value="{$qlist_txt1}">{$qlist_txt1}</option>{/if}
            					<option value="{$inbox_itblact6}">{$inbox_itblact6}</option>
            				    </select>
            				</td>
            				<td class="pl5">
                                            <div id="btn1vg" style="display: block;"><input type="submit" name="goact2" value="{$btn_apply}" class="fb"></div>
                                            <div id="btn2vg" style="display: none;" class="p1">
                                            {if $sbtn eq "mpl2"}{insert name=get_video_playlists2 assign=vpl vkey=$smarty.request.vplkey}{else}{insert name=get_video_playlists assign=vpl}{/if}
                                            <table cellpadding="0" cellspacing="0" border="0" align="left" width="100%">
                                        	<tr>
                                        	    <td>
                                        	    {if $vpl[0].vkey ne ""}
                                            <table cellpadding="1" cellspacing="0" border="0" align="left" width="100%">
                                            {section name=i loop=$vpl}
                                                <tr>
                                                    <td width="1%"><input type="checkbox" name="vgpl[]" value="{$vpl[i].vkey}"></td>
                                                    <td align="left" width="99%">{$vpl[i].pname|spchar}</td>
                                                </tr>
                                            {/section}
                                            </table>
                                        	    {else}{$plist_txt63}{/if}
                                        	    </td>
                                        	</tr>
                                        	<tr>
                                        	    <td>
                                        	    {if $vpl[0].vkey ne ""}
                                            <table cellpadding="4" cellspacing="0" border="0" align="left" width="100%">
                                                <tr>
                                                    <td><input type="submit" name="goact2" value="{$btn_apply}" class="fb"></td>
                                                </tr>
                                            </table>
                                        	    {/if}
                                        	    </td>
                                        	</tr>
                                    	    </table>
                                            </div>
                                        </td>
            			    </tr>
            			</table>
            		    </div>
            		</td>
            	    </tr>
		</table>
	    {/if}
	    </form>
			</td>
		    </tr>
		    <tr>
			<td align="center">
			
	    <table cellpadding=5 cellspacing=0 border=0 align="left" width="100%">
		<tr>
		    <td class="pag_bg">
		    {if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "ufavs" or $sbtn eq "mql"}
			{if $total eq "0" and $sbtn ne "mpl2"}{$mypl_videonone}{else}{$link}{/if}
		    {else}
			{$link}
		    {/if}
		    </td>
		</tr>
	    </table>
			</td>
		    </tr>
		    
		</table>
		</div>
		</td>
	    </tr>
	</table>
	</td>
        
        <td valign="top" width="20%" class="lm">
            <table cellpadding=2 cellspacing=0 class="pt5" border=0 align="center">
            {if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "ufavs" or $sbtn eq "mql"}
        	{include file="_inc/inc_viewstagsmyfav.tpl"}
            {else}
                {include file="_inc/inc_viewstags.tpl"}
            {/if}
    	    </table><br>
        {if $panel_rightlinks eq "1"}
        {if $enable_audio eq "1"}
    	    <table cellpadding="0" cellspacing="0" align="center" border=0>
    		{if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "ufavs" or $sbtn eq "mql"}{include file="_inc/inc_browseafav.tpl"}{else}{include file="_inc/inc_browsea.tpl"}{/if}
            </table>
            <br>
        {/if}
        {if $enable_images eq "1"}
            <table cellpadding="0" cellspacing="0" align="center" border=0>
                {if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "ufavs" or $sbtn eq "mql"}{include file="_inc/inc_browseifav.tpl"}{else}{include file="_inc/inc_browsei.tpl"}{/if}
            </table>
        {/if}
        {/if}
    	{if $check eq "1"}
    	    {include file="ads/file_ads_right.tpl"}
        {/if}
        </td>
    </tr>
</table>
