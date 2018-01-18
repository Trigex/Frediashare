		{insert name=key_type assign=type vkey=$mykey}
		{insert name=getfield assign=rates field=rate table=files_$type qfield=vkey qvalue=$mykey}
		
		{if $rates eq "0"}
		<table width="100%" cellpadding="5" cellspacing="0" border=0>
		    <tr>
			<td align="center" class="p10">{$adm_rstat2}</td>
		    </tr>
		</table>
		{else}
		<table width="100%" cellpadding="3" cellspacing="1" border=0>
		    <tr class="th">
			<td width="30%">{$adm_rsth1}</td>
			<td width="30%">{$adm_rsth2}</td>
			<td width="10%">{$adm_rsth3}</td>
			<td>{$adm_rsth4}</td>
		    </tr>
		    <tr class="centered" style="padding: 0px;">
		    {insert name=rate_stats assign=rate vkey=$smarty.request.id}
			<td width="35%" class="nopad_border">
			    {section name=i loop=$rate}
			    {insert name=rate_filter_user assign=user rate=$rate[i]}
			    {insert name=uid_to_names assign=uname uid=$user}
				<table width="100%" cellpadding=1 cellspacing=1><tr><td><a href="{$admin_url}/members/{$user}">{$uname}</a></td></tr></table>
			    {/section}
			</td>
			<td width="35%" class="nopad_border">
			    {section name=j loop=$rate}
			    {insert name=rate_filter_ip assign=ips rate=$rate[j]}
				<table width="100%" cellpadding=1 cellspacing=1><tr><td>{$ips}</td></tr></table>
			    {/section}
			</td>
			<td width="11%" class="nopad_border">
			    {section name=k loop=$rate}
			    {insert name=rate_filter_vote assign=ips rate=$rate[k]}
				<table width="100%" cellpadding=1 cellspacing=1><tr><td>{$ips}</td></tr></table>
			    {/section}
			</td>
			<td class="nopad_border"><input type="hidden" name="vkey" value="{$smarty.request.id}">
			    {section name=l loop=$rate}	
				<table width="100%" cellpadding=1 cellspacing=1><tr><td><a href="javascript:void(0)" onclick="if(confirm('{$adm_rstatdel1}?!')) {ldelim} thisDiv('yes'); ldiv('rstats'); delrate('{$rate[l]}'); {rdelim}">{$adm_rstatdel2}</a></td></tr></table>
			    {/section}
			</td>
		    </tr>
		    <tr>
			<td colspan=4 align="right">{insert name=vote_counts assign=counts vkey=$smarty.request.id}
			    <span class="gr">{$view_rated}</span>{$counts[0]}{$view_rated1}{$counts[1]}{if $counts[1] eq "1"}{$view_rated2}{else}{$view_rated3}{/if}
			</td>
		    </tr>
		    <tr>
			<td colspan=4 align="center"></td>
		    </tr>
		</table>
		{/if}
