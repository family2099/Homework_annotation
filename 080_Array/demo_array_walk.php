<?php


$result = '';
function glue ($val)
{
	global $result;
	$result .= $val;
}
$array = array ('a', 'b', 'c', 'd');
//使陣列arr的每個元素和函式名稱func相對應，
//元素傳到函式func的第一個參數，如果函式func超過一個以上的參數，則會有警告訊息，
//要抑制警告訊息可在此函式前加上’@’，即@array_walk，或是使用error_reporting。
//本次執行四次glue並每次依序帶入陣列值
array_walk ($array, 'glue');
echo $result;
?>