<?php
session_start();
$_SESSION['profile'] = array('user_name' => 'taro', 'location' => '関東');
$_SESSION['cart']['desk_01'] = 3;
$_SESSION['cart']['chair_07'] = 5;
?>

<!DOCTYPE html>
<html>
<head>
	<title>session</title>
</head>
<body>
	<h1>セッション練習</h1>
	<p><a href="session_check.php">次のページへ</a></p>
	<p><a href="session_delete.php">セッションデータ削除</a></p>
</body>
</html>