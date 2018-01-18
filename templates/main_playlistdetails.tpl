
<!-- BEGIN PLAYLIST DETAILS TABLE -->
{if $enable_channels eq "1"}
<table cellpadding="0" cellspacing="0" width="950" align="center">
    <tr>
        <td align="left">
            <div id="subsrespdiv" style="display: none;" class=""></div>
            <div id="loading_sub" style="display: none;"><table cellpadding=5 cellspacing=0 border=0><tr><td>{$adm_setgen79}</td></tr></table></div>
        </td>
    </tr>
</table>
{/if}

<table cellpadding="5" cellspacing="0" border=0 align=center width="950" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
    <tr>
        <td class="h3" colspan="3"></td>
    </tr>
</table>
<table cellpadding="5" cellspacing="0" border=0 align=center class="{if $site_theme eq "black"}qact{else}qact2{/if}" width="950">
    <tr>
	<td class="nopad">
	    <table cellpadding="10" cellspacing="0" border="0" width="100%">
		<tr>
		    <td>
			{if $pd[0].thumb eq "0"}
			    {assign var=ple value=$pe[0].vid}
			    {assign var=plu value=$pe[0].uid}
			{else}
			    {assign var=ple value=$pd[0].thumb}
			    {assign var=plu value=$pd[0].uid}
			{/if}
			
			{if $ptype eq "video"}
			    {insert name=vid_to_rndv assign=rnd vid=$ple}
			    {insert name=vid_to_rndvv assign=rndbn vid=$ple}
			    {insert name=getfield assign=suid field=uid table=files_video qfield=vid qvalue=$ple}
			    {assign var=ptbl value=playlist_video}
			    {assign var=purl value=video_playlist}
			    {assign var=pco value=$user_videos}
			    {assign var=pco2 value=$videos_main}
			    {assign var=plt value=v}
			{elseif $ptype eq "image"}
			    {insert name=getfield assign=suid field=uid table=files_image qfield=vid qvalue=$ple}
			    {insert name=getfield assign=simg field=vflvname table=files_image qfield=vid qvalue=$ple}
			    {assign var=ptbl value=playlist_image}
			    {assign var=purl value=image_playlist}
			    {assign var=pco value=$user_images}
			    {assign var=pco2 value=$images_main}
			    {assign var=plt value=i}
			{elseif $ptype eq "audio"}
			    {insert name=vid_to_rnda assign=rnd vid=$ple}
			    {insert name=vid_to_rndvv assign=rndbn vid=$ple}
			    {insert name=getfield assign=suid field=uid table=files_audio qfield=vid qvalue=$ple}
			    {assign var=ptbl value=playlist_audio}
			    {assign var=purl value=audio_playlist}
			    {assign var=pco value=$user_audios}
			    {assign var=pco2 value=$audios_main}
			    {assign var=plt value=a}
			{/if}
			
			<div class="pbg">
			    <div class="plistadding bottomright">
				<div id="vqlistadd" class="plisticon">
				    {insert name=count_type assign=c_res nr=$pcount tp=$ptype}
				    &nbsp;{$pcount|viewnr} {$c_res}&nbsp;
				</div>
				
				{if $ptype eq "image"}
				    <img src="{$tmb_url}/user{$suid}/{$simg}" width="177" height="105" alt="{$ptitle}" title="{$ptitle}">
				{else}
				    <img src="{$tmb_url}/user{$suid}/{$rndbn}_{$rnd}.jpg" width="177" height="105" alt="{$ptitle}" title="{$ptitle}">
				{/if}
			    </div>
			</div>
		    </td>
		    <td valign="top">
			<table cellpadding="2" cellspacing="0" border="0" width="95%">
			    <tr>
				<td><h1>{$ptitle}{if $pd[0].privacy eq "private"}&nbsp;<span style="font-size: 11px; color: red; font-style: italic;">{$plist_txt64}</span>{/if}</h1></td>
			    </tr>
			    <tr>
				<td>
				    {insert name=time_range assign=rtime field=addtime IDFR=vkey id=$smarty.request.vkey tbl=$ptbl}{$rtime} {$fileaddedago}
				    {insert name=getfield assign=suser field=username table=members qfield=uid qvalue=$plu}
				    &nbsp;&nbsp;&nbsp;&nbsp;
				    {$pd[0].views|viewnr}{if $pd[0].views eq 1}{$plist_txt611}{else}{$plist_txt61}{/if}
				    &nbsp;&nbsp;&nbsp;&nbsp;
				    <a href="{$base_url}/user/{if $special_characters eq "0"}{$suser}{else}{$plu}{/if}">{$suser}</a>
				</td>
			    </tr>
			    <tr>
				<td>
				    <table cellpadding="0" cellspacing="0" border="0">
					<tr>
					    <td><br>{$plist_txt62}</td>
					    <td width="100"></td>
