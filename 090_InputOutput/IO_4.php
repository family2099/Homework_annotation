<?php
header("content-type: text/html; charset=utf-8");
//輸入檔名,取得資料陣列
$lines = file ( 'data.txt' );
foreach ( $lines as $line_num => $line ) {
	echo "#<i>$line_num</i> : " . 
		 htmlspecialchars ( $line ) . "<br />\n";//htmlspecialchars 函式的功能是能夠將特定的符號，轉換為HTML 實體符號
}

?> 