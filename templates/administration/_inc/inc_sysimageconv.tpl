		    <fieldset>
			<legend><a href="javascript:void(0)" onclick="ReverseContentDisplay('image_conv'); ReverseContentDisplay('image_convtxt'); changeclass_act('sys8');"><span id="sys8">{$adm_ictxt1}</span></a></legend>
			<div id="image_convtxt" style="display: block;" align="center">{$adm_ictxt2}</div>
			<div id="image_conv" style="display: none;">
			<form id="imageconvform">
			<table cellpadding=0 cellspacing=4 border=0 align=left width="100%">
			    <tr>
				<td valign="top"><input type="radio" name="imgconv" value="any" {if $img_scale eq "any"}checked{/if}></td>
				<td>{$adm_ictxt3}</td>
			    </tr>
			    <tr><td colspan="2">&nbsp;</td></tr>
			    <tr>
				<td valign="top"><input type="radio" name="imgconv" value="deny" {if $img_scale eq "deny"}checked{/if}></td>
				<td>
				    <table cellpadding="0" cellspacing="0">
					<tr>
					    <td>{$adm_ictxt6}&nbsp;&nbsp;</td>
					    <td><input type="text" name="maxw" class="ff" style="width: 30px;" value="{$conv_deny_w}"></td>
					    <td align="center">&nbsp;x&nbsp;</td>
					    <td><input type="text" name="maxh" class="ff" style="width: 30px;" value="{$conv_deny_h}"></td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr><td colspan="2">&nbsp;</td></tr>
			    <tr>
				<td valign="top"><input type="radio" name="imgconv" value="resize" {if $img_scale eq "resize"}checked{/if}></td>
				<td>
				    <table cellpadding="0" cellspacing="0">
					<tr>
					    <td>{$adm_ictxt4}&nbsp;&nbsp;</td>
					    <td><input type="text" name="thanw" class="ff" style="width: 30px;" value="{$conv_resize_than_w}"></td>
					    <td align="center">&nbsp;x&nbsp;</td>
					    <td><input type="text" name="thanh" class="ff" style="width: 30px;" value="{$conv_resize_than_h}"></td>
					</tr>
					<tr>
					    <td></td><td></td><td style="height: 20px;">&nbsp;to&nbsp;</td><td></td>
					</tr>
					<tr>
					    <td></td>
					    <td><input type="text" name="tow" class="ff" style="width: 30px;" value="{$conv_resize_to_w}"></td>
					    <td align="center">&nbsp;x&nbsp;</td>
					    <td><input type="text" name="toh" class="ff" style="width: 30px;" value="{$conv_resize_to_h}"></td>
					</tr>
				    </table>
				</td>
			    </tr>
			    <tr>
				<td colspan="2" style="padding: 10px 0px 0px 0px;">
                                    <table cellpadding="2" cellspacing="0" align="left" border=0>
                                        <tr>
                                            <td align="left" width="10"><input type="button" name="savesimageconvbtn" class="fb" value="{$adm_setgensave}" onclick="setimageconv_settings();"></td>
                                            <td align="left" width="300"><input type="button" name="savesimageconvcancel" class="fb" value="{$adm_playcancelbtn}" onclick="ReverseContentDisplay('image_conv'); ReverseContentDisplay('image_convtxt'); changeclass_act('sys8');"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="left"><div id="imageconvresp"></div></td>
                                        </tr>
                                    </table>
                                </td>
			    </tr>
			</table>
			</form>
			</div>
		    </fieldset>			
