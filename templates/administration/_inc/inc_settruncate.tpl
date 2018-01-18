			<form id="settruncform">
			    <fieldset>
				<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('truncatesettingsdiv'); ReverseContentDisplay('truncatesettingstxt'); changeclass_act('set7');"><span id="set7">{$adm_setleg7}</span></a></legend>
				<div id="truncatesettingstxt" style="display: block;" class="nopad">{$adm_setleg7txt}</div>
				<div id="truncatesettingsdiv" style="display: none;">
				<table cellpadding=2 cellspacing=0 border=0 align=center width="100%">
				    <tr>
					<td align=left width="150">{$adm_setgen49}</td>
					<td class="lp1"><input type="text" name="tr1" class="ff" size="5" value="{$tr_titlegrid-3}" style="width: 30px;"> {$adm_setgenmisc_char}</td>
					<td>{$adm_setgen51}</td>
				    </tr>
				    <tr>
					<td align=left class="gr11">{$adm_setgen49}</td>
					<td class="lp1"><input type="text" name="tr2" class="ff" size="5" value="{$tr_titlelist-3}" style="width: 30px;"> {$adm_setgenmisc_char}</td>
					<td>{$adm_setgen52}</td>
				    </tr>
				    <tr>
					<td align=left class="gr11">{$adm_setgen50}</td>
					<td class="lp1"><input type="text" name="tr3" class="ff" size="5" value="{$tr_desclist-3}" style="width: 30px;"> {$adm_setgenmisc_char}</td>
					<td>{$adm_setgen52}</td>
				    </tr>
				    <tr>
					<td align=left class="gr11">{$adm_setgen53}</td>
					<td class="lp1"><input type="text" name="tr4" class="ff" size="5" value="{$tr_msgs-3}" style="width: 30px;"> {$adm_setgenmisc_char}</td>
					<td>{$adm_setgen54}</td>
				    </tr>
				    <tr>
                                        <td colspan="3" style="padding: 10px 0px 0px 0px;">
                                            <table cellpadding="2" cellspacing="0" align="left" border=0>
                                                <tr>
                                                    <td align="left" width="10"><input type="button" name="savetrsetbtn" class="fb" value="{$adm_setgensave}" onclick="settruncate_settings();"></td>
                                                    <td align="left" width="300"><input type="button" name="savetrsetcancel" class="fb" value="{$adm_playcancelbtn}" onclick="ReverseContentDisplay('truncatesettingsdiv'); ReverseContentDisplay('truncatesettingstxt'); changeclass_act('set7');"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" align="left"><div id="settrresp"></div></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
				</table>
				</div>
			    </fieldset>
			</form>
