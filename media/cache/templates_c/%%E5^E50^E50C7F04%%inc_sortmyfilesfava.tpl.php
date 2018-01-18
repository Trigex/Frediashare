<?php /* Smarty version 2.6.26, created on 2009-11-10 15:21:40
         compiled from _inc/inc_sortmyfilesfava.tpl */ ?>
    <?php if ($this->_tpl_vars['sbtn'] == 'mpl'): ?><?php $this->assign('ft', "my_history/audio"); ?><?php elseif ($this->_tpl_vars['sbtn'] == 'fav'): ?><?php $this->assign('ft', "my_favorites/audio"); ?><?php elseif ($this->_tpl_vars['sbtn'] == 'mql'): ?><?php $this->assign('ft', "my_quicklist/audio"); ?><?php elseif ($this->_tpl_vars['sbtn'] == 'mpl2'): ?><?php $this->assign('ft', "my_playlists/audio"); ?><?php endif; ?>
	<?php if ($_REQUEST['user'] == ""): ?>
	    <?php if ($this->_tpl_vars['sbtn'] == 'mpl2'): ?>
                    <li><a href="<?php if ($_REQUEST['aplkey'] == ""): ?>javascript:void(0)<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/<?php echo $_REQUEST['aplkey']; ?>
/all<?php endif; ?>" onclick="HideContent('hidem4');"><span class="<?php if ($_REQUEST['atype'] == "" || $_REQUEST['atype'] == 'all'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortall']; ?>
</span></a></li>
                    <li><a href="<?php if ($_REQUEST['aplkey'] == ""): ?>javascript:void(0)<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/<?php echo $_REQUEST['aplkey']; ?>
/date<?php endif; ?>" onclick="HideContent('hidem4');"><span class="<?php if ($_REQUEST['atype'] == 'date'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostrecent']; ?>
</span></a></li>
                    <li><a href="<?php if ($_REQUEST['aplkey'] == ""): ?>javascript:void(0)<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/<?php echo $_REQUEST['aplkey']; ?>
/featured<?php endif; ?>" onclick="HideContent('hidem4');"><span class="<?php if ($_REQUEST['atype'] == 'featured'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortfeat']; ?>
</span></a></li>
                    <li><a href="<?php if ($_REQUEST['aplkey'] == ""): ?>javascript:void(0)<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/<?php echo $_REQUEST['aplkey']; ?>
/views<?php endif; ?>" onclick="HideContent('hidem4');"><span class="<?php if ($_REQUEST['atype'] == 'views'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostvieweda']; ?>
</span></a></li>
                    <?php if ($this->_tpl_vars['file_comments'] == '1'): ?><li onclick="HideContent('hidem4');"><a href="<?php if ($_REQUEST['aplkey'] == ""): ?>javascript:void(0)<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/<?php echo $_REQUEST['aplkey']; ?>
/comments<?php endif; ?>"><span class="<?php if ($_REQUEST['atype'] == 'comments'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostcomm']; ?>
</span></a></li><?php endif; ?>
                    <?php if ($this->_tpl_vars['file_responses'] == '1'): ?><li onclick="HideContent('hidem4');"><a href="<?php if ($_REQUEST['aplkey'] == ""): ?>javascript:void(0)<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/<?php echo $_REQUEST['aplkey']; ?>
/responses<?php endif; ?>"><span class="<?php if ($_REQUEST['atype'] == 'responses'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['fresp_txt28']; ?>
</span></a></li><?php endif; ?>
                    <?php if ($this->_tpl_vars['file_ratings'] == '1'): ?><li onclick="HideContent('hidem4');"><a href="<?php if ($_REQUEST['aplkey'] == ""): ?>javascript:void(0)<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/<?php echo $_REQUEST['aplkey']; ?>
/ratings<?php endif; ?>"><span class="<?php if ($_REQUEST['atype'] == 'ratings'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['toprated']; ?>
</span></a></li><?php endif; ?>
                    <li><a href="<?php if ($_REQUEST['aplkey'] == ""): ?>javascript:void(0)<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/<?php echo $_REQUEST['aplkey']; ?>
/favorited<?php endif; ?>" onclick="HideContent('hidem4');"><span class="<?php if ($_REQUEST['atype'] == 'favorited'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['topfav']; ?>
</span></a></li>
	    <?php else: ?>
                    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/all" onclick="HideContent('hidem4');"><span class="<?php if ($_REQUEST['atype'] == "" || $_REQUEST['atype'] == 'all'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortall']; ?>
</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/date" onclick="HideContent('hidem4');"><span class="<?php if ($_REQUEST['atype'] == 'date'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostrecent']; ?>
</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/featured" onclick="HideContent('hidem4');"><span class="<?php if ($_REQUEST['atype'] == 'featured'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortfeat']; ?>
</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/views" onclick="HideContent('hidem4');"><span class="<?php if ($_REQUEST['atype'] == 'views'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostvieweda']; ?>
</span></a></li>
                    <?php if ($this->_tpl_vars['file_comments'] == '1'): ?><li onclick="HideContent('hidem4');"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/comments"><span class="<?php if ($_REQUEST['atype'] == 'comments'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostcomm']; ?>
</span></a></li><?php endif; ?>
                    <?php if ($this->_tpl_vars['file_responses'] == '1'): ?><li onclick="HideContent('hidem4');"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/responses"><span class="<?php if ($_REQUEST['atype'] == 'responses'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['fresp_txt28']; ?>
</span></a></li><?php endif; ?>
                    <?php if ($this->_tpl_vars['file_ratings'] == '1'): ?><li onclick="HideContent('hidem4');"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/ratings"><span class="<?php if ($_REQUEST['atype'] == 'ratings'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['toprated']; ?>
</span></a></li><?php endif; ?>
                    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/favorited" onclick="HideContent('hidem4');"><span class="<?php if ($_REQUEST['atype'] == 'favorited'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['topfav']; ?>
</span></a></li>
            <?php endif; ?>
        <?php else: ?>
    	    <?php $this->assign('ft1', 'user_favorites'); ?>
	    <?php $this->assign('ft2', 'audio'); ?>
        	    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft1']; ?>
/<?php echo $_REQUEST['user']; ?>
/<?php echo $this->_tpl_vars['ft2']; ?>
/all" onclick="HideContent('hidem4');"><span class="<?php if ($_REQUEST['atype'] == "" || $_REQUEST['atype'] == 'all'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortall']; ?>
</span></a></li>
        	    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft1']; ?>
/<?php echo $_REQUEST['user']; ?>
/<?php echo $this->_tpl_vars['ft2']; ?>
/date" onclick="HideContent('hidem4');"><span class="<?php if ($_REQUEST['atype'] == 'date'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostrecent']; ?>
</span></a></li>
        	    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft1']; ?>
/<?php echo $_REQUEST['user']; ?>
/<?php echo $this->_tpl_vars['ft2']; ?>
/featured" onclick="HideContent('hidem4');"><span class="<?php if ($_REQUEST['atype'] == 'featured'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortfeat']; ?>
</span></a></li>
        	    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft1']; ?>
/<?php echo $_REQUEST['user']; ?>
/<?php echo $this->_tpl_vars['ft2']; ?>
/views" onclick="HideContent('hidem4');"><span class="<?php if ($_REQUEST['atype'] == 'views'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostvieweda']; ?>
</span></a></li>
        	    <?php if ($this->_tpl_vars['file_comments'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft1']; ?>
/<?php echo $_REQUEST['user']; ?>
/<?php echo $this->_tpl_vars['ft2']; ?>
/comments" onclick="HideContent('hidem4');"><span class="<?php if ($_REQUEST['atype'] == 'comments'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostcomm']; ?>
</span></a></li><?php endif; ?>
        	    <?php if ($this->_tpl_vars['file_responses'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft1']; ?>
/<?php echo $_REQUEST['user']; ?>
/<?php echo $this->_tpl_vars['ft2']; ?>
/responses" onclick="HideContent('hidem4');"><span class="<?php if ($_REQUEST['atype'] == 'responses'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['fresp_txt28']; ?>
</span></a></li><?php endif; ?>
        	    <?php if ($this->_tpl_vars['file_ratings'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft1']; ?>
/<?php echo $_REQUEST['user']; ?>
/<?php echo $this->_tpl_vars['ft2']; ?>
/ratings" onclick="HideContent('hidem4');"><span class="<?php if ($_REQUEST['atype'] == 'ratings'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['toprated']; ?>
</span></a></li><?php endif; ?>
        	    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft1']; ?>
/<?php echo $_REQUEST['user']; ?>
/<?php echo $this->_tpl_vars['ft2']; ?>
/favorited" onclick="HideContent('hidem4');"><span class="<?php if ($_REQUEST['atype'] == 'favorited'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['topfav']; ?>
</span></a></li>
        <?php endif; ?>