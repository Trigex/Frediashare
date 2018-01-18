<?php /* Smarty version 2.6.26, created on 2009-11-10 15:26:13
         compiled from administration/main_paging.tpl */ ?>
<!-- BEGIN ADMIN AREA PAGING CONFIGURATION TABLE -->
<br>
<table align=center width="950" border=0 cellpadding=0 cellspacing=0>
    <tr>
	<td>
	    <div id="paging_response" class="nopad"></div>
	</td>
    </tr>
</table>
<table align=center width="950" border=0 cellpadding=2 cellspacing=0>
    <tr>
	<td align="left" class=""><h1><?php echo $this->_tpl_vars['adm_setpagheading']; ?>
</h1></td>
    </tr>
</table>
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0" class="br1">
    <tr>
	<td class=grey>
	    <table cellpadding=10 cellspacing=0 width="100%" border=0>
		<tr>
		    <td colspan=2><?php echo $this->_tpl_vars['adm_setpagtxt']; ?>
</td>
		</tr>
		<tr>
		    <td width="50%" align=center valign="top">
			<table cellpadding=3 cellspacing=1 border=0>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['adm_setpag1']; ?>
</td>
				<td align="left" class="lp1">
				    <form id="form_paging_myaudio">
					<table cellpadding=0 cellspacing=0 border=0 align=left>
					    <tr>
					        <td><input type="text" name="pag_myaudio" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_myaudio']; ?>
"></td>
						<td align=left class=lp1><input type="button" name="pag_myaudiobtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_myaudio();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['adm_setpag2']; ?>
</td>
				<td align=left class="lp1">
				    <form id="form_paging_myimages">
				        <table cellpadding=0 cellspacing=0 border=0 align=left>
					    <tr>
					        <td><input type="text" name="pag_myimages" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_myimages']; ?>
"></td>
					        <td align=left valign=middle class=lp1><input type="button" name="pag_myimagesbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_myimages();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['adm_setpag3']; ?>
</td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_myvideos">
					<table cellpadding=0 cellspacing=0 border=0 align=left>
					    <tr>
						<td><input type="text" name="pag_myvideos" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_myvideos']; ?>
"></td>
						<td align=left valign=middle class=lp1><input type="button" name="pag_myvideosbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_myvideos();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['adm_setpag4']; ?>
</td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_inbox">
				        <table cellpadding=0 cellspacing=0 border=0 align=left>
				    	    <tr>
					        <td><input type="text" name="pag_inbox" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_inbox']; ?>
"></td>
					        <td align=left valign=middle class=lp1><input type="button" name="pag_inboxbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_inbox();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['adm_setpag5']; ?>
</td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_outbox">
				        <table cellpadding=0 cellspacing=0 border=0 align=left>
				    	    <tr>
					        <td><input type="text" name="pag_outbox" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_outbox']; ?>
"></td>
					        <td align=left valign=middle class=lp1><input type="button" name="pag_outboxbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_outbox();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['adm_setpag51']; ?>
</td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_blocked">
				        <table cellpadding=0 cellspacing=0 border=0 align=left>
				    	    <tr>
					        <td><input type="text" name="pag_blocked" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_blocked']; ?>
"></td>
					        <td align=left valign=middle class=lp1><input type="button" name="pag_blockedbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_blocked();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['mysubs_heading']; ?>
: </td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_mysubs">
				        <table cellpadding=0 cellspacing=0 border=0 align=left>
					    <tr>
					        <td><input type="text" name="pag_mysubs" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_mysubs']; ?>
"></td>
					        <td align=left valign=middle class=lp1><input type="button" name="pag_mysubsbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_mysubs();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['adm_setpag6']; ?>
</td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_myfav">
					<table cellpadding=0 cellspacing=0 border=0 align=left>
					    <tr>
						<td><input type="text" name="pag_myfav" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_myfav']; ?>
"></td>
						<td align=left valign=middle class=lp1><input type="button" name="pag_myfavbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_myfav();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['adm_setpag7']; ?>
</td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_myfri">
					<table cellpadding=0 cellspacing=0 border=0 align=left>
					    <tr>
					        <td><input type="text" name="pag_myfri" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_myfri']; ?>
"></td>
					        <td align=left valign=middle class=lp1><input type="button" name="pag_myfribtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_myfri();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['adm_setpag8']; ?>
</td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_mypla">
				        <table cellpadding=0 cellspacing=0 border=0 align=left>
					    <tr>
					        <td><input type="text" name="pag_mypla" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_mypla']; ?>
"></td>
					        <td align=left valign=middle class=lp1><input type="button" name="pag_myplabtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_mypla();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['adm_setpag9']; ?>
</td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_comments">
				        <table cellpadding=0 cellspacing=0 border=0 align=left>
					    <tr>
					        <td><input type="text" name="pag_comm" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_comments']; ?>
"></td>
					        <td align=left valign=middle class=lp1><input type="button" name="pag_commbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_comments();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['up_opt19']; ?>
</td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_responses">
				        <table cellpadding=0 cellspacing=0 border=0 align=left>
					    <tr>
					        <td><input type="text" name="pag_resp" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_fileresp']; ?>
"></td>
					        <td align=left valign=middle class=lp1><input type="button" name="pag_respbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_responses();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['plist_txt1']; ?>
: </td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_playlist">
				        <table cellpadding=0 cellspacing=0 border=0 align=left>
					    <tr>
					        <td><input type="text" name="pag_plist" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_plist']; ?>
"></td>
					        <td align=left valign=middle class=lp1><input type="button" name="pag_plistbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_playlist();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			</table>
		    </td>
		    
		    <td width="50%" valign=top align="center">
			<table cellpadding=3 cellspacing=1 border=0>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['adm_setpag10']; ?>
