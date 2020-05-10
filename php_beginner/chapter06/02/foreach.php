<?php

$array = array(
	'name' => '鈴木',
	'hobby' => '水泳',
	'email' => 'sample@sample.com'

);

foreach ($array as $key => $value) {
	echo $key.'.'.$value.'<br>';
}

foreach ($array as $value) {
	echo $value.'<br>';
}

?>