<!-- BEGIN RELATED TABS AREA -->
			<table cellpadding="5" cellspacing="0" border=0 width="100%" class="br1">
			    <tr>
				<td valign="middle" class="" width="15">
                            	    <div id="cdownarr8x" style="{if $vpage_ftabs_t5_box eq "e"}display: block;{else}display: none;{/if}" class="pl2"><a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr8x'); ReverseContentDisplay('cdownarr8x'); ReverseContentDisplay('morefromdiv'); setclass_act2('scfradd4x');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a></div>
                            	    <div id="cleftarr8x" style="{if $vpage_ftabs_t5_box eq "c"}display: block;{else}display: none;{/if}" class="pl2"><a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr8x'); ReverseContentDisplay('cdownarr8x'); ReverseContentDisplay('morefromdiv'); setclass_act2('scfradd4x');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a></div>
                                </td>
                                <td width="300">
                            	    {insert name=getfield assign=fromname field=username table=members qfield=uid qvalue=$vuid}
                            	    <a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr8x'); ReverseContentDisplay('cdownarr8x'); ReverseContentDisplay('morefromdiv'); setclass_act2('scfradd4x');"><span id="scfradd4x" class="{if $vpage_ftabs_t5_box eq "e"}act{/if}">{$adm_avtxt27} {$fromname}</a>
                        	</td>
			    </tr>
			    <tr>
				<td colspan="2" class="nopad">
				    <table cellpadding="0" cellspacing="0" border=0 width="100%">
					<tr>
					    <td>
						<div id="morefromdiv" style="{if $vpage_ftabs_t5_box eq "e"}display: block;{else}display: none;{/if}">
						    <script type="text/javascript"> load_tabs('{$ftype}', 'user', '{$key}'); </script>
						</div>
					    </td>
					</tr>
				    </table>
				</td>
			    </tr>
			</table>
<!-- END RELATED TABS AREA -->