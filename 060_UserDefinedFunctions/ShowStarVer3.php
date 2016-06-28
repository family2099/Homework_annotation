<?php
function ShowStar($iCount, $sWhat = "*")//$sWhat預設值為*,使用者呼叫函數時可另外在自訂sWhat內容,對於舊的呼叫方式也可以使用,ex:ShowStar($iHowMany,^);
{
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= $sWhat;
	}
	echo $result;
}

$iHowMany = 2;
ShowStar($iHowMany);
?>