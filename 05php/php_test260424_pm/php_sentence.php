<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHPの構文 if文とか</title>
</head>
<body>
  <h1>PHPの構文サンプル</h1>
  <h2>if文 論理値によるフラグ</h2>
  <div>
    <?php
    $flg = 1 ;
	  if($flg){
	    echo '$flgは true です。<br>'; // 左記内容を表示
	  }
    ?>
  </div>

  <div>
  <h2>比較演算子</h2>
    <?php 
    $num = 20 ;
    if($num > 10){
      echo '$numは 10より大きい数値です<br>';
    }
    ?>
  </div>

</body>
</html>