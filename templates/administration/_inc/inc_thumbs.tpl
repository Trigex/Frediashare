{literal}
<script language="javascript" type="text/javascript">
function thumbreset_main(i, met){
var params = Form.serialize($('thumb_form'));
new Ajax.Updater('rthumb_div', baseurl+'administration/thumbreset.php?type=main&met='+met+'&vid='+i, {asynchronous:true, parameters:params});
}
function thumbreset_all(i, met){
var params = Form.serialize($('thumb_form'));
new Ajax.Updater('rthumb_div', baseurl+'administration/thumbreset.php?type=all&met='+met+'&vid='+i, {asynchronous:true, parameters:params});
}
</script>
{/literal}
<form id="thumb_form">
<table cellpadding="0" cellspacing="0" border=0 width="100%">
    <tr>
	<td align="right"><a href="javascript:void(0)" onclick="ReverseContentDisplay('rthumb'); ReverseSign('7');"><span id="memb7">{$adm_threset1}</span></a></td>
	<td align="right" valign="bottom" style="padding-bottom: 1px;" class="pl5" width="10"><img id="img7" src="{$theme_url}/{$site_theme}/images/sign_plus.gif" width="10" height="10" alt="{$adm_rstat1}" onclick="ReverseContentDisplay('rthumb'); ReverseSign('7');" class="cursor"></td>
    </tr>
    <tr>
	<td colspan=2 align="left">
	    {insert name=getfield assign=thuid field=uid table=files_video qfield=vkey qvalue=$smarty.request.id}
	    {insert name=getfield assign=thvid field=vid table=files_video qfield=vkey qvalue=$smarty.request.id}
	    {insert name=vid_to_rndv assign=rnd vid=$thvid}
	    <div id="rthumb" style="display: none;" class="pt5">
		<table width="100%" cellpadding="2" cellspacing="0" border=0>
		    <tr><td><a href="javascript:void(0)" onclick="thisDiv('yes'); ldiv('rthumb_div'); thumbreset_main('{$smarty.request.id}', 'ffmpeg'); return false;">{$adm_threset2}: FFmpeg</a></td></tr>
		    <tr><td><a href="javascript:void(0)" onclick="thisDiv('yes'); ldiv('rthumb_div'); thumbreset_main('{$smarty.request.id}', 'ffmpeg-php'); return false;">{$adm_threset2}: FFmpeg-PHP</a></td></tr>
		    <tr><td><a href="javascript:void(0)" onclick="thisDiv('yes'); ldiv('rthumb_div'); thumbreset_main('{$smarty.request.id}', 'mplayer'); return false;">{$adm_threset2}: MPlayer</a></td></tr>
		    {if $thumb_nr gt 3}
		    <tr><td style="padding-top: 10px;"><a href="javascript:void(0)" onclick="thisDiv('yes'); ldiv('rthumb_div'); thumbreset_all('{$smarty.request.id}', 'ffmpeg'); return false;">{$adm_threset3}: FFmpeg</a></td></tr>
		    <tr><td><a href="javascript:void(0)" onclick="thisDiv('yes'); ldiv('rthumb_div'); thumbreset_all('{$smarty.request.id}', 'ffmpeg-php'); return false;">{$adm_threset3}: FFmpeg-PHP</a></td></tr>
		    <tr><td><a href="javascript:void(0)" onclick="thisDiv('yes'); ldiv('rthumb_div'); thumbreset_all('{$smarty.request.id}', 'mplayer'); return false;">{$adm_threset3}: MPlayer</a></td></tr>
		    {/if}
		</table>
		<div id="loading_fx" style="display: none;"><table cellpadding=2 cellspacing=0 border=0><tr><td>{$adm_setgen79}</td><td>{$loading_gif}</td></tr></table></div>
		<div id="rthumb_div1" style="padding: 5px; min-height: 200px;">
		<div id="rthumb_div" style="padding: 5px; min-height: 200px;">
		<table width="100%" cellpadding="2" cellspacing="0" border=0>
		    <tr>
		    {section name=x start=0 loop=$thumb_nr}
			{if $smarty.section.x.index mod 4 eq "0" and $smarty.section.x.index gt "0"}</tr><tr>{/if}
			<td><img src="{$tmb_url}/user{$thuid}/{$smarty.section.x.index+1}_{$rnd}.jpg" class="thumb" width="{$img_max_width/2}" height="{$img_max_height/2}"></td>
		    {/section}
		    </tr>
		</table>
		</div>
		</div>
	    </div>
	</td>
    </tr>
</table>
</form>
