<?php
  $d = mktime(13, 30, 0, 9, 10, 2012);//產生Unix 時間戳記,時間戳記自1970年1月1日（00:00:00 GMT）以來的秒数
  echo $d;
  echo "<br>";
  echo date("Y-m-d H:i:s", $d);//透過data和數將時間戳記格式化成日期
?>
