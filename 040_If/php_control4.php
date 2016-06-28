<?php
	header("content-type: text/html; charset=utf-8");
	//switch 有點類似 if else 組的效果，通常用在當有一個變數或表達式需要與其他的條件比較，
	//符合哪個條件才執行的情況下使用，標準的 switch 語句至少包含多組 case 與 break 的組合，
	//例如當一個變數丟到 switch 流程去跑，會從第一個 case 開始依序比較，若符合條件就執行程式碼，
	//接著跳出 switch 語句，若不符合條件則進行下一個 case 的比較
	//本案例為num為3所以執行echo "參";
	$num = 3;
	switch ($num){
		case 0:
			echo "零";
			break;
		case 1:
			echo "壹";
			break;
		case 2:
			echo "貳";
			break;
		case 3:
			echo "參";
			break;
		case 4:
			echo "肆";
			break;
		case 5:
			echo "伍";
			break;
		case 6:
			echo "陸";
			break;
		case 7:
			echo "柒";
			break;
		case 8:
			echo "捌";
			break;
		case 9:
			echo "玖";
			break;
		default:
			echo "unknown";
	}  // end of switch
?>