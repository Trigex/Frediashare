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
        	{include file="_inc/inc_mylinksfa.tpl"}
        	{else}
                {include file="_inc/inc_mylinks.tpl"}
                {/if}
            {/if}
            </table>
            {if $checkleft eq "1"}
        	{include file="ads/file_ads_left.tpl"}
            {/if}
        </td> 
        
	<td valign="top" class="nopad_bg" {if $check eq "1" or $panel_rightlinks eq "1"}width="65%"{else}width="80%"{/if} align="left">
	    <table width="100%" cellpadding="0" cellspacing="0" align="left">
	    {if $smarty.request.aplkey ne ""}
		<tr>
		    <td>
			<table align="left" width="100%" cellpadding="0" cellspacing="0">
    			    <tr><td align="left">{include file="_inc/inc_listapl.tpl"}</td></tr>
    			</table>
    		    </td>
    		</tr>
    	    {/if}
	    {if $btn eq "baudio"}
		<tr>
		    <td>
		    <div id="audiotags" {if $smarty.session.audiotags eq "off"}style="display: none;"{else}style="display: block;"{/if}>
        		<table cellpadding="5" cellspacing="0" border="0" align="left" width="100%">
            		    <tr><td class="centered">{$atags}</td></tr>
        		</table>
        	    </div>
        	    </td>
        	</tr>
    	    {/if}
    	    {if $sbtn eq "myaud"}
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
    			<div id="myfavatags" {if $smarty.session.mytags eq "off"}style="display: none;"{else}style="display: block;"{/if}>
        		    <table width="100%" cellpadding=5 cellspacing=0 border=0 align="left">
            			<tr>
                		    <td class="centered">{$atags}</td>
        			</tr>
        		    </table>
    			</div>
    		    </td>
    		</tr>
    	    {/if}
    		<tr>
    		    <td>
    			<table cellpadding="0" cellspacing="0" border="0" align="left" width="100%">
    			    <tr>
    				<td>
				{if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "ufavs" or $sbtn eq "mql" or $sbtn eq "mpl2"}{if $sbtn eq "fav"}{assign var=loc value="my_favorites"}{elseif $sbtn eq "mpl2"}{assign var=loc value="my_playlists"}{elseif $sbtn eq "mql"}{assign var=loc value="my_quicklist"}{/if}
				    <div id="alistview" {if $smarty.session.viewmode eq "list"}style="display: block;"{else}style="display: none;"{/if} class="">
					<form name="afilesel" method="post" action="">
				{else}
				    <div id="listview" {if $smarty.session.viewmode eq "list"}style="display: block;"{else}style="display: none;"{/if} class="">
					<form name="filesel" method="post" action="">
				{/if}
            				    <table cellpadding=5 cellspacing=1 border=0 align="left" width="100%">
            				    {if $sbtn eq "myaud" and $auds[0].vid ne ""}
            					<tr>
            					    <td class="" align="center" width="3%"><input type="checkbox" id="checkall" name="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmya(document.filesel['mid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmya(document.filesel['mid[]']); HideContent('actdiv'); {rdelim}"></td>
            					    <td><a href="javascript:void(0)" onclick="if (document.getElementById('checkall').checked == false) {ldelim} document.getElementById('checkall').checked = true; checkAllmya(document.filesel['mid[]']); ShowContent('actdiv'); {rdelim} else if (document.getElementById('checkall').checked == true) {ldelim} document.getElementById('checkall').checked = false; auncheckAllmya(document.filesel['mid[]']); HideContent('actdiv'); {rdelim}">{$grid_txt1}</a></td>
            					</tr>
            				    {elseif ($sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "mql") and $auds[0].vid ne ""}
            					<tr>
            					    <td class="" align="center" width="3%"><input type="checkbox" name="acheckall" id="acheckall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmyfa(document.afilesel['amid[]']); ShowContent('aactdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmyfa(document.afilesel['amid[]']); HideContent('aactdiv'); {rdelim}"></td>
            					    <td><a href="javascript:void(0)" onclick="if (document.getElementById('acheckall').checked == false) {ldelim} document.getElementById('acheckall').checked = true; checkAllmyfa(document.afilesel['amid[]']); ShowContent('aactdiv'); {rdelim} else if (document.getElementById('acheckall').checked == true) {ldelim} document.getElementById('acheckall').checked = false; uncheckAllmyfa(document.afilesel['amid[]']); HideContent('aactdiv'); {rdelim}">{$grid_txt1}</a></td>
            					</tr>
            				    {/if}
            				    {section name=i loop=$auds}
                				<tr class="nbg">
                				{if $sbtn eq "myaud"}
                				    <td class="th1" align="center"><input type="checkbox" name="mid[]" value="{$auds[i].vid}" onclick="ShowContent('actdiv')"></td>
            					{elseif $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "mql"}
            					    <td class="th1" align="center"><input type="checkbox" name="amid[]" value="{$auds[i].vid}" onclick="ShowContent('aactdiv')"></td>
            					{/if}
                    				    <td valign="top" class="th1" style="padding: 0px;">
							{insert name=vid_to_key_audio assign=keya vid=$auds[i].vid}
							{insert name=titlea assign=title vkey=$keya}
                        				{include file="_inc/inc_lista.tpl"}
                    				    </td>
                				</tr>
            				    {/section}
                
            				    {if $sbtn eq "myaud" and $auds[0].vid ne ""}
            					<tr><td colspan=2>{include file="_inc/inc_selectact1.tpl"}</td></tr>
					    {elseif ($sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "mql") and $auds[0].vid ne ""}
            					<tr>
            					    <td colspan=2>
            						<div id="aactdiv" style="display: none;">
            						    <table cellpadding=0 cellspacing=0 border=0 align="left" width="100%">
            							<tr>
            							    <td class="" valign="top" width="185">
            								<select name="aactions" class="selbox" {if $smarty.session.UID ne ""}onchange="if(this.selectedIndex == '1') {ldelim} HideContent('btn1al'); ShowContent('btn2al'); {rdelim} else {ldelim} ShowContent('btn1al'); HideContent('btn2al'); {rdelim}"{/if}>
            								    <option value="{$inbox_acts}">{$inbox_acts}</option>
            								    {if $smarty.session.UID ne ""}<option value="{$qlist_txt14}">{$qlist_txt14}</option>{/if}
            								    {if $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "mql"}<option value="{$act_addfav}">{$act_addfav}</option>{/if}
            								    {if $sbtn eq "fav" or $sbtn eq "mpl2" or $sbtn eq "mpl"}<option value="{$qlist_txt1}">{$qlist_txt1}</option>{/if}
            								    <option value="{$inbox_itblact6}">{$inbox_itblact6}</option>
            								</select>
            							    </td>
            							    <td class="pl5">
            								<div id="btn1al" style="display: block;"><input type="submit" name="agoact" value="{$btn_apply}" class="fb"></div>
                                					<div id="btn2al" style="display: none;" class="p1">
                                					{if $sbtn eq "mpl2"}{insert name=get_audio_playlists2 assign=upl vkey=$smarty.request.aplkey}{else}{insert name=get_audio_playlists assign=upl}{/if}
                                    					<table cellpadding="0" cellspacing="0" border="0" align="left" width="100%">
                                    					    <tr>
                                    						<td>
                                    						{if $upl[0].vkey ne ""}
                                        				    <table cellpadding="1" cellspacing="0" border="0" align="left" width="100%">
                                        				    {section name=i loop=$upl}
                                            					<tr>
                                                				    <td width="1%"><input type="checkbox" name="alpl[]" value="{$upl[i].vkey}"></td>
                                                				    <td align="left" width="99%">{$upl[i].pname|spchar}</td>
                                            					</tr>
                                            				    {/section}
                                        				    </table>
                                        					{else}{$plist_txt63}{/if}
                                    						</td>
                                    					    </tr>
                                    					    <tr>
                                    						<td>
                                    						{if $upl[0].vkey ne ""}
                                    					    <table cellpadding="4" cellspacing="0" border="0" align="left" width="100%">
                                        					<tr>
                                            					    <td><input type="submit" name="agoact" value="{$btn_apply}" class="fb"></td>
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
						{if $totala eq "0" and $sbtn ne "mpl2"}{$mypl_audionone}{else}{$linka}{/if}
					    {else}
						{$link}
					    {/if}
					    </td>
					</tr>
				    </table>
						    </td>
						</tr>
            				</table>
        			    </form>

        			</div>
    			    </td>
        		</tr>
        	    </table>
        	</td>
    	    </tr>
    	    
	    <tr>
		<td align="left">
    		{if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "ufavs" or $sbtn eq "mql"}
        	    <div id="agridview" {if $smarty.session.viewmode eq "grid"}style="display: block;"{else}style="display: none;"{/if}>
        		<form name="gafilesel" method="post" action="">
    		{else}
    		    <div id="gridview" {if $smarty.session.viewmode eq "grid"}style="display: block;"{else}style="display: none;"{/if}>
    			<form name="gafilesel" method="post" action="">
    		{/if}
    			<table cellpadding="0" cellspacing="0" align="center">
    			    <tr>
    			    <td>
			    <table cellpadding=5 cellspacing=1 border=0 align=center>
            		    {if $auds[0].vid ne "" and $sbtn eq "myaud"}
            			<tr>
            			    <td align="left" width="1%"><input type="checkbox" id="gcheckall" name="gcheckall" value="0" onclick="if (this.checked == true) {ldelim} acheckAllmya(document.gafilesel['gmid[]']); ShowContent('actdiv2'); {rdelim} else if (this.checked == false) {ldelim} auncheckAllmya(document.gafilesel['gmid[]']); HideContent('actdiv2'); {rdelim}"></td>
            			    <td><a href="javascript:void(0)" onclick="if (document.getElementById('gcheckall').checked == false) {ldelim} document.getElementById('gcheckall').checked = true; acheckAllmya(document.gafilesel['gmid[]']); ShowContent('actdiv2'); {rdelim} else if (document.getElementById('gcheckall').checked == true) {ldelim} document.getElementById('gcheckall').checked = false; auncheckAllmya(document.gafilesel['gmid[]']); HideContent('actdiv2'); {rdelim}">{$grid_txt1}</a></td>
            			</tr>
            		    {elseif $auds[0].vid ne "" and ($sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "fav" or $sbtn eq "mql")}
            			<tr>
            			    <td align="left" width="1%"><input type="checkbox" id="gacheckall" name="gacheckall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmyfag(document.gafilesel['gamid[]']); ShowContent('aactdiv2'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmyfag(document.gafilesel['gamid[]']); HideContent('aactdiv2'); {rdelim}"></td>
            			    <td><a href="javascript:void(0)" onclick="if (document.getElementById('gacheckall').checked == false) {ldelim} document.getElementById('gacheckall').checked = true; checkAllmyfag(document.gafilesel['gamid[]']); ShowContent('aactdiv2'); {rdelim} else if (document.getElementById('gacheckall').checked == true) {ldelim} document.getElementById('gacheckall').checked = false; uncheckAllmyfag(document.gafilesel['gamid[]']); HideContent('aactdiv2'); {rdelim}">{$grid_txt1}</a></td>
            			</tr>
            		    {/if}
        		    </table>
        		    </td>
        		    </tr>
        		    <tr>
        		    <td>
        		    <table cellpadding=5 cellspacing=0 border=0 align=center>
				<tr>
				{section name=i loop=$auds}
				{insert name=ad_status assign=check aname=file_ads_right}
                		{if $check eq "1" or $panel_rightlinks eq "1"}{assign var=items value=4}{else}{assign var=items value=5}{/if}
				{if $smarty.section.i.index mod $items eq "0" and $smarty.section.i.index gt "0"}</tr><tr>{/if}
				{insert name=vid_to_key_audio assign=keya vid=$auds[i].vid}
				{insert name=titlea assign=title vkey=$keya}
				    <td valign="top" class="nbg">
					<table cellpadding=0 cellspacing=1 border=0">
					    <tr>
						<td>
						    <table cellpadding=1 cellspacing=0 border=0>
							<tr>
							    <td>{include file="_inc/inc_grida.tpl"}</td>
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
			    <td align="center">
			    {if $sbtn eq "myaud" and $auds[0].vid ne ""}
			    <table cellpadding=5 cellspacing=0 border=0 align="left" width="100%">
				<tr><td colspan=2>{include file="_inc/inc_selectact2.tpl"}</td></tr>
			    </table>
			    {elseif ($sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "mql") and $auds[0].vid ne ""}
			    <table cellpadding=5 cellspacing=0 border=0 align="left" width="100%">
            			<tr>
            			    <td>
            				<div id="aactdiv2" style="display: none;">
            				    <table cellpadding=0 cellspacing=0 border=0 align="left" width="100%">
            					<tr>
            					    <td class="" width="185" valign="top">
            						<select name="aactions2" class="selbox" {if $smarty.session.UID ne ""}onchange="if(this.selectedIndex == '1') {ldelim} HideContent('btn1ag'); ShowContent('btn2ag'); {rdelim} else {ldelim} ShowContent('btn1ag'); HideContent('btn2ag'); {rdelim}"{/if}>
            						    <option value="{$inbox_acts}">{$inbox_acts}</option>
            						    {if $smarty.session.UID ne ""}<option value="{$qlist_txt14}">{$qlist_txt14}</option>{/if}
            						    {if $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "mql"}<option value="{$act_addfav}">{$act_addfav}</option>{/if}
            						    {if $sbtn eq "fav" or $sbtn eq "mpl2" or $sbtn eq "mpl"}<option value="{$qlist_txt1}">{$qlist_txt1}</option>{/if}
            						    <option value="{$inbox_itblact6}">{$inbox_itblact6}</option>
            						</select>
            					    </td>
            					    <td class="pl5" align="left" valign="top">
            						<table cellpadding="0" cellspacing="0" border="0" align="left" width="100%">
            						    <tr>
            							<td>
            							    <div id="btn1ag" style="display: block;"><input type="submit" name="agoact2" value="{$btn_apply}" class="fb"></div>
            							</td>
            						    </tr>
            						    <tr>
            							<td>
                                				    <div id="btn2ag" style="display: none;" class="p1">
                                				    {if $sbtn eq "mpl2"}{insert name=get_audio_playlists2 assign=upl vkey=$smarty.request.aplkey}{else}{insert name=get_audio_playlists assign=upl}{/if}
                                        				<table cellpadding="1" cellspacing="0" border="0" align="left" width="100%">
                                        				{if $upl[0].vkey ne ""}
                                        				{section name=j loop=$upl}
                                            				    <tr>
                                                				<td width="1%"><input type="checkbox" name="agpl[]" value="{$upl[j].vkey}"></td>
                                                				<td align="left" width="99%">{$upl[j].pname|spchar}</td>
                                            				    </tr>
                                            				{/section}
                                            				{else}
                                            				    <tr><td>{$plist_txt63}</td></tr>
                                            				{/if}
                                            				    <tr>
                                            					<td colspan="2">
                                            					{if $upl[0].vkey ne ""}
                                    						    <table cellpadding="0" cellspacing="0" border="0" align="left" width="100%">
                                        						<tr>
                                            						    <td><input type="submit" name="agoact2" value="{$btn_apply}" class="fb"></td>
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

			<table cellpadding=5 cellspacing=0 border=0 width="100%" align="left">
			    <tr>
				<td class="pag_bg">
				{if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "ufavs" or $sbtn eq "mql"}
				    {if $totala eq "0" and $sbtn ne "mpl2"}{$mypl_audionone}{else}{$linka}{/if}
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
        	{include file="_inc/inc_viewstagsmyfava.tpl"}
            {else}
                {include file="_inc/inc_viewstags.tpl"}
            {/if}
            </table><br>
        {if $panel_rightlinks eq "1"}
        {if $enable_images eq "1"}
    	    <table cellpadding="0" cellspacing="0" align="center" border=0>
                {include file="_inc/inc_browsei.tpl"}
            </table>
            <br>
        {/if}
        {if $enable_videos eq "1"}
            <table cellpadding="0" cellspacing="0" align="center" border=0>
                {include file="_inc/inc_browsev.tpl"}
            </table>
        {/if}
        {/if}
    	{if $check eq "1"}
    	    {include file="ads/file_ads_right.tpl"}
        {/if}
        </td>
    </tr>
</table>
