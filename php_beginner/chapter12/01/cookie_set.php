<?php
setcookie('email', 'sample@sample.com', time() + (60 * 60 * 24 * 30));
?>

<!DOCTYPE html>
<html>
<head>
	<title>cookie</title>
</head>
<body>
	<h1>クッキー練習</h1>
	<a href="cookie_check.php">次のクッキーへ</a>
	<a href="cookie_delete.php">クッキーの削除</a>

</body>
</html>