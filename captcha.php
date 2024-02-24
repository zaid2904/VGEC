<?php
session_start();


$random_number = rand(1000, 9999);

$_SESSION['code'] = $random_number;

header('Content-type: image/jpeg');

$image = imagecreate(100, 50);

$background_color = imagecolorallocate($image, 255, 255, 255);

$text_color = imagecolorallocate($image, 0, 0, 0);

imagestring($image, 5, 20, 20, $random_number, $text_color);

imagejpeg($image);

imagedestroy($image);
?>
