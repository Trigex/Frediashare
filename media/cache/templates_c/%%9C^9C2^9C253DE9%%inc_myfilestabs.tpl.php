<?php /* Smarty version 2.6.26, created on 2009-11-10 15:21:41
         compiled from _inc/inc_myfilestabs.tpl */ ?>
<script type="text/javascript">
function setclass_act3(d) {
    var theclass = document.getElementById(d);
    var ttab1 = document.getElementById('tab11');
    var ttab2 = document.getElementById('tab21');
    var ttab3 = document.getElementById('tab31');
    if ( d == 'tab11' ) { 
	theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); 
	<?php if ($this->_tpl_vars['enable_images'] == '1'): ?>ttab2.setAttribute("class",""); ttab2.setAttribute("className","");<?php endif; ?>
	<?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>ttab3.setAttribute("class",""); ttab3.setAttribute("className","");<?php endif; ?>
    }
    if ( d == 'tab21' ) { 
	theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); 
	<?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>ttab1.setAttribute("class",""); ttab1.setAttribute("className","");<?php endif; ?>
	<?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>ttab3.setAttribute("class",""); ttab3.setAttribute("className","");<?php endif; ?>
    }
    if ( d == 'tab31' ) { 
	theclass.setAttribute("class","act"); theclass.setAttribute("className","act"); 
	<?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>ttab1.setAttribute("class",""); ttab1.setAttribute("className","");<?php endif; ?>
	<?php if ($this->_tpl_vars['enable_images'] == '1'): ?>ttab2.setAttribute("class",""); ttab2.setAttribute("className","");<?php endif; ?>
    }
}
</script>

    <?php if ($this->_tpl_vars['sbtn'] == 'ufavs'): ?><?php $this->assign('t1', $this->_tpl_vars['userfav_headinga']); ?><?php $this->assign('t2', $this->_tpl_vars['userfav_headingi']); ?><?php $this->assign('t3', $this->_tpl_vars['userfav_headingv']); ?><?php $this->assign('t4', $this->_tpl_vars['userfav_nra']); ?><?php $this->assign('t5', $this->_tpl_vars['userfav_nri']); ?><?php $this->assign('t6', $this->_tpl_vars['userfav_nrv']); ?><?php $this->assign('t7', $this->_tpl_vars['userfav_ofa']); ?><?php $this->assign('t8', $this->_tpl_vars['userfav_ofi']); ?><?php $this->assign('t9', $this->_tpl_vars['userfav_ofv']); ?>
    <?php elseif ($this->_tpl_vars['sbtn'] == 'fav'): ?><?php $this->assign('t1', $this->_tpl_vars['myfav_audioheading']); ?><?php $this->assign('t2', $this->_tpl_vars['myfav_imageheading']); ?><?php $this->assign('t3', $this->_tpl_vars['myfav_videoheading']); ?><?php $this->assign('t4', $this->_tpl_vars['myfav_audionr']); ?><?php $this->assign('t5', $this->_tpl_vars['myfav_imagenr']); ?><?php $this->assign('t6', $this->_tpl_vars['myfav_videonr']); ?><?php $this->assign('t7', $this->_tpl_vars['myfav_audioof']); ?><?php $this->assign('t8', $this->_tpl_vars['myfav_imageof']); ?><?php $this->assign('t9', $this->_tpl_vars['myfav_videoof']); ?>
    <?php elseif ($this->_tpl_vars['sbtn'] == 'mpl'): ?><?php $this->assign('t1', $this->_tpl_vars['mypl_audioheading']); ?><?php $this->assign('t2', $this->_tpl_vars['mypl_imageheading']); ?><?php $this->assign('t3', $this->_tpl_vars['mypl_videoheading']); ?><?php $this->assign('t4', $this->_tpl_vars['mypl_audionr']); ?><?php $this->assign('t5', $this->_tpl_vars['mypl_imagenr']); ?><?php $this->assign('t6', $this->_tpl_vars['mypl_videonr']); ?><?php $this->assign('t7', $this->_tpl_vars['mypl_audioof']); ?><?php $this->assign('t8', $this->_tpl_vars['mypl_imageof']); ?><?php $this->assign('t9', $this->_tpl_vars['mypl_videoof']); ?>
    <?php elseif ($this->_tpl_vars['sbtn'] == 'mql'): ?><?php $this->assign('t1', $this->_tpl_vars['qlist_txt1x']); ?><?php $this->assign('t2', $this->_tpl_vars['qlist_txt2']); ?><?php $this->assign('t3', $this->_tpl_vars['qlist_txt3']); ?><?php $this->assign('t4', $this->_tpl_vars['mypl_audionr']); ?><?php $this->assign('t5', $this->_tpl_vars['mypl_imagenr']); ?><?php $this->assign('t6', $this->_tpl_vars['mypl_videonr']); ?><?php $this->assign('t7', $this->_tpl_vars['mypl_audioof']); ?><?php $this->assign('t8', $this->_tpl_vars['mypl_imageof']); ?><?php $this->assign('t9', $this->_tpl_vars['mypl_videoof']); ?>
    <?php elseif ($this->_tpl_vars['sbtn'] == 'mpl2'): ?><?php $this->assign('t1', $this->_tpl_vars['plist_txt2']); ?><?php $this->assign('t2', $this->_tpl_vars['plist_txt3']); ?><?php $this->assign('t3', $this->_tpl_vars['plist_txt4']); ?><?php $this->assign('t4', $this->_tpl_vars['mypl_audionr']); ?><?php $this->assign('t5', $this->_tpl_vars['mypl_imagenr']); ?><?php $this->assign('t6', $this->_tpl_vars['mypl_videonr']); ?><?php $this->assign('t7', $this->_tpl_vars['mypl_audioof']); ?><?php $this->assign('t8', $this->_tpl_vars['mypl_imageof']); ?><?php $this->assign('t9', $this->_tpl_vars['mypl_videoof']); ?>
    <?php endif; ?>
	<td class="">
		    <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?><a id="tab1" href="javascript:void(0)" onclick="setclass_act3('tab11'); ShowContent('plaudio'); ShowContent('ainfo'); ShowContent('sortfa'); <?php if ($this->_tpl_vars['enable_images'] == '1'): ?>HideContent('plimage'); HideContent('iinfo'); HideContent('sortfi'); <?php endif; ?> <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>HideContent('plvideo'); HideContent('vinfo'); HideContent('sortfv');<?php endif; ?>"><span id="tab11" <?php if ($_REQUEST['page'] == "" && $_REQUEST['pagei'] == "" && $_REQUEST['vtype'] == "" && $_REQUEST['itype'] == ""): ?>class="act"<?php endif; ?>><?php echo $this->_tpl_vars['t1']; ?>
