<?php /* Smarty version 2.6.26, created on 2009-11-10 15:41:22
         compiled from _inc/dropmenu/dm_incfiles.tpl */ ?>
				<?php if ($_SESSION['USERNAME'] != "" || $this->_tpl_vars['guests_file_sorting'] == '1'): ?>
				    <?php if ($this->_tpl_vars['btn'] == 'bvideo' || $this->_tpl_vars['btn'] == 'baudio' || $this->_tpl_vars['btn'] == 'bimage'): ?>
					<?php if ($this->_tpl_vars['btn'] == 'bvideo'): ?><?php $this->assign('s1', "categories/video"); ?><?php $this->assign('s2', 'videos'); ?><?php $this->assign('s3', 'user_videos'); ?>
					    <?php elseif ($this->_tpl_vars['btn'] == 'bimage'): ?><?php $this->assign('s1', "categories/image"); ?><?php $this->assign('s2', 'images'); ?><?php $this->assign('s3', 'user_images'); ?>
					    <?php elseif ($this->_tpl_vars['btn'] == 'baudio'): ?><?php $this->assign('s1', "categories/audio"); ?><?php $this->assign('s2', 'audios'); ?><?php $this->assign('s3', 'user_audios'); ?>
					<?php endif; ?>
					
					<?php if ($_REQUEST['user'] == ""): ?>
					    <?php if ($_REQUEST['category'] != ""): ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s1']; ?>
