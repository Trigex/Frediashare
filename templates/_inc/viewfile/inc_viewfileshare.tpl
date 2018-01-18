<!-- BEGIN SOCIAL BOOKMARKS TABLE -->
			{if $is_bm eq "yes" and $file_bookmark eq "1"}
{if $type ne "private" or $vuid eq $smarty.session.UID}
			<table cellpadding="0" cellspacing="0" border=0 align=center width="100%">
			    <tr>
				<td class="p10" align="center" valign="top" width="45%">
				    <!-- AddThis Button BEGIN -->
					<script type="text/javascript">
					    var addthis_config = {ldelim}
				              username: "mediasharesuite"
    					    {rdelim}
    					    var addthis_brand = "{$site_name}";
					</script>
					<a href="http://www.addthis.com/bookmark.php" style="text-decoration:none;" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]');" onmouseout="addthis_close();" onclick="return addthis_sendto();">{$plist_txt53}</a>
					<script type="text/javascript">var addthis_options = 'facebook, myspace, google, twitter, wordpress, more';</script>
					<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script>
				    <!-- AddThis Button END -->
				</td>
				<td align="center" class="p10" width="45%">{if $btn eq "baudio"}{assign var=xtype value="audio"}{elseif $btn eq "bimage"}{assign var=xtype value="image"}{elseif $btn eq "bvideo"}{assign var=xtype value="video"}{/if}
				    {if $smarty.session.UID ne ""}
                                        {if $type ne "private"}
                                            <a href="javascript:void(0)" onclick="thisDiv('yes'); ldiv('fshare'); sharefile('{$xtype}', '{$smarty.request.id}', '0'); return false;">{$pr_chinfob2}&nbsp;{$xtype|capitalize}</a>
                                        {else}
                                            <a>{$view_share}</a>
                                	{/if}
                                    {elseif $smarty.session.UID eq ""}
                                        <a href="{$base_url}/login?next={$ftype}/{$smarty.request.id}">{$snavlogin}</a>{$view_share_login}
                                    {/if}
				</td>
				<td align="right" valign="top"><a href="javascript:void(0)" onclick="HideContent('shx'); changeclass_inact('b2');">{$plist_txt54}</a></td>
			    </tr>
			    <tr>
				<td colspan="3" class="nopad">
				<form id="femailform">
                                    <div id="loading_share" style="display: none; min-height: 440px;">
                                        <table cellpadding=5 cellspacing=0 border=0>
                                            <tr><td>{$adm_setgen79}</td><td>{$loading_gif}</td></tr>
                                        </table>
                                    </div>
				    <div id="fshare" class="p5" style="display: none;"></div>
				</form>
				</td>
			    </tr>
			</table>
{/if}			
			{else}
			<table cellpadding="0" cellspacing="0" border=0 align=center width="100%">
			    <tr>
				<td align="center" class="p10">{if $btn eq "baudio"}{assign var=xtype value="audio"}{elseif $btn eq "bimage"}{assign var=xtype value="image"}{elseif $btn eq "bvideo"}{assign var=xtype value="video"}{/if}
				    {if $smarty.session.UID ne ""}
                                        {if $type ne "private"}
                                    	    <a href="javascript:void(0)" onclick="thisDiv('yes'); ldiv('fshare'); sharefile('{$xtype}', '{$smarty.request.id}', '0');">{$view_share}</a>
                                        {else}
                                            <a>{$view_share}</a>
                                	{/if}
                                    {elseif $smarty.session.UID eq ""}
                                        <a href="{$base_url}/login?next={$ftype}/{$smarty.request.id}">{$snavlogin}</a>{$view_share_login}
                                    {/if}
				</td>
			    </tr>
			    <tr>
				<td colspan="2" class="nopad">
				<form id="femailform">
                                    <div id="loading_share" style="display: none;">
                                        <table cellpadding=5 cellspacing=0 border=0>
                                            <tr><td>{$adm_setgen79}</td><td>{$loading_gif}</td></tr>
                                        </table>
                                    </div>
				    <div id="fshare" class="p5" style="display: none;"></div>
				</form>
				</td>
			    </tr>
			</table>
			{/if}
<!-- END SOCIAL BOOKMARKS TABLE -->			
