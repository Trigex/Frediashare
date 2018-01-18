<script language="JavaScript" src="{$base_url}/modules/channels/scripts/ctheme.js" type="text/javascript"></script>
<script type="text/javascript">
function setchvcol ( td_id ) {ldelim}
    if ( document.getElementById ( td_id ).style.backgroundColor == 'rgb(204, 204, 204)' || document.getElementById ( td_id ).style.backgroundColor == '#cccccc' ) document.getElementById ( td_id ).style.backgroundColor = '';
    else document.getElementById ( td_id ).style.backgroundColor = '#cccccc';
{rdelim}
</script>
{if $smarty.request.v eq "" or $smarty.request.v eq "mv"}
{insert name=keys_to_array assign=keys arr=$chvids}
{else}
{if $chfavs ne ""}
    {insert name=keys_to_array assign=keys arr=$chfavs}
{/if}
{/if}
<form id="ch_addvidform" name="ch_addvidform" method="post" action="">
    <table width="100%" border="0" cellpadding="2" cellspacing="1">
        <tr>
    	    <td>{if $smarty.request.v eq "mf"}{$pr_chinfop47}{else}{if $chs eq "s3"}{$pr_chinfop40}{elseif $chs eq "s31"}{$pr_chinfop401}{elseif $chs eq "s32"}{$pr_chinfop402}{/if}{/if}</td>
    	    <td align="right">
    		{$pr_chinfop45}<a href="{$base_url}/my_profile_{if $chs eq "s3"}videos{elseif $chs eq "s31"}images{elseif $chs eq "s32"}audios{/if}/mv">
    		<span class="{if $smarty.request.v eq "mv" or $smarty.request.v eq ""}act{/if}">{if $chs eq "s3"}{$myvideo}{elseif $chs eq "s31"}{$myimage}{elseif $chs eq "s32"}{$myaudio}{/if}</span></a>{$myfiles_delim}<a href="{$base_url}/my_profile_{if $chs eq "s3"}videos{elseif $chs eq "s31"}images{elseif $chs eq "s32"}audios{/if}/mf"><span class="{if $smarty.request.v eq "mf"}act{/if}">{$myfav}</span></a>
    	    </td>
    	</tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr><td colspan="2">{if $smarty.request.v eq "mf"}{if $chs eq "s3"}{$pr_chinfop46}{elseif $chs eq "s31"}{$pr_chinfop461}{elseif $chs eq "s32"}{$pr_chinfop462}{/if}{else}{if $chs eq "s3"}{$pr_chinfop41}{elseif $chs eq "s31"}{$pr_chinfop411}{elseif $chs eq "s32"}{$pr_chinfop412}{/if}{/if}{$pr_chinfob57}</td></tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr><td>{if $chs eq "s3"}{$pr_chinfop42}{elseif $chs eq "s31"}{$pr_chinfop421}{elseif $chs eq "s32"}{$pr_chinfop422}{/if}</td><td>{if $smarty.request.v eq "mf"}{$pr_chinfop48}{else}{if $chs eq "s3"}{$pr_chinfop43}{elseif $chs eq "s31"}{$pr_chinfop431}{elseif $chs eq "s32"}{$pr_chinfop432}{/if}{/if}</td></tr>
        <tr>
    	    <td width="60%" class="" valign="top">
    		<table cellpadding="2" cellspacing="3" align="center" border=0 width="100%">
    		    <tr>
    		    {section name=i loop=$vids}
    		    {if $smarty.section.i.index mod 4 eq "0"}</tr><tr>{/if}
    			<td valign="top" width="80" height="130" class="nopad br1 nbg" id="td{$smarty.section.i.iteration}" {section name=k loop=$keys}{if $vids[i].vkey eq $keys[k]}style="background-color: rgb(204, 204, 204);"{/if}{/section}>
    			{if $chs eq "s3"}
    			    {insert name=vid_to_rndv assign=rnd vid=$vids[i].vid}
    			    {assign var=rndbn value="1"}
    			{elseif $chs eq "s31"}
    			    {insert name=getfield assign=photo field=vflvname table=files_image qfield=vid qvalue=$vids[i].vid}
    			{elseif $chs eq "s32"}
    			    {insert name=vid_to_rnda assign=rnd vid=$vids[i].vid}
    			    {assign var=rndbn value="1"}
    			{/if}
    			    <table cellpadding="0" cellspacing="0" border=0 style="width: 80px; height: 130px;">
    				<tr>
    				    <td valign="top" width="{$img_max_width/2}" height="{$img_max_height/2}" align="center">
    					<img src="{$tmb_url}/user{$vids[i].uid}/{if $chs eq "s31"}{$photo}{else}{$rndbn}_{$rnd}.jpg{/if}" width="{$img_max_width/2}" height="{$img_max_height/2}" alt="{$vids[i].vtitle}" title="{$vids[i].vtitle}" class="thumb">
    				    </td>
    				</tr>
    				<tr><td align="center" class="pt0"><span class="f10">{$vids[i].vtitle|truncate:25:"..."}</span></td></tr>
    				<tr>
    				    <td align="center" valign="bottom">
    					<table cellpadding="2" cellspacing="0">
    					    <tr>
    						<td><input type="checkbox" name="vid[]" id="c{$smarty.section.i.iteration}" {section name=j loop=$keys}{if $vids[i].vkey eq $keys[j]}checked{/if}{/section} value="{$vids[i].vkey}" onclick="setchvcol('td{$smarty.section.i.iteration}'); addvid('{$tmb_url}/user{$vids[i].uid}/{if $chs eq "s31"}{$photo}{else}{$rndbn}_{$rnd}.jpg{/if}', 'c{$smarty.section.i.iteration}', 'fl0', '{$vids[i].vkey}');"></td>
    						<td valign="middle" class="pt5">
    						    <a href="javascript:void(0)" onclick="setchvcol('td{$smarty.section.i.iteration}'); addvid('{$tmb_url}/user{$vids[i].uid}/{if $chs eq "s31"}{$photo}{else}{$rndbn}_{$rnd}.jpg{/if}', 'c{$smarty.section.i.iteration}', 'fl1', '{$vids[i].vkey}');">{$pr_chinfop44}</a>
    						    <input type="hidden" value="{section name=k loop=$keys}{if $vids[i].vkey eq $keys[k]}c{$smarty.section.i.iteration}{else}{/if}{/section}" name="hf{$smarty.section.i.iteration}" id="it{$smarty.section.i.iteration}">
    						</td>
    					    </tr>
    					</table>
    				    </td>
    				</tr>
    			    </table>
    			</td>
    		    {/section}
    		    </tr>
    		</table>
    		<div id="saverespdiv"></div>
    	    </td>
    	    <td width="40%" class="br1" valign="top">
    		<table cellpadding="2" cellspacing="15" border=0 align="center">
    		    <tr>
    			<td>
    			    <div id="div1" style="width: {$img_max_width/2}px; height: {$img_max_height/2}px; {insert name=keys_to_thumbs assign=t1 arr=$keys[0]}{$t1}" class="br1"></div>
    			    <input type="hidden" id="k0" name="k0" value="{$keys[0]}">
    			</td>
    			<td>
    			    <div id="div2" style="width: {$img_max_width/2}px; height: {$img_max_height/2}px; {insert name=keys_to_thumbs assign=t2 arr=$keys[1]}{$t2}" class="br1"></div>
    			    <input type="hidden" id="k1" name="k1" value="{$keys[1]}">
    			</td>
    			<td>
    			    <div id="div3" style="width: {$img_max_width/2}px; height: {$img_max_height/2}px; {insert name=keys_to_thumbs assign=t3 arr=$keys[2]}{$t3}" class="br1"></div>
    			    <input type="hidden" id="k2" name="k2" value="{$keys[2]}">
    			</td>
    		    </tr>
    		    <tr>
    			<td>
    			    <div id="div4" style="width: {$img_max_width/2}px; height: {$img_max_height/2}px; {insert name=keys_to_thumbs assign=t4 arr=$keys[3]}{$t4}" class="br1"></div>
    			    <input type="hidden" id="k3" name="k3" value="{$keys[3]}">
    			</td>
    			<td>
    			    <div id="div5" style="width: {$img_max_width/2}px; height: {$img_max_height/2}px; {insert name=keys_to_thumbs assign=t5 arr=$keys[4]}{$t5}" class="br1"></div>
    			    <input type="hidden" id="k4" name="k4" value="{$keys[4]}">
    			</td>
    			<td>
    			    <div id="div6" style="width: {$img_max_width/2}px; height: {$img_max_height/2}px; {insert name=keys_to_thumbs assign=t6 arr=$keys[5]}{$t6}" class="br1"></div>
    			    <input type="hidden" id="k5" name="k5" value="{$keys[5]}">
    			</td>
    		    </tr>
    		    <tr>
    			<td>
    			    <div id="div7" style="width: {$img_max_width/2}px; height: {$img_max_height/2}px; {insert name=keys_to_thumbs assign=t7 arr=$keys[6]}{$t7}" class="br1"></div>
    			    <input type="hidden" id="k6" name="k6" value="{$keys[6]}">
    			</td>
    			<td>
    			    <div id="div8" style="width: {$img_max_width/2}px; height: {$img_max_height/2}px; {insert name=keys_to_thumbs assign=t8 arr=$keys[7]}{$t8}" class="br1"></div>
    			    <input type="hidden" id="k7" name="k7" value="{$keys[7]}">
    			</td>
    			<td>
    			    <div id="div9" style="width: {$img_max_width/2}px; height: {$img_max_height/2}px; {insert name=keys_to_thumbs assign=t9 arr=$keys[8]}{$t9}" class="br1"></div>
    			    <input type="hidden" id="k8" name="k8" value="{$keys[8]}">
    			</td>
    		    </tr>
    		</table>
    	    </td>
        </tr>
        <tr><td><input type="submit" name="chsave_chvid" value="{$pr_chinfoc22}" class="fb"></td><td></td></tr> 
    </table>
</form>