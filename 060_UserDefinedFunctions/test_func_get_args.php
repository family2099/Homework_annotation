<?php

echo calcTotal(1, 2, 3, 4, 5);

function calcTotal () {
	$args = func_get_args();//把你傳入的所有参數全部都放在一个陣列中
	// var_dump($args);
	$total = 0;
	foreach ($args as $value) {
		$total += $value;
	}
	return $total;
}


?>
