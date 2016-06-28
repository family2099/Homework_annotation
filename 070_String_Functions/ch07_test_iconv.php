<?php
  // header("content-type: text/html; charset=utf-8");
  //UTF-8:一个英文字元等於一个byte，一个中文（含繁体）等於三个byte。
  //Unicode：一个英文等於两个byte，一个中文（含繁体）等於两个byte。
  //在Big-5 碼中, 每個中文字佔兩個bytes
  
  //瀏覽器預設為UTF-8
  header("content-type: text/html; charset=big5");
  $s = "許功蓋";
  echo $s;
  echo strlen($s), ", ";  // 9,//取得字串占多少位元,utf-8預設中文字3byte
  echo strlen(iconv("UTF-8", "big5", $s));//iconv是轉換編碼函數從UTF-8轉big5,並計算字串長度
  echo "<HR>";
  echo iconv("UTF-8", "big5", $s);//iconv是轉換編碼函數從UTF-8轉big5
?>
