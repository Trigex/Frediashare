<?php /* Smarty version 2.6.26, created on 2009-11-10 15:24:15
         compiled from administration/header/subheader_table.tpl */ ?>

<!-- BEGIN ADMIN AREA SUBHEADER TABLE -->
<table width="<?php if ($this->_tpl_vars['site_theme'] == 'metube'): ?>950<?php else: ?>100%<?php endif; ?>" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td id="subnavm" style="padding-left: 0px;">
	    <table align="<?php if ($this->_tpl_vars['site_theme'] == 'metube'): ?>left<?php else: ?>center<?php endif; ?>" cellpadding=0 cellspacing=0 border=0>
		<tr>
		    <td align="center">
			<table cellpadding=1 cellspacing=1 border=0>
			    <tr>
				<?php if ($_SESSION['AUID'] != ""): ?>
				    <?php if ($this->_tpl_vars['btn'] == 'adm_categ'): ?>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/categories"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'manage'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_categconfig']; ?>
</span></a></td>
				    <?php elseif ($this->_tpl_vars['btn'] == 'adm_fp'): ?>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/player_main_audio"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'plaaudio'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_aplayer']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>								    
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/watermark_main_audio"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'wmaudio'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_awm']; ?>
</span></a></td>
				<td><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/textads"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'tads'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_nfptxt5']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/videoads"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'ads'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_vads']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/player_main"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'pla'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_vplayer']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>								    
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/watermark_main"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'wm'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_vwm']; ?>
</span></a></td>
				    <?php elseif ($this->_tpl_vars['btn'] == 'adm_members'): ?>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/email/all"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'mailall'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_mememailall']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>
				<?php if ($this->_tpl_vars['enable_inbox'] == '1'): ?><td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/message/all"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'msgall'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_memmsgall']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td><?php endif; ?>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/banned"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'adm_banned'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_membanned']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/registered"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'main' || $this->_tpl_vars['sbtn'] == 'dtl' || $this->_tpl_vars['sbtn'] == 'mail'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_memregged']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/members/requests"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'adm_memreq'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['adm_memchreq1']; ?>
</span></a></td>
				    <?php elseif ($this->_tpl_vars['btn'] == 'adm_set'): ?>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/ads"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'siteads'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_setad']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/templates"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'tpl'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_settpl']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>				
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/general"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'gen'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_setgen']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/guest"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'guest'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_setguest']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/languages"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'langs'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_setlang']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/paging"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'pag'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_setpag']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/settings/system"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'sys'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_setsys']; ?>
</span></a></td>
				    <?php elseif ($this->_tpl_vars['btn'] == 'adm_video'): ?>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/videos/all/all_time"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'allv'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_allvideos']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/requests/video/featured/active"><span class="<?php if ($_REQUEST['show'] == 'featured'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_featreq']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/requests/video/inappropriate/active"><span class="<?php if ($_REQUEST['show'] == 'inappropriate'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_inappreq']; ?>
</span></a></td>
				    <?php elseif ($this->_tpl_vars['btn'] == 'adm_image'): ?>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/images/all/all_time"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'alli'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_allimages']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/requests/image/featured/active"><span class="<?php if ($_REQUEST['show'] == 'featured'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_featreq']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/requests/image/inappropriate/active"><span class="<?php if ($_REQUEST['show'] == 'inappropriate'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_inappreq']; ?>
</span></a></td>
				    <?php elseif ($this->_tpl_vars['btn'] == 'adm_audio'): ?>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/audios/all/all_time"><span class="<?php if ($this->_tpl_vars['sbtn'] == 'alla'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_allaudios']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/requests/audio/featured/active"><span class="<?php if ($_REQUEST['show'] == 'featured'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_featreq']; ?>
</span></a><?php echo $this->_tpl_vars['myfiles_delim']; ?>
</td>
				<td><a href="<?php echo $this->_tpl_vars['admin_url']; ?>
/requests/audio/inappropriate/active"><span class="<?php if ($_REQUEST['show'] == 'inappropriate'): ?>act<?php else: ?><?php endif; ?>"><?php echo $this->_tpl_vars['snav_inappreq']; ?>
</span></a></td>
				    <?php endif; ?>
				<?php else: ?>
				<td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/main"><?php echo $this->_tpl_vars['adm_mainsite']; ?>
</a></td>
				<?php endif; ?>
			    </tr>
			</table>
		    </td>
		</tr>
	    </table>
        </td>
    </tr>
</table>
<!-- END ADMIN AREA SUBHEADER TABLE -->