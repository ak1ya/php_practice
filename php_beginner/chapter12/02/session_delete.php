<?php
session_start();
$_SESSION = array();
$session_name = session_name();

if (isset($_COOKIE[$session_name]) === TRUE) {
	setcookie($session_name, '', time() - 3600);
}

session_destroy();
var_dump($_SESSION);

?>

<!DOCTYPE html>
<html>
<head>
	<title>session</title>
</head>
<body>
	<p><a href="session_set.php">戻る</a></p>
</body>
</html>