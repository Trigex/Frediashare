		    <div id="b6">
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td align="left" class="thead2" width="60%">{$pr_chinfob29}<a href="{$base_url}/user/{$minfo[0].username}&view=friends">({$myfrcount|viewnr})</a></td>
			    <tr>
			</table>
			
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			{if $myfrcount eq "0"}
			    <tr><td class="tbody2" align="center"><table cellpadding="0" cellspacing="0"><tr><td class="p5 bodylabel">{$userpage_nosub5}</span></td></tr></table></td></tr>
			{else}
			    <tr>
				<td class="tbody2" colspan="2">
				    <table cellpadding="0" cellspacing="0" width="100%" border=0 align="center">
					<tr>{if $smarty.get.view eq "friends"}{assign var=pagbr value=6}{assign var=maxloop value=$myfrcount}{assign var=userimgw value=88}{assign var=userimgh value=88}{/if}
					{section name=i loop=$myfrinfo start=0 max=$maxloop}
					{if $smarty.section.i.index mod $pagbr eq "0" and $smarty.section.i.index gt "0"}</tr><tr>{/if}
					    <td align="center" class="p5">
					    {insert name=getfield assign=photo field=photo table=members qfield=username qvalue=$myfrinfo[i].username}
						<table cellpadding="2" cellspacing="0">
						    <tr><td><a href="{$base_url}/user/{$myfrinfo[i].username}"><img src="{$usrimg_url}/{$photo}" width="{$userimgw}" height="{$userimgh}" alt="{$myfrinfo[i].username}" title="{$myfrinfo[i].username}" class="pborder"></a></td></tr>
						    <tr><td align="center"><a href="{$base_url}/user/{$myfrinfo[i].username}">{$myfrinfo[i].username}</a></td></tr>
						</table>
					    </td>
					{/section}
					</tr>
					{if $myfrcount gt $maxloop and $smarty.get.view eq ""}
					<tr>
					    <td colspan="{$pagbr}" align="right"><a href="{$base_url}/user/{$minfo[0].username}&view=friends"><span class="bold">{$pr_chinfob31|lower}</span></a></td>
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
			{/if}
			</table>
		    </div>
