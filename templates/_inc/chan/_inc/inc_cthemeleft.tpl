    <table width="100%" border="0" cellpadding="2" cellspacing="1">
        <tr>
    	    <td colspan=2 class="nopad">
    		<table width="100%" border="0" cellpadding="2" cellspacing="0">
    		    <tr>
    			<td align="left"><a href="javascript:void(0)" onclick="ShowContent('layoutdiv'); HideContent('designdiv'); setclass_act('lay_pr'); changeclass_inact('des_pr');"><span id="lay_pr" class="act">{$pr_chinfop51}</span></a></td>
    			<td align="right"><a href="javascript:void(0)" onclick="ShowContent('designdiv'); HideContent('layoutdiv'); setclass_act('des_pr'); changeclass_inact('lay_pr');"><span id="des_pr">{$pr_chinfop73}</span></a></td></tr>
    		</table>
    	    </td>
    	</tr>
    </table>
    <div id="layoutdiv" style="display: block;">
    <table width="100%" border="0" cellpadding="2" cellspacing="1">
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr><td colspan=2>{$pr_chinfop52}</td></tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr>
    	    <td colspan="2">
    		{include file="_inc/chan/_inc/inc_cthemelayout.tpl"}
    	    </td>
        </tr>
    </table>
    </div>
    <div id="designdiv" style="display: none;">
    <table width="100%" border="0" cellpadding="2" cellspacing="1">
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr><td colspan=2>{$pr_chinfop74}</td></tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr>
    	    <td width="35%">{$pr_chinfop76}</td>
    	    <td valign="bottom"><input type="text" id="th_bgcol" name="th_bgcol" size="10" maxlength="7" class="cp" value="{$tinfo[0].th_bgcol}" onchange="set_bb_pagebg(this.value);"></td>
    	</tr>
    	<tr>
    	    <td valign="top">{$pr_chinfop77}</td>
    	    <td>{if $tinfo[0].th_bgsrcname ne ""}<span class="italic">{$tinfo[0].th_bgsrcname}</span>{else}<input type="file" class="ff" size="10" name="th_bgfile">{$pr_chinfob39}{/if}<br><input type="checkbox" name="th_delpic">{$mypr_avtxt4}</td>
    	</tr>
    	<tr>
    	    <td>{$pr_chinfop78}</td>
    	    <td>
    		<table cellpadding="2" cellspacing="0" border=0>
    		    <tr>
    		        <td valign="top" width="1"><input type="radio" name="th_bgrpt" value="1" {if $tinfo[0].th_bgrpt eq "1"}checked{/if} onclick="set_rpt('on');"></td><td valign="bottom">{$adm_fileyes}</td>
    		        <td valign="top" width="1"><input type="radio" name="th_bgrpt" value="0" {if $tinfo[0].th_bgrpt eq "0"}checked{/if} onclick="set_rpt('off');"></td><td valign="bottom">{$adm_fileno}</td>
    		    </tr>
    	        </table>
    	    </td>
    	</tr>
        <tr>
    	    <td>{$pr_chinfop79}</td>
    	    <td valign="bottom"><input type="text" id="th_linkcol" name="th_linkcol" size="10" maxlength="7" class="cp" value="{$tinfo[0].th_link}" onchange="set_bb_linkcol(this.value);"></td>
    	</tr>
    	<tr>
    	    <td>{$pr_chinfob40}</td>
    	    <td>
    		<table cellpadding="2" cellspacing="0" border=0>
    		    <tr>
    		        <td valign="top" width="1"><input type="radio" name="th_linkun" id="th_linkunyes" {if $tinfo[0].th_link_dec eq "1"}checked{/if} value="1" onclick="set_bb_linkunderlineon();"></td><td valign="bottom">{$adm_fileyes}</td>
    		        <td valign="top" width="1"><input type="radio" name="th_linkun" id="th_linkunno" {if $tinfo[0].th_link_dec eq "0"}checked{/if} value="0" onclick="set_bb_linkunderlineoff();"></td><td valign="bottom">{$adm_fileno}</td>
    		    </tr>
    	        </table>
    	    </td>
    	</tr>
        <tr>
    	    <td>{$pr_chinfop80}</td>
    	    <td valign="bottom"><input type="text" id="th_labelcol" name="th_labelcol" size="10" maxlength="7" class="cp" value="{$tinfo[0].th_label}" onchange="set_bb_labelcol(this.value);"></td>
    	</tr>
    	<tr>
    	    <td>{$pr_chinfop81}</td>
    	    <td>
    		<select name="th_transp" id="th_transp" class="selbox" style="width: 63px;" onchange="set_bb_transp(this.selectedIndex);">
    		{section name=i start=50 loop=101 step=1}
    		    <option value="{$smarty.section.i.index}" {if $smarty.section.i.index eq $tinfo[0].th_transp }selected{/if}>{$smarty.section.i.index}</option>
    		{/section}
    		</select>&nbsp;%
    	    </td>
    	</tr>
    	<tr>
    	    <td>{$pr_chinfop82}</td>
    	    <td>
    		<select name="th_font" id="th_font" class="selbox" style="width: 130px;" onchange="set_bb_font(this.value);">
    		    <option value="arial" {if $tinfo[0].th_font_fam eq "Arial"}selected{/if}>{$pr_chinfop83}</option>
    		    <option value="times New Roman" {if $tinfo[0].th_font_fam eq "Times New Roman"}selected{/if}>{$pr_chinfop84}</option>
    		    <option value="georgia" {if $tinfo[0].th_font_fam eq "Georgia"}selected{/if}>{$pr_chinfop85}</option>
    		    <option value="verdana" {if $tinfo[0].th_font_fam eq "Verdana"}selected{/if}>{$pr_chinfop86}</option>
    		    <option value="comic Sans MS" {if $tinfo[0].th_font_fam eq "Comic Sans MS"}selected{/if}>{$pr_chinfop86x}</option>
    		</select>
    	    </td>
    	</tr>
    	<tr>
    	    <td>{$pr_chinfop89}</td>
    	    <td>
    		<select name="th_fontsize" id="th_fontsize" class="selbox" style="width: 63px;" onchange="set_bb_fontsize(this.value);">
    		{section name=j start=7 loop=15 step=1}
    		    <option value="{$smarty.section.j.index}" {if $smarty.section.j.index eq $tinfo[0].th_font_size}selected{/if}>{$smarty.section.j.index}</option>
    		{/section}
    		</select>&nbsp;px
    	    </td>
    	</tr>
    	<tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr><td colspan=2>{$pr_chinfop91}</td></tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr>
    	    <td>{$pr_chinfop76}</td>
    	    <td valign="bottom"><input type="text" id="th_bbbordercol" name="th_bbbordercol" size="10" maxlength="7" class="cp" value="{$tinfo[0].th_hb_bgcol}" onchange="set_bb_bg2(this.value);"></td>
    	</tr>
        <tr>
    	    <td>{$pr_chinfop90}</td>
    	    <td valign="bottom"><input type="text" id="th_bbtxt2" name="th_bbtxt2" size="10" maxlength="7" class="cp" value="{$tinfo[0].th_hb_h1}" onchange="set_bb_text3(this.value);"></td>
    	</tr>
        <tr>
    	    <td>{$pr_chinfop98}</td>
    	    <td valign="bottom"><input type="text" id="th_bbtxt1" name="th_bbtxt1" size="10" maxlength="7" class="cp" value="{$tinfo[0].th_hb_h2}" onchange="set_bb_text4(this.value);"></td>
    	</tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr><td colspan=2>{$pr_chinfop87}</td></tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr>
    	    <td>{$pr_chinfop88}</td>
    	    <td valign="bottom"><input type="text" id="bb_border" name="th_bb_border" size="10" maxlength="7" class="cp" value="{$tinfo[0].th_bb_border}" onchange="set_bb_border(this.value);"></td>
    	</tr>
        <tr>
    	    <td>{$pr_chinfop76}</td>
    	    <td valign="bottom"><input type="text" id="bb_bg" name="th_bb_bg" size="10" maxlength="7" class="cp" value="{$tinfo[0].th_bb_bgcol}" onchange="set_bb_bg(this.value);"></td>
    	</tr>
        <tr>
    	    <td>{$pr_chinfop90}</td>
    	    <td valign="bottom"><input type="text" id="bb_text1" name="th_bb_text1" size="10" maxlength="7" class="cp" value="{$tinfo[0].th_bb_h1}" onchange="set_bb_text1(this.value);"></td>
    	</tr>
        <tr>
    	    <td>{$pr_chinfop98}</td>
    	    <td valign="bottom"><input type="text" id="bb_text2" name="th_bb_text2" size="10" maxlength="7" class="cp" value="{$tinfo[0].th_bb_h2}" onchange="set_bb_text2(this.value);"></td>
    	</tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr><td colspan=2>{$pr_chinfop93}</td></tr>
        <tr><td colspan="2" class="nopad">&nbsp;</td></tr>
        <tr>
    	    <td>{$pr_chinfop88}</td>
    	    <td valign="bottom"><input type="text" id="th_vlbordercol" name="th_vlbordercol" size="10" maxlength="7" class="cp" value="{$tinfo[0].th_vl_border}" onchange="set_vl_border(this.value);"></td>
    	</tr>
        <tr>
    	    <td>{$pr_chinfop76}</td>
    	    <td valign="bottom"><input type="text" id="th_vlbg" name="th_vlbg" size="10" maxlength="7" class="cp" value="{$tinfo[0].th_vl_bgcol}" onchange="set_vl_bg(this.value);"></td>
    	</tr>
        <tr>
    	    <td>{$pr_chinfop92}</td>
    	    <td valign="bottom"><input type="text" id="th_vlptitle" name="th_vlptitle" size="10" maxlength="7" class="cp" value="{$tinfo[0].th_vl_post}" onchange="set_vl_post(this.value);"></td>
    	</tr>
        <tr>
    	    <td>{$pr_chinfop90}</td>
    	    <td valign="bottom"><input type="text" id="th_vltxt1" name="th_vltxt1" size="10" maxlength="7" class="cp" value="{$tinfo[0].th_vl_h1}" onchange="set_vl_text1(this.value);"></td>
    	</tr>
        <tr>
    	    <td>{$pr_chinfop98}</td>
    	    <td valign="bottom"><input type="text" id="th_vltxt2" name="th_vltxt2" size="10" maxlength="7" class="cp" value="{$tinfo[0].th_vl_h2}" onchange="set_vl_text2(this.value);"></td>
    	</tr>
    </table>
    </div>
