<!-- BEGIN RSS FEEDS TABLE -->
<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
    <tr><td class="h3"></td></tr>
</table>
<table cellspacing="0" cellpadding="5" border="0" align="center" class="width950b">
    <tbody>
        <tr>
            <td valign="top" class="grey" colspan="2">
            <table width="95%" cellspacing="2" cellpadding="5" border="0" align="center">
                <tbody>
                    <tr><td>{$rss_txt1}</td></tr>
		    <tr><td><span class="normal">{$rss_txt2}</span></td></tr>
                    <tr><td>{$rss_txt3}</td></tr>
		    <tr><td><span class="normal">{$rss_txt4}</span></td></tr>
                    <tr><td>{$rss_txt5}</td></tr>
		    <tr><td><span class="normal">{$rss_txt6}</span></td></tr>
		    <tr>
			<td>
			    <table width="100%" cellpadding="10" cellspacing="0" border=0 id="AutoNumber2">
				<tr>
				{if $enable_audio eq "1"}
				    <td width="33%" valign=top>
					<table cellpadding="2" cellspacing="0" border=0 align=center>
					    <tr><td align=left><a href="{$base_url}/rss/audios/newest"><img src="{$img_url}/rss2.png" width="16" height="16" alt="{$rss_audio1}"></a></td><td><a href="{$base_url}/rss/audios/newest">{$rss_audio1}</a> </td></tr>
					    <tr><td align=left><a href="{$base_url}/rss/audios/most_played"><img src="{$img_url}/rss2.png" width="16" height="16" alt="{$rss_audio2}"></td><td><a href="{$base_url}/rss/audios/most_played">{$rss_audio2}</a> </td></tr>
					    <tr><td align=left><a href="{$base_url}/rss/audios/top_rated"><img src="{$img_url}/rss2.png" width="16" height="16" alt="{$rss_audio3}"></td><td><a href="{$base_url}/rss/audios/top_rated">{$rss_audio3}</a> </td></tr>
					</table>
				    </td>
				{/if}
				{if $enable_images eq "1"}
				    <td width="34%" valign=top>
					<table cellpadding="2" cellspacing="0" border=0 align=center>
					    <tr><td align=left><a href="{$base_url}/rss/images/newest"><img src="{$img_url}/rss2.png" width="16" height="16" alt="{$rss_image1}"></td><td><a href="{$base_url}/rss/images/newest">{$rss_image1}</a> </td></tr>
					    <tr><td align=left><a href="{$base_url}/rss/images/most_viewed"><img src="{$img_url}/rss2.png" width="16" height="16" alt="{$rss_image2}"></td><td><a href="{$base_url}/rss/images/most_viewed">{$rss_image2}</a> </td></tr>
					    <tr><td align=left><a href="{$base_url}/rss/images/top_rated"><img src="{$img_url}/rss2.png" width="16" height="16" alt="{$rss_image3}"></td><td><a href="{$base_url}/rss/images/top_rated">{$rss_image3}</a> </td></tr>
					</table>
				    </td>
				{/if}
				{if $enable_videos eq "1"}
				    <td width="33%" valign=top>
					<table cellpadding="2" cellspacing="0" border=0 align=center>
					    <tr><td align=left><a href="{$base_url}/rss/videos/newest"><img src="{$img_url}/rss2.png" width="16" height="16" alt="{$rss_video1}"></td><td><a href="{$base_url}/rss/videos/newest">{$rss_video1}</a> </td></tr>
					    <tr><td align=left><a href="{$base_url}/rss/videos/most_viewed"><img src="{$img_url}/rss2.png" width="16" height="16" alt="{$rss_video2}"></td><td><a href="{$base_url}/rss/videos/most_viewed">{$rss_video2}</a> </td></tr>
					    <tr><td align=left><a href="{$base_url}/rss/videos/top_rated"><img src="{$img_url}/rss2.png" width="16" height="16" alt="{$rss_video3}"></td><td><a href="{$base_url}/rss/videos/top_rated">{$rss_video3}</a> </td></tr>
					</table>
				    </td>
				{/if}
				</tr>
			    </table>
			</td>
		    </tr>
                </tbody>
            </table>
            </td>
        </tr>
    </tbody>
</table>
<!-- END RSS FEEDS TABLE -->