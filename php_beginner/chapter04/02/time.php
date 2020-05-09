<?php

$time = date('G');

var_dump($time);

if($time < 12){
	echo "午前";
}elseif ($time >= 12) {
	echo "午後";
}


?>