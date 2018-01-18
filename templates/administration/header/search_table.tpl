<!-- BEGIN HEADER SEARCH TABLE -->
			<table cellpadding=2 cellspacing=0 border=0 width="100%" align="center">
			    <tr>
				<td valign="top">
                                    {include file="administration/header/search_tabletoplinks.tpl"}
                                </td>
                            </tr>
                        </table><br>
                        
                        <table cellpadding=2 cellspacing=0 border=0 id="search" align=right>
			    <tr>
				<td>&nbsp;</td>
				<td align="right">
				<div id="search_opt">
				<ul id="options">
				    <li id="saudio" onclick="TabSearch('audios')">{$saudios} <span class="black"> | </span></li>
				    <li id="simage" onclick="TabSearch('images')">{$simages} <span class="black"> | </span></li>
				    <li id="svideo" onclick="TabSearch('videos')">{$svideos} <span class="black"> | </span></li>
				    <li id="smember" onclick="TabSearch('members')">{if $enable_channels eq "1"}{$uch_thl4}{else}{$smembers}{/if}
				    <li id="stags" onclick="TabSearch('tags')"></li>
				</ul>
				</div>
				</td>
			    </tr>
			    <tr>
				<td valign="top" class="pt4"><span class="search">{$stext}</span></td>
				<td align="center">
				<form name="searchform" method="post" action="{$admin_url}/search">
				<div id="audios" style="display: none;">
                                    <input type="text" id="boxA" class="ff" name="searcha" style="width: 240px; padding: 2px; font-style: italic;" value="{$search_t2}" onclick="this.value='';" onblur="if ( this.value == '' ) this.value='{$search_t2}';">
                                    <input type="button" value="{$sgo}" name="searchbtn" class="fb" style="padding: 1px;" onclick="if ( document.getElementById('boxA').value != '{$search_t2}' ) location.href='{$admin_url}/search/audios/'+document.getElementById('boxA').value; else location.href='{$admin_url}/search/audios';">
                                </div>
                                <div id="images" style="display: none;">
                                    <input type="text" id="boxI" class="ff" name="searchi" style="width: 240px; padding: 2px; font-style: italic;" value="{$search_t3}" onclick="this.value='';" onblur="if ( this.value == '' ) this.value='{$search_t3}';">
                                    <input type="button" value="{$sgo}" name="searchbtn" class="fb" style="padding: 1px;" onclick="if ( document.getElementById('boxI').value != '{$search_t3}' ) location.href='{$admin_url}/search/images/'+document.getElementById('boxI').value; else location.href='{$admin_url}/search/images';">
                                </div>
                                <div id="videos" style="display: none;">
                                    <input type="text" id="boxV" class="ff" name="searchv" style="width: 240px; padding: 2px; font-style: italic;" value="{$search_t4}" onclick="this.value='';" onblur="if ( this.value == '' ) this.value='{$search_t4}';">
                                    <input type="button" value="{$sgo}" name="searchbtn" class="fb" style="padding: 1px;" onclick="if ( document.getElementById('boxV').value != '{$search_t4}' ) location.href='{$admin_url}/search/videos/'+document.getElementById('boxV').value; else location.href='{$admin_url}/search/videos';">
                                </div>
                                <div id="members" style="display: none;">
                                    <input type="text" id="boxM" class="ff" name="searchm" style="width: 240px; padding: 2px; font-style: italic;" value="{if $enable_channels eq "1"}{$search_t7}{else}{$search_t5}{/if}" onclick="this.value='';" onblur="if ( this.value == '' ) this.value='{if $enable_channels eq "1"}{$search_t7}{else}{$search_t5}{/if}';">
                                    {if $enable_channels eq "0"}
                                    <input type="button" value="{$sgo}" name="searchbtn" class="fb" style="padding: 1px;" onclick="if ( document.getElementById('boxM').value != '{$search_t5}' ) location.href='{$admin_url}/search/members/'+document.getElementById('boxM').value; else location.href='{$admin_url}/search/members';">
                                    {else}
                                    <input type="button" value="{$sgo}" name="searchbtn" class="fb" style="padding: 1px;" onclick="if ( document.getElementById('boxM').value != '{$search_t7}' ) location.href='{$admin_url}/search/channels/'+document.getElementById('boxM').value; else location.href='{$admin_url}/search/channels';">
                                    {/if}
                                </div>
                                <div id="tags" style="display: none;">
                                    <input type="text" id="boxT" class="ff" name="searcht" style="width: 240px; padding: 2px; font-style: italic;" value="{$search_t6}" onclick="this.value='';" onblur="if ( this.value == '' ) this.value='{$search_t6}';">
                                    <input type="button" value="{$sgo}" name="searchbtn" class="fb" style="padding: 1px;" onclick="if ( document.getElementById('boxT').value != '{$search_t6}' ) location.href='{$admin_url}/search/playlists/'+document.getElementById('boxT').value; else location.href='{$admin_url}/search/playlists';">
                                </div>
                                <div id="all">
                                    <input type="text" id="boxL" class="ff" name="searchall" style="width: 240px; padding: 2px; font-style: italic;" value="{$search_t1}" onclick="this.value='';" onblur="if ( this.value == '' ) this.value='{$search_t1}';">
                                    <input type="button" value="{$sgo}" name="searchbtn" class="fb" style="padding: 1px;" onclick="if ( document.getElementById('boxL').value != '{$search_t1}' ) location.href='{$admin_url}/search/all/'+document.getElementById('boxL').value; else location.href='{$admin_url}/search/all';">
                                </div>
                                </form>
                                </td>
			    </tr>
			</table>
<!-- END HEADER SEARCH TABLE -->
