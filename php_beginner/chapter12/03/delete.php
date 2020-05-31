<?php
session_start();
$_SESSION = array();
$session_name = session_name();

if (isset($_COOKIE[$session_name]) === TRUE) {
	setcookie($session_name, '', time() - 3600);
}

session_destroy();
header('Location: cart.php');
exit;

?>
