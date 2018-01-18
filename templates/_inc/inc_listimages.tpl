<table border="0" align="center" cellpadding="5" cellspacing="0" class="width950">
    <tr>
	<td valign="top" width="20%" class="lm">
	{insert name=ad_status assign=check aname=file_ads_right}
	{insert name=ad_status assign=checkleft aname=file_ads_left}
            <table cellpadding=2 cellspacing=0 class="pt5" border=0 align="center">
            {if $btn eq "baudio" or $btn eq "bimage" or $btn eq "bvideo"}
                {include file="_inc/inc_browsecateg.tpl"}
            {/if}
            </table>{if $btn eq "bvideo" or $btn eq "bimage" or $btn eq "baudio"}<br>{/if}
            <table cellpadding=2 cellspacing=0 class="{if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "mql" or $sbtn eq "ufavs" or $sbtn eq "myaud" or $sbtn eq "myimg" or $sbtn eq "myvid"}pt5{/if}" border=0 align="center">
            {if $smarty.session.UID ne "" and $panel_mylinks eq "1"}
        	{if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "ufavs" or $sbtn eq "mql"}
        	{include file="_inc/inc_mylinksfi.tpl"}
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
	    {if $smarty.request.iplkey ne ""}
		<tr>
		    <td>
	    <table align="left" width="100%">
        	<tr><td align="left">{include file="_inc/inc_listipl.tpl"}</td></tr>
    	    </table>
    		    </td>
    		</tr>
    	    {/if}
        
    	    {if $btn eq "bimage"}
    		<tr>
    		    <td>
        <div id="imagetags" {if $smarty.session.imagetags eq "off"}style="display: none;"{else}style="display: block;"{/if}>
            <table width="100%" cellpadding="5" cellspacing="0" border="0" align="left">
                <tr><td class="centered">{$itags}</td></tr>
            </table>
        </div>
    		    </td>
    		</tr>
    	    {/if}
    	    
    	    {if $sbtn eq "myimg"}
    		<tr>
    		    <td>
        <div id="mytags" {if $smarty.session.mytags eq "off"}style="display: none;"{else}style="display: block;"{/if}>
            <table width="100%" cellpadding="5" cellspacing="0" border="0" align="left">
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
        <div id="myfavitags" {if $smarty.session.mytags eq "off"}style="display: none;"{else}style="display: block;"{/if}>
            <table width="100%" cellpadding=5 cellspacing=0 border=0 align="left">
                <tr>
                    <td class="centered">{$itags}</td>
                </tr>
            </table>
        </div>
    		    </td>
    		</tr>
    	    {/if}
        
    		<tr>
    		    <td>
	{if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "ufavs" or $sbtn eq "mql"}{if $sbtn eq "fav"}{assign var=loc value="my_favorites"}{elseif $sbtn eq "mql"}{assign var=loc value="my_quicklist"}{elseif $sbtn eq "mpl2"}{assign var=loc value="my_playlists"}{/if}
	    <div id="ilistview" {if $smarty.session.viewmode eq "list" or $smarty.request.iaction ne ""}style="display: block;"{else}style="display: none;"{/if} class="">
	    <form name="ifilesel" method="post" action="">
	{else}
	    <div id="listview" {if $smarty.session.viewmode eq "list"}style="display: block;"{else}style="display: none;"{/if} class="">
	    <form name="filesel" method="post" action="">
	{/if}
	
	    <table cellpadding=5 cellspacing=1 border=0 width="100%" align="left">
                {if $sbtn eq "myimg" and $imgs[0].vid ne ""}
                    <tr>
                        <td class="" align="center" width="3%"><input type="checkbox" name="checkall" id="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmya(document.filesel['mid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmya(document.filesel['mid[]']); HideContent('actdiv'); {rdelim}"></td>
                        <td><a href="javascript:void(0)" onclick="if (document.getElementById('checkall').checked == false) {ldelim} document.getElementById('checkall').checked = true; checkAllmya(document.filesel['mid[]']); ShowContent('actdiv'); {rdelim} else if (document.getElementById('checkall').checked == true) {ldelim} document.getElementById('checkall').checked = false; uncheckAllmya(document.filesel['mid[]']); HideContent('actdiv'); {rdelim}">{$grid_txt1}</a></td>
                    </tr>
                {elseif ($sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "mql") and $imgs[0].vid ne ""}
                    <tr>
                        <td class="" align="center" width="3%"><input type="checkbox" name="icheckall" id="icheckall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmyfi(document.ifilesel['imid[]']); ShowContent('iactdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmyfi(document.ifilesel['imid[]']); HideContent('iactdiv'); {rdelim}"></td>
                        <td><a href="javascript:void(0)" onclick="if (document.getElementById('icheckall').checked == false) {ldelim} document.getElementById('icheckall').checked = true; checkAllmyfi(document.ifilesel['imid[]']); ShowContent('iactdiv'); {rdelim} else if (document.getElementById('icheckall').checked == true) {ldelim} document.getElementById('icheckall').checked = false; uncheckAllmyfi(document.ifilesel['imid[]']); HideContent('iactdiv'); {rdelim}">{$grid_txt1}</a></td>
                    </tr>
                {/if}
            
		{section name=i loop=$imgs}
		    <tr class="nbg">
		    {if $sbtn eq "myimg"}
			<td class="th1" align="center"><input type="checkbox" name="mid[]" value="{$imgs[i].vid}" onclick="ShowContent('actdiv')"></td>
		    {elseif $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "mql"}
			<td class="th1" align="center"><input type="checkbox" name="imid[]" value="{$imgs[i].vid}" onclick="ShowContent('iactdiv')"></td> 
		    {/if}
			<td valign="top" class="th1" style="padding: 0px;">
			    {insert name=vid_to_key_image assign=keyi vid=$imgs[i].vid}
			    {insert name=titlei assign=title vkey=$keyi}
			    {include file="_inc/inc_listi.tpl"}
			</td>
		    </tr>
		{/section}
		
		{if $sbtn eq "myimg" and $imgs[0].vid ne ""}
		    <tr><td colspan=2>{include file="_inc/inc_selectact1.tpl"}</td></tr>
		{elseif ($sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "mql") and $imgs[0].vid ne ""}
		    <tr>
			<td colspan=2>
			<div id="iactdiv" style="display: none;">
                    	    <table cellpadding=0 cellspacing=0 border=0 align="left" width="100%">
                        	<tr>
                            	    <td class="" valign="top" width="185">
                                	<select name="iactions" class="selbox" {if $smarty.session.UID ne ""}onchange="if(this.selectedIndex == '1') {ldelim} HideContent('btn1il'); ShowContent('btn2il'); {rdelim} else {ldelim} ShowContent('btn1il'); HideContent('btn2il'); {rdelim}"{/if}>
                                	    <option value="{$inbox_acts}">{$inbox_acts}</option>
                                	    {if $smarty.session.UID ne ""}<option value="{$qlist_txt14}">{$qlist_txt14}</option>{/if}
                                	    {if $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "mql"}<option value="{$act_addfav}">{$act_addfav}</option>{/if}
                                	    {if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2"}<option value="{$qlist_txt1}">{$qlist_txt1}</option>{/if}
                                	    <option value="{$inbox_itblact6}">{$inbox_itblact6}</option>
                                	</select>
                            	    </td>
                            	    <td class="pl5" valign="top">
                            		<div id="btn1il" style="display: block;"><input type="submit" name="igoact" value="{$btn_apply}" class="fb"></div>
                                        <div id="btn2il" style="display: none;" class="p1">
                                    	    {if $sbtn eq "mpl2"}{insert name=get_image_playlists2 assign=ipl vkey=$smarty.request.iplkey}{else}{insert name=get_image_playlists assign=ipl}{/if}
                                            <table cellpadding="0" cellspacing="0" border="0" align="left" width="100%">
                                        	<tr>
                                        	    <td>
                                        	    {if $ipl[0].vkey ne ""}
                                            <table cellpadding="1" cellspacing="0" border="0" align="left" width="100%">
                                            {section name=i loop=$ipl}
                                                <tr>
                                                    <td width="1%"><input type="checkbox" name="ilpl[]" value="{$ipl[i].vkey}"></td>
                                                    <td align="left" width="99%">{$ipl[i].pname|spchar}</td>
                                                </tr>
                                            {/section}
                                            </table>
                                        	    {else}{$plist_txt63}{/if}
                                        	    </td>
                                        	</tr>
                                        	<tr>
                                        	    <td>
                                        	    {if $ipl[0].vkey ne ""}
                                            <table cellpadding="4" cellspacing="0" border="0" align="left" width="100%">
                                                <tr>
                                                    <td><input type="submit" name="igoact" value="{$btn_apply}" class="fb"></td>
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
		
	    </form>
		    <tr>
			<td colspan="2">
	    <table cellpadding=5 cellspacing=0 border=0 align="left" width="100%">
		<tr>
		    <td class="pag_bg">
		    {if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "ufavs" or $sbtn eq "mql"}
			{if $totali eq "0" and $sbtn ne "mpl2"}{$mypl_imagenone}{else}{$linki}{/if}
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
		<tr>
		    <td>    
        {if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "ufavs" or $sbtn eq "mql"}
            <div id="igridview" {if $smarty.session.viewmode eq "grid"}style="display: block;"{else}style="display: none;"{/if}>
            <form name="gifilesel" method="post" action="">
        {else}
    	    <div id="gridview" {if $smarty.session.viewmode eq "grid"}style="display: block;"{else}style="display: none;"{/if}>
    	    <form name="gifilesel" method="post" action="">
        {/if}
    	    <table cellpadding="0" cellspacing="0" align="center" border=0>
    	    <tr>
    	    <td>
	    <table cellpadding=5 cellspacing=1 border=0 align=left>
                {if $imgs[0].vid ne "" and $sbtn eq "myimg"}
                    <tr>
                        <td align="left" width="1%"><input type="checkbox" id="gcheckall" name="gcheckall" value="0" onclick="if (this.checked == true) {ldelim} icheckAllmya(document.gifilesel['gmid[]']); ShowContent('actdiv2'); {rdelim} else if (this.checked == false) {ldelim} iuncheckAllmya(document.gifilesel['gmid[]']); HideContent('actdiv2'); {rdelim}"></td>
                        <td><a href="javascript:void(0)" onclick="if (document.getElementById('gcheckall').checked == false) {ldelim} document.getElementById('gcheckall').checked = true; icheckAllmya(document.gifilesel['gmid[]']); ShowContent('actdiv2'); {rdelim} else if (document.getElementById('gcheckall').checked == true) {ldelim} document.getElementById('gcheckall').checked = false; iuncheckAllmya(document.gifilesel['gmid[]']); HideContent('actdiv2'); {rdelim}">{$grid_txt1}</a></td>
                    </tr>
                {elseif $imgs[0].vid ne "" and ($sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "fav" or $sbtn eq "mql")}
                    <tr>
                        <td align="left" width="1%"><input type="checkbox" id="gicheckall" name="gicheckall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmyfig(document.gifilesel['gimid[]']); ShowContent('iactdiv2'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmyfig(document.gifilesel['gimid[]']); HideContent('iactdiv2'); {rdelim}"></td>
                        <td><a href="javascript:void(0)" onclick="if (document.getElementById('gicheckall').checked == false) {ldelim} document.getElementById('gicheckall').checked = true; checkAllmyfig(document.gifilesel['gimid[]']); ShowContent('iactdiv2'); {rdelim} else if (document.getElementById('gicheckall').checked == true) {ldelim} document.getElementById('gicheckall').checked = false; uncheckAllmyfig(document.gifilesel['gimid[]']); HideContent('iactdiv2'); {rdelim}">{$grid_txt1}</a></td>
                    </tr>
                {/if}
            </table>
    	    </td>
    	    </tr>
    	    <tr>
    	    <td>
	    <table cellpadding=6 cellspacing=0 border=0>
		<tr>
		    {section name=i loop=$imgs}
		    {insert name=ad_status assign=check aname=file_ads_right}
                    {if $check eq "1" or $panel_rightlinks eq "1"}{assign var=items value=4}{else}{assign var=items value=5}{/if}
		    {if $smarty.section.i.index mod $items eq "0" and $smarty.section.i.index gt "0"}</tr><tr>{/if}
		    {insert name=vid_to_key_image assign=keyi vid=$imgs[i].vid}
		    {insert name=titlei assign=title vkey=$keyi}
		    <td valign="top" class="nbg">
			<table cellpadding=0 cellspacing=1 border="0">
			    <tr>
				<td>
				    <table cellpadding=1 cellspacing=0 border=0>
					<tr>
					    <td>
						{include file="_inc/inc_gridi.tpl"}
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
	    {if $sbtn eq "myimg" and $imgs[0].vid ne ""}
	    <table cellpadding=5 cellspacing=0 border=0 align="left" width="100%">
		<tr><td colspan=2>{include file="_inc/inc_selectact2.tpl"}</td></tr>
	    </table>
	    {elseif ($sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "mql") and $imgs[0].vid ne ""}
	    <table cellpadding=5 cellspacing=0 border=0 align="left" width="100%">
		<tr>
		    <td colspan=2>
			<div id="iactdiv2" style="display: none;">
			    <table cellpadding=0 cellspacing=0 border=0 align="left" width="100%">
				<tr>
				    <td class="" valign="top" width="185">
					<select name="iactions2" class="selbox" {if $smarty.session.UID ne ""}onchange="if(this.selectedIndex == '1') {ldelim} HideContent('btn1ig'); ShowContent('btn2ig'); {rdelim} else {ldelim} ShowContent('btn1ig'); HideContent('btn2ig'); {rdelim}"{/if}>
					    <option value="{$inbox_acts}">{$inbox_acts}</option>
					    {if $smarty.session.UID ne ""}<option value="{$qlist_txt14}">{$qlist_txt14}</option>{/if}
					    {if $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "mql"}<option value="{$act_addfav}">{$act_addfav}</option>{/if}
					    {if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2"}<option value="{$qlist_txt1}">{$qlist_txt1}</option>{/if}
					    <option value="{$inbox_itblact6}">{$inbox_itblact6}</option>
					</select>
				    </td>
                            	    <td class="pl5" valign="top">
                            		<div id="btn1ig" style="display: block;"><input type="submit" name="igoact2" value="{$btn_apply}" class="fb"></div>
                                        <div id="btn2ig" style="display: none;" class="p1">
                                        <table cellpadding="0" cellspacing="0" border="0" align="left" width="100%">
                                    	    <tr>
                                    		<td>
                                    	    {if $sbtn eq "mpl2"}{insert name=get_image_playlists2 assign=ipl vkey=$smarty.request.iplkey}{else}{insert name=get_image_playlists assign=ipl}{/if}
                                    	    {if $ipl[0].vkey ne ""}
                                            <table cellpadding="1" cellspacing="0" border="0" align="left" width="100%">
                                            {section name=i loop=$ipl}
                                                <tr>
                                                    <td width="1%"><input type="checkbox" name="igpl[]" value="{$ipl[i].vkey}"></td>
                                                    <td align="left" width="99%">{$ipl[i].pname|spchar}</td>
                                                </tr>
                                            {/section}
                                            </table>
                                    	    {else}{$plist_txt63}{/if}
                                        	</td>
                                    	    </tr>
                                    	    <tr>
                                    		<td>
                                    		{if $ipl[0].vkey ne ""}
                                            <table cellpadding="4" cellspacing="0" border="0" align="left" width="100%">
                                                <tr>
                                                    <td><input type="submit" name="igoact2" value="{$btn_apply}" class="fb"></td>
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
	    <td>
	    <table cellpadding=5 cellspacing=0 border=0 align="left" width="100%">
		<tr>
		    <td class="pag_bg">
		    {if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "ufavs" or $sbtn eq "mql"}
			{if $totali eq "0" and $sbtn ne "mpl2"}{$mypl_imagenone}{else}{$linki}{/if}
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
        	{include file="_inc/inc_viewstagsmyfavi.tpl"}
            {else}
                {include file="_inc/inc_viewstags.tpl"}
            {/if}
            </table><br>
        {if $panel_rightlinks eq "1"}
        {if $enable_audio eq "1"}
    	    <table cellpadding="0" cellspacing="0" align="center" border=0>
        	{include file="_inc/inc_browsea.tpl"}
    	    </table>
    	    <br>
    	{/if}
	{if $enable_videos eq "1"}
    	    <table cellpadding="0" cellspacing="0" align="center" border=0>
        	{if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "ufavs" or $sbtn eq "mql"}{include file="_inc/inc_browsevfav.tpl"}{else}{include file="_inc/inc_browsev.tpl"}{/if}
            </table>
        {/if}
        {/if}
	{if $check eq "1"}
    	    {include file="ads/file_ads_right.tpl"}
        {/if}
        </td>
    </tr>
</table>
