<!-- BEGIN RELATED TABS AREA -->
			{if $ftype eq "audio"}{assign var=ftab value=$ftabs_rtxt1}{elseif $ftype eq "image"}{assign var=ftab value=$ftabs_rtxt2}{elseif $ftype eq "video"}{assign var=ftab value=$ftabs_rtxt3}{/if}
			<table cellpadding="5" cellspacing="0" border=0 class="br1" width="100%">
			    <tr>
				<td valign="middle" class="" width="15">
                                <div id="cdownarr7x" style="{if $vpage_ftabs_t1_box eq "e"}display: block;{else}display: none;{/if}" class="pl2">
                                    <a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr7x'); ReverseContentDisplay('cdownarr7x'); ReverseContentDisplay('relalldiv'); setclass_act2('scfradd3x');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
                                </div>
                                <div id="cleftarr7x" style="{if $vpage_ftabs_t1_box eq "c"}display: block;{else}display: none;{/if}" class="pl2">
                                    <a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr7x'); ReverseContentDisplay('cdownarr7x'); ReverseContentDisplay('relalldiv'); setclass_act2('scfradd3x');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
                                </div>
                                </td>
                                
                                <td width="300" align="left"><a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr7x'); ReverseContentDisplay('cdownarr7x'); ReverseContentDisplay('relalldiv'); setclass_act2('scfradd3x');"><span id="scfradd3x" class="{if $vpage_ftabs_t1_box eq "e"}act{/if}">{$ftab}</a></td>
			    </tr>
			    <tr>
				<td colspan="2" class="nopad">
				    <table cellpadding="0" cellspacing="0" border=0 width="100%">
					<tr>
					    <td>
						<div id="relalldiv" style="{if $vpage_ftabs_t1_box eq "e"}display: block;{else}display: none;{/if}">
						    <script type="text/javascript"> load_tabs('{$ftype}', 'related', '{$key}'); </script>
						</div>
					    </td>
					</tr>
				    </table>
				</td>
			    </tr>
			</table>
<!-- END RELATED TABS AREA -->