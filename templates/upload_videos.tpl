<!-- BEGIN UPLOAD PAGE STEPS TABLES -->
	    {if $secondpage ne "second" and $smarty.request.upload_final eq ""}
	    <table width="100%" cellpadding=5 cellspacing=0 border=0>
		<tr><td>
<!-- BEGIN UPLOAD PAGE STEP1 TABLE -->
		    <form name="vupload" action="" method="post" encType="multipart/form-data">
		    <table width="100%" cellpadding=10 cellspacing=0 border=0 id="vup_tbl">
			<tr>
			    <td valign="top">
				<fieldset>
				<legend>{$up_step1txt}</legend>
				<table width="100%" cellpadding=2 cellspacing=0 border=0>
				    <tr>
					<td width="20%" align="left">{$up_title}</td><td><input type="text" class="ff" style="width: 280px;" name="vtitle" value="{$smarty.request.vtitle}"></td>	
				    </tr>
				    <tr>
					<td align="left" valign="top">{$up_descr}</td><td><textarea class="ff" rows="7" name="vdescr" style="width: 280px;">{$smarty.request.vdescr}</textarea></td>
				    </tr>
				    <tr>
					<td align="left">{$up_tags}</td><td><input type="text" class="ff" style="width: 280px;" name="vtags" value="{$smarty.request.vtags}"></td>
				    </tr>
				    <tr>
					<td align="left" {if $multi_categ_uploads ne "0"}valign="top"{/if}>{$up_categs}</td>
					<td class="nopad">
					{if $multi_categ_uploads ne "0"}
					    <table cellpadding=1 cellspacing=0 border=0>
						<tr>
						    {insert name=list_categ_all_video assign=chinfo vid=$VID}
						    {section name=i loop=$chinfo}
						    {if $smarty.section.i.index mod 1 eq "0" and $smarty.section.i.index gt "0"}</tr><tr>{/if}
						    <td width="5%">
							<input type="checkbox" name="categlist[]" value="{$chinfo[i].id}" {section name=j loop=$vcategs}{if $vcategs[j] eq $chinfo[i].id}checked{else}{/if}{/section}>
						    </td>
						    <td>{$chinfo[i].ch}</td>
						    {/section}
						</tr>
					    </table>
					{else}
					    <table cellpadding=1 cellspacing=0 border=0>
						<tr>
						    {insert name=list_categ_all_video assign=chinfo vid=$VID}
						    <td>
							<select name="categlist" class="selbox">
							    {section name=i loop=$chinfo}
							    {insert name=getfield assign=cname field=name table=categories qfield=cid qvalue=$chinfo[i].id}
							    <option name="categlist[]" value="{$chinfo[i].id}">{$cname}</option>
							    {/section}
							</select>
						    </td>
						</tr>
					    </table>
					{/if}
					</td>
				    </tr>
				</table>
				</fieldset>
				<table cellpadding=15 cellspacing=0>
				    <tr>
					<td>
					    <input type="submit" name="vnext" class="fb" value="{$up_btncontinue}">&nbsp;&nbsp;
					    <input type="submit" name="vcancel" class="fb" value="{$up_btncancel}">
					</td>
				    </tr>
				</table>
			    </td>
			    
			    <td width="70%" valign="top">
				{include file="_inc/inc_upload.tpl"}
			    </td>
		    	</tr>
		    </table>
		    </form>
		    </td>
<!-- END UPLOAD PAGE STEP1 TABLE -->
		</tr>
		<tr>
		    <td></td>
		</tr>
	    </table>
	    
	    {else}
