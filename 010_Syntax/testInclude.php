<?php
  
  include("testDefine.php");//一定會重複做一次引入
  require("testDefine.php");//一定會重複做一次引入
  include_once("testDefine.php"); //1.如果前面已經有include過一次,就不會再重覆做一次引入;2.如果前面沒有include過include_once會執行一次之後再有不會執行include_once
  require_once("testDefine.php"); //1.如果前面已經有require過一次,就不會再重覆做一次引入;2.如果前面沒有require過require_once會執行一次之後再有不會執行require_once
?>