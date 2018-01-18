<form name="chloc" id="chloc" method="post" action="">
{if $btn eq "adm_members"}<fieldset><legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('chloc_txt'); ReverseContentDisplay('chloc_div'); setclass_act2('chloc_fs');"><span id="chloc_fs">{$pr_chlmitem5}</span></a></legend>{/if}
<div id="chloc_txt" style="display: {if $btn eq "adm_members"}block{else}none{/if};"><center>{$pr_chinfop30}</center></div>
<div id="chloc_div" style="display: {if $btn eq "adm_members"}none{else}block{/if};">
    <table width="100%" border="0" cellpadding="2" cellspacing="1">
	<tr><td colspan="2">{$pr_chinfop30}</td></tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr><td>{$pr_chinfop31}</td><td><input type="text" name="ftown" class="ff width400" value="{$cinfo[0].inf_town}"></td></tr>
        <tr><td>{$pr_chinfop32}</td><td><input type="text" name="fcity" class="ff width400" value="{$cinfo[0].inf_city}"></td></tr>
        <tr><td>{$pr_chinfop33}</td><td><input type="text" name="fzip" class="ff width400" value="{$cinfo[0].inf_zip}"></td></tr>
        <tr>
    	    <td>{$pr_chinfop34}</td>
    	    <td>{include file="countries.tpl"}</td>
    	</tr>
    	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr>
    	    <td></td>
    	    <td>
    		{if $btn eq "adm_members"}<input type="button" name="chsave_location" value="{$pr_chinfop35}" class="fb" onclick="setuserinfo('chloc');">
    		{else}<input type="submit" name="chsave_location" value="{$pr_chinfop35}" class="fb">{/if}
    		{if $btn eq "adm_members"}<input type="hidden" name="chloc_uid" value="{$minfo[0].uid}"><div id="chloc_resp" class="pt5"></div>{/if}
    	    </td>
    	</tr>
    </table>
</div>
{if $btn eq "adm_members"}</fieldset>{/if}
</form>