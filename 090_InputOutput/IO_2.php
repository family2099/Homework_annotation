<?php

$fileDir = dirname ( __FILE__ );//取得檔案路徑
$fileResource = opendir ( $fileDir );//開啟資料夾

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

	<p>File list:</p>
	<ul>
	<!--//PHP包住的html會受PHP影響-->
	<?php while ($item = readdir($fileResource)) { ?>	<!--readdir讀取目錄的檔案名,檔案名稱不一定會排序,如要看是檔案或資料夾,可用isFile或isDir判斷	-->
		<li><?php echo $item; ?></li>
	<?php } ?>
	<!--下面這個寫法比較好理解	-->
	<?php while ($item = readdir($fileResource)) : ?>	
		<li><?php echo $item; ?></li>
	<?php endwhile; ?>
	</ul>

<?php closedir($fileResource); ?>
</body>
</html>
