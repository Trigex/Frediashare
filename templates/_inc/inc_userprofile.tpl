	{if $enable_audio eq "1"}
<!-- BEGIN USER AUDIOS TABLE -->	
	    <table width="97%" cellpadding=0 cellspacing=0 border=0 align="center">
		<tr>
		    <td>
			<table width="100%" cellpadding=0 cellspacing=0 border=0 align=center class="br">
			    <tr>
				<td>
				    <div class="p5" id="atags" {if $smarty.session.mytags eq "off"}style="display: none;"{else}style="display: block;"{/if}>
					<center>{$atags}</center>
				    </div>
				    <div id="listviewa" {if $smarty.session.viewmode eq "list"}style="display: block;"{else}style="display: none;"{/if}>                                                                                
            				<table cellpadding="0" cellspacing="0" border="0" width="100%">
                			    <tr>
                    				<td valign="top" class="nopad">
                    				{section name=i loop=$auds}
                        			    {include file="_inc/inc_lista.tpl"}
                    				{/section}
                    				</td>
                			    </tr>
            				</table>
					{if $auds[3].vtitle ne ""}
					<table cellspacing=0 cellpadding=0 border=0 align=right>
					    <tr>
						<td class="p5" align="right">{if $auds[3].vtitle ne ""}<a href="{$base_url}/user_audios/{$smarty.request.user}">{$profile_audioall}</a>{/if}</td>
					    </tr>
					</table>
					{elseif $auds[0].vtitle eq ""}
					<table cellspacing=0 cellpadding=0 border=0 align=center>
					    <tr>
						<td align="center" class="p10">{$profile_audionone}</td>
					    </tr>
					</table>
					{/if}
        			    </div>
        		
				    <div id="gridviewa" {if $smarty.session.viewmode eq "grid"}style="display: block;"{else}style="display: none;"{/if}>
					<table cellpadding=10 cellspacing=0 border=0 align=center>
					    <tr>
					    {section name=i loop=$auds}
					    {if $smarty.section.i.index mod 4 eq "0" and $smarty.section.i.index gt "0"}</tr><tr>{/if}
						<td valign="top" align="center" class="nbg">
						    <table cellpadding=0 cellspacing=0 border=0>
							<tr>
							    <td class="nopad" valign="top">
								{include file="_inc/inc_grida.tpl"}
							    </td>
							</tr>
						    </table>
						</td>
					    {/section}
					    </tr>
					</table>
					{if $auds[3].vtitle ne ""}
					<table cellspacing=0 cellpadding=0 border=0 align=right>
					    <tr>
						<td class="p5" align="right">{if $auds[3].vtitle ne ""}<a href="{$base_url}/user_audios/{$smarty.request.user}">{$profile_audioall}</a>{/if}</td>
					    </tr>
					</table>
					{elseif $auds[0].vtitle eq ""}
					<table cellspacing=0 cellpadding=0 border=0 align=center>
					    <tr>
						<td align="center" class="p10">{$profile_audionone}</td>
					    </tr>
					</table>
					{/if}
				    </div>
				</td>
			    </tr>
			</table>
		    </td>
		</tr>
	    </table>
<!-- END USER AUDIOS TABLE -->					    
	    {/if}

	{if $enable_images eq "1"}
