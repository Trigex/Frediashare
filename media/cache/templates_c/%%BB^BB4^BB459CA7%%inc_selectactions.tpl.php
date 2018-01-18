<?php /* Smarty version 2.6.26, created on 2009-11-10 15:26:16
         compiled from _inc/inc_selectactions.tpl */ ?>
		    <?php if ($this->_tpl_vars['btn'] == 'messages'): ?>
		    <div id="actdiv" style="display: none;">
			<table cellpadding=0 cellspacing=0 border=0>
			    <tr>
				<td class="pt5" valign="top">
				    <select name="actions" class="selbox">
					<option value="<?php echo $this->_tpl_vars['inbox_acts']; ?>
"><?php echo $this->_tpl_vars['inbox_acts']; ?>
</option>
					<?php if ($this->_tpl_vars['sbtn'] == 'blocked'): ?>
					<option value="<?php echo $this->_tpl_vars['blocked_act4']; ?>
"><?php echo $this->_tpl_vars['blocked_act4']; ?>
</option>
					<option value="<?php echo $this->_tpl_vars['blocked_act5']; ?>
"><?php echo $this->_tpl_vars['blocked_act5']; ?>
</option>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['sbtn'] == 'inbox'): ?>
					<option value="<?php echo $this->_tpl_vars['inbox_itblact4']; ?>
"><?php echo $this->_tpl_vars['inbox_itblact4']; ?>
</option>
					<option value="<?php echo $this->_tpl_vars['inbox_itblact5']; ?>
"><?php echo $this->_tpl_vars['inbox_itblact5']; ?>
</option>
					<?php endif; ?>
					<option value="<?php echo $this->_tpl_vars['inbox_itblact6']; ?>
"><?php echo $this->_tpl_vars['inbox_itblact6']; ?>
</option>
				    </select>
				</td>
				<td class="pt5" valign="bottom">&nbsp;<input type="submit" name="goact" value="<?php echo $this->_tpl_vars['btn_apply']; ?>
" class="fb"></td>
			    </tr>
                        </table>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($this->_tpl_vars['sbtn'] == 'friends'): ?>
            	    <div id="actdiv" style="display: none;">
            		<table cellpadding=0 cellspacing=0 border=0>
            		    <tr>
            			<td class="pt5" valign="top">
            			    <select name="actions" class="selbox">
            				<option value="<?php echo $this->_tpl_vars['inbox_acts']; ?>
"><?php echo $this->_tpl_vars['inbox_acts']; ?>
</option>
            				<option value="<?php echo $this->_tpl_vars['act_frenable']; ?>
"><?php echo $this->_tpl_vars['act_frenable']; ?>
</option>
            				<option value="<?php echo $this->_tpl_vars['act_frdisable']; ?>
"><?php echo $this->_tpl_vars['act_frdisable']; ?>
</option>
            				<?php if ($this->_tpl_vars['msg_multi'] == '1'): ?>
            				<option value="<?php echo $this->_tpl_vars['admact_memmsg']; ?>
"><?php echo $this->_tpl_vars['admact_memmsg']; ?>
</option>
            				<?php endif; ?>
            				<?php if ($this->_tpl_vars['file_ratings'] == '1'): ?>
            				<option value="<?php echo $this->_tpl_vars['act_rateenable']; ?>
"><?php echo $this->_tpl_vars['act_rateenable']; ?>
</option>
            				<option value="<?php echo $this->_tpl_vars['act_ratedisable']; ?>
"><?php echo $this->_tpl_vars['act_ratedisable']; ?>
</option>
            				<?php endif; ?>
            				<?php if ($this->_tpl_vars['file_comments'] == '1'): ?>
            				<option value="<?php echo $this->_tpl_vars['act_comenable']; ?>
"><?php echo $this->_tpl_vars['act_comenable']; ?>
</option>
            				<option value="<?php echo $this->_tpl_vars['act_comdisable']; ?>
"><?php echo $this->_tpl_vars['act_comdisable']; ?>
</option>
            				<?php endif; ?>
            				<?php if ($this->_tpl_vars['msg_block'] == '1'): ?><option value="<?php echo $this->_tpl_vars['blocked_act4']; ?>
"><?php echo $this->_tpl_vars['blocked_act4']; ?>
</option><option value="<?php echo $this->_tpl_vars['blocked_act5']; ?>
"><?php echo $this->_tpl_vars['blocked_act5']; ?>
</option><?php endif; ?>
            				<option value="<?php echo $this->_tpl_vars['inbox_itblact6']; ?>
"><?php echo $this->_tpl_vars['inbox_itblact6']; ?>
</option>
            			    </select>
            			</td>
            			<td class="pt5" valign="bottom">&nbsp;<input type="submit" name="goact" value="<?php echo $this->_tpl_vars['btn_apply']; ?>
