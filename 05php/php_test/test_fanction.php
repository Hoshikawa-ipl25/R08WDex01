<?php
function say_wordpress()
{
    echo "<p>WordPressこんにちは！</p>";
}
say_wordpress();

function add($n1, $n2)
{
    $answer = $n1 + $n2;
    return $answer;
}
echo "<p>" . add(10, 5) . "</p>";




function formatYenPrice($value = 500)
{
    return $value . "円<br>";
}

$price = 800; // ここをコメントアウトするとエラーになる↓
echo formatYenPrice($price);

echo strtoupper('hyde') . "<br>"; // HYDE


date_default_timezone_set('Japan'); //タイムゾーン設定
echo '<p>', date('Y/m/d H:i:s'), '</p>';
echo '<p>', date('Y年m月d日 H時i分s秒'), '</p>';


//引数無しで、０以上、乱数最大値以下の乱数を返す
echo rand() . "<br>";

//最大値は環境で異なる。getrandmax関数で取得できる
echo getrandmax() . "<br>"; //2147483647でした
//範囲を指定できる
echo rand(1, 6) . "<br>";
?>
<hr>
<?php

$name = 'Vaundy';
echo strlen($name) . "<br>"; // 6

$artists_name = ['Vaundy', '藤井風'];
echo "$artists_name[0] は" . mb_strlen($artists_name[0]) . "文字です<br>"; // 6文字
echo "$artists_name[1] は" . mb_strlen($artists_name[1]) . "文字です<br>"; // 9文字

echo str_replace('音', '歌', '上白石萌音');
