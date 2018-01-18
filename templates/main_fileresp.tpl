{if $rtype eq "audio"}
    {insert name=titlea assign=title vkey=$rkey}
    {insert name=vid_to_rnda assign=rnd vid=$vid}
    {assign var=rtxt value=$fresp_txt112}
    {assign var=rtxt1 value=$myaudio}
    {assign var=rtxt2 value=$myv}
    {insert name=getfield assign=ftitle field=vtitle table=files_audio qfield=vkey qvalue=$rkey}
{elseif $rtype eq "image"}
    {insert name=titlei assign=title vkey=$rkey}
    {assign var=rtxt value=$fresp_txt111}
    {assign var=rtxt1 value=$myimage}
    {insert name=getfield assign=ftitle field=vtitle table=files_image qfield=vkey qvalue=$rkey}
    {insert name=getfield assign=fimg field=vflvname table=files_image qfield=vkey qvalue=$rkey}
    {assign var=rtxt2 value=$myv}
{elseif $rtype eq "video"}
    {insert name=titlev assign=title vkey=$rkey}
    {insert name=vid_to_rndv assign=rnd vid=$vid}
    {assign var=rtxt value=$fresp_txt11}
    {assign var=rtxt1 value=$myvideo}
    {insert name=getfield assign=ftitle field=vtitle table=files_video qfield=vkey qvalue=$rkey}
    {assign var=rtxt2 value=$myv}
{/if}
<!-- BEGIN FILE RESPONSES TABLE -->
<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
    <tr><td class="h3"></td></tr>
</table>
<table border="0" align="center" cellpadding="5" cellspacing="0" class="width950b">
    <tr>
	<td>
	    {$fresp_txt10}<a href="{$base_url}/{$rtype}/{$title}">{$ftitle}</a>
	</td>
    </tr>
    <tr>
	<td class="nopad">
	    <table border="0" align="left" cellpadding="5" cellspacing="0">
		<tr>
		    <td><a href="{$base_url}/{$rtype}/{$title}"><img src="{$tmb_url}/user{$vuid}/{if $rtype eq "image"}{$fimg}{else}1_{$rnd}.jpg{/if}" width="{$img_max_width}" height="{$img_max_height}" alt="{$ftitle}" title="{$ftitle}" class="thumb"></a></td>
		    <td><a href="{$base_url}/{$rtype}/{$title}"><img src="{$tmb_url}/user{$vuid}/{if $rtype eq "image"}{$fimg}{else}2_{$rnd}.jpg{/if}" width="{$img_max_width}" height="{$img_max_height}" alt="{$ftitle}" title="{$ftitle}" class="thumb"></a></td>
		    <td><a href="{$base_url}/{$rtype}/{$title}"><img src="{$tmb_url}/user{$vuid}/{if $rtype eq "image"}{$fimg}{else}3_{$rnd}.jpg{/if}" width="{$img_max_width}" height="{$img_max_height}" alt="{$ftitle}" title="{$ftitle}" class="thumb"></a></td>
		    <td valign="top"><span style="font-size: 14px; font-weight: normal;">{$rtxt}</span></td>
		</tr>
	    </table>
	</td>
    </tr>
    <tr><td>&nbsp;</td></tr>
    <tr>
	<td class="nopad">
	    <table border="0" align="center" cellpadding="5" cellspacing="0" width="100%">
		<tr>
		    <td class="nopad">
			<table border="0" align="center" cellpadding="2" cellspacing="0">
			    <tr><td align="center">{$fresp_txt12}</td></tr>
			    <tr><td>&nbsp;</td></tr>
			    <tr>
				<td align="center">
				<form name="filerespform" method="post" action="">
				    <table border="0" align="center" cellpadding="2" cellspacing="0">
					<tr>
					    <td>{$rtxt1}:</td>
					    <td>
						<div>
						    <select name="myv" class="selbox">
							<option value="none">{$rtxt2}</option>
						    {section name=i loop=$myvid}
						    {insert name=resp_check_current assign=is_resp_current field=rvid IDFR=$vid id=$myvid[i].vid type=$rtype}
						    {insert name=resp_check_other assign=is_resp_other field=rvid IDFR=$vid id=$myvid[i].vid type=$rtype}
						    
						    {if $is_resp_current eq "no"}
							{if $is_resp_other eq "yes"}{assign var=star value="*&nbsp;"}{else}{assign var=star value=""}{/if}
							<option value="{$myvid[i].vid}">{$star}{$myvid[i].vtitle}</option>
						    {/if}
						    {/section}
						    </select>
						</div>
					    </td>
					</tr>
					<tr><td></td><td><div class=""><input type="submit" class="fb" name="submitresp" value="{$fresp_txt13}{$rtype|capitalize}"></div></td></tr>
				    </table>
				</form>
				</td>
			    </tr>
			    <tr><td>&nbsp;</td></tr>
			    <tr><td>{$fresp_txt14}</td></tr>
			    <tr><td align="center">{$fresp_txt15}</td></tr>
			    <tr><td>&nbsp;</td></tr>
			</table>
		    </td>
		    <td valign="top" class="nopad">
			<table border="0" align="center" cellpadding="2" cellspacing="0">
			    <tr><td>{$fresp_txt16}{$rtype}: </td></tr>
			    <tr><td>&nbsp;</td></tr>
			    <tr><td><input type="button" class="fb" name="submitnew" value="{$fresp_txt17}{$rtype|capitalize}" onclick="location.href='{$base_url}/upload_{$rtype}?r={$rkey}';"></td></tr>
			    <tr><td>&nbsp;</td></tr>
			</table>
		    </td>
		</tr>
	    </table>
	</td>
    </tr>
</table>
<!-- END FILE RESPONSES TABLES -->