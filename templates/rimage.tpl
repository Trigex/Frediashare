<!-- BEGIN RELATED IMAGES, ETC. TABLE -->
{if $count gt "0"}<div class="{if $count gt "10" and $vpage_ftabslist eq "2"}rel3{elseif $count gt "5" and $vpage_ftabslist eq "1"}rel3{/if}">{/if}
<table cellpadding="5" cellspacing="0" border=0 width="100%">
{if $vid[0].vtitle eq ""}
    <tr><td align=center class="pt10">{$view_noresults}</td></tr>
{else}
    <tr>
	<td class="p5">
	    <table width="100%" cellpadding="0" cellspacin="0" border=0>
		<tr>
{section name=x loop=$vid}
{insert name=vid_to_rndv assign=rnd vid=$vid[x].vid}
{insert name=vid_to_rndvv assign=rndbn vid=$vid[x].vid}
{insert name=titlei assign=title vkey=$vid[x].vkey}
{if $let eq "l"}{assign var=v1 value="image"}{assign var=v2 value="i"}{assign var=v3 value="grid"}{assign var=v4 value="image"}{assign var=v5 value="image"}{else}{assign var=v1 value="user"}{assign var=v2 value="u"}{assign var=v3 value="user"}{assign var=v4 value="user"}{assign var=v5 value="image"}{/if}
{if $smarty.section.x.index mod $vpage_ftabslist eq "0" and $smarty.section.x.index gt "0"}</tr><tr>{/if}
		    <td width="50%" valign="top">
			<table cellpadding=1 cellspacing=0 border=0 width="100%">
			    <tr>
				<td valign=top width="{if $vpage_ftabslist eq "1"}116{else}96{/if}">
				<div class="qlistadding bottomleft">
                                <div id="{$v2}qlistadd{$vid[x].vkey}" class="qlisticon">
                                    <a href="javascript:void(0)" alt="{$qlist_txt1}" title="{$qlist_txt1}" onmouseover="setqlicon('on', '{$v1}', '{$vid[x].vkey}', '{$v3}');" onmouseout="setqlicon('off', '{$v1}', '{$vid[x].vkey}', '{$v3}');" onclick="add2ql('{$v5}', '{$v4}', '{$vid[x].vkey}', '{$v3}', '1', '{$vidid}');">
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                    </a>
                                </div>
				{if $same_title_uploads eq "0"}
				    <a href="{$base_url}/image/{$title}">
				{else}
				    <a href="{$base_url}/image/{$vid[x].vkey}">
				{/if}
					<img src="{$tmb_url}/user{$vid[x].uid}/{$vid[x].vflvname}" alt="{$vid[x].vtitle}" title="{$vid[x].vtitle}" width="{if $vpage_ftabslist eq "1"}110{else}90{/if}" height="70" class="{if $vid[x].vtype eq "private"}thumbp1{elseif $vid[x].is_featured eq 'yes'}thumbf1{else}thumb1{/if}">
				    </a>
				</div>
				</td>
				
				<td valign=top class="pl10">
				{insert name=key_to_rate_image assign=rate vkey=$vid[x].vkey}
				    <table cellpadding=0 cellspacing=0 border=0>
					<tr>
					    <td><span class="title"><a href="{$base_url}/image/{if $same_title_uploads eq "0"}{$title}{else}{$vid[x].vkey}{/if}" title="{$vid[x].vtitle}"><span class="bold">{$vid[x].vtitle|truncate:$tr_titlegrid:"..."}</span></a></td>
					</tr>
					<tr>
					    <td>{$fileaddedby}{insert name=key_to_user_image assign=user vkey=$vid[x].vkey}<a href="{$base_url}/profile/{if $special_characters eq "0"}{$user}{else}{$vid[x].uid}{/if}">{$user}</a></td>
					</tr>
					{if $smarty.request.md ne ""}
					<tr>
					    <td>{insert name=nappcount2 assign=napp2 vid=$vid[x].vid type=image}<span class="gr">{$filecomments} </span>{$vid[x].comments-$napp2}</td>
					</tr>
					{elseif $smarty.request.tr ne ""}
                                	<tr>
                                    	    <td><span class="gr">{$view_rated}</span>{$rates[x]}{$view_rated1}{$vid[x].total_votes}{if $vid[x].total_votes eq "1"}{$view_rated2}{else}{$view_rated3}{/if}</td>
                                        </tr>
					{else}
					<tr>
					    <td><span class="gr">{$fileviews} </span>{$vid[x].views|viewnr}</td>
					</tr>
					{/if}
				    </table>
				</td>
			    </tr>
			</table>
		    </td>
		    {/section}
		</tr>
	    </table>
	</div></div>
	</td>
    </tr>
{/if}
</table>
{if $count gt "0"}</div>{/if}
<!-- END RELATED IMAGES, ETC. TABLE -->
