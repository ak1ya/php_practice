<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>POST</title>
</head>
<body>
	<h1>POSTでデータ送信</h1>
	<p>プロフィール登録</p>
	<form action="post_receive.php" method="POST">
		<p>名前：<input type="text" name="name"></p>
		<p>性別：<input type="radio" name="sex" value="1">男
		<input type="radio" name="sex" value="2">女
		</p>
		<p>
			血液型：<select name="blood">
				<option value="A">A型</option>
				<option value="B">B型</option>
				<option value="O">O型</option>
				<option value="AB">AB型</option>
			</select>
		</p>
		<p>
			ひとこと：<br>
			<textarea name="comment" rows="4" cols="40"></textarea>
		</p>
		<p><input type="submit" value="送信"></p>
	</form>
</body>
</html>
