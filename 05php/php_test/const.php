<!-- PHPの定数の設定の仕方 -->
<!-- 大文字で名前を付けよう -->

<?php

const TAX = 0.1;

$price = 100;
echo $price * TAX + $price . "円<br>";

const MASSAGE = 'ご協力ありがとうございます！';

echo MASSAGE;
