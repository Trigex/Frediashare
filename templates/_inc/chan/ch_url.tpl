<form name="churl" id="churl" method="post" action="">
{if $btn eq "adm_members"}<fieldset><legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('churl_txt'); ReverseContentDisplay('churl_div'); setclass_act2('churl_fs');"><span id="churl_fs">{$pr_chinfob65}</span></a></legend>{/if}
<div id="churl_txt" style="display: {if $btn eq "adm_members"}block{else}none{/if};"><center><h1>{$pr_chinfob65}</h1></center></div>
<div id="churl_div" style="display: {if $btn eq "adm_members"}none{else}block{/if};">
    <table width="100%" border="0" cellpadding="2" cellspacing="1">
	<tr><td colspan="2"><h1>{$pr_chinfob65}</h1></td></tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr><td valign="top" class="pt6">{$pr_chinfob65}: </td><td><input type="text" name="feurl" class="ff width400" value="{$cinfo[0].inf_eurl}"><br>{$pr_chinfob66}</td></tr>
        <tr><td valign="top" class="pt6">{$pr_chinfob67}</td><td><input type="text" name="fetitle" class="ff width400" value="{$cinfo[0].inf_etitle}"><br>{$pr_chinfob68}</td></tr>
    	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr>
    	    <td></td>
    	    <td>
    		{if $btn eq "adm_members"}<input type="button" name="chsave_url" value="{$pr_chinfop37}" class="fb" onclick="setuserinfo('churl');">
    		{else}<input type="submit" name="chsave_url" value="{$pr_chinfop37}" class="fb">{/if}
    		{if $btn eq "adm_members"}<input type="hidden" name="churl_uid" value="{$minfo[0].uid}"><div id="churl_resp" class="pt5"></div>{/if}
    	    </td>
    	</tr>
    </table>
</div>
{if $btn eq "adm_members"}</fieldset>{/if}
</form>    