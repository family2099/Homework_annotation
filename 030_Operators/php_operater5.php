<?php
  $x = 1;
  $y = $x++;//先將x存入y在執行x++
  echo "x = $x, y = $y";
  
  echo "<br>";

  $x = 1;
  $y = ++$x;//先執行x++在將x存入y
  echo "x = $x, y = $y";
?>
