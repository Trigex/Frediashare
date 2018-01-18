<table cellpadding=0 cellspacing=0 border=0 width="100%" align="left">
    <tr>
        <td>
            <table class="br2" width="100%" cellspacing="0" cellpadding="5" border="0" align="left" style="border-left: 0px none; border-right: 0px none; border-top: 0px none;">
                <tr>
                    {if $sbtn eq "mysubs"}
                	<td class="nopad" align="right">
                	    <table cellpadding="3" cellspacing="0">
                		<tr>
                		    {if $smarty.request.pkey ne ""}<td><form name="vplshare"><input type="button" name="vplshare" class="fb" style="width: 110px;" value="{$plist_txt45}" onclick="window.open('{$base_url}/share_video_playlist/{$smarty.request.pkey}', 'pshare', 'top=25,left=0,width=640,height=480,resizable=0');"></form></td>{/if}
                		    {if $smarty.request.user ne ""}<td align="right"><form name="unsubform" method="post" action="{$base_url}/my_subscriptions/unsubscribe/{$smarty.request.user}"><input type="button" class="fb" name="btn_unsub" value="{$uch_txt15}" onclick="if (confirm('{$uch_shtxt17}')) location.href='{$base_url}/my_subscriptions/unsubscribe/{if $smarty.request.ftype eq "video_favorites" or $smarty.request.ftype eq "image_favorites" or $smarty.request.ftype eq "audio_favorites"}fav/{/if}{if $smarty.request.pkey eq ""}{$smarty.request.user}{else}pl/{$smarty.request.pkey}{/if}';"></form></td>{/if}
                		</tr>
                	    </table>
                	</td>
            	    {/if}
                </tr>
            </table>
        </td>
    </tr>
    <tr>
	<td>
            <div id="listview" {if $smarty.session.viewmode eq "list"}style="display: block;"{else}style="display: none;"{/if}>
		<table cellpadding=0 cellspacing=0 border=0 width="100%" align="left">
	    	    <tr>
	    		<td>
	    		    <form name="filesel" method="post" action="">
            			<table cellpadding=5 cellspacing=1 border=0 width="100%">
            			{if $sbtn eq "mysubs" and $vids[0].vid ne ""}
            			    <tr>
            				<td class="" align="center" width="3%"><input type="checkbox" name="checkall" id="checkall" value="0" onclick="if (this.checked == true) {ldelim} checkAllmya(document.filesel['mid[]']); ShowContent('actdiv'); {rdelim} else if (this.checked == false) {ldelim} uncheckAllmya(document.filesel['mid[]']); HideContent('actdiv'); {rdelim}"></td>
            				<td><a href="javascript:void(0)" onclick="if (document.getElementById('checkall').checked == false) {ldelim} document.getElementById('checkall').checked = true; checkAllmya(document.filesel['mid[]']); ShowContent('actdiv'); {rdelim} else if (document.getElementById('checkall').checked == true) {ldelim} document.getElementById('checkall').checked = false; uncheckAllmya(document.filesel['mid[]']); HideContent('actdiv'); {rdelim}">{$grid_txt1}</td>
            				<td class="nopad" align="right"><span class="gr">{$adm_sorttxt}</span>
            				    <a href="{$base_url}/my_subscriptions/{$smarty.request.user}/{$smarty.request.ftype}{if $smarty.request.pkey ne ""}/pl/{$smarty.request.pkey}{/if}/{if $smarty.request.page ne ""}page{$smarty.request.page}/{/if}f1"><span class="{if $smarty.request.filter eq "f1"}act{/if}">{$adm_play_vlogoth2}</span></a>{$myfiles_delim}
            				    <a href="{$base_url}/my_subscriptions/{$smarty.request.user}/{$smarty.request.ftype}{if $smarty.request.pkey ne ""}/pl/{$smarty.request.pkey}{/if}/{if $smarty.request.page ne ""}page{$smarty.request.page}/{/if}f2"><span class="{if $smarty.request.filter eq "f2"}act{/if}">{$uch_shtxt16}</span></a>{$myfiles_delim}
            				    <a href="{$base_url}/my_subscriptions/{$smarty.request.user}/{$smarty.request.ftype}{if $smarty.request.pkey ne ""}/pl/{$smarty.request.pkey}{/if}/{if $smarty.request.page ne ""}page{$smarty.request.page}/{/if}f3"><span class="{if $smarty.request.filter eq "f3" or $smarty.request.filter eq ""}act{/if}">{$uch_shtxt15}</span></a>{$myfiles_delim}
            				    <a href="{$base_url}/my_subscriptions/{$smarty.request.user}/{$smarty.request.ftype}{if $smarty.request.pkey ne ""}/pl/{$smarty.request.pkey}{/if}/{if $smarty.request.page ne ""}page{$smarty.request.page}/{/if}f4"><span class="{if $smarty.request.filter eq "f4"}act{/if}">{$adm_sortviews}</span></a>{$myfiles_delim}
            				    <a href="{$base_url}/my_subscriptions/{$smarty.request.user}/{$smarty.request.ftype}{if $smarty.request.pkey ne ""}/pl/{$smarty.request.pkey}{/if}/{if $smarty.request.page ne ""}page{$smarty.request.page}/{/if}f5"><span class="{if $smarty.request.filter eq "f5"}act{/if}">{$adm_sortrate}</span></a>
            				</td>
            			    </tr>
            			{/if}
            			{section name=i loop=$vids}
                		    <tr class="nbg">
                		    {if $sbtn eq "mysubs"}
                			<td class="th1" align="center"><input type="checkbox" name="mid[]" value="{$vids[i].vid}" onclick="ShowContent('actdiv')"></td>
            			    {/if}
                    			<td valign="top" class="th1" style="padding: 0px;" colspan="2">
					    {insert name=vid_to_key assign=key vid=$vids[i].vid}
					    {insert name=titlev assign=title vkey=$key}
                        		    {include file="_inc/inc_listv.tpl"}
                    			</td>
                		    </tr>
            			{/section}
				{if $sbtn eq "mysubs" and $vids[0].vid ne ""}
				    <tr><td colspan=3>{include file="_inc/inc_selectact7.tpl"}</td></tr>
				{/if}
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
    	    <div id="gridview" {if $smarty.session.viewmode eq "grid"}style="display: block;"{else}style="display: none;"{/if}>
    		<form name="gvfilesel" method="post" action="">
    		    <table cellpadding=0 cellspacing=0 border=0 align=left width="100%">
    			<tr>
    			    <td>
				<table cellpadding=5 cellspacing=1 border=0 align=left>
            			{if $vids[0].vid ne "" and $sbtn eq "mysubs"}
            			    <tr>
            				<td align="left" width="1%"><input type="checkbox" id="gcheckall" name="gcheckall" value="0" onclick="if (this.checked == true) {ldelim} vcheckAllmya(document.gvfilesel['gmid[]']); ShowContent('actdiv2'); {rdelim} else if (this.checked == false) {ldelim} vuncheckAllmya(document.gvfilesel['gmid[]']); HideContent('actdiv2'); {rdelim}"></td>
            				<td><a href="javascript:void(0)" onclick="if (document.getElementById('gcheckall').checked == false) {ldelim} document.getElementById('gcheckall').checked = true; vcheckAllmya(document.gvfilesel['gmid[]']); ShowContent('actdiv2'); {rdelim} else if (document.getElementById('gcheckall').checked == true) {ldelim} document.getElementById('gcheckall').checked = false; vuncheckAllmya(document.gvfilesel['gmid[]']); HideContent('actdiv2'); {rdelim}">{$grid_txt1}</td>
            				<td align="right" class="nopad"><span class="gr">{$adm_sorttxt}</span>
            				    <a href="{$base_url}/my_subscriptions/{$smarty.request.user}/{$smarty.request.ftype}{if $smarty.request.pkey ne ""}/pl/{$smarty.request.pkey}{/if}/{if $smarty.request.page ne ""}page{$smarty.request.page}/{/if}f1"><span class="{if $smarty.request.filter eq "f1"}act{/if}">{$adm_play_vlogoth2}</span></a>{$myfiles_delim}
            				    <a href="{$base_url}/my_subscriptions/{$smarty.request.user}/{$smarty.request.ftype}{if $smarty.request.pkey ne ""}/pl/{$smarty.request.pkey}{/if}/{if $smarty.request.page ne ""}page{$smarty.request.page}/{/if}f2"><span class="{if $smarty.request.filter eq "f2"}act{/if}">{$uch_shtxt16}</span></a>{$myfiles_delim}
            				    <a href="{$base_url}/my_subscriptions/{$smarty.request.user}/{$smarty.request.ftype}{if $smarty.request.pkey ne ""}/pl/{$smarty.request.pkey}{/if}/{if $smarty.request.page ne ""}page{$smarty.request.page}/{/if}f3"><span class="{if $smarty.request.filter eq "f3" or $smarty.request.filter eq ""}act{/if}">{$uch_shtxt15}</span></a>{$myfiles_delim}
            				    <a href="{$base_url}/my_subscriptions/{$smarty.request.user}/{$smarty.request.ftype}{if $smarty.request.pkey ne ""}/pl/{$smarty.request.pkey}{/if}/{if $smarty.request.page ne ""}page{$smarty.request.page}/{/if}f4"><span class="{if $smarty.request.filter eq "f4"}act{/if}">{$adm_sortviews}</span></a>{$myfiles_delim}
            				    <a href="{$base_url}/my_subscriptions/{$smarty.request.user}/{$smarty.request.ftype}{if $smarty.request.pkey ne ""}/pl/{$smarty.request.pkey}{/if}/{if $smarty.request.page ne ""}page{$smarty.request.page}/{/if}f5"><span class="{if $smarty.request.filter eq "f5"}act{/if}">{$adm_sortrate}</span></a>
            				</td>
            			    </tr>
            			{/if}
        			</table>
        		    </td>
        		</tr>
        		<tr>
        		    <td>
        			<table cellpadding=5 cellspacing=1 border=0 align=center>
				    <tr>
				    {section name=i loop=$vids}
				    {insert name=ad_status assign=check aname=file_ads_right}
                		    {if $check eq "1" or $panel_rightlinks eq "1"}{assign var=items value=4}{else}{assign var=items value=5}{/if}
				    {if $smarty.section.i.index mod $items eq "0" and $smarty.section.i.index gt "0"}</tr><tr>{/if}
				    {insert name=vid_to_key assign=key vid=$vids[i].vid}
				    {insert name=titlev assign=title vkey=$key}
					<td valign="top" class="nbg">
					    <table cellpadding=0 cellspacing=0 border="0">
						<tr>
						    <td>
							<table cellpadding=0 cellspacing=0 border=0>
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
			    {if $sbtn eq "mysubs" and $vids[0].vid ne ""}
				<table cellpadding=5 cellspacing=0 border=0 align="center" width="100%">
				    <tr><td colspan=2>{include file="_inc/inc_selectact8.tpl"}</td></tr>
				</table>
			    {/if}
			    </td>
			</tr>
		    </table>
		</form>
	    </div>
        </td>
    </tr>
    <tr>
	<td>
	    <table cellpadding=5 cellspacing=0 border=0 align="left" width="100%">
		<tr>
		    <td class="pag_bg">
		    {if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "ufavs"}
			{if $total eq "0"}{$mypl_videonone}{else}{$link}{/if}
		    {else}
			{$link}
		    {/if}
		    </td>
		</tr>
	    </table>
	</td>
    </tr>
</table>
