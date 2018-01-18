		    <form id="chsubsform"></form>
		    <div id="b1">
		    {insert name=getfield assign=bl_sub field=bl_sub table=members qfield=uid qvalue=$minfo[0].uid}
			<table cellpadding="5" cellspacing="0" border="0" width="100%">
			    <tr>
				<td align="left" class="{if $smarty.session.UID eq ""}thead2{else}thead1{/if}">{if $minfo[0].ch_title ne ""}{$minfo[0].ch_title|spchar}{else}{$minfo[0].username}{$uch_txt1}{/if}</td>
				<td {if $smarty.session.UID ne "" and ($is_bl ne "yes" or $bl_sub eq "no")}class="thead1btn"{else}class="thead1"{/if} align="center" style="padding: 0px 5px;">
				    {if (($tinfo[0].th_uid eq $smarty.session.UID) and $smarty.session.UID ne "") or ($minfo[0].uid eq $smarty.session.UID) }<a href="{$base_url}/my_profile">{$uch_txt13}</a>
				    {else}
				    {if $smarty.session.UID ne "" and ($is_bl ne "yes" or $bl_sub eq "no")}
					<div id="slinkdiv" style="{if $is_sub eq "no"}display: block;{else}display: none;{/if}">
					    <a id="subscribe" href="javascript:void(0)" onclick="ShowContent('subsrespdiv'); thisDiv('yes'); ldiv('subsrespdiv'); set_subscription('subs', '{$minfo[0].username}', '{$minfo[0].uid}', 'user');">{$uch_txt14}</a>
					</div>
					<div id="uslinkdiv" style="{if $is_sub eq "yes"}display: block;{else}display: none;{/if}">
					    <a id="unsubscribe" href="javascript:void(0)" onclick="ShowContent('subsrespdiv'); set_subscription('unsubs', '{$minfo[0].username}', '{$minfo[0].uid}', 'user');">{$uch_txt15}</a>
					</div>
				    {/if}
				    {/if}
				</td>
			    <tr>
			</table>
			<div id="subsrespdiv" style="display: block;" class="p5"></div>
			<div id="loading_sub" style="display: none;"><table cellpadding=5 cellspacing=0 border=0><tr><td>{$adm_setgen79}</td></tr></table></div>
			{include file="_inc/chan/_inc/inc_userpageb1userinfo.tpl"}
		    </div>
