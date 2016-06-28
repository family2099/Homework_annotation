<?php
  $d = strtotime("2012-09-10");//將任何英文的日期時間成為UNIX時間戳記,可加減時間
  echo gettype($d),"<hr>";//取的變數型態
  // $d = strtotime("2012-09-10 -3 days"); 
  // $d = strtotime("2012-09-10 +1 month");
  echo $d;
  echo "<br>";
  echo date("Y-m-d", $d);//格式化時間戳記
?>
