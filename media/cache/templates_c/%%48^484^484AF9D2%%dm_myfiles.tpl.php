<?php /* Smarty version 2.6.26, created on 2009-11-10 15:41:22
         compiled from _inc/dropmenu/dm_myfiles.tpl */ ?>
	    <?php if ($this->_tpl_vars['sbtn'] == 'myaud'): ?><?php $this->assign('ft', 'my_audios'); ?><?php elseif ($this->_tpl_vars['sbtn'] == 'myimg'): ?><?php $this->assign('ft', 'my_images'); ?><?php elseif ($this->_tpl_vars['sbtn'] == 'myvid'): ?><?php $this->assign('ft', 'my_videos'); ?><?php endif; ?>
	    <?php if ($_REQUEST['timesort'] != ""): ?><?php $this->assign('ts', $_REQUEST['timesort']); ?><?php $this->assign('sla', "/"); ?><?php endif; ?>
	    <table cellpadding="0" cellspacing="0" border=0 class="width950" align="center">
		<tr>
		    <td>
			<table cellpadding="0" cellspacing="0" border=0>
			    <tr>
				<td><span style="font-size: 14px;"><?php if ($_REQUEST['user'] != ""): ?><?php echo $_REQUEST['user']; ?>
's&nbsp;<?php endif; ?><?php if ($this->_tpl_vars['sbtn'] == 'myaud'): ?><?php echo $this->_tpl_vars['myaudio']; ?>
<?php elseif ($this->_tpl_vars['sbtn'] == 'myimg'): ?><?php echo $this->_tpl_vars['myimage']; ?>
<?php elseif ($this->_tpl_vars['sbtn'] == 'myvid'): ?><?php echo $this->_tpl_vars['myvideo']; ?>
<?php elseif ($this->_tpl_vars['sbtn'] == 'baudio'): ?><?php echo $this->_tpl_vars['snavcategaudio']; ?>
<?php elseif ($this->_tpl_vars['sbtn'] == 'bimage'): ?><?php echo $this->_tpl_vars['snavcategimage']; ?>
<?php elseif ($this->_tpl_vars['sbtn'] == 'bvideo'): ?><?php echo $this->_tpl_vars['snavcategvideo']; ?>
<?php endif; ?>&nbsp;&nbsp;/&nbsp;&nbsp;</span></td>
				<td>
				<?php if ($this->_tpl_vars['sbtn'] == 'myaud' || $this->_tpl_vars['sbtn'] == 'myimg' || $this->_tpl_vars['sbtn'] == 'myvid'): ?>
				    <ul id="<?php if ($this->_tpl_vars['site_theme'] == 'metube'): ?>Menu_tube2<?php else: ?>Menu3<?php endif; ?>" class="<?php if ($this->_tpl_vars['site_theme'] == 'metube'): ?>MM_tube<?php else: ?>MM2<?php endif; ?>" style="padding: 0px; margin: 0px; line-height: 15px;">
					<li>
					    <table cellpadding="0" cellspacing="0">
						<tr>
						    <td>
							<a href="javascript:void(0)"><span style="font-size: 14px;"><?php if ($_REQUEST['vtype'] == 'all' || $_REQUEST['vtype'] == ""): ?><?php echo $this->_tpl_vars['adm_sortall']; ?>
