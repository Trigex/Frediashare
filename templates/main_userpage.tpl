		    {include file="main_userpageheader.tpl"}
			    <table border=0 width="100%" cellpadding="0" cellspacing="0">
				<tr>
				    <td id="leftcol" valign="top" class="p5">
					{include file="_inc/chan/_inc/inc_userpageb1.tpl"}<br>
					{include file="_inc/chan/_inc/inc_userpageb2.tpl"}<br>
					
					{if $tinfo[0].th_subs eq "1" and $tinfo[0].th_subspos eq "left"}
					    {assign var=userimgw value=60}{assign var=userimgh value=60}{assign var=maxloop value=6}{assign var=pagbr value=3}
					    {include file="_inc/chan/_inc/inc_userpageb3.tpl"}<br>
					{/if}
					{if $tinfo[0].th_usubs eq "1" and $tinfo[0].th_usubs_pos eq "left"}
					    {assign var=userimgw value=60}{assign var=userimgh value=60}{assign var=maxloop value=6}{assign var=pagbr value=3}
					    {include file="_inc/chan/_inc/inc_userpageb4.tpl"}<br>
					{/if}
					{if $tinfo[0].th_friends eq "1" and $tinfo[0].th_friends_pos eq "left"}
					    {assign var=userimgw value=60}{assign var=userimgh value=60}{assign var=maxloop value=6}{assign var=pagbr value=3}
					    {include file="_inc/chan/_inc/inc_userpageb6.tpl"}<br>
					{/if}
					{if $shows[0].s_uid ne "" and ( $minfo[0].ch_type eq $pr_chinfotype3 or $minfo[0].ch_type eq $pr_chinfotype4 )}
					    {include file="_inc/chan/_inc/inc_userpageb5.tpl"}<br>
					{/if}
					{if $tinfo[0].th_comm eq "1" and $tinfo[0].th_comm_pos eq "left" and $minfo[0].ch_comm eq "yes" and $profile_comments eq "1"}
					    {include file="_inc/chan/_inc/inc_userpageb7.tpl"}<br>
					{/if}
				    </td>
				    
				    <td id="rightcol" valign="top" style="padding: 5px 0px 0px 20px;">
					{if $tinfo[0].th_featvid eq "1" and $f_key ne ""}
					    {include file="_inc/chan/_inc/inc_userpageb12.tpl"}<br>
					{/if}
					{insert name=keys_to_array assign=chpls arr=$tinfo[0].th_plistchan}
					{if $tinfo[0].th_plist eq "1" and $chpls[0] ne ""}
					    {include file="_inc/chan/_inc/inc_userpageb8.tpl"}<br>
					{/if}
					{if $tinfo[0].th_vid eq "1" and ( $enable_videos eq "1" or $enable_images eq "1" or $enable_audio eq "1")}
					    {include file="_inc/chan/_inc/inc_userpageb9.tpl"}<br>
					{/if}
					{if $tinfo[0].th_vlog eq "1" and $vlog[0].uid ne ""}
					    {include file="_inc/chan/_inc/inc_userpageb11.tpl"}<br>
					{/if}
					{if $tinfo[0].th_fav eq "1" and ( $enable_videos eq "1" or $enable_images eq "1" or $enable_audio eq "1")}
					    {include file="_inc/chan/_inc/inc_userpageb10.tpl"}<br>
					{/if}
					{if $tinfo[0].th_subs eq "1" and $tinfo[0].th_subspos eq "right"}
					    {assign var=userimgw value=90}{assign var=userimgh value=90}{assign var=maxloop value=4}{assign var=pagbr value=4}
					    {include file="_inc/chan/_inc/inc_userpageb3.tpl"}<br>
					{/if}
					{if $tinfo[0].th_usubs eq "1" and $tinfo[0].th_usubs_pos eq "right"}
					    {assign var=userimgw value=90}{assign var=userimgh value=90}{assign var=maxloop value=4}{assign var=pagbr value=4}
					    {include file="_inc/chan/_inc/inc_userpageb4.tpl"}<br>
					{/if}
					{if $tinfo[0].th_friends eq "1" and $tinfo[0].th_friends_pos eq "right"}
					    {assign var=userimgw value=90}{assign var=userimgh value=90}{assign var=maxloop value=4}{assign var=pagbr value=4}
					    {include file="_inc/chan/_inc/inc_userpageb6.tpl"}<br>
					{/if}
					{if $tinfo[0].th_comm eq "1" and $tinfo[0].th_comm_pos eq "right" and $minfo[0].ch_comm eq "yes" and $profile_comments eq "1"}
					    {include file="_inc/chan/_inc/inc_userpageb7.tpl"}<br>
					{/if}
				    </td>
				</tr>
			    </table>
			</div>
		    </td>
		</tr>
	    </table>
	    {include file="main_userpagefooter.tpl"}
