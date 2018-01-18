<table cellpadding="0" cellspacing="0" border=0>
    <tr>
	<td>
	    <table cellpadding="0" cellspacing="0">
		<tr>
		    <td><span style="font-size: 14px;">{if $sbtn eq "fav"}{$myfav}{elseif $sbtn eq "mpl"}{$myplist}{elseif $sbtn eq "mql"}{$qlist_txt4}{elseif $sbtn eq "ufavs"}{$ft}{elseif $sbtn eq "mpl2"}{$plist_txt1}{/if}</span></td>
		</tr>
	    </table>
	</td>
	<td><span style="font-size: 14px;">&nbsp;&nbsp;/&nbsp;&nbsp;</span></td>
	<td>
	    <div id="sortfa" {if $smarty.request.page eq "" and $smarty.request.pagei eq "" and $smarty.request.vtype eq "" and $smarty.request.itype eq ""}style="display: block;"{else}style="display: none;"{/if}>
	    {if $enable_audio eq "1"}
	    <ul id="{if $site_theme eq "metube"}Menu_tube3{else}Menu4{/if}" class="{if $site_theme eq "metube"}MM_tube{else}MM2{/if}" style="padding: 0px; margin: 0px; line-height: 15px;">
		<li>
		    <table cellpadding="0" cellspacing="0">
			<tr>
			    <td>
				<a href="javascript:void(0)">
				    <span style="font-size: 14px; margin-right: 3px;">
					{if $smarty.request.atype eq "" or $smarty.request.atype eq "all"}{$adm_sortall}{elseif $smarty.request.atype eq "date"}{$mostrecent}{elseif $smarty.request.atype eq "featured"}{$adm_sortfeat}{elseif $smarty.request.atype eq "views"}{$mostvieweda}{elseif $smarty.request.atype eq "comments"}{$mostcomm}{elseif $smarty.request.atype eq "responses"}{$fresp_txt28}{elseif $smarty.request.atype eq "ratings"}{$toprated}{elseif $smarty.request.atype eq "favorited"}{$topfav}{/if}
				    </span>
				</a>
			    </td>
			</tr>
		    </table>
		    <ul id="hidem4">
            		{if $enable_audio eq "1"}{include file="_inc/inc_sortmyfilesfava.tpl"}{/if}
            	    </ul>
		</li>
	    </ul>
	    {/if}
	    </div>
	    <div id="sortfi" style="{if $enable_audio eq "1" and ($smarty.request.pagei eq "" and $smarty.request.itype eq "")}display: none;{elseif $enable_audio eq "0" and $enable_images eq "0"}display: none;{elseif $enable_audio eq "0" and $smarty.request.vtype ne ""}display: none;{else}display: block;{/if}">
	    {if $enable_images eq "1"}
	    <ul id="{if $site_theme eq "metube"}Menu_tube4{else}Menu5{/if}" class="{if $site_theme eq "metube"}MM_tube{else}MM2{/if}" style="padding: 0px; margin: 0px; line-height: 15px;">
		<li>
		    <table cellpadding="0" cellspacing="0">
			<tr>
			    <td>
				<a href="javascript:void(0)">
				    <span style="font-size: 14px; margin-right: 3px;">
					{if $smarty.request.itype eq "" or $smarty.request.itype eq "all"}{$adm_sortall}{elseif $smarty.request.itype eq "date"}{$mostrecent}{elseif $smarty.request.itype eq "featured"}{$adm_sortfeat}{elseif $smarty.request.itype eq "views"}{$mostviewed}{elseif $smarty.request.itype eq "comments"}{$mostcomm}{elseif $smarty.request.itype eq "responses"}{$fresp_txt28}{elseif $smarty.request.itype eq "ratings"}{$toprated}{elseif $smarty.request.itype eq "favorited"}{$topfav}{/if}
				    </span>
				</a>
			    </td>
			</tr>
		    </table>
		    <ul id="hidem5">
            		{if $enable_images eq "1"}{include file="_inc/inc_sortmyfilesfavi.tpl"}{/if}
            	    </ul>
		</li>
	    </ul>
	    {/if}
	    </div>
	    <div id="sortfv" style="{if $enable_audio ne "1" and $enable_images ne "1"}display: block;{elseif $smarty.request.page ne "" or $smarty.request.vtype ne ""}display: block;{else}display: none;{/if}">
	    {if $enable_videos eq "1"}
	    <ul id="{if $site_theme eq "metube"}Menu_tube5{else}Menu6{/if}" class="{if $site_theme eq "metube"}MM_tube{else}MM2{/if}" style="padding: 0px; margin: 0px; line-height: 15px;">
		<li>
		    <table cellpadding="0" cellspacing="0">
			<tr>
			    <td>
				<a href="javascript:void(0)">
				    <span style="font-size: 14px; margin-right: 3px;">
					{if $smarty.request.vtype eq "" or $smarty.request.vtype eq "all"}{$adm_sortall}{elseif $smarty.request.vtype eq "date"}{$mostrecent}{elseif $smarty.request.vtype eq "featured"}{$adm_sortfeat}{elseif $smarty.request.vtype eq "views"}{$mostviewed}{elseif $smarty.request.vtype eq "comments"}{$mostcomm}{elseif $smarty.request.vtype eq "responses"}{$fresp_txt28}{elseif $smarty.request.vtype eq "ratings"}{$toprated}{elseif $smarty.request.vtype eq "favorited"}{$topfav}{/if}
				    </span>
				</a>
			    </td>
			</tr>
		    </table>
		    <ul id="hidem6">
            		{if $enable_videos eq "1"}{include file="_inc/inc_sortmyfilesfav.tpl"}{/if}
            	    </ul>
		</li>
	    </ul>
	    {/if}
	    </div>
	</td>
    </tr>
</table>
