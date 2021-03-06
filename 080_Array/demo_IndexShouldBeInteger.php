<?php


//Key會有下列提到的強制轉換
//1. 包含有合法整數型態的字串值會被轉換為整數型態。例如字串"8"實際會被儲存為整數8。但是"08"則不會被強制轉換，因為不是一個合法的十進位數值。
//2. 浮點數會被轉換為整數，小數點部分無條件捨去。例如8.7會被儲存為8。
//3. 布林值會被轉換成整數，true會儲存為1，false會被儲存為0。
//4. Null會被轉換成空字串，null會被儲存為""。
//5. 陣列和物件不能被當作key。如果使用會出現警告Illegal offset type。
$a = array(0.1 => 'A', 0.9 => 'B', '1.1' => 'C');//PHP會將

var_dump($a);//以陣列的形式呈現

?>
