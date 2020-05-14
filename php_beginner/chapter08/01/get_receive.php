<?php

$name = $_GET{'name'};
$hobby = $_GET{'hobby'};

?>
<!DOCTYPE html>
<html>
<head>
	<title>受信ページ</title>
</head>
<body>
<h1>受信ページ</h1>
<p>あなたの名前は<?php echo $name; ?>さんです</p>
<p>あなたの趣味は<?php echo $hobby; ?>です</p>
</body>
</html>