<!-- BEGIN NAVMENU TABLE -->
{if $site_theme eq "black" or $site_theme eq "blue"}
<table cellpadding=0 cellspacing=0 border=0 align="center">
    <tr>
	<td colspan=3 class="headercolorfill" valign="top">
	    <table cellpadding="0" cellspacing="0" border="0" align=center class="width950">
		<tr>
		    <td>{insert name=footer_links assign=logo ff=lt}{if $logo eq "1"}{include file="static/logo_table.tpl"}{/if}</td>
		    <td width="45%" valign="top">{include file="header/search_table.tpl}</td>
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
			<li><a href="{$base_url}/main" {if $btn eq "bhome" or $btn eq "messages"}class="home"{/if}>{$navhome}</a></li>
			{if $enable_audio eq "1"}<li><a href="{$base_url}/audios" {if $btn eq "baudio"}class="home"{/if}>{$navaudio}</a></li>{/if}
			{if $enable_images eq "1"}<li><a href="{$base_url}/images" {if $btn eq "bimage"}class="home"{/if}>{$navimage}</a></li>{/if}
			{if $enable_videos eq "1"}<li><a href="{$base_url}/videos" {if $btn eq "bvideo"}class="home"{/if}>{$navvideo}</a></li>{/if}
			<li><a href="{$base_url}/categories" {if $btn eq "bcateg"}class="home"{/if}>{$navcat}</a></li>
			{if $enable_channels eq "1"}<li><a href="{$base_url}/channels" {if $btn eq "bchan"}class="home"{/if}>{$navchan}</a></li>{/if}
			{if $members_section eq "1"}<li><a href="{$base_url}/members" {if $btn eq "bmember"}class="home"{/if}>{$navmem}</a></li>{/if}
			<li><a href="{$base_url}/upload" {if $btn eq "bupload"}class="home"{/if}>{$navup}</a></li>
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
	<td align="right">{include file="header/search_tabletoplinks.tpl"}</td>
    </tr>
</table>
<table cellpadding=0 cellspacing=0 border=0 align="center" width="950" style="border: 1px solid #c5d0d6;">
    <tr>
	<td align="left" valign="top">
	<div class="head_c1">
	    <table cellpadding="10" cellspacing="0" border="0">
		<tr>
	    	    <td id="m1" onmouseover="setactive('m1');" onmouseout="setinactive('m1');"><a href="{$base_url}/main">{$navhome|lower|capitalize}</a></td>
		    {if $enable_audio eq "1"}<td id="m2" onmouseover="setactive('m2');" onmouseout="setinactive('m2');" class="mbrd_left"><a href="{$base_url}/audios">{$navaudio|lower|capitalize}</a></td>{/if}
		    {if $enable_images eq "1"}<td id="m3" onmouseover="setactive('m3');" onmouseout="setinactive('m3');" class="mbrd_left"><a href="{$base_url}/images">{$navimage|lower|capitalize}</a></td>{/if}
		    {if $enable_videos eq "1"}<td id="m4" onmouseover="setactive('m4');" onmouseout="setinactive('m4');" class="mbrd_left"><a href="{$base_url}/videos">{$navvideo|lower|capitalize}</a></td>{/if}
		    {if $enable_channels eq "1"}<td id="m5" onmouseover="setactive('m5');" onmouseout="setinactive('m5');" class="mbrd_leftright"><a href="{$base_url}/channels">{$navchan|lower|capitalize}</a></td>{else}<td id="m5" onmouseover="setactive('m5');" onmouseout="setinactive('m5');" class="mbrd_leftright"><a href="{$base_url}/members">{$navmem|lower|capitalize}</a></td>{/if}
		    <td class="nopad" style="padding-left: 70px;"><input type="text" name="search" class="search" id="boxS"></td>
		    <td class="nopad">&nbsp;&nbsp;<input type="button" name="searchbtn" value="{$btn_searchtext}" class="fb" onclick="location.href='{$base_url}/search/all/'+document.getElementById('boxS').value;"></td>
		</tr>
	    </table>
	</div>
	</td>
	<td align="center" class="head_c1" valign="middle">
	    <table cellpadding="0" cellspacing="0" border="0">
		<tr>
		    <td>
			<ul id="Menu_upload" class="MM_upload">
			    <li><a id="upload_menu" class="rollover" href="javascript:void(0)"><span class="alt"></span><img src="{$theme_url}/{$site_theme}/images/transparent.gif" alt="{$navup|lower|capitalize}" width="92" height="25"></a>
				<ul>
				    {if $enable_audio eq "1"}<li><a href="{$base_url}/upload_audio">{$title_upaudios}</a></li>{/if}
				    {if $enable_images eq "1"}<li><a href="{$base_url}/upload_image">{$title_upimages}</a></li>{/if}
				    {if $enable_videos eq "1"}<li><a href="{$base_url}/upload_video">{$title_upvideos}</a></li>{/if}
				</ul>
			    </li>
			</ul>
		    </td>
		</tr>
	    </table>
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
		    <td width="45%" valign="bottom">{include file="header/search_table.tpl}</td>
		</tr>
	    </table>
	</td>
    </tr>
    <tr>
	<td class="headerbg_left">&nbsp;</td>
	<td class="headerbg_fill" valign="top">
	    <div id="header">
	        <ul>
	    	    <li><a href="{$base_url}/main"> {if $btn eq "bhome" or $btn eq "messages"}<span>{/if}{$navhome}{if $btn eq "bhome" or $btn eq "messages"}</span>{/if}</a></li>
		    {if $enable_audio eq "1"}<li><a href="{$base_url}/audios"> {if $btn eq "baudio"}<span>{/if}{$navaudio}{if $btn eq "baudio"}</span>{/if}</a></li>{/if}
		    {if $enable_images eq "1"}<li><a href="{$base_url}/images"> {if $btn eq "bimage"}<span>{/if}{$navimage}{if $btn eq "bimage"}</span>{/if}</a></li>{/if}
		    {if $enable_videos eq "1"}<li><a href="{$base_url}/videos"> {if $btn eq "bvideo"}<span>{/if}{$navvideo}{if $btn eq "bvideo"}</span>{/if}</a></li>{/if}
		    <li><a href="{$base_url}/categories"> {if $btn eq "bcateg"}<span>{/if}{$navcat}{if $btn eq "bcateg"}</span>{/if}</a></li>
		    {if $enable_channels eq "1"}<li><a href="{$base_url}/channels" {if $btn eq "bchan"} class="home"{/if}>{$navchan}</a></li>{/if}
		    {if $members_section eq "1"}<li><a href="{$base_url}/members"> {if $btn eq "bmember"}<span>{/if}{$navmem}{if $btn eq "bmember"}</span>{/if}</a></li>{/if}
		    <li class="last"><a href="{$base_url}/upload"> {if $btn eq "bupload"}<span>{/if}{$navup}{if $btn eq "bupload"}</span>{/if}</a></li>
		</ul>
	    </div>
	</td>
	<td class="headerbg_right">&nbsp;</td>
    </tr>
</table>
{/if}
<!-- END NAVMENU TABLE -->