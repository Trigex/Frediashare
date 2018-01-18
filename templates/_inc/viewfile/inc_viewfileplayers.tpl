<!-- BEGIN EMBEDDABLE PLAYERS -->
		    {if $btn eq "bvideo"}
			<div align="center">
			    {if $pfscreen eq "1"}{assign var=pfs value="true"}{else}{assign var=pfs value="false"}{/if}
		    	    <script type="text/javascript" src="{$base_url}/modules/vPlayer/js/swfobject.js"></script>
                	    <div id="flash" class="">Macromedia Flash Player 9 is required to access this object!<br> To get the most recent version of Flash player available for your browser, visit the <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" target="_blank">Adobe Flash download page</a>.</div>
                        	<script type="text/javascript">
				// <![CDATA[
                        	var so = new SWFObject('{$base_url}/modules/vPlayer/vPlayer.swf?f={$base_url}/modules/vPlayer/vPlayercfg.php?id={$key}', 'main', '{$pwidth}', '{$pheight}', '9', '{$bgc}');
                        	so.addParam('allowfullscreen','{$pfs}');
                        	so.addParam('allowscriptaccess','always');
                        	so.addParam('quality','high');
                        	so.addParam('wmode','opaque');
                        	so.addParam('bgcolor','{$bgc}');
                        	so.write("flash");
                    		// ]]>
                    	    </script>
            		</div>
                        {if $cr[0].rtovid ne ""}
			<div class="{if $site_theme eq "black"}file_response{else}file_response2{/if}" align="left">
			    {insert name=getfield assign=vt field=vtitle table=files_video qfield=vid qvalue=$cr[0].rtovid}
			    {insert name=getfield assign=key1 field=vkey table=files_video qfield=vid qvalue=$cr[0].rtovid}
			    {insert name=titlev assign=vt1 vkey=$key1}
			    {$fresp_txt23} <a href="{$base_url}/video/{if $same_title_uploads eq "0"}{$vt1}{else}{$key1}{/if}"><span class="bold">{$vt}</span></a>
			</div>
			{/if}
		    {/if}
		    
		    {if $btn eq "baudio"}
			<div class="" align="center">
			    <object name="player" id="player" width="{$pwidth}" height="{$pheight}" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash//swflash.cab#version=8,0,0,0">
				<param name="movie" value="{$base_url}/modules/aPlayer/fmp3player.swf">
				<param name="menu" value="false">
				<param name="quality" value="high">
				<param name="wmode" value="opaque">
				<param name="bgcolor" value="#000000">
				{if $type eq "private" and $vuid ne $smarty.session.UID and $friend ne "yes"}
				<param name="flashvars" value="file={$ado_url}/nomp3.mp3{$autoplay}{$logo}{$showeq}">
				<embed src="{$base_url}/modules/aPlayer/fmp3player.swf" width="{$pwidth}" height="{$pheight}" menu="false" quality="high" bgcolor="#000000" wmode="opaque" flashvars="file={$ado_url}/nomp3.mp3{$autoplay}{$logo}{$showeq}" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
				{else}
				<param name="flashvars" value="file={$base_url}/modules/aPlayer/fmp3player.php?id={$key}{$autoplay}{$logo}{$showeq}">
				<embed src="{$base_url}/modules/aPlayer/fmp3player.swf" width="{$pwidth}" height="{$pheight}" menu="false" quality="high" bgcolor="#000000" wmode="opaque" flashvars="file={$base_url}/modules/aPlayer/fmp3player.php?id={$key}{$autoplay}{$logo}{$showeq}" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
				{/if}
			    </object>
			</div>
			{if $cr[0].rtovid ne ""}
			<div class="{if $site_theme eq "black"}file_response{else}file_response2{/if}" align="left">
			    {insert name=getfield assign=vt field=vtitle table=files_audio qfield=vid qvalue=$cr[0].rtovid}
			    {insert name=getfield assign=key1 field=vkey table=files_audio qfield=vid qvalue=$cr[0].rtovid}
			    {insert name=titlea assign=vt1 vkey=$key1}
			    {$fresp_txt25} <a href="{$base_url}/audio/{if $same_title_uploads eq "0"}{$vt1}{else}{$key1}{/if}"><span class="bold">{$vt}</span></a>
			</div>
			{/if}
		    {/if}
		    
		    {if $btn eq "bimage"}
			<div class="br1" align="center">
                            {insert name=time_range assign=rtime field=addtime IDFR=vid id=$vidid tbl=files_image}
                            {insert name=key_to_user_image assign=owner vkey=$key}
                            <a href="{$pic_url}/user{$vuid}/{$iname}" rel="lightbox" title="{$title}&lt;br&gt;{$descr}&lt;br&gt;{$fileadded}{$rtime}{$fileaddedago}&lt;br&gt;{$fileaddedby} &lt;a href=&quot;{$base_url}/profile/{if $special_characters eq "0"}{$owner}{else}{$vuid}{/if}&quot;&gt;{$owner}&lt;/a&gt;&lt;br&gt;&lt;br&gt;" onMouseOver="window.status=''; return true;">
                                <img width="630" height="385" src="{$tmb_url}/user{$vuid}/{$vidid}v1.jpg" alt="{$title}" {if $istyle eq "1"}style="width: 300px; height: 250px;"{/if}>
                            </a>
                        </div>
                        {if $cr[0].rtovid ne ""}
			<div class="{if $site_theme eq "black"}file_response{else}file_response2{/if}" align="left">
			    {insert name=getfield assign=vt field=vtitle table=files_image qfield=vid qvalue=$cr[0].rtovid}
			    {insert name=getfield assign=key1 field=vkey table=files_image qfield=vid qvalue=$cr[0].rtovid}
			    {insert name=titlei assign=vt1 vkey=$key1}
			    {$fresp_txt24} <a href="{$base_url}/image/{if $same_title_uploads eq "0"}{$vt1}{else}{$key1}{/if}"><span class="bold">{$vt}</span></a>
			</div>
			{/if}
		    {/if}
<!-- END EMBEDDABLE PLAYERS -->
