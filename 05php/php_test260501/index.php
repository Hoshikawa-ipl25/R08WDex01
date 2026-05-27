<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHPのサンプル・While文</title>
</head>

<body>
  <h2>While文テスト</h2>
  <?php
  $num = 0; // 初期化式
  while ($num < 3) {
    echo $num . '<br>' . PHP_EOL;
    $num++; // 更新処理。$num = $num + 1; と同じ
  }
  ?>

  <h2>連想配列＋多次元配列の繰り返し処理</h2>
  <?php
  $machines = [
    ['name' => 'ファミリーコンピューター', 'brand' => '任天堂', 'year' => 1983],
    ['name' => 'メガドライブ', 'brand' => 'セガ', 'year' => 1988],
    ['name' => 'ネオジオ', 'brand' => 'SNK', 'year' => 1990],
    ['name' => 'PlayStation', 'brand' => 'SONY', 'year' => 1994],
  ];

  $i = 0; //カウントの初期化
  while ($i < count($machines)) { //count($machines) は、$machines配列の中身の個数を数えてある
    //表示したい内容
    // echo 'あ';
    // echo $machines[0]['name'] . $machines[0]['brand'] . $machines[0]['year'] . "<br>";
    // echo $machines[$i]['name'] . $machines[$i]['brand'] . $machines[$i]['year'] . "<br>";
    // echo $machines[$i]['name'] . " - " . $machines[$i]['brand'] . " (" . $machines[$i]['year'] . ") " . "<br>";
    echo $machines[$i]['name'] . " - {$machines[$i]['brand']}" . " ( {$machines[$i]['year']} ) " . "<br>";

    $i++; // １回作業したら１増やしておく
  }

  ?>
</body>

</html>