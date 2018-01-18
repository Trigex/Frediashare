<!-- BEGIN RESPONSES TABLE -->
			{if $btn eq "baudio"}
			    {assign var=fr1 value=$fresp_txt3}
			    {assign var=fr2 value=$fresp_txt4}
			    {assign var=fr3 value=$fresp_txt53}
			{elseif $btn eq "bimage"}
			    {assign var=fr1 value=$fresp_txt2}
			    {assign var=fr2 value=$fresp_txt5}
			    {assign var=fr3 value=$fresp_txt52}
			{elseif $btn eq "bvideo"}
			    {assign var=fr1 value=$fresp_txt1}
			    {assign var=fr2 value=$fresp_txt6}
			    {assign var=fr3 value=$fresp_txt51}
			{/if}
    			{if $file_responses eq "1"}
			<table width="100%" cellpadding="10" cellspacing="0" border="0" class="br2" align="left">
			    <tr>
				<td width="50%">
				    <table cellpadding="0" cellspacing="0">
					<tr>
					    <td valign="middle" class="" width="11">
						<div id="cdownarr5" style="{if $vpage_fresp_box eq "e"}display: block;{else}display: none;{/if}" class="pl2">
						    <a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr5'); ReverseContentDisplay('cdownarr5'); ReverseContentDisplay('theresp'); ReverseContentDisplay('divfr{$vidid}'); setclass_act2('scfradd');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
						</div>
						<div id="cleftarr5" style="{if $vpage_fresp_box eq "c"}display: block;{else}display: none;{/if}" class="pl2">
						    <a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr5'); ReverseContentDisplay('cdownarr5'); ReverseContentDisplay('theresp'); ReverseContentDisplay('divfr{$vidid}'); setclass_act2('scfradd');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
						</div>
					    </td>
					    <td class="pl5"><a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr5'); ReverseContentDisplay('cdownarr5'); ReverseContentDisplay('theresp'); ReverseContentDisplay('divfr{$vidid}'); setclass_act2('scfradd');"><span id="scfradd" class="{if $vpage_fresp_box eq "e"}act{/if}">{$fr1}</span></a></td>
					    <td class="pl5"><div id="frcount">({$tres|viewnr})</div></td>
					</tr>
				    </table>
				</td>
				<td align="right" valign="top">
				    {if $smarty.session.UID ne ""}
                                        <a href="{$base_url}/{$ftype}_response_upload/{$key}"><span id="cfradd">{$fr2}</span></a>
                                    {/if}
                                    {if $smarty.session.UID eq ""}<a href="{$base_url}/login?next={$ftype}_response_upload/{$key}">{$snavlogin}</a>{$fresp_txt8}{/if}
                                </td>
                            </tr>
                            <tr>
                        	<td colspan="2" class="nopad">
				    <table cellpadding="0" cellspacing="0" width="100%" align="left">
					<tr>
					    <td>
						<div id="divfr{$vidid}" style="{if $vpage_fresp_box eq "e"}display: block;{else}display: none;{/if}">
						{if $fres[0].rvid eq ""}
						    {$fresp_txt7}
						{else}

						    <table cellpadding="0" cellspacing="0" align="center" width="100%">
							<tr>
							    <td>
								<script type="text/javascript" src="{$base_url}/modules/channels/responses/js/panel.js"></script>
								<script type="text/javascript" src="{$base_url}/modules/channels/responses/js/xajax.js"></script>
								<div id="recipient" style="display:block;"></div>
								<div id="preloader" style="display:none;" class="p5">{$adm_setgen79}</div>
							    </td>
							</tr>
						    </table>
						    
						{/if}
						</div>
						<div id="theresp" style="display: none;">{if $smarty.session.UID ne ""}<div class="p5"><a href="{$base_url}/responses/{$ftype}">{$fr3}</a></div>{/if}</div>
					    </td>
					</tr>
				    </table>
				</td>
			    </tr>
			</table>
			{/if}
<!-- END RESPONSES TABLE -->
