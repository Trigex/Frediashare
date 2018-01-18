<?php /* Smarty version 2.6.26, created on 2009-11-10 15:26:45
         compiled from administration/_inc/inc_timefilters.tpl */ ?>
	<?php if ($this->_tpl_vars['sbtn'] == 'alla'): ?><?php if ($_REQUEST['user'] == "" && $_REQUEST['categ'] == ""): ?><?php $this->assign('sect', 'audios'); ?><?php elseif ($_REQUEST['user'] != ""): ?><?php $this->assign('sect', 'audiou'); ?><?php elseif ($_REQUEST['categ'] != ""): ?><?php $this->assign('sect', 'audioc'); ?><?php endif; ?>
	<?php elseif ($this->_tpl_vars['sbtn'] == 'alli'): ?><?php if ($_REQUEST['user'] == "" && $_REQUEST['categ'] == ""): ?><?php $this->assign('sect', 'images'); ?><?php elseif ($_REQUEST['user'] != ""): ?><?php $this->assign('sect', 'imageu'); ?><?php elseif ($_REQUEST['categ'] != ""): ?><?php $this->assign('sect', 'imagec'); ?><?php endif; ?>
	<?php elseif ($this->_tpl_vars['sbtn'] == 'allv'): ?><?php if ($_REQUEST['user'] == "" && $_REQUEST['categ'] == ""): ?><?php $this->assign('sect', 'videos'); ?><?php elseif ($_REQUEST['user'] != ""): ?><?php $this->assign('sect', 'videou'); ?><?php elseif ($_REQUEST['categ'] != ""): ?><?php $this->assign('sect', 'videoc'); ?><?php endif; ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['sbtn'] == 'alla' || $this->_tpl_vars['sbtn'] == 'alli' || $this->_tpl_vars['sbtn'] == 'allv'): ?>
	    <?php if ($_REQUEST['type'] == "" || $_REQUEST['type'] == 'all'): ?><?php $this->assign('flt', "/all"); ?>
	    <?php elseif ($_REQUEST['type'] == 'active'): ?><?php $this->assign('flt', "/active"); ?>
	    <?php elseif ($_REQUEST['type'] == 'views'): ?><?php $this->assign('flt', "/views"); ?>
	    <?php elseif ($_REQUEST['type'] == 'auditions'): ?><?php $this->assign('flt', "/auditions"); ?>
	    <?php elseif ($_REQUEST['type'] == 'comments'): ?><?php $this->assign('flt', "/comments"); ?>
	    <?php elseif ($_REQUEST['type'] == 'date'): ?><?php $this->assign('flt', "/date"); ?>
	    <?php elseif ($_REQUEST['type'] == 'favorited'): ?><?php $this->assign('flt', "/favorited"); ?>
	    <?php elseif ($_REQUEST['type'] == 'featured'): ?><?php $this->assign('flt', "/featured"); ?>
	    <?php elseif ($_REQUEST['type'] == 'inactive'): ?><?php $this->assign('flt', "/inactive"); ?>
	    <?php elseif ($_REQUEST['type'] == 'inappropriate'): ?><?php $this->assign('flt', "/inappropriate"); ?>
	    <?php elseif ($_REQUEST['type'] == 'private'): ?><?php $this->assign('flt', "/private"); ?>
	    <?php elseif ($_REQUEST['type'] == 'public'): ?><?php $this->assign('flt', "/public"); ?>
	    <?php elseif ($_REQUEST['type'] == 'ratings'): ?><?php $this->assign('flt', "/ratings"); ?>
	    <?php elseif ($_REQUEST['type'] == 'recommended'): ?><?php $this->assign('flt', "/recommended"); ?>
	    <?php elseif ($_REQUEST['type'] == 'responses'): ?><?php $this->assign('flt', "/responses"); ?>
	    <?php endif; ?>
	<?php endif; ?>
	    <table cellpadding=1 cellspacing=0 border=0 width="100%">
		<tr>
		    <td><?php if ($this->_tpl_vars['sbtn'] == 'inbox' || $this->_tpl_vars['sbtn'] == 'outbox'): ?><?php echo $this->_tpl_vars['time_msg']; ?>
<?php else: ?><?php echo $this->_tpl_vars['time_msgfiles']; ?>
<?php endif; ?></td>
		    <td>
		    <?php if ($_REQUEST['type'] == 'recommended'): ?>
			<span class="<?php if ($_REQUEST['timesort'] == 'all_time' || $_REQUEST['timesort'] == ""): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_all']; ?>
</span><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<span class="<?php if ($_REQUEST['timesort'] == 'today'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_today']; ?>
</span><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<span class="<?php if ($_REQUEST['timesort'] == 'this_week'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_thisweek']; ?>
</span><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<span class="<?php if ($_REQUEST['timesort'] == 'last_week'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_lastweek']; ?>
</span><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<span class="<?php if ($_REQUEST['timesort'] == 'this_month'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_thismonth']; ?>
</span><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<span class="<?php if ($_REQUEST['timesort'] == 'last_month'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_lastmonth']; ?>
</span><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<span class="<?php if ($_REQUEST['timesort'] == 'this_year'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_thisyear']; ?>
</span><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<span class="<?php if ($_REQUEST['timesort'] == 'last_year'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_lastyear']; ?>
</span>
		    <?php else: ?>
			<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/all_time"><span class="<?php if ($_REQUEST['timesort'] == 'all_time' || $_REQUEST['timesort'] == ""): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_all']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/today"><span class="<?php if ($_REQUEST['timesort'] == 'today'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_today']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/this_week"><span class="<?php if ($_REQUEST['timesort'] == 'this_week'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_thisweek']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/last_week"><span class="<?php if ($_REQUEST['timesort'] == 'last_week'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_lastweek']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/this_month"><span class="<?php if ($_REQUEST['timesort'] == 'this_month'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_thismonth']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/last_month"><span class="<?php if ($_REQUEST['timesort'] == 'last_month'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_lastmonth']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/this_year"><span class="<?php if ($_REQUEST['timesort'] == 'this_year'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_thisyear']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

			<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php echo $this->_tpl_vars['sect']; ?>
<?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['flt']; ?>
/last_year"><span class="<?php if ($_REQUEST['timesort'] == 'last_year'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['time_lastyear']; ?>
</span></a>
		    <?php endif; ?>
		    </td>
		    <td width="250"><form id="setview"><input type="hidden" name="viewmode" value="<?php echo $_SESSION['viewmode']; ?>
"></form>
			<table width="100%" cellpadding=0 cellspacing=0>
			    <tr><td align="right"><a href="javascript:void(0)" onclick="ReverseViewMode(); ReverseContentDisplay('gridview'); ReverseContentDisplay('listview'); ReverseContentDisplay('gview'); ReverseContentDisplay('lview');"><span id="lview" <?php if ($_SESSION['viewmode'] == 'list'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><?php echo $this->_tpl_vars['files_listview']; ?>
</span><span id="gview" <?php if ($_SESSION['viewmode'] == 'grid'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><?php echo $this->_tpl_vars['files_gridview']; ?>
</span></a></td></tr>
			</table>
		    </td>
		</tr>
	    </table>