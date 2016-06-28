<?php
  $x = 3;
  if ($x >= 10 && foo())//精簡評估當x<10時就不執行foo()
    echo "yes";
  else
    echo "no";
    
  echo "<hr>";

  $x = 3;
  if ($x >= 10 & foo())//慎重評估當x<10時還是會執行foo()
    echo "yes";
  else
    echo "no";
    
function foo()
{
   echo "foo() is running.<br>";
}

?>