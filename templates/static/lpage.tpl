<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
	<title>{$site_name}</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="{$meta_desc|spchar}" />
	<meta name="keywords" content="{$meta_tags|spchar}" />
	<meta name="revisit-after" content="1" />
	<style type="text/css">
	    body {ldelim} background-color: #ffffff; margin: 0px 20px 0px 20px; {rdelim}
	    #main {ldelim} width: 750px; margin-left: auto; margin-right: auto; {rdelim}
	    #logo {ldelim} margin: 75px 0 30px 0; {rdelim}
	    #logo img {ldelim} border: 0px; {rdelim}
	    #w1 {ldelim} font: 26px normal Arial,Helvetica,sans-serif; color: #173778; letter-spacing: -1px; padding-top: 30px; text-align: center; {rdelim}
	    #w2 {ldelim} margin: 20px 0 0 0; font: 16px normal Arial,Helvetica,sans-serif; color: #555; float: left; {rdelim}
	    #in {ldelim} float: left; margin: 50px 0 0 50px; {rdelim}
	    #in a, #out a {ldelim} display: block; width: 100px; height: 34px; background: transparent url({$base_url}/media/site_images/btn_lpage.gif) no-repeat; font: 20px/32px normal Arial,Helvetica,sans-serif; color: #173778; text-decoration: none; text-align: center; {rdelim}
	    #out {ldelim} float: right; margin: 50px 50px 0 0px; {rdelim}
	    .centered {ldelim} text-align: center; {rdelim}
	</style>
    </head>
    <body>
	<div id="main">
	    <div id="logo" class="centered">{include file="static/logo_table.tpl"}</div>
	    <div>&nbsp;</div>
	    <div>&nbsp;</div>
	    <div>&nbsp;</div>
	    <div>&nbsp;</div>
	    <div id="w1" class="centered">{$lp_txt1}</div>
	    <form name="udate" method="post" action="">
		<div id="w2" class="centered">{$lp_txt2}{html_select_date prefix="StartDate" time=$time start_year="-109" end_year="+1" display_days=true}</div>
		<div id="in"><a href="javascript:void(0)" onclick="document.udate.submit(); return false;">{$lp_txt3}</a></div>
		<div id="out"><a href="javascript:void(0)" onclick="location.href='http://www.google.com'; return false;">{$lp_txt4}</a></div>
	    </form>
	</div>
    </body>
</html>