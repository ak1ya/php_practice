
<!DOCTYPE html>
<html>
<head>
	<title>チェックボックス</title>
</head>
<body>
<h1>チェックボックス</h1>
<p>好きな色を選択してください</p>
<form action="checkbox_receive.php" method="POST">
	<p>
		<input type="checkbox" name="colors[]" value="青">青
		<input type="checkbox" name="colors[]" value="赤">赤
		<input type="checkbox" name="colors[]" value="黄">黄
		<input type="checkbox" name="colors[]" value="綠">綠
		<input type="checkbox" name="colors[]" value="紫">紫
		<input type="checkbox" name="colors[]" value="白">白
		<input type="checkbox" name="colors[]" value="橙">橙
	</p>
	<input type="submit">
</form>
</body>
</html>