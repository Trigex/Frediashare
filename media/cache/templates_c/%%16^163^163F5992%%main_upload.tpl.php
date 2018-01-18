<?php /* Smarty version 2.6.26, created on 2009-11-10 15:40:05
         compiled from main_upload.tpl */ ?>

<!-- BEGIN UPLOAD PAGE TABLES -->
<table border="0" align="center" cellpadding="5" cellspacing="0" width="950" class="br2" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
    <tr>
	<td class="" align="right">
	    <table cellpadding="2" cellspacing="0">
		<tr>
                    <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>
                        <td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/upload_audio"><span class="<?php if ($this->_tpl_vars['sbtn'] == '1'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['title_upaudios']; ?>
</span></a><?php if ($this->_tpl_vars['enable_images'] == '1'): ?><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?></td>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['enable_images'] == '1'): ?>
                        <td><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/upload_image"><span class="<?php if ($this->_tpl_vars['sbtn'] == '2'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['title_upimages']; ?>
</span></a><?php if ($this->_tpl_vars['enable_videos'] == '1'): ?><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?></td>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>
                        <td><?php if ($this->_tpl_vars['enable_images'] == '0' && $this->_tpl_vars['enable_audio'] == '1'): ?><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?><a href="<?php echo $this->_tpl_vars['base_url']; ?>
/upload_video"><span class="<?php if ($this->_tpl_vars['sbtn'] == '3'): ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['title_upvideos']; ?>
</span></a></td>
                    <?php endif; ?>
                </tr>
            </table>
	</td>
    </tr>
</table>
<table cellpadding="5" cellspacing="0" border=0 align="center" class="width950b">

<?php if ($this->_tpl_vars['type'] == 'general'): ?>
    <tr>
	<td valign="top" class=grey>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "upload_general.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</td>
    </tr>
<?php endif; ?>    

<?php if ($this->_tpl_vars['type'] == 'video'): ?>
    <tr>
	<td valign="top" class="grey">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "upload_videos.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</td>
    </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['type'] == 'audio'): ?>
    <tr>
	<td valign="top" class="grey">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "upload_audios.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</td>
    </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['type'] == 'image'): ?>
    <tr>
	<td valign="top" class="grey">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "upload_images.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</td>
    </tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['type'] == 'vconfirmation' || $this->_tpl_vars['type'] == 'aconfirmation' || $this->_tpl_vars['type'] == 'iconfirmation'): ?>
    <?php if ($this->_tpl_vars['type'] == 'vconfirmation'): ?> <?php $this->assign('filetype', 'video'); ?> <?php endif; ?> 
    <?php if ($this->_tpl_vars['type'] == 'aconfirmation'): ?> <?php $this->assign('filetype', 'audio'); ?> <?php endif; ?>
    <?php if ($this->_tpl_vars['type'] == 'iconfirmation'): ?> <?php $this->assign('filetype', 'image'); ?> <?php endif; ?>
    <tr>
	<td valign="top" align="left" class=grey>
	    <div class="spacer"></div>
	    <table cellpadding=5 cellspacing=1 border=0 width="90%" align="center">
		<tr>
		    <td rowspan=2 align=center valign=top><img src="<?php echo $this->_tpl_vars['img_url']; ?>
/warning.gif" width="46" height="40" alt="Upload Information"></td>
		    <?php if ($this->_tpl_vars['type'] == 'vconfirmation'): ?><td><h3><?php echo $this->_tpl_vars['up_th8']; ?>
</h3></td><?php endif; ?>
		    <?php if ($this->_tpl_vars['type'] == 'iconfirmation'): ?><td><h3><?php echo $this->_tpl_vars['up_th9']; ?>
</h3></td><?php endif; ?>
		    <?php if ($this->_tpl_vars['type'] == 'aconfirmation'): ?><td><h3><?php echo $this->_tpl_vars['up_th10']; ?>
</h3></td><?php endif; ?>
		</tr>
		<tr>
		    <td>
			<?php if ($this->_tpl_vars['type'] == 'vconfirmation'): ?><?php echo $this->_tpl_vars['up_txt1']; ?>
<?php endif; ?>
			<?php if ($this->_tpl_vars['type'] == 'iconfirmation'): ?><?php echo $this->_tpl_vars['up_txt2']; ?>
<?php endif; ?>
			<?php if ($this->_tpl_vars['type'] == 'aconfirmation'): ?><?php echo $this->_tpl_vars['up_txt3']; ?>
<?php endif; ?>
		    </td>
		</tr>
		<?php if ($this->_tpl_vars['filetype'] != 'image'): ?>
		<tr>
		    <td colspan=2>
			<?php if ($this->_tpl_vars['type'] == 'vconfirmation'): ?><?php echo $this->_tpl_vars['up_txt4']; ?>
<?php endif; ?>
			<?php if ($this->_tpl_vars['type'] == 'aconfirmation'): ?><?php echo $this->_tpl_vars['up_txt5']; ?>
<?php endif; ?>
		    </td>
		</tr>
		<?php endif; ?>
		<tr>
		    <td colspan=2>
			<?php if ($this->_tpl_vars['type'] == 'vconfirmation'): ?><?php echo $this->_tpl_vars['up_txt6']; ?>
<?php endif; ?>
			<?php if ($this->_tpl_vars['type'] == 'iconfirmation'): ?><?php echo $this->_tpl_vars['up_txt7']; ?>
<?php endif; ?>
			<?php if ($this->_tpl_vars['type'] == 'aconfirmation'): ?><?php echo $this->_tpl_vars['up_txt8']; ?>
<?php endif; ?>
		    </td>
		</tr>
		<tr>
		    <td colspan=2><div class="spacer"></div>
			<table width="100%" cellpadding=1 cellspacing=0 border=0>
			    <tr><td><?php echo $this->_tpl_vars['up_txt9']; ?>
</td></tr>
			    <tr><td><?php echo $this->_tpl_vars['up_txt10']; ?>
</td></tr>
			    <tr><td><?php echo $this->_tpl_vars['up_txt11']; ?>
<?php echo $this->_tpl_vars['site_name']; ?>
<?php echo $this->_tpl_vars['up_txt12']; ?>
</td></tr>
			</table>
		    </td>
		</tr>
	    </table>
	    <br>
	</td>
    </tr>
<?php endif; ?>
</table>
<!-- END UPLOAD PAGE TABLES -->