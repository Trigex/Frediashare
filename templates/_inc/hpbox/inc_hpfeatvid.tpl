	    <table width="100%" border="0" cellspacing="0" cellpadding="0 align=center">
		<tr>
		    <td valign="top">
			<div align="center">{if $site_theme eq "black"}<img src="{$img_url}/topcorners_hpr2.gif" width="300" height="6" alt="">{else}<img src="{$img_url}/topcorners_hpr1.gif" width="300" height="6" alt="">{/if}</div>
                <table border="0" cellpadding="0" cellspacing="0" align="center" {if $site_theme eq "black"}class="cborder2"{else}class="cborder"{/if} width="300">
                    <tr>
                        {if $site_theme eq "black"}<td id="bgshp8" class="{if $smarty.session.hpfeatvid eq "none"}cbg2s-nb{else}cbg2s{/if}">{else}<td id="bgshp8" class="{if $smarty.session.hpfeatvid eq "none"}cbgs-nb{else}cbgs{/if}">{/if}
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td valign="middle" class="pl5" width="18">
                                        <div id="cdownarrhp8" style="display: {if $smarty.session.hpfeatvid eq "block" or $smarty.session.hpfeatvid eq ""}block{else}none{/if};" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp8(); set_hpsess('featvid');"><img src="{$img_url}/arrowdown1.gif" width="9" height="5" alt=""></a>
                                        </div>
                                        <div id="cleftarrhp8" style="display: {if $smarty.session.hpfeatvid eq "none"}block{else}none{/if};" class="pl2">
                                            <a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp8(); set_hpsess('featvid');"><img src="{$img_url}/arrowleft1.gif" width="5" height="9" alt=""></a>
                                        </div>
                                    </td>
                                    <td valign="middle" class="pl5" align="left"><a href="javascript:void(0)" onclick="thisDiv('no'); c_mhp8(); set_hpsess('featvid');"><span class="mh2"><span id="mmh1hp8" class="{if $smarty.session.hpfeatvid eq "none"}{else}act{/if}">{$hpbox_trec}</span></span></a></td>
                                </tr>
                            </table>
                            <div id="cspacerhp8" style="display: {$smarty.session.hpfeatvid};"><table cellpadding="0" cellspacing="0"><tr><td height="5"></td></tr></table></div>
                        </td>
                    </tr>
                </table>
            </div>
		    </td>
		</tr>
		<tr>
		    <td valign="top">
		    <div id="mmenulisthp8" style="display: {$smarty.session.hpfeatvid};">
			<table width="100%" cellpadding=0 cellspacing=0 border=0>
			    <tr>
				<td align="center">
				    <div align="center">
                        		<script type="text/javascript" src="{$base_url}/modules/vPlayer/js/swfobject.js"></script>                                                                                         
                        		<div id="flash" class="{if $site_theme eq "black"}{else}{/if}">Macromedia Flash Player 9 is required to access this object!<br> To get the most recent version of Flash player available for your browser, visit the <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" target="_blank">Adobe Flash download page</a>.</div>
                            		    <script type="text/javascript">
                            		    // <![CDATA[
                            			var so = new SWFObject("{$base_url}/modules/vPlayer/vPlayer.swf?f={$base_url}/modules/vPlayer/vPlayercfg.php?idx={$key}", "main", "300", "260", "9", "{$bgc}");
                            			so.addParam('allowfullscreen','true');
                            			so.addParam('quality','high');
                            			so.addParam('wmode','opaque');
                            			so.addParam('bgcolor','{$bgc}');
                            			so.write("flash");
                            		    // ]]>
                        		</script>
                    		    </div>
                		</td>
			    </tr>
			</table>
			<table width="100%" cellpadding=3 cellspacing=0 border=0>
			    <tr>
				<td colspan=2><span class="vtitle">{$res[0].vtitle}</span></td>
			    </tr>
			    <tr>
				<td>
				    <span class="gr">{$fileaddedby} </span>{insert name=uid_to_name assign=uname vid=$res[0].vid}{if $special_characters eq "0"}<a href="{$base_url}/profile/{$uname}">{else}<a href="{$base_url}/profile/{$res[0].uid}">{/if}{$uname}</a>
				    ,&nbsp;{insert name=time_range assign=rtime field=addtime IDFR=vid id=$res[0].vid tbl=files_video}{$rtime} {$fileaddedago}
				</td>
				<td valign=top width="5%">
				    {if $file_ratings eq "1"}{insert name=key_to_rate assign=rate vkey=$res[0].vkey}{$rate}{/if}
				</td>
			    </tr>
			</table><br>
		    </div>
		    <div align="center" id="cbottomhp8" style="display: {if $smarty.session.hpfeatvid eq "none"}block{else}none{/if};">{if $site_theme eq "black"}<img src="{$img_url}/bottomcorners_hpr2.gif" width="300" height="6" alt="">{else}<img src="{$img_url}/bottomcorners_hpr1.gif" width="300" height="6" alt="">{/if}</div>
		    </td>
		</tr>
	    </table>
