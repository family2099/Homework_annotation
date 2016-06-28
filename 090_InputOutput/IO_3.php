<?php
if (isset ( $_POST ["btnOK"] )) {//看第一次執行還是送回來
	processFile ( $_FILES ["file1"] );//接收檔案陣列
	$_FILES ["file1"]["name"];
}
function processFile($objFile) {
	if ($objFile ["error"] != 0) {//判斷是否有上傳成功
		echo "Upload Fail! ";
		echo "<a href='javascript:window.history.back();'>Back</a>";
		return;
	}
	//move_uploaded_file() 函數將上傳的文件移動到新位置。第一個參數規定要移動的文件,第二個參數規定文件的新位置
	
	$test = move_uploaded_file ( $objFile ["tmp_name"], "./" . $objFile ["name"] );
	//如果無法將檔案移動
	if (! $test) {
		die ( "move_uploaded_file() faile" );
	}
	
	echo "File uploaded<br />";
//	echo "File name: " . $objFile ["tmp_name"] . "<br />";
	echo "File name: " . $objFile ["name"] . "<br />";//取得檔案名稱
	echo "File type: " . $objFile ["type"] . "<br />";//取得檔案種類
	echo "File size: " . $objFile ["size"] . "<br />";//取得檔案大小
	
	echo "--  Done --";
	exit ();
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab - Upload file</title>
</head>
<body>
<!--須設定enctype編碼方式-->
	<form method="post" enctype="multipart/form-data" action="">  
		1. Select a file：<input type="file" name="file1" /><br /> <input
			type="submit" name="btnOK" value="2. 送出資料" />
	</form>
</body>
</html>