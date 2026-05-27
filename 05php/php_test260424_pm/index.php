<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHPでの計算など</title>
</head>
<body>
  <?php 
  // 数の扱い とりあえず「整数か」「小数点がついてるか」で分けられてることを知っておきましょう
  $radius = 25; //整数(int型)
  $pi = 3.14; //浮動小数点数（float型）
  ?>

<?php 
  $add = 3 + 8; // 加算
	echo $add . '<br>'; // 11を出力

  $subtract = 6 - 2; // 減算
	echo $subtract . '<br>'; // 4を出力

  $multiply = 4 * 7; // 乗算
	echo $multiply . '<br>'; // 28を出力
  
  $divide = 12 / 4; // 除算
	echo $divide . '<br>'; //3を出力

  $surplus = 5 % 3; // 剰余
	echo $surplus . '<br>'; // 5÷3=1 余り2  ←この余りの2を出力

?>
<br>
<!-- 変数のまま計算可能 -->
<?php 
  $a = 3**3; // ** はPHPでのべき乗計算
  $b = 10;
  $c = $a + $b ;

  echo $c .'<br>';// $a + $b を表示 

  echo 3+2*2 ;

?>
<p>
  <?php
  $num = 5;
  // 1増える、の書き方いろいろ（インクリメント）
  // $num = $num + 1;
  // $num += 1;
  $num ++;

  // 1減る、のデクリメント
  // $num = $num -  1 ;  
  // $num -= 1 ;
  // $num--;
  $num *= 2; // 12

  echo $num;
  ?>
</p>


<div>
  <h4>切り上げ、切り捨て</h4>
  <?php 
  $pi = 3.15;
  echo ceil($pi).'<br>'; // 切り上げ　4
  echo floor($pi).'<br>'; // 切り捨て 3

  // 四捨五入
  echo round( $pi , 1); // 四捨五入　3
  ?>
</div>


<?php 
const TAX = 0.1;
const MESSAGE = 'ご協力ありがとうございます！';

echo MESSAGE ;
?>

<p>
  <h4>消費税計算機</h4> 
  <?php 
  $price = 800;
  echo "{$price}円の税込み価格は" . $price + ($price * TAX) ."円です"; 
  ?>
</p>

</body>
</html>