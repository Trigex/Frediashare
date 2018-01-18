<script type="text/javascript">
{literal}
function setvpage_pcn() { if ( document.setvpageform.vpage_pcnbox.checked == false ) { document.setvpageform.vpage_pcnbox_pos[0].disabled = true; document.setvpageform.vpage_pcnbox_pos[1].disabled = true;  } else if ( document.setvpageform.vpage_pcnbox.checked == true ) { document.setvpageform.vpage_pcnbox_pos[0].disabled = false; document.setvpageform.vpage_pcnbox_pos[1].disabled = false; } }
function setvpage_ftabs() { 
    if ( document.setvpageform.vpage_ftabs.checked == false ) { 
	document.setvpageform.vpage_ftabslist[0].disabled = true; 
	document.setvpageform.vpage_ftabslist[1].disabled = true; 

	document.setvpageform.vpage_ftabs_t1.disabled = true; 
	if ( document.setvpageform.vpage_ftabs_t1.checked == true ) {
	    document.setvpageform.vpage_ftabs_t1_box[0].disabled = true; 
	    document.setvpageform.vpage_ftabs_t1_box[1].disabled = true; 
	}
	
	document.setvpageform.vpage_ftabs_t5.disabled = true; 
	if ( document.setvpageform.vpage_ftabs_t5.checked == true ) {
	    document.setvpageform.vpage_ftabs_t5_box[0].disabled = true; 
	    document.setvpageform.vpage_ftabs_t5_box[1].disabled = true; 
	}
    } else if ( document.setvpageform.vpage_ftabs.checked == true ) { 
	document.setvpageform.vpage_ftabslist[0].disabled = false; 
	document.setvpageform.vpage_ftabslist[1].disabled = false; 
	
	document.setvpageform.vpage_ftabs_t1.disabled = false; 
	if ( document.setvpageform.vpage_ftabs_t1.checked == true ) {
	    document.setvpageform.vpage_ftabs_t1_box[0].disabled = false; 
	    document.setvpageform.vpage_ftabs_t1_box[1].disabled = false; 
	}
	
	document.setvpageform.vpage_ftabs_t5.disabled = false; 
	if ( document.setvpageform.vpage_ftabs_t5.checked == true ) {
	    document.setvpageform.vpage_ftabs_t5_box[0].disabled = false; 
	    document.setvpageform.vpage_ftabs_t5_box[1].disabled = false; 
	}
    } 
}
function setvpage_tags() { if ( document.setvpageform.vpage_ftags.checked == false ) { document.setvpageform.vpage_ftags_box[0].disabled = true; document.setvpageform.vpage_ftags_box[1].disabled = true;  } else if ( document.setvpageform.vpage_ftags.checked == true ) { document.setvpageform.vpage_ftags_box[0].disabled = false; document.setvpageform.vpage_ftags_box[1].disabled = false; } }
function setvpage_ftabs_t1() { 
    if ( document.setvpageform.vpage_ftabs_t1.checked == false ) { 
	document.setvpageform.vpage_ftabs_t1_box[0].disabled = true; 
	document.setvpageform.vpage_ftabs_t1_box[1].disabled = true;  
    } else if ( document.setvpageform.vpage_ftabs_t1.checked == true ) { 
	document.setvpageform.vpage_ftabs_t1_box[0].disabled = false; 
	document.setvpageform.vpage_ftabs_t1_box[1].disabled = false; 
    } 
}
function setvpage_ftabs_t5() { 
    if ( document.setvpageform.vpage_ftabs_t5.checked == false ) { 
	document.setvpageform.vpage_ftabs_t5_box[0].disabled = true; 
	document.setvpageform.vpage_ftabs_t5_box[1].disabled = true;  
    } else if ( document.setvpageform.vpage_ftabs_t5.checked == true ) { 
	document.setvpageform.vpage_ftabs_t5_box[0].disabled = false; 
	document.setvpageform.vpage_ftabs_t5_box[1].disabled = false; 
    } 
}
{/literal}
</script>
			<form id="setvpageform" name="setvpageform">
			    <fieldset>
				<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('vpagesettingsdiv'); ReverseContentDisplay('vpagesettingstxt'); changeclass_act('set9');"><span id="set9">{$adm_avtxt1}</span></a></legend>
				<div id="vpagesettingstxt" style="display: block;">{$adm_avtxt2}</div>
				<div id="vpagesettingsdiv" style="display: none;">
				<table cellpadding=2 cellspacing=0 border=0 align=center width="100%">
				
				    <tr>
					<td><input type="checkbox" name="vpage_fresp" checked disabled></td>
					<td>{$adm_avtxt24}</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="nopad">
					    <table cellpadding=2 cellspacing=0 border=0 align=left>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_fresp_box" value="c" {if $vpage_fresp_box eq "c"}checked{/if}></div>
						    </td>
						    <td valign="bottom">{$adm_avtxt9}</td>
						</tr>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_fresp_box" value="e" {if $vpage_fresp_box eq "e"}checked{/if}></div>
						    </td>
						    <td valign="bottom">{$adm_avtxt10}</td>
						</tr>
					    </table>
					</td>
				    </tr>
				    
				    <tr>
					<td><input type="checkbox" name="vpage_fcomm" checked disabled></td>
					<td>{$adm_avtxt25}</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="nopad">
					    <table cellpadding=2 cellspacing=0 border=0 align=left>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_fcomm_box" value="c" {if $vpage_fcomm_box eq "c"}checked{/if}></div>
						    </td>
						    <td valign="bottom">{$adm_avtxt9}</td>
						</tr>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_fcomm_box" value="e" {if $vpage_fcomm_box eq "e"}checked{/if}></div>
						    </td>
						    <td valign="bottom">{$adm_avtxt10}</td>
						</tr>
					    </table>
					</td>
				    </tr>
				    
				    <tr>
					<td width="10"><input type="checkbox" name="vpage_pcnbox" {if $vpage_pcnbox eq "1"}checked{/if} onclick="setvpage_pcn();"></td>
					<td>{$adm_avtxt3}</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="nopad">
					    <table cellpadding=2 cellspacing=0 border=0 align=left>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_pcnbox_pos" value="left" {if $vpage_pcnbox_pos eq "left"}checked{/if} {if $vpage_pcnbox eq "0"}disabled{/if}></div>
						    </td>
						    <td valign="bottom">{$adm_avtxt20}</td>
						</tr>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_pcnbox_pos" value="right" {if $vpage_pcnbox_pos eq "right"}checked{/if} {if $vpage_pcnbox eq "0"}disabled{/if}></div>
						    </td>
						    <td valign="bottom">{$adm_avtxt21}</td>
						</tr>
					    </table>
					</td>
				    </tr>
				    <tr>
					<td><input type="checkbox" name="vpage_userbox" disabled checked></td>
					<td>{$adm_avtxt3x}</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="nopad">
					    <table cellpadding=2 cellspacing=0 border=0 align=left>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_userdate" value="reg" {if $vpage_userdate eq "reg"}checked{/if}></div>
						    </td>
						    <td valign="bottom">{$adm_avtxt4}</td>
						</tr>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_userdate" value="login" {if $vpage_userdate eq "login"}checked{/if}></div>
						    </td>
						    <td valign="bottom">{$adm_avtxt5}</td>
						</tr>
						<tr>
						    <td><input type="checkbox" name="vpage_useronline" {if $vpage_useronline eq "1"}checked{/if}></td>
						    <td>{$adm_avtxt6}</td>
						</tr>
						<tr>
						    <td style="padding-top: 0px;"><input type="checkbox" name="vpage_userfcount" {if $vpage_userfcount eq "1"}checked{/if}></td>
						    <td>{$adm_avtxt7}</td>
						</tr>
					    </table>
					</td>
				    </tr>
				    
				    <tr>
					<td><input type="checkbox" name="nextprevbox" disabled checked></td>
					<td>{$adm_avtxt8}</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="nopad">
					    <table cellpadding=2 cellspacing=0 border=0 align=left>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_fdesc" value="c" {if $vpage_fdesc eq "c"}checked{/if}></div>
						    </td>
						    <td valign="bottom">{$adm_avtxt9}</td>
						</tr>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_fdesc" value="e" {if $vpage_fdesc eq "e"}checked{/if}></div>
						    </td>
						    <td valign="bottom">{$adm_avtxt10}</td>
						</tr>
					    </table>
					</td>
				    </tr>
				    
				    <tr>
					<td><input type="checkbox" name="vpage_ql" disabled checked></td>
					<td>{$adm_avtxt26}</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="nopad">
					    <table cellpadding=2 cellspacing=0 border=0 align=left>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_fqlist_box" value="c" {if $vpage_fqlist_box eq "c"}checked{/if}></div>
						    </td>
						    <td valign="bottom">{$adm_avtxt9}</td>
						</tr>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_fqlist_box" value="e" {if $vpage_fqlist_box eq "e"}checked{/if}></div>
						    </td>
						    <td valign="bottom">{$adm_avtxt10}</td>
						</tr>
					    </table>
					</td>
				    </tr>
				    
				    <tr>
					<td><input type="checkbox" name="vpage_pl" disabled checked></td>
					<td>{$pr_chinfob36}:</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="nopad">
					    <table cellpadding=2 cellspacing=0 border=0 align=left>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_fplist_box" value="c" {if $vpage_fplist_box eq "c"}checked{/if}></div>
						    </td>
						    <td valign="bottom">{$adm_avtxt9}</td>
						</tr>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_fplist_box" value="e" {if $vpage_fplist_box eq "e"}checked{/if}></div>
						    </td>
						    <td valign="bottom">{$adm_avtxt10}</td>
						</tr>
					    </table>
					</td>
				    </tr>
				    
				    <tr>
					<td><input type="checkbox" name="vpage_ftabs" {if $vpage_ftabs eq "1"}checked{/if} onclick="setvpage_ftabs();"></td>
					<td>{$adm_avtxt11}</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="nopad">
					    <table cellpadding=2 cellspacing=0 border=0 align=left>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_ftabslist" value="1" {if $vpage_ftabslist eq "1"}checked{/if} {if $vpage_ftabs eq "0"}disabled{/if}></div>
						    </td>
						    <td valign="bottom">{$adm_avtxt12}</td>
						</tr>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_ftabslist" value="2" {if $vpage_ftabslist eq "2"}checked{/if} {if $vpage_ftabs eq "0"}disabled{/if}></div>
						    </td>
						    <td valign="bottom">{$adm_avtxt13}</td>
						</tr>
						<tr>
						    <td><input type="checkbox" name="vpage_ftabs_t1" {if $vpage_ftabs_t1 eq "1"}checked{/if} {if $vpage_ftabs eq "0"}disabled{/if} onclick="setvpage_ftabs_t1();"></td>
						    <td>{$adm_avtxt14}</td>
						</tr>
						<tr>
						    <td class="nopad"></td>
						    <td class="nopad">
							<table cellpadding=2 cellspacing=0 border=0 align=left>
							    <tr>
								<td>
								    <div><input type="radio" name="vpage_ftabs_t1_box" value="c" {if $vpage_ftabs_t1_box eq "c"}checked{/if} {if $vpage_ftabs_t1 eq "0"}disabled{/if}></div>
								</td>
								<td valign="bottom">{$adm_avtxt9}</td>
							    </tr>
							    <tr>
								<td>
								    <div><input type="radio" name="vpage_ftabs_t1_box" value="e" {if $vpage_ftabs_t1_box eq "e"}checked{/if} {if $vpage_ftabs_t1 eq "0"}disabled{/if}></div>
								</td>
								<td valign="bottom">{$adm_avtxt10}</td>
							    </tr>
							</table>
						    </td>
						</tr>
						<tr>
						    <td style="padding-top: 0px;"><input type="checkbox" name="vpage_ftabs_t5" {if $vpage_ftabs_t5 eq "1"}checked{/if} {if $vpage_ftabs eq "0"}disabled{/if} onclick="setvpage_ftabs_t5();"></td>
						    <td>{$adm_avtxt18}</td>
						</tr>
						<tr>
						    <td class="nopad"></td>
						    <td class="nopad">
							<table cellpadding=2 cellspacing=0 border=0 align=left>
							    <tr>
								<td>
								    <div><input type="radio" name="vpage_ftabs_t5_box" value="c" {if $vpage_ftabs_t5_box eq "c"}checked{/if} {if $vpage_ftabs_t5 eq "0"}disabled{/if}></div>
								</td>
								<td valign="bottom">{$adm_avtxt9}</td>
							    </tr>
							    <tr>
								<td>
								    <div><input type="radio" name="vpage_ftabs_t5_box" value="e" {if $vpage_ftabs_t5_box eq "e"}checked{/if} {if $vpage_ftabs_t5 eq "0"}disabled{/if}></div>
								</td>
								<td valign="bottom">{$adm_avtxt10}</td>
							    </tr>
							</table>
						    </td>
						</tr>
					    </table>
					</td>
				    </tr>
				    <tr>
					<td><input type="checkbox" name="vpage_ftags" {if $vpage_ftags eq "1"}checked{/if} onclick="setvpage_tags();"></td>
					<td>{$adm_avtxt19}</td>
				    </tr>
				    <tr>
					<td></td>
					<td class="nopad">
					    <table cellpadding=2 cellspacing=0 border=0 align=left>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_ftags_box" value="c" {if $vpage_ftags_box eq "c"}checked{/if} {if $vpage_ftags eq "0"}disabled{/if}></div>
						    </td>
						    <td valign="bottom">{$adm_avtxt9}</td>
						</tr>
						<tr>
						    <td>
							<div><input type="radio" name="vpage_ftags_box" value="e" {if $vpage_ftags_box eq "e"}checked{/if} {if $vpage_ftags eq "0"}disabled{/if}></div>
						    </td>
						    <td valign="bottom">{$adm_avtxt10}</td>
						</tr>
					    </table>
					</td>
				    </tr>
				    
				    <tr>
					<td colspan="2" class="pt10" align="left">
					    <table cellpadding="2" cellspacing="0" align="left" border=0>
						<tr>
						    <td align="left" width="10"><input type="button" name="savesetvpagebtn" class="fb" value="{$adm_setgensave}" onclick="setvpage_settings();"></td>
						    <td align="left" width="300"><input type="button" name="savesetcancel" class="fb" value="{$adm_playcancelbtn}" onclick="ReverseContentDisplay('vpagesettingsdiv'); ReverseContentDisplay('vpagesettingstxt'); changeclass_act('set9');"></td>
						</tr>
						<tr>
						    <td colspan="2" align="left"><div id="setvpageresp" align="left"></div></td>
						</tr>
					    </table>
					</td>
				    </tr>
				</table>
			    </fieldset>
			</form>
