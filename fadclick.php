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

$adkey=filter_title($_REQUEST['id']);
$tadkey=filter_title($_REQUEST['tid']);

if ( $adkey != '' )
{
    $sql="select * from adv_video where adkey='$adkey'";
    $rs=$conn->execute($sql);
    $url=$rs->fields['url'];
    $rs->Close();

    $sql1= "update adv_video set click=click+1 where adkey='$adkey'";
    $rs1=$conn->execute($sql1);
    $rs1->Close();
}
elseif ( $tadkey != '' )
{
    $sql="select * from adv_text where adkey='$tadkey'";
    $rs=$conn->execute($sql);
    $url=$rs->fields['url'];
    $rs->Close();
    
    $sql1= "update adv_text set click=click+1 where adkey='$tadkey'";
    $rs1=$conn->execute($sql1);
    $rs1->Close();
}
header("Location: $url");
exit;
?>