<?php
function ShowStar($iCount, $sWhat = "*")
{
	//當有很多條件判斷式時,不建議使用這樣寫法,需要一直深入
	if ($iCount > 0)
	{
		if ($iCount <= 20)
		{
			$result = "";
			for ($i = 1; $i <= $iCount; $i++)
			{
				$result .= $sWhat;
			}
			echo $result;
		}
		else 
			echo "iCount <= 20 please.";
	}
	else
	{
		echo "iCount > 0 please.";
	}
}

$iHowMany = 21;
ShowStar($iHowMany);
?>