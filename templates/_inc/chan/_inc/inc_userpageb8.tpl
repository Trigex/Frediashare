				{if $smarty.get.view eq "playlists"}{insert name=keys_to_array assign=chpls arr=$chpls2}{/if}
		    <div id="b8">
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td align="left" class="thead2">{$uch_thl8}<a href="{$base_url}/user/{$minfo[0].username}&view=playlists">({$pl_t})</a></td>
			    <tr>
			</table>
		    
		    {if $chpls[0] eq ""}
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td class="tbody2" align="center"><table cellspacing="0" cellpadding="0"><tr><td class="p5 bodylabel">{$userpage_nosub8}</td></tr></table></td>
			    <tr>
			</table>
			
		    {elseif $chpls[0] ne ""}
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			    <tr>
				<td class="tbody2" colspan="2" valign="top">
				<form id="frform">
				<table cellpadding="10" cellspacing="0" width="100%" border="0">
				{section name=p loop=$chpls}
				    <tr>
                			<td colspan="2" class="nopad">
                    			    <div id="frdiv{$smarty.section.p.iteration}" style="display: block;" class=""></div>
                			</td>
            			    </tr>
				    
				    {insert name=plkey_type assign=pltype vkey=$chpls[p]}
				    {if ( $pltype eq "video" and $enable_videos eq "1" ) or ( $pltype eq "image" and $enable_images eq "1" ) or ( $pltype eq "audio" and $enable_audio eq "1" ) }
				    <tr>
					<td class="{if !$smarty.section.p.last}dottc{/if}" width="110" valign="top">
				    {insert name=pl_count assign=pl_count vkey=$chpls[p]}
				    {insert name=plvids assign=ple2 vkey=$chpls[p] ptype=$pltype}
				    {if $pltype eq "video" and $enable_videos eq "1"}
					{assign var=pl_c value=$videos_main}
					{insert name=getfield assign=vkey field=vkey table=files_video qfield=vid qvalue=$ple2[0].vid}
					{insert name=titlev assign=title vkey=$vkey}
					{insert name=getfield assign=pthumb field=thumb table=playlist_video qfield=vkey qvalue=$chpls[p]}
					{insert name=getfield assign=ptitle field=pname table=playlist_video qfield=vkey qvalue=$chpls[p]}
					{insert name=getfield assign=pdescr field=descr table=playlist_video qfield=vkey qvalue=$chpls[p]}
					{insert name=getfield assign=plpriv field=privacy table=playlist_video qfield=vkey qvalue=$chpls[p]}
					{insert name=getfield assign=plviews field=views table=playlist_video qfield=vkey qvalue=$chpls[p]}
				    {elseif $pltype eq "image" and $enable_images eq "1"}
					{assign var=pl_c value=$images_main}
					{insert name=getfield assign=vkey field=vkey table=files_image qfield=vid qvalue=$ple2[0].vid}
					{insert name=titlei assign=title vkey=$vkey}
					{insert name=getfield assign=pthumb field=thumb table=playlist_image qfield=vkey qvalue=$chpls[p]}
					{insert name=getfield assign=ptitle field=pname table=playlist_image qfield=vkey qvalue=$chpls[p]}
					{insert name=getfield assign=pdescr field=descr table=playlist_image qfield=vkey qvalue=$chpls[p]}
					{insert name=getfield assign=plpriv field=privacy table=playlist_image qfield=vkey qvalue=$chpls[p]}
					{insert name=getfield assign=plviews field=views table=playlist_image qfield=vkey qvalue=$chpls[p]}
				    {elseif $pltype eq "audio" and $enable_audio eq "1"}
					{assign var=pl_c value=$audios_main}
					{insert name=getfield assign=vkey field=vkey table=files_audio qfield=vid qvalue=$ple2[0].vid}
					{insert name=titlea assign=title vkey=$vkey}
					{insert name=getfield assign=pthumb field=thumb table=playlist_audio qfield=vkey qvalue=$chpls[p]}
					{insert name=getfield assign=ptitle field=pname table=playlist_audio qfield=vkey qvalue=$chpls[p]}
					{insert name=getfield assign=pdescr field=descr table=playlist_audio qfield=vkey qvalue=$chpls[p]}
					{insert name=getfield assign=plpriv field=privacy table=playlist_audio qfield=vkey qvalue=$chpls[p]}
					{insert name=getfield assign=plviews field=views table=playlist_audio qfield=vkey qvalue=$chpls[p]}
				    {/if}
				    {if $pthumb eq "0"}
        				{insert name=getfield assign=ple field=vid table=playlist_files qfield=vkey qvalue=$chpls[p] order=""}
			            {else}
			                {assign var=ple value=$pthumb}
			            {/if}
			            {if $pltype eq "video" and $enable_videos eq "1"}
			        	{insert name=getfield assign=suid field=uid table=files_video qfield=vid qvalue=$ple}
			        	{insert name=vid_to_rndv assign=rnd vid=$ple}
			                {insert name=vid_to_rndvv assign=rndbn vid=$ple}
			                {assign var=plt value="v"}
			    	    {elseif $pltype eq "image" and $enable_images eq "1"}
			    		{insert name=getfield assign=suid field=uid table=files_image qfield=vid qvalue=$ple}
			    		{insert name=getfield assign=simg field=vflvname table=files_image qfield=vid qvalue=$ple}
			    		{assign var=plt value="i"}
			    	    {elseif $pltype eq "audio" and $enable_audio eq "1"}
			    		{insert name=getfield assign=suid field=uid table=files_audio qfield=vid qvalue=$ple}
			    		{insert name=vid_to_rnda assign=rnd vid=$ple}
			                {insert name=vid_to_rndvv assign=rndbn vid=$ple}
			                {assign var=plt value="a"}
			    	    {/if}
					{insert name=count_type assign=c_res nr=$pl_count tp=$pltype}
					<div class="pbg2">
                                	    <div class="plistadding bottomright">
                                    		<div id="vqlistadd" class="plisticon">
                                        	    <span class="bold" style="font-size: 10px;">&nbsp;{$plviews|viewnr} {if $plviews eq 1}{$plist_txt611}{else}{$plist_txt61}{/if}&nbsp;</span>
                                    		</div>
                                    	    {if $same_title_uploads eq "0"}
                                        	<a href="{$base_url}/{$pltype}/{$title}&pl={$chpls[p]}">
                                    	    {else}
                                        	<a href="{$base_url}/{$pltype}/{$vkey}&pl={$chpls[p]}">
                                    	    {/if}
                                    	    {if $pltype eq "image"}
                                        	<img src="{$tmb_url}/user{$suid}/{$simg}" width="116" height="68" alt="{$ptitle}" title="{$ptitle}">
                                    	    {else}
                                        	<img src="{$tmb_url}/user{$suid}/{$rndbn}_{$rnd}.jpg" width="116" height="68" alt="{$ptitle}" title="{$ptitle}">
                                	    {/if}
                                        	</a>
                                	    </div>
                            		</div>
                            		</td>
                            		<td valign="top" align="left" class="{if !$smarty.section.p.last}dottc{/if}">
                            		    <table cellpadding="1" cellspacing="0" border=0 width="100%">
                            			<tr>
                            			    <td width="70%" valign="top">
                            				<table cellpadding="1" cellspacing="0" border=0 width="100%">
	                                		    <tr>
                            					<td>
	                                    			{if $same_title_uploads eq "0"}
                                        			    <a href="{$base_url}/{$pltype}/{$title}&pl={$chpls[p]}">
                                    				{else}
                                        			    <a href="{$base_url}/{$pltype}/{$vkey}&pl={$chpls[p]}">
                                    				{/if}
                            						<span class="f16 bold">{$ptitle|spchar}</span>
                            					    </a>
                            					    <span class="bodylabel bold">&nbsp;&nbsp;{$pl_count} {$c_res}</span>
                            					</td>
                            				    </tr>
                            			
                            				    <tr>
                            					<td class="p5" align="left" rowspan="4" valign="top" width="80%">{$pdescr|nl2br|spchar}</td>
                            				    </tr>
                            				</table>
                            			    </td>
                            			    <td width="30%">
                            				<table cellpadding="1" cellspacing="0" border=0 width="100%">
                            				    <tr>
                            					<td class="p5 f12 bold" align="right"><a href="{$base_url}/{$pltype}_playlist/{$chpls[p]}">{$plist_txt74}</a></td>
                            				    </tr>
                            				
                            				{if $smarty.session.UID ne ""}
                            				    <tr>
                            					<td class="f12 bold" align="right"><a href="javascript:void(0)" onclick="window.open('{$base_url}/share_{$pltype}_playlist/{$chpls[p]}', 'pshare', 'top=25,left=0,width=640,height=480,resizable=0');">{$plist_txt45}</a></td>
                            				    </tr>
                            				{/if}
                            				
                            				    {if $smarty.session.UID ne "" and $smarty.session.UID ne $minfo[0].uid}
                            				    <tr>
                            					<td class="p5 f12 bold" align="right">
                            					    {insert name=is_sub_pl assign=is_sub_pl plt=$plt plk=$chpls[p] uid=$minfo[0].uid}
                            					    {if $is_sub_pl eq "yes"}
                            					    <a href="javascript:void(0)" onclick="ShowContent('frdiv{$smarty.section.p.iteration}'); thisDiv('yes'); ldiv('subsrespdiv2'); set_subscription2('unsubs', '{$minfo[0].username}', '{$minfo[0].uid}', 'pl{$plt}{$chpls[p]}', '{$smarty.section.p.iteration}', '1');">{$uch_txt15}</a>
                            					    {else}
                            					    <a href="javascript:void(0)" onclick="ShowContent('frdiv{$smarty.section.p.iteration}'); thisDiv('yes'); ldiv('subsrespdiv2'); set_subscription2('subs', '{$minfo[0].username}', '{$minfo[0].uid}', 'pl{$plt}{$chpls[p]}', '{$smarty.section.p.iteration}');">{$uch_txt14}</a>
                            					    {/if}
                            					</td>
                            				    </tr>
                            				    {/if}
                            				</table>
                            			    </td>
                            			</tr>
                            		    </table>
                            		</td>
                            	    </tr>
                            	    {/if}
                            	    {/section}
                            	    {if $smarty.get.view eq "" or $smarty.get.view eq "playlists"}
                            	    <tr>
                            		<td colspan="2">
                            		    <table width="100%" cellpadding="0" cellspacing="0">
                            			<tr>
                            			    <td align="left"><div id="loading_sub2" style="display: none;"><table cellpadding=5 cellspacing=0 border=0><tr><td>{$adm_setgen79}</td></tr></table></div></td>
                            			    {if $pl_t gt 3 and $smarty.get.view eq ""}<td align="right" class="bold nopad"><a href="{$base_url}/user/{$minfo[0].username}&view=playlists">{$pr_chinfob31|lower}</a></td>{/if}
                            			</tr>
                            		    </table>
                            		</td>
                            	    </tr>
                            	    {/if}
                            	    {if $smarty.get.view ne "" and $link ne "" and $tpage gt 1}
                                    <tr>
                                        <td colspan="5" align="right" class="bold nopad">
                                            {$link}
                                        </td>
                                    </tr>
                                    {/if}
                            	</table>
				    
				    </form>
				</td>
			    </tr>
			</table>
			{/if}
		    </div>
				