
<!-- BEGIN MY QUICKLIST TABLE -->
<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
    <tr>
	{include file="_inc/inc_myfilestabs.tpl"}
    </tr>
</table>
<table border="0" align="center" cellpadding="5" cellspacing="0" class="width900b">
{if $my_msg ne "" and $smarty.session.ignore_quicklist ne "1"}
    <tr>
	<td colspan="2" class="nopad">{$my_msg}</td>
    </tr>
{/if}
    <tr>
        <td colspan=2 class="nopad">
            <div id="plaudio" {if $smarty.request.page eq "" and $smarty.request.pagei eq "" and $smarty.request.vtype eq "" and $smarty.request.itype eq ""}style="display: block;"{else}style="display: none;"{/if}>
                {if $enable_audio eq "1"}
                    {include file="_inc/inc_listaudios.tpl"}
                {/if}
            </div>
            <div id="plimage" style="{if $enable_audio eq "1" and ($smarty.request.pagei eq "" and $smarty.request.itype eq "")}display: none;{elseif $enable_audio eq "0" and $enable_images eq "0"}display: none;{elseif $enable_audio eq "0" and $smarty.request.vtype ne ""}display: none;{else}display: block;{/if}">
                {if $enable_images eq "1"}
                    {include file="_inc/inc_listimages.tpl"}
                {/if}
            </div>
            <div id="plvideo" style="{if $enable_audio ne "1" and $enable_images ne "1"}display: block;{elseif $smarty.request.page ne "" or $smarty.request.vtype ne ""}display: block;{else}display: none;{/if}">
                {if $enable_videos eq "1"}
                    {include file="_inc/inc_listvideos.tpl"}
                {/if}
            </div>
        </td>
    </tr>
</table>
<form id="setview"><input type="hidden" name="viewmode" value="{$smarty.session.viewmode}"></form>
<!-- END MY QUICKLIST TABLE -->
