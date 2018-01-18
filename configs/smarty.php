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

    require_once($config['class_dir'] . '/Smarty/Smarty.class.php');
    $smarty = new Smarty;
    $smarty->compile_check = true;
    $smarty->debugging = false;
    $smarty->template_dir = $config['tpl_dir'];
    $smarty->cache_dir = $config['cache_dir'];
    $smarty->compile_dir = $config['cache_dir'] . '/templates_c';
    
    //assign dirs names to vars    
    $smarty->assign('base_dir', $config['base_dir']);
    $smarty->assign('base_url', $config['base_url']);
    $smarty->assign('tpl_dir', $config['tpl_dir']);
    $smarty->assign('tpl_url', $config['tpl_url']);
    $smarty->assign('css_dir', $config['css_dir']);
    $smarty->assign('css_url', $config['css_url']);
    $smarty->assign('js_dir', $config['js_dir']);
    $smarty->assign('js_url', $config['js_url']);
    $smarty->assign('img_dir', $config['img_dir']);
    $smarty->assign('img_url', $config['img_url']);
    $smarty->assign('chimg_dir', $config['chimg_dir']);
    $smarty->assign('chimg_url', $config['chimg_url']);
    $smarty->assign('usrimg_dir', $config['usrimg_dir']);
    $smarty->assign('usrimg_url', $config['usrimg_url']);
    $smarty->assign('catimg_dir', $config['catimg_dir']);
    $smarty->assign('catimg_url', $config['catimg_url']);
    $smarty->assign('tmb_url', $config['tmb_url']);
    $smarty->assign('url_fp', $config['url_fp']);    
    $smarty->assign('ado_url', $config['ado_url']);
    $smarty->assign('ado_dir', $config['ado_dir']);
    $smarty->assign('vdo_url', $config['vdo_url']);
    $smarty->assign('vdo_dir', $config['vdo_dir']);
    $smarty->assign('pic_url', $config['pic_url']);
    $smarty->assign('pic_dir', $config['pic_dir']);    
    $smarty->assign('flvdo_url',$config['flvdo_url']);
    $smarty->assign('theme_url',$config['theme_url']);
?>