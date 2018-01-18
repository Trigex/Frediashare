<?php /* Smarty version 2.6.26, created on 2009-11-10 15:26:45
         compiled from administration/_inc/inc_filefilters.tpl */ ?>
		<?php if ($this->_tpl_vars['sbtn'] == 'alla'): ?><?php $this->assign('sectc', 'audioc'); ?><?php $this->assign('sectu', 'audiou'); ?><?php $this->assign('sect', 'audios'); ?>
		<?php elseif ($this->_tpl_vars['sbtn'] == 'alli'): ?><?php $this->assign('sectc', 'imagec'); ?><?php $this->assign('sectu', 'imageu'); ?><?php $this->assign('sect', 'images'); ?>
		<?php elseif ($this->_tpl_vars['sbtn'] == 'allv'): ?><?php $this->assign('sectc', 'videoc'); ?><?php $this->assign('sectu', 'videou'); ?><?php $this->assign('sect', 'videos'); ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['sbtn'] == 'alla' || $this->_tpl_vars['sbtn'] == 'alli' || $this->_tpl_vars['sbtn'] == 'allv'): ?>
		    <td colspan=2 class="pad_borderbottom"><span class="gr"><?php echo $this->_tpl_vars['adm_sorttxt']; ?>
</span>
        		<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php if ($_REQUEST['categ'] != ""): ?><?php echo $this->_tpl_vars['sectc']; ?>
<?php elseif ($_REQUEST['user'] != ""): ?><?php echo $this->_tpl_vars['sectu']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?>/all<?php if ($_REQUEST['timesort'] == ""): ?>/all_time<?php else: ?>/<?php echo $_REQUEST['timesort']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['type'] == 'all' || $_REQUEST['type'] == ""): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortall']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

        		<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php if ($_REQUEST['categ'] != ""): ?><?php echo $this->_tpl_vars['sectc']; ?>
<?php elseif ($_REQUEST['user'] != ""): ?><?php echo $this->_tpl_vars['sectu']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?>/active<?php if ($_REQUEST['timesort'] == ""): ?>/all_time<?php else: ?>/<?php echo $_REQUEST['timesort']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['type'] == 'active'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortactive']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

        		<?php if ($this->_tpl_vars['btn'] == 'adm_audio'): ?><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php if ($_REQUEST['categ'] != ""): ?><?php echo $this->_tpl_vars['sectc']; ?>
<?php elseif ($_REQUEST['user'] != ""): ?><?php echo $this->_tpl_vars['sectu']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?>/auditions<?php if ($_REQUEST['timesort'] == ""): ?>/all_time<?php else: ?>/<?php echo $_REQUEST['timesort']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['type'] == 'auditions'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortauditions']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?>
        		<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php if ($_REQUEST['categ'] != ""): ?><?php echo $this->_tpl_vars['sectc']; ?>
<?php elseif ($_REQUEST['user'] != ""): ?><?php echo $this->_tpl_vars['sectu']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?>/comments<?php if ($_REQUEST['timesort'] == ""): ?>/all_time<?php else: ?>/<?php echo $_REQUEST['timesort']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['type'] == 'comments'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortcomm']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

        		<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php if ($_REQUEST['categ'] != ""): ?><?php echo $this->_tpl_vars['sectc']; ?>
<?php elseif ($_REQUEST['user'] != ""): ?><?php echo $this->_tpl_vars['sectu']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?>/date<?php if ($_REQUEST['timesort'] == ""): ?>/all_time<?php else: ?>/<?php echo $_REQUEST['timesort']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['type'] == 'date'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortdate']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

        		<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php if ($_REQUEST['categ'] != ""): ?><?php echo $this->_tpl_vars['sectc']; ?>
<?php elseif ($_REQUEST['user'] != ""): ?><?php echo $this->_tpl_vars['sectu']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?>/favorited<?php if ($_REQUEST['timesort'] == ""): ?>/all_time<?php else: ?>/<?php echo $_REQUEST['timesort']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['type'] == 'favorited'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortfav']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

        		<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php if ($_REQUEST['categ'] != ""): ?><?php echo $this->_tpl_vars['sectc']; ?>
<?php elseif ($_REQUEST['user'] != ""): ?><?php echo $this->_tpl_vars['sectu']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?>/featured<?php if ($_REQUEST['timesort'] == ""): ?>/all_time<?php else: ?>/<?php echo $_REQUEST['timesort']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['type'] == 'featured'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortfeat']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

        		<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php if ($_REQUEST['categ'] != ""): ?><?php echo $this->_tpl_vars['sectc']; ?>
<?php elseif ($_REQUEST['user'] != ""): ?><?php echo $this->_tpl_vars['sectu']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?>/inactive<?php if ($_REQUEST['timesort'] == ""): ?>/all_time<?php else: ?>/<?php echo $_REQUEST['timesort']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['type'] == 'inactive'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortinactive']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

        		<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php if ($_REQUEST['categ'] != ""): ?><?php echo $this->_tpl_vars['sectc']; ?>
<?php elseif ($_REQUEST['user'] != ""): ?><?php echo $this->_tpl_vars['sectu']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?>/inappropriate<?php if ($_REQUEST['timesort'] == ""): ?>/all_time<?php else: ?>/<?php echo $_REQUEST['timesort']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['type'] == 'inappropriate'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortinapp']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

        		<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php if ($_REQUEST['categ'] != ""): ?><?php echo $this->_tpl_vars['sectc']; ?>