</span></a><?php if ($this->_tpl_vars['enable_images'] == '1'): ?><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?><?php endif; ?>
                    <?php if ($this->_tpl_vars['enable_images'] == '1'): ?><a id="tab2" href="javascript:void(0)" onclick="setclass_act3('tab21'); ShowContent('plimage'); ShowContent('iinfo'); ShowContent('sortfi'); <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>HideContent('plaudio'); HideContent('ainfo'); HideContent('sortfa'); <?php endif; ?> <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?>HideContent('plvideo'); HideContent('vinfo'); HideContent('sortfv');<?php endif; ?>"><span id="tab21" class="<?php if ($this->_tpl_vars['enable_audio'] == '1' && ( $_REQUEST['pagei'] == "" && $_REQUEST['itype'] == "" )): ?><?php elseif ($this->_tpl_vars['enable_audio'] == '0' && $this->_tpl_vars['enable_images'] == '0'): ?><?php elseif ($this->_tpl_vars['enable_audio'] == '0' && $_REQUEST['vtype'] != ""): ?><?php else: ?>act<?php endif; ?>"><?php echo $this->_tpl_vars['t2']; ?>
</span></a><?php endif; ?><?php if ($this->_tpl_vars['enable_videos'] == '1'): ?><?php echo $this->_tpl_vars['myfiles_delim']; ?>
<?php endif; ?>
                    <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?><a id="tab3" href="javascript:void(0)" onclick="setclass_act3('tab31'); ShowContent('plvideo'); ShowContent('vinfo'); ShowContent('sortfv'); <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?>HideContent('plaudio'); HideContent('ainfo'); HideContent('sortfa'); <?php endif; ?> <?php if ($this->_tpl_vars['enable_images'] == '1'): ?>HideContent('plimage'); HideContent('iinfo'); HideContent('sortfi');<?php endif; ?>"><span id="tab31" class="<?php if ($this->_tpl_vars['enable_audio'] != '1' && $this->_tpl_vars['enable_images'] != '1'): ?>act<?php elseif ($_REQUEST['page'] != "" || $_REQUEST['vtype'] != ""): ?>act<?php else: ?>display: none;<?php endif; ?>"><?php echo $this->_tpl_vars['t3']; ?>
