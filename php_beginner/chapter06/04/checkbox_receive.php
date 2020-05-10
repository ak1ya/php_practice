<?php

$colors = $_POST['colors'];
//var_dump($colors);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>チェックボックス</title>
</head>
<body>
<h1>受信ページ</h1>
<h2>好きな色</h2>
<ul>
	<?php foreach ($colors as $var) { ?>
		<li><?php echo htmlspecialchars($var,ENT_QUOTES,'UTF-8'); ?></li>
	<?php } ?>

</ul>

</body>
</html>