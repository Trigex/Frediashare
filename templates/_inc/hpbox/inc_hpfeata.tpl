<table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
	<td>
	    <div align="center">{if $site_theme eq "black"}<img src="{$img_url}/topcorners_hpl2.gif" width="640" height="6" alt="">{else}<img src="{$img_url}/topcorners_hpl1.gif" width="640" height="6" alt="">{/if}</div>
                <table border="0" cellpadding="0" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} width="640">
                    <tr>
                        {if $site_theme eq "black"}<td id="bgshp4" class="{if $smarty.session.hpfeata eq "none"}cbg2s-nb{else}cbg2s{/if}">{else}<td id="bgshp4" class="{if $smarty.session.hpfeata eq "none"}cbgs-nb{else}cbgs{/if}">{/if}
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td valign="middle" class="pl5" width="18">
                                        <div id="cdownarrhp4" style="display: block;" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp4(); set_hpsess('feata');"><img src="{$chimg_url}/hp_feat.gif" width="18" height="18" alt=""></a>
                                        </div>
                                        <div id="cleftarrhp4" style="display: none;" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp4(); set_hpsess('feata');"><img src="{$chimg_url}/hp_feat.gif" width="18" height="18" alt=""></a>
                                        </div>
                                    </td>
                                    
                                    <td valign="middle" class="pl5" align="left"><a href="javascript:void(0)" {if $smarty.session.UID ne "" or $guests_file_sorting eq "1"}onclick="xajax_loadinga_('featured'); ShowContent('morelessfeata'); HideContent('morelessviewsa'); HideContent('morelessratingsa'); setclass_act('mmh1hp4'); changeclass_inact('trlinka'); changeclass_inact('mvlinka');"{else}onclick="alert('{$msg_userlogin}');"{/if}><span class="mh1"><span id="mmh1hp4" class="act">{$recfeatured} {$audios_main}</span></span></a></td>
                                    <td valign="middle" class="f10 pr5" align="right">{$hpbox_othera}<a href="javascript:void(0)" {if $smarty.session.UID ne "" or $guests_file_sorting eq "1"}onclick="xajax_loadinga_('views'); ShowContent('morelessviewsa'); HideContent('morelessfeata'); HideContent('morelessratingsa'); setclass_act('mvlinka'); changeclass_inact('trlinka'); changeclass_inact('mmh1hp4');"{else}onclick="alert('{$msg_userlogin}');"{/if}><span class="f10"><span id="mvlinka">{$mostvieweda|lower}</span></span></a>{$myfiles_delim}<a href="javascript:void(0)" {if $smarty.session.UID ne "" or $guests_file_sorting eq "1"}onclick="{if $file_ratings eq "0"}javascript:void(0){else}xajax_loadinga_('ratings'); ShowContent('morelessratingsa'); HideContent('morelessfeata'); HideContent('morelessviewsa'); setclass_act('trlinka'); changeclass_inact('mvlinka'); changeclass_inact('mmh1hp4');{/if}"{else}onclick="alert('{$msg_userlogin}');"{/if} {if $file_ratings eq "0"}alt="{$hpbox_norate}" title="{$hpbox_norate}"{/if}><span class="f10"><span id="trlinka">{$toprated|lower}</span></a></span></td>
                                </tr>
                            </table>
                            <div id="cspacerhp4" style="display: {$smarty.session.hpfeata};"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
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
	    <div id="mmenulisthp4" {if $site_theme eq "black"}class="hpbrdnotop2"{else}class="hpbrdnotop"{/if} style="display: {$smarty.session.hpfeata};">
		{include file="_inc/hpbox/inc_hpaudios.tpl"}
	    </div>
	    <div align="center" id="cbottomhp4" style="display: {if $smarty.session.hpfeata eq "none"}block{else}none{/if};">{if $site_theme eq "black"}<img src="{$img_url}/bottomcorners_hpl2.gif" width="640" height="6" alt="">{else}<img src="{$img_url}/bottomcorners_hpl1.gif" width="640" height="6" alt="">{/if}</div>
	</td>
    </tr>
</table>
<br>