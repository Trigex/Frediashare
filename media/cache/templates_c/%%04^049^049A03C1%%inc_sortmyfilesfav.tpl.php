<?php /* Smarty version 2.6.26, created on 2009-11-10 15:21:41
         compiled from _inc/inc_sortmyfilesfav.tpl */ ?>
    <?php if ($this->_tpl_vars['sbtn'] == 'mpl'): ?><?php $this->assign('ft', "my_history/video"); ?><?php elseif ($this->_tpl_vars['sbtn'] == 'fav'): ?><?php $this->assign('ft', "my_favorites/video"); ?><?php elseif ($this->_tpl_vars['sbtn'] == 'mql'): ?><?php $this->assign('ft', "my_quicklist/video"); ?><?php elseif ($this->_tpl_vars['sbtn'] == 'mpl2'): ?><?php $this->assign('ft', "my_playlists/video"); ?><?php endif; ?>
	<?php if ($_REQUEST['user'] == ""): ?>
	    <?php if ($this->_tpl_vars['sbtn'] == 'mpl2'): ?>
                    <li><a href="<?php if ($_REQUEST['vplkey'] == ""): ?>javascript:void(0)<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/<?php echo $_REQUEST['vplkey']; ?>
/all<?php endif; ?>" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == "" || $_REQUEST['vtype'] == 'all'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortall']; ?>
</span></a></li>
                    <li><a href="<?php if ($_REQUEST['vplkey'] == ""): ?>javascript:void(0)<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/<?php echo $_REQUEST['vplkey']; ?>
/date<?php endif; ?>" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == 'date'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostrecent']; ?>
</span></a></li>
                    <li><a href="<?php if ($_REQUEST['vplkey'] == ""): ?>javascript:void(0)<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/<?php echo $_REQUEST['vplkey']; ?>
/featured<?php endif; ?>" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == 'featured'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortfeat']; ?>
</span></a></li>
                    <li><a href="<?php if ($_REQUEST['vplkey'] == ""): ?>javascript:void(0)<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/<?php echo $_REQUEST['vplkey']; ?>
/views<?php endif; ?>" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == 'views'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostviewed']; ?>
</span></a></li>
                    <?php if ($this->_tpl_vars['file_comments'] == '1'): ?><li><a href="<?php if ($_REQUEST['vplkey'] == ""): ?>javascript:void(0)<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/<?php echo $_REQUEST['vplkey']; ?>
/comments<?php endif; ?>" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == 'comments'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostcomm']; ?>
</span></a></li><?php endif; ?>
                    <?php if ($this->_tpl_vars['file_responses'] == '1'): ?><li><a href="<?php if ($_REQUEST['vplkey'] == ""): ?>javascript:void(0)<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/<?php echo $_REQUEST['vplkey']; ?>
/responses<?php endif; ?>" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == 'responses'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['fresp_txt28']; ?>
</span></a></li><?php endif; ?>
                    <?php if ($this->_tpl_vars['file_ratings'] == '1'): ?><li><a href="<?php if ($_REQUEST['vplkey'] == ""): ?>javascript:void(0)<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/<?php echo $_REQUEST['vplkey']; ?>
/ratings<?php endif; ?>" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == 'ratings'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['toprated']; ?>
</span></a></li><?php endif; ?>
                    <li><a href="<?php if ($_REQUEST['vplkey'] == ""): ?>javascript:void(0)<?php else: ?><?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/<?php echo $_REQUEST['vplkey']; ?>
/favorited<?php endif; ?>" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == 'favorited'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['topfav']; ?>
</span></a></li>
	    <?php else: ?>
                    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/all" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == "" || $_REQUEST['vtype'] == 'all'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortall']; ?>
</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/date" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == 'date'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostrecent']; ?>
</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/featured" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == 'featured'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortfeat']; ?>
</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/views" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == 'views'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostviewed']; ?>
</span></a></li>
                    <?php if ($this->_tpl_vars['file_comments'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/comments" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == 'comments'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostcomm']; ?>
</span></a></li><?php endif; ?>
                    <?php if ($this->_tpl_vars['file_responses'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/responses" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == 'responses'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['fresp_txt28']; ?>
</span></a></li><?php endif; ?>
                    <?php if ($this->_tpl_vars['file_ratings'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/ratings" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == 'ratings'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['toprated']; ?>
</span></a></li><?php endif; ?>
                    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft']; ?>
/favorited" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == 'favorited'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['topfav']; ?>
</span></a></li>
            <?php endif; ?>
        <?php else: ?>
    	    <?php $this->assign('ft1', 'user_favorites'); ?>
    	    <?php $this->assign('ft2', 'video'); ?>
                    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft1']; ?>
/<?php echo $_REQUEST['user']; ?>
/<?php echo $this->_tpl_vars['ft2']; ?>
/all" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == "" || $_REQUEST['vtype'] == 'all'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortall']; ?>
</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft1']; ?>
/<?php echo $_REQUEST['user']; ?>
/<?php echo $this->_tpl_vars['ft2']; ?>
/date" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == 'date'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostrecent']; ?>
</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft1']; ?>
/<?php echo $_REQUEST['user']; ?>
/<?php echo $this->_tpl_vars['ft2']; ?>
/featured" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == 'featured'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortfeat']; ?>
</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft1']; ?>
/<?php echo $_REQUEST['user']; ?>
/<?php echo $this->_tpl_vars['ft2']; ?>
/views" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == 'views'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostvieweda']; ?>
</span></a></li>
                    <?php if ($this->_tpl_vars['file_comments'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft1']; ?>
/<?php echo $_REQUEST['user']; ?>
/<?php echo $this->_tpl_vars['ft2']; ?>
/comments" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == 'comments'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['mostcomm']; ?>
</span></a></li><?php endif; ?>
                    <?php if ($this->_tpl_vars['file_responses'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft1']; ?>
/<?php echo $_REQUEST['user']; ?>
/<?php echo $this->_tpl_vars['ft2']; ?>
/responses" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == 'responses'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['fresp_txt28']; ?>
</span></a></li><?php endif; ?>
                    <?php if ($this->_tpl_vars['file_ratings'] == '1'): ?><li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft1']; ?>
/<?php echo $_REQUEST['user']; ?>
/<?php echo $this->_tpl_vars['ft2']; ?>
/ratings" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == 'ratings'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['toprated']; ?>
</span></a></li><?php endif; ?>
                    <li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/<?php echo $this->_tpl_vars['ft1']; ?>
/<?php echo $_REQUEST['user']; ?>
/<?php echo $this->_tpl_vars['ft2']; ?>
/favorited" onclick="HideContent('hidem6');"><span class="<?php if ($_REQUEST['vtype'] == 'favorited'): ?><?php endif; ?>"><?php echo $this->_tpl_vars['topfav']; ?>
</span></a></li>
        <?php endif; ?>