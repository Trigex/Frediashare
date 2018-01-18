
<!-- BEGIN ADMIN AREA SUBHEADER TABLE -->
<table width="{if $site_theme eq "metube"}950{else}100%{/if}" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td id="subnavm" style="padding-left: 0px;">
	    <table align="{if $site_theme eq "metube"}left{else}center{/if}" cellpadding=0 cellspacing=0 border=0>
		<tr>
		    <td align="center">
			<table cellpadding=1 cellspacing=1 border=0>
			    <tr>
				{if $smarty.session.AUID ne ""}
				    {if $btn eq "adm_categ"}
				<td><a href="{$admin_url}/categories"><span class="{if $sbtn eq "manage"}act{else}{/if}">{$snav_categconfig}</span></a></td>
				    {elseif $btn eq "adm_fp"}
				<td><a href="{$admin_url}/player_main_audio"><span class="{if $sbtn eq "plaaudio"}act{else}{/if}">{$snav_aplayer}</span></a>{$myfiles_delim}</td>								    
				<td><a href="{$admin_url}/watermark_main_audio"><span class="{if $sbtn eq "wmaudio"}act{else}{/if}">{$snav_awm}</span></a></td>
				<td>{$myfiles_delim}</td>
				<td><a href="{$admin_url}/textads"><span class="{if $sbtn eq "tads"}act{else}{/if}">{$adm_nfptxt5}</span></a>{$myfiles_delim}</td>
				<td><a href="{$admin_url}/videoads"><span class="{if $sbtn eq "ads"}act{else}{/if}">{$snav_vads}</span></a>{$myfiles_delim}</td>
				<td><a href="{$admin_url}/player_main"><span class="{if $sbtn eq "pla"}act{else}{/if}">{$snav_vplayer}</span></a>{$myfiles_delim}</td>								    
				<td><a href="{$admin_url}/watermark_main"><span class="{if $sbtn eq "wm"}act{else}{/if}">{$snav_vwm}</span></a></td>
				    {elseif $btn eq "adm_members"}
				<td><a href="{$admin_url}/members/email/all"><span class="{if $sbtn eq "mailall"}act{else}{/if}">{$snav_mememailall}</span></a>{$myfiles_delim}</td>
				{if $enable_inbox eq "1"}<td><a href="{$admin_url}/members/message/all"><span class="{if $sbtn eq "msgall"}act{else}{/if}">{$snav_memmsgall}</span></a>{$myfiles_delim}</td>{/if}
				<td><a href="{$admin_url}/members/banned"><span class="{if $sbtn eq "adm_banned"}act{else}{/if}">{$snav_membanned}</span></a>{$myfiles_delim}</td>
				<td><a href="{$admin_url}/members/registered"><span class="{if $sbtn eq "main" or $sbtn eq "dtl" or $sbtn eq "mail"}act{else}{/if}">{$snav_memregged}</span></a>{$myfiles_delim}</td>
				<td><a href="{$admin_url}/members/requests"><span class="{if $sbtn eq "adm_memreq"}act{else}{/if}">{$adm_memchreq1}</span></a></td>
				    {elseif $btn eq "adm_set"}
				<td><a href="{$admin_url}/settings/ads"><span class="{if $sbtn eq "siteads"}act{else}{/if}">{$snav_setad}</span></a>{$myfiles_delim}</td>
				<td><a href="{$admin_url}/settings/templates"><span class="{if $sbtn eq "tpl"}act{else}{/if}">{$snav_settpl}</span></a>{$myfiles_delim}</td>				
				<td><a href="{$admin_url}/settings/general"><span class="{if $sbtn eq "gen"}act{else}{/if}">{$snav_setgen}</span></a>{$myfiles_delim}</td>
				<td><a href="{$admin_url}/settings/guest"><span class="{if $sbtn eq "guest"}act{else}{/if}">{$snav_setguest}</span></a>{$myfiles_delim}</td>
				<td><a href="{$admin_url}/settings/languages"><span class="{if $sbtn eq "langs"}act{else}{/if}">{$snav_setlang}</span></a>{$myfiles_delim}</td>
				<td><a href="{$admin_url}/settings/paging"><span class="{if $sbtn eq "pag"}act{else}{/if}">{$snav_setpag}</span></a>{$myfiles_delim}</td>
				<td><a href="{$admin_url}/settings/system"><span class="{if $sbtn eq "sys"}act{else}{/if}">{$snav_setsys}</span></a></td>
				    {elseif $btn eq "adm_video"}
				<td><a href="{$admin_url}/videos/all/all_time"><span class="{if $sbtn eq "allv"}act{else}{/if}">{$snav_allvideos}</span></a>{$myfiles_delim}</td>
				<td><a href="{$admin_url}/requests/video/featured/active"><span class="{if $smarty.request.show eq "featured"}act{else}{/if}">{$snav_featreq}</span></a>{$myfiles_delim}</td>
				<td><a href="{$admin_url}/requests/video/inappropriate/active"><span class="{if $smarty.request.show eq "inappropriate"}act{else}{/if}">{$snav_inappreq}</span></a></td>
				    {elseif $btn eq "adm_image"}
				<td><a href="{$admin_url}/images/all/all_time"><span class="{if $sbtn eq "alli"}act{else}{/if}">{$snav_allimages}</span></a>{$myfiles_delim}</td>
				<td><a href="{$admin_url}/requests/image/featured/active"><span class="{if $smarty.request.show eq "featured"}act{else}{/if}">{$snav_featreq}</span></a>{$myfiles_delim}</td>
				<td><a href="{$admin_url}/requests/image/inappropriate/active"><span class="{if $smarty.request.show eq "inappropriate"}act{else}{/if}">{$snav_inappreq}</span></a></td>
				    {elseif $btn eq "adm_audio"}
				<td><a href="{$admin_url}/audios/all/all_time"><span class="{if $sbtn eq "alla"}act{else}{/if}">{$snav_allaudios}</span></a>{$myfiles_delim}</td>
				<td><a href="{$admin_url}/requests/audio/featured/active"><span class="{if $smarty.request.show eq "featured"}act{else}{/if}">{$snav_featreq}</span></a>{$myfiles_delim}</td>
				<td><a href="{$admin_url}/requests/audio/inappropriate/active"><span class="{if $smarty.request.show eq "inappropriate"}act{else}{/if}">{$snav_inappreq}</span></a></td>
				    {/if}
				{else}
				<td><a href="{$base_url}/main">{$adm_mainsite}</a></td>
				{/if}
			    </tr>
			</table>
		    </td>
		</tr>
	    </table>
        </td>
    </tr>
</table>
<!-- END ADMIN AREA SUBHEADER TABLE -->