/<?php echo $_REQUEST['category']; ?>
/recent"><span class="<?php if ($this->_tpl_vars['type'] == 'mr'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostrecent']; ?>
</span></a></li>
					    <?php else: ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s2']; ?>
/recent"><span class="<?php if ($this->_tpl_vars['type'] == 'mr'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostrecent']; ?>
</span></a></li>
					    <?php endif; ?>
					<?php else: ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s3']; ?>
/<?php echo $_REQUEST['user']; ?>
/recent"><span class="<?php if ($this->_tpl_vars['type'] == 'mr'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostrecent']; ?>
</span></a></li>
					<?php endif; ?>

					<?php if ($_REQUEST['user'] == ""): ?>
					    <?php if ($_REQUEST['category'] != ""): ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s1']; ?>
/<?php echo $_REQUEST['category']; ?>
/featured"><span class="<?php if ($this->_tpl_vars['type'] == 'rf'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['recfeatured']; ?>
</span></a></li>
					    <?php else: ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s2']; ?>
/featured"><span class="<?php if ($this->_tpl_vars['type'] == 'rf'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['recfeatured']; ?>
</span></a></li>
					    <?php endif; ?>
					<?php else: ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s3']; ?>
/<?php echo $_REQUEST['user']; ?>
/featured"><span class="<?php if ($this->_tpl_vars['type'] == 'rf'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['recfeatured']; ?>
</span></a></li>
					<?php endif; ?>

					<?php if ($_REQUEST['user'] == ""): ?>
					    <?php if ($_REQUEST['category'] != ""): ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s1']; ?>
/<?php echo $_REQUEST['category']; ?>
/most_viewed"><span class="<?php if ($this->_tpl_vars['type'] == 'mv'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostviewed']; ?>
</span></a></li>
					    <?php else: ?>
					    <?php if ($this->_tpl_vars['sbtn'] != 'baudio'): ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s2']; ?>
/most_viewed"><span class="<?php if ($this->_tpl_vars['type'] == 'mv'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostviewed']; ?>
</span></a></li>
					    <?php elseif ($this->_tpl_vars['sbtn'] == 'baudio'): ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s2']; ?>
/most_played"><span class="<?php if ($this->_tpl_vars['type'] == 'mv'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostvieweda']; ?>
</span></a></li>
					    <?php endif; ?>
					    <?php endif; ?>
					<?php else: ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s3']; ?>
/<?php echo $_REQUEST['user']; ?>
/most_viewed"><span class="<?php if ($this->_tpl_vars['type'] == 'mv'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostviewed']; ?>
</span></a></li>
					<?php endif; ?>
					
					
				<?php if ($this->_tpl_vars['file_comments'] == '1'): ?>
					<?php if ($_REQUEST['user'] == ""): ?>
					    <?php if ($_REQUEST['category'] != ""): ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s1']; ?>
/<?php echo $_REQUEST['category']; ?>
/most_commented"><span class="<?php if ($this->_tpl_vars['type'] == 'md'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostcomm']; ?>
</span></a></li>
					    <?php else: ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s2']; ?>
/most_commented"><span class="<?php if ($this->_tpl_vars['type'] == 'md'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostcomm']; ?>
</span></a></li>
					    <?php endif; ?>
					<?php else: ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s3']; ?>
/<?php echo $_REQUEST['user']; ?>
/most_commented"><span class="<?php if ($this->_tpl_vars['type'] == 'md'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostcomm']; ?>
</span></a></li>					
					<?php endif; ?>
				<?php endif; ?>
				
				<?php if ($this->_tpl_vars['file_responses'] == '1'): ?>
					<?php if ($_REQUEST['user'] == ""): ?>
					    <?php if ($_REQUEST['category'] != ""): ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s1']; ?>
/<?php echo $_REQUEST['category']; ?>
/most_responded"><span class="<?php if ($this->_tpl_vars['type'] == 'mre'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['fresp_txt28']; ?>
</span></a></li>
					    <?php else: ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s2']; ?>
/most_responded"><span class="<?php if ($this->_tpl_vars['type'] == 'mre'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['fresp_txt28']; ?>
</span></a></li>
					    <?php endif; ?>
					<?php else: ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s3']; ?>
/<?php echo $_REQUEST['user']; ?>
/most_responded"><span class="<?php if ($this->_tpl_vars['type'] == 'mre'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['fresp_txt28']; ?>
</span></a></li>					
					<?php endif; ?>
				<?php endif; ?>
				
				<?php if ($this->_tpl_vars['file_ratings'] == '1'): ?>
					<?php if ($_REQUEST['user'] == ""): ?>
					    <?php if ($_REQUEST['category'] != ""): ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s1']; ?>
/<?php echo $_REQUEST['category']; ?>
/top_rated"><span class="<?php if ($this->_tpl_vars['type'] == 'tr'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['toprated']; ?>
</span></a></li>
					    <?php else: ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s2']; ?>
/top_rated"><span class="<?php if ($this->_tpl_vars['type'] == 'tr'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['toprated']; ?>
</span></a></li>
					    <?php endif; ?>
					<?php else: ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s3']; ?>
/<?php echo $_REQUEST['user']; ?>
/top_rated"><span class="<?php if ($this->_tpl_vars['type'] == 'tr'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['toprated']; ?>
</span></a></li>
					<?php endif; ?>
				<?php endif; ?>
				
					<?php if ($_REQUEST['user'] == ""): ?>
					    <?php if ($_REQUEST['category'] != ""): ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s1']; ?>
/<?php echo $_REQUEST['category']; ?>
/top_favorites"><span class="<?php if ($this->_tpl_vars['type'] == 'tf'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['topfav']; ?>
</span></a></li>
					    <?php else: ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s2']; ?>
/top_favorites"><span class="<?php if ($this->_tpl_vars['type'] == 'tf'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['topfav']; ?>
</span></a></li>
					    <?php endif; ?>
					<?php else: ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s3']; ?>
/<?php echo $_REQUEST['user']; ?>
/top_favorites"><span class="<?php if ($this->_tpl_vars['type'] == 'tf'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['topfav']; ?>
</span></a></li>
					<?php endif; ?>
					
					<?php if ($_REQUEST['user'] == ""): ?>
					    <?php if ($_REQUEST['category'] != ""): ?> 
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s1']; ?>
/<?php echo $_REQUEST['category']; ?>
/random"><span class="<?php if ($this->_tpl_vars['type'] == 'ra'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['random']; ?>
</a></span></li>
					    <?php else: ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s2']; ?>
/random"><span class="<?php if ($this->_tpl_vars['type'] == 'ra'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['random']; ?>
</span></a></li>
					    <?php endif; ?>
					<?php else: ?>
				<li><a onclick="HideContent('hidem3');" href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['s3']; ?>
/<?php echo $_REQUEST['user']; ?>
/random"><span class="<?php if ($this->_tpl_vars['type'] == 'ra'): ?><?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['random']; ?>
</span></a></li>
					<?php endif; ?>
				    <?php endif; ?>

				    <?php endif; ?>
				    