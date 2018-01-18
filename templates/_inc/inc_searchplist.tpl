	<table cellpadding=10 cellspacing=0 border="0" width="100%">
	{section name=p loop=$res}
	{insert name=plkey_type assign=pltype vkey=$res[p].vkey}
	{insert name=plvids assign=ple2 vkey=$res[p].vkey ptype=$pltype}
	
	{if $res[p].thumb eq "0"}
            {insert name=getfield assign=ple field=vid table=playlist_files qfield=vkey qvalue=$res[p].vkey order=""}
            {assign var=plu value=$res[p].uid}
        {else}
            {assign var=ple value=$res[p].thumb}
            {assign var=plu value=$res[p].uid}
        {/if}
	{if $pltype eq "video"}
	    {insert name=vid_to_rndv assign=rnd vid=$ple}
	    {insert name=vid_to_rndvv assign=rndbn vid=$ple}
	    {insert name=getfield assign=suid field=uid table=files_video qfield=vid qvalue=$ple}
	    {insert name=getfield assign=ptitle field=pname table=playlist_video qfield=vkey qvalue=$res[p].vkey}
	    {insert name=getfield assign=vkey field=vkey table=files_video qfield=vid qvalue=$ple2[0].vid}
	    {insert name=titlev assign=title vkey=$vkey}
	    {assign var=pl_c value=$videos_main}
	{elseif $pltype eq "image"}
	    {insert name=getfield assign=suid field=uid table=files_image qfield=vid qvalue=$ple}
	    {insert name=getfield assign=simg field=vflvname table=files_image qfield=vid qvalue=$ple}
	    {insert name=getfield assign=ptitle field=pname table=playlist_image qfield=vkey qvalue=$res[p].vkey}
	    {insert name=getfield assign=vkey field=vkey table=files_image qfield=vid qvalue=$ple2[0].vid}
	    {insert name=titlei assign=title vkey=$vkey}
	    {assign var=pl_c value=$images_main}
	{elseif $pltype eq "audio"}
	    {insert name=vid_to_rnda assign=rnd vid=$ple}
	    {insert name=vid_to_rndvv assign=rndbn vid=$ple}
	    {insert name=getfield assign=suid field=uid table=files_audio qfield=vid qvalue=$ple}
	    {insert name=getfield assign=ptitle field=pname table=playlist_audio qfield=vkey qvalue=$res[p].vkey}
	    {insert name=getfield assign=vkey field=vkey table=files_audio qfield=vid qvalue=$ple2[0].vid}
	    {insert name=titlea assign=title vkey=$vkey}
	    {assign var=pl_c value=$audios_main}
	{/if}
	    {insert name=getfield assign=suser field=username table=members qfield=uid qvalue=$plu}
	    {insert name=pl_count assign=pl_count vkey=$res[p].vkey}
	    <tr>
		<td>
		    <table cellpadding="0" cellspacing="0" border="0">
			<tr>
			    <td valign="top">
			    {insert name=count_type assign=c_res nr=$pl_count tp=$pltype}
				<div class="pbg2">
				    <div class="plistadding bottomright">
					<div id="vqlistadd" class="plisticon">
					    <span style="font-size: 10px;">&nbsp;{$pl_count} {$c_res}&nbsp;</span>
					</div>
					{if $same_title_uploads eq "0"}
					    <a href="{$base_url}/{$pltype}/{$title}&pl={$res[p].vkey}">
					{else}
					    <a href="{$base_url}/{$pltype}/{$vkey}&pl={$res[p].vkey}">
					{/if}
					{if $pltype eq "image"}
					    <img src="{$tmb_url}/user{$suid}/{$simg}" width="116" height="68" alt="{$ptitle}" title="{$ptitle}">
					{else}
					    <img src="{$tmb_url}/user{$suid}/{$rndbn}_{$rnd}.jpg" width="116" height="68" alt="{$ptitle}" title="{$ptitle}">
					{/if}
					    </a>
				    </div>
				</div>
				<div class="nopad"><a href="{$base_url}/profile/{$suser}">{$suser}</a></div>
			    </td>
			    <td valign="top">
				<table cellpadding="1" cellspacing="0">
				    <tr>
					<td>
					{if $same_title_uploads eq "0"}
					    <a href="{$base_url}/{$pltype}/{$title}&pl={$res[p].vkey}">
					{else}
					    <a href="{$base_url}/{$pltype}/{$vkey}&pl={$res[p].vkey}">
					{/if}
						{$ptitle}
					    </a>
					</td>
				    </tr>
				    {section name=pp loop=$ple2 start=0 max=4}
				    {if $pltype eq "video"}
					{insert name=getfield assign=fkey field=vkey table=files_video qfield=vid qvalue=$ple2[pp].vid}
					{insert name=getfield assign=vduration field=vduration table=files_video qfield=vid qvalue=$ple2[pp].vid}
					{insert name=titlev assign=ftitle vkey=$fkey}
				    {elseif $pltype eq "image"}
					{insert name=getfield assign=fkey field=vkey table=files_image qfield=vid qvalue=$ple2[pp].vid}
					{insert name=getfield assign=vduration field=vduration table=files_image qfield=vid qvalue=$ple2[pp].vid}
					{insert name=titlei assign=ftitle vkey=$fkey}
				    {elseif $pltype eq "audio"}
					{insert name=getfield assign=fkey field=vkey table=files_audio qfield=vid qvalue=$ple2[pp].vid}
					{insert name=getfield assign=vduration field=vduration table=files_audio qfield=vid qvalue=$ple2[pp].vid}
					{insert name=titlea assign=ftitle vkey=$fkey}
				    {/if}
					{assign var=viddur value=$vduration}
                                	{math equation="$viddur/60" format="%0.0f" assign=minutes}
                                	{math equation="$viddur - ($minutes * 60)" format="%0.0f" assign=seconds}
                                	{if $seconds < 0}
                                        {math equation="$minutes - 1" assign=minutes}
                                        {math equation="$seconds + 60" assign=seconds}
                                        {/if}
				    <tr>
					<td class="pl20">
					    <div class="nopad">
					{if $same_title_uploads eq "0"}
					    <a href="{$base_url}/{$pltype}/{$ftitle}&pl={$ple2[pp].vkey}">
					{else}
					    <a href="{$base_url}/{$pltype}/{$fkey}&pl={$ple2[pp].vkey}">
					{/if}
						{$ftitle}
					    </a><span class="normal">&nbsp;({$minutes}{$fileduration_min}{$seconds}{$fileduration_sec})</span>
					    </div>
					</td>
				    </tr>
				    {/section}
				</table>
			    </td>
			</tr>
			<tr>
			    <td>{insert name=global_time_range assign=addtime addtime=$res[p].addtime}</td>
			    <td>{if $smarty.request.filter eq "" or $smarty.request.filter eq "mv"}{$res[p].views|viewnr}{if $res[p].views eq 1}{$plist_txt611}{else}{$plist_txt61}{/if}{else}{$addtime} {$fileaddedago}{/if}&nbsp;&nbsp;&nbsp;<a href="{$base_url}/{$pltype}_playlist/{$res[p].vkey}">{$plist_txt74}</a></td>
			</tr>
		    </table>
		</td>
	    </tr>
	{/section}
	</table>
