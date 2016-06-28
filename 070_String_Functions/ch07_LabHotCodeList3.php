<?php
$sData = "";
$f = fopen("pick3.txt", "r");//開啟檔案
while (!feof($f))// feof() 函數檢測是否已到達文件末尾(eof)
{
	$line = fgets($f);//讀取文件的內容，一次讀一行，直到碰到換行符（包括在返回值中）、EOF 或者已經讀取了 length - 1 字元後停止（要看先碰到那一種情況）。
	$sData .= Trim($line);//trim() 函數移除字串兩側的空白字元(刪除字串前後的空白區域)或其他預定義字串。
}
fclose($f);//關閉檔案
//echo $sData;

// GetHotCodeList
$result = "01234567890";
$iLen = strlen($sData);////取得字串占多少位元
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);//取得指定字串
	$result = $ch . str_replace($ch, "", $result);//取代字串

}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
?>