<?php
  $x = getdate();//取得系統時間,getdate() 函式會將該系統回傳的日期時間資訊存成一個陣列
  var_dump($x);
  echo gettype($x), "<br>";//取得的型態為陣列
  
  $x = date('Y-m-d H:i:s');//取得伺服器的日期與時間加以格式化
  echo $x, "<br>";
  echo gettype($x), "<br>";//取得的型態為字串
  
  $x = gmdate('Y-m-d H:i:s');//取得格林威治標準時間並格式化
  echo $x, "<br>";
  
  $x = strtotime(gmdate('Y-m-d H:i:s'));//可以將任何英文格式的日期轉換為 Unix 時間戳記
  echo $x, "<br>";
  echo gettype($x), "<br>";//取得的型態為整數
  
?>