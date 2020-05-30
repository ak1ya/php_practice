<!DOCTYPE html>
<html>
<head>
	<title>ひとこと掲示板</title>
</head>
<body>
	<h1>ひとこと掲示板</h1>
	<table border="1">
		<tr style="background-color: orange;">
			<th>名前</th>
			<th>コメント</th>
			<th>時刻</th>		
		</tr>
		<?php if(count($data)):
			 foreach($data as $row): ?>
		<tr>
			<td><?php echo html_escape($row['name']); ?></td>
			<td><?php echo nl2br(html_escape($row['comment'])); ?></td>
			<td><?php echo $row['created']; ?></td>
		 <?php endforeach;
		 	   endif; ?>
	</table>
	<?php if(count($errs)){
		foreach ($errs as $err) {
			echo '<p style="color:red">'.$err.'</p>';
		}
	} ?>
	<form action="" method="POST">
		<p>お名前*<input type="text" name="name">(50字まで)</p>
		<p>ひとこと*<textarea name="comment" rows="4" cols="40"></textarea>(200字まで)</p>
		<input type="submit" value="書き込む">
	</form>
</body>
</html>