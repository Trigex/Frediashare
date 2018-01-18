
<!-- BEGIN VIEW FILE MAIN TABLE -->
{if $inap eq "yes"}
{if $btn eq "bvideo"}
    {php}global $smarty; global $lang; $err=$lang['err_videoinap']; $smarty->assign('err',$err);{/php}
{elseif $btn eq "bimage"}
    {php}global $smarty; global $lang; $err=$lang['err_imageinap']; $smarty->assign('err',$err);{/php}
{elseif $btn eq "baudio"}
    {php}global $smarty; global $lang; $err=$lang['err_audioinap']; $smarty->assign('err',$err);{/php}
{/if}
{include file=error_table.tpl}
{elseif $inap eq "no"}
<table border="0" align="center" cellpadding="5" cellspacing="0" class="width950">
    <tr>
	<td valign="top" colspan=2 class="grey">
	    <table cellpadding=0 cellspacing=0 border=0 align=center width="100%">
		<tr>
		    <td align="left" valign="top" width="{$pwidth}" class="vvpad">
			{if $btn eq "bvideo"}{if $same_title_uploads eq "0"}{insert name=titlev_to_key assign=key vtitle=$smarty.request.id}{else}{assign var=key value=$smarty.request.id}{assign var=ftype value="video"}{/if}
			{elseif $btn eq "bimage"}{if $same_title_uploads eq "0"}{insert name=titlei_to_key assign=key vtitle=$smarty.request.id}{else}{assign var=key value=$smarty.request.id}{assign var=ftype value="image"}{/if}
			{elseif $btn eq "baudio"}{if $same_title_uploads eq "0"}{insert name=titlea_to_key assign=key vtitle=$smarty.request.id}{else}{assign var=key value=$smarty.request.id}{assign var=ftype value="audio"}{/if}
			{/if}
			{if $btn eq "baudio"}
			    {if $audio_logo ne "" and $plogo eq "1"}{assign var=logo value="&logo=$url_fp/wms_audio/$audio_logo"}{/if}
			    {if $audio_logo ne "" and $plogo2 eq "1"}{assign var=logo2 value="&logo=$url_fp/wms_audio/$audio_logo"}{/if}
			    {if $play eq "1"}{assign var=autoplay value="&autostart=true"}{else}{assign var=autoplay value="&autostart=false"}{/if}
			    {if $play2 eq "1"}{assign var=autoplay2 value="&autostart=true"}{else}{assign var=autoplay2 value="&autostart=false"}{/if}
			    {if $showeq eq "def"}{assign var=showeq value=""}{elseif $showeq eq "rnd"}{assign var=showeq value="&skin=$base_url/modules/aPlayer/skins/$rnd_skin"}{else}{assign var=showeq value="&skin=$base_url/modules/aPlayer/skins/$showeq"}{/if}
			    {if $showeq2 eq "def"}{assign var=showeq2 value=""}{elseif $showeq2 eq "rnd"}{assign var=showeq2 value="&skin=$base_url/modules/aPlayer/skins/$rnd_skin"}{else}{assign var=showeq2 value="&skin=$base_url/modules/aPlayer/skins/$showeq2"}{/if}
			{/if}
			{if $btn eq "bvideo"}{assign var=ftype value="video"}{elseif $btn eq "bimage"}{assign var=ftype value="image"}{elseif $btn eq "baudio"}{assign var=ftype value="audio"}{/if}
			{if $smarty.request.pl ne ""}
			    {insert name=getfield assign=plpriv field=privacy table=playlist_$ftype qfield=vkey qvalue=$smarty.request.pl}
			    {if $plpriv eq "private" and ( $friend eq "yes" or $vuid eq $smarty.session.UID )}
    				{assign var=ploop value="1"}
			    {elseif $plpriv eq "private" and $friend ne "yes"}
    				{assign var=ploop value="0"}
			    {else}
    				{assign var=ploop value="1"}
			    {/if}
			{/if}
			{include file="_inc/viewfile/inc_viewfiletitle.tpl"}
			{include file="_inc/viewfile/inc_viewfileplayers.tpl"}
			{include file="_inc/viewfile/inc_viewfiletabsleft.tpl"}
			{if $vpage_pcnbox eq "1" and $vpage_pcnbox_pos eq "left"}
			<br>
			{include file="_inc/viewfile/inc_viewfilenextprev.tpl"}
			{/if}
