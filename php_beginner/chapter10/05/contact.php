<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$inquiry = $_POST['inquiry'];

	$pattern = '/\A([a-z0-9_\-\+\/\?]+)';
	$pattern .= '@([a-z0-9\-]+\.)+[a-z]{2,6}\z/i';

	if(!preg_match($pattern, $email)){
		$err = 'メールアドレスの形式が違います';
	}
	if(!isset($err)){
		mb_language("Japanese");
		mb_internal_encoding("UTF-8");

		$subject = 'お問い合わせありがとうございましした';
		$inquiry =<<<EOM
{$name}さん

お問い合わせ内容
{$inquiry}
EOM;

		$headers = 'From: sender@sender.com' . "\r\n";

		if (mb_send_mail($email, $subject, $inquiry, $headers) === FALSE) {
			$message = 'メール送信失敗';
		}else{
			$message = 'お問い合わせを受け付けました。確認メールを送信しています';
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		p.red-text{ color: red; }
	</style>
	<title>お問い合わせ</title>
</head>
<body>
	<h1>お問い合わせ</h1>
	<?php if (isset($message)) {
		echo '<p class="red-text">'.$message.'</p>';
	} ?>
	<form action="" method="POST">
		<label>お名前</label>
		<p><input type="text" name="name"></p>
		<label>メールアドレス</label>
		<?php if (isset($err)) {
			echo '<p class="red-text">'.$err.'</p>';
		} ?>
		<p><input type="text" name="email"></p>
		<label>お問い合わせ内容</label>
		<p><textarea name="inquiry"></textarea></p>
		<input type="submit">
	</form>
</body>
</html>
