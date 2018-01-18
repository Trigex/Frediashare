<?php /* Smarty version 2.6.26, created on 2009-11-10 15:40:05
         compiled from _inc/dropmenu/dm_myacct.tpl */ ?>

    <table cellpadding="0" cellspacing="0" border="0">
	<tr>
	    <td>
	    <ul id="<?php if ($this->_tpl_vars['site_theme'] == 'metube'): ?>Menu_tube2<?php else: ?>Menu3<?php endif; ?>" class="<?php if ($this->_tpl_vars['site_theme'] == 'metube'): ?>MM_tube<?php else: ?>MM2<?php endif; ?>" style="padding: 0px; margin: 0px; line-height: 15px;">
		<li>
		    <table cellpadding="0" cellspacing="0">
			<tr>
			    <td><a href="javascript:void(0)"><span style="font-size: 14px;"><?php echo $this->_tpl_vars['snav_mtxt1']; ?>
&nbsp;</span></a></td>
			</tr>
		    </table>
		    <ul id="hidem3">
			<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_profile" onclick="HideContent('hidem3');"><?php if ($this->_tpl_vars['enable_channels'] == '0'): ?><?php echo $this->_tpl_vars['myprofile']; ?>
<?php else: ?><?php echo $this->_tpl_vars['mypchan']; ?>
<?php endif; ?></a></li>
			<?php if ($this->_tpl_vars['enable_audio'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_audios" onclick="HideContent('hidem3');"><?php echo $this->_tpl_vars['myaudio']; ?>
</a></li><?php endif; ?>
			<?php if ($this->_tpl_vars['enable_images'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_images" onclick="HideContent('hidem3');"><?php echo $this->_tpl_vars['myimage']; ?>
</a></li><?php endif; ?>
			<?php if ($this->_tpl_vars['enable_videos'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_videos" onclick="HideContent('hidem3');"><?php echo $this->_tpl_vars['myvideo']; ?>
</a></li><?php endif; ?>
			<?php if ($this->_tpl_vars['enable_channels'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_playlists" onclick="HideContent('hidem3');"><?php echo $this->_tpl_vars['plist_txt1']; ?>
</a></li><?php endif; ?>
			<?php if ($this->_tpl_vars['enable_inbox'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/inbox" onclick="HideContent('hidem3');"><?php echo $this->_tpl_vars['myinbox']; ?>
</a></li><?php else: ?><li><?php if ($this->_tpl_vars['profile_comments'] == '1'): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_comments/profile"><?php elseif ($this->_tpl_vars['enable_videos'] == '1'): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_comments/video"><?php elseif ($this->_tpl_vars['enable_images'] == '1'): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_comments/image"><?php elseif ($this->_tpl_vars['enable_audio'] == '1'): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_comments/audio"><?php endif; ?><?php echo $this->_tpl_vars['mycomm']; ?>
</a></li><?php endif; ?>
			<?php if ($this->_tpl_vars['msg_block'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/blocked_users" onclick="HideContent('hidem3');"><?php echo $this->_tpl_vars['blocked_msglink']; ?>
</a></li><?php endif; ?>
			<?php if ($this->_tpl_vars['file_responses'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/responses/<?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>video<?php elseif ($this->_tpl_vars['enable_images'] == '1'): ?>image<?php elseif ($this->_tpl_vars['enable_audio'] == '1'): ?>audio<?php endif; ?>" onclick="HideContent('hidem3');"><?php echo $this->_tpl_vars['adm_setfileresp']; ?>
</a></li><?php endif; ?>
			<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_quicklist" onclick="HideContent('hidem3');"><?php echo $this->_tpl_vars['qlist_txt4x']; ?>
</a></li>
			<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_favorites" onclick="HideContent('hidem3');"><?php echo $this->_tpl_vars['myfav']; ?>
</a></li>
			<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_friends" onclick="HideContent('hidem3');"><?php echo $this->_tpl_vars['myfriends']; ?>
</a></li>
			<?php if ($this->_tpl_vars['enable_channels'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_subscriptions" onclick="HideContent('hidem3');"><?php echo $this->_tpl_vars['mysubs_heading']; ?>
</a></li><?php endif; ?>
			<?php if ($this->_tpl_vars['enable_channels'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_subscribers" onclick="HideContent('hidem3');"><?php echo $this->_tpl_vars['myusubs_heading']; ?>
</a></li><?php endif; ?>
			<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_history" onclick="HideContent('hidem3');"><?php echo $this->_tpl_vars['myplist']; ?>
</a></li>
		    </ul>
		</li>
	    </ul>
	</td>
	<td>
	    <span style="font-size: 14px;">&nbsp;&nbsp;/&nbsp;
		<?php if ($this->_tpl_vars['sbtn'] == 'inbox' && $this->_tpl_vars['mdi'] == ""): ?><?php echo $this->_tpl_vars['inbox_iheading']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'outbox' && $this->_tpl_vars['mdo'] == ""): ?><?php echo $this->_tpl_vars['inbox_oheading']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'compose'): ?><?php echo $this->_tpl_vars['inbox_cheading']; ?>

		    <?php elseif ($this->_tpl_vars['mdi'] == '1' || $this->_tpl_vars['mdo'] == '1'): ?><?php echo $this->_tpl_vars['inbox_mheading']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'blocked'): ?><?php echo $this->_tpl_vars['blocked_heading']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'comments'): ?><?php echo $this->_tpl_vars['comm_heading']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'friends'): ?><?php echo $this->_tpl_vars['myfr_heading2']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'mysubs'): ?><?php echo $this->_tpl_vars['mysubs_heading']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'mpr'): ?><?php if ($this->_tpl_vars['chs'] == 's1'): ?><?php echo $this->_tpl_vars['pr_chlmitem1']; ?>
<?php elseif ($this->_tpl_vars['chs'] == 's2'): ?><?php echo $this->_tpl_vars['pr_chlmitem2']; ?>
<?php elseif ($this->_tpl_vars['chs'] == 's3'): ?><?php echo $this->_tpl_vars['pr_chlmitem3']; ?>
<?php elseif ($this->_tpl_vars['chs'] == 's31'): ?><?php echo $this->_tpl_vars['pr_chlmitem31']; ?>
<?php elseif ($this->_tpl_vars['chs'] == 's32'): ?><?php echo $this->_tpl_vars['pr_chlmitem32']; ?>
<?php elseif ($this->_tpl_vars['chs'] == 's4'): ?><?php echo $this->_tpl_vars['pr_chlmitem4']; ?>
<?php elseif ($this->_tpl_vars['chs'] == 's41'): ?><?php echo $this->_tpl_vars['pr_chinfob58']; ?>
<?php elseif ($this->_tpl_vars['chs'] == 's42'): ?><?php echo $this->_tpl_vars['pr_chinfob65']; ?>
<?php elseif ($this->_tpl_vars['chs'] == 's5'): ?><?php echo $this->_tpl_vars['pr_chlmitem5']; ?>
<?php endif; ?>
		    <?php elseif ($this->_tpl_vars['sbtn'] == 'ufr'): ?><?php if ($this->_tpl_vars['special_characters'] == '0'): ?><?php echo $_REQUEST['user']; ?>
<?php else: ?><?php echo $this->_tpl_vars['uname']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['userfr_heading']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'gen'): ?><?php echo $this->_tpl_vars['categ_heading']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'vid'): ?><?php echo $this->_tpl_vars['dm_categ3']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'img'): ?><?php echo $this->_tpl_vars['dm_categ2']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'aud'): ?><?php echo $this->_tpl_vars['dm_categ1']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'bmember'): ?><?php echo $this->_tpl_vars['mem_heading']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'bupload'): ?><?php if ($this->_tpl_vars['type'] == 'vconfirmation'): ?><?php echo $this->_tpl_vars['up_th1']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['type'] == 'aconfirmation'): ?><?php echo $this->_tpl_vars['up_th2']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['type'] == 'iconfirmation'): ?><?php echo $this->_tpl_vars['up_th3']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['type'] == 'general'): ?><?php echo $this->_tpl_vars['up_th4']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['type'] == 'audio'): ?><?php echo $this->_tpl_vars['up_th5']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['type'] == 'image'): ?><?php echo $this->_tpl_vars['up_th6']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['type'] == 'video'): ?><?php echo $this->_tpl_vars['up_th7']; ?>
<?php endif; ?>
		    <?php elseif ($this->_tpl_vars['sbtn'] == '3'): ?><?php echo $this->_tpl_vars['up_th7']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == '2'): ?><?php echo $this->_tpl_vars['up_th6']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == '1'): ?><?php echo $this->_tpl_vars['up_th5']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'btags'): ?><?php echo $this->_tpl_vars['tags_text']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'search'): ?><?php echo $this->_tpl_vars['dm_search1']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'myusubs'): ?><?php echo $this->_tpl_vars['myusubs_heading']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'myaud'): ?><?php echo $this->_tpl_vars['viewaudio_heading']; ?>