</td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_audio">
				        <table cellpadding=0 cellspacing=0 border=0 align=left>
				    	    <tr>
					        <td><input type="text" name="pag_audio" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_audio']; ?>
"></td>
						<td align=left valign=middle class=lp1><input type="button" name="pag_audiobtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_audio();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['adm_setpag11']; ?>
</td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_images">
					<table cellpadding=0 cellspacing=0 border=0 align=left>
					    <tr>
					        <td><input type="text" name="pag_images" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_images']; ?>
"></td>
					        <td align=left valign=middle class=lp1><input type="button" name="pag_imagesbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_images();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['adm_setpag12']; ?>
</td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_videos">
				        <table cellpadding=0 cellspacing=0 border=0 align=left>
					    <tr>
					        <td><input type="text" name="pag_videos" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_videos']; ?>
"></td>
					        <td align=left valign=middle class=lp1><input type="button" name="pag_videosbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_videos();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['adm_setpag13']; ?>
</td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_categ">
					<table cellpadding=0 cellspacing=0 border=0 align=left>
					    <tr>
					        <td><input type="text" name="pag_categ" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_categ']; ?>
"></td>
						<td align=left valign=middle class=lp1><input type="button" name="pag_categbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_categ();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['adm_setpag14']; ?>
</td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_member">
				        <table cellpadding=0 cellspacing=0 border=0 align=left>
					    <tr>
						<td><input type="text" name="pag_member" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_member']; ?>
"></td>
						<td align=left valign=middle class=lp1><input type="button" name="pag_memberbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_member();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['adm_setpag17']; ?>
</td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_search">
					<table cellpadding=0 cellspacing=0 border=0 align=left>
					    <tr>
						<td><input type="text" name="pag_search" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_search']; ?>
"></td>
						<td align=left valign=middle class=lp1><input type="button" name="pag_searchbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_search();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['myusubs_heading']; ?>
: </td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_myusubs">
				        <table cellpadding=0 cellspacing=0 border=0 align=left>
					    <tr>
					        <td><input type="text" name="pag_myusubs" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_myusubs']; ?>
"></td>
					        <td align=left valign=middle class=lp1><input type="button" name="pag_myusubsbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_myusubs();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['adm_setpag15']; ?>
</td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_ufav">
					<table cellpadding=0 cellspacing=0 border=0 align=left>
					    <tr>
						<td><input type="text" name="pag_ufav" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_ufav']; ?>
"></td>
						<td align=left valign=middle class=lp1><input type="button" name="pag_ufavbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_ufav();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['adm_setpag16']; ?>
</td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_ufri">
					<table cellpadding=0 cellspacing=0 border=0 align=left>
					    <tr>
						<td><input type="text" name="pag_ufri" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_ufri']; ?>
"></td>
						<td align=left valign=middle class=lp1><input type="button" name="pag_ufribtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_ufri();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
                                <td align=right class="types"><?php echo $this->_tpl_vars['adm_setpag18']; ?>
</td>
                                <td align=left valign=bottom class="lp1">
                                    <form id="form_paging_bestfiles">
                                        <table cellpadding=0 cellspacing=0 border=0 align=left>
                                            <tr>
                                                <td><input type="text" name="pag_bestfiles" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_bestfiles']; ?>
"></td>
                                                <td align=left valign=middle class=lp1><input type="button" name="pag_bestbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_bestfiles();"></td>
                                            </tr>
                                        </table>
                                    </form>
                                </td>
                            </tr>
			    <tr>
                                <td align=right class="types"><?php echo $this->_tpl_vars['adm_setpag19']; ?>
</td>
                                <td align=left valign=bottom class="lp1">
                                    <form id="form_paging_featured">
                                        <table cellpadding=0 cellspacing=0 border=0 align=left>
                                            <tr>
                                                <td><input type="text" name="pag_feat" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_featured']; ?>
"></td>
                                                <td align=left valign=middle class=lp1><input type="button" name="pag_featbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_featured();"></td>
                                            </tr>
                                        </table>
                                    </form>
                                </td>
                            </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['qlist_txt4']; ?>
: </td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_quicklist">
				        <table cellpadding=0 cellspacing=0 border=0 align=left>
					    <tr>
					        <td><input type="text" name="pag_qlist" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_qlist']; ?>
"></td>
					        <td align=left valign=middle class=lp1><input type="button" name="pag_qlistbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_quicklist();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['plist_txt60']; ?>
: </td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_playlist2">
				        <table cellpadding=0 cellspacing=0 border=0 align=left>
					    <tr>
					        <td><input type="text" name="pag_plist2" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_plist2']; ?>
"></td>
					        <td align=left valign=middle class=lp1><input type="button" name="pag_plistbtn2" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_playlist2();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			    <tr>
				<td align=right class="types"><?php echo $this->_tpl_vars['uch_thl4']; ?>
: </td>
				<td align=left valign=bottom class="lp1">
				    <form id="form_paging_chan">
				        <table cellpadding=0 cellspacing=0 border=0 align=left>
					    <tr>
					        <td><input type="text" name="pag_chan" class="ff" size="3" value="<?php echo $this->_tpl_vars['paging_chan']; ?>
"></td>
					        <td align=left valign=middle class=lp1><input type="button" name="pag_chanbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setpagbtn']; ?>
" onClick="setpag_chan();"></td>
					    </tr>
					</table>
				    </form>
				</td>
			    </tr>
			</table>
		    </td>
		</tr>
	    </table>
	</td>
    </tr>
</table>
<!-- END ADMIN AREA PAGING CONFIGURATION TABLE -->