<?php elseif ($_REQUEST['vtype'] == 'active'): ?><?php echo $this->_tpl_vars['adm_sortactive']; ?>
<?php elseif ($_REQUEST['vtype'] == 'inactive'): ?><?php echo $this->_tpl_vars['adm_sortinactive']; ?>
<?php elseif ($_REQUEST['vtype'] == 'public'): ?><?php echo $this->_tpl_vars['adm_sortpub']; ?>
<?php elseif ($_REQUEST['vtype'] == 'private'): ?><?php echo $this->_tpl_vars['adm_sortpriv']; ?>
<?php elseif ($_REQUEST['vtype'] == 'featured'): ?><?php echo $this->_tpl_vars['adm_sortfeat']; ?>
<?php elseif ($_REQUEST['vtype'] == 'date'): ?><?php echo $this->_tpl_vars['search_filter3']; ?>
<?php elseif ($_REQUEST['vtype'] == 'auditions'): ?><?php echo $this->_tpl_vars['mostvieweda']; ?>
<?php elseif ($_REQUEST['vtype'] == 'views'): ?><?php echo $this->_tpl_vars['mostviewed']; ?>
<?php elseif ($_REQUEST['vtype'] == 'comments'): ?><?php echo $this->_tpl_vars['mostcomm']; ?>
<?php elseif ($_REQUEST['vtype'] == 'responses'): ?><?php echo $this->_tpl_vars['fresp_txt28']; ?>
<?php elseif ($_REQUEST['vtype'] == 'ratings'): ?><?php echo $this->_tpl_vars['toprated']; ?>
<?php elseif ($_REQUEST['vtype'] == 'favorited'): ?><?php echo $this->_tpl_vars['topfav']; ?>
<?php endif; ?>&nbsp;</span></a>
						    </td>
						</tr>
					    </table>
					    <ul id="hidem3">
						<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/all<?php echo $this->_tpl_vars['sla']; ?>
<?php echo $this->_tpl_vars['ts']; ?>
" onclick="HideContent('hidem3');"><span class="<?php if ($_REQUEST['vtype'] == 'all' || $_REQUEST['vtype'] == ""): ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortall']; ?>
</span></a></li>
						<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/active<?php echo $this->_tpl_vars['sla']; ?>
