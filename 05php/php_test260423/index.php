<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>phpの練習260423</title>
</head>
<body>
  <!-- <h1>こんにちは</h1> -->

  <?php 
    echo "こんにちは<br>";
    echo "<p>Hello! World!</p>";
    echo 'welcome to PHP <br>';
  ?>
  <?php
    // 変数の設定 PHPの変数は頭に$が必ず付く
    $name = "山田"; 
    echo "こんにちは、 $name さん<br>"; // 結果：こんにちは、山田 さん
	  echo 'こんにちは、 $name さん<br>'; // 結果：こんにちは、$name さん
    echo "あなたが、{$name}さんですか<br>"; // あなたが、山田さんですか
  
  ?>

<?php

	echo "サッカーのW杯は2026年開催です"; 
	echo "開催国はカナダ、アメリカ、メキシコ共同開催です\n";
	
	// もしくは 
	
	echo 'バスケットボールのW杯は2027年開催です' . "\n"; 
	echo '開催国はカタールです';

?>

<!-- echoタグ -->
<?= "<p>$name</p>" ?>


<?php

	// コメントアウト

	echo '今晩は <br>'; // ここにコメントを記述可能
	
	// 下記２行のコードを無効化
	// echo 'Hello! World!<br>';
	// echo 'Hello! World!<br>';
	
	
?>

<?php
	echo 'こんにちは <br>';
	echo 'こんにちは <br>';
	echo '握手をしましょう<br>';
?>
<hr>
<?php
	echo 'リンゴは' . '赤いです。'; 
?>
<?php
	echo 'オレンジは' , 'オレンジです。'; 
?>

<!-- <<<のあとに指定した記号が文字列の終わりと指定できる -->
 <p>
<?php
	echo <<<EOM
	Welcome
	to
	PHP
	EOM;
?>
</p>
</body>
</html>