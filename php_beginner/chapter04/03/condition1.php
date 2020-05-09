<?php

$score = 82;
if ($score >= 0 && $score < 60) {
	echo "平均点以下";
}elseif ($score >= 60 && $score < 80) {
	echo "平均点越え";
}elseif ($score >= 80 && $score <100) {
	echo "優秀";
}elseif ($score === 100) {
	echo "満点";
}else{
	echo "再入力";
}


?>