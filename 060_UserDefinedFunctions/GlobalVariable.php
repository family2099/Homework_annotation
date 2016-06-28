<?php

//PHP預設看不到外面的變數,要看到就要加global+變數;
$a = 20;
function myFunction($b) {
	//echo "a = $a<br>";
	$a = 30;//如想保存預設變數a,可以先備份到其他變數
	//echo "a = $a<br>";
	global $a, $c;//如果這行註解掉就無法設定$c
	//echo "a = $a<br>";
	return $c = ($b + $a);//return是傳出$c
}
// 請預測答案是多少?
echo myFunction(40) + $c;
?>