" class="fb"></td>
            		    </tr>
            		</table>
            	    </div>	
                    <?php endif; ?>
                    
                    <?php if ($this->_tpl_vars['sbtn'] == 'bmember' || $this->_tpl_vars['sbtn'] == 'search' || $this->_tpl_vars['sbtn'] == 'ufr' || $this->_tpl_vars['sbtn'] == 'myusubs'): ?>
            	    <div id="actdiv" style="display: none;">
            		<table cellpadding=0 cellspacing=0 border=0>
            		    <tr>
            			<td class="pt5" valign="top"> 
            			    <select name="actions" class="selbox">
            				<option value="<?php echo $this->_tpl_vars['inbox_acts']; ?>
"><?php echo $this->_tpl_vars['inbox_acts']; ?>
</option>
            				<option value="<?php echo $this->_tpl_vars['admact_memaddfr']; ?>
"><?php echo $this->_tpl_vars['admact_memaddfr']; ?>
</option>
            				<?php if ($this->_tpl_vars['msg_multi'] == '1'): ?><option value="<?php echo $this->_tpl_vars['admact_memmsg']; ?>
"><?php echo $this->_tpl_vars['admact_memmsg']; ?>
</option><?php endif; ?>
            				<?php if ($this->_tpl_vars['msg_block'] == '1'): ?><option value="<?php echo $this->_tpl_vars['blocked_act4']; ?>
"><?php echo $this->_tpl_vars['blocked_act4']; ?>
</option><option value="<?php echo $this->_tpl_vars['blocked_act5']; ?>
"><?php echo $this->_tpl_vars['blocked_act5']; ?>
</option><?php endif; ?>
            				<?php if ($this->_tpl_vars['sbtn'] == 'myusubs'): ?><option value="<?php echo $this->_tpl_vars['uch_txt15x']; ?>
"><?php echo $this->_tpl_vars['uch_txt15x']; ?>
</option><?php endif; ?>
            			    </select>
            			</td>
            			<td class="pt5" valign="bottom">&nbsp;<input type="submit" name="goact" value="<?php echo $this->_tpl_vars['btn_apply']; ?>
" class="fb"></td>
            		    </tr>
            		</table>
            	    </div>
                    <?php endif; ?>
                    
                    <?php if ($this->_tpl_vars['btn'] == 'adm_members' || ( $this->_tpl_vars['sbtn'] == 'adm_search' && $_REQUEST['searchm'] != "" )): ?>
                    <div id="actdiv" style="display: none;">
                	<table cellpadding=0 cellspacing=0 border=0>
                	    <tr>
                		<td class="pt5" valign="top">
                		    <select name="actions" class="selbox">
                			<option value="<?php echo $this->_tpl_vars['inbox_acts']; ?>
"><?php echo $this->_tpl_vars['inbox_acts']; ?>
</option>
                			<?php if ($this->_tpl_vars['sbtn'] != 'adm_banned'): ?>
                			<option value="<?php echo $this->_tpl_vars['act_frenable']; ?>
"><?php echo $this->_tpl_vars['act_frenable']; ?>
</option>
                			<option value="<?php echo $this->_tpl_vars['act_frdisable']; ?>
"><?php echo $this->_tpl_vars['act_frdisable']; ?>
</option>
                			<option value="<?php echo $this->_tpl_vars['adm_memupact1']; ?>
"><?php echo $this->_tpl_vars['adm_memupact1']; ?>
</option>
                			<option value="<?php echo $this->_tpl_vars['adm_memupact2']; ?>
"><?php echo $this->_tpl_vars['adm_memupact2']; ?>
</option>
                			<?php endif; ?>
                			<option value="<?php echo $this->_tpl_vars['admact_memban']; ?>
"><?php echo $this->_tpl_vars['admact_memban']; ?>
</option>
                			<option value="<?php echo $this->_tpl_vars['admact_memunban']; ?>
"><?php echo $this->_tpl_vars['admact_memunban']; ?>
</option>
                			<?php if ($this->_tpl_vars['sbtn'] != 'adm_banned'): ?>
                			<option value="<?php echo $this->_tpl_vars['admact_mememail']; ?>
"><?php echo $this->_tpl_vars['admact_mememail']; ?>
</option>
                			<option value="<?php echo $this->_tpl_vars['admact_memmsg']; ?>
"><?php echo $this->_tpl_vars['admact_memmsg']; ?>
</option>
					<option value="<?php echo $this->_tpl_vars['admact_memdela']; ?>
