<?php
header("content-type: text/html; charset=utf-8");

$season = array(
    'spring' => '春', 
    'summer' => '夏', 
    'autumn' => '秋', 
    'winter' => '冬'); 

echo "每年的四季分別為：<br>";
//有時key值不是數字,所以用foreach
foreach ($season as $key => $value){//$key => $value設定陣列的每個索引值和其內容
	echo $key, "=>", $value, "<br>";
}


?>