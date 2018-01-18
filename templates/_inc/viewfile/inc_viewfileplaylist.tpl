<!-- BEGIN PLAYLIST TABLE -->
		    <div id="masterplaylistdiv">
			{if $plcount gt 0}
			<table cellpadding="5" cellspacing="0" border=0 class="br1" width="100%">
			    <tr>
				<td class="" width="15" valign="top" style="padding-top: 10px;">
                                <div id="cdownarr6x2" style="{if $vpage_fplist_box eq "e"}display: block;{else}display: none;{/if}" class="pl2">
                                    <a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr6x2'); ReverseContentDisplay('cdownarr6x2'); ReverseContentDisplay('playalldiv2'); ReverseContentDisplay('ctdivx2'); setclass_act2('scfradd2x2');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
                                </div>
                                <div id="cleftarr6x2" style="{if $vpage_fplist_box eq "c"}display: block;{else}display: none;{/if}" class="pl2">
                                    <a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr6x2'); ReverseContentDisplay('cdownarr6x2'); ReverseContentDisplay('playalldiv2'); ReverseContentDisplay('ctdivx2'); setclass_act2('scfradd2x2');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
                                </div>
                        	</td>
                                <td width="300" align="left">
                            	    <table cellpadding="0" cellspacing="0" width="100%" border=0>
                            		<tr>
                            		    <td align="left">
                            			<div class=""><a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr6x2'); ReverseContentDisplay('cdownarr6x2'); ReverseContentDisplay('playalldiv2'); ReverseContentDisplay('ctdivx2'); setclass_act2('scfradd2x2');"><span id="scfradd2x2" class="{if $vpage_fplist_box eq "e"}act{/if}">{$pr_chinfob36}</a>&nbsp;&nbsp;(<span id="qlistadd2">{$plcount|viewnr}</span>)</span></div>
                            			<div class="">{insert name=getfield assign=plname field=pname table=playlist_$ftype qfield=vkey qvalue=$smarty.request.pl}<a href="{$base_url}/{$ftype}_playlist/{$smarty.request.pl}">{$plname}</a></div>
                            		    </td>
                            		    <td align="right" valign="top">
                            			{if $btn eq "baudio"}{assign var=section value="audio"}{elseif $btn eq "bimage"}{assign var=section value="image"}{elseif $btn eq "bvideo"}{assign var=section value="video"}{/if}
                            			{insert name=getfield assign=fqkey field=vkey table=files_$section qfield=vid qvalue=$nextpl}
                            			{if $btn eq "baudio"}
                            			    {insert name=titlea assign=qtitle vkey=$fqkey}
                            			{elseif $btn eq "bimage"}
                            			    {insert name=titlei assign=qtitle vkey=$fqkey}
                            			{elseif $btn eq "bvideo"}
                            			    {insert name=titlev assign=qtitle vkey=$fqkey}
                            			{/if}
                            			<div id="playalldiv2" style="{if $vpage_fplist_box eq "e"}display: block;{else}display: none;{/if}">
                            			{if $ploop eq "1"}
                            			    <table cellpadding="0" cellspacing="0">
                            				<tr>
                            				{if $btn eq "bvideo"}
                                                            <td>
                                                                <div id="pl_startdiv" style="display: {if $smarty.session.pl_autoplay eq "0" or $smarty.session.pl_autoplay eq ""}block{else}none{/if};"><a href="javascript:void(0)" onclick="startplay('on', 'pl','{$smarty.request.pl}'); HideContent('pl_startdiv'); ShowContent('pl_stopdiv'); if ( document.getElementById('ql_stopdiv') && document.getElementById('ql_stopdiv').style.display == 'block' ) {ldelim} HideContent('ql_stopdiv'); ShowContent('ql_startdiv'); {rdelim}"><span class="f10">{$autoplayoff}</span></a></div>
                                                                <div id="pl_stopdiv" style="display: {if $smarty.session.pl_autoplay eq "1"}block{else}none{/if};"><a href="javascript:void(0)" onclick="startplay('off', 'pl'); HideContent('pl_stopdiv'); ShowContent('pl_startdiv');"><span class="f10">{$autoplayon}</span></a></div>
                                                                <div id="startplayresp2"></div>
                                                            </td>
                                                            <td>&nbsp;|&nbsp;</td>
                                                        {/if}
                            				    <td><a href="javascript:void(0)" {if $nextpl ne ""}onclick="location.href='{if $same_title_uploads eq "0"}{$base_url}/{$section}/{$qtitle}{else}{$base_url}/{$section}/{$fqkey}{/if}&pl={$smarty.request.pl}'; return false;"{/if}>{$qlist_txt9}</a></td>
                            				</tr>
                            			    </table>
                            			{/if}
                            			</div>
                            		    </td>
                            		</tr>
                            	    </table>
                        	</td>
			    </tr>
			    <tr>
				<td class="nopad" colspan="2">
				    {include file="_inc/viewfile/inc_viewfileplaylistloop.tpl"}
				</td>
			    </tr>
			</table>
			<br>
			{/if}
		    </div>
<!-- END PLAYLIST TABLE -->
