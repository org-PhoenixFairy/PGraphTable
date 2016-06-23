<?php
/**
 * @author Axoford12
 * @acscess 847072154
 * @see 2016Äê6ÔÂ22ÈÕ
 */
require 'Math.php';
include 'Image.php';
$i = 10;
$r = Math::Compute($i);
print_r($r);
// Get graph values and sort a clone
// Get the biggedt number

// Set the total height and width
$total_height = 400;
$total_width = 800;
$inner_length = 10;
// Init a new Image
$im = imagecreatetruecolor($total_width + $inner_length, $total_height + $inner_length);

$image = new Image($im);
$color = $image->setColors();
$image->imageInit($color, $total_width, $total_height, $inner_length);

$image->drawPicture($r, $total_width, $total_height, $color, $inner_length);


$im = $image->getIm();
imagepng($im,'Test.png');

imagedestroy($im);

