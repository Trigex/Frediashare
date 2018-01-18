<table width="100%" cellpadding="0" cellspacing="0" border="0" align="left">
    <tr>
	<td>	
	    <table width="100%" cellpadding="5" cellspacing="0" border="0" align="left">
		<tr>
		    <td width="11" style="padding-left: 0px;">
			<div id="cdownarr12plv" style="{if $smarty.request.vplsave eq ""}display: none;{else}display: block;"{/if}" class="pl2">
			    <a href="javascript:void(0)" onclick="ReverseContentDisplay('vplistinfodiv'); ReverseContentDisplay('cleftarr12plv'); ReverseContentDisplay('cdownarr12plv'); setclass_act2('vplistinfo');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a> 
			</div>
			<div id="cleftarr12plv" style="{if $smarty.request.vplsave eq ""}display: block;{else}display: none;"{/if}" class="pl2"> 
			    <a href="javascript:void(0)" onclick="ReverseContentDisplay('vplistinfodiv'); ReverseContentDisplay('cdownarr12plv'); ReverseContentDisplay('cleftarr12plv'); setclass_act2('vplistinfo');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
			</div>
		    </td>
		    <td style="padding-left: 0px;"><a href="javascript:void(0)" onclick="ReverseContentDisplay('vplistinfodiv'); ReverseContentDisplay('cleftarr12plv'); ReverseContentDisplay('cdownarr12plv'); setclass_act2('vplistinfo');"><span id="vplistinfo" class="{if $smarty.request.vplsave ne ""}act{/if}">{$plist_txt16}</span></a></td>
		    <td align="right" width="13%"><form name="vplshare"><input type="button" name="vplshare" class="fb" style="width: 110px;" value="{$plist_txt45}" onclick="window.open('{$base_url}/share_video_playlist/{$smarty.request.vplkey}', 'pshare', 'top=25,left=0,width=640,height=480,resizable=0');"></form></td>
		    <td align="right" width="13%"><form name="vplinfoclear" method="post" action=""><input type="button" name="vplclear" class="fb" style="width: 110px;" value="{$plist_txt44}" onclick="if (confirm('{$plist_txt46}')) {ldelim} this.form.submit(); return false; {rdelim}"><input type="hidden" name="vplclearkey" value="{$smarty.request.vplkey}"></form></td>
		    <td align="right" width="13%"><form name="vplinfodel" method="post" action=""><input type="button" name="vpldel" class="fb" style="width: 110px;" value="{$plist_txt31}" onclick="if (confirm('{$plist_txt32}')) {ldelim} this.form.submit(); return false; {rdelim}"><input type="hidden" name="vpldelkey" value="{$smarty.request.vplkey}"></form></td>
		</tr>
	    </table>
	</td>
    </tr>
    <tr>
	<td>
	<form name="vplinfo" method="post" action="">
	    <div id="vplistinfodiv" style="{if $smarty.request.vplsave eq ""}display: none;{else}display: block;"{/if}">
		<table width="100%" cellpadding="10" cellspacing="0" border="0" align="left" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
		    <tr>
			<td width="120" valign="top" class="">
			{if $vids[0].vid ne ""}
			    {insert name=vid_to_rndv assign=rnd vid=$vids[0].vid}
			    {insert name=vid_to_rndvv assign=rndbn vid=$vids[0].vid}
			    <table cellpadding="1" cellspacing="0" border=0>
				<tr>
				    <td>
					{insert name=getfield assign=vplthumb field=thumb table=playlist_video qfield=vkey qvalue=$smarty.request.vplkey}
					<div id="vplthumb">
					{if $vplthumb eq "0"}
					    <img src="{$tmb_url}/user{$vids[0].uid}/{$rndbn}_{$rnd}.jpg" width="{$img_max_width}" height="{$img_max_height}" alt="" class="thumb">
					{else}
					    {insert name=vid_to_rndv assign=rnd vid=$vplthumb}
					    {insert name=vid_to_rndvv assign=rndbn vid=$vplthumb}
					    {insert name=getfield assign=fuid field=uid table=files_video qfield=vid qvalue=$vplthumb}
					    <img src="{$tmb_url}/user{$fuid}/{$rndbn}_{$rnd}.jpg" width="{$img_max_width}" height="{$img_max_height}" alt="" class="thumb">
					{/if}
					</div>
				    </td>
				</tr>
				<tr><td align="center"><a href="javascript:void(0)" onclick="ShowContent('getvplthumb'); prevId=null; sh('preloader'); xajax_listare_resp('1', '{$smarty.request.vplkey}');">{$plist_txt37}</a></td></tr>
			    </table>
			{/if}
			</td>
			<td class="nopad_pinfo">
			    <div id="getvplthumb" style="display: none;">
				<table cellpadding="10" cellspacing="0" width="100%" class="br1" style="margin-top: 10px;">
				    <tr>
					<td class="nopad">
					    <script type="text/javascript" src="{$base_url}/modules/channels/playlists/js/panel.js"></script>
					    <script type="text/javascript" src="{$base_url}/modules/channels/playlists/js/xajax.js"></script>
					    <div id="recipient" style="display:block;"></div>
					    <div id="preloader" style="display:none;" class="p5">{$adm_setgen79}</div>
					</td>
				    </tr>
				</table>
			    </div>
			    {insert name=getfield assign=vpltitle field=pname table=playlist_video qfield=vkey qvalue=$smarty.request.vplkey}
			    {insert name=getfield assign=vpldesc field=descr table=playlist_video qfield=vkey qvalue=$smarty.request.vplkey}
			    {insert name=getfield assign=vpltags field=tags table=playlist_video qfield=vkey qvalue=$smarty.request.vplkey}
			    {insert name=getfield assign=vplpriv field=privacy table=playlist_video qfield=vkey qvalue=$smarty.request.vplkey}
			    {insert name=getfield assign=vplog field=vlog table=playlist_video qfield=vkey qvalue=$smarty.request.vplkey}
			    {insert name=getfield assign=vplembed field=embed table=playlist_video qfield=vkey qvalue=$smarty.request.vplkey}
			    <div class="p5"></div>
			    <div class="p1">{$myfiles_edittitle}</div>
			    <div class="p1"><input type="text" name="vpltitle" class="ff" value="{$vpltitle|spchar}"></div>
			    <div class="p5"></div>
			    <div class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;"></div>
			    <div class="p5"></div>
			    <div class="p1">{$myfiles_editdescr}</div>
			    <div class="p1"><textarea name="vpldesc" class="ff" rows="3">{$vpldesc|spchar}</textarea></div>
			    <div class="p5"></div>
			    <div class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;"></div>
			    <div class="p5"></div>
			    <div class="p1">{$plist_txt20}</div>
			    <div class="p1"><input type="text" name="vplink" class="ff" readonly value="{$base_url}/video_playlist/{$smarty.request.vplkey}" onclick="this.select();"></div>
			    <div class="p5"></div>
			    <div class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;"></div>
			    <div class="p5"></div>
