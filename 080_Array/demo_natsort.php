<?php

$a = array('a1', 'a3', 'a20', 'a15');

natsort($a);//本次自然排序法,所以a15和a20位置會對調。還有其他排序法,如字串排序法

//var_dump(natsort($a));
//echo "<br>";

foreach ($a as $k => $x)
{
	echo "$k => $x <br>";
}

?>
