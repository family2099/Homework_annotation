<?php
//如果陣列內容沒設定k值(索引)會直接設為數字索引從0開始,並依序為沒加k的值添加數字索引,如下列'xxx'的k值為0、'yyy'的k值為1
$a = array('xxx', 'book' => '書籍', 'yyy', 'desk' => '書桌', 'pen' => '筆');

foreach ($a as $k => $s)
{
	 echo "$k = $s<br>";
}

?>