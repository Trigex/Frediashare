<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
	<td>
	    <div align="center">{if $site_theme eq "black"}<img src="{$img_url}/topcorners_hpl2.gif" width="640" height="6" alt="">{else}<img src="{$img_url}/topcorners_hpl1.gif" width="640" height="6" alt="">{/if}</div>
                <table border="0" cellpadding="0" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} width="640">
                    <tr>
                        {if $site_theme eq "black"}<td id="bgshp2_mostp" class="{if $smarty.session.hpmostp eq "none"}cbg2s-nb{else}cbg2s{/if}">{else}<td id="bgshp2_mostp" class="{if $smarty.session.hpmostp eq "none"}cbgs-nb{else}cbgs{/if}">{/if}
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td valign="middle" class="pl5" width="18">
                                        <div id="cdownarrhp2_mostp" style="display: block;" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp2_mostp(); set_hpsess('mostp');"><img src="{$chimg_url}/hp_feat.gif" width="18" height="18" alt=""></a>
                                        </div>
                                        <div id="cleftarrhp2_mostp" style="display: none;" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp2_mostp(); set_hpsess('mostp');"><img src="{$chimg_url}/hp_feat.gif" width="18" height="18" alt=""></a>
                                        </div>
                                    </td>
                                    
                                    <td valign="middle" class="pl5" align="left"><a href="javascript:void(0)" onclick="setclass_act('mmh1hp2_mostp'); changeclass_inact('trlinkv'); changeclass_inact('mvlinkv');"><span class="mh1"><span id="mmh1hp2_mostp" class="act">{$hp_mostptxt1}</span></span></a></td>
                                    <td valign="middle" class="f10 pr5" align="right">{$hpbox_otherv}<a href="javascript:void(0)" {if $smarty.session.UID ne "" or $guests_file_sorting eq "1"}onclick="xajax_loading_('views'); ShowContent('morelessviews'); HideContent('morelessmostp'); HideContent('morelessratings'); setclass_act('mvlinkv'); changeclass_inact('trlinkv'); changeclass_inact('mmh1hp2_mostp');"{else}onclick="alert('{$msg_userlogin}');"{/if}><span class="f10"><span id="mvlinkv">{$mostviewed|lower}</span></span></a>{$myfiles_delim}<a href="javascript:void(0)" {if $smarty.session.UID ne "" or $guests_file_sorting eq "1"}onclick="{if $file_ratings eq "0"}javascript:void(0){else}xajax_loading_('ratings'); ShowContent('morelessratings'); HideContent('morelessmostp'); HideContent('morelessviews'); setclass_act('trlinkv'); changeclass_inact('mvlinkv'); changeclass_inact('mmh1hp2_mostp');{/if}"{else}onclick="alert('{$msg_userlogin}');"{/if} {if $file_ratings eq "0"}alt="{$hpbox_norate}" title="{$hpbox_norate}"{/if}><span class="f10"><span id="trlinkv">{$toprated|lower}</span></a></span></td>
                                </tr>
                            </table>
                            <div id="cspacerhp2_mostp" style="display: {$smarty.session.hpmostp};"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
                        </td>
                    </tr>
                </table>
            </div>
	</td>
    </tr>
</table>

<table width="640" border="0" align="center" cellpadding="0" cellspacing="0" class="">
    <tr> 
	<td class="">
	    {if $thumb_module eq "1"}
            {insert name=gen_array assign=arra nr=$thumb_nr}
            <script type="text/javascript">
            {section name=i loop=$bid}
            {insert name=vid_to_rndv assign=rnd vid=$bid[i].vid}
                turl['{$rnd}']=0; timg['{$rnd}']=new Array(); thumbs['{$rnd}']=new Array({$arra});
            {/section}
            </script>
            {/if}
	    <div id="mmenulisthp2_mostp" {if $site_theme eq "black"}class="hpbrdnotop2"{else}class="hpbrdnotop"{/if} style="display: {$smarty.session.hpmostp};">
		xxx
	    </div>
	    <div align="center" id="cbottomhp2_mostp" style="display: {if $smarty.session.hpmostp eq "none"}block{else}none{/if};">{if $site_theme eq "black"}<img src="{$img_url}/bottomcorners_hpl2.gif" width="640" height="6" alt="">{else}<img src="{$img_url}/bottomcorners_hpl1.gif" width="640" height="6" alt="">{/if}</div>
	</td>
    </tr>
</table>
<br>