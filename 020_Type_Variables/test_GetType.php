<?php

  //取得變數型態
  $x = 123;
  echo gettype($x), "<br>";//integer整數
  
  $x = 123.0;
  echo gettype($x), "<br>";//double雙精度浮點數

  $x = "123.0";
  echo gettype($x), "<br>";//string字串
  
  $x = TRUE;
  echo gettype($x), "<br>";//boolean布林
  
?>
