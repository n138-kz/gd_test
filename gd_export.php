<?php
session_start();
date_default_timezone_set('Asia/Tokyo');
header('content-type: text/plain');
header('content-type: image/webp');

// 空の画像を作成し、テキストを追加します
$im = imagecreatetruecolor(520, 520);
$fillcolor = imagecolorallocate($im, 240, 248, 255);
imagefill($im, 0, 0, $fillcolor);

// 画像を出力します
imagewebp($im);

// メモリを開放します
imagedestroy($im);

header('x-powered-by: null');

