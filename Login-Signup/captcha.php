<?php
session_start();

$string = '0123456789';
$shuffle = str_shuffle($string);
$num = rand(4,6);
$code = substr($shuffle, 0, $num);

$_SESSION['captcha'] = $code;

header("content-Type:image/gif");

$bg = imagecreatefromgif("assets/bgCaptcha/"."4".".gif");

$pose = 60;

for($i = 0; $i<strlen($code); $i++){
    $char = substr($code, $i, 1);
    $angle = rand(-20, 20);
    $font = 'assets/font/trebucbd.ttf';

    $color1 = imagecolorallocate($bg, rand(0,255), rand(0,255), rand(0,255));

    imagettftext($bg, 65, $angle, $pose, 80, $color1, $font, $char);

    $pose+=80;
}

imagegif($bg);
imagedestroy($bg);
?>