<?php
header("content-type: text/html; charset=utf-8");

$season = array(
    'spring' => '春', 
    'summer' => '夏', 
    'autumn' => '秋', 
    'winter' => '冬'); 
    
print_r($season);//以陣列的方式顯示
echo "<hr>";
var_dump($season);//顯示變數的相關訊息
?>