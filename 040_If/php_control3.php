<?php
	$score = 95;
	//多條件判斷式,如果分數造成哪個條件式成立就執行該敘述式,如分數為81則執行echo 'B';因為$score>=80 && $score<90條件成立
	if ($score >=60 && $score < 70) {
		echo 'D';
	} elseif ($score>=70 && $score<80) {
		echo 'C';
	} elseif ($score>=80 && $score<90) {
		echo 'B';		
	} elseif ($score>=90 && $score<=100) {
		echo 'A';		
	} else {
		echo 'Fail';
	}
?>