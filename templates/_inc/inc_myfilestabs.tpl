<script type="text/javascript">
function setclass_act3(d) {ldelim}
    var theclass = document.getElementById(d);
    var ttab1 = document.getElementById('tab11');
    var ttab2 = document.getElementById('tab21');
    var ttab3 = document.getElementById('tab31');
    if ( d == 'tab11' ) {ldelim} 
	theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); 
	{if $enable_images eq "1"}ttab2.setAttribute("class",""); ttab2.setAttribute("className","");{/if}
	{if $enable_videos eq "1"}ttab3.setAttribute("class",""); ttab3.setAttribute("className","");{/if}
    {rdelim}
    if ( d == 'tab21' ) {ldelim} 
	theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); 
	{if $enable_audio eq "1"}ttab1.setAttribute("class",""); ttab1.setAttribute("className","");{/if}
	{if $enable_videos eq "1"}ttab3.setAttribute("class",""); ttab3.setAttribute("className","");{/if}
    {rdelim}
    if ( d == 'tab31' ) {ldelim} 
	theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); 
	{if $enable_audio eq "1"}ttab1.setAttribute("class",""); ttab1.setAttribute("className","");{/if}
	{if $enable_images eq "1"}ttab2.setAttribute("class",""); ttab2.setAttribute("className","");{/if}
    {rdelim}
{rdelim}
</script>

    {if $sbtn eq "ufavs"}{assign var="t1" value=$userfav_headinga}{assign var="t2" value=$userfav_headingi}{assign var="t3" value=$userfav_headingv}{assign var="t4" value=$userfav_nra}{assign var="t5" value=$userfav_nri}{assign var="t6" value=$userfav_nrv}{assign var="t7" value=$userfav_ofa}{assign var="t8" value=$userfav_ofi}{assign var="t9" value=$userfav_ofv}
    {elseif $sbtn eq "fav"}{assign var="t1" value=$myfav_audioheading}{assign var="t2" value=$myfav_imageheading}{assign var="t3" value=$myfav_videoheading}{assign var="t4" value=$myfav_audionr}{assign var="t5" value=$myfav_imagenr}{assign var="t6" value=$myfav_videonr}{assign var="t7" value=$myfav_audioof}{assign var="t8" value=$myfav_imageof}{assign var="t9" value=$myfav_videoof}
    {elseif $sbtn eq "mpl"}{assign var="t1" value=$mypl_audioheading}{assign var="t2" value=$mypl_imageheading}{assign var="t3" value=$mypl_videoheading}{assign var="t4" value=$mypl_audionr}{assign var="t5" value=$mypl_imagenr}{assign var="t6" value=$mypl_videonr}{assign var="t7" value=$mypl_audioof}{assign var="t8" value=$mypl_imageof}{assign var="t9" value=$mypl_videoof}
    {elseif $sbtn eq "mql"}{assign var="t1" value=$qlist_txt1x}{assign var="t2" value=$qlist_txt2}{assign var="t3" value=$qlist_txt3}{assign var="t4" value=$mypl_audionr}{assign var="t5" value=$mypl_imagenr}{assign var="t6" value=$mypl_videonr}{assign var="t7" value=$mypl_audioof}{assign var="t8" value=$mypl_imageof}{assign var="t9" value=$mypl_videoof}
    {elseif $sbtn eq "mpl2"}{assign var="t1" value=$plist_txt2}{assign var="t2" value=$plist_txt3}{assign var="t3" value=$plist_txt4}{assign var="t4" value=$mypl_audionr}{assign var="t5" value=$mypl_imagenr}{assign var="t6" value=$mypl_videonr}{assign var="t7" value=$mypl_audioof}{assign var="t8" value=$mypl_imageof}{assign var="t9" value=$mypl_videoof}
    {/if}
	<td class="">
		    {if $enable_audio eq "1"}<a id="tab1" href="javascript:void(0)" onclick="setclass_act3('tab11'); ShowContent('plaudio'); ShowContent('ainfo'); ShowContent('sortfa'); {if $enable_images eq "1"}HideContent('plimage'); HideContent('iinfo'); HideContent('sortfi'); {/if} {if $enable_videos eq "1"}HideContent('plvideo'); HideContent('vinfo'); HideContent('sortfv');{/if}"><span id="tab11" {if $smarty.request.page eq "" and $smarty.request.pagei eq "" and $smarty.request.vtype eq "" and $smarty.request.itype eq ""}class="act"{/if}>{$t1}</span></a>{if $enable_images eq "1"}{$myfiles_delim}{/if}{/if}
                    {if $enable_images eq "1"}<a id="tab2" href="javascript:void(0)" onclick="setclass_act3('tab21'); ShowContent('plimage'); ShowContent('iinfo'); ShowContent('sortfi'); {if $enable_audio eq "1"}HideContent('plaudio'); HideContent('ainfo'); HideContent('sortfa'); {/if} {if $enable_videos eq "1"}HideContent('plvideo'); HideContent('vinfo'); HideContent('sortfv');{/if}"><span id="tab21" class="{if $enable_audio eq "1" and ($smarty.request.pagei eq "" and $smarty.request.itype eq "")}{elseif $enable_audio eq "0" and $enable_images eq "0"}{elseif $enable_audio eq "0" and $smarty.request.vtype ne ""}{else}act{/if}">{$t2}</span></a>{/if}{if $enable_videos eq "1"}{$myfiles_delim}{/if}
                    {if $enable_videos eq "1"}<a id="tab3" href="javascript:void(0)" onclick="setclass_act3('tab31'); ShowContent('plvideo'); ShowContent('vinfo'); ShowContent('sortfv'); {if $enable_audio eq "1"}HideContent('plaudio'); HideContent('ainfo'); HideContent('sortfa'); {/if} {if $enable_images eq "1"}HideContent('plimage'); HideContent('iinfo'); HideContent('sortfi');{/if}"><span id="tab31" class="{if $enable_audio ne "1" and $enable_images ne "1"}act{elseif $smarty.request.page ne "" or $smarty.request.vtype ne ""}act{else}display: none;{/if}">{$t3}</span></a>{/if}
	</td>
	<td class="" align="right">
	    {if $enable_audio eq "1"}<div id="ainfo" {if $smarty.request.page eq "" and $smarty.request.pagei eq "" and $smarty.request.vtype eq "" and $smarty.request.itype eq "" and $total2 ne "0"}style="display: block;"{else}style="display: none;"{/if}>{if $total2 ne "0"}{$t4}[{$start_numa}-{$end_numa}]{$t7} [{$total2}]{/if}</div>{/if}
	    {if $enable_images eq "1"}<div id="iinfo" style="{if $enable_audio eq "1" and ($smarty.request.pagei eq "" and $smarty.request.itype eq "")}display: none;{elseif $enable_audio eq "0" and $enable_images eq "0"}display: none;{elseif $enable_audio eq "0" and $smarty.request.vtype ne ""}display: none;{else}display: block;{/if}">{if $total3 ne "0"}{$t5}[{$start_numi}-{$end_numi}]{$t8}[{$total3}]{/if}</div>{/if}
	    {if $enable_videos eq "1"}<div id="vinfo" style="{if $enable_audio ne "1" and $enable_images ne "1"}display: block;{elseif $smarty.request.page ne "" or $smarty.request.vtype ne "" and $total1 ne "0"}display: block;{else}display: none;{/if}">{if $total1 ne "0"}{$t6}[{$start_num}-{$end_num}]{$t9}[{$total1}]{/if}</div>{/if}
	</td>
