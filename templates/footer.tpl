<!-- BEGIN FOOTER ADS TOP -->
{insert name=ad_status assign=check aname=footer_ads_top}
{if $check eq "1"}
    {include file="ads/footer_ads_top.tpl}
{else}
<br><br>
{/if}
<!-- END FOOTER ADS TOP -->
<!-- BEGIN FOOTER -->
{php}
global $conn;
global $smarty;
$qu1="select * from static_files where ff!='str' and ff!='ltl' and ff!='lt' and active='1'";
$rs1=$conn->execute($qu1);
$static=$rs1->getrows();
$smarty->assign('static',$static);
{/php}
<div id="footerOutside">
    <div id="footer">
	<table cellpadding="0" cellspacing="0" border=0 align=center>
	    <tr>
		{section name=i loop=$static}
		    <td>{if $static[i].active eq "1" and $static[i].ff ne "offline"}<a href="{$base_url}/t/{$static[i].file}"><span class="{if $sbtn eq $static[i].ff}act{/if}">{$static[i].fname}</span></a>{/if}</td>
		{/section}
		{if $rss_feeds eq "1"}
		    <td><a href="{$base_url}/rss_feeds"><span class="{if $sbtn eq "feeds"}act{/if}">{$footer_rss}</span></a></td>
		{/if}
	    </tr>
	</table>
        <p>{$footer_text} Powered by <a href="http://www.mediasharesuite.com">MediaShareSuite &reg; Version {php} echo MSS_VERSION, '.', MSS_PATCHLEVEL {/php}</a></p>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN FOOTER ADS BOTTOM -->
{insert name=ad_status assign=check aname=footer_ads_bottom}
{if $check eq "1"}
    {include file="ads/footer_ads_bottom.tpl}
{else}
{/if}
<!-- END FOOTER ADS BOTTOM -->
{if $tres gt 0}
<script type="text/javascript">
    sh('preloader'); xajax_listare_resp('1', '{$vidid}');
</script>
{/if}
{insert name=pmsg_count_new assign=total_msg}
{if $total_msg gt 0}<script type="text/javascript">blinkId('newmsgicon'); blinkId('newmsgnr');</script>{/if}
</body>
</html>
