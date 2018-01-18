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
$possible_chars="23456789QWERTYUPADFGHJLZXCVBNMqwertyuiopasdfghjklzxcvbnm"; //define your characters here

$captchacode="";
$i=0;
//set the captcha length - change 7 to other value
while($i<7) {
  $char=substr($possible_chars,mt_rand(0,strlen($possible_chars)-1),1);
  if (!strstr($captchacode,$char)) {
    $captchacode.=$char;
    $i++;
  }
}

$_SESSION["captcha"]=$captchacode;

$width="70"; //width
$height="25"; //height

$image=imagecreate($width,$height);

$bg=imagecolorallocate($image,0,0,0); //background color
$text=imagecolorallocate($image,255,255,255); //text color 
$line=imagecolorallocate($image,0,0,0); //fuziness

for($i=0;$i<($height*$width)/2;$i++) imagefilledellipse($image,mt_rand(0,$height),mt_rand(0,$width),1,1,$line);
for($i=0;$i<($height*$width)/150;$i++) imageline($image,mt_rand(0,$height),mt_rand(0,$width),mt_rand(0,$height),mt_rand(0,$width),$line);
imagestring($image,5,4,5,$captchacode,$text);

header("Content-type: image/png");
imagepng($image);
?>