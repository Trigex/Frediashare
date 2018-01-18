<!-- BEGIN SEARCH RESULTS TABLE -->
{if $err eq ""}
	    {if $in eq $saudios}{assign var=mnk value=searcha}{assign var=lnk value=audios}
    	    {elseif $in eq $simages}{assign var=mnk value=searchi}{assign var=lnk value=images}
    	    {elseif $in eq $svideos}{assign var=mnk value=searchv}{assign var=lnk value=videos}
            {elseif $in eq $smembers or $in eq $uch_thl4}{assign var=mnk value=searchm}{if $enable_channels eq "0"}{assign var=lnk value=members}{else}{assign var=lnk value=channels}{/if}
            {elseif $in eq $stags}{assign var=mnk value=searcht}{assign var=lnk value=tags}
            {elseif $in eq $uch_thl8}{assign var=mnk value=searchp}{assign var=lnk value=playlists}
            {elseif $in eq $site_name}{assign var=mnk value=searchall}{assign var=lnk value=all}
            {/if}

<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="{if $site_theme ne "metube"}br2{/if}" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
    <tr>
	<td class="br2" style="border-left: 0px; border-right: 0px; {if $site_theme eq "metube"}border-top: 0px;{/if}">
	    <table cellpadding="0" cellspacing="0" width="100%">
		<tr>
		    <td align="left"><h1>{$dm_search1}</h1></td>
		    <td align="right"><span class="italic">{$search_th1} '{$in}' {$search_th2} '{$stype}' {$search_th3} {$total} {if $total eq "1"}{$search_th4}{else}{$search_th5}{/if}</span> {if $total ne "0"}[{$start_num}-{$end_num}] {$search_of} [{$total}]{else}&nbsp;{/if}</td>
		</tr>
	    </table>
	</td>
    </tr>
    <tr>{include file="_inc/inc_searchfilters.tpl"}</tr>
</table>            
<table border="0" align="center" cellpadding="5" cellspacing="0" class="width950b" style="border-left: 0px; border-right: 0px;">
    <tr>
	<td class="nopad_bg" colspan=2>
<!-- MEMBER SEARCH RESULTS -->	
	{if $res[0].vtags eq "" and $smarty.request.searchp eq ""}
	<table cellpadding=0 cellspacing=0 border="0" width="100%">
	    <tr>
		<td valign="top">
		    {include file="_inc/inc_listmembers.tpl"}
    		    <table cellpadding=5 cellspacing=0 align="center">
			<tr>
			    <td class="pag_bg">{$link}</td>
			</tr>
    		    </table>
		</td>
	    </tr>
	</table>
<!-- END MEMBER SEARCH RESULTS -->	
<!-- PLAYLIST SEARCH RESULTS -->	
	{elseif $res[0].vtags eq "" and $smarty.request.searchp ne ""}
	<table cellpadding=0 cellspacing=0 border="0" width="100%">
	    <tr>
		<td valign="top">
		    {include file="_inc/inc_searchplist.tpl"}
    		    <table cellpadding=5 cellspacing=0 align="center">
			<tr>
			    <td class="pag_bg">{$link}</td>
			</tr>
    		    </table>
		</td>
    	    </tr>
	</table>
<!-- END PLAYLIST SEARCH RESULTS -->	
<!-- FILE SEARCH RESULTS -->
	{elseif $res[0].vtags ne ""}
	<table border="0" align="center" cellpadding="5" cellspacing="0" width="100%">
	    <tr>
    		<td valign="top" width="20%">
		    <table cellpadding=2 cellspacing=0 class="pt10" border=0 align="center">
                	{include file="_inc/inc_viewstags.tpl"}
                    </table>
		</td>
	
		<td valign="top" class="nopad_bg" width="60%"><form id="setview"><input type="hidden" name="viewmode" value="{$smarty.session.viewmode}"></form>
		<table cellpadding="0" cellspacing="0" width="100%">
		<tr>
		<td>
		    <div id="mytags" {if $smarty.session.mytags eq "off"}style="display: none;"{else}style="display: block;"{/if}>
        		<table width="100%" cellpadding=5 cellspacing=0 border=0>
            		    <tr>
                		<td class="centered">{$mytags}</td>
            		    </tr>
        		</table>
    		    </div>
    		</td>
    		</tr>
    		<tr>
    		<td>
    		    <form name="filesel" method="post" action="">
    			{include file="_inc/inc_searchlist.tpl"}
    		    </form>
    		    
    		    <form name="gvfilesel" method="post" action="">
    			{include file="_inc/inc_searchgrid.tpl"}
    		    </form>
    		</td>
    		</tr>
    		<tr>
    		<td>
    		    <table cellpadding=5 cellspacing=0 align="center">
			<tr>
			    <td class="pag_bg">{$link}</td>
			</tr>
    		    </table>
    		</tr>
    		</td>
    		</table>
		</td>
	
	    </tr>
	</table>
	{/if}
<!-- END FILE SEARCH RESULTS -->
	</td>
    </tr>
</table>
{/if}
<!-- END SEARCH RESULTS TABLE -->
