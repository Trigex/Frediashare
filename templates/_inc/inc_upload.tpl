<script type="text/javascript">
{literal}
function setsharing(d) {
    if ( d == 'on' ) { ShowContent('commset'); ShowContent('commrateset'); ShowContent('respset'); ShowContent('rateset'); ShowContent('embset'); ShowContent('bmset'); }
    if ( d == 'off' ) { HideContent('commset'); HideContent('commrateset'); HideContent('respset'); HideContent('rateset'); HideContent('embset'); HideContent('bmset'); }
}
{/literal}
</script>
<fieldset>
    <legend>{$up_opt1}</legend>
    <table cellpadding="5" cellspacing="0" border="0" width="100%">
	<tr>
	    <td>
		<div>
		    <table cellpadding=3 cellspacing=0 border=0 width="100%">
			<tr>
			    <td>
				<div id="privtext" style="display: block;">{$up_opt7}</div>
				<div id="privchanged" style="display: none;">{$up_opt8}</div>
			    </td>
			    <td align="right" width="100">
				<div id="privsetlink1" style="display: block;">
				    <a href="javascript:void(0)" onclick="HideContent('privsetlink1'); ShowContent('privsetlink2'); ShowContent('privset'); ShowContent('hr1');">{$up_opt4}</a>
				</div>
				<div id="privsetlink2" style="display: none;">
				    <a href="javascript:void(0)" onclick="HideContent('privsetlink2'); ShowContent('privsetlink1'); HideContent('privset'); HideContent('hr1');">{$up_opt5}</a>
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
		    	    <td width="1"><input name="vpriv" type="radio" value="public" onclick="HideContent('privchanged'); ShowContent('privtext');" {if $sbtn eq "myvid" or $sbtn eq "myimg" or $sbtn eq "myaud"}{if $vd[0].vtype eq "public"}checked{/if}{else}checked{/if}></td>
			    <td valign="bottom">{$up_public}{$up_opt2}</td>
			</tr>
			</tr>
			    <td width="1"><input name="vpriv" type="radio" value="private" onclick="ShowContent('privchanged'); HideContent('privtext');" {if $sbtn eq "myvid" or $sbtn eq "myimg" or $sbtn eq "myaud"}{if $vd[0].vtype eq "private"}checked{/if}{/if}></td>
			    <td valign="bottom">{$up_private}{$up_opt3}</td>
			</tr>
		    </table>
		</div>
	    </td>
	</tr>
    </table>
