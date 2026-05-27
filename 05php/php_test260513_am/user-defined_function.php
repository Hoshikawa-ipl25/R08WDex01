<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザ定義関数のテスト</title>
</head>

<body>
  <h2>ユーザ定義関数のテスト</h2>
  <?php

  // コードをひとまとめにして名前をつけておける＝関数
  //「こんにちは！Wordpress！」と画面に表示するだけの関数
  function say_wordpress()
  {
    echo "こんにちは！Wordpress！" . "<br>";
  }

  // 名付けた名前で呼び出すと実行
  say_wordpress();
  say_wordpress();
  say_wordpress();
  say_wordpress();

  ?>

  <!-- 引数と戻り値のあるユーザー定義関数のサンプル -->
  <h2>足し算する関数を定義する</h2>
  <?php

  // 足し算をする関数 addを定義
  // $n1, $n2に、関数に渡されたデータが入る＝引数
  function add($n1 = 100, $n2 = 300)
  {
    $answer = $n1 + $n2;
    // $n1, $n2を足し算したものを変数$answerに入れている

    return $answer;
    // $answerをreturnする（返す）＝返り値
  }

  echo add(1);

  ?>

</body>

</html>