<?php

var_dump($_POST);
$name = $_POST{'name'};
$sex = (int)$_POST{'sex'};
$blood = $_POST{'blood'};
$comment = $_POST{'comment'};

?>
<!DOCTYPE html>
<html>
<head>
	<title>受信ページ</title>
</head>
<body>
<h1>受信ページ</h1>
<p>あなたの名前は<?php echo $name; ?>さんです</p>
<p>あなたの性別は
	<?php if ($sex === 1) {
		echo '男性';	}
		elseif ($sex === 2) {
		  	echo '女性';
		  }  ?>
です</p>
<p>あなたの血液型は<?php echo $blood; ?>型です</p>
<p><?php echo nl2br($comment); ?></p>
</body>
</html>