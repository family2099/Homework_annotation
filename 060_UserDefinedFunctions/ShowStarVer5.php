<?php
function ShowStar($iCount, $sWhat = "*")
{
	//當有很多條件判斷式時,建議使用這樣寫法,簡單明瞭
	if ($iCount <= 0)
	{
		echo "iCount > 0 please";
		return;
	}
	if ($iCount > 20)//如果比較常用到可先放到上面
	{
		echo "iCount <= 20 please";
		return;
	}
	
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