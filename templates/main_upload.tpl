
<!-- BEGIN UPLOAD PAGE TABLES -->
<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
    <tr>
	<td class="" align="right">
	    <table cellpadding="2" cellspacing="0">
		<tr>
                    {if $enable_audio eq "1"}
                        <td><a href="{$base_url}/upload_audio"><span class="{if $sbtn eq "1"}act{/if}">{$title_upaudios}</span></a>{if $enable_images eq "1"}{$myfiles_delim}{/if}</td>
                    {/if}
                    {if $enable_images eq "1"}
                        <td><a href="{$base_url}/upload_image"><span class="{if $sbtn eq "2"}act{/if}">{$title_upimages}</span></a>{if $enable_videos eq "1"}{$myfiles_delim}{/if}</td>
                    {/if}
                    {if $enable_videos eq "1"}
                        <td>{if $enable_images eq "0" and $enable_audio eq "1"}{$myfiles_delim}{/if}<a href="{$base_url}/upload_video"><span class="{if $sbtn eq "3"}act{/if}">{$title_upvideos}</span></a></td>
                    {/if}
                </tr>
            </table>
	</td>
    </tr>
</table>
<table cellpadding="5" cellspacing="0" border=0 align="center" class="width950b">

{if $type eq "general"}
    <tr>
	<td valign="top" class=grey>
{include file="upload_general.tpl"}
	</td>
    </tr>
{/if}    

{if $type eq "video"}
    <tr>
	<td valign="top" class="grey">
{include file="upload_videos.tpl"}
	</td>
    </tr>
{/if}
{if $type eq "audio"}
    <tr>
	<td valign="top" class="grey">
{include file="upload_audios.tpl"}
	</td>
    </tr>
{/if}
{if $type eq "image"}
    <tr>
	<td valign="top" class="grey">
{include file="upload_images.tpl"}
	</td>
    </tr>
{/if}
{if $type eq "vconfirmation" or $type eq "aconfirmation" or $type eq "iconfirmation"}
    {if $type eq "vconfirmation"} {assign var=filetype value=video} {/if} 
    {if $type eq "aconfirmation"} {assign var=filetype value=audio} {/if}
    {if $type eq "iconfirmation"} {assign var=filetype value=image} {/if}
    <tr>
	<td valign="top" align="left" class=grey>
	    <div class="spacer"></div>
	    <table cellpadding=5 cellspacing=1 border=0 width="90%" align="center">
		<tr>
		    <td rowspan=2 align=center valign=top><img src="{$img_url}/warning.gif" width="46" height="40" alt="Upload Information"></td>
		    {if $type eq "vconfirmation"}<td><h3>{$up_th8}</h3></td>{/if}
		    {if $type eq "iconfirmation"}<td><h3>{$up_th9}</h3></td>{/if}
		    {if $type eq "aconfirmation"}<td><h3>{$up_th10}</h3></td>{/if}
		</tr>
		<tr>
		    <td>
			{if $type eq "vconfirmation"}{$up_txt1}{/if}
			{if $type eq "iconfirmation"}{$up_txt2}{/if}
			{if $type eq "aconfirmation"}{$up_txt3}{/if}
		    </td>
		</tr>
		{if $filetype ne "image"}
		<tr>
		    <td colspan=2>
			{if $type eq "vconfirmation"}{$up_txt4}{/if}
			{if $type eq "aconfirmation"}{$up_txt5}{/if}
		    </td>
		</tr>
		{/if}
		<tr>
		    <td colspan=2>
			{if $type eq "vconfirmation"}{$up_txt6}{/if}
			{if $type eq "iconfirmation"}{$up_txt7}{/if}
			{if $type eq "aconfirmation"}{$up_txt8}{/if}
		    </td>
		</tr>
		<tr>
		    <td colspan=2><div class="spacer"></div>
			<table width="100%" cellpadding=1 cellspacing=0 border=0>
			    <tr><td>{$up_txt9}</td></tr>
			    <tr><td>{$up_txt10}</td></tr>
			    <tr><td>{$up_txt11}{$site_name}{$up_txt12}</td></tr>
			</table>
		    </td>
		</tr>
	    </table>
	    <br>
	</td>
    </tr>
{/if}
</table>
<!-- END UPLOAD PAGE TABLES -->