<!--					    <td><br>{$view_embed}</td> -->
					</tr>
					<tr>
					    <td><input type="text" class="ff" size="35 width400" value="{$base_url}/{$purl}/{$smarty.request.vkey}" style="font-size: 10px;" onclick="this.select();"></td>
					    <td></td>
<!--					    <td><input type="text" class="ff" size="35" value="code" style="font-size: 10px;" onclick="this.select();"></td> -->
					</tr>
				    </table>
				</td>
			    </tr>
			</table>
		    </td>
		    {if $enable_channels eq "1"}
		    <td valign="top" align="right" width="11%">
		    {if $smarty.session.UID ne ""}
			<form id="chsubsform"></form>                                                                                                                                  
                        {insert name=getfield assign=bl_sub field=bl_sub table=members qfield=uid qvalue=$plu}
                        {insert name=getfield assign=muser field=username table=members qfield=uid qvalue=$plu}
			{if $pe[0].vid ne ""}                    
                        <table cellpadding="0" cellspacing="0" border="0" align="right" width="100">
                            <tr>
                                <td {if $smarty.session.UID ne "" and ($is_bl ne "yes" or $bl_sub eq "no")}class="fb"{else}class="fb"{/if} align="center" style="padding: 4px 0px;">
                                {if (($plu eq $smarty.session.UID) and $smarty.session.UID ne "") or ($plu eq $smarty.session.UID) }<a href="{$base_url}/my_profile">{$uch_txt13}</a>
                                {else}
                                    {if $smarty.session.UID ne "" and ($is_bl ne "yes" or $bl_sub eq "no")}
                                    <div id="slinkdiv" style="{if $is_sub eq "no"}display: block;{else}display: none;{/if}">
                                        <a href="javascript:void(0)" onclick="ShowContent('subsrespdiv'); thisDiv('yes'); ldiv('subsrespdiv'); set_subscription('subs', '{$muser}', '{$plu}', 'pl{$plt}{$smarty.request.vkey}');">{$uch_txt14}</a>
                                    </div>
                                    <div id="uslinkdiv" style="{if $is_sub eq "yes"}display: block;{else}display: none;{/if}">
                                        <a href="javascript:void(0)" onclick="ShowContent('subsrespdiv'); set_subscription('unsubs', '{$muser}', '{$plu}', 'pl{$plt}{$smarty.request.vkey}');">{$uch_txt15}</a>
                                    </div>
                            	    {/if}
                                {/if}
                                </td>
                            </tr>
                        </table>
                        {/if}
                    {/if}
		    </td>
		    {/if}
		</tr>
	    </table>
	</td>
    </tr>