</span></a><?php endif; ?>
	</td>
	<td class="" align="right">
	    <?php if ($this->_tpl_vars['enable_audio'] == '1'): ?><div id="ainfo" <?php if ($_REQUEST['page'] == "" && $_REQUEST['pagei'] == "" && $_REQUEST['vtype'] == "" && $_REQUEST['itype'] == "" && $this->_tpl_vars['total2'] != '0'): ?>style="display: block;"<?php else: ?>style="display: none;"<?php endif; ?>><?php if ($this->_tpl_vars['total2'] != '0'): ?><?php echo $this->_tpl_vars['t4']; ?>
[<?php echo $this->_tpl_vars['start_numa']; ?>
-<?php echo $this->_tpl_vars['end_numa']; ?>
]<?php echo $this->_tpl_vars['t7']; ?>
 [<?php echo $this->_tpl_vars['total2']; ?>
]<?php endif; ?></div><?php endif; ?>
	    <?php if ($this->_tpl_vars['enable_images'] == '1'): ?><div id="iinfo" style="<?php if ($this->_tpl_vars['enable_audio'] == '1' && ( $_REQUEST['pagei'] == "" && $_REQUEST['itype'] == "" )): ?>display: none;<?php elseif ($this->_tpl_vars['enable_audio'] == '0' && $this->_tpl_vars['enable_images'] == '0'): ?>display: none;<?php elseif ($this->_tpl_vars['enable_audio'] == '0' && $_REQUEST['vtype'] != ""): ?>display: none;<?php else: ?>display: block;<?php endif; ?>"><?php if ($this->_tpl_vars['total3'] != '0'): ?><?php echo $this->_tpl_vars['t5']; ?>
[<?php echo $this->_tpl_vars['start_numi']; ?>
-<?php echo $this->_tpl_vars['end_numi']; ?>
]<?php echo $this->_tpl_vars['t8']; ?>
[<?php echo $this->_tpl_vars['total3']; ?>
]<?php endif; ?></div><?php endif; ?>
	    <?php if ($this->_tpl_vars['enable_videos'] == '1'): ?><div id="vinfo" style="<?php if ($this->_tpl_vars['enable_audio'] != '1' && $this->_tpl_vars['enable_images'] != '1'): ?>display: block;<?php elseif ($_REQUEST['page'] != "" || $_REQUEST['vtype'] != "" && $this->_tpl_vars['total1'] != '0'): ?>display: block;<?php else: ?>display: none;<?php endif; ?>"><?php if ($this->_tpl_vars['total1'] != '0'): ?><?php echo $this->_tpl_vars['t6']; ?>
[<?php echo $this->_tpl_vars['start_num']; ?>
-<?php echo $this->_tpl_vars['end_num']; ?>
]<?php echo $this->_tpl_vars['t9']; ?>
[<?php echo $this->_tpl_vars['total1']; ?>
]<?php endif; ?></div><?php endif; ?>
	</td>