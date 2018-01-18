<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
	<td>
	    <div align="center">{if $site_theme eq "black"}<img src="{$img_url}/topcorners_hpl2.gif" width="640" height="6" alt="">{else}<img src="{$img_url}/topcorners_hpl1.gif" width="640" height="6" alt="">{/if}</div>
                <table border="0" cellpadding="0" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} width="640">
                    <tr>
                        {if $site_theme eq "black"}<td id="bgshp2" class="{if $smarty.session.hpfeatv eq "none"}cbg2s-nb{else}cbg2s{/if}">{else}<td id="bgshp2" class="{if $smarty.session.hpfeatv eq "none"}cbgs-nb{else}cbgs{/if}">{/if}
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td valign="middle" class="pl5" width="18">
                                        <div id="cdownarrhp2" style="display: block;" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp2(); set_hpsess('featv');"><img src="{$chimg_url}/hp_feat.gif" width="18" height="18" alt=""></a>
                                        </div>
                                        <div id="cleftarrhp2" style="display: none;" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp2(); set_hpsess('featv');"><img src="{$chimg_url}/hp_feat.gif" width="18" height="18" alt=""></a>
                                        </div>
                                    </td>
                                    
                                    <td valign="middle" class="pl5" align="left"><a href="javascript:void(0)" {if $smarty.session.UID ne "" or $guests_file_sorting eq "1"}onclick="xajax_loading_('featured'); ShowContent('morelessfeat'); HideContent('morelessviews'); HideContent('morelessratings'); setclass_act('mmh1hp2'); changeclass_inact('trlinkv'); changeclass_inact('mvlinkv');"{else}onclick="alert('{$msg_userlogin}');"{/if}><span class="mh1"><span id="mmh1hp2" class="act">{$recfeatured} {$videos_main}</span></span></a></td>
                                    <td valign="middle" class="f10 pr5" align="right">{$hpbox_otherv}<a href="javascript:void(0)" {if $smarty.session.UID ne "" or $guests_file_sorting eq "1"}onclick="xajax_loading_('views'); ShowContent('morelessviews'); HideContent('morelessfeat'); HideContent('morelessratings'); setclass_act('mvlinkv'); changeclass_inact('trlinkv'); changeclass_inact('mmh1hp2');"{else}onclick="alert('{$msg_userlogin}');"{/if}><span class="f10"><span id="mvlinkv">{$mostviewed|lower}</span></span></a>{$myfiles_delim}<a href="javascript:void(0)" {if $smarty.session.UID ne "" or $guests_file_sorting eq "1"}onclick="{if $file_ratings eq "0"}javascript:void(0){else}xajax_loading_('ratings'); ShowContent('morelessratings'); HideContent('morelessfeat'); HideContent('morelessviews'); setclass_act('trlinkv'); changeclass_inact('mvlinkv'); changeclass_inact('mmh1hp2');{/if}"{else}onclick="alert('{$msg_userlogin}');"{/if} {if $file_ratings eq "0"}alt="{$hpbox_norate}" title="{$hpbox_norate}"{/if}><span class="f10"><span id="trlinkv">{$toprated|lower}</span></a></span></td>
                                </tr>
                            </table>
                            <div id="cspacerhp2" style="display: {$smarty.session.hpfeatv};"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
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
	    <div id="mmenulisthp2" {if $site_theme eq "black"}class="hpbrdnotop2"{else}class="hpbrdnotop"{/if} style="display: {$smarty.session.hpfeatv};">
		{include file="_inc/hpbox/inc_hpvideos.tpl"}
	    </div>
	    <div align="center" id="cbottomhp2" style="display: {if $smarty.session.hpfeatv eq "none"}block{else}none{/if};">{if $site_theme eq "black"}<img src="{$img_url}/bottomcorners_hpl2.gif" width="640" height="6" alt="">{else}<img src="{$img_url}/bottomcorners_hpl1.gif" width="640" height="6" alt="">{/if}</div>
	</td>
    </tr>
</table>
<br>