	    {insert name=getfield assign=thuid field=uid table=files_video qfield=vkey qvalue=$vkey}
            {insert name=getfield assign=thvid field=vid table=files_video qfield=vkey qvalue=$vkey}
            {insert name=vid_to_rndv assign=rnd vid=$thvid}
            
		<table width="100%" cellpadding="2" cellspacing="0" border=0>
		    <tr>
		    {section name=x start=0 loop=$thumb_nr}
			{if $smarty.section.x.index mod 4 eq "0" and $smarty.section.x.index gt "0"}</tr><tr>{/if}
			<td><img src="{$tmb_url}/user{$thuid}/{$smarty.section.x.index+1}_{$rnd}.jpg?t={$smarty.now}" class="thumb" width="{$img_max_width/2}" height="{$img_max_height/2}"></td>
		    {/section}
		    </tr>
		</table>