<!--			    
			    <div class="p1">{$plist_txt21}</div>
			    <div class="p1"><input type="text" name="vplembed" class="ff" value=""></div>
			    <div class="p1"><table cellpadding="0" cellspacing="0"><tr><td><input type="checkbox" name="vplembed_allow" style="width: 13px;" {if $vplembed eq "1"}checked{/if}></td><td>{$plist_txt22}</td></tr></table></div>
			    <div class="p5"></div>
			    <div class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;"></div>
			    <div class="p5"></div>
-->			    
			    <div class="p1">{$filetags}</div>
			    <div class="p1"><textarea name="vpltags" class="ff" rows="3">{$vpltags|spchar}</textarea></div>
			    <div class="p5"></div>
			    <div class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;"></div>
			    <div class="p5"></div>
			    <div class="p1">{$plist_txt23}</div>
			    <div class="p1"><table cellpadding="1" cellspacing="0"><tr><td><input type="radio" name="vplpriv" value="public" style="width: 13px;" {if $vplpriv eq "public"}checked{/if}></td><td valign="bottom">{$up_public}</td><td><input type="radio" name="vplpriv" value="private" style="width: 13px;" {if $vplpriv eq "private"}checked{/if}></td><td valign="bottom">{$up_private}</td></tr></table></div>
			    <div class="p5"></div>
			    <div class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;"></div>
			    <div class="p5"></div>
			    {if $enable_channels eq "1"}
			    {if $vplog eq "1"}<div class="p1">{$plist_txt24}<a href="{$base_url}/user/{$smarty.session.USERNAME}&view=video_blog">{$plist_txt25}</a></div>{/if}
			    <div class="p1"><table cellpadding="0" cellspacing="0"><tr><td><input type="checkbox" name="vlog_set" style="width: 13px;" {if $vplog eq "1"}checked{/if}></td><td>{$plist_txt28}</td></tr></table></div>
			    <div class="p5"></div>
			    <div class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;"></div>
			    {/if}
			    <div class="p5"></div>
			    <div class="p1"><input type="submit" name="vplsave" value="{$mypr_infotxtsave}" class="fb" style="width: 110px;"></div>
			    <div class="p10"></div>
			</td>
		    </tr>
		</table>
	    </div>
	</form>
	<script type="text/javascript">
            var prev_onload = document.body.onload;
            window.onload = function() {ldelim}
                if( prev_onload ) prev_onload();
                {if $enable_videos eq "1" and $tres gt 0}sh('preloader'); xajax_listare_resp('1', '{$smarty.request.vplkey}');{/if}
                window.loaded = true;
            {rdelim}
            
            {literal}
            var prevId;
	    function changeBdr(here) {
		if (prevId){
		    document.getElementById(prevId).className='';
		}
		document.getElementById(here).className='thumb';
		prevId = here;
	    }
            {/literal}
        </script>
        </td>
    </tr>
</table>