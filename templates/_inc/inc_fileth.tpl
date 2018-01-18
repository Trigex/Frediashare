	{if $btn eq "bvideo"}
	    <table width="100%" cellpadding=0 cellspacing=0 border=0>
                <tr>
                    <td align="right">{insert name=uid_to_names assign=auser uid=$smarty.request.user}
                        <span class="italic">
                        {if $smarty.session.UID ne "" or $guests_categories_view eq "1" or $guests_file_sorting eq "1"}
                            {if $type eq "mr"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$videos_mr} {$videos_main}{if $smarty.request.category ne ""}{$thgtsigns}{$videos_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid);{/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                            {if $type eq "mv"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$videos_mv} {$videos_main}{if $smarty.request.category ne ""}{$thgtsigns}{$videos_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                            {if $type eq "rf"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$videos_rf} {$videos_main}{if $smarty.request.category ne ""}{$thgtsigns}{$videos_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                            {if $type eq "md"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$videos_md} {$videos_main}{if $smarty.request.category ne ""}{$thgtsigns}{$videos_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                            {if $type eq "mre"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$fresp_txt28} {$videos_main}{if $smarty.request.category ne ""}{$thgtsigns}{$videos_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                            {if $type eq "tf"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$videos_tf} {$videos_main}{if $smarty.request.category ne ""}{$thgtsigns}{$videos_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                            {if $type eq "tr"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$videos_tr} {$videos_main}{if $smarty.request.category ne ""}{$thgtsigns}{$videos_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                            {if $type eq "ra"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$videos_rnd} {$videos_main}{if $smarty.request.category ne ""}{$thgtsigns}{$videos_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                        {else}
                            {if $smarty.request.user ne ""}{$smarty.request.user}
                                {$videos_user}
                            {else}
                                {$videos_mr} {$videos_main}
                            {/if}
                        {/if}
                        </span>
                    </td>
                </tr>
            </table> 
        {elseif $btn eq "bimage"}
	    <table width="100%" cellpadding=0 cellspacing=0 border=0>
                <tr>
                    <td align="right">{insert name=uid_to_names assign=auser uid=$smarty.request.user}
                        <span class="italic">
                        {if $smarty.session.UID ne "" or $guests_categories_view eq "1" or $guests_file_sorting eq "1"}
                            {if $type eq "mr"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$videos_mr} {$images_main}{if $smarty.request.category ne ""}{$thgtsigns}{$images_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                            {if $type eq "mv"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$videos_mv} {$images_main}{if $smarty.request.category ne ""}{$thgtsigns}{$images_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                            {if $type eq "rf"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$videos_rf} {$images_main}{if $smarty.request.category ne ""}{$thgtsigns}{$images_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                            {if $type eq "md"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$videos_md} {$images_main}{if $smarty.request.category ne ""}{$thgtsigns}{$images_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                            {if $type eq "mre"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$fresp_txt28} {$images_main}{if $smarty.request.category ne ""}{$thgtsigns}{$images_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                            {if $type eq "tf"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$videos_tf} {$images_main}{if $smarty.request.category ne ""}{$thgtsigns}{$images_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                            {if $type eq "tr"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$videos_tr} {$images_main}{if $smarty.request.category ne ""}{$thgtsigns}{$images_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                            {if $type eq "ra"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$videos_rnd} {$images_main}{if $smarty.request.category ne ""}{$thgtsigns}{$images_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                        {else}
                            {if $smarty.request.user ne ""}{$smarty.request.user}
                                {$images_user}
                            {else}
                                {$videos_mr} {$images_main}
                            {/if}
                        {/if}
                        </span>
                    </td>
                </tr>
            </table>
        {elseif $btn eq "baudio"}
    	    <table width="100%" cellpadding=0 cellspacing=0 border=0>
                <tr>
                    <td align="right">{insert name=uid_to_names assign=auser uid=$smarty.request.user}<span class="italic">
                        {if $smarty.session.UID ne "" or $guests_categories_view eq "1" or $guests_file_sorting eq "1"}
                            {if $type eq "mr"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$videos_mr} {$audios_main}{if $smarty.request.category ne ""}{$thgtsigns}{$audios_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                            {if $type eq "mv"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$videos_mp} {$audios_main}{if $smarty.request.category ne ""}{$thgtsigns}{$audios_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                            {if $type eq "rf"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$videos_rf} {$audios_main}{if $smarty.request.category ne ""}{$thgtsigns}{$audios_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                            {if $type eq "md"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$videos_md} {$audios_main}{if $smarty.request.category ne ""}{$thgtsigns}{$audios_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                            {if $type eq "mre"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$fresp_txt28} {$audios_main}{if $smarty.request.category ne ""}{$thgtsigns}{$audios_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                            {if $type eq "tf"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$videos_tf} {$audios_main}{if $smarty.request.category ne ""}{$thgtsigns}{$audios_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                            {if $type eq "tr"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$videos_tr} {$audios_main}{if $smarty.request.category ne ""}{$thgtsigns}{$audios_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                            {if $type eq "ra"}{if $smarty.request.user ne ""}{if $special_characters eq "0"}{$smarty.request.user}'s{else}{$auser}'s{/if} {/if}{$videos_rnd} {$audios_main}{if $smarty.request.category ne ""}{$thgtsigns}{$audios_in}{php} global $smarty; $rid = ereg_replace("_{1,}", " ", $_REQUEST[category]); $smarty->assign('rid',$rid); {/php}{if $special_characters eq "0"}{$rid|endconv}{else}{$cname}{/if}{/if}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{/if}
                        {else}
                            {if $smarty.request.user ne ""}{$smarty.request.user}
                                {$audios_user}
                            {else}
                                {$videos_mr} {$audios_main}
                            {/if}
                        {/if}
                        </span>
                    </td>
                </tr>
            </table>
        {elseif $sbtn eq "myaud"}
    	    <table width="100%" cellpadding=0 cellspacing=0 border=0>
                <tr>
                    <td width="80%" align="right"><span class="italic">{$myaudios_heading}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{$thgtsigns}{insert name=thsortfilters assign=myflt ts=$smarty.request.vtype}{$myflt}</span>
                </tr>
            </table>
        {elseif $sbtn eq "myimg"}
    	    <table width="100%" cellpadding=0 cellspacing=0 border=0>
                <tr>
                    <td width="80%" align="right"><span class="italic">{$myimages_heading}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{$thgtsigns}{insert name=thsortfilters assign=myflt ts=$smarty.request.vtype}{$myflt}</span>
                </tr>
            </table>
        {elseif $sbtn eq "myvid"}
    	    <table width="100%" cellpadding=0 cellspacing=0 border=0>
                <tr>
                    <td width="80%" align="right"><span class="italic">{$myvideos_heading}{$thgtsigns}{insert name=thsortdate assign=myfrom ts=$smarty.request.timesort}{$myfrom}{$thgtsigns}{insert name=thsortfilters assign=myflt ts=$smarty.request.vtype}{$myflt}</span>
                </tr>
            </table>
        {elseif $sbtn eq "adm_search"}
    	    <td class=bg><h2>{$search_th1} '{$in}' {$search_th2} '{$stype}' {$search_th3} {$total} {if $total eq "1"}{$search_th4}{else}{$search_th5}{/if}</h2></td>
    	    <td class=bg align=right><h2>{if $total ne "0"} {$search_nr} [{$start_num}-{$end_num}] {$search_of} [{$total}]{/if}</h2></td>
    	{/if}