<!-- BEGIN VIEW FILE LEFT ADVERTISEMENT AREA -->
			<br>
			{insert name=ad_status assign=check aname=view_file_ads_left}
			{if $check eq "1"}
			{include file="ads/view_file_ads_left.tpl"}
			{/if}
			
			{insert name=getfield assign=ar field=is_fileresp table=files_$ftype qfield=vkey qvalue=$key}
			{if $file_responses eq "1" and ($ar eq "yes" or $ar eq "app")}
			
			<table width="100%" cellpadding="0" cellspacing="0" border=0><tr><td><br>
			{include file="_inc/viewfile/inc_viewfileresponses.tpl"}<br></td></tr></table>
			
			{/if}
			
			{if $errs eq ""}
			
			<table width="100%" cellpadding="0" cellspacing="0"><tr><td><br>
			{include file="_inc/viewfile/inc_viewfilecomments.tpl"}</td></tr></table>
			{else}
			    {$pr_chinfob54}
			{/if}
<!-- END VIEW FILE LEFT ADVERTISEMENT AREA -->
		    </td>
		    <td valign="top" class="">
			<table width="100%" cellpadding="2" cellspacing="1" border=0>
                            <tr>
                                <td width="60%" valign="top" class="vtitle">&nbsp;</td>
                            </tr>
                        </table>
			{insert name=ad_status assign=check aname=view_file_ads_right}
			{if $check eq "1"}
			{include file="ads/view_file_ads_right.tpl"}
			<br>
			{/if}
			{include file="_inc/viewfile/inc_viewfiledetails.tpl"}
			<br>
			{if $vpage_pcnbox eq "1" and $vpage_pcnbox_pos eq "right"}
			<br>
			{include file="_inc/viewfile/inc_viewfilenextprev.tpl"}
			<br>
			{/if}
<!-- BEGIN VIEW FILE RIGHT ADVERTISEMENT AREA -->
			
<!-- END VIEW FILE RIGHT ADVERTISEMENT AREA -->
			{if $btn eq "bvideo" and $thumb_module eq "1"}
                        {insert name=gen_array assign=larra nr=$thumb_nr}
                        {insert name=gen_array assign=uarra nr=$thumb_nr}
                        {insert name=gen_array assign=arra nr=$thumb_nr}
                        {/if}
                        {if $vpage_ftabs eq "1" and $vpage_ftabs_t5 eq "1"}{if $smarty.session.UID ne "" or $guests_file_sorting eq "1"}{include file="_inc/viewfile/inc_viewfiletabsrightuser.tpl"}<br>{/if}{/if}
                        {include file="_inc/viewfile/inc_viewfileplaylist.tpl"}
                        {include file="_inc/viewfile/inc_viewfilequicklist.tpl"}
			{if $vpage_ftabs eq "1" and $vpage_ftabs_t1 eq "1"}{if $smarty.session.UID ne "" or $guests_file_sorting eq "1"}{include file="_inc/viewfile/inc_viewfiletabsrightrelated.tpl"}<br>{/if}{/if}
			{if $vpage_ftags eq "1"}{include file="_inc/viewfile/inc_viewfiletags.tpl"}{/if}
		    </td>
		</tr>
	    </table>
	</td>
    </tr>
</table>
{/if}
<!-- END VIEW FILE MAIN TABLE -->
{if $btn eq "bvideo" and $thumb_module eq "1"}
<script type="text/javascript"> 
    window.loaded = true;
    {section name=i loop=$bid}
    {insert name=vid_to_rndv assign=rnd vid=$bid[i].vid}
        lturl['l{$rnd}']=0; ltimg['l{$rnd}']=new Array(); lthumbs['l{$rnd}']=new Array({$larra});
        uturl['u{$rnd}']=0; utimg['u{$rnd}']=new Array(); uthumbs['u{$rnd}']=new Array({$uarra});
        turl['{$rnd}']=0; timg['{$rnd}']=new Array(); thumbs['{$rnd}']=new Array({$arra});
    {/section}
</script>
{/if}
<script language="javascript" src="{$js_url}/ajaxresponder.js" type="text/javascript"></script>
<input type="hidden" name="ldivx" id="ldivx" value="">
<input type="hidden" name="thisDiv" id="thisDiv" value="">
