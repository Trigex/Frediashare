		    <div id="b4">
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td align="left" class="thead2" width="60%">{$pr_chinfob28}<a href="{$base_url}/user/{$minfo[0].username}&view=subscribers">({$subtocount|viewnr})</a></td>
			    <tr>
			</table>
			
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td class="tbody2" colspan="2">
				    <table cellpadding="0" cellspacing="0" width="100%" border=0 align="center">
					<tr>{if $smarty.get.view eq "subscribers"}{assign var=pagbr value=6}{assign var=maxloop value=$subtocount}{assign var=userimgw value=88}{assign var=userimgh value=88}{/if}
					{if $subtoinfo[0].subscriber_name eq ""}
                                            <td align="center" class="p5 bodylabel">{$userpage_nosub1}</td>
                                        {else}
					{section name=i loop=$subtoinfo start=0 max=$maxloop}
					{if $smarty.section.i.index mod $pagbr eq "0" and $smarty.section.i.index gt "0"}</tr><tr>{/if}
					    <td align="center" class="p5">
					    {insert name=getfield assign=photo field=photo table=members qfield=username qvalue=$subtoinfo[i].subscriber_name}
						<table cellpadding="2" cellspacing="0">
						    <tr><td><a href="{$base_url}/user/{$subtoinfo[i].subscriber_name}"><img src="{$usrimg_url}/{$photo}" width="{$userimgw}" height="{$userimgh}" alt="{$subtoinfo[i].subscriber_name}" title="{$subtoinfo[i].subscriber_name}" class="pborder"></a></td></tr>
						    <tr><td align="center"><a href="{$base_url}/user/{$subtoinfo[i].subscriber_name}">{$subtoinfo[i].subscriber_name}</a></td></tr>
						</table>
					    </td>
					{/section}
					{/if}
					</tr>
					{if $subtocount gt $maxloop and $smarty.get.view eq ""}
					<tr>
                                            <td colspan="{$pagbr}" align="right"><a href="{$base_url}/user/{$minfo[0].username}&view=subscribers"><span class="bold">{$pr_chinfob31|lower}</span></a></td>
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
