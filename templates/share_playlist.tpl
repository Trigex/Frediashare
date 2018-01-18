<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>{$site_name|escape:'html'} | {$plist_txt45}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>
	body, input, textarea {ldelim}
	    font-family:Arial,sans-serif;
	    font-size:12px;
	    font-size-adjust:none;
	    font-style:normal;
	    font-variant:normal;
	    font-weight:normal;
	    line-height:normal;
	{rdelim}
	.bold {ldelim} font-weight: bold; {rdelim}
	.err_tbl {ldelim} font-size: 13px; padding: 5px; background-color: #FFAEAE; text-align: center; border-bottom: #999999 solid 1px; {rdelim}
	.msg_tbl {ldelim} font-size: 13px; padding: 5px; background-color: #CEEEB2; text-align: center; border-bottom: #999999 solid 1px; {rdelim}
    </style>
</head>

<body topmargin="0" leftmargin="0" marginwidth="0" marginheight="0">

<table cellpadding="0" cellspacing="0" width="100%" class="" style="border-bottom: #999999 solid 1px;">
    <tr>
	<td>{include file="static/logo_table.tpl"}</td>
    </tr>
</table>
{if $err ne ""}
<div>
    <table cellpadding="0" cellspacing="0" width="100%" class="err_tbl">
	<tr><td>{$err}</td></tr>
    </table>
</div>
{/if}
{if $msg ne ""}
<div>
    <table cellpadding="0" cellspacing="0" width="100%" class="msg_tbl">
	<tr><td>{$msg}</td></tr>
    </table>
</div>
{/if}
{if $msg eq ""}
<div style="width:280px;float:left;margin-top:10px;">
    <form name="sendform" method="post" action="">
	<span>{$uch_shtxt1}</span><br>
	<textarea name="sendto" style="width: 225px; height: 40px; font-size: 12px;" rows="8" cols="32" size="60" maxlength="300">{$smarty.request.sendto}</textarea><br><br>
	<span>{$uch_shtxt2}</span><br>
	<textarea name="sendmsg" rows="3" cols="32" maxlength="200" style="width:240px;">{$smarty.request.sendmsg}</textarea><br>
	<input type="submit" name="sendpl" value="{$pr_chinfob2}">&nbsp;{$plist_txt10}&nbsp;<a href="javascript:void(0)" onclick="self.close();">{$adm_playcancelbtn}</a>
    </form>
</div>
{else}
<br><br><br><center><a href="javascript:void(0)" onclick="self.close();">{$adm_reqclose}</a></center>
{/if}
</body>

</html>