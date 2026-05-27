<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHPのビルドイン関数</title>
</head>

<body>
  <h2>PHPのビルドイン関数</h2>

  <h3>大文字小文字の変換</h3>
  <?php
  echo strtoupper('hyde') . '<br>'; // HYDE と 大文字で表示される
  echo strtolower('AAA') . '<br>';
  ?>

  <h3>現在の日時を取得</h3>
  <?php
  date_default_timezone_set('Japan'); //タイムゾーン設定
  echo '<p>', date('Y/m/d H:i:s'), '</p>';
  echo '<p>', date('Y年m月d日 H時i分s秒'), '</p>';
  ?>

  <h3>ランダムな数字を取得</h3>
  <?php

  //引数無しで、０以上、乱数最大値以下の乱数を返す
  echo rand() . '<br>';

  //乱数の最大値は環境で異なる。getrandmax関数で取得できる
  echo getrandmax() . '<br>';

  //範囲を指定できる。例えばサイコロだったら
  echo '<p>サイコロの目は' . rand(1, 6) . 'です</p>';
  ?>

  <h3>文字数のカウント</h3>
  <?php
  $name = "L'A~rc~en~Ciel";
  echo strlen($name) . '<br>'; // 6
  echo "<p>{$name}の文字の長さは " . strlen($name) . "です</p>";



  $artists_name = ['Vaundy', '藤井風'];
  echo "$artists_name[0] は" . strlen($artists_name[0]) . "文字です<br>"; // 6文字
  echo "$artists_name[1] は" . strlen($artists_name[1]) . "文字です<br>"; // 9文字
  echo "$artists_name[1] は、本当は" . mb_strlen($artists_name[1]) . "文字です<br>"; // 3文字

  echo str_replace('音', '歌', '上白石萌音');

  ?>

</body>

</html>