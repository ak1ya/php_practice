<?php
session_start();
//var_dump($_SESSION);
$profile = $_SESSION['profile'];
$cart = $_SESSION['cart'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>session</title>
</head>
<body>
	<p>こんにちは、<?php echo $profile['user_name']; ?></p>
	<p>地域：<?php echo $profile['location']; ?></p>
	<h1>カートの中身</h1>
	<hr>
	<table border="1">
		<tr>
			<th>商品ID</th>
			<th>個数</th>
		</tr>
		<?php foreach($cart as $key => $var): ?>
			<tr align="center">
				<td><?php echo $key; ?></td>
				<td><?php echo $var; ?></td>
			</tr>
		<?php endforeach; ?>	
	</table>
	<p><a href="session_set.php">戻る</a></p>
</body>
</html>