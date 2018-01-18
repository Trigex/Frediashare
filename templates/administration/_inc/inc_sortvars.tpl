								    {if $smarty.request.type eq "all"}
                                                                        {assign var=thetype value=all}
                                                                    {elseif $smarty.request.type eq "active"}
                                                                        {assign var=thetype value=active}
                                                                    {elseif $smarty.request.type eq "comments"}
                                                                        {assign var=thetype value=comments}
                                                                    {elseif $smarty.request.type eq "date"}
                                                                        {assign var=thetype value=date}
                                                                    {elseif $smarty.request.type eq "featured"}
                                                                        {assign var=thetype value=featured}
                                                                    {elseif $smarty.request.type eq "favorited"}
                                                                        {assign var=thetype value=favorited}
                                                                    {elseif $smarty.request.type eq "inactive"}
                                                                        {assign var=thetype value=inactive}
                                                                    {elseif $smarty.request.type eq "inappropriate"}
                                                                        {assign var=thetype value=inappropriate}
                                                                    {elseif $smarty.request.type eq "private"}
                                                                        {assign var=thetype value=private}
                                                                    {elseif $smarty.request.type eq "public"}
                                                                        {assign var=thetype value=public}
                                                                    {elseif $smarty.request.type eq "ratings"}
                                                                        {assign var=thetype value=ratings}
                                                                    {elseif $smarty.request.type eq "views"}
                                                                        {assign var=thetype value=views}
                                                                    {/if}