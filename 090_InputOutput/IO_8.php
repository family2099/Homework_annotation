<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "line1\nline2\nLine3\n";
$dataArray = explode("\n", $sData);//explode 函數的功能是用來切割字串，透過設定好的切割點，將字串切割為多個部份並儲存為PHP Array 陣列，以便後續的程式呼叫
$f = fopen("data2.txt", "w");//a是接著寫,如果沒檔案就建立
//fputs()是fwrite()的別名,該函數是二進制安全的（它意味著：二進制數據，如圖像和字符數據可以用這個功能來編寫）,
//功能為將字串寫入檔案,第一個參數是要寫入的檔案,
//第二個參數為要寫入的字串,第三個參數length是寫入檔案的最大位元數,當寫入了length個字元或者寫完了string以後，寫入就會停止，視乎看先碰到哪種情況
foreach ($dataArray as $line) {
	fputs($f, $line . "\n", strlen($line) + 1);
}
fclose($f);
echo "-- Done --"

?>
