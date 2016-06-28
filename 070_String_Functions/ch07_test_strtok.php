<?php
$showStr = "Genius is|one/percent inspiration and ninety-nine percent perspiration.";
$s = strtok($showStr, " ");//strtok 函式用來將字串切割成更小的字串，第一個參數 $string 是要被切割的字串，必填項目，第二個參數 $token 則是切割字符
while ($s != "")
{
   echo $s. "*" . "<br>";
   $s = strtok(" .|/");
   
   
   // 如果這麼寫，程式會沒完沒了...
   // $s = strtok($showStr, " ");
}
?>