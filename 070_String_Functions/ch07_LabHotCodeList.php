<?php

$sData = "908872526535442041985072568716";
$result = "01234567890";
$iLen = strlen($sData);//計算字串占多少位元
echo $iLen."<br>";
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);//substr(字串,取的位置,取的數量)
	echo $ch."<br>";
	$result = $ch . str_replace($ch, "", $result);//str_replace(取代的字串,代替的字串,被搜尋的字串組)
	echo $result."<br>";
}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
?>