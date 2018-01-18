{if $sbtn eq "mpl" or $sbtn eq "fav" or $sbtn eq "ufavs"}
    {if $smarty.request.pagei%10 eq 0}
	{assign var=opi value=$smarty.request.pagei-1}
	{section name=fooi start=$smarty.request.pagei-$opi loop=$smarty.request.pagei}
	    #pgi{$smarty.section.fooi.index} {ldelim} display: none; {rdelim}
	{/section}
	{section name=foo2i start=$smarty.request.pagei+11 loop=$tpagei+1}
	    #pgi{$smarty.section.foo2i.index} {ldelim} display: none; {rdelim}
	{/section}
    {else}
	{assign var=cati value=$smarty.request.pagei/10}
	{assign var=cat2i value=$cati*10}
	{assign var=resti value=$cat2i%10}
	{section name=foo3i start=1 loop=$cat2i-$resti}
	    #pgi{$smarty.section.foo3i.index} {ldelim} display: none; {rdelim}
	{/section}
	{assign var=difi value=$cat2i-$resti}
	{assign var=dif2i value=$difi+11}
	{section name=foo4i start=$dif2i loop=$tpagei+1}
	    #pgi{$smarty.section.foo4i.index} {ldelim} display: none; {rdelim}
	{/section}
    {/if}
    {if $smarty.request.pagea%10 eq 0}
	{assign var=opa value=$smarty.request.pagea-1}
	{section name=fooa start=$smarty.request.pagea-$opa loop=$smarty.request.pagea}
	    #pga{$smarty.section.fooa.index} {ldelim} display: none; {rdelim}
	{/section}
	{section name=foo2a start=$smarty.request.pagea+11 loop=$tpagea+1}
	    #pga{$smarty.section.foo2a.index} {ldelim} display: none; {rdelim}
	{/section}
    {else}
	{assign var=cata value=$smarty.request.pagea/10}
	{assign var=cat2a value=$cata*10}
	{assign var=resta value=$cat2a%10}
	{section name=foo3a start=1 loop=$cat2a-$resta}
	    #pga{$smarty.section.foo3a.index} {ldelim} display: none; {rdelim}
	{/section}
	{assign var=difa value=$cat2a-$resta}
	{assign var=dif2a value=$difa+11}
	{section name=foo4a start=$dif2a loop=$tpagea+1}
	#pga{$smarty.section.foo4a.index} {ldelim} display: none; {rdelim}
	{/section}
    {/if}
    {if $smarty.request.page%10 eq 0}
	{assign var=op value=$smarty.request.page-1}
	{section name=foo start=$smarty.request.page-$op loop=$smarty.request.page}
	    #pg{$smarty.section.foo.index} {ldelim} display: none; {rdelim}
	{/section}
	{section name=foo2 start=$smarty.request.page+11 loop=$tpage+1}
	    #pg{$smarty.section.foo2.index} {ldelim} display: none; {rdelim}
	{/section}
    {else}
	{assign var=cat value=$smarty.request.page/10}
	{assign var=cat2 value=$cat*10}
	{assign var=rest value=$cat2%10}
	{section name=foo3 start=1 loop=$cat2-$rest}
	    #pg{$smarty.section.foo3.index} {ldelim} display: none; {rdelim}
	{/section}
	{assign var=dif value=$cat2-$rest}
	{assign var=dif2 value=$dif+11}
	{section name=foo4 start=$dif2 loop=$tpage+1}
	    #pg{$smarty.section.foo4.index} {ldelim} display: none; {rdelim}
	{/section}
    {/if}
{else}
    {if $smarty.request.page%10 eq 0}
	{assign var=op value=$smarty.request.page-1}
	{section name=foo start=$smarty.request.page-$op loop=$smarty.request.page}
	    #pg{$smarty.section.foo.index} {ldelim} display: none; {rdelim}
	{/section}
	{section name=foo2 start=$smarty.request.page+11 loop=$tpage+1}
	    #pg{$smarty.section.foo2.index} {ldelim} display: none; {rdelim}
	{/section}
    {else}
	{assign var=cat value=$smarty.request.page/10}
	{assign var=cat2 value=$cat*10}
	{assign var=rest value=$cat2%10}
	{section name=foo3 start=1 loop=$cat2-$rest}
	    #pg{$smarty.section.foo3.index} {ldelim} display: none; {rdelim}
	{/section}
	{assign var=dif value=$cat2-$rest}
	{assign var=dif2 value=$dif+11}
	{section name=foo4 start=$dif2 loop=$tpage+1}
	    #pg{$smarty.section.foo4.index} {ldelim} display: none; {rdelim}
	{/section}
    {/if}
{/if}