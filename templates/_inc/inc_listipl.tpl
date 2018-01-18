<table width="100%" cellpadding="0" cellspacing="0" border="0" align="left">
    <tr>
	<td>
	    <table width="100%" cellpadding="5" cellspacing="0" border="0" align="left">
		<tr>
		    <td width="11" style="padding-left: 0px;">
			<div id="cdownarr12plv" style="{if $smarty.request.iplsave eq ""}display: none;{else}display: block;"{/if}" class="pl2">
			    <a href="javascript:void(0)" onclick="ReverseContentDisplay('iplistinfodiv'); ReverseContentDisplay('cleftarr12plv'); ReverseContentDisplay('cdownarr12plv'); setclass_act2('iplistinfo');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a> 
			</div>
			<div id="cleftarr12plv" style="{if $smarty.request.iplsave eq ""}display: block;{else}display: none;"{/if}" class="pl2"> 
			    <a href="javascript:void(0)" onclick="ReverseContentDisplay('iplistinfodiv'); ReverseContentDisplay('cdownarr12plv'); ReverseContentDisplay('cleftarr12plv'); setclass_act2('iplistinfo');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
			</div>
		    </td>
		    <td style="padding-left: 0px;"><a href="javascript:void(0)" onclick="ReverseContentDisplay('iplistinfodiv'); ReverseContentDisplay('cleftarr12plv'); ReverseContentDisplay('cdownarr12plv'); setclass_act2('iplistinfo');"><span id="iplistinfo" class="{if $smarty.request.iplsave ne ""}act{/if}">{$plist_txt16}</span></a></td>
		    <td align="right" width="13%"><form name="iplshare"><input type="button" name="iplshare" class="fb" style="width: 110px;" value="{$plist_txt45}" onclick="window.open('{$base_url}/share_image_playlist/{$smarty.request.iplkey}', 'pshare', 'top=25,left=0,width=640,height=480,resizable=0');"></form></td>
                    <td align="right" width="13%"><form name="iplinfoclear" method="post" action=""><input type="button" name="iplclear" class="fb" style="width: 110px;" value="{$plist_txt44}" onclick="if (confirm('{$plist_txt46}')) {ldelim} this.form.submit(); return false; {rdelim}"><input type="hidden" name="iplclearkey" value="{$smarty.request.iplkey}"></form></td>
                    <td align="right" width="13%"><form name="iplinfodel" method="post" action=""><input type="button" name="ipldel" class="fb" style="width: 110px;" value="{$plist_txt31}" onclick="if (confirm('{$plist_txt32}')) {ldelim} this.form.submit(); return false; {rdelim}"><input type="hidden" name="ipldelkey" value="{$smarty.request.iplkey}"></form></td>
		</tr>
	    </table>
	</td>
    </tr>
    <tr>
	<td>
	<form name="iplinfo" method="post" action="">
	    <div id="iplistinfodiv" style="{if $smarty.request.iplsave eq ""}display: none;{else}display: block;"{/if}">
		<table width="100%" cellpadding="10" cellspacing="0" border="0" align="left" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
		    <tr>
			<td width="120" valign="top" class="">
			{if $imgs[0].vid ne ""}
                            <table cellpadding="1" cellspacing="0" border=0>
                                <tr>
                                    <td>
                                        {insert name=getfield assign=iplthumb field=thumb table=playlist_image qfield=vkey qvalue=$smarty.request.iplkey}
                                        <div id="iplthumb">
                                        {if $iplthumb eq "0"}
                                            <img src="{$tmb_url}/user{$imgs[0].uid}/{$imgs[0].vflvname}" width="{$img_max_width}" height="{$img_max_height}" alt="" class="thumb">
                                        {else}
                                            {insert name=vid_to_rndv assign=rnd vid=$iplthumb}
                                            {insert name=vid_to_rndvv assign=rndbn vid=$iplthumb}
                                            {insert name=getfield assign=fuid field=uid table=files_image qfield=vid qvalue=$iplthumb}
                                            {insert name=getfield assign=vflvname field=vflvname table=files_image qfield=vid qvalue=$iplthumb}
                                            <img src="{$tmb_url}/user{$fuid}/{$vflvname}" width="{$img_max_width}" height="{$img_max_height}" alt="" class="thumb">
                                        {/if}
                                        </div>
                                    </td>
                                </tr>
                                <tr><td align="center"><a href="javascript:void(0)" onclick="ShowContent('getiplthumb'); prevId=null; sh('preloader'); xajax_listare_resp('1', '{$smarty.request.iplkey}');">{$plist_txt37}</a></td></tr>
                            </table>                                                                                                                                                                           
                        {/if} 
			</td>
			<td class="nopad_pinfo">
			    <div id="getiplthumb" style="display: none;">
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
			    {insert name=getfield assign=ipltitle field=pname table=playlist_image qfield=vkey qvalue=$smarty.request.iplkey}
			    {insert name=getfield assign=ipldesc field=descr table=playlist_image qfield=vkey qvalue=$smarty.request.iplkey}
			    {insert name=getfield assign=ipltags field=tags table=playlist_image qfield=vkey qvalue=$smarty.request.iplkey}
			    {insert name=getfield assign=iplpriv field=privacy table=playlist_image qfield=vkey qvalue=$smarty.request.iplkey}
			    {insert name=getfield assign=iplog field=vlog table=playlist_image qfield=vkey qvalue=$smarty.request.iplkey}
			    {insert name=getfield assign=iplembed field=embed table=playlist_image qfield=vkey qvalue=$smarty.request.iplkey}
			    <div class="p5"></div>
			    <div class="p1">{$myfiles_edittitle}</div>
			    <div class="p1"><input type="text" name="ipltitle" class="ff" value="{$ipltitle|spchar}"></div>
			    <div class="p5"></div>
			    <div class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;"></div>
			    <div class="p5"></div>
			    <div class="p1">{$myfiles_editdescr}</div>
			    <div class="p1"><textarea name="ipldesc" class="ff" rows="3">{$ipldesc|spchar}</textarea></div>
			    <div class="p5"></div>
			    <div class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;"></div>
			    <div class="p5"></div>
			    <div class="p1">{$plist_txt20}</div>
			    <div class="p1"><input type="text" name="iplink" class="ff" readonly value="{$base_url}/image_playlist/{$smarty.request.iplkey}" onclick="this.select();"></div>
			    <div class="p5"></div>
			    <div class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;"></div>
			    <div class="p5"></div>
