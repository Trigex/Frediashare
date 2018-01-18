<table width="100%" cellpadding="0" cellspacing="0" border="0" align="left">
    <tr>
	<td>
	    <table width="100%" cellpadding="5" cellspacing="0" border="0" align="left">
		<tr>
		    <td width="11" style="padding-left: 0px;">
			<div id="cdownarr12plv" style="{if $smarty.request.aplsave eq ""}display: none;{else}display: block;"{/if}" class="pl2">
			    <a href="javascript:void(0)" onclick="ReverseContentDisplay('aplistinfodiv'); ReverseContentDisplay('cleftarr12plv'); ReverseContentDisplay('cdownarr12plv'); setclass_act2('aplistinfo');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a> 
			</div>
			<div id="cleftarr12plv" style="{if $smarty.request.aplsave eq ""}display: block;{else}display: none;"{/if}" class="pl2"> 
			    <a href="javascript:void(0)" onclick="ReverseContentDisplay('aplistinfodiv'); ReverseContentDisplay('cdownarr12plv'); ReverseContentDisplay('cleftarr12plv'); setclass_act2('aplistinfo');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
			</div>
		    </td>
		    <td style="padding-left: 0px;"><a href="javascript:void(0)" onclick="ReverseContentDisplay('aplistinfodiv'); ReverseContentDisplay('cleftarr12plv'); ReverseContentDisplay('cdownarr12plv'); setclass_act2('aplistinfo');"><span id="aplistinfo" class="{if $smarty.request.aplsave ne ""}act{/if}">{$plist_txt16}</span></a></td>
		    <td align="right" width="13%"><form name="aplshare"><input type="button" name="aplshare" class="fb" style="width: 110px;" value="{$plist_txt45}" onclick="window.open('{$base_url}/share_audio_playlist/{$smarty.request.aplkey}', 'pshare', 'top=25,left=0,width=640,height=480,resizable=0');"></form></td>
                    <td align="right" width="13%"><form name="aplinfoclear" method="post" action=""><input type="button" name="aplclear" class="fb" style="width: 110px;" value="{$plist_txt44}" onclick="if (confirm('{$plist_txt46}')) {ldelim} this.form.submit(); return false; {rdelim}"><input type="hidden" name="aplclearkey" value="{$smarty.request.aplkey}"></form></td>
                    <td align="right" width="13%"><form name="aplinfodel" method="post" action=""><input type="button" name="apldel" class="fb" style="width: 110px;" value="{$plist_txt31}" onclick="if (confirm('{$plist_txt32}')) {ldelim} this.form.submit(); return false; {rdelim}"><input type="hidden" name="apldelkey" value="{$smarty.request.aplkey}"></form></td>
		</tr>
	    </table>
	</td>
    </tr>
    <tr>
	<td>
	<form name="aplinfo" method="post" action="">
	    <div id="aplistinfodiv" style="{if $smarty.request.aplsave eq ""}display: none;{else}display: block;"{/if}">
		<table width="100%" cellpadding="10" cellspacing="0" border="0" align="left" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
		    <tr>
			<td width="120" valign="top" class="">
			    {if $auds[0].vid ne ""}
                            {insert name=vid_to_rnda assign=rnd vid=$auds[0].vid}
                            {insert name=vid_to_rndvv assign=rndbn vid=$auds[0].vid}
                            <table cellpadding="1" cellspacing="0" border=0>
                                <tr>
                                    <td>
                                        {insert name=getfield assign=aplthumb field=thumb table=playlist_audio qfield=vkey qvalue=$smarty.request.aplkey}
                                        <div id="aplthumb" style="display: block;">
                                        {if $aplthumb eq "0"}
                                            <img src="{$tmb_url}/user{$auds[0].uid}/{$rndbn}_{$rnd}.jpg" width="{$img_max_width}" height="{$img_max_height}" alt="" class="thumb">
                                        {else}
                                            {insert name=vid_to_rnda assign=rnd vid=$aplthumb}
                                            {insert name=vid_to_rndvv assign=rndbn vid=$aplthumb}
                                            {insert name=getfield assign=fuid field=uid table=files_audio qfield=vid qvalue=$aplthumb}
                                            <img src="{$tmb_url}/user{$fuid}/{$rndbn}_{$rnd}.jpg" width="{$img_max_width}" height="{$img_max_height}" alt="" class="thumb">
                                        {/if}
                                        </div>
                                    </td>
                                </tr>
                                <tr><td align="center"><a href="javascript:void(0)" onclick="ShowContent('getaplthumb'); prevId=null; sh('preloader'); xajax_listare_resp('1', '{$smarty.request.aplkey}');">{$plist_txt37}</a></td></tr>
                            </table>
                        {/if}
			</td>
			<td class="nopad_pinfo">
			    <div id="getaplthumb" style="display: none;">
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
			    {insert name=getfield assign=apltitle field=pname table=playlist_audio qfield=vkey qvalue=$smarty.request.aplkey}
			    {insert name=getfield assign=apldesc field=descr table=playlist_audio qfield=vkey qvalue=$smarty.request.aplkey}
			    {insert name=getfield assign=apltags field=tags table=playlist_audio qfield=vkey qvalue=$smarty.request.aplkey}
			    {insert name=getfield assign=aplpriv field=privacy table=playlist_audio qfield=vkey qvalue=$smarty.request.aplkey}
			    {insert name=getfield assign=aplog field=vlog table=playlist_audio qfield=vkey qvalue=$smarty.request.aplkey}
			    {insert name=getfield assign=aplembed field=embed table=playlist_audio qfield=vkey qvalue=$smarty.request.aplkey}
			    <div class="p5"></div>
			    <div class="p1">{$myfiles_edittitle}</div>
			    <div class="p1"><input type="text" name="apltitle" class="ff" value="{$apltitle|spchar}"></div>
			    <div class="p5"></div>
			    <div class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;"></div>
			    <div class="p5"></div>
			    <div class="p1">{$myfiles_editdescr}</div>
			    <div class="p1"><textarea name="apldesc" class="ff" rows="3">{$apldesc|spchar}</textarea></div>
			    <div class="p5"></div>
			    <div class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;"></div>
			    <div class="p5"></div>
			    <div class="p1">{$plist_txt20}</div>
			    <div class="p1"><input type="text" name="aplink" class="ff" readonly value="{$base_url}/audio_playlist/{$smarty.request.aplkey}" onclick="this.select();"></div>
			    <div class="p5"></div>
			    <div class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;"></div>
			    <div class="p5"></div>
