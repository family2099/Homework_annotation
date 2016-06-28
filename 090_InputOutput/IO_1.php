<?php

echo "Path and FileName:" . __FILE__ . "<br />";//實體路徑
echo "Path: " . dirname ( __FILE__ );//是字串函式,不是目錄函式,取得路徑
echo "Filename: " . basename ( __FILE__ ) . "<br />";//取得檔名
echo "Filesize: " . filesize ( __FILE__ )//取得檔案大小,檔案大小未必跟記憶體大小一樣?>
