<div>DO NOT REPLY TO THIS EMAIL!</div>
<div>********************************</div> 
<div>&nbsp;</div>
<div>Hey <strong>{$smarty.request.fname|spchar}</strong>,<br><br>
It's your friend, <strong>{$smarty.session.USERNAME|spchar}</strong>!! I want to add you to my list of friends within the <a href="{$base_url}">{$site_name|spchar}</a> community!<br><br>
Use this special code to <a href="{$base_url}/signup">sign up</a> and you will be automatically added to my list!<br><br>
--------------------------------------------<br>
Your invite code is: <strong>{$code}</strong><br>
--------------------------------------------<br>
<br>
<a href="{$base_url}/signup">Click Here</a> to <strong>sign up</strong> so we can start sharing and having fun!<br><br>
If you are not interested in this, please <a href="{$base_url}/reject/{$code}">click here</a> to <font color="#ff0000"><strong>cancel</strong></font> the request!<br><br>
See you there!<br>
{$smarty.session.USERNAME|spchar}
</div>
