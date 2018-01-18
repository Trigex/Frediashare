<!-- BEGIN NAVMENU TABLE -->
{if $site_theme eq "black" or $site_theme eq "blue"}
<table cellpadding=0 cellspacing=0 border=0 align="center">
    <tr>
	<td colspan=3 class="headercolorfill">
	    <table cellpadding="0" cellspacing="0" border="0" align=center class="width950">
		<tr>
		    <td>{insert name=footer_links assign=logo ff=lt}{if $logo eq "1"}{include file="static/logo_table.tpl"}{/if}</td>
		    <td width="45%" valign="middle">{include file="administration/header/search_table.tpl}</td>
		</tr>
	    </table>
	</td>
    </tr>
    <tr>
	<td class="headerbg_left">&nbsp;</td>
	<td valign="bottom" class="headerbg_fill" align="center">
	    <div id="container" align="center">
		<div id="header" align="center">				
		    <ul id="tnav">                                                                                                                                                     
                	<li><a href="{$admin_url}/audios/all/all_time" {if $btn eq "adm_audio"}class="home"{/if}>{$navaudio}</a></li>                                                       
                        <li><a href="{$admin_url}/images/all/all_time" {if $btn eq "adm_image"}class="home"{/if}>{$navimage}</a></li>                                                       
                        <li><a href="{$admin_url}/videos/all/all_time" {if $btn eq "adm_video"}class="home"{/if}>{$navvideo}</a></li>                                                       
                        <li><a href="{$admin_url}/player" {if $btn eq "adm_fp"}class="home"{/if}>{$navplayers}</a></li>                                                            
                        <li><a href="{$admin_url}/categories" {if $btn eq "adm_categ"}class="home"{/if}>{$navcat}</a></li>                                                         
                        <li><a href="{$admin_url}/members/registered" {if $btn eq "adm_members"}class="home"{/if}>{$navmem}</a></li>                                                          
                        <li><a href="{$admin_url}/settings/general" {if $btn eq "adm_set"}class="home"{/if}>{$navsettings}</a></li>                                                
                    </ul>		
		</div>
	    </div>
	</td>
	<td class="headerbg_right">&nbsp;</td>	
    </tr>
</table>
{elseif $site_theme eq "metube"}
<table cellpadding=0 cellspacing=0 border=0 align="center" width="950">
    <tr>
        <td align="left"><div id="logo_c1">{insert name=footer_links assign=logo ff=lt}{if $logo eq "1"}{include file="static/logo_table.tpl"}{/if}</div></td>
        <td align="right">{include file="administration/header/search_tabletoplinks.tpl"}</td>
    </tr>
</table>
<table cellpadding=0 cellspacing=0 border=0 align="center" width="950" style="border: 1px solid #c5d0d6;">
    <tr>
        <td align="left" valign="top">
        <div class="head_c1">
            <table cellpadding="10" cellspacing="0" border="0">
                <tr>
                    <td id="m2" onmouseover="setactive('m2');" onmouseout="setinactive('m2');" class=""><a href="{$admin_url}/audios/all/all_time">{$navaudio|lower|capitalize}</a></td>
                    <td id="m3" onmouseover="setactive('m3');" onmouseout="setinactive('m3');" class="mbrd_left"><a href="{$admin_url}/images/all/all_time">{$navimage|lower|capitalize}</a></td>
                    <td id="m4" onmouseover="setactive('m4');" onmouseout="setinactive('m4');" class="mbrd_left"><a href="{$admin_url}/videos/all/all_time">{$navvideo|lower|capitalize}</a></td>
                    <td id="m1" onmouseover="setactive('m1');" onmouseout="setinactive('m1');" class="mbrd_left"><a href="{$admin_url}/player">{$navplayers|lower|capitalize}</a></td>
                    <td id="m6" onmouseover="setactive('m6');" onmouseout="setinactive('m6');" class="mbrd_left"><a href="{$admin_url}/categories">{$navcat|lower|capitalize}</a></td>
                    <td id="m7" onmouseover="setactive('m7');" onmouseout="setinactive('m7');" class="mbrd_left"><a href="{$admin_url}/members/registered">{$navmem|lower|capitalize}</a></td>
                    <td id="m5" onmouseover="setactive('m5');" onmouseout="setinactive('m5');" class="mbrd_leftright"><a href="{$admin_url}/settings/general">{$navsettings|lower|capitalize}</a></td>
                    <td class="nopad" style="padding-left: 50px;"><input type="text" name="search" class="search" id="boxS"></td>
                    <td class="nopad">&nbsp;&nbsp;<input type="button" name="searchbtn" value="{$btn_searchtext}" class="fb" onclick="location.href='{$admin_url}/search/all/'+document.getElementById('boxS').value;"></td>
                </tr>
            </table>
        </div>
        </td>
    </tr>
</table>
{else}
<table cellpadding=0 cellspacing=0 border=0 align="center">
    <tr>
	<td colspan=3 class="headercolorfill">
	    <table cellpadding="0" cellspacing="0" border="0" align=center class="width950">
		<tr>
		    <td>{insert name=footer_links assign=logo ff=lt}{if $logo eq "1"}{include file="static/logo_table.tpl"}{/if}</td>
		    <td width="45%" valign="bottom">{include file="administration/header/search_table.tpl}</td>
		</tr>
	    </table>
	</td>
    </tr>
    <tr>
	<td class="headerbg_left">&nbsp;</td>
	<td class="headerbg_fill" valign="top">
	    <div id="header">
	        <ul>
                    <li><a href="{$admin_url}/audios/all/all_time">{if $btn eq "adm_audio"}<span>{/if}{$navaudio}{if $btn eq "adm_audio"}</span>{/if}</a></li>
                    <li><a href="{$admin_url}/images/all/all_time">{if $btn eq "adm_image"}<span>{/if}{$navimage}{if $btn eq "adm_image"}</span>{/if}</a></li>
                    <li><a href="{$admin_url}/videos/all/all_time">{if $btn eq "adm_video"}<span>{/if}{$navvideo}{if $btn eq "adm_video"}</span>{/if}</a></li>
                    <li><a href="{$admin_url}/player">{if $btn eq "adm_fp"}<span>{/if}{$navplayers}{if $btn eq "adm_fp"}</span>{/if}</a></li>
	            <li><a href="{$admin_url}/categories">{if $btn eq "adm_categ"}<span>{/if}{$navcat}{if $btn eq "adm_categ"}</span>{/if}</a></li>
                    <li><a href="{$admin_url}/members/registered">{if $btn eq "adm_members"}<span>{/if}{$navmem}{if $btn eq "adm_members"}</span>{/if}</a></li>
                    <li class="last"><a href="{$admin_url}/settings/general">{if $btn eq "adm_set"}<span>{/if}{$navsettings}{if $btn eq "adm_set"}</span>{/if}</a></li>
		</ul>
	    </div>
	</td>
	<td class="headerbg_right">&nbsp;</td>
    </tr>
</table>
{/if}		    
<!-- END NAVMENU TABLE -->