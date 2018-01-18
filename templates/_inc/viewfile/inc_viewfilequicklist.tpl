<!-- BEGIN QUICKLIST TABLE -->
		    <div id="masterquicklistdiv">
			{if $qtotal gt 0}
			{if ( $btn eq "baudio" and $atotal gt 0 ) or ( $btn eq "bimage" and $itotal gt 0 ) or ( $btn eq "bvideo" and $vtotal gt 0 ) }
			<table cellpadding="5" cellspacing="0" border=0 class="br1" width="100%">
			    <tr>
				<td valign="middle" class="" width="15">
                                <div id="cdownarr6x" style="{if $vpage_fqlist_box eq "e"}display: block;{else}display: none;{/if}" class="pl2">
                                    <a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr6x'); ReverseContentDisplay('cdownarr6x'); ReverseContentDisplay('playalldiv'); ReverseContentDisplay('clearsavediv'); ReverseContentDisplay('ctdivx'); setclass_act2('scfradd2x');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
                                </div>
                                <div id="cleftarr6x" style="{if $vpage_fqlist_box eq "c"}display: block;{else}display: none;{/if}" class="pl2">
                                    <a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr6x'); ReverseContentDisplay('cdownarr6x'); ReverseContentDisplay('playalldiv'); ReverseContentDisplay('clearsavediv'); ReverseContentDisplay('ctdivx'); setclass_act2('scfradd2x');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
                                </div>
                        	</td>
                                <td width="300" align="left">
                            	    <table cellpadding="0" cellspacing="0" width="100%" border=0>
                            		<tr>
                            		    <td align="left">
                            			<a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr6x'); ReverseContentDisplay('cdownarr6x'); ReverseContentDisplay('playalldiv'); ReverseContentDisplay('clearsavediv'); ReverseContentDisplay('ctdivx'); setclass_act2('scfradd2x');"><span id="scfradd2x" class="{if $vpage_fqlist_box eq "e"}act{/if}">{$snav_mtxt2}</a>&nbsp;&nbsp;(<span id="qlistadd2">{if $btn eq "baudio"}{assign var=ftotal value=$atotal}{$atotal|viewnr}{elseif $btn eq "bimage"}{assign var=ftotal value=$itotal}{$itotal|viewnr}{elseif $btn eq "bvideo"}{assign var=ftotal value=$vtotal}{$vtotal|viewnr}{/if}</span>)</span>
                            		    </td>
                            		    <td align="right">
                            			{if $btn eq "baudio"}{assign var=section value="audio"}{elseif $btn eq "bimage"}{assign var=section value="image"}{elseif $btn eq "bvideo"}{assign var=section value="video"}{/if}
                            			{insert name=getfield assign=fqkey field=vkey table=files_$section qfield=vid qvalue=$nextql}
                            			{if $btn eq "baudio"}
                            			    {insert name=titlea assign=qtitle vkey=$fqkey}
                            			{elseif $btn eq "bimage"}
                            			    {insert name=titlei assign=qtitle vkey=$fqkey}
                            			{elseif $btn eq "bvideo"}
                            			    {insert name=titlev assign=qtitle vkey=$fqkey}
                            			{/if}
                            			<div id="playalldiv" style="{if $vpage_fqlist_box eq "e"}display: block;{else}display: none;{/if}">
                            			    <table cellpadding="0" cellspacing="0">
                            				<tr>
                            				{if $btn eq "bvideo"}
                                                            <td>
                                                                <div id="ql_startdiv" style="display: {if $smarty.session.ql_autoplay eq "0" or $smarty.session.ql_autoplay eq ""}block{else}none{/if};"><a href="javascript:void(0)" onclick="startplay('on', 'ql'); HideContent('ql_startdiv'); ShowContent('ql_stopdiv'); if ( document.getElementById('pl_stopdiv') && document.getElementById('pl_stopdiv').style.display == 'block' ) {ldelim} HideContent('pl_stopdiv'); ShowContent('pl_startdiv'); {rdelim}"><span class="f10">{$autoplayoff}</span></a></div>
                                                                <div id="ql_stopdiv" style="display: {if $smarty.session.ql_autoplay eq "1"}block{else}none{/if};"><a href="javascript:void(0)" onclick="startplay('off', 'ql'); HideContent('ql_stopdiv'); ShowContent('ql_startdiv');"><span class="f10">{$autoplayon}</span></a></div>
                                                                <div id="startplayresp"></div>
                                                            </td>
                                                            <td>&nbsp;|&nbsp;</td>
                                                        {/if}
                            				    <td><a href="javascript:void(0)" {if $nextql ne ""}onclick="location.href='{if $same_title_uploads eq "0"}{$base_url}/{$section}/{$qtitle}{else}{$base_url}/{$section}/{$fqkey}{/if}'; return false;"{/if}>{$qlist_txt9}</a></td>
                            				</tr>
                            			    </table>
                            			</div>
                            		    </td>
                            		</tr>
                            	    </table>
                        	</td>
			    </tr>
			    <tr>
				<td class="nopad" colspan="2">
				    {include file="_inc/viewfile/inc_viewfilequicklistloop.tpl"}
				</td>
			    </tr>
			</table>
			<div id="clearsavediv" style="{if $vpage_fqlist_box eq "e"}display: block;{else}display: none;{/if}">
			<table cellpadding="0" cellspacing="0" border=0 class="" width="100%">
			    <tr><td align="right"><a href="javascript:void(0)" alt="{$qlist_txt12}" title="{$qlist_txt12}" onclick="thisDiv('no'); ldiv('qloadme'); clearquicklist('{$section}', '{$vidid}');">{$qlist_txt10}</a>{$myfiles_delim}<a href="javascript:void(0)" alt="{$qlist_txt13}" title="{$qlist_txt13}" onclick="ReverseContentDisplay('qplname'); setclass_act2('qplact');"><span id="qplact">{$qlist_txt11}</span></a></td></tr>
			    <tr>
				<td>
				    <div id="qplname" style="display: none;">
					<form id="qplform">
					{if $smarty.session.UID eq ""}
                                    	    <table cellpadding=5 cellspacing=0 border=0 align="center" width="100%">
                                        	<tr>
                                        	    <td align="center"><div class=""><center><a href="{$base_url}/login?next={$ftype}/{$smarty.request.id}">{$snavlogin}</a>{$plist_txt58}</center></div></td>
                                            	    <td align="right" valign="middle" class="nopad"><a href="javascript:void(0)" onclick="HideContent('qplname'); setclass_act2('qplact');">{$plist_txt54}</a></td>
                                        	</tr>
                                    	    </table>
                                	{else}
					    <table cellpadding="0" cellspacing="0" border=0>
						<tr><td>{$plist_txt59}</td></tr>
						<tr><td><input type="text" name="qplname" class="ff" size="35"></td></tr>
						<tr><td class="pt2"><input type="button" name="qplsubmit" value="{$qlist_txt11}" class="fb" onclick="saveqpl('{$ftype}');">&nbsp;<input type="button" name="qplcancel" class="fb" onclick="HideContent('qplname'); setclass_act2('qplact');" value="{$view_reqbtncancel}"></td></tr>
						<tr>
						    <td class="pt2"><div id="qploading" style="display: none;"><table cellpadding=5 cellspacing=0 border=0><tr><td>{$adm_setgen79}</td><td>{$loading_gif}</td></tr></table></div><div id="qplresp"></div></td>
						</tr>
					    </table>
					{/if}
					</form>
				    </div>
				</td>
			    </tr>
			</table>
			</div>
			<br>
			{/if}
			{/if}
		    </div>
<!-- END QUICKLIST TABLE -->