</table>
<table cellpadding="0" cellspacing="0" border=0 align=center class="" width="950">
    <tr>
	<td colspan="2"><div class="pcount"><table width="100%" cellpadding="0" cellspacing="0"><tr><td align="left">{$pco}{$pcount}</td><td align="right" class="normal">{if $total ne "0"} [{$start_num}-{$end_num}] {$search_of} [{$total}]{/if}</td></tr></table></div></td>
    </tr>
    <tr>
	<td valign="top">
	    <table cellpadding="10" cellspacing="0" border="0" width="100%">
	    {section name=i loop=$pe}
		<tr>
		    <td align="left" width="{$img_max_width+6}">
		    {insert name=getfield assign=fkey field=vkey table=files_$ptype qfield=vid qvalue=$pe[i].vid}
		    {if $ptype eq "audio"}
			{insert name=vid_to_rnda assign=rnd vid=$pe[i].vid}
			{insert name=vid_to_rndvv assign=rndbn vid=$pe[i].vid}
			{insert name=titlea assign=title vkey=$fkey}
			{insert name=getfield assign=suid field=uid table=files_audio qfield=vid qvalue=$pe[i].vid}
			{insert name=getfield assign=stitle field=vtitle table=files_audio qfield=vid qvalue=$pe[i].vid}
			{insert name=getfield assign=sdesc field=vdescr table=files_audio qfield=vid qvalue=$pe[i].vid}
			{insert name=time_range assign=stime field=addtime IDFR=vid id=$pe[i].vid tbl=files_audio}
			{insert name=getfield assign=sviews field=views table=files_audio qfield=vid qvalue=$pe[i].vid}
			{insert name=getfield assign=suser field=username table=members qfield=uid qvalue=$suid}
			{insert name=key_to_rate_audio assign=rate vkey=$fkey}
			{assign var=pp value="a"}
		    {elseif $ptype eq "image"}
			{insert name=titlei assign=title vkey=$fkey}
			{insert name=getfield assign=suid field=uid table=files_image qfield=vid qvalue=$pe[i].vid}
			{insert name=getfield assign=stitle field=vtitle table=files_image qfield=vid qvalue=$pe[i].vid}
			{insert name=getfield assign=simg field=vflvname table=files_image qfield=vid qvalue=$pe[i].vid}
			{insert name=getfield assign=sdesc field=vdescr table=files_image qfield=vid qvalue=$pe[i].vid}
			{insert name=time_range assign=stime field=addtime IDFR=vid id=$pe[i].vid tbl=files_image}
			{insert name=getfield assign=sviews field=views table=files_image qfield=vid qvalue=$pe[i].vid}
			{insert name=getfield assign=suser field=username table=members qfield=uid qvalue=$suid}
			{insert name=key_to_rate_image assign=rate vkey=$fkey}
			{assign var=pp value="i"}
		    {elseif $ptype eq "video"}
			{insert name=vid_to_rndv assign=rnd vid=$pe[i].vid}
			{insert name=vid_to_rndvv assign=rndbn vid=$pe[i].vid}
			{insert name=titlev assign=title vkey=$fkey}
			{insert name=getfield assign=suid field=uid table=files_video qfield=vid qvalue=$pe[i].vid}
			{insert name=getfield assign=stitle field=vtitle table=files_video qfield=vid qvalue=$pe[i].vid}
			{insert name=getfield assign=sdesc field=vdescr table=files_video qfield=vid qvalue=$pe[i].vid}
			{insert name=getfield assign=sviews field=views table=files_video qfield=vid qvalue=$pe[i].vid}
			{insert name=time_range assign=stime field=addtime IDFR=vid id=$pe[i].vid tbl=files_video}
			{insert name=getfield assign=suser field=username table=members qfield=uid qvalue=$suid}
			{insert name=key_to_rate assign=rate vkey=$fkey}
			{assign var=pp value="v"}
			{if $thumb_module eq "1"}
                        {insert name=check_img assign=isfile vid=$pe[i].vid uid=$suid}
                        {insert name=gen_array assign=arra nr=$thumb_nr}
                            <script type="text/javascript">turl['{$rnd}']=0; timg['{$rnd}']=new Array(); thumbs['{$rnd}']=new Array({$arra});</script>
                            <input type="hidden" name="thnr{$rnd}" id="thnr{$rnd}" value="{if $isfile eq "yes"}{$thumb_nr}{else}3{/if}">
                            <input type="hidden" name="thdelay{$rnd}" id="thdelay{$rnd}" value="{$thumb_delay}">
                        {/if}
		    {/if}
		    
			<div class="qlistadding bottomleft">
			<div id="{$pp}qlistadd{$fkey}" class="qlisticon">
                            <a href="javascript:void(0)" alt="{$qlist_txt1}" title="{$qlist_txt1}" onmouseover="setqlicon('on', '{$ptype}', '{$fkey}', 'grid');" onmouseout="setqlicon('off', '{$ptype}', '{$fkey}', 'grid');" onclick="add2ql('{$ptype}', '{$ptype}', '{$fkey}', 'grid');">
                    	        &nbsp;&nbsp;&nbsp;&nbsp;
                    	    </a>
                    	</div>
                    	    {if $same_title_uploads eq "0"}
                    	    <a href="{$base_url}/{$ptype}/{$title}&pl={$smarty.request.vkey}">
                    	    {else}
                    	    <a href="{$base_url}/{$ptype}/{$fkey}&pl={$smarty.request.vkey}">
                    	    {/if}
                    	    {if $ptype eq "image"}
                    		<img id="{$rnd}" name="{$rnd}" src="{$tmb_url}/user{$suid}/{$simg}" width="{$img_max_width}" height="{$img_max_height}" alt="{$stitle}" title="{$stitle}" class="thumb">
                    	    {else}
                    		<img id="{$rnd}" name="{$rnd}" src="{$tmb_url}/user{$suid}/{$rndbn}_{$rnd}.jpg" {if $ptype eq "video"}{if $thumb_module eq "1"}onmouseover="if (window.loaded == true) {ldelim} startslide('{$rnd}','{$tmb_url}/user{$suid}/', '_{$rnd}.jpg'); {rdelim}" onmouseout="if (window.loaded == true) {ldelim} stopslide('{$rnd}'); this.src='{$tmb_url}/user{$suid}/1_{$rnd}.jpg'; {rdelim}"{/if}{/if} width="{$img_max_width}" height="{$img_max_height}" alt="{$stitle}" title="{$stitle}" class="thumb">
                    	    {/if}
                    	    </a>
                        </div>
		    </td>
		    <td valign="top" class="pl0">
			<table cellpadding="2" cellspacing="0">
			    <tr>
				<td>
				    <div class="plong">
                    		    {if $same_title_uploads eq "0"}
                    			<a href="{$base_url}/{$ptype}/{$title}&pl={$smarty.request.vkey}">
                    		    {else}
                    			<a href="{$base_url}/{$ptype}/{$fkey}&pl={$smarty.request.vkey}">
                    		    {/if}
                    			    {$stitle|truncate:$tr_titlelist:"..."}
                    			</a>
                		    </div>
                		</td>
                	    </tr>
                	    <tr>
                		<td>{$sdesc|truncate:$tr_desclist:"..."|nl2br|spchar}</td>
                	    </tr>
                	    <tr>
                		<td>
                		    <table cellpadding="0" cellspacing="0">
                			<tr>
                			    <td>{$rate}</td>
                			    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                			    <td>{$stime} {$fileaddedago}</td>
                			    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                			    <td>{$sviews|viewnr}{$plist_txt61}</td>
                			    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                			    <td><a href="{$base_url}/user/{if $special_characters eq "0"}{$suser}{else}{$suid}{/if}">{$suser}</a></td>
                			</tr>
                		    </table>
                		</td>
                	    </tr>
                	</table>
		    </td>
		</tr>
	    {/section}
		<tr>
		    <td colspan="2" class="pag_bg" align="center">{$link}</td>
		</tr>
	    </table>
	</td>
	<td align="right" valign="top" class="pt10" width="300">
	{insert name=ad_status assign=check aname=view_file_ads_right}
            {if $check eq "1"}
                {include file="ads/view_file_ads_right.tpl"}
                <br>
            {/if}
	</td>
    </tr>
</table>
<!-- END PLAYLIST DETAILS TABLE -->
<script language="javascript" src="{$js_url}/ajaxresponder.js" type="text/javascript"></script>
<input type="hidden" name="ldivx" id="ldivx" value="">
<input type="hidden" name="thisDiv" id="thisDiv" value=""> 