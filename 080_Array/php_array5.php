<?php
header("content-type: text/html; charset=utf-8");

$season = array('春', '夏', '秋', '冬'); 

echo "每年的四季分別為：";
//顯示陣列的每一項,as是帶入
foreach ($season as $value){//$season內容依序帶入$value
	echo $value;
}

?>