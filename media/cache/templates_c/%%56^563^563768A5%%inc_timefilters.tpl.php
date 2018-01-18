<?php /* Smarty version 2.6.26, created on 2009-11-10 15:41:23
         compiled from _inc/inc_timefilters.tpl */ ?>
	<?php if ($this->_tpl_vars['sbtn'] == 'inbox'): ?><?php $this->assign('sect', "inbox/sort"); ?>
	<?php elseif ($this->_tpl_vars['sbtn'] == 'outbox'): ?><?php $this->assign('sect', "outbox/sort"); ?>
	<?php elseif ($this->_tpl_vars['sbtn'] == 'myaud'): ?><?php $this->assign('sect', 'my_audios'); ?>
	<?php elseif ($this->_tpl_vars['sbtn'] == 'myimg'): ?><?php $this->assign('sect', 'my_images'); ?>
	<?php elseif ($this->_tpl_vars['sbtn'] == 'myvid'): ?><?php $this->assign('sect', 'my_videos'); ?>
	<?php elseif ($this->_tpl_vars['sbtn'] == 'baudio'): ?><?php if ($_REQUEST['user'] == "" && $_REQUEST['category'] == ""): ?><?php $this->assign('sect', 'audios'); ?><?php elseif ($_REQUEST['user'] != ""): ?><?php $this->assign('sect', 'user_audios'); ?><?php elseif ($_REQUEST['category'] != ""): ?><?php $this->assign('sect', "categories/audio"); ?><?php endif; ?>
	<?php elseif ($this->_tpl_vars['sbtn'] == 'bimage'): ?><?php if ($_REQUEST['user'] == "" && $_REQUEST['category'] == ""): ?><?php $this->assign('sect', 'images'); ?><?php elseif ($_REQUEST['user'] != ""): ?><?php $this->assign('sect', 'user_images'); ?><?php elseif ($_REQUEST['category'] != ""): ?><?php $this->assign('sect', "categories/image"); ?><?php endif; ?>
	<?php elseif ($this->_tpl_vars['sbtn'] == 'bvideo'): ?><?php if ($_REQUEST['user'] == "" && $_REQUEST['category'] == ""): ?><?php $this->assign('sect', 'videos'); ?><?php elseif ($_REQUEST['user'] != ""): ?><?php $this->assign('sect', 'user_videos'); ?><?php elseif ($_REQUEST['category'] != ""): ?><?php $this->assign('sect', "categories/video"); ?><?php endif; ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['sbtn'] == 'myaud' || $this->_tpl_vars['sbtn'] == 'myimg' || $this->_tpl_vars['sbtn'] == 'myvid'): ?>
	    <?php if ($_REQUEST['vtype'] == "" || $_REQUEST['vtype'] == 'all'): ?><?php $this->assign('flt', "/all"); ?>
	    <?php elseif ($_REQUEST['vtype'] == 'active'): ?><?php $this->assign('flt', "/active"); ?>
	    <?php elseif ($_REQUEST['vtype'] == 'views'): ?><?php $this->assign('flt', "/views"); ?>
	    <?php elseif ($_REQUEST['vtype'] == 'auditions'): ?><?php $this->assign('flt', "/auditions"); ?>
	    <?php elseif ($_REQUEST['vtype'] == 'comments'): ?><?php $this->assign('flt', "/comments"); ?>
	    <?php elseif ($_REQUEST['vtype'] == 'responses'): ?><?php $this->assign('flt', "/responses"); ?>
	    <?php elseif ($_REQUEST['vtype'] == 'date'): ?><?php $this->assign('flt', "/date"); ?>
	    <?php elseif ($_REQUEST['vtype'] == 'favorited'): ?><?php $this->assign('flt', "/favorited"); ?>
	    <?php elseif ($_REQUEST['vtype'] == 'featured'): ?><?php $this->assign('flt', "/featured"); ?>
	    <?php elseif ($_REQUEST['vtype'] == 'inactive'): ?><?php $this->assign('flt', "/inactive"); ?>
	    <?php elseif ($_REQUEST['vtype'] == 'private'): ?><?php $this->assign('flt', "/private"); ?>
	    <?php elseif ($_REQUEST['vtype'] == 'public'): ?><?php $this->assign('flt', "/public"); ?>
	    <?php elseif ($_REQUEST['vtype'] == 'ratings'): ?><?php $this->assign('flt', "/ratings"); ?>
	    <?php endif; ?>
	<?php elseif ($this->_tpl_vars['sbtn'] == 'baudio' || $this->_tpl_vars['sbtn'] == 'bimage' || $this->_tpl_vars['sbtn'] == 'bvideo'): ?>
	    <?php if ($_REQUEST['type'] == "" || $_REQUEST['type'] == 'recent'): ?><?php $this->assign('flt', "/recent"); ?>
	    <?php elseif ($_REQUEST['type'] == 'most_played'): ?><?php $this->assign('flt', "/most_played"); ?>
	    <?php elseif ($_REQUEST['type'] == 'most_viewed'): ?><?php $this->assign('flt', "/most_viewed"); ?>
	    <?php elseif ($_REQUEST['type'] == 'featured'): ?><?php $this->assign('flt', "/featured"); ?>
	    <?php elseif ($_REQUEST['type'] == 'most_commented'): ?><?php $this->assign('flt', "/most_commented"); ?>
	    <?php elseif ($_REQUEST['type'] == 'most_responded'): ?><?php $this->assign('flt', "/most_responded"); ?>
	    <?php elseif ($_REQUEST['type'] == 'top_favorites'): ?><?php $this->assign('flt', "/top_favorites"); ?>
	    <?php elseif ($_REQUEST['type'] == 'top_rated'): ?><?php $this->assign('flt', "/top_rated"); ?>
	    <?php elseif ($_REQUEST['type'] == 'random'): ?><?php $this->assign('flt', "/random"); ?>
	    <?php endif; ?>
	<?php endif; ?>
	    <table cellpadding=0 cellspacing=0 border=0>
		<tr>
		    <td><?php if ($this->_tpl_vars['sbtn'] == 'inbox' || $this->_tpl_vars['sbtn'] == 'outbox'): ?><?php echo $this->_tpl_vars['time_msg']; ?>