"><?php echo $this->_tpl_vars['admact_memdela']; ?>
</option>
					<option value="<?php echo $this->_tpl_vars['admact_memdeli']; ?>
"><?php echo $this->_tpl_vars['admact_memdeli']; ?>
</option>
					<option value="<?php echo $this->_tpl_vars['admact_memdelv']; ?>
"><?php echo $this->_tpl_vars['admact_memdelv']; ?>
</option>
					<option value="<?php echo $this->_tpl_vars['admact_memdelm']; ?>
"><?php echo $this->_tpl_vars['admact_memdelm']; ?>
</option>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['sbtn'] == 'adm_banned'): ?>
					<option value="<?php echo $this->_tpl_vars['admact_memdelban']; ?>
"><?php echo $this->_tpl_vars['admact_memdelban']; ?>
</option>
					<?php endif; ?>
                		    </select>
                		</td>
                		<td class="pt5" valign="bottom">&nbsp;<input type="submit" name="goact" value="<?php echo $this->_tpl_vars['btn_apply']; ?>
" class="fb"></td>
                	    </tr>
                	</table>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($this->_tpl_vars['sbtn'] == 'comments'): ?>
                    <div id="actdiv" style="display: none;">
                	<table cellpadding=0 cellspacing=0 border=0>
                	    <tr>
                		<td class="pt5" valign="top">
                		    <select name="actions" class="selbox">
                			<option value="<?php echo $this->_tpl_vars['inbox_acts']; ?>
"><?php echo $this->_tpl_vars['inbox_acts']; ?>
</option>
                			<?php if ($this->_tpl_vars['section'] == 'profile'): ?>
                			<option value="<?php echo $this->_tpl_vars['comm_app3']; ?>
"><?php echo $this->_tpl_vars['comm_app3']; ?>
</option>
                			<option value="<?php echo $this->_tpl_vars['comm_app4']; ?>
"><?php echo $this->_tpl_vars['comm_app4']; ?>
</option>
                			<option value="<?php echo $this->_tpl_vars['act_delrescomm']; ?>
"><?php echo $this->_tpl_vars['act_delrescomm']; ?>
</option>
                			<option value="<?php echo $this->_tpl_vars['act_delselcomm']; ?>
"><?php echo $this->_tpl_vars['act_delselcomm']; ?>
</option>
                			<?php else: ?>
                			    <?php if ($_REQUEST['id'] == ""): ?>
                			<option value="<?php echo $this->_tpl_vars['act_delcomm']; ?>
"><?php echo $this->_tpl_vars['act_delcomm']; ?>
</option>
                			    <?php else: ?>
                			<option value="<?php echo $this->_tpl_vars['comm_app3']; ?>
"><?php echo $this->_tpl_vars['comm_app3']; ?>
</option>
                			<option value="<?php echo $this->_tpl_vars['comm_app4']; ?>
"><?php echo $this->_tpl_vars['comm_app4']; ?>
</option>
                			<option value="<?php echo $this->_tpl_vars['act_delrescomm']; ?>
"><?php echo $this->_tpl_vars['act_delrescomm']; ?>
</option>
                			<option value="<?php echo $this->_tpl_vars['act_delselcomm']; ?>
"><?php echo $this->_tpl_vars['act_delselcomm']; ?>
</option>
                			    <?php endif; ?>
                			<?php endif; ?>
                		    </select>
                		</td>
                		<td class="pt5" valign="bottom">&nbsp;<input type="submit" name="goact" value="<?php echo $this->_tpl_vars['btn_apply']; ?>
" class="fb"></td>
                	    </tr>
                	</table>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($this->_tpl_vars['sbtn'] == 'wm' || $this->_tpl_vars['sbtn'] == 'ads' || $this->_tpl_vars['sbtn'] == 'wmaudio' || $this->_tpl_vars['sbtn'] == 'manage' || $this->_tpl_vars['sbtn'] == 'siteads' || $this->_tpl_vars['sbtn'] == 'tpl' || $this->_tpl_vars['sbtn'] == 'tads'): ?>
                    <div id="actdiv" style="display: none;">
                	<table cellpadding=0 cellspacing=0 border=0>
                	    <tr>
                		<td class="pt5" valign="top">
                		    <select name="actions" class="selbox">
                			<option value="<?php echo $this->_tpl_vars['inbox_acts']; ?>
"><?php echo $this->_tpl_vars['inbox_acts']; ?>
</option>
                			<option value="<?php echo $this->_tpl_vars['act_frenable']; ?>
"><?php echo $this->_tpl_vars['act_frenable']; ?>
</option>
                                        <option value="<?php echo $this->_tpl_vars['act_frdisable']; ?>