: <?php echo $this->_tpl_vars['vd'][0]['vtitle']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'myimg'): ?><?php echo $this->_tpl_vars['viewimage_heading']; ?>
: <?php echo $this->_tpl_vars['vd'][0]['vtitle']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'myvid'): ?><?php echo $this->_tpl_vars['viewvideo_heading']; ?>
: <?php echo $this->_tpl_vars['vd'][0]['vtitle']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'resp'): ?><?php if ($this->_tpl_vars['rtype'] == 'audio'): ?><?php echo $this->_tpl_vars['fresp_txt4']; ?>
<?php elseif ($this->_tpl_vars['rtype'] == 'image'): ?><?php echo $this->_tpl_vars['fresp_txt5']; ?>
<?php elseif ($this->_tpl_vars['rtype'] == 'video'): ?><?php echo $this->_tpl_vars['fresp_txt6']; ?>
<?php else: ?><?php echo $this->_tpl_vars['fresp_txt33']; ?>
<?php endif; ?>
		    <?php elseif ($this->_tpl_vars['sbtn'] == 'maudio'): ?><?php echo $this->_tpl_vars['femail_heading1']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'mimage'): ?><?php echo $this->_tpl_vars['femail_heading2']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'mvideo'): ?><?php echo $this->_tpl_vars['femail_heading']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'feeds'): ?><?php echo $this->_tpl_vars['rss_heading']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'profile'): ?><?php echo $this->_tpl_vars['user']; ?>
<?php echo $this->_tpl_vars['profile_heading']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'pd'): ?><?php echo $this->_tpl_vars['plist_txt60']; ?>

		    <?php elseif ($this->_tpl_vars['sbtn'] == 'shows'): ?><?php if ($this->_tpl_vars['sh_ubtn'] == '0' && $_REQUEST['edit_show'] == ""): ?><?php echo $this->_tpl_vars['pr_chinfom19']; ?>
<?php else: ?><?php echo $this->_tpl_vars['pr_chinfom56']; ?>
<?php endif; ?>
		    <?php elseif ($this->_tpl_vars['sbtn'] == 'bchan'): ?><?php echo $this->_tpl_vars['uch_thl4']; ?>

	        <?php endif; ?>
	    </span>
	</td>
    </tr>
</table>