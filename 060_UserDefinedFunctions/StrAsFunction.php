<?php

function test($i) {
	return $i + 1;
}

// $x = 1;
// echo test($x);

$x = 2;
$p = "test";//P指向函數名稱
echo $p($x);//可透過p來運作函數

?>