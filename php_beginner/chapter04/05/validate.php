<?php
//POST内容を取得し、入力値が正しいか検証する。
$movie = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$movie = $_POST['movie'];

	if (mb_strlen($movie) === 0) {
		$err =  '文字を入力してください';
	}elseif (mb_strlen($movie) > 20) {
		$err = '20文字以内に入力してください';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.center{text-align: center;}
		input{margin: 5px;}
	</style>


	<title>validate</title>
</head>
<body>
<div class="center">
	<h1>入力フォーム検証</h1>
	<!-- varidate -->
	<p>
		<?php
		if(isset($err)) {
			echo $err;
		}else{
			echo "あなたの好きな映画は".$movie;
		}

		?>
	</p>
	<form action="" method="POST">
		<label>好きな映画</label>
		<input type="text" name="movie">
		<input type="submit">
	</form>
</div>
</body>
</html>