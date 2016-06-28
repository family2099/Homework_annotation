<?php
//PHP預設看不到外面的變數,要看到就要加global+變數;
$a = 20;         
function myfunction($b) {
	//print "a=$a<br>";
	//global $a, $c;
	$a = 30;//如想保存預設變數a,可以先備份到其他變數
	//print "a=$a<br>";
	global $a, $c;//如果這行註解掉就無法設定$c
	//print "a=$a<br>";
	return $c = ($b + $a);//return是傳出$c
}
print myfunction(40) + $c;
echo $a;
?>