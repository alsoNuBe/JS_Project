<?php

$myArr = array();

for ($i=0; $i<5; $i++) {
	$myArr[$i] = date('Y-m-d H:i:s');
	sleep(3);
}

var_dump($myArr);

?>