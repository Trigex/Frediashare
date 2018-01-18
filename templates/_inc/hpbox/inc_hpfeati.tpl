<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
	<td>
	    <div align="center">{if $site_theme eq "black"}<img src="{$img_url}/topcorners_hpl2.gif" width="640" height="6" alt="">{else}<img src="{$img_url}/topcorners_hpl1.gif" width="640" height="6" alt="">{/if}</div>
                <table border="0" cellpadding="0" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} width="640">
                    <tr>
                        {if $site_theme eq "black"}<td id="bgshp3" class="{if $smarty.session.hpfeati eq "none"}cbg2s-nb{else}cbg2s{/if}">{else}<td id="bgshp3" class="{if $smarty.session.hpfeati eq "none"}cbgs-nb{else}cbgs{/if}">{/if}
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td valign="middle" class="pl5" width="18">
                                        <div id="cdownarrhp3" style="display: block;" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp3(); set_hpsess('feati');"><img src="{$chimg_url}/hp_feat.gif" width="18" height="18" alt=""></a>
                                        </div>
                                        <div id="cleftarrhp3" style="display: none;" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp3(); set_hpsess('feati');"><img src="{$chimg_url}/hp_feat.gif" width="18" height="18" alt=""></a>
                                        </div>
                                    </td>
                                    
                                    <td valign="middle" class="pl5" align="left"><a href="javascript:void(0)" {if $smarty.session.UID ne "" or $guests_file_sorting eq "1"}onclick="xajax_loadingi_('featured'); ShowContent('morelessfeati'); HideContent('morelessviewsi'); HideContent('morelessratingsi'); setclass_act('mmh1hp3'); changeclass_inact('trlinki'); changeclass_inact('mvlinki');"{else}onclick="alert('{$msg_userlogin}');"{/if}><span class="mh1"><span id="mmh1hp3" class="act">{$recfeatured} {$images_main}</span></span></a></td>
                                    <td valign="middle" class="f10 pr5" align="right">{$hpbox_otheri}<a href="javascript:void(0)" {if $smarty.session.UID ne "" or $guests_file_sorting eq "1"}onclick="xajax_loadingi_('views'); ShowContent('morelessviewsi'); HideContent('morelessfeati'); HideContent('morelessratingsi'); setclass_act('mvlinki'); changeclass_inact('trlinki'); changeclass_inact('mmh1hp3');"{else}onclick="alert('{$msg_userlogin}');"{/if}><span class="f10"><span id="mvlinki">{$mostviewed|lower}</span></span></a>{$myfiles_delim}<a href="javascript:void(0)" {if $smarty.session.UID ne "" or $guests_file_sorting eq "1"}onclick="{if $file_ratings eq "0"}javascript:void(0){else}xajax_loadingi_('ratings'); ShowContent('morelessratingsi'); HideContent('morelessfeati'); HideContent('morelessviewsi'); setclass_act('trlinki'); changeclass_inact('mvlinki'); changeclass_inact('mmh1hp3');{/if}"{else}onclick="alert('{$msg_userlogin}');"{/if} {if $file_ratings eq "0"}alt="{$hpbox_norate}" title="{$hpbox_norate}"{/if}><span class="f10"><span id="trlinki">{$toprated|lower}</span></a></span></td>
                                </tr>
                            </table>
                            <div id="cspacerhp3" style="display: {$smarty.session.hpfeati};"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
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
	    <div id="mmenulisthp3" {if $site_theme eq "black"}class="hpbrdnotop2"{else}class="hpbrdnotop"{/if} style="display: {$smarty.session.hpfeati};">
		{include file="_inc/hpbox/inc_hpimages.tpl"}
	    </div>
	    <div align="center" id="cbottomhp3" style="display: {if $smarty.session.hpfeati eq "none"}block{else}none{/if};">{if $site_theme eq "black"}<img src="{$img_url}/bottomcorners_hpl2.gif" width="640" height="6" alt="">{else}<img src="{$img_url}/bottomcorners_hpl1.gif" width="640" height="6" alt="">{/if}</div>
	</td>
    </tr>
</table>
<br>