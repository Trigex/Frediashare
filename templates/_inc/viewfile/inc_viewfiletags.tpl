<!-- BEGIN RELATED TAGS TABLE -->
			{if $reltags ne ""}
			<table cellpadding="5" cellspacing="0" border=0 class="br1" width="100%">
			    <tr>
				<td valign="middle" class="" width="15">
                                <div id="cdownarr6" style="{if $vpage_ftags_box eq "e"}display: block;{else}display: none;{/if}" class="pl2">
                                    <a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr6'); ReverseContentDisplay('cdownarr6'); ReverseContentDisplay('ctdiv'); setclass_act2('scfradd2');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
                                </div>
                                <div id="cleftarr6" style="{if $vpage_ftags_box eq "c"}display: block;{else}display: none;{/if}" class="pl2">
                                    <a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr6'); ReverseContentDisplay('cdownarr6'); ReverseContentDisplay('ctdiv'); setclass_act2('scfradd2');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
                                </div>
                        	</td>
                                <td width="300" align="left"><a href="javascript:void(0)" onclick="ReverseContentDisplay('cleftarr6'); ReverseContentDisplay('cdownarr6'); ReverseContentDisplay('ctdiv'); setclass_act2('scfradd2');"><span id="scfradd2" class="{if $vpage_ftags_box eq "e"}act{/if}">{$view_reltags}</span></a></td>
			    </tr>
			    <tr>
				<td class="nopad" colspan="2">
				    <div class="ctdiv" id="ctdiv" style="{if $vpage_ftags_box eq "e"}display: block;{else}display: none;{/if}">{$reltags}</div>
				</td>
			    </tr>
			</table>
			{/if}
<!-- END RELATED TAGS TABLE -->
