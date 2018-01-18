<?php /* Smarty version 2.6.26, created on 2009-11-10 15:24:21
         compiled from administration/_inc/inc_setstrings.tpl */ ?>
		    <form id="setstringform">
		    <fieldset>
		    <legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('stringsetdiv'); ReverseContentDisplay('stringsettxt'); changeclass_act('set8');"><span id="set8"><?php echo $this->_tpl_vars['adm_setleg6']; ?>
</span></a></legend>
			<div id="stringsettxt" style="display: block;"><?php echo $this->_tpl_vars['adm_setleg6txt']; ?>
</div>
			<div id="stringsetdiv" style="display: none;">
			<table cellpadding=3 cellspacing=1 align=center border=0 width="100%">
			    <tr><td width="20"></td><td align=left width="230"><?php echo $this->_tpl_vars['adm_setgenmisc1']; ?>
</td><td align="left" class="lp1" width="100"><input type="text" style="width: 30px;" name="pp_pmin" class="ff" value="<?php if ($_REQUEST['pp_pmin'] != ""): ?><?php echo $_REQUEST['pp_pmin']; ?>
<?php else: ?><?php echo $this->_tpl_vars['pp_pmin']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc2']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="pp_pmax" class="ff" value="<?php if ($_REQUEST['pp_pmax'] != ""): ?><?php echo $_REQUEST['pp_pmax']; ?>
<?php else: ?><?php echo $this->_tpl_vars['pp_pmax']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc3']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="sp_umin" class="ff" value="<?php if ($_REQUEST['sp_umin'] != ""): ?><?php echo $_REQUEST['sp_umin']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sp_umin']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc4']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="sp_umax" class="ff" value="<?php if ($_REQUEST['sp_umax'] != ""): ?><?php echo $_REQUEST['sp_umax']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sp_umax']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc5']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="sp_pmin" class="ff" value="<?php if ($_REQUEST['sp_pmin'] != ""): ?><?php echo $_REQUEST['sp_pmin']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sp_pmin']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc6']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="sp_pmax" class="ff" value="<?php if ($_REQUEST['sp_pmax'] != ""): ?><?php echo $_REQUEST['sp_pmax']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sp_pmax']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc7']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="se_min" class="ff" value="<?php if ($_REQUEST['se_min'] != ""): ?><?php echo $_REQUEST['se_min']; ?>
<?php else: ?><?php echo $this->_tpl_vars['se_min']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc8']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="se_max" class="ff" value="<?php if ($_REQUEST['se_max'] != ""): ?><?php echo $_REQUEST['se_max']; ?>
<?php else: ?><?php echo $this->_tpl_vars['se_max']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc9']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="fi_timin" class="ff" value="<?php if ($_REQUEST['fi_timin'] != ""): ?><?php echo $_REQUEST['fi_timin']; ?>
<?php else: ?><?php echo $this->_tpl_vars['fi_timin']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc10']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="fi_timax" class="ff" value="<?php if ($_REQUEST['fi_timax'] != ""): ?><?php echo $_REQUEST['fi_timax']; ?>
<?php else: ?><?php echo $this->_tpl_vars['fi_timax']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc11']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="fi_demin" class="ff" value="<?php if ($_REQUEST['fi_demin'] != ""): ?><?php echo $_REQUEST['fi_demin']; ?>
<?php else: ?><?php echo $this->_tpl_vars['fi_demin']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc12']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="fi_demax" class="ff" value="<?php if ($_REQUEST['fi_demax'] != ""): ?><?php echo $_REQUEST['fi_demax']; ?>
<?php else: ?><?php echo $this->_tpl_vars['fi_demax']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc13']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="fi_tamin" class="ff" value="<?php if ($_REQUEST['fi_tamin'] != ""): ?><?php echo $_REQUEST['fi_tamin']; ?>
<?php else: ?><?php echo $this->_tpl_vars['fi_tamin']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc14']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="fi_tamax" class="ff" value="<?php if ($_REQUEST['fi_tamax'] != ""): ?><?php echo $_REQUEST['fi_tamax']; ?>
<?php else: ?><?php echo $this->_tpl_vars['fi_tamax']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc15']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="ir_min" class="ff" value="<?php if ($_REQUEST['ir_min'] != ""): ?><?php echo $_REQUEST['ir_min']; ?>
<?php else: ?><?php echo $this->_tpl_vars['ir_min']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc16']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="ir_max" class="ff" value="<?php if ($_REQUEST['ir_max'] != ""): ?><?php echo $_REQUEST['ir_max']; ?>
<?php else: ?><?php echo $this->_tpl_vars['ir_max']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc17']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="fr_min" class="ff" value="<?php if ($_REQUEST['fr_min'] != ""): ?><?php echo $_REQUEST['fr_min']; ?>
<?php else: ?><?php echo $this->_tpl_vars['fr_min']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc18']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="fr_max" class="ff" value="<?php if ($_REQUEST['fr_max'] != ""): ?><?php echo $_REQUEST['fr_max']; ?>
<?php else: ?><?php echo $this->_tpl_vars['fr_max']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc19']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="comm_min" class="ff" value="<?php if ($_REQUEST['comm_min'] != ""): ?><?php echo $_REQUEST['comm_min']; ?>
<?php else: ?><?php echo $this->_tpl_vars['comm_min']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc20']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="comm_max" class="ff" value="<?php if ($_REQUEST['comm_max'] != ""): ?><?php echo $_REQUEST['comm_max']; ?>
<?php else: ?><?php echo $this->_tpl_vars['comm_max']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc21']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="subj_min" class="ff" value="<?php if ($_REQUEST['subj_min'] != ""): ?><?php echo $_REQUEST['subj_min']; ?>
<?php else: ?><?php echo $this->_tpl_vars['subj_min']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc22']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="subj_max" class="ff" value="<?php if ($_REQUEST['subj_max'] != ""): ?><?php echo $_REQUEST['subj_max']; ?>
<?php else: ?><?php echo $this->_tpl_vars['subj_max']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc23']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="inbox_min" class="ff" value="<?php if ($_REQUEST['inbox_min'] != ""): ?><?php echo $_REQUEST['inbox_min']; ?>
<?php else: ?><?php echo $this->_tpl_vars['inbox_min']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc24']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="inbox_max" class="ff" value="<?php if ($_REQUEST['inbox_max'] != ""): ?><?php echo $_REQUEST['inbox_max']; ?>
<?php else: ?><?php echo $this->_tpl_vars['inbox_max']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc25']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="pltitle_min" class="ff" value="<?php if ($_REQUEST['pltitle_min'] != ""): ?><?php echo $_REQUEST['pltitle_min']; ?>
<?php else: ?><?php echo $this->_tpl_vars['pltitle_min']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr><td></td><td align=left><?php echo $this->_tpl_vars['adm_setgenmisc26']; ?>
</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="pltitle_max" class="ff" value="<?php if ($_REQUEST['pltitle_max'] != ""): ?><?php echo $_REQUEST['pltitle_max']; ?>
<?php else: ?><?php echo $this->_tpl_vars['pltitle_max']; ?>
<?php endif; ?>" size="2"> <?php echo $this->_tpl_vars['adm_setgenmisc_char']; ?>
</td></tr>
			    <tr>
				<td></td>
				<td colspan="2" style="padding: 10px 0px 0px 0px;">
                                    <table cellpadding="2" cellspacing="0" align="left" border=0>
                                        <tr>
                                            <td align="left" width="10"><input type="button" name="savestrsetbtn" class="fb" value="<?php echo $this->_tpl_vars['adm_setgensave']; ?>
" onclick="setstring_settings();"></td>
                                            <td align="left" width="300"><input type="button" name="savestrsetcancel" class="fb" value="<?php echo $this->_tpl_vars['adm_playcancelbtn']; ?>
" onclick="ReverseContentDisplay('stringsetdiv'); ReverseContentDisplay('stringsettxt'); changeclass_act('set8');"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="left"><div id="setstrresp"></div></td>
                                        </tr>
                            	    </table>
                                </td>
			    </tr>
			</table>
			</div>
		    </fieldset>
		    </form>