<?php elseif ($this->_tpl_vars['sbtn'] == 'mysubs'): ?><span class="gr"><?php echo $this->_tpl_vars['mysubs_txt1']; ?>
</span><?php elseif ($this->_tpl_vars['sbtn'] == 'bchan'): ?><span class="gr"><?php echo $this->_tpl_vars['ch_sortxt1']; ?>
</span><?php else: ?><?php echo $this->_tpl_vars['time_msgfiles']; ?>
<?php endif; ?></td>
		    <td class="pl5">
		    <?php if ($this->_tpl_vars['sbtn'] == 'mysubs'): ?>
			<table cellpadding="0" cellspacing="0" border=0 align="left">
			    <tr><td>
			<?php if ($this->_tpl_vars['enable_audio'] == '1'): ?><a <?php if ($_REQUEST['user'] == "" || $_REQUEST['pkey'] != ""): ?>href="javascript:void(0)"<?php else: ?>href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_subscriptions/<?php echo $_REQUEST['user']; ?>
/<?php if ($_REQUEST['ftype'] == 'video_favorites' || $_REQUEST['ftype'] == 'image_favorites' || $_REQUEST['ftype'] == 'audio_favorites'): ?><?php $this->assign('r_lnk', 'audio_favorites'); ?><?php elseif ($_REQUEST['ftype'] == 'audios'): ?><?php $this->assign('r_lnk', 'audios'); ?><?php else: ?><?php $this->assign('r_lnk', 'audios'); ?><?php endif; ?><?php echo $this->_tpl_vars['r_lnk']; ?>
"<?php endif; ?>><span class="<?php if ($_REQUEST['ftype'] == 'audios' || $_REQUEST['ftype'] == 'audio_favorites'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['audios_main']; ?>
</span></a><?php endif; ?>
			<?php if ($this->_tpl_vars['enable_images'] == '1'): ?><?php if ($this->_tpl_vars['enable_audio'] == '1'): ?><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?><a <?php if ($_REQUEST['user'] == "" || $_REQUEST['pkey'] != ""): ?>href="javascript:void(0)"<?php else: ?>href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_subscriptions/<?php echo $_REQUEST['user']; ?>
/<?php if ($_REQUEST['ftype'] == 'image_favorites' || $_REQUEST['ftype'] == 'audio_favorites' || $_REQUEST['ftype'] == 'video_favorites'): ?><?php $this->assign('r_lnk', 'image_favorites'); ?><?php elseif ($_REQUEST['ftype'] == 'images'): ?><?php $this->assign('r_lnk', 'images'); ?><?php else: ?><?php $this->assign('r_lnk', 'images'); ?><?php endif; ?><?php echo $this->_tpl_vars['r_lnk']; ?>
"<?php endif; ?>><span class="<?php if ($_REQUEST['ftype'] == 'images' || $_REQUEST['ftype'] == 'image_favorites'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['images_main']; ?>
</span></a><?php endif; ?>
			<?php if ($this->_tpl_vars['enable_videos'] == '1'): ?><?php if ($this->_tpl_vars['enable_images'] == '1' || $this->_tpl_vars['enable_audio'] == '1'): ?><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?><a <?php if ($_REQUEST['user'] == "" || $_REQUEST['pkey'] != ""): ?>href="javascript:void(0)"<?php else: ?>href="<?php echo $this->_tpl_vars['base_url']; ?>
/my_subscriptions/<?php echo $_REQUEST['user']; ?>
/<?php if ($_REQUEST['ftype'] == 'audio_favorites' || $_REQUEST['ftype'] == 'video_favorites' || $_REQUEST['ftype'] == 'image_favorites'): ?><?php $this->assign('r_lnk', 'video_favorites'); ?><?php elseif ($_REQUEST['ftype'] == 'videos'): ?><?php $this->assign('r_lnk', 'videos'); ?><?php else: ?><?php $this->assign('r_lnk', 'videos'); ?><?php endif; ?><?php echo $this->_tpl_vars['r_lnk']; ?>
"<?php endif; ?>><span class="<?php if ($_REQUEST['ftype'] == 'videos' || $_REQUEST['ftype'] == 'video_favorites'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['videos_main']; ?>
</span></a><?php endif; ?>
			    </td></tr>
			</table>
		    <?php elseif ($this->_tpl_vars['sbtn'] == 'bchan'): ?>
			<table cellpadding="0" cellspacing="0" border=0 align="left">
			    <tr>
				<td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/channels/ms<?php if ($_GET['chtype'] != ""): ?>/<?php echo $_GET['chtype']; ?>
<?php endif; ?>"><span class="<?php if ($_GET['sort'] == 'ms'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['plist_txt75']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<a href="<?php echo $this->_tpl_vars['base_url']; ?>
/channels/mv<?php if ($_GET['chtype'] != ""): ?>/<?php echo $_GET['chtype']; ?>
<?php endif; ?>"><span class="<?php if ($_GET['sort'] == "" || $_GET['sort'] == 'mv'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['mostviewed']; ?>
</span></a></td>
			    </tr>
			</table>
		    <?php else: ?>
			<a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php if ($this->_tpl_vars['guests_file_sorting'] == '0' && $_SESSION['UID'] == ""): ?>login?next=<?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/all_time<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['category'] != ""): ?>/<?php echo $_REQUEST['category']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/all_time<?php endif; ?>"><span class="<?php if ($_REQUEST['timesort'] == 'all_time' || $_REQUEST['timesort'] == ""): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_all']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php if ($this->_tpl_vars['guests_file_sorting'] == '0' && $_SESSION['UID'] == ""): ?>login?next=<?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/today<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['category'] != ""): ?>/<?php echo $_REQUEST['category']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/today<?php endif; ?>"><span class="<?php if ($_REQUEST['timesort'] == 'today'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_today']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php if ($this->_tpl_vars['guests_file_sorting'] == '0' && $_SESSION['UID'] == ""): ?>login?next=<?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/this_week<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['category'] != ""): ?>/<?php echo $_REQUEST['category']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/this_week<?php endif; ?>"><span class="<?php if ($_REQUEST['timesort'] == 'this_week'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_thisweek']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php if ($this->_tpl_vars['guests_file_sorting'] == '0' && $_SESSION['UID'] == ""): ?>login?next=<?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/last_week<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['category'] != ""): ?>/<?php echo $_REQUEST['category']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/last_week<?php endif; ?>"><span class="<?php if ($_REQUEST['timesort'] == 'last_week'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_lastweek']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php if ($this->_tpl_vars['guests_file_sorting'] == '0' && $_SESSION['UID'] == ""): ?>login?next=<?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/this_month<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['category'] != ""): ?>/<?php echo $_REQUEST['category']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/this_month<?php endif; ?>"><span class="<?php if ($_REQUEST['timesort'] == 'this_month'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_thismonth']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php if ($this->_tpl_vars['guests_file_sorting'] == '0' && $_SESSION['UID'] == ""): ?>login?next=<?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/last_month<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['category'] != ""): ?>/<?php echo $_REQUEST['category']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/last_month<?php endif; ?>"><span class="<?php if ($_REQUEST['timesort'] == 'last_month'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_lastmonth']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php if ($this->_tpl_vars['guests_file_sorting'] == '0' && $_SESSION['UID'] == ""): ?>login?next=<?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/this_year<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['category'] != ""): ?>/<?php echo $_REQUEST['category']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/this_year<?php endif; ?>"><span class="<?php if ($_REQUEST['timesort'] == 'this_year'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_thisyear']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php if ($this->_tpl_vars['guests_file_sorting'] == '0' && $_SESSION['UID'] == ""): ?>login?next=<?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/last_year<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['category'] != ""): ?>/<?php echo $_REQUEST['category']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/last_year<?php endif; ?>"><span class="<?php if ($_REQUEST['timesort'] == 'last_year'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_lastyear']; ?>
</span></a>
		    <?php endif; ?>
		    </td>
		</tr>
	    </table>