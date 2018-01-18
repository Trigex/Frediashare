
<!-- BEGIN MY FRIENDS TABLE -->
<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
    <tr>
	<td colspan=2 class="p5"><table cellpadding="0" cellspacing="0" width="100%"><tr>{if $act ne "invite"}{include file="_inc/inc_searchfilters.tpl"}{/if}<td align="right">{if $act eq "invite"}{else}{if $total ne "0"}{$myfr_nr}[{$start_num}-{$end_num}]{$myfr_of}[{$total}]{/if}{/if}</td></tr></table></td>
    </tr>
</table>
<table border="0" align="center" cellpadding="0" cellspacing="0" class="width950b">
{if $total eq "0" and $smarty.request.filter eq ""}
    <tr>
	<td valign="top" colspan=2 class="pt10">
	    <table cellpadding=5 cellspacing=0 border=0 width="100%">
		<tr>
		    <td align=center>
			{$myfr_none1}
			{$myfr_none6}
		    </td>
		</tr>
	    </table>
	</td>
    </tr>
{elseif $act eq "invite"}
    <tr>
	<td class="pt10" colspan=2>
	    <table cellpadding=5 cellspacing=0 border=0 width="100%">
		<tr>
		    <td align=right valign=top class="p15"><img src="{$img_url}/warning.gif" alt="Warning!" width="46" height="40"></td>
		    <td>
			{$myfr_invmsg1}
			{$myfr_invmsg2}
		    </td>
		</tr>
	    </table><br><br>
	    <table cellpadding=2 cellspacing=0 border=0 width="80%" id="finv_tbl" align=center>
	    <form name="friendsinv" method="post" action="{$base_url}/my_friends/invite">
		<tr>
		    <td width="25%" class="types">{$myfr_invform1}</td>
		    <td><input name="fmail" class="ff" type="text" size="40" value="{$smarty.request.fmail}"></td>
		</tr>
		<tr>
		    <td class="types">{$myfr_invform2}</td>
		    <td><input name="fname" class="ff" type="text" size="40" value="{$smarty.request.fname}"></td>
		</tr>
		<tr><td class=grey>&nbsp;</td></tr>
		<tr>
		    <td width="25%" class="types">{$myfr_invform3}</td>
		    <td><input name="mymail" class="ff" type="text" size="40" value="{$smarty.session.EMAIL}"></td>
		</tr>
		<tr>
		    <td class="types">{$myfr_invform4}</td>
		    <td><input name="myname" class="ff" type="text" size="40" value="{if $smarty.session.NAME ne "" and $smarty.request.myname eq ""}{$smarty.session.NAME}{/if}{if $smarty.request.myname ne ""}{$smarty.request.myname}{/if}"></td>
		</tr>
		<tr><td class=grey>&nbsp;</td></tr>
		<tr>
		    <td class="types" valign=top>{$myfr_invform5}</td>
		    <td>{$message}</td>
		</tr>
		<tr>
		    <td></td>
		    <td align="left"><input type="submit" class="fb" name="submit" value="{$myfr_invformsend}">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="fb" name="cancel" value="{$myfr_invformcancel}"></td>
		</tr>
	    </form>
	    </table><br>
	</td>
    </tr>
{else}
    <tr>
	<td valign="top" colspan=2 class="nopad">
	    <table cellpadding=0 cellspacing=0 border="0" width="100%">
                <tr>
                    <td valign="top" class="nopad">
                        {include file="_inc/inc_listmembers.tpl"}
                    	<table cellpadding=0 cellspacing=2 border=0 width="100%">
			    <tr>
				<td align=center width="100%" class="pag_bg">{$link}</td>
			    </tr>
			</table>
                    </td>
                    {insert name=ad_status assign=check aname=file_ads_right}
                    {if $check eq "1"}
                    <td valign="top" width="20%" class="nopad">
                        {include file="ads/file_ads_right.tpl"}
                    </td>
                    {/if}
                </tr>
            </table>
	</td>
    </tr>
{/if}    
</table>
<!-- END MY FRIENDS TABLE -->
