<?php

$a = 12;
$b = "34";

$result = $a + $b; // 46 +是運算所以字串會自動轉換成數字
// $result = $a . $b; // 1234 .是字串連結所以變數a會自動轉換成字串
// $result = $a + intval($b);  // 46 intval函數是取得變數的整數值,intval() 不能用於陣列和類別

echo $result;

?>