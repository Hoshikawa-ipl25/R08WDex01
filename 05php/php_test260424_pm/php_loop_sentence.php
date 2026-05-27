<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHPの繰り返し処理サンプル</title>
</head>

<body>
  <h2>for文</h2>
  <?php
  // 例. １〜５の数字を順に出力する
  for ($i = 1; $i <= 5; $i++) {
    echo $i . '<br>';
  }

  //例. 文字列を１つずつ順に出力する
  $names = ['レブロン', 'ドンチッチ', '八村', 'リーヴス', 'エイトン'];

  for ($i = 0; $i < count($names); $i++) {
    // echo count($names);
    echo $names[$i] . '<br>';
  }



  ?>




</body>

</html>