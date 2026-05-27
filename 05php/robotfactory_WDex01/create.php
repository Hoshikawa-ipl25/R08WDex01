<!-- フォーム入力された値を変数などに入れて置くPHP下準備 -->

<?php

// フォームから受け取ったパラメータ値を変数に格納
$robo_name = htmlspecialchars($_REQUEST['robo_name']);
$robo_color = htmlspecialchars($_REQUEST['robo_color']);
$robo_size = htmlspecialchars($_REQUEST['robo_size']);
$robo_x = htmlspecialchars($_REQUEST['robo_x']);
$robo_y = htmlspecialchars($_REQUEST['robo_y']);
$robo_angle = htmlspecialchars($_REQUEST['robo_angle']);

// ロボのサイズ決め
//sの時100px、mの時200px、lの時300px を $size_px に代入しておく
if ($robo_size == 'l') {
  $size_px = '300px';
} elseif ($robo_size == 'm') {
  $size_px = '200px';
} elseif ($robo_size == 's') {
  $size_px = '100px';
} else {
  $size_px = '10px';
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ロボット登場！ - ロボットファクトリー</title>
  <link rel="stylesheet" href="css/style.css?v=2">
</head>

<body class="robo_bg">
  <figure style="width:<?= $size_px ?>;top:<?= $robo_y ?>px;left:<?= $robo_x ?>px;transform:rotate(<?= $robo_angle ?>deg)">
    <figcaption><!-- ロボ太郎 --><?= $robo_name ?></figcaption>
    <!-- <img src="img/blue.png" alt=""> -->
    <img src="img/<?= $robo_color ?>.png" alt="">
  </figure>
  <a class="back_btn" href="robot.html">戻る</a>

</body>

</html>