<?php
$arquivo = 'paisagem.jpg';
$width = 300;
$height = 300;

list($originalWidth, $originalHeight) = getimagesize($arquivo);

$ratio = $originalWidth / $originalHeight;
$ratioDest = $width / $height;

$finalHeight = 0;
$finalWidth = 0;
$finalX = 0;
$finalY = 0;

if ($ratioDest > $ratio) {
    $finalWidth = $height * $ratio;
    $finalHeight = $height;
} else {
    $finalHeight = $width / $ratio;
    $finalWidth = $width;
}

if ($finalWidth < $width) {
    $finalWidth = $width;
    $finalHeight = $width / $ratio;

    $finalY = -(($finalHeight - $height) / 2);
} else {
    $finalHeight = $height;
    $finalWidth = $height * $ratio;

    $finalX = -(($finalWidth - $width) / 2);
}

$imagem = imagecreatetruecolor($width, $height);
$originalImg = imagecreatefromjpeg($arquivo);

imagecopyresampled(
    $imagem,
    $originalImg,
    $finalX,
    $finalY,
    0,
    0,
    $finalWidth,
    $finalHeight,
    $originalWidth,
    $originalHeight
);

header("Content-Type: image/jpeg");
//imagejpeg($imagem, 'paisagem_nova.jpeg', 100);
imagejpeg($imagem, null, 100);