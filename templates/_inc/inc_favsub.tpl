				{if $enable_channels eq "1"}
				    <table cellpadding="0" cellspacing="0" border=1>
					<tr>
                                            <td valign="top" align="right">
                                                <form id="chsubsform"></form>
                                                {insert name=getfield assign=vuid field=uid table=members qfield=username qvalue=$smarty.request.user}
                                                {insert name=getfield assign=bl_sub field=bl_sub table=members qfield=uid qvalue=$vuid}
                                                {insert name=getfield assign=muser field=username table=members qfield=uid qvalue=$vuid}
                                                <table cellpadding="0" cellspacing="0" border="0" align="right">
                                                    <tr>
                                                        <td {if $smarty.session.UID ne "" and ($is_bl ne "yes" or $bl_sub eq "no")}class="thead1btn"{else}class="thead1"{/if} align="center" style="padding: 5px;">
                                                            {if (($vuid eq $smarty.session.UID) and $smarty.session.UID ne "") or ($vuid eq $smarty.session.UID) }<a href="{$base_url}/my_profile">{$uch_txt13}</a>
                                                            {else}
                                                            {if $smarty.session.UID ne "" and ($is_bl ne "yes" or $bl_sub eq "no")}
                                                                <div id="slinkdiv" style="{if $is_sub eq "no"}display: block;{else}display: none;{/if}">
                                                                    <a href="javascript:void(0)" onclick="ShowContent('subsrespdiv'); thisDiv('yes'); ldiv('subsrespdiv'); set_subscription('subs', '{$muser}', '{$vuid}', 'fav');">{$uch_txt14}</a>
                                                                </div>
                                                                <div id="uslinkdiv" style="{if $is_sub eq "yes"}display: block;{else}display: none;{/if}">
                                                                    <a href="javascript:void(0)" onclick="ShowContent('subsrespdiv'); set_subscription('unsubs', '{$muser}', '{$vuid}', 'fav');">{$uch_txt15}</a>
                                                                </div>
                                                            {/if}
                                                            {/if}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                {/if}
