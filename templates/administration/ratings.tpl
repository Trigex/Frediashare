{literal}
<script language="javascript" type="text/javascript">
function delrate(i){
var params = Form.serialize($('rstats_form'));
new Ajax.Updater('rstdiv', baseurl+'administration/setrate.php?del='+i, {asynchronous:true, parameters:params});
}
</script>
{/literal}
<form id="rstats_form">
<table cellpadding="0" cellspacing="0" border=0 width="100%">
    <tr>
	<td align="right"><a href="javascript:void(0)" onclick="ReverseContentDisplay('rstats')"><span id="opts_txtf">{$adm_rstat1}</span></a></td>
	<td align="right" valign="bottom" style="padding-bottom: 1px;" class="pl5" width="10"><img id="optsf" src="{$theme_url}/{$site_theme}/images/sign_plus.gif" width="10" height="10" alt="{$adm_rstat1}" onclick="ReverseContentDisplay('rstats')" class="cursor"></td>
    </tr>
    <tr>
	<td colspan=2 class="pt5"><input type="hidden" name="id" value="{$smarty.request.id}">
	    <div id="rstats" style="display: none; min-height: 50px;">
	    <div id="rstdiv">
		{assign var=mykey value=$smarty.request.id}
		{include file="administration/ratingsload.tpl"}
	    </div>
	    </div>
	</td>
    </tr>
</table>
</form>
<br>