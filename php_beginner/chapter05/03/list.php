<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		ul{width: 100px;}
		.color-red{background-color: red;}
	</style>
	<title>list</title>
</head>
<body>
	<ul>
		<?php for($i = 1; $i <= 20; $i++){
			if($i % 2 === 1){ ?>
		<li class="color-red"><?php echo $i; ?></li>
		<?php }else{ ?> 	
		<li><?php echo $i; ?></li>
		<?php }	
		}
		?>
	</ul>

</body>
</html>
