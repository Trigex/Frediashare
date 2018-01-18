<div>DO NOT REPLY TO THIS EMAIL!</div>
<div>********************************</div>
<div>&nbsp;</div>
<div><a href="{$base_url}/user/{$sndr|spchar}">{$sndr|spchar}</a> has shared a playlist with you on {$site_name|spchar}. </div>
<div>&nbsp;</div>
{if $chmsg ne ""}
<div>Message from {$sndr|spchar}:</div>
<div>{$chmsg|nl2br|spchar}</div>
{/if}
<br>
<div style="background-color: #F9F9FD; border: 1px solid #CCF;"><table width="100%" cellpadding="10" cellspacing="0"><tr><td width="{$img_max_width}"><a href="{$base_url}/{$ptype}_playlist/{$pkey}"><img src="{$pthumb}" width="{$img_max_width}" height="{$img_max_height}" alt="" title=""></a></td><td valign="top" align="left"><a href="{$base_url}/{$ptype}_playlist/{$pkey}">{$ptitle|spchar}</a></td></tr></table></div>
