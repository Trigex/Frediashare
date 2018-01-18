<table border="0" align="center" cellpadding="5" cellspacing="0" class="width950">
    <tr>
	<td valign="top" width="20%" class="lm">
    	    <table cellpadding=2 cellspacing=0 class="pt5" border=0 align="center">
                {include file="_inc/inc_browsech.tpl"}
            </table>
            <br>
            <table cellpadding=2 cellspacing=0 class="{if $sbtn eq "fav" or $sbtn eq "mpl" or $sbtn eq "mpl2" or $sbtn eq "mql" or $sbtn eq "ufavs" or $sbtn eq "myaud" or $sbtn eq "myimg" or $sbtn eq "myvid"}pt5{/if}" border=0 align="center">
            {if $smarty.session.UID ne "" and $panel_mylinks eq "1"}
                {include file="_inc/inc_mylinks.tpl"}
            {/if}
            </table>
        </td> 
        
	<td valign="top" class="" width="80%">{insert name=ad_status assign=check aname=ads_channel}{if $check eq "1"}{assign var=maxl value=9}{else}{assign var=maxl value=$total}{/if}
	    <table cellpadding="0" cellspacing="0" border=0 width="100%">
		<tr>
		{section name=i loop=$res start=0 max=$maxl}
		{insert name=subs_count assign=subscount uid=$res[i].uid}
		{if $enable_videos eq "1"}
		    {insert name=video_count assign=fcount uid=$res[i].uid}
		    {if $fcount eq 1}{assign var=ftype value=$count_singlevideo}{else}{assign var=ftype value=$videos_main|lower}{/if}
		{elseif $enable_images eq "1"}
		    {insert name=image_count assign=fcount uid=$res[i].uid}
		    {if $fcount eq 1}{assign var=ftype value=$count_singleimage}{else}{assign var=ftype value=$images_main|lower}{/if}
		{elseif $enable_audio eq "1"}
		    {insert name=audio_count assign=fcount uid=$res[i].uid}
		    {if $fcount eq 1}{assign var=ftype value=$count_singleaudio}{else}{assign var=ftype value=$audios_main|lower}{/if}
		{/if}
		
		{if $check eq "1"}
		    {if ($smarty.section.i.index mod 3 eq "0" and $smarty.section.i.index gt 0) or ( ( $smarty.section.i.total lt 4 and $smarty.section.i.last) or ( $smarty.section.i.total lt 2 ) ) }{if $smarty.section.i.index lt 4 and $smarty.section.i.index ne 0}<td rowspan="3" colspan="2" valign="middle">{include file="ads/channel_ads.tpl"}</td></tr><tr>{elseif $smarty.section.i.index lt 4 and $smarty.section.i.index eq 0}<td class="nopad"></td><td rowspan="2" valign="top">{include file="ads/channel_ads.tpl"}</td></tr><tr>{else}</tr><tr>{/if}{/if}
		{else}
		    {if $smarty.section.i.index mod 5 eq "0" and $smarty.section.i.index gt 0}</tr><tr>{/if}
		{/if}
		    <td width="{if $check eq "1"}33%{else}20%{/if}" valign="top">
			<table cellpadding="1" cellspacing="0" border=0>
			    <tr><td colspan="2"><a href="{$base_url}/user/{$res[i].username}">{$res[i].username}</a></td></tr>
			    <tr>
				<td>
				    <a href="{$base_url}/user/{if $special_characters eq "0"}{$res[i].username}{else}{$res[i].uid}{/if}">
                                        <img src="{$usrimg_url}/{$res[i].photo}" width="{$avatar_width/1.5}" height="{$avatar_height/1.5}" alt="{$res[i].username}" title="{$res[i].username}" class="{if $res[i].gender eq "M"}user_img{elseif $res[i].gender eq "F"}user_imgf{else}user_img{/if}">
                                    </a>
                                </td>
                                <td valign="top" class="normal pl2">
                            	    <div>{$fcount|viewnr}</div>
                            	    <div>{$ftype}</div>
                            	    <div class="pt10">{if $smarty.get.sort eq "" or $smarty.get.sort eq "mv"}{$res[i].ch_views|viewnr}{elseif $smarty.get.sort eq "ms"}{$subscount}{/if}</div>
                            	    <div>
                            	    {if $smarty.get.sort eq "" or $smarty.get.sort eq "mv"}
                            		{if $res[i].ch_views eq 1}{$count_singleview}{else}{$adm_sortviews|lower}{/if}
                            	    {elseif $smarty.get.sort eq "ms"}
                            		{if $subscount eq 1}{$count_singlesubs}{else}{$count_multisubs}{/if}
                            	    {/if}
                            	    </div>
                                </td>
			    </tr>
			    {if !$smarty.section.i.last}<tr><td colspan="2">&nbsp;</td></tr>{/if}
			</table>
		    </td>
		{/section}
		</tr>
		{if $total gt 9 and $check eq "1"}
		<tr>
		{section name=j loop=$res start=9 max=$total}
		{insert name=subs_count assign=subscount uid=$res[j].uid}
		{if $enable_videos eq "1"}
		    {insert name=video_count assign=fcount uid=$res[j].uid}
		    {if $fcount eq 1}{assign var=ftype value=$count_singlevideo}{else}{assign var=ftype value=$videos_main|lower}{/if}
		{elseif $enable_images eq "1"}
		    {insert name=image_count assign=fcount uid=$res[j].uid}
		    {if $fcount eq 1}{assign var=ftype value=$count_singleimage}{else}{assign var=ftype value=$images_main|lower}{/if}
		{elseif $enable_audio eq "1"}
		    {insert name=audio_count assign=fcount uid=$res[j].uid}
		    {if $fcount eq 1}{assign var=ftype value=$count_singleaudio}{else}{assign var=ftype value=$audios_main|lower}{/if}
		{/if}
		{if $smarty.section.j.index gt 10 and ((($smarty.section.j.index+1) mod 5) eq "0")}</tr><tr>{/if}
		    <td valign="top">
			<table cellpadding="1" cellspacing="0" border=0>
			    <tr><td colspan="2"><a href="{$base_url}/user/{$res[j].username}">{$res[j].username}</a></td></tr>
			    <tr>
				<td>
				    <a href="{$base_url}/user/{if $special_characters eq "0"}{$res[j].username}{else}{$res[j].uid}{/if}">
                                        <img src="{$usrimg_url}/{$res[j].photo}" width="{$avatar_width/1.5}" height="{$avatar_height/1.5}" alt="{$res[j].username}" title="{$res[j].username}" class="{if $res[j].gender eq "M"}user_img{elseif $res[j].gender eq "F"}user_imgf{else}user_img{/if}">
                                    </a>
                                </td>
                                <td valign="top" class="normal pl2">
                            	    <div>{$fcount|viewnr}</div>
                            	    <div>{$ftype}</div>
                            	    <div class="pt10">{if $smarty.get.sort eq "" or $smarty.get.sort eq "mv"}{$res[j].ch_views|viewnr}{elseif $smarty.get.sort eq "ms"}{$subscount}{/if}</div>
                            	    <div>
                            	    {if $smarty.get.sort eq "" or $smarty.get.sort eq "mv"}
                            		{if $res[j].ch_views eq 1}{$count_singleview}{else}{$adm_sortviews|lower}{/if}
                            	    {elseif $smarty.get.sort eq "ms"}
                            		{if $subscount eq 1}{$count_singlesubs}{else}{$count_multisubs}{/if}
                            	    {/if}
                                </td>
			    </tr>
			    {if !$smarty.section.j.last}<tr><td colspan="2">&nbsp;</td></tr>{/if}
			</table>
		    </td>
		{/section}
		{/if}
		</tr>
	    </table>
	    <table cellpadding="0" cellspacing="0" border=0 width="100%">
		<tr>
		    <td align="center" class="pag_bg pt10">{$link}</td>
		</tr>
	    </table>
	</td>
    </tr>
</table>
