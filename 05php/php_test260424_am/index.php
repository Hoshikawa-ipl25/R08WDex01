<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHPの変数と配列・確認用</title>
</head>

<body>

  <!-- PHPの変数 -->

  <?php
  // 変数$number に 17 を代入
  $number = 17;
  // 変数$number をecho(表示)
  echo $number;

  $name = "大谷";
  echo "<br>" . $name;
  ?>

  <?php
  // $が付いた”変数”は、再代入で上書きが可能 
  $name = "山本";
  echo "<br>" . $name;

  $name = "佐々木"; // ← ここをコメントアウトすると、下記では「山本」が表示される
  echo "<br>" . $name;

  ?>

  <p>
    <?php
    // 文字列データの連結は、ドット(.)を使う
    $num = 55;
    echo '2025年はホームランを' . $num + 1 . '本、打ちました';

    ?>
  </p>


  <!-- PHPの配列 -->
  <?php
  $players = ['羽生', '宇野', '高橋', '鍵山', '佐藤'];
  // echo $players[2];

  // インデックス番号を指定して、代入して作ることもできる
  // 下の場合、[0]がいなくなる
  $players[] = '宇野';//5
  $players[] = '高橋';//6
  $players[] = '鍵山';//7

  $players[] = '羽生';//8

  echo $players[6]; // [6]に高橋さんが入る

  ?>

  <p>
    <!-- 連想配列 インデックス番号の代わりに言葉でラベリングできる配列-->
    <?php
    $lunch_menu = [
      // appetizerが「キー」、コブサラダのところが「値（バリュー）」
      'appetizer' => 'コブサラダ',
      'main' => 'キノコのパスタ',
      'drink' => 'ミルクティー'
    ];

    echo $lunch_menu['main'] . '<br>';

    // 変数の配列なので、再代入による上書きが可能です
    $lunch_menu['appetizer'] = 'コーンスープ';
    echo $lunch_menu['appetizer'];
    ?>
  </p>

</body>

</html>