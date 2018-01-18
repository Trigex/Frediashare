<table width="950" cellpadding="0" cellspacing="0" align="center" border=0>
    <tr>
	<td>
	{if $dmenu eq "myfiles"}{include file="_inc/dropmenu/dm_myfiles.tpl"}
	{elseif $dmenu eq "mymsg" or $dmenu eq "mysubs"}{include file="_inc/dropmenu/dm_myacct.tpl"}
	{elseif $dmenu eq "myfav"}{include file="_inc/dropmenu/dm_myfav.tpl"}
	{/if}
	</td>
	{if $sbtn eq "friends"}<td align="right"><a href="{$base_url}/my_friends/invite"><span class="{if $act eq "invite"}act{/if}">{$myfr_invbtn}</span></a></td>{/if}
	{if $btn eq "bcateg" and ( $sbtn eq "img" or $sbtn eq "aud" or $sbtn eq "vid" )}<td align="right">{include file="_inc/inc_categth.tpl"}</td>{/if}
	{if $sbtn eq "search"}<td align="right"><span class="italic">{$search_th1} '{$in}' {$search_th2} '{$stype}' {$search_th3} {$total} {if $total eq "1"}{$search_th4}{else}{$search_th5}{/if}</span> {if $total ne "0"}[{$start_num}-{$end_num}] {$search_of} [{$total}]{else}&nbsp;{/if}</td>{/if}
    </tr>
    <tr>
	<td height="5"></td>
    </tr>
</table>
