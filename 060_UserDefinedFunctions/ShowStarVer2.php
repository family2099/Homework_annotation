<?php
//建立函數並傳遞參數
function ShowStar($iCount)
{
	//根據傳遞參數的值,執行畫*的次數
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= "*";
	}
	echo $result;
}

$iHowMany = 3;
ShowStar($iHowMany);
?>