<?php

function DrawLine() {
	echo "<hr>";
}

register_tick_function("DrawLine");


//declare是PHP的流程控制結構，directive目前支持兩個指令【ticks和encoding】，
//ticks的使用需配合register_tick_function函數(當然還有unregister_tick_function函數)使用。
//ticks參數表示運行多少語句調用一次register_tick_function的函數。
declare (ticks = 3) {//每個 tick 中出現的事件是由 register_tick_function() 來指定的,tick事件在PHP每執行N條語句就發生一次
	echo "1<br>";
	echo "2<br>";
	echo "3<br>";
	echo "4<br>";
	echo "5<br>";
	echo "6<br>";
	echo "7<br>";
	echo "8<br>";
	echo "9<br>";
}

/*
declare (ticks = 3) {
	for ($i = 1; $i <= 9; $i++) {
		echo "$i<br>";
	}
}
*/

?>