<?php
$arquivo = 'paisagem.jpg';
//paisagem_nova.jpeg
/* $maxWidth = 500;
$maxHeight = 250; */
$maxWidth = 600;
$maxHeight = 600;

list($originalWidth, $originalHeight) = getimagesize($arquivo);

$ratio = $originalWidth / $originalHeight;
$ratioDest = $maxWidth / $maxHeight;

$finalHeight = 0;
$finalWidth = 0;

if ($ratioDest > $ratio) {
    $finalWidth = $maxHeight * $ratio;
    $finalHeight = $maxHeight;
} else {
    $finalHeight = $maxWidth / $ratio;
    $finalWidth = $maxWidth;
}

$imagem = imagecreatetruecolor($finalWidth, $finalHeight);
$originalImg = imagecreatefromjpeg($arquivo);

imagecopyresampled(
    $imagem,
    $originalImg,
    0,
    0,
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