			{if $btn eq "bimage"}
			    {assign var=sct value="image"}
			    {if $same_title_uploads eq "0"}
				{insert name=titlei assign=ptitle vkey=$prev[0].vkey}
				{insert name=titlei assign=ntitle vkey=$next[0].vkey}
			    {else}
				{assign var=ptitle value=$prev[0].vkey}
				{assign var=ntitle value=$next[0].vkey}
			    {/if}{insert name=titlei assign=ctitle vkey=$curr[0].vkey}
			{elseif $btn eq "baudio"}
			    {assign var=sct value="audio"}
			    {if $same_title_uploads eq "0"}
				{insert name=titlea assign=ptitle vkey=$prev[0].vkey}
				{insert name=titlea assign=ntitle vkey=$next[0].vkey}
			    {else}
				{assign var=ptitle value=$prev[0].vkey}
				{assign var=ntitle value=$next[0].vkey}
			    {/if}{insert name=titlea assign=ctitle vkey=$curr[0].vkey}
			{elseif $btn eq "bvideo"}
			    {assign var=sct value="video"}
			    {if $same_title_uploads eq "0"}
				{insert name=titlev assign=ptitle vkey=$prev[0].vkey}
				{insert name=titlev assign=ntitle vkey=$next[0].vkey}
			    {else}
				{assign var=ptitle value=$prev[0].vkey}
				{assign var=ntitle value=$next[0].vkey}
			    {/if}
			    {insert name=titlev assign=ctitle vkey=$curr[0].vkey}
			{/if}
			<div class="br1" style="padding: 0px;" align="center">
			<table cellpadding="5" cellspacing="10" border=0 align="center">
			    <tr>
				<td align="center" width="{$img_max_width/2}" height="{$img_max_height/2}">
				    {if $prev[0].vid eq ""}{$pn_txt4}
				    {else}
				    {if $btn eq "bimage"}
					<a href="{$base_url}/{$sct}/{$ptitle}"><img src="{$tmb_url}/user{$prev[0].uid}/{$prev[0].vflvname}" width="{$img_max_width/2}" height="{$img_max_height/2}" alt="{$prev[0].vtitle}" title="{$prev[0].vtitle}" class="thumb"></a>
				    {elseif $btn eq "baudio"}
					{insert name=vid_to_rnda assign=rnd vid=$prev[0].vid}
					{insert name=vid_to_rndvv assign=rndv vid=$prev[0].vid}
					<a href="{$base_url}/{$sct}/{$ptitle}"><img src="{$tmb_url}/user{$prev[0].uid}/{$rndv}_{$rnd}.jpg" width="{$img_max_width/2}" height="{$img_max_height/2}" alt="{$prev[0].vtitle}" title="{$prev[0].vtitle}" class="thumb"></a>
				    {elseif $btn eq "bvideo"}
					{insert name=vid_to_rndv assign=rnd vid=$prev[0].vid}
					{insert name=vid_to_rndvv assign=rndbn vid=$prev[0].vid}
					<a href="{$base_url}/{$sct}/{$ptitle}"><img src="{$tmb_url}/user{$prev[0].uid}/{$rndbn}_{$rnd}.jpg" width="{$img_max_width/2}" height="{$img_max_height/2}" alt="{$prev[0].vtitle}" title="{$prev[0].vtitle}" class="thumb"></a>
				    {/if}
				    {/if}
				</td>
				<td align="center" width="{$img_max_width/2}" height="{$img_max_height/2}">
				    {if $btn eq "bimage"}
					<img style="border: 3px solid #9cbcd3; padding: 2px;" src="{$tmb_url}/user{$curr[0].uid}/{$curr[0].vflvname}" width="{$img_max_width/2}" height="{$img_max_height/2}" alt="{$curr[0].vtitle}" title="{$curr[0].vtitle}" class="thumb">
				    {elseif $btn eq "baudio"}
					{insert name=vid_to_rnda assign=rnd vid=$curr[0].vid}
					{insert name=vid_to_rndvv assign=rndv vid=$curr[0].vid}
					<img style="border: 3px solid #9cbcd3; padding: 2px;" src="{$tmb_url}/user{$curr[0].uid}/{$rndv}_{$rnd}.jpg" width="{$img_max_width/2}" height="{$img_max_height/2}" alt="{$curr[0].vtitle}" title="{$curr[0].vtitle}" class="thumb">
				    {elseif $btn eq "bvideo"}
					{insert name=vid_to_rndv assign=rnd vid=$curr[0].vid}
					{insert name=vid_to_rndvv assign=rndbn vid=$curr[0].vid}
					<img style="border: 3px solid #9cbcd3; padding: 2px;" src="{$tmb_url}/user{$curr[0].uid}/{$rndbn}_{$rnd}.jpg" width="{$img_max_width/2}" height="{$img_max_height/2}" alt="{$curr[0].vtitle}" title="{$curr[0].vtitle}" class="thumb">
				    {/if}
				</td>
				<td align="center" width="{$img_max_width/2}" height="{$img_max_height/2}">
				    {if $next[0].vid eq ""}{$pn_txt5}
				    {else}
				    {if $btn eq "bimage"}
					<a href="{$base_url}/{$sct}/{$ntitle}"><img src="{$tmb_url}/user{$next[0].uid}/{$next[0].vflvname}" width="{$img_max_width/2}" height="{$img_max_height/2}" alt="{$next[0].vtitle}" title="{$next[0].vtitle}" class="thumb"></a>
				    {elseif $btn eq "baudio"}
					{insert name=vid_to_rnda assign=rnd vid=$next[0].vid}
					{insert name=vid_to_rndvv assign=rndv vid=$next[0].vid}
					<a href="{$base_url}/{$sct}/{$ntitle}"><img src="{$tmb_url}/user{$next[0].uid}/{$rndv}_{$rnd}.jpg" width="{$img_max_width/2}" height="{$img_max_height/2}" alt="{$next[0].vtitle}" title="{$next[0].vtitle}" class="thumb"></a>
				    {elseif $btn eq "bvideo"}
					{insert name=vid_to_rndv assign=rnd vid=$next[0].vid}
					{insert name=vid_to_rndvv assign=rndbn vid=$next[0].vid}
					<a href="{$base_url}/{$sct}/{$ntitle}"><img src="{$tmb_url}/user{$next[0].uid}/{$rndbn}_{$rnd}.jpg" width="{$img_max_width/2}" height="{$img_max_height/2}" alt="{$next[0].vtitle}" title="{$next[0].vtitle}" class="thumb"></a>
				    {/if}
				    {/if}
				</td>
			    </tr>
			    <tr>
				<td align="center" class="nopad"><a {if $prev[0].vid ne ""}href="{$base_url}/{$sct}/{$ptitle}"{/if}>{$pn_txt1}</a></td>
				<td align="center" class="nopad"><a>{$pn_txt2}</a></td>
				<td align="center" class="nopad"><a {if $next[0].vid ne ""}href="{$base_url}/{$sct}/{$ntitle}"{/if}>{$pn_txt3}</a></td>
			    </tr>
			</table>
			</div>