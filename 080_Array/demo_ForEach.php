<?php
//在foreach內改變從陣列得到的值,陣列的值不會改變,如要改變陣列須將$x = '3'改為arry[$k]=?;
$a = array('1', '2');
foreach ($a as $k => $x)
{
	$x = '3';
}

foreach ($a as $k => $x)
{
	echo "$k => $x <br>";
}

?>