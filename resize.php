<?php
$img = "$updir/$copy_file" ; // 読み込む画像のアドレス

$size = 100 ; // リサイズするサイズ (大きい方の幅をこれに合わせる)

if (!($irc = @imagecreatefromjpeg($img))) // jpeg として読み込んでみる
     if (!($irc = @imagecreatefrompng($img))) // png として読み込んでみる
     $irc = @imagecreatefromgif($img) ; // gif として読み込んでみる

     if (!$irc) {
  // 画像が正しく読み込めなかったときの処理
      echo '×' ;
      exit ;
    }

    if (imagesx($irc) > imagesy($irc)) {
      $rrc = imagecreate($size, $size * imagesy($irc) / imagesx($irc)) ;
    } else {
      $rrc = imagecreate($size * imagesx($irc) / imagesy($irc), $size) ;
    }

    imagecopyresampled($rrc, $irc, 0, 0, 0, 0, imagesx($rrc), imagesy($rrc), imagesx($irc), imagesy($irc)) ;

// jpgeg 画像として出力
    header('Content-type: image/jpeg') ;
    imagejpeg($rrc) ;
    ?>