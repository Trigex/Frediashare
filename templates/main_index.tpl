<script type="text/javascript" src="modules/ajaxrows/js/panel.js"></script>
<script type="text/javascript" src="modules/ajaxrows/js/xajax.js"></script>
<style type="text/css">
    @import "modules/ajaxrows/css/styles.css";
</style> 
<!-- BEGIN INDEX PAGE BIG TABLE -->
<table align="center" cellpadding="6" cellspacing="0" border="0" width="950">
    <tr>
	<td valign="top">
	{if $enable_videos eq "1"}
	    {insert name=ad_status assign=check aname=home_ads_middle1}
	    {include file="_inc/hpbox/inc_hpfeatv.tpl"}
	    {if $check eq "1"}{include file="ads/home_ads_middle1.tpl"}<br>{/if}
	{/if}
	{if $enable_images eq "1"}
	    {insert name=ad_status assign=check aname=home_ads_middle2}
	    {include file="_inc/hpbox/inc_hpfeati.tpl"}
	    {if $check eq "1"}{include file="ads/home_ads_middle2.tpl"}<br>{/if}
	{/if}
	{if $enable_audio eq "1"}
	    {insert name=ad_status assign=check aname=home_ads_middle3}
	    {include file="_inc/hpbox/inc_hpfeata.tpl"}
	    {if $check eq "1"}{include file="ads/home_ads_middle3.tpl"}<br>{/if}
	{/if}
	</td>
	<td valign="top">
	    <table width="100%" cellpadding=0 cellspacing=0>
		<tr>
		    <td>
			{include file="_inc/hpbox/inc_hpfeatvid.tpl"}<br>
			{insert name=ad_status assign=check aname=home_ads_right1}{if $check eq "1"}{include file="ads/home_ads_right1.tpl"}<br>{/if}
		    {if $smarty.session.UID ne ""}
			{include file="_inc/hpbox/inc_hpinbox.tpl"}
			<br>
			{insert name=ad_status assign=check aname=home_ads_right2}
			{if $check eq "1"}{include file="ads/home_ads_right2.tpl}<br>{else}{/if}
			{include file="_inc/hpbox/inc_hpabout.tpl"}
			<br>
			{insert name=ad_status assign=check aname=home_ads_right3}
			{if $check eq "1"}{include file="ads/home_ads_right3.tpl}<br>{else}{/if}
		    {/if}
			{include file="_inc/hpbox/inc_hpustat.tpl"}
    			{if $smarty.session.UID eq ""}{insert name=ad_status assign=check aname=home_ads_right2}{else}{insert name=ad_status assign=check aname=home_ads_right3}{/if}
    			{if $check eq "1"}<br>{if $smarty.session.UID eq ""}{include file="ads/home_ads_right2.tpl}<br>{else}{/if}{else}{/if}
    			{if $enable_videos eq "1" and $smarty.session.UID eq ""}{insert name=ad_status assign=check aname=home_ads_right3}{if $check eq "1"}{include file="ads/home_ads_right3.tpl}<br>{else}{/if}{/if}
    		    </td>
    		</tr>
    	    </table>
	</td>
    </tr>
</table>
<div id="sessdiv" style="display: none;"></div>
<!-- END INDEX PAGE BIG TABLE -->
	<script type="text/javascript">
	    var prev_onload = document.body.onload;
	    window.onload = function() {ldelim}
    		if( prev_onload ) prev_onload();
    		{if $enable_videos eq "1"}sh('preloader'); xajax_listare_poze('1');{/if}
    		{if $enable_images eq "1"}sh('preloaderi'); xajax_listare_pozei('1');{/if}
    		{if $enable_audio eq "1"}sh('preloadera'); xajax_listare_pozea('1');{/if}
    		window.loaded = true;
	    {rdelim}
	</script>
	<script language="javascript" src="{$js_url}/ajaxresponder.js" type="text/javascript"></script>
	<input type="hidden" name="ldivx" id="ldivx" value="">
	<input type="hidden" name="thisDiv" id="thisDiv" value="">