<!--			    
			    <div class="p1">{$plist_txt21}</div>
			    <div class="p1"><input type="text" name="iplembed" class="ff" value=""></div>
			    <div class="p1"><table cellpadding="0" cellspacing="0"><tr><td><input type="checkbox" name="iplembed_allow" style="width: 13px;" {if $iplembed eq "1"}checked{/if}></td><td>{$plist_txt22}</td></tr></table></div>
			    <div class="p5"></div>
			    <div class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;"></div>
			    <div class="p5"></div>
-->			    
			    <div class="p1">{$filetags}</div>
			    <div class="p1"><textarea name="ipltags" class="ff" rows="3">{$ipltags|spchar}</textarea></div>
			    <div class="p5"></div>
			    <div class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;"></div>
			    <div class="p5"></div>
			    <div class="p1">{$plist_txt23}</div>
			    <div class="p1"><table cellpadding="1" cellspacing="0"><tr><td><input type="radio" name="iplpriv" value="public" style="width: 13px;" {if $iplpriv eq "public"}checked{/if}></td><td valign="bottom">{$up_public}</td><td><input type="radio" name="iplpriv" value="private" style="width: 13px;" {if $iplpriv eq "private"}checked{/if}></td><td valign="bottom">{$up_private}</td></tr></table></div>
			    <div class="p5"></div>
			    <div class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;"></div>
			    <div class="p5"></div>
			    {if $enable_channels eq "1"}
			    {if $iplog eq "1"}<div class="p1">{$plist_txt24}<a href="{$base_url}/user/{$smarty.session.USERNAME}&view=image_blog">{$plist_txt26}</a></div>{/if}
			    <div class="p1"><table cellpadding="0" cellspacing="0"><tr><td><input type="checkbox" name="ilog_set" style="width: 13px;" {if $iplog eq "1"}checked{/if}></td><td>{$plist_txt29}</td></tr></table></div>
			    <div class="p5"></div>
			    <div class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;"></div>
			    {/if}
			    <div class="p5"></div>
			    <div class="p1"><input type="submit" name="iplsave" value="{$mypr_infotxtsave}" class="fb" style="width: 110px;"></div>
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
                {if $enable_images eq "1" and $tres gt 0}sh('preloader'); xajax_listare_resp('1', '{$smarty.request.iplkey}');{/if}
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