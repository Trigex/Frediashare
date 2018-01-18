<?php /* Smarty version 2.6.26, created on 2009-11-10 15:39:35
         compiled from _inc/inc_searchfilters.tpl */ ?>
	<?php if ($this->_tpl_vars['total'] != '0' || $this->_tpl_vars['stbn'] != 'friends'): ?>
	    <?php if ($this->_tpl_vars['sbtn'] == 'search' || $this->_tpl_vars['btn'] == 'bmember' || $this->_tpl_vars['sbtn'] == 'friends' || $this->_tpl_vars['sbtn'] == 'ufr' || $this->_tpl_vars['sbtn'] == 'myusubs'): ?><?php $this->assign('turl', $this->_tpl_vars['base_url']); ?><?php elseif ($this->_tpl_vars['sbtn'] == 'adm_search' || $this->_tpl_vars['btn'] == 'adm_members'): ?><?php $this->assign('turl', $this->_tpl_vars['admin_url']); ?>
	<?php endif; ?>
	<td colspan=2 class="">
	<?php if ($this->_tpl_vars['site_theme'] == 'metube' && ( $this->_tpl_vars['sbtn'] == 'search' || $this->_tpl_vars['sbtn'] == 'adm_search' )): ?>
	    <table cellpadding=0 cellspacing=0 width="100%" border=0>
		<tr>
		    <td <?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?>class="plt10"<?php endif; ?>>
			<table cellpadding="0" cellspacing="0" width="100%">
			    <tr>
				<td align="left">
				<?php if ($_REQUEST['searchall'] != ""): ?><?php $this->assign('searchin', $_REQUEST['searchall']); ?>
				<?php elseif ($_REQUEST['searcha'] != ""): ?><?php $this->assign('searchin', $_REQUEST['searcha']); ?>
				<?php elseif ($_REQUEST['searchi'] != ""): ?><?php $this->assign('searchin', $_REQUEST['searchi']); ?>
				<?php elseif ($_REQUEST['searchv'] != ""): ?><?php $this->assign('searchin', $_REQUEST['searchv']); ?>
				<?php elseif ($_REQUEST['searchm'] != ""): ?><?php $this->assign('searchin', $_REQUEST['searchm']); ?>
				<?php elseif ($_REQUEST['searchp'] != ""): ?><?php $this->assign('searchin', $_REQUEST['searchp']); ?>
				<?php elseif ($_REQUEST['searcht'] != ""): ?><?php $this->assign('searchin', $_REQUEST['searcht']); ?>
				<?php endif; ?>
				
				    <span class="gr"><?php echo $this->_tpl_vars['search_filter']; ?>
</span>
				    <a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/all/<?php echo $this->_tpl_vars['searchin']; ?>
"><span class="<?php if ($_REQUEST['searchall'] != ""): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['adm_searchmixed']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

				    <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?><a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/audios/<?php echo $this->_tpl_vars['searchin']; ?>
"><span class="<?php if ($_REQUEST['searcha'] != ""): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['saudios']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?>
				    <?php if ($this->_tpl_vars['enable_images'] == '1'): ?><a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/images/<?php echo $this->_tpl_vars['searchin']; ?>
"><span class="<?php if ($_REQUEST['searchi'] != ""): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['simages']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?>
				    <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?><a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/videos/<?php echo $this->_tpl_vars['searchin']; ?>
"><span class="<?php if ($_REQUEST['searchv'] != ""): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['svideos']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?>
				    <?php if ($this->_tpl_vars['enable_channels'] == '1'): ?><a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php if ($this->_tpl_vars['enable_channels'] == '1'): ?>channels<?php else: ?>members<?php endif; ?>/<?php echo $this->_tpl_vars['searchin']; ?>
"><span class="<?php if ($_REQUEST['searchm'] != ""): ?>act<?php endif; ?>"><?php if ($this->_tpl_vars['enable_channels'] == '1'): ?><?php echo $this->_tpl_vars['uch_thl4']; ?>
<?php else: ?><?php echo $this->_tpl_vars['smembers']; ?>
<?php endif; ?></span></a><?php if ($this->_tpl_vars['sbtn'] != 'adm_search'): ?><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?><?php endif; ?>
				    <?php if ($this->_tpl_vars['sbtn'] != 'adm_search'): ?><a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/playlists/<?php echo $this->_tpl_vars['searchin']; ?>
