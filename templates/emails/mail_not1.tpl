<div>DO NOT REPLY TO THIS EMAIL</div>
<div>********************************</div>
<div>&nbsp;</div>
<div>Dear {$rcv|spchar},</div>
<div>&nbsp;</div>
<div>You have received a new private message from {$snd|spchar}, with the subject &quot;{$subj|spchar}&quot;</div>
<div>&nbsp;</div>
<div>To access the original message, please log in here: <a href="{$base_url}/inbox">{$base_url}/inbox</a></div>
<p>{if $tx gt 0}</p>
<div>This message has {$tx} attachement(s). To view the attachement(s), please log in here: <a href="{$base_url}/inbox">{$base_url}/inbox</a></div>
<p>{/if}</p>
<div>&nbsp;</div>
<div>This is the message that was sent:</div>
<div>***************</div>
<div>{$body|nl2br|spchar}</div>
<div>***************</div>
<div>&nbsp;</div>
<div>Again, please do not reply to this email. You must go to the following page to reply to this private message:</div>
<div><a href="{$base_url}/inbox">{$base_url}/inbox</a></div>
<div>&nbsp;</div>
<div><em>-The {$site_name|spchar} Team!-</em></div>