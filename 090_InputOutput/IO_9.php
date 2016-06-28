<?php
header("Content-Type: image/png");//MIME編碼方式,要註明是使用什麼,在此是照片 

$filename = "cc.png";
$fileHandle = fopen($filename, "rb");//開啟檔案,以二進位讀取
echo fread($fileHandle, filesize($filename));//fread() 可用來讀取二進位或文字檔案，第一參數為檔案名稱,第二參數為檔案大小。
fclose($filename);

?>