<!--			    
			    <div class="p1">{$plist_txt21}</div>
			    <div class="p1"><input type="text" name="aplembed" class="ff" value=""></div>
			    <div class="p1"><table cellpadding="0" cellspacing="0"><tr><td><input type="checkbox" name="aplembed_allow" style="width: 13px;" {if $aplembed eq "1"}checked{/if}></td><td>{$plist_txt22}</td></tr></table></div>
			    <div class="p5"></div>
			    <div class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;"></div>
			    <div class="p5"></div>
-->			    
			    <div class="p1">{$filetags}</div>
			    <div class="p1"><textarea name="apltags" class="ff" rows="3">{$apltags|spchar}</textarea></div>
			    <div class="p5"></div>
			    <div class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;"></div>
			    <div class="p5"></div>
			    <div class="p1">{$plist_txt23}</div>
			    <div class="p1"><table cellpadding="1" cellspacing="0"><tr><td><input type="radio" name="aplpriv" value="public" style="width: 13px;" {if $aplpriv eq "public"}checked{/if}></td><td valign="bottom">{$up_public}</td><td><input type="radio" name="aplpriv" value="private" style="width: 13px;" {if $aplpriv eq "private"}checked{/if}></td><td valign="bottom">{$up_private}</td></tr></table></div>
			    <div class="p5"></div>
			    <div class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;"></div>
			    <div class="p5"></div>
			    {if $enable_channels eq "1"}
			    {if $aplog eq "1"}<div class="p1">{$plist_txt24}<a href="{$base_url}/user/{$smarty.session.USERNAME}&view=audio_blog">{$plist_txt27}</a></div>{/if}
			    <div class="p1"><table cellpadding="0" cellspacing="0"><tr><td><input type="checkbox" name="alog_set" style="width: 13px;" {if $aplog eq "1"}checked{/if}></td><td>{$plist_txt30}</td></tr></table></div>
			    <div class="p5"></div>
			    <div class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;"></div>
			    {/if}
			    <div class="p5"></div>
			    <div class="p1"><input type="submit" name="aplsave" value="{$mypr_infotxtsave}" class="fb" style="width: 110px;"></div>
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
                {if $enable_audio eq "1" and $tres gt 0}sh('preloader'); xajax_listare_resp('1', '{$smarty.request.aplkey}');{/if}
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