"><?php echo $this->_tpl_vars['act_frdisable']; ?>
</option>
                                        <?php if ($this->_tpl_vars['sbtn'] != 'siteads' && $this->_tpl_vars['sbtn'] != 'tpl'): ?><option value="<?php echo $this->_tpl_vars['inbox_itblact6']; ?>
"><?php echo $this->_tpl_vars['inbox_itblact6']; ?>
</option><?php endif; ?>
                		    </select>
                		</td>
                		<td class="pt5" valign="bottom">&nbsp;<input type="submit" name="goact" value="<?php echo $this->_tpl_vars['btn_apply']; ?>
" class="fb"></td>
                	    </tr>
                	</table>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($this->_tpl_vars['sbtn'] == 'guest'): ?>
                    <div id="actdiv" style="display: none;">
                	<table cellpadding=0 cellspacing=0 border=0>
                	    <tr>
                		<td class="pt5" valign="top">
                		    <select name="actions" class="selbox">
                			<option value="<?php echo $this->_tpl_vars['inbox_acts']; ?>
"><?php echo $this->_tpl_vars['inbox_acts']; ?>
</option>
                			<option value="<?php echo $this->_tpl_vars['admact_mreset']; ?>
"><?php echo $this->_tpl_vars['admact_mreset']; ?>
</option>
                			<option value="<?php echo $this->_tpl_vars['inbox_itblact6']; ?>
"><?php echo $this->_tpl_vars['inbox_itblact6']; ?>
</option>
                		    </select>
                		</td>
                		<td class="pt5" valign="bottom">&nbsp;<input type="submit" name="goact" value="<?php echo $this->_tpl_vars['btn_apply']; ?>
" class="fb"></td>
                	    </tr>
                	</table>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($this->_tpl_vars['sbtn'] == 'langs'): ?>
                    <div id="actdiv" style="display: none;">
                	<table cellpadding=0 cellspacing=0 border=0>
                	    <tr>
                		<td class="pt5" valign="top">
                		    <select name="actions" class="selbox">
                			<option value="<?php echo $this->_tpl_vars['inbox_acts']; ?>
"><?php echo $this->_tpl_vars['inbox_acts']; ?>
</option>
                			<option value="<?php echo $this->_tpl_vars['act_frenable']; ?>
"><?php echo $this->_tpl_vars['act_frenable']; ?>
</option>
                                        <option value="<?php echo $this->_tpl_vars['act_frdisable']; ?>
"><?php echo $this->_tpl_vars['act_frdisable']; ?>
</option>
                			<option value="<?php echo $this->_tpl_vars['inbox_itblact6']; ?>
"><?php echo $this->_tpl_vars['inbox_itblact6']; ?>
</option>
                		    </select>
                		</td>
                		<td class="pt5" valign="bottom">&nbsp;<input type="submit" name="goact" value="<?php echo $this->_tpl_vars['btn_apply']; ?>
" class="fb"></td>
                	    </tr>
                	</table>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($this->_tpl_vars['sbtn'] == 'resp'): ?>
                    <div id="actdiv" style="display: none;">
                	<table cellpadding=0 cellspacing=0 border=0>
                	    <tr>
                		<td class="pt5" valign="top">
                		    <select name="actions" class="selbox">
                		    <?php if ($_REQUEST['st'] == ""): ?>
                			<option value="<?php echo $this->_tpl_vars['inbox_acts']; ?>
"><?php echo $this->_tpl_vars['inbox_acts']; ?>
</option>
                			<option value="<?php echo $this->_tpl_vars['fresp_txt39']; ?>
"><?php echo $this->_tpl_vars['fresp_txt39']; ?>
</option>
                		    <?php else: ?>
                			<option value="<?php echo $this->_tpl_vars['inbox_acts']; ?>
"><?php echo $this->_tpl_vars['inbox_acts']; ?>
</option>
                			<option value="<?php echo $this->_tpl_vars['fresp_txt40']; ?>
"><?php echo $this->_tpl_vars['fresp_txt40']; ?>
</option>
                			<option value="<?php echo $this->_tpl_vars['fresp_txt400']; ?>
"><?php echo $this->_tpl_vars['fresp_txt400']; ?>
</option>
                			<option value="<?php echo $this->_tpl_vars['fresp_txt41']; ?>
"><?php echo $this->_tpl_vars['fresp_txt41']; ?>
</option>
                		    <?php endif; ?>
                		    </select>
                		</td>
                		<td class="pt5" valign="bottom">&nbsp;<input type="submit" name="goact" value="<?php echo $this->_tpl_vars['btn_apply']; ?>
" class="fb"></td>
                	    </tr>
                	</table>
                    </div>
                    <?php endif; ?>
                    
                    