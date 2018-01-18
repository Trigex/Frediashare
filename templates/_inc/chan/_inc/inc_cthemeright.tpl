    	    <table width="100%" border="0" cellpadding="2" cellspacing="1">
    		<tr>
    		    <td class="nopad">
    			<table width="100%" border="0" cellpadding="2" cellspacing="1">
    			    <tr><td align="right">{$pr_chinfop94}</td></tr>
    			</table>
    			<table width="100%" border="0" cellpadding="10" cellspacing="0" class="br1" id="th_maintbl" style="font-family: {$tinfo[0].th_font_fam}; background:{if $tinfo[0].th_bgimage ne "none"}url(media/files_user_bgimages/{$pbg}){/if} {$tinfo[0].th_bgcol} 0 0 {if $tinfo[0].th_bgrpt eq "1"}repeat{else}no-repeat{/if};">
    			    <tr>
    				<td valign="top" style="padding-top: 10px;" width="140">
    				    <!-- main -->
    				    <table id="bb_tb1" width="142" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid {$tinfo[0].th_bb_border};">
    					<tr>
    					    <td id="bb_th1" style="background-color: {$tinfo[0].th_bb_border}; color: {$tinfo[0].th_hb_h1}; padding: 5px; font-size: {$tinfo[0].th_font_size}px;">{$pr_chinfop95}</td>
    					</tr>
    					<tr>
    					    <td id="bb_th2" style="background-color: {$tinfo[0].th_hb_bgcol}; color: {$tinfo[0].th_hb_h2}; padding: 5px; font-size: {$tinfo[0].th_font_size}px;">
    						<table cellpadding="5" cellspacing="0">
    						    <tr>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/small_profile_img.jpg" width="42" height="32" alt=""></td>
    							<td valign="top" id="bb_txt"><img src="{$base_url}/modules/channels/scripts/preview/subs.gif" width="41" height="9" alt=""><span id="bb4_txt1">{$pr_chinfop96}</span></td>
    						    </tr>
    						    <tr>
    							<td colspan="2"><span class="exlink" id="bb_link1" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfop97}</span></td>
    						    </tr>
    						</table>
    					    </td>
    					</tr>
    				    </table>
    				    <br>
    				    <!-- connect -->
    				    <table id="bb1_tb1" width="142" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid {$tinfo[0].th_bb_border};">
    					<tr>
    					    <td id="bb1_th1" style="background-color: {$tinfo[0].th_bb_border}; color: {$tinfo[0].th_bb_h1}; padding: 5px; font-size: {$tinfo[0].th_font_size}px;">{$pr_chinfob1}</td>
    					</tr>
    					<tr>
    					    <td id="bb1_th2" style="background-color: {$tinfo[0].th_bb_bgcol}; color: {$tinfo[0].th_bb_h2}; padding: 5px;">
    						<table cellpadding="5" cellspacing="0" align="center">
    						    <tr>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/small_send_icon.gif" width="9" height="9" alt=""><span class="exlink" id="bb_link2" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob2}</span></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/small_friend_icon.gif" width="9" height="9" alt=""><span class="exlink" id="bb_link3" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob4}</span></td>
    						    </tr>
    						    <tr>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/small_fwd_icon.gif" width="9" height="9" alt=""><span class="exlink" id="bb_link4" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob3}</span></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/small_add_icon.gif" width="9" height="9" alt=""><span class="exlink" id="bb_link5" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob5}</span></td>
    						    </tr>
    						</table>
    					    </td>
    					</tr>
    				    </table>
    				    <br>
    				    <!-- subscriptions left -->
    				    <div id="div_subsdivleft" {if $tinfo[0].th_subs eq "1" and $tinfo[0].th_subspos eq "left"}style="display: block;"{else}style="display: none;"{/if}>
    				    <table id="bbsub_tb1" width="130" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid {$tinfo[0].th_bb_border};">
    					<tr>
    					    <td id="bbsub_th1" style="background-color: {$tinfo[0].th_bb_border}; color: {$tinfo[0].th_bb_h1}; padding: 5px; font-size: {$tinfo[0].th_font_size}px;">{$pr_chinfob6}</td>
    					</tr>
    					<tr>
    					    <td id="bbsub_th2" style="background-color: {$tinfo[0].th_bb_bgcol}; color: {$tinfo[0].th_bb_h2}; padding: 5px;">
    						<table cellpadding="3" cellspacing="0" align="center" width="130" border=0>
    						    <tr>
    							<td align="center"><img src="{$base_url}/modules/channels/scripts/preview/small_channel_img1.jpg" width="28" height="21" alt=""><span class="exlink" id="bb_link6" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob7}</span></td>
    							<td align="center"><img src="{$base_url}/modules/channels/scripts/preview/small_channel_img2.jpg" width="28" height="21" alt=""><span class="exlink" id="bb_link7" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob8}</span></td>
    						    </tr>
    						    <tr>
    							<td align="center"><img src="{$base_url}/modules/channels/scripts/preview/small_channel_img1.jpg" width="28" height="21" alt=""><span class="exlink" id="bb_link8" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob7}</span></td>
    							<td align="center"><img src="{$base_url}/modules/channels/scripts/preview/small_channel_img2.jpg" width="28" height="21" alt=""><span class="exlink" id="bb_link9" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob8}</span></td>
    						    </tr>
    						</table>
    					    </td>
    					</tr>
    				    </table>
    				    <br>
    				    </div>
    				    <!-- subscribers left -->
    				    <div id="div_usubsdivleft" {if $tinfo[0].th_usubs eq "1" and $tinfo[0].th_usubs_pos eq "left"}style="display: block;"{else}style="display: none;"{/if}>
    				    <table id="bbusub_tb1" width="130" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid {$tinfo[0].th_bb_border};">
    					<tr>
    					    <td id="bbusub_th1" style="background-color: {$tinfo[0].th_bb_border}; color: {$tinfo[0].th_bb_h1}; padding: 5px; font-size: {$tinfo[0].th_font_size}px;">{$pr_chinfob28}</td>
    					</tr>
    					<tr>
    					    <td id="bbusub_th2" style="background-color: {$tinfo[0].th_bb_bgcol}; color: {$tinfo[0].th_bb_h2}; padding: 5px;">
    						<table cellpadding="3" cellspacing="0" align="center" width="130" border=0>
    						    <tr>
    							<td align="center"><img src="{$base_url}/modules/channels/scripts/preview/small_channel_img1.jpg" width="28" height="21" alt=""><span class="exlink" id="bb_link10" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob7}</span></td>
    							<td align="center"><img src="{$base_url}/modules/channels/scripts/preview/small_channel_img2.jpg" width="28" height="21" alt=""><span class="exlink" id="bb_link11" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob8}</span></td>
    						    </tr>
    						    <tr>
    							<td align="center"><img src="{$base_url}/modules/channels/scripts/preview/small_channel_img1.jpg" width="28" height="21" alt=""><span class="exlink" id="bb_link12" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob7}</span></td>
    							<td align="center"><img src="{$base_url}/modules/channels/scripts/preview/small_channel_img2.jpg" width="28" height="21" alt=""><span class="exlink" id="bb_link13" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob8}</span></td>
    						    </tr>
    						</table>
    					    </td>
    					</tr>
    				    </table>
    				    <br>
    				    </div>
    				    <!-- friends left -->
    				    <div id="div_frdivleft" {if $tinfo[0].th_friends eq "1" and $tinfo[0].th_friends_pos eq "left"}style="display: block;"{else}style="display: none;"{/if}>
    				    <table id="bbfrl_tb1" width="130" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid {$tinfo[0].th_bb_border};">
    					<tr>
    					    <td id="bbfrl_th1" style="background-color: {$tinfo[0].th_bb_border}; color: {$tinfo[0].th_bb_h1}; padding: 5px; font-size: {$tinfo[0].th_font_size}px;">{$pr_chinfob29}</td>
    					</tr>
    					<tr>
    					    <td id="bbfrl_th2" style="background-color: {$tinfo[0].th_bb_bgcol}; color: {$tinfo[0].th_bb_h2}; padding: 5px;">
    						<table cellpadding="3" cellspacing="0" align="center" width="130" border=0>
    						    <tr>
    							<td align="center"><img src="{$base_url}/modules/channels/scripts/preview/small_channel_img1.jpg" width="28" height="21" alt=""><span class="exlink" id="bb_link14" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob7}</span></td>
    							<td align="center"><img src="{$base_url}/modules/channels/scripts/preview/small_channel_img2.jpg" width="28" height="21" alt=""><span class="exlink" id="bb_link15" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob8}</span></td>
    						    </tr>
    						    <tr>
    							<td align="center"><img src="{$base_url}/modules/channels/scripts/preview/small_channel_img1.jpg" width="28" height="21" alt=""><span class="exlink" id="bb_link16" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob7}</span></td>
    							<td align="center"><img src="{$base_url}/modules/channels/scripts/preview/small_channel_img2.jpg" width="28" height="21" alt=""><span class="exlink" id="bb_link17" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob8}</span></td>
    						    </tr>
    						</table>
    					    </td>
    					</tr>
    				    </table>
    				    <br>
    				    </div>
    				    <!-- comments left -->
    				    <div id="div_commdivleft" {if $tinfo[0].th_comm eq "1" and $tinfo[0].th_comm_pos eq "left"}style="display: block;"{else}style="display: none;"{/if}>
    				    <table id="bbucomm1_tb1" width="142" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid {$tinfo[0].th_bb_border};">
    					<tr>
    					    <td id="bbucomm1_th1" style="background-color: {$tinfo[0].th_bb_border}; color: {$tinfo[0].th_bb_h1}; padding: 5px; font-size: {$tinfo[0].th_font_size}px;">{$pr_chinfob30}</td> 
    					</tr>
    					<tr>
    					    <td id="bbucomm1_th2" style="background-color: {$tinfo[0].th_bb_bgcol}; color: {$tinfo[0].th_bb_h2}; padding: 5px;">
    						<table cellpadding="5" cellspacing="0" align="left" border=0>
    						    <tr>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/small_comments_img.jpg" width="28" height="21" alt=""></td>
    							<td><span class="exlink" id="bb_link18" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob33}</span>{$myfiles_delim}<span id="th_label3" style="font-size: {$tinfo[0].th_font_size}px; color: {$tinfo[0].th_label};">{$pr_chinfob34}</span><span id="bb_txt2" style="font-size: {$tinfo[0].th_font_size}px;">{$pr_chinfob35}</span></td>
    						    </tr>
    						    <tr>
    							<td colspan="2"><span class="exlink" id="bb_link19" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob31}</span>{$myfiles_delim}<span class="exlink" id="bb_link20" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob32}</span></td>
    						    </tr>
    						</table>
    					    </td>
    					</tr>
    				    </table>
    				    </div>
    				</td>
    				
    				<td valign="top" class="" width="188">
    				    <!-- featured video -->
    				    <div id="div_featvid" {if $tinfo[0].th_featvid eq "1"}style="display: block;"{else}style="display: none;"{/if}>
    				    <table width="188" border="0" cellpadding="0" cellspacing="0">
    					<tr><td align="center"><img src="{$base_url}/modules/channels/scripts/preview/vlog_img1.jpg" width="180"></td></tr>
    				    </table>
    				    <br>
    				    </div>
    				    <!-- playlists -->
    				    <div id="div_playlist" {if $tinfo[0].th_plist eq "1"}style="display: block;"{else}style="display: none;"{/if}>
    				    <table id="bbpl_tb1" width="188" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid {$tinfo[0].th_bb_border};">
    					<tr>
    					    <td id="bbpl_th1" style="background-color: {$tinfo[0].th_bb_border}; color: {$tinfo[0].th_bb_h1}; padding: 5px; font-size: {$tinfo[0].th_font_size}px;">{$pr_chinfob36}</td>
    					</tr>
    					<tr>
    					    <td id="bbpl_th2" style="background-color: {$tinfo[0].th_bb_bgcol}; color: {$tinfo[0].th_bb_h2}; padding: 5px;">
    						<table cellpadding="5" cellspacing="0" align="left" border=0>
    						    <tr>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img1.jpg" width="38" alt=""></td>
    							<td><span class="exlink" id="bb_link21" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob37}</span><span id="bb_txt3" style="font-size: {$tinfo[0].th_font_size}px;">{$pr_chinfob38}</span></td>
    						    </tr>
    						    <tr>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img2.jpg" width="38" alt=""></td>
    							<td><span class="exlink" id="bb_link22" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob37}</span><span id="bb_txt4" style="font-size: {$tinfo[0].th_font_size}px;">{$pr_chinfob38}</span></td>
    						    </tr>
    						    <tr>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img3.jpg" width="38" alt=""></td>
    							<td><span class="exlink" id="bb_link23" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob37}</span><span id="bb_txt5" style="font-size: {$tinfo[0].th_font_size}px;">{$pr_chinfob38}</span></td>
    						    </tr>
    						</table>
    					    </td>
    					</tr>
    				    </table>
    				    <br>
    				    </div>
    				    <!-- videos grid -->
    				    <div id="div_videogrid" {if $tinfo[0].th_vid eq "1" and $tinfo[0].th_vid_view eq "grid"}style="display: block;"{else}style="display: none;"{/if}>
    				    <table id="bbfv_tb1" width="188" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid {$tinfo[0].th_bb_border};">
    					<tr>
    					    <td id="bbfv_th1" style="background-color: {$tinfo[0].th_bb_border}; color: {$tinfo[0].th_bb_h1}; padding: 5px; font-size: {$tinfo[0].th_font_size}px;">{$pr_chinfob19}</td>
    					</tr>
    					<tr>
    					    <td id="bbfv_th2" style="background-color: {$tinfo[0].th_bb_bgcol}; color: {$tinfo[0].th_bb_h2}; padding: 5px;">
    						<table cellpadding="5" cellspacing="0" align="center" border=0>
    						    <tr>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img1.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img2.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img3.jpg" width="38" alt=""></td>
    						    </tr>
    						    <tr>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img1.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img2.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img3.jpg" width="38" alt=""></td>
    						    </tr>
    						    <tr>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img1.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img2.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img3.jpg" width="38" alt=""></td>
    						    </tr>
    						</table>
    					    </td>
    					</tr>
    				    </table>
    				    <br>
    				    </div>
    				    <!-- videos compact -->
    				    <div id="div_videocomp" {if $tinfo[0].th_vid eq "1" and $tinfo[0].th_vid_view eq "compact"}style="display: block;"{else}style="display: none;"{/if}>
    				    <table id="bbfv1_tb1" width="188" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid {$tinfo[0].th_bb_border};">
    					<tr>
    					    <td id="bbfv1_th1" style="background-color: {$tinfo[0].th_bb_border}; color: {$tinfo[0].th_bb_h1}; padding: 5px; font-size: {$tinfo[0].th_font_size}px;">{$pr_chinfob19}</td> 
    					</tr>
    					<tr>
    					    <td id="bbfv1_th2" style="background-color: {$tinfo[0].th_bb_bgcol}; color: {$tinfo[0].th_bb_h2}; padding: 5px;">
    						<table cellpadding="3" cellspacing="0" align="center" border=0>
    						    <tr>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img1.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img2.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img3.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img4.jpg" width="38" alt=""></td>
    						    </td>
    						</table>
    					    </td>
    					</tr>
    				    </table>
    				    <br>
    				    </div>
    				    <!-- video log -->
    				    <div id="div_videolog" {if $tinfo[0].th_vlog eq "1"}style="display: block;"{else}style="display: none;"{/if}>
    				    <table id="bbvlog_tb1" width="188" border="0" cellpadding="0" cellspacing="0" style="border: 0px solid {$tinfo[0].th_vl_border};">
    					<tr>
    					    <td id="bbvlog_th1" style="background-color: {$tinfo[0].th_vl_border}; color: {$tinfo[0].th_vl_h1}; padding: 5px; font-size: {$tinfo[0].th_font_size}px;">{$pr_chinfob20}</td>
    					</tr>
    					<tr>
    					    <td id="bbvlog_th2" style="background-color: {$tinfo[0].th_vl_bgcol}; color: {$tinfo[0].th_vl_h2}; padding: 5px; border: 1px solid {$tinfo[0].th_vl_border}; font-size: {$tinfo[0].th_font_size}px;">
    						<table cellpadding="3" cellspacing="0" align="left" border=0>
    						    <tr>
    							<td valign="top"><img src="{$base_url}/modules/channels/scripts/preview/vlog_img1.jpg" width="68"><span class="exlink" id="bb_link24" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob25}</span><span id="th_label1" style="color: {$tinfo[0].th_label};">{$pr_chinfob26}</span></td>
    							<td valign="top">
    							    <span id="th_vlpost" style="color: {$tinfo[0].th_vl_post}">{$pr_chinfob21}{$pr_chinfob22}</span>
    							    <span id="th_vlbody">{$pr_chinfob23}</span>
    							    <span class="exlink" id="bb_link25" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob24}</span>
    							</td>
    						    </tr>
    						</table>
    					    </td>
    					</tr>
    				    </table>
    				    <br>
    				    </div>
    				    <!-- favorites grid-->
    				    <div id="div_favgrid" {if $tinfo[0].th_fav eq "1" and $tinfo[0].th_fav_view eq "grid"}style="display: block;"{else}style="display: none;"{/if}>
    				    <table id="bbffav_tb1" width="188" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid {$tinfo[0].th_bb_border};">
    					<tr>
    					    <td id="bbffav_th1" style="background-color: {$tinfo[0].th_bb_border}; color: {$tinfo[0].th_bb_h1}; padding: 5px; font-size: {$tinfo[0].th_font_size}px;">{$pr_chinfob27}</td>
    					</tr>
    					<tr>
    					    <td id="bbffav_th2" style="background-color: {$tinfo[0].th_bb_bgcol}; color: {$tinfo[0].th_bb_h2}; padding: 5px;">
    						<table cellpadding="5" cellspacing="0" align="center" border=0>
    						    <tr>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img1.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img2.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img3.jpg" width="38" alt=""></td>
    						    </tr>
    						    <tr>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img1.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img2.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img3.jpg" width="38" alt=""></td>
    						    </tr>
    						    <tr>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img1.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img2.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img3.jpg" width="38" alt=""></td>
    						    </tr>
    						</table>
    					    </td>
    					</tr>
    				    </table>
    				    <br>
    				    </div>
    				    <!-- favorites compact -->
    				    <div id="div_favcomp" {if $tinfo[0].th_fav eq "1" and $tinfo[0].th_fav_view eq "compact"}style="display: block;"{else}style="display: none;"{/if}>
    				    <table id="bbffav1_tb1" width="188" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid {$tinfo[0].th_bb_border};">
    					<tr>
    					    <td id="bbffav1_th1" style="background-color: {$tinfo[0].th_bb_border}; color: {$tinfo[0].th_bb_h1}; padding: 5px; font-size: {$tinfo[0].th_font_size}px;">{$pr_chinfob27}</td> 
    					</tr>
    					<tr>
    					    <td id="bbffav1_th2" style="background-color: {$tinfo[0].th_bb_bgcol}; color: {$tinfo[0].th_bb_h2}; padding: 5px;">
    						<table cellpadding="3" cellspacing="0" align="center" border=0>
    						    <tr>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img1.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img2.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img3.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img4.jpg" width="38" alt=""></td>
    						    </td>
    						</table>
    					    </td>
    					</tr>
    				    </table>
    				    <br>
    				    </div>
    				    <!-- subscriptions right -->
    				    <div id="div_subsdivright" {if $tinfo[0].th_subs eq "1" and $tinfo[0].th_subspos eq "right"}style="display: block;"{else}style="display: none;"{/if}>
    				    <table id="bbsub1_tb1" width="188" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid {$tinfo[0].th_bb_border};">
    					<tr>
    					    <td id="bbsub1_th1" style="background-color: {$tinfo[0].th_bb_border}; color: {$tinfo[0].th_bb_h1}; padding: 5px; font-size: {$tinfo[0].th_font_size}px;">{$pr_chinfob6}</td>
    					</tr>
    					<tr>
    					    <td id="bbsub1_th2" style="background-color: {$tinfo[0].th_bb_bgcol}; color: {$tinfo[0].th_bb_h2}; padding: 5px;">
    						<table cellpadding="3" cellspacing="0" align="center" border=0>
    						    <tr>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img1.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img2.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img3.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img4.jpg" width="38" alt=""></td>
    						    </td>
    						</table>
    					    </td>
    					</tr>
    				    </table>
    				    <br>
    				    </div>
    				    <!-- subscribers right-->
    				    <div id="div_usubsdivright" {if $tinfo[0].th_usubs eq "1" and $tinfo[0].th_usubs_pos eq "right"}style="display: block;"{else}style="display: none;"{/if}>
    				    <table id="bbusub1_tb1" width="188" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid {$tinfo[0].th_bb_border};">
    					<tr>
    					    <td id="bbusub1_th1" style="background-color: {$tinfo[0].th_bb_border}; color: {$tinfo[0].th_bb_h1}; padding: 5px; font-size: {$tinfo[0].th_font_size}px;">{$pr_chinfob28}</td> 
    					</tr>
    					<tr>
    					    <td id="bbusub1_th2" style="background-color: {$tinfo[0].th_bb_bgcol}; color: {$tinfo[0].th_bb_h2}; padding: 5px;">
    						<table cellpadding="3" cellspacing="0" align="center" border=0>
    						    <tr>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img1.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img2.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img3.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img4.jpg" width="38" alt=""></td>
    						    </td>
    						</table>
    					    </td>
    					</tr>
    				    </table>
    				    <br>
    				    </div>
    				    <!-- friends right-->
    				    <div id="div_frdivright" {if $tinfo[0].th_friends eq "1" and $tinfo[0].th_friends_pos eq "right"}style="display: block;"{else}style="display: none;"{/if}>
    				    <table id="bbufr_tb1" width="188" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid {$tinfo[0].th_bb_border};">
    					<tr>
    					    <td id="bbufr_th1" style="background-color: {$tinfo[0].th_bb_border}; color: {$tinfo[0].th_bb_h1}; padding: 5px; font-size: {$tinfo[0].th_font_size}px;">{$pr_chinfob29}</td> 
    					</tr>
    					<tr>
    					    <td id="bbufr_th2" style="background-color: {$tinfo[0].th_bb_bgcol}; color: {$tinfo[0].th_bb_h2}; padding: 5px;">
    						<table cellpadding="3" cellspacing="0" align="center" border=0>
    						    <tr>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img1.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img2.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img3.jpg" width="38" alt=""></td>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/videos_scroller_img4.jpg" width="38" alt=""></td>
    						    </td>
    						</table>
    					    </td>
    					</tr>
    				    </table>
    				    <br>
    				    </div>
    				    <div id="div_commdivright" {if $tinfo[0].th_comm eq "1" and $tinfo[0].th_comm_pos eq "right"}style="display: block;"{else}style="display: none;"{/if}>
    				    <!-- comments right -->
    				    <table id="bbucomm_tb1" width="188" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid {$tinfo[0].th_bb_border};">
    					<tr>
    					    <td id="bbucomm_th1" style="background-color: {$tinfo[0].th_bb_border}; color: {$tinfo[0].th_bb_h1}; padding: 5px; font-size: {$tinfo[0].th_font_size}px;">{$pr_chinfob30}</td> 
    					</tr>
    					<tr>
    					    <td id="bbucomm_th2" style="background-color: {$tinfo[0].th_bb_bgcol}; color: {$tinfo[0].th_bb_h2}; padding: 5px; font-size: {$tinfo[0].th_font_size}px;">
    						<table cellpadding="5" cellspacing="0" align="left" border=0>
    						    <tr>
    							<td><img src="{$base_url}/modules/channels/scripts/preview/small_comments_img.jpg" width="28" height="21" alt=""></td>
    							<td><span class="exlink" id="bb_link26" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob33}</span>{$myfiles_delim}<span id="th_label2" style="color: {$tinfo[0].th_label};">{$pr_chinfob34}</span><span id="bb_txt6">{$pr_chinfob35}</span></td>
    						    </tr>
    						    <tr>
    							<td colspan="2"><span class="exlink" id="bb_link27" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob31}</span>{$myfiles_delim}<span class="exlink" id="bb_link28" style="color: {$tinfo[0].th_link}; font-size: {$tinfo[0].th_font_size}px; font-family: {$tinfo[0].th_font_fam}; text-decoration: {if $tinfo[0].th_link_dec eq "1"}underline{else}none{/if};">{$pr_chinfob32}</span></td>
    						    </tr>
    						</table>
    					    </td>
    					</tr>
    				    </table>
    				    </div>
    				</td>
    			    </tr>
    			</table>
    		    </td>
    		</tr>
    		<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
    		<tr><td colspan="2"><input type="submit" name="thsave" value="{$pr_chinfoc22}" class="fb"></td></tr>
    	    </table>
	    <script type="text/javascript"> set_bb_transp2({$tinfo[0].th_transp-50}); </script>
