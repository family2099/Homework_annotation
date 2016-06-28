<?php
  
    echo "flag 1<br>";
    @require("MyLibrary.php");//@不會產生錯誤訊息,但並不表示就沒有錯誤,如果有嚴重錯誤下面程式不會執行
    echo "flag 2<br>";

?>