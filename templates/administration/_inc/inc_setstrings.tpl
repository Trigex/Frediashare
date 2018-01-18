		    <form id="setstringform">
		    <fieldset>
		    <legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('stringsetdiv'); ReverseContentDisplay('stringsettxt'); changeclass_act('set8');"><span id="set8">{$adm_setleg6}</span></a></legend>
			<div id="stringsettxt" style="display: block;">{$adm_setleg6txt}</div>
			<div id="stringsetdiv" style="display: none;">
			<table cellpadding=3 cellspacing=1 align=center border=0 width="100%">
			    <tr><td width="20"></td><td align=left width="230">{$adm_setgenmisc1}</td><td align="left" class="lp1" width="100"><input type="text" style="width: 30px;" name="pp_pmin" class="ff" value="{if $smarty.request.pp_pmin ne ""}{$smarty.request.pp_pmin}{else}{$pp_pmin}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc2}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="pp_pmax" class="ff" value="{if $smarty.request.pp_pmax ne ""}{$smarty.request.pp_pmax}{else}{$pp_pmax}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc3}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="sp_umin" class="ff" value="{if $smarty.request.sp_umin ne ""}{$smarty.request.sp_umin}{else}{$sp_umin}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc4}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="sp_umax" class="ff" value="{if $smarty.request.sp_umax ne ""}{$smarty.request.sp_umax}{else}{$sp_umax}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc5}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="sp_pmin" class="ff" value="{if $smarty.request.sp_pmin ne ""}{$smarty.request.sp_pmin}{else}{$sp_pmin}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc6}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="sp_pmax" class="ff" value="{if $smarty.request.sp_pmax ne ""}{$smarty.request.sp_pmax}{else}{$sp_pmax}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc7}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="se_min" class="ff" value="{if $smarty.request.se_min ne ""}{$smarty.request.se_min}{else}{$se_min}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc8}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="se_max" class="ff" value="{if $smarty.request.se_max ne ""}{$smarty.request.se_max}{else}{$se_max}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc9}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="fi_timin" class="ff" value="{if $smarty.request.fi_timin ne ""}{$smarty.request.fi_timin}{else}{$fi_timin}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc10}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="fi_timax" class="ff" value="{if $smarty.request.fi_timax ne ""}{$smarty.request.fi_timax}{else}{$fi_timax}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc11}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="fi_demin" class="ff" value="{if $smarty.request.fi_demin ne ""}{$smarty.request.fi_demin}{else}{$fi_demin}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc12}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="fi_demax" class="ff" value="{if $smarty.request.fi_demax ne ""}{$smarty.request.fi_demax}{else}{$fi_demax}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc13}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="fi_tamin" class="ff" value="{if $smarty.request.fi_tamin ne ""}{$smarty.request.fi_tamin}{else}{$fi_tamin}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc14}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="fi_tamax" class="ff" value="{if $smarty.request.fi_tamax ne ""}{$smarty.request.fi_tamax}{else}{$fi_tamax}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc15}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="ir_min" class="ff" value="{if $smarty.request.ir_min ne ""}{$smarty.request.ir_min}{else}{$ir_min}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc16}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="ir_max" class="ff" value="{if $smarty.request.ir_max ne ""}{$smarty.request.ir_max}{else}{$ir_max}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc17}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="fr_min" class="ff" value="{if $smarty.request.fr_min ne ""}{$smarty.request.fr_min}{else}{$fr_min}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc18}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="fr_max" class="ff" value="{if $smarty.request.fr_max ne ""}{$smarty.request.fr_max}{else}{$fr_max}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc19}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="comm_min" class="ff" value="{if $smarty.request.comm_min ne ""}{$smarty.request.comm_min}{else}{$comm_min}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc20}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="comm_max" class="ff" value="{if $smarty.request.comm_max ne ""}{$smarty.request.comm_max}{else}{$comm_max}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc21}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="subj_min" class="ff" value="{if $smarty.request.subj_min ne ""}{$smarty.request.subj_min}{else}{$subj_min}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc22}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="subj_max" class="ff" value="{if $smarty.request.subj_max ne ""}{$smarty.request.subj_max}{else}{$subj_max}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc23}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="inbox_min" class="ff" value="{if $smarty.request.inbox_min ne ""}{$smarty.request.inbox_min}{else}{$inbox_min}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc24}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="inbox_max" class="ff" value="{if $smarty.request.inbox_max ne ""}{$smarty.request.inbox_max}{else}{$inbox_max}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc25}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="pltitle_min" class="ff" value="{if $smarty.request.pltitle_min ne ""}{$smarty.request.pltitle_min}{else}{$pltitle_min}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr><td></td><td align=left>{$adm_setgenmisc26}</td><td align="left" class="lp1"><input type="text" style="width: 30px;" name="pltitle_max" class="ff" value="{if $smarty.request.pltitle_max ne ""}{$smarty.request.pltitle_max}{else}{$pltitle_max}{/if}" size="2"> {$adm_setgenmisc_char}</td></tr>
			    <tr>
				<td></td>
				<td colspan="2" style="padding: 10px 0px 0px 0px;">
                                    <table cellpadding="2" cellspacing="0" align="left" border=0>
                                        <tr>
                                            <td align="left" width="10"><input type="button" name="savestrsetbtn" class="fb" value="{$adm_setgensave}" onclick="setstring_settings();"></td>
                                            <td align="left" width="300"><input type="button" name="savestrsetcancel" class="fb" value="{$adm_playcancelbtn}" onclick="ReverseContentDisplay('stringsetdiv'); ReverseContentDisplay('stringsettxt'); changeclass_act('set8');"></td>
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
