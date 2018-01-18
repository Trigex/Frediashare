		    <div id="b3">
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td align="left" class="thead2" width="60%">{$pr_chinfop56}<a href="{$base_url}/user/{$minfo[0].username}&view=subscriptions">({$subbycount|viewnr})</a></td>
			    <tr>
			</table>
			
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td class="tbody2" colspan="2">
				    <table cellpadding="0" cellspacing="0" width="100%" border=0 align="center">
					<tr>{if $smarty.get.view eq "subscriptions"}{assign var=pagbr value=6}{assign var=maxloop value=$subbycount}{assign var=userimgw value=88}{assign var=userimgh value=88}{/if}
					{if $subbyinfo[0].subscribed_name eq ""}
					    <td align="center" class="p5 bodylabel">{$userpage_nosub2}</td>
					{else}
					{section name=i loop=$subbyinfo start=0 max=$maxloop}
					{if $smarty.section.i.index mod $pagbr eq "0" and $smarty.section.i.index gt "0"}</tr><tr>{/if}
					    <td align="center" class="p5">
					    {insert name=getfield assign=photo field=photo table=members qfield=username qvalue=$subbyinfo[i].subscribed_name}
						<table cellpadding="2" cellspacing="0">
						    <tr><td><a href="{$base_url}/user/{$subbyinfo[i].subscribed_name}"><img src="{$usrimg_url}/{$photo}" width="{$userimgw}" height="{$userimgh}" alt="{$subbyinfo[i].subscribed_name}" title="{$subbyinfo[i].subscribed_name}" class="pborder"></a></td></tr>
						    <tr><td align="center"><a href="{$base_url}/user/{$subbyinfo[i].subscribed_name}">{$subbyinfo[i].subscribed_name}</a></td></tr>
						</table>
					    </td>
					{/section}
					{/if}
					</tr>
					{if $subbycount gt $maxloop and $smarty.get.view eq ""}
                                        <tr>
                                            <td colspan="{$pagbr}" align="right"><a href="{$base_url}/user/{$minfo[0].username}&view=subscriptions"><span class="bold">{$pr_chinfob31|lower}</span></a></td>
                                        </tr>
                                        {/if}
                                        {if $smarty.get.view ne "" and $link ne "" and $tpage gt 1}
                                            <tr>
                                                <td colspan="6" align="right" class="bold nopad">
                                                    {$link}
                                                </td>
                                            </tr>
                                        {/if}
				    </table>
				</td>
			    </tr>
			</table>
		    </div>
