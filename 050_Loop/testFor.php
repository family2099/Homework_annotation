<?php
//for為你的程式碼需要重覆多次執行的時候使用，當符合條件時，
//for 迴圈就會一直執行到不符合條件為止
//for( 設定初始值 ; 比對運算式 ; 初始值執行動作  ) 
//本案例為雙層迴圈,如果i+j整除4的話跳過第二層迴圈
for ($i = 1; $i <= 3; $i++) {
	for ($j = 1; $j <= 4; $j++) {
		echo "$i , $j <br>";
		if (($i + $j) % 4 == 0)
		    break;//跳過出迴圈
	}
	echo "-----<br>";
}


?>