<?php
//不用特意排列,會依序存入陣列
$bloodType[] = 'A';
$bloodType[] = 'B';
$bloodType[] = 'AB';
$bloodType[] = 'O';

for ($i = 0; $i <= 3; $i++) {
	echo $bloodType[$i] . "<br />";
}
?>