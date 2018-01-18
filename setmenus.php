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
include("configs/config.php");
if ( filter_title ( $_GET['w'] ) == '1' ) {
    $wt = filter_title ( $_GET['wt'] );
    if ( $wt == 'featv' and $config['enable_videos'] == '1' ) { 
	if ( isset ( $_SESSION['hpfeatv'] ) and $_SESSION['hpfeatv'] != '' ) {
	    if ( $_SESSION['hpfeatv'] == 'none' ) $_SESSION['hpfeatv'] = 'block'; 
	    elseif ( $_SESSION['hpfeatv'] == 'block' ) $_SESSION['hpfeatv'] = 'none'; 
	} else { session_register("hpfeatv"); $_SESSION['hpfeatv'] = 'none'; exit; }
    }
    if ( $wt == 'feati' and $config['enable_images'] == '1' ) {
	if ( isset ( $_SESSION['hpfeati'] ) and $_SESSION['hpfeati'] != '' ) {
	    if ( $_SESSION['hpfeati'] == 'none' ) $_SESSION['hpfeati'] = 'block'; 
	    elseif ( $_SESSION['hpfeati'] == 'block' ) $_SESSION['hpfeati'] = 'none'; 
	} else { session_register("hpfeati"); $_SESSION['hpfeati'] = 'none'; exit; }
    }
    if ( $wt == 'feata' and $config['enable_audio'] == '1' ) {
	if ( isset ( $_SESSION['hpfeata'] ) and $_SESSION['hpfeata'] != '' ) {
	    if ( $_SESSION['hpfeata'] == 'none' ) $_SESSION['hpfeata'] = 'block'; 
	    elseif ( $_SESSION['hpfeata'] == 'block' ) $_SESSION['hpfeata'] = 'none'; 
	} else { session_register("hpfeata"); $_SESSION['hpfeata'] = 'none'; exit; }
    }
    if ( $wt == 'featvid' and $config['enable_videos'] == '1' ) {
	if ( isset ( $_SESSION['hpfeatvid'] ) and $_SESSION['hpfeatvid'] != '' ) {
	    if ( $_SESSION['hpfeatvid'] == 'none' ) $_SESSION['hpfeatvid'] = 'block'; 
	    elseif ( $_SESSION['hpfeatvid'] == 'block' ) $_SESSION['hpfeatvid'] = 'none'; 
	} else { session_register("hpfeatvid"); $_SESSION['hpfeatvid'] = 'none'; exit; }
    }
    if ( $wt == 'ustat' ) {
	if ( isset ( $_SESSION['hpustat'] ) and $_SESSION['hpustat'] != '' ) {
	    if ( $_SESSION['hpustat'] == 'none' ) $_SESSION['hpustat'] = 'block'; 
	    elseif ( $_SESSION['hpustat'] == 'block' ) $_SESSION['hpustat'] = 'none'; 
	} else { session_register("hpustat"); $_SESSION['hpustat'] = 'none'; exit; }
    }
    if ( $wt == 'inbox' ) {
	if ( isset ( $_SESSION['hpinbox'] ) and $_SESSION['hpinbox'] != '' ) {
	    if ( $_SESSION['hpinbox'] == 'none' ) $_SESSION['hpinbox'] = 'block'; 
	    elseif ( $_SESSION['hpinbox'] == 'block' ) $_SESSION['hpinbox'] = 'none'; 
	} else { session_register("hpinbox"); $_SESSION['hpinbox'] = 'none'; exit; }
    }
    if ( $wt == 'about' ) {
	if ( isset ( $_SESSION['hpabout'] ) and $_SESSION['hpabout'] != '' ) {
	    if ( $_SESSION['hpabout'] == 'none' ) $_SESSION['hpabout'] = 'block'; 
	    elseif ( $_SESSION['hpabout'] == 'block' ) $_SESSION['hpabout'] = 'none'; 
	} else { session_register("hpabout"); $_SESSION['hpabout'] = 'none'; exit; }
    }
    if ( $wt == 'menu_myacct' ) {
	if ( isset ( $_SESSION['menu_myacct'] ) and $_SESSION['menu_myacct'] != '' ) {
	    if ( $_SESSION['menu_myacct'] == 'none' ) $_SESSION['menu_myacct'] = 'block'; 
	    elseif ( $_SESSION['menu_myacct'] == 'block' ) $_SESSION['menu_myacct'] = 'none'; 
	} else { session_register("menu_myacct"); $_SESSION['menu_myacct'] = 'none'; exit; }
    }
    if ( $wt == 'menu_apl' ) {
	if ( isset ( $_SESSION['menu_apl'] ) and $_SESSION['menu_apl'] != '' ) {
	    if ( $_SESSION['menu_apl'] == 'none' ) $_SESSION['menu_apl'] = 'block'; 
	    elseif ( $_SESSION['menu_apl'] == 'block' ) $_SESSION['menu_apl'] = 'none'; 
	} else { session_register("menu_apl"); $_SESSION['menu_apl'] = 'none'; exit; }
    }
    if ( $wt == 'menu_ipl' ) {
	if ( isset ( $_SESSION['menu_ipl'] ) and $_SESSION['menu_ipl'] != '' ) {
	    if ( $_SESSION['menu_ipl'] == 'none' ) $_SESSION['menu_ipl'] = 'block'; 
	    elseif ( $_SESSION['menu_ipl'] == 'block' ) $_SESSION['menu_ipl'] = 'none'; 
	} else { session_register("menu_ipl"); $_SESSION['menu_ipl'] = 'none'; exit; }
    }
    if ( $wt == 'menu_vpl' ) {
	if ( isset ( $_SESSION['menu_vpl'] ) and $_SESSION['menu_vpl'] != '' ) {
	    if ( $_SESSION['menu_vpl'] == 'none' ) $_SESSION['menu_vpl'] = 'block'; 
	    elseif ( $_SESSION['menu_vpl'] == 'block' ) $_SESSION['menu_vpl'] = 'none'; 
	} else { session_register("menu_vpl"); $_SESSION['menu_vpl'] = 'none'; exit; }
    }
    if ( $wt == 'menu_display' ) {
	if ( isset ( $_SESSION['menu_display'] ) and $_SESSION['menu_display'] != '' ) {
	    if ( $_SESSION['menu_display'] == 'none' ) $_SESSION['menu_display'] = 'block'; 
	    elseif ( $_SESSION['menu_display'] == 'block' ) $_SESSION['menu_display'] = 'none'; 
	} else { session_register("menu_display"); $_SESSION['menu_display'] = 'none'; exit; }
    }
    if ( $wt == 'menu_browsea' ) {
	if ( isset ( $_SESSION['menu_browsea'] ) and $_SESSION['menu_browsea'] != '' ) {
	    if ( $_SESSION['menu_browsea'] == 'none' ) $_SESSION['menu_browsea'] = 'block'; 
	    elseif ( $_SESSION['menu_browsea'] == 'block' ) $_SESSION['menu_browsea'] = 'none'; 
	} else { session_register("menu_browsea"); $_SESSION['menu_browsea'] = 'none'; exit; }
    }
    if ( $wt == 'menu_browsei' ) {
	if ( isset ( $_SESSION['menu_browsei'] ) and $_SESSION['menu_browsei'] != '' ) {
	    if ( $_SESSION['menu_browsei'] == 'none' ) $_SESSION['menu_browsei'] = 'block'; 
	    elseif ( $_SESSION['menu_browsei'] == 'block' ) $_SESSION['menu_browsei'] = 'none'; 
	} else { session_register("menu_browsei"); $_SESSION['menu_browsei'] = 'none'; exit; }
    }
    if ( $wt == 'menu_browsev' ) {
	if ( isset ( $_SESSION['menu_browsev'] ) and $_SESSION['menu_browsev'] != '' ) {
	    if ( $_SESSION['menu_browsev'] == 'none' ) $_SESSION['menu_browsev'] = 'block'; 
	    elseif ( $_SESSION['menu_browsev'] == 'block' ) $_SESSION['menu_browsev'] = 'none'; 
	} else { session_register("menu_browsev"); $_SESSION['menu_browsev'] = 'none'; exit; }
    }
    if ( $wt == 'menu_profile' ) {
	if ( isset ( $_SESSION['menu_profile'] ) and $_SESSION['menu_profile'] != '' ) {
	    if ( $_SESSION['menu_profile'] == 'none' ) $_SESSION['menu_profile'] = 'block'; 
	    elseif ( $_SESSION['menu_profile'] == 'block' ) $_SESSION['menu_profile'] = 'none'; 
	} else { session_register("menu_profile"); $_SESSION['menu_profile'] = 'none'; exit; }
    }
    if ( $wt == 'menu_inbox' ) {
	if ( isset ( $_SESSION['menu_inbox'] ) and $_SESSION['menu_inbox'] != '' ) {
	    if ( $_SESSION['menu_inbox'] == 'none' ) $_SESSION['menu_inbox'] = 'block'; 
	    elseif ( $_SESSION['menu_inbox'] == 'block' ) $_SESSION['menu_inbox'] = 'none'; 
	} else { session_register("menu_inbox"); $_SESSION['menu_inbox'] = 'none'; exit; }
    }
    if ( $wt == 'menu_comm' ) {
	if ( isset ( $_SESSION['menu_comm'] ) and $_SESSION['menu_comm'] != '' ) {
	    if ( $_SESSION['menu_comm'] == 'none' ) $_SESSION['menu_comm'] = 'block'; 
	    elseif ( $_SESSION['menu_comm'] == 'block' ) $_SESSION['menu_comm'] = 'none'; 
	} else { session_register("menu_comm"); $_SESSION['menu_comm'] = 'none'; exit; }
    }
    if ( $wt == 'menu_resp' ) {
	if ( isset ( $_SESSION['menu_resp'] ) and $_SESSION['menu_resp'] != '' ) {
	    if ( $_SESSION['menu_resp'] == 'none' ) $_SESSION['menu_resp'] = 'block'; 
	    elseif ( $_SESSION['menu_resp'] == 'block' ) $_SESSION['menu_resp'] = 'none'; 
	} else { session_register("menu_resp"); $_SESSION['menu_resp'] = 'none'; exit; }
    }
    if ( $wt == 'menu_categ' ) {
	if ( isset ( $_SESSION['menu_categ'] ) and $_SESSION['menu_categ'] != '' ) {
	    if ( $_SESSION['menu_categ'] == 'none' ) $_SESSION['menu_categ'] = 'block'; 
	    elseif ( $_SESSION['menu_categ'] == 'block' ) $_SESSION['menu_categ'] = 'none'; 
	} else { session_register("menu_categ"); $_SESSION['menu_categ'] = 'none'; exit; }
    }
    if ( $wt == 'menu_subsuser' ) {
	if ( isset ( $_SESSION['menu_subsuser'] ) and $_SESSION['menu_subsuser'] != '' ) {
	    if ( $_SESSION['menu_subsuser'] == 'none' ) $_SESSION['menu_subsuser'] = 'block'; 
	    elseif ( $_SESSION['menu_subsuser'] == 'block' ) $_SESSION['menu_subsuser'] = 'none'; 
	} else { session_register("menu_subsuser"); $_SESSION['menu_subsuser'] = 'none'; exit; }
    }
    if ( $wt == 'menu_subsfav' ) {
	if ( isset ( $_SESSION['menu_subsfav'] ) and $_SESSION['menu_subsfav'] != '' ) {
	    if ( $_SESSION['menu_subsfav'] == 'none' ) $_SESSION['menu_subsfav'] = 'block'; 
	    elseif ( $_SESSION['menu_subsfav'] == 'block' ) $_SESSION['menu_subsfav'] = 'none'; 
	} else { session_register("menu_subsfav"); $_SESSION['menu_subsfav'] = 'none'; exit; }
    }
    if ( $wt == 'menu_subspl' ) {
	if ( isset ( $_SESSION['menu_subspl'] ) and $_SESSION['menu_subspl'] != '' ) {
	    if ( $_SESSION['menu_subspl'] == 'none' ) $_SESSION['menu_subspl'] = 'block'; 
	    elseif ( $_SESSION['menu_subspl'] == 'block' ) $_SESSION['menu_subspl'] = 'none'; 
	} else { session_register("menu_subspl"); $_SESSION['menu_subspl'] = 'none'; exit; }
    }
    if ( $wt == 'menu_ch' ) {
	if ( isset ( $_SESSION['menu_ch'] ) and $_SESSION['menu_ch'] != '' ) {
	    if ( $_SESSION['menu_ch'] == 'none' ) $_SESSION['menu_ch'] = 'block'; 
	    elseif ( $_SESSION['menu_ch'] == 'block' ) $_SESSION['menu_ch'] = 'none'; 
	} else { session_register("menu_ch"); $_SESSION['menu_ch'] = 'none'; exit; }
    }
}
exit;
?>