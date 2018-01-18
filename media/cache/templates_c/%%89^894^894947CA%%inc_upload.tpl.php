<?php /* Smarty version 2.6.26, created on 2009-11-10 15:40:06
         compiled from _inc/inc_upload.tpl */ ?>
<script type="text/javascript">
<?php echo '
function setsharing(d) {
    if ( d == \'on\' ) { ShowContent(\'commset\'); ShowContent(\'commrateset\'); ShowContent(\'respset\'); ShowContent(\'rateset\'); ShowContent(\'embset\'); ShowContent(\'bmset\'); }
    if ( d == \'off\' ) { HideContent(\'commset\'); HideContent(\'commrateset\'); HideContent(\'respset\'); HideContent(\'rateset\'); HideContent(\'embset\'); HideContent(\'bmset\'); }
}
'; ?>

</script>
<fieldset>
    <legend><?php echo $this->_tpl_vars['up_opt1']; ?>
</legend>
    <table cellpadding="5" cellspacing="0" border="0" width="100%">
	<tr>
	    <td>
		<div>
		    <table cellpadding=3 cellspacing=0 border=0 width="100%">
			<tr>
			    <td>
				<div id="privtext" style="display: block;"><?php echo $this->_tpl_vars['up_opt7']; ?>
</div>
				<div id="privchanged" style="display: none;"><?php echo $this->_tpl_vars['up_opt8']; ?>
</div>
			    </td>
			    <td align="right" width="100">
				<div id="privsetlink1" style="display: block;">
				    <a href="javascript:void(0)" onclick="HideContent('privsetlink1'); ShowContent('privsetlink2'); ShowContent('privset'); ShowContent('hr1');"><?php echo $this->_tpl_vars['up_opt4']; ?>
</a>
				</div>
				<div id="privsetlink2" style="display: none;">
				    <a href="javascript:void(0)" onclick="HideContent('privsetlink2'); ShowContent('privsetlink1'); HideContent('privset'); HideContent('hr1');"><?php echo $this->_tpl_vars['up_opt5']; ?>
</a>
				</div>
			    </td>
			</tr>
		    </table>
		</div>
		<div id="hr1" style="display: none;"><hr></div>
	    </td>
	</tr>
	<tr>
	    <td class="nopad">
	        <div id="privset" style="display: none;">
		    <table cellpadding=3 cellspacing=0 border=0 width="100%">
		        <tr>
		    	    <td width="1"><input name="vpriv" type="radio" value="public" onclick="HideContent('privchanged'); ShowContent('privtext');" <?php if ($this->_tpl_vars['sbtn'] == 'myvid' || $this->_tpl_vars['sbtn'] == 'myimg' || $this->_tpl_vars['sbtn'] == 'myaud'): ?><?php if ($this->_tpl_vars['vd'][0]['vtype'] == 'public'): ?>checked<?php endif; ?><?php else: ?>checked<?php endif; ?>></td>
			    <td valign="bottom"><?php echo $this->_tpl_vars['up_public']; ?>
<?php echo $this->_tpl_vars['up_opt2']; ?>
</td>
			</tr>
			</tr>
			    <td width="1"><input name="vpriv" type="radio" value="private" onclick="ShowContent('privchanged'); HideContent('privtext');" <?php if ($this->_tpl_vars['sbtn'] == 'myvid' || $this->_tpl_vars['sbtn'] == 'myimg' || $this->_tpl_vars['sbtn'] == 'myaud'): ?><?php if ($this->_tpl_vars['vd'][0]['vtype'] == 'private'): ?>checked<?php endif; ?><?php endif; ?>></td>
			    <td valign="bottom"><?php echo $this->_tpl_vars['up_private']; ?>
<?php echo $this->_tpl_vars['up_opt3']; ?>
</td>
			</tr>
		    </table>
		</div>
	    </td>
	</tr>
    </table>
</fieldset>
<br>
<fieldset>
    <legend><?php echo $this->_tpl_vars['up_opt6']; ?>
</legend>
    <table cellpadding="5" cellspacing="0" border="0" width="100%">
	<tr>
	    <td>
		<div>
		    <table cellpadding=3 cellspacing=0 border=0 width="100%">
			<tr>
			    <td>
				<div id="bcastxt1" style="display: block;" class="p2"><?php echo $this->_tpl_vars['up_opt14']; ?>
</div>
				<div id="bcastxt2" style="display: none;" class="p2"><?php echo $this->_tpl_vars['up_opt13']; ?>
</div>
			    </td>
			    <td align="right" width="100" valign="top">
				<div id="bcastsetlink1" style="display: block;">
				    <a href="javascript:void(0)" onclick="HideContent('bcastsetlink1'); ShowContent('bcastsetlink2'); setsharing('on'); ShowContent('hr2');"><?php echo $this->_tpl_vars['up_opt4']; ?>
</a>
				</div>
				<div id="bcastsetlink2" style="display: none;">
				    <a href="javascript:void(0)" onclick="HideContent('bcastsetlink2'); ShowContent('bcastsetlink1'); setsharing('off'); HideContent('hr2');"><?php echo $this->_tpl_vars['up_opt5']; ?>
</a>
				</div>
			    </td>
			</tr>
		    </table>
		</div>
		<div id="hr2" style="display: none;">
		<?php if ($this->_tpl_vars['file_comments'] == '1' || $this->_tpl_vars['file_responses'] == '1' || $this->_tpl_vars['file_ratings'] == '1' || $this->_tpl_vars['comment_rating'] == '1' || $this->_tpl_vars['file_embed'] == '1' || $this->_tpl_vars['file_bookmark'] == '1'): ?>
		<hr>
		<?php endif; ?>
		</div>
	    </td>
	</tr>
	<tr>
	    <td class="nopad">
	        <div id="commset" style="display: none;">
	        <?php if ($this->_tpl_vars['file_comments'] == '1'): ?>
		    <table cellpadding=3 cellspacing=0 border=0 width="100%">
			<tr><td colspan="2"><?php echo $this->_tpl_vars['up_opt15']; ?>
</td></tr>
		        <tr>
		    	    <td width="1"><input name="vcomm" type="radio" value="yes" <?php if ($this->_tpl_vars['sbtn'] == 'myvid' || $this->_tpl_vars['sbtn'] == 'myimg' || $this->_tpl_vars['sbtn'] == 'myaud'): ?><?php if ($this->_tpl_vars['vd'][0]['is_comm'] == 'yes'): ?>checked<?php endif; ?><?php else: ?>checked<?php endif; ?>></td>
			    <td valign="middle"><?php echo $this->_tpl_vars['up_opt9']; ?>
</td>
			</tr>
			</tr>
			    <td width="1"><input name="vcomm" type="radio" value="appfr" onclick="HideContent('bcastxt1'); ShowContent('bcastxt2');" <?php if ($this->_tpl_vars['sbtn'] == 'myvid' || $this->_tpl_vars['sbtn'] == 'myimg' || $this->_tpl_vars['sbtn'] == 'myaud'): ?><?php if ($this->_tpl_vars['vd'][0]['is_comm'] == 'appfr'): ?>checked<?php endif; ?><?php endif; ?>></td>
			    <td valign="middle"><?php echo $this->_tpl_vars['up_opt10']; ?>
</td>
			</tr>
		        <tr>
		    	    <td width="1"><input name="vcomm" type="radio" value="app" onclick="HideContent('bcastxt1'); ShowContent('bcastxt2');" <?php if ($this->_tpl_vars['sbtn'] == 'myvid' || $this->_tpl_vars['sbtn'] == 'myimg' || $this->_tpl_vars['sbtn'] == 'myaud'): ?><?php if ($this->_tpl_vars['vd'][0]['is_comm'] == 'app'): ?>checked<?php endif; ?><?php endif; ?>></td>
			    <td valign="middle"><?php echo $this->_tpl_vars['up_opt11']; ?>
</td>
			</tr>
			</tr>
			    <td width="1"><input name="vcomm" type="radio" value="no" onclick="HideContent('bcastxt1'); ShowContent('bcastxt2');" <?php if ($this->_tpl_vars['sbtn'] == 'myvid' || $this->_tpl_vars['sbtn'] == 'myimg' || $this->_tpl_vars['sbtn'] == 'myaud'): ?><?php if ($this->_tpl_vars['vd'][0]['is_comm'] == 'no'): ?>checked<?php endif; ?><?php endif; ?>></td>
			    <td valign="middle"><?php echo $this->_tpl_vars['up_opt12']; ?>
</td>
			</tr>
		    </table>
		<?php endif; ?>
		</div>
	        <div id="commrateset" style="display: none;">
	        <?php if ($this->_tpl_vars['comment_rating'] == '1'): ?>
	        <br>
		    <table cellpadding=3 cellspacing=0 border=0 width="100%">
			<tr><td colspan="2"><?php echo $this->_tpl_vars['up_opt16']; ?>
</td></tr>
		        <tr>
		    	    <td width="1"><input name="vcommrate" type="radio" value="yes" <?php if ($this->_tpl_vars['sbtn'] == 'myvid' || $this->_tpl_vars['sbtn'] == 'myimg' || $this->_tpl_vars['sbtn'] == 'myaud'): ?><?php if ($this->_tpl_vars['vd'][0]['is_commrate'] == 'yes'): ?>checked<?php endif; ?><?php else: ?>checked<?php endif; ?>></td>
			    <td valign="middle"><?php echo $this->_tpl_vars['up_opt17']; ?>
</td>
			</tr>
			</tr>
			    <td width="1"><input name="vcommrate" type="radio" value="no" onclick="HideContent('bcastxt1'); ShowContent('bcastxt2');" <?php if ($this->_tpl_vars['sbtn'] == 'myvid' || $this->_tpl_vars['sbtn'] == 'myimg' || $this->_tpl_vars['sbtn'] == 'myaud'): ?><?php if ($this->_tpl_vars['vd'][0]['is_commrate'] == 'no'): ?>checked<?php endif; ?><?php endif; ?>></td>
			    <td valign="middle"><?php echo $this->_tpl_vars['up_opt18']; ?>
</td>
			</tr>
		    </table>
		<?php endif; ?>
		</div>
	        <div id="respset" style="display: none;">
	        <?php if ($this->_tpl_vars['file_responses'] == '1'): ?>
	        <br>
		    <table cellpadding=3 cellspacing=0 border=0 width="100%">
			<tr><td colspan="2"><?php echo $this->_tpl_vars['up_opt19']; ?>
</td></tr>
		        <tr>
		    	    <td width="1"><input name="vresp" type="radio" value="yes" <?php if ($this->_tpl_vars['sbtn'] == 'myvid' || $this->_tpl_vars['sbtn'] == 'myimg' || $this->_tpl_vars['sbtn'] == 'myaud'): ?><?php if ($this->_tpl_vars['vd'][0]['is_fileresp'] == 'yes'): ?>checked<?php endif; ?><?php else: ?>checked<?php endif; ?>></td>
			    <td valign="middle"><?php echo $this->_tpl_vars['up_opt20']; ?>
</td>
			</tr>
			</tr>
			    <td width="1"><input name="vresp" type="radio" value="app" onclick="HideContent('bcastxt1'); ShowContent('bcastxt2');" <?php if ($this->_tpl_vars['sbtn'] == 'myvid' || $this->_tpl_vars['sbtn'] == 'myimg' || $this->_tpl_vars['sbtn'] == 'myaud'): ?><?php if ($this->_tpl_vars['vd'][0]['is_fileresp'] == 'app'): ?>checked<?php endif; ?><?php endif; ?>></td>
			    <td valign="middle"><?php echo $this->_tpl_vars['up_opt21']; ?>
</td>
			</tr>
			</tr>
			    <td width="1"><input name="vresp" type="radio" value="no" onclick="HideContent('bcastxt1'); ShowContent('bcastxt2');" <?php if ($this->_tpl_vars['sbtn'] == 'myvid' || $this->_tpl_vars['sbtn'] == 'myimg' || $this->_tpl_vars['sbtn'] == 'myaud'): ?><?php if ($this->_tpl_vars['vd'][0]['is_fileresp'] == 'no'): ?>checked<?php endif; ?><?php endif; ?>></td>
			    <td valign="middle"><?php echo $this->_tpl_vars['up_opt22']; ?>
</td>
			</tr>
		    </table>
		<?php endif; ?>
		</div>
	        <div id="rateset" style="display: none;">
	        <?php if ($this->_tpl_vars['file_ratings'] == '1'): ?>
	        <br>
		    <table cellpadding=3 cellspacing=0 border=0 width="100%">
			<tr><td colspan="2"><?php echo $this->_tpl_vars['up_opt23']; ?>
</td></tr>
		        <tr>
		    	    <td width="1"><input name="vrate" type="radio" value="yes" <?php if ($this->_tpl_vars['sbtn'] == 'myvid' || $this->_tpl_vars['sbtn'] == 'myimg' || $this->_tpl_vars['sbtn'] == 'myaud'): ?><?php if ($this->_tpl_vars['vd'][0]['is_rated'] == 'yes'): ?>checked<?php endif; ?><?php else: ?>checked<?php endif; ?>></td>
			    <td valign="middle"><?php echo $this->_tpl_vars['up_opt24']; ?>
</td>
			</tr>
			</tr>
			    <td width="1"><input name="vrate" type="radio" value="no" onclick="HideContent('bcastxt1'); ShowContent('bcastxt2');" <?php if ($this->_tpl_vars['sbtn'] == 'myvid' || $this->_tpl_vars['sbtn'] == 'myimg' || $this->_tpl_vars['sbtn'] == 'myaud'): ?><?php if ($this->_tpl_vars['vd'][0]['is_rated'] == 'no'): ?>checked<?php endif; ?><?php endif; ?>></td>
			    <td valign="middle"><?php echo $this->_tpl_vars['up_opt25']; ?>
</td>
			</tr>
		    </table>
		<?php endif; ?>
		</div>
	        <div id="embset" style="display: none;">
	        <?php if ($this->_tpl_vars['file_embed'] == '1'): ?>
	        <br>
		    <table cellpadding=3 cellspacing=0 border=0 width="100%">
			<tr><td colspan="2"><?php echo $this->_tpl_vars['up_opt26']; ?>
</td></tr>
		        <tr>
		    	    <td width="1"><input name="vemb" type="radio" value="yes" <?php if ($this->_tpl_vars['sbtn'] == 'myvid' || $this->_tpl_vars['sbtn'] == 'myimg' || $this->_tpl_vars['sbtn'] == 'myaud'): ?><?php if ($this->_tpl_vars['vd'][0]['is_embed'] == 'yes'): ?>checked<?php endif; ?><?php else: ?>checked<?php endif; ?>></td>
			    <td valign="middle"><?php echo $this->_tpl_vars['up_opt27']; ?>
</td>
			</tr>
			</tr>
			    <td width="1"><input name="vemb" type="radio" value="no" onclick="HideContent('bcastxt1'); ShowContent('bcastxt2');" <?php if ($this->_tpl_vars['sbtn'] == 'myvid' || $this->_tpl_vars['sbtn'] == 'myimg' || $this->_tpl_vars['sbtn'] == 'myaud'): ?><?php if ($this->_tpl_vars['vd'][0]['is_embed'] == 'no'): ?>checked<?php endif; ?><?php endif; ?>></td>
			    <td valign="middle"><?php echo $this->_tpl_vars['up_opt28']; ?>
</td>
			</tr>
		    </table>
		<?php endif; ?>
		</div>
	        <div id="bmset" style="display: none;">
	        <?php if ($this->_tpl_vars['file_bookmark'] == '1'): ?>
	        <br>
		    <table cellpadding=3 cellspacing=0 border=0 width="100%">
			<tr><td colspan="2"><?php echo $this->_tpl_vars['adm_setbm']; ?>
</td></tr>
		        <tr>
		    	    <td width="1"><input name="vbm" type="radio" value="yes" <?php if ($this->_tpl_vars['sbtn'] == 'myvid' || $this->_tpl_vars['sbtn'] == 'myimg' || $this->_tpl_vars['sbtn'] == 'myaud'): ?><?php if ($this->_tpl_vars['vd'][0]['is_bm'] == 'yes'): ?>checked<?php endif; ?><?php else: ?>checked<?php endif; ?>></td>
			    <td valign="middle"><?php echo $this->_tpl_vars['up_opt29']; ?>
</td>
			</tr>
			</tr>
			    <td width="1"><input name="vbm" type="radio" value="no" onclick="HideContent('bcastxt1'); ShowContent('bcastxt2');" <?php if ($this->_tpl_vars['sbtn'] == 'myvid' || $this->_tpl_vars['sbtn'] == 'myimg' || $this->_tpl_vars['sbtn'] == 'myaud'): ?><?php if ($this->_tpl_vars['vd'][0]['is_bm'] == 'no'): ?>checked<?php endif; ?><?php endif; ?>></td>
			    <td valign="middle"><?php echo $this->_tpl_vars['up_opt30']; ?>
</td>
			</tr>
		    </table>
		<?php endif; ?>
		</div>
	    </td>
	</tr>
    </table>
</fieldset>
<script type="text/javascript">setsharing('off');</script>