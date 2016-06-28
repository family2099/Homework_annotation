<?php
$f = fopen("pick3.txt", "r");//開啟檔案,只能讀取
while (!feof($f))// feof() 函數檢測是否已到達文件末尾(eof)
{
	$line = fgets($f);//讀取文件的內容，一次讀一行，直到碰到換行符（包括在返回值中）、EOF 或者已經讀取了 length - 1 字元後停止（要看先碰到那一種情況）。
	echo "$line<br>";
}
fclose($f);//關閉檔案
echo "--End--";
?>