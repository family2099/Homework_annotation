<?php
function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);
usort($a, "cmp");//自訂義比较函数對陣列 $a 中的元素進行排序
foreach ($a as $key => $value) {
    echo "$key: $value <br />";
}

?>