<?php elseif ($_REQUEST['user'] != ""): ?><?php echo $this->_tpl_vars['sectu']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?>/private<?php if ($_REQUEST['timesort'] == ""): ?>/all_time<?php else: ?>/<?php echo $_REQUEST['timesort']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['type'] == 'private'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortpriv']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

        		<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php if ($_REQUEST['categ'] != ""): ?><?php echo $this->_tpl_vars['sectc']; ?>
<?php elseif ($_REQUEST['user'] != ""): ?><?php echo $this->_tpl_vars['sectu']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?>/public<?php if ($_REQUEST['timesort'] == ""): ?>/all_time<?php else: ?>/<?php echo $_REQUEST['timesort']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['type'] == 'public'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortpub']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

        		<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php if ($_REQUEST['categ'] != ""): ?><?php echo $this->_tpl_vars['sectc']; ?>
<?php elseif ($_REQUEST['user'] != ""): ?><?php echo $this->_tpl_vars['sectu']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?>/ratings<?php if ($_REQUEST['timesort'] == ""): ?>/all_time<?php else: ?>/<?php echo $_REQUEST['timesort']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['type'] == 'ratings'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortrate']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

        		<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php if ($_REQUEST['categ'] != ""): ?><?php echo $this->_tpl_vars['sectc']; ?>
<?php elseif ($_REQUEST['user'] != ""): ?><?php echo $this->_tpl_vars['sectu']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?>/responses<?php if ($_REQUEST['timesort'] == ""): ?>/all_time<?php else: ?>/<?php echo $_REQUEST['timesort']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['type'] == 'responses'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['fresp_txt30']; ?>
</span></a>
        		<?php if ($this->_tpl_vars['btn'] == 'adm_video'): ?><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php if ($_REQUEST['categ'] != ""): ?><?php echo $this->_tpl_vars['sectc']; ?>
<?php elseif ($_REQUEST['user'] != ""): ?><?php echo $this->_tpl_vars['sectu']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?>/recommended<?php if ($_REQUEST['timesort'] == ""): ?>/all_time<?php else: ?>/<?php echo $_REQUEST['timesort']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['type'] == 'recommended'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortrecomm']; ?>
</span></a><?php endif; ?>
        		<?php if ($this->_tpl_vars['btn'] != 'adm_audio'): ?><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/<?php if ($_REQUEST['categ'] != ""): ?><?php echo $this->_tpl_vars['sectc']; ?>
<?php elseif ($_REQUEST['user'] != ""): ?><?php echo $this->_tpl_vars['sectu']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sect']; ?>
<?php endif; ?><?php if ($_REQUEST['user'] != ""): ?>/<?php echo $_REQUEST['user']; ?>
<?php endif; ?><?php if ($_REQUEST['categ'] != ""): ?>/<?php echo $_REQUEST['categ']; ?>
<?php endif; ?>/views<?php if ($_REQUEST['timesort'] == ""): ?>/all_time<?php else: ?>/<?php echo $_REQUEST['timesort']; ?>
<?php endif; ?>"><span class="<?php if ($_REQUEST['type'] == 'views'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_sortviews']; ?>
</span></a><?php endif; ?>
                    </td>
                <?php elseif ($this->_tpl_vars['sbtn'] == 'adm_areq' || $this->_tpl_vars['sbtn'] == 'adm_ireq' || $this->_tpl_vars['sbtn'] == 'adm_vreq'): ?>
            	    <td colspan=2 class="pad_borderbottom">
            		<table cellpadding=0 cellspacing=0 width="100%" border=0>
            		    <tr>
            			<td>
            			    <span class="gr"><?php echo $this->_tpl_vars['adm_reqsort1']; ?>
</span>
            			    <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/requests/<?php echo $_REQUEST['type']; ?>
/<?php echo $_REQUEST['show']; ?>
/all"><span class="<?php if ($_REQUEST['filter'] == 'all'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_reqsort2']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

        			    <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/requests/<?php echo $_REQUEST['type']; ?>
/<?php echo $_REQUEST['show']; ?>
/active"><span class="<?php if ($_REQUEST['filter'] == 'active'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_reqsort3']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>

        			    <a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/requests/<?php echo $_REQUEST['type']; ?>
/<?php echo $_REQUEST['show']; ?>
/closed"><span class="<?php if ($_REQUEST['filter'] == 'closed'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_reqsort4']; ?>
</span></a>
        			</td>
        			<td width="300"><form id="setview"><input type="hidden" name="viewmode" value="<?php echo $_SESSION['viewmode']; ?>
"></form>
                    		    <table width="100%" cellpadding=0 cellspacing=0>
                        		<tr><td align="right"><a href="javascript:void(0)" onclick="ReverseViewMode(); ReverseContentDisplay('gridview'); ReverseContentDisplay('listview'); ReverseContentDisplay('gview'); ReverseContentDisplay('lview');"><span id="lview" <?php if ($_SESSION['viewmode'] == 'list'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><?php echo $this->_tpl_vars['files_listview']; ?>
</span><span id="gview" <?php if ($_SESSION['viewmode'] == 'grid'): ?>style="display: none;"<?php else: ?>style="display: block;"<?php endif; ?>><?php echo $this->_tpl_vars['files_gridview']; ?>
</span></a></td></tr>
                    		    </table>
                		</td>
        		    </tr>
        		</table>
            	    </td>
                <?php endif; ?>