<!-- BEGIN USER IMAGES TABLE -->	
	    <table width="97%" cellpadding=0 cellspacing=0 border=0 align="center">
		<tr>
		    <td>
			<table width="100%" cellpadding=0 cellspacing=0 border=0 align=center class=br>
			    <tr>
				<td>
				    <div class="p5" id="itags" {if $smarty.session.mytags eq "off"}style="display: none;"{else}style="display: block;"{/if}>
					<center>{$itags}</center>
				    </div>
				    <div id="listviewi" {if $smarty.session.viewmode eq "list"}style="display: block;"{else}style="display: none;"{/if}>
            				<table cellpadding=0 cellspacing=0 border=0 width="100%">
                			    <tr>
                    				<td valign="top">
                    				{section name=i loop=$imgs}
                        			    {include file="_inc/inc_listi.tpl"}
                    				{/section}
                    				</td>
                			    </tr>
            				</table>
					{if $imgs[3].vtitle ne ""}
					<table cellspacing=0 cellpadding=0 border=0 align=right>
					    <tr>
						<td class="p5" align="right">{if $imgs[3].vtitle ne ""}<a href="{$base_url}/user_images/{$smarty.request.user}">{$profile_imageall}</a>{/if}</td>
					    </tr>
					</table>
					{elseif $imgs[0].vtitle eq ""}
					<table cellspacing=0 cellpadding=0 border=0 align=center>
					    <tr>
						<td align="center" class="p10">{$profile_imagenone}</td>
					    </tr>
					</table>
					{/if}
        			    </div>
        		
				    <div id="gridviewi" {if $smarty.session.viewmode eq "grid"}style="display: block;"{else}style="display: none;"{/if}>
					<table cellpadding=10 cellspacing=0 border=0 align=center>
					    <tr>
					    {section name=i loop=$imgs}
					    {if $smarty.section.i.index mod 4 eq "0" and $smarty.section.i.index gt "0"}</tr><tr>{/if}
						<td valign="top" class="nbg" align="center">
						    <table cellpadding=0 cellspacing=0 border=0>
							<tr>
							    <td class="nopad" valign="top">
								{include file="_inc/inc_gridi.tpl"}
							    </td>
							</tr>
						    </table>
						</td>
					    {/section}
					    </tr>
					</table>
					{if $imgs[3].vtitle ne ""}
					<table cellspacing=0 cellpadding=0 border=0 align=right>
					    <tr>
						<td class="p5" align="right">{if $imgs[3].vtitle ne ""}<a href="{$base_url}/user_images/{$smarty.request.user}">{$profile_imageall}</a>{/if}</td>
					    </tr>
					</table>
					{elseif $imgs[0].vtitle eq ""}
					<table cellspacing=0 cellpadding=0 border=0 align=center>
					    <tr>
						<td align="center" class="p10">{$profile_imagenone}</td>
					    </tr>
					</table>
					{/if}
				    </div>
				</td>
			    </tr>
			</table>
		    </td>
		</tr>
	    </table>
<!-- END USER IMAGES TABLE -->					    
	    {/if}

	{if $enable_videos eq "1"}
<!-- BEGIN USER VIDEOS TABLE -->	
	    <table width="97%" cellpadding=0 cellspacing=0 border=0 align="center">
		<tr>
		    <td>
			<table width="100%" cellpadding=0 cellspacing=0 border=0 align=center class=br>
			    <tr>
				<td>
				    <div class="p5" id="vtags" {if $smarty.session.mytags eq "off"}style="display: none;"{else}style="display: block;"{/if}>
					<center>{$vtags}</center>
				    </div>
				    <div id="listviewv" {if $smarty.session.viewmode eq "list"}style="display: block;"{else}style="display: none;"{/if}>
            				<table cellpadding=0 cellspacing=0 border=0 width="100%">
                			    <tr>
                    				<td valign="top">
                    				{section name=i loop=$vids}
                        			    {include file="_inc/inc_listv.tpl"}
                    				{/section}
                    				</td>
                			    </tr>
            				</table>
					{if $vids[3].vtitle ne ""}
					<table cellspacing=0 cellpadding=0 border=0 align=right>
					    <tr>
						<td class="p5" align="right">{if $vids[3].vtitle ne ""}<a href="{$base_url}/user_videos/{$smarty.request.user}">{$profile_videoall}</a>{/if}</td>
					    </tr>
					</table>
					{elseif $vids[0].vtitle eq ""}
					<table cellspacing=0 cellpadding=0 border=0 align=center>
					    <tr>
						<td align="center" class="p10">{$profile_videonone}</td>
					    </tr>
					</table>
					{/if}
        			    </div>
        		
				    <div id="gridviewv" {if $smarty.session.viewmode eq "grid"}style="display: block;"{else}style="display: none;"{/if}>
					<table cellpadding=10 cellspacing=0 border=0 align=center>
					    <tr>
					    {section name=i loop=$vids}
					    {if $smarty.section.i.index mod 4 eq "0" and $smarty.section.i.index gt "0"}</tr><tr>{/if}
						<td valign="top" class="nbg" align="center">
						    <table cellpadding=0 cellspacing=0 border=0>
							<tr>
							    <td class="nopad" valign="top">
								{include file="_inc/inc_gridv.tpl"}
							    </td>
							</tr>
						    </table>
						</td>
					    {/section}
					    </tr>
					</table>
					{if $vids[3].vtitle ne ""}
					<table cellspacing=0 cellpadding=0 border=0 align=right>
					    <tr>
						<td class="p5" align="right">{if $vids[3].vtitle ne ""}<a href="{$base_url}/user_videos/{$smarty.request.user}">{$profile_videoall}</a>{/if}</td>
					    </tr>
					</table>
					{elseif $vids[0].vtitle eq ""}
					<table cellspacing=0 cellpadding=0 border=0 align=center>
					    <tr>
						<td align="center" class="p10">{$profile_videonone}</td>
					    </tr>
					</table>
					{/if}
				    </div>
				</td>
			    </tr>
			</table>
		    </td>
		</tr>
	    </table>
<!-- END USER VIDEOS TABLE -->					    
	    {/if}
	    <br>