</fieldset>
<br>
<fieldset>
    <legend>{$up_opt6}</legend>
    <table cellpadding="5" cellspacing="0" border="0" width="100%">
	<tr>
	    <td>
		<div>
		    <table cellpadding=3 cellspacing=0 border=0 width="100%">
			<tr>
			    <td>
				<div id="bcastxt1" style="display: block;" class="p2">{$up_opt14}</div>
				<div id="bcastxt2" style="display: none;" class="p2">{$up_opt13}</div>
			    </td>
			    <td align="right" width="100" valign="top">
				<div id="bcastsetlink1" style="display: block;">
				    <a href="javascript:void(0)" onclick="HideContent('bcastsetlink1'); ShowContent('bcastsetlink2'); setsharing('on'); ShowContent('hr2');">{$up_opt4}</a>
				</div>
				<div id="bcastsetlink2" style="display: none;">
				    <a href="javascript:void(0)" onclick="HideContent('bcastsetlink2'); ShowContent('bcastsetlink1'); setsharing('off'); HideContent('hr2');">{$up_opt5}</a>
				</div>
			    </td>
			</tr>
		    </table>
		</div>
		<div id="hr2" style="display: none;">
		{if $file_comments eq "1" or $file_responses eq "1" or $file_ratings eq "1" or $comment_rating eq "1" or $file_embed eq "1" or $file_bookmark eq "1"}
		<hr>
		{/if}
		</div>
	    </td>
	</tr>
	<tr>
	    <td class="nopad">
	        <div id="commset" style="display: none;">
	        {if $file_comments eq "1"}
		    <table cellpadding=3 cellspacing=0 border=0 width="100%">
			<tr><td colspan="2">{$up_opt15}</td></tr>
		        <tr>
		    	    <td width="1"><input name="vcomm" type="radio" value="yes" {if $sbtn eq "myvid" or $sbtn eq "myimg" or $sbtn eq "myaud"}{if $vd[0].is_comm eq "yes"}checked{/if}{else}checked{/if}></td>
			    <td valign="middle">{$up_opt9}</td>
			</tr>
			</tr>
			    <td width="1"><input name="vcomm" type="radio" value="appfr" onclick="HideContent('bcastxt1'); ShowContent('bcastxt2');" {if $sbtn eq "myvid" or $sbtn eq "myimg" or $sbtn eq "myaud"}{if $vd[0].is_comm eq "appfr"}checked{/if}{/if}></td>
			    <td valign="middle">{$up_opt10}</td>
			</tr>
		        <tr>
		    	    <td width="1"><input name="vcomm" type="radio" value="app" onclick="HideContent('bcastxt1'); ShowContent('bcastxt2');" {if $sbtn eq "myvid" or $sbtn eq "myimg" or $sbtn eq "myaud"}{if $vd[0].is_comm eq "app"}checked{/if}{/if}></td>
			    <td valign="middle">{$up_opt11}</td>
			</tr>
			</tr>
			    <td width="1"><input name="vcomm" type="radio" value="no" onclick="HideContent('bcastxt1'); ShowContent('bcastxt2');" {if $sbtn eq "myvid" or $sbtn eq "myimg" or $sbtn eq "myaud"}{if $vd[0].is_comm eq "no"}checked{/if}{/if}></td>
			    <td valign="middle">{$up_opt12}</td>
			</tr>
		    </table>
		{/if}
		</div>
	        <div id="commrateset" style="display: none;">
	        {if $comment_rating eq "1"}
	        <br>
		    <table cellpadding=3 cellspacing=0 border=0 width="100%">
			<tr><td colspan="2">{$up_opt16}</td></tr>
		        <tr>
		    	    <td width="1"><input name="vcommrate" type="radio" value="yes" {if $sbtn eq "myvid" or $sbtn eq "myimg" or $sbtn eq "myaud"}{if $vd[0].is_commrate eq "yes"}checked{/if}{else}checked{/if}></td>
			    <td valign="middle">{$up_opt17}</td>
			</tr>
			</tr>
			    <td width="1"><input name="vcommrate" type="radio" value="no" onclick="HideContent('bcastxt1'); ShowContent('bcastxt2');" {if $sbtn eq "myvid" or $sbtn eq "myimg" or $sbtn eq "myaud"}{if $vd[0].is_commrate eq "no"}checked{/if}{/if}></td>
			    <td valign="middle">{$up_opt18}</td>
			</tr>
		    </table>
		{/if}
		</div>
	        <div id="respset" style="display: none;">
	        {if $file_responses eq "1"}
	        <br>
		    <table cellpadding=3 cellspacing=0 border=0 width="100%">
			<tr><td colspan="2">{$up_opt19}</td></tr>
		        <tr>
		    	    <td width="1"><input name="vresp" type="radio" value="yes" {if $sbtn eq "myvid" or $sbtn eq "myimg" or $sbtn eq "myaud"}{if $vd[0].is_fileresp eq "yes"}checked{/if}{else}checked{/if}></td>
			    <td valign="middle">{$up_opt20}</td>
			</tr>
			</tr>
			    <td width="1"><input name="vresp" type="radio" value="app" onclick="HideContent('bcastxt1'); ShowContent('bcastxt2');" {if $sbtn eq "myvid" or $sbtn eq "myimg" or $sbtn eq "myaud"}{if $vd[0].is_fileresp eq "app"}checked{/if}{/if}></td>
			    <td valign="middle">{$up_opt21}</td>
			</tr>
			</tr>
			    <td width="1"><input name="vresp" type="radio" value="no" onclick="HideContent('bcastxt1'); ShowContent('bcastxt2');" {if $sbtn eq "myvid" or $sbtn eq "myimg" or $sbtn eq "myaud"}{if $vd[0].is_fileresp eq "no"}checked{/if}{/if}></td>
			    <td valign="middle">{$up_opt22}</td>
			</tr>
		    </table>
		{/if}
		</div>
	        <div id="rateset" style="display: none;">
	        {if $file_ratings eq "1"}
	        <br>
		    <table cellpadding=3 cellspacing=0 border=0 width="100%">
			<tr><td colspan="2">{$up_opt23}</td></tr>
		        <tr>
		    	    <td width="1"><input name="vrate" type="radio" value="yes" {if $sbtn eq "myvid" or $sbtn eq "myimg" or $sbtn eq "myaud"}{if $vd[0].is_rated eq "yes"}checked{/if}{else}checked{/if}></td>
			    <td valign="middle">{$up_opt24}</td>
			</tr>
			</tr>
			    <td width="1"><input name="vrate" type="radio" value="no" onclick="HideContent('bcastxt1'); ShowContent('bcastxt2');" {if $sbtn eq "myvid" or $sbtn eq "myimg" or $sbtn eq "myaud"}{if $vd[0].is_rated eq "no"}checked{/if}{/if}></td>
			    <td valign="middle">{$up_opt25}</td>
			</tr>
		    </table>
		{/if}
		</div>
	        <div id="embset" style="display: none;">
	        {if $file_embed eq "1"}
	        <br>
		    <table cellpadding=3 cellspacing=0 border=0 width="100%">
			<tr><td colspan="2">{$up_opt26}</td></tr>
		        <tr>
		    	    <td width="1"><input name="vemb" type="radio" value="yes" {if $sbtn eq "myvid" or $sbtn eq "myimg" or $sbtn eq "myaud"}{if $vd[0].is_embed eq "yes"}checked{/if}{else}checked{/if}></td>
			    <td valign="middle">{$up_opt27}</td>
			</tr>
			</tr>
			    <td width="1"><input name="vemb" type="radio" value="no" onclick="HideContent('bcastxt1'); ShowContent('bcastxt2');" {if $sbtn eq "myvid" or $sbtn eq "myimg" or $sbtn eq "myaud"}{if $vd[0].is_embed eq "no"}checked{/if}{/if}></td>
			    <td valign="middle">{$up_opt28}</td>
			</tr>
		    </table>
		{/if}
		</div>
	        <div id="bmset" style="display: none;">
	        {if $file_bookmark eq "1"}
	        <br>
		    <table cellpadding=3 cellspacing=0 border=0 width="100%">
			<tr><td colspan="2">{$adm_setbm}</td></tr>
		        <tr>
		    	    <td width="1"><input name="vbm" type="radio" value="yes" {if $sbtn eq "myvid" or $sbtn eq "myimg" or $sbtn eq "myaud"}{if $vd[0].is_bm eq "yes"}checked{/if}{else}checked{/if}></td>
			    <td valign="middle">{$up_opt29}</td>
			</tr>
			</tr>
			    <td width="1"><input name="vbm" type="radio" value="no" onclick="HideContent('bcastxt1'); ShowContent('bcastxt2');" {if $sbtn eq "myvid" or $sbtn eq "myimg" or $sbtn eq "myaud"}{if $vd[0].is_bm eq "no"}checked{/if}{/if}></td>
			    <td valign="middle">{$up_opt30}</td>
			</tr>
		    </table>
		{/if}
		</div>
	    </td>
	</tr>
    </table>
</fieldset>
<script type="text/javascript">setsharing('off');</script>