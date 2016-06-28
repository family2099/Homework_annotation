<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "r");//打開檔案只能讀取,如果是r換成w時,如果有一個人在修改,另一個人無法修改
//$line = fgets($f);
while (!feof($f))// feof() 函數檢測是否已到達文件末尾(eof)
{
	$line = fgets($f);//檔案結尾前不斷的,每次讀一行當成字串不包括換行符號,結尾處跳出
	$sData .= Trim($line) . "<br>";//trim() 函數移除字串兩側的空白字元(刪除字串前後的空白區域)或其他預定義字串。
	//$line = fgets($f);
}
while ($line = fgets($f))// feof() 函數檢測是否已到達文件末尾(eof)
{
	
	$sData .= Trim($line) . "<br>";//trim() 函數移除字串兩側的空白字元(刪除字串前後的空白區域)或其他預定義字串。
	
}
fclose($f);//關閉檔案
echo $sData;

?>