"><span class="<?php if ($_REQUEST['searchp'] != ""): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['uch_thl8']; ?>
</span></a><?php endif; ?>
				</td>
				<td align="right">
			<?php if ($_REQUEST['searchm'] == "" && ( $this->_tpl_vars['sbtn'] == 'search' || $this->_tpl_vars['sbtn'] == 'adm_search' )): ?>
			<?php if ($_REQUEST['searchp'] == ""): ?>
			    <a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/featured"><span class="<?php if ($_REQUEST['filter'] == 'featured'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortfeat']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			    <a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/most_recent"><span class="<?php if ($_REQUEST['filter'] == 'most_recent'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter3']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			    <a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/most_played"><span class="<?php if ($_REQUEST['filter'] == 'most_played'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter2']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			    <?php if ($this->_tpl_vars['file_comments'] == '1'): ?><a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/most_commented"><span class="<?php if ($_REQUEST['filter'] == 'most_commented'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter1']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?>
			    <?php if ($this->_tpl_vars['file_responses'] == '1'): ?><a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/most_responded"><span class="<?php if ($_REQUEST['filter'] == 'most_responded'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['fresp_txt28']; ?>
</span></a><?php endif; ?>
			    <?php if ($this->_tpl_vars['file_ratings'] == '1'): ?><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/top_rated"><span class="<?php if ($_REQUEST['filter'] == 'top_rated'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter4']; ?>
</span></a><?php endif; ?>
			<?php else: ?>
			    <a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/mr"><span class="<?php if ($_REQUEST['filter'] == 'mr'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['search_filter3']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			    <a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/mv"><span class="<?php if ($_REQUEST['filter'] == 'mv'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['mostviewed']; ?>
</span></a>
			<?php endif; ?>
			<?php else: ?>
				<?php if ($this->_tpl_vars['enable_channels'] == '1'): ?><a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/ch_views"><span class="<?php if ($_REQUEST['filter'] == 'ch_views'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostviewed']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?>
				<?php if ($this->_tpl_vars['enable_channels'] == '1'): ?><a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/ch_subs"><span class="<?php if ($_REQUEST['filter'] == 'ch_subs'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['plist_txt75']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?>
				<?php if ($this->_tpl_vars['enable_audio'] == '1'): ?><a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/audio_files"><span class="<?php if ($_REQUEST['filter'] == 'audio_files'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter5']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?>
				<?php if ($this->_tpl_vars['enable_images'] == '1'): ?><a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/image_files"><span class="<?php if ($_REQUEST['filter'] == 'image_files'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter6']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?>
				<?php if ($this->_tpl_vars['enable_videos'] == '1'): ?><a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/video_files"><span class="<?php if ($_REQUEST['filter'] == 'video_files'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter7']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?>
				<a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/online"><span class="<?php if ($_REQUEST['filter'] == 'online'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter10']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

				<a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/offline"><span class="<?php if ($_REQUEST['filter'] == 'offline'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter11']; ?>
</span></a>
			<?php endif; ?>
				</td>
			    </tr>
			</table>
		    </td>
		</tr>
	    </table>
	<?php else: ?>
	    <table cellpadding=0 cellspacing=0 width="100%" border=0>
		<tr>
		    <td <?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?>class="plt10"<?php endif; ?>>
			<span class="gr"><?php echo $this->_tpl_vars['search_filter']; ?>
</span>
			<?php if ($_REQUEST['searchm'] == "" && ( $this->_tpl_vars['sbtn'] == 'search' || $this->_tpl_vars['sbtn'] == 'adm_search' )): ?>
			<?php if ($_REQUEST['searchp'] == ""): ?>
			    <a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/featured"><span class="<?php if ($_REQUEST['filter'] == 'featured'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortfeat']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			    <a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/most_recent"><span class="<?php if ($_REQUEST['filter'] == 'most_recent'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter3']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			    <a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/most_played"><span class="<?php if ($_REQUEST['filter'] == 'most_played'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter2']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			    <?php if ($this->_tpl_vars['file_comments'] == '1'): ?><a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/most_commented"><span class="<?php if ($_REQUEST['filter'] == 'most_commented'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter1']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?>
			    <?php if ($this->_tpl_vars['file_responses'] == '1'): ?><a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/most_responded"><span class="<?php if ($_REQUEST['filter'] == 'most_responded'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['fresp_txt28']; ?>
</span></a><?php endif; ?>
			    <?php if ($this->_tpl_vars['file_ratings'] == '1'): ?><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/top_rated"><span class="<?php if ($_REQUEST['filter'] == 'top_rated'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter4']; ?>
</span></a><?php endif; ?>
			<?php else: ?>
			    <a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/mr"><span class="<?php if ($_REQUEST['filter'] == 'mr'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['search_filter3']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			    <a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/mv"><span class="<?php if ($_REQUEST['filter'] == 'mv'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['mostviewed']; ?>
</span></a>
			<?php endif; ?>
			<?php else: ?>
			    <?php if ($this->_tpl_vars['sbtn'] == 'search' || $this->_tpl_vars['sbtn'] == 'adm_search'): ?>
				<?php if ($this->_tpl_vars['enable_channels'] == '1'): ?><a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/ch_views"><span class="<?php if ($_REQUEST['filter'] == 'ch_views'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostviewed']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?>
				<?php if ($this->_tpl_vars['enable_channels'] == '1'): ?><a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/ch_subs"><span class="<?php if ($_REQUEST['filter'] == 'ch_subs'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['plist_txt75']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?>
				<?php if ($this->_tpl_vars['enable_audio'] == '1'): ?><a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/audio_files"><span class="<?php if ($_REQUEST['filter'] == 'audio_files'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter5']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?>
				<?php if ($this->_tpl_vars['enable_images'] == '1'): ?><a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/image_files"><span class="<?php if ($_REQUEST['filter'] == 'image_files'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter6']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?>
				<?php if ($this->_tpl_vars['enable_videos'] == '1'): ?><a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/video_files"><span class="<?php if ($_REQUEST['filter'] == 'video_files'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter7']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?>
				<a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/last_joined"><span class="<?php if ($_REQUEST['filter'] == 'last_joined'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter8']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

				<a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/last_login"><span class="<?php if ($_REQUEST['filter'] == 'last_login'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter9']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

				<a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/online"><span class="<?php if ($_REQUEST['filter'] == 'online'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter10']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

				<a href="<?php echo $this->_tpl_vars['turl']; ?>
/search/<?php echo $this->_tpl_vars['lnk']; ?>
/<?php echo $this->_tpl_vars['stype1']; ?>
/offline"><span class="<?php if ($_REQUEST['filter'] == 'offline'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter11']; ?>
</span></a>
			    <?php elseif ($this->_tpl_vars['btn'] == 'bmember' || $this->_tpl_vars['sbtn'] == 'friends' || $this->_tpl_vars['sbtn'] == 'ufr' || $this->_tpl_vars['btn'] == 'adm_members' || $this->_tpl_vars['sbtn'] == 'myusubs'): ?>
				<?php if ($this->_tpl_vars['btn'] == 'bmember'): ?><?php $this->assign('sect', 'members'); ?><?php elseif ($this->_tpl_vars['sbtn'] == 'myusubs'): ?><?php $this->assign('sect', 'my_subscribers'); ?><?php elseif ($this->_tpl_vars['btn'] == 'adm_members'): ?><?php $this->assign('admreg', "members/registered"); ?><?php elseif ($this->_tpl_vars['sbtn'] == 'friends'): ?><?php $this->assign('sect', 'my_friends'); ?><?php elseif ($this->_tpl_vars['sbtn'] == 'ufr'): ?><?php $this->assign('sect', 'user_friends'); ?><?php endif; ?>
				<?php if ($this->_tpl_vars['btn'] == 'adm_members'): ?>
				    <a href="<?php echo $this->_tpl_vars['turl']; ?>
/<?php echo $this->_tpl_vars['sect']; ?>
<?php echo $this->_tpl_vars['admreg']; ?>
/most_subscribed<?php if ($_GET['mtype'] != ""): ?>&mtype=<?php echo $_GET['mtype']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['filter'] == 'most_subscribed'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['plist_txt75']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

				    <a href="<?php echo $this->_tpl_vars['turl']; ?>
/<?php echo $this->_tpl_vars['sect']; ?>
<?php echo $this->_tpl_vars['admreg']; ?>
/most_viewed<?php if ($_GET['mtype'] != ""): ?>&mtype=<?php echo $_GET['mtype']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['filter'] == 'most_viewed'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostviewed']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

				<?php endif; ?>
				<?php if ($this->_tpl_vars['enable_audio'] == '1' || $this->_tpl_vars['btn'] == 'adm_members'): ?><a href="<?php echo $this->_tpl_vars['turl']; ?>
/<?php echo $this->_tpl_vars['sect']; ?>
<?php echo $this->_tpl_vars['admreg']; ?>
/<?php if ($this->_tpl_vars['sbtn'] == 'ufr'): ?><?php echo $_REQUEST['user']; ?>
/<?php endif; ?>audio_files<?php if ($_GET['mtype'] != ""): ?>&mtype=<?php echo $_GET['mtype']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['filter'] == 'audio_files'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter5']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?>
				<?php if ($this->_tpl_vars['enable_images'] == '1' || $this->_tpl_vars['btn'] == 'adm_members'): ?><a href="<?php echo $this->_tpl_vars['turl']; ?>
/<?php echo $this->_tpl_vars['sect']; ?>
<?php echo $this->_tpl_vars['admreg']; ?>
/<?php if ($this->_tpl_vars['sbtn'] == 'ufr'): ?><?php echo $_REQUEST['user']; ?>
/<?php endif; ?>image_files<?php if ($_GET['mtype'] != ""): ?>&mtype=<?php echo $_GET['mtype']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['filter'] == 'image_files'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter6']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?>
				<?php if ($this->_tpl_vars['enable_videos'] == '1' || $this->_tpl_vars['btn'] == 'adm_members'): ?><a href="<?php echo $this->_tpl_vars['turl']; ?>
/<?php echo $this->_tpl_vars['sect']; ?>
<?php echo $this->_tpl_vars['admreg']; ?>
/<?php if ($this->_tpl_vars['sbtn'] == 'ufr'): ?><?php echo $_REQUEST['user']; ?>
/<?php endif; ?>video_files<?php if ($_GET['mtype'] != ""): ?>&mtype=<?php echo $_GET['mtype']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['filter'] == 'video_files'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter7']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?>
				<a href="<?php echo $this->_tpl_vars['turl']; ?>
/<?php echo $this->_tpl_vars['sect']; ?>
<?php echo $this->_tpl_vars['admreg']; ?>
/<?php if ($this->_tpl_vars['sbtn'] == 'ufr'): ?><?php echo $_REQUEST['user']; ?>
/<?php endif; ?>last_joined<?php if ($_GET['mtype'] != ""): ?>&mtype=<?php echo $_GET['mtype']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['filter'] == 'last_joined'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter8']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

				<a href="<?php echo $this->_tpl_vars['turl']; ?>
/<?php echo $this->_tpl_vars['sect']; ?>
<?php echo $this->_tpl_vars['admreg']; ?>
/<?php if ($this->_tpl_vars['sbtn'] == 'ufr'): ?><?php echo $_REQUEST['user']; ?>
/<?php endif; ?>last_login<?php if ($_GET['mtype'] != ""): ?>&mtype=<?php echo $_GET['mtype']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['filter'] == 'last_login'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter9']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

				<a href="<?php echo $this->_tpl_vars['turl']; ?>
/<?php echo $this->_tpl_vars['sect']; ?>
<?php echo $this->_tpl_vars['admreg']; ?>
/<?php if ($this->_tpl_vars['sbtn'] == 'ufr'): ?><?php echo $_REQUEST['user']; ?>
/<?php endif; ?>online<?php if ($_GET['mtype'] != ""): ?>&mtype=<?php echo $_GET['mtype']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['filter'] == 'online'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter10']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

				<a href="<?php echo $this->_tpl_vars['turl']; ?>
/<?php echo $this->_tpl_vars['sect']; ?>
<?php echo $this->_tpl_vars['admreg']; ?>
/<?php if ($this->_tpl_vars['sbtn'] == 'ufr'): ?><?php echo $_REQUEST['user']; ?>
/<?php endif; ?>offline<?php if ($_GET['mtype'] != ""): ?>&mtype=<?php echo $_GET['mtype']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['filter'] == 'offline'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter11']; ?>
</span></a>
			    <?php endif; ?>
			<?php endif; ?>
		    </td>
		</tr>
	    </table>
	<?php endif; ?>
	</td>
	<?php endif; ?>