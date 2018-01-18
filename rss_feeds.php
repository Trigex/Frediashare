<?php
/**************************************************************************************************
| Software Name        : MediaShare - Audio, Image and Video Sharing Script
| Software Author      : MediaShare Development Team
| Website              : http://www.mediasharesuite.com
| E-mail               : mediasharesuite@gmail.com
|**************************************************************************************************
|
|**************************************************************************************************
| This source file is subject to the MediaShare End-User License Agreement, available online at:
| http://www.mediasharesuite.com/products/mediashare/eula/
| By using this software, you acknowledge having read this Agreement and agree to be bound thereby.
|**************************************************************************************************
| Copyright (c) 2007-2009 mediasharesuite.com. All rights reserved.
|**************************************************************************************************/

include('configs/config.php');
check_active();
if($config[rss_feeds]=="0") { header("Location: $config[base_url]/main"); exit; }
$smarty->assign('dmenu', 'mymsg');
set_btn("bhome"); set_sbtn("feeds");
set_title($lang['title_rssfeeds']);
$smarty->display('main_header.tpl');
$smarty->display('main_rss.tpl');
$smarty->display('footer.tpl');
?>