<!-- BEGIN UPLOAD PAGE STEP2 TABLE -->	    
	    <table width="100%" cellpadding=5 cellspacing=0 border=0>
		<tr>
		    <td>{$up_txt19}</td>
		</tr>
		<tr><td>
		    <table width="100%" cellpadding=10 cellspacing=0 border=0 id="vup_tbl">
			<tr>
			    <td width="50%" valign="top">
			    {if $UBR_embedded_upload_results eq 1 or $UBR_opera_browser eq 1 or $UBR_safari_browser eq 1}
    				<div id="upload_div" style="display:none;"><iframe name="upload_iframe" frameborder="0" width="800" height="200" scrolling="auto"></iframe></div>
    			    {/if}
			    <form name="form_upload" id="form_upload"{if $UBR_embedded_upload_results eq 1 or $UBR_opera_browser eq 1 or $UBR_safari_browser eq 1} target="upload_iframe"{/if} method="post" enctype="multipart/form-data" action="#">
				<fieldset>
				<legend>{$up_step2txt}</legend>
				<table width="100%" cellpadding=5 cellspacing=0 border=0>
				    <tr>
					<td width="15%" align="right">{$up_file}</td>
					<td>
					    <div>
						<input type="hidden" name="upload_range" value="1">
						<noscript>
						    <input type="hidden" name="no_script" value="1">
						</noscript>
						<input type="hidden" name="vtags" value="{$smarty.request.vtags}">
						<input type="hidden" name="vtitle" value="{$smarty.request.vtitle}">
						<input type="hidden" name="vdescr" value="{$smarty.request.vdescr}">
						<input type="hidden" name="listch" value="{$listch}">
						<input type="hidden" name="vpriv" value="{$smarty.request.vpriv}">
						<input type="hidden" name="vcomm" value="{$smarty.request.vcomm}">
						<input type="hidden" name="vcommrate" value="{$smarty.request.vcommrate}">
						<input type="hidden" name="vresp" value="{$smarty.request.vresp}">
						<input type="hidden" name="vrate" value="{$smarty.request.vrate}">
						<input type="hidden" name="vemb" value="{$smarty.request.vemb}">
						<input type="hidden" name="vbm" value="{$smarty.request.vbm}">
						<input type="hidden" name="rto" value="{$smarty.get.r}">
						<div id="upload_slots">
						    <input type="file" class="ff" name="upfile_0" size="40" {if $multi_upload_slots eq '1'}onChange="addUploadSlot(0)"{/if} value="">
						</div>
					    </div>
					</td>
				    </tr>
				</table>
			    </form>
				<table width="100%" cellpadding=5 cellspacing=0 border=0>    
				    <tr>
					<!-- Start Progress Bar -->
					<td align="right" width="15%"></td>
					<td width="85%">
					    <div class="alert" id="ubr_alert"></div>
					    <div id="progress_bar" style="display:none;">
						<div class="bar1" id="upload_status_wrap" align="center">
						    <div class="bar2" id="upload_status"></div>
						</div>
						<br>
						<table class="data" cellpadding="5" cellspacing="1" border=0>
						    <tr>
							<td align="left">{$upbar_complete}</td>
							<td align="center"><span id="percent">0%</span></td>
						    </tr>
						    <tr>
							<td>{$upbar_files}</td>
							<td align="center"><span id="uploaded_files">0</span> of <span id="total_uploads"></span></td>
						    </tr>
						    <tr>
							<td align="left">{$upbar_position}</td>
							<td align="center"><span id="current">0</span> / <span id="total_kbytes"></span> KBytes</td>
						    </tr>
						    <tr>
							<td align="left">{$upbar_elapsed}</td>
							<td align="center"><span id="time">0</span></td>
						    </tr>
						    <tr>
							<td align="left">{$upbar_remain}</td>
							<td align="center"><span id="remain">0</span></td>
						    </tr>
						    <tr>
							<td align="left">{$upbar_speed}</td>
							<td align="center"><span id="speed">0</span> KB/s.</td>
						    </tr>
						</table>
					    </div>
					</td>
					<!-- End Progres Bar -->
				    </tr>
				    
				    <tr>
					<td align="right">&nbsp;</td>
					<td>
					    <input type="button" class="fb" id="upload_button" name="upload_button" value="{$up_btnupload}" onClick="linkUpload();">&nbsp;&nbsp;
					    <input type="button" class="fb" id="reset_button" name="reset_button" value="{$up_btncancel}" onClick="resetForm();">
					</td>
				    </tr>
				</table>
				</fieldset>
			    </td>
			    
			    <td width="50%" valign="top">
				<fieldset>
				<legend>{$up_stepinfo}</legend>
				<table cellpadding=8 cellspacing=0 border=0>
				    <tr>
					<td>
					    {$up_txt21}
					    {$allowed_video_formats}
					</td>
				    </tr>
				</table>
				</fieldset>
			    </td>
			</tr>
		    </table>
		    </td>
<!-- END UPLOAD PAGE STEP2 TABLE -->
		</tr>
		<tr>
		    <td></td>
		</tr>
	    </table>
	    {/if}
<!-- END UPLOAD PAGE STEPS TABLES -->