<?php echo $this->_tpl_vars['ts']; ?>
" onclick="HideContent('hidem3');"><span class="<?php if ($_REQUEST['vtype'] == 'active'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortactive']; ?>
</span></a></li>
						<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/inactive<?php echo $this->_tpl_vars['sla']; ?>
<?php echo $this->_tpl_vars['ts']; ?>
" onclick="HideContent('hidem3');"><span class="<?php if ($_REQUEST['vtype'] == 'inactive'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortinactive']; ?>
</span></a></li>
						<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/public<?php echo $this->_tpl_vars['sla']; ?>
<?php echo $this->_tpl_vars['ts']; ?>
" onclick="HideContent('hidem3');"><span class="<?php if ($_REQUEST['vtype'] == 'public'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortpub']; ?>
</span></a></li>
						<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/private<?php echo $this->_tpl_vars['sla']; ?>
<?php echo $this->_tpl_vars['ts']; ?>
" onclick="HideContent('hidem3');"><span class="<?php if ($_REQUEST['vtype'] == 'private'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortpriv']; ?>
</span></a></li>
						<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/featured<?php echo $this->_tpl_vars['sla']; ?>
<?php echo $this->_tpl_vars['ts']; ?>
" onclick="HideContent('hidem3');"><span class="<?php if ($_REQUEST['vtype'] == 'featured'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortfeat']; ?>
</span></a></li>
						<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/date<?php echo $this->_tpl_vars['sla']; ?>
<?php echo $this->_tpl_vars['ts']; ?>
" onclick="HideContent('hidem3');"><span class="<?php if ($_REQUEST['vtype'] == 'date'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['search_filter3']; ?>
</span></a></li>
						<li><?php if ($this->_tpl_vars['sbtn'] == 'myaud'): ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/auditions<?php echo $this->_tpl_vars['sla']; ?>
<?php echo $this->_tpl_vars['ts']; ?>
" onclick="HideContent('hidem3');"><span class="<?php if ($_REQUEST['vtype'] == 'auditions'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostvieweda']; ?>
</span></a><?php else: ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/views<?php echo $this->_tpl_vars['sla']; ?>
<?php echo $this->_tpl_vars['ts']; ?>
" onclick="HideContent('hidem3');"><span class="<?php if ($_REQUEST['vtype'] == 'views'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostviewed']; ?>
</span></a><?php endif; ?></li>
						<?php if ($this->_tpl_vars['file_comments'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/comments<?php echo $this->_tpl_vars['sla']; ?>
<?php echo $this->_tpl_vars['ts']; ?>
" onclick="HideContent('hidem3');"><span class="<?php if ($_REQUEST['vtype'] == 'comments'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostcomm']; ?>
</span></a></li><?php endif; ?>
						<?php if ($this->_tpl_vars['file_responses'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/responses<?php echo $this->_tpl_vars['sla']; ?>
<?php echo $this->_tpl_vars['ts']; ?>
" onclick="HideContent('hidem3');"><span class="<?php if ($_REQUEST['vtype'] == 'responses'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['fresp_txt28']; ?>
</span></a></li><?php endif; ?>
						<?php if ($this->_tpl_vars['file_ratings'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/ratings<?php echo $this->_tpl_vars['sla']; ?>
<?php echo $this->_tpl_vars['ts']; ?>
" onclick="HideContent('hidem3');"><span class="<?php if ($_REQUEST['vtype'] == 'ratings'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['toprated']; ?>
</span></a></li><?php endif; ?>
						<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/favorited<?php echo $this->_tpl_vars['sla']; ?>
<?php echo $this->_tpl_vars['ts']; ?>
" onclick="HideContent('hidem3');"><span class="<?php if ($_REQUEST['vtype'] == 'favorited'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['topfav']; ?>
</span></a></li>
					    </ul>
					</li>
				    </ul>
				<?php else: ?>
				    <ul id="<?php if ($this->_tpl_vars['site_theme'] == 'metube'): ?>Menu_tube2<?php else: ?>Menu3<?php endif; ?>" class="<?php if ($this->_tpl_vars['site_theme'] == 'metube'): ?>MM_tube<?php else: ?>MM2<?php endif; ?>" style="padding: 0px; margin: 0px; line-height: 15px;">
					<li>
					    <table cellpadding="0" cellspacing="0">
						<tr>
						    <td>
							<a href="javascript:void(0)"><span style="font-size: 14px;">
							<?php if ($this->_tpl_vars['type'] == "" || $this->_tpl_vars['type'] == 'mr'): ?><?php echo $this->_tpl_vars['videos_mr']; ?>

							<?php elseif ($this->_tpl_vars['type'] == 'mv'): ?><?php echo $this->_tpl_vars['videos_mp']; ?>

							<?php elseif ($this->_tpl_vars['type'] == 'rf'): ?><?php echo $this->_tpl_vars['videos_rf']; ?>

							<?php elseif ($this->_tpl_vars['type'] == 'md'): ?><?php echo $this->_tpl_vars['videos_md']; ?>

							<?php elseif ($this->_tpl_vars['type'] == 'mre'): ?><?php echo $this->_tpl_vars['fresp_txt28']; ?>

							<?php elseif ($this->_tpl_vars['type'] == 'tf'): ?><?php echo $this->_tpl_vars['videos_tf']; ?>

							<?php elseif ($this->_tpl_vars['type'] == 'tr'): ?><?php echo $this->_tpl_vars['videos_tr']; ?>

							<?php elseif ($this->_tpl_vars['type'] == 'ra'): ?><?php echo $this->_tpl_vars['videos_rnd']; ?>

							<?php endif; ?>&nbsp;</span></a>
						    </td>
						</tr>
					    </table>
					    <?php if ($_SESSION['USERNAME'] != "" || $this->_tpl_vars['guests_file_sorting'] == '1'): ?>
					    <ul id="hidem3">
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/dropmenu/dm_incfiles.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					    </ul>
					    <?php endif; ?>
					</li>
				    </ul>
				<?php endif; ?>
				</td>
			    <tr>
			</table>
		    </td>
		    <td align="right"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inc/inc_fileth.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
		</tr>
	    </table>