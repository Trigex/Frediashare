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

session_start();
include('configs/config.php');
//check_login();
$active = "and active='1' and is_inapp='no'";
$smarty->assign('dmenu', 'mymsg'); 
if ($config[enable_videos]=="0") { $unqi=''; } else { $unqi='UNION ALL'; }
if ($config[enable_images]=="0" && $config[enable_audio]=="0") { $unqa=''; } else { $unqa='UNION ALL'; }
if ($config[enable_images]=="0" && $config[enable_videos]=="0") { $unqa=''; } else { $unqa='UNION ALL'; }

if ($config[enable_audio]=="1") { $q1="$unqa (select vtags from files_audio where vtype='public' $active order by addtime desc)"; }
if ($config[enable_images]=="1") { $q2="$unqi (select vtags from files_image where vtype='public' $active order by addtime desc)"; }
if ($config[enable_videos]=="1") { $q3="(select vtags from files_video where vtype='public' $active order by addtime desc)"; }

$recsql="$q3 $q2 $q1";
$rectags=tags($recsql);
$smarty->assign('rectags',$rectags);
set_btn("bhome"); set_sbtn("btags"); set_title($lang[tags_text]);
$smarty->display('main_header.tpl');
$smarty->display('main_tags.tpl');
$smarty->display('footer.tpl');
?>