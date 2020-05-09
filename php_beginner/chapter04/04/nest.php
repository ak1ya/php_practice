<?php

//欠席は0、出席は1
$attend = 1;

$place = "b";

if ($attend === 0) {
	echo "欠席";
}elseif ($attend === 1) {
	echo "出席<br>";
	if ($place === "a") {
		echo "A会場";
	}elseif ($place === "b") {
		echo "B会場";
	}
}



?>