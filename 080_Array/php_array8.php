<?php
	$testArray = array("A1", "A2", "A18");
	sort($testArray);//沒有指定排序的種類,會用預設的ASCII來排序
	var_dump($testArray);
	
	echo "<br />";
	
	natsort($testArray);//自然排序
	var_dump($testArray);
?>
