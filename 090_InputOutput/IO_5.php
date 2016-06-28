<?php
	$contents = file_get_contents('data.txt');\\讀取檔案得到字串
	echo (str_replace("\r\n", "<br />", $contents));將$contents內容中的//\r\n取代為<br />
?>